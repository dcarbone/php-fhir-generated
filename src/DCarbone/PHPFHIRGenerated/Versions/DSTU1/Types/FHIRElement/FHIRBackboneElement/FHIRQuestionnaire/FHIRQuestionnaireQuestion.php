<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: March 20th, 2025 02:50+0000
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
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBase64BinaryPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAddress;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBase64Binary;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRHumanName;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIROid;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRatio;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSampledData;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUuid;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIROidPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUuidPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;

/**
 * A structured set of questions and their answers. The Questionnaire may contain
 * questions, answers or both. The questions are ordered and grouped into coherent
 * subsets, corresponding to the structure of the grouping of the underlying
 * questions.
 */
class FHIRQuestionnaireQuestion extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION;

    /* class_default.php:56 */
    public const FIELD_NAME = 'name';
    public const FIELD_TEXT = 'text';
    public const FIELD_TEXT_EXT = '_text';
    public const FIELD_ANSWER_DECIMAL = 'answerDecimal';
    public const FIELD_ANSWER_DECIMAL_EXT = '_answerDecimal';
    public const FIELD_ANSWER_INTEGER = 'answerInteger';
    public const FIELD_ANSWER_INTEGER_EXT = '_answerInteger';
    public const FIELD_ANSWER_BOOLEAN = 'answerBoolean';
    public const FIELD_ANSWER_BOOLEAN_EXT = '_answerBoolean';
    public const FIELD_ANSWER_DATE = 'answerDate';
    public const FIELD_ANSWER_DATE_EXT = '_answerDate';
    public const FIELD_ANSWER_STRING = 'answerString';
    public const FIELD_ANSWER_STRING_EXT = '_answerString';
    public const FIELD_ANSWER_DATE_TIME = 'answerDateTime';
    public const FIELD_ANSWER_DATE_TIME_EXT = '_answerDateTime';
    public const FIELD_ANSWER_INSTANT = 'answerInstant';
    public const FIELD_ANSWER_INSTANT_EXT = '_answerInstant';
    public const FIELD_CHOICE = 'choice';
    public const FIELD_OPTIONS = 'options';
    public const FIELD_DATA_BOOLEAN = 'dataBoolean';
    public const FIELD_DATA_BOOLEAN_EXT = '_dataBoolean';
    public const FIELD_DATA_INTEGER = 'dataInteger';
    public const FIELD_DATA_INTEGER_EXT = '_dataInteger';
    public const FIELD_DATA_DECIMAL = 'dataDecimal';
    public const FIELD_DATA_DECIMAL_EXT = '_dataDecimal';
    public const FIELD_DATA_BASE_64BINARY = 'dataBase64Binary';
    public const FIELD_DATA_BASE_64BINARY_EXT = '_dataBase64Binary';
    public const FIELD_DATA_INSTANT = 'dataInstant';
    public const FIELD_DATA_INSTANT_EXT = '_dataInstant';
    public const FIELD_DATA_STRING = 'dataString';
    public const FIELD_DATA_STRING_EXT = '_dataString';
    public const FIELD_DATA_URI = 'dataUri';
    public const FIELD_DATA_URI_EXT = '_dataUri';
    public const FIELD_DATA_DATE = 'dataDate';
    public const FIELD_DATA_DATE_EXT = '_dataDate';
    public const FIELD_DATA_DATE_TIME = 'dataDateTime';
    public const FIELD_DATA_DATE_TIME_EXT = '_dataDateTime';
    public const FIELD_DATA_CODE = 'dataCode';
    public const FIELD_DATA_CODE_EXT = '_dataCode';
    public const FIELD_DATA_OID = 'dataOid';
    public const FIELD_DATA_OID_EXT = '_dataOid';
    public const FIELD_DATA_UUID = 'dataUuid';
    public const FIELD_DATA_UUID_EXT = '_dataUuid';
    public const FIELD_DATA_ID = 'dataId';
    public const FIELD_DATA_ID_EXT = '_dataId';
    public const FIELD_DATA_ATTACHMENT = 'dataAttachment';
    public const FIELD_DATA_IDENTIFIER = 'dataIdentifier';
    public const FIELD_DATA_CODEABLE_CONCEPT = 'dataCodeableConcept';
    public const FIELD_DATA_CODING = 'dataCoding';
    public const FIELD_DATA_QUANTITY = 'dataQuantity';
    public const FIELD_DATA_RANGE = 'dataRange';
    public const FIELD_DATA_PERIOD = 'dataPeriod';
    public const FIELD_DATA_RATIO = 'dataRatio';
    public const FIELD_DATA_RESOURCE = 'dataResource';
    public const FIELD_DATA_SAMPLED_DATA = 'dataSampledData';
    public const FIELD_DATA_HUMAN_NAME = 'dataHumanName';
    public const FIELD_DATA_ADDRESS = 'dataAddress';
    public const FIELD_DATA_CONTACT = 'dataContact';
    public const FIELD_DATA_SCHEDULE = 'dataSchedule';
    public const FIELD_REMARKS = 'remarks';
    public const FIELD_REMARKS_EXT = '_remarks';
    public const FIELD_GROUP = 'group';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_ID => [
            ValuePatternMatchRule::NAME => '/^[a-z0-9\\-\\.]{1,36}$/',
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_TEXT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ANSWER_DECIMAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ANSWER_INTEGER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ANSWER_BOOLEAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ANSWER_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ANSWER_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ANSWER_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ANSWER_INSTANT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DATA_BOOLEAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DATA_INTEGER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DATA_DECIMAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DATA_BASE_64BINARY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DATA_INSTANT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DATA_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DATA_URI => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DATA_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DATA_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DATA_CODE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DATA_OID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DATA_UUID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DATA_ID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_REMARKS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured name for the question that identifies this question within the
     * Questionnaire or Group.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $name;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text of the question as it is shown to the user.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $text;
    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $answerDecimal;
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $answerInteger;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $answerBoolean;
    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $answerDate;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $answerString;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $answerDateTime;
    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant 
     */
    protected FHIRInstant $answerInstant;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Selections made by the user from the list of options.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding[] 
     */
    protected array $choice;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to a valueset containing the possible options.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $options;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $dataBoolean;
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $dataInteger;
    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $dataDecimal;
    /**
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBase64Binary 
     */
    protected FHIRBase64Binary $dataBase64Binary;
    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant 
     */
    protected FHIRInstant $dataInstant;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $dataString;
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $dataUri;
    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $dataDate;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $dataDateTime;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode 
     */
    protected FHIRCode $dataCode;
    /**
     * An oid represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIROid 
     */
    protected FHIROid $dataOid;
    /**
     * A UUID, represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUuid 
     */
    protected FHIRUuid $dataUuid;
    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId 
     */
    protected FHIRId $dataId;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment 
     */
    protected FHIRAttachment $dataAttachment;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier 
     */
    protected FHIRIdentifier $dataIdentifier;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $dataCodeableConcept;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding 
     */
    protected FHIRCoding $dataCoding;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $dataQuantity;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $dataRange;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $dataPeriod;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRatio 
     */
    protected FHIRRatio $dataRatio;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $dataResource;
    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSampledData 
     */
    protected FHIRSampledData $dataSampledData;
    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRHumanName 
     */
    protected FHIRHumanName $dataHumanName;
    /**
     * There is a variety of postal address formats defined around the world. This
     * format defines a superset that is the basis for all addresses around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAddress 
     */
    protected FHIRAddress $dataAddress;
    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact 
     */
    protected FHIRContact $dataContact;
    /**
     * Specifies an event that may occur multiple times. Schedules are used for to
     * reord when things are expected or requested to occur.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule 
     */
    protected FHIRSchedule $dataSchedule;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The remark contains information about the answer given. This is additional
     * information about the answer the author wishes to convey, but should not be used
     * to contain information that is part of the answer itself.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $remarks;
    /**
     * A structured set of questions and their answers. The Questionnaire may contain
     * questions, answers or both. The questions are ordered and grouped into coherent
     * subsets, corresponding to the structure of the grouping of the underlying
     * questions.
     *
     * Nested group, containing nested question for this question. The order of groups
     * within the question is relevant.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup[] 
     */
    protected array $group;

    /* constructor.php:61 */
    /**
     * FHIRQuestionnaireQuestion Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $name
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $text
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal $answerDecimal
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $answerInteger
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $answerBoolean
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate $answerDate
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $answerString
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $answerDateTime
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant $answerInstant
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding[] $choice
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $options
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $dataBoolean
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $dataInteger
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal $dataDecimal
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBase64Binary $dataBase64Binary
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant $dataInstant
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $dataString
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri $dataUri
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate $dataDate
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $dataDateTime
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $dataCode
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIROid $dataOid
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUuidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUuid $dataUuid
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId $dataId
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment $dataAttachment
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier $dataIdentifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $dataCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding $dataCoding
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity $dataQuantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRange $dataRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod $dataPeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRatio $dataRatio
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $dataResource
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSampledData $dataSampledData
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRHumanName $dataHumanName
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAddress $dataAddress
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact $dataContact
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule $dataSchedule
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $remarks
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup[] $group
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $name = null,
                                null|string|FHIRStringPrimitive|FHIRString $text = null,
                                null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $answerDecimal = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $answerInteger = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $answerBoolean = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $answerDate = null,
                                null|string|FHIRStringPrimitive|FHIRString $answerString = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $answerDateTime = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $answerInstant = null,
                                null|iterable $choice = null,
                                null|FHIRResourceReference $options = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $dataBoolean = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $dataInteger = null,
                                null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $dataDecimal = null,
                                null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $dataBase64Binary = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $dataInstant = null,
                                null|string|FHIRStringPrimitive|FHIRString $dataString = null,
                                null|string|FHIRUriPrimitive|FHIRUri $dataUri = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $dataDate = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $dataDateTime = null,
                                null|string|FHIRCodePrimitive|FHIRCode $dataCode = null,
                                null|string|FHIROidPrimitive|FHIROid $dataOid = null,
                                null|string|FHIRUuidPrimitive|FHIRUuid $dataUuid = null,
                                null|string|FHIRIdPrimitive|FHIRId $dataId = null,
                                null|FHIRAttachment $dataAttachment = null,
                                null|FHIRIdentifier $dataIdentifier = null,
                                null|FHIRCodeableConcept $dataCodeableConcept = null,
                                null|FHIRCoding $dataCoding = null,
                                null|FHIRQuantity $dataQuantity = null,
                                null|FHIRRange $dataRange = null,
                                null|FHIRPeriod $dataPeriod = null,
                                null|FHIRRatio $dataRatio = null,
                                null|FHIRResourceReference $dataResource = null,
                                null|FHIRSampledData $dataSampledData = null,
                                null|FHIRHumanName $dataHumanName = null,
                                null|FHIRAddress $dataAddress = null,
                                null|FHIRContact $dataContact = null,
                                null|FHIRSchedule $dataSchedule = null,
                                null|string|FHIRStringPrimitive|FHIRString $remarks = null,
                                null|iterable $group = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $name) {
            $this->setName($name);
        }
        if (null !== $text) {
            $this->setText($text);
        }
        if (null !== $answerDecimal) {
            $this->setAnswerDecimal($answerDecimal);
        }
        if (null !== $answerInteger) {
            $this->setAnswerInteger($answerInteger);
        }
        if (null !== $answerBoolean) {
            $this->setAnswerBoolean($answerBoolean);
        }
        if (null !== $answerDate) {
            $this->setAnswerDate($answerDate);
        }
        if (null !== $answerString) {
            $this->setAnswerString($answerString);
        }
        if (null !== $answerDateTime) {
            $this->setAnswerDateTime($answerDateTime);
        }
        if (null !== $answerInstant) {
            $this->setAnswerInstant($answerInstant);
        }
        if (null !== $choice) {
            $this->setChoice(...$choice);
        }
        if (null !== $options) {
            $this->setOptions($options);
        }
        if (null !== $dataBoolean) {
            $this->setDataBoolean($dataBoolean);
        }
        if (null !== $dataInteger) {
            $this->setDataInteger($dataInteger);
        }
        if (null !== $dataDecimal) {
            $this->setDataDecimal($dataDecimal);
        }
        if (null !== $dataBase64Binary) {
            $this->setDataBase64Binary($dataBase64Binary);
        }
        if (null !== $dataInstant) {
            $this->setDataInstant($dataInstant);
        }
        if (null !== $dataString) {
            $this->setDataString($dataString);
        }
        if (null !== $dataUri) {
            $this->setDataUri($dataUri);
        }
        if (null !== $dataDate) {
            $this->setDataDate($dataDate);
        }
        if (null !== $dataDateTime) {
            $this->setDataDateTime($dataDateTime);
        }
        if (null !== $dataCode) {
            $this->setDataCode($dataCode);
        }
        if (null !== $dataOid) {
            $this->setDataOid($dataOid);
        }
        if (null !== $dataUuid) {
            $this->setDataUuid($dataUuid);
        }
        if (null !== $dataId) {
            $this->setDataId($dataId);
        }
        if (null !== $dataAttachment) {
            $this->setDataAttachment($dataAttachment);
        }
        if (null !== $dataIdentifier) {
            $this->setDataIdentifier($dataIdentifier);
        }
        if (null !== $dataCodeableConcept) {
            $this->setDataCodeableConcept($dataCodeableConcept);
        }
        if (null !== $dataCoding) {
            $this->setDataCoding($dataCoding);
        }
        if (null !== $dataQuantity) {
            $this->setDataQuantity($dataQuantity);
        }
        if (null !== $dataRange) {
            $this->setDataRange($dataRange);
        }
        if (null !== $dataPeriod) {
            $this->setDataPeriod($dataPeriod);
        }
        if (null !== $dataRatio) {
            $this->setDataRatio($dataRatio);
        }
        if (null !== $dataResource) {
            $this->setDataResource($dataResource);
        }
        if (null !== $dataSampledData) {
            $this->setDataSampledData($dataSampledData);
        }
        if (null !== $dataHumanName) {
            $this->setDataHumanName($dataHumanName);
        }
        if (null !== $dataAddress) {
            $this->setDataAddress($dataAddress);
        }
        if (null !== $dataContact) {
            $this->setDataContact($dataContact);
        }
        if (null !== $dataSchedule) {
            $this->setDataSchedule($dataSchedule);
        }
        if (null !== $remarks) {
            $this->setRemarks($remarks);
        }
        if (null !== $group) {
            $this->setGroup(...$group);
        }
    }

    /* class_default.php:144 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:173 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured name for the question that identifies this question within the
     * Questionnaire or Group.
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
     * Structured name for the question that identifies this question within the
     * Questionnaire or Group.
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
     * Text of the question as it is shown to the user.
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
     * Text of the question as it is shown to the user.
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
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal
     */
    public function getAnswerDecimal(): null|FHIRDecimal
    {
        return $this->answerDecimal ?? null;
    }

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal $answerDecimal
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger
     */
    public function getAnswerInteger(): null|FHIRInteger
    {
        return $this->answerInteger ?? null;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $answerInteger
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean
     */
    public function getAnswerBoolean(): null|FHIRBoolean
    {
        return $this->answerBoolean ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $answerBoolean
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
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate
     */
    public function getAnswerDate(): null|FHIRDate
    {
        return $this->answerDate ?? null;
    }

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate $answerDate
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
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getAnswerString(): null|FHIRString
    {
        return $this->answerString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $answerString
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime
     */
    public function getAnswerDateTime(): null|FHIRDateTime
    {
        return $this->answerDateTime ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $answerDateTime
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
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant
     */
    public function getAnswerInstant(): null|FHIRInstant
    {
        return $this->answerInstant ?? null;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant $answerInstant
     * @return static
     */
    public function setAnswerInstant(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $answerInstant): self
    {
        if (null === $answerInstant) {
            unset($this->answerInstant);
            return $this;
        }
        if (!($answerInstant instanceof FHIRInstant)) {
            $answerInstant = new FHIRInstant(value: $answerInstant);
        }
        $this->answerInstant = $answerInstant;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Selections made by the user from the list of options.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding[]
     */
    public function getChoice(): array
    {
        return $this->choice ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding>
     */
    public function getChoiceIterator(): iterable
    {
        if (!isset($this->choice)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->choice);
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Selections made by the user from the list of options.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding $choice
     * @return static
     */
    public function addChoice(FHIRCoding $choice): self
    {
        if (!isset($this->choice)) {
            $this->choice = [];
        }
        $this->choice[] = $choice;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Selections made by the user from the list of options.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding ...$choice
     * @return static
     */
    public function setChoice(FHIRCoding ...$choice): self
    {
        if ([] === $choice) {
            unset($this->choice);
            return $this;
        }
        $this->choice = $choice;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to a valueset containing the possible options.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getOptions(): null|FHIRResourceReference
    {
        return $this->options ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to a valueset containing the possible options.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $options
     * @return static
     */
    public function setOptions(null|FHIRResourceReference $options): self
    {
        if (null === $options) {
            unset($this->options);
            return $this;
        }
        $this->options = $options;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean
     */
    public function getDataBoolean(): null|FHIRBoolean
    {
        return $this->dataBoolean ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $dataBoolean
     * @return static
     */
    public function setDataBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $dataBoolean): self
    {
        if (null === $dataBoolean) {
            unset($this->dataBoolean);
            return $this;
        }
        if (!($dataBoolean instanceof FHIRBoolean)) {
            $dataBoolean = new FHIRBoolean(value: $dataBoolean);
        }
        $this->dataBoolean = $dataBoolean;
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger
     */
    public function getDataInteger(): null|FHIRInteger
    {
        return $this->dataInteger ?? null;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $dataInteger
     * @return static
     */
    public function setDataInteger(null|string|float|FHIRIntegerPrimitive|FHIRInteger $dataInteger): self
    {
        if (null === $dataInteger) {
            unset($this->dataInteger);
            return $this;
        }
        if (!($dataInteger instanceof FHIRInteger)) {
            $dataInteger = new FHIRInteger(value: $dataInteger);
        }
        $this->dataInteger = $dataInteger;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal
     */
    public function getDataDecimal(): null|FHIRDecimal
    {
        return $this->dataDecimal ?? null;
    }

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal $dataDecimal
     * @return static
     */
    public function setDataDecimal(null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $dataDecimal): self
    {
        if (null === $dataDecimal) {
            unset($this->dataDecimal);
            return $this;
        }
        if (!($dataDecimal instanceof FHIRDecimal)) {
            $dataDecimal = new FHIRDecimal(value: $dataDecimal);
        }
        $this->dataDecimal = $dataDecimal;
        return $this;
    }

    /**
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBase64Binary
     */
    public function getDataBase64Binary(): null|FHIRBase64Binary
    {
        return $this->dataBase64Binary ?? null;
    }

    /**
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBase64Binary $dataBase64Binary
     * @return static
     */
    public function setDataBase64Binary(null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $dataBase64Binary): self
    {
        if (null === $dataBase64Binary) {
            unset($this->dataBase64Binary);
            return $this;
        }
        if (!($dataBase64Binary instanceof FHIRBase64Binary)) {
            $dataBase64Binary = new FHIRBase64Binary(value: $dataBase64Binary);
        }
        $this->dataBase64Binary = $dataBase64Binary;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant
     */
    public function getDataInstant(): null|FHIRInstant
    {
        return $this->dataInstant ?? null;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant $dataInstant
     * @return static
     */
    public function setDataInstant(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $dataInstant): self
    {
        if (null === $dataInstant) {
            unset($this->dataInstant);
            return $this;
        }
        if (!($dataInstant instanceof FHIRInstant)) {
            $dataInstant = new FHIRInstant(value: $dataInstant);
        }
        $this->dataInstant = $dataInstant;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getDataString(): null|FHIRString
    {
        return $this->dataString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $dataString
     * @return static
     */
    public function setDataString(null|string|FHIRStringPrimitive|FHIRString $dataString): self
    {
        if (null === $dataString) {
            unset($this->dataString);
            return $this;
        }
        if (!($dataString instanceof FHIRString)) {
            $dataString = new FHIRString(value: $dataString);
        }
        $this->dataString = $dataString;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri
     */
    public function getDataUri(): null|FHIRUri
    {
        return $this->dataUri ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri $dataUri
     * @return static
     */
    public function setDataUri(null|string|FHIRUriPrimitive|FHIRUri $dataUri): self
    {
        if (null === $dataUri) {
            unset($this->dataUri);
            return $this;
        }
        if (!($dataUri instanceof FHIRUri)) {
            $dataUri = new FHIRUri(value: $dataUri);
        }
        $this->dataUri = $dataUri;
        return $this;
    }

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate
     */
    public function getDataDate(): null|FHIRDate
    {
        return $this->dataDate ?? null;
    }

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate $dataDate
     * @return static
     */
    public function setDataDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $dataDate): self
    {
        if (null === $dataDate) {
            unset($this->dataDate);
            return $this;
        }
        if (!($dataDate instanceof FHIRDate)) {
            $dataDate = new FHIRDate(value: $dataDate);
        }
        $this->dataDate = $dataDate;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime
     */
    public function getDataDateTime(): null|FHIRDateTime
    {
        return $this->dataDateTime ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $dataDateTime
     * @return static
     */
    public function setDataDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $dataDateTime): self
    {
        if (null === $dataDateTime) {
            unset($this->dataDateTime);
            return $this;
        }
        if (!($dataDateTime instanceof FHIRDateTime)) {
            $dataDateTime = new FHIRDateTime(value: $dataDateTime);
        }
        $this->dataDateTime = $dataDateTime;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode
     */
    public function getDataCode(): null|FHIRCode
    {
        return $this->dataCode ?? null;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $dataCode
     * @return static
     */
    public function setDataCode(null|string|FHIRCodePrimitive|FHIRCode $dataCode): self
    {
        if (null === $dataCode) {
            unset($this->dataCode);
            return $this;
        }
        if (!($dataCode instanceof FHIRCode)) {
            $dataCode = new FHIRCode(value: $dataCode);
        }
        $this->dataCode = $dataCode;
        return $this;
    }

    /**
     * An oid represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIROid
     */
    public function getDataOid(): null|FHIROid
    {
        return $this->dataOid ?? null;
    }

    /**
     * An oid represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIROid $dataOid
     * @return static
     */
    public function setDataOid(null|string|FHIROidPrimitive|FHIROid $dataOid): self
    {
        if (null === $dataOid) {
            unset($this->dataOid);
            return $this;
        }
        if (!($dataOid instanceof FHIROid)) {
            $dataOid = new FHIROid(value: $dataOid);
        }
        $this->dataOid = $dataOid;
        return $this;
    }

    /**
     * A UUID, represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUuid
     */
    public function getDataUuid(): null|FHIRUuid
    {
        return $this->dataUuid ?? null;
    }

    /**
     * A UUID, represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUuidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUuid $dataUuid
     * @return static
     */
    public function setDataUuid(null|string|FHIRUuidPrimitive|FHIRUuid $dataUuid): self
    {
        if (null === $dataUuid) {
            unset($this->dataUuid);
            return $this;
        }
        if (!($dataUuid instanceof FHIRUuid)) {
            $dataUuid = new FHIRUuid(value: $dataUuid);
        }
        $this->dataUuid = $dataUuid;
        return $this;
    }

    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId
     */
    public function getDataId(): null|FHIRId
    {
        return $this->dataId ?? null;
    }

    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId $dataId
     * @return static
     */
    public function setDataId(null|string|FHIRIdPrimitive|FHIRId $dataId): self
    {
        if (null === $dataId) {
            unset($this->dataId);
            return $this;
        }
        if (!($dataId instanceof FHIRId)) {
            $dataId = new FHIRId(value: $dataId);
        }
        $this->dataId = $dataId;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment
     */
    public function getDataAttachment(): null|FHIRAttachment
    {
        return $this->dataAttachment ?? null;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment $dataAttachment
     * @return static
     */
    public function setDataAttachment(null|FHIRAttachment $dataAttachment): self
    {
        if (null === $dataAttachment) {
            unset($this->dataAttachment);
            return $this;
        }
        $this->dataAttachment = $dataAttachment;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier
     */
    public function getDataIdentifier(): null|FHIRIdentifier
    {
        return $this->dataIdentifier ?? null;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier $dataIdentifier
     * @return static
     */
    public function setDataIdentifier(null|FHIRIdentifier $dataIdentifier): self
    {
        if (null === $dataIdentifier) {
            unset($this->dataIdentifier);
            return $this;
        }
        $this->dataIdentifier = $dataIdentifier;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getDataCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->dataCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $dataCodeableConcept
     * @return static
     */
    public function setDataCodeableConcept(null|FHIRCodeableConcept $dataCodeableConcept): self
    {
        if (null === $dataCodeableConcept) {
            unset($this->dataCodeableConcept);
            return $this;
        }
        $this->dataCodeableConcept = $dataCodeableConcept;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding
     */
    public function getDataCoding(): null|FHIRCoding
    {
        return $this->dataCoding ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding $dataCoding
     * @return static
     */
    public function setDataCoding(null|FHIRCoding $dataCoding): self
    {
        if (null === $dataCoding) {
            unset($this->dataCoding);
            return $this;
        }
        $this->dataCoding = $dataCoding;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity
     */
    public function getDataQuantity(): null|FHIRQuantity
    {
        return $this->dataQuantity ?? null;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity $dataQuantity
     * @return static
     */
    public function setDataQuantity(null|FHIRQuantity $dataQuantity): self
    {
        if (null === $dataQuantity) {
            unset($this->dataQuantity);
            return $this;
        }
        $this->dataQuantity = $dataQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRange
     */
    public function getDataRange(): null|FHIRRange
    {
        return $this->dataRange ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRange $dataRange
     * @return static
     */
    public function setDataRange(null|FHIRRange $dataRange): self
    {
        if (null === $dataRange) {
            unset($this->dataRange);
            return $this;
        }
        $this->dataRange = $dataRange;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod
     */
    public function getDataPeriod(): null|FHIRPeriod
    {
        return $this->dataPeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod $dataPeriod
     * @return static
     */
    public function setDataPeriod(null|FHIRPeriod $dataPeriod): self
    {
        if (null === $dataPeriod) {
            unset($this->dataPeriod);
            return $this;
        }
        $this->dataPeriod = $dataPeriod;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRatio
     */
    public function getDataRatio(): null|FHIRRatio
    {
        return $this->dataRatio ?? null;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRatio $dataRatio
     * @return static
     */
    public function setDataRatio(null|FHIRRatio $dataRatio): self
    {
        if (null === $dataRatio) {
            unset($this->dataRatio);
            return $this;
        }
        $this->dataRatio = $dataRatio;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getDataResource(): null|FHIRResourceReference
    {
        return $this->dataResource ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $dataResource
     * @return static
     */
    public function setDataResource(null|FHIRResourceReference $dataResource): self
    {
        if (null === $dataResource) {
            unset($this->dataResource);
            return $this;
        }
        $this->dataResource = $dataResource;
        return $this;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSampledData
     */
    public function getDataSampledData(): null|FHIRSampledData
    {
        return $this->dataSampledData ?? null;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSampledData $dataSampledData
     * @return static
     */
    public function setDataSampledData(null|FHIRSampledData $dataSampledData): self
    {
        if (null === $dataSampledData) {
            unset($this->dataSampledData);
            return $this;
        }
        $this->dataSampledData = $dataSampledData;
        return $this;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRHumanName
     */
    public function getDataHumanName(): null|FHIRHumanName
    {
        return $this->dataHumanName ?? null;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRHumanName $dataHumanName
     * @return static
     */
    public function setDataHumanName(null|FHIRHumanName $dataHumanName): self
    {
        if (null === $dataHumanName) {
            unset($this->dataHumanName);
            return $this;
        }
        $this->dataHumanName = $dataHumanName;
        return $this;
    }

    /**
     * There is a variety of postal address formats defined around the world. This
     * format defines a superset that is the basis for all addresses around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAddress
     */
    public function getDataAddress(): null|FHIRAddress
    {
        return $this->dataAddress ?? null;
    }

    /**
     * There is a variety of postal address formats defined around the world. This
     * format defines a superset that is the basis for all addresses around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAddress $dataAddress
     * @return static
     */
    public function setDataAddress(null|FHIRAddress $dataAddress): self
    {
        if (null === $dataAddress) {
            unset($this->dataAddress);
            return $this;
        }
        $this->dataAddress = $dataAddress;
        return $this;
    }

    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact
     */
    public function getDataContact(): null|FHIRContact
    {
        return $this->dataContact ?? null;
    }

    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact $dataContact
     * @return static
     */
    public function setDataContact(null|FHIRContact $dataContact): self
    {
        if (null === $dataContact) {
            unset($this->dataContact);
            return $this;
        }
        $this->dataContact = $dataContact;
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Schedules are used for to
     * reord when things are expected or requested to occur.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule
     */
    public function getDataSchedule(): null|FHIRSchedule
    {
        return $this->dataSchedule ?? null;
    }

    /**
     * Specifies an event that may occur multiple times. Schedules are used for to
     * reord when things are expected or requested to occur.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule $dataSchedule
     * @return static
     */
    public function setDataSchedule(null|FHIRSchedule $dataSchedule): self
    {
        if (null === $dataSchedule) {
            unset($this->dataSchedule);
            return $this;
        }
        $this->dataSchedule = $dataSchedule;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The remark contains information about the answer given. This is additional
     * information about the answer the author wishes to convey, but should not be used
     * to contain information that is part of the answer itself.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getRemarks(): null|FHIRString
    {
        return $this->remarks ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The remark contains information about the answer given. This is additional
     * information about the answer the author wishes to convey, but should not be used
     * to contain information that is part of the answer itself.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $remarks
     * @return static
     */
    public function setRemarks(null|string|FHIRStringPrimitive|FHIRString $remarks): self
    {
        if (null === $remarks) {
            unset($this->remarks);
            return $this;
        }
        if (!($remarks instanceof FHIRString)) {
            $remarks = new FHIRString(value: $remarks);
        }
        $this->remarks = $remarks;
        return $this;
    }

    /**
     * A structured set of questions and their answers. The Questionnaire may contain
     * questions, answers or both. The questions are ordered and grouped into coherent
     * subsets, corresponding to the structure of the grouping of the underlying
     * questions.
     *
     * Nested group, containing nested question for this question. The order of groups
     * within the question is relevant.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup[]
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
     * Nested group, containing nested question for this question. The order of groups
     * within the question is relevant.
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
     * Nested group, containing nested question for this question. The order of groups
     * within the question is relevant.
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

    /* class_default.php:200 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRQuestionnaireQuestion)) {
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
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ANSWER_DECIMAL === $cen) {
                $type->setAnswerDecimal(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ANSWER_INTEGER === $cen) {
                $type->setAnswerInteger(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ANSWER_BOOLEAN === $cen) {
                $type->setAnswerBoolean(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ANSWER_DATE === $cen) {
                $type->setAnswerDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ANSWER_STRING === $cen) {
                $type->setAnswerString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ANSWER_DATE_TIME === $cen) {
                $type->setAnswerDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ANSWER_INSTANT === $cen) {
                $type->setAnswerInstant(FHIRInstant::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CHOICE === $cen) {
                $type->addChoice(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OPTIONS === $cen) {
                $type->setOptions(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_BOOLEAN === $cen) {
                $type->setDataBoolean(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_INTEGER === $cen) {
                $type->setDataInteger(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_DECIMAL === $cen) {
                $type->setDataDecimal(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_BASE_64BINARY === $cen) {
                $type->setDataBase64Binary(FHIRBase64Binary::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_INSTANT === $cen) {
                $type->setDataInstant(FHIRInstant::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_STRING === $cen) {
                $type->setDataString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_URI === $cen) {
                $type->setDataUri(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_DATE === $cen) {
                $type->setDataDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_DATE_TIME === $cen) {
                $type->setDataDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_CODE === $cen) {
                $type->setDataCode(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_OID === $cen) {
                $type->setDataOid(FHIROid::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_UUID === $cen) {
                $type->setDataUuid(FHIRUuid::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_ID === $cen) {
                $type->setDataId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_ATTACHMENT === $cen) {
                $type->setDataAttachment(FHIRAttachment::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_IDENTIFIER === $cen) {
                $type->setDataIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_CODEABLE_CONCEPT === $cen) {
                $type->setDataCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_CODING === $cen) {
                $type->setDataCoding(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_QUANTITY === $cen) {
                $type->setDataQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_RANGE === $cen) {
                $type->setDataRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_PERIOD === $cen) {
                $type->setDataPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_RATIO === $cen) {
                $type->setDataRatio(FHIRRatio::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_RESOURCE === $cen) {
                $type->setDataResource(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_SAMPLED_DATA === $cen) {
                $type->setDataSampledData(FHIRSampledData::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_HUMAN_NAME === $cen) {
                $type->setDataHumanName(FHIRHumanName::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_ADDRESS === $cen) {
                $type->setDataAddress(FHIRAddress::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_CONTACT === $cen) {
                $type->setDataContact(FHIRContact::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_SCHEDULE === $cen) {
                $type->setDataSchedule(FHIRSchedule::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REMARKS === $cen) {
                $type->setRemarks(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_GROUP === $cen) {
                $type->addGroup(FHIRQuestionnaireGroup::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TEXT])) {
            if (isset($type->text)) {
                $type->text->setValue((string)$attributes[self::FIELD_TEXT]);
            } else {
                $type->setText((string)$attributes[self::FIELD_TEXT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TEXT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_ANSWER_BOOLEAN])) {
            if (isset($type->answerBoolean)) {
                $type->answerBoolean->setValue((string)$attributes[self::FIELD_ANSWER_BOOLEAN]);
            } else {
                $type->setAnswerBoolean((string)$attributes[self::FIELD_ANSWER_BOOLEAN]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ANSWER_BOOLEAN, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ANSWER_DATE])) {
            if (isset($type->answerDate)) {
                $type->answerDate->setValue((string)$attributes[self::FIELD_ANSWER_DATE]);
            } else {
                $type->setAnswerDate((string)$attributes[self::FIELD_ANSWER_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ANSWER_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ANSWER_STRING])) {
            if (isset($type->answerString)) {
                $type->answerString->setValue((string)$attributes[self::FIELD_ANSWER_STRING]);
            } else {
                $type->setAnswerString((string)$attributes[self::FIELD_ANSWER_STRING]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ANSWER_STRING, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ANSWER_DATE_TIME])) {
            if (isset($type->answerDateTime)) {
                $type->answerDateTime->setValue((string)$attributes[self::FIELD_ANSWER_DATE_TIME]);
            } else {
                $type->setAnswerDateTime((string)$attributes[self::FIELD_ANSWER_DATE_TIME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ANSWER_DATE_TIME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ANSWER_INSTANT])) {
            if (isset($type->answerInstant)) {
                $type->answerInstant->setValue((string)$attributes[self::FIELD_ANSWER_INSTANT]);
            } else {
                $type->setAnswerInstant((string)$attributes[self::FIELD_ANSWER_INSTANT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ANSWER_INSTANT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DATA_BOOLEAN])) {
            if (isset($type->dataBoolean)) {
                $type->dataBoolean->setValue((string)$attributes[self::FIELD_DATA_BOOLEAN]);
            } else {
                $type->setDataBoolean((string)$attributes[self::FIELD_DATA_BOOLEAN]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DATA_BOOLEAN, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DATA_INTEGER])) {
            if (isset($type->dataInteger)) {
                $type->dataInteger->setValue((string)$attributes[self::FIELD_DATA_INTEGER]);
            } else {
                $type->setDataInteger((string)$attributes[self::FIELD_DATA_INTEGER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DATA_INTEGER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DATA_DECIMAL])) {
            if (isset($type->dataDecimal)) {
                $type->dataDecimal->setValue((string)$attributes[self::FIELD_DATA_DECIMAL]);
            } else {
                $type->setDataDecimal((string)$attributes[self::FIELD_DATA_DECIMAL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DATA_DECIMAL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DATA_BASE_64BINARY])) {
            if (isset($type->dataBase64Binary)) {
                $type->dataBase64Binary->setValue((string)$attributes[self::FIELD_DATA_BASE_64BINARY]);
            } else {
                $type->setDataBase64Binary((string)$attributes[self::FIELD_DATA_BASE_64BINARY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DATA_BASE_64BINARY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DATA_INSTANT])) {
            if (isset($type->dataInstant)) {
                $type->dataInstant->setValue((string)$attributes[self::FIELD_DATA_INSTANT]);
            } else {
                $type->setDataInstant((string)$attributes[self::FIELD_DATA_INSTANT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DATA_INSTANT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DATA_STRING])) {
            if (isset($type->dataString)) {
                $type->dataString->setValue((string)$attributes[self::FIELD_DATA_STRING]);
            } else {
                $type->setDataString((string)$attributes[self::FIELD_DATA_STRING]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DATA_STRING, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DATA_URI])) {
            if (isset($type->dataUri)) {
                $type->dataUri->setValue((string)$attributes[self::FIELD_DATA_URI]);
            } else {
                $type->setDataUri((string)$attributes[self::FIELD_DATA_URI]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DATA_URI, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DATA_DATE])) {
            if (isset($type->dataDate)) {
                $type->dataDate->setValue((string)$attributes[self::FIELD_DATA_DATE]);
            } else {
                $type->setDataDate((string)$attributes[self::FIELD_DATA_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DATA_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DATA_DATE_TIME])) {
            if (isset($type->dataDateTime)) {
                $type->dataDateTime->setValue((string)$attributes[self::FIELD_DATA_DATE_TIME]);
            } else {
                $type->setDataDateTime((string)$attributes[self::FIELD_DATA_DATE_TIME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DATA_DATE_TIME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DATA_CODE])) {
            if (isset($type->dataCode)) {
                $type->dataCode->setValue((string)$attributes[self::FIELD_DATA_CODE]);
            } else {
                $type->setDataCode((string)$attributes[self::FIELD_DATA_CODE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DATA_CODE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DATA_OID])) {
            if (isset($type->dataOid)) {
                $type->dataOid->setValue((string)$attributes[self::FIELD_DATA_OID]);
            } else {
                $type->setDataOid((string)$attributes[self::FIELD_DATA_OID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DATA_OID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DATA_UUID])) {
            if (isset($type->dataUuid)) {
                $type->dataUuid->setValue((string)$attributes[self::FIELD_DATA_UUID]);
            } else {
                $type->setDataUuid((string)$attributes[self::FIELD_DATA_UUID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DATA_UUID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DATA_ID])) {
            if (isset($type->dataId)) {
                $type->dataId->setValue((string)$attributes[self::FIELD_DATA_ID]);
            } else {
                $type->setDataId((string)$attributes[self::FIELD_DATA_ID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DATA_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_REMARKS])) {
            if (isset($type->remarks)) {
                $type->remarks->setValue((string)$attributes[self::FIELD_REMARKS]);
            } else {
                $type->setRemarks((string)$attributes[self::FIELD_REMARKS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_REMARKS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->text) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TEXT]) {
            $xw->writeAttribute(self::FIELD_TEXT, $this->text->_getValueAsString());
        }
        if (isset($this->answerDecimal) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ANSWER_DECIMAL]) {
            $xw->writeAttribute(self::FIELD_ANSWER_DECIMAL, $this->answerDecimal->_getValueAsString());
        }
        if (isset($this->answerInteger) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ANSWER_INTEGER]) {
            $xw->writeAttribute(self::FIELD_ANSWER_INTEGER, $this->answerInteger->_getValueAsString());
        }
        if (isset($this->answerBoolean) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ANSWER_BOOLEAN]) {
            $xw->writeAttribute(self::FIELD_ANSWER_BOOLEAN, $this->answerBoolean->_getValueAsString());
        }
        if (isset($this->answerDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ANSWER_DATE]) {
            $xw->writeAttribute(self::FIELD_ANSWER_DATE, $this->answerDate->_getValueAsString());
        }
        if (isset($this->answerString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ANSWER_STRING]) {
            $xw->writeAttribute(self::FIELD_ANSWER_STRING, $this->answerString->_getValueAsString());
        }
        if (isset($this->answerDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ANSWER_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_ANSWER_DATE_TIME, $this->answerDateTime->_getValueAsString());
        }
        if (isset($this->answerInstant) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ANSWER_INSTANT]) {
            $xw->writeAttribute(self::FIELD_ANSWER_INSTANT, $this->answerInstant->_getValueAsString());
        }
        if (isset($this->dataBoolean) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATA_BOOLEAN]) {
            $xw->writeAttribute(self::FIELD_DATA_BOOLEAN, $this->dataBoolean->_getValueAsString());
        }
        if (isset($this->dataInteger) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATA_INTEGER]) {
            $xw->writeAttribute(self::FIELD_DATA_INTEGER, $this->dataInteger->_getValueAsString());
        }
        if (isset($this->dataDecimal) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATA_DECIMAL]) {
            $xw->writeAttribute(self::FIELD_DATA_DECIMAL, $this->dataDecimal->_getValueAsString());
        }
        if (isset($this->dataBase64Binary) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATA_BASE_64BINARY]) {
            $xw->writeAttribute(self::FIELD_DATA_BASE_64BINARY, $this->dataBase64Binary->_getValueAsString());
        }
        if (isset($this->dataInstant) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATA_INSTANT]) {
            $xw->writeAttribute(self::FIELD_DATA_INSTANT, $this->dataInstant->_getValueAsString());
        }
        if (isset($this->dataString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATA_STRING]) {
            $xw->writeAttribute(self::FIELD_DATA_STRING, $this->dataString->_getValueAsString());
        }
        if (isset($this->dataUri) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATA_URI]) {
            $xw->writeAttribute(self::FIELD_DATA_URI, $this->dataUri->_getValueAsString());
        }
        if (isset($this->dataDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATA_DATE]) {
            $xw->writeAttribute(self::FIELD_DATA_DATE, $this->dataDate->_getValueAsString());
        }
        if (isset($this->dataDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATA_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_DATA_DATE_TIME, $this->dataDateTime->_getValueAsString());
        }
        if (isset($this->dataCode) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATA_CODE]) {
            $xw->writeAttribute(self::FIELD_DATA_CODE, $this->dataCode->_getValueAsString());
        }
        if (isset($this->dataOid) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATA_OID]) {
            $xw->writeAttribute(self::FIELD_DATA_OID, $this->dataOid->_getValueAsString());
        }
        if (isset($this->dataUuid) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATA_UUID]) {
            $xw->writeAttribute(self::FIELD_DATA_UUID, $this->dataUuid->_getValueAsString());
        }
        if (isset($this->dataId) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATA_ID]) {
            $xw->writeAttribute(self::FIELD_DATA_ID, $this->dataId->_getValueAsString());
        }
        if (isset($this->remarks) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_REMARKS]) {
            $xw->writeAttribute(self::FIELD_REMARKS, $this->remarks->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->name)) {
            $xw->startElement(self::FIELD_NAME);
            $this->name->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->text)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TEXT]
                || $this->text->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TEXT);
            $this->text->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TEXT]);
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
        if (isset($this->answerBoolean)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ANSWER_BOOLEAN]
                || $this->answerBoolean->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ANSWER_BOOLEAN);
            $this->answerBoolean->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ANSWER_BOOLEAN]);
            $xw->endElement();
        }
        if (isset($this->answerDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ANSWER_DATE]
                || $this->answerDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ANSWER_DATE);
            $this->answerDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ANSWER_DATE]);
            $xw->endElement();
        }
        if (isset($this->answerString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ANSWER_STRING]
                || $this->answerString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ANSWER_STRING);
            $this->answerString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ANSWER_STRING]);
            $xw->endElement();
        }
        if (isset($this->answerDateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ANSWER_DATE_TIME]
                || $this->answerDateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ANSWER_DATE_TIME);
            $this->answerDateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ANSWER_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->answerInstant)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ANSWER_INSTANT]
                || $this->answerInstant->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ANSWER_INSTANT);
            $this->answerInstant->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ANSWER_INSTANT]);
            $xw->endElement();
        }
        if (isset($this->choice)) {
            foreach ($this->choice as $v) {
                $xw->startElement(self::FIELD_CHOICE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->options)) {
            $xw->startElement(self::FIELD_OPTIONS);
            $this->options->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dataBoolean)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATA_BOOLEAN]
                || $this->dataBoolean->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATA_BOOLEAN);
            $this->dataBoolean->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATA_BOOLEAN]);
            $xw->endElement();
        }
        if (isset($this->dataInteger)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATA_INTEGER]
                || $this->dataInteger->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATA_INTEGER);
            $this->dataInteger->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATA_INTEGER]);
            $xw->endElement();
        }
        if (isset($this->dataDecimal)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATA_DECIMAL]
                || $this->dataDecimal->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATA_DECIMAL);
            $this->dataDecimal->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATA_DECIMAL]);
            $xw->endElement();
        }
        if (isset($this->dataBase64Binary)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATA_BASE_64BINARY]
                || $this->dataBase64Binary->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATA_BASE_64BINARY);
            $this->dataBase64Binary->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATA_BASE_64BINARY]);
            $xw->endElement();
        }
        if (isset($this->dataInstant)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATA_INSTANT]
                || $this->dataInstant->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATA_INSTANT);
            $this->dataInstant->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATA_INSTANT]);
            $xw->endElement();
        }
        if (isset($this->dataString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATA_STRING]
                || $this->dataString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATA_STRING);
            $this->dataString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATA_STRING]);
            $xw->endElement();
        }
        if (isset($this->dataUri)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATA_URI]
                || $this->dataUri->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATA_URI);
            $this->dataUri->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATA_URI]);
            $xw->endElement();
        }
        if (isset($this->dataDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATA_DATE]
                || $this->dataDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATA_DATE);
            $this->dataDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATA_DATE]);
            $xw->endElement();
        }
        if (isset($this->dataDateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATA_DATE_TIME]
                || $this->dataDateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATA_DATE_TIME);
            $this->dataDateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATA_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->dataCode)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATA_CODE]
                || $this->dataCode->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATA_CODE);
            $this->dataCode->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATA_CODE]);
            $xw->endElement();
        }
        if (isset($this->dataOid)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATA_OID]
                || $this->dataOid->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATA_OID);
            $this->dataOid->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATA_OID]);
            $xw->endElement();
        }
        if (isset($this->dataUuid)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATA_UUID]
                || $this->dataUuid->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATA_UUID);
            $this->dataUuid->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATA_UUID]);
            $xw->endElement();
        }
        if (isset($this->dataId)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATA_ID]
                || $this->dataId->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATA_ID);
            $this->dataId->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATA_ID]);
            $xw->endElement();
        }
        if (isset($this->dataAttachment)) {
            $xw->startElement(self::FIELD_DATA_ATTACHMENT);
            $this->dataAttachment->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dataIdentifier)) {
            $xw->startElement(self::FIELD_DATA_IDENTIFIER);
            $this->dataIdentifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dataCodeableConcept)) {
            $xw->startElement(self::FIELD_DATA_CODEABLE_CONCEPT);
            $this->dataCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dataCoding)) {
            $xw->startElement(self::FIELD_DATA_CODING);
            $this->dataCoding->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dataQuantity)) {
            $xw->startElement(self::FIELD_DATA_QUANTITY);
            $this->dataQuantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dataRange)) {
            $xw->startElement(self::FIELD_DATA_RANGE);
            $this->dataRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dataPeriod)) {
            $xw->startElement(self::FIELD_DATA_PERIOD);
            $this->dataPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dataRatio)) {
            $xw->startElement(self::FIELD_DATA_RATIO);
            $this->dataRatio->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dataResource)) {
            $xw->startElement(self::FIELD_DATA_RESOURCE);
            $this->dataResource->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dataSampledData)) {
            $xw->startElement(self::FIELD_DATA_SAMPLED_DATA);
            $this->dataSampledData->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dataHumanName)) {
            $xw->startElement(self::FIELD_DATA_HUMAN_NAME);
            $this->dataHumanName->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dataAddress)) {
            $xw->startElement(self::FIELD_DATA_ADDRESS);
            $this->dataAddress->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dataContact)) {
            $xw->startElement(self::FIELD_DATA_CONTACT);
            $this->dataContact->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dataSchedule)) {
            $xw->startElement(self::FIELD_DATA_SCHEDULE);
            $this->dataSchedule->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->remarks)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_REMARKS]
                || $this->remarks->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_REMARKS);
            $this->remarks->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_REMARKS]);
            $xw->endElement();
        }
        if (isset($this->group)) {
            foreach ($this->group as $v) {
                $xw->startElement(self::FIELD_GROUP);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRQuestionnaireQuestion)) {
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
        if (isset($decoded->text)
            || isset($decoded->_text)
            || property_exists($decoded, self::FIELD_TEXT)
            || property_exists($decoded, self::FIELD_TEXT_EXT)) {
            $v = $decoded->_text ?? new \stdClass();
            $v->value = $decoded->text ?? null;
            $type->setText(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->answerDecimal)
            || isset($decoded->_answerDecimal)
            || property_exists($decoded, self::FIELD_ANSWER_DECIMAL)
            || property_exists($decoded, self::FIELD_ANSWER_DECIMAL_EXT)) {
            $v = $decoded->_answerDecimal ?? new \stdClass();
            $v->value = $decoded->answerDecimal ?? null;
            $type->setAnswerDecimal(FHIRDecimal::jsonUnserialize($v, $config));
        }
        if (isset($decoded->answerInteger)
            || isset($decoded->_answerInteger)
            || property_exists($decoded, self::FIELD_ANSWER_INTEGER)
            || property_exists($decoded, self::FIELD_ANSWER_INTEGER_EXT)) {
            $v = $decoded->_answerInteger ?? new \stdClass();
            $v->value = $decoded->answerInteger ?? null;
            $type->setAnswerInteger(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($decoded->answerBoolean)
            || isset($decoded->_answerBoolean)
            || property_exists($decoded, self::FIELD_ANSWER_BOOLEAN)
            || property_exists($decoded, self::FIELD_ANSWER_BOOLEAN_EXT)) {
            $v = $decoded->_answerBoolean ?? new \stdClass();
            $v->value = $decoded->answerBoolean ?? null;
            $type->setAnswerBoolean(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->answerDate)
            || isset($decoded->_answerDate)
            || property_exists($decoded, self::FIELD_ANSWER_DATE)
            || property_exists($decoded, self::FIELD_ANSWER_DATE_EXT)) {
            $v = $decoded->_answerDate ?? new \stdClass();
            $v->value = $decoded->answerDate ?? null;
            $type->setAnswerDate(FHIRDate::jsonUnserialize($v, $config));
        }
        if (isset($decoded->answerString)
            || isset($decoded->_answerString)
            || property_exists($decoded, self::FIELD_ANSWER_STRING)
            || property_exists($decoded, self::FIELD_ANSWER_STRING_EXT)) {
            $v = $decoded->_answerString ?? new \stdClass();
            $v->value = $decoded->answerString ?? null;
            $type->setAnswerString(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->answerDateTime)
            || isset($decoded->_answerDateTime)
            || property_exists($decoded, self::FIELD_ANSWER_DATE_TIME)
            || property_exists($decoded, self::FIELD_ANSWER_DATE_TIME_EXT)) {
            $v = $decoded->_answerDateTime ?? new \stdClass();
            $v->value = $decoded->answerDateTime ?? null;
            $type->setAnswerDateTime(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->answerInstant)
            || isset($decoded->_answerInstant)
            || property_exists($decoded, self::FIELD_ANSWER_INSTANT)
            || property_exists($decoded, self::FIELD_ANSWER_INSTANT_EXT)) {
            $v = $decoded->_answerInstant ?? new \stdClass();
            $v->value = $decoded->answerInstant ?? null;
            $type->setAnswerInstant(FHIRInstant::jsonUnserialize($v, $config));
        }
        if (isset($decoded->choice) || property_exists($decoded, self::FIELD_CHOICE)) {
            if (is_object($decoded->choice)) {
                $vals = [$decoded->choice];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CHOICE, true);
            } else {
                $vals = $decoded->choice;
            }
            foreach($vals as $v) {
                $type->addChoice(FHIRCoding::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->options) || property_exists($decoded, self::FIELD_OPTIONS)) {
            if (is_array($decoded->options)) {
                $type->setOptions(FHIRResourceReference::jsonUnserialize(reset($decoded->options), $config));
            } else {
                $type->setOptions(FHIRResourceReference::jsonUnserialize($decoded->options, $config));
            }
        }
        if (isset($decoded->dataBoolean)
            || isset($decoded->_dataBoolean)
            || property_exists($decoded, self::FIELD_DATA_BOOLEAN)
            || property_exists($decoded, self::FIELD_DATA_BOOLEAN_EXT)) {
            $v = $decoded->_dataBoolean ?? new \stdClass();
            $v->value = $decoded->dataBoolean ?? null;
            $type->setDataBoolean(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->dataInteger)
            || isset($decoded->_dataInteger)
            || property_exists($decoded, self::FIELD_DATA_INTEGER)
            || property_exists($decoded, self::FIELD_DATA_INTEGER_EXT)) {
            $v = $decoded->_dataInteger ?? new \stdClass();
            $v->value = $decoded->dataInteger ?? null;
            $type->setDataInteger(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($decoded->dataDecimal)
            || isset($decoded->_dataDecimal)
            || property_exists($decoded, self::FIELD_DATA_DECIMAL)
            || property_exists($decoded, self::FIELD_DATA_DECIMAL_EXT)) {
            $v = $decoded->_dataDecimal ?? new \stdClass();
            $v->value = $decoded->dataDecimal ?? null;
            $type->setDataDecimal(FHIRDecimal::jsonUnserialize($v, $config));
        }
        if (isset($decoded->dataBase64Binary)
            || isset($decoded->_dataBase64Binary)
            || property_exists($decoded, self::FIELD_DATA_BASE_64BINARY)
            || property_exists($decoded, self::FIELD_DATA_BASE_64BINARY_EXT)) {
            $v = $decoded->_dataBase64Binary ?? new \stdClass();
            $v->value = $decoded->dataBase64Binary ?? null;
            $type->setDataBase64Binary(FHIRBase64Binary::jsonUnserialize($v, $config));
        }
        if (isset($decoded->dataInstant)
            || isset($decoded->_dataInstant)
            || property_exists($decoded, self::FIELD_DATA_INSTANT)
            || property_exists($decoded, self::FIELD_DATA_INSTANT_EXT)) {
            $v = $decoded->_dataInstant ?? new \stdClass();
            $v->value = $decoded->dataInstant ?? null;
            $type->setDataInstant(FHIRInstant::jsonUnserialize($v, $config));
        }
        if (isset($decoded->dataString)
            || isset($decoded->_dataString)
            || property_exists($decoded, self::FIELD_DATA_STRING)
            || property_exists($decoded, self::FIELD_DATA_STRING_EXT)) {
            $v = $decoded->_dataString ?? new \stdClass();
            $v->value = $decoded->dataString ?? null;
            $type->setDataString(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->dataUri)
            || isset($decoded->_dataUri)
            || property_exists($decoded, self::FIELD_DATA_URI)
            || property_exists($decoded, self::FIELD_DATA_URI_EXT)) {
            $v = $decoded->_dataUri ?? new \stdClass();
            $v->value = $decoded->dataUri ?? null;
            $type->setDataUri(FHIRUri::jsonUnserialize($v, $config));
        }
        if (isset($decoded->dataDate)
            || isset($decoded->_dataDate)
            || property_exists($decoded, self::FIELD_DATA_DATE)
            || property_exists($decoded, self::FIELD_DATA_DATE_EXT)) {
            $v = $decoded->_dataDate ?? new \stdClass();
            $v->value = $decoded->dataDate ?? null;
            $type->setDataDate(FHIRDate::jsonUnserialize($v, $config));
        }
        if (isset($decoded->dataDateTime)
            || isset($decoded->_dataDateTime)
            || property_exists($decoded, self::FIELD_DATA_DATE_TIME)
            || property_exists($decoded, self::FIELD_DATA_DATE_TIME_EXT)) {
            $v = $decoded->_dataDateTime ?? new \stdClass();
            $v->value = $decoded->dataDateTime ?? null;
            $type->setDataDateTime(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->dataCode)
            || isset($decoded->_dataCode)
            || property_exists($decoded, self::FIELD_DATA_CODE)
            || property_exists($decoded, self::FIELD_DATA_CODE_EXT)) {
            $v = $decoded->_dataCode ?? new \stdClass();
            $v->value = $decoded->dataCode ?? null;
            $type->setDataCode(FHIRCode::jsonUnserialize($v, $config));
        }
        if (isset($decoded->dataOid)
            || isset($decoded->_dataOid)
            || property_exists($decoded, self::FIELD_DATA_OID)
            || property_exists($decoded, self::FIELD_DATA_OID_EXT)) {
            $v = $decoded->_dataOid ?? new \stdClass();
            $v->value = $decoded->dataOid ?? null;
            $type->setDataOid(FHIROid::jsonUnserialize($v, $config));
        }
        if (isset($decoded->dataUuid)
            || isset($decoded->_dataUuid)
            || property_exists($decoded, self::FIELD_DATA_UUID)
            || property_exists($decoded, self::FIELD_DATA_UUID_EXT)) {
            $v = $decoded->_dataUuid ?? new \stdClass();
            $v->value = $decoded->dataUuid ?? null;
            $type->setDataUuid(FHIRUuid::jsonUnserialize($v, $config));
        }
        if (isset($decoded->dataId)
            || isset($decoded->_dataId)
            || property_exists($decoded, self::FIELD_DATA_ID)
            || property_exists($decoded, self::FIELD_DATA_ID_EXT)) {
            $v = $decoded->_dataId ?? new \stdClass();
            $v->value = $decoded->dataId ?? null;
            $type->setDataId(FHIRId::jsonUnserialize($v, $config));
        }
        if (isset($decoded->dataAttachment) || property_exists($decoded, self::FIELD_DATA_ATTACHMENT)) {
            if (is_array($decoded->dataAttachment)) {
                $type->setDataAttachment(FHIRAttachment::jsonUnserialize(reset($decoded->dataAttachment), $config));
            } else {
                $type->setDataAttachment(FHIRAttachment::jsonUnserialize($decoded->dataAttachment, $config));
            }
        }
        if (isset($decoded->dataIdentifier) || property_exists($decoded, self::FIELD_DATA_IDENTIFIER)) {
            if (is_array($decoded->dataIdentifier)) {
                $type->setDataIdentifier(FHIRIdentifier::jsonUnserialize(reset($decoded->dataIdentifier), $config));
            } else {
                $type->setDataIdentifier(FHIRIdentifier::jsonUnserialize($decoded->dataIdentifier, $config));
            }
        }
        if (isset($decoded->dataCodeableConcept) || property_exists($decoded, self::FIELD_DATA_CODEABLE_CONCEPT)) {
            if (is_array($decoded->dataCodeableConcept)) {
                $type->setDataCodeableConcept(FHIRCodeableConcept::jsonUnserialize(reset($decoded->dataCodeableConcept), $config));
            } else {
                $type->setDataCodeableConcept(FHIRCodeableConcept::jsonUnserialize($decoded->dataCodeableConcept, $config));
            }
        }
        if (isset($decoded->dataCoding) || property_exists($decoded, self::FIELD_DATA_CODING)) {
            if (is_array($decoded->dataCoding)) {
                $type->setDataCoding(FHIRCoding::jsonUnserialize(reset($decoded->dataCoding), $config));
            } else {
                $type->setDataCoding(FHIRCoding::jsonUnserialize($decoded->dataCoding, $config));
            }
        }
        if (isset($decoded->dataQuantity) || property_exists($decoded, self::FIELD_DATA_QUANTITY)) {
            if (is_array($decoded->dataQuantity)) {
                $type->setDataQuantity(FHIRQuantity::jsonUnserialize(reset($decoded->dataQuantity), $config));
            } else {
                $type->setDataQuantity(FHIRQuantity::jsonUnserialize($decoded->dataQuantity, $config));
            }
        }
        if (isset($decoded->dataRange) || property_exists($decoded, self::FIELD_DATA_RANGE)) {
            if (is_array($decoded->dataRange)) {
                $type->setDataRange(FHIRRange::jsonUnserialize(reset($decoded->dataRange), $config));
            } else {
                $type->setDataRange(FHIRRange::jsonUnserialize($decoded->dataRange, $config));
            }
        }
        if (isset($decoded->dataPeriod) || property_exists($decoded, self::FIELD_DATA_PERIOD)) {
            if (is_array($decoded->dataPeriod)) {
                $type->setDataPeriod(FHIRPeriod::jsonUnserialize(reset($decoded->dataPeriod), $config));
            } else {
                $type->setDataPeriod(FHIRPeriod::jsonUnserialize($decoded->dataPeriod, $config));
            }
        }
        if (isset($decoded->dataRatio) || property_exists($decoded, self::FIELD_DATA_RATIO)) {
            if (is_array($decoded->dataRatio)) {
                $type->setDataRatio(FHIRRatio::jsonUnserialize(reset($decoded->dataRatio), $config));
            } else {
                $type->setDataRatio(FHIRRatio::jsonUnserialize($decoded->dataRatio, $config));
            }
        }
        if (isset($decoded->dataResource) || property_exists($decoded, self::FIELD_DATA_RESOURCE)) {
            if (is_array($decoded->dataResource)) {
                $type->setDataResource(FHIRResourceReference::jsonUnserialize(reset($decoded->dataResource), $config));
            } else {
                $type->setDataResource(FHIRResourceReference::jsonUnserialize($decoded->dataResource, $config));
            }
        }
        if (isset($decoded->dataSampledData) || property_exists($decoded, self::FIELD_DATA_SAMPLED_DATA)) {
            if (is_array($decoded->dataSampledData)) {
                $type->setDataSampledData(FHIRSampledData::jsonUnserialize(reset($decoded->dataSampledData), $config));
            } else {
                $type->setDataSampledData(FHIRSampledData::jsonUnserialize($decoded->dataSampledData, $config));
            }
        }
        if (isset($decoded->dataHumanName) || property_exists($decoded, self::FIELD_DATA_HUMAN_NAME)) {
            if (is_array($decoded->dataHumanName)) {
                $type->setDataHumanName(FHIRHumanName::jsonUnserialize(reset($decoded->dataHumanName), $config));
            } else {
                $type->setDataHumanName(FHIRHumanName::jsonUnserialize($decoded->dataHumanName, $config));
            }
        }
        if (isset($decoded->dataAddress) || property_exists($decoded, self::FIELD_DATA_ADDRESS)) {
            if (is_array($decoded->dataAddress)) {
                $type->setDataAddress(FHIRAddress::jsonUnserialize(reset($decoded->dataAddress), $config));
            } else {
                $type->setDataAddress(FHIRAddress::jsonUnserialize($decoded->dataAddress, $config));
            }
        }
        if (isset($decoded->dataContact) || property_exists($decoded, self::FIELD_DATA_CONTACT)) {
            if (is_array($decoded->dataContact)) {
                $type->setDataContact(FHIRContact::jsonUnserialize(reset($decoded->dataContact), $config));
            } else {
                $type->setDataContact(FHIRContact::jsonUnserialize($decoded->dataContact, $config));
            }
        }
        if (isset($decoded->dataSchedule) || property_exists($decoded, self::FIELD_DATA_SCHEDULE)) {
            if (is_array($decoded->dataSchedule)) {
                $type->setDataSchedule(FHIRSchedule::jsonUnserialize(reset($decoded->dataSchedule), $config));
            } else {
                $type->setDataSchedule(FHIRSchedule::jsonUnserialize($decoded->dataSchedule, $config));
            }
        }
        if (isset($decoded->remarks)
            || isset($decoded->_remarks)
            || property_exists($decoded, self::FIELD_REMARKS)
            || property_exists($decoded, self::FIELD_REMARKS_EXT)) {
            $v = $decoded->_remarks ?? new \stdClass();
            $v->value = $decoded->remarks ?? null;
            $type->setRemarks(FHIRString::jsonUnserialize($v, $config));
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
        if (isset($this->answerInstant)) {
            if (null !== ($val = $this->answerInstant->getValue())) {
                $out->answerInstant = $val;
            }
            if ($this->answerInstant->_nonValueFieldDefined()) {
                $ext = $this->answerInstant->jsonSerialize();
                unset($ext->value);
                $out->_answerInstant = $ext;
            }
        }
        if (isset($this->choice) && [] !== $this->choice) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CHOICE) && 1 === count($this->choice)) {
                $out->choice = $this->choice[0];
            } else {
                $out->choice = $this->choice;
            }
        }
        if (isset($this->options)) {
            $out->options = $this->options;
        }
        if (isset($this->dataBoolean)) {
            if (null !== ($val = $this->dataBoolean->getValue())) {
                $out->dataBoolean = $val;
            }
            if ($this->dataBoolean->_nonValueFieldDefined()) {
                $ext = $this->dataBoolean->jsonSerialize();
                unset($ext->value);
                $out->_dataBoolean = $ext;
            }
        }
        if (isset($this->dataInteger)) {
            if (null !== ($val = $this->dataInteger->getValue())) {
                $out->dataInteger = $val;
            }
            if ($this->dataInteger->_nonValueFieldDefined()) {
                $ext = $this->dataInteger->jsonSerialize();
                unset($ext->value);
                $out->_dataInteger = $ext;
            }
        }
        if (isset($this->dataDecimal)) {
            if (null !== ($val = $this->dataDecimal->getValue())) {
                $out->dataDecimal = $val;
            }
            if ($this->dataDecimal->_nonValueFieldDefined()) {
                $ext = $this->dataDecimal->jsonSerialize();
                unset($ext->value);
                $out->_dataDecimal = $ext;
            }
        }
        if (isset($this->dataBase64Binary)) {
            if (null !== ($val = $this->dataBase64Binary->getValue())) {
                $out->dataBase64Binary = $val;
            }
            if ($this->dataBase64Binary->_nonValueFieldDefined()) {
                $ext = $this->dataBase64Binary->jsonSerialize();
                unset($ext->value);
                $out->_dataBase64Binary = $ext;
            }
        }
        if (isset($this->dataInstant)) {
            if (null !== ($val = $this->dataInstant->getValue())) {
                $out->dataInstant = $val;
            }
            if ($this->dataInstant->_nonValueFieldDefined()) {
                $ext = $this->dataInstant->jsonSerialize();
                unset($ext->value);
                $out->_dataInstant = $ext;
            }
        }
        if (isset($this->dataString)) {
            if (null !== ($val = $this->dataString->getValue())) {
                $out->dataString = $val;
            }
            if ($this->dataString->_nonValueFieldDefined()) {
                $ext = $this->dataString->jsonSerialize();
                unset($ext->value);
                $out->_dataString = $ext;
            }
        }
        if (isset($this->dataUri)) {
            if (null !== ($val = $this->dataUri->getValue())) {
                $out->dataUri = $val;
            }
            if ($this->dataUri->_nonValueFieldDefined()) {
                $ext = $this->dataUri->jsonSerialize();
                unset($ext->value);
                $out->_dataUri = $ext;
            }
        }
        if (isset($this->dataDate)) {
            if (null !== ($val = $this->dataDate->getValue())) {
                $out->dataDate = $val;
            }
            if ($this->dataDate->_nonValueFieldDefined()) {
                $ext = $this->dataDate->jsonSerialize();
                unset($ext->value);
                $out->_dataDate = $ext;
            }
        }
        if (isset($this->dataDateTime)) {
            if (null !== ($val = $this->dataDateTime->getValue())) {
                $out->dataDateTime = $val;
            }
            if ($this->dataDateTime->_nonValueFieldDefined()) {
                $ext = $this->dataDateTime->jsonSerialize();
                unset($ext->value);
                $out->_dataDateTime = $ext;
            }
        }
        if (isset($this->dataCode)) {
            if (null !== ($val = $this->dataCode->getValue())) {
                $out->dataCode = $val;
            }
            if ($this->dataCode->_nonValueFieldDefined()) {
                $ext = $this->dataCode->jsonSerialize();
                unset($ext->value);
                $out->_dataCode = $ext;
            }
        }
        if (isset($this->dataOid)) {
            if (null !== ($val = $this->dataOid->getValue())) {
                $out->dataOid = $val;
            }
            if ($this->dataOid->_nonValueFieldDefined()) {
                $ext = $this->dataOid->jsonSerialize();
                unset($ext->value);
                $out->_dataOid = $ext;
            }
        }
        if (isset($this->dataUuid)) {
            if (null !== ($val = $this->dataUuid->getValue())) {
                $out->dataUuid = $val;
            }
            if ($this->dataUuid->_nonValueFieldDefined()) {
                $ext = $this->dataUuid->jsonSerialize();
                unset($ext->value);
                $out->_dataUuid = $ext;
            }
        }
        if (isset($this->dataId)) {
            if (null !== ($val = $this->dataId->getValue())) {
                $out->dataId = $val;
            }
            if ($this->dataId->_nonValueFieldDefined()) {
                $ext = $this->dataId->jsonSerialize();
                unset($ext->value);
                $out->_dataId = $ext;
            }
        }
        if (isset($this->dataAttachment)) {
            $out->dataAttachment = $this->dataAttachment;
        }
        if (isset($this->dataIdentifier)) {
            $out->dataIdentifier = $this->dataIdentifier;
        }
        if (isset($this->dataCodeableConcept)) {
            $out->dataCodeableConcept = $this->dataCodeableConcept;
        }
        if (isset($this->dataCoding)) {
            $out->dataCoding = $this->dataCoding;
        }
        if (isset($this->dataQuantity)) {
            $out->dataQuantity = $this->dataQuantity;
        }
        if (isset($this->dataRange)) {
            $out->dataRange = $this->dataRange;
        }
        if (isset($this->dataPeriod)) {
            $out->dataPeriod = $this->dataPeriod;
        }
        if (isset($this->dataRatio)) {
            $out->dataRatio = $this->dataRatio;
        }
        if (isset($this->dataResource)) {
            $out->dataResource = $this->dataResource;
        }
        if (isset($this->dataSampledData)) {
            $out->dataSampledData = $this->dataSampledData;
        }
        if (isset($this->dataHumanName)) {
            $out->dataHumanName = $this->dataHumanName;
        }
        if (isset($this->dataAddress)) {
            $out->dataAddress = $this->dataAddress;
        }
        if (isset($this->dataContact)) {
            $out->dataContact = $this->dataContact;
        }
        if (isset($this->dataSchedule)) {
            $out->dataSchedule = $this->dataSchedule;
        }
        if (isset($this->remarks)) {
            if (null !== ($val = $this->remarks->getValue())) {
                $out->remarks = $val;
            }
            if ($this->remarks->_nonValueFieldDefined()) {
                $ext = $this->remarks->jsonSerialize();
                unset($ext->value);
                $out->_remarks = $ext;
            }
        }
        if (isset($this->group) && [] !== $this->group) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_GROUP) && 1 === count($this->group)) {
                $out->group = $this->group[0];
            } else {
                $out->group = $this->group;
            }
        }
        return $out;
    }
}