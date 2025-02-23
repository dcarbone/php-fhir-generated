<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 23rd, 2025 20:44+0000
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
use DCarbone\PHPFHIRGenerated\Client\ClientErrorException;
use DCarbone\PHPFHIRGenerated\Client\ClientInterface;
use DCarbone\PHPFHIRGenerated\Client\HTTPMethodEnum;
use DCarbone\PHPFHIRGenerated\Client\Request;
use DCarbone\PHPFHIRGenerated\Client\Response;
use DCarbone\PHPFHIRGenerated\Client\SortDirectionEnum;
use DCarbone\PHPFHIRGenerated\Client\UnexpectedResponseCodeException;
use DCarbone\PHPFHIRGenerated\Encoding\ResourceParser;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRBinary;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAccount;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAdministrableProductDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAdverseEvent;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAppointment;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRArtifactAssessment;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAuditEvent;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRBasic;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProductDispense;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRBodyStructure;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRActorDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRCapabilityStatement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRCompartmentDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRExampleScenario;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRGraphDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRImplementationGuide;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMessageDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRActivityDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRChargeItemDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRCitation;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRCodeSystem;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRConceptMap;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRConditionDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIREventDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIREvidence;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIREvidenceReport;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIREvidenceVariable;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRLibrary;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRMeasure;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRMedicationKnowledge;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRNamingSystem;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRObservationDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRPlanDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRQuestionnaire;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRSpecimenDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRValueSet;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIROperationDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRRequirements;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRSearchParameter;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRStructureDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRStructureMap;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRSubscriptionTopic;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRTerminologyCapabilities;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRTestPlan;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRTestScript;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCarePlan;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCareTeam;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRChargeItem;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRClaim;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRClaimResponse;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRClinicalImpression;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRClinicalUseDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCommunication;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCommunicationRequest;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRComposition;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCondition;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRConsent;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRContract;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCoverage;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityResponse;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDetectedIssue;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDevice;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDeviceAssociation;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDeviceDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDeviceDispense;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDeviceMetric;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDeviceRequest;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDeviceUsage;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDocumentReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIREncounter;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIREncounterHistory;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIREndpoint;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIREnrollmentRequest;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIREnrollmentResponse;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRFlag;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRFormularyItem;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRGenomicStudy;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRGoal;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRGroup;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRGuidanceResponse;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRHealthcareService;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRImagingSelection;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRImagingStudy;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRImmunization;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRImmunizationEvaluation;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRImmunizationRecommendation;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRIngredient;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRInsurancePlan;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRInventoryItem;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRInventoryReport;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRInvoice;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRLinkage;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRList;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRLocation;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRManufacturedItemDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMeasureReport;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMedication;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMedicationDispense;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMedicationRequest;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMedicationStatement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMessageHeader;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMolecularSequence;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRNutritionIntake;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRNutritionOrder;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRNutritionProduct;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRObservation;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIROperationOutcome;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIROrganization;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIROrganizationAffiliation;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPackagedProductDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPatient;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPaymentNotice;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPermission;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPerson;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPractitioner;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPractitionerRole;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRProcedure;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRProvenance;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRQuestionnaireResponse;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRRegulatedAuthorization;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRRelatedPerson;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRRequestOrchestration;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRResearchStudy;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRResearchSubject;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRRiskAssessment;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSchedule;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRServiceRequest;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSlot;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSpecimen;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubscription;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubscriptionStatus;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubstance;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubstanceDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubstanceNucleicAcid;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubstancePolymer;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubstanceProtein;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubstanceReferenceInformation;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubstanceSourceMaterial;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSupplyRequest;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRTask;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRTestReport;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRTransport;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRVerificationResult;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRVisionPrescription;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRParameters;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive;

class VersionClient
{
    private const _STATUS_OK = 200;

    protected ClientInterface $_client;
    protected Version $_version;

    /**
     * VersionClient Constructor
     *
     * @param \DCarbone\PHPFHIRGenerated\Client\ClientInterface $client
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Version $version
     */
    public function __construct(ClientInterface $client, Version $version)
    {
        $this->_client = $client;
        $this->_version = $version;
    }

    /**
     * Queries for one or more resources of a given type, returning the raw response fromm the server.
     *
     * @see https://www.hl7.org/fhir/http.html#read
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\VersionResourceTypeEnum $resourceType
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|int $count
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\SortDirectionEnum $sort May be a string value if your server supports non-standard sorting methods
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @param null|array $queryParams
     * @param null|bool $parseResponseHeaders
     * @return \DCarbone\PHPFHIRGenerated\Client\Response
     */
    public function read(VersionResourceTypeEnum $resourceType,
                         null|string|FHIRId|FHIRIdPrimitive $resourceID = null,
                         null|int $count = null,
                         null|string|SortDirectionEnum $sort = null,
                         null|SerializeFormatEnum $format = null,
                         null|array $queryParams = null,
                         null|bool $parseResponseHeaders = null): Response
    {

        $path = "/{$resourceType->value}";
        if (null !== $resourceID) {
            $resourceID = trim((string)$resourceID);
            if ('' === $resourceID) {
                throw new \InvalidArgumentException('Resource ID must be null or valued.');
            }
            $path .= "/{$resourceID}";
        }
        $req = new Request(
            method: HTTPMethodEnum::GET,
            path: $path,
            count: $count,
            format: $format,
            sort: $sort,
            acceptVersion: $this->_version->getFHIRVersion(),
            queryParams: $queryParams,
            parseResponseHeaders: $parseResponseHeaders,
        );
        return $this->_client->exec($req);
    }

    /**
     * Create a resource.
     *
     * @see https://www.hl7.org/fhir/http.html#create
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\VersionResourceTypeInterface $resource The resource to update, must have a defined ID.
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @param null|array $queryParams Any additional query params to send as part of this request
     * @param null|bool $parseResponseHeaders
     * @return \DCarbone\PHPFHIRGenerated\Client\Response
     */
    public function create(VersionResourceTypeInterface $resource,
                           null|SerializeFormatEnum $format = null,
                           null|array $queryParams = null,
                           null|bool $parseResponseHeaders = null): Response
    {
        $req = new Request(
            method: HTTPMethodEnum::POST,
            path: "/{$resource->_getFHIRTypeName()}",
            format: $format,
            acceptVersion: $resource->_getFHIRVersion(),
            resource: $resource,
            resourceSerializeConfig: $this->_version->getConfig()->getSerializeConfig(),
            queryParams: $queryParams,
            parseResponseHeaders: $parseResponseHeaders,
        );
        return $this->_client->exec($req);
    }

    /**
     * Update or create a specific resource.
     *
     * @see https://www.hl7.org/fhir/http.html#update
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\VersionResourceTypeInterface $resource The resource to update, must have a defined ID.
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @param null|array $queryParams Any additional query params to send as part of this request
     * @param null|bool $parseResponseHeaders
     * @return \DCarbone\PHPFHIRGenerated\Client\Response
     */
    public function update(VersionResourceTypeInterface $resource,
                           null|SerializeFormatEnum $format = null,
                           null|array $queryParams = null,
                           null|bool $parseResponseHeaders = null): Response
    {
        $req = new Request(
            method: HTTPMethodEnum::PUT,
            path: "/{$resource->_getFHIRTypeName()}/{$this->_mustGetResourceID($resource)}",
            format: $format,
            acceptVersion: $resource->_getFHIRVersion(),
            resource: $resource,
            resourceSerializeConfig: $this->_version->getConfig()->getSerializeConfig(),
            queryParams: $queryParams,
            parseResponseHeaders: $parseResponseHeaders,
        );
        return $this->_client->exec($req);
    }

    /**
     * Perform a partial update on a resource.
     *
     * @see https://www.hl7.org/fhir/http.html#patch
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\VersionResourceTypeInterface $resource The resource to update, must have a defined ID.
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @param null|array $queryParams Any additional query params to send as part of this request
     * @param null|bool $parseResponseHeaders
     * @return \DCarbone\PHPFHIRGenerated\Client\Response
     */
    public function patch(VersionResourceTypeInterface $resource,
                           null|SerializeFormatEnum $format = null,
                           null|array $queryParams = null,
                           null|bool $parseResponseHeaders = null): Response
    {
        $req = new Request(
            method: HTTPMethodEnum::PATCH,
            path: "/{$resource->_getFHIRTypeName()}/{$this->_mustGetResourceID($resource)}",
            format: $format,
            acceptVersion: $resource->_getFHIRVersion(),
            resource: $resource,
            resourceSerializeConfig: $this->_version->getConfig()->getSerializeConfig(),
            queryParams: $queryParams,
            parseResponseHeaders: $parseResponseHeaders,
        );
        return $this->_client->exec($req);
    }

    /**
     * Delete a resource by ID.
     *
     * @see https://www.hl7.org/fhir/http.html#delete
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\VersionResourceTypeEnum $resourceType
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID ID of resource to delete.
     * @return \DCarbone\PHPFHIRGenerated\Client\Response
     */
    public function delete(VersionResourceTypeEnum $resourceType,
                           string|FHIRId|FHIRIdPrimitive $resourceID): Response
    {
        $req = new Request(
            method: HTTPMethodEnum::DELETE,
            path: "{$resourceType->value}/{$resourceID}",
        );
        return $this->_client->exec($req);
    }

    /**
     * Delete a specific resource.
     *
     * @see https://www.hl7.org/fhir/http.html#delete
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\VersionResourceTypeInterface $resource Specific resource to delete.
     * @return \DCarbone\PHPFHIRGenerated\Client\Response
     */
    public function deleteResource(VersionResourceTypeInterface $resource): Response
    {
        $req = new Request(
            method: HTTPMethodEnum::DELETE,
            path: "/{$resource->_getFHIRTypeName()}/{$this->_mustGetResourceID($resource)}",
        );
        return $this->_client->exec($req);
    }

    /**
     * Read one Account resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAccount
     * @throws \Exception
     */
    public function readOneAccount(string|FHIRId|FHIRIdPrimitive $resourceID,
                                   null|SerializeFormatEnum $format = null): FHIRAccount
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::ACCOUNT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRAccount::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRAccount::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ActivityDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRActivityDefinition
     * @throws \Exception
     */
    public function readOneActivityDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|SerializeFormatEnum $format = null): FHIRActivityDefinition
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::ACTIVITY_DEFINITION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRActivityDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRActivityDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ActorDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRActorDefinition
     * @throws \Exception
     */
    public function readOneActorDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|SerializeFormatEnum $format = null): FHIRActorDefinition
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::ACTOR_DEFINITION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRActorDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRActorDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one AdministrableProductDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAdministrableProductDefinition
     * @throws \Exception
     */
    public function readOneAdministrableProductDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                          null|SerializeFormatEnum $format = null): FHIRAdministrableProductDefinition
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::ADMINISTRABLE_PRODUCT_DEFINITION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRAdministrableProductDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRAdministrableProductDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one AdverseEvent resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     * @throws \Exception
     */
    public function readOneAdverseEvent(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|SerializeFormatEnum $format = null): FHIRAdverseEvent
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::ADVERSE_EVENT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRAdverseEvent::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRAdverseEvent::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one AllergyIntolerance resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     * @throws \Exception
     */
    public function readOneAllergyIntolerance(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|SerializeFormatEnum $format = null): FHIRAllergyIntolerance
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::ALLERGY_INTOLERANCE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRAllergyIntolerance::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRAllergyIntolerance::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Appointment resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAppointment
     * @throws \Exception
     */
    public function readOneAppointment(string|FHIRId|FHIRIdPrimitive $resourceID,
                                       null|SerializeFormatEnum $format = null): FHIRAppointment
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::APPOINTMENT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRAppointment::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRAppointment::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one AppointmentResponse resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse
     * @throws \Exception
     */
    public function readOneAppointmentResponse(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|SerializeFormatEnum $format = null): FHIRAppointmentResponse
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::APPOINTMENT_RESPONSE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRAppointmentResponse::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRAppointmentResponse::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ArtifactAssessment resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRArtifactAssessment
     * @throws \Exception
     */
    public function readOneArtifactAssessment(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|SerializeFormatEnum $format = null): FHIRArtifactAssessment
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::ARTIFACT_ASSESSMENT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRArtifactAssessment::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRArtifactAssessment::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one AuditEvent resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAuditEvent
     * @throws \Exception
     */
    public function readOneAuditEvent(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|SerializeFormatEnum $format = null): FHIRAuditEvent
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::AUDIT_EVENT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRAuditEvent::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRAuditEvent::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Basic resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRBasic
     * @throws \Exception
     */
    public function readOneBasic(string|FHIRId|FHIRIdPrimitive $resourceID,
                                 null|SerializeFormatEnum $format = null): FHIRBasic
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::BASIC,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRBasic::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRBasic::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Binary resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRBinary
     * @throws \Exception
     */
    public function readOneBinary(string|FHIRId|FHIRIdPrimitive $resourceID,
                                  null|SerializeFormatEnum $format = null): FHIRBinary
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::BINARY,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRBinary::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRBinary::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one BiologicallyDerivedProduct resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct
     * @throws \Exception
     */
    public function readOneBiologicallyDerivedProduct(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                      null|SerializeFormatEnum $format = null): FHIRBiologicallyDerivedProduct
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::BIOLOGICALLY_DERIVED_PRODUCT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRBiologicallyDerivedProduct::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRBiologicallyDerivedProduct::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one BiologicallyDerivedProductDispense resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProductDispense
     * @throws \Exception
     */
    public function readOneBiologicallyDerivedProductDispense(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                              null|SerializeFormatEnum $format = null): FHIRBiologicallyDerivedProductDispense
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::BIOLOGICALLY_DERIVED_PRODUCT_DISPENSE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRBiologicallyDerivedProductDispense::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRBiologicallyDerivedProductDispense::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one BodyStructure resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRBodyStructure
     * @throws \Exception
     */
    public function readOneBodyStructure(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|SerializeFormatEnum $format = null): FHIRBodyStructure
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::BODY_STRUCTURE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRBodyStructure::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRBodyStructure::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one CanonicalResource resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource
     * @throws \Exception
     */
    public function readOneCanonicalResource(string|FHIRId|FHIRIdPrimitive $resourceID,
                                             null|SerializeFormatEnum $format = null): FHIRCanonicalResource
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::CANONICAL_RESOURCE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRCanonicalResource::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRCanonicalResource::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one CapabilityStatement resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRCapabilityStatement
     * @throws \Exception
     */
    public function readOneCapabilityStatement(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|SerializeFormatEnum $format = null): FHIRCapabilityStatement
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::CAPABILITY_STATEMENT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRCapabilityStatement::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRCapabilityStatement::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one CarePlan resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCarePlan
     * @throws \Exception
     */
    public function readOneCarePlan(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|SerializeFormatEnum $format = null): FHIRCarePlan
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::CARE_PLAN,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRCarePlan::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRCarePlan::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one CareTeam resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCareTeam
     * @throws \Exception
     */
    public function readOneCareTeam(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|SerializeFormatEnum $format = null): FHIRCareTeam
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::CARE_TEAM,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRCareTeam::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRCareTeam::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ChargeItem resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRChargeItem
     * @throws \Exception
     */
    public function readOneChargeItem(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|SerializeFormatEnum $format = null): FHIRChargeItem
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::CHARGE_ITEM,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRChargeItem::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRChargeItem::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ChargeItemDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRChargeItemDefinition
     * @throws \Exception
     */
    public function readOneChargeItemDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                null|SerializeFormatEnum $format = null): FHIRChargeItemDefinition
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::CHARGE_ITEM_DEFINITION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRChargeItemDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRChargeItemDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Citation resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRCitation
     * @throws \Exception
     */
    public function readOneCitation(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|SerializeFormatEnum $format = null): FHIRCitation
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::CITATION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRCitation::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRCitation::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Claim resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRClaim
     * @throws \Exception
     */
    public function readOneClaim(string|FHIRId|FHIRIdPrimitive $resourceID,
                                 null|SerializeFormatEnum $format = null): FHIRClaim
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::CLAIM,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRClaim::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRClaim::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ClaimResponse resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     * @throws \Exception
     */
    public function readOneClaimResponse(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|SerializeFormatEnum $format = null): FHIRClaimResponse
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::CLAIM_RESPONSE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRClaimResponse::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRClaimResponse::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ClinicalImpression resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRClinicalImpression
     * @throws \Exception
     */
    public function readOneClinicalImpression(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|SerializeFormatEnum $format = null): FHIRClinicalImpression
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::CLINICAL_IMPRESSION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRClinicalImpression::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRClinicalImpression::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ClinicalUseDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRClinicalUseDefinition
     * @throws \Exception
     */
    public function readOneClinicalUseDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                 null|SerializeFormatEnum $format = null): FHIRClinicalUseDefinition
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::CLINICAL_USE_DEFINITION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRClinicalUseDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRClinicalUseDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one CodeSystem resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRCodeSystem
     * @throws \Exception
     */
    public function readOneCodeSystem(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|SerializeFormatEnum $format = null): FHIRCodeSystem
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::CODE_SYSTEM,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRCodeSystem::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRCodeSystem::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Communication resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCommunication
     * @throws \Exception
     */
    public function readOneCommunication(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|SerializeFormatEnum $format = null): FHIRCommunication
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::COMMUNICATION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRCommunication::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRCommunication::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one CommunicationRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCommunicationRequest
     * @throws \Exception
     */
    public function readOneCommunicationRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                null|SerializeFormatEnum $format = null): FHIRCommunicationRequest
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::COMMUNICATION_REQUEST,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRCommunicationRequest::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRCommunicationRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one CompartmentDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRCompartmentDefinition
     * @throws \Exception
     */
    public function readOneCompartmentDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                 null|SerializeFormatEnum $format = null): FHIRCompartmentDefinition
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::COMPARTMENT_DEFINITION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRCompartmentDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRCompartmentDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Composition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRComposition
     * @throws \Exception
     */
    public function readOneComposition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                       null|SerializeFormatEnum $format = null): FHIRComposition
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::COMPOSITION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRComposition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRComposition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ConceptMap resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRConceptMap
     * @throws \Exception
     */
    public function readOneConceptMap(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|SerializeFormatEnum $format = null): FHIRConceptMap
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::CONCEPT_MAP,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRConceptMap::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRConceptMap::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Condition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCondition
     * @throws \Exception
     */
    public function readOneCondition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                     null|SerializeFormatEnum $format = null): FHIRCondition
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::CONDITION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRCondition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRCondition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ConditionDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRConditionDefinition
     * @throws \Exception
     */
    public function readOneConditionDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|SerializeFormatEnum $format = null): FHIRConditionDefinition
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::CONDITION_DEFINITION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRConditionDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRConditionDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Consent resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRConsent
     * @throws \Exception
     */
    public function readOneConsent(string|FHIRId|FHIRIdPrimitive $resourceID,
                                   null|SerializeFormatEnum $format = null): FHIRConsent
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::CONSENT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRConsent::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRConsent::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Contract resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRContract
     * @throws \Exception
     */
    public function readOneContract(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|SerializeFormatEnum $format = null): FHIRContract
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::CONTRACT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRContract::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRContract::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Coverage resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCoverage
     * @throws \Exception
     */
    public function readOneCoverage(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|SerializeFormatEnum $format = null): FHIRCoverage
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::COVERAGE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRCoverage::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRCoverage::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one CoverageEligibilityRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest
     * @throws \Exception
     */
    public function readOneCoverageEligibilityRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                      null|SerializeFormatEnum $format = null): FHIRCoverageEligibilityRequest
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::COVERAGE_ELIGIBILITY_REQUEST,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRCoverageEligibilityRequest::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRCoverageEligibilityRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one CoverageEligibilityResponse resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityResponse
     * @throws \Exception
     */
    public function readOneCoverageEligibilityResponse(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                       null|SerializeFormatEnum $format = null): FHIRCoverageEligibilityResponse
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::COVERAGE_ELIGIBILITY_RESPONSE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRCoverageEligibilityResponse::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRCoverageEligibilityResponse::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one DetectedIssue resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     * @throws \Exception
     */
    public function readOneDetectedIssue(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|SerializeFormatEnum $format = null): FHIRDetectedIssue
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::DETECTED_ISSUE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRDetectedIssue::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRDetectedIssue::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Device resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDevice
     * @throws \Exception
     */
    public function readOneDevice(string|FHIRId|FHIRIdPrimitive $resourceID,
                                  null|SerializeFormatEnum $format = null): FHIRDevice
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::DEVICE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRDevice::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRDevice::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one DeviceAssociation resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDeviceAssociation
     * @throws \Exception
     */
    public function readOneDeviceAssociation(string|FHIRId|FHIRIdPrimitive $resourceID,
                                             null|SerializeFormatEnum $format = null): FHIRDeviceAssociation
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::DEVICE_ASSOCIATION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRDeviceAssociation::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRDeviceAssociation::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one DeviceDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDeviceDefinition
     * @throws \Exception
     */
    public function readOneDeviceDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|SerializeFormatEnum $format = null): FHIRDeviceDefinition
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::DEVICE_DEFINITION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRDeviceDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRDeviceDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one DeviceDispense resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDeviceDispense
     * @throws \Exception
     */
    public function readOneDeviceDispense(string|FHIRId|FHIRIdPrimitive $resourceID,
                                          null|SerializeFormatEnum $format = null): FHIRDeviceDispense
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::DEVICE_DISPENSE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRDeviceDispense::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRDeviceDispense::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one DeviceMetric resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDeviceMetric
     * @throws \Exception
     */
    public function readOneDeviceMetric(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|SerializeFormatEnum $format = null): FHIRDeviceMetric
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::DEVICE_METRIC,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRDeviceMetric::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRDeviceMetric::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one DeviceRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDeviceRequest
     * @throws \Exception
     */
    public function readOneDeviceRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|SerializeFormatEnum $format = null): FHIRDeviceRequest
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::DEVICE_REQUEST,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRDeviceRequest::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRDeviceRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one DeviceUsage resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDeviceUsage
     * @throws \Exception
     */
    public function readOneDeviceUsage(string|FHIRId|FHIRIdPrimitive $resourceID,
                                       null|SerializeFormatEnum $format = null): FHIRDeviceUsage
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::DEVICE_USAGE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRDeviceUsage::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRDeviceUsage::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one DiagnosticReport resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport
     * @throws \Exception
     */
    public function readOneDiagnosticReport(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|SerializeFormatEnum $format = null): FHIRDiagnosticReport
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::DIAGNOSTIC_REPORT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRDiagnosticReport::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRDiagnosticReport::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one DocumentReference resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDocumentReference
     * @throws \Exception
     */
    public function readOneDocumentReference(string|FHIRId|FHIRIdPrimitive $resourceID,
                                             null|SerializeFormatEnum $format = null): FHIRDocumentReference
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::DOCUMENT_REFERENCE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRDocumentReference::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRDocumentReference::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Encounter resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIREncounter
     * @throws \Exception
     */
    public function readOneEncounter(string|FHIRId|FHIRIdPrimitive $resourceID,
                                     null|SerializeFormatEnum $format = null): FHIREncounter
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::ENCOUNTER,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIREncounter::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIREncounter::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one EncounterHistory resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIREncounterHistory
     * @throws \Exception
     */
    public function readOneEncounterHistory(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|SerializeFormatEnum $format = null): FHIREncounterHistory
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::ENCOUNTER_HISTORY,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIREncounterHistory::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIREncounterHistory::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Endpoint resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIREndpoint
     * @throws \Exception
     */
    public function readOneEndpoint(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|SerializeFormatEnum $format = null): FHIREndpoint
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::ENDPOINT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIREndpoint::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIREndpoint::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one EnrollmentRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIREnrollmentRequest
     * @throws \Exception
     */
    public function readOneEnrollmentRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                             null|SerializeFormatEnum $format = null): FHIREnrollmentRequest
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::ENROLLMENT_REQUEST,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIREnrollmentRequest::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIREnrollmentRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one EnrollmentResponse resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIREnrollmentResponse
     * @throws \Exception
     */
    public function readOneEnrollmentResponse(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|SerializeFormatEnum $format = null): FHIREnrollmentResponse
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::ENROLLMENT_RESPONSE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIREnrollmentResponse::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIREnrollmentResponse::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one EpisodeOfCare resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
     * @throws \Exception
     */
    public function readOneEpisodeOfCare(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|SerializeFormatEnum $format = null): FHIREpisodeOfCare
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::EPISODE_OF_CARE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIREpisodeOfCare::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIREpisodeOfCare::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one EventDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIREventDefinition
     * @throws \Exception
     */
    public function readOneEventDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|SerializeFormatEnum $format = null): FHIREventDefinition
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::EVENT_DEFINITION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIREventDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIREventDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Evidence resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIREvidence
     * @throws \Exception
     */
    public function readOneEvidence(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|SerializeFormatEnum $format = null): FHIREvidence
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::EVIDENCE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIREvidence::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIREvidence::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one EvidenceReport resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIREvidenceReport
     * @throws \Exception
     */
    public function readOneEvidenceReport(string|FHIRId|FHIRIdPrimitive $resourceID,
                                          null|SerializeFormatEnum $format = null): FHIREvidenceReport
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::EVIDENCE_REPORT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIREvidenceReport::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIREvidenceReport::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one EvidenceVariable resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIREvidenceVariable
     * @throws \Exception
     */
    public function readOneEvidenceVariable(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|SerializeFormatEnum $format = null): FHIREvidenceVariable
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::EVIDENCE_VARIABLE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIREvidenceVariable::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIREvidenceVariable::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ExampleScenario resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRExampleScenario
     * @throws \Exception
     */
    public function readOneExampleScenario(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|SerializeFormatEnum $format = null): FHIRExampleScenario
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::EXAMPLE_SCENARIO,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRExampleScenario::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRExampleScenario::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ExplanationOfBenefit resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit
     * @throws \Exception
     */
    public function readOneExplanationOfBenefit(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                null|SerializeFormatEnum $format = null): FHIRExplanationOfBenefit
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::EXPLANATION_OF_BENEFIT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRExplanationOfBenefit::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRExplanationOfBenefit::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one FamilyMemberHistory resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory
     * @throws \Exception
     */
    public function readOneFamilyMemberHistory(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|SerializeFormatEnum $format = null): FHIRFamilyMemberHistory
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::FAMILY_MEMBER_HISTORY,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRFamilyMemberHistory::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRFamilyMemberHistory::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Flag resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRFlag
     * @throws \Exception
     */
    public function readOneFlag(string|FHIRId|FHIRIdPrimitive $resourceID,
                                null|SerializeFormatEnum $format = null): FHIRFlag
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::FLAG,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRFlag::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRFlag::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one FormularyItem resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRFormularyItem
     * @throws \Exception
     */
    public function readOneFormularyItem(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|SerializeFormatEnum $format = null): FHIRFormularyItem
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::FORMULARY_ITEM,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRFormularyItem::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRFormularyItem::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one GenomicStudy resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRGenomicStudy
     * @throws \Exception
     */
    public function readOneGenomicStudy(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|SerializeFormatEnum $format = null): FHIRGenomicStudy
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::GENOMIC_STUDY,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRGenomicStudy::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRGenomicStudy::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Goal resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRGoal
     * @throws \Exception
     */
    public function readOneGoal(string|FHIRId|FHIRIdPrimitive $resourceID,
                                null|SerializeFormatEnum $format = null): FHIRGoal
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::GOAL,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRGoal::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRGoal::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one GraphDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRGraphDefinition
     * @throws \Exception
     */
    public function readOneGraphDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|SerializeFormatEnum $format = null): FHIRGraphDefinition
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::GRAPH_DEFINITION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRGraphDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRGraphDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Group resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRGroup
     * @throws \Exception
     */
    public function readOneGroup(string|FHIRId|FHIRIdPrimitive $resourceID,
                                 null|SerializeFormatEnum $format = null): FHIRGroup
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::GROUP,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRGroup::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRGroup::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one GuidanceResponse resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRGuidanceResponse
     * @throws \Exception
     */
    public function readOneGuidanceResponse(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|SerializeFormatEnum $format = null): FHIRGuidanceResponse
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::GUIDANCE_RESPONSE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRGuidanceResponse::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRGuidanceResponse::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one HealthcareService resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     * @throws \Exception
     */
    public function readOneHealthcareService(string|FHIRId|FHIRIdPrimitive $resourceID,
                                             null|SerializeFormatEnum $format = null): FHIRHealthcareService
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::HEALTHCARE_SERVICE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRHealthcareService::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRHealthcareService::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ImagingSelection resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRImagingSelection
     * @throws \Exception
     */
    public function readOneImagingSelection(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|SerializeFormatEnum $format = null): FHIRImagingSelection
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::IMAGING_SELECTION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRImagingSelection::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRImagingSelection::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ImagingStudy resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRImagingStudy
     * @throws \Exception
     */
    public function readOneImagingStudy(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|SerializeFormatEnum $format = null): FHIRImagingStudy
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::IMAGING_STUDY,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRImagingStudy::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRImagingStudy::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Immunization resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRImmunization
     * @throws \Exception
     */
    public function readOneImmunization(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|SerializeFormatEnum $format = null): FHIRImmunization
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::IMMUNIZATION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRImmunization::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRImmunization::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ImmunizationEvaluation resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRImmunizationEvaluation
     * @throws \Exception
     */
    public function readOneImmunizationEvaluation(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                  null|SerializeFormatEnum $format = null): FHIRImmunizationEvaluation
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::IMMUNIZATION_EVALUATION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRImmunizationEvaluation::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRImmunizationEvaluation::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ImmunizationRecommendation resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRImmunizationRecommendation
     * @throws \Exception
     */
    public function readOneImmunizationRecommendation(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                      null|SerializeFormatEnum $format = null): FHIRImmunizationRecommendation
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::IMMUNIZATION_RECOMMENDATION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRImmunizationRecommendation::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRImmunizationRecommendation::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ImplementationGuide resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRImplementationGuide
     * @throws \Exception
     */
    public function readOneImplementationGuide(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|SerializeFormatEnum $format = null): FHIRImplementationGuide
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::IMPLEMENTATION_GUIDE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRImplementationGuide::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRImplementationGuide::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Ingredient resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRIngredient
     * @throws \Exception
     */
    public function readOneIngredient(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|SerializeFormatEnum $format = null): FHIRIngredient
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::INGREDIENT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRIngredient::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRIngredient::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one InsurancePlan resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRInsurancePlan
     * @throws \Exception
     */
    public function readOneInsurancePlan(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|SerializeFormatEnum $format = null): FHIRInsurancePlan
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::INSURANCE_PLAN,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRInsurancePlan::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRInsurancePlan::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one InventoryItem resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRInventoryItem
     * @throws \Exception
     */
    public function readOneInventoryItem(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|SerializeFormatEnum $format = null): FHIRInventoryItem
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::INVENTORY_ITEM,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRInventoryItem::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRInventoryItem::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one InventoryReport resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRInventoryReport
     * @throws \Exception
     */
    public function readOneInventoryReport(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|SerializeFormatEnum $format = null): FHIRInventoryReport
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::INVENTORY_REPORT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRInventoryReport::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRInventoryReport::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Invoice resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRInvoice
     * @throws \Exception
     */
    public function readOneInvoice(string|FHIRId|FHIRIdPrimitive $resourceID,
                                   null|SerializeFormatEnum $format = null): FHIRInvoice
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::INVOICE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRInvoice::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRInvoice::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Library resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRLibrary
     * @throws \Exception
     */
    public function readOneLibrary(string|FHIRId|FHIRIdPrimitive $resourceID,
                                   null|SerializeFormatEnum $format = null): FHIRLibrary
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::LIBRARY,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRLibrary::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRLibrary::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Linkage resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRLinkage
     * @throws \Exception
     */
    public function readOneLinkage(string|FHIRId|FHIRIdPrimitive $resourceID,
                                   null|SerializeFormatEnum $format = null): FHIRLinkage
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::LINKAGE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRLinkage::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRLinkage::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one List resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRList
     * @throws \Exception
     */
    public function readOneList(string|FHIRId|FHIRIdPrimitive $resourceID,
                                null|SerializeFormatEnum $format = null): FHIRList
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::LIST,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRList::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRList::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Location resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRLocation
     * @throws \Exception
     */
    public function readOneLocation(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|SerializeFormatEnum $format = null): FHIRLocation
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::LOCATION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRLocation::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRLocation::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ManufacturedItemDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRManufacturedItemDefinition
     * @throws \Exception
     */
    public function readOneManufacturedItemDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                      null|SerializeFormatEnum $format = null): FHIRManufacturedItemDefinition
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::MANUFACTURED_ITEM_DEFINITION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRManufacturedItemDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRManufacturedItemDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Measure resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRMeasure
     * @throws \Exception
     */
    public function readOneMeasure(string|FHIRId|FHIRIdPrimitive $resourceID,
                                   null|SerializeFormatEnum $format = null): FHIRMeasure
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::MEASURE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRMeasure::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRMeasure::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one MeasureReport resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMeasureReport
     * @throws \Exception
     */
    public function readOneMeasureReport(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|SerializeFormatEnum $format = null): FHIRMeasureReport
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::MEASURE_REPORT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRMeasureReport::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRMeasureReport::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Medication resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMedication
     * @throws \Exception
     */
    public function readOneMedication(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|SerializeFormatEnum $format = null): FHIRMedication
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::MEDICATION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRMedication::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRMedication::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one MedicationAdministration resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
     * @throws \Exception
     */
    public function readOneMedicationAdministration(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                    null|SerializeFormatEnum $format = null): FHIRMedicationAdministration
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::MEDICATION_ADMINISTRATION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRMedicationAdministration::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRMedicationAdministration::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one MedicationDispense resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     * @throws \Exception
     */
    public function readOneMedicationDispense(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|SerializeFormatEnum $format = null): FHIRMedicationDispense
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::MEDICATION_DISPENSE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRMedicationDispense::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRMedicationDispense::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one MedicationKnowledge resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRMedicationKnowledge
     * @throws \Exception
     */
    public function readOneMedicationKnowledge(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|SerializeFormatEnum $format = null): FHIRMedicationKnowledge
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::MEDICATION_KNOWLEDGE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRMedicationKnowledge::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRMedicationKnowledge::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one MedicationRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMedicationRequest
     * @throws \Exception
     */
    public function readOneMedicationRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                             null|SerializeFormatEnum $format = null): FHIRMedicationRequest
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::MEDICATION_REQUEST,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRMedicationRequest::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRMedicationRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one MedicationStatement resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMedicationStatement
     * @throws \Exception
     */
    public function readOneMedicationStatement(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|SerializeFormatEnum $format = null): FHIRMedicationStatement
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::MEDICATION_STATEMENT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRMedicationStatement::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRMedicationStatement::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one MedicinalProductDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDefinition
     * @throws \Exception
     */
    public function readOneMedicinalProductDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                      null|SerializeFormatEnum $format = null): FHIRMedicinalProductDefinition
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::MEDICINAL_PRODUCT_DEFINITION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRMedicinalProductDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRMedicinalProductDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one MessageDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMessageDefinition
     * @throws \Exception
     */
    public function readOneMessageDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                             null|SerializeFormatEnum $format = null): FHIRMessageDefinition
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::MESSAGE_DEFINITION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRMessageDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRMessageDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one MessageHeader resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMessageHeader
     * @throws \Exception
     */
    public function readOneMessageHeader(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|SerializeFormatEnum $format = null): FHIRMessageHeader
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::MESSAGE_HEADER,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRMessageHeader::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRMessageHeader::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one MetadataResource resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource
     * @throws \Exception
     */
    public function readOneMetadataResource(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|SerializeFormatEnum $format = null): FHIRMetadataResource
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::METADATA_RESOURCE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRMetadataResource::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRMetadataResource::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one MolecularSequence resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMolecularSequence
     * @throws \Exception
     */
    public function readOneMolecularSequence(string|FHIRId|FHIRIdPrimitive $resourceID,
                                             null|SerializeFormatEnum $format = null): FHIRMolecularSequence
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::MOLECULAR_SEQUENCE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRMolecularSequence::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRMolecularSequence::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one NamingSystem resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRNamingSystem
     * @throws \Exception
     */
    public function readOneNamingSystem(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|SerializeFormatEnum $format = null): FHIRNamingSystem
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::NAMING_SYSTEM,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRNamingSystem::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRNamingSystem::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one NutritionIntake resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRNutritionIntake
     * @throws \Exception
     */
    public function readOneNutritionIntake(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|SerializeFormatEnum $format = null): FHIRNutritionIntake
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::NUTRITION_INTAKE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRNutritionIntake::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRNutritionIntake::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one NutritionOrder resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRNutritionOrder
     * @throws \Exception
     */
    public function readOneNutritionOrder(string|FHIRId|FHIRIdPrimitive $resourceID,
                                          null|SerializeFormatEnum $format = null): FHIRNutritionOrder
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::NUTRITION_ORDER,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRNutritionOrder::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRNutritionOrder::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one NutritionProduct resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRNutritionProduct
     * @throws \Exception
     */
    public function readOneNutritionProduct(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|SerializeFormatEnum $format = null): FHIRNutritionProduct
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::NUTRITION_PRODUCT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRNutritionProduct::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRNutritionProduct::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Observation resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRObservation
     * @throws \Exception
     */
    public function readOneObservation(string|FHIRId|FHIRIdPrimitive $resourceID,
                                       null|SerializeFormatEnum $format = null): FHIRObservation
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::OBSERVATION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRObservation::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRObservation::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ObservationDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRObservationDefinition
     * @throws \Exception
     */
    public function readOneObservationDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                 null|SerializeFormatEnum $format = null): FHIRObservationDefinition
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::OBSERVATION_DEFINITION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRObservationDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRObservationDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one OperationDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIROperationDefinition
     * @throws \Exception
     */
    public function readOneOperationDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|SerializeFormatEnum $format = null): FHIROperationDefinition
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::OPERATION_DEFINITION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIROperationDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIROperationDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one OperationOutcome resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIROperationOutcome
     * @throws \Exception
     */
    public function readOneOperationOutcome(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|SerializeFormatEnum $format = null): FHIROperationOutcome
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::OPERATION_OUTCOME,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIROperationOutcome::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIROperationOutcome::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Organization resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIROrganization
     * @throws \Exception
     */
    public function readOneOrganization(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|SerializeFormatEnum $format = null): FHIROrganization
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::ORGANIZATION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIROrganization::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIROrganization::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one OrganizationAffiliation resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIROrganizationAffiliation
     * @throws \Exception
     */
    public function readOneOrganizationAffiliation(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                   null|SerializeFormatEnum $format = null): FHIROrganizationAffiliation
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::ORGANIZATION_AFFILIATION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIROrganizationAffiliation::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIROrganizationAffiliation::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one PackagedProductDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPackagedProductDefinition
     * @throws \Exception
     */
    public function readOnePackagedProductDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                     null|SerializeFormatEnum $format = null): FHIRPackagedProductDefinition
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::PACKAGED_PRODUCT_DEFINITION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRPackagedProductDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRPackagedProductDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Parameters resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRParameters
     * @throws \Exception
     */
    public function readOneParameters(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|SerializeFormatEnum $format = null): FHIRParameters
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::PARAMETERS,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRParameters::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRParameters::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Patient resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPatient
     * @throws \Exception
     */
    public function readOnePatient(string|FHIRId|FHIRIdPrimitive $resourceID,
                                   null|SerializeFormatEnum $format = null): FHIRPatient
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::PATIENT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRPatient::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRPatient::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one PaymentNotice resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPaymentNotice
     * @throws \Exception
     */
    public function readOnePaymentNotice(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|SerializeFormatEnum $format = null): FHIRPaymentNotice
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::PAYMENT_NOTICE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRPaymentNotice::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRPaymentNotice::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one PaymentReconciliation resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation
     * @throws \Exception
     */
    public function readOnePaymentReconciliation(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                 null|SerializeFormatEnum $format = null): FHIRPaymentReconciliation
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::PAYMENT_RECONCILIATION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRPaymentReconciliation::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRPaymentReconciliation::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Permission resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPermission
     * @throws \Exception
     */
    public function readOnePermission(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|SerializeFormatEnum $format = null): FHIRPermission
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::PERMISSION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRPermission::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRPermission::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Person resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPerson
     * @throws \Exception
     */
    public function readOnePerson(string|FHIRId|FHIRIdPrimitive $resourceID,
                                  null|SerializeFormatEnum $format = null): FHIRPerson
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::PERSON,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRPerson::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRPerson::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one PlanDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRPlanDefinition
     * @throws \Exception
     */
    public function readOnePlanDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                          null|SerializeFormatEnum $format = null): FHIRPlanDefinition
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::PLAN_DEFINITION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRPlanDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRPlanDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Practitioner resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPractitioner
     * @throws \Exception
     */
    public function readOnePractitioner(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|SerializeFormatEnum $format = null): FHIRPractitioner
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::PRACTITIONER,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRPractitioner::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRPractitioner::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one PractitionerRole resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPractitionerRole
     * @throws \Exception
     */
    public function readOnePractitionerRole(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|SerializeFormatEnum $format = null): FHIRPractitionerRole
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::PRACTITIONER_ROLE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRPractitionerRole::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRPractitionerRole::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Procedure resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRProcedure
     * @throws \Exception
     */
    public function readOneProcedure(string|FHIRId|FHIRIdPrimitive $resourceID,
                                     null|SerializeFormatEnum $format = null): FHIRProcedure
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::PROCEDURE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRProcedure::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRProcedure::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Provenance resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRProvenance
     * @throws \Exception
     */
    public function readOneProvenance(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|SerializeFormatEnum $format = null): FHIRProvenance
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::PROVENANCE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRProvenance::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRProvenance::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Questionnaire resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRQuestionnaire
     * @throws \Exception
     */
    public function readOneQuestionnaire(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|SerializeFormatEnum $format = null): FHIRQuestionnaire
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::QUESTIONNAIRE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRQuestionnaire::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRQuestionnaire::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one QuestionnaireResponse resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRQuestionnaireResponse
     * @throws \Exception
     */
    public function readOneQuestionnaireResponse(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                 null|SerializeFormatEnum $format = null): FHIRQuestionnaireResponse
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::QUESTIONNAIRE_RESPONSE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRQuestionnaireResponse::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRQuestionnaireResponse::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one RegulatedAuthorization resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRRegulatedAuthorization
     * @throws \Exception
     */
    public function readOneRegulatedAuthorization(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                  null|SerializeFormatEnum $format = null): FHIRRegulatedAuthorization
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::REGULATED_AUTHORIZATION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRRegulatedAuthorization::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRRegulatedAuthorization::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one RelatedPerson resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRRelatedPerson
     * @throws \Exception
     */
    public function readOneRelatedPerson(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|SerializeFormatEnum $format = null): FHIRRelatedPerson
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::RELATED_PERSON,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRRelatedPerson::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRRelatedPerson::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one RequestOrchestration resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRRequestOrchestration
     * @throws \Exception
     */
    public function readOneRequestOrchestration(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                null|SerializeFormatEnum $format = null): FHIRRequestOrchestration
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::REQUEST_ORCHESTRATION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRRequestOrchestration::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRRequestOrchestration::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Requirements resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRRequirements
     * @throws \Exception
     */
    public function readOneRequirements(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|SerializeFormatEnum $format = null): FHIRRequirements
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::REQUIREMENTS,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRRequirements::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRRequirements::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ResearchStudy resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     * @throws \Exception
     */
    public function readOneResearchStudy(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|SerializeFormatEnum $format = null): FHIRResearchStudy
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::RESEARCH_STUDY,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRResearchStudy::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRResearchStudy::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ResearchSubject resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRResearchSubject
     * @throws \Exception
     */
    public function readOneResearchSubject(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|SerializeFormatEnum $format = null): FHIRResearchSubject
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::RESEARCH_SUBJECT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRResearchSubject::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRResearchSubject::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one RiskAssessment resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRRiskAssessment
     * @throws \Exception
     */
    public function readOneRiskAssessment(string|FHIRId|FHIRIdPrimitive $resourceID,
                                          null|SerializeFormatEnum $format = null): FHIRRiskAssessment
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::RISK_ASSESSMENT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRRiskAssessment::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRRiskAssessment::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Schedule resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSchedule
     * @throws \Exception
     */
    public function readOneSchedule(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|SerializeFormatEnum $format = null): FHIRSchedule
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::SCHEDULE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRSchedule::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRSchedule::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one SearchParameter resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRSearchParameter
     * @throws \Exception
     */
    public function readOneSearchParameter(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|SerializeFormatEnum $format = null): FHIRSearchParameter
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::SEARCH_PARAMETER,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRSearchParameter::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRSearchParameter::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ServiceRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRServiceRequest
     * @throws \Exception
     */
    public function readOneServiceRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                          null|SerializeFormatEnum $format = null): FHIRServiceRequest
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::SERVICE_REQUEST,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRServiceRequest::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRServiceRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Slot resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSlot
     * @throws \Exception
     */
    public function readOneSlot(string|FHIRId|FHIRIdPrimitive $resourceID,
                                null|SerializeFormatEnum $format = null): FHIRSlot
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::SLOT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRSlot::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRSlot::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Specimen resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSpecimen
     * @throws \Exception
     */
    public function readOneSpecimen(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|SerializeFormatEnum $format = null): FHIRSpecimen
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::SPECIMEN,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRSpecimen::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRSpecimen::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one SpecimenDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRSpecimenDefinition
     * @throws \Exception
     */
    public function readOneSpecimenDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|SerializeFormatEnum $format = null): FHIRSpecimenDefinition
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::SPECIMEN_DEFINITION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRSpecimenDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRSpecimenDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one StructureDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRStructureDefinition
     * @throws \Exception
     */
    public function readOneStructureDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|SerializeFormatEnum $format = null): FHIRStructureDefinition
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::STRUCTURE_DEFINITION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRStructureDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRStructureDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one StructureMap resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRStructureMap
     * @throws \Exception
     */
    public function readOneStructureMap(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|SerializeFormatEnum $format = null): FHIRStructureMap
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::STRUCTURE_MAP,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRStructureMap::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRStructureMap::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Subscription resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubscription
     * @throws \Exception
     */
    public function readOneSubscription(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|SerializeFormatEnum $format = null): FHIRSubscription
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::SUBSCRIPTION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRSubscription::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRSubscription::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one SubscriptionStatus resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubscriptionStatus
     * @throws \Exception
     */
    public function readOneSubscriptionStatus(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|SerializeFormatEnum $format = null): FHIRSubscriptionStatus
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::SUBSCRIPTION_STATUS,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRSubscriptionStatus::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRSubscriptionStatus::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one SubscriptionTopic resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRSubscriptionTopic
     * @throws \Exception
     */
    public function readOneSubscriptionTopic(string|FHIRId|FHIRIdPrimitive $resourceID,
                                             null|SerializeFormatEnum $format = null): FHIRSubscriptionTopic
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::SUBSCRIPTION_TOPIC,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRSubscriptionTopic::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRSubscriptionTopic::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Substance resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubstance
     * @throws \Exception
     */
    public function readOneSubstance(string|FHIRId|FHIRIdPrimitive $resourceID,
                                     null|SerializeFormatEnum $format = null): FHIRSubstance
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::SUBSTANCE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRSubstance::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRSubstance::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one SubstanceDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubstanceDefinition
     * @throws \Exception
     */
    public function readOneSubstanceDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|SerializeFormatEnum $format = null): FHIRSubstanceDefinition
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::SUBSTANCE_DEFINITION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRSubstanceDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRSubstanceDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one SubstanceNucleicAcid resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubstanceNucleicAcid
     * @throws \Exception
     */
    public function readOneSubstanceNucleicAcid(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                null|SerializeFormatEnum $format = null): FHIRSubstanceNucleicAcid
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::SUBSTANCE_NUCLEIC_ACID,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRSubstanceNucleicAcid::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRSubstanceNucleicAcid::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one SubstancePolymer resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubstancePolymer
     * @throws \Exception
     */
    public function readOneSubstancePolymer(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|SerializeFormatEnum $format = null): FHIRSubstancePolymer
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::SUBSTANCE_POLYMER,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRSubstancePolymer::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRSubstancePolymer::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one SubstanceProtein resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubstanceProtein
     * @throws \Exception
     */
    public function readOneSubstanceProtein(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|SerializeFormatEnum $format = null): FHIRSubstanceProtein
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::SUBSTANCE_PROTEIN,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRSubstanceProtein::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRSubstanceProtein::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one SubstanceReferenceInformation resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubstanceReferenceInformation
     * @throws \Exception
     */
    public function readOneSubstanceReferenceInformation(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                         null|SerializeFormatEnum $format = null): FHIRSubstanceReferenceInformation
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::SUBSTANCE_REFERENCE_INFORMATION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRSubstanceReferenceInformation::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRSubstanceReferenceInformation::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one SubstanceSourceMaterial resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubstanceSourceMaterial
     * @throws \Exception
     */
    public function readOneSubstanceSourceMaterial(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                   null|SerializeFormatEnum $format = null): FHIRSubstanceSourceMaterial
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::SUBSTANCE_SOURCE_MATERIAL,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRSubstanceSourceMaterial::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRSubstanceSourceMaterial::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one SupplyDelivery resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery
     * @throws \Exception
     */
    public function readOneSupplyDelivery(string|FHIRId|FHIRIdPrimitive $resourceID,
                                          null|SerializeFormatEnum $format = null): FHIRSupplyDelivery
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::SUPPLY_DELIVERY,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRSupplyDelivery::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRSupplyDelivery::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one SupplyRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSupplyRequest
     * @throws \Exception
     */
    public function readOneSupplyRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|SerializeFormatEnum $format = null): FHIRSupplyRequest
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::SUPPLY_REQUEST,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRSupplyRequest::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRSupplyRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Task resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRTask
     * @throws \Exception
     */
    public function readOneTask(string|FHIRId|FHIRIdPrimitive $resourceID,
                                null|SerializeFormatEnum $format = null): FHIRTask
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::TASK,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRTask::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRTask::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one TerminologyCapabilities resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRTerminologyCapabilities
     * @throws \Exception
     */
    public function readOneTerminologyCapabilities(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                   null|SerializeFormatEnum $format = null): FHIRTerminologyCapabilities
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::TERMINOLOGY_CAPABILITIES,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRTerminologyCapabilities::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRTerminologyCapabilities::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one TestPlan resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRTestPlan
     * @throws \Exception
     */
    public function readOneTestPlan(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|SerializeFormatEnum $format = null): FHIRTestPlan
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::TEST_PLAN,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRTestPlan::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRTestPlan::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one TestReport resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRTestReport
     * @throws \Exception
     */
    public function readOneTestReport(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|SerializeFormatEnum $format = null): FHIRTestReport
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::TEST_REPORT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRTestReport::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRTestReport::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one TestScript resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRTestScript
     * @throws \Exception
     */
    public function readOneTestScript(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|SerializeFormatEnum $format = null): FHIRTestScript
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::TEST_SCRIPT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRTestScript::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRTestScript::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Transport resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRTransport
     * @throws \Exception
     */
    public function readOneTransport(string|FHIRId|FHIRIdPrimitive $resourceID,
                                     null|SerializeFormatEnum $format = null): FHIRTransport
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::TRANSPORT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRTransport::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRTransport::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ValueSet resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRValueSet
     * @throws \Exception
     */
    public function readOneValueSet(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|SerializeFormatEnum $format = null): FHIRValueSet
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::VALUE_SET,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRValueSet::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRValueSet::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one VerificationResult resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRVerificationResult
     * @throws \Exception
     */
    public function readOneVerificationResult(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|SerializeFormatEnum $format = null): FHIRVerificationResult
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::VERIFICATION_RESULT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRVerificationResult::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRVerificationResult::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one VisionPrescription resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRVisionPrescription
     * @throws \Exception
     */
    public function readOneVisionPrescription(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|SerializeFormatEnum $format = null): FHIRVisionPrescription
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::VISION_PRESCRIPTION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRVisionPrescription::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRVisionPrescription::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    protected function _requireOK(Response $rc): void
    {
        if (isset($rc->err)) {
            throw new ClientErrorException($rc);
        }
        if (!isset($rc->code) || self::_STATUS_OK !== $rc->code) {
            throw new UnexpectedResponseCodeException($rc, self::_STATUS_OK);
        }
    }

    protected function _parseResponse(VersionResourceTypeEnum $resourceType,
                                     Response $rc): VersionResourceTypeInterface
    {
        /** @var \DCarbone\PHPFHIRGenerated\Versions\R5\VersionResourceTypeInterface $class */
        $class = $this->_version->getTypeMap()::getTypeClassname($resourceType->name);
        return match ($rc->getResponseFormat()) {
            SerializeFormatEnum::JSON => $class::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => $class::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            null => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    protected function _mustGetResourceID(VersionResourceTypeInterface $resource): string
    {
        $id = $resource->getId()?->_getValueAsString();
        if (null === $id || '' === $id) {
            throw new \DomainException(sprintf(
                'Cannot update resource of type "%s" as its ID is undefined or empty',
                $resource->_getFHIRTypeName(),
            ));
        }
        return $id;
    }
}
