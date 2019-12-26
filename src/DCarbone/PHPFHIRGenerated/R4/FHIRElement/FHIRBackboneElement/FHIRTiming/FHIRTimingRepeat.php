<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIREventTiming;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnitsOfTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

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
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
 */
class FHIRTimingRepeat extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT;
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

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     * (choose any one of bounds*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected $boundsDuration = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     * (choose any one of bounds*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    protected $boundsPeriod = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     * (choose any one of bounds*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    protected $boundsRange = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A total count of the desired number of repetitions across the duration of the
     * entire timing specification. If countMax is present, this element indicates the
     * lower bound of the allowed range of count values.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    protected $count = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If present, indicates that the count is a range - so to perform the action
     * between [count] and [countMax] times.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode[]
     */
    protected $dayOfWeek = [];

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How long this thing happens for when it happens. If durationMax is present, this
     * element indicates the lower bound of the allowed range of the duration.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    protected $duration = null;

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the duration is a range - so to perform the action
     * between [duration] and [durationMax] time length.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    protected $durationMax = null;

    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the duration, in UCUM units.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnitsOfTime
     */
    protected $durationUnit = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of times to repeat the action within the specified period. If
     * frequencyMax is present, this element indicates the lower bound of the allowed
     * range of the frequency.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    protected $frequency = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If present, indicates that the frequency is a range - so to repeat between
     * [frequency] and [frequencyMax] times within the period or period range.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt
     */
    protected $offset = null;

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the duration of time over which repetitions are to occur; e.g. to
     * express "3 times per day", 3 would be the frequency and "1 day" would be the
     * period. If periodMax is present, this element indicates the lower bound of the
     * allowed range of the period length.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    protected $period = null;

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the period is a range from [period] to [periodMax],
     * allowing expressing concepts such as "do this once every 3-5 days.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    protected $periodMax = null;

    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the period in UCUM units.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnitsOfTime
     */
    protected $periodUnit = null;

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified time of day for action to take place.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime[]
     */
    protected $timeOfDay = [];

    /**
     * Real world event relating to the schedule.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An approximate time period during the day, potentially linked to an event of
     * daily living that indicates when the action should occur.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIREventTiming[]
     */
    protected $when = [];

    /**
     * Validation map for fields in type Timing.Repeat
     * @var array
     */
    private static $_validationRules = [    ];

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
                if ($value instanceof FHIRPositiveInt) {
                    $this->setCount($value);
                } else if (is_array($value)) {
                    $this->setCount(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setCount(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCount(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_COUNT_MAX]) || isset($data[self::FIELD_COUNT_MAX_EXT])) {
            if (isset($data[self::FIELD_COUNT_MAX])) {
                $value = $data[self::FIELD_COUNT_MAX];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_COUNT_MAX_EXT]) && is_array($data[self::FIELD_COUNT_MAX_EXT])) {
                $ext = $data[self::FIELD_COUNT_MAX_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setCountMax($value);
                } else if (is_array($value)) {
                    $this->setCountMax(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setCountMax(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCountMax(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_DAY_OF_WEEK]) || isset($data[self::FIELD_DAY_OF_WEEK_EXT])) {
            if (isset($data[self::FIELD_DAY_OF_WEEK])) {
                $value = $data[self::FIELD_DAY_OF_WEEK];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DAY_OF_WEEK_EXT]) && is_array($data[self::FIELD_DAY_OF_WEEK_EXT])) {
                $ext = $data[self::FIELD_DAY_OF_WEEK_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->addDayOfWeek($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRCode) {
                            $this->addDayOfWeek($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addDayOfWeek(new FHIRCode(array_merge($v, $iext)));
                            } else {
                                $this->addDayOfWeek(new FHIRCode([FHIRCode::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addDayOfWeek(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->addDayOfWeek(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addDayOfWeek(new FHIRCode($iext));
                }
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
        if (isset($data[self::FIELD_DURATION_MAX]) || isset($data[self::FIELD_DURATION_MAX_EXT])) {
            if (isset($data[self::FIELD_DURATION_MAX])) {
                $value = $data[self::FIELD_DURATION_MAX];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DURATION_MAX_EXT]) && is_array($data[self::FIELD_DURATION_MAX_EXT])) {
                $ext = $data[self::FIELD_DURATION_MAX_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setDurationMax($value);
                } else if (is_array($value)) {
                    $this->setDurationMax(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setDurationMax(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDurationMax(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_DURATION_UNIT]) || isset($data[self::FIELD_DURATION_UNIT_EXT])) {
            if (isset($data[self::FIELD_DURATION_UNIT])) {
                $value = $data[self::FIELD_DURATION_UNIT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DURATION_UNIT_EXT]) && is_array($data[self::FIELD_DURATION_UNIT_EXT])) {
                $ext = $data[self::FIELD_DURATION_UNIT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUnitsOfTime) {
                    $this->setDurationUnit($value);
                } else if (is_array($value)) {
                    $this->setDurationUnit(new FHIRUnitsOfTime(array_merge($ext, $value)));
                } else {
                    $this->setDurationUnit(new FHIRUnitsOfTime([FHIRUnitsOfTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDurationUnit(new FHIRUnitsOfTime($ext));
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
                if ($value instanceof FHIRPositiveInt) {
                    $this->setFrequency($value);
                } else if (is_array($value)) {
                    $this->setFrequency(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setFrequency(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFrequency(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_FREQUENCY_MAX]) || isset($data[self::FIELD_FREQUENCY_MAX_EXT])) {
            if (isset($data[self::FIELD_FREQUENCY_MAX])) {
                $value = $data[self::FIELD_FREQUENCY_MAX];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FREQUENCY_MAX_EXT]) && is_array($data[self::FIELD_FREQUENCY_MAX_EXT])) {
                $ext = $data[self::FIELD_FREQUENCY_MAX_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setFrequencyMax($value);
                } else if (is_array($value)) {
                    $this->setFrequencyMax(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setFrequencyMax(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFrequencyMax(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_OFFSET]) || isset($data[self::FIELD_OFFSET_EXT])) {
            if (isset($data[self::FIELD_OFFSET])) {
                $value = $data[self::FIELD_OFFSET];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_OFFSET_EXT]) && is_array($data[self::FIELD_OFFSET_EXT])) {
                $ext = $data[self::FIELD_OFFSET_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setOffset($value);
                } else if (is_array($value)) {
                    $this->setOffset(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setOffset(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setOffset(new FHIRUnsignedInt($ext));
            }
        }
        if (isset($data[self::FIELD_PERIOD]) || isset($data[self::FIELD_PERIOD_EXT])) {
            if (isset($data[self::FIELD_PERIOD])) {
                $value = $data[self::FIELD_PERIOD];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PERIOD_EXT]) && is_array($data[self::FIELD_PERIOD_EXT])) {
                $ext = $data[self::FIELD_PERIOD_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setPeriod($value);
                } else if (is_array($value)) {
                    $this->setPeriod(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setPeriod(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPeriod(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_PERIOD_MAX]) || isset($data[self::FIELD_PERIOD_MAX_EXT])) {
            if (isset($data[self::FIELD_PERIOD_MAX])) {
                $value = $data[self::FIELD_PERIOD_MAX];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PERIOD_MAX_EXT]) && is_array($data[self::FIELD_PERIOD_MAX_EXT])) {
                $ext = $data[self::FIELD_PERIOD_MAX_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setPeriodMax($value);
                } else if (is_array($value)) {
                    $this->setPeriodMax(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setPeriodMax(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPeriodMax(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_PERIOD_UNIT]) || isset($data[self::FIELD_PERIOD_UNIT_EXT])) {
            if (isset($data[self::FIELD_PERIOD_UNIT])) {
                $value = $data[self::FIELD_PERIOD_UNIT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PERIOD_UNIT_EXT]) && is_array($data[self::FIELD_PERIOD_UNIT_EXT])) {
                $ext = $data[self::FIELD_PERIOD_UNIT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUnitsOfTime) {
                    $this->setPeriodUnit($value);
                } else if (is_array($value)) {
                    $this->setPeriodUnit(new FHIRUnitsOfTime(array_merge($ext, $value)));
                } else {
                    $this->setPeriodUnit(new FHIRUnitsOfTime([FHIRUnitsOfTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPeriodUnit(new FHIRUnitsOfTime($ext));
            }
        }
        if (isset($data[self::FIELD_TIME_OF_DAY]) || isset($data[self::FIELD_TIME_OF_DAY_EXT])) {
            if (isset($data[self::FIELD_TIME_OF_DAY])) {
                $value = $data[self::FIELD_TIME_OF_DAY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TIME_OF_DAY_EXT]) && is_array($data[self::FIELD_TIME_OF_DAY_EXT])) {
                $ext = $data[self::FIELD_TIME_OF_DAY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $this->addTimeOfDay($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRTime) {
                            $this->addTimeOfDay($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addTimeOfDay(new FHIRTime(array_merge($v, $iext)));
                            } else {
                                $this->addTimeOfDay(new FHIRTime([FHIRTime::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addTimeOfDay(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $this->addTimeOfDay(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addTimeOfDay(new FHIRTime($iext));
                }
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
                    $this->addWhen($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIREventTiming) {
                            $this->addWhen($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addWhen(new FHIREventTiming(array_merge($v, $iext)));
                            } else {
                                $this->addWhen(new FHIREventTiming([FHIREventTiming::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addWhen(new FHIREventTiming(array_merge($ext, $value)));
                } else {
                    $this->addWhen(new FHIREventTiming([FHIREventTiming::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addWhen(new FHIREventTiming($iext));
                }
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
        return "<TimingRepeat{$xmlns}></TimingRepeat>";
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     * (choose any one of bounds*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
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
     * (choose any one of bounds*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration $boundsDuration
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
     * (choose any one of bounds*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
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
     * (choose any one of bounds*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $boundsPeriod
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
     * (choose any one of bounds*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
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
     * (choose any one of bounds*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange $boundsRange
     * @return static
     */
    public function setBoundsRange(FHIRRange $boundsRange = null)
    {
        $this->boundsRange = $boundsRange;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A total count of the desired number of repetitions across the duration of the
     * entire timing specification. If countMax is present, this element indicates the
     * lower bound of the allowed range of count values.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A total count of the desired number of repetitions across the duration of the
     * entire timing specification. If countMax is present, this element indicates the
     * lower bound of the allowed range of count values.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt $count
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If present, indicates that the count is a range - so to perform the action
     * between [count] and [countMax] times.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    public function getCountMax()
    {
        return $this->countMax;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If present, indicates that the count is a range - so to perform the action
     * between [count] and [countMax] times.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt $countMax
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If one or more days of week is provided, then the action happens only on the
     * specified day(s).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode $dayOfWeek
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode[] $dayOfWeek
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
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How long this thing happens for when it happens. If durationMax is present, this
     * element indicates the lower bound of the allowed range of the duration.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How long this thing happens for when it happens. If durationMax is present, this
     * element indicates the lower bound of the allowed range of the duration.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $duration
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
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the duration is a range - so to perform the action
     * between [duration] and [durationMax] time length.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getDurationMax()
    {
        return $this->durationMax;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the duration is a range - so to perform the action
     * between [duration] and [durationMax] time length.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $durationMax
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnitsOfTime
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnitsOfTime $durationUnit
     * @return static
     */
    public function setDurationUnit(FHIRUnitsOfTime $durationUnit = null)
    {
        $this->durationUnit = $durationUnit;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of times to repeat the action within the specified period. If
     * frequencyMax is present, this element indicates the lower bound of the allowed
     * range of the frequency.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of times to repeat the action within the specified period. If
     * frequencyMax is present, this element indicates the lower bound of the allowed
     * range of the frequency.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt $frequency
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If present, indicates that the frequency is a range - so to repeat between
     * [frequency] and [frequencyMax] times within the period or period range.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    public function getFrequencyMax()
    {
        return $this->frequencyMax;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If present, indicates that the frequency is a range - so to repeat between
     * [frequency] and [frequencyMax] times within the period or period range.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt $frequencyMax
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of minutes from the event. If the event code does not indicate
     * whether the minutes is before or after the event, then the offset is assumed to
     * be after the event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt $offset
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
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the duration of time over which repetitions are to occur; e.g. to
     * express "3 times per day", 3 would be the frequency and "1 day" would be the
     * period. If periodMax is present, this element indicates the lower bound of the
     * allowed range of the period length.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the duration of time over which repetitions are to occur; e.g. to
     * express "3 times per day", 3 would be the frequency and "1 day" would be the
     * period. If periodMax is present, this element indicates the lower bound of the
     * allowed range of the period length.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $period
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
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the period is a range from [period] to [periodMax],
     * allowing expressing concepts such as "do this once every 3-5 days.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getPeriodMax()
    {
        return $this->periodMax;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the period is a range from [period] to [periodMax],
     * allowing expressing concepts such as "do this once every 3-5 days.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $periodMax
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnitsOfTime
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnitsOfTime $periodUnit
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime $timeOfDay
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime[] $timeOfDay
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
     * An approximate time period during the day, potentially linked to an event of
     * daily living that indicates when the action should occur.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIREventTiming[]
     */
    public function getWhen()
    {
        return $this->when;
    }

    /**
     * Real world event relating to the schedule.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An approximate time period during the day, potentially linked to an event of
     * daily living that indicates when the action should occur.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIREventTiming $when
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
     * An approximate time period during the day, potentially linked to an event of
     * daily living that indicates when the action should occur.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIREventTiming[] $when
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
        if (null !== ($v = $this->getBoundsDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BOUNDS_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBoundsPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BOUNDS_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBoundsRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BOUNDS_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCount())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COUNT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCountMax())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COUNT_MAX] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDayOfWeek())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DAY_OF_WEEK, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDurationMax())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DURATION_MAX] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDurationUnit())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DURATION_UNIT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFrequency())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FREQUENCY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFrequencyMax())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FREQUENCY_MAX] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOffset())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OFFSET] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPeriodMax())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERIOD_MAX] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPeriodUnit())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERIOD_UNIT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getTimeOfDay())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TIME_OF_DAY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getWhen())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_WHEN, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BOUNDS_DURATION])) {
            $v = $this->getBoundsDuration();
            foreach($validationRules[self::FIELD_BOUNDS_DURATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_BOUNDS_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BOUNDS_DURATION])) {
                        $errs[self::FIELD_BOUNDS_DURATION] = [];
                    }
                    $errs[self::FIELD_BOUNDS_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BOUNDS_PERIOD])) {
            $v = $this->getBoundsPeriod();
            foreach($validationRules[self::FIELD_BOUNDS_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_BOUNDS_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BOUNDS_PERIOD])) {
                        $errs[self::FIELD_BOUNDS_PERIOD] = [];
                    }
                    $errs[self::FIELD_BOUNDS_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BOUNDS_RANGE])) {
            $v = $this->getBoundsRange();
            foreach($validationRules[self::FIELD_BOUNDS_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_BOUNDS_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BOUNDS_RANGE])) {
                        $errs[self::FIELD_BOUNDS_RANGE] = [];
                    }
                    $errs[self::FIELD_BOUNDS_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COUNT])) {
            $v = $this->getCount();
            foreach($validationRules[self::FIELD_COUNT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_COUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COUNT])) {
                        $errs[self::FIELD_COUNT] = [];
                    }
                    $errs[self::FIELD_COUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COUNT_MAX])) {
            $v = $this->getCountMax();
            foreach($validationRules[self::FIELD_COUNT_MAX] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_COUNT_MAX, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COUNT_MAX])) {
                        $errs[self::FIELD_COUNT_MAX] = [];
                    }
                    $errs[self::FIELD_COUNT_MAX][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DAY_OF_WEEK])) {
            $v = $this->getDayOfWeek();
            foreach($validationRules[self::FIELD_DAY_OF_WEEK] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_DAY_OF_WEEK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DAY_OF_WEEK])) {
                        $errs[self::FIELD_DAY_OF_WEEK] = [];
                    }
                    $errs[self::FIELD_DAY_OF_WEEK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DURATION])) {
            $v = $this->getDuration();
            foreach($validationRules[self::FIELD_DURATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DURATION])) {
                        $errs[self::FIELD_DURATION] = [];
                    }
                    $errs[self::FIELD_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DURATION_MAX])) {
            $v = $this->getDurationMax();
            foreach($validationRules[self::FIELD_DURATION_MAX] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_DURATION_MAX, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DURATION_MAX])) {
                        $errs[self::FIELD_DURATION_MAX] = [];
                    }
                    $errs[self::FIELD_DURATION_MAX][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DURATION_UNIT])) {
            $v = $this->getDurationUnit();
            foreach($validationRules[self::FIELD_DURATION_UNIT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_DURATION_UNIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DURATION_UNIT])) {
                        $errs[self::FIELD_DURATION_UNIT] = [];
                    }
                    $errs[self::FIELD_DURATION_UNIT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FREQUENCY])) {
            $v = $this->getFrequency();
            foreach($validationRules[self::FIELD_FREQUENCY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_FREQUENCY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FREQUENCY])) {
                        $errs[self::FIELD_FREQUENCY] = [];
                    }
                    $errs[self::FIELD_FREQUENCY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FREQUENCY_MAX])) {
            $v = $this->getFrequencyMax();
            foreach($validationRules[self::FIELD_FREQUENCY_MAX] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_FREQUENCY_MAX, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FREQUENCY_MAX])) {
                        $errs[self::FIELD_FREQUENCY_MAX] = [];
                    }
                    $errs[self::FIELD_FREQUENCY_MAX][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OFFSET])) {
            $v = $this->getOffset();
            foreach($validationRules[self::FIELD_OFFSET] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_OFFSET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OFFSET])) {
                        $errs[self::FIELD_OFFSET] = [];
                    }
                    $errs[self::FIELD_OFFSET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD])) {
            $v = $this->getPeriod();
            foreach($validationRules[self::FIELD_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD])) {
                        $errs[self::FIELD_PERIOD] = [];
                    }
                    $errs[self::FIELD_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD_MAX])) {
            $v = $this->getPeriodMax();
            foreach($validationRules[self::FIELD_PERIOD_MAX] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_PERIOD_MAX, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD_MAX])) {
                        $errs[self::FIELD_PERIOD_MAX] = [];
                    }
                    $errs[self::FIELD_PERIOD_MAX][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD_UNIT])) {
            $v = $this->getPeriodUnit();
            foreach($validationRules[self::FIELD_PERIOD_UNIT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_PERIOD_UNIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD_UNIT])) {
                        $errs[self::FIELD_PERIOD_UNIT] = [];
                    }
                    $errs[self::FIELD_PERIOD_UNIT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIME_OF_DAY])) {
            $v = $this->getTimeOfDay();
            foreach($validationRules[self::FIELD_TIME_OF_DAY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_TIME_OF_DAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIME_OF_DAY])) {
                        $errs[self::FIELD_TIME_OF_DAY] = [];
                    }
                    $errs[self::FIELD_TIME_OF_DAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WHEN])) {
            $v = $this->getWhen();
            foreach($validationRules[self::FIELD_WHEN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT, self::FIELD_WHEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHEN])) {
                        $errs[self::FIELD_WHEN] = [];
                    }
                    $errs[self::FIELD_WHEN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming\FHIRTimingRepeat $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming\FHIRTimingRepeat
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
                'FHIRTimingRepeat::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming\FHIRTimingRepeat or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
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
        if (isset($children->count)) {
            $type->setCount(FHIRPositiveInt::xmlUnserialize($children->count));
        }
        if (isset($attributes->count)) {
            $pt = $type->getCount();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->count);
            } else {
                $type->setCount((string)$attributes->count);
            }
        }
        if (isset($children->countMax)) {
            $type->setCountMax(FHIRPositiveInt::xmlUnserialize($children->countMax));
        }
        if (isset($attributes->countMax)) {
            $pt = $type->getCountMax();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->countMax);
            } else {
                $type->setCountMax((string)$attributes->countMax);
            }
        }
        if (isset($children->dayOfWeek)) {
            foreach($children->dayOfWeek as $child) {
                $type->addDayOfWeek(FHIRCode::xmlUnserialize($child));
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
        if (isset($children->durationMax)) {
            $type->setDurationMax(FHIRDecimal::xmlUnserialize($children->durationMax));
        }
        if (isset($attributes->durationMax)) {
            $pt = $type->getDurationMax();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->durationMax);
            } else {
                $type->setDurationMax((string)$attributes->durationMax);
            }
        }
        if (isset($children->durationUnit)) {
            $type->setDurationUnit(FHIRUnitsOfTime::xmlUnserialize($children->durationUnit));
        }
        if (isset($children->frequency)) {
            $type->setFrequency(FHIRPositiveInt::xmlUnserialize($children->frequency));
        }
        if (isset($attributes->frequency)) {
            $pt = $type->getFrequency();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->frequency);
            } else {
                $type->setFrequency((string)$attributes->frequency);
            }
        }
        if (isset($children->frequencyMax)) {
            $type->setFrequencyMax(FHIRPositiveInt::xmlUnserialize($children->frequencyMax));
        }
        if (isset($attributes->frequencyMax)) {
            $pt = $type->getFrequencyMax();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->frequencyMax);
            } else {
                $type->setFrequencyMax((string)$attributes->frequencyMax);
            }
        }
        if (isset($children->offset)) {
            $type->setOffset(FHIRUnsignedInt::xmlUnserialize($children->offset));
        }
        if (isset($attributes->offset)) {
            $pt = $type->getOffset();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->offset);
            } else {
                $type->setOffset((string)$attributes->offset);
            }
        }
        if (isset($children->period)) {
            $type->setPeriod(FHIRDecimal::xmlUnserialize($children->period));
        }
        if (isset($attributes->period)) {
            $pt = $type->getPeriod();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->period);
            } else {
                $type->setPeriod((string)$attributes->period);
            }
        }
        if (isset($children->periodMax)) {
            $type->setPeriodMax(FHIRDecimal::xmlUnserialize($children->periodMax));
        }
        if (isset($attributes->periodMax)) {
            $pt = $type->getPeriodMax();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->periodMax);
            } else {
                $type->setPeriodMax((string)$attributes->periodMax);
            }
        }
        if (isset($children->periodUnit)) {
            $type->setPeriodUnit(FHIRUnitsOfTime::xmlUnserialize($children->periodUnit));
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
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRPositiveInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRPositiveInt::FIELD_VALUE]);
                $a[self::FIELD_COUNT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getCountMax())) {
            $a[self::FIELD_COUNT_MAX] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRPositiveInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRPositiveInt::FIELD_VALUE]);
                $a[self::FIELD_COUNT_MAX_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getDayOfWeek())) {
            $a[self::FIELD_DAY_OF_WEEK] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_DAY_OF_WEEK][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRCode::FIELD_VALUE]) || array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRCode::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_DAY_OF_WEEK_EXT] = $encs;
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
        if (null !== ($v = $this->getDurationMax())) {
            $a[self::FIELD_DURATION_MAX] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_DURATION_MAX_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDurationUnit())) {
            $a[self::FIELD_DURATION_UNIT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUnitsOfTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUnitsOfTime::FIELD_VALUE]);
                $a[self::FIELD_DURATION_UNIT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getFrequency())) {
            $a[self::FIELD_FREQUENCY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRPositiveInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRPositiveInt::FIELD_VALUE]);
                $a[self::FIELD_FREQUENCY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getFrequencyMax())) {
            $a[self::FIELD_FREQUENCY_MAX] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRPositiveInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRPositiveInt::FIELD_VALUE]);
                $a[self::FIELD_FREQUENCY_MAX_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getOffset())) {
            $a[self::FIELD_OFFSET] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUnsignedInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUnsignedInt::FIELD_VALUE]);
                $a[self::FIELD_OFFSET_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_PERIOD_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPeriodMax())) {
            $a[self::FIELD_PERIOD_MAX] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_PERIOD_MAX_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPeriodUnit())) {
            $a[self::FIELD_PERIOD_UNIT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUnitsOfTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUnitsOfTime::FIELD_VALUE]);
                $a[self::FIELD_PERIOD_UNIT_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getTimeOfDay())) {
            $a[self::FIELD_TIME_OF_DAY] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TIME_OF_DAY][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRTime::FIELD_VALUE]) || array_key_exists(FHIRTime::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRTime::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_TIME_OF_DAY_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getWhen())) {
            $a[self::FIELD_WHEN] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_WHEN][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIREventTiming::FIELD_VALUE]) || array_key_exists(FHIREventTiming::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIREventTiming::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_WHEN_EXT] = $encs;
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