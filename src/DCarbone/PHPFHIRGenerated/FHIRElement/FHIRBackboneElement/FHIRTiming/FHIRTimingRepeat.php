<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming;

include_once __DIR__.'/../../../constants.php';

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 30th, 2019 14:05+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIREventTiming;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTime;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt;

/**
 * Specifies an event that may occur multiple times. Timing schedules are used to
 * record when things are planned, expected or requested to occur. The most common
 * usage is in dosage instructions for medications. They are also used when
 * planning care of various kinds, and may be used for reporting the schedule to
 * which past regular activities were carried out.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRTimingRepeat
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
 */
class FHIRTimingRepeat extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = FHIR_TYPE_NAME_TIMING_DOT_REPEAT;

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
    const FIELD_TIME_OF_DAY = 'timeOfDay';
    const FIELD_TIME_OF_DAY_EXT = '_timeOfDay';
    const FIELD_WHEN = 'when';

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     * (choose any one of bounds*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    private $boundsDuration = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     * (choose any one of bounds*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $boundsPeriod = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     * (choose any one of bounds*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    private $boundsRange = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A total count of the desired number of repetitions across the duration of the
     * entire timing specification. If countMax is present, this element indicates the
     * lower bound of the allowed range of count values.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    private $count = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * If present, indicates that the count is a range - so to perform the action
     * between [count] and [countMax] times.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    private $countMax = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * If one or more days of week is provided, then the action happens only on the
     * specified day(s).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCode[]
     */
    private $dayOfWeek = [];

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * How long this thing happens for when it happens. If durationMax is present, this
     * element indicates the lower bound of the allowed range of the duration.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $duration = null;

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If present, indicates that the duration is a range - so to perform the action
     * between [duration] and [durationMax] time length.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $durationMax = null;

    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The units of time for the duration, in UCUM units.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime
     */
    private $durationUnit = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The number of times to repeat the action within the specified period. If
     * frequencyMax is present, this element indicates the lower bound of the allowed
     * range of the frequency.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    private $frequency = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * If present, indicates that the frequency is a range - so to repeat between
     * [frequency] and [frequencyMax] times within the period or period range.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    private $frequencyMax = null;

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The number of minutes from the event. If the event code does not indicate
     * whether the minutes is before or after the event, then the offset is assumed to
     * be after the event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    private $offset = null;

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the duration of time over which repetitions are to occur; e.g. to
     * express "3 times per day", 3 would be the frequency and "1 day" would be the
     * period. If periodMax is present, this element indicates the lower bound of the
     * allowed range of the period length.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $period = null;

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If present, indicates that the period is a range from [period] to [periodMax],
     * allowing expressing concepts such as "do this once every 3-5 days.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $periodMax = null;

    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The units of time for the period in UCUM units.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime
     */
    private $periodUnit = null;

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specified time of day for action to take place.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTime[]
     */
    private $timeOfDay = [];

    /**
     * Real world event relating to the schedule.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An approximate time period during the day, potentially linked to an event of
     * daily living that indicates when the action should occur.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIREventTiming[]
     */
    private $when = [];

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
            if ($data[self::FIELD_COUNT] instanceof FHIRPositiveInt) {
                $this->setCount($data[self::FIELD_COUNT]);
            } elseif ($ext && is_scalar($data[self::FIELD_COUNT])) {
                $this->setCount(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_COUNT]] + $ext));
            } else {
                $this->setCount(new FHIRPositiveInt($data[self::FIELD_COUNT]));
            }
        }
        if (isset($data[self::FIELD_COUNT_MAX])) {
            $ext = (isset($data[self::FIELD_COUNT_MAX_EXT]) && is_array($data[self::FIELD_COUNT_MAX_EXT]))
                ? $data[self::FIELD_COUNT_MAX_EXT]
                : null;
            if ($data[self::FIELD_COUNT_MAX] instanceof FHIRPositiveInt) {
                $this->setCountMax($data[self::FIELD_COUNT_MAX]);
            } elseif ($ext && is_scalar($data[self::FIELD_COUNT_MAX])) {
                $this->setCountMax(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_COUNT_MAX]] + $ext));
            } else {
                $this->setCountMax(new FHIRPositiveInt($data[self::FIELD_COUNT_MAX]));
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
            if ($data[self::FIELD_DURATION_UNIT] instanceof FHIRUnitsOfTime) {
                $this->setDurationUnit($data[self::FIELD_DURATION_UNIT]);
            } else {
                $this->setDurationUnit(new FHIRUnitsOfTime($data[self::FIELD_DURATION_UNIT]));
            }
        }
        if (isset($data[self::FIELD_FREQUENCY])) {
            $ext = (isset($data[self::FIELD_FREQUENCY_EXT]) && is_array($data[self::FIELD_FREQUENCY_EXT]))
                ? $data[self::FIELD_FREQUENCY_EXT]
                : null;
            if ($data[self::FIELD_FREQUENCY] instanceof FHIRPositiveInt) {
                $this->setFrequency($data[self::FIELD_FREQUENCY]);
            } elseif ($ext && is_scalar($data[self::FIELD_FREQUENCY])) {
                $this->setFrequency(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_FREQUENCY]] + $ext));
            } else {
                $this->setFrequency(new FHIRPositiveInt($data[self::FIELD_FREQUENCY]));
            }
        }
        if (isset($data[self::FIELD_FREQUENCY_MAX])) {
            $ext = (isset($data[self::FIELD_FREQUENCY_MAX_EXT]) && is_array($data[self::FIELD_FREQUENCY_MAX_EXT]))
                ? $data[self::FIELD_FREQUENCY_MAX_EXT]
                : null;
            if ($data[self::FIELD_FREQUENCY_MAX] instanceof FHIRPositiveInt) {
                $this->setFrequencyMax($data[self::FIELD_FREQUENCY_MAX]);
            } elseif ($ext && is_scalar($data[self::FIELD_FREQUENCY_MAX])) {
                $this->setFrequencyMax(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_FREQUENCY_MAX]] + $ext));
            } else {
                $this->setFrequencyMax(new FHIRPositiveInt($data[self::FIELD_FREQUENCY_MAX]));
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
            if ($data[self::FIELD_PERIOD_UNIT] instanceof FHIRUnitsOfTime) {
                $this->setPeriodUnit($data[self::FIELD_PERIOD_UNIT]);
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
            if (is_array($data[self::FIELD_WHEN])) {
                foreach($data[self::FIELD_WHEN] as $v) {
                    if ($v instanceof FHIREventTiming) {
                        $this->addWhen($v);
                    } else {
                        $this->addWhen(new FHIREventTiming($v));
                    }
                }
            } else if ($data[self::FIELD_WHEN] instanceof FHIREventTiming) {
                $this->addWhen($data[self::FIELD_WHEN]);
            } else {
                $this->addWhen(new FHIREventTiming($data[self::FIELD_WHEN]));
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
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     * (choose any one of bounds*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getBoundsDuration()
    {
        return $this->boundsDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     * (choose any one of bounds*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration $boundsDuration
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming\FHIRTimingRepeat
     */
    public function setBoundsDuration(FHIRDuration $boundsDuration = null)
    {
        $this->boundsDuration = $boundsDuration;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     * (choose any one of bounds*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getBoundsPeriod()
    {
        return $this->boundsPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     * (choose any one of bounds*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod $boundsPeriod
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming\FHIRTimingRepeat
     */
    public function setBoundsPeriod(FHIRPeriod $boundsPeriod = null)
    {
        $this->boundsPeriod = $boundsPeriod;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     * (choose any one of bounds*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getBoundsRange()
    {
        return $this->boundsRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     * (choose any one of bounds*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRange $boundsRange
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming\FHIRTimingRepeat
     */
    public function setBoundsRange(FHIRRange $boundsRange = null)
    {
        $this->boundsRange = $boundsRange;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A total count of the desired number of repetitions across the duration of the
     * entire timing specification. If countMax is present, this element indicates the
     * lower bound of the allowed range of count values.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A total count of the desired number of repetitions across the duration of the
     * entire timing specification. If countMax is present, this element indicates the
     * lower bound of the allowed range of count values.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $count
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming\FHIRTimingRepeat
     */
    public function setCount($count = null)
    {
        if (null === $count) {
            $this->count = null;
            return $this;
        }
        if ($count instanceof FHIRPositiveInt) {
            $this->count = $count;
            return $this;
        }
        $this->count = new FHIRPositiveInt($count);
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * If present, indicates that the count is a range - so to perform the action
     * between [count] and [countMax] times.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getCountMax()
    {
        return $this->countMax;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * If present, indicates that the count is a range - so to perform the action
     * between [count] and [countMax] times.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $countMax
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming\FHIRTimingRepeat
     */
    public function setCountMax($countMax = null)
    {
        if (null === $countMax) {
            $this->countMax = null;
            return $this;
        }
        if ($countMax instanceof FHIRPositiveInt) {
            $this->countMax = $countMax;
            return $this;
        }
        $this->countMax = new FHIRPositiveInt($countMax);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * If one or more days of week is provided, then the action happens only on the
     * specified day(s).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCode[]
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * If one or more days of week is provided, then the action happens only on the
     * specified day(s).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCode $dayOfWeek
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming\FHIRTimingRepeat
     */
    public function addDayOfWeek($dayOfWeek = null)
    {
        if (null === $dayOfWeek) {
            $this->dayOfWeek = null;
            return $this;
        }
        if ($dayOfWeek instanceof FHIRCode) {
            $this->dayOfWeek = $dayOfWeek;
            return $this;
        }
        $this->dayOfWeek = new FHIRCode($dayOfWeek);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * If one or more days of week is provided, then the action happens only on the
     * specified day(s).
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCode[] $dayOfWeek
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming\FHIRTimingRepeat
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
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * How long this thing happens for when it happens. If durationMax is present, this
     * element indicates the lower bound of the allowed range of the duration.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * How long this thing happens for when it happens. If durationMax is present, this
     * element indicates the lower bound of the allowed range of the duration.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal $duration
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming\FHIRTimingRepeat
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
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If present, indicates that the duration is a range - so to perform the action
     * between [duration] and [durationMax] time length.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getDurationMax()
    {
        return $this->durationMax;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If present, indicates that the duration is a range - so to perform the action
     * between [duration] and [durationMax] time length.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal $durationMax
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming\FHIRTimingRepeat
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The units of time for the duration, in UCUM units.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime
     */
    public function getDurationUnit()
    {
        return $this->durationUnit;
    }

    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The units of time for the duration, in UCUM units.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime $durationUnit
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming\FHIRTimingRepeat
     */
    public function setDurationUnit(FHIRUnitsOfTime $durationUnit = null)
    {
        $this->durationUnit = $durationUnit;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The number of times to repeat the action within the specified period. If
     * frequencyMax is present, this element indicates the lower bound of the allowed
     * range of the frequency.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The number of times to repeat the action within the specified period. If
     * frequencyMax is present, this element indicates the lower bound of the allowed
     * range of the frequency.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $frequency
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming\FHIRTimingRepeat
     */
    public function setFrequency($frequency = null)
    {
        if (null === $frequency) {
            $this->frequency = null;
            return $this;
        }
        if ($frequency instanceof FHIRPositiveInt) {
            $this->frequency = $frequency;
            return $this;
        }
        $this->frequency = new FHIRPositiveInt($frequency);
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * If present, indicates that the frequency is a range - so to repeat between
     * [frequency] and [frequencyMax] times within the period or period range.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getFrequencyMax()
    {
        return $this->frequencyMax;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * If present, indicates that the frequency is a range - so to repeat between
     * [frequency] and [frequencyMax] times within the period or period range.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $frequencyMax
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming\FHIRTimingRepeat
     */
    public function setFrequencyMax($frequencyMax = null)
    {
        if (null === $frequencyMax) {
            $this->frequencyMax = null;
            return $this;
        }
        if ($frequencyMax instanceof FHIRPositiveInt) {
            $this->frequencyMax = $frequencyMax;
            return $this;
        }
        $this->frequencyMax = new FHIRPositiveInt($frequencyMax);
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The number of minutes from the event. If the event code does not indicate
     * whether the minutes is before or after the event, then the offset is assumed to
     * be after the event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The number of minutes from the event. If the event code does not indicate
     * whether the minutes is before or after the event, then the offset is assumed to
     * be after the event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $offset
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming\FHIRTimingRepeat
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
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the duration of time over which repetitions are to occur; e.g. to
     * express "3 times per day", 3 would be the frequency and "1 day" would be the
     * period. If periodMax is present, this element indicates the lower bound of the
     * allowed range of the period length.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the duration of time over which repetitions are to occur; e.g. to
     * express "3 times per day", 3 would be the frequency and "1 day" would be the
     * period. If periodMax is present, this element indicates the lower bound of the
     * allowed range of the period length.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal $period
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming\FHIRTimingRepeat
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
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If present, indicates that the period is a range from [period] to [periodMax],
     * allowing expressing concepts such as "do this once every 3-5 days.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getPeriodMax()
    {
        return $this->periodMax;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If present, indicates that the period is a range from [period] to [periodMax],
     * allowing expressing concepts such as "do this once every 3-5 days.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal $periodMax
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming\FHIRTimingRepeat
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The units of time for the period in UCUM units.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime
     */
    public function getPeriodUnit()
    {
        return $this->periodUnit;
    }

    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The units of time for the period in UCUM units.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime $periodUnit
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming\FHIRTimingRepeat
     */
    public function setPeriodUnit(FHIRUnitsOfTime $periodUnit = null)
    {
        $this->periodUnit = $periodUnit;
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specified time of day for action to take place.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTime[]
     */
    public function getTimeOfDay()
    {
        return $this->timeOfDay;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specified time of day for action to take place.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTime $timeOfDay
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming\FHIRTimingRepeat
     */
    public function addTimeOfDay($timeOfDay = null)
    {
        if (null === $timeOfDay) {
            $this->timeOfDay = null;
            return $this;
        }
        if ($timeOfDay instanceof FHIRTime) {
            $this->timeOfDay = $timeOfDay;
            return $this;
        }
        $this->timeOfDay = new FHIRTime($timeOfDay);
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specified time of day for action to take place.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTime[] $timeOfDay
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming\FHIRTimingRepeat
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An approximate time period during the day, potentially linked to an event of
     * daily living that indicates when the action should occur.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIREventTiming[]
     */
    public function getWhen()
    {
        return $this->when;
    }

    /**
     * Real world event relating to the schedule.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An approximate time period during the day, potentially linked to an event of
     * daily living that indicates when the action should occur.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIREventTiming $when
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming\FHIRTimingRepeat
     */
    public function addWhen(FHIREventTiming $when = null)
    {
        $this->when[] = $when;
        return $this;
    }

    /**
     * Real world event relating to the schedule.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An approximate time period during the day, potentially linked to an event of
     * daily living that indicates when the action should occur.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIREventTiming[] $when
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming\FHIRTimingRepeat
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
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming\FHIRTimingRepeat $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming\FHIRTimingRepeat
     */
    public static function xmlUnserialize($sxe = null, $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRTimingRepeat::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRTimingRepeat::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRTimingRepeat);
        } elseif (!is_object($type) || !($type instanceof FHIRTimingRepeat)) {
            throw new \RuntimeException(sprintf(
                'FHIRTimingRepeat::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming\FHIRTimingRepeat or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
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
            $type->setCount(FHIRPositiveInt::xmlUnserialize($children->count));
        }
        if (isset($attributes->countMax)) {
            $type->setCountMax((string)$attributes->countMax);
        }
        if (isset($children->countMax)) {
            $type->setCountMax(FHIRPositiveInt::xmlUnserialize($children->countMax));
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
            $type->setFrequency(FHIRPositiveInt::xmlUnserialize($children->frequency));
        }
        if (isset($attributes->frequencyMax)) {
            $type->setFrequencyMax((string)$attributes->frequencyMax);
        }
        if (isset($children->frequencyMax)) {
            $type->setFrequencyMax(FHIRPositiveInt::xmlUnserialize($children->frequencyMax));
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
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<TimingRepeat xmlns="http://hl7.org/fhir"></TimingRepeat>');
        }
        if (null !== ($v = $this->getBoundsDuration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BOUNDS_DURATION));
        }
        if (null !== ($v = $this->getBoundsPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BOUNDS_PERIOD));
        }
        if (null !== ($v = $this->getBoundsRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BOUNDS_RANGE));
        }
        if (null !== ($v = $this->getCount())) {
            $sxe->addAttribute(self::FIELD_COUNT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_COUNT));
            }
        }
        if (null !== ($v = $this->getCountMax())) {
            $sxe->addAttribute(self::FIELD_COUNT_MAX, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_COUNT_MAX));
            }
        }
        if ([] !== ($vs = $this->getDayOfWeek())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_DAY_OF_WEEK, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_DAY_OF_WEEK));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_DAY_OF_WEEK));
                }
            }
        }
        if (null !== ($v = $this->getDuration())) {
            $sxe->addAttribute(self::FIELD_DURATION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DURATION));
            }
        }
        if (null !== ($v = $this->getDurationMax())) {
            $sxe->addAttribute(self::FIELD_DURATION_MAX, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DURATION_MAX));
            }
        }
        if (null !== ($v = $this->getDurationUnit())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DURATION_UNIT));
        }
        if (null !== ($v = $this->getFrequency())) {
            $sxe->addAttribute(self::FIELD_FREQUENCY, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_FREQUENCY));
            }
        }
        if (null !== ($v = $this->getFrequencyMax())) {
            $sxe->addAttribute(self::FIELD_FREQUENCY_MAX, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_FREQUENCY_MAX));
            }
        }
        if (null !== ($v = $this->getOffset())) {
            $sxe->addAttribute(self::FIELD_OFFSET, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_OFFSET));
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            $sxe->addAttribute(self::FIELD_PERIOD, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD));
            }
        }
        if (null !== ($v = $this->getPeriodMax())) {
            $sxe->addAttribute(self::FIELD_PERIOD_MAX, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD_MAX));
            }
        }
        if (null !== ($v = $this->getPeriodUnit())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD_UNIT));
        }
        if ([] !== ($vs = $this->getTimeOfDay())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_TIME_OF_DAY, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_TIME_OF_DAY));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_TIME_OF_DAY));
                }
            }
        }
        if ([] !== ($vs = $this->getWhen())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_WHEN));
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
            $a[self::FIELD_COUNT] = (string)$v;
            $a[self::FIELD_COUNT_EXT] = $v;
        }
        if (null !== ($v = $this->getCountMax())) {
            $a[self::FIELD_COUNT_MAX] = (string)$v;
            $a[self::FIELD_COUNT_MAX_EXT] = $v;
        }
        if ([] !== ($vs = $this->getDayOfWeek())) {
            $a[self::FIELD_DAY_OF_WEEK] = [];
            $a[self::FIELD_DAY_OF_WEEK_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_DAY_OF_WEEK][] = (string)$v;
                $a[self::FIELD_DAY_OF_WEEK_EXT][] = $v;
            }
        }
        if (null !== ($v = $this->getDuration())) {
            $a[self::FIELD_DURATION] = (string)$v;
            $a[self::FIELD_DURATION_EXT] = $v;
        }
        if (null !== ($v = $this->getDurationMax())) {
            $a[self::FIELD_DURATION_MAX] = (string)$v;
            $a[self::FIELD_DURATION_MAX_EXT] = $v;
        }
        if (null !== ($v = $this->getDurationUnit())) {
            $a[self::FIELD_DURATION_UNIT] = $v;
        }
        if (null !== ($v = $this->getFrequency())) {
            $a[self::FIELD_FREQUENCY] = (string)$v;
            $a[self::FIELD_FREQUENCY_EXT] = $v;
        }
        if (null !== ($v = $this->getFrequencyMax())) {
            $a[self::FIELD_FREQUENCY_MAX] = (string)$v;
            $a[self::FIELD_FREQUENCY_MAX_EXT] = $v;
        }
        if (null !== ($v = $this->getOffset())) {
            $a[self::FIELD_OFFSET] = (string)$v;
            $a[self::FIELD_OFFSET_EXT] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = (string)$v;
            $a[self::FIELD_PERIOD_EXT] = $v;
        }
        if (null !== ($v = $this->getPeriodMax())) {
            $a[self::FIELD_PERIOD_MAX] = (string)$v;
            $a[self::FIELD_PERIOD_MAX_EXT] = $v;
        }
        if (null !== ($v = $this->getPeriodUnit())) {
            $a[self::FIELD_PERIOD_UNIT] = $v;
        }
        if ([] !== ($vs = $this->getTimeOfDay())) {
            $a[self::FIELD_TIME_OF_DAY] = [];
            $a[self::FIELD_TIME_OF_DAY_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_TIME_OF_DAY][] = (string)$v;
                $a[self::FIELD_TIME_OF_DAY_EXT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getWhen())) {
            $a[self::FIELD_WHEN] = $vs;
        }
        return [FHIR_JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}