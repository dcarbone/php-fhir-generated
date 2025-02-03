<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource;

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
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRGroupTypeList;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupMember;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRGroupType;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUnsignedIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionTypeMap;

/**
 * Represents a defined collection of entities that may be discussed or acted upon
 * collectively but which are not expected to act collectively, and are not
 * formally or legally recognized; i.e. a collection of entities that isn't an
 * Organization.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRGroup extends FHIRDomainResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_GROUP;

    /* class_default.php:47 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_ACTIVE = 'active';
    public const FIELD_ACTIVE_EXT = '_active';
    public const FIELD_TYPE = 'type';
    public const FIELD_TYPE_EXT = '_type';
    public const FIELD_ACTUAL = 'actual';
    public const FIELD_ACTUAL_EXT = '_actual';
    public const FIELD_CODE = 'code';
    public const FIELD_NAME = 'name';
    public const FIELD_NAME_EXT = '_name';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_QUANTITY_EXT = '_quantity';
    public const FIELD_MANAGING_ENTITY = 'managingEntity';
    public const FIELD_CHARACTERISTIC = 'characteristic';
    public const FIELD_MEMBER = 'member';

    /* class_default.php:66 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_ACTUAL => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:95 */
    private array $_valueXMLLocations = [
        self::FIELD_ACTIVE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TYPE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ACTUAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_NAME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_QUANTITY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:111 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique business identifier for this group.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the record for the group is available for use or is merely
     * being retained for historical purposes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $active;
    /**
     * Types of resources that are part of group.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the broad classification of the kind of resources the group includes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRGroupType 
     */
    protected FHIRGroupType $type;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates that the resource refers to a specific group of real
     * individuals. If false, the group defines a set of intended individuals.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $actual;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides a specific type of resource the group includes; e.g. "cow", "syringe",
     * etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $code;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A label assigned to the group for human identification and communication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $name;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A count of the number of resource instances that are part of the group.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUnsignedInt 
     */
    protected FHIRUnsignedInt $quantity;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Entity responsible for defining and maintaining Group characteristics and/or
     * registered members.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $managingEntity;
    /**
     * Represents a defined collection of entities that may be discussed or acted upon
     * collectively but which are not expected to act collectively, and are not
     * formally or legally recognized; i.e. a collection of entities that isn't an
     * Organization.
     *
     * Identifies traits whose presence r absence is shared by members of the group.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic[] 
     */
    protected array $characteristic;
    /**
     * Represents a defined collection of entities that may be discussed or acted upon
     * collectively but which are not expected to act collectively, and are not
     * formally or legally recognized; i.e. a collection of entities that isn't an
     * Organization.
     *
     * Identifies the resource instances that are members of the group.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupMember[] 
     */
    protected array $member;

    /* constructor.php:62 */
    /**
     * FHIRGroup Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean $active
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRGroupTypeList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRGroupType $type
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean $actual
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $code
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $name
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUnsignedInt $quantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $managingEntity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic[] $characteristic
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupMember[] $member
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRIdPrimitive|FHIRId $id = null,
                                null|FHIRMeta $meta = null,
                                null|string|FHIRUriPrimitive|FHIRUri $implicitRules = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $extension = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $identifier = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $active = null,
                                null|string|FHIRGroupTypeList|FHIRGroupType $type = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $actual = null,
                                null|FHIRCodeableConcept $code = null,
                                null|string|FHIRStringPrimitive|FHIRString $name = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $quantity = null,
                                null|FHIRReference $managingEntity = null,
                                null|iterable $characteristic = null,
                                null|iterable $member = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(id: $id,
                            meta: $meta,
                            implicitRules: $implicitRules,
                            language: $language,
                            text: $text,
                            contained: $contained,
                            extension: $extension,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $identifier) {
            $this->setIdentifier(...$identifier);
        }
        if (null !== $active) {
            $this->setActive($active);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $actual) {
            $this->setActual($actual);
        }
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $name) {
            $this->setName($name);
        }
        if (null !== $quantity) {
            $this->setQuantity($quantity);
        }
        if (null !== $managingEntity) {
            $this->setManagingEntity($managingEntity);
        }
        if (null !== $characteristic) {
            $this->setCharacteristic(...$characteristic);
        }
        if (null !== $member) {
            $this->setMember(...$member);
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
     * A unique business identifier for this group.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier>
     */
    public function getIdentifierIterator(): iterable
    {
        if (!isset($this->identifier)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->identifier);
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique business identifier for this group.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier): self
    {
        if (!isset($this->identifier)) {
            $this->identifier = [];
        }
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique business identifier for this group.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        if ([] === $identifier) {
            unset($this->identifier);
            return $this;
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the record for the group is available for use or is merely
     * being retained for historical purposes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean
     */
    public function getActive(): null|FHIRBoolean
    {
        return $this->active ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the record for the group is available for use or is merely
     * being retained for historical purposes.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean $active
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setActive(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $active,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $active) {
            unset($this->active);
            return $this;
        }
        if (!($active instanceof FHIRBoolean)) {
            $active = new FHIRBoolean(value: $active);
        }
        $this->active = $active;
        if ($this->_valueXMLLocations[self::FIELD_ACTIVE] !== $valueXMLLocation) {
            $this->_setActiveValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the active element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getActiveValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ACTIVE];
    }

    /**
     * Set the location the "value" field of the active element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setActiveValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ACTIVE] = $valueXMLLocation;
        return $this;
    }

    /**
     * Types of resources that are part of group.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the broad classification of the kind of resources the group includes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRGroupType
     */
    public function getType(): null|FHIRGroupType
    {
        return $this->type ?? null;
    }

    /**
     * Types of resources that are part of group.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the broad classification of the kind of resources the group includes.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRGroupTypeList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRGroupType $type
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setType(null|string|FHIRGroupTypeList|FHIRGroupType $type,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        if (!($type instanceof FHIRGroupType)) {
            $type = new FHIRGroupType(value: $type);
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates that the resource refers to a specific group of real
     * individuals. If false, the group defines a set of intended individuals.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean
     */
    public function getActual(): null|FHIRBoolean
    {
        return $this->actual ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates that the resource refers to a specific group of real
     * individuals. If false, the group defines a set of intended individuals.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean $actual
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setActual(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $actual,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $actual) {
            unset($this->actual);
            return $this;
        }
        if (!($actual instanceof FHIRBoolean)) {
            $actual = new FHIRBoolean(value: $actual);
        }
        $this->actual = $actual;
        if ($this->_valueXMLLocations[self::FIELD_ACTUAL] !== $valueXMLLocation) {
            $this->_setActualValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the actual element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getActualValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ACTUAL];
    }

    /**
     * Set the location the "value" field of the actual element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setActualValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ACTUAL] = $valueXMLLocation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides a specific type of resource the group includes; e.g. "cow", "syringe",
     * etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getCode(): null|FHIRCodeableConcept
    {
        return $this->code ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides a specific type of resource the group includes; e.g. "cow", "syringe",
     * etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(null|FHIRCodeableConcept $code): self
    {
        if (null === $code) {
            unset($this->code);
            return $this;
        }
        $this->code = $code;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A label assigned to the group for human identification and communication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getName(): null|FHIRString
    {
        return $this->name ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A label assigned to the group for human identification and communication.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $name
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setName(null|string|FHIRStringPrimitive|FHIRString $name,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $name) {
            unset($this->name);
            return $this;
        }
        if (!($name instanceof FHIRString)) {
            $name = new FHIRString(value: $name);
        }
        $this->name = $name;
        if ($this->_valueXMLLocations[self::FIELD_NAME] !== $valueXMLLocation) {
            $this->_setNameValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the name element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getNameValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_NAME];
    }

    /**
     * Set the location the "value" field of the name element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setNameValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_NAME] = $valueXMLLocation;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A count of the number of resource instances that are part of the group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUnsignedInt
     */
    public function getQuantity(): null|FHIRUnsignedInt
    {
        return $this->quantity ?? null;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A count of the number of resource instances that are part of the group.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUnsignedInt $quantity
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setQuantity(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $quantity,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $quantity) {
            unset($this->quantity);
            return $this;
        }
        if (!($quantity instanceof FHIRUnsignedInt)) {
            $quantity = new FHIRUnsignedInt(value: $quantity);
        }
        $this->quantity = $quantity;
        if ($this->_valueXMLLocations[self::FIELD_QUANTITY] !== $valueXMLLocation) {
            $this->_setQuantityValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the quantity element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getQuantityValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_QUANTITY];
    }

    /**
     * Set the location the "value" field of the quantity element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setQuantityValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_QUANTITY] = $valueXMLLocation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Entity responsible for defining and maintaining Group characteristics and/or
     * registered members.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getManagingEntity(): null|FHIRReference
    {
        return $this->managingEntity ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Entity responsible for defining and maintaining Group characteristics and/or
     * registered members.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $managingEntity
     * @return static
     */
    public function setManagingEntity(null|FHIRReference $managingEntity): self
    {
        if (null === $managingEntity) {
            unset($this->managingEntity);
            return $this;
        }
        $this->managingEntity = $managingEntity;
        return $this;
    }

    /**
     * Represents a defined collection of entities that may be discussed or acted upon
     * collectively but which are not expected to act collectively, and are not
     * formally or legally recognized; i.e. a collection of entities that isn't an
     * Organization.
     *
     * Identifies traits whose presence r absence is shared by members of the group.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic[]
     */
    public function getCharacteristic(): array
    {
        return $this->characteristic ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic>
     */
    public function getCharacteristicIterator(): iterable
    {
        if (!isset($this->characteristic)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->characteristic);
    }

    /**
     * Represents a defined collection of entities that may be discussed or acted upon
     * collectively but which are not expected to act collectively, and are not
     * formally or legally recognized; i.e. a collection of entities that isn't an
     * Organization.
     *
     * Identifies traits whose presence r absence is shared by members of the group.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic $characteristic
     * @return static
     */
    public function addCharacteristic(FHIRGroupCharacteristic $characteristic): self
    {
        if (!isset($this->characteristic)) {
            $this->characteristic = [];
        }
        $this->characteristic[] = $characteristic;
        return $this;
    }

    /**
     * Represents a defined collection of entities that may be discussed or acted upon
     * collectively but which are not expected to act collectively, and are not
     * formally or legally recognized; i.e. a collection of entities that isn't an
     * Organization.
     *
     * Identifies traits whose presence r absence is shared by members of the group.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic ...$characteristic
     * @return static
     */
    public function setCharacteristic(FHIRGroupCharacteristic ...$characteristic): self
    {
        if ([] === $characteristic) {
            unset($this->characteristic);
            return $this;
        }
        $this->characteristic = $characteristic;
        return $this;
    }

    /**
     * Represents a defined collection of entities that may be discussed or acted upon
     * collectively but which are not expected to act collectively, and are not
     * formally or legally recognized; i.e. a collection of entities that isn't an
     * Organization.
     *
     * Identifies the resource instances that are members of the group.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupMember[]
     */
    public function getMember(): array
    {
        return $this->member ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupMember>
     */
    public function getMemberIterator(): iterable
    {
        if (!isset($this->member)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->member);
    }

    /**
     * Represents a defined collection of entities that may be discussed or acted upon
     * collectively but which are not expected to act collectively, and are not
     * formally or legally recognized; i.e. a collection of entities that isn't an
     * Organization.
     *
     * Identifies the resource instances that are members of the group.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupMember $member
     * @return static
     */
    public function addMember(FHIRGroupMember $member): self
    {
        if (!isset($this->member)) {
            $this->member = [];
        }
        $this->member[] = $member;
        return $this;
    }

    /**
     * Represents a defined collection of entities that may be discussed or acted upon
     * collectively but which are not expected to act collectively, and are not
     * formally or legally recognized; i.e. a collection of entities that isn't an
     * Organization.
     *
     * Identifies the resource instances that are members of the group.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupMember ...$member
     * @return static
     */
    public function setMember(FHIRGroupMember ...$member): self
    {
        if ([] === $member) {
            unset($this->member);
            return $this;
        }
        $this->member = $member;
        return $this;
    }

    /* class_default.php:208 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRGroup $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRGroup
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRGroup)) {
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
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRNarrative::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINED === $cen) {
                foreach ($ce->children() as $cen) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ACTIVE === $cen) {
                $type->setActive(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRGroupType::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ACTUAL === $cen) {
                $type->setActual(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE === $cen) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NAME === $cen) {
                $type->setName(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_QUANTITY === $cen) {
                $type->setQuantity(FHIRUnsignedInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MANAGING_ENTITY === $cen) {
                $type->setManagingEntity(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CHARACTERISTIC === $cen) {
                $type->addCharacteristic(FHIRGroupCharacteristic::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MEMBER === $cen) {
                $type->addMember(FHIRGroupMember::xmlUnserialize($ce, $config));
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
        if (isset($attributes[self::FIELD_ACTIVE])) {
            if (isset($type->active)) {
                $type->active->setValue((string)$attributes[self::FIELD_ACTIVE]);
                $type->_setActiveValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setActive((string)$attributes[self::FIELD_ACTIVE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_ACTUAL])) {
            if (isset($type->actual)) {
                $type->actual->setValue((string)$attributes[self::FIELD_ACTUAL]);
                $type->_setActualValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setActual((string)$attributes[self::FIELD_ACTUAL], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_NAME])) {
            if (isset($type->name)) {
                $type->name->setValue((string)$attributes[self::FIELD_NAME]);
                $type->_setNameValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setName((string)$attributes[self::FIELD_NAME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_QUANTITY])) {
            if (isset($type->quantity)) {
                $type->quantity->setValue((string)$attributes[self::FIELD_QUANTITY]);
                $type->_setQuantityValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setQuantity((string)$attributes[self::FIELD_QUANTITY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('Group', $this->_getSourceXMLNS());
        }
        if (isset($this->active) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ACTIVE]) {
            $xw->writeAttribute(self::FIELD_ACTIVE, $this->active->_getFormattedValue());
        }
        if (isset($this->type) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TYPE]) {
            $xw->writeAttribute(self::FIELD_TYPE, $this->type->_getFormattedValue());
        }
        if (isset($this->actual) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ACTUAL]) {
            $xw->writeAttribute(self::FIELD_ACTUAL, $this->actual->_getFormattedValue());
        }
        if (isset($this->name) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NAME]) {
            $xw->writeAttribute(self::FIELD_NAME, $this->name->_getFormattedValue());
        }
        if (isset($this->quantity) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_QUANTITY]) {
            $xw->writeAttribute(self::FIELD_QUANTITY, $this->quantity->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->active)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ACTIVE]
                || $this->active->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ACTIVE);
            $this->active->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ACTIVE]);
            $xw->endElement();
        }
        if (isset($this->type)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TYPE]
                || $this->type->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TYPE]);
            $xw->endElement();
        }
        if (isset($this->actual)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ACTUAL]
                || $this->actual->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ACTUAL);
            $this->actual->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ACTUAL]);
            $xw->endElement();
        }
        if (isset($this->code)) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->name)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NAME]
                || $this->name->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NAME);
            $this->name->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NAME]);
            $xw->endElement();
        }
        if (isset($this->quantity)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_QUANTITY]
                || $this->quantity->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_QUANTITY);
            $this->quantity->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_QUANTITY]);
            $xw->endElement();
        }
        if (isset($this->managingEntity)) {
            $xw->startElement(self::FIELD_MANAGING_ENTITY);
            $this->managingEntity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->characteristic)) {
            foreach ($this->characteristic as $v) {
                $xw->startElement(self::FIELD_CHARACTERISTIC);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->member)) {
            foreach ($this->member as $v) {
                $xw->startElement(self::FIELD_MEMBER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRGroup $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRGroup
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRGroup)) {
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
            $vs = $json[self::FIELD_IDENTIFIER];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_ACTIVE])
            || isset($json[self::FIELD_ACTIVE_EXT])
            || array_key_exists(self::FIELD_ACTIVE, $json)
            || array_key_exists(self::FIELD_ACTIVE_EXT, $json)) {
            $value = $json[self::FIELD_ACTIVE] ?? null;
            $type->setActive(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_ACTIVE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_TYPE])
            || isset($json[self::FIELD_TYPE_EXT])
            || array_key_exists(self::FIELD_TYPE, $json)
            || array_key_exists(self::FIELD_TYPE_EXT, $json)) {
            $value = $json[self::FIELD_TYPE] ?? null;
            $type->setType(FHIRGroupType::jsonUnserialize(
                (is_array($value) ? $value : [FHIRGroupType::FIELD_VALUE => $value]) + ($json[self::FIELD_TYPE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ACTUAL])
            || isset($json[self::FIELD_ACTUAL_EXT])
            || array_key_exists(self::FIELD_ACTUAL, $json)
            || array_key_exists(self::FIELD_ACTUAL_EXT, $json)) {
            $value = $json[self::FIELD_ACTUAL] ?? null;
            $type->setActual(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_ACTUAL_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_CODE]) || array_key_exists(self::FIELD_CODE, $json)) {
            $type->setCode(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_CODE], $config));
        }
        if (isset($json[self::FIELD_NAME])
            || isset($json[self::FIELD_NAME_EXT])
            || array_key_exists(self::FIELD_NAME, $json)
            || array_key_exists(self::FIELD_NAME_EXT, $json)) {
            $value = $json[self::FIELD_NAME] ?? null;
            $type->setName(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_NAME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_QUANTITY])
            || isset($json[self::FIELD_QUANTITY_EXT])
            || array_key_exists(self::FIELD_QUANTITY, $json)
            || array_key_exists(self::FIELD_QUANTITY_EXT, $json)) {
            $value = $json[self::FIELD_QUANTITY] ?? null;
            $type->setQuantity(FHIRUnsignedInt::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUnsignedInt::FIELD_VALUE => $value]) + ($json[self::FIELD_QUANTITY_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_MANAGING_ENTITY]) || array_key_exists(self::FIELD_MANAGING_ENTITY, $json)) {
            $type->setManagingEntity(FHIRReference::jsonUnserialize($json[self::FIELD_MANAGING_ENTITY], $config));
        }
        if (isset($json[self::FIELD_CHARACTERISTIC]) || array_key_exists(self::FIELD_CHARACTERISTIC, $json)) {
            $vs = $json[self::FIELD_CHARACTERISTIC];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addCharacteristic(FHIRGroupCharacteristic::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_MEMBER]) || array_key_exists(self::FIELD_MEMBER, $json)) {
            $vs = $json[self::FIELD_MEMBER];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addMember(FHIRGroupMember::jsonUnserialize($v, $config));
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
        if (isset($this->identifier) && [] !== $this->identifier) {
            $out->identifier = $this->identifier;
        }
        if (isset($this->active)) {
            if (null !== ($val = $this->active->getValue())) {
                $out->active = $val;
            }
            if ($this->active->_nonValueFieldDefined()) {
                $ext = $this->active->jsonSerialize();
                unset($ext->value);
                $out->_active = $ext;
            }
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
        if (isset($this->actual)) {
            if (null !== ($val = $this->actual->getValue())) {
                $out->actual = $val;
            }
            if ($this->actual->_nonValueFieldDefined()) {
                $ext = $this->actual->jsonSerialize();
                unset($ext->value);
                $out->_actual = $ext;
            }
        }
        if (isset($this->code)) {
            $out->code = $this->code;
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
        if (isset($this->quantity)) {
            if (null !== ($val = $this->quantity->getValue())) {
                $out->quantity = $val;
            }
            if ($this->quantity->_nonValueFieldDefined()) {
                $ext = $this->quantity->jsonSerialize();
                unset($ext->value);
                $out->_quantity = $ext;
            }
        }
        if (isset($this->managingEntity)) {
            $out->managingEntity = $this->managingEntity;
        }
        if (isset($this->characteristic) && [] !== $this->characteristic) {
            $out->characteristic = $this->characteristic;
        }
        if (isset($this->member) && [] !== $this->member) {
            $out->member = $this->member;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}