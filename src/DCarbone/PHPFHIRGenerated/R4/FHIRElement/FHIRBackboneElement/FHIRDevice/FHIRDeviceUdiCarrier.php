<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 17th, 2019 04:21+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBase64Binary;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUDIEntryType;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A type of a manufactured item that is used in the provision of healthcare
 * without being substantially changed through that activity. The device may be a
 * medical or non-medical device.
 *
 * Class FHIRDeviceUdiCarrier
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice
 */
class FHIRDeviceUdiCarrier extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DEVICE_DOT_UDI_CARRIER;
    const FIELD_CARRIER_AIDC = 'carrierAIDC';
    const FIELD_CARRIER_AIDC_EXT = '_carrierAIDC';
    const FIELD_CARRIER_HRF = 'carrierHRF';
    const FIELD_CARRIER_HRF_EXT = '_carrierHRF';
    const FIELD_DEVICE_IDENTIFIER = 'deviceIdentifier';
    const FIELD_DEVICE_IDENTIFIER_EXT = '_deviceIdentifier';
    const FIELD_ENTRY_TYPE = 'entryType';
    const FIELD_ENTRY_TYPE_EXT = '_entryType';
    const FIELD_ISSUER = 'issuer';
    const FIELD_ISSUER_EXT = '_issuer';
    const FIELD_JURISDICTION = 'jurisdiction';
    const FIELD_JURISDICTION_EXT = '_jurisdiction';

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The full UDI carrier of the Automatic Identification and Data Capture (AIDC)
     * technology representation of the barcode string as printed on the packaging of
     * the device - e.g., a barcode or RFID. Because of limitations on character sets
     * in XML and the need to round-trip JSON data through XML, AIDC Formats *SHALL* be
     * base64 encoded.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBase64Binary
     */
    protected $carrierAIDC = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The full UDI carrier as the human readable form (HRF) representation of the
     * barcode string as printed on the packaging of the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $carrierHRF = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The device identifier (DI) is a mandatory, fixed portion of a UDI that
     * identifies the labeler and the specific version or model of a device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $deviceIdentifier = null;

    /**
     * Codes to identify how UDI data was entered.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A coded entry to indicate how the data was entered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUDIEntryType
     */
    protected $entryType = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Organization that is charged with issuing UDIs for devices. For example, the US
     * FDA issuers include : 1) GS1: http://hl7.org/fhir/NamingSystem/gs1-di, 2) HIBCC:
     * http://hl7.org/fhir/NamingSystem/hibcc-dI, 3) ICCBBA for blood containers:
     * http://hl7.org/fhir/NamingSystem/iccbba-blood-di, 4) ICCBA for other devices:
     * http://hl7.org/fhir/NamingSystem/iccbba-other-di.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    protected $issuer = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identity of the authoritative source for UDI generation within a
     * jurisdiction. All UDIs are globally unique within a single namespace with the
     * appropriate repository uri as the system. For example, UDIs of devices managed
     * in the U.S. by the FDA, the value is http://hl7.org/fhir/NamingSystem/fda-udi.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    protected $jurisdiction = null;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    /**
     * FHIRDeviceUdiCarrier Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceUdiCarrier::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CARRIER_AIDC])) {
            $ext = (isset($data[self::FIELD_CARRIER_AIDC_EXT]) && is_array($data[self::FIELD_CARRIER_AIDC_EXT]))
                ? $data[self::FIELD_CARRIER_AIDC_EXT]
                : null;
            if ($data[self::FIELD_CARRIER_AIDC] instanceof FHIRBase64Binary) {
                $this->setCarrierAIDC($data[self::FIELD_CARRIER_AIDC]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_CARRIER_AIDC])) {
                    $this->setCarrierAIDC(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $data[self::FIELD_CARRIER_AIDC]] + $ext));
                } else if (is_array($data[self::FIELD_CARRIER_AIDC])) {
                    $this->setCarrierAIDC(new FHIRBase64Binary(array_merge($ext, $data[self::FIELD_CARRIER_AIDC])));
                }
            } else {
                $this->setCarrierAIDC(new FHIRBase64Binary($data[self::FIELD_CARRIER_AIDC]));
            }
        }
        if (isset($data[self::FIELD_CARRIER_HRF])) {
            $ext = (isset($data[self::FIELD_CARRIER_HRF_EXT]) && is_array($data[self::FIELD_CARRIER_HRF_EXT]))
                ? $data[self::FIELD_CARRIER_HRF_EXT]
                : null;
            if ($data[self::FIELD_CARRIER_HRF] instanceof FHIRString) {
                $this->setCarrierHRF($data[self::FIELD_CARRIER_HRF]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_CARRIER_HRF])) {
                    $this->setCarrierHRF(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_CARRIER_HRF]] + $ext));
                } else if (is_array($data[self::FIELD_CARRIER_HRF])) {
                    $this->setCarrierHRF(new FHIRString(array_merge($ext, $data[self::FIELD_CARRIER_HRF])));
                }
            } else {
                $this->setCarrierHRF(new FHIRString($data[self::FIELD_CARRIER_HRF]));
            }
        }
        if (isset($data[self::FIELD_DEVICE_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_DEVICE_IDENTIFIER_EXT]) && is_array($data[self::FIELD_DEVICE_IDENTIFIER_EXT]))
                ? $data[self::FIELD_DEVICE_IDENTIFIER_EXT]
                : null;
            if ($data[self::FIELD_DEVICE_IDENTIFIER] instanceof FHIRString) {
                $this->setDeviceIdentifier($data[self::FIELD_DEVICE_IDENTIFIER]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DEVICE_IDENTIFIER])) {
                    $this->setDeviceIdentifier(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DEVICE_IDENTIFIER]] + $ext));
                } else if (is_array($data[self::FIELD_DEVICE_IDENTIFIER])) {
                    $this->setDeviceIdentifier(new FHIRString(array_merge($ext, $data[self::FIELD_DEVICE_IDENTIFIER])));
                }
            } else {
                $this->setDeviceIdentifier(new FHIRString($data[self::FIELD_DEVICE_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_ENTRY_TYPE])) {
            $ext = (isset($data[self::FIELD_ENTRY_TYPE_EXT]) && is_array($data[self::FIELD_ENTRY_TYPE_EXT]))
                ? $data[self::FIELD_ENTRY_TYPE_EXT]
                : null;
            if ($data[self::FIELD_ENTRY_TYPE] instanceof FHIRUDIEntryType) {
                $this->setEntryType($data[self::FIELD_ENTRY_TYPE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_ENTRY_TYPE])) {
                    $this->setEntryType(new FHIRUDIEntryType([FHIRUDIEntryType::FIELD_VALUE => $data[self::FIELD_ENTRY_TYPE]] + $ext));
                } else if (is_array($data[self::FIELD_ENTRY_TYPE])) {
                    $this->setEntryType(new FHIRUDIEntryType(array_merge($ext, $data[self::FIELD_ENTRY_TYPE])));
                }
            } else {
                $this->setEntryType(new FHIRUDIEntryType($data[self::FIELD_ENTRY_TYPE]));
            }
        }
        if (isset($data[self::FIELD_ISSUER])) {
            $ext = (isset($data[self::FIELD_ISSUER_EXT]) && is_array($data[self::FIELD_ISSUER_EXT]))
                ? $data[self::FIELD_ISSUER_EXT]
                : null;
            if ($data[self::FIELD_ISSUER] instanceof FHIRUri) {
                $this->setIssuer($data[self::FIELD_ISSUER]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_ISSUER])) {
                    $this->setIssuer(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_ISSUER]] + $ext));
                } else if (is_array($data[self::FIELD_ISSUER])) {
                    $this->setIssuer(new FHIRUri(array_merge($ext, $data[self::FIELD_ISSUER])));
                }
            } else {
                $this->setIssuer(new FHIRUri($data[self::FIELD_ISSUER]));
            }
        }
        if (isset($data[self::FIELD_JURISDICTION])) {
            $ext = (isset($data[self::FIELD_JURISDICTION_EXT]) && is_array($data[self::FIELD_JURISDICTION_EXT]))
                ? $data[self::FIELD_JURISDICTION_EXT]
                : null;
            if ($data[self::FIELD_JURISDICTION] instanceof FHIRUri) {
                $this->setJurisdiction($data[self::FIELD_JURISDICTION]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_JURISDICTION])) {
                    $this->setJurisdiction(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_JURISDICTION]] + $ext));
                } else if (is_array($data[self::FIELD_JURISDICTION])) {
                    $this->setJurisdiction(new FHIRUri(array_merge($ext, $data[self::FIELD_JURISDICTION])));
                }
            } else {
                $this->setJurisdiction(new FHIRUri($data[self::FIELD_JURISDICTION]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return static
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<DeviceUdiCarrier{$xmlns}></DeviceUdiCarrier>";
    }


    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The full UDI carrier of the Automatic Identification and Data Capture (AIDC)
     * technology representation of the barcode string as printed on the packaging of
     * the device - e.g., a barcode or RFID. Because of limitations on character sets
     * in XML and the need to round-trip JSON data through XML, AIDC Formats *SHALL* be
     * base64 encoded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBase64Binary
     */
    public function getCarrierAIDC()
    {
        return $this->carrierAIDC;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The full UDI carrier of the Automatic Identification and Data Capture (AIDC)
     * technology representation of the barcode string as printed on the packaging of
     * the device - e.g., a barcode or RFID. Because of limitations on character sets
     * in XML and the need to round-trip JSON data through XML, AIDC Formats *SHALL* be
     * base64 encoded.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBase64Binary $carrierAIDC
     * @return static
     */
    public function setCarrierAIDC($carrierAIDC = null)
    {
        if (null === $carrierAIDC) {
            $this->carrierAIDC = null;
            return $this;
        }
        if ($carrierAIDC instanceof FHIRBase64Binary) {
            $this->carrierAIDC = $carrierAIDC;
            return $this;
        }
        $this->carrierAIDC = new FHIRBase64Binary($carrierAIDC);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The full UDI carrier as the human readable form (HRF) representation of the
     * barcode string as printed on the packaging of the device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getCarrierHRF()
    {
        return $this->carrierHRF;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The full UDI carrier as the human readable form (HRF) representation of the
     * barcode string as printed on the packaging of the device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $carrierHRF
     * @return static
     */
    public function setCarrierHRF($carrierHRF = null)
    {
        if (null === $carrierHRF) {
            $this->carrierHRF = null;
            return $this;
        }
        if ($carrierHRF instanceof FHIRString) {
            $this->carrierHRF = $carrierHRF;
            return $this;
        }
        $this->carrierHRF = new FHIRString($carrierHRF);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The device identifier (DI) is a mandatory, fixed portion of a UDI that
     * identifies the labeler and the specific version or model of a device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDeviceIdentifier()
    {
        return $this->deviceIdentifier;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The device identifier (DI) is a mandatory, fixed portion of a UDI that
     * identifies the labeler and the specific version or model of a device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $deviceIdentifier
     * @return static
     */
    public function setDeviceIdentifier($deviceIdentifier = null)
    {
        if (null === $deviceIdentifier) {
            $this->deviceIdentifier = null;
            return $this;
        }
        if ($deviceIdentifier instanceof FHIRString) {
            $this->deviceIdentifier = $deviceIdentifier;
            return $this;
        }
        $this->deviceIdentifier = new FHIRString($deviceIdentifier);
        return $this;
    }

    /**
     * Codes to identify how UDI data was entered.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A coded entry to indicate how the data was entered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUDIEntryType
     */
    public function getEntryType()
    {
        return $this->entryType;
    }

    /**
     * Codes to identify how UDI data was entered.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A coded entry to indicate how the data was entered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUDIEntryType $entryType
     * @return static
     */
    public function setEntryType(FHIRUDIEntryType $entryType = null)
    {
        $this->entryType = $entryType;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Organization that is charged with issuing UDIs for devices. For example, the US
     * FDA issuers include : 1) GS1: http://hl7.org/fhir/NamingSystem/gs1-di, 2) HIBCC:
     * http://hl7.org/fhir/NamingSystem/hibcc-dI, 3) ICCBBA for blood containers:
     * http://hl7.org/fhir/NamingSystem/iccbba-blood-di, 4) ICCBA for other devices:
     * http://hl7.org/fhir/NamingSystem/iccbba-other-di.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Organization that is charged with issuing UDIs for devices. For example, the US
     * FDA issuers include : 1) GS1: http://hl7.org/fhir/NamingSystem/gs1-di, 2) HIBCC:
     * http://hl7.org/fhir/NamingSystem/hibcc-dI, 3) ICCBBA for blood containers:
     * http://hl7.org/fhir/NamingSystem/iccbba-blood-di, 4) ICCBA for other devices:
     * http://hl7.org/fhir/NamingSystem/iccbba-other-di.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $issuer
     * @return static
     */
    public function setIssuer($issuer = null)
    {
        if (null === $issuer) {
            $this->issuer = null;
            return $this;
        }
        if ($issuer instanceof FHIRUri) {
            $this->issuer = $issuer;
            return $this;
        }
        $this->issuer = new FHIRUri($issuer);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identity of the authoritative source for UDI generation within a
     * jurisdiction. All UDIs are globally unique within a single namespace with the
     * appropriate repository uri as the system. For example, UDIs of devices managed
     * in the U.S. by the FDA, the value is http://hl7.org/fhir/NamingSystem/fda-udi.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identity of the authoritative source for UDI generation within a
     * jurisdiction. All UDIs are globally unique within a single namespace with the
     * appropriate repository uri as the system. For example, UDIs of devices managed
     * in the U.S. by the FDA, the value is http://hl7.org/fhir/NamingSystem/fda-udi.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $jurisdiction
     * @return static
     */
    public function setJurisdiction($jurisdiction = null)
    {
        if (null === $jurisdiction) {
            $this->jurisdiction = null;
            return $this;
        }
        if ($jurisdiction instanceof FHIRUri) {
            $this->jurisdiction = $jurisdiction;
            return $this;
        }
        $this->jurisdiction = new FHIRUri($jurisdiction);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRDeviceUdiCarrier::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDeviceUdiCarrier::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRDeviceUdiCarrier;
        } elseif (!is_object($type) || !($type instanceof FHIRDeviceUdiCarrier)) {
            throw new \RuntimeException(sprintf(
                'FHIRDeviceUdiCarrier::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->carrierAIDC)) {
            $type->setCarrierAIDC((string)$attributes->carrierAIDC);
        }
        if (isset($children->carrierAIDC)) {
            $type->setCarrierAIDC(FHIRBase64Binary::xmlUnserialize($children->carrierAIDC));
        }
        if (isset($attributes->carrierHRF)) {
            $type->setCarrierHRF((string)$attributes->carrierHRF);
        }
        if (isset($children->carrierHRF)) {
            $type->setCarrierHRF(FHIRString::xmlUnserialize($children->carrierHRF));
        }
        if (isset($attributes->deviceIdentifier)) {
            $type->setDeviceIdentifier((string)$attributes->deviceIdentifier);
        }
        if (isset($children->deviceIdentifier)) {
            $type->setDeviceIdentifier(FHIRString::xmlUnserialize($children->deviceIdentifier));
        }
        if (isset($children->entryType)) {
            $type->setEntryType(FHIRUDIEntryType::xmlUnserialize($children->entryType));
        }
        if (isset($attributes->issuer)) {
            $type->setIssuer((string)$attributes->issuer);
        }
        if (isset($children->issuer)) {
            $type->setIssuer(FHIRUri::xmlUnserialize($children->issuer));
        }
        if (isset($attributes->jurisdiction)) {
            $type->setJurisdiction((string)$attributes->jurisdiction);
        }
        if (isset($children->jurisdiction)) {
            $type->setJurisdiction(FHIRUri::xmlUnserialize($children->jurisdiction));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getCarrierAIDC())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CARRIER_AIDC, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCarrierHRF())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CARRIER_HRF, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDeviceIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEVICE_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getEntryType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ENTRY_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIssuer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ISSUER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getJurisdiction())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_JURISDICTION, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCarrierAIDC())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_CARRIER_AIDC] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_CARRIER_AIDC_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_CARRIER_AIDC] = $v;
            }
        }
        if (null !== ($v = $this->getCarrierHRF())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_CARRIER_HRF] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_CARRIER_HRF_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_CARRIER_HRF] = $v;
            }
        }
        if (null !== ($v = $this->getDeviceIdentifier())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DEVICE_IDENTIFIER] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DEVICE_IDENTIFIER_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DEVICE_IDENTIFIER] = $v;
            }
        }
        if (null !== ($v = $this->getEntryType())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_ENTRY_TYPE] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_ENTRY_TYPE_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_ENTRY_TYPE] = $v;
            }
        }
        if (null !== ($v = $this->getIssuer())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_ISSUER] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_ISSUER_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_ISSUER] = $v;
            }
        }
        if (null !== ($v = $this->getJurisdiction())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_JURISDICTION] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_JURISDICTION_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_JURISDICTION] = $v;
            }
        }
        return $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}