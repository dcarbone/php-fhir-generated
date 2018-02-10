<?php namespace PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductIngredient;

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
 * An ingredient of a manufactured item or pharmaceutical product.
 */
class FHIRMedicinalProductIngredientStrength extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The quantity of substance in the unit of presentation, or in the volume (or mass) of the single pharmaceutical product or manufactured item.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $presentation = null;

    /**
     * The strength per unitary volume (or mass).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $concentration = null;

    /**
     * For when strength is measured at a particular point or distance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $measurementPoint = null;

    /**
     * The country or countries for which the strength range applies.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $country = [];

    /**
     * Strength expressed in terms of a reference substance.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientReferenceStrength[]
     */
    public $referenceStrength = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicinalProductIngredient.Strength';

    /**
     * The quantity of substance in the unit of presentation, or in the volume (or mass) of the single pharmaceutical product or manufactured item.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getPresentation() {
        return $this->presentation;
    }

    /**
     * The quantity of substance in the unit of presentation, or in the volume (or mass) of the single pharmaceutical product or manufactured item.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $presentation
     * @return $this
     */
    public function setPresentation($presentation) {
        $this->presentation = $presentation;
        return $this;
    }

    /**
     * The strength per unitary volume (or mass).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getConcentration() {
        return $this->concentration;
    }

    /**
     * The strength per unitary volume (or mass).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $concentration
     * @return $this
     */
    public function setConcentration($concentration) {
        $this->concentration = $concentration;
        return $this;
    }

    /**
     * For when strength is measured at a particular point or distance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getMeasurementPoint() {
        return $this->measurementPoint;
    }

    /**
     * For when strength is measured at a particular point or distance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $measurementPoint
     * @return $this
     */
    public function setMeasurementPoint($measurementPoint) {
        $this->measurementPoint = $measurementPoint;
        return $this;
    }

    /**
     * The country or countries for which the strength range applies.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCountry() {
        return $this->country;
    }

    /**
     * The country or countries for which the strength range applies.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $country
     * @return $this
     */
    public function addCountry($country) {
        $this->country[] = $country;
        return $this;
    }

    /**
     * Strength expressed in terms of a reference substance.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientReferenceStrength[]
     */
    public function getReferenceStrength() {
        return $this->referenceStrength;
    }

    /**
     * Strength expressed in terms of a reference substance.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientReferenceStrength $referenceStrength
     * @return $this
     */
    public function addReferenceStrength($referenceStrength) {
        $this->referenceStrength[] = $referenceStrength;
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
            if (isset($data['presentation'])) {
                $this->setPresentation($data['presentation']);
            }
            if (isset($data['concentration'])) {
                $this->setConcentration($data['concentration']);
            }
            if (isset($data['measurementPoint'])) {
                $this->setMeasurementPoint($data['measurementPoint']);
            }
            if (isset($data['country'])) {
                if (is_array($data['country'])) {
                    foreach($data['country'] as $d) {
                        $this->addCountry($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"country" must be array of objects or null, '.gettype($data['country']).' seen.');
                }
            }
            if (isset($data['referenceStrength'])) {
                if (is_array($data['referenceStrength'])) {
                    foreach($data['referenceStrength'] as $d) {
                        $this->addReferenceStrength($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"referenceStrength" must be array of objects or null, '.gettype($data['referenceStrength']).' seen.');
                }
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
        if (isset($this->presentation)) $json['presentation'] = $this->presentation;
        if (isset($this->concentration)) $json['concentration'] = $this->concentration;
        if (isset($this->measurementPoint)) $json['measurementPoint'] = $this->measurementPoint;
        if (0 < count($this->country)) {
            $json['country'] = [];
            foreach($this->country as $country) {
                if (null !== $country) $json['country'][] = $country;
            }
        }
        if (0 < count($this->referenceStrength)) {
            $json['referenceStrength'] = [];
            foreach($this->referenceStrength as $referenceStrength) {
                if (null !== $referenceStrength) $json['referenceStrength'][] = $referenceStrength;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicinalProductIngredientStrength xmlns="http://hl7.org/fhir"></MedicinalProductIngredientStrength>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->presentation)) $this->presentation->xmlSerialize(true, $sxe->addChild('presentation'));
        if (isset($this->concentration)) $this->concentration->xmlSerialize(true, $sxe->addChild('concentration'));
        if (isset($this->measurementPoint)) $this->measurementPoint->xmlSerialize(true, $sxe->addChild('measurementPoint'));
        if (0 < count($this->country)) {
            foreach($this->country as $country) {
                $country->xmlSerialize(true, $sxe->addChild('country'));
            }
        }
        if (0 < count($this->referenceStrength)) {
            foreach($this->referenceStrength as $referenceStrength) {
                $referenceStrength->xmlSerialize(true, $sxe->addChild('referenceStrength'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}