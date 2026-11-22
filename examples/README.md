# Examples

The [medicinal product example](#ibuprofen-400-mg-film-coated-tablets) builds an R5 pharmaceutical bundle.
The [translation example](#inspecting-data-loss-when-translating-an-r5-account) shows how to tell what was lost
when moving a resource to an earlier FHIR release.

## Ibuprofen 400 mg film-coated tablets

[`medicinal-product.php`](medicinal-product.php) builds a FHIR R5 `Bundle`
(type `collection`) of six related resources:

    Bundle (collection)
    ├── MedicinalProductDefinition      — Product, ATC M01AE01
    ├── Ingredient                      — Ibuprofen, 400 mg / tablet
    ├── PackagedProductDefinition       — Pack of 20, PZN identifier
    ├── AdministrableProductDefinition  — Film-coated tablet, oral use (EDQM)
    ├── RegulatedAuthorization          — Marketing authorization
    └── Organization                    — Regulator

Intra-bundle references use `urn:uuid:`. Strength is modelled as
`Ingredient.substance.strength.presentationRatio` (400 mg per 1 tablet) —
idiomatic for fixed-dose units and consistent with EMA ePI implementation
guides.

## Run

    composer install
    php examples/medicinal-product.php > bundle.json

The output is a fully formed FHIR R5 bundle in JSON.

## Validate

Against the public HAPI R5 test server:

    curl -s -X POST "https://hapi.fhir.org/baseR5/Bundle/\$validate" \
      -H "Content-Type: application/fhir+json" \
      --data-binary @bundle.json | jq '.issue[] | {severity, msg: .diagnostics}'

Expected: **0 errors**, 5 warnings (UCUM `{tablet}` annotation best-practice
and terminology-server limits on EDQM / `regulated-authorization-type` —
neither indicates data problems).

Locally against the official HL7 validator:

    java -jar validator_cli.jar bundle.json -version 5.0 -tx http://tx.fhir.org/r5

## Code systems used

| System | URI | Example |
|---|---|---|
| ATC (WHO) | `http://www.whocc.no/atc` | `M01AE01` (Ibuprofen) |
| EDQM Standard Terms | `http://standardterms.edqm.eu` | `10221000` (Film-coated tablet) |
| PZN (Germany) | `http://fhir.de/CodeSystem/ifa/pzn` | 8-digit code |
| SNOMED CT | `http://snomed.info/sct` | `387207008` (Ibuprofen substance) |
| Ingredient role | `http://hl7.org/fhir/ingredient-role` | `100000072072` (Active) |
| Publication status | `http://hl7.org/fhir/publication-status` | `active` |
| UCUM | `http://unitsofmeasure.org` | `mg`, `{tablet}` |

## Design choices

- **Bundle type `collection`** — readable over ePI-realistic. An ePI-compliant
  variant would use `document` + `Composition` + labelling sections; not
  needed for a minimal intro.
- **No `SubstanceDefinition` resource** — the ingredient substance is
  identified directly via `CodeableConcept` in `CodeableReference.concept`.
  Production systems would typically reference a `SubstanceDefinition`.
- **No `ManufacturedItemDefinition`** — `PackagedProductDefinition.containedItemQuantity`
  carries the "20 tablets per pack" fact without a separate resource.

## Inspecting data loss when translating an R5 Account

R5 has an `Account.currency` field; R4B does not. The default translator in v4.3.1 throws
`MissingXverDefinitionException` rather than silently losing the currency. If loss is acceptable, opt into `DROP`
and inspect the notices. To run this example, save it as a PHP file in the repository root after `composer install`:

```php
<?php

use DCarbone\PHPFHIRGenerated\Encoding\ResourceParser;
use DCarbone\PHPFHIRGenerated\Translation\OnUnmappableFieldEnum;
use DCarbone\PHPFHIRGenerated\Translation\TranslationConfig;
use DCarbone\PHPFHIRGenerated\Translation\Translator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version as R4BVersion;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version as R5Version;

require __DIR__ . '/vendor/autoload.php';

$account = ResourceParser::parse(new R5Version(), '{"resourceType":"Account","status":"active","currency":{"text":"USD"}}');
$translator = new Translator(new TranslationConfig(onUnmappableField: OnUnmappableFieldEnum::DROP));
$result = $translator->translate($account, new R4BVersion());

echo json_encode($result->getResource(), JSON_THROW_ON_ERROR), "\n";
foreach ($result->getNotices() as $notice) {
    printf("%s -> %s: %s %s\n", $notice->getSourceVersion(), $notice->getTargetVersion(),
        $notice->getKind(), $notice->getPath());
}
```

Output:

```text
{"status":"active","resourceType":"Account"}
R5 -> R4B: dropped Account.currency
```

Translating that R4B Account back to R5 cannot recover the currency. See
[Cross-Version Translation](https://github.com/dcarbone/php-fhir-generated/wiki/Translation) for the other policies.
