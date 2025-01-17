<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRDevice;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBase64BinaryPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBase64Binary;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUDIEntryType;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * A type of a manufactured item that is used in the provision of healthcare
 * without being substantially changed through that activity. The device may be a
 * medical or non-medical device.
 */
class FHIRDeviceUdiCarrier extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_DEVICE_DOT_UDI_CARRIER;


    public const FIELD_DEVICE_IDENTIFIER = 'deviceIdentifier';
    public const FIELD_DEVICE_IDENTIFIER_EXT = '_deviceIdentifier';
    public const FIELD_ISSUER = 'issuer';
    public const FIELD_ISSUER_EXT = '_issuer';
    public const FIELD_JURISDICTION = 'jurisdiction';
    public const FIELD_JURISDICTION_EXT = '_jurisdiction';
    public const FIELD_CARRIER_AIDC = 'carrierAIDC';
    public const FIELD_CARRIER_AIDC_EXT = '_carrierAIDC';
    public const FIELD_CARRIER_HRF = 'carrierHRF';
    public const FIELD_CARRIER_HRF_EXT = '_carrierHRF';
    public const FIELD_ENTRY_TYPE = 'entryType';
    public const FIELD_ENTRY_TYPE_EXT = '_entryType';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The device identifier (DI) is a mandatory, fixed portion of a UDI that
     * identifies the labeler and the specific version or model of a device.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $deviceIdentifier;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $issuer;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $jurisdiction;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBase64Binary 
     */
    protected FHIRBase64Binary $carrierAIDC;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The full UDI carrier as the human readable form (HRF) representation of the
     * barcode string as printed on the packaging of the device.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $carrierHRF;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A coded entry to indicate how the data was entered.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUDIEntryType 
     */
    protected FHIRUDIEntryType $entryType;

    /** Default validation map for fields in type Device.UdiCarrier */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRDeviceUdiCarrier Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $deviceIdentifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri $issuer
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri $jurisdiction
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBase64Binary $carrierAIDC
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $carrierHRF
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUDIEntryType $entryType
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRStringPrimitive|FHIRString $deviceIdentifier = null,
                                null|string|FHIRUriPrimitive|FHIRUri $issuer = null,
                                null|string|FHIRUriPrimitive|FHIRUri $jurisdiction = null,
                                null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $carrierAIDC = null,
                                null|string|FHIRStringPrimitive|FHIRString $carrierHRF = null,
                                null|FHIRUDIEntryType $entryType = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $deviceIdentifier) {
            $this->setDeviceIdentifier($deviceIdentifier);
        }
        if (null !== $issuer) {
            $this->setIssuer($issuer);
        }
        if (null !== $jurisdiction) {
            $this->setJurisdiction($jurisdiction);
        }
        if (null !== $carrierAIDC) {
            $this->setCarrierAIDC($carrierAIDC);
        }
        if (null !== $carrierHRF) {
            $this->setCarrierHRF($carrierHRF);
        }
        if (null !== $entryType) {
            $this->setEntryType($entryType);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The device identifier (DI) is a mandatory, fixed portion of a UDI that
     * identifies the labeler and the specific version or model of a device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getDeviceIdentifier(): null|FHIRString
    {
        return $this->deviceIdentifier ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The device identifier (DI) is a mandatory, fixed portion of a UDI that
     * identifies the labeler and the specific version or model of a device.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $deviceIdentifier
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDeviceIdentifier(null|string|FHIRStringPrimitive|FHIRString $deviceIdentifier,
                                        null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $deviceIdentifier) {
            unset($this->deviceIdentifier);
            return $this;
        }
        if (!($deviceIdentifier instanceof FHIRString)) {
            $deviceIdentifier = new FHIRString(value: $deviceIdentifier);
        }
        if (null !== $valueXMLLocation) {
            $deviceIdentifier->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $deviceIdentifier->_getValueXMLLocation()) {
            $deviceIdentifier->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->deviceIdentifier = $deviceIdentifier;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri
     */
    public function getIssuer(): null|FHIRUri
    {
        return $this->issuer ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri $issuer
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setIssuer(null|string|FHIRUriPrimitive|FHIRUri $issuer,
                              null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $issuer) {
            unset($this->issuer);
            return $this;
        }
        if (!($issuer instanceof FHIRUri)) {
            $issuer = new FHIRUri(value: $issuer);
        }
        if (null !== $valueXMLLocation) {
            $issuer->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $issuer->_getValueXMLLocation()) {
            $issuer->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->issuer = $issuer;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri
     */
    public function getJurisdiction(): null|FHIRUri
    {
        return $this->jurisdiction ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri $jurisdiction
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setJurisdiction(null|string|FHIRUriPrimitive|FHIRUri $jurisdiction,
                                    null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $jurisdiction) {
            unset($this->jurisdiction);
            return $this;
        }
        if (!($jurisdiction instanceof FHIRUri)) {
            $jurisdiction = new FHIRUri(value: $jurisdiction);
        }
        if (null !== $valueXMLLocation) {
            $jurisdiction->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $jurisdiction->_getValueXMLLocation()) {
            $jurisdiction->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->jurisdiction = $jurisdiction;
        return $this;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBase64Binary
     */
    public function getCarrierAIDC(): null|FHIRBase64Binary
    {
        return $this->carrierAIDC ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBase64Binary $carrierAIDC
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCarrierAIDC(null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $carrierAIDC,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $carrierAIDC) {
            unset($this->carrierAIDC);
            return $this;
        }
        if (!($carrierAIDC instanceof FHIRBase64Binary)) {
            $carrierAIDC = new FHIRBase64Binary(value: $carrierAIDC);
        }
        if (null !== $valueXMLLocation) {
            $carrierAIDC->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $carrierAIDC->_getValueXMLLocation()) {
            $carrierAIDC->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->carrierAIDC = $carrierAIDC;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getCarrierHRF(): null|FHIRString
    {
        return $this->carrierHRF ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The full UDI carrier as the human readable form (HRF) representation of the
     * barcode string as printed on the packaging of the device.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $carrierHRF
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCarrierHRF(null|string|FHIRStringPrimitive|FHIRString $carrierHRF,
                                  null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $carrierHRF) {
            unset($this->carrierHRF);
            return $this;
        }
        if (!($carrierHRF instanceof FHIRString)) {
            $carrierHRF = new FHIRString(value: $carrierHRF);
        }
        if (null !== $valueXMLLocation) {
            $carrierHRF->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $carrierHRF->_getValueXMLLocation()) {
            $carrierHRF->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->carrierHRF = $carrierHRF;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A coded entry to indicate how the data was entered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUDIEntryType
     */
    public function getEntryType(): null|FHIRUDIEntryType
    {
        return $this->entryType ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A coded entry to indicate how the data was entered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUDIEntryType $entryType
     * @return static
     */
    public function setEntryType(null|FHIRUDIEntryType $entryType): self
    {
        if (null === $entryType) {
            unset($this->entryType);
            return $this;
        }
        $this->entryType = $entryType;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_DEFAULT_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (isset($validationRules[self::FIELD_DEVICE_IDENTIFIER])) {
            $v = $this->getDeviceIdentifier();
            foreach($validationRules[self::FIELD_DEVICE_IDENTIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEVICE_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEVICE_IDENTIFIER])) {
                        $errs[self::FIELD_DEVICE_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_DEVICE_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ISSUER])) {
            $v = $this->getIssuer();
            foreach($validationRules[self::FIELD_ISSUER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ISSUER, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_JURISDICTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_JURISDICTION])) {
                        $errs[self::FIELD_JURISDICTION] = [];
                    }
                    $errs[self::FIELD_JURISDICTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CARRIER_AIDC])) {
            $v = $this->getCarrierAIDC();
            foreach($validationRules[self::FIELD_CARRIER_AIDC] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CARRIER_AIDC, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CARRIER_HRF, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CARRIER_HRF])) {
                        $errs[self::FIELD_CARRIER_HRF] = [];
                    }
                    $errs[self::FIELD_CARRIER_HRF][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENTRY_TYPE])) {
            $v = $this->getEntryType();
            foreach($validationRules[self::FIELD_ENTRY_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ENTRY_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENTRY_TYPE])) {
                        $errs[self::FIELD_ENTRY_TYPE] = [];
                    }
                    $errs[self::FIELD_ENTRY_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDeviceUdiCarrier)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $valueAttr = $n->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEVICE_IDENTIFIER === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDeviceIdentifier(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ISSUER === $childName) {
                $v = new FHIRUri(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setIssuer(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_JURISDICTION === $childName) {
                $v = new FHIRUri(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setJurisdiction(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CARRIER_AIDC === $childName) {
                $v = new FHIRBase64Binary(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setCarrierAIDC(FHIRBase64Binary::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CARRIER_HRF === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setCarrierHRF(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ENTRY_TYPE === $childName) {
                $v = new FHIRUDIEntryType(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setEntryType(FHIRUDIEntryType::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DEVICE_IDENTIFIER])) {
            $pt = $type->getDeviceIdentifier();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DEVICE_IDENTIFIER]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDeviceIdentifier(new FHIRString(
                    value: (string)$attributes[self::FIELD_DEVICE_IDENTIFIER],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ISSUER])) {
            $pt = $type->getIssuer();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ISSUER]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setIssuer(new FHIRUri(
                    value: (string)$attributes[self::FIELD_ISSUER],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_JURISDICTION])) {
            $pt = $type->getJurisdiction();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_JURISDICTION]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setJurisdiction(new FHIRUri(
                    value: (string)$attributes[self::FIELD_JURISDICTION],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_CARRIER_AIDC])) {
            $pt = $type->getCarrierAIDC();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_CARRIER_AIDC]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCarrierAIDC(new FHIRBase64Binary(
                    value: (string)$attributes[self::FIELD_CARRIER_AIDC],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_CARRIER_HRF])) {
            $pt = $type->getCarrierHRF();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_CARRIER_HRF]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCarrierHRF(new FHIRString(
                    value: (string)$attributes[self::FIELD_CARRIER_HRF],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('DeviceUdiCarrier', $this->_getSourceXMLNS());
        }
        if (isset($this->deviceIdentifier) && $this->deviceIdentifier->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEVICE_IDENTIFIER, $this->deviceIdentifier->getValue()?->_getFormattedValue());
        }
        if (isset($this->issuer) && $this->issuer->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ISSUER, $this->issuer->getValue()?->_getFormattedValue());
        }
        if (isset($this->jurisdiction) && $this->jurisdiction->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_JURISDICTION, $this->jurisdiction->getValue()?->_getFormattedValue());
        }
        if (isset($this->carrierAIDC) && $this->carrierAIDC->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CARRIER_AIDC, $this->carrierAIDC->getValue()?->_getFormattedValue());
        }
        if (isset($this->carrierHRF) && $this->carrierHRF->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CARRIER_HRF, $this->carrierHRF->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->deviceIdentifier) && $this->deviceIdentifier->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DEVICE_IDENTIFIER);
            $this->deviceIdentifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->issuer) && $this->issuer->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ISSUER);
            $this->issuer->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->jurisdiction) && $this->jurisdiction->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_JURISDICTION);
            $this->jurisdiction->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->carrierAIDC) && $this->carrierAIDC->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CARRIER_AIDC);
            $this->carrierAIDC->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->carrierHRF) && $this->carrierHRF->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CARRIER_HRF);
            $this->carrierHRF->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->entryType)) {
            $xw->startElement(self::FIELD_ENTRY_TYPE);
            $this->entryType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDeviceUdiCarrier)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_DEVICE_IDENTIFIER]) || isset($json[self::FIELD_DEVICE_IDENTIFIER_EXT]) || array_key_exists(self::FIELD_DEVICE_IDENTIFIER, $json) || array_key_exists(self::FIELD_DEVICE_IDENTIFIER_EXT, $json)) {
            $value = $json[self::FIELD_DEVICE_IDENTIFIER] ?? null;
            $ext = (isset($json[self::FIELD_DEVICE_IDENTIFIER_EXT]) && is_array($json[self::FIELD_DEVICE_IDENTIFIER_EXT])) ? $json[self::FIELD_DEVICE_IDENTIFIER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setDeviceIdentifier($value);
                } else if (is_array($value)) {
                    $type->setDeviceIdentifier(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setDeviceIdentifier(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDeviceIdentifier(new FHIRString($ext));
            } else {
                $type->setDeviceIdentifier(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_ISSUER]) || isset($json[self::FIELD_ISSUER_EXT]) || array_key_exists(self::FIELD_ISSUER, $json) || array_key_exists(self::FIELD_ISSUER_EXT, $json)) {
            $value = $json[self::FIELD_ISSUER] ?? null;
            $ext = (isset($json[self::FIELD_ISSUER_EXT]) && is_array($json[self::FIELD_ISSUER_EXT])) ? $json[self::FIELD_ISSUER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $type->setIssuer($value);
                } else if (is_array($value)) {
                    $type->setIssuer(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $type->setIssuer(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setIssuer(new FHIRUri($ext));
            } else {
                $type->setIssuer(new FHIRUri(null));
            }
        }
        if (isset($json[self::FIELD_JURISDICTION]) || isset($json[self::FIELD_JURISDICTION_EXT]) || array_key_exists(self::FIELD_JURISDICTION, $json) || array_key_exists(self::FIELD_JURISDICTION_EXT, $json)) {
            $value = $json[self::FIELD_JURISDICTION] ?? null;
            $ext = (isset($json[self::FIELD_JURISDICTION_EXT]) && is_array($json[self::FIELD_JURISDICTION_EXT])) ? $json[self::FIELD_JURISDICTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $type->setJurisdiction($value);
                } else if (is_array($value)) {
                    $type->setJurisdiction(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $type->setJurisdiction(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setJurisdiction(new FHIRUri($ext));
            } else {
                $type->setJurisdiction(new FHIRUri(null));
            }
        }
        if (isset($json[self::FIELD_CARRIER_AIDC]) || isset($json[self::FIELD_CARRIER_AIDC_EXT]) || array_key_exists(self::FIELD_CARRIER_AIDC, $json) || array_key_exists(self::FIELD_CARRIER_AIDC_EXT, $json)) {
            $value = $json[self::FIELD_CARRIER_AIDC] ?? null;
            $ext = (isset($json[self::FIELD_CARRIER_AIDC_EXT]) && is_array($json[self::FIELD_CARRIER_AIDC_EXT])) ? $json[self::FIELD_CARRIER_AIDC_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBase64Binary) {
                    $type->setCarrierAIDC($value);
                } else if (is_array($value)) {
                    $type->setCarrierAIDC(new FHIRBase64Binary(array_merge($ext, $value)));
                } else {
                    $type->setCarrierAIDC(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setCarrierAIDC(new FHIRBase64Binary($ext));
            } else {
                $type->setCarrierAIDC(new FHIRBase64Binary(null));
            }
        }
        if (isset($json[self::FIELD_CARRIER_HRF]) || isset($json[self::FIELD_CARRIER_HRF_EXT]) || array_key_exists(self::FIELD_CARRIER_HRF, $json) || array_key_exists(self::FIELD_CARRIER_HRF_EXT, $json)) {
            $value = $json[self::FIELD_CARRIER_HRF] ?? null;
            $ext = (isset($json[self::FIELD_CARRIER_HRF_EXT]) && is_array($json[self::FIELD_CARRIER_HRF_EXT])) ? $json[self::FIELD_CARRIER_HRF_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setCarrierHRF($value);
                } else if (is_array($value)) {
                    $type->setCarrierHRF(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setCarrierHRF(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setCarrierHRF(new FHIRString($ext));
            } else {
                $type->setCarrierHRF(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_ENTRY_TYPE]) || isset($json[self::FIELD_ENTRY_TYPE_EXT]) || array_key_exists(self::FIELD_ENTRY_TYPE, $json) || array_key_exists(self::FIELD_ENTRY_TYPE_EXT, $json)) {
            $value = $json[self::FIELD_ENTRY_TYPE] ?? null;
            $ext = (isset($json[self::FIELD_ENTRY_TYPE_EXT]) && is_array($json[self::FIELD_ENTRY_TYPE_EXT])) ? $json[self::FIELD_ENTRY_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUDIEntryType) {
                    $type->setEntryType($value);
                } else if (is_array($value)) {
                    $type->setEntryType(new FHIRUDIEntryType(array_merge($ext, $value)));
                } else {
                    $type->setEntryType(new FHIRUDIEntryType([FHIRUDIEntryType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setEntryType(new FHIRUDIEntryType($ext));
            } else {
                $type->setEntryType(new FHIRUDIEntryType(null));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->deviceIdentifier)) {
            if (null !== ($val = $this->deviceIdentifier->getValue())) {
                $out->deviceIdentifier = $val;
            }
            $ext = $this->deviceIdentifier->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_deviceIdentifier = $ext;
            }
        }
        if (isset($this->issuer)) {
            if (null !== ($val = $this->issuer->getValue())) {
                $out->issuer = $val;
            }
            $ext = $this->issuer->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_issuer = $ext;
            }
        }
        if (isset($this->jurisdiction)) {
            if (null !== ($val = $this->jurisdiction->getValue())) {
                $out->jurisdiction = $val;
            }
            $ext = $this->jurisdiction->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_jurisdiction = $ext;
            }
        }
        if (isset($this->carrierAIDC)) {
            if (null !== ($val = $this->carrierAIDC->getValue())) {
                $out->carrierAIDC = $val;
            }
            $ext = $this->carrierAIDC->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_carrierAIDC = $ext;
            }
        }
        if (isset($this->carrierHRF)) {
            if (null !== ($val = $this->carrierHRF->getValue())) {
                $out->carrierHRF = $val;
            }
            $ext = $this->carrierHRF->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_carrierHRF = $ext;
            }
        }
        if (isset($this->entryType)) {
            if (null !== ($val = $this->entryType->getValue())) {
                $out->entryType = $val;
            }
            $ext = $this->entryType->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_entryType = $ext;
            }
        }
        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}