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
class FHIROccupationalDataUsualWork extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * A code that represents the type of work a person has held for the longest amount of time during his or her life.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $occupation = null;

    /**
     * A code that represents the type of business a person has worked in for the longest total time while in the usual occupation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $industry = null;

    /**
     * The date when a person first started working in their usual occupation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $start = null;

    /**
     * Total of all periods of time a person has spent in the usual occupation, not including intermittent period(s) where the person was not working in that occupation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $duration = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'OccupationalData.UsualWork';

    /**
     * A code that represents the type of work a person has held for the longest amount of time during his or her life.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getOccupation() {
        return $this->occupation;
    }

    /**
     * A code that represents the type of work a person has held for the longest amount of time during his or her life.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $occupation
     * @return $this
     */
    public function setOccupation($occupation) {
        $this->occupation = $occupation;
        return $this;
    }

    /**
     * A code that represents the type of business a person has worked in for the longest total time while in the usual occupation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getIndustry() {
        return $this->industry;
    }

    /**
     * A code that represents the type of business a person has worked in for the longest total time while in the usual occupation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $industry
     * @return $this
     */
    public function setIndustry($industry) {
        $this->industry = $industry;
        return $this;
    }

    /**
     * The date when a person first started working in their usual occupation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getStart() {
        return $this->start;
    }

    /**
     * The date when a person first started working in their usual occupation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $start
     * @return $this
     */
    public function setStart($start) {
        $this->start = $start;
        return $this;
    }

    /**
     * Total of all periods of time a person has spent in the usual occupation, not including intermittent period(s) where the person was not working in that occupation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getDuration() {
        return $this->duration;
    }

    /**
     * Total of all periods of time a person has spent in the usual occupation, not including intermittent period(s) where the person was not working in that occupation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration $duration
     * @return $this
     */
    public function setDuration($duration) {
        $this->duration = $duration;
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
            if (isset($data['occupation'])) {
                $this->setOccupation($data['occupation']);
            }
            if (isset($data['industry'])) {
                $this->setIndustry($data['industry']);
            }
            if (isset($data['start'])) {
                $this->setStart($data['start']);
            }
            if (isset($data['duration'])) {
                $this->setDuration($data['duration']);
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
        if (isset($this->occupation)) $json['occupation'] = $this->occupation;
        if (isset($this->industry)) $json['industry'] = $this->industry;
        if (isset($this->start)) $json['start'] = $this->start;
        if (isset($this->duration)) $json['duration'] = $this->duration;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<OccupationalDataUsualWork xmlns="http://hl7.org/fhir"></OccupationalDataUsualWork>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->occupation)) $this->occupation->xmlSerialize(true, $sxe->addChild('occupation'));
        if (isset($this->industry)) $this->industry->xmlSerialize(true, $sxe->addChild('industry'));
        if (isset($this->start)) $this->start->xmlSerialize(true, $sxe->addChild('start'));
        if (isset($this->duration)) $this->duration->xmlSerialize(true, $sxe->addChild('duration'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}