<?php namespace PHPFHIRGenerated\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A detailed description of a device, typically as part of a regulated medicinal product. It is not intended to relace the Device resource, which covers use of device instances.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRMedicinalProductDeviceSpec extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Business identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The type of device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Trade name of the device, where applicable.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $tradeName = null;

    /**
     * The quantity of the device present in the packaging of a medicinal product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

    /**
     * Device listing number.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $listingNumber = null;

    /**
     * Device model or reference number.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $modelNumber = null;

    /**
     * Whether the device is supplied as sterile.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $sterilityIndicator = null;

    /**
     * Whether the device must be sterilised before use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $sterilisationRequirement = null;

    /**
     * Usage pattern including the number of times that the device may be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $usage = null;

    /**
     * A nomenclature term for the device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $nomenclature = [];

    /**
     * Shelf Life and storage information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRProductShelfLife[]
     */
    public $shelfLife = [];

    /**
     * Dimensions, color etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRProdCharacteristic
     */
    public $physicalCharacteristics = null;

    /**
     * Other codeable characteristics.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $otherCharacteristics = [];

    /**
     * Batch number or expiry date of a device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $batchIdentifier = [];

    /**
     * Manufacturer of this Device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $manufacturer = [];

    /**
     * A substance used to create the material(s) of which the device is made.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductDeviceSpec\FHIRMedicinalProductDeviceSpecMaterial[]
     */
    public $material = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicinalProductDeviceSpec';

    /**
     * Business identifier.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Business identifier.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier) {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The type of device.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType() {
        return $this->type;
    }

    /**
     * The type of device.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Trade name of the device, where applicable.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTradeName() {
        return $this->tradeName;
    }

    /**
     * Trade name of the device, where applicable.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $tradeName
     * @return $this
     */
    public function setTradeName($tradeName) {
        $this->tradeName = $tradeName;
        return $this;
    }

    /**
     * The quantity of the device present in the packaging of a medicinal product.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getQuantity() {
        return $this->quantity;
    }

    /**
     * The quantity of the device present in the packaging of a medicinal product.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $quantity
     * @return $this
     */
    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Device listing number.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getListingNumber() {
        return $this->listingNumber;
    }

    /**
     * Device listing number.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $listingNumber
     * @return $this
     */
    public function setListingNumber($listingNumber) {
        $this->listingNumber = $listingNumber;
        return $this;
    }

    /**
     * Device model or reference number.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getModelNumber() {
        return $this->modelNumber;
    }

    /**
     * Device model or reference number.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $modelNumber
     * @return $this
     */
    public function setModelNumber($modelNumber) {
        $this->modelNumber = $modelNumber;
        return $this;
    }

    /**
     * Whether the device is supplied as sterile.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSterilityIndicator() {
        return $this->sterilityIndicator;
    }

    /**
     * Whether the device is supplied as sterile.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $sterilityIndicator
     * @return $this
     */
    public function setSterilityIndicator($sterilityIndicator) {
        $this->sterilityIndicator = $sterilityIndicator;
        return $this;
    }

    /**
     * Whether the device must be sterilised before use.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSterilisationRequirement() {
        return $this->sterilisationRequirement;
    }

    /**
     * Whether the device must be sterilised before use.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $sterilisationRequirement
     * @return $this
     */
    public function setSterilisationRequirement($sterilisationRequirement) {
        $this->sterilisationRequirement = $sterilisationRequirement;
        return $this;
    }

    /**
     * Usage pattern including the number of times that the device may be used.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getUsage() {
        return $this->usage;
    }

    /**
     * Usage pattern including the number of times that the device may be used.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $usage
     * @return $this
     */
    public function setUsage($usage) {
        $this->usage = $usage;
        return $this;
    }

    /**
     * A nomenclature term for the device.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getNomenclature() {
        return $this->nomenclature;
    }

    /**
     * A nomenclature term for the device.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $nomenclature
     * @return $this
     */
    public function addNomenclature($nomenclature) {
        $this->nomenclature[] = $nomenclature;
        return $this;
    }

    /**
     * Shelf Life and storage information.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRProductShelfLife[]
     */
    public function getShelfLife() {
        return $this->shelfLife;
    }

    /**
     * Shelf Life and storage information.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRProductShelfLife $shelfLife
     * @return $this
     */
    public function addShelfLife($shelfLife) {
        $this->shelfLife[] = $shelfLife;
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
     * Other codeable characteristics.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getOtherCharacteristics() {
        return $this->otherCharacteristics;
    }

    /**
     * Other codeable characteristics.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $otherCharacteristics
     * @return $this
     */
    public function addOtherCharacteristics($otherCharacteristics) {
        $this->otherCharacteristics[] = $otherCharacteristics;
        return $this;
    }

    /**
     * Batch number or expiry date of a device.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getBatchIdentifier() {
        return $this->batchIdentifier;
    }

    /**
     * Batch number or expiry date of a device.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $batchIdentifier
     * @return $this
     */
    public function addBatchIdentifier($batchIdentifier) {
        $this->batchIdentifier[] = $batchIdentifier;
        return $this;
    }

    /**
     * Manufacturer of this Device.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getManufacturer() {
        return $this->manufacturer;
    }

    /**
     * Manufacturer of this Device.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $manufacturer
     * @return $this
     */
    public function addManufacturer($manufacturer) {
        $this->manufacturer[] = $manufacturer;
        return $this;
    }

    /**
     * A substance used to create the material(s) of which the device is made.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductDeviceSpec\FHIRMedicinalProductDeviceSpecMaterial[]
     */
    public function getMaterial() {
        return $this->material;
    }

    /**
     * A substance used to create the material(s) of which the device is made.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductDeviceSpec\FHIRMedicinalProductDeviceSpecMaterial $material
     * @return $this
     */
    public function addMaterial($material) {
        $this->material[] = $material;
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
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['tradeName'])) {
                $this->setTradeName($data['tradeName']);
            }
            if (isset($data['quantity'])) {
                $this->setQuantity($data['quantity']);
            }
            if (isset($data['listingNumber'])) {
                $this->setListingNumber($data['listingNumber']);
            }
            if (isset($data['modelNumber'])) {
                $this->setModelNumber($data['modelNumber']);
            }
            if (isset($data['sterilityIndicator'])) {
                $this->setSterilityIndicator($data['sterilityIndicator']);
            }
            if (isset($data['sterilisationRequirement'])) {
                $this->setSterilisationRequirement($data['sterilisationRequirement']);
            }
            if (isset($data['usage'])) {
                $this->setUsage($data['usage']);
            }
            if (isset($data['nomenclature'])) {
                if (is_array($data['nomenclature'])) {
                    foreach($data['nomenclature'] as $d) {
                        $this->addNomenclature($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"nomenclature" must be array of objects or null, '.gettype($data['nomenclature']).' seen.');
                }
            }
            if (isset($data['shelfLife'])) {
                if (is_array($data['shelfLife'])) {
                    foreach($data['shelfLife'] as $d) {
                        $this->addShelfLife($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"shelfLife" must be array of objects or null, '.gettype($data['shelfLife']).' seen.');
                }
            }
            if (isset($data['physicalCharacteristics'])) {
                $this->setPhysicalCharacteristics($data['physicalCharacteristics']);
            }
            if (isset($data['otherCharacteristics'])) {
                if (is_array($data['otherCharacteristics'])) {
                    foreach($data['otherCharacteristics'] as $d) {
                        $this->addOtherCharacteristics($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"otherCharacteristics" must be array of objects or null, '.gettype($data['otherCharacteristics']).' seen.');
                }
            }
            if (isset($data['batchIdentifier'])) {
                if (is_array($data['batchIdentifier'])) {
                    foreach($data['batchIdentifier'] as $d) {
                        $this->addBatchIdentifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"batchIdentifier" must be array of objects or null, '.gettype($data['batchIdentifier']).' seen.');
                }
            }
            if (isset($data['manufacturer'])) {
                if (is_array($data['manufacturer'])) {
                    foreach($data['manufacturer'] as $d) {
                        $this->addManufacturer($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"manufacturer" must be array of objects or null, '.gettype($data['manufacturer']).' seen.');
                }
            }
            if (isset($data['material'])) {
                if (is_array($data['material'])) {
                    foreach($data['material'] as $d) {
                        $this->addMaterial($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"material" must be array of objects or null, '.gettype($data['material']).' seen.');
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
        $json['resourceType'] = $this->_fhirElementName;
        if (isset($this->identifier)) $json['identifier'] = $this->identifier;
        if (isset($this->type)) $json['type'] = $this->type;
        if (isset($this->tradeName)) $json['tradeName'] = $this->tradeName;
        if (isset($this->quantity)) $json['quantity'] = $this->quantity;
        if (isset($this->listingNumber)) $json['listingNumber'] = $this->listingNumber;
        if (isset($this->modelNumber)) $json['modelNumber'] = $this->modelNumber;
        if (isset($this->sterilityIndicator)) $json['sterilityIndicator'] = $this->sterilityIndicator;
        if (isset($this->sterilisationRequirement)) $json['sterilisationRequirement'] = $this->sterilisationRequirement;
        if (isset($this->usage)) $json['usage'] = $this->usage;
        if (0 < count($this->nomenclature)) {
            $json['nomenclature'] = [];
            foreach($this->nomenclature as $nomenclature) {
                if (null !== $nomenclature) $json['nomenclature'][] = $nomenclature;
            }
        }
        if (0 < count($this->shelfLife)) {
            $json['shelfLife'] = [];
            foreach($this->shelfLife as $shelfLife) {
                if (null !== $shelfLife) $json['shelfLife'][] = $shelfLife;
            }
        }
        if (isset($this->physicalCharacteristics)) $json['physicalCharacteristics'] = $this->physicalCharacteristics;
        if (0 < count($this->otherCharacteristics)) {
            $json['otherCharacteristics'] = [];
            foreach($this->otherCharacteristics as $otherCharacteristics) {
                if (null !== $otherCharacteristics) $json['otherCharacteristics'][] = $otherCharacteristics;
            }
        }
        if (0 < count($this->batchIdentifier)) {
            $json['batchIdentifier'] = [];
            foreach($this->batchIdentifier as $batchIdentifier) {
                if (null !== $batchIdentifier) $json['batchIdentifier'][] = $batchIdentifier;
            }
        }
        if (0 < count($this->manufacturer)) {
            $json['manufacturer'] = [];
            foreach($this->manufacturer as $manufacturer) {
                if (null !== $manufacturer) $json['manufacturer'][] = $manufacturer;
            }
        }
        if (0 < count($this->material)) {
            $json['material'] = [];
            foreach($this->material as $material) {
                if (null !== $material) $json['material'][] = $material;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicinalProductDeviceSpec xmlns="http://hl7.org/fhir"></MedicinalProductDeviceSpec>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->identifier)) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (isset($this->tradeName)) $this->tradeName->xmlSerialize(true, $sxe->addChild('tradeName'));
        if (isset($this->quantity)) $this->quantity->xmlSerialize(true, $sxe->addChild('quantity'));
        if (isset($this->listingNumber)) $this->listingNumber->xmlSerialize(true, $sxe->addChild('listingNumber'));
        if (isset($this->modelNumber)) $this->modelNumber->xmlSerialize(true, $sxe->addChild('modelNumber'));
        if (isset($this->sterilityIndicator)) $this->sterilityIndicator->xmlSerialize(true, $sxe->addChild('sterilityIndicator'));
        if (isset($this->sterilisationRequirement)) $this->sterilisationRequirement->xmlSerialize(true, $sxe->addChild('sterilisationRequirement'));
        if (isset($this->usage)) $this->usage->xmlSerialize(true, $sxe->addChild('usage'));
        if (0 < count($this->nomenclature)) {
            foreach($this->nomenclature as $nomenclature) {
                $nomenclature->xmlSerialize(true, $sxe->addChild('nomenclature'));
            }
        }
        if (0 < count($this->shelfLife)) {
            foreach($this->shelfLife as $shelfLife) {
                $shelfLife->xmlSerialize(true, $sxe->addChild('shelfLife'));
            }
        }
        if (isset($this->physicalCharacteristics)) $this->physicalCharacteristics->xmlSerialize(true, $sxe->addChild('physicalCharacteristics'));
        if (0 < count($this->otherCharacteristics)) {
            foreach($this->otherCharacteristics as $otherCharacteristics) {
                $otherCharacteristics->xmlSerialize(true, $sxe->addChild('otherCharacteristics'));
            }
        }
        if (0 < count($this->batchIdentifier)) {
            foreach($this->batchIdentifier as $batchIdentifier) {
                $batchIdentifier->xmlSerialize(true, $sxe->addChild('batchIdentifier'));
            }
        }
        if (0 < count($this->manufacturer)) {
            foreach($this->manufacturer as $manufacturer) {
                $manufacturer->xmlSerialize(true, $sxe->addChild('manufacturer'));
            }
        }
        if (0 < count($this->material)) {
            foreach($this->material as $material) {
                $material->xmlSerialize(true, $sxe->addChild('material'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}