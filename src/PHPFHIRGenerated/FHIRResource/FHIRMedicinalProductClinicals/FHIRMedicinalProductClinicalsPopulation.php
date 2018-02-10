<?php namespace PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductClinicals;

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
 * The clinical particulars - indications, contraindications etc of a medicinal product, including for regulatory purposes.
 */
class FHIRMedicinalProductClinicalsPopulation extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $ageRange = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $ageCodeableConcept = null;

    /**
     * The gender of the specific population.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $gender = null;

    /**
     * Race of the specific population.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $race = null;

    /**
     * The existing physiological conditions of the specific population to which this applies.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $physiologicalCondition = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicinalProductClinicals.Population';

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getAgeRange() {
        return $this->ageRange;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $ageRange
     * @return $this
     */
    public function setAgeRange($ageRange) {
        $this->ageRange = $ageRange;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAgeCodeableConcept() {
        return $this->ageCodeableConcept;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $ageCodeableConcept
     * @return $this
     */
    public function setAgeCodeableConcept($ageCodeableConcept) {
        $this->ageCodeableConcept = $ageCodeableConcept;
        return $this;
    }

    /**
     * The gender of the specific population.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getGender() {
        return $this->gender;
    }

    /**
     * The gender of the specific population.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $gender
     * @return $this
     */
    public function setGender($gender) {
        $this->gender = $gender;
        return $this;
    }

    /**
     * Race of the specific population.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRace() {
        return $this->race;
    }

    /**
     * Race of the specific population.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $race
     * @return $this
     */
    public function setRace($race) {
        $this->race = $race;
        return $this;
    }

    /**
     * The existing physiological conditions of the specific population to which this applies.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPhysiologicalCondition() {
        return $this->physiologicalCondition;
    }

    /**
     * The existing physiological conditions of the specific population to which this applies.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $physiologicalCondition
     * @return $this
     */
    public function setPhysiologicalCondition($physiologicalCondition) {
        $this->physiologicalCondition = $physiologicalCondition;
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
            if (isset($data['ageRange'])) {
                $this->setAgeRange($data['ageRange']);
            }
            if (isset($data['ageCodeableConcept'])) {
                $this->setAgeCodeableConcept($data['ageCodeableConcept']);
            }
            if (isset($data['gender'])) {
                $this->setGender($data['gender']);
            }
            if (isset($data['race'])) {
                $this->setRace($data['race']);
            }
            if (isset($data['physiologicalCondition'])) {
                $this->setPhysiologicalCondition($data['physiologicalCondition']);
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
        if (isset($this->ageRange)) $json['ageRange'] = $this->ageRange;
        if (isset($this->ageCodeableConcept)) $json['ageCodeableConcept'] = $this->ageCodeableConcept;
        if (isset($this->gender)) $json['gender'] = $this->gender;
        if (isset($this->race)) $json['race'] = $this->race;
        if (isset($this->physiologicalCondition)) $json['physiologicalCondition'] = $this->physiologicalCondition;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicinalProductClinicalsPopulation xmlns="http://hl7.org/fhir"></MedicinalProductClinicalsPopulation>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->ageRange)) $this->ageRange->xmlSerialize(true, $sxe->addChild('ageRange'));
        if (isset($this->ageCodeableConcept)) $this->ageCodeableConcept->xmlSerialize(true, $sxe->addChild('ageCodeableConcept'));
        if (isset($this->gender)) $this->gender->xmlSerialize(true, $sxe->addChild('gender'));
        if (isset($this->race)) $this->race->xmlSerialize(true, $sxe->addChild('race'));
        if (isset($this->physiologicalCondition)) $this->physiologicalCondition->xmlSerialize(true, $sxe->addChild('physiologicalCondition'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}