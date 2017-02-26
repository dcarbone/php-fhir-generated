<?php namespace PHPFHIRGenerated\FHIRResource\FHIRObservation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 26th, 2017
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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * Measurements and simple assertions made about a patient, device or other subject.
 */
class FHIRObservationReferenceRange extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The value of the low bound of the reference range. If this is omitted, the low bound of the reference range is assumed to be meaningless. E.g. <2.3.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $low = null;

    /**
     * The value of the high bound of the reference range. If this is omitted, the high bound of the reference range is assumed to be meaningless. E.g. >5.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $high = null;

    /**
     * Code for the meaning of the reference range.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $meaning = null;

    /**
     * The age at which this reference range is applicable. This is a neonatal age (e.g. number of weeks at term) if the meaning says so.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $age = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Observation.ReferenceRange';

    /**
     * The value of the low bound of the reference range. If this is omitted, the low bound of the reference range is assumed to be meaningless. E.g. <2.3.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getLow()
    {
        return $this->low;
    }

    /**
     * The value of the low bound of the reference range. If this is omitted, the low bound of the reference range is assumed to be meaningless. E.g. <2.3.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $low
     * @return $this
     */
    public function setLow($low)
    {
        $this->low = $low;
        return $this;
    }

    /**
     * The value of the high bound of the reference range. If this is omitted, the high bound of the reference range is assumed to be meaningless. E.g. >5.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getHigh()
    {
        return $this->high;
    }

    /**
     * The value of the high bound of the reference range. If this is omitted, the high bound of the reference range is assumed to be meaningless. E.g. >5.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $high
     * @return $this
     */
    public function setHigh($high)
    {
        $this->high = $high;
        return $this;
    }

    /**
     * Code for the meaning of the reference range.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMeaning()
    {
        return $this->meaning;
    }

    /**
     * Code for the meaning of the reference range.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $meaning
     * @return $this
     */
    public function setMeaning($meaning)
    {
        $this->meaning = $meaning;
        return $this;
    }

    /**
     * The age at which this reference range is applicable. This is a neonatal age (e.g. number of weeks at term) if the meaning says so.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * The age at which this reference range is applicable. This is a neonatal age (e.g. number of weeks at term) if the meaning says so.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $age
     * @return $this
     */
    public function setAge($age)
    {
        $this->age = $age;
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
        if (null !== $this->low) $json['low'] = json_encode($this->low);
        if (null !== $this->high) $json['high'] = json_encode($this->high);
        if (null !== $this->meaning) $json['meaning'] = json_encode($this->meaning);
        if (null !== $this->age) $json['age'] = json_encode($this->age);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ObservationReferenceRange xmlns="http://hl7.org/fhir"></ObservationReferenceRange>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->low) $this->low->xmlSerialize(true, $sxe->addChild('low'));
        if (null !== $this->high) $this->high->xmlSerialize(true, $sxe->addChild('high'));
        if (null !== $this->meaning) $this->meaning->xmlSerialize(true, $sxe->addChild('meaning'));
        if (null !== $this->age) $this->age->xmlSerialize(true, $sxe->addChild('age'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}