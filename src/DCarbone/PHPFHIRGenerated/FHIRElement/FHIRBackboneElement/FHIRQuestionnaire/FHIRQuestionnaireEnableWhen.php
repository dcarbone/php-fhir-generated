<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 4th, 2019 21:57+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireItemOperator;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTime;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * A structured set of questions intended to guide the collection of answers from
 * end-users. Questionnaires provide detailed control over order, presentation,
 * phraseology and grouping to allow coherent, consistent data collection.
 *
 * Class FHIRQuestionnaireEnableWhen
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire
 */
class FHIRQuestionnaireEnableWhen extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ENABLE_WHEN;

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
    const FIELD_OPERATOR = 'operator';
    const FIELD_QUESTION = 'question';
    const FIELD_QUESTION_EXT = '_question';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $answerBoolean = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    private $answerCoding = null;

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    private $answerDate = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $answerDateTime = null;

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $answerDecimal = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    private $answerInteger = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    private $answerQuantity = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $answerReference = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $answerString = null;

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    private $answerTime = null;

    /**
     * The criteria by which a question is enabled.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies the criteria by which the question is enabled.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireItemOperator
     */
    private $operator = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The linkId for the question whose answer (or lack of answer) governs whether
     * this item is enabled.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $question = null;

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
        if (isset($data[self::FIELD_ANSWER_BOOLEAN])) {
            $ext = (isset($data[self::FIELD_ANSWER_BOOLEAN_EXT]) && is_array($data[self::FIELD_ANSWER_BOOLEAN_EXT]))
                ? $data[self::FIELD_ANSWER_BOOLEAN_EXT]
                : null;
            if ($data[self::FIELD_ANSWER_BOOLEAN] instanceof FHIRBoolean) {
                $this->setAnswerBoolean($data[self::FIELD_ANSWER_BOOLEAN]);
            } elseif ($ext && is_scalar($data[self::FIELD_ANSWER_BOOLEAN])) {
                $this->setAnswerBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_ANSWER_BOOLEAN]] + $ext));
            } else {
                $this->setAnswerBoolean(new FHIRBoolean($data[self::FIELD_ANSWER_BOOLEAN]));
            }
        }
        if (isset($data[self::FIELD_ANSWER_CODING])) {
            if ($data[self::FIELD_ANSWER_CODING] instanceof FHIRCoding) {
                $this->setAnswerCoding($data[self::FIELD_ANSWER_CODING]);
            } else {
                $this->setAnswerCoding(new FHIRCoding($data[self::FIELD_ANSWER_CODING]));
            }
        }
        if (isset($data[self::FIELD_ANSWER_DATE])) {
            $ext = (isset($data[self::FIELD_ANSWER_DATE_EXT]) && is_array($data[self::FIELD_ANSWER_DATE_EXT]))
                ? $data[self::FIELD_ANSWER_DATE_EXT]
                : null;
            if ($data[self::FIELD_ANSWER_DATE] instanceof FHIRDate) {
                $this->setAnswerDate($data[self::FIELD_ANSWER_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_ANSWER_DATE])) {
                $this->setAnswerDate(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_ANSWER_DATE]] + $ext));
            } else {
                $this->setAnswerDate(new FHIRDate($data[self::FIELD_ANSWER_DATE]));
            }
        }
        if (isset($data[self::FIELD_ANSWER_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_ANSWER_DATE_TIME_EXT]) && is_array($data[self::FIELD_ANSWER_DATE_TIME_EXT]))
                ? $data[self::FIELD_ANSWER_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_ANSWER_DATE_TIME] instanceof FHIRDateTime) {
                $this->setAnswerDateTime($data[self::FIELD_ANSWER_DATE_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_ANSWER_DATE_TIME])) {
                $this->setAnswerDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_ANSWER_DATE_TIME]] + $ext));
            } else {
                $this->setAnswerDateTime(new FHIRDateTime($data[self::FIELD_ANSWER_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_ANSWER_DECIMAL])) {
            $ext = (isset($data[self::FIELD_ANSWER_DECIMAL_EXT]) && is_array($data[self::FIELD_ANSWER_DECIMAL_EXT]))
                ? $data[self::FIELD_ANSWER_DECIMAL_EXT]
                : null;
            if ($data[self::FIELD_ANSWER_DECIMAL] instanceof FHIRDecimal) {
                $this->setAnswerDecimal($data[self::FIELD_ANSWER_DECIMAL]);
            } elseif ($ext && is_scalar($data[self::FIELD_ANSWER_DECIMAL])) {
                $this->setAnswerDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_ANSWER_DECIMAL]] + $ext));
            } else {
                $this->setAnswerDecimal(new FHIRDecimal($data[self::FIELD_ANSWER_DECIMAL]));
            }
        }
        if (isset($data[self::FIELD_ANSWER_INTEGER])) {
            $ext = (isset($data[self::FIELD_ANSWER_INTEGER_EXT]) && is_array($data[self::FIELD_ANSWER_INTEGER_EXT]))
                ? $data[self::FIELD_ANSWER_INTEGER_EXT]
                : null;
            if ($data[self::FIELD_ANSWER_INTEGER] instanceof FHIRInteger) {
                $this->setAnswerInteger($data[self::FIELD_ANSWER_INTEGER]);
            } elseif ($ext && is_scalar($data[self::FIELD_ANSWER_INTEGER])) {
                $this->setAnswerInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_ANSWER_INTEGER]] + $ext));
            } else {
                $this->setAnswerInteger(new FHIRInteger($data[self::FIELD_ANSWER_INTEGER]));
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
        if (isset($data[self::FIELD_ANSWER_STRING])) {
            $ext = (isset($data[self::FIELD_ANSWER_STRING_EXT]) && is_array($data[self::FIELD_ANSWER_STRING_EXT]))
                ? $data[self::FIELD_ANSWER_STRING_EXT]
                : null;
            if ($data[self::FIELD_ANSWER_STRING] instanceof FHIRString) {
                $this->setAnswerString($data[self::FIELD_ANSWER_STRING]);
            } elseif ($ext && is_scalar($data[self::FIELD_ANSWER_STRING])) {
                $this->setAnswerString(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_ANSWER_STRING]] + $ext));
            } else {
                $this->setAnswerString(new FHIRString($data[self::FIELD_ANSWER_STRING]));
            }
        }
        if (isset($data[self::FIELD_ANSWER_TIME])) {
            $ext = (isset($data[self::FIELD_ANSWER_TIME_EXT]) && is_array($data[self::FIELD_ANSWER_TIME_EXT]))
                ? $data[self::FIELD_ANSWER_TIME_EXT]
                : null;
            if ($data[self::FIELD_ANSWER_TIME] instanceof FHIRTime) {
                $this->setAnswerTime($data[self::FIELD_ANSWER_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_ANSWER_TIME])) {
                $this->setAnswerTime(new FHIRTime([FHIRTime::FIELD_VALUE => $data[self::FIELD_ANSWER_TIME]] + $ext));
            } else {
                $this->setAnswerTime(new FHIRTime($data[self::FIELD_ANSWER_TIME]));
            }
        }
        if (isset($data[self::FIELD_OPERATOR])) {
            if ($data[self::FIELD_OPERATOR] instanceof FHIRQuestionnaireItemOperator) {
                $this->setOperator($data[self::FIELD_OPERATOR]);
            } else {
                $this->setOperator(new FHIRQuestionnaireItemOperator($data[self::FIELD_OPERATOR]));
            }
        }
        if (isset($data[self::FIELD_QUESTION])) {
            $ext = (isset($data[self::FIELD_QUESTION_EXT]) && is_array($data[self::FIELD_QUESTION_EXT]))
                ? $data[self::FIELD_QUESTION_EXT]
                : null;
            if ($data[self::FIELD_QUESTION] instanceof FHIRString) {
                $this->setQuestion($data[self::FIELD_QUESTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_QUESTION])) {
                $this->setQuestion(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_QUESTION]] + $ext));
            } else {
                $this->setQuestion(new FHIRString($data[self::FIELD_QUESTION]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAnswerBoolean()
    {
        return $this->answerBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean $answerBoolean
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getAnswerCoding()
    {
        return $this->answerCoding;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCoding $answerCoding
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getAnswerDate()
    {
        return $this->answerDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDate $answerDate
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime $answerDateTime
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen
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
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getAnswerDecimal()
    {
        return $this->answerDecimal;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal $answerDecimal
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getAnswerInteger()
    {
        return $this->answerInteger;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInteger $answerInteger
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity $answerQuantity
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen
     */
    public function setAnswerQuantity(FHIRQuantity $answerQuantity = null)
    {
        $this->answerQuantity = $answerQuantity;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAnswerReference()
    {
        return $this->answerReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $answerReference
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen
     */
    public function setAnswerReference(FHIRReference $answerReference = null)
    {
        $this->answerReference = $answerReference;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAnswerString()
    {
        return $this->answerString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $answerString
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getAnswerTime()
    {
        return $this->answerTime;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTime $answerTime
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen
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
     * The criteria by which a question is enabled.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies the criteria by which the question is enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireItemOperator
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * The criteria by which a question is enabled.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies the criteria by which the question is enabled.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireItemOperator $operator
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen
     */
    public function setOperator(FHIRQuestionnaireItemOperator $operator = null)
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The linkId for the question whose answer (or lack of answer) governs whether
     * this item is enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The linkId for the question whose answer (or lack of answer) governs whether
     * this item is enabled.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $question
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen
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
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRQuestionnaireEnableWhen::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRQuestionnaireEnableWhen::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRQuestionnaireEnableWhen);
        } elseif (!is_object($type) || !($type instanceof FHIRQuestionnaireEnableWhen)) {
            throw new \RuntimeException(sprintf(
                'FHIRQuestionnaireEnableWhen::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->answerBoolean)) {
            $type->setAnswerBoolean((string)$attributes->answerBoolean);
        }
        if (isset($children->answerBoolean)) {
            $type->setAnswerBoolean(FHIRBoolean::xmlUnserialize($children->answerBoolean));
        }
        if (isset($children->answerCoding)) {
            $type->setAnswerCoding(FHIRCoding::xmlUnserialize($children->answerCoding));
        }
        if (isset($attributes->answerDate)) {
            $type->setAnswerDate((string)$attributes->answerDate);
        }
        if (isset($children->answerDate)) {
            $type->setAnswerDate(FHIRDate::xmlUnserialize($children->answerDate));
        }
        if (isset($attributes->answerDateTime)) {
            $type->setAnswerDateTime((string)$attributes->answerDateTime);
        }
        if (isset($children->answerDateTime)) {
            $type->setAnswerDateTime(FHIRDateTime::xmlUnserialize($children->answerDateTime));
        }
        if (isset($attributes->answerDecimal)) {
            $type->setAnswerDecimal((string)$attributes->answerDecimal);
        }
        if (isset($children->answerDecimal)) {
            $type->setAnswerDecimal(FHIRDecimal::xmlUnserialize($children->answerDecimal));
        }
        if (isset($attributes->answerInteger)) {
            $type->setAnswerInteger((string)$attributes->answerInteger);
        }
        if (isset($children->answerInteger)) {
            $type->setAnswerInteger(FHIRInteger::xmlUnserialize($children->answerInteger));
        }
        if (isset($children->answerQuantity)) {
            $type->setAnswerQuantity(FHIRQuantity::xmlUnserialize($children->answerQuantity));
        }
        if (isset($children->answerReference)) {
            $type->setAnswerReference(FHIRReference::xmlUnserialize($children->answerReference));
        }
        if (isset($attributes->answerString)) {
            $type->setAnswerString((string)$attributes->answerString);
        }
        if (isset($children->answerString)) {
            $type->setAnswerString(FHIRString::xmlUnserialize($children->answerString));
        }
        if (isset($attributes->answerTime)) {
            $type->setAnswerTime((string)$attributes->answerTime);
        }
        if (isset($children->answerTime)) {
            $type->setAnswerTime(FHIRTime::xmlUnserialize($children->answerTime));
        }
        if (isset($children->operator)) {
            $type->setOperator(FHIRQuestionnaireItemOperator::xmlUnserialize($children->operator));
        }
        if (isset($attributes->question)) {
            $type->setQuestion((string)$attributes->question);
        }
        if (isset($children->question)) {
            $type->setQuestion(FHIRString::xmlUnserialize($children->question));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<QuestionnaireEnableWhen xmlns="http://hl7.org/fhir"></QuestionnaireEnableWhen>');
        }
        if (null !== ($v = $this->getAnswerBoolean())) {
            $sxe->addAttribute(self::FIELD_ANSWER_BOOLEAN, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER_BOOLEAN));
            }
        }
        if (null !== ($v = $this->getAnswerCoding())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER_CODING));
        }
        if (null !== ($v = $this->getAnswerDate())) {
            $sxe->addAttribute(self::FIELD_ANSWER_DATE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER_DATE));
            }
        }
        if (null !== ($v = $this->getAnswerDateTime())) {
            $sxe->addAttribute(self::FIELD_ANSWER_DATE_TIME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER_DATE_TIME));
            }
        }
        if (null !== ($v = $this->getAnswerDecimal())) {
            $sxe->addAttribute(self::FIELD_ANSWER_DECIMAL, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER_DECIMAL));
            }
        }
        if (null !== ($v = $this->getAnswerInteger())) {
            $sxe->addAttribute(self::FIELD_ANSWER_INTEGER, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER_INTEGER));
            }
        }
        if (null !== ($v = $this->getAnswerQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER_QUANTITY));
        }
        if (null !== ($v = $this->getAnswerReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER_REFERENCE));
        }
        if (null !== ($v = $this->getAnswerString())) {
            $sxe->addAttribute(self::FIELD_ANSWER_STRING, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER_STRING));
            }
        }
        if (null !== ($v = $this->getAnswerTime())) {
            $sxe->addAttribute(self::FIELD_ANSWER_TIME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER_TIME));
            }
        }
        if (null !== ($v = $this->getOperator())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OPERATOR));
        }
        if (null !== ($v = $this->getQuestion())) {
            $sxe->addAttribute(self::FIELD_QUESTION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_QUESTION));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAnswerBoolean())) {
            $a[self::FIELD_ANSWER_BOOLEAN] = (string)$v;
            $a[self::FIELD_ANSWER_BOOLEAN_EXT] = $v;
        }
        if (null !== ($v = $this->getAnswerCoding())) {
            $a[self::FIELD_ANSWER_CODING] = $v;
        }
        if (null !== ($v = $this->getAnswerDate())) {
            $a[self::FIELD_ANSWER_DATE] = (string)$v;
            $a[self::FIELD_ANSWER_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getAnswerDateTime())) {
            $a[self::FIELD_ANSWER_DATE_TIME] = (string)$v;
            $a[self::FIELD_ANSWER_DATE_TIME_EXT] = $v;
        }
        if (null !== ($v = $this->getAnswerDecimal())) {
            $a[self::FIELD_ANSWER_DECIMAL] = (string)$v;
            $a[self::FIELD_ANSWER_DECIMAL_EXT] = $v;
        }
        if (null !== ($v = $this->getAnswerInteger())) {
            $a[self::FIELD_ANSWER_INTEGER] = (string)$v;
            $a[self::FIELD_ANSWER_INTEGER_EXT] = $v;
        }
        if (null !== ($v = $this->getAnswerQuantity())) {
            $a[self::FIELD_ANSWER_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getAnswerReference())) {
            $a[self::FIELD_ANSWER_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getAnswerString())) {
            $a[self::FIELD_ANSWER_STRING] = (string)$v;
            $a[self::FIELD_ANSWER_STRING_EXT] = $v;
        }
        if (null !== ($v = $this->getAnswerTime())) {
            $a[self::FIELD_ANSWER_TIME] = (string)$v;
            $a[self::FIELD_ANSWER_TIME_EXT] = $v;
        }
        if (null !== ($v = $this->getOperator())) {
            $a[self::FIELD_OPERATOR] = $v;
        }
        if (null !== ($v = $this->getQuestion())) {
            $a[self::FIELD_QUESTION] = (string)$v;
            $a[self::FIELD_QUESTION_EXT] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}