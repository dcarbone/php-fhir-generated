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
 * A physical, countable instance of an item, for example one box or one unit.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRItemInstance extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * The quantity or amount of instances. For example if several units are being counted for inventory, this quantity can be more than one, provided they are not unique. Seriallized items are considered unique and as such would have a quantity max 1. This element is required and its presence asserts that the reource refers to a physical item.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $count = null;

    /**
     * The location where the item is phisically located.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * The patient that the item is associated with (implanted in, given to).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The manufacture or preparation date and time. Times are necessary for several examples - for example biologically derived products, prepared or coumpounded medication, rapidly decaying isotopes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $manufactureDate = null;

    /**
     * The expiry or preparation date and time.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $expiryDate = null;

    /**
     * The Software version associated with the device, typically only used for devices with embedded software or firmware.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $currentSWVersion = null;

    /**
     * The lot or batch number.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $lotNumber = null;

    /**
     * The serial number if available.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $serialNumber = null;

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
     * @var string
     */
    private $_fhirElementName = 'ItemInstance';

    /**
     * The quantity or amount of instances. For example if several units are being counted for inventory, this quantity can be more than one, provided they are not unique. Seriallized items are considered unique and as such would have a quantity max 1. This element is required and its presence asserts that the reource refers to a physical item.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getCount() {
        return $this->count;
    }

    /**
     * The quantity or amount of instances. For example if several units are being counted for inventory, this quantity can be more than one, provided they are not unique. Seriallized items are considered unique and as such would have a quantity max 1. This element is required and its presence asserts that the reource refers to a physical item.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $count
     * @return $this
     */
    public function setCount($count) {
        $this->count = $count;
        return $this;
    }

    /**
     * The location where the item is phisically located.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation() {
        return $this->location;
    }

    /**
     * The location where the item is phisically located.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $location
     * @return $this
     */
    public function setLocation($location) {
        $this->location = $location;
        return $this;
    }

    /**
     * The patient that the item is associated with (implanted in, given to).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * The patient that the item is associated with (implanted in, given to).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject) {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The manufacture or preparation date and time. Times are necessary for several examples - for example biologically derived products, prepared or coumpounded medication, rapidly decaying isotopes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getManufactureDate() {
        return $this->manufactureDate;
    }

    /**
     * The manufacture or preparation date and time. Times are necessary for several examples - for example biologically derived products, prepared or coumpounded medication, rapidly decaying isotopes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $manufactureDate
     * @return $this
     */
    public function setManufactureDate($manufactureDate) {
        $this->manufactureDate = $manufactureDate;
        return $this;
    }

    /**
     * The expiry or preparation date and time.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getExpiryDate() {
        return $this->expiryDate;
    }

    /**
     * The expiry or preparation date and time.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $expiryDate
     * @return $this
     */
    public function setExpiryDate($expiryDate) {
        $this->expiryDate = $expiryDate;
        return $this;
    }

    /**
     * The Software version associated with the device, typically only used for devices with embedded software or firmware.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCurrentSWVersion() {
        return $this->currentSWVersion;
    }

    /**
     * The Software version associated with the device, typically only used for devices with embedded software or firmware.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $currentSWVersion
     * @return $this
     */
    public function setCurrentSWVersion($currentSWVersion) {
        $this->currentSWVersion = $currentSWVersion;
        return $this;
    }

    /**
     * The lot or batch number.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLotNumber() {
        return $this->lotNumber;
    }

    /**
     * The lot or batch number.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $lotNumber
     * @return $this
     */
    public function setLotNumber($lotNumber) {
        $this->lotNumber = $lotNumber;
        return $this;
    }

    /**
     * The serial number if available.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSerialNumber() {
        return $this->serialNumber;
    }

    /**
     * The serial number if available.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $serialNumber
     * @return $this
     */
    public function setSerialNumber($serialNumber) {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    /**
     * The machine-readable AIDC string in base64 encoding. Can correspond to the UDI pattern in devices.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCarrierAIDC() {
        return $this->carrierAIDC;
    }

    /**
     * The machine-readable AIDC string in base64 encoding. Can correspond to the UDI pattern in devices.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $carrierAIDC
     * @return $this
     */
    public function setCarrierAIDC($carrierAIDC) {
        $this->carrierAIDC = $carrierAIDC;
        return $this;
    }

    /**
     * The human-readable barcode string. Can correspond to the UDI pattern in devices.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCarrierHRF() {
        return $this->carrierHRF;
    }

    /**
     * The human-readable barcode string. Can correspond to the UDI pattern in devices.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $carrierHRF
     * @return $this
     */
    public function setCarrierHRF($carrierHRF) {
        $this->carrierHRF = $carrierHRF;
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
            if (isset($data['count'])) {
                $this->setCount($data['count']);
            }
            if (isset($data['location'])) {
                $this->setLocation($data['location']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['manufactureDate'])) {
                $this->setManufactureDate($data['manufactureDate']);
            }
            if (isset($data['expiryDate'])) {
                $this->setExpiryDate($data['expiryDate']);
            }
            if (isset($data['currentSWVersion'])) {
                $this->setCurrentSWVersion($data['currentSWVersion']);
            }
            if (isset($data['lotNumber'])) {
                $this->setLotNumber($data['lotNumber']);
            }
            if (isset($data['serialNumber'])) {
                $this->setSerialNumber($data['serialNumber']);
            }
            if (isset($data['carrierAIDC'])) {
                $this->setCarrierAIDC($data['carrierAIDC']);
            }
            if (isset($data['carrierHRF'])) {
                $this->setCarrierHRF($data['carrierHRF']);
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
        if (isset($this->count)) $json['count'] = $this->count;
        if (isset($this->location)) $json['location'] = $this->location;
        if (isset($this->subject)) $json['subject'] = $this->subject;
        if (isset($this->manufactureDate)) $json['manufactureDate'] = $this->manufactureDate;
        if (isset($this->expiryDate)) $json['expiryDate'] = $this->expiryDate;
        if (isset($this->currentSWVersion)) $json['currentSWVersion'] = $this->currentSWVersion;
        if (isset($this->lotNumber)) $json['lotNumber'] = $this->lotNumber;
        if (isset($this->serialNumber)) $json['serialNumber'] = $this->serialNumber;
        if (isset($this->carrierAIDC)) $json['carrierAIDC'] = $this->carrierAIDC;
        if (isset($this->carrierHRF)) $json['carrierHRF'] = $this->carrierHRF;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ItemInstance xmlns="http://hl7.org/fhir"></ItemInstance>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->count)) $this->count->xmlSerialize(true, $sxe->addChild('count'));
        if (isset($this->location)) $this->location->xmlSerialize(true, $sxe->addChild('location'));
        if (isset($this->subject)) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (isset($this->manufactureDate)) $this->manufactureDate->xmlSerialize(true, $sxe->addChild('manufactureDate'));
        if (isset($this->expiryDate)) $this->expiryDate->xmlSerialize(true, $sxe->addChild('expiryDate'));
        if (isset($this->currentSWVersion)) $this->currentSWVersion->xmlSerialize(true, $sxe->addChild('currentSWVersion'));
        if (isset($this->lotNumber)) $this->lotNumber->xmlSerialize(true, $sxe->addChild('lotNumber'));
        if (isset($this->serialNumber)) $this->serialNumber->xmlSerialize(true, $sxe->addChild('serialNumber'));
        if (isset($this->carrierAIDC)) $this->carrierAIDC->xmlSerialize(true, $sxe->addChild('carrierAIDC'));
        if (isset($this->carrierHRF)) $this->carrierHRF->xmlSerialize(true, $sxe->addChild('carrierHRF'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}