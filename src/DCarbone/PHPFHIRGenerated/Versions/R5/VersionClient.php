<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 00:27+0000
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
use DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum;
use DCarbone\PHPFHIRGenerated\Client\SortDirectionEnum;
use DCarbone\PHPFHIRGenerated\Client\UnexpectedResponseCodeException;
use DCarbone\PHPFHIRGenerated\ResponseParser;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\VersionTypesEnum $resourceType
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|int $count
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\SortDirectionEnum $sort
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @param null|array $queryParams
     * @param null|bool $parseResponseHeaders
     * @return \DCarbone\PHPFHIRGenerated\Client\Response
     * @throws \Exception
     */
    public function readRaw(string|VersionTypesEnum $resourceType,
                            null|string|FHIRId|FHIRIdPrimitive $resourceID = null,
                            null|int $count = null,
                            null|string|SortDirectionEnum $sort = null,
                            null|string|ResponseFormatEnum $format = null,
                            null|array $queryParams = null,
                            null|bool $parseResponseHeaders = null): Response
    {
        if (!is_string($resourceType)) {
            $resourceType = $resourceType->value;
        }
        $path = "/{$resourceType}";
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
        );
        if (null !== $count) {
            $req->count = $count;
        }
        if (null !== $sort) {
            $req->sort = (string)$sort;
        }
        if (null !== $format) {
            $req->format = (string)$format;
        }
        if (null !== $parseResponseHeaders) {
            $req->parseResponseHeaders = $parseResponseHeaders;
        }
        if (null !== $queryParams) {
            $req->queryParams = $queryParams;
        }
        return $this->_client->exec($req);
    }

    /**
     * Queries for one or more resources of a given type, returning the unserialized response from the server.
     *
     * @see https://www.hl7.org/fhir/http.html#read
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\VersionTypesEnum $resourceType
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|int $count
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\SortDirectionEnum $sort
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @param null|array $queryParams
     * @param null|bool $parseResponseHeaders
     * @return null|\DCarbone\PHPFHIRGenerated\TypeInterface
     * @throws \Exception
     */
    public function read(string|VersionTypesEnum $resourceType,
                         null|string|FHIRId|FHIRIdPrimitive $resourceID = null,
                         null|int $count = null,
                         null|string|SortDirectionEnum $sort = null,
                         null|string|ResponseFormatEnum $format = null,
                         null|array $queryParams = null,
                         null|bool $parseResponseHeaders = null): null|TypeInterface
    {
        $rc = $this->readRaw($resourceType, $resourceID, $count, $sort, $format, $queryParams, $parseResponseHeaders);
        $this->_requireOK($rc);
        return ResponseParser::parse($this->_version, $rc->resp);
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Client\Response $rc
     * @throws \DCarbone\PHPFHIRGenerated\Client\ClientErrorException
     * @throws \DCarbone\PHPFHIRGenerated\Client\UnexpectedResponseCodeException
     */
    protected function _requireOK(Response $rc): void
    {
        if (isset($rc->err)) {
            throw new ClientErrorException($rc);
        }
        if (!isset($rc->code) || self::_STATUS_OK !== $rc->code) {
            throw new UnexpectedResponseCodeException($rc, self::_STATUS_OK);
        }
    }

    /**
     * Read one Account resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAccount
     * @throws \Exception
     */
    public function readOneAccount(string|FHIRId|FHIRIdPrimitive $resourceID,
                                   null|string|ResponseFormatEnum $format = null): FHIRAccount
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ACCOUNT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRAccount::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRAccount::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ActivityDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRActivityDefinition
     * @throws \Exception
     */
    public function readOneActivityDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|string|ResponseFormatEnum $format = null): FHIRActivityDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ACTIVITY_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRActivityDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRActivityDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ActorDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRActorDefinition
     * @throws \Exception
     */
    public function readOneActorDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|string|ResponseFormatEnum $format = null): FHIRActorDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ACTOR_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRActorDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRActorDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one AdministrableProductDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAdministrableProductDefinition
     * @throws \Exception
     */
    public function readOneAdministrableProductDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                          null|string|ResponseFormatEnum $format = null): FHIRAdministrableProductDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ADMINISTRABLE_PRODUCT_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRAdministrableProductDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRAdministrableProductDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one AdverseEvent resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     * @throws \Exception
     */
    public function readOneAdverseEvent(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|string|ResponseFormatEnum $format = null): FHIRAdverseEvent
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ADVERSE_EVENT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRAdverseEvent::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRAdverseEvent::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one AllergyIntolerance resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     * @throws \Exception
     */
    public function readOneAllergyIntolerance(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|string|ResponseFormatEnum $format = null): FHIRAllergyIntolerance
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ALLERGY_INTOLERANCE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRAllergyIntolerance::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRAllergyIntolerance::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Appointment resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAppointment
     * @throws \Exception
     */
    public function readOneAppointment(string|FHIRId|FHIRIdPrimitive $resourceID,
                                       null|string|ResponseFormatEnum $format = null): FHIRAppointment
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::APPOINTMENT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRAppointment::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRAppointment::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one AppointmentResponse resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse
     * @throws \Exception
     */
    public function readOneAppointmentResponse(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|string|ResponseFormatEnum $format = null): FHIRAppointmentResponse
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::APPOINTMENT_RESPONSE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRAppointmentResponse::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRAppointmentResponse::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ArtifactAssessment resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRArtifactAssessment
     * @throws \Exception
     */
    public function readOneArtifactAssessment(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|string|ResponseFormatEnum $format = null): FHIRArtifactAssessment
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ARTIFACT_ASSESSMENT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRArtifactAssessment::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRArtifactAssessment::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one AuditEvent resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAuditEvent
     * @throws \Exception
     */
    public function readOneAuditEvent(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|string|ResponseFormatEnum $format = null): FHIRAuditEvent
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::AUDIT_EVENT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRAuditEvent::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRAuditEvent::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Basic resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRBasic
     * @throws \Exception
     */
    public function readOneBasic(string|FHIRId|FHIRIdPrimitive $resourceID,
                                 null|string|ResponseFormatEnum $format = null): FHIRBasic
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::BASIC,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRBasic::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRBasic::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one BiologicallyDerivedProduct resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct
     * @throws \Exception
     */
    public function readOneBiologicallyDerivedProduct(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                      null|string|ResponseFormatEnum $format = null): FHIRBiologicallyDerivedProduct
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::BIOLOGICALLY_DERIVED_PRODUCT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRBiologicallyDerivedProduct::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRBiologicallyDerivedProduct::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one BiologicallyDerivedProductDispense resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProductDispense
     * @throws \Exception
     */
    public function readOneBiologicallyDerivedProductDispense(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                              null|string|ResponseFormatEnum $format = null): FHIRBiologicallyDerivedProductDispense
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::BIOLOGICALLY_DERIVED_PRODUCT_DISPENSE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRBiologicallyDerivedProductDispense::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRBiologicallyDerivedProductDispense::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one BodyStructure resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRBodyStructure
     * @throws \Exception
     */
    public function readOneBodyStructure(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|string|ResponseFormatEnum $format = null): FHIRBodyStructure
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::BODY_STRUCTURE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRBodyStructure::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRBodyStructure::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one CanonicalResource resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource
     * @throws \Exception
     */
    public function readOneCanonicalResource(string|FHIRId|FHIRIdPrimitive $resourceID,
                                             null|string|ResponseFormatEnum $format = null): FHIRCanonicalResource
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CANONICAL_RESOURCE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRCanonicalResource::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRCanonicalResource::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one CapabilityStatement resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRCapabilityStatement
     * @throws \Exception
     */
    public function readOneCapabilityStatement(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|string|ResponseFormatEnum $format = null): FHIRCapabilityStatement
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CAPABILITY_STATEMENT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRCapabilityStatement::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRCapabilityStatement::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one CarePlan resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCarePlan
     * @throws \Exception
     */
    public function readOneCarePlan(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|string|ResponseFormatEnum $format = null): FHIRCarePlan
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CARE_PLAN,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRCarePlan::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRCarePlan::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one CareTeam resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCareTeam
     * @throws \Exception
     */
    public function readOneCareTeam(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|string|ResponseFormatEnum $format = null): FHIRCareTeam
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CARE_TEAM,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRCareTeam::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRCareTeam::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ChargeItem resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRChargeItem
     * @throws \Exception
     */
    public function readOneChargeItem(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|string|ResponseFormatEnum $format = null): FHIRChargeItem
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CHARGE_ITEM,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRChargeItem::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRChargeItem::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ChargeItemDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRChargeItemDefinition
     * @throws \Exception
     */
    public function readOneChargeItemDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                null|string|ResponseFormatEnum $format = null): FHIRChargeItemDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CHARGE_ITEM_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRChargeItemDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRChargeItemDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Citation resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRCitation
     * @throws \Exception
     */
    public function readOneCitation(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|string|ResponseFormatEnum $format = null): FHIRCitation
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CITATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRCitation::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRCitation::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Claim resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRClaim
     * @throws \Exception
     */
    public function readOneClaim(string|FHIRId|FHIRIdPrimitive $resourceID,
                                 null|string|ResponseFormatEnum $format = null): FHIRClaim
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CLAIM,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRClaim::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRClaim::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ClaimResponse resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     * @throws \Exception
     */
    public function readOneClaimResponse(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|string|ResponseFormatEnum $format = null): FHIRClaimResponse
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CLAIM_RESPONSE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRClaimResponse::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRClaimResponse::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ClinicalImpression resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRClinicalImpression
     * @throws \Exception
     */
    public function readOneClinicalImpression(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|string|ResponseFormatEnum $format = null): FHIRClinicalImpression
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CLINICAL_IMPRESSION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRClinicalImpression::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRClinicalImpression::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ClinicalUseDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRClinicalUseDefinition
     * @throws \Exception
     */
    public function readOneClinicalUseDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                 null|string|ResponseFormatEnum $format = null): FHIRClinicalUseDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CLINICAL_USE_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRClinicalUseDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRClinicalUseDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one CodeSystem resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRCodeSystem
     * @throws \Exception
     */
    public function readOneCodeSystem(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|string|ResponseFormatEnum $format = null): FHIRCodeSystem
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CODE_SYSTEM,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRCodeSystem::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRCodeSystem::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Communication resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCommunication
     * @throws \Exception
     */
    public function readOneCommunication(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|string|ResponseFormatEnum $format = null): FHIRCommunication
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::COMMUNICATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRCommunication::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRCommunication::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one CommunicationRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCommunicationRequest
     * @throws \Exception
     */
    public function readOneCommunicationRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                null|string|ResponseFormatEnum $format = null): FHIRCommunicationRequest
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::COMMUNICATION_REQUEST,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRCommunicationRequest::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRCommunicationRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one CompartmentDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRCompartmentDefinition
     * @throws \Exception
     */
    public function readOneCompartmentDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                 null|string|ResponseFormatEnum $format = null): FHIRCompartmentDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::COMPARTMENT_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRCompartmentDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRCompartmentDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Composition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRComposition
     * @throws \Exception
     */
    public function readOneComposition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                       null|string|ResponseFormatEnum $format = null): FHIRComposition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::COMPOSITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRComposition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRComposition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ConceptMap resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRConceptMap
     * @throws \Exception
     */
    public function readOneConceptMap(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|string|ResponseFormatEnum $format = null): FHIRConceptMap
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CONCEPT_MAP,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRConceptMap::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRConceptMap::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Condition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCondition
     * @throws \Exception
     */
    public function readOneCondition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                     null|string|ResponseFormatEnum $format = null): FHIRCondition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CONDITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRCondition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRCondition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ConditionDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRConditionDefinition
     * @throws \Exception
     */
    public function readOneConditionDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|string|ResponseFormatEnum $format = null): FHIRConditionDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CONDITION_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRConditionDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRConditionDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Consent resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRConsent
     * @throws \Exception
     */
    public function readOneConsent(string|FHIRId|FHIRIdPrimitive $resourceID,
                                   null|string|ResponseFormatEnum $format = null): FHIRConsent
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CONSENT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRConsent::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRConsent::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Contract resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRContract
     * @throws \Exception
     */
    public function readOneContract(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|string|ResponseFormatEnum $format = null): FHIRContract
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CONTRACT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRContract::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRContract::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Coverage resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCoverage
     * @throws \Exception
     */
    public function readOneCoverage(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|string|ResponseFormatEnum $format = null): FHIRCoverage
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::COVERAGE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRCoverage::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRCoverage::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one CoverageEligibilityRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest
     * @throws \Exception
     */
    public function readOneCoverageEligibilityRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                      null|string|ResponseFormatEnum $format = null): FHIRCoverageEligibilityRequest
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::COVERAGE_ELIGIBILITY_REQUEST,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRCoverageEligibilityRequest::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRCoverageEligibilityRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one CoverageEligibilityResponse resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityResponse
     * @throws \Exception
     */
    public function readOneCoverageEligibilityResponse(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                       null|string|ResponseFormatEnum $format = null): FHIRCoverageEligibilityResponse
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::COVERAGE_ELIGIBILITY_RESPONSE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRCoverageEligibilityResponse::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRCoverageEligibilityResponse::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one DetectedIssue resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     * @throws \Exception
     */
    public function readOneDetectedIssue(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|string|ResponseFormatEnum $format = null): FHIRDetectedIssue
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::DETECTED_ISSUE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRDetectedIssue::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRDetectedIssue::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Device resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDevice
     * @throws \Exception
     */
    public function readOneDevice(string|FHIRId|FHIRIdPrimitive $resourceID,
                                  null|string|ResponseFormatEnum $format = null): FHIRDevice
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::DEVICE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRDevice::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRDevice::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one DeviceAssociation resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDeviceAssociation
     * @throws \Exception
     */
    public function readOneDeviceAssociation(string|FHIRId|FHIRIdPrimitive $resourceID,
                                             null|string|ResponseFormatEnum $format = null): FHIRDeviceAssociation
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::DEVICE_ASSOCIATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRDeviceAssociation::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRDeviceAssociation::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one DeviceDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDeviceDefinition
     * @throws \Exception
     */
    public function readOneDeviceDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|string|ResponseFormatEnum $format = null): FHIRDeviceDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::DEVICE_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRDeviceDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRDeviceDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one DeviceDispense resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDeviceDispense
     * @throws \Exception
     */
    public function readOneDeviceDispense(string|FHIRId|FHIRIdPrimitive $resourceID,
                                          null|string|ResponseFormatEnum $format = null): FHIRDeviceDispense
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::DEVICE_DISPENSE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRDeviceDispense::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRDeviceDispense::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one DeviceMetric resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDeviceMetric
     * @throws \Exception
     */
    public function readOneDeviceMetric(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|string|ResponseFormatEnum $format = null): FHIRDeviceMetric
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::DEVICE_METRIC,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRDeviceMetric::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRDeviceMetric::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one DeviceRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDeviceRequest
     * @throws \Exception
     */
    public function readOneDeviceRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|string|ResponseFormatEnum $format = null): FHIRDeviceRequest
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::DEVICE_REQUEST,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRDeviceRequest::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRDeviceRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one DeviceUsage resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDeviceUsage
     * @throws \Exception
     */
    public function readOneDeviceUsage(string|FHIRId|FHIRIdPrimitive $resourceID,
                                       null|string|ResponseFormatEnum $format = null): FHIRDeviceUsage
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::DEVICE_USAGE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRDeviceUsage::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRDeviceUsage::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one DiagnosticReport resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport
     * @throws \Exception
     */
    public function readOneDiagnosticReport(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|string|ResponseFormatEnum $format = null): FHIRDiagnosticReport
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::DIAGNOSTIC_REPORT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRDiagnosticReport::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRDiagnosticReport::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one DocumentReference resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDocumentReference
     * @throws \Exception
     */
    public function readOneDocumentReference(string|FHIRId|FHIRIdPrimitive $resourceID,
                                             null|string|ResponseFormatEnum $format = null): FHIRDocumentReference
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::DOCUMENT_REFERENCE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRDocumentReference::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRDocumentReference::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Encounter resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIREncounter
     * @throws \Exception
     */
    public function readOneEncounter(string|FHIRId|FHIRIdPrimitive $resourceID,
                                     null|string|ResponseFormatEnum $format = null): FHIREncounter
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ENCOUNTER,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIREncounter::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIREncounter::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one EncounterHistory resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIREncounterHistory
     * @throws \Exception
     */
    public function readOneEncounterHistory(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|string|ResponseFormatEnum $format = null): FHIREncounterHistory
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ENCOUNTER_HISTORY,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIREncounterHistory::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIREncounterHistory::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Endpoint resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIREndpoint
     * @throws \Exception
     */
    public function readOneEndpoint(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|string|ResponseFormatEnum $format = null): FHIREndpoint
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ENDPOINT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIREndpoint::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIREndpoint::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one EnrollmentRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIREnrollmentRequest
     * @throws \Exception
     */
    public function readOneEnrollmentRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                             null|string|ResponseFormatEnum $format = null): FHIREnrollmentRequest
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ENROLLMENT_REQUEST,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIREnrollmentRequest::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIREnrollmentRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one EnrollmentResponse resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIREnrollmentResponse
     * @throws \Exception
     */
    public function readOneEnrollmentResponse(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|string|ResponseFormatEnum $format = null): FHIREnrollmentResponse
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ENROLLMENT_RESPONSE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIREnrollmentResponse::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIREnrollmentResponse::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one EpisodeOfCare resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
     * @throws \Exception
     */
    public function readOneEpisodeOfCare(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|string|ResponseFormatEnum $format = null): FHIREpisodeOfCare
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::EPISODE_OF_CARE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIREpisodeOfCare::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIREpisodeOfCare::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one EventDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIREventDefinition
     * @throws \Exception
     */
    public function readOneEventDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|string|ResponseFormatEnum $format = null): FHIREventDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::EVENT_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIREventDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIREventDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Evidence resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIREvidence
     * @throws \Exception
     */
    public function readOneEvidence(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|string|ResponseFormatEnum $format = null): FHIREvidence
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::EVIDENCE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIREvidence::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIREvidence::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one EvidenceReport resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIREvidenceReport
     * @throws \Exception
     */
    public function readOneEvidenceReport(string|FHIRId|FHIRIdPrimitive $resourceID,
                                          null|string|ResponseFormatEnum $format = null): FHIREvidenceReport
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::EVIDENCE_REPORT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIREvidenceReport::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIREvidenceReport::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one EvidenceVariable resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIREvidenceVariable
     * @throws \Exception
     */
    public function readOneEvidenceVariable(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|string|ResponseFormatEnum $format = null): FHIREvidenceVariable
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::EVIDENCE_VARIABLE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIREvidenceVariable::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIREvidenceVariable::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ExampleScenario resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRExampleScenario
     * @throws \Exception
     */
    public function readOneExampleScenario(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|string|ResponseFormatEnum $format = null): FHIRExampleScenario
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::EXAMPLE_SCENARIO,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRExampleScenario::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRExampleScenario::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ExplanationOfBenefit resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit
     * @throws \Exception
     */
    public function readOneExplanationOfBenefit(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                null|string|ResponseFormatEnum $format = null): FHIRExplanationOfBenefit
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::EXPLANATION_OF_BENEFIT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRExplanationOfBenefit::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRExplanationOfBenefit::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one FamilyMemberHistory resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory
     * @throws \Exception
     */
    public function readOneFamilyMemberHistory(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|string|ResponseFormatEnum $format = null): FHIRFamilyMemberHistory
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::FAMILY_MEMBER_HISTORY,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRFamilyMemberHistory::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRFamilyMemberHistory::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Flag resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRFlag
     * @throws \Exception
     */
    public function readOneFlag(string|FHIRId|FHIRIdPrimitive $resourceID,
                                null|string|ResponseFormatEnum $format = null): FHIRFlag
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::FLAG,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRFlag::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRFlag::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one FormularyItem resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRFormularyItem
     * @throws \Exception
     */
    public function readOneFormularyItem(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|string|ResponseFormatEnum $format = null): FHIRFormularyItem
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::FORMULARY_ITEM,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRFormularyItem::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRFormularyItem::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one GenomicStudy resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRGenomicStudy
     * @throws \Exception
     */
    public function readOneGenomicStudy(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|string|ResponseFormatEnum $format = null): FHIRGenomicStudy
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::GENOMIC_STUDY,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRGenomicStudy::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRGenomicStudy::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Goal resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRGoal
     * @throws \Exception
     */
    public function readOneGoal(string|FHIRId|FHIRIdPrimitive $resourceID,
                                null|string|ResponseFormatEnum $format = null): FHIRGoal
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::GOAL,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRGoal::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRGoal::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one GraphDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRGraphDefinition
     * @throws \Exception
     */
    public function readOneGraphDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|string|ResponseFormatEnum $format = null): FHIRGraphDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::GRAPH_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRGraphDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRGraphDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Group resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRGroup
     * @throws \Exception
     */
    public function readOneGroup(string|FHIRId|FHIRIdPrimitive $resourceID,
                                 null|string|ResponseFormatEnum $format = null): FHIRGroup
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::GROUP,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRGroup::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRGroup::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one GuidanceResponse resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRGuidanceResponse
     * @throws \Exception
     */
    public function readOneGuidanceResponse(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|string|ResponseFormatEnum $format = null): FHIRGuidanceResponse
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::GUIDANCE_RESPONSE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRGuidanceResponse::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRGuidanceResponse::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one HealthcareService resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     * @throws \Exception
     */
    public function readOneHealthcareService(string|FHIRId|FHIRIdPrimitive $resourceID,
                                             null|string|ResponseFormatEnum $format = null): FHIRHealthcareService
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::HEALTHCARE_SERVICE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRHealthcareService::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRHealthcareService::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ImagingSelection resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRImagingSelection
     * @throws \Exception
     */
    public function readOneImagingSelection(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|string|ResponseFormatEnum $format = null): FHIRImagingSelection
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::IMAGING_SELECTION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRImagingSelection::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRImagingSelection::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ImagingStudy resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRImagingStudy
     * @throws \Exception
     */
    public function readOneImagingStudy(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|string|ResponseFormatEnum $format = null): FHIRImagingStudy
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::IMAGING_STUDY,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRImagingStudy::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRImagingStudy::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Immunization resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRImmunization
     * @throws \Exception
     */
    public function readOneImmunization(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|string|ResponseFormatEnum $format = null): FHIRImmunization
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::IMMUNIZATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRImmunization::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRImmunization::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ImmunizationEvaluation resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRImmunizationEvaluation
     * @throws \Exception
     */
    public function readOneImmunizationEvaluation(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                  null|string|ResponseFormatEnum $format = null): FHIRImmunizationEvaluation
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::IMMUNIZATION_EVALUATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRImmunizationEvaluation::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRImmunizationEvaluation::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ImmunizationRecommendation resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRImmunizationRecommendation
     * @throws \Exception
     */
    public function readOneImmunizationRecommendation(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                      null|string|ResponseFormatEnum $format = null): FHIRImmunizationRecommendation
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::IMMUNIZATION_RECOMMENDATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRImmunizationRecommendation::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRImmunizationRecommendation::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ImplementationGuide resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRImplementationGuide
     * @throws \Exception
     */
    public function readOneImplementationGuide(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|string|ResponseFormatEnum $format = null): FHIRImplementationGuide
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::IMPLEMENTATION_GUIDE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRImplementationGuide::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRImplementationGuide::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Ingredient resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRIngredient
     * @throws \Exception
     */
    public function readOneIngredient(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|string|ResponseFormatEnum $format = null): FHIRIngredient
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::INGREDIENT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRIngredient::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRIngredient::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one InsurancePlan resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRInsurancePlan
     * @throws \Exception
     */
    public function readOneInsurancePlan(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|string|ResponseFormatEnum $format = null): FHIRInsurancePlan
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::INSURANCE_PLAN,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRInsurancePlan::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRInsurancePlan::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one InventoryItem resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRInventoryItem
     * @throws \Exception
     */
    public function readOneInventoryItem(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|string|ResponseFormatEnum $format = null): FHIRInventoryItem
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::INVENTORY_ITEM,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRInventoryItem::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRInventoryItem::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one InventoryReport resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRInventoryReport
     * @throws \Exception
     */
    public function readOneInventoryReport(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|string|ResponseFormatEnum $format = null): FHIRInventoryReport
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::INVENTORY_REPORT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRInventoryReport::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRInventoryReport::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Invoice resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRInvoice
     * @throws \Exception
     */
    public function readOneInvoice(string|FHIRId|FHIRIdPrimitive $resourceID,
                                   null|string|ResponseFormatEnum $format = null): FHIRInvoice
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::INVOICE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRInvoice::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRInvoice::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Library resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRLibrary
     * @throws \Exception
     */
    public function readOneLibrary(string|FHIRId|FHIRIdPrimitive $resourceID,
                                   null|string|ResponseFormatEnum $format = null): FHIRLibrary
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::LIBRARY,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRLibrary::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRLibrary::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Linkage resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRLinkage
     * @throws \Exception
     */
    public function readOneLinkage(string|FHIRId|FHIRIdPrimitive $resourceID,
                                   null|string|ResponseFormatEnum $format = null): FHIRLinkage
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::LINKAGE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRLinkage::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRLinkage::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one List resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRList
     * @throws \Exception
     */
    public function readOneList(string|FHIRId|FHIRIdPrimitive $resourceID,
                                null|string|ResponseFormatEnum $format = null): FHIRList
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::LIST,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRList::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRList::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Location resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRLocation
     * @throws \Exception
     */
    public function readOneLocation(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|string|ResponseFormatEnum $format = null): FHIRLocation
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::LOCATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRLocation::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRLocation::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ManufacturedItemDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRManufacturedItemDefinition
     * @throws \Exception
     */
    public function readOneManufacturedItemDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                      null|string|ResponseFormatEnum $format = null): FHIRManufacturedItemDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MANUFACTURED_ITEM_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRManufacturedItemDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRManufacturedItemDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Measure resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRMeasure
     * @throws \Exception
     */
    public function readOneMeasure(string|FHIRId|FHIRIdPrimitive $resourceID,
                                   null|string|ResponseFormatEnum $format = null): FHIRMeasure
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEASURE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMeasure::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMeasure::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MeasureReport resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMeasureReport
     * @throws \Exception
     */
    public function readOneMeasureReport(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|string|ResponseFormatEnum $format = null): FHIRMeasureReport
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEASURE_REPORT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMeasureReport::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMeasureReport::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Medication resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMedication
     * @throws \Exception
     */
    public function readOneMedication(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|string|ResponseFormatEnum $format = null): FHIRMedication
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEDICATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMedication::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMedication::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MedicationAdministration resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
     * @throws \Exception
     */
    public function readOneMedicationAdministration(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                    null|string|ResponseFormatEnum $format = null): FHIRMedicationAdministration
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEDICATION_ADMINISTRATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMedicationAdministration::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMedicationAdministration::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MedicationDispense resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     * @throws \Exception
     */
    public function readOneMedicationDispense(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|string|ResponseFormatEnum $format = null): FHIRMedicationDispense
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEDICATION_DISPENSE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMedicationDispense::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMedicationDispense::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MedicationKnowledge resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRMedicationKnowledge
     * @throws \Exception
     */
    public function readOneMedicationKnowledge(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|string|ResponseFormatEnum $format = null): FHIRMedicationKnowledge
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEDICATION_KNOWLEDGE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMedicationKnowledge::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMedicationKnowledge::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MedicationRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMedicationRequest
     * @throws \Exception
     */
    public function readOneMedicationRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                             null|string|ResponseFormatEnum $format = null): FHIRMedicationRequest
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEDICATION_REQUEST,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMedicationRequest::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMedicationRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MedicationStatement resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMedicationStatement
     * @throws \Exception
     */
    public function readOneMedicationStatement(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|string|ResponseFormatEnum $format = null): FHIRMedicationStatement
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEDICATION_STATEMENT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMedicationStatement::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMedicationStatement::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MedicinalProductDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDefinition
     * @throws \Exception
     */
    public function readOneMedicinalProductDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                      null|string|ResponseFormatEnum $format = null): FHIRMedicinalProductDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEDICINAL_PRODUCT_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMedicinalProductDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMedicinalProductDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MessageDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMessageDefinition
     * @throws \Exception
     */
    public function readOneMessageDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                             null|string|ResponseFormatEnum $format = null): FHIRMessageDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MESSAGE_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMessageDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMessageDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MessageHeader resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMessageHeader
     * @throws \Exception
     */
    public function readOneMessageHeader(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|string|ResponseFormatEnum $format = null): FHIRMessageHeader
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MESSAGE_HEADER,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMessageHeader::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMessageHeader::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MetadataResource resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource
     * @throws \Exception
     */
    public function readOneMetadataResource(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|string|ResponseFormatEnum $format = null): FHIRMetadataResource
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::METADATA_RESOURCE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMetadataResource::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMetadataResource::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MolecularSequence resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMolecularSequence
     * @throws \Exception
     */
    public function readOneMolecularSequence(string|FHIRId|FHIRIdPrimitive $resourceID,
                                             null|string|ResponseFormatEnum $format = null): FHIRMolecularSequence
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MOLECULAR_SEQUENCE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMolecularSequence::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMolecularSequence::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one NamingSystem resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRNamingSystem
     * @throws \Exception
     */
    public function readOneNamingSystem(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|string|ResponseFormatEnum $format = null): FHIRNamingSystem
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::NAMING_SYSTEM,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRNamingSystem::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRNamingSystem::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one NutritionIntake resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRNutritionIntake
     * @throws \Exception
     */
    public function readOneNutritionIntake(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|string|ResponseFormatEnum $format = null): FHIRNutritionIntake
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::NUTRITION_INTAKE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRNutritionIntake::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRNutritionIntake::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one NutritionOrder resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRNutritionOrder
     * @throws \Exception
     */
    public function readOneNutritionOrder(string|FHIRId|FHIRIdPrimitive $resourceID,
                                          null|string|ResponseFormatEnum $format = null): FHIRNutritionOrder
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::NUTRITION_ORDER,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRNutritionOrder::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRNutritionOrder::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one NutritionProduct resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRNutritionProduct
     * @throws \Exception
     */
    public function readOneNutritionProduct(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|string|ResponseFormatEnum $format = null): FHIRNutritionProduct
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::NUTRITION_PRODUCT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRNutritionProduct::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRNutritionProduct::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Observation resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRObservation
     * @throws \Exception
     */
    public function readOneObservation(string|FHIRId|FHIRIdPrimitive $resourceID,
                                       null|string|ResponseFormatEnum $format = null): FHIRObservation
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::OBSERVATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRObservation::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRObservation::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ObservationDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRObservationDefinition
     * @throws \Exception
     */
    public function readOneObservationDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                 null|string|ResponseFormatEnum $format = null): FHIRObservationDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::OBSERVATION_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRObservationDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRObservationDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one OperationDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIROperationDefinition
     * @throws \Exception
     */
    public function readOneOperationDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|string|ResponseFormatEnum $format = null): FHIROperationDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::OPERATION_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIROperationDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIROperationDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one OperationOutcome resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIROperationOutcome
     * @throws \Exception
     */
    public function readOneOperationOutcome(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|string|ResponseFormatEnum $format = null): FHIROperationOutcome
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::OPERATION_OUTCOME,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIROperationOutcome::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIROperationOutcome::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Organization resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIROrganization
     * @throws \Exception
     */
    public function readOneOrganization(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|string|ResponseFormatEnum $format = null): FHIROrganization
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ORGANIZATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIROrganization::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIROrganization::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one OrganizationAffiliation resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIROrganizationAffiliation
     * @throws \Exception
     */
    public function readOneOrganizationAffiliation(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                   null|string|ResponseFormatEnum $format = null): FHIROrganizationAffiliation
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ORGANIZATION_AFFILIATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIROrganizationAffiliation::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIROrganizationAffiliation::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one PackagedProductDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPackagedProductDefinition
     * @throws \Exception
     */
    public function readOnePackagedProductDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                     null|string|ResponseFormatEnum $format = null): FHIRPackagedProductDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::PACKAGED_PRODUCT_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRPackagedProductDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRPackagedProductDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Patient resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPatient
     * @throws \Exception
     */
    public function readOnePatient(string|FHIRId|FHIRIdPrimitive $resourceID,
                                   null|string|ResponseFormatEnum $format = null): FHIRPatient
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::PATIENT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRPatient::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRPatient::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one PaymentNotice resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPaymentNotice
     * @throws \Exception
     */
    public function readOnePaymentNotice(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|string|ResponseFormatEnum $format = null): FHIRPaymentNotice
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::PAYMENT_NOTICE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRPaymentNotice::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRPaymentNotice::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one PaymentReconciliation resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation
     * @throws \Exception
     */
    public function readOnePaymentReconciliation(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                 null|string|ResponseFormatEnum $format = null): FHIRPaymentReconciliation
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::PAYMENT_RECONCILIATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRPaymentReconciliation::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRPaymentReconciliation::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Permission resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPermission
     * @throws \Exception
     */
    public function readOnePermission(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|string|ResponseFormatEnum $format = null): FHIRPermission
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::PERMISSION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRPermission::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRPermission::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Person resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPerson
     * @throws \Exception
     */
    public function readOnePerson(string|FHIRId|FHIRIdPrimitive $resourceID,
                                  null|string|ResponseFormatEnum $format = null): FHIRPerson
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::PERSON,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRPerson::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRPerson::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one PlanDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRPlanDefinition
     * @throws \Exception
     */
    public function readOnePlanDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                          null|string|ResponseFormatEnum $format = null): FHIRPlanDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::PLAN_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRPlanDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRPlanDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Practitioner resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPractitioner
     * @throws \Exception
     */
    public function readOnePractitioner(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|string|ResponseFormatEnum $format = null): FHIRPractitioner
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::PRACTITIONER,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRPractitioner::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRPractitioner::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one PractitionerRole resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPractitionerRole
     * @throws \Exception
     */
    public function readOnePractitionerRole(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|string|ResponseFormatEnum $format = null): FHIRPractitionerRole
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::PRACTITIONER_ROLE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRPractitionerRole::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRPractitionerRole::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Procedure resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRProcedure
     * @throws \Exception
     */
    public function readOneProcedure(string|FHIRId|FHIRIdPrimitive $resourceID,
                                     null|string|ResponseFormatEnum $format = null): FHIRProcedure
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::PROCEDURE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRProcedure::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRProcedure::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Provenance resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRProvenance
     * @throws \Exception
     */
    public function readOneProvenance(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|string|ResponseFormatEnum $format = null): FHIRProvenance
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::PROVENANCE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRProvenance::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRProvenance::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Questionnaire resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRQuestionnaire
     * @throws \Exception
     */
    public function readOneQuestionnaire(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|string|ResponseFormatEnum $format = null): FHIRQuestionnaire
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::QUESTIONNAIRE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRQuestionnaire::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRQuestionnaire::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one QuestionnaireResponse resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRQuestionnaireResponse
     * @throws \Exception
     */
    public function readOneQuestionnaireResponse(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                 null|string|ResponseFormatEnum $format = null): FHIRQuestionnaireResponse
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::QUESTIONNAIRE_RESPONSE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRQuestionnaireResponse::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRQuestionnaireResponse::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one RegulatedAuthorization resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRRegulatedAuthorization
     * @throws \Exception
     */
    public function readOneRegulatedAuthorization(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                  null|string|ResponseFormatEnum $format = null): FHIRRegulatedAuthorization
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::REGULATED_AUTHORIZATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRRegulatedAuthorization::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRRegulatedAuthorization::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one RelatedPerson resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRRelatedPerson
     * @throws \Exception
     */
    public function readOneRelatedPerson(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|string|ResponseFormatEnum $format = null): FHIRRelatedPerson
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::RELATED_PERSON,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRRelatedPerson::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRRelatedPerson::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one RequestOrchestration resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRRequestOrchestration
     * @throws \Exception
     */
    public function readOneRequestOrchestration(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                null|string|ResponseFormatEnum $format = null): FHIRRequestOrchestration
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::REQUEST_ORCHESTRATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRRequestOrchestration::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRRequestOrchestration::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Requirements resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRRequirements
     * @throws \Exception
     */
    public function readOneRequirements(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|string|ResponseFormatEnum $format = null): FHIRRequirements
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::REQUIREMENTS,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRRequirements::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRRequirements::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ResearchStudy resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     * @throws \Exception
     */
    public function readOneResearchStudy(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|string|ResponseFormatEnum $format = null): FHIRResearchStudy
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::RESEARCH_STUDY,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRResearchStudy::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRResearchStudy::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ResearchSubject resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRResearchSubject
     * @throws \Exception
     */
    public function readOneResearchSubject(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|string|ResponseFormatEnum $format = null): FHIRResearchSubject
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::RESEARCH_SUBJECT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRResearchSubject::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRResearchSubject::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one RiskAssessment resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRRiskAssessment
     * @throws \Exception
     */
    public function readOneRiskAssessment(string|FHIRId|FHIRIdPrimitive $resourceID,
                                          null|string|ResponseFormatEnum $format = null): FHIRRiskAssessment
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::RISK_ASSESSMENT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRRiskAssessment::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRRiskAssessment::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Schedule resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSchedule
     * @throws \Exception
     */
    public function readOneSchedule(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|string|ResponseFormatEnum $format = null): FHIRSchedule
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SCHEDULE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSchedule::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSchedule::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one SearchParameter resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRSearchParameter
     * @throws \Exception
     */
    public function readOneSearchParameter(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|string|ResponseFormatEnum $format = null): FHIRSearchParameter
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SEARCH_PARAMETER,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSearchParameter::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSearchParameter::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ServiceRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRServiceRequest
     * @throws \Exception
     */
    public function readOneServiceRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                          null|string|ResponseFormatEnum $format = null): FHIRServiceRequest
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SERVICE_REQUEST,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRServiceRequest::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRServiceRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Slot resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSlot
     * @throws \Exception
     */
    public function readOneSlot(string|FHIRId|FHIRIdPrimitive $resourceID,
                                null|string|ResponseFormatEnum $format = null): FHIRSlot
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SLOT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSlot::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSlot::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Specimen resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSpecimen
     * @throws \Exception
     */
    public function readOneSpecimen(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|string|ResponseFormatEnum $format = null): FHIRSpecimen
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SPECIMEN,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSpecimen::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSpecimen::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one SpecimenDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRSpecimenDefinition
     * @throws \Exception
     */
    public function readOneSpecimenDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|string|ResponseFormatEnum $format = null): FHIRSpecimenDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SPECIMEN_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSpecimenDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSpecimenDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one StructureDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRStructureDefinition
     * @throws \Exception
     */
    public function readOneStructureDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|string|ResponseFormatEnum $format = null): FHIRStructureDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::STRUCTURE_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRStructureDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRStructureDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one StructureMap resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRStructureMap
     * @throws \Exception
     */
    public function readOneStructureMap(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|string|ResponseFormatEnum $format = null): FHIRStructureMap
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::STRUCTURE_MAP,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRStructureMap::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRStructureMap::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Subscription resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubscription
     * @throws \Exception
     */
    public function readOneSubscription(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|string|ResponseFormatEnum $format = null): FHIRSubscription
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SUBSCRIPTION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSubscription::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSubscription::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one SubscriptionStatus resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubscriptionStatus
     * @throws \Exception
     */
    public function readOneSubscriptionStatus(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|string|ResponseFormatEnum $format = null): FHIRSubscriptionStatus
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SUBSCRIPTION_STATUS,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSubscriptionStatus::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSubscriptionStatus::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one SubscriptionTopic resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRSubscriptionTopic
     * @throws \Exception
     */
    public function readOneSubscriptionTopic(string|FHIRId|FHIRIdPrimitive $resourceID,
                                             null|string|ResponseFormatEnum $format = null): FHIRSubscriptionTopic
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SUBSCRIPTION_TOPIC,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSubscriptionTopic::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSubscriptionTopic::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Substance resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubstance
     * @throws \Exception
     */
    public function readOneSubstance(string|FHIRId|FHIRIdPrimitive $resourceID,
                                     null|string|ResponseFormatEnum $format = null): FHIRSubstance
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SUBSTANCE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSubstance::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSubstance::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one SubstanceDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubstanceDefinition
     * @throws \Exception
     */
    public function readOneSubstanceDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|string|ResponseFormatEnum $format = null): FHIRSubstanceDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SUBSTANCE_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSubstanceDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSubstanceDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one SubstanceNucleicAcid resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubstanceNucleicAcid
     * @throws \Exception
     */
    public function readOneSubstanceNucleicAcid(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                null|string|ResponseFormatEnum $format = null): FHIRSubstanceNucleicAcid
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SUBSTANCE_NUCLEIC_ACID,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSubstanceNucleicAcid::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSubstanceNucleicAcid::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one SubstancePolymer resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubstancePolymer
     * @throws \Exception
     */
    public function readOneSubstancePolymer(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|string|ResponseFormatEnum $format = null): FHIRSubstancePolymer
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SUBSTANCE_POLYMER,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSubstancePolymer::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSubstancePolymer::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one SubstanceProtein resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubstanceProtein
     * @throws \Exception
     */
    public function readOneSubstanceProtein(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|string|ResponseFormatEnum $format = null): FHIRSubstanceProtein
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SUBSTANCE_PROTEIN,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSubstanceProtein::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSubstanceProtein::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one SubstanceReferenceInformation resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubstanceReferenceInformation
     * @throws \Exception
     */
    public function readOneSubstanceReferenceInformation(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                         null|string|ResponseFormatEnum $format = null): FHIRSubstanceReferenceInformation
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SUBSTANCE_REFERENCE_INFORMATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSubstanceReferenceInformation::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSubstanceReferenceInformation::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one SubstanceSourceMaterial resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubstanceSourceMaterial
     * @throws \Exception
     */
    public function readOneSubstanceSourceMaterial(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                   null|string|ResponseFormatEnum $format = null): FHIRSubstanceSourceMaterial
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SUBSTANCE_SOURCE_MATERIAL,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSubstanceSourceMaterial::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSubstanceSourceMaterial::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one SupplyDelivery resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery
     * @throws \Exception
     */
    public function readOneSupplyDelivery(string|FHIRId|FHIRIdPrimitive $resourceID,
                                          null|string|ResponseFormatEnum $format = null): FHIRSupplyDelivery
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SUPPLY_DELIVERY,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSupplyDelivery::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSupplyDelivery::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one SupplyRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSupplyRequest
     * @throws \Exception
     */
    public function readOneSupplyRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|string|ResponseFormatEnum $format = null): FHIRSupplyRequest
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SUPPLY_REQUEST,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSupplyRequest::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSupplyRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Task resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRTask
     * @throws \Exception
     */
    public function readOneTask(string|FHIRId|FHIRIdPrimitive $resourceID,
                                null|string|ResponseFormatEnum $format = null): FHIRTask
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::TASK,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRTask::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRTask::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one TerminologyCapabilities resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRTerminologyCapabilities
     * @throws \Exception
     */
    public function readOneTerminologyCapabilities(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                   null|string|ResponseFormatEnum $format = null): FHIRTerminologyCapabilities
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::TERMINOLOGY_CAPABILITIES,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRTerminologyCapabilities::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRTerminologyCapabilities::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one TestPlan resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRTestPlan
     * @throws \Exception
     */
    public function readOneTestPlan(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|string|ResponseFormatEnum $format = null): FHIRTestPlan
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::TEST_PLAN,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRTestPlan::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRTestPlan::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one TestReport resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRTestReport
     * @throws \Exception
     */
    public function readOneTestReport(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|string|ResponseFormatEnum $format = null): FHIRTestReport
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::TEST_REPORT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRTestReport::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRTestReport::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one TestScript resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRTestScript
     * @throws \Exception
     */
    public function readOneTestScript(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|string|ResponseFormatEnum $format = null): FHIRTestScript
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::TEST_SCRIPT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRTestScript::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRTestScript::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Transport resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRTransport
     * @throws \Exception
     */
    public function readOneTransport(string|FHIRId|FHIRIdPrimitive $resourceID,
                                     null|string|ResponseFormatEnum $format = null): FHIRTransport
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::TRANSPORT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRTransport::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRTransport::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ValueSet resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRValueSet
     * @throws \Exception
     */
    public function readOneValueSet(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|string|ResponseFormatEnum $format = null): FHIRValueSet
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::VALUE_SET,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRValueSet::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRValueSet::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one VerificationResult resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRVerificationResult
     * @throws \Exception
     */
    public function readOneVerificationResult(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|string|ResponseFormatEnum $format = null): FHIRVerificationResult
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::VERIFICATION_RESULT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRVerificationResult::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRVerificationResult::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one VisionPrescription resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRVisionPrescription
     * @throws \Exception
     */
    public function readOneVisionPrescription(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|string|ResponseFormatEnum $format = null): FHIRVisionPrescription
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::VISION_PRESCRIPTION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRVisionPrescription::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRVisionPrescription::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResponseParser::parse($this->_version, $rc->resp),
        };
    }

}
