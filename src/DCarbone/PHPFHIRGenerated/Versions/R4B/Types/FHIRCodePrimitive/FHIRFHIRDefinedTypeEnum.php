<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 21:54+0000
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
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
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

class FHIRFHIRDefinedTypeEnum extends FHIRCodePrimitive
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_FHIRDEFINED_TYPE_ENUM;


    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_VALUE => [
            ValuePatternMatchRule::NAME => '/^[^\\s]+(\\s[^\\s]+)*$/',
            ValueMinLengthRule::NAME => 1,
            ValueOneOfRule::NAME => [
                0 => 'Address',
                1 => 'Age',
                2 => 'Annotation',
                3 => 'Attachment',
                4 => 'BackboneElement',
                5 => 'CodeableConcept',
                6 => 'CodeableReference',
                7 => 'Coding',
                8 => 'ContactDetail',
                9 => 'ContactPoint',
                10 => 'Contributor',
                11 => 'Count',
                12 => 'DataRequirement',
                13 => 'Distance',
                14 => 'Dosage',
                15 => 'Duration',
                16 => 'Element',
                17 => 'ElementDefinition',
                18 => 'Expression',
                19 => 'Extension',
                20 => 'HumanName',
                21 => 'Identifier',
                22 => 'MarketingStatus',
                23 => 'Meta',
                24 => 'Money',
                25 => 'MoneyQuantity',
                26 => 'Narrative',
                27 => 'ParameterDefinition',
                28 => 'Period',
                29 => 'Population',
                30 => 'ProdCharacteristic',
                31 => 'ProductShelfLife',
                32 => 'Quantity',
                33 => 'Range',
                34 => 'Ratio',
                35 => 'RatioRange',
                36 => 'Reference',
                37 => 'RelatedArtifact',
                38 => 'SampledData',
                39 => 'Signature',
                40 => 'SimpleQuantity',
                41 => 'Timing',
                42 => 'TriggerDefinition',
                43 => 'UsageContext',
                44 => 'base64Binary',
                45 => 'boolean',
                46 => 'canonical',
                47 => 'code',
                48 => 'date',
                49 => 'dateTime',
                50 => 'decimal',
                51 => 'id',
                52 => 'instant',
                53 => 'integer',
                54 => 'markdown',
                55 => 'oid',
                56 => 'positiveInt',
                57 => 'string',
                58 => 'time',
                59 => 'unsignedInt',
                60 => 'uri',
                61 => 'url',
                62 => 'uuid',
                63 => 'xhtml',
                64 => 'Resource',
                65 => 'Binary',
                66 => 'Bundle',
                67 => 'DomainResource',
                68 => 'Account',
                69 => 'ActivityDefinition',
                70 => 'AdministrableProductDefinition',
                71 => 'AdverseEvent',
                72 => 'AllergyIntolerance',
                73 => 'Appointment',
                74 => 'AppointmentResponse',
                75 => 'AuditEvent',
                76 => 'Basic',
                77 => 'BiologicallyDerivedProduct',
                78 => 'BodyStructure',
                79 => 'CapabilityStatement',
                80 => 'CarePlan',
                81 => 'CareTeam',
                82 => 'CatalogEntry',
                83 => 'ChargeItem',
                84 => 'ChargeItemDefinition',
                85 => 'Citation',
                86 => 'Claim',
                87 => 'ClaimResponse',
                88 => 'ClinicalImpression',
                89 => 'ClinicalUseDefinition',
                90 => 'CodeSystem',
                91 => 'Communication',
                92 => 'CommunicationRequest',
                93 => 'CompartmentDefinition',
                94 => 'Composition',
                95 => 'ConceptMap',
                96 => 'Condition',
                97 => 'Consent',
                98 => 'Contract',
                99 => 'Coverage',
                100 => 'CoverageEligibilityRequest',
                101 => 'CoverageEligibilityResponse',
                102 => 'DetectedIssue',
                103 => 'Device',
                104 => 'DeviceDefinition',
                105 => 'DeviceMetric',
                106 => 'DeviceRequest',
                107 => 'DeviceUseStatement',
                108 => 'DiagnosticReport',
                109 => 'DocumentManifest',
                110 => 'DocumentReference',
                111 => 'Encounter',
                112 => 'Endpoint',
                113 => 'EnrollmentRequest',
                114 => 'EnrollmentResponse',
                115 => 'EpisodeOfCare',
                116 => 'EventDefinition',
                117 => 'Evidence',
                118 => 'EvidenceReport',
                119 => 'EvidenceVariable',
                120 => 'ExampleScenario',
                121 => 'ExplanationOfBenefit',
                122 => 'FamilyMemberHistory',
                123 => 'Flag',
                124 => 'Goal',
                125 => 'GraphDefinition',
                126 => 'Group',
                127 => 'GuidanceResponse',
                128 => 'HealthcareService',
                129 => 'ImagingStudy',
                130 => 'Immunization',
                131 => 'ImmunizationEvaluation',
                132 => 'ImmunizationRecommendation',
                133 => 'ImplementationGuide',
                134 => 'Ingredient',
                135 => 'InsurancePlan',
                136 => 'Invoice',
                137 => 'Library',
                138 => 'Linkage',
                139 => 'List',
                140 => 'Location',
                141 => 'ManufacturedItemDefinition',
                142 => 'Measure',
                143 => 'MeasureReport',
                144 => 'Media',
                145 => 'Medication',
                146 => 'MedicationAdministration',
                147 => 'MedicationDispense',
                148 => 'MedicationKnowledge',
                149 => 'MedicationRequest',
                150 => 'MedicationStatement',
                151 => 'MedicinalProductDefinition',
                152 => 'MessageDefinition',
                153 => 'MessageHeader',
                154 => 'MolecularSequence',
                155 => 'NamingSystem',
                156 => 'NutritionOrder',
                157 => 'NutritionProduct',
                158 => 'Observation',
                159 => 'ObservationDefinition',
                160 => 'OperationDefinition',
                161 => 'OperationOutcome',
                162 => 'Organization',
                163 => 'OrganizationAffiliation',
                164 => 'PackagedProductDefinition',
                165 => 'Patient',
                166 => 'PaymentNotice',
                167 => 'PaymentReconciliation',
                168 => 'Person',
                169 => 'PlanDefinition',
                170 => 'Practitioner',
                171 => 'PractitionerRole',
                172 => 'Procedure',
                173 => 'Provenance',
                174 => 'Questionnaire',
                175 => 'QuestionnaireResponse',
                176 => 'RegulatedAuthorization',
                177 => 'RelatedPerson',
                178 => 'RequestGroup',
                179 => 'ResearchDefinition',
                180 => 'ResearchElementDefinition',
                181 => 'ResearchStudy',
                182 => 'ResearchSubject',
                183 => 'RiskAssessment',
                184 => 'Schedule',
                185 => 'SearchParameter',
                186 => 'ServiceRequest',
                187 => 'Slot',
                188 => 'Specimen',
                189 => 'SpecimenDefinition',
                190 => 'StructureDefinition',
                191 => 'StructureMap',
                192 => 'Subscription',
                193 => 'SubscriptionStatus',
                194 => 'SubscriptionTopic',
                195 => 'Substance',
                196 => 'SubstanceDefinition',
                197 => 'SupplyDelivery',
                198 => 'SupplyRequest',
                199 => 'Task',
                200 => 'TerminologyCapabilities',
                201 => 'TestReport',
                202 => 'TestScript',
                203 => 'ValueSet',
                204 => 'VerificationResult',
                205 => 'VisionPrescription',
                206 => 'Parameters',
            ],
        ],
    ];

    /* class_default.php:139 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:192 */
}