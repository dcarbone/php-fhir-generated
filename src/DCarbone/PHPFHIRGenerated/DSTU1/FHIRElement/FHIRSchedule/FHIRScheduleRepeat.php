<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:03+0000
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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIREventTiming;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUnitsOfTime;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * Specifies an event that may occur multiple times. Schedules are used for to
 * reord when things are expected or requested to occur.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRScheduleRepeat
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule
 */
class FHIRScheduleRepeat extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SCHEDULE_DOT_REPEAT;

    const FIELD_COUNT = 'count';
    const FIELD_COUNT_EXT = '_count';
    const FIELD_DURATION = 'duration';
    const FIELD_DURATION_EXT = '_duration';
    const FIELD_END = 'end';
    const FIELD_END_EXT = '_end';
    const FIELD_FREQUENCY = 'frequency';
    const FIELD_FREQUENCY_EXT = '_frequency';
    const FIELD_UNITS = 'units';
    const FIELD_WHEN = 'when';

    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A total count of the desired number of repetitions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    private $count = null;
    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * How long each repetition should last.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal
     */
    private $duration = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * When to stop repeating the schedule.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    private $end = null;
    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates how often the event should occur.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    private $frequency = null;
    /**
     * A unit of time (units from UCUM)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The units of time for the duration.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUnitsOfTime
     */
    private $units = null;
    /**
     * Real world event that the schedule relates to
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies the occurrence of daily life that determines timing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIREventTiming
     */
    private $when = null;

    /**
     * FHIRScheduleRepeat Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRScheduleRepeat::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_COUNT])) {
            $ext = (isset($data[self::FIELD_COUNT_EXT]) && is_array($data[self::FIELD_COUNT_EXT]))
                ? $data[self::FIELD_COUNT_EXT]
                : null;
            if ($data[self::FIELD_COUNT] instanceof FHIRInteger) {
                $this->setCount($data[self::FIELD_COUNT]);
            } elseif ($ext && is_scalar($data[self::FIELD_COUNT])) {
                $this->setCount(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_COUNT]] + $ext));
            } else {
                $this->setCount(new FHIRInteger($data[self::FIELD_COUNT]));
            }
        }
        if (isset($data[self::FIELD_DURATION])) {
            $ext = (isset($data[self::FIELD_DURATION_EXT]) && is_array($data[self::FIELD_DURATION_EXT]))
                ? $data[self::FIELD_DURATION_EXT]
                : null;
            if ($data[self::FIELD_DURATION] instanceof FHIRDecimal) {
                $this->setDuration($data[self::FIELD_DURATION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DURATION])) {
                $this->setDuration(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_DURATION]] + $ext));
            } else {
                $this->setDuration(new FHIRDecimal($data[self::FIELD_DURATION]));
            }
        }
        if (isset($data[self::FIELD_END])) {
            $ext = (isset($data[self::FIELD_END_EXT]) && is_array($data[self::FIELD_END_EXT]))
                ? $data[self::FIELD_END_EXT]
                : null;
            if ($data[self::FIELD_END] instanceof FHIRDateTime) {
                $this->setEnd($data[self::FIELD_END]);
            } elseif ($ext && is_scalar($data[self::FIELD_END])) {
                $this->setEnd(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_END]] + $ext));
            } else {
                $this->setEnd(new FHIRDateTime($data[self::FIELD_END]));
            }
        }
        if (isset($data[self::FIELD_FREQUENCY])) {
            $ext = (isset($data[self::FIELD_FREQUENCY_EXT]) && is_array($data[self::FIELD_FREQUENCY_EXT]))
                ? $data[self::FIELD_FREQUENCY_EXT]
                : null;
            if ($data[self::FIELD_FREQUENCY] instanceof FHIRInteger) {
                $this->setFrequency($data[self::FIELD_FREQUENCY]);
            } elseif ($ext && is_scalar($data[self::FIELD_FREQUENCY])) {
                $this->setFrequency(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_FREQUENCY]] + $ext));
            } else {
                $this->setFrequency(new FHIRInteger($data[self::FIELD_FREQUENCY]));
            }
        }
        if (isset($data[self::FIELD_UNITS])) {
            if ($data[self::FIELD_UNITS] instanceof FHIRUnitsOfTime) {
                $this->setUnits($data[self::FIELD_UNITS]);
            } else {
                $this->setUnits(new FHIRUnitsOfTime($data[self::FIELD_UNITS]));
            }
        }
        if (isset($data[self::FIELD_WHEN])) {
            if ($data[self::FIELD_WHEN] instanceof FHIREventTiming) {
                $this->setWhen($data[self::FIELD_WHEN]);
            } else {
                $this->setWhen(new FHIREventTiming($data[self::FIELD_WHEN]));
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
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A total count of the desired number of repetitions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A total count of the desired number of repetitions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $count
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule\FHIRScheduleRepeat
     */
    public function setCount($count = null)
    {
        if (null === $count) {
            $this->count = null;
            return $this;
        }
        if ($count instanceof FHIRInteger) {
            $this->count = $count;
            return $this;
        }
        $this->count = new FHIRInteger($count);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * How long each repetition should last.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * How long each repetition should last.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal $duration
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule\FHIRScheduleRepeat
     */
    public function setDuration($duration = null)
    {
        if (null === $duration) {
            $this->duration = null;
            return $this;
        }
        if ($duration instanceof FHIRDecimal) {
            $this->duration = $duration;
            return $this;
        }
        $this->duration = new FHIRDecimal($duration);
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * When to stop repeating the schedule.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * When to stop repeating the schedule.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime $end
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule\FHIRScheduleRepeat
     */
    public function setEnd($end = null)
    {
        if (null === $end) {
            $this->end = null;
            return $this;
        }
        if ($end instanceof FHIRDateTime) {
            $this->end = $end;
            return $this;
        }
        $this->end = new FHIRDateTime($end);
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates how often the event should occur.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates how often the event should occur.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $frequency
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule\FHIRScheduleRepeat
     */
    public function setFrequency($frequency = null)
    {
        if (null === $frequency) {
            $this->frequency = null;
            return $this;
        }
        if ($frequency instanceof FHIRInteger) {
            $this->frequency = $frequency;
            return $this;
        }
        $this->frequency = new FHIRInteger($frequency);
        return $this;
    }

    /**
     * A unit of time (units from UCUM)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The units of time for the duration.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUnitsOfTime
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * A unit of time (units from UCUM)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The units of time for the duration.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUnitsOfTime $units
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule\FHIRScheduleRepeat
     */
    public function setUnits(FHIRUnitsOfTime $units = null)
    {
        $this->units = $units;
        return $this;
    }

    /**
     * Real world event that the schedule relates to
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies the occurrence of daily life that determines timing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIREventTiming
     */
    public function getWhen()
    {
        return $this->when;
    }

    /**
     * Real world event that the schedule relates to
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies the occurrence of daily life that determines timing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIREventTiming $when
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule\FHIRScheduleRepeat
     */
    public function setWhen(FHIREventTiming $when = null)
    {
        $this->when = $when;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule\FHIRScheduleRepeat $type
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule\FHIRScheduleRepeat
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
                throw new \DomainException(sprintf('FHIRScheduleRepeat::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRScheduleRepeat::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRElement::xmlUnserialize($sxe, new FHIRScheduleRepeat);
        } elseif (!is_object($type) || !($type instanceof FHIRScheduleRepeat)) {
            throw new \RuntimeException(sprintf(
                'FHIRScheduleRepeat::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule\FHIRScheduleRepeat or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->count)) {
            $type->setCount((string)$attributes->count);
        }
        if (isset($children->count)) {
            $type->setCount(FHIRInteger::xmlUnserialize($children->count));
        }
        if (isset($attributes->duration)) {
            $type->setDuration((string)$attributes->duration);
        }
        if (isset($children->duration)) {
            $type->setDuration(FHIRDecimal::xmlUnserialize($children->duration));
        }
        if (isset($attributes->end)) {
            $type->setEnd((string)$attributes->end);
        }
        if (isset($children->end)) {
            $type->setEnd(FHIRDateTime::xmlUnserialize($children->end));
        }
        if (isset($attributes->frequency)) {
            $type->setFrequency((string)$attributes->frequency);
        }
        if (isset($children->frequency)) {
            $type->setFrequency(FHIRInteger::xmlUnserialize($children->frequency));
        }
        if (isset($children->units)) {
            $type->setUnits(FHIRUnitsOfTime::xmlUnserialize($children->units));
        }
        if (isset($children->when)) {
            $type->setWhen(FHIREventTiming::xmlUnserialize($children->when));
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
            $sxe = new \SimpleXMLElement('<ScheduleRepeat xmlns="http://hl7.org/fhir"></ScheduleRepeat>');
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getCount())) {
            $sxe->addAttribute(self::FIELD_COUNT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_COUNT));
            }
        }
        if (null !== ($v = $this->getDuration())) {
            $sxe->addAttribute(self::FIELD_DURATION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DURATION));
            }
        }
        if (null !== ($v = $this->getEnd())) {
            $sxe->addAttribute(self::FIELD_END, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_END));
            }
        }
        if (null !== ($v = $this->getFrequency())) {
            $sxe->addAttribute(self::FIELD_FREQUENCY, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_FREQUENCY));
            }
        }

        if (null !== ($v = $this->getUnits())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_UNITS));
        }

        if (null !== ($v = $this->getWhen())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WHEN));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCount())) {
            $a[self::FIELD_COUNT] = (string)$v;
            $a[self::FIELD_COUNT_EXT] = $v;
        }
        if (null !== ($v = $this->getDuration())) {
            $a[self::FIELD_DURATION] = (string)$v;
            $a[self::FIELD_DURATION_EXT] = $v;
        }
        if (null !== ($v = $this->getEnd())) {
            $a[self::FIELD_END] = (string)$v;
            $a[self::FIELD_END_EXT] = $v;
        }
        if (null !== ($v = $this->getFrequency())) {
            $a[self::FIELD_FREQUENCY] = (string)$v;
            $a[self::FIELD_FREQUENCY_EXT] = $v;
        }
        if (null !== ($v = $this->getUnits())) {
            $a[self::FIELD_UNITS] = $v;
        }
        if (null !== ($v = $this->getWhen())) {
            $a[self::FIELD_WHEN] = $v;
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