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
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Version as Version1;
use DCarbone\PHPFHIRGenerated\Versions\VersionInterface;

final class HopMap_DSTU1ToDSTU2 implements HopMapInterface
{
    private const _REMOVED_TYPES = [
        'AdverseReaction',
        'AdverseReaction.Exposure',
        'AdverseReaction.Symptom',
        'Alert',
        'AlertStatus',
        'BindingConformance',
        'CarePlan.Goal',
        'CarePlan.Simple',
        'CarePlanActivityCategory',
        'CarePlanGoalStatus',
        'CausalityExpectation',
        'ConceptMap.Concept',
        'ConceptMap.Map',
        'Condition.Location',
        'Condition.RelatedItem',
        'ConditionRelationshipType',
        'ConditionStatus',
        'Conformance.Operation1',
        'Conformance.Query',
        'ConformanceStatementStatus',
        'Contact',
        'ContactSystem',
        'ContactUse',
        'Criticality',
        'DeviceObservationReport',
        'DeviceObservationReport.Channel',
        'DeviceObservationReport.Metric',
        'DeviceObservationReport.VirtualDevice',
        'DocumentReference.Parameter',
        'DocumentReference.Service',
        'Encounter.Accomodation',
        'ExposureType',
        'FamilyHistory',
        'FamilyHistory.Condition',
        'FamilyHistory.Relation',
        'HierarchicalRelationshipType',
        'ImagingModality',
        'MediaType',
        'MedicationDispense.Dispense',
        'MedicationDispense.Dosage',
        'MedicationKind',
        'MedicationPrescription',
        'MedicationPrescription.Dispense',
        'MedicationPrescription.DosageInstruction',
        'MedicationPrescription.Substitution',
        'MedicationPrescriptionStatus',
        'Modality',
        'ObservationReliability',
        'OrderOutcomeStatus',
        'Other',
        'Procedure.RelatedItem',
        'ProcedureRelationshipType',
        'Profile',
        'Profile.Binding',
        'Profile.Constraint',
        'Profile.Definition',
        'Profile.Element',
        'Profile.ExtensionDefn',
        'Profile.Mapping',
        'Profile.Mapping1',
        'Profile.Query',
        'Profile.SearchParam',
        'Profile.Slicing',
        'Profile.Structure',
        'Profile.Type',
        'QuantityCompararator',
        'Query',
        'Query.Response',
        'QueryOutcome',
        'ReactionSeverity',
        'Resource.Inline',
        'ResourceProfileStatus',
        'ResourceReference',
        'RestfulOperationSystem',
        'RestfulOperationType',
        'Schedule.Repeat',
        'score',
        'SecurityEvent',
        'SecurityEvent.Detail',
        'SecurityEvent.Event',
        'SecurityEvent.Network',
        'SecurityEvent.Object',
        'SecurityEvent.Participant',
        'SecurityEvent.Source',
        'SecurityEventAction',
        'SecurityEventObjectLifecycle',
        'SecurityEventObjectRole',
        'SecurityEventObjectType',
        'SecurityEventOutcome',
        'SecurityEventParticipantNetworkType',
        'SensitivityStatus',
        'SensitivityType',
        'Specimen.Source',
        'Supply',
        'Supply.Dispense',
        'SupplyDispenseStatus',
        'SupplyStatus',
        'totalResults',
        'ValueSet.Define',
        'ValueSetStatus',
        'xmlIdRef',
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
