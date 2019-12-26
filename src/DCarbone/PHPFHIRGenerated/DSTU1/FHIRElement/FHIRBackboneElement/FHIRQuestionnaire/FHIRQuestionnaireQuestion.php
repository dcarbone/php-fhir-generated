<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire;

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
    const FIELD_ANSWER_BOOLEAN = 'answerBoolean';
    const FIELD_ANSWER_BOOLEAN_EXT = '_answerBoolean';
    const FIELD_ANSWER_DATE = 'answerDate';
    const FIELD_ANSWER_DATE_EXT = '_answerDate';
    const FIELD_ANSWER_DATE_TIME = 'answerDateTime';
    const FIELD_ANSWER_DATE_TIME_EXT = '_answerDateTime';
    const FIELD_ANSWER_DECIMAL = 'answerDecimal';
    const FIELD_ANSWER_DECIMAL_EXT = '_answerDecimal';
    const FIELD_ANSWER_INSTANT = 'answerInstant';
    const FIELD_ANSWER_INSTANT_EXT = '_answerInstant';
    const FIELD_ANSWER_INTEGER = 'answerInteger';
    const FIELD_ANSWER_INTEGER_EXT = '_answerInteger';
    const FIELD_ANSWER_STRING = 'answerString';
    const FIELD_ANSWER_STRING_EXT = '_answerString';
    const FIELD_CHOICE = 'choice';
    const FIELD_DATA_ADDRESS = 'dataAddress';
    const FIELD_DATA_ATTACHMENT = 'dataAttachment';
    const FIELD_DATA_BASE_64BINARY = 'dataBase64Binary';
    const FIELD_DATA_BASE_64BINARY_EXT = '_dataBase64Binary';
    const FIELD_DATA_BOOLEAN = 'dataBoolean';
    const FIELD_DATA_BOOLEAN_EXT = '_dataBoolean';
    const FIELD_DATA_CODE = 'dataCode';
    const FIELD_DATA_CODE_EXT = '_dataCode';
    const FIELD_DATA_CODEABLE_CONCEPT = 'dataCodeableConcept';
    const FIELD_DATA_CODING = 'dataCoding';
    const FIELD_DATA_CONTACT = 'dataContact';
    const FIELD_DATA_DATE = 'dataDate';
    const FIELD_DATA_DATE_EXT = '_dataDate';
    const FIELD_DATA_DATE_TIME = 'dataDateTime';
    const FIELD_DATA_DATE_TIME_EXT = '_dataDateTime';
    const FIELD_DATA_DECIMAL = 'dataDecimal';
    const FIELD_DATA_DECIMAL_EXT = '_dataDecimal';
    const FIELD_DATA_HUMAN_NAME = 'dataHumanName';
    const FIELD_DATA_ID = 'dataId';
    const FIELD_DATA_ID_EXT = '_dataId';
    const FIELD_DATA_IDENTIFIER = 'dataIdentifier';
    const FIELD_DATA_INSTANT = 'dataInstant';
    const FIELD_DATA_INSTANT_EXT = '_dataInstant';
    const FIELD_DATA_INTEGER = 'dataInteger';
    const FIELD_DATA_INTEGER_EXT = '_dataInteger';
    const FIELD_DATA_OID = 'dataOid';
    const FIELD_DATA_OID_EXT = '_dataOid';
    const FIELD_DATA_PERIOD = 'dataPeriod';
    const FIELD_DATA_QUANTITY = 'dataQuantity';
    const FIELD_DATA_RANGE = 'dataRange';
    const FIELD_DATA_RATIO = 'dataRatio';
    const FIELD_DATA_RESOURCE = 'dataResource';
    const FIELD_DATA_SAMPLED_DATA = 'dataSampledData';
    const FIELD_DATA_SCHEDULE = 'dataSchedule';
    const FIELD_DATA_STRING = 'dataString';
    const FIELD_DATA_STRING_EXT = '_dataString';
    const FIELD_DATA_URI = 'dataUri';
    const FIELD_DATA_URI_EXT = '_dataUri';
    const FIELD_DATA_UUID = 'dataUuid';
    const FIELD_DATA_UUID_EXT = '_dataUuid';
    const FIELD_GROUP = 'group';
    const FIELD_NAME = 'name';
    const FIELD_OPTIONS = 'options';
    const FIELD_REMARKS = 'remarks';
    const FIELD_REMARKS_EXT = '_remarks';
    const FIELD_TEXT = 'text';
    const FIELD_TEXT_EXT = '_text';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

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
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal
     */
    protected $answerDecimal = null;

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
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Single-valued answer to the question.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    protected $answerInteger = null;

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
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary
     */
    protected $dataBase64Binary = null;

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
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal
     */
    protected $dataDecimal = null;

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
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structured answer in the form of a FHIR Resource or datatype.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant
     */
    protected $dataInstant = null;

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
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text of the question as it is shown to the user.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $text = null;

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
        if (isset($data[self::FIELD_ANSWER_INSTANT]) || isset($data[self::FIELD_ANSWER_INSTANT_EXT])) {
            if (isset($data[self::FIELD_ANSWER_INSTANT])) {
                $value = $data[self::FIELD_ANSWER_INSTANT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ANSWER_INSTANT_EXT]) && is_array($data[self::FIELD_ANSWER_INSTANT_EXT])) {
                $ext = $data[self::FIELD_ANSWER_INSTANT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setAnswerInstant($value);
                } else if (is_array($value)) {
                    $this->setAnswerInstant(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setAnswerInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAnswerInstant(new FHIRInstant($ext));
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
            } else if ($data[self::FIELD_CHOICE] instanceof FHIRCoding) {
                $this->addChoice($data[self::FIELD_CHOICE]);
            } else {
                $this->addChoice(new FHIRCoding($data[self::FIELD_CHOICE]));
            }
        }
        if (isset($data[self::FIELD_DATA_ADDRESS])) {
            if ($data[self::FIELD_DATA_ADDRESS] instanceof FHIRAddress) {
                $this->setDataAddress($data[self::FIELD_DATA_ADDRESS]);
            } else {
                $this->setDataAddress(new FHIRAddress($data[self::FIELD_DATA_ADDRESS]));
            }
        }
        if (isset($data[self::FIELD_DATA_ATTACHMENT])) {
            if ($data[self::FIELD_DATA_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setDataAttachment($data[self::FIELD_DATA_ATTACHMENT]);
            } else {
                $this->setDataAttachment(new FHIRAttachment($data[self::FIELD_DATA_ATTACHMENT]));
            }
        }
        if (isset($data[self::FIELD_DATA_BASE_64BINARY]) || isset($data[self::FIELD_DATA_BASE_64BINARY_EXT])) {
            if (isset($data[self::FIELD_DATA_BASE_64BINARY])) {
                $value = $data[self::FIELD_DATA_BASE_64BINARY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATA_BASE_64BINARY_EXT]) && is_array($data[self::FIELD_DATA_BASE_64BINARY_EXT])) {
                $ext = $data[self::FIELD_DATA_BASE_64BINARY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBase64Binary) {
                    $this->setDataBase64Binary($value);
                } else if (is_array($value)) {
                    $this->setDataBase64Binary(new FHIRBase64Binary(array_merge($ext, $value)));
                } else {
                    $this->setDataBase64Binary(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDataBase64Binary(new FHIRBase64Binary($ext));
            }
        }
        if (isset($data[self::FIELD_DATA_BOOLEAN]) || isset($data[self::FIELD_DATA_BOOLEAN_EXT])) {
            if (isset($data[self::FIELD_DATA_BOOLEAN])) {
                $value = $data[self::FIELD_DATA_BOOLEAN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATA_BOOLEAN_EXT]) && is_array($data[self::FIELD_DATA_BOOLEAN_EXT])) {
                $ext = $data[self::FIELD_DATA_BOOLEAN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setDataBoolean($value);
                } else if (is_array($value)) {
                    $this->setDataBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setDataBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDataBoolean(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_DATA_CODE]) || isset($data[self::FIELD_DATA_CODE_EXT])) {
            if (isset($data[self::FIELD_DATA_CODE])) {
                $value = $data[self::FIELD_DATA_CODE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATA_CODE_EXT]) && is_array($data[self::FIELD_DATA_CODE_EXT])) {
                $ext = $data[self::FIELD_DATA_CODE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setDataCode($value);
                } else if (is_array($value)) {
                    $this->setDataCode(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setDataCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDataCode(new FHIRCode($ext));
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
        if (isset($data[self::FIELD_DATA_CONTACT])) {
            if ($data[self::FIELD_DATA_CONTACT] instanceof FHIRContact) {
                $this->setDataContact($data[self::FIELD_DATA_CONTACT]);
            } else {
                $this->setDataContact(new FHIRContact($data[self::FIELD_DATA_CONTACT]));
            }
        }
        if (isset($data[self::FIELD_DATA_DATE]) || isset($data[self::FIELD_DATA_DATE_EXT])) {
            if (isset($data[self::FIELD_DATA_DATE])) {
                $value = $data[self::FIELD_DATA_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATA_DATE_EXT]) && is_array($data[self::FIELD_DATA_DATE_EXT])) {
                $ext = $data[self::FIELD_DATA_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setDataDate($value);
                } else if (is_array($value)) {
                    $this->setDataDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setDataDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDataDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_DATA_DATE_TIME]) || isset($data[self::FIELD_DATA_DATE_TIME_EXT])) {
            if (isset($data[self::FIELD_DATA_DATE_TIME])) {
                $value = $data[self::FIELD_DATA_DATE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATA_DATE_TIME_EXT]) && is_array($data[self::FIELD_DATA_DATE_TIME_EXT])) {
                $ext = $data[self::FIELD_DATA_DATE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDataDateTime($value);
                } else if (is_array($value)) {
                    $this->setDataDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDataDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDataDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_DATA_DECIMAL]) || isset($data[self::FIELD_DATA_DECIMAL_EXT])) {
            if (isset($data[self::FIELD_DATA_DECIMAL])) {
                $value = $data[self::FIELD_DATA_DECIMAL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATA_DECIMAL_EXT]) && is_array($data[self::FIELD_DATA_DECIMAL_EXT])) {
                $ext = $data[self::FIELD_DATA_DECIMAL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setDataDecimal($value);
                } else if (is_array($value)) {
                    $this->setDataDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setDataDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDataDecimal(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_DATA_HUMAN_NAME])) {
            if ($data[self::FIELD_DATA_HUMAN_NAME] instanceof FHIRHumanName) {
                $this->setDataHumanName($data[self::FIELD_DATA_HUMAN_NAME]);
            } else {
                $this->setDataHumanName(new FHIRHumanName($data[self::FIELD_DATA_HUMAN_NAME]));
            }
        }
        if (isset($data[self::FIELD_DATA_ID]) || isset($data[self::FIELD_DATA_ID_EXT])) {
            if (isset($data[self::FIELD_DATA_ID])) {
                $value = $data[self::FIELD_DATA_ID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATA_ID_EXT]) && is_array($data[self::FIELD_DATA_ID_EXT])) {
                $ext = $data[self::FIELD_DATA_ID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setDataId($value);
                } else if (is_array($value)) {
                    $this->setDataId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setDataId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDataId(new FHIRId($ext));
            }
        }
        if (isset($data[self::FIELD_DATA_IDENTIFIER])) {
            if ($data[self::FIELD_DATA_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setDataIdentifier($data[self::FIELD_DATA_IDENTIFIER]);
            } else {
                $this->setDataIdentifier(new FHIRIdentifier($data[self::FIELD_DATA_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_DATA_INSTANT]) || isset($data[self::FIELD_DATA_INSTANT_EXT])) {
            if (isset($data[self::FIELD_DATA_INSTANT])) {
                $value = $data[self::FIELD_DATA_INSTANT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATA_INSTANT_EXT]) && is_array($data[self::FIELD_DATA_INSTANT_EXT])) {
                $ext = $data[self::FIELD_DATA_INSTANT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setDataInstant($value);
                } else if (is_array($value)) {
                    $this->setDataInstant(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setDataInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDataInstant(new FHIRInstant($ext));
            }
        }
        if (isset($data[self::FIELD_DATA_INTEGER]) || isset($data[self::FIELD_DATA_INTEGER_EXT])) {
            if (isset($data[self::FIELD_DATA_INTEGER])) {
                $value = $data[self::FIELD_DATA_INTEGER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATA_INTEGER_EXT]) && is_array($data[self::FIELD_DATA_INTEGER_EXT])) {
                $ext = $data[self::FIELD_DATA_INTEGER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setDataInteger($value);
                } else if (is_array($value)) {
                    $this->setDataInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setDataInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDataInteger(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_DATA_OID]) || isset($data[self::FIELD_DATA_OID_EXT])) {
            if (isset($data[self::FIELD_DATA_OID])) {
                $value = $data[self::FIELD_DATA_OID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATA_OID_EXT]) && is_array($data[self::FIELD_DATA_OID_EXT])) {
                $ext = $data[self::FIELD_DATA_OID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIROid) {
                    $this->setDataOid($value);
                } else if (is_array($value)) {
                    $this->setDataOid(new FHIROid(array_merge($ext, $value)));
                } else {
                    $this->setDataOid(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDataOid(new FHIROid($ext));
            }
        }
        if (isset($data[self::FIELD_DATA_PERIOD])) {
            if ($data[self::FIELD_DATA_PERIOD] instanceof FHIRPeriod) {
                $this->setDataPeriod($data[self::FIELD_DATA_PERIOD]);
            } else {
                $this->setDataPeriod(new FHIRPeriod($data[self::FIELD_DATA_PERIOD]));
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
        if (isset($data[self::FIELD_DATA_SCHEDULE])) {
            if ($data[self::FIELD_DATA_SCHEDULE] instanceof FHIRSchedule) {
                $this->setDataSchedule($data[self::FIELD_DATA_SCHEDULE]);
            } else {
                $this->setDataSchedule(new FHIRSchedule($data[self::FIELD_DATA_SCHEDULE]));
            }
        }
        if (isset($data[self::FIELD_DATA_STRING]) || isset($data[self::FIELD_DATA_STRING_EXT])) {
            if (isset($data[self::FIELD_DATA_STRING])) {
                $value = $data[self::FIELD_DATA_STRING];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATA_STRING_EXT]) && is_array($data[self::FIELD_DATA_STRING_EXT])) {
                $ext = $data[self::FIELD_DATA_STRING_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDataString($value);
                } else if (is_array($value)) {
                    $this->setDataString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDataString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDataString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_DATA_URI]) || isset($data[self::FIELD_DATA_URI_EXT])) {
            if (isset($data[self::FIELD_DATA_URI])) {
                $value = $data[self::FIELD_DATA_URI];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATA_URI_EXT]) && is_array($data[self::FIELD_DATA_URI_EXT])) {
                $ext = $data[self::FIELD_DATA_URI_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setDataUri($value);
                } else if (is_array($value)) {
                    $this->setDataUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setDataUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDataUri(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_DATA_UUID]) || isset($data[self::FIELD_DATA_UUID_EXT])) {
            if (isset($data[self::FIELD_DATA_UUID])) {
                $value = $data[self::FIELD_DATA_UUID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATA_UUID_EXT]) && is_array($data[self::FIELD_DATA_UUID_EXT])) {
                $ext = $data[self::FIELD_DATA_UUID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUuid) {
                    $this->setDataUuid($value);
                } else if (is_array($value)) {
                    $this->setDataUuid(new FHIRUuid(array_merge($ext, $value)));
                } else {
                    $this->setDataUuid(new FHIRUuid([FHIRUuid::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDataUuid(new FHIRUuid($ext));
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
            } else if ($data[self::FIELD_GROUP] instanceof FHIRQuestionnaireGroup) {
                $this->addGroup($data[self::FIELD_GROUP]);
            } else {
                $this->addGroup(new FHIRQuestionnaireGroup($data[self::FIELD_GROUP]));
            }
        }
        if (isset($data[self::FIELD_NAME])) {
            if ($data[self::FIELD_NAME] instanceof FHIRCodeableConcept) {
                $this->setName($data[self::FIELD_NAME]);
            } else {
                $this->setName(new FHIRCodeableConcept($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_OPTIONS])) {
            if ($data[self::FIELD_OPTIONS] instanceof FHIRResourceReference) {
                $this->setOptions($data[self::FIELD_OPTIONS]);
            } else {
                $this->setOptions(new FHIRResourceReference($data[self::FIELD_OPTIONS]));
            }
        }
        if (isset($data[self::FIELD_REMARKS]) || isset($data[self::FIELD_REMARKS_EXT])) {
            if (isset($data[self::FIELD_REMARKS])) {
                $value = $data[self::FIELD_REMARKS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_REMARKS_EXT]) && is_array($data[self::FIELD_REMARKS_EXT])) {
                $ext = $data[self::FIELD_REMARKS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setRemarks($value);
                } else if (is_array($value)) {
                    $this->setRemarks(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setRemarks(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setRemarks(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_TEXT]) || isset($data[self::FIELD_TEXT_EXT])) {
            if (isset($data[self::FIELD_TEXT])) {
                $value = $data[self::FIELD_TEXT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TEXT_EXT]) && is_array($data[self::FIELD_TEXT_EXT])) {
                $ext = $data[self::FIELD_TEXT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setText($value);
                } else if (is_array($value)) {
                    $this->setText(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setText(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setText(new FHIRString($ext));
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
        return "<QuestionnaireQuestion{$xmlns}></QuestionnaireQuestion>";
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
        if (null === $answerInstant) {
            $this->answerInstant = null;
            return $this;
        }
        if ($answerInstant instanceof FHIRInstant) {
            $this->answerInstant = $answerInstant;
            return $this;
        }
        $this->answerInstant = new FHIRInstant($answerInstant);
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
        $this->choice = [];
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
        $this->dataAddress = $dataAddress;
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
        $this->dataAttachment = $dataAttachment;
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
        if (null === $dataBase64Binary) {
            $this->dataBase64Binary = null;
            return $this;
        }
        if ($dataBase64Binary instanceof FHIRBase64Binary) {
            $this->dataBase64Binary = $dataBase64Binary;
            return $this;
        }
        $this->dataBase64Binary = new FHIRBase64Binary($dataBase64Binary);
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
        if (null === $dataBoolean) {
            $this->dataBoolean = null;
            return $this;
        }
        if ($dataBoolean instanceof FHIRBoolean) {
            $this->dataBoolean = $dataBoolean;
            return $this;
        }
        $this->dataBoolean = new FHIRBoolean($dataBoolean);
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
        if (null === $dataCode) {
            $this->dataCode = null;
            return $this;
        }
        if ($dataCode instanceof FHIRCode) {
            $this->dataCode = $dataCode;
            return $this;
        }
        $this->dataCode = new FHIRCode($dataCode);
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
        $this->dataCoding = $dataCoding;
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
        $this->dataContact = $dataContact;
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
        if (null === $dataDate) {
            $this->dataDate = null;
            return $this;
        }
        if ($dataDate instanceof FHIRDate) {
            $this->dataDate = $dataDate;
            return $this;
        }
        $this->dataDate = new FHIRDate($dataDate);
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
        if (null === $dataDateTime) {
            $this->dataDateTime = null;
            return $this;
        }
        if ($dataDateTime instanceof FHIRDateTime) {
            $this->dataDateTime = $dataDateTime;
            return $this;
        }
        $this->dataDateTime = new FHIRDateTime($dataDateTime);
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
        if (null === $dataDecimal) {
            $this->dataDecimal = null;
            return $this;
        }
        if ($dataDecimal instanceof FHIRDecimal) {
            $this->dataDecimal = $dataDecimal;
            return $this;
        }
        $this->dataDecimal = new FHIRDecimal($dataDecimal);
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
        $this->dataHumanName = $dataHumanName;
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
        if (null === $dataId) {
            $this->dataId = null;
            return $this;
        }
        if ($dataId instanceof FHIRId) {
            $this->dataId = $dataId;
            return $this;
        }
        $this->dataId = new FHIRId($dataId);
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
        $this->dataIdentifier = $dataIdentifier;
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
        if (null === $dataInstant) {
            $this->dataInstant = null;
            return $this;
        }
        if ($dataInstant instanceof FHIRInstant) {
            $this->dataInstant = $dataInstant;
            return $this;
        }
        $this->dataInstant = new FHIRInstant($dataInstant);
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
        if (null === $dataInteger) {
            $this->dataInteger = null;
            return $this;
        }
        if ($dataInteger instanceof FHIRInteger) {
            $this->dataInteger = $dataInteger;
            return $this;
        }
        $this->dataInteger = new FHIRInteger($dataInteger);
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
        if (null === $dataOid) {
            $this->dataOid = null;
            return $this;
        }
        if ($dataOid instanceof FHIROid) {
            $this->dataOid = $dataOid;
            return $this;
        }
        $this->dataOid = new FHIROid($dataOid);
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
        $this->dataPeriod = $dataPeriod;
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
        $this->dataRange = $dataRange;
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
        $this->dataSampledData = $dataSampledData;
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
        $this->dataSchedule = $dataSchedule;
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
        if (null === $dataString) {
            $this->dataString = null;
            return $this;
        }
        if ($dataString instanceof FHIRString) {
            $this->dataString = $dataString;
            return $this;
        }
        $this->dataString = new FHIRString($dataString);
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
        if (null === $dataUri) {
            $this->dataUri = null;
            return $this;
        }
        if ($dataUri instanceof FHIRUri) {
            $this->dataUri = $dataUri;
            return $this;
        }
        $this->dataUri = new FHIRUri($dataUri);
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
        if (null === $dataUuid) {
            $this->dataUuid = null;
            return $this;
        }
        if ($dataUuid instanceof FHIRUuid) {
            $this->dataUuid = $dataUuid;
            return $this;
        }
        $this->dataUuid = new FHIRUuid($dataUuid);
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
        $this->group = [];
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
        $this->name = $name;
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
        $this->options = $options;
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
        if (null === $remarks) {
            $this->remarks = null;
            return $this;
        }
        if ($remarks instanceof FHIRString) {
            $this->remarks = $remarks;
            return $this;
        }
        $this->remarks = new FHIRString($remarks);
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
        if (null === $text) {
            $this->text = null;
            return $this;
        }
        if ($text instanceof FHIRString) {
            $this->text = $text;
            return $this;
        }
        $this->text = new FHIRString($text);
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
        if (null !== ($v = $this->getAnswerInstant())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ANSWER_INSTANT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAnswerInteger())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ANSWER_INTEGER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAnswerString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ANSWER_STRING] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getChoice())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CHOICE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDataAddress())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_ADDRESS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataAttachment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_ATTACHMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataBase64Binary())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_BASE_64BINARY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_BOOLEAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_CODE] = $fieldErrs;
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
        if (null !== ($v = $this->getDataContact())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_CONTACT] = $fieldErrs;
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
        if (null !== ($v = $this->getDataDecimal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_DECIMAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataHumanName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_HUMAN_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataInstant())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_INSTANT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataInteger())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_INTEGER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataOid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_OID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_PERIOD] = $fieldErrs;
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
        if (null !== ($v = $this->getDataSchedule())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_SCHEDULE] = $fieldErrs;
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
        if (null !== ($v = $this->getDataUuid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_UUID] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getGroup())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_GROUP, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOptions())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OPTIONS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRemarks())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REMARKS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getText())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEXT] = $fieldErrs;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion
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
                throw new \DomainException(sprintf('FHIRQuestionnaireQuestion::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRQuestionnaireQuestion::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRQuestionnaireQuestion;
        } elseif (!is_object($type) || !($type instanceof FHIRQuestionnaireQuestion)) {
            throw new \RuntimeException(sprintf(
                'FHIRQuestionnaireQuestion::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion or null, %s seen.',
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
        if (isset($children->answerInstant)) {
            $type->setAnswerInstant(FHIRInstant::xmlUnserialize($children->answerInstant));
        }
        if (isset($attributes->answerInstant)) {
            $pt = $type->getAnswerInstant();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->answerInstant);
            } else {
                $type->setAnswerInstant((string)$attributes->answerInstant);
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
        if (isset($children->choice)) {
            foreach($children->choice as $child) {
                $type->addChoice(FHIRCoding::xmlUnserialize($child));
            }
        }
        if (isset($children->dataAddress)) {
            $type->setDataAddress(FHIRAddress::xmlUnserialize($children->dataAddress));
        }
        if (isset($children->dataAttachment)) {
            $type->setDataAttachment(FHIRAttachment::xmlUnserialize($children->dataAttachment));
        }
        if (isset($children->dataBase64Binary)) {
            $type->setDataBase64Binary(FHIRBase64Binary::xmlUnserialize($children->dataBase64Binary));
        }
        if (isset($attributes->dataBase64Binary)) {
            $pt = $type->getDataBase64Binary();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->dataBase64Binary);
            } else {
                $type->setDataBase64Binary((string)$attributes->dataBase64Binary);
            }
        }
        if (isset($children->dataBoolean)) {
            $type->setDataBoolean(FHIRBoolean::xmlUnserialize($children->dataBoolean));
        }
        if (isset($attributes->dataBoolean)) {
            $pt = $type->getDataBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->dataBoolean);
            } else {
                $type->setDataBoolean((string)$attributes->dataBoolean);
            }
        }
        if (isset($children->dataCode)) {
            $type->setDataCode(FHIRCode::xmlUnserialize($children->dataCode));
        }
        if (isset($attributes->dataCode)) {
            $pt = $type->getDataCode();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->dataCode);
            } else {
                $type->setDataCode((string)$attributes->dataCode);
            }
        }
        if (isset($children->dataCodeableConcept)) {
            $type->setDataCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->dataCodeableConcept));
        }
        if (isset($children->dataCoding)) {
            $type->setDataCoding(FHIRCoding::xmlUnserialize($children->dataCoding));
        }
        if (isset($children->dataContact)) {
            $type->setDataContact(FHIRContact::xmlUnserialize($children->dataContact));
        }
        if (isset($children->dataDate)) {
            $type->setDataDate(FHIRDate::xmlUnserialize($children->dataDate));
        }
        if (isset($attributes->dataDate)) {
            $pt = $type->getDataDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->dataDate);
            } else {
                $type->setDataDate((string)$attributes->dataDate);
            }
        }
        if (isset($children->dataDateTime)) {
            $type->setDataDateTime(FHIRDateTime::xmlUnserialize($children->dataDateTime));
        }
        if (isset($attributes->dataDateTime)) {
            $pt = $type->getDataDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->dataDateTime);
            } else {
                $type->setDataDateTime((string)$attributes->dataDateTime);
            }
        }
        if (isset($children->dataDecimal)) {
            $type->setDataDecimal(FHIRDecimal::xmlUnserialize($children->dataDecimal));
        }
        if (isset($attributes->dataDecimal)) {
            $pt = $type->getDataDecimal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->dataDecimal);
            } else {
                $type->setDataDecimal((string)$attributes->dataDecimal);
            }
        }
        if (isset($children->dataHumanName)) {
            $type->setDataHumanName(FHIRHumanName::xmlUnserialize($children->dataHumanName));
        }
        if (isset($children->dataId)) {
            $type->setDataId(FHIRId::xmlUnserialize($children->dataId));
        }
        if (isset($attributes->dataId)) {
            $pt = $type->getDataId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->dataId);
            } else {
                $type->setDataId((string)$attributes->dataId);
            }
        }
        if (isset($children->dataIdentifier)) {
            $type->setDataIdentifier(FHIRIdentifier::xmlUnserialize($children->dataIdentifier));
        }
        if (isset($children->dataInstant)) {
            $type->setDataInstant(FHIRInstant::xmlUnserialize($children->dataInstant));
        }
        if (isset($attributes->dataInstant)) {
            $pt = $type->getDataInstant();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->dataInstant);
            } else {
                $type->setDataInstant((string)$attributes->dataInstant);
            }
        }
        if (isset($children->dataInteger)) {
            $type->setDataInteger(FHIRInteger::xmlUnserialize($children->dataInteger));
        }
        if (isset($attributes->dataInteger)) {
            $pt = $type->getDataInteger();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->dataInteger);
            } else {
                $type->setDataInteger((string)$attributes->dataInteger);
            }
        }
        if (isset($children->dataOid)) {
            $type->setDataOid(FHIROid::xmlUnserialize($children->dataOid));
        }
        if (isset($attributes->dataOid)) {
            $pt = $type->getDataOid();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->dataOid);
            } else {
                $type->setDataOid((string)$attributes->dataOid);
            }
        }
        if (isset($children->dataPeriod)) {
            $type->setDataPeriod(FHIRPeriod::xmlUnserialize($children->dataPeriod));
        }
        if (isset($children->dataQuantity)) {
            $type->setDataQuantity(FHIRQuantity::xmlUnserialize($children->dataQuantity));
        }
        if (isset($children->dataRange)) {
            $type->setDataRange(FHIRRange::xmlUnserialize($children->dataRange));
        }
        if (isset($children->dataRatio)) {
            $type->setDataRatio(FHIRRatio::xmlUnserialize($children->dataRatio));
        }
        if (isset($children->dataResource)) {
            $type->setDataResource(FHIRResourceReference::xmlUnserialize($children->dataResource));
        }
        if (isset($children->dataSampledData)) {
            $type->setDataSampledData(FHIRSampledData::xmlUnserialize($children->dataSampledData));
        }
        if (isset($children->dataSchedule)) {
            $type->setDataSchedule(FHIRSchedule::xmlUnserialize($children->dataSchedule));
        }
        if (isset($children->dataString)) {
            $type->setDataString(FHIRString::xmlUnserialize($children->dataString));
        }
        if (isset($attributes->dataString)) {
            $pt = $type->getDataString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->dataString);
            } else {
                $type->setDataString((string)$attributes->dataString);
            }
        }
        if (isset($children->dataUri)) {
            $type->setDataUri(FHIRUri::xmlUnserialize($children->dataUri));
        }
        if (isset($attributes->dataUri)) {
            $pt = $type->getDataUri();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->dataUri);
            } else {
                $type->setDataUri((string)$attributes->dataUri);
            }
        }
        if (isset($children->dataUuid)) {
            $type->setDataUuid(FHIRUuid::xmlUnserialize($children->dataUuid));
        }
        if (isset($attributes->dataUuid)) {
            $pt = $type->getDataUuid();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->dataUuid);
            } else {
                $type->setDataUuid((string)$attributes->dataUuid);
            }
        }
        if (isset($children->group)) {
            foreach($children->group as $child) {
                $type->addGroup(FHIRQuestionnaireGroup::xmlUnserialize($child));
            }
        }
        if (isset($children->name)) {
            $type->setName(FHIRCodeableConcept::xmlUnserialize($children->name));
        }
        if (isset($children->options)) {
            $type->setOptions(FHIRResourceReference::xmlUnserialize($children->options));
        }
        if (isset($children->remarks)) {
            $type->setRemarks(FHIRString::xmlUnserialize($children->remarks));
        }
        if (isset($attributes->remarks)) {
            $pt = $type->getRemarks();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->remarks);
            } else {
                $type->setRemarks((string)$attributes->remarks);
            }
        }
        if (isset($children->text)) {
            $type->setText(FHIRString::xmlUnserialize($children->text));
        }
        if (isset($attributes->text)) {
            $pt = $type->getText();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->text);
            } else {
                $type->setText((string)$attributes->text);
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
        if (null !== ($v = $this->getAnswerBoolean())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER_BOOLEAN, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getAnswerInstant())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER_INSTANT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAnswerInteger())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER_INTEGER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAnswerString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER_STRING, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getChoice())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CHOICE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDataAddress())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_ADDRESS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDataAttachment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_ATTACHMENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDataBase64Binary())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_BASE_64BINARY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDataBoolean())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_BOOLEAN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDataCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_CODE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDataCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDataCoding())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_CODING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDataContact())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_CONTACT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDataDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDataDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDataDecimal())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_DECIMAL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDataHumanName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_HUMAN_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDataId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDataIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDataInstant())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_INSTANT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDataInteger())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_INTEGER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDataOid())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_OID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDataPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDataQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDataRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_RANGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDataRatio())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_RATIO, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDataResource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_RESOURCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDataSampledData())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_SAMPLED_DATA, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDataSchedule())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_SCHEDULE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDataString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_STRING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDataUri())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_URI, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDataUuid())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_UUID, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getGroup())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_GROUP, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOptions())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OPTIONS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRemarks())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REMARKS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getText())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TEXT, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_ANSWER_BOOLEAN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_ANSWER_BOOLEAN_EXT] = $enc;
            }
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
        if (null !== ($v = $this->getAnswerInstant())) {
            $a[self::FIELD_ANSWER_INSTANT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInstant::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInstant::FIELD_VALUE]);
                $a[self::FIELD_ANSWER_INSTANT_EXT] = $enc;
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
        if (null !== ($v = $this->getAnswerString())) {
            $a[self::FIELD_ANSWER_STRING] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_ANSWER_STRING_EXT] = $enc;
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
        if (null !== ($v = $this->getDataAddress())) {
            $a[self::FIELD_DATA_ADDRESS] = $v;
        }
        if (null !== ($v = $this->getDataAttachment())) {
            $a[self::FIELD_DATA_ATTACHMENT] = $v;
        }
        if (null !== ($v = $this->getDataBase64Binary())) {
            $a[self::FIELD_DATA_BASE_64BINARY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBase64Binary::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBase64Binary::FIELD_VALUE]);
                $a[self::FIELD_DATA_BASE_64BINARY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDataBoolean())) {
            $a[self::FIELD_DATA_BOOLEAN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_DATA_BOOLEAN_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDataCode())) {
            $a[self::FIELD_DATA_CODE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCode::FIELD_VALUE]);
                $a[self::FIELD_DATA_CODE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDataCodeableConcept())) {
            $a[self::FIELD_DATA_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getDataCoding())) {
            $a[self::FIELD_DATA_CODING] = $v;
        }
        if (null !== ($v = $this->getDataContact())) {
            $a[self::FIELD_DATA_CONTACT] = $v;
        }
        if (null !== ($v = $this->getDataDate())) {
            $a[self::FIELD_DATA_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDate::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDate::FIELD_VALUE]);
                $a[self::FIELD_DATA_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDataDateTime())) {
            $a[self::FIELD_DATA_DATE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_DATA_DATE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDataDecimal())) {
            $a[self::FIELD_DATA_DECIMAL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_DATA_DECIMAL_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDataHumanName())) {
            $a[self::FIELD_DATA_HUMAN_NAME] = $v;
        }
        if (null !== ($v = $this->getDataId())) {
            $a[self::FIELD_DATA_ID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRId::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRId::FIELD_VALUE]);
                $a[self::FIELD_DATA_ID_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDataIdentifier())) {
            $a[self::FIELD_DATA_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getDataInstant())) {
            $a[self::FIELD_DATA_INSTANT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInstant::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInstant::FIELD_VALUE]);
                $a[self::FIELD_DATA_INSTANT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDataInteger())) {
            $a[self::FIELD_DATA_INTEGER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_DATA_INTEGER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDataOid())) {
            $a[self::FIELD_DATA_OID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIROid::FIELD_VALUE, $enc)))) {
                unset($enc[FHIROid::FIELD_VALUE]);
                $a[self::FIELD_DATA_OID_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDataPeriod())) {
            $a[self::FIELD_DATA_PERIOD] = $v;
        }
        if (null !== ($v = $this->getDataQuantity())) {
            $a[self::FIELD_DATA_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getDataRange())) {
            $a[self::FIELD_DATA_RANGE] = $v;
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
        if (null !== ($v = $this->getDataSchedule())) {
            $a[self::FIELD_DATA_SCHEDULE] = $v;
        }
        if (null !== ($v = $this->getDataString())) {
            $a[self::FIELD_DATA_STRING] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_DATA_STRING_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDataUri())) {
            $a[self::FIELD_DATA_URI] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_DATA_URI_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDataUuid())) {
            $a[self::FIELD_DATA_UUID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUuid::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUuid::FIELD_VALUE]);
                $a[self::FIELD_DATA_UUID_EXT] = $enc;
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
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = $v;
        }
        if (null !== ($v = $this->getOptions())) {
            $a[self::FIELD_OPTIONS] = $v;
        }
        if (null !== ($v = $this->getRemarks())) {
            $a[self::FIELD_REMARKS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_REMARKS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getText())) {
            $a[self::FIELD_TEXT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_TEXT_EXT] = $enc;
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