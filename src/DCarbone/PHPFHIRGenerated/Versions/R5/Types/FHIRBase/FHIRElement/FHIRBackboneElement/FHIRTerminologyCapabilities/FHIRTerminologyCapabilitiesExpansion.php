<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 15:49+0000
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
 * of a FHIR Terminology Server that may be used as a statement of actual server
 * functionality or a statement of required or desired server implementation.
 */
class FHIRTerminologyCapabilitiesExpansion extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES_DOT_EXPANSION;

    /* class_default.php:50 */
    public const FIELD_HIERARCHICAL = 'hierarchical';
    public const FIELD_HIERARCHICAL_EXT = '_hierarchical';
    public const FIELD_PAGING = 'paging';
    public const FIELD_PAGING_EXT = '_paging';
    public const FIELD_INCOMPLETE = 'incomplete';
    public const FIELD_INCOMPLETE_EXT = '_incomplete';
    public const FIELD_PARAMETER = 'parameter';
    public const FIELD_TEXT_FILTER = 'textFilter';
    public const FIELD_TEXT_FILTER_EXT = '_textFilter';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_HIERARCHICAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PAGING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_INCOMPLETE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TEXT_FILTER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the server can return nested value sets.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $hierarchical;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the server supports paging on expansion.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $paging;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True if requests for incomplete expansions are allowed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $incomplete;
    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Supported expansion parameter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesParameter[] 
     */
    protected array $parameter;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Documentation about text searching works.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $textFilter;

    /* constructor.php:61 */
    /**
     * FHIRTerminologyCapabilitiesExpansion Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $hierarchical
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $paging
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $incomplete
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesParameter[] $parameter
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $textFilter
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $hierarchical = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $paging = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $incomplete = null,
                                null|iterable $parameter = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $textFilter = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $hierarchical) {
            $this->setHierarchical($hierarchical);
        }
        if (null !== $paging) {
            $this->setPaging($paging);
        }
        if (null !== $incomplete) {
            $this->setIncomplete($incomplete);
        }
        if (null !== $parameter) {
            $this->setParameter(...$parameter);
        }
        if (null !== $textFilter) {
            $this->setTextFilter($textFilter);
        }
    }

    /* class_default.php:139 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:165 */
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the server can return nested value sets.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getHierarchical(): null|FHIRBoolean
    {
        return $this->hierarchical ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the server can return nested value sets.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $hierarchical
     * @return static
     */
    public function setHierarchical(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $hierarchical): self
    {
        if (null === $hierarchical) {
            unset($this->hierarchical);
            return $this;
        }
        if (!($hierarchical instanceof FHIRBoolean)) {
            $hierarchical = new FHIRBoolean(value: $hierarchical);
        }
        $this->hierarchical = $hierarchical;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the server supports paging on expansion.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getPaging(): null|FHIRBoolean
    {
        return $this->paging ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the server supports paging on expansion.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $paging
     * @return static
     */
    public function setPaging(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $paging): self
    {
        if (null === $paging) {
            unset($this->paging);
            return $this;
        }
        if (!($paging instanceof FHIRBoolean)) {
            $paging = new FHIRBoolean(value: $paging);
        }
        $this->paging = $paging;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True if requests for incomplete expansions are allowed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getIncomplete(): null|FHIRBoolean
    {
        return $this->incomplete ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True if requests for incomplete expansions are allowed.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $incomplete
     * @return static
     */
    public function setIncomplete(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $incomplete): self
    {
        if (null === $incomplete) {
            unset($this->incomplete);
            return $this;
        }
        if (!($incomplete instanceof FHIRBoolean)) {
            $incomplete = new FHIRBoolean(value: $incomplete);
        }
        $this->incomplete = $incomplete;
        return $this;
    }

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Supported expansion parameter.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesParameter[]
     */
    public function getParameter(): array
    {
        return $this->parameter ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesParameter>
     */
    public function getParameterIterator(): iterable
    {
        if (!isset($this->parameter)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->parameter);
    }

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Supported expansion parameter.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesParameter $parameter
     * @return static
     */
    public function addParameter(FHIRTerminologyCapabilitiesParameter $parameter): self
    {
        if (!isset($this->parameter)) {
            $this->parameter = [];
        }
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Supported expansion parameter.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesParameter ...$parameter
     * @return static
     */
    public function setParameter(FHIRTerminologyCapabilitiesParameter ...$parameter): self
    {
        if ([] === $parameter) {
            unset($this->parameter);
            return $this;
        }
        $this->parameter = $parameter;
        return $this;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Documentation about text searching works.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getTextFilter(): null|FHIRMarkdown
    {
        return $this->textFilter ?? null;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Documentation about text searching works.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $textFilter
     * @return static
     */
    public function setTextFilter(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $textFilter): self
    {
        if (null === $textFilter) {
            unset($this->textFilter);
            return $this;
        }
        if (!($textFilter instanceof FHIRMarkdown)) {
            $textFilter = new FHIRMarkdown(value: $textFilter);
        }
        $this->textFilter = $textFilter;
        return $this;
    }

    /* class_default.php:192 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesExpansion $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesExpansion
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRTerminologyCapabilitiesExpansion)) {
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
            } else if (self::FIELD_HIERARCHICAL === $cen) {
                $type->setHierarchical(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PAGING === $cen) {
                $type->setPaging(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INCOMPLETE === $cen) {
                $type->setIncomplete(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PARAMETER === $cen) {
                $type->addParameter(FHIRTerminologyCapabilitiesParameter::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT_FILTER === $cen) {
                $type->setTextFilter(FHIRMarkdown::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_HIERARCHICAL])) {
            if (isset($type->hierarchical)) {
                $type->hierarchical->setValue((string)$attributes[self::FIELD_HIERARCHICAL]);
            } else {
                $type->setHierarchical((string)$attributes[self::FIELD_HIERARCHICAL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_HIERARCHICAL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PAGING])) {
            if (isset($type->paging)) {
                $type->paging->setValue((string)$attributes[self::FIELD_PAGING]);
            } else {
                $type->setPaging((string)$attributes[self::FIELD_PAGING]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PAGING, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_INCOMPLETE])) {
            if (isset($type->incomplete)) {
                $type->incomplete->setValue((string)$attributes[self::FIELD_INCOMPLETE]);
            } else {
                $type->setIncomplete((string)$attributes[self::FIELD_INCOMPLETE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_INCOMPLETE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TEXT_FILTER])) {
            if (isset($type->textFilter)) {
                $type->textFilter->setValue((string)$attributes[self::FIELD_TEXT_FILTER]);
            } else {
                $type->setTextFilter((string)$attributes[self::FIELD_TEXT_FILTER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TEXT_FILTER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->hierarchical) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_HIERARCHICAL]) {
            $xw->writeAttribute(self::FIELD_HIERARCHICAL, $this->hierarchical->_getValueAsString());
        }
        if (isset($this->paging) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PAGING]) {
            $xw->writeAttribute(self::FIELD_PAGING, $this->paging->_getValueAsString());
        }
        if (isset($this->incomplete) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_INCOMPLETE]) {
            $xw->writeAttribute(self::FIELD_INCOMPLETE, $this->incomplete->_getValueAsString());
        }
        if (isset($this->textFilter) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TEXT_FILTER]) {
            $xw->writeAttribute(self::FIELD_TEXT_FILTER, $this->textFilter->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->hierarchical)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_HIERARCHICAL]
                || $this->hierarchical->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_HIERARCHICAL);
            $this->hierarchical->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_HIERARCHICAL]);
            $xw->endElement();
        }
        if (isset($this->paging)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PAGING]
                || $this->paging->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PAGING);
            $this->paging->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PAGING]);
            $xw->endElement();
        }
        if (isset($this->incomplete)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_INCOMPLETE]
                || $this->incomplete->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_INCOMPLETE);
            $this->incomplete->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_INCOMPLETE]);
            $xw->endElement();
        }
        if (isset($this->parameter)) {
            foreach ($this->parameter as $v) {
                $xw->startElement(self::FIELD_PARAMETER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->textFilter)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TEXT_FILTER]
                || $this->textFilter->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TEXT_FILTER);
            $this->textFilter->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TEXT_FILTER]);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesExpansion $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesExpansion
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRTerminologyCapabilitiesExpansion)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->hierarchical)
            || isset($json->_hierarchical)
            || property_exists($json, self::FIELD_HIERARCHICAL)
            || property_exists($json, self::FIELD_HIERARCHICAL_EXT)) {
            $v = $json->_hierarchical ?? new \stdClass();
            $v->value = $json->hierarchical ?? null;
            $type->setHierarchical(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($json->paging)
            || isset($json->_paging)
            || property_exists($json, self::FIELD_PAGING)
            || property_exists($json, self::FIELD_PAGING_EXT)) {
            $v = $json->_paging ?? new \stdClass();
            $v->value = $json->paging ?? null;
            $type->setPaging(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($json->incomplete)
            || isset($json->_incomplete)
            || property_exists($json, self::FIELD_INCOMPLETE)
            || property_exists($json, self::FIELD_INCOMPLETE_EXT)) {
            $v = $json->_incomplete ?? new \stdClass();
            $v->value = $json->incomplete ?? null;
            $type->setIncomplete(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($json->parameter) || property_exists($json, self::FIELD_PARAMETER)) {
            if (is_object($json->parameter)) {
                $vals = [$json->parameter];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PARAMETER, true);
            } else {
                $vals = $json->parameter;
            }
            foreach($vals as $v) {
                $type->addParameter(FHIRTerminologyCapabilitiesParameter::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->textFilter)
            || isset($json->_textFilter)
            || property_exists($json, self::FIELD_TEXT_FILTER)
            || property_exists($json, self::FIELD_TEXT_FILTER_EXT)) {
            $v = $json->_textFilter ?? new \stdClass();
            $v->value = $json->textFilter ?? null;
            $type->setTextFilter(FHIRMarkdown::jsonUnserialize($v, $config));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->hierarchical)) {
            if (null !== ($val = $this->hierarchical->getValue())) {
                $out->hierarchical = $val;
            }
            if ($this->hierarchical->_nonValueFieldDefined()) {
                $ext = $this->hierarchical->jsonSerialize();
                unset($ext->value);
                $out->_hierarchical = $ext;
            }
        }
        if (isset($this->paging)) {
            if (null !== ($val = $this->paging->getValue())) {
                $out->paging = $val;
            }
            if ($this->paging->_nonValueFieldDefined()) {
                $ext = $this->paging->jsonSerialize();
                unset($ext->value);
                $out->_paging = $ext;
            }
        }
        if (isset($this->incomplete)) {
            if (null !== ($val = $this->incomplete->getValue())) {
                $out->incomplete = $val;
            }
            if ($this->incomplete->_nonValueFieldDefined()) {
                $ext = $this->incomplete->jsonSerialize();
                unset($ext->value);
                $out->_incomplete = $ext;
            }
        }
        if (isset($this->parameter) && [] !== $this->parameter) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PARAMETER) && 1 === count($this->parameter)) {
                $out->parameter = $this->parameter[0];
            } else {
                $out->parameter = $this->parameter;
            }
        }
        if (isset($this->textFilter)) {
            if (null !== ($val = $this->textFilter->getValue())) {
                $out->textFilter = $val;
            }
            if ($this->textFilter->_nonValueFieldDefined()) {
                $ext = $this->textFilter->jsonSerialize();
                unset($ext->value);
                $out->_textFilter = $ext;
            }
        }
        return $out;
    }
}