<?php namespace PHPFHIRGenerated\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * An order or request for both supply of the medication and the instructions for administration of the medication to a patient. The resource is called "MedicationRequest" rather than "MedicationPrescription" or "MedicationOrder" to generalize the use across inpatient and outpatient settings, including care plans, etc., and to harmonize with workflow patterns.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRMedicationRequest extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * This records identifiers associated with this medication request that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. For example a re-imbursement system might issue its own id for each prescription that is created.  This is particularly important where FHIR only provides part of an entire workflow process where records must be tracked through an entire system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * A code specifying the current state of the order.  Generally this will be active or completed state.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMedicationRequestStatus
     */
    public $status = null;

    /**
     * Whether the request is a proposal, plan, or an original order.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMedicationRequestIntent
     */
    public $intent = null;

    /**
     * Indicates the type of medication request (for example, where the medication is expected to be consumed or administered (i.e. inpatient or outpatient) or the type of treatment (i.e. chemotherapy or endocrine).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $category = [];

    /**
     * Indicates how quickly the Medication Request should be addressed with respect to other requests.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRequestPriority
     */
    public $priority = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $medicationCodeableConcept = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $medicationReference = null;

    /**
     * A link to a resource representing the person or set of individuals to whom the medication will be given.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * A link to an encounter, or episode of care, that identifies the particular occurrence or set occurrences of contact between patient and health care provider.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * Include additional information (for example, patient height and weight) that supports the ordering of the medication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $supportingInformation = [];

    /**
     * The date (and perhaps time) when the prescription was initially written or authored on.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $authoredOn = null;

    /**
     * The individual, organization or device that initiated the request and has responsibility for its activation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $requester = null;

    /**
     * The specified desired performer of the medication treatment (e.g. the performer of the medication administration).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $performer = null;

    /**
     * Indicates the type of performer of the administration of the medication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $performerType = null;

    /**
     * The person who entered the order on behalf of another individual for example in the case of a verbal or a telephone order.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $recorder = null;

    /**
     * The reason or the indication for ordering the medication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $reasonCode = [];

    /**
     * Condition or observation that supports why the medication was ordered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $reasonReference = [];

    /**
     * The URL pointing to a protocol, guideline, orderset or other definition that is adhered to in whole or in part by this MedicationRequest.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public $instantiates = [];

    /**
     * A plan or request that is fulfilled in whole or in part by this medication request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $basedOn = [];

    /**
     * A shared identifier common to all requests that were authorized more or less simultaneously by a single author, representing the identifier of the requisition or prescription.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $groupIdentifier = null;

    /**
     * Captures the reason for the current state of the MedicationRequest.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $statusReason = null;

    /**
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be in delivering the requested service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $insurance = [];

    /**
     * Extra information about the prescription that could not be conveyed by the other attributes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public $note = [];

    /**
     * Indicates how the medication is to be used by the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDosage[]
     */
    public $dosageInstruction = [];

    /**
     * Indicates the specific details for the dispense or medication supply part of a medication request (also known as a Medication Prescription or Medication Order).  Note that this information is not always sent with the order.  There may be in some settings (e.g. hospitals) institutional or system support for completing the dispense details in the pharmacy department.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicationRequest\FHIRMedicationRequestDispenseRequest
     */
    public $dispenseRequest = null;

    /**
     * Indicates whether or not substitution can or should be part of the dispense. In some cases substitution must happen, in other cases substitution must not happen. This block explains the prescriber's intent. If nothing is specified substitution may be done.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicationRequest\FHIRMedicationRequestSubstitution
     */
    public $substitution = null;

    /**
     * A link to a resource representing an earlier order related order or prescription.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $priorPrescription = null;

    /**
     * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. Drug-drug interaction, duplicate therapy, dosage alert etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $detectedIssue = [];

    /**
     * Links to Provenance records for past versions of this resource or fulfilling request or event resources that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $eventHistory = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicationRequest';

    /**
     * This records identifiers associated with this medication request that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. For example a re-imbursement system might issue its own id for each prescription that is created.  This is particularly important where FHIR only provides part of an entire workflow process where records must be tracked through an entire system.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * This records identifiers associated with this medication request that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. For example a re-imbursement system might issue its own id for each prescription that is created.  This is particularly important where FHIR only provides part of an entire workflow process where records must be tracked through an entire system.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A code specifying the current state of the order.  Generally this will be active or completed state.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMedicationRequestStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * A code specifying the current state of the order.  Generally this will be active or completed state.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMedicationRequestStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Whether the request is a proposal, plan, or an original order.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMedicationRequestIntent
     */
    public function getIntent() {
        return $this->intent;
    }

    /**
     * Whether the request is a proposal, plan, or an original order.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMedicationRequestIntent $intent
     * @return $this
     */
    public function setIntent($intent) {
        $this->intent = $intent;
        return $this;
    }

    /**
     * Indicates the type of medication request (for example, where the medication is expected to be consumed or administered (i.e. inpatient or outpatient) or the type of treatment (i.e. chemotherapy or endocrine).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * Indicates the type of medication request (for example, where the medication is expected to be consumed or administered (i.e. inpatient or outpatient) or the type of treatment (i.e. chemotherapy or endocrine).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function addCategory($category) {
        $this->category[] = $category;
        return $this;
    }

    /**
     * Indicates how quickly the Medication Request should be addressed with respect to other requests.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRequestPriority
     */
    public function getPriority() {
        return $this->priority;
    }

    /**
     * Indicates how quickly the Medication Request should be addressed with respect to other requests.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRequestPriority $priority
     * @return $this
     */
    public function setPriority($priority) {
        $this->priority = $priority;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMedicationCodeableConcept() {
        return $this->medicationCodeableConcept;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $medicationCodeableConcept
     * @return $this
     */
    public function setMedicationCodeableConcept($medicationCodeableConcept) {
        $this->medicationCodeableConcept = $medicationCodeableConcept;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getMedicationReference() {
        return $this->medicationReference;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $medicationReference
     * @return $this
     */
    public function setMedicationReference($medicationReference) {
        $this->medicationReference = $medicationReference;
        return $this;
    }

    /**
     * A link to a resource representing the person or set of individuals to whom the medication will be given.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * A link to a resource representing the person or set of individuals to whom the medication will be given.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject) {
        $this->subject = $subject;
        return $this;
    }

    /**
     * A link to an encounter, or episode of care, that identifies the particular occurrence or set occurrences of contact between patient and health care provider.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext() {
        return $this->context;
    }

    /**
     * A link to an encounter, or episode of care, that identifies the particular occurrence or set occurrences of contact between patient and health care provider.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $context
     * @return $this
     */
    public function setContext($context) {
        $this->context = $context;
        return $this;
    }

    /**
     * Include additional information (for example, patient height and weight) that supports the ordering of the medication.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getSupportingInformation() {
        return $this->supportingInformation;
    }

    /**
     * Include additional information (for example, patient height and weight) that supports the ordering of the medication.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $supportingInformation
     * @return $this
     */
    public function addSupportingInformation($supportingInformation) {
        $this->supportingInformation[] = $supportingInformation;
        return $this;
    }

    /**
     * The date (and perhaps time) when the prescription was initially written or authored on.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getAuthoredOn() {
        return $this->authoredOn;
    }

    /**
     * The date (and perhaps time) when the prescription was initially written or authored on.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $authoredOn
     * @return $this
     */
    public function setAuthoredOn($authoredOn) {
        $this->authoredOn = $authoredOn;
        return $this;
    }

    /**
     * The individual, organization or device that initiated the request and has responsibility for its activation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequester() {
        return $this->requester;
    }

    /**
     * The individual, organization or device that initiated the request and has responsibility for its activation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $requester
     * @return $this
     */
    public function setRequester($requester) {
        $this->requester = $requester;
        return $this;
    }

    /**
     * The specified desired performer of the medication treatment (e.g. the performer of the medication administration).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPerformer() {
        return $this->performer;
    }

    /**
     * The specified desired performer of the medication treatment (e.g. the performer of the medication administration).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $performer
     * @return $this
     */
    public function setPerformer($performer) {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Indicates the type of performer of the administration of the medication.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPerformerType() {
        return $this->performerType;
    }

    /**
     * Indicates the type of performer of the administration of the medication.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $performerType
     * @return $this
     */
    public function setPerformerType($performerType) {
        $this->performerType = $performerType;
        return $this;
    }

    /**
     * The person who entered the order on behalf of another individual for example in the case of a verbal or a telephone order.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRecorder() {
        return $this->recorder;
    }

    /**
     * The person who entered the order on behalf of another individual for example in the case of a verbal or a telephone order.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $recorder
     * @return $this
     */
    public function setRecorder($recorder) {
        $this->recorder = $recorder;
        return $this;
    }

    /**
     * The reason or the indication for ordering the medication.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode() {
        return $this->reasonCode;
    }

    /**
     * The reason or the indication for ordering the medication.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return $this
     */
    public function addReasonCode($reasonCode) {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * Condition or observation that supports why the medication was ordered.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getReasonReference() {
        return $this->reasonReference;
    }

    /**
     * Condition or observation that supports why the medication was ordered.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $reasonReference
     * @return $this
     */
    public function addReasonReference($reasonReference) {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * The URL pointing to a protocol, guideline, orderset or other definition that is adhered to in whole or in part by this MedicationRequest.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public function getInstantiates() {
        return $this->instantiates;
    }

    /**
     * The URL pointing to a protocol, guideline, orderset or other definition that is adhered to in whole or in part by this MedicationRequest.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $instantiates
     * @return $this
     */
    public function addInstantiates($instantiates) {
        $this->instantiates[] = $instantiates;
        return $this;
    }

    /**
     * A plan or request that is fulfilled in whole or in part by this medication request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getBasedOn() {
        return $this->basedOn;
    }

    /**
     * A plan or request that is fulfilled in whole or in part by this medication request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $basedOn
     * @return $this
     */
    public function addBasedOn($basedOn) {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * A shared identifier common to all requests that were authorized more or less simultaneously by a single author, representing the identifier of the requisition or prescription.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getGroupIdentifier() {
        return $this->groupIdentifier;
    }

    /**
     * A shared identifier common to all requests that were authorized more or less simultaneously by a single author, representing the identifier of the requisition or prescription.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $groupIdentifier
     * @return $this
     */
    public function setGroupIdentifier($groupIdentifier) {
        $this->groupIdentifier = $groupIdentifier;
        return $this;
    }

    /**
     * Captures the reason for the current state of the MedicationRequest.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getStatusReason() {
        return $this->statusReason;
    }

    /**
     * Captures the reason for the current state of the MedicationRequest.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $statusReason
     * @return $this
     */
    public function setStatusReason($statusReason) {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be in delivering the requested service.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getInsurance() {
        return $this->insurance;
    }

    /**
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be in delivering the requested service.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $insurance
     * @return $this
     */
    public function addInsurance($insurance) {
        $this->insurance[] = $insurance;
        return $this;
    }

    /**
     * Extra information about the prescription that could not be conveyed by the other attributes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote() {
        return $this->note;
    }

    /**
     * Extra information about the prescription that could not be conveyed by the other attributes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note) {
        $this->note[] = $note;
        return $this;
    }

    /**
     * Indicates how the medication is to be used by the patient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDosage[]
     */
    public function getDosageInstruction() {
        return $this->dosageInstruction;
    }

    /**
     * Indicates how the medication is to be used by the patient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDosage $dosageInstruction
     * @return $this
     */
    public function addDosageInstruction($dosageInstruction) {
        $this->dosageInstruction[] = $dosageInstruction;
        return $this;
    }

    /**
     * Indicates the specific details for the dispense or medication supply part of a medication request (also known as a Medication Prescription or Medication Order).  Note that this information is not always sent with the order.  There may be in some settings (e.g. hospitals) institutional or system support for completing the dispense details in the pharmacy department.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicationRequest\FHIRMedicationRequestDispenseRequest
     */
    public function getDispenseRequest() {
        return $this->dispenseRequest;
    }

    /**
     * Indicates the specific details for the dispense or medication supply part of a medication request (also known as a Medication Prescription or Medication Order).  Note that this information is not always sent with the order.  There may be in some settings (e.g. hospitals) institutional or system support for completing the dispense details in the pharmacy department.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicationRequest\FHIRMedicationRequestDispenseRequest $dispenseRequest
     * @return $this
     */
    public function setDispenseRequest($dispenseRequest) {
        $this->dispenseRequest = $dispenseRequest;
        return $this;
    }

    /**
     * Indicates whether or not substitution can or should be part of the dispense. In some cases substitution must happen, in other cases substitution must not happen. This block explains the prescriber's intent. If nothing is specified substitution may be done.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicationRequest\FHIRMedicationRequestSubstitution
     */
    public function getSubstitution() {
        return $this->substitution;
    }

    /**
     * Indicates whether or not substitution can or should be part of the dispense. In some cases substitution must happen, in other cases substitution must not happen. This block explains the prescriber's intent. If nothing is specified substitution may be done.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicationRequest\FHIRMedicationRequestSubstitution $substitution
     * @return $this
     */
    public function setSubstitution($substitution) {
        $this->substitution = $substitution;
        return $this;
    }

    /**
     * A link to a resource representing an earlier order related order or prescription.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPriorPrescription() {
        return $this->priorPrescription;
    }

    /**
     * A link to a resource representing an earlier order related order or prescription.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $priorPrescription
     * @return $this
     */
    public function setPriorPrescription($priorPrescription) {
        $this->priorPrescription = $priorPrescription;
        return $this;
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. Drug-drug interaction, duplicate therapy, dosage alert etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getDetectedIssue() {
        return $this->detectedIssue;
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. Drug-drug interaction, duplicate therapy, dosage alert etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $detectedIssue
     * @return $this
     */
    public function addDetectedIssue($detectedIssue) {
        $this->detectedIssue[] = $detectedIssue;
        return $this;
    }

    /**
     * Links to Provenance records for past versions of this resource or fulfilling request or event resources that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getEventHistory() {
        return $this->eventHistory;
    }

    /**
     * Links to Provenance records for past versions of this resource or fulfilling request or event resources that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $eventHistory
     * @return $this
     */
    public function addEventHistory($eventHistory) {
        $this->eventHistory[] = $eventHistory;
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
        if (is_array($data)) {
            if (isset($data['identifier'])) {
                if (is_array($data['identifier'])) {
                    foreach($data['identifier'] as $d) {
                        $this->addIdentifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"identifier" must be array of objects or null, '.gettype($data['identifier']).' seen.');
                }
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['intent'])) {
                $this->setIntent($data['intent']);
            }
            if (isset($data['category'])) {
                if (is_array($data['category'])) {
                    foreach($data['category'] as $d) {
                        $this->addCategory($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"category" must be array of objects or null, '.gettype($data['category']).' seen.');
                }
            }
            if (isset($data['priority'])) {
                $this->setPriority($data['priority']);
            }
            if (isset($data['medicationCodeableConcept'])) {
                $this->setMedicationCodeableConcept($data['medicationCodeableConcept']);
            }
            if (isset($data['medicationReference'])) {
                $this->setMedicationReference($data['medicationReference']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['supportingInformation'])) {
                if (is_array($data['supportingInformation'])) {
                    foreach($data['supportingInformation'] as $d) {
                        $this->addSupportingInformation($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"supportingInformation" must be array of objects or null, '.gettype($data['supportingInformation']).' seen.');
                }
            }
            if (isset($data['authoredOn'])) {
                $this->setAuthoredOn($data['authoredOn']);
            }
            if (isset($data['requester'])) {
                $this->setRequester($data['requester']);
            }
            if (isset($data['performer'])) {
                $this->setPerformer($data['performer']);
            }
            if (isset($data['performerType'])) {
                $this->setPerformerType($data['performerType']);
            }
            if (isset($data['recorder'])) {
                $this->setRecorder($data['recorder']);
            }
            if (isset($data['reasonCode'])) {
                if (is_array($data['reasonCode'])) {
                    foreach($data['reasonCode'] as $d) {
                        $this->addReasonCode($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"reasonCode" must be array of objects or null, '.gettype($data['reasonCode']).' seen.');
                }
            }
            if (isset($data['reasonReference'])) {
                if (is_array($data['reasonReference'])) {
                    foreach($data['reasonReference'] as $d) {
                        $this->addReasonReference($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"reasonReference" must be array of objects or null, '.gettype($data['reasonReference']).' seen.');
                }
            }
            if (isset($data['instantiates'])) {
                if (is_array($data['instantiates'])) {
                    foreach($data['instantiates'] as $d) {
                        $this->addInstantiates($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"instantiates" must be array of objects or null, '.gettype($data['instantiates']).' seen.');
                }
            }
            if (isset($data['basedOn'])) {
                if (is_array($data['basedOn'])) {
                    foreach($data['basedOn'] as $d) {
                        $this->addBasedOn($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"basedOn" must be array of objects or null, '.gettype($data['basedOn']).' seen.');
                }
            }
            if (isset($data['groupIdentifier'])) {
                $this->setGroupIdentifier($data['groupIdentifier']);
            }
            if (isset($data['statusReason'])) {
                $this->setStatusReason($data['statusReason']);
            }
            if (isset($data['insurance'])) {
                if (is_array($data['insurance'])) {
                    foreach($data['insurance'] as $d) {
                        $this->addInsurance($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"insurance" must be array of objects or null, '.gettype($data['insurance']).' seen.');
                }
            }
            if (isset($data['note'])) {
                if (is_array($data['note'])) {
                    foreach($data['note'] as $d) {
                        $this->addNote($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"note" must be array of objects or null, '.gettype($data['note']).' seen.');
                }
            }
            if (isset($data['dosageInstruction'])) {
                if (is_array($data['dosageInstruction'])) {
                    foreach($data['dosageInstruction'] as $d) {
                        $this->addDosageInstruction($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"dosageInstruction" must be array of objects or null, '.gettype($data['dosageInstruction']).' seen.');
                }
            }
            if (isset($data['dispenseRequest'])) {
                $this->setDispenseRequest($data['dispenseRequest']);
            }
            if (isset($data['substitution'])) {
                $this->setSubstitution($data['substitution']);
            }
            if (isset($data['priorPrescription'])) {
                $this->setPriorPrescription($data['priorPrescription']);
            }
            if (isset($data['detectedIssue'])) {
                if (is_array($data['detectedIssue'])) {
                    foreach($data['detectedIssue'] as $d) {
                        $this->addDetectedIssue($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"detectedIssue" must be array of objects or null, '.gettype($data['detectedIssue']).' seen.');
                }
            }
            if (isset($data['eventHistory'])) {
                if (is_array($data['eventHistory'])) {
                    foreach($data['eventHistory'] as $d) {
                        $this->addEventHistory($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"eventHistory" must be array of objects or null, '.gettype($data['eventHistory']).' seen.');
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                if (null !== $identifier) $json['identifier'][] = $identifier;
            }
        }
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->intent)) $json['intent'] = $this->intent;
        if (0 < count($this->category)) {
            $json['category'] = [];
            foreach($this->category as $category) {
                if (null !== $category) $json['category'][] = $category;
            }
        }
        if (isset($this->priority)) $json['priority'] = $this->priority;
        if (isset($this->medicationCodeableConcept)) $json['medicationCodeableConcept'] = $this->medicationCodeableConcept;
        if (isset($this->medicationReference)) $json['medicationReference'] = $this->medicationReference;
        if (isset($this->subject)) $json['subject'] = $this->subject;
        if (isset($this->context)) $json['context'] = $this->context;
        if (0 < count($this->supportingInformation)) {
            $json['supportingInformation'] = [];
            foreach($this->supportingInformation as $supportingInformation) {
                if (null !== $supportingInformation) $json['supportingInformation'][] = $supportingInformation;
            }
        }
        if (isset($this->authoredOn)) $json['authoredOn'] = $this->authoredOn;
        if (isset($this->requester)) $json['requester'] = $this->requester;
        if (isset($this->performer)) $json['performer'] = $this->performer;
        if (isset($this->performerType)) $json['performerType'] = $this->performerType;
        if (isset($this->recorder)) $json['recorder'] = $this->recorder;
        if (0 < count($this->reasonCode)) {
            $json['reasonCode'] = [];
            foreach($this->reasonCode as $reasonCode) {
                if (null !== $reasonCode) $json['reasonCode'][] = $reasonCode;
            }
        }
        if (0 < count($this->reasonReference)) {
            $json['reasonReference'] = [];
            foreach($this->reasonReference as $reasonReference) {
                if (null !== $reasonReference) $json['reasonReference'][] = $reasonReference;
            }
        }
        if (0 < count($this->instantiates)) {
            $json['instantiates'] = [];
            foreach($this->instantiates as $instantiates) {
                if (null !== $instantiates) $json['instantiates'][] = $instantiates;
            }
        }
        if (0 < count($this->basedOn)) {
            $json['basedOn'] = [];
            foreach($this->basedOn as $basedOn) {
                if (null !== $basedOn) $json['basedOn'][] = $basedOn;
            }
        }
        if (isset($this->groupIdentifier)) $json['groupIdentifier'] = $this->groupIdentifier;
        if (isset($this->statusReason)) $json['statusReason'] = $this->statusReason;
        if (0 < count($this->insurance)) {
            $json['insurance'] = [];
            foreach($this->insurance as $insurance) {
                if (null !== $insurance) $json['insurance'][] = $insurance;
            }
        }
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                if (null !== $note) $json['note'][] = $note;
            }
        }
        if (0 < count($this->dosageInstruction)) {
            $json['dosageInstruction'] = [];
            foreach($this->dosageInstruction as $dosageInstruction) {
                if (null !== $dosageInstruction) $json['dosageInstruction'][] = $dosageInstruction;
            }
        }
        if (isset($this->dispenseRequest)) $json['dispenseRequest'] = $this->dispenseRequest;
        if (isset($this->substitution)) $json['substitution'] = $this->substitution;
        if (isset($this->priorPrescription)) $json['priorPrescription'] = $this->priorPrescription;
        if (0 < count($this->detectedIssue)) {
            $json['detectedIssue'] = [];
            foreach($this->detectedIssue as $detectedIssue) {
                if (null !== $detectedIssue) $json['detectedIssue'][] = $detectedIssue;
            }
        }
        if (0 < count($this->eventHistory)) {
            $json['eventHistory'] = [];
            foreach($this->eventHistory as $eventHistory) {
                if (null !== $eventHistory) $json['eventHistory'][] = $eventHistory;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicationRequest xmlns="http://hl7.org/fhir"></MedicationRequest>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->intent)) $this->intent->xmlSerialize(true, $sxe->addChild('intent'));
        if (0 < count($this->category)) {
            foreach($this->category as $category) {
                $category->xmlSerialize(true, $sxe->addChild('category'));
            }
        }
        if (isset($this->priority)) $this->priority->xmlSerialize(true, $sxe->addChild('priority'));
        if (isset($this->medicationCodeableConcept)) $this->medicationCodeableConcept->xmlSerialize(true, $sxe->addChild('medicationCodeableConcept'));
        if (isset($this->medicationReference)) $this->medicationReference->xmlSerialize(true, $sxe->addChild('medicationReference'));
        if (isset($this->subject)) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (isset($this->context)) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if (0 < count($this->supportingInformation)) {
            foreach($this->supportingInformation as $supportingInformation) {
                $supportingInformation->xmlSerialize(true, $sxe->addChild('supportingInformation'));
            }
        }
        if (isset($this->authoredOn)) $this->authoredOn->xmlSerialize(true, $sxe->addChild('authoredOn'));
        if (isset($this->requester)) $this->requester->xmlSerialize(true, $sxe->addChild('requester'));
        if (isset($this->performer)) $this->performer->xmlSerialize(true, $sxe->addChild('performer'));
        if (isset($this->performerType)) $this->performerType->xmlSerialize(true, $sxe->addChild('performerType'));
        if (isset($this->recorder)) $this->recorder->xmlSerialize(true, $sxe->addChild('recorder'));
        if (0 < count($this->reasonCode)) {
            foreach($this->reasonCode as $reasonCode) {
                $reasonCode->xmlSerialize(true, $sxe->addChild('reasonCode'));
            }
        }
        if (0 < count($this->reasonReference)) {
            foreach($this->reasonReference as $reasonReference) {
                $reasonReference->xmlSerialize(true, $sxe->addChild('reasonReference'));
            }
        }
        if (0 < count($this->instantiates)) {
            foreach($this->instantiates as $instantiates) {
                $instantiates->xmlSerialize(true, $sxe->addChild('instantiates'));
            }
        }
        if (0 < count($this->basedOn)) {
            foreach($this->basedOn as $basedOn) {
                $basedOn->xmlSerialize(true, $sxe->addChild('basedOn'));
            }
        }
        if (isset($this->groupIdentifier)) $this->groupIdentifier->xmlSerialize(true, $sxe->addChild('groupIdentifier'));
        if (isset($this->statusReason)) $this->statusReason->xmlSerialize(true, $sxe->addChild('statusReason'));
        if (0 < count($this->insurance)) {
            foreach($this->insurance as $insurance) {
                $insurance->xmlSerialize(true, $sxe->addChild('insurance'));
            }
        }
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if (0 < count($this->dosageInstruction)) {
            foreach($this->dosageInstruction as $dosageInstruction) {
                $dosageInstruction->xmlSerialize(true, $sxe->addChild('dosageInstruction'));
            }
        }
        if (isset($this->dispenseRequest)) $this->dispenseRequest->xmlSerialize(true, $sxe->addChild('dispenseRequest'));
        if (isset($this->substitution)) $this->substitution->xmlSerialize(true, $sxe->addChild('substitution'));
        if (isset($this->priorPrescription)) $this->priorPrescription->xmlSerialize(true, $sxe->addChild('priorPrescription'));
        if (0 < count($this->detectedIssue)) {
            foreach($this->detectedIssue as $detectedIssue) {
                $detectedIssue->xmlSerialize(true, $sxe->addChild('detectedIssue'));
            }
        }
        if (0 < count($this->eventHistory)) {
            foreach($this->eventHistory as $eventHistory) {
                $eventHistory->xmlSerialize(true, $sxe->addChild('eventHistory'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}