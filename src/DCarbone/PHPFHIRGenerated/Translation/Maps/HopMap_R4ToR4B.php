<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Translation\Maps;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 *
 * Class creation date: November 22nd, 2026 04:37+0000
 *
 * PHPFHIR Copyright:
 *
 * Copyright 2016-2026 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *        http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

use DCarbone\PHPFHIRGenerated\Translation\HopMapInterface;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version as Version1;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\VersionInterface;

final class HopMap_R4ToR4B implements HopMapInterface
{
    private const _REMOVED_TYPES = [
        'ClaimProcessingCodes',
        'EffectEvidenceSynthesis',
        'EffectEvidenceSynthesis.Certainty',
        'EffectEvidenceSynthesis.CertaintySubcomponent',
        'EffectEvidenceSynthesis.EffectEstimate',
        'EffectEvidenceSynthesis.PrecisionEstimate',
        'EffectEvidenceSynthesis.ResultsByExposure',
        'EffectEvidenceSynthesis.SampleSize',
        'EvidenceVariableType',
        'ExposureState',
        'MedicinalProduct',
        'MedicinalProduct.CountryLanguage',
        'MedicinalProduct.ManufacturingBusinessOperation',
        'MedicinalProduct.Name',
        'MedicinalProduct.NamePart',
        'MedicinalProduct.SpecialDesignation',
        'MedicinalProductAuthorization',
        'MedicinalProductAuthorization.JurisdictionalAuthorization',
        'MedicinalProductAuthorization.Procedure',
        'MedicinalProductContraindication',
        'MedicinalProductContraindication.OtherTherapy',
        'MedicinalProductIndication',
        'MedicinalProductIndication.OtherTherapy',
        'MedicinalProductIngredient',
        'MedicinalProductIngredient.ReferenceStrength',
        'MedicinalProductIngredient.SpecifiedSubstance',
        'MedicinalProductIngredient.Strength',
        'MedicinalProductIngredient.Substance',
        'MedicinalProductInteraction',
        'MedicinalProductInteraction.Interactant',
        'MedicinalProductManufactured',
        'MedicinalProductPackaged',
        'MedicinalProductPackaged.BatchIdentifier',
        'MedicinalProductPackaged.PackageItem',
        'MedicinalProductPharmaceutical',
        'MedicinalProductPharmaceutical.Characteristics',
        'MedicinalProductPharmaceutical.RouteOfAdministration',
        'MedicinalProductPharmaceutical.TargetSpecies',
        'MedicinalProductPharmaceutical.WithdrawalPeriod',
        'MedicinalProductUndesirableEffect',
        'RiskEvidenceSynthesis',
        'RiskEvidenceSynthesis.Certainty',
        'RiskEvidenceSynthesis.CertaintySubcomponent',
        'RiskEvidenceSynthesis.PrecisionEstimate',
        'RiskEvidenceSynthesis.RiskEstimate',
        'RiskEvidenceSynthesis.SampleSize',
        'SubstanceAmount',
        'SubstanceAmount.ReferenceRange',
        'SubstanceNucleicAcid',
        'SubstanceNucleicAcid.Linkage',
        'SubstanceNucleicAcid.Subunit',
        'SubstanceNucleicAcid.Sugar',
        'SubstancePolymer',
        'SubstancePolymer.DegreeOfPolymerisation',
        'SubstancePolymer.MonomerSet',
        'SubstancePolymer.Repeat',
        'SubstancePolymer.RepeatUnit',
        'SubstancePolymer.StartingMaterial',
        'SubstancePolymer.StructuralRepresentation',
        'SubstanceProtein',
        'SubstanceProtein.Subunit',
        'SubstanceReferenceInformation',
        'SubstanceReferenceInformation.Classification',
        'SubstanceReferenceInformation.Gene',
        'SubstanceReferenceInformation.GeneElement',
        'SubstanceReferenceInformation.Target',
        'SubstanceSourceMaterial',
        'SubstanceSourceMaterial.Author',
        'SubstanceSourceMaterial.FractionDescription',
        'SubstanceSourceMaterial.Hybrid',
        'SubstanceSourceMaterial.Organism',
        'SubstanceSourceMaterial.OrganismGeneral',
        'SubstanceSourceMaterial.PartDescription',
        'SubstanceSpecification',
        'SubstanceSpecification.Code',
        'SubstanceSpecification.Isotope',
        'SubstanceSpecification.Moiety',
        'SubstanceSpecification.MolecularWeight',
        'SubstanceSpecification.Name',
        'SubstanceSpecification.Official',
        'SubstanceSpecification.Property',
        'SubstanceSpecification.Relationship',
        'SubstanceSpecification.Representation',
        'SubstanceSpecification.Structure',
        'vConfidentialityClassification',
    ];
    /** @var null|\DCarbone\PHPFHIRGenerated\Translation\CodeMap[] */
    private static null|array $_codeMaps = null;
    /** @var null|array<string, \DCarbone\PHPFHIRGenerated\Translation\XverExtension> */
    private static null|array $_xverExtensions = null;

    public function getSourceVersion(): VersionInterface
    {
        return new Version();
    }

    public function getTargetVersion(): VersionInterface
    {
        return new Version1();
    }

    public function getRemovedTypes(): array
    {
        return self::_REMOVED_TYPES;
    }

    public function getCodeMaps(): array
    {
        if (null === self::$_codeMaps) {
            self::$_codeMaps = [
            ];
        }
        return self::$_codeMaps;
    }

    public function getXverExtensions(): array
    {
        if (null === self::$_xverExtensions) {
            self::$_xverExtensions = [
            ];
        }
        return self::$_xverExtensions;
    }
}
