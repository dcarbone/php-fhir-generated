<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 7th, 2024 20:38+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\R5\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * The Citation Resource enables reference to any knowledge artifact for purposes
 * of identification and attribution. The Citation Resource supports existing
 * reference structures and developing publication practices such as versioning,
 * expressing complex contributorship roles, and referencing computable resources.
 *
 * Class FHIRCitationSummary1
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation
 */
class FHIRCitationSummary1 extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CITATION_DOT_SUMMARY_1;

    const FIELD_TYPE = 'type';
    const FIELD_STYLE = 'style';
    const FIELD_SOURCE = 'source';
    const FIELD_VALUE = 'value';
    const FIELD_VALUE_EXT = '_value';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used most commonly to express an author list or a contributorship statement.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $type = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The format for the display string, such as author last name with first letter
     * capitalized followed by forename initials.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $style = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used to code the producer or rule for creating the display string.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $source = null;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The display string for the author list, contributor list, or contributorship
     * statement.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $value = null;

    /**
     * Validation map for fields in type Citation.Summary1
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRCitationSummary1 Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_TYPE, $data)) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_STYLE, $data)) {
            if ($data[self::FIELD_STYLE] instanceof FHIRCodeableConcept) {
                $this->setStyle($data[self::FIELD_STYLE]);
            } else {
                $this->setStyle(new FHIRCodeableConcept($data[self::FIELD_STYLE]));
            }
        }
        if (array_key_exists(self::FIELD_SOURCE, $data)) {
            if ($data[self::FIELD_SOURCE] instanceof FHIRCodeableConcept) {
                $this->setSource($data[self::FIELD_SOURCE]);
            } else {
                $this->setSource(new FHIRCodeableConcept($data[self::FIELD_SOURCE]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE, $data) || array_key_exists(self::FIELD_VALUE_EXT, $data)) {
            $value = $data[self::FIELD_VALUE] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_EXT]) && is_array($data[self::FIELD_VALUE_EXT])) ? $data[self::FIELD_VALUE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setValue($value);
                } else if (is_array($value)) {
                    $this->setValue(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setValue(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValue(new FHIRMarkdown($ext));
            } else {
                $this->setValue(new FHIRMarkdown(null));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used most commonly to express an author list or a contributorship statement.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getType(): null|FHIRCodeableConcept
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used most commonly to express an author list or a contributorship statement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(null|FHIRCodeableConcept $type = null): self
    {
        if (null === $type) {
            $type = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The format for the display string, such as author last name with first letter
     * capitalized followed by forename initials.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getStyle(): null|FHIRCodeableConcept
    {
        return $this->style;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The format for the display string, such as author last name with first letter
     * capitalized followed by forename initials.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $style
     * @return static
     */
    public function setStyle(null|FHIRCodeableConcept $style = null): self
    {
        if (null === $style) {
            $style = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->style, $style);
        $this->style = $style;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used to code the producer or rule for creating the display string.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getSource(): null|FHIRCodeableConcept
    {
        return $this->source;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used to code the producer or rule for creating the display string.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $source
     * @return static
     */
    public function setSource(null|FHIRCodeableConcept $source = null): self
    {
        if (null === $source) {
            $source = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->source, $source);
        $this->source = $source;
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
     * The display string for the author list, contributor list, or contributorship
     * statement.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getValue(): null|FHIRMarkdown
    {
        return $this->value;
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
     * The display string for the author list, contributor list, or contributorship
     * statement.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown $value
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValue(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $value = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $value && !($value instanceof FHIRMarkdown)) {
            $value = new FHIRMarkdown($value);
        }
        $this->_trackValueSet($this->value, $value);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VALUE])) {
            $this->_primitiveXmlLocations[self::FIELD_VALUE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VALUE][0] = $xmlLocation;
        $this->value = $value;
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
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStyle())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STYLE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValue())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_SUMMARY_1, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STYLE])) {
            $v = $this->getStyle();
            foreach($validationRules[self::FIELD_STYLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_SUMMARY_1, self::FIELD_STYLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STYLE])) {
                        $errs[self::FIELD_STYLE] = [];
                    }
                    $errs[self::FIELD_STYLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE])) {
            $v = $this->getSource();
            foreach($validationRules[self::FIELD_SOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_SUMMARY_1, self::FIELD_SOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE])) {
                        $errs[self::FIELD_SOURCE] = [];
                    }
                    $errs[self::FIELD_SOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE])) {
            $v = $this->getValue();
            foreach($validationRules[self::FIELD_VALUE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_SUMMARY_1, self::FIELD_VALUE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE])) {
                        $errs[self::FIELD_VALUE] = [];
                    }
                    $errs[self::FIELD_VALUE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationSummary1 $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationSummary1
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRCitationSummary1)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_TYPE === $childName) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STYLE === $childName) {
                $type->setStyle(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SOURCE === $childName) {
                $type->setSource(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE === $childName) {
                $type->setValue(FHIRMarkdown::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_VALUE])) {
            $pt = $type->getValue();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALUE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValue((string)$attributes[self::FIELD_VALUE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'CitationSummary1', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValue())) {
            $xw->writeAttribute(self::FIELD_VALUE, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getStyle())) {
            $xw->startElement(self::FIELD_STYLE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSource())) {
            $xw->startElement(self::FIELD_SOURCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValue())) {
            $xw->startElement(self::FIELD_VALUE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if (null !== ($v = $this->getStyle())) {
            $out->{self::FIELD_STYLE} = $v;
        }
        if (null !== ($v = $this->getSource())) {
            $out->{self::FIELD_SOURCE} = $v;
        }
        if (null !== ($v = $this->getValue())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_EXT} = $ext;
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