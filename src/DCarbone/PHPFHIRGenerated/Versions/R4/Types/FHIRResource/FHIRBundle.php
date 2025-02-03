<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource;

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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRBundleTypeList;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBundleType;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRSignature;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUnsignedIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface;

/**
 * A container for a collection of resources.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRBundle extends FHIRResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_BUNDLE;

    /* class_default.php:47 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_TYPE = 'type';
    public const FIELD_TYPE_EXT = '_type';
    public const FIELD_TIMESTAMP = 'timestamp';
    public const FIELD_TIMESTAMP_EXT = '_timestamp';
    public const FIELD_TOTAL = 'total';
    public const FIELD_TOTAL_EXT = '_total';
    public const FIELD_LINK = 'link';
    public const FIELD_ENTRY = 'entry';
    public const FIELD_SIGNATURE = 'signature';

    /* class_default.php:66 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:95 */
    private array $_valueXMLLocations = [
        self::FIELD_TYPE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TIMESTAMP => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TOTAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:111 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A persistent identifier for the bundle that won't change as a bundle is copied
     * from server to server.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier 
     */
    protected FHIRIdentifier $identifier;
    /**
     * Indicates the purpose of a bundle - how it is intended to be used.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the purpose of this bundle - how it is intended to be used.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBundleType 
     */
    protected FHIRBundleType $type;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date/time that the bundle was assembled - i.e. when the resources were
     * placed in the bundle.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInstant 
     */
    protected FHIRInstant $timestamp;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If a set of search matches, this is the total number of entries of type 'match'
     * across all pages in the search. It does not include search.mode = 'include' or
     * 'outcome' entries and it does not provide a count of the number of entries in
     * the Bundle.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUnsignedInt 
     */
    protected FHIRUnsignedInt $total;
    /**
     * A container for a collection of resources.
     *
     * A series of links that provide context to this bundle.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink[] 
     */
    protected array $link;
    /**
     * A container for a collection of resources.
     *
     * An entry in a bundle resource - will either contain a resource or information
     * about a resource (transactions and history only).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry[] 
     */
    protected array $entry;
    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Digital Signature - base64 encoded. XML-DSig or a JWT.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRSignature 
     */
    protected FHIRSignature $signature;

    /* constructor.php:62 */
    /**
     * FHIRBundle Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRBundleTypeList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBundleType $type
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInstant $timestamp
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUnsignedInt $total
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink[] $link
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry[] $entry
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRSignature $signature
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRIdPrimitive|FHIRId $id = null,
                                null|FHIRMeta $meta = null,
                                null|string|FHIRUriPrimitive|FHIRUri $implicitRules = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRIdentifier $identifier = null,
                                null|string|FHIRBundleTypeList|FHIRBundleType $type = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $timestamp = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $total = null,
                                null|iterable $link = null,
                                null|iterable $entry = null,
                                null|FHIRSignature $signature = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(id: $id,
                            meta: $meta,
                            implicitRules: $implicitRules,
                            language: $language,
                            fhirComments: $fhirComments);
        if (null !== $identifier) {
            $this->setIdentifier($identifier);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $timestamp) {
            $this->setTimestamp($timestamp);
        }
        if (null !== $total) {
            $this->setTotal($total);
        }
        if (null !== $link) {
            $this->setLink(...$link);
        }
        if (null !== $entry) {
            $this->setEntry(...$entry);
        }
        if (null !== $signature) {
            $this->setSignature($signature);
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

    /* class_default.php:155 */
    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:169 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A persistent identifier for the bundle that won't change as a bundle is copied
     * from server to server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier(): null|FHIRIdentifier
    {
        return $this->identifier ?? null;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A persistent identifier for the bundle that won't change as a bundle is copied
     * from server to server.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function setIdentifier(null|FHIRIdentifier $identifier): self
    {
        if (null === $identifier) {
            unset($this->identifier);
            return $this;
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Indicates the purpose of a bundle - how it is intended to be used.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the purpose of this bundle - how it is intended to be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBundleType
     */
    public function getType(): null|FHIRBundleType
    {
        return $this->type ?? null;
    }

    /**
     * Indicates the purpose of a bundle - how it is intended to be used.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the purpose of this bundle - how it is intended to be used.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRBundleTypeList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBundleType $type
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setType(null|string|FHIRBundleTypeList|FHIRBundleType $type,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        if (!($type instanceof FHIRBundleType)) {
            $type = new FHIRBundleType(value: $type);
        }
        $this->type = $type;
        if ($this->_valueXMLLocations[self::FIELD_TYPE] !== $valueXMLLocation) {
            $this->_setTypeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the type element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getTypeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_TYPE];
    }

    /**
     * Set the location the "value" field of the type element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setTypeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_TYPE] = $valueXMLLocation;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date/time that the bundle was assembled - i.e. when the resources were
     * placed in the bundle.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInstant
     */
    public function getTimestamp(): null|FHIRInstant
    {
        return $this->timestamp ?? null;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date/time that the bundle was assembled - i.e. when the resources were
     * placed in the bundle.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInstant $timestamp
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTimestamp(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $timestamp,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $timestamp) {
            unset($this->timestamp);
            return $this;
        }
        if (!($timestamp instanceof FHIRInstant)) {
            $timestamp = new FHIRInstant(value: $timestamp);
        }
        $this->timestamp = $timestamp;
        if ($this->_valueXMLLocations[self::FIELD_TIMESTAMP] !== $valueXMLLocation) {
            $this->_setTimestampValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the timestamp element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getTimestampValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_TIMESTAMP];
    }

    /**
     * Set the location the "value" field of the timestamp element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setTimestampValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_TIMESTAMP] = $valueXMLLocation;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If a set of search matches, this is the total number of entries of type 'match'
     * across all pages in the search. It does not include search.mode = 'include' or
     * 'outcome' entries and it does not provide a count of the number of entries in
     * the Bundle.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUnsignedInt
     */
    public function getTotal(): null|FHIRUnsignedInt
    {
        return $this->total ?? null;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If a set of search matches, this is the total number of entries of type 'match'
     * across all pages in the search. It does not include search.mode = 'include' or
     * 'outcome' entries and it does not provide a count of the number of entries in
     * the Bundle.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUnsignedInt $total
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTotal(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $total,
                             ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $total) {
            unset($this->total);
            return $this;
        }
        if (!($total instanceof FHIRUnsignedInt)) {
            $total = new FHIRUnsignedInt(value: $total);
        }
        $this->total = $total;
        if ($this->_valueXMLLocations[self::FIELD_TOTAL] !== $valueXMLLocation) {
            $this->_setTotalValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the total element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getTotalValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_TOTAL];
    }

    /**
     * Set the location the "value" field of the total element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setTotalValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_TOTAL] = $valueXMLLocation;
        return $this;
    }

    /**
     * A container for a collection of resources.
     *
     * A series of links that provide context to this bundle.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink[]
     */
    public function getLink(): array
    {
        return $this->link ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink>
     */
    public function getLinkIterator(): iterable
    {
        if (!isset($this->link)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->link);
    }

    /**
     * A container for a collection of resources.
     *
     * A series of links that provide context to this bundle.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink $link
     * @return static
     */
    public function addLink(FHIRBundleLink $link): self
    {
        if (!isset($this->link)) {
            $this->link = [];
        }
        $this->link[] = $link;
        return $this;
    }

    /**
     * A container for a collection of resources.
     *
     * A series of links that provide context to this bundle.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink ...$link
     * @return static
     */
    public function setLink(FHIRBundleLink ...$link): self
    {
        if ([] === $link) {
            unset($this->link);
            return $this;
        }
        $this->link = $link;
        return $this;
    }

    /**
     * A container for a collection of resources.
     *
     * An entry in a bundle resource - will either contain a resource or information
     * about a resource (transactions and history only).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry[]
     */
    public function getEntry(): array
    {
        return $this->entry ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry>
     */
    public function getEntryIterator(): iterable
    {
        if (!isset($this->entry)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->entry);
    }

    /**
     * A container for a collection of resources.
     *
     * An entry in a bundle resource - will either contain a resource or information
     * about a resource (transactions and history only).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry $entry
     * @return static
     */
    public function addEntry(FHIRBundleEntry $entry): self
    {
        if (!isset($this->entry)) {
            $this->entry = [];
        }
        $this->entry[] = $entry;
        return $this;
    }

    /**
     * A container for a collection of resources.
     *
     * An entry in a bundle resource - will either contain a resource or information
     * about a resource (transactions and history only).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry ...$entry
     * @return static
     */
    public function setEntry(FHIRBundleEntry ...$entry): self
    {
        if ([] === $entry) {
            unset($this->entry);
            return $this;
        }
        $this->entry = $entry;
        return $this;
    }

    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Digital Signature - base64 encoded. XML-DSig or a JWT.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRSignature
     */
    public function getSignature(): null|FHIRSignature
    {
        return $this->signature ?? null;
    }

    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Digital Signature - base64 encoded. XML-DSig or a JWT.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRSignature $signature
     * @return static
     */
    public function setSignature(null|FHIRSignature $signature): self
    {
        if (null === $signature) {
            unset($this->signature);
            return $this;
        }
        $this->signature = $signature;
        return $this;
    }

    /* class_default.php:208 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRBundle $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRBundle
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRBundle)) {
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
            if (self::FIELD_ID === $cen) {
                $type->setId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_META === $cen) {
                $type->setMeta(FHIRMeta::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $cen) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LANGUAGE === $cen) {
                $type->setLanguage(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->setIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRBundleType::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIMESTAMP === $cen) {
                $type->setTimestamp(FHIRInstant::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TOTAL === $cen) {
                $type->setTotal(FHIRUnsignedInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LINK === $cen) {
                $type->addLink(FHIRBundleLink::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ENTRY === $cen) {
                $type->addEntry(FHIRBundleEntry::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SIGNATURE === $cen) {
                $type->setSignature(FHIRSignature::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            if (isset($type->id)) {
                $type->id->setValue((string)$attributes[self::FIELD_ID]);
                $type->_setIdValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            if (isset($type->implicitRules)) {
                $type->implicitRules->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
                $type->_setImplicitRulesValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
                $type->_setLanguageValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TYPE])) {
            if (isset($type->type)) {
                $type->type->setValue((string)$attributes[self::FIELD_TYPE]);
                $type->_setTypeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setType((string)$attributes[self::FIELD_TYPE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TIMESTAMP])) {
            if (isset($type->timestamp)) {
                $type->timestamp->setValue((string)$attributes[self::FIELD_TIMESTAMP]);
                $type->_setTimestampValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setTimestamp((string)$attributes[self::FIELD_TIMESTAMP], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TOTAL])) {
            if (isset($type->total)) {
                $type->total->setValue((string)$attributes[self::FIELD_TOTAL]);
                $type->_setTotalValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setTotal((string)$attributes[self::FIELD_TOTAL], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('Bundle', $this->_getSourceXMLNS());
        }
        if (isset($this->type) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TYPE]) {
            $xw->writeAttribute(self::FIELD_TYPE, $this->type->_getFormattedValue());
        }
        if (isset($this->timestamp) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TIMESTAMP]) {
            $xw->writeAttribute(self::FIELD_TIMESTAMP, $this->timestamp->_getFormattedValue());
        }
        if (isset($this->total) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TOTAL]) {
            $xw->writeAttribute(self::FIELD_TOTAL, $this->total->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $this->identifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->type)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TYPE]
                || $this->type->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TYPE]);
            $xw->endElement();
        }
        if (isset($this->timestamp)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TIMESTAMP]
                || $this->timestamp->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TIMESTAMP);
            $this->timestamp->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TIMESTAMP]);
            $xw->endElement();
        }
        if (isset($this->total)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TOTAL]
                || $this->total->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TOTAL);
            $this->total->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TOTAL]);
            $xw->endElement();
        }
        if (isset($this->link)) {
            foreach ($this->link as $v) {
                $xw->startElement(self::FIELD_LINK);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->entry)) {
            foreach ($this->entry as $v) {
                $xw->startElement(self::FIELD_ENTRY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->signature)) {
            $xw->startElement(self::FIELD_SIGNATURE);
            $this->signature->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRBundle $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRBundle
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRBundle)) {
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
        if (isset($json[self::FIELD_IDENTIFIER]) || array_key_exists(self::FIELD_IDENTIFIER, $json)) {
            $type->setIdentifier(FHIRIdentifier::jsonUnserialize($json[self::FIELD_IDENTIFIER], $config));
        }
        if (isset($json[self::FIELD_TYPE])
            || isset($json[self::FIELD_TYPE_EXT])
            || array_key_exists(self::FIELD_TYPE, $json)
            || array_key_exists(self::FIELD_TYPE_EXT, $json)) {
            $value = $json[self::FIELD_TYPE] ?? null;
            $type->setType(FHIRBundleType::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBundleType::FIELD_VALUE => $value]) + ($json[self::FIELD_TYPE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_TIMESTAMP])
            || isset($json[self::FIELD_TIMESTAMP_EXT])
            || array_key_exists(self::FIELD_TIMESTAMP, $json)
            || array_key_exists(self::FIELD_TIMESTAMP_EXT, $json)) {
            $value = $json[self::FIELD_TIMESTAMP] ?? null;
            $type->setTimestamp(FHIRInstant::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInstant::FIELD_VALUE => $value]) + ($json[self::FIELD_TIMESTAMP_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_TOTAL])
            || isset($json[self::FIELD_TOTAL_EXT])
            || array_key_exists(self::FIELD_TOTAL, $json)
            || array_key_exists(self::FIELD_TOTAL_EXT, $json)) {
            $value = $json[self::FIELD_TOTAL] ?? null;
            $type->setTotal(FHIRUnsignedInt::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUnsignedInt::FIELD_VALUE => $value]) + ($json[self::FIELD_TOTAL_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_LINK]) || array_key_exists(self::FIELD_LINK, $json)) {
            $vs = $json[self::FIELD_LINK];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addLink(FHIRBundleLink::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_ENTRY]) || array_key_exists(self::FIELD_ENTRY, $json)) {
            $vs = $json[self::FIELD_ENTRY];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addEntry(FHIRBundleEntry::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_SIGNATURE]) || array_key_exists(self::FIELD_SIGNATURE, $json)) {
            $type->setSignature(FHIRSignature::jsonUnserialize($json[self::FIELD_SIGNATURE], $config));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->identifier)) {
            $out->identifier = $this->identifier;
        }
        if (isset($this->type)) {
            if (null !== ($val = $this->type->getValue())) {
                $out->type = $val;
            }
            if ($this->type->_nonValueFieldDefined()) {
                $ext = $this->type->jsonSerialize();
                unset($ext->value);
                $out->_type = $ext;
            }
        }
        if (isset($this->timestamp)) {
            if (null !== ($val = $this->timestamp->getValue())) {
                $out->timestamp = $val;
            }
            if ($this->timestamp->_nonValueFieldDefined()) {
                $ext = $this->timestamp->jsonSerialize();
                unset($ext->value);
                $out->_timestamp = $ext;
            }
        }
        if (isset($this->total)) {
            if (null !== ($val = $this->total->getValue())) {
                $out->total = $val;
            }
            if ($this->total->_nonValueFieldDefined()) {
                $ext = $this->total->jsonSerialize();
                unset($ext->value);
                $out->_total = $ext;
            }
        }
        if (isset($this->link) && [] !== $this->link) {
            $out->link = $this->link;
        }
        if (isset($this->entry) && [] !== $this->entry) {
            $out->entry = $this->entry;
        }
        if (isset($this->signature)) {
            $out->signature = $this->signature;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}