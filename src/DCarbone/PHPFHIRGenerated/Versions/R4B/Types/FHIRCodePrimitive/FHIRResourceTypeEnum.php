<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 *
 * Class creation date: October 30th, 2026 00:59+0000
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
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

#[\Attribute(\Attribute::TARGET_PROPERTY)]
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
            'value_pattern_match' => '/^[^\\s]+(\\s[^\\s]+)*$/',
            'value_min_length' => 1,
            'value_one_of' => [
                'Resource',
                'Binary',
                'Bundle',
                'DomainResource',
                'Account',
                'ActivityDefinition',
                'AdministrableProductDefinition',
                'AdverseEvent',
                'AllergyIntolerance',
                'Appointment',
                'AppointmentResponse',
                'AuditEvent',
                'Basic',
                'BiologicallyDerivedProduct',
                'BodyStructure',
                'CapabilityStatement',
                'CarePlan',
                'CareTeam',
                'CatalogEntry',
                'ChargeItem',
                'ChargeItemDefinition',
                'Citation',
                'Claim',
                'ClaimResponse',
                'ClinicalImpression',
                'ClinicalUseDefinition',
                'CodeSystem',
                'Communication',
                'CommunicationRequest',
                'CompartmentDefinition',
                'Composition',
                'ConceptMap',
                'Condition',
                'Consent',
                'Contract',
                'Coverage',
                'CoverageEligibilityRequest',
                'CoverageEligibilityResponse',
                'DetectedIssue',
                'Device',
                'DeviceDefinition',
                'DeviceMetric',
                'DeviceRequest',
                'DeviceUseStatement',
                'DiagnosticReport',
                'DocumentManifest',
                'DocumentReference',
                'Encounter',
                'Endpoint',
                'EnrollmentRequest',
                'EnrollmentResponse',
                'EpisodeOfCare',
                'EventDefinition',
                'Evidence',
                'EvidenceReport',
                'EvidenceVariable',
                'ExampleScenario',
                'ExplanationOfBenefit',
                'FamilyMemberHistory',
                'Flag',
                'Goal',
                'GraphDefinition',
                'Group',
                'GuidanceResponse',
                'HealthcareService',
                'ImagingStudy',
                'Immunization',
                'ImmunizationEvaluation',
                'ImmunizationRecommendation',
                'ImplementationGuide',
                'Ingredient',
                'InsurancePlan',
                'Invoice',
                'Library',
                'Linkage',
                'List',
                'Location',
                'ManufacturedItemDefinition',
                'Measure',
                'MeasureReport',
                'Media',
                'Medication',
                'MedicationAdministration',
                'MedicationDispense',
                'MedicationKnowledge',
                'MedicationRequest',
                'MedicationStatement',
                'MedicinalProductDefinition',
                'MessageDefinition',
                'MessageHeader',
                'MolecularSequence',
                'NamingSystem',
                'NutritionOrder',
                'NutritionProduct',
                'Observation',
                'ObservationDefinition',
                'OperationDefinition',
                'OperationOutcome',
                'Organization',
                'OrganizationAffiliation',
                'PackagedProductDefinition',
                'Patient',
                'PaymentNotice',
                'PaymentReconciliation',
                'Person',
                'PlanDefinition',
                'Practitioner',
                'PractitionerRole',
                'Procedure',
                'Provenance',
                'Questionnaire',
                'QuestionnaireResponse',
                'RegulatedAuthorization',
                'RelatedPerson',
                'RequestGroup',
                'ResearchDefinition',
                'ResearchElementDefinition',
                'ResearchStudy',
                'ResearchSubject',
                'RiskAssessment',
                'Schedule',
                'SearchParameter',
                'ServiceRequest',
                'Slot',
                'Specimen',
                'SpecimenDefinition',
                'StructureDefinition',
                'StructureMap',
                'Subscription',
                'SubscriptionStatus',
                'SubscriptionTopic',
                'Substance',
                'SubstanceDefinition',
                'SupplyDelivery',
                'SupplyRequest',
                'Task',
                'TerminologyCapabilities',
                'TestReport',
                'TestScript',
                'ValueSet',
                'VerificationResult',
                'VisionPrescription',
                'Parameters',
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
