<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPackaged;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProductShelfLife;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRReference;

/**
 * A medicinal product in a container or package.
 *
 * Class FHIRMedicinalProductPackagedPackageItem
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPackaged
 */
class FHIRMedicinalProductPackagedPackageItem extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'MedicinalProductPackaged.PackageItem';

    /**
     * A possible alternate material for the packaging.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $alternateMaterial = null;

    /**
     * A device accompanying a medicinal product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $device = null;

    /**
     * Including possibly Data Carrier Identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The manufactured item as contained in the packaged medicinal product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $manufacturedItem = null;

    /**
     * Manufacturer of this Package Item.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $manufacturer = null;

    /**
     * Material type of the package item.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $material = null;

    /**
     * Other codeable characteristics.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $otherCharacteristics = null;

    /**
     * Allows containers within containers.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedPackageItem
     */
    public $packageItem = null;

    /**
     * Dimensions, color etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic
     */
    public $physicalCharacteristics = null;

    /**
     * The quantity of this package in the medicinal product, at the current level of packaging. The outermost is always 1.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

    /**
     * Shelf Life and storage information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProductShelfLife
     */
    public $shelfLifeStorage = null;

    /**
     * The physical type of the container of the medicine.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * FHIRMedicinalProductPackagedPackageItem Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['alternateMaterial'])) {
                $this->setAlternateMaterial($data['alternateMaterial']);
            }
            if (isset($data['device'])) {
                $this->setDevice($data['device']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['manufacturedItem'])) {
                $this->setManufacturedItem($data['manufacturedItem']);
            }
            if (isset($data['manufacturer'])) {
                $this->setManufacturer($data['manufacturer']);
            }
            if (isset($data['material'])) {
                $this->setMaterial($data['material']);
            }
            if (isset($data['otherCharacteristics'])) {
                $this->setOtherCharacteristics($data['otherCharacteristics']);
            }
            if (isset($data['packageItem'])) {
                $this->setPackageItem($data['packageItem']);
            }
            if (isset($data['physicalCharacteristics'])) {
                $this->setPhysicalCharacteristics($data['physicalCharacteristics']);
            }
            if (isset($data['quantity'])) {
                $this->setQuantity($data['quantity']);
            }
            if (isset($data['shelfLifeStorage'])) {
                $this->setShelfLifeStorage($data['shelfLifeStorage']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedPackageItem::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * A possible alternate material for the packaging.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setAlternateMaterial(FHIRCodeableConcept $alternateMaterial = null)
    {
        if (null === $alternateMaterial) {
            return $this; 
        }
        $this->alternateMaterial = $alternateMaterial;
        return $this;
    }

    /**
     * A possible alternate material for the packaging.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAlternateMaterial()
    {
        return $this->alternateMaterial;
    }


    /**
     * A device accompanying a medicinal product.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setDevice(FHIRReference $device = null)
    {
        if (null === $device) {
            return $this; 
        }
        $this->device = $device;
        return $this;
    }

    /**
     * A device accompanying a medicinal product.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDevice()
    {
        return $this->device;
    }


    /**
     * Including possibly Data Carrier Identifier.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Including possibly Data Carrier Identifier.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * The manufactured item as contained in the packaged medicinal product.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setManufacturedItem(FHIRReference $manufacturedItem = null)
    {
        if (null === $manufacturedItem) {
            return $this; 
        }
        $this->manufacturedItem = $manufacturedItem;
        return $this;
    }

    /**
     * The manufactured item as contained in the packaged medicinal product.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getManufacturedItem()
    {
        return $this->manufacturedItem;
    }


    /**
     * Manufacturer of this Package Item.
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
     * Manufacturer of this Package Item.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }


    /**
     * Material type of the package item.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setMaterial(FHIRCodeableConcept $material = null)
    {
        if (null === $material) {
            return $this; 
        }
        $this->material = $material;
        return $this;
    }

    /**
     * Material type of the package item.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMaterial()
    {
        return $this->material;
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
     * Allows containers within containers.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedPackageItem
     * @return $this
     */
    public function setPackageItem(FHIRMedicinalProductPackagedPackageItem $packageItem = null)
    {
        if (null === $packageItem) {
            return $this; 
        }
        $this->packageItem = $packageItem;
        return $this;
    }

    /**
     * Allows containers within containers.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedPackageItem
     */
    public function getPackageItem()
    {
        return $this->packageItem;
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
     * The quantity of this package in the medicinal product, at the current level of packaging. The outermost is always 1.
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
     * The quantity of this package in the medicinal product, at the current level of packaging. The outermost is always 1.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }


    /**
     * Shelf Life and storage information.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProductShelfLife
     * @return $this
     */
    public function setShelfLifeStorage(FHIRProductShelfLife $shelfLifeStorage = null)
    {
        if (null === $shelfLifeStorage) {
            return $this; 
        }
        $this->shelfLifeStorage = $shelfLifeStorage;
        return $this;
    }

    /**
     * Shelf Life and storage information.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProductShelfLife
     */
    public function getShelfLifeStorage()
    {
        return $this->shelfLifeStorage;
    }


    /**
     * The physical type of the container of the medicine.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        if (null === $type) {
            return $this; 
        }
        $this->type = $type;
        return $this;
    }

    /**
     * The physical type of the container of the medicine.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
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
        if (null !== ($v = $this->getAlternateMaterial())) {
            $a['alternateMaterial'] = $v;
        }
        if (null !== ($v = $this->getDevice())) {
            $a['device'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getManufacturedItem())) {
            $a['manufacturedItem'] = $v;
        }
        if (null !== ($v = $this->getManufacturer())) {
            $a['manufacturer'] = $v;
        }
        if (null !== ($v = $this->getMaterial())) {
            $a['material'] = $v;
        }
        if (null !== ($v = $this->getOtherCharacteristics())) {
            $a['otherCharacteristics'] = $v;
        }
        if (null !== ($v = $this->getPackageItem())) {
            $a['packageItem'] = $v;
        }
        if (null !== ($v = $this->getPhysicalCharacteristics())) {
            $a['physicalCharacteristics'] = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $a['quantity'] = $v;
        }
        if (null !== ($v = $this->getShelfLifeStorage())) {
            $a['shelfLifeStorage'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
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
            $sxe = new \SimpleXMLElement('<MedicinalProductPackagedPackageItem xmlns="http://hl7.org/fhir"></MedicinalProductPackagedPackageItem>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}