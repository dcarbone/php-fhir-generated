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
 * Describes the event of a patient consuming or otherwise being administered a medication.  This may be as simple as swallowing a tablet or it may be a long running infusion.  Related resources tie this event to the authorizing prescription, and the specific encounter between patient and health care practitioner.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRMedicationAdministration extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * External identifier - FHIR will generate its own internal identifiers (probably URLs) which do not need to be explicitly managed by the resource.  The identifier here is one that would be used by another non-FHIR system - for example an automated medication pump would provide a record each time it operated; an administration while the patient was off the ward might be made with a different system and entered after the event.  Particularly important if these records have to be updated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * A protocol, guideline, orderset or other definition that was adhered to in whole or in part by this event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public $instantiates = [];

    /**
     * A larger event of which this particular event is a component or step.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $partOf = [];

    /**
     * Will generally be set to show that the administration has been completed.  For some long running administrations such as infusions it is possible for an administration to be started but not completed or it may be paused while some other process is under way.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMedicationAdministrationStatus
     */
    public $status = null;

    /**
     * Indicates the type of medication administration and where the medication is expected to be consumed or administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $medicationCodeableConcept = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $medicationReference = null;

    /**
     * The person or animal or group receiving the medication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The visit, admission or other contact between patient and health care provider the medication administration was performed as part of.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * Additional information (for example, patient height and weight) that supports the administration of the medication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $supportingInformation = [];

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $effectiveDateTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $effectivePeriod = null;

    /**
     * Indicates who or what performed the medication administration and how they were involved.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicationAdministration\FHIRMedicationAdministrationPerformer[]
     */
    public $performer = [];

    /**
     * A code indicating why the administration was not performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $statusReason = [];

    /**
     * A code indicating why the medication was given.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $reasonCode = [];

    /**
     * Condition or observation that supports why the medication was administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $reasonReference = [];

    /**
     * The original request, instruction or authority to perform the administration.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $request = null;

    /**
     * The device used in administering the medication to the patient.  For example, a particular infusion pump.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $device = [];

    /**
     * Extra information about the medication administration that is not conveyed by the other attributes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public $note = [];

    /**
     * Describes the medication dosage information details e.g. dose, rate, site, route, etc.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage
     */
    public $dosage = null;

    /**
     * A summary of the events of interest that have occurred, such as when the administration was verified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $eventHistory = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicationAdministration';

    /**
     * External identifier - FHIR will generate its own internal identifiers (probably URLs) which do not need to be explicitly managed by the resource.  The identifier here is one that would be used by another non-FHIR system - for example an automated medication pump would provide a record each time it operated; an administration while the patient was off the ward might be made with a different system and entered after the event.  Particularly important if these records have to be updated.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * External identifier - FHIR will generate its own internal identifiers (probably URLs) which do not need to be explicitly managed by the resource.  The identifier here is one that would be used by another non-FHIR system - for example an automated medication pump would provide a record each time it operated; an administration while the patient was off the ward might be made with a different system and entered after the event.  Particularly important if these records have to be updated.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A protocol, guideline, orderset or other definition that was adhered to in whole or in part by this event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public function getInstantiates() {
        return $this->instantiates;
    }

    /**
     * A protocol, guideline, orderset or other definition that was adhered to in whole or in part by this event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $instantiates
     * @return $this
     */
    public function addInstantiates($instantiates) {
        $this->instantiates[] = $instantiates;
        return $this;
    }

    /**
     * A larger event of which this particular event is a component or step.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getPartOf() {
        return $this->partOf;
    }

    /**
     * A larger event of which this particular event is a component or step.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $partOf
     * @return $this
     */
    public function addPartOf($partOf) {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * Will generally be set to show that the administration has been completed.  For some long running administrations such as infusions it is possible for an administration to be started but not completed or it may be paused while some other process is under way.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMedicationAdministrationStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Will generally be set to show that the administration has been completed.  For some long running administrations such as infusions it is possible for an administration to be started but not completed or it may be paused while some other process is under way.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMedicationAdministrationStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Indicates the type of medication administration and where the medication is expected to be consumed or administered.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * Indicates the type of medication administration and where the medication is expected to be consumed or administered.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function setCategory($category) {
        $this->category = $category;
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
     * The person or animal or group receiving the medication.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * The person or animal or group receiving the medication.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject) {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The visit, admission or other contact between patient and health care provider the medication administration was performed as part of.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext() {
        return $this->context;
    }

    /**
     * The visit, admission or other contact between patient and health care provider the medication administration was performed as part of.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $context
     * @return $this
     */
    public function setContext($context) {
        $this->context = $context;
        return $this;
    }

    /**
     * Additional information (for example, patient height and weight) that supports the administration of the medication.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getSupportingInformation() {
        return $this->supportingInformation;
    }

    /**
     * Additional information (for example, patient height and weight) that supports the administration of the medication.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $supportingInformation
     * @return $this
     */
    public function addSupportingInformation($supportingInformation) {
        $this->supportingInformation[] = $supportingInformation;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getEffectiveDateTime() {
        return $this->effectiveDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $effectiveDateTime
     * @return $this
     */
    public function setEffectiveDateTime($effectiveDateTime) {
        $this->effectiveDateTime = $effectiveDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getEffectivePeriod() {
        return $this->effectivePeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $effectivePeriod
     * @return $this
     */
    public function setEffectivePeriod($effectivePeriod) {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * Indicates who or what performed the medication administration and how they were involved.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicationAdministration\FHIRMedicationAdministrationPerformer[]
     */
    public function getPerformer() {
        return $this->performer;
    }

    /**
     * Indicates who or what performed the medication administration and how they were involved.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicationAdministration\FHIRMedicationAdministrationPerformer $performer
     * @return $this
     */
    public function addPerformer($performer) {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * A code indicating why the administration was not performed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getStatusReason() {
        return $this->statusReason;
    }

    /**
     * A code indicating why the administration was not performed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $statusReason
     * @return $this
     */
    public function addStatusReason($statusReason) {
        $this->statusReason[] = $statusReason;
        return $this;
    }

    /**
     * A code indicating why the medication was given.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode() {
        return $this->reasonCode;
    }

    /**
     * A code indicating why the medication was given.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return $this
     */
    public function addReasonCode($reasonCode) {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * Condition or observation that supports why the medication was administered.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getReasonReference() {
        return $this->reasonReference;
    }

    /**
     * Condition or observation that supports why the medication was administered.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $reasonReference
     * @return $this
     */
    public function addReasonReference($reasonReference) {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * The original request, instruction or authority to perform the administration.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequest() {
        return $this->request;
    }

    /**
     * The original request, instruction or authority to perform the administration.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $request
     * @return $this
     */
    public function setRequest($request) {
        $this->request = $request;
        return $this;
    }

    /**
     * The device used in administering the medication to the patient.  For example, a particular infusion pump.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getDevice() {
        return $this->device;
    }

    /**
     * The device used in administering the medication to the patient.  For example, a particular infusion pump.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $device
     * @return $this
     */
    public function addDevice($device) {
        $this->device[] = $device;
        return $this;
    }

    /**
     * Extra information about the medication administration that is not conveyed by the other attributes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote() {
        return $this->note;
    }

    /**
     * Extra information about the medication administration that is not conveyed by the other attributes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note) {
        $this->note[] = $note;
        return $this;
    }

    /**
     * Describes the medication dosage information details e.g. dose, rate, site, route, etc.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage
     */
    public function getDosage() {
        return $this->dosage;
    }

    /**
     * Describes the medication dosage information details e.g. dose, rate, site, route, etc.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage $dosage
     * @return $this
     */
    public function setDosage($dosage) {
        $this->dosage = $dosage;
        return $this;
    }

    /**
     * A summary of the events of interest that have occurred, such as when the administration was verified.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getEventHistory() {
        return $this->eventHistory;
    }

    /**
     * A summary of the events of interest that have occurred, such as when the administration was verified.
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
            if (isset($data['instantiates'])) {
                if (is_array($data['instantiates'])) {
                    foreach($data['instantiates'] as $d) {
                        $this->addInstantiates($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"instantiates" must be array of objects or null, '.gettype($data['instantiates']).' seen.');
                }
            }
            if (isset($data['partOf'])) {
                if (is_array($data['partOf'])) {
                    foreach($data['partOf'] as $d) {
                        $this->addPartOf($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"partOf" must be array of objects or null, '.gettype($data['partOf']).' seen.');
                }
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
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
            if (isset($data['effectiveDateTime'])) {
                $this->setEffectiveDateTime($data['effectiveDateTime']);
            }
            if (isset($data['effectivePeriod'])) {
                $this->setEffectivePeriod($data['effectivePeriod']);
            }
            if (isset($data['performer'])) {
                if (is_array($data['performer'])) {
                    foreach($data['performer'] as $d) {
                        $this->addPerformer($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"performer" must be array of objects or null, '.gettype($data['performer']).' seen.');
                }
            }
            if (isset($data['statusReason'])) {
                if (is_array($data['statusReason'])) {
                    foreach($data['statusReason'] as $d) {
                        $this->addStatusReason($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"statusReason" must be array of objects or null, '.gettype($data['statusReason']).' seen.');
                }
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
            if (isset($data['request'])) {
                $this->setRequest($data['request']);
            }
            if (isset($data['device'])) {
                if (is_array($data['device'])) {
                    foreach($data['device'] as $d) {
                        $this->addDevice($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"device" must be array of objects or null, '.gettype($data['device']).' seen.');
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
            if (isset($data['dosage'])) {
                $this->setDosage($data['dosage']);
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
        if (0 < count($this->instantiates)) {
            $json['instantiates'] = [];
            foreach($this->instantiates as $instantiates) {
                if (null !== $instantiates) $json['instantiates'][] = $instantiates;
            }
        }
        if (0 < count($this->partOf)) {
            $json['partOf'] = [];
            foreach($this->partOf as $partOf) {
                if (null !== $partOf) $json['partOf'][] = $partOf;
            }
        }
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->category)) $json['category'] = $this->category;
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
        if (isset($this->effectiveDateTime)) $json['effectiveDateTime'] = $this->effectiveDateTime;
        if (isset($this->effectivePeriod)) $json['effectivePeriod'] = $this->effectivePeriod;
        if (0 < count($this->performer)) {
            $json['performer'] = [];
            foreach($this->performer as $performer) {
                if (null !== $performer) $json['performer'][] = $performer;
            }
        }
        if (0 < count($this->statusReason)) {
            $json['statusReason'] = [];
            foreach($this->statusReason as $statusReason) {
                if (null !== $statusReason) $json['statusReason'][] = $statusReason;
            }
        }
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
        if (isset($this->request)) $json['request'] = $this->request;
        if (0 < count($this->device)) {
            $json['device'] = [];
            foreach($this->device as $device) {
                if (null !== $device) $json['device'][] = $device;
            }
        }
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                if (null !== $note) $json['note'][] = $note;
            }
        }
        if (isset($this->dosage)) $json['dosage'] = $this->dosage;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicationAdministration xmlns="http://hl7.org/fhir"></MedicationAdministration>');
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
        if (0 < count($this->partOf)) {
            foreach($this->partOf as $partOf) {
                $partOf->xmlSerialize(true, $sxe->addChild('partOf'));
            }
        }
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->category)) $this->category->xmlSerialize(true, $sxe->addChild('category'));
        if (isset($this->medicationCodeableConcept)) $this->medicationCodeableConcept->xmlSerialize(true, $sxe->addChild('medicationCodeableConcept'));
        if (isset($this->medicationReference)) $this->medicationReference->xmlSerialize(true, $sxe->addChild('medicationReference'));
        if (isset($this->subject)) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (isset($this->context)) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if (0 < count($this->supportingInformation)) {
            foreach($this->supportingInformation as $supportingInformation) {
                $supportingInformation->xmlSerialize(true, $sxe->addChild('supportingInformation'));
            }
        }
        if (isset($this->effectiveDateTime)) $this->effectiveDateTime->xmlSerialize(true, $sxe->addChild('effectiveDateTime'));
        if (isset($this->effectivePeriod)) $this->effectivePeriod->xmlSerialize(true, $sxe->addChild('effectivePeriod'));
        if (0 < count($this->performer)) {
            foreach($this->performer as $performer) {
                $performer->xmlSerialize(true, $sxe->addChild('performer'));
            }
        }
        if (0 < count($this->statusReason)) {
            foreach($this->statusReason as $statusReason) {
                $statusReason->xmlSerialize(true, $sxe->addChild('statusReason'));
            }
        }
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
        if (isset($this->request)) $this->request->xmlSerialize(true, $sxe->addChild('request'));
        if (0 < count($this->device)) {
            foreach($this->device as $device) {
                $device->xmlSerialize(true, $sxe->addChild('device'));
            }
        }
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if (isset($this->dosage)) $this->dosage->xmlSerialize(true, $sxe->addChild('dosage'));
        if (0 < count($this->eventHistory)) {
            foreach($this->eventHistory as $eventHistory) {
                $eventHistory->xmlSerialize(true, $sxe->addChild('eventHistory'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}