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
use DCarbone\PHPFHIRGenerated\Versions\R4\Version as Version1;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\VersionInterface;

final class HopMap_STU3ToR4 implements HopMapInterface
{
    private const _REMOVED_TYPES = [
        'ActionList',
        'AdverseEventCategory',
        'AdverseEventCausality',
        'AllergyIntoleranceClinicalStatus',
        'AllergyIntoleranceVerificationStatus',
        'BodySite',
        'CapabilityStatement.Certificate',
        'CapabilityStatement.Event',
        'CarePlanStatus',
        'ChargeItem.Participant',
        'Claim.Information',
        'CommunicationRequest.Requester',
        'ConditionClinicalStatusCodes',
        'ConditionVerificationStatus',
        'ConfidentialityClassification',
        'Consent.Actor1',
        'Consent.Data1',
        'Consent.Except',
        'ConsentExceptType',
        'ContentType',
        'Contract.Agent',
        'Contract.Agent1',
        'Contract.ValuedItem1',
        'Coverage.Grouping',
        'DataElement',
        'DataElement.Mapping',
        'DataElementStringency',
        'Device.Udi',
        'DeviceComponent',
        'DeviceComponent.ProductionSpecification',
        'DeviceRequest.Requester',
        'DiagnosticReport.Image',
        'DiagnosticReport.Performer',
        'DigitalMediaType',
        'DocumentManifest.Content',
        'DocumentReference.Related',
        'EligibilityRequest',
        'EligibilityResponse',
        'EligibilityResponse.BenefitBalance',
        'EligibilityResponse.Error',
        'EligibilityResponse.Financial',
        'EligibilityResponse.Insurance',
        'ExpansionProfile',
        'ExpansionProfile.Designation',
        'ExpansionProfile.Designation1',
        'ExpansionProfile.Designation2',
        'ExpansionProfile.Exclude',
        'ExpansionProfile.ExcludedSystem',
        'ExpansionProfile.FixedVersion',
        'ExpansionProfile.Include',
        'ExplanationOfBenefit.Information',
        'ExtensionContext',
        'FHIRAllTypes',
        'FHIRDefinedType',
        'GoalStatus',
        'GuideDependencyType',
        'GuidePageKind',
        'ImagingManifest',
        'ImagingManifest.Instance',
        'ImagingManifest.Series',
        'ImagingManifest.Study',
        'Immunization.Explanation',
        'Immunization.Practitioner',
        'Immunization.VaccinationProtocol',
        'ImmunizationRecommendation.Protocol',
        'ImplementationGuide.Dependency',
        'ImplementationGuide.Package',
        'InstanceAvailability',
        'MeasmntPrinciple',
        'Medication.Content',
        'Medication.Package',
        'MedicationAdministrationStatus',
        'MedicationDispenseStatus',
        'MedicationRequest.Requester',
        'MedicationRequestIntent',
        'MedicationRequestPriority',
        'MedicationRequestStatus',
        'MedicationStatementStatus',
        'MedicationStatementTaken',
        'MedicationStatus',
        'NutritionOrderStatus',
        'Observation.Related',
        'ObservationRelationshipType',
        'Patient.Animal',
        'ProcedureRequest',
        'ProcedureRequest.Requester',
        'ProcessRequest',
        'ProcessRequest.Item',
        'ProcessResponse',
        'ProcessResponse.ProcessNote',
        'Questionnaire.Option',
        'ReferralRequest',
        'ReferralRequest.Requester',
        'Sequence',
        'Sequence.Quality',
        'Sequence.ReferenceSeq',
        'Sequence.Repository',
        'Sequence.Variant',
        'ServiceDefinition',
        'SupplyRequest.OrderedItem',
        'SupplyRequest.Requester',
        'SystemVersionProcessingMode',
        'Task.Requester',
        'TestScript.Param',
        'TestScript.Param1',
        'TestScript.Param2',
        'TestScript.Param3',
        'TestScript.Rule',
        'TestScript.Rule1',
        'TestScript.Rule2',
        'TestScript.Rule3',
        'TestScript.Ruleset',
        'TestScript.Ruleset1',
        'UnknownContentCode',
        'VisionPrescription.Dispense',
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
