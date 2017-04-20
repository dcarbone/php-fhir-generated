<?php namespace PHPFHIRGenerated\FHIRResource\FHIRPractitionerRole;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 20th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A specific set of Roles/Locations/specialties/services that a practitioner may perform at an organization for a period of time.
 */
class FHIRPractitionerRoleAvailableTime extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Indicates which days of the week are available between the start and end Times.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDaysOfWeek[]
     */
    public $daysOfWeek = array();

    /**
     * Is this always available? (hence times are irrelevant) e.g. 24 hour service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $allDay = null;

    /**
     * The opening time of day. Note: If the AllDay flag is set, then this time is ignored.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $availableStartTime = null;

    /**
     * The closing time of day. Note: If the AllDay flag is set, then this time is ignored.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $availableEndTime = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'PractitionerRole.AvailableTime';

    /**
     * Indicates which days of the week are available between the start and end Times.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDaysOfWeek[]
     */
    public function getDaysOfWeek()
    {
        return $this->daysOfWeek;
    }

    /**
     * Indicates which days of the week are available between the start and end Times.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDaysOfWeek $daysOfWeek
     * @return $this
     */
    public function addDaysOfWeek($daysOfWeek)
    {
        $this->daysOfWeek[] = $daysOfWeek;
        return $this;
    }

    /**
     * Is this always available? (hence times are irrelevant) e.g. 24 hour service.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAllDay()
    {
        return $this->allDay;
    }

    /**
     * Is this always available? (hence times are irrelevant) e.g. 24 hour service.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $allDay
     * @return $this
     */
    public function setAllDay($allDay)
    {
        $this->allDay = $allDay;
        return $this;
    }

    /**
     * The opening time of day. Note: If the AllDay flag is set, then this time is ignored.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getAvailableStartTime()
    {
        return $this->availableStartTime;
    }

    /**
     * The opening time of day. Note: If the AllDay flag is set, then this time is ignored.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTime $availableStartTime
     * @return $this
     */
    public function setAvailableStartTime($availableStartTime)
    {
        $this->availableStartTime = $availableStartTime;
        return $this;
    }

    /**
     * The closing time of day. Note: If the AllDay flag is set, then this time is ignored.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getAvailableEndTime()
    {
        return $this->availableEndTime;
    }

    /**
     * The closing time of day. Note: If the AllDay flag is set, then this time is ignored.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTime $availableEndTime
     * @return $this
     */
    public function setAvailableEndTime($availableEndTime)
    {
        $this->availableEndTime = $availableEndTime;
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
        if (0 < count($this->daysOfWeek)) {
            $json['daysOfWeek'] = [];
            foreach($this->daysOfWeek as $daysOfWeek) {
                $json['daysOfWeek'][] = json_encode($daysOfWeek);
            }
        }
        if (null !== $this->allDay) $json['allDay'] = json_encode($this->allDay);
        if (null !== $this->availableStartTime) $json['availableStartTime'] = json_encode($this->availableStartTime);
        if (null !== $this->availableEndTime) $json['availableEndTime'] = json_encode($this->availableEndTime);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<PractitionerRoleAvailableTime xmlns="http://hl7.org/fhir"></PractitionerRoleAvailableTime>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->daysOfWeek)) {
            foreach($this->daysOfWeek as $daysOfWeek) {
                $daysOfWeek->xmlSerialize(true, $sxe->addChild('daysOfWeek'));
            }
        }
        if (null !== $this->allDay) $this->allDay->xmlSerialize(true, $sxe->addChild('allDay'));
        if (null !== $this->availableStartTime) $this->availableStartTime->xmlSerialize(true, $sxe->addChild('availableStartTime'));
        if (null !== $this->availableEndTime) $this->availableEndTime->xmlSerialize(true, $sxe->addChild('availableEndTime'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}