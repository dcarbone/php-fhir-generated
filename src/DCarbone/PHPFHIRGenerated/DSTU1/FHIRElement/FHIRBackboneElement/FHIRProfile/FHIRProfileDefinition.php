<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:03+0000
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
 * A Resource Profile - a statement of use of one or more FHIR Resources. It may
 * include constraints on Resources and Data Types, Terminology Binding Statements
 * and Extension Definitions.
 *
 * Class FHIRProfileDefinition
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile
 */
class FHIRProfileDefinition extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION;

    const FIELD_BINDING = 'binding';
    const FIELD_COMMENTS = 'comments';
    const FIELD_COMMENTS_EXT = '_comments';
    const FIELD_CONDITION = 'condition';
    const FIELD_CONDITION_EXT = '_condition';
    const FIELD_CONSTRAINT = 'constraint';
    const FIELD_EXAMPLE_ADDRESS = 'exampleAddress';
    const FIELD_EXAMPLE_ATTACHMENT = 'exampleAttachment';
    const FIELD_EXAMPLE_BASE_64BINARY = 'exampleBase64Binary';
    const FIELD_EXAMPLE_BASE_64BINARY_EXT = '_exampleBase64Binary';
    const FIELD_EXAMPLE_BOOLEAN = 'exampleBoolean';
    const FIELD_EXAMPLE_BOOLEAN_EXT = '_exampleBoolean';
    const FIELD_EXAMPLE_CODE = 'exampleCode';
    const FIELD_EXAMPLE_CODE_EXT = '_exampleCode';
    const FIELD_EXAMPLE_CODEABLE_CONCEPT = 'exampleCodeableConcept';
    const FIELD_EXAMPLE_CODING = 'exampleCoding';
    const FIELD_EXAMPLE_CONTACT = 'exampleContact';
    const FIELD_EXAMPLE_DATE = 'exampleDate';
    const FIELD_EXAMPLE_DATE_EXT = '_exampleDate';
    const FIELD_EXAMPLE_DATE_TIME = 'exampleDateTime';
    const FIELD_EXAMPLE_DATE_TIME_EXT = '_exampleDateTime';
    const FIELD_EXAMPLE_DECIMAL = 'exampleDecimal';
    const FIELD_EXAMPLE_DECIMAL_EXT = '_exampleDecimal';
    const FIELD_EXAMPLE_HUMAN_NAME = 'exampleHumanName';
    const FIELD_EXAMPLE_ID = 'exampleId';
    const FIELD_EXAMPLE_ID_EXT = '_exampleId';
    const FIELD_EXAMPLE_IDENTIFIER = 'exampleIdentifier';
    const FIELD_EXAMPLE_INSTANT = 'exampleInstant';
    const FIELD_EXAMPLE_INSTANT_EXT = '_exampleInstant';
    const FIELD_EXAMPLE_INTEGER = 'exampleInteger';
    const FIELD_EXAMPLE_INTEGER_EXT = '_exampleInteger';
    const FIELD_EXAMPLE_OID = 'exampleOid';
    const FIELD_EXAMPLE_OID_EXT = '_exampleOid';
    const FIELD_EXAMPLE_PERIOD = 'examplePeriod';
    const FIELD_EXAMPLE_QUANTITY = 'exampleQuantity';
    const FIELD_EXAMPLE_RANGE = 'exampleRange';
    const FIELD_EXAMPLE_RATIO = 'exampleRatio';
    const FIELD_EXAMPLE_RESOURCE = 'exampleResource';
    const FIELD_EXAMPLE_SAMPLED_DATA = 'exampleSampledData';
    const FIELD_EXAMPLE_SCHEDULE = 'exampleSchedule';
    const FIELD_EXAMPLE_STRING = 'exampleString';
    const FIELD_EXAMPLE_STRING_EXT = '_exampleString';
    const FIELD_EXAMPLE_URI = 'exampleUri';
    const FIELD_EXAMPLE_URI_EXT = '_exampleUri';
    const FIELD_EXAMPLE_UUID = 'exampleUuid';
    const FIELD_EXAMPLE_UUID_EXT = '_exampleUuid';
    const FIELD_FORMAL = 'formal';
    const FIELD_FORMAL_EXT = '_formal';
    const FIELD_IS_MODIFIER = 'isModifier';
    const FIELD_IS_MODIFIER_EXT = '_isModifier';
    const FIELD_MAPPING = 'mapping';
    const FIELD_MAX = 'max';
    const FIELD_MAX_EXT = '_max';
    const FIELD_MAX_LENGTH = 'maxLength';
    const FIELD_MAX_LENGTH_EXT = '_maxLength';
    const FIELD_MIN = 'min';
    const FIELD_MIN_EXT = '_min';
    const FIELD_MUST_SUPPORT = 'mustSupport';
    const FIELD_MUST_SUPPORT_EXT = '_mustSupport';
    const FIELD_NAME_REFERENCE = 'nameReference';
    const FIELD_NAME_REFERENCE_EXT = '_nameReference';
    const FIELD_REQUIREMENTS = 'requirements';
    const FIELD_REQUIREMENTS_EXT = '_requirements';
    const FIELD_SHORT = 'short';
    const FIELD_SHORT_EXT = '_short';
    const FIELD_SYNONYM = 'synonym';
    const FIELD_SYNONYM_EXT = '_synonym';
    const FIELD_TYPE = 'type';
    const FIELD_VALUE_ADDRESS = 'valueAddress';
    const FIELD_VALUE_ATTACHMENT = 'valueAttachment';
    const FIELD_VALUE_BASE_64BINARY = 'valueBase64Binary';
    const FIELD_VALUE_BASE_64BINARY_EXT = '_valueBase64Binary';
    const FIELD_VALUE_BOOLEAN = 'valueBoolean';
    const FIELD_VALUE_BOOLEAN_EXT = '_valueBoolean';
    const FIELD_VALUE_CODE = 'valueCode';
    const FIELD_VALUE_CODE_EXT = '_valueCode';
    const FIELD_VALUE_CODEABLE_CONCEPT = 'valueCodeableConcept';
    const FIELD_VALUE_CODING = 'valueCoding';
    const FIELD_VALUE_CONTACT = 'valueContact';
    const FIELD_VALUE_DATE = 'valueDate';
    const FIELD_VALUE_DATE_EXT = '_valueDate';
    const FIELD_VALUE_DATE_TIME = 'valueDateTime';
    const FIELD_VALUE_DATE_TIME_EXT = '_valueDateTime';
    const FIELD_VALUE_DECIMAL = 'valueDecimal';
    const FIELD_VALUE_DECIMAL_EXT = '_valueDecimal';
    const FIELD_VALUE_HUMAN_NAME = 'valueHumanName';
    const FIELD_VALUE_ID = 'valueId';
    const FIELD_VALUE_ID_EXT = '_valueId';
    const FIELD_VALUE_IDENTIFIER = 'valueIdentifier';
    const FIELD_VALUE_INSTANT = 'valueInstant';
    const FIELD_VALUE_INSTANT_EXT = '_valueInstant';
    const FIELD_VALUE_INTEGER = 'valueInteger';
    const FIELD_VALUE_INTEGER_EXT = '_valueInteger';
    const FIELD_VALUE_OID = 'valueOid';
    const FIELD_VALUE_OID_EXT = '_valueOid';
    const FIELD_VALUE_PERIOD = 'valuePeriod';
    const FIELD_VALUE_QUANTITY = 'valueQuantity';
    const FIELD_VALUE_RANGE = 'valueRange';
    const FIELD_VALUE_RATIO = 'valueRatio';
    const FIELD_VALUE_RESOURCE = 'valueResource';
    const FIELD_VALUE_SAMPLED_DATA = 'valueSampledData';
    const FIELD_VALUE_SCHEDULE = 'valueSchedule';
    const FIELD_VALUE_STRING = 'valueString';
    const FIELD_VALUE_STRING_EXT = '_valueString';
    const FIELD_VALUE_URI = 'valueUri';
    const FIELD_VALUE_URI_EXT = '_valueUri';
    const FIELD_VALUE_UUID = 'valueUuid';
    const FIELD_VALUE_UUID_EXT = '_valueUuid';

    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileBinding
     */
    private $binding = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Comments about the use of the element, including notes about how to use the data
     * properly, exceptions to proper use, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $comments = null;
    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A reference to an invariant that may make additional statements about the
     * cardinality or value in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId[]
     */
    private $condition = [];
    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * Formal constraints such as co-occurrence and other constraints that can be
     * computationally evaluated within the context of the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileConstraint[]
     */
    private $constraint = [];
    /**
     * There is a variety of postal address formats defined around the world. This
     * format defines a superset that is the basis for all addresses around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress
     */
    private $exampleAddress = null;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment
     */
    private $exampleAttachment = null;
    /**
     * A stream of bytes
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary
     */
    private $exampleBase64Binary = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    private $exampleBoolean = null;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    private $exampleCode = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    private $exampleCodeableConcept = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding
     */
    private $exampleCoding = null;
    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRContact
     */
    private $exampleContact = null;
    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate
     */
    private $exampleDate = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    private $exampleDateTime = null;
    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal
     */
    private $exampleDecimal = null;
    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRHumanName
     */
    private $exampleHumanName = null;
    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId
     */
    private $exampleId = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier
     */
    private $exampleIdentifier = null;
    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant
     */
    private $exampleInstant = null;
    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    private $exampleInteger = null;
    /**
     * An oid represented as a URI
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROid
     */
    private $exampleOid = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    private $examplePeriod = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity
     */
    private $exampleQuantity = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRange
     */
    private $exampleRange = null;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRatio
     */
    private $exampleRatio = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    private $exampleResource = null;
    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSampledData
     */
    private $exampleSampledData = null;
    /**
     * Specifies an event that may occur multiple times. Schedules are used for to
     * reord when things are expected or requested to occur.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule
     */
    private $exampleSchedule = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $exampleString = null;
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    private $exampleUri = null;
    /**
     * A UUID, represented as a URI
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUuid
     */
    private $exampleUuid = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The definition SHALL be consistent with the base definition, but convey the
     * meaning of the element in the particular context of use of the resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $formal = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If true, the value of this element affects the interpretation of the element or
     * resource that contains it, and the value of the element cannot be ignored.
     * Typically, this is used for status, negation and qualification codes. The effect
     * of this is that the element cannot be ignored by systems: they SHALL either
     * recognize the element and process it, and/or a pre-determination has been made
     * that it is not relevant to their particular system.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    private $isModifier = null;
    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * Identifies a concept from an external specification that roughly corresponds to
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileMapping1[]
     */
    private $mapping = [];
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $max = null;
    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the shortest length that SHALL be supported by conformant instances
     * without truncation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    private $maxLength = null;
    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The minimum number of times this element SHALL appear in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    private $min = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If true, conformant resource authors SHALL be capable of providing a value for
     * the element and resource consumers SHALL be capable of extracting and doing
     * something useful with the data element. If false, the element may be ignored and
     * not supported.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    private $mustSupport = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies the name of a slice defined elsewhere in the profile whose
     * constraints should be applied to the current element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $nameReference = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Explains why this element is needed and why it's been constrained as it has.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $requirements = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A concise definition that is shown in the generated XML format that summarizes
     * profiles (used throughout the specification).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $short = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies additional names by which this element might also be known.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString[]
     */
    private $synonym = [];
    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * The data type or resource that the value of this element is permitted to be.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileType[]
     */
    private $type = [];
    /**
     * There is a variety of postal address formats defined around the world. This
     * format defines a superset that is the basis for all addresses around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress
     */
    private $valueAddress = null;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment
     */
    private $valueAttachment = null;
    /**
     * A stream of bytes
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary
     */
    private $valueBase64Binary = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    private $valueBoolean = null;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    private $valueCode = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    private $valueCodeableConcept = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding
     */
    private $valueCoding = null;
    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRContact
     */
    private $valueContact = null;
    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate
     */
    private $valueDate = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    private $valueDateTime = null;
    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal
     */
    private $valueDecimal = null;
    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRHumanName
     */
    private $valueHumanName = null;
    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId
     */
    private $valueId = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier
     */
    private $valueIdentifier = null;
    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant
     */
    private $valueInstant = null;
    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    private $valueInteger = null;
    /**
     * An oid represented as a URI
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROid
     */
    private $valueOid = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    private $valuePeriod = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity
     */
    private $valueQuantity = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRange
     */
    private $valueRange = null;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRatio
     */
    private $valueRatio = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    private $valueResource = null;
    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSampledData
     */
    private $valueSampledData = null;
    /**
     * Specifies an event that may occur multiple times. Schedules are used for to
     * reord when things are expected or requested to occur.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule
     */
    private $valueSchedule = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $valueString = null;
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    private $valueUri = null;
    /**
     * A UUID, represented as a URI
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUuid
     */
    private $valueUuid = null;

    /**
     * FHIRProfileDefinition Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProfileDefinition::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_BINDING])) {
            if ($data[self::FIELD_BINDING] instanceof FHIRProfileBinding) {
                $this->setBinding($data[self::FIELD_BINDING]);
            } else {
                $this->setBinding(new FHIRProfileBinding($data[self::FIELD_BINDING]));
            }
        }
        if (isset($data[self::FIELD_COMMENTS])) {
            $ext = (isset($data[self::FIELD_COMMENTS_EXT]) && is_array($data[self::FIELD_COMMENTS_EXT]))
                ? $data[self::FIELD_COMMENTS_EXT]
                : null;
            if ($data[self::FIELD_COMMENTS] instanceof FHIRString) {
                $this->setComments($data[self::FIELD_COMMENTS]);
            } elseif ($ext && is_scalar($data[self::FIELD_COMMENTS])) {
                $this->setComments(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_COMMENTS]] + $ext));
            } else {
                $this->setComments(new FHIRString($data[self::FIELD_COMMENTS]));
            }
        }
        if (isset($data[self::FIELD_CONDITION])) {
            $ext = (isset($data[self::FIELD_CONDITION_EXT]) && is_array($data[self::FIELD_CONDITION_EXT]))
                ? $data[self::FIELD_CONDITION_EXT]
                : null;
            if (is_array($data[self::FIELD_CONDITION])) {
                foreach($data[self::FIELD_CONDITION] as $i => $v) {
                    if ($v instanceof FHIRId) {
                        $this->addCondition($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addCondition(new FHIRId([FHIRId::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addCondition(new FHIRId($v));
                    }
                }
            } elseif ($data[self::FIELD_CONDITION] instanceof FHIRId) {
                $this->addCondition($data[self::FIELD_CONDITION]);
            } elseif ($ext && is_scalar($data[self::FIELD_CONDITION])) {
                $this->addCondition(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_CONDITION]] + $ext));
            } else {
                $this->addCondition(new FHIRId($data[self::FIELD_CONDITION]));
            }
        }
        if (isset($data[self::FIELD_CONSTRAINT])) {
            if (is_array($data[self::FIELD_CONSTRAINT])) {
                foreach($data[self::FIELD_CONSTRAINT] as $v) {
                    if ($v instanceof FHIRProfileConstraint) {
                        $this->addConstraint($v);
                    } else {
                        $this->addConstraint(new FHIRProfileConstraint($v));
                    }
                }
            } else if ($data[self::FIELD_CONSTRAINT] instanceof FHIRProfileConstraint) {
                $this->addConstraint($data[self::FIELD_CONSTRAINT]);
            } else {
                $this->addConstraint(new FHIRProfileConstraint($data[self::FIELD_CONSTRAINT]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_ADDRESS])) {
            if ($data[self::FIELD_EXAMPLE_ADDRESS] instanceof FHIRAddress) {
                $this->setExampleAddress($data[self::FIELD_EXAMPLE_ADDRESS]);
            } else {
                $this->setExampleAddress(new FHIRAddress($data[self::FIELD_EXAMPLE_ADDRESS]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_ATTACHMENT])) {
            if ($data[self::FIELD_EXAMPLE_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setExampleAttachment($data[self::FIELD_EXAMPLE_ATTACHMENT]);
            } else {
                $this->setExampleAttachment(new FHIRAttachment($data[self::FIELD_EXAMPLE_ATTACHMENT]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_BASE_64BINARY])) {
            $ext = (isset($data[self::FIELD_EXAMPLE_BASE_64BINARY_EXT]) && is_array($data[self::FIELD_EXAMPLE_BASE_64BINARY_EXT]))
                ? $data[self::FIELD_EXAMPLE_BASE_64BINARY_EXT]
                : null;
            if ($data[self::FIELD_EXAMPLE_BASE_64BINARY] instanceof FHIRBase64Binary) {
                $this->setExampleBase64Binary($data[self::FIELD_EXAMPLE_BASE_64BINARY]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXAMPLE_BASE_64BINARY])) {
                $this->setExampleBase64Binary(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $data[self::FIELD_EXAMPLE_BASE_64BINARY]] + $ext));
            } else {
                $this->setExampleBase64Binary(new FHIRBase64Binary($data[self::FIELD_EXAMPLE_BASE_64BINARY]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_BOOLEAN])) {
            $ext = (isset($data[self::FIELD_EXAMPLE_BOOLEAN_EXT]) && is_array($data[self::FIELD_EXAMPLE_BOOLEAN_EXT]))
                ? $data[self::FIELD_EXAMPLE_BOOLEAN_EXT]
                : null;
            if ($data[self::FIELD_EXAMPLE_BOOLEAN] instanceof FHIRBoolean) {
                $this->setExampleBoolean($data[self::FIELD_EXAMPLE_BOOLEAN]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXAMPLE_BOOLEAN])) {
                $this->setExampleBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_EXAMPLE_BOOLEAN]] + $ext));
            } else {
                $this->setExampleBoolean(new FHIRBoolean($data[self::FIELD_EXAMPLE_BOOLEAN]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_CODE])) {
            $ext = (isset($data[self::FIELD_EXAMPLE_CODE_EXT]) && is_array($data[self::FIELD_EXAMPLE_CODE_EXT]))
                ? $data[self::FIELD_EXAMPLE_CODE_EXT]
                : null;
            if ($data[self::FIELD_EXAMPLE_CODE] instanceof FHIRCode) {
                $this->setExampleCode($data[self::FIELD_EXAMPLE_CODE]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXAMPLE_CODE])) {
                $this->setExampleCode(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_EXAMPLE_CODE]] + $ext));
            } else {
                $this->setExampleCode(new FHIRCode($data[self::FIELD_EXAMPLE_CODE]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_EXAMPLE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setExampleCodeableConcept($data[self::FIELD_EXAMPLE_CODEABLE_CONCEPT]);
            } else {
                $this->setExampleCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_EXAMPLE_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_CODING])) {
            if ($data[self::FIELD_EXAMPLE_CODING] instanceof FHIRCoding) {
                $this->setExampleCoding($data[self::FIELD_EXAMPLE_CODING]);
            } else {
                $this->setExampleCoding(new FHIRCoding($data[self::FIELD_EXAMPLE_CODING]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_CONTACT])) {
            if ($data[self::FIELD_EXAMPLE_CONTACT] instanceof FHIRContact) {
                $this->setExampleContact($data[self::FIELD_EXAMPLE_CONTACT]);
            } else {
                $this->setExampleContact(new FHIRContact($data[self::FIELD_EXAMPLE_CONTACT]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_DATE])) {
            $ext = (isset($data[self::FIELD_EXAMPLE_DATE_EXT]) && is_array($data[self::FIELD_EXAMPLE_DATE_EXT]))
                ? $data[self::FIELD_EXAMPLE_DATE_EXT]
                : null;
            if ($data[self::FIELD_EXAMPLE_DATE] instanceof FHIRDate) {
                $this->setExampleDate($data[self::FIELD_EXAMPLE_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXAMPLE_DATE])) {
                $this->setExampleDate(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_EXAMPLE_DATE]] + $ext));
            } else {
                $this->setExampleDate(new FHIRDate($data[self::FIELD_EXAMPLE_DATE]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_EXAMPLE_DATE_TIME_EXT]) && is_array($data[self::FIELD_EXAMPLE_DATE_TIME_EXT]))
                ? $data[self::FIELD_EXAMPLE_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_EXAMPLE_DATE_TIME] instanceof FHIRDateTime) {
                $this->setExampleDateTime($data[self::FIELD_EXAMPLE_DATE_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXAMPLE_DATE_TIME])) {
                $this->setExampleDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_EXAMPLE_DATE_TIME]] + $ext));
            } else {
                $this->setExampleDateTime(new FHIRDateTime($data[self::FIELD_EXAMPLE_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_DECIMAL])) {
            $ext = (isset($data[self::FIELD_EXAMPLE_DECIMAL_EXT]) && is_array($data[self::FIELD_EXAMPLE_DECIMAL_EXT]))
                ? $data[self::FIELD_EXAMPLE_DECIMAL_EXT]
                : null;
            if ($data[self::FIELD_EXAMPLE_DECIMAL] instanceof FHIRDecimal) {
                $this->setExampleDecimal($data[self::FIELD_EXAMPLE_DECIMAL]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXAMPLE_DECIMAL])) {
                $this->setExampleDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_EXAMPLE_DECIMAL]] + $ext));
            } else {
                $this->setExampleDecimal(new FHIRDecimal($data[self::FIELD_EXAMPLE_DECIMAL]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_HUMAN_NAME])) {
            if ($data[self::FIELD_EXAMPLE_HUMAN_NAME] instanceof FHIRHumanName) {
                $this->setExampleHumanName($data[self::FIELD_EXAMPLE_HUMAN_NAME]);
            } else {
                $this->setExampleHumanName(new FHIRHumanName($data[self::FIELD_EXAMPLE_HUMAN_NAME]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_ID])) {
            $ext = (isset($data[self::FIELD_EXAMPLE_ID_EXT]) && is_array($data[self::FIELD_EXAMPLE_ID_EXT]))
                ? $data[self::FIELD_EXAMPLE_ID_EXT]
                : null;
            if ($data[self::FIELD_EXAMPLE_ID] instanceof FHIRId) {
                $this->setExampleId($data[self::FIELD_EXAMPLE_ID]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXAMPLE_ID])) {
                $this->setExampleId(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_EXAMPLE_ID]] + $ext));
            } else {
                $this->setExampleId(new FHIRId($data[self::FIELD_EXAMPLE_ID]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_IDENTIFIER])) {
            if ($data[self::FIELD_EXAMPLE_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setExampleIdentifier($data[self::FIELD_EXAMPLE_IDENTIFIER]);
            } else {
                $this->setExampleIdentifier(new FHIRIdentifier($data[self::FIELD_EXAMPLE_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_INSTANT])) {
            $ext = (isset($data[self::FIELD_EXAMPLE_INSTANT_EXT]) && is_array($data[self::FIELD_EXAMPLE_INSTANT_EXT]))
                ? $data[self::FIELD_EXAMPLE_INSTANT_EXT]
                : null;
            if ($data[self::FIELD_EXAMPLE_INSTANT] instanceof FHIRInstant) {
                $this->setExampleInstant($data[self::FIELD_EXAMPLE_INSTANT]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXAMPLE_INSTANT])) {
                $this->setExampleInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $data[self::FIELD_EXAMPLE_INSTANT]] + $ext));
            } else {
                $this->setExampleInstant(new FHIRInstant($data[self::FIELD_EXAMPLE_INSTANT]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_INTEGER])) {
            $ext = (isset($data[self::FIELD_EXAMPLE_INTEGER_EXT]) && is_array($data[self::FIELD_EXAMPLE_INTEGER_EXT]))
                ? $data[self::FIELD_EXAMPLE_INTEGER_EXT]
                : null;
            if ($data[self::FIELD_EXAMPLE_INTEGER] instanceof FHIRInteger) {
                $this->setExampleInteger($data[self::FIELD_EXAMPLE_INTEGER]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXAMPLE_INTEGER])) {
                $this->setExampleInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_EXAMPLE_INTEGER]] + $ext));
            } else {
                $this->setExampleInteger(new FHIRInteger($data[self::FIELD_EXAMPLE_INTEGER]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_OID])) {
            $ext = (isset($data[self::FIELD_EXAMPLE_OID_EXT]) && is_array($data[self::FIELD_EXAMPLE_OID_EXT]))
                ? $data[self::FIELD_EXAMPLE_OID_EXT]
                : null;
            if ($data[self::FIELD_EXAMPLE_OID] instanceof FHIROid) {
                $this->setExampleOid($data[self::FIELD_EXAMPLE_OID]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXAMPLE_OID])) {
                $this->setExampleOid(new FHIROid([FHIROid::FIELD_VALUE => $data[self::FIELD_EXAMPLE_OID]] + $ext));
            } else {
                $this->setExampleOid(new FHIROid($data[self::FIELD_EXAMPLE_OID]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_PERIOD])) {
            if ($data[self::FIELD_EXAMPLE_PERIOD] instanceof FHIRPeriod) {
                $this->setExamplePeriod($data[self::FIELD_EXAMPLE_PERIOD]);
            } else {
                $this->setExamplePeriod(new FHIRPeriod($data[self::FIELD_EXAMPLE_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_QUANTITY])) {
            if ($data[self::FIELD_EXAMPLE_QUANTITY] instanceof FHIRQuantity) {
                $this->setExampleQuantity($data[self::FIELD_EXAMPLE_QUANTITY]);
            } else {
                $this->setExampleQuantity(new FHIRQuantity($data[self::FIELD_EXAMPLE_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_RANGE])) {
            if ($data[self::FIELD_EXAMPLE_RANGE] instanceof FHIRRange) {
                $this->setExampleRange($data[self::FIELD_EXAMPLE_RANGE]);
            } else {
                $this->setExampleRange(new FHIRRange($data[self::FIELD_EXAMPLE_RANGE]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_RATIO])) {
            if ($data[self::FIELD_EXAMPLE_RATIO] instanceof FHIRRatio) {
                $this->setExampleRatio($data[self::FIELD_EXAMPLE_RATIO]);
            } else {
                $this->setExampleRatio(new FHIRRatio($data[self::FIELD_EXAMPLE_RATIO]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_RESOURCE])) {
            if ($data[self::FIELD_EXAMPLE_RESOURCE] instanceof FHIRResourceReference) {
                $this->setExampleResource($data[self::FIELD_EXAMPLE_RESOURCE]);
            } else {
                $this->setExampleResource(new FHIRResourceReference($data[self::FIELD_EXAMPLE_RESOURCE]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_SAMPLED_DATA])) {
            if ($data[self::FIELD_EXAMPLE_SAMPLED_DATA] instanceof FHIRSampledData) {
                $this->setExampleSampledData($data[self::FIELD_EXAMPLE_SAMPLED_DATA]);
            } else {
                $this->setExampleSampledData(new FHIRSampledData($data[self::FIELD_EXAMPLE_SAMPLED_DATA]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_SCHEDULE])) {
            if ($data[self::FIELD_EXAMPLE_SCHEDULE] instanceof FHIRSchedule) {
                $this->setExampleSchedule($data[self::FIELD_EXAMPLE_SCHEDULE]);
            } else {
                $this->setExampleSchedule(new FHIRSchedule($data[self::FIELD_EXAMPLE_SCHEDULE]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_STRING])) {
            $ext = (isset($data[self::FIELD_EXAMPLE_STRING_EXT]) && is_array($data[self::FIELD_EXAMPLE_STRING_EXT]))
                ? $data[self::FIELD_EXAMPLE_STRING_EXT]
                : null;
            if ($data[self::FIELD_EXAMPLE_STRING] instanceof FHIRString) {
                $this->setExampleString($data[self::FIELD_EXAMPLE_STRING]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXAMPLE_STRING])) {
                $this->setExampleString(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_EXAMPLE_STRING]] + $ext));
            } else {
                $this->setExampleString(new FHIRString($data[self::FIELD_EXAMPLE_STRING]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_URI])) {
            $ext = (isset($data[self::FIELD_EXAMPLE_URI_EXT]) && is_array($data[self::FIELD_EXAMPLE_URI_EXT]))
                ? $data[self::FIELD_EXAMPLE_URI_EXT]
                : null;
            if ($data[self::FIELD_EXAMPLE_URI] instanceof FHIRUri) {
                $this->setExampleUri($data[self::FIELD_EXAMPLE_URI]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXAMPLE_URI])) {
                $this->setExampleUri(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_EXAMPLE_URI]] + $ext));
            } else {
                $this->setExampleUri(new FHIRUri($data[self::FIELD_EXAMPLE_URI]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_UUID])) {
            $ext = (isset($data[self::FIELD_EXAMPLE_UUID_EXT]) && is_array($data[self::FIELD_EXAMPLE_UUID_EXT]))
                ? $data[self::FIELD_EXAMPLE_UUID_EXT]
                : null;
            if ($data[self::FIELD_EXAMPLE_UUID] instanceof FHIRUuid) {
                $this->setExampleUuid($data[self::FIELD_EXAMPLE_UUID]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXAMPLE_UUID])) {
                $this->setExampleUuid(new FHIRUuid([FHIRUuid::FIELD_VALUE => $data[self::FIELD_EXAMPLE_UUID]] + $ext));
            } else {
                $this->setExampleUuid(new FHIRUuid($data[self::FIELD_EXAMPLE_UUID]));
            }
        }
        if (isset($data[self::FIELD_FORMAL])) {
            $ext = (isset($data[self::FIELD_FORMAL_EXT]) && is_array($data[self::FIELD_FORMAL_EXT]))
                ? $data[self::FIELD_FORMAL_EXT]
                : null;
            if ($data[self::FIELD_FORMAL] instanceof FHIRString) {
                $this->setFormal($data[self::FIELD_FORMAL]);
            } elseif ($ext && is_scalar($data[self::FIELD_FORMAL])) {
                $this->setFormal(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_FORMAL]] + $ext));
            } else {
                $this->setFormal(new FHIRString($data[self::FIELD_FORMAL]));
            }
        }
        if (isset($data[self::FIELD_IS_MODIFIER])) {
            $ext = (isset($data[self::FIELD_IS_MODIFIER_EXT]) && is_array($data[self::FIELD_IS_MODIFIER_EXT]))
                ? $data[self::FIELD_IS_MODIFIER_EXT]
                : null;
            if ($data[self::FIELD_IS_MODIFIER] instanceof FHIRBoolean) {
                $this->setIsModifier($data[self::FIELD_IS_MODIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_IS_MODIFIER])) {
                $this->setIsModifier(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_IS_MODIFIER]] + $ext));
            } else {
                $this->setIsModifier(new FHIRBoolean($data[self::FIELD_IS_MODIFIER]));
            }
        }
        if (isset($data[self::FIELD_MAPPING])) {
            if (is_array($data[self::FIELD_MAPPING])) {
                foreach($data[self::FIELD_MAPPING] as $v) {
                    if ($v instanceof FHIRProfileMapping1) {
                        $this->addMapping($v);
                    } else {
                        $this->addMapping(new FHIRProfileMapping1($v));
                    }
                }
            } else if ($data[self::FIELD_MAPPING] instanceof FHIRProfileMapping1) {
                $this->addMapping($data[self::FIELD_MAPPING]);
            } else {
                $this->addMapping(new FHIRProfileMapping1($data[self::FIELD_MAPPING]));
            }
        }
        if (isset($data[self::FIELD_MAX])) {
            $ext = (isset($data[self::FIELD_MAX_EXT]) && is_array($data[self::FIELD_MAX_EXT]))
                ? $data[self::FIELD_MAX_EXT]
                : null;
            if ($data[self::FIELD_MAX] instanceof FHIRString) {
                $this->setMax($data[self::FIELD_MAX]);
            } elseif ($ext && is_scalar($data[self::FIELD_MAX])) {
                $this->setMax(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_MAX]] + $ext));
            } else {
                $this->setMax(new FHIRString($data[self::FIELD_MAX]));
            }
        }
        if (isset($data[self::FIELD_MAX_LENGTH])) {
            $ext = (isset($data[self::FIELD_MAX_LENGTH_EXT]) && is_array($data[self::FIELD_MAX_LENGTH_EXT]))
                ? $data[self::FIELD_MAX_LENGTH_EXT]
                : null;
            if ($data[self::FIELD_MAX_LENGTH] instanceof FHIRInteger) {
                $this->setMaxLength($data[self::FIELD_MAX_LENGTH]);
            } elseif ($ext && is_scalar($data[self::FIELD_MAX_LENGTH])) {
                $this->setMaxLength(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_MAX_LENGTH]] + $ext));
            } else {
                $this->setMaxLength(new FHIRInteger($data[self::FIELD_MAX_LENGTH]));
            }
        }
        if (isset($data[self::FIELD_MIN])) {
            $ext = (isset($data[self::FIELD_MIN_EXT]) && is_array($data[self::FIELD_MIN_EXT]))
                ? $data[self::FIELD_MIN_EXT]
                : null;
            if ($data[self::FIELD_MIN] instanceof FHIRInteger) {
                $this->setMin($data[self::FIELD_MIN]);
            } elseif ($ext && is_scalar($data[self::FIELD_MIN])) {
                $this->setMin(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_MIN]] + $ext));
            } else {
                $this->setMin(new FHIRInteger($data[self::FIELD_MIN]));
            }
        }
        if (isset($data[self::FIELD_MUST_SUPPORT])) {
            $ext = (isset($data[self::FIELD_MUST_SUPPORT_EXT]) && is_array($data[self::FIELD_MUST_SUPPORT_EXT]))
                ? $data[self::FIELD_MUST_SUPPORT_EXT]
                : null;
            if ($data[self::FIELD_MUST_SUPPORT] instanceof FHIRBoolean) {
                $this->setMustSupport($data[self::FIELD_MUST_SUPPORT]);
            } elseif ($ext && is_scalar($data[self::FIELD_MUST_SUPPORT])) {
                $this->setMustSupport(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_MUST_SUPPORT]] + $ext));
            } else {
                $this->setMustSupport(new FHIRBoolean($data[self::FIELD_MUST_SUPPORT]));
            }
        }
        if (isset($data[self::FIELD_NAME_REFERENCE])) {
            $ext = (isset($data[self::FIELD_NAME_REFERENCE_EXT]) && is_array($data[self::FIELD_NAME_REFERENCE_EXT]))
                ? $data[self::FIELD_NAME_REFERENCE_EXT]
                : null;
            if ($data[self::FIELD_NAME_REFERENCE] instanceof FHIRString) {
                $this->setNameReference($data[self::FIELD_NAME_REFERENCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_NAME_REFERENCE])) {
                $this->setNameReference(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_NAME_REFERENCE]] + $ext));
            } else {
                $this->setNameReference(new FHIRString($data[self::FIELD_NAME_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_REQUIREMENTS])) {
            $ext = (isset($data[self::FIELD_REQUIREMENTS_EXT]) && is_array($data[self::FIELD_REQUIREMENTS_EXT]))
                ? $data[self::FIELD_REQUIREMENTS_EXT]
                : null;
            if ($data[self::FIELD_REQUIREMENTS] instanceof FHIRString) {
                $this->setRequirements($data[self::FIELD_REQUIREMENTS]);
            } elseif ($ext && is_scalar($data[self::FIELD_REQUIREMENTS])) {
                $this->setRequirements(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_REQUIREMENTS]] + $ext));
            } else {
                $this->setRequirements(new FHIRString($data[self::FIELD_REQUIREMENTS]));
            }
        }
        if (isset($data[self::FIELD_SHORT])) {
            $ext = (isset($data[self::FIELD_SHORT_EXT]) && is_array($data[self::FIELD_SHORT_EXT]))
                ? $data[self::FIELD_SHORT_EXT]
                : null;
            if ($data[self::FIELD_SHORT] instanceof FHIRString) {
                $this->setShort($data[self::FIELD_SHORT]);
            } elseif ($ext && is_scalar($data[self::FIELD_SHORT])) {
                $this->setShort(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SHORT]] + $ext));
            } else {
                $this->setShort(new FHIRString($data[self::FIELD_SHORT]));
            }
        }
        if (isset($data[self::FIELD_SYNONYM])) {
            $ext = (isset($data[self::FIELD_SYNONYM_EXT]) && is_array($data[self::FIELD_SYNONYM_EXT]))
                ? $data[self::FIELD_SYNONYM_EXT]
                : null;
            if (is_array($data[self::FIELD_SYNONYM])) {
                foreach($data[self::FIELD_SYNONYM] as $i => $v) {
                    if ($v instanceof FHIRString) {
                        $this->addSynonym($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addSynonym(new FHIRString([FHIRString::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addSynonym(new FHIRString($v));
                    }
                }
            } elseif ($data[self::FIELD_SYNONYM] instanceof FHIRString) {
                $this->addSynonym($data[self::FIELD_SYNONYM]);
            } elseif ($ext && is_scalar($data[self::FIELD_SYNONYM])) {
                $this->addSynonym(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SYNONYM]] + $ext));
            } else {
                $this->addSynonym(new FHIRString($data[self::FIELD_SYNONYM]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if (is_array($data[self::FIELD_TYPE])) {
                foreach($data[self::FIELD_TYPE] as $v) {
                    if ($v instanceof FHIRProfileType) {
                        $this->addType($v);
                    } else {
                        $this->addType(new FHIRProfileType($v));
                    }
                }
            } else if ($data[self::FIELD_TYPE] instanceof FHIRProfileType) {
                $this->addType($data[self::FIELD_TYPE]);
            } else {
                $this->addType(new FHIRProfileType($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_VALUE_ADDRESS])) {
            if ($data[self::FIELD_VALUE_ADDRESS] instanceof FHIRAddress) {
                $this->setValueAddress($data[self::FIELD_VALUE_ADDRESS]);
            } else {
                $this->setValueAddress(new FHIRAddress($data[self::FIELD_VALUE_ADDRESS]));
            }
        }
        if (isset($data[self::FIELD_VALUE_ATTACHMENT])) {
            if ($data[self::FIELD_VALUE_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setValueAttachment($data[self::FIELD_VALUE_ATTACHMENT]);
            } else {
                $this->setValueAttachment(new FHIRAttachment($data[self::FIELD_VALUE_ATTACHMENT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_BASE_64BINARY])) {
            $ext = (isset($data[self::FIELD_VALUE_BASE_64BINARY_EXT]) && is_array($data[self::FIELD_VALUE_BASE_64BINARY_EXT]))
                ? $data[self::FIELD_VALUE_BASE_64BINARY_EXT]
                : null;
            if ($data[self::FIELD_VALUE_BASE_64BINARY] instanceof FHIRBase64Binary) {
                $this->setValueBase64Binary($data[self::FIELD_VALUE_BASE_64BINARY]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_BASE_64BINARY])) {
                $this->setValueBase64Binary(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $data[self::FIELD_VALUE_BASE_64BINARY]] + $ext));
            } else {
                $this->setValueBase64Binary(new FHIRBase64Binary($data[self::FIELD_VALUE_BASE_64BINARY]));
            }
        }
        if (isset($data[self::FIELD_VALUE_BOOLEAN])) {
            $ext = (isset($data[self::FIELD_VALUE_BOOLEAN_EXT]) && is_array($data[self::FIELD_VALUE_BOOLEAN_EXT]))
                ? $data[self::FIELD_VALUE_BOOLEAN_EXT]
                : null;
            if ($data[self::FIELD_VALUE_BOOLEAN] instanceof FHIRBoolean) {
                $this->setValueBoolean($data[self::FIELD_VALUE_BOOLEAN]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_BOOLEAN])) {
                $this->setValueBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_VALUE_BOOLEAN]] + $ext));
            } else {
                $this->setValueBoolean(new FHIRBoolean($data[self::FIELD_VALUE_BOOLEAN]));
            }
        }
        if (isset($data[self::FIELD_VALUE_CODE])) {
            $ext = (isset($data[self::FIELD_VALUE_CODE_EXT]) && is_array($data[self::FIELD_VALUE_CODE_EXT]))
                ? $data[self::FIELD_VALUE_CODE_EXT]
                : null;
            if ($data[self::FIELD_VALUE_CODE] instanceof FHIRCode) {
                $this->setValueCode($data[self::FIELD_VALUE_CODE]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_CODE])) {
                $this->setValueCode(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_VALUE_CODE]] + $ext));
            } else {
                $this->setValueCode(new FHIRCode($data[self::FIELD_VALUE_CODE]));
            }
        }
        if (isset($data[self::FIELD_VALUE_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_VALUE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setValueCodeableConcept($data[self::FIELD_VALUE_CODEABLE_CONCEPT]);
            } else {
                $this->setValueCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_VALUE_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_CODING])) {
            if ($data[self::FIELD_VALUE_CODING] instanceof FHIRCoding) {
                $this->setValueCoding($data[self::FIELD_VALUE_CODING]);
            } else {
                $this->setValueCoding(new FHIRCoding($data[self::FIELD_VALUE_CODING]));
            }
        }
        if (isset($data[self::FIELD_VALUE_CONTACT])) {
            if ($data[self::FIELD_VALUE_CONTACT] instanceof FHIRContact) {
                $this->setValueContact($data[self::FIELD_VALUE_CONTACT]);
            } else {
                $this->setValueContact(new FHIRContact($data[self::FIELD_VALUE_CONTACT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_DATE])) {
            $ext = (isset($data[self::FIELD_VALUE_DATE_EXT]) && is_array($data[self::FIELD_VALUE_DATE_EXT]))
                ? $data[self::FIELD_VALUE_DATE_EXT]
                : null;
            if ($data[self::FIELD_VALUE_DATE] instanceof FHIRDate) {
                $this->setValueDate($data[self::FIELD_VALUE_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_DATE])) {
                $this->setValueDate(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_VALUE_DATE]] + $ext));
            } else {
                $this->setValueDate(new FHIRDate($data[self::FIELD_VALUE_DATE]));
            }
        }
        if (isset($data[self::FIELD_VALUE_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_VALUE_DATE_TIME_EXT]) && is_array($data[self::FIELD_VALUE_DATE_TIME_EXT]))
                ? $data[self::FIELD_VALUE_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_VALUE_DATE_TIME] instanceof FHIRDateTime) {
                $this->setValueDateTime($data[self::FIELD_VALUE_DATE_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_DATE_TIME])) {
                $this->setValueDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_VALUE_DATE_TIME]] + $ext));
            } else {
                $this->setValueDateTime(new FHIRDateTime($data[self::FIELD_VALUE_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_VALUE_DECIMAL])) {
            $ext = (isset($data[self::FIELD_VALUE_DECIMAL_EXT]) && is_array($data[self::FIELD_VALUE_DECIMAL_EXT]))
                ? $data[self::FIELD_VALUE_DECIMAL_EXT]
                : null;
            if ($data[self::FIELD_VALUE_DECIMAL] instanceof FHIRDecimal) {
                $this->setValueDecimal($data[self::FIELD_VALUE_DECIMAL]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_DECIMAL])) {
                $this->setValueDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_VALUE_DECIMAL]] + $ext));
            } else {
                $this->setValueDecimal(new FHIRDecimal($data[self::FIELD_VALUE_DECIMAL]));
            }
        }
        if (isset($data[self::FIELD_VALUE_HUMAN_NAME])) {
            if ($data[self::FIELD_VALUE_HUMAN_NAME] instanceof FHIRHumanName) {
                $this->setValueHumanName($data[self::FIELD_VALUE_HUMAN_NAME]);
            } else {
                $this->setValueHumanName(new FHIRHumanName($data[self::FIELD_VALUE_HUMAN_NAME]));
            }
        }
        if (isset($data[self::FIELD_VALUE_ID])) {
            $ext = (isset($data[self::FIELD_VALUE_ID_EXT]) && is_array($data[self::FIELD_VALUE_ID_EXT]))
                ? $data[self::FIELD_VALUE_ID_EXT]
                : null;
            if ($data[self::FIELD_VALUE_ID] instanceof FHIRId) {
                $this->setValueId($data[self::FIELD_VALUE_ID]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_ID])) {
                $this->setValueId(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_VALUE_ID]] + $ext));
            } else {
                $this->setValueId(new FHIRId($data[self::FIELD_VALUE_ID]));
            }
        }
        if (isset($data[self::FIELD_VALUE_IDENTIFIER])) {
            if ($data[self::FIELD_VALUE_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setValueIdentifier($data[self::FIELD_VALUE_IDENTIFIER]);
            } else {
                $this->setValueIdentifier(new FHIRIdentifier($data[self::FIELD_VALUE_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_VALUE_INSTANT])) {
            $ext = (isset($data[self::FIELD_VALUE_INSTANT_EXT]) && is_array($data[self::FIELD_VALUE_INSTANT_EXT]))
                ? $data[self::FIELD_VALUE_INSTANT_EXT]
                : null;
            if ($data[self::FIELD_VALUE_INSTANT] instanceof FHIRInstant) {
                $this->setValueInstant($data[self::FIELD_VALUE_INSTANT]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_INSTANT])) {
                $this->setValueInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $data[self::FIELD_VALUE_INSTANT]] + $ext));
            } else {
                $this->setValueInstant(new FHIRInstant($data[self::FIELD_VALUE_INSTANT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_INTEGER])) {
            $ext = (isset($data[self::FIELD_VALUE_INTEGER_EXT]) && is_array($data[self::FIELD_VALUE_INTEGER_EXT]))
                ? $data[self::FIELD_VALUE_INTEGER_EXT]
                : null;
            if ($data[self::FIELD_VALUE_INTEGER] instanceof FHIRInteger) {
                $this->setValueInteger($data[self::FIELD_VALUE_INTEGER]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_INTEGER])) {
                $this->setValueInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_VALUE_INTEGER]] + $ext));
            } else {
                $this->setValueInteger(new FHIRInteger($data[self::FIELD_VALUE_INTEGER]));
            }
        }
        if (isset($data[self::FIELD_VALUE_OID])) {
            $ext = (isset($data[self::FIELD_VALUE_OID_EXT]) && is_array($data[self::FIELD_VALUE_OID_EXT]))
                ? $data[self::FIELD_VALUE_OID_EXT]
                : null;
            if ($data[self::FIELD_VALUE_OID] instanceof FHIROid) {
                $this->setValueOid($data[self::FIELD_VALUE_OID]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_OID])) {
                $this->setValueOid(new FHIROid([FHIROid::FIELD_VALUE => $data[self::FIELD_VALUE_OID]] + $ext));
            } else {
                $this->setValueOid(new FHIROid($data[self::FIELD_VALUE_OID]));
            }
        }
        if (isset($data[self::FIELD_VALUE_PERIOD])) {
            if ($data[self::FIELD_VALUE_PERIOD] instanceof FHIRPeriod) {
                $this->setValuePeriod($data[self::FIELD_VALUE_PERIOD]);
            } else {
                $this->setValuePeriod(new FHIRPeriod($data[self::FIELD_VALUE_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_VALUE_QUANTITY])) {
            if ($data[self::FIELD_VALUE_QUANTITY] instanceof FHIRQuantity) {
                $this->setValueQuantity($data[self::FIELD_VALUE_QUANTITY]);
            } else {
                $this->setValueQuantity(new FHIRQuantity($data[self::FIELD_VALUE_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_VALUE_RANGE])) {
            if ($data[self::FIELD_VALUE_RANGE] instanceof FHIRRange) {
                $this->setValueRange($data[self::FIELD_VALUE_RANGE]);
            } else {
                $this->setValueRange(new FHIRRange($data[self::FIELD_VALUE_RANGE]));
            }
        }
        if (isset($data[self::FIELD_VALUE_RATIO])) {
            if ($data[self::FIELD_VALUE_RATIO] instanceof FHIRRatio) {
                $this->setValueRatio($data[self::FIELD_VALUE_RATIO]);
            } else {
                $this->setValueRatio(new FHIRRatio($data[self::FIELD_VALUE_RATIO]));
            }
        }
        if (isset($data[self::FIELD_VALUE_RESOURCE])) {
            if ($data[self::FIELD_VALUE_RESOURCE] instanceof FHIRResourceReference) {
                $this->setValueResource($data[self::FIELD_VALUE_RESOURCE]);
            } else {
                $this->setValueResource(new FHIRResourceReference($data[self::FIELD_VALUE_RESOURCE]));
            }
        }
        if (isset($data[self::FIELD_VALUE_SAMPLED_DATA])) {
            if ($data[self::FIELD_VALUE_SAMPLED_DATA] instanceof FHIRSampledData) {
                $this->setValueSampledData($data[self::FIELD_VALUE_SAMPLED_DATA]);
            } else {
                $this->setValueSampledData(new FHIRSampledData($data[self::FIELD_VALUE_SAMPLED_DATA]));
            }
        }
        if (isset($data[self::FIELD_VALUE_SCHEDULE])) {
            if ($data[self::FIELD_VALUE_SCHEDULE] instanceof FHIRSchedule) {
                $this->setValueSchedule($data[self::FIELD_VALUE_SCHEDULE]);
            } else {
                $this->setValueSchedule(new FHIRSchedule($data[self::FIELD_VALUE_SCHEDULE]));
            }
        }
        if (isset($data[self::FIELD_VALUE_STRING])) {
            $ext = (isset($data[self::FIELD_VALUE_STRING_EXT]) && is_array($data[self::FIELD_VALUE_STRING_EXT]))
                ? $data[self::FIELD_VALUE_STRING_EXT]
                : null;
            if ($data[self::FIELD_VALUE_STRING] instanceof FHIRString) {
                $this->setValueString($data[self::FIELD_VALUE_STRING]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_STRING])) {
                $this->setValueString(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_VALUE_STRING]] + $ext));
            } else {
                $this->setValueString(new FHIRString($data[self::FIELD_VALUE_STRING]));
            }
        }
        if (isset($data[self::FIELD_VALUE_URI])) {
            $ext = (isset($data[self::FIELD_VALUE_URI_EXT]) && is_array($data[self::FIELD_VALUE_URI_EXT]))
                ? $data[self::FIELD_VALUE_URI_EXT]
                : null;
            if ($data[self::FIELD_VALUE_URI] instanceof FHIRUri) {
                $this->setValueUri($data[self::FIELD_VALUE_URI]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_URI])) {
                $this->setValueUri(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_VALUE_URI]] + $ext));
            } else {
                $this->setValueUri(new FHIRUri($data[self::FIELD_VALUE_URI]));
            }
        }
        if (isset($data[self::FIELD_VALUE_UUID])) {
            $ext = (isset($data[self::FIELD_VALUE_UUID_EXT]) && is_array($data[self::FIELD_VALUE_UUID_EXT]))
                ? $data[self::FIELD_VALUE_UUID_EXT]
                : null;
            if ($data[self::FIELD_VALUE_UUID] instanceof FHIRUuid) {
                $this->setValueUuid($data[self::FIELD_VALUE_UUID]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_UUID])) {
                $this->setValueUuid(new FHIRUuid([FHIRUuid::FIELD_VALUE => $data[self::FIELD_VALUE_UUID]] + $ext));
            } else {
                $this->setValueUuid(new FHIRUuid($data[self::FIELD_VALUE_UUID]));
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
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileBinding
     */
    public function getBinding()
    {
        return $this->binding;
    }

    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileBinding $binding
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setBinding(FHIRProfileBinding $binding = null)
    {
        $this->binding = $binding;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Comments about the use of the element, including notes about how to use the data
     * properly, exceptions to proper use, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Comments about the use of the element, including notes about how to use the data
     * properly, exceptions to proper use, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $comments
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setComments($comments = null)
    {
        if (null === $comments) {
            $this->comments = null;
            return $this;
        }
        if ($comments instanceof FHIRString) {
            $this->comments = $comments;
            return $this;
        }
        $this->comments = new FHIRString($comments);
        return $this;
    }

    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A reference to an invariant that may make additional statements about the
     * cardinality or value in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A reference to an invariant that may make additional statements about the
     * cardinality or value in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId $condition
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function addCondition($condition = null)
    {
        if (null === $condition) {
            $this->condition = null;
            return $this;
        }
        if ($condition instanceof FHIRId) {
            $this->condition = $condition;
            return $this;
        }
        $this->condition = new FHIRId($condition);
        return $this;
    }

    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A reference to an invariant that may make additional statements about the
     * cardinality or value in the instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId[] $condition
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setCondition(array $condition = [])
    {
        $this->condition = [];
        if ([] === $condition) {
            return $this;
        }
        foreach($condition as $v) {
            if ($v instanceof FHIRId) {
                $this->addCondition($v);
            } else {
                $this->addCondition(new FHIRId($v));
            }
        }
        return $this;
    }

    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * Formal constraints such as co-occurrence and other constraints that can be
     * computationally evaluated within the context of the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileConstraint[]
     */
    public function getConstraint()
    {
        return $this->constraint;
    }

    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * Formal constraints such as co-occurrence and other constraints that can be
     * computationally evaluated within the context of the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileConstraint $constraint
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function addConstraint(FHIRProfileConstraint $constraint = null)
    {
        $this->constraint[] = $constraint;
        return $this;
    }

    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * Formal constraints such as co-occurrence and other constraints that can be
     * computationally evaluated within the context of the instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileConstraint[] $constraint
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setConstraint(array $constraint = [])
    {
        $this->constraint = [];
        if ([] === $constraint) {
            return $this;
        }
        foreach($constraint as $v) {
            if ($v instanceof FHIRProfileConstraint) {
                $this->addConstraint($v);
            } else {
                $this->addConstraint(new FHIRProfileConstraint($v));
            }
        }
        return $this;
    }

    /**
     * There is a variety of postal address formats defined around the world. This
     * format defines a superset that is the basis for all addresses around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress
     */
    public function getExampleAddress()
    {
        return $this->exampleAddress;
    }

    /**
     * There is a variety of postal address formats defined around the world. This
     * format defines a superset that is the basis for all addresses around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress $exampleAddress
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setExampleAddress(FHIRAddress $exampleAddress = null)
    {
        $this->exampleAddress = $exampleAddress;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment
     */
    public function getExampleAttachment()
    {
        return $this->exampleAttachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment $exampleAttachment
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setExampleAttachment(FHIRAttachment $exampleAttachment = null)
    {
        $this->exampleAttachment = $exampleAttachment;
        return $this;
    }

    /**
     * A stream of bytes
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary
     */
    public function getExampleBase64Binary()
    {
        return $this->exampleBase64Binary;
    }

    /**
     * A stream of bytes
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary $exampleBase64Binary
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setExampleBase64Binary($exampleBase64Binary = null)
    {
        if (null === $exampleBase64Binary) {
            $this->exampleBase64Binary = null;
            return $this;
        }
        if ($exampleBase64Binary instanceof FHIRBase64Binary) {
            $this->exampleBase64Binary = $exampleBase64Binary;
            return $this;
        }
        $this->exampleBase64Binary = new FHIRBase64Binary($exampleBase64Binary);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    public function getExampleBoolean()
    {
        return $this->exampleBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean $exampleBoolean
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setExampleBoolean($exampleBoolean = null)
    {
        if (null === $exampleBoolean) {
            $this->exampleBoolean = null;
            return $this;
        }
        if ($exampleBoolean instanceof FHIRBoolean) {
            $this->exampleBoolean = $exampleBoolean;
            return $this;
        }
        $this->exampleBoolean = new FHIRBoolean($exampleBoolean);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    public function getExampleCode()
    {
        return $this->exampleCode;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode $exampleCode
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setExampleCode($exampleCode = null)
    {
        if (null === $exampleCode) {
            $this->exampleCode = null;
            return $this;
        }
        if ($exampleCode instanceof FHIRCode) {
            $this->exampleCode = $exampleCode;
            return $this;
        }
        $this->exampleCode = new FHIRCode($exampleCode);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getExampleCodeableConcept()
    {
        return $this->exampleCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $exampleCodeableConcept
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setExampleCodeableConcept(FHIRCodeableConcept $exampleCodeableConcept = null)
    {
        $this->exampleCodeableConcept = $exampleCodeableConcept;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding
     */
    public function getExampleCoding()
    {
        return $this->exampleCoding;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding $exampleCoding
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setExampleCoding(FHIRCoding $exampleCoding = null)
    {
        $this->exampleCoding = $exampleCoding;
        return $this;
    }

    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRContact
     */
    public function getExampleContact()
    {
        return $this->exampleContact;
    }

    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRContact $exampleContact
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setExampleContact(FHIRContact $exampleContact = null)
    {
        $this->exampleContact = $exampleContact;
        return $this;
    }

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate
     */
    public function getExampleDate()
    {
        return $this->exampleDate;
    }

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate $exampleDate
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setExampleDate($exampleDate = null)
    {
        if (null === $exampleDate) {
            $this->exampleDate = null;
            return $this;
        }
        if ($exampleDate instanceof FHIRDate) {
            $this->exampleDate = $exampleDate;
            return $this;
        }
        $this->exampleDate = new FHIRDate($exampleDate);
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    public function getExampleDateTime()
    {
        return $this->exampleDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime $exampleDateTime
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setExampleDateTime($exampleDateTime = null)
    {
        if (null === $exampleDateTime) {
            $this->exampleDateTime = null;
            return $this;
        }
        if ($exampleDateTime instanceof FHIRDateTime) {
            $this->exampleDateTime = $exampleDateTime;
            return $this;
        }
        $this->exampleDateTime = new FHIRDateTime($exampleDateTime);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal
     */
    public function getExampleDecimal()
    {
        return $this->exampleDecimal;
    }

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal $exampleDecimal
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setExampleDecimal($exampleDecimal = null)
    {
        if (null === $exampleDecimal) {
            $this->exampleDecimal = null;
            return $this;
        }
        if ($exampleDecimal instanceof FHIRDecimal) {
            $this->exampleDecimal = $exampleDecimal;
            return $this;
        }
        $this->exampleDecimal = new FHIRDecimal($exampleDecimal);
        return $this;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRHumanName
     */
    public function getExampleHumanName()
    {
        return $this->exampleHumanName;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRHumanName $exampleHumanName
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setExampleHumanName(FHIRHumanName $exampleHumanName = null)
    {
        $this->exampleHumanName = $exampleHumanName;
        return $this;
    }

    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId
     */
    public function getExampleId()
    {
        return $this->exampleId;
    }

    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId $exampleId
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setExampleId($exampleId = null)
    {
        if (null === $exampleId) {
            $this->exampleId = null;
            return $this;
        }
        if ($exampleId instanceof FHIRId) {
            $this->exampleId = $exampleId;
            return $this;
        }
        $this->exampleId = new FHIRId($exampleId);
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier
     */
    public function getExampleIdentifier()
    {
        return $this->exampleIdentifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier $exampleIdentifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setExampleIdentifier(FHIRIdentifier $exampleIdentifier = null)
    {
        $this->exampleIdentifier = $exampleIdentifier;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant
     */
    public function getExampleInstant()
    {
        return $this->exampleInstant;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant $exampleInstant
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setExampleInstant($exampleInstant = null)
    {
        if (null === $exampleInstant) {
            $this->exampleInstant = null;
            return $this;
        }
        if ($exampleInstant instanceof FHIRInstant) {
            $this->exampleInstant = $exampleInstant;
            return $this;
        }
        $this->exampleInstant = new FHIRInstant($exampleInstant);
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    public function getExampleInteger()
    {
        return $this->exampleInteger;
    }

    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $exampleInteger
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setExampleInteger($exampleInteger = null)
    {
        if (null === $exampleInteger) {
            $this->exampleInteger = null;
            return $this;
        }
        if ($exampleInteger instanceof FHIRInteger) {
            $this->exampleInteger = $exampleInteger;
            return $this;
        }
        $this->exampleInteger = new FHIRInteger($exampleInteger);
        return $this;
    }

    /**
     * An oid represented as a URI
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROid
     */
    public function getExampleOid()
    {
        return $this->exampleOid;
    }

    /**
     * An oid represented as a URI
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROid $exampleOid
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setExampleOid($exampleOid = null)
    {
        if (null === $exampleOid) {
            $this->exampleOid = null;
            return $this;
        }
        if ($exampleOid instanceof FHIROid) {
            $this->exampleOid = $exampleOid;
            return $this;
        }
        $this->exampleOid = new FHIROid($exampleOid);
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    public function getExamplePeriod()
    {
        return $this->examplePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod $examplePeriod
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setExamplePeriod(FHIRPeriod $examplePeriod = null)
    {
        $this->examplePeriod = $examplePeriod;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity
     */
    public function getExampleQuantity()
    {
        return $this->exampleQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity $exampleQuantity
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setExampleQuantity(FHIRQuantity $exampleQuantity = null)
    {
        $this->exampleQuantity = $exampleQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRange
     */
    public function getExampleRange()
    {
        return $this->exampleRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRange $exampleRange
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setExampleRange(FHIRRange $exampleRange = null)
    {
        $this->exampleRange = $exampleRange;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRatio
     */
    public function getExampleRatio()
    {
        return $this->exampleRatio;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRatio $exampleRatio
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setExampleRatio(FHIRRatio $exampleRatio = null)
    {
        $this->exampleRatio = $exampleRatio;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getExampleResource()
    {
        return $this->exampleResource;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $exampleResource
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setExampleResource(FHIRResourceReference $exampleResource = null)
    {
        $this->exampleResource = $exampleResource;
        return $this;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSampledData
     */
    public function getExampleSampledData()
    {
        return $this->exampleSampledData;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSampledData $exampleSampledData
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setExampleSampledData(FHIRSampledData $exampleSampledData = null)
    {
        $this->exampleSampledData = $exampleSampledData;
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Schedules are used for to
     * reord when things are expected or requested to occur.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule
     */
    public function getExampleSchedule()
    {
        return $this->exampleSchedule;
    }

    /**
     * Specifies an event that may occur multiple times. Schedules are used for to
     * reord when things are expected or requested to occur.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule $exampleSchedule
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setExampleSchedule(FHIRSchedule $exampleSchedule = null)
    {
        $this->exampleSchedule = $exampleSchedule;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getExampleString()
    {
        return $this->exampleString;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $exampleString
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setExampleString($exampleString = null)
    {
        if (null === $exampleString) {
            $this->exampleString = null;
            return $this;
        }
        if ($exampleString instanceof FHIRString) {
            $this->exampleString = $exampleString;
            return $this;
        }
        $this->exampleString = new FHIRString($exampleString);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    public function getExampleUri()
    {
        return $this->exampleUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri $exampleUri
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setExampleUri($exampleUri = null)
    {
        if (null === $exampleUri) {
            $this->exampleUri = null;
            return $this;
        }
        if ($exampleUri instanceof FHIRUri) {
            $this->exampleUri = $exampleUri;
            return $this;
        }
        $this->exampleUri = new FHIRUri($exampleUri);
        return $this;
    }

    /**
     * A UUID, represented as a URI
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUuid
     */
    public function getExampleUuid()
    {
        return $this->exampleUuid;
    }

    /**
     * A UUID, represented as a URI
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUuid $exampleUuid
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setExampleUuid($exampleUuid = null)
    {
        if (null === $exampleUuid) {
            $this->exampleUuid = null;
            return $this;
        }
        if ($exampleUuid instanceof FHIRUuid) {
            $this->exampleUuid = $exampleUuid;
            return $this;
        }
        $this->exampleUuid = new FHIRUuid($exampleUuid);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The definition SHALL be consistent with the base definition, but convey the
     * meaning of the element in the particular context of use of the resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getFormal()
    {
        return $this->formal;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The definition SHALL be consistent with the base definition, but convey the
     * meaning of the element in the particular context of use of the resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $formal
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setFormal($formal = null)
    {
        if (null === $formal) {
            $this->formal = null;
            return $this;
        }
        if ($formal instanceof FHIRString) {
            $this->formal = $formal;
            return $this;
        }
        $this->formal = new FHIRString($formal);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If true, the value of this element affects the interpretation of the element or
     * resource that contains it, and the value of the element cannot be ignored.
     * Typically, this is used for status, negation and qualification codes. The effect
     * of this is that the element cannot be ignored by systems: they SHALL either
     * recognize the element and process it, and/or a pre-determination has been made
     * that it is not relevant to their particular system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    public function getIsModifier()
    {
        return $this->isModifier;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If true, the value of this element affects the interpretation of the element or
     * resource that contains it, and the value of the element cannot be ignored.
     * Typically, this is used for status, negation and qualification codes. The effect
     * of this is that the element cannot be ignored by systems: they SHALL either
     * recognize the element and process it, and/or a pre-determination has been made
     * that it is not relevant to their particular system.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean $isModifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setIsModifier($isModifier = null)
    {
        if (null === $isModifier) {
            $this->isModifier = null;
            return $this;
        }
        if ($isModifier instanceof FHIRBoolean) {
            $this->isModifier = $isModifier;
            return $this;
        }
        $this->isModifier = new FHIRBoolean($isModifier);
        return $this;
    }

    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * Identifies a concept from an external specification that roughly corresponds to
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileMapping1[]
     */
    public function getMapping()
    {
        return $this->mapping;
    }

    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * Identifies a concept from an external specification that roughly corresponds to
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileMapping1 $mapping
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function addMapping(FHIRProfileMapping1 $mapping = null)
    {
        $this->mapping[] = $mapping;
        return $this;
    }

    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * Identifies a concept from an external specification that roughly corresponds to
     * this element.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileMapping1[] $mapping
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setMapping(array $mapping = [])
    {
        $this->mapping = [];
        if ([] === $mapping) {
            return $this;
        }
        foreach($mapping as $v) {
            if ($v instanceof FHIRProfileMapping1) {
                $this->addMapping($v);
            } else {
                $this->addMapping(new FHIRProfileMapping1($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $max
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setMax($max = null)
    {
        if (null === $max) {
            $this->max = null;
            return $this;
        }
        if ($max instanceof FHIRString) {
            $this->max = $max;
            return $this;
        }
        $this->max = new FHIRString($max);
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the shortest length that SHALL be supported by conformant instances
     * without truncation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    public function getMaxLength()
    {
        return $this->maxLength;
    }

    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the shortest length that SHALL be supported by conformant instances
     * without truncation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $maxLength
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setMaxLength($maxLength = null)
    {
        if (null === $maxLength) {
            $this->maxLength = null;
            return $this;
        }
        if ($maxLength instanceof FHIRInteger) {
            $this->maxLength = $maxLength;
            return $this;
        }
        $this->maxLength = new FHIRInteger($maxLength);
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The minimum number of times this element SHALL appear in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The minimum number of times this element SHALL appear in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $min
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setMin($min = null)
    {
        if (null === $min) {
            $this->min = null;
            return $this;
        }
        if ($min instanceof FHIRInteger) {
            $this->min = $min;
            return $this;
        }
        $this->min = new FHIRInteger($min);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If true, conformant resource authors SHALL be capable of providing a value for
     * the element and resource consumers SHALL be capable of extracting and doing
     * something useful with the data element. If false, the element may be ignored and
     * not supported.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    public function getMustSupport()
    {
        return $this->mustSupport;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If true, conformant resource authors SHALL be capable of providing a value for
     * the element and resource consumers SHALL be capable of extracting and doing
     * something useful with the data element. If false, the element may be ignored and
     * not supported.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean $mustSupport
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setMustSupport($mustSupport = null)
    {
        if (null === $mustSupport) {
            $this->mustSupport = null;
            return $this;
        }
        if ($mustSupport instanceof FHIRBoolean) {
            $this->mustSupport = $mustSupport;
            return $this;
        }
        $this->mustSupport = new FHIRBoolean($mustSupport);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies the name of a slice defined elsewhere in the profile whose
     * constraints should be applied to the current element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getNameReference()
    {
        return $this->nameReference;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies the name of a slice defined elsewhere in the profile whose
     * constraints should be applied to the current element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $nameReference
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setNameReference($nameReference = null)
    {
        if (null === $nameReference) {
            $this->nameReference = null;
            return $this;
        }
        if ($nameReference instanceof FHIRString) {
            $this->nameReference = $nameReference;
            return $this;
        }
        $this->nameReference = new FHIRString($nameReference);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Explains why this element is needed and why it's been constrained as it has.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Explains why this element is needed and why it's been constrained as it has.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $requirements
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setRequirements($requirements = null)
    {
        if (null === $requirements) {
            $this->requirements = null;
            return $this;
        }
        if ($requirements instanceof FHIRString) {
            $this->requirements = $requirements;
            return $this;
        }
        $this->requirements = new FHIRString($requirements);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A concise definition that is shown in the generated XML format that summarizes
     * profiles (used throughout the specification).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getShort()
    {
        return $this->short;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A concise definition that is shown in the generated XML format that summarizes
     * profiles (used throughout the specification).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $short
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setShort($short = null)
    {
        if (null === $short) {
            $this->short = null;
            return $this;
        }
        if ($short instanceof FHIRString) {
            $this->short = $short;
            return $this;
        }
        $this->short = new FHIRString($short);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies additional names by which this element might also be known.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString[]
     */
    public function getSynonym()
    {
        return $this->synonym;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies additional names by which this element might also be known.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $synonym
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function addSynonym($synonym = null)
    {
        if (null === $synonym) {
            $this->synonym = null;
            return $this;
        }
        if ($synonym instanceof FHIRString) {
            $this->synonym = $synonym;
            return $this;
        }
        $this->synonym = new FHIRString($synonym);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies additional names by which this element might also be known.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString[] $synonym
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setSynonym(array $synonym = [])
    {
        $this->synonym = [];
        if ([] === $synonym) {
            return $this;
        }
        foreach($synonym as $v) {
            if ($v instanceof FHIRString) {
                $this->addSynonym($v);
            } else {
                $this->addSynonym(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * The data type or resource that the value of this element is permitted to be.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * The data type or resource that the value of this element is permitted to be.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileType $type
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function addType(FHIRProfileType $type = null)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * The data type or resource that the value of this element is permitted to be.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileType[] $type
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setType(array $type = [])
    {
        $this->type = [];
        if ([] === $type) {
            return $this;
        }
        foreach($type as $v) {
            if ($v instanceof FHIRProfileType) {
                $this->addType($v);
            } else {
                $this->addType(new FHIRProfileType($v));
            }
        }
        return $this;
    }

    /**
     * There is a variety of postal address formats defined around the world. This
     * format defines a superset that is the basis for all addresses around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress
     */
    public function getValueAddress()
    {
        return $this->valueAddress;
    }

    /**
     * There is a variety of postal address formats defined around the world. This
     * format defines a superset that is the basis for all addresses around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress $valueAddress
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setValueAddress(FHIRAddress $valueAddress = null)
    {
        $this->valueAddress = $valueAddress;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment $valueAttachment
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setValueAttachment(FHIRAttachment $valueAttachment = null)
    {
        $this->valueAttachment = $valueAttachment;
        return $this;
    }

    /**
     * A stream of bytes
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary
     */
    public function getValueBase64Binary()
    {
        return $this->valueBase64Binary;
    }

    /**
     * A stream of bytes
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary $valueBase64Binary
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setValueBase64Binary($valueBase64Binary = null)
    {
        if (null === $valueBase64Binary) {
            $this->valueBase64Binary = null;
            return $this;
        }
        if ($valueBase64Binary instanceof FHIRBase64Binary) {
            $this->valueBase64Binary = $valueBase64Binary;
            return $this;
        }
        $this->valueBase64Binary = new FHIRBase64Binary($valueBase64Binary);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean $valueBoolean
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setValueBoolean($valueBoolean = null)
    {
        if (null === $valueBoolean) {
            $this->valueBoolean = null;
            return $this;
        }
        if ($valueBoolean instanceof FHIRBoolean) {
            $this->valueBoolean = $valueBoolean;
            return $this;
        }
        $this->valueBoolean = new FHIRBoolean($valueBoolean);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    public function getValueCode()
    {
        return $this->valueCode;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode $valueCode
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setValueCode($valueCode = null)
    {
        if (null === $valueCode) {
            $this->valueCode = null;
            return $this;
        }
        if ($valueCode instanceof FHIRCode) {
            $this->valueCode = $valueCode;
            return $this;
        }
        $this->valueCode = new FHIRCode($valueCode);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $valueCodeableConcept
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setValueCodeableConcept(FHIRCodeableConcept $valueCodeableConcept = null)
    {
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding
     */
    public function getValueCoding()
    {
        return $this->valueCoding;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding $valueCoding
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setValueCoding(FHIRCoding $valueCoding = null)
    {
        $this->valueCoding = $valueCoding;
        return $this;
    }

    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRContact
     */
    public function getValueContact()
    {
        return $this->valueContact;
    }

    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRContact $valueContact
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setValueContact(FHIRContact $valueContact = null)
    {
        $this->valueContact = $valueContact;
        return $this;
    }

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate
     */
    public function getValueDate()
    {
        return $this->valueDate;
    }

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate $valueDate
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setValueDate($valueDate = null)
    {
        if (null === $valueDate) {
            $this->valueDate = null;
            return $this;
        }
        if ($valueDate instanceof FHIRDate) {
            $this->valueDate = $valueDate;
            return $this;
        }
        $this->valueDate = new FHIRDate($valueDate);
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime $valueDateTime
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setValueDateTime($valueDateTime = null)
    {
        if (null === $valueDateTime) {
            $this->valueDateTime = null;
            return $this;
        }
        if ($valueDateTime instanceof FHIRDateTime) {
            $this->valueDateTime = $valueDateTime;
            return $this;
        }
        $this->valueDateTime = new FHIRDateTime($valueDateTime);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal
     */
    public function getValueDecimal()
    {
        return $this->valueDecimal;
    }

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal $valueDecimal
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setValueDecimal($valueDecimal = null)
    {
        if (null === $valueDecimal) {
            $this->valueDecimal = null;
            return $this;
        }
        if ($valueDecimal instanceof FHIRDecimal) {
            $this->valueDecimal = $valueDecimal;
            return $this;
        }
        $this->valueDecimal = new FHIRDecimal($valueDecimal);
        return $this;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRHumanName
     */
    public function getValueHumanName()
    {
        return $this->valueHumanName;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRHumanName $valueHumanName
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setValueHumanName(FHIRHumanName $valueHumanName = null)
    {
        $this->valueHumanName = $valueHumanName;
        return $this;
    }

    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId
     */
    public function getValueId()
    {
        return $this->valueId;
    }

    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId $valueId
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setValueId($valueId = null)
    {
        if (null === $valueId) {
            $this->valueId = null;
            return $this;
        }
        if ($valueId instanceof FHIRId) {
            $this->valueId = $valueId;
            return $this;
        }
        $this->valueId = new FHIRId($valueId);
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier
     */
    public function getValueIdentifier()
    {
        return $this->valueIdentifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier $valueIdentifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setValueIdentifier(FHIRIdentifier $valueIdentifier = null)
    {
        $this->valueIdentifier = $valueIdentifier;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant
     */
    public function getValueInstant()
    {
        return $this->valueInstant;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant $valueInstant
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setValueInstant($valueInstant = null)
    {
        if (null === $valueInstant) {
            $this->valueInstant = null;
            return $this;
        }
        if ($valueInstant instanceof FHIRInstant) {
            $this->valueInstant = $valueInstant;
            return $this;
        }
        $this->valueInstant = new FHIRInstant($valueInstant);
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }

    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $valueInteger
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setValueInteger($valueInteger = null)
    {
        if (null === $valueInteger) {
            $this->valueInteger = null;
            return $this;
        }
        if ($valueInteger instanceof FHIRInteger) {
            $this->valueInteger = $valueInteger;
            return $this;
        }
        $this->valueInteger = new FHIRInteger($valueInteger);
        return $this;
    }

    /**
     * An oid represented as a URI
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROid
     */
    public function getValueOid()
    {
        return $this->valueOid;
    }

    /**
     * An oid represented as a URI
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROid $valueOid
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setValueOid($valueOid = null)
    {
        if (null === $valueOid) {
            $this->valueOid = null;
            return $this;
        }
        if ($valueOid instanceof FHIROid) {
            $this->valueOid = $valueOid;
            return $this;
        }
        $this->valueOid = new FHIROid($valueOid);
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    public function getValuePeriod()
    {
        return $this->valuePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod $valuePeriod
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setValuePeriod(FHIRPeriod $valuePeriod = null)
    {
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity $valueQuantity
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setValueQuantity(FHIRQuantity $valueQuantity = null)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRange
     */
    public function getValueRange()
    {
        return $this->valueRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRange $valueRange
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setValueRange(FHIRRange $valueRange = null)
    {
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRatio
     */
    public function getValueRatio()
    {
        return $this->valueRatio;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRatio $valueRatio
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setValueRatio(FHIRRatio $valueRatio = null)
    {
        $this->valueRatio = $valueRatio;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getValueResource()
    {
        return $this->valueResource;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $valueResource
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setValueResource(FHIRResourceReference $valueResource = null)
    {
        $this->valueResource = $valueResource;
        return $this;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSampledData
     */
    public function getValueSampledData()
    {
        return $this->valueSampledData;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSampledData $valueSampledData
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setValueSampledData(FHIRSampledData $valueSampledData = null)
    {
        $this->valueSampledData = $valueSampledData;
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Schedules are used for to
     * reord when things are expected or requested to occur.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule
     */
    public function getValueSchedule()
    {
        return $this->valueSchedule;
    }

    /**
     * Specifies an event that may occur multiple times. Schedules are used for to
     * reord when things are expected or requested to occur.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule $valueSchedule
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setValueSchedule(FHIRSchedule $valueSchedule = null)
    {
        $this->valueSchedule = $valueSchedule;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $valueString
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setValueString($valueString = null)
    {
        if (null === $valueString) {
            $this->valueString = null;
            return $this;
        }
        if ($valueString instanceof FHIRString) {
            $this->valueString = $valueString;
            return $this;
        }
        $this->valueString = new FHIRString($valueString);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    public function getValueUri()
    {
        return $this->valueUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri $valueUri
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setValueUri($valueUri = null)
    {
        if (null === $valueUri) {
            $this->valueUri = null;
            return $this;
        }
        if ($valueUri instanceof FHIRUri) {
            $this->valueUri = $valueUri;
            return $this;
        }
        $this->valueUri = new FHIRUri($valueUri);
        return $this;
    }

    /**
     * A UUID, represented as a URI
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUuid
     */
    public function getValueUuid()
    {
        return $this->valueUuid;
    }

    /**
     * A UUID, represented as a URI
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUuid $valueUuid
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function setValueUuid($valueUuid = null)
    {
        if (null === $valueUuid) {
            $this->valueUuid = null;
            return $this;
        }
        if ($valueUuid instanceof FHIRUuid) {
            $this->valueUuid = $valueUuid;
            return $this;
        }
        $this->valueUuid = new FHIRUuid($valueUuid);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition $type
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
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
                throw new \DomainException(sprintf('FHIRProfileDefinition::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRProfileDefinition::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRProfileDefinition);
        } elseif (!is_object($type) || !($type instanceof FHIRProfileDefinition)) {
            throw new \RuntimeException(sprintf(
                'FHIRProfileDefinition::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->binding)) {
            $type->setBinding(FHIRProfileBinding::xmlUnserialize($children->binding));
        }
        if (isset($attributes->comments)) {
            $type->setComments((string)$attributes->comments);
        }
        if (isset($children->comments)) {
            $type->setComments(FHIRString::xmlUnserialize($children->comments));
        }
        if (isset($attributes->condition)) {
            $type->addCondition((string)$attributes->condition);
        }
        if (isset($children->condition)) {
            foreach($children->condition as $child) {
                $type->addCondition(FHIRId::xmlUnserialize($child));
            }
        }
        if (isset($children->constraint)) {
            foreach($children->constraint as $child) {
                $type->addConstraint(FHIRProfileConstraint::xmlUnserialize($child));
            }
        }
        if (isset($children->exampleAddress)) {
            $type->setExampleAddress(FHIRAddress::xmlUnserialize($children->exampleAddress));
        }
        if (isset($children->exampleAttachment)) {
            $type->setExampleAttachment(FHIRAttachment::xmlUnserialize($children->exampleAttachment));
        }
        if (isset($attributes->exampleBase64Binary)) {
            $type->setExampleBase64Binary((string)$attributes->exampleBase64Binary);
        }
        if (isset($children->exampleBase64Binary)) {
            $type->setExampleBase64Binary(FHIRBase64Binary::xmlUnserialize($children->exampleBase64Binary));
        }
        if (isset($attributes->exampleBoolean)) {
            $type->setExampleBoolean((string)$attributes->exampleBoolean);
        }
        if (isset($children->exampleBoolean)) {
            $type->setExampleBoolean(FHIRBoolean::xmlUnserialize($children->exampleBoolean));
        }
        if (isset($attributes->exampleCode)) {
            $type->setExampleCode((string)$attributes->exampleCode);
        }
        if (isset($children->exampleCode)) {
            $type->setExampleCode(FHIRCode::xmlUnserialize($children->exampleCode));
        }
        if (isset($children->exampleCodeableConcept)) {
            $type->setExampleCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->exampleCodeableConcept));
        }
        if (isset($children->exampleCoding)) {
            $type->setExampleCoding(FHIRCoding::xmlUnserialize($children->exampleCoding));
        }
        if (isset($children->exampleContact)) {
            $type->setExampleContact(FHIRContact::xmlUnserialize($children->exampleContact));
        }
        if (isset($attributes->exampleDate)) {
            $type->setExampleDate((string)$attributes->exampleDate);
        }
        if (isset($children->exampleDate)) {
            $type->setExampleDate(FHIRDate::xmlUnserialize($children->exampleDate));
        }
        if (isset($attributes->exampleDateTime)) {
            $type->setExampleDateTime((string)$attributes->exampleDateTime);
        }
        if (isset($children->exampleDateTime)) {
            $type->setExampleDateTime(FHIRDateTime::xmlUnserialize($children->exampleDateTime));
        }
        if (isset($attributes->exampleDecimal)) {
            $type->setExampleDecimal((string)$attributes->exampleDecimal);
        }
        if (isset($children->exampleDecimal)) {
            $type->setExampleDecimal(FHIRDecimal::xmlUnserialize($children->exampleDecimal));
        }
        if (isset($children->exampleHumanName)) {
            $type->setExampleHumanName(FHIRHumanName::xmlUnserialize($children->exampleHumanName));
        }
        if (isset($attributes->exampleId)) {
            $type->setExampleId((string)$attributes->exampleId);
        }
        if (isset($children->exampleId)) {
            $type->setExampleId(FHIRId::xmlUnserialize($children->exampleId));
        }
        if (isset($children->exampleIdentifier)) {
            $type->setExampleIdentifier(FHIRIdentifier::xmlUnserialize($children->exampleIdentifier));
        }
        if (isset($attributes->exampleInstant)) {
            $type->setExampleInstant((string)$attributes->exampleInstant);
        }
        if (isset($children->exampleInstant)) {
            $type->setExampleInstant(FHIRInstant::xmlUnserialize($children->exampleInstant));
        }
        if (isset($attributes->exampleInteger)) {
            $type->setExampleInteger((string)$attributes->exampleInteger);
        }
        if (isset($children->exampleInteger)) {
            $type->setExampleInteger(FHIRInteger::xmlUnserialize($children->exampleInteger));
        }
        if (isset($attributes->exampleOid)) {
            $type->setExampleOid((string)$attributes->exampleOid);
        }
        if (isset($children->exampleOid)) {
            $type->setExampleOid(FHIROid::xmlUnserialize($children->exampleOid));
        }
        if (isset($children->examplePeriod)) {
            $type->setExamplePeriod(FHIRPeriod::xmlUnserialize($children->examplePeriod));
        }
        if (isset($children->exampleQuantity)) {
            $type->setExampleQuantity(FHIRQuantity::xmlUnserialize($children->exampleQuantity));
        }
        if (isset($children->exampleRange)) {
            $type->setExampleRange(FHIRRange::xmlUnserialize($children->exampleRange));
        }
        if (isset($children->exampleRatio)) {
            $type->setExampleRatio(FHIRRatio::xmlUnserialize($children->exampleRatio));
        }
        if (isset($children->exampleResource)) {
            $type->setExampleResource(FHIRResourceReference::xmlUnserialize($children->exampleResource));
        }
        if (isset($children->exampleSampledData)) {
            $type->setExampleSampledData(FHIRSampledData::xmlUnserialize($children->exampleSampledData));
        }
        if (isset($children->exampleSchedule)) {
            $type->setExampleSchedule(FHIRSchedule::xmlUnserialize($children->exampleSchedule));
        }
        if (isset($attributes->exampleString)) {
            $type->setExampleString((string)$attributes->exampleString);
        }
        if (isset($children->exampleString)) {
            $type->setExampleString(FHIRString::xmlUnserialize($children->exampleString));
        }
        if (isset($attributes->exampleUri)) {
            $type->setExampleUri((string)$attributes->exampleUri);
        }
        if (isset($children->exampleUri)) {
            $type->setExampleUri(FHIRUri::xmlUnserialize($children->exampleUri));
        }
        if (isset($attributes->exampleUuid)) {
            $type->setExampleUuid((string)$attributes->exampleUuid);
        }
        if (isset($children->exampleUuid)) {
            $type->setExampleUuid(FHIRUuid::xmlUnserialize($children->exampleUuid));
        }
        if (isset($attributes->formal)) {
            $type->setFormal((string)$attributes->formal);
        }
        if (isset($children->formal)) {
            $type->setFormal(FHIRString::xmlUnserialize($children->formal));
        }
        if (isset($attributes->isModifier)) {
            $type->setIsModifier((string)$attributes->isModifier);
        }
        if (isset($children->isModifier)) {
            $type->setIsModifier(FHIRBoolean::xmlUnserialize($children->isModifier));
        }
        if (isset($children->mapping)) {
            foreach($children->mapping as $child) {
                $type->addMapping(FHIRProfileMapping1::xmlUnserialize($child));
            }
        }
        if (isset($attributes->max)) {
            $type->setMax((string)$attributes->max);
        }
        if (isset($children->max)) {
            $type->setMax(FHIRString::xmlUnserialize($children->max));
        }
        if (isset($attributes->maxLength)) {
            $type->setMaxLength((string)$attributes->maxLength);
        }
        if (isset($children->maxLength)) {
            $type->setMaxLength(FHIRInteger::xmlUnserialize($children->maxLength));
        }
        if (isset($attributes->min)) {
            $type->setMin((string)$attributes->min);
        }
        if (isset($children->min)) {
            $type->setMin(FHIRInteger::xmlUnserialize($children->min));
        }
        if (isset($attributes->mustSupport)) {
            $type->setMustSupport((string)$attributes->mustSupport);
        }
        if (isset($children->mustSupport)) {
            $type->setMustSupport(FHIRBoolean::xmlUnserialize($children->mustSupport));
        }
        if (isset($attributes->nameReference)) {
            $type->setNameReference((string)$attributes->nameReference);
        }
        if (isset($children->nameReference)) {
            $type->setNameReference(FHIRString::xmlUnserialize($children->nameReference));
        }
        if (isset($attributes->requirements)) {
            $type->setRequirements((string)$attributes->requirements);
        }
        if (isset($children->requirements)) {
            $type->setRequirements(FHIRString::xmlUnserialize($children->requirements));
        }
        if (isset($attributes->short)) {
            $type->setShort((string)$attributes->short);
        }
        if (isset($children->short)) {
            $type->setShort(FHIRString::xmlUnserialize($children->short));
        }
        if (isset($attributes->synonym)) {
            $type->addSynonym((string)$attributes->synonym);
        }
        if (isset($children->synonym)) {
            foreach($children->synonym as $child) {
                $type->addSynonym(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->type)) {
            foreach($children->type as $child) {
                $type->addType(FHIRProfileType::xmlUnserialize($child));
            }
        }
        if (isset($children->valueAddress)) {
            $type->setValueAddress(FHIRAddress::xmlUnserialize($children->valueAddress));
        }
        if (isset($children->valueAttachment)) {
            $type->setValueAttachment(FHIRAttachment::xmlUnserialize($children->valueAttachment));
        }
        if (isset($attributes->valueBase64Binary)) {
            $type->setValueBase64Binary((string)$attributes->valueBase64Binary);
        }
        if (isset($children->valueBase64Binary)) {
            $type->setValueBase64Binary(FHIRBase64Binary::xmlUnserialize($children->valueBase64Binary));
        }
        if (isset($attributes->valueBoolean)) {
            $type->setValueBoolean((string)$attributes->valueBoolean);
        }
        if (isset($children->valueBoolean)) {
            $type->setValueBoolean(FHIRBoolean::xmlUnserialize($children->valueBoolean));
        }
        if (isset($attributes->valueCode)) {
            $type->setValueCode((string)$attributes->valueCode);
        }
        if (isset($children->valueCode)) {
            $type->setValueCode(FHIRCode::xmlUnserialize($children->valueCode));
        }
        if (isset($children->valueCodeableConcept)) {
            $type->setValueCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->valueCodeableConcept));
        }
        if (isset($children->valueCoding)) {
            $type->setValueCoding(FHIRCoding::xmlUnserialize($children->valueCoding));
        }
        if (isset($children->valueContact)) {
            $type->setValueContact(FHIRContact::xmlUnserialize($children->valueContact));
        }
        if (isset($attributes->valueDate)) {
            $type->setValueDate((string)$attributes->valueDate);
        }
        if (isset($children->valueDate)) {
            $type->setValueDate(FHIRDate::xmlUnserialize($children->valueDate));
        }
        if (isset($attributes->valueDateTime)) {
            $type->setValueDateTime((string)$attributes->valueDateTime);
        }
        if (isset($children->valueDateTime)) {
            $type->setValueDateTime(FHIRDateTime::xmlUnserialize($children->valueDateTime));
        }
        if (isset($attributes->valueDecimal)) {
            $type->setValueDecimal((string)$attributes->valueDecimal);
        }
        if (isset($children->valueDecimal)) {
            $type->setValueDecimal(FHIRDecimal::xmlUnserialize($children->valueDecimal));
        }
        if (isset($children->valueHumanName)) {
            $type->setValueHumanName(FHIRHumanName::xmlUnserialize($children->valueHumanName));
        }
        if (isset($attributes->valueId)) {
            $type->setValueId((string)$attributes->valueId);
        }
        if (isset($children->valueId)) {
            $type->setValueId(FHIRId::xmlUnserialize($children->valueId));
        }
        if (isset($children->valueIdentifier)) {
            $type->setValueIdentifier(FHIRIdentifier::xmlUnserialize($children->valueIdentifier));
        }
        if (isset($attributes->valueInstant)) {
            $type->setValueInstant((string)$attributes->valueInstant);
        }
        if (isset($children->valueInstant)) {
            $type->setValueInstant(FHIRInstant::xmlUnserialize($children->valueInstant));
        }
        if (isset($attributes->valueInteger)) {
            $type->setValueInteger((string)$attributes->valueInteger);
        }
        if (isset($children->valueInteger)) {
            $type->setValueInteger(FHIRInteger::xmlUnserialize($children->valueInteger));
        }
        if (isset($attributes->valueOid)) {
            $type->setValueOid((string)$attributes->valueOid);
        }
        if (isset($children->valueOid)) {
            $type->setValueOid(FHIROid::xmlUnserialize($children->valueOid));
        }
        if (isset($children->valuePeriod)) {
            $type->setValuePeriod(FHIRPeriod::xmlUnserialize($children->valuePeriod));
        }
        if (isset($children->valueQuantity)) {
            $type->setValueQuantity(FHIRQuantity::xmlUnserialize($children->valueQuantity));
        }
        if (isset($children->valueRange)) {
            $type->setValueRange(FHIRRange::xmlUnserialize($children->valueRange));
        }
        if (isset($children->valueRatio)) {
            $type->setValueRatio(FHIRRatio::xmlUnserialize($children->valueRatio));
        }
        if (isset($children->valueResource)) {
            $type->setValueResource(FHIRResourceReference::xmlUnserialize($children->valueResource));
        }
        if (isset($children->valueSampledData)) {
            $type->setValueSampledData(FHIRSampledData::xmlUnserialize($children->valueSampledData));
        }
        if (isset($children->valueSchedule)) {
            $type->setValueSchedule(FHIRSchedule::xmlUnserialize($children->valueSchedule));
        }
        if (isset($attributes->valueString)) {
            $type->setValueString((string)$attributes->valueString);
        }
        if (isset($children->valueString)) {
            $type->setValueString(FHIRString::xmlUnserialize($children->valueString));
        }
        if (isset($attributes->valueUri)) {
            $type->setValueUri((string)$attributes->valueUri);
        }
        if (isset($children->valueUri)) {
            $type->setValueUri(FHIRUri::xmlUnserialize($children->valueUri));
        }
        if (isset($attributes->valueUuid)) {
            $type->setValueUuid((string)$attributes->valueUuid);
        }
        if (isset($children->valueUuid)) {
            $type->setValueUuid(FHIRUuid::xmlUnserialize($children->valueUuid));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ProfileDefinition xmlns="http://hl7.org/fhir"></ProfileDefinition>');
        }
        parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getBinding())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BINDING));
        }
        if (null !== ($v = $this->getComments())) {
            $sxe->addAttribute(self::FIELD_COMMENTS, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_COMMENTS));
            }
        }
        if ([] !== ($vs = $this->getCondition())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_CONDITION, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_CONDITION));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_CONDITION));
                }
            }
        }

        if ([] !== ($vs = $this->getConstraint())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONSTRAINT));
            }
        }

        if (null !== ($v = $this->getExampleAddress())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_ADDRESS));
        }

        if (null !== ($v = $this->getExampleAttachment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_ATTACHMENT));
        }
        if (null !== ($v = $this->getExampleBase64Binary())) {
            $sxe->addAttribute(self::FIELD_EXAMPLE_BASE_64BINARY, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_BASE_64BINARY));
            }
        }
        if (null !== ($v = $this->getExampleBoolean())) {
            $sxe->addAttribute(self::FIELD_EXAMPLE_BOOLEAN, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_BOOLEAN));
            }
        }
        if (null !== ($v = $this->getExampleCode())) {
            $sxe->addAttribute(self::FIELD_EXAMPLE_CODE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_CODE));
            }
        }

        if (null !== ($v = $this->getExampleCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_CODEABLE_CONCEPT));
        }

        if (null !== ($v = $this->getExampleCoding())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_CODING));
        }

        if (null !== ($v = $this->getExampleContact())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_CONTACT));
        }
        if (null !== ($v = $this->getExampleDate())) {
            $sxe->addAttribute(self::FIELD_EXAMPLE_DATE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_DATE));
            }
        }
        if (null !== ($v = $this->getExampleDateTime())) {
            $sxe->addAttribute(self::FIELD_EXAMPLE_DATE_TIME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_DATE_TIME));
            }
        }
        if (null !== ($v = $this->getExampleDecimal())) {
            $sxe->addAttribute(self::FIELD_EXAMPLE_DECIMAL, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_DECIMAL));
            }
        }

        if (null !== ($v = $this->getExampleHumanName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_HUMAN_NAME));
        }
        if (null !== ($v = $this->getExampleId())) {
            $sxe->addAttribute(self::FIELD_EXAMPLE_ID, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_ID));
            }
        }

        if (null !== ($v = $this->getExampleIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_IDENTIFIER));
        }
        if (null !== ($v = $this->getExampleInstant())) {
            $sxe->addAttribute(self::FIELD_EXAMPLE_INSTANT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_INSTANT));
            }
        }
        if (null !== ($v = $this->getExampleInteger())) {
            $sxe->addAttribute(self::FIELD_EXAMPLE_INTEGER, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_INTEGER));
            }
        }
        if (null !== ($v = $this->getExampleOid())) {
            $sxe->addAttribute(self::FIELD_EXAMPLE_OID, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_OID));
            }
        }

        if (null !== ($v = $this->getExamplePeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_PERIOD));
        }

        if (null !== ($v = $this->getExampleQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_QUANTITY));
        }

        if (null !== ($v = $this->getExampleRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_RANGE));
        }

        if (null !== ($v = $this->getExampleRatio())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_RATIO));
        }

        if (null !== ($v = $this->getExampleResource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_RESOURCE));
        }

        if (null !== ($v = $this->getExampleSampledData())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_SAMPLED_DATA));
        }

        if (null !== ($v = $this->getExampleSchedule())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_SCHEDULE));
        }
        if (null !== ($v = $this->getExampleString())) {
            $sxe->addAttribute(self::FIELD_EXAMPLE_STRING, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_STRING));
            }
        }
        if (null !== ($v = $this->getExampleUri())) {
            $sxe->addAttribute(self::FIELD_EXAMPLE_URI, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_URI));
            }
        }
        if (null !== ($v = $this->getExampleUuid())) {
            $sxe->addAttribute(self::FIELD_EXAMPLE_UUID, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_UUID));
            }
        }
        if (null !== ($v = $this->getFormal())) {
            $sxe->addAttribute(self::FIELD_FORMAL, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_FORMAL));
            }
        }
        if (null !== ($v = $this->getIsModifier())) {
            $sxe->addAttribute(self::FIELD_IS_MODIFIER, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_IS_MODIFIER));
            }
        }

        if ([] !== ($vs = $this->getMapping())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MAPPING));
            }
        }
        if (null !== ($v = $this->getMax())) {
            $sxe->addAttribute(self::FIELD_MAX, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_MAX));
            }
        }
        if (null !== ($v = $this->getMaxLength())) {
            $sxe->addAttribute(self::FIELD_MAX_LENGTH, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_MAX_LENGTH));
            }
        }
        if (null !== ($v = $this->getMin())) {
            $sxe->addAttribute(self::FIELD_MIN, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_MIN));
            }
        }
        if (null !== ($v = $this->getMustSupport())) {
            $sxe->addAttribute(self::FIELD_MUST_SUPPORT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_MUST_SUPPORT));
            }
        }
        if (null !== ($v = $this->getNameReference())) {
            $sxe->addAttribute(self::FIELD_NAME_REFERENCE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_NAME_REFERENCE));
            }
        }
        if (null !== ($v = $this->getRequirements())) {
            $sxe->addAttribute(self::FIELD_REQUIREMENTS, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_REQUIREMENTS));
            }
        }
        if (null !== ($v = $this->getShort())) {
            $sxe->addAttribute(self::FIELD_SHORT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_SHORT));
            }
        }
        if ([] !== ($vs = $this->getSynonym())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_SYNONYM, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_SYNONYM));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_SYNONYM));
                }
            }
        }

        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE));
            }
        }

        if (null !== ($v = $this->getValueAddress())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_ADDRESS));
        }

        if (null !== ($v = $this->getValueAttachment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_ATTACHMENT));
        }
        if (null !== ($v = $this->getValueBase64Binary())) {
            $sxe->addAttribute(self::FIELD_VALUE_BASE_64BINARY, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_BASE_64BINARY));
            }
        }
        if (null !== ($v = $this->getValueBoolean())) {
            $sxe->addAttribute(self::FIELD_VALUE_BOOLEAN, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_BOOLEAN));
            }
        }
        if (null !== ($v = $this->getValueCode())) {
            $sxe->addAttribute(self::FIELD_VALUE_CODE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_CODE));
            }
        }

        if (null !== ($v = $this->getValueCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_CODEABLE_CONCEPT));
        }

        if (null !== ($v = $this->getValueCoding())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_CODING));
        }

        if (null !== ($v = $this->getValueContact())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_CONTACT));
        }
        if (null !== ($v = $this->getValueDate())) {
            $sxe->addAttribute(self::FIELD_VALUE_DATE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_DATE));
            }
        }
        if (null !== ($v = $this->getValueDateTime())) {
            $sxe->addAttribute(self::FIELD_VALUE_DATE_TIME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_DATE_TIME));
            }
        }
        if (null !== ($v = $this->getValueDecimal())) {
            $sxe->addAttribute(self::FIELD_VALUE_DECIMAL, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_DECIMAL));
            }
        }

        if (null !== ($v = $this->getValueHumanName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_HUMAN_NAME));
        }
        if (null !== ($v = $this->getValueId())) {
            $sxe->addAttribute(self::FIELD_VALUE_ID, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_ID));
            }
        }

        if (null !== ($v = $this->getValueIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_IDENTIFIER));
        }
        if (null !== ($v = $this->getValueInstant())) {
            $sxe->addAttribute(self::FIELD_VALUE_INSTANT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_INSTANT));
            }
        }
        if (null !== ($v = $this->getValueInteger())) {
            $sxe->addAttribute(self::FIELD_VALUE_INTEGER, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_INTEGER));
            }
        }
        if (null !== ($v = $this->getValueOid())) {
            $sxe->addAttribute(self::FIELD_VALUE_OID, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_OID));
            }
        }

        if (null !== ($v = $this->getValuePeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_PERIOD));
        }

        if (null !== ($v = $this->getValueQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_QUANTITY));
        }

        if (null !== ($v = $this->getValueRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_RANGE));
        }

        if (null !== ($v = $this->getValueRatio())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_RATIO));
        }

        if (null !== ($v = $this->getValueResource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_RESOURCE));
        }

        if (null !== ($v = $this->getValueSampledData())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_SAMPLED_DATA));
        }

        if (null !== ($v = $this->getValueSchedule())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_SCHEDULE));
        }
        if (null !== ($v = $this->getValueString())) {
            $sxe->addAttribute(self::FIELD_VALUE_STRING, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_STRING));
            }
        }
        if (null !== ($v = $this->getValueUri())) {
            $sxe->addAttribute(self::FIELD_VALUE_URI, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_URI));
            }
        }
        if (null !== ($v = $this->getValueUuid())) {
            $sxe->addAttribute(self::FIELD_VALUE_UUID, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_UUID));
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
        if (null !== ($v = $this->getBinding())) {
            $a[self::FIELD_BINDING] = $v;
        }
        if (null !== ($v = $this->getComments())) {
            $a[self::FIELD_COMMENTS] = (string)$v;
            $a[self::FIELD_COMMENTS_EXT] = $v;
        }
        if ([] !== ($vs = $this->getCondition())) {
            $a[self::FIELD_CONDITION] = [];
            $a[self::FIELD_CONDITION_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_CONDITION][] = (string)$v;
                $a[self::FIELD_CONDITION_EXT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getConstraint())) {
            $a[self::FIELD_CONSTRAINT] = $vs;
        }
        if (null !== ($v = $this->getExampleAddress())) {
            $a[self::FIELD_EXAMPLE_ADDRESS] = $v;
        }
        if (null !== ($v = $this->getExampleAttachment())) {
            $a[self::FIELD_EXAMPLE_ATTACHMENT] = $v;
        }
        if (null !== ($v = $this->getExampleBase64Binary())) {
            $a[self::FIELD_EXAMPLE_BASE_64BINARY] = (string)$v;
            $a[self::FIELD_EXAMPLE_BASE_64BINARY_EXT] = $v;
        }
        if (null !== ($v = $this->getExampleBoolean())) {
            $a[self::FIELD_EXAMPLE_BOOLEAN] = (string)$v;
            $a[self::FIELD_EXAMPLE_BOOLEAN_EXT] = $v;
        }
        if (null !== ($v = $this->getExampleCode())) {
            $a[self::FIELD_EXAMPLE_CODE] = (string)$v;
            $a[self::FIELD_EXAMPLE_CODE_EXT] = $v;
        }
        if (null !== ($v = $this->getExampleCodeableConcept())) {
            $a[self::FIELD_EXAMPLE_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getExampleCoding())) {
            $a[self::FIELD_EXAMPLE_CODING] = $v;
        }
        if (null !== ($v = $this->getExampleContact())) {
            $a[self::FIELD_EXAMPLE_CONTACT] = $v;
        }
        if (null !== ($v = $this->getExampleDate())) {
            $a[self::FIELD_EXAMPLE_DATE] = (string)$v;
            $a[self::FIELD_EXAMPLE_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getExampleDateTime())) {
            $a[self::FIELD_EXAMPLE_DATE_TIME] = (string)$v;
            $a[self::FIELD_EXAMPLE_DATE_TIME_EXT] = $v;
        }
        if (null !== ($v = $this->getExampleDecimal())) {
            $a[self::FIELD_EXAMPLE_DECIMAL] = (string)$v;
            $a[self::FIELD_EXAMPLE_DECIMAL_EXT] = $v;
        }
        if (null !== ($v = $this->getExampleHumanName())) {
            $a[self::FIELD_EXAMPLE_HUMAN_NAME] = $v;
        }
        if (null !== ($v = $this->getExampleId())) {
            $a[self::FIELD_EXAMPLE_ID] = (string)$v;
            $a[self::FIELD_EXAMPLE_ID_EXT] = $v;
        }
        if (null !== ($v = $this->getExampleIdentifier())) {
            $a[self::FIELD_EXAMPLE_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getExampleInstant())) {
            $a[self::FIELD_EXAMPLE_INSTANT] = (string)$v;
            $a[self::FIELD_EXAMPLE_INSTANT_EXT] = $v;
        }
        if (null !== ($v = $this->getExampleInteger())) {
            $a[self::FIELD_EXAMPLE_INTEGER] = (string)$v;
            $a[self::FIELD_EXAMPLE_INTEGER_EXT] = $v;
        }
        if (null !== ($v = $this->getExampleOid())) {
            $a[self::FIELD_EXAMPLE_OID] = (string)$v;
            $a[self::FIELD_EXAMPLE_OID_EXT] = $v;
        }
        if (null !== ($v = $this->getExamplePeriod())) {
            $a[self::FIELD_EXAMPLE_PERIOD] = $v;
        }
        if (null !== ($v = $this->getExampleQuantity())) {
            $a[self::FIELD_EXAMPLE_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getExampleRange())) {
            $a[self::FIELD_EXAMPLE_RANGE] = $v;
        }
        if (null !== ($v = $this->getExampleRatio())) {
            $a[self::FIELD_EXAMPLE_RATIO] = $v;
        }
        if (null !== ($v = $this->getExampleResource())) {
            $a[self::FIELD_EXAMPLE_RESOURCE] = $v;
        }
        if (null !== ($v = $this->getExampleSampledData())) {
            $a[self::FIELD_EXAMPLE_SAMPLED_DATA] = $v;
        }
        if (null !== ($v = $this->getExampleSchedule())) {
            $a[self::FIELD_EXAMPLE_SCHEDULE] = $v;
        }
        if (null !== ($v = $this->getExampleString())) {
            $a[self::FIELD_EXAMPLE_STRING] = (string)$v;
            $a[self::FIELD_EXAMPLE_STRING_EXT] = $v;
        }
        if (null !== ($v = $this->getExampleUri())) {
            $a[self::FIELD_EXAMPLE_URI] = (string)$v;
            $a[self::FIELD_EXAMPLE_URI_EXT] = $v;
        }
        if (null !== ($v = $this->getExampleUuid())) {
            $a[self::FIELD_EXAMPLE_UUID] = (string)$v;
            $a[self::FIELD_EXAMPLE_UUID_EXT] = $v;
        }
        if (null !== ($v = $this->getFormal())) {
            $a[self::FIELD_FORMAL] = (string)$v;
            $a[self::FIELD_FORMAL_EXT] = $v;
        }
        if (null !== ($v = $this->getIsModifier())) {
            $a[self::FIELD_IS_MODIFIER] = (string)$v;
            $a[self::FIELD_IS_MODIFIER_EXT] = $v;
        }
        if ([] !== ($vs = $this->getMapping())) {
            $a[self::FIELD_MAPPING] = $vs;
        }
        if (null !== ($v = $this->getMax())) {
            $a[self::FIELD_MAX] = (string)$v;
            $a[self::FIELD_MAX_EXT] = $v;
        }
        if (null !== ($v = $this->getMaxLength())) {
            $a[self::FIELD_MAX_LENGTH] = (string)$v;
            $a[self::FIELD_MAX_LENGTH_EXT] = $v;
        }
        if (null !== ($v = $this->getMin())) {
            $a[self::FIELD_MIN] = (string)$v;
            $a[self::FIELD_MIN_EXT] = $v;
        }
        if (null !== ($v = $this->getMustSupport())) {
            $a[self::FIELD_MUST_SUPPORT] = (string)$v;
            $a[self::FIELD_MUST_SUPPORT_EXT] = $v;
        }
        if (null !== ($v = $this->getNameReference())) {
            $a[self::FIELD_NAME_REFERENCE] = (string)$v;
            $a[self::FIELD_NAME_REFERENCE_EXT] = $v;
        }
        if (null !== ($v = $this->getRequirements())) {
            $a[self::FIELD_REQUIREMENTS] = (string)$v;
            $a[self::FIELD_REQUIREMENTS_EXT] = $v;
        }
        if (null !== ($v = $this->getShort())) {
            $a[self::FIELD_SHORT] = (string)$v;
            $a[self::FIELD_SHORT_EXT] = $v;
        }
        if ([] !== ($vs = $this->getSynonym())) {
            $a[self::FIELD_SYNONYM] = [];
            $a[self::FIELD_SYNONYM_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_SYNONYM][] = (string)$v;
                $a[self::FIELD_SYNONYM_EXT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getType())) {
            $a[self::FIELD_TYPE] = $vs;
        }
        if (null !== ($v = $this->getValueAddress())) {
            $a[self::FIELD_VALUE_ADDRESS] = $v;
        }
        if (null !== ($v = $this->getValueAttachment())) {
            $a[self::FIELD_VALUE_ATTACHMENT] = $v;
        }
        if (null !== ($v = $this->getValueBase64Binary())) {
            $a[self::FIELD_VALUE_BASE_64BINARY] = (string)$v;
            $a[self::FIELD_VALUE_BASE_64BINARY_EXT] = $v;
        }
        if (null !== ($v = $this->getValueBoolean())) {
            $a[self::FIELD_VALUE_BOOLEAN] = (string)$v;
            $a[self::FIELD_VALUE_BOOLEAN_EXT] = $v;
        }
        if (null !== ($v = $this->getValueCode())) {
            $a[self::FIELD_VALUE_CODE] = (string)$v;
            $a[self::FIELD_VALUE_CODE_EXT] = $v;
        }
        if (null !== ($v = $this->getValueCodeableConcept())) {
            $a[self::FIELD_VALUE_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getValueCoding())) {
            $a[self::FIELD_VALUE_CODING] = $v;
        }
        if (null !== ($v = $this->getValueContact())) {
            $a[self::FIELD_VALUE_CONTACT] = $v;
        }
        if (null !== ($v = $this->getValueDate())) {
            $a[self::FIELD_VALUE_DATE] = (string)$v;
            $a[self::FIELD_VALUE_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getValueDateTime())) {
            $a[self::FIELD_VALUE_DATE_TIME] = (string)$v;
            $a[self::FIELD_VALUE_DATE_TIME_EXT] = $v;
        }
        if (null !== ($v = $this->getValueDecimal())) {
            $a[self::FIELD_VALUE_DECIMAL] = (string)$v;
            $a[self::FIELD_VALUE_DECIMAL_EXT] = $v;
        }
        if (null !== ($v = $this->getValueHumanName())) {
            $a[self::FIELD_VALUE_HUMAN_NAME] = $v;
        }
        if (null !== ($v = $this->getValueId())) {
            $a[self::FIELD_VALUE_ID] = (string)$v;
            $a[self::FIELD_VALUE_ID_EXT] = $v;
        }
        if (null !== ($v = $this->getValueIdentifier())) {
            $a[self::FIELD_VALUE_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getValueInstant())) {
            $a[self::FIELD_VALUE_INSTANT] = (string)$v;
            $a[self::FIELD_VALUE_INSTANT_EXT] = $v;
        }
        if (null !== ($v = $this->getValueInteger())) {
            $a[self::FIELD_VALUE_INTEGER] = (string)$v;
            $a[self::FIELD_VALUE_INTEGER_EXT] = $v;
        }
        if (null !== ($v = $this->getValueOid())) {
            $a[self::FIELD_VALUE_OID] = (string)$v;
            $a[self::FIELD_VALUE_OID_EXT] = $v;
        }
        if (null !== ($v = $this->getValuePeriod())) {
            $a[self::FIELD_VALUE_PERIOD] = $v;
        }
        if (null !== ($v = $this->getValueQuantity())) {
            $a[self::FIELD_VALUE_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getValueRange())) {
            $a[self::FIELD_VALUE_RANGE] = $v;
        }
        if (null !== ($v = $this->getValueRatio())) {
            $a[self::FIELD_VALUE_RATIO] = $v;
        }
        if (null !== ($v = $this->getValueResource())) {
            $a[self::FIELD_VALUE_RESOURCE] = $v;
        }
        if (null !== ($v = $this->getValueSampledData())) {
            $a[self::FIELD_VALUE_SAMPLED_DATA] = $v;
        }
        if (null !== ($v = $this->getValueSchedule())) {
            $a[self::FIELD_VALUE_SCHEDULE] = $v;
        }
        if (null !== ($v = $this->getValueString())) {
            $a[self::FIELD_VALUE_STRING] = (string)$v;
            $a[self::FIELD_VALUE_STRING_EXT] = $v;
        }
        if (null !== ($v = $this->getValueUri())) {
            $a[self::FIELD_VALUE_URI] = (string)$v;
            $a[self::FIELD_VALUE_URI_EXT] = $v;
        }
        if (null !== ($v = $this->getValueUuid())) {
            $a[self::FIELD_VALUE_UUID] = (string)$v;
            $a[self::FIELD_VALUE_UUID_EXT] = $v;
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