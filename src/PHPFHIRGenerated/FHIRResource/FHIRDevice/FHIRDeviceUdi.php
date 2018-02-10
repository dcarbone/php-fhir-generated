<?php namespace PHPFHIRGenerated\FHIRResource\FHIRDevice;

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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * This resource identifies an instance or a type of a manufactured item that is used in the provision of healthcare without being substantially changed through that activity. The device may be a medical or non-medical device.  Medical devices include durable (reusable) medical equipment, implantable devices, as well as disposable equipment used for diagnostic, treatment, and research for healthcare and public health.  Non-medical devices may include items such as a machine, cellphone, computer, application, etc.
 */
class FHIRDeviceUdi extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The device identifier (DI) is a mandatory, fixed portion of a UDI that identifies the labeler and the specific version or model of a device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $deviceIdentifier = null;

    /**
     * Name of device as used in labeling or catalog.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The identity of the authoritative source for UDI generation within a  jurisdiction.  All UDIs are globally unique within a single namespace. with the appropriate repository uri as the system.  For example,  UDIs of devices managed in the U.S. by the FDA, the value is  http://hl7.org/fhir/NamingSystem/fda-udi.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $jurisdiction = null;

    /**
     * The full UDI carrier as the human readable form (HRF) representation of the barcode string as printed on the packaging of the device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $carrierHRF = null;

    /**
     * The full UDI carrier of the Automatic Identification and Data Capture (AIDC) technology representation of the barcode string as printed on the packaging of the device - E.g a barcode or RFID.   Because of limitations on character sets in XML and the need to round-trip JSON data through XML, AIDC Formats *SHALL* be base64 encoded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $carrierAIDC = null;

    /**
     * Organization that is charged with issuing UDIs for devices.  For example, the US FDA issuers include :
1) GS1: 
http://hl7.org/fhir/NamingSystem/gs1-di, 
2) HIBCC:
http://hl7.org/fhir/NamingSystem/hibcc-dI, 
3) ICCBBA for blood containers:
http://hl7.org/fhir/NamingSystem/iccbba-blood-di, 
4) ICCBA for other devices:
http://hl7.org/fhir/NamingSystem/iccbba-other-di.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $issuer = null;

    /**
     * A coded entry to indicate how the data was entered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUDIEntryType
     */
    public $entryType = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Device.Udi';

    /**
     * The device identifier (DI) is a mandatory, fixed portion of a UDI that identifies the labeler and the specific version or model of a device.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDeviceIdentifier()
    {
        return $this->deviceIdentifier;
    }

    /**
     * The device identifier (DI) is a mandatory, fixed portion of a UDI that identifies the labeler and the specific version or model of a device.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $deviceIdentifier
     * @return $this
     */
    public function setDeviceIdentifier($deviceIdentifier)
    {
        $this->deviceIdentifier = $deviceIdentifier;
        return $this;
    }

    /**
     * Name of device as used in labeling or catalog.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of device as used in labeling or catalog.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * The identity of the authoritative source for UDI generation within a  jurisdiction.  All UDIs are globally unique within a single namespace. with the appropriate repository uri as the system.  For example,  UDIs of devices managed in the U.S. by the FDA, the value is  http://hl7.org/fhir/NamingSystem/fda-udi.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * The identity of the authoritative source for UDI generation within a  jurisdiction.  All UDIs are globally unique within a single namespace. with the appropriate repository uri as the system.  For example,  UDIs of devices managed in the U.S. by the FDA, the value is  http://hl7.org/fhir/NamingSystem/fda-udi.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $jurisdiction
     * @return $this
     */
    public function setJurisdiction($jurisdiction)
    {
        $this->jurisdiction = $jurisdiction;
        return $this;
    }

    /**
     * The full UDI carrier as the human readable form (HRF) representation of the barcode string as printed on the packaging of the device.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCarrierHRF()
    {
        return $this->carrierHRF;
    }

    /**
     * The full UDI carrier as the human readable form (HRF) representation of the barcode string as printed on the packaging of the device.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $carrierHRF
     * @return $this
     */
    public function setCarrierHRF($carrierHRF)
    {
        $this->carrierHRF = $carrierHRF;
        return $this;
    }

    /**
     * The full UDI carrier of the Automatic Identification and Data Capture (AIDC) technology representation of the barcode string as printed on the packaging of the device - E.g a barcode or RFID.   Because of limitations on character sets in XML and the need to round-trip JSON data through XML, AIDC Formats *SHALL* be base64 encoded.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getCarrierAIDC()
    {
        return $this->carrierAIDC;
    }

    /**
     * The full UDI carrier of the Automatic Identification and Data Capture (AIDC) technology representation of the barcode string as printed on the packaging of the device - E.g a barcode or RFID.   Because of limitations on character sets in XML and the need to round-trip JSON data through XML, AIDC Formats *SHALL* be base64 encoded.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary $carrierAIDC
     * @return $this
     */
    public function setCarrierAIDC($carrierAIDC)
    {
        $this->carrierAIDC = $carrierAIDC;
        return $this;
    }

    /**
     * Organization that is charged with issuing UDIs for devices.  For example, the US FDA issuers include :
1) GS1: 
http://hl7.org/fhir/NamingSystem/gs1-di, 
2) HIBCC:
http://hl7.org/fhir/NamingSystem/hibcc-dI, 
3) ICCBBA for blood containers:
http://hl7.org/fhir/NamingSystem/iccbba-blood-di, 
4) ICCBA for other devices:
http://hl7.org/fhir/NamingSystem/iccbba-other-di.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * Organization that is charged with issuing UDIs for devices.  For example, the US FDA issuers include :
1) GS1: 
http://hl7.org/fhir/NamingSystem/gs1-di, 
2) HIBCC:
http://hl7.org/fhir/NamingSystem/hibcc-dI, 
3) ICCBBA for blood containers:
http://hl7.org/fhir/NamingSystem/iccbba-blood-di, 
4) ICCBA for other devices:
http://hl7.org/fhir/NamingSystem/iccbba-other-di.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $issuer
     * @return $this
     */
    public function setIssuer($issuer)
    {
        $this->issuer = $issuer;
        return $this;
    }

    /**
     * A coded entry to indicate how the data was entered.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUDIEntryType
     */
    public function getEntryType()
    {
        return $this->entryType;
    }

    /**
     * A coded entry to indicate how the data was entered.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUDIEntryType $entryType
     * @return $this
     */
    public function setEntryType($entryType)
    {
        $this->entryType = $entryType;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->deviceIdentifier) $json['deviceIdentifier'] = $this->deviceIdentifier;
        if (null !== $this->name) $json['name'] = $this->name;
        if (null !== $this->jurisdiction) $json['jurisdiction'] = $this->jurisdiction;
        if (null !== $this->carrierHRF) $json['carrierHRF'] = $this->carrierHRF;
        if (null !== $this->carrierAIDC) $json['carrierAIDC'] = $this->carrierAIDC;
        if (null !== $this->issuer) $json['issuer'] = $this->issuer;
        if (null !== $this->entryType) $json['entryType'] = $this->entryType;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<DeviceUdi xmlns="http://hl7.org/fhir"></DeviceUdi>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->deviceIdentifier) $this->deviceIdentifier->xmlSerialize(true, $sxe->addChild('deviceIdentifier'));
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->jurisdiction) $this->jurisdiction->xmlSerialize(true, $sxe->addChild('jurisdiction'));
        if (null !== $this->carrierHRF) $this->carrierHRF->xmlSerialize(true, $sxe->addChild('carrierHRF'));
        if (null !== $this->carrierAIDC) $this->carrierAIDC->xmlSerialize(true, $sxe->addChild('carrierAIDC'));
        if (null !== $this->issuer) $this->issuer->xmlSerialize(true, $sxe->addChild('issuer'));
        if (null !== $this->entryType) $this->entryType->xmlSerialize(true, $sxe->addChild('entryType'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}