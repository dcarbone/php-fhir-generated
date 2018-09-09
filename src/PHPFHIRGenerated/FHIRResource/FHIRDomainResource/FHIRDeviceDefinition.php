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

use PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionCapability;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionDeviceName;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionMaterial;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionProperty;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionSpecialization;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionUdiDeviceIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProductShelfLife;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRContactPoint;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * The characteristics, operational status and capabilities of a medical-related component of a medical device.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRDeviceDefinition
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRDeviceDefinition extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'DeviceDefinition';

    /**
     * Device capabilities.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionCapability
     */
    public $capability = null;

    /**
     * Contact details for an organization or a particular human that is responsible for the device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public $contact = null;

    /**
     * A name given to the device to identify it.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionDeviceName
     */
    public $deviceName = null;

    /**
     * Unique instance identifiers assigned to a device by the software, manufacturers, other organizations or owners. For example: handle ID.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Language code for the human-readable text strings produced by the device (all supported).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $languageCode = null;

    /**
     * A name of the manufacturer.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $manufacturerReference = null;

    /**
     * A name of the manufacturer.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $manufacturerString = null;

    /**
     * A substance used to create the material(s) of which the device is made.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionMaterial
     */
    public $material = null;

    /**
     * The model number for the device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $modelNumber = null;

    /**
     * Descriptive information, usage information or implantation information that is not captured in an existing element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * Access to on-line information about the device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $onlineInformation = null;

    /**
     * An organization that is responsible for the provision and ongoing maintenance of the device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $owner = null;

    /**
     * The parent device it can be part of.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $parentDevice = null;

    /**
     * Dimensions, color etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic
     */
    public $physicalCharacteristics = null;

    /**
     * The actual configuration settings of a device as it actually operates, e.g., regulation status, time properties.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionProperty
     */
    public $property = null;

    /**
     * The quantity of the device present in the packaging (e.g. the number of devices present in a pack, or the number of devices in the same package of the medicinal product).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

    /**
     * Safety characteristics of the device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $safety = null;

    /**
     * Shelf Life and storage information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProductShelfLife
     */
    public $shelfLifeStorage = null;

    /**
     * The capabilities supported on a  device, the standards to which the device conforms for a particular purpose, and used for the communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionSpecialization
     */
    public $specialization = null;

    /**
     * What kind of device or device system this is.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Unique device identifier (UDI) assigned to device label or package.  Note that the Device may include multiple udiCarriers as it either may include just the udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it could have been sold.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionUdiDeviceIdentifier
     */
    public $udiDeviceIdentifier = null;

    /**
     * A network address on which the device may be contacted directly.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * The actual design of the device or software version running on the device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * FHIRDeviceDefinition Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['capability'])) {
                $this->setCapability($data['capability']);
            }
            if (isset($data['contact'])) {
                $this->setContact($data['contact']);
            }
            if (isset($data['deviceName'])) {
                $this->setDeviceName($data['deviceName']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['languageCode'])) {
                $this->setLanguageCode($data['languageCode']);
            }
            if (isset($data['manufacturerReference'])) {
                $this->setManufacturerReference($data['manufacturerReference']);
            }
            if (isset($data['manufacturerString'])) {
                $this->setManufacturerString($data['manufacturerString']);
            }
            if (isset($data['material'])) {
                $this->setMaterial($data['material']);
            }
            if (isset($data['modelNumber'])) {
                $this->setModelNumber($data['modelNumber']);
            }
            if (isset($data['note'])) {
                $this->setNote($data['note']);
            }
            if (isset($data['onlineInformation'])) {
                $this->setOnlineInformation($data['onlineInformation']);
            }
            if (isset($data['owner'])) {
                $this->setOwner($data['owner']);
            }
            if (isset($data['parentDevice'])) {
                $this->setParentDevice($data['parentDevice']);
            }
            if (isset($data['physicalCharacteristics'])) {
                $this->setPhysicalCharacteristics($data['physicalCharacteristics']);
            }
            if (isset($data['property'])) {
                $this->setProperty($data['property']);
            }
            if (isset($data['quantity'])) {
                $this->setQuantity($data['quantity']);
            }
            if (isset($data['safety'])) {
                $this->setSafety($data['safety']);
            }
            if (isset($data['shelfLifeStorage'])) {
                $this->setShelfLifeStorage($data['shelfLifeStorage']);
            }
            if (isset($data['specialization'])) {
                $this->setSpecialization($data['specialization']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['udiDeviceIdentifier'])) {
                $this->setUdiDeviceIdentifier($data['udiDeviceIdentifier']);
            }
            if (isset($data['url'])) {
                $this->setUrl($data['url']);
            }
            if (isset($data['version'])) {
                $this->setVersion($data['version']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceDefinition::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Device capabilities.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionCapability
     * @return $this
     */
    public function setCapability(FHIRDeviceDefinitionCapability $capability = null)
    {
        if (null === $capability) {
            return $this; 
        }
        $this->capability = $capability;
        return $this;
    }

    /**
     * Device capabilities.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionCapability
     */
    public function getCapability()
    {
        return $this->capability;
    }


    /**
     * Contact details for an organization or a particular human that is responsible for the device.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     * @return $this
     */
    public function setContact(FHIRContactPoint $contact = null)
    {
        if (null === $contact) {
            return $this; 
        }
        $this->contact = $contact;
        return $this;
    }

    /**
     * Contact details for an organization or a particular human that is responsible for the device.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getContact()
    {
        return $this->contact;
    }


    /**
     * A name given to the device to identify it.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionDeviceName
     * @return $this
     */
    public function setDeviceName(FHIRDeviceDefinitionDeviceName $deviceName = null)
    {
        if (null === $deviceName) {
            return $this; 
        }
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * A name given to the device to identify it.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionDeviceName
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }


    /**
     * Unique instance identifiers assigned to a device by the software, manufacturers, other organizations or owners. For example: handle ID.
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
     * Unique instance identifiers assigned to a device by the software, manufacturers, other organizations or owners. For example: handle ID.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Language code for the human-readable text strings produced by the device (all supported).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setLanguageCode(FHIRCodeableConcept $languageCode = null)
    {
        if (null === $languageCode) {
            return $this; 
        }
        $this->languageCode = $languageCode;
        return $this;
    }

    /**
     * Language code for the human-readable text strings produced by the device (all supported).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }


    /**
     * A name of the manufacturer.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setManufacturerReference(FHIRReference $manufacturerReference = null)
    {
        if (null === $manufacturerReference) {
            return $this; 
        }
        $this->manufacturerReference = $manufacturerReference;
        return $this;
    }

    /**
     * A name of the manufacturer.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getManufacturerReference()
    {
        return $this->manufacturerReference;
    }


    /**
     * A name of the manufacturer.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setManufacturerString($manufacturerString)
    {
        if (null === $manufacturerString) {
            return $this; 
        }
        if (is_scalar($manufacturerString)) {
            $manufacturerString = new FHIRString($manufacturerString);
        }
        if (!($manufacturerString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceDefinition::setManufacturerString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($manufacturerString)
            ));
        }
        $this->manufacturerString = $manufacturerString;
        return $this;
    }

    /**
     * A name of the manufacturer.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getManufacturerString()
    {
        return $this->manufacturerString;
    }


    /**
     * A substance used to create the material(s) of which the device is made.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionMaterial
     * @return $this
     */
    public function setMaterial(FHIRDeviceDefinitionMaterial $material = null)
    {
        if (null === $material) {
            return $this; 
        }
        $this->material = $material;
        return $this;
    }

    /**
     * A substance used to create the material(s) of which the device is made.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionMaterial
     */
    public function getMaterial()
    {
        return $this->material;
    }


    /**
     * The model number for the device.
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
                'FHIRDeviceDefinition::setModelNumber - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($modelNumber)
            ));
        }
        $this->modelNumber = $modelNumber;
        return $this;
    }

    /**
     * The model number for the device.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getModelNumber()
    {
        return $this->modelNumber;
    }


    /**
     * Descriptive information, usage information or implantation information that is not captured in an existing element.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     * @return $this
     */
    public function setNote(FHIRAnnotation $note = null)
    {
        if (null === $note) {
            return $this; 
        }
        $this->note = $note;
        return $this;
    }

    /**
     * Descriptive information, usage information or implantation information that is not captured in an existing element.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }


    /**
     * Access to on-line information about the device.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setOnlineInformation($onlineInformation)
    {
        if (null === $onlineInformation) {
            return $this; 
        }
        if (is_scalar($onlineInformation)) {
            $onlineInformation = new FHIRUri($onlineInformation);
        }
        if (!($onlineInformation instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceDefinition::setOnlineInformation - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($onlineInformation)
            ));
        }
        $this->onlineInformation = $onlineInformation;
        return $this;
    }

    /**
     * Access to on-line information about the device.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getOnlineInformation()
    {
        return $this->onlineInformation;
    }


    /**
     * An organization that is responsible for the provision and ongoing maintenance of the device.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setOwner(FHIRReference $owner = null)
    {
        if (null === $owner) {
            return $this; 
        }
        $this->owner = $owner;
        return $this;
    }

    /**
     * An organization that is responsible for the provision and ongoing maintenance of the device.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOwner()
    {
        return $this->owner;
    }


    /**
     * The parent device it can be part of.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setParentDevice(FHIRReference $parentDevice = null)
    {
        if (null === $parentDevice) {
            return $this; 
        }
        $this->parentDevice = $parentDevice;
        return $this;
    }

    /**
     * The parent device it can be part of.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getParentDevice()
    {
        return $this->parentDevice;
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
     * The actual configuration settings of a device as it actually operates, e.g., regulation status, time properties.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionProperty
     * @return $this
     */
    public function setProperty(FHIRDeviceDefinitionProperty $property = null)
    {
        if (null === $property) {
            return $this; 
        }
        $this->property = $property;
        return $this;
    }

    /**
     * The actual configuration settings of a device as it actually operates, e.g., regulation status, time properties.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionProperty
     */
    public function getProperty()
    {
        return $this->property;
    }


    /**
     * The quantity of the device present in the packaging (e.g. the number of devices present in a pack, or the number of devices in the same package of the medicinal product).
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
     * The quantity of the device present in the packaging (e.g. the number of devices present in a pack, or the number of devices in the same package of the medicinal product).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }


    /**
     * Safety characteristics of the device.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setSafety(FHIRCodeableConcept $safety = null)
    {
        if (null === $safety) {
            return $this; 
        }
        $this->safety = $safety;
        return $this;
    }

    /**
     * Safety characteristics of the device.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSafety()
    {
        return $this->safety;
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
     * The capabilities supported on a  device, the standards to which the device conforms for a particular purpose, and used for the communication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionSpecialization
     * @return $this
     */
    public function setSpecialization(FHIRDeviceDefinitionSpecialization $specialization = null)
    {
        if (null === $specialization) {
            return $this; 
        }
        $this->specialization = $specialization;
        return $this;
    }

    /**
     * The capabilities supported on a  device, the standards to which the device conforms for a particular purpose, and used for the communication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionSpecialization
     */
    public function getSpecialization()
    {
        return $this->specialization;
    }


    /**
     * What kind of device or device system this is.
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
     * What kind of device or device system this is.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * Unique device identifier (UDI) assigned to device label or package.  Note that the Device may include multiple udiCarriers as it either may include just the udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it could have been sold.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionUdiDeviceIdentifier
     * @return $this
     */
    public function setUdiDeviceIdentifier(FHIRDeviceDefinitionUdiDeviceIdentifier $udiDeviceIdentifier = null)
    {
        if (null === $udiDeviceIdentifier) {
            return $this; 
        }
        $this->udiDeviceIdentifier = $udiDeviceIdentifier;
        return $this;
    }

    /**
     * Unique device identifier (UDI) assigned to device label or package.  Note that the Device may include multiple udiCarriers as it either may include just the udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it could have been sold.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionUdiDeviceIdentifier
     */
    public function getUdiDeviceIdentifier()
    {
        return $this->udiDeviceIdentifier;
    }


    /**
     * A network address on which the device may be contacted directly.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setUrl($url)
    {
        if (null === $url) {
            return $this; 
        }
        if (is_scalar($url)) {
            $url = new FHIRUri($url);
        }
        if (!($url instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceDefinition::setUrl - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($url)
            ));
        }
        $this->url = $url;
        return $this;
    }

    /**
     * A network address on which the device may be contacted directly.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }


    /**
     * The actual design of the device or software version running on the device.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setVersion($version)
    {
        if (null === $version) {
            return $this; 
        }
        if (is_scalar($version)) {
            $version = new FHIRString($version);
        }
        if (!($version instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceDefinition::setVersion - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($version)
            ));
        }
        $this->version = $version;
        return $this;
    }

    /**
     * The actual design of the device or software version running on the device.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
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
        if (null !== ($v = $this->getCapability())) {
            $a['capability'] = $v;
        }
        if (null !== ($v = $this->getContact())) {
            $a['contact'] = $v;
        }
        if (null !== ($v = $this->getDeviceName())) {
            $a['deviceName'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getLanguageCode())) {
            $a['languageCode'] = $v;
        }
        if (null !== ($v = $this->getManufacturerReference())) {
            $a['manufacturerReference'] = $v;
        }
        if (null !== ($v = $this->getManufacturerString())) {
            $a['manufacturerString'] = $v;
        }
        if (null !== ($v = $this->getMaterial())) {
            $a['material'] = $v;
        }
        if (null !== ($v = $this->getModelNumber())) {
            $a['modelNumber'] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a['note'] = $v;
        }
        if (null !== ($v = $this->getOnlineInformation())) {
            $a['onlineInformation'] = $v;
        }
        if (null !== ($v = $this->getOwner())) {
            $a['owner'] = $v;
        }
        if (null !== ($v = $this->getParentDevice())) {
            $a['parentDevice'] = $v;
        }
        if (null !== ($v = $this->getPhysicalCharacteristics())) {
            $a['physicalCharacteristics'] = $v;
        }
        if (null !== ($v = $this->getProperty())) {
            $a['property'] = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $a['quantity'] = $v;
        }
        if (null !== ($v = $this->getSafety())) {
            $a['safety'] = $v;
        }
        if (null !== ($v = $this->getShelfLifeStorage())) {
            $a['shelfLifeStorage'] = $v;
        }
        if (null !== ($v = $this->getSpecialization())) {
            $a['specialization'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getUdiDeviceIdentifier())) {
            $a['udiDeviceIdentifier'] = $v;
        }
        if (null !== ($v = $this->getUrl())) {
            $a['url'] = $v;
        }
        if (null !== ($v = $this->getVersion())) {
            $a['version'] = $v;
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
            $sxe = new \SimpleXMLElement('<DeviceDefinition xmlns="http://hl7.org/fhir"></DeviceDefinition>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}