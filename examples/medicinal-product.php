<?php

/**
 * FHIR R5 IDMP — Ibuprofen 400 mg film-coated tablets
 *
 * Demonstrates building and JSON-serializing a FHIR R5 Bundle (collection)
 * of six related IDMP resources using dcarbone/php-fhir-generated.
 *
 * Construction uses PHP 8.1+ named arguments throughout — the recommended
 * pattern for this SDK.
 *
 * Run:       php examples/medicinal-product.php > bundle.json
 * Validate:  java -jar validator_cli.jar bundle.json -version 5.0
 */

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;

use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionName;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientSubstance;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientStrength;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionRouteOfAdministration;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry;

use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRBundle;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAdministrableProductDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRIngredient;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIROrganization;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPackagedProductDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRRegulatedAuthorization;

// ---------------------------------------------------------------------------
// Code system URIs — centralized for reuse across resources
// ---------------------------------------------------------------------------
const SYS_ATC            = 'http://www.whocc.no/atc';
const SYS_EDQM           = 'http://standardterms.edqm.eu';
const SYS_PZN            = 'http://fhir.de/CodeSystem/ifa/pzn';
const SYS_PUB_STATUS     = 'http://hl7.org/fhir/publication-status';
const SYS_INGR_ROLE      = 'http://hl7.org/fhir/ingredient-role';
const SYS_REG_AUTH_TYPE  = 'http://hl7.org/fhir/CodeSystem/regulated-authorization-type';
const SYS_SNOMED         = 'http://snomed.info/sct';
const SYS_UCUM           = 'http://unitsofmeasure.org';

// ---------------------------------------------------------------------------
// UUIDs for intra-bundle references (urn:uuid:…)
// ---------------------------------------------------------------------------
$id = [
    'mpd'   => 'b1e3f7a8-0001-4000-a000-000000000001',
    'ingr'  => 'b1e3f7a8-0002-4000-a000-000000000002',
    'pkg'   => 'b1e3f7a8-0003-4000-a000-000000000003',
    'adm'   => 'b1e3f7a8-0004-4000-a000-000000000004',
    'auth'  => 'b1e3f7a8-0005-4000-a000-000000000005',
    'org'   => 'b1e3f7a8-0006-4000-a000-000000000006',
];

// Minimal narrative (dom-6 best practice). "generated" = text derived from
// the structured data — sufficient for an example bundle.
$narrative = fn(string $summary): FHIRNarrative => new FHIRNarrative(
    status: 'generated',
    div: '<div xmlns="http://www.w3.org/1999/xhtml">' . htmlspecialchars($summary) . '</div>',
);

// ---------------------------------------------------------------------------
// 1. MedicinalProductDefinition — the product
// ---------------------------------------------------------------------------
// Status in R5 is a CodeableConcept (not a plain code), bound to
// PublicationStatus. For an authorized product: 'active'.
$mpd = new FHIRMedicinalProductDefinition(
    id: $id['mpd'],
    text: $narrative('Ibuprofen 400 mg film-coated tablets, ATC M01AE01'),
    identifier: [
        new FHIRIdentifier(system: 'https://example.org/mpid', value: 'IBU400-FT-20'),
    ],
    status: new FHIRCodeableConcept(coding: [
        new FHIRCoding(system: SYS_PUB_STATUS, code: 'active', display: 'Active'),
    ]),
    classification: [
        new FHIRCodeableConcept(coding: [
            new FHIRCoding(system: SYS_ATC, code: 'M01AE01', display: 'Ibuprofen'),
        ]),
    ],
    name: [
        new FHIRMedicinalProductDefinitionName(
            productName: 'Ibuprofen 400 mg film-coated tablets',
        ),
    ],
);

// ---------------------------------------------------------------------------
// 2. Ingredient — active substance with strength
// ---------------------------------------------------------------------------
// Strength modelling: presentationRatio = 400 mg per 1 tablet. For fixed-
// dose units, Ratio is the idiomatic FHIR/IDMP form — explicit "per unit",
// consistent with EMA ePI implementation guides.
$ingredient = new FHIRIngredient(
    id: $id['ingr'],
    text: $narrative('Active substance ibuprofen, 400 mg per film-coated tablet'),
    status: 'active',
    for: [
        new FHIRReference(reference: 'urn:uuid:' . $id['mpd']),
    ],
    role: new FHIRCodeableConcept(coding: [
        new FHIRCoding(system: SYS_INGR_ROLE, code: '100000072072', display: 'Active'),
    ]),
    substance: new FHIRIngredientSubstance(
        // Direct code instead of a SubstanceDefinition reference — minimal variant.
        code: new FHIRCodeableReference(
            concept: new FHIRCodeableConcept(
                coding: [new FHIRCoding(system: SYS_SNOMED, code: '387207008', display: 'Ibuprofen')],
                text: 'Ibuprofen',
            ),
        ),
        strength: [
            new FHIRIngredientStrength(
                presentationRatio: new FHIRRatio(
                    numerator: new FHIRQuantity(value: 400, unit: 'mg', system: SYS_UCUM, code: 'mg'),
                    denominator: new FHIRQuantity(value: 1, unit: 'tablet', system: SYS_UCUM, code: '{tablet}'),
                ),
            ),
        ],
    ),
);

// ---------------------------------------------------------------------------
// 3. PackagedProductDefinition — pack of 20 film-coated tablets, PZN
// ---------------------------------------------------------------------------
// containedItemQuantity carries the total count per pack without a separate
// ManufacturedItemDefinition — sufficient for a minimal example.
$package = new FHIRPackagedProductDefinition(
    id: $id['pkg'],
    text: $narrative('Carton of 20 film-coated tablets, PZN 12345678'),
    identifier: [
        new FHIRIdentifier(system: SYS_PZN, value: '12345678'),
    ],
    name: 'Ibuprofen 400 mg film-coated tablets, 20 units',
    packageFor: [
        new FHIRReference(reference: 'urn:uuid:' . $id['mpd']),
    ],
    status: new FHIRCodeableConcept(coding: [
        new FHIRCoding(system: SYS_PUB_STATUS, code: 'active', display: 'Active'),
    ]),
    containedItemQuantity: [
        new FHIRQuantity(value: 20, unit: 'tablet', system: SYS_UCUM, code: '{tablet}'),
    ],
);

// ---------------------------------------------------------------------------
// 4. AdministrableProductDefinition — dose form & route
// ---------------------------------------------------------------------------
// EDQM Standard Terms:
//   10221000 = Film-coated tablet
//   20053000 = Oral use
$admin = new FHIRAdministrableProductDefinition(
    id: $id['adm'],
    text: $narrative('Dose form: film-coated tablet for oral use'),
    status: 'active',
    formOf: [
        new FHIRReference(reference: 'urn:uuid:' . $id['mpd']),
    ],
    administrableDoseForm: new FHIRCodeableConcept(coding: [
        new FHIRCoding(system: SYS_EDQM, code: '10221000', display: 'Film-coated tablet'),
    ]),
    routeOfAdministration: [
        new FHIRAdministrableProductDefinitionRouteOfAdministration(
            code: new FHIRCodeableConcept(coding: [
                new FHIRCoding(system: SYS_EDQM, code: '20053000', display: 'Oral use'),
            ]),
        ),
    ],
);

// ---------------------------------------------------------------------------
// 5. Organization — the regulator
// ---------------------------------------------------------------------------
$regulator = new FHIROrganization(
    id: $id['org'],
    text: $narrative('Bundesinstitut für Arzneimittel und Medizinprodukte (BfArM)'),
    name: 'Bundesinstitut für Arzneimittel und Medizinprodukte',
);

// ---------------------------------------------------------------------------
// 6. RegulatedAuthorization — marketing authorization
// ---------------------------------------------------------------------------
$authorization = new FHIRRegulatedAuthorization(
    id: $id['auth'],
    text: $narrative('Marketing authorization, status active'),
    identifier: [
        new FHIRIdentifier(system: 'https://example.org/authorization', value: '12345.00.00'),
    ],
    subject: [
        new FHIRReference(reference: 'urn:uuid:' . $id['mpd']),
    ],
    type: new FHIRCodeableConcept(coding: [
        new FHIRCoding(system: SYS_REG_AUTH_TYPE, code: 'MarketingAuth', display: 'Marketing Authorization'),
    ]),
    status: new FHIRCodeableConcept(coding: [
        new FHIRCoding(system: SYS_PUB_STATUS, code: 'active', display: 'Active'),
    ]),
    regulator: new FHIRReference(reference: 'urn:uuid:' . $id['org']),
);

// ---------------------------------------------------------------------------
// Assemble the Bundle (type = collection)
// ---------------------------------------------------------------------------
$bundle = new FHIRBundle(
    type: 'collection',
    timestamp: new DateTimeImmutable(),
    entry: [
        new FHIRBundleEntry(fullUrl: 'urn:uuid:' . $id['mpd'],  resource: $mpd),
        new FHIRBundleEntry(fullUrl: 'urn:uuid:' . $id['ingr'], resource: $ingredient),
        new FHIRBundleEntry(fullUrl: 'urn:uuid:' . $id['pkg'],  resource: $package),
        new FHIRBundleEntry(fullUrl: 'urn:uuid:' . $id['adm'],  resource: $admin),
        new FHIRBundleEntry(fullUrl: 'urn:uuid:' . $id['auth'], resource: $authorization),
        new FHIRBundleEntry(fullUrl: 'urn:uuid:' . $id['org'],  resource: $regulator),
    ],
);

// ---------------------------------------------------------------------------
// JSON output — every class implements JsonSerializable
// ---------------------------------------------------------------------------
echo json_encode($bundle, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE), PHP_EOL;
