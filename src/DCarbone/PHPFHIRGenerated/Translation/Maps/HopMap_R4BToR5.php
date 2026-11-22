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
use DCarbone\PHPFHIRGenerated\Versions\R5\Version as Version1;
use DCarbone\PHPFHIRGenerated\Versions\VersionInterface;

final class HopMap_R4BToR5 implements HopMapInterface
{
    private const _REMOVED_TYPES = [
        'AllergyIntoleranceType',
        'AuditEvent.Network',
        'AuditEventAgentNetworkType',
        'AuditEventOutcome',
        'BiologicallyDerivedProduct.Manipulation',
        'BiologicallyDerivedProduct.Processing',
        'BiologicallyDerivedProduct.Storage',
        'BiologicallyDerivedProductCategory',
        'BiologicallyDerivedProductStatus',
        'BiologicallyDerivedProductStorageScale',
        'CarePlan.Detail',
        'CarePlanActivityKind',
        'CarePlanActivityStatus',
        'CatalogEntry',
        'CatalogEntry.RelatedEntry',
        'CatalogEntryRelationType',
        'ChargeItemDefinition.PriceComponent',
        'Citation.AffiliationInfo',
        'Citation.DateOfPublication',
        'Citation.PeriodicRelease',
        'Citation.RelatesTo1',
        'Citation.WhoClassified',
        'ClinicalImpression.Investigation',
        'ClinicalImpressionStatus',
        'Composition.RelatesTo',
        'CompositionAttestationMode',
        'ConceptMapEquivalence',
        'Condition.Evidence',
        'Confidentiality',
        'Consent.Policy',
        'DaysOfWeek',
        'DefinitionResourceType',
        'Device.DeviceName',
        'Device.Specialization',
        'DeviceDefinition.Capability',
        'DeviceDefinition.Specialization',
        'DeviceMetricColor',
        'DeviceUseStatement',
        'DeviceUseStatementStatus',
        'DocumentManifest',
        'DocumentManifest.Related',
        'DocumentReference.Context',
        'DocumentRelationshipType',
        'Encounter.ClassHistory',
        'Encounter.Hospitalization',
        'Encounter.StatusHistory',
        'EventOrRequestResourceTypes',
        'EventResourceType',
        'EvidenceVariable.TimeFromStart',
        'ExpressionLanguage',
        'FHIRAllTypes',
        'FHIRDefinedType',
        'GraphDefinition.Target',
        'GroupMeasure',
        'GuideParameterCode',
        'HealthcareService.AvailableTime',
        'HealthcareService.NotAvailable',
        'Immunization.Education',
        'InsurancePlan.Contact',
        'Invoice.PriceComponent',
        'InvoicePriceComponentType',
        'KnowledgeResourceType',
        'Location.HoursOfOperation',
        'Media',
        'MedicationKnowledge.AdministrationGuidelines',
        'MedicationKnowledge.Kinetics',
        'MedicationKnowledge.PatientCharacteristics',
        'MedicationKnowledge.Schedule',
        'medicationRequestIntent',
        'medicationrequestStatus',
        'MedicinalProductDefinition.CountryLanguage',
        'MedicinalProductDefinition.NamePart',
        'messageheaderResponseRequest',
        'MolecularSequence.Inner',
        'MolecularSequence.Outer',
        'MolecularSequence.Quality',
        'MolecularSequence.ReferenceSeq',
        'MolecularSequence.Repository',
        'MolecularSequence.Roc',
        'MolecularSequence.StructureVariant',
        'MolecularSequence.Variant',
        'NutritionProduct.ProductCharacteristic',
        'ObservationDefinition.QualifiedInterval',
        'ObservationDefinition.QuantitativeDetails',
        'Organization.Contact',
        'orientationType',
        'PackagedProductDefinition.Package',
        'PackagedProductDefinition.ShelfLifeStorage',
        'ParticipantRequired',
        'PaymentReconciliation.Detail',
        'Population',
        'PractitionerRole.AvailableTime',
        'PractitionerRole.NotAvailable',
        'ProdCharacteristic',
        'qualityType',
        'repositoryType',
        'RequestGroup',
        'RequestGroup.Action',
        'RequestGroup.Condition',
        'RequestGroup.RelatedAction',
        'RequestResourceType',
        'ResearchDefinition',
        'ResearchElementDefinition',
        'ResearchElementDefinition.Characteristic',
        'ResearchElementType',
        'ResearchStudy.Arm',
        'ResearchStudyStatus',
        'ResearchSubjectStatus',
        'sequenceType',
        'status',
        'strandType',
        'StructureMapContextType',
        'Subscription.Channel',
        'SubscriptionChannelType',
        'Substance.Instance',
        'VariableType',
        'XPathUsageType',
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
