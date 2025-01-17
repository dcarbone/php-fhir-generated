<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 00:27+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
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
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;

/**
 * A structured set of questions and their answers. The Questionnaire may contain
 * questions, answers or both. The questions are ordered and grouped into coherent
 * subsets, corresponding to the structure of the grouping of the underlying
 * questions.
 */
class FHIRQuestionnaireQuestion extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION;


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

    /** Default validation map for fields in type Questionnaire.Question */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRQuestionnaireQuestion Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $name
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $text
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal $answerDecimal
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $answerInteger
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $answerBoolean
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate $answerDate
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $answerString
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $answerDateTime
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant $answerInstant
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding[] $choice
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $options
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $dataBoolean
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $dataInteger
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal $dataDecimal
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
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $answerDecimal = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $answerInteger = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $answerBoolean = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $answerDate = null,
                                null|string|FHIRStringPrimitive|FHIRString $answerString = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $answerDateTime = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $answerInstant = null,
                                null|iterable $choice = null,
                                null|FHIRResourceReference $options = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $dataBoolean = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $dataInteger = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $dataDecimal = null,
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

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
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
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal $answerDecimal
     * @return static
     */
    public function setAnswerDecimal(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $answerDecimal): self
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $answerInteger
     * @return static
     */
    public function setAnswerInteger(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $answerInteger): self
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
        if (!isset($this->choice) || [] === $this->choice) {
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $dataInteger
     * @return static
     */
    public function setDataInteger(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $dataInteger): self
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
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal $dataDecimal
     * @return static
     */
    public function setDataDecimal(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $dataDecimal): self
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
        if (!isset($this->group) || [] === $this->group) {
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
        $this->group = $group;
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
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_ANSWER_INSTANT])) {
            $v = $this->getAnswerInstant();
            foreach($validationRules[self::FIELD_ANSWER_INSTANT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ANSWER_INSTANT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_INSTANT])) {
                        $errs[self::FIELD_ANSWER_INSTANT] = [];
                    }
                    $errs[self::FIELD_ANSWER_INSTANT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CHOICE])) {
            $v = $this->getChoice();
            foreach($validationRules[self::FIELD_CHOICE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CHOICE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CHOICE])) {
                        $errs[self::FIELD_CHOICE] = [];
                    }
                    $errs[self::FIELD_CHOICE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OPTIONS])) {
            $v = $this->getOptions();
            foreach($validationRules[self::FIELD_OPTIONS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OPTIONS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OPTIONS])) {
                        $errs[self::FIELD_OPTIONS] = [];
                    }
                    $errs[self::FIELD_OPTIONS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_BOOLEAN])) {
            $v = $this->getDataBoolean();
            foreach($validationRules[self::FIELD_DATA_BOOLEAN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_BOOLEAN])) {
                        $errs[self::FIELD_DATA_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_DATA_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_INTEGER])) {
            $v = $this->getDataInteger();
            foreach($validationRules[self::FIELD_DATA_INTEGER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_INTEGER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_INTEGER])) {
                        $errs[self::FIELD_DATA_INTEGER] = [];
                    }
                    $errs[self::FIELD_DATA_INTEGER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_DECIMAL])) {
            $v = $this->getDataDecimal();
            foreach($validationRules[self::FIELD_DATA_DECIMAL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_DECIMAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_DECIMAL])) {
                        $errs[self::FIELD_DATA_DECIMAL] = [];
                    }
                    $errs[self::FIELD_DATA_DECIMAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_BASE_64BINARY])) {
            $v = $this->getDataBase64Binary();
            foreach($validationRules[self::FIELD_DATA_BASE_64BINARY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_BASE_64BINARY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_BASE_64BINARY])) {
                        $errs[self::FIELD_DATA_BASE_64BINARY] = [];
                    }
                    $errs[self::FIELD_DATA_BASE_64BINARY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_INSTANT])) {
            $v = $this->getDataInstant();
            foreach($validationRules[self::FIELD_DATA_INSTANT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_INSTANT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_INSTANT])) {
                        $errs[self::FIELD_DATA_INSTANT] = [];
                    }
                    $errs[self::FIELD_DATA_INSTANT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_STRING])) {
            $v = $this->getDataString();
            foreach($validationRules[self::FIELD_DATA_STRING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_STRING])) {
                        $errs[self::FIELD_DATA_STRING] = [];
                    }
                    $errs[self::FIELD_DATA_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_URI])) {
            $v = $this->getDataUri();
            foreach($validationRules[self::FIELD_DATA_URI] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_URI])) {
                        $errs[self::FIELD_DATA_URI] = [];
                    }
                    $errs[self::FIELD_DATA_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_DATE])) {
            $v = $this->getDataDate();
            foreach($validationRules[self::FIELD_DATA_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_DATE])) {
                        $errs[self::FIELD_DATA_DATE] = [];
                    }
                    $errs[self::FIELD_DATA_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_DATE_TIME])) {
            $v = $this->getDataDateTime();
            foreach($validationRules[self::FIELD_DATA_DATE_TIME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_DATE_TIME])) {
                        $errs[self::FIELD_DATA_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_DATA_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_CODE])) {
            $v = $this->getDataCode();
            foreach($validationRules[self::FIELD_DATA_CODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_CODE])) {
                        $errs[self::FIELD_DATA_CODE] = [];
                    }
                    $errs[self::FIELD_DATA_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_OID])) {
            $v = $this->getDataOid();
            foreach($validationRules[self::FIELD_DATA_OID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_OID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_OID])) {
                        $errs[self::FIELD_DATA_OID] = [];
                    }
                    $errs[self::FIELD_DATA_OID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_UUID])) {
            $v = $this->getDataUuid();
            foreach($validationRules[self::FIELD_DATA_UUID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_UUID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_UUID])) {
                        $errs[self::FIELD_DATA_UUID] = [];
                    }
                    $errs[self::FIELD_DATA_UUID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_ID])) {
            $v = $this->getDataId();
            foreach($validationRules[self::FIELD_DATA_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_ID])) {
                        $errs[self::FIELD_DATA_ID] = [];
                    }
                    $errs[self::FIELD_DATA_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_ATTACHMENT])) {
            $v = $this->getDataAttachment();
            foreach($validationRules[self::FIELD_DATA_ATTACHMENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_ATTACHMENT])) {
                        $errs[self::FIELD_DATA_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_DATA_ATTACHMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_IDENTIFIER])) {
            $v = $this->getDataIdentifier();
            foreach($validationRules[self::FIELD_DATA_IDENTIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_IDENTIFIER])) {
                        $errs[self::FIELD_DATA_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_DATA_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_CODEABLE_CONCEPT])) {
            $v = $this->getDataCodeableConcept();
            foreach($validationRules[self::FIELD_DATA_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_DATA_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_DATA_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_CODING])) {
            $v = $this->getDataCoding();
            foreach($validationRules[self::FIELD_DATA_CODING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_CODING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_CODING])) {
                        $errs[self::FIELD_DATA_CODING] = [];
                    }
                    $errs[self::FIELD_DATA_CODING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_QUANTITY])) {
            $v = $this->getDataQuantity();
            foreach($validationRules[self::FIELD_DATA_QUANTITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_QUANTITY])) {
                        $errs[self::FIELD_DATA_QUANTITY] = [];
                    }
                    $errs[self::FIELD_DATA_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_RANGE])) {
            $v = $this->getDataRange();
            foreach($validationRules[self::FIELD_DATA_RANGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_RANGE])) {
                        $errs[self::FIELD_DATA_RANGE] = [];
                    }
                    $errs[self::FIELD_DATA_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_PERIOD])) {
            $v = $this->getDataPeriod();
            foreach($validationRules[self::FIELD_DATA_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_PERIOD])) {
                        $errs[self::FIELD_DATA_PERIOD] = [];
                    }
                    $errs[self::FIELD_DATA_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_RATIO])) {
            $v = $this->getDataRatio();
            foreach($validationRules[self::FIELD_DATA_RATIO] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_RATIO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_RATIO])) {
                        $errs[self::FIELD_DATA_RATIO] = [];
                    }
                    $errs[self::FIELD_DATA_RATIO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_RESOURCE])) {
            $v = $this->getDataResource();
            foreach($validationRules[self::FIELD_DATA_RESOURCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_RESOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_RESOURCE])) {
                        $errs[self::FIELD_DATA_RESOURCE] = [];
                    }
                    $errs[self::FIELD_DATA_RESOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_SAMPLED_DATA])) {
            $v = $this->getDataSampledData();
            foreach($validationRules[self::FIELD_DATA_SAMPLED_DATA] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_SAMPLED_DATA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_SAMPLED_DATA])) {
                        $errs[self::FIELD_DATA_SAMPLED_DATA] = [];
                    }
                    $errs[self::FIELD_DATA_SAMPLED_DATA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_HUMAN_NAME])) {
            $v = $this->getDataHumanName();
            foreach($validationRules[self::FIELD_DATA_HUMAN_NAME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_HUMAN_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_HUMAN_NAME])) {
                        $errs[self::FIELD_DATA_HUMAN_NAME] = [];
                    }
                    $errs[self::FIELD_DATA_HUMAN_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_ADDRESS])) {
            $v = $this->getDataAddress();
            foreach($validationRules[self::FIELD_DATA_ADDRESS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_ADDRESS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_ADDRESS])) {
                        $errs[self::FIELD_DATA_ADDRESS] = [];
                    }
                    $errs[self::FIELD_DATA_ADDRESS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_CONTACT])) {
            $v = $this->getDataContact();
            foreach($validationRules[self::FIELD_DATA_CONTACT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_CONTACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_CONTACT])) {
                        $errs[self::FIELD_DATA_CONTACT] = [];
                    }
                    $errs[self::FIELD_DATA_CONTACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_SCHEDULE])) {
            $v = $this->getDataSchedule();
            foreach($validationRules[self::FIELD_DATA_SCHEDULE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_SCHEDULE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_SCHEDULE])) {
                        $errs[self::FIELD_DATA_SCHEDULE] = [];
                    }
                    $errs[self::FIELD_DATA_SCHEDULE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REMARKS])) {
            $v = $this->getRemarks();
            foreach($validationRules[self::FIELD_REMARKS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REMARKS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REMARKS])) {
                        $errs[self::FIELD_REMARKS] = [];
                    }
                    $errs[self::FIELD_REMARKS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GROUP])) {
            $v = $this->getGroup();
            foreach($validationRules[self::FIELD_GROUP] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_GROUP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GROUP])) {
                        $errs[self::FIELD_GROUP] = [];
                    }
                    $errs[self::FIELD_GROUP][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
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
                $v = new FHIRIdPrimitive(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NAME === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setName(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TEXT === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setText(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ANSWER_DECIMAL === $childName) {
                $v = new FHIRDecimal(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setAnswerDecimal(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ANSWER_INTEGER === $childName) {
                $v = new FHIRInteger(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setAnswerInteger(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ANSWER_BOOLEAN === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setAnswerBoolean(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ANSWER_DATE === $childName) {
                $v = new FHIRDate(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setAnswerDate(FHIRDate::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ANSWER_STRING === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setAnswerString(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ANSWER_DATE_TIME === $childName) {
                $v = new FHIRDateTime(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setAnswerDateTime(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ANSWER_INSTANT === $childName) {
                $v = new FHIRInstant(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setAnswerInstant(FHIRInstant::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CHOICE === $childName) {
                $v = new FHIRCoding();
                $type->addChoice(FHIRCoding::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_OPTIONS === $childName) {
                $v = new FHIRResourceReference();
                $type->setOptions(FHIRResourceReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATA_BOOLEAN === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDataBoolean(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATA_INTEGER === $childName) {
                $v = new FHIRInteger(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDataInteger(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATA_DECIMAL === $childName) {
                $v = new FHIRDecimal(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDataDecimal(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATA_BASE_64BINARY === $childName) {
                $v = new FHIRBase64Binary(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDataBase64Binary(FHIRBase64Binary::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATA_INSTANT === $childName) {
                $v = new FHIRInstant(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDataInstant(FHIRInstant::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATA_STRING === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDataString(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATA_URI === $childName) {
                $v = new FHIRUri(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDataUri(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATA_DATE === $childName) {
                $v = new FHIRDate(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDataDate(FHIRDate::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATA_DATE_TIME === $childName) {
                $v = new FHIRDateTime(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDataDateTime(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATA_CODE === $childName) {
                $v = new FHIRCode(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDataCode(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATA_OID === $childName) {
                $v = new FHIROid(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDataOid(FHIROid::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATA_UUID === $childName) {
                $v = new FHIRUuid(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDataUuid(FHIRUuid::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATA_ID === $childName) {
                $v = new FHIRId(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDataId(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATA_ATTACHMENT === $childName) {
                $v = new FHIRAttachment();
                $type->setDataAttachment(FHIRAttachment::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATA_IDENTIFIER === $childName) {
                $v = new FHIRIdentifier();
                $type->setDataIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATA_CODEABLE_CONCEPT === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setDataCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATA_CODING === $childName) {
                $v = new FHIRCoding();
                $type->setDataCoding(FHIRCoding::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATA_QUANTITY === $childName) {
                $v = new FHIRQuantity();
                $type->setDataQuantity(FHIRQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATA_RANGE === $childName) {
                $v = new FHIRRange();
                $type->setDataRange(FHIRRange::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATA_PERIOD === $childName) {
                $v = new FHIRPeriod();
                $type->setDataPeriod(FHIRPeriod::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATA_RATIO === $childName) {
                $v = new FHIRRatio();
                $type->setDataRatio(FHIRRatio::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATA_RESOURCE === $childName) {
                $v = new FHIRResourceReference();
                $type->setDataResource(FHIRResourceReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATA_SAMPLED_DATA === $childName) {
                $v = new FHIRSampledData();
                $type->setDataSampledData(FHIRSampledData::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATA_HUMAN_NAME === $childName) {
                $v = new FHIRHumanName();
                $type->setDataHumanName(FHIRHumanName::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATA_ADDRESS === $childName) {
                $v = new FHIRAddress();
                $type->setDataAddress(FHIRAddress::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATA_CONTACT === $childName) {
                $v = new FHIRContact();
                $type->setDataContact(FHIRContact::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATA_SCHEDULE === $childName) {
                $v = new FHIRSchedule();
                $type->setDataSchedule(FHIRSchedule::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REMARKS === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setRemarks(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_GROUP === $childName) {
                $v = new FHIRQuestionnaireGroup();
                $type->addGroup(FHIRQuestionnaireGroup::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRIdPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_TEXT])) {
            $pt = $type->getText();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TEXT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setText(new FHIRString(
                    value: (string)$attributes[self::FIELD_TEXT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_DECIMAL])) {
            $pt = $type->getAnswerDecimal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ANSWER_DECIMAL]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAnswerDecimal(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_ANSWER_DECIMAL],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_INTEGER])) {
            $pt = $type->getAnswerInteger();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ANSWER_INTEGER]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAnswerInteger(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_ANSWER_INTEGER],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_BOOLEAN])) {
            $pt = $type->getAnswerBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ANSWER_BOOLEAN]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAnswerBoolean(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_ANSWER_BOOLEAN],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_DATE])) {
            $pt = $type->getAnswerDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ANSWER_DATE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAnswerDate(new FHIRDate(
                    value: (string)$attributes[self::FIELD_ANSWER_DATE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_STRING])) {
            $pt = $type->getAnswerString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ANSWER_STRING]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAnswerString(new FHIRString(
                    value: (string)$attributes[self::FIELD_ANSWER_STRING],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_DATE_TIME])) {
            $pt = $type->getAnswerDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ANSWER_DATE_TIME]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAnswerDateTime(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_ANSWER_DATE_TIME],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_INSTANT])) {
            $pt = $type->getAnswerInstant();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ANSWER_INSTANT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAnswerInstant(new FHIRInstant(
                    value: (string)$attributes[self::FIELD_ANSWER_INSTANT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DATA_BOOLEAN])) {
            $pt = $type->getDataBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATA_BOOLEAN]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDataBoolean(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_DATA_BOOLEAN],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DATA_INTEGER])) {
            $pt = $type->getDataInteger();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATA_INTEGER]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDataInteger(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_DATA_INTEGER],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DATA_DECIMAL])) {
            $pt = $type->getDataDecimal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATA_DECIMAL]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDataDecimal(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_DATA_DECIMAL],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DATA_BASE_64BINARY])) {
            $pt = $type->getDataBase64Binary();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATA_BASE_64BINARY]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDataBase64Binary(new FHIRBase64Binary(
                    value: (string)$attributes[self::FIELD_DATA_BASE_64BINARY],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DATA_INSTANT])) {
            $pt = $type->getDataInstant();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATA_INSTANT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDataInstant(new FHIRInstant(
                    value: (string)$attributes[self::FIELD_DATA_INSTANT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DATA_STRING])) {
            $pt = $type->getDataString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATA_STRING]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDataString(new FHIRString(
                    value: (string)$attributes[self::FIELD_DATA_STRING],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DATA_URI])) {
            $pt = $type->getDataUri();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATA_URI]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDataUri(new FHIRUri(
                    value: (string)$attributes[self::FIELD_DATA_URI],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DATA_DATE])) {
            $pt = $type->getDataDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATA_DATE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDataDate(new FHIRDate(
                    value: (string)$attributes[self::FIELD_DATA_DATE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DATA_DATE_TIME])) {
            $pt = $type->getDataDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATA_DATE_TIME]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDataDateTime(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_DATA_DATE_TIME],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DATA_CODE])) {
            $pt = $type->getDataCode();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATA_CODE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDataCode(new FHIRCode(
                    value: (string)$attributes[self::FIELD_DATA_CODE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DATA_OID])) {
            $pt = $type->getDataOid();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATA_OID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDataOid(new FHIROid(
                    value: (string)$attributes[self::FIELD_DATA_OID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DATA_UUID])) {
            $pt = $type->getDataUuid();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATA_UUID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDataUuid(new FHIRUuid(
                    value: (string)$attributes[self::FIELD_DATA_UUID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DATA_ID])) {
            $pt = $type->getDataId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATA_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDataId(new FHIRId(
                    value: (string)$attributes[self::FIELD_DATA_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_REMARKS])) {
            $pt = $type->getRemarks();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_REMARKS]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setRemarks(new FHIRString(
                    value: (string)$attributes[self::FIELD_REMARKS],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
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
            $xw->openRootNode('QuestionnaireQuestion', $this->_getSourceXMLNS());
        }
        if (isset($this->text) && $this->text->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_TEXT, $this->text->getValue()?->getFormattedValue());
        }
        if (isset($this->answerDecimal) && $this->answerDecimal->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ANSWER_DECIMAL, $this->answerDecimal->getValue()?->getFormattedValue());
        }
        if (isset($this->answerInteger) && $this->answerInteger->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ANSWER_INTEGER, $this->answerInteger->getValue()?->getFormattedValue());
        }
        if (isset($this->answerBoolean) && $this->answerBoolean->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ANSWER_BOOLEAN, $this->answerBoolean->getValue()?->getFormattedValue());
        }
        if (isset($this->answerDate) && $this->answerDate->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ANSWER_DATE, $this->answerDate->getValue()?->getFormattedValue());
        }
        if (isset($this->answerString) && $this->answerString->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ANSWER_STRING, $this->answerString->getValue()?->getFormattedValue());
        }
        if (isset($this->answerDateTime) && $this->answerDateTime->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ANSWER_DATE_TIME, $this->answerDateTime->getValue()?->getFormattedValue());
        }
        if (isset($this->answerInstant) && $this->answerInstant->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ANSWER_INSTANT, $this->answerInstant->getValue()?->getFormattedValue());
        }
        if (isset($this->dataBoolean) && $this->dataBoolean->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DATA_BOOLEAN, $this->dataBoolean->getValue()?->getFormattedValue());
        }
        if (isset($this->dataInteger) && $this->dataInteger->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DATA_INTEGER, $this->dataInteger->getValue()?->getFormattedValue());
        }
        if (isset($this->dataDecimal) && $this->dataDecimal->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DATA_DECIMAL, $this->dataDecimal->getValue()?->getFormattedValue());
        }
        if (isset($this->dataBase64Binary) && $this->dataBase64Binary->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DATA_BASE_64BINARY, $this->dataBase64Binary->getValue()?->getFormattedValue());
        }
        if (isset($this->dataInstant) && $this->dataInstant->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DATA_INSTANT, $this->dataInstant->getValue()?->getFormattedValue());
        }
        if (isset($this->dataString) && $this->dataString->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DATA_STRING, $this->dataString->getValue()?->getFormattedValue());
        }
        if (isset($this->dataUri) && $this->dataUri->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DATA_URI, $this->dataUri->getValue()?->getFormattedValue());
        }
        if (isset($this->dataDate) && $this->dataDate->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DATA_DATE, $this->dataDate->getValue()?->getFormattedValue());
        }
        if (isset($this->dataDateTime) && $this->dataDateTime->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DATA_DATE_TIME, $this->dataDateTime->getValue()?->getFormattedValue());
        }
        if (isset($this->dataCode) && $this->dataCode->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DATA_CODE, $this->dataCode->getValue()?->getFormattedValue());
        }
        if (isset($this->dataOid) && $this->dataOid->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DATA_OID, $this->dataOid->getValue()?->getFormattedValue());
        }
        if (isset($this->dataUuid) && $this->dataUuid->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DATA_UUID, $this->dataUuid->getValue()?->getFormattedValue());
        }
        if (isset($this->dataId) && $this->dataId->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DATA_ID, $this->dataId->getValue()?->getFormattedValue());
        }
        if (isset($this->remarks) && $this->remarks->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_REMARKS, $this->remarks->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->name)) {
            $xw->startElement(self::FIELD_NAME);
            $this->name->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->text) && $this->text->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_TEXT);
            $this->text->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->answerDecimal) && $this->answerDecimal->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ANSWER_DECIMAL);
            $this->answerDecimal->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->answerInteger) && $this->answerInteger->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ANSWER_INTEGER);
            $this->answerInteger->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->answerBoolean) && $this->answerBoolean->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ANSWER_BOOLEAN);
            $this->answerBoolean->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->answerDate) && $this->answerDate->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ANSWER_DATE);
            $this->answerDate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->answerString) && $this->answerString->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ANSWER_STRING);
            $this->answerString->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->answerDateTime) && $this->answerDateTime->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ANSWER_DATE_TIME);
            $this->answerDateTime->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->answerInstant) && $this->answerInstant->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ANSWER_INSTANT);
            $this->answerInstant->xmlSerialize($xw, $config);
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
        if (isset($this->dataBoolean) && $this->dataBoolean->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DATA_BOOLEAN);
            $this->dataBoolean->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dataInteger) && $this->dataInteger->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DATA_INTEGER);
            $this->dataInteger->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dataDecimal) && $this->dataDecimal->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DATA_DECIMAL);
            $this->dataDecimal->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dataBase64Binary) && $this->dataBase64Binary->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DATA_BASE_64BINARY);
            $this->dataBase64Binary->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dataInstant) && $this->dataInstant->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DATA_INSTANT);
            $this->dataInstant->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dataString) && $this->dataString->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DATA_STRING);
            $this->dataString->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dataUri) && $this->dataUri->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DATA_URI);
            $this->dataUri->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dataDate) && $this->dataDate->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DATA_DATE);
            $this->dataDate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dataDateTime) && $this->dataDateTime->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DATA_DATE_TIME);
            $this->dataDateTime->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dataCode) && $this->dataCode->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DATA_CODE);
            $this->dataCode->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dataOid) && $this->dataOid->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DATA_OID);
            $this->dataOid->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dataUuid) && $this->dataUuid->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DATA_UUID);
            $this->dataUuid->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dataId) && $this->dataId->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DATA_ID);
            $this->dataId->xmlSerialize($xw, $config);
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
        if (isset($this->remarks) && $this->remarks->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_REMARKS);
            $this->remarks->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->group)) {
            foreach ($this->group as $v) {
                $xw->startElement(self::FIELD_GROUP);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
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
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_NAME]) || array_key_exists(self::FIELD_NAME, $json)) {
            if ($json[self::FIELD_NAME] instanceof FHIRCodeableConcept) {
                $type->setName($json[self::FIELD_NAME]);
            } else {
                $type->setName(new FHIRCodeableConcept($json[self::FIELD_NAME]));
            }
        }
        if (isset($json[self::FIELD_TEXT]) || isset($json[self::FIELD_TEXT_EXT]) || array_key_exists(self::FIELD_TEXT, $json) || array_key_exists(self::FIELD_TEXT_EXT, $json)) {
            $value = $json[self::FIELD_TEXT] ?? null;
            $ext = (isset($json[self::FIELD_TEXT_EXT]) && is_array($json[self::FIELD_TEXT_EXT])) ? $json[self::FIELD_TEXT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setText($value);
                } else if (is_array($value)) {
                    $type->setText(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setText(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setText(new FHIRString($ext));
            } else {
                $type->setText(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_ANSWER_DECIMAL]) || isset($json[self::FIELD_ANSWER_DECIMAL_EXT]) || array_key_exists(self::FIELD_ANSWER_DECIMAL, $json) || array_key_exists(self::FIELD_ANSWER_DECIMAL_EXT, $json)) {
            $value = $json[self::FIELD_ANSWER_DECIMAL] ?? null;
            $ext = (isset($json[self::FIELD_ANSWER_DECIMAL_EXT]) && is_array($json[self::FIELD_ANSWER_DECIMAL_EXT])) ? $json[self::FIELD_ANSWER_DECIMAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $type->setAnswerDecimal($value);
                } else if (is_array($value)) {
                    $type->setAnswerDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $type->setAnswerDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setAnswerDecimal(new FHIRDecimal($ext));
            } else {
                $type->setAnswerDecimal(new FHIRDecimal(null));
            }
        }
        if (isset($json[self::FIELD_ANSWER_INTEGER]) || isset($json[self::FIELD_ANSWER_INTEGER_EXT]) || array_key_exists(self::FIELD_ANSWER_INTEGER, $json) || array_key_exists(self::FIELD_ANSWER_INTEGER_EXT, $json)) {
            $value = $json[self::FIELD_ANSWER_INTEGER] ?? null;
            $ext = (isset($json[self::FIELD_ANSWER_INTEGER_EXT]) && is_array($json[self::FIELD_ANSWER_INTEGER_EXT])) ? $json[self::FIELD_ANSWER_INTEGER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $type->setAnswerInteger($value);
                } else if (is_array($value)) {
                    $type->setAnswerInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $type->setAnswerInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setAnswerInteger(new FHIRInteger($ext));
            } else {
                $type->setAnswerInteger(new FHIRInteger(null));
            }
        }
        if (isset($json[self::FIELD_ANSWER_BOOLEAN]) || isset($json[self::FIELD_ANSWER_BOOLEAN_EXT]) || array_key_exists(self::FIELD_ANSWER_BOOLEAN, $json) || array_key_exists(self::FIELD_ANSWER_BOOLEAN_EXT, $json)) {
            $value = $json[self::FIELD_ANSWER_BOOLEAN] ?? null;
            $ext = (isset($json[self::FIELD_ANSWER_BOOLEAN_EXT]) && is_array($json[self::FIELD_ANSWER_BOOLEAN_EXT])) ? $json[self::FIELD_ANSWER_BOOLEAN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setAnswerBoolean($value);
                } else if (is_array($value)) {
                    $type->setAnswerBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setAnswerBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setAnswerBoolean(new FHIRBoolean($ext));
            } else {
                $type->setAnswerBoolean(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_ANSWER_DATE]) || isset($json[self::FIELD_ANSWER_DATE_EXT]) || array_key_exists(self::FIELD_ANSWER_DATE, $json) || array_key_exists(self::FIELD_ANSWER_DATE_EXT, $json)) {
            $value = $json[self::FIELD_ANSWER_DATE] ?? null;
            $ext = (isset($json[self::FIELD_ANSWER_DATE_EXT]) && is_array($json[self::FIELD_ANSWER_DATE_EXT])) ? $json[self::FIELD_ANSWER_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $type->setAnswerDate($value);
                } else if (is_array($value)) {
                    $type->setAnswerDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $type->setAnswerDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setAnswerDate(new FHIRDate($ext));
            } else {
                $type->setAnswerDate(new FHIRDate(null));
            }
        }
        if (isset($json[self::FIELD_ANSWER_STRING]) || isset($json[self::FIELD_ANSWER_STRING_EXT]) || array_key_exists(self::FIELD_ANSWER_STRING, $json) || array_key_exists(self::FIELD_ANSWER_STRING_EXT, $json)) {
            $value = $json[self::FIELD_ANSWER_STRING] ?? null;
            $ext = (isset($json[self::FIELD_ANSWER_STRING_EXT]) && is_array($json[self::FIELD_ANSWER_STRING_EXT])) ? $json[self::FIELD_ANSWER_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setAnswerString($value);
                } else if (is_array($value)) {
                    $type->setAnswerString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setAnswerString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setAnswerString(new FHIRString($ext));
            } else {
                $type->setAnswerString(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_ANSWER_DATE_TIME]) || isset($json[self::FIELD_ANSWER_DATE_TIME_EXT]) || array_key_exists(self::FIELD_ANSWER_DATE_TIME, $json) || array_key_exists(self::FIELD_ANSWER_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_ANSWER_DATE_TIME] ?? null;
            $ext = (isset($json[self::FIELD_ANSWER_DATE_TIME_EXT]) && is_array($json[self::FIELD_ANSWER_DATE_TIME_EXT])) ? $json[self::FIELD_ANSWER_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $type->setAnswerDateTime($value);
                } else if (is_array($value)) {
                    $type->setAnswerDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $type->setAnswerDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setAnswerDateTime(new FHIRDateTime($ext));
            } else {
                $type->setAnswerDateTime(new FHIRDateTime(null));
            }
        }
        if (isset($json[self::FIELD_ANSWER_INSTANT]) || isset($json[self::FIELD_ANSWER_INSTANT_EXT]) || array_key_exists(self::FIELD_ANSWER_INSTANT, $json) || array_key_exists(self::FIELD_ANSWER_INSTANT_EXT, $json)) {
            $value = $json[self::FIELD_ANSWER_INSTANT] ?? null;
            $ext = (isset($json[self::FIELD_ANSWER_INSTANT_EXT]) && is_array($json[self::FIELD_ANSWER_INSTANT_EXT])) ? $json[self::FIELD_ANSWER_INSTANT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $type->setAnswerInstant($value);
                } else if (is_array($value)) {
                    $type->setAnswerInstant(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $type->setAnswerInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setAnswerInstant(new FHIRInstant($ext));
            } else {
                $type->setAnswerInstant(new FHIRInstant(null));
            }
        }
        if (isset($json[self::FIELD_CHOICE]) || array_key_exists(self::FIELD_CHOICE, $json)) {
            if (is_array($json[self::FIELD_CHOICE])) {
                foreach($json[self::FIELD_CHOICE] as $v) {
                    if ($v instanceof FHIRCoding) {
                        $type->addChoice($v);
                    } else {
                        $type->addChoice(new FHIRCoding($v));
                    }
                }
            } elseif ($json[self::FIELD_CHOICE] instanceof FHIRCoding) {
                $type->addChoice($json[self::FIELD_CHOICE]);
            } else {
                $type->addChoice(new FHIRCoding($json[self::FIELD_CHOICE]));
            }
        }
        if (isset($json[self::FIELD_OPTIONS]) || array_key_exists(self::FIELD_OPTIONS, $json)) {
            if ($json[self::FIELD_OPTIONS] instanceof FHIRResourceReference) {
                $type->setOptions($json[self::FIELD_OPTIONS]);
            } else {
                $type->setOptions(new FHIRResourceReference($json[self::FIELD_OPTIONS]));
            }
        }
        if (isset($json[self::FIELD_DATA_BOOLEAN]) || isset($json[self::FIELD_DATA_BOOLEAN_EXT]) || array_key_exists(self::FIELD_DATA_BOOLEAN, $json) || array_key_exists(self::FIELD_DATA_BOOLEAN_EXT, $json)) {
            $value = $json[self::FIELD_DATA_BOOLEAN] ?? null;
            $ext = (isset($json[self::FIELD_DATA_BOOLEAN_EXT]) && is_array($json[self::FIELD_DATA_BOOLEAN_EXT])) ? $json[self::FIELD_DATA_BOOLEAN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setDataBoolean($value);
                } else if (is_array($value)) {
                    $type->setDataBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setDataBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDataBoolean(new FHIRBoolean($ext));
            } else {
                $type->setDataBoolean(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_DATA_INTEGER]) || isset($json[self::FIELD_DATA_INTEGER_EXT]) || array_key_exists(self::FIELD_DATA_INTEGER, $json) || array_key_exists(self::FIELD_DATA_INTEGER_EXT, $json)) {
            $value = $json[self::FIELD_DATA_INTEGER] ?? null;
            $ext = (isset($json[self::FIELD_DATA_INTEGER_EXT]) && is_array($json[self::FIELD_DATA_INTEGER_EXT])) ? $json[self::FIELD_DATA_INTEGER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $type->setDataInteger($value);
                } else if (is_array($value)) {
                    $type->setDataInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $type->setDataInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDataInteger(new FHIRInteger($ext));
            } else {
                $type->setDataInteger(new FHIRInteger(null));
            }
        }
        if (isset($json[self::FIELD_DATA_DECIMAL]) || isset($json[self::FIELD_DATA_DECIMAL_EXT]) || array_key_exists(self::FIELD_DATA_DECIMAL, $json) || array_key_exists(self::FIELD_DATA_DECIMAL_EXT, $json)) {
            $value = $json[self::FIELD_DATA_DECIMAL] ?? null;
            $ext = (isset($json[self::FIELD_DATA_DECIMAL_EXT]) && is_array($json[self::FIELD_DATA_DECIMAL_EXT])) ? $json[self::FIELD_DATA_DECIMAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $type->setDataDecimal($value);
                } else if (is_array($value)) {
                    $type->setDataDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $type->setDataDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDataDecimal(new FHIRDecimal($ext));
            } else {
                $type->setDataDecimal(new FHIRDecimal(null));
            }
        }
        if (isset($json[self::FIELD_DATA_BASE_64BINARY]) || isset($json[self::FIELD_DATA_BASE_64BINARY_EXT]) || array_key_exists(self::FIELD_DATA_BASE_64BINARY, $json) || array_key_exists(self::FIELD_DATA_BASE_64BINARY_EXT, $json)) {
            $value = $json[self::FIELD_DATA_BASE_64BINARY] ?? null;
            $ext = (isset($json[self::FIELD_DATA_BASE_64BINARY_EXT]) && is_array($json[self::FIELD_DATA_BASE_64BINARY_EXT])) ? $json[self::FIELD_DATA_BASE_64BINARY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBase64Binary) {
                    $type->setDataBase64Binary($value);
                } else if (is_array($value)) {
                    $type->setDataBase64Binary(new FHIRBase64Binary(array_merge($ext, $value)));
                } else {
                    $type->setDataBase64Binary(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDataBase64Binary(new FHIRBase64Binary($ext));
            } else {
                $type->setDataBase64Binary(new FHIRBase64Binary(null));
            }
        }
        if (isset($json[self::FIELD_DATA_INSTANT]) || isset($json[self::FIELD_DATA_INSTANT_EXT]) || array_key_exists(self::FIELD_DATA_INSTANT, $json) || array_key_exists(self::FIELD_DATA_INSTANT_EXT, $json)) {
            $value = $json[self::FIELD_DATA_INSTANT] ?? null;
            $ext = (isset($json[self::FIELD_DATA_INSTANT_EXT]) && is_array($json[self::FIELD_DATA_INSTANT_EXT])) ? $json[self::FIELD_DATA_INSTANT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $type->setDataInstant($value);
                } else if (is_array($value)) {
                    $type->setDataInstant(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $type->setDataInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDataInstant(new FHIRInstant($ext));
            } else {
                $type->setDataInstant(new FHIRInstant(null));
            }
        }
        if (isset($json[self::FIELD_DATA_STRING]) || isset($json[self::FIELD_DATA_STRING_EXT]) || array_key_exists(self::FIELD_DATA_STRING, $json) || array_key_exists(self::FIELD_DATA_STRING_EXT, $json)) {
            $value = $json[self::FIELD_DATA_STRING] ?? null;
            $ext = (isset($json[self::FIELD_DATA_STRING_EXT]) && is_array($json[self::FIELD_DATA_STRING_EXT])) ? $json[self::FIELD_DATA_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setDataString($value);
                } else if (is_array($value)) {
                    $type->setDataString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setDataString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDataString(new FHIRString($ext));
            } else {
                $type->setDataString(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_DATA_URI]) || isset($json[self::FIELD_DATA_URI_EXT]) || array_key_exists(self::FIELD_DATA_URI, $json) || array_key_exists(self::FIELD_DATA_URI_EXT, $json)) {
            $value = $json[self::FIELD_DATA_URI] ?? null;
            $ext = (isset($json[self::FIELD_DATA_URI_EXT]) && is_array($json[self::FIELD_DATA_URI_EXT])) ? $json[self::FIELD_DATA_URI_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $type->setDataUri($value);
                } else if (is_array($value)) {
                    $type->setDataUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $type->setDataUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDataUri(new FHIRUri($ext));
            } else {
                $type->setDataUri(new FHIRUri(null));
            }
        }
        if (isset($json[self::FIELD_DATA_DATE]) || isset($json[self::FIELD_DATA_DATE_EXT]) || array_key_exists(self::FIELD_DATA_DATE, $json) || array_key_exists(self::FIELD_DATA_DATE_EXT, $json)) {
            $value = $json[self::FIELD_DATA_DATE] ?? null;
            $ext = (isset($json[self::FIELD_DATA_DATE_EXT]) && is_array($json[self::FIELD_DATA_DATE_EXT])) ? $json[self::FIELD_DATA_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $type->setDataDate($value);
                } else if (is_array($value)) {
                    $type->setDataDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $type->setDataDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDataDate(new FHIRDate($ext));
            } else {
                $type->setDataDate(new FHIRDate(null));
            }
        }
        if (isset($json[self::FIELD_DATA_DATE_TIME]) || isset($json[self::FIELD_DATA_DATE_TIME_EXT]) || array_key_exists(self::FIELD_DATA_DATE_TIME, $json) || array_key_exists(self::FIELD_DATA_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_DATA_DATE_TIME] ?? null;
            $ext = (isset($json[self::FIELD_DATA_DATE_TIME_EXT]) && is_array($json[self::FIELD_DATA_DATE_TIME_EXT])) ? $json[self::FIELD_DATA_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $type->setDataDateTime($value);
                } else if (is_array($value)) {
                    $type->setDataDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $type->setDataDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDataDateTime(new FHIRDateTime($ext));
            } else {
                $type->setDataDateTime(new FHIRDateTime(null));
            }
        }
        if (isset($json[self::FIELD_DATA_CODE]) || isset($json[self::FIELD_DATA_CODE_EXT]) || array_key_exists(self::FIELD_DATA_CODE, $json) || array_key_exists(self::FIELD_DATA_CODE_EXT, $json)) {
            $value = $json[self::FIELD_DATA_CODE] ?? null;
            $ext = (isset($json[self::FIELD_DATA_CODE_EXT]) && is_array($json[self::FIELD_DATA_CODE_EXT])) ? $json[self::FIELD_DATA_CODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $type->setDataCode($value);
                } else if (is_array($value)) {
                    $type->setDataCode(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $type->setDataCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDataCode(new FHIRCode($ext));
            } else {
                $type->setDataCode(new FHIRCode(null));
            }
        }
        if (isset($json[self::FIELD_DATA_OID]) || isset($json[self::FIELD_DATA_OID_EXT]) || array_key_exists(self::FIELD_DATA_OID, $json) || array_key_exists(self::FIELD_DATA_OID_EXT, $json)) {
            $value = $json[self::FIELD_DATA_OID] ?? null;
            $ext = (isset($json[self::FIELD_DATA_OID_EXT]) && is_array($json[self::FIELD_DATA_OID_EXT])) ? $json[self::FIELD_DATA_OID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIROid) {
                    $type->setDataOid($value);
                } else if (is_array($value)) {
                    $type->setDataOid(new FHIROid(array_merge($ext, $value)));
                } else {
                    $type->setDataOid(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDataOid(new FHIROid($ext));
            } else {
                $type->setDataOid(new FHIROid(null));
            }
        }
        if (isset($json[self::FIELD_DATA_UUID]) || isset($json[self::FIELD_DATA_UUID_EXT]) || array_key_exists(self::FIELD_DATA_UUID, $json) || array_key_exists(self::FIELD_DATA_UUID_EXT, $json)) {
            $value = $json[self::FIELD_DATA_UUID] ?? null;
            $ext = (isset($json[self::FIELD_DATA_UUID_EXT]) && is_array($json[self::FIELD_DATA_UUID_EXT])) ? $json[self::FIELD_DATA_UUID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUuid) {
                    $type->setDataUuid($value);
                } else if (is_array($value)) {
                    $type->setDataUuid(new FHIRUuid(array_merge($ext, $value)));
                } else {
                    $type->setDataUuid(new FHIRUuid([FHIRUuid::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDataUuid(new FHIRUuid($ext));
            } else {
                $type->setDataUuid(new FHIRUuid(null));
            }
        }
        if (isset($json[self::FIELD_DATA_ID]) || isset($json[self::FIELD_DATA_ID_EXT]) || array_key_exists(self::FIELD_DATA_ID, $json) || array_key_exists(self::FIELD_DATA_ID_EXT, $json)) {
            $value = $json[self::FIELD_DATA_ID] ?? null;
            $ext = (isset($json[self::FIELD_DATA_ID_EXT]) && is_array($json[self::FIELD_DATA_ID_EXT])) ? $json[self::FIELD_DATA_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $type->setDataId($value);
                } else if (is_array($value)) {
                    $type->setDataId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $type->setDataId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDataId(new FHIRId($ext));
            } else {
                $type->setDataId(new FHIRId(null));
            }
        }
        if (isset($json[self::FIELD_DATA_ATTACHMENT]) || array_key_exists(self::FIELD_DATA_ATTACHMENT, $json)) {
            if ($json[self::FIELD_DATA_ATTACHMENT] instanceof FHIRAttachment) {
                $type->setDataAttachment($json[self::FIELD_DATA_ATTACHMENT]);
            } else {
                $type->setDataAttachment(new FHIRAttachment($json[self::FIELD_DATA_ATTACHMENT]));
            }
        }
        if (isset($json[self::FIELD_DATA_IDENTIFIER]) || array_key_exists(self::FIELD_DATA_IDENTIFIER, $json)) {
            if ($json[self::FIELD_DATA_IDENTIFIER] instanceof FHIRIdentifier) {
                $type->setDataIdentifier($json[self::FIELD_DATA_IDENTIFIER]);
            } else {
                $type->setDataIdentifier(new FHIRIdentifier($json[self::FIELD_DATA_IDENTIFIER]));
            }
        }
        if (isset($json[self::FIELD_DATA_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_DATA_CODEABLE_CONCEPT, $json)) {
            if ($json[self::FIELD_DATA_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $type->setDataCodeableConcept($json[self::FIELD_DATA_CODEABLE_CONCEPT]);
            } else {
                $type->setDataCodeableConcept(new FHIRCodeableConcept($json[self::FIELD_DATA_CODEABLE_CONCEPT]));
            }
        }
        if (isset($json[self::FIELD_DATA_CODING]) || array_key_exists(self::FIELD_DATA_CODING, $json)) {
            if ($json[self::FIELD_DATA_CODING] instanceof FHIRCoding) {
                $type->setDataCoding($json[self::FIELD_DATA_CODING]);
            } else {
                $type->setDataCoding(new FHIRCoding($json[self::FIELD_DATA_CODING]));
            }
        }
        if (isset($json[self::FIELD_DATA_QUANTITY]) || array_key_exists(self::FIELD_DATA_QUANTITY, $json)) {
            if ($json[self::FIELD_DATA_QUANTITY] instanceof FHIRQuantity) {
                $type->setDataQuantity($json[self::FIELD_DATA_QUANTITY]);
            } else {
                $type->setDataQuantity(new FHIRQuantity($json[self::FIELD_DATA_QUANTITY]));
            }
        }
        if (isset($json[self::FIELD_DATA_RANGE]) || array_key_exists(self::FIELD_DATA_RANGE, $json)) {
            if ($json[self::FIELD_DATA_RANGE] instanceof FHIRRange) {
                $type->setDataRange($json[self::FIELD_DATA_RANGE]);
            } else {
                $type->setDataRange(new FHIRRange($json[self::FIELD_DATA_RANGE]));
            }
        }
        if (isset($json[self::FIELD_DATA_PERIOD]) || array_key_exists(self::FIELD_DATA_PERIOD, $json)) {
            if ($json[self::FIELD_DATA_PERIOD] instanceof FHIRPeriod) {
                $type->setDataPeriod($json[self::FIELD_DATA_PERIOD]);
            } else {
                $type->setDataPeriod(new FHIRPeriod($json[self::FIELD_DATA_PERIOD]));
            }
        }
        if (isset($json[self::FIELD_DATA_RATIO]) || array_key_exists(self::FIELD_DATA_RATIO, $json)) {
            if ($json[self::FIELD_DATA_RATIO] instanceof FHIRRatio) {
                $type->setDataRatio($json[self::FIELD_DATA_RATIO]);
            } else {
                $type->setDataRatio(new FHIRRatio($json[self::FIELD_DATA_RATIO]));
            }
        }
        if (isset($json[self::FIELD_DATA_RESOURCE]) || array_key_exists(self::FIELD_DATA_RESOURCE, $json)) {
            if ($json[self::FIELD_DATA_RESOURCE] instanceof FHIRResourceReference) {
                $type->setDataResource($json[self::FIELD_DATA_RESOURCE]);
            } else {
                $type->setDataResource(new FHIRResourceReference($json[self::FIELD_DATA_RESOURCE]));
            }
        }
        if (isset($json[self::FIELD_DATA_SAMPLED_DATA]) || array_key_exists(self::FIELD_DATA_SAMPLED_DATA, $json)) {
            if ($json[self::FIELD_DATA_SAMPLED_DATA] instanceof FHIRSampledData) {
                $type->setDataSampledData($json[self::FIELD_DATA_SAMPLED_DATA]);
            } else {
                $type->setDataSampledData(new FHIRSampledData($json[self::FIELD_DATA_SAMPLED_DATA]));
            }
        }
        if (isset($json[self::FIELD_DATA_HUMAN_NAME]) || array_key_exists(self::FIELD_DATA_HUMAN_NAME, $json)) {
            if ($json[self::FIELD_DATA_HUMAN_NAME] instanceof FHIRHumanName) {
                $type->setDataHumanName($json[self::FIELD_DATA_HUMAN_NAME]);
            } else {
                $type->setDataHumanName(new FHIRHumanName($json[self::FIELD_DATA_HUMAN_NAME]));
            }
        }
        if (isset($json[self::FIELD_DATA_ADDRESS]) || array_key_exists(self::FIELD_DATA_ADDRESS, $json)) {
            if ($json[self::FIELD_DATA_ADDRESS] instanceof FHIRAddress) {
                $type->setDataAddress($json[self::FIELD_DATA_ADDRESS]);
            } else {
                $type->setDataAddress(new FHIRAddress($json[self::FIELD_DATA_ADDRESS]));
            }
        }
        if (isset($json[self::FIELD_DATA_CONTACT]) || array_key_exists(self::FIELD_DATA_CONTACT, $json)) {
            if ($json[self::FIELD_DATA_CONTACT] instanceof FHIRContact) {
                $type->setDataContact($json[self::FIELD_DATA_CONTACT]);
            } else {
                $type->setDataContact(new FHIRContact($json[self::FIELD_DATA_CONTACT]));
            }
        }
        if (isset($json[self::FIELD_DATA_SCHEDULE]) || array_key_exists(self::FIELD_DATA_SCHEDULE, $json)) {
            if ($json[self::FIELD_DATA_SCHEDULE] instanceof FHIRSchedule) {
                $type->setDataSchedule($json[self::FIELD_DATA_SCHEDULE]);
            } else {
                $type->setDataSchedule(new FHIRSchedule($json[self::FIELD_DATA_SCHEDULE]));
            }
        }
        if (isset($json[self::FIELD_REMARKS]) || isset($json[self::FIELD_REMARKS_EXT]) || array_key_exists(self::FIELD_REMARKS, $json) || array_key_exists(self::FIELD_REMARKS_EXT, $json)) {
            $value = $json[self::FIELD_REMARKS] ?? null;
            $ext = (isset($json[self::FIELD_REMARKS_EXT]) && is_array($json[self::FIELD_REMARKS_EXT])) ? $json[self::FIELD_REMARKS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setRemarks($value);
                } else if (is_array($value)) {
                    $type->setRemarks(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setRemarks(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setRemarks(new FHIRString($ext));
            } else {
                $type->setRemarks(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_GROUP]) || array_key_exists(self::FIELD_GROUP, $json)) {
            if (is_array($json[self::FIELD_GROUP])) {
                foreach($json[self::FIELD_GROUP] as $v) {
                    if ($v instanceof FHIRQuestionnaireGroup) {
                        $type->addGroup($v);
                    } else {
                        $type->addGroup(new FHIRQuestionnaireGroup($v));
                    }
                }
            } elseif ($json[self::FIELD_GROUP] instanceof FHIRQuestionnaireGroup) {
                $type->addGroup($json[self::FIELD_GROUP]);
            } else {
                $type->addGroup(new FHIRQuestionnaireGroup($json[self::FIELD_GROUP]));
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
            $ext = $this->text->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_text = $ext;
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
        if (isset($this->answerInstant)) {
            if (null !== ($val = $this->answerInstant->getValue())) {
                $out->answerInstant = $val;
            }
            $ext = $this->answerInstant->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_answerInstant = $ext;
            }
        }
        if (isset($this->choice) && [] !== $this->choice) {
            $out->choice = $this->choice;
        }
        if (isset($this->options)) {
            $out->options = $this->options;
        }
        if (isset($this->dataBoolean)) {
            if (null !== ($val = $this->dataBoolean->getValue())) {
                $out->dataBoolean = $val;
            }
            $ext = $this->dataBoolean->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_dataBoolean = $ext;
            }
        }
        if (isset($this->dataInteger)) {
            if (null !== ($val = $this->dataInteger->getValue())) {
                $out->dataInteger = $val;
            }
            $ext = $this->dataInteger->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_dataInteger = $ext;
            }
        }
        if (isset($this->dataDecimal)) {
            if (null !== ($val = $this->dataDecimal->getValue())) {
                $out->dataDecimal = $val;
            }
            $ext = $this->dataDecimal->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_dataDecimal = $ext;
            }
        }
        if (isset($this->dataBase64Binary)) {
            if (null !== ($val = $this->dataBase64Binary->getValue())) {
                $out->dataBase64Binary = $val;
            }
            $ext = $this->dataBase64Binary->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_dataBase64Binary = $ext;
            }
        }
        if (isset($this->dataInstant)) {
            if (null !== ($val = $this->dataInstant->getValue())) {
                $out->dataInstant = $val;
            }
            $ext = $this->dataInstant->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_dataInstant = $ext;
            }
        }
        if (isset($this->dataString)) {
            if (null !== ($val = $this->dataString->getValue())) {
                $out->dataString = $val;
            }
            $ext = $this->dataString->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_dataString = $ext;
            }
        }
        if (isset($this->dataUri)) {
            if (null !== ($val = $this->dataUri->getValue())) {
                $out->dataUri = $val;
            }
            $ext = $this->dataUri->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_dataUri = $ext;
            }
        }
        if (isset($this->dataDate)) {
            if (null !== ($val = $this->dataDate->getValue())) {
                $out->dataDate = $val;
            }
            $ext = $this->dataDate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_dataDate = $ext;
            }
        }
        if (isset($this->dataDateTime)) {
            if (null !== ($val = $this->dataDateTime->getValue())) {
                $out->dataDateTime = $val;
            }
            $ext = $this->dataDateTime->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_dataDateTime = $ext;
            }
        }
        if (isset($this->dataCode)) {
            if (null !== ($val = $this->dataCode->getValue())) {
                $out->dataCode = $val;
            }
            $ext = $this->dataCode->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_dataCode = $ext;
            }
        }
        if (isset($this->dataOid)) {
            if (null !== ($val = $this->dataOid->getValue())) {
                $out->dataOid = $val;
            }
            $ext = $this->dataOid->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_dataOid = $ext;
            }
        }
        if (isset($this->dataUuid)) {
            if (null !== ($val = $this->dataUuid->getValue())) {
                $out->dataUuid = $val;
            }
            $ext = $this->dataUuid->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_dataUuid = $ext;
            }
        }
        if (isset($this->dataId)) {
            if (null !== ($val = $this->dataId->getValue())) {
                $out->dataId = $val;
            }
            $ext = $this->dataId->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
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
            $ext = $this->remarks->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_remarks = $ext;
            }
        }
        if (isset($this->group) && [] !== $this->group) {
            $out->group = $this->group;
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