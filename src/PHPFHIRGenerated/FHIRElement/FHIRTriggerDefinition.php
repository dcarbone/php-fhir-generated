<?php

namespace PHPFHIRGenerated\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming;

/**
 * A description of a triggering event. Triggering events can be named events, data events, or periodic, as determined by the type element.
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
     * A boolean-valued expression that is evaluated in the context of the container of the trigger definition and returns whether or not the trigger fires.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRExpression
     */
    public $condition = null;

    /**
     * The triggering data of the event (if this is a data trigger).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public $data = null;

    /**
     * A formal name for the event. This may be an absolute URI that identifies the event formally (e.g. from a trigger registry), or a simple relative URI that identifies the event in a local context.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The timing of the event (if this is a periodic trigger).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $timingDate = null;

    /**
     * The timing of the event (if this is a periodic trigger).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $timingDateTime = null;

    /**
     * The timing of the event (if this is a periodic trigger).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $timingReference = null;

    /**
     * The timing of the event (if this is a periodic trigger).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public $timingTiming = null;

    /**
     * The type of triggering event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTriggerType
     */
    public $type = null;

    /**
     * FHIRTriggerDefinition Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['condition'])) {
                $this->setCondition($data['condition']);
            }
            if (isset($data['data'])) {
                $this->setData($data['data']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['timingDate'])) {
                $this->setTimingDate($data['timingDate']);
            }
            if (isset($data['timingDateTime'])) {
                $this->setTimingDateTime($data['timingDateTime']);
            }
            if (isset($data['timingReference'])) {
                $this->setTimingReference($data['timingReference']);
            }
            if (isset($data['timingTiming'])) {
                $this->setTimingTiming($data['timingTiming']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * A boolean-valued expression that is evaluated in the context of the container of the trigger definition and returns whether or not the trigger fires.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRExpression
     * @return $this
     */
    public function setCondition(FHIRExpression $condition = null)
    {
        if (null === $condition) {
            return $this; 
        }
        $this->condition = $condition;
        return $this;
    }

    /**
     * A boolean-valued expression that is evaluated in the context of the container of the trigger definition and returns whether or not the trigger fires.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRExpression
     */
    public function getCondition()
    {
        return $this->condition;
    }


    /**
     * The triggering data of the event (if this is a data trigger).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     * @return $this
     */
    public function setData(FHIRDataRequirement $data = null)
    {
        if (null === $data) {
            return $this; 
        }
        $this->data = $data;
        return $this;
    }

    /**
     * The triggering data of the event (if this is a data trigger).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public function getData()
    {
        return $this->data;
    }


    /**
     * A formal name for the event. This may be an absolute URI that identifies the event formally (e.g. from a trigger registry), or a simple relative URI that identifies the event in a local context.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setName($name)
    {
        if (null === $name) {
            return $this; 
        }
        if (is_scalar($name)) {
            $name = new FHIRString($name);
        }
        if (!($name instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTriggerDefinition::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * A formal name for the event. This may be an absolute URI that identifies the event formally (e.g. from a trigger registry), or a simple relative URI that identifies the event in a local context.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * The timing of the event (if this is a periodic trigger).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setTimingDate($timingDate)
    {
        if (null === $timingDate) {
            return $this; 
        }
        if (is_scalar($timingDate)) {
            $timingDate = new FHIRDate($timingDate);
        }
        if (!($timingDate instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTriggerDefinition::setTimingDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($timingDate)
            ));
        }
        $this->timingDate = $timingDate;
        return $this;
    }

    /**
     * The timing of the event (if this is a periodic trigger).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getTimingDate()
    {
        return $this->timingDate;
    }


    /**
     * The timing of the event (if this is a periodic trigger).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setTimingDateTime($timingDateTime)
    {
        if (null === $timingDateTime) {
            return $this; 
        }
        if (is_scalar($timingDateTime)) {
            $timingDateTime = new FHIRDateTime($timingDateTime);
        }
        if (!($timingDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTriggerDefinition::setTimingDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($timingDateTime)
            ));
        }
        $this->timingDateTime = $timingDateTime;
        return $this;
    }

    /**
     * The timing of the event (if this is a periodic trigger).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getTimingDateTime()
    {
        return $this->timingDateTime;
    }


    /**
     * The timing of the event (if this is a periodic trigger).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setTimingReference(FHIRReference $timingReference = null)
    {
        if (null === $timingReference) {
            return $this; 
        }
        $this->timingReference = $timingReference;
        return $this;
    }

    /**
     * The timing of the event (if this is a periodic trigger).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getTimingReference()
    {
        return $this->timingReference;
    }


    /**
     * The timing of the event (if this is a periodic trigger).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     * @return $this
     */
    public function setTimingTiming(FHIRTiming $timingTiming = null)
    {
        if (null === $timingTiming) {
            return $this; 
        }
        $this->timingTiming = $timingTiming;
        return $this;
    }

    /**
     * The timing of the event (if this is a periodic trigger).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getTimingTiming()
    {
        return $this->timingTiming;
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
        if (null !== ($v = $this->getCondition())) {
            $a['condition'] = $v;
        }
        if (null !== ($v = $this->getData())) {
            $a['data'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getTimingDate())) {
            $a['timingDate'] = $v;
        }
        if (null !== ($v = $this->getTimingDateTime())) {
            $a['timingDateTime'] = $v;
        }
        if (null !== ($v = $this->getTimingReference())) {
            $a['timingReference'] = $v;
        }
        if (null !== ($v = $this->getTimingTiming())) {
            $a['timingTiming'] = $v;
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
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}