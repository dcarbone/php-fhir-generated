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

class FHIRConcreteFHIRTypesEnum extends FHIRCodePrimitive
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CONCRETE_FHIRTYPES_ENUM;


    /** Default validation map for fields in type ConcreteFHIRTypesEnum */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_VALUE => [
            Constants::VALIDATE_PATTERN => '/^[^\\s]+( [^\\s]+)*$/',
            Constants::VALIDATE_MIN_LENGTH => 1,
            Constants::VALIDATE_ENUM => [
                0 => 'Account',
                1 => 'ActivityDefinition',
                2 => 'ActorDefinition',
                3 => 'Address',
                4 => 'AdministrableProductDefinition',
                5 => 'AdverseEvent',
                6 => 'Age',
                7 => 'AllergyIntolerance',
                8 => 'Annotation',
                9 => 'Appointment',
                10 => 'AppointmentResponse',
                11 => 'ArtifactAssessment',
                12 => 'Attachment',
                13 => 'AuditEvent',
                14 => 'Availability',
                15 => 'base64Binary',
                16 => 'Basic',
                17 => 'Binary',
                18 => 'BiologicallyDerivedProduct',
                19 => 'BiologicallyDerivedProductDispense',
                20 => 'BodyStructure',
                21 => 'boolean',
                22 => 'Bundle',
                23 => 'canonical',
                24 => 'CapabilityStatement',
                25 => 'CarePlan',
                26 => 'CareTeam',
                27 => 'ChargeItem',
                28 => 'ChargeItemDefinition',
                29 => 'Citation',
                30 => 'Claim',
                31 => 'ClaimResponse',
                32 => 'ClinicalImpression',
                33 => 'ClinicalUseDefinition',
                34 => 'code',
                35 => 'CodeableConcept',
                36 => 'CodeableReference',
                37 => 'CodeSystem',
                38 => 'Coding',
                39 => 'Communication',
                40 => 'CommunicationRequest',
                41 => 'CompartmentDefinition',
                42 => 'Composition',
                43 => 'ConceptMap',
                44 => 'Condition',
                45 => 'ConditionDefinition',
                46 => 'Consent',
                47 => 'ContactDetail',
                48 => 'ContactPoint',
                49 => 'Contract',
                50 => 'Contributor',
                51 => 'Count',
                52 => 'Coverage',
                53 => 'CoverageEligibilityRequest',
                54 => 'CoverageEligibilityResponse',
                55 => 'DataRequirement',
                56 => 'date',
                57 => 'dateTime',
                58 => 'decimal',
                59 => 'DetectedIssue',
                60 => 'Device',
                61 => 'DeviceAssociation',
                62 => 'DeviceDefinition',
                63 => 'DeviceDispense',
                64 => 'DeviceMetric',
                65 => 'DeviceRequest',
                66 => 'DeviceUsage',
                67 => 'DiagnosticReport',
                68 => 'Distance',
                69 => 'DocumentReference',
                70 => 'Dosage',
                71 => 'Duration',
                72 => 'ElementDefinition',
                73 => 'Encounter',
                74 => 'EncounterHistory',
                75 => 'Endpoint',
                76 => 'EnrollmentRequest',
                77 => 'EnrollmentResponse',
                78 => 'EpisodeOfCare',
                79 => 'EventDefinition',
                80 => 'Evidence',
                81 => 'EvidenceReport',
                82 => 'EvidenceVariable',
                83 => 'ExampleScenario',
                84 => 'ExplanationOfBenefit',
                85 => 'Expression',
                86 => 'ExtendedContactDetail',
                87 => 'Extension',
                88 => 'FamilyMemberHistory',
                89 => 'Flag',
                90 => 'FormularyItem',
                91 => 'GenomicStudy',
                92 => 'Goal',
                93 => 'GraphDefinition',
                94 => 'Group',
                95 => 'GuidanceResponse',
                96 => 'HealthcareService',
                97 => 'HumanName',
                98 => 'id',
                99 => 'Identifier',
                100 => 'ImagingSelection',
                101 => 'ImagingStudy',
                102 => 'Immunization',
                103 => 'ImmunizationEvaluation',
                104 => 'ImmunizationRecommendation',
                105 => 'ImplementationGuide',
                106 => 'Ingredient',
                107 => 'instant',
                108 => 'InsurancePlan',
                109 => 'integer',
                110 => 'integer64',
                111 => 'InventoryItem',
                112 => 'InventoryReport',
                113 => 'Invoice',
                114 => 'Library',
                115 => 'Linkage',
                116 => 'List',
                117 => 'Location',
                118 => 'ManufacturedItemDefinition',
                119 => 'markdown',
                120 => 'MarketingStatus',
                121 => 'Measure',
                122 => 'MeasureReport',
                123 => 'Medication',
                124 => 'MedicationAdministration',
                125 => 'MedicationDispense',
                126 => 'MedicationKnowledge',
                127 => 'MedicationRequest',
                128 => 'MedicationStatement',
                129 => 'MedicinalProductDefinition',
                130 => 'MessageDefinition',
                131 => 'MessageHeader',
                132 => 'Meta',
                133 => 'MolecularSequence',
                134 => 'MonetaryComponent',
                135 => 'Money',
                136 => 'NamingSystem',
                137 => 'Narrative',
                138 => 'NutritionIntake',
                139 => 'NutritionOrder',
                140 => 'NutritionProduct',
                141 => 'Observation',
                142 => 'ObservationDefinition',
                143 => 'oid',
                144 => 'OperationDefinition',
                145 => 'OperationOutcome',
                146 => 'Organization',
                147 => 'OrganizationAffiliation',
                148 => 'PackagedProductDefinition',
                149 => 'ParameterDefinition',
                150 => 'Parameters',
                151 => 'Patient',
                152 => 'PaymentNotice',
                153 => 'PaymentReconciliation',
                154 => 'Period',
                155 => 'Permission',
                156 => 'Person',
                157 => 'PlanDefinition',
                158 => 'positiveInt',
                159 => 'Practitioner',
                160 => 'PractitionerRole',
                161 => 'Procedure',
                162 => 'ProductShelfLife',
                163 => 'Provenance',
                164 => 'Quantity',
                165 => 'Questionnaire',
                166 => 'QuestionnaireResponse',
                167 => 'Range',
                168 => 'Ratio',
                169 => 'RatioRange',
                170 => 'Reference',
                171 => 'RegulatedAuthorization',
                172 => 'RelatedArtifact',
                173 => 'RelatedPerson',
                174 => 'RequestOrchestration',
                175 => 'Requirements',
                176 => 'ResearchStudy',
                177 => 'ResearchSubject',
                178 => 'RiskAssessment',
                179 => 'SampledData',
                180 => 'Schedule',
                181 => 'SearchParameter',
                182 => 'ServiceRequest',
                183 => 'Signature',
                184 => 'Slot',
                185 => 'Specimen',
                186 => 'SpecimenDefinition',
                187 => 'string',
                188 => 'StructureDefinition',
                189 => 'StructureMap',
                190 => 'Subscription',
                191 => 'SubscriptionStatus',
                192 => 'SubscriptionTopic',
                193 => 'Substance',
                194 => 'SubstanceDefinition',
                195 => 'SubstanceNucleicAcid',
                196 => 'SubstancePolymer',
                197 => 'SubstanceProtein',
                198 => 'SubstanceReferenceInformation',
                199 => 'SubstanceSourceMaterial',
                200 => 'SupplyDelivery',
                201 => 'SupplyRequest',
                202 => 'Task',
                203 => 'TerminologyCapabilities',
                204 => 'TestPlan',
                205 => 'TestReport',
                206 => 'TestScript',
                207 => 'time',
                208 => 'Timing',
                209 => 'Transport',
                210 => 'TriggerDefinition',
                211 => 'unsignedInt',
                212 => 'uri',
                213 => 'url',
                214 => 'UsageContext',
                215 => 'uuid',
                216 => 'ValueSet',
                217 => 'VerificationResult',
                218 => 'VirtualServiceDetail',
                219 => 'VisionPrescription',
                220 => 'xhtml',
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