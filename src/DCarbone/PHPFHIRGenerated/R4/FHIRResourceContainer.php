<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R4;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 10th, 2024 03:24+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRBinary;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRBundle;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAccount;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRActivityDefinition;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAdverseEvent;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAppointment;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAuditEvent;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBasic;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBodyStructure;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCarePlan;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCareTeam;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCatalogEntry;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRClaim;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRClaimResponse;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRClinicalImpression;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCodeSystem;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCommunication;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCommunicationRequest;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCompartmentDefinition;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRComposition;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRConceptMap;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCondition;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRConsent;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRContract;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityResponse;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDetectedIssue;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDevice;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDeviceDefinition;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDeviceMetric;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDeviceRequest;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDeviceUseStatement;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentManifest;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREffectEvidenceSynthesis;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREncounter;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREndpoint;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREnrollmentRequest;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREnrollmentResponse;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREventDefinition;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREvidence;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREvidenceVariable;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRExampleScenario;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRFlag;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRGoal;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRGraphDefinition;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRGroup;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRGuidanceResponse;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRImagingStudy;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRImmunization;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRImmunizationEvaluation;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRImmunizationRecommendation;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRImplementationGuide;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRInsurancePlan;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRInvoice;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLibrary;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLinkage;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRList;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMeasure;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMeasureReport;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedia;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedication;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationKnowledge;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationRequest;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationStatement;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductContraindication;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductIndication;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductIngredient;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductInteraction;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductManufactured;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductPackaged;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductPharmaceutical;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductUndesirableEffect;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMessageDefinition;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMessageHeader;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMolecularSequence;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRNamingSystem;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRNutritionOrder;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRObservation;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRObservationDefinition;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIROperationDefinition;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIROperationOutcome;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIROrganization;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIROrganizationAffiliation;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPatient;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPaymentNotice;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPerson;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPractitioner;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPractitionerRole;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRProcedure;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRProvenance;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRQuestionnaire;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRQuestionnaireResponse;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRRelatedPerson;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRRequestGroup;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRResearchDefinition;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRResearchElementDefinition;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRResearchStudy;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRResearchSubject;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRRiskAssessment;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRRiskEvidenceSynthesis;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSchedule;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSearchParameter;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRServiceRequest;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSlot;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimen;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimenDefinition;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRStructureDefinition;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRStructureMap;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubscription;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstance;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceNucleicAcid;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstancePolymer;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceProtein;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceReferenceInformation;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSourceMaterial;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSupplyRequest;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRTask;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRTerminologyCapabilities;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRTestReport;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRTestScript;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRValueSet;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVisionPrescription;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRParameters;

/**
 * Class FHIRResourceContainer
 * @package \DCarbone\PHPFHIRGenerated\R4
 */
class FHIRResourceContainer implements PHPFHIRCommentContainerInterface, PHPFHIRTypeInterface
{
    use PHPFHIRCommentContainerTrait;
    use PHPFHIRValidationAssertionsTrait;
    use PHPFHIRChangeTrackingTrait;
    use PHPFHIRSourceXmlNamespaceTrait;

    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_RESOURCE_CONTAINER;

    const FIELD_ACCOUNT = 'Account';
    const FIELD_ACTIVITY_DEFINITION = 'ActivityDefinition';
    const FIELD_ADVERSE_EVENT = 'AdverseEvent';
    const FIELD_ALLERGY_INTOLERANCE = 'AllergyIntolerance';
    const FIELD_APPOINTMENT = 'Appointment';
    const FIELD_APPOINTMENT_RESPONSE = 'AppointmentResponse';
    const FIELD_AUDIT_EVENT = 'AuditEvent';
    const FIELD_BASIC = 'Basic';
    const FIELD_BINARY = 'Binary';
    const FIELD_BIOLOGICALLY_DERIVED_PRODUCT = 'BiologicallyDerivedProduct';
    const FIELD_BODY_STRUCTURE = 'BodyStructure';
    const FIELD_BUNDLE = 'Bundle';
    const FIELD_CAPABILITY_STATEMENT = 'CapabilityStatement';
    const FIELD_CARE_PLAN = 'CarePlan';
    const FIELD_CARE_TEAM = 'CareTeam';
    const FIELD_CATALOG_ENTRY = 'CatalogEntry';
    const FIELD_CHARGE_ITEM = 'ChargeItem';
    const FIELD_CHARGE_ITEM_DEFINITION = 'ChargeItemDefinition';
    const FIELD_CLAIM = 'Claim';
    const FIELD_CLAIM_RESPONSE = 'ClaimResponse';
    const FIELD_CLINICAL_IMPRESSION = 'ClinicalImpression';
    const FIELD_CODE_SYSTEM = 'CodeSystem';
    const FIELD_COMMUNICATION = 'Communication';
    const FIELD_COMMUNICATION_REQUEST = 'CommunicationRequest';
    const FIELD_COMPARTMENT_DEFINITION = 'CompartmentDefinition';
    const FIELD_COMPOSITION = 'Composition';
    const FIELD_CONCEPT_MAP = 'ConceptMap';
    const FIELD_CONDITION = 'Condition';
    const FIELD_CONSENT = 'Consent';
    const FIELD_CONTRACT = 'Contract';
    const FIELD_COVERAGE = 'Coverage';
    const FIELD_COVERAGE_ELIGIBILITY_REQUEST = 'CoverageEligibilityRequest';
    const FIELD_COVERAGE_ELIGIBILITY_RESPONSE = 'CoverageEligibilityResponse';
    const FIELD_DETECTED_ISSUE = 'DetectedIssue';
    const FIELD_DEVICE = 'Device';
    const FIELD_DEVICE_DEFINITION = 'DeviceDefinition';
    const FIELD_DEVICE_METRIC = 'DeviceMetric';
    const FIELD_DEVICE_REQUEST = 'DeviceRequest';
    const FIELD_DEVICE_USE_STATEMENT = 'DeviceUseStatement';
    const FIELD_DIAGNOSTIC_REPORT = 'DiagnosticReport';
    const FIELD_DOCUMENT_MANIFEST = 'DocumentManifest';
    const FIELD_DOCUMENT_REFERENCE = 'DocumentReference';
    const FIELD_EFFECT_EVIDENCE_SYNTHESIS = 'EffectEvidenceSynthesis';
    const FIELD_ENCOUNTER = 'Encounter';
    const FIELD_ENDPOINT = 'Endpoint';
    const FIELD_ENROLLMENT_REQUEST = 'EnrollmentRequest';
    const FIELD_ENROLLMENT_RESPONSE = 'EnrollmentResponse';
    const FIELD_EPISODE_OF_CARE = 'EpisodeOfCare';
    const FIELD_EVENT_DEFINITION = 'EventDefinition';
    const FIELD_EVIDENCE = 'Evidence';
    const FIELD_EVIDENCE_VARIABLE = 'EvidenceVariable';
    const FIELD_EXAMPLE_SCENARIO = 'ExampleScenario';
    const FIELD_EXPLANATION_OF_BENEFIT = 'ExplanationOfBenefit';
    const FIELD_FAMILY_MEMBER_HISTORY = 'FamilyMemberHistory';
    const FIELD_FLAG = 'Flag';
    const FIELD_GOAL = 'Goal';
    const FIELD_GRAPH_DEFINITION = 'GraphDefinition';
    const FIELD_GROUP = 'Group';
    const FIELD_GUIDANCE_RESPONSE = 'GuidanceResponse';
    const FIELD_HEALTHCARE_SERVICE = 'HealthcareService';
    const FIELD_IMAGING_STUDY = 'ImagingStudy';
    const FIELD_IMMUNIZATION = 'Immunization';
    const FIELD_IMMUNIZATION_EVALUATION = 'ImmunizationEvaluation';
    const FIELD_IMMUNIZATION_RECOMMENDATION = 'ImmunizationRecommendation';
    const FIELD_IMPLEMENTATION_GUIDE = 'ImplementationGuide';
    const FIELD_INSURANCE_PLAN = 'InsurancePlan';
    const FIELD_INVOICE = 'Invoice';
    const FIELD_LIBRARY = 'Library';
    const FIELD_LINKAGE = 'Linkage';
    const FIELD_LIST = 'List';
    const FIELD_LOCATION = 'Location';
    const FIELD_MEASURE = 'Measure';
    const FIELD_MEASURE_REPORT = 'MeasureReport';
    const FIELD_MEDIA = 'Media';
    const FIELD_MEDICATION = 'Medication';
    const FIELD_MEDICATION_ADMINISTRATION = 'MedicationAdministration';
    const FIELD_MEDICATION_DISPENSE = 'MedicationDispense';
    const FIELD_MEDICATION_KNOWLEDGE = 'MedicationKnowledge';
    const FIELD_MEDICATION_REQUEST = 'MedicationRequest';
    const FIELD_MEDICATION_STATEMENT = 'MedicationStatement';
    const FIELD_MEDICINAL_PRODUCT = 'MedicinalProduct';
    const FIELD_MEDICINAL_PRODUCT_AUTHORIZATION = 'MedicinalProductAuthorization';
    const FIELD_MEDICINAL_PRODUCT_CONTRAINDICATION = 'MedicinalProductContraindication';
    const FIELD_MEDICINAL_PRODUCT_INDICATION = 'MedicinalProductIndication';
    const FIELD_MEDICINAL_PRODUCT_INGREDIENT = 'MedicinalProductIngredient';
    const FIELD_MEDICINAL_PRODUCT_INTERACTION = 'MedicinalProductInteraction';
    const FIELD_MEDICINAL_PRODUCT_MANUFACTURED = 'MedicinalProductManufactured';
    const FIELD_MEDICINAL_PRODUCT_PACKAGED = 'MedicinalProductPackaged';
    const FIELD_MEDICINAL_PRODUCT_PHARMACEUTICAL = 'MedicinalProductPharmaceutical';
    const FIELD_MEDICINAL_PRODUCT_UNDESIRABLE_EFFECT = 'MedicinalProductUndesirableEffect';
    const FIELD_MESSAGE_DEFINITION = 'MessageDefinition';
    const FIELD_MESSAGE_HEADER = 'MessageHeader';
    const FIELD_MOLECULAR_SEQUENCE = 'MolecularSequence';
    const FIELD_NAMING_SYSTEM = 'NamingSystem';
    const FIELD_NUTRITION_ORDER = 'NutritionOrder';
    const FIELD_OBSERVATION = 'Observation';
    const FIELD_OBSERVATION_DEFINITION = 'ObservationDefinition';
    const FIELD_OPERATION_DEFINITION = 'OperationDefinition';
    const FIELD_OPERATION_OUTCOME = 'OperationOutcome';
    const FIELD_ORGANIZATION = 'Organization';
    const FIELD_ORGANIZATION_AFFILIATION = 'OrganizationAffiliation';
    const FIELD_PATIENT = 'Patient';
    const FIELD_PAYMENT_NOTICE = 'PaymentNotice';
    const FIELD_PAYMENT_RECONCILIATION = 'PaymentReconciliation';
    const FIELD_PERSON = 'Person';
    const FIELD_PLAN_DEFINITION = 'PlanDefinition';
    const FIELD_PRACTITIONER = 'Practitioner';
    const FIELD_PRACTITIONER_ROLE = 'PractitionerRole';
    const FIELD_PROCEDURE = 'Procedure';
    const FIELD_PROVENANCE = 'Provenance';
    const FIELD_QUESTIONNAIRE = 'Questionnaire';
    const FIELD_QUESTIONNAIRE_RESPONSE = 'QuestionnaireResponse';
    const FIELD_RELATED_PERSON = 'RelatedPerson';
    const FIELD_REQUEST_GROUP = 'RequestGroup';
    const FIELD_RESEARCH_DEFINITION = 'ResearchDefinition';
    const FIELD_RESEARCH_ELEMENT_DEFINITION = 'ResearchElementDefinition';
    const FIELD_RESEARCH_STUDY = 'ResearchStudy';
    const FIELD_RESEARCH_SUBJECT = 'ResearchSubject';
    const FIELD_RISK_ASSESSMENT = 'RiskAssessment';
    const FIELD_RISK_EVIDENCE_SYNTHESIS = 'RiskEvidenceSynthesis';
    const FIELD_SCHEDULE = 'Schedule';
    const FIELD_SEARCH_PARAMETER = 'SearchParameter';
    const FIELD_SERVICE_REQUEST = 'ServiceRequest';
    const FIELD_SLOT = 'Slot';
    const FIELD_SPECIMEN = 'Specimen';
    const FIELD_SPECIMEN_DEFINITION = 'SpecimenDefinition';
    const FIELD_STRUCTURE_DEFINITION = 'StructureDefinition';
    const FIELD_STRUCTURE_MAP = 'StructureMap';
    const FIELD_SUBSCRIPTION = 'Subscription';
    const FIELD_SUBSTANCE = 'Substance';
    const FIELD_SUBSTANCE_NUCLEIC_ACID = 'SubstanceNucleicAcid';
    const FIELD_SUBSTANCE_POLYMER = 'SubstancePolymer';
    const FIELD_SUBSTANCE_PROTEIN = 'SubstanceProtein';
    const FIELD_SUBSTANCE_REFERENCE_INFORMATION = 'SubstanceReferenceInformation';
    const FIELD_SUBSTANCE_SOURCE_MATERIAL = 'SubstanceSourceMaterial';
    const FIELD_SUBSTANCE_SPECIFICATION = 'SubstanceSpecification';
    const FIELD_SUPPLY_DELIVERY = 'SupplyDelivery';
    const FIELD_SUPPLY_REQUEST = 'SupplyRequest';
    const FIELD_TASK = 'Task';
    const FIELD_TERMINOLOGY_CAPABILITIES = 'TerminologyCapabilities';
    const FIELD_TEST_REPORT = 'TestReport';
    const FIELD_TEST_SCRIPT = 'TestScript';
    const FIELD_VALUE_SET = 'ValueSet';
    const FIELD_VERIFICATION_RESULT = 'VerificationResult';
    const FIELD_VISION_PRESCRIPTION = 'VisionPrescription';
    const FIELD_PARAMETERS = 'Parameters';

    /**
     * A financial tool for tracking value accrued for a particular purpose. In the
     * healthcare field, used to track charges for a patient, cost centers, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAccount
     */
    protected null|FHIRAccount $Account = null;
    /**
     * This resource allows for the definition of some activity to be performed,
     * independent of a particular patient, practitioner, or other performance context.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRActivityDefinition
     */
    protected null|FHIRActivityDefinition $ActivityDefinition = null;
    /**
     * Actual or potential/avoided event causing unintended physical injury resulting
     * from or contributed to by medical care, a research study or other healthcare
     * setting factors that requires additional monitoring, treatment, or
     * hospitalization, or that results in death.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     */
    protected null|FHIRAdverseEvent $AdverseEvent = null;
    /**
     * Risk of harmful or undesirable, physiological response which is unique to an
     * individual and associated with exposure to a substance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    protected null|FHIRAllergyIntolerance $AllergyIntolerance = null;
    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    protected null|FHIRAppointment $Appointment = null;
    /**
     * A reply to an appointment request for a patient and/or practitioner(s), such as
     * a confirmation or rejection.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse
     */
    protected null|FHIRAppointmentResponse $AppointmentResponse = null;
    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAuditEvent
     */
    protected null|FHIRAuditEvent $AuditEvent = null;
    /**
     * Basic is used for handling concepts not yet defined in FHIR, narrative-only
     * resources that don't map to an existing resource, and custom resources not
     * appropriate for inclusion in the FHIR specification.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBasic
     */
    protected null|FHIRBasic $Basic = null;
    /**
     * A resource that represents the data of a single raw artifact as digital content
     * accessible in its native format. A Binary resource can contain any content,
     * whether text, image, pdf, zip archive, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRBinary
     */
    protected null|FHIRBinary $Binary = null;
    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct
     */
    protected null|FHIRBiologicallyDerivedProduct $BiologicallyDerivedProduct = null;
    /**
     * Record details about an anatomical structure. This resource may be used when a
     * coded concept does not provide the necessary detail needed for the use case.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBodyStructure
     */
    protected null|FHIRBodyStructure $BodyStructure = null;
    /**
     * A container for a collection of resources.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRBundle
     */
    protected null|FHIRBundle $Bundle = null;
    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
     */
    protected null|FHIRCapabilityStatement $CapabilityStatement = null;
    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient, group or community for a period of time, possibly
     * limited to care for a specific condition or set of conditions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCarePlan
     */
    protected null|FHIRCarePlan $CarePlan = null;
    /**
     * The Care Team includes all the people and organizations who plan to participate
     * in the coordination and delivery of care for a patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCareTeam
     */
    protected null|FHIRCareTeam $CareTeam = null;
    /**
     * Catalog entries are wrappers that contextualize items included in a catalog.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCatalogEntry
     */
    protected null|FHIRCatalogEntry $CatalogEntry = null;
    /**
     * The resource ChargeItem describes the provision of healthcare provider products
     * for a certain patient, therefore referring not only to the product, but
     * containing in addition details of the provision, like date, time, amounts and
     * participating organizations and persons. Main Usage of the ChargeItem is to
     * enable the billing process and internal cost allocation.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    protected null|FHIRChargeItem $ChargeItem = null;
    /**
     * The ChargeItemDefinition resource provides the properties that apply to the
     * (billing) codes necessary to calculate costs and prices. The properties may
     * differ largely depending on type and realm, therefore this resource gives only a
     * rough structure and requires profiling for each type of billing code system.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
     */
    protected null|FHIRChargeItemDefinition $ChargeItemDefinition = null;
    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    protected null|FHIRClaim $Claim = null;
    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    protected null|FHIRClaimResponse $ClaimResponse = null;
    /**
     * A record of a clinical assessment performed to determine what problem(s) may
     * affect the patient and before planning the treatments or management strategies
     * that are best to manage a patient's condition. Assessments are often 1:1 with a
     * clinical consultation / encounter, but this varies greatly depending on the
     * clinical workflow. This resource is called "ClinicalImpression" rather than
     * "ClinicalAssessment" to avoid confusion with the recording of assessment tools
     * such as Apgar score.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRClinicalImpression
     */
    protected null|FHIRClinicalImpression $ClinicalImpression = null;
    /**
     * The CodeSystem resource is used to declare the existence of and describe a code
     * system or code system supplement and its key properties, and optionally define a
     * part or all of its content.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    protected null|FHIRCodeSystem $CodeSystem = null;
    /**
     * An occurrence of information being transmitted; e.g. an alert that was sent to a
     * responsible provider, a public health agency that was notified about a
     * reportable condition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCommunication
     */
    protected null|FHIRCommunication $Communication = null;
    /**
     * A request to convey information; e.g. the CDS system proposes that an alert be
     * sent to a responsible provider, the CDS system proposes that the public health
     * agency be notified about a reportable condition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCommunicationRequest
     */
    protected null|FHIRCommunicationRequest $CommunicationRequest = null;
    /**
     * A compartment definition that defines how resources are accessed on a server.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCompartmentDefinition
     */
    protected null|FHIRCompartmentDefinition $CompartmentDefinition = null;
    /**
     * A set of healthcare-related information that is assembled together into a single
     * logical package that provides a single coherent statement of meaning,
     * establishes its own context and that has clinical attestation with regard to who
     * is making the statement. A Composition defines the structure and narrative
     * content necessary for a document. However, a Composition alone does not
     * constitute a document. Rather, the Composition must be the first entry in a
     * Bundle where Bundle.type=document, and any other resources referenced from
     * Composition must be included as subsequent entries in the Bundle (for example
     * Patient, Practitioner, Encounter, etc.).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRComposition
     */
    protected null|FHIRComposition $Composition = null;
    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either concepts in code systems, or data element/data element
     * concepts, or classes in class models.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRConceptMap
     */
    protected null|FHIRConceptMap $ConceptMap = null;
    /**
     * A clinical condition, problem, diagnosis, or other event, situation, issue, or
     * clinical concept that has risen to a level of concern.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCondition
     */
    protected null|FHIRCondition $Condition = null;
    /**
     * A record of a healthcare consumer’s choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRConsent
     */
    protected null|FHIRConsent $Consent = null;
    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRContract
     */
    protected null|FHIRContract $Contract = null;
    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage
     */
    protected null|FHIRCoverage $Coverage = null;
    /**
     * The CoverageEligibilityRequest provides patient and insurance coverage
     * information to an insurer for them to respond, in the form of an
     * CoverageEligibilityResponse, with information regarding whether the stated
     * coverage is valid and in-force and optionally to provide the insurance details
     * of the policy.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest
     */
    protected null|FHIRCoverageEligibilityRequest $CoverageEligibilityRequest = null;
    /**
     * This resource provides eligibility and plan details from the processing of an
     * CoverageEligibilityRequest resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityResponse
     */
    protected null|FHIRCoverageEligibilityResponse $CoverageEligibilityResponse = null;
    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     */
    protected null|FHIRDetectedIssue $DetectedIssue = null;
    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDevice
     */
    protected null|FHIRDevice $Device = null;
    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDeviceDefinition
     */
    protected null|FHIRDeviceDefinition $DeviceDefinition = null;
    /**
     * Describes a measurement, calculation or setting capability of a medical device.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDeviceMetric
     */
    protected null|FHIRDeviceMetric $DeviceMetric = null;
    /**
     * Represents a request for a patient to employ a medical device. The device may be
     * an implantable device, or an external assistive device, such as a walker.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDeviceRequest
     */
    protected null|FHIRDeviceRequest $DeviceRequest = null;
    /**
     * A record of a device being used by a patient where the record is the result of a
     * report from the patient or another clinician.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDeviceUseStatement
     */
    protected null|FHIRDeviceUseStatement $DeviceUseStatement = null;
    /**
     * The findings and interpretation of diagnostic tests performed on patients,
     * groups of patients, devices, and locations, and/or specimens derived from these.
     * The report includes clinical context such as requesting and provider
     * information, and some mix of atomic results, images, textual and coded
     * interpretations, and formatted representation of diagnostic reports.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport
     */
    protected null|FHIRDiagnosticReport $DiagnosticReport = null;
    /**
     * A collection of documents compiled for a purpose together with metadata that
     * applies to the collection.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentManifest
     */
    protected null|FHIRDocumentManifest $DocumentManifest = null;
    /**
     * A reference to a document of any kind for any purpose. Provides metadata about
     * the document so that the document can be discovered and managed. The scope of a
     * document is any seralized object with a mime-type, so includes formal patient
     * centric documents (CDA), cliical notes, scanned paper, and non-patient specific
     * documents like policy text.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentReference
     */
    protected null|FHIRDocumentReference $DocumentReference = null;
    /**
     * The EffectEvidenceSynthesis resource describes the difference in an outcome
     * between exposures states in a population where the effect estimate is derived
     * from a combination of research studies.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREffectEvidenceSynthesis
     */
    protected null|FHIREffectEvidenceSynthesis $EffectEvidenceSynthesis = null;
    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREncounter
     */
    protected null|FHIREncounter $Encounter = null;
    /**
     * The technical details of an endpoint that can be used for electronic services,
     * such as for web services providing XDS.b or a REST endpoint for another FHIR
     * server. This may include any security context information.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREndpoint
     */
    protected null|FHIREndpoint $Endpoint = null;
    /**
     * This resource provides the insurance enrollment details to the insurer regarding
     * a specified coverage.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREnrollmentRequest
     */
    protected null|FHIREnrollmentRequest $EnrollmentRequest = null;
    /**
     * This resource provides enrollment and plan details from the processing of an
     * EnrollmentRequest resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREnrollmentResponse
     */
    protected null|FHIREnrollmentResponse $EnrollmentResponse = null;
    /**
     * An association between a patient and an organization / healthcare provider(s)
     * during which time encounters may occur. The managing organization assumes a
     * level of responsibility for the patient during this time.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
     */
    protected null|FHIREpisodeOfCare $EpisodeOfCare = null;
    /**
     * The EventDefinition resource provides a reusable description of when a
     * particular event can occur.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREventDefinition
     */
    protected null|FHIREventDefinition $EventDefinition = null;
    /**
     * The Evidence resource describes the conditional state (population and any
     * exposures being compared within the population) and outcome (if specified) that
     * the knowledge (evidence, assertion, recommendation) is about.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREvidence
     */
    protected null|FHIREvidence $Evidence = null;
    /**
     * The EvidenceVariable resource describes a "PICO" element that knowledge
     * (evidence, assertion, recommendation) is about.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREvidenceVariable
     */
    protected null|FHIREvidenceVariable $EvidenceVariable = null;
    /**
     * Example of workflow instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRExampleScenario
     */
    protected null|FHIRExampleScenario $ExampleScenario = null;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit
     */
    protected null|FHIRExplanationOfBenefit $ExplanationOfBenefit = null;
    /**
     * Significant health conditions for a person related to the patient relevant in
     * the context of care for the patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory
     */
    protected null|FHIRFamilyMemberHistory $FamilyMemberHistory = null;
    /**
     * Prospective warnings of potential issues when providing care to the patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRFlag
     */
    protected null|FHIRFlag $Flag = null;
    /**
     * Describes the intended objective(s) for a patient, group or organization care,
     * for example, weight loss, restoring an activity of daily living, obtaining herd
     * immunity via immunization, meeting a process improvement objective, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRGoal
     */
    protected null|FHIRGoal $Goal = null;
    /**
     * A formal computable definition of a graph of resources - that is, a coherent set
     * of resources that form a graph by following references. The Graph Definition
     * resource defines a set and makes rules about the set.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRGraphDefinition
     */
    protected null|FHIRGraphDefinition $GraphDefinition = null;
    /**
     * Represents a defined collection of entities that may be discussed or acted upon
     * collectively but which are not expected to act collectively, and are not
     * formally or legally recognized; i.e. a collection of entities that isn't an
     * Organization.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRGroup
     */
    protected null|FHIRGroup $Group = null;
    /**
     * A guidance response is the formal response to a guidance request, including any
     * output parameters returned by the evaluation, as well as the description of any
     * proposed actions to be taken.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRGuidanceResponse
     */
    protected null|FHIRGuidanceResponse $GuidanceResponse = null;
    /**
     * The details of a healthcare service available at a location.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    protected null|FHIRHealthcareService $HealthcareService = null;
    /**
     * Representation of the content produced in a DICOM imaging study. A study
     * comprises a set of series, each of which includes a set of Service-Object Pair
     * Instances (SOP Instances - images or other data) acquired or produced in a
     * common context. A series is of only one modality (e.g. X-ray, CT, MR,
     * ultrasound), but a study may have multiple series of different modalities.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRImagingStudy
     */
    protected null|FHIRImagingStudy $ImagingStudy = null;
    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRImmunization
     */
    protected null|FHIRImmunization $Immunization = null;
    /**
     * Describes a comparison of an immunization event against published
     * recommendations to determine if the administration is "valid" in relation to
     * those recommendations.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRImmunizationEvaluation
     */
    protected null|FHIRImmunizationEvaluation $ImmunizationEvaluation = null;
    /**
     * A patient's point-in-time set of recommendations (i.e. forecasting) according to
     * a published schedule with optional supporting justification.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRImmunizationRecommendation
     */
    protected null|FHIRImmunizationRecommendation $ImmunizationRecommendation = null;
    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
     */
    protected null|FHIRImplementationGuide $ImplementationGuide = null;
    /**
     * Details of a Health Insurance product/plan provided by an organization.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRInsurancePlan
     */
    protected null|FHIRInsurancePlan $InsurancePlan = null;
    /**
     * Invoice containing collected ChargeItems from an Account with calculated
     * individual and total price for Billing purpose.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRInvoice
     */
    protected null|FHIRInvoice $Invoice = null;
    /**
     * The Library resource is a general-purpose container for knowledge asset
     * definitions. It can be used to describe and expose existing knowledge assets
     * such as logic libraries and information model descriptions, as well as to
     * describe a collection of knowledge assets.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLibrary
     */
    protected null|FHIRLibrary $Library = null;
    /**
     * Identifies two or more records (resource instances) that refer to the same
     * real-world "occurrence".
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLinkage
     */
    protected null|FHIRLinkage $Linkage = null;
    /**
     * A list is a curated collection of resources.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRList
     */
    protected null|FHIRList $List = null;
    /**
     * Details and position information for a physical place where services are
     * provided and resources and participants may be stored, found, contained, or
     * accommodated.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    protected null|FHIRLocation $Location = null;
    /**
     * The Measure resource provides the definition of a quality measure.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMeasure
     */
    protected null|FHIRMeasure $Measure = null;
    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMeasureReport
     */
    protected null|FHIRMeasureReport $MeasureReport = null;
    /**
     * A photo, video, or audio recording acquired or used in healthcare. The actual
     * content may be inline or provided by direct reference.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedia
     */
    protected null|FHIRMedia $Media = null;
    /**
     * This resource is primarily used for the identification and definition of a
     * medication for the purposes of prescribing, dispensing, and administering a
     * medication as well as for making statements about medication use.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedication
     */
    protected null|FHIRMedication $Medication = null;
    /**
     * Describes the event of a patient consuming or otherwise being administered a
     * medication. This may be as simple as swallowing a tablet or it may be a long
     * running infusion. Related resources tie this event to the authorizing
     * prescription, and the specific encounter between patient and health care
     * practitioner.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
     */
    protected null|FHIRMedicationAdministration $MedicationAdministration = null;
    /**
     * Indicates that a medication product is to be or has been dispensed for a named
     * person/patient. This includes a description of the medication product (supply)
     * provided and the instructions for administering the medication. The medication
     * dispense is the result of a pharmacy system responding to a medication order.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    protected null|FHIRMedicationDispense $MedicationDispense = null;
    /**
     * Information about a medication that is used to support knowledge.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationKnowledge
     */
    protected null|FHIRMedicationKnowledge $MedicationKnowledge = null;
    /**
     * An order or request for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationRequest" rather than "MedicationPrescription" or "MedicationOrder" to
     * generalize the use across inpatient and outpatient settings, including care
     * plans, etc., and to harmonize with workflow patterns.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationRequest
     */
    protected null|FHIRMedicationRequest $MedicationRequest = null;
    /**
     * A record of a medication that is being consumed by a patient. A
     * MedicationStatement may indicate that the patient may be taking the medication
     * now or has taken the medication in the past or will be taking the medication in
     * the future. The source of this information can be the patient, significant other
     * (such as a family member or spouse), or a clinician. A common scenario where
     * this information is captured is during the history taking process during a
     * patient visit or stay. The medication information may come from sources such as
     * the patient's memory, from a prescription bottle, or from a list of medications
     * the patient, clinician or other party maintains. The primary difference between
     * a medication statement and a medication administration is that the medication
     * administration has complete administration information and is based on actual
     * administration information from the person who administered the medication. A
     * medication statement is often, if not always, less specific. There is no
     * required date/time when the medication was administered, in fact we only know
     * that a source has reported the patient is taking this medication, where details
     * such as time, quantity, or rate or even medication product may be incomplete or
     * missing or less precise. As stated earlier, the medication statement information
     * may come from the patient's memory, from a prescription bottle or from a list of
     * medications the patient, clinician or other party maintains. Medication
     * administration is more formal and is not missing detailed information.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationStatement
     */
    protected null|FHIRMedicationStatement $MedicationStatement = null;
    /**
     * Detailed definition of a medicinal product, typically for uses other than direct
     * patient care (e.g. regulatory use).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    protected null|FHIRMedicinalProduct $MedicinalProduct = null;
    /**
     * The regulatory authorization of a medicinal product.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization
     */
    protected null|FHIRMedicinalProductAuthorization $MedicinalProductAuthorization = null;
    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductContraindication
     */
    protected null|FHIRMedicinalProductContraindication $MedicinalProductContraindication = null;
    /**
     * Indication for the Medicinal Product.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductIndication
     */
    protected null|FHIRMedicinalProductIndication $MedicinalProductIndication = null;
    /**
     * An ingredient of a manufactured item or pharmaceutical product.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductIngredient
     */
    protected null|FHIRMedicinalProductIngredient $MedicinalProductIngredient = null;
    /**
     * The interactions of the medicinal product with other medicinal products, or
     * other forms of interactions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductInteraction
     */
    protected null|FHIRMedicinalProductInteraction $MedicinalProductInteraction = null;
    /**
     * The manufactured item as contained in the packaged medicinal product.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductManufactured
     */
    protected null|FHIRMedicinalProductManufactured $MedicinalProductManufactured = null;
    /**
     * A medicinal product in a container or package.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductPackaged
     */
    protected null|FHIRMedicinalProductPackaged $MedicinalProductPackaged = null;
    /**
     * A pharmaceutical product described in terms of its composition and dose form.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductPharmaceutical
     */
    protected null|FHIRMedicinalProductPharmaceutical $MedicinalProductPharmaceutical = null;
    /**
     * Describe the undesirable effects of the medicinal product.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductUndesirableEffect
     */
    protected null|FHIRMedicinalProductUndesirableEffect $MedicinalProductUndesirableEffect = null;
    /**
     * Defines the characteristics of a message that can be shared between systems,
     * including the type of event that initiates the message, the content to be
     * transmitted and what response(s), if any, are permitted.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMessageDefinition
     */
    protected null|FHIRMessageDefinition $MessageDefinition = null;
    /**
     * The header for a message exchange that is either requesting or responding to an
     * action. The reference(s) that are the subject of the action as well as other
     * information related to the action are typically transmitted in a bundle in which
     * the MessageHeader resource instance is the first resource in the bundle.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMessageHeader
     */
    protected null|FHIRMessageHeader $MessageHeader = null;
    /**
     * Raw data describing a biological sequence.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMolecularSequence
     */
    protected null|FHIRMolecularSequence $MolecularSequence = null;
    /**
     * A curated namespace that issues unique symbols within that namespace for the
     * identification of concepts, people, devices, etc. Represents a "System" used
     * within the Identifier and Coding data types.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRNamingSystem
     */
    protected null|FHIRNamingSystem $NamingSystem = null;
    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRNutritionOrder
     */
    protected null|FHIRNutritionOrder $NutritionOrder = null;
    /**
     * Measurements and simple assertions made about a patient, device or other
     * subject.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRObservation
     */
    protected null|FHIRObservation $Observation = null;
    /**
     * Set of definitional characteristics for a kind of observation or measurement
     * produced or consumed by an orderable health care service.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRObservationDefinition
     */
    protected null|FHIRObservationDefinition $ObservationDefinition = null;
    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIROperationDefinition
     */
    protected null|FHIROperationDefinition $OperationDefinition = null;
    /**
     * A collection of error, warning, or information messages that result from a
     * system action.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIROperationOutcome
     */
    protected null|FHIROperationOutcome $OperationOutcome = null;
    /**
     * A formally or informally recognized grouping of people or organizations formed
     * for the purpose of achieving some form of collective action. Includes companies,
     * institutions, corporations, departments, community groups, healthcare practice
     * groups, payer/insurer, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIROrganization
     */
    protected null|FHIROrganization $Organization = null;
    /**
     * Defines an affiliation/assotiation/relationship between 2 distinct oganizations,
     * that is not a part-of relationship/sub-division relationship.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIROrganizationAffiliation
     */
    protected null|FHIROrganizationAffiliation $OrganizationAffiliation = null;
    /**
     * Demographics and other administrative information about an individual or animal
     * receiving care or other health-related services.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPatient
     */
    protected null|FHIRPatient $Patient = null;
    /**
     * This resource provides the status of the payment for goods and services
     * rendered, and the request and response resource references.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPaymentNotice
     */
    protected null|FHIRPaymentNotice $PaymentNotice = null;
    /**
     * This resource provides the details including amount of a payment and allocates
     * the payment items being paid.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation
     */
    protected null|FHIRPaymentReconciliation $PaymentReconciliation = null;
    /**
     * Demographics and administrative information about a person independent of a
     * specific health-related context.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPerson
     */
    protected null|FHIRPerson $Person = null;
    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
     */
    protected null|FHIRPlanDefinition $PlanDefinition = null;
    /**
     * A person who is directly or indirectly involved in the provisioning of
     * healthcare.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPractitioner
     */
    protected null|FHIRPractitioner $Practitioner = null;
    /**
     * A specific set of Roles/Locations/specialties/services that a practitioner may
     * perform at an organization for a period of time.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPractitionerRole
     */
    protected null|FHIRPractitionerRole $PractitionerRole = null;
    /**
     * An action that is or was performed on or for a patient. This can be a physical
     * intervention like an operation, or less invasive like long term services,
     * counseling, or hypnotherapy.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRProcedure
     */
    protected null|FHIRProcedure $Procedure = null;
    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRProvenance
     */
    protected null|FHIRProvenance $Provenance = null;
    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRQuestionnaire
     */
    protected null|FHIRQuestionnaire $Questionnaire = null;
    /**
     * A structured set of questions and their answers. The questions are ordered and
     * grouped into coherent subsets, corresponding to the structure of the grouping of
     * the questionnaire being responded to.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRQuestionnaireResponse
     */
    protected null|FHIRQuestionnaireResponse $QuestionnaireResponse = null;
    /**
     * Information about a person that is involved in the care for a patient, but who
     * is not the target of healthcare, nor has a formal responsibility in the care
     * process.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRRelatedPerson
     */
    protected null|FHIRRelatedPerson $RelatedPerson = null;
    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRRequestGroup
     */
    protected null|FHIRRequestGroup $RequestGroup = null;
    /**
     * The ResearchDefinition resource describes the conditional state (population and
     * any exposures being compared within the population) and outcome (if specified)
     * that the knowledge (evidence, assertion, recommendation) is about.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRResearchDefinition
     */
    protected null|FHIRResearchDefinition $ResearchDefinition = null;
    /**
     * The ResearchElementDefinition resource describes a "PICO" element that knowledge
     * (evidence, assertion, recommendation) is about.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRResearchElementDefinition
     */
    protected null|FHIRResearchElementDefinition $ResearchElementDefinition = null;
    /**
     * A process where a researcher or organization plans and then executes a series of
     * steps intended to increase the field of healthcare-related knowledge. This
     * includes studies of safety, efficacy, comparative effectiveness and other
     * information about medications, devices, therapies and other interventional and
     * investigative techniques. A ResearchStudy involves the gathering of information
     * about human or animal subjects.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    protected null|FHIRResearchStudy $ResearchStudy = null;
    /**
     * A physical entity which is the primary unit of operational and/or administrative
     * interest in a study.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRResearchSubject
     */
    protected null|FHIRResearchSubject $ResearchSubject = null;
    /**
     * An assessment of the likely outcome(s) for a patient or other subject as well as
     * the likelihood of each outcome.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRRiskAssessment
     */
    protected null|FHIRRiskAssessment $RiskAssessment = null;
    /**
     * The RiskEvidenceSynthesis resource describes the likelihood of an outcome in a
     * population plus exposure state where the risk estimate is derived from a
     * combination of research studies.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRRiskEvidenceSynthesis
     */
    protected null|FHIRRiskEvidenceSynthesis $RiskEvidenceSynthesis = null;
    /**
     * A container for slots of time that may be available for booking appointments.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSchedule
     */
    protected null|FHIRSchedule $Schedule = null;
    /**
     * A search parameter that defines a named search item that can be used to
     * search/filter on a resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSearchParameter
     */
    protected null|FHIRSearchParameter $SearchParameter = null;
    /**
     * A record of a request for service such as diagnostic investigations, treatments,
     * or operations to be performed.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRServiceRequest
     */
    protected null|FHIRServiceRequest $ServiceRequest = null;
    /**
     * A slot of time on a schedule that may be available for booking appointments.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSlot
     */
    protected null|FHIRSlot $Slot = null;
    /**
     * A sample to be used for analysis.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimen
     */
    protected null|FHIRSpecimen $Specimen = null;
    /**
     * A kind of specimen with associated set of requirements.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimenDefinition
     */
    protected null|FHIRSpecimenDefinition $SpecimenDefinition = null;
    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRStructureDefinition
     */
    protected null|FHIRStructureDefinition $StructureDefinition = null;
    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRStructureMap
     */
    protected null|FHIRStructureMap $StructureMap = null;
    /**
     * The subscription resource is used to define a push-based subscription from a
     * server to another system. Once a subscription is registered with the server, the
     * server checks every resource that is created or updated, and if the resource
     * matches the given criteria, it sends a message on the defined "channel" so that
     * another system can take an appropriate action.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubscription
     */
    protected null|FHIRSubscription $Subscription = null;
    /**
     * A homogeneous material with a definite composition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstance
     */
    protected null|FHIRSubstance $Substance = null;
    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceNucleicAcid
     */
    protected null|FHIRSubstanceNucleicAcid $SubstanceNucleicAcid = null;
    /**
     * Todo.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstancePolymer
     */
    protected null|FHIRSubstancePolymer $SubstancePolymer = null;
    /**
     * A SubstanceProtein is defined as a single unit of a linear amino acid sequence,
     * or a combination of subunits that are either covalently linked or have a defined
     * invariant stoichiometric relationship. This includes all synthetic, recombinant
     * and purified SubstanceProteins of defined sequence, whether the use is
     * therapeutic or prophylactic. This set of elements will be used to describe
     * albumins, coagulation factors, cytokines, growth factors,
     * peptide/SubstanceProtein hormones, enzymes, toxins, toxoids, recombinant
     * vaccines, and immunomodulators.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceProtein
     */
    protected null|FHIRSubstanceProtein $SubstanceProtein = null;
    /**
     * Todo.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceReferenceInformation
     */
    protected null|FHIRSubstanceReferenceInformation $SubstanceReferenceInformation = null;
    /**
     * Source material shall capture information on the taxonomic and anatomical
     * origins as well as the fraction of a material that can result in or can be
     * modified to form a substance. This set of data elements shall be used to define
     * polymer substances isolated from biological matrices. Taxonomic and anatomical
     * origins shall be described using a controlled vocabulary as required. This
     * information is captured for naturally derived polymers ( . starch) and
     * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
     * the Substance level defines the fresh material of a single species or
     * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
     * preparations, the fraction information will be captured at the Substance
     * information level and additional information for herbal extracts will be
     * captured at the Specified Substance Group 1 information level. See for further
     * explanation the Substance Class: Structurally Diverse and the herbal annex.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSourceMaterial
     */
    protected null|FHIRSubstanceSourceMaterial $SubstanceSourceMaterial = null;
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     */
    protected null|FHIRSubstanceSpecification $SubstanceSpecification = null;
    /**
     * Record of delivery of what is supplied.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery
     */
    protected null|FHIRSupplyDelivery $SupplyDelivery = null;
    /**
     * A record of a request for a medication, substance or device used in the
     * healthcare setting.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSupplyRequest
     */
    protected null|FHIRSupplyRequest $SupplyRequest = null;
    /**
     * A task to be performed.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRTask
     */
    protected null|FHIRTask $Task = null;
    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRTerminologyCapabilities
     */
    protected null|FHIRTerminologyCapabilities $TerminologyCapabilities = null;
    /**
     * A summary of information based on the results of executing a TestScript.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRTestReport
     */
    protected null|FHIRTestReport $TestReport = null;
    /**
     * A structured set of tests against a FHIR server or client implementation to
     * determine compliance against the FHIR specification.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRTestScript
     */
    protected null|FHIRTestScript $TestScript = null;
    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [[[CodeSystem]]] definitions and their use in [coded
     * elements](terminologies.html).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRValueSet
     */
    protected null|FHIRValueSet $ValueSet = null;
    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult
     */
    protected null|FHIRVerificationResult $VerificationResult = null;
    /**
     * An authorization for the provision of glasses and/or contact lenses to a
     * patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVisionPrescription
     */
    protected null|FHIRVisionPrescription $VisionPrescription = null;
    /**
     * This resource is a non-persisted resource used to pass information into and back
     * from an [operation](operations.html). It has no other use, and there is no
     * RESTful endpoint associated with it.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRParameters
     */
    protected null|FHIRParameters $Parameters = null;

    /**
     * Validation map for fields in type ResourceContainer
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRResourceContainer Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }

        if (isset($data[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS])) {
            if (is_array($data[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS])) {
                $this->_setFHIRComments($data[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS]);
            } elseif (is_string($data[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS])) {
                $this->_addFHIRComment($data[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS]);
            }
        }
        if (array_key_exists(self::FIELD_ACCOUNT, $data)) {
            if ($data[self::FIELD_ACCOUNT] instanceof FHIRAccount) {
                $this->setAccount($data[self::FIELD_ACCOUNT]);
            } else {
                $this->setAccount(new FHIRAccount($data[self::FIELD_ACCOUNT]));
            }
        }
        if (array_key_exists(self::FIELD_ACTIVITY_DEFINITION, $data)) {
            if ($data[self::FIELD_ACTIVITY_DEFINITION] instanceof FHIRActivityDefinition) {
                $this->setActivityDefinition($data[self::FIELD_ACTIVITY_DEFINITION]);
            } else {
                $this->setActivityDefinition(new FHIRActivityDefinition($data[self::FIELD_ACTIVITY_DEFINITION]));
            }
        }
        if (array_key_exists(self::FIELD_ADVERSE_EVENT, $data)) {
            if ($data[self::FIELD_ADVERSE_EVENT] instanceof FHIRAdverseEvent) {
                $this->setAdverseEvent($data[self::FIELD_ADVERSE_EVENT]);
            } else {
                $this->setAdverseEvent(new FHIRAdverseEvent($data[self::FIELD_ADVERSE_EVENT]));
            }
        }
        if (array_key_exists(self::FIELD_ALLERGY_INTOLERANCE, $data)) {
            if ($data[self::FIELD_ALLERGY_INTOLERANCE] instanceof FHIRAllergyIntolerance) {
                $this->setAllergyIntolerance($data[self::FIELD_ALLERGY_INTOLERANCE]);
            } else {
                $this->setAllergyIntolerance(new FHIRAllergyIntolerance($data[self::FIELD_ALLERGY_INTOLERANCE]));
            }
        }
        if (array_key_exists(self::FIELD_APPOINTMENT, $data)) {
            if ($data[self::FIELD_APPOINTMENT] instanceof FHIRAppointment) {
                $this->setAppointment($data[self::FIELD_APPOINTMENT]);
            } else {
                $this->setAppointment(new FHIRAppointment($data[self::FIELD_APPOINTMENT]));
            }
        }
        if (array_key_exists(self::FIELD_APPOINTMENT_RESPONSE, $data)) {
            if ($data[self::FIELD_APPOINTMENT_RESPONSE] instanceof FHIRAppointmentResponse) {
                $this->setAppointmentResponse($data[self::FIELD_APPOINTMENT_RESPONSE]);
            } else {
                $this->setAppointmentResponse(new FHIRAppointmentResponse($data[self::FIELD_APPOINTMENT_RESPONSE]));
            }
        }
        if (array_key_exists(self::FIELD_AUDIT_EVENT, $data)) {
            if ($data[self::FIELD_AUDIT_EVENT] instanceof FHIRAuditEvent) {
                $this->setAuditEvent($data[self::FIELD_AUDIT_EVENT]);
            } else {
                $this->setAuditEvent(new FHIRAuditEvent($data[self::FIELD_AUDIT_EVENT]));
            }
        }
        if (array_key_exists(self::FIELD_BASIC, $data)) {
            if ($data[self::FIELD_BASIC] instanceof FHIRBasic) {
                $this->setBasic($data[self::FIELD_BASIC]);
            } else {
                $this->setBasic(new FHIRBasic($data[self::FIELD_BASIC]));
            }
        }
        if (array_key_exists(self::FIELD_BINARY, $data)) {
            if ($data[self::FIELD_BINARY] instanceof FHIRBinary) {
                $this->setBinary($data[self::FIELD_BINARY]);
            } else {
                $this->setBinary(new FHIRBinary($data[self::FIELD_BINARY]));
            }
        }
        if (array_key_exists(self::FIELD_BIOLOGICALLY_DERIVED_PRODUCT, $data)) {
            if ($data[self::FIELD_BIOLOGICALLY_DERIVED_PRODUCT] instanceof FHIRBiologicallyDerivedProduct) {
                $this->setBiologicallyDerivedProduct($data[self::FIELD_BIOLOGICALLY_DERIVED_PRODUCT]);
            } else {
                $this->setBiologicallyDerivedProduct(new FHIRBiologicallyDerivedProduct($data[self::FIELD_BIOLOGICALLY_DERIVED_PRODUCT]));
            }
        }
        if (array_key_exists(self::FIELD_BODY_STRUCTURE, $data)) {
            if ($data[self::FIELD_BODY_STRUCTURE] instanceof FHIRBodyStructure) {
                $this->setBodyStructure($data[self::FIELD_BODY_STRUCTURE]);
            } else {
                $this->setBodyStructure(new FHIRBodyStructure($data[self::FIELD_BODY_STRUCTURE]));
            }
        }
        if (array_key_exists(self::FIELD_BUNDLE, $data)) {
            if ($data[self::FIELD_BUNDLE] instanceof FHIRBundle) {
                $this->setBundle($data[self::FIELD_BUNDLE]);
            } else {
                $this->setBundle(new FHIRBundle($data[self::FIELD_BUNDLE]));
            }
        }
        if (array_key_exists(self::FIELD_CAPABILITY_STATEMENT, $data)) {
            if ($data[self::FIELD_CAPABILITY_STATEMENT] instanceof FHIRCapabilityStatement) {
                $this->setCapabilityStatement($data[self::FIELD_CAPABILITY_STATEMENT]);
            } else {
                $this->setCapabilityStatement(new FHIRCapabilityStatement($data[self::FIELD_CAPABILITY_STATEMENT]));
            }
        }
        if (array_key_exists(self::FIELD_CARE_PLAN, $data)) {
            if ($data[self::FIELD_CARE_PLAN] instanceof FHIRCarePlan) {
                $this->setCarePlan($data[self::FIELD_CARE_PLAN]);
            } else {
                $this->setCarePlan(new FHIRCarePlan($data[self::FIELD_CARE_PLAN]));
            }
        }
        if (array_key_exists(self::FIELD_CARE_TEAM, $data)) {
            if ($data[self::FIELD_CARE_TEAM] instanceof FHIRCareTeam) {
                $this->setCareTeam($data[self::FIELD_CARE_TEAM]);
            } else {
                $this->setCareTeam(new FHIRCareTeam($data[self::FIELD_CARE_TEAM]));
            }
        }
        if (array_key_exists(self::FIELD_CATALOG_ENTRY, $data)) {
            if ($data[self::FIELD_CATALOG_ENTRY] instanceof FHIRCatalogEntry) {
                $this->setCatalogEntry($data[self::FIELD_CATALOG_ENTRY]);
            } else {
                $this->setCatalogEntry(new FHIRCatalogEntry($data[self::FIELD_CATALOG_ENTRY]));
            }
        }
        if (array_key_exists(self::FIELD_CHARGE_ITEM, $data)) {
            if ($data[self::FIELD_CHARGE_ITEM] instanceof FHIRChargeItem) {
                $this->setChargeItem($data[self::FIELD_CHARGE_ITEM]);
            } else {
                $this->setChargeItem(new FHIRChargeItem($data[self::FIELD_CHARGE_ITEM]));
            }
        }
        if (array_key_exists(self::FIELD_CHARGE_ITEM_DEFINITION, $data)) {
            if ($data[self::FIELD_CHARGE_ITEM_DEFINITION] instanceof FHIRChargeItemDefinition) {
                $this->setChargeItemDefinition($data[self::FIELD_CHARGE_ITEM_DEFINITION]);
            } else {
                $this->setChargeItemDefinition(new FHIRChargeItemDefinition($data[self::FIELD_CHARGE_ITEM_DEFINITION]));
            }
        }
        if (array_key_exists(self::FIELD_CLAIM, $data)) {
            if ($data[self::FIELD_CLAIM] instanceof FHIRClaim) {
                $this->setClaim($data[self::FIELD_CLAIM]);
            } else {
                $this->setClaim(new FHIRClaim($data[self::FIELD_CLAIM]));
            }
        }
        if (array_key_exists(self::FIELD_CLAIM_RESPONSE, $data)) {
            if ($data[self::FIELD_CLAIM_RESPONSE] instanceof FHIRClaimResponse) {
                $this->setClaimResponse($data[self::FIELD_CLAIM_RESPONSE]);
            } else {
                $this->setClaimResponse(new FHIRClaimResponse($data[self::FIELD_CLAIM_RESPONSE]));
            }
        }
        if (array_key_exists(self::FIELD_CLINICAL_IMPRESSION, $data)) {
            if ($data[self::FIELD_CLINICAL_IMPRESSION] instanceof FHIRClinicalImpression) {
                $this->setClinicalImpression($data[self::FIELD_CLINICAL_IMPRESSION]);
            } else {
                $this->setClinicalImpression(new FHIRClinicalImpression($data[self::FIELD_CLINICAL_IMPRESSION]));
            }
        }
        if (array_key_exists(self::FIELD_CODE_SYSTEM, $data)) {
            if ($data[self::FIELD_CODE_SYSTEM] instanceof FHIRCodeSystem) {
                $this->setCodeSystem($data[self::FIELD_CODE_SYSTEM]);
            } else {
                $this->setCodeSystem(new FHIRCodeSystem($data[self::FIELD_CODE_SYSTEM]));
            }
        }
        if (array_key_exists(self::FIELD_COMMUNICATION, $data)) {
            if ($data[self::FIELD_COMMUNICATION] instanceof FHIRCommunication) {
                $this->setCommunication($data[self::FIELD_COMMUNICATION]);
            } else {
                $this->setCommunication(new FHIRCommunication($data[self::FIELD_COMMUNICATION]));
            }
        }
        if (array_key_exists(self::FIELD_COMMUNICATION_REQUEST, $data)) {
            if ($data[self::FIELD_COMMUNICATION_REQUEST] instanceof FHIRCommunicationRequest) {
                $this->setCommunicationRequest($data[self::FIELD_COMMUNICATION_REQUEST]);
            } else {
                $this->setCommunicationRequest(new FHIRCommunicationRequest($data[self::FIELD_COMMUNICATION_REQUEST]));
            }
        }
        if (array_key_exists(self::FIELD_COMPARTMENT_DEFINITION, $data)) {
            if ($data[self::FIELD_COMPARTMENT_DEFINITION] instanceof FHIRCompartmentDefinition) {
                $this->setCompartmentDefinition($data[self::FIELD_COMPARTMENT_DEFINITION]);
            } else {
                $this->setCompartmentDefinition(new FHIRCompartmentDefinition($data[self::FIELD_COMPARTMENT_DEFINITION]));
            }
        }
        if (array_key_exists(self::FIELD_COMPOSITION, $data)) {
            if ($data[self::FIELD_COMPOSITION] instanceof FHIRComposition) {
                $this->setComposition($data[self::FIELD_COMPOSITION]);
            } else {
                $this->setComposition(new FHIRComposition($data[self::FIELD_COMPOSITION]));
            }
        }
        if (array_key_exists(self::FIELD_CONCEPT_MAP, $data)) {
            if ($data[self::FIELD_CONCEPT_MAP] instanceof FHIRConceptMap) {
                $this->setConceptMap($data[self::FIELD_CONCEPT_MAP]);
            } else {
                $this->setConceptMap(new FHIRConceptMap($data[self::FIELD_CONCEPT_MAP]));
            }
        }
        if (array_key_exists(self::FIELD_CONDITION, $data)) {
            if ($data[self::FIELD_CONDITION] instanceof FHIRCondition) {
                $this->setCondition($data[self::FIELD_CONDITION]);
            } else {
                $this->setCondition(new FHIRCondition($data[self::FIELD_CONDITION]));
            }
        }
        if (array_key_exists(self::FIELD_CONSENT, $data)) {
            if ($data[self::FIELD_CONSENT] instanceof FHIRConsent) {
                $this->setConsent($data[self::FIELD_CONSENT]);
            } else {
                $this->setConsent(new FHIRConsent($data[self::FIELD_CONSENT]));
            }
        }
        if (array_key_exists(self::FIELD_CONTRACT, $data)) {
            if ($data[self::FIELD_CONTRACT] instanceof FHIRContract) {
                $this->setContract($data[self::FIELD_CONTRACT]);
            } else {
                $this->setContract(new FHIRContract($data[self::FIELD_CONTRACT]));
            }
        }
        if (array_key_exists(self::FIELD_COVERAGE, $data)) {
            if ($data[self::FIELD_COVERAGE] instanceof FHIRCoverage) {
                $this->setCoverage($data[self::FIELD_COVERAGE]);
            } else {
                $this->setCoverage(new FHIRCoverage($data[self::FIELD_COVERAGE]));
            }
        }
        if (array_key_exists(self::FIELD_COVERAGE_ELIGIBILITY_REQUEST, $data)) {
            if ($data[self::FIELD_COVERAGE_ELIGIBILITY_REQUEST] instanceof FHIRCoverageEligibilityRequest) {
                $this->setCoverageEligibilityRequest($data[self::FIELD_COVERAGE_ELIGIBILITY_REQUEST]);
            } else {
                $this->setCoverageEligibilityRequest(new FHIRCoverageEligibilityRequest($data[self::FIELD_COVERAGE_ELIGIBILITY_REQUEST]));
            }
        }
        if (array_key_exists(self::FIELD_COVERAGE_ELIGIBILITY_RESPONSE, $data)) {
            if ($data[self::FIELD_COVERAGE_ELIGIBILITY_RESPONSE] instanceof FHIRCoverageEligibilityResponse) {
                $this->setCoverageEligibilityResponse($data[self::FIELD_COVERAGE_ELIGIBILITY_RESPONSE]);
            } else {
                $this->setCoverageEligibilityResponse(new FHIRCoverageEligibilityResponse($data[self::FIELD_COVERAGE_ELIGIBILITY_RESPONSE]));
            }
        }
        if (array_key_exists(self::FIELD_DETECTED_ISSUE, $data)) {
            if ($data[self::FIELD_DETECTED_ISSUE] instanceof FHIRDetectedIssue) {
                $this->setDetectedIssue($data[self::FIELD_DETECTED_ISSUE]);
            } else {
                $this->setDetectedIssue(new FHIRDetectedIssue($data[self::FIELD_DETECTED_ISSUE]));
            }
        }
        if (array_key_exists(self::FIELD_DEVICE, $data)) {
            if ($data[self::FIELD_DEVICE] instanceof FHIRDevice) {
                $this->setDevice($data[self::FIELD_DEVICE]);
            } else {
                $this->setDevice(new FHIRDevice($data[self::FIELD_DEVICE]));
            }
        }
        if (array_key_exists(self::FIELD_DEVICE_DEFINITION, $data)) {
            if ($data[self::FIELD_DEVICE_DEFINITION] instanceof FHIRDeviceDefinition) {
                $this->setDeviceDefinition($data[self::FIELD_DEVICE_DEFINITION]);
            } else {
                $this->setDeviceDefinition(new FHIRDeviceDefinition($data[self::FIELD_DEVICE_DEFINITION]));
            }
        }
        if (array_key_exists(self::FIELD_DEVICE_METRIC, $data)) {
            if ($data[self::FIELD_DEVICE_METRIC] instanceof FHIRDeviceMetric) {
                $this->setDeviceMetric($data[self::FIELD_DEVICE_METRIC]);
            } else {
                $this->setDeviceMetric(new FHIRDeviceMetric($data[self::FIELD_DEVICE_METRIC]));
            }
        }
        if (array_key_exists(self::FIELD_DEVICE_REQUEST, $data)) {
            if ($data[self::FIELD_DEVICE_REQUEST] instanceof FHIRDeviceRequest) {
                $this->setDeviceRequest($data[self::FIELD_DEVICE_REQUEST]);
            } else {
                $this->setDeviceRequest(new FHIRDeviceRequest($data[self::FIELD_DEVICE_REQUEST]));
            }
        }
        if (array_key_exists(self::FIELD_DEVICE_USE_STATEMENT, $data)) {
            if ($data[self::FIELD_DEVICE_USE_STATEMENT] instanceof FHIRDeviceUseStatement) {
                $this->setDeviceUseStatement($data[self::FIELD_DEVICE_USE_STATEMENT]);
            } else {
                $this->setDeviceUseStatement(new FHIRDeviceUseStatement($data[self::FIELD_DEVICE_USE_STATEMENT]));
            }
        }
        if (array_key_exists(self::FIELD_DIAGNOSTIC_REPORT, $data)) {
            if ($data[self::FIELD_DIAGNOSTIC_REPORT] instanceof FHIRDiagnosticReport) {
                $this->setDiagnosticReport($data[self::FIELD_DIAGNOSTIC_REPORT]);
            } else {
                $this->setDiagnosticReport(new FHIRDiagnosticReport($data[self::FIELD_DIAGNOSTIC_REPORT]));
            }
        }
        if (array_key_exists(self::FIELD_DOCUMENT_MANIFEST, $data)) {
            if ($data[self::FIELD_DOCUMENT_MANIFEST] instanceof FHIRDocumentManifest) {
                $this->setDocumentManifest($data[self::FIELD_DOCUMENT_MANIFEST]);
            } else {
                $this->setDocumentManifest(new FHIRDocumentManifest($data[self::FIELD_DOCUMENT_MANIFEST]));
            }
        }
        if (array_key_exists(self::FIELD_DOCUMENT_REFERENCE, $data)) {
            if ($data[self::FIELD_DOCUMENT_REFERENCE] instanceof FHIRDocumentReference) {
                $this->setDocumentReference($data[self::FIELD_DOCUMENT_REFERENCE]);
            } else {
                $this->setDocumentReference(new FHIRDocumentReference($data[self::FIELD_DOCUMENT_REFERENCE]));
            }
        }
        if (array_key_exists(self::FIELD_EFFECT_EVIDENCE_SYNTHESIS, $data)) {
            if ($data[self::FIELD_EFFECT_EVIDENCE_SYNTHESIS] instanceof FHIREffectEvidenceSynthesis) {
                $this->setEffectEvidenceSynthesis($data[self::FIELD_EFFECT_EVIDENCE_SYNTHESIS]);
            } else {
                $this->setEffectEvidenceSynthesis(new FHIREffectEvidenceSynthesis($data[self::FIELD_EFFECT_EVIDENCE_SYNTHESIS]));
            }
        }
        if (array_key_exists(self::FIELD_ENCOUNTER, $data)) {
            if ($data[self::FIELD_ENCOUNTER] instanceof FHIREncounter) {
                $this->setEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->setEncounter(new FHIREncounter($data[self::FIELD_ENCOUNTER]));
            }
        }
        if (array_key_exists(self::FIELD_ENDPOINT, $data)) {
            if ($data[self::FIELD_ENDPOINT] instanceof FHIREndpoint) {
                $this->setEndpoint($data[self::FIELD_ENDPOINT]);
            } else {
                $this->setEndpoint(new FHIREndpoint($data[self::FIELD_ENDPOINT]));
            }
        }
        if (array_key_exists(self::FIELD_ENROLLMENT_REQUEST, $data)) {
            if ($data[self::FIELD_ENROLLMENT_REQUEST] instanceof FHIREnrollmentRequest) {
                $this->setEnrollmentRequest($data[self::FIELD_ENROLLMENT_REQUEST]);
            } else {
                $this->setEnrollmentRequest(new FHIREnrollmentRequest($data[self::FIELD_ENROLLMENT_REQUEST]));
            }
        }
        if (array_key_exists(self::FIELD_ENROLLMENT_RESPONSE, $data)) {
            if ($data[self::FIELD_ENROLLMENT_RESPONSE] instanceof FHIREnrollmentResponse) {
                $this->setEnrollmentResponse($data[self::FIELD_ENROLLMENT_RESPONSE]);
            } else {
                $this->setEnrollmentResponse(new FHIREnrollmentResponse($data[self::FIELD_ENROLLMENT_RESPONSE]));
            }
        }
        if (array_key_exists(self::FIELD_EPISODE_OF_CARE, $data)) {
            if ($data[self::FIELD_EPISODE_OF_CARE] instanceof FHIREpisodeOfCare) {
                $this->setEpisodeOfCare($data[self::FIELD_EPISODE_OF_CARE]);
            } else {
                $this->setEpisodeOfCare(new FHIREpisodeOfCare($data[self::FIELD_EPISODE_OF_CARE]));
            }
        }
        if (array_key_exists(self::FIELD_EVENT_DEFINITION, $data)) {
            if ($data[self::FIELD_EVENT_DEFINITION] instanceof FHIREventDefinition) {
                $this->setEventDefinition($data[self::FIELD_EVENT_DEFINITION]);
            } else {
                $this->setEventDefinition(new FHIREventDefinition($data[self::FIELD_EVENT_DEFINITION]));
            }
        }
        if (array_key_exists(self::FIELD_EVIDENCE, $data)) {
            if ($data[self::FIELD_EVIDENCE] instanceof FHIREvidence) {
                $this->setEvidence($data[self::FIELD_EVIDENCE]);
            } else {
                $this->setEvidence(new FHIREvidence($data[self::FIELD_EVIDENCE]));
            }
        }
        if (array_key_exists(self::FIELD_EVIDENCE_VARIABLE, $data)) {
            if ($data[self::FIELD_EVIDENCE_VARIABLE] instanceof FHIREvidenceVariable) {
                $this->setEvidenceVariable($data[self::FIELD_EVIDENCE_VARIABLE]);
            } else {
                $this->setEvidenceVariable(new FHIREvidenceVariable($data[self::FIELD_EVIDENCE_VARIABLE]));
            }
        }
        if (array_key_exists(self::FIELD_EXAMPLE_SCENARIO, $data)) {
            if ($data[self::FIELD_EXAMPLE_SCENARIO] instanceof FHIRExampleScenario) {
                $this->setExampleScenario($data[self::FIELD_EXAMPLE_SCENARIO]);
            } else {
                $this->setExampleScenario(new FHIRExampleScenario($data[self::FIELD_EXAMPLE_SCENARIO]));
            }
        }
        if (array_key_exists(self::FIELD_EXPLANATION_OF_BENEFIT, $data)) {
            if ($data[self::FIELD_EXPLANATION_OF_BENEFIT] instanceof FHIRExplanationOfBenefit) {
                $this->setExplanationOfBenefit($data[self::FIELD_EXPLANATION_OF_BENEFIT]);
            } else {
                $this->setExplanationOfBenefit(new FHIRExplanationOfBenefit($data[self::FIELD_EXPLANATION_OF_BENEFIT]));
            }
        }
        if (array_key_exists(self::FIELD_FAMILY_MEMBER_HISTORY, $data)) {
            if ($data[self::FIELD_FAMILY_MEMBER_HISTORY] instanceof FHIRFamilyMemberHistory) {
                $this->setFamilyMemberHistory($data[self::FIELD_FAMILY_MEMBER_HISTORY]);
            } else {
                $this->setFamilyMemberHistory(new FHIRFamilyMemberHistory($data[self::FIELD_FAMILY_MEMBER_HISTORY]));
            }
        }
        if (array_key_exists(self::FIELD_FLAG, $data)) {
            if ($data[self::FIELD_FLAG] instanceof FHIRFlag) {
                $this->setFlag($data[self::FIELD_FLAG]);
            } else {
                $this->setFlag(new FHIRFlag($data[self::FIELD_FLAG]));
            }
        }
        if (array_key_exists(self::FIELD_GOAL, $data)) {
            if ($data[self::FIELD_GOAL] instanceof FHIRGoal) {
                $this->setGoal($data[self::FIELD_GOAL]);
            } else {
                $this->setGoal(new FHIRGoal($data[self::FIELD_GOAL]));
            }
        }
        if (array_key_exists(self::FIELD_GRAPH_DEFINITION, $data)) {
            if ($data[self::FIELD_GRAPH_DEFINITION] instanceof FHIRGraphDefinition) {
                $this->setGraphDefinition($data[self::FIELD_GRAPH_DEFINITION]);
            } else {
                $this->setGraphDefinition(new FHIRGraphDefinition($data[self::FIELD_GRAPH_DEFINITION]));
            }
        }
        if (array_key_exists(self::FIELD_GROUP, $data)) {
            if ($data[self::FIELD_GROUP] instanceof FHIRGroup) {
                $this->setGroup($data[self::FIELD_GROUP]);
            } else {
                $this->setGroup(new FHIRGroup($data[self::FIELD_GROUP]));
            }
        }
        if (array_key_exists(self::FIELD_GUIDANCE_RESPONSE, $data)) {
            if ($data[self::FIELD_GUIDANCE_RESPONSE] instanceof FHIRGuidanceResponse) {
                $this->setGuidanceResponse($data[self::FIELD_GUIDANCE_RESPONSE]);
            } else {
                $this->setGuidanceResponse(new FHIRGuidanceResponse($data[self::FIELD_GUIDANCE_RESPONSE]));
            }
        }
        if (array_key_exists(self::FIELD_HEALTHCARE_SERVICE, $data)) {
            if ($data[self::FIELD_HEALTHCARE_SERVICE] instanceof FHIRHealthcareService) {
                $this->setHealthcareService($data[self::FIELD_HEALTHCARE_SERVICE]);
            } else {
                $this->setHealthcareService(new FHIRHealthcareService($data[self::FIELD_HEALTHCARE_SERVICE]));
            }
        }
        if (array_key_exists(self::FIELD_IMAGING_STUDY, $data)) {
            if ($data[self::FIELD_IMAGING_STUDY] instanceof FHIRImagingStudy) {
                $this->setImagingStudy($data[self::FIELD_IMAGING_STUDY]);
            } else {
                $this->setImagingStudy(new FHIRImagingStudy($data[self::FIELD_IMAGING_STUDY]));
            }
        }
        if (array_key_exists(self::FIELD_IMMUNIZATION, $data)) {
            if ($data[self::FIELD_IMMUNIZATION] instanceof FHIRImmunization) {
                $this->setImmunization($data[self::FIELD_IMMUNIZATION]);
            } else {
                $this->setImmunization(new FHIRImmunization($data[self::FIELD_IMMUNIZATION]));
            }
        }
        if (array_key_exists(self::FIELD_IMMUNIZATION_EVALUATION, $data)) {
            if ($data[self::FIELD_IMMUNIZATION_EVALUATION] instanceof FHIRImmunizationEvaluation) {
                $this->setImmunizationEvaluation($data[self::FIELD_IMMUNIZATION_EVALUATION]);
            } else {
                $this->setImmunizationEvaluation(new FHIRImmunizationEvaluation($data[self::FIELD_IMMUNIZATION_EVALUATION]));
            }
        }
        if (array_key_exists(self::FIELD_IMMUNIZATION_RECOMMENDATION, $data)) {
            if ($data[self::FIELD_IMMUNIZATION_RECOMMENDATION] instanceof FHIRImmunizationRecommendation) {
                $this->setImmunizationRecommendation($data[self::FIELD_IMMUNIZATION_RECOMMENDATION]);
            } else {
                $this->setImmunizationRecommendation(new FHIRImmunizationRecommendation($data[self::FIELD_IMMUNIZATION_RECOMMENDATION]));
            }
        }
        if (array_key_exists(self::FIELD_IMPLEMENTATION_GUIDE, $data)) {
            if ($data[self::FIELD_IMPLEMENTATION_GUIDE] instanceof FHIRImplementationGuide) {
                $this->setImplementationGuide($data[self::FIELD_IMPLEMENTATION_GUIDE]);
            } else {
                $this->setImplementationGuide(new FHIRImplementationGuide($data[self::FIELD_IMPLEMENTATION_GUIDE]));
            }
        }
        if (array_key_exists(self::FIELD_INSURANCE_PLAN, $data)) {
            if ($data[self::FIELD_INSURANCE_PLAN] instanceof FHIRInsurancePlan) {
                $this->setInsurancePlan($data[self::FIELD_INSURANCE_PLAN]);
            } else {
                $this->setInsurancePlan(new FHIRInsurancePlan($data[self::FIELD_INSURANCE_PLAN]));
            }
        }
        if (array_key_exists(self::FIELD_INVOICE, $data)) {
            if ($data[self::FIELD_INVOICE] instanceof FHIRInvoice) {
                $this->setInvoice($data[self::FIELD_INVOICE]);
            } else {
                $this->setInvoice(new FHIRInvoice($data[self::FIELD_INVOICE]));
            }
        }
        if (array_key_exists(self::FIELD_LIBRARY, $data)) {
            if ($data[self::FIELD_LIBRARY] instanceof FHIRLibrary) {
                $this->setLibrary($data[self::FIELD_LIBRARY]);
            } else {
                $this->setLibrary(new FHIRLibrary($data[self::FIELD_LIBRARY]));
            }
        }
        if (array_key_exists(self::FIELD_LINKAGE, $data)) {
            if ($data[self::FIELD_LINKAGE] instanceof FHIRLinkage) {
                $this->setLinkage($data[self::FIELD_LINKAGE]);
            } else {
                $this->setLinkage(new FHIRLinkage($data[self::FIELD_LINKAGE]));
            }
        }
        if (array_key_exists(self::FIELD_LIST, $data)) {
            if ($data[self::FIELD_LIST] instanceof FHIRList) {
                $this->setList($data[self::FIELD_LIST]);
            } else {
                $this->setList(new FHIRList($data[self::FIELD_LIST]));
            }
        }
        if (array_key_exists(self::FIELD_LOCATION, $data)) {
            if ($data[self::FIELD_LOCATION] instanceof FHIRLocation) {
                $this->setLocation($data[self::FIELD_LOCATION]);
            } else {
                $this->setLocation(new FHIRLocation($data[self::FIELD_LOCATION]));
            }
        }
        if (array_key_exists(self::FIELD_MEASURE, $data)) {
            if ($data[self::FIELD_MEASURE] instanceof FHIRMeasure) {
                $this->setMeasure($data[self::FIELD_MEASURE]);
            } else {
                $this->setMeasure(new FHIRMeasure($data[self::FIELD_MEASURE]));
            }
        }
        if (array_key_exists(self::FIELD_MEASURE_REPORT, $data)) {
            if ($data[self::FIELD_MEASURE_REPORT] instanceof FHIRMeasureReport) {
                $this->setMeasureReport($data[self::FIELD_MEASURE_REPORT]);
            } else {
                $this->setMeasureReport(new FHIRMeasureReport($data[self::FIELD_MEASURE_REPORT]));
            }
        }
        if (array_key_exists(self::FIELD_MEDIA, $data)) {
            if ($data[self::FIELD_MEDIA] instanceof FHIRMedia) {
                $this->setMedia($data[self::FIELD_MEDIA]);
            } else {
                $this->setMedia(new FHIRMedia($data[self::FIELD_MEDIA]));
            }
        }
        if (array_key_exists(self::FIELD_MEDICATION, $data)) {
            if ($data[self::FIELD_MEDICATION] instanceof FHIRMedication) {
                $this->setMedication($data[self::FIELD_MEDICATION]);
            } else {
                $this->setMedication(new FHIRMedication($data[self::FIELD_MEDICATION]));
            }
        }
        if (array_key_exists(self::FIELD_MEDICATION_ADMINISTRATION, $data)) {
            if ($data[self::FIELD_MEDICATION_ADMINISTRATION] instanceof FHIRMedicationAdministration) {
                $this->setMedicationAdministration($data[self::FIELD_MEDICATION_ADMINISTRATION]);
            } else {
                $this->setMedicationAdministration(new FHIRMedicationAdministration($data[self::FIELD_MEDICATION_ADMINISTRATION]));
            }
        }
        if (array_key_exists(self::FIELD_MEDICATION_DISPENSE, $data)) {
            if ($data[self::FIELD_MEDICATION_DISPENSE] instanceof FHIRMedicationDispense) {
                $this->setMedicationDispense($data[self::FIELD_MEDICATION_DISPENSE]);
            } else {
                $this->setMedicationDispense(new FHIRMedicationDispense($data[self::FIELD_MEDICATION_DISPENSE]));
            }
        }
        if (array_key_exists(self::FIELD_MEDICATION_KNOWLEDGE, $data)) {
            if ($data[self::FIELD_MEDICATION_KNOWLEDGE] instanceof FHIRMedicationKnowledge) {
                $this->setMedicationKnowledge($data[self::FIELD_MEDICATION_KNOWLEDGE]);
            } else {
                $this->setMedicationKnowledge(new FHIRMedicationKnowledge($data[self::FIELD_MEDICATION_KNOWLEDGE]));
            }
        }
        if (array_key_exists(self::FIELD_MEDICATION_REQUEST, $data)) {
            if ($data[self::FIELD_MEDICATION_REQUEST] instanceof FHIRMedicationRequest) {
                $this->setMedicationRequest($data[self::FIELD_MEDICATION_REQUEST]);
            } else {
                $this->setMedicationRequest(new FHIRMedicationRequest($data[self::FIELD_MEDICATION_REQUEST]));
            }
        }
        if (array_key_exists(self::FIELD_MEDICATION_STATEMENT, $data)) {
            if ($data[self::FIELD_MEDICATION_STATEMENT] instanceof FHIRMedicationStatement) {
                $this->setMedicationStatement($data[self::FIELD_MEDICATION_STATEMENT]);
            } else {
                $this->setMedicationStatement(new FHIRMedicationStatement($data[self::FIELD_MEDICATION_STATEMENT]));
            }
        }
        if (array_key_exists(self::FIELD_MEDICINAL_PRODUCT, $data)) {
            if ($data[self::FIELD_MEDICINAL_PRODUCT] instanceof FHIRMedicinalProduct) {
                $this->setMedicinalProduct($data[self::FIELD_MEDICINAL_PRODUCT]);
            } else {
                $this->setMedicinalProduct(new FHIRMedicinalProduct($data[self::FIELD_MEDICINAL_PRODUCT]));
            }
        }
        if (array_key_exists(self::FIELD_MEDICINAL_PRODUCT_AUTHORIZATION, $data)) {
            if ($data[self::FIELD_MEDICINAL_PRODUCT_AUTHORIZATION] instanceof FHIRMedicinalProductAuthorization) {
                $this->setMedicinalProductAuthorization($data[self::FIELD_MEDICINAL_PRODUCT_AUTHORIZATION]);
            } else {
                $this->setMedicinalProductAuthorization(new FHIRMedicinalProductAuthorization($data[self::FIELD_MEDICINAL_PRODUCT_AUTHORIZATION]));
            }
        }
        if (array_key_exists(self::FIELD_MEDICINAL_PRODUCT_CONTRAINDICATION, $data)) {
            if ($data[self::FIELD_MEDICINAL_PRODUCT_CONTRAINDICATION] instanceof FHIRMedicinalProductContraindication) {
                $this->setMedicinalProductContraindication($data[self::FIELD_MEDICINAL_PRODUCT_CONTRAINDICATION]);
            } else {
                $this->setMedicinalProductContraindication(new FHIRMedicinalProductContraindication($data[self::FIELD_MEDICINAL_PRODUCT_CONTRAINDICATION]));
            }
        }
        if (array_key_exists(self::FIELD_MEDICINAL_PRODUCT_INDICATION, $data)) {
            if ($data[self::FIELD_MEDICINAL_PRODUCT_INDICATION] instanceof FHIRMedicinalProductIndication) {
                $this->setMedicinalProductIndication($data[self::FIELD_MEDICINAL_PRODUCT_INDICATION]);
            } else {
                $this->setMedicinalProductIndication(new FHIRMedicinalProductIndication($data[self::FIELD_MEDICINAL_PRODUCT_INDICATION]));
            }
        }
        if (array_key_exists(self::FIELD_MEDICINAL_PRODUCT_INGREDIENT, $data)) {
            if ($data[self::FIELD_MEDICINAL_PRODUCT_INGREDIENT] instanceof FHIRMedicinalProductIngredient) {
                $this->setMedicinalProductIngredient($data[self::FIELD_MEDICINAL_PRODUCT_INGREDIENT]);
            } else {
                $this->setMedicinalProductIngredient(new FHIRMedicinalProductIngredient($data[self::FIELD_MEDICINAL_PRODUCT_INGREDIENT]));
            }
        }
        if (array_key_exists(self::FIELD_MEDICINAL_PRODUCT_INTERACTION, $data)) {
            if ($data[self::FIELD_MEDICINAL_PRODUCT_INTERACTION] instanceof FHIRMedicinalProductInteraction) {
                $this->setMedicinalProductInteraction($data[self::FIELD_MEDICINAL_PRODUCT_INTERACTION]);
            } else {
                $this->setMedicinalProductInteraction(new FHIRMedicinalProductInteraction($data[self::FIELD_MEDICINAL_PRODUCT_INTERACTION]));
            }
        }
        if (array_key_exists(self::FIELD_MEDICINAL_PRODUCT_MANUFACTURED, $data)) {
            if ($data[self::FIELD_MEDICINAL_PRODUCT_MANUFACTURED] instanceof FHIRMedicinalProductManufactured) {
                $this->setMedicinalProductManufactured($data[self::FIELD_MEDICINAL_PRODUCT_MANUFACTURED]);
            } else {
                $this->setMedicinalProductManufactured(new FHIRMedicinalProductManufactured($data[self::FIELD_MEDICINAL_PRODUCT_MANUFACTURED]));
            }
        }
        if (array_key_exists(self::FIELD_MEDICINAL_PRODUCT_PACKAGED, $data)) {
            if ($data[self::FIELD_MEDICINAL_PRODUCT_PACKAGED] instanceof FHIRMedicinalProductPackaged) {
                $this->setMedicinalProductPackaged($data[self::FIELD_MEDICINAL_PRODUCT_PACKAGED]);
            } else {
                $this->setMedicinalProductPackaged(new FHIRMedicinalProductPackaged($data[self::FIELD_MEDICINAL_PRODUCT_PACKAGED]));
            }
        }
        if (array_key_exists(self::FIELD_MEDICINAL_PRODUCT_PHARMACEUTICAL, $data)) {
            if ($data[self::FIELD_MEDICINAL_PRODUCT_PHARMACEUTICAL] instanceof FHIRMedicinalProductPharmaceutical) {
                $this->setMedicinalProductPharmaceutical($data[self::FIELD_MEDICINAL_PRODUCT_PHARMACEUTICAL]);
            } else {
                $this->setMedicinalProductPharmaceutical(new FHIRMedicinalProductPharmaceutical($data[self::FIELD_MEDICINAL_PRODUCT_PHARMACEUTICAL]));
            }
        }
        if (array_key_exists(self::FIELD_MEDICINAL_PRODUCT_UNDESIRABLE_EFFECT, $data)) {
            if ($data[self::FIELD_MEDICINAL_PRODUCT_UNDESIRABLE_EFFECT] instanceof FHIRMedicinalProductUndesirableEffect) {
                $this->setMedicinalProductUndesirableEffect($data[self::FIELD_MEDICINAL_PRODUCT_UNDESIRABLE_EFFECT]);
            } else {
                $this->setMedicinalProductUndesirableEffect(new FHIRMedicinalProductUndesirableEffect($data[self::FIELD_MEDICINAL_PRODUCT_UNDESIRABLE_EFFECT]));
            }
        }
        if (array_key_exists(self::FIELD_MESSAGE_DEFINITION, $data)) {
            if ($data[self::FIELD_MESSAGE_DEFINITION] instanceof FHIRMessageDefinition) {
                $this->setMessageDefinition($data[self::FIELD_MESSAGE_DEFINITION]);
            } else {
                $this->setMessageDefinition(new FHIRMessageDefinition($data[self::FIELD_MESSAGE_DEFINITION]));
            }
        }
        if (array_key_exists(self::FIELD_MESSAGE_HEADER, $data)) {
            if ($data[self::FIELD_MESSAGE_HEADER] instanceof FHIRMessageHeader) {
                $this->setMessageHeader($data[self::FIELD_MESSAGE_HEADER]);
            } else {
                $this->setMessageHeader(new FHIRMessageHeader($data[self::FIELD_MESSAGE_HEADER]));
            }
        }
        if (array_key_exists(self::FIELD_MOLECULAR_SEQUENCE, $data)) {
            if ($data[self::FIELD_MOLECULAR_SEQUENCE] instanceof FHIRMolecularSequence) {
                $this->setMolecularSequence($data[self::FIELD_MOLECULAR_SEQUENCE]);
            } else {
                $this->setMolecularSequence(new FHIRMolecularSequence($data[self::FIELD_MOLECULAR_SEQUENCE]));
            }
        }
        if (array_key_exists(self::FIELD_NAMING_SYSTEM, $data)) {
            if ($data[self::FIELD_NAMING_SYSTEM] instanceof FHIRNamingSystem) {
                $this->setNamingSystem($data[self::FIELD_NAMING_SYSTEM]);
            } else {
                $this->setNamingSystem(new FHIRNamingSystem($data[self::FIELD_NAMING_SYSTEM]));
            }
        }
        if (array_key_exists(self::FIELD_NUTRITION_ORDER, $data)) {
            if ($data[self::FIELD_NUTRITION_ORDER] instanceof FHIRNutritionOrder) {
                $this->setNutritionOrder($data[self::FIELD_NUTRITION_ORDER]);
            } else {
                $this->setNutritionOrder(new FHIRNutritionOrder($data[self::FIELD_NUTRITION_ORDER]));
            }
        }
        if (array_key_exists(self::FIELD_OBSERVATION, $data)) {
            if ($data[self::FIELD_OBSERVATION] instanceof FHIRObservation) {
                $this->setObservation($data[self::FIELD_OBSERVATION]);
            } else {
                $this->setObservation(new FHIRObservation($data[self::FIELD_OBSERVATION]));
            }
        }
        if (array_key_exists(self::FIELD_OBSERVATION_DEFINITION, $data)) {
            if ($data[self::FIELD_OBSERVATION_DEFINITION] instanceof FHIRObservationDefinition) {
                $this->setObservationDefinition($data[self::FIELD_OBSERVATION_DEFINITION]);
            } else {
                $this->setObservationDefinition(new FHIRObservationDefinition($data[self::FIELD_OBSERVATION_DEFINITION]));
            }
        }
        if (array_key_exists(self::FIELD_OPERATION_DEFINITION, $data)) {
            if ($data[self::FIELD_OPERATION_DEFINITION] instanceof FHIROperationDefinition) {
                $this->setOperationDefinition($data[self::FIELD_OPERATION_DEFINITION]);
            } else {
                $this->setOperationDefinition(new FHIROperationDefinition($data[self::FIELD_OPERATION_DEFINITION]));
            }
        }
        if (array_key_exists(self::FIELD_OPERATION_OUTCOME, $data)) {
            if ($data[self::FIELD_OPERATION_OUTCOME] instanceof FHIROperationOutcome) {
                $this->setOperationOutcome($data[self::FIELD_OPERATION_OUTCOME]);
            } else {
                $this->setOperationOutcome(new FHIROperationOutcome($data[self::FIELD_OPERATION_OUTCOME]));
            }
        }
        if (array_key_exists(self::FIELD_ORGANIZATION, $data)) {
            if ($data[self::FIELD_ORGANIZATION] instanceof FHIROrganization) {
                $this->setOrganization($data[self::FIELD_ORGANIZATION]);
            } else {
                $this->setOrganization(new FHIROrganization($data[self::FIELD_ORGANIZATION]));
            }
        }
        if (array_key_exists(self::FIELD_ORGANIZATION_AFFILIATION, $data)) {
            if ($data[self::FIELD_ORGANIZATION_AFFILIATION] instanceof FHIROrganizationAffiliation) {
                $this->setOrganizationAffiliation($data[self::FIELD_ORGANIZATION_AFFILIATION]);
            } else {
                $this->setOrganizationAffiliation(new FHIROrganizationAffiliation($data[self::FIELD_ORGANIZATION_AFFILIATION]));
            }
        }
        if (array_key_exists(self::FIELD_PATIENT, $data)) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRPatient) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRPatient($data[self::FIELD_PATIENT]));
            }
        }
        if (array_key_exists(self::FIELD_PAYMENT_NOTICE, $data)) {
            if ($data[self::FIELD_PAYMENT_NOTICE] instanceof FHIRPaymentNotice) {
                $this->setPaymentNotice($data[self::FIELD_PAYMENT_NOTICE]);
            } else {
                $this->setPaymentNotice(new FHIRPaymentNotice($data[self::FIELD_PAYMENT_NOTICE]));
            }
        }
        if (array_key_exists(self::FIELD_PAYMENT_RECONCILIATION, $data)) {
            if ($data[self::FIELD_PAYMENT_RECONCILIATION] instanceof FHIRPaymentReconciliation) {
                $this->setPaymentReconciliation($data[self::FIELD_PAYMENT_RECONCILIATION]);
            } else {
                $this->setPaymentReconciliation(new FHIRPaymentReconciliation($data[self::FIELD_PAYMENT_RECONCILIATION]));
            }
        }
        if (array_key_exists(self::FIELD_PERSON, $data)) {
            if ($data[self::FIELD_PERSON] instanceof FHIRPerson) {
                $this->setPerson($data[self::FIELD_PERSON]);
            } else {
                $this->setPerson(new FHIRPerson($data[self::FIELD_PERSON]));
            }
        }
        if (array_key_exists(self::FIELD_PLAN_DEFINITION, $data)) {
            if ($data[self::FIELD_PLAN_DEFINITION] instanceof FHIRPlanDefinition) {
                $this->setPlanDefinition($data[self::FIELD_PLAN_DEFINITION]);
            } else {
                $this->setPlanDefinition(new FHIRPlanDefinition($data[self::FIELD_PLAN_DEFINITION]));
            }
        }
        if (array_key_exists(self::FIELD_PRACTITIONER, $data)) {
            if ($data[self::FIELD_PRACTITIONER] instanceof FHIRPractitioner) {
                $this->setPractitioner($data[self::FIELD_PRACTITIONER]);
            } else {
                $this->setPractitioner(new FHIRPractitioner($data[self::FIELD_PRACTITIONER]));
            }
        }
        if (array_key_exists(self::FIELD_PRACTITIONER_ROLE, $data)) {
            if ($data[self::FIELD_PRACTITIONER_ROLE] instanceof FHIRPractitionerRole) {
                $this->setPractitionerRole($data[self::FIELD_PRACTITIONER_ROLE]);
            } else {
                $this->setPractitionerRole(new FHIRPractitionerRole($data[self::FIELD_PRACTITIONER_ROLE]));
            }
        }
        if (array_key_exists(self::FIELD_PROCEDURE, $data)) {
            if ($data[self::FIELD_PROCEDURE] instanceof FHIRProcedure) {
                $this->setProcedure($data[self::FIELD_PROCEDURE]);
            } else {
                $this->setProcedure(new FHIRProcedure($data[self::FIELD_PROCEDURE]));
            }
        }
        if (array_key_exists(self::FIELD_PROVENANCE, $data)) {
            if ($data[self::FIELD_PROVENANCE] instanceof FHIRProvenance) {
                $this->setProvenance($data[self::FIELD_PROVENANCE]);
            } else {
                $this->setProvenance(new FHIRProvenance($data[self::FIELD_PROVENANCE]));
            }
        }
        if (array_key_exists(self::FIELD_QUESTIONNAIRE, $data)) {
            if ($data[self::FIELD_QUESTIONNAIRE] instanceof FHIRQuestionnaire) {
                $this->setQuestionnaire($data[self::FIELD_QUESTIONNAIRE]);
            } else {
                $this->setQuestionnaire(new FHIRQuestionnaire($data[self::FIELD_QUESTIONNAIRE]));
            }
        }
        if (array_key_exists(self::FIELD_QUESTIONNAIRE_RESPONSE, $data)) {
            if ($data[self::FIELD_QUESTIONNAIRE_RESPONSE] instanceof FHIRQuestionnaireResponse) {
                $this->setQuestionnaireResponse($data[self::FIELD_QUESTIONNAIRE_RESPONSE]);
            } else {
                $this->setQuestionnaireResponse(new FHIRQuestionnaireResponse($data[self::FIELD_QUESTIONNAIRE_RESPONSE]));
            }
        }
        if (array_key_exists(self::FIELD_RELATED_PERSON, $data)) {
            if ($data[self::FIELD_RELATED_PERSON] instanceof FHIRRelatedPerson) {
                $this->setRelatedPerson($data[self::FIELD_RELATED_PERSON]);
            } else {
                $this->setRelatedPerson(new FHIRRelatedPerson($data[self::FIELD_RELATED_PERSON]));
            }
        }
        if (array_key_exists(self::FIELD_REQUEST_GROUP, $data)) {
            if ($data[self::FIELD_REQUEST_GROUP] instanceof FHIRRequestGroup) {
                $this->setRequestGroup($data[self::FIELD_REQUEST_GROUP]);
            } else {
                $this->setRequestGroup(new FHIRRequestGroup($data[self::FIELD_REQUEST_GROUP]));
            }
        }
        if (array_key_exists(self::FIELD_RESEARCH_DEFINITION, $data)) {
            if ($data[self::FIELD_RESEARCH_DEFINITION] instanceof FHIRResearchDefinition) {
                $this->setResearchDefinition($data[self::FIELD_RESEARCH_DEFINITION]);
            } else {
                $this->setResearchDefinition(new FHIRResearchDefinition($data[self::FIELD_RESEARCH_DEFINITION]));
            }
        }
        if (array_key_exists(self::FIELD_RESEARCH_ELEMENT_DEFINITION, $data)) {
            if ($data[self::FIELD_RESEARCH_ELEMENT_DEFINITION] instanceof FHIRResearchElementDefinition) {
                $this->setResearchElementDefinition($data[self::FIELD_RESEARCH_ELEMENT_DEFINITION]);
            } else {
                $this->setResearchElementDefinition(new FHIRResearchElementDefinition($data[self::FIELD_RESEARCH_ELEMENT_DEFINITION]));
            }
        }
        if (array_key_exists(self::FIELD_RESEARCH_STUDY, $data)) {
            if ($data[self::FIELD_RESEARCH_STUDY] instanceof FHIRResearchStudy) {
                $this->setResearchStudy($data[self::FIELD_RESEARCH_STUDY]);
            } else {
                $this->setResearchStudy(new FHIRResearchStudy($data[self::FIELD_RESEARCH_STUDY]));
            }
        }
        if (array_key_exists(self::FIELD_RESEARCH_SUBJECT, $data)) {
            if ($data[self::FIELD_RESEARCH_SUBJECT] instanceof FHIRResearchSubject) {
                $this->setResearchSubject($data[self::FIELD_RESEARCH_SUBJECT]);
            } else {
                $this->setResearchSubject(new FHIRResearchSubject($data[self::FIELD_RESEARCH_SUBJECT]));
            }
        }
        if (array_key_exists(self::FIELD_RISK_ASSESSMENT, $data)) {
            if ($data[self::FIELD_RISK_ASSESSMENT] instanceof FHIRRiskAssessment) {
                $this->setRiskAssessment($data[self::FIELD_RISK_ASSESSMENT]);
            } else {
                $this->setRiskAssessment(new FHIRRiskAssessment($data[self::FIELD_RISK_ASSESSMENT]));
            }
        }
        if (array_key_exists(self::FIELD_RISK_EVIDENCE_SYNTHESIS, $data)) {
            if ($data[self::FIELD_RISK_EVIDENCE_SYNTHESIS] instanceof FHIRRiskEvidenceSynthesis) {
                $this->setRiskEvidenceSynthesis($data[self::FIELD_RISK_EVIDENCE_SYNTHESIS]);
            } else {
                $this->setRiskEvidenceSynthesis(new FHIRRiskEvidenceSynthesis($data[self::FIELD_RISK_EVIDENCE_SYNTHESIS]));
            }
        }
        if (array_key_exists(self::FIELD_SCHEDULE, $data)) {
            if ($data[self::FIELD_SCHEDULE] instanceof FHIRSchedule) {
                $this->setSchedule($data[self::FIELD_SCHEDULE]);
            } else {
                $this->setSchedule(new FHIRSchedule($data[self::FIELD_SCHEDULE]));
            }
        }
        if (array_key_exists(self::FIELD_SEARCH_PARAMETER, $data)) {
            if ($data[self::FIELD_SEARCH_PARAMETER] instanceof FHIRSearchParameter) {
                $this->setSearchParameter($data[self::FIELD_SEARCH_PARAMETER]);
            } else {
                $this->setSearchParameter(new FHIRSearchParameter($data[self::FIELD_SEARCH_PARAMETER]));
            }
        }
        if (array_key_exists(self::FIELD_SERVICE_REQUEST, $data)) {
            if ($data[self::FIELD_SERVICE_REQUEST] instanceof FHIRServiceRequest) {
                $this->setServiceRequest($data[self::FIELD_SERVICE_REQUEST]);
            } else {
                $this->setServiceRequest(new FHIRServiceRequest($data[self::FIELD_SERVICE_REQUEST]));
            }
        }
        if (array_key_exists(self::FIELD_SLOT, $data)) {
            if ($data[self::FIELD_SLOT] instanceof FHIRSlot) {
                $this->setSlot($data[self::FIELD_SLOT]);
            } else {
                $this->setSlot(new FHIRSlot($data[self::FIELD_SLOT]));
            }
        }
        if (array_key_exists(self::FIELD_SPECIMEN, $data)) {
            if ($data[self::FIELD_SPECIMEN] instanceof FHIRSpecimen) {
                $this->setSpecimen($data[self::FIELD_SPECIMEN]);
            } else {
                $this->setSpecimen(new FHIRSpecimen($data[self::FIELD_SPECIMEN]));
            }
        }
        if (array_key_exists(self::FIELD_SPECIMEN_DEFINITION, $data)) {
            if ($data[self::FIELD_SPECIMEN_DEFINITION] instanceof FHIRSpecimenDefinition) {
                $this->setSpecimenDefinition($data[self::FIELD_SPECIMEN_DEFINITION]);
            } else {
                $this->setSpecimenDefinition(new FHIRSpecimenDefinition($data[self::FIELD_SPECIMEN_DEFINITION]));
            }
        }
        if (array_key_exists(self::FIELD_STRUCTURE_DEFINITION, $data)) {
            if ($data[self::FIELD_STRUCTURE_DEFINITION] instanceof FHIRStructureDefinition) {
                $this->setStructureDefinition($data[self::FIELD_STRUCTURE_DEFINITION]);
            } else {
                $this->setStructureDefinition(new FHIRStructureDefinition($data[self::FIELD_STRUCTURE_DEFINITION]));
            }
        }
        if (array_key_exists(self::FIELD_STRUCTURE_MAP, $data)) {
            if ($data[self::FIELD_STRUCTURE_MAP] instanceof FHIRStructureMap) {
                $this->setStructureMap($data[self::FIELD_STRUCTURE_MAP]);
            } else {
                $this->setStructureMap(new FHIRStructureMap($data[self::FIELD_STRUCTURE_MAP]));
            }
        }
        if (array_key_exists(self::FIELD_SUBSCRIPTION, $data)) {
            if ($data[self::FIELD_SUBSCRIPTION] instanceof FHIRSubscription) {
                $this->setSubscription($data[self::FIELD_SUBSCRIPTION]);
            } else {
                $this->setSubscription(new FHIRSubscription($data[self::FIELD_SUBSCRIPTION]));
            }
        }
        if (array_key_exists(self::FIELD_SUBSTANCE, $data)) {
            if ($data[self::FIELD_SUBSTANCE] instanceof FHIRSubstance) {
                $this->setSubstance($data[self::FIELD_SUBSTANCE]);
            } else {
                $this->setSubstance(new FHIRSubstance($data[self::FIELD_SUBSTANCE]));
            }
        }
        if (array_key_exists(self::FIELD_SUBSTANCE_NUCLEIC_ACID, $data)) {
            if ($data[self::FIELD_SUBSTANCE_NUCLEIC_ACID] instanceof FHIRSubstanceNucleicAcid) {
                $this->setSubstanceNucleicAcid($data[self::FIELD_SUBSTANCE_NUCLEIC_ACID]);
            } else {
                $this->setSubstanceNucleicAcid(new FHIRSubstanceNucleicAcid($data[self::FIELD_SUBSTANCE_NUCLEIC_ACID]));
            }
        }
        if (array_key_exists(self::FIELD_SUBSTANCE_POLYMER, $data)) {
            if ($data[self::FIELD_SUBSTANCE_POLYMER] instanceof FHIRSubstancePolymer) {
                $this->setSubstancePolymer($data[self::FIELD_SUBSTANCE_POLYMER]);
            } else {
                $this->setSubstancePolymer(new FHIRSubstancePolymer($data[self::FIELD_SUBSTANCE_POLYMER]));
            }
        }
        if (array_key_exists(self::FIELD_SUBSTANCE_PROTEIN, $data)) {
            if ($data[self::FIELD_SUBSTANCE_PROTEIN] instanceof FHIRSubstanceProtein) {
                $this->setSubstanceProtein($data[self::FIELD_SUBSTANCE_PROTEIN]);
            } else {
                $this->setSubstanceProtein(new FHIRSubstanceProtein($data[self::FIELD_SUBSTANCE_PROTEIN]));
            }
        }
        if (array_key_exists(self::FIELD_SUBSTANCE_REFERENCE_INFORMATION, $data)) {
            if ($data[self::FIELD_SUBSTANCE_REFERENCE_INFORMATION] instanceof FHIRSubstanceReferenceInformation) {
                $this->setSubstanceReferenceInformation($data[self::FIELD_SUBSTANCE_REFERENCE_INFORMATION]);
            } else {
                $this->setSubstanceReferenceInformation(new FHIRSubstanceReferenceInformation($data[self::FIELD_SUBSTANCE_REFERENCE_INFORMATION]));
            }
        }
        if (array_key_exists(self::FIELD_SUBSTANCE_SOURCE_MATERIAL, $data)) {
            if ($data[self::FIELD_SUBSTANCE_SOURCE_MATERIAL] instanceof FHIRSubstanceSourceMaterial) {
                $this->setSubstanceSourceMaterial($data[self::FIELD_SUBSTANCE_SOURCE_MATERIAL]);
            } else {
                $this->setSubstanceSourceMaterial(new FHIRSubstanceSourceMaterial($data[self::FIELD_SUBSTANCE_SOURCE_MATERIAL]));
            }
        }
        if (array_key_exists(self::FIELD_SUBSTANCE_SPECIFICATION, $data)) {
            if ($data[self::FIELD_SUBSTANCE_SPECIFICATION] instanceof FHIRSubstanceSpecification) {
                $this->setSubstanceSpecification($data[self::FIELD_SUBSTANCE_SPECIFICATION]);
            } else {
                $this->setSubstanceSpecification(new FHIRSubstanceSpecification($data[self::FIELD_SUBSTANCE_SPECIFICATION]));
            }
        }
        if (array_key_exists(self::FIELD_SUPPLY_DELIVERY, $data)) {
            if ($data[self::FIELD_SUPPLY_DELIVERY] instanceof FHIRSupplyDelivery) {
                $this->setSupplyDelivery($data[self::FIELD_SUPPLY_DELIVERY]);
            } else {
                $this->setSupplyDelivery(new FHIRSupplyDelivery($data[self::FIELD_SUPPLY_DELIVERY]));
            }
        }
        if (array_key_exists(self::FIELD_SUPPLY_REQUEST, $data)) {
            if ($data[self::FIELD_SUPPLY_REQUEST] instanceof FHIRSupplyRequest) {
                $this->setSupplyRequest($data[self::FIELD_SUPPLY_REQUEST]);
            } else {
                $this->setSupplyRequest(new FHIRSupplyRequest($data[self::FIELD_SUPPLY_REQUEST]));
            }
        }
        if (array_key_exists(self::FIELD_TASK, $data)) {
            if ($data[self::FIELD_TASK] instanceof FHIRTask) {
                $this->setTask($data[self::FIELD_TASK]);
            } else {
                $this->setTask(new FHIRTask($data[self::FIELD_TASK]));
            }
        }
        if (array_key_exists(self::FIELD_TERMINOLOGY_CAPABILITIES, $data)) {
            if ($data[self::FIELD_TERMINOLOGY_CAPABILITIES] instanceof FHIRTerminologyCapabilities) {
                $this->setTerminologyCapabilities($data[self::FIELD_TERMINOLOGY_CAPABILITIES]);
            } else {
                $this->setTerminologyCapabilities(new FHIRTerminologyCapabilities($data[self::FIELD_TERMINOLOGY_CAPABILITIES]));
            }
        }
        if (array_key_exists(self::FIELD_TEST_REPORT, $data)) {
            if ($data[self::FIELD_TEST_REPORT] instanceof FHIRTestReport) {
                $this->setTestReport($data[self::FIELD_TEST_REPORT]);
            } else {
                $this->setTestReport(new FHIRTestReport($data[self::FIELD_TEST_REPORT]));
            }
        }
        if (array_key_exists(self::FIELD_TEST_SCRIPT, $data)) {
            if ($data[self::FIELD_TEST_SCRIPT] instanceof FHIRTestScript) {
                $this->setTestScript($data[self::FIELD_TEST_SCRIPT]);
            } else {
                $this->setTestScript(new FHIRTestScript($data[self::FIELD_TEST_SCRIPT]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_SET, $data)) {
            if ($data[self::FIELD_VALUE_SET] instanceof FHIRValueSet) {
                $this->setValueSet($data[self::FIELD_VALUE_SET]);
            } else {
                $this->setValueSet(new FHIRValueSet($data[self::FIELD_VALUE_SET]));
            }
        }
        if (array_key_exists(self::FIELD_VERIFICATION_RESULT, $data)) {
            if ($data[self::FIELD_VERIFICATION_RESULT] instanceof FHIRVerificationResult) {
                $this->setVerificationResult($data[self::FIELD_VERIFICATION_RESULT]);
            } else {
                $this->setVerificationResult(new FHIRVerificationResult($data[self::FIELD_VERIFICATION_RESULT]));
            }
        }
        if (array_key_exists(self::FIELD_VISION_PRESCRIPTION, $data)) {
            if ($data[self::FIELD_VISION_PRESCRIPTION] instanceof FHIRVisionPrescription) {
                $this->setVisionPrescription($data[self::FIELD_VISION_PRESCRIPTION]);
            } else {
                $this->setVisionPrescription(new FHIRVisionPrescription($data[self::FIELD_VISION_PRESCRIPTION]));
            }
        }
        if (array_key_exists(self::FIELD_PARAMETERS, $data)) {
            if ($data[self::FIELD_PARAMETERS] instanceof FHIRParameters) {
                $this->setParameters($data[self::FIELD_PARAMETERS]);
            } else {
                $this->setParameters(new FHIRParameters($data[self::FIELD_PARAMETERS]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A financial tool for tracking value accrued for a particular purpose. In the
     * healthcare field, used to track charges for a patient, cost centers, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAccount
     */
    public function getAccount(): null|FHIRAccount
    {
        return $this->Account;
    }

    /**
     * A financial tool for tracking value accrued for a particular purpose. In the
     * healthcare field, used to track charges for a patient, cost centers, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAccount $Account
     * @return static
     */
    public function setAccount(null|FHIRAccount $Account = null): self
    {
        if (null === $Account) {
            $Account = new FHIRAccount();
        }
        $this->_trackValueSet($this->Account, $Account);
        $this->Account = $Account;
        return $this;
    }

    /**
     * This resource allows for the definition of some activity to be performed,
     * independent of a particular patient, practitioner, or other performance context.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRActivityDefinition
     */
    public function getActivityDefinition(): null|FHIRActivityDefinition
    {
        return $this->ActivityDefinition;
    }

    /**
     * This resource allows for the definition of some activity to be performed,
     * independent of a particular patient, practitioner, or other performance context.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRActivityDefinition $ActivityDefinition
     * @return static
     */
    public function setActivityDefinition(null|FHIRActivityDefinition $ActivityDefinition = null): self
    {
        if (null === $ActivityDefinition) {
            $ActivityDefinition = new FHIRActivityDefinition();
        }
        $this->_trackValueSet($this->ActivityDefinition, $ActivityDefinition);
        $this->ActivityDefinition = $ActivityDefinition;
        return $this;
    }

    /**
     * Actual or potential/avoided event causing unintended physical injury resulting
     * from or contributed to by medical care, a research study or other healthcare
     * setting factors that requires additional monitoring, treatment, or
     * hospitalization, or that results in death.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     */
    public function getAdverseEvent(): null|FHIRAdverseEvent
    {
        return $this->AdverseEvent;
    }

    /**
     * Actual or potential/avoided event causing unintended physical injury resulting
     * from or contributed to by medical care, a research study or other healthcare
     * setting factors that requires additional monitoring, treatment, or
     * hospitalization, or that results in death.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAdverseEvent $AdverseEvent
     * @return static
     */
    public function setAdverseEvent(null|FHIRAdverseEvent $AdverseEvent = null): self
    {
        if (null === $AdverseEvent) {
            $AdverseEvent = new FHIRAdverseEvent();
        }
        $this->_trackValueSet($this->AdverseEvent, $AdverseEvent);
        $this->AdverseEvent = $AdverseEvent;
        return $this;
    }

    /**
     * Risk of harmful or undesirable, physiological response which is unique to an
     * individual and associated with exposure to a substance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function getAllergyIntolerance(): null|FHIRAllergyIntolerance
    {
        return $this->AllergyIntolerance;
    }

    /**
     * Risk of harmful or undesirable, physiological response which is unique to an
     * individual and associated with exposure to a substance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance $AllergyIntolerance
     * @return static
     */
    public function setAllergyIntolerance(null|FHIRAllergyIntolerance $AllergyIntolerance = null): self
    {
        if (null === $AllergyIntolerance) {
            $AllergyIntolerance = new FHIRAllergyIntolerance();
        }
        $this->_trackValueSet($this->AllergyIntolerance, $AllergyIntolerance);
        $this->AllergyIntolerance = $AllergyIntolerance;
        return $this;
    }

    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function getAppointment(): null|FHIRAppointment
    {
        return $this->Appointment;
    }

    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAppointment $Appointment
     * @return static
     */
    public function setAppointment(null|FHIRAppointment $Appointment = null): self
    {
        if (null === $Appointment) {
            $Appointment = new FHIRAppointment();
        }
        $this->_trackValueSet($this->Appointment, $Appointment);
        $this->Appointment = $Appointment;
        return $this;
    }

    /**
     * A reply to an appointment request for a patient and/or practitioner(s), such as
     * a confirmation or rejection.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse
     */
    public function getAppointmentResponse(): null|FHIRAppointmentResponse
    {
        return $this->AppointmentResponse;
    }

    /**
     * A reply to an appointment request for a patient and/or practitioner(s), such as
     * a confirmation or rejection.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse $AppointmentResponse
     * @return static
     */
    public function setAppointmentResponse(null|FHIRAppointmentResponse $AppointmentResponse = null): self
    {
        if (null === $AppointmentResponse) {
            $AppointmentResponse = new FHIRAppointmentResponse();
        }
        $this->_trackValueSet($this->AppointmentResponse, $AppointmentResponse);
        $this->AppointmentResponse = $AppointmentResponse;
        return $this;
    }

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAuditEvent
     */
    public function getAuditEvent(): null|FHIRAuditEvent
    {
        return $this->AuditEvent;
    }

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAuditEvent $AuditEvent
     * @return static
     */
    public function setAuditEvent(null|FHIRAuditEvent $AuditEvent = null): self
    {
        if (null === $AuditEvent) {
            $AuditEvent = new FHIRAuditEvent();
        }
        $this->_trackValueSet($this->AuditEvent, $AuditEvent);
        $this->AuditEvent = $AuditEvent;
        return $this;
    }

    /**
     * Basic is used for handling concepts not yet defined in FHIR, narrative-only
     * resources that don't map to an existing resource, and custom resources not
     * appropriate for inclusion in the FHIR specification.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBasic
     */
    public function getBasic(): null|FHIRBasic
    {
        return $this->Basic;
    }

    /**
     * Basic is used for handling concepts not yet defined in FHIR, narrative-only
     * resources that don't map to an existing resource, and custom resources not
     * appropriate for inclusion in the FHIR specification.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBasic $Basic
     * @return static
     */
    public function setBasic(null|FHIRBasic $Basic = null): self
    {
        if (null === $Basic) {
            $Basic = new FHIRBasic();
        }
        $this->_trackValueSet($this->Basic, $Basic);
        $this->Basic = $Basic;
        return $this;
    }

    /**
     * A resource that represents the data of a single raw artifact as digital content
     * accessible in its native format. A Binary resource can contain any content,
     * whether text, image, pdf, zip archive, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRBinary
     */
    public function getBinary(): null|FHIRBinary
    {
        return $this->Binary;
    }

    /**
     * A resource that represents the data of a single raw artifact as digital content
     * accessible in its native format. A Binary resource can contain any content,
     * whether text, image, pdf, zip archive, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRBinary $Binary
     * @return static
     */
    public function setBinary(null|FHIRBinary $Binary = null): self
    {
        if (null === $Binary) {
            $Binary = new FHIRBinary();
        }
        $this->_trackValueSet($this->Binary, $Binary);
        $this->Binary = $Binary;
        return $this;
    }

    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct
     */
    public function getBiologicallyDerivedProduct(): null|FHIRBiologicallyDerivedProduct
    {
        return $this->BiologicallyDerivedProduct;
    }

    /**
     * A material substance originating from a biological entity intended to be
     * transplanted or infused into another (possibly the same) biological entity.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct $BiologicallyDerivedProduct
     * @return static
     */
    public function setBiologicallyDerivedProduct(null|FHIRBiologicallyDerivedProduct $BiologicallyDerivedProduct = null): self
    {
        if (null === $BiologicallyDerivedProduct) {
            $BiologicallyDerivedProduct = new FHIRBiologicallyDerivedProduct();
        }
        $this->_trackValueSet($this->BiologicallyDerivedProduct, $BiologicallyDerivedProduct);
        $this->BiologicallyDerivedProduct = $BiologicallyDerivedProduct;
        return $this;
    }

    /**
     * Record details about an anatomical structure. This resource may be used when a
     * coded concept does not provide the necessary detail needed for the use case.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBodyStructure
     */
    public function getBodyStructure(): null|FHIRBodyStructure
    {
        return $this->BodyStructure;
    }

    /**
     * Record details about an anatomical structure. This resource may be used when a
     * coded concept does not provide the necessary detail needed for the use case.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRBodyStructure $BodyStructure
     * @return static
     */
    public function setBodyStructure(null|FHIRBodyStructure $BodyStructure = null): self
    {
        if (null === $BodyStructure) {
            $BodyStructure = new FHIRBodyStructure();
        }
        $this->_trackValueSet($this->BodyStructure, $BodyStructure);
        $this->BodyStructure = $BodyStructure;
        return $this;
    }

    /**
     * A container for a collection of resources.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRBundle
     */
    public function getBundle(): null|FHIRBundle
    {
        return $this->Bundle;
    }

    /**
     * A container for a collection of resources.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRBundle $Bundle
     * @return static
     */
    public function setBundle(null|FHIRBundle $Bundle = null): self
    {
        if (null === $Bundle) {
            $Bundle = new FHIRBundle();
        }
        $this->_trackValueSet($this->Bundle, $Bundle);
        $this->Bundle = $Bundle;
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
     */
    public function getCapabilityStatement(): null|FHIRCapabilityStatement
    {
        return $this->CapabilityStatement;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement $CapabilityStatement
     * @return static
     */
    public function setCapabilityStatement(null|FHIRCapabilityStatement $CapabilityStatement = null): self
    {
        if (null === $CapabilityStatement) {
            $CapabilityStatement = new FHIRCapabilityStatement();
        }
        $this->_trackValueSet($this->CapabilityStatement, $CapabilityStatement);
        $this->CapabilityStatement = $CapabilityStatement;
        return $this;
    }

    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient, group or community for a period of time, possibly
     * limited to care for a specific condition or set of conditions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCarePlan
     */
    public function getCarePlan(): null|FHIRCarePlan
    {
        return $this->CarePlan;
    }

    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient, group or community for a period of time, possibly
     * limited to care for a specific condition or set of conditions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCarePlan $CarePlan
     * @return static
     */
    public function setCarePlan(null|FHIRCarePlan $CarePlan = null): self
    {
        if (null === $CarePlan) {
            $CarePlan = new FHIRCarePlan();
        }
        $this->_trackValueSet($this->CarePlan, $CarePlan);
        $this->CarePlan = $CarePlan;
        return $this;
    }

    /**
     * The Care Team includes all the people and organizations who plan to participate
     * in the coordination and delivery of care for a patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCareTeam
     */
    public function getCareTeam(): null|FHIRCareTeam
    {
        return $this->CareTeam;
    }

    /**
     * The Care Team includes all the people and organizations who plan to participate
     * in the coordination and delivery of care for a patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCareTeam $CareTeam
     * @return static
     */
    public function setCareTeam(null|FHIRCareTeam $CareTeam = null): self
    {
        if (null === $CareTeam) {
            $CareTeam = new FHIRCareTeam();
        }
        $this->_trackValueSet($this->CareTeam, $CareTeam);
        $this->CareTeam = $CareTeam;
        return $this;
    }

    /**
     * Catalog entries are wrappers that contextualize items included in a catalog.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCatalogEntry
     */
    public function getCatalogEntry(): null|FHIRCatalogEntry
    {
        return $this->CatalogEntry;
    }

    /**
     * Catalog entries are wrappers that contextualize items included in a catalog.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCatalogEntry $CatalogEntry
     * @return static
     */
    public function setCatalogEntry(null|FHIRCatalogEntry $CatalogEntry = null): self
    {
        if (null === $CatalogEntry) {
            $CatalogEntry = new FHIRCatalogEntry();
        }
        $this->_trackValueSet($this->CatalogEntry, $CatalogEntry);
        $this->CatalogEntry = $CatalogEntry;
        return $this;
    }

    /**
     * The resource ChargeItem describes the provision of healthcare provider products
     * for a certain patient, therefore referring not only to the product, but
     * containing in addition details of the provision, like date, time, amounts and
     * participating organizations and persons. Main Usage of the ChargeItem is to
     * enable the billing process and internal cost allocation.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function getChargeItem(): null|FHIRChargeItem
    {
        return $this->ChargeItem;
    }

    /**
     * The resource ChargeItem describes the provision of healthcare provider products
     * for a certain patient, therefore referring not only to the product, but
     * containing in addition details of the provision, like date, time, amounts and
     * participating organizations and persons. Main Usage of the ChargeItem is to
     * enable the billing process and internal cost allocation.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem $ChargeItem
     * @return static
     */
    public function setChargeItem(null|FHIRChargeItem $ChargeItem = null): self
    {
        if (null === $ChargeItem) {
            $ChargeItem = new FHIRChargeItem();
        }
        $this->_trackValueSet($this->ChargeItem, $ChargeItem);
        $this->ChargeItem = $ChargeItem;
        return $this;
    }

    /**
     * The ChargeItemDefinition resource provides the properties that apply to the
     * (billing) codes necessary to calculate costs and prices. The properties may
     * differ largely depending on type and realm, therefore this resource gives only a
     * rough structure and requires profiling for each type of billing code system.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
     */
    public function getChargeItemDefinition(): null|FHIRChargeItemDefinition
    {
        return $this->ChargeItemDefinition;
    }

    /**
     * The ChargeItemDefinition resource provides the properties that apply to the
     * (billing) codes necessary to calculate costs and prices. The properties may
     * differ largely depending on type and realm, therefore this resource gives only a
     * rough structure and requires profiling for each type of billing code system.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition $ChargeItemDefinition
     * @return static
     */
    public function setChargeItemDefinition(null|FHIRChargeItemDefinition $ChargeItemDefinition = null): self
    {
        if (null === $ChargeItemDefinition) {
            $ChargeItemDefinition = new FHIRChargeItemDefinition();
        }
        $this->_trackValueSet($this->ChargeItemDefinition, $ChargeItemDefinition);
        $this->ChargeItemDefinition = $ChargeItemDefinition;
        return $this;
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function getClaim(): null|FHIRClaim
    {
        return $this->Claim;
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRClaim $Claim
     * @return static
     */
    public function setClaim(null|FHIRClaim $Claim = null): self
    {
        if (null === $Claim) {
            $Claim = new FHIRClaim();
        }
        $this->_trackValueSet($this->Claim, $Claim);
        $this->Claim = $Claim;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function getClaimResponse(): null|FHIRClaimResponse
    {
        return $this->ClaimResponse;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRClaimResponse $ClaimResponse
     * @return static
     */
    public function setClaimResponse(null|FHIRClaimResponse $ClaimResponse = null): self
    {
        if (null === $ClaimResponse) {
            $ClaimResponse = new FHIRClaimResponse();
        }
        $this->_trackValueSet($this->ClaimResponse, $ClaimResponse);
        $this->ClaimResponse = $ClaimResponse;
        return $this;
    }

    /**
     * A record of a clinical assessment performed to determine what problem(s) may
     * affect the patient and before planning the treatments or management strategies
     * that are best to manage a patient's condition. Assessments are often 1:1 with a
     * clinical consultation / encounter, but this varies greatly depending on the
     * clinical workflow. This resource is called "ClinicalImpression" rather than
     * "ClinicalAssessment" to avoid confusion with the recording of assessment tools
     * such as Apgar score.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRClinicalImpression
     */
    public function getClinicalImpression(): null|FHIRClinicalImpression
    {
        return $this->ClinicalImpression;
    }

    /**
     * A record of a clinical assessment performed to determine what problem(s) may
     * affect the patient and before planning the treatments or management strategies
     * that are best to manage a patient's condition. Assessments are often 1:1 with a
     * clinical consultation / encounter, but this varies greatly depending on the
     * clinical workflow. This resource is called "ClinicalImpression" rather than
     * "ClinicalAssessment" to avoid confusion with the recording of assessment tools
     * such as Apgar score.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRClinicalImpression $ClinicalImpression
     * @return static
     */
    public function setClinicalImpression(null|FHIRClinicalImpression $ClinicalImpression = null): self
    {
        if (null === $ClinicalImpression) {
            $ClinicalImpression = new FHIRClinicalImpression();
        }
        $this->_trackValueSet($this->ClinicalImpression, $ClinicalImpression);
        $this->ClinicalImpression = $ClinicalImpression;
        return $this;
    }

    /**
     * The CodeSystem resource is used to declare the existence of and describe a code
     * system or code system supplement and its key properties, and optionally define a
     * part or all of its content.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    public function getCodeSystem(): null|FHIRCodeSystem
    {
        return $this->CodeSystem;
    }

    /**
     * The CodeSystem resource is used to declare the existence of and describe a code
     * system or code system supplement and its key properties, and optionally define a
     * part or all of its content.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCodeSystem $CodeSystem
     * @return static
     */
    public function setCodeSystem(null|FHIRCodeSystem $CodeSystem = null): self
    {
        if (null === $CodeSystem) {
            $CodeSystem = new FHIRCodeSystem();
        }
        $this->_trackValueSet($this->CodeSystem, $CodeSystem);
        $this->CodeSystem = $CodeSystem;
        return $this;
    }

    /**
     * An occurrence of information being transmitted; e.g. an alert that was sent to a
     * responsible provider, a public health agency that was notified about a
     * reportable condition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCommunication
     */
    public function getCommunication(): null|FHIRCommunication
    {
        return $this->Communication;
    }

    /**
     * An occurrence of information being transmitted; e.g. an alert that was sent to a
     * responsible provider, a public health agency that was notified about a
     * reportable condition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCommunication $Communication
     * @return static
     */
    public function setCommunication(null|FHIRCommunication $Communication = null): self
    {
        if (null === $Communication) {
            $Communication = new FHIRCommunication();
        }
        $this->_trackValueSet($this->Communication, $Communication);
        $this->Communication = $Communication;
        return $this;
    }

    /**
     * A request to convey information; e.g. the CDS system proposes that an alert be
     * sent to a responsible provider, the CDS system proposes that the public health
     * agency be notified about a reportable condition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCommunicationRequest
     */
    public function getCommunicationRequest(): null|FHIRCommunicationRequest
    {
        return $this->CommunicationRequest;
    }

    /**
     * A request to convey information; e.g. the CDS system proposes that an alert be
     * sent to a responsible provider, the CDS system proposes that the public health
     * agency be notified about a reportable condition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCommunicationRequest $CommunicationRequest
     * @return static
     */
    public function setCommunicationRequest(null|FHIRCommunicationRequest $CommunicationRequest = null): self
    {
        if (null === $CommunicationRequest) {
            $CommunicationRequest = new FHIRCommunicationRequest();
        }
        $this->_trackValueSet($this->CommunicationRequest, $CommunicationRequest);
        $this->CommunicationRequest = $CommunicationRequest;
        return $this;
    }

    /**
     * A compartment definition that defines how resources are accessed on a server.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCompartmentDefinition
     */
    public function getCompartmentDefinition(): null|FHIRCompartmentDefinition
    {
        return $this->CompartmentDefinition;
    }

    /**
     * A compartment definition that defines how resources are accessed on a server.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCompartmentDefinition $CompartmentDefinition
     * @return static
     */
    public function setCompartmentDefinition(null|FHIRCompartmentDefinition $CompartmentDefinition = null): self
    {
        if (null === $CompartmentDefinition) {
            $CompartmentDefinition = new FHIRCompartmentDefinition();
        }
        $this->_trackValueSet($this->CompartmentDefinition, $CompartmentDefinition);
        $this->CompartmentDefinition = $CompartmentDefinition;
        return $this;
    }

    /**
     * A set of healthcare-related information that is assembled together into a single
     * logical package that provides a single coherent statement of meaning,
     * establishes its own context and that has clinical attestation with regard to who
     * is making the statement. A Composition defines the structure and narrative
     * content necessary for a document. However, a Composition alone does not
     * constitute a document. Rather, the Composition must be the first entry in a
     * Bundle where Bundle.type=document, and any other resources referenced from
     * Composition must be included as subsequent entries in the Bundle (for example
     * Patient, Practitioner, Encounter, etc.).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRComposition
     */
    public function getComposition(): null|FHIRComposition
    {
        return $this->Composition;
    }

    /**
     * A set of healthcare-related information that is assembled together into a single
     * logical package that provides a single coherent statement of meaning,
     * establishes its own context and that has clinical attestation with regard to who
     * is making the statement. A Composition defines the structure and narrative
     * content necessary for a document. However, a Composition alone does not
     * constitute a document. Rather, the Composition must be the first entry in a
     * Bundle where Bundle.type=document, and any other resources referenced from
     * Composition must be included as subsequent entries in the Bundle (for example
     * Patient, Practitioner, Encounter, etc.).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRComposition $Composition
     * @return static
     */
    public function setComposition(null|FHIRComposition $Composition = null): self
    {
        if (null === $Composition) {
            $Composition = new FHIRComposition();
        }
        $this->_trackValueSet($this->Composition, $Composition);
        $this->Composition = $Composition;
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either concepts in code systems, or data element/data element
     * concepts, or classes in class models.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRConceptMap
     */
    public function getConceptMap(): null|FHIRConceptMap
    {
        return $this->ConceptMap;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either concepts in code systems, or data element/data element
     * concepts, or classes in class models.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRConceptMap $ConceptMap
     * @return static
     */
    public function setConceptMap(null|FHIRConceptMap $ConceptMap = null): self
    {
        if (null === $ConceptMap) {
            $ConceptMap = new FHIRConceptMap();
        }
        $this->_trackValueSet($this->ConceptMap, $ConceptMap);
        $this->ConceptMap = $ConceptMap;
        return $this;
    }

    /**
     * A clinical condition, problem, diagnosis, or other event, situation, issue, or
     * clinical concept that has risen to a level of concern.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCondition
     */
    public function getCondition(): null|FHIRCondition
    {
        return $this->Condition;
    }

    /**
     * A clinical condition, problem, diagnosis, or other event, situation, issue, or
     * clinical concept that has risen to a level of concern.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCondition $Condition
     * @return static
     */
    public function setCondition(null|FHIRCondition $Condition = null): self
    {
        if (null === $Condition) {
            $Condition = new FHIRCondition();
        }
        $this->_trackValueSet($this->Condition, $Condition);
        $this->Condition = $Condition;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRConsent
     */
    public function getConsent(): null|FHIRConsent
    {
        return $this->Consent;
    }

    /**
     * A record of a healthcare consumer’s choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRConsent $Consent
     * @return static
     */
    public function setConsent(null|FHIRConsent $Consent = null): self
    {
        if (null === $Consent) {
            $Consent = new FHIRConsent();
        }
        $this->_trackValueSet($this->Consent, $Consent);
        $this->Consent = $Consent;
        return $this;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function getContract(): null|FHIRContract
    {
        return $this->Contract;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRContract $Contract
     * @return static
     */
    public function setContract(null|FHIRContract $Contract = null): self
    {
        if (null === $Contract) {
            $Contract = new FHIRContract();
        }
        $this->_trackValueSet($this->Contract, $Contract);
        $this->Contract = $Contract;
        return $this;
    }

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage
     */
    public function getCoverage(): null|FHIRCoverage
    {
        return $this->Coverage;
    }

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage $Coverage
     * @return static
     */
    public function setCoverage(null|FHIRCoverage $Coverage = null): self
    {
        if (null === $Coverage) {
            $Coverage = new FHIRCoverage();
        }
        $this->_trackValueSet($this->Coverage, $Coverage);
        $this->Coverage = $Coverage;
        return $this;
    }

    /**
     * The CoverageEligibilityRequest provides patient and insurance coverage
     * information to an insurer for them to respond, in the form of an
     * CoverageEligibilityResponse, with information regarding whether the stated
     * coverage is valid and in-force and optionally to provide the insurance details
     * of the policy.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest
     */
    public function getCoverageEligibilityRequest(): null|FHIRCoverageEligibilityRequest
    {
        return $this->CoverageEligibilityRequest;
    }

    /**
     * The CoverageEligibilityRequest provides patient and insurance coverage
     * information to an insurer for them to respond, in the form of an
     * CoverageEligibilityResponse, with information regarding whether the stated
     * coverage is valid and in-force and optionally to provide the insurance details
     * of the policy.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest $CoverageEligibilityRequest
     * @return static
     */
    public function setCoverageEligibilityRequest(null|FHIRCoverageEligibilityRequest $CoverageEligibilityRequest = null): self
    {
        if (null === $CoverageEligibilityRequest) {
            $CoverageEligibilityRequest = new FHIRCoverageEligibilityRequest();
        }
        $this->_trackValueSet($this->CoverageEligibilityRequest, $CoverageEligibilityRequest);
        $this->CoverageEligibilityRequest = $CoverageEligibilityRequest;
        return $this;
    }

    /**
     * This resource provides eligibility and plan details from the processing of an
     * CoverageEligibilityRequest resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityResponse
     */
    public function getCoverageEligibilityResponse(): null|FHIRCoverageEligibilityResponse
    {
        return $this->CoverageEligibilityResponse;
    }

    /**
     * This resource provides eligibility and plan details from the processing of an
     * CoverageEligibilityRequest resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityResponse $CoverageEligibilityResponse
     * @return static
     */
    public function setCoverageEligibilityResponse(null|FHIRCoverageEligibilityResponse $CoverageEligibilityResponse = null): self
    {
        if (null === $CoverageEligibilityResponse) {
            $CoverageEligibilityResponse = new FHIRCoverageEligibilityResponse();
        }
        $this->_trackValueSet($this->CoverageEligibilityResponse, $CoverageEligibilityResponse);
        $this->CoverageEligibilityResponse = $CoverageEligibilityResponse;
        return $this;
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     */
    public function getDetectedIssue(): null|FHIRDetectedIssue
    {
        return $this->DetectedIssue;
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDetectedIssue $DetectedIssue
     * @return static
     */
    public function setDetectedIssue(null|FHIRDetectedIssue $DetectedIssue = null): self
    {
        if (null === $DetectedIssue) {
            $DetectedIssue = new FHIRDetectedIssue();
        }
        $this->_trackValueSet($this->DetectedIssue, $DetectedIssue);
        $this->DetectedIssue = $DetectedIssue;
        return $this;
    }

    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDevice
     */
    public function getDevice(): null|FHIRDevice
    {
        return $this->Device;
    }

    /**
     * A type of a manufactured item that is used in the provision of healthcare
     * without being substantially changed through that activity. The device may be a
     * medical or non-medical device.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDevice $Device
     * @return static
     */
    public function setDevice(null|FHIRDevice $Device = null): self
    {
        if (null === $Device) {
            $Device = new FHIRDevice();
        }
        $this->_trackValueSet($this->Device, $Device);
        $this->Device = $Device;
        return $this;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDeviceDefinition
     */
    public function getDeviceDefinition(): null|FHIRDeviceDefinition
    {
        return $this->DeviceDefinition;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDeviceDefinition $DeviceDefinition
     * @return static
     */
    public function setDeviceDefinition(null|FHIRDeviceDefinition $DeviceDefinition = null): self
    {
        if (null === $DeviceDefinition) {
            $DeviceDefinition = new FHIRDeviceDefinition();
        }
        $this->_trackValueSet($this->DeviceDefinition, $DeviceDefinition);
        $this->DeviceDefinition = $DeviceDefinition;
        return $this;
    }

    /**
     * Describes a measurement, calculation or setting capability of a medical device.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDeviceMetric
     */
    public function getDeviceMetric(): null|FHIRDeviceMetric
    {
        return $this->DeviceMetric;
    }

    /**
     * Describes a measurement, calculation or setting capability of a medical device.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDeviceMetric $DeviceMetric
     * @return static
     */
    public function setDeviceMetric(null|FHIRDeviceMetric $DeviceMetric = null): self
    {
        if (null === $DeviceMetric) {
            $DeviceMetric = new FHIRDeviceMetric();
        }
        $this->_trackValueSet($this->DeviceMetric, $DeviceMetric);
        $this->DeviceMetric = $DeviceMetric;
        return $this;
    }

    /**
     * Represents a request for a patient to employ a medical device. The device may be
     * an implantable device, or an external assistive device, such as a walker.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDeviceRequest
     */
    public function getDeviceRequest(): null|FHIRDeviceRequest
    {
        return $this->DeviceRequest;
    }

    /**
     * Represents a request for a patient to employ a medical device. The device may be
     * an implantable device, or an external assistive device, such as a walker.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDeviceRequest $DeviceRequest
     * @return static
     */
    public function setDeviceRequest(null|FHIRDeviceRequest $DeviceRequest = null): self
    {
        if (null === $DeviceRequest) {
            $DeviceRequest = new FHIRDeviceRequest();
        }
        $this->_trackValueSet($this->DeviceRequest, $DeviceRequest);
        $this->DeviceRequest = $DeviceRequest;
        return $this;
    }

    /**
     * A record of a device being used by a patient where the record is the result of a
     * report from the patient or another clinician.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDeviceUseStatement
     */
    public function getDeviceUseStatement(): null|FHIRDeviceUseStatement
    {
        return $this->DeviceUseStatement;
    }

    /**
     * A record of a device being used by a patient where the record is the result of a
     * report from the patient or another clinician.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDeviceUseStatement $DeviceUseStatement
     * @return static
     */
    public function setDeviceUseStatement(null|FHIRDeviceUseStatement $DeviceUseStatement = null): self
    {
        if (null === $DeviceUseStatement) {
            $DeviceUseStatement = new FHIRDeviceUseStatement();
        }
        $this->_trackValueSet($this->DeviceUseStatement, $DeviceUseStatement);
        $this->DeviceUseStatement = $DeviceUseStatement;
        return $this;
    }

    /**
     * The findings and interpretation of diagnostic tests performed on patients,
     * groups of patients, devices, and locations, and/or specimens derived from these.
     * The report includes clinical context such as requesting and provider
     * information, and some mix of atomic results, images, textual and coded
     * interpretations, and formatted representation of diagnostic reports.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport
     */
    public function getDiagnosticReport(): null|FHIRDiagnosticReport
    {
        return $this->DiagnosticReport;
    }

    /**
     * The findings and interpretation of diagnostic tests performed on patients,
     * groups of patients, devices, and locations, and/or specimens derived from these.
     * The report includes clinical context such as requesting and provider
     * information, and some mix of atomic results, images, textual and coded
     * interpretations, and formatted representation of diagnostic reports.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport $DiagnosticReport
     * @return static
     */
    public function setDiagnosticReport(null|FHIRDiagnosticReport $DiagnosticReport = null): self
    {
        if (null === $DiagnosticReport) {
            $DiagnosticReport = new FHIRDiagnosticReport();
        }
        $this->_trackValueSet($this->DiagnosticReport, $DiagnosticReport);
        $this->DiagnosticReport = $DiagnosticReport;
        return $this;
    }

    /**
     * A collection of documents compiled for a purpose together with metadata that
     * applies to the collection.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentManifest
     */
    public function getDocumentManifest(): null|FHIRDocumentManifest
    {
        return $this->DocumentManifest;
    }

    /**
     * A collection of documents compiled for a purpose together with metadata that
     * applies to the collection.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentManifest $DocumentManifest
     * @return static
     */
    public function setDocumentManifest(null|FHIRDocumentManifest $DocumentManifest = null): self
    {
        if (null === $DocumentManifest) {
            $DocumentManifest = new FHIRDocumentManifest();
        }
        $this->_trackValueSet($this->DocumentManifest, $DocumentManifest);
        $this->DocumentManifest = $DocumentManifest;
        return $this;
    }

    /**
     * A reference to a document of any kind for any purpose. Provides metadata about
     * the document so that the document can be discovered and managed. The scope of a
     * document is any seralized object with a mime-type, so includes formal patient
     * centric documents (CDA), cliical notes, scanned paper, and non-patient specific
     * documents like policy text.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentReference
     */
    public function getDocumentReference(): null|FHIRDocumentReference
    {
        return $this->DocumentReference;
    }

    /**
     * A reference to a document of any kind for any purpose. Provides metadata about
     * the document so that the document can be discovered and managed. The scope of a
     * document is any seralized object with a mime-type, so includes formal patient
     * centric documents (CDA), cliical notes, scanned paper, and non-patient specific
     * documents like policy text.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentReference $DocumentReference
     * @return static
     */
    public function setDocumentReference(null|FHIRDocumentReference $DocumentReference = null): self
    {
        if (null === $DocumentReference) {
            $DocumentReference = new FHIRDocumentReference();
        }
        $this->_trackValueSet($this->DocumentReference, $DocumentReference);
        $this->DocumentReference = $DocumentReference;
        return $this;
    }

    /**
     * The EffectEvidenceSynthesis resource describes the difference in an outcome
     * between exposures states in a population where the effect estimate is derived
     * from a combination of research studies.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREffectEvidenceSynthesis
     */
    public function getEffectEvidenceSynthesis(): null|FHIREffectEvidenceSynthesis
    {
        return $this->EffectEvidenceSynthesis;
    }

    /**
     * The EffectEvidenceSynthesis resource describes the difference in an outcome
     * between exposures states in a population where the effect estimate is derived
     * from a combination of research studies.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREffectEvidenceSynthesis $EffectEvidenceSynthesis
     * @return static
     */
    public function setEffectEvidenceSynthesis(null|FHIREffectEvidenceSynthesis $EffectEvidenceSynthesis = null): self
    {
        if (null === $EffectEvidenceSynthesis) {
            $EffectEvidenceSynthesis = new FHIREffectEvidenceSynthesis();
        }
        $this->_trackValueSet($this->EffectEvidenceSynthesis, $EffectEvidenceSynthesis);
        $this->EffectEvidenceSynthesis = $EffectEvidenceSynthesis;
        return $this;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREncounter
     */
    public function getEncounter(): null|FHIREncounter
    {
        return $this->Encounter;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREncounter $Encounter
     * @return static
     */
    public function setEncounter(null|FHIREncounter $Encounter = null): self
    {
        if (null === $Encounter) {
            $Encounter = new FHIREncounter();
        }
        $this->_trackValueSet($this->Encounter, $Encounter);
        $this->Encounter = $Encounter;
        return $this;
    }

    /**
     * The technical details of an endpoint that can be used for electronic services,
     * such as for web services providing XDS.b or a REST endpoint for another FHIR
     * server. This may include any security context information.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREndpoint
     */
    public function getEndpoint(): null|FHIREndpoint
    {
        return $this->Endpoint;
    }

    /**
     * The technical details of an endpoint that can be used for electronic services,
     * such as for web services providing XDS.b or a REST endpoint for another FHIR
     * server. This may include any security context information.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREndpoint $Endpoint
     * @return static
     */
    public function setEndpoint(null|FHIREndpoint $Endpoint = null): self
    {
        if (null === $Endpoint) {
            $Endpoint = new FHIREndpoint();
        }
        $this->_trackValueSet($this->Endpoint, $Endpoint);
        $this->Endpoint = $Endpoint;
        return $this;
    }

    /**
     * This resource provides the insurance enrollment details to the insurer regarding
     * a specified coverage.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREnrollmentRequest
     */
    public function getEnrollmentRequest(): null|FHIREnrollmentRequest
    {
        return $this->EnrollmentRequest;
    }

    /**
     * This resource provides the insurance enrollment details to the insurer regarding
     * a specified coverage.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREnrollmentRequest $EnrollmentRequest
     * @return static
     */
    public function setEnrollmentRequest(null|FHIREnrollmentRequest $EnrollmentRequest = null): self
    {
        if (null === $EnrollmentRequest) {
            $EnrollmentRequest = new FHIREnrollmentRequest();
        }
        $this->_trackValueSet($this->EnrollmentRequest, $EnrollmentRequest);
        $this->EnrollmentRequest = $EnrollmentRequest;
        return $this;
    }

    /**
     * This resource provides enrollment and plan details from the processing of an
     * EnrollmentRequest resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREnrollmentResponse
     */
    public function getEnrollmentResponse(): null|FHIREnrollmentResponse
    {
        return $this->EnrollmentResponse;
    }

    /**
     * This resource provides enrollment and plan details from the processing of an
     * EnrollmentRequest resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREnrollmentResponse $EnrollmentResponse
     * @return static
     */
    public function setEnrollmentResponse(null|FHIREnrollmentResponse $EnrollmentResponse = null): self
    {
        if (null === $EnrollmentResponse) {
            $EnrollmentResponse = new FHIREnrollmentResponse();
        }
        $this->_trackValueSet($this->EnrollmentResponse, $EnrollmentResponse);
        $this->EnrollmentResponse = $EnrollmentResponse;
        return $this;
    }

    /**
     * An association between a patient and an organization / healthcare provider(s)
     * during which time encounters may occur. The managing organization assumes a
     * level of responsibility for the patient during this time.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
     */
    public function getEpisodeOfCare(): null|FHIREpisodeOfCare
    {
        return $this->EpisodeOfCare;
    }

    /**
     * An association between a patient and an organization / healthcare provider(s)
     * during which time encounters may occur. The managing organization assumes a
     * level of responsibility for the patient during this time.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare $EpisodeOfCare
     * @return static
     */
    public function setEpisodeOfCare(null|FHIREpisodeOfCare $EpisodeOfCare = null): self
    {
        if (null === $EpisodeOfCare) {
            $EpisodeOfCare = new FHIREpisodeOfCare();
        }
        $this->_trackValueSet($this->EpisodeOfCare, $EpisodeOfCare);
        $this->EpisodeOfCare = $EpisodeOfCare;
        return $this;
    }

    /**
     * The EventDefinition resource provides a reusable description of when a
     * particular event can occur.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREventDefinition
     */
    public function getEventDefinition(): null|FHIREventDefinition
    {
        return $this->EventDefinition;
    }

    /**
     * The EventDefinition resource provides a reusable description of when a
     * particular event can occur.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREventDefinition $EventDefinition
     * @return static
     */
    public function setEventDefinition(null|FHIREventDefinition $EventDefinition = null): self
    {
        if (null === $EventDefinition) {
            $EventDefinition = new FHIREventDefinition();
        }
        $this->_trackValueSet($this->EventDefinition, $EventDefinition);
        $this->EventDefinition = $EventDefinition;
        return $this;
    }

    /**
     * The Evidence resource describes the conditional state (population and any
     * exposures being compared within the population) and outcome (if specified) that
     * the knowledge (evidence, assertion, recommendation) is about.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREvidence
     */
    public function getEvidence(): null|FHIREvidence
    {
        return $this->Evidence;
    }

    /**
     * The Evidence resource describes the conditional state (population and any
     * exposures being compared within the population) and outcome (if specified) that
     * the knowledge (evidence, assertion, recommendation) is about.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREvidence $Evidence
     * @return static
     */
    public function setEvidence(null|FHIREvidence $Evidence = null): self
    {
        if (null === $Evidence) {
            $Evidence = new FHIREvidence();
        }
        $this->_trackValueSet($this->Evidence, $Evidence);
        $this->Evidence = $Evidence;
        return $this;
    }

    /**
     * The EvidenceVariable resource describes a "PICO" element that knowledge
     * (evidence, assertion, recommendation) is about.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREvidenceVariable
     */
    public function getEvidenceVariable(): null|FHIREvidenceVariable
    {
        return $this->EvidenceVariable;
    }

    /**
     * The EvidenceVariable resource describes a "PICO" element that knowledge
     * (evidence, assertion, recommendation) is about.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREvidenceVariable $EvidenceVariable
     * @return static
     */
    public function setEvidenceVariable(null|FHIREvidenceVariable $EvidenceVariable = null): self
    {
        if (null === $EvidenceVariable) {
            $EvidenceVariable = new FHIREvidenceVariable();
        }
        $this->_trackValueSet($this->EvidenceVariable, $EvidenceVariable);
        $this->EvidenceVariable = $EvidenceVariable;
        return $this;
    }

    /**
     * Example of workflow instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRExampleScenario
     */
    public function getExampleScenario(): null|FHIRExampleScenario
    {
        return $this->ExampleScenario;
    }

    /**
     * Example of workflow instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRExampleScenario $ExampleScenario
     * @return static
     */
    public function setExampleScenario(null|FHIRExampleScenario $ExampleScenario = null): self
    {
        if (null === $ExampleScenario) {
            $ExampleScenario = new FHIRExampleScenario();
        }
        $this->_trackValueSet($this->ExampleScenario, $ExampleScenario);
        $this->ExampleScenario = $ExampleScenario;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit
     */
    public function getExplanationOfBenefit(): null|FHIRExplanationOfBenefit
    {
        return $this->ExplanationOfBenefit;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit $ExplanationOfBenefit
     * @return static
     */
    public function setExplanationOfBenefit(null|FHIRExplanationOfBenefit $ExplanationOfBenefit = null): self
    {
        if (null === $ExplanationOfBenefit) {
            $ExplanationOfBenefit = new FHIRExplanationOfBenefit();
        }
        $this->_trackValueSet($this->ExplanationOfBenefit, $ExplanationOfBenefit);
        $this->ExplanationOfBenefit = $ExplanationOfBenefit;
        return $this;
    }

    /**
     * Significant health conditions for a person related to the patient relevant in
     * the context of care for the patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory
     */
    public function getFamilyMemberHistory(): null|FHIRFamilyMemberHistory
    {
        return $this->FamilyMemberHistory;
    }

    /**
     * Significant health conditions for a person related to the patient relevant in
     * the context of care for the patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory $FamilyMemberHistory
     * @return static
     */
    public function setFamilyMemberHistory(null|FHIRFamilyMemberHistory $FamilyMemberHistory = null): self
    {
        if (null === $FamilyMemberHistory) {
            $FamilyMemberHistory = new FHIRFamilyMemberHistory();
        }
        $this->_trackValueSet($this->FamilyMemberHistory, $FamilyMemberHistory);
        $this->FamilyMemberHistory = $FamilyMemberHistory;
        return $this;
    }

    /**
     * Prospective warnings of potential issues when providing care to the patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRFlag
     */
    public function getFlag(): null|FHIRFlag
    {
        return $this->Flag;
    }

    /**
     * Prospective warnings of potential issues when providing care to the patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRFlag $Flag
     * @return static
     */
    public function setFlag(null|FHIRFlag $Flag = null): self
    {
        if (null === $Flag) {
            $Flag = new FHIRFlag();
        }
        $this->_trackValueSet($this->Flag, $Flag);
        $this->Flag = $Flag;
        return $this;
    }

    /**
     * Describes the intended objective(s) for a patient, group or organization care,
     * for example, weight loss, restoring an activity of daily living, obtaining herd
     * immunity via immunization, meeting a process improvement objective, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRGoal
     */
    public function getGoal(): null|FHIRGoal
    {
        return $this->Goal;
    }

    /**
     * Describes the intended objective(s) for a patient, group or organization care,
     * for example, weight loss, restoring an activity of daily living, obtaining herd
     * immunity via immunization, meeting a process improvement objective, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRGoal $Goal
     * @return static
     */
    public function setGoal(null|FHIRGoal $Goal = null): self
    {
        if (null === $Goal) {
            $Goal = new FHIRGoal();
        }
        $this->_trackValueSet($this->Goal, $Goal);
        $this->Goal = $Goal;
        return $this;
    }

    /**
     * A formal computable definition of a graph of resources - that is, a coherent set
     * of resources that form a graph by following references. The Graph Definition
     * resource defines a set and makes rules about the set.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRGraphDefinition
     */
    public function getGraphDefinition(): null|FHIRGraphDefinition
    {
        return $this->GraphDefinition;
    }

    /**
     * A formal computable definition of a graph of resources - that is, a coherent set
     * of resources that form a graph by following references. The Graph Definition
     * resource defines a set and makes rules about the set.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRGraphDefinition $GraphDefinition
     * @return static
     */
    public function setGraphDefinition(null|FHIRGraphDefinition $GraphDefinition = null): self
    {
        if (null === $GraphDefinition) {
            $GraphDefinition = new FHIRGraphDefinition();
        }
        $this->_trackValueSet($this->GraphDefinition, $GraphDefinition);
        $this->GraphDefinition = $GraphDefinition;
        return $this;
    }

    /**
     * Represents a defined collection of entities that may be discussed or acted upon
     * collectively but which are not expected to act collectively, and are not
     * formally or legally recognized; i.e. a collection of entities that isn't an
     * Organization.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRGroup
     */
    public function getGroup(): null|FHIRGroup
    {
        return $this->Group;
    }

    /**
     * Represents a defined collection of entities that may be discussed or acted upon
     * collectively but which are not expected to act collectively, and are not
     * formally or legally recognized; i.e. a collection of entities that isn't an
     * Organization.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRGroup $Group
     * @return static
     */
    public function setGroup(null|FHIRGroup $Group = null): self
    {
        if (null === $Group) {
            $Group = new FHIRGroup();
        }
        $this->_trackValueSet($this->Group, $Group);
        $this->Group = $Group;
        return $this;
    }

    /**
     * A guidance response is the formal response to a guidance request, including any
     * output parameters returned by the evaluation, as well as the description of any
     * proposed actions to be taken.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRGuidanceResponse
     */
    public function getGuidanceResponse(): null|FHIRGuidanceResponse
    {
        return $this->GuidanceResponse;
    }

    /**
     * A guidance response is the formal response to a guidance request, including any
     * output parameters returned by the evaluation, as well as the description of any
     * proposed actions to be taken.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRGuidanceResponse $GuidanceResponse
     * @return static
     */
    public function setGuidanceResponse(null|FHIRGuidanceResponse $GuidanceResponse = null): self
    {
        if (null === $GuidanceResponse) {
            $GuidanceResponse = new FHIRGuidanceResponse();
        }
        $this->_trackValueSet($this->GuidanceResponse, $GuidanceResponse);
        $this->GuidanceResponse = $GuidanceResponse;
        return $this;
    }

    /**
     * The details of a healthcare service available at a location.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function getHealthcareService(): null|FHIRHealthcareService
    {
        return $this->HealthcareService;
    }

    /**
     * The details of a healthcare service available at a location.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService $HealthcareService
     * @return static
     */
    public function setHealthcareService(null|FHIRHealthcareService $HealthcareService = null): self
    {
        if (null === $HealthcareService) {
            $HealthcareService = new FHIRHealthcareService();
        }
        $this->_trackValueSet($this->HealthcareService, $HealthcareService);
        $this->HealthcareService = $HealthcareService;
        return $this;
    }

    /**
     * Representation of the content produced in a DICOM imaging study. A study
     * comprises a set of series, each of which includes a set of Service-Object Pair
     * Instances (SOP Instances - images or other data) acquired or produced in a
     * common context. A series is of only one modality (e.g. X-ray, CT, MR,
     * ultrasound), but a study may have multiple series of different modalities.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRImagingStudy
     */
    public function getImagingStudy(): null|FHIRImagingStudy
    {
        return $this->ImagingStudy;
    }

    /**
     * Representation of the content produced in a DICOM imaging study. A study
     * comprises a set of series, each of which includes a set of Service-Object Pair
     * Instances (SOP Instances - images or other data) acquired or produced in a
     * common context. A series is of only one modality (e.g. X-ray, CT, MR,
     * ultrasound), but a study may have multiple series of different modalities.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRImagingStudy $ImagingStudy
     * @return static
     */
    public function setImagingStudy(null|FHIRImagingStudy $ImagingStudy = null): self
    {
        if (null === $ImagingStudy) {
            $ImagingStudy = new FHIRImagingStudy();
        }
        $this->_trackValueSet($this->ImagingStudy, $ImagingStudy);
        $this->ImagingStudy = $ImagingStudy;
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRImmunization
     */
    public function getImmunization(): null|FHIRImmunization
    {
        return $this->Immunization;
    }

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRImmunization $Immunization
     * @return static
     */
    public function setImmunization(null|FHIRImmunization $Immunization = null): self
    {
        if (null === $Immunization) {
            $Immunization = new FHIRImmunization();
        }
        $this->_trackValueSet($this->Immunization, $Immunization);
        $this->Immunization = $Immunization;
        return $this;
    }

    /**
     * Describes a comparison of an immunization event against published
     * recommendations to determine if the administration is "valid" in relation to
     * those recommendations.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRImmunizationEvaluation
     */
    public function getImmunizationEvaluation(): null|FHIRImmunizationEvaluation
    {
        return $this->ImmunizationEvaluation;
    }

    /**
     * Describes a comparison of an immunization event against published
     * recommendations to determine if the administration is "valid" in relation to
     * those recommendations.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRImmunizationEvaluation $ImmunizationEvaluation
     * @return static
     */
    public function setImmunizationEvaluation(null|FHIRImmunizationEvaluation $ImmunizationEvaluation = null): self
    {
        if (null === $ImmunizationEvaluation) {
            $ImmunizationEvaluation = new FHIRImmunizationEvaluation();
        }
        $this->_trackValueSet($this->ImmunizationEvaluation, $ImmunizationEvaluation);
        $this->ImmunizationEvaluation = $ImmunizationEvaluation;
        return $this;
    }

    /**
     * A patient's point-in-time set of recommendations (i.e. forecasting) according to
     * a published schedule with optional supporting justification.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRImmunizationRecommendation
     */
    public function getImmunizationRecommendation(): null|FHIRImmunizationRecommendation
    {
        return $this->ImmunizationRecommendation;
    }

    /**
     * A patient's point-in-time set of recommendations (i.e. forecasting) according to
     * a published schedule with optional supporting justification.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRImmunizationRecommendation $ImmunizationRecommendation
     * @return static
     */
    public function setImmunizationRecommendation(null|FHIRImmunizationRecommendation $ImmunizationRecommendation = null): self
    {
        if (null === $ImmunizationRecommendation) {
            $ImmunizationRecommendation = new FHIRImmunizationRecommendation();
        }
        $this->_trackValueSet($this->ImmunizationRecommendation, $ImmunizationRecommendation);
        $this->ImmunizationRecommendation = $ImmunizationRecommendation;
        return $this;
    }

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
     */
    public function getImplementationGuide(): null|FHIRImplementationGuide
    {
        return $this->ImplementationGuide;
    }

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRImplementationGuide $ImplementationGuide
     * @return static
     */
    public function setImplementationGuide(null|FHIRImplementationGuide $ImplementationGuide = null): self
    {
        if (null === $ImplementationGuide) {
            $ImplementationGuide = new FHIRImplementationGuide();
        }
        $this->_trackValueSet($this->ImplementationGuide, $ImplementationGuide);
        $this->ImplementationGuide = $ImplementationGuide;
        return $this;
    }

    /**
     * Details of a Health Insurance product/plan provided by an organization.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRInsurancePlan
     */
    public function getInsurancePlan(): null|FHIRInsurancePlan
    {
        return $this->InsurancePlan;
    }

    /**
     * Details of a Health Insurance product/plan provided by an organization.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRInsurancePlan $InsurancePlan
     * @return static
     */
    public function setInsurancePlan(null|FHIRInsurancePlan $InsurancePlan = null): self
    {
        if (null === $InsurancePlan) {
            $InsurancePlan = new FHIRInsurancePlan();
        }
        $this->_trackValueSet($this->InsurancePlan, $InsurancePlan);
        $this->InsurancePlan = $InsurancePlan;
        return $this;
    }

    /**
     * Invoice containing collected ChargeItems from an Account with calculated
     * individual and total price for Billing purpose.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRInvoice
     */
    public function getInvoice(): null|FHIRInvoice
    {
        return $this->Invoice;
    }

    /**
     * Invoice containing collected ChargeItems from an Account with calculated
     * individual and total price for Billing purpose.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRInvoice $Invoice
     * @return static
     */
    public function setInvoice(null|FHIRInvoice $Invoice = null): self
    {
        if (null === $Invoice) {
            $Invoice = new FHIRInvoice();
        }
        $this->_trackValueSet($this->Invoice, $Invoice);
        $this->Invoice = $Invoice;
        return $this;
    }

    /**
     * The Library resource is a general-purpose container for knowledge asset
     * definitions. It can be used to describe and expose existing knowledge assets
     * such as logic libraries and information model descriptions, as well as to
     * describe a collection of knowledge assets.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLibrary
     */
    public function getLibrary(): null|FHIRLibrary
    {
        return $this->Library;
    }

    /**
     * The Library resource is a general-purpose container for knowledge asset
     * definitions. It can be used to describe and expose existing knowledge assets
     * such as logic libraries and information model descriptions, as well as to
     * describe a collection of knowledge assets.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLibrary $Library
     * @return static
     */
    public function setLibrary(null|FHIRLibrary $Library = null): self
    {
        if (null === $Library) {
            $Library = new FHIRLibrary();
        }
        $this->_trackValueSet($this->Library, $Library);
        $this->Library = $Library;
        return $this;
    }

    /**
     * Identifies two or more records (resource instances) that refer to the same
     * real-world "occurrence".
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLinkage
     */
    public function getLinkage(): null|FHIRLinkage
    {
        return $this->Linkage;
    }

    /**
     * Identifies two or more records (resource instances) that refer to the same
     * real-world "occurrence".
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLinkage $Linkage
     * @return static
     */
    public function setLinkage(null|FHIRLinkage $Linkage = null): self
    {
        if (null === $Linkage) {
            $Linkage = new FHIRLinkage();
        }
        $this->_trackValueSet($this->Linkage, $Linkage);
        $this->Linkage = $Linkage;
        return $this;
    }

    /**
     * A list is a curated collection of resources.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRList
     */
    public function getList(): null|FHIRList
    {
        return $this->List;
    }

    /**
     * A list is a curated collection of resources.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRList $List
     * @return static
     */
    public function setList(null|FHIRList $List = null): self
    {
        if (null === $List) {
            $List = new FHIRList();
        }
        $this->_trackValueSet($this->List, $List);
        $this->List = $List;
        return $this;
    }

    /**
     * Details and position information for a physical place where services are
     * provided and resources and participants may be stored, found, contained, or
     * accommodated.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    public function getLocation(): null|FHIRLocation
    {
        return $this->Location;
    }

    /**
     * Details and position information for a physical place where services are
     * provided and resources and participants may be stored, found, contained, or
     * accommodated.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation $Location
     * @return static
     */
    public function setLocation(null|FHIRLocation $Location = null): self
    {
        if (null === $Location) {
            $Location = new FHIRLocation();
        }
        $this->_trackValueSet($this->Location, $Location);
        $this->Location = $Location;
        return $this;
    }

    /**
     * The Measure resource provides the definition of a quality measure.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMeasure
     */
    public function getMeasure(): null|FHIRMeasure
    {
        return $this->Measure;
    }

    /**
     * The Measure resource provides the definition of a quality measure.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMeasure $Measure
     * @return static
     */
    public function setMeasure(null|FHIRMeasure $Measure = null): self
    {
        if (null === $Measure) {
            $Measure = new FHIRMeasure();
        }
        $this->_trackValueSet($this->Measure, $Measure);
        $this->Measure = $Measure;
        return $this;
    }

    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMeasureReport
     */
    public function getMeasureReport(): null|FHIRMeasureReport
    {
        return $this->MeasureReport;
    }

    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMeasureReport $MeasureReport
     * @return static
     */
    public function setMeasureReport(null|FHIRMeasureReport $MeasureReport = null): self
    {
        if (null === $MeasureReport) {
            $MeasureReport = new FHIRMeasureReport();
        }
        $this->_trackValueSet($this->MeasureReport, $MeasureReport);
        $this->MeasureReport = $MeasureReport;
        return $this;
    }

    /**
     * A photo, video, or audio recording acquired or used in healthcare. The actual
     * content may be inline or provided by direct reference.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedia
     */
    public function getMedia(): null|FHIRMedia
    {
        return $this->Media;
    }

    /**
     * A photo, video, or audio recording acquired or used in healthcare. The actual
     * content may be inline or provided by direct reference.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedia $Media
     * @return static
     */
    public function setMedia(null|FHIRMedia $Media = null): self
    {
        if (null === $Media) {
            $Media = new FHIRMedia();
        }
        $this->_trackValueSet($this->Media, $Media);
        $this->Media = $Media;
        return $this;
    }

    /**
     * This resource is primarily used for the identification and definition of a
     * medication for the purposes of prescribing, dispensing, and administering a
     * medication as well as for making statements about medication use.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedication
     */
    public function getMedication(): null|FHIRMedication
    {
        return $this->Medication;
    }

    /**
     * This resource is primarily used for the identification and definition of a
     * medication for the purposes of prescribing, dispensing, and administering a
     * medication as well as for making statements about medication use.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedication $Medication
     * @return static
     */
    public function setMedication(null|FHIRMedication $Medication = null): self
    {
        if (null === $Medication) {
            $Medication = new FHIRMedication();
        }
        $this->_trackValueSet($this->Medication, $Medication);
        $this->Medication = $Medication;
        return $this;
    }

    /**
     * Describes the event of a patient consuming or otherwise being administered a
     * medication. This may be as simple as swallowing a tablet or it may be a long
     * running infusion. Related resources tie this event to the authorizing
     * prescription, and the specific encounter between patient and health care
     * practitioner.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
     */
    public function getMedicationAdministration(): null|FHIRMedicationAdministration
    {
        return $this->MedicationAdministration;
    }

    /**
     * Describes the event of a patient consuming or otherwise being administered a
     * medication. This may be as simple as swallowing a tablet or it may be a long
     * running infusion. Related resources tie this event to the authorizing
     * prescription, and the specific encounter between patient and health care
     * practitioner.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration $MedicationAdministration
     * @return static
     */
    public function setMedicationAdministration(null|FHIRMedicationAdministration $MedicationAdministration = null): self
    {
        if (null === $MedicationAdministration) {
            $MedicationAdministration = new FHIRMedicationAdministration();
        }
        $this->_trackValueSet($this->MedicationAdministration, $MedicationAdministration);
        $this->MedicationAdministration = $MedicationAdministration;
        return $this;
    }

    /**
     * Indicates that a medication product is to be or has been dispensed for a named
     * person/patient. This includes a description of the medication product (supply)
     * provided and the instructions for administering the medication. The medication
     * dispense is the result of a pharmacy system responding to a medication order.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function getMedicationDispense(): null|FHIRMedicationDispense
    {
        return $this->MedicationDispense;
    }

    /**
     * Indicates that a medication product is to be or has been dispensed for a named
     * person/patient. This includes a description of the medication product (supply)
     * provided and the instructions for administering the medication. The medication
     * dispense is the result of a pharmacy system responding to a medication order.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense $MedicationDispense
     * @return static
     */
    public function setMedicationDispense(null|FHIRMedicationDispense $MedicationDispense = null): self
    {
        if (null === $MedicationDispense) {
            $MedicationDispense = new FHIRMedicationDispense();
        }
        $this->_trackValueSet($this->MedicationDispense, $MedicationDispense);
        $this->MedicationDispense = $MedicationDispense;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationKnowledge
     */
    public function getMedicationKnowledge(): null|FHIRMedicationKnowledge
    {
        return $this->MedicationKnowledge;
    }

    /**
     * Information about a medication that is used to support knowledge.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationKnowledge $MedicationKnowledge
     * @return static
     */
    public function setMedicationKnowledge(null|FHIRMedicationKnowledge $MedicationKnowledge = null): self
    {
        if (null === $MedicationKnowledge) {
            $MedicationKnowledge = new FHIRMedicationKnowledge();
        }
        $this->_trackValueSet($this->MedicationKnowledge, $MedicationKnowledge);
        $this->MedicationKnowledge = $MedicationKnowledge;
        return $this;
    }

    /**
     * An order or request for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationRequest" rather than "MedicationPrescription" or "MedicationOrder" to
     * generalize the use across inpatient and outpatient settings, including care
     * plans, etc., and to harmonize with workflow patterns.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationRequest
     */
    public function getMedicationRequest(): null|FHIRMedicationRequest
    {
        return $this->MedicationRequest;
    }

    /**
     * An order or request for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationRequest" rather than "MedicationPrescription" or "MedicationOrder" to
     * generalize the use across inpatient and outpatient settings, including care
     * plans, etc., and to harmonize with workflow patterns.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationRequest $MedicationRequest
     * @return static
     */
    public function setMedicationRequest(null|FHIRMedicationRequest $MedicationRequest = null): self
    {
        if (null === $MedicationRequest) {
            $MedicationRequest = new FHIRMedicationRequest();
        }
        $this->_trackValueSet($this->MedicationRequest, $MedicationRequest);
        $this->MedicationRequest = $MedicationRequest;
        return $this;
    }

    /**
     * A record of a medication that is being consumed by a patient. A
     * MedicationStatement may indicate that the patient may be taking the medication
     * now or has taken the medication in the past or will be taking the medication in
     * the future. The source of this information can be the patient, significant other
     * (such as a family member or spouse), or a clinician. A common scenario where
     * this information is captured is during the history taking process during a
     * patient visit or stay. The medication information may come from sources such as
     * the patient's memory, from a prescription bottle, or from a list of medications
     * the patient, clinician or other party maintains. The primary difference between
     * a medication statement and a medication administration is that the medication
     * administration has complete administration information and is based on actual
     * administration information from the person who administered the medication. A
     * medication statement is often, if not always, less specific. There is no
     * required date/time when the medication was administered, in fact we only know
     * that a source has reported the patient is taking this medication, where details
     * such as time, quantity, or rate or even medication product may be incomplete or
     * missing or less precise. As stated earlier, the medication statement information
     * may come from the patient's memory, from a prescription bottle or from a list of
     * medications the patient, clinician or other party maintains. Medication
     * administration is more formal and is not missing detailed information.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationStatement
     */
    public function getMedicationStatement(): null|FHIRMedicationStatement
    {
        return $this->MedicationStatement;
    }

    /**
     * A record of a medication that is being consumed by a patient. A
     * MedicationStatement may indicate that the patient may be taking the medication
     * now or has taken the medication in the past or will be taking the medication in
     * the future. The source of this information can be the patient, significant other
     * (such as a family member or spouse), or a clinician. A common scenario where
     * this information is captured is during the history taking process during a
     * patient visit or stay. The medication information may come from sources such as
     * the patient's memory, from a prescription bottle, or from a list of medications
     * the patient, clinician or other party maintains. The primary difference between
     * a medication statement and a medication administration is that the medication
     * administration has complete administration information and is based on actual
     * administration information from the person who administered the medication. A
     * medication statement is often, if not always, less specific. There is no
     * required date/time when the medication was administered, in fact we only know
     * that a source has reported the patient is taking this medication, where details
     * such as time, quantity, or rate or even medication product may be incomplete or
     * missing or less precise. As stated earlier, the medication statement information
     * may come from the patient's memory, from a prescription bottle or from a list of
     * medications the patient, clinician or other party maintains. Medication
     * administration is more formal and is not missing detailed information.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationStatement $MedicationStatement
     * @return static
     */
    public function setMedicationStatement(null|FHIRMedicationStatement $MedicationStatement = null): self
    {
        if (null === $MedicationStatement) {
            $MedicationStatement = new FHIRMedicationStatement();
        }
        $this->_trackValueSet($this->MedicationStatement, $MedicationStatement);
        $this->MedicationStatement = $MedicationStatement;
        return $this;
    }

    /**
     * Detailed definition of a medicinal product, typically for uses other than direct
     * patient care (e.g. regulatory use).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function getMedicinalProduct(): null|FHIRMedicinalProduct
    {
        return $this->MedicinalProduct;
    }

    /**
     * Detailed definition of a medicinal product, typically for uses other than direct
     * patient care (e.g. regulatory use).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct $MedicinalProduct
     * @return static
     */
    public function setMedicinalProduct(null|FHIRMedicinalProduct $MedicinalProduct = null): self
    {
        if (null === $MedicinalProduct) {
            $MedicinalProduct = new FHIRMedicinalProduct();
        }
        $this->_trackValueSet($this->MedicinalProduct, $MedicinalProduct);
        $this->MedicinalProduct = $MedicinalProduct;
        return $this;
    }

    /**
     * The regulatory authorization of a medicinal product.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization
     */
    public function getMedicinalProductAuthorization(): null|FHIRMedicinalProductAuthorization
    {
        return $this->MedicinalProductAuthorization;
    }

    /**
     * The regulatory authorization of a medicinal product.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization $MedicinalProductAuthorization
     * @return static
     */
    public function setMedicinalProductAuthorization(null|FHIRMedicinalProductAuthorization $MedicinalProductAuthorization = null): self
    {
        if (null === $MedicinalProductAuthorization) {
            $MedicinalProductAuthorization = new FHIRMedicinalProductAuthorization();
        }
        $this->_trackValueSet($this->MedicinalProductAuthorization, $MedicinalProductAuthorization);
        $this->MedicinalProductAuthorization = $MedicinalProductAuthorization;
        return $this;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductContraindication
     */
    public function getMedicinalProductContraindication(): null|FHIRMedicinalProductContraindication
    {
        return $this->MedicinalProductContraindication;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductContraindication $MedicinalProductContraindication
     * @return static
     */
    public function setMedicinalProductContraindication(null|FHIRMedicinalProductContraindication $MedicinalProductContraindication = null): self
    {
        if (null === $MedicinalProductContraindication) {
            $MedicinalProductContraindication = new FHIRMedicinalProductContraindication();
        }
        $this->_trackValueSet($this->MedicinalProductContraindication, $MedicinalProductContraindication);
        $this->MedicinalProductContraindication = $MedicinalProductContraindication;
        return $this;
    }

    /**
     * Indication for the Medicinal Product.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductIndication
     */
    public function getMedicinalProductIndication(): null|FHIRMedicinalProductIndication
    {
        return $this->MedicinalProductIndication;
    }

    /**
     * Indication for the Medicinal Product.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductIndication $MedicinalProductIndication
     * @return static
     */
    public function setMedicinalProductIndication(null|FHIRMedicinalProductIndication $MedicinalProductIndication = null): self
    {
        if (null === $MedicinalProductIndication) {
            $MedicinalProductIndication = new FHIRMedicinalProductIndication();
        }
        $this->_trackValueSet($this->MedicinalProductIndication, $MedicinalProductIndication);
        $this->MedicinalProductIndication = $MedicinalProductIndication;
        return $this;
    }

    /**
     * An ingredient of a manufactured item or pharmaceutical product.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductIngredient
     */
    public function getMedicinalProductIngredient(): null|FHIRMedicinalProductIngredient
    {
        return $this->MedicinalProductIngredient;
    }

    /**
     * An ingredient of a manufactured item or pharmaceutical product.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductIngredient $MedicinalProductIngredient
     * @return static
     */
    public function setMedicinalProductIngredient(null|FHIRMedicinalProductIngredient $MedicinalProductIngredient = null): self
    {
        if (null === $MedicinalProductIngredient) {
            $MedicinalProductIngredient = new FHIRMedicinalProductIngredient();
        }
        $this->_trackValueSet($this->MedicinalProductIngredient, $MedicinalProductIngredient);
        $this->MedicinalProductIngredient = $MedicinalProductIngredient;
        return $this;
    }

    /**
     * The interactions of the medicinal product with other medicinal products, or
     * other forms of interactions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductInteraction
     */
    public function getMedicinalProductInteraction(): null|FHIRMedicinalProductInteraction
    {
        return $this->MedicinalProductInteraction;
    }

    /**
     * The interactions of the medicinal product with other medicinal products, or
     * other forms of interactions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductInteraction $MedicinalProductInteraction
     * @return static
     */
    public function setMedicinalProductInteraction(null|FHIRMedicinalProductInteraction $MedicinalProductInteraction = null): self
    {
        if (null === $MedicinalProductInteraction) {
            $MedicinalProductInteraction = new FHIRMedicinalProductInteraction();
        }
        $this->_trackValueSet($this->MedicinalProductInteraction, $MedicinalProductInteraction);
        $this->MedicinalProductInteraction = $MedicinalProductInteraction;
        return $this;
    }

    /**
     * The manufactured item as contained in the packaged medicinal product.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductManufactured
     */
    public function getMedicinalProductManufactured(): null|FHIRMedicinalProductManufactured
    {
        return $this->MedicinalProductManufactured;
    }

    /**
     * The manufactured item as contained in the packaged medicinal product.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductManufactured $MedicinalProductManufactured
     * @return static
     */
    public function setMedicinalProductManufactured(null|FHIRMedicinalProductManufactured $MedicinalProductManufactured = null): self
    {
        if (null === $MedicinalProductManufactured) {
            $MedicinalProductManufactured = new FHIRMedicinalProductManufactured();
        }
        $this->_trackValueSet($this->MedicinalProductManufactured, $MedicinalProductManufactured);
        $this->MedicinalProductManufactured = $MedicinalProductManufactured;
        return $this;
    }

    /**
     * A medicinal product in a container or package.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductPackaged
     */
    public function getMedicinalProductPackaged(): null|FHIRMedicinalProductPackaged
    {
        return $this->MedicinalProductPackaged;
    }

    /**
     * A medicinal product in a container or package.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductPackaged $MedicinalProductPackaged
     * @return static
     */
    public function setMedicinalProductPackaged(null|FHIRMedicinalProductPackaged $MedicinalProductPackaged = null): self
    {
        if (null === $MedicinalProductPackaged) {
            $MedicinalProductPackaged = new FHIRMedicinalProductPackaged();
        }
        $this->_trackValueSet($this->MedicinalProductPackaged, $MedicinalProductPackaged);
        $this->MedicinalProductPackaged = $MedicinalProductPackaged;
        return $this;
    }

    /**
     * A pharmaceutical product described in terms of its composition and dose form.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductPharmaceutical
     */
    public function getMedicinalProductPharmaceutical(): null|FHIRMedicinalProductPharmaceutical
    {
        return $this->MedicinalProductPharmaceutical;
    }

    /**
     * A pharmaceutical product described in terms of its composition and dose form.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductPharmaceutical $MedicinalProductPharmaceutical
     * @return static
     */
    public function setMedicinalProductPharmaceutical(null|FHIRMedicinalProductPharmaceutical $MedicinalProductPharmaceutical = null): self
    {
        if (null === $MedicinalProductPharmaceutical) {
            $MedicinalProductPharmaceutical = new FHIRMedicinalProductPharmaceutical();
        }
        $this->_trackValueSet($this->MedicinalProductPharmaceutical, $MedicinalProductPharmaceutical);
        $this->MedicinalProductPharmaceutical = $MedicinalProductPharmaceutical;
        return $this;
    }

    /**
     * Describe the undesirable effects of the medicinal product.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductUndesirableEffect
     */
    public function getMedicinalProductUndesirableEffect(): null|FHIRMedicinalProductUndesirableEffect
    {
        return $this->MedicinalProductUndesirableEffect;
    }

    /**
     * Describe the undesirable effects of the medicinal product.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductUndesirableEffect $MedicinalProductUndesirableEffect
     * @return static
     */
    public function setMedicinalProductUndesirableEffect(null|FHIRMedicinalProductUndesirableEffect $MedicinalProductUndesirableEffect = null): self
    {
        if (null === $MedicinalProductUndesirableEffect) {
            $MedicinalProductUndesirableEffect = new FHIRMedicinalProductUndesirableEffect();
        }
        $this->_trackValueSet($this->MedicinalProductUndesirableEffect, $MedicinalProductUndesirableEffect);
        $this->MedicinalProductUndesirableEffect = $MedicinalProductUndesirableEffect;
        return $this;
    }

    /**
     * Defines the characteristics of a message that can be shared between systems,
     * including the type of event that initiates the message, the content to be
     * transmitted and what response(s), if any, are permitted.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMessageDefinition
     */
    public function getMessageDefinition(): null|FHIRMessageDefinition
    {
        return $this->MessageDefinition;
    }

    /**
     * Defines the characteristics of a message that can be shared between systems,
     * including the type of event that initiates the message, the content to be
     * transmitted and what response(s), if any, are permitted.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMessageDefinition $MessageDefinition
     * @return static
     */
    public function setMessageDefinition(null|FHIRMessageDefinition $MessageDefinition = null): self
    {
        if (null === $MessageDefinition) {
            $MessageDefinition = new FHIRMessageDefinition();
        }
        $this->_trackValueSet($this->MessageDefinition, $MessageDefinition);
        $this->MessageDefinition = $MessageDefinition;
        return $this;
    }

    /**
     * The header for a message exchange that is either requesting or responding to an
     * action. The reference(s) that are the subject of the action as well as other
     * information related to the action are typically transmitted in a bundle in which
     * the MessageHeader resource instance is the first resource in the bundle.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMessageHeader
     */
    public function getMessageHeader(): null|FHIRMessageHeader
    {
        return $this->MessageHeader;
    }

    /**
     * The header for a message exchange that is either requesting or responding to an
     * action. The reference(s) that are the subject of the action as well as other
     * information related to the action are typically transmitted in a bundle in which
     * the MessageHeader resource instance is the first resource in the bundle.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMessageHeader $MessageHeader
     * @return static
     */
    public function setMessageHeader(null|FHIRMessageHeader $MessageHeader = null): self
    {
        if (null === $MessageHeader) {
            $MessageHeader = new FHIRMessageHeader();
        }
        $this->_trackValueSet($this->MessageHeader, $MessageHeader);
        $this->MessageHeader = $MessageHeader;
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMolecularSequence
     */
    public function getMolecularSequence(): null|FHIRMolecularSequence
    {
        return $this->MolecularSequence;
    }

    /**
     * Raw data describing a biological sequence.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMolecularSequence $MolecularSequence
     * @return static
     */
    public function setMolecularSequence(null|FHIRMolecularSequence $MolecularSequence = null): self
    {
        if (null === $MolecularSequence) {
            $MolecularSequence = new FHIRMolecularSequence();
        }
        $this->_trackValueSet($this->MolecularSequence, $MolecularSequence);
        $this->MolecularSequence = $MolecularSequence;
        return $this;
    }

    /**
     * A curated namespace that issues unique symbols within that namespace for the
     * identification of concepts, people, devices, etc. Represents a "System" used
     * within the Identifier and Coding data types.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRNamingSystem
     */
    public function getNamingSystem(): null|FHIRNamingSystem
    {
        return $this->NamingSystem;
    }

    /**
     * A curated namespace that issues unique symbols within that namespace for the
     * identification of concepts, people, devices, etc. Represents a "System" used
     * within the Identifier and Coding data types.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRNamingSystem $NamingSystem
     * @return static
     */
    public function setNamingSystem(null|FHIRNamingSystem $NamingSystem = null): self
    {
        if (null === $NamingSystem) {
            $NamingSystem = new FHIRNamingSystem();
        }
        $this->_trackValueSet($this->NamingSystem, $NamingSystem);
        $this->NamingSystem = $NamingSystem;
        return $this;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRNutritionOrder
     */
    public function getNutritionOrder(): null|FHIRNutritionOrder
    {
        return $this->NutritionOrder;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRNutritionOrder $NutritionOrder
     * @return static
     */
    public function setNutritionOrder(null|FHIRNutritionOrder $NutritionOrder = null): self
    {
        if (null === $NutritionOrder) {
            $NutritionOrder = new FHIRNutritionOrder();
        }
        $this->_trackValueSet($this->NutritionOrder, $NutritionOrder);
        $this->NutritionOrder = $NutritionOrder;
        return $this;
    }

    /**
     * Measurements and simple assertions made about a patient, device or other
     * subject.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRObservation
     */
    public function getObservation(): null|FHIRObservation
    {
        return $this->Observation;
    }

    /**
     * Measurements and simple assertions made about a patient, device or other
     * subject.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRObservation $Observation
     * @return static
     */
    public function setObservation(null|FHIRObservation $Observation = null): self
    {
        if (null === $Observation) {
            $Observation = new FHIRObservation();
        }
        $this->_trackValueSet($this->Observation, $Observation);
        $this->Observation = $Observation;
        return $this;
    }

    /**
     * Set of definitional characteristics for a kind of observation or measurement
     * produced or consumed by an orderable health care service.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRObservationDefinition
     */
    public function getObservationDefinition(): null|FHIRObservationDefinition
    {
        return $this->ObservationDefinition;
    }

    /**
     * Set of definitional characteristics for a kind of observation or measurement
     * produced or consumed by an orderable health care service.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRObservationDefinition $ObservationDefinition
     * @return static
     */
    public function setObservationDefinition(null|FHIRObservationDefinition $ObservationDefinition = null): self
    {
        if (null === $ObservationDefinition) {
            $ObservationDefinition = new FHIRObservationDefinition();
        }
        $this->_trackValueSet($this->ObservationDefinition, $ObservationDefinition);
        $this->ObservationDefinition = $ObservationDefinition;
        return $this;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIROperationDefinition
     */
    public function getOperationDefinition(): null|FHIROperationDefinition
    {
        return $this->OperationDefinition;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIROperationDefinition $OperationDefinition
     * @return static
     */
    public function setOperationDefinition(null|FHIROperationDefinition $OperationDefinition = null): self
    {
        if (null === $OperationDefinition) {
            $OperationDefinition = new FHIROperationDefinition();
        }
        $this->_trackValueSet($this->OperationDefinition, $OperationDefinition);
        $this->OperationDefinition = $OperationDefinition;
        return $this;
    }

    /**
     * A collection of error, warning, or information messages that result from a
     * system action.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIROperationOutcome
     */
    public function getOperationOutcome(): null|FHIROperationOutcome
    {
        return $this->OperationOutcome;
    }

    /**
     * A collection of error, warning, or information messages that result from a
     * system action.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIROperationOutcome $OperationOutcome
     * @return static
     */
    public function setOperationOutcome(null|FHIROperationOutcome $OperationOutcome = null): self
    {
        if (null === $OperationOutcome) {
            $OperationOutcome = new FHIROperationOutcome();
        }
        $this->_trackValueSet($this->OperationOutcome, $OperationOutcome);
        $this->OperationOutcome = $OperationOutcome;
        return $this;
    }

    /**
     * A formally or informally recognized grouping of people or organizations formed
     * for the purpose of achieving some form of collective action. Includes companies,
     * institutions, corporations, departments, community groups, healthcare practice
     * groups, payer/insurer, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIROrganization
     */
    public function getOrganization(): null|FHIROrganization
    {
        return $this->Organization;
    }

    /**
     * A formally or informally recognized grouping of people or organizations formed
     * for the purpose of achieving some form of collective action. Includes companies,
     * institutions, corporations, departments, community groups, healthcare practice
     * groups, payer/insurer, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIROrganization $Organization
     * @return static
     */
    public function setOrganization(null|FHIROrganization $Organization = null): self
    {
        if (null === $Organization) {
            $Organization = new FHIROrganization();
        }
        $this->_trackValueSet($this->Organization, $Organization);
        $this->Organization = $Organization;
        return $this;
    }

    /**
     * Defines an affiliation/assotiation/relationship between 2 distinct oganizations,
     * that is not a part-of relationship/sub-division relationship.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIROrganizationAffiliation
     */
    public function getOrganizationAffiliation(): null|FHIROrganizationAffiliation
    {
        return $this->OrganizationAffiliation;
    }

    /**
     * Defines an affiliation/assotiation/relationship between 2 distinct oganizations,
     * that is not a part-of relationship/sub-division relationship.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIROrganizationAffiliation $OrganizationAffiliation
     * @return static
     */
    public function setOrganizationAffiliation(null|FHIROrganizationAffiliation $OrganizationAffiliation = null): self
    {
        if (null === $OrganizationAffiliation) {
            $OrganizationAffiliation = new FHIROrganizationAffiliation();
        }
        $this->_trackValueSet($this->OrganizationAffiliation, $OrganizationAffiliation);
        $this->OrganizationAffiliation = $OrganizationAffiliation;
        return $this;
    }

    /**
     * Demographics and other administrative information about an individual or animal
     * receiving care or other health-related services.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPatient
     */
    public function getPatient(): null|FHIRPatient
    {
        return $this->Patient;
    }

    /**
     * Demographics and other administrative information about an individual or animal
     * receiving care or other health-related services.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPatient $Patient
     * @return static
     */
    public function setPatient(null|FHIRPatient $Patient = null): self
    {
        if (null === $Patient) {
            $Patient = new FHIRPatient();
        }
        $this->_trackValueSet($this->Patient, $Patient);
        $this->Patient = $Patient;
        return $this;
    }

    /**
     * This resource provides the status of the payment for goods and services
     * rendered, and the request and response resource references.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPaymentNotice
     */
    public function getPaymentNotice(): null|FHIRPaymentNotice
    {
        return $this->PaymentNotice;
    }

    /**
     * This resource provides the status of the payment for goods and services
     * rendered, and the request and response resource references.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPaymentNotice $PaymentNotice
     * @return static
     */
    public function setPaymentNotice(null|FHIRPaymentNotice $PaymentNotice = null): self
    {
        if (null === $PaymentNotice) {
            $PaymentNotice = new FHIRPaymentNotice();
        }
        $this->_trackValueSet($this->PaymentNotice, $PaymentNotice);
        $this->PaymentNotice = $PaymentNotice;
        return $this;
    }

    /**
     * This resource provides the details including amount of a payment and allocates
     * the payment items being paid.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation
     */
    public function getPaymentReconciliation(): null|FHIRPaymentReconciliation
    {
        return $this->PaymentReconciliation;
    }

    /**
     * This resource provides the details including amount of a payment and allocates
     * the payment items being paid.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation $PaymentReconciliation
     * @return static
     */
    public function setPaymentReconciliation(null|FHIRPaymentReconciliation $PaymentReconciliation = null): self
    {
        if (null === $PaymentReconciliation) {
            $PaymentReconciliation = new FHIRPaymentReconciliation();
        }
        $this->_trackValueSet($this->PaymentReconciliation, $PaymentReconciliation);
        $this->PaymentReconciliation = $PaymentReconciliation;
        return $this;
    }

    /**
     * Demographics and administrative information about a person independent of a
     * specific health-related context.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPerson
     */
    public function getPerson(): null|FHIRPerson
    {
        return $this->Person;
    }

    /**
     * Demographics and administrative information about a person independent of a
     * specific health-related context.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPerson $Person
     * @return static
     */
    public function setPerson(null|FHIRPerson $Person = null): self
    {
        if (null === $Person) {
            $Person = new FHIRPerson();
        }
        $this->_trackValueSet($this->Person, $Person);
        $this->Person = $Person;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
     */
    public function getPlanDefinition(): null|FHIRPlanDefinition
    {
        return $this->PlanDefinition;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition $PlanDefinition
     * @return static
     */
    public function setPlanDefinition(null|FHIRPlanDefinition $PlanDefinition = null): self
    {
        if (null === $PlanDefinition) {
            $PlanDefinition = new FHIRPlanDefinition();
        }
        $this->_trackValueSet($this->PlanDefinition, $PlanDefinition);
        $this->PlanDefinition = $PlanDefinition;
        return $this;
    }

    /**
     * A person who is directly or indirectly involved in the provisioning of
     * healthcare.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPractitioner
     */
    public function getPractitioner(): null|FHIRPractitioner
    {
        return $this->Practitioner;
    }

    /**
     * A person who is directly or indirectly involved in the provisioning of
     * healthcare.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPractitioner $Practitioner
     * @return static
     */
    public function setPractitioner(null|FHIRPractitioner $Practitioner = null): self
    {
        if (null === $Practitioner) {
            $Practitioner = new FHIRPractitioner();
        }
        $this->_trackValueSet($this->Practitioner, $Practitioner);
        $this->Practitioner = $Practitioner;
        return $this;
    }

    /**
     * A specific set of Roles/Locations/specialties/services that a practitioner may
     * perform at an organization for a period of time.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPractitionerRole
     */
    public function getPractitionerRole(): null|FHIRPractitionerRole
    {
        return $this->PractitionerRole;
    }

    /**
     * A specific set of Roles/Locations/specialties/services that a practitioner may
     * perform at an organization for a period of time.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPractitionerRole $PractitionerRole
     * @return static
     */
    public function setPractitionerRole(null|FHIRPractitionerRole $PractitionerRole = null): self
    {
        if (null === $PractitionerRole) {
            $PractitionerRole = new FHIRPractitionerRole();
        }
        $this->_trackValueSet($this->PractitionerRole, $PractitionerRole);
        $this->PractitionerRole = $PractitionerRole;
        return $this;
    }

    /**
     * An action that is or was performed on or for a patient. This can be a physical
     * intervention like an operation, or less invasive like long term services,
     * counseling, or hypnotherapy.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRProcedure
     */
    public function getProcedure(): null|FHIRProcedure
    {
        return $this->Procedure;
    }

    /**
     * An action that is or was performed on or for a patient. This can be a physical
     * intervention like an operation, or less invasive like long term services,
     * counseling, or hypnotherapy.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRProcedure $Procedure
     * @return static
     */
    public function setProcedure(null|FHIRProcedure $Procedure = null): self
    {
        if (null === $Procedure) {
            $Procedure = new FHIRProcedure();
        }
        $this->_trackValueSet($this->Procedure, $Procedure);
        $this->Procedure = $Procedure;
        return $this;
    }

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRProvenance
     */
    public function getProvenance(): null|FHIRProvenance
    {
        return $this->Provenance;
    }

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRProvenance $Provenance
     * @return static
     */
    public function setProvenance(null|FHIRProvenance $Provenance = null): self
    {
        if (null === $Provenance) {
            $Provenance = new FHIRProvenance();
        }
        $this->_trackValueSet($this->Provenance, $Provenance);
        $this->Provenance = $Provenance;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRQuestionnaire
     */
    public function getQuestionnaire(): null|FHIRQuestionnaire
    {
        return $this->Questionnaire;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRQuestionnaire $Questionnaire
     * @return static
     */
    public function setQuestionnaire(null|FHIRQuestionnaire $Questionnaire = null): self
    {
        if (null === $Questionnaire) {
            $Questionnaire = new FHIRQuestionnaire();
        }
        $this->_trackValueSet($this->Questionnaire, $Questionnaire);
        $this->Questionnaire = $Questionnaire;
        return $this;
    }

    /**
     * A structured set of questions and their answers. The questions are ordered and
     * grouped into coherent subsets, corresponding to the structure of the grouping of
     * the questionnaire being responded to.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRQuestionnaireResponse
     */
    public function getQuestionnaireResponse(): null|FHIRQuestionnaireResponse
    {
        return $this->QuestionnaireResponse;
    }

    /**
     * A structured set of questions and their answers. The questions are ordered and
     * grouped into coherent subsets, corresponding to the structure of the grouping of
     * the questionnaire being responded to.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRQuestionnaireResponse $QuestionnaireResponse
     * @return static
     */
    public function setQuestionnaireResponse(null|FHIRQuestionnaireResponse $QuestionnaireResponse = null): self
    {
        if (null === $QuestionnaireResponse) {
            $QuestionnaireResponse = new FHIRQuestionnaireResponse();
        }
        $this->_trackValueSet($this->QuestionnaireResponse, $QuestionnaireResponse);
        $this->QuestionnaireResponse = $QuestionnaireResponse;
        return $this;
    }

    /**
     * Information about a person that is involved in the care for a patient, but who
     * is not the target of healthcare, nor has a formal responsibility in the care
     * process.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRRelatedPerson
     */
    public function getRelatedPerson(): null|FHIRRelatedPerson
    {
        return $this->RelatedPerson;
    }

    /**
     * Information about a person that is involved in the care for a patient, but who
     * is not the target of healthcare, nor has a formal responsibility in the care
     * process.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRRelatedPerson $RelatedPerson
     * @return static
     */
    public function setRelatedPerson(null|FHIRRelatedPerson $RelatedPerson = null): self
    {
        if (null === $RelatedPerson) {
            $RelatedPerson = new FHIRRelatedPerson();
        }
        $this->_trackValueSet($this->RelatedPerson, $RelatedPerson);
        $this->RelatedPerson = $RelatedPerson;
        return $this;
    }

    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRRequestGroup
     */
    public function getRequestGroup(): null|FHIRRequestGroup
    {
        return $this->RequestGroup;
    }

    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRRequestGroup $RequestGroup
     * @return static
     */
    public function setRequestGroup(null|FHIRRequestGroup $RequestGroup = null): self
    {
        if (null === $RequestGroup) {
            $RequestGroup = new FHIRRequestGroup();
        }
        $this->_trackValueSet($this->RequestGroup, $RequestGroup);
        $this->RequestGroup = $RequestGroup;
        return $this;
    }

    /**
     * The ResearchDefinition resource describes the conditional state (population and
     * any exposures being compared within the population) and outcome (if specified)
     * that the knowledge (evidence, assertion, recommendation) is about.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRResearchDefinition
     */
    public function getResearchDefinition(): null|FHIRResearchDefinition
    {
        return $this->ResearchDefinition;
    }

    /**
     * The ResearchDefinition resource describes the conditional state (population and
     * any exposures being compared within the population) and outcome (if specified)
     * that the knowledge (evidence, assertion, recommendation) is about.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRResearchDefinition $ResearchDefinition
     * @return static
     */
    public function setResearchDefinition(null|FHIRResearchDefinition $ResearchDefinition = null): self
    {
        if (null === $ResearchDefinition) {
            $ResearchDefinition = new FHIRResearchDefinition();
        }
        $this->_trackValueSet($this->ResearchDefinition, $ResearchDefinition);
        $this->ResearchDefinition = $ResearchDefinition;
        return $this;
    }

    /**
     * The ResearchElementDefinition resource describes a "PICO" element that knowledge
     * (evidence, assertion, recommendation) is about.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRResearchElementDefinition
     */
    public function getResearchElementDefinition(): null|FHIRResearchElementDefinition
    {
        return $this->ResearchElementDefinition;
    }

    /**
     * The ResearchElementDefinition resource describes a "PICO" element that knowledge
     * (evidence, assertion, recommendation) is about.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRResearchElementDefinition $ResearchElementDefinition
     * @return static
     */
    public function setResearchElementDefinition(null|FHIRResearchElementDefinition $ResearchElementDefinition = null): self
    {
        if (null === $ResearchElementDefinition) {
            $ResearchElementDefinition = new FHIRResearchElementDefinition();
        }
        $this->_trackValueSet($this->ResearchElementDefinition, $ResearchElementDefinition);
        $this->ResearchElementDefinition = $ResearchElementDefinition;
        return $this;
    }

    /**
     * A process where a researcher or organization plans and then executes a series of
     * steps intended to increase the field of healthcare-related knowledge. This
     * includes studies of safety, efficacy, comparative effectiveness and other
     * information about medications, devices, therapies and other interventional and
     * investigative techniques. A ResearchStudy involves the gathering of information
     * about human or animal subjects.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function getResearchStudy(): null|FHIRResearchStudy
    {
        return $this->ResearchStudy;
    }

    /**
     * A process where a researcher or organization plans and then executes a series of
     * steps intended to increase the field of healthcare-related knowledge. This
     * includes studies of safety, efficacy, comparative effectiveness and other
     * information about medications, devices, therapies and other interventional and
     * investigative techniques. A ResearchStudy involves the gathering of information
     * about human or animal subjects.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRResearchStudy $ResearchStudy
     * @return static
     */
    public function setResearchStudy(null|FHIRResearchStudy $ResearchStudy = null): self
    {
        if (null === $ResearchStudy) {
            $ResearchStudy = new FHIRResearchStudy();
        }
        $this->_trackValueSet($this->ResearchStudy, $ResearchStudy);
        $this->ResearchStudy = $ResearchStudy;
        return $this;
    }

    /**
     * A physical entity which is the primary unit of operational and/or administrative
     * interest in a study.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRResearchSubject
     */
    public function getResearchSubject(): null|FHIRResearchSubject
    {
        return $this->ResearchSubject;
    }

    /**
     * A physical entity which is the primary unit of operational and/or administrative
     * interest in a study.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRResearchSubject $ResearchSubject
     * @return static
     */
    public function setResearchSubject(null|FHIRResearchSubject $ResearchSubject = null): self
    {
        if (null === $ResearchSubject) {
            $ResearchSubject = new FHIRResearchSubject();
        }
        $this->_trackValueSet($this->ResearchSubject, $ResearchSubject);
        $this->ResearchSubject = $ResearchSubject;
        return $this;
    }

    /**
     * An assessment of the likely outcome(s) for a patient or other subject as well as
     * the likelihood of each outcome.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRRiskAssessment
     */
    public function getRiskAssessment(): null|FHIRRiskAssessment
    {
        return $this->RiskAssessment;
    }

    /**
     * An assessment of the likely outcome(s) for a patient or other subject as well as
     * the likelihood of each outcome.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRRiskAssessment $RiskAssessment
     * @return static
     */
    public function setRiskAssessment(null|FHIRRiskAssessment $RiskAssessment = null): self
    {
        if (null === $RiskAssessment) {
            $RiskAssessment = new FHIRRiskAssessment();
        }
        $this->_trackValueSet($this->RiskAssessment, $RiskAssessment);
        $this->RiskAssessment = $RiskAssessment;
        return $this;
    }

    /**
     * The RiskEvidenceSynthesis resource describes the likelihood of an outcome in a
     * population plus exposure state where the risk estimate is derived from a
     * combination of research studies.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRRiskEvidenceSynthesis
     */
    public function getRiskEvidenceSynthesis(): null|FHIRRiskEvidenceSynthesis
    {
        return $this->RiskEvidenceSynthesis;
    }

    /**
     * The RiskEvidenceSynthesis resource describes the likelihood of an outcome in a
     * population plus exposure state where the risk estimate is derived from a
     * combination of research studies.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRRiskEvidenceSynthesis $RiskEvidenceSynthesis
     * @return static
     */
    public function setRiskEvidenceSynthesis(null|FHIRRiskEvidenceSynthesis $RiskEvidenceSynthesis = null): self
    {
        if (null === $RiskEvidenceSynthesis) {
            $RiskEvidenceSynthesis = new FHIRRiskEvidenceSynthesis();
        }
        $this->_trackValueSet($this->RiskEvidenceSynthesis, $RiskEvidenceSynthesis);
        $this->RiskEvidenceSynthesis = $RiskEvidenceSynthesis;
        return $this;
    }

    /**
     * A container for slots of time that may be available for booking appointments.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSchedule
     */
    public function getSchedule(): null|FHIRSchedule
    {
        return $this->Schedule;
    }

    /**
     * A container for slots of time that may be available for booking appointments.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSchedule $Schedule
     * @return static
     */
    public function setSchedule(null|FHIRSchedule $Schedule = null): self
    {
        if (null === $Schedule) {
            $Schedule = new FHIRSchedule();
        }
        $this->_trackValueSet($this->Schedule, $Schedule);
        $this->Schedule = $Schedule;
        return $this;
    }

    /**
     * A search parameter that defines a named search item that can be used to
     * search/filter on a resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSearchParameter
     */
    public function getSearchParameter(): null|FHIRSearchParameter
    {
        return $this->SearchParameter;
    }

    /**
     * A search parameter that defines a named search item that can be used to
     * search/filter on a resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSearchParameter $SearchParameter
     * @return static
     */
    public function setSearchParameter(null|FHIRSearchParameter $SearchParameter = null): self
    {
        if (null === $SearchParameter) {
            $SearchParameter = new FHIRSearchParameter();
        }
        $this->_trackValueSet($this->SearchParameter, $SearchParameter);
        $this->SearchParameter = $SearchParameter;
        return $this;
    }

    /**
     * A record of a request for service such as diagnostic investigations, treatments,
     * or operations to be performed.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRServiceRequest
     */
    public function getServiceRequest(): null|FHIRServiceRequest
    {
        return $this->ServiceRequest;
    }

    /**
     * A record of a request for service such as diagnostic investigations, treatments,
     * or operations to be performed.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRServiceRequest $ServiceRequest
     * @return static
     */
    public function setServiceRequest(null|FHIRServiceRequest $ServiceRequest = null): self
    {
        if (null === $ServiceRequest) {
            $ServiceRequest = new FHIRServiceRequest();
        }
        $this->_trackValueSet($this->ServiceRequest, $ServiceRequest);
        $this->ServiceRequest = $ServiceRequest;
        return $this;
    }

    /**
     * A slot of time on a schedule that may be available for booking appointments.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSlot
     */
    public function getSlot(): null|FHIRSlot
    {
        return $this->Slot;
    }

    /**
     * A slot of time on a schedule that may be available for booking appointments.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSlot $Slot
     * @return static
     */
    public function setSlot(null|FHIRSlot $Slot = null): self
    {
        if (null === $Slot) {
            $Slot = new FHIRSlot();
        }
        $this->_trackValueSet($this->Slot, $Slot);
        $this->Slot = $Slot;
        return $this;
    }

    /**
     * A sample to be used for analysis.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimen
     */
    public function getSpecimen(): null|FHIRSpecimen
    {
        return $this->Specimen;
    }

    /**
     * A sample to be used for analysis.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimen $Specimen
     * @return static
     */
    public function setSpecimen(null|FHIRSpecimen $Specimen = null): self
    {
        if (null === $Specimen) {
            $Specimen = new FHIRSpecimen();
        }
        $this->_trackValueSet($this->Specimen, $Specimen);
        $this->Specimen = $Specimen;
        return $this;
    }

    /**
     * A kind of specimen with associated set of requirements.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimenDefinition
     */
    public function getSpecimenDefinition(): null|FHIRSpecimenDefinition
    {
        return $this->SpecimenDefinition;
    }

    /**
     * A kind of specimen with associated set of requirements.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimenDefinition $SpecimenDefinition
     * @return static
     */
    public function setSpecimenDefinition(null|FHIRSpecimenDefinition $SpecimenDefinition = null): self
    {
        if (null === $SpecimenDefinition) {
            $SpecimenDefinition = new FHIRSpecimenDefinition();
        }
        $this->_trackValueSet($this->SpecimenDefinition, $SpecimenDefinition);
        $this->SpecimenDefinition = $SpecimenDefinition;
        return $this;
    }

    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRStructureDefinition
     */
    public function getStructureDefinition(): null|FHIRStructureDefinition
    {
        return $this->StructureDefinition;
    }

    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRStructureDefinition $StructureDefinition
     * @return static
     */
    public function setStructureDefinition(null|FHIRStructureDefinition $StructureDefinition = null): self
    {
        if (null === $StructureDefinition) {
            $StructureDefinition = new FHIRStructureDefinition();
        }
        $this->_trackValueSet($this->StructureDefinition, $StructureDefinition);
        $this->StructureDefinition = $StructureDefinition;
        return $this;
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRStructureMap
     */
    public function getStructureMap(): null|FHIRStructureMap
    {
        return $this->StructureMap;
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRStructureMap $StructureMap
     * @return static
     */
    public function setStructureMap(null|FHIRStructureMap $StructureMap = null): self
    {
        if (null === $StructureMap) {
            $StructureMap = new FHIRStructureMap();
        }
        $this->_trackValueSet($this->StructureMap, $StructureMap);
        $this->StructureMap = $StructureMap;
        return $this;
    }

    /**
     * The subscription resource is used to define a push-based subscription from a
     * server to another system. Once a subscription is registered with the server, the
     * server checks every resource that is created or updated, and if the resource
     * matches the given criteria, it sends a message on the defined "channel" so that
     * another system can take an appropriate action.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubscription
     */
    public function getSubscription(): null|FHIRSubscription
    {
        return $this->Subscription;
    }

    /**
     * The subscription resource is used to define a push-based subscription from a
     * server to another system. Once a subscription is registered with the server, the
     * server checks every resource that is created or updated, and if the resource
     * matches the given criteria, it sends a message on the defined "channel" so that
     * another system can take an appropriate action.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubscription $Subscription
     * @return static
     */
    public function setSubscription(null|FHIRSubscription $Subscription = null): self
    {
        if (null === $Subscription) {
            $Subscription = new FHIRSubscription();
        }
        $this->_trackValueSet($this->Subscription, $Subscription);
        $this->Subscription = $Subscription;
        return $this;
    }

    /**
     * A homogeneous material with a definite composition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstance
     */
    public function getSubstance(): null|FHIRSubstance
    {
        return $this->Substance;
    }

    /**
     * A homogeneous material with a definite composition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstance $Substance
     * @return static
     */
    public function setSubstance(null|FHIRSubstance $Substance = null): self
    {
        if (null === $Substance) {
            $Substance = new FHIRSubstance();
        }
        $this->_trackValueSet($this->Substance, $Substance);
        $this->Substance = $Substance;
        return $this;
    }

    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceNucleicAcid
     */
    public function getSubstanceNucleicAcid(): null|FHIRSubstanceNucleicAcid
    {
        return $this->SubstanceNucleicAcid;
    }

    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceNucleicAcid $SubstanceNucleicAcid
     * @return static
     */
    public function setSubstanceNucleicAcid(null|FHIRSubstanceNucleicAcid $SubstanceNucleicAcid = null): self
    {
        if (null === $SubstanceNucleicAcid) {
            $SubstanceNucleicAcid = new FHIRSubstanceNucleicAcid();
        }
        $this->_trackValueSet($this->SubstanceNucleicAcid, $SubstanceNucleicAcid);
        $this->SubstanceNucleicAcid = $SubstanceNucleicAcid;
        return $this;
    }

    /**
     * Todo.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstancePolymer
     */
    public function getSubstancePolymer(): null|FHIRSubstancePolymer
    {
        return $this->SubstancePolymer;
    }

    /**
     * Todo.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstancePolymer $SubstancePolymer
     * @return static
     */
    public function setSubstancePolymer(null|FHIRSubstancePolymer $SubstancePolymer = null): self
    {
        if (null === $SubstancePolymer) {
            $SubstancePolymer = new FHIRSubstancePolymer();
        }
        $this->_trackValueSet($this->SubstancePolymer, $SubstancePolymer);
        $this->SubstancePolymer = $SubstancePolymer;
        return $this;
    }

    /**
     * A SubstanceProtein is defined as a single unit of a linear amino acid sequence,
     * or a combination of subunits that are either covalently linked or have a defined
     * invariant stoichiometric relationship. This includes all synthetic, recombinant
     * and purified SubstanceProteins of defined sequence, whether the use is
     * therapeutic or prophylactic. This set of elements will be used to describe
     * albumins, coagulation factors, cytokines, growth factors,
     * peptide/SubstanceProtein hormones, enzymes, toxins, toxoids, recombinant
     * vaccines, and immunomodulators.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceProtein
     */
    public function getSubstanceProtein(): null|FHIRSubstanceProtein
    {
        return $this->SubstanceProtein;
    }

    /**
     * A SubstanceProtein is defined as a single unit of a linear amino acid sequence,
     * or a combination of subunits that are either covalently linked or have a defined
     * invariant stoichiometric relationship. This includes all synthetic, recombinant
     * and purified SubstanceProteins of defined sequence, whether the use is
     * therapeutic or prophylactic. This set of elements will be used to describe
     * albumins, coagulation factors, cytokines, growth factors,
     * peptide/SubstanceProtein hormones, enzymes, toxins, toxoids, recombinant
     * vaccines, and immunomodulators.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceProtein $SubstanceProtein
     * @return static
     */
    public function setSubstanceProtein(null|FHIRSubstanceProtein $SubstanceProtein = null): self
    {
        if (null === $SubstanceProtein) {
            $SubstanceProtein = new FHIRSubstanceProtein();
        }
        $this->_trackValueSet($this->SubstanceProtein, $SubstanceProtein);
        $this->SubstanceProtein = $SubstanceProtein;
        return $this;
    }

    /**
     * Todo.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceReferenceInformation
     */
    public function getSubstanceReferenceInformation(): null|FHIRSubstanceReferenceInformation
    {
        return $this->SubstanceReferenceInformation;
    }

    /**
     * Todo.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceReferenceInformation $SubstanceReferenceInformation
     * @return static
     */
    public function setSubstanceReferenceInformation(null|FHIRSubstanceReferenceInformation $SubstanceReferenceInformation = null): self
    {
        if (null === $SubstanceReferenceInformation) {
            $SubstanceReferenceInformation = new FHIRSubstanceReferenceInformation();
        }
        $this->_trackValueSet($this->SubstanceReferenceInformation, $SubstanceReferenceInformation);
        $this->SubstanceReferenceInformation = $SubstanceReferenceInformation;
        return $this;
    }

    /**
     * Source material shall capture information on the taxonomic and anatomical
     * origins as well as the fraction of a material that can result in or can be
     * modified to form a substance. This set of data elements shall be used to define
     * polymer substances isolated from biological matrices. Taxonomic and anatomical
     * origins shall be described using a controlled vocabulary as required. This
     * information is captured for naturally derived polymers ( . starch) and
     * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
     * the Substance level defines the fresh material of a single species or
     * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
     * preparations, the fraction information will be captured at the Substance
     * information level and additional information for herbal extracts will be
     * captured at the Specified Substance Group 1 information level. See for further
     * explanation the Substance Class: Structurally Diverse and the herbal annex.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSourceMaterial
     */
    public function getSubstanceSourceMaterial(): null|FHIRSubstanceSourceMaterial
    {
        return $this->SubstanceSourceMaterial;
    }

    /**
     * Source material shall capture information on the taxonomic and anatomical
     * origins as well as the fraction of a material that can result in or can be
     * modified to form a substance. This set of data elements shall be used to define
     * polymer substances isolated from biological matrices. Taxonomic and anatomical
     * origins shall be described using a controlled vocabulary as required. This
     * information is captured for naturally derived polymers ( . starch) and
     * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
     * the Substance level defines the fresh material of a single species or
     * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
     * preparations, the fraction information will be captured at the Substance
     * information level and additional information for herbal extracts will be
     * captured at the Specified Substance Group 1 information level. See for further
     * explanation the Substance Class: Structurally Diverse and the herbal annex.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSourceMaterial $SubstanceSourceMaterial
     * @return static
     */
    public function setSubstanceSourceMaterial(null|FHIRSubstanceSourceMaterial $SubstanceSourceMaterial = null): self
    {
        if (null === $SubstanceSourceMaterial) {
            $SubstanceSourceMaterial = new FHIRSubstanceSourceMaterial();
        }
        $this->_trackValueSet($this->SubstanceSourceMaterial, $SubstanceSourceMaterial);
        $this->SubstanceSourceMaterial = $SubstanceSourceMaterial;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public function getSubstanceSpecification(): null|FHIRSubstanceSpecification
    {
        return $this->SubstanceSpecification;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification $SubstanceSpecification
     * @return static
     */
    public function setSubstanceSpecification(null|FHIRSubstanceSpecification $SubstanceSpecification = null): self
    {
        if (null === $SubstanceSpecification) {
            $SubstanceSpecification = new FHIRSubstanceSpecification();
        }
        $this->_trackValueSet($this->SubstanceSpecification, $SubstanceSpecification);
        $this->SubstanceSpecification = $SubstanceSpecification;
        return $this;
    }

    /**
     * Record of delivery of what is supplied.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery
     */
    public function getSupplyDelivery(): null|FHIRSupplyDelivery
    {
        return $this->SupplyDelivery;
    }

    /**
     * Record of delivery of what is supplied.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery $SupplyDelivery
     * @return static
     */
    public function setSupplyDelivery(null|FHIRSupplyDelivery $SupplyDelivery = null): self
    {
        if (null === $SupplyDelivery) {
            $SupplyDelivery = new FHIRSupplyDelivery();
        }
        $this->_trackValueSet($this->SupplyDelivery, $SupplyDelivery);
        $this->SupplyDelivery = $SupplyDelivery;
        return $this;
    }

    /**
     * A record of a request for a medication, substance or device used in the
     * healthcare setting.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSupplyRequest
     */
    public function getSupplyRequest(): null|FHIRSupplyRequest
    {
        return $this->SupplyRequest;
    }

    /**
     * A record of a request for a medication, substance or device used in the
     * healthcare setting.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSupplyRequest $SupplyRequest
     * @return static
     */
    public function setSupplyRequest(null|FHIRSupplyRequest $SupplyRequest = null): self
    {
        if (null === $SupplyRequest) {
            $SupplyRequest = new FHIRSupplyRequest();
        }
        $this->_trackValueSet($this->SupplyRequest, $SupplyRequest);
        $this->SupplyRequest = $SupplyRequest;
        return $this;
    }

    /**
     * A task to be performed.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRTask
     */
    public function getTask(): null|FHIRTask
    {
        return $this->Task;
    }

    /**
     * A task to be performed.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRTask $Task
     * @return static
     */
    public function setTask(null|FHIRTask $Task = null): self
    {
        if (null === $Task) {
            $Task = new FHIRTask();
        }
        $this->_trackValueSet($this->Task, $Task);
        $this->Task = $Task;
        return $this;
    }

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRTerminologyCapabilities
     */
    public function getTerminologyCapabilities(): null|FHIRTerminologyCapabilities
    {
        return $this->TerminologyCapabilities;
    }

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRTerminologyCapabilities $TerminologyCapabilities
     * @return static
     */
    public function setTerminologyCapabilities(null|FHIRTerminologyCapabilities $TerminologyCapabilities = null): self
    {
        if (null === $TerminologyCapabilities) {
            $TerminologyCapabilities = new FHIRTerminologyCapabilities();
        }
        $this->_trackValueSet($this->TerminologyCapabilities, $TerminologyCapabilities);
        $this->TerminologyCapabilities = $TerminologyCapabilities;
        return $this;
    }

    /**
     * A summary of information based on the results of executing a TestScript.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRTestReport
     */
    public function getTestReport(): null|FHIRTestReport
    {
        return $this->TestReport;
    }

    /**
     * A summary of information based on the results of executing a TestScript.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRTestReport $TestReport
     * @return static
     */
    public function setTestReport(null|FHIRTestReport $TestReport = null): self
    {
        if (null === $TestReport) {
            $TestReport = new FHIRTestReport();
        }
        $this->_trackValueSet($this->TestReport, $TestReport);
        $this->TestReport = $TestReport;
        return $this;
    }

    /**
     * A structured set of tests against a FHIR server or client implementation to
     * determine compliance against the FHIR specification.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRTestScript
     */
    public function getTestScript(): null|FHIRTestScript
    {
        return $this->TestScript;
    }

    /**
     * A structured set of tests against a FHIR server or client implementation to
     * determine compliance against the FHIR specification.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRTestScript $TestScript
     * @return static
     */
    public function setTestScript(null|FHIRTestScript $TestScript = null): self
    {
        if (null === $TestScript) {
            $TestScript = new FHIRTestScript();
        }
        $this->_trackValueSet($this->TestScript, $TestScript);
        $this->TestScript = $TestScript;
        return $this;
    }

    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [[[CodeSystem]]] definitions and their use in [coded
     * elements](terminologies.html).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRValueSet
     */
    public function getValueSet(): null|FHIRValueSet
    {
        return $this->ValueSet;
    }

    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [[[CodeSystem]]] definitions and their use in [coded
     * elements](terminologies.html).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRValueSet $ValueSet
     * @return static
     */
    public function setValueSet(null|FHIRValueSet $ValueSet = null): self
    {
        if (null === $ValueSet) {
            $ValueSet = new FHIRValueSet();
        }
        $this->_trackValueSet($this->ValueSet, $ValueSet);
        $this->ValueSet = $ValueSet;
        return $this;
    }

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult
     */
    public function getVerificationResult(): null|FHIRVerificationResult
    {
        return $this->VerificationResult;
    }

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult $VerificationResult
     * @return static
     */
    public function setVerificationResult(null|FHIRVerificationResult $VerificationResult = null): self
    {
        if (null === $VerificationResult) {
            $VerificationResult = new FHIRVerificationResult();
        }
        $this->_trackValueSet($this->VerificationResult, $VerificationResult);
        $this->VerificationResult = $VerificationResult;
        return $this;
    }

    /**
     * An authorization for the provision of glasses and/or contact lenses to a
     * patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVisionPrescription
     */
    public function getVisionPrescription(): null|FHIRVisionPrescription
    {
        return $this->VisionPrescription;
    }

    /**
     * An authorization for the provision of glasses and/or contact lenses to a
     * patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVisionPrescription $VisionPrescription
     * @return static
     */
    public function setVisionPrescription(null|FHIRVisionPrescription $VisionPrescription = null): self
    {
        if (null === $VisionPrescription) {
            $VisionPrescription = new FHIRVisionPrescription();
        }
        $this->_trackValueSet($this->VisionPrescription, $VisionPrescription);
        $this->VisionPrescription = $VisionPrescription;
        return $this;
    }

    /**
     * This resource is a non-persisted resource used to pass information into and back
     * from an [operation](operations.html). It has no other use, and there is no
     * RESTful endpoint associated with it.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRParameters
     */
    public function getParameters(): null|FHIRParameters
    {
        return $this->Parameters;
    }

    /**
     * This resource is a non-persisted resource used to pass information into and back
     * from an [operation](operations.html). It has no other use, and there is no
     * RESTful endpoint associated with it.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRParameters $Parameters
     * @return static
     */
    public function setParameters(null|FHIRParameters $Parameters = null): self
    {
        if (null === $Parameters) {
            $Parameters = new FHIRParameters();
        }
        $this->_trackValueSet($this->Parameters, $Parameters);
        $this->Parameters = $Parameters;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = [];
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getAccount())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ACCOUNT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getActivityDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ACTIVITY_DEFINITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAdverseEvent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADVERSE_EVENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAllergyIntolerance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ALLERGY_INTOLERANCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAppointment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_APPOINTMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAppointmentResponse())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_APPOINTMENT_RESPONSE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAuditEvent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AUDIT_EVENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBasic())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BASIC] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBinary())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BINARY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBiologicallyDerivedProduct())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BIOLOGICALLY_DERIVED_PRODUCT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBodyStructure())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BODY_STRUCTURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBundle())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BUNDLE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCapabilityStatement())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CAPABILITY_STATEMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCarePlan())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CARE_PLAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCareTeam())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CARE_TEAM] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCatalogEntry())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CATALOG_ENTRY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getChargeItem())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CHARGE_ITEM] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getChargeItemDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CHARGE_ITEM_DEFINITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getClaim())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CLAIM] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getClaimResponse())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CLAIM_RESPONSE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getClinicalImpression())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CLINICAL_IMPRESSION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCodeSystem())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE_SYSTEM] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCommunication())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMMUNICATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCommunicationRequest())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMMUNICATION_REQUEST] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCompartmentDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMPARTMENT_DEFINITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getComposition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMPOSITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getConceptMap())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONCEPT_MAP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCondition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONDITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getConsent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONSENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getContract())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTRACT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCoverage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COVERAGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCoverageEligibilityRequest())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COVERAGE_ELIGIBILITY_REQUEST] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCoverageEligibilityResponse())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COVERAGE_ELIGIBILITY_RESPONSE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDetectedIssue())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DETECTED_ISSUE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDevice())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEVICE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDeviceDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEVICE_DEFINITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDeviceMetric())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEVICE_METRIC] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDeviceRequest())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEVICE_REQUEST] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDeviceUseStatement())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEVICE_USE_STATEMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDiagnosticReport())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DIAGNOSTIC_REPORT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDocumentManifest())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOCUMENT_MANIFEST] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDocumentReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOCUMENT_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEffectEvidenceSynthesis())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EFFECT_EVIDENCE_SYNTHESIS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENCOUNTER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEndpoint())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENDPOINT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEnrollmentRequest())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENROLLMENT_REQUEST] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEnrollmentResponse())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENROLLMENT_RESPONSE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEpisodeOfCare())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EPISODE_OF_CARE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEventDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EVENT_DEFINITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEvidence())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EVIDENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEvidenceVariable())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EVIDENCE_VARIABLE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleScenario())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_SCENARIO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExplanationOfBenefit())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXPLANATION_OF_BENEFIT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFamilyMemberHistory())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FAMILY_MEMBER_HISTORY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFlag())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FLAG] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getGoal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GOAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getGraphDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GRAPH_DEFINITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getGroup())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GROUP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getGuidanceResponse())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GUIDANCE_RESPONSE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getHealthcareService())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_HEALTHCARE_SERVICE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getImagingStudy())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IMAGING_STUDY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getImmunization())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IMMUNIZATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getImmunizationEvaluation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IMMUNIZATION_EVALUATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getImmunizationRecommendation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IMMUNIZATION_RECOMMENDATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getImplementationGuide())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IMPLEMENTATION_GUIDE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInsurancePlan())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INSURANCE_PLAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInvoice())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INVOICE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLibrary())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LIBRARY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLinkage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LINKAGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getList())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LIST] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLocation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOCATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMeasure())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEASURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMeasureReport())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEASURE_REPORT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedia())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDIA] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedication())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedicationAdministration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICATION_ADMINISTRATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedicationDispense())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICATION_DISPENSE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedicationKnowledge())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICATION_KNOWLEDGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedicationRequest())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICATION_REQUEST] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedicationStatement())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICATION_STATEMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedicinalProduct())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICINAL_PRODUCT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedicinalProductAuthorization())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICINAL_PRODUCT_AUTHORIZATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedicinalProductContraindication())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICINAL_PRODUCT_CONTRAINDICATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedicinalProductIndication())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICINAL_PRODUCT_INDICATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedicinalProductIngredient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICINAL_PRODUCT_INGREDIENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedicinalProductInteraction())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICINAL_PRODUCT_INTERACTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedicinalProductManufactured())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICINAL_PRODUCT_MANUFACTURED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedicinalProductPackaged())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICINAL_PRODUCT_PACKAGED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedicinalProductPharmaceutical())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICINAL_PRODUCT_PHARMACEUTICAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedicinalProductUndesirableEffect())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICINAL_PRODUCT_UNDESIRABLE_EFFECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMessageDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MESSAGE_DEFINITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMessageHeader())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MESSAGE_HEADER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMolecularSequence())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MOLECULAR_SEQUENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNamingSystem())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAMING_SYSTEM] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNutritionOrder())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NUTRITION_ORDER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getObservation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OBSERVATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getObservationDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OBSERVATION_DEFINITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOperationDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OPERATION_DEFINITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOperationOutcome())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OPERATION_OUTCOME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrganization())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORGANIZATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrganizationAffiliation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORGANIZATION_AFFILIATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPaymentNotice())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PAYMENT_NOTICE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPaymentReconciliation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PAYMENT_RECONCILIATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPerson())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERSON] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPlanDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PLAN_DEFINITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPractitioner())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRACTITIONER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPractitionerRole())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRACTITIONER_ROLE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProcedure())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROCEDURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProvenance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROVENANCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getQuestionnaire())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUESTIONNAIRE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getQuestionnaireResponse())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUESTIONNAIRE_RESPONSE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRelatedPerson())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RELATED_PERSON] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequestGroup())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUEST_GROUP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResearchDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESEARCH_DEFINITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResearchElementDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESEARCH_ELEMENT_DEFINITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResearchStudy())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESEARCH_STUDY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResearchSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESEARCH_SUBJECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRiskAssessment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RISK_ASSESSMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRiskEvidenceSynthesis())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RISK_EVIDENCE_SYNTHESIS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSchedule())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SCHEDULE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSearchParameter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEARCH_PARAMETER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getServiceRequest())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERVICE_REQUEST] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSlot())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SLOT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSpecimen())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SPECIMEN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSpecimenDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SPECIMEN_DEFINITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStructureDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STRUCTURE_DEFINITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStructureMap())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STRUCTURE_MAP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubscription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubstance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSTANCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubstanceNucleicAcid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSTANCE_NUCLEIC_ACID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubstancePolymer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSTANCE_POLYMER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubstanceProtein())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSTANCE_PROTEIN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubstanceReferenceInformation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSTANCE_REFERENCE_INFORMATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubstanceSourceMaterial())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSTANCE_SOURCE_MATERIAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubstanceSpecification())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSTANCE_SPECIFICATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSupplyDelivery())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUPPLY_DELIVERY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSupplyRequest())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUPPLY_REQUEST] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTask())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TASK] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTerminologyCapabilities())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TERMINOLOGY_CAPABILITIES] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTestReport())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEST_REPORT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTestScript())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEST_SCRIPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueSet())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_SET] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVerificationResult())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERIFICATION_RESULT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVisionPrescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VISION_PRESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getParameters())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARAMETERS] = $fieldErrs;
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResourceContainer $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResourceContainer
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRResourceContainer)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_ACCOUNT === $childName) {
                $type->setAccount(FHIRAccount::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ACTIVITY_DEFINITION === $childName) {
                $type->setActivityDefinition(FHIRActivityDefinition::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ADVERSE_EVENT === $childName) {
                $type->setAdverseEvent(FHIRAdverseEvent::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ALLERGY_INTOLERANCE === $childName) {
                $type->setAllergyIntolerance(FHIRAllergyIntolerance::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_APPOINTMENT === $childName) {
                $type->setAppointment(FHIRAppointment::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_APPOINTMENT_RESPONSE === $childName) {
                $type->setAppointmentResponse(FHIRAppointmentResponse::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_AUDIT_EVENT === $childName) {
                $type->setAuditEvent(FHIRAuditEvent::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_BASIC === $childName) {
                $type->setBasic(FHIRBasic::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_BINARY === $childName) {
                $type->setBinary(FHIRBinary::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_BIOLOGICALLY_DERIVED_PRODUCT === $childName) {
                $type->setBiologicallyDerivedProduct(FHIRBiologicallyDerivedProduct::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_BODY_STRUCTURE === $childName) {
                $type->setBodyStructure(FHIRBodyStructure::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_BUNDLE === $childName) {
                $type->setBundle(FHIRBundle::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CAPABILITY_STATEMENT === $childName) {
                $type->setCapabilityStatement(FHIRCapabilityStatement::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CARE_PLAN === $childName) {
                $type->setCarePlan(FHIRCarePlan::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CARE_TEAM === $childName) {
                $type->setCareTeam(FHIRCareTeam::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CATALOG_ENTRY === $childName) {
                $type->setCatalogEntry(FHIRCatalogEntry::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CHARGE_ITEM === $childName) {
                $type->setChargeItem(FHIRChargeItem::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CHARGE_ITEM_DEFINITION === $childName) {
                $type->setChargeItemDefinition(FHIRChargeItemDefinition::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CLAIM === $childName) {
                $type->setClaim(FHIRClaim::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CLAIM_RESPONSE === $childName) {
                $type->setClaimResponse(FHIRClaimResponse::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CLINICAL_IMPRESSION === $childName) {
                $type->setClinicalImpression(FHIRClinicalImpression::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CODE_SYSTEM === $childName) {
                $type->setCodeSystem(FHIRCodeSystem::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_COMMUNICATION === $childName) {
                $type->setCommunication(FHIRCommunication::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_COMMUNICATION_REQUEST === $childName) {
                $type->setCommunicationRequest(FHIRCommunicationRequest::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_COMPARTMENT_DEFINITION === $childName) {
                $type->setCompartmentDefinition(FHIRCompartmentDefinition::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_COMPOSITION === $childName) {
                $type->setComposition(FHIRComposition::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONCEPT_MAP === $childName) {
                $type->setConceptMap(FHIRConceptMap::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONDITION === $childName) {
                $type->setCondition(FHIRCondition::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONSENT === $childName) {
                $type->setConsent(FHIRConsent::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTRACT === $childName) {
                $type->setContract(FHIRContract::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_COVERAGE === $childName) {
                $type->setCoverage(FHIRCoverage::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_COVERAGE_ELIGIBILITY_REQUEST === $childName) {
                $type->setCoverageEligibilityRequest(FHIRCoverageEligibilityRequest::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_COVERAGE_ELIGIBILITY_RESPONSE === $childName) {
                $type->setCoverageEligibilityResponse(FHIRCoverageEligibilityResponse::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DETECTED_ISSUE === $childName) {
                $type->setDetectedIssue(FHIRDetectedIssue::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEVICE === $childName) {
                $type->setDevice(FHIRDevice::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEVICE_DEFINITION === $childName) {
                $type->setDeviceDefinition(FHIRDeviceDefinition::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEVICE_METRIC === $childName) {
                $type->setDeviceMetric(FHIRDeviceMetric::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEVICE_REQUEST === $childName) {
                $type->setDeviceRequest(FHIRDeviceRequest::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEVICE_USE_STATEMENT === $childName) {
                $type->setDeviceUseStatement(FHIRDeviceUseStatement::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DIAGNOSTIC_REPORT === $childName) {
                $type->setDiagnosticReport(FHIRDiagnosticReport::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DOCUMENT_MANIFEST === $childName) {
                $type->setDocumentManifest(FHIRDocumentManifest::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DOCUMENT_REFERENCE === $childName) {
                $type->setDocumentReference(FHIRDocumentReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EFFECT_EVIDENCE_SYNTHESIS === $childName) {
                $type->setEffectEvidenceSynthesis(FHIREffectEvidenceSynthesis::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ENCOUNTER === $childName) {
                $type->setEncounter(FHIREncounter::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ENDPOINT === $childName) {
                $type->setEndpoint(FHIREndpoint::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ENROLLMENT_REQUEST === $childName) {
                $type->setEnrollmentRequest(FHIREnrollmentRequest::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ENROLLMENT_RESPONSE === $childName) {
                $type->setEnrollmentResponse(FHIREnrollmentResponse::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EPISODE_OF_CARE === $childName) {
                $type->setEpisodeOfCare(FHIREpisodeOfCare::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EVENT_DEFINITION === $childName) {
                $type->setEventDefinition(FHIREventDefinition::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EVIDENCE === $childName) {
                $type->setEvidence(FHIREvidence::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EVIDENCE_VARIABLE === $childName) {
                $type->setEvidenceVariable(FHIREvidenceVariable::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXAMPLE_SCENARIO === $childName) {
                $type->setExampleScenario(FHIRExampleScenario::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXPLANATION_OF_BENEFIT === $childName) {
                $type->setExplanationOfBenefit(FHIRExplanationOfBenefit::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FAMILY_MEMBER_HISTORY === $childName) {
                $type->setFamilyMemberHistory(FHIRFamilyMemberHistory::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FLAG === $childName) {
                $type->setFlag(FHIRFlag::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_GOAL === $childName) {
                $type->setGoal(FHIRGoal::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_GRAPH_DEFINITION === $childName) {
                $type->setGraphDefinition(FHIRGraphDefinition::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_GROUP === $childName) {
                $type->setGroup(FHIRGroup::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_GUIDANCE_RESPONSE === $childName) {
                $type->setGuidanceResponse(FHIRGuidanceResponse::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_HEALTHCARE_SERVICE === $childName) {
                $type->setHealthcareService(FHIRHealthcareService::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IMAGING_STUDY === $childName) {
                $type->setImagingStudy(FHIRImagingStudy::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IMMUNIZATION === $childName) {
                $type->setImmunization(FHIRImmunization::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IMMUNIZATION_EVALUATION === $childName) {
                $type->setImmunizationEvaluation(FHIRImmunizationEvaluation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IMMUNIZATION_RECOMMENDATION === $childName) {
                $type->setImmunizationRecommendation(FHIRImmunizationRecommendation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IMPLEMENTATION_GUIDE === $childName) {
                $type->setImplementationGuide(FHIRImplementationGuide::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_INSURANCE_PLAN === $childName) {
                $type->setInsurancePlan(FHIRInsurancePlan::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_INVOICE === $childName) {
                $type->setInvoice(FHIRInvoice::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_LIBRARY === $childName) {
                $type->setLibrary(FHIRLibrary::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_LINKAGE === $childName) {
                $type->setLinkage(FHIRLinkage::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_LIST === $childName) {
                $type->setList(FHIRList::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_LOCATION === $childName) {
                $type->setLocation(FHIRLocation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEASURE === $childName) {
                $type->setMeasure(FHIRMeasure::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEASURE_REPORT === $childName) {
                $type->setMeasureReport(FHIRMeasureReport::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEDIA === $childName) {
                $type->setMedia(FHIRMedia::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEDICATION === $childName) {
                $type->setMedication(FHIRMedication::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEDICATION_ADMINISTRATION === $childName) {
                $type->setMedicationAdministration(FHIRMedicationAdministration::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEDICATION_DISPENSE === $childName) {
                $type->setMedicationDispense(FHIRMedicationDispense::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEDICATION_KNOWLEDGE === $childName) {
                $type->setMedicationKnowledge(FHIRMedicationKnowledge::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEDICATION_REQUEST === $childName) {
                $type->setMedicationRequest(FHIRMedicationRequest::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEDICATION_STATEMENT === $childName) {
                $type->setMedicationStatement(FHIRMedicationStatement::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEDICINAL_PRODUCT === $childName) {
                $type->setMedicinalProduct(FHIRMedicinalProduct::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEDICINAL_PRODUCT_AUTHORIZATION === $childName) {
                $type->setMedicinalProductAuthorization(FHIRMedicinalProductAuthorization::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEDICINAL_PRODUCT_CONTRAINDICATION === $childName) {
                $type->setMedicinalProductContraindication(FHIRMedicinalProductContraindication::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEDICINAL_PRODUCT_INDICATION === $childName) {
                $type->setMedicinalProductIndication(FHIRMedicinalProductIndication::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEDICINAL_PRODUCT_INGREDIENT === $childName) {
                $type->setMedicinalProductIngredient(FHIRMedicinalProductIngredient::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEDICINAL_PRODUCT_INTERACTION === $childName) {
                $type->setMedicinalProductInteraction(FHIRMedicinalProductInteraction::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEDICINAL_PRODUCT_MANUFACTURED === $childName) {
                $type->setMedicinalProductManufactured(FHIRMedicinalProductManufactured::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEDICINAL_PRODUCT_PACKAGED === $childName) {
                $type->setMedicinalProductPackaged(FHIRMedicinalProductPackaged::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEDICINAL_PRODUCT_PHARMACEUTICAL === $childName) {
                $type->setMedicinalProductPharmaceutical(FHIRMedicinalProductPharmaceutical::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEDICINAL_PRODUCT_UNDESIRABLE_EFFECT === $childName) {
                $type->setMedicinalProductUndesirableEffect(FHIRMedicinalProductUndesirableEffect::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MESSAGE_DEFINITION === $childName) {
                $type->setMessageDefinition(FHIRMessageDefinition::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MESSAGE_HEADER === $childName) {
                $type->setMessageHeader(FHIRMessageHeader::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MOLECULAR_SEQUENCE === $childName) {
                $type->setMolecularSequence(FHIRMolecularSequence::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_NAMING_SYSTEM === $childName) {
                $type->setNamingSystem(FHIRNamingSystem::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_NUTRITION_ORDER === $childName) {
                $type->setNutritionOrder(FHIRNutritionOrder::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_OBSERVATION === $childName) {
                $type->setObservation(FHIRObservation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_OBSERVATION_DEFINITION === $childName) {
                $type->setObservationDefinition(FHIRObservationDefinition::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_OPERATION_DEFINITION === $childName) {
                $type->setOperationDefinition(FHIROperationDefinition::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_OPERATION_OUTCOME === $childName) {
                $type->setOperationOutcome(FHIROperationOutcome::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ORGANIZATION === $childName) {
                $type->setOrganization(FHIROrganization::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ORGANIZATION_AFFILIATION === $childName) {
                $type->setOrganizationAffiliation(FHIROrganizationAffiliation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATIENT === $childName) {
                $type->setPatient(FHIRPatient::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PAYMENT_NOTICE === $childName) {
                $type->setPaymentNotice(FHIRPaymentNotice::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PAYMENT_RECONCILIATION === $childName) {
                $type->setPaymentReconciliation(FHIRPaymentReconciliation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PERSON === $childName) {
                $type->setPerson(FHIRPerson::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PLAN_DEFINITION === $childName) {
                $type->setPlanDefinition(FHIRPlanDefinition::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PRACTITIONER === $childName) {
                $type->setPractitioner(FHIRPractitioner::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PRACTITIONER_ROLE === $childName) {
                $type->setPractitionerRole(FHIRPractitionerRole::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PROCEDURE === $childName) {
                $type->setProcedure(FHIRProcedure::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PROVENANCE === $childName) {
                $type->setProvenance(FHIRProvenance::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_QUESTIONNAIRE === $childName) {
                $type->setQuestionnaire(FHIRQuestionnaire::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_QUESTIONNAIRE_RESPONSE === $childName) {
                $type->setQuestionnaireResponse(FHIRQuestionnaireResponse::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RELATED_PERSON === $childName) {
                $type->setRelatedPerson(FHIRRelatedPerson::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REQUEST_GROUP === $childName) {
                $type->setRequestGroup(FHIRRequestGroup::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RESEARCH_DEFINITION === $childName) {
                $type->setResearchDefinition(FHIRResearchDefinition::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RESEARCH_ELEMENT_DEFINITION === $childName) {
                $type->setResearchElementDefinition(FHIRResearchElementDefinition::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RESEARCH_STUDY === $childName) {
                $type->setResearchStudy(FHIRResearchStudy::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RESEARCH_SUBJECT === $childName) {
                $type->setResearchSubject(FHIRResearchSubject::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RISK_ASSESSMENT === $childName) {
                $type->setRiskAssessment(FHIRRiskAssessment::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RISK_EVIDENCE_SYNTHESIS === $childName) {
                $type->setRiskEvidenceSynthesis(FHIRRiskEvidenceSynthesis::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SCHEDULE === $childName) {
                $type->setSchedule(FHIRSchedule::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SEARCH_PARAMETER === $childName) {
                $type->setSearchParameter(FHIRSearchParameter::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SERVICE_REQUEST === $childName) {
                $type->setServiceRequest(FHIRServiceRequest::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SLOT === $childName) {
                $type->setSlot(FHIRSlot::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SPECIMEN === $childName) {
                $type->setSpecimen(FHIRSpecimen::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SPECIMEN_DEFINITION === $childName) {
                $type->setSpecimenDefinition(FHIRSpecimenDefinition::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STRUCTURE_DEFINITION === $childName) {
                $type->setStructureDefinition(FHIRStructureDefinition::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STRUCTURE_MAP === $childName) {
                $type->setStructureMap(FHIRStructureMap::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUBSCRIPTION === $childName) {
                $type->setSubscription(FHIRSubscription::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUBSTANCE === $childName) {
                $type->setSubstance(FHIRSubstance::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUBSTANCE_NUCLEIC_ACID === $childName) {
                $type->setSubstanceNucleicAcid(FHIRSubstanceNucleicAcid::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUBSTANCE_POLYMER === $childName) {
                $type->setSubstancePolymer(FHIRSubstancePolymer::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUBSTANCE_PROTEIN === $childName) {
                $type->setSubstanceProtein(FHIRSubstanceProtein::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUBSTANCE_REFERENCE_INFORMATION === $childName) {
                $type->setSubstanceReferenceInformation(FHIRSubstanceReferenceInformation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUBSTANCE_SOURCE_MATERIAL === $childName) {
                $type->setSubstanceSourceMaterial(FHIRSubstanceSourceMaterial::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUBSTANCE_SPECIFICATION === $childName) {
                $type->setSubstanceSpecification(FHIRSubstanceSpecification::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUPPLY_DELIVERY === $childName) {
                $type->setSupplyDelivery(FHIRSupplyDelivery::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUPPLY_REQUEST === $childName) {
                $type->setSupplyRequest(FHIRSupplyRequest::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TASK === $childName) {
                $type->setTask(FHIRTask::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TERMINOLOGY_CAPABILITIES === $childName) {
                $type->setTerminologyCapabilities(FHIRTerminologyCapabilities::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TEST_REPORT === $childName) {
                $type->setTestReport(FHIRTestReport::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TEST_SCRIPT === $childName) {
                $type->setTestScript(FHIRTestScript::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_SET === $childName) {
                $type->setValueSet(FHIRValueSet::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VERIFICATION_RESULT === $childName) {
                $type->setVerificationResult(FHIRVerificationResult::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VISION_PRESCRIPTION === $childName) {
                $type->setVisionPrescription(FHIRVisionPrescription::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PARAMETERS === $childName) {
                $type->setParameters(FHIRParameters::xmlUnserialize($n, null, $config));
            }
        }
        $attributes = $element->attributes();
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (null !== ($v = $this->getAccount())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getActivityDefinition())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getAdverseEvent())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getAllergyIntolerance())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getAppointment())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getAppointmentResponse())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getAuditEvent())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getBasic())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getBinary())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getBiologicallyDerivedProduct())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getBodyStructure())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getBundle())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getCapabilityStatement())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getCarePlan())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getCareTeam())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getCatalogEntry())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getChargeItem())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getChargeItemDefinition())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getClaim())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getClaimResponse())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getClinicalImpression())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getCodeSystem())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getCommunication())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getCommunicationRequest())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getCompartmentDefinition())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getComposition())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getConceptMap())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getCondition())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getConsent())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getContract())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getCoverage())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getCoverageEligibilityRequest())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getCoverageEligibilityResponse())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getDetectedIssue())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getDevice())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getDeviceDefinition())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getDeviceMetric())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getDeviceRequest())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getDeviceUseStatement())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getDiagnosticReport())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getDocumentManifest())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getDocumentReference())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getEffectEvidenceSynthesis())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getEncounter())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getEndpoint())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getEnrollmentRequest())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getEnrollmentResponse())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getEpisodeOfCare())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getEventDefinition())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getEvidence())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getEvidenceVariable())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getExampleScenario())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getExplanationOfBenefit())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getFamilyMemberHistory())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getFlag())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getGoal())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getGraphDefinition())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getGroup())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getGuidanceResponse())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getHealthcareService())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getImagingStudy())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getImmunization())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getImmunizationEvaluation())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getImmunizationRecommendation())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getImplementationGuide())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getInsurancePlan())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getInvoice())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getLibrary())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getLinkage())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getList())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getLocation())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getMeasure())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getMeasureReport())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getMedia())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getMedication())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getMedicationAdministration())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getMedicationDispense())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getMedicationKnowledge())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getMedicationRequest())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getMedicationStatement())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getMedicinalProduct())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getMedicinalProductAuthorization())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getMedicinalProductContraindication())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getMedicinalProductIndication())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getMedicinalProductIngredient())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getMedicinalProductInteraction())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getMedicinalProductManufactured())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getMedicinalProductPackaged())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getMedicinalProductPharmaceutical())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getMedicinalProductUndesirableEffect())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getMessageDefinition())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getMessageHeader())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getMolecularSequence())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getNamingSystem())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getNutritionOrder())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getObservation())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getObservationDefinition())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getOperationDefinition())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getOperationOutcome())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getOrganization())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getOrganizationAffiliation())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getPatient())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getPaymentNotice())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getPaymentReconciliation())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getPerson())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getPlanDefinition())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getPractitioner())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getPractitionerRole())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getProcedure())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getProvenance())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getQuestionnaire())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getQuestionnaireResponse())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getRelatedPerson())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getRequestGroup())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getResearchDefinition())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getResearchElementDefinition())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getResearchStudy())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getResearchSubject())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getRiskAssessment())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getRiskEvidenceSynthesis())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getSchedule())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getSearchParameter())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getServiceRequest())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getSlot())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getSpecimen())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getSpecimenDefinition())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getStructureDefinition())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getStructureMap())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getSubscription())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getSubstance())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getSubstanceNucleicAcid())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getSubstancePolymer())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getSubstanceProtein())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getSubstanceReferenceInformation())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getSubstanceSourceMaterial())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getSubstanceSpecification())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getSupplyDelivery())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getSupplyRequest())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getTask())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getTerminologyCapabilities())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getTestReport())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getTestScript())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getValueSet())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getVerificationResult())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getVisionPrescription())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getParameters())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'ResourceContainer', $this->_getSourceXmlns());
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return null|object
     */
    public function jsonSerialize(): mixed
    {
        if (null !== ($v = $this->getAccount())) {
            return $v;
        }
        if (null !== ($v = $this->getActivityDefinition())) {
            return $v;
        }
        if (null !== ($v = $this->getAdverseEvent())) {
            return $v;
        }
        if (null !== ($v = $this->getAllergyIntolerance())) {
            return $v;
        }
        if (null !== ($v = $this->getAppointment())) {
            return $v;
        }
        if (null !== ($v = $this->getAppointmentResponse())) {
            return $v;
        }
        if (null !== ($v = $this->getAuditEvent())) {
            return $v;
        }
        if (null !== ($v = $this->getBasic())) {
            return $v;
        }
        if (null !== ($v = $this->getBinary())) {
            return $v;
        }
        if (null !== ($v = $this->getBiologicallyDerivedProduct())) {
            return $v;
        }
        if (null !== ($v = $this->getBodyStructure())) {
            return $v;
        }
        if (null !== ($v = $this->getBundle())) {
            return $v;
        }
        if (null !== ($v = $this->getCapabilityStatement())) {
            return $v;
        }
        if (null !== ($v = $this->getCarePlan())) {
            return $v;
        }
        if (null !== ($v = $this->getCareTeam())) {
            return $v;
        }
        if (null !== ($v = $this->getCatalogEntry())) {
            return $v;
        }
        if (null !== ($v = $this->getChargeItem())) {
            return $v;
        }
        if (null !== ($v = $this->getChargeItemDefinition())) {
            return $v;
        }
        if (null !== ($v = $this->getClaim())) {
            return $v;
        }
        if (null !== ($v = $this->getClaimResponse())) {
            return $v;
        }
        if (null !== ($v = $this->getClinicalImpression())) {
            return $v;
        }
        if (null !== ($v = $this->getCodeSystem())) {
            return $v;
        }
        if (null !== ($v = $this->getCommunication())) {
            return $v;
        }
        if (null !== ($v = $this->getCommunicationRequest())) {
            return $v;
        }
        if (null !== ($v = $this->getCompartmentDefinition())) {
            return $v;
        }
        if (null !== ($v = $this->getComposition())) {
            return $v;
        }
        if (null !== ($v = $this->getConceptMap())) {
            return $v;
        }
        if (null !== ($v = $this->getCondition())) {
            return $v;
        }
        if (null !== ($v = $this->getConsent())) {
            return $v;
        }
        if (null !== ($v = $this->getContract())) {
            return $v;
        }
        if (null !== ($v = $this->getCoverage())) {
            return $v;
        }
        if (null !== ($v = $this->getCoverageEligibilityRequest())) {
            return $v;
        }
        if (null !== ($v = $this->getCoverageEligibilityResponse())) {
            return $v;
        }
        if (null !== ($v = $this->getDetectedIssue())) {
            return $v;
        }
        if (null !== ($v = $this->getDevice())) {
            return $v;
        }
        if (null !== ($v = $this->getDeviceDefinition())) {
            return $v;
        }
        if (null !== ($v = $this->getDeviceMetric())) {
            return $v;
        }
        if (null !== ($v = $this->getDeviceRequest())) {
            return $v;
        }
        if (null !== ($v = $this->getDeviceUseStatement())) {
            return $v;
        }
        if (null !== ($v = $this->getDiagnosticReport())) {
            return $v;
        }
        if (null !== ($v = $this->getDocumentManifest())) {
            return $v;
        }
        if (null !== ($v = $this->getDocumentReference())) {
            return $v;
        }
        if (null !== ($v = $this->getEffectEvidenceSynthesis())) {
            return $v;
        }
        if (null !== ($v = $this->getEncounter())) {
            return $v;
        }
        if (null !== ($v = $this->getEndpoint())) {
            return $v;
        }
        if (null !== ($v = $this->getEnrollmentRequest())) {
            return $v;
        }
        if (null !== ($v = $this->getEnrollmentResponse())) {
            return $v;
        }
        if (null !== ($v = $this->getEpisodeOfCare())) {
            return $v;
        }
        if (null !== ($v = $this->getEventDefinition())) {
            return $v;
        }
        if (null !== ($v = $this->getEvidence())) {
            return $v;
        }
        if (null !== ($v = $this->getEvidenceVariable())) {
            return $v;
        }
        if (null !== ($v = $this->getExampleScenario())) {
            return $v;
        }
        if (null !== ($v = $this->getExplanationOfBenefit())) {
            return $v;
        }
        if (null !== ($v = $this->getFamilyMemberHistory())) {
            return $v;
        }
        if (null !== ($v = $this->getFlag())) {
            return $v;
        }
        if (null !== ($v = $this->getGoal())) {
            return $v;
        }
        if (null !== ($v = $this->getGraphDefinition())) {
            return $v;
        }
        if (null !== ($v = $this->getGroup())) {
            return $v;
        }
        if (null !== ($v = $this->getGuidanceResponse())) {
            return $v;
        }
        if (null !== ($v = $this->getHealthcareService())) {
            return $v;
        }
        if (null !== ($v = $this->getImagingStudy())) {
            return $v;
        }
        if (null !== ($v = $this->getImmunization())) {
            return $v;
        }
        if (null !== ($v = $this->getImmunizationEvaluation())) {
            return $v;
        }
        if (null !== ($v = $this->getImmunizationRecommendation())) {
            return $v;
        }
        if (null !== ($v = $this->getImplementationGuide())) {
            return $v;
        }
        if (null !== ($v = $this->getInsurancePlan())) {
            return $v;
        }
        if (null !== ($v = $this->getInvoice())) {
            return $v;
        }
        if (null !== ($v = $this->getLibrary())) {
            return $v;
        }
        if (null !== ($v = $this->getLinkage())) {
            return $v;
        }
        if (null !== ($v = $this->getList())) {
            return $v;
        }
        if (null !== ($v = $this->getLocation())) {
            return $v;
        }
        if (null !== ($v = $this->getMeasure())) {
            return $v;
        }
        if (null !== ($v = $this->getMeasureReport())) {
            return $v;
        }
        if (null !== ($v = $this->getMedia())) {
            return $v;
        }
        if (null !== ($v = $this->getMedication())) {
            return $v;
        }
        if (null !== ($v = $this->getMedicationAdministration())) {
            return $v;
        }
        if (null !== ($v = $this->getMedicationDispense())) {
            return $v;
        }
        if (null !== ($v = $this->getMedicationKnowledge())) {
            return $v;
        }
        if (null !== ($v = $this->getMedicationRequest())) {
            return $v;
        }
        if (null !== ($v = $this->getMedicationStatement())) {
            return $v;
        }
        if (null !== ($v = $this->getMedicinalProduct())) {
            return $v;
        }
        if (null !== ($v = $this->getMedicinalProductAuthorization())) {
            return $v;
        }
        if (null !== ($v = $this->getMedicinalProductContraindication())) {
            return $v;
        }
        if (null !== ($v = $this->getMedicinalProductIndication())) {
            return $v;
        }
        if (null !== ($v = $this->getMedicinalProductIngredient())) {
            return $v;
        }
        if (null !== ($v = $this->getMedicinalProductInteraction())) {
            return $v;
        }
        if (null !== ($v = $this->getMedicinalProductManufactured())) {
            return $v;
        }
        if (null !== ($v = $this->getMedicinalProductPackaged())) {
            return $v;
        }
        if (null !== ($v = $this->getMedicinalProductPharmaceutical())) {
            return $v;
        }
        if (null !== ($v = $this->getMedicinalProductUndesirableEffect())) {
            return $v;
        }
        if (null !== ($v = $this->getMessageDefinition())) {
            return $v;
        }
        if (null !== ($v = $this->getMessageHeader())) {
            return $v;
        }
        if (null !== ($v = $this->getMolecularSequence())) {
            return $v;
        }
        if (null !== ($v = $this->getNamingSystem())) {
            return $v;
        }
        if (null !== ($v = $this->getNutritionOrder())) {
            return $v;
        }
        if (null !== ($v = $this->getObservation())) {
            return $v;
        }
        if (null !== ($v = $this->getObservationDefinition())) {
            return $v;
        }
        if (null !== ($v = $this->getOperationDefinition())) {
            return $v;
        }
        if (null !== ($v = $this->getOperationOutcome())) {
            return $v;
        }
        if (null !== ($v = $this->getOrganization())) {
            return $v;
        }
        if (null !== ($v = $this->getOrganizationAffiliation())) {
            return $v;
        }
        if (null !== ($v = $this->getPatient())) {
            return $v;
        }
        if (null !== ($v = $this->getPaymentNotice())) {
            return $v;
        }
        if (null !== ($v = $this->getPaymentReconciliation())) {
            return $v;
        }
        if (null !== ($v = $this->getPerson())) {
            return $v;
        }
        if (null !== ($v = $this->getPlanDefinition())) {
            return $v;
        }
        if (null !== ($v = $this->getPractitioner())) {
            return $v;
        }
        if (null !== ($v = $this->getPractitionerRole())) {
            return $v;
        }
        if (null !== ($v = $this->getProcedure())) {
            return $v;
        }
        if (null !== ($v = $this->getProvenance())) {
            return $v;
        }
        if (null !== ($v = $this->getQuestionnaire())) {
            return $v;
        }
        if (null !== ($v = $this->getQuestionnaireResponse())) {
            return $v;
        }
        if (null !== ($v = $this->getRelatedPerson())) {
            return $v;
        }
        if (null !== ($v = $this->getRequestGroup())) {
            return $v;
        }
        if (null !== ($v = $this->getResearchDefinition())) {
            return $v;
        }
        if (null !== ($v = $this->getResearchElementDefinition())) {
            return $v;
        }
        if (null !== ($v = $this->getResearchStudy())) {
            return $v;
        }
        if (null !== ($v = $this->getResearchSubject())) {
            return $v;
        }
        if (null !== ($v = $this->getRiskAssessment())) {
            return $v;
        }
        if (null !== ($v = $this->getRiskEvidenceSynthesis())) {
            return $v;
        }
        if (null !== ($v = $this->getSchedule())) {
            return $v;
        }
        if (null !== ($v = $this->getSearchParameter())) {
            return $v;
        }
        if (null !== ($v = $this->getServiceRequest())) {
            return $v;
        }
        if (null !== ($v = $this->getSlot())) {
            return $v;
        }
        if (null !== ($v = $this->getSpecimen())) {
            return $v;
        }
        if (null !== ($v = $this->getSpecimenDefinition())) {
            return $v;
        }
        if (null !== ($v = $this->getStructureDefinition())) {
            return $v;
        }
        if (null !== ($v = $this->getStructureMap())) {
            return $v;
        }
        if (null !== ($v = $this->getSubscription())) {
            return $v;
        }
        if (null !== ($v = $this->getSubstance())) {
            return $v;
        }
        if (null !== ($v = $this->getSubstanceNucleicAcid())) {
            return $v;
        }
        if (null !== ($v = $this->getSubstancePolymer())) {
            return $v;
        }
        if (null !== ($v = $this->getSubstanceProtein())) {
            return $v;
        }
        if (null !== ($v = $this->getSubstanceReferenceInformation())) {
            return $v;
        }
        if (null !== ($v = $this->getSubstanceSourceMaterial())) {
            return $v;
        }
        if (null !== ($v = $this->getSubstanceSpecification())) {
            return $v;
        }
        if (null !== ($v = $this->getSupplyDelivery())) {
            return $v;
        }
        if (null !== ($v = $this->getSupplyRequest())) {
            return $v;
        }
        if (null !== ($v = $this->getTask())) {
            return $v;
        }
        if (null !== ($v = $this->getTerminologyCapabilities())) {
            return $v;
        }
        if (null !== ($v = $this->getTestReport())) {
            return $v;
        }
        if (null !== ($v = $this->getTestScript())) {
            return $v;
        }
        if (null !== ($v = $this->getValueSet())) {
            return $v;
        }
        if (null !== ($v = $this->getVerificationResult())) {
            return $v;
        }
        if (null !== ($v = $this->getVisionPrescription())) {
            return $v;
        }
        if (null !== ($v = $this->getParameters())) {
            return $v;
        }
        return null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}