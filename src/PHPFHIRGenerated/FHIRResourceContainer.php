<?php namespace PHPFHIRGenerated;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

class FHIRResourceContainer implements \JsonSerializable
{
    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRAccount
     */
    public $Account = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRActivityDefinition
     */
    public $ActivityDefinition = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRAdverseEvent
     */
    public $AdverseEvent = null;

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
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRBiologicallyDerivedProduct
     */
    public $BiologicallyDerivedProduct = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRBodyStructure
     */
    public $BodyStructure = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRBundle
     */
    public $Bundle = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRCapabilityStatement
     */
    public $CapabilityStatement = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRCarePlan
     */
    public $CarePlan = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRCareTeam
     */
    public $CareTeam = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRChargeItem
     */
    public $ChargeItem = null;

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
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRCodeSystem
     */
    public $CodeSystem = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRCommunication
     */
    public $Communication = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRCommunicationRequest
     */
    public $CommunicationRequest = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRCompartmentDefinition
     */
    public $CompartmentDefinition = null;

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
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRConsent
     */
    public $Consent = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRContract
     */
    public $Contract = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRCoverage
     */
    public $Coverage = null;

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
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRDeviceRequest
     */
    public $DeviceRequest = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRDeviceUseStatement
     */
    public $DeviceUseStatement = null;

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
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIREndpoint
     */
    public $Endpoint = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIREnrollmentRequest
     */
    public $EnrollmentRequest = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIREnrollmentResponse
     */
    public $EnrollmentResponse = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIREntryDefinition
     */
    public $EntryDefinition = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIREpisodeOfCare
     */
    public $EpisodeOfCare = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIREventDefinition
     */
    public $EventDefinition = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRExampleScenario
     */
    public $ExampleScenario = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRExpansionProfile
     */
    public $ExpansionProfile = null;

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
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRGraphDefinition
     */
    public $GraphDefinition = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRGroup
     */
    public $Group = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRGuidanceResponse
     */
    public $GuidanceResponse = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRHealthcareService
     */
    public $HealthcareService = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRImagingStudy
     */
    public $ImagingStudy = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRImmunization
     */
    public $Immunization = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRImmunizationEvaluation
     */
    public $ImmunizationEvaluation = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRImmunizationRecommendation
     */
    public $ImmunizationRecommendation = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRImplementationGuide
     */
    public $ImplementationGuide = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRImplementationGuideInput
     */
    public $ImplementationGuideInput = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRImplementationGuideOutput
     */
    public $ImplementationGuideOutput = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRInvoice
     */
    public $Invoice = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRItemInstance
     */
    public $ItemInstance = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRLibrary
     */
    public $Library = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRLinkage
     */
    public $Linkage = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRList
     */
    public $List = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRLocation
     */
    public $Location = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRMeasure
     */
    public $Measure = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRMeasureReport
     */
    public $MeasureReport = null;

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
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicationRequest
     */
    public $MedicationRequest = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicationStatement
     */
    public $MedicationStatement = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicinalProduct
     */
    public $MedicinalProduct = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicinalProductAuthorization
     */
    public $MedicinalProductAuthorization = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicinalProductClinicals
     */
    public $MedicinalProductClinicals = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicinalProductDeviceSpec
     */
    public $MedicinalProductDeviceSpec = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicinalProductIngredient
     */
    public $MedicinalProductIngredient = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicinalProductPackaged
     */
    public $MedicinalProductPackaged = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicinalProductPharmaceutical
     */
    public $MedicinalProductPharmaceutical = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRMessageDefinition
     */
    public $MessageDefinition = null;

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
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRObservationDefinition
     */
    public $ObservationDefinition = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIROccupationalData
     */
    public $OccupationalData = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIROperationDefinition
     */
    public $OperationDefinition = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIROperationOutcome
     */
    public $OperationOutcome = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIROrganization
     */
    public $Organization = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIROrganizationRole
     */
    public $OrganizationRole = null;

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
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRPlanDefinition
     */
    public $PlanDefinition = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRPractitioner
     */
    public $Practitioner = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRPractitionerRole
     */
    public $PractitionerRole = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRProcedure
     */
    public $Procedure = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRProcessRequest
     */
    public $ProcessRequest = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRProcessResponse
     */
    public $ProcessResponse = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRProductPlan
     */
    public $ProductPlan = null;

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
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRRelatedPerson
     */
    public $RelatedPerson = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRRequestGroup
     */
    public $RequestGroup = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRResearchStudy
     */
    public $ResearchStudy = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRResearchSubject
     */
    public $ResearchSubject = null;

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
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRSequence
     */
    public $Sequence = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRServiceDefinition
     */
    public $ServiceDefinition = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRServiceRequest
     */
    public $ServiceRequest = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRSlot
     */
    public $Slot = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRSpecimen
     */
    public $Specimen = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRSpecimenDefinition
     */
    public $SpecimenDefinition = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRStructureDefinition
     */
    public $StructureDefinition = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRStructureMap
     */
    public $StructureMap = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRSubscription
     */
    public $Subscription = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRSubstance
     */
    public $Substance = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRSubstancePolymer
     */
    public $SubstancePolymer = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRSubstanceReferenceInformation
     */
    public $SubstanceReferenceInformation = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public $SubstanceSpecification = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRSupplyDelivery
     */
    public $SupplyDelivery = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRSupplyRequest
     */
    public $SupplyRequest = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRTask
     */
    public $Task = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRTerminologyCapabilities
     */
    public $TerminologyCapabilities = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRTestReport
     */
    public $TestReport = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRTestScript
     */
    public $TestScript = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRUserSession
     */
    public $UserSession = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRValueSet
     */
    public $ValueSet = null;

    /**
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRVerificationResult
     */
    public $VerificationResult = null;

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
    public function getAccount() {
        return $this->Account;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRAccount $Account
     * @return $this
     */
    public function setAccount($Account) {
        $this->Account = $Account;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRActivityDefinition
     */
    public function getActivityDefinition() {
        return $this->ActivityDefinition;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRActivityDefinition $ActivityDefinition
     * @return $this
     */
    public function setActivityDefinition($ActivityDefinition) {
        $this->ActivityDefinition = $ActivityDefinition;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRAdverseEvent
     */
    public function getAdverseEvent() {
        return $this->AdverseEvent;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRAdverseEvent $AdverseEvent
     * @return $this
     */
    public function setAdverseEvent($AdverseEvent) {
        $this->AdverseEvent = $AdverseEvent;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function getAllergyIntolerance() {
        return $this->AllergyIntolerance;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRAllergyIntolerance $AllergyIntolerance
     * @return $this
     */
    public function setAllergyIntolerance($AllergyIntolerance) {
        $this->AllergyIntolerance = $AllergyIntolerance;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRAppointment
     */
    public function getAppointment() {
        return $this->Appointment;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRAppointment $Appointment
     * @return $this
     */
    public function setAppointment($Appointment) {
        $this->Appointment = $Appointment;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRAppointmentResponse
     */
    public function getAppointmentResponse() {
        return $this->AppointmentResponse;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRAppointmentResponse $AppointmentResponse
     * @return $this
     */
    public function setAppointmentResponse($AppointmentResponse) {
        $this->AppointmentResponse = $AppointmentResponse;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRAuditEvent
     */
    public function getAuditEvent() {
        return $this->AuditEvent;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRAuditEvent $AuditEvent
     * @return $this
     */
    public function setAuditEvent($AuditEvent) {
        $this->AuditEvent = $AuditEvent;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRBasic
     */
    public function getBasic() {
        return $this->Basic;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRBasic $Basic
     * @return $this
     */
    public function setBasic($Basic) {
        $this->Basic = $Basic;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRBinary
     */
    public function getBinary() {
        return $this->Binary;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRBinary $Binary
     * @return $this
     */
    public function setBinary($Binary) {
        $this->Binary = $Binary;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRBiologicallyDerivedProduct
     */
    public function getBiologicallyDerivedProduct() {
        return $this->BiologicallyDerivedProduct;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRBiologicallyDerivedProduct $BiologicallyDerivedProduct
     * @return $this
     */
    public function setBiologicallyDerivedProduct($BiologicallyDerivedProduct) {
        $this->BiologicallyDerivedProduct = $BiologicallyDerivedProduct;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRBodyStructure
     */
    public function getBodyStructure() {
        return $this->BodyStructure;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRBodyStructure $BodyStructure
     * @return $this
     */
    public function setBodyStructure($BodyStructure) {
        $this->BodyStructure = $BodyStructure;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRBundle
     */
    public function getBundle() {
        return $this->Bundle;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRBundle $Bundle
     * @return $this
     */
    public function setBundle($Bundle) {
        $this->Bundle = $Bundle;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRCapabilityStatement
     */
    public function getCapabilityStatement() {
        return $this->CapabilityStatement;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRCapabilityStatement $CapabilityStatement
     * @return $this
     */
    public function setCapabilityStatement($CapabilityStatement) {
        $this->CapabilityStatement = $CapabilityStatement;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRCarePlan
     */
    public function getCarePlan() {
        return $this->CarePlan;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRCarePlan $CarePlan
     * @return $this
     */
    public function setCarePlan($CarePlan) {
        $this->CarePlan = $CarePlan;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRCareTeam
     */
    public function getCareTeam() {
        return $this->CareTeam;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRCareTeam $CareTeam
     * @return $this
     */
    public function setCareTeam($CareTeam) {
        $this->CareTeam = $CareTeam;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRChargeItem
     */
    public function getChargeItem() {
        return $this->ChargeItem;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRChargeItem $ChargeItem
     * @return $this
     */
    public function setChargeItem($ChargeItem) {
        $this->ChargeItem = $ChargeItem;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRClaim
     */
    public function getClaim() {
        return $this->Claim;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRClaim $Claim
     * @return $this
     */
    public function setClaim($Claim) {
        $this->Claim = $Claim;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRClaimResponse
     */
    public function getClaimResponse() {
        return $this->ClaimResponse;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRClaimResponse $ClaimResponse
     * @return $this
     */
    public function setClaimResponse($ClaimResponse) {
        $this->ClaimResponse = $ClaimResponse;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRClinicalImpression
     */
    public function getClinicalImpression() {
        return $this->ClinicalImpression;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRClinicalImpression $ClinicalImpression
     * @return $this
     */
    public function setClinicalImpression($ClinicalImpression) {
        $this->ClinicalImpression = $ClinicalImpression;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRCodeSystem
     */
    public function getCodeSystem() {
        return $this->CodeSystem;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRCodeSystem $CodeSystem
     * @return $this
     */
    public function setCodeSystem($CodeSystem) {
        $this->CodeSystem = $CodeSystem;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRCommunication
     */
    public function getCommunication() {
        return $this->Communication;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRCommunication $Communication
     * @return $this
     */
    public function setCommunication($Communication) {
        $this->Communication = $Communication;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRCommunicationRequest
     */
    public function getCommunicationRequest() {
        return $this->CommunicationRequest;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRCommunicationRequest $CommunicationRequest
     * @return $this
     */
    public function setCommunicationRequest($CommunicationRequest) {
        $this->CommunicationRequest = $CommunicationRequest;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRCompartmentDefinition
     */
    public function getCompartmentDefinition() {
        return $this->CompartmentDefinition;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRCompartmentDefinition $CompartmentDefinition
     * @return $this
     */
    public function setCompartmentDefinition($CompartmentDefinition) {
        $this->CompartmentDefinition = $CompartmentDefinition;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRComposition
     */
    public function getComposition() {
        return $this->Composition;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRComposition $Composition
     * @return $this
     */
    public function setComposition($Composition) {
        $this->Composition = $Composition;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRConceptMap
     */
    public function getConceptMap() {
        return $this->ConceptMap;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRConceptMap $ConceptMap
     * @return $this
     */
    public function setConceptMap($ConceptMap) {
        $this->ConceptMap = $ConceptMap;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRCondition
     */
    public function getCondition() {
        return $this->Condition;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRCondition $Condition
     * @return $this
     */
    public function setCondition($Condition) {
        $this->Condition = $Condition;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRConsent
     */
    public function getConsent() {
        return $this->Consent;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRConsent $Consent
     * @return $this
     */
    public function setConsent($Consent) {
        $this->Consent = $Consent;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRContract
     */
    public function getContract() {
        return $this->Contract;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRContract $Contract
     * @return $this
     */
    public function setContract($Contract) {
        $this->Contract = $Contract;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRCoverage
     */
    public function getCoverage() {
        return $this->Coverage;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRCoverage $Coverage
     * @return $this
     */
    public function setCoverage($Coverage) {
        $this->Coverage = $Coverage;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRDetectedIssue
     */
    public function getDetectedIssue() {
        return $this->DetectedIssue;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRDetectedIssue $DetectedIssue
     * @return $this
     */
    public function setDetectedIssue($DetectedIssue) {
        $this->DetectedIssue = $DetectedIssue;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRDevice
     */
    public function getDevice() {
        return $this->Device;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRDevice $Device
     * @return $this
     */
    public function setDevice($Device) {
        $this->Device = $Device;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRDeviceComponent
     */
    public function getDeviceComponent() {
        return $this->DeviceComponent;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRDeviceComponent $DeviceComponent
     * @return $this
     */
    public function setDeviceComponent($DeviceComponent) {
        $this->DeviceComponent = $DeviceComponent;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRDeviceMetric
     */
    public function getDeviceMetric() {
        return $this->DeviceMetric;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRDeviceMetric $DeviceMetric
     * @return $this
     */
    public function setDeviceMetric($DeviceMetric) {
        $this->DeviceMetric = $DeviceMetric;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRDeviceRequest
     */
    public function getDeviceRequest() {
        return $this->DeviceRequest;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRDeviceRequest $DeviceRequest
     * @return $this
     */
    public function setDeviceRequest($DeviceRequest) {
        $this->DeviceRequest = $DeviceRequest;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRDeviceUseStatement
     */
    public function getDeviceUseStatement() {
        return $this->DeviceUseStatement;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRDeviceUseStatement $DeviceUseStatement
     * @return $this
     */
    public function setDeviceUseStatement($DeviceUseStatement) {
        $this->DeviceUseStatement = $DeviceUseStatement;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRDiagnosticReport
     */
    public function getDiagnosticReport() {
        return $this->DiagnosticReport;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRDiagnosticReport $DiagnosticReport
     * @return $this
     */
    public function setDiagnosticReport($DiagnosticReport) {
        $this->DiagnosticReport = $DiagnosticReport;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRDocumentManifest
     */
    public function getDocumentManifest() {
        return $this->DocumentManifest;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRDocumentManifest $DocumentManifest
     * @return $this
     */
    public function setDocumentManifest($DocumentManifest) {
        $this->DocumentManifest = $DocumentManifest;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRDocumentReference
     */
    public function getDocumentReference() {
        return $this->DocumentReference;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRDocumentReference $DocumentReference
     * @return $this
     */
    public function setDocumentReference($DocumentReference) {
        $this->DocumentReference = $DocumentReference;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIREligibilityRequest
     */
    public function getEligibilityRequest() {
        return $this->EligibilityRequest;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIREligibilityRequest $EligibilityRequest
     * @return $this
     */
    public function setEligibilityRequest($EligibilityRequest) {
        $this->EligibilityRequest = $EligibilityRequest;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIREligibilityResponse
     */
    public function getEligibilityResponse() {
        return $this->EligibilityResponse;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIREligibilityResponse $EligibilityResponse
     * @return $this
     */
    public function setEligibilityResponse($EligibilityResponse) {
        $this->EligibilityResponse = $EligibilityResponse;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIREncounter
     */
    public function getEncounter() {
        return $this->Encounter;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIREncounter $Encounter
     * @return $this
     */
    public function setEncounter($Encounter) {
        $this->Encounter = $Encounter;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIREndpoint
     */
    public function getEndpoint() {
        return $this->Endpoint;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIREndpoint $Endpoint
     * @return $this
     */
    public function setEndpoint($Endpoint) {
        $this->Endpoint = $Endpoint;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIREnrollmentRequest
     */
    public function getEnrollmentRequest() {
        return $this->EnrollmentRequest;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIREnrollmentRequest $EnrollmentRequest
     * @return $this
     */
    public function setEnrollmentRequest($EnrollmentRequest) {
        $this->EnrollmentRequest = $EnrollmentRequest;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIREnrollmentResponse
     */
    public function getEnrollmentResponse() {
        return $this->EnrollmentResponse;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIREnrollmentResponse $EnrollmentResponse
     * @return $this
     */
    public function setEnrollmentResponse($EnrollmentResponse) {
        $this->EnrollmentResponse = $EnrollmentResponse;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIREntryDefinition
     */
    public function getEntryDefinition() {
        return $this->EntryDefinition;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIREntryDefinition $EntryDefinition
     * @return $this
     */
    public function setEntryDefinition($EntryDefinition) {
        $this->EntryDefinition = $EntryDefinition;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIREpisodeOfCare
     */
    public function getEpisodeOfCare() {
        return $this->EpisodeOfCare;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIREpisodeOfCare $EpisodeOfCare
     * @return $this
     */
    public function setEpisodeOfCare($EpisodeOfCare) {
        $this->EpisodeOfCare = $EpisodeOfCare;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIREventDefinition
     */
    public function getEventDefinition() {
        return $this->EventDefinition;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIREventDefinition $EventDefinition
     * @return $this
     */
    public function setEventDefinition($EventDefinition) {
        $this->EventDefinition = $EventDefinition;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRExampleScenario
     */
    public function getExampleScenario() {
        return $this->ExampleScenario;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRExampleScenario $ExampleScenario
     * @return $this
     */
    public function setExampleScenario($ExampleScenario) {
        $this->ExampleScenario = $ExampleScenario;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRExpansionProfile
     */
    public function getExpansionProfile() {
        return $this->ExpansionProfile;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRExpansionProfile $ExpansionProfile
     * @return $this
     */
    public function setExpansionProfile($ExpansionProfile) {
        $this->ExpansionProfile = $ExpansionProfile;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRExplanationOfBenefit
     */
    public function getExplanationOfBenefit() {
        return $this->ExplanationOfBenefit;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRExplanationOfBenefit $ExplanationOfBenefit
     * @return $this
     */
    public function setExplanationOfBenefit($ExplanationOfBenefit) {
        $this->ExplanationOfBenefit = $ExplanationOfBenefit;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRFamilyMemberHistory
     */
    public function getFamilyMemberHistory() {
        return $this->FamilyMemberHistory;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRFamilyMemberHistory $FamilyMemberHistory
     * @return $this
     */
    public function setFamilyMemberHistory($FamilyMemberHistory) {
        $this->FamilyMemberHistory = $FamilyMemberHistory;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRFlag
     */
    public function getFlag() {
        return $this->Flag;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRFlag $Flag
     * @return $this
     */
    public function setFlag($Flag) {
        $this->Flag = $Flag;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRGoal
     */
    public function getGoal() {
        return $this->Goal;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRGoal $Goal
     * @return $this
     */
    public function setGoal($Goal) {
        $this->Goal = $Goal;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRGraphDefinition
     */
    public function getGraphDefinition() {
        return $this->GraphDefinition;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRGraphDefinition $GraphDefinition
     * @return $this
     */
    public function setGraphDefinition($GraphDefinition) {
        $this->GraphDefinition = $GraphDefinition;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRGroup
     */
    public function getGroup() {
        return $this->Group;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRGroup $Group
     * @return $this
     */
    public function setGroup($Group) {
        $this->Group = $Group;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRGuidanceResponse
     */
    public function getGuidanceResponse() {
        return $this->GuidanceResponse;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRGuidanceResponse $GuidanceResponse
     * @return $this
     */
    public function setGuidanceResponse($GuidanceResponse) {
        $this->GuidanceResponse = $GuidanceResponse;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRHealthcareService
     */
    public function getHealthcareService() {
        return $this->HealthcareService;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRHealthcareService $HealthcareService
     * @return $this
     */
    public function setHealthcareService($HealthcareService) {
        $this->HealthcareService = $HealthcareService;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRImagingStudy
     */
    public function getImagingStudy() {
        return $this->ImagingStudy;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRImagingStudy $ImagingStudy
     * @return $this
     */
    public function setImagingStudy($ImagingStudy) {
        $this->ImagingStudy = $ImagingStudy;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRImmunization
     */
    public function getImmunization() {
        return $this->Immunization;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRImmunization $Immunization
     * @return $this
     */
    public function setImmunization($Immunization) {
        $this->Immunization = $Immunization;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRImmunizationEvaluation
     */
    public function getImmunizationEvaluation() {
        return $this->ImmunizationEvaluation;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRImmunizationEvaluation $ImmunizationEvaluation
     * @return $this
     */
    public function setImmunizationEvaluation($ImmunizationEvaluation) {
        $this->ImmunizationEvaluation = $ImmunizationEvaluation;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRImmunizationRecommendation
     */
    public function getImmunizationRecommendation() {
        return $this->ImmunizationRecommendation;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRImmunizationRecommendation $ImmunizationRecommendation
     * @return $this
     */
    public function setImmunizationRecommendation($ImmunizationRecommendation) {
        $this->ImmunizationRecommendation = $ImmunizationRecommendation;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRImplementationGuide
     */
    public function getImplementationGuide() {
        return $this->ImplementationGuide;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRImplementationGuide $ImplementationGuide
     * @return $this
     */
    public function setImplementationGuide($ImplementationGuide) {
        $this->ImplementationGuide = $ImplementationGuide;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRImplementationGuideInput
     */
    public function getImplementationGuideInput() {
        return $this->ImplementationGuideInput;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRImplementationGuideInput $ImplementationGuideInput
     * @return $this
     */
    public function setImplementationGuideInput($ImplementationGuideInput) {
        $this->ImplementationGuideInput = $ImplementationGuideInput;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRImplementationGuideOutput
     */
    public function getImplementationGuideOutput() {
        return $this->ImplementationGuideOutput;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRImplementationGuideOutput $ImplementationGuideOutput
     * @return $this
     */
    public function setImplementationGuideOutput($ImplementationGuideOutput) {
        $this->ImplementationGuideOutput = $ImplementationGuideOutput;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRInvoice
     */
    public function getInvoice() {
        return $this->Invoice;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRInvoice $Invoice
     * @return $this
     */
    public function setInvoice($Invoice) {
        $this->Invoice = $Invoice;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRItemInstance
     */
    public function getItemInstance() {
        return $this->ItemInstance;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRItemInstance $ItemInstance
     * @return $this
     */
    public function setItemInstance($ItemInstance) {
        $this->ItemInstance = $ItemInstance;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRLibrary
     */
    public function getLibrary() {
        return $this->Library;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRLibrary $Library
     * @return $this
     */
    public function setLibrary($Library) {
        $this->Library = $Library;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRLinkage
     */
    public function getLinkage() {
        return $this->Linkage;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRLinkage $Linkage
     * @return $this
     */
    public function setLinkage($Linkage) {
        $this->Linkage = $Linkage;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRList
     */
    public function getList() {
        return $this->List;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRList $List
     * @return $this
     */
    public function setList($List) {
        $this->List = $List;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRLocation
     */
    public function getLocation() {
        return $this->Location;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRLocation $Location
     * @return $this
     */
    public function setLocation($Location) {
        $this->Location = $Location;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRMeasure
     */
    public function getMeasure() {
        return $this->Measure;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRMeasure $Measure
     * @return $this
     */
    public function setMeasure($Measure) {
        $this->Measure = $Measure;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRMeasureReport
     */
    public function getMeasureReport() {
        return $this->MeasureReport;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRMeasureReport $MeasureReport
     * @return $this
     */
    public function setMeasureReport($MeasureReport) {
        $this->MeasureReport = $MeasureReport;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRMedia
     */
    public function getMedia() {
        return $this->Media;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRMedia $Media
     * @return $this
     */
    public function setMedia($Media) {
        $this->Media = $Media;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRMedication
     */
    public function getMedication() {
        return $this->Medication;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRMedication $Medication
     * @return $this
     */
    public function setMedication($Medication) {
        $this->Medication = $Medication;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicationAdministration
     */
    public function getMedicationAdministration() {
        return $this->MedicationAdministration;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicationAdministration $MedicationAdministration
     * @return $this
     */
    public function setMedicationAdministration($MedicationAdministration) {
        $this->MedicationAdministration = $MedicationAdministration;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicationDispense
     */
    public function getMedicationDispense() {
        return $this->MedicationDispense;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicationDispense $MedicationDispense
     * @return $this
     */
    public function setMedicationDispense($MedicationDispense) {
        $this->MedicationDispense = $MedicationDispense;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicationRequest
     */
    public function getMedicationRequest() {
        return $this->MedicationRequest;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicationRequest $MedicationRequest
     * @return $this
     */
    public function setMedicationRequest($MedicationRequest) {
        $this->MedicationRequest = $MedicationRequest;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicationStatement
     */
    public function getMedicationStatement() {
        return $this->MedicationStatement;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicationStatement $MedicationStatement
     * @return $this
     */
    public function setMedicationStatement($MedicationStatement) {
        $this->MedicationStatement = $MedicationStatement;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicinalProduct
     */
    public function getMedicinalProduct() {
        return $this->MedicinalProduct;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicinalProduct $MedicinalProduct
     * @return $this
     */
    public function setMedicinalProduct($MedicinalProduct) {
        $this->MedicinalProduct = $MedicinalProduct;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicinalProductAuthorization
     */
    public function getMedicinalProductAuthorization() {
        return $this->MedicinalProductAuthorization;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicinalProductAuthorization $MedicinalProductAuthorization
     * @return $this
     */
    public function setMedicinalProductAuthorization($MedicinalProductAuthorization) {
        $this->MedicinalProductAuthorization = $MedicinalProductAuthorization;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicinalProductClinicals
     */
    public function getMedicinalProductClinicals() {
        return $this->MedicinalProductClinicals;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicinalProductClinicals $MedicinalProductClinicals
     * @return $this
     */
    public function setMedicinalProductClinicals($MedicinalProductClinicals) {
        $this->MedicinalProductClinicals = $MedicinalProductClinicals;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicinalProductDeviceSpec
     */
    public function getMedicinalProductDeviceSpec() {
        return $this->MedicinalProductDeviceSpec;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicinalProductDeviceSpec $MedicinalProductDeviceSpec
     * @return $this
     */
    public function setMedicinalProductDeviceSpec($MedicinalProductDeviceSpec) {
        $this->MedicinalProductDeviceSpec = $MedicinalProductDeviceSpec;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicinalProductIngredient
     */
    public function getMedicinalProductIngredient() {
        return $this->MedicinalProductIngredient;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicinalProductIngredient $MedicinalProductIngredient
     * @return $this
     */
    public function setMedicinalProductIngredient($MedicinalProductIngredient) {
        $this->MedicinalProductIngredient = $MedicinalProductIngredient;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicinalProductPackaged
     */
    public function getMedicinalProductPackaged() {
        return $this->MedicinalProductPackaged;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicinalProductPackaged $MedicinalProductPackaged
     * @return $this
     */
    public function setMedicinalProductPackaged($MedicinalProductPackaged) {
        $this->MedicinalProductPackaged = $MedicinalProductPackaged;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicinalProductPharmaceutical
     */
    public function getMedicinalProductPharmaceutical() {
        return $this->MedicinalProductPharmaceutical;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRMedicinalProductPharmaceutical $MedicinalProductPharmaceutical
     * @return $this
     */
    public function setMedicinalProductPharmaceutical($MedicinalProductPharmaceutical) {
        $this->MedicinalProductPharmaceutical = $MedicinalProductPharmaceutical;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRMessageDefinition
     */
    public function getMessageDefinition() {
        return $this->MessageDefinition;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRMessageDefinition $MessageDefinition
     * @return $this
     */
    public function setMessageDefinition($MessageDefinition) {
        $this->MessageDefinition = $MessageDefinition;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRMessageHeader
     */
    public function getMessageHeader() {
        return $this->MessageHeader;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRMessageHeader $MessageHeader
     * @return $this
     */
    public function setMessageHeader($MessageHeader) {
        $this->MessageHeader = $MessageHeader;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRNamingSystem
     */
    public function getNamingSystem() {
        return $this->NamingSystem;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRNamingSystem $NamingSystem
     * @return $this
     */
    public function setNamingSystem($NamingSystem) {
        $this->NamingSystem = $NamingSystem;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRNutritionOrder
     */
    public function getNutritionOrder() {
        return $this->NutritionOrder;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRNutritionOrder $NutritionOrder
     * @return $this
     */
    public function setNutritionOrder($NutritionOrder) {
        $this->NutritionOrder = $NutritionOrder;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRObservation
     */
    public function getObservation() {
        return $this->Observation;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRObservation $Observation
     * @return $this
     */
    public function setObservation($Observation) {
        $this->Observation = $Observation;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRObservationDefinition
     */
    public function getObservationDefinition() {
        return $this->ObservationDefinition;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRObservationDefinition $ObservationDefinition
     * @return $this
     */
    public function setObservationDefinition($ObservationDefinition) {
        $this->ObservationDefinition = $ObservationDefinition;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIROccupationalData
     */
    public function getOccupationalData() {
        return $this->OccupationalData;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIROccupationalData $OccupationalData
     * @return $this
     */
    public function setOccupationalData($OccupationalData) {
        $this->OccupationalData = $OccupationalData;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIROperationDefinition
     */
    public function getOperationDefinition() {
        return $this->OperationDefinition;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIROperationDefinition $OperationDefinition
     * @return $this
     */
    public function setOperationDefinition($OperationDefinition) {
        $this->OperationDefinition = $OperationDefinition;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIROperationOutcome
     */
    public function getOperationOutcome() {
        return $this->OperationOutcome;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIROperationOutcome $OperationOutcome
     * @return $this
     */
    public function setOperationOutcome($OperationOutcome) {
        $this->OperationOutcome = $OperationOutcome;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIROrganization
     */
    public function getOrganization() {
        return $this->Organization;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIROrganization $Organization
     * @return $this
     */
    public function setOrganization($Organization) {
        $this->Organization = $Organization;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIROrganizationRole
     */
    public function getOrganizationRole() {
        return $this->OrganizationRole;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIROrganizationRole $OrganizationRole
     * @return $this
     */
    public function setOrganizationRole($OrganizationRole) {
        $this->OrganizationRole = $OrganizationRole;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRPatient
     */
    public function getPatient() {
        return $this->Patient;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRPatient $Patient
     * @return $this
     */
    public function setPatient($Patient) {
        $this->Patient = $Patient;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRPaymentNotice
     */
    public function getPaymentNotice() {
        return $this->PaymentNotice;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRPaymentNotice $PaymentNotice
     * @return $this
     */
    public function setPaymentNotice($PaymentNotice) {
        $this->PaymentNotice = $PaymentNotice;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRPaymentReconciliation
     */
    public function getPaymentReconciliation() {
        return $this->PaymentReconciliation;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRPaymentReconciliation $PaymentReconciliation
     * @return $this
     */
    public function setPaymentReconciliation($PaymentReconciliation) {
        $this->PaymentReconciliation = $PaymentReconciliation;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRPerson
     */
    public function getPerson() {
        return $this->Person;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRPerson $Person
     * @return $this
     */
    public function setPerson($Person) {
        $this->Person = $Person;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRPlanDefinition
     */
    public function getPlanDefinition() {
        return $this->PlanDefinition;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRPlanDefinition $PlanDefinition
     * @return $this
     */
    public function setPlanDefinition($PlanDefinition) {
        $this->PlanDefinition = $PlanDefinition;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRPractitioner
     */
    public function getPractitioner() {
        return $this->Practitioner;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRPractitioner $Practitioner
     * @return $this
     */
    public function setPractitioner($Practitioner) {
        $this->Practitioner = $Practitioner;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRPractitionerRole
     */
    public function getPractitionerRole() {
        return $this->PractitionerRole;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRPractitionerRole $PractitionerRole
     * @return $this
     */
    public function setPractitionerRole($PractitionerRole) {
        $this->PractitionerRole = $PractitionerRole;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRProcedure
     */
    public function getProcedure() {
        return $this->Procedure;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRProcedure $Procedure
     * @return $this
     */
    public function setProcedure($Procedure) {
        $this->Procedure = $Procedure;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRProcessRequest
     */
    public function getProcessRequest() {
        return $this->ProcessRequest;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRProcessRequest $ProcessRequest
     * @return $this
     */
    public function setProcessRequest($ProcessRequest) {
        $this->ProcessRequest = $ProcessRequest;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRProcessResponse
     */
    public function getProcessResponse() {
        return $this->ProcessResponse;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRProcessResponse $ProcessResponse
     * @return $this
     */
    public function setProcessResponse($ProcessResponse) {
        $this->ProcessResponse = $ProcessResponse;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRProductPlan
     */
    public function getProductPlan() {
        return $this->ProductPlan;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRProductPlan $ProductPlan
     * @return $this
     */
    public function setProductPlan($ProductPlan) {
        $this->ProductPlan = $ProductPlan;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRProvenance
     */
    public function getProvenance() {
        return $this->Provenance;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRProvenance $Provenance
     * @return $this
     */
    public function setProvenance($Provenance) {
        $this->Provenance = $Provenance;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRQuestionnaire
     */
    public function getQuestionnaire() {
        return $this->Questionnaire;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRQuestionnaire $Questionnaire
     * @return $this
     */
    public function setQuestionnaire($Questionnaire) {
        $this->Questionnaire = $Questionnaire;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRQuestionnaireResponse
     */
    public function getQuestionnaireResponse() {
        return $this->QuestionnaireResponse;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRQuestionnaireResponse $QuestionnaireResponse
     * @return $this
     */
    public function setQuestionnaireResponse($QuestionnaireResponse) {
        $this->QuestionnaireResponse = $QuestionnaireResponse;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRRelatedPerson
     */
    public function getRelatedPerson() {
        return $this->RelatedPerson;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRRelatedPerson $RelatedPerson
     * @return $this
     */
    public function setRelatedPerson($RelatedPerson) {
        $this->RelatedPerson = $RelatedPerson;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRRequestGroup
     */
    public function getRequestGroup() {
        return $this->RequestGroup;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRRequestGroup $RequestGroup
     * @return $this
     */
    public function setRequestGroup($RequestGroup) {
        $this->RequestGroup = $RequestGroup;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRResearchStudy
     */
    public function getResearchStudy() {
        return $this->ResearchStudy;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRResearchStudy $ResearchStudy
     * @return $this
     */
    public function setResearchStudy($ResearchStudy) {
        $this->ResearchStudy = $ResearchStudy;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRResearchSubject
     */
    public function getResearchSubject() {
        return $this->ResearchSubject;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRResearchSubject $ResearchSubject
     * @return $this
     */
    public function setResearchSubject($ResearchSubject) {
        $this->ResearchSubject = $ResearchSubject;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRRiskAssessment
     */
    public function getRiskAssessment() {
        return $this->RiskAssessment;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRRiskAssessment $RiskAssessment
     * @return $this
     */
    public function setRiskAssessment($RiskAssessment) {
        $this->RiskAssessment = $RiskAssessment;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRSchedule
     */
    public function getSchedule() {
        return $this->Schedule;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRSchedule $Schedule
     * @return $this
     */
    public function setSchedule($Schedule) {
        $this->Schedule = $Schedule;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRSearchParameter
     */
    public function getSearchParameter() {
        return $this->SearchParameter;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRSearchParameter $SearchParameter
     * @return $this
     */
    public function setSearchParameter($SearchParameter) {
        $this->SearchParameter = $SearchParameter;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRSequence
     */
    public function getSequence() {
        return $this->Sequence;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRSequence $Sequence
     * @return $this
     */
    public function setSequence($Sequence) {
        $this->Sequence = $Sequence;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRServiceDefinition
     */
    public function getServiceDefinition() {
        return $this->ServiceDefinition;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRServiceDefinition $ServiceDefinition
     * @return $this
     */
    public function setServiceDefinition($ServiceDefinition) {
        $this->ServiceDefinition = $ServiceDefinition;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRServiceRequest
     */
    public function getServiceRequest() {
        return $this->ServiceRequest;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRServiceRequest $ServiceRequest
     * @return $this
     */
    public function setServiceRequest($ServiceRequest) {
        $this->ServiceRequest = $ServiceRequest;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRSlot
     */
    public function getSlot() {
        return $this->Slot;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRSlot $Slot
     * @return $this
     */
    public function setSlot($Slot) {
        $this->Slot = $Slot;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRSpecimen
     */
    public function getSpecimen() {
        return $this->Specimen;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRSpecimen $Specimen
     * @return $this
     */
    public function setSpecimen($Specimen) {
        $this->Specimen = $Specimen;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRSpecimenDefinition
     */
    public function getSpecimenDefinition() {
        return $this->SpecimenDefinition;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRSpecimenDefinition $SpecimenDefinition
     * @return $this
     */
    public function setSpecimenDefinition($SpecimenDefinition) {
        $this->SpecimenDefinition = $SpecimenDefinition;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRStructureDefinition
     */
    public function getStructureDefinition() {
        return $this->StructureDefinition;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRStructureDefinition $StructureDefinition
     * @return $this
     */
    public function setStructureDefinition($StructureDefinition) {
        $this->StructureDefinition = $StructureDefinition;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRStructureMap
     */
    public function getStructureMap() {
        return $this->StructureMap;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRStructureMap $StructureMap
     * @return $this
     */
    public function setStructureMap($StructureMap) {
        $this->StructureMap = $StructureMap;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRSubscription
     */
    public function getSubscription() {
        return $this->Subscription;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRSubscription $Subscription
     * @return $this
     */
    public function setSubscription($Subscription) {
        $this->Subscription = $Subscription;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRSubstance
     */
    public function getSubstance() {
        return $this->Substance;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRSubstance $Substance
     * @return $this
     */
    public function setSubstance($Substance) {
        $this->Substance = $Substance;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRSubstancePolymer
     */
    public function getSubstancePolymer() {
        return $this->SubstancePolymer;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRSubstancePolymer $SubstancePolymer
     * @return $this
     */
    public function setSubstancePolymer($SubstancePolymer) {
        $this->SubstancePolymer = $SubstancePolymer;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRSubstanceReferenceInformation
     */
    public function getSubstanceReferenceInformation() {
        return $this->SubstanceReferenceInformation;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRSubstanceReferenceInformation $SubstanceReferenceInformation
     * @return $this
     */
    public function setSubstanceReferenceInformation($SubstanceReferenceInformation) {
        $this->SubstanceReferenceInformation = $SubstanceReferenceInformation;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRSubstanceSpecification
     */
    public function getSubstanceSpecification() {
        return $this->SubstanceSpecification;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRSubstanceSpecification $SubstanceSpecification
     * @return $this
     */
    public function setSubstanceSpecification($SubstanceSpecification) {
        $this->SubstanceSpecification = $SubstanceSpecification;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRSupplyDelivery
     */
    public function getSupplyDelivery() {
        return $this->SupplyDelivery;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRSupplyDelivery $SupplyDelivery
     * @return $this
     */
    public function setSupplyDelivery($SupplyDelivery) {
        $this->SupplyDelivery = $SupplyDelivery;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRSupplyRequest
     */
    public function getSupplyRequest() {
        return $this->SupplyRequest;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRSupplyRequest $SupplyRequest
     * @return $this
     */
    public function setSupplyRequest($SupplyRequest) {
        $this->SupplyRequest = $SupplyRequest;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRTask
     */
    public function getTask() {
        return $this->Task;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRTask $Task
     * @return $this
     */
    public function setTask($Task) {
        $this->Task = $Task;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRTerminologyCapabilities
     */
    public function getTerminologyCapabilities() {
        return $this->TerminologyCapabilities;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRTerminologyCapabilities $TerminologyCapabilities
     * @return $this
     */
    public function setTerminologyCapabilities($TerminologyCapabilities) {
        $this->TerminologyCapabilities = $TerminologyCapabilities;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRTestReport
     */
    public function getTestReport() {
        return $this->TestReport;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRTestReport $TestReport
     * @return $this
     */
    public function setTestReport($TestReport) {
        $this->TestReport = $TestReport;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRTestScript
     */
    public function getTestScript() {
        return $this->TestScript;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRTestScript $TestScript
     * @return $this
     */
    public function setTestScript($TestScript) {
        $this->TestScript = $TestScript;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRUserSession
     */
    public function getUserSession() {
        return $this->UserSession;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRUserSession $UserSession
     * @return $this
     */
    public function setUserSession($UserSession) {
        $this->UserSession = $UserSession;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRValueSet
     */
    public function getValueSet() {
        return $this->ValueSet;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRValueSet $ValueSet
     * @return $this
     */
    public function setValueSet($ValueSet) {
        $this->ValueSet = $ValueSet;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRVerificationResult
     */
    public function getVerificationResult() {
        return $this->VerificationResult;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRVerificationResult $VerificationResult
     * @return $this
     */
    public function setVerificationResult($VerificationResult) {
        $this->VerificationResult = $VerificationResult;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRVisionPrescription
     */
    public function getVisionPrescription() {
        return $this->VisionPrescription;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRVisionPrescription $VisionPrescription
     * @return $this
     */
    public function setVisionPrescription($VisionPrescription) {
        $this->VisionPrescription = $VisionPrescription;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRParameters
     */
    public function getParameters() {
        return $this->Parameters;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRParameters $Parameters
     * @return $this
     */
    public function setParameters($Parameters) {
        $this->Parameters = $Parameters;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_object($data)) {
            $n = substr(strrchr(get_class($data), 'FHIR'), 4);
            $this->{"set{$n}"}($data);
        } else if (is_array($data)) {
            if (($cnt = count($data)) > 1) {
                throw new \InvalidArgumentException("ResourceContainers may only contain 1 object, \"{$cnt}\" values provided");
            } else {
                $k = key($data);
                $this->{"set{$k}"}($data);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be object or array, saw '.gettype($data));
        }
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return mixed
     */
    public function jsonSerialize() {
        if (isset($this->Account)) return $this->Account;
        if (isset($this->ActivityDefinition)) return $this->ActivityDefinition;
        if (isset($this->AdverseEvent)) return $this->AdverseEvent;
        if (isset($this->AllergyIntolerance)) return $this->AllergyIntolerance;
        if (isset($this->Appointment)) return $this->Appointment;
        if (isset($this->AppointmentResponse)) return $this->AppointmentResponse;
        if (isset($this->AuditEvent)) return $this->AuditEvent;
        if (isset($this->Basic)) return $this->Basic;
        if (isset($this->Binary)) return $this->Binary;
        if (isset($this->BiologicallyDerivedProduct)) return $this->BiologicallyDerivedProduct;
        if (isset($this->BodyStructure)) return $this->BodyStructure;
        if (isset($this->Bundle)) return $this->Bundle;
        if (isset($this->CapabilityStatement)) return $this->CapabilityStatement;
        if (isset($this->CarePlan)) return $this->CarePlan;
        if (isset($this->CareTeam)) return $this->CareTeam;
        if (isset($this->ChargeItem)) return $this->ChargeItem;
        if (isset($this->Claim)) return $this->Claim;
        if (isset($this->ClaimResponse)) return $this->ClaimResponse;
        if (isset($this->ClinicalImpression)) return $this->ClinicalImpression;
        if (isset($this->CodeSystem)) return $this->CodeSystem;
        if (isset($this->Communication)) return $this->Communication;
        if (isset($this->CommunicationRequest)) return $this->CommunicationRequest;
        if (isset($this->CompartmentDefinition)) return $this->CompartmentDefinition;
        if (isset($this->Composition)) return $this->Composition;
        if (isset($this->ConceptMap)) return $this->ConceptMap;
        if (isset($this->Condition)) return $this->Condition;
        if (isset($this->Consent)) return $this->Consent;
        if (isset($this->Contract)) return $this->Contract;
        if (isset($this->Coverage)) return $this->Coverage;
        if (isset($this->DetectedIssue)) return $this->DetectedIssue;
        if (isset($this->Device)) return $this->Device;
        if (isset($this->DeviceComponent)) return $this->DeviceComponent;
        if (isset($this->DeviceMetric)) return $this->DeviceMetric;
        if (isset($this->DeviceRequest)) return $this->DeviceRequest;
        if (isset($this->DeviceUseStatement)) return $this->DeviceUseStatement;
        if (isset($this->DiagnosticReport)) return $this->DiagnosticReport;
        if (isset($this->DocumentManifest)) return $this->DocumentManifest;
        if (isset($this->DocumentReference)) return $this->DocumentReference;
        if (isset($this->EligibilityRequest)) return $this->EligibilityRequest;
        if (isset($this->EligibilityResponse)) return $this->EligibilityResponse;
        if (isset($this->Encounter)) return $this->Encounter;
        if (isset($this->Endpoint)) return $this->Endpoint;
        if (isset($this->EnrollmentRequest)) return $this->EnrollmentRequest;
        if (isset($this->EnrollmentResponse)) return $this->EnrollmentResponse;
        if (isset($this->EntryDefinition)) return $this->EntryDefinition;
        if (isset($this->EpisodeOfCare)) return $this->EpisodeOfCare;
        if (isset($this->EventDefinition)) return $this->EventDefinition;
        if (isset($this->ExampleScenario)) return $this->ExampleScenario;
        if (isset($this->ExpansionProfile)) return $this->ExpansionProfile;
        if (isset($this->ExplanationOfBenefit)) return $this->ExplanationOfBenefit;
        if (isset($this->FamilyMemberHistory)) return $this->FamilyMemberHistory;
        if (isset($this->Flag)) return $this->Flag;
        if (isset($this->Goal)) return $this->Goal;
        if (isset($this->GraphDefinition)) return $this->GraphDefinition;
        if (isset($this->Group)) return $this->Group;
        if (isset($this->GuidanceResponse)) return $this->GuidanceResponse;
        if (isset($this->HealthcareService)) return $this->HealthcareService;
        if (isset($this->ImagingStudy)) return $this->ImagingStudy;
        if (isset($this->Immunization)) return $this->Immunization;
        if (isset($this->ImmunizationEvaluation)) return $this->ImmunizationEvaluation;
        if (isset($this->ImmunizationRecommendation)) return $this->ImmunizationRecommendation;
        if (isset($this->ImplementationGuide)) return $this->ImplementationGuide;
        if (isset($this->ImplementationGuideInput)) return $this->ImplementationGuideInput;
        if (isset($this->ImplementationGuideOutput)) return $this->ImplementationGuideOutput;
        if (isset($this->Invoice)) return $this->Invoice;
        if (isset($this->ItemInstance)) return $this->ItemInstance;
        if (isset($this->Library)) return $this->Library;
        if (isset($this->Linkage)) return $this->Linkage;
        if (isset($this->List)) return $this->List;
        if (isset($this->Location)) return $this->Location;
        if (isset($this->Measure)) return $this->Measure;
        if (isset($this->MeasureReport)) return $this->MeasureReport;
        if (isset($this->Media)) return $this->Media;
        if (isset($this->Medication)) return $this->Medication;
        if (isset($this->MedicationAdministration)) return $this->MedicationAdministration;
        if (isset($this->MedicationDispense)) return $this->MedicationDispense;
        if (isset($this->MedicationRequest)) return $this->MedicationRequest;
        if (isset($this->MedicationStatement)) return $this->MedicationStatement;
        if (isset($this->MedicinalProduct)) return $this->MedicinalProduct;
        if (isset($this->MedicinalProductAuthorization)) return $this->MedicinalProductAuthorization;
        if (isset($this->MedicinalProductClinicals)) return $this->MedicinalProductClinicals;
        if (isset($this->MedicinalProductDeviceSpec)) return $this->MedicinalProductDeviceSpec;
        if (isset($this->MedicinalProductIngredient)) return $this->MedicinalProductIngredient;
        if (isset($this->MedicinalProductPackaged)) return $this->MedicinalProductPackaged;
        if (isset($this->MedicinalProductPharmaceutical)) return $this->MedicinalProductPharmaceutical;
        if (isset($this->MessageDefinition)) return $this->MessageDefinition;
        if (isset($this->MessageHeader)) return $this->MessageHeader;
        if (isset($this->NamingSystem)) return $this->NamingSystem;
        if (isset($this->NutritionOrder)) return $this->NutritionOrder;
        if (isset($this->Observation)) return $this->Observation;
        if (isset($this->ObservationDefinition)) return $this->ObservationDefinition;
        if (isset($this->OccupationalData)) return $this->OccupationalData;
        if (isset($this->OperationDefinition)) return $this->OperationDefinition;
        if (isset($this->OperationOutcome)) return $this->OperationOutcome;
        if (isset($this->Organization)) return $this->Organization;
        if (isset($this->OrganizationRole)) return $this->OrganizationRole;
        if (isset($this->Patient)) return $this->Patient;
        if (isset($this->PaymentNotice)) return $this->PaymentNotice;
        if (isset($this->PaymentReconciliation)) return $this->PaymentReconciliation;
        if (isset($this->Person)) return $this->Person;
        if (isset($this->PlanDefinition)) return $this->PlanDefinition;
        if (isset($this->Practitioner)) return $this->Practitioner;
        if (isset($this->PractitionerRole)) return $this->PractitionerRole;
        if (isset($this->Procedure)) return $this->Procedure;
        if (isset($this->ProcessRequest)) return $this->ProcessRequest;
        if (isset($this->ProcessResponse)) return $this->ProcessResponse;
        if (isset($this->ProductPlan)) return $this->ProductPlan;
        if (isset($this->Provenance)) return $this->Provenance;
        if (isset($this->Questionnaire)) return $this->Questionnaire;
        if (isset($this->QuestionnaireResponse)) return $this->QuestionnaireResponse;
        if (isset($this->RelatedPerson)) return $this->RelatedPerson;
        if (isset($this->RequestGroup)) return $this->RequestGroup;
        if (isset($this->ResearchStudy)) return $this->ResearchStudy;
        if (isset($this->ResearchSubject)) return $this->ResearchSubject;
        if (isset($this->RiskAssessment)) return $this->RiskAssessment;
        if (isset($this->Schedule)) return $this->Schedule;
        if (isset($this->SearchParameter)) return $this->SearchParameter;
        if (isset($this->Sequence)) return $this->Sequence;
        if (isset($this->ServiceDefinition)) return $this->ServiceDefinition;
        if (isset($this->ServiceRequest)) return $this->ServiceRequest;
        if (isset($this->Slot)) return $this->Slot;
        if (isset($this->Specimen)) return $this->Specimen;
        if (isset($this->SpecimenDefinition)) return $this->SpecimenDefinition;
        if (isset($this->StructureDefinition)) return $this->StructureDefinition;
        if (isset($this->StructureMap)) return $this->StructureMap;
        if (isset($this->Subscription)) return $this->Subscription;
        if (isset($this->Substance)) return $this->Substance;
        if (isset($this->SubstancePolymer)) return $this->SubstancePolymer;
        if (isset($this->SubstanceReferenceInformation)) return $this->SubstanceReferenceInformation;
        if (isset($this->SubstanceSpecification)) return $this->SubstanceSpecification;
        if (isset($this->SupplyDelivery)) return $this->SupplyDelivery;
        if (isset($this->SupplyRequest)) return $this->SupplyRequest;
        if (isset($this->Task)) return $this->Task;
        if (isset($this->TerminologyCapabilities)) return $this->TerminologyCapabilities;
        if (isset($this->TestReport)) return $this->TestReport;
        if (isset($this->TestScript)) return $this->TestScript;
        if (isset($this->UserSession)) return $this->UserSession;
        if (isset($this->ValueSet)) return $this->ValueSet;
        if (isset($this->VerificationResult)) return $this->VerificationResult;
        if (isset($this->VisionPrescription)) return $this->VisionPrescription;
        if (isset($this->Parameters)) return $this->Parameters;
        return null;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ResourceContainer xmlns="http://hl7.org/fhir"></ResourceContainer>');
        if (isset($this->Account)) $this->Account->xmlSerialize(true, $sxe->addChild('Account'));
        else if (isset($this->ActivityDefinition)) $this->ActivityDefinition->xmlSerialize(true, $sxe->addChild('ActivityDefinition'));
        else if (isset($this->AdverseEvent)) $this->AdverseEvent->xmlSerialize(true, $sxe->addChild('AdverseEvent'));
        else if (isset($this->AllergyIntolerance)) $this->AllergyIntolerance->xmlSerialize(true, $sxe->addChild('AllergyIntolerance'));
        else if (isset($this->Appointment)) $this->Appointment->xmlSerialize(true, $sxe->addChild('Appointment'));
        else if (isset($this->AppointmentResponse)) $this->AppointmentResponse->xmlSerialize(true, $sxe->addChild('AppointmentResponse'));
        else if (isset($this->AuditEvent)) $this->AuditEvent->xmlSerialize(true, $sxe->addChild('AuditEvent'));
        else if (isset($this->Basic)) $this->Basic->xmlSerialize(true, $sxe->addChild('Basic'));
        else if (isset($this->Binary)) $this->Binary->xmlSerialize(true, $sxe->addChild('Binary'));
        else if (isset($this->BiologicallyDerivedProduct)) $this->BiologicallyDerivedProduct->xmlSerialize(true, $sxe->addChild('BiologicallyDerivedProduct'));
        else if (isset($this->BodyStructure)) $this->BodyStructure->xmlSerialize(true, $sxe->addChild('BodyStructure'));
        else if (isset($this->Bundle)) $this->Bundle->xmlSerialize(true, $sxe->addChild('Bundle'));
        else if (isset($this->CapabilityStatement)) $this->CapabilityStatement->xmlSerialize(true, $sxe->addChild('CapabilityStatement'));
        else if (isset($this->CarePlan)) $this->CarePlan->xmlSerialize(true, $sxe->addChild('CarePlan'));
        else if (isset($this->CareTeam)) $this->CareTeam->xmlSerialize(true, $sxe->addChild('CareTeam'));
        else if (isset($this->ChargeItem)) $this->ChargeItem->xmlSerialize(true, $sxe->addChild('ChargeItem'));
        else if (isset($this->Claim)) $this->Claim->xmlSerialize(true, $sxe->addChild('Claim'));
        else if (isset($this->ClaimResponse)) $this->ClaimResponse->xmlSerialize(true, $sxe->addChild('ClaimResponse'));
        else if (isset($this->ClinicalImpression)) $this->ClinicalImpression->xmlSerialize(true, $sxe->addChild('ClinicalImpression'));
        else if (isset($this->CodeSystem)) $this->CodeSystem->xmlSerialize(true, $sxe->addChild('CodeSystem'));
        else if (isset($this->Communication)) $this->Communication->xmlSerialize(true, $sxe->addChild('Communication'));
        else if (isset($this->CommunicationRequest)) $this->CommunicationRequest->xmlSerialize(true, $sxe->addChild('CommunicationRequest'));
        else if (isset($this->CompartmentDefinition)) $this->CompartmentDefinition->xmlSerialize(true, $sxe->addChild('CompartmentDefinition'));
        else if (isset($this->Composition)) $this->Composition->xmlSerialize(true, $sxe->addChild('Composition'));
        else if (isset($this->ConceptMap)) $this->ConceptMap->xmlSerialize(true, $sxe->addChild('ConceptMap'));
        else if (isset($this->Condition)) $this->Condition->xmlSerialize(true, $sxe->addChild('Condition'));
        else if (isset($this->Consent)) $this->Consent->xmlSerialize(true, $sxe->addChild('Consent'));
        else if (isset($this->Contract)) $this->Contract->xmlSerialize(true, $sxe->addChild('Contract'));
        else if (isset($this->Coverage)) $this->Coverage->xmlSerialize(true, $sxe->addChild('Coverage'));
        else if (isset($this->DetectedIssue)) $this->DetectedIssue->xmlSerialize(true, $sxe->addChild('DetectedIssue'));
        else if (isset($this->Device)) $this->Device->xmlSerialize(true, $sxe->addChild('Device'));
        else if (isset($this->DeviceComponent)) $this->DeviceComponent->xmlSerialize(true, $sxe->addChild('DeviceComponent'));
        else if (isset($this->DeviceMetric)) $this->DeviceMetric->xmlSerialize(true, $sxe->addChild('DeviceMetric'));
        else if (isset($this->DeviceRequest)) $this->DeviceRequest->xmlSerialize(true, $sxe->addChild('DeviceRequest'));
        else if (isset($this->DeviceUseStatement)) $this->DeviceUseStatement->xmlSerialize(true, $sxe->addChild('DeviceUseStatement'));
        else if (isset($this->DiagnosticReport)) $this->DiagnosticReport->xmlSerialize(true, $sxe->addChild('DiagnosticReport'));
        else if (isset($this->DocumentManifest)) $this->DocumentManifest->xmlSerialize(true, $sxe->addChild('DocumentManifest'));
        else if (isset($this->DocumentReference)) $this->DocumentReference->xmlSerialize(true, $sxe->addChild('DocumentReference'));
        else if (isset($this->EligibilityRequest)) $this->EligibilityRequest->xmlSerialize(true, $sxe->addChild('EligibilityRequest'));
        else if (isset($this->EligibilityResponse)) $this->EligibilityResponse->xmlSerialize(true, $sxe->addChild('EligibilityResponse'));
        else if (isset($this->Encounter)) $this->Encounter->xmlSerialize(true, $sxe->addChild('Encounter'));
        else if (isset($this->Endpoint)) $this->Endpoint->xmlSerialize(true, $sxe->addChild('Endpoint'));
        else if (isset($this->EnrollmentRequest)) $this->EnrollmentRequest->xmlSerialize(true, $sxe->addChild('EnrollmentRequest'));
        else if (isset($this->EnrollmentResponse)) $this->EnrollmentResponse->xmlSerialize(true, $sxe->addChild('EnrollmentResponse'));
        else if (isset($this->EntryDefinition)) $this->EntryDefinition->xmlSerialize(true, $sxe->addChild('EntryDefinition'));
        else if (isset($this->EpisodeOfCare)) $this->EpisodeOfCare->xmlSerialize(true, $sxe->addChild('EpisodeOfCare'));
        else if (isset($this->EventDefinition)) $this->EventDefinition->xmlSerialize(true, $sxe->addChild('EventDefinition'));
        else if (isset($this->ExampleScenario)) $this->ExampleScenario->xmlSerialize(true, $sxe->addChild('ExampleScenario'));
        else if (isset($this->ExpansionProfile)) $this->ExpansionProfile->xmlSerialize(true, $sxe->addChild('ExpansionProfile'));
        else if (isset($this->ExplanationOfBenefit)) $this->ExplanationOfBenefit->xmlSerialize(true, $sxe->addChild('ExplanationOfBenefit'));
        else if (isset($this->FamilyMemberHistory)) $this->FamilyMemberHistory->xmlSerialize(true, $sxe->addChild('FamilyMemberHistory'));
        else if (isset($this->Flag)) $this->Flag->xmlSerialize(true, $sxe->addChild('Flag'));
        else if (isset($this->Goal)) $this->Goal->xmlSerialize(true, $sxe->addChild('Goal'));
        else if (isset($this->GraphDefinition)) $this->GraphDefinition->xmlSerialize(true, $sxe->addChild('GraphDefinition'));
        else if (isset($this->Group)) $this->Group->xmlSerialize(true, $sxe->addChild('Group'));
        else if (isset($this->GuidanceResponse)) $this->GuidanceResponse->xmlSerialize(true, $sxe->addChild('GuidanceResponse'));
        else if (isset($this->HealthcareService)) $this->HealthcareService->xmlSerialize(true, $sxe->addChild('HealthcareService'));
        else if (isset($this->ImagingStudy)) $this->ImagingStudy->xmlSerialize(true, $sxe->addChild('ImagingStudy'));
        else if (isset($this->Immunization)) $this->Immunization->xmlSerialize(true, $sxe->addChild('Immunization'));
        else if (isset($this->ImmunizationEvaluation)) $this->ImmunizationEvaluation->xmlSerialize(true, $sxe->addChild('ImmunizationEvaluation'));
        else if (isset($this->ImmunizationRecommendation)) $this->ImmunizationRecommendation->xmlSerialize(true, $sxe->addChild('ImmunizationRecommendation'));
        else if (isset($this->ImplementationGuide)) $this->ImplementationGuide->xmlSerialize(true, $sxe->addChild('ImplementationGuide'));
        else if (isset($this->ImplementationGuideInput)) $this->ImplementationGuideInput->xmlSerialize(true, $sxe->addChild('ImplementationGuideInput'));
        else if (isset($this->ImplementationGuideOutput)) $this->ImplementationGuideOutput->xmlSerialize(true, $sxe->addChild('ImplementationGuideOutput'));
        else if (isset($this->Invoice)) $this->Invoice->xmlSerialize(true, $sxe->addChild('Invoice'));
        else if (isset($this->ItemInstance)) $this->ItemInstance->xmlSerialize(true, $sxe->addChild('ItemInstance'));
        else if (isset($this->Library)) $this->Library->xmlSerialize(true, $sxe->addChild('Library'));
        else if (isset($this->Linkage)) $this->Linkage->xmlSerialize(true, $sxe->addChild('Linkage'));
        else if (isset($this->List)) $this->List->xmlSerialize(true, $sxe->addChild('List'));
        else if (isset($this->Location)) $this->Location->xmlSerialize(true, $sxe->addChild('Location'));
        else if (isset($this->Measure)) $this->Measure->xmlSerialize(true, $sxe->addChild('Measure'));
        else if (isset($this->MeasureReport)) $this->MeasureReport->xmlSerialize(true, $sxe->addChild('MeasureReport'));
        else if (isset($this->Media)) $this->Media->xmlSerialize(true, $sxe->addChild('Media'));
        else if (isset($this->Medication)) $this->Medication->xmlSerialize(true, $sxe->addChild('Medication'));
        else if (isset($this->MedicationAdministration)) $this->MedicationAdministration->xmlSerialize(true, $sxe->addChild('MedicationAdministration'));
        else if (isset($this->MedicationDispense)) $this->MedicationDispense->xmlSerialize(true, $sxe->addChild('MedicationDispense'));
        else if (isset($this->MedicationRequest)) $this->MedicationRequest->xmlSerialize(true, $sxe->addChild('MedicationRequest'));
        else if (isset($this->MedicationStatement)) $this->MedicationStatement->xmlSerialize(true, $sxe->addChild('MedicationStatement'));
        else if (isset($this->MedicinalProduct)) $this->MedicinalProduct->xmlSerialize(true, $sxe->addChild('MedicinalProduct'));
        else if (isset($this->MedicinalProductAuthorization)) $this->MedicinalProductAuthorization->xmlSerialize(true, $sxe->addChild('MedicinalProductAuthorization'));
        else if (isset($this->MedicinalProductClinicals)) $this->MedicinalProductClinicals->xmlSerialize(true, $sxe->addChild('MedicinalProductClinicals'));
        else if (isset($this->MedicinalProductDeviceSpec)) $this->MedicinalProductDeviceSpec->xmlSerialize(true, $sxe->addChild('MedicinalProductDeviceSpec'));
        else if (isset($this->MedicinalProductIngredient)) $this->MedicinalProductIngredient->xmlSerialize(true, $sxe->addChild('MedicinalProductIngredient'));
        else if (isset($this->MedicinalProductPackaged)) $this->MedicinalProductPackaged->xmlSerialize(true, $sxe->addChild('MedicinalProductPackaged'));
        else if (isset($this->MedicinalProductPharmaceutical)) $this->MedicinalProductPharmaceutical->xmlSerialize(true, $sxe->addChild('MedicinalProductPharmaceutical'));
        else if (isset($this->MessageDefinition)) $this->MessageDefinition->xmlSerialize(true, $sxe->addChild('MessageDefinition'));
        else if (isset($this->MessageHeader)) $this->MessageHeader->xmlSerialize(true, $sxe->addChild('MessageHeader'));
        else if (isset($this->NamingSystem)) $this->NamingSystem->xmlSerialize(true, $sxe->addChild('NamingSystem'));
        else if (isset($this->NutritionOrder)) $this->NutritionOrder->xmlSerialize(true, $sxe->addChild('NutritionOrder'));
        else if (isset($this->Observation)) $this->Observation->xmlSerialize(true, $sxe->addChild('Observation'));
        else if (isset($this->ObservationDefinition)) $this->ObservationDefinition->xmlSerialize(true, $sxe->addChild('ObservationDefinition'));
        else if (isset($this->OccupationalData)) $this->OccupationalData->xmlSerialize(true, $sxe->addChild('OccupationalData'));
        else if (isset($this->OperationDefinition)) $this->OperationDefinition->xmlSerialize(true, $sxe->addChild('OperationDefinition'));
        else if (isset($this->OperationOutcome)) $this->OperationOutcome->xmlSerialize(true, $sxe->addChild('OperationOutcome'));
        else if (isset($this->Organization)) $this->Organization->xmlSerialize(true, $sxe->addChild('Organization'));
        else if (isset($this->OrganizationRole)) $this->OrganizationRole->xmlSerialize(true, $sxe->addChild('OrganizationRole'));
        else if (isset($this->Patient)) $this->Patient->xmlSerialize(true, $sxe->addChild('Patient'));
        else if (isset($this->PaymentNotice)) $this->PaymentNotice->xmlSerialize(true, $sxe->addChild('PaymentNotice'));
        else if (isset($this->PaymentReconciliation)) $this->PaymentReconciliation->xmlSerialize(true, $sxe->addChild('PaymentReconciliation'));
        else if (isset($this->Person)) $this->Person->xmlSerialize(true, $sxe->addChild('Person'));
        else if (isset($this->PlanDefinition)) $this->PlanDefinition->xmlSerialize(true, $sxe->addChild('PlanDefinition'));
        else if (isset($this->Practitioner)) $this->Practitioner->xmlSerialize(true, $sxe->addChild('Practitioner'));
        else if (isset($this->PractitionerRole)) $this->PractitionerRole->xmlSerialize(true, $sxe->addChild('PractitionerRole'));
        else if (isset($this->Procedure)) $this->Procedure->xmlSerialize(true, $sxe->addChild('Procedure'));
        else if (isset($this->ProcessRequest)) $this->ProcessRequest->xmlSerialize(true, $sxe->addChild('ProcessRequest'));
        else if (isset($this->ProcessResponse)) $this->ProcessResponse->xmlSerialize(true, $sxe->addChild('ProcessResponse'));
        else if (isset($this->ProductPlan)) $this->ProductPlan->xmlSerialize(true, $sxe->addChild('ProductPlan'));
        else if (isset($this->Provenance)) $this->Provenance->xmlSerialize(true, $sxe->addChild('Provenance'));
        else if (isset($this->Questionnaire)) $this->Questionnaire->xmlSerialize(true, $sxe->addChild('Questionnaire'));
        else if (isset($this->QuestionnaireResponse)) $this->QuestionnaireResponse->xmlSerialize(true, $sxe->addChild('QuestionnaireResponse'));
        else if (isset($this->RelatedPerson)) $this->RelatedPerson->xmlSerialize(true, $sxe->addChild('RelatedPerson'));
        else if (isset($this->RequestGroup)) $this->RequestGroup->xmlSerialize(true, $sxe->addChild('RequestGroup'));
        else if (isset($this->ResearchStudy)) $this->ResearchStudy->xmlSerialize(true, $sxe->addChild('ResearchStudy'));
        else if (isset($this->ResearchSubject)) $this->ResearchSubject->xmlSerialize(true, $sxe->addChild('ResearchSubject'));
        else if (isset($this->RiskAssessment)) $this->RiskAssessment->xmlSerialize(true, $sxe->addChild('RiskAssessment'));
        else if (isset($this->Schedule)) $this->Schedule->xmlSerialize(true, $sxe->addChild('Schedule'));
        else if (isset($this->SearchParameter)) $this->SearchParameter->xmlSerialize(true, $sxe->addChild('SearchParameter'));
        else if (isset($this->Sequence)) $this->Sequence->xmlSerialize(true, $sxe->addChild('Sequence'));
        else if (isset($this->ServiceDefinition)) $this->ServiceDefinition->xmlSerialize(true, $sxe->addChild('ServiceDefinition'));
        else if (isset($this->ServiceRequest)) $this->ServiceRequest->xmlSerialize(true, $sxe->addChild('ServiceRequest'));
        else if (isset($this->Slot)) $this->Slot->xmlSerialize(true, $sxe->addChild('Slot'));
        else if (isset($this->Specimen)) $this->Specimen->xmlSerialize(true, $sxe->addChild('Specimen'));
        else if (isset($this->SpecimenDefinition)) $this->SpecimenDefinition->xmlSerialize(true, $sxe->addChild('SpecimenDefinition'));
        else if (isset($this->StructureDefinition)) $this->StructureDefinition->xmlSerialize(true, $sxe->addChild('StructureDefinition'));
        else if (isset($this->StructureMap)) $this->StructureMap->xmlSerialize(true, $sxe->addChild('StructureMap'));
        else if (isset($this->Subscription)) $this->Subscription->xmlSerialize(true, $sxe->addChild('Subscription'));
        else if (isset($this->Substance)) $this->Substance->xmlSerialize(true, $sxe->addChild('Substance'));
        else if (isset($this->SubstancePolymer)) $this->SubstancePolymer->xmlSerialize(true, $sxe->addChild('SubstancePolymer'));
        else if (isset($this->SubstanceReferenceInformation)) $this->SubstanceReferenceInformation->xmlSerialize(true, $sxe->addChild('SubstanceReferenceInformation'));
        else if (isset($this->SubstanceSpecification)) $this->SubstanceSpecification->xmlSerialize(true, $sxe->addChild('SubstanceSpecification'));
        else if (isset($this->SupplyDelivery)) $this->SupplyDelivery->xmlSerialize(true, $sxe->addChild('SupplyDelivery'));
        else if (isset($this->SupplyRequest)) $this->SupplyRequest->xmlSerialize(true, $sxe->addChild('SupplyRequest'));
        else if (isset($this->Task)) $this->Task->xmlSerialize(true, $sxe->addChild('Task'));
        else if (isset($this->TerminologyCapabilities)) $this->TerminologyCapabilities->xmlSerialize(true, $sxe->addChild('TerminologyCapabilities'));
        else if (isset($this->TestReport)) $this->TestReport->xmlSerialize(true, $sxe->addChild('TestReport'));
        else if (isset($this->TestScript)) $this->TestScript->xmlSerialize(true, $sxe->addChild('TestScript'));
        else if (isset($this->UserSession)) $this->UserSession->xmlSerialize(true, $sxe->addChild('UserSession'));
        else if (isset($this->ValueSet)) $this->ValueSet->xmlSerialize(true, $sxe->addChild('ValueSet'));
        else if (isset($this->VerificationResult)) $this->VerificationResult->xmlSerialize(true, $sxe->addChild('VerificationResult'));
        else if (isset($this->VisionPrescription)) $this->VisionPrescription->xmlSerialize(true, $sxe->addChild('VisionPrescription'));
        else if (isset($this->Parameters)) $this->Parameters->xmlSerialize(true, $sxe->addChild('Parameters'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }

    /**
     * @return mixed
     */
    public function getResource() {
        return $this->jsonSerialize();
    }


}