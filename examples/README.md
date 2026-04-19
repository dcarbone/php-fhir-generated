# Examples

Working examples for pharmaceutical FHIR R5 resources (IDMP).

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
