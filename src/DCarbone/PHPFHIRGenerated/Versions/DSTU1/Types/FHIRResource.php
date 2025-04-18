<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 18th, 2025 00:31+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\FHIRVersion;
use DCarbone\PHPFHIRGenerated\Types\CommentContainerInterface;
use DCarbone\PHPFHIRGenerated\Types\CommentContainerTrait;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Types\SourceXMLNamespaceTrait;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRResourceInline;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionTypeMap;

/**
 * The base resource declaration used for all FHIR resource types - adds Narrative
 * and xml:lang
 */
class FHIRResource implements VersionResourceTypeInterface, CommentContainerInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait,
        CommentContainerTrait,
        SourceXMLNamespaceTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_RESOURCE;

    /* class_default.php:56 */
    public const FIELD_LANGUAGE = 'language';
    public const FIELD_LANGUAGE_EXT = '_language';
    public const FIELD_TEXT = 'text';
    public const FIELD_CONTAINED = 'contained';
    public const FIELD_EXTENSION = 'extension';
    public const FIELD_ID = 'id';
    public const FIELD_ID_EXT = '_id';
    public const FIELD_MODIFIER_EXTENSION = 'modifierExtension';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_LANGUAGE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The human language of the content. The value can be any valid value according to
     * BCP-47
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode 
     */
    #[FHIRCode]
    protected FHIRCode $language;
    /**
     * A human-readable formatted text, including images.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Text summary of resource content (for human interpretation)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative 
     */
    #[FHIRNarrative]
    protected FHIRNarrative $text;
    /**
     * Contained, inline Resources. These resources do not have an independent
     * existence apart from the resource that contains them - they cannot be identified
     * independently, and nor can they have their own independent transaction scope
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface> 
     */
    #[FHIRResourceInline]
    protected array $contained;
    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension> 
     */
    #[FHIRExtension]
    protected array $extension;
    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId 
     */
    #[FHIRId]
    protected FHIRId $id;
    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension> 
     */
    #[FHIRExtension]
    protected array $modifierExtension;

    /* constructor.php:61 */
    /**
     * FHIRResource Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative $text
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRResourceInline>|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface> $contained
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension> $modifierExtension
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $extension = null,
                                null|string|FHIRIdPrimitive|FHIRId $id = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $fhirComments = null)
    {
        if (null !== $fhirComments && [] !== $fhirComments) {
            $this->_setFHIRComments($fhirComments);
        }
        if (null !== $language) {
            $this->setLanguage($language);
        }
        if (null !== $text) {
            $this->setText($text);
        }
        if (null !== $contained) {
            $this->setContained(...$contained);
        }
        if (null !== $extension) {
            $this->setExtension(...$extension);
        }
        if (null !== $id) {
            $this->setId($id);
        }
        if (null !== $modifierExtension) {
            $this->setModifierExtension(...$modifierExtension);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:154 */
    public function _getFHIRVersion(): FHIRVersion
    {
        return Version::getFHIRVersion();
    }

    /* class_default.php:174 */
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The human language of the content. The value can be any valid value according to
     * BCP-47
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode
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
     * The human language of the content. The value can be any valid value according to
     * BCP-47
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $language
     * @return static
     */
    public function setLanguage(null|string|FHIRCodePrimitive|FHIRCode $language): self
    {
        if (null === $language) {
            unset($this->language);
            return $this;
        }
        if (!($language instanceof FHIRCode)) {
            $language = new FHIRCode(value: $language);
        }
        $this->language = $language;
        return $this;
    }

    /**
     * A human-readable formatted text, including images.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Text summary of resource content (for human interpretation)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative
     */
    public function getText(): null|FHIRNarrative
    {
        return $this->text ?? null;
    }

    /**
     * A human-readable formatted text, including images.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Text summary of resource content (for human interpretation)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative $text
     * @return static
     */
    public function setText(null|FHIRNarrative $text): self
    {
        if (null === $text) {
            unset($this->text);
            return $this;
        }
        $this->text = $text;
        return $this;
    }

    /**
     * Contained, inline Resources. These resources do not have an independent
     * existence apart from the resource that contains them - they cannot be identified
     * independently, and nor can they have their own independent transaction scope
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface>
     */
    public function getContained(): array
    {
        return $this->contained ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRResourceInline>
     */
    public function getContainedIterator(): iterable
    {
        if (!isset($this->contained)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->contained);
    }

    /**
     * Contained, inline Resources. These resources do not have an independent
     * existence apart from the resource that contains them - they cannot be identified
     * independently, and nor can they have their own independent transaction scope
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRResourceInline|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface $contained
     * @return static
     */
    public function addContained(FHIRResourceInline|VersionContainedTypeInterface $contained): self
    {
        if ($contained instanceof FHIRResourceInline) {
            $contained = $contained->getContainedType();
        }
        if (!isset($this->contained)) {
            $this->contained = [];
        }
        $this->contained[] = $contained;
        return $this;
    }

    /**
     * Contained, inline Resources. These resources do not have an independent
     * existence apart from the resource that contains them - they cannot be identified
     * independently, and nor can they have their own independent transaction scope
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRResourceInline|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface ...$contained
     * @return static
     */
    public function setContained(FHIRResourceInline|VersionContainedTypeInterface ...$contained): self
    {
        if ([] === $contained) {
            unset($this->contained);
            return $this;
        }
        foreach($contained as $v) {
            if ($v instanceof FHIRResourceInline) {
                $v = $v->getContainedType();
            }
            if (null !== $v) {
                $this->contained[] = $v;
            }
        }
        return $this;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension>
     */
    public function getExtension(): array
    {
        return $this->extension ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension>
     */
    public function getExtensionIterator(): iterable
    {
        if (!isset($this->extension)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->extension);
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension $extension
     * @return static
     */
    public function addExtension(FHIRExtension $extension): self
    {
        if (!isset($this->extension)) {
            $this->extension = [];
        }
        $this->extension[] = $extension;
        return $this;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension ...$extension
     * @return static
     */
    public function setExtension(FHIRExtension ...$extension): self
    {
        if ([] === $extension) {
            unset($this->extension);
            return $this;
        }
        $this->extension = $extension;
        return $this;
    }

    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId
     */
    public function getId(): null|FHIRId
    {
        return $this->id ?? null;
    }

    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId $id
     * @return static
     */
    public function setId(null|string|FHIRIdPrimitive|FHIRId $id): self
    {
        if (null === $id) {
            unset($this->id);
            return $this;
        }
        if (!($id instanceof FHIRId)) {
            $id = new FHIRId(value: $id);
        }
        $this->id = $id;
        return $this;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension>
     */
    public function getModifierExtension(): array
    {
        return $this->modifierExtension ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension>
     */
    public function getModifierExtensionIterator(): iterable
    {
        if (!isset($this->modifierExtension)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->modifierExtension);
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension $modifierExtension
     * @return static
     */
    public function addModifierExtension(FHIRExtension $modifierExtension): self
    {
        if (!isset($this->modifierExtension)) {
            $this->modifierExtension = [];
        }
        $this->modifierExtension[] = $modifierExtension;
        return $this;
    }

    /**
     * Optional Extensions Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension ...$modifierExtension
     * @return static
     */
    public function setModifierExtension(FHIRExtension ...$modifierExtension): self
    {
        if ([] === $modifierExtension) {
            unset($this->modifierExtension);
            return $this;
        }
        $this->modifierExtension = $modifierExtension;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRResource)) {
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
            if (self::FIELD_LANGUAGE === $cen) {
                $type->setLanguage(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRNarrative::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINED === $cen) {
                foreach ($ce->children() as $cen) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::mustGetContainedTypeClassnameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $type->setId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LANGUAGE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ID])) {
            if (isset($type->id)) {
                $type->id->setValue((string)$attributes[self::FIELD_ID]);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('Resource', $this->_getSourceXMLNS());
        }
        if (isset($this->language) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LANGUAGE]) {
            $xw->writeAttribute(self::FIELD_LANGUAGE, $this->language->_getValueAsString());
        }
        if (isset($this->id) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ID]) {
            $xw->writeAttribute(self::FIELD_ID, $this->id->_getValueAsString());
        }
        if (isset($this->language)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LANGUAGE]
                || $this->language->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LANGUAGE);
            $this->language->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LANGUAGE]);
            $xw->endElement();
        }
        if (isset($this->text)) {
            $xw->startElement(self::FIELD_TEXT);
            $this->text->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->contained) && [] !== $this->contained) {
            foreach($this->contained as $v) {
                $xw->startElement(self::FIELD_CONTAINED);
                $xw->startElement($v->_getFHIRTypeName());
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
                $xw->endElement();
            }
        }
        if (isset($this->extension)) {
            foreach ($this->extension as $v) {
                $xw->startElement(self::FIELD_EXTENSION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->id)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ID]
                || $this->id->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ID);
            $this->id->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ID]);
            $xw->endElement();
        }
        if (isset($this->modifierExtension)) {
            foreach ($this->modifierExtension as $v) {
                $xw->startElement(self::FIELD_MODIFIER_EXTENSION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if ($rootOpened ?? false) {
            $xw->endElement();
        }
        if ($docStarted ?? false) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|\stdClass $decoded
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $decoded,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRResource)) {
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
        if (is_string($decoded)) {
            $decoded = json_decode(json: $decoded,
                                associative: false,
                                depth: $config->getJSONDecodeMaxDepth(),
                                flags: $config->getJSONDecodeOpts());
        }
        if (isset($decoded->{Constants::JSON_FIELD_FHIR_COMMENTS})) {
            $type->_setFHIRComments((array)$decoded->{Constants::JSON_FIELD_FHIR_COMMENTS});
        }
        if (isset($decoded->language)
            || isset($decoded->_language)
            || property_exists($decoded, self::FIELD_LANGUAGE)
            || property_exists($decoded, self::FIELD_LANGUAGE_EXT)) {
            $v = $decoded->_language ?? new \stdClass();
            $v->value = $decoded->language ?? null;
            $type->setLanguage(FHIRCode::jsonUnserialize($v, $config));
        }
        if (isset($decoded->text) || property_exists($decoded, self::FIELD_TEXT)) {
            if (is_array($decoded->text)) {
                $type->setText(FHIRNarrative::jsonUnserialize(reset($decoded->text), $config));
            } else {
                $type->setText(FHIRNarrative::jsonUnserialize($decoded->text, $config));
            }
        }
        if (isset($decoded->contained)) {
            if (is_object($decoded->contained)) {
                $vals = [$decoded->contained];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CONTAINED, true);
            } else {
                $vals = $decoded->contained;
            }
            foreach($vals as $v) {
                $typeClassName = VersionTypeMap::mustGetContainedTypeClassnameFromJSON($v);
                unset($v->resourceType);
                $type->addContained($typeClassName::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->extension) || property_exists($decoded, self::FIELD_EXTENSION)) {
            if (is_object($decoded->extension)) {
                $vals = [$decoded->extension];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_EXTENSION, true);
            } else {
                $vals = $decoded->extension;
            }
            foreach($vals as $v) {
                $type->addExtension(FHIRExtension::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->id)
            || isset($decoded->_id)
            || property_exists($decoded, self::FIELD_ID)
            || property_exists($decoded, self::FIELD_ID_EXT)) {
            $v = $decoded->_id ?? new \stdClass();
            $v->value = $decoded->id ?? null;
            $type->setId(FHIRId::jsonUnserialize($v, $config));
        }
        if (isset($decoded->modifierExtension) || property_exists($decoded, self::FIELD_MODIFIER_EXTENSION)) {
            if (is_object($decoded->modifierExtension)) {
                $vals = [$decoded->modifierExtension];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_MODIFIER_EXTENSION, true);
            } else {
                $vals = $decoded->modifierExtension;
            }
            foreach($vals as $v) {
                $type->addModifierExtension(FHIRExtension::jsonUnserialize($v, $config));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = new \stdClass();
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $out->fhir_comments = $vs;
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
        if (isset($this->text)) {
            $out->text = $this->text;
        }
        if (isset($this->contained) && [] !== $this->contained) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CONTAINED) && 1 === count($this->contained)) {
                $out->contained = $this->contained[0];
            } else {
                $out->contained = $this->contained;
            }
        }
        if (isset($this->extension) && [] !== $this->extension) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_EXTENSION) && 1 === count($this->extension)) {
                $out->extension = $this->extension[0];
            } else {
                $out->extension = $this->extension;
            }
        }
        if (isset($this->id)) {
            if (null !== ($val = $this->id->getValue())) {
                $out->id = $val;
            }
            if ($this->id->_nonValueFieldDefined()) {
                $ext = $this->id->jsonSerialize();
                unset($ext->value);
                $out->_id = $ext;
            }
        }
        if (isset($this->modifierExtension) && [] !== $this->modifierExtension) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_MODIFIER_EXTENSION) && 1 === count($this->modifierExtension)) {
                $out->modifierExtension = $this->modifierExtension[0];
            } else {
                $out->modifierExtension = $this->modifierExtension;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $out->fhir_comments = $vs;
        }
        return $out;
    }

    /* class_default.php:227 */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}