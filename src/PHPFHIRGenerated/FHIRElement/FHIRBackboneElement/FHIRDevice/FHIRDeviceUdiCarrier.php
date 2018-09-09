<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice;

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
use PHPFHIRGenerated\FHIRElement\FHIRBase64Binary;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUDIEntryType;
use PHPFHIRGenerated\FHIRElement\FHIRUri;

/**
 * This resource identifies a type of a manufactured item that is used in the provision of healthcare without being substantially changed through that activity. The device may be a medical or non-medical device.  Medical devices include durable (reusable) medical equipment, implantable devices, as well as disposable equipment used for diagnostic, treatment, and research for healthcare and public health.  Non-medical devices may include items such as a machine, cellphone, computer, application, etc. This is the catalog description of a device (not the specific instance).
 *
 * Class FHIRDeviceUdiCarrier
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice
 */
class FHIRDeviceUdiCarrier extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Device.UdiCarrier';

    /**
     * The full UDI carrier of the Automatic Identification and Data Capture (AIDC) technology representation of the barcode string as printed on the packaging of the device - e.g., a barcode or RFID.   Because of limitations on character sets in XML and the need to round-trip JSON data through XML, AIDC Formats *SHALL* be base64 encoded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $carrierAIDC = null;

    /**
     * The full UDI carrier as the human readable form (HRF) representation of the barcode string as printed on the packaging of the device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $carrierHRF = null;

    /**
     * The device identifier (DI) is a mandatory, fixed portion of a UDI that identifies the labeler and the specific version or model of a device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $deviceIdentifier = null;

    /**
     * A coded entry to indicate how the data was entered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUDIEntryType
     */
    public $entryType = null;

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
     * The identity of the authoritative source for UDI generation within a  jurisdiction.  All UDIs are globally unique within a single namespace with the appropriate repository uri as the system.  For example,  UDIs of devices managed in the U.S. by the FDA, the value is  http://hl7.org/fhir/NamingSystem/fda-udi.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $jurisdiction = null;

    /**
     * FHIRDeviceUdiCarrier Constructor
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
            if (isset($data['deviceIdentifier'])) {
                $this->setDeviceIdentifier($data['deviceIdentifier']);
            }
            if (isset($data['entryType'])) {
                $this->setEntryType($data['entryType']);
            }
            if (isset($data['issuer'])) {
                $this->setIssuer($data['issuer']);
            }
            if (isset($data['jurisdiction'])) {
                $this->setJurisdiction($data['jurisdiction']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The full UDI carrier of the Automatic Identification and Data Capture (AIDC) technology representation of the barcode string as printed on the packaging of the device - e.g., a barcode or RFID.   Because of limitations on character sets in XML and the need to round-trip JSON data through XML, AIDC Formats *SHALL* be base64 encoded.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     * @return $this
     */
    public function setCarrierAIDC($carrierAIDC)
    {
        if (null === $carrierAIDC) {
            return $this; 
        }
        if (is_scalar($carrierAIDC)) {
            $carrierAIDC = new FHIRBase64Binary($carrierAIDC);
        }
        if (!($carrierAIDC instanceof FHIRBase64Binary)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceUdiCarrier::setCarrierAIDC - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary or appropriate scalar value, %s seen.',
                gettype($carrierAIDC)
            ));
        }
        $this->carrierAIDC = $carrierAIDC;
        return $this;
    }

    /**
     * The full UDI carrier of the Automatic Identification and Data Capture (AIDC) technology representation of the barcode string as printed on the packaging of the device - e.g., a barcode or RFID.   Because of limitations on character sets in XML and the need to round-trip JSON data through XML, AIDC Formats *SHALL* be base64 encoded.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getCarrierAIDC()
    {
        return $this->carrierAIDC;
    }


    /**
     * The full UDI carrier as the human readable form (HRF) representation of the barcode string as printed on the packaging of the device.
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
                'FHIRDeviceUdiCarrier::setCarrierHRF - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($carrierHRF)
            ));
        }
        $this->carrierHRF = $carrierHRF;
        return $this;
    }

    /**
     * The full UDI carrier as the human readable form (HRF) representation of the barcode string as printed on the packaging of the device.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCarrierHRF()
    {
        return $this->carrierHRF;
    }


    /**
     * The device identifier (DI) is a mandatory, fixed portion of a UDI that identifies the labeler and the specific version or model of a device.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDeviceIdentifier($deviceIdentifier)
    {
        if (null === $deviceIdentifier) {
            return $this; 
        }
        if (is_scalar($deviceIdentifier)) {
            $deviceIdentifier = new FHIRString($deviceIdentifier);
        }
        if (!($deviceIdentifier instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceUdiCarrier::setDeviceIdentifier - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($deviceIdentifier)
            ));
        }
        $this->deviceIdentifier = $deviceIdentifier;
        return $this;
    }

    /**
     * The device identifier (DI) is a mandatory, fixed portion of a UDI that identifies the labeler and the specific version or model of a device.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDeviceIdentifier()
    {
        return $this->deviceIdentifier;
    }


    /**
     * A coded entry to indicate how the data was entered.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUDIEntryType
     * @return $this
     */
    public function setEntryType($entryType)
    {
        if (null === $entryType) {
            return $this; 
        }
        if (is_scalar($entryType)) {
            $entryType = new FHIRUDIEntryType($entryType);
        }
        if (!($entryType instanceof FHIRUDIEntryType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceUdiCarrier::setEntryType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUDIEntryType or appropriate scalar value, %s seen.',
                gettype($entryType)
            ));
        }
        $this->entryType = $entryType;
        return $this;
    }

    /**
     * A coded entry to indicate how the data was entered.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUDIEntryType
     */
    public function getEntryType()
    {
        return $this->entryType;
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
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setIssuer($issuer)
    {
        if (null === $issuer) {
            return $this; 
        }
        if (is_scalar($issuer)) {
            $issuer = new FHIRUri($issuer);
        }
        if (!($issuer instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceUdiCarrier::setIssuer - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($issuer)
            ));
        }
        $this->issuer = $issuer;
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
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getIssuer()
    {
        return $this->issuer;
    }


    /**
     * The identity of the authoritative source for UDI generation within a  jurisdiction.  All UDIs are globally unique within a single namespace with the appropriate repository uri as the system.  For example,  UDIs of devices managed in the U.S. by the FDA, the value is  http://hl7.org/fhir/NamingSystem/fda-udi.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setJurisdiction($jurisdiction)
    {
        if (null === $jurisdiction) {
            return $this; 
        }
        if (is_scalar($jurisdiction)) {
            $jurisdiction = new FHIRUri($jurisdiction);
        }
        if (!($jurisdiction instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceUdiCarrier::setJurisdiction - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($jurisdiction)
            ));
        }
        $this->jurisdiction = $jurisdiction;
        return $this;
    }

    /**
     * The identity of the authoritative source for UDI generation within a  jurisdiction.  All UDIs are globally unique within a single namespace with the appropriate repository uri as the system.  For example,  UDIs of devices managed in the U.S. by the FDA, the value is  http://hl7.org/fhir/NamingSystem/fda-udi.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
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
        if (null !== ($v = $this->getCarrierAIDC())) {
            $a['carrierAIDC'] = $v;
        }
        if (null !== ($v = $this->getCarrierHRF())) {
            $a['carrierHRF'] = $v;
        }
        if (null !== ($v = $this->getDeviceIdentifier())) {
            $a['deviceIdentifier'] = $v;
        }
        if (null !== ($v = $this->getEntryType())) {
            $a['entryType'] = $v;
        }
        if (null !== ($v = $this->getIssuer())) {
            $a['issuer'] = $v;
        }
        if (null !== ($v = $this->getJurisdiction())) {
            $a['jurisdiction'] = $v;
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
            $sxe = new \SimpleXMLElement('<DeviceUdiCarrier xmlns="http://hl7.org/fhir"></DeviceUdiCarrier>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}