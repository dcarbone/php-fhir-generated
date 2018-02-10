<?php namespace PHPFHIRGenerated\FHIRResource\FHIRResource;

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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

class FHIRResourceInline implements \JsonSerializable
{
    /**
     * @var \PHPFHIRGenerated\FHIRBinary
     */
    public $Binary = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProvenance
     */
    public $Provenance = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRCondition
     */
    public $Condition = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRCarePlan
     */
    public $CarePlan = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRSupply
     */
    public $Supply = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDevice
     */
    public $Device = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRQuery
     */
    public $Query = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIROrder
     */
    public $Order = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIROrganization
     */
    public $Organization = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProcedure
     */
    public $Procedure = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRSubstance
     */
    public $Substance = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDiagnosticReport
     */
    public $DiagnosticReport = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRGroup
     */
    public $Group = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRValueSet
     */
    public $ValueSet = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedication
     */
    public $Medication = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMessageHeader
     */
    public $MessageHeader = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRImmunizationRecommendation
     */
    public $ImmunizationRecommendation = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDocumentManifest
     */
    public $DocumentManifest = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicationDispense
     */
    public $MedicationDispense = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicationPrescription
     */
    public $MedicationPrescription = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicationAdministration
     */
    public $MedicationAdministration = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIREncounter
     */
    public $Encounter = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRSecurityEvent
     */
    public $SecurityEvent = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicationStatement
     */
    public $MedicationStatement = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRList
     */
    public $List = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaire
     */
    public $Questionnaire = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRComposition
     */
    public $Composition = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDeviceObservationReport
     */
    public $DeviceObservationReport = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIROperationOutcome
     */
    public $OperationOutcome = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConformance
     */
    public $Conformance = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedia
     */
    public $Media = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRFamilyHistory
     */
    public $FamilyHistory = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIROther
     */
    public $Other = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProfile
     */
    public $Profile = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRLocation
     */
    public $Location = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRObservation
     */
    public $Observation = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRAllergyIntolerance
     */
    public $AllergyIntolerance = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference
     */
    public $DocumentReference = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRImmunization
     */
    public $Immunization = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRRelatedPerson
     */
    public $RelatedPerson = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRSpecimen
     */
    public $Specimen = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIROrderResponse
     */
    public $OrderResponse = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRAlert
     */
    public $Alert = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConceptMap
     */
    public $ConceptMap = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRPatient
     */
    public $Patient = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRPractitioner
     */
    public $Practitioner = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRAdverseReaction
     */
    public $AdverseReaction = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRImagingStudy
     */
    public $ImagingStudy = null;

    /**
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDiagnosticOrder
     */
    public $DiagnosticOrder = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Resource.Inline';

    /**
     * @return \PHPFHIRGenerated\FHIRBinary
     */
    public function getBinary()
    {
        return $this->Binary;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRBinary $Binary
     * @return $this
     */
    public function setBinary($Binary)
    {
        $this->Binary = $Binary;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProvenance
     */
    public function getProvenance()
    {
        return $this->Provenance;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProvenance $Provenance
     * @return $this
     */
    public function setProvenance($Provenance)
    {
        $this->Provenance = $Provenance;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRCondition
     */
    public function getCondition()
    {
        return $this->Condition;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRCondition $Condition
     * @return $this
     */
    public function setCondition($Condition)
    {
        $this->Condition = $Condition;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRCarePlan
     */
    public function getCarePlan()
    {
        return $this->CarePlan;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRCarePlan $CarePlan
     * @return $this
     */
    public function setCarePlan($CarePlan)
    {
        $this->CarePlan = $CarePlan;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRSupply
     */
    public function getSupply()
    {
        return $this->Supply;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRSupply $Supply
     * @return $this
     */
    public function setSupply($Supply)
    {
        $this->Supply = $Supply;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRDevice
     */
    public function getDevice()
    {
        return $this->Device;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRDevice $Device
     * @return $this
     */
    public function setDevice($Device)
    {
        $this->Device = $Device;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRQuery
     */
    public function getQuery()
    {
        return $this->Query;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRQuery $Query
     * @return $this
     */
    public function setQuery($Query)
    {
        $this->Query = $Query;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIROrder
     */
    public function getOrder()
    {
        return $this->Order;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIROrder $Order
     * @return $this
     */
    public function setOrder($Order)
    {
        $this->Order = $Order;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIROrganization
     */
    public function getOrganization()
    {
        return $this->Organization;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIROrganization $Organization
     * @return $this
     */
    public function setOrganization($Organization)
    {
        $this->Organization = $Organization;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProcedure
     */
    public function getProcedure()
    {
        return $this->Procedure;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProcedure $Procedure
     * @return $this
     */
    public function setProcedure($Procedure)
    {
        $this->Procedure = $Procedure;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRSubstance
     */
    public function getSubstance()
    {
        return $this->Substance;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRSubstance $Substance
     * @return $this
     */
    public function setSubstance($Substance)
    {
        $this->Substance = $Substance;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRDiagnosticReport
     */
    public function getDiagnosticReport()
    {
        return $this->DiagnosticReport;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRDiagnosticReport $DiagnosticReport
     * @return $this
     */
    public function setDiagnosticReport($DiagnosticReport)
    {
        $this->DiagnosticReport = $DiagnosticReport;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRGroup
     */
    public function getGroup()
    {
        return $this->Group;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRGroup $Group
     * @return $this
     */
    public function setGroup($Group)
    {
        $this->Group = $Group;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRValueSet
     */
    public function getValueSet()
    {
        return $this->ValueSet;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRValueSet $ValueSet
     * @return $this
     */
    public function setValueSet($ValueSet)
    {
        $this->ValueSet = $ValueSet;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedication
     */
    public function getMedication()
    {
        return $this->Medication;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedication $Medication
     * @return $this
     */
    public function setMedication($Medication)
    {
        $this->Medication = $Medication;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMessageHeader
     */
    public function getMessageHeader()
    {
        return $this->MessageHeader;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMessageHeader $MessageHeader
     * @return $this
     */
    public function setMessageHeader($MessageHeader)
    {
        $this->MessageHeader = $MessageHeader;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRImmunizationRecommendation
     */
    public function getImmunizationRecommendation()
    {
        return $this->ImmunizationRecommendation;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRImmunizationRecommendation $ImmunizationRecommendation
     * @return $this
     */
    public function setImmunizationRecommendation($ImmunizationRecommendation)
    {
        $this->ImmunizationRecommendation = $ImmunizationRecommendation;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRDocumentManifest
     */
    public function getDocumentManifest()
    {
        return $this->DocumentManifest;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRDocumentManifest $DocumentManifest
     * @return $this
     */
    public function setDocumentManifest($DocumentManifest)
    {
        $this->DocumentManifest = $DocumentManifest;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicationDispense
     */
    public function getMedicationDispense()
    {
        return $this->MedicationDispense;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicationDispense $MedicationDispense
     * @return $this
     */
    public function setMedicationDispense($MedicationDispense)
    {
        $this->MedicationDispense = $MedicationDispense;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicationPrescription
     */
    public function getMedicationPrescription()
    {
        return $this->MedicationPrescription;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicationPrescription $MedicationPrescription
     * @return $this
     */
    public function setMedicationPrescription($MedicationPrescription)
    {
        $this->MedicationPrescription = $MedicationPrescription;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicationAdministration
     */
    public function getMedicationAdministration()
    {
        return $this->MedicationAdministration;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicationAdministration $MedicationAdministration
     * @return $this
     */
    public function setMedicationAdministration($MedicationAdministration)
    {
        $this->MedicationAdministration = $MedicationAdministration;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIREncounter
     */
    public function getEncounter()
    {
        return $this->Encounter;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIREncounter $Encounter
     * @return $this
     */
    public function setEncounter($Encounter)
    {
        $this->Encounter = $Encounter;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRSecurityEvent
     */
    public function getSecurityEvent()
    {
        return $this->SecurityEvent;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRSecurityEvent $SecurityEvent
     * @return $this
     */
    public function setSecurityEvent($SecurityEvent)
    {
        $this->SecurityEvent = $SecurityEvent;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicationStatement
     */
    public function getMedicationStatement()
    {
        return $this->MedicationStatement;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicationStatement $MedicationStatement
     * @return $this
     */
    public function setMedicationStatement($MedicationStatement)
    {
        $this->MedicationStatement = $MedicationStatement;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRList
     */
    public function getList()
    {
        return $this->List;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRList $List
     * @return $this
     */
    public function setList($List)
    {
        $this->List = $List;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaire
     */
    public function getQuestionnaire()
    {
        return $this->Questionnaire;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaire $Questionnaire
     * @return $this
     */
    public function setQuestionnaire($Questionnaire)
    {
        $this->Questionnaire = $Questionnaire;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRComposition
     */
    public function getComposition()
    {
        return $this->Composition;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRComposition $Composition
     * @return $this
     */
    public function setComposition($Composition)
    {
        $this->Composition = $Composition;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRDeviceObservationReport
     */
    public function getDeviceObservationReport()
    {
        return $this->DeviceObservationReport;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRDeviceObservationReport $DeviceObservationReport
     * @return $this
     */
    public function setDeviceObservationReport($DeviceObservationReport)
    {
        $this->DeviceObservationReport = $DeviceObservationReport;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIROperationOutcome
     */
    public function getOperationOutcome()
    {
        return $this->OperationOutcome;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIROperationOutcome $OperationOutcome
     * @return $this
     */
    public function setOperationOutcome($OperationOutcome)
    {
        $this->OperationOutcome = $OperationOutcome;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConformance
     */
    public function getConformance()
    {
        return $this->Conformance;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConformance $Conformance
     * @return $this
     */
    public function setConformance($Conformance)
    {
        $this->Conformance = $Conformance;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedia
     */
    public function getMedia()
    {
        return $this->Media;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedia $Media
     * @return $this
     */
    public function setMedia($Media)
    {
        $this->Media = $Media;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRFamilyHistory
     */
    public function getFamilyHistory()
    {
        return $this->FamilyHistory;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRFamilyHistory $FamilyHistory
     * @return $this
     */
    public function setFamilyHistory($FamilyHistory)
    {
        $this->FamilyHistory = $FamilyHistory;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIROther
     */
    public function getOther()
    {
        return $this->Other;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIROther $Other
     * @return $this
     */
    public function setOther($Other)
    {
        $this->Other = $Other;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProfile
     */
    public function getProfile()
    {
        return $this->Profile;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProfile $Profile
     * @return $this
     */
    public function setProfile($Profile)
    {
        $this->Profile = $Profile;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRLocation
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRLocation $Location
     * @return $this
     */
    public function setLocation($Location)
    {
        $this->Location = $Location;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRObservation
     */
    public function getObservation()
    {
        return $this->Observation;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRObservation $Observation
     * @return $this
     */
    public function setObservation($Observation)
    {
        $this->Observation = $Observation;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRAllergyIntolerance
     */
    public function getAllergyIntolerance()
    {
        return $this->AllergyIntolerance;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRAllergyIntolerance $AllergyIntolerance
     * @return $this
     */
    public function setAllergyIntolerance($AllergyIntolerance)
    {
        $this->AllergyIntolerance = $AllergyIntolerance;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference
     */
    public function getDocumentReference()
    {
        return $this->DocumentReference;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference $DocumentReference
     * @return $this
     */
    public function setDocumentReference($DocumentReference)
    {
        $this->DocumentReference = $DocumentReference;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRImmunization
     */
    public function getImmunization()
    {
        return $this->Immunization;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRImmunization $Immunization
     * @return $this
     */
    public function setImmunization($Immunization)
    {
        $this->Immunization = $Immunization;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRRelatedPerson
     */
    public function getRelatedPerson()
    {
        return $this->RelatedPerson;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRRelatedPerson $RelatedPerson
     * @return $this
     */
    public function setRelatedPerson($RelatedPerson)
    {
        $this->RelatedPerson = $RelatedPerson;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRSpecimen
     */
    public function getSpecimen()
    {
        return $this->Specimen;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRSpecimen $Specimen
     * @return $this
     */
    public function setSpecimen($Specimen)
    {
        $this->Specimen = $Specimen;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIROrderResponse
     */
    public function getOrderResponse()
    {
        return $this->OrderResponse;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIROrderResponse $OrderResponse
     * @return $this
     */
    public function setOrderResponse($OrderResponse)
    {
        $this->OrderResponse = $OrderResponse;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRAlert
     */
    public function getAlert()
    {
        return $this->Alert;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRAlert $Alert
     * @return $this
     */
    public function setAlert($Alert)
    {
        $this->Alert = $Alert;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConceptMap
     */
    public function getConceptMap()
    {
        return $this->ConceptMap;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConceptMap $ConceptMap
     * @return $this
     */
    public function setConceptMap($ConceptMap)
    {
        $this->ConceptMap = $ConceptMap;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRPatient
     */
    public function getPatient()
    {
        return $this->Patient;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRPatient $Patient
     * @return $this
     */
    public function setPatient($Patient)
    {
        $this->Patient = $Patient;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRPractitioner
     */
    public function getPractitioner()
    {
        return $this->Practitioner;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRPractitioner $Practitioner
     * @return $this
     */
    public function setPractitioner($Practitioner)
    {
        $this->Practitioner = $Practitioner;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRAdverseReaction
     */
    public function getAdverseReaction()
    {
        return $this->AdverseReaction;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRAdverseReaction $AdverseReaction
     * @return $this
     */
    public function setAdverseReaction($AdverseReaction)
    {
        $this->AdverseReaction = $AdverseReaction;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRImagingStudy
     */
    public function getImagingStudy()
    {
        return $this->ImagingStudy;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRImagingStudy $ImagingStudy
     * @return $this
     */
    public function setImagingStudy($ImagingStudy)
    {
        $this->ImagingStudy = $ImagingStudy;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRResource\FHIRDiagnosticOrder
     */
    public function getDiagnosticOrder()
    {
        return $this->DiagnosticOrder;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRResource\FHIRDiagnosticOrder $DiagnosticOrder
     * @return $this
     */
    public function setDiagnosticOrder($DiagnosticOrder)
    {
        $this->DiagnosticOrder = $DiagnosticOrder;
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
        if (null !== $this->Binary) return $this->Binary;
        if (null !== $this->Provenance) return $this->Provenance;
        if (null !== $this->Condition) return $this->Condition;
        if (null !== $this->CarePlan) return $this->CarePlan;
        if (null !== $this->Supply) return $this->Supply;
        if (null !== $this->Device) return $this->Device;
        if (null !== $this->Query) return $this->Query;
        if (null !== $this->Order) return $this->Order;
        if (null !== $this->Organization) return $this->Organization;
        if (null !== $this->Procedure) return $this->Procedure;
        if (null !== $this->Substance) return $this->Substance;
        if (null !== $this->DiagnosticReport) return $this->DiagnosticReport;
        if (null !== $this->Group) return $this->Group;
        if (null !== $this->ValueSet) return $this->ValueSet;
        if (null !== $this->Medication) return $this->Medication;
        if (null !== $this->MessageHeader) return $this->MessageHeader;
        if (null !== $this->ImmunizationRecommendation) return $this->ImmunizationRecommendation;
        if (null !== $this->DocumentManifest) return $this->DocumentManifest;
        if (null !== $this->MedicationDispense) return $this->MedicationDispense;
        if (null !== $this->MedicationPrescription) return $this->MedicationPrescription;
        if (null !== $this->MedicationAdministration) return $this->MedicationAdministration;
        if (null !== $this->Encounter) return $this->Encounter;
        if (null !== $this->SecurityEvent) return $this->SecurityEvent;
        if (null !== $this->MedicationStatement) return $this->MedicationStatement;
        if (null !== $this->List) return $this->List;
        if (null !== $this->Questionnaire) return $this->Questionnaire;
        if (null !== $this->Composition) return $this->Composition;
        if (null !== $this->DeviceObservationReport) return $this->DeviceObservationReport;
        if (null !== $this->OperationOutcome) return $this->OperationOutcome;
        if (null !== $this->Conformance) return $this->Conformance;
        if (null !== $this->Media) return $this->Media;
        if (null !== $this->FamilyHistory) return $this->FamilyHistory;
        if (null !== $this->Other) return $this->Other;
        if (null !== $this->Profile) return $this->Profile;
        if (null !== $this->Location) return $this->Location;
        if (null !== $this->Observation) return $this->Observation;
        if (null !== $this->AllergyIntolerance) return $this->AllergyIntolerance;
        if (null !== $this->DocumentReference) return $this->DocumentReference;
        if (null !== $this->Immunization) return $this->Immunization;
        if (null !== $this->RelatedPerson) return $this->RelatedPerson;
        if (null !== $this->Specimen) return $this->Specimen;
        if (null !== $this->OrderResponse) return $this->OrderResponse;
        if (null !== $this->Alert) return $this->Alert;
        if (null !== $this->ConceptMap) return $this->ConceptMap;
        if (null !== $this->Patient) return $this->Patient;
        if (null !== $this->Practitioner) return $this->Practitioner;
        if (null !== $this->AdverseReaction) return $this->AdverseReaction;
        if (null !== $this->ImagingStudy) return $this->ImagingStudy;
        if (null !== $this->DiagnosticOrder) return $this->DiagnosticOrder;
        return [];
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ResourceInline xmlns="http://hl7.org/fhir"></ResourceInline>');
        if (null !== $this->Binary) $this->Binary->xmlSerialize(true, $sxe->addChild('Binary'));
        if (null !== $this->Provenance) $this->Provenance->xmlSerialize(true, $sxe->addChild('Provenance'));
        if (null !== $this->Condition) $this->Condition->xmlSerialize(true, $sxe->addChild('Condition'));
        if (null !== $this->CarePlan) $this->CarePlan->xmlSerialize(true, $sxe->addChild('CarePlan'));
        if (null !== $this->Supply) $this->Supply->xmlSerialize(true, $sxe->addChild('Supply'));
        if (null !== $this->Device) $this->Device->xmlSerialize(true, $sxe->addChild('Device'));
        if (null !== $this->Query) $this->Query->xmlSerialize(true, $sxe->addChild('Query'));
        if (null !== $this->Order) $this->Order->xmlSerialize(true, $sxe->addChild('Order'));
        if (null !== $this->Organization) $this->Organization->xmlSerialize(true, $sxe->addChild('Organization'));
        if (null !== $this->Procedure) $this->Procedure->xmlSerialize(true, $sxe->addChild('Procedure'));
        if (null !== $this->Substance) $this->Substance->xmlSerialize(true, $sxe->addChild('Substance'));
        if (null !== $this->DiagnosticReport) $this->DiagnosticReport->xmlSerialize(true, $sxe->addChild('DiagnosticReport'));
        if (null !== $this->Group) $this->Group->xmlSerialize(true, $sxe->addChild('Group'));
        if (null !== $this->ValueSet) $this->ValueSet->xmlSerialize(true, $sxe->addChild('ValueSet'));
        if (null !== $this->Medication) $this->Medication->xmlSerialize(true, $sxe->addChild('Medication'));
        if (null !== $this->MessageHeader) $this->MessageHeader->xmlSerialize(true, $sxe->addChild('MessageHeader'));
        if (null !== $this->ImmunizationRecommendation) $this->ImmunizationRecommendation->xmlSerialize(true, $sxe->addChild('ImmunizationRecommendation'));
        if (null !== $this->DocumentManifest) $this->DocumentManifest->xmlSerialize(true, $sxe->addChild('DocumentManifest'));
        if (null !== $this->MedicationDispense) $this->MedicationDispense->xmlSerialize(true, $sxe->addChild('MedicationDispense'));
        if (null !== $this->MedicationPrescription) $this->MedicationPrescription->xmlSerialize(true, $sxe->addChild('MedicationPrescription'));
        if (null !== $this->MedicationAdministration) $this->MedicationAdministration->xmlSerialize(true, $sxe->addChild('MedicationAdministration'));
        if (null !== $this->Encounter) $this->Encounter->xmlSerialize(true, $sxe->addChild('Encounter'));
        if (null !== $this->SecurityEvent) $this->SecurityEvent->xmlSerialize(true, $sxe->addChild('SecurityEvent'));
        if (null !== $this->MedicationStatement) $this->MedicationStatement->xmlSerialize(true, $sxe->addChild('MedicationStatement'));
        if (null !== $this->List) $this->List->xmlSerialize(true, $sxe->addChild('List'));
        if (null !== $this->Questionnaire) $this->Questionnaire->xmlSerialize(true, $sxe->addChild('Questionnaire'));
        if (null !== $this->Composition) $this->Composition->xmlSerialize(true, $sxe->addChild('Composition'));
        if (null !== $this->DeviceObservationReport) $this->DeviceObservationReport->xmlSerialize(true, $sxe->addChild('DeviceObservationReport'));
        if (null !== $this->OperationOutcome) $this->OperationOutcome->xmlSerialize(true, $sxe->addChild('OperationOutcome'));
        if (null !== $this->Conformance) $this->Conformance->xmlSerialize(true, $sxe->addChild('Conformance'));
        if (null !== $this->Media) $this->Media->xmlSerialize(true, $sxe->addChild('Media'));
        if (null !== $this->FamilyHistory) $this->FamilyHistory->xmlSerialize(true, $sxe->addChild('FamilyHistory'));
        if (null !== $this->Other) $this->Other->xmlSerialize(true, $sxe->addChild('Other'));
        if (null !== $this->Profile) $this->Profile->xmlSerialize(true, $sxe->addChild('Profile'));
        if (null !== $this->Location) $this->Location->xmlSerialize(true, $sxe->addChild('Location'));
        if (null !== $this->Observation) $this->Observation->xmlSerialize(true, $sxe->addChild('Observation'));
        if (null !== $this->AllergyIntolerance) $this->AllergyIntolerance->xmlSerialize(true, $sxe->addChild('AllergyIntolerance'));
        if (null !== $this->DocumentReference) $this->DocumentReference->xmlSerialize(true, $sxe->addChild('DocumentReference'));
        if (null !== $this->Immunization) $this->Immunization->xmlSerialize(true, $sxe->addChild('Immunization'));
        if (null !== $this->RelatedPerson) $this->RelatedPerson->xmlSerialize(true, $sxe->addChild('RelatedPerson'));
        if (null !== $this->Specimen) $this->Specimen->xmlSerialize(true, $sxe->addChild('Specimen'));
        if (null !== $this->OrderResponse) $this->OrderResponse->xmlSerialize(true, $sxe->addChild('OrderResponse'));
        if (null !== $this->Alert) $this->Alert->xmlSerialize(true, $sxe->addChild('Alert'));
        if (null !== $this->ConceptMap) $this->ConceptMap->xmlSerialize(true, $sxe->addChild('ConceptMap'));
        if (null !== $this->Patient) $this->Patient->xmlSerialize(true, $sxe->addChild('Patient'));
        if (null !== $this->Practitioner) $this->Practitioner->xmlSerialize(true, $sxe->addChild('Practitioner'));
        if (null !== $this->AdverseReaction) $this->AdverseReaction->xmlSerialize(true, $sxe->addChild('AdverseReaction'));
        if (null !== $this->ImagingStudy) $this->ImagingStudy->xmlSerialize(true, $sxe->addChild('ImagingStudy'));
        if (null !== $this->DiagnosticOrder) $this->DiagnosticOrder->xmlSerialize(true, $sxe->addChild('DiagnosticOrder'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}