<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:13+0000
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

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuestionnaireItemType;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A structured set of questions intended to guide the collection of answers from
 * end-users. Questionnaires provide detailed control over order, presentation,
 * phraseology and grouping to allow coherent, consistent data collection.
 *
 * Class FHIRQuestionnaireItem
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire
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
    const FIELD_REQUIRED = 'required';
    const FIELD_REQUIRED_EXT = '_required';
    const FIELD_REPEATS = 'repeats';
    const FIELD_REPEATS_EXT = '_repeats';
    const FIELD_READ_ONLY = 'readOnly';
    const FIELD_READ_ONLY_EXT = '_readOnly';
    const FIELD_MAX_LENGTH = 'maxLength';
    const FIELD_MAX_LENGTH_EXT = '_maxLength';
    const FIELD_OPTIONS = 'options';
    const FIELD_OPTION = 'option';
    const FIELD_INITIAL_BOOLEAN = 'initialBoolean';
    const FIELD_INITIAL_BOOLEAN_EXT = '_initialBoolean';
    const FIELD_INITIAL_DECIMAL = 'initialDecimal';
    const FIELD_INITIAL_DECIMAL_EXT = '_initialDecimal';
    const FIELD_INITIAL_INTEGER = 'initialInteger';
    const FIELD_INITIAL_INTEGER_EXT = '_initialInteger';
    const FIELD_INITIAL_DATE = 'initialDate';
    const FIELD_INITIAL_DATE_EXT = '_initialDate';
    const FIELD_INITIAL_DATE_TIME = 'initialDateTime';
    const FIELD_INITIAL_DATE_TIME_EXT = '_initialDateTime';
    const FIELD_INITIAL_TIME = 'initialTime';
    const FIELD_INITIAL_TIME_EXT = '_initialTime';
    const FIELD_INITIAL_STRING = 'initialString';
    const FIELD_INITIAL_STRING_EXT = '_initialString';
    const FIELD_INITIAL_URI = 'initialUri';
    const FIELD_INITIAL_URI_EXT = '_initialUri';
    const FIELD_INITIAL_ATTACHMENT = 'initialAttachment';
    const FIELD_INITIAL_CODING = 'initialCoding';
    const FIELD_INITIAL_QUANTITY = 'initialQuantity';
    const FIELD_INITIAL_REFERENCE = 'initialReference';
    const FIELD_ITEM = 'item';

    /** @var string */
    private $_xmlns = '';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that is unique within the Questionnaire allowing linkage to the
     * equivalent item in a QuestionnaireResponse resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $linkId = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to an [[[ElementDefinition]]] that provides the details for the
     * item. If a definition is provided, then the following element values can be
     * inferred from the definition: * code (ElementDefinition.code) * type
     * (ElementDefinition.type) * required (ElementDefinition.min) * repeats
     * (ElementDefinition.max) * maxLength (ElementDefinition.maxLength) * options
     * (ElementDefinition.binding) Any information provided in these elements on a
     * Questionnaire Item overrides the information from the definition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected $definition = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A terminology code that corresponds to this group or question (e.g. a code from
     * LOINC, which defines many questions and answers).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[]
     */
    protected $code = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short label for a particular group, question or set of display text within the
     * questionnaire used for reference by the individual completing the questionnaire.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $prefix = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of a section, the text of a question or text content for a display
     * item.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $text = null;

    /**
     * Distinguishes groups from questions and display text and indicates data type for
     * questions
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of questionnaire item this is - whether text for display, a grouping of
     * other items or a particular type of data to be captured (string, integer, coded
     * choice, etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuestionnaireItemType
     */
    protected $type = null;

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * A constraint indicating that this item should only be enabled (displayed/allow
     * answers to be captured) when the specified condition is true.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen[]
     */
    protected $enableWhen = [];

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, if true, that the item must be present in a "completed"
     * QuestionnaireResponse. If false, the item may be skipped when answering the
     * questionnaire.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $required = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, if true, that the item may occur multiple times in the response,
     * collecting multiple answers answers for questions or multiple sets of answers
     * for groups.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $repeats = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, when true, that the value cannot be changed by a human respondent
     * to the Questionnaire.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $readOnly = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of characters that are permitted in the answer to be
     * considered a "valid" QuestionnaireResponse.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected $maxLength = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a value set containing a list of codes representing permitted
     * answers for a "choice" or "open-choice" question.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $options = null;

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One of the permitted answers for a "choice" or "open-choice" question.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireOption[]
     */
    protected $option = [];

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $initialBoolean = null;

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    protected $initialDecimal = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected $initialInteger = null;

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    protected $initialDate = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected $initialDateTime = null;

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    protected $initialTime = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $initialString = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected $initialUri = null;

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment
     */
    protected $initialAttachment = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding
     */
    protected $initialCoding = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    protected $initialQuantity = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $initialReference = null;

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * Text, questions and other groups to be nested beneath a question or group.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem[]
     */
    protected $item = [];

    /**
     * Validation map for fields in type Questionnaire.Item
     * @var array
     */
    private static $_validationRules = [    ];

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
        if (isset($data[self::FIELD_LINK_ID]) || isset($data[self::FIELD_LINK_ID_EXT])) {
            $value = isset($data[self::FIELD_LINK_ID]) ? $data[self::FIELD_LINK_ID] : null;
            $ext = (isset($data[self::FIELD_LINK_ID_EXT]) && is_array($data[self::FIELD_LINK_ID_EXT])) ? $ext = $data[self::FIELD_LINK_ID_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_DEFINITION]) || isset($data[self::FIELD_DEFINITION_EXT])) {
            $value = isset($data[self::FIELD_DEFINITION]) ? $data[self::FIELD_DEFINITION] : null;
            $ext = (isset($data[self::FIELD_DEFINITION_EXT]) && is_array($data[self::FIELD_DEFINITION_EXT])) ? $ext = $data[self::FIELD_DEFINITION_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if (is_array($data[self::FIELD_CODE])) {
                foreach($data[self::FIELD_CODE] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_PREFIX]) || isset($data[self::FIELD_PREFIX_EXT])) {
            $value = isset($data[self::FIELD_PREFIX]) ? $data[self::FIELD_PREFIX] : null;
            $ext = (isset($data[self::FIELD_PREFIX_EXT]) && is_array($data[self::FIELD_PREFIX_EXT])) ? $ext = $data[self::FIELD_PREFIX_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_TEXT]) || isset($data[self::FIELD_TEXT_EXT])) {
            $value = isset($data[self::FIELD_TEXT]) ? $data[self::FIELD_TEXT] : null;
            $ext = (isset($data[self::FIELD_TEXT_EXT]) && is_array($data[self::FIELD_TEXT_EXT])) ? $ext = $data[self::FIELD_TEXT_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_TYPE]) || isset($data[self::FIELD_TYPE_EXT])) {
            $value = isset($data[self::FIELD_TYPE]) ? $data[self::FIELD_TYPE] : null;
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) ? $ext = $data[self::FIELD_TYPE_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_ENABLE_WHEN])) {
            if (is_array($data[self::FIELD_ENABLE_WHEN])) {
                foreach($data[self::FIELD_ENABLE_WHEN] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_REQUIRED]) || isset($data[self::FIELD_REQUIRED_EXT])) {
            $value = isset($data[self::FIELD_REQUIRED]) ? $data[self::FIELD_REQUIRED] : null;
            $ext = (isset($data[self::FIELD_REQUIRED_EXT]) && is_array($data[self::FIELD_REQUIRED_EXT])) ? $ext = $data[self::FIELD_REQUIRED_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_REPEATS]) || isset($data[self::FIELD_REPEATS_EXT])) {
            $value = isset($data[self::FIELD_REPEATS]) ? $data[self::FIELD_REPEATS] : null;
            $ext = (isset($data[self::FIELD_REPEATS_EXT]) && is_array($data[self::FIELD_REPEATS_EXT])) ? $ext = $data[self::FIELD_REPEATS_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_READ_ONLY]) || isset($data[self::FIELD_READ_ONLY_EXT])) {
            $value = isset($data[self::FIELD_READ_ONLY]) ? $data[self::FIELD_READ_ONLY] : null;
            $ext = (isset($data[self::FIELD_READ_ONLY_EXT]) && is_array($data[self::FIELD_READ_ONLY_EXT])) ? $ext = $data[self::FIELD_READ_ONLY_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_MAX_LENGTH]) || isset($data[self::FIELD_MAX_LENGTH_EXT])) {
            $value = isset($data[self::FIELD_MAX_LENGTH]) ? $data[self::FIELD_MAX_LENGTH] : null;
            $ext = (isset($data[self::FIELD_MAX_LENGTH_EXT]) && is_array($data[self::FIELD_MAX_LENGTH_EXT])) ? $ext = $data[self::FIELD_MAX_LENGTH_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_OPTIONS])) {
            if ($data[self::FIELD_OPTIONS] instanceof FHIRReference) {
                $this->setOptions($data[self::FIELD_OPTIONS]);
            } else {
                $this->setOptions(new FHIRReference($data[self::FIELD_OPTIONS]));
            }
        }
        if (isset($data[self::FIELD_OPTION])) {
            if (is_array($data[self::FIELD_OPTION])) {
                foreach($data[self::FIELD_OPTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRQuestionnaireOption) {
                        $this->addOption($v);
                    } else {
                        $this->addOption(new FHIRQuestionnaireOption($v));
                    }
                }
            } elseif ($data[self::FIELD_OPTION] instanceof FHIRQuestionnaireOption) {
                $this->addOption($data[self::FIELD_OPTION]);
            } else {
                $this->addOption(new FHIRQuestionnaireOption($data[self::FIELD_OPTION]));
            }
        }
        if (isset($data[self::FIELD_INITIAL_BOOLEAN]) || isset($data[self::FIELD_INITIAL_BOOLEAN_EXT])) {
            $value = isset($data[self::FIELD_INITIAL_BOOLEAN]) ? $data[self::FIELD_INITIAL_BOOLEAN] : null;
            $ext = (isset($data[self::FIELD_INITIAL_BOOLEAN_EXT]) && is_array($data[self::FIELD_INITIAL_BOOLEAN_EXT])) ? $ext = $data[self::FIELD_INITIAL_BOOLEAN_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setInitialBoolean($value);
                } else if (is_array($value)) {
                    $this->setInitialBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setInitialBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setInitialBoolean(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_INITIAL_DECIMAL]) || isset($data[self::FIELD_INITIAL_DECIMAL_EXT])) {
            $value = isset($data[self::FIELD_INITIAL_DECIMAL]) ? $data[self::FIELD_INITIAL_DECIMAL] : null;
            $ext = (isset($data[self::FIELD_INITIAL_DECIMAL_EXT]) && is_array($data[self::FIELD_INITIAL_DECIMAL_EXT])) ? $ext = $data[self::FIELD_INITIAL_DECIMAL_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setInitialDecimal($value);
                } else if (is_array($value)) {
                    $this->setInitialDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setInitialDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setInitialDecimal(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_INITIAL_INTEGER]) || isset($data[self::FIELD_INITIAL_INTEGER_EXT])) {
            $value = isset($data[self::FIELD_INITIAL_INTEGER]) ? $data[self::FIELD_INITIAL_INTEGER] : null;
            $ext = (isset($data[self::FIELD_INITIAL_INTEGER_EXT]) && is_array($data[self::FIELD_INITIAL_INTEGER_EXT])) ? $ext = $data[self::FIELD_INITIAL_INTEGER_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setInitialInteger($value);
                } else if (is_array($value)) {
                    $this->setInitialInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setInitialInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setInitialInteger(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_INITIAL_DATE]) || isset($data[self::FIELD_INITIAL_DATE_EXT])) {
            $value = isset($data[self::FIELD_INITIAL_DATE]) ? $data[self::FIELD_INITIAL_DATE] : null;
            $ext = (isset($data[self::FIELD_INITIAL_DATE_EXT]) && is_array($data[self::FIELD_INITIAL_DATE_EXT])) ? $ext = $data[self::FIELD_INITIAL_DATE_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setInitialDate($value);
                } else if (is_array($value)) {
                    $this->setInitialDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setInitialDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setInitialDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_INITIAL_DATE_TIME]) || isset($data[self::FIELD_INITIAL_DATE_TIME_EXT])) {
            $value = isset($data[self::FIELD_INITIAL_DATE_TIME]) ? $data[self::FIELD_INITIAL_DATE_TIME] : null;
            $ext = (isset($data[self::FIELD_INITIAL_DATE_TIME_EXT]) && is_array($data[self::FIELD_INITIAL_DATE_TIME_EXT])) ? $ext = $data[self::FIELD_INITIAL_DATE_TIME_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setInitialDateTime($value);
                } else if (is_array($value)) {
                    $this->setInitialDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setInitialDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setInitialDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_INITIAL_TIME]) || isset($data[self::FIELD_INITIAL_TIME_EXT])) {
            $value = isset($data[self::FIELD_INITIAL_TIME]) ? $data[self::FIELD_INITIAL_TIME] : null;
            $ext = (isset($data[self::FIELD_INITIAL_TIME_EXT]) && is_array($data[self::FIELD_INITIAL_TIME_EXT])) ? $ext = $data[self::FIELD_INITIAL_TIME_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $this->setInitialTime($value);
                } else if (is_array($value)) {
                    $this->setInitialTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $this->setInitialTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setInitialTime(new FHIRTime($ext));
            }
        }
        if (isset($data[self::FIELD_INITIAL_STRING]) || isset($data[self::FIELD_INITIAL_STRING_EXT])) {
            $value = isset($data[self::FIELD_INITIAL_STRING]) ? $data[self::FIELD_INITIAL_STRING] : null;
            $ext = (isset($data[self::FIELD_INITIAL_STRING_EXT]) && is_array($data[self::FIELD_INITIAL_STRING_EXT])) ? $ext = $data[self::FIELD_INITIAL_STRING_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setInitialString($value);
                } else if (is_array($value)) {
                    $this->setInitialString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setInitialString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setInitialString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_INITIAL_URI]) || isset($data[self::FIELD_INITIAL_URI_EXT])) {
            $value = isset($data[self::FIELD_INITIAL_URI]) ? $data[self::FIELD_INITIAL_URI] : null;
            $ext = (isset($data[self::FIELD_INITIAL_URI_EXT]) && is_array($data[self::FIELD_INITIAL_URI_EXT])) ? $ext = $data[self::FIELD_INITIAL_URI_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setInitialUri($value);
                } else if (is_array($value)) {
                    $this->setInitialUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setInitialUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setInitialUri(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_INITIAL_ATTACHMENT])) {
            if ($data[self::FIELD_INITIAL_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setInitialAttachment($data[self::FIELD_INITIAL_ATTACHMENT]);
            } else {
                $this->setInitialAttachment(new FHIRAttachment($data[self::FIELD_INITIAL_ATTACHMENT]));
            }
        }
        if (isset($data[self::FIELD_INITIAL_CODING])) {
            if ($data[self::FIELD_INITIAL_CODING] instanceof FHIRCoding) {
                $this->setInitialCoding($data[self::FIELD_INITIAL_CODING]);
            } else {
                $this->setInitialCoding(new FHIRCoding($data[self::FIELD_INITIAL_CODING]));
            }
        }
        if (isset($data[self::FIELD_INITIAL_QUANTITY])) {
            if ($data[self::FIELD_INITIAL_QUANTITY] instanceof FHIRQuantity) {
                $this->setInitialQuantity($data[self::FIELD_INITIAL_QUANTITY]);
            } else {
                $this->setInitialQuantity(new FHIRQuantity($data[self::FIELD_INITIAL_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_INITIAL_REFERENCE])) {
            if ($data[self::FIELD_INITIAL_REFERENCE] instanceof FHIRReference) {
                $this->setInitialReference($data[self::FIELD_INITIAL_REFERENCE]);
            } else {
                $this->setInitialReference(new FHIRReference($data[self::FIELD_INITIAL_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_ITEM])) {
            if (is_array($data[self::FIELD_ITEM])) {
                foreach($data[self::FIELD_ITEM] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if ('' !==  $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<QuestionnaireItem{$xmlns}></QuestionnaireItem>";
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that is unique within the Questionnaire allowing linkage to the
     * equivalent item in a QuestionnaireResponse resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that is unique within the Questionnaire allowing linkage to the
     * equivalent item in a QuestionnaireResponse resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $linkId
     * @return static
     */
    public function setLinkId($linkId = null)
    {
        if (null !== $linkId && !($linkId instanceof FHIRString)) {
            $linkId = new FHIRString($linkId);
        }
        $this->_trackValueSet($this->linkId, $linkId);
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to an [[[ElementDefinition]]] that provides the details for the
     * item. If a definition is provided, then the following element values can be
     * inferred from the definition: * code (ElementDefinition.code) * type
     * (ElementDefinition.type) * required (ElementDefinition.min) * repeats
     * (ElementDefinition.max) * maxLength (ElementDefinition.maxLength) * options
     * (ElementDefinition.binding) Any information provided in these elements on a
     * Questionnaire Item overrides the information from the definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
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
     * A reference to an [[[ElementDefinition]]] that provides the details for the
     * item. If a definition is provided, then the following element values can be
     * inferred from the definition: * code (ElementDefinition.code) * type
     * (ElementDefinition.type) * required (ElementDefinition.min) * repeats
     * (ElementDefinition.max) * maxLength (ElementDefinition.maxLength) * options
     * (ElementDefinition.binding) Any information provided in these elements on a
     * Questionnaire Item overrides the information from the definition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $definition
     * @return static
     */
    public function setDefinition($definition = null)
    {
        if (null !== $definition && !($definition instanceof FHIRUri)) {
            $definition = new FHIRUri($definition);
        }
        $this->_trackValueSet($this->definition, $definition);
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding $code
     * @return static
     */
    public function addCode(FHIRCoding $code = null)
    {
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[] $code
     * @return static
     */
    public function setCode(array $code = [])
    {
        if ([] !== $this->code) {
            $this->_trackValuesRemoved(count($this->code));
            $this->code = [];
        }
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short label for a particular group, question or set of display text within the
     * questionnaire used for reference by the individual completing the questionnaire.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short label for a particular group, question or set of display text within the
     * questionnaire used for reference by the individual completing the questionnaire.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $prefix
     * @return static
     */
    public function setPrefix($prefix = null)
    {
        if (null !== $prefix && !($prefix instanceof FHIRString)) {
            $prefix = new FHIRString($prefix);
        }
        $this->_trackValueSet($this->prefix, $prefix);
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of a section, the text of a question or text content for a display
     * item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of a section, the text of a question or text content for a display
     * item.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $text
     * @return static
     */
    public function setText($text = null)
    {
        if (null !== $text && !($text instanceof FHIRString)) {
            $text = new FHIRString($text);
        }
        $this->_trackValueSet($this->text, $text);
        $this->text = $text;
        return $this;
    }

    /**
     * Distinguishes groups from questions and display text and indicates data type for
     * questions
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of questionnaire item this is - whether text for display, a grouping of
     * other items or a particular type of data to be captured (string, integer, coded
     * choice, etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuestionnaireItemType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Distinguishes groups from questions and display text and indicates data type for
     * questions
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of questionnaire item this is - whether text for display, a grouping of
     * other items or a particular type of data to be captured (string, integer, coded
     * choice, etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuestionnaireItemType $type
     * @return static
     */
    public function setType(FHIRQuestionnaireItemType $type = null)
    {
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen $enableWhen
     * @return static
     */
    public function addEnableWhen(FHIRQuestionnaireEnableWhen $enableWhen = null)
    {
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen[] $enableWhen
     * @return static
     */
    public function setEnableWhen(array $enableWhen = [])
    {
        if ([] !== $this->enableWhen) {
            $this->_trackValuesRemoved(count($this->enableWhen));
            $this->enableWhen = [];
        }
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, if true, that the item must be present in a "completed"
     * QuestionnaireResponse. If false, the item may be skipped when answering the
     * questionnaire.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $required
     * @return static
     */
    public function setRequired($required = null)
    {
        if (null !== $required && !($required instanceof FHIRBoolean)) {
            $required = new FHIRBoolean($required);
        }
        $this->_trackValueSet($this->required, $required);
        $this->required = $required;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, if true, that the item may occur multiple times in the response,
     * collecting multiple answers answers for questions or multiple sets of answers
     * for groups.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
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
     * collecting multiple answers answers for questions or multiple sets of answers
     * for groups.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $repeats
     * @return static
     */
    public function setRepeats($repeats = null)
    {
        if (null !== $repeats && !($repeats instanceof FHIRBoolean)) {
            $repeats = new FHIRBoolean($repeats);
        }
        $this->_trackValueSet($this->repeats, $repeats);
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $readOnly
     * @return static
     */
    public function setReadOnly($readOnly = null)
    {
        if (null !== $readOnly && !($readOnly instanceof FHIRBoolean)) {
            $readOnly = new FHIRBoolean($readOnly);
        }
        $this->_trackValueSet($this->readOnly, $readOnly);
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $maxLength
     * @return static
     */
    public function setMaxLength($maxLength = null)
    {
        if (null !== $maxLength && !($maxLength instanceof FHIRInteger)) {
            $maxLength = new FHIRInteger($maxLength);
        }
        $this->_trackValueSet($this->maxLength, $maxLength);
        $this->maxLength = $maxLength;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a value set containing a list of codes representing permitted
     * answers for a "choice" or "open-choice" question.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a value set containing a list of codes representing permitted
     * answers for a "choice" or "open-choice" question.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $options
     * @return static
     */
    public function setOptions(FHIRReference $options = null)
    {
        $this->_trackValueSet($this->options, $options);
        $this->options = $options;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One of the permitted answers for a "choice" or "open-choice" question.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireOption[]
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One of the permitted answers for a "choice" or "open-choice" question.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireOption $option
     * @return static
     */
    public function addOption(FHIRQuestionnaireOption $option = null)
    {
        $this->_trackValueAdded();
        $this->option[] = $option;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One of the permitted answers for a "choice" or "open-choice" question.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireOption[] $option
     * @return static
     */
    public function setOption(array $option = [])
    {
        if ([] !== $this->option) {
            $this->_trackValuesRemoved(count($this->option));
            $this->option = [];
        }
        if ([] === $option) {
            return $this;
        }
        foreach($option as $v) {
            if ($v instanceof FHIRQuestionnaireOption) {
                $this->addOption($v);
            } else {
                $this->addOption(new FHIRQuestionnaireOption($v));
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getInitialBoolean()
    {
        return $this->initialBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $initialBoolean
     * @return static
     */
    public function setInitialBoolean($initialBoolean = null)
    {
        if (null !== $initialBoolean && !($initialBoolean instanceof FHIRBoolean)) {
            $initialBoolean = new FHIRBoolean($initialBoolean);
        }
        $this->_trackValueSet($this->initialBoolean, $initialBoolean);
        $this->initialBoolean = $initialBoolean;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    public function getInitialDecimal()
    {
        return $this->initialDecimal;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal $initialDecimal
     * @return static
     */
    public function setInitialDecimal($initialDecimal = null)
    {
        if (null !== $initialDecimal && !($initialDecimal instanceof FHIRDecimal)) {
            $initialDecimal = new FHIRDecimal($initialDecimal);
        }
        $this->_trackValueSet($this->initialDecimal, $initialDecimal);
        $this->initialDecimal = $initialDecimal;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getInitialInteger()
    {
        return $this->initialInteger;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $initialInteger
     * @return static
     */
    public function setInitialInteger($initialInteger = null)
    {
        if (null !== $initialInteger && !($initialInteger instanceof FHIRInteger)) {
            $initialInteger = new FHIRInteger($initialInteger);
        }
        $this->_trackValueSet($this->initialInteger, $initialInteger);
        $this->initialInteger = $initialInteger;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    public function getInitialDate()
    {
        return $this->initialDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate $initialDate
     * @return static
     */
    public function setInitialDate($initialDate = null)
    {
        if (null !== $initialDate && !($initialDate instanceof FHIRDate)) {
            $initialDate = new FHIRDate($initialDate);
        }
        $this->_trackValueSet($this->initialDate, $initialDate);
        $this->initialDate = $initialDate;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    public function getInitialDateTime()
    {
        return $this->initialDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $initialDateTime
     * @return static
     */
    public function setInitialDateTime($initialDateTime = null)
    {
        if (null !== $initialDateTime && !($initialDateTime instanceof FHIRDateTime)) {
            $initialDateTime = new FHIRDateTime($initialDateTime);
        }
        $this->_trackValueSet($this->initialDateTime, $initialDateTime);
        $this->initialDateTime = $initialDateTime;
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    public function getInitialTime()
    {
        return $this->initialTime;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime $initialTime
     * @return static
     */
    public function setInitialTime($initialTime = null)
    {
        if (null !== $initialTime && !($initialTime instanceof FHIRTime)) {
            $initialTime = new FHIRTime($initialTime);
        }
        $this->_trackValueSet($this->initialTime, $initialTime);
        $this->initialTime = $initialTime;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getInitialString()
    {
        return $this->initialString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $initialString
     * @return static
     */
    public function setInitialString($initialString = null)
    {
        if (null !== $initialString && !($initialString instanceof FHIRString)) {
            $initialString = new FHIRString($initialString);
        }
        $this->_trackValueSet($this->initialString, $initialString);
        $this->initialString = $initialString;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getInitialUri()
    {
        return $this->initialUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $initialUri
     * @return static
     */
    public function setInitialUri($initialUri = null)
    {
        if (null !== $initialUri && !($initialUri instanceof FHIRUri)) {
            $initialUri = new FHIRUri($initialUri);
        }
        $this->_trackValueSet($this->initialUri, $initialUri);
        $this->initialUri = $initialUri;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment
     */
    public function getInitialAttachment()
    {
        return $this->initialAttachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment $initialAttachment
     * @return static
     */
    public function setInitialAttachment(FHIRAttachment $initialAttachment = null)
    {
        $this->_trackValueSet($this->initialAttachment, $initialAttachment);
        $this->initialAttachment = $initialAttachment;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding
     */
    public function getInitialCoding()
    {
        return $this->initialCoding;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding $initialCoding
     * @return static
     */
    public function setInitialCoding(FHIRCoding $initialCoding = null)
    {
        $this->_trackValueSet($this->initialCoding, $initialCoding);
        $this->initialCoding = $initialCoding;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    public function getInitialQuantity()
    {
        return $this->initialQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity $initialQuantity
     * @return static
     */
    public function setInitialQuantity(FHIRQuantity $initialQuantity = null)
    {
        $this->_trackValueSet($this->initialQuantity, $initialQuantity);
        $this->initialQuantity = $initialQuantity;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getInitialReference()
    {
        return $this->initialReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be defaulted when initially rendering the questionnaire
     * for user input.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $initialReference
     * @return static
     */
    public function setInitialReference(FHIRReference $initialReference = null)
    {
        $this->_trackValueSet($this->initialReference, $initialReference);
        $this->initialReference = $initialReference;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * Text, questions and other groups to be nested beneath a question or group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem $item
     * @return static
     */
    public function addItem(FHIRQuestionnaireItem $item = null)
    {
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem[] $item
     * @return static
     */
    public function setItem(array $item = [])
    {
        if ([] !== $this->item) {
            $this->_trackValuesRemoved(count($this->item));
            $this->item = [];
        }
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
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
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
        if (null !== ($v = $this->getOptions())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OPTIONS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getOption())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_OPTION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getInitialBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INITIAL_BOOLEAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInitialDecimal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INITIAL_DECIMAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInitialInteger())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INITIAL_INTEGER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInitialDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INITIAL_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInitialDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INITIAL_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInitialTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INITIAL_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInitialString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INITIAL_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInitialUri())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INITIAL_URI] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInitialAttachment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INITIAL_ATTACHMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInitialCoding())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INITIAL_CODING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInitialQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INITIAL_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInitialReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INITIAL_REFERENCE] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_OPTIONS])) {
            $v = $this->getOptions();
            foreach($validationRules[self::FIELD_OPTIONS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_OPTIONS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OPTIONS])) {
                        $errs[self::FIELD_OPTIONS] = [];
                    }
                    $errs[self::FIELD_OPTIONS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OPTION])) {
            $v = $this->getOption();
            foreach($validationRules[self::FIELD_OPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_OPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OPTION])) {
                        $errs[self::FIELD_OPTION] = [];
                    }
                    $errs[self::FIELD_OPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIAL_BOOLEAN])) {
            $v = $this->getInitialBoolean();
            foreach($validationRules[self::FIELD_INITIAL_BOOLEAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_INITIAL_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIAL_BOOLEAN])) {
                        $errs[self::FIELD_INITIAL_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_INITIAL_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIAL_DECIMAL])) {
            $v = $this->getInitialDecimal();
            foreach($validationRules[self::FIELD_INITIAL_DECIMAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_INITIAL_DECIMAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIAL_DECIMAL])) {
                        $errs[self::FIELD_INITIAL_DECIMAL] = [];
                    }
                    $errs[self::FIELD_INITIAL_DECIMAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIAL_INTEGER])) {
            $v = $this->getInitialInteger();
            foreach($validationRules[self::FIELD_INITIAL_INTEGER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_INITIAL_INTEGER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIAL_INTEGER])) {
                        $errs[self::FIELD_INITIAL_INTEGER] = [];
                    }
                    $errs[self::FIELD_INITIAL_INTEGER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIAL_DATE])) {
            $v = $this->getInitialDate();
            foreach($validationRules[self::FIELD_INITIAL_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_INITIAL_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIAL_DATE])) {
                        $errs[self::FIELD_INITIAL_DATE] = [];
                    }
                    $errs[self::FIELD_INITIAL_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIAL_DATE_TIME])) {
            $v = $this->getInitialDateTime();
            foreach($validationRules[self::FIELD_INITIAL_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_INITIAL_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIAL_DATE_TIME])) {
                        $errs[self::FIELD_INITIAL_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_INITIAL_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIAL_TIME])) {
            $v = $this->getInitialTime();
            foreach($validationRules[self::FIELD_INITIAL_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_INITIAL_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIAL_TIME])) {
                        $errs[self::FIELD_INITIAL_TIME] = [];
                    }
                    $errs[self::FIELD_INITIAL_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIAL_STRING])) {
            $v = $this->getInitialString();
            foreach($validationRules[self::FIELD_INITIAL_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_INITIAL_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIAL_STRING])) {
                        $errs[self::FIELD_INITIAL_STRING] = [];
                    }
                    $errs[self::FIELD_INITIAL_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIAL_URI])) {
            $v = $this->getInitialUri();
            foreach($validationRules[self::FIELD_INITIAL_URI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_INITIAL_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIAL_URI])) {
                        $errs[self::FIELD_INITIAL_URI] = [];
                    }
                    $errs[self::FIELD_INITIAL_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIAL_ATTACHMENT])) {
            $v = $this->getInitialAttachment();
            foreach($validationRules[self::FIELD_INITIAL_ATTACHMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_INITIAL_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIAL_ATTACHMENT])) {
                        $errs[self::FIELD_INITIAL_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_INITIAL_ATTACHMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIAL_CODING])) {
            $v = $this->getInitialCoding();
            foreach($validationRules[self::FIELD_INITIAL_CODING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_INITIAL_CODING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIAL_CODING])) {
                        $errs[self::FIELD_INITIAL_CODING] = [];
                    }
                    $errs[self::FIELD_INITIAL_CODING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIAL_QUANTITY])) {
            $v = $this->getInitialQuantity();
            foreach($validationRules[self::FIELD_INITIAL_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_INITIAL_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIAL_QUANTITY])) {
                        $errs[self::FIELD_INITIAL_QUANTITY] = [];
                    }
                    $errs[self::FIELD_INITIAL_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIAL_REFERENCE])) {
            $v = $this->getInitialReference();
            foreach($validationRules[self::FIELD_INITIAL_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_INITIAL_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIAL_REFERENCE])) {
                        $errs[self::FIELD_INITIAL_REFERENCE] = [];
                    }
                    $errs[self::FIELD_INITIAL_REFERENCE][$rule] = $err;
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
     * @param null|string|\DOMElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem
     */
    public static function xmlUnserialize($element = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            return null;
        }
        if (is_string($element)) {
            libxml_use_internal_errors(true);
            $dom = new \DOMDocument();
            $dom->loadXML($element, $libxmlOpts);
            if (false === $dom) {
                throw new \DomainException(sprintf('FHIRQuestionnaireItem::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRQuestionnaireItem::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRQuestionnaireItem(null);
        } elseif (!is_object($type) || !($type instanceof FHIRQuestionnaireItem)) {
            throw new \RuntimeException(sprintf(
                'FHIRQuestionnaireItem::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        if ('' === $type->_getFHIRXMLNamespace() && (null === $element->parentNode || $element->namespaceURI !== $element->parentNode->namespaceURI)) {
            $type->_setFHIRXMLNamespace($element->namespaceURI);
        }
        for($i = 0; $i < $element->childNodes->length; $i++) {
            $n = $element->childNodes->item($i);
            if (!($n instanceof \DOMElement)) {
                continue;
            }
            if (self::FIELD_LINK_ID === $n->nodeName) {
                $type->setLinkId(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_DEFINITION === $n->nodeName) {
                $type->setDefinition(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_CODE === $n->nodeName) {
                $type->addCode(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_PREFIX === $n->nodeName) {
                $type->setPrefix(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_TEXT === $n->nodeName) {
                $type->setText(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_TYPE === $n->nodeName) {
                $type->setType(FHIRQuestionnaireItemType::xmlUnserialize($n));
            } elseif (self::FIELD_ENABLE_WHEN === $n->nodeName) {
                $type->addEnableWhen(FHIRQuestionnaireEnableWhen::xmlUnserialize($n));
            } elseif (self::FIELD_REQUIRED === $n->nodeName) {
                $type->setRequired(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_REPEATS === $n->nodeName) {
                $type->setRepeats(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_READ_ONLY === $n->nodeName) {
                $type->setReadOnly(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_MAX_LENGTH === $n->nodeName) {
                $type->setMaxLength(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_OPTIONS === $n->nodeName) {
                $type->setOptions(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_OPTION === $n->nodeName) {
                $type->addOption(FHIRQuestionnaireOption::xmlUnserialize($n));
            } elseif (self::FIELD_INITIAL_BOOLEAN === $n->nodeName) {
                $type->setInitialBoolean(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_INITIAL_DECIMAL === $n->nodeName) {
                $type->setInitialDecimal(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_INITIAL_INTEGER === $n->nodeName) {
                $type->setInitialInteger(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_INITIAL_DATE === $n->nodeName) {
                $type->setInitialDate(FHIRDate::xmlUnserialize($n));
            } elseif (self::FIELD_INITIAL_DATE_TIME === $n->nodeName) {
                $type->setInitialDateTime(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_INITIAL_TIME === $n->nodeName) {
                $type->setInitialTime(FHIRTime::xmlUnserialize($n));
            } elseif (self::FIELD_INITIAL_STRING === $n->nodeName) {
                $type->setInitialString(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_INITIAL_URI === $n->nodeName) {
                $type->setInitialUri(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_INITIAL_ATTACHMENT === $n->nodeName) {
                $type->setInitialAttachment(FHIRAttachment::xmlUnserialize($n));
            } elseif (self::FIELD_INITIAL_CODING === $n->nodeName) {
                $type->setInitialCoding(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_INITIAL_QUANTITY === $n->nodeName) {
                $type->setInitialQuantity(FHIRQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_INITIAL_REFERENCE === $n->nodeName) {
                $type->setInitialReference(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_ITEM === $n->nodeName) {
                $type->addItem(FHIRQuestionnaireItem::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_LINK_ID);
        if (null !== $n) {
            $pt = $type->getLinkId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLinkId($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DEFINITION);
        if (null !== $n) {
            $pt = $type->getDefinition();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDefinition($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PREFIX);
        if (null !== $n) {
            $pt = $type->getPrefix();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPrefix($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_TEXT);
        if (null !== $n) {
            $pt = $type->getText();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setText($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_REQUIRED);
        if (null !== $n) {
            $pt = $type->getRequired();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setRequired($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_REPEATS);
        if (null !== $n) {
            $pt = $type->getRepeats();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setRepeats($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_READ_ONLY);
        if (null !== $n) {
            $pt = $type->getReadOnly();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setReadOnly($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_MAX_LENGTH);
        if (null !== $n) {
            $pt = $type->getMaxLength();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setMaxLength($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_INITIAL_BOOLEAN);
        if (null !== $n) {
            $pt = $type->getInitialBoolean();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setInitialBoolean($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_INITIAL_DECIMAL);
        if (null !== $n) {
            $pt = $type->getInitialDecimal();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setInitialDecimal($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_INITIAL_INTEGER);
        if (null !== $n) {
            $pt = $type->getInitialInteger();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setInitialInteger($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_INITIAL_DATE);
        if (null !== $n) {
            $pt = $type->getInitialDate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setInitialDate($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_INITIAL_DATE_TIME);
        if (null !== $n) {
            $pt = $type->getInitialDateTime();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setInitialDateTime($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_INITIAL_TIME);
        if (null !== $n) {
            $pt = $type->getInitialTime();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setInitialTime($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_INITIAL_STRING);
        if (null !== $n) {
            $pt = $type->getInitialString();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setInitialString($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_INITIAL_URI);
        if (null !== $n) {
            $pt = $type->getInitialUri();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setInitialUri($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ID);
        if (null !== $n) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setId($n->nodeValue);
            }
        }
        return $type;
    }

    /**
     * @param null|\DOMElement $element
     * @param null|int $libxmlOpts
     * @return \DOMElement
     */
    public function xmlSerialize(\DOMElement $element = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            $dom = new \DOMDocument();
            $dom->loadXML($this->_getFHIRXMLElementDefinition(), $libxmlOpts);
            $element = $dom->documentElement;
        } elseif (null === $element->namespaceURI && '' !== ($xmlns = $this->_getFHIRXMLNamespace())) {
            $element->setAttribute('xmlns', $xmlns);
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getLinkId())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LINK_ID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDefinition())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DEFINITION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CODE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getPrefix())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PREFIX);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getText())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TEXT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getEnableWhen())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ENABLE_WHEN);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getRequired())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REQUIRED);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRepeats())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REPEATS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getReadOnly())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_READ_ONLY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getMaxLength())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MAX_LENGTH);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOptions())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_OPTIONS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getOption())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_OPTION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getInitialBoolean())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INITIAL_BOOLEAN);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getInitialDecimal())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INITIAL_DECIMAL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getInitialInteger())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INITIAL_INTEGER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getInitialDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INITIAL_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getInitialDateTime())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INITIAL_DATE_TIME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getInitialTime())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INITIAL_TIME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getInitialString())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INITIAL_STRING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getInitialUri())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INITIAL_URI);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getInitialAttachment())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INITIAL_ATTACHMENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getInitialCoding())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INITIAL_CODING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getInitialQuantity())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INITIAL_QUANTITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getInitialReference())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INITIAL_REFERENCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getItem())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ITEM);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        return $element;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getLinkId())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_LINK_ID] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_LINK_ID_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getDefinition())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DEFINITION] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRUri::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_DEFINITION_EXT] = $ext;
            }
        }
        if ([] !== ($vs = $this->getCode())) {
            $a[self::FIELD_CODE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CODE][] = $v;
            }
        }
        if (null !== ($v = $this->getPrefix())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PREFIX] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_PREFIX_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getText())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_TEXT] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_TEXT_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getType())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_TYPE] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRQuestionnaireItemType::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_TYPE_EXT] = $ext;
            }
        }
        if ([] !== ($vs = $this->getEnableWhen())) {
            $a[self::FIELD_ENABLE_WHEN] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ENABLE_WHEN][] = $v;
            }
        }
        if (null !== ($v = $this->getRequired())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_REQUIRED] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRBoolean::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_REQUIRED_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getRepeats())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_REPEATS] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRBoolean::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_REPEATS_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getReadOnly())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_READ_ONLY] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRBoolean::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_READ_ONLY_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getMaxLength())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MAX_LENGTH] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRInteger::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_MAX_LENGTH_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getOptions())) {
            $a[self::FIELD_OPTIONS] = $v;
        }
        if ([] !== ($vs = $this->getOption())) {
            $a[self::FIELD_OPTION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_OPTION][] = $v;
            }
        }
        if (null !== ($v = $this->getInitialBoolean())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_INITIAL_BOOLEAN] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRBoolean::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_INITIAL_BOOLEAN_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getInitialDecimal())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_INITIAL_DECIMAL] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRDecimal::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_INITIAL_DECIMAL_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getInitialInteger())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_INITIAL_INTEGER] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRInteger::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_INITIAL_INTEGER_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getInitialDate())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_INITIAL_DATE] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRDate::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_INITIAL_DATE_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getInitialDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_INITIAL_DATE_TIME] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRDateTime::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_INITIAL_DATE_TIME_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getInitialTime())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_INITIAL_TIME] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRTime::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_INITIAL_TIME_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getInitialString())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_INITIAL_STRING] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_INITIAL_STRING_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getInitialUri())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_INITIAL_URI] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRUri::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_INITIAL_URI_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getInitialAttachment())) {
            $a[self::FIELD_INITIAL_ATTACHMENT] = $v;
        }
        if (null !== ($v = $this->getInitialCoding())) {
            $a[self::FIELD_INITIAL_CODING] = $v;
        }
        if (null !== ($v = $this->getInitialQuantity())) {
            $a[self::FIELD_INITIAL_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getInitialReference())) {
            $a[self::FIELD_INITIAL_REFERENCE] = $v;
        }
        if ([] !== ($vs = $this->getItem())) {
            $a[self::FIELD_ITEM] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ITEM][] = $v;
            }
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