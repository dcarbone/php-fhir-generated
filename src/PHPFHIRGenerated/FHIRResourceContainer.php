<?php

namespace PHPFHIRGenerated;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRBinary;
use PHPFHIRGenerated\FHIRResource\FHIRBundle;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAccount;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRActivityDefinition;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAdverseEvent;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAppointment;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAuditEvent;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRBasic;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRBodySite;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCarePlan;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCareTeam;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaim;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClinicalImpression;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCodeSystem;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunication;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunicationRequest;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCompartmentDefinition;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRComposition;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConceptMap;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConsent;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCoverage;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDataElement;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDetectedIssue;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceComponent;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceMetric;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceRequest;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceUseStatement;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDocumentManifest;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDocumentReference;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREligibilityRequest;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREligibilityResponse;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREncounter;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREndpoint;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREnrollmentRequest;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREnrollmentResponse;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExpansionProfile;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFlag;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRGoal;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRGraphDefinition;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRGroup;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRGuidanceResponse;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRHealthcareService;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImagingManifest;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImagingStudy;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunizationRecommendation;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImplementationGuide;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRLibrary;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRLinkage;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRList;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRLocation;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMeasure;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMeasureReport;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedia;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedication;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicationDispense;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicationRequest;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicationStatement;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMessageDefinition;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMessageHeader;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRNamingSystem;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRNutritionOrder;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRObservation;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIROperationDefinition;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIROperationOutcome;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIROrganization;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPatient;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPaymentNotice;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPerson;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPlanDefinition;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPractitioner;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPractitionerRole;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcedure;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcedureRequest;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessRequest;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessResponse;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProvenance;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRQuestionnaire;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRQuestionnaireResponse;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRReferralRequest;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRRelatedPerson;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRRequestGroup;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRResearchStudy;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRResearchSubject;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRRiskAssessment;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSchedule;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSequence;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRServiceDefinition;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSlot;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSpecimen;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureDefinition;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSubscription;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSubstance;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSupplyRequest;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRTask;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRTestReport;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRTestScript;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRValueSet;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRVisionPrescription;
use PHPFHIRGenerated\FHIRResource\FHIRParameters;

/**
 * (choose any one of the elements, but only one)
 *
 * Class FHIRResourceContainer
 * @package PHPFHIRGenerated
 */
class FHIRResourceContainer implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ResourceContainer';

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAccount
     */
    private $Account = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRActivityDefinition
     */
    private $ActivityDefinition = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     */
    private $AdverseEvent = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    private $AllergyIntolerance = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    private $Appointment = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse
     */
    private $AppointmentResponse = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAuditEvent
     */
    private $AuditEvent = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRBasic
     */
    private $Basic = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRBinary
     */
    private $Binary = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRBodySite
     */
    private $BodySite = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRBundle
     */
    private $Bundle = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
     */
    private $CapabilityStatement = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCarePlan
     */
    private $CarePlan = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCareTeam
     */
    private $CareTeam = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    private $ChargeItem = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    private $Claim = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    private $ClaimResponse = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClinicalImpression
     */
    private $ClinicalImpression = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    private $CodeSystem = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunication
     */
    private $Communication = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunicationRequest
     */
    private $CommunicationRequest = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCompartmentDefinition
     */
    private $CompartmentDefinition = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRComposition
     */
    private $Composition = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConceptMap
     */
    private $ConceptMap = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition
     */
    private $Condition = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConsent
     */
    private $Consent = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    private $Contract = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCoverage
     */
    private $Coverage = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDataElement
     */
    private $DataElement = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     */
    private $DetectedIssue = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
     */
    private $Device = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceComponent
     */
    private $DeviceComponent = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceMetric
     */
    private $DeviceMetric = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceRequest
     */
    private $DeviceRequest = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceUseStatement
     */
    private $DeviceUseStatement = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport
     */
    private $DiagnosticReport = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDocumentManifest
     */
    private $DocumentManifest = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDocumentReference
     */
    private $DocumentReference = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREligibilityRequest
     */
    private $EligibilityRequest = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREligibilityResponse
     */
    private $EligibilityResponse = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREncounter
     */
    private $Encounter = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREndpoint
     */
    private $Endpoint = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREnrollmentRequest
     */
    private $EnrollmentRequest = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREnrollmentResponse
     */
    private $EnrollmentResponse = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
     */
    private $EpisodeOfCare = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExpansionProfile
     */
    private $ExpansionProfile = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit
     */
    private $ExplanationOfBenefit = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory
     */
    private $FamilyMemberHistory = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFlag
     */
    private $Flag = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRGoal
     */
    private $Goal = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRGraphDefinition
     */
    private $GraphDefinition = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRGroup
     */
    private $Group = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRGuidanceResponse
     */
    private $GuidanceResponse = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    private $HealthcareService = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImagingManifest
     */
    private $ImagingManifest = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImagingStudy
     */
    private $ImagingStudy = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
     */
    private $Immunization = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunizationRecommendation
     */
    private $ImmunizationRecommendation = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
     */
    private $ImplementationGuide = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRLibrary
     */
    private $Library = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRLinkage
     */
    private $Linkage = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRList
     */
    private $List = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    private $Location = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMeasure
     */
    private $Measure = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMeasureReport
     */
    private $MeasureReport = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedia
     */
    private $Media = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedication
     */
    private $Medication = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
     */
    private $MedicationAdministration = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    private $MedicationDispense = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicationRequest
     */
    private $MedicationRequest = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicationStatement
     */
    private $MedicationStatement = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMessageDefinition
     */
    private $MessageDefinition = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMessageHeader
     */
    private $MessageHeader = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRNamingSystem
     */
    private $NamingSystem = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRNutritionOrder
     */
    private $NutritionOrder = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRObservation
     */
    private $Observation = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIROperationDefinition
     */
    private $OperationDefinition = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIROperationOutcome
     */
    private $OperationOutcome = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIROrganization
     */
    private $Organization = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRParameters
     */
    private $Parameters = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPatient
     */
    private $Patient = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPaymentNotice
     */
    private $PaymentNotice = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation
     */
    private $PaymentReconciliation = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPerson
     */
    private $Person = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
     */
    private $PlanDefinition = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPractitioner
     */
    private $Practitioner = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPractitionerRole
     */
    private $PractitionerRole = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcedure
     */
    private $Procedure = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcedureRequest
     */
    private $ProcedureRequest = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessRequest
     */
    private $ProcessRequest = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessResponse
     */
    private $ProcessResponse = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProvenance
     */
    private $Provenance = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRQuestionnaire
     */
    private $Questionnaire = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRQuestionnaireResponse
     */
    private $QuestionnaireResponse = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRReferralRequest
     */
    private $ReferralRequest = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRRelatedPerson
     */
    private $RelatedPerson = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRRequestGroup
     */
    private $RequestGroup = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    private $ResearchStudy = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRResearchSubject
     */
    private $ResearchSubject = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRRiskAssessment
     */
    private $RiskAssessment = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSchedule
     */
    private $Schedule = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter
     */
    private $SearchParameter = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSequence
     */
    private $Sequence = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRServiceDefinition
     */
    private $ServiceDefinition = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSlot
     */
    private $Slot = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSpecimen
     */
    private $Specimen = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureDefinition
     */
    private $StructureDefinition = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap
     */
    private $StructureMap = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSubscription
     */
    private $Subscription = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSubstance
     */
    private $Substance = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery
     */
    private $SupplyDelivery = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSupplyRequest
     */
    private $SupplyRequest = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRTask
     */
    private $Task = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRTestReport
     */
    private $TestReport = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRTestScript
     */
    private $TestScript = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRValueSet
     */
    private $ValueSet = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRVisionPrescription
     */
    private $VisionPrescription = null;

    /**
     * FHIRResourceContainer Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            $key = key($data);
            if (!is_string($key)) {
                throw new \InvalidArgumentException(sprintf(
                    '\PHPFHIRGenerated\FHIRResourceContainer::__construct - When $data is an array, the first key must be a string with a value equal to one of the fields defined in this object.  %s seen',
                    $key
                ));
            }
            $this->{"set{$key}"}(current($data));
        } else if (is_object($data)) {
            $this->{sprintf('set%s', substr(strrchr(get_class($data), 'FHIR'), 4))}($data);
        } else if (null !== $data) {
            throw new \InvalidArgumentException(sprintf(
                '\PHPFHIRGenerated\FHIRResourceContainer::__construct - $data must be an array, an object, or null.  %s seen.',
                gettype($data)
            ));
        }
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAccount
     * @return $this
     */
    public function setAccount(FHIRAccount $Account = null)
    {
        if (null === $Account) {
            return $this; 
        }
        $this->Account = $Account;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAccount
     */
    public function getAccount()
    {
        return $this->Account;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRActivityDefinition
     * @return $this
     */
    public function setActivityDefinition(FHIRActivityDefinition $ActivityDefinition = null)
    {
        if (null === $ActivityDefinition) {
            return $this; 
        }
        $this->ActivityDefinition = $ActivityDefinition;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRActivityDefinition
     */
    public function getActivityDefinition()
    {
        return $this->ActivityDefinition;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     * @return $this
     */
    public function setAdverseEvent(FHIRAdverseEvent $AdverseEvent = null)
    {
        if (null === $AdverseEvent) {
            return $this; 
        }
        $this->AdverseEvent = $AdverseEvent;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     */
    public function getAdverseEvent()
    {
        return $this->AdverseEvent;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     * @return $this
     */
    public function setAllergyIntolerance(FHIRAllergyIntolerance $AllergyIntolerance = null)
    {
        if (null === $AllergyIntolerance) {
            return $this; 
        }
        $this->AllergyIntolerance = $AllergyIntolerance;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function getAllergyIntolerance()
    {
        return $this->AllergyIntolerance;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAppointment
     * @return $this
     */
    public function setAppointment(FHIRAppointment $Appointment = null)
    {
        if (null === $Appointment) {
            return $this; 
        }
        $this->Appointment = $Appointment;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function getAppointment()
    {
        return $this->Appointment;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse
     * @return $this
     */
    public function setAppointmentResponse(FHIRAppointmentResponse $AppointmentResponse = null)
    {
        if (null === $AppointmentResponse) {
            return $this; 
        }
        $this->AppointmentResponse = $AppointmentResponse;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse
     */
    public function getAppointmentResponse()
    {
        return $this->AppointmentResponse;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAuditEvent
     * @return $this
     */
    public function setAuditEvent(FHIRAuditEvent $AuditEvent = null)
    {
        if (null === $AuditEvent) {
            return $this; 
        }
        $this->AuditEvent = $AuditEvent;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAuditEvent
     */
    public function getAuditEvent()
    {
        return $this->AuditEvent;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRBasic
     * @return $this
     */
    public function setBasic(FHIRBasic $Basic = null)
    {
        if (null === $Basic) {
            return $this; 
        }
        $this->Basic = $Basic;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRBasic
     */
    public function getBasic()
    {
        return $this->Basic;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRBinary
     * @return $this
     */
    public function setBinary(FHIRBinary $Binary = null)
    {
        if (null === $Binary) {
            return $this; 
        }
        $this->Binary = $Binary;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRBinary
     */
    public function getBinary()
    {
        return $this->Binary;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRBodySite
     * @return $this
     */
    public function setBodySite(FHIRBodySite $BodySite = null)
    {
        if (null === $BodySite) {
            return $this; 
        }
        $this->BodySite = $BodySite;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRBodySite
     */
    public function getBodySite()
    {
        return $this->BodySite;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRBundle
     * @return $this
     */
    public function setBundle(FHIRBundle $Bundle = null)
    {
        if (null === $Bundle) {
            return $this; 
        }
        $this->Bundle = $Bundle;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRBundle
     */
    public function getBundle()
    {
        return $this->Bundle;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
     * @return $this
     */
    public function setCapabilityStatement(FHIRCapabilityStatement $CapabilityStatement = null)
    {
        if (null === $CapabilityStatement) {
            return $this; 
        }
        $this->CapabilityStatement = $CapabilityStatement;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
     */
    public function getCapabilityStatement()
    {
        return $this->CapabilityStatement;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCarePlan
     * @return $this
     */
    public function setCarePlan(FHIRCarePlan $CarePlan = null)
    {
        if (null === $CarePlan) {
            return $this; 
        }
        $this->CarePlan = $CarePlan;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCarePlan
     */
    public function getCarePlan()
    {
        return $this->CarePlan;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCareTeam
     * @return $this
     */
    public function setCareTeam(FHIRCareTeam $CareTeam = null)
    {
        if (null === $CareTeam) {
            return $this; 
        }
        $this->CareTeam = $CareTeam;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCareTeam
     */
    public function getCareTeam()
    {
        return $this->CareTeam;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem
     * @return $this
     */
    public function setChargeItem(FHIRChargeItem $ChargeItem = null)
    {
        if (null === $ChargeItem) {
            return $this; 
        }
        $this->ChargeItem = $ChargeItem;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function getChargeItem()
    {
        return $this->ChargeItem;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaim
     * @return $this
     */
    public function setClaim(FHIRClaim $Claim = null)
    {
        if (null === $Claim) {
            return $this; 
        }
        $this->Claim = $Claim;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function getClaim()
    {
        return $this->Claim;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     * @return $this
     */
    public function setClaimResponse(FHIRClaimResponse $ClaimResponse = null)
    {
        if (null === $ClaimResponse) {
            return $this; 
        }
        $this->ClaimResponse = $ClaimResponse;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function getClaimResponse()
    {
        return $this->ClaimResponse;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClinicalImpression
     * @return $this
     */
    public function setClinicalImpression(FHIRClinicalImpression $ClinicalImpression = null)
    {
        if (null === $ClinicalImpression) {
            return $this; 
        }
        $this->ClinicalImpression = $ClinicalImpression;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClinicalImpression
     */
    public function getClinicalImpression()
    {
        return $this->ClinicalImpression;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     * @return $this
     */
    public function setCodeSystem(FHIRCodeSystem $CodeSystem = null)
    {
        if (null === $CodeSystem) {
            return $this; 
        }
        $this->CodeSystem = $CodeSystem;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    public function getCodeSystem()
    {
        return $this->CodeSystem;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunication
     * @return $this
     */
    public function setCommunication(FHIRCommunication $Communication = null)
    {
        if (null === $Communication) {
            return $this; 
        }
        $this->Communication = $Communication;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunication
     */
    public function getCommunication()
    {
        return $this->Communication;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunicationRequest
     * @return $this
     */
    public function setCommunicationRequest(FHIRCommunicationRequest $CommunicationRequest = null)
    {
        if (null === $CommunicationRequest) {
            return $this; 
        }
        $this->CommunicationRequest = $CommunicationRequest;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunicationRequest
     */
    public function getCommunicationRequest()
    {
        return $this->CommunicationRequest;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCompartmentDefinition
     * @return $this
     */
    public function setCompartmentDefinition(FHIRCompartmentDefinition $CompartmentDefinition = null)
    {
        if (null === $CompartmentDefinition) {
            return $this; 
        }
        $this->CompartmentDefinition = $CompartmentDefinition;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCompartmentDefinition
     */
    public function getCompartmentDefinition()
    {
        return $this->CompartmentDefinition;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRComposition
     * @return $this
     */
    public function setComposition(FHIRComposition $Composition = null)
    {
        if (null === $Composition) {
            return $this; 
        }
        $this->Composition = $Composition;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRComposition
     */
    public function getComposition()
    {
        return $this->Composition;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConceptMap
     * @return $this
     */
    public function setConceptMap(FHIRConceptMap $ConceptMap = null)
    {
        if (null === $ConceptMap) {
            return $this; 
        }
        $this->ConceptMap = $ConceptMap;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConceptMap
     */
    public function getConceptMap()
    {
        return $this->ConceptMap;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition
     * @return $this
     */
    public function setCondition(FHIRCondition $Condition = null)
    {
        if (null === $Condition) {
            return $this; 
        }
        $this->Condition = $Condition;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition
     */
    public function getCondition()
    {
        return $this->Condition;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConsent
     * @return $this
     */
    public function setConsent(FHIRConsent $Consent = null)
    {
        if (null === $Consent) {
            return $this; 
        }
        $this->Consent = $Consent;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConsent
     */
    public function getConsent()
    {
        return $this->Consent;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     * @return $this
     */
    public function setContract(FHIRContract $Contract = null)
    {
        if (null === $Contract) {
            return $this; 
        }
        $this->Contract = $Contract;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function getContract()
    {
        return $this->Contract;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCoverage
     * @return $this
     */
    public function setCoverage(FHIRCoverage $Coverage = null)
    {
        if (null === $Coverage) {
            return $this; 
        }
        $this->Coverage = $Coverage;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCoverage
     */
    public function getCoverage()
    {
        return $this->Coverage;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDataElement
     * @return $this
     */
    public function setDataElement(FHIRDataElement $DataElement = null)
    {
        if (null === $DataElement) {
            return $this; 
        }
        $this->DataElement = $DataElement;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDataElement
     */
    public function getDataElement()
    {
        return $this->DataElement;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     * @return $this
     */
    public function setDetectedIssue(FHIRDetectedIssue $DetectedIssue = null)
    {
        if (null === $DetectedIssue) {
            return $this; 
        }
        $this->DetectedIssue = $DetectedIssue;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     */
    public function getDetectedIssue()
    {
        return $this->DetectedIssue;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
     * @return $this
     */
    public function setDevice(FHIRDevice $Device = null)
    {
        if (null === $Device) {
            return $this; 
        }
        $this->Device = $Device;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice
     */
    public function getDevice()
    {
        return $this->Device;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceComponent
     * @return $this
     */
    public function setDeviceComponent(FHIRDeviceComponent $DeviceComponent = null)
    {
        if (null === $DeviceComponent) {
            return $this; 
        }
        $this->DeviceComponent = $DeviceComponent;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceComponent
     */
    public function getDeviceComponent()
    {
        return $this->DeviceComponent;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceMetric
     * @return $this
     */
    public function setDeviceMetric(FHIRDeviceMetric $DeviceMetric = null)
    {
        if (null === $DeviceMetric) {
            return $this; 
        }
        $this->DeviceMetric = $DeviceMetric;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceMetric
     */
    public function getDeviceMetric()
    {
        return $this->DeviceMetric;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceRequest
     * @return $this
     */
    public function setDeviceRequest(FHIRDeviceRequest $DeviceRequest = null)
    {
        if (null === $DeviceRequest) {
            return $this; 
        }
        $this->DeviceRequest = $DeviceRequest;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceRequest
     */
    public function getDeviceRequest()
    {
        return $this->DeviceRequest;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceUseStatement
     * @return $this
     */
    public function setDeviceUseStatement(FHIRDeviceUseStatement $DeviceUseStatement = null)
    {
        if (null === $DeviceUseStatement) {
            return $this; 
        }
        $this->DeviceUseStatement = $DeviceUseStatement;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceUseStatement
     */
    public function getDeviceUseStatement()
    {
        return $this->DeviceUseStatement;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport
     * @return $this
     */
    public function setDiagnosticReport(FHIRDiagnosticReport $DiagnosticReport = null)
    {
        if (null === $DiagnosticReport) {
            return $this; 
        }
        $this->DiagnosticReport = $DiagnosticReport;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport
     */
    public function getDiagnosticReport()
    {
        return $this->DiagnosticReport;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDocumentManifest
     * @return $this
     */
    public function setDocumentManifest(FHIRDocumentManifest $DocumentManifest = null)
    {
        if (null === $DocumentManifest) {
            return $this; 
        }
        $this->DocumentManifest = $DocumentManifest;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDocumentManifest
     */
    public function getDocumentManifest()
    {
        return $this->DocumentManifest;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDocumentReference
     * @return $this
     */
    public function setDocumentReference(FHIRDocumentReference $DocumentReference = null)
    {
        if (null === $DocumentReference) {
            return $this; 
        }
        $this->DocumentReference = $DocumentReference;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDocumentReference
     */
    public function getDocumentReference()
    {
        return $this->DocumentReference;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREligibilityRequest
     * @return $this
     */
    public function setEligibilityRequest(FHIREligibilityRequest $EligibilityRequest = null)
    {
        if (null === $EligibilityRequest) {
            return $this; 
        }
        $this->EligibilityRequest = $EligibilityRequest;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREligibilityRequest
     */
    public function getEligibilityRequest()
    {
        return $this->EligibilityRequest;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREligibilityResponse
     * @return $this
     */
    public function setEligibilityResponse(FHIREligibilityResponse $EligibilityResponse = null)
    {
        if (null === $EligibilityResponse) {
            return $this; 
        }
        $this->EligibilityResponse = $EligibilityResponse;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREligibilityResponse
     */
    public function getEligibilityResponse()
    {
        return $this->EligibilityResponse;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREncounter
     * @return $this
     */
    public function setEncounter(FHIREncounter $Encounter = null)
    {
        if (null === $Encounter) {
            return $this; 
        }
        $this->Encounter = $Encounter;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREncounter
     */
    public function getEncounter()
    {
        return $this->Encounter;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREndpoint
     * @return $this
     */
    public function setEndpoint(FHIREndpoint $Endpoint = null)
    {
        if (null === $Endpoint) {
            return $this; 
        }
        $this->Endpoint = $Endpoint;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREndpoint
     */
    public function getEndpoint()
    {
        return $this->Endpoint;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREnrollmentRequest
     * @return $this
     */
    public function setEnrollmentRequest(FHIREnrollmentRequest $EnrollmentRequest = null)
    {
        if (null === $EnrollmentRequest) {
            return $this; 
        }
        $this->EnrollmentRequest = $EnrollmentRequest;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREnrollmentRequest
     */
    public function getEnrollmentRequest()
    {
        return $this->EnrollmentRequest;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREnrollmentResponse
     * @return $this
     */
    public function setEnrollmentResponse(FHIREnrollmentResponse $EnrollmentResponse = null)
    {
        if (null === $EnrollmentResponse) {
            return $this; 
        }
        $this->EnrollmentResponse = $EnrollmentResponse;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREnrollmentResponse
     */
    public function getEnrollmentResponse()
    {
        return $this->EnrollmentResponse;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
     * @return $this
     */
    public function setEpisodeOfCare(FHIREpisodeOfCare $EpisodeOfCare = null)
    {
        if (null === $EpisodeOfCare) {
            return $this; 
        }
        $this->EpisodeOfCare = $EpisodeOfCare;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
     */
    public function getEpisodeOfCare()
    {
        return $this->EpisodeOfCare;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExpansionProfile
     * @return $this
     */
    public function setExpansionProfile(FHIRExpansionProfile $ExpansionProfile = null)
    {
        if (null === $ExpansionProfile) {
            return $this; 
        }
        $this->ExpansionProfile = $ExpansionProfile;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExpansionProfile
     */
    public function getExpansionProfile()
    {
        return $this->ExpansionProfile;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit
     * @return $this
     */
    public function setExplanationOfBenefit(FHIRExplanationOfBenefit $ExplanationOfBenefit = null)
    {
        if (null === $ExplanationOfBenefit) {
            return $this; 
        }
        $this->ExplanationOfBenefit = $ExplanationOfBenefit;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit
     */
    public function getExplanationOfBenefit()
    {
        return $this->ExplanationOfBenefit;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory
     * @return $this
     */
    public function setFamilyMemberHistory(FHIRFamilyMemberHistory $FamilyMemberHistory = null)
    {
        if (null === $FamilyMemberHistory) {
            return $this; 
        }
        $this->FamilyMemberHistory = $FamilyMemberHistory;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory
     */
    public function getFamilyMemberHistory()
    {
        return $this->FamilyMemberHistory;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFlag
     * @return $this
     */
    public function setFlag(FHIRFlag $Flag = null)
    {
        if (null === $Flag) {
            return $this; 
        }
        $this->Flag = $Flag;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFlag
     */
    public function getFlag()
    {
        return $this->Flag;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRGoal
     * @return $this
     */
    public function setGoal(FHIRGoal $Goal = null)
    {
        if (null === $Goal) {
            return $this; 
        }
        $this->Goal = $Goal;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRGoal
     */
    public function getGoal()
    {
        return $this->Goal;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRGraphDefinition
     * @return $this
     */
    public function setGraphDefinition(FHIRGraphDefinition $GraphDefinition = null)
    {
        if (null === $GraphDefinition) {
            return $this; 
        }
        $this->GraphDefinition = $GraphDefinition;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRGraphDefinition
     */
    public function getGraphDefinition()
    {
        return $this->GraphDefinition;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRGroup
     * @return $this
     */
    public function setGroup(FHIRGroup $Group = null)
    {
        if (null === $Group) {
            return $this; 
        }
        $this->Group = $Group;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRGroup
     */
    public function getGroup()
    {
        return $this->Group;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRGuidanceResponse
     * @return $this
     */
    public function setGuidanceResponse(FHIRGuidanceResponse $GuidanceResponse = null)
    {
        if (null === $GuidanceResponse) {
            return $this; 
        }
        $this->GuidanceResponse = $GuidanceResponse;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRGuidanceResponse
     */
    public function getGuidanceResponse()
    {
        return $this->GuidanceResponse;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     * @return $this
     */
    public function setHealthcareService(FHIRHealthcareService $HealthcareService = null)
    {
        if (null === $HealthcareService) {
            return $this; 
        }
        $this->HealthcareService = $HealthcareService;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function getHealthcareService()
    {
        return $this->HealthcareService;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImagingManifest
     * @return $this
     */
    public function setImagingManifest(FHIRImagingManifest $ImagingManifest = null)
    {
        if (null === $ImagingManifest) {
            return $this; 
        }
        $this->ImagingManifest = $ImagingManifest;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImagingManifest
     */
    public function getImagingManifest()
    {
        return $this->ImagingManifest;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImagingStudy
     * @return $this
     */
    public function setImagingStudy(FHIRImagingStudy $ImagingStudy = null)
    {
        if (null === $ImagingStudy) {
            return $this; 
        }
        $this->ImagingStudy = $ImagingStudy;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImagingStudy
     */
    public function getImagingStudy()
    {
        return $this->ImagingStudy;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
     * @return $this
     */
    public function setImmunization(FHIRImmunization $Immunization = null)
    {
        if (null === $Immunization) {
            return $this; 
        }
        $this->Immunization = $Immunization;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
     */
    public function getImmunization()
    {
        return $this->Immunization;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunizationRecommendation
     * @return $this
     */
    public function setImmunizationRecommendation(FHIRImmunizationRecommendation $ImmunizationRecommendation = null)
    {
        if (null === $ImmunizationRecommendation) {
            return $this; 
        }
        $this->ImmunizationRecommendation = $ImmunizationRecommendation;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunizationRecommendation
     */
    public function getImmunizationRecommendation()
    {
        return $this->ImmunizationRecommendation;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
     * @return $this
     */
    public function setImplementationGuide(FHIRImplementationGuide $ImplementationGuide = null)
    {
        if (null === $ImplementationGuide) {
            return $this; 
        }
        $this->ImplementationGuide = $ImplementationGuide;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
     */
    public function getImplementationGuide()
    {
        return $this->ImplementationGuide;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRLibrary
     * @return $this
     */
    public function setLibrary(FHIRLibrary $Library = null)
    {
        if (null === $Library) {
            return $this; 
        }
        $this->Library = $Library;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRLibrary
     */
    public function getLibrary()
    {
        return $this->Library;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRLinkage
     * @return $this
     */
    public function setLinkage(FHIRLinkage $Linkage = null)
    {
        if (null === $Linkage) {
            return $this; 
        }
        $this->Linkage = $Linkage;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRLinkage
     */
    public function getLinkage()
    {
        return $this->Linkage;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRList
     * @return $this
     */
    public function setList(FHIRList $List = null)
    {
        if (null === $List) {
            return $this; 
        }
        $this->List = $List;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRList
     */
    public function getList()
    {
        return $this->List;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRLocation
     * @return $this
     */
    public function setLocation(FHIRLocation $Location = null)
    {
        if (null === $Location) {
            return $this; 
        }
        $this->Location = $Location;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMeasure
     * @return $this
     */
    public function setMeasure(FHIRMeasure $Measure = null)
    {
        if (null === $Measure) {
            return $this; 
        }
        $this->Measure = $Measure;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMeasure
     */
    public function getMeasure()
    {
        return $this->Measure;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMeasureReport
     * @return $this
     */
    public function setMeasureReport(FHIRMeasureReport $MeasureReport = null)
    {
        if (null === $MeasureReport) {
            return $this; 
        }
        $this->MeasureReport = $MeasureReport;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMeasureReport
     */
    public function getMeasureReport()
    {
        return $this->MeasureReport;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedia
     * @return $this
     */
    public function setMedia(FHIRMedia $Media = null)
    {
        if (null === $Media) {
            return $this; 
        }
        $this->Media = $Media;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedia
     */
    public function getMedia()
    {
        return $this->Media;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedication
     * @return $this
     */
    public function setMedication(FHIRMedication $Medication = null)
    {
        if (null === $Medication) {
            return $this; 
        }
        $this->Medication = $Medication;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedication
     */
    public function getMedication()
    {
        return $this->Medication;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
     * @return $this
     */
    public function setMedicationAdministration(FHIRMedicationAdministration $MedicationAdministration = null)
    {
        if (null === $MedicationAdministration) {
            return $this; 
        }
        $this->MedicationAdministration = $MedicationAdministration;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
     */
    public function getMedicationAdministration()
    {
        return $this->MedicationAdministration;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     * @return $this
     */
    public function setMedicationDispense(FHIRMedicationDispense $MedicationDispense = null)
    {
        if (null === $MedicationDispense) {
            return $this; 
        }
        $this->MedicationDispense = $MedicationDispense;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function getMedicationDispense()
    {
        return $this->MedicationDispense;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicationRequest
     * @return $this
     */
    public function setMedicationRequest(FHIRMedicationRequest $MedicationRequest = null)
    {
        if (null === $MedicationRequest) {
            return $this; 
        }
        $this->MedicationRequest = $MedicationRequest;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicationRequest
     */
    public function getMedicationRequest()
    {
        return $this->MedicationRequest;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicationStatement
     * @return $this
     */
    public function setMedicationStatement(FHIRMedicationStatement $MedicationStatement = null)
    {
        if (null === $MedicationStatement) {
            return $this; 
        }
        $this->MedicationStatement = $MedicationStatement;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicationStatement
     */
    public function getMedicationStatement()
    {
        return $this->MedicationStatement;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMessageDefinition
     * @return $this
     */
    public function setMessageDefinition(FHIRMessageDefinition $MessageDefinition = null)
    {
        if (null === $MessageDefinition) {
            return $this; 
        }
        $this->MessageDefinition = $MessageDefinition;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMessageDefinition
     */
    public function getMessageDefinition()
    {
        return $this->MessageDefinition;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMessageHeader
     * @return $this
     */
    public function setMessageHeader(FHIRMessageHeader $MessageHeader = null)
    {
        if (null === $MessageHeader) {
            return $this; 
        }
        $this->MessageHeader = $MessageHeader;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMessageHeader
     */
    public function getMessageHeader()
    {
        return $this->MessageHeader;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRNamingSystem
     * @return $this
     */
    public function setNamingSystem(FHIRNamingSystem $NamingSystem = null)
    {
        if (null === $NamingSystem) {
            return $this; 
        }
        $this->NamingSystem = $NamingSystem;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRNamingSystem
     */
    public function getNamingSystem()
    {
        return $this->NamingSystem;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRNutritionOrder
     * @return $this
     */
    public function setNutritionOrder(FHIRNutritionOrder $NutritionOrder = null)
    {
        if (null === $NutritionOrder) {
            return $this; 
        }
        $this->NutritionOrder = $NutritionOrder;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRNutritionOrder
     */
    public function getNutritionOrder()
    {
        return $this->NutritionOrder;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRObservation
     * @return $this
     */
    public function setObservation(FHIRObservation $Observation = null)
    {
        if (null === $Observation) {
            return $this; 
        }
        $this->Observation = $Observation;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRObservation
     */
    public function getObservation()
    {
        return $this->Observation;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIROperationDefinition
     * @return $this
     */
    public function setOperationDefinition(FHIROperationDefinition $OperationDefinition = null)
    {
        if (null === $OperationDefinition) {
            return $this; 
        }
        $this->OperationDefinition = $OperationDefinition;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIROperationDefinition
     */
    public function getOperationDefinition()
    {
        return $this->OperationDefinition;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIROperationOutcome
     * @return $this
     */
    public function setOperationOutcome(FHIROperationOutcome $OperationOutcome = null)
    {
        if (null === $OperationOutcome) {
            return $this; 
        }
        $this->OperationOutcome = $OperationOutcome;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIROperationOutcome
     */
    public function getOperationOutcome()
    {
        return $this->OperationOutcome;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIROrganization
     * @return $this
     */
    public function setOrganization(FHIROrganization $Organization = null)
    {
        if (null === $Organization) {
            return $this; 
        }
        $this->Organization = $Organization;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIROrganization
     */
    public function getOrganization()
    {
        return $this->Organization;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRParameters
     * @return $this
     */
    public function setParameters(FHIRParameters $Parameters = null)
    {
        if (null === $Parameters) {
            return $this; 
        }
        $this->Parameters = $Parameters;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRParameters
     */
    public function getParameters()
    {
        return $this->Parameters;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPatient
     * @return $this
     */
    public function setPatient(FHIRPatient $Patient = null)
    {
        if (null === $Patient) {
            return $this; 
        }
        $this->Patient = $Patient;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPatient
     */
    public function getPatient()
    {
        return $this->Patient;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPaymentNotice
     * @return $this
     */
    public function setPaymentNotice(FHIRPaymentNotice $PaymentNotice = null)
    {
        if (null === $PaymentNotice) {
            return $this; 
        }
        $this->PaymentNotice = $PaymentNotice;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPaymentNotice
     */
    public function getPaymentNotice()
    {
        return $this->PaymentNotice;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation
     * @return $this
     */
    public function setPaymentReconciliation(FHIRPaymentReconciliation $PaymentReconciliation = null)
    {
        if (null === $PaymentReconciliation) {
            return $this; 
        }
        $this->PaymentReconciliation = $PaymentReconciliation;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation
     */
    public function getPaymentReconciliation()
    {
        return $this->PaymentReconciliation;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPerson
     * @return $this
     */
    public function setPerson(FHIRPerson $Person = null)
    {
        if (null === $Person) {
            return $this; 
        }
        $this->Person = $Person;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPerson
     */
    public function getPerson()
    {
        return $this->Person;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
     * @return $this
     */
    public function setPlanDefinition(FHIRPlanDefinition $PlanDefinition = null)
    {
        if (null === $PlanDefinition) {
            return $this; 
        }
        $this->PlanDefinition = $PlanDefinition;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
     */
    public function getPlanDefinition()
    {
        return $this->PlanDefinition;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPractitioner
     * @return $this
     */
    public function setPractitioner(FHIRPractitioner $Practitioner = null)
    {
        if (null === $Practitioner) {
            return $this; 
        }
        $this->Practitioner = $Practitioner;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPractitioner
     */
    public function getPractitioner()
    {
        return $this->Practitioner;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPractitionerRole
     * @return $this
     */
    public function setPractitionerRole(FHIRPractitionerRole $PractitionerRole = null)
    {
        if (null === $PractitionerRole) {
            return $this; 
        }
        $this->PractitionerRole = $PractitionerRole;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPractitionerRole
     */
    public function getPractitionerRole()
    {
        return $this->PractitionerRole;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcedure
     * @return $this
     */
    public function setProcedure(FHIRProcedure $Procedure = null)
    {
        if (null === $Procedure) {
            return $this; 
        }
        $this->Procedure = $Procedure;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcedure
     */
    public function getProcedure()
    {
        return $this->Procedure;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcedureRequest
     * @return $this
     */
    public function setProcedureRequest(FHIRProcedureRequest $ProcedureRequest = null)
    {
        if (null === $ProcedureRequest) {
            return $this; 
        }
        $this->ProcedureRequest = $ProcedureRequest;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcedureRequest
     */
    public function getProcedureRequest()
    {
        return $this->ProcedureRequest;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessRequest
     * @return $this
     */
    public function setProcessRequest(FHIRProcessRequest $ProcessRequest = null)
    {
        if (null === $ProcessRequest) {
            return $this; 
        }
        $this->ProcessRequest = $ProcessRequest;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessRequest
     */
    public function getProcessRequest()
    {
        return $this->ProcessRequest;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessResponse
     * @return $this
     */
    public function setProcessResponse(FHIRProcessResponse $ProcessResponse = null)
    {
        if (null === $ProcessResponse) {
            return $this; 
        }
        $this->ProcessResponse = $ProcessResponse;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessResponse
     */
    public function getProcessResponse()
    {
        return $this->ProcessResponse;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProvenance
     * @return $this
     */
    public function setProvenance(FHIRProvenance $Provenance = null)
    {
        if (null === $Provenance) {
            return $this; 
        }
        $this->Provenance = $Provenance;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProvenance
     */
    public function getProvenance()
    {
        return $this->Provenance;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRQuestionnaire
     * @return $this
     */
    public function setQuestionnaire(FHIRQuestionnaire $Questionnaire = null)
    {
        if (null === $Questionnaire) {
            return $this; 
        }
        $this->Questionnaire = $Questionnaire;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRQuestionnaire
     */
    public function getQuestionnaire()
    {
        return $this->Questionnaire;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRQuestionnaireResponse
     * @return $this
     */
    public function setQuestionnaireResponse(FHIRQuestionnaireResponse $QuestionnaireResponse = null)
    {
        if (null === $QuestionnaireResponse) {
            return $this; 
        }
        $this->QuestionnaireResponse = $QuestionnaireResponse;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRQuestionnaireResponse
     */
    public function getQuestionnaireResponse()
    {
        return $this->QuestionnaireResponse;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRReferralRequest
     * @return $this
     */
    public function setReferralRequest(FHIRReferralRequest $ReferralRequest = null)
    {
        if (null === $ReferralRequest) {
            return $this; 
        }
        $this->ReferralRequest = $ReferralRequest;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRReferralRequest
     */
    public function getReferralRequest()
    {
        return $this->ReferralRequest;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRRelatedPerson
     * @return $this
     */
    public function setRelatedPerson(FHIRRelatedPerson $RelatedPerson = null)
    {
        if (null === $RelatedPerson) {
            return $this; 
        }
        $this->RelatedPerson = $RelatedPerson;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRRelatedPerson
     */
    public function getRelatedPerson()
    {
        return $this->RelatedPerson;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRRequestGroup
     * @return $this
     */
    public function setRequestGroup(FHIRRequestGroup $RequestGroup = null)
    {
        if (null === $RequestGroup) {
            return $this; 
        }
        $this->RequestGroup = $RequestGroup;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRRequestGroup
     */
    public function getRequestGroup()
    {
        return $this->RequestGroup;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     * @return $this
     */
    public function setResearchStudy(FHIRResearchStudy $ResearchStudy = null)
    {
        if (null === $ResearchStudy) {
            return $this; 
        }
        $this->ResearchStudy = $ResearchStudy;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function getResearchStudy()
    {
        return $this->ResearchStudy;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRResearchSubject
     * @return $this
     */
    public function setResearchSubject(FHIRResearchSubject $ResearchSubject = null)
    {
        if (null === $ResearchSubject) {
            return $this; 
        }
        $this->ResearchSubject = $ResearchSubject;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRResearchSubject
     */
    public function getResearchSubject()
    {
        return $this->ResearchSubject;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRRiskAssessment
     * @return $this
     */
    public function setRiskAssessment(FHIRRiskAssessment $RiskAssessment = null)
    {
        if (null === $RiskAssessment) {
            return $this; 
        }
        $this->RiskAssessment = $RiskAssessment;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRRiskAssessment
     */
    public function getRiskAssessment()
    {
        return $this->RiskAssessment;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSchedule
     * @return $this
     */
    public function setSchedule(FHIRSchedule $Schedule = null)
    {
        if (null === $Schedule) {
            return $this; 
        }
        $this->Schedule = $Schedule;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSchedule
     */
    public function getSchedule()
    {
        return $this->Schedule;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter
     * @return $this
     */
    public function setSearchParameter(FHIRSearchParameter $SearchParameter = null)
    {
        if (null === $SearchParameter) {
            return $this; 
        }
        $this->SearchParameter = $SearchParameter;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter
     */
    public function getSearchParameter()
    {
        return $this->SearchParameter;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSequence
     * @return $this
     */
    public function setSequence(FHIRSequence $Sequence = null)
    {
        if (null === $Sequence) {
            return $this; 
        }
        $this->Sequence = $Sequence;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSequence
     */
    public function getSequence()
    {
        return $this->Sequence;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRServiceDefinition
     * @return $this
     */
    public function setServiceDefinition(FHIRServiceDefinition $ServiceDefinition = null)
    {
        if (null === $ServiceDefinition) {
            return $this; 
        }
        $this->ServiceDefinition = $ServiceDefinition;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRServiceDefinition
     */
    public function getServiceDefinition()
    {
        return $this->ServiceDefinition;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSlot
     * @return $this
     */
    public function setSlot(FHIRSlot $Slot = null)
    {
        if (null === $Slot) {
            return $this; 
        }
        $this->Slot = $Slot;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSlot
     */
    public function getSlot()
    {
        return $this->Slot;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSpecimen
     * @return $this
     */
    public function setSpecimen(FHIRSpecimen $Specimen = null)
    {
        if (null === $Specimen) {
            return $this; 
        }
        $this->Specimen = $Specimen;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSpecimen
     */
    public function getSpecimen()
    {
        return $this->Specimen;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureDefinition
     * @return $this
     */
    public function setStructureDefinition(FHIRStructureDefinition $StructureDefinition = null)
    {
        if (null === $StructureDefinition) {
            return $this; 
        }
        $this->StructureDefinition = $StructureDefinition;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureDefinition
     */
    public function getStructureDefinition()
    {
        return $this->StructureDefinition;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap
     * @return $this
     */
    public function setStructureMap(FHIRStructureMap $StructureMap = null)
    {
        if (null === $StructureMap) {
            return $this; 
        }
        $this->StructureMap = $StructureMap;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRStructureMap
     */
    public function getStructureMap()
    {
        return $this->StructureMap;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSubscription
     * @return $this
     */
    public function setSubscription(FHIRSubscription $Subscription = null)
    {
        if (null === $Subscription) {
            return $this; 
        }
        $this->Subscription = $Subscription;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSubscription
     */
    public function getSubscription()
    {
        return $this->Subscription;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSubstance
     * @return $this
     */
    public function setSubstance(FHIRSubstance $Substance = null)
    {
        if (null === $Substance) {
            return $this; 
        }
        $this->Substance = $Substance;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSubstance
     */
    public function getSubstance()
    {
        return $this->Substance;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery
     * @return $this
     */
    public function setSupplyDelivery(FHIRSupplyDelivery $SupplyDelivery = null)
    {
        if (null === $SupplyDelivery) {
            return $this; 
        }
        $this->SupplyDelivery = $SupplyDelivery;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery
     */
    public function getSupplyDelivery()
    {
        return $this->SupplyDelivery;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSupplyRequest
     * @return $this
     */
    public function setSupplyRequest(FHIRSupplyRequest $SupplyRequest = null)
    {
        if (null === $SupplyRequest) {
            return $this; 
        }
        $this->SupplyRequest = $SupplyRequest;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSupplyRequest
     */
    public function getSupplyRequest()
    {
        return $this->SupplyRequest;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRTask
     * @return $this
     */
    public function setTask(FHIRTask $Task = null)
    {
        if (null === $Task) {
            return $this; 
        }
        $this->Task = $Task;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRTask
     */
    public function getTask()
    {
        return $this->Task;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRTestReport
     * @return $this
     */
    public function setTestReport(FHIRTestReport $TestReport = null)
    {
        if (null === $TestReport) {
            return $this; 
        }
        $this->TestReport = $TestReport;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRTestReport
     */
    public function getTestReport()
    {
        return $this->TestReport;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRTestScript
     * @return $this
     */
    public function setTestScript(FHIRTestScript $TestScript = null)
    {
        if (null === $TestScript) {
            return $this; 
        }
        $this->TestScript = $TestScript;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRTestScript
     */
    public function getTestScript()
    {
        return $this->TestScript;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRValueSet
     * @return $this
     */
    public function setValueSet(FHIRValueSet $ValueSet = null)
    {
        if (null === $ValueSet) {
            return $this; 
        }
        $this->ValueSet = $ValueSet;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRValueSet
     */
    public function getValueSet()
    {
        return $this->ValueSet;
    }

    /**
     * @param null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRVisionPrescription
     * @return $this
     */
    public function setVisionPrescription(FHIRVisionPrescription $VisionPrescription = null)
    {
        if (null === $VisionPrescription) {
            return $this; 
        }
        $this->VisionPrescription = $VisionPrescription;
        return $this;
    }

    /**
     * @return null|\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRVisionPrescription
     */
    public function getVisionPrescription()
    {
        return $this->VisionPrescription;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->jsonSerialize();
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        if (null !== ($v = ($this->getAccount()))) {
            return $v;
        } elseif (null !== ($v = ($this->getActivityDefinition()))) {
            return $v;
        } elseif (null !== ($v = ($this->getAdverseEvent()))) {
            return $v;
        } elseif (null !== ($v = ($this->getAllergyIntolerance()))) {
            return $v;
        } elseif (null !== ($v = ($this->getAppointment()))) {
            return $v;
        } elseif (null !== ($v = ($this->getAppointmentResponse()))) {
            return $v;
        } elseif (null !== ($v = ($this->getAuditEvent()))) {
            return $v;
        } elseif (null !== ($v = ($this->getBasic()))) {
            return $v;
        } elseif (null !== ($v = ($this->getBinary()))) {
            return $v;
        } elseif (null !== ($v = ($this->getBodySite()))) {
            return $v;
        } elseif (null !== ($v = ($this->getBundle()))) {
            return $v;
        } elseif (null !== ($v = ($this->getCapabilityStatement()))) {
            return $v;
        } elseif (null !== ($v = ($this->getCarePlan()))) {
            return $v;
        } elseif (null !== ($v = ($this->getCareTeam()))) {
            return $v;
        } elseif (null !== ($v = ($this->getChargeItem()))) {
            return $v;
        } elseif (null !== ($v = ($this->getClaim()))) {
            return $v;
        } elseif (null !== ($v = ($this->getClaimResponse()))) {
            return $v;
        } elseif (null !== ($v = ($this->getClinicalImpression()))) {
            return $v;
        } elseif (null !== ($v = ($this->getCodeSystem()))) {
            return $v;
        } elseif (null !== ($v = ($this->getCommunication()))) {
            return $v;
        } elseif (null !== ($v = ($this->getCommunicationRequest()))) {
            return $v;
        } elseif (null !== ($v = ($this->getCompartmentDefinition()))) {
            return $v;
        } elseif (null !== ($v = ($this->getComposition()))) {
            return $v;
        } elseif (null !== ($v = ($this->getConceptMap()))) {
            return $v;
        } elseif (null !== ($v = ($this->getCondition()))) {
            return $v;
        } elseif (null !== ($v = ($this->getConsent()))) {
            return $v;
        } elseif (null !== ($v = ($this->getContract()))) {
            return $v;
        } elseif (null !== ($v = ($this->getCoverage()))) {
            return $v;
        } elseif (null !== ($v = ($this->getDataElement()))) {
            return $v;
        } elseif (null !== ($v = ($this->getDetectedIssue()))) {
            return $v;
        } elseif (null !== ($v = ($this->getDevice()))) {
            return $v;
        } elseif (null !== ($v = ($this->getDeviceComponent()))) {
            return $v;
        } elseif (null !== ($v = ($this->getDeviceMetric()))) {
            return $v;
        } elseif (null !== ($v = ($this->getDeviceRequest()))) {
            return $v;
        } elseif (null !== ($v = ($this->getDeviceUseStatement()))) {
            return $v;
        } elseif (null !== ($v = ($this->getDiagnosticReport()))) {
            return $v;
        } elseif (null !== ($v = ($this->getDocumentManifest()))) {
            return $v;
        } elseif (null !== ($v = ($this->getDocumentReference()))) {
            return $v;
        } elseif (null !== ($v = ($this->getEligibilityRequest()))) {
            return $v;
        } elseif (null !== ($v = ($this->getEligibilityResponse()))) {
            return $v;
        } elseif (null !== ($v = ($this->getEncounter()))) {
            return $v;
        } elseif (null !== ($v = ($this->getEndpoint()))) {
            return $v;
        } elseif (null !== ($v = ($this->getEnrollmentRequest()))) {
            return $v;
        } elseif (null !== ($v = ($this->getEnrollmentResponse()))) {
            return $v;
        } elseif (null !== ($v = ($this->getEpisodeOfCare()))) {
            return $v;
        } elseif (null !== ($v = ($this->getExpansionProfile()))) {
            return $v;
        } elseif (null !== ($v = ($this->getExplanationOfBenefit()))) {
            return $v;
        } elseif (null !== ($v = ($this->getFamilyMemberHistory()))) {
            return $v;
        } elseif (null !== ($v = ($this->getFlag()))) {
            return $v;
        } elseif (null !== ($v = ($this->getGoal()))) {
            return $v;
        } elseif (null !== ($v = ($this->getGraphDefinition()))) {
            return $v;
        } elseif (null !== ($v = ($this->getGroup()))) {
            return $v;
        } elseif (null !== ($v = ($this->getGuidanceResponse()))) {
            return $v;
        } elseif (null !== ($v = ($this->getHealthcareService()))) {
            return $v;
        } elseif (null !== ($v = ($this->getImagingManifest()))) {
            return $v;
        } elseif (null !== ($v = ($this->getImagingStudy()))) {
            return $v;
        } elseif (null !== ($v = ($this->getImmunization()))) {
            return $v;
        } elseif (null !== ($v = ($this->getImmunizationRecommendation()))) {
            return $v;
        } elseif (null !== ($v = ($this->getImplementationGuide()))) {
            return $v;
        } elseif (null !== ($v = ($this->getLibrary()))) {
            return $v;
        } elseif (null !== ($v = ($this->getLinkage()))) {
            return $v;
        } elseif (null !== ($v = ($this->getList()))) {
            return $v;
        } elseif (null !== ($v = ($this->getLocation()))) {
            return $v;
        } elseif (null !== ($v = ($this->getMeasure()))) {
            return $v;
        } elseif (null !== ($v = ($this->getMeasureReport()))) {
            return $v;
        } elseif (null !== ($v = ($this->getMedia()))) {
            return $v;
        } elseif (null !== ($v = ($this->getMedication()))) {
            return $v;
        } elseif (null !== ($v = ($this->getMedicationAdministration()))) {
            return $v;
        } elseif (null !== ($v = ($this->getMedicationDispense()))) {
            return $v;
        } elseif (null !== ($v = ($this->getMedicationRequest()))) {
            return $v;
        } elseif (null !== ($v = ($this->getMedicationStatement()))) {
            return $v;
        } elseif (null !== ($v = ($this->getMessageDefinition()))) {
            return $v;
        } elseif (null !== ($v = ($this->getMessageHeader()))) {
            return $v;
        } elseif (null !== ($v = ($this->getNamingSystem()))) {
            return $v;
        } elseif (null !== ($v = ($this->getNutritionOrder()))) {
            return $v;
        } elseif (null !== ($v = ($this->getObservation()))) {
            return $v;
        } elseif (null !== ($v = ($this->getOperationDefinition()))) {
            return $v;
        } elseif (null !== ($v = ($this->getOperationOutcome()))) {
            return $v;
        } elseif (null !== ($v = ($this->getOrganization()))) {
            return $v;
        } elseif (null !== ($v = ($this->getParameters()))) {
            return $v;
        } elseif (null !== ($v = ($this->getPatient()))) {
            return $v;
        } elseif (null !== ($v = ($this->getPaymentNotice()))) {
            return $v;
        } elseif (null !== ($v = ($this->getPaymentReconciliation()))) {
            return $v;
        } elseif (null !== ($v = ($this->getPerson()))) {
            return $v;
        } elseif (null !== ($v = ($this->getPlanDefinition()))) {
            return $v;
        } elseif (null !== ($v = ($this->getPractitioner()))) {
            return $v;
        } elseif (null !== ($v = ($this->getPractitionerRole()))) {
            return $v;
        } elseif (null !== ($v = ($this->getProcedure()))) {
            return $v;
        } elseif (null !== ($v = ($this->getProcedureRequest()))) {
            return $v;
        } elseif (null !== ($v = ($this->getProcessRequest()))) {
            return $v;
        } elseif (null !== ($v = ($this->getProcessResponse()))) {
            return $v;
        } elseif (null !== ($v = ($this->getProvenance()))) {
            return $v;
        } elseif (null !== ($v = ($this->getQuestionnaire()))) {
            return $v;
        } elseif (null !== ($v = ($this->getQuestionnaireResponse()))) {
            return $v;
        } elseif (null !== ($v = ($this->getReferralRequest()))) {
            return $v;
        } elseif (null !== ($v = ($this->getRelatedPerson()))) {
            return $v;
        } elseif (null !== ($v = ($this->getRequestGroup()))) {
            return $v;
        } elseif (null !== ($v = ($this->getResearchStudy()))) {
            return $v;
        } elseif (null !== ($v = ($this->getResearchSubject()))) {
            return $v;
        } elseif (null !== ($v = ($this->getRiskAssessment()))) {
            return $v;
        } elseif (null !== ($v = ($this->getSchedule()))) {
            return $v;
        } elseif (null !== ($v = ($this->getSearchParameter()))) {
            return $v;
        } elseif (null !== ($v = ($this->getSequence()))) {
            return $v;
        } elseif (null !== ($v = ($this->getServiceDefinition()))) {
            return $v;
        } elseif (null !== ($v = ($this->getSlot()))) {
            return $v;
        } elseif (null !== ($v = ($this->getSpecimen()))) {
            return $v;
        } elseif (null !== ($v = ($this->getStructureDefinition()))) {
            return $v;
        } elseif (null !== ($v = ($this->getStructureMap()))) {
            return $v;
        } elseif (null !== ($v = ($this->getSubscription()))) {
            return $v;
        } elseif (null !== ($v = ($this->getSubstance()))) {
            return $v;
        } elseif (null !== ($v = ($this->getSupplyDelivery()))) {
            return $v;
        } elseif (null !== ($v = ($this->getSupplyRequest()))) {
            return $v;
        } elseif (null !== ($v = ($this->getTask()))) {
            return $v;
        } elseif (null !== ($v = ($this->getTestReport()))) {
            return $v;
        } elseif (null !== ($v = ($this->getTestScript()))) {
            return $v;
        } elseif (null !== ($v = ($this->getValueSet()))) {
            return $v;
        } elseif (null !== ($v = ($this->getVisionPrescription()))) {
            return $v;
        } else {
            return null;
        }
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null !== ($v = $this->getAccount())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getActivityDefinition())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getAdverseEvent())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getAllergyIntolerance())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getAppointment())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getAppointmentResponse())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getAuditEvent())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getBasic())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getBinary())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getBodySite())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getBundle())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getCapabilityStatement())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getCarePlan())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getCareTeam())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getChargeItem())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getClaim())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getClaimResponse())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getClinicalImpression())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getCodeSystem())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getCommunication())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getCommunicationRequest())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getCompartmentDefinition())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getComposition())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getConceptMap())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getCondition())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getConsent())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getContract())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getCoverage())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getDataElement())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getDetectedIssue())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getDevice())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getDeviceComponent())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getDeviceMetric())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getDeviceRequest())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getDeviceUseStatement())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getDiagnosticReport())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getDocumentManifest())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getDocumentReference())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getEligibilityRequest())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getEligibilityResponse())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getEncounter())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getEndpoint())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getEnrollmentRequest())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getEnrollmentResponse())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getEpisodeOfCare())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getExpansionProfile())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getExplanationOfBenefit())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getFamilyMemberHistory())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getFlag())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getGoal())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getGraphDefinition())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getGroup())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getGuidanceResponse())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getHealthcareService())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getImagingManifest())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getImagingStudy())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getImmunization())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getImmunizationRecommendation())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getImplementationGuide())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getLibrary())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getLinkage())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getList())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getLocation())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getMeasure())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getMeasureReport())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getMedia())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getMedication())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getMedicationAdministration())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getMedicationDispense())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getMedicationRequest())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getMedicationStatement())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getMessageDefinition())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getMessageHeader())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getNamingSystem())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getNutritionOrder())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getObservation())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getOperationDefinition())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getOperationOutcome())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getOrganization())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getParameters())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getPatient())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getPaymentNotice())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getPaymentReconciliation())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getPerson())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getPlanDefinition())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getPractitioner())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getPractitionerRole())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getProcedure())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getProcedureRequest())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getProcessRequest())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getProcessResponse())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getProvenance())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getQuestionnaire())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getQuestionnaireResponse())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getReferralRequest())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getRelatedPerson())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getRequestGroup())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getResearchStudy())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getResearchSubject())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getRiskAssessment())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getSchedule())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getSearchParameter())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getSequence())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getServiceDefinition())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getSlot())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getSpecimen())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getStructureDefinition())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getStructureMap())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getSubscription())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getSubstance())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getSupplyDelivery())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getSupplyRequest())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getTask())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getTestReport())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getTestScript())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getValueSet())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif (null !== ($v = $this->getVisionPrescription())) {
            return $v->xmlSerialize($returnSXE, $sxe);
        } elseif ($returnSXE) {
            return $sxe;
        } else {
            return null === $sxe ? '' : $sxe->saveXML();
        }
    }
}