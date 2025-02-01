<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 1st, 2025 22:01+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

class FHIRFHIRAllTypesList extends FHIRCodePrimitive
{    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_FHIRALL_TYPES_HYPHEN_LIST;

    /* class_default.php:47 */

    /* class_default.php:66 */
    private static array $_validationRules = [
        self::FIELD_VALUE => [
            Constants::VALIDATE_ENUM => [
                0 => 'Address',
                1 => 'Age',
                2 => 'Annotation',
                3 => 'Attachment',
                4 => 'BackboneElement',
                5 => 'CodeableConcept',
                6 => 'Coding',
                7 => 'ContactDetail',
                8 => 'ContactPoint',
                9 => 'Contributor',
                10 => 'Count',
                11 => 'DataRequirement',
                12 => 'Distance',
                13 => 'Dosage',
                14 => 'Duration',
                15 => 'Element',
                16 => 'ElementDefinition',
                17 => 'Extension',
                18 => 'HumanName',
                19 => 'Identifier',
                20 => 'Meta',
                21 => 'Money',
                22 => 'Narrative',
                23 => 'ParameterDefinition',
                24 => 'Period',
                25 => 'Quantity',
                26 => 'Range',
                27 => 'Ratio',
                28 => 'Reference',
                29 => 'RelatedArtifact',
                30 => 'SampledData',
                31 => 'Signature',
                32 => 'SimpleQuantity',
                33 => 'Timing',
                34 => 'TriggerDefinition',
                35 => 'UsageContext',
                36 => 'base64Binary',
                37 => 'boolean',
                38 => 'code',
                39 => 'date',
                40 => 'dateTime',
                41 => 'decimal',
                42 => 'id',
                43 => 'instant',
                44 => 'integer',
                45 => 'markdown',
                46 => 'oid',
                47 => 'positiveInt',
                48 => 'string',
                49 => 'time',
                50 => 'unsignedInt',
                51 => 'uri',
                52 => 'uuid',
                53 => 'xhtml',
                54 => 'Account',
                55 => 'ActivityDefinition',
                56 => 'AdverseEvent',
                57 => 'AllergyIntolerance',
                58 => 'Appointment',
                59 => 'AppointmentResponse',
                60 => 'AuditEvent',
                61 => 'Basic',
                62 => 'Binary',
                63 => 'BodySite',
                64 => 'Bundle',
                65 => 'CapabilityStatement',
                66 => 'CarePlan',
                67 => 'CareTeam',
                68 => 'ChargeItem',
                69 => 'Claim',
                70 => 'ClaimResponse',
                71 => 'ClinicalImpression',
                72 => 'CodeSystem',
                73 => 'Communication',
                74 => 'CommunicationRequest',
                75 => 'CompartmentDefinition',
                76 => 'Composition',
                77 => 'ConceptMap',
                78 => 'Condition',
                79 => 'Consent',
                80 => 'Contract',
                81 => 'Coverage',
                82 => 'DataElement',
                83 => 'DetectedIssue',
                84 => 'Device',
                85 => 'DeviceComponent',
                86 => 'DeviceMetric',
                87 => 'DeviceRequest',
                88 => 'DeviceUseStatement',
                89 => 'DiagnosticReport',
                90 => 'DocumentManifest',
                91 => 'DocumentReference',
                92 => 'DomainResource',
                93 => 'EligibilityRequest',
                94 => 'EligibilityResponse',
                95 => 'Encounter',
                96 => 'Endpoint',
                97 => 'EnrollmentRequest',
                98 => 'EnrollmentResponse',
                99 => 'EpisodeOfCare',
                100 => 'ExpansionProfile',
                101 => 'ExplanationOfBenefit',
                102 => 'FamilyMemberHistory',
                103 => 'Flag',
                104 => 'Goal',
                105 => 'GraphDefinition',
                106 => 'Group',
                107 => 'GuidanceResponse',
                108 => 'HealthcareService',
                109 => 'ImagingManifest',
                110 => 'ImagingStudy',
                111 => 'Immunization',
                112 => 'ImmunizationRecommendation',
                113 => 'ImplementationGuide',
                114 => 'Library',
                115 => 'Linkage',
                116 => 'List',
                117 => 'Location',
                118 => 'Measure',
                119 => 'MeasureReport',
                120 => 'Media',
                121 => 'Medication',
                122 => 'MedicationAdministration',
                123 => 'MedicationDispense',
                124 => 'MedicationRequest',
                125 => 'MedicationStatement',
                126 => 'MessageDefinition',
                127 => 'MessageHeader',
                128 => 'NamingSystem',
                129 => 'NutritionOrder',
                130 => 'Observation',
                131 => 'OperationDefinition',
                132 => 'OperationOutcome',
                133 => 'Organization',
                134 => 'Parameters',
                135 => 'Patient',
                136 => 'PaymentNotice',
                137 => 'PaymentReconciliation',
                138 => 'Person',
                139 => 'PlanDefinition',
                140 => 'Practitioner',
                141 => 'PractitionerRole',
                142 => 'Procedure',
                143 => 'ProcedureRequest',
                144 => 'ProcessRequest',
                145 => 'ProcessResponse',
                146 => 'Provenance',
                147 => 'Questionnaire',
                148 => 'QuestionnaireResponse',
                149 => 'ReferralRequest',
                150 => 'RelatedPerson',
                151 => 'RequestGroup',
                152 => 'ResearchStudy',
                153 => 'ResearchSubject',
                154 => 'Resource',
                155 => 'RiskAssessment',
                156 => 'Schedule',
                157 => 'SearchParameter',
                158 => 'Sequence',
                159 => 'ServiceDefinition',
                160 => 'Slot',
                161 => 'Specimen',
                162 => 'StructureDefinition',
                163 => 'StructureMap',
                164 => 'Subscription',
                165 => 'Substance',
                166 => 'SupplyDelivery',
                167 => 'SupplyRequest',
                168 => 'Task',
                169 => 'TestReport',
                170 => 'TestScript',
                171 => 'ValueSet',
                172 => 'VisionPrescription',
                173 => 'Type',
                174 => 'Any',
            ],
        ],
    ];

    /* class_default.php:107 */
    /** @var string */
    protected string $value;

    /* class_default.php:136 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:188 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (isset($validationRules[self::FIELD_VALUE]) && null !== $this->value) {
            foreach($validationRules[self::FIELD_VALUE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE, $rule, $constraint, $this->_getFormattedValue());
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE])) {
                        $errs[self::FIELD_VALUE] = [];
                    }
                    $errs[self::FIELD_VALUE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE])) {
            $v = $this->getValue();
            foreach($validationRules[self::FIELD_VALUE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE])) {
                        $errs[self::FIELD_VALUE] = [];
                    }
                    $errs[self::FIELD_VALUE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE])) {
            $v = $this->getValue();
            foreach($validationRules[self::FIELD_VALUE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE])) {
                        $errs[self::FIELD_VALUE] = [];
                    }
                    $errs[self::FIELD_VALUE][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /* class_default.php:211 */

    /**
     * @return null|string
     */
    public function jsonSerialize(): mixed
    {
        return $this->getValue();
    }
}