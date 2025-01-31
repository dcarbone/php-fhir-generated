<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 23:45+0000
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * A structured set of questions intended to guide the collection of answers from
 * end-users. Questionnaires provide detailed control over order, presentation,
 * phraseology and grouping to allow coherent, consistent data collection.
 */
class FHIRQuestionnaireEnableWhen extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ENABLE_WHEN;

    /* class_default.php:47 */
    public const FIELD_QUESTION = 'question';
    public const FIELD_QUESTION_EXT = '_question';
    public const FIELD_HAS_ANSWER = 'hasAnswer';
    public const FIELD_HAS_ANSWER_EXT = '_hasAnswer';
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
    public const FIELD_ANSWER_URI = 'answerUri';
    public const FIELD_ANSWER_URI_EXT = '_answerUri';
    public const FIELD_ANSWER_ATTACHMENT = 'answerAttachment';
    public const FIELD_ANSWER_CODING = 'answerCoding';
    public const FIELD_ANSWER_QUANTITY = 'answerQuantity';
    public const FIELD_ANSWER_REFERENCE = 'answerReference';

    /* class_default.php:66 */
    private static array $_validationRules = [
        self::FIELD_QUESTION => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_QUESTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_HAS_ANSWER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ANSWER_BOOLEAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ANSWER_DECIMAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ANSWER_INTEGER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ANSWER_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ANSWER_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ANSWER_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ANSWER_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ANSWER_URI => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The linkId for the question whose answer (or lack of answer) governs whether
     * this item is enabled.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $question;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication that this item should be enabled only if the specified question is
     * answered (hasAnswer=true) or not answered (hasAnswer=false).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $hasAnswer;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $answerBoolean;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $answerDecimal;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $answerInteger;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate 
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
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $answerDateTime;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime 
     */
    protected FHIRTime $answerTime;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $answerString;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $answerUri;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment 
     */
    protected FHIRAttachment $answerAttachment;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding 
     */
    protected FHIRCoding $answerCoding;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $answerQuantity;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $answerReference;

    /* constructor.php:63 */
    /**
     * FHIRQuestionnaireEnableWhen Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $question
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $hasAnswer
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $answerBoolean
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $answerDecimal
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $answerInteger
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate $answerDate
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $answerDateTime
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime $answerTime
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $answerString
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $answerUri
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment $answerAttachment
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding $answerCoding
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $answerQuantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $answerReference
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRStringPrimitive|FHIRString $question = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $hasAnswer = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $answerBoolean = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $answerDecimal = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $answerInteger = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $answerDate = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $answerDateTime = null,
                                null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $answerTime = null,
                                null|string|FHIRStringPrimitive|FHIRString $answerString = null,
                                null|string|FHIRUriPrimitive|FHIRUri $answerUri = null,
                                null|FHIRAttachment $answerAttachment = null,
                                null|FHIRCoding $answerCoding = null,
                                null|FHIRDecimal|FHIRQuantity $answerQuantity = null,
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
        if (null !== $hasAnswer) {
            $this->setHasAnswer($hasAnswer);
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
        if (null !== $answerUri) {
            $this->setAnswerUri($answerUri);
        }
        if (null !== $answerAttachment) {
            $this->setAnswerAttachment($answerAttachment);
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

    /* class_default.php:136 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:162 */
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The linkId for the question whose answer (or lack of answer) governs whether
     * this item is enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getQuestion(): null|FHIRString
    {
        return $this->question ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The linkId for the question whose answer (or lack of answer) governs whether
     * this item is enabled.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $question
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setQuestion(null|string|FHIRStringPrimitive|FHIRString $question,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $question) {
            unset($this->question);
            return $this;
        }
        if (!($question instanceof FHIRString)) {
            $question = new FHIRString(value: $question);
        }
        $this->question = $question;
        if ($this->_valueXMLLocations[self::FIELD_QUESTION] !== $valueXMLLocation) {
            $this->_setQuestionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the question element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getQuestionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_QUESTION];
    }

    /**
     * Set the location the "value" field of the question element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setQuestionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_QUESTION] = $valueXMLLocation;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication that this item should be enabled only if the specified question is
     * answered (hasAnswer=true) or not answered (hasAnswer=false).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getHasAnswer(): null|FHIRBoolean
    {
        return $this->hasAnswer ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication that this item should be enabled only if the specified question is
     * answered (hasAnswer=true) or not answered (hasAnswer=false).
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $hasAnswer
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setHasAnswer(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $hasAnswer,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $hasAnswer) {
            unset($this->hasAnswer);
            return $this;
        }
        if (!($hasAnswer instanceof FHIRBoolean)) {
            $hasAnswer = new FHIRBoolean(value: $hasAnswer);
        }
        $this->hasAnswer = $hasAnswer;
        if ($this->_valueXMLLocations[self::FIELD_HAS_ANSWER] !== $valueXMLLocation) {
            $this->_setHasAnswerValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the hasAnswer element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getHasAnswerValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_HAS_ANSWER];
    }

    /**
     * Set the location the "value" field of the hasAnswer element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setHasAnswerValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_HAS_ANSWER] = $valueXMLLocation;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getAnswerBoolean(): null|FHIRBoolean
    {
        return $this->answerBoolean ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $answerBoolean
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAnswerBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $answerBoolean,
                                     ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $answerBoolean) {
            unset($this->answerBoolean);
            return $this;
        }
        if (!($answerBoolean instanceof FHIRBoolean)) {
            $answerBoolean = new FHIRBoolean(value: $answerBoolean);
        }
        $this->answerBoolean = $answerBoolean;
        if ($this->_valueXMLLocations[self::FIELD_ANSWER_BOOLEAN] !== $valueXMLLocation) {
            $this->_setAnswerBooleanValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the answerBoolean element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAnswerBooleanValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ANSWER_BOOLEAN];
    }

    /**
     * Set the location the "value" field of the answerBoolean element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAnswerBooleanValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ANSWER_BOOLEAN] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
     */
    public function getAnswerDecimal(): null|FHIRDecimal
    {
        return $this->answerDecimal ?? null;
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
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $answerDecimal
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAnswerDecimal(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $answerDecimal,
                                     ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $answerDecimal) {
            unset($this->answerDecimal);
            return $this;
        }
        if (!($answerDecimal instanceof FHIRDecimal)) {
            $answerDecimal = new FHIRDecimal(value: $answerDecimal);
        }
        $this->answerDecimal = $answerDecimal;
        if ($this->_valueXMLLocations[self::FIELD_ANSWER_DECIMAL] !== $valueXMLLocation) {
            $this->_setAnswerDecimalValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the answerDecimal element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAnswerDecimalValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ANSWER_DECIMAL];
    }

    /**
     * Set the location the "value" field of the answerDecimal element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAnswerDecimalValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ANSWER_DECIMAL] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger
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
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $answerInteger
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAnswerInteger(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $answerInteger,
                                     ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $answerInteger) {
            unset($this->answerInteger);
            return $this;
        }
        if (!($answerInteger instanceof FHIRInteger)) {
            $answerInteger = new FHIRInteger(value: $answerInteger);
        }
        $this->answerInteger = $answerInteger;
        if ($this->_valueXMLLocations[self::FIELD_ANSWER_INTEGER] !== $valueXMLLocation) {
            $this->_setAnswerIntegerValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the answerInteger element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAnswerIntegerValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ANSWER_INTEGER];
    }

    /**
     * Set the location the "value" field of the answerInteger element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAnswerIntegerValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ANSWER_INTEGER] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate
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
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate $answerDate
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAnswerDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $answerDate,
                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $answerDate) {
            unset($this->answerDate);
            return $this;
        }
        if (!($answerDate instanceof FHIRDate)) {
            $answerDate = new FHIRDate(value: $answerDate);
        }
        $this->answerDate = $answerDate;
        if ($this->_valueXMLLocations[self::FIELD_ANSWER_DATE] !== $valueXMLLocation) {
            $this->_setAnswerDateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the answerDate element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAnswerDateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ANSWER_DATE];
    }

    /**
     * Set the location the "value" field of the answerDate element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAnswerDateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ANSWER_DATE] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime
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
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $answerDateTime
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAnswerDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $answerDateTime,
                                      ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $answerDateTime) {
            unset($this->answerDateTime);
            return $this;
        }
        if (!($answerDateTime instanceof FHIRDateTime)) {
            $answerDateTime = new FHIRDateTime(value: $answerDateTime);
        }
        $this->answerDateTime = $answerDateTime;
        if ($this->_valueXMLLocations[self::FIELD_ANSWER_DATE_TIME] !== $valueXMLLocation) {
            $this->_setAnswerDateTimeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the answerDateTime element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAnswerDateTimeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ANSWER_DATE_TIME];
    }

    /**
     * Set the location the "value" field of the answerDateTime element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAnswerDateTimeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ANSWER_DATE_TIME] = $valueXMLLocation;
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime
     */
    public function getAnswerTime(): null|FHIRTime
    {
        return $this->answerTime ?? null;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime $answerTime
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAnswerTime(null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $answerTime,
                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $answerTime) {
            unset($this->answerTime);
            return $this;
        }
        if (!($answerTime instanceof FHIRTime)) {
            $answerTime = new FHIRTime(value: $answerTime);
        }
        $this->answerTime = $answerTime;
        if ($this->_valueXMLLocations[self::FIELD_ANSWER_TIME] !== $valueXMLLocation) {
            $this->_setAnswerTimeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the answerTime element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAnswerTimeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ANSWER_TIME];
    }

    /**
     * Set the location the "value" field of the answerTime element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAnswerTimeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ANSWER_TIME] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getAnswerString(): null|FHIRString
    {
        return $this->answerString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $answerString
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAnswerString(null|string|FHIRStringPrimitive|FHIRString $answerString,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $answerString) {
            unset($this->answerString);
            return $this;
        }
        if (!($answerString instanceof FHIRString)) {
            $answerString = new FHIRString(value: $answerString);
        }
        $this->answerString = $answerString;
        if ($this->_valueXMLLocations[self::FIELD_ANSWER_STRING] !== $valueXMLLocation) {
            $this->_setAnswerStringValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the answerString element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAnswerStringValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ANSWER_STRING];
    }

    /**
     * Set the location the "value" field of the answerString element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAnswerStringValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ANSWER_STRING] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri
     */
    public function getAnswerUri(): null|FHIRUri
    {
        return $this->answerUri ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $answerUri
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAnswerUri(null|string|FHIRUriPrimitive|FHIRUri $answerUri,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $answerUri) {
            unset($this->answerUri);
            return $this;
        }
        if (!($answerUri instanceof FHIRUri)) {
            $answerUri = new FHIRUri(value: $answerUri);
        }
        $this->answerUri = $answerUri;
        if ($this->_valueXMLLocations[self::FIELD_ANSWER_URI] !== $valueXMLLocation) {
            $this->_setAnswerUriValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the answerUri element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAnswerUriValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ANSWER_URI];
    }

    /**
     * Set the location the "value" field of the answerUri element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAnswerUriValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ANSWER_URI] = $valueXMLLocation;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment
     */
    public function getAnswerAttachment(): null|FHIRAttachment
    {
        return $this->answerAttachment ?? null;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment $answerAttachment
     * @return static
     */
    public function setAnswerAttachment(null|FHIRAttachment $answerAttachment): self
    {
        if (null === $answerAttachment) {
            unset($this->answerAttachment);
            return $this;
        }
        $this->answerAttachment = $answerAttachment;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding
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
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding $answerCoding
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
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity
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
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $answerQuantity
     * @return static
     */
    public function setAnswerQuantity(null|FHIRDecimal|FHIRQuantity $answerQuantity): self
    {
        if (null === $answerQuantity) {
            unset($this->answerQuantity);
            return $this;
        }
        if (!($answerQuantity instanceof FHIRQuantity)) {
            $answerQuantity = new FHIRQuantity(value: $answerQuantity);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
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
     * An answer that the referenced question must match in order for the item to be
     * enabled.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $answerReference
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

    /* class_default.php:188 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
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
        if (isset($validationRules[self::FIELD_HAS_ANSWER])) {
            $v = $this->getHasAnswer();
            foreach($validationRules[self::FIELD_HAS_ANSWER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_HAS_ANSWER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HAS_ANSWER])) {
                        $errs[self::FIELD_HAS_ANSWER] = [];
                    }
                    $errs[self::FIELD_HAS_ANSWER][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_ANSWER_URI])) {
            $v = $this->getAnswerUri();
            foreach($validationRules[self::FIELD_ANSWER_URI] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ANSWER_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_URI])) {
                        $errs[self::FIELD_ANSWER_URI] = [];
                    }
                    $errs[self::FIELD_ANSWER_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER_ATTACHMENT])) {
            $v = $this->getAnswerAttachment();
            foreach($validationRules[self::FIELD_ANSWER_ATTACHMENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ANSWER_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_ATTACHMENT])) {
                        $errs[self::FIELD_ANSWER_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_ANSWER_ATTACHMENT][$rule] = $err;
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

    /* class_default.php:212 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen
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
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_QUESTION === $cen) {
                $type->setQuestion(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_HAS_ANSWER === $cen) {
                $type->setHasAnswer(FHIRBoolean::xmlUnserialize($ce, $config));
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
            } else if (self::FIELD_ANSWER_URI === $cen) {
                $type->setAnswerUri(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ANSWER_ATTACHMENT === $cen) {
                $type->setAnswerAttachment(FHIRAttachment::xmlUnserialize($ce, $config));
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
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_QUESTION])) {
            if (isset($type->question)) {
                $type->question->setValue((string)$attributes[self::FIELD_QUESTION]);
                $type->_setQuestionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setQuestion((string)$attributes[self::FIELD_QUESTION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_HAS_ANSWER])) {
            if (isset($type->hasAnswer)) {
                $type->hasAnswer->setValue((string)$attributes[self::FIELD_HAS_ANSWER]);
                $type->_setHasAnswerValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setHasAnswer((string)$attributes[self::FIELD_HAS_ANSWER], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_BOOLEAN])) {
            if (isset($type->answerBoolean)) {
                $type->answerBoolean->setValue((string)$attributes[self::FIELD_ANSWER_BOOLEAN]);
                $type->_setAnswerBooleanValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAnswerBoolean((string)$attributes[self::FIELD_ANSWER_BOOLEAN], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_DECIMAL])) {
            if (isset($type->answerDecimal)) {
                $type->answerDecimal->setValue((string)$attributes[self::FIELD_ANSWER_DECIMAL]);
                $type->_setAnswerDecimalValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAnswerDecimal((string)$attributes[self::FIELD_ANSWER_DECIMAL], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_INTEGER])) {
            if (isset($type->answerInteger)) {
                $type->answerInteger->setValue((string)$attributes[self::FIELD_ANSWER_INTEGER]);
                $type->_setAnswerIntegerValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAnswerInteger((string)$attributes[self::FIELD_ANSWER_INTEGER], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_DATE])) {
            if (isset($type->answerDate)) {
                $type->answerDate->setValue((string)$attributes[self::FIELD_ANSWER_DATE]);
                $type->_setAnswerDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAnswerDate((string)$attributes[self::FIELD_ANSWER_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_DATE_TIME])) {
            if (isset($type->answerDateTime)) {
                $type->answerDateTime->setValue((string)$attributes[self::FIELD_ANSWER_DATE_TIME]);
                $type->_setAnswerDateTimeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAnswerDateTime((string)$attributes[self::FIELD_ANSWER_DATE_TIME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_TIME])) {
            if (isset($type->answerTime)) {
                $type->answerTime->setValue((string)$attributes[self::FIELD_ANSWER_TIME]);
                $type->_setAnswerTimeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAnswerTime((string)$attributes[self::FIELD_ANSWER_TIME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_STRING])) {
            if (isset($type->answerString)) {
                $type->answerString->setValue((string)$attributes[self::FIELD_ANSWER_STRING]);
                $type->_setAnswerStringValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAnswerString((string)$attributes[self::FIELD_ANSWER_STRING], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_URI])) {
            if (isset($type->answerUri)) {
                $type->answerUri->setValue((string)$attributes[self::FIELD_ANSWER_URI]);
                $type->_setAnswerUriValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAnswerUri((string)$attributes[self::FIELD_ANSWER_URI], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
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
            $xw->writeAttribute(self::FIELD_QUESTION, $this->question->_getFormattedValue());
        }
        if (isset($this->hasAnswer) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_HAS_ANSWER]) {
            $xw->writeAttribute(self::FIELD_HAS_ANSWER, $this->hasAnswer->_getFormattedValue());
        }
        if (isset($this->answerBoolean) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ANSWER_BOOLEAN]) {
            $xw->writeAttribute(self::FIELD_ANSWER_BOOLEAN, $this->answerBoolean->_getFormattedValue());
        }
        if (isset($this->answerDecimal) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ANSWER_DECIMAL]) {
            $xw->writeAttribute(self::FIELD_ANSWER_DECIMAL, $this->answerDecimal->_getFormattedValue());
        }
        if (isset($this->answerInteger) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ANSWER_INTEGER]) {
            $xw->writeAttribute(self::FIELD_ANSWER_INTEGER, $this->answerInteger->_getFormattedValue());
        }
        if (isset($this->answerDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ANSWER_DATE]) {
            $xw->writeAttribute(self::FIELD_ANSWER_DATE, $this->answerDate->_getFormattedValue());
        }
        if (isset($this->answerDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ANSWER_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_ANSWER_DATE_TIME, $this->answerDateTime->_getFormattedValue());
        }
        if (isset($this->answerTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ANSWER_TIME]) {
            $xw->writeAttribute(self::FIELD_ANSWER_TIME, $this->answerTime->_getFormattedValue());
        }
        if (isset($this->answerString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ANSWER_STRING]) {
            $xw->writeAttribute(self::FIELD_ANSWER_STRING, $this->answerString->_getFormattedValue());
        }
        if (isset($this->answerUri) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ANSWER_URI]) {
            $xw->writeAttribute(self::FIELD_ANSWER_URI, $this->answerUri->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->question)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_QUESTION]
                || $this->question->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_QUESTION);
            $this->question->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_QUESTION]);
            $xw->endElement();
        }
        if (isset($this->hasAnswer)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_HAS_ANSWER]
                || $this->hasAnswer->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_HAS_ANSWER);
            $this->hasAnswer->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_HAS_ANSWER]);
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
        if (isset($this->answerUri)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ANSWER_URI]
                || $this->answerUri->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ANSWER_URI);
            $this->answerUri->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ANSWER_URI]);
            $xw->endElement();
        }
        if (isset($this->answerAttachment)) {
            $xw->startElement(self::FIELD_ANSWER_ATTACHMENT);
            $this->answerAttachment->xmlSerialize($xw, $config);
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
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
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
        if (isset($json[self::FIELD_QUESTION])
            || isset($json[self::FIELD_QUESTION_EXT])
            || array_key_exists(self::FIELD_QUESTION, $json)
            || array_key_exists(self::FIELD_QUESTION_EXT, $json)) {
            $value = $json[self::FIELD_QUESTION] ?? null;
            $type->setQuestion(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_QUESTION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_HAS_ANSWER])
            || isset($json[self::FIELD_HAS_ANSWER_EXT])
            || array_key_exists(self::FIELD_HAS_ANSWER, $json)
            || array_key_exists(self::FIELD_HAS_ANSWER_EXT, $json)) {
            $value = $json[self::FIELD_HAS_ANSWER] ?? null;
            $type->setHasAnswer(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_HAS_ANSWER_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ANSWER_BOOLEAN])
            || isset($json[self::FIELD_ANSWER_BOOLEAN_EXT])
            || array_key_exists(self::FIELD_ANSWER_BOOLEAN, $json)
            || array_key_exists(self::FIELD_ANSWER_BOOLEAN_EXT, $json)) {
            $value = $json[self::FIELD_ANSWER_BOOLEAN] ?? null;
            $type->setAnswerBoolean(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_ANSWER_BOOLEAN_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ANSWER_DECIMAL])
            || isset($json[self::FIELD_ANSWER_DECIMAL_EXT])
            || array_key_exists(self::FIELD_ANSWER_DECIMAL, $json)
            || array_key_exists(self::FIELD_ANSWER_DECIMAL_EXT, $json)) {
            $value = $json[self::FIELD_ANSWER_DECIMAL] ?? null;
            $type->setAnswerDecimal(FHIRDecimal::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDecimal::FIELD_VALUE => $value]) + ($json[self::FIELD_ANSWER_DECIMAL_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ANSWER_INTEGER])
            || isset($json[self::FIELD_ANSWER_INTEGER_EXT])
            || array_key_exists(self::FIELD_ANSWER_INTEGER, $json)
            || array_key_exists(self::FIELD_ANSWER_INTEGER_EXT, $json)) {
            $value = $json[self::FIELD_ANSWER_INTEGER] ?? null;
            $type->setAnswerInteger(FHIRInteger::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInteger::FIELD_VALUE => $value]) + ($json[self::FIELD_ANSWER_INTEGER_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ANSWER_DATE])
            || isset($json[self::FIELD_ANSWER_DATE_EXT])
            || array_key_exists(self::FIELD_ANSWER_DATE, $json)
            || array_key_exists(self::FIELD_ANSWER_DATE_EXT, $json)) {
            $value = $json[self::FIELD_ANSWER_DATE] ?? null;
            $type->setAnswerDate(FHIRDate::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDate::FIELD_VALUE => $value]) + ($json[self::FIELD_ANSWER_DATE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ANSWER_DATE_TIME])
            || isset($json[self::FIELD_ANSWER_DATE_TIME_EXT])
            || array_key_exists(self::FIELD_ANSWER_DATE_TIME, $json)
            || array_key_exists(self::FIELD_ANSWER_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_ANSWER_DATE_TIME] ?? null;
            $type->setAnswerDateTime(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_ANSWER_DATE_TIME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ANSWER_TIME])
            || isset($json[self::FIELD_ANSWER_TIME_EXT])
            || array_key_exists(self::FIELD_ANSWER_TIME, $json)
            || array_key_exists(self::FIELD_ANSWER_TIME_EXT, $json)) {
            $value = $json[self::FIELD_ANSWER_TIME] ?? null;
            $type->setAnswerTime(FHIRTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRTime::FIELD_VALUE => $value]) + ($json[self::FIELD_ANSWER_TIME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ANSWER_STRING])
            || isset($json[self::FIELD_ANSWER_STRING_EXT])
            || array_key_exists(self::FIELD_ANSWER_STRING, $json)
            || array_key_exists(self::FIELD_ANSWER_STRING_EXT, $json)) {
            $value = $json[self::FIELD_ANSWER_STRING] ?? null;
            $type->setAnswerString(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_ANSWER_STRING_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ANSWER_URI])
            || isset($json[self::FIELD_ANSWER_URI_EXT])
            || array_key_exists(self::FIELD_ANSWER_URI, $json)
            || array_key_exists(self::FIELD_ANSWER_URI_EXT, $json)) {
            $value = $json[self::FIELD_ANSWER_URI] ?? null;
            $type->setAnswerUri(FHIRUri::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUri::FIELD_VALUE => $value]) + ($json[self::FIELD_ANSWER_URI_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ANSWER_ATTACHMENT]) || array_key_exists(self::FIELD_ANSWER_ATTACHMENT, $json)) {
            $type->setAnswerAttachment(FHIRAttachment::jsonUnserialize($json[self::FIELD_ANSWER_ATTACHMENT], $config));
        }
        if (isset($json[self::FIELD_ANSWER_CODING]) || array_key_exists(self::FIELD_ANSWER_CODING, $json)) {
            $type->setAnswerCoding(FHIRCoding::jsonUnserialize($json[self::FIELD_ANSWER_CODING], $config));
        }
        if (isset($json[self::FIELD_ANSWER_QUANTITY]) || array_key_exists(self::FIELD_ANSWER_QUANTITY, $json)) {
            $type->setAnswerQuantity(FHIRQuantity::jsonUnserialize($json[self::FIELD_ANSWER_QUANTITY], $config));
        }
        if (isset($json[self::FIELD_ANSWER_REFERENCE]) || array_key_exists(self::FIELD_ANSWER_REFERENCE, $json)) {
            $type->setAnswerReference(FHIRReference::jsonUnserialize($json[self::FIELD_ANSWER_REFERENCE], $config));
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
        if (isset($this->hasAnswer)) {
            if (null !== ($val = $this->hasAnswer->getValue())) {
                $out->hasAnswer = $val;
            }
            if ($this->hasAnswer->_nonValueFieldDefined()) {
                $ext = $this->hasAnswer->jsonSerialize();
                unset($ext->value);
                $out->_hasAnswer = $ext;
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
        if (isset($this->answerUri)) {
            if (null !== ($val = $this->answerUri->getValue())) {
                $out->answerUri = $val;
            }
            if ($this->answerUri->_nonValueFieldDefined()) {
                $ext = $this->answerUri->jsonSerialize();
                unset($ext->value);
                $out->_answerUri = $ext;
            }
        }
        if (isset($this->answerAttachment)) {
            $out->answerAttachment = $this->answerAttachment;
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
    /* class_default.php:236 */
    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}