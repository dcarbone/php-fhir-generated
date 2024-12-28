<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire;

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
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

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

    /** @var string */
    private $_xmlns = '';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured name for the question that identifies this question within the
     * Questionnaire or Group.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected $name = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text of the question as it is shown to the user.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $text = null;

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal
     */
    protected $answerDecimal = null;

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    protected $answerInteger = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    protected $answerBoolean = null;

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate
     */
    protected $answerDate = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $answerString = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    protected $answerDateTime = null;

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant
     */
    protected $answerInstant = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Selections made by the user from the list of options.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding[]
     */
    protected $choice = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to a valueset containing the possible options.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $options = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    protected $dataBoolean = null;

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    protected $dataInteger = null;

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal
     */
    protected $dataDecimal = null;

    /**
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary
     */
    protected $dataBase64Binary = null;

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant
     */
    protected $dataInstant = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $dataString = null;

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    protected $dataUri = null;

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate
     */
    protected $dataDate = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    protected $dataDateTime = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    protected $dataCode = null;

    /**
     * An oid represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROid
     */
    protected $dataOid = null;

    /**
     * A UUID, represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUuid
     */
    protected $dataUuid = null;

    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId
     */
    protected $dataId = null;

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment
     */
    protected $dataAttachment = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier
     */
    protected $dataIdentifier = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected $dataCodeableConcept = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding
     */
    protected $dataCoding = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity
     */
    protected $dataQuantity = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRange
     */
    protected $dataRange = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    protected $dataPeriod = null;

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRatio
     */
    protected $dataRatio = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $dataResource = null;

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSampledData
     */
    protected $dataSampledData = null;

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRHumanName
     */
    protected $dataHumanName = null;

    /**
     * There is a variety of postal address formats defined around the world. This
     * format defines a superset that is the basis for all addresses around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress
     */
    protected $dataAddress = null;

    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRContact
     */
    protected $dataContact = null;

    /**
     * Specifies an event that may occur multiple times. Schedules are used for to
     * reord when things are expected or requested to occur.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule
     */
    protected $dataSchedule = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The remark contains information about the answer given. This is additional
     * information about the answer the author wishes to convey, but should not be used
     * to contain information that is part of the answer itself.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $remarks = null;

    /**
     * A structured set of questions and their answers. The Questionnaire may contain
     * questions, answers or both. The questions are ordered and grouped into coherent
     * subsets, corresponding to the structure of the grouping of the underlying
     * questions.
     *
     * Nested group, containing nested question for this question. The order of groups
     * within the question is relevant.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup[]
     */
    protected $group = [];

    /**
     * Validation map for fields in type Questionnaire.Question
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRQuestionnaireQuestion Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRQuestionnaireQuestion::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_NAME])) {
            if ($data[self::FIELD_NAME] instanceof FHIRCodeableConcept) {
                $this->setName($data[self::FIELD_NAME]);
            } else {
                $this->setName(new FHIRCodeableConcept($data[self::FIELD_NAME]));
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
        if (isset($data[self::FIELD_ANSWER_DECIMAL]) || isset($data[self::FIELD_ANSWER_DECIMAL_EXT])) {
            $value = isset($data[self::FIELD_ANSWER_DECIMAL]) ? $data[self::FIELD_ANSWER_DECIMAL] : null;
            $ext = (isset($data[self::FIELD_ANSWER_DECIMAL_EXT]) && is_array($data[self::FIELD_ANSWER_DECIMAL_EXT])) ? $ext = $data[self::FIELD_ANSWER_DECIMAL_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_ANSWER_INTEGER]) || isset($data[self::FIELD_ANSWER_INTEGER_EXT])) {
            $value = isset($data[self::FIELD_ANSWER_INTEGER]) ? $data[self::FIELD_ANSWER_INTEGER] : null;
            $ext = (isset($data[self::FIELD_ANSWER_INTEGER_EXT]) && is_array($data[self::FIELD_ANSWER_INTEGER_EXT])) ? $ext = $data[self::FIELD_ANSWER_INTEGER_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_ANSWER_BOOLEAN]) || isset($data[self::FIELD_ANSWER_BOOLEAN_EXT])) {
            $value = isset($data[self::FIELD_ANSWER_BOOLEAN]) ? $data[self::FIELD_ANSWER_BOOLEAN] : null;
            $ext = (isset($data[self::FIELD_ANSWER_BOOLEAN_EXT]) && is_array($data[self::FIELD_ANSWER_BOOLEAN_EXT])) ? $ext = $data[self::FIELD_ANSWER_BOOLEAN_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_ANSWER_DATE]) || isset($data[self::FIELD_ANSWER_DATE_EXT])) {
            $value = isset($data[self::FIELD_ANSWER_DATE]) ? $data[self::FIELD_ANSWER_DATE] : null;
            $ext = (isset($data[self::FIELD_ANSWER_DATE_EXT]) && is_array($data[self::FIELD_ANSWER_DATE_EXT])) ? $ext = $data[self::FIELD_ANSWER_DATE_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_ANSWER_STRING]) || isset($data[self::FIELD_ANSWER_STRING_EXT])) {
            $value = isset($data[self::FIELD_ANSWER_STRING]) ? $data[self::FIELD_ANSWER_STRING] : null;
            $ext = (isset($data[self::FIELD_ANSWER_STRING_EXT]) && is_array($data[self::FIELD_ANSWER_STRING_EXT])) ? $ext = $data[self::FIELD_ANSWER_STRING_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_ANSWER_DATE_TIME]) || isset($data[self::FIELD_ANSWER_DATE_TIME_EXT])) {
            $value = isset($data[self::FIELD_ANSWER_DATE_TIME]) ? $data[self::FIELD_ANSWER_DATE_TIME] : null;
            $ext = (isset($data[self::FIELD_ANSWER_DATE_TIME_EXT]) && is_array($data[self::FIELD_ANSWER_DATE_TIME_EXT])) ? $ext = $data[self::FIELD_ANSWER_DATE_TIME_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_ANSWER_INSTANT]) || isset($data[self::FIELD_ANSWER_INSTANT_EXT])) {
            $value = isset($data[self::FIELD_ANSWER_INSTANT]) ? $data[self::FIELD_ANSWER_INSTANT] : null;
            $ext = (isset($data[self::FIELD_ANSWER_INSTANT_EXT]) && is_array($data[self::FIELD_ANSWER_INSTANT_EXT])) ? $ext = $data[self::FIELD_ANSWER_INSTANT_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_CHOICE])) {
            if (is_array($data[self::FIELD_CHOICE])) {
                foreach($data[self::FIELD_CHOICE] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_OPTIONS])) {
            if ($data[self::FIELD_OPTIONS] instanceof FHIRResourceReference) {
                $this->setOptions($data[self::FIELD_OPTIONS]);
            } else {
                $this->setOptions(new FHIRResourceReference($data[self::FIELD_OPTIONS]));
            }
        }
        if (isset($data[self::FIELD_DATA_BOOLEAN]) || isset($data[self::FIELD_DATA_BOOLEAN_EXT])) {
            $value = isset($data[self::FIELD_DATA_BOOLEAN]) ? $data[self::FIELD_DATA_BOOLEAN] : null;
            $ext = (isset($data[self::FIELD_DATA_BOOLEAN_EXT]) && is_array($data[self::FIELD_DATA_BOOLEAN_EXT])) ? $ext = $data[self::FIELD_DATA_BOOLEAN_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_DATA_INTEGER]) || isset($data[self::FIELD_DATA_INTEGER_EXT])) {
            $value = isset($data[self::FIELD_DATA_INTEGER]) ? $data[self::FIELD_DATA_INTEGER] : null;
            $ext = (isset($data[self::FIELD_DATA_INTEGER_EXT]) && is_array($data[self::FIELD_DATA_INTEGER_EXT])) ? $ext = $data[self::FIELD_DATA_INTEGER_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_DATA_DECIMAL]) || isset($data[self::FIELD_DATA_DECIMAL_EXT])) {
            $value = isset($data[self::FIELD_DATA_DECIMAL]) ? $data[self::FIELD_DATA_DECIMAL] : null;
            $ext = (isset($data[self::FIELD_DATA_DECIMAL_EXT]) && is_array($data[self::FIELD_DATA_DECIMAL_EXT])) ? $ext = $data[self::FIELD_DATA_DECIMAL_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_DATA_BASE_64BINARY]) || isset($data[self::FIELD_DATA_BASE_64BINARY_EXT])) {
            $value = isset($data[self::FIELD_DATA_BASE_64BINARY]) ? $data[self::FIELD_DATA_BASE_64BINARY] : null;
            $ext = (isset($data[self::FIELD_DATA_BASE_64BINARY_EXT]) && is_array($data[self::FIELD_DATA_BASE_64BINARY_EXT])) ? $ext = $data[self::FIELD_DATA_BASE_64BINARY_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_DATA_INSTANT]) || isset($data[self::FIELD_DATA_INSTANT_EXT])) {
            $value = isset($data[self::FIELD_DATA_INSTANT]) ? $data[self::FIELD_DATA_INSTANT] : null;
            $ext = (isset($data[self::FIELD_DATA_INSTANT_EXT]) && is_array($data[self::FIELD_DATA_INSTANT_EXT])) ? $ext = $data[self::FIELD_DATA_INSTANT_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_DATA_STRING]) || isset($data[self::FIELD_DATA_STRING_EXT])) {
            $value = isset($data[self::FIELD_DATA_STRING]) ? $data[self::FIELD_DATA_STRING] : null;
            $ext = (isset($data[self::FIELD_DATA_STRING_EXT]) && is_array($data[self::FIELD_DATA_STRING_EXT])) ? $ext = $data[self::FIELD_DATA_STRING_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_DATA_URI]) || isset($data[self::FIELD_DATA_URI_EXT])) {
            $value = isset($data[self::FIELD_DATA_URI]) ? $data[self::FIELD_DATA_URI] : null;
            $ext = (isset($data[self::FIELD_DATA_URI_EXT]) && is_array($data[self::FIELD_DATA_URI_EXT])) ? $ext = $data[self::FIELD_DATA_URI_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_DATA_DATE]) || isset($data[self::FIELD_DATA_DATE_EXT])) {
            $value = isset($data[self::FIELD_DATA_DATE]) ? $data[self::FIELD_DATA_DATE] : null;
            $ext = (isset($data[self::FIELD_DATA_DATE_EXT]) && is_array($data[self::FIELD_DATA_DATE_EXT])) ? $ext = $data[self::FIELD_DATA_DATE_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_DATA_DATE_TIME]) || isset($data[self::FIELD_DATA_DATE_TIME_EXT])) {
            $value = isset($data[self::FIELD_DATA_DATE_TIME]) ? $data[self::FIELD_DATA_DATE_TIME] : null;
            $ext = (isset($data[self::FIELD_DATA_DATE_TIME_EXT]) && is_array($data[self::FIELD_DATA_DATE_TIME_EXT])) ? $ext = $data[self::FIELD_DATA_DATE_TIME_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_DATA_CODE]) || isset($data[self::FIELD_DATA_CODE_EXT])) {
            $value = isset($data[self::FIELD_DATA_CODE]) ? $data[self::FIELD_DATA_CODE] : null;
            $ext = (isset($data[self::FIELD_DATA_CODE_EXT]) && is_array($data[self::FIELD_DATA_CODE_EXT])) ? $ext = $data[self::FIELD_DATA_CODE_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_DATA_OID]) || isset($data[self::FIELD_DATA_OID_EXT])) {
            $value = isset($data[self::FIELD_DATA_OID]) ? $data[self::FIELD_DATA_OID] : null;
            $ext = (isset($data[self::FIELD_DATA_OID_EXT]) && is_array($data[self::FIELD_DATA_OID_EXT])) ? $ext = $data[self::FIELD_DATA_OID_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_DATA_UUID]) || isset($data[self::FIELD_DATA_UUID_EXT])) {
            $value = isset($data[self::FIELD_DATA_UUID]) ? $data[self::FIELD_DATA_UUID] : null;
            $ext = (isset($data[self::FIELD_DATA_UUID_EXT]) && is_array($data[self::FIELD_DATA_UUID_EXT])) ? $ext = $data[self::FIELD_DATA_UUID_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_DATA_ID]) || isset($data[self::FIELD_DATA_ID_EXT])) {
            $value = isset($data[self::FIELD_DATA_ID]) ? $data[self::FIELD_DATA_ID] : null;
            $ext = (isset($data[self::FIELD_DATA_ID_EXT]) && is_array($data[self::FIELD_DATA_ID_EXT])) ? $ext = $data[self::FIELD_DATA_ID_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_DATA_ATTACHMENT])) {
            if ($data[self::FIELD_DATA_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setDataAttachment($data[self::FIELD_DATA_ATTACHMENT]);
            } else {
                $this->setDataAttachment(new FHIRAttachment($data[self::FIELD_DATA_ATTACHMENT]));
            }
        }
        if (isset($data[self::FIELD_DATA_IDENTIFIER])) {
            if ($data[self::FIELD_DATA_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setDataIdentifier($data[self::FIELD_DATA_IDENTIFIER]);
            } else {
                $this->setDataIdentifier(new FHIRIdentifier($data[self::FIELD_DATA_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_DATA_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_DATA_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setDataCodeableConcept($data[self::FIELD_DATA_CODEABLE_CONCEPT]);
            } else {
                $this->setDataCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_DATA_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_DATA_CODING])) {
            if ($data[self::FIELD_DATA_CODING] instanceof FHIRCoding) {
                $this->setDataCoding($data[self::FIELD_DATA_CODING]);
            } else {
                $this->setDataCoding(new FHIRCoding($data[self::FIELD_DATA_CODING]));
            }
        }
        if (isset($data[self::FIELD_DATA_QUANTITY])) {
            if ($data[self::FIELD_DATA_QUANTITY] instanceof FHIRQuantity) {
                $this->setDataQuantity($data[self::FIELD_DATA_QUANTITY]);
            } else {
                $this->setDataQuantity(new FHIRQuantity($data[self::FIELD_DATA_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_DATA_RANGE])) {
            if ($data[self::FIELD_DATA_RANGE] instanceof FHIRRange) {
                $this->setDataRange($data[self::FIELD_DATA_RANGE]);
            } else {
                $this->setDataRange(new FHIRRange($data[self::FIELD_DATA_RANGE]));
            }
        }
        if (isset($data[self::FIELD_DATA_PERIOD])) {
            if ($data[self::FIELD_DATA_PERIOD] instanceof FHIRPeriod) {
                $this->setDataPeriod($data[self::FIELD_DATA_PERIOD]);
            } else {
                $this->setDataPeriod(new FHIRPeriod($data[self::FIELD_DATA_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_DATA_RATIO])) {
            if ($data[self::FIELD_DATA_RATIO] instanceof FHIRRatio) {
                $this->setDataRatio($data[self::FIELD_DATA_RATIO]);
            } else {
                $this->setDataRatio(new FHIRRatio($data[self::FIELD_DATA_RATIO]));
            }
        }
        if (isset($data[self::FIELD_DATA_RESOURCE])) {
            if ($data[self::FIELD_DATA_RESOURCE] instanceof FHIRResourceReference) {
                $this->setDataResource($data[self::FIELD_DATA_RESOURCE]);
            } else {
                $this->setDataResource(new FHIRResourceReference($data[self::FIELD_DATA_RESOURCE]));
            }
        }
        if (isset($data[self::FIELD_DATA_SAMPLED_DATA])) {
            if ($data[self::FIELD_DATA_SAMPLED_DATA] instanceof FHIRSampledData) {
                $this->setDataSampledData($data[self::FIELD_DATA_SAMPLED_DATA]);
            } else {
                $this->setDataSampledData(new FHIRSampledData($data[self::FIELD_DATA_SAMPLED_DATA]));
            }
        }
        if (isset($data[self::FIELD_DATA_HUMAN_NAME])) {
            if ($data[self::FIELD_DATA_HUMAN_NAME] instanceof FHIRHumanName) {
                $this->setDataHumanName($data[self::FIELD_DATA_HUMAN_NAME]);
            } else {
                $this->setDataHumanName(new FHIRHumanName($data[self::FIELD_DATA_HUMAN_NAME]));
            }
        }
        if (isset($data[self::FIELD_DATA_ADDRESS])) {
            if ($data[self::FIELD_DATA_ADDRESS] instanceof FHIRAddress) {
                $this->setDataAddress($data[self::FIELD_DATA_ADDRESS]);
            } else {
                $this->setDataAddress(new FHIRAddress($data[self::FIELD_DATA_ADDRESS]));
            }
        }
        if (isset($data[self::FIELD_DATA_CONTACT])) {
            if ($data[self::FIELD_DATA_CONTACT] instanceof FHIRContact) {
                $this->setDataContact($data[self::FIELD_DATA_CONTACT]);
            } else {
                $this->setDataContact(new FHIRContact($data[self::FIELD_DATA_CONTACT]));
            }
        }
        if (isset($data[self::FIELD_DATA_SCHEDULE])) {
            if ($data[self::FIELD_DATA_SCHEDULE] instanceof FHIRSchedule) {
                $this->setDataSchedule($data[self::FIELD_DATA_SCHEDULE]);
            } else {
                $this->setDataSchedule(new FHIRSchedule($data[self::FIELD_DATA_SCHEDULE]));
            }
        }
        if (isset($data[self::FIELD_REMARKS]) || isset($data[self::FIELD_REMARKS_EXT])) {
            $value = isset($data[self::FIELD_REMARKS]) ? $data[self::FIELD_REMARKS] : null;
            $ext = (isset($data[self::FIELD_REMARKS_EXT]) && is_array($data[self::FIELD_REMARKS_EXT])) ? $ext = $data[self::FIELD_REMARKS_EXT] : $ext = [];
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
            }
        }
        if (isset($data[self::FIELD_GROUP])) {
            if (is_array($data[self::FIELD_GROUP])) {
                foreach($data[self::FIELD_GROUP] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        return "<QuestionnaireQuestion{$xmlns}></QuestionnaireQuestion>";
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
    public function getName()
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
    public function setName(FHIRCodeableConcept $name = null)
    {
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
    public function getText()
    {
        return $this->text;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text of the question as it is shown to the user.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $text
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
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal
     */
    public function getAnswerDecimal()
    {
        return $this->answerDecimal;
    }

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal $answerDecimal
     * @return static
     */
    public function setAnswerDecimal($answerDecimal = null)
    {
        if (null !== $answerDecimal && !($answerDecimal instanceof FHIRDecimal)) {
            $answerDecimal = new FHIRDecimal($answerDecimal);
        }
        $this->_trackValueSet($this->answerDecimal, $answerDecimal);
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
    public function getAnswerInteger()
    {
        return $this->answerInteger;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $answerInteger
     * @return static
     */
    public function setAnswerInteger($answerInteger = null)
    {
        if (null !== $answerInteger && !($answerInteger instanceof FHIRInteger)) {
            $answerInteger = new FHIRInteger($answerInteger);
        }
        $this->_trackValueSet($this->answerInteger, $answerInteger);
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
    public function getAnswerBoolean()
    {
        return $this->answerBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean $answerBoolean
     * @return static
     */
    public function setAnswerBoolean($answerBoolean = null)
    {
        if (null !== $answerBoolean && !($answerBoolean instanceof FHIRBoolean)) {
            $answerBoolean = new FHIRBoolean($answerBoolean);
        }
        $this->_trackValueSet($this->answerBoolean, $answerBoolean);
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
    public function getAnswerDate()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate $answerDate
     * @return static
     */
    public function setAnswerDate($answerDate = null)
    {
        if (null !== $answerDate && !($answerDate instanceof FHIRDate)) {
            $answerDate = new FHIRDate($answerDate);
        }
        $this->_trackValueSet($this->answerDate, $answerDate);
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
    public function getAnswerString()
    {
        return $this->answerString;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $answerString
     * @return static
     */
    public function setAnswerString($answerString = null)
    {
        if (null !== $answerString && !($answerString instanceof FHIRString)) {
            $answerString = new FHIRString($answerString);
        }
        $this->_trackValueSet($this->answerString, $answerString);
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
    public function getAnswerDateTime()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime $answerDateTime
     * @return static
     */
    public function setAnswerDateTime($answerDateTime = null)
    {
        if (null !== $answerDateTime && !($answerDateTime instanceof FHIRDateTime)) {
            $answerDateTime = new FHIRDateTime($answerDateTime);
        }
        $this->_trackValueSet($this->answerDateTime, $answerDateTime);
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
    public function getAnswerInstant()
    {
        return $this->answerInstant;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant $answerInstant
     * @return static
     */
    public function setAnswerInstant($answerInstant = null)
    {
        if (null !== $answerInstant && !($answerInstant instanceof FHIRInstant)) {
            $answerInstant = new FHIRInstant($answerInstant);
        }
        $this->_trackValueSet($this->answerInstant, $answerInstant);
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
    public function getChoice()
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
    public function addChoice(FHIRCoding $choice = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding[] $choice
     * @return static
     */
    public function setChoice(array $choice = [])
    {
        if ([] !== $this->choice) {
            $this->_trackValuesRemoved(count($this->choice));
            $this->choice = [];
        }
        if ([] === $choice) {
            return $this;
        }
        foreach($choice as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addChoice($v);
            } else {
                $this->addChoice(new FHIRCoding($v));
            }
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
    public function getOptions()
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
    public function setOptions(FHIRResourceReference $options = null)
    {
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
    public function getDataBoolean()
    {
        return $this->dataBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean $dataBoolean
     * @return static
     */
    public function setDataBoolean($dataBoolean = null)
    {
        if (null !== $dataBoolean && !($dataBoolean instanceof FHIRBoolean)) {
            $dataBoolean = new FHIRBoolean($dataBoolean);
        }
        $this->_trackValueSet($this->dataBoolean, $dataBoolean);
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
    public function getDataInteger()
    {
        return $this->dataInteger;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $dataInteger
     * @return static
     */
    public function setDataInteger($dataInteger = null)
    {
        if (null !== $dataInteger && !($dataInteger instanceof FHIRInteger)) {
            $dataInteger = new FHIRInteger($dataInteger);
        }
        $this->_trackValueSet($this->dataInteger, $dataInteger);
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
    public function getDataDecimal()
    {
        return $this->dataDecimal;
    }

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal $dataDecimal
     * @return static
     */
    public function setDataDecimal($dataDecimal = null)
    {
        if (null !== $dataDecimal && !($dataDecimal instanceof FHIRDecimal)) {
            $dataDecimal = new FHIRDecimal($dataDecimal);
        }
        $this->_trackValueSet($this->dataDecimal, $dataDecimal);
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
    public function getDataBase64Binary()
    {
        return $this->dataBase64Binary;
    }

    /**
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary $dataBase64Binary
     * @return static
     */
    public function setDataBase64Binary($dataBase64Binary = null)
    {
        if (null !== $dataBase64Binary && !($dataBase64Binary instanceof FHIRBase64Binary)) {
            $dataBase64Binary = new FHIRBase64Binary($dataBase64Binary);
        }
        $this->_trackValueSet($this->dataBase64Binary, $dataBase64Binary);
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
    public function getDataInstant()
    {
        return $this->dataInstant;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant $dataInstant
     * @return static
     */
    public function setDataInstant($dataInstant = null)
    {
        if (null !== $dataInstant && !($dataInstant instanceof FHIRInstant)) {
            $dataInstant = new FHIRInstant($dataInstant);
        }
        $this->_trackValueSet($this->dataInstant, $dataInstant);
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
    public function getDataString()
    {
        return $this->dataString;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $dataString
     * @return static
     */
    public function setDataString($dataString = null)
    {
        if (null !== $dataString && !($dataString instanceof FHIRString)) {
            $dataString = new FHIRString($dataString);
        }
        $this->_trackValueSet($this->dataString, $dataString);
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
    public function getDataUri()
    {
        return $this->dataUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri $dataUri
     * @return static
     */
    public function setDataUri($dataUri = null)
    {
        if (null !== $dataUri && !($dataUri instanceof FHIRUri)) {
            $dataUri = new FHIRUri($dataUri);
        }
        $this->_trackValueSet($this->dataUri, $dataUri);
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
    public function getDataDate()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate $dataDate
     * @return static
     */
    public function setDataDate($dataDate = null)
    {
        if (null !== $dataDate && !($dataDate instanceof FHIRDate)) {
            $dataDate = new FHIRDate($dataDate);
        }
        $this->_trackValueSet($this->dataDate, $dataDate);
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
    public function getDataDateTime()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime $dataDateTime
     * @return static
     */
    public function setDataDateTime($dataDateTime = null)
    {
        if (null !== $dataDateTime && !($dataDateTime instanceof FHIRDateTime)) {
            $dataDateTime = new FHIRDateTime($dataDateTime);
        }
        $this->_trackValueSet($this->dataDateTime, $dataDateTime);
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
    public function getDataCode()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode $dataCode
     * @return static
     */
    public function setDataCode($dataCode = null)
    {
        if (null !== $dataCode && !($dataCode instanceof FHIRCode)) {
            $dataCode = new FHIRCode($dataCode);
        }
        $this->_trackValueSet($this->dataCode, $dataCode);
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
    public function getDataOid()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROid $dataOid
     * @return static
     */
    public function setDataOid($dataOid = null)
    {
        if (null !== $dataOid && !($dataOid instanceof FHIROid)) {
            $dataOid = new FHIROid($dataOid);
        }
        $this->_trackValueSet($this->dataOid, $dataOid);
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
    public function getDataUuid()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUuid $dataUuid
     * @return static
     */
    public function setDataUuid($dataUuid = null)
    {
        if (null !== $dataUuid && !($dataUuid instanceof FHIRUuid)) {
            $dataUuid = new FHIRUuid($dataUuid);
        }
        $this->_trackValueSet($this->dataUuid, $dataUuid);
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
    public function getDataId()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId $dataId
     * @return static
     */
    public function setDataId($dataId = null)
    {
        if (null !== $dataId && !($dataId instanceof FHIRId)) {
            $dataId = new FHIRId($dataId);
        }
        $this->_trackValueSet($this->dataId, $dataId);
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
    public function getDataAttachment()
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
    public function setDataAttachment(FHIRAttachment $dataAttachment = null)
    {
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
    public function getDataIdentifier()
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
    public function setDataIdentifier(FHIRIdentifier $dataIdentifier = null)
    {
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
    public function getDataCodeableConcept()
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
    public function setDataCodeableConcept(FHIRCodeableConcept $dataCodeableConcept = null)
    {
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
    public function getDataCoding()
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
    public function setDataCoding(FHIRCoding $dataCoding = null)
    {
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
    public function getDataQuantity()
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
    public function setDataQuantity(FHIRQuantity $dataQuantity = null)
    {
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
    public function getDataRange()
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
    public function setDataRange(FHIRRange $dataRange = null)
    {
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
    public function getDataPeriod()
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
    public function setDataPeriod(FHIRPeriod $dataPeriod = null)
    {
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
    public function getDataRatio()
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
    public function setDataRatio(FHIRRatio $dataRatio = null)
    {
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
    public function getDataResource()
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
    public function setDataResource(FHIRResourceReference $dataResource = null)
    {
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
    public function getDataSampledData()
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
    public function setDataSampledData(FHIRSampledData $dataSampledData = null)
    {
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
    public function getDataHumanName()
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
    public function setDataHumanName(FHIRHumanName $dataHumanName = null)
    {
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
    public function getDataAddress()
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
    public function setDataAddress(FHIRAddress $dataAddress = null)
    {
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
    public function getDataContact()
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
    public function setDataContact(FHIRContact $dataContact = null)
    {
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
    public function getDataSchedule()
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
    public function setDataSchedule(FHIRSchedule $dataSchedule = null)
    {
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
    public function getRemarks()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $remarks
     * @return static
     */
    public function setRemarks($remarks = null)
    {
        if (null !== $remarks && !($remarks instanceof FHIRString)) {
            $remarks = new FHIRString($remarks);
        }
        $this->_trackValueSet($this->remarks, $remarks);
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
    public function getGroup()
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
    public function addGroup(FHIRQuestionnaireGroup $group = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup[] $group
     * @return static
     */
    public function setGroup(array $group = [])
    {
        if ([] !== $this->group) {
            $this->_trackValuesRemoved(count($this->group));
            $this->group = [];
        }
        if ([] === $group) {
            return $this;
        }
        foreach($group as $v) {
            if ($v instanceof FHIRQuestionnaireGroup) {
                $this->addGroup($v);
            } else {
                $this->addGroup(new FHIRQuestionnaireGroup($v));
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
     * @param null|string|\DOMElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion
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
                throw new \DomainException(sprintf('FHIRQuestionnaireQuestion::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRQuestionnaireQuestion::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRQuestionnaireQuestion(null);
        } elseif (!is_object($type) || !($type instanceof FHIRQuestionnaireQuestion)) {
            throw new \RuntimeException(sprintf(
                'FHIRQuestionnaireQuestion::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion or null, %s seen.',
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
            if (self::FIELD_NAME === $n->nodeName) {
                $type->setName(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_TEXT === $n->nodeName) {
                $type->setText(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_ANSWER_DECIMAL === $n->nodeName) {
                $type->setAnswerDecimal(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_ANSWER_INTEGER === $n->nodeName) {
                $type->setAnswerInteger(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_ANSWER_BOOLEAN === $n->nodeName) {
                $type->setAnswerBoolean(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_ANSWER_DATE === $n->nodeName) {
                $type->setAnswerDate(FHIRDate::xmlUnserialize($n));
            } elseif (self::FIELD_ANSWER_STRING === $n->nodeName) {
                $type->setAnswerString(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_ANSWER_DATE_TIME === $n->nodeName) {
                $type->setAnswerDateTime(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_ANSWER_INSTANT === $n->nodeName) {
                $type->setAnswerInstant(FHIRInstant::xmlUnserialize($n));
            } elseif (self::FIELD_CHOICE === $n->nodeName) {
                $type->addChoice(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_OPTIONS === $n->nodeName) {
                $type->setOptions(FHIRResourceReference::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_BOOLEAN === $n->nodeName) {
                $type->setDataBoolean(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_INTEGER === $n->nodeName) {
                $type->setDataInteger(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_DECIMAL === $n->nodeName) {
                $type->setDataDecimal(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_BASE_64BINARY === $n->nodeName) {
                $type->setDataBase64Binary(FHIRBase64Binary::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_INSTANT === $n->nodeName) {
                $type->setDataInstant(FHIRInstant::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_STRING === $n->nodeName) {
                $type->setDataString(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_URI === $n->nodeName) {
                $type->setDataUri(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_DATE === $n->nodeName) {
                $type->setDataDate(FHIRDate::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_DATE_TIME === $n->nodeName) {
                $type->setDataDateTime(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_CODE === $n->nodeName) {
                $type->setDataCode(FHIRCode::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_OID === $n->nodeName) {
                $type->setDataOid(FHIROid::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_UUID === $n->nodeName) {
                $type->setDataUuid(FHIRUuid::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_ID === $n->nodeName) {
                $type->setDataId(FHIRId::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_ATTACHMENT === $n->nodeName) {
                $type->setDataAttachment(FHIRAttachment::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_IDENTIFIER === $n->nodeName) {
                $type->setDataIdentifier(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_CODEABLE_CONCEPT === $n->nodeName) {
                $type->setDataCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_CODING === $n->nodeName) {
                $type->setDataCoding(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_QUANTITY === $n->nodeName) {
                $type->setDataQuantity(FHIRQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_RANGE === $n->nodeName) {
                $type->setDataRange(FHIRRange::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_PERIOD === $n->nodeName) {
                $type->setDataPeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_RATIO === $n->nodeName) {
                $type->setDataRatio(FHIRRatio::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_RESOURCE === $n->nodeName) {
                $type->setDataResource(FHIRResourceReference::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_SAMPLED_DATA === $n->nodeName) {
                $type->setDataSampledData(FHIRSampledData::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_HUMAN_NAME === $n->nodeName) {
                $type->setDataHumanName(FHIRHumanName::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_ADDRESS === $n->nodeName) {
                $type->setDataAddress(FHIRAddress::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_CONTACT === $n->nodeName) {
                $type->setDataContact(FHIRContact::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_SCHEDULE === $n->nodeName) {
                $type->setDataSchedule(FHIRSchedule::xmlUnserialize($n));
            } elseif (self::FIELD_REMARKS === $n->nodeName) {
                $type->setRemarks(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_GROUP === $n->nodeName) {
                $type->addGroup(FHIRQuestionnaireGroup::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_ANSWER_DECIMAL);
        if (null !== $n) {
            $pt = $type->getAnswerDecimal();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAnswerDecimal($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ANSWER_INTEGER);
        if (null !== $n) {
            $pt = $type->getAnswerInteger();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAnswerInteger($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ANSWER_BOOLEAN);
        if (null !== $n) {
            $pt = $type->getAnswerBoolean();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAnswerBoolean($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ANSWER_DATE);
        if (null !== $n) {
            $pt = $type->getAnswerDate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAnswerDate($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ANSWER_STRING);
        if (null !== $n) {
            $pt = $type->getAnswerString();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAnswerString($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ANSWER_DATE_TIME);
        if (null !== $n) {
            $pt = $type->getAnswerDateTime();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAnswerDateTime($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ANSWER_INSTANT);
        if (null !== $n) {
            $pt = $type->getAnswerInstant();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAnswerInstant($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DATA_BOOLEAN);
        if (null !== $n) {
            $pt = $type->getDataBoolean();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDataBoolean($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DATA_INTEGER);
        if (null !== $n) {
            $pt = $type->getDataInteger();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDataInteger($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DATA_DECIMAL);
        if (null !== $n) {
            $pt = $type->getDataDecimal();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDataDecimal($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DATA_BASE_64BINARY);
        if (null !== $n) {
            $pt = $type->getDataBase64Binary();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDataBase64Binary($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DATA_INSTANT);
        if (null !== $n) {
            $pt = $type->getDataInstant();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDataInstant($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DATA_STRING);
        if (null !== $n) {
            $pt = $type->getDataString();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDataString($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DATA_URI);
        if (null !== $n) {
            $pt = $type->getDataUri();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDataUri($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DATA_DATE);
        if (null !== $n) {
            $pt = $type->getDataDate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDataDate($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DATA_DATE_TIME);
        if (null !== $n) {
            $pt = $type->getDataDateTime();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDataDateTime($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DATA_CODE);
        if (null !== $n) {
            $pt = $type->getDataCode();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDataCode($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DATA_OID);
        if (null !== $n) {
            $pt = $type->getDataOid();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDataOid($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DATA_UUID);
        if (null !== $n) {
            $pt = $type->getDataUuid();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDataUuid($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DATA_ID);
        if (null !== $n) {
            $pt = $type->getDataId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDataId($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_REMARKS);
        if (null !== $n) {
            $pt = $type->getRemarks();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setRemarks($n->nodeValue);
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
        if (null !== ($v = $this->getName())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NAME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getText())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TEXT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAnswerDecimal())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ANSWER_DECIMAL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAnswerInteger())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ANSWER_INTEGER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAnswerBoolean())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ANSWER_BOOLEAN);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAnswerDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ANSWER_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAnswerString())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ANSWER_STRING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAnswerDateTime())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ANSWER_DATE_TIME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAnswerInstant())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ANSWER_INSTANT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getChoice())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CHOICE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getOptions())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_OPTIONS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDataBoolean())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA_BOOLEAN);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDataInteger())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA_INTEGER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDataDecimal())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA_DECIMAL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDataBase64Binary())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA_BASE_64BINARY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDataInstant())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA_INSTANT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDataString())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA_STRING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDataUri())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA_URI);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDataDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDataDateTime())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA_DATE_TIME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDataCode())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA_CODE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDataOid())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA_OID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDataUuid())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA_UUID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDataId())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA_ID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDataAttachment())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA_ATTACHMENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDataIdentifier())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA_IDENTIFIER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDataCodeableConcept())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA_CODEABLE_CONCEPT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDataCoding())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA_CODING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDataQuantity())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA_QUANTITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDataRange())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA_RANGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDataPeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDataRatio())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA_RATIO);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDataResource())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA_RESOURCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDataSampledData())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA_SAMPLED_DATA);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDataHumanName())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA_HUMAN_NAME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDataAddress())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA_ADDRESS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDataContact())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA_CONTACT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDataSchedule())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA_SCHEDULE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRemarks())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REMARKS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getGroup())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_GROUP);
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
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = $v;
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
        if (null !== ($v = $this->getAnswerDecimal())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_ANSWER_DECIMAL] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRDecimal::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_ANSWER_DECIMAL_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getAnswerInteger())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_ANSWER_INTEGER] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRInteger::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_ANSWER_INTEGER_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getAnswerBoolean())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_ANSWER_BOOLEAN] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRBoolean::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_ANSWER_BOOLEAN_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getAnswerDate())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_ANSWER_DATE] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRDate::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_ANSWER_DATE_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getAnswerString())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_ANSWER_STRING] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_ANSWER_STRING_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getAnswerDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_ANSWER_DATE_TIME] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRDateTime::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_ANSWER_DATE_TIME_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getAnswerInstant())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_ANSWER_INSTANT] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRInstant::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_ANSWER_INSTANT_EXT] = $ext;
            }
        }
        if ([] !== ($vs = $this->getChoice())) {
            $a[self::FIELD_CHOICE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CHOICE][] = $v;
            }
        }
        if (null !== ($v = $this->getOptions())) {
            $a[self::FIELD_OPTIONS] = $v;
        }
        if (null !== ($v = $this->getDataBoolean())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DATA_BOOLEAN] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRBoolean::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_DATA_BOOLEAN_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getDataInteger())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DATA_INTEGER] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRInteger::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_DATA_INTEGER_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getDataDecimal())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DATA_DECIMAL] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRDecimal::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_DATA_DECIMAL_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getDataBase64Binary())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DATA_BASE_64BINARY] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRBase64Binary::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_DATA_BASE_64BINARY_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getDataInstant())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DATA_INSTANT] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRInstant::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_DATA_INSTANT_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getDataString())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DATA_STRING] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_DATA_STRING_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getDataUri())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DATA_URI] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRUri::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_DATA_URI_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getDataDate())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DATA_DATE] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRDate::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_DATA_DATE_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getDataDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DATA_DATE_TIME] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRDateTime::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_DATA_DATE_TIME_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getDataCode())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DATA_CODE] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRCode::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_DATA_CODE_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getDataOid())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DATA_OID] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIROid::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_DATA_OID_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getDataUuid())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DATA_UUID] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRUuid::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_DATA_UUID_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getDataId())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DATA_ID] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRId::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_DATA_ID_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getDataAttachment())) {
            $a[self::FIELD_DATA_ATTACHMENT] = $v;
        }
        if (null !== ($v = $this->getDataIdentifier())) {
            $a[self::FIELD_DATA_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getDataCodeableConcept())) {
            $a[self::FIELD_DATA_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getDataCoding())) {
            $a[self::FIELD_DATA_CODING] = $v;
        }
        if (null !== ($v = $this->getDataQuantity())) {
            $a[self::FIELD_DATA_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getDataRange())) {
            $a[self::FIELD_DATA_RANGE] = $v;
        }
        if (null !== ($v = $this->getDataPeriod())) {
            $a[self::FIELD_DATA_PERIOD] = $v;
        }
        if (null !== ($v = $this->getDataRatio())) {
            $a[self::FIELD_DATA_RATIO] = $v;
        }
        if (null !== ($v = $this->getDataResource())) {
            $a[self::FIELD_DATA_RESOURCE] = $v;
        }
        if (null !== ($v = $this->getDataSampledData())) {
            $a[self::FIELD_DATA_SAMPLED_DATA] = $v;
        }
        if (null !== ($v = $this->getDataHumanName())) {
            $a[self::FIELD_DATA_HUMAN_NAME] = $v;
        }
        if (null !== ($v = $this->getDataAddress())) {
            $a[self::FIELD_DATA_ADDRESS] = $v;
        }
        if (null !== ($v = $this->getDataContact())) {
            $a[self::FIELD_DATA_CONTACT] = $v;
        }
        if (null !== ($v = $this->getDataSchedule())) {
            $a[self::FIELD_DATA_SCHEDULE] = $v;
        }
        if (null !== ($v = $this->getRemarks())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_REMARKS] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_REMARKS_EXT] = $ext;
            }
        }
        if ([] !== ($vs = $this->getGroup())) {
            $a[self::FIELD_GROUP] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_GROUP][] = $v;
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