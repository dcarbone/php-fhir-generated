<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * The manufactured item as contained in the packaged medicinal product.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRMedicinalProductManufactured
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRMedicinalProductManufactured extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'MedicinalProductManufactured';

    /**
     * Ingredient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $ingredient = null;

    /**
     * Dose form as manufactured and before any transformation into the pharmaceutical product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $manufacturedDoseForm = null;

    /**
     * Manufacturer of the item (Note that this should be named "manufacturer" but it currently causes technical issues).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $manufacturer = null;

    /**
     * Other codeable characteristics.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $otherCharacteristics = null;

    /**
     * Dimensions, color etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic
     */
    public $physicalCharacteristics = null;

    /**
     * The quantity or "count number" of the manufactured item.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

    /**
     * The “real world” units in which the quantity of the manufactured item is described.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $unitOfPresentation = null;

    /**
     * FHIRMedicinalProductManufactured Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['ingredient'])) {
                $this->setIngredient($data['ingredient']);
            }
            if (isset($data['manufacturedDoseForm'])) {
                $this->setManufacturedDoseForm($data['manufacturedDoseForm']);
            }
            if (isset($data['manufacturer'])) {
                $this->setManufacturer($data['manufacturer']);
            }
            if (isset($data['otherCharacteristics'])) {
                $this->setOtherCharacteristics($data['otherCharacteristics']);
            }
            if (isset($data['physicalCharacteristics'])) {
                $this->setPhysicalCharacteristics($data['physicalCharacteristics']);
            }
            if (isset($data['quantity'])) {
                $this->setQuantity($data['quantity']);
            }
            if (isset($data['unitOfPresentation'])) {
                $this->setUnitOfPresentation($data['unitOfPresentation']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductManufactured::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Ingredient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setIngredient(FHIRReference $ingredient = null)
    {
        if (null === $ingredient) {
            return $this; 
        }
        $this->ingredient = $ingredient;
        return $this;
    }

    /**
     * Ingredient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }


    /**
     * Dose form as manufactured and before any transformation into the pharmaceutical product.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setManufacturedDoseForm(FHIRCodeableConcept $manufacturedDoseForm = null)
    {
        if (null === $manufacturedDoseForm) {
            return $this; 
        }
        $this->manufacturedDoseForm = $manufacturedDoseForm;
        return $this;
    }

    /**
     * Dose form as manufactured and before any transformation into the pharmaceutical product.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getManufacturedDoseForm()
    {
        return $this->manufacturedDoseForm;
    }


    /**
     * Manufacturer of the item (Note that this should be named "manufacturer" but it currently causes technical issues).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setManufacturer(FHIRReference $manufacturer = null)
    {
        if (null === $manufacturer) {
            return $this; 
        }
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Manufacturer of the item (Note that this should be named "manufacturer" but it currently causes technical issues).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }


    /**
     * Other codeable characteristics.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setOtherCharacteristics(FHIRCodeableConcept $otherCharacteristics = null)
    {
        if (null === $otherCharacteristics) {
            return $this; 
        }
        $this->otherCharacteristics = $otherCharacteristics;
        return $this;
    }

    /**
     * Other codeable characteristics.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getOtherCharacteristics()
    {
        return $this->otherCharacteristics;
    }


    /**
     * Dimensions, color etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic
     * @return $this
     */
    public function setPhysicalCharacteristics(FHIRProdCharacteristic $physicalCharacteristics = null)
    {
        if (null === $physicalCharacteristics) {
            return $this; 
        }
        $this->physicalCharacteristics = $physicalCharacteristics;
        return $this;
    }

    /**
     * Dimensions, color etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic
     */
    public function getPhysicalCharacteristics()
    {
        return $this->physicalCharacteristics;
    }


    /**
     * The quantity or "count number" of the manufactured item.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setQuantity(FHIRQuantity $quantity = null)
    {
        if (null === $quantity) {
            return $this; 
        }
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * The quantity or "count number" of the manufactured item.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }


    /**
     * The “real world” units in which the quantity of the manufactured item is described.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setUnitOfPresentation(FHIRCodeableConcept $unitOfPresentation = null)
    {
        if (null === $unitOfPresentation) {
            return $this; 
        }
        $this->unitOfPresentation = $unitOfPresentation;
        return $this;
    }

    /**
     * The “real world” units in which the quantity of the manufactured item is described.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getUnitOfPresentation()
    {
        return $this->unitOfPresentation;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getIngredient())) {
            $a['ingredient'] = $v;
        }
        if (null !== ($v = $this->getManufacturedDoseForm())) {
            $a['manufacturedDoseForm'] = $v;
        }
        if (null !== ($v = $this->getManufacturer())) {
            $a['manufacturer'] = $v;
        }
        if (null !== ($v = $this->getOtherCharacteristics())) {
            $a['otherCharacteristics'] = $v;
        }
        if (null !== ($v = $this->getPhysicalCharacteristics())) {
            $a['physicalCharacteristics'] = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $a['quantity'] = $v;
        }
        if (null !== ($v = $this->getUnitOfPresentation())) {
            $a['unitOfPresentation'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<MedicinalProductManufactured xmlns="http://hl7.org/fhir"></MedicinalProductManufactured>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}