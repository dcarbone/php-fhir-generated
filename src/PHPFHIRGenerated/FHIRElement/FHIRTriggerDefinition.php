<?php namespace PHPFHIRGenerated\FHIRElement;

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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement;

/**
 * A description of a triggering event.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRTriggerDefinition extends FHIRElement implements \JsonSerializable
{
    /**
     * The type of triggering event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTriggerType
     */
    public $type = null;

    /**
     * The name of the event (if this is a named-event trigger).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $eventName = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public $eventTimingTiming = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $eventTimingReference = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $eventTimingDate = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $eventTimingDateTime = null;

    /**
     * The triggering data of the event (if this is a data trigger).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public $eventData = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'TriggerDefinition';

    /**
     * The type of triggering event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTriggerType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of triggering event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTriggerType $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * The name of the event (if this is a named-event trigger).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * The name of the event (if this is a named-event trigger).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $eventName
     * @return $this
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getEventTimingTiming()
    {
        return $this->eventTimingTiming;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $eventTimingTiming
     * @return $this
     */
    public function setEventTimingTiming($eventTimingTiming)
    {
        $this->eventTimingTiming = $eventTimingTiming;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEventTimingReference()
    {
        return $this->eventTimingReference;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $eventTimingReference
     * @return $this
     */
    public function setEventTimingReference($eventTimingReference)
    {
        $this->eventTimingReference = $eventTimingReference;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getEventTimingDate()
    {
        return $this->eventTimingDate;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $eventTimingDate
     * @return $this
     */
    public function setEventTimingDate($eventTimingDate)
    {
        $this->eventTimingDate = $eventTimingDate;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getEventTimingDateTime()
    {
        return $this->eventTimingDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $eventTimingDateTime
     * @return $this
     */
    public function setEventTimingDateTime($eventTimingDateTime)
    {
        $this->eventTimingDateTime = $eventTimingDateTime;
        return $this;
    }

    /**
     * The triggering data of the event (if this is a data trigger).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public function getEventData()
    {
        return $this->eventData;
    }

    /**
     * The triggering data of the event (if this is a data trigger).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement $eventData
     * @return $this
     */
    public function setEventData($eventData)
    {
        $this->eventData = $eventData;
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
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->eventName) $json['eventName'] = $this->eventName;
        if (null !== $this->eventTimingTiming) $json['eventTimingTiming'] = $this->eventTimingTiming;
        if (null !== $this->eventTimingReference) $json['eventTimingReference'] = $this->eventTimingReference;
        if (null !== $this->eventTimingDate) $json['eventTimingDate'] = $this->eventTimingDate;
        if (null !== $this->eventTimingDateTime) $json['eventTimingDateTime'] = $this->eventTimingDateTime;
        if (null !== $this->eventData) $json['eventData'] = $this->eventData;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<TriggerDefinition xmlns="http://hl7.org/fhir"></TriggerDefinition>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->eventName) $this->eventName->xmlSerialize(true, $sxe->addChild('eventName'));
        if (null !== $this->eventTimingTiming) $this->eventTimingTiming->xmlSerialize(true, $sxe->addChild('eventTimingTiming'));
        if (null !== $this->eventTimingReference) $this->eventTimingReference->xmlSerialize(true, $sxe->addChild('eventTimingReference'));
        if (null !== $this->eventTimingDate) $this->eventTimingDate->xmlSerialize(true, $sxe->addChild('eventTimingDate'));
        if (null !== $this->eventTimingDateTime) $this->eventTimingDateTime->xmlSerialize(true, $sxe->addChild('eventTimingDateTime'));
        if (null !== $this->eventData) $this->eventData->xmlSerialize(true, $sxe->addChild('eventData'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}