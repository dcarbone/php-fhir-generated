<?php namespace PHPFHIRGenerated\FHIRResource\FHIRPatient;

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
 * Demographics and other administrative information about a person or animal receiving care or other health-related services.
 */
class FHIRPatientAnimal extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Identifies the high level categorization of the kind of animal.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $species = null;

    /**
     * Identifies the detailed categorization of the kind of animal.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $breed = null;

    /**
     * Indicates the current state of the animal's reproductive organs.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $genderStatus = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Patient.Animal';

    /**
     * Identifies the high level categorization of the kind of animal.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * Identifies the high level categorization of the kind of animal.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $species
     * @return $this
     */
    public function setSpecies($species)
    {
        $this->species = $species;
        return $this;
    }

    /**
     * Identifies the detailed categorization of the kind of animal.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getBreed()
    {
        return $this->breed;
    }

    /**
     * Identifies the detailed categorization of the kind of animal.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $breed
     * @return $this
     */
    public function setBreed($breed)
    {
        $this->breed = $breed;
        return $this;
    }

    /**
     * Indicates the current state of the animal's reproductive organs.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getGenderStatus()
    {
        return $this->genderStatus;
    }

    /**
     * Indicates the current state of the animal's reproductive organs.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $genderStatus
     * @return $this
     */
    public function setGenderStatus($genderStatus)
    {
        $this->genderStatus = $genderStatus;
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
        if (null !== $this->species) $json['species'] = json_encode($this->species);
        if (null !== $this->breed) $json['breed'] = json_encode($this->breed);
        if (null !== $this->genderStatus) $json['genderStatus'] = json_encode($this->genderStatus);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<PatientAnimal xmlns="http://hl7.org/fhir"></PatientAnimal>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->species) $this->species->xmlSerialize(true, $sxe->addChild('species'));
        if (null !== $this->breed) $this->breed->xmlSerialize(true, $sxe->addChild('breed'));
        if (null !== $this->genderStatus) $this->genderStatus->xmlSerialize(true, $sxe->addChild('genderStatus'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}