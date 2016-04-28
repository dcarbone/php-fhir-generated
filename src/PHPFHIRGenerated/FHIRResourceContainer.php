<?php namespace PHPFHIRGenerated;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 28th, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\JsonSerializable;

class FHIRResourceContainer implements JsonSerializable
{
    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRAccount
     */
    public $Account = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public $AllergyIntolerance = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRAppointment
     */
    public $Appointment = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRAppointmentResponse
     */
    public $AppointmentResponse = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRAuditEvent
     */
    public $AuditEvent = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRBasic
     */
    public $Basic = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRBinary
     */
    public $Binary = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRBodySite
     */
    public $BodySite = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRBundle
     */
    public $Bundle = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRCarePlan
     */
    public $CarePlan = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRClaim
     */
    public $Claim = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRClaimResponse
     */
    public $ClaimResponse = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRClinicalImpression
     */
    public $ClinicalImpression = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRCommunication
     */
    public $Communication = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRCommunicationRequest
     */
    public $CommunicationRequest = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRComposition
     */
    public $Composition = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRConceptMap
     */
    public $ConceptMap = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRCondition
     */
    public $Condition = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRConformance
     */
    public $Conformance = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRContract
     */
    public $Contract = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRCoverage
     */
    public $Coverage = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRDataElement
     */
    public $DataElement = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRDetectedIssue
     */
    public $DetectedIssue = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRDevice
     */
    public $Device = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRDeviceComponent
     */
    public $DeviceComponent = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRDeviceMetric
     */
    public $DeviceMetric = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRDeviceUseRequest
     */
    public $DeviceUseRequest = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRDeviceUseStatement
     */
    public $DeviceUseStatement = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRDiagnosticOrder
     */
    public $DiagnosticOrder = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRDiagnosticReport
     */
    public $DiagnosticReport = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRDocumentManifest
     */
    public $DocumentManifest = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRDocumentReference
     */
    public $DocumentReference = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIREligibilityRequest
     */
    public $EligibilityRequest = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIREligibilityResponse
     */
    public $EligibilityResponse = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIREncounter
     */
    public $Encounter = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIREnrollmentRequest
     */
    public $EnrollmentRequest = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIREnrollmentResponse
     */
    public $EnrollmentResponse = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIREpisodeOfCare
     */
    public $EpisodeOfCare = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRExplanationOfBenefit
     */
    public $ExplanationOfBenefit = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRFamilyMemberHistory
     */
    public $FamilyMemberHistory = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRFlag
     */
    public $Flag = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRGoal
     */
    public $Goal = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRGroup
     */
    public $Group = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRHealthcareService
     */
    public $HealthcareService = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRImagingObjectSelection
     */
    public $ImagingObjectSelection = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRImagingStudy
     */
    public $ImagingStudy = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRImmunization
     */
    public $Immunization = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRImmunizationRecommendation
     */
    public $ImmunizationRecommendation = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRImplementationGuide
     */
    public $ImplementationGuide = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRList
     */
    public $List = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRLocation
     */
    public $Location = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRMedia
     */
    public $Media = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRMedication
     */
    public $Medication = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicationAdministration
     */
    public $MedicationAdministration = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicationDispense
     */
    public $MedicationDispense = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicationOrder
     */
    public $MedicationOrder = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicationStatement
     */
    public $MedicationStatement = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRMessageHeader
     */
    public $MessageHeader = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRNamingSystem
     */
    public $NamingSystem = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRNutritionOrder
     */
    public $NutritionOrder = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRObservation
     */
    public $Observation = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIROperationDefinition
     */
    public $OperationDefinition = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIROperationOutcome
     */
    public $OperationOutcome = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIROrder
     */
    public $Order = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIROrderResponse
     */
    public $OrderResponse = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIROrganization
     */
    public $Organization = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRPatient
     */
    public $Patient = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRPaymentNotice
     */
    public $PaymentNotice = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRPaymentReconciliation
     */
    public $PaymentReconciliation = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRPerson
     */
    public $Person = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRPractitioner
     */
    public $Practitioner = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRProcedure
     */
    public $Procedure = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRProcedureRequest
     */
    public $ProcedureRequest = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRProcessRequest
     */
    public $ProcessRequest = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRProcessResponse
     */
    public $ProcessResponse = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRProvenance
     */
    public $Provenance = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRQuestionnaire
     */
    public $Questionnaire = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRQuestionnaireResponse
     */
    public $QuestionnaireResponse = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRReferralRequest
     */
    public $ReferralRequest = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRRelatedPerson
     */
    public $RelatedPerson = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRRiskAssessment
     */
    public $RiskAssessment = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRSchedule
     */
    public $Schedule = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRSearchParameter
     */
    public $SearchParameter = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRSlot
     */
    public $Slot = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRSpecimen
     */
    public $Specimen = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRStructureDefinition
     */
    public $StructureDefinition = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRSubscription
     */
    public $Subscription = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRSubstance
     */
    public $Substance = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRSupplyDelivery
     */
    public $SupplyDelivery = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRSupplyRequest
     */
    public $SupplyRequest = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRTestScript
     */
    public $TestScript = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRValueSet
     */
    public $ValueSet = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRVisionPrescription
     */
    public $VisionPrescription = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRParameters
     */
    public $Parameters = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ResourceContainer';

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRAccount
     */
    public function getAccount()
    {
        return $this->Account;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRAccount $Account
     * @return $this
     */
    public function setAccount($Account)
    {
        $this->Account = $Account;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function getAllergyIntolerance()
    {
        return $this->AllergyIntolerance;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRAllergyIntolerance $AllergyIntolerance
     * @return $this
     */
    public function setAllergyIntolerance($AllergyIntolerance)
    {
        $this->AllergyIntolerance = $AllergyIntolerance;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRAppointment
     */
    public function getAppointment()
    {
        return $this->Appointment;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRAppointment $Appointment
     * @return $this
     */
    public function setAppointment($Appointment)
    {
        $this->Appointment = $Appointment;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRAppointmentResponse
     */
    public function getAppointmentResponse()
    {
        return $this->AppointmentResponse;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRAppointmentResponse $AppointmentResponse
     * @return $this
     */
    public function setAppointmentResponse($AppointmentResponse)
    {
        $this->AppointmentResponse = $AppointmentResponse;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRAuditEvent
     */
    public function getAuditEvent()
    {
        return $this->AuditEvent;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRAuditEvent $AuditEvent
     * @return $this
     */
    public function setAuditEvent($AuditEvent)
    {
        $this->AuditEvent = $AuditEvent;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRBasic
     */
    public function getBasic()
    {
        return $this->Basic;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRBasic $Basic
     * @return $this
     */
    public function setBasic($Basic)
    {
        $this->Basic = $Basic;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRBinary
     */
    public function getBinary()
    {
        return $this->Binary;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRBinary $Binary
     * @return $this
     */
    public function setBinary($Binary)
    {
        $this->Binary = $Binary;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRBodySite
     */
    public function getBodySite()
    {
        return $this->BodySite;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRBodySite $BodySite
     * @return $this
     */
    public function setBodySite($BodySite)
    {
        $this->BodySite = $BodySite;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRBundle
     */
    public function getBundle()
    {
        return $this->Bundle;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRBundle $Bundle
     * @return $this
     */
    public function setBundle($Bundle)
    {
        $this->Bundle = $Bundle;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRCarePlan
     */
    public function getCarePlan()
    {
        return $this->CarePlan;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRCarePlan $CarePlan
     * @return $this
     */
    public function setCarePlan($CarePlan)
    {
        $this->CarePlan = $CarePlan;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRClaim
     */
    public function getClaim()
    {
        return $this->Claim;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRClaim $Claim
     * @return $this
     */
    public function setClaim($Claim)
    {
        $this->Claim = $Claim;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRClaimResponse
     */
    public function getClaimResponse()
    {
        return $this->ClaimResponse;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRClaimResponse $ClaimResponse
     * @return $this
     */
    public function setClaimResponse($ClaimResponse)
    {
        $this->ClaimResponse = $ClaimResponse;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRClinicalImpression
     */
    public function getClinicalImpression()
    {
        return $this->ClinicalImpression;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRClinicalImpression $ClinicalImpression
     * @return $this
     */
    public function setClinicalImpression($ClinicalImpression)
    {
        $this->ClinicalImpression = $ClinicalImpression;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRCommunication
     */
    public function getCommunication()
    {
        return $this->Communication;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRCommunication $Communication
     * @return $this
     */
    public function setCommunication($Communication)
    {
        $this->Communication = $Communication;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRCommunicationRequest
     */
    public function getCommunicationRequest()
    {
        return $this->CommunicationRequest;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRCommunicationRequest $CommunicationRequest
     * @return $this
     */
    public function setCommunicationRequest($CommunicationRequest)
    {
        $this->CommunicationRequest = $CommunicationRequest;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRComposition
     */
    public function getComposition()
    {
        return $this->Composition;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRComposition $Composition
     * @return $this
     */
    public function setComposition($Composition)
    {
        $this->Composition = $Composition;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRConceptMap
     */
    public function getConceptMap()
    {
        return $this->ConceptMap;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRConceptMap $ConceptMap
     * @return $this
     */
    public function setConceptMap($ConceptMap)
    {
        $this->ConceptMap = $ConceptMap;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRCondition
     */
    public function getCondition()
    {
        return $this->Condition;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRCondition $Condition
     * @return $this
     */
    public function setCondition($Condition)
    {
        $this->Condition = $Condition;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRConformance
     */
    public function getConformance()
    {
        return $this->Conformance;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRConformance $Conformance
     * @return $this
     */
    public function setConformance($Conformance)
    {
        $this->Conformance = $Conformance;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRContract
     */
    public function getContract()
    {
        return $this->Contract;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRContract $Contract
     * @return $this
     */
    public function setContract($Contract)
    {
        $this->Contract = $Contract;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRCoverage
     */
    public function getCoverage()
    {
        return $this->Coverage;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRCoverage $Coverage
     * @return $this
     */
    public function setCoverage($Coverage)
    {
        $this->Coverage = $Coverage;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRDataElement
     */
    public function getDataElement()
    {
        return $this->DataElement;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRDataElement $DataElement
     * @return $this
     */
    public function setDataElement($DataElement)
    {
        $this->DataElement = $DataElement;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRDetectedIssue
     */
    public function getDetectedIssue()
    {
        return $this->DetectedIssue;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRDetectedIssue $DetectedIssue
     * @return $this
     */
    public function setDetectedIssue($DetectedIssue)
    {
        $this->DetectedIssue = $DetectedIssue;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRDevice
     */
    public function getDevice()
    {
        return $this->Device;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRDevice $Device
     * @return $this
     */
    public function setDevice($Device)
    {
        $this->Device = $Device;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRDeviceComponent
     */
    public function getDeviceComponent()
    {
        return $this->DeviceComponent;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRDeviceComponent $DeviceComponent
     * @return $this
     */
    public function setDeviceComponent($DeviceComponent)
    {
        $this->DeviceComponent = $DeviceComponent;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRDeviceMetric
     */
    public function getDeviceMetric()
    {
        return $this->DeviceMetric;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRDeviceMetric $DeviceMetric
     * @return $this
     */
    public function setDeviceMetric($DeviceMetric)
    {
        $this->DeviceMetric = $DeviceMetric;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRDeviceUseRequest
     */
    public function getDeviceUseRequest()
    {
        return $this->DeviceUseRequest;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRDeviceUseRequest $DeviceUseRequest
     * @return $this
     */
    public function setDeviceUseRequest($DeviceUseRequest)
    {
        $this->DeviceUseRequest = $DeviceUseRequest;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRDeviceUseStatement
     */
    public function getDeviceUseStatement()
    {
        return $this->DeviceUseStatement;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRDeviceUseStatement $DeviceUseStatement
     * @return $this
     */
    public function setDeviceUseStatement($DeviceUseStatement)
    {
        $this->DeviceUseStatement = $DeviceUseStatement;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRDiagnosticOrder
     */
    public function getDiagnosticOrder()
    {
        return $this->DiagnosticOrder;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRDiagnosticOrder $DiagnosticOrder
     * @return $this
     */
    public function setDiagnosticOrder($DiagnosticOrder)
    {
        $this->DiagnosticOrder = $DiagnosticOrder;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRDiagnosticReport
     */
    public function getDiagnosticReport()
    {
        return $this->DiagnosticReport;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRDiagnosticReport $DiagnosticReport
     * @return $this
     */
    public function setDiagnosticReport($DiagnosticReport)
    {
        $this->DiagnosticReport = $DiagnosticReport;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRDocumentManifest
     */
    public function getDocumentManifest()
    {
        return $this->DocumentManifest;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRDocumentManifest $DocumentManifest
     * @return $this
     */
    public function setDocumentManifest($DocumentManifest)
    {
        $this->DocumentManifest = $DocumentManifest;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRDocumentReference
     */
    public function getDocumentReference()
    {
        return $this->DocumentReference;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRDocumentReference $DocumentReference
     * @return $this
     */
    public function setDocumentReference($DocumentReference)
    {
        $this->DocumentReference = $DocumentReference;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIREligibilityRequest
     */
    public function getEligibilityRequest()
    {
        return $this->EligibilityRequest;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIREligibilityRequest $EligibilityRequest
     * @return $this
     */
    public function setEligibilityRequest($EligibilityRequest)
    {
        $this->EligibilityRequest = $EligibilityRequest;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIREligibilityResponse
     */
    public function getEligibilityResponse()
    {
        return $this->EligibilityResponse;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIREligibilityResponse $EligibilityResponse
     * @return $this
     */
    public function setEligibilityResponse($EligibilityResponse)
    {
        $this->EligibilityResponse = $EligibilityResponse;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIREncounter
     */
    public function getEncounter()
    {
        return $this->Encounter;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIREncounter $Encounter
     * @return $this
     */
    public function setEncounter($Encounter)
    {
        $this->Encounter = $Encounter;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIREnrollmentRequest
     */
    public function getEnrollmentRequest()
    {
        return $this->EnrollmentRequest;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIREnrollmentRequest $EnrollmentRequest
     * @return $this
     */
    public function setEnrollmentRequest($EnrollmentRequest)
    {
        $this->EnrollmentRequest = $EnrollmentRequest;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIREnrollmentResponse
     */
    public function getEnrollmentResponse()
    {
        return $this->EnrollmentResponse;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIREnrollmentResponse $EnrollmentResponse
     * @return $this
     */
    public function setEnrollmentResponse($EnrollmentResponse)
    {
        $this->EnrollmentResponse = $EnrollmentResponse;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIREpisodeOfCare
     */
    public function getEpisodeOfCare()
    {
        return $this->EpisodeOfCare;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIREpisodeOfCare $EpisodeOfCare
     * @return $this
     */
    public function setEpisodeOfCare($EpisodeOfCare)
    {
        $this->EpisodeOfCare = $EpisodeOfCare;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRExplanationOfBenefit
     */
    public function getExplanationOfBenefit()
    {
        return $this->ExplanationOfBenefit;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRExplanationOfBenefit $ExplanationOfBenefit
     * @return $this
     */
    public function setExplanationOfBenefit($ExplanationOfBenefit)
    {
        $this->ExplanationOfBenefit = $ExplanationOfBenefit;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRFamilyMemberHistory
     */
    public function getFamilyMemberHistory()
    {
        return $this->FamilyMemberHistory;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRFamilyMemberHistory $FamilyMemberHistory
     * @return $this
     */
    public function setFamilyMemberHistory($FamilyMemberHistory)
    {
        $this->FamilyMemberHistory = $FamilyMemberHistory;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRFlag
     */
    public function getFlag()
    {
        return $this->Flag;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRFlag $Flag
     * @return $this
     */
    public function setFlag($Flag)
    {
        $this->Flag = $Flag;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRGoal
     */
    public function getGoal()
    {
        return $this->Goal;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRGoal $Goal
     * @return $this
     */
    public function setGoal($Goal)
    {
        $this->Goal = $Goal;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRGroup
     */
    public function getGroup()
    {
        return $this->Group;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRGroup $Group
     * @return $this
     */
    public function setGroup($Group)
    {
        $this->Group = $Group;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRHealthcareService
     */
    public function getHealthcareService()
    {
        return $this->HealthcareService;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRHealthcareService $HealthcareService
     * @return $this
     */
    public function setHealthcareService($HealthcareService)
    {
        $this->HealthcareService = $HealthcareService;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRImagingObjectSelection
     */
    public function getImagingObjectSelection()
    {
        return $this->ImagingObjectSelection;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRImagingObjectSelection $ImagingObjectSelection
     * @return $this
     */
    public function setImagingObjectSelection($ImagingObjectSelection)
    {
        $this->ImagingObjectSelection = $ImagingObjectSelection;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRImagingStudy
     */
    public function getImagingStudy()
    {
        return $this->ImagingStudy;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRImagingStudy $ImagingStudy
     * @return $this
     */
    public function setImagingStudy($ImagingStudy)
    {
        $this->ImagingStudy = $ImagingStudy;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRImmunization
     */
    public function getImmunization()
    {
        return $this->Immunization;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRImmunization $Immunization
     * @return $this
     */
    public function setImmunization($Immunization)
    {
        $this->Immunization = $Immunization;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRImmunizationRecommendation
     */
    public function getImmunizationRecommendation()
    {
        return $this->ImmunizationRecommendation;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRImmunizationRecommendation $ImmunizationRecommendation
     * @return $this
     */
    public function setImmunizationRecommendation($ImmunizationRecommendation)
    {
        $this->ImmunizationRecommendation = $ImmunizationRecommendation;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRImplementationGuide
     */
    public function getImplementationGuide()
    {
        return $this->ImplementationGuide;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRImplementationGuide $ImplementationGuide
     * @return $this
     */
    public function setImplementationGuide($ImplementationGuide)
    {
        $this->ImplementationGuide = $ImplementationGuide;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRList
     */
    public function getList()
    {
        return $this->List;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRList $List
     * @return $this
     */
    public function setList($List)
    {
        $this->List = $List;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRLocation
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRLocation $Location
     * @return $this
     */
    public function setLocation($Location)
    {
        $this->Location = $Location;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRMedia
     */
    public function getMedia()
    {
        return $this->Media;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRMedia $Media
     * @return $this
     */
    public function setMedia($Media)
    {
        $this->Media = $Media;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRMedication
     */
    public function getMedication()
    {
        return $this->Medication;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRMedication $Medication
     * @return $this
     */
    public function setMedication($Medication)
    {
        $this->Medication = $Medication;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicationAdministration
     */
    public function getMedicationAdministration()
    {
        return $this->MedicationAdministration;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicationAdministration $MedicationAdministration
     * @return $this
     */
    public function setMedicationAdministration($MedicationAdministration)
    {
        $this->MedicationAdministration = $MedicationAdministration;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicationDispense
     */
    public function getMedicationDispense()
    {
        return $this->MedicationDispense;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicationDispense $MedicationDispense
     * @return $this
     */
    public function setMedicationDispense($MedicationDispense)
    {
        $this->MedicationDispense = $MedicationDispense;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicationOrder
     */
    public function getMedicationOrder()
    {
        return $this->MedicationOrder;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicationOrder $MedicationOrder
     * @return $this
     */
    public function setMedicationOrder($MedicationOrder)
    {
        $this->MedicationOrder = $MedicationOrder;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicationStatement
     */
    public function getMedicationStatement()
    {
        return $this->MedicationStatement;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicationStatement $MedicationStatement
     * @return $this
     */
    public function setMedicationStatement($MedicationStatement)
    {
        $this->MedicationStatement = $MedicationStatement;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRMessageHeader
     */
    public function getMessageHeader()
    {
        return $this->MessageHeader;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRMessageHeader $MessageHeader
     * @return $this
     */
    public function setMessageHeader($MessageHeader)
    {
        $this->MessageHeader = $MessageHeader;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRNamingSystem
     */
    public function getNamingSystem()
    {
        return $this->NamingSystem;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRNamingSystem $NamingSystem
     * @return $this
     */
    public function setNamingSystem($NamingSystem)
    {
        $this->NamingSystem = $NamingSystem;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRNutritionOrder
     */
    public function getNutritionOrder()
    {
        return $this->NutritionOrder;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRNutritionOrder $NutritionOrder
     * @return $this
     */
    public function setNutritionOrder($NutritionOrder)
    {
        $this->NutritionOrder = $NutritionOrder;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRObservation
     */
    public function getObservation()
    {
        return $this->Observation;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRObservation $Observation
     * @return $this
     */
    public function setObservation($Observation)
    {
        $this->Observation = $Observation;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIROperationDefinition
     */
    public function getOperationDefinition()
    {
        return $this->OperationDefinition;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIROperationDefinition $OperationDefinition
     * @return $this
     */
    public function setOperationDefinition($OperationDefinition)
    {
        $this->OperationDefinition = $OperationDefinition;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIROperationOutcome
     */
    public function getOperationOutcome()
    {
        return $this->OperationOutcome;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIROperationOutcome $OperationOutcome
     * @return $this
     */
    public function setOperationOutcome($OperationOutcome)
    {
        $this->OperationOutcome = $OperationOutcome;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIROrder
     */
    public function getOrder()
    {
        return $this->Order;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIROrder $Order
     * @return $this
     */
    public function setOrder($Order)
    {
        $this->Order = $Order;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIROrderResponse
     */
    public function getOrderResponse()
    {
        return $this->OrderResponse;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIROrderResponse $OrderResponse
     * @return $this
     */
    public function setOrderResponse($OrderResponse)
    {
        $this->OrderResponse = $OrderResponse;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIROrganization
     */
    public function getOrganization()
    {
        return $this->Organization;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIROrganization $Organization
     * @return $this
     */
    public function setOrganization($Organization)
    {
        $this->Organization = $Organization;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRPatient
     */
    public function getPatient()
    {
        return $this->Patient;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRPatient $Patient
     * @return $this
     */
    public function setPatient($Patient)
    {
        $this->Patient = $Patient;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRPaymentNotice
     */
    public function getPaymentNotice()
    {
        return $this->PaymentNotice;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRPaymentNotice $PaymentNotice
     * @return $this
     */
    public function setPaymentNotice($PaymentNotice)
    {
        $this->PaymentNotice = $PaymentNotice;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRPaymentReconciliation
     */
    public function getPaymentReconciliation()
    {
        return $this->PaymentReconciliation;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRPaymentReconciliation $PaymentReconciliation
     * @return $this
     */
    public function setPaymentReconciliation($PaymentReconciliation)
    {
        $this->PaymentReconciliation = $PaymentReconciliation;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRPerson
     */
    public function getPerson()
    {
        return $this->Person;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRPerson $Person
     * @return $this
     */
    public function setPerson($Person)
    {
        $this->Person = $Person;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRPractitioner
     */
    public function getPractitioner()
    {
        return $this->Practitioner;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRPractitioner $Practitioner
     * @return $this
     */
    public function setPractitioner($Practitioner)
    {
        $this->Practitioner = $Practitioner;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRProcedure
     */
    public function getProcedure()
    {
        return $this->Procedure;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRProcedure $Procedure
     * @return $this
     */
    public function setProcedure($Procedure)
    {
        $this->Procedure = $Procedure;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRProcedureRequest
     */
    public function getProcedureRequest()
    {
        return $this->ProcedureRequest;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRProcedureRequest $ProcedureRequest
     * @return $this
     */
    public function setProcedureRequest($ProcedureRequest)
    {
        $this->ProcedureRequest = $ProcedureRequest;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRProcessRequest
     */
    public function getProcessRequest()
    {
        return $this->ProcessRequest;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRProcessRequest $ProcessRequest
     * @return $this
     */
    public function setProcessRequest($ProcessRequest)
    {
        $this->ProcessRequest = $ProcessRequest;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRProcessResponse
     */
    public function getProcessResponse()
    {
        return $this->ProcessResponse;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRProcessResponse $ProcessResponse
     * @return $this
     */
    public function setProcessResponse($ProcessResponse)
    {
        $this->ProcessResponse = $ProcessResponse;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRProvenance
     */
    public function getProvenance()
    {
        return $this->Provenance;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRProvenance $Provenance
     * @return $this
     */
    public function setProvenance($Provenance)
    {
        $this->Provenance = $Provenance;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRQuestionnaire
     */
    public function getQuestionnaire()
    {
        return $this->Questionnaire;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRQuestionnaire $Questionnaire
     * @return $this
     */
    public function setQuestionnaire($Questionnaire)
    {
        $this->Questionnaire = $Questionnaire;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRQuestionnaireResponse
     */
    public function getQuestionnaireResponse()
    {
        return $this->QuestionnaireResponse;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRQuestionnaireResponse $QuestionnaireResponse
     * @return $this
     */
    public function setQuestionnaireResponse($QuestionnaireResponse)
    {
        $this->QuestionnaireResponse = $QuestionnaireResponse;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRReferralRequest
     */
    public function getReferralRequest()
    {
        return $this->ReferralRequest;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRReferralRequest $ReferralRequest
     * @return $this
     */
    public function setReferralRequest($ReferralRequest)
    {
        $this->ReferralRequest = $ReferralRequest;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRRelatedPerson
     */
    public function getRelatedPerson()
    {
        return $this->RelatedPerson;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRRelatedPerson $RelatedPerson
     * @return $this
     */
    public function setRelatedPerson($RelatedPerson)
    {
        $this->RelatedPerson = $RelatedPerson;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRRiskAssessment
     */
    public function getRiskAssessment()
    {
        return $this->RiskAssessment;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRRiskAssessment $RiskAssessment
     * @return $this
     */
    public function setRiskAssessment($RiskAssessment)
    {
        $this->RiskAssessment = $RiskAssessment;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRSchedule
     */
    public function getSchedule()
    {
        return $this->Schedule;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRSchedule $Schedule
     * @return $this
     */
    public function setSchedule($Schedule)
    {
        $this->Schedule = $Schedule;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRSearchParameter
     */
    public function getSearchParameter()
    {
        return $this->SearchParameter;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRSearchParameter $SearchParameter
     * @return $this
     */
    public function setSearchParameter($SearchParameter)
    {
        $this->SearchParameter = $SearchParameter;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRSlot
     */
    public function getSlot()
    {
        return $this->Slot;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRSlot $Slot
     * @return $this
     */
    public function setSlot($Slot)
    {
        $this->Slot = $Slot;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRSpecimen
     */
    public function getSpecimen()
    {
        return $this->Specimen;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRSpecimen $Specimen
     * @return $this
     */
    public function setSpecimen($Specimen)
    {
        $this->Specimen = $Specimen;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRStructureDefinition
     */
    public function getStructureDefinition()
    {
        return $this->StructureDefinition;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRStructureDefinition $StructureDefinition
     * @return $this
     */
    public function setStructureDefinition($StructureDefinition)
    {
        $this->StructureDefinition = $StructureDefinition;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRSubscription
     */
    public function getSubscription()
    {
        return $this->Subscription;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRSubscription $Subscription
     * @return $this
     */
    public function setSubscription($Subscription)
    {
        $this->Subscription = $Subscription;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRSubstance
     */
    public function getSubstance()
    {
        return $this->Substance;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRSubstance $Substance
     * @return $this
     */
    public function setSubstance($Substance)
    {
        $this->Substance = $Substance;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRSupplyDelivery
     */
    public function getSupplyDelivery()
    {
        return $this->SupplyDelivery;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRSupplyDelivery $SupplyDelivery
     * @return $this
     */
    public function setSupplyDelivery($SupplyDelivery)
    {
        $this->SupplyDelivery = $SupplyDelivery;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRSupplyRequest
     */
    public function getSupplyRequest()
    {
        return $this->SupplyRequest;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRSupplyRequest $SupplyRequest
     * @return $this
     */
    public function setSupplyRequest($SupplyRequest)
    {
        $this->SupplyRequest = $SupplyRequest;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRTestScript
     */
    public function getTestScript()
    {
        return $this->TestScript;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRTestScript $TestScript
     * @return $this
     */
    public function setTestScript($TestScript)
    {
        $this->TestScript = $TestScript;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRValueSet
     */
    public function getValueSet()
    {
        return $this->ValueSet;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRValueSet $ValueSet
     * @return $this
     */
    public function setValueSet($ValueSet)
    {
        $this->ValueSet = $ValueSet;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRVisionPrescription
     */
    public function getVisionPrescription()
    {
        return $this->VisionPrescription;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRVisionPrescription $VisionPrescription
     * @return $this
     */
    public function setVisionPrescription($VisionPrescription)
    {
        $this->VisionPrescription = $VisionPrescription;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRParameters
     */
    public function getParameters()
    {
        return $this->Parameters;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRParameters $Parameters
     * @return $this
     */
    public function setParameters($Parameters)
    {
        $this->Parameters = $Parameters;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        if (null !== $this->Account) return $this->Account->jsonSerialize();
        if (null !== $this->AllergyIntolerance) return $this->AllergyIntolerance->jsonSerialize();
        if (null !== $this->Appointment) return $this->Appointment->jsonSerialize();
        if (null !== $this->AppointmentResponse) return $this->AppointmentResponse->jsonSerialize();
        if (null !== $this->AuditEvent) return $this->AuditEvent->jsonSerialize();
        if (null !== $this->Basic) return $this->Basic->jsonSerialize();
        if (null !== $this->Binary) return $this->Binary->jsonSerialize();
        if (null !== $this->BodySite) return $this->BodySite->jsonSerialize();
        if (null !== $this->Bundle) return $this->Bundle->jsonSerialize();
        if (null !== $this->CarePlan) return $this->CarePlan->jsonSerialize();
        if (null !== $this->Claim) return $this->Claim->jsonSerialize();
        if (null !== $this->ClaimResponse) return $this->ClaimResponse->jsonSerialize();
        if (null !== $this->ClinicalImpression) return $this->ClinicalImpression->jsonSerialize();
        if (null !== $this->Communication) return $this->Communication->jsonSerialize();
        if (null !== $this->CommunicationRequest) return $this->CommunicationRequest->jsonSerialize();
        if (null !== $this->Composition) return $this->Composition->jsonSerialize();
        if (null !== $this->ConceptMap) return $this->ConceptMap->jsonSerialize();
        if (null !== $this->Condition) return $this->Condition->jsonSerialize();
        if (null !== $this->Conformance) return $this->Conformance->jsonSerialize();
        if (null !== $this->Contract) return $this->Contract->jsonSerialize();
        if (null !== $this->Coverage) return $this->Coverage->jsonSerialize();
        if (null !== $this->DataElement) return $this->DataElement->jsonSerialize();
        if (null !== $this->DetectedIssue) return $this->DetectedIssue->jsonSerialize();
        if (null !== $this->Device) return $this->Device->jsonSerialize();
        if (null !== $this->DeviceComponent) return $this->DeviceComponent->jsonSerialize();
        if (null !== $this->DeviceMetric) return $this->DeviceMetric->jsonSerialize();
        if (null !== $this->DeviceUseRequest) return $this->DeviceUseRequest->jsonSerialize();
        if (null !== $this->DeviceUseStatement) return $this->DeviceUseStatement->jsonSerialize();
        if (null !== $this->DiagnosticOrder) return $this->DiagnosticOrder->jsonSerialize();
        if (null !== $this->DiagnosticReport) return $this->DiagnosticReport->jsonSerialize();
        if (null !== $this->DocumentManifest) return $this->DocumentManifest->jsonSerialize();
        if (null !== $this->DocumentReference) return $this->DocumentReference->jsonSerialize();
        if (null !== $this->EligibilityRequest) return $this->EligibilityRequest->jsonSerialize();
        if (null !== $this->EligibilityResponse) return $this->EligibilityResponse->jsonSerialize();
        if (null !== $this->Encounter) return $this->Encounter->jsonSerialize();
        if (null !== $this->EnrollmentRequest) return $this->EnrollmentRequest->jsonSerialize();
        if (null !== $this->EnrollmentResponse) return $this->EnrollmentResponse->jsonSerialize();
        if (null !== $this->EpisodeOfCare) return $this->EpisodeOfCare->jsonSerialize();
        if (null !== $this->ExplanationOfBenefit) return $this->ExplanationOfBenefit->jsonSerialize();
        if (null !== $this->FamilyMemberHistory) return $this->FamilyMemberHistory->jsonSerialize();
        if (null !== $this->Flag) return $this->Flag->jsonSerialize();
        if (null !== $this->Goal) return $this->Goal->jsonSerialize();
        if (null !== $this->Group) return $this->Group->jsonSerialize();
        if (null !== $this->HealthcareService) return $this->HealthcareService->jsonSerialize();
        if (null !== $this->ImagingObjectSelection) return $this->ImagingObjectSelection->jsonSerialize();
        if (null !== $this->ImagingStudy) return $this->ImagingStudy->jsonSerialize();
        if (null !== $this->Immunization) return $this->Immunization->jsonSerialize();
        if (null !== $this->ImmunizationRecommendation) return $this->ImmunizationRecommendation->jsonSerialize();
        if (null !== $this->ImplementationGuide) return $this->ImplementationGuide->jsonSerialize();
        if (null !== $this->List) return $this->List->jsonSerialize();
        if (null !== $this->Location) return $this->Location->jsonSerialize();
        if (null !== $this->Media) return $this->Media->jsonSerialize();
        if (null !== $this->Medication) return $this->Medication->jsonSerialize();
        if (null !== $this->MedicationAdministration) return $this->MedicationAdministration->jsonSerialize();
        if (null !== $this->MedicationDispense) return $this->MedicationDispense->jsonSerialize();
        if (null !== $this->MedicationOrder) return $this->MedicationOrder->jsonSerialize();
        if (null !== $this->MedicationStatement) return $this->MedicationStatement->jsonSerialize();
        if (null !== $this->MessageHeader) return $this->MessageHeader->jsonSerialize();
        if (null !== $this->NamingSystem) return $this->NamingSystem->jsonSerialize();
        if (null !== $this->NutritionOrder) return $this->NutritionOrder->jsonSerialize();
        if (null !== $this->Observation) return $this->Observation->jsonSerialize();
        if (null !== $this->OperationDefinition) return $this->OperationDefinition->jsonSerialize();
        if (null !== $this->OperationOutcome) return $this->OperationOutcome->jsonSerialize();
        if (null !== $this->Order) return $this->Order->jsonSerialize();
        if (null !== $this->OrderResponse) return $this->OrderResponse->jsonSerialize();
        if (null !== $this->Organization) return $this->Organization->jsonSerialize();
        if (null !== $this->Patient) return $this->Patient->jsonSerialize();
        if (null !== $this->PaymentNotice) return $this->PaymentNotice->jsonSerialize();
        if (null !== $this->PaymentReconciliation) return $this->PaymentReconciliation->jsonSerialize();
        if (null !== $this->Person) return $this->Person->jsonSerialize();
        if (null !== $this->Practitioner) return $this->Practitioner->jsonSerialize();
        if (null !== $this->Procedure) return $this->Procedure->jsonSerialize();
        if (null !== $this->ProcedureRequest) return $this->ProcedureRequest->jsonSerialize();
        if (null !== $this->ProcessRequest) return $this->ProcessRequest->jsonSerialize();
        if (null !== $this->ProcessResponse) return $this->ProcessResponse->jsonSerialize();
        if (null !== $this->Provenance) return $this->Provenance->jsonSerialize();
        if (null !== $this->Questionnaire) return $this->Questionnaire->jsonSerialize();
        if (null !== $this->QuestionnaireResponse) return $this->QuestionnaireResponse->jsonSerialize();
        if (null !== $this->ReferralRequest) return $this->ReferralRequest->jsonSerialize();
        if (null !== $this->RelatedPerson) return $this->RelatedPerson->jsonSerialize();
        if (null !== $this->RiskAssessment) return $this->RiskAssessment->jsonSerialize();
        if (null !== $this->Schedule) return $this->Schedule->jsonSerialize();
        if (null !== $this->SearchParameter) return $this->SearchParameter->jsonSerialize();
        if (null !== $this->Slot) return $this->Slot->jsonSerialize();
        if (null !== $this->Specimen) return $this->Specimen->jsonSerialize();
        if (null !== $this->StructureDefinition) return $this->StructureDefinition->jsonSerialize();
        if (null !== $this->Subscription) return $this->Subscription->jsonSerialize();
        if (null !== $this->Substance) return $this->Substance->jsonSerialize();
        if (null !== $this->SupplyDelivery) return $this->SupplyDelivery->jsonSerialize();
        if (null !== $this->SupplyRequest) return $this->SupplyRequest->jsonSerialize();
        if (null !== $this->TestScript) return $this->TestScript->jsonSerialize();
        if (null !== $this->ValueSet) return $this->ValueSet->jsonSerialize();
        if (null !== $this->VisionPrescription) return $this->VisionPrescription->jsonSerialize();
        if (null !== $this->Parameters) return $this->Parameters->jsonSerialize();
        return array();
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ResourceContainer xmlns="http://hl7.org/fhir"></ResourceContainer>');
        if (null !== $this->Account) $this->Account->xmlSerialize(true, $sxe->addChild('Account'));
        if (null !== $this->AllergyIntolerance) $this->AllergyIntolerance->xmlSerialize(true, $sxe->addChild('AllergyIntolerance'));
        if (null !== $this->Appointment) $this->Appointment->xmlSerialize(true, $sxe->addChild('Appointment'));
        if (null !== $this->AppointmentResponse) $this->AppointmentResponse->xmlSerialize(true, $sxe->addChild('AppointmentResponse'));
        if (null !== $this->AuditEvent) $this->AuditEvent->xmlSerialize(true, $sxe->addChild('AuditEvent'));
        if (null !== $this->Basic) $this->Basic->xmlSerialize(true, $sxe->addChild('Basic'));
        if (null !== $this->Binary) $this->Binary->xmlSerialize(true, $sxe->addChild('Binary'));
        if (null !== $this->BodySite) $this->BodySite->xmlSerialize(true, $sxe->addChild('BodySite'));
        if (null !== $this->Bundle) $this->Bundle->xmlSerialize(true, $sxe->addChild('Bundle'));
        if (null !== $this->CarePlan) $this->CarePlan->xmlSerialize(true, $sxe->addChild('CarePlan'));
        if (null !== $this->Claim) $this->Claim->xmlSerialize(true, $sxe->addChild('Claim'));
        if (null !== $this->ClaimResponse) $this->ClaimResponse->xmlSerialize(true, $sxe->addChild('ClaimResponse'));
        if (null !== $this->ClinicalImpression) $this->ClinicalImpression->xmlSerialize(true, $sxe->addChild('ClinicalImpression'));
        if (null !== $this->Communication) $this->Communication->xmlSerialize(true, $sxe->addChild('Communication'));
        if (null !== $this->CommunicationRequest) $this->CommunicationRequest->xmlSerialize(true, $sxe->addChild('CommunicationRequest'));
        if (null !== $this->Composition) $this->Composition->xmlSerialize(true, $sxe->addChild('Composition'));
        if (null !== $this->ConceptMap) $this->ConceptMap->xmlSerialize(true, $sxe->addChild('ConceptMap'));
        if (null !== $this->Condition) $this->Condition->xmlSerialize(true, $sxe->addChild('Condition'));
        if (null !== $this->Conformance) $this->Conformance->xmlSerialize(true, $sxe->addChild('Conformance'));
        if (null !== $this->Contract) $this->Contract->xmlSerialize(true, $sxe->addChild('Contract'));
        if (null !== $this->Coverage) $this->Coverage->xmlSerialize(true, $sxe->addChild('Coverage'));
        if (null !== $this->DataElement) $this->DataElement->xmlSerialize(true, $sxe->addChild('DataElement'));
        if (null !== $this->DetectedIssue) $this->DetectedIssue->xmlSerialize(true, $sxe->addChild('DetectedIssue'));
        if (null !== $this->Device) $this->Device->xmlSerialize(true, $sxe->addChild('Device'));
        if (null !== $this->DeviceComponent) $this->DeviceComponent->xmlSerialize(true, $sxe->addChild('DeviceComponent'));
        if (null !== $this->DeviceMetric) $this->DeviceMetric->xmlSerialize(true, $sxe->addChild('DeviceMetric'));
        if (null !== $this->DeviceUseRequest) $this->DeviceUseRequest->xmlSerialize(true, $sxe->addChild('DeviceUseRequest'));
        if (null !== $this->DeviceUseStatement) $this->DeviceUseStatement->xmlSerialize(true, $sxe->addChild('DeviceUseStatement'));
        if (null !== $this->DiagnosticOrder) $this->DiagnosticOrder->xmlSerialize(true, $sxe->addChild('DiagnosticOrder'));
        if (null !== $this->DiagnosticReport) $this->DiagnosticReport->xmlSerialize(true, $sxe->addChild('DiagnosticReport'));
        if (null !== $this->DocumentManifest) $this->DocumentManifest->xmlSerialize(true, $sxe->addChild('DocumentManifest'));
        if (null !== $this->DocumentReference) $this->DocumentReference->xmlSerialize(true, $sxe->addChild('DocumentReference'));
        if (null !== $this->EligibilityRequest) $this->EligibilityRequest->xmlSerialize(true, $sxe->addChild('EligibilityRequest'));
        if (null !== $this->EligibilityResponse) $this->EligibilityResponse->xmlSerialize(true, $sxe->addChild('EligibilityResponse'));
        if (null !== $this->Encounter) $this->Encounter->xmlSerialize(true, $sxe->addChild('Encounter'));
        if (null !== $this->EnrollmentRequest) $this->EnrollmentRequest->xmlSerialize(true, $sxe->addChild('EnrollmentRequest'));
        if (null !== $this->EnrollmentResponse) $this->EnrollmentResponse->xmlSerialize(true, $sxe->addChild('EnrollmentResponse'));
        if (null !== $this->EpisodeOfCare) $this->EpisodeOfCare->xmlSerialize(true, $sxe->addChild('EpisodeOfCare'));
        if (null !== $this->ExplanationOfBenefit) $this->ExplanationOfBenefit->xmlSerialize(true, $sxe->addChild('ExplanationOfBenefit'));
        if (null !== $this->FamilyMemberHistory) $this->FamilyMemberHistory->xmlSerialize(true, $sxe->addChild('FamilyMemberHistory'));
        if (null !== $this->Flag) $this->Flag->xmlSerialize(true, $sxe->addChild('Flag'));
        if (null !== $this->Goal) $this->Goal->xmlSerialize(true, $sxe->addChild('Goal'));
        if (null !== $this->Group) $this->Group->xmlSerialize(true, $sxe->addChild('Group'));
        if (null !== $this->HealthcareService) $this->HealthcareService->xmlSerialize(true, $sxe->addChild('HealthcareService'));
        if (null !== $this->ImagingObjectSelection) $this->ImagingObjectSelection->xmlSerialize(true, $sxe->addChild('ImagingObjectSelection'));
        if (null !== $this->ImagingStudy) $this->ImagingStudy->xmlSerialize(true, $sxe->addChild('ImagingStudy'));
        if (null !== $this->Immunization) $this->Immunization->xmlSerialize(true, $sxe->addChild('Immunization'));
        if (null !== $this->ImmunizationRecommendation) $this->ImmunizationRecommendation->xmlSerialize(true, $sxe->addChild('ImmunizationRecommendation'));
        if (null !== $this->ImplementationGuide) $this->ImplementationGuide->xmlSerialize(true, $sxe->addChild('ImplementationGuide'));
        if (null !== $this->List) $this->List->xmlSerialize(true, $sxe->addChild('List'));
        if (null !== $this->Location) $this->Location->xmlSerialize(true, $sxe->addChild('Location'));
        if (null !== $this->Media) $this->Media->xmlSerialize(true, $sxe->addChild('Media'));
        if (null !== $this->Medication) $this->Medication->xmlSerialize(true, $sxe->addChild('Medication'));
        if (null !== $this->MedicationAdministration) $this->MedicationAdministration->xmlSerialize(true, $sxe->addChild('MedicationAdministration'));
        if (null !== $this->MedicationDispense) $this->MedicationDispense->xmlSerialize(true, $sxe->addChild('MedicationDispense'));
        if (null !== $this->MedicationOrder) $this->MedicationOrder->xmlSerialize(true, $sxe->addChild('MedicationOrder'));
        if (null !== $this->MedicationStatement) $this->MedicationStatement->xmlSerialize(true, $sxe->addChild('MedicationStatement'));
        if (null !== $this->MessageHeader) $this->MessageHeader->xmlSerialize(true, $sxe->addChild('MessageHeader'));
        if (null !== $this->NamingSystem) $this->NamingSystem->xmlSerialize(true, $sxe->addChild('NamingSystem'));
        if (null !== $this->NutritionOrder) $this->NutritionOrder->xmlSerialize(true, $sxe->addChild('NutritionOrder'));
        if (null !== $this->Observation) $this->Observation->xmlSerialize(true, $sxe->addChild('Observation'));
        if (null !== $this->OperationDefinition) $this->OperationDefinition->xmlSerialize(true, $sxe->addChild('OperationDefinition'));
        if (null !== $this->OperationOutcome) $this->OperationOutcome->xmlSerialize(true, $sxe->addChild('OperationOutcome'));
        if (null !== $this->Order) $this->Order->xmlSerialize(true, $sxe->addChild('Order'));
        if (null !== $this->OrderResponse) $this->OrderResponse->xmlSerialize(true, $sxe->addChild('OrderResponse'));
        if (null !== $this->Organization) $this->Organization->xmlSerialize(true, $sxe->addChild('Organization'));
        if (null !== $this->Patient) $this->Patient->xmlSerialize(true, $sxe->addChild('Patient'));
        if (null !== $this->PaymentNotice) $this->PaymentNotice->xmlSerialize(true, $sxe->addChild('PaymentNotice'));
        if (null !== $this->PaymentReconciliation) $this->PaymentReconciliation->xmlSerialize(true, $sxe->addChild('PaymentReconciliation'));
        if (null !== $this->Person) $this->Person->xmlSerialize(true, $sxe->addChild('Person'));
        if (null !== $this->Practitioner) $this->Practitioner->xmlSerialize(true, $sxe->addChild('Practitioner'));
        if (null !== $this->Procedure) $this->Procedure->xmlSerialize(true, $sxe->addChild('Procedure'));
        if (null !== $this->ProcedureRequest) $this->ProcedureRequest->xmlSerialize(true, $sxe->addChild('ProcedureRequest'));
        if (null !== $this->ProcessRequest) $this->ProcessRequest->xmlSerialize(true, $sxe->addChild('ProcessRequest'));
        if (null !== $this->ProcessResponse) $this->ProcessResponse->xmlSerialize(true, $sxe->addChild('ProcessResponse'));
        if (null !== $this->Provenance) $this->Provenance->xmlSerialize(true, $sxe->addChild('Provenance'));
        if (null !== $this->Questionnaire) $this->Questionnaire->xmlSerialize(true, $sxe->addChild('Questionnaire'));
        if (null !== $this->QuestionnaireResponse) $this->QuestionnaireResponse->xmlSerialize(true, $sxe->addChild('QuestionnaireResponse'));
        if (null !== $this->ReferralRequest) $this->ReferralRequest->xmlSerialize(true, $sxe->addChild('ReferralRequest'));
        if (null !== $this->RelatedPerson) $this->RelatedPerson->xmlSerialize(true, $sxe->addChild('RelatedPerson'));
        if (null !== $this->RiskAssessment) $this->RiskAssessment->xmlSerialize(true, $sxe->addChild('RiskAssessment'));
        if (null !== $this->Schedule) $this->Schedule->xmlSerialize(true, $sxe->addChild('Schedule'));
        if (null !== $this->SearchParameter) $this->SearchParameter->xmlSerialize(true, $sxe->addChild('SearchParameter'));
        if (null !== $this->Slot) $this->Slot->xmlSerialize(true, $sxe->addChild('Slot'));
        if (null !== $this->Specimen) $this->Specimen->xmlSerialize(true, $sxe->addChild('Specimen'));
        if (null !== $this->StructureDefinition) $this->StructureDefinition->xmlSerialize(true, $sxe->addChild('StructureDefinition'));
        if (null !== $this->Subscription) $this->Subscription->xmlSerialize(true, $sxe->addChild('Subscription'));
        if (null !== $this->Substance) $this->Substance->xmlSerialize(true, $sxe->addChild('Substance'));
        if (null !== $this->SupplyDelivery) $this->SupplyDelivery->xmlSerialize(true, $sxe->addChild('SupplyDelivery'));
        if (null !== $this->SupplyRequest) $this->SupplyRequest->xmlSerialize(true, $sxe->addChild('SupplyRequest'));
        if (null !== $this->TestScript) $this->TestScript->xmlSerialize(true, $sxe->addChild('TestScript'));
        if (null !== $this->ValueSet) $this->ValueSet->xmlSerialize(true, $sxe->addChild('ValueSet'));
        if (null !== $this->VisionPrescription) $this->VisionPrescription->xmlSerialize(true, $sxe->addChild('VisionPrescription'));
        if (null !== $this->Parameters) $this->Parameters->xmlSerialize(true, $sxe->addChild('Parameters'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}