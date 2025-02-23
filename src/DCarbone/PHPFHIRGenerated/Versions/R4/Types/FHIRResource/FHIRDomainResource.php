<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 23rd, 2025 20:44+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\FHIRVersion;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionTypeMap;

/**
 * A resource that includes narrative, extensions, and contained resources.
 */
class FHIRDomainResource extends FHIRResource
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_DOMAIN_RESOURCE;

    /* class_default.php:56 */
    public const FIELD_TEXT = 'text';
    public const FIELD_CONTAINED = 'contained';
    public const FIELD_EXTENSION = 'extension';
    public const FIELD_MODIFIER_EXTENSION = 'modifierExtension';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
    ];

    /* class_default.php:112 */
    /**
     * A human-readable summary of the resource conveying the essential clinical and
     * business information for the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A human-readable narrative that contains a summary of the resource and can be
     * used to represent the content of the resource to a human. The narrative need not
     * encode all the structured data, but is required to contain sufficient detail to
     * make it "clinically safe" for a human to just read the narrative. Resource
     * definitions may define what content should be represented in the narrative to
     * ensure clinical safety.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative 
     */
    protected FHIRNarrative $text;
    /**
     * These resources do not have an independent existence apart from the resource
     * that contains them - they cannot be identified independently, and nor can they
     * have their own independent transaction scope.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface[] 
     */
    protected array $contained;
    /**
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the resource. To make the use of extensions safe and manageable,
     * there is a strict set of governance applied to the definition and use of
     * extensions. Though any implementer can define an extension, there is a set of
     * requirements that SHALL be met as part of the definition of the extension.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] 
     */
    protected array $extension;
    /**
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the resource and that modifies the understanding of the element
     * that contains it and/or the understanding of the containing element's
     * descendants. Usually modifier elements provide negation or qualification. To
     * make the use of extensions safe and manageable, there is a strict set of
     * governance applied to the definition and use of extensions. Though any
     * implementer is allowed to define an extension, there is a set of requirements
     * that SHALL be met as part of the definition of the extension. Applications
     * processing a resource are required to check for modifier extensions. Modifier
     * extensions SHALL NOT change the meaning of any elements on Resource or
     * DomainResource (including cannot change the meaning of modifierExtension
     * itself).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] 
     */
    protected array $modifierExtension;

    /* constructor.php:61 */
    /**
     * FHIRDomainResource Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
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
                                null|iterable $fhirComments = null)
    {
        parent::__construct(id: $id,
                            meta: $meta,
                            implicitRules: $implicitRules,
                            language: $language,
                            fhirComments: $fhirComments);
        if (null !== $text) {
            $this->setText($text);
        }
        if (null !== $contained) {
            $this->setContained(...$contained);
        }
        if (null !== $extension) {
            $this->setExtension(...$extension);
        }
        if (null !== $modifierExtension) {
            $this->setModifierExtension(...$modifierExtension);
        }
    }

    /* class_default.php:144 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:173 */
    /**
     * A human-readable summary of the resource conveying the essential clinical and
     * business information for the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A human-readable narrative that contains a summary of the resource and can be
     * used to represent the content of the resource to a human. The narrative need not
     * encode all the structured data, but is required to contain sufficient detail to
     * make it "clinically safe" for a human to just read the narrative. Resource
     * definitions may define what content should be represented in the narrative to
     * ensure clinical safety.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative
     */
    public function getText(): null|FHIRNarrative
    {
        return $this->text ?? null;
    }

    /**
     * A human-readable summary of the resource conveying the essential clinical and
     * business information for the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A human-readable narrative that contains a summary of the resource and can be
     * used to represent the content of the resource to a human. The narrative need not
     * encode all the structured data, but is required to contain sufficient detail to
     * make it "clinically safe" for a human to just read the narrative. Resource
     * definitions may define what content should be represented in the narrative to
     * ensure clinical safety.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative $text
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
     * These resources do not have an independent existence apart from the resource
     * that contains them - they cannot be identified independently, and nor can they
     * have their own independent transaction scope.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface[]
     */
    public function getContained(): array
    {
        return $this->contained ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResourceContainer>
     */
    public function getContainedIterator(): iterable
    {
        if (!isset($this->contained)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->contained);
    }

    /**
     * These resources do not have an independent existence apart from the resource
     * that contains them - they cannot be identified independently, and nor can they
     * have their own independent transaction scope.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResourceContainer|\DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface $contained
     * @return static
     */
    public function addContained(FHIRResourceContainer|VersionContainedTypeInterface $contained): self
    {
        if ($contained instanceof FHIRResourceContainer) {
            $contained = $contained->getContainedType();
        }
        if (!isset($this->contained)) {
            $this->contained = [];
        }
        $this->contained[] = $contained;
        return $this;
    }

    /**
     * These resources do not have an independent existence apart from the resource
     * that contains them - they cannot be identified independently, and nor can they
     * have their own independent transaction scope.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResourceContainer|\DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface ...$contained
     * @return static
     */
    public function setContained(FHIRResourceContainer|VersionContainedTypeInterface ...$contained): self
    {
        if ([] === $contained) {
            unset($this->contained);
            return $this;
        }
        foreach($contained as $v) {
            if ($v instanceof FHIRResourceContainer) {
                $v = $v->getContainedType();
            }
            if (null !== $v) {
                $this->contained[] = $v;
            }
        }
        return $this;
    }

    /**
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the resource. To make the use of extensions safe and manageable,
     * there is a strict set of governance applied to the definition and use of
     * extensions. Though any implementer can define an extension, there is a set of
     * requirements that SHALL be met as part of the definition of the extension.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[]
     */
    public function getExtension(): array
    {
        return $this->extension ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension>
     */
    public function getExtensionIterator(): iterable
    {
        if (!isset($this->extension)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->extension);
    }

    /**
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the resource. To make the use of extensions safe and manageable,
     * there is a strict set of governance applied to the definition and use of
     * extensions. Though any implementer can define an extension, there is a set of
     * requirements that SHALL be met as part of the definition of the extension.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension $extension
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
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the resource. To make the use of extensions safe and manageable,
     * there is a strict set of governance applied to the definition and use of
     * extensions. Though any implementer can define an extension, there is a set of
     * requirements that SHALL be met as part of the definition of the extension.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension ...$extension
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
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the resource and that modifies the understanding of the element
     * that contains it and/or the understanding of the containing element's
     * descendants. Usually modifier elements provide negation or qualification. To
     * make the use of extensions safe and manageable, there is a strict set of
     * governance applied to the definition and use of extensions. Though any
     * implementer is allowed to define an extension, there is a set of requirements
     * that SHALL be met as part of the definition of the extension. Applications
     * processing a resource are required to check for modifier extensions. Modifier
     * extensions SHALL NOT change the meaning of any elements on Resource or
     * DomainResource (including cannot change the meaning of modifierExtension
     * itself).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[]
     */
    public function getModifierExtension(): array
    {
        return $this->modifierExtension ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension>
     */
    public function getModifierExtensionIterator(): iterable
    {
        if (!isset($this->modifierExtension)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->modifierExtension);
    }

    /**
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the resource and that modifies the understanding of the element
     * that contains it and/or the understanding of the containing element's
     * descendants. Usually modifier elements provide negation or qualification. To
     * make the use of extensions safe and manageable, there is a strict set of
     * governance applied to the definition and use of extensions. Though any
     * implementer is allowed to define an extension, there is a set of requirements
     * that SHALL be met as part of the definition of the extension. Applications
     * processing a resource are required to check for modifier extensions. Modifier
     * extensions SHALL NOT change the meaning of any elements on Resource or
     * DomainResource (including cannot change the meaning of modifierExtension
     * itself).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension $modifierExtension
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
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the resource and that modifies the understanding of the element
     * that contains it and/or the understanding of the containing element's
     * descendants. Usually modifier elements provide negation or qualification. To
     * make the use of extensions safe and manageable, there is a strict set of
     * governance applied to the definition and use of extensions. Though any
     * implementer is allowed to define an extension, there is a set of requirements
     * that SHALL be met as part of the definition of the extension. Applications
     * processing a resource are required to check for modifier extensions. Modifier
     * extensions SHALL NOT change the meaning of any elements on Resource or
     * DomainResource (including cannot change the meaning of modifierExtension
     * itself).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension ...$modifierExtension
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

    /* class_default.php:200 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDomainResource)) {
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
                    $cn = VersionTypeMap::mustGetContainedTypeClassnameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            if (isset($type->id)) {
                $type->id->setValue((string)$attributes[self::FIELD_ID]);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            if (isset($type->implicitRules)) {
                $type->implicitRules->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_IMPLICIT_RULES, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LANGUAGE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('DomainResource', $this->_getSourceXMLNS());
        }
        parent::xmlSerialize($xw, $config);
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
     * @param string|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDomainResource)) {
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
            $json = json_decode(json: $json,
                                associative: false,
                                depth: $config->getJSONDecodeMaxDepth(),
                                flags: $config->getJSONDecodeOpts());
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->text) || property_exists($json, self::FIELD_TEXT)) {
            if (is_array($json->text)) {
                $type->setText(FHIRNarrative::jsonUnserialize(reset($json->text), $config));
            } else {
                $type->setText(FHIRNarrative::jsonUnserialize($json->text, $config));
            }
        }
        if (isset($json->contained)) {
            if (is_object($json->contained)) {
                $vals = [$json->contained];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CONTAINED, true);
            } else {
                $vals = $json->contained;
            }
            foreach($vals as $v) {
                $typeClassName = VersionTypeMap::mustGetContainedTypeClassnameFromJSON($v);
                unset($v->resourceType);
                $type->addContained($typeClassName::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->extension) || property_exists($json, self::FIELD_EXTENSION)) {
            if (is_object($json->extension)) {
                $vals = [$json->extension];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_EXTENSION, true);
            } else {
                $vals = $json->extension;
            }
            foreach($vals as $v) {
                $type->addExtension(FHIRExtension::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->modifierExtension) || property_exists($json, self::FIELD_MODIFIER_EXTENSION)) {
            if (is_object($json->modifierExtension)) {
                $vals = [$json->modifierExtension];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_MODIFIER_EXTENSION, true);
            } else {
                $vals = $json->modifierExtension;
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
        $out = parent::jsonSerialize();
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
        if (isset($this->modifierExtension) && [] !== $this->modifierExtension) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_MODIFIER_EXTENSION) && 1 === count($this->modifierExtension)) {
                $out->modifierExtension = $this->modifierExtension[0];
            } else {
                $out->modifierExtension = $this->modifierExtension;
            }
        }
        return $out;
    }
}