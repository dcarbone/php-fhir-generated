<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRDevice;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUDIEntryType;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * This resource identifies an instance or a type of a manufactured item that is
 * used in the provision of healthcare without being substantially changed through
 * that activity. The device may be a medical or non-medical device. Medical
 * devices include durable (reusable) medical equipment, implantable devices, as
 * well as disposable equipment used for diagnostic, treatment, and research for
 * healthcare and public health. Non-medical devices may include items such as a
 * machine, cellphone, computer, application, etc.
 *
 * Class FHIRDeviceUdi
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRDevice
 */
class FHIRDeviceUdi extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DEVICE_DOT_UDI;
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
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The full UDI carrier of the Automatic Identification and Data Capture (AIDC)
     * technology representation of the barcode string as printed on the packaging of
     * the device - E.g a barcode or RFID. Because of limitations on character sets in
     * XML and the need to round-trip JSON data through XML, AIDC Formats *SHALL* be
     * base64 encoded.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary
     */
    protected $carrierAIDC = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The full UDI carrier as the human readable form (HRF) representation of the
     * barcode string as printed on the packaging of the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $carrierHRF = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The device identifier (DI) is a mandatory, fixed portion of a UDI that
     * identifies the labeler and the specific version or model of a device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $deviceIdentifier = null;

    /**
     * Codes to identify how UDI data was entered
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A coded entry to indicate how the data was entered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUDIEntryType
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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected $issuer = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identity of the authoritative source for UDI generation within a
     * jurisdiction. All UDIs are globally unique within a single namespace. with the
     * appropriate repository uri as the system. For example, UDIs of devices managed
     * in the U.S. by the FDA, the value is http://hl7.org/fhir/NamingSystem/fda-udi.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected $jurisdiction = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Name of device as used in labeling or catalog.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $name = null;

    /**
     * Validation map for fields in type Device.Udi
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRDeviceUdi Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceUdi::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CARRIER_AIDC]) || isset($data[self::FIELD_CARRIER_AIDC_EXT])) {
            if (isset($data[self::FIELD_CARRIER_AIDC])) {
                $value = $data[self::FIELD_CARRIER_AIDC];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CARRIER_AIDC_EXT]) && is_array($data[self::FIELD_CARRIER_AIDC_EXT])) {
                $ext = $data[self::FIELD_CARRIER_AIDC_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBase64Binary) {
                    $this->setCarrierAIDC($value);
                } else if (is_array($value)) {
                    $this->setCarrierAIDC(new FHIRBase64Binary(array_merge($ext, $value)));
                } else {
                    $this->setCarrierAIDC(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCarrierAIDC(new FHIRBase64Binary($ext));
            }
        }
        if (isset($data[self::FIELD_CARRIER_HRF]) || isset($data[self::FIELD_CARRIER_HRF_EXT])) {
            if (isset($data[self::FIELD_CARRIER_HRF])) {
                $value = $data[self::FIELD_CARRIER_HRF];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CARRIER_HRF_EXT]) && is_array($data[self::FIELD_CARRIER_HRF_EXT])) {
                $ext = $data[self::FIELD_CARRIER_HRF_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setCarrierHRF($value);
                } else if (is_array($value)) {
                    $this->setCarrierHRF(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCarrierHRF(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCarrierHRF(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_DEVICE_IDENTIFIER]) || isset($data[self::FIELD_DEVICE_IDENTIFIER_EXT])) {
            if (isset($data[self::FIELD_DEVICE_IDENTIFIER])) {
                $value = $data[self::FIELD_DEVICE_IDENTIFIER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DEVICE_IDENTIFIER_EXT]) && is_array($data[self::FIELD_DEVICE_IDENTIFIER_EXT])) {
                $ext = $data[self::FIELD_DEVICE_IDENTIFIER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDeviceIdentifier($value);
                } else if (is_array($value)) {
                    $this->setDeviceIdentifier(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDeviceIdentifier(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDeviceIdentifier(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_ENTRY_TYPE]) || isset($data[self::FIELD_ENTRY_TYPE_EXT])) {
            if (isset($data[self::FIELD_ENTRY_TYPE])) {
                $value = $data[self::FIELD_ENTRY_TYPE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ENTRY_TYPE_EXT]) && is_array($data[self::FIELD_ENTRY_TYPE_EXT])) {
                $ext = $data[self::FIELD_ENTRY_TYPE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUDIEntryType) {
                    $this->setEntryType($value);
                } else if (is_array($value)) {
                    $this->setEntryType(new FHIRUDIEntryType(array_merge($ext, $value)));
                } else {
                    $this->setEntryType(new FHIRUDIEntryType([FHIRUDIEntryType::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setEntryType(new FHIRUDIEntryType($ext));
            }
        }
        if (isset($data[self::FIELD_ISSUER]) || isset($data[self::FIELD_ISSUER_EXT])) {
            if (isset($data[self::FIELD_ISSUER])) {
                $value = $data[self::FIELD_ISSUER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ISSUER_EXT]) && is_array($data[self::FIELD_ISSUER_EXT])) {
                $ext = $data[self::FIELD_ISSUER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setIssuer($value);
                } else if (is_array($value)) {
                    $this->setIssuer(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setIssuer(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setIssuer(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_JURISDICTION]) || isset($data[self::FIELD_JURISDICTION_EXT])) {
            if (isset($data[self::FIELD_JURISDICTION])) {
                $value = $data[self::FIELD_JURISDICTION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_JURISDICTION_EXT]) && is_array($data[self::FIELD_JURISDICTION_EXT])) {
                $ext = $data[self::FIELD_JURISDICTION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setJurisdiction($value);
                } else if (is_array($value)) {
                    $this->setJurisdiction(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setJurisdiction(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setJurisdiction(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_NAME]) || isset($data[self::FIELD_NAME_EXT])) {
            if (isset($data[self::FIELD_NAME])) {
                $value = $data[self::FIELD_NAME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT])) {
                $ext = $data[self::FIELD_NAME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setName($value);
                } else if (is_array($value)) {
                    $this->setName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setName(new FHIRString($ext));
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
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<DeviceUdi{$xmlns}></DeviceUdi>";
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The full UDI carrier of the Automatic Identification and Data Capture (AIDC)
     * technology representation of the barcode string as printed on the packaging of
     * the device - E.g a barcode or RFID. Because of limitations on character sets in
     * XML and the need to round-trip JSON data through XML, AIDC Formats *SHALL* be
     * base64 encoded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary
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
     * the device - E.g a barcode or RFID. Because of limitations on character sets in
     * XML and the need to round-trip JSON data through XML, AIDC Formats *SHALL* be
     * base64 encoded.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary $carrierAIDC
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
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The full UDI carrier as the human readable form (HRF) representation of the
     * barcode string as printed on the packaging of the device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getCarrierHRF()
    {
        return $this->carrierHRF;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The full UDI carrier as the human readable form (HRF) representation of the
     * barcode string as printed on the packaging of the device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $carrierHRF
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
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The device identifier (DI) is a mandatory, fixed portion of a UDI that
     * identifies the labeler and the specific version or model of a device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getDeviceIdentifier()
    {
        return $this->deviceIdentifier;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The device identifier (DI) is a mandatory, fixed portion of a UDI that
     * identifies the labeler and the specific version or model of a device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $deviceIdentifier
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
     * Codes to identify how UDI data was entered
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A coded entry to indicate how the data was entered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUDIEntryType
     */
    public function getEntryType()
    {
        return $this->entryType;
    }

    /**
     * Codes to identify how UDI data was entered
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A coded entry to indicate how the data was entered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUDIEntryType $entryType
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $issuer
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
     * jurisdiction. All UDIs are globally unique within a single namespace. with the
     * appropriate repository uri as the system. For example, UDIs of devices managed
     * in the U.S. by the FDA, the value is http://hl7.org/fhir/NamingSystem/fda-udi.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
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
     * jurisdiction. All UDIs are globally unique within a single namespace. with the
     * appropriate repository uri as the system. For example, UDIs of devices managed
     * in the U.S. by the FDA, the value is http://hl7.org/fhir/NamingSystem/fda-udi.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $jurisdiction
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Name of device as used in labeling or catalog.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Name of device as used in labeling or catalog.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $name
     * @return static
     */
    public function setName($name = null)
    {
        if (null === $name) {
            $this->name = null;
            return $this;
        }
        if ($name instanceof FHIRString) {
            $this->name = $name;
            return $this;
        }
        $this->name = new FHIRString($name);
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getCarrierAIDC())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CARRIER_AIDC] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCarrierHRF())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CARRIER_HRF] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDeviceIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEVICE_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEntryType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENTRY_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIssuer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ISSUER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getJurisdiction())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_JURISDICTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CARRIER_AIDC])) {
            $v = $this->getCarrierAIDC();
            foreach($validationRules[self::FIELD_CARRIER_AIDC] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DOT_UDI, self::FIELD_CARRIER_AIDC, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CARRIER_AIDC])) {
                        $errs[self::FIELD_CARRIER_AIDC] = [];
                    }
                    $errs[self::FIELD_CARRIER_AIDC][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CARRIER_HRF])) {
            $v = $this->getCarrierHRF();
            foreach($validationRules[self::FIELD_CARRIER_HRF] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DOT_UDI, self::FIELD_CARRIER_HRF, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CARRIER_HRF])) {
                        $errs[self::FIELD_CARRIER_HRF] = [];
                    }
                    $errs[self::FIELD_CARRIER_HRF][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEVICE_IDENTIFIER])) {
            $v = $this->getDeviceIdentifier();
            foreach($validationRules[self::FIELD_DEVICE_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DOT_UDI, self::FIELD_DEVICE_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEVICE_IDENTIFIER])) {
                        $errs[self::FIELD_DEVICE_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_DEVICE_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENTRY_TYPE])) {
            $v = $this->getEntryType();
            foreach($validationRules[self::FIELD_ENTRY_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DOT_UDI, self::FIELD_ENTRY_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENTRY_TYPE])) {
                        $errs[self::FIELD_ENTRY_TYPE] = [];
                    }
                    $errs[self::FIELD_ENTRY_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ISSUER])) {
            $v = $this->getIssuer();
            foreach($validationRules[self::FIELD_ISSUER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DOT_UDI, self::FIELD_ISSUER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ISSUER])) {
                        $errs[self::FIELD_ISSUER] = [];
                    }
                    $errs[self::FIELD_ISSUER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_JURISDICTION])) {
            $v = $this->getJurisdiction();
            foreach($validationRules[self::FIELD_JURISDICTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DOT_UDI, self::FIELD_JURISDICTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_JURISDICTION])) {
                        $errs[self::FIELD_JURISDICTION] = [];
                    }
                    $errs[self::FIELD_JURISDICTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DOT_UDI, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdi $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdi
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
                throw new \DomainException(sprintf('FHIRDeviceUdi::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDeviceUdi::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRDeviceUdi;
        } elseif (!is_object($type) || !($type instanceof FHIRDeviceUdi)) {
            throw new \RuntimeException(sprintf(
                'FHIRDeviceUdi::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdi or null, %s seen.',
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
        if (isset($children->carrierAIDC)) {
            $type->setCarrierAIDC(FHIRBase64Binary::xmlUnserialize($children->carrierAIDC));
        }
        if (isset($attributes->carrierAIDC)) {
            $pt = $type->getCarrierAIDC();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->carrierAIDC);
            } else {
                $type->setCarrierAIDC((string)$attributes->carrierAIDC);
            }
        }
        if (isset($children->carrierHRF)) {
            $type->setCarrierHRF(FHIRString::xmlUnserialize($children->carrierHRF));
        }
        if (isset($attributes->carrierHRF)) {
            $pt = $type->getCarrierHRF();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->carrierHRF);
            } else {
                $type->setCarrierHRF((string)$attributes->carrierHRF);
            }
        }
        if (isset($children->deviceIdentifier)) {
            $type->setDeviceIdentifier(FHIRString::xmlUnserialize($children->deviceIdentifier));
        }
        if (isset($attributes->deviceIdentifier)) {
            $pt = $type->getDeviceIdentifier();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->deviceIdentifier);
            } else {
                $type->setDeviceIdentifier((string)$attributes->deviceIdentifier);
            }
        }
        if (isset($children->entryType)) {
            $type->setEntryType(FHIRUDIEntryType::xmlUnserialize($children->entryType));
        }
        if (isset($children->issuer)) {
            $type->setIssuer(FHIRUri::xmlUnserialize($children->issuer));
        }
        if (isset($attributes->issuer)) {
            $pt = $type->getIssuer();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->issuer);
            } else {
                $type->setIssuer((string)$attributes->issuer);
            }
        }
        if (isset($children->jurisdiction)) {
            $type->setJurisdiction(FHIRUri::xmlUnserialize($children->jurisdiction));
        }
        if (isset($attributes->jurisdiction)) {
            $pt = $type->getJurisdiction();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->jurisdiction);
            } else {
                $type->setJurisdiction((string)$attributes->jurisdiction);
            }
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($attributes->name)) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->name);
            } else {
                $type->setName((string)$attributes->name);
            }
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
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_CARRIER_AIDC] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBase64Binary::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBase64Binary::FIELD_VALUE]);
                $a[self::FIELD_CARRIER_AIDC_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getCarrierHRF())) {
            $a[self::FIELD_CARRIER_HRF] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_CARRIER_HRF_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDeviceIdentifier())) {
            $a[self::FIELD_DEVICE_IDENTIFIER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_DEVICE_IDENTIFIER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getEntryType())) {
            $a[self::FIELD_ENTRY_TYPE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUDIEntryType::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUDIEntryType::FIELD_VALUE]);
                $a[self::FIELD_ENTRY_TYPE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getIssuer())) {
            $a[self::FIELD_ISSUER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_ISSUER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getJurisdiction())) {
            $a[self::FIELD_JURISDICTION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_JURISDICTION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_NAME_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
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