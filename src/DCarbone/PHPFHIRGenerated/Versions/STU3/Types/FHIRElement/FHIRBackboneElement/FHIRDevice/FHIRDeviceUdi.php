<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDevice;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 00:27+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBase64BinaryPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBase64Binary;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUDIEntryType;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
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

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_DEVICE_DOT_UDI;


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

    /** Default validation map for fields in type Device.Udi */
    private const _DEFAULT_VALIDATION_RULES = [];

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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUDIEntryType $entryType
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

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUDIEntryType $entryType
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
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdi $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdi
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
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
                $v = new FHIRStringPrimitive(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEVICE_IDENTIFIER === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDeviceIdentifier(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NAME === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setName(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_JURISDICTION === $childName) {
                $v = new FHIRUri(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setJurisdiction(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CARRIER_HRF === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setCarrierHRF(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CARRIER_AIDC === $childName) {
                $v = new FHIRBase64Binary(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setCarrierAIDC(FHIRBase64Binary::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ISSUER === $childName) {
                $v = new FHIRUri(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setIssuer(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ENTRY_TYPE === $childName) {
                $v = new FHIRUDIEntryType(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setEntryType(FHIRUDIEntryType::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DEVICE_IDENTIFIER])) {
            $pt = $type->getDeviceIdentifier();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEVICE_IDENTIFIER]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDeviceIdentifier(new FHIRString(
                    value: (string)$attributes[self::FIELD_DEVICE_IDENTIFIER],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_NAME])) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_NAME]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setName(new FHIRString(
                    value: (string)$attributes[self::FIELD_NAME],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_JURISDICTION])) {
            $pt = $type->getJurisdiction();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_JURISDICTION]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setJurisdiction(new FHIRUri(
                    value: (string)$attributes[self::FIELD_JURISDICTION],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_CARRIER_HRF])) {
            $pt = $type->getCarrierHRF();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CARRIER_HRF]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCarrierHRF(new FHIRString(
                    value: (string)$attributes[self::FIELD_CARRIER_HRF],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_CARRIER_AIDC])) {
            $pt = $type->getCarrierAIDC();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CARRIER_AIDC]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCarrierAIDC(new FHIRBase64Binary(
                    value: (string)$attributes[self::FIELD_CARRIER_AIDC],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ISSUER])) {
            $pt = $type->getIssuer();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ISSUER]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setIssuer(new FHIRUri(
                    value: (string)$attributes[self::FIELD_ISSUER],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
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
            $xw->openRootNode('DeviceUdi', $this->_getSourceXMLNS());
        }
        if (isset($this->deviceIdentifier) && $this->deviceIdentifier->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEVICE_IDENTIFIER, $this->deviceIdentifier->getValue()?->getFormattedValue());
        }
        if (isset($this->name) && $this->name->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_NAME, $this->name->getValue()?->getFormattedValue());
        }
        if (isset($this->jurisdiction) && $this->jurisdiction->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_JURISDICTION, $this->jurisdiction->getValue()?->getFormattedValue());
        }
        if (isset($this->carrierHRF) && $this->carrierHRF->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CARRIER_HRF, $this->carrierHRF->getValue()?->getFormattedValue());
        }
        if (isset($this->carrierAIDC) && $this->carrierAIDC->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CARRIER_AIDC, $this->carrierAIDC->getValue()?->getFormattedValue());
        }
        if (isset($this->issuer) && $this->issuer->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ISSUER, $this->issuer->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->deviceIdentifier) && $this->deviceIdentifier->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DEVICE_IDENTIFIER);
            $this->deviceIdentifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->name) && $this->name->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_NAME);
            $this->name->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->jurisdiction) && $this->jurisdiction->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_JURISDICTION);
            $this->jurisdiction->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->carrierHRF) && $this->carrierHRF->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CARRIER_HRF);
            $this->carrierHRF->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->carrierAIDC) && $this->carrierAIDC->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CARRIER_AIDC);
            $this->carrierAIDC->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->issuer) && $this->issuer->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ISSUER);
            $this->issuer->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdi $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdi
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
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
        if (isset($json[self::FIELD_NAME]) || isset($json[self::FIELD_NAME_EXT]) || array_key_exists(self::FIELD_NAME, $json) || array_key_exists(self::FIELD_NAME_EXT, $json)) {
            $value = $json[self::FIELD_NAME] ?? null;
            $ext = (isset($json[self::FIELD_NAME_EXT]) && is_array($json[self::FIELD_NAME_EXT])) ? $json[self::FIELD_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setName($value);
                } else if (is_array($value)) {
                    $type->setName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setName(new FHIRString($ext));
            } else {
                $type->setName(new FHIRString(null));
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
        if (isset($this->name)) {
            if (null !== ($val = $this->name->getValue())) {
                $out->name = $val;
            }
            $ext = $this->name->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_name = $ext;
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