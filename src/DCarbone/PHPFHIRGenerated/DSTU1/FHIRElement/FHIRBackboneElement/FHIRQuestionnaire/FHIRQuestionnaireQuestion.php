<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 22nd, 2024 02:47+0000
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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRBase64BinaryPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRContact;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRHumanName;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROid;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRatio;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSampledData;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUuid;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIROidPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRUuidPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter;

/**
 * A structured set of questions and their answers. The Questionnaire may contain
 * questions, answers or both. The questions are ordered and grouped into coherent
 * subsets, corresponding to the structure of the grouping of the underlying
 * questions.
 *
 * Class FHIRQuestionnaireQuestion
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire
 */
class FHIRQuestionnaireQuestion extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION;

    const FIELD_NAME = 'name';
    const FIELD_TEXT = 'text';
    const FIELD_TEXT_EXT = '_text';
    const FIELD_ANSWER_DECIMAL = 'answerDecimal';
    const FIELD_ANSWER_DECIMAL_EXT = '_answerDecimal';
    const FIELD_ANSWER_INTEGER = 'answerInteger';
    const FIELD_ANSWER_INTEGER_EXT = '_answerInteger';
    const FIELD_ANSWER_BOOLEAN = 'answerBoolean';
    const FIELD_ANSWER_BOOLEAN_EXT = '_answerBoolean';
    const FIELD_ANSWER_DATE = 'answerDate';
    const FIELD_ANSWER_DATE_EXT = '_answerDate';
    const FIELD_ANSWER_STRING = 'answerString';
    const FIELD_ANSWER_STRING_EXT = '_answerString';
    const FIELD_ANSWER_DATE_TIME = 'answerDateTime';
    const FIELD_ANSWER_DATE_TIME_EXT = '_answerDateTime';
    const FIELD_ANSWER_INSTANT = 'answerInstant';
    const FIELD_ANSWER_INSTANT_EXT = '_answerInstant';
    const FIELD_CHOICE = 'choice';
    const FIELD_OPTIONS = 'options';
    const FIELD_DATA_BOOLEAN = 'dataBoolean';
    const FIELD_DATA_BOOLEAN_EXT = '_dataBoolean';
    const FIELD_DATA_INTEGER = 'dataInteger';
    const FIELD_DATA_INTEGER_EXT = '_dataInteger';
    const FIELD_DATA_DECIMAL = 'dataDecimal';
    const FIELD_DATA_DECIMAL_EXT = '_dataDecimal';
    const FIELD_DATA_BASE_64BINARY = 'dataBase64Binary';
    const FIELD_DATA_BASE_64BINARY_EXT = '_dataBase64Binary';
    const FIELD_DATA_INSTANT = 'dataInstant';
    const FIELD_DATA_INSTANT_EXT = '_dataInstant';
    const FIELD_DATA_STRING = 'dataString';
    const FIELD_DATA_STRING_EXT = '_dataString';
    const FIELD_DATA_URI = 'dataUri';
    const FIELD_DATA_URI_EXT = '_dataUri';
    const FIELD_DATA_DATE = 'dataDate';
    const FIELD_DATA_DATE_EXT = '_dataDate';
    const FIELD_DATA_DATE_TIME = 'dataDateTime';
    const FIELD_DATA_DATE_TIME_EXT = '_dataDateTime';
    const FIELD_DATA_CODE = 'dataCode';
    const FIELD_DATA_CODE_EXT = '_dataCode';
    const FIELD_DATA_OID = 'dataOid';
    const FIELD_DATA_OID_EXT = '_dataOid';
    const FIELD_DATA_UUID = 'dataUuid';
    const FIELD_DATA_UUID_EXT = '_dataUuid';
    const FIELD_DATA_ID = 'dataId';
    const FIELD_DATA_ID_EXT = '_dataId';
    const FIELD_DATA_ATTACHMENT = 'dataAttachment';
    const FIELD_DATA_IDENTIFIER = 'dataIdentifier';
    const FIELD_DATA_CODEABLE_CONCEPT = 'dataCodeableConcept';
    const FIELD_DATA_CODING = 'dataCoding';
    const FIELD_DATA_QUANTITY = 'dataQuantity';
    const FIELD_DATA_RANGE = 'dataRange';
    const FIELD_DATA_PERIOD = 'dataPeriod';
    const FIELD_DATA_RATIO = 'dataRatio';
    const FIELD_DATA_RESOURCE = 'dataResource';
    const FIELD_DATA_SAMPLED_DATA = 'dataSampledData';
    const FIELD_DATA_HUMAN_NAME = 'dataHumanName';
    const FIELD_DATA_ADDRESS = 'dataAddress';
    const FIELD_DATA_CONTACT = 'dataContact';
    const FIELD_DATA_SCHEDULE = 'dataSchedule';
    const FIELD_REMARKS = 'remarks';
    const FIELD_REMARKS_EXT = '_remarks';
    const FIELD_GROUP = 'group';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured name for the question that identifies this question within the
     * Questionnaire or Group.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $name = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text of the question as it is shown to the user.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected null|FHIRString $text = null;
    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $answerDecimal = null;
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $answerInteger = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $answerBoolean = null;
    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate
     */
    protected null|FHIRDate $answerDate = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected null|FHIRString $answerString = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $answerDateTime = null;
    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant
     */
    protected null|FHIRInstant $answerInstant = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Selections made by the user from the list of options.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding[]
     */
    protected null|array $choice = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to a valueset containing the possible options.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected null|FHIRResourceReference $options = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $dataBoolean = null;
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $dataInteger = null;
    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $dataDecimal = null;
    /**
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary
     */
    protected null|FHIRBase64Binary $dataBase64Binary = null;
    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant
     */
    protected null|FHIRInstant $dataInstant = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected null|FHIRString $dataString = null;
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $dataUri = null;
    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate
     */
    protected null|FHIRDate $dataDate = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $dataDateTime = null;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    protected null|FHIRCode $dataCode = null;
    /**
     * An oid represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROid
     */
    protected null|FHIROid $dataOid = null;
    /**
     * A UUID, represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUuid
     */
    protected null|FHIRUuid $dataUuid = null;
    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId
     */
    protected null|FHIRId $dataId = null;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment
     */
    protected null|FHIRAttachment $dataAttachment = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier
     */
    protected null|FHIRIdentifier $dataIdentifier = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $dataCodeableConcept = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding
     */
    protected null|FHIRCoding $dataCoding = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity
     */
    protected null|FHIRQuantity $dataQuantity = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRange
     */
    protected null|FHIRRange $dataRange = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $dataPeriod = null;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRatio
     */
    protected null|FHIRRatio $dataRatio = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected null|FHIRResourceReference $dataResource = null;
    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSampledData
     */
    protected null|FHIRSampledData $dataSampledData = null;
    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRHumanName
     */
    protected null|FHIRHumanName $dataHumanName = null;
    /**
     * There is a variety of postal address formats defined around the world. This
     * format defines a superset that is the basis for all addresses around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress
     */
    protected null|FHIRAddress $dataAddress = null;
    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRContact
     */
    protected null|FHIRContact $dataContact = null;
    /**
     * Specifies an event that may occur multiple times. Schedules are used for to
     * reord when things are expected or requested to occur.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule
     */
    protected null|FHIRSchedule $dataSchedule = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The remark contains information about the answer given. This is additional
     * information about the answer the author wishes to convey, but should not be used
     * to contain information that is part of the answer itself.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected null|FHIRString $remarks = null;
    /**
     * A structured set of questions and their answers. The Questionnaire may contain
     * questions, answers or both. The questions are ordered and grouped into coherent
     * subsets, corresponding to the structure of the grouping of the underlying
     * questions.
     *
     * Nested group, containing nested question for this question. The order of groups
     * within the question is relevant.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup[]
     */
    protected null|array $group = [];

    /**
     * Validation map for fields in type Questionnaire.Question
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRQuestionnaireQuestion Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_NAME, $data)) {
            if ($data[self::FIELD_NAME] instanceof FHIRCodeableConcept) {
                $this->setName($data[self::FIELD_NAME]);
            } else {
                $this->setName(new FHIRCodeableConcept($data[self::FIELD_NAME]));
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
        if (array_key_exists(self::FIELD_ANSWER_DECIMAL, $data) || array_key_exists(self::FIELD_ANSWER_DECIMAL_EXT, $data)) {
            $value = $data[self::FIELD_ANSWER_DECIMAL] ?? null;
            $ext = (isset($data[self::FIELD_ANSWER_DECIMAL_EXT]) && is_array($data[self::FIELD_ANSWER_DECIMAL_EXT])) ? $data[self::FIELD_ANSWER_DECIMAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setAnswerDecimal($value);
                } else if (is_array($value)) {
                    $this->setAnswerDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setAnswerDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAnswerDecimal(new FHIRDecimal($ext));
            } else {
                $this->setAnswerDecimal(new FHIRDecimal(null));
            }
        }
        if (array_key_exists(self::FIELD_ANSWER_INTEGER, $data) || array_key_exists(self::FIELD_ANSWER_INTEGER_EXT, $data)) {
            $value = $data[self::FIELD_ANSWER_INTEGER] ?? null;
            $ext = (isset($data[self::FIELD_ANSWER_INTEGER_EXT]) && is_array($data[self::FIELD_ANSWER_INTEGER_EXT])) ? $data[self::FIELD_ANSWER_INTEGER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setAnswerInteger($value);
                } else if (is_array($value)) {
                    $this->setAnswerInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setAnswerInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAnswerInteger(new FHIRInteger($ext));
            } else {
                $this->setAnswerInteger(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_ANSWER_BOOLEAN, $data) || array_key_exists(self::FIELD_ANSWER_BOOLEAN_EXT, $data)) {
            $value = $data[self::FIELD_ANSWER_BOOLEAN] ?? null;
            $ext = (isset($data[self::FIELD_ANSWER_BOOLEAN_EXT]) && is_array($data[self::FIELD_ANSWER_BOOLEAN_EXT])) ? $data[self::FIELD_ANSWER_BOOLEAN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setAnswerBoolean($value);
                } else if (is_array($value)) {
                    $this->setAnswerBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setAnswerBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAnswerBoolean(new FHIRBoolean($ext));
            } else {
                $this->setAnswerBoolean(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_ANSWER_DATE, $data) || array_key_exists(self::FIELD_ANSWER_DATE_EXT, $data)) {
            $value = $data[self::FIELD_ANSWER_DATE] ?? null;
            $ext = (isset($data[self::FIELD_ANSWER_DATE_EXT]) && is_array($data[self::FIELD_ANSWER_DATE_EXT])) ? $data[self::FIELD_ANSWER_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setAnswerDate($value);
                } else if (is_array($value)) {
                    $this->setAnswerDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setAnswerDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAnswerDate(new FHIRDate($ext));
            } else {
                $this->setAnswerDate(new FHIRDate(null));
            }
        }
        if (array_key_exists(self::FIELD_ANSWER_STRING, $data) || array_key_exists(self::FIELD_ANSWER_STRING_EXT, $data)) {
            $value = $data[self::FIELD_ANSWER_STRING] ?? null;
            $ext = (isset($data[self::FIELD_ANSWER_STRING_EXT]) && is_array($data[self::FIELD_ANSWER_STRING_EXT])) ? $data[self::FIELD_ANSWER_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setAnswerString($value);
                } else if (is_array($value)) {
                    $this->setAnswerString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setAnswerString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAnswerString(new FHIRString($ext));
            } else {
                $this->setAnswerString(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_ANSWER_DATE_TIME, $data) || array_key_exists(self::FIELD_ANSWER_DATE_TIME_EXT, $data)) {
            $value = $data[self::FIELD_ANSWER_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_ANSWER_DATE_TIME_EXT]) && is_array($data[self::FIELD_ANSWER_DATE_TIME_EXT])) ? $data[self::FIELD_ANSWER_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setAnswerDateTime($value);
                } else if (is_array($value)) {
                    $this->setAnswerDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setAnswerDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAnswerDateTime(new FHIRDateTime($ext));
            } else {
                $this->setAnswerDateTime(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_ANSWER_INSTANT, $data) || array_key_exists(self::FIELD_ANSWER_INSTANT_EXT, $data)) {
            $value = $data[self::FIELD_ANSWER_INSTANT] ?? null;
            $ext = (isset($data[self::FIELD_ANSWER_INSTANT_EXT]) && is_array($data[self::FIELD_ANSWER_INSTANT_EXT])) ? $data[self::FIELD_ANSWER_INSTANT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setAnswerInstant($value);
                } else if (is_array($value)) {
                    $this->setAnswerInstant(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setAnswerInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAnswerInstant(new FHIRInstant($ext));
            } else {
                $this->setAnswerInstant(new FHIRInstant(null));
            }
        }
        if (array_key_exists(self::FIELD_CHOICE, $data)) {
            if (is_array($data[self::FIELD_CHOICE])) {
                foreach($data[self::FIELD_CHOICE] as $v) {
                    if ($v instanceof FHIRCoding) {
                        $this->addChoice($v);
                    } else {
                        $this->addChoice(new FHIRCoding($v));
                    }
                }
            } elseif ($data[self::FIELD_CHOICE] instanceof FHIRCoding) {
                $this->addChoice($data[self::FIELD_CHOICE]);
            } else {
                $this->addChoice(new FHIRCoding($data[self::FIELD_CHOICE]));
            }
        }
        if (array_key_exists(self::FIELD_OPTIONS, $data)) {
            if ($data[self::FIELD_OPTIONS] instanceof FHIRResourceReference) {
                $this->setOptions($data[self::FIELD_OPTIONS]);
            } else {
                $this->setOptions(new FHIRResourceReference($data[self::FIELD_OPTIONS]));
            }
        }
        if (array_key_exists(self::FIELD_DATA_BOOLEAN, $data) || array_key_exists(self::FIELD_DATA_BOOLEAN_EXT, $data)) {
            $value = $data[self::FIELD_DATA_BOOLEAN] ?? null;
            $ext = (isset($data[self::FIELD_DATA_BOOLEAN_EXT]) && is_array($data[self::FIELD_DATA_BOOLEAN_EXT])) ? $data[self::FIELD_DATA_BOOLEAN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setDataBoolean($value);
                } else if (is_array($value)) {
                    $this->setDataBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setDataBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDataBoolean(new FHIRBoolean($ext));
            } else {
                $this->setDataBoolean(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_DATA_INTEGER, $data) || array_key_exists(self::FIELD_DATA_INTEGER_EXT, $data)) {
            $value = $data[self::FIELD_DATA_INTEGER] ?? null;
            $ext = (isset($data[self::FIELD_DATA_INTEGER_EXT]) && is_array($data[self::FIELD_DATA_INTEGER_EXT])) ? $data[self::FIELD_DATA_INTEGER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setDataInteger($value);
                } else if (is_array($value)) {
                    $this->setDataInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setDataInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDataInteger(new FHIRInteger($ext));
            } else {
                $this->setDataInteger(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_DATA_DECIMAL, $data) || array_key_exists(self::FIELD_DATA_DECIMAL_EXT, $data)) {
            $value = $data[self::FIELD_DATA_DECIMAL] ?? null;
            $ext = (isset($data[self::FIELD_DATA_DECIMAL_EXT]) && is_array($data[self::FIELD_DATA_DECIMAL_EXT])) ? $data[self::FIELD_DATA_DECIMAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setDataDecimal($value);
                } else if (is_array($value)) {
                    $this->setDataDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setDataDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDataDecimal(new FHIRDecimal($ext));
            } else {
                $this->setDataDecimal(new FHIRDecimal(null));
            }
        }
        if (array_key_exists(self::FIELD_DATA_BASE_64BINARY, $data) || array_key_exists(self::FIELD_DATA_BASE_64BINARY_EXT, $data)) {
            $value = $data[self::FIELD_DATA_BASE_64BINARY] ?? null;
            $ext = (isset($data[self::FIELD_DATA_BASE_64BINARY_EXT]) && is_array($data[self::FIELD_DATA_BASE_64BINARY_EXT])) ? $data[self::FIELD_DATA_BASE_64BINARY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBase64Binary) {
                    $this->setDataBase64Binary($value);
                } else if (is_array($value)) {
                    $this->setDataBase64Binary(new FHIRBase64Binary(array_merge($ext, $value)));
                } else {
                    $this->setDataBase64Binary(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDataBase64Binary(new FHIRBase64Binary($ext));
            } else {
                $this->setDataBase64Binary(new FHIRBase64Binary(null));
            }
        }
        if (array_key_exists(self::FIELD_DATA_INSTANT, $data) || array_key_exists(self::FIELD_DATA_INSTANT_EXT, $data)) {
            $value = $data[self::FIELD_DATA_INSTANT] ?? null;
            $ext = (isset($data[self::FIELD_DATA_INSTANT_EXT]) && is_array($data[self::FIELD_DATA_INSTANT_EXT])) ? $data[self::FIELD_DATA_INSTANT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setDataInstant($value);
                } else if (is_array($value)) {
                    $this->setDataInstant(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setDataInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDataInstant(new FHIRInstant($ext));
            } else {
                $this->setDataInstant(new FHIRInstant(null));
            }
        }
        if (array_key_exists(self::FIELD_DATA_STRING, $data) || array_key_exists(self::FIELD_DATA_STRING_EXT, $data)) {
            $value = $data[self::FIELD_DATA_STRING] ?? null;
            $ext = (isset($data[self::FIELD_DATA_STRING_EXT]) && is_array($data[self::FIELD_DATA_STRING_EXT])) ? $data[self::FIELD_DATA_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDataString($value);
                } else if (is_array($value)) {
                    $this->setDataString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDataString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDataString(new FHIRString($ext));
            } else {
                $this->setDataString(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_DATA_URI, $data) || array_key_exists(self::FIELD_DATA_URI_EXT, $data)) {
            $value = $data[self::FIELD_DATA_URI] ?? null;
            $ext = (isset($data[self::FIELD_DATA_URI_EXT]) && is_array($data[self::FIELD_DATA_URI_EXT])) ? $data[self::FIELD_DATA_URI_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setDataUri($value);
                } else if (is_array($value)) {
                    $this->setDataUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setDataUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDataUri(new FHIRUri($ext));
            } else {
                $this->setDataUri(new FHIRUri(null));
            }
        }
        if (array_key_exists(self::FIELD_DATA_DATE, $data) || array_key_exists(self::FIELD_DATA_DATE_EXT, $data)) {
            $value = $data[self::FIELD_DATA_DATE] ?? null;
            $ext = (isset($data[self::FIELD_DATA_DATE_EXT]) && is_array($data[self::FIELD_DATA_DATE_EXT])) ? $data[self::FIELD_DATA_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setDataDate($value);
                } else if (is_array($value)) {
                    $this->setDataDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setDataDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDataDate(new FHIRDate($ext));
            } else {
                $this->setDataDate(new FHIRDate(null));
            }
        }
        if (array_key_exists(self::FIELD_DATA_DATE_TIME, $data) || array_key_exists(self::FIELD_DATA_DATE_TIME_EXT, $data)) {
            $value = $data[self::FIELD_DATA_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_DATA_DATE_TIME_EXT]) && is_array($data[self::FIELD_DATA_DATE_TIME_EXT])) ? $data[self::FIELD_DATA_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDataDateTime($value);
                } else if (is_array($value)) {
                    $this->setDataDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDataDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDataDateTime(new FHIRDateTime($ext));
            } else {
                $this->setDataDateTime(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_DATA_CODE, $data) || array_key_exists(self::FIELD_DATA_CODE_EXT, $data)) {
            $value = $data[self::FIELD_DATA_CODE] ?? null;
            $ext = (isset($data[self::FIELD_DATA_CODE_EXT]) && is_array($data[self::FIELD_DATA_CODE_EXT])) ? $data[self::FIELD_DATA_CODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setDataCode($value);
                } else if (is_array($value)) {
                    $this->setDataCode(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setDataCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDataCode(new FHIRCode($ext));
            } else {
                $this->setDataCode(new FHIRCode(null));
            }
        }
        if (array_key_exists(self::FIELD_DATA_OID, $data) || array_key_exists(self::FIELD_DATA_OID_EXT, $data)) {
            $value = $data[self::FIELD_DATA_OID] ?? null;
            $ext = (isset($data[self::FIELD_DATA_OID_EXT]) && is_array($data[self::FIELD_DATA_OID_EXT])) ? $data[self::FIELD_DATA_OID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIROid) {
                    $this->setDataOid($value);
                } else if (is_array($value)) {
                    $this->setDataOid(new FHIROid(array_merge($ext, $value)));
                } else {
                    $this->setDataOid(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDataOid(new FHIROid($ext));
            } else {
                $this->setDataOid(new FHIROid(null));
            }
        }
        if (array_key_exists(self::FIELD_DATA_UUID, $data) || array_key_exists(self::FIELD_DATA_UUID_EXT, $data)) {
            $value = $data[self::FIELD_DATA_UUID] ?? null;
            $ext = (isset($data[self::FIELD_DATA_UUID_EXT]) && is_array($data[self::FIELD_DATA_UUID_EXT])) ? $data[self::FIELD_DATA_UUID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUuid) {
                    $this->setDataUuid($value);
                } else if (is_array($value)) {
                    $this->setDataUuid(new FHIRUuid(array_merge($ext, $value)));
                } else {
                    $this->setDataUuid(new FHIRUuid([FHIRUuid::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDataUuid(new FHIRUuid($ext));
            } else {
                $this->setDataUuid(new FHIRUuid(null));
            }
        }
        if (array_key_exists(self::FIELD_DATA_ID, $data) || array_key_exists(self::FIELD_DATA_ID_EXT, $data)) {
            $value = $data[self::FIELD_DATA_ID] ?? null;
            $ext = (isset($data[self::FIELD_DATA_ID_EXT]) && is_array($data[self::FIELD_DATA_ID_EXT])) ? $data[self::FIELD_DATA_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setDataId($value);
                } else if (is_array($value)) {
                    $this->setDataId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setDataId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDataId(new FHIRId($ext));
            } else {
                $this->setDataId(new FHIRId(null));
            }
        }
        if (array_key_exists(self::FIELD_DATA_ATTACHMENT, $data)) {
            if ($data[self::FIELD_DATA_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setDataAttachment($data[self::FIELD_DATA_ATTACHMENT]);
            } else {
                $this->setDataAttachment(new FHIRAttachment($data[self::FIELD_DATA_ATTACHMENT]));
            }
        }
        if (array_key_exists(self::FIELD_DATA_IDENTIFIER, $data)) {
            if ($data[self::FIELD_DATA_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setDataIdentifier($data[self::FIELD_DATA_IDENTIFIER]);
            } else {
                $this->setDataIdentifier(new FHIRIdentifier($data[self::FIELD_DATA_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_DATA_CODEABLE_CONCEPT, $data)) {
            if ($data[self::FIELD_DATA_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setDataCodeableConcept($data[self::FIELD_DATA_CODEABLE_CONCEPT]);
            } else {
                $this->setDataCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_DATA_CODEABLE_CONCEPT]));
            }
        }
        if (array_key_exists(self::FIELD_DATA_CODING, $data)) {
            if ($data[self::FIELD_DATA_CODING] instanceof FHIRCoding) {
                $this->setDataCoding($data[self::FIELD_DATA_CODING]);
            } else {
                $this->setDataCoding(new FHIRCoding($data[self::FIELD_DATA_CODING]));
            }
        }
        if (array_key_exists(self::FIELD_DATA_QUANTITY, $data)) {
            if ($data[self::FIELD_DATA_QUANTITY] instanceof FHIRQuantity) {
                $this->setDataQuantity($data[self::FIELD_DATA_QUANTITY]);
            } else {
                $this->setDataQuantity(new FHIRQuantity($data[self::FIELD_DATA_QUANTITY]));
            }
        }
        if (array_key_exists(self::FIELD_DATA_RANGE, $data)) {
            if ($data[self::FIELD_DATA_RANGE] instanceof FHIRRange) {
                $this->setDataRange($data[self::FIELD_DATA_RANGE]);
            } else {
                $this->setDataRange(new FHIRRange($data[self::FIELD_DATA_RANGE]));
            }
        }
        if (array_key_exists(self::FIELD_DATA_PERIOD, $data)) {
            if ($data[self::FIELD_DATA_PERIOD] instanceof FHIRPeriod) {
                $this->setDataPeriod($data[self::FIELD_DATA_PERIOD]);
            } else {
                $this->setDataPeriod(new FHIRPeriod($data[self::FIELD_DATA_PERIOD]));
            }
        }
        if (array_key_exists(self::FIELD_DATA_RATIO, $data)) {
            if ($data[self::FIELD_DATA_RATIO] instanceof FHIRRatio) {
                $this->setDataRatio($data[self::FIELD_DATA_RATIO]);
            } else {
                $this->setDataRatio(new FHIRRatio($data[self::FIELD_DATA_RATIO]));
            }
        }
        if (array_key_exists(self::FIELD_DATA_RESOURCE, $data)) {
            if ($data[self::FIELD_DATA_RESOURCE] instanceof FHIRResourceReference) {
                $this->setDataResource($data[self::FIELD_DATA_RESOURCE]);
            } else {
                $this->setDataResource(new FHIRResourceReference($data[self::FIELD_DATA_RESOURCE]));
            }
        }
        if (array_key_exists(self::FIELD_DATA_SAMPLED_DATA, $data)) {
            if ($data[self::FIELD_DATA_SAMPLED_DATA] instanceof FHIRSampledData) {
                $this->setDataSampledData($data[self::FIELD_DATA_SAMPLED_DATA]);
            } else {
                $this->setDataSampledData(new FHIRSampledData($data[self::FIELD_DATA_SAMPLED_DATA]));
            }
        }
        if (array_key_exists(self::FIELD_DATA_HUMAN_NAME, $data)) {
            if ($data[self::FIELD_DATA_HUMAN_NAME] instanceof FHIRHumanName) {
                $this->setDataHumanName($data[self::FIELD_DATA_HUMAN_NAME]);
            } else {
                $this->setDataHumanName(new FHIRHumanName($data[self::FIELD_DATA_HUMAN_NAME]));
            }
        }
        if (array_key_exists(self::FIELD_DATA_ADDRESS, $data)) {
            if ($data[self::FIELD_DATA_ADDRESS] instanceof FHIRAddress) {
                $this->setDataAddress($data[self::FIELD_DATA_ADDRESS]);
            } else {
                $this->setDataAddress(new FHIRAddress($data[self::FIELD_DATA_ADDRESS]));
            }
        }
        if (array_key_exists(self::FIELD_DATA_CONTACT, $data)) {
            if ($data[self::FIELD_DATA_CONTACT] instanceof FHIRContact) {
                $this->setDataContact($data[self::FIELD_DATA_CONTACT]);
            } else {
                $this->setDataContact(new FHIRContact($data[self::FIELD_DATA_CONTACT]));
            }
        }
        if (array_key_exists(self::FIELD_DATA_SCHEDULE, $data)) {
            if ($data[self::FIELD_DATA_SCHEDULE] instanceof FHIRSchedule) {
                $this->setDataSchedule($data[self::FIELD_DATA_SCHEDULE]);
            } else {
                $this->setDataSchedule(new FHIRSchedule($data[self::FIELD_DATA_SCHEDULE]));
            }
        }
        if (array_key_exists(self::FIELD_REMARKS, $data) || array_key_exists(self::FIELD_REMARKS_EXT, $data)) {
            $value = $data[self::FIELD_REMARKS] ?? null;
            $ext = (isset($data[self::FIELD_REMARKS_EXT]) && is_array($data[self::FIELD_REMARKS_EXT])) ? $data[self::FIELD_REMARKS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setRemarks($value);
                } else if (is_array($value)) {
                    $this->setRemarks(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setRemarks(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRemarks(new FHIRString($ext));
            } else {
                $this->setRemarks(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_GROUP, $data)) {
            if (is_array($data[self::FIELD_GROUP])) {
                foreach($data[self::FIELD_GROUP] as $v) {
                    if ($v instanceof FHIRQuestionnaireGroup) {
                        $this->addGroup($v);
                    } else {
                        $this->addGroup(new FHIRQuestionnaireGroup($v));
                    }
                }
            } elseif ($data[self::FIELD_GROUP] instanceof FHIRQuestionnaireGroup) {
                $this->addGroup($data[self::FIELD_GROUP]);
            } else {
                $this->addGroup(new FHIRQuestionnaireGroup($data[self::FIELD_GROUP]));
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured name for the question that identifies this question within the
     * Questionnaire or Group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getName(): null|FHIRCodeableConcept
    {
        return $this->name;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $name
     * @return static
     */
    public function setName(null|FHIRCodeableConcept $name = null): self
    {
        if (null === $name) {
            $name = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->name, $name);
        $this->name = $name;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text of the question as it is shown to the user.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getText(): null|FHIRString
    {
        return $this->text;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text of the question as it is shown to the user.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $text
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
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
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal
     */
    public function getAnswerDecimal(): null|FHIRDecimal
    {
        return $this->answerDecimal;
    }

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal $answerDecimal
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setAnswerDecimal(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $answerDecimal = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $answerDecimal && !($answerDecimal instanceof FHIRDecimal)) {
            $answerDecimal = new FHIRDecimal($answerDecimal);
        }
        $this->_trackValueSet($this->answerDecimal, $answerDecimal);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_ANSWER_DECIMAL])) {
            $this->_primitiveXmlLocations[self::FIELD_ANSWER_DECIMAL] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_ANSWER_DECIMAL][0] = $xmlLocation;
        $this->answerDecimal = $answerDecimal;
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    public function getAnswerInteger(): null|FHIRInteger
    {
        return $this->answerInteger;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $answerInteger
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setAnswerInteger(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $answerInteger = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $answerInteger && !($answerInteger instanceof FHIRInteger)) {
            $answerInteger = new FHIRInteger($answerInteger);
        }
        $this->_trackValueSet($this->answerInteger, $answerInteger);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_ANSWER_INTEGER])) {
            $this->_primitiveXmlLocations[self::FIELD_ANSWER_INTEGER] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_ANSWER_INTEGER][0] = $xmlLocation;
        $this->answerInteger = $answerInteger;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    public function getAnswerBoolean(): null|FHIRBoolean
    {
        return $this->answerBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean $answerBoolean
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setAnswerBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $answerBoolean = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $answerBoolean && !($answerBoolean instanceof FHIRBoolean)) {
            $answerBoolean = new FHIRBoolean($answerBoolean);
        }
        $this->_trackValueSet($this->answerBoolean, $answerBoolean);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_ANSWER_BOOLEAN])) {
            $this->_primitiveXmlLocations[self::FIELD_ANSWER_BOOLEAN] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_ANSWER_BOOLEAN][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate
     */
    public function getAnswerDate(): null|FHIRDate
    {
        return $this->answerDate;
    }

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate $answerDate
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setAnswerDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $answerDate = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $answerDate && !($answerDate instanceof FHIRDate)) {
            $answerDate = new FHIRDate($answerDate);
        }
        $this->_trackValueSet($this->answerDate, $answerDate);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_ANSWER_DATE])) {
            $this->_primitiveXmlLocations[self::FIELD_ANSWER_DATE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_ANSWER_DATE][0] = $xmlLocation;
        $this->answerDate = $answerDate;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getAnswerString(): null|FHIRString
    {
        return $this->answerString;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $answerString
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setAnswerString(null|string|FHIRStringPrimitive|FHIRString $answerString = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $answerString && !($answerString instanceof FHIRString)) {
            $answerString = new FHIRString($answerString);
        }
        $this->_trackValueSet($this->answerString, $answerString);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_ANSWER_STRING])) {
            $this->_primitiveXmlLocations[self::FIELD_ANSWER_STRING] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_ANSWER_STRING][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    public function getAnswerDateTime(): null|FHIRDateTime
    {
        return $this->answerDateTime;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime $answerDateTime
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setAnswerDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $answerDateTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $answerDateTime && !($answerDateTime instanceof FHIRDateTime)) {
            $answerDateTime = new FHIRDateTime($answerDateTime);
        }
        $this->_trackValueSet($this->answerDateTime, $answerDateTime);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_ANSWER_DATE_TIME])) {
            $this->_primitiveXmlLocations[self::FIELD_ANSWER_DATE_TIME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_ANSWER_DATE_TIME][0] = $xmlLocation;
        $this->answerDateTime = $answerDateTime;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant
     */
    public function getAnswerInstant(): null|FHIRInstant
    {
        return $this->answerInstant;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant $answerInstant
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setAnswerInstant(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $answerInstant = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $answerInstant && !($answerInstant instanceof FHIRInstant)) {
            $answerInstant = new FHIRInstant($answerInstant);
        }
        $this->_trackValueSet($this->answerInstant, $answerInstant);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_ANSWER_INSTANT])) {
            $this->_primitiveXmlLocations[self::FIELD_ANSWER_INSTANT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_ANSWER_INSTANT][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding[]
     */
    public function getChoice(): null|array
    {
        return $this->choice;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Selections made by the user from the list of options.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding $choice
     * @return static
     */
    public function addChoice(null|FHIRCoding $choice = null): self
    {
        if (null === $choice) {
            $choice = new FHIRCoding();
        }
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding ...$choice
     * @return static
     */
    public function setChoice(FHIRCoding ...$choice): self
    {
        if ([] !== $this->choice) {
            $this->_trackValuesRemoved(count($this->choice));
            $this->choice = [];
        }
        if ([] === $choice) {
            return $this;
        }
        foreach($choice as $v) {
            $this->addChoice($v);
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to a valueset containing the possible options.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getOptions(): null|FHIRResourceReference
    {
        return $this->options;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to a valueset containing the possible options.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $options
     * @return static
     */
    public function setOptions(null|FHIRResourceReference $options = null): self
    {
        if (null === $options) {
            $options = new FHIRResourceReference();
        }
        $this->_trackValueSet($this->options, $options);
        $this->options = $options;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    public function getDataBoolean(): null|FHIRBoolean
    {
        return $this->dataBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean $dataBoolean
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDataBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $dataBoolean = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $dataBoolean && !($dataBoolean instanceof FHIRBoolean)) {
            $dataBoolean = new FHIRBoolean($dataBoolean);
        }
        $this->_trackValueSet($this->dataBoolean, $dataBoolean);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DATA_BOOLEAN])) {
            $this->_primitiveXmlLocations[self::FIELD_DATA_BOOLEAN] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DATA_BOOLEAN][0] = $xmlLocation;
        $this->dataBoolean = $dataBoolean;
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    public function getDataInteger(): null|FHIRInteger
    {
        return $this->dataInteger;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $dataInteger
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDataInteger(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $dataInteger = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $dataInteger && !($dataInteger instanceof FHIRInteger)) {
            $dataInteger = new FHIRInteger($dataInteger);
        }
        $this->_trackValueSet($this->dataInteger, $dataInteger);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DATA_INTEGER])) {
            $this->_primitiveXmlLocations[self::FIELD_DATA_INTEGER] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DATA_INTEGER][0] = $xmlLocation;
        $this->dataInteger = $dataInteger;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal
     */
    public function getDataDecimal(): null|FHIRDecimal
    {
        return $this->dataDecimal;
    }

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal $dataDecimal
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDataDecimal(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $dataDecimal = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $dataDecimal && !($dataDecimal instanceof FHIRDecimal)) {
            $dataDecimal = new FHIRDecimal($dataDecimal);
        }
        $this->_trackValueSet($this->dataDecimal, $dataDecimal);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DATA_DECIMAL])) {
            $this->_primitiveXmlLocations[self::FIELD_DATA_DECIMAL] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DATA_DECIMAL][0] = $xmlLocation;
        $this->dataDecimal = $dataDecimal;
        return $this;
    }

    /**
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary
     */
    public function getDataBase64Binary(): null|FHIRBase64Binary
    {
        return $this->dataBase64Binary;
    }

    /**
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary $dataBase64Binary
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDataBase64Binary(null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $dataBase64Binary = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $dataBase64Binary && !($dataBase64Binary instanceof FHIRBase64Binary)) {
            $dataBase64Binary = new FHIRBase64Binary($dataBase64Binary);
        }
        $this->_trackValueSet($this->dataBase64Binary, $dataBase64Binary);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DATA_BASE_64BINARY])) {
            $this->_primitiveXmlLocations[self::FIELD_DATA_BASE_64BINARY] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DATA_BASE_64BINARY][0] = $xmlLocation;
        $this->dataBase64Binary = $dataBase64Binary;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant
     */
    public function getDataInstant(): null|FHIRInstant
    {
        return $this->dataInstant;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant $dataInstant
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDataInstant(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $dataInstant = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $dataInstant && !($dataInstant instanceof FHIRInstant)) {
            $dataInstant = new FHIRInstant($dataInstant);
        }
        $this->_trackValueSet($this->dataInstant, $dataInstant);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DATA_INSTANT])) {
            $this->_primitiveXmlLocations[self::FIELD_DATA_INSTANT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DATA_INSTANT][0] = $xmlLocation;
        $this->dataInstant = $dataInstant;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getDataString(): null|FHIRString
    {
        return $this->dataString;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $dataString
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDataString(null|string|FHIRStringPrimitive|FHIRString $dataString = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $dataString && !($dataString instanceof FHIRString)) {
            $dataString = new FHIRString($dataString);
        }
        $this->_trackValueSet($this->dataString, $dataString);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DATA_STRING])) {
            $this->_primitiveXmlLocations[self::FIELD_DATA_STRING] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DATA_STRING][0] = $xmlLocation;
        $this->dataString = $dataString;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    public function getDataUri(): null|FHIRUri
    {
        return $this->dataUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri $dataUri
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDataUri(null|string|FHIRUriPrimitive|FHIRUri $dataUri = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $dataUri && !($dataUri instanceof FHIRUri)) {
            $dataUri = new FHIRUri($dataUri);
        }
        $this->_trackValueSet($this->dataUri, $dataUri);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DATA_URI])) {
            $this->_primitiveXmlLocations[self::FIELD_DATA_URI] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DATA_URI][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate
     */
    public function getDataDate(): null|FHIRDate
    {
        return $this->dataDate;
    }

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate $dataDate
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDataDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $dataDate = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $dataDate && !($dataDate instanceof FHIRDate)) {
            $dataDate = new FHIRDate($dataDate);
        }
        $this->_trackValueSet($this->dataDate, $dataDate);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DATA_DATE])) {
            $this->_primitiveXmlLocations[self::FIELD_DATA_DATE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DATA_DATE][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    public function getDataDateTime(): null|FHIRDateTime
    {
        return $this->dataDateTime;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime $dataDateTime
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDataDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $dataDateTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $dataDateTime && !($dataDateTime instanceof FHIRDateTime)) {
            $dataDateTime = new FHIRDateTime($dataDateTime);
        }
        $this->_trackValueSet($this->dataDateTime, $dataDateTime);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DATA_DATE_TIME])) {
            $this->_primitiveXmlLocations[self::FIELD_DATA_DATE_TIME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DATA_DATE_TIME][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    public function getDataCode(): null|FHIRCode
    {
        return $this->dataCode;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode $dataCode
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDataCode(null|string|FHIRCodePrimitive|FHIRCode $dataCode = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $dataCode && !($dataCode instanceof FHIRCode)) {
            $dataCode = new FHIRCode($dataCode);
        }
        $this->_trackValueSet($this->dataCode, $dataCode);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DATA_CODE])) {
            $this->_primitiveXmlLocations[self::FIELD_DATA_CODE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DATA_CODE][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROid
     */
    public function getDataOid(): null|FHIROid
    {
        return $this->dataOid;
    }

    /**
     * An oid represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROid $dataOid
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDataOid(null|string|FHIROidPrimitive|FHIROid $dataOid = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $dataOid && !($dataOid instanceof FHIROid)) {
            $dataOid = new FHIROid($dataOid);
        }
        $this->_trackValueSet($this->dataOid, $dataOid);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DATA_OID])) {
            $this->_primitiveXmlLocations[self::FIELD_DATA_OID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DATA_OID][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUuid
     */
    public function getDataUuid(): null|FHIRUuid
    {
        return $this->dataUuid;
    }

    /**
     * A UUID, represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRUuidPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUuid $dataUuid
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDataUuid(null|string|FHIRUuidPrimitive|FHIRUuid $dataUuid = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $dataUuid && !($dataUuid instanceof FHIRUuid)) {
            $dataUuid = new FHIRUuid($dataUuid);
        }
        $this->_trackValueSet($this->dataUuid, $dataUuid);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DATA_UUID])) {
            $this->_primitiveXmlLocations[self::FIELD_DATA_UUID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DATA_UUID][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId
     */
    public function getDataId(): null|FHIRId
    {
        return $this->dataId;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId $dataId
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDataId(null|string|FHIRIdPrimitive|FHIRId $dataId = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $dataId && !($dataId instanceof FHIRId)) {
            $dataId = new FHIRId($dataId);
        }
        $this->_trackValueSet($this->dataId, $dataId);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DATA_ID])) {
            $this->_primitiveXmlLocations[self::FIELD_DATA_ID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DATA_ID][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment
     */
    public function getDataAttachment(): null|FHIRAttachment
    {
        return $this->dataAttachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment $dataAttachment
     * @return static
     */
    public function setDataAttachment(null|FHIRAttachment $dataAttachment = null): self
    {
        if (null === $dataAttachment) {
            $dataAttachment = new FHIRAttachment();
        }
        $this->_trackValueSet($this->dataAttachment, $dataAttachment);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier
     */
    public function getDataIdentifier(): null|FHIRIdentifier
    {
        return $this->dataIdentifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier $dataIdentifier
     * @return static
     */
    public function setDataIdentifier(null|FHIRIdentifier $dataIdentifier = null): self
    {
        if (null === $dataIdentifier) {
            $dataIdentifier = new FHIRIdentifier();
        }
        $this->_trackValueSet($this->dataIdentifier, $dataIdentifier);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getDataCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->dataCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $dataCodeableConcept
     * @return static
     */
    public function setDataCodeableConcept(null|FHIRCodeableConcept $dataCodeableConcept = null): self
    {
        if (null === $dataCodeableConcept) {
            $dataCodeableConcept = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->dataCodeableConcept, $dataCodeableConcept);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding
     */
    public function getDataCoding(): null|FHIRCoding
    {
        return $this->dataCoding;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding $dataCoding
     * @return static
     */
    public function setDataCoding(null|FHIRCoding $dataCoding = null): self
    {
        if (null === $dataCoding) {
            $dataCoding = new FHIRCoding();
        }
        $this->_trackValueSet($this->dataCoding, $dataCoding);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity
     */
    public function getDataQuantity(): null|FHIRQuantity
    {
        return $this->dataQuantity;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity $dataQuantity
     * @return static
     */
    public function setDataQuantity(null|FHIRQuantity $dataQuantity = null): self
    {
        if (null === $dataQuantity) {
            $dataQuantity = new FHIRQuantity();
        }
        $this->_trackValueSet($this->dataQuantity, $dataQuantity);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRange
     */
    public function getDataRange(): null|FHIRRange
    {
        return $this->dataRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRange $dataRange
     * @return static
     */
    public function setDataRange(null|FHIRRange $dataRange = null): self
    {
        if (null === $dataRange) {
            $dataRange = new FHIRRange();
        }
        $this->_trackValueSet($this->dataRange, $dataRange);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    public function getDataPeriod(): null|FHIRPeriod
    {
        return $this->dataPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod $dataPeriod
     * @return static
     */
    public function setDataPeriod(null|FHIRPeriod $dataPeriod = null): self
    {
        if (null === $dataPeriod) {
            $dataPeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->dataPeriod, $dataPeriod);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRatio
     */
    public function getDataRatio(): null|FHIRRatio
    {
        return $this->dataRatio;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRatio $dataRatio
     * @return static
     */
    public function setDataRatio(null|FHIRRatio $dataRatio = null): self
    {
        if (null === $dataRatio) {
            $dataRatio = new FHIRRatio();
        }
        $this->_trackValueSet($this->dataRatio, $dataRatio);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getDataResource(): null|FHIRResourceReference
    {
        return $this->dataResource;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $dataResource
     * @return static
     */
    public function setDataResource(null|FHIRResourceReference $dataResource = null): self
    {
        if (null === $dataResource) {
            $dataResource = new FHIRResourceReference();
        }
        $this->_trackValueSet($this->dataResource, $dataResource);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSampledData
     */
    public function getDataSampledData(): null|FHIRSampledData
    {
        return $this->dataSampledData;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSampledData $dataSampledData
     * @return static
     */
    public function setDataSampledData(null|FHIRSampledData $dataSampledData = null): self
    {
        if (null === $dataSampledData) {
            $dataSampledData = new FHIRSampledData();
        }
        $this->_trackValueSet($this->dataSampledData, $dataSampledData);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRHumanName
     */
    public function getDataHumanName(): null|FHIRHumanName
    {
        return $this->dataHumanName;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRHumanName $dataHumanName
     * @return static
     */
    public function setDataHumanName(null|FHIRHumanName $dataHumanName = null): self
    {
        if (null === $dataHumanName) {
            $dataHumanName = new FHIRHumanName();
        }
        $this->_trackValueSet($this->dataHumanName, $dataHumanName);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress
     */
    public function getDataAddress(): null|FHIRAddress
    {
        return $this->dataAddress;
    }

    /**
     * There is a variety of postal address formats defined around the world. This
     * format defines a superset that is the basis for all addresses around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress $dataAddress
     * @return static
     */
    public function setDataAddress(null|FHIRAddress $dataAddress = null): self
    {
        if (null === $dataAddress) {
            $dataAddress = new FHIRAddress();
        }
        $this->_trackValueSet($this->dataAddress, $dataAddress);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRContact
     */
    public function getDataContact(): null|FHIRContact
    {
        return $this->dataContact;
    }

    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRContact $dataContact
     * @return static
     */
    public function setDataContact(null|FHIRContact $dataContact = null): self
    {
        if (null === $dataContact) {
            $dataContact = new FHIRContact();
        }
        $this->_trackValueSet($this->dataContact, $dataContact);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule
     */
    public function getDataSchedule(): null|FHIRSchedule
    {
        return $this->dataSchedule;
    }

    /**
     * Specifies an event that may occur multiple times. Schedules are used for to
     * reord when things are expected or requested to occur.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule $dataSchedule
     * @return static
     */
    public function setDataSchedule(null|FHIRSchedule $dataSchedule = null): self
    {
        if (null === $dataSchedule) {
            $dataSchedule = new FHIRSchedule();
        }
        $this->_trackValueSet($this->dataSchedule, $dataSchedule);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getRemarks(): null|FHIRString
    {
        return $this->remarks;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The remark contains information about the answer given. This is additional
     * information about the answer the author wishes to convey, but should not be used
     * to contain information that is part of the answer itself.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $remarks
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setRemarks(null|string|FHIRStringPrimitive|FHIRString $remarks = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $remarks && !($remarks instanceof FHIRString)) {
            $remarks = new FHIRString($remarks);
        }
        $this->_trackValueSet($this->remarks, $remarks);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_REMARKS])) {
            $this->_primitiveXmlLocations[self::FIELD_REMARKS] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_REMARKS][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup[]
     */
    public function getGroup(): null|array
    {
        return $this->group;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup $group
     * @return static
     */
    public function addGroup(null|FHIRQuestionnaireGroup $group = null): self
    {
        if (null === $group) {
            $group = new FHIRQuestionnaireGroup();
        }
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup ...$group
     * @return static
     */
    public function setGroup(FHIRQuestionnaireGroup ...$group): self
    {
        if ([] !== $this->group) {
            $this->_trackValuesRemoved(count($this->group));
            $this->group = [];
        }
        if ([] === $group) {
            return $this;
        }
        foreach($group as $v) {
            $this->addGroup($v);
        }
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
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getText())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEXT] = $fieldErrs;
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
        if (null !== ($v = $this->getAnswerBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ANSWER_BOOLEAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAnswerDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ANSWER_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAnswerString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ANSWER_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAnswerDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ANSWER_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAnswerInstant())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ANSWER_INSTANT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getChoice())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CHOICE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getOptions())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OPTIONS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_BOOLEAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataInteger())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_INTEGER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataDecimal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_DECIMAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataBase64Binary())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_BASE_64BINARY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataInstant())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_INSTANT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataUri())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_URI] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataOid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_OID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataUuid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_UUID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataAttachment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_ATTACHMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataCoding())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_CODING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataRatio())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_RATIO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataResource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_RESOURCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataSampledData())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_SAMPLED_DATA] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataHumanName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_HUMAN_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataAddress())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_ADDRESS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataContact())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_CONTACT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataSchedule())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_SCHEDULE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRemarks())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REMARKS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getGroup())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_GROUP, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_NAME, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_TEXT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_ANSWER_DECIMAL, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_ANSWER_INTEGER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_ANSWER_BOOLEAN, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_ANSWER_DATE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_ANSWER_STRING, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_ANSWER_DATE_TIME, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_ANSWER_INSTANT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_CHOICE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_OPTIONS, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_DATA_BOOLEAN, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_DATA_INTEGER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_DATA_DECIMAL, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_DATA_BASE_64BINARY, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_DATA_INSTANT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_DATA_STRING, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_DATA_URI, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_DATA_DATE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_DATA_DATE_TIME, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_DATA_CODE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_DATA_OID, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_DATA_UUID, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_DATA_ID, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_DATA_ATTACHMENT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_DATA_IDENTIFIER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_DATA_CODEABLE_CONCEPT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_DATA_CODING, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_DATA_QUANTITY, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_DATA_RANGE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_DATA_PERIOD, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_DATA_RATIO, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_DATA_RESOURCE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_DATA_SAMPLED_DATA, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_DATA_HUMAN_NAME, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_DATA_ADDRESS, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_DATA_CONTACT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_DATA_SCHEDULE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_REMARKS, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION, self::FIELD_GROUP, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion
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
        } else if (!($type instanceof FHIRQuestionnaireQuestion)) {
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
            if (self::FIELD_NAME === $childName) {
                $type->setName(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TEXT === $childName) {
                $type->setText(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ANSWER_DECIMAL === $childName) {
                $type->setAnswerDecimal(FHIRDecimal::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ANSWER_INTEGER === $childName) {
                $type->setAnswerInteger(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ANSWER_BOOLEAN === $childName) {
                $type->setAnswerBoolean(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ANSWER_DATE === $childName) {
                $type->setAnswerDate(FHIRDate::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ANSWER_STRING === $childName) {
                $type->setAnswerString(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ANSWER_DATE_TIME === $childName) {
                $type->setAnswerDateTime(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ANSWER_INSTANT === $childName) {
                $type->setAnswerInstant(FHIRInstant::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CHOICE === $childName) {
                $type->addChoice(FHIRCoding::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_OPTIONS === $childName) {
                $type->setOptions(FHIRResourceReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DATA_BOOLEAN === $childName) {
                $type->setDataBoolean(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DATA_INTEGER === $childName) {
                $type->setDataInteger(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DATA_DECIMAL === $childName) {
                $type->setDataDecimal(FHIRDecimal::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DATA_BASE_64BINARY === $childName) {
                $type->setDataBase64Binary(FHIRBase64Binary::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DATA_INSTANT === $childName) {
                $type->setDataInstant(FHIRInstant::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DATA_STRING === $childName) {
                $type->setDataString(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DATA_URI === $childName) {
                $type->setDataUri(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DATA_DATE === $childName) {
                $type->setDataDate(FHIRDate::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DATA_DATE_TIME === $childName) {
                $type->setDataDateTime(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DATA_CODE === $childName) {
                $type->setDataCode(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DATA_OID === $childName) {
                $type->setDataOid(FHIROid::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DATA_UUID === $childName) {
                $type->setDataUuid(FHIRUuid::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DATA_ID === $childName) {
                $type->setDataId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DATA_ATTACHMENT === $childName) {
                $type->setDataAttachment(FHIRAttachment::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DATA_IDENTIFIER === $childName) {
                $type->setDataIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DATA_CODEABLE_CONCEPT === $childName) {
                $type->setDataCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DATA_CODING === $childName) {
                $type->setDataCoding(FHIRCoding::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DATA_QUANTITY === $childName) {
                $type->setDataQuantity(FHIRQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DATA_RANGE === $childName) {
                $type->setDataRange(FHIRRange::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DATA_PERIOD === $childName) {
                $type->setDataPeriod(FHIRPeriod::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DATA_RATIO === $childName) {
                $type->setDataRatio(FHIRRatio::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DATA_RESOURCE === $childName) {
                $type->setDataResource(FHIRResourceReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DATA_SAMPLED_DATA === $childName) {
                $type->setDataSampledData(FHIRSampledData::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DATA_HUMAN_NAME === $childName) {
                $type->setDataHumanName(FHIRHumanName::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DATA_ADDRESS === $childName) {
                $type->setDataAddress(FHIRAddress::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DATA_CONTACT === $childName) {
                $type->setDataContact(FHIRContact::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DATA_SCHEDULE === $childName) {
                $type->setDataSchedule(FHIRSchedule::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REMARKS === $childName) {
                $type->setRemarks(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_GROUP === $childName) {
                $type->addGroup(FHIRQuestionnaireGroup::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_TEXT])) {
            $pt = $type->getText();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TEXT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setText((string)$attributes[self::FIELD_TEXT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_DECIMAL])) {
            $pt = $type->getAnswerDecimal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ANSWER_DECIMAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setAnswerDecimal((string)$attributes[self::FIELD_ANSWER_DECIMAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_INTEGER])) {
            $pt = $type->getAnswerInteger();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ANSWER_INTEGER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setAnswerInteger((string)$attributes[self::FIELD_ANSWER_INTEGER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_BOOLEAN])) {
            $pt = $type->getAnswerBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ANSWER_BOOLEAN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setAnswerBoolean((string)$attributes[self::FIELD_ANSWER_BOOLEAN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_DATE])) {
            $pt = $type->getAnswerDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ANSWER_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setAnswerDate((string)$attributes[self::FIELD_ANSWER_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_STRING])) {
            $pt = $type->getAnswerString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ANSWER_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setAnswerString((string)$attributes[self::FIELD_ANSWER_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_DATE_TIME])) {
            $pt = $type->getAnswerDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ANSWER_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setAnswerDateTime((string)$attributes[self::FIELD_ANSWER_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ANSWER_INSTANT])) {
            $pt = $type->getAnswerInstant();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ANSWER_INSTANT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setAnswerInstant((string)$attributes[self::FIELD_ANSWER_INSTANT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DATA_BOOLEAN])) {
            $pt = $type->getDataBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATA_BOOLEAN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDataBoolean((string)$attributes[self::FIELD_DATA_BOOLEAN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DATA_INTEGER])) {
            $pt = $type->getDataInteger();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATA_INTEGER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDataInteger((string)$attributes[self::FIELD_DATA_INTEGER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DATA_DECIMAL])) {
            $pt = $type->getDataDecimal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATA_DECIMAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDataDecimal((string)$attributes[self::FIELD_DATA_DECIMAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DATA_BASE_64BINARY])) {
            $pt = $type->getDataBase64Binary();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATA_BASE_64BINARY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDataBase64Binary((string)$attributes[self::FIELD_DATA_BASE_64BINARY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DATA_INSTANT])) {
            $pt = $type->getDataInstant();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATA_INSTANT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDataInstant((string)$attributes[self::FIELD_DATA_INSTANT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DATA_STRING])) {
            $pt = $type->getDataString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATA_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDataString((string)$attributes[self::FIELD_DATA_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DATA_URI])) {
            $pt = $type->getDataUri();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATA_URI], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDataUri((string)$attributes[self::FIELD_DATA_URI], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DATA_DATE])) {
            $pt = $type->getDataDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATA_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDataDate((string)$attributes[self::FIELD_DATA_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DATA_DATE_TIME])) {
            $pt = $type->getDataDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATA_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDataDateTime((string)$attributes[self::FIELD_DATA_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DATA_CODE])) {
            $pt = $type->getDataCode();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATA_CODE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDataCode((string)$attributes[self::FIELD_DATA_CODE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DATA_OID])) {
            $pt = $type->getDataOid();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATA_OID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDataOid((string)$attributes[self::FIELD_DATA_OID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DATA_UUID])) {
            $pt = $type->getDataUuid();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATA_UUID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDataUuid((string)$attributes[self::FIELD_DATA_UUID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DATA_ID])) {
            $pt = $type->getDataId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATA_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDataId((string)$attributes[self::FIELD_DATA_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_REMARKS])) {
            $pt = $type->getRemarks();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_REMARKS], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setRemarks((string)$attributes[self::FIELD_REMARKS], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'QuestionnaireQuestion', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_TEXT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getText())) {
            $xw->writeAttribute(self::FIELD_TEXT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ANSWER_DECIMAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getAnswerDecimal())) {
            $xw->writeAttribute(self::FIELD_ANSWER_DECIMAL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ANSWER_INTEGER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getAnswerInteger())) {
            $xw->writeAttribute(self::FIELD_ANSWER_INTEGER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ANSWER_BOOLEAN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getAnswerBoolean())) {
            $xw->writeAttribute(self::FIELD_ANSWER_BOOLEAN, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ANSWER_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getAnswerDate())) {
            $xw->writeAttribute(self::FIELD_ANSWER_DATE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ANSWER_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getAnswerString())) {
            $xw->writeAttribute(self::FIELD_ANSWER_STRING, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ANSWER_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getAnswerDateTime())) {
            $xw->writeAttribute(self::FIELD_ANSWER_DATE_TIME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ANSWER_INSTANT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getAnswerInstant())) {
            $xw->writeAttribute(self::FIELD_ANSWER_INSTANT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATA_BOOLEAN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDataBoolean())) {
            $xw->writeAttribute(self::FIELD_DATA_BOOLEAN, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATA_INTEGER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDataInteger())) {
            $xw->writeAttribute(self::FIELD_DATA_INTEGER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATA_DECIMAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDataDecimal())) {
            $xw->writeAttribute(self::FIELD_DATA_DECIMAL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATA_BASE_64BINARY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDataBase64Binary())) {
            $xw->writeAttribute(self::FIELD_DATA_BASE_64BINARY, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATA_INSTANT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDataInstant())) {
            $xw->writeAttribute(self::FIELD_DATA_INSTANT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATA_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDataString())) {
            $xw->writeAttribute(self::FIELD_DATA_STRING, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATA_URI] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDataUri())) {
            $xw->writeAttribute(self::FIELD_DATA_URI, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATA_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDataDate())) {
            $xw->writeAttribute(self::FIELD_DATA_DATE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATA_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDataDateTime())) {
            $xw->writeAttribute(self::FIELD_DATA_DATE_TIME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATA_CODE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDataCode())) {
            $xw->writeAttribute(self::FIELD_DATA_CODE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATA_OID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDataOid())) {
            $xw->writeAttribute(self::FIELD_DATA_OID, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATA_UUID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDataUuid())) {
            $xw->writeAttribute(self::FIELD_DATA_UUID, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATA_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDataId())) {
            $xw->writeAttribute(self::FIELD_DATA_ID, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_REMARKS] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getRemarks())) {
            $xw->writeAttribute(self::FIELD_REMARKS, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getName())) {
            $xw->startElement(self::FIELD_NAME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_TEXT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getText())) {
            $xw->startElement(self::FIELD_TEXT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ANSWER_DECIMAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getAnswerDecimal())) {
            $xw->startElement(self::FIELD_ANSWER_DECIMAL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ANSWER_INTEGER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getAnswerInteger())) {
            $xw->startElement(self::FIELD_ANSWER_INTEGER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ANSWER_BOOLEAN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getAnswerBoolean())) {
            $xw->startElement(self::FIELD_ANSWER_BOOLEAN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ANSWER_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getAnswerDate())) {
            $xw->startElement(self::FIELD_ANSWER_DATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ANSWER_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getAnswerString())) {
            $xw->startElement(self::FIELD_ANSWER_STRING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ANSWER_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getAnswerDateTime())) {
            $xw->startElement(self::FIELD_ANSWER_DATE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ANSWER_INSTANT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getAnswerInstant())) {
            $xw->startElement(self::FIELD_ANSWER_INSTANT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getChoice() as $v) {
            $xw->startElement(self::FIELD_CHOICE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getOptions())) {
            $xw->startElement(self::FIELD_OPTIONS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATA_BOOLEAN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDataBoolean())) {
            $xw->startElement(self::FIELD_DATA_BOOLEAN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATA_INTEGER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDataInteger())) {
            $xw->startElement(self::FIELD_DATA_INTEGER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATA_DECIMAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDataDecimal())) {
            $xw->startElement(self::FIELD_DATA_DECIMAL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATA_BASE_64BINARY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDataBase64Binary())) {
            $xw->startElement(self::FIELD_DATA_BASE_64BINARY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATA_INSTANT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDataInstant())) {
            $xw->startElement(self::FIELD_DATA_INSTANT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATA_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDataString())) {
            $xw->startElement(self::FIELD_DATA_STRING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATA_URI] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDataUri())) {
            $xw->startElement(self::FIELD_DATA_URI);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATA_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDataDate())) {
            $xw->startElement(self::FIELD_DATA_DATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATA_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDataDateTime())) {
            $xw->startElement(self::FIELD_DATA_DATE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATA_CODE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDataCode())) {
            $xw->startElement(self::FIELD_DATA_CODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATA_OID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDataOid())) {
            $xw->startElement(self::FIELD_DATA_OID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATA_UUID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDataUuid())) {
            $xw->startElement(self::FIELD_DATA_UUID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATA_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDataId())) {
            $xw->startElement(self::FIELD_DATA_ID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDataAttachment())) {
            $xw->startElement(self::FIELD_DATA_ATTACHMENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDataIdentifier())) {
            $xw->startElement(self::FIELD_DATA_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDataCodeableConcept())) {
            $xw->startElement(self::FIELD_DATA_CODEABLE_CONCEPT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDataCoding())) {
            $xw->startElement(self::FIELD_DATA_CODING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDataQuantity())) {
            $xw->startElement(self::FIELD_DATA_QUANTITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDataRange())) {
            $xw->startElement(self::FIELD_DATA_RANGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDataPeriod())) {
            $xw->startElement(self::FIELD_DATA_PERIOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDataRatio())) {
            $xw->startElement(self::FIELD_DATA_RATIO);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDataResource())) {
            $xw->startElement(self::FIELD_DATA_RESOURCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDataSampledData())) {
            $xw->startElement(self::FIELD_DATA_SAMPLED_DATA);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDataHumanName())) {
            $xw->startElement(self::FIELD_DATA_HUMAN_NAME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDataAddress())) {
            $xw->startElement(self::FIELD_DATA_ADDRESS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDataContact())) {
            $xw->startElement(self::FIELD_DATA_CONTACT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDataSchedule())) {
            $xw->startElement(self::FIELD_DATA_SCHEDULE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_REMARKS] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getRemarks())) {
            $xw->startElement(self::FIELD_REMARKS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getGroup() as $v) {
            $xw->startElement(self::FIELD_GROUP);
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
        if (null !== ($v = $this->getName())) {
            $out->{self::FIELD_NAME} = $v;
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
        if (null !== ($v = $this->getAnswerDecimal())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ANSWER_DECIMAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ANSWER_DECIMAL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAnswerInteger())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ANSWER_INTEGER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ANSWER_INTEGER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAnswerBoolean())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ANSWER_BOOLEAN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ANSWER_BOOLEAN_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAnswerDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ANSWER_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDate::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ANSWER_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAnswerString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ANSWER_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ANSWER_STRING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAnswerDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ANSWER_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ANSWER_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAnswerInstant())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ANSWER_INSTANT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInstant::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ANSWER_INSTANT_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getChoice())) {
            $out->{self::FIELD_CHOICE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CHOICE}[] = $v;
            }
        }
        if (null !== ($v = $this->getOptions())) {
            $out->{self::FIELD_OPTIONS} = $v;
        }
        if (null !== ($v = $this->getDataBoolean())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATA_BOOLEAN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATA_BOOLEAN_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDataInteger())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATA_INTEGER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATA_INTEGER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDataDecimal())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATA_DECIMAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATA_DECIMAL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDataBase64Binary())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATA_BASE_64BINARY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBase64Binary::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATA_BASE_64BINARY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDataInstant())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATA_INSTANT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInstant::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATA_INSTANT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDataString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATA_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATA_STRING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDataUri())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATA_URI} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATA_URI_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDataDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATA_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDate::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATA_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDataDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATA_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATA_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDataCode())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATA_CODE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATA_CODE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDataOid())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATA_OID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIROid::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATA_OID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDataUuid())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATA_UUID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUuid::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATA_UUID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDataId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATA_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRId::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATA_ID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDataAttachment())) {
            $out->{self::FIELD_DATA_ATTACHMENT} = $v;
        }
        if (null !== ($v = $this->getDataIdentifier())) {
            $out->{self::FIELD_DATA_IDENTIFIER} = $v;
        }
        if (null !== ($v = $this->getDataCodeableConcept())) {
            $out->{self::FIELD_DATA_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getDataCoding())) {
            $out->{self::FIELD_DATA_CODING} = $v;
        }
        if (null !== ($v = $this->getDataQuantity())) {
            $out->{self::FIELD_DATA_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getDataRange())) {
            $out->{self::FIELD_DATA_RANGE} = $v;
        }
        if (null !== ($v = $this->getDataPeriod())) {
            $out->{self::FIELD_DATA_PERIOD} = $v;
        }
        if (null !== ($v = $this->getDataRatio())) {
            $out->{self::FIELD_DATA_RATIO} = $v;
        }
        if (null !== ($v = $this->getDataResource())) {
            $out->{self::FIELD_DATA_RESOURCE} = $v;
        }
        if (null !== ($v = $this->getDataSampledData())) {
            $out->{self::FIELD_DATA_SAMPLED_DATA} = $v;
        }
        if (null !== ($v = $this->getDataHumanName())) {
            $out->{self::FIELD_DATA_HUMAN_NAME} = $v;
        }
        if (null !== ($v = $this->getDataAddress())) {
            $out->{self::FIELD_DATA_ADDRESS} = $v;
        }
        if (null !== ($v = $this->getDataContact())) {
            $out->{self::FIELD_DATA_CONTACT} = $v;
        }
        if (null !== ($v = $this->getDataSchedule())) {
            $out->{self::FIELD_DATA_SCHEDULE} = $v;
        }
        if (null !== ($v = $this->getRemarks())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REMARKS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REMARKS_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getGroup())) {
            $out->{self::FIELD_GROUP} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_GROUP}[] = $v;
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