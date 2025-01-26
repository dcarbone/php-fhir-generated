<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 26th, 2025 01:06+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIREventTiming;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnitsOfTime;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUnsignedIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * Specifies an event that may occur multiple times. Timing schedules are used to
 * record when things are planned, expected or requested to occur. The most common
 * usage is in dosage instructions for medications. They are also used when
 * planning care of various kinds, and may be used for reporting the schedule to
 * which past regular activities were carried out.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
class FHIRTimingRepeat extends FHIRElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_TIMING_DOT_REPEAT;


    public const FIELD_BOUNDS_DURATION = 'boundsDuration';
    public const FIELD_BOUNDS_RANGE = 'boundsRange';
    public const FIELD_BOUNDS_PERIOD = 'boundsPeriod';
    public const FIELD_COUNT = 'count';
    public const FIELD_COUNT_EXT = '_count';
    public const FIELD_COUNT_MAX = 'countMax';
    public const FIELD_COUNT_MAX_EXT = '_countMax';
    public const FIELD_DURATION = 'duration';
    public const FIELD_DURATION_EXT = '_duration';
    public const FIELD_DURATION_MAX = 'durationMax';
    public const FIELD_DURATION_MAX_EXT = '_durationMax';
    public const FIELD_DURATION_UNIT = 'durationUnit';
    public const FIELD_DURATION_UNIT_EXT = '_durationUnit';
    public const FIELD_FREQUENCY = 'frequency';
    public const FIELD_FREQUENCY_EXT = '_frequency';
    public const FIELD_FREQUENCY_MAX = 'frequencyMax';
    public const FIELD_FREQUENCY_MAX_EXT = '_frequencyMax';
    public const FIELD_PERIOD = 'period';
    public const FIELD_PERIOD_EXT = '_period';
    public const FIELD_PERIOD_MAX = 'periodMax';
    public const FIELD_PERIOD_MAX_EXT = '_periodMax';
    public const FIELD_PERIOD_UNIT = 'periodUnit';
    public const FIELD_PERIOD_UNIT_EXT = '_periodUnit';
    public const FIELD_DAY_OF_WEEK = 'dayOfWeek';
    public const FIELD_DAY_OF_WEEK_EXT = '_dayOfWeek';
    public const FIELD_TIME_OF_DAY = 'timeOfDay';
    public const FIELD_TIME_OF_DAY_EXT = '_timeOfDay';
    public const FIELD_WHEN = 'when';
    public const FIELD_WHEN_EXT = '_when';
    public const FIELD_OFFSET = 'offset';
    public const FIELD_OFFSET_EXT = '_offset';

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDuration 
     */
    protected FHIRDuration $boundsDuration;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $boundsRange;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $boundsPeriod;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A total count of the desired number of repetitions.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $count;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A maximum value for the count of the desired repetitions (e.g. do something 6-8
     * times).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $countMax;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How long this thing happens for when it happens.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $duration;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The upper limit of how long this thing happens for when it happens.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $durationMax;
    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the duration, in UCUM units.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnitsOfTime 
     */
    protected FHIRUnitsOfTime $durationUnit;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of times to repeat the action within the specified period / period
     * range (i.e. both period and periodMax provided).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $frequency;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the frequency is a range - so to repeat between
     * [frequency] and [frequencyMax] times within the period or period range.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $frequencyMax;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $period;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the period is a range from [period] to [periodMax],
     * allowing expressing concepts such as "do this once every 3-5 days.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $periodMax;
    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the period in UCUM units.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnitsOfTime 
     */
    protected FHIRUnitsOfTime $periodUnit;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If one or more days of week is provided, then the action happens only on the
     * specified day(s).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode[] 
     */
    protected array $dayOfWeek;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified time of day for action to take place.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime[] 
     */
    protected array $timeOfDay;
    /**
     * Real world event relating to the schedule.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Real world events that the occurrence of the event should be tied to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIREventTiming[] 
     */
    protected array $when;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of minutes from the event. If the event code does not indicate
     * whether the minutes is before or after the event, then the offset is assumed to
     * be after the event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt 
     */
    protected FHIRUnsignedInt $offset;

    /** Default validation map for fields in type Timing.Repeat */
    private const _DEFAULT_VALIDATION_RULES = [];

    /* constructor.php:66 */
    /**
     * FHIRTimingRepeat Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDuration $boundsDuration
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange $boundsRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $boundsPeriod
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $count
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $countMax
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $duration
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $durationMax
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnitsOfTime $durationUnit
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $frequency
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $frequencyMax
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $period
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $periodMax
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnitsOfTime $periodUnit
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode[] $dayOfWeek
     * @param null|string[]|\DateTimeInterface[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime[] $timeOfDay
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIREventTiming[] $when
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt $offset
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|FHIRDuration $boundsDuration = null,
                                null|FHIRRange $boundsRange = null,
                                null|FHIRPeriod $boundsPeriod = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $count = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $countMax = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $duration = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $durationMax = null,
                                null|FHIRUnitsOfTime $durationUnit = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $frequency = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $frequencyMax = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $period = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $periodMax = null,
                                null|FHIRUnitsOfTime $periodUnit = null,
                                null|iterable $dayOfWeek = null,
                                null|iterable $timeOfDay = null,
                                null|iterable $when = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $offset = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            fhirComments: $fhirComments);
        if (null !== $boundsDuration) {
            $this->setBoundsDuration($boundsDuration);
        }
        if (null !== $boundsRange) {
            $this->setBoundsRange($boundsRange);
        }
        if (null !== $boundsPeriod) {
            $this->setBoundsPeriod($boundsPeriod);
        }
        if (null !== $count) {
            $this->setCount($count);
        }
        if (null !== $countMax) {
            $this->setCountMax($countMax);
        }
        if (null !== $duration) {
            $this->setDuration($duration);
        }
        if (null !== $durationMax) {
            $this->setDurationMax($durationMax);
        }
        if (null !== $durationUnit) {
            $this->setDurationUnit($durationUnit);
        }
        if (null !== $frequency) {
            $this->setFrequency($frequency);
        }
        if (null !== $frequencyMax) {
            $this->setFrequencyMax($frequencyMax);
        }
        if (null !== $period) {
            $this->setPeriod($period);
        }
        if (null !== $periodMax) {
            $this->setPeriodMax($periodMax);
        }
        if (null !== $periodUnit) {
            $this->setPeriodUnit($periodUnit);
        }
        if (null !== $dayOfWeek) {
            $this->setDayOfWeek(...$dayOfWeek);
        }
        if (null !== $timeOfDay) {
            $this->setTimeOfDay(...$timeOfDay);
        }
        if (null !== $when) {
            $this->setWhen(...$when);
        }
        if (null !== $offset) {
            $this->setOffset($offset);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getBoundsDuration(): null|FHIRDuration
    {
        return $this->boundsDuration ?? null;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDuration $boundsDuration
     * @return static
     */
    public function setBoundsDuration(null|FHIRDuration $boundsDuration): self
    {
        if (null === $boundsDuration) {
            unset($this->boundsDuration);
            return $this;
        }
        $this->boundsDuration = $boundsDuration;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange
     */
    public function getBoundsRange(): null|FHIRRange
    {
        return $this->boundsRange ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange $boundsRange
     * @return static
     */
    public function setBoundsRange(null|FHIRRange $boundsRange): self
    {
        if (null === $boundsRange) {
            unset($this->boundsRange);
            return $this;
        }
        $this->boundsRange = $boundsRange;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod
     */
    public function getBoundsPeriod(): null|FHIRPeriod
    {
        return $this->boundsPeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $boundsPeriod
     * @return static
     */
    public function setBoundsPeriod(null|FHIRPeriod $boundsPeriod): self
    {
        if (null === $boundsPeriod) {
            unset($this->boundsPeriod);
            return $this;
        }
        $this->boundsPeriod = $boundsPeriod;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A total count of the desired number of repetitions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger
     */
    public function getCount(): null|FHIRInteger
    {
        return $this->count ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A total count of the desired number of repetitions.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $count
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCount(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $count,
                             null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $count) {
            unset($this->count);
            return $this;
        }
        if (!($count instanceof FHIRInteger)) {
            $count = new FHIRInteger(value: $count);
        }
        if (null !== $valueXMLLocation) {
            $count->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $count->_getValueXMLLocation()) {
            $count->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->count = $count;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger
     */
    public function getCountMax(): null|FHIRInteger
    {
        return $this->countMax ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A maximum value for the count of the desired repetitions (e.g. do something 6-8
     * times).
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $countMax
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCountMax(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $countMax,
                                null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $countMax) {
            unset($this->countMax);
            return $this;
        }
        if (!($countMax instanceof FHIRInteger)) {
            $countMax = new FHIRInteger(value: $countMax);
        }
        if (null !== $valueXMLLocation) {
            $countMax->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $countMax->_getValueXMLLocation()) {
            $countMax->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->countMax = $countMax;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
     */
    public function getDuration(): null|FHIRDecimal
    {
        return $this->duration ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How long this thing happens for when it happens.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $duration
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDuration(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $duration,
                                null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $duration) {
            unset($this->duration);
            return $this;
        }
        if (!($duration instanceof FHIRDecimal)) {
            $duration = new FHIRDecimal(value: $duration);
        }
        if (null !== $valueXMLLocation) {
            $duration->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $duration->_getValueXMLLocation()) {
            $duration->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->duration = $duration;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
     */
    public function getDurationMax(): null|FHIRDecimal
    {
        return $this->durationMax ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The upper limit of how long this thing happens for when it happens.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $durationMax
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDurationMax(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $durationMax,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $durationMax) {
            unset($this->durationMax);
            return $this;
        }
        if (!($durationMax instanceof FHIRDecimal)) {
            $durationMax = new FHIRDecimal(value: $durationMax);
        }
        if (null !== $valueXMLLocation) {
            $durationMax->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $durationMax->_getValueXMLLocation()) {
            $durationMax->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->durationMax = $durationMax;
        return $this;
    }

    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the duration, in UCUM units.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnitsOfTime
     */
    public function getDurationUnit(): null|FHIRUnitsOfTime
    {
        return $this->durationUnit ?? null;
    }

    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the duration, in UCUM units.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnitsOfTime $durationUnit
     * @return static
     */
    public function setDurationUnit(null|FHIRUnitsOfTime $durationUnit): self
    {
        if (null === $durationUnit) {
            unset($this->durationUnit);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger
     */
    public function getFrequency(): null|FHIRInteger
    {
        return $this->frequency ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of times to repeat the action within the specified period / period
     * range (i.e. both period and periodMax provided).
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $frequency
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setFrequency(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $frequency,
                                 null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $frequency) {
            unset($this->frequency);
            return $this;
        }
        if (!($frequency instanceof FHIRInteger)) {
            $frequency = new FHIRInteger(value: $frequency);
        }
        if (null !== $valueXMLLocation) {
            $frequency->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $frequency->_getValueXMLLocation()) {
            $frequency->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->frequency = $frequency;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger
     */
    public function getFrequencyMax(): null|FHIRInteger
    {
        return $this->frequencyMax ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the frequency is a range - so to repeat between
     * [frequency] and [frequencyMax] times within the period or period range.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $frequencyMax
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setFrequencyMax(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $frequencyMax,
                                    null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $frequencyMax) {
            unset($this->frequencyMax);
            return $this;
        }
        if (!($frequencyMax instanceof FHIRInteger)) {
            $frequencyMax = new FHIRInteger(value: $frequencyMax);
        }
        if (null !== $valueXMLLocation) {
            $frequencyMax->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $frequencyMax->_getValueXMLLocation()) {
            $frequencyMax->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->frequencyMax = $frequencyMax;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
     */
    public function getPeriod(): null|FHIRDecimal
    {
        return $this->period ?? null;
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
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $period
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPeriod(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $period,
                              null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $period) {
            unset($this->period);
            return $this;
        }
        if (!($period instanceof FHIRDecimal)) {
            $period = new FHIRDecimal(value: $period);
        }
        if (null !== $valueXMLLocation) {
            $period->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $period->_getValueXMLLocation()) {
            $period->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->period = $period;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
     */
    public function getPeriodMax(): null|FHIRDecimal
    {
        return $this->periodMax ?? null;
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
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $periodMax
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPeriodMax(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $periodMax,
                                 null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $periodMax) {
            unset($this->periodMax);
            return $this;
        }
        if (!($periodMax instanceof FHIRDecimal)) {
            $periodMax = new FHIRDecimal(value: $periodMax);
        }
        if (null !== $valueXMLLocation) {
            $periodMax->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $periodMax->_getValueXMLLocation()) {
            $periodMax->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->periodMax = $periodMax;
        return $this;
    }

    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the period in UCUM units.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnitsOfTime
     */
    public function getPeriodUnit(): null|FHIRUnitsOfTime
    {
        return $this->periodUnit ?? null;
    }

    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the period in UCUM units.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnitsOfTime $periodUnit
     * @return static
     */
    public function setPeriodUnit(null|FHIRUnitsOfTime $periodUnit): self
    {
        if (null === $periodUnit) {
            unset($this->periodUnit);
            return $this;
        }
        $this->periodUnit = $periodUnit;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode[]
     */
    public function getDayOfWeek(): array
    {
        return $this->dayOfWeek ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode>
     */
    public function getDayOfWeekIterator(): iterable
    {
        if (!isset($this->dayOfWeek) || [] === $this->dayOfWeek) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->dayOfWeek);
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode $dayOfWeek
     * @return static
     */
    public function addDayOfWeek(string|FHIRCodePrimitive|FHIRCode $dayOfWeek): self
    {
        if (!($dayOfWeek instanceof FHIRCode)) {
            $dayOfWeek = new FHIRCode(value: $dayOfWeek);
        }
        if (!isset($this->dayOfWeek)) {
            $this->dayOfWeek = [];
        }
        $this->dayOfWeek[] = $dayOfWeek;
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode ...$dayOfWeek
     * @return static
     */
    public function setDayOfWeek(string|FHIRCodePrimitive|FHIRCode ...$dayOfWeek): self
    {
        $this->dayOfWeek = [];
        foreach($dayOfWeek as $v) {
            if ($v instanceof FHIRCode) {
                $this->dayOfWeek[] = $v;
            } else {
                $this->dayOfWeek[] = new FHIRCode(value: $v);
            }
        }
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified time of day for action to take place.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime[]
     */
    public function getTimeOfDay(): array
    {
        return $this->timeOfDay ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime>
     */
    public function getTimeOfDayIterator(): iterable
    {
        if (!isset($this->timeOfDay) || [] === $this->timeOfDay) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->timeOfDay);
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified time of day for action to take place.
     *
     * @param string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime $timeOfDay
     * @return static
     */
    public function addTimeOfDay(string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $timeOfDay): self
    {
        if (!($timeOfDay instanceof FHIRTime)) {
            $timeOfDay = new FHIRTime(value: $timeOfDay);
        }
        if (!isset($this->timeOfDay)) {
            $this->timeOfDay = [];
        }
        $this->timeOfDay[] = $timeOfDay;
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified time of day for action to take place.
     *
     * @param string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime ...$timeOfDay
     * @return static
     */
    public function setTimeOfDay(string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime ...$timeOfDay): self
    {
        $this->timeOfDay = [];
        foreach($timeOfDay as $v) {
            if ($v instanceof FHIRTime) {
                $this->timeOfDay[] = $v;
            } else {
                $this->timeOfDay[] = new FHIRTime(value: $v);
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIREventTiming[]
     */
    public function getWhen(): array
    {
        return $this->when ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIREventTiming>
     */
    public function getWhenIterator(): iterable
    {
        if (!isset($this->when) || [] === $this->when) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->when);
    }

    /**
     * Real world event relating to the schedule.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Real world events that the occurrence of the event should be tied to.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIREventTiming $when
     * @return static
     */
    public function addWhen(FHIREventTiming $when): self
    {
        if (!isset($this->when)) {
            $this->when = [];
        }
        $this->when[] = $when;
        return $this;
    }

    /**
     * Real world event relating to the schedule.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Real world events that the occurrence of the event should be tied to.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIREventTiming ...$when
     * @return static
     */
    public function setWhen(FHIREventTiming ...$when): self
    {
        $this->when = [];
        foreach($when as $v) {
            if ($v instanceof FHIREventTiming) {
                $this->when[] = $v;
            } else {
                $this->when[] = new FHIREventTiming(value: $v);
            }
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt
     */
    public function getOffset(): null|FHIRUnsignedInt
    {
        return $this->offset ?? null;
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt $offset
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setOffset(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $offset,
                              null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $offset) {
            unset($this->offset);
            return $this;
        }
        if (!($offset instanceof FHIRUnsignedInt)) {
            $offset = new FHIRUnsignedInt(value: $offset);
        }
        if (null !== $valueXMLLocation) {
            $offset->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $offset->_getValueXMLLocation()) {
            $offset->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->offset = $offset;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_DEFAULT_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (isset($validationRules[self::FIELD_BOUNDS_DURATION])) {
            $v = $this->getBoundsDuration();
            foreach($validationRules[self::FIELD_BOUNDS_DURATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BOUNDS_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BOUNDS_DURATION])) {
                        $errs[self::FIELD_BOUNDS_DURATION] = [];
                    }
                    $errs[self::FIELD_BOUNDS_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BOUNDS_RANGE])) {
            $v = $this->getBoundsRange();
            foreach($validationRules[self::FIELD_BOUNDS_RANGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BOUNDS_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BOUNDS_RANGE])) {
                        $errs[self::FIELD_BOUNDS_RANGE] = [];
                    }
                    $errs[self::FIELD_BOUNDS_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BOUNDS_PERIOD])) {
            $v = $this->getBoundsPeriod();
            foreach($validationRules[self::FIELD_BOUNDS_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BOUNDS_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BOUNDS_PERIOD])) {
                        $errs[self::FIELD_BOUNDS_PERIOD] = [];
                    }
                    $errs[self::FIELD_BOUNDS_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COUNT])) {
            $v = $this->getCount();
            foreach($validationRules[self::FIELD_COUNT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COUNT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COUNT_MAX, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COUNT_MAX])) {
                        $errs[self::FIELD_COUNT_MAX] = [];
                    }
                    $errs[self::FIELD_COUNT_MAX][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DURATION])) {
            $v = $this->getDuration();
            foreach($validationRules[self::FIELD_DURATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DURATION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DURATION_MAX, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DURATION_UNIT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FREQUENCY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FREQUENCY_MAX, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FREQUENCY_MAX])) {
                        $errs[self::FIELD_FREQUENCY_MAX] = [];
                    }
                    $errs[self::FIELD_FREQUENCY_MAX][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD])) {
            $v = $this->getPeriod();
            foreach($validationRules[self::FIELD_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PERIOD, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PERIOD_MAX, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PERIOD_UNIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD_UNIT])) {
                        $errs[self::FIELD_PERIOD_UNIT] = [];
                    }
                    $errs[self::FIELD_PERIOD_UNIT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DAY_OF_WEEK])) {
            $v = $this->getDayOfWeek();
            foreach($validationRules[self::FIELD_DAY_OF_WEEK] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DAY_OF_WEEK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DAY_OF_WEEK])) {
                        $errs[self::FIELD_DAY_OF_WEEK] = [];
                    }
                    $errs[self::FIELD_DAY_OF_WEEK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIME_OF_DAY])) {
            $v = $this->getTimeOfDay();
            foreach($validationRules[self::FIELD_TIME_OF_DAY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TIME_OF_DAY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_WHEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHEN])) {
                        $errs[self::FIELD_WHEN] = [];
                    }
                    $errs[self::FIELD_WHEN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OFFSET])) {
            $v = $this->getOffset();
            foreach($validationRules[self::FIELD_OFFSET] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OFFSET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OFFSET])) {
                        $errs[self::FIELD_OFFSET] = [];
                    }
                    $errs[self::FIELD_OFFSET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming\FHIRTimingRepeat $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming\FHIRTimingRepeat
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRTimingRepeat)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $valueAttr = $n->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_BOUNDS_DURATION === $childName) {
                $v = new FHIRDuration();
                $type->setBoundsDuration(FHIRDuration::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_BOUNDS_RANGE === $childName) {
                $v = new FHIRRange();
                $type->setBoundsRange(FHIRRange::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_BOUNDS_PERIOD === $childName) {
                $v = new FHIRPeriod();
                $type->setBoundsPeriod(FHIRPeriod::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COUNT === $childName) {
                $v = new FHIRInteger(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setCount(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COUNT_MAX === $childName) {
                $v = new FHIRInteger(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setCountMax(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DURATION === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDuration(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DURATION_MAX === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDurationMax(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DURATION_UNIT === $childName) {
                $v = new FHIRUnitsOfTime(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDurationUnit(FHIRUnitsOfTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FREQUENCY === $childName) {
                $v = new FHIRInteger(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setFrequency(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FREQUENCY_MAX === $childName) {
                $v = new FHIRInteger(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setFrequencyMax(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PERIOD === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setPeriod(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PERIOD_MAX === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setPeriodMax(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PERIOD_UNIT === $childName) {
                $v = new FHIRUnitsOfTime(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setPeriodUnit(FHIRUnitsOfTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DAY_OF_WEEK === $childName) {
                $v = new FHIRCode(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->addDayOfWeek(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TIME_OF_DAY === $childName) {
                $v = new FHIRTime(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->addTimeOfDay(FHIRTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_WHEN === $childName) {
                $v = new FHIREventTiming(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->addWhen(FHIREventTiming::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_OFFSET === $childName) {
                $v = new FHIRUnsignedInt(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setOffset(FHIRUnsignedInt::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_COUNT])) {
            $pt = $type->getCount();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_COUNT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCount(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_COUNT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_COUNT_MAX])) {
            $pt = $type->getCountMax();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_COUNT_MAX]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCountMax(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_COUNT_MAX],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DURATION])) {
            $pt = $type->getDuration();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DURATION]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDuration(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_DURATION],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DURATION_MAX])) {
            $pt = $type->getDurationMax();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DURATION_MAX]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDurationMax(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_DURATION_MAX],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_FREQUENCY])) {
            $pt = $type->getFrequency();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_FREQUENCY]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setFrequency(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_FREQUENCY],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_FREQUENCY_MAX])) {
            $pt = $type->getFrequencyMax();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_FREQUENCY_MAX]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setFrequencyMax(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_FREQUENCY_MAX],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PERIOD])) {
            $pt = $type->getPeriod();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_PERIOD]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPeriod(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_PERIOD],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PERIOD_MAX])) {
            $pt = $type->getPeriodMax();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_PERIOD_MAX]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPeriodMax(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_PERIOD_MAX],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DAY_OF_WEEK])) {
            $v = new FHIRCode(value: (string)$attributes[self::FIELD_DAY_OF_WEEK],
                                                       valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE);
            $type->addDayOfWeek($v);
        }
        if (isset($attributes[self::FIELD_TIME_OF_DAY])) {
            $v = new FHIRTime(value: (string)$attributes[self::FIELD_TIME_OF_DAY],
                                                       valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE);
            $type->addTimeOfDay($v);
        }
        if (isset($attributes[self::FIELD_OFFSET])) {
            $pt = $type->getOffset();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_OFFSET]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setOffset(new FHIRUnsignedInt(
                    value: (string)$attributes[self::FIELD_OFFSET],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('TimingRepeat', $this->_getSourceXMLNS());
        }
        if (isset($this->count) && $this->count->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_COUNT, $this->count->getValue()?->_getFormattedValue());
        }
        if (isset($this->countMax) && $this->countMax->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_COUNT_MAX, $this->countMax->getValue()?->_getFormattedValue());
        }
        if (isset($this->duration) && $this->duration->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DURATION, $this->duration->getValue()?->_getFormattedValue());
        }
        if (isset($this->durationMax) && $this->durationMax->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DURATION_MAX, $this->durationMax->getValue()?->_getFormattedValue());
        }
        if (isset($this->frequency) && $this->frequency->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_FREQUENCY, $this->frequency->getValue()?->_getFormattedValue());
        }
        if (isset($this->frequencyMax) && $this->frequencyMax->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_FREQUENCY_MAX, $this->frequencyMax->getValue()?->_getFormattedValue());
        }
        if (isset($this->period) && $this->period->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PERIOD, $this->period->getValue()?->_getFormattedValue());
        }
        if (isset($this->periodMax) && $this->periodMax->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PERIOD_MAX, $this->periodMax->getValue()?->_getFormattedValue());
        }
        if (isset($this->dayOfWeek)) {
           foreach($this->dayOfWeek as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_DAY_OF_WEEK, $v->getValue()?->_getFormattedValue());
                    break;
                }
            }
        }
        if (isset($this->timeOfDay)) {
           foreach($this->timeOfDay as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_TIME_OF_DAY, $v->getValue()?->_getFormattedValue());
                    break;
                }
            }
        }
        if (isset($this->offset) && $this->offset->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_OFFSET, $this->offset->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->boundsDuration)) {
            $xw->startElement(self::FIELD_BOUNDS_DURATION);
            $this->boundsDuration->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->boundsRange)) {
            $xw->startElement(self::FIELD_BOUNDS_RANGE);
            $this->boundsRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->boundsPeriod)) {
            $xw->startElement(self::FIELD_BOUNDS_PERIOD);
            $this->boundsPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->count) && $this->count->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_COUNT);
            $this->count->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->countMax) && $this->countMax->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_COUNT_MAX);
            $this->countMax->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->duration) && $this->duration->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DURATION);
            $this->duration->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->durationMax) && $this->durationMax->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DURATION_MAX);
            $this->durationMax->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->durationUnit)) {
            $xw->startElement(self::FIELD_DURATION_UNIT);
            $this->durationUnit->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->frequency) && $this->frequency->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_FREQUENCY);
            $this->frequency->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->frequencyMax) && $this->frequencyMax->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_FREQUENCY_MAX);
            $this->frequencyMax->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->period) && $this->period->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PERIOD);
            $this->period->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->periodMax) && $this->periodMax->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PERIOD_MAX);
            $this->periodMax->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->periodUnit)) {
            $xw->startElement(self::FIELD_PERIOD_UNIT);
            $this->periodUnit->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dayOfWeek)) {
            foreach($this->dayOfWeek as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_DAY_OF_WEEK);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->timeOfDay)) {
            foreach($this->timeOfDay as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_TIME_OF_DAY);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->when)) {
            foreach ($this->when as $v) {
                $xw->startElement(self::FIELD_WHEN);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->offset) && $this->offset->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_OFFSET);
            $this->offset->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming\FHIRTimingRepeat $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming\FHIRTimingRepeat
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRTimingRepeat)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_BOUNDS_DURATION]) || array_key_exists(self::FIELD_BOUNDS_DURATION, $json)) {
            $type->setBoundsDuration(FHIRDuration::jsonUnserialize(
                json: $json[self::FIELD_BOUNDS_DURATION],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_BOUNDS_RANGE]) || array_key_exists(self::FIELD_BOUNDS_RANGE, $json)) {
            $type->setBoundsRange(FHIRRange::jsonUnserialize(
                json: $json[self::FIELD_BOUNDS_RANGE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_BOUNDS_PERIOD]) || array_key_exists(self::FIELD_BOUNDS_PERIOD, $json)) {
            $type->setBoundsPeriod(FHIRPeriod::jsonUnserialize(
                json: $json[self::FIELD_BOUNDS_PERIOD],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_COUNT]) || isset($json[self::FIELD_COUNT_EXT]) || array_key_exists(self::FIELD_COUNT, $json) || array_key_exists(self::FIELD_COUNT_EXT, $json)) {
            $value = $json[self::FIELD_COUNT] ?? null;
            $ext = (array)($json[self::FIELD_COUNT_EXT] ?? []);
            $type->setCount(FHIRInteger::jsonUnserialize(
                json: [FHIRInteger::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_COUNT_MAX]) || isset($json[self::FIELD_COUNT_MAX_EXT]) || array_key_exists(self::FIELD_COUNT_MAX, $json) || array_key_exists(self::FIELD_COUNT_MAX_EXT, $json)) {
            $value = $json[self::FIELD_COUNT_MAX] ?? null;
            $ext = (array)($json[self::FIELD_COUNT_MAX_EXT] ?? []);
            $type->setCountMax(FHIRInteger::jsonUnserialize(
                json: [FHIRInteger::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DURATION]) || isset($json[self::FIELD_DURATION_EXT]) || array_key_exists(self::FIELD_DURATION, $json) || array_key_exists(self::FIELD_DURATION_EXT, $json)) {
            $value = $json[self::FIELD_DURATION] ?? null;
            $ext = (array)($json[self::FIELD_DURATION_EXT] ?? []);
            $type->setDuration(FHIRDecimal::jsonUnserialize(
                json: [FHIRDecimal::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DURATION_MAX]) || isset($json[self::FIELD_DURATION_MAX_EXT]) || array_key_exists(self::FIELD_DURATION_MAX, $json) || array_key_exists(self::FIELD_DURATION_MAX_EXT, $json)) {
            $value = $json[self::FIELD_DURATION_MAX] ?? null;
            $ext = (array)($json[self::FIELD_DURATION_MAX_EXT] ?? []);
            $type->setDurationMax(FHIRDecimal::jsonUnserialize(
                json: [FHIRDecimal::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DURATION_UNIT]) || isset($json[self::FIELD_DURATION_UNIT_EXT]) || array_key_exists(self::FIELD_DURATION_UNIT, $json) || array_key_exists(self::FIELD_DURATION_UNIT_EXT, $json)) {
            $value = $json[self::FIELD_DURATION_UNIT] ?? null;
            $ext = (array)($json[self::FIELD_DURATION_UNIT_EXT] ?? []);
            $type->setDurationUnit(FHIRUnitsOfTime::jsonUnserialize(
                json: [FHIRUnitsOfTime::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_FREQUENCY]) || isset($json[self::FIELD_FREQUENCY_EXT]) || array_key_exists(self::FIELD_FREQUENCY, $json) || array_key_exists(self::FIELD_FREQUENCY_EXT, $json)) {
            $value = $json[self::FIELD_FREQUENCY] ?? null;
            $ext = (array)($json[self::FIELD_FREQUENCY_EXT] ?? []);
            $type->setFrequency(FHIRInteger::jsonUnserialize(
                json: [FHIRInteger::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_FREQUENCY_MAX]) || isset($json[self::FIELD_FREQUENCY_MAX_EXT]) || array_key_exists(self::FIELD_FREQUENCY_MAX, $json) || array_key_exists(self::FIELD_FREQUENCY_MAX_EXT, $json)) {
            $value = $json[self::FIELD_FREQUENCY_MAX] ?? null;
            $ext = (array)($json[self::FIELD_FREQUENCY_MAX_EXT] ?? []);
            $type->setFrequencyMax(FHIRInteger::jsonUnserialize(
                json: [FHIRInteger::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PERIOD]) || isset($json[self::FIELD_PERIOD_EXT]) || array_key_exists(self::FIELD_PERIOD, $json) || array_key_exists(self::FIELD_PERIOD_EXT, $json)) {
            $value = $json[self::FIELD_PERIOD] ?? null;
            $ext = (array)($json[self::FIELD_PERIOD_EXT] ?? []);
            $type->setPeriod(FHIRDecimal::jsonUnserialize(
                json: [FHIRDecimal::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PERIOD_MAX]) || isset($json[self::FIELD_PERIOD_MAX_EXT]) || array_key_exists(self::FIELD_PERIOD_MAX, $json) || array_key_exists(self::FIELD_PERIOD_MAX_EXT, $json)) {
            $value = $json[self::FIELD_PERIOD_MAX] ?? null;
            $ext = (array)($json[self::FIELD_PERIOD_MAX_EXT] ?? []);
            $type->setPeriodMax(FHIRDecimal::jsonUnserialize(
                json: [FHIRDecimal::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PERIOD_UNIT]) || isset($json[self::FIELD_PERIOD_UNIT_EXT]) || array_key_exists(self::FIELD_PERIOD_UNIT, $json) || array_key_exists(self::FIELD_PERIOD_UNIT_EXT, $json)) {
            $value = $json[self::FIELD_PERIOD_UNIT] ?? null;
            $ext = (array)($json[self::FIELD_PERIOD_UNIT_EXT] ?? []);
            $type->setPeriodUnit(FHIRUnitsOfTime::jsonUnserialize(
                json: [FHIRUnitsOfTime::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DAY_OF_WEEK]) || isset($json[self::FIELD_DAY_OF_WEEK_EXT]) || array_key_exists(self::FIELD_DAY_OF_WEEK, $json) || array_key_exists(self::FIELD_DAY_OF_WEEK_EXT, $json)) {
            $value = $json[self::FIELD_DAY_OF_WEEK] ?? null;
            $ext = (array)($json[self::FIELD_DAY_OF_WEEK_EXT] ?? []);
            if (!is_array($value)) {
                $value = [$value];
            }
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addDayOfWeek(FHIRCode::jsonUnserialize(
                    json: [FHIRCode::FIELD_VALUE => $value[$i] ?? null] + (array)($ext[$i] ?? []),
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_TIME_OF_DAY]) || isset($json[self::FIELD_TIME_OF_DAY_EXT]) || array_key_exists(self::FIELD_TIME_OF_DAY, $json) || array_key_exists(self::FIELD_TIME_OF_DAY_EXT, $json)) {
            $value = $json[self::FIELD_TIME_OF_DAY] ?? null;
            $ext = (array)($json[self::FIELD_TIME_OF_DAY_EXT] ?? []);
            if (!is_array($value)) {
                $value = [$value];
            }
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addTimeOfDay(FHIRTime::jsonUnserialize(
                    json: [FHIRTime::FIELD_VALUE => $value[$i] ?? null] + (array)($ext[$i] ?? []),
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_WHEN]) || isset($json[self::FIELD_WHEN_EXT]) || array_key_exists(self::FIELD_WHEN, $json) || array_key_exists(self::FIELD_WHEN_EXT, $json)) {
            $value = $json[self::FIELD_WHEN] ?? null;
            $ext = (array)($json[self::FIELD_WHEN_EXT] ?? []);
            if (!is_array($value)) {
                $value = [$value];
            }
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addWhen(FHIREventTiming::jsonUnserialize(
                    json: [FHIREventTiming::FIELD_VALUE => $value[$i] ?? null] + (array)($ext[$i] ?? []),
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_OFFSET]) || isset($json[self::FIELD_OFFSET_EXT]) || array_key_exists(self::FIELD_OFFSET, $json) || array_key_exists(self::FIELD_OFFSET_EXT, $json)) {
            $value = $json[self::FIELD_OFFSET] ?? null;
            $ext = (array)($json[self::FIELD_OFFSET_EXT] ?? []);
            $type->setOffset(FHIRUnsignedInt::jsonUnserialize(
                json: [FHIRUnsignedInt::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->boundsDuration)) {
            $out->boundsDuration = $this->boundsDuration;
        }
        if (isset($this->boundsRange)) {
            $out->boundsRange = $this->boundsRange;
        }
        if (isset($this->boundsPeriod)) {
            $out->boundsPeriod = $this->boundsPeriod;
        }
        if (isset($this->count)) {
            if (null !== ($val = $this->count->getValue())) {
                $out->count = $val;
            }
            $ext = $this->count->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_count = $ext;
            }
        }
        if (isset($this->countMax)) {
            if (null !== ($val = $this->countMax->getValue())) {
                $out->countMax = $val;
            }
            $ext = $this->countMax->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_countMax = $ext;
            }
        }
        if (isset($this->duration)) {
            if (null !== ($val = $this->duration->getValue())) {
                $out->duration = $val;
            }
            $ext = $this->duration->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_duration = $ext;
            }
        }
        if (isset($this->durationMax)) {
            if (null !== ($val = $this->durationMax->getValue())) {
                $out->durationMax = $val;
            }
            $ext = $this->durationMax->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_durationMax = $ext;
            }
        }
        if (isset($this->durationUnit)) {
            if (null !== ($val = $this->durationUnit->getValue())) {
                $out->durationUnit = $val;
            }
            $ext = $this->durationUnit->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_durationUnit = $ext;
            }
        }
        if (isset($this->frequency)) {
            if (null !== ($val = $this->frequency->getValue())) {
                $out->frequency = $val;
            }
            $ext = $this->frequency->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_frequency = $ext;
            }
        }
        if (isset($this->frequencyMax)) {
            if (null !== ($val = $this->frequencyMax->getValue())) {
                $out->frequencyMax = $val;
            }
            $ext = $this->frequencyMax->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_frequencyMax = $ext;
            }
        }
        if (isset($this->period)) {
            if (null !== ($val = $this->period->getValue())) {
                $out->period = $val;
            }
            $ext = $this->period->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_period = $ext;
            }
        }
        if (isset($this->periodMax)) {
            if (null !== ($val = $this->periodMax->getValue())) {
                $out->periodMax = $val;
            }
            $ext = $this->periodMax->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_periodMax = $ext;
            }
        }
        if (isset($this->periodUnit)) {
            if (null !== ($val = $this->periodUnit->getValue())) {
                $out->periodUnit = $val;
            }
            $ext = $this->periodUnit->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_periodUnit = $ext;
            }
        }
        if (isset($this->dayOfWeek) && [] !== $this->dayOfWeek) {
            $vals = [];
            $exts = [];
            foreach ($this->dayOfWeek as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->dayOfWeek = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_dayOfWeek = $exts;
            }
        }
        if (isset($this->timeOfDay) && [] !== $this->timeOfDay) {
            $vals = [];
            $exts = [];
            foreach ($this->timeOfDay as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->timeOfDay = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_timeOfDay = $exts;
            }
        }
        if (isset($this->when) && [] !== $this->when) {
            $vals = [];
            $exts = [];
            foreach ($this->when as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->when = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_when = $exts;
            }
        }
        if (isset($this->offset)) {
            if (null !== ($val = $this->offset->getValue())) {
                $out->offset = $val;
            }
            $ext = $this->offset->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_offset = $ext;
            }
        }
        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}