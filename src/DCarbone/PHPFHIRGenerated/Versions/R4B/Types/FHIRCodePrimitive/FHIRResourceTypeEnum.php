<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: March 20th, 2025 02:50+0000
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

class FHIRResourceTypeEnum extends FHIRCodePrimitive
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_RESOURCE_TYPE_ENUM;


    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_VALUE => [
            ValuePatternMatchRule::NAME => '/^[^\\s]+(\\s[^\\s]+)*$/',
            ValueMinLengthRule::NAME => 1,
            ValueOneOfRule::NAME => [
                0 => 'Resource',
                1 => 'Binary',
                2 => 'Bundle',
                3 => 'DomainResource',
                4 => 'Account',
                5 => 'ActivityDefinition',
                6 => 'AdministrableProductDefinition',
                7 => 'AdverseEvent',
                8 => 'AllergyIntolerance',
                9 => 'Appointment',
                10 => 'AppointmentResponse',
                11 => 'AuditEvent',
                12 => 'Basic',
                13 => 'BiologicallyDerivedProduct',
                14 => 'BodyStructure',
                15 => 'CapabilityStatement',
                16 => 'CarePlan',
                17 => 'CareTeam',
                18 => 'CatalogEntry',
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
                33 => 'Consent',
                34 => 'Contract',
                35 => 'Coverage',
                36 => 'CoverageEligibilityRequest',
                37 => 'CoverageEligibilityResponse',
                38 => 'DetectedIssue',
                39 => 'Device',
                40 => 'DeviceDefinition',
                41 => 'DeviceMetric',
                42 => 'DeviceRequest',
                43 => 'DeviceUseStatement',
                44 => 'DiagnosticReport',
                45 => 'DocumentManifest',
                46 => 'DocumentReference',
                47 => 'Encounter',
                48 => 'Endpoint',
                49 => 'EnrollmentRequest',
                50 => 'EnrollmentResponse',
                51 => 'EpisodeOfCare',
                52 => 'EventDefinition',
                53 => 'Evidence',
                54 => 'EvidenceReport',
                55 => 'EvidenceVariable',
                56 => 'ExampleScenario',
                57 => 'ExplanationOfBenefit',
                58 => 'FamilyMemberHistory',
                59 => 'Flag',
                60 => 'Goal',
                61 => 'GraphDefinition',
                62 => 'Group',
                63 => 'GuidanceResponse',
                64 => 'HealthcareService',
                65 => 'ImagingStudy',
                66 => 'Immunization',
                67 => 'ImmunizationEvaluation',
                68 => 'ImmunizationRecommendation',
                69 => 'ImplementationGuide',
                70 => 'Ingredient',
                71 => 'InsurancePlan',
                72 => 'Invoice',
                73 => 'Library',
                74 => 'Linkage',
                75 => 'List',
                76 => 'Location',
                77 => 'ManufacturedItemDefinition',
                78 => 'Measure',
                79 => 'MeasureReport',
                80 => 'Media',
                81 => 'Medication',
                82 => 'MedicationAdministration',
                83 => 'MedicationDispense',
                84 => 'MedicationKnowledge',
                85 => 'MedicationRequest',
                86 => 'MedicationStatement',
                87 => 'MedicinalProductDefinition',
                88 => 'MessageDefinition',
                89 => 'MessageHeader',
                90 => 'MolecularSequence',
                91 => 'NamingSystem',
                92 => 'NutritionOrder',
                93 => 'NutritionProduct',
                94 => 'Observation',
                95 => 'ObservationDefinition',
                96 => 'OperationDefinition',
                97 => 'OperationOutcome',
                98 => 'Organization',
                99 => 'OrganizationAffiliation',
                100 => 'PackagedProductDefinition',
                101 => 'Patient',
                102 => 'PaymentNotice',
                103 => 'PaymentReconciliation',
                104 => 'Person',
                105 => 'PlanDefinition',
                106 => 'Practitioner',
                107 => 'PractitionerRole',
                108 => 'Procedure',
                109 => 'Provenance',
                110 => 'Questionnaire',
                111 => 'QuestionnaireResponse',
                112 => 'RegulatedAuthorization',
                113 => 'RelatedPerson',
                114 => 'RequestGroup',
                115 => 'ResearchDefinition',
                116 => 'ResearchElementDefinition',
                117 => 'ResearchStudy',
                118 => 'ResearchSubject',
                119 => 'RiskAssessment',
                120 => 'Schedule',
                121 => 'SearchParameter',
                122 => 'ServiceRequest',
                123 => 'Slot',
                124 => 'Specimen',
                125 => 'SpecimenDefinition',
                126 => 'StructureDefinition',
                127 => 'StructureMap',
                128 => 'Subscription',
                129 => 'SubscriptionStatus',
                130 => 'SubscriptionTopic',
                131 => 'Substance',
                132 => 'SubstanceDefinition',
                133 => 'SupplyDelivery',
                134 => 'SupplyRequest',
                135 => 'Task',
                136 => 'TerminologyCapabilities',
                137 => 'TestReport',
                138 => 'TestScript',
                139 => 'ValueSet',
                140 => 'VerificationResult',
                141 => 'VisionPrescription',
                142 => 'Parameters',
            ],
        ],
    ];

    /* class_default.php:144 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:200 */
}