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
 * A record of a request for service such as diagnostic investigations, treatments, or operations to be performed.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRServiceRequest extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Identifiers assigned to this order instance by the orderer and/or the receiver and/or order fulfiller.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * Protocol or definition followed by this request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public $instantiates = [];

    /**
     * Plan/proposal/order fulfilled by this request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $basedOn = [];

    /**
     * The request takes the place of the referenced completed or terminated request(s).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $replaces = [];

    /**
     * A shared identifier common to all service requests that were authorized more or less simultaneously by a single author, representing the composite or group identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $requisition = null;

    /**
     * The status of the order.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRequestStatus
     */
    public $status = null;

    /**
     * Whether the request is a proposal, plan, an original order or a reflex order.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRequestIntent
     */
    public $intent = null;

    /**
     * Indicates how quickly the ServiceRequest should be addressed with respect to other requests.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRequestPriority
     */
    public $priority = null;

    /**
     * Set this to true if the record is saying that the service/procedure should NOT be performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $doNotPerform = null;

    /**
     * A code that classifies the service for searching, sorting and display purposes (e.g. "Surgical Procedure").
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $category = [];

    /**
     * A code that identifies a particular service (i.e., procedure, diagnostic investigation, or panel of investigations) that have been requested.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * Additional details and instructions about the how the services are to be delivered.   For example, and order for a urinary catheter may have a order detail for an external or indwelling catheter, or an order for a bandage may require additional instructions specifying how the bandage should be applied.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $orderDetail = [];

    /**
     * On whom or what the service is to be performed. This is usually a human patient, but can also be requested on animals, groups of humans or animals, devices such as dialysis machines, or even locations (typically for environmental scans).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * An encounter or episode of care that provides additional information about the healthcare context in which this request is made.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $occurrenceDateTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $occurrencePeriod = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public $occurrenceTiming = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $asNeededBoolean = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $asNeededCodeableConcept = null;

    /**
     * When the request transitioned to being actionable.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $authoredOn = null;

    /**
     * The individual who initiated the request and has responsibility for its activation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $requester = null;

    /**
     * Desired type of performer for doing the requested service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $performerType = null;

    /**
     * The desired perfomer for doing the requested service.  For example, the surgeon, dermatopathologist, endoscopist, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $performer = null;

    /**
     * An explanation or justification for why this service is being requested in coded or textual form.   This is often for billing purposes.  May relate to the resources referred to in supportingInformation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $reasonCode = [];

    /**
     * Indicates another resource that provides a justification for why this service is being requested.   May relate to the resources referred to in supportingInformation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $reasonReference = [];

    /**
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be needed for delivering the requested service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $insurance = [];

    /**
     * Additional clinical information about the patient or specimen that may influence the services or their interpretations.     This information includes diagnosis, clinical findings and other observations.  In laboratory ordering these are typically referred to as "ask at order entry questions (AOEs)".  This includes observations explicitly requested by the producer (filler) to provide context or supporting information needed to complete the order. For example,  reporting the amount of inspired oxygen for blood gas measurements.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $supportingInfo = [];

    /**
     * One or more specimens that the laboratory procedure will use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $specimen = [];

    /**
     * Anatomic location where the procedure should be performed. This is the target site.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $bodySite = [];

    /**
     * Any other notes and comments made about the service request. For example, internal billing notes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public $note = [];

    /**
     * Instructions in terms that are understood by the patient or consumer.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $patientInstruction = null;

    /**
     * Key events in the history of the request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $relevantHistory = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'ServiceRequest';

    /**
     * Identifiers assigned to this order instance by the orderer and/or the receiver and/or order fulfiller.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Identifiers assigned to this order instance by the orderer and/or the receiver and/or order fulfiller.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Protocol or definition followed by this request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public function getInstantiates() {
        return $this->instantiates;
    }

    /**
     * Protocol or definition followed by this request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $instantiates
     * @return $this
     */
    public function addInstantiates($instantiates) {
        $this->instantiates[] = $instantiates;
        return $this;
    }

    /**
     * Plan/proposal/order fulfilled by this request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getBasedOn() {
        return $this->basedOn;
    }

    /**
     * Plan/proposal/order fulfilled by this request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $basedOn
     * @return $this
     */
    public function addBasedOn($basedOn) {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * The request takes the place of the referenced completed or terminated request(s).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getReplaces() {
        return $this->replaces;
    }

    /**
     * The request takes the place of the referenced completed or terminated request(s).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $replaces
     * @return $this
     */
    public function addReplaces($replaces) {
        $this->replaces[] = $replaces;
        return $this;
    }

    /**
     * A shared identifier common to all service requests that were authorized more or less simultaneously by a single author, representing the composite or group identifier.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getRequisition() {
        return $this->requisition;
    }

    /**
     * A shared identifier common to all service requests that were authorized more or less simultaneously by a single author, representing the composite or group identifier.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $requisition
     * @return $this
     */
    public function setRequisition($requisition) {
        $this->requisition = $requisition;
        return $this;
    }

    /**
     * The status of the order.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRequestStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * The status of the order.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRequestStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Whether the request is a proposal, plan, an original order or a reflex order.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRequestIntent
     */
    public function getIntent() {
        return $this->intent;
    }

    /**
     * Whether the request is a proposal, plan, an original order or a reflex order.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRequestIntent $intent
     * @return $this
     */
    public function setIntent($intent) {
        $this->intent = $intent;
        return $this;
    }

    /**
     * Indicates how quickly the ServiceRequest should be addressed with respect to other requests.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRequestPriority
     */
    public function getPriority() {
        return $this->priority;
    }

    /**
     * Indicates how quickly the ServiceRequest should be addressed with respect to other requests.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRequestPriority $priority
     * @return $this
     */
    public function setPriority($priority) {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Set this to true if the record is saying that the service/procedure should NOT be performed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getDoNotPerform() {
        return $this->doNotPerform;
    }

    /**
     * Set this to true if the record is saying that the service/procedure should NOT be performed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $doNotPerform
     * @return $this
     */
    public function setDoNotPerform($doNotPerform) {
        $this->doNotPerform = $doNotPerform;
        return $this;
    }

    /**
     * A code that classifies the service for searching, sorting and display purposes (e.g. "Surgical Procedure").
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * A code that classifies the service for searching, sorting and display purposes (e.g. "Surgical Procedure").
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function addCategory($category) {
        $this->category[] = $category;
        return $this;
    }

    /**
     * A code that identifies a particular service (i.e., procedure, diagnostic investigation, or panel of investigations) that have been requested.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * A code that identifies a particular service (i.e., procedure, diagnostic investigation, or panel of investigations) that have been requested.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Additional details and instructions about the how the services are to be delivered.   For example, and order for a urinary catheter may have a order detail for an external or indwelling catheter, or an order for a bandage may require additional instructions specifying how the bandage should be applied.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getOrderDetail() {
        return $this->orderDetail;
    }

    /**
     * Additional details and instructions about the how the services are to be delivered.   For example, and order for a urinary catheter may have a order detail for an external or indwelling catheter, or an order for a bandage may require additional instructions specifying how the bandage should be applied.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $orderDetail
     * @return $this
     */
    public function addOrderDetail($orderDetail) {
        $this->orderDetail[] = $orderDetail;
        return $this;
    }

    /**
     * On whom or what the service is to be performed. This is usually a human patient, but can also be requested on animals, groups of humans or animals, devices such as dialysis machines, or even locations (typically for environmental scans).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * On whom or what the service is to be performed. This is usually a human patient, but can also be requested on animals, groups of humans or animals, devices such as dialysis machines, or even locations (typically for environmental scans).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject) {
        $this->subject = $subject;
        return $this;
    }

    /**
     * An encounter or episode of care that provides additional information about the healthcare context in which this request is made.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext() {
        return $this->context;
    }

    /**
     * An encounter or episode of care that provides additional information about the healthcare context in which this request is made.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $context
     * @return $this
     */
    public function setContext($context) {
        $this->context = $context;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getOccurrenceDateTime() {
        return $this->occurrenceDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $occurrenceDateTime
     * @return $this
     */
    public function setOccurrenceDateTime($occurrenceDateTime) {
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getOccurrencePeriod() {
        return $this->occurrencePeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $occurrencePeriod
     * @return $this
     */
    public function setOccurrencePeriod($occurrencePeriod) {
        $this->occurrencePeriod = $occurrencePeriod;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getOccurrenceTiming() {
        return $this->occurrenceTiming;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $occurrenceTiming
     * @return $this
     */
    public function setOccurrenceTiming($occurrenceTiming) {
        $this->occurrenceTiming = $occurrenceTiming;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAsNeededBoolean() {
        return $this->asNeededBoolean;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $asNeededBoolean
     * @return $this
     */
    public function setAsNeededBoolean($asNeededBoolean) {
        $this->asNeededBoolean = $asNeededBoolean;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAsNeededCodeableConcept() {
        return $this->asNeededCodeableConcept;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $asNeededCodeableConcept
     * @return $this
     */
    public function setAsNeededCodeableConcept($asNeededCodeableConcept) {
        $this->asNeededCodeableConcept = $asNeededCodeableConcept;
        return $this;
    }

    /**
     * When the request transitioned to being actionable.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getAuthoredOn() {
        return $this->authoredOn;
    }

    /**
     * When the request transitioned to being actionable.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $authoredOn
     * @return $this
     */
    public function setAuthoredOn($authoredOn) {
        $this->authoredOn = $authoredOn;
        return $this;
    }

    /**
     * The individual who initiated the request and has responsibility for its activation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequester() {
        return $this->requester;
    }

    /**
     * The individual who initiated the request and has responsibility for its activation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $requester
     * @return $this
     */
    public function setRequester($requester) {
        $this->requester = $requester;
        return $this;
    }

    /**
     * Desired type of performer for doing the requested service.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPerformerType() {
        return $this->performerType;
    }

    /**
     * Desired type of performer for doing the requested service.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $performerType
     * @return $this
     */
    public function setPerformerType($performerType) {
        $this->performerType = $performerType;
        return $this;
    }

    /**
     * The desired perfomer for doing the requested service.  For example, the surgeon, dermatopathologist, endoscopist, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPerformer() {
        return $this->performer;
    }

    /**
     * The desired perfomer for doing the requested service.  For example, the surgeon, dermatopathologist, endoscopist, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $performer
     * @return $this
     */
    public function setPerformer($performer) {
        $this->performer = $performer;
        return $this;
    }

    /**
     * An explanation or justification for why this service is being requested in coded or textual form.   This is often for billing purposes.  May relate to the resources referred to in supportingInformation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode() {
        return $this->reasonCode;
    }

    /**
     * An explanation or justification for why this service is being requested in coded or textual form.   This is often for billing purposes.  May relate to the resources referred to in supportingInformation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return $this
     */
    public function addReasonCode($reasonCode) {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * Indicates another resource that provides a justification for why this service is being requested.   May relate to the resources referred to in supportingInformation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getReasonReference() {
        return $this->reasonReference;
    }

    /**
     * Indicates another resource that provides a justification for why this service is being requested.   May relate to the resources referred to in supportingInformation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $reasonReference
     * @return $this
     */
    public function addReasonReference($reasonReference) {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be needed for delivering the requested service.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getInsurance() {
        return $this->insurance;
    }

    /**
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be needed for delivering the requested service.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $insurance
     * @return $this
     */
    public function addInsurance($insurance) {
        $this->insurance[] = $insurance;
        return $this;
    }

    /**
     * Additional clinical information about the patient or specimen that may influence the services or their interpretations.     This information includes diagnosis, clinical findings and other observations.  In laboratory ordering these are typically referred to as "ask at order entry questions (AOEs)".  This includes observations explicitly requested by the producer (filler) to provide context or supporting information needed to complete the order. For example,  reporting the amount of inspired oxygen for blood gas measurements.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getSupportingInfo() {
        return $this->supportingInfo;
    }

    /**
     * Additional clinical information about the patient or specimen that may influence the services or their interpretations.     This information includes diagnosis, clinical findings and other observations.  In laboratory ordering these are typically referred to as "ask at order entry questions (AOEs)".  This includes observations explicitly requested by the producer (filler) to provide context or supporting information needed to complete the order. For example,  reporting the amount of inspired oxygen for blood gas measurements.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $supportingInfo
     * @return $this
     */
    public function addSupportingInfo($supportingInfo) {
        $this->supportingInfo[] = $supportingInfo;
        return $this;
    }

    /**
     * One or more specimens that the laboratory procedure will use.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getSpecimen() {
        return $this->specimen;
    }

    /**
     * One or more specimens that the laboratory procedure will use.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $specimen
     * @return $this
     */
    public function addSpecimen($specimen) {
        $this->specimen[] = $specimen;
        return $this;
    }

    /**
     * Anatomic location where the procedure should be performed. This is the target site.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getBodySite() {
        return $this->bodySite;
    }

    /**
     * Anatomic location where the procedure should be performed. This is the target site.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $bodySite
     * @return $this
     */
    public function addBodySite($bodySite) {
        $this->bodySite[] = $bodySite;
        return $this;
    }

    /**
     * Any other notes and comments made about the service request. For example, internal billing notes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote() {
        return $this->note;
    }

    /**
     * Any other notes and comments made about the service request. For example, internal billing notes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note) {
        $this->note[] = $note;
        return $this;
    }

    /**
     * Instructions in terms that are understood by the patient or consumer.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPatientInstruction() {
        return $this->patientInstruction;
    }

    /**
     * Instructions in terms that are understood by the patient or consumer.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $patientInstruction
     * @return $this
     */
    public function setPatientInstruction($patientInstruction) {
        $this->patientInstruction = $patientInstruction;
        return $this;
    }

    /**
     * Key events in the history of the request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getRelevantHistory() {
        return $this->relevantHistory;
    }

    /**
     * Key events in the history of the request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $relevantHistory
     * @return $this
     */
    public function addRelevantHistory($relevantHistory) {
        $this->relevantHistory[] = $relevantHistory;
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
            if (isset($data['replaces'])) {
                if (is_array($data['replaces'])) {
                    foreach($data['replaces'] as $d) {
                        $this->addReplaces($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"replaces" must be array of objects or null, '.gettype($data['replaces']).' seen.');
                }
            }
            if (isset($data['requisition'])) {
                $this->setRequisition($data['requisition']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['intent'])) {
                $this->setIntent($data['intent']);
            }
            if (isset($data['priority'])) {
                $this->setPriority($data['priority']);
            }
            if (isset($data['doNotPerform'])) {
                $this->setDoNotPerform($data['doNotPerform']);
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
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['orderDetail'])) {
                if (is_array($data['orderDetail'])) {
                    foreach($data['orderDetail'] as $d) {
                        $this->addOrderDetail($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"orderDetail" must be array of objects or null, '.gettype($data['orderDetail']).' seen.');
                }
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['occurrenceDateTime'])) {
                $this->setOccurrenceDateTime($data['occurrenceDateTime']);
            }
            if (isset($data['occurrencePeriod'])) {
                $this->setOccurrencePeriod($data['occurrencePeriod']);
            }
            if (isset($data['occurrenceTiming'])) {
                $this->setOccurrenceTiming($data['occurrenceTiming']);
            }
            if (isset($data['asNeededBoolean'])) {
                $this->setAsNeededBoolean($data['asNeededBoolean']);
            }
            if (isset($data['asNeededCodeableConcept'])) {
                $this->setAsNeededCodeableConcept($data['asNeededCodeableConcept']);
            }
            if (isset($data['authoredOn'])) {
                $this->setAuthoredOn($data['authoredOn']);
            }
            if (isset($data['requester'])) {
                $this->setRequester($data['requester']);
            }
            if (isset($data['performerType'])) {
                $this->setPerformerType($data['performerType']);
            }
            if (isset($data['performer'])) {
                $this->setPerformer($data['performer']);
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
            if (isset($data['insurance'])) {
                if (is_array($data['insurance'])) {
                    foreach($data['insurance'] as $d) {
                        $this->addInsurance($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"insurance" must be array of objects or null, '.gettype($data['insurance']).' seen.');
                }
            }
            if (isset($data['supportingInfo'])) {
                if (is_array($data['supportingInfo'])) {
                    foreach($data['supportingInfo'] as $d) {
                        $this->addSupportingInfo($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"supportingInfo" must be array of objects or null, '.gettype($data['supportingInfo']).' seen.');
                }
            }
            if (isset($data['specimen'])) {
                if (is_array($data['specimen'])) {
                    foreach($data['specimen'] as $d) {
                        $this->addSpecimen($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"specimen" must be array of objects or null, '.gettype($data['specimen']).' seen.');
                }
            }
            if (isset($data['bodySite'])) {
                if (is_array($data['bodySite'])) {
                    foreach($data['bodySite'] as $d) {
                        $this->addBodySite($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"bodySite" must be array of objects or null, '.gettype($data['bodySite']).' seen.');
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
            if (isset($data['patientInstruction'])) {
                $this->setPatientInstruction($data['patientInstruction']);
            }
            if (isset($data['relevantHistory'])) {
                if (is_array($data['relevantHistory'])) {
                    foreach($data['relevantHistory'] as $d) {
                        $this->addRelevantHistory($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"relevantHistory" must be array of objects or null, '.gettype($data['relevantHistory']).' seen.');
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
        if (0 < count($this->replaces)) {
            $json['replaces'] = [];
            foreach($this->replaces as $replaces) {
                if (null !== $replaces) $json['replaces'][] = $replaces;
            }
        }
        if (isset($this->requisition)) $json['requisition'] = $this->requisition;
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->intent)) $json['intent'] = $this->intent;
        if (isset($this->priority)) $json['priority'] = $this->priority;
        if (isset($this->doNotPerform)) $json['doNotPerform'] = $this->doNotPerform;
        if (0 < count($this->category)) {
            $json['category'] = [];
            foreach($this->category as $category) {
                if (null !== $category) $json['category'][] = $category;
            }
        }
        if (isset($this->code)) $json['code'] = $this->code;
        if (0 < count($this->orderDetail)) {
            $json['orderDetail'] = [];
            foreach($this->orderDetail as $orderDetail) {
                if (null !== $orderDetail) $json['orderDetail'][] = $orderDetail;
            }
        }
        if (isset($this->subject)) $json['subject'] = $this->subject;
        if (isset($this->context)) $json['context'] = $this->context;
        if (isset($this->occurrenceDateTime)) $json['occurrenceDateTime'] = $this->occurrenceDateTime;
        if (isset($this->occurrencePeriod)) $json['occurrencePeriod'] = $this->occurrencePeriod;
        if (isset($this->occurrenceTiming)) $json['occurrenceTiming'] = $this->occurrenceTiming;
        if (isset($this->asNeededBoolean)) $json['asNeededBoolean'] = $this->asNeededBoolean;
        if (isset($this->asNeededCodeableConcept)) $json['asNeededCodeableConcept'] = $this->asNeededCodeableConcept;
        if (isset($this->authoredOn)) $json['authoredOn'] = $this->authoredOn;
        if (isset($this->requester)) $json['requester'] = $this->requester;
        if (isset($this->performerType)) $json['performerType'] = $this->performerType;
        if (isset($this->performer)) $json['performer'] = $this->performer;
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
        if (0 < count($this->insurance)) {
            $json['insurance'] = [];
            foreach($this->insurance as $insurance) {
                if (null !== $insurance) $json['insurance'][] = $insurance;
            }
        }
        if (0 < count($this->supportingInfo)) {
            $json['supportingInfo'] = [];
            foreach($this->supportingInfo as $supportingInfo) {
                if (null !== $supportingInfo) $json['supportingInfo'][] = $supportingInfo;
            }
        }
        if (0 < count($this->specimen)) {
            $json['specimen'] = [];
            foreach($this->specimen as $specimen) {
                if (null !== $specimen) $json['specimen'][] = $specimen;
            }
        }
        if (0 < count($this->bodySite)) {
            $json['bodySite'] = [];
            foreach($this->bodySite as $bodySite) {
                if (null !== $bodySite) $json['bodySite'][] = $bodySite;
            }
        }
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                if (null !== $note) $json['note'][] = $note;
            }
        }
        if (isset($this->patientInstruction)) $json['patientInstruction'] = $this->patientInstruction;
        if (0 < count($this->relevantHistory)) {
            $json['relevantHistory'] = [];
            foreach($this->relevantHistory as $relevantHistory) {
                if (null !== $relevantHistory) $json['relevantHistory'][] = $relevantHistory;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ServiceRequest xmlns="http://hl7.org/fhir"></ServiceRequest>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
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
        if (0 < count($this->replaces)) {
            foreach($this->replaces as $replaces) {
                $replaces->xmlSerialize(true, $sxe->addChild('replaces'));
            }
        }
        if (isset($this->requisition)) $this->requisition->xmlSerialize(true, $sxe->addChild('requisition'));
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->intent)) $this->intent->xmlSerialize(true, $sxe->addChild('intent'));
        if (isset($this->priority)) $this->priority->xmlSerialize(true, $sxe->addChild('priority'));
        if (isset($this->doNotPerform)) $this->doNotPerform->xmlSerialize(true, $sxe->addChild('doNotPerform'));
        if (0 < count($this->category)) {
            foreach($this->category as $category) {
                $category->xmlSerialize(true, $sxe->addChild('category'));
            }
        }
        if (isset($this->code)) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (0 < count($this->orderDetail)) {
            foreach($this->orderDetail as $orderDetail) {
                $orderDetail->xmlSerialize(true, $sxe->addChild('orderDetail'));
            }
        }
        if (isset($this->subject)) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (isset($this->context)) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if (isset($this->occurrenceDateTime)) $this->occurrenceDateTime->xmlSerialize(true, $sxe->addChild('occurrenceDateTime'));
        if (isset($this->occurrencePeriod)) $this->occurrencePeriod->xmlSerialize(true, $sxe->addChild('occurrencePeriod'));
        if (isset($this->occurrenceTiming)) $this->occurrenceTiming->xmlSerialize(true, $sxe->addChild('occurrenceTiming'));
        if (isset($this->asNeededBoolean)) $this->asNeededBoolean->xmlSerialize(true, $sxe->addChild('asNeededBoolean'));
        if (isset($this->asNeededCodeableConcept)) $this->asNeededCodeableConcept->xmlSerialize(true, $sxe->addChild('asNeededCodeableConcept'));
        if (isset($this->authoredOn)) $this->authoredOn->xmlSerialize(true, $sxe->addChild('authoredOn'));
        if (isset($this->requester)) $this->requester->xmlSerialize(true, $sxe->addChild('requester'));
        if (isset($this->performerType)) $this->performerType->xmlSerialize(true, $sxe->addChild('performerType'));
        if (isset($this->performer)) $this->performer->xmlSerialize(true, $sxe->addChild('performer'));
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
        if (0 < count($this->insurance)) {
            foreach($this->insurance as $insurance) {
                $insurance->xmlSerialize(true, $sxe->addChild('insurance'));
            }
        }
        if (0 < count($this->supportingInfo)) {
            foreach($this->supportingInfo as $supportingInfo) {
                $supportingInfo->xmlSerialize(true, $sxe->addChild('supportingInfo'));
            }
        }
        if (0 < count($this->specimen)) {
            foreach($this->specimen as $specimen) {
                $specimen->xmlSerialize(true, $sxe->addChild('specimen'));
            }
        }
        if (0 < count($this->bodySite)) {
            foreach($this->bodySite as $bodySite) {
                $bodySite->xmlSerialize(true, $sxe->addChild('bodySite'));
            }
        }
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if (isset($this->patientInstruction)) $this->patientInstruction->xmlSerialize(true, $sxe->addChild('patientInstruction'));
        if (0 < count($this->relevantHistory)) {
            foreach($this->relevantHistory as $relevantHistory) {
                $relevantHistory->xmlSerialize(true, $sxe->addChild('relevantHistory'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}