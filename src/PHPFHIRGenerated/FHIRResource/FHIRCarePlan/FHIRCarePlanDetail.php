<?php namespace PHPFHIRGenerated\FHIRResource\FHIRCarePlan;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * Describes the intention of how one or more practitioners intend to deliver care for a particular patient, group or community for a period of time, possibly limited to care for a specific condition or set of conditions.
 */
class FHIRCarePlanDetail extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * A description of the kind of resource the in-line definition of a care plan activity is representing.  The CarePlan.activity.detail is an in-line definition when a resource is not referenced using CarePlan.activity.reference.  For example, a MedicationRequest, a ServiceRequest, or a CommunicationRequest.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityKind
     */
    public $kind = null;

    /**
     * Identifies the protocol, questionnaire, guideline or other specification the planned activity should be conducted in accordance with.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $instantiates = null;

    /**
     * Detailed description of the type of planned activity; e.g. What lab test, what procedure, what kind of encounter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * Provides the rationale that drove the inclusion of this particular activity as part of the plan or the reason why the activity was prohibited.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $reasonCode = [];

    /**
     * Indicates another resource, such as the health condition(s), whose existence justifies this request and drove the inclusion of this particular activity as part of the plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $reasonReference = [];

    /**
     * Internal reference that identifies the goals that this activity is intended to contribute towards meeting.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $goal = [];

    /**
     * Identifies what progress is being made for the specific activity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityStatus
     */
    public $status = null;

    /**
     * Provides reason why the activity isn't yet started, is on hold, was cancelled, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $statusReason = null;

    /**
     * If true, indicates that the described activity is one that must NOT be engaged in when following the plan.  If false, indicates that the described activity is one that should be engaged in when following the plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $prohibited = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public $scheduledTiming = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $scheduledPeriod = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $scheduledString = null;

    /**
     * Identifies the facility where the activity will occur; e.g. home, hospital, specific clinic, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * Identifies who's expected to be involved in the activity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $performer = [];

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $productCodeableConcept = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $productReference = null;

    /**
     * Identifies the quantity expected to be consumed in a given day.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $dailyAmount = null;

    /**
     * Identifies the quantity expected to be supplied, administered or consumed by the subject.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

    /**
     * This provides a textual description of constraints on the intended activity occurrence, including relation to other activities.  It may also include objectives, pre-conditions and end-conditions.  Finally, it may convey specifics about the activity such as body site, method, route, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'CarePlan.Detail';

    /**
     * A description of the kind of resource the in-line definition of a care plan activity is representing.  The CarePlan.activity.detail is an in-line definition when a resource is not referenced using CarePlan.activity.reference.  For example, a MedicationRequest, a ServiceRequest, or a CommunicationRequest.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityKind
     */
    public function getKind() {
        return $this->kind;
    }

    /**
     * A description of the kind of resource the in-line definition of a care plan activity is representing.  The CarePlan.activity.detail is an in-line definition when a resource is not referenced using CarePlan.activity.reference.  For example, a MedicationRequest, a ServiceRequest, or a CommunicationRequest.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityKind $kind
     * @return $this
     */
    public function setKind($kind) {
        $this->kind = $kind;
        return $this;
    }

    /**
     * Identifies the protocol, questionnaire, guideline or other specification the planned activity should be conducted in accordance with.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getInstantiates() {
        return $this->instantiates;
    }

    /**
     * Identifies the protocol, questionnaire, guideline or other specification the planned activity should be conducted in accordance with.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $instantiates
     * @return $this
     */
    public function setInstantiates($instantiates) {
        $this->instantiates = $instantiates;
        return $this;
    }

    /**
     * Detailed description of the type of planned activity; e.g. What lab test, what procedure, what kind of encounter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Detailed description of the type of planned activity; e.g. What lab test, what procedure, what kind of encounter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Provides the rationale that drove the inclusion of this particular activity as part of the plan or the reason why the activity was prohibited.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode() {
        return $this->reasonCode;
    }

    /**
     * Provides the rationale that drove the inclusion of this particular activity as part of the plan or the reason why the activity was prohibited.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return $this
     */
    public function addReasonCode($reasonCode) {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * Indicates another resource, such as the health condition(s), whose existence justifies this request and drove the inclusion of this particular activity as part of the plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getReasonReference() {
        return $this->reasonReference;
    }

    /**
     * Indicates another resource, such as the health condition(s), whose existence justifies this request and drove the inclusion of this particular activity as part of the plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $reasonReference
     * @return $this
     */
    public function addReasonReference($reasonReference) {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * Internal reference that identifies the goals that this activity is intended to contribute towards meeting.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getGoal() {
        return $this->goal;
    }

    /**
     * Internal reference that identifies the goals that this activity is intended to contribute towards meeting.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $goal
     * @return $this
     */
    public function addGoal($goal) {
        $this->goal[] = $goal;
        return $this;
    }

    /**
     * Identifies what progress is being made for the specific activity.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Identifies what progress is being made for the specific activity.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Provides reason why the activity isn't yet started, is on hold, was cancelled, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getStatusReason() {
        return $this->statusReason;
    }

    /**
     * Provides reason why the activity isn't yet started, is on hold, was cancelled, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $statusReason
     * @return $this
     */
    public function setStatusReason($statusReason) {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * If true, indicates that the described activity is one that must NOT be engaged in when following the plan.  If false, indicates that the described activity is one that should be engaged in when following the plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getProhibited() {
        return $this->prohibited;
    }

    /**
     * If true, indicates that the described activity is one that must NOT be engaged in when following the plan.  If false, indicates that the described activity is one that should be engaged in when following the plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $prohibited
     * @return $this
     */
    public function setProhibited($prohibited) {
        $this->prohibited = $prohibited;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getScheduledTiming() {
        return $this->scheduledTiming;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $scheduledTiming
     * @return $this
     */
    public function setScheduledTiming($scheduledTiming) {
        $this->scheduledTiming = $scheduledTiming;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getScheduledPeriod() {
        return $this->scheduledPeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $scheduledPeriod
     * @return $this
     */
    public function setScheduledPeriod($scheduledPeriod) {
        $this->scheduledPeriod = $scheduledPeriod;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getScheduledString() {
        return $this->scheduledString;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $scheduledString
     * @return $this
     */
    public function setScheduledString($scheduledString) {
        $this->scheduledString = $scheduledString;
        return $this;
    }

    /**
     * Identifies the facility where the activity will occur; e.g. home, hospital, specific clinic, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation() {
        return $this->location;
    }

    /**
     * Identifies the facility where the activity will occur; e.g. home, hospital, specific clinic, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $location
     * @return $this
     */
    public function setLocation($location) {
        $this->location = $location;
        return $this;
    }

    /**
     * Identifies who's expected to be involved in the activity.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getPerformer() {
        return $this->performer;
    }

    /**
     * Identifies who's expected to be involved in the activity.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $performer
     * @return $this
     */
    public function addPerformer($performer) {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getProductCodeableConcept() {
        return $this->productCodeableConcept;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $productCodeableConcept
     * @return $this
     */
    public function setProductCodeableConcept($productCodeableConcept) {
        $this->productCodeableConcept = $productCodeableConcept;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProductReference() {
        return $this->productReference;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $productReference
     * @return $this
     */
    public function setProductReference($productReference) {
        $this->productReference = $productReference;
        return $this;
    }

    /**
     * Identifies the quantity expected to be consumed in a given day.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getDailyAmount() {
        return $this->dailyAmount;
    }

    /**
     * Identifies the quantity expected to be consumed in a given day.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $dailyAmount
     * @return $this
     */
    public function setDailyAmount($dailyAmount) {
        $this->dailyAmount = $dailyAmount;
        return $this;
    }

    /**
     * Identifies the quantity expected to be supplied, administered or consumed by the subject.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getQuantity() {
        return $this->quantity;
    }

    /**
     * Identifies the quantity expected to be supplied, administered or consumed by the subject.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $quantity
     * @return $this
     */
    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * This provides a textual description of constraints on the intended activity occurrence, including relation to other activities.  It may also include objectives, pre-conditions and end-conditions.  Finally, it may convey specifics about the activity such as body site, method, route, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * This provides a textual description of constraints on the intended activity occurrence, including relation to other activities.  It may also include objectives, pre-conditions and end-conditions.  Finally, it may convey specifics about the activity such as body site, method, route, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description) {
        $this->description = $description;
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
            if (isset($data['kind'])) {
                $this->setKind($data['kind']);
            }
            if (isset($data['instantiates'])) {
                $this->setInstantiates($data['instantiates']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
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
            if (isset($data['goal'])) {
                if (is_array($data['goal'])) {
                    foreach($data['goal'] as $d) {
                        $this->addGoal($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"goal" must be array of objects or null, '.gettype($data['goal']).' seen.');
                }
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['statusReason'])) {
                $this->setStatusReason($data['statusReason']);
            }
            if (isset($data['prohibited'])) {
                $this->setProhibited($data['prohibited']);
            }
            if (isset($data['scheduledTiming'])) {
                $this->setScheduledTiming($data['scheduledTiming']);
            }
            if (isset($data['scheduledPeriod'])) {
                $this->setScheduledPeriod($data['scheduledPeriod']);
            }
            if (isset($data['scheduledString'])) {
                $this->setScheduledString($data['scheduledString']);
            }
            if (isset($data['location'])) {
                $this->setLocation($data['location']);
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
            if (isset($data['productCodeableConcept'])) {
                $this->setProductCodeableConcept($data['productCodeableConcept']);
            }
            if (isset($data['productReference'])) {
                $this->setProductReference($data['productReference']);
            }
            if (isset($data['dailyAmount'])) {
                $this->setDailyAmount($data['dailyAmount']);
            }
            if (isset($data['quantity'])) {
                $this->setQuantity($data['quantity']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
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
        if (isset($this->kind)) $json['kind'] = $this->kind;
        if (isset($this->instantiates)) $json['instantiates'] = $this->instantiates;
        if (isset($this->code)) $json['code'] = $this->code;
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
        if (0 < count($this->goal)) {
            $json['goal'] = [];
            foreach($this->goal as $goal) {
                if (null !== $goal) $json['goal'][] = $goal;
            }
        }
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->statusReason)) $json['statusReason'] = $this->statusReason;
        if (isset($this->prohibited)) $json['prohibited'] = $this->prohibited;
        if (isset($this->scheduledTiming)) $json['scheduledTiming'] = $this->scheduledTiming;
        if (isset($this->scheduledPeriod)) $json['scheduledPeriod'] = $this->scheduledPeriod;
        if (isset($this->scheduledString)) $json['scheduledString'] = $this->scheduledString;
        if (isset($this->location)) $json['location'] = $this->location;
        if (0 < count($this->performer)) {
            $json['performer'] = [];
            foreach($this->performer as $performer) {
                if (null !== $performer) $json['performer'][] = $performer;
            }
        }
        if (isset($this->productCodeableConcept)) $json['productCodeableConcept'] = $this->productCodeableConcept;
        if (isset($this->productReference)) $json['productReference'] = $this->productReference;
        if (isset($this->dailyAmount)) $json['dailyAmount'] = $this->dailyAmount;
        if (isset($this->quantity)) $json['quantity'] = $this->quantity;
        if (isset($this->description)) $json['description'] = $this->description;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<CarePlanDetail xmlns="http://hl7.org/fhir"></CarePlanDetail>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->kind)) $this->kind->xmlSerialize(true, $sxe->addChild('kind'));
        if (isset($this->instantiates)) $this->instantiates->xmlSerialize(true, $sxe->addChild('instantiates'));
        if (isset($this->code)) $this->code->xmlSerialize(true, $sxe->addChild('code'));
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
        if (0 < count($this->goal)) {
            foreach($this->goal as $goal) {
                $goal->xmlSerialize(true, $sxe->addChild('goal'));
            }
        }
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->statusReason)) $this->statusReason->xmlSerialize(true, $sxe->addChild('statusReason'));
        if (isset($this->prohibited)) $this->prohibited->xmlSerialize(true, $sxe->addChild('prohibited'));
        if (isset($this->scheduledTiming)) $this->scheduledTiming->xmlSerialize(true, $sxe->addChild('scheduledTiming'));
        if (isset($this->scheduledPeriod)) $this->scheduledPeriod->xmlSerialize(true, $sxe->addChild('scheduledPeriod'));
        if (isset($this->scheduledString)) $this->scheduledString->xmlSerialize(true, $sxe->addChild('scheduledString'));
        if (isset($this->location)) $this->location->xmlSerialize(true, $sxe->addChild('location'));
        if (0 < count($this->performer)) {
            foreach($this->performer as $performer) {
                $performer->xmlSerialize(true, $sxe->addChild('performer'));
            }
        }
        if (isset($this->productCodeableConcept)) $this->productCodeableConcept->xmlSerialize(true, $sxe->addChild('productCodeableConcept'));
        if (isset($this->productReference)) $this->productReference->xmlSerialize(true, $sxe->addChild('productReference'));
        if (isset($this->dailyAmount)) $this->dailyAmount->xmlSerialize(true, $sxe->addChild('dailyAmount'));
        if (isset($this->quantity)) $this->quantity->xmlSerialize(true, $sxe->addChild('quantity'));
        if (isset($this->description)) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}