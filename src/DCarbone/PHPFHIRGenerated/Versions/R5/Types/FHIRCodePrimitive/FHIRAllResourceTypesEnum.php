<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 16th, 2025 01:05+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

class FHIRAllResourceTypesEnum extends FHIRCodePrimitive
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_ALL_RESOURCE_TYPES_ENUM;


    /** Default validation map for fields in type AllResourceTypesEnum */
    private const _DEFAULT_VALIDATION_RULES = [
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
                16 => 'CanonicalResource',
                17 => 'CapabilityStatement',
                18 => 'CarePlan',
                19 => 'CareTeam',
                20 => 'ChargeItem',
                21 => 'ChargeItemDefinition',
                22 => 'Citation',
                23 => 'Claim',
                24 => 'ClaimResponse',
                25 => 'ClinicalImpression',
                26 => 'ClinicalUseDefinition',
                27 => 'CodeSystem',
                28 => 'Communication',
                29 => 'CommunicationRequest',
                30 => 'CompartmentDefinition',
                31 => 'Composition',
                32 => 'ConceptMap',
                33 => 'Condition',
                34 => 'ConditionDefinition',
                35 => 'Consent',
                36 => 'Contract',
                37 => 'Coverage',
                38 => 'CoverageEligibilityRequest',
                39 => 'CoverageEligibilityResponse',
                40 => 'DetectedIssue',
                41 => 'Device',
                42 => 'DeviceAssociation',
                43 => 'DeviceDefinition',
                44 => 'DeviceDispense',
                45 => 'DeviceMetric',
                46 => 'DeviceRequest',
                47 => 'DeviceUsage',
                48 => 'DiagnosticReport',
                49 => 'DocumentReference',
                50 => 'DomainResource',
                51 => 'Encounter',
                52 => 'EncounterHistory',
                53 => 'Endpoint',
                54 => 'EnrollmentRequest',
                55 => 'EnrollmentResponse',
                56 => 'EpisodeOfCare',
                57 => 'EventDefinition',
                58 => 'Evidence',
                59 => 'EvidenceReport',
                60 => 'EvidenceVariable',
                61 => 'ExampleScenario',
                62 => 'ExplanationOfBenefit',
                63 => 'FamilyMemberHistory',
                64 => 'Flag',
                65 => 'FormularyItem',
                66 => 'GenomicStudy',
                67 => 'Goal',
                68 => 'GraphDefinition',
                69 => 'Group',
                70 => 'GuidanceResponse',
                71 => 'HealthcareService',
                72 => 'ImagingSelection',
                73 => 'ImagingStudy',
                74 => 'Immunization',
                75 => 'ImmunizationEvaluation',
                76 => 'ImmunizationRecommendation',
                77 => 'ImplementationGuide',
                78 => 'Ingredient',
                79 => 'InsurancePlan',
                80 => 'InventoryItem',
                81 => 'InventoryReport',
                82 => 'Invoice',
                83 => 'Library',
                84 => 'Linkage',
                85 => 'List',
                86 => 'Location',
                87 => 'ManufacturedItemDefinition',
                88 => 'Measure',
                89 => 'MeasureReport',
                90 => 'Medication',
                91 => 'MedicationAdministration',
                92 => 'MedicationDispense',
                93 => 'MedicationKnowledge',
                94 => 'MedicationRequest',
                95 => 'MedicationStatement',
                96 => 'MedicinalProductDefinition',
                97 => 'MessageDefinition',
                98 => 'MessageHeader',
                99 => 'MetadataResource',
                100 => 'MolecularSequence',
                101 => 'NamingSystem',
                102 => 'NutritionIntake',
                103 => 'NutritionOrder',
                104 => 'NutritionProduct',
                105 => 'Observation',
                106 => 'ObservationDefinition',
                107 => 'OperationDefinition',
                108 => 'OperationOutcome',
                109 => 'Organization',
                110 => 'OrganizationAffiliation',
                111 => 'PackagedProductDefinition',
                112 => 'Parameters',
                113 => 'Patient',
                114 => 'PaymentNotice',
                115 => 'PaymentReconciliation',
                116 => 'Permission',
                117 => 'Person',
                118 => 'PlanDefinition',
                119 => 'Practitioner',
                120 => 'PractitionerRole',
                121 => 'Procedure',
                122 => 'Provenance',
                123 => 'Questionnaire',
                124 => 'QuestionnaireResponse',
                125 => 'RegulatedAuthorization',
                126 => 'RelatedPerson',
                127 => 'RequestOrchestration',
                128 => 'Requirements',
                129 => 'ResearchStudy',
                130 => 'ResearchSubject',
                131 => 'Resource',
                132 => 'RiskAssessment',
                133 => 'Schedule',
                134 => 'SearchParameter',
                135 => 'ServiceRequest',
                136 => 'Slot',
                137 => 'Specimen',
                138 => 'SpecimenDefinition',
                139 => 'StructureDefinition',
                140 => 'StructureMap',
                141 => 'Subscription',
                142 => 'SubscriptionStatus',
                143 => 'SubscriptionTopic',
                144 => 'Substance',
                145 => 'SubstanceDefinition',
                146 => 'SubstanceNucleicAcid',
                147 => 'SubstancePolymer',
                148 => 'SubstanceProtein',
                149 => 'SubstanceReferenceInformation',
                150 => 'SubstanceSourceMaterial',
                151 => 'SupplyDelivery',
                152 => 'SupplyRequest',
                153 => 'Task',
                154 => 'TerminologyCapabilities',
                155 => 'TestPlan',
                156 => 'TestReport',
                157 => 'TestScript',
                158 => 'Transport',
                159 => 'ValueSet',
                160 => 'VerificationResult',
                161 => 'VisionPrescription',
            ],
        ],
    ];

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_DEFAULT_VALIDATION_RULES;
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
}