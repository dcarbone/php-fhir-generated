<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 10th, 2019 18:12+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIREnableWhenBehavior;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuestionnaireItemType;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A structured set of questions intended to guide the collection of answers from
 * end-users. Questionnaires provide detailed control over order, presentation,
 * phraseology and grouping to allow coherent, consistent data collection.
 *
 * Class FHIRQuestionnaireItem
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire
 */
class FHIRQuestionnaireItem extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_ANSWER_OPTION = 'answerOption';
    const FIELD_ANSWER_VALUE_SET = 'answerValueSet';
    const FIELD_ANSWER_VALUE_SET_EXT = '_answerValueSet';
    const FIELD_CODE = 'code';
    const FIELD_DEFINITION = 'definition';
    const FIELD_DEFINITION_EXT = '_definition';
    const FIELD_ENABLE_BEHAVIOR = 'enableBehavior';
    const FIELD_ENABLE_BEHAVIOR_EXT = '_enableBehavior';
    const FIELD_ENABLE_WHEN = 'enableWhen';
    const FIELD_INITIAL = 'initial';
    const FIELD_ITEM = 'item';
    const FIELD_LINK_ID = 'linkId';
    const FIELD_LINK_ID_EXT = '_linkId';
    const FIELD_MAX_LENGTH = 'maxLength';
    const FIELD_MAX_LENGTH_EXT = '_maxLength';
    const FIELD_PREFIX = 'prefix';
    const FIELD_PREFIX_EXT = '_prefix';
    const FIELD_READ_ONLY = 'readOnly';
    const FIELD_READ_ONLY_EXT = '_readOnly';
    const FIELD_REPEATS = 'repeats';
    const FIELD_REPEATS_EXT = '_repeats';
    const FIELD_REQUIRED = 'required';
    const FIELD_REQUIRED_EXT = '_required';
    const FIELD_TEXT = 'text';
    const FIELD_TEXT_EXT = '_text';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One of the permitted answers for a "choice" or "open-choice" question.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireAnswerOption[]
     */
    protected $answerOption = [];

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to a value set containing a list of codes representing permitted
     * answers for a "choice" or "open-choice" question.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
     */
    protected $answerValueSet = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A terminology code that corresponds to this group or question (e.g. a code from
     * LOINC, which defines many questions and answers).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding[]
     */
    protected $code = [];

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This element is a URI that refers to an [[[ElementDefinition]]] that provides
     * information about this item, including information that might otherwise be
     * included in the instance of the Questionnaire resource. A detailed description
     * of the construction of the URI is shown in Comments, below. If this element is
     * present then the following element values MAY be derived from the Element
     * Definition if the corresponding elements of this Questionnaire resource instance
     * have no value: * code (ElementDefinition.code) * type (ElementDefinition.type) *
     * required (ElementDefinition.min) * repeats (ElementDefinition.max) * maxLength
     * (ElementDefinition.maxLength) * answerValueSet (ElementDefinition.binding) *
     * options (ElementDefinition.binding).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    protected $definition = null;

    /**
     * Controls how multiple enableWhen values are interpreted - whether all or any
     * must be true.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls how multiple enableWhen values are interpreted - whether all or any
     * must be true.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIREnableWhenBehavior
     */
    protected $enableBehavior = null;

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * A constraint indicating that this item should only be enabled (displayed/allow
     * answers to be captured) when the specified condition is true.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen[]
     */
    protected $enableWhen = [];

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One or more values that should be pre-populated in the answer when initially
     * rendering the questionnaire for user input.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireInitial[]
     */
    protected $initial = [];

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * Text, questions and other groups to be nested beneath a question or group.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem[]
     */
    protected $item = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that is unique within the Questionnaire allowing linkage to the
     * equivalent item in a QuestionnaireResponse resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $linkId = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of characters that are permitted in the answer to be
     * considered a "valid" QuestionnaireResponse.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    protected $maxLength = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short label for a particular group, question or set of display text within the
     * questionnaire used for reference by the individual completing the questionnaire.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $prefix = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, when true, that the value cannot be changed by a human respondent
     * to the Questionnaire.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $readOnly = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, if true, that the item may occur multiple times in the response,
     * collecting multiple answers for questions or multiple sets of answers for
     * groups.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $repeats = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, if true, that the item must be present in a "completed"
     * QuestionnaireResponse. If false, the item may be skipped when answering the
     * questionnaire.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $required = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of a section, the text of a question or text content for a display
     * item.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $text = null;

    /**
     * Distinguishes groups from questions and display text and indicates data type for
     * questions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of questionnaire item this is - whether text for display, a grouping of
     * other items or a particular type of data to be captured (string, integer, coded
     * choice, etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuestionnaireItemType
     */
    protected $type = null;

    /**
     * FHIRQuestionnaireItem Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireItem::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ANSWER_OPTION])) {
            if (is_array($data[self::FIELD_ANSWER_OPTION])) {
                foreach($data[self::FIELD_ANSWER_OPTION] as $v) {
                    if ($v instanceof FHIRQuestionnaireAnswerOption) {
                        $this->addAnswerOption($v);
                    } else {
                        $this->addAnswerOption(new FHIRQuestionnaireAnswerOption($v));
                    }
                }
            } else if ($data[self::FIELD_ANSWER_OPTION] instanceof FHIRQuestionnaireAnswerOption) {
                $this->addAnswerOption($data[self::FIELD_ANSWER_OPTION]);
            } else {
                $this->addAnswerOption(new FHIRQuestionnaireAnswerOption($data[self::FIELD_ANSWER_OPTION]));
            }
        }
        if (isset($data[self::FIELD_ANSWER_VALUE_SET])) {
            $ext = (isset($data[self::FIELD_ANSWER_VALUE_SET_EXT]) && is_array($data[self::FIELD_ANSWER_VALUE_SET_EXT]))
                ? $data[self::FIELD_ANSWER_VALUE_SET_EXT]
                : null;
            if ($data[self::FIELD_ANSWER_VALUE_SET] instanceof FHIRCanonical) {
                $this->setAnswerValueSet($data[self::FIELD_ANSWER_VALUE_SET]);
            } elseif ($ext && is_scalar($data[self::FIELD_ANSWER_VALUE_SET])) {
                $this->setAnswerValueSet(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $data[self::FIELD_ANSWER_VALUE_SET]] + $ext));
            } else {
                $this->setAnswerValueSet(new FHIRCanonical($data[self::FIELD_ANSWER_VALUE_SET]));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if (is_array($data[self::FIELD_CODE])) {
                foreach($data[self::FIELD_CODE] as $v) {
                    if ($v instanceof FHIRCoding) {
                        $this->addCode($v);
                    } else {
                        $this->addCode(new FHIRCoding($v));
                    }
                }
            } else if ($data[self::FIELD_CODE] instanceof FHIRCoding) {
                $this->addCode($data[self::FIELD_CODE]);
            } else {
                $this->addCode(new FHIRCoding($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_DEFINITION])) {
            $ext = (isset($data[self::FIELD_DEFINITION_EXT]) && is_array($data[self::FIELD_DEFINITION_EXT]))
                ? $data[self::FIELD_DEFINITION_EXT]
                : null;
            if ($data[self::FIELD_DEFINITION] instanceof FHIRUri) {
                $this->setDefinition($data[self::FIELD_DEFINITION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFINITION])) {
                $this->setDefinition(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_DEFINITION]] + $ext));
            } else {
                $this->setDefinition(new FHIRUri($data[self::FIELD_DEFINITION]));
            }
        }
        if (isset($data[self::FIELD_ENABLE_BEHAVIOR])) {
            $ext = (isset($data[self::FIELD_ENABLE_BEHAVIOR_EXT]) && is_array($data[self::FIELD_ENABLE_BEHAVIOR_EXT]))
                ? $data[self::FIELD_ENABLE_BEHAVIOR_EXT]
                : null;
            if ($data[self::FIELD_ENABLE_BEHAVIOR] instanceof FHIREnableWhenBehavior) {
                $this->setEnableBehavior($data[self::FIELD_ENABLE_BEHAVIOR]);
            } elseif ($ext && is_scalar($data[self::FIELD_ENABLE_BEHAVIOR])) {
                $this->setEnableBehavior(new FHIREnableWhenBehavior([FHIREnableWhenBehavior::FIELD_VALUE => $data[self::FIELD_ENABLE_BEHAVIOR]] + $ext));
            } else {
                $this->setEnableBehavior(new FHIREnableWhenBehavior($data[self::FIELD_ENABLE_BEHAVIOR]));
            }
        }
        if (isset($data[self::FIELD_ENABLE_WHEN])) {
            if (is_array($data[self::FIELD_ENABLE_WHEN])) {
                foreach($data[self::FIELD_ENABLE_WHEN] as $v) {
                    if ($v instanceof FHIRQuestionnaireEnableWhen) {
                        $this->addEnableWhen($v);
                    } else {
                        $this->addEnableWhen(new FHIRQuestionnaireEnableWhen($v));
                    }
                }
            } else if ($data[self::FIELD_ENABLE_WHEN] instanceof FHIRQuestionnaireEnableWhen) {
                $this->addEnableWhen($data[self::FIELD_ENABLE_WHEN]);
            } else {
                $this->addEnableWhen(new FHIRQuestionnaireEnableWhen($data[self::FIELD_ENABLE_WHEN]));
            }
        }
        if (isset($data[self::FIELD_INITIAL])) {
            if (is_array($data[self::FIELD_INITIAL])) {
                foreach($data[self::FIELD_INITIAL] as $v) {
                    if ($v instanceof FHIRQuestionnaireInitial) {
                        $this->addInitial($v);
                    } else {
                        $this->addInitial(new FHIRQuestionnaireInitial($v));
                    }
                }
            } else if ($data[self::FIELD_INITIAL] instanceof FHIRQuestionnaireInitial) {
                $this->addInitial($data[self::FIELD_INITIAL]);
            } else {
                $this->addInitial(new FHIRQuestionnaireInitial($data[self::FIELD_INITIAL]));
            }
        }
        if (isset($data[self::FIELD_ITEM])) {
            if (is_array($data[self::FIELD_ITEM])) {
                foreach($data[self::FIELD_ITEM] as $v) {
                    if ($v instanceof FHIRQuestionnaireItem) {
                        $this->addItem($v);
                    } else {
                        $this->addItem(new FHIRQuestionnaireItem($v));
                    }
                }
            } else if ($data[self::FIELD_ITEM] instanceof FHIRQuestionnaireItem) {
                $this->addItem($data[self::FIELD_ITEM]);
            } else {
                $this->addItem(new FHIRQuestionnaireItem($data[self::FIELD_ITEM]));
            }
        }
        if (isset($data[self::FIELD_LINK_ID])) {
            $ext = (isset($data[self::FIELD_LINK_ID_EXT]) && is_array($data[self::FIELD_LINK_ID_EXT]))
                ? $data[self::FIELD_LINK_ID_EXT]
                : null;
            if ($data[self::FIELD_LINK_ID] instanceof FHIRString) {
                $this->setLinkId($data[self::FIELD_LINK_ID]);
            } elseif ($ext && is_scalar($data[self::FIELD_LINK_ID])) {
                $this->setLinkId(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_LINK_ID]] + $ext));
            } else {
                $this->setLinkId(new FHIRString($data[self::FIELD_LINK_ID]));
            }
        }
        if (isset($data[self::FIELD_MAX_LENGTH])) {
            $ext = (isset($data[self::FIELD_MAX_LENGTH_EXT]) && is_array($data[self::FIELD_MAX_LENGTH_EXT]))
                ? $data[self::FIELD_MAX_LENGTH_EXT]
                : null;
            if ($data[self::FIELD_MAX_LENGTH] instanceof FHIRInteger) {
                $this->setMaxLength($data[self::FIELD_MAX_LENGTH]);
            } elseif ($ext && is_scalar($data[self::FIELD_MAX_LENGTH])) {
                $this->setMaxLength(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_MAX_LENGTH]] + $ext));
            } else {
                $this->setMaxLength(new FHIRInteger($data[self::FIELD_MAX_LENGTH]));
            }
        }
        if (isset($data[self::FIELD_PREFIX])) {
            $ext = (isset($data[self::FIELD_PREFIX_EXT]) && is_array($data[self::FIELD_PREFIX_EXT]))
                ? $data[self::FIELD_PREFIX_EXT]
                : null;
            if ($data[self::FIELD_PREFIX] instanceof FHIRString) {
                $this->setPrefix($data[self::FIELD_PREFIX]);
            } elseif ($ext && is_scalar($data[self::FIELD_PREFIX])) {
                $this->setPrefix(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PREFIX]] + $ext));
            } else {
                $this->setPrefix(new FHIRString($data[self::FIELD_PREFIX]));
            }
        }
        if (isset($data[self::FIELD_READ_ONLY])) {
            $ext = (isset($data[self::FIELD_READ_ONLY_EXT]) && is_array($data[self::FIELD_READ_ONLY_EXT]))
                ? $data[self::FIELD_READ_ONLY_EXT]
                : null;
            if ($data[self::FIELD_READ_ONLY] instanceof FHIRBoolean) {
                $this->setReadOnly($data[self::FIELD_READ_ONLY]);
            } elseif ($ext && is_scalar($data[self::FIELD_READ_ONLY])) {
                $this->setReadOnly(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_READ_ONLY]] + $ext));
            } else {
                $this->setReadOnly(new FHIRBoolean($data[self::FIELD_READ_ONLY]));
            }
        }
        if (isset($data[self::FIELD_REPEATS])) {
            $ext = (isset($data[self::FIELD_REPEATS_EXT]) && is_array($data[self::FIELD_REPEATS_EXT]))
                ? $data[self::FIELD_REPEATS_EXT]
                : null;
            if ($data[self::FIELD_REPEATS] instanceof FHIRBoolean) {
                $this->setRepeats($data[self::FIELD_REPEATS]);
            } elseif ($ext && is_scalar($data[self::FIELD_REPEATS])) {
                $this->setRepeats(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_REPEATS]] + $ext));
            } else {
                $this->setRepeats(new FHIRBoolean($data[self::FIELD_REPEATS]));
            }
        }
        if (isset($data[self::FIELD_REQUIRED])) {
            $ext = (isset($data[self::FIELD_REQUIRED_EXT]) && is_array($data[self::FIELD_REQUIRED_EXT]))
                ? $data[self::FIELD_REQUIRED_EXT]
                : null;
            if ($data[self::FIELD_REQUIRED] instanceof FHIRBoolean) {
                $this->setRequired($data[self::FIELD_REQUIRED]);
            } elseif ($ext && is_scalar($data[self::FIELD_REQUIRED])) {
                $this->setRequired(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_REQUIRED]] + $ext));
            } else {
                $this->setRequired(new FHIRBoolean($data[self::FIELD_REQUIRED]));
            }
        }
        if (isset($data[self::FIELD_TEXT])) {
            $ext = (isset($data[self::FIELD_TEXT_EXT]) && is_array($data[self::FIELD_TEXT_EXT]))
                ? $data[self::FIELD_TEXT_EXT]
                : null;
            if ($data[self::FIELD_TEXT] instanceof FHIRString) {
                $this->setText($data[self::FIELD_TEXT]);
            } elseif ($ext && is_scalar($data[self::FIELD_TEXT])) {
                $this->setText(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_TEXT]] + $ext));
            } else {
                $this->setText(new FHIRString($data[self::FIELD_TEXT]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT]))
                ? $data[self::FIELD_TYPE_EXT]
                : null;
            if ($data[self::FIELD_TYPE] instanceof FHIRQuestionnaireItemType) {
                $this->setType($data[self::FIELD_TYPE]);
            } elseif ($ext && is_scalar($data[self::FIELD_TYPE])) {
                $this->setType(new FHIRQuestionnaireItemType([FHIRQuestionnaireItemType::FIELD_VALUE => $data[self::FIELD_TYPE]] + $ext));
            } else {
                $this->setType(new FHIRQuestionnaireItemType($data[self::FIELD_TYPE]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return static
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<QuestionnaireItem{$xmlns}></QuestionnaireItem>";
    }


    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One of the permitted answers for a "choice" or "open-choice" question.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireAnswerOption[]
     */
    public function getAnswerOption()
    {
        return $this->answerOption;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One of the permitted answers for a "choice" or "open-choice" question.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireAnswerOption $answerOption
     * @return static
     */
    public function addAnswerOption(FHIRQuestionnaireAnswerOption $answerOption = null)
    {
        $this->answerOption[] = $answerOption;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One of the permitted answers for a "choice" or "open-choice" question.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireAnswerOption[] $answerOption
     * @return static
     */
    public function setAnswerOption(array $answerOption = [])
    {
        $this->answerOption = [];
        if ([] === $answerOption) {
            return $this;
        }
        foreach($answerOption as $v) {
            if ($v instanceof FHIRQuestionnaireAnswerOption) {
                $this->addAnswerOption($v);
            } else {
                $this->addAnswerOption(new FHIRQuestionnaireAnswerOption($v));
            }
        }
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to a value set containing a list of codes representing permitted
     * answers for a "choice" or "open-choice" question.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
     */
    public function getAnswerValueSet()
    {
        return $this->answerValueSet;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to a value set containing a list of codes representing permitted
     * answers for a "choice" or "open-choice" question.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $answerValueSet
     * @return static
     */
    public function setAnswerValueSet($answerValueSet = null)
    {
        if (null === $answerValueSet) {
            $this->answerValueSet = null;
            return $this;
        }
        if ($answerValueSet instanceof FHIRCanonical) {
            $this->answerValueSet = $answerValueSet;
            return $this;
        }
        $this->answerValueSet = new FHIRCanonical($answerValueSet);
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A terminology code that corresponds to this group or question (e.g. a code from
     * LOINC, which defines many questions and answers).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A terminology code that corresponds to this group or question (e.g. a code from
     * LOINC, which defines many questions and answers).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding $code
     * @return static
     */
    public function addCode(FHIRCoding $code = null)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A terminology code that corresponds to this group or question (e.g. a code from
     * LOINC, which defines many questions and answers).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding[] $code
     * @return static
     */
    public function setCode(array $code = [])
    {
        $this->code = [];
        if ([] === $code) {
            return $this;
        }
        foreach($code as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addCode($v);
            } else {
                $this->addCode(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This element is a URI that refers to an [[[ElementDefinition]]] that provides
     * information about this item, including information that might otherwise be
     * included in the instance of the Questionnaire resource. A detailed description
     * of the construction of the URI is shown in Comments, below. If this element is
     * present then the following element values MAY be derived from the Element
     * Definition if the corresponding elements of this Questionnaire resource instance
     * have no value: * code (ElementDefinition.code) * type (ElementDefinition.type) *
     * required (ElementDefinition.min) * repeats (ElementDefinition.max) * maxLength
     * (ElementDefinition.maxLength) * answerValueSet (ElementDefinition.binding) *
     * options (ElementDefinition.binding).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This element is a URI that refers to an [[[ElementDefinition]]] that provides
     * information about this item, including information that might otherwise be
     * included in the instance of the Questionnaire resource. A detailed description
     * of the construction of the URI is shown in Comments, below. If this element is
     * present then the following element values MAY be derived from the Element
     * Definition if the corresponding elements of this Questionnaire resource instance
     * have no value: * code (ElementDefinition.code) * type (ElementDefinition.type) *
     * required (ElementDefinition.min) * repeats (ElementDefinition.max) * maxLength
     * (ElementDefinition.maxLength) * answerValueSet (ElementDefinition.binding) *
     * options (ElementDefinition.binding).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $definition
     * @return static
     */
    public function setDefinition($definition = null)
    {
        if (null === $definition) {
            $this->definition = null;
            return $this;
        }
        if ($definition instanceof FHIRUri) {
            $this->definition = $definition;
            return $this;
        }
        $this->definition = new FHIRUri($definition);
        return $this;
    }

    /**
     * Controls how multiple enableWhen values are interpreted - whether all or any
     * must be true.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls how multiple enableWhen values are interpreted - whether all or any
     * must be true.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIREnableWhenBehavior
     */
    public function getEnableBehavior()
    {
        return $this->enableBehavior;
    }

    /**
     * Controls how multiple enableWhen values are interpreted - whether all or any
     * must be true.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls how multiple enableWhen values are interpreted - whether all or any
     * must be true.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIREnableWhenBehavior $enableBehavior
     * @return static
     */
    public function setEnableBehavior(FHIREnableWhenBehavior $enableBehavior = null)
    {
        $this->enableBehavior = $enableBehavior;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * A constraint indicating that this item should only be enabled (displayed/allow
     * answers to be captured) when the specified condition is true.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen[]
     */
    public function getEnableWhen()
    {
        return $this->enableWhen;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * A constraint indicating that this item should only be enabled (displayed/allow
     * answers to be captured) when the specified condition is true.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen $enableWhen
     * @return static
     */
    public function addEnableWhen(FHIRQuestionnaireEnableWhen $enableWhen = null)
    {
        $this->enableWhen[] = $enableWhen;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * A constraint indicating that this item should only be enabled (displayed/allow
     * answers to be captured) when the specified condition is true.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen[] $enableWhen
     * @return static
     */
    public function setEnableWhen(array $enableWhen = [])
    {
        $this->enableWhen = [];
        if ([] === $enableWhen) {
            return $this;
        }
        foreach($enableWhen as $v) {
            if ($v instanceof FHIRQuestionnaireEnableWhen) {
                $this->addEnableWhen($v);
            } else {
                $this->addEnableWhen(new FHIRQuestionnaireEnableWhen($v));
            }
        }
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One or more values that should be pre-populated in the answer when initially
     * rendering the questionnaire for user input.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireInitial[]
     */
    public function getInitial()
    {
        return $this->initial;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One or more values that should be pre-populated in the answer when initially
     * rendering the questionnaire for user input.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireInitial $initial
     * @return static
     */
    public function addInitial(FHIRQuestionnaireInitial $initial = null)
    {
        $this->initial[] = $initial;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One or more values that should be pre-populated in the answer when initially
     * rendering the questionnaire for user input.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireInitial[] $initial
     * @return static
     */
    public function setInitial(array $initial = [])
    {
        $this->initial = [];
        if ([] === $initial) {
            return $this;
        }
        foreach($initial as $v) {
            if ($v instanceof FHIRQuestionnaireInitial) {
                $this->addInitial($v);
            } else {
                $this->addInitial(new FHIRQuestionnaireInitial($v));
            }
        }
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * Text, questions and other groups to be nested beneath a question or group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * Text, questions and other groups to be nested beneath a question or group.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem $item
     * @return static
     */
    public function addItem(FHIRQuestionnaireItem $item = null)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * Text, questions and other groups to be nested beneath a question or group.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem[] $item
     * @return static
     */
    public function setItem(array $item = [])
    {
        $this->item = [];
        if ([] === $item) {
            return $this;
        }
        foreach($item as $v) {
            if ($v instanceof FHIRQuestionnaireItem) {
                $this->addItem($v);
            } else {
                $this->addItem(new FHIRQuestionnaireItem($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that is unique within the Questionnaire allowing linkage to the
     * equivalent item in a QuestionnaireResponse resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that is unique within the Questionnaire allowing linkage to the
     * equivalent item in a QuestionnaireResponse resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $linkId
     * @return static
     */
    public function setLinkId($linkId = null)
    {
        if (null === $linkId) {
            $this->linkId = null;
            return $this;
        }
        if ($linkId instanceof FHIRString) {
            $this->linkId = $linkId;
            return $this;
        }
        $this->linkId = new FHIRString($linkId);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of characters that are permitted in the answer to be
     * considered a "valid" QuestionnaireResponse.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getMaxLength()
    {
        return $this->maxLength;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of characters that are permitted in the answer to be
     * considered a "valid" QuestionnaireResponse.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $maxLength
     * @return static
     */
    public function setMaxLength($maxLength = null)
    {
        if (null === $maxLength) {
            $this->maxLength = null;
            return $this;
        }
        if ($maxLength instanceof FHIRInteger) {
            $this->maxLength = $maxLength;
            return $this;
        }
        $this->maxLength = new FHIRInteger($maxLength);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short label for a particular group, question or set of display text within the
     * questionnaire used for reference by the individual completing the questionnaire.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short label for a particular group, question or set of display text within the
     * questionnaire used for reference by the individual completing the questionnaire.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $prefix
     * @return static
     */
    public function setPrefix($prefix = null)
    {
        if (null === $prefix) {
            $this->prefix = null;
            return $this;
        }
        if ($prefix instanceof FHIRString) {
            $this->prefix = $prefix;
            return $this;
        }
        $this->prefix = new FHIRString($prefix);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, when true, that the value cannot be changed by a human respondent
     * to the Questionnaire.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getReadOnly()
    {
        return $this->readOnly;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, when true, that the value cannot be changed by a human respondent
     * to the Questionnaire.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $readOnly
     * @return static
     */
    public function setReadOnly($readOnly = null)
    {
        if (null === $readOnly) {
            $this->readOnly = null;
            return $this;
        }
        if ($readOnly instanceof FHIRBoolean) {
            $this->readOnly = $readOnly;
            return $this;
        }
        $this->readOnly = new FHIRBoolean($readOnly);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, if true, that the item may occur multiple times in the response,
     * collecting multiple answers for questions or multiple sets of answers for
     * groups.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getRepeats()
    {
        return $this->repeats;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, if true, that the item may occur multiple times in the response,
     * collecting multiple answers for questions or multiple sets of answers for
     * groups.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $repeats
     * @return static
     */
    public function setRepeats($repeats = null)
    {
        if (null === $repeats) {
            $this->repeats = null;
            return $this;
        }
        if ($repeats instanceof FHIRBoolean) {
            $this->repeats = $repeats;
            return $this;
        }
        $this->repeats = new FHIRBoolean($repeats);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, if true, that the item must be present in a "completed"
     * QuestionnaireResponse. If false, the item may be skipped when answering the
     * questionnaire.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, if true, that the item must be present in a "completed"
     * QuestionnaireResponse. If false, the item may be skipped when answering the
     * questionnaire.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $required
     * @return static
     */
    public function setRequired($required = null)
    {
        if (null === $required) {
            $this->required = null;
            return $this;
        }
        if ($required instanceof FHIRBoolean) {
            $this->required = $required;
            return $this;
        }
        $this->required = new FHIRBoolean($required);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of a section, the text of a question or text content for a display
     * item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of a section, the text of a question or text content for a display
     * item.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $text
     * @return static
     */
    public function setText($text = null)
    {
        if (null === $text) {
            $this->text = null;
            return $this;
        }
        if ($text instanceof FHIRString) {
            $this->text = $text;
            return $this;
        }
        $this->text = new FHIRString($text);
        return $this;
    }

    /**
     * Distinguishes groups from questions and display text and indicates data type for
     * questions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of questionnaire item this is - whether text for display, a grouping of
     * other items or a particular type of data to be captured (string, integer, coded
     * choice, etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuestionnaireItemType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Distinguishes groups from questions and display text and indicates data type for
     * questions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of questionnaire item this is - whether text for display, a grouping of
     * other items or a particular type of data to be captured (string, integer, coded
     * choice, etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuestionnaireItemType $type
     * @return static
     */
    public function setType(FHIRQuestionnaireItemType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRQuestionnaireItem::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRQuestionnaireItem::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRQuestionnaireItem;
        } elseif (!is_object($type) || !($type instanceof FHIRQuestionnaireItem)) {
            throw new \RuntimeException(sprintf(
                'FHIRQuestionnaireItem::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->answerOption)) {
            foreach($children->answerOption as $child) {
                $type->addAnswerOption(FHIRQuestionnaireAnswerOption::xmlUnserialize($child));
            }
        }
        if (isset($attributes->answerValueSet)) {
            $type->setAnswerValueSet((string)$attributes->answerValueSet);
        }
        if (isset($children->answerValueSet)) {
            $type->setAnswerValueSet(FHIRCanonical::xmlUnserialize($children->answerValueSet));
        }
        if (isset($children->code)) {
            foreach($children->code as $child) {
                $type->addCode(FHIRCoding::xmlUnserialize($child));
            }
        }
        if (isset($attributes->definition)) {
            $type->setDefinition((string)$attributes->definition);
        }
        if (isset($children->definition)) {
            $type->setDefinition(FHIRUri::xmlUnserialize($children->definition));
        }
        if (isset($children->enableBehavior)) {
            $type->setEnableBehavior(FHIREnableWhenBehavior::xmlUnserialize($children->enableBehavior));
        }
        if (isset($children->enableWhen)) {
            foreach($children->enableWhen as $child) {
                $type->addEnableWhen(FHIRQuestionnaireEnableWhen::xmlUnserialize($child));
            }
        }
        if (isset($children->initial)) {
            foreach($children->initial as $child) {
                $type->addInitial(FHIRQuestionnaireInitial::xmlUnserialize($child));
            }
        }
        if (isset($children->item)) {
            foreach($children->item as $child) {
                $type->addItem(FHIRQuestionnaireItem::xmlUnserialize($child));
            }
        }
        if (isset($attributes->linkId)) {
            $type->setLinkId((string)$attributes->linkId);
        }
        if (isset($children->linkId)) {
            $type->setLinkId(FHIRString::xmlUnserialize($children->linkId));
        }
        if (isset($attributes->maxLength)) {
            $type->setMaxLength((string)$attributes->maxLength);
        }
        if (isset($children->maxLength)) {
            $type->setMaxLength(FHIRInteger::xmlUnserialize($children->maxLength));
        }
        if (isset($attributes->prefix)) {
            $type->setPrefix((string)$attributes->prefix);
        }
        if (isset($children->prefix)) {
            $type->setPrefix(FHIRString::xmlUnserialize($children->prefix));
        }
        if (isset($attributes->readOnly)) {
            $type->setReadOnly((string)$attributes->readOnly);
        }
        if (isset($children->readOnly)) {
            $type->setReadOnly(FHIRBoolean::xmlUnserialize($children->readOnly));
        }
        if (isset($attributes->repeats)) {
            $type->setRepeats((string)$attributes->repeats);
        }
        if (isset($children->repeats)) {
            $type->setRepeats(FHIRBoolean::xmlUnserialize($children->repeats));
        }
        if (isset($attributes->required)) {
            $type->setRequired((string)$attributes->required);
        }
        if (isset($children->required)) {
            $type->setRequired(FHIRBoolean::xmlUnserialize($children->required));
        }
        if (isset($attributes->text)) {
            $type->setText((string)$attributes->text);
        }
        if (isset($children->text)) {
            $type->setText(FHIRString::xmlUnserialize($children->text));
        }
        if (isset($children->type)) {
            $type->setType(FHIRQuestionnaireItemType::xmlUnserialize($children->type));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);

        if ([] !== ($vs = $this->getAnswerOption())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER_OPTION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getAnswerValueSet())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER_VALUE_SET, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CODE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDefinition())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFINITION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getEnableBehavior())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ENABLE_BEHAVIOR, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getEnableWhen())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ENABLE_WHEN, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getInitial())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INITIAL, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getItem())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ITEM, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getLinkId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LINK_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMaxLength())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MAX_LENGTH, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPrefix())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PREFIX, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReadOnly())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_READ_ONLY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRepeats())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REPEATS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRequired())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUIRED, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getText())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TEXT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getAnswerOption())) {
            $a[self::FIELD_ANSWER_OPTION] = $vs;
        }
        if (null !== ($v = $this->getAnswerValueSet())) {
            $a[self::FIELD_ANSWER_VALUE_SET] = $v->getValue();
            $a[self::FIELD_ANSWER_VALUE_SET_EXT] = $v;
        }
        if ([] !== ($vs = $this->getCode())) {
            $a[self::FIELD_CODE] = $vs;
        }
        if (null !== ($v = $this->getDefinition())) {
            $a[self::FIELD_DEFINITION] = $v->getValue();
            $a[self::FIELD_DEFINITION_EXT] = $v;
        }
        if (null !== ($v = $this->getEnableBehavior())) {
            $a[self::FIELD_ENABLE_BEHAVIOR] = $v;
        }
        if ([] !== ($vs = $this->getEnableWhen())) {
            $a[self::FIELD_ENABLE_WHEN] = $vs;
        }
        if ([] !== ($vs = $this->getInitial())) {
            $a[self::FIELD_INITIAL] = $vs;
        }
        if ([] !== ($vs = $this->getItem())) {
            $a[self::FIELD_ITEM] = $vs;
        }
        if (null !== ($v = $this->getLinkId())) {
            $a[self::FIELD_LINK_ID] = $v->getValue();
            $a[self::FIELD_LINK_ID_EXT] = $v;
        }
        if (null !== ($v = $this->getMaxLength())) {
            $a[self::FIELD_MAX_LENGTH] = $v->getValue();
            $a[self::FIELD_MAX_LENGTH_EXT] = $v;
        }
        if (null !== ($v = $this->getPrefix())) {
            $a[self::FIELD_PREFIX] = $v->getValue();
            $a[self::FIELD_PREFIX_EXT] = $v;
        }
        if (null !== ($v = $this->getReadOnly())) {
            $a[self::FIELD_READ_ONLY] = $v->getValue();
            $a[self::FIELD_READ_ONLY_EXT] = $v;
        }
        if (null !== ($v = $this->getRepeats())) {
            $a[self::FIELD_REPEATS] = $v->getValue();
            $a[self::FIELD_REPEATS_EXT] = $v;
        }
        if (null !== ($v = $this->getRequired())) {
            $a[self::FIELD_REQUIRED] = $v->getValue();
            $a[self::FIELD_REQUIRED_EXT] = $v;
        }
        if (null !== ($v = $this->getText())) {
            $a[self::FIELD_TEXT] = $v->getValue();
            $a[self::FIELD_TEXT_EXT] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        return $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}