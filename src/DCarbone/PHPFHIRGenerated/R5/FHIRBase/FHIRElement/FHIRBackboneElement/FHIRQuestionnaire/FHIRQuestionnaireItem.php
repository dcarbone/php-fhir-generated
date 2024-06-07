<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire;

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
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIREnableWhenBehavior;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRQuestionnaireAnswerConstraint;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRQuestionnaireItemDisabledDisplay;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRQuestionnaireItemType;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * A structured set of questions intended to guide the collection of answers from
 * end-users. Questionnaires provide detailed control over order, presentation,
 * phraseology and grouping to allow coherent, consistent data collection.
 *
 * Class FHIRQuestionnaireItem
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire
 */
class FHIRQuestionnaireItem extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM;

    const FIELD_LINK_ID = 'linkId';
    const FIELD_LINK_ID_EXT = '_linkId';
    const FIELD_DEFINITION = 'definition';
    const FIELD_DEFINITION_EXT = '_definition';
    const FIELD_CODE = 'code';
    const FIELD_PREFIX = 'prefix';
    const FIELD_PREFIX_EXT = '_prefix';
    const FIELD_TEXT = 'text';
    const FIELD_TEXT_EXT = '_text';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_ENABLE_WHEN = 'enableWhen';
    const FIELD_ENABLE_BEHAVIOR = 'enableBehavior';
    const FIELD_ENABLE_BEHAVIOR_EXT = '_enableBehavior';
    const FIELD_DISABLED_DISPLAY = 'disabledDisplay';
    const FIELD_DISABLED_DISPLAY_EXT = '_disabledDisplay';
    const FIELD_REQUIRED = 'required';
    const FIELD_REQUIRED_EXT = '_required';
    const FIELD_REPEATS = 'repeats';
    const FIELD_REPEATS_EXT = '_repeats';
    const FIELD_READ_ONLY = 'readOnly';
    const FIELD_READ_ONLY_EXT = '_readOnly';
    const FIELD_MAX_LENGTH = 'maxLength';
    const FIELD_MAX_LENGTH_EXT = '_maxLength';
    const FIELD_ANSWER_CONSTRAINT = 'answerConstraint';
    const FIELD_ANSWER_CONSTRAINT_EXT = '_answerConstraint';
    const FIELD_ANSWER_VALUE_SET = 'answerValueSet';
    const FIELD_ANSWER_VALUE_SET_EXT = '_answerValueSet';
    const FIELD_ANSWER_OPTION = 'answerOption';
    const FIELD_INITIAL = 'initial';
    const FIELD_ITEM = 'item';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that is unique within the Questionnaire allowing linkage to the
     * equivalent item in a QuestionnaireResponse resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $linkId = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This element is a URI that refers to an
     * [ElementDefinition](elementdefinition.html) or to an
     * [ObservationDefinition](observationdefinition.html) that provides information
     * about this item, including information that might otherwise be included in the
     * instance of the Questionnaire resource. A detailed description of the
     * construction of the URI is shown in [Comments](questionnaire.html#definition),
     * below.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $definition = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A terminology code that corresponds to this group or question (e.g. a code from
     * LOINC, which defines many questions and answers).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[]
     */
    protected null|array $code = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short label for a particular group, question or set of display text within the
     * questionnaire used for reference by the individual completing the questionnaire.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $prefix = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of a section, the text of a question or text content for a display
     * item.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $text = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of questionnaire item this is - whether text for display, a grouping of
     * other items or a particular type of data to be captured (string, integer,
     * Coding, etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRQuestionnaireItemType
     */
    protected null|FHIRQuestionnaireItemType $type = null;
    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * A constraint indicating that this item should only be enabled (displayed/allow
     * answers to be captured) when the specified condition is true.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen[]
     */
    protected null|array $enableWhen = [];
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls how multiple enableWhen values are interpreted - whether all or any
     * must be true.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIREnableWhenBehavior
     */
    protected null|FHIREnableWhenBehavior $enableBehavior = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if and how items that are disabled (because enableWhen evaluates to
     * 'false') should be displayed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRQuestionnaireItemDisabledDisplay
     */
    protected null|FHIRQuestionnaireItemDisabledDisplay $disabledDisplay = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, if true, that the item must be present in a "completed"
     * QuestionnaireResponse. If false, the item may be skipped when answering the
     * questionnaire.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $required = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, if true, that a QuestionnaireResponse for this item may include
     * multiple answers associated with a single instance of this item (for
     * question-type items) or multiple repetitions of the item (for group-type items).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $repeats = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, when true, that the value cannot be changed by a human respondent
     * to the Questionnaire.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $readOnly = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of characters that are permitted in the answer to be
     * considered a "valid" QuestionnaireResponse.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $maxLength = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For items that have a defined set of allowed answers (via answerOption or
     * answerValueSet), indicates whether values *other* than those specified can be
     * selected.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRQuestionnaireAnswerConstraint
     */
    protected null|FHIRQuestionnaireAnswerConstraint $answerConstraint = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to a value set containing a list of values representing permitted
     * answers for a question.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    protected null|FHIRCanonical $answerValueSet = null;
    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One of the permitted answers for the question.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireAnswerOption[]
     */
    protected null|array $answerOption = [];
    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One or more values that should be pre-populated in the answer when initially
     * rendering the questionnaire for user input.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireInitial[]
     */
    protected null|array $initial = [];
    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * Text, questions and other groups to be nested beneath a question or group.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem[]
     */
    protected null|array $item = [];

    /**
     * Validation map for fields in type Questionnaire.Item
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRQuestionnaireItem Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_LINK_ID, $data) || array_key_exists(self::FIELD_LINK_ID_EXT, $data)) {
            $value = $data[self::FIELD_LINK_ID] ?? null;
            $ext = (isset($data[self::FIELD_LINK_ID_EXT]) && is_array($data[self::FIELD_LINK_ID_EXT])) ? $data[self::FIELD_LINK_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setLinkId($value);
                } else if (is_array($value)) {
                    $this->setLinkId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setLinkId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLinkId(new FHIRString($ext));
            } else {
                $this->setLinkId(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFINITION, $data) || array_key_exists(self::FIELD_DEFINITION_EXT, $data)) {
            $value = $data[self::FIELD_DEFINITION] ?? null;
            $ext = (isset($data[self::FIELD_DEFINITION_EXT]) && is_array($data[self::FIELD_DEFINITION_EXT])) ? $data[self::FIELD_DEFINITION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setDefinition($value);
                } else if (is_array($value)) {
                    $this->setDefinition(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setDefinition(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefinition(new FHIRUri($ext));
            } else {
                $this->setDefinition(new FHIRUri(null));
            }
        }
        if (array_key_exists(self::FIELD_CODE, $data)) {
            if (is_array($data[self::FIELD_CODE])) {
                foreach($data[self::FIELD_CODE] as $v) {
                    if ($v instanceof FHIRCoding) {
                        $this->addCode($v);
                    } else {
                        $this->addCode(new FHIRCoding($v));
                    }
                }
            } elseif ($data[self::FIELD_CODE] instanceof FHIRCoding) {
                $this->addCode($data[self::FIELD_CODE]);
            } else {
                $this->addCode(new FHIRCoding($data[self::FIELD_CODE]));
            }
        }
        if (array_key_exists(self::FIELD_PREFIX, $data) || array_key_exists(self::FIELD_PREFIX_EXT, $data)) {
            $value = $data[self::FIELD_PREFIX] ?? null;
            $ext = (isset($data[self::FIELD_PREFIX_EXT]) && is_array($data[self::FIELD_PREFIX_EXT])) ? $data[self::FIELD_PREFIX_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPrefix($value);
                } else if (is_array($value)) {
                    $this->setPrefix(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPrefix(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPrefix(new FHIRString($ext));
            } else {
                $this->setPrefix(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_TEXT, $data) || array_key_exists(self::FIELD_TEXT_EXT, $data)) {
            $value = $data[self::FIELD_TEXT] ?? null;
            $ext = (isset($data[self::FIELD_TEXT_EXT]) && is_array($data[self::FIELD_TEXT_EXT])) ? $data[self::FIELD_TEXT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setText($value);
                } else if (is_array($value)) {
                    $this->setText(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setText(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setText(new FHIRString($ext));
            } else {
                $this->setText(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_TYPE, $data) || array_key_exists(self::FIELD_TYPE_EXT, $data)) {
            $value = $data[self::FIELD_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) ? $data[self::FIELD_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRQuestionnaireItemType) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRQuestionnaireItemType(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRQuestionnaireItemType([FHIRQuestionnaireItemType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setType(new FHIRQuestionnaireItemType($ext));
            } else {
                $this->setType(new FHIRQuestionnaireItemType(null));
            }
        }
        if (array_key_exists(self::FIELD_ENABLE_WHEN, $data)) {
            if (is_array($data[self::FIELD_ENABLE_WHEN])) {
                foreach($data[self::FIELD_ENABLE_WHEN] as $v) {
                    if ($v instanceof FHIRQuestionnaireEnableWhen) {
                        $this->addEnableWhen($v);
                    } else {
                        $this->addEnableWhen(new FHIRQuestionnaireEnableWhen($v));
                    }
                }
            } elseif ($data[self::FIELD_ENABLE_WHEN] instanceof FHIRQuestionnaireEnableWhen) {
                $this->addEnableWhen($data[self::FIELD_ENABLE_WHEN]);
            } else {
                $this->addEnableWhen(new FHIRQuestionnaireEnableWhen($data[self::FIELD_ENABLE_WHEN]));
            }
        }
        if (array_key_exists(self::FIELD_ENABLE_BEHAVIOR, $data) || array_key_exists(self::FIELD_ENABLE_BEHAVIOR_EXT, $data)) {
            $value = $data[self::FIELD_ENABLE_BEHAVIOR] ?? null;
            $ext = (isset($data[self::FIELD_ENABLE_BEHAVIOR_EXT]) && is_array($data[self::FIELD_ENABLE_BEHAVIOR_EXT])) ? $data[self::FIELD_ENABLE_BEHAVIOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIREnableWhenBehavior) {
                    $this->setEnableBehavior($value);
                } else if (is_array($value)) {
                    $this->setEnableBehavior(new FHIREnableWhenBehavior(array_merge($ext, $value)));
                } else {
                    $this->setEnableBehavior(new FHIREnableWhenBehavior([FHIREnableWhenBehavior::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setEnableBehavior(new FHIREnableWhenBehavior($ext));
            } else {
                $this->setEnableBehavior(new FHIREnableWhenBehavior(null));
            }
        }
        if (array_key_exists(self::FIELD_DISABLED_DISPLAY, $data) || array_key_exists(self::FIELD_DISABLED_DISPLAY_EXT, $data)) {
            $value = $data[self::FIELD_DISABLED_DISPLAY] ?? null;
            $ext = (isset($data[self::FIELD_DISABLED_DISPLAY_EXT]) && is_array($data[self::FIELD_DISABLED_DISPLAY_EXT])) ? $data[self::FIELD_DISABLED_DISPLAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRQuestionnaireItemDisabledDisplay) {
                    $this->setDisabledDisplay($value);
                } else if (is_array($value)) {
                    $this->setDisabledDisplay(new FHIRQuestionnaireItemDisabledDisplay(array_merge($ext, $value)));
                } else {
                    $this->setDisabledDisplay(new FHIRQuestionnaireItemDisabledDisplay([FHIRQuestionnaireItemDisabledDisplay::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDisabledDisplay(new FHIRQuestionnaireItemDisabledDisplay($ext));
            } else {
                $this->setDisabledDisplay(new FHIRQuestionnaireItemDisabledDisplay(null));
            }
        }
        if (array_key_exists(self::FIELD_REQUIRED, $data) || array_key_exists(self::FIELD_REQUIRED_EXT, $data)) {
            $value = $data[self::FIELD_REQUIRED] ?? null;
            $ext = (isset($data[self::FIELD_REQUIRED_EXT]) && is_array($data[self::FIELD_REQUIRED_EXT])) ? $data[self::FIELD_REQUIRED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setRequired($value);
                } else if (is_array($value)) {
                    $this->setRequired(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setRequired(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRequired(new FHIRBoolean($ext));
            } else {
                $this->setRequired(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_REPEATS, $data) || array_key_exists(self::FIELD_REPEATS_EXT, $data)) {
            $value = $data[self::FIELD_REPEATS] ?? null;
            $ext = (isset($data[self::FIELD_REPEATS_EXT]) && is_array($data[self::FIELD_REPEATS_EXT])) ? $data[self::FIELD_REPEATS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setRepeats($value);
                } else if (is_array($value)) {
                    $this->setRepeats(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setRepeats(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRepeats(new FHIRBoolean($ext));
            } else {
                $this->setRepeats(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_READ_ONLY, $data) || array_key_exists(self::FIELD_READ_ONLY_EXT, $data)) {
            $value = $data[self::FIELD_READ_ONLY] ?? null;
            $ext = (isset($data[self::FIELD_READ_ONLY_EXT]) && is_array($data[self::FIELD_READ_ONLY_EXT])) ? $data[self::FIELD_READ_ONLY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setReadOnly($value);
                } else if (is_array($value)) {
                    $this->setReadOnly(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setReadOnly(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setReadOnly(new FHIRBoolean($ext));
            } else {
                $this->setReadOnly(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_MAX_LENGTH, $data) || array_key_exists(self::FIELD_MAX_LENGTH_EXT, $data)) {
            $value = $data[self::FIELD_MAX_LENGTH] ?? null;
            $ext = (isset($data[self::FIELD_MAX_LENGTH_EXT]) && is_array($data[self::FIELD_MAX_LENGTH_EXT])) ? $data[self::FIELD_MAX_LENGTH_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setMaxLength($value);
                } else if (is_array($value)) {
                    $this->setMaxLength(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setMaxLength(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMaxLength(new FHIRInteger($ext));
            } else {
                $this->setMaxLength(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_ANSWER_CONSTRAINT, $data) || array_key_exists(self::FIELD_ANSWER_CONSTRAINT_EXT, $data)) {
            $value = $data[self::FIELD_ANSWER_CONSTRAINT] ?? null;
            $ext = (isset($data[self::FIELD_ANSWER_CONSTRAINT_EXT]) && is_array($data[self::FIELD_ANSWER_CONSTRAINT_EXT])) ? $data[self::FIELD_ANSWER_CONSTRAINT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRQuestionnaireAnswerConstraint) {
                    $this->setAnswerConstraint($value);
                } else if (is_array($value)) {
                    $this->setAnswerConstraint(new FHIRQuestionnaireAnswerConstraint(array_merge($ext, $value)));
                } else {
                    $this->setAnswerConstraint(new FHIRQuestionnaireAnswerConstraint([FHIRQuestionnaireAnswerConstraint::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAnswerConstraint(new FHIRQuestionnaireAnswerConstraint($ext));
            } else {
                $this->setAnswerConstraint(new FHIRQuestionnaireAnswerConstraint(null));
            }
        }
        if (array_key_exists(self::FIELD_ANSWER_VALUE_SET, $data) || array_key_exists(self::FIELD_ANSWER_VALUE_SET_EXT, $data)) {
            $value = $data[self::FIELD_ANSWER_VALUE_SET] ?? null;
            $ext = (isset($data[self::FIELD_ANSWER_VALUE_SET_EXT]) && is_array($data[self::FIELD_ANSWER_VALUE_SET_EXT])) ? $data[self::FIELD_ANSWER_VALUE_SET_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setAnswerValueSet($value);
                } else if (is_array($value)) {
                    $this->setAnswerValueSet(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setAnswerValueSet(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAnswerValueSet(new FHIRCanonical($ext));
            } else {
                $this->setAnswerValueSet(new FHIRCanonical(null));
            }
        }
        if (array_key_exists(self::FIELD_ANSWER_OPTION, $data)) {
            if (is_array($data[self::FIELD_ANSWER_OPTION])) {
                foreach($data[self::FIELD_ANSWER_OPTION] as $v) {
                    if ($v instanceof FHIRQuestionnaireAnswerOption) {
                        $this->addAnswerOption($v);
                    } else {
                        $this->addAnswerOption(new FHIRQuestionnaireAnswerOption($v));
                    }
                }
            } elseif ($data[self::FIELD_ANSWER_OPTION] instanceof FHIRQuestionnaireAnswerOption) {
                $this->addAnswerOption($data[self::FIELD_ANSWER_OPTION]);
            } else {
                $this->addAnswerOption(new FHIRQuestionnaireAnswerOption($data[self::FIELD_ANSWER_OPTION]));
            }
        }
        if (array_key_exists(self::FIELD_INITIAL, $data)) {
            if (is_array($data[self::FIELD_INITIAL])) {
                foreach($data[self::FIELD_INITIAL] as $v) {
                    if ($v instanceof FHIRQuestionnaireInitial) {
                        $this->addInitial($v);
                    } else {
                        $this->addInitial(new FHIRQuestionnaireInitial($v));
                    }
                }
            } elseif ($data[self::FIELD_INITIAL] instanceof FHIRQuestionnaireInitial) {
                $this->addInitial($data[self::FIELD_INITIAL]);
            } else {
                $this->addInitial(new FHIRQuestionnaireInitial($data[self::FIELD_INITIAL]));
            }
        }
        if (array_key_exists(self::FIELD_ITEM, $data)) {
            if (is_array($data[self::FIELD_ITEM])) {
                foreach($data[self::FIELD_ITEM] as $v) {
                    if ($v instanceof FHIRQuestionnaireItem) {
                        $this->addItem($v);
                    } else {
                        $this->addItem(new FHIRQuestionnaireItem($v));
                    }
                }
            } elseif ($data[self::FIELD_ITEM] instanceof FHIRQuestionnaireItem) {
                $this->addItem($data[self::FIELD_ITEM]);
            } else {
                $this->addItem(new FHIRQuestionnaireItem($data[self::FIELD_ITEM]));
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that is unique within the Questionnaire allowing linkage to the
     * equivalent item in a QuestionnaireResponse resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getLinkId(): null|FHIRString
    {
        return $this->linkId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that is unique within the Questionnaire allowing linkage to the
     * equivalent item in a QuestionnaireResponse resource.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $linkId
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setLinkId(null|string|FHIRStringPrimitive|FHIRString $linkId = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $linkId && !($linkId instanceof FHIRString)) {
            $linkId = new FHIRString($linkId);
        }
        $this->_trackValueSet($this->linkId, $linkId);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_LINK_ID])) {
            $this->_primitiveXmlLocations[self::FIELD_LINK_ID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_LINK_ID][0] = $xmlLocation;
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This element is a URI that refers to an
     * [ElementDefinition](elementdefinition.html) or to an
     * [ObservationDefinition](observationdefinition.html) that provides information
     * about this item, including information that might otherwise be included in the
     * instance of the Questionnaire resource. A detailed description of the
     * construction of the URI is shown in [Comments](questionnaire.html#definition),
     * below.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUri
     */
    public function getDefinition(): null|FHIRUri
    {
        return $this->definition;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This element is a URI that refers to an
     * [ElementDefinition](elementdefinition.html) or to an
     * [ObservationDefinition](observationdefinition.html) that provides information
     * about this item, including information that might otherwise be included in the
     * instance of the Questionnaire resource. A detailed description of the
     * construction of the URI is shown in [Comments](questionnaire.html#definition),
     * below.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUri $definition
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefinition(null|string|FHIRUriPrimitive|FHIRUri $definition = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $definition && !($definition instanceof FHIRUri)) {
            $definition = new FHIRUri($definition);
        }
        $this->_trackValueSet($this->definition, $definition);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFINITION])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFINITION] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFINITION][0] = $xmlLocation;
        $this->definition = $definition;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[]
     */
    public function getCode(): null|array
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $code
     * @return static
     */
    public function addCode(null|FHIRCoding $code = null): self
    {
        if (null === $code) {
            $code = new FHIRCoding();
        }
        $this->_trackValueAdded();
        $this->code[] = $code;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short label for a particular group, question or set of display text within the
     * questionnaire used for reference by the individual completing the questionnaire.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getPrefix(): null|FHIRString
    {
        return $this->prefix;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short label for a particular group, question or set of display text within the
     * questionnaire used for reference by the individual completing the questionnaire.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $prefix
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPrefix(null|string|FHIRStringPrimitive|FHIRString $prefix = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $prefix && !($prefix instanceof FHIRString)) {
            $prefix = new FHIRString($prefix);
        }
        $this->_trackValueSet($this->prefix, $prefix);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PREFIX])) {
            $this->_primitiveXmlLocations[self::FIELD_PREFIX] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PREFIX][0] = $xmlLocation;
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of a section, the text of a question or text content for a display
     * item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getText(): null|FHIRString
    {
        return $this->text;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of a section, the text of a question or text content for a display
     * item.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $text
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setText(null|string|FHIRStringPrimitive|FHIRString $text = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $text && !($text instanceof FHIRString)) {
            $text = new FHIRString($text);
        }
        $this->_trackValueSet($this->text, $text);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_TEXT])) {
            $this->_primitiveXmlLocations[self::FIELD_TEXT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_TEXT][0] = $xmlLocation;
        $this->text = $text;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of questionnaire item this is - whether text for display, a grouping of
     * other items or a particular type of data to be captured (string, integer,
     * Coding, etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRQuestionnaireItemType
     */
    public function getType(): null|FHIRQuestionnaireItemType
    {
        return $this->type;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of questionnaire item this is - whether text for display, a grouping of
     * other items or a particular type of data to be captured (string, integer,
     * Coding, etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRQuestionnaireItemType $type
     * @return static
     */
    public function setType(null|FHIRQuestionnaireItemType $type = null): self
    {
        if (null === $type) {
            $type = new FHIRQuestionnaireItemType();
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen[]
     */
    public function getEnableWhen(): null|array
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen $enableWhen
     * @return static
     */
    public function addEnableWhen(null|FHIRQuestionnaireEnableWhen $enableWhen = null): self
    {
        if (null === $enableWhen) {
            $enableWhen = new FHIRQuestionnaireEnableWhen();
        }
        $this->_trackValueAdded();
        $this->enableWhen[] = $enableWhen;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls how multiple enableWhen values are interpreted - whether all or any
     * must be true.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIREnableWhenBehavior
     */
    public function getEnableBehavior(): null|FHIREnableWhenBehavior
    {
        return $this->enableBehavior;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls how multiple enableWhen values are interpreted - whether all or any
     * must be true.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIREnableWhenBehavior $enableBehavior
     * @return static
     */
    public function setEnableBehavior(null|FHIREnableWhenBehavior $enableBehavior = null): self
    {
        if (null === $enableBehavior) {
            $enableBehavior = new FHIREnableWhenBehavior();
        }
        $this->_trackValueSet($this->enableBehavior, $enableBehavior);
        $this->enableBehavior = $enableBehavior;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if and how items that are disabled (because enableWhen evaluates to
     * 'false') should be displayed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRQuestionnaireItemDisabledDisplay
     */
    public function getDisabledDisplay(): null|FHIRQuestionnaireItemDisabledDisplay
    {
        return $this->disabledDisplay;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if and how items that are disabled (because enableWhen evaluates to
     * 'false') should be displayed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRQuestionnaireItemDisabledDisplay $disabledDisplay
     * @return static
     */
    public function setDisabledDisplay(null|FHIRQuestionnaireItemDisabledDisplay $disabledDisplay = null): self
    {
        if (null === $disabledDisplay) {
            $disabledDisplay = new FHIRQuestionnaireItemDisabledDisplay();
        }
        $this->_trackValueSet($this->disabledDisplay, $disabledDisplay);
        $this->disabledDisplay = $disabledDisplay;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getRequired(): null|FHIRBoolean
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
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean $required
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setRequired(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $required = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $required && !($required instanceof FHIRBoolean)) {
            $required = new FHIRBoolean($required);
        }
        $this->_trackValueSet($this->required, $required);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_REQUIRED])) {
            $this->_primitiveXmlLocations[self::FIELD_REQUIRED] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_REQUIRED][0] = $xmlLocation;
        $this->required = $required;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, if true, that a QuestionnaireResponse for this item may include
     * multiple answers associated with a single instance of this item (for
     * question-type items) or multiple repetitions of the item (for group-type items).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getRepeats(): null|FHIRBoolean
    {
        return $this->repeats;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, if true, that a QuestionnaireResponse for this item may include
     * multiple answers associated with a single instance of this item (for
     * question-type items) or multiple repetitions of the item (for group-type items).
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean $repeats
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setRepeats(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $repeats = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $repeats && !($repeats instanceof FHIRBoolean)) {
            $repeats = new FHIRBoolean($repeats);
        }
        $this->_trackValueSet($this->repeats, $repeats);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_REPEATS])) {
            $this->_primitiveXmlLocations[self::FIELD_REPEATS] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_REPEATS][0] = $xmlLocation;
        $this->repeats = $repeats;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, when true, that the value cannot be changed by a human respondent
     * to the Questionnaire.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getReadOnly(): null|FHIRBoolean
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
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean $readOnly
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setReadOnly(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $readOnly = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $readOnly && !($readOnly instanceof FHIRBoolean)) {
            $readOnly = new FHIRBoolean($readOnly);
        }
        $this->_trackValueSet($this->readOnly, $readOnly);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_READ_ONLY])) {
            $this->_primitiveXmlLocations[self::FIELD_READ_ONLY] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_READ_ONLY][0] = $xmlLocation;
        $this->readOnly = $readOnly;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger
     */
    public function getMaxLength(): null|FHIRInteger
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R5\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger $maxLength
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMaxLength(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $maxLength = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $maxLength && !($maxLength instanceof FHIRInteger)) {
            $maxLength = new FHIRInteger($maxLength);
        }
        $this->_trackValueSet($this->maxLength, $maxLength);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MAX_LENGTH])) {
            $this->_primitiveXmlLocations[self::FIELD_MAX_LENGTH] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MAX_LENGTH][0] = $xmlLocation;
        $this->maxLength = $maxLength;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For items that have a defined set of allowed answers (via answerOption or
     * answerValueSet), indicates whether values *other* than those specified can be
     * selected.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRQuestionnaireAnswerConstraint
     */
    public function getAnswerConstraint(): null|FHIRQuestionnaireAnswerConstraint
    {
        return $this->answerConstraint;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For items that have a defined set of allowed answers (via answerOption or
     * answerValueSet), indicates whether values *other* than those specified can be
     * selected.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRQuestionnaireAnswerConstraint $answerConstraint
     * @return static
     */
    public function setAnswerConstraint(null|FHIRQuestionnaireAnswerConstraint $answerConstraint = null): self
    {
        if (null === $answerConstraint) {
            $answerConstraint = new FHIRQuestionnaireAnswerConstraint();
        }
        $this->_trackValueSet($this->answerConstraint, $answerConstraint);
        $this->answerConstraint = $answerConstraint;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to a value set containing a list of values representing permitted
     * answers for a question.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getAnswerValueSet(): null|FHIRCanonical
    {
        return $this->answerValueSet;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to a value set containing a list of values representing permitted
     * answers for a question.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical $answerValueSet
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setAnswerValueSet(null|string|FHIRCanonicalPrimitive|FHIRCanonical $answerValueSet = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $answerValueSet && !($answerValueSet instanceof FHIRCanonical)) {
            $answerValueSet = new FHIRCanonical($answerValueSet);
        }
        $this->_trackValueSet($this->answerValueSet, $answerValueSet);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_ANSWER_VALUE_SET])) {
            $this->_primitiveXmlLocations[self::FIELD_ANSWER_VALUE_SET] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_ANSWER_VALUE_SET][0] = $xmlLocation;
        $this->answerValueSet = $answerValueSet;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One of the permitted answers for the question.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireAnswerOption[]
     */
    public function getAnswerOption(): null|array
    {
        return $this->answerOption;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One of the permitted answers for the question.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireAnswerOption $answerOption
     * @return static
     */
    public function addAnswerOption(null|FHIRQuestionnaireAnswerOption $answerOption = null): self
    {
        if (null === $answerOption) {
            $answerOption = new FHIRQuestionnaireAnswerOption();
        }
        $this->_trackValueAdded();
        $this->answerOption[] = $answerOption;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireInitial[]
     */
    public function getInitial(): null|array
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireInitial $initial
     * @return static
     */
    public function addInitial(null|FHIRQuestionnaireInitial $initial = null): self
    {
        if (null === $initial) {
            $initial = new FHIRQuestionnaireInitial();
        }
        $this->_trackValueAdded();
        $this->initial[] = $initial;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * Text, questions and other groups to be nested beneath a question or group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem[]
     */
    public function getItem(): null|array
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem $item
     * @return static
     */
    public function addItem(null|FHIRQuestionnaireItem $item = null): self
    {
        if (null === $item) {
            $item = new FHIRQuestionnaireItem();
        }
        $this->_trackValueAdded();
        $this->item[] = $item;
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
        if (null !== ($v = $this->getLinkId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LINK_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPrefix())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PREFIX] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getText())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEXT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getEnableWhen())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ENABLE_WHEN, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getEnableBehavior())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENABLE_BEHAVIOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDisabledDisplay())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DISABLED_DISPLAY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequired())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUIRED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRepeats())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REPEATS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReadOnly())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_READ_ONLY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxLength())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_LENGTH] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAnswerConstraint())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ANSWER_CONSTRAINT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAnswerValueSet())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ANSWER_VALUE_SET] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAnswerOption())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ANSWER_OPTION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getInitial())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INITIAL, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getItem())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ITEM, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LINK_ID])) {
            $v = $this->getLinkId();
            foreach($validationRules[self::FIELD_LINK_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_LINK_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LINK_ID])) {
                        $errs[self::FIELD_LINK_ID] = [];
                    }
                    $errs[self::FIELD_LINK_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION])) {
            $v = $this->getDefinition();
            foreach($validationRules[self::FIELD_DEFINITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION])) {
                        $errs[self::FIELD_DEFINITION] = [];
                    }
                    $errs[self::FIELD_DEFINITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PREFIX])) {
            $v = $this->getPrefix();
            foreach($validationRules[self::FIELD_PREFIX] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_PREFIX, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PREFIX])) {
                        $errs[self::FIELD_PREFIX] = [];
                    }
                    $errs[self::FIELD_PREFIX][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENABLE_WHEN])) {
            $v = $this->getEnableWhen();
            foreach($validationRules[self::FIELD_ENABLE_WHEN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_ENABLE_WHEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENABLE_WHEN])) {
                        $errs[self::FIELD_ENABLE_WHEN] = [];
                    }
                    $errs[self::FIELD_ENABLE_WHEN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENABLE_BEHAVIOR])) {
            $v = $this->getEnableBehavior();
            foreach($validationRules[self::FIELD_ENABLE_BEHAVIOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_ENABLE_BEHAVIOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENABLE_BEHAVIOR])) {
                        $errs[self::FIELD_ENABLE_BEHAVIOR] = [];
                    }
                    $errs[self::FIELD_ENABLE_BEHAVIOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISABLED_DISPLAY])) {
            $v = $this->getDisabledDisplay();
            foreach($validationRules[self::FIELD_DISABLED_DISPLAY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_DISABLED_DISPLAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISABLED_DISPLAY])) {
                        $errs[self::FIELD_DISABLED_DISPLAY] = [];
                    }
                    $errs[self::FIELD_DISABLED_DISPLAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUIRED])) {
            $v = $this->getRequired();
            foreach($validationRules[self::FIELD_REQUIRED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_REQUIRED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUIRED])) {
                        $errs[self::FIELD_REQUIRED] = [];
                    }
                    $errs[self::FIELD_REQUIRED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPEATS])) {
            $v = $this->getRepeats();
            foreach($validationRules[self::FIELD_REPEATS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_REPEATS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPEATS])) {
                        $errs[self::FIELD_REPEATS] = [];
                    }
                    $errs[self::FIELD_REPEATS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_READ_ONLY])) {
            $v = $this->getReadOnly();
            foreach($validationRules[self::FIELD_READ_ONLY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_READ_ONLY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_READ_ONLY])) {
                        $errs[self::FIELD_READ_ONLY] = [];
                    }
                    $errs[self::FIELD_READ_ONLY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_LENGTH])) {
            $v = $this->getMaxLength();
            foreach($validationRules[self::FIELD_MAX_LENGTH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_MAX_LENGTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_LENGTH])) {
                        $errs[self::FIELD_MAX_LENGTH] = [];
                    }
                    $errs[self::FIELD_MAX_LENGTH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER_CONSTRAINT])) {
            $v = $this->getAnswerConstraint();
            foreach($validationRules[self::FIELD_ANSWER_CONSTRAINT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_ANSWER_CONSTRAINT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_CONSTRAINT])) {
                        $errs[self::FIELD_ANSWER_CONSTRAINT] = [];
                    }
                    $errs[self::FIELD_ANSWER_CONSTRAINT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER_VALUE_SET])) {
            $v = $this->getAnswerValueSet();
            foreach($validationRules[self::FIELD_ANSWER_VALUE_SET] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_ANSWER_VALUE_SET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_VALUE_SET])) {
                        $errs[self::FIELD_ANSWER_VALUE_SET] = [];
                    }
                    $errs[self::FIELD_ANSWER_VALUE_SET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER_OPTION])) {
            $v = $this->getAnswerOption();
            foreach($validationRules[self::FIELD_ANSWER_OPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_ANSWER_OPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_OPTION])) {
                        $errs[self::FIELD_ANSWER_OPTION] = [];
                    }
                    $errs[self::FIELD_ANSWER_OPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIAL])) {
            $v = $this->getInitial();
            foreach($validationRules[self::FIELD_INITIAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_INITIAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIAL])) {
                        $errs[self::FIELD_INITIAL] = [];
                    }
                    $errs[self::FIELD_INITIAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ITEM])) {
            $v = $this->getItem();
            foreach($validationRules[self::FIELD_ITEM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_ITEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ITEM])) {
                        $errs[self::FIELD_ITEM] = [];
                    }
                    $errs[self::FIELD_ITEM][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem
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
        } else if (!($type instanceof FHIRQuestionnaireItem)) {
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
            if (self::FIELD_LINK_ID === $childName) {
                $type->setLinkId(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFINITION === $childName) {
                $type->setDefinition(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CODE === $childName) {
                $type->addCode(FHIRCoding::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PREFIX === $childName) {
                $type->setPrefix(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TEXT === $childName) {
                $type->setText(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TYPE === $childName) {
                $type->setType(FHIRQuestionnaireItemType::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ENABLE_WHEN === $childName) {
                $type->addEnableWhen(FHIRQuestionnaireEnableWhen::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ENABLE_BEHAVIOR === $childName) {
                $type->setEnableBehavior(FHIREnableWhenBehavior::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DISABLED_DISPLAY === $childName) {
                $type->setDisabledDisplay(FHIRQuestionnaireItemDisabledDisplay::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REQUIRED === $childName) {
                $type->setRequired(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_REPEATS === $childName) {
                $type->setRepeats(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_READ_ONLY === $childName) {
                $type->setReadOnly(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MAX_LENGTH === $childName) {
                $type->setMaxLength(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ANSWER_CONSTRAINT === $childName) {
                $type->setAnswerConstraint(FHIRQuestionnaireAnswerConstraint::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ANSWER_VALUE_SET === $childName) {
                $type->setAnswerValueSet(FHIRCanonical::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ANSWER_OPTION === $childName) {
                $type->addAnswerOption(FHIRQuestionnaireAnswerOption::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_INITIAL === $childName) {
                $type->addInitial(FHIRQuestionnaireInitial::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ITEM === $childName) {
                $type->addItem(FHIRQuestionnaireItem::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_LINK_ID])) {
            $pt = $type->getLinkId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LINK_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLinkId((string)$attributes[self::FIELD_LINK_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFINITION])) {
            $pt = $type->getDefinition();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFINITION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefinition((string)$attributes[self::FIELD_DEFINITION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PREFIX])) {
            $pt = $type->getPrefix();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PREFIX], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPrefix((string)$attributes[self::FIELD_PREFIX], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TEXT])) {
            $pt = $type->getText();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TEXT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setText((string)$attributes[self::FIELD_TEXT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_REQUIRED])) {
            $pt = $type->getRequired();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_REQUIRED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setRequired((string)$attributes[self::FIELD_REQUIRED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_REPEATS])) {
            $pt = $type->getRepeats();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_REPEATS], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setRepeats((string)$attributes[self::FIELD_REPEATS], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_READ_ONLY])) {
            $pt = $type->getReadOnly();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_READ_ONLY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setReadOnly((string)$attributes[self::FIELD_READ_ONLY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MAX_LENGTH])) {
            $pt = $type->getMaxLength();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MAX_LENGTH], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMaxLength((string)$attributes[self::FIELD_MAX_LENGTH], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_VALUE_SET])) {
            $pt = $type->getAnswerValueSet();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ANSWER_VALUE_SET], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setAnswerValueSet((string)$attributes[self::FIELD_ANSWER_VALUE_SET], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'QuestionnaireItem', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_LINK_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getLinkId())) {
            $xw->writeAttribute(self::FIELD_LINK_ID, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFINITION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefinition())) {
            $xw->writeAttribute(self::FIELD_DEFINITION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PREFIX] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPrefix())) {
            $xw->writeAttribute(self::FIELD_PREFIX, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_TEXT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getText())) {
            $xw->writeAttribute(self::FIELD_TEXT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_REQUIRED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getRequired())) {
            $xw->writeAttribute(self::FIELD_REQUIRED, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_REPEATS] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getRepeats())) {
            $xw->writeAttribute(self::FIELD_REPEATS, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_READ_ONLY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getReadOnly())) {
            $xw->writeAttribute(self::FIELD_READ_ONLY, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MAX_LENGTH] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMaxLength())) {
            $xw->writeAttribute(self::FIELD_MAX_LENGTH, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ANSWER_VALUE_SET] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getAnswerValueSet())) {
            $xw->writeAttribute(self::FIELD_ANSWER_VALUE_SET, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_primitiveXmlLocations[self::FIELD_LINK_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getLinkId())) {
            $xw->startElement(self::FIELD_LINK_ID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFINITION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefinition())) {
            $xw->startElement(self::FIELD_DEFINITION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getCode() as $v) {
            $xw->startElement(self::FIELD_CODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PREFIX] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPrefix())) {
            $xw->startElement(self::FIELD_PREFIX);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_TEXT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getText())) {
            $xw->startElement(self::FIELD_TEXT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getEnableWhen() as $v) {
            $xw->startElement(self::FIELD_ENABLE_WHEN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getEnableBehavior())) {
            $xw->startElement(self::FIELD_ENABLE_BEHAVIOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDisabledDisplay())) {
            $xw->startElement(self::FIELD_DISABLED_DISPLAY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_REQUIRED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getRequired())) {
            $xw->startElement(self::FIELD_REQUIRED);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_REPEATS] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getRepeats())) {
            $xw->startElement(self::FIELD_REPEATS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_READ_ONLY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getReadOnly())) {
            $xw->startElement(self::FIELD_READ_ONLY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MAX_LENGTH] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMaxLength())) {
            $xw->startElement(self::FIELD_MAX_LENGTH);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getAnswerConstraint())) {
            $xw->startElement(self::FIELD_ANSWER_CONSTRAINT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ANSWER_VALUE_SET] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getAnswerValueSet())) {
            $xw->startElement(self::FIELD_ANSWER_VALUE_SET);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getAnswerOption() as $v) {
            $xw->startElement(self::FIELD_ANSWER_OPTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getInitial() as $v) {
            $xw->startElement(self::FIELD_INITIAL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getItem() as $v) {
            $xw->startElement(self::FIELD_ITEM);
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
        if (null !== ($v = $this->getLinkId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LINK_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LINK_ID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefinition())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFINITION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFINITION_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getCode())) {
            $out->{self::FIELD_CODE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CODE}[] = $v;
            }
        }
        if (null !== ($v = $this->getPrefix())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PREFIX} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PREFIX_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getText())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TEXT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TEXT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRQuestionnaireItemType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TYPE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getEnableWhen())) {
            $out->{self::FIELD_ENABLE_WHEN} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_ENABLE_WHEN}[] = $v;
            }
        }
        if (null !== ($v = $this->getEnableBehavior())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ENABLE_BEHAVIOR} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIREnableWhenBehavior::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ENABLE_BEHAVIOR_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDisabledDisplay())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DISABLED_DISPLAY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRQuestionnaireItemDisabledDisplay::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DISABLED_DISPLAY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRequired())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REQUIRED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REQUIRED_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRepeats())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REPEATS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REPEATS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getReadOnly())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_READ_ONLY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_READ_ONLY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMaxLength())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MAX_LENGTH} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MAX_LENGTH_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAnswerConstraint())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ANSWER_CONSTRAINT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRQuestionnaireAnswerConstraint::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ANSWER_CONSTRAINT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAnswerValueSet())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ANSWER_VALUE_SET} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCanonical::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ANSWER_VALUE_SET_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getAnswerOption())) {
            $out->{self::FIELD_ANSWER_OPTION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_ANSWER_OPTION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getInitial())) {
            $out->{self::FIELD_INITIAL} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_INITIAL}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getItem())) {
            $out->{self::FIELD_ITEM} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_ITEM}[] = $v;
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