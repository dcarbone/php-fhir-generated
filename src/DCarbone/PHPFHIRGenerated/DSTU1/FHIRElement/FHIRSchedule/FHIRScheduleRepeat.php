<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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
 * elements, an \@id referenced from the Narrative, or extensions
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
    const FIELD_UNITS_EXT = '_units';
    const FIELD_WHEN = 'when';
    const FIELD_WHEN_EXT = '_when';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A total count of the desired number of repetitions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    protected $count = null;

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How long each repetition should last.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal
     */
    protected $duration = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When to stop repeating the schedule.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    protected $end = null;

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how often the event should occur.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    protected $frequency = null;

    /**
     * A unit of time (units from UCUM)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the duration.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUnitsOfTime
     */
    protected $units = null;

    /**
     * Real world event that the schedule relates to
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the occurrence of daily life that determines timing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIREventTiming
     */
    protected $when = null;

    /**
     * Validation map for fields in type Schedule.Repeat
     * @var array
     */
    private static $_validationRules = [    ];

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
        if (isset($data[self::FIELD_COUNT]) || isset($data[self::FIELD_COUNT_EXT])) {
            if (isset($data[self::FIELD_COUNT])) {
                $value = $data[self::FIELD_COUNT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_COUNT_EXT]) && is_array($data[self::FIELD_COUNT_EXT])) {
                $ext = $data[self::FIELD_COUNT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setCount($value);
                } else if (is_array($value)) {
                    $this->setCount(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setCount(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCount(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_DURATION]) || isset($data[self::FIELD_DURATION_EXT])) {
            if (isset($data[self::FIELD_DURATION])) {
                $value = $data[self::FIELD_DURATION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DURATION_EXT]) && is_array($data[self::FIELD_DURATION_EXT])) {
                $ext = $data[self::FIELD_DURATION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setDuration($value);
                } else if (is_array($value)) {
                    $this->setDuration(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setDuration(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDuration(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_END]) || isset($data[self::FIELD_END_EXT])) {
            if (isset($data[self::FIELD_END])) {
                $value = $data[self::FIELD_END];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_END_EXT]) && is_array($data[self::FIELD_END_EXT])) {
                $ext = $data[self::FIELD_END_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setEnd($value);
                } else if (is_array($value)) {
                    $this->setEnd(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setEnd(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setEnd(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_FREQUENCY]) || isset($data[self::FIELD_FREQUENCY_EXT])) {
            if (isset($data[self::FIELD_FREQUENCY])) {
                $value = $data[self::FIELD_FREQUENCY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FREQUENCY_EXT]) && is_array($data[self::FIELD_FREQUENCY_EXT])) {
                $ext = $data[self::FIELD_FREQUENCY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setFrequency($value);
                } else if (is_array($value)) {
                    $this->setFrequency(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setFrequency(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFrequency(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_UNITS]) || isset($data[self::FIELD_UNITS_EXT])) {
            if (isset($data[self::FIELD_UNITS])) {
                $value = $data[self::FIELD_UNITS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_UNITS_EXT]) && is_array($data[self::FIELD_UNITS_EXT])) {
                $ext = $data[self::FIELD_UNITS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUnitsOfTime) {
                    $this->setUnits($value);
                } else if (is_array($value)) {
                    $this->setUnits(new FHIRUnitsOfTime(array_merge($ext, $value)));
                } else {
                    $this->setUnits(new FHIRUnitsOfTime([FHIRUnitsOfTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setUnits(new FHIRUnitsOfTime($ext));
            }
        }
        if (isset($data[self::FIELD_WHEN]) || isset($data[self::FIELD_WHEN_EXT])) {
            if (isset($data[self::FIELD_WHEN])) {
                $value = $data[self::FIELD_WHEN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_WHEN_EXT]) && is_array($data[self::FIELD_WHEN_EXT])) {
                $ext = $data[self::FIELD_WHEN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIREventTiming) {
                    $this->setWhen($value);
                } else if (is_array($value)) {
                    $this->setWhen(new FHIREventTiming(array_merge($ext, $value)));
                } else {
                    $this->setWhen(new FHIREventTiming([FHIREventTiming::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setWhen(new FHIREventTiming($ext));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<ScheduleRepeat{$xmlns}></ScheduleRepeat>";
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A total count of the desired number of repetitions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $count
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How long each repetition should last.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal $duration
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When to stop repeating the schedule.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime $end
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how often the event should occur.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $frequency
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the duration.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUnitsOfTime $units
     * @return static
     */
    public function setUnits(FHIRUnitsOfTime $units = null)
    {
        $this->units = $units;
        return $this;
    }

    /**
     * Real world event that the schedule relates to
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the occurrence of daily life that determines timing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIREventTiming $when
     * @return static
     */
    public function setWhen(FHIREventTiming $when = null)
    {
        $this->when = $when;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getCount())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COUNT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEnd())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_END] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFrequency())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FREQUENCY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUnits())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UNITS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWhen())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WHEN] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_COUNT])) {
            $v = $this->getCount();
            foreach($validationRules[self::FIELD_COUNT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SCHEDULE_DOT_REPEAT, self::FIELD_COUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COUNT])) {
                        $errs[self::FIELD_COUNT] = [];
                    }
                    $errs[self::FIELD_COUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DURATION])) {
            $v = $this->getDuration();
            foreach($validationRules[self::FIELD_DURATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SCHEDULE_DOT_REPEAT, self::FIELD_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DURATION])) {
                        $errs[self::FIELD_DURATION] = [];
                    }
                    $errs[self::FIELD_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_END])) {
            $v = $this->getEnd();
            foreach($validationRules[self::FIELD_END] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SCHEDULE_DOT_REPEAT, self::FIELD_END, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_END])) {
                        $errs[self::FIELD_END] = [];
                    }
                    $errs[self::FIELD_END][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FREQUENCY])) {
            $v = $this->getFrequency();
            foreach($validationRules[self::FIELD_FREQUENCY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SCHEDULE_DOT_REPEAT, self::FIELD_FREQUENCY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FREQUENCY])) {
                        $errs[self::FIELD_FREQUENCY] = [];
                    }
                    $errs[self::FIELD_FREQUENCY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UNITS])) {
            $v = $this->getUnits();
            foreach($validationRules[self::FIELD_UNITS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SCHEDULE_DOT_REPEAT, self::FIELD_UNITS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UNITS])) {
                        $errs[self::FIELD_UNITS] = [];
                    }
                    $errs[self::FIELD_UNITS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WHEN])) {
            $v = $this->getWhen();
            foreach($validationRules[self::FIELD_WHEN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SCHEDULE_DOT_REPEAT, self::FIELD_WHEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHEN])) {
                        $errs[self::FIELD_WHEN] = [];
                    }
                    $errs[self::FIELD_WHEN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule\FHIRScheduleRepeat $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule\FHIRScheduleRepeat
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRScheduleRepeat::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRScheduleRepeat::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRScheduleRepeat;
        } elseif (!is_object($type) || !($type instanceof FHIRScheduleRepeat)) {
            throw new \RuntimeException(sprintf(
                'FHIRScheduleRepeat::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule\FHIRScheduleRepeat or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->count)) {
            $type->setCount(FHIRInteger::xmlUnserialize($children->count));
        }
        if (isset($attributes->count)) {
            $pt = $type->getCount();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->count);
            } else {
                $type->setCount((string)$attributes->count);
            }
        }
        if (isset($children->duration)) {
            $type->setDuration(FHIRDecimal::xmlUnserialize($children->duration));
        }
        if (isset($attributes->duration)) {
            $pt = $type->getDuration();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->duration);
            } else {
                $type->setDuration((string)$attributes->duration);
            }
        }
        if (isset($children->end)) {
            $type->setEnd(FHIRDateTime::xmlUnserialize($children->end));
        }
        if (isset($attributes->end)) {
            $pt = $type->getEnd();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->end);
            } else {
                $type->setEnd((string)$attributes->end);
            }
        }
        if (isset($children->frequency)) {
            $type->setFrequency(FHIRInteger::xmlUnserialize($children->frequency));
        }
        if (isset($attributes->frequency)) {
            $pt = $type->getFrequency();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->frequency);
            } else {
                $type->setFrequency((string)$attributes->frequency);
            }
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
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getCount())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COUNT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDuration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DURATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getEnd())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_END, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFrequency())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FREQUENCY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUnits())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_UNITS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getWhen())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WHEN, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_COUNT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_COUNT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDuration())) {
            $a[self::FIELD_DURATION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_DURATION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getEnd())) {
            $a[self::FIELD_END] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_END_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getFrequency())) {
            $a[self::FIELD_FREQUENCY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_FREQUENCY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getUnits())) {
            $a[self::FIELD_UNITS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUnitsOfTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUnitsOfTime::FIELD_VALUE]);
                $a[self::FIELD_UNITS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getWhen())) {
            $a[self::FIELD_WHEN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIREventTiming::FIELD_VALUE, $enc)))) {
                unset($enc[FHIREventTiming::FIELD_VALUE]);
                $a[self::FIELD_WHEN_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}