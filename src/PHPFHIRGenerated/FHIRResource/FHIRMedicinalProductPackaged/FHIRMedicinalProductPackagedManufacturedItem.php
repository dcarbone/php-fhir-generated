<?php namespace PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductPackaged;

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
 * A medicinal product in a container or package.
 */
class FHIRMedicinalProductPackagedManufacturedItem extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Dose form as manufactured and before any transformation into the pharmaceutical product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $manufacturedDoseForm = null;

    /**
     * The “real world” units in which the quantity of the manufactured item is described.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $unitOfPresentation = null;

    /**
     * The quantity or "count number" of the manufactured item.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

    /**
     * Manufacturer of the item (Note that this should be named "manufacturer" but it currently causes technical issues).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $xManufacturer = [];

    /**
     * Ingredient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $ingredient = [];

    /**
     * Dimensions, color etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRProdCharacteristic
     */
    public $physicalCharacteristics = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicinalProductPackaged.ManufacturedItem';

    /**
     * Dose form as manufactured and before any transformation into the pharmaceutical product.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getManufacturedDoseForm() {
        return $this->manufacturedDoseForm;
    }

    /**
     * Dose form as manufactured and before any transformation into the pharmaceutical product.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $manufacturedDoseForm
     * @return $this
     */
    public function setManufacturedDoseForm($manufacturedDoseForm) {
        $this->manufacturedDoseForm = $manufacturedDoseForm;
        return $this;
    }

    /**
     * The “real world” units in which the quantity of the manufactured item is described.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getUnitOfPresentation() {
        return $this->unitOfPresentation;
    }

    /**
     * The “real world” units in which the quantity of the manufactured item is described.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $unitOfPresentation
     * @return $this
     */
    public function setUnitOfPresentation($unitOfPresentation) {
        $this->unitOfPresentation = $unitOfPresentation;
        return $this;
    }

    /**
     * The quantity or "count number" of the manufactured item.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getQuantity() {
        return $this->quantity;
    }

    /**
     * The quantity or "count number" of the manufactured item.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $quantity
     * @return $this
     */
    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Manufacturer of the item (Note that this should be named "manufacturer" but it currently causes technical issues).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getXManufacturer() {
        return $this->xManufacturer;
    }

    /**
     * Manufacturer of the item (Note that this should be named "manufacturer" but it currently causes technical issues).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $xManufacturer
     * @return $this
     */
    public function addXManufacturer($xManufacturer) {
        $this->xManufacturer[] = $xManufacturer;
        return $this;
    }

    /**
     * Ingredient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getIngredient() {
        return $this->ingredient;
    }

    /**
     * Ingredient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $ingredient
     * @return $this
     */
    public function addIngredient($ingredient) {
        $this->ingredient[] = $ingredient;
        return $this;
    }

    /**
     * Dimensions, color etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRProdCharacteristic
     */
    public function getPhysicalCharacteristics() {
        return $this->physicalCharacteristics;
    }

    /**
     * Dimensions, color etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRProdCharacteristic $physicalCharacteristics
     * @return $this
     */
    public function setPhysicalCharacteristics($physicalCharacteristics) {
        $this->physicalCharacteristics = $physicalCharacteristics;
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
            if (isset($data['manufacturedDoseForm'])) {
                $this->setManufacturedDoseForm($data['manufacturedDoseForm']);
            }
            if (isset($data['unitOfPresentation'])) {
                $this->setUnitOfPresentation($data['unitOfPresentation']);
            }
            if (isset($data['quantity'])) {
                $this->setQuantity($data['quantity']);
            }
            if (isset($data['xManufacturer'])) {
                if (is_array($data['xManufacturer'])) {
                    foreach($data['xManufacturer'] as $d) {
                        $this->addXManufacturer($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"xManufacturer" must be array of objects or null, '.gettype($data['xManufacturer']).' seen.');
                }
            }
            if (isset($data['ingredient'])) {
                if (is_array($data['ingredient'])) {
                    foreach($data['ingredient'] as $d) {
                        $this->addIngredient($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"ingredient" must be array of objects or null, '.gettype($data['ingredient']).' seen.');
                }
            }
            if (isset($data['physicalCharacteristics'])) {
                $this->setPhysicalCharacteristics($data['physicalCharacteristics']);
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
        if (isset($this->manufacturedDoseForm)) $json['manufacturedDoseForm'] = $this->manufacturedDoseForm;
        if (isset($this->unitOfPresentation)) $json['unitOfPresentation'] = $this->unitOfPresentation;
        if (isset($this->quantity)) $json['quantity'] = $this->quantity;
        if (0 < count($this->xManufacturer)) {
            $json['xManufacturer'] = [];
            foreach($this->xManufacturer as $xManufacturer) {
                if (null !== $xManufacturer) $json['xManufacturer'][] = $xManufacturer;
            }
        }
        if (0 < count($this->ingredient)) {
            $json['ingredient'] = [];
            foreach($this->ingredient as $ingredient) {
                if (null !== $ingredient) $json['ingredient'][] = $ingredient;
            }
        }
        if (isset($this->physicalCharacteristics)) $json['physicalCharacteristics'] = $this->physicalCharacteristics;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicinalProductPackagedManufacturedItem xmlns="http://hl7.org/fhir"></MedicinalProductPackagedManufacturedItem>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->manufacturedDoseForm)) $this->manufacturedDoseForm->xmlSerialize(true, $sxe->addChild('manufacturedDoseForm'));
        if (isset($this->unitOfPresentation)) $this->unitOfPresentation->xmlSerialize(true, $sxe->addChild('unitOfPresentation'));
        if (isset($this->quantity)) $this->quantity->xmlSerialize(true, $sxe->addChild('quantity'));
        if (0 < count($this->xManufacturer)) {
            foreach($this->xManufacturer as $xManufacturer) {
                $xManufacturer->xmlSerialize(true, $sxe->addChild('xManufacturer'));
            }
        }
        if (0 < count($this->ingredient)) {
            foreach($this->ingredient as $ingredient) {
                $ingredient->xmlSerialize(true, $sxe->addChild('ingredient'));
            }
        }
        if (isset($this->physicalCharacteristics)) $this->physicalCharacteristics->xmlSerialize(true, $sxe->addChild('physicalCharacteristics'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}