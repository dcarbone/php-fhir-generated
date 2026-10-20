<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Profiles\XverR5R4;

use DCarbone\PHPFHIRGenerated\Versions\R4\Profiles\PackageMapInterface;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 *
 * Class creation date: October 20th, 2026 01:17+0000
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

/**
 * Index of the generated profile classes of a single package, keyed by canonical profile url.
 */
abstract class PackageMap implements PackageMapInterface
{
    /** @var array<string, class-string> */
    private const _PROFILES = [
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Account' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5AccountR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ActivityDefinition' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ActivityDefinitionR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ActorDefinition' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ActorDefinitionR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-AdministrableProductDefinition' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5AdministrableProductDefinitionR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-AdverseEvent' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5AdverseEventR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-AllergyIntolerance' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5AllergyIntoleranceR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Appointment' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5AppointmentR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-AppointmentResponse' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5AppointmentResponseR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ArtifactAssessment' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ArtifactAssessmentR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-AuditEvent' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5AuditEventR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Basic' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5BasicR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Binary' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\ProfileR5BinaryR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-BiologicallyDerivedProduct' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5BiologicallyDerivedProductR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-BiologicallyDerivedProductDispense' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5BiologicallyDerivedProductDispenseR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-BodyStructure' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5BodyStructureR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Bundle' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\ProfileR5BundleR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-CapabilityStatement' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5CapabilityStatementR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-CarePlan' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5CarePlanR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-CareTeam' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5CareTeamR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ChargeItem' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ChargeItemR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ChargeItemDefinition' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ChargeItemDefinitionR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Citation' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5CitationR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Claim' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ClaimR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ClaimResponse' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ClaimResponseR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ClinicalImpression' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ClinicalImpressionR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ClinicalUseDefinition' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ClinicalUseDefinitionR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-CodeSystem' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5CodeSystemR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Communication' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5CommunicationR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-CommunicationRequest' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5CommunicationRequestR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-CompartmentDefinition' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5CompartmentDefinitionR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Composition' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5CompositionR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ConceptMap' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ConceptMapR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Condition' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ConditionR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ConditionDefinition' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ConditionDefinitionR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Consent' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ConsentR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Contract' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ContractR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Coverage' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5CoverageR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-CoverageEligibilityRequest' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5CoverageEligibilityRequestR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-CoverageEligibilityResponse' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5CoverageEligibilityResponseR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-DetectedIssue' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5DetectedIssueR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Device' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5DeviceR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-DeviceAssociation-for-Device' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5DeviceAssociationR4Device',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-DeviceDefinition' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5DeviceDefinitionR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-DeviceDispense' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5DeviceDispenseR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-DeviceMetric' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5DeviceMetricR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-DeviceRequest' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5DeviceRequestR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-DeviceUsage-for-DeviceUseStatement' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5DeviceUsageR4DeviceUseStatement',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-DiagnosticReport' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5DiagnosticReportR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-DocumentReference-for-Media' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5DocumentReferenceR4Media',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-DocumentReference' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5DocumentReferenceR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-DomainResource' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\ProfileR5DomainResourceR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Encounter' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5EncounterR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-EncounterHistory-for-Encounter' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5EncounterHistoryR4Encounter',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Endpoint' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5EndpointR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-EnrollmentRequest' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5EnrollmentRequestR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-EnrollmentResponse' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5EnrollmentResponseR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-EpisodeOfCare' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5EpisodeOfCareR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-EventDefinition' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5EventDefinitionR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Evidence' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5EvidenceR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-EvidenceReport' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5EvidenceReportR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-EvidenceVariable' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5EvidenceVariableR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ExampleScenario' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ExampleScenarioR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ExplanationOfBenefit' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ExplanationOfBenefitR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-FamilyMemberHistory' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5FamilyMemberHistoryR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Flag' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5FlagR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-FormularyItem' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5FormularyItemR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-GenomicStudy' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5GenomicStudyR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Goal' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5GoalR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-GraphDefinition' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5GraphDefinitionR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Group' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5GroupR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-GuidanceResponse' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5GuidanceResponseR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-HealthcareService' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5HealthcareServiceR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ImagingSelection' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ImagingSelectionR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ImagingStudy' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ImagingStudyR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Immunization' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ImmunizationR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ImmunizationEvaluation' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ImmunizationEvaluationR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ImmunizationRecommendation' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ImmunizationRecommendationR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ImplementationGuide' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ImplementationGuideR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Ingredient' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5IngredientR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-InsurancePlan' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5InsurancePlanR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-InventoryItem' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5InventoryItemR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-InventoryReport' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5InventoryReportR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Invoice' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5InvoiceR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Library' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5LibraryR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Linkage' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5LinkageR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-List' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ListR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Location' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5LocationR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ManufacturedItemDefinition' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ManufacturedItemDefinitionR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Measure' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5MeasureR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-MeasureReport' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5MeasureReportR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Medication' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5MedicationR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-MedicationAdministration' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5MedicationAdministrationR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-MedicationDispense' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5MedicationDispenseR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-MedicationKnowledge' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5MedicationKnowledgeR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-MedicationRequest' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5MedicationRequestR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-MedicationStatement' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5MedicationStatementR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-MedicinalProductDefinition-for-MedicinalProduct' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5MedicinalProductDefinitionR4MedicinalProduct',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-MessageDefinition' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5MessageDefinitionR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-MessageHeader' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5MessageHeaderR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-MolecularSequence' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5MolecularSequenceR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-NamingSystem' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5NamingSystemR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-NutritionIntake' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5NutritionIntakeR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-NutritionOrder' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5NutritionOrderR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-NutritionProduct' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5NutritionProductR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Observation' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ObservationR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ObservationDefinition' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ObservationDefinitionR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-OperationDefinition' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5OperationDefinitionR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-OperationOutcome' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5OperationOutcomeR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Organization' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5OrganizationR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-OrganizationAffiliation' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5OrganizationAffiliationR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-PackagedProductDefinition' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5PackagedProductDefinitionR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Parameters' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\ProfileR5ParametersR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Patient' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5PatientR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-PaymentNotice' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5PaymentNoticeR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-PaymentReconciliation' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5PaymentReconciliationR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Permission' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5PermissionR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Person' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5PersonR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-PlanDefinition' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5PlanDefinitionR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Practitioner' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5PractitionerR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-PractitionerRole' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5PractitionerRoleR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Procedure' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ProcedureR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Provenance' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ProvenanceR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Questionnaire' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5QuestionnaireR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-QuestionnaireResponse' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5QuestionnaireResponseR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-RegulatedAuthorization' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5RegulatedAuthorizationR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-RelatedPerson' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5RelatedPersonR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-RequestOrchestration-for-RequestGroup' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5RequestOrchestrationR4RequestGroup',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Requirements' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5RequirementsR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ResearchStudy' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ResearchStudyR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ResearchSubject' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ResearchSubjectR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Resource' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\ProfileR5ResourceR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-RiskAssessment' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5RiskAssessmentR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Schedule' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ScheduleR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-SearchParameter' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SearchParameterR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ServiceRequest' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ServiceRequestR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Slot' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SlotR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Specimen' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SpecimenR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-SpecimenDefinition' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SpecimenDefinitionR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-StructureDefinition' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5StructureDefinitionR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-StructureMap' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5StructureMapR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Subscription' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SubscriptionR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-SubscriptionStatus' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SubscriptionStatusR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-SubscriptionTopic' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SubscriptionTopicR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Substance' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SubstanceR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-SubstanceDefinition-for-SubstanceSpecification' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SubstanceDefinitionR4SubstanceSpecification',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-SubstanceNucleicAcid' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SubstanceNucleicAcidR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-SubstancePolymer' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SubstancePolymerR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-SubstanceProtein' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SubstanceProteinR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-SubstanceReferenceInformation' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SubstanceReferenceInformationR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-SubstanceSourceMaterial' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SubstanceSourceMaterialR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-SupplyDelivery' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SupplyDeliveryR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-SupplyRequest' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5SupplyRequestR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Task' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5TaskR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-TerminologyCapabilities' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5TerminologyCapabilitiesR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-TestPlan' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5TestPlanR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-TestReport' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5TestReportR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-TestScript' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5TestScriptR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Transport' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5TransportR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ValueSet' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5ValueSetR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-VerificationResult' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5VerificationResultR4',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-VisionPrescription' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\FHIRResource\\FHIRDomainResource\\ProfileR5VisionPrescriptionR4',
    ];

    /** @var array<string, string> */
    private const _BASE_TYPES = [
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Account' => 'Account',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ActivityDefinition' => 'ActivityDefinition',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ActorDefinition' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-AdministrableProductDefinition' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-AdverseEvent' => 'AdverseEvent',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-AllergyIntolerance' => 'AllergyIntolerance',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Appointment' => 'Appointment',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-AppointmentResponse' => 'AppointmentResponse',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ArtifactAssessment' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-AuditEvent' => 'AuditEvent',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Basic' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Binary' => 'Binary',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-BiologicallyDerivedProduct' => 'BiologicallyDerivedProduct',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-BiologicallyDerivedProductDispense' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-BodyStructure' => 'BodyStructure',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Bundle' => 'Bundle',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-CapabilityStatement' => 'CapabilityStatement',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-CarePlan' => 'CarePlan',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-CareTeam' => 'CareTeam',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ChargeItem' => 'ChargeItem',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ChargeItemDefinition' => 'ChargeItemDefinition',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Citation' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Claim' => 'Claim',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ClaimResponse' => 'ClaimResponse',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ClinicalImpression' => 'ClinicalImpression',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ClinicalUseDefinition' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-CodeSystem' => 'CodeSystem',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Communication' => 'Communication',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-CommunicationRequest' => 'CommunicationRequest',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-CompartmentDefinition' => 'CompartmentDefinition',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Composition' => 'Composition',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ConceptMap' => 'ConceptMap',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Condition' => 'Condition',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ConditionDefinition' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Consent' => 'Consent',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Contract' => 'Contract',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Coverage' => 'Coverage',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-CoverageEligibilityRequest' => 'CoverageEligibilityRequest',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-CoverageEligibilityResponse' => 'CoverageEligibilityResponse',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-DetectedIssue' => 'DetectedIssue',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Device' => 'Device',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-DeviceAssociation-for-Device' => 'Device',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-DeviceDefinition' => 'DeviceDefinition',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-DeviceDispense' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-DeviceMetric' => 'DeviceMetric',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-DeviceRequest' => 'DeviceRequest',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-DeviceUsage-for-DeviceUseStatement' => 'DeviceUseStatement',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-DiagnosticReport' => 'DiagnosticReport',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-DocumentReference-for-Media' => 'Media',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-DocumentReference' => 'DocumentReference',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-DomainResource' => 'DomainResource',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Encounter' => 'Encounter',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-EncounterHistory-for-Encounter' => 'Encounter',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Endpoint' => 'Endpoint',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-EnrollmentRequest' => 'EnrollmentRequest',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-EnrollmentResponse' => 'EnrollmentResponse',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-EpisodeOfCare' => 'EpisodeOfCare',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-EventDefinition' => 'EventDefinition',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Evidence' => 'Evidence',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-EvidenceReport' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-EvidenceVariable' => 'EvidenceVariable',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ExampleScenario' => 'ExampleScenario',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ExplanationOfBenefit' => 'ExplanationOfBenefit',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-FamilyMemberHistory' => 'FamilyMemberHistory',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Flag' => 'Flag',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-FormularyItem' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-GenomicStudy' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Goal' => 'Goal',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-GraphDefinition' => 'GraphDefinition',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Group' => 'Group',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-GuidanceResponse' => 'GuidanceResponse',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-HealthcareService' => 'HealthcareService',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ImagingSelection' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ImagingStudy' => 'ImagingStudy',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Immunization' => 'Immunization',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ImmunizationEvaluation' => 'ImmunizationEvaluation',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ImmunizationRecommendation' => 'ImmunizationRecommendation',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ImplementationGuide' => 'ImplementationGuide',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Ingredient' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-InsurancePlan' => 'InsurancePlan',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-InventoryItem' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-InventoryReport' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Invoice' => 'Invoice',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Library' => 'Library',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Linkage' => 'Linkage',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-List' => 'List',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Location' => 'Location',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ManufacturedItemDefinition' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Measure' => 'Measure',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-MeasureReport' => 'MeasureReport',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Medication' => 'Medication',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-MedicationAdministration' => 'MedicationAdministration',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-MedicationDispense' => 'MedicationDispense',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-MedicationKnowledge' => 'MedicationKnowledge',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-MedicationRequest' => 'MedicationRequest',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-MedicationStatement' => 'MedicationStatement',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-MedicinalProductDefinition-for-MedicinalProduct' => 'MedicinalProduct',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-MessageDefinition' => 'MessageDefinition',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-MessageHeader' => 'MessageHeader',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-MolecularSequence' => 'MolecularSequence',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-NamingSystem' => 'NamingSystem',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-NutritionIntake' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-NutritionOrder' => 'NutritionOrder',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-NutritionProduct' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Observation' => 'Observation',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ObservationDefinition' => 'ObservationDefinition',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-OperationDefinition' => 'OperationDefinition',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-OperationOutcome' => 'OperationOutcome',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Organization' => 'Organization',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-OrganizationAffiliation' => 'OrganizationAffiliation',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-PackagedProductDefinition' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Parameters' => 'Parameters',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Patient' => 'Patient',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-PaymentNotice' => 'PaymentNotice',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-PaymentReconciliation' => 'PaymentReconciliation',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Permission' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Person' => 'Person',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-PlanDefinition' => 'PlanDefinition',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Practitioner' => 'Practitioner',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-PractitionerRole' => 'PractitionerRole',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Procedure' => 'Procedure',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Provenance' => 'Provenance',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Questionnaire' => 'Questionnaire',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-QuestionnaireResponse' => 'QuestionnaireResponse',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-RegulatedAuthorization' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-RelatedPerson' => 'RelatedPerson',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-RequestOrchestration-for-RequestGroup' => 'RequestGroup',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Requirements' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ResearchStudy' => 'ResearchStudy',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ResearchSubject' => 'ResearchSubject',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Resource' => 'Resource',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-RiskAssessment' => 'RiskAssessment',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Schedule' => 'Schedule',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-SearchParameter' => 'SearchParameter',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ServiceRequest' => 'ServiceRequest',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Slot' => 'Slot',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Specimen' => 'Specimen',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-SpecimenDefinition' => 'SpecimenDefinition',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-StructureDefinition' => 'StructureDefinition',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-StructureMap' => 'StructureMap',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Subscription' => 'Subscription',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-SubscriptionStatus' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-SubscriptionTopic' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Substance' => 'Substance',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-SubstanceDefinition-for-SubstanceSpecification' => 'SubstanceSpecification',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-SubstanceNucleicAcid' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-SubstancePolymer' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-SubstanceProtein' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-SubstanceReferenceInformation' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-SubstanceSourceMaterial' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-SupplyDelivery' => 'SupplyDelivery',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-SupplyRequest' => 'SupplyRequest',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Task' => 'Task',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-TerminologyCapabilities' => 'TerminologyCapabilities',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-TestPlan' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-TestReport' => 'TestReport',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-TestScript' => 'TestScript',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-Transport' => 'Basic',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-ValueSet' => 'ValueSet',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-VerificationResult' => 'VerificationResult',
        'http://hl7.org/fhir/5.0/StructureDefinition/profile-VisionPrescription' => 'VisionPrescription',
    ];

    /**
     * @return array<string, class-string>
     */
    public static function getProfileClasses(): array
    {
        return self::_PROFILES;
    }

    /**
     * @param string $url Canonical profile url, without a "|version" suffix.
     * @return null|class-string
     */
    public static function getProfileClassname(string $url): null|string
    {
        return self::_PROFILES[$url] ?? null;
    }

    /**
     * @param string $url Canonical profile url, without a "|version" suffix.
     * @return null|string FHIR name of the type the profile constrains.
     */
    public static function getProfileBaseType(string $url): null|string
    {
        return self::_BASE_TYPES[$url] ?? null;
    }
}
