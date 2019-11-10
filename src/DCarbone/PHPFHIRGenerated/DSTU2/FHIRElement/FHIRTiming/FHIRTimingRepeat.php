<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 10th, 2019 18:12+0000
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
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIREventTiming;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUnitsOfTime;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * Specifies an event that may occur multiple times. Timing schedules are used to
 * record when things are expected or requested to occur. The most common usage is
 * in dosage instructions for medications. They are also used when planning care of
 * various kinds.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRTimingRepeat
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming
 */
class FHIRTimingRepeat extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_BOUNDS_PERIOD = 'boundsPeriod';
    const FIELD_BOUNDS_QUANTITY = 'boundsQuantity';
    const FIELD_BOUNDS_RANGE = 'boundsRange';
    const FIELD_COUNT = 'count';
    const FIELD_COUNT_EXT = '_count';
    const FIELD_DURATION = 'duration';
    const FIELD_DURATION_EXT = '_duration';
    const FIELD_DURATION_MAX = 'durationMax';
    const FIELD_DURATION_MAX_EXT = '_durationMax';
    const FIELD_DURATION_UNITS = 'durationUnits';
    const FIELD_DURATION_UNITS_EXT = '_durationUnits';
    const FIELD_FREQUENCY = 'frequency';
    const FIELD_FREQUENCY_EXT = '_frequency';
    const FIELD_FREQUENCY_MAX = 'frequencyMax';
    const FIELD_FREQUENCY_MAX_EXT = '_frequencyMax';
    const FIELD_PERIOD = 'period';
    const FIELD_PERIOD_EXT = '_period';
    const FIELD_PERIOD_MAX = 'periodMax';
    const FIELD_PERIOD_MAX_EXT = '_periodMax';
    const FIELD_PERIOD_UNITS = 'periodUnits';
    const FIELD_PERIOD_UNITS_EXT = '_periodUnits';
    const FIELD_WHEN = 'when';
    const FIELD_WHEN_EXT = '_when';

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    protected $boundsPeriod = null;

    /**
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected $boundsQuantity = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange
     */
    protected $boundsRange = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A total count of the desired number of repetitions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger
     */
    protected $count = null;

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How long this thing happens for when it happens.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    protected $durationMax = null;

    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the duration, in UCUM units.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUnitsOfTime
     */
    protected $durationUnits = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of times to repeat the action within the specified period / period
     * range (i.e. both period and periodMax provided).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger
     */
    protected $frequency = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the frequency is a range - so repeat between
     * [frequency] and [frequencyMax] times within the period or period range.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger
     */
    protected $frequencyMax = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    protected $periodMax = null;

    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the period in UCUM units.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUnitsOfTime
     */
    protected $periodUnits = null;

    /**
     * Real world event that the relating to the schedule.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A real world event that the occurrence of the event should be tied to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIREventTiming
     */
    protected $when = null;

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
        if (isset($data[self::FIELD_BOUNDS_PERIOD])) {
            if ($data[self::FIELD_BOUNDS_PERIOD] instanceof FHIRPeriod) {
                $this->setBoundsPeriod($data[self::FIELD_BOUNDS_PERIOD]);
            } else {
                $this->setBoundsPeriod(new FHIRPeriod($data[self::FIELD_BOUNDS_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_BOUNDS_QUANTITY])) {
            if ($data[self::FIELD_BOUNDS_QUANTITY] instanceof FHIRDuration) {
                $this->setBoundsQuantity($data[self::FIELD_BOUNDS_QUANTITY]);
            } else {
                $this->setBoundsQuantity(new FHIRDuration($data[self::FIELD_BOUNDS_QUANTITY]));
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
        if (isset($data[self::FIELD_DURATION_UNITS])) {
            $ext = (isset($data[self::FIELD_DURATION_UNITS_EXT]) && is_array($data[self::FIELD_DURATION_UNITS_EXT]))
                ? $data[self::FIELD_DURATION_UNITS_EXT]
                : null;
            if ($data[self::FIELD_DURATION_UNITS] instanceof FHIRUnitsOfTime) {
                $this->setDurationUnits($data[self::FIELD_DURATION_UNITS]);
            } elseif ($ext && is_scalar($data[self::FIELD_DURATION_UNITS])) {
                $this->setDurationUnits(new FHIRUnitsOfTime([FHIRUnitsOfTime::FIELD_VALUE => $data[self::FIELD_DURATION_UNITS]] + $ext));
            } else {
                $this->setDurationUnits(new FHIRUnitsOfTime($data[self::FIELD_DURATION_UNITS]));
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
        if (isset($data[self::FIELD_PERIOD_UNITS])) {
            $ext = (isset($data[self::FIELD_PERIOD_UNITS_EXT]) && is_array($data[self::FIELD_PERIOD_UNITS_EXT]))
                ? $data[self::FIELD_PERIOD_UNITS_EXT]
                : null;
            if ($data[self::FIELD_PERIOD_UNITS] instanceof FHIRUnitsOfTime) {
                $this->setPeriodUnits($data[self::FIELD_PERIOD_UNITS]);
            } elseif ($ext && is_scalar($data[self::FIELD_PERIOD_UNITS])) {
                $this->setPeriodUnits(new FHIRUnitsOfTime([FHIRUnitsOfTime::FIELD_VALUE => $data[self::FIELD_PERIOD_UNITS]] + $ext));
            } else {
                $this->setPeriodUnits(new FHIRUnitsOfTime($data[self::FIELD_PERIOD_UNITS]));
            }
        }
        if (isset($data[self::FIELD_WHEN])) {
            $ext = (isset($data[self::FIELD_WHEN_EXT]) && is_array($data[self::FIELD_WHEN_EXT]))
                ? $data[self::FIELD_WHEN_EXT]
                : null;
            if ($data[self::FIELD_WHEN] instanceof FHIREventTiming) {
                $this->setWhen($data[self::FIELD_WHEN]);
            } elseif ($ext && is_scalar($data[self::FIELD_WHEN])) {
                $this->setWhen(new FHIREventTiming([FHIREventTiming::FIELD_VALUE => $data[self::FIELD_WHEN]] + $ext));
            } else {
                $this->setWhen(new FHIREventTiming($data[self::FIELD_WHEN]));
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
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod $boundsPeriod
     * @return static
     */
    public function setBoundsPeriod(FHIRPeriod $boundsPeriod = null)
    {
        $this->boundsPeriod = $boundsPeriod;
        return $this;
    }

    /**
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getBoundsQuantity()
    {
        return $this->boundsQuantity;
    }

    /**
     * Either a duration for the length of the timing schedule, a range of possible
     * length, or outer bounds for start and/or end limits of the timing schedule.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration $boundsQuantity
     * @return static
     */
    public function setBoundsQuantity(FHIRDuration $boundsQuantity = null)
    {
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange $boundsRange
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger $count
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
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How long this thing happens for when it happens.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal $duration
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal $durationMax
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUnitsOfTime
     */
    public function getDurationUnits()
    {
        return $this->durationUnits;
    }

    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the duration, in UCUM units.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUnitsOfTime $durationUnits
     * @return static
     */
    public function setDurationUnits(FHIRUnitsOfTime $durationUnits = null)
    {
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger $frequency
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
     * If present, indicates that the frequency is a range - so repeat between
     * [frequency] and [frequencyMax] times within the period or period range.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger
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
     * If present, indicates that the frequency is a range - so repeat between
     * [frequency] and [frequencyMax] times within the period or period range.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger $frequencyMax
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
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the duration of time over which repetitions are to occur; e.g. to
     * express "3 times per day", 3 would be the frequency and "1 day" would be the
     * period.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal $period
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal $periodMax
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUnitsOfTime
     */
    public function getPeriodUnits()
    {
        return $this->periodUnits;
    }

    /**
     * A unit of time (units from UCUM).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the period in UCUM units.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUnitsOfTime $periodUnits
     * @return static
     */
    public function setPeriodUnits(FHIRUnitsOfTime $periodUnits = null)
    {
        $this->periodUnits = $periodUnits;
        return $this;
    }

    /**
     * Real world event that the relating to the schedule.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A real world event that the occurrence of the event should be tied to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIREventTiming
     */
    public function getWhen()
    {
        return $this->when;
    }

    /**
     * Real world event that the relating to the schedule.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A real world event that the occurrence of the event should be tied to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIREventTiming $when
     * @return static
     */
    public function setWhen(FHIREventTiming $when = null)
    {
        $this->when = $when;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming\FHIRTimingRepeat $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming\FHIRTimingRepeat
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
                'FHIRTimingRepeat::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming\FHIRTimingRepeat or null, %s seen.',
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
        if (isset($children->boundsPeriod)) {
            $type->setBoundsPeriod(FHIRPeriod::xmlUnserialize($children->boundsPeriod));
        }
        if (isset($children->boundsQuantity)) {
            $type->setBoundsQuantity(FHIRDuration::xmlUnserialize($children->boundsQuantity));
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
        if (isset($children->durationUnits)) {
            $type->setDurationUnits(FHIRUnitsOfTime::xmlUnserialize($children->durationUnits));
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
        if (isset($children->periodUnits)) {
            $type->setPeriodUnits(FHIRUnitsOfTime::xmlUnserialize($children->periodUnits));
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

        if (null !== ($v = $this->getBoundsPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BOUNDS_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getBoundsQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BOUNDS_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getBoundsRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BOUNDS_RANGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCount())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COUNT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDuration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DURATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDurationMax())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DURATION_MAX, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDurationUnits())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DURATION_UNITS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFrequency())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FREQUENCY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFrequencyMax())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FREQUENCY_MAX, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPeriodMax())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD_MAX, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPeriodUnits())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD_UNITS, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getBoundsPeriod())) {
            $a[self::FIELD_BOUNDS_PERIOD] = $v;
        }
        if (null !== ($v = $this->getBoundsQuantity())) {
            $a[self::FIELD_BOUNDS_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getBoundsRange())) {
            $a[self::FIELD_BOUNDS_RANGE] = $v;
        }
        if (null !== ($v = $this->getCount())) {
            $a[self::FIELD_COUNT] = $v->getValue();
            $a[self::FIELD_COUNT_EXT] = $v;
        }
        if (null !== ($v = $this->getDuration())) {
            $a[self::FIELD_DURATION] = $v->getValue();
            $a[self::FIELD_DURATION_EXT] = $v;
        }
        if (null !== ($v = $this->getDurationMax())) {
            $a[self::FIELD_DURATION_MAX] = $v->getValue();
            $a[self::FIELD_DURATION_MAX_EXT] = $v;
        }
        if (null !== ($v = $this->getDurationUnits())) {
            $a[self::FIELD_DURATION_UNITS] = $v;
        }
        if (null !== ($v = $this->getFrequency())) {
            $a[self::FIELD_FREQUENCY] = $v->getValue();
            $a[self::FIELD_FREQUENCY_EXT] = $v;
        }
        if (null !== ($v = $this->getFrequencyMax())) {
            $a[self::FIELD_FREQUENCY_MAX] = $v->getValue();
            $a[self::FIELD_FREQUENCY_MAX_EXT] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = $v->getValue();
            $a[self::FIELD_PERIOD_EXT] = $v;
        }
        if (null !== ($v = $this->getPeriodMax())) {
            $a[self::FIELD_PERIOD_MAX] = $v->getValue();
            $a[self::FIELD_PERIOD_MAX_EXT] = $v;
        }
        if (null !== ($v = $this->getPeriodUnits())) {
            $a[self::FIELD_PERIOD_UNITS] = $v;
        }
        if (null !== ($v = $this->getWhen())) {
            $a[self::FIELD_WHEN] = $v;
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