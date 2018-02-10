<?php namespace PHPFHIRGenerated\FHIRResource\FHIRTiming;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement;

/**
 * Specifies an event that may occur multiple times. Timing schedules are used to record when things are planned, expected or requested to occur. The most common usage is in dosage instructions for medications. They are also used when planning care of various kinds, and may be used for reporting the schedule to which past regular activities were carried out.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRTimingRepeat extends FHIRElement implements \JsonSerializable
{
    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $boundsDuration = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $boundsRange = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $boundsPeriod = null;

    /**
     * A total count of the desired number of repetitions across the duration of the entire timing specification.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $count = null;

    /**
     * A maximum value for the count of the desired repetitions (e.g. do something 6-8 times).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $countMax = null;

    /**
     * How long this thing happens for when it happens.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $duration = null;

    /**
     * The upper limit of how long this thing happens for when it happens.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $durationMax = null;

    /**
     * The units of time for the duration, in UCUM units.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime
     */
    public $durationUnit = null;

    /**
     * The number of times to repeat the action within the specified period / period range (i.e. both period and periodMax provided).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $frequency = null;

    /**
     * If present, indicates that the frequency is a range - so to repeat between [frequency] and [frequencyMax] times within the period or period range.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $frequencyMax = null;

    /**
     * Indicates the duration of time over which repetitions are to occur; e.g. to express "3 times per day", 3 would be the frequency and "1 day" would be the period.
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
     * If one or more days of week is provided, then the action happens only on the specified day(s).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode[]
     */
    public $dayOfWeek = [];

    /**
     * Specified time of day for action to take place.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime[]
     */
    public $timeOfDay = [];

    /**
     * An approximate time period during the day, potentially linked to an event of daily living that indicates when the action should occur.
     * @var \PHPFHIRGenerated\FHIRElement\FHIREventTiming[]
     */
    public $when = [];

    /**
     * The number of minutes from the event. If the event code does not indicate whether the minutes is before or after the event, then the offset is assumed to be after the event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $offset = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Timing.Repeat';

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getBoundsDuration() {
        return $this->boundsDuration;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration $boundsDuration
     * @return $this
     */
    public function setBoundsDuration($boundsDuration) {
        $this->boundsDuration = $boundsDuration;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getBoundsRange() {
        return $this->boundsRange;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $boundsRange
     * @return $this
     */
    public function setBoundsRange($boundsRange) {
        $this->boundsRange = $boundsRange;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getBoundsPeriod() {
        return $this->boundsPeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $boundsPeriod
     * @return $this
     */
    public function setBoundsPeriod($boundsPeriod) {
        $this->boundsPeriod = $boundsPeriod;
        return $this;
    }

    /**
     * A total count of the desired number of repetitions across the duration of the entire timing specification.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getCount() {
        return $this->count;
    }

    /**
     * A total count of the desired number of repetitions across the duration of the entire timing specification.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $count
     * @return $this
     */
    public function setCount($count) {
        $this->count = $count;
        return $this;
    }

    /**
     * A maximum value for the count of the desired repetitions (e.g. do something 6-8 times).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getCountMax() {
        return $this->countMax;
    }

    /**
     * A maximum value for the count of the desired repetitions (e.g. do something 6-8 times).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $countMax
     * @return $this
     */
    public function setCountMax($countMax) {
        $this->countMax = $countMax;
        return $this;
    }

    /**
     * How long this thing happens for when it happens.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getDuration() {
        return $this->duration;
    }

    /**
     * How long this thing happens for when it happens.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $duration
     * @return $this
     */
    public function setDuration($duration) {
        $this->duration = $duration;
        return $this;
    }

    /**
     * The upper limit of how long this thing happens for when it happens.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getDurationMax() {
        return $this->durationMax;
    }

    /**
     * The upper limit of how long this thing happens for when it happens.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $durationMax
     * @return $this
     */
    public function setDurationMax($durationMax) {
        $this->durationMax = $durationMax;
        return $this;
    }

    /**
     * The units of time for the duration, in UCUM units.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime
     */
    public function getDurationUnit() {
        return $this->durationUnit;
    }

    /**
     * The units of time for the duration, in UCUM units.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime $durationUnit
     * @return $this
     */
    public function setDurationUnit($durationUnit) {
        $this->durationUnit = $durationUnit;
        return $this;
    }

    /**
     * The number of times to repeat the action within the specified period / period range (i.e. both period and periodMax provided).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getFrequency() {
        return $this->frequency;
    }

    /**
     * The number of times to repeat the action within the specified period / period range (i.e. both period and periodMax provided).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $frequency
     * @return $this
     */
    public function setFrequency($frequency) {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * If present, indicates that the frequency is a range - so to repeat between [frequency] and [frequencyMax] times within the period or period range.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getFrequencyMax() {
        return $this->frequencyMax;
    }

    /**
     * If present, indicates that the frequency is a range - so to repeat between [frequency] and [frequencyMax] times within the period or period range.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $frequencyMax
     * @return $this
     */
    public function setFrequencyMax($frequencyMax) {
        $this->frequencyMax = $frequencyMax;
        return $this;
    }

    /**
     * Indicates the duration of time over which repetitions are to occur; e.g. to express "3 times per day", 3 would be the frequency and "1 day" would be the period.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getPeriod() {
        return $this->period;
    }

    /**
     * Indicates the duration of time over which repetitions are to occur; e.g. to express "3 times per day", 3 would be the frequency and "1 day" would be the period.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $period
     * @return $this
     */
    public function setPeriod($period) {
        $this->period = $period;
        return $this;
    }

    /**
     * If present, indicates that the period is a range from [period] to [periodMax], allowing expressing concepts such as "do this once every 3-5 days.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getPeriodMax() {
        return $this->periodMax;
    }

    /**
     * If present, indicates that the period is a range from [period] to [periodMax], allowing expressing concepts such as "do this once every 3-5 days.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $periodMax
     * @return $this
     */
    public function setPeriodMax($periodMax) {
        $this->periodMax = $periodMax;
        return $this;
    }

    /**
     * The units of time for the period in UCUM units.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime
     */
    public function getPeriodUnit() {
        return $this->periodUnit;
    }

    /**
     * The units of time for the period in UCUM units.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime $periodUnit
     * @return $this
     */
    public function setPeriodUnit($periodUnit) {
        $this->periodUnit = $periodUnit;
        return $this;
    }

    /**
     * If one or more days of week is provided, then the action happens only on the specified day(s).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode[]
     */
    public function getDayOfWeek() {
        return $this->dayOfWeek;
    }

    /**
     * If one or more days of week is provided, then the action happens only on the specified day(s).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $dayOfWeek
     * @return $this
     */
    public function addDayOfWeek($dayOfWeek) {
        $this->dayOfWeek[] = $dayOfWeek;
        return $this;
    }

    /**
     * Specified time of day for action to take place.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTime[]
     */
    public function getTimeOfDay() {
        return $this->timeOfDay;
    }

    /**
     * Specified time of day for action to take place.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTime $timeOfDay
     * @return $this
     */
    public function addTimeOfDay($timeOfDay) {
        $this->timeOfDay[] = $timeOfDay;
        return $this;
    }

    /**
     * An approximate time period during the day, potentially linked to an event of daily living that indicates when the action should occur.
     * @return \PHPFHIRGenerated\FHIRElement\FHIREventTiming[]
     */
    public function getWhen() {
        return $this->when;
    }

    /**
     * An approximate time period during the day, potentially linked to an event of daily living that indicates when the action should occur.
     * @param \PHPFHIRGenerated\FHIRElement\FHIREventTiming $when
     * @return $this
     */
    public function addWhen($when) {
        $this->when[] = $when;
        return $this;
    }

    /**
     * The number of minutes from the event. If the event code does not indicate whether the minutes is before or after the event, then the offset is assumed to be after the event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getOffset() {
        return $this->offset;
    }

    /**
     * The number of minutes from the event. If the event code does not indicate whether the minutes is before or after the event, then the offset is assumed to be after the event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $offset
     * @return $this
     */
    public function setOffset($offset) {
        $this->offset = $offset;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['boundsDuration'])) {
                $this->setBoundsDuration($data['boundsDuration']);
            }
            if (isset($data['boundsRange'])) {
                $this->setBoundsRange($data['boundsRange']);
            }
            if (isset($data['boundsPeriod'])) {
                $this->setBoundsPeriod($data['boundsPeriod']);
            }
            if (isset($data['count'])) {
                $this->setCount($data['count']);
            }
            if (isset($data['countMax'])) {
                $this->setCountMax($data['countMax']);
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
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['periodMax'])) {
                $this->setPeriodMax($data['periodMax']);
            }
            if (isset($data['periodUnit'])) {
                $this->setPeriodUnit($data['periodUnit']);
            }
            if (isset($data['dayOfWeek'])) {
                if (is_array($data['dayOfWeek'])) {
                    foreach($data['dayOfWeek'] as $d) {
                        $this->addDayOfWeek($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"dayOfWeek" must be array of objects or null, '.gettype($data['dayOfWeek']).' seen.');
                }
            }
            if (isset($data['timeOfDay'])) {
                if (is_array($data['timeOfDay'])) {
                    foreach($data['timeOfDay'] as $d) {
                        $this->addTimeOfDay($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"timeOfDay" must be array of objects or null, '.gettype($data['timeOfDay']).' seen.');
                }
            }
            if (isset($data['when'])) {
                if (is_array($data['when'])) {
                    foreach($data['when'] as $d) {
                        $this->addWhen($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"when" must be array of objects or null, '.gettype($data['when']).' seen.');
                }
            }
            if (isset($data['offset'])) {
                $this->setOffset($data['offset']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        if (isset($this->boundsDuration)) $json['boundsDuration'] = $this->boundsDuration;
        if (isset($this->boundsRange)) $json['boundsRange'] = $this->boundsRange;
        if (isset($this->boundsPeriod)) $json['boundsPeriod'] = $this->boundsPeriod;
        if (isset($this->count)) $json['count'] = $this->count;
        if (isset($this->countMax)) $json['countMax'] = $this->countMax;
        if (isset($this->duration)) $json['duration'] = $this->duration;
        if (isset($this->durationMax)) $json['durationMax'] = $this->durationMax;
        if (isset($this->durationUnit)) $json['durationUnit'] = $this->durationUnit;
        if (isset($this->frequency)) $json['frequency'] = $this->frequency;
        if (isset($this->frequencyMax)) $json['frequencyMax'] = $this->frequencyMax;
        if (isset($this->period)) $json['period'] = $this->period;
        if (isset($this->periodMax)) $json['periodMax'] = $this->periodMax;
        if (isset($this->periodUnit)) $json['periodUnit'] = $this->periodUnit;
        if (0 < count($this->dayOfWeek)) {
            $json['dayOfWeek'] = [];
            foreach($this->dayOfWeek as $dayOfWeek) {
                if (null !== $dayOfWeek) $json['dayOfWeek'][] = $dayOfWeek;
            }
        }
        if (0 < count($this->timeOfDay)) {
            $json['timeOfDay'] = [];
            foreach($this->timeOfDay as $timeOfDay) {
                if (null !== $timeOfDay) $json['timeOfDay'][] = $timeOfDay;
            }
        }
        if (0 < count($this->when)) {
            $json['when'] = [];
            foreach($this->when as $when) {
                if (null !== $when) $json['when'][] = $when;
            }
        }
        if (isset($this->offset)) $json['offset'] = $this->offset;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<TimingRepeat xmlns="http://hl7.org/fhir"></TimingRepeat>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->boundsDuration)) $this->boundsDuration->xmlSerialize(true, $sxe->addChild('boundsDuration'));
        if (isset($this->boundsRange)) $this->boundsRange->xmlSerialize(true, $sxe->addChild('boundsRange'));
        if (isset($this->boundsPeriod)) $this->boundsPeriod->xmlSerialize(true, $sxe->addChild('boundsPeriod'));
        if (isset($this->count)) $this->count->xmlSerialize(true, $sxe->addChild('count'));
        if (isset($this->countMax)) $this->countMax->xmlSerialize(true, $sxe->addChild('countMax'));
        if (isset($this->duration)) $this->duration->xmlSerialize(true, $sxe->addChild('duration'));
        if (isset($this->durationMax)) $this->durationMax->xmlSerialize(true, $sxe->addChild('durationMax'));
        if (isset($this->durationUnit)) $this->durationUnit->xmlSerialize(true, $sxe->addChild('durationUnit'));
        if (isset($this->frequency)) $this->frequency->xmlSerialize(true, $sxe->addChild('frequency'));
        if (isset($this->frequencyMax)) $this->frequencyMax->xmlSerialize(true, $sxe->addChild('frequencyMax'));
        if (isset($this->period)) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (isset($this->periodMax)) $this->periodMax->xmlSerialize(true, $sxe->addChild('periodMax'));
        if (isset($this->periodUnit)) $this->periodUnit->xmlSerialize(true, $sxe->addChild('periodUnit'));
        if (0 < count($this->dayOfWeek)) {
            foreach($this->dayOfWeek as $dayOfWeek) {
                $dayOfWeek->xmlSerialize(true, $sxe->addChild('dayOfWeek'));
            }
        }
        if (0 < count($this->timeOfDay)) {
            foreach($this->timeOfDay as $timeOfDay) {
                $timeOfDay->xmlSerialize(true, $sxe->addChild('timeOfDay'));
            }
        }
        if (0 < count($this->when)) {
            foreach($this->when as $when) {
                $when->xmlSerialize(true, $sxe->addChild('when'));
            }
        }
        if (isset($this->offset)) $this->offset->xmlSerialize(true, $sxe->addChild('offset'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}