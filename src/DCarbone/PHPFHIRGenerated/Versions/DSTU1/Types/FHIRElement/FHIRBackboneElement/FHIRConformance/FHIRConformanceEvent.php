<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 3rd, 2025 17:37+0000
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConformanceEventMode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRMessageSignificanceCategory;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRConformanceEventModeList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRMessageSignificanceCategoryList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;

/**
 * A conformance statement is a set of requirements for a desired implementation or
 * a description of how a target application fulfills those requirements in a
 * particular implementation.
 */
class FHIRConformanceEvent extends FHIRBackboneElement
{
    use TypeValidationsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CONFORMANCE_DOT_EVENT;

    /* class_default.php:47 */
    public const FIELD_CODE = 'code';
    public const FIELD_CATEGORY = 'category';
    public const FIELD_CATEGORY_EXT = '_category';
    public const FIELD_MODE = 'mode';
    public const FIELD_MODE_EXT = '_mode';
    public const FIELD_PROTOCOL = 'protocol';
    public const FIELD_FOCUS = 'focus';
    public const FIELD_FOCUS_EXT = '_focus';
    public const FIELD_REQUEST = 'request';
    public const FIELD_RESPONSE = 'response';
    public const FIELD_DOCUMENTATION = 'documentation';
    public const FIELD_DOCUMENTATION_EXT = '_documentation';

    /* class_default.php:66 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_CODE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_MODE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_FOCUS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_REQUEST => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_RESPONSE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:95 */
    private array $_valueXMLLocations = [
        self::FIELD_CATEGORY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MODE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FOCUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DOCUMENTATION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:111 */
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded identifier of a supported messaging event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding 
     */
    protected FHIRCoding $code;
    /**
     * The impact of the content of a message
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The impact of the content of the message.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRMessageSignificanceCategory 
     */
    protected FHIRMessageSignificanceCategory $category;
    /**
     * The mode of a message conformance statement
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The mode of this event declaration - whether application is sender or receiver.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConformanceEventMode 
     */
    protected FHIRConformanceEventMode $mode;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of the messaging transport protocol(s) identifiers, supported by this
     * endpoint.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding[] 
     */
    protected array $protocol;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A resource associated with the event. This is the resource that defines the
     * event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode 
     */
    protected FHIRCode $focus;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information about the request for this event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $request;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information about the response for this event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $response;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Guidance on how this event is handled, such as internal system trigger points,
     * business rules, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $documentation;

    /* constructor.php:62 */
    /**
     * FHIRConformanceEvent Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding $code
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRMessageSignificanceCategoryList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRMessageSignificanceCategory $category
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRConformanceEventModeList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConformanceEventMode $mode
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding[] $protocol
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $focus
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $request
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $response
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $documentation
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCoding $code = null,
                                null|string|FHIRMessageSignificanceCategoryList|FHIRMessageSignificanceCategory $category = null,
                                null|string|FHIRConformanceEventModeList|FHIRConformanceEventMode $mode = null,
                                null|iterable $protocol = null,
                                null|string|FHIRCodePrimitive|FHIRCode $focus = null,
                                null|FHIRResourceReference $request = null,
                                null|FHIRResourceReference $response = null,
                                null|string|FHIRStringPrimitive|FHIRString $documentation = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $category) {
            $this->setCategory($category);
        }
        if (null !== $mode) {
            $this->setMode($mode);
        }
        if (null !== $protocol) {
            $this->setProtocol(...$protocol);
        }
        if (null !== $focus) {
            $this->setFocus($focus);
        }
        if (null !== $request) {
            $this->setRequest($request);
        }
        if (null !== $response) {
            $this->setResponse($response);
        }
        if (null !== $documentation) {
            $this->setDocumentation($documentation);
        }
    }

    /* class_default.php:143 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:169 */
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded identifier of a supported messaging event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding
     */
    public function getCode(): null|FHIRCoding
    {
        return $this->code ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded identifier of a supported messaging event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding $code
     * @return static
     */
    public function setCode(null|FHIRCoding $code): self
    {
        if (null === $code) {
            unset($this->code);
            return $this;
        }
        $this->code = $code;
        return $this;
    }

    /**
     * The impact of the content of a message
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The impact of the content of the message.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRMessageSignificanceCategory
     */
    public function getCategory(): null|FHIRMessageSignificanceCategory
    {
        return $this->category ?? null;
    }

    /**
     * The impact of the content of a message
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The impact of the content of the message.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRMessageSignificanceCategoryList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRMessageSignificanceCategory $category
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCategory(null|string|FHIRMessageSignificanceCategoryList|FHIRMessageSignificanceCategory $category,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $category) {
            unset($this->category);
            return $this;
        }
        if (!($category instanceof FHIRMessageSignificanceCategory)) {
            $category = new FHIRMessageSignificanceCategory(value: $category);
        }
        $this->category = $category;
        if ($this->_valueXMLLocations[self::FIELD_CATEGORY] !== $valueXMLLocation) {
            $this->_setCategoryValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the category element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getCategoryValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CATEGORY];
    }

    /**
     * Set the location the "value" field of the category element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setCategoryValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CATEGORY] = $valueXMLLocation;
        return $this;
    }

    /**
     * The mode of a message conformance statement
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The mode of this event declaration - whether application is sender or receiver.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConformanceEventMode
     */
    public function getMode(): null|FHIRConformanceEventMode
    {
        return $this->mode ?? null;
    }

    /**
     * The mode of a message conformance statement
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The mode of this event declaration - whether application is sender or receiver.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRConformanceEventModeList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConformanceEventMode $mode
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setMode(null|string|FHIRConformanceEventModeList|FHIRConformanceEventMode $mode,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $mode) {
            unset($this->mode);
            return $this;
        }
        if (!($mode instanceof FHIRConformanceEventMode)) {
            $mode = new FHIRConformanceEventMode(value: $mode);
        }
        $this->mode = $mode;
        if ($this->_valueXMLLocations[self::FIELD_MODE] !== $valueXMLLocation) {
            $this->_setModeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the mode element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getModeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_MODE];
    }

    /**
     * Set the location the "value" field of the mode element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setModeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_MODE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of the messaging transport protocol(s) identifiers, supported by this
     * endpoint.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding[]
     */
    public function getProtocol(): array
    {
        return $this->protocol ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding>
     */
    public function getProtocolIterator(): iterable
    {
        if (!isset($this->protocol)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->protocol);
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of the messaging transport protocol(s) identifiers, supported by this
     * endpoint.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding $protocol
     * @return static
     */
    public function addProtocol(FHIRCoding $protocol): self
    {
        if (!isset($this->protocol)) {
            $this->protocol = [];
        }
        $this->protocol[] = $protocol;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of the messaging transport protocol(s) identifiers, supported by this
     * endpoint.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding ...$protocol
     * @return static
     */
    public function setProtocol(FHIRCoding ...$protocol): self
    {
        if ([] === $protocol) {
            unset($this->protocol);
            return $this;
        }
        $this->protocol = $protocol;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A resource associated with the event. This is the resource that defines the
     * event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode
     */
    public function getFocus(): null|FHIRCode
    {
        return $this->focus ?? null;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A resource associated with the event. This is the resource that defines the
     * event.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $focus
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setFocus(null|string|FHIRCodePrimitive|FHIRCode $focus,
                             ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $focus) {
            unset($this->focus);
            return $this;
        }
        if (!($focus instanceof FHIRCode)) {
            $focus = new FHIRCode(value: $focus);
        }
        $this->focus = $focus;
        if ($this->_valueXMLLocations[self::FIELD_FOCUS] !== $valueXMLLocation) {
            $this->_setFocusValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the focus element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getFocusValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_FOCUS];
    }

    /**
     * Set the location the "value" field of the focus element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setFocusValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_FOCUS] = $valueXMLLocation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information about the request for this event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getRequest(): null|FHIRResourceReference
    {
        return $this->request ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information about the request for this event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $request
     * @return static
     */
    public function setRequest(null|FHIRResourceReference $request): self
    {
        if (null === $request) {
            unset($this->request);
            return $this;
        }
        $this->request = $request;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information about the response for this event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getResponse(): null|FHIRResourceReference
    {
        return $this->response ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information about the response for this event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $response
     * @return static
     */
    public function setResponse(null|FHIRResourceReference $response): self
    {
        if (null === $response) {
            unset($this->response);
            return $this;
        }
        $this->response = $response;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Guidance on how this event is handled, such as internal system trigger points,
     * business rules, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getDocumentation(): null|FHIRString
    {
        return $this->documentation ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Guidance on how this event is handled, such as internal system trigger points,
     * business rules, etc.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $documentation
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDocumentation(null|string|FHIRStringPrimitive|FHIRString $documentation,
                                     ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $documentation) {
            unset($this->documentation);
            return $this;
        }
        if (!($documentation instanceof FHIRString)) {
            $documentation = new FHIRString(value: $documentation);
        }
        $this->documentation = $documentation;
        if ($this->_valueXMLLocations[self::FIELD_DOCUMENTATION] !== $valueXMLLocation) {
            $this->_setDocumentationValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the documentation element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDocumentationValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DOCUMENTATION];
    }

    /**
     * Set the location the "value" field of the documentation element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDocumentationValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DOCUMENTATION] = $valueXMLLocation;
        return $this;
    }

    /* class_default.php:208 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEvent $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEvent
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRConformanceEvent)) {
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE === $cen) {
                $type->setCode(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CATEGORY === $cen) {
                $type->setCategory(FHIRMessageSignificanceCategory::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODE === $cen) {
                $type->setMode(FHIRConformanceEventMode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROTOCOL === $cen) {
                $type->addProtocol(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FOCUS === $cen) {
                $type->setFocus(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REQUEST === $cen) {
                $type->setRequest(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RESPONSE === $cen) {
                $type->setResponse(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DOCUMENTATION === $cen) {
                $type->setDocumentation(FHIRString::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CATEGORY])) {
            if (isset($type->category)) {
                $type->category->setValue((string)$attributes[self::FIELD_CATEGORY]);
                $type->_setCategoryValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setCategory((string)$attributes[self::FIELD_CATEGORY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MODE])) {
            if (isset($type->mode)) {
                $type->mode->setValue((string)$attributes[self::FIELD_MODE]);
                $type->_setModeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setMode((string)$attributes[self::FIELD_MODE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FOCUS])) {
            if (isset($type->focus)) {
                $type->focus->setValue((string)$attributes[self::FIELD_FOCUS]);
                $type->_setFocusValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setFocus((string)$attributes[self::FIELD_FOCUS], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DOCUMENTATION])) {
            if (isset($type->documentation)) {
                $type->documentation->setValue((string)$attributes[self::FIELD_DOCUMENTATION]);
                $type->_setDocumentationValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDocumentation((string)$attributes[self::FIELD_DOCUMENTATION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null,
                                 null|SerializeConfig $config = null): XMLWriter
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
            $xw->openRootNode('ConformanceEvent', $this->_getSourceXMLNS());
        }
        if (isset($this->category) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CATEGORY]) {
            $xw->writeAttribute(self::FIELD_CATEGORY, $this->category->_getFormattedValue());
        }
        if (isset($this->mode) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MODE]) {
            $xw->writeAttribute(self::FIELD_MODE, $this->mode->_getFormattedValue());
        }
        if (isset($this->focus) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FOCUS]) {
            $xw->writeAttribute(self::FIELD_FOCUS, $this->focus->_getFormattedValue());
        }
        if (isset($this->documentation) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DOCUMENTATION]) {
            $xw->writeAttribute(self::FIELD_DOCUMENTATION, $this->documentation->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->code)) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->category)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CATEGORY]
                || $this->category->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CATEGORY);
            $this->category->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CATEGORY]);
            $xw->endElement();
        }
        if (isset($this->mode)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MODE]
                || $this->mode->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MODE);
            $this->mode->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MODE]);
            $xw->endElement();
        }
        if (isset($this->protocol)) {
            foreach ($this->protocol as $v) {
                $xw->startElement(self::FIELD_PROTOCOL);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->focus)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FOCUS]
                || $this->focus->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FOCUS);
            $this->focus->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FOCUS]);
            $xw->endElement();
        }
        if (isset($this->request)) {
            $xw->startElement(self::FIELD_REQUEST);
            $this->request->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->response)) {
            $xw->startElement(self::FIELD_RESPONSE);
            $this->response->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->documentation)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DOCUMENTATION]
                || $this->documentation->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DOCUMENTATION);
            $this->documentation->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DOCUMENTATION]);
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
     * @param string|\stdClass|array $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEvent $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEvent
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRConformanceEvent)) {
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
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_CODE]) || array_key_exists(self::FIELD_CODE, $json)) {
            $type->setCode(FHIRCoding::jsonUnserialize($json[self::FIELD_CODE], $config));
        }
        if (isset($json[self::FIELD_CATEGORY])
            || isset($json[self::FIELD_CATEGORY_EXT])
            || array_key_exists(self::FIELD_CATEGORY, $json)
            || array_key_exists(self::FIELD_CATEGORY_EXT, $json)) {
            $value = $json[self::FIELD_CATEGORY] ?? null;
            $type->setCategory(FHIRMessageSignificanceCategory::jsonUnserialize(
                (is_array($value) ? $value : [FHIRMessageSignificanceCategory::FIELD_VALUE => $value]) + ($json[self::FIELD_CATEGORY_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_MODE])
            || isset($json[self::FIELD_MODE_EXT])
            || array_key_exists(self::FIELD_MODE, $json)
            || array_key_exists(self::FIELD_MODE_EXT, $json)) {
            $value = $json[self::FIELD_MODE] ?? null;
            $type->setMode(FHIRConformanceEventMode::jsonUnserialize(
                (is_array($value) ? $value : [FHIRConformanceEventMode::FIELD_VALUE => $value]) + ($json[self::FIELD_MODE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_PROTOCOL]) || array_key_exists(self::FIELD_PROTOCOL, $json)) {
            $vs = $json[self::FIELD_PROTOCOL];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addProtocol(FHIRCoding::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_FOCUS])
            || isset($json[self::FIELD_FOCUS_EXT])
            || array_key_exists(self::FIELD_FOCUS, $json)
            || array_key_exists(self::FIELD_FOCUS_EXT, $json)) {
            $value = $json[self::FIELD_FOCUS] ?? null;
            $type->setFocus(FHIRCode::jsonUnserialize(
                (is_array($value) ? $value : [FHIRCode::FIELD_VALUE => $value]) + ($json[self::FIELD_FOCUS_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_REQUEST]) || array_key_exists(self::FIELD_REQUEST, $json)) {
            $type->setRequest(FHIRResourceReference::jsonUnserialize($json[self::FIELD_REQUEST], $config));
        }
        if (isset($json[self::FIELD_RESPONSE]) || array_key_exists(self::FIELD_RESPONSE, $json)) {
            $type->setResponse(FHIRResourceReference::jsonUnserialize($json[self::FIELD_RESPONSE], $config));
        }
        if (isset($json[self::FIELD_DOCUMENTATION])
            || isset($json[self::FIELD_DOCUMENTATION_EXT])
            || array_key_exists(self::FIELD_DOCUMENTATION, $json)
            || array_key_exists(self::FIELD_DOCUMENTATION_EXT, $json)) {
            $value = $json[self::FIELD_DOCUMENTATION] ?? null;
            $type->setDocumentation(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_DOCUMENTATION_EXT] ?? []),
                $config,
            ));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->code)) {
            $out->code = $this->code;
        }
        if (isset($this->category)) {
            if (null !== ($val = $this->category->getValue())) {
                $out->category = $val;
            }
            if ($this->category->_nonValueFieldDefined()) {
                $ext = $this->category->jsonSerialize();
                unset($ext->value);
                $out->_category = $ext;
            }
        }
        if (isset($this->mode)) {
            if (null !== ($val = $this->mode->getValue())) {
                $out->mode = $val;
            }
            if ($this->mode->_nonValueFieldDefined()) {
                $ext = $this->mode->jsonSerialize();
                unset($ext->value);
                $out->_mode = $ext;
            }
        }
        if (isset($this->protocol) && [] !== $this->protocol) {
            $out->protocol = $this->protocol;
        }
        if (isset($this->focus)) {
            if (null !== ($val = $this->focus->getValue())) {
                $out->focus = $val;
            }
            if ($this->focus->_nonValueFieldDefined()) {
                $ext = $this->focus->jsonSerialize();
                unset($ext->value);
                $out->_focus = $ext;
            }
        }
        if (isset($this->request)) {
            $out->request = $this->request;
        }
        if (isset($this->response)) {
            $out->response = $this->response;
        }
        if (isset($this->documentation)) {
            if (null !== ($val = $this->documentation->getValue())) {
                $out->documentation = $val;
            }
            if ($this->documentation->_nonValueFieldDefined()) {
                $ext = $this->documentation->jsonSerialize();
                unset($ext->value);
                $out->_documentation = $ext;
            }
        }
        return $out;
    }
}