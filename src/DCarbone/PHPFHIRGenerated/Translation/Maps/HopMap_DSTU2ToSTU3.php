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
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version as Version1;
use DCarbone\PHPFHIRGenerated\Versions\VersionInterface;

final class HopMap_DSTU2ToSTU3 implements HopMapInterface
{
    private const _REMOVED_TYPES = [
        'AllergyIntoleranceCertainty',
        'AllergyIntoleranceStatus',
        'AnswerFormat',
        'AuditEvent.Event',
        'AuditEvent.Object',
        'AuditEvent.Participant',
        'AuditEventParticipantNetworkType',
        'CarePlan.Participant',
        'CarePlan.RelatedPlan',
        'CarePlanRelationship',
        'Claim.Coverage',
        'Claim.MissingTeeth',
        'Claim.Prosthesis',
        'ClaimResponse.Adjudication1',
        'ClaimResponse.Adjudication2',
        'ClaimResponse.Adjudication3',
        'ClaimResponse.Adjudication4',
        'ClaimResponse.Coverage',
        'ClaimResponse.Note',
        'ClaimType',
        'ClinicalImpression.Investigations',
        'ClinicalImpression.RuledOut',
        'CommunicationRequestStatus',
        'CommunicationStatus',
        'ConceptMap.Contact',
        'Conformance',
        'Conformance.Certificate',
        'Conformance.Contact',
        'Conformance.Document',
        'Conformance.Endpoint',
        'Conformance.Event',
        'Conformance.Implementation',
        'Conformance.Interaction',
        'Conformance.Interaction1',
        'Conformance.Messaging',
        'Conformance.Operation',
        'Conformance.Resource',
        'Conformance.Rest',
        'Conformance.SearchParam',
        'Conformance.Security',
        'Conformance.Software',
        'ConformanceEventMode',
        'ConformanceResourceStatus',
        'ConformanceStatementKind',
        'Contract.Actor',
        'Contract.Actor1',
        'DataElement.Contact',
        'DeviceStatus',
        'DeviceUseRequest',
        'DeviceUseRequestPriority',
        'DeviceUseRequestStatus',
        'DiagnosticOrder',
        'DiagnosticOrder.Event',
        'DiagnosticOrder.Item',
        'DiagnosticOrderPriority',
        'DiagnosticOrderStatus',
        'EncounterClass',
        'EncounterState',
        'EpisodeOfCare.CareTeam',
        'Goal.Outcome',
        'GuideResourcePurpose',
        'HealthcareService.ServiceType',
        'ImagingObjectSelection',
        'ImagingObjectSelection.Frames',
        'ImagingObjectSelection.Instance',
        'ImagingObjectSelection.Series',
        'ImagingObjectSelection.Study',
        'ImplementationGuide.Contact',
        'Measmnt-Principle',
        'Medication.Product',
        'MedicationDispense.DosageInstruction',
        'MedicationOrder',
        'MedicationOrder.DispenseRequest',
        'MedicationOrder.DosageInstruction',
        'MedicationOrder.Substitution',
        'MedicationOrderStatus',
        'MedicationStatement.Dosage',
        'NamingSystem.Contact',
        'OperationDefinition.Contact',
        'Order',
        'Order.When',
        'OrderResponse',
        'OrderStatus',
        'ParticipantStatus',
        'PaymentReconciliation.Note',
        'Practitioner.PractitionerRole',
        'ProcedureRequestPriority',
        'ProcedureRequestStatus',
        'ProcedureStatus',
        'ProcessResponse.Notes',
        'Provenance.RelatedAgent',
        'Questionnaire.Group',
        'Questionnaire.Question',
        'QuestionnaireResponse.Group',
        'QuestionnaireResponse.Question',
        'QuestionnaireStatus',
        'ReferralStatus',
        'RestfulConformanceMode',
        'SearchParameter.Contact',
        'SimpleQuantity',
        'Specimen.Treatment',
        'StructureDefinition.Contact',
        'SupplyRequest.When',
        'TestScript.Contact',
        'TransactionMode',
        'ValueSet.CodeSystem',
        'ValueSet.Concept1',
        'ValueSet.Contact',
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
