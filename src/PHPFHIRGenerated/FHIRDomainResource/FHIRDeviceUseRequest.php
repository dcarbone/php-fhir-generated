<?php namespace PHPFHIRGenerated\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;
use PHPFHIRGenerated\JsonSerializable;

/**
 * Represents a request for a patient to employ a medical device. The device may be an implantable device, or an external assistive device, such as a walker.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRDeviceUseRequest extends FHIRDomainResource implements JsonSerializable
{
    /**
     * Indicates the site on the subject's body where the device should be used ( i.e. the target site). (choose any one of bodySite*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $bodySiteCodeableConcept = null;

    /**
     * Indicates the site on the subject's body where the device should be used ( i.e. the target site). (choose any one of bodySite*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $bodySiteReference = null;

    /**
     * The status of the request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDeviceUseRequestStatus
     */
    public $status = null;

    /**
     * The details of the device  to be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $device = null;

    /**
     * An encounter that provides additional context in which this request is made.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * Identifiers assigned to this order by the orderer or by the receiver.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Reason or justification for the use of this device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $indication = array();

    /**
     * Details about this request that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $notes = array();

    /**
     * The proposed act must be performed if the indicated conditions occur, e.g.., shortness of breath, SpO2 less than x%.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $prnReason = array();

    /**
     * The time when the request was made.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $orderedOn = null;

    /**
     * The time at which the request was made/recorded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $recordedOn = null;

    /**
     * The patient who will use the device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The timing schedule for the use of the device The Schedule data type allows many different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013". (choose any one of timing*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public $timingTiming = null;

    /**
     * The timing schedule for the use of the device The Schedule data type allows many different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013". (choose any one of timing*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $timingPeriod = null;

    /**
     * The timing schedule for the use of the device The Schedule data type allows many different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013". (choose any one of timing*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $timingDateTime = null;

    /**
     * Characterizes how quickly the  use of device must be initiated. Includes concepts such as stat, urgent, routine.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDeviceUseRequestPriority
     */
    public $priority = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'DeviceUseRequest';

    /**
     * Indicates the site on the subject's body where the device should be used ( i.e. the target site). (choose any one of bodySite*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getBodySiteCodeableConcept()
    {
        return $this->bodySiteCodeableConcept;
    }

    /**
     * Indicates the site on the subject's body where the device should be used ( i.e. the target site). (choose any one of bodySite*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $bodySiteCodeableConcept
     * @return $this
     */
    public function setBodySiteCodeableConcept($bodySiteCodeableConcept)
    {
        $this->bodySiteCodeableConcept = $bodySiteCodeableConcept;
        return $this;
    }

    /**
     * Indicates the site on the subject's body where the device should be used ( i.e. the target site). (choose any one of bodySite*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getBodySiteReference()
    {
        return $this->bodySiteReference;
    }

    /**
     * Indicates the site on the subject's body where the device should be used ( i.e. the target site). (choose any one of bodySite*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $bodySiteReference
     * @return $this
     */
    public function setBodySiteReference($bodySiteReference)
    {
        $this->bodySiteReference = $bodySiteReference;
        return $this;
    }

    /**
     * The status of the request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDeviceUseRequestStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDeviceUseRequestStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The details of the device  to be used.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * The details of the device  to be used.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $device
     * @return $this
     */
    public function setDevice($device)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * An encounter that provides additional context in which this request is made.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * An encounter that provides additional context in which this request is made.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $encounter
     * @return $this
     */
    public function setEncounter($encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Identifiers assigned to this order by the orderer or by the receiver.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifiers assigned to this order by the orderer or by the receiver.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Reason or justification for the use of this device.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getIndication()
    {
        return $this->indication;
    }

    /**
     * Reason or justification for the use of this device.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $indication
     * @return $this
     */
    public function addIndication($indication)
    {
        $this->indication[] = $indication;
        return $this;
    }

    /**
     * Details about this request that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Details about this request that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString[] $notes
     * @return $this
     */
    public function addNotes($notes)
    {
        $this->notes[] = $notes;
        return $this;
    }

    /**
     * The proposed act must be performed if the indicated conditions occur, e.g.., shortness of breath, SpO2 less than x%.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getPrnReason()
    {
        return $this->prnReason;
    }

    /**
     * The proposed act must be performed if the indicated conditions occur, e.g.., shortness of breath, SpO2 less than x%.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $prnReason
     * @return $this
     */
    public function addPrnReason($prnReason)
    {
        $this->prnReason[] = $prnReason;
        return $this;
    }

    /**
     * The time when the request was made.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getOrderedOn()
    {
        return $this->orderedOn;
    }

    /**
     * The time when the request was made.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $orderedOn
     * @return $this
     */
    public function setOrderedOn($orderedOn)
    {
        $this->orderedOn = $orderedOn;
        return $this;
    }

    /**
     * The time at which the request was made/recorded.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getRecordedOn()
    {
        return $this->recordedOn;
    }

    /**
     * The time at which the request was made/recorded.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $recordedOn
     * @return $this
     */
    public function setRecordedOn($recordedOn)
    {
        $this->recordedOn = $recordedOn;
        return $this;
    }

    /**
     * The patient who will use the device.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The patient who will use the device.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The timing schedule for the use of the device The Schedule data type allows many different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013". (choose any one of timing*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getTimingTiming()
    {
        return $this->timingTiming;
    }

    /**
     * The timing schedule for the use of the device The Schedule data type allows many different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013". (choose any one of timing*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $timingTiming
     * @return $this
     */
    public function setTimingTiming($timingTiming)
    {
        $this->timingTiming = $timingTiming;
        return $this;
    }

    /**
     * The timing schedule for the use of the device The Schedule data type allows many different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013". (choose any one of timing*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getTimingPeriod()
    {
        return $this->timingPeriod;
    }

    /**
     * The timing schedule for the use of the device The Schedule data type allows many different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013". (choose any one of timing*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $timingPeriod
     * @return $this
     */
    public function setTimingPeriod($timingPeriod)
    {
        $this->timingPeriod = $timingPeriod;
        return $this;
    }

    /**
     * The timing schedule for the use of the device The Schedule data type allows many different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013". (choose any one of timing*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getTimingDateTime()
    {
        return $this->timingDateTime;
    }

    /**
     * The timing schedule for the use of the device The Schedule data type allows many different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013". (choose any one of timing*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $timingDateTime
     * @return $this
     */
    public function setTimingDateTime($timingDateTime)
    {
        $this->timingDateTime = $timingDateTime;
        return $this;
    }

    /**
     * Characterizes how quickly the  use of device must be initiated. Includes concepts such as stat, urgent, routine.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDeviceUseRequestPriority
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Characterizes how quickly the  use of device must be initiated. Includes concepts such as stat, urgent, routine.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDeviceUseRequestPriority $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
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
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (null !== $this->bodySiteCodeableConcept) $json['bodySiteCodeableConcept'] = $this->bodySiteCodeableConcept->jsonSerialize();
        if (null !== $this->bodySiteReference) $json['bodySiteReference'] = $this->bodySiteReference->jsonSerialize();
        if (null !== $this->status) $json['status'] = $this->status->jsonSerialize();
        if (null !== $this->device) $json['device'] = $this->device->jsonSerialize();
        if (null !== $this->encounter) $json['encounter'] = $this->encounter->jsonSerialize();
        if (0 < count($this->identifier)) {
            $json['identifier'] = array();
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier->jsonSerialize();
            }
        }
        if (0 < count($this->indication)) {
            $json['indication'] = array();
            foreach($this->indication as $indication) {
                $json['indication'][] = $indication->jsonSerialize();
            }
        }
        if (0 < count($this->notes)) {
            $json['notes'] = array();
            foreach($this->notes as $notes) {
                $json['notes'][] = $notes->jsonSerialize();
            }
        }
        if (0 < count($this->prnReason)) {
            $json['prnReason'] = array();
            foreach($this->prnReason as $prnReason) {
                $json['prnReason'][] = $prnReason->jsonSerialize();
            }
        }
        if (null !== $this->orderedOn) $json['orderedOn'] = $this->orderedOn->jsonSerialize();
        if (null !== $this->recordedOn) $json['recordedOn'] = $this->recordedOn->jsonSerialize();
        if (null !== $this->subject) $json['subject'] = $this->subject->jsonSerialize();
        if (null !== $this->timingTiming) $json['timingTiming'] = $this->timingTiming->jsonSerialize();
        if (null !== $this->timingPeriod) $json['timingPeriod'] = $this->timingPeriod->jsonSerialize();
        if (null !== $this->timingDateTime) $json['timingDateTime'] = $this->timingDateTime->jsonSerialize();
        if (null !== $this->priority) $json['priority'] = $this->priority->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<DeviceUseRequest xmlns="http://hl7.org/fhir"></DeviceUseRequest>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->bodySiteCodeableConcept) $this->bodySiteCodeableConcept->xmlSerialize(true, $sxe->addChild('bodySiteCodeableConcept'));
        if (null !== $this->bodySiteReference) $this->bodySiteReference->xmlSerialize(true, $sxe->addChild('bodySiteReference'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->device) $this->device->xmlSerialize(true, $sxe->addChild('device'));
        if (null !== $this->encounter) $this->encounter->xmlSerialize(true, $sxe->addChild('encounter'));
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (0 < count($this->indication)) {
            foreach($this->indication as $indication) {
                $indication->xmlSerialize(true, $sxe->addChild('indication'));
            }
        }
        if (0 < count($this->notes)) {
            foreach($this->notes as $notes) {
                $notes->xmlSerialize(true, $sxe->addChild('notes'));
            }
        }
        if (0 < count($this->prnReason)) {
            foreach($this->prnReason as $prnReason) {
                $prnReason->xmlSerialize(true, $sxe->addChild('prnReason'));
            }
        }
        if (null !== $this->orderedOn) $this->orderedOn->xmlSerialize(true, $sxe->addChild('orderedOn'));
        if (null !== $this->recordedOn) $this->recordedOn->xmlSerialize(true, $sxe->addChild('recordedOn'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->timingTiming) $this->timingTiming->xmlSerialize(true, $sxe->addChild('timingTiming'));
        if (null !== $this->timingPeriod) $this->timingPeriod->xmlSerialize(true, $sxe->addChild('timingPeriod'));
        if (null !== $this->timingDateTime) $this->timingDateTime->xmlSerialize(true, $sxe->addChild('timingDateTime'));
        if (null !== $this->priority) $this->priority->xmlSerialize(true, $sxe->addChild('priority'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}