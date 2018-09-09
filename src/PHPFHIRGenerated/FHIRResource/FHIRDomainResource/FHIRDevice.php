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
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceDeviceName;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceProperty;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceSpecialization;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceVersion;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRContactPoint;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRFHIRDeviceStatus;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * This resource identifies a type of a manufactured item that is used in the provision of healthcare without being substantially changed through that activity. The device may be a medical or non-medical device.  Medical devices include durable (reusable) medical equipment, implantable devices, as well as disposable equipment used for diagnostic, treatment, and research for healthcare and public health.  Non-medical devices may include items such as a machine, cellphone, computer, application, etc. This is the catalog description of a device (not the specific instance).
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRDevice
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRDevice extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Device';

    /**
     * Contact details for an organization or a particular human that is responsible for the device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public $contact = null;

    /**
     * The reference to the definition for the device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $definition = null;

    /**
     * This represents the manufacturer's name of the device as provided by the device, from a UDI label, or by a person describing the Device.  This typically would be used when a person provides the name(s) or when the device represents one of the names available from DeviceDefinition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceDeviceName
     */
    public $deviceName = null;

    /**
     * The distinct identification code required by §1271.290(c) for a human cell, tissue, or cellular and tissue-based product regulated as a device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $distinctIdentificationCode = null;

    /**
     * The date and time beyond which this device is no longer valid or should not be used (if applicable).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $expirationDate = null;

    /**
     * Unique instance identifiers assigned to a device by manufacturers other organizations or owners.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The place where the device can be found.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * Lot number assigned by the manufacturer.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $lotNumber = null;

    /**
     * The date and time when the device was manufactured.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $manufactureDate = null;

    /**
     * A name of the manufacturer.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $manufacturer = null;

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
     * An organization that is responsible for the provision and ongoing maintenance of the device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $owner = null;

    /**
     * The parent device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $parent = null;

    /**
     * The part number of thedevice.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $partNumber = null;

    /**
     * Patient information, If the device is affixed to a person.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The actual configuration settings of a device as it actually operates, e.g., regulation status, time properties.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceProperty
     */
    public $property = null;

    /**
     * Provides additional safety characteristics about a medical device.  For example devices containing latex.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $safety = null;

    /**
     * The serial number assigned by the organization when the device was manufactured.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $serialNumber = null;

    /**
     * The capabilities supported on a  device, the standards to which the device conforms for a particular purpose, and used for the communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceSpecialization
     */
    public $specialization = null;

    /**
     * Status of the Device availability.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRFHIRDeviceStatus
     */
    public $status = null;

    /**
     * Reason for the dtatus of the Device availability.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $statusReason = null;

    /**
     * The kind or type of device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Unique device identifier (UDI) assigned to device label or package.  Note that the Device may include multiple udiCarriers as it either may include just the udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it could have been sold.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier
     */
    public $udiCarrier = null;

    /**
     * A network address on which the device may be contacted directly.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * The actual design of the device or software version running on the device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceVersion
     */
    public $version = null;

    /**
     * FHIRDevice Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['contact'])) {
                $this->setContact($data['contact']);
            }
            if (isset($data['definition'])) {
                $this->setDefinition($data['definition']);
            }
            if (isset($data['deviceName'])) {
                $this->setDeviceName($data['deviceName']);
            }
            if (isset($data['distinctIdentificationCode'])) {
                $this->setDistinctIdentificationCode($data['distinctIdentificationCode']);
            }
            if (isset($data['expirationDate'])) {
                $this->setExpirationDate($data['expirationDate']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['location'])) {
                $this->setLocation($data['location']);
            }
            if (isset($data['lotNumber'])) {
                $this->setLotNumber($data['lotNumber']);
            }
            if (isset($data['manufactureDate'])) {
                $this->setManufactureDate($data['manufactureDate']);
            }
            if (isset($data['manufacturer'])) {
                $this->setManufacturer($data['manufacturer']);
            }
            if (isset($data['modelNumber'])) {
                $this->setModelNumber($data['modelNumber']);
            }
            if (isset($data['note'])) {
                $this->setNote($data['note']);
            }
            if (isset($data['owner'])) {
                $this->setOwner($data['owner']);
            }
            if (isset($data['parent'])) {
                $this->setParent($data['parent']);
            }
            if (isset($data['partNumber'])) {
                $this->setPartNumber($data['partNumber']);
            }
            if (isset($data['patient'])) {
                $this->setPatient($data['patient']);
            }
            if (isset($data['property'])) {
                $this->setProperty($data['property']);
            }
            if (isset($data['safety'])) {
                $this->setSafety($data['safety']);
            }
            if (isset($data['serialNumber'])) {
                $this->setSerialNumber($data['serialNumber']);
            }
            if (isset($data['specialization'])) {
                $this->setSpecialization($data['specialization']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['statusReason'])) {
                $this->setStatusReason($data['statusReason']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['udiCarrier'])) {
                $this->setUdiCarrier($data['udiCarrier']);
            }
            if (isset($data['url'])) {
                $this->setUrl($data['url']);
            }
            if (isset($data['version'])) {
                $this->setVersion($data['version']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
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
     * The reference to the definition for the device.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setDefinition(FHIRReference $definition = null)
    {
        if (null === $definition) {
            return $this; 
        }
        $this->definition = $definition;
        return $this;
    }

    /**
     * The reference to the definition for the device.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDefinition()
    {
        return $this->definition;
    }


    /**
     * This represents the manufacturer's name of the device as provided by the device, from a UDI label, or by a person describing the Device.  This typically would be used when a person provides the name(s) or when the device represents one of the names available from DeviceDefinition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceDeviceName
     * @return $this
     */
    public function setDeviceName(FHIRDeviceDeviceName $deviceName = null)
    {
        if (null === $deviceName) {
            return $this; 
        }
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * This represents the manufacturer's name of the device as provided by the device, from a UDI label, or by a person describing the Device.  This typically would be used when a person provides the name(s) or when the device represents one of the names available from DeviceDefinition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceDeviceName
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }


    /**
     * The distinct identification code required by §1271.290(c) for a human cell, tissue, or cellular and tissue-based product regulated as a device.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDistinctIdentificationCode($distinctIdentificationCode)
    {
        if (null === $distinctIdentificationCode) {
            return $this; 
        }
        if (is_scalar($distinctIdentificationCode)) {
            $distinctIdentificationCode = new FHIRString($distinctIdentificationCode);
        }
        if (!($distinctIdentificationCode instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDevice::setDistinctIdentificationCode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($distinctIdentificationCode)
            ));
        }
        $this->distinctIdentificationCode = $distinctIdentificationCode;
        return $this;
    }

    /**
     * The distinct identification code required by §1271.290(c) for a human cell, tissue, or cellular and tissue-based product regulated as a device.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDistinctIdentificationCode()
    {
        return $this->distinctIdentificationCode;
    }


    /**
     * The date and time beyond which this device is no longer valid or should not be used (if applicable).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        if (null === $expirationDate) {
            return $this; 
        }
        if (is_scalar($expirationDate)) {
            $expirationDate = new FHIRDateTime($expirationDate);
        }
        if (!($expirationDate instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDevice::setExpirationDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($expirationDate)
            ));
        }
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * The date and time beyond which this device is no longer valid or should not be used (if applicable).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }


    /**
     * Unique instance identifiers assigned to a device by manufacturers other organizations or owners.
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
     * Unique instance identifiers assigned to a device by manufacturers other organizations or owners.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * The place where the device can be found.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setLocation(FHIRReference $location = null)
    {
        if (null === $location) {
            return $this; 
        }
        $this->location = $location;
        return $this;
    }

    /**
     * The place where the device can be found.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }


    /**
     * Lot number assigned by the manufacturer.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setLotNumber($lotNumber)
    {
        if (null === $lotNumber) {
            return $this; 
        }
        if (is_scalar($lotNumber)) {
            $lotNumber = new FHIRString($lotNumber);
        }
        if (!($lotNumber instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDevice::setLotNumber - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($lotNumber)
            ));
        }
        $this->lotNumber = $lotNumber;
        return $this;
    }

    /**
     * Lot number assigned by the manufacturer.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLotNumber()
    {
        return $this->lotNumber;
    }


    /**
     * The date and time when the device was manufactured.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setManufactureDate($manufactureDate)
    {
        if (null === $manufactureDate) {
            return $this; 
        }
        if (is_scalar($manufactureDate)) {
            $manufactureDate = new FHIRDateTime($manufactureDate);
        }
        if (!($manufactureDate instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDevice::setManufactureDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($manufactureDate)
            ));
        }
        $this->manufactureDate = $manufactureDate;
        return $this;
    }

    /**
     * The date and time when the device was manufactured.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getManufactureDate()
    {
        return $this->manufactureDate;
    }


    /**
     * A name of the manufacturer.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setManufacturer($manufacturer)
    {
        if (null === $manufacturer) {
            return $this; 
        }
        if (is_scalar($manufacturer)) {
            $manufacturer = new FHIRString($manufacturer);
        }
        if (!($manufacturer instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDevice::setManufacturer - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($manufacturer)
            ));
        }
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * A name of the manufacturer.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
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
                'FHIRDevice::setModelNumber - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
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
     * The parent device.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setParent(FHIRReference $parent = null)
    {
        if (null === $parent) {
            return $this; 
        }
        $this->parent = $parent;
        return $this;
    }

    /**
     * The parent device.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getParent()
    {
        return $this->parent;
    }


    /**
     * The part number of thedevice.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setPartNumber($partNumber)
    {
        if (null === $partNumber) {
            return $this; 
        }
        if (is_scalar($partNumber)) {
            $partNumber = new FHIRString($partNumber);
        }
        if (!($partNumber instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDevice::setPartNumber - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($partNumber)
            ));
        }
        $this->partNumber = $partNumber;
        return $this;
    }

    /**
     * The part number of thedevice.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }


    /**
     * Patient information, If the device is affixed to a person.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPatient(FHIRReference $patient = null)
    {
        if (null === $patient) {
            return $this; 
        }
        $this->patient = $patient;
        return $this;
    }

    /**
     * Patient information, If the device is affixed to a person.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }


    /**
     * The actual configuration settings of a device as it actually operates, e.g., regulation status, time properties.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceProperty
     * @return $this
     */
    public function setProperty(FHIRDeviceProperty $property = null)
    {
        if (null === $property) {
            return $this; 
        }
        $this->property = $property;
        return $this;
    }

    /**
     * The actual configuration settings of a device as it actually operates, e.g., regulation status, time properties.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceProperty
     */
    public function getProperty()
    {
        return $this->property;
    }


    /**
     * Provides additional safety characteristics about a medical device.  For example devices containing latex.
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
     * Provides additional safety characteristics about a medical device.  For example devices containing latex.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSafety()
    {
        return $this->safety;
    }


    /**
     * The serial number assigned by the organization when the device was manufactured.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setSerialNumber($serialNumber)
    {
        if (null === $serialNumber) {
            return $this; 
        }
        if (is_scalar($serialNumber)) {
            $serialNumber = new FHIRString($serialNumber);
        }
        if (!($serialNumber instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDevice::setSerialNumber - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($serialNumber)
            ));
        }
        $this->serialNumber = $serialNumber;
        return $this;
    }

    /**
     * The serial number assigned by the organization when the device was manufactured.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }


    /**
     * The capabilities supported on a  device, the standards to which the device conforms for a particular purpose, and used for the communication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceSpecialization
     * @return $this
     */
    public function setSpecialization(FHIRDeviceSpecialization $specialization = null)
    {
        if (null === $specialization) {
            return $this; 
        }
        $this->specialization = $specialization;
        return $this;
    }

    /**
     * The capabilities supported on a  device, the standards to which the device conforms for a particular purpose, and used for the communication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceSpecialization
     */
    public function getSpecialization()
    {
        return $this->specialization;
    }


    /**
     * Status of the Device availability.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRFHIRDeviceStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRFHIRDeviceStatus($status);
        }
        if (!($status instanceof FHIRFHIRDeviceStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDevice::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRFHIRDeviceStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * Status of the Device availability.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRFHIRDeviceStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Reason for the dtatus of the Device availability.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setStatusReason(FHIRCodeableConcept $statusReason = null)
    {
        if (null === $statusReason) {
            return $this; 
        }
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Reason for the dtatus of the Device availability.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }


    /**
     * The kind or type of device.
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
     * The kind or type of device.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * Unique device identifier (UDI) assigned to device label or package.  Note that the Device may include multiple udiCarriers as it either may include just the udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it could have been sold.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier
     * @return $this
     */
    public function setUdiCarrier(FHIRDeviceUdiCarrier $udiCarrier = null)
    {
        if (null === $udiCarrier) {
            return $this; 
        }
        $this->udiCarrier = $udiCarrier;
        return $this;
    }

    /**
     * Unique device identifier (UDI) assigned to device label or package.  Note that the Device may include multiple udiCarriers as it either may include just the udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it could have been sold.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier
     */
    public function getUdiCarrier()
    {
        return $this->udiCarrier;
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
                'FHIRDevice::setUrl - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
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
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceVersion
     * @return $this
     */
    public function setVersion(FHIRDeviceVersion $version = null)
    {
        if (null === $version) {
            return $this; 
        }
        $this->version = $version;
        return $this;
    }

    /**
     * The actual design of the device or software version running on the device.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceVersion
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
        if (null !== ($v = $this->getContact())) {
            $a['contact'] = $v;
        }
        if (null !== ($v = $this->getDefinition())) {
            $a['definition'] = $v;
        }
        if (null !== ($v = $this->getDeviceName())) {
            $a['deviceName'] = $v;
        }
        if (null !== ($v = $this->getDistinctIdentificationCode())) {
            $a['distinctIdentificationCode'] = $v;
        }
        if (null !== ($v = $this->getExpirationDate())) {
            $a['expirationDate'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getLocation())) {
            $a['location'] = $v;
        }
        if (null !== ($v = $this->getLotNumber())) {
            $a['lotNumber'] = $v;
        }
        if (null !== ($v = $this->getManufactureDate())) {
            $a['manufactureDate'] = $v;
        }
        if (null !== ($v = $this->getManufacturer())) {
            $a['manufacturer'] = $v;
        }
        if (null !== ($v = $this->getModelNumber())) {
            $a['modelNumber'] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a['note'] = $v;
        }
        if (null !== ($v = $this->getOwner())) {
            $a['owner'] = $v;
        }
        if (null !== ($v = $this->getParent())) {
            $a['parent'] = $v;
        }
        if (null !== ($v = $this->getPartNumber())) {
            $a['partNumber'] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a['patient'] = $v;
        }
        if (null !== ($v = $this->getProperty())) {
            $a['property'] = $v;
        }
        if (null !== ($v = $this->getSafety())) {
            $a['safety'] = $v;
        }
        if (null !== ($v = $this->getSerialNumber())) {
            $a['serialNumber'] = $v;
        }
        if (null !== ($v = $this->getSpecialization())) {
            $a['specialization'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getStatusReason())) {
            $a['statusReason'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getUdiCarrier())) {
            $a['udiCarrier'] = $v;
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
            $sxe = new \SimpleXMLElement('<Device xmlns="http://hl7.org/fhir"></Device>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}