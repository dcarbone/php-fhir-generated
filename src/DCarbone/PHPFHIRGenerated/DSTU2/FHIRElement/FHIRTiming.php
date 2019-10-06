<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:04+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming\FHIRTimingRepeat;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * Specifies an event that may occur multiple times. Timing schedules are used to
 * record when things are expected or requested to occur. The most common usage is
 * in dosage instructions for medications. They are also used when planning care of
 * various kinds.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRTiming
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement
 */
class FHIRTiming extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_TIMING;

    const FIELD_CODE = 'code';
    const FIELD_EVENT = 'event';
    const FIELD_EVENT_EXT = '_event';
    const FIELD_REPEAT = 'repeat';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code for the timing pattern. Some codes such as BID are ubiquitous, but many
     * institutions define their own additional codes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    private $code = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies specific times when the event occurs.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime[]
     */
    private $event = [];
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are expected or requested to occur. The most common usage is
     * in dosage instructions for medications. They are also used when planning care of
     * various kinds.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A set of rules that describe when the event should occur.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming\FHIRTimingRepeat
     */
    private $repeat = null;

    /**
     * FHIRTiming Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTiming::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_EVENT])) {
            $ext = (isset($data[self::FIELD_EVENT_EXT]) && is_array($data[self::FIELD_EVENT_EXT]))
                ? $data[self::FIELD_EVENT_EXT]
                : null;
            if (is_array($data[self::FIELD_EVENT])) {
                foreach($data[self::FIELD_EVENT] as $i => $v) {
                    if ($v instanceof FHIRDateTime) {
                        $this->addEvent($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addEvent(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addEvent(new FHIRDateTime($v));
                    }
                }
            } elseif ($data[self::FIELD_EVENT] instanceof FHIRDateTime) {
                $this->addEvent($data[self::FIELD_EVENT]);
            } elseif ($ext && is_scalar($data[self::FIELD_EVENT])) {
                $this->addEvent(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_EVENT]] + $ext));
            } else {
                $this->addEvent(new FHIRDateTime($data[self::FIELD_EVENT]));
            }
        }
        if (isset($data[self::FIELD_REPEAT])) {
            if ($data[self::FIELD_REPEAT] instanceof FHIRTimingRepeat) {
                $this->setRepeat($data[self::FIELD_REPEAT]);
            } else {
                $this->setRepeat(new FHIRTimingRepeat($data[self::FIELD_REPEAT]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code for the timing pattern. Some codes such as BID are ubiquitous, but many
     * institutions define their own additional codes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code for the timing pattern. Some codes such as BID are ubiquitous, but many
     * institutions define their own additional codes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $code
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies specific times when the event occurs.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies specific times when the event occurs.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $event
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming
     */
    public function addEvent($event = null)
    {
        if (null === $event) {
            $this->event = null;
            return $this;
        }
        if ($event instanceof FHIRDateTime) {
            $this->event = $event;
            return $this;
        }
        $this->event = new FHIRDateTime($event);
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies specific times when the event occurs.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime[] $event
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming
     */
    public function setEvent(array $event = [])
    {
        $this->event = [];
        if ([] === $event) {
            return $this;
        }
        foreach($event as $v) {
            if ($v instanceof FHIRDateTime) {
                $this->addEvent($v);
            } else {
                $this->addEvent(new FHIRDateTime($v));
            }
        }
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are expected or requested to occur. The most common usage is
     * in dosage instructions for medications. They are also used when planning care of
     * various kinds.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A set of rules that describe when the event should occur.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming\FHIRTimingRepeat
     */
    public function getRepeat()
    {
        return $this->repeat;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are expected or requested to occur. The most common usage is
     * in dosage instructions for medications. They are also used when planning care of
     * various kinds.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A set of rules that describe when the event should occur.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming\FHIRTimingRepeat $repeat
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming
     */
    public function setRepeat(FHIRTimingRepeat $repeat = null)
    {
        $this->repeat = $repeat;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming $type
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRTiming::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRTiming::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRElement::xmlUnserialize($sxe, new FHIRTiming);
        } elseif (!is_object($type) || !($type instanceof FHIRTiming)) {
            throw new \RuntimeException(sprintf(
                'FHIRTiming::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->code)) {
            $type->setCode(FHIRCodeableConcept::xmlUnserialize($children->code));
        }
        if (isset($attributes->event)) {
            $type->addEvent((string)$attributes->event);
        }
        if (isset($children->event)) {
            foreach($children->event as $child) {
                $type->addEvent(FHIRDateTime::xmlUnserialize($child));
            }
        }
        if (isset($children->repeat)) {
            $type->setRepeat(FHIRTimingRepeat::xmlUnserialize($children->repeat));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<Timing xmlns="http://hl7.org/fhir"></Timing>');
        }
        parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE));
        }
        if ([] !== ($vs = $this->getEvent())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_EVENT, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_EVENT));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_EVENT));
                }
            }
        }

        if (null !== ($v = $this->getRepeat())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REPEAT));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v;
        }
        if ([] !== ($vs = $this->getEvent())) {
            $a[self::FIELD_EVENT] = [];
            $a[self::FIELD_EVENT_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_EVENT][] = (string)$v;
                $a[self::FIELD_EVENT_EXT][] = $v;
            }
        }
        if (null !== ($v = $this->getRepeat())) {
            $a[self::FIELD_REPEAT] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}