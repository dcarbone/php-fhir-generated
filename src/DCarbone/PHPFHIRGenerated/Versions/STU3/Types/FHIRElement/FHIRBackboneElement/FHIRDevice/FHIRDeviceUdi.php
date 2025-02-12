<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDevice;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 12th, 2025 19:32+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBase64BinaryPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRUDIEntryTypeList;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBase64Binary;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUDIEntryType;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * This resource identifies an instance or a type of a manufactured item that is
 * used in the provision of healthcare without being substantially changed through
 * that activity. The device may be a medical or non-medical device. Medical
 * devices include durable (reusable) medical equipment, implantable devices, as
 * well as disposable equipment used for diagnostic, treatment, and research for
 * healthcare and public health. Non-medical devices may include items such as a
 * machine, cellphone, computer, application, etc.
 */
class FHIRDeviceUdi extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_DEVICE_DOT_UDI;

    /* class_default.php:55 */
    public const FIELD_DEVICE_IDENTIFIER = 'deviceIdentifier';
    public const FIELD_DEVICE_IDENTIFIER_EXT = '_deviceIdentifier';
    public const FIELD_NAME = 'name';
    public const FIELD_NAME_EXT = '_name';
    public const FIELD_JURISDICTION = 'jurisdiction';
    public const FIELD_JURISDICTION_EXT = '_jurisdiction';
    public const FIELD_CARRIER_HRF = 'carrierHRF';
    public const FIELD_CARRIER_HRF_EXT = '_carrierHRF';
    public const FIELD_CARRIER_AIDC = 'carrierAIDC';
    public const FIELD_CARRIER_AIDC_EXT = '_carrierAIDC';
    public const FIELD_ISSUER = 'issuer';
    public const FIELD_ISSUER_EXT = '_issuer';
    public const FIELD_ENTRY_TYPE = 'entryType';
    public const FIELD_ENTRY_TYPE_EXT = '_entryType';

    /* class_default.php:74 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_DEVICE_IDENTIFIER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_NAME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_JURISDICTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CARRIER_HRF => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CARRIER_AIDC => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ISSUER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ENTRY_TYPE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The device identifier (DI) is a mandatory, fixed portion of a UDI that
     * identifies the labeler and the specific version or model of a device.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $deviceIdentifier;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Name of device as used in labeling or catalog.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $name;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $jurisdiction;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The full UDI carrier as the human readable form (HRF) representation of the
     * barcode string as printed on the packaging of the device.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $carrierHRF;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBase64Binary 
     */
    protected FHIRBase64Binary $carrierAIDC;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $issuer;
    /**
     * Codes to identify how UDI data was entered
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A coded entry to indicate how the data was entered.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUDIEntryType 
     */
    protected FHIRUDIEntryType $entryType;

    /* constructor.php:61 */
    /**
     * FHIRDeviceUdi Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $deviceIdentifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $name
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $jurisdiction
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $carrierHRF
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBase64Binary $carrierAIDC
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $issuer
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRUDIEntryTypeList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUDIEntryType $entryType
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRStringPrimitive|FHIRString $deviceIdentifier = null,
                                null|string|FHIRStringPrimitive|FHIRString $name = null,
                                null|string|FHIRUriPrimitive|FHIRUri $jurisdiction = null,
                                null|string|FHIRStringPrimitive|FHIRString $carrierHRF = null,
                                null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $carrierAIDC = null,
                                null|string|FHIRUriPrimitive|FHIRUri $issuer = null,
                                null|string|FHIRUDIEntryTypeList|FHIRUDIEntryType $entryType = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $deviceIdentifier) {
            $this->setDeviceIdentifier($deviceIdentifier);
        }
        if (null !== $name) {
            $this->setName($name);
        }
        if (null !== $jurisdiction) {
            $this->setJurisdiction($jurisdiction);
        }
        if (null !== $carrierHRF) {
            $this->setCarrierHRF($carrierHRF);
        }
        if (null !== $carrierAIDC) {
            $this->setCarrierAIDC($carrierAIDC);
        }
        if (null !== $issuer) {
            $this->setIssuer($issuer);
        }
        if (null !== $entryType) {
            $this->setEntryType($entryType);
        }
    }

    /* class_default.php:144 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:182 */
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The device identifier (DI) is a mandatory, fixed portion of a UDI that
     * identifies the labeler and the specific version or model of a device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getDeviceIdentifier(): null|FHIRString
    {
        return $this->deviceIdentifier ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The device identifier (DI) is a mandatory, fixed portion of a UDI that
     * identifies the labeler and the specific version or model of a device.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $deviceIdentifier
     * @return static
     */
    public function setDeviceIdentifier(null|string|FHIRStringPrimitive|FHIRString $deviceIdentifier): self
    {
        if (null === $deviceIdentifier) {
            unset($this->deviceIdentifier);
            return $this;
        }
        if (!($deviceIdentifier instanceof FHIRString)) {
            $deviceIdentifier = new FHIRString(value: $deviceIdentifier);
        }
        $this->deviceIdentifier = $deviceIdentifier;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Name of device as used in labeling or catalog.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getName(): null|FHIRString
    {
        return $this->name ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Name of device as used in labeling or catalog.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $name
     * @return static
     */
    public function setName(null|string|FHIRStringPrimitive|FHIRString $name): self
    {
        if (null === $name) {
            unset($this->name);
            return $this;
        }
        if (!($name instanceof FHIRString)) {
            $name = new FHIRString(value: $name);
        }
        $this->name = $name;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri
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
     * jurisdiction. All UDIs are globally unique within a single namespace. with the
     * appropriate repository uri as the system. For example, UDIs of devices managed
     * in the U.S. by the FDA, the value is http://hl7.org/fhir/NamingSystem/fda-udi.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $jurisdiction
     * @return static
     */
    public function setJurisdiction(null|string|FHIRUriPrimitive|FHIRUri $jurisdiction): self
    {
        if (null === $jurisdiction) {
            unset($this->jurisdiction);
            return $this;
        }
        if (!($jurisdiction instanceof FHIRUri)) {
            $jurisdiction = new FHIRUri(value: $jurisdiction);
        }
        $this->jurisdiction = $jurisdiction;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getCarrierHRF(): null|FHIRString
    {
        return $this->carrierHRF ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The full UDI carrier as the human readable form (HRF) representation of the
     * barcode string as printed on the packaging of the device.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $carrierHRF
     * @return static
     */
    public function setCarrierHRF(null|string|FHIRStringPrimitive|FHIRString $carrierHRF): self
    {
        if (null === $carrierHRF) {
            unset($this->carrierHRF);
            return $this;
        }
        if (!($carrierHRF instanceof FHIRString)) {
            $carrierHRF = new FHIRString(value: $carrierHRF);
        }
        $this->carrierHRF = $carrierHRF;
        return $this;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBase64Binary
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
     * the device - E.g a barcode or RFID. Because of limitations on character sets in
     * XML and the need to round-trip JSON data through XML, AIDC Formats *SHALL* be
     * base64 encoded.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBase64Binary $carrierAIDC
     * @return static
     */
    public function setCarrierAIDC(null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $carrierAIDC): self
    {
        if (null === $carrierAIDC) {
            unset($this->carrierAIDC);
            return $this;
        }
        if (!($carrierAIDC instanceof FHIRBase64Binary)) {
            $carrierAIDC = new FHIRBase64Binary(value: $carrierAIDC);
        }
        $this->carrierAIDC = $carrierAIDC;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $issuer
     * @return static
     */
    public function setIssuer(null|string|FHIRUriPrimitive|FHIRUri $issuer): self
    {
        if (null === $issuer) {
            unset($this->issuer);
            return $this;
        }
        if (!($issuer instanceof FHIRUri)) {
            $issuer = new FHIRUri(value: $issuer);
        }
        $this->issuer = $issuer;
        return $this;
    }

    /**
     * Codes to identify how UDI data was entered
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A coded entry to indicate how the data was entered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUDIEntryType
     */
    public function getEntryType(): null|FHIRUDIEntryType
    {
        return $this->entryType ?? null;
    }

    /**
     * Codes to identify how UDI data was entered
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A coded entry to indicate how the data was entered.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRUDIEntryTypeList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUDIEntryType $entryType
     * @return static
     */
    public function setEntryType(null|string|FHIRUDIEntryTypeList|FHIRUDIEntryType $entryType): self
    {
        if (null === $entryType) {
            unset($this->entryType);
            return $this;
        }
        if (!($entryType instanceof FHIRUDIEntryType)) {
            $entryType = new FHIRUDIEntryType(value: $entryType);
        }
        $this->entryType = $entryType;
        return $this;
    }

    /* class_default.php:209 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdi $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdi
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDeviceUdi)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEVICE_IDENTIFIER === $cen) {
                $type->setDeviceIdentifier(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NAME === $cen) {
                $type->setName(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_JURISDICTION === $cen) {
                $type->setJurisdiction(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CARRIER_HRF === $cen) {
                $type->setCarrierHRF(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CARRIER_AIDC === $cen) {
                $type->setCarrierAIDC(FHIRBase64Binary::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ISSUER === $cen) {
                $type->setIssuer(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ENTRY_TYPE === $cen) {
                $type->setEntryType(FHIRUDIEntryType::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DEVICE_IDENTIFIER])) {
            if (isset($type->deviceIdentifier)) {
                $type->deviceIdentifier->setValue((string)$attributes[self::FIELD_DEVICE_IDENTIFIER]);
            } else {
                $type->setDeviceIdentifier((string)$attributes[self::FIELD_DEVICE_IDENTIFIER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DEVICE_IDENTIFIER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_NAME])) {
            if (isset($type->name)) {
                $type->name->setValue((string)$attributes[self::FIELD_NAME]);
            } else {
                $type->setName((string)$attributes[self::FIELD_NAME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_NAME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_JURISDICTION])) {
            if (isset($type->jurisdiction)) {
                $type->jurisdiction->setValue((string)$attributes[self::FIELD_JURISDICTION]);
            } else {
                $type->setJurisdiction((string)$attributes[self::FIELD_JURISDICTION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_JURISDICTION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CARRIER_HRF])) {
            if (isset($type->carrierHRF)) {
                $type->carrierHRF->setValue((string)$attributes[self::FIELD_CARRIER_HRF]);
            } else {
                $type->setCarrierHRF((string)$attributes[self::FIELD_CARRIER_HRF]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_CARRIER_HRF, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CARRIER_AIDC])) {
            if (isset($type->carrierAIDC)) {
                $type->carrierAIDC->setValue((string)$attributes[self::FIELD_CARRIER_AIDC]);
            } else {
                $type->setCarrierAIDC((string)$attributes[self::FIELD_CARRIER_AIDC]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_CARRIER_AIDC, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ISSUER])) {
            if (isset($type->issuer)) {
                $type->issuer->setValue((string)$attributes[self::FIELD_ISSUER]);
            } else {
                $type->setIssuer((string)$attributes[self::FIELD_ISSUER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ISSUER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ENTRY_TYPE])) {
            if (isset($type->entryType)) {
                $type->entryType->setValue((string)$attributes[self::FIELD_ENTRY_TYPE]);
            } else {
                $type->setEntryType((string)$attributes[self::FIELD_ENTRY_TYPE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ENTRY_TYPE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->deviceIdentifier) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEVICE_IDENTIFIER]) {
            $xw->writeAttribute(self::FIELD_DEVICE_IDENTIFIER, $this->deviceIdentifier->_getValueAsString());
        }
        if (isset($this->name) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NAME]) {
            $xw->writeAttribute(self::FIELD_NAME, $this->name->_getValueAsString());
        }
        if (isset($this->jurisdiction) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_JURISDICTION]) {
            $xw->writeAttribute(self::FIELD_JURISDICTION, $this->jurisdiction->_getValueAsString());
        }
        if (isset($this->carrierHRF) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CARRIER_HRF]) {
            $xw->writeAttribute(self::FIELD_CARRIER_HRF, $this->carrierHRF->_getValueAsString());
        }
        if (isset($this->carrierAIDC) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CARRIER_AIDC]) {
            $xw->writeAttribute(self::FIELD_CARRIER_AIDC, $this->carrierAIDC->_getValueAsString());
        }
        if (isset($this->issuer) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ISSUER]) {
            $xw->writeAttribute(self::FIELD_ISSUER, $this->issuer->_getValueAsString());
        }
        if (isset($this->entryType) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ENTRY_TYPE]) {
            $xw->writeAttribute(self::FIELD_ENTRY_TYPE, $this->entryType->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->deviceIdentifier)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEVICE_IDENTIFIER]
                || $this->deviceIdentifier->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEVICE_IDENTIFIER);
            $this->deviceIdentifier->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEVICE_IDENTIFIER]);
            $xw->endElement();
        }
        if (isset($this->name)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NAME]
                || $this->name->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NAME);
            $this->name->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NAME]);
            $xw->endElement();
        }
        if (isset($this->jurisdiction)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_JURISDICTION]
                || $this->jurisdiction->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_JURISDICTION);
            $this->jurisdiction->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_JURISDICTION]);
            $xw->endElement();
        }
        if (isset($this->carrierHRF)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CARRIER_HRF]
                || $this->carrierHRF->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CARRIER_HRF);
            $this->carrierHRF->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CARRIER_HRF]);
            $xw->endElement();
        }
        if (isset($this->carrierAIDC)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CARRIER_AIDC]
                || $this->carrierAIDC->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CARRIER_AIDC);
            $this->carrierAIDC->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CARRIER_AIDC]);
            $xw->endElement();
        }
        if (isset($this->issuer)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ISSUER]
                || $this->issuer->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ISSUER);
            $this->issuer->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ISSUER]);
            $xw->endElement();
        }
        if (isset($this->entryType)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ENTRY_TYPE]
                || $this->entryType->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ENTRY_TYPE);
            $this->entryType->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ENTRY_TYPE]);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdi $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdi
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDeviceUdi)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->deviceIdentifier)
            || isset($json->_deviceIdentifier)
            || property_exists($json, self::FIELD_DEVICE_IDENTIFIER)
            || property_exists($json, self::FIELD_DEVICE_IDENTIFIER_EXT)) {
            $v = $json->_deviceIdentifier ?? new \stdClass();
            $v->value = $json->deviceIdentifier ?? null;
            $type->setDeviceIdentifier(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->name)
            || isset($json->_name)
            || property_exists($json, self::FIELD_NAME)
            || property_exists($json, self::FIELD_NAME_EXT)) {
            $v = $json->_name ?? new \stdClass();
            $v->value = $json->name ?? null;
            $type->setName(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->jurisdiction)
            || isset($json->_jurisdiction)
            || property_exists($json, self::FIELD_JURISDICTION)
            || property_exists($json, self::FIELD_JURISDICTION_EXT)) {
            $v = $json->_jurisdiction ?? new \stdClass();
            $v->value = $json->jurisdiction ?? null;
            $type->setJurisdiction(FHIRUri::jsonUnserialize($v, $config));
        }
        if (isset($json->carrierHRF)
            || isset($json->_carrierHRF)
            || property_exists($json, self::FIELD_CARRIER_HRF)
            || property_exists($json, self::FIELD_CARRIER_HRF_EXT)) {
            $v = $json->_carrierHRF ?? new \stdClass();
            $v->value = $json->carrierHRF ?? null;
            $type->setCarrierHRF(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->carrierAIDC)
            || isset($json->_carrierAIDC)
            || property_exists($json, self::FIELD_CARRIER_AIDC)
            || property_exists($json, self::FIELD_CARRIER_AIDC_EXT)) {
            $v = $json->_carrierAIDC ?? new \stdClass();
            $v->value = $json->carrierAIDC ?? null;
            $type->setCarrierAIDC(FHIRBase64Binary::jsonUnserialize($v, $config));
        }
        if (isset($json->issuer)
            || isset($json->_issuer)
            || property_exists($json, self::FIELD_ISSUER)
            || property_exists($json, self::FIELD_ISSUER_EXT)) {
            $v = $json->_issuer ?? new \stdClass();
            $v->value = $json->issuer ?? null;
            $type->setIssuer(FHIRUri::jsonUnserialize($v, $config));
        }
        if (isset($json->entryType)
            || isset($json->_entryType)
            || property_exists($json, self::FIELD_ENTRY_TYPE)
            || property_exists($json, self::FIELD_ENTRY_TYPE_EXT)) {
            $v = $json->_entryType ?? new \stdClass();
            $v->value = $json->entryType ?? null;
            $type->setEntryType(FHIRUDIEntryType::jsonUnserialize($v, $config));
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
            if ($this->deviceIdentifier->_nonValueFieldDefined()) {
                $ext = $this->deviceIdentifier->jsonSerialize();
                unset($ext->value);
                $out->_deviceIdentifier = $ext;
            }
        }
        if (isset($this->name)) {
            if (null !== ($val = $this->name->getValue())) {
                $out->name = $val;
            }
            if ($this->name->_nonValueFieldDefined()) {
                $ext = $this->name->jsonSerialize();
                unset($ext->value);
                $out->_name = $ext;
            }
        }
        if (isset($this->jurisdiction)) {
            if (null !== ($val = $this->jurisdiction->getValue())) {
                $out->jurisdiction = $val;
            }
            if ($this->jurisdiction->_nonValueFieldDefined()) {
                $ext = $this->jurisdiction->jsonSerialize();
                unset($ext->value);
                $out->_jurisdiction = $ext;
            }
        }
        if (isset($this->carrierHRF)) {
            if (null !== ($val = $this->carrierHRF->getValue())) {
                $out->carrierHRF = $val;
            }
            if ($this->carrierHRF->_nonValueFieldDefined()) {
                $ext = $this->carrierHRF->jsonSerialize();
                unset($ext->value);
                $out->_carrierHRF = $ext;
            }
        }
        if (isset($this->carrierAIDC)) {
            if (null !== ($val = $this->carrierAIDC->getValue())) {
                $out->carrierAIDC = $val;
            }
            if ($this->carrierAIDC->_nonValueFieldDefined()) {
                $ext = $this->carrierAIDC->jsonSerialize();
                unset($ext->value);
                $out->_carrierAIDC = $ext;
            }
        }
        if (isset($this->issuer)) {
            if (null !== ($val = $this->issuer->getValue())) {
                $out->issuer = $val;
            }
            if ($this->issuer->_nonValueFieldDefined()) {
                $ext = $this->issuer->jsonSerialize();
                unset($ext->value);
                $out->_issuer = $ext;
            }
        }
        if (isset($this->entryType)) {
            if (null !== ($val = $this->entryType->getValue())) {
                $out->entryType = $val;
            }
            if ($this->entryType->_nonValueFieldDefined()) {
                $ext = $this->entryType->jsonSerialize();
                unset($ext->value);
                $out->_entryType = $ext;
            }
        }
        return $out;
    }
}