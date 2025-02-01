<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 1st, 2025 16:35+0000
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

class FHIRResourceTypeEnum extends FHIRCodePrimitive
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_RESOURCE_TYPE_ENUM;


    /* class_default.php:66 */
    private static array $_validationRules = [
        self::FIELD_VALUE => [
            Constants::VALIDATE_PATTERN => '/^[^\\s]+( [^\\s]+)*$/',
            Constants::VALIDATE_MIN_LENGTH => 1,
            Constants::VALIDATE_ENUM => [
                0 => 'Account',
                1 => 'ActivityDefinition',
                2 => 'ActorDefinition',
                3 => 'AdministrableProductDefinition',
                4 => 'AdverseEvent',
                5 => 'AllergyIntolerance',
                6 => 'Appointment',
                7 => 'AppointmentResponse',
                8 => 'ArtifactAssessment',
                9 => 'AuditEvent',
                10 => 'Basic',
                11 => 'Binary',
                12 => 'BiologicallyDerivedProduct',
                13 => 'BiologicallyDerivedProductDispense',
                14 => 'BodyStructure',
                15 => 'Bundle',
                16 => 'CapabilityStatement',
                17 => 'CarePlan',
                18 => 'CareTeam',
                19 => 'ChargeItem',
                20 => 'ChargeItemDefinition',
                21 => 'Citation',
                22 => 'Claim',
                23 => 'ClaimResponse',
                24 => 'ClinicalImpression',
                25 => 'ClinicalUseDefinition',
                26 => 'CodeSystem',
                27 => 'Communication',
                28 => 'CommunicationRequest',
                29 => 'CompartmentDefinition',
                30 => 'Composition',
                31 => 'ConceptMap',
                32 => 'Condition',
                33 => 'ConditionDefinition',
                34 => 'Consent',
                35 => 'Contract',
                36 => 'Coverage',
                37 => 'CoverageEligibilityRequest',
                38 => 'CoverageEligibilityResponse',
                39 => 'DetectedIssue',
                40 => 'Device',
                41 => 'DeviceAssociation',
                42 => 'DeviceDefinition',
                43 => 'DeviceDispense',
                44 => 'DeviceMetric',
                45 => 'DeviceRequest',
                46 => 'DeviceUsage',
                47 => 'DiagnosticReport',
                48 => 'DocumentReference',
                49 => 'Encounter',
                50 => 'EncounterHistory',
                51 => 'Endpoint',
                52 => 'EnrollmentRequest',
                53 => 'EnrollmentResponse',
                54 => 'EpisodeOfCare',
                55 => 'EventDefinition',
                56 => 'Evidence',
                57 => 'EvidenceReport',
                58 => 'EvidenceVariable',
                59 => 'ExampleScenario',
                60 => 'ExplanationOfBenefit',
                61 => 'FamilyMemberHistory',
                62 => 'Flag',
                63 => 'FormularyItem',
                64 => 'GenomicStudy',
                65 => 'Goal',
                66 => 'GraphDefinition',
                67 => 'Group',
                68 => 'GuidanceResponse',
                69 => 'HealthcareService',
                70 => 'ImagingSelection',
                71 => 'ImagingStudy',
                72 => 'Immunization',
                73 => 'ImmunizationEvaluation',
                74 => 'ImmunizationRecommendation',
                75 => 'ImplementationGuide',
                76 => 'Ingredient',
                77 => 'InsurancePlan',
                78 => 'InventoryItem',
                79 => 'InventoryReport',
                80 => 'Invoice',
                81 => 'Library',
                82 => 'Linkage',
                83 => 'List',
                84 => 'Location',
                85 => 'ManufacturedItemDefinition',
                86 => 'Measure',
                87 => 'MeasureReport',
                88 => 'Medication',
                89 => 'MedicationAdministration',
                90 => 'MedicationDispense',
                91 => 'MedicationKnowledge',
                92 => 'MedicationRequest',
                93 => 'MedicationStatement',
                94 => 'MedicinalProductDefinition',
                95 => 'MessageDefinition',
                96 => 'MessageHeader',
                97 => 'MolecularSequence',
                98 => 'NamingSystem',
                99 => 'NutritionIntake',
                100 => 'NutritionOrder',
                101 => 'NutritionProduct',
                102 => 'Observation',
                103 => 'ObservationDefinition',
                104 => 'OperationDefinition',
                105 => 'OperationOutcome',
                106 => 'Organization',
                107 => 'OrganizationAffiliation',
                108 => 'PackagedProductDefinition',
                109 => 'Parameters',
                110 => 'Patient',
                111 => 'PaymentNotice',
                112 => 'PaymentReconciliation',
                113 => 'Permission',
                114 => 'Person',
                115 => 'PlanDefinition',
                116 => 'Practitioner',
                117 => 'PractitionerRole',
                118 => 'Procedure',
                119 => 'Provenance',
                120 => 'Questionnaire',
                121 => 'QuestionnaireResponse',
                122 => 'RegulatedAuthorization',
                123 => 'RelatedPerson',
                124 => 'RequestOrchestration',
                125 => 'Requirements',
                126 => 'ResearchStudy',
                127 => 'ResearchSubject',
                128 => 'RiskAssessment',
                129 => 'Schedule',
                130 => 'SearchParameter',
                131 => 'ServiceRequest',
                132 => 'Slot',
                133 => 'Specimen',
                134 => 'SpecimenDefinition',
                135 => 'StructureDefinition',
                136 => 'StructureMap',
                137 => 'Subscription',
                138 => 'SubscriptionStatus',
                139 => 'SubscriptionTopic',
                140 => 'Substance',
                141 => 'SubstanceDefinition',
                142 => 'SubstanceNucleicAcid',
                143 => 'SubstancePolymer',
                144 => 'SubstanceProtein',
                145 => 'SubstanceReferenceInformation',
                146 => 'SubstanceSourceMaterial',
                147 => 'SupplyDelivery',
                148 => 'SupplyRequest',
                149 => 'Task',
                150 => 'TerminologyCapabilities',
                151 => 'TestPlan',
                152 => 'TestReport',
                153 => 'TestScript',
                154 => 'Transport',
                155 => 'ValueSet',
                156 => 'VerificationResult',
                157 => 'VisionPrescription',
            ],
        ],
    ];

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

    /* class_default.php:212 */

    /**
     * @return null|string
     */
    public function jsonSerialize(): mixed
    {
        return $this->getValue();
    }
}