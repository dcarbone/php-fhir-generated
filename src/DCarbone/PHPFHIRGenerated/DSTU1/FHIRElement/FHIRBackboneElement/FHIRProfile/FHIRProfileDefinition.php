<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile;

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

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileBinding
     */
    protected $binding = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Comments about the use of the element, including notes about how to use the data
     * properly, exceptions to proper use, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $comments = null;

    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to an invariant that may make additional statements about the
     * cardinality or value in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId[]
     */
    protected $condition = [];

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
    protected $constraint = [];

    /**
     * There is a variety of postal address formats defined around the world. This
     * format defines a superset that is the basis for all addresses around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress
     */
    protected $exampleAddress = null;

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment
     */
    protected $exampleAttachment = null;

    /**
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary
     */
    protected $exampleBase64Binary = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    protected $exampleBoolean = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    protected $exampleCode = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected $exampleCodeableConcept = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding
     */
    protected $exampleCoding = null;

    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRContact
     */
    protected $exampleContact = null;

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate
     */
    protected $exampleDate = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    protected $exampleDateTime = null;

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal
     */
    protected $exampleDecimal = null;

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRHumanName
     */
    protected $exampleHumanName = null;

    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId
     */
    protected $exampleId = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier
     */
    protected $exampleIdentifier = null;

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant
     */
    protected $exampleInstant = null;

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    protected $exampleInteger = null;

    /**
     * An oid represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROid
     */
    protected $exampleOid = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    protected $examplePeriod = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity
     */
    protected $exampleQuantity = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRange
     */
    protected $exampleRange = null;

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRatio
     */
    protected $exampleRatio = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $exampleResource = null;

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSampledData
     */
    protected $exampleSampledData = null;

    /**
     * Specifies an event that may occur multiple times. Schedules are used for to
     * reord when things are expected or requested to occur.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule
     */
    protected $exampleSchedule = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $exampleString = null;

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    protected $exampleUri = null;

    /**
     * A UUID, represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUuid
     */
    protected $exampleUuid = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The definition SHALL be consistent with the base definition, but convey the
     * meaning of the element in the particular context of use of the resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $formal = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
    protected $isModifier = null;

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
    protected $mapping = [];

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $max = null;

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the shortest length that SHALL be supported by conformant instances
     * without truncation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    protected $maxLength = null;

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum number of times this element SHALL appear in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    protected $min = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, conformant resource authors SHALL be capable of providing a value for
     * the element and resource consumers SHALL be capable of extracting and doing
     * something useful with the data element. If false, the element may be ignored and
     * not supported.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    protected $mustSupport = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the name of a slice defined elsewhere in the profile whose
     * constraints should be applied to the current element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $nameReference = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Explains why this element is needed and why it's been constrained as it has.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $requirements = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A concise definition that is shown in the generated XML format that summarizes
     * profiles (used throughout the specification).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $short = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies additional names by which this element might also be known.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString[]
     */
    protected $synonym = [];

    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * The data type or resource that the value of this element is permitted to be.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileType[]
     */
    protected $type = [];

    /**
     * There is a variety of postal address formats defined around the world. This
     * format defines a superset that is the basis for all addresses around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress
     */
    protected $valueAddress = null;

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment
     */
    protected $valueAttachment = null;

    /**
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary
     */
    protected $valueBase64Binary = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    protected $valueBoolean = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    protected $valueCode = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected $valueCodeableConcept = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding
     */
    protected $valueCoding = null;

    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRContact
     */
    protected $valueContact = null;

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate
     */
    protected $valueDate = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    protected $valueDateTime = null;

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal
     */
    protected $valueDecimal = null;

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRHumanName
     */
    protected $valueHumanName = null;

    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId
     */
    protected $valueId = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier
     */
    protected $valueIdentifier = null;

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant
     */
    protected $valueInstant = null;

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    protected $valueInteger = null;

    /**
     * An oid represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROid
     */
    protected $valueOid = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    protected $valuePeriod = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity
     */
    protected $valueQuantity = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRange
     */
    protected $valueRange = null;

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRatio
     */
    protected $valueRatio = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $valueResource = null;

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSampledData
     */
    protected $valueSampledData = null;

    /**
     * Specifies an event that may occur multiple times. Schedules are used for to
     * reord when things are expected or requested to occur.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule
     */
    protected $valueSchedule = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $valueString = null;

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    protected $valueUri = null;

    /**
     * A UUID, represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUuid
     */
    protected $valueUuid = null;

    /**
     * Validation map for fields in type Profile.Definition
     * @var array
     */
    private static $_validationRules = [    ];

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
        if (isset($data[self::FIELD_COMMENTS]) || isset($data[self::FIELD_COMMENTS_EXT])) {
            if (isset($data[self::FIELD_COMMENTS])) {
                $value = $data[self::FIELD_COMMENTS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_COMMENTS_EXT]) && is_array($data[self::FIELD_COMMENTS_EXT])) {
                $ext = $data[self::FIELD_COMMENTS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setComments($value);
                } else if (is_array($value)) {
                    $this->setComments(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setComments(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setComments(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_CONDITION]) || isset($data[self::FIELD_CONDITION_EXT])) {
            if (isset($data[self::FIELD_CONDITION])) {
                $value = $data[self::FIELD_CONDITION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CONDITION_EXT]) && is_array($data[self::FIELD_CONDITION_EXT])) {
                $ext = $data[self::FIELD_CONDITION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->addCondition($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRId) {
                            $this->addCondition($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addCondition(new FHIRId(array_merge($v, $iext)));
                            } else {
                                $this->addCondition(new FHIRId([FHIRId::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addCondition(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->addCondition(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addCondition(new FHIRId($iext));
                }
            }
        }
        if (isset($data[self::FIELD_CONSTRAINT])) {
            if (is_array($data[self::FIELD_CONSTRAINT])) {
                foreach($data[self::FIELD_CONSTRAINT] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_EXAMPLE_BASE_64BINARY]) || isset($data[self::FIELD_EXAMPLE_BASE_64BINARY_EXT])) {
            if (isset($data[self::FIELD_EXAMPLE_BASE_64BINARY])) {
                $value = $data[self::FIELD_EXAMPLE_BASE_64BINARY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_EXAMPLE_BASE_64BINARY_EXT]) && is_array($data[self::FIELD_EXAMPLE_BASE_64BINARY_EXT])) {
                $ext = $data[self::FIELD_EXAMPLE_BASE_64BINARY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBase64Binary) {
                    $this->setExampleBase64Binary($value);
                } else if (is_array($value)) {
                    $this->setExampleBase64Binary(new FHIRBase64Binary(array_merge($ext, $value)));
                } else {
                    $this->setExampleBase64Binary(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setExampleBase64Binary(new FHIRBase64Binary($ext));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_BOOLEAN]) || isset($data[self::FIELD_EXAMPLE_BOOLEAN_EXT])) {
            if (isset($data[self::FIELD_EXAMPLE_BOOLEAN])) {
                $value = $data[self::FIELD_EXAMPLE_BOOLEAN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_EXAMPLE_BOOLEAN_EXT]) && is_array($data[self::FIELD_EXAMPLE_BOOLEAN_EXT])) {
                $ext = $data[self::FIELD_EXAMPLE_BOOLEAN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setExampleBoolean($value);
                } else if (is_array($value)) {
                    $this->setExampleBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setExampleBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setExampleBoolean(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_CODE]) || isset($data[self::FIELD_EXAMPLE_CODE_EXT])) {
            if (isset($data[self::FIELD_EXAMPLE_CODE])) {
                $value = $data[self::FIELD_EXAMPLE_CODE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_EXAMPLE_CODE_EXT]) && is_array($data[self::FIELD_EXAMPLE_CODE_EXT])) {
                $ext = $data[self::FIELD_EXAMPLE_CODE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setExampleCode($value);
                } else if (is_array($value)) {
                    $this->setExampleCode(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setExampleCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setExampleCode(new FHIRCode($ext));
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
        if (isset($data[self::FIELD_EXAMPLE_DATE]) || isset($data[self::FIELD_EXAMPLE_DATE_EXT])) {
            if (isset($data[self::FIELD_EXAMPLE_DATE])) {
                $value = $data[self::FIELD_EXAMPLE_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_EXAMPLE_DATE_EXT]) && is_array($data[self::FIELD_EXAMPLE_DATE_EXT])) {
                $ext = $data[self::FIELD_EXAMPLE_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setExampleDate($value);
                } else if (is_array($value)) {
                    $this->setExampleDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setExampleDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setExampleDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_DATE_TIME]) || isset($data[self::FIELD_EXAMPLE_DATE_TIME_EXT])) {
            if (isset($data[self::FIELD_EXAMPLE_DATE_TIME])) {
                $value = $data[self::FIELD_EXAMPLE_DATE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_EXAMPLE_DATE_TIME_EXT]) && is_array($data[self::FIELD_EXAMPLE_DATE_TIME_EXT])) {
                $ext = $data[self::FIELD_EXAMPLE_DATE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setExampleDateTime($value);
                } else if (is_array($value)) {
                    $this->setExampleDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setExampleDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setExampleDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_DECIMAL]) || isset($data[self::FIELD_EXAMPLE_DECIMAL_EXT])) {
            if (isset($data[self::FIELD_EXAMPLE_DECIMAL])) {
                $value = $data[self::FIELD_EXAMPLE_DECIMAL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_EXAMPLE_DECIMAL_EXT]) && is_array($data[self::FIELD_EXAMPLE_DECIMAL_EXT])) {
                $ext = $data[self::FIELD_EXAMPLE_DECIMAL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setExampleDecimal($value);
                } else if (is_array($value)) {
                    $this->setExampleDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setExampleDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setExampleDecimal(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_HUMAN_NAME])) {
            if ($data[self::FIELD_EXAMPLE_HUMAN_NAME] instanceof FHIRHumanName) {
                $this->setExampleHumanName($data[self::FIELD_EXAMPLE_HUMAN_NAME]);
            } else {
                $this->setExampleHumanName(new FHIRHumanName($data[self::FIELD_EXAMPLE_HUMAN_NAME]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_ID]) || isset($data[self::FIELD_EXAMPLE_ID_EXT])) {
            if (isset($data[self::FIELD_EXAMPLE_ID])) {
                $value = $data[self::FIELD_EXAMPLE_ID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_EXAMPLE_ID_EXT]) && is_array($data[self::FIELD_EXAMPLE_ID_EXT])) {
                $ext = $data[self::FIELD_EXAMPLE_ID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setExampleId($value);
                } else if (is_array($value)) {
                    $this->setExampleId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setExampleId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setExampleId(new FHIRId($ext));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_IDENTIFIER])) {
            if ($data[self::FIELD_EXAMPLE_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setExampleIdentifier($data[self::FIELD_EXAMPLE_IDENTIFIER]);
            } else {
                $this->setExampleIdentifier(new FHIRIdentifier($data[self::FIELD_EXAMPLE_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_INSTANT]) || isset($data[self::FIELD_EXAMPLE_INSTANT_EXT])) {
            if (isset($data[self::FIELD_EXAMPLE_INSTANT])) {
                $value = $data[self::FIELD_EXAMPLE_INSTANT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_EXAMPLE_INSTANT_EXT]) && is_array($data[self::FIELD_EXAMPLE_INSTANT_EXT])) {
                $ext = $data[self::FIELD_EXAMPLE_INSTANT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setExampleInstant($value);
                } else if (is_array($value)) {
                    $this->setExampleInstant(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setExampleInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setExampleInstant(new FHIRInstant($ext));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_INTEGER]) || isset($data[self::FIELD_EXAMPLE_INTEGER_EXT])) {
            if (isset($data[self::FIELD_EXAMPLE_INTEGER])) {
                $value = $data[self::FIELD_EXAMPLE_INTEGER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_EXAMPLE_INTEGER_EXT]) && is_array($data[self::FIELD_EXAMPLE_INTEGER_EXT])) {
                $ext = $data[self::FIELD_EXAMPLE_INTEGER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setExampleInteger($value);
                } else if (is_array($value)) {
                    $this->setExampleInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setExampleInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setExampleInteger(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_OID]) || isset($data[self::FIELD_EXAMPLE_OID_EXT])) {
            if (isset($data[self::FIELD_EXAMPLE_OID])) {
                $value = $data[self::FIELD_EXAMPLE_OID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_EXAMPLE_OID_EXT]) && is_array($data[self::FIELD_EXAMPLE_OID_EXT])) {
                $ext = $data[self::FIELD_EXAMPLE_OID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIROid) {
                    $this->setExampleOid($value);
                } else if (is_array($value)) {
                    $this->setExampleOid(new FHIROid(array_merge($ext, $value)));
                } else {
                    $this->setExampleOid(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setExampleOid(new FHIROid($ext));
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
        if (isset($data[self::FIELD_EXAMPLE_STRING]) || isset($data[self::FIELD_EXAMPLE_STRING_EXT])) {
            if (isset($data[self::FIELD_EXAMPLE_STRING])) {
                $value = $data[self::FIELD_EXAMPLE_STRING];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_EXAMPLE_STRING_EXT]) && is_array($data[self::FIELD_EXAMPLE_STRING_EXT])) {
                $ext = $data[self::FIELD_EXAMPLE_STRING_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setExampleString($value);
                } else if (is_array($value)) {
                    $this->setExampleString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setExampleString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setExampleString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_URI]) || isset($data[self::FIELD_EXAMPLE_URI_EXT])) {
            if (isset($data[self::FIELD_EXAMPLE_URI])) {
                $value = $data[self::FIELD_EXAMPLE_URI];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_EXAMPLE_URI_EXT]) && is_array($data[self::FIELD_EXAMPLE_URI_EXT])) {
                $ext = $data[self::FIELD_EXAMPLE_URI_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setExampleUri($value);
                } else if (is_array($value)) {
                    $this->setExampleUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setExampleUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setExampleUri(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_UUID]) || isset($data[self::FIELD_EXAMPLE_UUID_EXT])) {
            if (isset($data[self::FIELD_EXAMPLE_UUID])) {
                $value = $data[self::FIELD_EXAMPLE_UUID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_EXAMPLE_UUID_EXT]) && is_array($data[self::FIELD_EXAMPLE_UUID_EXT])) {
                $ext = $data[self::FIELD_EXAMPLE_UUID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUuid) {
                    $this->setExampleUuid($value);
                } else if (is_array($value)) {
                    $this->setExampleUuid(new FHIRUuid(array_merge($ext, $value)));
                } else {
                    $this->setExampleUuid(new FHIRUuid([FHIRUuid::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setExampleUuid(new FHIRUuid($ext));
            }
        }
        if (isset($data[self::FIELD_FORMAL]) || isset($data[self::FIELD_FORMAL_EXT])) {
            if (isset($data[self::FIELD_FORMAL])) {
                $value = $data[self::FIELD_FORMAL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FORMAL_EXT]) && is_array($data[self::FIELD_FORMAL_EXT])) {
                $ext = $data[self::FIELD_FORMAL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setFormal($value);
                } else if (is_array($value)) {
                    $this->setFormal(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setFormal(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFormal(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_IS_MODIFIER]) || isset($data[self::FIELD_IS_MODIFIER_EXT])) {
            if (isset($data[self::FIELD_IS_MODIFIER])) {
                $value = $data[self::FIELD_IS_MODIFIER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_IS_MODIFIER_EXT]) && is_array($data[self::FIELD_IS_MODIFIER_EXT])) {
                $ext = $data[self::FIELD_IS_MODIFIER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setIsModifier($value);
                } else if (is_array($value)) {
                    $this->setIsModifier(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setIsModifier(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setIsModifier(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_MAPPING])) {
            if (is_array($data[self::FIELD_MAPPING])) {
                foreach($data[self::FIELD_MAPPING] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_MAX]) || isset($data[self::FIELD_MAX_EXT])) {
            if (isset($data[self::FIELD_MAX])) {
                $value = $data[self::FIELD_MAX];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MAX_EXT]) && is_array($data[self::FIELD_MAX_EXT])) {
                $ext = $data[self::FIELD_MAX_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setMax($value);
                } else if (is_array($value)) {
                    $this->setMax(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setMax(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMax(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_MAX_LENGTH]) || isset($data[self::FIELD_MAX_LENGTH_EXT])) {
            if (isset($data[self::FIELD_MAX_LENGTH])) {
                $value = $data[self::FIELD_MAX_LENGTH];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MAX_LENGTH_EXT]) && is_array($data[self::FIELD_MAX_LENGTH_EXT])) {
                $ext = $data[self::FIELD_MAX_LENGTH_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setMaxLength($value);
                } else if (is_array($value)) {
                    $this->setMaxLength(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setMaxLength(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMaxLength(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_MIN]) || isset($data[self::FIELD_MIN_EXT])) {
            if (isset($data[self::FIELD_MIN])) {
                $value = $data[self::FIELD_MIN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MIN_EXT]) && is_array($data[self::FIELD_MIN_EXT])) {
                $ext = $data[self::FIELD_MIN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setMin($value);
                } else if (is_array($value)) {
                    $this->setMin(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setMin(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMin(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_MUST_SUPPORT]) || isset($data[self::FIELD_MUST_SUPPORT_EXT])) {
            if (isset($data[self::FIELD_MUST_SUPPORT])) {
                $value = $data[self::FIELD_MUST_SUPPORT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MUST_SUPPORT_EXT]) && is_array($data[self::FIELD_MUST_SUPPORT_EXT])) {
                $ext = $data[self::FIELD_MUST_SUPPORT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setMustSupport($value);
                } else if (is_array($value)) {
                    $this->setMustSupport(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setMustSupport(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMustSupport(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_NAME_REFERENCE]) || isset($data[self::FIELD_NAME_REFERENCE_EXT])) {
            if (isset($data[self::FIELD_NAME_REFERENCE])) {
                $value = $data[self::FIELD_NAME_REFERENCE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_NAME_REFERENCE_EXT]) && is_array($data[self::FIELD_NAME_REFERENCE_EXT])) {
                $ext = $data[self::FIELD_NAME_REFERENCE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setNameReference($value);
                } else if (is_array($value)) {
                    $this->setNameReference(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setNameReference(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setNameReference(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_REQUIREMENTS]) || isset($data[self::FIELD_REQUIREMENTS_EXT])) {
            if (isset($data[self::FIELD_REQUIREMENTS])) {
                $value = $data[self::FIELD_REQUIREMENTS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_REQUIREMENTS_EXT]) && is_array($data[self::FIELD_REQUIREMENTS_EXT])) {
                $ext = $data[self::FIELD_REQUIREMENTS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setRequirements($value);
                } else if (is_array($value)) {
                    $this->setRequirements(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setRequirements(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setRequirements(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SHORT]) || isset($data[self::FIELD_SHORT_EXT])) {
            if (isset($data[self::FIELD_SHORT])) {
                $value = $data[self::FIELD_SHORT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SHORT_EXT]) && is_array($data[self::FIELD_SHORT_EXT])) {
                $ext = $data[self::FIELD_SHORT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setShort($value);
                } else if (is_array($value)) {
                    $this->setShort(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setShort(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setShort(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SYNONYM]) || isset($data[self::FIELD_SYNONYM_EXT])) {
            if (isset($data[self::FIELD_SYNONYM])) {
                $value = $data[self::FIELD_SYNONYM];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SYNONYM_EXT]) && is_array($data[self::FIELD_SYNONYM_EXT])) {
                $ext = $data[self::FIELD_SYNONYM_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addSynonym($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addSynonym($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addSynonym(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addSynonym(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addSynonym(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addSynonym(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addSynonym(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if (is_array($data[self::FIELD_TYPE])) {
                foreach($data[self::FIELD_TYPE] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_VALUE_BASE_64BINARY]) || isset($data[self::FIELD_VALUE_BASE_64BINARY_EXT])) {
            if (isset($data[self::FIELD_VALUE_BASE_64BINARY])) {
                $value = $data[self::FIELD_VALUE_BASE_64BINARY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_BASE_64BINARY_EXT]) && is_array($data[self::FIELD_VALUE_BASE_64BINARY_EXT])) {
                $ext = $data[self::FIELD_VALUE_BASE_64BINARY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBase64Binary) {
                    $this->setValueBase64Binary($value);
                } else if (is_array($value)) {
                    $this->setValueBase64Binary(new FHIRBase64Binary(array_merge($ext, $value)));
                } else {
                    $this->setValueBase64Binary(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueBase64Binary(new FHIRBase64Binary($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_BOOLEAN]) || isset($data[self::FIELD_VALUE_BOOLEAN_EXT])) {
            if (isset($data[self::FIELD_VALUE_BOOLEAN])) {
                $value = $data[self::FIELD_VALUE_BOOLEAN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_BOOLEAN_EXT]) && is_array($data[self::FIELD_VALUE_BOOLEAN_EXT])) {
                $ext = $data[self::FIELD_VALUE_BOOLEAN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setValueBoolean($value);
                } else if (is_array($value)) {
                    $this->setValueBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setValueBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueBoolean(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_CODE]) || isset($data[self::FIELD_VALUE_CODE_EXT])) {
            if (isset($data[self::FIELD_VALUE_CODE])) {
                $value = $data[self::FIELD_VALUE_CODE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_CODE_EXT]) && is_array($data[self::FIELD_VALUE_CODE_EXT])) {
                $ext = $data[self::FIELD_VALUE_CODE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setValueCode($value);
                } else if (is_array($value)) {
                    $this->setValueCode(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setValueCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueCode(new FHIRCode($ext));
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
        if (isset($data[self::FIELD_VALUE_DATE]) || isset($data[self::FIELD_VALUE_DATE_EXT])) {
            if (isset($data[self::FIELD_VALUE_DATE])) {
                $value = $data[self::FIELD_VALUE_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_DATE_EXT]) && is_array($data[self::FIELD_VALUE_DATE_EXT])) {
                $ext = $data[self::FIELD_VALUE_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setValueDate($value);
                } else if (is_array($value)) {
                    $this->setValueDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setValueDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_DATE_TIME]) || isset($data[self::FIELD_VALUE_DATE_TIME_EXT])) {
            if (isset($data[self::FIELD_VALUE_DATE_TIME])) {
                $value = $data[self::FIELD_VALUE_DATE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_DATE_TIME_EXT]) && is_array($data[self::FIELD_VALUE_DATE_TIME_EXT])) {
                $ext = $data[self::FIELD_VALUE_DATE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setValueDateTime($value);
                } else if (is_array($value)) {
                    $this->setValueDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setValueDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_DECIMAL]) || isset($data[self::FIELD_VALUE_DECIMAL_EXT])) {
            if (isset($data[self::FIELD_VALUE_DECIMAL])) {
                $value = $data[self::FIELD_VALUE_DECIMAL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_DECIMAL_EXT]) && is_array($data[self::FIELD_VALUE_DECIMAL_EXT])) {
                $ext = $data[self::FIELD_VALUE_DECIMAL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setValueDecimal($value);
                } else if (is_array($value)) {
                    $this->setValueDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setValueDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueDecimal(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_HUMAN_NAME])) {
            if ($data[self::FIELD_VALUE_HUMAN_NAME] instanceof FHIRHumanName) {
                $this->setValueHumanName($data[self::FIELD_VALUE_HUMAN_NAME]);
            } else {
                $this->setValueHumanName(new FHIRHumanName($data[self::FIELD_VALUE_HUMAN_NAME]));
            }
        }
        if (isset($data[self::FIELD_VALUE_ID]) || isset($data[self::FIELD_VALUE_ID_EXT])) {
            if (isset($data[self::FIELD_VALUE_ID])) {
                $value = $data[self::FIELD_VALUE_ID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_ID_EXT]) && is_array($data[self::FIELD_VALUE_ID_EXT])) {
                $ext = $data[self::FIELD_VALUE_ID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setValueId($value);
                } else if (is_array($value)) {
                    $this->setValueId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setValueId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueId(new FHIRId($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_IDENTIFIER])) {
            if ($data[self::FIELD_VALUE_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setValueIdentifier($data[self::FIELD_VALUE_IDENTIFIER]);
            } else {
                $this->setValueIdentifier(new FHIRIdentifier($data[self::FIELD_VALUE_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_VALUE_INSTANT]) || isset($data[self::FIELD_VALUE_INSTANT_EXT])) {
            if (isset($data[self::FIELD_VALUE_INSTANT])) {
                $value = $data[self::FIELD_VALUE_INSTANT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_INSTANT_EXT]) && is_array($data[self::FIELD_VALUE_INSTANT_EXT])) {
                $ext = $data[self::FIELD_VALUE_INSTANT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setValueInstant($value);
                } else if (is_array($value)) {
                    $this->setValueInstant(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setValueInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueInstant(new FHIRInstant($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_INTEGER]) || isset($data[self::FIELD_VALUE_INTEGER_EXT])) {
            if (isset($data[self::FIELD_VALUE_INTEGER])) {
                $value = $data[self::FIELD_VALUE_INTEGER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_INTEGER_EXT]) && is_array($data[self::FIELD_VALUE_INTEGER_EXT])) {
                $ext = $data[self::FIELD_VALUE_INTEGER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setValueInteger($value);
                } else if (is_array($value)) {
                    $this->setValueInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setValueInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueInteger(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_OID]) || isset($data[self::FIELD_VALUE_OID_EXT])) {
            if (isset($data[self::FIELD_VALUE_OID])) {
                $value = $data[self::FIELD_VALUE_OID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_OID_EXT]) && is_array($data[self::FIELD_VALUE_OID_EXT])) {
                $ext = $data[self::FIELD_VALUE_OID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIROid) {
                    $this->setValueOid($value);
                } else if (is_array($value)) {
                    $this->setValueOid(new FHIROid(array_merge($ext, $value)));
                } else {
                    $this->setValueOid(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueOid(new FHIROid($ext));
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
        if (isset($data[self::FIELD_VALUE_STRING]) || isset($data[self::FIELD_VALUE_STRING_EXT])) {
            if (isset($data[self::FIELD_VALUE_STRING])) {
                $value = $data[self::FIELD_VALUE_STRING];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_STRING_EXT]) && is_array($data[self::FIELD_VALUE_STRING_EXT])) {
                $ext = $data[self::FIELD_VALUE_STRING_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setValueString($value);
                } else if (is_array($value)) {
                    $this->setValueString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setValueString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_URI]) || isset($data[self::FIELD_VALUE_URI_EXT])) {
            if (isset($data[self::FIELD_VALUE_URI])) {
                $value = $data[self::FIELD_VALUE_URI];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_URI_EXT]) && is_array($data[self::FIELD_VALUE_URI_EXT])) {
                $ext = $data[self::FIELD_VALUE_URI_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setValueUri($value);
                } else if (is_array($value)) {
                    $this->setValueUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setValueUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueUri(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_UUID]) || isset($data[self::FIELD_VALUE_UUID_EXT])) {
            if (isset($data[self::FIELD_VALUE_UUID])) {
                $value = $data[self::FIELD_VALUE_UUID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_UUID_EXT]) && is_array($data[self::FIELD_VALUE_UUID_EXT])) {
                $ext = $data[self::FIELD_VALUE_UUID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUuid) {
                    $this->setValueUuid($value);
                } else if (is_array($value)) {
                    $this->setValueUuid(new FHIRUuid(array_merge($ext, $value)));
                } else {
                    $this->setValueUuid(new FHIRUuid([FHIRUuid::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueUuid(new FHIRUuid($ext));
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
        return "<ProfileDefinition{$xmlns}></ProfileDefinition>";
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
     * @return static
     */
    public function setBinding(FHIRProfileBinding $binding = null)
    {
        $this->binding = $binding;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Comments about the use of the element, including notes about how to use the data
     * properly, exceptions to proper use, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $comments
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id referenced from
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to an invariant that may make additional statements about the
     * cardinality or value in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId $condition
     * @return static
     */
    public function addCondition($condition = null)
    {
        if (null === $condition) {
            $this->condition = [];
            return $this;
        }
        if ($condition instanceof FHIRId) {
            $this->condition[] = $condition;
            return $this;
        }
        $this->condition[] = new FHIRId($condition);
        return $this;
    }

    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to an invariant that may make additional statements about the
     * cardinality or value in the instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId[] $condition
     * @return static
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
     * @return static
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
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress $exampleAddress
     * @return static
     */
    public function setExampleAddress(FHIRAddress $exampleAddress = null)
    {
        $this->exampleAddress = $exampleAddress;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment $exampleAttachment
     * @return static
     */
    public function setExampleAttachment(FHIRAttachment $exampleAttachment = null)
    {
        $this->exampleAttachment = $exampleAttachment;
        return $this;
    }

    /**
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary $exampleBase64Binary
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean $exampleBoolean
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id referenced from
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode $exampleCode
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $exampleCodeableConcept
     * @return static
     */
    public function setExampleCodeableConcept(FHIRCodeableConcept $exampleCodeableConcept = null)
    {
        $this->exampleCodeableConcept = $exampleCodeableConcept;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding $exampleCoding
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRContact $exampleContact
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate $exampleDate
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime $exampleDateTime
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal $exampleDecimal
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRHumanName $exampleHumanName
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id referenced from
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId $exampleId
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier $exampleIdentifier
     * @return static
     */
    public function setExampleIdentifier(FHIRIdentifier $exampleIdentifier = null)
    {
        $this->exampleIdentifier = $exampleIdentifier;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant $exampleInstant
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $exampleInteger
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id referenced from
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROid $exampleOid
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod $examplePeriod
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity $exampleQuantity
     * @return static
     */
    public function setExampleQuantity(FHIRQuantity $exampleQuantity = null)
    {
        $this->exampleQuantity = $exampleQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRange $exampleRange
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRatio $exampleRatio
     * @return static
     */
    public function setExampleRatio(FHIRRatio $exampleRatio = null)
    {
        $this->exampleRatio = $exampleRatio;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $exampleResource
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSampledData $exampleSampledData
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule $exampleSchedule
     * @return static
     */
    public function setExampleSchedule(FHIRSchedule $exampleSchedule = null)
    {
        $this->exampleSchedule = $exampleSchedule;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $exampleString
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri $exampleUri
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id referenced from
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUuid $exampleUuid
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The definition SHALL be consistent with the base definition, but convey the
     * meaning of the element in the particular context of use of the resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $formal
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, the value of this element affects the interpretation of the element or
     * resource that contains it, and the value of the element cannot be ignored.
     * Typically, this is used for status, negation and qualification codes. The effect
     * of this is that the element cannot be ignored by systems: they SHALL either
     * recognize the element and process it, and/or a pre-determination has been made
     * that it is not relevant to their particular system.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean $isModifier
     * @return static
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
     * @return static
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
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $max
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the shortest length that SHALL be supported by conformant instances
     * without truncation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $maxLength
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum number of times this element SHALL appear in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $min
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, conformant resource authors SHALL be capable of providing a value for
     * the element and resource consumers SHALL be capable of extracting and doing
     * something useful with the data element. If false, the element may be ignored and
     * not supported.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean $mustSupport
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the name of a slice defined elsewhere in the profile whose
     * constraints should be applied to the current element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $nameReference
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Explains why this element is needed and why it's been constrained as it has.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $requirements
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A concise definition that is shown in the generated XML format that summarizes
     * profiles (used throughout the specification).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $short
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies additional names by which this element might also be known.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $synonym
     * @return static
     */
    public function addSynonym($synonym = null)
    {
        if (null === $synonym) {
            $this->synonym = [];
            return $this;
        }
        if ($synonym instanceof FHIRString) {
            $this->synonym[] = $synonym;
            return $this;
        }
        $this->synonym[] = new FHIRString($synonym);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies additional names by which this element might also be known.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString[] $synonym
     * @return static
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
     * @return static
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
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress $valueAddress
     * @return static
     */
    public function setValueAddress(FHIRAddress $valueAddress = null)
    {
        $this->valueAddress = $valueAddress;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment $valueAttachment
     * @return static
     */
    public function setValueAttachment(FHIRAttachment $valueAttachment = null)
    {
        $this->valueAttachment = $valueAttachment;
        return $this;
    }

    /**
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary $valueBase64Binary
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean $valueBoolean
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id referenced from
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode $valueCode
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $valueCodeableConcept
     * @return static
     */
    public function setValueCodeableConcept(FHIRCodeableConcept $valueCodeableConcept = null)
    {
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding $valueCoding
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRContact $valueContact
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate $valueDate
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime $valueDateTime
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal $valueDecimal
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRHumanName $valueHumanName
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id referenced from
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId $valueId
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier $valueIdentifier
     * @return static
     */
    public function setValueIdentifier(FHIRIdentifier $valueIdentifier = null)
    {
        $this->valueIdentifier = $valueIdentifier;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant $valueInstant
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $valueInteger
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id referenced from
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROid $valueOid
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod $valuePeriod
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity $valueQuantity
     * @return static
     */
    public function setValueQuantity(FHIRQuantity $valueQuantity = null)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRange $valueRange
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRatio $valueRatio
     * @return static
     */
    public function setValueRatio(FHIRRatio $valueRatio = null)
    {
        $this->valueRatio = $valueRatio;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $valueResource
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSampledData $valueSampledData
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule $valueSchedule
     * @return static
     */
    public function setValueSchedule(FHIRSchedule $valueSchedule = null)
    {
        $this->valueSchedule = $valueSchedule;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $valueString
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri $valueUri
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id referenced from
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUuid $valueUuid
     * @return static
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
        if (null !== ($v = $this->getBinding())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BINDING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getComments())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMMENTS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCondition())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONDITION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getConstraint())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONSTRAINT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getExampleAddress())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_ADDRESS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleAttachment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_ATTACHMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleBase64Binary())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_BASE_64BINARY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_BOOLEAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleCoding())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_CODING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleContact())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_CONTACT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleDecimal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_DECIMAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleHumanName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_HUMAN_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleInstant())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_INSTANT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleInteger())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_INTEGER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleOid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_OID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExamplePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleRatio())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_RATIO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleResource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_RESOURCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleSampledData())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_SAMPLED_DATA] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleSchedule())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_SCHEDULE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleUri())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_URI] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleUuid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_UUID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFormal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FORMAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIsModifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IS_MODIFIER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getMapping())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MAPPING, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getMax())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxLength())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_LENGTH] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMin())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MIN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMustSupport())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MUST_SUPPORT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNameReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequirements())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUIREMENTS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getShort())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SHORT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSynonym())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SYNONYM, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getValueAddress())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_ADDRESS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueAttachment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_ATTACHMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueBase64Binary())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_BASE_64BINARY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_BOOLEAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueCoding())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_CODING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueContact())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_CONTACT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueDecimal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_DECIMAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueHumanName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_HUMAN_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueInstant())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_INSTANT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueInteger())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_INTEGER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueOid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_OID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValuePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueRatio())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_RATIO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueResource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_RESOURCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueSampledData())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_SAMPLED_DATA] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueSchedule())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_SCHEDULE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueUri())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_URI] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueUuid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_UUID] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_BINDING])) {
            $v = $this->getBinding();
            foreach($validationRules[self::FIELD_BINDING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_BINDING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BINDING])) {
                        $errs[self::FIELD_BINDING] = [];
                    }
                    $errs[self::FIELD_BINDING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMMENTS])) {
            $v = $this->getComments();
            foreach($validationRules[self::FIELD_COMMENTS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_COMMENTS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMMENTS])) {
                        $errs[self::FIELD_COMMENTS] = [];
                    }
                    $errs[self::FIELD_COMMENTS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONDITION])) {
            $v = $this->getCondition();
            foreach($validationRules[self::FIELD_CONDITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_CONDITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONDITION])) {
                        $errs[self::FIELD_CONDITION] = [];
                    }
                    $errs[self::FIELD_CONDITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONSTRAINT])) {
            $v = $this->getConstraint();
            foreach($validationRules[self::FIELD_CONSTRAINT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_CONSTRAINT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONSTRAINT])) {
                        $errs[self::FIELD_CONSTRAINT] = [];
                    }
                    $errs[self::FIELD_CONSTRAINT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_ADDRESS])) {
            $v = $this->getExampleAddress();
            foreach($validationRules[self::FIELD_EXAMPLE_ADDRESS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_EXAMPLE_ADDRESS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_ADDRESS])) {
                        $errs[self::FIELD_EXAMPLE_ADDRESS] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_ADDRESS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_ATTACHMENT])) {
            $v = $this->getExampleAttachment();
            foreach($validationRules[self::FIELD_EXAMPLE_ATTACHMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_EXAMPLE_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_ATTACHMENT])) {
                        $errs[self::FIELD_EXAMPLE_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_ATTACHMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_BASE_64BINARY])) {
            $v = $this->getExampleBase64Binary();
            foreach($validationRules[self::FIELD_EXAMPLE_BASE_64BINARY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_EXAMPLE_BASE_64BINARY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_BASE_64BINARY])) {
                        $errs[self::FIELD_EXAMPLE_BASE_64BINARY] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_BASE_64BINARY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_BOOLEAN])) {
            $v = $this->getExampleBoolean();
            foreach($validationRules[self::FIELD_EXAMPLE_BOOLEAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_EXAMPLE_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_BOOLEAN])) {
                        $errs[self::FIELD_EXAMPLE_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_CODE])) {
            $v = $this->getExampleCode();
            foreach($validationRules[self::FIELD_EXAMPLE_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_EXAMPLE_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_CODE])) {
                        $errs[self::FIELD_EXAMPLE_CODE] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_CODEABLE_CONCEPT])) {
            $v = $this->getExampleCodeableConcept();
            foreach($validationRules[self::FIELD_EXAMPLE_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_EXAMPLE_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_EXAMPLE_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_CODING])) {
            $v = $this->getExampleCoding();
            foreach($validationRules[self::FIELD_EXAMPLE_CODING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_EXAMPLE_CODING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_CODING])) {
                        $errs[self::FIELD_EXAMPLE_CODING] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_CODING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_CONTACT])) {
            $v = $this->getExampleContact();
            foreach($validationRules[self::FIELD_EXAMPLE_CONTACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_EXAMPLE_CONTACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_CONTACT])) {
                        $errs[self::FIELD_EXAMPLE_CONTACT] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_CONTACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_DATE])) {
            $v = $this->getExampleDate();
            foreach($validationRules[self::FIELD_EXAMPLE_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_EXAMPLE_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_DATE])) {
                        $errs[self::FIELD_EXAMPLE_DATE] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_DATE_TIME])) {
            $v = $this->getExampleDateTime();
            foreach($validationRules[self::FIELD_EXAMPLE_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_EXAMPLE_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_DATE_TIME])) {
                        $errs[self::FIELD_EXAMPLE_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_DECIMAL])) {
            $v = $this->getExampleDecimal();
            foreach($validationRules[self::FIELD_EXAMPLE_DECIMAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_EXAMPLE_DECIMAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_DECIMAL])) {
                        $errs[self::FIELD_EXAMPLE_DECIMAL] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_DECIMAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_HUMAN_NAME])) {
            $v = $this->getExampleHumanName();
            foreach($validationRules[self::FIELD_EXAMPLE_HUMAN_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_EXAMPLE_HUMAN_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_HUMAN_NAME])) {
                        $errs[self::FIELD_EXAMPLE_HUMAN_NAME] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_HUMAN_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_ID])) {
            $v = $this->getExampleId();
            foreach($validationRules[self::FIELD_EXAMPLE_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_EXAMPLE_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_ID])) {
                        $errs[self::FIELD_EXAMPLE_ID] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_IDENTIFIER])) {
            $v = $this->getExampleIdentifier();
            foreach($validationRules[self::FIELD_EXAMPLE_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_EXAMPLE_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_IDENTIFIER])) {
                        $errs[self::FIELD_EXAMPLE_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_INSTANT])) {
            $v = $this->getExampleInstant();
            foreach($validationRules[self::FIELD_EXAMPLE_INSTANT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_EXAMPLE_INSTANT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_INSTANT])) {
                        $errs[self::FIELD_EXAMPLE_INSTANT] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_INSTANT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_INTEGER])) {
            $v = $this->getExampleInteger();
            foreach($validationRules[self::FIELD_EXAMPLE_INTEGER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_EXAMPLE_INTEGER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_INTEGER])) {
                        $errs[self::FIELD_EXAMPLE_INTEGER] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_INTEGER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_OID])) {
            $v = $this->getExampleOid();
            foreach($validationRules[self::FIELD_EXAMPLE_OID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_EXAMPLE_OID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_OID])) {
                        $errs[self::FIELD_EXAMPLE_OID] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_OID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_PERIOD])) {
            $v = $this->getExamplePeriod();
            foreach($validationRules[self::FIELD_EXAMPLE_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_EXAMPLE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_PERIOD])) {
                        $errs[self::FIELD_EXAMPLE_PERIOD] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_QUANTITY])) {
            $v = $this->getExampleQuantity();
            foreach($validationRules[self::FIELD_EXAMPLE_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_EXAMPLE_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_QUANTITY])) {
                        $errs[self::FIELD_EXAMPLE_QUANTITY] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_RANGE])) {
            $v = $this->getExampleRange();
            foreach($validationRules[self::FIELD_EXAMPLE_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_EXAMPLE_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_RANGE])) {
                        $errs[self::FIELD_EXAMPLE_RANGE] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_RATIO])) {
            $v = $this->getExampleRatio();
            foreach($validationRules[self::FIELD_EXAMPLE_RATIO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_EXAMPLE_RATIO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_RATIO])) {
                        $errs[self::FIELD_EXAMPLE_RATIO] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_RATIO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_RESOURCE])) {
            $v = $this->getExampleResource();
            foreach($validationRules[self::FIELD_EXAMPLE_RESOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_EXAMPLE_RESOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_RESOURCE])) {
                        $errs[self::FIELD_EXAMPLE_RESOURCE] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_RESOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_SAMPLED_DATA])) {
            $v = $this->getExampleSampledData();
            foreach($validationRules[self::FIELD_EXAMPLE_SAMPLED_DATA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_EXAMPLE_SAMPLED_DATA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_SAMPLED_DATA])) {
                        $errs[self::FIELD_EXAMPLE_SAMPLED_DATA] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_SAMPLED_DATA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_SCHEDULE])) {
            $v = $this->getExampleSchedule();
            foreach($validationRules[self::FIELD_EXAMPLE_SCHEDULE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_EXAMPLE_SCHEDULE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_SCHEDULE])) {
                        $errs[self::FIELD_EXAMPLE_SCHEDULE] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_SCHEDULE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_STRING])) {
            $v = $this->getExampleString();
            foreach($validationRules[self::FIELD_EXAMPLE_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_EXAMPLE_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_STRING])) {
                        $errs[self::FIELD_EXAMPLE_STRING] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_URI])) {
            $v = $this->getExampleUri();
            foreach($validationRules[self::FIELD_EXAMPLE_URI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_EXAMPLE_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_URI])) {
                        $errs[self::FIELD_EXAMPLE_URI] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_UUID])) {
            $v = $this->getExampleUuid();
            foreach($validationRules[self::FIELD_EXAMPLE_UUID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_EXAMPLE_UUID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_UUID])) {
                        $errs[self::FIELD_EXAMPLE_UUID] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_UUID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FORMAL])) {
            $v = $this->getFormal();
            foreach($validationRules[self::FIELD_FORMAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_FORMAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FORMAL])) {
                        $errs[self::FIELD_FORMAL] = [];
                    }
                    $errs[self::FIELD_FORMAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IS_MODIFIER])) {
            $v = $this->getIsModifier();
            foreach($validationRules[self::FIELD_IS_MODIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_IS_MODIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IS_MODIFIER])) {
                        $errs[self::FIELD_IS_MODIFIER] = [];
                    }
                    $errs[self::FIELD_IS_MODIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAPPING])) {
            $v = $this->getMapping();
            foreach($validationRules[self::FIELD_MAPPING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_MAPPING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAPPING])) {
                        $errs[self::FIELD_MAPPING] = [];
                    }
                    $errs[self::FIELD_MAPPING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX])) {
            $v = $this->getMax();
            foreach($validationRules[self::FIELD_MAX] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_MAX, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX])) {
                        $errs[self::FIELD_MAX] = [];
                    }
                    $errs[self::FIELD_MAX][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_LENGTH])) {
            $v = $this->getMaxLength();
            foreach($validationRules[self::FIELD_MAX_LENGTH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_MAX_LENGTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_LENGTH])) {
                        $errs[self::FIELD_MAX_LENGTH] = [];
                    }
                    $errs[self::FIELD_MAX_LENGTH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN])) {
            $v = $this->getMin();
            foreach($validationRules[self::FIELD_MIN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_MIN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN])) {
                        $errs[self::FIELD_MIN] = [];
                    }
                    $errs[self::FIELD_MIN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MUST_SUPPORT])) {
            $v = $this->getMustSupport();
            foreach($validationRules[self::FIELD_MUST_SUPPORT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_MUST_SUPPORT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MUST_SUPPORT])) {
                        $errs[self::FIELD_MUST_SUPPORT] = [];
                    }
                    $errs[self::FIELD_MUST_SUPPORT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME_REFERENCE])) {
            $v = $this->getNameReference();
            foreach($validationRules[self::FIELD_NAME_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_NAME_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME_REFERENCE])) {
                        $errs[self::FIELD_NAME_REFERENCE] = [];
                    }
                    $errs[self::FIELD_NAME_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUIREMENTS])) {
            $v = $this->getRequirements();
            foreach($validationRules[self::FIELD_REQUIREMENTS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_REQUIREMENTS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUIREMENTS])) {
                        $errs[self::FIELD_REQUIREMENTS] = [];
                    }
                    $errs[self::FIELD_REQUIREMENTS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SHORT])) {
            $v = $this->getShort();
            foreach($validationRules[self::FIELD_SHORT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_SHORT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SHORT])) {
                        $errs[self::FIELD_SHORT] = [];
                    }
                    $errs[self::FIELD_SHORT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SYNONYM])) {
            $v = $this->getSynonym();
            foreach($validationRules[self::FIELD_SYNONYM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_SYNONYM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SYNONYM])) {
                        $errs[self::FIELD_SYNONYM] = [];
                    }
                    $errs[self::FIELD_SYNONYM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_ADDRESS])) {
            $v = $this->getValueAddress();
            foreach($validationRules[self::FIELD_VALUE_ADDRESS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_VALUE_ADDRESS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_ADDRESS])) {
                        $errs[self::FIELD_VALUE_ADDRESS] = [];
                    }
                    $errs[self::FIELD_VALUE_ADDRESS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_ATTACHMENT])) {
            $v = $this->getValueAttachment();
            foreach($validationRules[self::FIELD_VALUE_ATTACHMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_VALUE_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_ATTACHMENT])) {
                        $errs[self::FIELD_VALUE_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_VALUE_ATTACHMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_BASE_64BINARY])) {
            $v = $this->getValueBase64Binary();
            foreach($validationRules[self::FIELD_VALUE_BASE_64BINARY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_VALUE_BASE_64BINARY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_BASE_64BINARY])) {
                        $errs[self::FIELD_VALUE_BASE_64BINARY] = [];
                    }
                    $errs[self::FIELD_VALUE_BASE_64BINARY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_BOOLEAN])) {
            $v = $this->getValueBoolean();
            foreach($validationRules[self::FIELD_VALUE_BOOLEAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_VALUE_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_BOOLEAN])) {
                        $errs[self::FIELD_VALUE_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_VALUE_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_CODE])) {
            $v = $this->getValueCode();
            foreach($validationRules[self::FIELD_VALUE_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_VALUE_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_CODE])) {
                        $errs[self::FIELD_VALUE_CODE] = [];
                    }
                    $errs[self::FIELD_VALUE_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_CODEABLE_CONCEPT])) {
            $v = $this->getValueCodeableConcept();
            foreach($validationRules[self::FIELD_VALUE_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_VALUE_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_VALUE_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_VALUE_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_CODING])) {
            $v = $this->getValueCoding();
            foreach($validationRules[self::FIELD_VALUE_CODING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_VALUE_CODING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_CODING])) {
                        $errs[self::FIELD_VALUE_CODING] = [];
                    }
                    $errs[self::FIELD_VALUE_CODING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_CONTACT])) {
            $v = $this->getValueContact();
            foreach($validationRules[self::FIELD_VALUE_CONTACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_VALUE_CONTACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_CONTACT])) {
                        $errs[self::FIELD_VALUE_CONTACT] = [];
                    }
                    $errs[self::FIELD_VALUE_CONTACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_DATE])) {
            $v = $this->getValueDate();
            foreach($validationRules[self::FIELD_VALUE_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_VALUE_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_DATE])) {
                        $errs[self::FIELD_VALUE_DATE] = [];
                    }
                    $errs[self::FIELD_VALUE_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_DATE_TIME])) {
            $v = $this->getValueDateTime();
            foreach($validationRules[self::FIELD_VALUE_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_VALUE_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_DATE_TIME])) {
                        $errs[self::FIELD_VALUE_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_VALUE_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_DECIMAL])) {
            $v = $this->getValueDecimal();
            foreach($validationRules[self::FIELD_VALUE_DECIMAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_VALUE_DECIMAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_DECIMAL])) {
                        $errs[self::FIELD_VALUE_DECIMAL] = [];
                    }
                    $errs[self::FIELD_VALUE_DECIMAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_HUMAN_NAME])) {
            $v = $this->getValueHumanName();
            foreach($validationRules[self::FIELD_VALUE_HUMAN_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_VALUE_HUMAN_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_HUMAN_NAME])) {
                        $errs[self::FIELD_VALUE_HUMAN_NAME] = [];
                    }
                    $errs[self::FIELD_VALUE_HUMAN_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_ID])) {
            $v = $this->getValueId();
            foreach($validationRules[self::FIELD_VALUE_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_VALUE_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_ID])) {
                        $errs[self::FIELD_VALUE_ID] = [];
                    }
                    $errs[self::FIELD_VALUE_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_IDENTIFIER])) {
            $v = $this->getValueIdentifier();
            foreach($validationRules[self::FIELD_VALUE_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_VALUE_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_IDENTIFIER])) {
                        $errs[self::FIELD_VALUE_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_VALUE_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_INSTANT])) {
            $v = $this->getValueInstant();
            foreach($validationRules[self::FIELD_VALUE_INSTANT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_VALUE_INSTANT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_INSTANT])) {
                        $errs[self::FIELD_VALUE_INSTANT] = [];
                    }
                    $errs[self::FIELD_VALUE_INSTANT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_INTEGER])) {
            $v = $this->getValueInteger();
            foreach($validationRules[self::FIELD_VALUE_INTEGER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_VALUE_INTEGER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_INTEGER])) {
                        $errs[self::FIELD_VALUE_INTEGER] = [];
                    }
                    $errs[self::FIELD_VALUE_INTEGER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_OID])) {
            $v = $this->getValueOid();
            foreach($validationRules[self::FIELD_VALUE_OID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_VALUE_OID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_OID])) {
                        $errs[self::FIELD_VALUE_OID] = [];
                    }
                    $errs[self::FIELD_VALUE_OID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_PERIOD])) {
            $v = $this->getValuePeriod();
            foreach($validationRules[self::FIELD_VALUE_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_VALUE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_PERIOD])) {
                        $errs[self::FIELD_VALUE_PERIOD] = [];
                    }
                    $errs[self::FIELD_VALUE_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_QUANTITY])) {
            $v = $this->getValueQuantity();
            foreach($validationRules[self::FIELD_VALUE_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_VALUE_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_QUANTITY])) {
                        $errs[self::FIELD_VALUE_QUANTITY] = [];
                    }
                    $errs[self::FIELD_VALUE_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_RANGE])) {
            $v = $this->getValueRange();
            foreach($validationRules[self::FIELD_VALUE_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_VALUE_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_RANGE])) {
                        $errs[self::FIELD_VALUE_RANGE] = [];
                    }
                    $errs[self::FIELD_VALUE_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_RATIO])) {
            $v = $this->getValueRatio();
            foreach($validationRules[self::FIELD_VALUE_RATIO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_VALUE_RATIO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_RATIO])) {
                        $errs[self::FIELD_VALUE_RATIO] = [];
                    }
                    $errs[self::FIELD_VALUE_RATIO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_RESOURCE])) {
            $v = $this->getValueResource();
            foreach($validationRules[self::FIELD_VALUE_RESOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_VALUE_RESOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_RESOURCE])) {
                        $errs[self::FIELD_VALUE_RESOURCE] = [];
                    }
                    $errs[self::FIELD_VALUE_RESOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_SAMPLED_DATA])) {
            $v = $this->getValueSampledData();
            foreach($validationRules[self::FIELD_VALUE_SAMPLED_DATA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_VALUE_SAMPLED_DATA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_SAMPLED_DATA])) {
                        $errs[self::FIELD_VALUE_SAMPLED_DATA] = [];
                    }
                    $errs[self::FIELD_VALUE_SAMPLED_DATA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_SCHEDULE])) {
            $v = $this->getValueSchedule();
            foreach($validationRules[self::FIELD_VALUE_SCHEDULE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_VALUE_SCHEDULE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_SCHEDULE])) {
                        $errs[self::FIELD_VALUE_SCHEDULE] = [];
                    }
                    $errs[self::FIELD_VALUE_SCHEDULE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_STRING])) {
            $v = $this->getValueString();
            foreach($validationRules[self::FIELD_VALUE_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_VALUE_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_STRING])) {
                        $errs[self::FIELD_VALUE_STRING] = [];
                    }
                    $errs[self::FIELD_VALUE_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_URI])) {
            $v = $this->getValueUri();
            foreach($validationRules[self::FIELD_VALUE_URI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_VALUE_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_URI])) {
                        $errs[self::FIELD_VALUE_URI] = [];
                    }
                    $errs[self::FIELD_VALUE_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_UUID])) {
            $v = $this->getValueUuid();
            foreach($validationRules[self::FIELD_VALUE_UUID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION, self::FIELD_VALUE_UUID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_UUID])) {
                        $errs[self::FIELD_VALUE_UUID] = [];
                    }
                    $errs[self::FIELD_VALUE_UUID][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
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
                throw new \DomainException(sprintf('FHIRProfileDefinition::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRProfileDefinition::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRProfileDefinition;
        } elseif (!is_object($type) || !($type instanceof FHIRProfileDefinition)) {
            throw new \RuntimeException(sprintf(
                'FHIRProfileDefinition::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition or null, %s seen.',
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
        if (isset($children->binding)) {
            $type->setBinding(FHIRProfileBinding::xmlUnserialize($children->binding));
        }
        if (isset($children->comments)) {
            $type->setComments(FHIRString::xmlUnserialize($children->comments));
        }
        if (isset($attributes->comments)) {
            $pt = $type->getComments();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->comments);
            } else {
                $type->setComments((string)$attributes->comments);
            }
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
        if (isset($children->exampleBase64Binary)) {
            $type->setExampleBase64Binary(FHIRBase64Binary::xmlUnserialize($children->exampleBase64Binary));
        }
        if (isset($attributes->exampleBase64Binary)) {
            $pt = $type->getExampleBase64Binary();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->exampleBase64Binary);
            } else {
                $type->setExampleBase64Binary((string)$attributes->exampleBase64Binary);
            }
        }
        if (isset($children->exampleBoolean)) {
            $type->setExampleBoolean(FHIRBoolean::xmlUnserialize($children->exampleBoolean));
        }
        if (isset($attributes->exampleBoolean)) {
            $pt = $type->getExampleBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->exampleBoolean);
            } else {
                $type->setExampleBoolean((string)$attributes->exampleBoolean);
            }
        }
        if (isset($children->exampleCode)) {
            $type->setExampleCode(FHIRCode::xmlUnserialize($children->exampleCode));
        }
        if (isset($attributes->exampleCode)) {
            $pt = $type->getExampleCode();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->exampleCode);
            } else {
                $type->setExampleCode((string)$attributes->exampleCode);
            }
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
        if (isset($children->exampleDate)) {
            $type->setExampleDate(FHIRDate::xmlUnserialize($children->exampleDate));
        }
        if (isset($attributes->exampleDate)) {
            $pt = $type->getExampleDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->exampleDate);
            } else {
                $type->setExampleDate((string)$attributes->exampleDate);
            }
        }
        if (isset($children->exampleDateTime)) {
            $type->setExampleDateTime(FHIRDateTime::xmlUnserialize($children->exampleDateTime));
        }
        if (isset($attributes->exampleDateTime)) {
            $pt = $type->getExampleDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->exampleDateTime);
            } else {
                $type->setExampleDateTime((string)$attributes->exampleDateTime);
            }
        }
        if (isset($children->exampleDecimal)) {
            $type->setExampleDecimal(FHIRDecimal::xmlUnserialize($children->exampleDecimal));
        }
        if (isset($attributes->exampleDecimal)) {
            $pt = $type->getExampleDecimal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->exampleDecimal);
            } else {
                $type->setExampleDecimal((string)$attributes->exampleDecimal);
            }
        }
        if (isset($children->exampleHumanName)) {
            $type->setExampleHumanName(FHIRHumanName::xmlUnserialize($children->exampleHumanName));
        }
        if (isset($children->exampleId)) {
            $type->setExampleId(FHIRId::xmlUnserialize($children->exampleId));
        }
        if (isset($attributes->exampleId)) {
            $pt = $type->getExampleId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->exampleId);
            } else {
                $type->setExampleId((string)$attributes->exampleId);
            }
        }
        if (isset($children->exampleIdentifier)) {
            $type->setExampleIdentifier(FHIRIdentifier::xmlUnserialize($children->exampleIdentifier));
        }
        if (isset($children->exampleInstant)) {
            $type->setExampleInstant(FHIRInstant::xmlUnserialize($children->exampleInstant));
        }
        if (isset($attributes->exampleInstant)) {
            $pt = $type->getExampleInstant();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->exampleInstant);
            } else {
                $type->setExampleInstant((string)$attributes->exampleInstant);
            }
        }
        if (isset($children->exampleInteger)) {
            $type->setExampleInteger(FHIRInteger::xmlUnserialize($children->exampleInteger));
        }
        if (isset($attributes->exampleInteger)) {
            $pt = $type->getExampleInteger();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->exampleInteger);
            } else {
                $type->setExampleInteger((string)$attributes->exampleInteger);
            }
        }
        if (isset($children->exampleOid)) {
            $type->setExampleOid(FHIROid::xmlUnserialize($children->exampleOid));
        }
        if (isset($attributes->exampleOid)) {
            $pt = $type->getExampleOid();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->exampleOid);
            } else {
                $type->setExampleOid((string)$attributes->exampleOid);
            }
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
        if (isset($children->exampleString)) {
            $type->setExampleString(FHIRString::xmlUnserialize($children->exampleString));
        }
        if (isset($attributes->exampleString)) {
            $pt = $type->getExampleString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->exampleString);
            } else {
                $type->setExampleString((string)$attributes->exampleString);
            }
        }
        if (isset($children->exampleUri)) {
            $type->setExampleUri(FHIRUri::xmlUnserialize($children->exampleUri));
        }
        if (isset($attributes->exampleUri)) {
            $pt = $type->getExampleUri();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->exampleUri);
            } else {
                $type->setExampleUri((string)$attributes->exampleUri);
            }
        }
        if (isset($children->exampleUuid)) {
            $type->setExampleUuid(FHIRUuid::xmlUnserialize($children->exampleUuid));
        }
        if (isset($attributes->exampleUuid)) {
            $pt = $type->getExampleUuid();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->exampleUuid);
            } else {
                $type->setExampleUuid((string)$attributes->exampleUuid);
            }
        }
        if (isset($children->formal)) {
            $type->setFormal(FHIRString::xmlUnserialize($children->formal));
        }
        if (isset($attributes->formal)) {
            $pt = $type->getFormal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->formal);
            } else {
                $type->setFormal((string)$attributes->formal);
            }
        }
        if (isset($children->isModifier)) {
            $type->setIsModifier(FHIRBoolean::xmlUnserialize($children->isModifier));
        }
        if (isset($attributes->isModifier)) {
            $pt = $type->getIsModifier();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->isModifier);
            } else {
                $type->setIsModifier((string)$attributes->isModifier);
            }
        }
        if (isset($children->mapping)) {
            foreach($children->mapping as $child) {
                $type->addMapping(FHIRProfileMapping1::xmlUnserialize($child));
            }
        }
        if (isset($children->max)) {
            $type->setMax(FHIRString::xmlUnserialize($children->max));
        }
        if (isset($attributes->max)) {
            $pt = $type->getMax();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->max);
            } else {
                $type->setMax((string)$attributes->max);
            }
        }
        if (isset($children->maxLength)) {
            $type->setMaxLength(FHIRInteger::xmlUnserialize($children->maxLength));
        }
        if (isset($attributes->maxLength)) {
            $pt = $type->getMaxLength();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->maxLength);
            } else {
                $type->setMaxLength((string)$attributes->maxLength);
            }
        }
        if (isset($children->min)) {
            $type->setMin(FHIRInteger::xmlUnserialize($children->min));
        }
        if (isset($attributes->min)) {
            $pt = $type->getMin();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->min);
            } else {
                $type->setMin((string)$attributes->min);
            }
        }
        if (isset($children->mustSupport)) {
            $type->setMustSupport(FHIRBoolean::xmlUnserialize($children->mustSupport));
        }
        if (isset($attributes->mustSupport)) {
            $pt = $type->getMustSupport();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->mustSupport);
            } else {
                $type->setMustSupport((string)$attributes->mustSupport);
            }
        }
        if (isset($children->nameReference)) {
            $type->setNameReference(FHIRString::xmlUnserialize($children->nameReference));
        }
        if (isset($attributes->nameReference)) {
            $pt = $type->getNameReference();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->nameReference);
            } else {
                $type->setNameReference((string)$attributes->nameReference);
            }
        }
        if (isset($children->requirements)) {
            $type->setRequirements(FHIRString::xmlUnserialize($children->requirements));
        }
        if (isset($attributes->requirements)) {
            $pt = $type->getRequirements();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->requirements);
            } else {
                $type->setRequirements((string)$attributes->requirements);
            }
        }
        if (isset($children->short)) {
            $type->setShort(FHIRString::xmlUnserialize($children->short));
        }
        if (isset($attributes->short)) {
            $pt = $type->getShort();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->short);
            } else {
                $type->setShort((string)$attributes->short);
            }
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
        if (isset($children->valueBase64Binary)) {
            $type->setValueBase64Binary(FHIRBase64Binary::xmlUnserialize($children->valueBase64Binary));
        }
        if (isset($attributes->valueBase64Binary)) {
            $pt = $type->getValueBase64Binary();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueBase64Binary);
            } else {
                $type->setValueBase64Binary((string)$attributes->valueBase64Binary);
            }
        }
        if (isset($children->valueBoolean)) {
            $type->setValueBoolean(FHIRBoolean::xmlUnserialize($children->valueBoolean));
        }
        if (isset($attributes->valueBoolean)) {
            $pt = $type->getValueBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueBoolean);
            } else {
                $type->setValueBoolean((string)$attributes->valueBoolean);
            }
        }
        if (isset($children->valueCode)) {
            $type->setValueCode(FHIRCode::xmlUnserialize($children->valueCode));
        }
        if (isset($attributes->valueCode)) {
            $pt = $type->getValueCode();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueCode);
            } else {
                $type->setValueCode((string)$attributes->valueCode);
            }
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
        if (isset($children->valueDate)) {
            $type->setValueDate(FHIRDate::xmlUnserialize($children->valueDate));
        }
        if (isset($attributes->valueDate)) {
            $pt = $type->getValueDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueDate);
            } else {
                $type->setValueDate((string)$attributes->valueDate);
            }
        }
        if (isset($children->valueDateTime)) {
            $type->setValueDateTime(FHIRDateTime::xmlUnserialize($children->valueDateTime));
        }
        if (isset($attributes->valueDateTime)) {
            $pt = $type->getValueDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueDateTime);
            } else {
                $type->setValueDateTime((string)$attributes->valueDateTime);
            }
        }
        if (isset($children->valueDecimal)) {
            $type->setValueDecimal(FHIRDecimal::xmlUnserialize($children->valueDecimal));
        }
        if (isset($attributes->valueDecimal)) {
            $pt = $type->getValueDecimal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueDecimal);
            } else {
                $type->setValueDecimal((string)$attributes->valueDecimal);
            }
        }
        if (isset($children->valueHumanName)) {
            $type->setValueHumanName(FHIRHumanName::xmlUnserialize($children->valueHumanName));
        }
        if (isset($children->valueId)) {
            $type->setValueId(FHIRId::xmlUnserialize($children->valueId));
        }
        if (isset($attributes->valueId)) {
            $pt = $type->getValueId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueId);
            } else {
                $type->setValueId((string)$attributes->valueId);
            }
        }
        if (isset($children->valueIdentifier)) {
            $type->setValueIdentifier(FHIRIdentifier::xmlUnserialize($children->valueIdentifier));
        }
        if (isset($children->valueInstant)) {
            $type->setValueInstant(FHIRInstant::xmlUnserialize($children->valueInstant));
        }
        if (isset($attributes->valueInstant)) {
            $pt = $type->getValueInstant();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueInstant);
            } else {
                $type->setValueInstant((string)$attributes->valueInstant);
            }
        }
        if (isset($children->valueInteger)) {
            $type->setValueInteger(FHIRInteger::xmlUnserialize($children->valueInteger));
        }
        if (isset($attributes->valueInteger)) {
            $pt = $type->getValueInteger();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueInteger);
            } else {
                $type->setValueInteger((string)$attributes->valueInteger);
            }
        }
        if (isset($children->valueOid)) {
            $type->setValueOid(FHIROid::xmlUnserialize($children->valueOid));
        }
        if (isset($attributes->valueOid)) {
            $pt = $type->getValueOid();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueOid);
            } else {
                $type->setValueOid((string)$attributes->valueOid);
            }
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
        if (isset($children->valueString)) {
            $type->setValueString(FHIRString::xmlUnserialize($children->valueString));
        }
        if (isset($attributes->valueString)) {
            $pt = $type->getValueString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueString);
            } else {
                $type->setValueString((string)$attributes->valueString);
            }
        }
        if (isset($children->valueUri)) {
            $type->setValueUri(FHIRUri::xmlUnserialize($children->valueUri));
        }
        if (isset($attributes->valueUri)) {
            $pt = $type->getValueUri();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueUri);
            } else {
                $type->setValueUri((string)$attributes->valueUri);
            }
        }
        if (isset($children->valueUuid)) {
            $type->setValueUuid(FHIRUuid::xmlUnserialize($children->valueUuid));
        }
        if (isset($attributes->valueUuid)) {
            $pt = $type->getValueUuid();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueUuid);
            } else {
                $type->setValueUuid((string)$attributes->valueUuid);
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
        if (null !== ($v = $this->getBinding())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BINDING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getComments())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COMMENTS, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getCondition())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONDITION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getConstraint())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONSTRAINT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getExampleAddress())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_ADDRESS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExampleAttachment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_ATTACHMENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExampleBase64Binary())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_BASE_64BINARY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExampleBoolean())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_BOOLEAN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExampleCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_CODE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExampleCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExampleCoding())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_CODING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExampleContact())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_CONTACT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExampleDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExampleDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExampleDecimal())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_DECIMAL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExampleHumanName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_HUMAN_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExampleId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExampleIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExampleInstant())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_INSTANT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExampleInteger())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_INTEGER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExampleOid())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_OID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExamplePeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExampleQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExampleRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_RANGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExampleRatio())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_RATIO, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExampleResource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_RESOURCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExampleSampledData())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_SAMPLED_DATA, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExampleSchedule())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_SCHEDULE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExampleString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_STRING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExampleUri())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_URI, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExampleUuid())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_UUID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFormal())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FORMAL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIsModifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IS_MODIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getMapping())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MAPPING, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getMax())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MAX, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMaxLength())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MAX_LENGTH, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMin())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MIN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMustSupport())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MUST_SUPPORT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getNameReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRequirements())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUIREMENTS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getShort())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SHORT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getSynonym())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SYNONYM, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getValueAddress())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_ADDRESS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueAttachment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_ATTACHMENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueBase64Binary())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_BASE_64BINARY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueBoolean())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_BOOLEAN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_CODE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueCoding())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_CODING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueContact())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_CONTACT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueDecimal())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_DECIMAL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueHumanName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_HUMAN_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueInstant())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_INSTANT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueInteger())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_INTEGER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueOid())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_OID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValuePeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_RANGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueRatio())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_RATIO, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueResource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_RESOURCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueSampledData())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_SAMPLED_DATA, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueSchedule())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_SCHEDULE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_STRING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueUri())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_URI, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueUuid())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_UUID, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_COMMENTS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_COMMENTS_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getCondition())) {
            $a[self::FIELD_CONDITION] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CONDITION][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRId::FIELD_VALUE]) || array_key_exists(FHIRId::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRId::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_CONDITION_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getConstraint())) {
            $a[self::FIELD_CONSTRAINT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CONSTRAINT][] = $v;
            }
        }
        if (null !== ($v = $this->getExampleAddress())) {
            $a[self::FIELD_EXAMPLE_ADDRESS] = $v;
        }
        if (null !== ($v = $this->getExampleAttachment())) {
            $a[self::FIELD_EXAMPLE_ATTACHMENT] = $v;
        }
        if (null !== ($v = $this->getExampleBase64Binary())) {
            $a[self::FIELD_EXAMPLE_BASE_64BINARY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBase64Binary::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBase64Binary::FIELD_VALUE]);
                $a[self::FIELD_EXAMPLE_BASE_64BINARY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getExampleBoolean())) {
            $a[self::FIELD_EXAMPLE_BOOLEAN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_EXAMPLE_BOOLEAN_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getExampleCode())) {
            $a[self::FIELD_EXAMPLE_CODE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCode::FIELD_VALUE]);
                $a[self::FIELD_EXAMPLE_CODE_EXT] = $enc;
            }
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
            $a[self::FIELD_EXAMPLE_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDate::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDate::FIELD_VALUE]);
                $a[self::FIELD_EXAMPLE_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getExampleDateTime())) {
            $a[self::FIELD_EXAMPLE_DATE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_EXAMPLE_DATE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getExampleDecimal())) {
            $a[self::FIELD_EXAMPLE_DECIMAL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_EXAMPLE_DECIMAL_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getExampleHumanName())) {
            $a[self::FIELD_EXAMPLE_HUMAN_NAME] = $v;
        }
        if (null !== ($v = $this->getExampleId())) {
            $a[self::FIELD_EXAMPLE_ID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRId::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRId::FIELD_VALUE]);
                $a[self::FIELD_EXAMPLE_ID_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getExampleIdentifier())) {
            $a[self::FIELD_EXAMPLE_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getExampleInstant())) {
            $a[self::FIELD_EXAMPLE_INSTANT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInstant::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInstant::FIELD_VALUE]);
                $a[self::FIELD_EXAMPLE_INSTANT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getExampleInteger())) {
            $a[self::FIELD_EXAMPLE_INTEGER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_EXAMPLE_INTEGER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getExampleOid())) {
            $a[self::FIELD_EXAMPLE_OID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIROid::FIELD_VALUE, $enc)))) {
                unset($enc[FHIROid::FIELD_VALUE]);
                $a[self::FIELD_EXAMPLE_OID_EXT] = $enc;
            }
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
            $a[self::FIELD_EXAMPLE_STRING] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_EXAMPLE_STRING_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getExampleUri())) {
            $a[self::FIELD_EXAMPLE_URI] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_EXAMPLE_URI_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getExampleUuid())) {
            $a[self::FIELD_EXAMPLE_UUID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUuid::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUuid::FIELD_VALUE]);
                $a[self::FIELD_EXAMPLE_UUID_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getFormal())) {
            $a[self::FIELD_FORMAL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_FORMAL_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getIsModifier())) {
            $a[self::FIELD_IS_MODIFIER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_IS_MODIFIER_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getMapping())) {
            $a[self::FIELD_MAPPING] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_MAPPING][] = $v;
            }
        }
        if (null !== ($v = $this->getMax())) {
            $a[self::FIELD_MAX] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_MAX_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMaxLength())) {
            $a[self::FIELD_MAX_LENGTH] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_MAX_LENGTH_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMin())) {
            $a[self::FIELD_MIN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_MIN_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMustSupport())) {
            $a[self::FIELD_MUST_SUPPORT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_MUST_SUPPORT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getNameReference())) {
            $a[self::FIELD_NAME_REFERENCE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_NAME_REFERENCE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getRequirements())) {
            $a[self::FIELD_REQUIREMENTS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_REQUIREMENTS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getShort())) {
            $a[self::FIELD_SHORT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_SHORT_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getSynonym())) {
            $a[self::FIELD_SYNONYM] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SYNONYM][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRString::FIELD_VALUE]) || array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRString::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_SYNONYM_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getType())) {
            $a[self::FIELD_TYPE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TYPE][] = $v;
            }
        }
        if (null !== ($v = $this->getValueAddress())) {
            $a[self::FIELD_VALUE_ADDRESS] = $v;
        }
        if (null !== ($v = $this->getValueAttachment())) {
            $a[self::FIELD_VALUE_ATTACHMENT] = $v;
        }
        if (null !== ($v = $this->getValueBase64Binary())) {
            $a[self::FIELD_VALUE_BASE_64BINARY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBase64Binary::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBase64Binary::FIELD_VALUE]);
                $a[self::FIELD_VALUE_BASE_64BINARY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValueBoolean())) {
            $a[self::FIELD_VALUE_BOOLEAN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_VALUE_BOOLEAN_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValueCode())) {
            $a[self::FIELD_VALUE_CODE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCode::FIELD_VALUE]);
                $a[self::FIELD_VALUE_CODE_EXT] = $enc;
            }
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
            $a[self::FIELD_VALUE_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDate::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDate::FIELD_VALUE]);
                $a[self::FIELD_VALUE_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValueDateTime())) {
            $a[self::FIELD_VALUE_DATE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_VALUE_DATE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValueDecimal())) {
            $a[self::FIELD_VALUE_DECIMAL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_VALUE_DECIMAL_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValueHumanName())) {
            $a[self::FIELD_VALUE_HUMAN_NAME] = $v;
        }
        if (null !== ($v = $this->getValueId())) {
            $a[self::FIELD_VALUE_ID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRId::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRId::FIELD_VALUE]);
                $a[self::FIELD_VALUE_ID_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValueIdentifier())) {
            $a[self::FIELD_VALUE_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getValueInstant())) {
            $a[self::FIELD_VALUE_INSTANT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInstant::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInstant::FIELD_VALUE]);
                $a[self::FIELD_VALUE_INSTANT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValueInteger())) {
            $a[self::FIELD_VALUE_INTEGER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_VALUE_INTEGER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValueOid())) {
            $a[self::FIELD_VALUE_OID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIROid::FIELD_VALUE, $enc)))) {
                unset($enc[FHIROid::FIELD_VALUE]);
                $a[self::FIELD_VALUE_OID_EXT] = $enc;
            }
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
            $a[self::FIELD_VALUE_STRING] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_VALUE_STRING_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValueUri())) {
            $a[self::FIELD_VALUE_URI] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_VALUE_URI_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValueUuid())) {
            $a[self::FIELD_VALUE_UUID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUuid::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUuid::FIELD_VALUE]);
                $a[self::FIELD_VALUE_UUID_EXT] = $enc;
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