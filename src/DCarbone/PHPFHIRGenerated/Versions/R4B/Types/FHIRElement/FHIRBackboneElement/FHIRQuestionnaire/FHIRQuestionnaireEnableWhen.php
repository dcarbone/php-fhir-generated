<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 20:30+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRQuestionnaireItemOperatorEnum;
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
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * A structured set of questions intended to guide the collection of answers from
 * end-users. Questionnaires provide detailed control over order, presentation,
 * phraseology and grouping to allow coherent, consistent data collection.
 */
class FHIRQuestionnaireEnableWhen extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ENABLE_WHEN;

    /* class_default.php:50 */
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

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_QUESTION => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_OPERATOR => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_ANSWER_BOOLEAN => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_ANSWER_DECIMAL => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_ANSWER_INTEGER => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_ANSWER_DATE => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_ANSWER_DATE_TIME => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_ANSWER_TIME => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_ANSWER_STRING => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_ANSWER_CODING => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_ANSWER_QUANTITY => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_ANSWER_REFERENCE => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_QUESTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_OPERATOR => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ANSWER_BOOLEAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ANSWER_DECIMAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ANSWER_INTEGER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ANSWER_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ANSWER_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ANSWER_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ANSWER_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
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

    /* constructor.php:61 */
    /**
     * FHIRQuestionnaireEnableWhen Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $question
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRQuestionnaireItemOperatorEnum|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuestionnaireItemOperator $operator
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean $answerBoolean
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal $answerDecimal
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger $answerInteger
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
                                null|string|FHIRQuestionnaireItemOperatorEnum|FHIRQuestionnaireItemOperator $operator = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $answerBoolean = null,
                                null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $answerDecimal = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $answerInteger = null,
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

    /* class_default.php:146 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:172 */
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
     * @return static
     */
    public function setQuestion(null|string|FHIRStringPrimitive|FHIRString $question): self
    {
        if (null === $question) {
            unset($this->question);
            return $this;
        }
        if (!($question instanceof FHIRString)) {
            $question = new FHIRString(value: $question);
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRQuestionnaireItemOperatorEnum|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuestionnaireItemOperator $operator
     * @return static
     */
    public function setOperator(null|string|FHIRQuestionnaireItemOperatorEnum|FHIRQuestionnaireItemOperator $operator): self
    {
        if (null === $operator) {
            unset($this->operator);
            return $this;
        }
        if (!($operator instanceof FHIRQuestionnaireItemOperator)) {
            $operator = new FHIRQuestionnaireItemOperator(value: $operator);
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
     * @return static
     */
    public function setAnswerBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $answerBoolean): self
    {
        if (null === $answerBoolean) {
            unset($this->answerBoolean);
            return $this;
        }
        if (!($answerBoolean instanceof FHIRBoolean)) {
            $answerBoolean = new FHIRBoolean(value: $answerBoolean);
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal $answerDecimal
     * @return static
     */
    public function setAnswerDecimal(null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $answerDecimal): self
    {
        if (null === $answerDecimal) {
            unset($this->answerDecimal);
            return $this;
        }
        if (!($answerDecimal instanceof FHIRDecimal)) {
            $answerDecimal = new FHIRDecimal(value: $answerDecimal);
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger $answerInteger
     * @return static
     */
    public function setAnswerInteger(null|string|float|FHIRIntegerPrimitive|FHIRInteger $answerInteger): self
    {
        if (null === $answerInteger) {
            unset($this->answerInteger);
            return $this;
        }
        if (!($answerInteger instanceof FHIRInteger)) {
            $answerInteger = new FHIRInteger(value: $answerInteger);
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
     * @return static
     */
    public function setAnswerDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $answerDate): self
    {
        if (null === $answerDate) {
            unset($this->answerDate);
            return $this;
        }
        if (!($answerDate instanceof FHIRDate)) {
            $answerDate = new FHIRDate(value: $answerDate);
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
     * @return static
     */
    public function setAnswerDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $answerDateTime): self
    {
        if (null === $answerDateTime) {
            unset($this->answerDateTime);
            return $this;
        }
        if (!($answerDateTime instanceof FHIRDateTime)) {
            $answerDateTime = new FHIRDateTime(value: $answerDateTime);
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
     * @return static
     */
    public function setAnswerTime(null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $answerTime): self
    {
        if (null === $answerTime) {
            unset($this->answerTime);
            return $this;
        }
        if (!($answerTime instanceof FHIRTime)) {
            $answerTime = new FHIRTime(value: $answerTime);
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
     * @return static
     */
    public function setAnswerString(null|string|FHIRStringPrimitive|FHIRString $answerString): self
    {
        if (null === $answerString) {
            unset($this->answerString);
            return $this;
        }
        if (!($answerString instanceof FHIRString)) {
            $answerString = new FHIRString(value: $answerString);
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

    /* class_default.php:199 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
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
            } else if (self::FIELD_QUESTION === $cen) {
                $type->setQuestion(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OPERATOR === $cen) {
                $type->setOperator(FHIRQuestionnaireItemOperator::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ANSWER_BOOLEAN === $cen) {
                $type->setAnswerBoolean(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ANSWER_DECIMAL === $cen) {
                $type->setAnswerDecimal(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ANSWER_INTEGER === $cen) {
                $type->setAnswerInteger(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ANSWER_DATE === $cen) {
                $type->setAnswerDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ANSWER_DATE_TIME === $cen) {
                $type->setAnswerDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ANSWER_TIME === $cen) {
                $type->setAnswerTime(FHIRTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ANSWER_STRING === $cen) {
                $type->setAnswerString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ANSWER_CODING === $cen) {
                $type->setAnswerCoding(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ANSWER_QUANTITY === $cen) {
                $type->setAnswerQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ANSWER_REFERENCE === $cen) {
                $type->setAnswerReference(FHIRReference::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_QUESTION])) {
            if (isset($type->question)) {
                $type->question->setValue((string)$attributes[self::FIELD_QUESTION]);
            } else {
                $type->setQuestion((string)$attributes[self::FIELD_QUESTION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_QUESTION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_OPERATOR])) {
            if (isset($type->operator)) {
                $type->operator->setValue((string)$attributes[self::FIELD_OPERATOR]);
            } else {
                $type->setOperator((string)$attributes[self::FIELD_OPERATOR]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_OPERATOR, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ANSWER_BOOLEAN])) {
            if (isset($type->answerBoolean)) {
                $type->answerBoolean->setValue((string)$attributes[self::FIELD_ANSWER_BOOLEAN]);
            } else {
                $type->setAnswerBoolean((string)$attributes[self::FIELD_ANSWER_BOOLEAN]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ANSWER_BOOLEAN, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ANSWER_DECIMAL])) {
            if (isset($type->answerDecimal)) {
                $type->answerDecimal->setValue((string)$attributes[self::FIELD_ANSWER_DECIMAL]);
            } else {
                $type->setAnswerDecimal((string)$attributes[self::FIELD_ANSWER_DECIMAL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ANSWER_DECIMAL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ANSWER_INTEGER])) {
            if (isset($type->answerInteger)) {
                $type->answerInteger->setValue((string)$attributes[self::FIELD_ANSWER_INTEGER]);
            } else {
                $type->setAnswerInteger((string)$attributes[self::FIELD_ANSWER_INTEGER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ANSWER_INTEGER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ANSWER_DATE])) {
            if (isset($type->answerDate)) {
                $type->answerDate->setValue((string)$attributes[self::FIELD_ANSWER_DATE]);
            } else {
                $type->setAnswerDate((string)$attributes[self::FIELD_ANSWER_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ANSWER_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ANSWER_DATE_TIME])) {
            if (isset($type->answerDateTime)) {
                $type->answerDateTime->setValue((string)$attributes[self::FIELD_ANSWER_DATE_TIME]);
            } else {
                $type->setAnswerDateTime((string)$attributes[self::FIELD_ANSWER_DATE_TIME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ANSWER_DATE_TIME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ANSWER_TIME])) {
            if (isset($type->answerTime)) {
                $type->answerTime->setValue((string)$attributes[self::FIELD_ANSWER_TIME]);
            } else {
                $type->setAnswerTime((string)$attributes[self::FIELD_ANSWER_TIME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ANSWER_TIME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ANSWER_STRING])) {
            if (isset($type->answerString)) {
                $type->answerString->setValue((string)$attributes[self::FIELD_ANSWER_STRING]);
            } else {
                $type->setAnswerString((string)$attributes[self::FIELD_ANSWER_STRING]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ANSWER_STRING, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->question) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_QUESTION]) {
            $xw->writeAttribute(self::FIELD_QUESTION, $this->question->_getValueAsString());
        }
        if (isset($this->operator) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_OPERATOR]) {
            $xw->writeAttribute(self::FIELD_OPERATOR, $this->operator->_getValueAsString());
        }
        if (isset($this->answerBoolean) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ANSWER_BOOLEAN]) {
            $xw->writeAttribute(self::FIELD_ANSWER_BOOLEAN, $this->answerBoolean->_getValueAsString());
        }
        if (isset($this->answerDecimal) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ANSWER_DECIMAL]) {
            $xw->writeAttribute(self::FIELD_ANSWER_DECIMAL, $this->answerDecimal->_getValueAsString());
        }
        if (isset($this->answerInteger) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ANSWER_INTEGER]) {
            $xw->writeAttribute(self::FIELD_ANSWER_INTEGER, $this->answerInteger->_getValueAsString());
        }
        if (isset($this->answerDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ANSWER_DATE]) {
            $xw->writeAttribute(self::FIELD_ANSWER_DATE, $this->answerDate->_getValueAsString());
        }
        if (isset($this->answerDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ANSWER_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_ANSWER_DATE_TIME, $this->answerDateTime->_getValueAsString());
        }
        if (isset($this->answerTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ANSWER_TIME]) {
            $xw->writeAttribute(self::FIELD_ANSWER_TIME, $this->answerTime->_getValueAsString());
        }
        if (isset($this->answerString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ANSWER_STRING]) {
            $xw->writeAttribute(self::FIELD_ANSWER_STRING, $this->answerString->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->question)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_QUESTION]
                || $this->question->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_QUESTION);
            $this->question->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_QUESTION]);
            $xw->endElement();
        }
        if (isset($this->operator)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_OPERATOR]
                || $this->operator->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_OPERATOR);
            $this->operator->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_OPERATOR]);
            $xw->endElement();
        }
        if (isset($this->answerBoolean)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ANSWER_BOOLEAN]
                || $this->answerBoolean->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ANSWER_BOOLEAN);
            $this->answerBoolean->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ANSWER_BOOLEAN]);
            $xw->endElement();
        }
        if (isset($this->answerDecimal)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ANSWER_DECIMAL]
                || $this->answerDecimal->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ANSWER_DECIMAL);
            $this->answerDecimal->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ANSWER_DECIMAL]);
            $xw->endElement();
        }
        if (isset($this->answerInteger)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ANSWER_INTEGER]
                || $this->answerInteger->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ANSWER_INTEGER);
            $this->answerInteger->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ANSWER_INTEGER]);
            $xw->endElement();
        }
        if (isset($this->answerDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ANSWER_DATE]
                || $this->answerDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ANSWER_DATE);
            $this->answerDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ANSWER_DATE]);
            $xw->endElement();
        }
        if (isset($this->answerDateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ANSWER_DATE_TIME]
                || $this->answerDateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ANSWER_DATE_TIME);
            $this->answerDateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ANSWER_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->answerTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ANSWER_TIME]
                || $this->answerTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ANSWER_TIME);
            $this->answerTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ANSWER_TIME]);
            $xw->endElement();
        }
        if (isset($this->answerString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ANSWER_STRING]
                || $this->answerString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ANSWER_STRING);
            $this->answerString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ANSWER_STRING]);
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
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
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
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->question)
            || isset($json->_question)
            || property_exists($json, self::FIELD_QUESTION)
            || property_exists($json, self::FIELD_QUESTION_EXT)) {
            $v = $json->_question ?? new \stdClass();
            $v->value = $json->question ?? null;
            $type->setQuestion(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->operator)
            || isset($json->_operator)
            || property_exists($json, self::FIELD_OPERATOR)
            || property_exists($json, self::FIELD_OPERATOR_EXT)) {
            $v = $json->_operator ?? new \stdClass();
            $v->value = $json->operator ?? null;
            $type->setOperator(FHIRQuestionnaireItemOperator::jsonUnserialize($v, $config));
        }
        if (isset($json->answerBoolean)
            || isset($json->_answerBoolean)
            || property_exists($json, self::FIELD_ANSWER_BOOLEAN)
            || property_exists($json, self::FIELD_ANSWER_BOOLEAN_EXT)) {
            $v = $json->_answerBoolean ?? new \stdClass();
            $v->value = $json->answerBoolean ?? null;
            $type->setAnswerBoolean(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($json->answerDecimal)
            || isset($json->_answerDecimal)
            || property_exists($json, self::FIELD_ANSWER_DECIMAL)
            || property_exists($json, self::FIELD_ANSWER_DECIMAL_EXT)) {
            $v = $json->_answerDecimal ?? new \stdClass();
            $v->value = $json->answerDecimal ?? null;
            $type->setAnswerDecimal(FHIRDecimal::jsonUnserialize($v, $config));
        }
        if (isset($json->answerInteger)
            || isset($json->_answerInteger)
            || property_exists($json, self::FIELD_ANSWER_INTEGER)
            || property_exists($json, self::FIELD_ANSWER_INTEGER_EXT)) {
            $v = $json->_answerInteger ?? new \stdClass();
            $v->value = $json->answerInteger ?? null;
            $type->setAnswerInteger(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($json->answerDate)
            || isset($json->_answerDate)
            || property_exists($json, self::FIELD_ANSWER_DATE)
            || property_exists($json, self::FIELD_ANSWER_DATE_EXT)) {
            $v = $json->_answerDate ?? new \stdClass();
            $v->value = $json->answerDate ?? null;
            $type->setAnswerDate(FHIRDate::jsonUnserialize($v, $config));
        }
        if (isset($json->answerDateTime)
            || isset($json->_answerDateTime)
            || property_exists($json, self::FIELD_ANSWER_DATE_TIME)
            || property_exists($json, self::FIELD_ANSWER_DATE_TIME_EXT)) {
            $v = $json->_answerDateTime ?? new \stdClass();
            $v->value = $json->answerDateTime ?? null;
            $type->setAnswerDateTime(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($json->answerTime)
            || isset($json->_answerTime)
            || property_exists($json, self::FIELD_ANSWER_TIME)
            || property_exists($json, self::FIELD_ANSWER_TIME_EXT)) {
            $v = $json->_answerTime ?? new \stdClass();
            $v->value = $json->answerTime ?? null;
            $type->setAnswerTime(FHIRTime::jsonUnserialize($v, $config));
        }
        if (isset($json->answerString)
            || isset($json->_answerString)
            || property_exists($json, self::FIELD_ANSWER_STRING)
            || property_exists($json, self::FIELD_ANSWER_STRING_EXT)) {
            $v = $json->_answerString ?? new \stdClass();
            $v->value = $json->answerString ?? null;
            $type->setAnswerString(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->answerCoding) || property_exists($json, self::FIELD_ANSWER_CODING)) {
            if (is_array($json->answerCoding)) {
                $type->setAnswerCoding(FHIRCoding::jsonUnserialize(reset($json->answerCoding), $config));
            } else {
                $type->setAnswerCoding(FHIRCoding::jsonUnserialize($json->answerCoding, $config));
            }
        }
        if (isset($json->answerQuantity) || property_exists($json, self::FIELD_ANSWER_QUANTITY)) {
            if (is_array($json->answerQuantity)) {
                $type->setAnswerQuantity(FHIRQuantity::jsonUnserialize(reset($json->answerQuantity), $config));
            } else {
                $type->setAnswerQuantity(FHIRQuantity::jsonUnserialize($json->answerQuantity, $config));
            }
        }
        if (isset($json->answerReference) || property_exists($json, self::FIELD_ANSWER_REFERENCE)) {
            if (is_array($json->answerReference)) {
                $type->setAnswerReference(FHIRReference::jsonUnserialize(reset($json->answerReference), $config));
            } else {
                $type->setAnswerReference(FHIRReference::jsonUnserialize($json->answerReference, $config));
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
        if (isset($this->question)) {
            if (null !== ($val = $this->question->getValue())) {
                $out->question = $val;
            }
            if ($this->question->_nonValueFieldDefined()) {
                $ext = $this->question->jsonSerialize();
                unset($ext->value);
                $out->_question = $ext;
            }
        }
        if (isset($this->operator)) {
            if (null !== ($val = $this->operator->getValue())) {
                $out->operator = $val;
            }
            if ($this->operator->_nonValueFieldDefined()) {
                $ext = $this->operator->jsonSerialize();
                unset($ext->value);
                $out->_operator = $ext;
            }
        }
        if (isset($this->answerBoolean)) {
            if (null !== ($val = $this->answerBoolean->getValue())) {
                $out->answerBoolean = $val;
            }
            if ($this->answerBoolean->_nonValueFieldDefined()) {
                $ext = $this->answerBoolean->jsonSerialize();
                unset($ext->value);
                $out->_answerBoolean = $ext;
            }
        }
        if (isset($this->answerDecimal)) {
            if (null !== ($val = $this->answerDecimal->getValue())) {
                $out->answerDecimal = $val;
            }
            if ($this->answerDecimal->_nonValueFieldDefined()) {
                $ext = $this->answerDecimal->jsonSerialize();
                unset($ext->value);
                $out->_answerDecimal = $ext;
            }
        }
        if (isset($this->answerInteger)) {
            if (null !== ($val = $this->answerInteger->getValue())) {
                $out->answerInteger = $val;
            }
            if ($this->answerInteger->_nonValueFieldDefined()) {
                $ext = $this->answerInteger->jsonSerialize();
                unset($ext->value);
                $out->_answerInteger = $ext;
            }
        }
        if (isset($this->answerDate)) {
            if (null !== ($val = $this->answerDate->getValue())) {
                $out->answerDate = $val;
            }
            if ($this->answerDate->_nonValueFieldDefined()) {
                $ext = $this->answerDate->jsonSerialize();
                unset($ext->value);
                $out->_answerDate = $ext;
            }
        }
        if (isset($this->answerDateTime)) {
            if (null !== ($val = $this->answerDateTime->getValue())) {
                $out->answerDateTime = $val;
            }
            if ($this->answerDateTime->_nonValueFieldDefined()) {
                $ext = $this->answerDateTime->jsonSerialize();
                unset($ext->value);
                $out->_answerDateTime = $ext;
            }
        }
        if (isset($this->answerTime)) {
            if (null !== ($val = $this->answerTime->getValue())) {
                $out->answerTime = $val;
            }
            if ($this->answerTime->_nonValueFieldDefined()) {
                $ext = $this->answerTime->jsonSerialize();
                unset($ext->value);
                $out->_answerTime = $ext;
            }
        }
        if (isset($this->answerString)) {
            if (null !== ($val = $this->answerString->getValue())) {
                $out->answerString = $val;
            }
            if ($this->answerString->_nonValueFieldDefined()) {
                $ext = $this->answerString->jsonSerialize();
                unset($ext->value);
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
}