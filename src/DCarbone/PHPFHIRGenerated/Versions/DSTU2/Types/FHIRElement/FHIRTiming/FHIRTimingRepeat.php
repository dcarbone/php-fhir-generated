<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRTiming;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 25th, 2025 15:14+0000
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValuePatternMatchRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIREventTiming;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUnitsOfTime;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIREventTimingList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRUnitsOfTimeList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionConstants;

/**
 * Specifies an event that may occur multiple times. Timing schedules are used to
 * record when things are expected or requested to occur. The most common usage is
 * in dosage instructions for medications. They are also used when planning care of
 * various kinds.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRTimingRepeat extends FHIRElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_TIMING_DOT_REPEAT;

    /* class_default.php:56 */
    public const FIELD_BOUNDS_QUANTITY = 'boundsQuantity';
    public const FIELD_BOUNDS_RANGE = 'boundsRange';
    public const FIELD_BOUNDS_PERIOD = 'boundsPeriod';
    public const FIELD_COUNT = 'count';
    public const FIELD_COUNT_EXT = '_count';
    public const FIELD_DURATION = 'duration';
    public const FIELD_DURATION_EXT = '_duration';
    public const FIELD_DURATION_MAX = 'durationMax';
    public const FIELD_DURATION_MAX_EXT = '_durationMax';
    public const FIELD_DURATION_UNITS = 'durationUnits';
    public const FIELD_DURATION_UNITS_EXT = '_durationUnits';
    public const FIELD_FREQUENCY = 'frequency';
    public const FIELD_FREQUENCY_EXT = '_frequency';
    public const FIELD_FREQUENCY_MAX = 'frequencyMax';
    public const FIELD_FREQUENCY_MAX_EXT = '_frequencyMax';
    public const FIELD_PERIOD = 'period';
    public const FIELD_PERIOD_EXT = '_period';
    public const FIELD_PERIOD_MAX = 'periodMax';
    public const FIELD_PERIOD_MAX_EXT = '_periodMax';
    public const FIELD_PERIOD_UNITS = 'periodUnits';
    public const FIELD_PERIOD_UNITS_EXT = '_periodUnits';
    public const FIELD_WHEN = 'when';
    public const FIELD_WHEN_EXT = '_when';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_ID => [
            ValuePatternMatchRule::NAME => '/^[A-Za-z0-9\\-\\.]{1,64}$/',
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_COUNT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DURATION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DURATION_MAX => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DURATION_UNITS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FREQUENCY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FREQUENCY_MAX => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PERIOD => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PERIOD_MAX => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PERIOD_UNITS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_WHEN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRDuration 
     */
    #[FHIRDuration]
    protected FHIRDuration $boundsQuantity;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange 
     */
    #[FHIRRange]
    protected FHIRRange $boundsRange;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod 
     */
    #[FHIRPeriod]
    protected FHIRPeriod $boundsPeriod;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A total count of the desired number of repetitions.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger 
     */
    #[FHIRInteger]
    protected FHIRInteger $count;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How long this thing happens for when it happens.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal 
     */
    #[FHIRDecimal]
    protected FHIRDecimal $duration;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The upper limit of how long this thing happens for when it happens.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal 
     */
    #[FHIRDecimal]
    protected FHIRDecimal $durationMax;
    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the duration, in UCUM units.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUnitsOfTime 
     */
    #[FHIRUnitsOfTime]
    protected FHIRUnitsOfTime $durationUnits;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of times to repeat the action within the specified period / period
     * range (i.e. both period and periodMax provided).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger 
     */
    #[FHIRInteger]
    protected FHIRInteger $frequency;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the frequency is a range - so repeat between
     * [frequency] and [frequencyMax] times within the period or period range.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger 
     */
    #[FHIRInteger]
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal 
     */
    #[FHIRDecimal]
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal 
     */
    #[FHIRDecimal]
    protected FHIRDecimal $periodMax;
    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the period in UCUM units.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUnitsOfTime 
     */
    #[FHIRUnitsOfTime]
    protected FHIRUnitsOfTime $periodUnits;
    /**
     * Real world event that the relating to the schedule.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A real world event that the occurrence of the event should be tied to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIREventTiming 
     */
    #[FHIREventTiming]
    protected FHIREventTiming $when;

    /* constructor.php:61 */
    /**
     * FHIRTimingRepeat Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRDuration $boundsQuantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange $boundsRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod $boundsPeriod
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger $count
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $duration
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $durationMax
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRUnitsOfTimeList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUnitsOfTime $durationUnits
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger $frequency
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger $frequencyMax
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $period
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $periodMax
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRUnitsOfTimeList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUnitsOfTime $periodUnits
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIREventTimingList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIREventTiming $when
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|FHIRDuration $boundsQuantity = null,
                                null|FHIRRange $boundsRange = null,
                                null|FHIRPeriod $boundsPeriod = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $count = null,
                                null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $duration = null,
                                null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $durationMax = null,
                                null|string|FHIRUnitsOfTimeList|FHIRUnitsOfTime $durationUnits = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $frequency = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $frequencyMax = null,
                                null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $period = null,
                                null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $periodMax = null,
                                null|string|FHIRUnitsOfTimeList|FHIRUnitsOfTime $periodUnits = null,
                                null|string|FHIREventTimingList|FHIREventTiming $when = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            fhirComments: $fhirComments);
        if (null !== $boundsQuantity) {
            $this->setBoundsQuantity($boundsQuantity);
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
        if (null !== $duration) {
            $this->setDuration($duration);
        }
        if (null !== $durationMax) {
            $this->setDurationMax($durationMax);
        }
        if (null !== $durationUnits) {
            $this->setDurationUnits($durationUnits);
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
        if (null !== $periodUnits) {
            $this->setPeriodUnits($periodUnits);
        }
        if (null !== $when) {
            $this->setWhen($when);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getBoundsQuantity(): null|FHIRDuration
    {
        return $this->boundsQuantity ?? null;
    }

    /**
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRDuration $boundsQuantity
     * @return static
     */
    public function setBoundsQuantity(null|FHIRDuration $boundsQuantity): self
    {
        if (null === $boundsQuantity) {
            unset($this->boundsQuantity);
            return $this;
        }
        $this->boundsQuantity = $boundsQuantity;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange $boundsRange
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod $boundsPeriod
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger $count
     * @return static
     */
    public function setCount(null|string|float|FHIRIntegerPrimitive|FHIRInteger $count): self
    {
        if (null === $count) {
            unset($this->count);
            return $this;
        }
        if (!($count instanceof FHIRInteger)) {
            $count = new FHIRInteger(value: $count);
        }
        $this->count = $count;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $duration
     * @return static
     */
    public function setDuration(null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $duration): self
    {
        if (null === $duration) {
            unset($this->duration);
            return $this;
        }
        if (!($duration instanceof FHIRDecimal)) {
            $duration = new FHIRDecimal(value: $duration);
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $durationMax
     * @return static
     */
    public function setDurationMax(null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $durationMax): self
    {
        if (null === $durationMax) {
            unset($this->durationMax);
            return $this;
        }
        if (!($durationMax instanceof FHIRDecimal)) {
            $durationMax = new FHIRDecimal(value: $durationMax);
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUnitsOfTime
     */
    public function getDurationUnits(): null|FHIRUnitsOfTime
    {
        return $this->durationUnits ?? null;
    }

    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the duration, in UCUM units.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRUnitsOfTimeList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUnitsOfTime $durationUnits
     * @return static
     */
    public function setDurationUnits(null|string|FHIRUnitsOfTimeList|FHIRUnitsOfTime $durationUnits): self
    {
        if (null === $durationUnits) {
            unset($this->durationUnits);
            return $this;
        }
        if (!($durationUnits instanceof FHIRUnitsOfTime)) {
            $durationUnits = new FHIRUnitsOfTime(value: $durationUnits);
        }
        $this->durationUnits = $durationUnits;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger $frequency
     * @return static
     */
    public function setFrequency(null|string|float|FHIRIntegerPrimitive|FHIRInteger $frequency): self
    {
        if (null === $frequency) {
            unset($this->frequency);
            return $this;
        }
        if (!($frequency instanceof FHIRInteger)) {
            $frequency = new FHIRInteger(value: $frequency);
        }
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the frequency is a range - so repeat between
     * [frequency] and [frequencyMax] times within the period or period range.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger
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
     * If present, indicates that the frequency is a range - so repeat between
     * [frequency] and [frequencyMax] times within the period or period range.
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger $frequencyMax
     * @return static
     */
    public function setFrequencyMax(null|string|float|FHIRIntegerPrimitive|FHIRInteger $frequencyMax): self
    {
        if (null === $frequencyMax) {
            unset($this->frequencyMax);
            return $this;
        }
        if (!($frequencyMax instanceof FHIRInteger)) {
            $frequencyMax = new FHIRInteger(value: $frequencyMax);
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $period
     * @return static
     */
    public function setPeriod(null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $period): self
    {
        if (null === $period) {
            unset($this->period);
            return $this;
        }
        if (!($period instanceof FHIRDecimal)) {
            $period = new FHIRDecimal(value: $period);
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $periodMax
     * @return static
     */
    public function setPeriodMax(null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $periodMax): self
    {
        if (null === $periodMax) {
            unset($this->periodMax);
            return $this;
        }
        if (!($periodMax instanceof FHIRDecimal)) {
            $periodMax = new FHIRDecimal(value: $periodMax);
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUnitsOfTime
     */
    public function getPeriodUnits(): null|FHIRUnitsOfTime
    {
        return $this->periodUnits ?? null;
    }

    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the period in UCUM units.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRUnitsOfTimeList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUnitsOfTime $periodUnits
     * @return static
     */
    public function setPeriodUnits(null|string|FHIRUnitsOfTimeList|FHIRUnitsOfTime $periodUnits): self
    {
        if (null === $periodUnits) {
            unset($this->periodUnits);
            return $this;
        }
        if (!($periodUnits instanceof FHIRUnitsOfTime)) {
            $periodUnits = new FHIRUnitsOfTime(value: $periodUnits);
        }
        $this->periodUnits = $periodUnits;
        return $this;
    }

    /**
     * Real world event that the relating to the schedule.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A real world event that the occurrence of the event should be tied to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIREventTiming
     */
    public function getWhen(): null|FHIREventTiming
    {
        return $this->when ?? null;
    }

    /**
     * Real world event that the relating to the schedule.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A real world event that the occurrence of the event should be tied to.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIREventTimingList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIREventTiming $when
     * @return static
     */
    public function setWhen(null|string|FHIREventTimingList|FHIREventTiming $when): self
    {
        if (null === $when) {
            unset($this->when);
            return $this;
        }
        if (!($when instanceof FHIREventTiming)) {
            $when = new FHIREventTiming(value: $when);
        }
        $this->when = $when;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRTiming\FHIRTimingRepeat $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRTiming\FHIRTimingRepeat
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
                $va = $ce->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_BOUNDS_QUANTITY === $cen) {
                $type->setBoundsQuantity(FHIRDuration::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BOUNDS_RANGE === $cen) {
                $type->setBoundsRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BOUNDS_PERIOD === $cen) {
                $type->setBoundsPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COUNT === $cen) {
                $type->setCount(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DURATION === $cen) {
                $type->setDuration(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DURATION_MAX === $cen) {
                $type->setDurationMax(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DURATION_UNITS === $cen) {
                $type->setDurationUnits(FHIRUnitsOfTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FREQUENCY === $cen) {
                $type->setFrequency(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FREQUENCY_MAX === $cen) {
                $type->setFrequencyMax(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERIOD === $cen) {
                $type->setPeriod(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERIOD_MAX === $cen) {
                $type->setPeriodMax(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERIOD_UNITS === $cen) {
                $type->setPeriodUnits(FHIRUnitsOfTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_WHEN === $cen) {
                $type->setWhen(FHIREventTiming::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_COUNT])) {
            if (isset($type->count)) {
                $type->count->setValue((string)$attributes[self::FIELD_COUNT]);
            } else {
                $type->setCount((string)$attributes[self::FIELD_COUNT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_COUNT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DURATION])) {
            if (isset($type->duration)) {
                $type->duration->setValue((string)$attributes[self::FIELD_DURATION]);
            } else {
                $type->setDuration((string)$attributes[self::FIELD_DURATION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DURATION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DURATION_MAX])) {
            if (isset($type->durationMax)) {
                $type->durationMax->setValue((string)$attributes[self::FIELD_DURATION_MAX]);
            } else {
                $type->setDurationMax((string)$attributes[self::FIELD_DURATION_MAX]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DURATION_MAX, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DURATION_UNITS])) {
            if (isset($type->durationUnits)) {
                $type->durationUnits->setValue((string)$attributes[self::FIELD_DURATION_UNITS]);
            } else {
                $type->setDurationUnits((string)$attributes[self::FIELD_DURATION_UNITS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DURATION_UNITS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FREQUENCY])) {
            if (isset($type->frequency)) {
                $type->frequency->setValue((string)$attributes[self::FIELD_FREQUENCY]);
            } else {
                $type->setFrequency((string)$attributes[self::FIELD_FREQUENCY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FREQUENCY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FREQUENCY_MAX])) {
            if (isset($type->frequencyMax)) {
                $type->frequencyMax->setValue((string)$attributes[self::FIELD_FREQUENCY_MAX]);
            } else {
                $type->setFrequencyMax((string)$attributes[self::FIELD_FREQUENCY_MAX]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FREQUENCY_MAX, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PERIOD])) {
            if (isset($type->period)) {
                $type->period->setValue((string)$attributes[self::FIELD_PERIOD]);
            } else {
                $type->setPeriod((string)$attributes[self::FIELD_PERIOD]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PERIOD, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PERIOD_MAX])) {
            if (isset($type->periodMax)) {
                $type->periodMax->setValue((string)$attributes[self::FIELD_PERIOD_MAX]);
            } else {
                $type->setPeriodMax((string)$attributes[self::FIELD_PERIOD_MAX]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PERIOD_MAX, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PERIOD_UNITS])) {
            if (isset($type->periodUnits)) {
                $type->periodUnits->setValue((string)$attributes[self::FIELD_PERIOD_UNITS]);
            } else {
                $type->setPeriodUnits((string)$attributes[self::FIELD_PERIOD_UNITS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PERIOD_UNITS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_WHEN])) {
            if (isset($type->when)) {
                $type->when->setValue((string)$attributes[self::FIELD_WHEN]);
            } else {
                $type->setWhen((string)$attributes[self::FIELD_WHEN]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_WHEN, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->writeAttribute(self::FIELD_COUNT, $this->count->_getValueAsString());
        }
        if (isset($this->duration) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DURATION]) {
            $xw->writeAttribute(self::FIELD_DURATION, $this->duration->_getValueAsString());
        }
        if (isset($this->durationMax) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DURATION_MAX]) {
            $xw->writeAttribute(self::FIELD_DURATION_MAX, $this->durationMax->_getValueAsString());
        }
        if (isset($this->durationUnits) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DURATION_UNITS]) {
            $xw->writeAttribute(self::FIELD_DURATION_UNITS, $this->durationUnits->_getValueAsString());
        }
        if (isset($this->frequency) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FREQUENCY]) {
            $xw->writeAttribute(self::FIELD_FREQUENCY, $this->frequency->_getValueAsString());
        }
        if (isset($this->frequencyMax) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FREQUENCY_MAX]) {
            $xw->writeAttribute(self::FIELD_FREQUENCY_MAX, $this->frequencyMax->_getValueAsString());
        }
        if (isset($this->period) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PERIOD]) {
            $xw->writeAttribute(self::FIELD_PERIOD, $this->period->_getValueAsString());
        }
        if (isset($this->periodMax) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PERIOD_MAX]) {
            $xw->writeAttribute(self::FIELD_PERIOD_MAX, $this->periodMax->_getValueAsString());
        }
        if (isset($this->periodUnits) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PERIOD_UNITS]) {
            $xw->writeAttribute(self::FIELD_PERIOD_UNITS, $this->periodUnits->_getValueAsString());
        }
        if (isset($this->when) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_WHEN]) {
            $xw->writeAttribute(self::FIELD_WHEN, $this->when->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->boundsQuantity)) {
            $xw->startElement(self::FIELD_BOUNDS_QUANTITY);
            $this->boundsQuantity->xmlSerialize($xw, $config);
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
        if (isset($this->durationUnits)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DURATION_UNITS]
                || $this->durationUnits->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DURATION_UNITS);
            $this->durationUnits->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DURATION_UNITS]);
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
        if (isset($this->periodUnits)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PERIOD_UNITS]
                || $this->periodUnits->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PERIOD_UNITS);
            $this->periodUnits->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PERIOD_UNITS]);
            $xw->endElement();
        }
        if (isset($this->when)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_WHEN]
                || $this->when->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_WHEN);
            $this->when->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_WHEN]);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRTiming\FHIRTimingRepeat $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRTiming\FHIRTimingRepeat
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            if (isset($decoded->resourceType) && $decoded->resourceType !== static::FHIR_TYPE_NAME) {
                throw new \DomainException(sprintf(
                    '%s::jsonUnserialize - Cannot unmarshal data for resource type "%s" into this type.',
                    ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                    $decoded->resourceType,
                ));
            }
            $type = new static();
        } else if (!($type instanceof FHIRTimingRepeat)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->boundsQuantity) || property_exists($decoded, self::FIELD_BOUNDS_QUANTITY)) {
            if (is_array($decoded->boundsQuantity)) {
                $type->setBoundsQuantity(FHIRDuration::jsonUnserialize(reset($decoded->boundsQuantity), $config));
            } else {
                $type->setBoundsQuantity(FHIRDuration::jsonUnserialize($decoded->boundsQuantity, $config));
            }
        }
        if (isset($decoded->boundsRange) || property_exists($decoded, self::FIELD_BOUNDS_RANGE)) {
            if (is_array($decoded->boundsRange)) {
                $type->setBoundsRange(FHIRRange::jsonUnserialize(reset($decoded->boundsRange), $config));
            } else {
                $type->setBoundsRange(FHIRRange::jsonUnserialize($decoded->boundsRange, $config));
            }
        }
        if (isset($decoded->boundsPeriod) || property_exists($decoded, self::FIELD_BOUNDS_PERIOD)) {
            if (is_array($decoded->boundsPeriod)) {
                $type->setBoundsPeriod(FHIRPeriod::jsonUnserialize(reset($decoded->boundsPeriod), $config));
            } else {
                $type->setBoundsPeriod(FHIRPeriod::jsonUnserialize($decoded->boundsPeriod, $config));
            }
        }
        if (isset($decoded->count)
            || isset($decoded->_count)
            || property_exists($decoded, self::FIELD_COUNT)
            || property_exists($decoded, self::FIELD_COUNT_EXT)) {
            $v = $decoded->_count ?? new \stdClass();
            $v->value = $decoded->count ?? null;
            $type->setCount(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($decoded->duration)
            || isset($decoded->_duration)
            || property_exists($decoded, self::FIELD_DURATION)
            || property_exists($decoded, self::FIELD_DURATION_EXT)) {
            $v = $decoded->_duration ?? new \stdClass();
            $v->value = $decoded->duration ?? null;
            $type->setDuration(FHIRDecimal::jsonUnserialize($v, $config));
        }
        if (isset($decoded->durationMax)
            || isset($decoded->_durationMax)
            || property_exists($decoded, self::FIELD_DURATION_MAX)
            || property_exists($decoded, self::FIELD_DURATION_MAX_EXT)) {
            $v = $decoded->_durationMax ?? new \stdClass();
            $v->value = $decoded->durationMax ?? null;
            $type->setDurationMax(FHIRDecimal::jsonUnserialize($v, $config));
        }
        if (isset($decoded->durationUnits)
            || isset($decoded->_durationUnits)
            || property_exists($decoded, self::FIELD_DURATION_UNITS)
            || property_exists($decoded, self::FIELD_DURATION_UNITS_EXT)) {
            $v = $decoded->_durationUnits ?? new \stdClass();
            $v->value = $decoded->durationUnits ?? null;
            $type->setDurationUnits(FHIRUnitsOfTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->frequency)
            || isset($decoded->_frequency)
            || property_exists($decoded, self::FIELD_FREQUENCY)
            || property_exists($decoded, self::FIELD_FREQUENCY_EXT)) {
            $v = $decoded->_frequency ?? new \stdClass();
            $v->value = $decoded->frequency ?? null;
            $type->setFrequency(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($decoded->frequencyMax)
            || isset($decoded->_frequencyMax)
            || property_exists($decoded, self::FIELD_FREQUENCY_MAX)
            || property_exists($decoded, self::FIELD_FREQUENCY_MAX_EXT)) {
            $v = $decoded->_frequencyMax ?? new \stdClass();
            $v->value = $decoded->frequencyMax ?? null;
            $type->setFrequencyMax(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($decoded->period)
            || isset($decoded->_period)
            || property_exists($decoded, self::FIELD_PERIOD)
            || property_exists($decoded, self::FIELD_PERIOD_EXT)) {
            $v = $decoded->_period ?? new \stdClass();
            $v->value = $decoded->period ?? null;
            $type->setPeriod(FHIRDecimal::jsonUnserialize($v, $config));
        }
        if (isset($decoded->periodMax)
            || isset($decoded->_periodMax)
            || property_exists($decoded, self::FIELD_PERIOD_MAX)
            || property_exists($decoded, self::FIELD_PERIOD_MAX_EXT)) {
            $v = $decoded->_periodMax ?? new \stdClass();
            $v->value = $decoded->periodMax ?? null;
            $type->setPeriodMax(FHIRDecimal::jsonUnserialize($v, $config));
        }
        if (isset($decoded->periodUnits)
            || isset($decoded->_periodUnits)
            || property_exists($decoded, self::FIELD_PERIOD_UNITS)
            || property_exists($decoded, self::FIELD_PERIOD_UNITS_EXT)) {
            $v = $decoded->_periodUnits ?? new \stdClass();
            $v->value = $decoded->periodUnits ?? null;
            $type->setPeriodUnits(FHIRUnitsOfTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->when)
            || isset($decoded->_when)
            || property_exists($decoded, self::FIELD_WHEN)
            || property_exists($decoded, self::FIELD_WHEN_EXT)) {
            $v = $decoded->_when ?? new \stdClass();
            $v->value = $decoded->when ?? null;
            $type->setWhen(FHIREventTiming::jsonUnserialize($v, $config));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->boundsQuantity)) {
            $out->boundsQuantity = $this->boundsQuantity;
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
        if (isset($this->durationUnits)) {
            if (null !== ($val = $this->durationUnits->getValue())) {
                $out->durationUnits = $val;
            }
            if ($this->durationUnits->_nonValueFieldDefined()) {
                $ext = $this->durationUnits->jsonSerialize();
                unset($ext->value);
                $out->_durationUnits = $ext;
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
        if (isset($this->periodUnits)) {
            if (null !== ($val = $this->periodUnits->getValue())) {
                $out->periodUnits = $val;
            }
            if ($this->periodUnits->_nonValueFieldDefined()) {
                $ext = $this->periodUnits->jsonSerialize();
                unset($ext->value);
                $out->_periodUnits = $ext;
            }
        }
        if (isset($this->when)) {
            if (null !== ($val = $this->when->getValue())) {
                $out->when = $val;
            }
            if ($this->when->_nonValueFieldDefined()) {
                $ext = $this->when->jsonSerialize();
                unset($ext->value);
                $out->_when = $ext;
            }
        }
        return $out;
    }
}