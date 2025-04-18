<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire;

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
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValuePatternMatchRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;

/**
 * A structured set of questions and their answers. The Questionnaire may contain
 * questions, answers or both. The questions are ordered and grouped into coherent
 * subsets, corresponding to the structure of the grouping of the underlying
 * questions.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRQuestionnaireGroup extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_QUESTIONNAIRE_DOT_GROUP;

    /* class_default.php:56 */
    public const FIELD_NAME = 'name';
    public const FIELD_HEADER = 'header';
    public const FIELD_HEADER_EXT = '_header';
    public const FIELD_TEXT = 'text';
    public const FIELD_TEXT_EXT = '_text';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_GROUP = 'group';
    public const FIELD_QUESTION = 'question';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_ID => [
            ValuePatternMatchRule::NAME => '/^[a-z0-9\\-\\.]{1,36}$/',
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_HEADER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TEXT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured name for a section of a predefined list of questions this
     * questionnaire is responding to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $name;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text that is displayed above the contents of the group.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $header;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional text for the group, used for display purposes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $text;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * More specific subject this section's answers are about, details the subject
     * given in Questionnaire.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    #[FHIRResourceReference]
    protected FHIRResourceReference $subject;
    /**
     * A structured set of questions and their answers. The Questionnaire may contain
     * questions, answers or both. The questions are ordered and grouped into coherent
     * subsets, corresponding to the structure of the grouping of the underlying
     * questions.
     *
     * A sub-group within a group. The ordering of groups within this group is
     * relevant.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup> 
     */
    #[FHIRQuestionnaireGroup]
    protected array $group;
    /**
     * A structured set of questions and their answers. The Questionnaire may contain
     * questions, answers or both. The questions are ordered and grouped into coherent
     * subsets, corresponding to the structure of the grouping of the underlying
     * questions.
     *
     * Set of questions within this group. The order of questions within the group is
     * relevant.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion> 
     */
    #[FHIRQuestionnaireQuestion]
    protected array $question;

    /* constructor.php:61 */
    /**
     * FHIRQuestionnaireGroup Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension> $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $name
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $header
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $subject
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup> $group
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion> $question
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $name = null,
                                null|string|FHIRStringPrimitive|FHIRString $header = null,
                                null|string|FHIRStringPrimitive|FHIRString $text = null,
                                null|FHIRResourceReference $subject = null,
                                null|iterable $group = null,
                                null|iterable $question = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $name) {
            $this->setName($name);
        }
        if (null !== $header) {
            $this->setHeader($header);
        }
        if (null !== $text) {
            $this->setText($text);
        }
        if (null !== $subject) {
            $this->setSubject($subject);
        }
        if (null !== $group) {
            $this->setGroup(...$group);
        }
        if (null !== $question) {
            $this->setQuestion(...$question);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured name for a section of a predefined list of questions this
     * questionnaire is responding to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getName(): null|FHIRCodeableConcept
    {
        return $this->name ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured name for a section of a predefined list of questions this
     * questionnaire is responding to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $name
     * @return static
     */
    public function setName(null|FHIRCodeableConcept $name): self
    {
        if (null === $name) {
            unset($this->name);
            return $this;
        }
        $this->name = $name;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text that is displayed above the contents of the group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getHeader(): null|FHIRString
    {
        return $this->header ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text that is displayed above the contents of the group.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $header
     * @return static
     */
    public function setHeader(null|string|FHIRStringPrimitive|FHIRString $header): self
    {
        if (null === $header) {
            unset($this->header);
            return $this;
        }
        if (!($header instanceof FHIRString)) {
            $header = new FHIRString(value: $header);
        }
        $this->header = $header;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional text for the group, used for display purposes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getText(): null|FHIRString
    {
        return $this->text ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional text for the group, used for display purposes.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $text
     * @return static
     */
    public function setText(null|string|FHIRStringPrimitive|FHIRString $text): self
    {
        if (null === $text) {
            unset($this->text);
            return $this;
        }
        if (!($text instanceof FHIRString)) {
            $text = new FHIRString(value: $text);
        }
        $this->text = $text;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * More specific subject this section's answers are about, details the subject
     * given in Questionnaire.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getSubject(): null|FHIRResourceReference
    {
        return $this->subject ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * More specific subject this section's answers are about, details the subject
     * given in Questionnaire.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $subject
     * @return static
     */
    public function setSubject(null|FHIRResourceReference $subject): self
    {
        if (null === $subject) {
            unset($this->subject);
            return $this;
        }
        $this->subject = $subject;
        return $this;
    }

    /**
     * A structured set of questions and their answers. The Questionnaire may contain
     * questions, answers or both. The questions are ordered and grouped into coherent
     * subsets, corresponding to the structure of the grouping of the underlying
     * questions.
     *
     * A sub-group within a group. The ordering of groups within this group is
     * relevant.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup>
     */
    public function getGroup(): array
    {
        return $this->group ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup>
     */
    public function getGroupIterator(): iterable
    {
        if (!isset($this->group)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->group);
    }

    /**
     * A structured set of questions and their answers. The Questionnaire may contain
     * questions, answers or both. The questions are ordered and grouped into coherent
     * subsets, corresponding to the structure of the grouping of the underlying
     * questions.
     *
     * A sub-group within a group. The ordering of groups within this group is
     * relevant.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup $group
     * @return static
     */
    public function addGroup(FHIRQuestionnaireGroup $group): self
    {
        if (!isset($this->group)) {
            $this->group = [];
        }
        $this->group[] = $group;
        return $this;
    }

    /**
     * A structured set of questions and their answers. The Questionnaire may contain
     * questions, answers or both. The questions are ordered and grouped into coherent
     * subsets, corresponding to the structure of the grouping of the underlying
     * questions.
     *
     * A sub-group within a group. The ordering of groups within this group is
     * relevant.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup ...$group
     * @return static
     */
    public function setGroup(FHIRQuestionnaireGroup ...$group): self
    {
        if ([] === $group) {
            unset($this->group);
            return $this;
        }
        $this->group = $group;
        return $this;
    }

    /**
     * A structured set of questions and their answers. The Questionnaire may contain
     * questions, answers or both. The questions are ordered and grouped into coherent
     * subsets, corresponding to the structure of the grouping of the underlying
     * questions.
     *
     * Set of questions within this group. The order of questions within the group is
     * relevant.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion>
     */
    public function getQuestion(): array
    {
        return $this->question ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion>
     */
    public function getQuestionIterator(): iterable
    {
        if (!isset($this->question)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->question);
    }

    /**
     * A structured set of questions and their answers. The Questionnaire may contain
     * questions, answers or both. The questions are ordered and grouped into coherent
     * subsets, corresponding to the structure of the grouping of the underlying
     * questions.
     *
     * Set of questions within this group. The order of questions within the group is
     * relevant.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion $question
     * @return static
     */
    public function addQuestion(FHIRQuestionnaireQuestion $question): self
    {
        if (!isset($this->question)) {
            $this->question = [];
        }
        $this->question[] = $question;
        return $this;
    }

    /**
     * A structured set of questions and their answers. The Questionnaire may contain
     * questions, answers or both. The questions are ordered and grouped into coherent
     * subsets, corresponding to the structure of the grouping of the underlying
     * questions.
     *
     * Set of questions within this group. The order of questions within the group is
     * relevant.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion ...$question
     * @return static
     */
    public function setQuestion(FHIRQuestionnaireQuestion ...$question): self
    {
        if ([] === $question) {
            unset($this->question);
            return $this;
        }
        $this->question = $question;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRQuestionnaireGroup)) {
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
                $va = $ce->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NAME === $cen) {
                $type->setName(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_HEADER === $cen) {
                $type->setHeader(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBJECT === $cen) {
                $type->setSubject(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_GROUP === $cen) {
                $type->addGroup(FHIRQuestionnaireGroup::xmlUnserialize($ce, $config));
            } else if (self::FIELD_QUESTION === $cen) {
                $type->addQuestion(FHIRQuestionnaireQuestion::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_HEADER])) {
            if (isset($type->header)) {
                $type->header->setValue((string)$attributes[self::FIELD_HEADER]);
            } else {
                $type->setHeader((string)$attributes[self::FIELD_HEADER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_HEADER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TEXT])) {
            if (isset($type->text)) {
                $type->text->setValue((string)$attributes[self::FIELD_TEXT]);
            } else {
                $type->setText((string)$attributes[self::FIELD_TEXT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TEXT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->header) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_HEADER]) {
            $xw->writeAttribute(self::FIELD_HEADER, $this->header->_getValueAsString());
        }
        if (isset($this->text) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TEXT]) {
            $xw->writeAttribute(self::FIELD_TEXT, $this->text->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->name)) {
            $xw->startElement(self::FIELD_NAME);
            $this->name->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->header)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_HEADER]
                || $this->header->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_HEADER);
            $this->header->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_HEADER]);
            $xw->endElement();
        }
        if (isset($this->text)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TEXT]
                || $this->text->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TEXT);
            $this->text->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TEXT]);
            $xw->endElement();
        }
        if (isset($this->subject)) {
            $xw->startElement(self::FIELD_SUBJECT);
            $this->subject->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->group)) {
            foreach ($this->group as $v) {
                $xw->startElement(self::FIELD_GROUP);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->question)) {
            foreach ($this->question as $v) {
                $xw->startElement(self::FIELD_QUESTION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRQuestionnaireGroup)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->name) || property_exists($decoded, self::FIELD_NAME)) {
            if (is_array($decoded->name)) {
                $type->setName(FHIRCodeableConcept::jsonUnserialize(reset($decoded->name), $config));
            } else {
                $type->setName(FHIRCodeableConcept::jsonUnserialize($decoded->name, $config));
            }
        }
        if (isset($decoded->header)
            || isset($decoded->_header)
            || property_exists($decoded, self::FIELD_HEADER)
            || property_exists($decoded, self::FIELD_HEADER_EXT)) {
            $v = $decoded->_header ?? new \stdClass();
            $v->value = $decoded->header ?? null;
            $type->setHeader(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->text)
            || isset($decoded->_text)
            || property_exists($decoded, self::FIELD_TEXT)
            || property_exists($decoded, self::FIELD_TEXT_EXT)) {
            $v = $decoded->_text ?? new \stdClass();
            $v->value = $decoded->text ?? null;
            $type->setText(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->subject) || property_exists($decoded, self::FIELD_SUBJECT)) {
            if (is_array($decoded->subject)) {
                $type->setSubject(FHIRResourceReference::jsonUnserialize(reset($decoded->subject), $config));
            } else {
                $type->setSubject(FHIRResourceReference::jsonUnserialize($decoded->subject, $config));
            }
        }
        if (isset($decoded->group) || property_exists($decoded, self::FIELD_GROUP)) {
            if (is_object($decoded->group)) {
                $vals = [$decoded->group];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_GROUP, true);
            } else {
                $vals = $decoded->group;
            }
            foreach($vals as $v) {
                $type->addGroup(FHIRQuestionnaireGroup::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->question) || property_exists($decoded, self::FIELD_QUESTION)) {
            if (is_object($decoded->question)) {
                $vals = [$decoded->question];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_QUESTION, true);
            } else {
                $vals = $decoded->question;
            }
            foreach($vals as $v) {
                $type->addQuestion(FHIRQuestionnaireQuestion::jsonUnserialize($v, $config));
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
        if (isset($this->name)) {
            $out->name = $this->name;
        }
        if (isset($this->header)) {
            if (null !== ($val = $this->header->getValue())) {
                $out->header = $val;
            }
            if ($this->header->_nonValueFieldDefined()) {
                $ext = $this->header->jsonSerialize();
                unset($ext->value);
                $out->_header = $ext;
            }
        }
        if (isset($this->text)) {
            if (null !== ($val = $this->text->getValue())) {
                $out->text = $val;
            }
            if ($this->text->_nonValueFieldDefined()) {
                $ext = $this->text->jsonSerialize();
                unset($ext->value);
                $out->_text = $ext;
            }
        }
        if (isset($this->subject)) {
            $out->subject = $this->subject;
        }
        if (isset($this->group) && [] !== $this->group) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_GROUP) && 1 === count($this->group)) {
                $out->group = $this->group[0];
            } else {
                $out->group = $this->group;
            }
        }
        if (isset($this->question) && [] !== $this->question) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_QUESTION) && 1 === count($this->question)) {
                $out->question = $this->question[0];
            } else {
                $out->question = $this->question;
            }
        }
        return $out;
    }
}