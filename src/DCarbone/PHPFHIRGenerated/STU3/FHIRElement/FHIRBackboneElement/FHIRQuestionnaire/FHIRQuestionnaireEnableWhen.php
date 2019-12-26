<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A structured set of questions intended to guide the collection of answers from
 * end-users. Questionnaires provide detailed control over order, presentation,
 * phraseology and grouping to allow coherent, consistent data collection.
 *
 * Class FHIRQuestionnaireEnableWhen
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire
 */
class FHIRQuestionnaireEnableWhen extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ENABLE_WHEN;
    const FIELD_ANSWER_ATTACHMENT = 'answerAttachment';
    const FIELD_ANSWER_BOOLEAN = 'answerBoolean';
    const FIELD_ANSWER_BOOLEAN_EXT = '_answerBoolean';
    const FIELD_ANSWER_CODING = 'answerCoding';
    const FIELD_ANSWER_DATE = 'answerDate';
    const FIELD_ANSWER_DATE_EXT = '_answerDate';
    const FIELD_ANSWER_DATE_TIME = 'answerDateTime';
    const FIELD_ANSWER_DATE_TIME_EXT = '_answerDateTime';
    const FIELD_ANSWER_DECIMAL = 'answerDecimal';
    const FIELD_ANSWER_DECIMAL_EXT = '_answerDecimal';
    const FIELD_ANSWER_INTEGER = 'answerInteger';
    const FIELD_ANSWER_INTEGER_EXT = '_answerInteger';
    const FIELD_ANSWER_QUANTITY = 'answerQuantity';
    const FIELD_ANSWER_REFERENCE = 'answerReference';
    const FIELD_ANSWER_STRING = 'answerString';
    const FIELD_ANSWER_STRING_EXT = '_answerString';
    const FIELD_ANSWER_TIME = 'answerTime';
    const FIELD_ANSWER_TIME_EXT = '_answerTime';
    const FIELD_ANSWER_URI = 'answerUri';
    const FIELD_ANSWER_URI_EXT = '_answerUri';
    const FIELD_HAS_ANSWER = 'hasAnswer';
    const FIELD_HAS_ANSWER_EXT = '_hasAnswer';
    const FIELD_QUESTION = 'question';
    const FIELD_QUESTION_EXT = '_question';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment
     */
    protected $answerAttachment = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $answerBoolean = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding
     */
    protected $answerCoding = null;

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    protected $answerDate = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected $answerDateTime = null;

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    protected $answerDecimal = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected $answerInteger = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    protected $answerQuantity = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $answerReference = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $answerString = null;

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    protected $answerTime = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected $answerUri = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication that this item should be enabled only if the specified question is
     * answered (hasAnswer=true) or not answered (hasAnswer=false).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $hasAnswer = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The linkId for the question whose answer (or lack of answer) governs whether
     * this item is enabled.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $question = null;

    /**
     * Validation map for fields in type Questionnaire.EnableWhen
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRQuestionnaireEnableWhen Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireEnableWhen::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ANSWER_ATTACHMENT])) {
            if ($data[self::FIELD_ANSWER_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setAnswerAttachment($data[self::FIELD_ANSWER_ATTACHMENT]);
            } else {
                $this->setAnswerAttachment(new FHIRAttachment($data[self::FIELD_ANSWER_ATTACHMENT]));
            }
        }
        if (isset($data[self::FIELD_ANSWER_BOOLEAN]) || isset($data[self::FIELD_ANSWER_BOOLEAN_EXT])) {
            if (isset($data[self::FIELD_ANSWER_BOOLEAN])) {
                $value = $data[self::FIELD_ANSWER_BOOLEAN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ANSWER_BOOLEAN_EXT]) && is_array($data[self::FIELD_ANSWER_BOOLEAN_EXT])) {
                $ext = $data[self::FIELD_ANSWER_BOOLEAN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setAnswerBoolean($value);
                } else if (is_array($value)) {
                    $this->setAnswerBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setAnswerBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAnswerBoolean(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_ANSWER_CODING])) {
            if ($data[self::FIELD_ANSWER_CODING] instanceof FHIRCoding) {
                $this->setAnswerCoding($data[self::FIELD_ANSWER_CODING]);
            } else {
                $this->setAnswerCoding(new FHIRCoding($data[self::FIELD_ANSWER_CODING]));
            }
        }
        if (isset($data[self::FIELD_ANSWER_DATE]) || isset($data[self::FIELD_ANSWER_DATE_EXT])) {
            if (isset($data[self::FIELD_ANSWER_DATE])) {
                $value = $data[self::FIELD_ANSWER_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ANSWER_DATE_EXT]) && is_array($data[self::FIELD_ANSWER_DATE_EXT])) {
                $ext = $data[self::FIELD_ANSWER_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setAnswerDate($value);
                } else if (is_array($value)) {
                    $this->setAnswerDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setAnswerDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAnswerDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_ANSWER_DATE_TIME]) || isset($data[self::FIELD_ANSWER_DATE_TIME_EXT])) {
            if (isset($data[self::FIELD_ANSWER_DATE_TIME])) {
                $value = $data[self::FIELD_ANSWER_DATE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ANSWER_DATE_TIME_EXT]) && is_array($data[self::FIELD_ANSWER_DATE_TIME_EXT])) {
                $ext = $data[self::FIELD_ANSWER_DATE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setAnswerDateTime($value);
                } else if (is_array($value)) {
                    $this->setAnswerDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setAnswerDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAnswerDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_ANSWER_DECIMAL]) || isset($data[self::FIELD_ANSWER_DECIMAL_EXT])) {
            if (isset($data[self::FIELD_ANSWER_DECIMAL])) {
                $value = $data[self::FIELD_ANSWER_DECIMAL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ANSWER_DECIMAL_EXT]) && is_array($data[self::FIELD_ANSWER_DECIMAL_EXT])) {
                $ext = $data[self::FIELD_ANSWER_DECIMAL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setAnswerDecimal($value);
                } else if (is_array($value)) {
                    $this->setAnswerDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setAnswerDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAnswerDecimal(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_ANSWER_INTEGER]) || isset($data[self::FIELD_ANSWER_INTEGER_EXT])) {
            if (isset($data[self::FIELD_ANSWER_INTEGER])) {
                $value = $data[self::FIELD_ANSWER_INTEGER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ANSWER_INTEGER_EXT]) && is_array($data[self::FIELD_ANSWER_INTEGER_EXT])) {
                $ext = $data[self::FIELD_ANSWER_INTEGER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setAnswerInteger($value);
                } else if (is_array($value)) {
                    $this->setAnswerInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setAnswerInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAnswerInteger(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_ANSWER_QUANTITY])) {
            if ($data[self::FIELD_ANSWER_QUANTITY] instanceof FHIRQuantity) {
                $this->setAnswerQuantity($data[self::FIELD_ANSWER_QUANTITY]);
            } else {
                $this->setAnswerQuantity(new FHIRQuantity($data[self::FIELD_ANSWER_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_ANSWER_REFERENCE])) {
            if ($data[self::FIELD_ANSWER_REFERENCE] instanceof FHIRReference) {
                $this->setAnswerReference($data[self::FIELD_ANSWER_REFERENCE]);
            } else {
                $this->setAnswerReference(new FHIRReference($data[self::FIELD_ANSWER_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_ANSWER_STRING]) || isset($data[self::FIELD_ANSWER_STRING_EXT])) {
            if (isset($data[self::FIELD_ANSWER_STRING])) {
                $value = $data[self::FIELD_ANSWER_STRING];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ANSWER_STRING_EXT]) && is_array($data[self::FIELD_ANSWER_STRING_EXT])) {
                $ext = $data[self::FIELD_ANSWER_STRING_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setAnswerString($value);
                } else if (is_array($value)) {
                    $this->setAnswerString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setAnswerString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAnswerString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_ANSWER_TIME]) || isset($data[self::FIELD_ANSWER_TIME_EXT])) {
            if (isset($data[self::FIELD_ANSWER_TIME])) {
                $value = $data[self::FIELD_ANSWER_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ANSWER_TIME_EXT]) && is_array($data[self::FIELD_ANSWER_TIME_EXT])) {
                $ext = $data[self::FIELD_ANSWER_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $this->setAnswerTime($value);
                } else if (is_array($value)) {
                    $this->setAnswerTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $this->setAnswerTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAnswerTime(new FHIRTime($ext));
            }
        }
        if (isset($data[self::FIELD_ANSWER_URI]) || isset($data[self::FIELD_ANSWER_URI_EXT])) {
            if (isset($data[self::FIELD_ANSWER_URI])) {
                $value = $data[self::FIELD_ANSWER_URI];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ANSWER_URI_EXT]) && is_array($data[self::FIELD_ANSWER_URI_EXT])) {
                $ext = $data[self::FIELD_ANSWER_URI_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setAnswerUri($value);
                } else if (is_array($value)) {
                    $this->setAnswerUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setAnswerUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAnswerUri(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_HAS_ANSWER]) || isset($data[self::FIELD_HAS_ANSWER_EXT])) {
            if (isset($data[self::FIELD_HAS_ANSWER])) {
                $value = $data[self::FIELD_HAS_ANSWER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_HAS_ANSWER_EXT]) && is_array($data[self::FIELD_HAS_ANSWER_EXT])) {
                $ext = $data[self::FIELD_HAS_ANSWER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setHasAnswer($value);
                } else if (is_array($value)) {
                    $this->setHasAnswer(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setHasAnswer(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setHasAnswer(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_QUESTION]) || isset($data[self::FIELD_QUESTION_EXT])) {
            if (isset($data[self::FIELD_QUESTION])) {
                $value = $data[self::FIELD_QUESTION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_QUESTION_EXT]) && is_array($data[self::FIELD_QUESTION_EXT])) {
                $ext = $data[self::FIELD_QUESTION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setQuestion($value);
                } else if (is_array($value)) {
                    $this->setQuestion(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setQuestion(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setQuestion(new FHIRString($ext));
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
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<QuestionnaireEnableWhen{$xmlns}></QuestionnaireEnableWhen>";
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment
     */
    public function getAnswerAttachment()
    {
        return $this->answerAttachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment $answerAttachment
     * @return static
     */
    public function setAnswerAttachment(FHIRAttachment $answerAttachment = null)
    {
        $this->answerAttachment = $answerAttachment;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getAnswerBoolean()
    {
        return $this->answerBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $answerBoolean
     * @return static
     */
    public function setAnswerBoolean($answerBoolean = null)
    {
        if (null === $answerBoolean) {
            $this->answerBoolean = null;
            return $this;
        }
        if ($answerBoolean instanceof FHIRBoolean) {
            $this->answerBoolean = $answerBoolean;
            return $this;
        }
        $this->answerBoolean = new FHIRBoolean($answerBoolean);
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding
     */
    public function getAnswerCoding()
    {
        return $this->answerCoding;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding $answerCoding
     * @return static
     */
    public function setAnswerCoding(FHIRCoding $answerCoding = null)
    {
        $this->answerCoding = $answerCoding;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    public function getAnswerDate()
    {
        return $this->answerDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate $answerDate
     * @return static
     */
    public function setAnswerDate($answerDate = null)
    {
        if (null === $answerDate) {
            $this->answerDate = null;
            return $this;
        }
        if ($answerDate instanceof FHIRDate) {
            $this->answerDate = $answerDate;
            return $this;
        }
        $this->answerDate = new FHIRDate($answerDate);
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
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    public function getAnswerDateTime()
    {
        return $this->answerDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $answerDateTime
     * @return static
     */
    public function setAnswerDateTime($answerDateTime = null)
    {
        if (null === $answerDateTime) {
            $this->answerDateTime = null;
            return $this;
        }
        if ($answerDateTime instanceof FHIRDateTime) {
            $this->answerDateTime = $answerDateTime;
            return $this;
        }
        $this->answerDateTime = new FHIRDateTime($answerDateTime);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    public function getAnswerDecimal()
    {
        return $this->answerDecimal;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal $answerDecimal
     * @return static
     */
    public function setAnswerDecimal($answerDecimal = null)
    {
        if (null === $answerDecimal) {
            $this->answerDecimal = null;
            return $this;
        }
        if ($answerDecimal instanceof FHIRDecimal) {
            $this->answerDecimal = $answerDecimal;
            return $this;
        }
        $this->answerDecimal = new FHIRDecimal($answerDecimal);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getAnswerInteger()
    {
        return $this->answerInteger;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $answerInteger
     * @return static
     */
    public function setAnswerInteger($answerInteger = null)
    {
        if (null === $answerInteger) {
            $this->answerInteger = null;
            return $this;
        }
        if ($answerInteger instanceof FHIRInteger) {
            $this->answerInteger = $answerInteger;
            return $this;
        }
        $this->answerInteger = new FHIRInteger($answerInteger);
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    public function getAnswerQuantity()
    {
        return $this->answerQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity $answerQuantity
     * @return static
     */
    public function setAnswerQuantity(FHIRQuantity $answerQuantity = null)
    {
        $this->answerQuantity = $answerQuantity;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getAnswerReference()
    {
        return $this->answerReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $answerReference
     * @return static
     */
    public function setAnswerReference(FHIRReference $answerReference = null)
    {
        $this->answerReference = $answerReference;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getAnswerString()
    {
        return $this->answerString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $answerString
     * @return static
     */
    public function setAnswerString($answerString = null)
    {
        if (null === $answerString) {
            $this->answerString = null;
            return $this;
        }
        if ($answerString instanceof FHIRString) {
            $this->answerString = $answerString;
            return $this;
        }
        $this->answerString = new FHIRString($answerString);
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    public function getAnswerTime()
    {
        return $this->answerTime;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime $answerTime
     * @return static
     */
    public function setAnswerTime($answerTime = null)
    {
        if (null === $answerTime) {
            $this->answerTime = null;
            return $this;
        }
        if ($answerTime instanceof FHIRTime) {
            $this->answerTime = $answerTime;
            return $this;
        }
        $this->answerTime = new FHIRTime($answerTime);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getAnswerUri()
    {
        return $this->answerUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $answerUri
     * @return static
     */
    public function setAnswerUri($answerUri = null)
    {
        if (null === $answerUri) {
            $this->answerUri = null;
            return $this;
        }
        if ($answerUri instanceof FHIRUri) {
            $this->answerUri = $answerUri;
            return $this;
        }
        $this->answerUri = new FHIRUri($answerUri);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication that this item should be enabled only if the specified question is
     * answered (hasAnswer=true) or not answered (hasAnswer=false).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getHasAnswer()
    {
        return $this->hasAnswer;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication that this item should be enabled only if the specified question is
     * answered (hasAnswer=true) or not answered (hasAnswer=false).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $hasAnswer
     * @return static
     */
    public function setHasAnswer($hasAnswer = null)
    {
        if (null === $hasAnswer) {
            $this->hasAnswer = null;
            return $this;
        }
        if ($hasAnswer instanceof FHIRBoolean) {
            $this->hasAnswer = $hasAnswer;
            return $this;
        }
        $this->hasAnswer = new FHIRBoolean($hasAnswer);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The linkId for the question whose answer (or lack of answer) governs whether
     * this item is enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The linkId for the question whose answer (or lack of answer) governs whether
     * this item is enabled.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $question
     * @return static
     */
    public function setQuestion($question = null)
    {
        if (null === $question) {
            $this->question = null;
            return $this;
        }
        if ($question instanceof FHIRString) {
            $this->question = $question;
            return $this;
        }
        $this->question = new FHIRString($question);
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
        if (null !== ($v = $this->getAnswerAttachment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ANSWER_ATTACHMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAnswerBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ANSWER_BOOLEAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAnswerCoding())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ANSWER_CODING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAnswerDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ANSWER_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAnswerDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ANSWER_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAnswerDecimal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ANSWER_DECIMAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAnswerInteger())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ANSWER_INTEGER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAnswerQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ANSWER_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAnswerReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ANSWER_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAnswerString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ANSWER_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAnswerTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ANSWER_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAnswerUri())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ANSWER_URI] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getHasAnswer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_HAS_ANSWER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getQuestion())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUESTION] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER_ATTACHMENT])) {
            $v = $this->getAnswerAttachment();
            foreach($validationRules[self::FIELD_ANSWER_ATTACHMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ENABLE_WHEN, self::FIELD_ANSWER_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_ATTACHMENT])) {
                        $errs[self::FIELD_ANSWER_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_ANSWER_ATTACHMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER_BOOLEAN])) {
            $v = $this->getAnswerBoolean();
            foreach($validationRules[self::FIELD_ANSWER_BOOLEAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ENABLE_WHEN, self::FIELD_ANSWER_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_BOOLEAN])) {
                        $errs[self::FIELD_ANSWER_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_ANSWER_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER_CODING])) {
            $v = $this->getAnswerCoding();
            foreach($validationRules[self::FIELD_ANSWER_CODING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ENABLE_WHEN, self::FIELD_ANSWER_CODING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_CODING])) {
                        $errs[self::FIELD_ANSWER_CODING] = [];
                    }
                    $errs[self::FIELD_ANSWER_CODING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER_DATE])) {
            $v = $this->getAnswerDate();
            foreach($validationRules[self::FIELD_ANSWER_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ENABLE_WHEN, self::FIELD_ANSWER_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_DATE])) {
                        $errs[self::FIELD_ANSWER_DATE] = [];
                    }
                    $errs[self::FIELD_ANSWER_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER_DATE_TIME])) {
            $v = $this->getAnswerDateTime();
            foreach($validationRules[self::FIELD_ANSWER_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ENABLE_WHEN, self::FIELD_ANSWER_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_DATE_TIME])) {
                        $errs[self::FIELD_ANSWER_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_ANSWER_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER_DECIMAL])) {
            $v = $this->getAnswerDecimal();
            foreach($validationRules[self::FIELD_ANSWER_DECIMAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ENABLE_WHEN, self::FIELD_ANSWER_DECIMAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_DECIMAL])) {
                        $errs[self::FIELD_ANSWER_DECIMAL] = [];
                    }
                    $errs[self::FIELD_ANSWER_DECIMAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER_INTEGER])) {
            $v = $this->getAnswerInteger();
            foreach($validationRules[self::FIELD_ANSWER_INTEGER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ENABLE_WHEN, self::FIELD_ANSWER_INTEGER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_INTEGER])) {
                        $errs[self::FIELD_ANSWER_INTEGER] = [];
                    }
                    $errs[self::FIELD_ANSWER_INTEGER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER_QUANTITY])) {
            $v = $this->getAnswerQuantity();
            foreach($validationRules[self::FIELD_ANSWER_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ENABLE_WHEN, self::FIELD_ANSWER_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_QUANTITY])) {
                        $errs[self::FIELD_ANSWER_QUANTITY] = [];
                    }
                    $errs[self::FIELD_ANSWER_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER_REFERENCE])) {
            $v = $this->getAnswerReference();
            foreach($validationRules[self::FIELD_ANSWER_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ENABLE_WHEN, self::FIELD_ANSWER_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_REFERENCE])) {
                        $errs[self::FIELD_ANSWER_REFERENCE] = [];
                    }
                    $errs[self::FIELD_ANSWER_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER_STRING])) {
            $v = $this->getAnswerString();
            foreach($validationRules[self::FIELD_ANSWER_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ENABLE_WHEN, self::FIELD_ANSWER_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_STRING])) {
                        $errs[self::FIELD_ANSWER_STRING] = [];
                    }
                    $errs[self::FIELD_ANSWER_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER_TIME])) {
            $v = $this->getAnswerTime();
            foreach($validationRules[self::FIELD_ANSWER_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ENABLE_WHEN, self::FIELD_ANSWER_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_TIME])) {
                        $errs[self::FIELD_ANSWER_TIME] = [];
                    }
                    $errs[self::FIELD_ANSWER_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER_URI])) {
            $v = $this->getAnswerUri();
            foreach($validationRules[self::FIELD_ANSWER_URI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ENABLE_WHEN, self::FIELD_ANSWER_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_URI])) {
                        $errs[self::FIELD_ANSWER_URI] = [];
                    }
                    $errs[self::FIELD_ANSWER_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HAS_ANSWER])) {
            $v = $this->getHasAnswer();
            foreach($validationRules[self::FIELD_HAS_ANSWER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ENABLE_WHEN, self::FIELD_HAS_ANSWER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HAS_ANSWER])) {
                        $errs[self::FIELD_HAS_ANSWER] = [];
                    }
                    $errs[self::FIELD_HAS_ANSWER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUESTION])) {
            $v = $this->getQuestion();
            foreach($validationRules[self::FIELD_QUESTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ENABLE_WHEN, self::FIELD_QUESTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUESTION])) {
                        $errs[self::FIELD_QUESTION] = [];
                    }
                    $errs[self::FIELD_QUESTION][$rule] = $err;
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen
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
                throw new \DomainException(sprintf('FHIRQuestionnaireEnableWhen::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRQuestionnaireEnableWhen::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRQuestionnaireEnableWhen;
        } elseif (!is_object($type) || !($type instanceof FHIRQuestionnaireEnableWhen)) {
            throw new \RuntimeException(sprintf(
                'FHIRQuestionnaireEnableWhen::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen or null, %s seen.',
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
        if (isset($children->answerAttachment)) {
            $type->setAnswerAttachment(FHIRAttachment::xmlUnserialize($children->answerAttachment));
        }
        if (isset($children->answerBoolean)) {
            $type->setAnswerBoolean(FHIRBoolean::xmlUnserialize($children->answerBoolean));
        }
        if (isset($attributes->answerBoolean)) {
            $pt = $type->getAnswerBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->answerBoolean);
            } else {
                $type->setAnswerBoolean((string)$attributes->answerBoolean);
            }
        }
        if (isset($children->answerCoding)) {
            $type->setAnswerCoding(FHIRCoding::xmlUnserialize($children->answerCoding));
        }
        if (isset($children->answerDate)) {
            $type->setAnswerDate(FHIRDate::xmlUnserialize($children->answerDate));
        }
        if (isset($attributes->answerDate)) {
            $pt = $type->getAnswerDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->answerDate);
            } else {
                $type->setAnswerDate((string)$attributes->answerDate);
            }
        }
        if (isset($children->answerDateTime)) {
            $type->setAnswerDateTime(FHIRDateTime::xmlUnserialize($children->answerDateTime));
        }
        if (isset($attributes->answerDateTime)) {
            $pt = $type->getAnswerDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->answerDateTime);
            } else {
                $type->setAnswerDateTime((string)$attributes->answerDateTime);
            }
        }
        if (isset($children->answerDecimal)) {
            $type->setAnswerDecimal(FHIRDecimal::xmlUnserialize($children->answerDecimal));
        }
        if (isset($attributes->answerDecimal)) {
            $pt = $type->getAnswerDecimal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->answerDecimal);
            } else {
                $type->setAnswerDecimal((string)$attributes->answerDecimal);
            }
        }
        if (isset($children->answerInteger)) {
            $type->setAnswerInteger(FHIRInteger::xmlUnserialize($children->answerInteger));
        }
        if (isset($attributes->answerInteger)) {
            $pt = $type->getAnswerInteger();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->answerInteger);
            } else {
                $type->setAnswerInteger((string)$attributes->answerInteger);
            }
        }
        if (isset($children->answerQuantity)) {
            $type->setAnswerQuantity(FHIRQuantity::xmlUnserialize($children->answerQuantity));
        }
        if (isset($children->answerReference)) {
            $type->setAnswerReference(FHIRReference::xmlUnserialize($children->answerReference));
        }
        if (isset($children->answerString)) {
            $type->setAnswerString(FHIRString::xmlUnserialize($children->answerString));
        }
        if (isset($attributes->answerString)) {
            $pt = $type->getAnswerString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->answerString);
            } else {
                $type->setAnswerString((string)$attributes->answerString);
            }
        }
        if (isset($children->answerTime)) {
            $type->setAnswerTime(FHIRTime::xmlUnserialize($children->answerTime));
        }
        if (isset($attributes->answerTime)) {
            $pt = $type->getAnswerTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->answerTime);
            } else {
                $type->setAnswerTime((string)$attributes->answerTime);
            }
        }
        if (isset($children->answerUri)) {
            $type->setAnswerUri(FHIRUri::xmlUnserialize($children->answerUri));
        }
        if (isset($attributes->answerUri)) {
            $pt = $type->getAnswerUri();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->answerUri);
            } else {
                $type->setAnswerUri((string)$attributes->answerUri);
            }
        }
        if (isset($children->hasAnswer)) {
            $type->setHasAnswer(FHIRBoolean::xmlUnserialize($children->hasAnswer));
        }
        if (isset($attributes->hasAnswer)) {
            $pt = $type->getHasAnswer();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->hasAnswer);
            } else {
                $type->setHasAnswer((string)$attributes->hasAnswer);
            }
        }
        if (isset($children->question)) {
            $type->setQuestion(FHIRString::xmlUnserialize($children->question));
        }
        if (isset($attributes->question)) {
            $pt = $type->getQuestion();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->question);
            } else {
                $type->setQuestion((string)$attributes->question);
            }
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
        if (null !== ($v = $this->getAnswerAttachment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER_ATTACHMENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAnswerBoolean())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER_BOOLEAN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAnswerCoding())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER_CODING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAnswerDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAnswerDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAnswerDecimal())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER_DECIMAL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAnswerInteger())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER_INTEGER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAnswerQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAnswerReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAnswerString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER_STRING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAnswerTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAnswerUri())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER_URI, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getHasAnswer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_HAS_ANSWER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getQuestion())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_QUESTION, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAnswerAttachment())) {
            $a[self::FIELD_ANSWER_ATTACHMENT] = $v;
        }
        if (null !== ($v = $this->getAnswerBoolean())) {
            $a[self::FIELD_ANSWER_BOOLEAN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_ANSWER_BOOLEAN_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getAnswerCoding())) {
            $a[self::FIELD_ANSWER_CODING] = $v;
        }
        if (null !== ($v = $this->getAnswerDate())) {
            $a[self::FIELD_ANSWER_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDate::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDate::FIELD_VALUE]);
                $a[self::FIELD_ANSWER_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getAnswerDateTime())) {
            $a[self::FIELD_ANSWER_DATE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_ANSWER_DATE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getAnswerDecimal())) {
            $a[self::FIELD_ANSWER_DECIMAL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_ANSWER_DECIMAL_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getAnswerInteger())) {
            $a[self::FIELD_ANSWER_INTEGER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_ANSWER_INTEGER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getAnswerQuantity())) {
            $a[self::FIELD_ANSWER_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getAnswerReference())) {
            $a[self::FIELD_ANSWER_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getAnswerString())) {
            $a[self::FIELD_ANSWER_STRING] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_ANSWER_STRING_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getAnswerTime())) {
            $a[self::FIELD_ANSWER_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRTime::FIELD_VALUE]);
                $a[self::FIELD_ANSWER_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getAnswerUri())) {
            $a[self::FIELD_ANSWER_URI] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_ANSWER_URI_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getHasAnswer())) {
            $a[self::FIELD_HAS_ANSWER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_HAS_ANSWER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getQuestion())) {
            $a[self::FIELD_QUESTION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_QUESTION_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
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