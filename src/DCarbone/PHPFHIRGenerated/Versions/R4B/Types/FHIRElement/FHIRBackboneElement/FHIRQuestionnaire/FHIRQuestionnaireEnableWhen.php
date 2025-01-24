<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 24th, 2025 03:11+0000
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuestionnaireItemOperator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTime;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * A structured set of questions intended to guide the collection of answers from
 * end-users. Questionnaires provide detailed control over order, presentation,
 * phraseology and grouping to allow coherent, consistent data collection.
 */
class FHIRQuestionnaireEnableWhen extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ENABLE_WHEN;


    public const FIELD_QUESTION = 'question';
    public const FIELD_QUESTION_EXT = '_question';
    public const FIELD_OPERATOR = 'operator';
    public const FIELD_OPERATOR_EXT = '_operator';
    public const FIELD_ANSWER_BOOLEAN = 'answerBoolean';
    public const FIELD_ANSWER_BOOLEAN_EXT = '_answerBoolean';
    public const FIELD_ANSWER_DECIMAL = 'answerDecimal';
    public const FIELD_ANSWER_DECIMAL_EXT = '_answerDecimal';
    public const FIELD_ANSWER_INTEGER = 'answerInteger';
    public const FIELD_ANSWER_INTEGER_EXT = '_answerInteger';
    public const FIELD_ANSWER_DATE = 'answerDate';
    public const FIELD_ANSWER_DATE_EXT = '_answerDate';
    public const FIELD_ANSWER_DATE_TIME = 'answerDateTime';
    public const FIELD_ANSWER_DATE_TIME_EXT = '_answerDateTime';
    public const FIELD_ANSWER_TIME = 'answerTime';
    public const FIELD_ANSWER_TIME_EXT = '_answerTime';
    public const FIELD_ANSWER_STRING = 'answerString';
    public const FIELD_ANSWER_STRING_EXT = '_answerString';
    public const FIELD_ANSWER_CODING = 'answerCoding';
    public const FIELD_ANSWER_QUANTITY = 'answerQuantity';
    public const FIELD_ANSWER_REFERENCE = 'answerReference';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The linkId for the question whose answer (or lack of answer) governs whether
     * this item is enabled.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $question;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies the criteria by which the question is enabled.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuestionnaireItemOperator 
     */
    protected FHIRQuestionnaireItemOperator $operator;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $answerBoolean;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $answerDecimal;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $answerInteger;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $answerDate;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $answerDateTime;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTime 
     */
    protected FHIRTime $answerTime;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $answerString;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCoding 
     */
    protected FHIRCoding $answerCoding;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $answerQuantity;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $answerReference;

    /** Default validation map for fields in type Questionnaire.EnableWhen */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_QUESTION => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_OPERATOR => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_ANSWER_BOOLEAN => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_ANSWER_DECIMAL => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_ANSWER_INTEGER => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_ANSWER_DATE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_ANSWER_DATE_TIME => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_ANSWER_TIME => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_ANSWER_STRING => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_ANSWER_CODING => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_ANSWER_QUANTITY => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_ANSWER_REFERENCE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRQuestionnaireEnableWhen Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $question
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuestionnaireItemOperator $operator
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean $answerBoolean
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal $answerDecimal
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger $answerInteger
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate $answerDate
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $answerDateTime
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTime $answerTime
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $answerString
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCoding $answerCoding
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity $answerQuantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $answerReference
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRStringPrimitive|FHIRString $question = null,
                                null|FHIRQuestionnaireItemOperator $operator = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $answerBoolean = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $answerDecimal = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $answerInteger = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $answerDate = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $answerDateTime = null,
                                null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $answerTime = null,
                                null|string|FHIRStringPrimitive|FHIRString $answerString = null,
                                null|FHIRCoding $answerCoding = null,
                                null|FHIRQuantity $answerQuantity = null,
                                null|FHIRReference $answerReference = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $question) {
            $this->setQuestion($question);
        }
        if (null !== $operator) {
            $this->setOperator($operator);
        }
        if (null !== $answerBoolean) {
            $this->setAnswerBoolean($answerBoolean);
        }
        if (null !== $answerDecimal) {
            $this->setAnswerDecimal($answerDecimal);
        }
        if (null !== $answerInteger) {
            $this->setAnswerInteger($answerInteger);
        }
        if (null !== $answerDate) {
            $this->setAnswerDate($answerDate);
        }
        if (null !== $answerDateTime) {
            $this->setAnswerDateTime($answerDateTime);
        }
        if (null !== $answerTime) {
            $this->setAnswerTime($answerTime);
        }
        if (null !== $answerString) {
            $this->setAnswerString($answerString);
        }
        if (null !== $answerCoding) {
            $this->setAnswerCoding($answerCoding);
        }
        if (null !== $answerQuantity) {
            $this->setAnswerQuantity($answerQuantity);
        }
        if (null !== $answerReference) {
            $this->setAnswerReference($answerReference);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The linkId for the question whose answer (or lack of answer) governs whether
     * this item is enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getQuestion(): null|FHIRString
    {
        return $this->question ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The linkId for the question whose answer (or lack of answer) governs whether
     * this item is enabled.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $question
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setQuestion(null|string|FHIRStringPrimitive|FHIRString $question,
                                null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $question) {
            unset($this->question);
            return $this;
        }
        if (!($question instanceof FHIRString)) {
            $question = new FHIRString(value: $question);
        }
        if (null !== $valueXMLLocation) {
            $question->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $question->_getValueXMLLocation()) {
            $question->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->question = $question;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies the criteria by which the question is enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuestionnaireItemOperator
     */
    public function getOperator(): null|FHIRQuestionnaireItemOperator
    {
        return $this->operator ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies the criteria by which the question is enabled.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuestionnaireItemOperator $operator
     * @return static
     */
    public function setOperator(null|FHIRQuestionnaireItemOperator $operator): self
    {
        if (null === $operator) {
            unset($this->operator);
            return $this;
        }
        $this->operator = $operator;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean
     */
    public function getAnswerBoolean(): null|FHIRBoolean
    {
        return $this->answerBoolean ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean $answerBoolean
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAnswerBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $answerBoolean,
                                     null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $answerBoolean) {
            unset($this->answerBoolean);
            return $this;
        }
        if (!($answerBoolean instanceof FHIRBoolean)) {
            $answerBoolean = new FHIRBoolean(value: $answerBoolean);
        }
        if (null !== $valueXMLLocation) {
            $answerBoolean->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $answerBoolean->_getValueXMLLocation()) {
            $answerBoolean->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->answerBoolean = $answerBoolean;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal
     */
    public function getAnswerDecimal(): null|FHIRDecimal
    {
        return $this->answerDecimal ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal $answerDecimal
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAnswerDecimal(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $answerDecimal,
                                     null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $answerDecimal) {
            unset($this->answerDecimal);
            return $this;
        }
        if (!($answerDecimal instanceof FHIRDecimal)) {
            $answerDecimal = new FHIRDecimal(value: $answerDecimal);
        }
        if (null !== $valueXMLLocation) {
            $answerDecimal->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $answerDecimal->_getValueXMLLocation()) {
            $answerDecimal->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->answerDecimal = $answerDecimal;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger
     */
    public function getAnswerInteger(): null|FHIRInteger
    {
        return $this->answerInteger ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger $answerInteger
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAnswerInteger(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $answerInteger,
                                     null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $answerInteger) {
            unset($this->answerInteger);
            return $this;
        }
        if (!($answerInteger instanceof FHIRInteger)) {
            $answerInteger = new FHIRInteger(value: $answerInteger);
        }
        if (null !== $valueXMLLocation) {
            $answerInteger->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $answerInteger->_getValueXMLLocation()) {
            $answerInteger->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->answerInteger = $answerInteger;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate
     */
    public function getAnswerDate(): null|FHIRDate
    {
        return $this->answerDate ?? null;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate $answerDate
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAnswerDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $answerDate,
                                  null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $answerDate) {
            unset($this->answerDate);
            return $this;
        }
        if (!($answerDate instanceof FHIRDate)) {
            $answerDate = new FHIRDate(value: $answerDate);
        }
        if (null !== $valueXMLLocation) {
            $answerDate->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $answerDate->_getValueXMLLocation()) {
            $answerDate->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->answerDate = $answerDate;
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
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime
     */
    public function getAnswerDateTime(): null|FHIRDateTime
    {
        return $this->answerDateTime ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $answerDateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAnswerDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $answerDateTime,
                                      null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $answerDateTime) {
            unset($this->answerDateTime);
            return $this;
        }
        if (!($answerDateTime instanceof FHIRDateTime)) {
            $answerDateTime = new FHIRDateTime(value: $answerDateTime);
        }
        if (null !== $valueXMLLocation) {
            $answerDateTime->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $answerDateTime->_getValueXMLLocation()) {
            $answerDateTime->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->answerDateTime = $answerDateTime;
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTime
     */
    public function getAnswerTime(): null|FHIRTime
    {
        return $this->answerTime ?? null;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTime $answerTime
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAnswerTime(null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $answerTime,
                                  null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $answerTime) {
            unset($this->answerTime);
            return $this;
        }
        if (!($answerTime instanceof FHIRTime)) {
            $answerTime = new FHIRTime(value: $answerTime);
        }
        if (null !== $valueXMLLocation) {
            $answerTime->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $answerTime->_getValueXMLLocation()) {
            $answerTime->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->answerTime = $answerTime;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getAnswerString(): null|FHIRString
    {
        return $this->answerString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $answerString
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAnswerString(null|string|FHIRStringPrimitive|FHIRString $answerString,
                                    null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $answerString) {
            unset($this->answerString);
            return $this;
        }
        if (!($answerString instanceof FHIRString)) {
            $answerString = new FHIRString(value: $answerString);
        }
        if (null !== $valueXMLLocation) {
            $answerString->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $answerString->_getValueXMLLocation()) {
            $answerString->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->answerString = $answerString;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCoding
     */
    public function getAnswerCoding(): null|FHIRCoding
    {
        return $this->answerCoding ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCoding $answerCoding
     * @return static
     */
    public function setAnswerCoding(null|FHIRCoding $answerCoding): self
    {
        if (null === $answerCoding) {
            unset($this->answerCoding);
            return $this;
        }
        $this->answerCoding = $answerCoding;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity
     */
    public function getAnswerQuantity(): null|FHIRQuantity
    {
        return $this->answerQuantity ?? null;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity $answerQuantity
     * @return static
     */
    public function setAnswerQuantity(null|FHIRQuantity $answerQuantity): self
    {
        if (null === $answerQuantity) {
            unset($this->answerQuantity);
            return $this;
        }
        $this->answerQuantity = $answerQuantity;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference
     */
    public function getAnswerReference(): null|FHIRReference
    {
        return $this->answerReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value that the referenced question is tested using the specified operator in
     * order for the item to be enabled.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $answerReference
     * @return static
     */
    public function setAnswerReference(null|FHIRReference $answerReference): self
    {
        if (null === $answerReference) {
            unset($this->answerReference);
            return $this;
        }
        $this->answerReference = $answerReference;
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
        return self::_DEFAULT_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getQuestion())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUESTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOperator())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OPERATOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAnswerBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ANSWER_BOOLEAN] = $fieldErrs;
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
        if (null !== ($v = $this->getAnswerTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ANSWER_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAnswerString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ANSWER_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAnswerCoding())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ANSWER_CODING] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_QUESTION])) {
            $v = $this->getQuestion();
            foreach($validationRules[self::FIELD_QUESTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_QUESTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUESTION])) {
                        $errs[self::FIELD_QUESTION] = [];
                    }
                    $errs[self::FIELD_QUESTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OPERATOR])) {
            $v = $this->getOperator();
            foreach($validationRules[self::FIELD_OPERATOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OPERATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OPERATOR])) {
                        $errs[self::FIELD_OPERATOR] = [];
                    }
                    $errs[self::FIELD_OPERATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER_BOOLEAN])) {
            $v = $this->getAnswerBoolean();
            foreach($validationRules[self::FIELD_ANSWER_BOOLEAN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ANSWER_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_BOOLEAN])) {
                        $errs[self::FIELD_ANSWER_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_ANSWER_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER_DECIMAL])) {
            $v = $this->getAnswerDecimal();
            foreach($validationRules[self::FIELD_ANSWER_DECIMAL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ANSWER_DECIMAL, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ANSWER_INTEGER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_INTEGER])) {
                        $errs[self::FIELD_ANSWER_INTEGER] = [];
                    }
                    $errs[self::FIELD_ANSWER_INTEGER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER_DATE])) {
            $v = $this->getAnswerDate();
            foreach($validationRules[self::FIELD_ANSWER_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ANSWER_DATE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ANSWER_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_DATE_TIME])) {
                        $errs[self::FIELD_ANSWER_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_ANSWER_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER_TIME])) {
            $v = $this->getAnswerTime();
            foreach($validationRules[self::FIELD_ANSWER_TIME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ANSWER_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_TIME])) {
                        $errs[self::FIELD_ANSWER_TIME] = [];
                    }
                    $errs[self::FIELD_ANSWER_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER_STRING])) {
            $v = $this->getAnswerString();
            foreach($validationRules[self::FIELD_ANSWER_STRING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ANSWER_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_STRING])) {
                        $errs[self::FIELD_ANSWER_STRING] = [];
                    }
                    $errs[self::FIELD_ANSWER_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER_CODING])) {
            $v = $this->getAnswerCoding();
            foreach($validationRules[self::FIELD_ANSWER_CODING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ANSWER_CODING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_CODING])) {
                        $errs[self::FIELD_ANSWER_CODING] = [];
                    }
                    $errs[self::FIELD_ANSWER_CODING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER_QUANTITY])) {
            $v = $this->getAnswerQuantity();
            foreach($validationRules[self::FIELD_ANSWER_QUANTITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ANSWER_QUANTITY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ANSWER_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_REFERENCE])) {
                        $errs[self::FIELD_ANSWER_REFERENCE] = [];
                    }
                    $errs[self::FIELD_ANSWER_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRQuestionnaireEnableWhen)) {
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
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $valueAttr = $n->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_QUESTION === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setQuestion(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_OPERATOR === $childName) {
                $v = new FHIRQuestionnaireItemOperator(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setOperator(FHIRQuestionnaireItemOperator::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ANSWER_BOOLEAN === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setAnswerBoolean(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ANSWER_DECIMAL === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setAnswerDecimal(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ANSWER_INTEGER === $childName) {
                $v = new FHIRInteger(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setAnswerInteger(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ANSWER_DATE === $childName) {
                $v = new FHIRDate(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setAnswerDate(FHIRDate::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ANSWER_DATE_TIME === $childName) {
                $v = new FHIRDateTime(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setAnswerDateTime(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ANSWER_TIME === $childName) {
                $v = new FHIRTime(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setAnswerTime(FHIRTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ANSWER_STRING === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setAnswerString(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ANSWER_CODING === $childName) {
                $v = new FHIRCoding();
                $type->setAnswerCoding(FHIRCoding::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ANSWER_QUANTITY === $childName) {
                $v = new FHIRQuantity();
                $type->setAnswerQuantity(FHIRQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ANSWER_REFERENCE === $childName) {
                $v = new FHIRReference();
                $type->setAnswerReference(FHIRReference::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_QUESTION])) {
            $pt = $type->getQuestion();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_QUESTION]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setQuestion(new FHIRString(
                    value: (string)$attributes[self::FIELD_QUESTION],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_BOOLEAN])) {
            $pt = $type->getAnswerBoolean();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ANSWER_BOOLEAN]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAnswerBoolean(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_ANSWER_BOOLEAN],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_DECIMAL])) {
            $pt = $type->getAnswerDecimal();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ANSWER_DECIMAL]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAnswerDecimal(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_ANSWER_DECIMAL],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_INTEGER])) {
            $pt = $type->getAnswerInteger();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ANSWER_INTEGER]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAnswerInteger(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_ANSWER_INTEGER],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_DATE])) {
            $pt = $type->getAnswerDate();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ANSWER_DATE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAnswerDate(new FHIRDate(
                    value: (string)$attributes[self::FIELD_ANSWER_DATE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_DATE_TIME])) {
            $pt = $type->getAnswerDateTime();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ANSWER_DATE_TIME]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAnswerDateTime(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_ANSWER_DATE_TIME],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_TIME])) {
            $pt = $type->getAnswerTime();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ANSWER_TIME]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAnswerTime(new FHIRTime(
                    value: (string)$attributes[self::FIELD_ANSWER_TIME],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_STRING])) {
            $pt = $type->getAnswerString();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ANSWER_STRING]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAnswerString(new FHIRString(
                    value: (string)$attributes[self::FIELD_ANSWER_STRING],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
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
            $xw->openRootNode('QuestionnaireEnableWhen', $this->_getSourceXMLNS());
        }
        if (isset($this->question) && $this->question->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_QUESTION, $this->question->getValue()?->_getFormattedValue());
        }
        if (isset($this->answerBoolean) && $this->answerBoolean->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ANSWER_BOOLEAN, $this->answerBoolean->getValue()?->_getFormattedValue());
        }
        if (isset($this->answerDecimal) && $this->answerDecimal->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ANSWER_DECIMAL, $this->answerDecimal->getValue()?->_getFormattedValue());
        }
        if (isset($this->answerInteger) && $this->answerInteger->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ANSWER_INTEGER, $this->answerInteger->getValue()?->_getFormattedValue());
        }
        if (isset($this->answerDate) && $this->answerDate->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ANSWER_DATE, $this->answerDate->getValue()?->_getFormattedValue());
        }
        if (isset($this->answerDateTime) && $this->answerDateTime->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ANSWER_DATE_TIME, $this->answerDateTime->getValue()?->_getFormattedValue());
        }
        if (isset($this->answerTime) && $this->answerTime->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ANSWER_TIME, $this->answerTime->getValue()?->_getFormattedValue());
        }
        if (isset($this->answerString) && $this->answerString->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ANSWER_STRING, $this->answerString->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->question) && $this->question->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_QUESTION);
            $this->question->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->operator)) {
            $xw->startElement(self::FIELD_OPERATOR);
            $this->operator->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->answerBoolean) && $this->answerBoolean->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ANSWER_BOOLEAN);
            $this->answerBoolean->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->answerDecimal) && $this->answerDecimal->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ANSWER_DECIMAL);
            $this->answerDecimal->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->answerInteger) && $this->answerInteger->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ANSWER_INTEGER);
            $this->answerInteger->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->answerDate) && $this->answerDate->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ANSWER_DATE);
            $this->answerDate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->answerDateTime) && $this->answerDateTime->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ANSWER_DATE_TIME);
            $this->answerDateTime->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->answerTime) && $this->answerTime->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ANSWER_TIME);
            $this->answerTime->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->answerString) && $this->answerString->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ANSWER_STRING);
            $this->answerString->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->answerCoding)) {
            $xw->startElement(self::FIELD_ANSWER_CODING);
            $this->answerCoding->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->answerQuantity)) {
            $xw->startElement(self::FIELD_ANSWER_QUANTITY);
            $this->answerQuantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->answerReference)) {
            $xw->startElement(self::FIELD_ANSWER_REFERENCE);
            $this->answerReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRQuestionnaireEnableWhen)) {
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
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_QUESTION]) || isset($json[self::FIELD_QUESTION_EXT]) || array_key_exists(self::FIELD_QUESTION, $json) || array_key_exists(self::FIELD_QUESTION_EXT, $json)) {
            $value = $json[self::FIELD_QUESTION] ?? null;
            $ext = (array)($json[self::FIELD_QUESTION_EXT] ?? []);
            $type->setQuestion(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_OPERATOR]) || isset($json[self::FIELD_OPERATOR_EXT]) || array_key_exists(self::FIELD_OPERATOR, $json) || array_key_exists(self::FIELD_OPERATOR_EXT, $json)) {
            $value = $json[self::FIELD_OPERATOR] ?? null;
            $ext = (array)($json[self::FIELD_OPERATOR_EXT] ?? []);
            $type->setOperator(FHIRQuestionnaireItemOperator::jsonUnserialize(
                json: [FHIRQuestionnaireItemOperator::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ANSWER_BOOLEAN]) || isset($json[self::FIELD_ANSWER_BOOLEAN_EXT]) || array_key_exists(self::FIELD_ANSWER_BOOLEAN, $json) || array_key_exists(self::FIELD_ANSWER_BOOLEAN_EXT, $json)) {
            $value = $json[self::FIELD_ANSWER_BOOLEAN] ?? null;
            $ext = (array)($json[self::FIELD_ANSWER_BOOLEAN_EXT] ?? []);
            $type->setAnswerBoolean(FHIRBoolean::jsonUnserialize(
                json: [FHIRBoolean::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ANSWER_DECIMAL]) || isset($json[self::FIELD_ANSWER_DECIMAL_EXT]) || array_key_exists(self::FIELD_ANSWER_DECIMAL, $json) || array_key_exists(self::FIELD_ANSWER_DECIMAL_EXT, $json)) {
            $value = $json[self::FIELD_ANSWER_DECIMAL] ?? null;
            $ext = (array)($json[self::FIELD_ANSWER_DECIMAL_EXT] ?? []);
            $type->setAnswerDecimal(FHIRDecimal::jsonUnserialize(
                json: [FHIRDecimal::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ANSWER_INTEGER]) || isset($json[self::FIELD_ANSWER_INTEGER_EXT]) || array_key_exists(self::FIELD_ANSWER_INTEGER, $json) || array_key_exists(self::FIELD_ANSWER_INTEGER_EXT, $json)) {
            $value = $json[self::FIELD_ANSWER_INTEGER] ?? null;
            $ext = (array)($json[self::FIELD_ANSWER_INTEGER_EXT] ?? []);
            $type->setAnswerInteger(FHIRInteger::jsonUnserialize(
                json: [FHIRInteger::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ANSWER_DATE]) || isset($json[self::FIELD_ANSWER_DATE_EXT]) || array_key_exists(self::FIELD_ANSWER_DATE, $json) || array_key_exists(self::FIELD_ANSWER_DATE_EXT, $json)) {
            $value = $json[self::FIELD_ANSWER_DATE] ?? null;
            $ext = (array)($json[self::FIELD_ANSWER_DATE_EXT] ?? []);
            $type->setAnswerDate(FHIRDate::jsonUnserialize(
                json: [FHIRDate::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ANSWER_DATE_TIME]) || isset($json[self::FIELD_ANSWER_DATE_TIME_EXT]) || array_key_exists(self::FIELD_ANSWER_DATE_TIME, $json) || array_key_exists(self::FIELD_ANSWER_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_ANSWER_DATE_TIME] ?? null;
            $ext = (array)($json[self::FIELD_ANSWER_DATE_TIME_EXT] ?? []);
            $type->setAnswerDateTime(FHIRDateTime::jsonUnserialize(
                json: [FHIRDateTime::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ANSWER_TIME]) || isset($json[self::FIELD_ANSWER_TIME_EXT]) || array_key_exists(self::FIELD_ANSWER_TIME, $json) || array_key_exists(self::FIELD_ANSWER_TIME_EXT, $json)) {
            $value = $json[self::FIELD_ANSWER_TIME] ?? null;
            $ext = (array)($json[self::FIELD_ANSWER_TIME_EXT] ?? []);
            $type->setAnswerTime(FHIRTime::jsonUnserialize(
                json: [FHIRTime::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ANSWER_STRING]) || isset($json[self::FIELD_ANSWER_STRING_EXT]) || array_key_exists(self::FIELD_ANSWER_STRING, $json) || array_key_exists(self::FIELD_ANSWER_STRING_EXT, $json)) {
            $value = $json[self::FIELD_ANSWER_STRING] ?? null;
            $ext = (array)($json[self::FIELD_ANSWER_STRING_EXT] ?? []);
            $type->setAnswerString(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ANSWER_CODING]) || array_key_exists(self::FIELD_ANSWER_CODING, $json)) {
            $type->setAnswerCoding(FHIRCoding::jsonUnserialize(
                json: $json[self::FIELD_ANSWER_CODING],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ANSWER_QUANTITY]) || array_key_exists(self::FIELD_ANSWER_QUANTITY, $json)) {
            $type->setAnswerQuantity(FHIRQuantity::jsonUnserialize(
                json: $json[self::FIELD_ANSWER_QUANTITY],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ANSWER_REFERENCE]) || array_key_exists(self::FIELD_ANSWER_REFERENCE, $json)) {
            $type->setAnswerReference(FHIRReference::jsonUnserialize(
                json: $json[self::FIELD_ANSWER_REFERENCE],
                config: $config,
            ));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->question)) {
            if (null !== ($val = $this->question->getValue())) {
                $out->question = $val;
            }
            $ext = $this->question->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_question = $ext;
            }
        }
        if (isset($this->operator)) {
            if (null !== ($val = $this->operator->getValue())) {
                $out->operator = $val;
            }
            $ext = $this->operator->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_operator = $ext;
            }
        }
        if (isset($this->answerBoolean)) {
            if (null !== ($val = $this->answerBoolean->getValue())) {
                $out->answerBoolean = $val;
            }
            $ext = $this->answerBoolean->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_answerBoolean = $ext;
            }
        }
        if (isset($this->answerDecimal)) {
            if (null !== ($val = $this->answerDecimal->getValue())) {
                $out->answerDecimal = $val;
            }
            $ext = $this->answerDecimal->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_answerDecimal = $ext;
            }
        }
        if (isset($this->answerInteger)) {
            if (null !== ($val = $this->answerInteger->getValue())) {
                $out->answerInteger = $val;
            }
            $ext = $this->answerInteger->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_answerInteger = $ext;
            }
        }
        if (isset($this->answerDate)) {
            if (null !== ($val = $this->answerDate->getValue())) {
                $out->answerDate = $val;
            }
            $ext = $this->answerDate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_answerDate = $ext;
            }
        }
        if (isset($this->answerDateTime)) {
            if (null !== ($val = $this->answerDateTime->getValue())) {
                $out->answerDateTime = $val;
            }
            $ext = $this->answerDateTime->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_answerDateTime = $ext;
            }
        }
        if (isset($this->answerTime)) {
            if (null !== ($val = $this->answerTime->getValue())) {
                $out->answerTime = $val;
            }
            $ext = $this->answerTime->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_answerTime = $ext;
            }
        }
        if (isset($this->answerString)) {
            if (null !== ($val = $this->answerString->getValue())) {
                $out->answerString = $val;
            }
            $ext = $this->answerString->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_answerString = $ext;
            }
        }
        if (isset($this->answerCoding)) {
            $out->answerCoding = $this->answerCoding;
        }
        if (isset($this->answerQuantity)) {
            $out->answerQuantity = $this->answerQuantity;
        }
        if (isset($this->answerReference)) {
            $out->answerReference = $this->answerReference;
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