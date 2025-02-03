<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 3rd, 2025 17:23+0000
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
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIREventTimingList;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRUnitsOfTimeList;
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
    use TypeValidationsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_TIMING_DOT_REPEAT;

    /* class_default.php:47 */
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

    /* class_default.php:66 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [];

    /* class_default.php:95 */
    private array $_valueXMLLocations = [
        self::FIELD_COUNT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_COUNT_MAX => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DURATION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DURATION_MAX => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DURATION_UNIT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FREQUENCY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FREQUENCY_MAX => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PERIOD => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PERIOD_MAX => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PERIOD_UNIT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_OFFSET => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:111 */
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

    /* constructor.php:62 */
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRUnitsOfTimeList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnitsOfTime $durationUnit
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $frequency
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $frequencyMax
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $period
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $periodMax
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRUnitsOfTimeList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnitsOfTime $periodUnit
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode[] $dayOfWeek
     * @param null|string[]|\DateTimeInterface[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime[] $timeOfDay
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIREventTimingList[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIREventTiming[] $when
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
                                null|string|FHIRUnitsOfTimeList|FHIRUnitsOfTime $durationUnit = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $frequency = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $frequencyMax = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $period = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $periodMax = null,
                                null|string|FHIRUnitsOfTimeList|FHIRUnitsOfTime $periodUnit = null,
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

    /* class_default.php:143 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:169 */
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCount(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $count,
                             ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $count) {
            unset($this->count);
            return $this;
        }
        if (!($count instanceof FHIRInteger)) {
            $count = new FHIRInteger(value: $count);
        }
        $this->count = $count;
        if ($this->_valueXMLLocations[self::FIELD_COUNT] !== $valueXMLLocation) {
            $this->_setCountValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the count element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getCountValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_COUNT];
    }

    /**
     * Set the location the "value" field of the count element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setCountValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_COUNT] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCountMax(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $countMax,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $countMax) {
            unset($this->countMax);
            return $this;
        }
        if (!($countMax instanceof FHIRInteger)) {
            $countMax = new FHIRInteger(value: $countMax);
        }
        $this->countMax = $countMax;
        if ($this->_valueXMLLocations[self::FIELD_COUNT_MAX] !== $valueXMLLocation) {
            $this->_setCountMaxValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the countMax element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getCountMaxValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_COUNT_MAX];
    }

    /**
     * Set the location the "value" field of the countMax element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setCountMaxValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_COUNT_MAX] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDuration(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $duration,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $duration) {
            unset($this->duration);
            return $this;
        }
        if (!($duration instanceof FHIRDecimal)) {
            $duration = new FHIRDecimal(value: $duration);
        }
        $this->duration = $duration;
        if ($this->_valueXMLLocations[self::FIELD_DURATION] !== $valueXMLLocation) {
            $this->_setDurationValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the duration element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDurationValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DURATION];
    }

    /**
     * Set the location the "value" field of the duration element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDurationValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DURATION] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDurationMax(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $durationMax,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $durationMax) {
            unset($this->durationMax);
            return $this;
        }
        if (!($durationMax instanceof FHIRDecimal)) {
            $durationMax = new FHIRDecimal(value: $durationMax);
        }
        $this->durationMax = $durationMax;
        if ($this->_valueXMLLocations[self::FIELD_DURATION_MAX] !== $valueXMLLocation) {
            $this->_setDurationMaxValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the durationMax element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDurationMaxValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DURATION_MAX];
    }

    /**
     * Set the location the "value" field of the durationMax element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDurationMaxValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DURATION_MAX] = $valueXMLLocation;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRUnitsOfTimeList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnitsOfTime $durationUnit
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDurationUnit(null|string|FHIRUnitsOfTimeList|FHIRUnitsOfTime $durationUnit,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $durationUnit) {
            unset($this->durationUnit);
            return $this;
        }
        if (!($durationUnit instanceof FHIRUnitsOfTime)) {
            $durationUnit = new FHIRUnitsOfTime(value: $durationUnit);
        }
        $this->durationUnit = $durationUnit;
        if ($this->_valueXMLLocations[self::FIELD_DURATION_UNIT] !== $valueXMLLocation) {
            $this->_setDurationUnitValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the durationUnit element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDurationUnitValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DURATION_UNIT];
    }

    /**
     * Set the location the "value" field of the durationUnit element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDurationUnitValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DURATION_UNIT] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setFrequency(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $frequency,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $frequency) {
            unset($this->frequency);
            return $this;
        }
        if (!($frequency instanceof FHIRInteger)) {
            $frequency = new FHIRInteger(value: $frequency);
        }
        $this->frequency = $frequency;
        if ($this->_valueXMLLocations[self::FIELD_FREQUENCY] !== $valueXMLLocation) {
            $this->_setFrequencyValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the frequency element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getFrequencyValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_FREQUENCY];
    }

    /**
     * Set the location the "value" field of the frequency element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setFrequencyValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_FREQUENCY] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setFrequencyMax(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $frequencyMax,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $frequencyMax) {
            unset($this->frequencyMax);
            return $this;
        }
        if (!($frequencyMax instanceof FHIRInteger)) {
            $frequencyMax = new FHIRInteger(value: $frequencyMax);
        }
        $this->frequencyMax = $frequencyMax;
        if ($this->_valueXMLLocations[self::FIELD_FREQUENCY_MAX] !== $valueXMLLocation) {
            $this->_setFrequencyMaxValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the frequencyMax element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getFrequencyMaxValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_FREQUENCY_MAX];
    }

    /**
     * Set the location the "value" field of the frequencyMax element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setFrequencyMaxValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_FREQUENCY_MAX] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPeriod(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $period,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $period) {
            unset($this->period);
            return $this;
        }
        if (!($period instanceof FHIRDecimal)) {
            $period = new FHIRDecimal(value: $period);
        }
        $this->period = $period;
        if ($this->_valueXMLLocations[self::FIELD_PERIOD] !== $valueXMLLocation) {
            $this->_setPeriodValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the period element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getPeriodValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_PERIOD];
    }

    /**
     * Set the location the "value" field of the period element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setPeriodValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_PERIOD] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPeriodMax(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $periodMax,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $periodMax) {
            unset($this->periodMax);
            return $this;
        }
        if (!($periodMax instanceof FHIRDecimal)) {
            $periodMax = new FHIRDecimal(value: $periodMax);
        }
        $this->periodMax = $periodMax;
        if ($this->_valueXMLLocations[self::FIELD_PERIOD_MAX] !== $valueXMLLocation) {
            $this->_setPeriodMaxValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the periodMax element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getPeriodMaxValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_PERIOD_MAX];
    }

    /**
     * Set the location the "value" field of the periodMax element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setPeriodMaxValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_PERIOD_MAX] = $valueXMLLocation;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRUnitsOfTimeList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnitsOfTime $periodUnit
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPeriodUnit(null|string|FHIRUnitsOfTimeList|FHIRUnitsOfTime $periodUnit,
                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $periodUnit) {
            unset($this->periodUnit);
            return $this;
        }
        if (!($periodUnit instanceof FHIRUnitsOfTime)) {
            $periodUnit = new FHIRUnitsOfTime(value: $periodUnit);
        }
        $this->periodUnit = $periodUnit;
        if ($this->_valueXMLLocations[self::FIELD_PERIOD_UNIT] !== $valueXMLLocation) {
            $this->_setPeriodUnitValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the periodUnit element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getPeriodUnitValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_PERIOD_UNIT];
    }

    /**
     * Set the location the "value" field of the periodUnit element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setPeriodUnitValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_PERIOD_UNIT] = $valueXMLLocation;
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
        if (!isset($this->dayOfWeek)) {
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
        if ([] === $dayOfWeek) {
            unset($this->dayOfWeek);
            return $this;
        }
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
        if (!isset($this->timeOfDay)) {
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
        if ([] === $timeOfDay) {
            unset($this->timeOfDay);
            return $this;
        }
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
        if (!isset($this->when)) {
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIREventTimingList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIREventTiming $when
     * @return static
     */
    public function addWhen(string|FHIREventTimingList|FHIREventTiming $when): self
    {
        if (!($when instanceof FHIREventTiming)) {
            $when = new FHIREventTiming(value: $when);
        }
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIREventTimingList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIREventTiming ...$when
     * @return static
     */
    public function setWhen(string|FHIREventTimingList|FHIREventTiming ...$when): self
    {
        if ([] === $when) {
            unset($this->when);
            return $this;
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setOffset(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $offset,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $offset) {
            unset($this->offset);
            return $this;
        }
        if (!($offset instanceof FHIRUnsignedInt)) {
            $offset = new FHIRUnsignedInt(value: $offset);
        }
        $this->offset = $offset;
        if ($this->_valueXMLLocations[self::FIELD_OFFSET] !== $valueXMLLocation) {
            $this->_setOffsetValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the offset element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getOffsetValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_OFFSET];
    }

    /**
     * Set the location the "value" field of the offset element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setOffsetValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_OFFSET] = $valueXMLLocation;
        return $this;
    }

    /* class_default.php:195 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming\FHIRTimingRepeat $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming\FHIRTimingRepeat
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_BOUNDS_DURATION === $cen) {
                $type->setBoundsDuration(FHIRDuration::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BOUNDS_RANGE === $cen) {
                $type->setBoundsRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BOUNDS_PERIOD === $cen) {
                $type->setBoundsPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COUNT === $cen) {
                $type->setCount(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COUNT_MAX === $cen) {
                $type->setCountMax(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DURATION === $cen) {
                $type->setDuration(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DURATION_MAX === $cen) {
                $type->setDurationMax(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DURATION_UNIT === $cen) {
                $type->setDurationUnit(FHIRUnitsOfTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FREQUENCY === $cen) {
                $type->setFrequency(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FREQUENCY_MAX === $cen) {
                $type->setFrequencyMax(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERIOD === $cen) {
                $type->setPeriod(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERIOD_MAX === $cen) {
                $type->setPeriodMax(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERIOD_UNIT === $cen) {
                $type->setPeriodUnit(FHIRUnitsOfTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DAY_OF_WEEK === $cen) {
                $type->addDayOfWeek(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIME_OF_DAY === $cen) {
                $type->addTimeOfDay(FHIRTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_WHEN === $cen) {
                $type->addWhen(FHIREventTiming::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OFFSET === $cen) {
                $type->setOffset(FHIRUnsignedInt::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_COUNT])) {
            if (isset($type->count)) {
                $type->count->setValue((string)$attributes[self::FIELD_COUNT]);
                $type->_setCountValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setCount((string)$attributes[self::FIELD_COUNT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_COUNT_MAX])) {
            if (isset($type->countMax)) {
                $type->countMax->setValue((string)$attributes[self::FIELD_COUNT_MAX]);
                $type->_setCountMaxValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setCountMax((string)$attributes[self::FIELD_COUNT_MAX], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DURATION])) {
            if (isset($type->duration)) {
                $type->duration->setValue((string)$attributes[self::FIELD_DURATION]);
                $type->_setDurationValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDuration((string)$attributes[self::FIELD_DURATION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DURATION_MAX])) {
            if (isset($type->durationMax)) {
                $type->durationMax->setValue((string)$attributes[self::FIELD_DURATION_MAX]);
                $type->_setDurationMaxValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDurationMax((string)$attributes[self::FIELD_DURATION_MAX], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DURATION_UNIT])) {
            if (isset($type->durationUnit)) {
                $type->durationUnit->setValue((string)$attributes[self::FIELD_DURATION_UNIT]);
                $type->_setDurationUnitValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDurationUnit((string)$attributes[self::FIELD_DURATION_UNIT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FREQUENCY])) {
            if (isset($type->frequency)) {
                $type->frequency->setValue((string)$attributes[self::FIELD_FREQUENCY]);
                $type->_setFrequencyValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setFrequency((string)$attributes[self::FIELD_FREQUENCY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FREQUENCY_MAX])) {
            if (isset($type->frequencyMax)) {
                $type->frequencyMax->setValue((string)$attributes[self::FIELD_FREQUENCY_MAX]);
                $type->_setFrequencyMaxValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setFrequencyMax((string)$attributes[self::FIELD_FREQUENCY_MAX], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PERIOD])) {
            if (isset($type->period)) {
                $type->period->setValue((string)$attributes[self::FIELD_PERIOD]);
                $type->_setPeriodValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setPeriod((string)$attributes[self::FIELD_PERIOD], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PERIOD_MAX])) {
            if (isset($type->periodMax)) {
                $type->periodMax->setValue((string)$attributes[self::FIELD_PERIOD_MAX]);
                $type->_setPeriodMaxValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setPeriodMax((string)$attributes[self::FIELD_PERIOD_MAX], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PERIOD_UNIT])) {
            if (isset($type->periodUnit)) {
                $type->periodUnit->setValue((string)$attributes[self::FIELD_PERIOD_UNIT]);
                $type->_setPeriodUnitValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setPeriodUnit((string)$attributes[self::FIELD_PERIOD_UNIT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_OFFSET])) {
            if (isset($type->offset)) {
                $type->offset->setValue((string)$attributes[self::FIELD_OFFSET]);
                $type->_setOffsetValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setOffset((string)$attributes[self::FIELD_OFFSET], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->count) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_COUNT]) {
            $xw->writeAttribute(self::FIELD_COUNT, $this->count->_getFormattedValue());
        }
        if (isset($this->countMax) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_COUNT_MAX]) {
            $xw->writeAttribute(self::FIELD_COUNT_MAX, $this->countMax->_getFormattedValue());
        }
        if (isset($this->duration) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DURATION]) {
            $xw->writeAttribute(self::FIELD_DURATION, $this->duration->_getFormattedValue());
        }
        if (isset($this->durationMax) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DURATION_MAX]) {
            $xw->writeAttribute(self::FIELD_DURATION_MAX, $this->durationMax->_getFormattedValue());
        }
        if (isset($this->durationUnit) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DURATION_UNIT]) {
            $xw->writeAttribute(self::FIELD_DURATION_UNIT, $this->durationUnit->_getFormattedValue());
        }
        if (isset($this->frequency) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FREQUENCY]) {
            $xw->writeAttribute(self::FIELD_FREQUENCY, $this->frequency->_getFormattedValue());
        }
        if (isset($this->frequencyMax) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FREQUENCY_MAX]) {
            $xw->writeAttribute(self::FIELD_FREQUENCY_MAX, $this->frequencyMax->_getFormattedValue());
        }
        if (isset($this->period) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PERIOD]) {
            $xw->writeAttribute(self::FIELD_PERIOD, $this->period->_getFormattedValue());
        }
        if (isset($this->periodMax) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PERIOD_MAX]) {
            $xw->writeAttribute(self::FIELD_PERIOD_MAX, $this->periodMax->_getFormattedValue());
        }
        if (isset($this->periodUnit) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PERIOD_UNIT]) {
            $xw->writeAttribute(self::FIELD_PERIOD_UNIT, $this->periodUnit->_getFormattedValue());
        }
        if (isset($this->offset) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_OFFSET]) {
            $xw->writeAttribute(self::FIELD_OFFSET, $this->offset->_getFormattedValue());
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
        if (isset($this->count)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_COUNT]
                || $this->count->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_COUNT);
            $this->count->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_COUNT]);
            $xw->endElement();
        }
        if (isset($this->countMax)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_COUNT_MAX]
                || $this->countMax->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_COUNT_MAX);
            $this->countMax->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_COUNT_MAX]);
            $xw->endElement();
        }
        if (isset($this->duration)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DURATION]
                || $this->duration->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DURATION);
            $this->duration->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DURATION]);
            $xw->endElement();
        }
        if (isset($this->durationMax)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DURATION_MAX]
                || $this->durationMax->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DURATION_MAX);
            $this->durationMax->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DURATION_MAX]);
            $xw->endElement();
        }
        if (isset($this->durationUnit)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DURATION_UNIT]
                || $this->durationUnit->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DURATION_UNIT);
            $this->durationUnit->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DURATION_UNIT]);
            $xw->endElement();
        }
        if (isset($this->frequency)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FREQUENCY]
                || $this->frequency->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FREQUENCY);
            $this->frequency->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FREQUENCY]);
            $xw->endElement();
        }
        if (isset($this->frequencyMax)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FREQUENCY_MAX]
                || $this->frequencyMax->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FREQUENCY_MAX);
            $this->frequencyMax->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FREQUENCY_MAX]);
            $xw->endElement();
        }
        if (isset($this->period)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PERIOD]
                || $this->period->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PERIOD);
            $this->period->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PERIOD]);
            $xw->endElement();
        }
        if (isset($this->periodMax)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PERIOD_MAX]
                || $this->periodMax->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PERIOD_MAX);
            $this->periodMax->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PERIOD_MAX]);
            $xw->endElement();
        }
        if (isset($this->periodUnit)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PERIOD_UNIT]
                || $this->periodUnit->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PERIOD_UNIT);
            $this->periodUnit->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PERIOD_UNIT]);
            $xw->endElement();
        }
        if (isset($this->dayOfWeek) && [] !== $this->dayOfWeek) {
            foreach($this->dayOfWeek as $v) {
                $xw->startElement(self::FIELD_DAY_OF_WEEK);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->timeOfDay) && [] !== $this->timeOfDay) {
            foreach($this->timeOfDay as $v) {
                $xw->startElement(self::FIELD_TIME_OF_DAY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->when) && [] !== $this->when) {
            foreach($this->when as $v) {
                $xw->startElement(self::FIELD_WHEN);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->offset)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_OFFSET]
                || $this->offset->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_OFFSET);
            $this->offset->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_OFFSET]);
            $xw->endElement();
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming\FHIRTimingRepeat $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming\FHIRTimingRepeat
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
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
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_BOUNDS_DURATION]) || array_key_exists(self::FIELD_BOUNDS_DURATION, $json)) {
            $type->setBoundsDuration(FHIRDuration::jsonUnserialize($json[self::FIELD_BOUNDS_DURATION], $config));
        }
        if (isset($json[self::FIELD_BOUNDS_RANGE]) || array_key_exists(self::FIELD_BOUNDS_RANGE, $json)) {
            $type->setBoundsRange(FHIRRange::jsonUnserialize($json[self::FIELD_BOUNDS_RANGE], $config));
        }
        if (isset($json[self::FIELD_BOUNDS_PERIOD]) || array_key_exists(self::FIELD_BOUNDS_PERIOD, $json)) {
            $type->setBoundsPeriod(FHIRPeriod::jsonUnserialize($json[self::FIELD_BOUNDS_PERIOD], $config));
        }
        if (isset($json[self::FIELD_COUNT])
            || isset($json[self::FIELD_COUNT_EXT])
            || array_key_exists(self::FIELD_COUNT, $json)
            || array_key_exists(self::FIELD_COUNT_EXT, $json)) {
            $value = $json[self::FIELD_COUNT] ?? null;
            $type->setCount(FHIRInteger::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInteger::FIELD_VALUE => $value]) + ($json[self::FIELD_COUNT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_COUNT_MAX])
            || isset($json[self::FIELD_COUNT_MAX_EXT])
            || array_key_exists(self::FIELD_COUNT_MAX, $json)
            || array_key_exists(self::FIELD_COUNT_MAX_EXT, $json)) {
            $value = $json[self::FIELD_COUNT_MAX] ?? null;
            $type->setCountMax(FHIRInteger::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInteger::FIELD_VALUE => $value]) + ($json[self::FIELD_COUNT_MAX_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DURATION])
            || isset($json[self::FIELD_DURATION_EXT])
            || array_key_exists(self::FIELD_DURATION, $json)
            || array_key_exists(self::FIELD_DURATION_EXT, $json)) {
            $value = $json[self::FIELD_DURATION] ?? null;
            $type->setDuration(FHIRDecimal::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDecimal::FIELD_VALUE => $value]) + ($json[self::FIELD_DURATION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DURATION_MAX])
            || isset($json[self::FIELD_DURATION_MAX_EXT])
            || array_key_exists(self::FIELD_DURATION_MAX, $json)
            || array_key_exists(self::FIELD_DURATION_MAX_EXT, $json)) {
            $value = $json[self::FIELD_DURATION_MAX] ?? null;
            $type->setDurationMax(FHIRDecimal::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDecimal::FIELD_VALUE => $value]) + ($json[self::FIELD_DURATION_MAX_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DURATION_UNIT])
            || isset($json[self::FIELD_DURATION_UNIT_EXT])
            || array_key_exists(self::FIELD_DURATION_UNIT, $json)
            || array_key_exists(self::FIELD_DURATION_UNIT_EXT, $json)) {
            $value = $json[self::FIELD_DURATION_UNIT] ?? null;
            $type->setDurationUnit(FHIRUnitsOfTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUnitsOfTime::FIELD_VALUE => $value]) + ($json[self::FIELD_DURATION_UNIT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_FREQUENCY])
            || isset($json[self::FIELD_FREQUENCY_EXT])
            || array_key_exists(self::FIELD_FREQUENCY, $json)
            || array_key_exists(self::FIELD_FREQUENCY_EXT, $json)) {
            $value = $json[self::FIELD_FREQUENCY] ?? null;
            $type->setFrequency(FHIRInteger::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInteger::FIELD_VALUE => $value]) + ($json[self::FIELD_FREQUENCY_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_FREQUENCY_MAX])
            || isset($json[self::FIELD_FREQUENCY_MAX_EXT])
            || array_key_exists(self::FIELD_FREQUENCY_MAX, $json)
            || array_key_exists(self::FIELD_FREQUENCY_MAX_EXT, $json)) {
            $value = $json[self::FIELD_FREQUENCY_MAX] ?? null;
            $type->setFrequencyMax(FHIRInteger::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInteger::FIELD_VALUE => $value]) + ($json[self::FIELD_FREQUENCY_MAX_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_PERIOD])
            || isset($json[self::FIELD_PERIOD_EXT])
            || array_key_exists(self::FIELD_PERIOD, $json)
            || array_key_exists(self::FIELD_PERIOD_EXT, $json)) {
            $value = $json[self::FIELD_PERIOD] ?? null;
            $type->setPeriod(FHIRDecimal::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDecimal::FIELD_VALUE => $value]) + ($json[self::FIELD_PERIOD_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_PERIOD_MAX])
            || isset($json[self::FIELD_PERIOD_MAX_EXT])
            || array_key_exists(self::FIELD_PERIOD_MAX, $json)
            || array_key_exists(self::FIELD_PERIOD_MAX_EXT, $json)) {
            $value = $json[self::FIELD_PERIOD_MAX] ?? null;
            $type->setPeriodMax(FHIRDecimal::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDecimal::FIELD_VALUE => $value]) + ($json[self::FIELD_PERIOD_MAX_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_PERIOD_UNIT])
            || isset($json[self::FIELD_PERIOD_UNIT_EXT])
            || array_key_exists(self::FIELD_PERIOD_UNIT, $json)
            || array_key_exists(self::FIELD_PERIOD_UNIT_EXT, $json)) {
            $value = $json[self::FIELD_PERIOD_UNIT] ?? null;
            $type->setPeriodUnit(FHIRUnitsOfTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUnitsOfTime::FIELD_VALUE => $value]) + ($json[self::FIELD_PERIOD_UNIT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DAY_OF_WEEK])
            || isset($json[self::FIELD_DAY_OF_WEEK_EXT])
            || array_key_exists(self::FIELD_DAY_OF_WEEK, $json)
            || array_key_exists(self::FIELD_DAY_OF_WEEK_EXT, $json)) {
            $value = (array)($json[self::FIELD_DAY_OF_WEEK] ?? []);
            $ext = (array)($json[self::FIELD_DAY_OF_WEEK_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addDayOfWeek(FHIRCode::jsonUnserialize(
                    [FHIRCode::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_TIME_OF_DAY])
            || isset($json[self::FIELD_TIME_OF_DAY_EXT])
            || array_key_exists(self::FIELD_TIME_OF_DAY, $json)
            || array_key_exists(self::FIELD_TIME_OF_DAY_EXT, $json)) {
            $value = (array)($json[self::FIELD_TIME_OF_DAY] ?? []);
            $ext = (array)($json[self::FIELD_TIME_OF_DAY_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addTimeOfDay(FHIRTime::jsonUnserialize(
                    [FHIRTime::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_WHEN])
            || isset($json[self::FIELD_WHEN_EXT])
            || array_key_exists(self::FIELD_WHEN, $json)
            || array_key_exists(self::FIELD_WHEN_EXT, $json)) {
            $value = (array)($json[self::FIELD_WHEN] ?? []);
            $ext = (array)($json[self::FIELD_WHEN_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addWhen(FHIREventTiming::jsonUnserialize(
                    [FHIREventTiming::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_OFFSET])
            || isset($json[self::FIELD_OFFSET_EXT])
            || array_key_exists(self::FIELD_OFFSET, $json)
            || array_key_exists(self::FIELD_OFFSET_EXT, $json)) {
            $value = $json[self::FIELD_OFFSET] ?? null;
            $type->setOffset(FHIRUnsignedInt::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUnsignedInt::FIELD_VALUE => $value]) + ($json[self::FIELD_OFFSET_EXT] ?? []),
                $config,
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
            if ($this->count->_nonValueFieldDefined()) {
                $ext = $this->count->jsonSerialize();
                unset($ext->value);
                $out->_count = $ext;
            }
        }
        if (isset($this->countMax)) {
            if (null !== ($val = $this->countMax->getValue())) {
                $out->countMax = $val;
            }
            if ($this->countMax->_nonValueFieldDefined()) {
                $ext = $this->countMax->jsonSerialize();
                unset($ext->value);
                $out->_countMax = $ext;
            }
        }
        if (isset($this->duration)) {
            if (null !== ($val = $this->duration->getValue())) {
                $out->duration = $val;
            }
            if ($this->duration->_nonValueFieldDefined()) {
                $ext = $this->duration->jsonSerialize();
                unset($ext->value);
                $out->_duration = $ext;
            }
        }
        if (isset($this->durationMax)) {
            if (null !== ($val = $this->durationMax->getValue())) {
                $out->durationMax = $val;
            }
            if ($this->durationMax->_nonValueFieldDefined()) {
                $ext = $this->durationMax->jsonSerialize();
                unset($ext->value);
                $out->_durationMax = $ext;
            }
        }
        if (isset($this->durationUnit)) {
            if (null !== ($val = $this->durationUnit->getValue())) {
                $out->durationUnit = $val;
            }
            if ($this->durationUnit->_nonValueFieldDefined()) {
                $ext = $this->durationUnit->jsonSerialize();
                unset($ext->value);
                $out->_durationUnit = $ext;
            }
        }
        if (isset($this->frequency)) {
            if (null !== ($val = $this->frequency->getValue())) {
                $out->frequency = $val;
            }
            if ($this->frequency->_nonValueFieldDefined()) {
                $ext = $this->frequency->jsonSerialize();
                unset($ext->value);
                $out->_frequency = $ext;
            }
        }
        if (isset($this->frequencyMax)) {
            if (null !== ($val = $this->frequencyMax->getValue())) {
                $out->frequencyMax = $val;
            }
            if ($this->frequencyMax->_nonValueFieldDefined()) {
                $ext = $this->frequencyMax->jsonSerialize();
                unset($ext->value);
                $out->_frequencyMax = $ext;
            }
        }
        if (isset($this->period)) {
            if (null !== ($val = $this->period->getValue())) {
                $out->period = $val;
            }
            if ($this->period->_nonValueFieldDefined()) {
                $ext = $this->period->jsonSerialize();
                unset($ext->value);
                $out->_period = $ext;
            }
        }
        if (isset($this->periodMax)) {
            if (null !== ($val = $this->periodMax->getValue())) {
                $out->periodMax = $val;
            }
            if ($this->periodMax->_nonValueFieldDefined()) {
                $ext = $this->periodMax->jsonSerialize();
                unset($ext->value);
                $out->_periodMax = $ext;
            }
        }
        if (isset($this->periodUnit)) {
            if (null !== ($val = $this->periodUnit->getValue())) {
                $out->periodUnit = $val;
            }
            if ($this->periodUnit->_nonValueFieldDefined()) {
                $ext = $this->periodUnit->jsonSerialize();
                unset($ext->value);
                $out->_periodUnit = $ext;
            }
        }
        if (isset($this->dayOfWeek) && [] !== $this->dayOfWeek) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->dayOfWeek as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->dayOfWeek = $vals;
            }
            if ($hasExts) {
                $out->_dayOfWeek = $exts;
            }
        }
        if (isset($this->timeOfDay) && [] !== $this->timeOfDay) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->timeOfDay as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->timeOfDay = $vals;
            }
            if ($hasExts) {
                $out->_timeOfDay = $exts;
            }
        }
        if (isset($this->when) && [] !== $this->when) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->when as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->when = $vals;
            }
            if ($hasExts) {
                $out->_when = $exts;
            }
        }
        if (isset($this->offset)) {
            if (null !== ($val = $this->offset->getValue())) {
                $out->offset = $val;
            }
            if ($this->offset->_nonValueFieldDefined()) {
                $ext = $this->offset->jsonSerialize();
                unset($ext->value);
                $out->_offset = $ext;
            }
        }
        return $out;
    }
}