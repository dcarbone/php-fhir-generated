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
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version as Version1;
use DCarbone\PHPFHIRGenerated\Versions\VersionInterface;

final class HopMap_R4BToR4 implements HopMapInterface
{
    private const _REMOVED_TYPES = [
        'AdministrableProductDefinition',
        'AdministrableProductDefinition.Property',
        'AdministrableProductDefinition.RouteOfAdministration',
        'AdministrableProductDefinition.TargetSpecies',
        'AdministrableProductDefinition.WithdrawalPeriod',
        'AgeUnits',
        'CharacteristicCombination',
        'Citation',
        'Citation.Abstract',
        'Citation.AffiliationInfo',
        'Citation.CitedArtifact',
        'Citation.Classification',
        'Citation.Classification1',
        'Citation.ContributionInstance',
        'Citation.Contributorship',
        'Citation.DateOfPublication',
        'Citation.Entry',
        'Citation.Part',
        'Citation.PeriodicRelease',
        'Citation.PublicationForm',
        'Citation.PublishedIn',
        'Citation.RelatesTo',
        'Citation.RelatesTo1',
        'Citation.StatusDate',
        'Citation.StatusDate1',
        'Citation.Summary',
        'Citation.Summary1',
        'Citation.Title',
        'Citation.Version',
        'Citation.WebLocation',
        'Citation.WhoClassified',
        'ClinicalUseDefinition',
        'ClinicalUseDefinition.Contraindication',
        'ClinicalUseDefinition.Indication',
        'ClinicalUseDefinition.Interactant',
        'ClinicalUseDefinition.Interaction',
        'ClinicalUseDefinition.OtherTherapy',
        'ClinicalUseDefinition.UndesirableEffect',
        'ClinicalUseDefinition.Warning',
        'ClinicalUseDefinitionType',
        'CodeableReference',
        'Confidentiality',
        'CriteriaNotExistsBehavior',
        'DefinitionResourceType',
        'EventOrRequestResourceTypes',
        'EventResourceType',
        'Evidence.AttributeEstimate',
        'Evidence.Certainty',
        'Evidence.ModelCharacteristic',
        'Evidence.SampleSize',
        'Evidence.Statistic',
        'Evidence.Variable',
        'Evidence.VariableDefinition',
        'EvidenceReport',
        'EvidenceReport.Characteristic',
        'EvidenceReport.RelatesTo',
        'EvidenceReport.Section',
        'EvidenceReport.Subject',
        'EvidenceVariable.Category',
        'EvidenceVariable.TimeFromStart',
        'EvidenceVariableHandling',
        'FHIRAllTypes',
        'FHIRDefinedType',
        'FHIRPathTypes',
        'Ingredient',
        'Ingredient.Manufacturer',
        'Ingredient.ReferenceStrength',
        'Ingredient.Strength',
        'Ingredient.Substance',
        'IngredientManufacturerRole',
        'InteractionTrigger',
        'KnowledgeResourceType',
        'ManufacturedItemDefinition',
        'ManufacturedItemDefinition.Property',
        'MedicationStatementStatusCodes',
        'MedicinalProductDefinition',
        'MedicinalProductDefinition.Characteristic',
        'MedicinalProductDefinition.Contact',
        'MedicinalProductDefinition.CountryLanguage',
        'MedicinalProductDefinition.CrossReference',
        'MedicinalProductDefinition.Name',
        'MedicinalProductDefinition.NamePart',
        'MedicinalProductDefinition.Operation',
        'NutritionProduct',
        'NutritionProduct.Ingredient',
        'NutritionProduct.Instance',
        'NutritionProduct.Nutrient',
        'NutritionProduct.ProductCharacteristic',
        'NutritionProductStatus',
        'PackagedProductDefinition',
        'PackagedProductDefinition.ContainedItem',
        'PackagedProductDefinition.LegalStatusOfSupply',
        'PackagedProductDefinition.Package',
        'PackagedProductDefinition.Property',
        'PackagedProductDefinition.ShelfLifeStorage',
        'RatioRange',
        'RegulatedAuthorization',
        'RegulatedAuthorization.Case',
        'ReportRelationshipType',
        'SubscriptionNotificationType',
        'SubscriptionStatus.NotificationEvent',
        'SubscriptionStatusCodes',
        'SubscriptionTopic',
        'SubscriptionTopic.CanFilterBy',
        'SubscriptionTopic.EventTrigger',
        'SubscriptionTopic.NotificationShape',
        'SubscriptionTopic.QueryCriteria',
        'SubscriptionTopic.ResourceTrigger',
        'SubstanceDefinition',
        'SubstanceDefinition.Code',
        'SubstanceDefinition.Moiety',
        'SubstanceDefinition.MolecularWeight',
        'SubstanceDefinition.Name',
        'SubstanceDefinition.Official',
        'SubstanceDefinition.Property',
        'SubstanceDefinition.Relationship',
        'SubstanceDefinition.Representation',
        'SubstanceDefinition.SourceMaterial',
        'SubstanceDefinition.Structure',
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
