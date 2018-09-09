<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCode;
use PHPFHIRGenerated\FHIRElement\FHIRDecimal;
use PHPFHIRGenerated\FHIRElement\FHIREventTiming;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRPositiveInt;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration;
use PHPFHIRGenerated\FHIRElement\FHIRRange;
use PHPFHIRGenerated\FHIRElement\FHIRTime;
use PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime;
use PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt;

/**
 * Specifies an event that may occur multiple times. Timing schedules are used to record when things are planned, expected or requested to occur. The most common usage is in dosage instructions for medications. They are also used when planning care of various kinds, and may be used for reporting the schedule to which past regular activities were carried out.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRTimingRepeat
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
 */
class FHIRTimingRepeat extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Timing.Repeat';

    /**
     * Either a duration for the length of the timing schedule, a range of possible length, or outer bounds for start and/or end limits of the timing schedule.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $boundsDuration = null;

    /**
     * Either a duration for the length of the timing schedule, a range of possible length, or outer bounds for start and/or end limits of the timing schedule.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $boundsPeriod = null;

    /**
     * Either a duration for the length of the timing schedule, a range of possible length, or outer bounds for start and/or end limits of the timing schedule.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $boundsRange = null;

    /**
     * A total count of the desired number of repetitions across the duration of the entire timing specification. If countMax is present, this element indicates the lower bound of the allowed range of count values.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $count = null;

    /**
     * If present, indicates that the count is a range - so to perform the action between [count] and [countMax] times.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $countMax = null;

    /**
     * If one or more days of week is provided, then the action happens only on the specified day(s).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $dayOfWeek = null;

    /**
     * How long this thing happens for when it happens. If durationMax is present, this element indicates the lower bound of the allowed range of the duration.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $duration = null;

    /**
     * If present, indicates that the duration is a range - so to perform the action between [duration] and [durationMax] time length.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $durationMax = null;

    /**
     * The units of time for the duration, in UCUM units.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime
     */
    public $durationUnit = null;

    /**
     * The number of times to repeat the action within the specified period. If frequencyMax is present, this element indicates the lower bound of the allowed range of the frequency.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $frequency = null;

    /**
     * If present, indicates that the frequency is a range - so to repeat between [frequency] and [frequencyMax] times within the period or period range.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $frequencyMax = null;

    /**
     * The number of minutes from the event. If the event code does not indicate whether the minutes is before or after the event, then the offset is assumed to be after the event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $offset = null;

    /**
     * Indicates the duration of time over which repetitions are to occur; e.g. to express "3 times per day", 3 would be the frequency and "1 day" would be the period. If periodMax is present, this element indicates the lower bound of the allowed range of the period length.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $period = null;

    /**
     * If present, indicates that the period is a range from [period] to [periodMax], allowing expressing concepts such as "do this once every 3-5 days.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $periodMax = null;

    /**
     * The units of time for the period in UCUM units.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime
     */
    public $periodUnit = null;

    /**
     * Specified time of day for action to take place.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $timeOfDay = null;

    /**
     * An approximate time period during the day, potentially linked to an event of daily living that indicates when the action should occur.
     * @var \PHPFHIRGenerated\FHIRElement\FHIREventTiming
     */
    public $when = null;

    /**
     * FHIRTimingRepeat Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['boundsDuration'])) {
                $this->setBoundsDuration($data['boundsDuration']);
            }
            if (isset($data['boundsPeriod'])) {
                $this->setBoundsPeriod($data['boundsPeriod']);
            }
            if (isset($data['boundsRange'])) {
                $this->setBoundsRange($data['boundsRange']);
            }
            if (isset($data['count'])) {
                $this->setCount($data['count']);
            }
            if (isset($data['countMax'])) {
                $this->setCountMax($data['countMax']);
            }
            if (isset($data['dayOfWeek'])) {
                $this->setDayOfWeek($data['dayOfWeek']);
            }
            if (isset($data['duration'])) {
                $this->setDuration($data['duration']);
            }
            if (isset($data['durationMax'])) {
                $this->setDurationMax($data['durationMax']);
            }
            if (isset($data['durationUnit'])) {
                $this->setDurationUnit($data['durationUnit']);
            }
            if (isset($data['frequency'])) {
                $this->setFrequency($data['frequency']);
            }
            if (isset($data['frequencyMax'])) {
                $this->setFrequencyMax($data['frequencyMax']);
            }
            if (isset($data['offset'])) {
                $this->setOffset($data['offset']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['periodMax'])) {
                $this->setPeriodMax($data['periodMax']);
            }
            if (isset($data['periodUnit'])) {
                $this->setPeriodUnit($data['periodUnit']);
            }
            if (isset($data['timeOfDay'])) {
                $this->setTimeOfDay($data['timeOfDay']);
            }
            if (isset($data['when'])) {
                $this->setWhen($data['when']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming\FHIRTimingRepeat::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Either a duration for the length of the timing schedule, a range of possible length, or outer bounds for start and/or end limits of the timing schedule.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     * @return $this
     */
    public function setBoundsDuration(FHIRDuration $boundsDuration = null)
    {
        if (null === $boundsDuration) {
            return $this; 
        }
        $this->boundsDuration = $boundsDuration;
        return $this;
    }

    /**
     * Either a duration for the length of the timing schedule, a range of possible length, or outer bounds for start and/or end limits of the timing schedule.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getBoundsDuration()
    {
        return $this->boundsDuration;
    }


    /**
     * Either a duration for the length of the timing schedule, a range of possible length, or outer bounds for start and/or end limits of the timing schedule.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setBoundsPeriod(FHIRPeriod $boundsPeriod = null)
    {
        if (null === $boundsPeriod) {
            return $this; 
        }
        $this->boundsPeriod = $boundsPeriod;
        return $this;
    }

    /**
     * Either a duration for the length of the timing schedule, a range of possible length, or outer bounds for start and/or end limits of the timing schedule.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getBoundsPeriod()
    {
        return $this->boundsPeriod;
    }


    /**
     * Either a duration for the length of the timing schedule, a range of possible length, or outer bounds for start and/or end limits of the timing schedule.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setBoundsRange(FHIRRange $boundsRange = null)
    {
        if (null === $boundsRange) {
            return $this; 
        }
        $this->boundsRange = $boundsRange;
        return $this;
    }

    /**
     * Either a duration for the length of the timing schedule, a range of possible length, or outer bounds for start and/or end limits of the timing schedule.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getBoundsRange()
    {
        return $this->boundsRange;
    }


    /**
     * A total count of the desired number of repetitions across the duration of the entire timing specification. If countMax is present, this element indicates the lower bound of the allowed range of count values.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setCount($count)
    {
        if (null === $count) {
            return $this; 
        }
        if (is_scalar($count)) {
            $count = new FHIRPositiveInt($count);
        }
        if (!($count instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTimingRepeat::setCount - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($count)
            ));
        }
        $this->count = $count;
        return $this;
    }

    /**
     * A total count of the desired number of repetitions across the duration of the entire timing specification. If countMax is present, this element indicates the lower bound of the allowed range of count values.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getCount()
    {
        return $this->count;
    }


    /**
     * If present, indicates that the count is a range - so to perform the action between [count] and [countMax] times.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setCountMax($countMax)
    {
        if (null === $countMax) {
            return $this; 
        }
        if (is_scalar($countMax)) {
            $countMax = new FHIRPositiveInt($countMax);
        }
        if (!($countMax instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTimingRepeat::setCountMax - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($countMax)
            ));
        }
        $this->countMax = $countMax;
        return $this;
    }

    /**
     * If present, indicates that the count is a range - so to perform the action between [count] and [countMax] times.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getCountMax()
    {
        return $this->countMax;
    }


    /**
     * If one or more days of week is provided, then the action happens only on the specified day(s).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setDayOfWeek($dayOfWeek)
    {
        if (null === $dayOfWeek) {
            return $this; 
        }
        if (is_scalar($dayOfWeek)) {
            $dayOfWeek = new FHIRCode($dayOfWeek);
        }
        if (!($dayOfWeek instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTimingRepeat::setDayOfWeek - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($dayOfWeek)
            ));
        }
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }

    /**
     * If one or more days of week is provided, then the action happens only on the specified day(s).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }


    /**
     * How long this thing happens for when it happens. If durationMax is present, this element indicates the lower bound of the allowed range of the duration.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setDuration($duration)
    {
        if (null === $duration) {
            return $this; 
        }
        if (is_scalar($duration)) {
            $duration = new FHIRDecimal($duration);
        }
        if (!($duration instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTimingRepeat::setDuration - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($duration)
            ));
        }
        $this->duration = $duration;
        return $this;
    }

    /**
     * How long this thing happens for when it happens. If durationMax is present, this element indicates the lower bound of the allowed range of the duration.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getDuration()
    {
        return $this->duration;
    }


    /**
     * If present, indicates that the duration is a range - so to perform the action between [duration] and [durationMax] time length.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setDurationMax($durationMax)
    {
        if (null === $durationMax) {
            return $this; 
        }
        if (is_scalar($durationMax)) {
            $durationMax = new FHIRDecimal($durationMax);
        }
        if (!($durationMax instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTimingRepeat::setDurationMax - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($durationMax)
            ));
        }
        $this->durationMax = $durationMax;
        return $this;
    }

    /**
     * If present, indicates that the duration is a range - so to perform the action between [duration] and [durationMax] time length.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getDurationMax()
    {
        return $this->durationMax;
    }


    /**
     * The units of time for the duration, in UCUM units.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime
     * @return $this
     */
    public function setDurationUnit($durationUnit)
    {
        if (null === $durationUnit) {
            return $this; 
        }
        if (is_scalar($durationUnit)) {
            $durationUnit = new FHIRUnitsOfTime($durationUnit);
        }
        if (!($durationUnit instanceof FHIRUnitsOfTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTimingRepeat::setDurationUnit - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime or appropriate scalar value, %s seen.',
                gettype($durationUnit)
            ));
        }
        $this->durationUnit = $durationUnit;
        return $this;
    }

    /**
     * The units of time for the duration, in UCUM units.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime
     */
    public function getDurationUnit()
    {
        return $this->durationUnit;
    }


    /**
     * The number of times to repeat the action within the specified period. If frequencyMax is present, this element indicates the lower bound of the allowed range of the frequency.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setFrequency($frequency)
    {
        if (null === $frequency) {
            return $this; 
        }
        if (is_scalar($frequency)) {
            $frequency = new FHIRPositiveInt($frequency);
        }
        if (!($frequency instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTimingRepeat::setFrequency - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($frequency)
            ));
        }
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * The number of times to repeat the action within the specified period. If frequencyMax is present, this element indicates the lower bound of the allowed range of the frequency.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getFrequency()
    {
        return $this->frequency;
    }


    /**
     * If present, indicates that the frequency is a range - so to repeat between [frequency] and [frequencyMax] times within the period or period range.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setFrequencyMax($frequencyMax)
    {
        if (null === $frequencyMax) {
            return $this; 
        }
        if (is_scalar($frequencyMax)) {
            $frequencyMax = new FHIRPositiveInt($frequencyMax);
        }
        if (!($frequencyMax instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTimingRepeat::setFrequencyMax - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($frequencyMax)
            ));
        }
        $this->frequencyMax = $frequencyMax;
        return $this;
    }

    /**
     * If present, indicates that the frequency is a range - so to repeat between [frequency] and [frequencyMax] times within the period or period range.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getFrequencyMax()
    {
        return $this->frequencyMax;
    }


    /**
     * The number of minutes from the event. If the event code does not indicate whether the minutes is before or after the event, then the offset is assumed to be after the event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     * @return $this
     */
    public function setOffset($offset)
    {
        if (null === $offset) {
            return $this; 
        }
        if (is_scalar($offset)) {
            $offset = new FHIRUnsignedInt($offset);
        }
        if (!($offset instanceof FHIRUnsignedInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTimingRepeat::setOffset - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or appropriate scalar value, %s seen.',
                gettype($offset)
            ));
        }
        $this->offset = $offset;
        return $this;
    }

    /**
     * The number of minutes from the event. If the event code does not indicate whether the minutes is before or after the event, then the offset is assumed to be after the event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getOffset()
    {
        return $this->offset;
    }


    /**
     * Indicates the duration of time over which repetitions are to occur; e.g. to express "3 times per day", 3 would be the frequency and "1 day" would be the period. If periodMax is present, this element indicates the lower bound of the allowed range of the period length.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setPeriod($period)
    {
        if (null === $period) {
            return $this; 
        }
        if (is_scalar($period)) {
            $period = new FHIRDecimal($period);
        }
        if (!($period instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTimingRepeat::setPeriod - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($period)
            ));
        }
        $this->period = $period;
        return $this;
    }

    /**
     * Indicates the duration of time over which repetitions are to occur; e.g. to express "3 times per day", 3 would be the frequency and "1 day" would be the period. If periodMax is present, this element indicates the lower bound of the allowed range of the period length.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getPeriod()
    {
        return $this->period;
    }


    /**
     * If present, indicates that the period is a range from [period] to [periodMax], allowing expressing concepts such as "do this once every 3-5 days.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setPeriodMax($periodMax)
    {
        if (null === $periodMax) {
            return $this; 
        }
        if (is_scalar($periodMax)) {
            $periodMax = new FHIRDecimal($periodMax);
        }
        if (!($periodMax instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTimingRepeat::setPeriodMax - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($periodMax)
            ));
        }
        $this->periodMax = $periodMax;
        return $this;
    }

    /**
     * If present, indicates that the period is a range from [period] to [periodMax], allowing expressing concepts such as "do this once every 3-5 days.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getPeriodMax()
    {
        return $this->periodMax;
    }


    /**
     * The units of time for the period in UCUM units.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime
     * @return $this
     */
    public function setPeriodUnit($periodUnit)
    {
        if (null === $periodUnit) {
            return $this; 
        }
        if (is_scalar($periodUnit)) {
            $periodUnit = new FHIRUnitsOfTime($periodUnit);
        }
        if (!($periodUnit instanceof FHIRUnitsOfTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTimingRepeat::setPeriodUnit - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime or appropriate scalar value, %s seen.',
                gettype($periodUnit)
            ));
        }
        $this->periodUnit = $periodUnit;
        return $this;
    }

    /**
     * The units of time for the period in UCUM units.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime
     */
    public function getPeriodUnit()
    {
        return $this->periodUnit;
    }


    /**
     * Specified time of day for action to take place.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     * @return $this
     */
    public function setTimeOfDay($timeOfDay)
    {
        if (null === $timeOfDay) {
            return $this; 
        }
        if (is_scalar($timeOfDay)) {
            $timeOfDay = new FHIRTime($timeOfDay);
        }
        if (!($timeOfDay instanceof FHIRTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTimingRepeat::setTimeOfDay - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRTime or appropriate scalar value, %s seen.',
                gettype($timeOfDay)
            ));
        }
        $this->timeOfDay = $timeOfDay;
        return $this;
    }

    /**
     * Specified time of day for action to take place.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getTimeOfDay()
    {
        return $this->timeOfDay;
    }


    /**
     * An approximate time period during the day, potentially linked to an event of daily living that indicates when the action should occur.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIREventTiming
     * @return $this
     */
    public function setWhen($when)
    {
        if (null === $when) {
            return $this; 
        }
        if (is_scalar($when)) {
            $when = new FHIREventTiming($when);
        }
        if (!($when instanceof FHIREventTiming)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTimingRepeat::setWhen - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIREventTiming or appropriate scalar value, %s seen.',
                gettype($when)
            ));
        }
        $this->when = $when;
        return $this;
    }

    /**
     * An approximate time period during the day, potentially linked to an event of daily living that indicates when the action should occur.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIREventTiming
     */
    public function getWhen()
    {
        return $this->when;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getBoundsDuration())) {
            $a['boundsDuration'] = $v;
        }
        if (null !== ($v = $this->getBoundsPeriod())) {
            $a['boundsPeriod'] = $v;
        }
        if (null !== ($v = $this->getBoundsRange())) {
            $a['boundsRange'] = $v;
        }
        if (null !== ($v = $this->getCount())) {
            $a['count'] = $v;
        }
        if (null !== ($v = $this->getCountMax())) {
            $a['countMax'] = $v;
        }
        if (null !== ($v = $this->getDayOfWeek())) {
            $a['dayOfWeek'] = $v;
        }
        if (null !== ($v = $this->getDuration())) {
            $a['duration'] = $v;
        }
        if (null !== ($v = $this->getDurationMax())) {
            $a['durationMax'] = $v;
        }
        if (null !== ($v = $this->getDurationUnit())) {
            $a['durationUnit'] = $v;
        }
        if (null !== ($v = $this->getFrequency())) {
            $a['frequency'] = $v;
        }
        if (null !== ($v = $this->getFrequencyMax())) {
            $a['frequencyMax'] = $v;
        }
        if (null !== ($v = $this->getOffset())) {
            $a['offset'] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a['period'] = $v;
        }
        if (null !== ($v = $this->getPeriodMax())) {
            $a['periodMax'] = $v;
        }
        if (null !== ($v = $this->getPeriodUnit())) {
            $a['periodUnit'] = $v;
        }
        if (null !== ($v = $this->getTimeOfDay())) {
            $a['timeOfDay'] = $v;
        }
        if (null !== ($v = $this->getWhen())) {
            $a['when'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<TimingRepeat xmlns="http://hl7.org/fhir"></TimingRepeat>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}