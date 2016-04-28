<?php namespace PHPFHIRGenerated\FHIRResource\FHIRSchedule;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 28th, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use PHPFHIRGenerated\FHIRElement;
use PHPFHIRGenerated\JsonSerializable;

/**
 * Specifies an event that may occur multiple times. Schedules are used for to reord when things are expected or requested to occur.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRScheduleRepeat extends FHIRElement implements JsonSerializable
{
    /**
     * Indicates how often the event should occur.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $frequency = null;

    /**
     * Identifies the occurrence of daily life that determines timing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIREventTiming
     */
    public $when = null;

    /**
     * How long each repetition should last.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $duration = null;

    /**
     * The units of time for the duration.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime
     */
    public $units = null;

    /**
     * A total count of the desired number of repetitions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $count = null;

    /**
     * When to stop repeating the schedule.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $end = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Schedule.Repeat';

    /**
     * Indicates how often the event should occur.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Indicates how often the event should occur.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $frequency
     * @return $this
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * Identifies the occurrence of daily life that determines timing.
     * @return \PHPFHIRGenerated\FHIRElement\FHIREventTiming
     */
    public function getWhen()
    {
        return $this->when;
    }

    /**
     * Identifies the occurrence of daily life that determines timing.
     * @param \PHPFHIRGenerated\FHIRElement\FHIREventTiming $when
     * @return $this
     */
    public function setWhen($when)
    {
        $this->when = $when;
        return $this;
    }

    /**
     * How long each repetition should last.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * How long each repetition should last.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $duration
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * The units of time for the duration.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * The units of time for the duration.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime $units
     * @return $this
     */
    public function setUnits($units)
    {
        $this->units = $units;
        return $this;
    }

    /**
     * A total count of the desired number of repetitions.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * A total count of the desired number of repetitions.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $count
     * @return $this
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * When to stop repeating the schedule.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * When to stop repeating the schedule.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $end
     * @return $this
     */
    public function setEnd($end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->frequency) $json['frequency'] = $this->frequency->jsonSerialize();
        if (null !== $this->when) $json['when'] = $this->when->jsonSerialize();
        if (null !== $this->duration) $json['duration'] = $this->duration->jsonSerialize();
        if (null !== $this->units) $json['units'] = $this->units->jsonSerialize();
        if (null !== $this->count) $json['count'] = $this->count->jsonSerialize();
        if (null !== $this->end) $json['end'] = $this->end->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ScheduleRepeat xmlns="http://hl7.org/fhir"></ScheduleRepeat>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->frequency) $this->frequency->xmlSerialize(true, $sxe->addChild('frequency'));
        if (null !== $this->when) $this->when->xmlSerialize(true, $sxe->addChild('when'));
        if (null !== $this->duration) $this->duration->xmlSerialize(true, $sxe->addChild('duration'));
        if (null !== $this->units) $this->units->xmlSerialize(true, $sxe->addChild('units'));
        if (null !== $this->count) $this->count->xmlSerialize(true, $sxe->addChild('count'));
        if (null !== $this->end) $this->end->xmlSerialize(true, $sxe->addChild('end'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}