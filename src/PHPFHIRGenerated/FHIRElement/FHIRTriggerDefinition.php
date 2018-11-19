<?php

namespace PHPFHIRGenerated\FHIRElement;

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

use PHPFHIRGenerated\FHIRElement;

/**
 * A description of a triggering event.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRTriggerDefinition
 * @package PHPFHIRGenerated\FHIRElement
 */
class FHIRTriggerDefinition extends FHIRElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'TriggerDefinition';

    /**
     * The triggering data of the event (if this is a data trigger).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    private $eventData = null;

    /**
     * The name of the event (if this is a named-event trigger).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $eventName = null;

    /**
     * The timing of the event (if this is a period trigger). (choose any one of eventTiming*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    private $eventTimingDate = null;

    /**
     * The timing of the event (if this is a period trigger). (choose any one of eventTiming*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $eventTimingDateTime = null;

    /**
     * The timing of the event (if this is a period trigger). (choose any one of eventTiming*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $eventTimingReference = null;

    /**
     * The timing of the event (if this is a period trigger). (choose any one of eventTiming*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    private $eventTimingTiming = null;

    /**
     * The type of triggering event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTriggerType
     */
    private $type = null;

    /**
     * FHIRTriggerDefinition Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['eventData'])) {
                $value = $data['eventData'];
                if (is_array($value)) {
                    $value = new FHIRDataRequirement($value);
                } 
                if (!($value instanceof FHIRDataRequirement)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition::__construct - Property \"eventData\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement or data to construct type, saw ".gettype($value));
                }
                $this->setEventData($value);
            }
            if (isset($data['eventName'])) {
                $value = $data['eventName'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition::__construct - Property \"eventName\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setEventName($value);
            }
            if (isset($data['eventTimingDate'])) {
                $value = $data['eventTimingDate'];
                if (is_array($value)) {
                    $value = new FHIRDate($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDate($value);
                }
                if (!($value instanceof FHIRDate)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition::__construct - Property \"eventTimingDate\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or data to construct type, saw ".gettype($value));
                }
                $this->setEventTimingDate($value);
            }
            if (isset($data['eventTimingDateTime'])) {
                $value = $data['eventTimingDateTime'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition::__construct - Property \"eventTimingDateTime\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value));
                }
                $this->setEventTimingDateTime($value);
            }
            if (isset($data['eventTimingReference'])) {
                $value = $data['eventTimingReference'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition::__construct - Property \"eventTimingReference\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setEventTimingReference($value);
            }
            if (isset($data['eventTimingTiming'])) {
                $value = $data['eventTimingTiming'];
                if (is_array($value)) {
                    $value = new FHIRTiming($value);
                } 
                if (!($value instanceof FHIRTiming)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition::__construct - Property \"eventTimingTiming\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRTiming or data to construct type, saw ".gettype($value));
                }
                $this->setEventTimingTiming($value);
            }
            if (isset($data['type'])) {
                $value = $data['type'];
                if (is_array($value)) {
                    $value = new FHIRTriggerType($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRTriggerType($value);
                }
                if (!($value instanceof FHIRTriggerType)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition::__construct - Property \"type\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRTriggerType or data to construct type, saw ".gettype($value));
                }
                $this->setType($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * The triggering data of the event (if this is a data trigger).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     * @return $this
     */
    public function setEventData(FHIRDataRequirement $eventData = null)
    {
        if (null === $eventData) {
            return $this; 
        }
        $this->eventData = $eventData;
        return $this;
    }

    /**
     * The triggering data of the event (if this is a data trigger).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public function getEventData()
    {
        return $this->eventData;
    }

    /**
     * The name of the event (if this is a named-event trigger).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setEventName($eventName)
    {
        if (null === $eventName) {
            return $this; 
        }
        if (is_scalar($eventName)) {
            $eventName = new FHIRString($eventName);
        }
        if (!($eventName instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTriggerDefinition::setEventName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($eventName)
            ));
        }
        $this->eventName = $eventName;
        return $this;
    }

    /**
     * The name of the event (if this is a named-event trigger).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * The timing of the event (if this is a period trigger). (choose any one of eventTiming*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setEventTimingDate($eventTimingDate)
    {
        if (null === $eventTimingDate) {
            return $this; 
        }
        if (is_scalar($eventTimingDate)) {
            $eventTimingDate = new FHIRDate($eventTimingDate);
        }
        if (!($eventTimingDate instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTriggerDefinition::setEventTimingDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($eventTimingDate)
            ));
        }
        $this->eventTimingDate = $eventTimingDate;
        return $this;
    }

    /**
     * The timing of the event (if this is a period trigger). (choose any one of eventTiming*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getEventTimingDate()
    {
        return $this->eventTimingDate;
    }

    /**
     * The timing of the event (if this is a period trigger). (choose any one of eventTiming*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setEventTimingDateTime($eventTimingDateTime)
    {
        if (null === $eventTimingDateTime) {
            return $this; 
        }
        if (is_scalar($eventTimingDateTime)) {
            $eventTimingDateTime = new FHIRDateTime($eventTimingDateTime);
        }
        if (!($eventTimingDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTriggerDefinition::setEventTimingDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($eventTimingDateTime)
            ));
        }
        $this->eventTimingDateTime = $eventTimingDateTime;
        return $this;
    }

    /**
     * The timing of the event (if this is a period trigger). (choose any one of eventTiming*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getEventTimingDateTime()
    {
        return $this->eventTimingDateTime;
    }

    /**
     * The timing of the event (if this is a period trigger). (choose any one of eventTiming*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setEventTimingReference(FHIRReference $eventTimingReference = null)
    {
        if (null === $eventTimingReference) {
            return $this; 
        }
        $this->eventTimingReference = $eventTimingReference;
        return $this;
    }

    /**
     * The timing of the event (if this is a period trigger). (choose any one of eventTiming*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEventTimingReference()
    {
        return $this->eventTimingReference;
    }

    /**
     * The timing of the event (if this is a period trigger). (choose any one of eventTiming*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTiming
     * @return $this
     */
    public function setEventTimingTiming(FHIRTiming $eventTimingTiming = null)
    {
        if (null === $eventTimingTiming) {
            return $this; 
        }
        $this->eventTimingTiming = $eventTimingTiming;
        return $this;
    }

    /**
     * The timing of the event (if this is a period trigger). (choose any one of eventTiming*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getEventTimingTiming()
    {
        return $this->eventTimingTiming;
    }

    /**
     * The type of triggering event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTriggerType
     * @return $this
     */
    public function setType($type)
    {
        if (null === $type) {
            return $this; 
        }
        if (is_scalar($type)) {
            $type = new FHIRTriggerType($type);
        }
        if (!($type instanceof FHIRTriggerType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTriggerDefinition::setType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRTriggerType or appropriate scalar value, %s seen.',
                gettype($type)
            ));
        }
        $this->type = $type;
        return $this;
    }

    /**
     * The type of triggering event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTriggerType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getEventData())) {
            $a['eventData'] = $v;
        }
        if (null !== ($v = $this->getEventName())) {
            $a['eventName'] = $v;
        }
        if (null !== ($v = $this->getEventTimingDate())) {
            $a['eventTimingDate'] = $v;
        }
        if (null !== ($v = $this->getEventTimingDateTime())) {
            $a['eventTimingDateTime'] = $v;
        }
        if (null !== ($v = $this->getEventTimingReference())) {
            $a['eventTimingReference'] = $v;
        }
        if (null !== ($v = $this->getEventTimingTiming())) {
            $a['eventTimingTiming'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<TriggerDefinition xmlns="http://hl7.org/fhir"></TriggerDefinition>');
        }
        if (null !== ($v = $this->getEventData())) {
            $v->xmlSerialize(true, $sxe->addChild('eventData'));
        }
        if (null !== ($v = $this->getEventName())) {
            $v->xmlSerialize(true, $sxe->addChild('eventName'));
        }
        if (null !== ($v = $this->getEventTimingDate())) {
            $v->xmlSerialize(true, $sxe->addChild('eventTimingDate'));
        }
        if (null !== ($v = $this->getEventTimingDateTime())) {
            $v->xmlSerialize(true, $sxe->addChild('eventTimingDateTime'));
        }
        if (null !== ($v = $this->getEventTimingReference())) {
            $v->xmlSerialize(true, $sxe->addChild('eventTimingReference'));
        }
        if (null !== ($v = $this->getEventTimingTiming())) {
            $v->xmlSerialize(true, $sxe->addChild('eventTimingTiming'));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize(true, $sxe->addChild('type'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}