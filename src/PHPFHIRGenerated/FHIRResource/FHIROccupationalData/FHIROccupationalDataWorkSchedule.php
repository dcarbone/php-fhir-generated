<?php namespace PHPFHIRGenerated\FHIRResource\FHIROccupationalData;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A person's work information, structured to facilitate individual, population, and public health use; not intended to support billing.
 */
class FHIROccupationalDataWorkSchedule extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * A code that represents a person's typical arrangement of working hours for one job.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * The typical number of days worked in a week by a person at one job.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $weeklyWorkDays = null;

    /**
     * The number of hours worked in a day or shift at one job by a person. For those working a split shift (divided into two parts that are separated by an interval longer than a normal rest period), it is the total of both periods of time in a shift.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $dailyWorkHours = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'OccupationalData.WorkSchedule';

    /**
     * A code that represents a person's typical arrangement of working hours for one job.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * A code that represents a person's typical arrangement of working hours for one job.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * The typical number of days worked in a week by a person at one job.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getWeeklyWorkDays() {
        return $this->weeklyWorkDays;
    }

    /**
     * The typical number of days worked in a week by a person at one job.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $weeklyWorkDays
     * @return $this
     */
    public function setWeeklyWorkDays($weeklyWorkDays) {
        $this->weeklyWorkDays = $weeklyWorkDays;
        return $this;
    }

    /**
     * The number of hours worked in a day or shift at one job by a person. For those working a split shift (divided into two parts that are separated by an interval longer than a normal rest period), it is the total of both periods of time in a shift.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getDailyWorkHours() {
        return $this->dailyWorkHours;
    }

    /**
     * The number of hours worked in a day or shift at one job by a person. For those working a split shift (divided into two parts that are separated by an interval longer than a normal rest period), it is the total of both periods of time in a shift.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $dailyWorkHours
     * @return $this
     */
    public function setDailyWorkHours($dailyWorkHours) {
        $this->dailyWorkHours = $dailyWorkHours;
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
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['weeklyWorkDays'])) {
                $this->setWeeklyWorkDays($data['weeklyWorkDays']);
            }
            if (isset($data['dailyWorkHours'])) {
                $this->setDailyWorkHours($data['dailyWorkHours']);
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
        if (isset($this->code)) $json['code'] = $this->code;
        if (isset($this->weeklyWorkDays)) $json['weeklyWorkDays'] = $this->weeklyWorkDays;
        if (isset($this->dailyWorkHours)) $json['dailyWorkHours'] = $this->dailyWorkHours;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<OccupationalDataWorkSchedule xmlns="http://hl7.org/fhir"></OccupationalDataWorkSchedule>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->code)) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (isset($this->weeklyWorkDays)) $this->weeklyWorkDays->xmlSerialize(true, $sxe->addChild('weeklyWorkDays'));
        if (isset($this->dailyWorkHours)) $this->dailyWorkHours->xmlSerialize(true, $sxe->addChild('dailyWorkHours'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}