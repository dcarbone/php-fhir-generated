<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Profiles\XverR5R4;

use DCarbone\PHPFHIRGenerated\Versions\R4\Profiles\PackageAutoloaderInterface;

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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 *
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 *
 */

abstract class PackageAutoloader implements PackageAutoloaderInterface
{
    /** @var array<string, string> */
    private const _CLASS_MAP = [
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5AccountR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5AccountR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ActivityDefinitionR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ActivityDefinitionR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ActorDefinitionR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ActorDefinitionR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5AdministrableProductDefinitionR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5AdministrableProductDefinitionR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5AdverseEventR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5AdverseEventR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5AllergyIntoleranceR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5AllergyIntoleranceR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5AppointmentR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5AppointmentR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5AppointmentResponseR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5AppointmentResponseR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ArtifactAssessmentR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ArtifactAssessmentR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5AuditEventR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5AuditEventR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5BasicR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5BasicR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\ProfileR5BinaryR4' => __DIR__ . '/FHIRResource/ProfileR5BinaryR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5BiologicallyDerivedProductR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5BiologicallyDerivedProductR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5BiologicallyDerivedProductDispenseR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5BiologicallyDerivedProductDispenseR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5BodyStructureR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5BodyStructureR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\ProfileR5BundleR4' => __DIR__ . '/FHIRResource/ProfileR5BundleR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5CapabilityStatementR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5CapabilityStatementR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5CarePlanR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5CarePlanR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5CareTeamR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5CareTeamR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ChargeItemR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ChargeItemR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ChargeItemDefinitionR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ChargeItemDefinitionR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5CitationR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5CitationR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ClaimR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ClaimR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ClaimResponseR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ClaimResponseR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ClinicalImpressionR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ClinicalImpressionR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ClinicalUseDefinitionR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ClinicalUseDefinitionR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5CodeSystemR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5CodeSystemR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5CommunicationR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5CommunicationR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5CommunicationRequestR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5CommunicationRequestR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5CompartmentDefinitionR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5CompartmentDefinitionR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5CompositionR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5CompositionR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ConceptMapR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ConceptMapR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ConditionR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ConditionR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ConditionDefinitionR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ConditionDefinitionR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ConsentR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ConsentR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ContractR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ContractR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5CoverageR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5CoverageR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5CoverageEligibilityRequestR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5CoverageEligibilityRequestR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5CoverageEligibilityResponseR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5CoverageEligibilityResponseR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5DetectedIssueR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5DetectedIssueR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5DeviceR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5DeviceR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5DeviceAssociationR4Device' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5DeviceAssociationR4Device.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5DeviceDefinitionR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5DeviceDefinitionR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5DeviceDispenseR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5DeviceDispenseR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5DeviceMetricR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5DeviceMetricR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5DeviceRequestR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5DeviceRequestR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5DeviceUsageR4DeviceUseStatement' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5DeviceUsageR4DeviceUseStatement.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5DiagnosticReportR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5DiagnosticReportR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5DocumentReferenceR4Media' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5DocumentReferenceR4Media.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5DocumentReferenceR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5DocumentReferenceR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\ProfileR5DomainResourceR4' => __DIR__ . '/FHIRResource/ProfileR5DomainResourceR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5EncounterR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5EncounterR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5EncounterHistoryR4Encounter' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5EncounterHistoryR4Encounter.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5EndpointR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5EndpointR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5EnrollmentRequestR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5EnrollmentRequestR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5EnrollmentResponseR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5EnrollmentResponseR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5EpisodeOfCareR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5EpisodeOfCareR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5EventDefinitionR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5EventDefinitionR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5EvidenceR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5EvidenceR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5EvidenceReportR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5EvidenceReportR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5EvidenceVariableR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5EvidenceVariableR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ExampleScenarioR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ExampleScenarioR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ExplanationOfBenefitR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ExplanationOfBenefitR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5FamilyMemberHistoryR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5FamilyMemberHistoryR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5FlagR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5FlagR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5FormularyItemR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5FormularyItemR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5GenomicStudyR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5GenomicStudyR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5GoalR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5GoalR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5GraphDefinitionR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5GraphDefinitionR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5GroupR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5GroupR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5GuidanceResponseR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5GuidanceResponseR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5HealthcareServiceR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5HealthcareServiceR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ImagingSelectionR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ImagingSelectionR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ImagingStudyR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ImagingStudyR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ImmunizationR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ImmunizationR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ImmunizationEvaluationR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ImmunizationEvaluationR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ImmunizationRecommendationR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ImmunizationRecommendationR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ImplementationGuideR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ImplementationGuideR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5IngredientR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5IngredientR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5InsurancePlanR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5InsurancePlanR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5InventoryItemR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5InventoryItemR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5InventoryReportR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5InventoryReportR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5InvoiceR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5InvoiceR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5LibraryR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5LibraryR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5LinkageR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5LinkageR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ListR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ListR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5LocationR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5LocationR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ManufacturedItemDefinitionR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ManufacturedItemDefinitionR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5MeasureR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5MeasureR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5MeasureReportR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5MeasureReportR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5MedicationR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5MedicationR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5MedicationAdministrationR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5MedicationAdministrationR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5MedicationDispenseR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5MedicationDispenseR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5MedicationKnowledgeR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5MedicationKnowledgeR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5MedicationRequestR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5MedicationRequestR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5MedicationStatementR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5MedicationStatementR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5MedicinalProductDefinitionR4MedicinalProduct' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5MedicinalProductDefinitionR4MedicinalProduct.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5MessageDefinitionR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5MessageDefinitionR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5MessageHeaderR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5MessageHeaderR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5MolecularSequenceR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5MolecularSequenceR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5NamingSystemR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5NamingSystemR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5NutritionIntakeR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5NutritionIntakeR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5NutritionOrderR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5NutritionOrderR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5NutritionProductR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5NutritionProductR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ObservationR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ObservationR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ObservationDefinitionR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ObservationDefinitionR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5OperationDefinitionR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5OperationDefinitionR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5OperationOutcomeR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5OperationOutcomeR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5OrganizationR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5OrganizationR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5OrganizationAffiliationR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5OrganizationAffiliationR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5PackagedProductDefinitionR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5PackagedProductDefinitionR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\ProfileR5ParametersR4' => __DIR__ . '/FHIRResource/ProfileR5ParametersR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5PatientR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5PatientR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5PaymentNoticeR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5PaymentNoticeR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5PaymentReconciliationR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5PaymentReconciliationR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5PermissionR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5PermissionR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5PersonR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5PersonR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5PlanDefinitionR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5PlanDefinitionR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5PractitionerR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5PractitionerR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5PractitionerRoleR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5PractitionerRoleR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ProcedureR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ProcedureR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ProvenanceR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ProvenanceR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5QuestionnaireR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5QuestionnaireR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5QuestionnaireResponseR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5QuestionnaireResponseR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5RegulatedAuthorizationR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5RegulatedAuthorizationR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5RelatedPersonR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5RelatedPersonR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5RequestOrchestrationR4RequestGroup' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5RequestOrchestrationR4RequestGroup.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5RequirementsR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5RequirementsR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ResearchStudyR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ResearchStudyR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ResearchSubjectR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ResearchSubjectR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\ProfileR5ResourceR4' => __DIR__ . '/ProfileR5ResourceR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5RiskAssessmentR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5RiskAssessmentR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ScheduleR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ScheduleR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SearchParameterR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5SearchParameterR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ServiceRequestR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ServiceRequestR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SlotR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5SlotR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SpecimenR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5SpecimenR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SpecimenDefinitionR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5SpecimenDefinitionR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5StructureDefinitionR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5StructureDefinitionR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5StructureMapR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5StructureMapR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SubscriptionR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5SubscriptionR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SubscriptionStatusR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5SubscriptionStatusR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SubscriptionTopicR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5SubscriptionTopicR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SubstanceR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5SubstanceR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SubstanceDefinitionR4SubstanceSpecification' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5SubstanceDefinitionR4SubstanceSpecification.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SubstanceNucleicAcidR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5SubstanceNucleicAcidR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SubstancePolymerR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5SubstancePolymerR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SubstanceProteinR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5SubstanceProteinR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SubstanceReferenceInformationR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5SubstanceReferenceInformationR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SubstanceSourceMaterialR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5SubstanceSourceMaterialR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SupplyDeliveryR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5SupplyDeliveryR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SupplyRequestR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5SupplyRequestR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5TaskR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5TaskR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5TerminologyCapabilitiesR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5TerminologyCapabilitiesR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5TestPlanR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5TestPlanR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5TestReportR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5TestReportR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5TestScriptR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5TestScriptR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5TransportR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5TransportR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ValueSetR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5ValueSetR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5VerificationResultR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5VerificationResultR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5VisionPrescriptionR4' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileR5VisionPrescriptionR4.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\PackageMap' => __DIR__ . '/PackageMap.php',
    ];

    private static bool $_registered = false;

    public static function register(): bool
    {
        if (!self::$_registered) {
            self::$_registered = spl_autoload_register(self::class . '::loadClass', true);
        }
        return self::$_registered;
    }

    public static function unregister(): bool
    {
        if (self::$_registered && spl_autoload_unregister(self::class . '::loadClass')) {
            self::$_registered = false;
            return true;
        }
        return false;
    }

    public static function loadClass(string $class): null|bool
    {
        if (isset(self::_CLASS_MAP[$class])) {
            return (bool)require self::_CLASS_MAP[$class];
        }
        return null;
    }
}
