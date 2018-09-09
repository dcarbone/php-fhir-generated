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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDeviceSpec\FHIRMedicinalProductDeviceSpecMaterial;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProductShelfLife;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A detailed description of a device, typically as part of a regulated medicinal product. It is not intended to replace the Device resource, which covers use of device instances.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRMedicinalProductDeviceSpec
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRMedicinalProductDeviceSpec extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'MedicinalProductDeviceSpec';

    /**
     * Batch number or expiry date of a device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $batchIdentifier = null;

    /**
     * Business identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Device listing number.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $listingNumber = null;

    /**
     * Manufacturer of this Device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $manufacturer = null;

    /**
     * A substance used to create the material(s) of which the device is made.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDeviceSpec\FHIRMedicinalProductDeviceSpecMaterial
     */
    public $material = null;

    /**
     * Device model or reference number.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $modelNumber = null;

    /**
     * A nomenclature term for the device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $nomenclature = null;

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
     * The quantity of the device present in the packaging of a medicinal product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

    /**
     * Shelf Life and storage information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProductShelfLife
     */
    public $shelfLifeStorage = null;

    /**
     * Whether the device must be sterilised before use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $sterilisationRequirement = null;

    /**
     * Whether the device is supplied as sterile.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $sterilityIndicator = null;

    /**
     * Trade name of the device, where applicable.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $tradeName = null;

    /**
     * The type of device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Usage pattern including the number of times that the device may be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $usage = null;

    /**
     * FHIRMedicinalProductDeviceSpec Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['batchIdentifier'])) {
                $this->setBatchIdentifier($data['batchIdentifier']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['listingNumber'])) {
                $this->setListingNumber($data['listingNumber']);
            }
            if (isset($data['manufacturer'])) {
                $this->setManufacturer($data['manufacturer']);
            }
            if (isset($data['material'])) {
                $this->setMaterial($data['material']);
            }
            if (isset($data['modelNumber'])) {
                $this->setModelNumber($data['modelNumber']);
            }
            if (isset($data['nomenclature'])) {
                $this->setNomenclature($data['nomenclature']);
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
            if (isset($data['shelfLifeStorage'])) {
                $this->setShelfLifeStorage($data['shelfLifeStorage']);
            }
            if (isset($data['sterilisationRequirement'])) {
                $this->setSterilisationRequirement($data['sterilisationRequirement']);
            }
            if (isset($data['sterilityIndicator'])) {
                $this->setSterilityIndicator($data['sterilityIndicator']);
            }
            if (isset($data['tradeName'])) {
                $this->setTradeName($data['tradeName']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['usage'])) {
                $this->setUsage($data['usage']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDeviceSpec::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Batch number or expiry date of a device.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setBatchIdentifier(FHIRIdentifier $batchIdentifier = null)
    {
        if (null === $batchIdentifier) {
            return $this; 
        }
        $this->batchIdentifier = $batchIdentifier;
        return $this;
    }

    /**
     * Batch number or expiry date of a device.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getBatchIdentifier()
    {
        return $this->batchIdentifier;
    }


    /**
     * Business identifier.
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
     * Business identifier.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Device listing number.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setListingNumber($listingNumber)
    {
        if (null === $listingNumber) {
            return $this; 
        }
        if (is_scalar($listingNumber)) {
            $listingNumber = new FHIRString($listingNumber);
        }
        if (!($listingNumber instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductDeviceSpec::setListingNumber - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($listingNumber)
            ));
        }
        $this->listingNumber = $listingNumber;
        return $this;
    }

    /**
     * Device listing number.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getListingNumber()
    {
        return $this->listingNumber;
    }


    /**
     * Manufacturer of this Device.
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
     * Manufacturer of this Device.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }


    /**
     * A substance used to create the material(s) of which the device is made.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDeviceSpec\FHIRMedicinalProductDeviceSpecMaterial
     * @return $this
     */
    public function setMaterial(FHIRMedicinalProductDeviceSpecMaterial $material = null)
    {
        if (null === $material) {
            return $this; 
        }
        $this->material = $material;
        return $this;
    }

    /**
     * A substance used to create the material(s) of which the device is made.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDeviceSpec\FHIRMedicinalProductDeviceSpecMaterial
     */
    public function getMaterial()
    {
        return $this->material;
    }


    /**
     * Device model or reference number.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setModelNumber($modelNumber)
    {
        if (null === $modelNumber) {
            return $this; 
        }
        if (is_scalar($modelNumber)) {
            $modelNumber = new FHIRString($modelNumber);
        }
        if (!($modelNumber instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductDeviceSpec::setModelNumber - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($modelNumber)
            ));
        }
        $this->modelNumber = $modelNumber;
        return $this;
    }

    /**
     * Device model or reference number.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getModelNumber()
    {
        return $this->modelNumber;
    }


    /**
     * A nomenclature term for the device.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setNomenclature(FHIRCodeableConcept $nomenclature = null)
    {
        if (null === $nomenclature) {
            return $this; 
        }
        $this->nomenclature = $nomenclature;
        return $this;
    }

    /**
     * A nomenclature term for the device.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getNomenclature()
    {
        return $this->nomenclature;
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
     * The quantity of the device present in the packaging of a medicinal product.
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
     * The quantity of the device present in the packaging of a medicinal product.
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
     * Whether the device must be sterilised before use.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setSterilisationRequirement(FHIRCodeableConcept $sterilisationRequirement = null)
    {
        if (null === $sterilisationRequirement) {
            return $this; 
        }
        $this->sterilisationRequirement = $sterilisationRequirement;
        return $this;
    }

    /**
     * Whether the device must be sterilised before use.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSterilisationRequirement()
    {
        return $this->sterilisationRequirement;
    }


    /**
     * Whether the device is supplied as sterile.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setSterilityIndicator(FHIRCodeableConcept $sterilityIndicator = null)
    {
        if (null === $sterilityIndicator) {
            return $this; 
        }
        $this->sterilityIndicator = $sterilityIndicator;
        return $this;
    }

    /**
     * Whether the device is supplied as sterile.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSterilityIndicator()
    {
        return $this->sterilityIndicator;
    }


    /**
     * Trade name of the device, where applicable.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setTradeName($tradeName)
    {
        if (null === $tradeName) {
            return $this; 
        }
        if (is_scalar($tradeName)) {
            $tradeName = new FHIRString($tradeName);
        }
        if (!($tradeName instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductDeviceSpec::setTradeName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($tradeName)
            ));
        }
        $this->tradeName = $tradeName;
        return $this;
    }

    /**
     * Trade name of the device, where applicable.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTradeName()
    {
        return $this->tradeName;
    }


    /**
     * The type of device.
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
     * The type of device.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * Usage pattern including the number of times that the device may be used.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setUsage(FHIRCodeableConcept $usage = null)
    {
        if (null === $usage) {
            return $this; 
        }
        $this->usage = $usage;
        return $this;
    }

    /**
     * Usage pattern including the number of times that the device may be used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getUsage()
    {
        return $this->usage;
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
        if (null !== ($v = $this->getBatchIdentifier())) {
            $a['batchIdentifier'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getListingNumber())) {
            $a['listingNumber'] = $v;
        }
        if (null !== ($v = $this->getManufacturer())) {
            $a['manufacturer'] = $v;
        }
        if (null !== ($v = $this->getMaterial())) {
            $a['material'] = $v;
        }
        if (null !== ($v = $this->getModelNumber())) {
            $a['modelNumber'] = $v;
        }
        if (null !== ($v = $this->getNomenclature())) {
            $a['nomenclature'] = $v;
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
        if (null !== ($v = $this->getShelfLifeStorage())) {
            $a['shelfLifeStorage'] = $v;
        }
        if (null !== ($v = $this->getSterilisationRequirement())) {
            $a['sterilisationRequirement'] = $v;
        }
        if (null !== ($v = $this->getSterilityIndicator())) {
            $a['sterilityIndicator'] = $v;
        }
        if (null !== ($v = $this->getTradeName())) {
            $a['tradeName'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getUsage())) {
            $a['usage'] = $v;
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
            $sxe = new \SimpleXMLElement('<MedicinalProductDeviceSpec xmlns="http://hl7.org/fhir"></MedicinalProductDeviceSpec>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}