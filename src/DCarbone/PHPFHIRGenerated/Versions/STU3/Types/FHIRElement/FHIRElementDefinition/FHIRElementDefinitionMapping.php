<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition;

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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
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
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
class FHIRElementDefinitionMapping extends FHIRElement
{
    use TypeValidationsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_MAPPING;

    /* class_default.php:47 */
    public const FIELD_IDENTITY = 'identity';
    public const FIELD_IDENTITY_EXT = '_identity';
    public const FIELD_LANGUAGE = 'language';
    public const FIELD_LANGUAGE_EXT = '_language';
    public const FIELD_MAP = 'map';
    public const FIELD_MAP_EXT = '_map';
    public const FIELD_COMMENT = 'comment';
    public const FIELD_COMMENT_EXT = '_comment';

    /* class_default.php:66 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_IDENTITY => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_MAP => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:95 */
    private array $_valueXMLLocations = [
        self::FIELD_IDENTITY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_LANGUAGE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MAP => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_COMMENT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:111 */
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An internal reference to the definition of a mapping.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId 
     */
    protected FHIRId $identity;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identifies the computable language in which mapping.map is expressed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode 
     */
    protected FHIRCode $language;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Expresses what part of the target specification corresponds to this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $map;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Comments that provide information about the mapping or its use.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $comment;

    /* constructor.php:62 */
    /**
     * FHIRElementDefinitionMapping Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId $identity
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode $language
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $map
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $comment
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|string|FHIRIdPrimitive|FHIRId $identity = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|string|FHIRStringPrimitive|FHIRString $map = null,
                                null|string|FHIRStringPrimitive|FHIRString $comment = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            fhirComments: $fhirComments);
        if (null !== $identity) {
            $this->setIdentity($identity);
        }
        if (null !== $language) {
            $this->setLanguage($language);
        }
        if (null !== $map) {
            $this->setMap($map);
        }
        if (null !== $comment) {
            $this->setComment($comment);
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
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An internal reference to the definition of a mapping.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId
     */
    public function getIdentity(): null|FHIRId
    {
        return $this->identity ?? null;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An internal reference to the definition of a mapping.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId $identity
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setIdentity(null|string|FHIRIdPrimitive|FHIRId $identity,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $identity) {
            unset($this->identity);
            return $this;
        }
        if (!($identity instanceof FHIRId)) {
            $identity = new FHIRId(value: $identity);
        }
        $this->identity = $identity;
        if ($this->_valueXMLLocations[self::FIELD_IDENTITY] !== $valueXMLLocation) {
            $this->_setIdentityValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the identity element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getIdentityValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_IDENTITY];
    }

    /**
     * Set the location the "value" field of the identity element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setIdentityValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_IDENTITY] = $valueXMLLocation;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identifies the computable language in which mapping.map is expressed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode
     */
    public function getLanguage(): null|FHIRCode
    {
        return $this->language ?? null;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identifies the computable language in which mapping.map is expressed.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode $language
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setLanguage(null|string|FHIRCodePrimitive|FHIRCode $language,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $language) {
            unset($this->language);
            return $this;
        }
        if (!($language instanceof FHIRCode)) {
            $language = new FHIRCode(value: $language);
        }
        $this->language = $language;
        if ($this->_valueXMLLocations[self::FIELD_LANGUAGE] !== $valueXMLLocation) {
            $this->_setLanguageValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the language element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getLanguageValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_LANGUAGE];
    }

    /**
     * Set the location the "value" field of the language element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setLanguageValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_LANGUAGE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Expresses what part of the target specification corresponds to this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getMap(): null|FHIRString
    {
        return $this->map ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Expresses what part of the target specification corresponds to this element.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $map
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setMap(null|string|FHIRStringPrimitive|FHIRString $map,
                           ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $map) {
            unset($this->map);
            return $this;
        }
        if (!($map instanceof FHIRString)) {
            $map = new FHIRString(value: $map);
        }
        $this->map = $map;
        if ($this->_valueXMLLocations[self::FIELD_MAP] !== $valueXMLLocation) {
            $this->_setMapValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the map element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getMapValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_MAP];
    }

    /**
     * Set the location the "value" field of the map element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setMapValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_MAP] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Comments that provide information about the mapping or its use.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getComment(): null|FHIRString
    {
        return $this->comment ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Comments that provide information about the mapping or its use.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $comment
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setComment(null|string|FHIRStringPrimitive|FHIRString $comment,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $comment) {
            unset($this->comment);
            return $this;
        }
        if (!($comment instanceof FHIRString)) {
            $comment = new FHIRString(value: $comment);
        }
        $this->comment = $comment;
        if ($this->_valueXMLLocations[self::FIELD_COMMENT] !== $valueXMLLocation) {
            $this->_setCommentValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the comment element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getCommentValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_COMMENT];
    }

    /**
     * Set the location the "value" field of the comment element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setCommentValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_COMMENT] = $valueXMLLocation;
        return $this;
    }

    /* class_default.php:208 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRElementDefinitionMapping)) {
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
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_IDENTITY === $cen) {
                $type->setIdentity(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LANGUAGE === $cen) {
                $type->setLanguage(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAP === $cen) {
                $type->setMap(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COMMENT === $cen) {
                $type->setComment(FHIRString::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_IDENTITY])) {
            if (isset($type->identity)) {
                $type->identity->setValue((string)$attributes[self::FIELD_IDENTITY]);
                $type->_setIdentityValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setIdentity((string)$attributes[self::FIELD_IDENTITY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_MAP])) {
            if (isset($type->map)) {
                $type->map->setValue((string)$attributes[self::FIELD_MAP]);
                $type->_setMapValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setMap((string)$attributes[self::FIELD_MAP], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_COMMENT])) {
            if (isset($type->comment)) {
                $type->comment->setValue((string)$attributes[self::FIELD_COMMENT]);
                $type->_setCommentValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setComment((string)$attributes[self::FIELD_COMMENT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
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
        if (isset($this->identity) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_IDENTITY]) {
            $xw->writeAttribute(self::FIELD_IDENTITY, $this->identity->_getFormattedValue());
        }
        if (isset($this->language) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LANGUAGE]) {
            $xw->writeAttribute(self::FIELD_LANGUAGE, $this->language->_getFormattedValue());
        }
        if (isset($this->map) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MAP]) {
            $xw->writeAttribute(self::FIELD_MAP, $this->map->_getFormattedValue());
        }
        if (isset($this->comment) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_COMMENT]) {
            $xw->writeAttribute(self::FIELD_COMMENT, $this->comment->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identity)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_IDENTITY]
                || $this->identity->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_IDENTITY);
            $this->identity->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_IDENTITY]);
            $xw->endElement();
        }
        if (isset($this->language)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LANGUAGE]
                || $this->language->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LANGUAGE);
            $this->language->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LANGUAGE]);
            $xw->endElement();
        }
        if (isset($this->map)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MAP]
                || $this->map->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MAP);
            $this->map->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MAP]);
            $xw->endElement();
        }
        if (isset($this->comment)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_COMMENT]
                || $this->comment->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_COMMENT);
            $this->comment->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_COMMENT]);
            $xw->endElement();
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRElementDefinitionMapping)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_IDENTITY])
            || isset($json[self::FIELD_IDENTITY_EXT])
            || array_key_exists(self::FIELD_IDENTITY, $json)
            || array_key_exists(self::FIELD_IDENTITY_EXT, $json)) {
            $value = $json[self::FIELD_IDENTITY] ?? null;
            $type->setIdentity(FHIRId::jsonUnserialize(
                (is_array($value) ? $value : [FHIRId::FIELD_VALUE => $value]) + ($json[self::FIELD_IDENTITY_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_LANGUAGE])
            || isset($json[self::FIELD_LANGUAGE_EXT])
            || array_key_exists(self::FIELD_LANGUAGE, $json)
            || array_key_exists(self::FIELD_LANGUAGE_EXT, $json)) {
            $value = $json[self::FIELD_LANGUAGE] ?? null;
            $type->setLanguage(FHIRCode::jsonUnserialize(
                (is_array($value) ? $value : [FHIRCode::FIELD_VALUE => $value]) + ($json[self::FIELD_LANGUAGE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_MAP])
            || isset($json[self::FIELD_MAP_EXT])
            || array_key_exists(self::FIELD_MAP, $json)
            || array_key_exists(self::FIELD_MAP_EXT, $json)) {
            $value = $json[self::FIELD_MAP] ?? null;
            $type->setMap(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_MAP_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_COMMENT])
            || isset($json[self::FIELD_COMMENT_EXT])
            || array_key_exists(self::FIELD_COMMENT, $json)
            || array_key_exists(self::FIELD_COMMENT_EXT, $json)) {
            $value = $json[self::FIELD_COMMENT] ?? null;
            $type->setComment(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_COMMENT_EXT] ?? []),
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
        if (isset($this->identity)) {
            if (null !== ($val = $this->identity->getValue())) {
                $out->identity = $val;
            }
            if ($this->identity->_nonValueFieldDefined()) {
                $ext = $this->identity->jsonSerialize();
                unset($ext->value);
                $out->_identity = $ext;
            }
        }
        if (isset($this->language)) {
            if (null !== ($val = $this->language->getValue())) {
                $out->language = $val;
            }
            if ($this->language->_nonValueFieldDefined()) {
                $ext = $this->language->jsonSerialize();
                unset($ext->value);
                $out->_language = $ext;
            }
        }
        if (isset($this->map)) {
            if (null !== ($val = $this->map->getValue())) {
                $out->map = $val;
            }
            if ($this->map->_nonValueFieldDefined()) {
                $ext = $this->map->jsonSerialize();
                unset($ext->value);
                $out->_map = $ext;
            }
        }
        if (isset($this->comment)) {
            if (null !== ($val = $this->comment->getValue())) {
                $out->comment = $val;
            }
            if ($this->comment->_nonValueFieldDefined()) {
                $ext = $this->comment->jsonSerialize();
                unset($ext->value);
                $out->_comment = $ext;
            }
        }
        return $out;
    }
}