<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 20th, 2025 13:35+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValueMinLengthRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValueOneOfRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValuePatternMatchRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRFHIRTypesEnum extends FHIRCodePrimitive
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_FHIRTYPES_ENUM;


    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_VALUE => [
            ValuePatternMatchRule::NAME => '/^[^\\s]+( [^\\s]+)*$/',
            ValueMinLengthRule::NAME => 1,
            ValueOneOfRule::NAME => [
                0 => 'Base',
                1 => 'Element',
                2 => 'BackboneElement',
                3 => 'DataType',
                4 => 'Address',
                5 => 'Annotation',
                6 => 'Attachment',
                7 => 'Availability',
                8 => 'BackboneType',
                9 => 'Dosage',
                10 => 'ElementDefinition',
                11 => 'MarketingStatus',
                12 => 'ProductShelfLife',
                13 => 'Timing',
                14 => 'CodeableConcept',
                15 => 'CodeableReference',
                16 => 'Coding',
                17 => 'ContactDetail',
                18 => 'ContactPoint',
                19 => 'Contributor',
                20 => 'DataRequirement',
                21 => 'Expression',
                22 => 'ExtendedContactDetail',
                23 => 'Extension',
                24 => 'HumanName',
                25 => 'Identifier',
                26 => 'Meta',
                27 => 'MonetaryComponent',
                28 => 'Money',
                29 => 'Narrative',
                30 => 'ParameterDefinition',
                31 => 'Period',
                32 => 'PrimitiveType',
                33 => 'base64Binary',
                34 => 'boolean',
                35 => 'date',
                36 => 'dateTime',
                37 => 'decimal',
                38 => 'instant',
                39 => 'integer',
                40 => 'positiveInt',
                41 => 'unsignedInt',
                42 => 'integer64',
                43 => 'string',
                44 => 'code',
                45 => 'id',
                46 => 'markdown',
                47 => 'time',
                48 => 'uri',
                49 => 'canonical',
                50 => 'oid',
                51 => 'url',
                52 => 'uuid',
                53 => 'Quantity',
                54 => 'Age',
                55 => 'Count',
                56 => 'Distance',
                57 => 'Duration',
                58 => 'Range',
                59 => 'Ratio',
                60 => 'RatioRange',
                61 => 'Reference',
                62 => 'RelatedArtifact',
                63 => 'SampledData',
                64 => 'Signature',
                65 => 'TriggerDefinition',
                66 => 'UsageContext',
                67 => 'VirtualServiceDetail',
                68 => 'xhtml',
                69 => 'Resource',
                70 => 'Binary',
                71 => 'Bundle',
                72 => 'DomainResource',
                73 => 'Account',
                74 => 'ActivityDefinition',
                75 => 'ActorDefinition',
                76 => 'AdministrableProductDefinition',
                77 => 'AdverseEvent',
                78 => 'AllergyIntolerance',
                79 => 'Appointment',
                80 => 'AppointmentResponse',
                81 => 'ArtifactAssessment',
                82 => 'AuditEvent',
                83 => 'Basic',
                84 => 'BiologicallyDerivedProduct',
                85 => 'BiologicallyDerivedProductDispense',
                86 => 'BodyStructure',
                87 => 'CanonicalResource',
                88 => 'CapabilityStatement',
                89 => 'CarePlan',
                90 => 'CareTeam',
                91 => 'ChargeItem',
                92 => 'ChargeItemDefinition',
                93 => 'Citation',
                94 => 'Claim',
                95 => 'ClaimResponse',
                96 => 'ClinicalImpression',
                97 => 'ClinicalUseDefinition',
                98 => 'CodeSystem',
                99 => 'Communication',
                100 => 'CommunicationRequest',
                101 => 'CompartmentDefinition',
                102 => 'Composition',
                103 => 'ConceptMap',
                104 => 'Condition',
                105 => 'ConditionDefinition',
                106 => 'Consent',
                107 => 'Contract',
                108 => 'Coverage',
                109 => 'CoverageEligibilityRequest',
                110 => 'CoverageEligibilityResponse',
                111 => 'DetectedIssue',
                112 => 'Device',
                113 => 'DeviceAssociation',
                114 => 'DeviceDefinition',
                115 => 'DeviceDispense',
                116 => 'DeviceMetric',
                117 => 'DeviceRequest',
                118 => 'DeviceUsage',
                119 => 'DiagnosticReport',
                120 => 'DocumentReference',
                121 => 'Encounter',
                122 => 'EncounterHistory',
                123 => 'Endpoint',
                124 => 'EnrollmentRequest',
                125 => 'EnrollmentResponse',
                126 => 'EpisodeOfCare',
                127 => 'EventDefinition',
                128 => 'Evidence',
                129 => 'EvidenceReport',
                130 => 'EvidenceVariable',
                131 => 'ExampleScenario',
                132 => 'ExplanationOfBenefit',
                133 => 'FamilyMemberHistory',
                134 => 'Flag',
                135 => 'FormularyItem',
                136 => 'GenomicStudy',
                137 => 'Goal',
                138 => 'GraphDefinition',
                139 => 'Group',
                140 => 'GuidanceResponse',
                141 => 'HealthcareService',
                142 => 'ImagingSelection',
                143 => 'ImagingStudy',
                144 => 'Immunization',
                145 => 'ImmunizationEvaluation',
                146 => 'ImmunizationRecommendation',
                147 => 'ImplementationGuide',
                148 => 'Ingredient',
                149 => 'InsurancePlan',
                150 => 'InventoryItem',
                151 => 'InventoryReport',
                152 => 'Invoice',
                153 => 'Library',
                154 => 'Linkage',
                155 => 'List',
                156 => 'Location',
                157 => 'ManufacturedItemDefinition',
                158 => 'Measure',
                159 => 'MeasureReport',
                160 => 'Medication',
                161 => 'MedicationAdministration',
                162 => 'MedicationDispense',
                163 => 'MedicationKnowledge',
                164 => 'MedicationRequest',
                165 => 'MedicationStatement',
                166 => 'MedicinalProductDefinition',
                167 => 'MessageDefinition',
                168 => 'MessageHeader',
                169 => 'MetadataResource',
                170 => 'MolecularSequence',
                171 => 'NamingSystem',
                172 => 'NutritionIntake',
                173 => 'NutritionOrder',
                174 => 'NutritionProduct',
                175 => 'Observation',
                176 => 'ObservationDefinition',
                177 => 'OperationDefinition',
                178 => 'OperationOutcome',
                179 => 'Organization',
                180 => 'OrganizationAffiliation',
                181 => 'PackagedProductDefinition',
                182 => 'Patient',
                183 => 'PaymentNotice',
                184 => 'PaymentReconciliation',
                185 => 'Permission',
                186 => 'Person',
                187 => 'PlanDefinition',
                188 => 'Practitioner',
                189 => 'PractitionerRole',
                190 => 'Procedure',
                191 => 'Provenance',
                192 => 'Questionnaire',
                193 => 'QuestionnaireResponse',
                194 => 'RegulatedAuthorization',
                195 => 'RelatedPerson',
                196 => 'RequestOrchestration',
                197 => 'Requirements',
                198 => 'ResearchStudy',
                199 => 'ResearchSubject',
                200 => 'RiskAssessment',
                201 => 'Schedule',
                202 => 'SearchParameter',
                203 => 'ServiceRequest',
                204 => 'Slot',
                205 => 'Specimen',
                206 => 'SpecimenDefinition',
                207 => 'StructureDefinition',
                208 => 'StructureMap',
                209 => 'Subscription',
                210 => 'SubscriptionStatus',
                211 => 'SubscriptionTopic',
                212 => 'Substance',
                213 => 'SubstanceDefinition',
                214 => 'SubstanceNucleicAcid',
                215 => 'SubstancePolymer',
                216 => 'SubstanceProtein',
                217 => 'SubstanceReferenceInformation',
                218 => 'SubstanceSourceMaterial',
                219 => 'SupplyDelivery',
                220 => 'SupplyRequest',
                221 => 'Task',
                222 => 'TerminologyCapabilities',
                223 => 'TestPlan',
                224 => 'TestReport',
                225 => 'TestScript',
                226 => 'Transport',
                227 => 'ValueSet',
                228 => 'VerificationResult',
                229 => 'VisionPrescription',
                230 => 'Parameters',
            ],
        ],
    ];

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:201 */
}