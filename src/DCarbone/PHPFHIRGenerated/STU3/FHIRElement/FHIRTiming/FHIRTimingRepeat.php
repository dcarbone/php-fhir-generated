<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 28th, 2019 20:54+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIREventTiming;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnitsOfTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * Specifies an event that may occur multiple times. Timing schedules are used to
 * record when things are planned, expected or requested to occur. The most common
 * usage is in dosage instructions for medications. They are also used when
 * planning care of various kinds, and may be used for reporting the schedule to
 * which past regular activities were carried out.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRTimingRepeat
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming
 */
class FHIRTimingRepeat extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_BOUNDS_DURATION = 'boundsDuration';
    const FIELD_BOUNDS_PERIOD = 'boundsPeriod';
    const FIELD_BOUNDS_RANGE = 'boundsRange';
    const FIELD_COUNT = 'count';
    const FIELD_COUNT_EXT = '_count';
    const FIELD_COUNT_MAX = 'countMax';
    const FIELD_COUNT_MAX_EXT = '_countMax';
    const FIELD_DAY_OF_WEEK = 'dayOfWeek';
    const FIELD_DAY_OF_WEEK_EXT = '_dayOfWeek';
    const FIELD_DURATION = 'duration';
    const FIELD_DURATION_EXT = '_duration';
    const FIELD_DURATION_MAX = 'durationMax';
    const FIELD_DURATION_MAX_EXT = '_durationMax';
    const FIELD_DURATION_UNIT = 'durationUnit';
    const FIELD_DURATION_UNIT_EXT = '_durationUnit';
    const FIELD_FREQUENCY = 'frequency';
    const FIELD_FREQUENCY_EXT = '_frequency';
    const FIELD_FREQUENCY_MAX = 'frequencyMax';
    const FIELD_FREQUENCY_MAX_EXT = '_frequencyMax';
    const FIELD_OFFSET = 'offset';
    const FIELD_OFFSET_EXT = '_offset';
    const FIELD_PERIOD = 'period';
    const FIELD_PERIOD_EXT = '_period';
    const FIELD_PERIOD_MAX = 'periodMax';
    const FIELD_PERIOD_MAX_EXT = '_periodMax';
    const FIELD_PERIOD_UNIT = 'periodUnit';
    const FIELD_PERIOD_UNIT_EXT = '_periodUnit';
    const FIELD_TIME_OF_DAY = 'timeOfDay';
    const FIELD_TIME_OF_DAY_EXT = '_timeOfDay';
    const FIELD_WHEN = 'when';
    const FIELD_WHEN_EXT = '_when';

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected $boundsDuration = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    protected $boundsPeriod = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange
     */
    protected $boundsRange = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A total count of the desired number of repetitions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected $count = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A maximum value for the count of the desired repetitions (e.g. do something 6-8
     * times).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected $countMax = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If one or more days of week is provided, then the action happens only on the
     * specified day(s).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode[]
     */
    protected $dayOfWeek = [];

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How long this thing happens for when it happens.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    protected $duration = null;

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The upper limit of how long this thing happens for when it happens.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    protected $durationMax = null;

    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the duration, in UCUM units.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnitsOfTime
     */
    protected $durationUnit = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of times to repeat the action within the specified period / period
     * range (i.e. both period and periodMax provided).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected $frequency = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the frequency is a range - so to repeat between
     * [frequency] and [frequencyMax] times within the period or period range.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected $frequencyMax = null;

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of minutes from the event. If the event code does not indicate
     * whether the minutes is before or after the event, then the offset is assumed to
     * be after the event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    protected $offset = null;

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the duration of time over which repetitions are to occur; e.g. to
     * express "3 times per day", 3 would be the frequency and "1 day" would be the
     * period.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    protected $period = null;

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the period is a range from [period] to [periodMax],
     * allowing expressing concepts such as "do this once every 3-5 days.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    protected $periodMax = null;

    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the period in UCUM units.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnitsOfTime
     */
    protected $periodUnit = null;

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified time of day for action to take place.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime[]
     */
    protected $timeOfDay = [];

    /**
     * Real world event relating to the schedule.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Real world events that the occurrence of the event should be tied to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIREventTiming[]
     */
    protected $when = [];

    /**
     * FHIRTimingRepeat Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTimingRepeat::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_BOUNDS_DURATION])) {
            if ($data[self::FIELD_BOUNDS_DURATION] instanceof FHIRDuration) {
                $this->setBoundsDuration($data[self::FIELD_BOUNDS_DURATION]);
            } else {
                $this->setBoundsDuration(new FHIRDuration($data[self::FIELD_BOUNDS_DURATION]));
            }
        }
        if (isset($data[self::FIELD_BOUNDS_PERIOD])) {
            if ($data[self::FIELD_BOUNDS_PERIOD] instanceof FHIRPeriod) {
                $this->setBoundsPeriod($data[self::FIELD_BOUNDS_PERIOD]);
            } else {
                $this->setBoundsPeriod(new FHIRPeriod($data[self::FIELD_BOUNDS_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_BOUNDS_RANGE])) {
            if ($data[self::FIELD_BOUNDS_RANGE] instanceof FHIRRange) {
                $this->setBoundsRange($data[self::FIELD_BOUNDS_RANGE]);
            } else {
                $this->setBoundsRange(new FHIRRange($data[self::FIELD_BOUNDS_RANGE]));
            }
        }
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
        if (isset($data[self::FIELD_COUNT_MAX])) {
            $ext = (isset($data[self::FIELD_COUNT_MAX_EXT]) && is_array($data[self::FIELD_COUNT_MAX_EXT]))
                ? $data[self::FIELD_COUNT_MAX_EXT]
                : null;
            if ($data[self::FIELD_COUNT_MAX] instanceof FHIRInteger) {
                $this->setCountMax($data[self::FIELD_COUNT_MAX]);
            } elseif ($ext && is_scalar($data[self::FIELD_COUNT_MAX])) {
                $this->setCountMax(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_COUNT_MAX]] + $ext));
            } else {
                $this->setCountMax(new FHIRInteger($data[self::FIELD_COUNT_MAX]));
            }
        }
        if (isset($data[self::FIELD_DAY_OF_WEEK])) {
            $ext = (isset($data[self::FIELD_DAY_OF_WEEK_EXT]) && is_array($data[self::FIELD_DAY_OF_WEEK_EXT]))
                ? $data[self::FIELD_DAY_OF_WEEK_EXT]
                : null;
            if (is_array($data[self::FIELD_DAY_OF_WEEK])) {
                foreach($data[self::FIELD_DAY_OF_WEEK] as $i => $v) {
                    if ($v instanceof FHIRCode) {
                        $this->addDayOfWeek($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addDayOfWeek(new FHIRCode([FHIRCode::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addDayOfWeek(new FHIRCode($v));
                    }
                }
            } elseif ($data[self::FIELD_DAY_OF_WEEK] instanceof FHIRCode) {
                $this->addDayOfWeek($data[self::FIELD_DAY_OF_WEEK]);
            } elseif ($ext && is_scalar($data[self::FIELD_DAY_OF_WEEK])) {
                $this->addDayOfWeek(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_DAY_OF_WEEK]] + $ext));
            } else {
                $this->addDayOfWeek(new FHIRCode($data[self::FIELD_DAY_OF_WEEK]));
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
        if (isset($data[self::FIELD_DURATION_MAX])) {
            $ext = (isset($data[self::FIELD_DURATION_MAX_EXT]) && is_array($data[self::FIELD_DURATION_MAX_EXT]))
                ? $data[self::FIELD_DURATION_MAX_EXT]
                : null;
            if ($data[self::FIELD_DURATION_MAX] instanceof FHIRDecimal) {
                $this->setDurationMax($data[self::FIELD_DURATION_MAX]);
            } elseif ($ext && is_scalar($data[self::FIELD_DURATION_MAX])) {
                $this->setDurationMax(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_DURATION_MAX]] + $ext));
            } else {
                $this->setDurationMax(new FHIRDecimal($data[self::FIELD_DURATION_MAX]));
            }
        }
        if (isset($data[self::FIELD_DURATION_UNIT])) {
            $ext = (isset($data[self::FIELD_DURATION_UNIT_EXT]) && is_array($data[self::FIELD_DURATION_UNIT_EXT]))
                ? $data[self::FIELD_DURATION_UNIT_EXT]
                : null;
            if ($data[self::FIELD_DURATION_UNIT] instanceof FHIRUnitsOfTime) {
                $this->setDurationUnit($data[self::FIELD_DURATION_UNIT]);
            } elseif ($ext && is_scalar($data[self::FIELD_DURATION_UNIT])) {
                $this->setDurationUnit(new FHIRUnitsOfTime([FHIRUnitsOfTime::FIELD_VALUE => $data[self::FIELD_DURATION_UNIT]] + $ext));
            } else {
                $this->setDurationUnit(new FHIRUnitsOfTime($data[self::FIELD_DURATION_UNIT]));
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
        if (isset($data[self::FIELD_FREQUENCY_MAX])) {
            $ext = (isset($data[self::FIELD_FREQUENCY_MAX_EXT]) && is_array($data[self::FIELD_FREQUENCY_MAX_EXT]))
                ? $data[self::FIELD_FREQUENCY_MAX_EXT]
                : null;
            if ($data[self::FIELD_FREQUENCY_MAX] instanceof FHIRInteger) {
                $this->setFrequencyMax($data[self::FIELD_FREQUENCY_MAX]);
            } elseif ($ext && is_scalar($data[self::FIELD_FREQUENCY_MAX])) {
                $this->setFrequencyMax(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_FREQUENCY_MAX]] + $ext));
            } else {
                $this->setFrequencyMax(new FHIRInteger($data[self::FIELD_FREQUENCY_MAX]));
            }
        }
        if (isset($data[self::FIELD_OFFSET])) {
            $ext = (isset($data[self::FIELD_OFFSET_EXT]) && is_array($data[self::FIELD_OFFSET_EXT]))
                ? $data[self::FIELD_OFFSET_EXT]
                : null;
            if ($data[self::FIELD_OFFSET] instanceof FHIRUnsignedInt) {
                $this->setOffset($data[self::FIELD_OFFSET]);
            } elseif ($ext && is_scalar($data[self::FIELD_OFFSET])) {
                $this->setOffset(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $data[self::FIELD_OFFSET]] + $ext));
            } else {
                $this->setOffset(new FHIRUnsignedInt($data[self::FIELD_OFFSET]));
            }
        }
        if (isset($data[self::FIELD_PERIOD])) {
            $ext = (isset($data[self::FIELD_PERIOD_EXT]) && is_array($data[self::FIELD_PERIOD_EXT]))
                ? $data[self::FIELD_PERIOD_EXT]
                : null;
            if ($data[self::FIELD_PERIOD] instanceof FHIRDecimal) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } elseif ($ext && is_scalar($data[self::FIELD_PERIOD])) {
                $this->setPeriod(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_PERIOD]] + $ext));
            } else {
                $this->setPeriod(new FHIRDecimal($data[self::FIELD_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_PERIOD_MAX])) {
            $ext = (isset($data[self::FIELD_PERIOD_MAX_EXT]) && is_array($data[self::FIELD_PERIOD_MAX_EXT]))
                ? $data[self::FIELD_PERIOD_MAX_EXT]
                : null;
            if ($data[self::FIELD_PERIOD_MAX] instanceof FHIRDecimal) {
                $this->setPeriodMax($data[self::FIELD_PERIOD_MAX]);
            } elseif ($ext && is_scalar($data[self::FIELD_PERIOD_MAX])) {
                $this->setPeriodMax(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_PERIOD_MAX]] + $ext));
            } else {
                $this->setPeriodMax(new FHIRDecimal($data[self::FIELD_PERIOD_MAX]));
            }
        }
        if (isset($data[self::FIELD_PERIOD_UNIT])) {
            $ext = (isset($data[self::FIELD_PERIOD_UNIT_EXT]) && is_array($data[self::FIELD_PERIOD_UNIT_EXT]))
                ? $data[self::FIELD_PERIOD_UNIT_EXT]
                : null;
            if ($data[self::FIELD_PERIOD_UNIT] instanceof FHIRUnitsOfTime) {
                $this->setPeriodUnit($data[self::FIELD_PERIOD_UNIT]);
            } elseif ($ext && is_scalar($data[self::FIELD_PERIOD_UNIT])) {
                $this->setPeriodUnit(new FHIRUnitsOfTime([FHIRUnitsOfTime::FIELD_VALUE => $data[self::FIELD_PERIOD_UNIT]] + $ext));
            } else {
                $this->setPeriodUnit(new FHIRUnitsOfTime($data[self::FIELD_PERIOD_UNIT]));
            }
        }
        if (isset($data[self::FIELD_TIME_OF_DAY])) {
            $ext = (isset($data[self::FIELD_TIME_OF_DAY_EXT]) && is_array($data[self::FIELD_TIME_OF_DAY_EXT]))
                ? $data[self::FIELD_TIME_OF_DAY_EXT]
                : null;
            if (is_array($data[self::FIELD_TIME_OF_DAY])) {
                foreach($data[self::FIELD_TIME_OF_DAY] as $i => $v) {
                    if ($v instanceof FHIRTime) {
                        $this->addTimeOfDay($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addTimeOfDay(new FHIRTime([FHIRTime::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addTimeOfDay(new FHIRTime($v));
                    }
                }
            } elseif ($data[self::FIELD_TIME_OF_DAY] instanceof FHIRTime) {
                $this->addTimeOfDay($data[self::FIELD_TIME_OF_DAY]);
            } elseif ($ext && is_scalar($data[self::FIELD_TIME_OF_DAY])) {
                $this->addTimeOfDay(new FHIRTime([FHIRTime::FIELD_VALUE => $data[self::FIELD_TIME_OF_DAY]] + $ext));
            } else {
                $this->addTimeOfDay(new FHIRTime($data[self::FIELD_TIME_OF_DAY]));
            }
        }
        if (isset($data[self::FIELD_WHEN])) {
            $ext = (isset($data[self::FIELD_WHEN_EXT]) && is_array($data[self::FIELD_WHEN_EXT]))
                ? $data[self::FIELD_WHEN_EXT]
                : null;
            if (is_array($data[self::FIELD_WHEN])) {
                foreach($data[self::FIELD_WHEN] as $i => $v) {
                    if ($v instanceof FHIREventTiming) {
                        $this->addWhen($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addWhen(new FHIREventTiming([FHIREventTiming::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addWhen(new FHIREventTiming($v));
                    }
                }
            } elseif ($data[self::FIELD_WHEN] instanceof FHIREventTiming) {
                $this->addWhen($data[self::FIELD_WHEN]);
            } elseif ($ext && is_scalar($data[self::FIELD_WHEN])) {
                $this->addWhen(new FHIREventTiming([FHIREventTiming::FIELD_VALUE => $data[self::FIELD_WHEN]] + $ext));
            } else {
                $this->addWhen(new FHIREventTiming($data[self::FIELD_WHEN]));
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return static
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
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
        return "<TimingRepeat{$xmlns}></TimingRepeat>";
    }


    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getBoundsDuration()
    {
        return $this->boundsDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration $boundsDuration
     * @return static
     */
    public function setBoundsDuration(FHIRDuration $boundsDuration = null)
    {
        $this->boundsDuration = $boundsDuration;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    public function getBoundsPeriod()
    {
        return $this->boundsPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $boundsPeriod
     * @return static
     */
    public function setBoundsPeriod(FHIRPeriod $boundsPeriod = null)
    {
        $this->boundsPeriod = $boundsPeriod;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange
     */
    public function getBoundsRange()
    {
        return $this->boundsRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange $boundsRange
     * @return static
     */
    public function setBoundsRange(FHIRRange $boundsRange = null)
    {
        $this->boundsRange = $boundsRange;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A total count of the desired number of repetitions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A total count of the desired number of repetitions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $count
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
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A maximum value for the count of the desired repetitions (e.g. do something 6-8
     * times).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getCountMax()
    {
        return $this->countMax;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A maximum value for the count of the desired repetitions (e.g. do something 6-8
     * times).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $countMax
     * @return static
     */
    public function setCountMax($countMax = null)
    {
        if (null === $countMax) {
            $this->countMax = null;
            return $this;
        }
        if ($countMax instanceof FHIRInteger) {
            $this->countMax = $countMax;
            return $this;
        }
        $this->countMax = new FHIRInteger($countMax);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If one or more days of week is provided, then the action happens only on the
     * specified day(s).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode[]
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If one or more days of week is provided, then the action happens only on the
     * specified day(s).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode $dayOfWeek
     * @return static
     */
    public function addDayOfWeek($dayOfWeek = null)
    {
        if (null === $dayOfWeek) {
            $this->dayOfWeek = [];
            return $this;
        }
        if ($dayOfWeek instanceof FHIRCode) {
            $this->dayOfWeek[] = $dayOfWeek;
            return $this;
        }
        $this->dayOfWeek[] = new FHIRCode($dayOfWeek);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If one or more days of week is provided, then the action happens only on the
     * specified day(s).
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode[] $dayOfWeek
     * @return static
     */
    public function setDayOfWeek(array $dayOfWeek = [])
    {
        $this->dayOfWeek = [];
        if ([] === $dayOfWeek) {
            return $this;
        }
        foreach($dayOfWeek as $v) {
            if ($v instanceof FHIRCode) {
                $this->addDayOfWeek($v);
            } else {
                $this->addDayOfWeek(new FHIRCode($v));
            }
        }
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How long this thing happens for when it happens.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How long this thing happens for when it happens.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal $duration
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
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The upper limit of how long this thing happens for when it happens.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    public function getDurationMax()
    {
        return $this->durationMax;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The upper limit of how long this thing happens for when it happens.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal $durationMax
     * @return static
     */
    public function setDurationMax($durationMax = null)
    {
        if (null === $durationMax) {
            $this->durationMax = null;
            return $this;
        }
        if ($durationMax instanceof FHIRDecimal) {
            $this->durationMax = $durationMax;
            return $this;
        }
        $this->durationMax = new FHIRDecimal($durationMax);
        return $this;
    }

    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the duration, in UCUM units.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnitsOfTime
     */
    public function getDurationUnit()
    {
        return $this->durationUnit;
    }

    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the duration, in UCUM units.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnitsOfTime $durationUnit
     * @return static
     */
    public function setDurationUnit(FHIRUnitsOfTime $durationUnit = null)
    {
        $this->durationUnit = $durationUnit;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of times to repeat the action within the specified period / period
     * range (i.e. both period and periodMax provided).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of times to repeat the action within the specified period / period
     * range (i.e. both period and periodMax provided).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $frequency
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
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the frequency is a range - so to repeat between
     * [frequency] and [frequencyMax] times within the period or period range.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getFrequencyMax()
    {
        return $this->frequencyMax;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the frequency is a range - so to repeat between
     * [frequency] and [frequencyMax] times within the period or period range.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $frequencyMax
     * @return static
     */
    public function setFrequencyMax($frequencyMax = null)
    {
        if (null === $frequencyMax) {
            $this->frequencyMax = null;
            return $this;
        }
        if ($frequencyMax instanceof FHIRInteger) {
            $this->frequencyMax = $frequencyMax;
            return $this;
        }
        $this->frequencyMax = new FHIRInteger($frequencyMax);
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of minutes from the event. If the event code does not indicate
     * whether the minutes is before or after the event, then the offset is assumed to
     * be after the event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of minutes from the event. If the event code does not indicate
     * whether the minutes is before or after the event, then the offset is assumed to
     * be after the event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt $offset
     * @return static
     */
    public function setOffset($offset = null)
    {
        if (null === $offset) {
            $this->offset = null;
            return $this;
        }
        if ($offset instanceof FHIRUnsignedInt) {
            $this->offset = $offset;
            return $this;
        }
        $this->offset = new FHIRUnsignedInt($offset);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the duration of time over which repetitions are to occur; e.g. to
     * express "3 times per day", 3 would be the frequency and "1 day" would be the
     * period.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the duration of time over which repetitions are to occur; e.g. to
     * express "3 times per day", 3 would be the frequency and "1 day" would be the
     * period.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal $period
     * @return static
     */
    public function setPeriod($period = null)
    {
        if (null === $period) {
            $this->period = null;
            return $this;
        }
        if ($period instanceof FHIRDecimal) {
            $this->period = $period;
            return $this;
        }
        $this->period = new FHIRDecimal($period);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the period is a range from [period] to [periodMax],
     * allowing expressing concepts such as "do this once every 3-5 days.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    public function getPeriodMax()
    {
        return $this->periodMax;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the period is a range from [period] to [periodMax],
     * allowing expressing concepts such as "do this once every 3-5 days.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal $periodMax
     * @return static
     */
    public function setPeriodMax($periodMax = null)
    {
        if (null === $periodMax) {
            $this->periodMax = null;
            return $this;
        }
        if ($periodMax instanceof FHIRDecimal) {
            $this->periodMax = $periodMax;
            return $this;
        }
        $this->periodMax = new FHIRDecimal($periodMax);
        return $this;
    }

    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the period in UCUM units.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnitsOfTime
     */
    public function getPeriodUnit()
    {
        return $this->periodUnit;
    }

    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the period in UCUM units.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnitsOfTime $periodUnit
     * @return static
     */
    public function setPeriodUnit(FHIRUnitsOfTime $periodUnit = null)
    {
        $this->periodUnit = $periodUnit;
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified time of day for action to take place.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime[]
     */
    public function getTimeOfDay()
    {
        return $this->timeOfDay;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified time of day for action to take place.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime $timeOfDay
     * @return static
     */
    public function addTimeOfDay($timeOfDay = null)
    {
        if (null === $timeOfDay) {
            $this->timeOfDay = [];
            return $this;
        }
        if ($timeOfDay instanceof FHIRTime) {
            $this->timeOfDay[] = $timeOfDay;
            return $this;
        }
        $this->timeOfDay[] = new FHIRTime($timeOfDay);
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified time of day for action to take place.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime[] $timeOfDay
     * @return static
     */
    public function setTimeOfDay(array $timeOfDay = [])
    {
        $this->timeOfDay = [];
        if ([] === $timeOfDay) {
            return $this;
        }
        foreach($timeOfDay as $v) {
            if ($v instanceof FHIRTime) {
                $this->addTimeOfDay($v);
            } else {
                $this->addTimeOfDay(new FHIRTime($v));
            }
        }
        return $this;
    }

    /**
     * Real world event relating to the schedule.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Real world events that the occurrence of the event should be tied to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIREventTiming[]
     */
    public function getWhen()
    {
        return $this->when;
    }

    /**
     * Real world event relating to the schedule.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Real world events that the occurrence of the event should be tied to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIREventTiming $when
     * @return static
     */
    public function addWhen(FHIREventTiming $when = null)
    {
        $this->when[] = $when;
        return $this;
    }

    /**
     * Real world event relating to the schedule.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Real world events that the occurrence of the event should be tied to.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIREventTiming[] $when
     * @return static
     */
    public function setWhen(array $when = [])
    {
        $this->when = [];
        if ([] === $when) {
            return $this;
        }
        foreach($when as $v) {
            if ($v instanceof FHIREventTiming) {
                $this->addWhen($v);
            } else {
                $this->addWhen(new FHIREventTiming($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming\FHIRTimingRepeat $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming\FHIRTimingRepeat
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
                throw new \DomainException(sprintf('FHIRTimingRepeat::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRTimingRepeat::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRTimingRepeat;
        } elseif (!is_object($type) || !($type instanceof FHIRTimingRepeat)) {
            throw new \RuntimeException(sprintf(
                'FHIRTimingRepeat::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming\FHIRTimingRepeat or null, %s seen.',
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
        if (isset($children->boundsDuration)) {
            $type->setBoundsDuration(FHIRDuration::xmlUnserialize($children->boundsDuration));
        }
        if (isset($children->boundsPeriod)) {
            $type->setBoundsPeriod(FHIRPeriod::xmlUnserialize($children->boundsPeriod));
        }
        if (isset($children->boundsRange)) {
            $type->setBoundsRange(FHIRRange::xmlUnserialize($children->boundsRange));
        }
        if (isset($attributes->count)) {
            $type->setCount((string)$attributes->count);
        }
        if (isset($children->count)) {
            $type->setCount(FHIRInteger::xmlUnserialize($children->count));
        }
        if (isset($attributes->countMax)) {
            $type->setCountMax((string)$attributes->countMax);
        }
        if (isset($children->countMax)) {
            $type->setCountMax(FHIRInteger::xmlUnserialize($children->countMax));
        }
        if (isset($attributes->dayOfWeek)) {
            $type->addDayOfWeek((string)$attributes->dayOfWeek);
        }
        if (isset($children->dayOfWeek)) {
            foreach($children->dayOfWeek as $child) {
                $type->addDayOfWeek(FHIRCode::xmlUnserialize($child));
            }
        }
        if (isset($attributes->duration)) {
            $type->setDuration((string)$attributes->duration);
        }
        if (isset($children->duration)) {
            $type->setDuration(FHIRDecimal::xmlUnserialize($children->duration));
        }
        if (isset($attributes->durationMax)) {
            $type->setDurationMax((string)$attributes->durationMax);
        }
        if (isset($children->durationMax)) {
            $type->setDurationMax(FHIRDecimal::xmlUnserialize($children->durationMax));
        }
        if (isset($children->durationUnit)) {
            $type->setDurationUnit(FHIRUnitsOfTime::xmlUnserialize($children->durationUnit));
        }
        if (isset($attributes->frequency)) {
            $type->setFrequency((string)$attributes->frequency);
        }
        if (isset($children->frequency)) {
            $type->setFrequency(FHIRInteger::xmlUnserialize($children->frequency));
        }
        if (isset($attributes->frequencyMax)) {
            $type->setFrequencyMax((string)$attributes->frequencyMax);
        }
        if (isset($children->frequencyMax)) {
            $type->setFrequencyMax(FHIRInteger::xmlUnserialize($children->frequencyMax));
        }
        if (isset($attributes->offset)) {
            $type->setOffset((string)$attributes->offset);
        }
        if (isset($children->offset)) {
            $type->setOffset(FHIRUnsignedInt::xmlUnserialize($children->offset));
        }
        if (isset($attributes->period)) {
            $type->setPeriod((string)$attributes->period);
        }
        if (isset($children->period)) {
            $type->setPeriod(FHIRDecimal::xmlUnserialize($children->period));
        }
        if (isset($attributes->periodMax)) {
            $type->setPeriodMax((string)$attributes->periodMax);
        }
        if (isset($children->periodMax)) {
            $type->setPeriodMax(FHIRDecimal::xmlUnserialize($children->periodMax));
        }
        if (isset($children->periodUnit)) {
            $type->setPeriodUnit(FHIRUnitsOfTime::xmlUnserialize($children->periodUnit));
        }
        if (isset($attributes->timeOfDay)) {
            $type->addTimeOfDay((string)$attributes->timeOfDay);
        }
        if (isset($children->timeOfDay)) {
            foreach($children->timeOfDay as $child) {
                $type->addTimeOfDay(FHIRTime::xmlUnserialize($child));
            }
        }
        if (isset($children->when)) {
            foreach($children->when as $child) {
                $type->addWhen(FHIREventTiming::xmlUnserialize($child));
            }
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

        if (null !== ($v = $this->getBoundsDuration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BOUNDS_DURATION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getBoundsPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BOUNDS_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getBoundsRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BOUNDS_RANGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCount())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COUNT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCountMax())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COUNT_MAX, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getDayOfWeek())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DAY_OF_WEEK, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDuration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DURATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDurationMax())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DURATION_MAX, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDurationUnit())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DURATION_UNIT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFrequency())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FREQUENCY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFrequencyMax())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FREQUENCY_MAX, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOffset())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OFFSET, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPeriodMax())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD_MAX, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPeriodUnit())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD_UNIT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getTimeOfDay())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TIME_OF_DAY, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getWhen())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_WHEN, null, $v->_getFHIRXMLNamespace()));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getBoundsDuration())) {
            $a[self::FIELD_BOUNDS_DURATION] = $v;
        }
        if (null !== ($v = $this->getBoundsPeriod())) {
            $a[self::FIELD_BOUNDS_PERIOD] = $v;
        }
        if (null !== ($v = $this->getBoundsRange())) {
            $a[self::FIELD_BOUNDS_RANGE] = $v;
        }
        if (null !== ($v = $this->getCount())) {
            $a[self::FIELD_COUNT] = $v->getValue();
            $a[self::FIELD_COUNT_EXT] = $v;
        }
        if (null !== ($v = $this->getCountMax())) {
            $a[self::FIELD_COUNT_MAX] = $v->getValue();
            $a[self::FIELD_COUNT_MAX_EXT] = $v;
        }
        if ([] !== ($vs = $this->getDayOfWeek())) {
            $a[self::FIELD_DAY_OF_WEEK] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_DAY_OF_WEEK][] = $v->getValue();
                $a[self::FIELD_DAY_OF_WEEK_EXT][] = $v;
            }
        }
        if (null !== ($v = $this->getDuration())) {
            $a[self::FIELD_DURATION] = $v->getValue();
            $a[self::FIELD_DURATION_EXT] = $v;
        }
        if (null !== ($v = $this->getDurationMax())) {
            $a[self::FIELD_DURATION_MAX] = $v->getValue();
            $a[self::FIELD_DURATION_MAX_EXT] = $v;
        }
        if (null !== ($v = $this->getDurationUnit())) {
            $a[self::FIELD_DURATION_UNIT] = $v;
        }
        if (null !== ($v = $this->getFrequency())) {
            $a[self::FIELD_FREQUENCY] = $v->getValue();
            $a[self::FIELD_FREQUENCY_EXT] = $v;
        }
        if (null !== ($v = $this->getFrequencyMax())) {
            $a[self::FIELD_FREQUENCY_MAX] = $v->getValue();
            $a[self::FIELD_FREQUENCY_MAX_EXT] = $v;
        }
        if (null !== ($v = $this->getOffset())) {
            $a[self::FIELD_OFFSET] = $v->getValue();
            $a[self::FIELD_OFFSET_EXT] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = $v->getValue();
            $a[self::FIELD_PERIOD_EXT] = $v;
        }
        if (null !== ($v = $this->getPeriodMax())) {
            $a[self::FIELD_PERIOD_MAX] = $v->getValue();
            $a[self::FIELD_PERIOD_MAX_EXT] = $v;
        }
        if (null !== ($v = $this->getPeriodUnit())) {
            $a[self::FIELD_PERIOD_UNIT] = $v;
        }
        if ([] !== ($vs = $this->getTimeOfDay())) {
            $a[self::FIELD_TIME_OF_DAY] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TIME_OF_DAY][] = $v->getValue();
                $a[self::FIELD_TIME_OF_DAY_EXT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getWhen())) {
            $a[self::FIELD_WHEN] = $vs;
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