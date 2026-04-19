<?php

/**
 * FHIR R5 IDMP — Ibuprofen 400 mg film-coated tablets
 *
 * Demonstrates building and JSON-serializing a FHIR R5 Bundle (collection)
 * of six related IDMP resources using dcarbone/php-fhir-generated.
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

// ---------------------------------------------------------------------------
// Helper builders
// ---------------------------------------------------------------------------
function coding(string $system, string $code, ?string $display = null): FHIRCoding
{
    $c = (new FHIRCoding())->setSystem($system)->setCode($code);
    if ($display !== null) {
        $c->setDisplay($display);
    }
    return $c;
}

function codeableConcept(string $system, string $code, ?string $display = null): FHIRCodeableConcept
{
    return (new FHIRCodeableConcept())->addCoding(coding($system, $code, $display));
}

function reference(string $urnUuid, ?string $display = null): FHIRReference
{
    $r = (new FHIRReference())->setReference($urnUuid);
    if ($display !== null) {
        $r->setDisplay($display);
    }
    return $r;
}

function identifier(string $system, string $value): FHIRIdentifier
{
    return (new FHIRIdentifier())->setSystem($system)->setValue($value);
}

function quantity(float $value, string $unit, string $ucumCode): FHIRQuantity
{
    return (new FHIRQuantity())
        ->setValue($value)
        ->setUnit($unit)
        ->setSystem(SYS_UCUM)
        ->setCode($ucumCode);
}

function bundleEntry(string $uuid, $resource): FHIRBundleEntry
{
    return (new FHIRBundleEntry())
        ->setFullUrl('urn:uuid:' . $uuid)
        ->setResource($resource);
}

// Minimal narrative (dom-6 best practice). "generated" = text derived from
// the structured data — sufficient for an example bundle.
function narrative(string $summary): FHIRNarrative
{
    return (new FHIRNarrative())
        ->setStatus('generated')
        ->setDiv('<div xmlns="http://www.w3.org/1999/xhtml">' . htmlspecialchars($summary) . '</div>');
}

// ---------------------------------------------------------------------------
// 1. MedicinalProductDefinition — the product
// ---------------------------------------------------------------------------
// Status in R5 is a CodeableConcept (not a plain code), bound to
// PublicationStatus. For an authorized product: 'active'.
$mpd = (new FHIRMedicinalProductDefinition())
    ->setId($id['mpd'])
    ->setText(narrative('Ibuprofen 400 mg film-coated tablets, ATC M01AE01'))
    ->addIdentifier(identifier('https://example.org/mpid', 'IBU400-FT-20'))
    ->setStatus(codeableConcept(SYS_PUB_STATUS, 'active', 'Active'))
    ->addClassification(codeableConcept(SYS_ATC, 'M01AE01', 'Ibuprofen'))
    ->addName(
        (new FHIRMedicinalProductDefinitionName())
            ->setProductName('Ibuprofen 400 mg film-coated tablets')
    );

// ---------------------------------------------------------------------------
// 2. Ingredient — active substance with strength
// ---------------------------------------------------------------------------
// Strength modelling: presentationRatio = 400 mg per 1 tablet. For fixed-
// dose units, Ratio is the idiomatic FHIR/IDMP form — explicit "per unit",
// consistent with EMA ePI implementation guides.
$ingredient = (new FHIRIngredient())
    ->setId($id['ingr'])
    ->setText(narrative('Active substance ibuprofen, 400 mg per film-coated tablet'))
    ->setStatus('active')
    ->addFor(reference('urn:uuid:' . $id['mpd']))
    ->setRole(codeableConcept(SYS_INGR_ROLE, '100000072072', 'Active'))
    ->setSubstance(
        (new FHIRIngredientSubstance())
            ->setCode(
                (new FHIRCodeableReference())->setConcept(
                    // Direct code instead of a SubstanceDefinition reference — minimal variant.
                    (new FHIRCodeableConcept())
                        ->addCoding(coding('http://snomed.info/sct', '387207008', 'Ibuprofen'))
                        ->setText('Ibuprofen')
                )
            )
            ->addStrength(
                (new FHIRIngredientStrength())->setPresentationRatio(
                    (new FHIRRatio())
                        ->setNumerator(quantity(400, 'mg', 'mg'))
                        ->setDenominator(quantity(1, 'tablet', '{tablet}'))
                )
            )
    );

// ---------------------------------------------------------------------------
// 3. PackagedProductDefinition — pack of 20 film-coated tablets, PZN
// ---------------------------------------------------------------------------
// containedItemQuantity carries the total count per pack without a separate
// ManufacturedItemDefinition — sufficient for a minimal example.
$package = (new FHIRPackagedProductDefinition())
    ->setId($id['pkg'])
    ->setText(narrative('Carton of 20 film-coated tablets, PZN 12345678'))
    ->addIdentifier(identifier(SYS_PZN, '12345678'))
    ->setName('Ibuprofen 400 mg film-coated tablets, 20 units')
    ->addPackageFor(reference('urn:uuid:' . $id['mpd']))
    ->setStatus(codeableConcept(SYS_PUB_STATUS, 'active', 'Active'))
    ->addContainedItemQuantity(quantity(20, 'tablet', '{tablet}'));

// ---------------------------------------------------------------------------
// 4. AdministrableProductDefinition — dose form & route
// ---------------------------------------------------------------------------
// EDQM Standard Terms:
//   10221000 = Film-coated tablet
//   20053000 = Oral use
$admin = (new FHIRAdministrableProductDefinition())
    ->setId($id['adm'])
    ->setText(narrative('Dose form: film-coated tablet for oral use'))
    ->setStatus('active')
    ->addFormOf(reference('urn:uuid:' . $id['mpd']))
    ->setAdministrableDoseForm(codeableConcept(SYS_EDQM, '10221000', 'Film-coated tablet'))
    ->addRouteOfAdministration(
        (new FHIRAdministrableProductDefinitionRouteOfAdministration())
            ->setCode(codeableConcept(SYS_EDQM, '20053000', 'Oral use'))
    );

// ---------------------------------------------------------------------------
// 5. Organization — the regulator
// ---------------------------------------------------------------------------
$regulator = (new FHIROrganization())
    ->setId($id['org'])
    ->setText(narrative('Bundesinstitut für Arzneimittel und Medizinprodukte (BfArM)'))
    ->setName('Bundesinstitut für Arzneimittel und Medizinprodukte');

// ---------------------------------------------------------------------------
// 6. RegulatedAuthorization — marketing authorization
// ---------------------------------------------------------------------------
$authorization = (new FHIRRegulatedAuthorization())
    ->setId($id['auth'])
    ->setText(narrative('Marketing authorization, status active'))
    ->addIdentifier(identifier('https://example.org/authorization', '12345.00.00'))
    ->addSubject(reference('urn:uuid:' . $id['mpd']))
    ->setType(codeableConcept(SYS_REG_AUTH_TYPE, 'MarketingAuth', 'Marketing Authorization'))
    ->setStatus(codeableConcept(SYS_PUB_STATUS, 'active', 'Active'))
    ->setRegulator(reference('urn:uuid:' . $id['org']));

// ---------------------------------------------------------------------------
// Assemble the Bundle (type = collection)
// ---------------------------------------------------------------------------
$bundle = (new FHIRBundle())
    ->setType('collection')
    ->setTimestamp(new DateTimeImmutable())
    ->addEntry(bundleEntry($id['mpd'],  $mpd))
    ->addEntry(bundleEntry($id['ingr'], $ingredient))
    ->addEntry(bundleEntry($id['pkg'],  $package))
    ->addEntry(bundleEntry($id['adm'],  $admin))
    ->addEntry(bundleEntry($id['auth'], $authorization))
    ->addEntry(bundleEntry($id['org'],  $regulator));

// ---------------------------------------------------------------------------
// JSON output — every class implements JsonSerializable
// ---------------------------------------------------------------------------
echo json_encode($bundle, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE), PHP_EOL;
