<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRTiming;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 1st, 2025 22:01+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
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
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionConstants;

/**
 * Specifies an event that may occur multiple times. Timing schedules are used to
 * record when things are expected or requested to occur. The most common usage is
 * in dosage instructions for medications. They are also used when planning care of
 * various kinds.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
class FHIRTimingRepeat extends FHIRElement
{    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_TIMING_DOT_REPEAT;

    /* class_default.php:47 */
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

    /* class_default.php:66 */
    private static array $_validationRules = [];

    /* class_default.php:91 */
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

    /* class_default.php:107 */
    /**
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRDuration 
     */
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
    protected FHIRDecimal $durationMax;
    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the duration, in UCUM units.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUnitsOfTime 
     */
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
    protected FHIRDecimal $periodMax;
    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the period in UCUM units.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUnitsOfTime 
     */
    protected FHIRUnitsOfTime $periodUnits;
    /**
     * Real world event that the relating to the schedule.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A real world event that the occurrence of the event should be tied to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIREventTiming 
     */
    protected FHIREventTiming $when;

    /* constructor.php:63 */
    /**
     * FHIRTimingRepeat Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRDuration $boundsQuantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange $boundsRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod $boundsPeriod
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger $count
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $duration
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $durationMax
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRUnitsOfTimeList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUnitsOfTime $durationUnits
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger $frequency
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger $frequencyMax
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $period
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $periodMax
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRUnitsOfTimeList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUnitsOfTime $periodUnits
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIREventTimingList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIREventTiming $when
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|FHIRDuration $boundsQuantity = null,
                                null|FHIRRange $boundsRange = null,
                                null|FHIRPeriod $boundsPeriod = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $count = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $duration = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $durationMax = null,
                                null|string|FHIRUnitsOfTimeList|FHIRUnitsOfTime $durationUnits = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $frequency = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $frequencyMax = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $period = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $periodMax = null,
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

    /* class_default.php:136 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:162 */
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger $count
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
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $duration
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
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $durationMax
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDurationUnits(null|string|FHIRUnitsOfTimeList|FHIRUnitsOfTime $durationUnits,
                                     ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $durationUnits) {
            unset($this->durationUnits);
            return $this;
        }
        if (!($durationUnits instanceof FHIRUnitsOfTime)) {
            $durationUnits = new FHIRUnitsOfTime(value: $durationUnits);
        }
        $this->durationUnits = $durationUnits;
        if ($this->_valueXMLLocations[self::FIELD_DURATION_UNITS] !== $valueXMLLocation) {
            $this->_setDurationUnitsValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the durationUnits element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDurationUnitsValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DURATION_UNITS];
    }

    /**
     * Set the location the "value" field of the durationUnits element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDurationUnitsValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DURATION_UNITS] = $valueXMLLocation;
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger $frequency
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger $frequencyMax
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
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $period
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
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $periodMax
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPeriodUnits(null|string|FHIRUnitsOfTimeList|FHIRUnitsOfTime $periodUnits,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $periodUnits) {
            unset($this->periodUnits);
            return $this;
        }
        if (!($periodUnits instanceof FHIRUnitsOfTime)) {
            $periodUnits = new FHIRUnitsOfTime(value: $periodUnits);
        }
        $this->periodUnits = $periodUnits;
        if ($this->_valueXMLLocations[self::FIELD_PERIOD_UNITS] !== $valueXMLLocation) {
            $this->_setPeriodUnitsValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the periodUnits element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getPeriodUnitsValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_PERIOD_UNITS];
    }

    /**
     * Set the location the "value" field of the periodUnits element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setPeriodUnitsValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_PERIOD_UNITS] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setWhen(null|string|FHIREventTimingList|FHIREventTiming $when,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $when) {
            unset($this->when);
            return $this;
        }
        if (!($when instanceof FHIREventTiming)) {
            $when = new FHIREventTiming(value: $when);
        }
        $this->when = $when;
        if ($this->_valueXMLLocations[self::FIELD_WHEN] !== $valueXMLLocation) {
            $this->_setWhenValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the when element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getWhenValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_WHEN];
    }

    /**
     * Set the location the "value" field of the when element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setWhenValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_WHEN] = $valueXMLLocation;
        return $this;
    }

    /* class_default.php:188 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
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
        if (isset($validationRules[self::FIELD_BOUNDS_QUANTITY])) {
            $v = $this->getBoundsQuantity();
            foreach($validationRules[self::FIELD_BOUNDS_QUANTITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BOUNDS_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BOUNDS_QUANTITY])) {
                        $errs[self::FIELD_BOUNDS_QUANTITY] = [];
                    }
                    $errs[self::FIELD_BOUNDS_QUANTITY][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_DURATION_UNITS])) {
            $v = $this->getDurationUnits();
            foreach($validationRules[self::FIELD_DURATION_UNITS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DURATION_UNITS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DURATION_UNITS])) {
                        $errs[self::FIELD_DURATION_UNITS] = [];
                    }
                    $errs[self::FIELD_DURATION_UNITS][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_PERIOD_UNITS])) {
            $v = $this->getPeriodUnits();
            foreach($validationRules[self::FIELD_PERIOD_UNITS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PERIOD_UNITS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD_UNITS])) {
                        $errs[self::FIELD_PERIOD_UNITS] = [];
                    }
                    $errs[self::FIELD_PERIOD_UNITS][$rule] = $err;
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

    /* class_default.php:211 */
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
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
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
        if (isset($attributes[self::FIELD_DURATION_UNITS])) {
            if (isset($type->durationUnits)) {
                $type->durationUnits->setValue((string)$attributes[self::FIELD_DURATION_UNITS]);
                $type->_setDurationUnitsValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDurationUnits((string)$attributes[self::FIELD_DURATION_UNITS], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_PERIOD_UNITS])) {
            if (isset($type->periodUnits)) {
                $type->periodUnits->setValue((string)$attributes[self::FIELD_PERIOD_UNITS]);
                $type->_setPeriodUnitsValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setPeriodUnits((string)$attributes[self::FIELD_PERIOD_UNITS], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_WHEN])) {
            if (isset($type->when)) {
                $type->when->setValue((string)$attributes[self::FIELD_WHEN]);
                $type->_setWhenValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setWhen((string)$attributes[self::FIELD_WHEN], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->duration) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DURATION]) {
            $xw->writeAttribute(self::FIELD_DURATION, $this->duration->_getFormattedValue());
        }
        if (isset($this->durationMax) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DURATION_MAX]) {
            $xw->writeAttribute(self::FIELD_DURATION_MAX, $this->durationMax->_getFormattedValue());
        }
        if (isset($this->durationUnits) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DURATION_UNITS]) {
            $xw->writeAttribute(self::FIELD_DURATION_UNITS, $this->durationUnits->_getFormattedValue());
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
        if (isset($this->periodUnits) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PERIOD_UNITS]) {
            $xw->writeAttribute(self::FIELD_PERIOD_UNITS, $this->periodUnits->_getFormattedValue());
        }
        if (isset($this->when) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_WHEN]) {
            $xw->writeAttribute(self::FIELD_WHEN, $this->when->_getFormattedValue());
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
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRTiming\FHIRTimingRepeat $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRTiming\FHIRTimingRepeat
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
        if (isset($json[self::FIELD_BOUNDS_QUANTITY]) || array_key_exists(self::FIELD_BOUNDS_QUANTITY, $json)) {
            $type->setBoundsQuantity(FHIRDuration::jsonUnserialize($json[self::FIELD_BOUNDS_QUANTITY], $config));
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
        if (isset($json[self::FIELD_DURATION_UNITS])
            || isset($json[self::FIELD_DURATION_UNITS_EXT])
            || array_key_exists(self::FIELD_DURATION_UNITS, $json)
            || array_key_exists(self::FIELD_DURATION_UNITS_EXT, $json)) {
            $value = $json[self::FIELD_DURATION_UNITS] ?? null;
            $type->setDurationUnits(FHIRUnitsOfTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUnitsOfTime::FIELD_VALUE => $value]) + ($json[self::FIELD_DURATION_UNITS_EXT] ?? []),
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
        if (isset($json[self::FIELD_PERIOD_UNITS])
            || isset($json[self::FIELD_PERIOD_UNITS_EXT])
            || array_key_exists(self::FIELD_PERIOD_UNITS, $json)
            || array_key_exists(self::FIELD_PERIOD_UNITS_EXT, $json)) {
            $value = $json[self::FIELD_PERIOD_UNITS] ?? null;
            $type->setPeriodUnits(FHIRUnitsOfTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUnitsOfTime::FIELD_VALUE => $value]) + ($json[self::FIELD_PERIOD_UNITS_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_WHEN])
            || isset($json[self::FIELD_WHEN_EXT])
            || array_key_exists(self::FIELD_WHEN, $json)
            || array_key_exists(self::FIELD_WHEN_EXT, $json)) {
            $value = $json[self::FIELD_WHEN] ?? null;
            $type->setWhen(FHIREventTiming::jsonUnserialize(
                (is_array($value) ? $value : [FHIREventTiming::FIELD_VALUE => $value]) + ($json[self::FIELD_WHEN_EXT] ?? []),
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