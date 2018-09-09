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

use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A physical, countable instance of an item, for example one box or one unit.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRItemInstance
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRItemInstance extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ItemInstance';

    /**
     * The machine-readable AIDC string in base64 encoding. Can correspond to the UDI pattern in devices.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $carrierAIDC = null;

    /**
     * The human-readable barcode string. Can correspond to the UDI pattern in devices.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $carrierHRF = null;

    /**
     * The quantity or amount of instances. For example if several units are being counted for inventory, this quantity can be more than one, provided they are not unique. Seriallized items are considered unique and as such would have a quantity max 1. This element is required and its presence asserts that the reource refers to a physical item.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $count = null;

    /**
     * The Software version associated with the device, typically only used for devices with embedded software or firmware.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $currentSWVersion = null;

    /**
     * The expiry or preparation date and time.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $expiryDate = null;

    /**
     * The location where the item is phisically located.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * The lot or batch number.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $lotNumber = null;

    /**
     * The manufacture or preparation date and time. Times are necessary for several examples - for example biologically derived products, prepared or coumpounded medication, rapidly decaying isotopes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $manufactureDate = null;

    /**
     * The serial number if available.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $serialNumber = null;

    /**
     * The patient that the item is associated with (implanted in, given to).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * FHIRItemInstance Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['carrierAIDC'])) {
                $this->setCarrierAIDC($data['carrierAIDC']);
            }
            if (isset($data['carrierHRF'])) {
                $this->setCarrierHRF($data['carrierHRF']);
            }
            if (isset($data['count'])) {
                $this->setCount($data['count']);
            }
            if (isset($data['currentSWVersion'])) {
                $this->setCurrentSWVersion($data['currentSWVersion']);
            }
            if (isset($data['expiryDate'])) {
                $this->setExpiryDate($data['expiryDate']);
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
            if (isset($data['serialNumber'])) {
                $this->setSerialNumber($data['serialNumber']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRItemInstance::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The machine-readable AIDC string in base64 encoding. Can correspond to the UDI pattern in devices.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setCarrierAIDC($carrierAIDC)
    {
        if (null === $carrierAIDC) {
            return $this; 
        }
        if (is_scalar($carrierAIDC)) {
            $carrierAIDC = new FHIRString($carrierAIDC);
        }
        if (!($carrierAIDC instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRItemInstance::setCarrierAIDC - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($carrierAIDC)
            ));
        }
        $this->carrierAIDC = $carrierAIDC;
        return $this;
    }

    /**
     * The machine-readable AIDC string in base64 encoding. Can correspond to the UDI pattern in devices.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCarrierAIDC()
    {
        return $this->carrierAIDC;
    }


    /**
     * The human-readable barcode string. Can correspond to the UDI pattern in devices.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setCarrierHRF($carrierHRF)
    {
        if (null === $carrierHRF) {
            return $this; 
        }
        if (is_scalar($carrierHRF)) {
            $carrierHRF = new FHIRString($carrierHRF);
        }
        if (!($carrierHRF instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRItemInstance::setCarrierHRF - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($carrierHRF)
            ));
        }
        $this->carrierHRF = $carrierHRF;
        return $this;
    }

    /**
     * The human-readable barcode string. Can correspond to the UDI pattern in devices.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCarrierHRF()
    {
        return $this->carrierHRF;
    }


    /**
     * The quantity or amount of instances. For example if several units are being counted for inventory, this quantity can be more than one, provided they are not unique. Seriallized items are considered unique and as such would have a quantity max 1. This element is required and its presence asserts that the reource refers to a physical item.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setCount($count)
    {
        if (null === $count) {
            return $this; 
        }
        if (is_scalar($count)) {
            $count = new FHIRInteger($count);
        }
        if (!($count instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRItemInstance::setCount - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($count)
            ));
        }
        $this->count = $count;
        return $this;
    }

    /**
     * The quantity or amount of instances. For example if several units are being counted for inventory, this quantity can be more than one, provided they are not unique. Seriallized items are considered unique and as such would have a quantity max 1. This element is required and its presence asserts that the reource refers to a physical item.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getCount()
    {
        return $this->count;
    }


    /**
     * The Software version associated with the device, typically only used for devices with embedded software or firmware.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setCurrentSWVersion($currentSWVersion)
    {
        if (null === $currentSWVersion) {
            return $this; 
        }
        if (is_scalar($currentSWVersion)) {
            $currentSWVersion = new FHIRString($currentSWVersion);
        }
        if (!($currentSWVersion instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRItemInstance::setCurrentSWVersion - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($currentSWVersion)
            ));
        }
        $this->currentSWVersion = $currentSWVersion;
        return $this;
    }

    /**
     * The Software version associated with the device, typically only used for devices with embedded software or firmware.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCurrentSWVersion()
    {
        return $this->currentSWVersion;
    }


    /**
     * The expiry or preparation date and time.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setExpiryDate($expiryDate)
    {
        if (null === $expiryDate) {
            return $this; 
        }
        if (is_scalar($expiryDate)) {
            $expiryDate = new FHIRDateTime($expiryDate);
        }
        if (!($expiryDate instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRItemInstance::setExpiryDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($expiryDate)
            ));
        }
        $this->expiryDate = $expiryDate;
        return $this;
    }

    /**
     * The expiry or preparation date and time.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }


    /**
     * The location where the item is phisically located.
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
     * The location where the item is phisically located.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }


    /**
     * The lot or batch number.
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
                'FHIRItemInstance::setLotNumber - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($lotNumber)
            ));
        }
        $this->lotNumber = $lotNumber;
        return $this;
    }

    /**
     * The lot or batch number.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLotNumber()
    {
        return $this->lotNumber;
    }


    /**
     * The manufacture or preparation date and time. Times are necessary for several examples - for example biologically derived products, prepared or coumpounded medication, rapidly decaying isotopes.
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
                'FHIRItemInstance::setManufactureDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($manufactureDate)
            ));
        }
        $this->manufactureDate = $manufactureDate;
        return $this;
    }

    /**
     * The manufacture or preparation date and time. Times are necessary for several examples - for example biologically derived products, prepared or coumpounded medication, rapidly decaying isotopes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getManufactureDate()
    {
        return $this->manufactureDate;
    }


    /**
     * The serial number if available.
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
                'FHIRItemInstance::setSerialNumber - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($serialNumber)
            ));
        }
        $this->serialNumber = $serialNumber;
        return $this;
    }

    /**
     * The serial number if available.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }


    /**
     * The patient that the item is associated with (implanted in, given to).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSubject(FHIRReference $subject = null)
    {
        if (null === $subject) {
            return $this; 
        }
        $this->subject = $subject;
        return $this;
    }

    /**
     * The patient that the item is associated with (implanted in, given to).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
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
        if (null !== ($v = $this->getCarrierAIDC())) {
            $a['carrierAIDC'] = $v;
        }
        if (null !== ($v = $this->getCarrierHRF())) {
            $a['carrierHRF'] = $v;
        }
        if (null !== ($v = $this->getCount())) {
            $a['count'] = $v;
        }
        if (null !== ($v = $this->getCurrentSWVersion())) {
            $a['currentSWVersion'] = $v;
        }
        if (null !== ($v = $this->getExpiryDate())) {
            $a['expiryDate'] = $v;
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
        if (null !== ($v = $this->getSerialNumber())) {
            $a['serialNumber'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
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
            $sxe = new \SimpleXMLElement('<ItemInstance xmlns="http://hl7.org/fhir"></ItemInstance>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}