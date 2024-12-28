<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile;

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
    const FIELD_SHORT = 'short';
    const FIELD_SHORT_EXT = '_short';
    const FIELD_FORMAL = 'formal';
    const FIELD_FORMAL_EXT = '_formal';
    const FIELD_COMMENTS = 'comments';
    const FIELD_COMMENTS_EXT = '_comments';
    const FIELD_REQUIREMENTS = 'requirements';
    const FIELD_REQUIREMENTS_EXT = '_requirements';
    const FIELD_SYNONYM = 'synonym';
    const FIELD_SYNONYM_EXT = '_synonym';
    const FIELD_MIN = 'min';
    const FIELD_MIN_EXT = '_min';
    const FIELD_MAX = 'max';
    const FIELD_MAX_EXT = '_max';
    const FIELD_TYPE = 'type';
    const FIELD_NAME_REFERENCE = 'nameReference';
    const FIELD_NAME_REFERENCE_EXT = '_nameReference';
    const FIELD_VALUE_BOOLEAN = 'valueBoolean';
    const FIELD_VALUE_BOOLEAN_EXT = '_valueBoolean';
    const FIELD_VALUE_INTEGER = 'valueInteger';
    const FIELD_VALUE_INTEGER_EXT = '_valueInteger';
    const FIELD_VALUE_DECIMAL = 'valueDecimal';
    const FIELD_VALUE_DECIMAL_EXT = '_valueDecimal';
    const FIELD_VALUE_BASE_64BINARY = 'valueBase64Binary';
    const FIELD_VALUE_BASE_64BINARY_EXT = '_valueBase64Binary';
    const FIELD_VALUE_INSTANT = 'valueInstant';
    const FIELD_VALUE_INSTANT_EXT = '_valueInstant';
    const FIELD_VALUE_STRING = 'valueString';
    const FIELD_VALUE_STRING_EXT = '_valueString';
    const FIELD_VALUE_URI = 'valueUri';
    const FIELD_VALUE_URI_EXT = '_valueUri';
    const FIELD_VALUE_DATE = 'valueDate';
    const FIELD_VALUE_DATE_EXT = '_valueDate';
    const FIELD_VALUE_DATE_TIME = 'valueDateTime';
    const FIELD_VALUE_DATE_TIME_EXT = '_valueDateTime';
    const FIELD_VALUE_CODE = 'valueCode';
    const FIELD_VALUE_CODE_EXT = '_valueCode';
    const FIELD_VALUE_OID = 'valueOid';
    const FIELD_VALUE_OID_EXT = '_valueOid';
    const FIELD_VALUE_UUID = 'valueUuid';
    const FIELD_VALUE_UUID_EXT = '_valueUuid';
    const FIELD_VALUE_ID = 'valueId';
    const FIELD_VALUE_ID_EXT = '_valueId';
    const FIELD_VALUE_ATTACHMENT = 'valueAttachment';
    const FIELD_VALUE_IDENTIFIER = 'valueIdentifier';
    const FIELD_VALUE_CODEABLE_CONCEPT = 'valueCodeableConcept';
    const FIELD_VALUE_CODING = 'valueCoding';
    const FIELD_VALUE_QUANTITY = 'valueQuantity';
    const FIELD_VALUE_RANGE = 'valueRange';
    const FIELD_VALUE_PERIOD = 'valuePeriod';
    const FIELD_VALUE_RATIO = 'valueRatio';
    const FIELD_VALUE_RESOURCE = 'valueResource';
    const FIELD_VALUE_SAMPLED_DATA = 'valueSampledData';
    const FIELD_VALUE_HUMAN_NAME = 'valueHumanName';
    const FIELD_VALUE_ADDRESS = 'valueAddress';
    const FIELD_VALUE_CONTACT = 'valueContact';
    const FIELD_VALUE_SCHEDULE = 'valueSchedule';
    const FIELD_EXAMPLE_BOOLEAN = 'exampleBoolean';
    const FIELD_EXAMPLE_BOOLEAN_EXT = '_exampleBoolean';
    const FIELD_EXAMPLE_INTEGER = 'exampleInteger';
    const FIELD_EXAMPLE_INTEGER_EXT = '_exampleInteger';
    const FIELD_EXAMPLE_DECIMAL = 'exampleDecimal';
    const FIELD_EXAMPLE_DECIMAL_EXT = '_exampleDecimal';
    const FIELD_EXAMPLE_BASE_64BINARY = 'exampleBase64Binary';
    const FIELD_EXAMPLE_BASE_64BINARY_EXT = '_exampleBase64Binary';
    const FIELD_EXAMPLE_INSTANT = 'exampleInstant';
    const FIELD_EXAMPLE_INSTANT_EXT = '_exampleInstant';
    const FIELD_EXAMPLE_STRING = 'exampleString';
    const FIELD_EXAMPLE_STRING_EXT = '_exampleString';
    const FIELD_EXAMPLE_URI = 'exampleUri';
    const FIELD_EXAMPLE_URI_EXT = '_exampleUri';
    const FIELD_EXAMPLE_DATE = 'exampleDate';
    const FIELD_EXAMPLE_DATE_EXT = '_exampleDate';
    const FIELD_EXAMPLE_DATE_TIME = 'exampleDateTime';
    const FIELD_EXAMPLE_DATE_TIME_EXT = '_exampleDateTime';
    const FIELD_EXAMPLE_CODE = 'exampleCode';
    const FIELD_EXAMPLE_CODE_EXT = '_exampleCode';
    const FIELD_EXAMPLE_OID = 'exampleOid';
    const FIELD_EXAMPLE_OID_EXT = '_exampleOid';
    const FIELD_EXAMPLE_UUID = 'exampleUuid';
    const FIELD_EXAMPLE_UUID_EXT = '_exampleUuid';
    const FIELD_EXAMPLE_ID = 'exampleId';
    const FIELD_EXAMPLE_ID_EXT = '_exampleId';
    const FIELD_EXAMPLE_ATTACHMENT = 'exampleAttachment';
    const FIELD_EXAMPLE_IDENTIFIER = 'exampleIdentifier';
    const FIELD_EXAMPLE_CODEABLE_CONCEPT = 'exampleCodeableConcept';
    const FIELD_EXAMPLE_CODING = 'exampleCoding';
    const FIELD_EXAMPLE_QUANTITY = 'exampleQuantity';
    const FIELD_EXAMPLE_RANGE = 'exampleRange';
    const FIELD_EXAMPLE_PERIOD = 'examplePeriod';
    const FIELD_EXAMPLE_RATIO = 'exampleRatio';
    const FIELD_EXAMPLE_RESOURCE = 'exampleResource';
    const FIELD_EXAMPLE_SAMPLED_DATA = 'exampleSampledData';
    const FIELD_EXAMPLE_HUMAN_NAME = 'exampleHumanName';
    const FIELD_EXAMPLE_ADDRESS = 'exampleAddress';
    const FIELD_EXAMPLE_CONTACT = 'exampleContact';
    const FIELD_EXAMPLE_SCHEDULE = 'exampleSchedule';
    const FIELD_MAX_LENGTH = 'maxLength';
    const FIELD_MAX_LENGTH_EXT = '_maxLength';
    const FIELD_CONDITION = 'condition';
    const FIELD_CONDITION_EXT = '_condition';
    const FIELD_CONSTRAINT = 'constraint';
    const FIELD_MUST_SUPPORT = 'mustSupport';
    const FIELD_MUST_SUPPORT_EXT = '_mustSupport';
    const FIELD_IS_MODIFIER = 'isModifier';
    const FIELD_IS_MODIFIER_EXT = '_isModifier';
    const FIELD_BINDING = 'binding';
    const FIELD_MAPPING = 'mapping';

    /** @var string */
    private $_xmlns = '';

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
     * The definition SHALL be consistent with the base definition, but convey the
     * meaning of the element in the particular context of use of the resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $formal = null;

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
     * Identifies additional names by which this element might also be known.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString[]
     */
    protected $synonym = [];

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
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $max = null;

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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    protected $valueBoolean = null;

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
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal
     */
    protected $valueDecimal = null;

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
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant
     */
    protected $valueInstant = null;

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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    protected $exampleBoolean = null;

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
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal
     */
    protected $exampleDecimal = null;

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
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant
     */
    protected $exampleInstant = null;

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
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileBinding
     */
    protected $binding = null;

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
        if (isset($data[self::FIELD_SHORT]) || isset($data[self::FIELD_SHORT_EXT])) {
            $value = isset($data[self::FIELD_SHORT]) ? $data[self::FIELD_SHORT] : null;
            $ext = (isset($data[self::FIELD_SHORT_EXT]) && is_array($data[self::FIELD_SHORT_EXT])) ? $ext = $data[self::FIELD_SHORT_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setShort($value);
                } else if (is_array($value)) {
                    $this->setShort(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setShort(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setShort(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_FORMAL]) || isset($data[self::FIELD_FORMAL_EXT])) {
            $value = isset($data[self::FIELD_FORMAL]) ? $data[self::FIELD_FORMAL] : null;
            $ext = (isset($data[self::FIELD_FORMAL_EXT]) && is_array($data[self::FIELD_FORMAL_EXT])) ? $ext = $data[self::FIELD_FORMAL_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setFormal($value);
                } else if (is_array($value)) {
                    $this->setFormal(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setFormal(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFormal(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_COMMENTS]) || isset($data[self::FIELD_COMMENTS_EXT])) {
            $value = isset($data[self::FIELD_COMMENTS]) ? $data[self::FIELD_COMMENTS] : null;
            $ext = (isset($data[self::FIELD_COMMENTS_EXT]) && is_array($data[self::FIELD_COMMENTS_EXT])) ? $ext = $data[self::FIELD_COMMENTS_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setComments($value);
                } else if (is_array($value)) {
                    $this->setComments(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setComments(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setComments(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_REQUIREMENTS]) || isset($data[self::FIELD_REQUIREMENTS_EXT])) {
            $value = isset($data[self::FIELD_REQUIREMENTS]) ? $data[self::FIELD_REQUIREMENTS] : null;
            $ext = (isset($data[self::FIELD_REQUIREMENTS_EXT]) && is_array($data[self::FIELD_REQUIREMENTS_EXT])) ? $ext = $data[self::FIELD_REQUIREMENTS_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setRequirements($value);
                } else if (is_array($value)) {
                    $this->setRequirements(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setRequirements(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRequirements(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SYNONYM]) || isset($data[self::FIELD_SYNONYM_EXT])) {
            $value = isset($data[self::FIELD_SYNONYM]) ? $data[self::FIELD_SYNONYM] : null;
            $ext = (isset($data[self::FIELD_SYNONYM_EXT]) && is_array($data[self::FIELD_SYNONYM_EXT])) ? $ext = $data[self::FIELD_SYNONYM_EXT] : $ext = [];
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
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addSynonym(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_MIN]) || isset($data[self::FIELD_MIN_EXT])) {
            $value = isset($data[self::FIELD_MIN]) ? $data[self::FIELD_MIN] : null;
            $ext = (isset($data[self::FIELD_MIN_EXT]) && is_array($data[self::FIELD_MIN_EXT])) ? $ext = $data[self::FIELD_MIN_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setMin($value);
                } else if (is_array($value)) {
                    $this->setMin(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setMin(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMin(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_MAX]) || isset($data[self::FIELD_MAX_EXT])) {
            $value = isset($data[self::FIELD_MAX]) ? $data[self::FIELD_MAX] : null;
            $ext = (isset($data[self::FIELD_MAX_EXT]) && is_array($data[self::FIELD_MAX_EXT])) ? $ext = $data[self::FIELD_MAX_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setMax($value);
                } else if (is_array($value)) {
                    $this->setMax(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setMax(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMax(new FHIRString($ext));
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
            } elseif ($data[self::FIELD_TYPE] instanceof FHIRProfileType) {
                $this->addType($data[self::FIELD_TYPE]);
            } else {
                $this->addType(new FHIRProfileType($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_NAME_REFERENCE]) || isset($data[self::FIELD_NAME_REFERENCE_EXT])) {
            $value = isset($data[self::FIELD_NAME_REFERENCE]) ? $data[self::FIELD_NAME_REFERENCE] : null;
            $ext = (isset($data[self::FIELD_NAME_REFERENCE_EXT]) && is_array($data[self::FIELD_NAME_REFERENCE_EXT])) ? $ext = $data[self::FIELD_NAME_REFERENCE_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setNameReference($value);
                } else if (is_array($value)) {
                    $this->setNameReference(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setNameReference(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setNameReference(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_BOOLEAN]) || isset($data[self::FIELD_VALUE_BOOLEAN_EXT])) {
            $value = isset($data[self::FIELD_VALUE_BOOLEAN]) ? $data[self::FIELD_VALUE_BOOLEAN] : null;
            $ext = (isset($data[self::FIELD_VALUE_BOOLEAN_EXT]) && is_array($data[self::FIELD_VALUE_BOOLEAN_EXT])) ? $ext = $data[self::FIELD_VALUE_BOOLEAN_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setValueBoolean($value);
                } else if (is_array($value)) {
                    $this->setValueBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setValueBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueBoolean(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_INTEGER]) || isset($data[self::FIELD_VALUE_INTEGER_EXT])) {
            $value = isset($data[self::FIELD_VALUE_INTEGER]) ? $data[self::FIELD_VALUE_INTEGER] : null;
            $ext = (isset($data[self::FIELD_VALUE_INTEGER_EXT]) && is_array($data[self::FIELD_VALUE_INTEGER_EXT])) ? $ext = $data[self::FIELD_VALUE_INTEGER_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setValueInteger($value);
                } else if (is_array($value)) {
                    $this->setValueInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setValueInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueInteger(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_DECIMAL]) || isset($data[self::FIELD_VALUE_DECIMAL_EXT])) {
            $value = isset($data[self::FIELD_VALUE_DECIMAL]) ? $data[self::FIELD_VALUE_DECIMAL] : null;
            $ext = (isset($data[self::FIELD_VALUE_DECIMAL_EXT]) && is_array($data[self::FIELD_VALUE_DECIMAL_EXT])) ? $ext = $data[self::FIELD_VALUE_DECIMAL_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setValueDecimal($value);
                } else if (is_array($value)) {
                    $this->setValueDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setValueDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueDecimal(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_BASE_64BINARY]) || isset($data[self::FIELD_VALUE_BASE_64BINARY_EXT])) {
            $value = isset($data[self::FIELD_VALUE_BASE_64BINARY]) ? $data[self::FIELD_VALUE_BASE_64BINARY] : null;
            $ext = (isset($data[self::FIELD_VALUE_BASE_64BINARY_EXT]) && is_array($data[self::FIELD_VALUE_BASE_64BINARY_EXT])) ? $ext = $data[self::FIELD_VALUE_BASE_64BINARY_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRBase64Binary) {
                    $this->setValueBase64Binary($value);
                } else if (is_array($value)) {
                    $this->setValueBase64Binary(new FHIRBase64Binary(array_merge($ext, $value)));
                } else {
                    $this->setValueBase64Binary(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueBase64Binary(new FHIRBase64Binary($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_INSTANT]) || isset($data[self::FIELD_VALUE_INSTANT_EXT])) {
            $value = isset($data[self::FIELD_VALUE_INSTANT]) ? $data[self::FIELD_VALUE_INSTANT] : null;
            $ext = (isset($data[self::FIELD_VALUE_INSTANT_EXT]) && is_array($data[self::FIELD_VALUE_INSTANT_EXT])) ? $ext = $data[self::FIELD_VALUE_INSTANT_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setValueInstant($value);
                } else if (is_array($value)) {
                    $this->setValueInstant(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setValueInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueInstant(new FHIRInstant($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_STRING]) || isset($data[self::FIELD_VALUE_STRING_EXT])) {
            $value = isset($data[self::FIELD_VALUE_STRING]) ? $data[self::FIELD_VALUE_STRING] : null;
            $ext = (isset($data[self::FIELD_VALUE_STRING_EXT]) && is_array($data[self::FIELD_VALUE_STRING_EXT])) ? $ext = $data[self::FIELD_VALUE_STRING_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setValueString($value);
                } else if (is_array($value)) {
                    $this->setValueString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setValueString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_URI]) || isset($data[self::FIELD_VALUE_URI_EXT])) {
            $value = isset($data[self::FIELD_VALUE_URI]) ? $data[self::FIELD_VALUE_URI] : null;
            $ext = (isset($data[self::FIELD_VALUE_URI_EXT]) && is_array($data[self::FIELD_VALUE_URI_EXT])) ? $ext = $data[self::FIELD_VALUE_URI_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setValueUri($value);
                } else if (is_array($value)) {
                    $this->setValueUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setValueUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueUri(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_DATE]) || isset($data[self::FIELD_VALUE_DATE_EXT])) {
            $value = isset($data[self::FIELD_VALUE_DATE]) ? $data[self::FIELD_VALUE_DATE] : null;
            $ext = (isset($data[self::FIELD_VALUE_DATE_EXT]) && is_array($data[self::FIELD_VALUE_DATE_EXT])) ? $ext = $data[self::FIELD_VALUE_DATE_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setValueDate($value);
                } else if (is_array($value)) {
                    $this->setValueDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setValueDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_DATE_TIME]) || isset($data[self::FIELD_VALUE_DATE_TIME_EXT])) {
            $value = isset($data[self::FIELD_VALUE_DATE_TIME]) ? $data[self::FIELD_VALUE_DATE_TIME] : null;
            $ext = (isset($data[self::FIELD_VALUE_DATE_TIME_EXT]) && is_array($data[self::FIELD_VALUE_DATE_TIME_EXT])) ? $ext = $data[self::FIELD_VALUE_DATE_TIME_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setValueDateTime($value);
                } else if (is_array($value)) {
                    $this->setValueDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setValueDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_CODE]) || isset($data[self::FIELD_VALUE_CODE_EXT])) {
            $value = isset($data[self::FIELD_VALUE_CODE]) ? $data[self::FIELD_VALUE_CODE] : null;
            $ext = (isset($data[self::FIELD_VALUE_CODE_EXT]) && is_array($data[self::FIELD_VALUE_CODE_EXT])) ? $ext = $data[self::FIELD_VALUE_CODE_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setValueCode($value);
                } else if (is_array($value)) {
                    $this->setValueCode(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setValueCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueCode(new FHIRCode($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_OID]) || isset($data[self::FIELD_VALUE_OID_EXT])) {
            $value = isset($data[self::FIELD_VALUE_OID]) ? $data[self::FIELD_VALUE_OID] : null;
            $ext = (isset($data[self::FIELD_VALUE_OID_EXT]) && is_array($data[self::FIELD_VALUE_OID_EXT])) ? $ext = $data[self::FIELD_VALUE_OID_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIROid) {
                    $this->setValueOid($value);
                } else if (is_array($value)) {
                    $this->setValueOid(new FHIROid(array_merge($ext, $value)));
                } else {
                    $this->setValueOid(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueOid(new FHIROid($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_UUID]) || isset($data[self::FIELD_VALUE_UUID_EXT])) {
            $value = isset($data[self::FIELD_VALUE_UUID]) ? $data[self::FIELD_VALUE_UUID] : null;
            $ext = (isset($data[self::FIELD_VALUE_UUID_EXT]) && is_array($data[self::FIELD_VALUE_UUID_EXT])) ? $ext = $data[self::FIELD_VALUE_UUID_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRUuid) {
                    $this->setValueUuid($value);
                } else if (is_array($value)) {
                    $this->setValueUuid(new FHIRUuid(array_merge($ext, $value)));
                } else {
                    $this->setValueUuid(new FHIRUuid([FHIRUuid::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueUuid(new FHIRUuid($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_ID]) || isset($data[self::FIELD_VALUE_ID_EXT])) {
            $value = isset($data[self::FIELD_VALUE_ID]) ? $data[self::FIELD_VALUE_ID] : null;
            $ext = (isset($data[self::FIELD_VALUE_ID_EXT]) && is_array($data[self::FIELD_VALUE_ID_EXT])) ? $ext = $data[self::FIELD_VALUE_ID_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setValueId($value);
                } else if (is_array($value)) {
                    $this->setValueId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setValueId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueId(new FHIRId($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_ATTACHMENT])) {
            if ($data[self::FIELD_VALUE_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setValueAttachment($data[self::FIELD_VALUE_ATTACHMENT]);
            } else {
                $this->setValueAttachment(new FHIRAttachment($data[self::FIELD_VALUE_ATTACHMENT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_IDENTIFIER])) {
            if ($data[self::FIELD_VALUE_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setValueIdentifier($data[self::FIELD_VALUE_IDENTIFIER]);
            } else {
                $this->setValueIdentifier(new FHIRIdentifier($data[self::FIELD_VALUE_IDENTIFIER]));
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
        if (isset($data[self::FIELD_VALUE_PERIOD])) {
            if ($data[self::FIELD_VALUE_PERIOD] instanceof FHIRPeriod) {
                $this->setValuePeriod($data[self::FIELD_VALUE_PERIOD]);
            } else {
                $this->setValuePeriod(new FHIRPeriod($data[self::FIELD_VALUE_PERIOD]));
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
        if (isset($data[self::FIELD_VALUE_HUMAN_NAME])) {
            if ($data[self::FIELD_VALUE_HUMAN_NAME] instanceof FHIRHumanName) {
                $this->setValueHumanName($data[self::FIELD_VALUE_HUMAN_NAME]);
            } else {
                $this->setValueHumanName(new FHIRHumanName($data[self::FIELD_VALUE_HUMAN_NAME]));
            }
        }
        if (isset($data[self::FIELD_VALUE_ADDRESS])) {
            if ($data[self::FIELD_VALUE_ADDRESS] instanceof FHIRAddress) {
                $this->setValueAddress($data[self::FIELD_VALUE_ADDRESS]);
            } else {
                $this->setValueAddress(new FHIRAddress($data[self::FIELD_VALUE_ADDRESS]));
            }
        }
        if (isset($data[self::FIELD_VALUE_CONTACT])) {
            if ($data[self::FIELD_VALUE_CONTACT] instanceof FHIRContact) {
                $this->setValueContact($data[self::FIELD_VALUE_CONTACT]);
            } else {
                $this->setValueContact(new FHIRContact($data[self::FIELD_VALUE_CONTACT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_SCHEDULE])) {
            if ($data[self::FIELD_VALUE_SCHEDULE] instanceof FHIRSchedule) {
                $this->setValueSchedule($data[self::FIELD_VALUE_SCHEDULE]);
            } else {
                $this->setValueSchedule(new FHIRSchedule($data[self::FIELD_VALUE_SCHEDULE]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_BOOLEAN]) || isset($data[self::FIELD_EXAMPLE_BOOLEAN_EXT])) {
            $value = isset($data[self::FIELD_EXAMPLE_BOOLEAN]) ? $data[self::FIELD_EXAMPLE_BOOLEAN] : null;
            $ext = (isset($data[self::FIELD_EXAMPLE_BOOLEAN_EXT]) && is_array($data[self::FIELD_EXAMPLE_BOOLEAN_EXT])) ? $ext = $data[self::FIELD_EXAMPLE_BOOLEAN_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setExampleBoolean($value);
                } else if (is_array($value)) {
                    $this->setExampleBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setExampleBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExampleBoolean(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_INTEGER]) || isset($data[self::FIELD_EXAMPLE_INTEGER_EXT])) {
            $value = isset($data[self::FIELD_EXAMPLE_INTEGER]) ? $data[self::FIELD_EXAMPLE_INTEGER] : null;
            $ext = (isset($data[self::FIELD_EXAMPLE_INTEGER_EXT]) && is_array($data[self::FIELD_EXAMPLE_INTEGER_EXT])) ? $ext = $data[self::FIELD_EXAMPLE_INTEGER_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setExampleInteger($value);
                } else if (is_array($value)) {
                    $this->setExampleInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setExampleInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExampleInteger(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_DECIMAL]) || isset($data[self::FIELD_EXAMPLE_DECIMAL_EXT])) {
            $value = isset($data[self::FIELD_EXAMPLE_DECIMAL]) ? $data[self::FIELD_EXAMPLE_DECIMAL] : null;
            $ext = (isset($data[self::FIELD_EXAMPLE_DECIMAL_EXT]) && is_array($data[self::FIELD_EXAMPLE_DECIMAL_EXT])) ? $ext = $data[self::FIELD_EXAMPLE_DECIMAL_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setExampleDecimal($value);
                } else if (is_array($value)) {
                    $this->setExampleDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setExampleDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExampleDecimal(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_BASE_64BINARY]) || isset($data[self::FIELD_EXAMPLE_BASE_64BINARY_EXT])) {
            $value = isset($data[self::FIELD_EXAMPLE_BASE_64BINARY]) ? $data[self::FIELD_EXAMPLE_BASE_64BINARY] : null;
            $ext = (isset($data[self::FIELD_EXAMPLE_BASE_64BINARY_EXT]) && is_array($data[self::FIELD_EXAMPLE_BASE_64BINARY_EXT])) ? $ext = $data[self::FIELD_EXAMPLE_BASE_64BINARY_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRBase64Binary) {
                    $this->setExampleBase64Binary($value);
                } else if (is_array($value)) {
                    $this->setExampleBase64Binary(new FHIRBase64Binary(array_merge($ext, $value)));
                } else {
                    $this->setExampleBase64Binary(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExampleBase64Binary(new FHIRBase64Binary($ext));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_INSTANT]) || isset($data[self::FIELD_EXAMPLE_INSTANT_EXT])) {
            $value = isset($data[self::FIELD_EXAMPLE_INSTANT]) ? $data[self::FIELD_EXAMPLE_INSTANT] : null;
            $ext = (isset($data[self::FIELD_EXAMPLE_INSTANT_EXT]) && is_array($data[self::FIELD_EXAMPLE_INSTANT_EXT])) ? $ext = $data[self::FIELD_EXAMPLE_INSTANT_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setExampleInstant($value);
                } else if (is_array($value)) {
                    $this->setExampleInstant(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setExampleInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExampleInstant(new FHIRInstant($ext));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_STRING]) || isset($data[self::FIELD_EXAMPLE_STRING_EXT])) {
            $value = isset($data[self::FIELD_EXAMPLE_STRING]) ? $data[self::FIELD_EXAMPLE_STRING] : null;
            $ext = (isset($data[self::FIELD_EXAMPLE_STRING_EXT]) && is_array($data[self::FIELD_EXAMPLE_STRING_EXT])) ? $ext = $data[self::FIELD_EXAMPLE_STRING_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setExampleString($value);
                } else if (is_array($value)) {
                    $this->setExampleString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setExampleString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExampleString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_URI]) || isset($data[self::FIELD_EXAMPLE_URI_EXT])) {
            $value = isset($data[self::FIELD_EXAMPLE_URI]) ? $data[self::FIELD_EXAMPLE_URI] : null;
            $ext = (isset($data[self::FIELD_EXAMPLE_URI_EXT]) && is_array($data[self::FIELD_EXAMPLE_URI_EXT])) ? $ext = $data[self::FIELD_EXAMPLE_URI_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setExampleUri($value);
                } else if (is_array($value)) {
                    $this->setExampleUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setExampleUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExampleUri(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_DATE]) || isset($data[self::FIELD_EXAMPLE_DATE_EXT])) {
            $value = isset($data[self::FIELD_EXAMPLE_DATE]) ? $data[self::FIELD_EXAMPLE_DATE] : null;
            $ext = (isset($data[self::FIELD_EXAMPLE_DATE_EXT]) && is_array($data[self::FIELD_EXAMPLE_DATE_EXT])) ? $ext = $data[self::FIELD_EXAMPLE_DATE_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setExampleDate($value);
                } else if (is_array($value)) {
                    $this->setExampleDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setExampleDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExampleDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_DATE_TIME]) || isset($data[self::FIELD_EXAMPLE_DATE_TIME_EXT])) {
            $value = isset($data[self::FIELD_EXAMPLE_DATE_TIME]) ? $data[self::FIELD_EXAMPLE_DATE_TIME] : null;
            $ext = (isset($data[self::FIELD_EXAMPLE_DATE_TIME_EXT]) && is_array($data[self::FIELD_EXAMPLE_DATE_TIME_EXT])) ? $ext = $data[self::FIELD_EXAMPLE_DATE_TIME_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setExampleDateTime($value);
                } else if (is_array($value)) {
                    $this->setExampleDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setExampleDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExampleDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_CODE]) || isset($data[self::FIELD_EXAMPLE_CODE_EXT])) {
            $value = isset($data[self::FIELD_EXAMPLE_CODE]) ? $data[self::FIELD_EXAMPLE_CODE] : null;
            $ext = (isset($data[self::FIELD_EXAMPLE_CODE_EXT]) && is_array($data[self::FIELD_EXAMPLE_CODE_EXT])) ? $ext = $data[self::FIELD_EXAMPLE_CODE_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setExampleCode($value);
                } else if (is_array($value)) {
                    $this->setExampleCode(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setExampleCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExampleCode(new FHIRCode($ext));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_OID]) || isset($data[self::FIELD_EXAMPLE_OID_EXT])) {
            $value = isset($data[self::FIELD_EXAMPLE_OID]) ? $data[self::FIELD_EXAMPLE_OID] : null;
            $ext = (isset($data[self::FIELD_EXAMPLE_OID_EXT]) && is_array($data[self::FIELD_EXAMPLE_OID_EXT])) ? $ext = $data[self::FIELD_EXAMPLE_OID_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIROid) {
                    $this->setExampleOid($value);
                } else if (is_array($value)) {
                    $this->setExampleOid(new FHIROid(array_merge($ext, $value)));
                } else {
                    $this->setExampleOid(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExampleOid(new FHIROid($ext));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_UUID]) || isset($data[self::FIELD_EXAMPLE_UUID_EXT])) {
            $value = isset($data[self::FIELD_EXAMPLE_UUID]) ? $data[self::FIELD_EXAMPLE_UUID] : null;
            $ext = (isset($data[self::FIELD_EXAMPLE_UUID_EXT]) && is_array($data[self::FIELD_EXAMPLE_UUID_EXT])) ? $ext = $data[self::FIELD_EXAMPLE_UUID_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRUuid) {
                    $this->setExampleUuid($value);
                } else if (is_array($value)) {
                    $this->setExampleUuid(new FHIRUuid(array_merge($ext, $value)));
                } else {
                    $this->setExampleUuid(new FHIRUuid([FHIRUuid::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExampleUuid(new FHIRUuid($ext));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_ID]) || isset($data[self::FIELD_EXAMPLE_ID_EXT])) {
            $value = isset($data[self::FIELD_EXAMPLE_ID]) ? $data[self::FIELD_EXAMPLE_ID] : null;
            $ext = (isset($data[self::FIELD_EXAMPLE_ID_EXT]) && is_array($data[self::FIELD_EXAMPLE_ID_EXT])) ? $ext = $data[self::FIELD_EXAMPLE_ID_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setExampleId($value);
                } else if (is_array($value)) {
                    $this->setExampleId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setExampleId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExampleId(new FHIRId($ext));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_ATTACHMENT])) {
            if ($data[self::FIELD_EXAMPLE_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setExampleAttachment($data[self::FIELD_EXAMPLE_ATTACHMENT]);
            } else {
                $this->setExampleAttachment(new FHIRAttachment($data[self::FIELD_EXAMPLE_ATTACHMENT]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_IDENTIFIER])) {
            if ($data[self::FIELD_EXAMPLE_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setExampleIdentifier($data[self::FIELD_EXAMPLE_IDENTIFIER]);
            } else {
                $this->setExampleIdentifier(new FHIRIdentifier($data[self::FIELD_EXAMPLE_IDENTIFIER]));
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
        if (isset($data[self::FIELD_EXAMPLE_PERIOD])) {
            if ($data[self::FIELD_EXAMPLE_PERIOD] instanceof FHIRPeriod) {
                $this->setExamplePeriod($data[self::FIELD_EXAMPLE_PERIOD]);
            } else {
                $this->setExamplePeriod(new FHIRPeriod($data[self::FIELD_EXAMPLE_PERIOD]));
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
        if (isset($data[self::FIELD_EXAMPLE_HUMAN_NAME])) {
            if ($data[self::FIELD_EXAMPLE_HUMAN_NAME] instanceof FHIRHumanName) {
                $this->setExampleHumanName($data[self::FIELD_EXAMPLE_HUMAN_NAME]);
            } else {
                $this->setExampleHumanName(new FHIRHumanName($data[self::FIELD_EXAMPLE_HUMAN_NAME]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_ADDRESS])) {
            if ($data[self::FIELD_EXAMPLE_ADDRESS] instanceof FHIRAddress) {
                $this->setExampleAddress($data[self::FIELD_EXAMPLE_ADDRESS]);
            } else {
                $this->setExampleAddress(new FHIRAddress($data[self::FIELD_EXAMPLE_ADDRESS]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_CONTACT])) {
            if ($data[self::FIELD_EXAMPLE_CONTACT] instanceof FHIRContact) {
                $this->setExampleContact($data[self::FIELD_EXAMPLE_CONTACT]);
            } else {
                $this->setExampleContact(new FHIRContact($data[self::FIELD_EXAMPLE_CONTACT]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_SCHEDULE])) {
            if ($data[self::FIELD_EXAMPLE_SCHEDULE] instanceof FHIRSchedule) {
                $this->setExampleSchedule($data[self::FIELD_EXAMPLE_SCHEDULE]);
            } else {
                $this->setExampleSchedule(new FHIRSchedule($data[self::FIELD_EXAMPLE_SCHEDULE]));
            }
        }
        if (isset($data[self::FIELD_MAX_LENGTH]) || isset($data[self::FIELD_MAX_LENGTH_EXT])) {
            $value = isset($data[self::FIELD_MAX_LENGTH]) ? $data[self::FIELD_MAX_LENGTH] : null;
            $ext = (isset($data[self::FIELD_MAX_LENGTH_EXT]) && is_array($data[self::FIELD_MAX_LENGTH_EXT])) ? $ext = $data[self::FIELD_MAX_LENGTH_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setMaxLength($value);
                } else if (is_array($value)) {
                    $this->setMaxLength(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setMaxLength(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMaxLength(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_CONDITION]) || isset($data[self::FIELD_CONDITION_EXT])) {
            $value = isset($data[self::FIELD_CONDITION]) ? $data[self::FIELD_CONDITION] : null;
            $ext = (isset($data[self::FIELD_CONDITION_EXT]) && is_array($data[self::FIELD_CONDITION_EXT])) ? $ext = $data[self::FIELD_CONDITION_EXT] : $ext = [];
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
            } elseif ([] !== $ext) {
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
            } elseif ($data[self::FIELD_CONSTRAINT] instanceof FHIRProfileConstraint) {
                $this->addConstraint($data[self::FIELD_CONSTRAINT]);
            } else {
                $this->addConstraint(new FHIRProfileConstraint($data[self::FIELD_CONSTRAINT]));
            }
        }
        if (isset($data[self::FIELD_MUST_SUPPORT]) || isset($data[self::FIELD_MUST_SUPPORT_EXT])) {
            $value = isset($data[self::FIELD_MUST_SUPPORT]) ? $data[self::FIELD_MUST_SUPPORT] : null;
            $ext = (isset($data[self::FIELD_MUST_SUPPORT_EXT]) && is_array($data[self::FIELD_MUST_SUPPORT_EXT])) ? $ext = $data[self::FIELD_MUST_SUPPORT_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setMustSupport($value);
                } else if (is_array($value)) {
                    $this->setMustSupport(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setMustSupport(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMustSupport(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_IS_MODIFIER]) || isset($data[self::FIELD_IS_MODIFIER_EXT])) {
            $value = isset($data[self::FIELD_IS_MODIFIER]) ? $data[self::FIELD_IS_MODIFIER] : null;
            $ext = (isset($data[self::FIELD_IS_MODIFIER_EXT]) && is_array($data[self::FIELD_IS_MODIFIER_EXT])) ? $ext = $data[self::FIELD_IS_MODIFIER_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setIsModifier($value);
                } else if (is_array($value)) {
                    $this->setIsModifier(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setIsModifier(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setIsModifier(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_BINDING])) {
            if ($data[self::FIELD_BINDING] instanceof FHIRProfileBinding) {
                $this->setBinding($data[self::FIELD_BINDING]);
            } else {
                $this->setBinding(new FHIRProfileBinding($data[self::FIELD_BINDING]));
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
            } elseif ($data[self::FIELD_MAPPING] instanceof FHIRProfileMapping1) {
                $this->addMapping($data[self::FIELD_MAPPING]);
            } else {
                $this->addMapping(new FHIRProfileMapping1($data[self::FIELD_MAPPING]));
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
        return "<ProfileDefinition{$xmlns}></ProfileDefinition>";
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
        if (null !== $short && !($short instanceof FHIRString)) {
            $short = new FHIRString($short);
        }
        $this->_trackValueSet($this->short, $short);
        $this->short = $short;
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
        if (null !== $formal && !($formal instanceof FHIRString)) {
            $formal = new FHIRString($formal);
        }
        $this->_trackValueSet($this->formal, $formal);
        $this->formal = $formal;
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
        if (null !== $comments && !($comments instanceof FHIRString)) {
            $comments = new FHIRString($comments);
        }
        $this->_trackValueSet($this->comments, $comments);
        $this->comments = $comments;
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
        if (null !== $requirements && !($requirements instanceof FHIRString)) {
            $requirements = new FHIRString($requirements);
        }
        $this->_trackValueSet($this->requirements, $requirements);
        $this->requirements = $requirements;
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
        if (null !== $synonym && !($synonym instanceof FHIRString)) {
            $synonym = new FHIRString($synonym);
        }
        $this->_trackValueAdded();
        $this->synonym[] = $synonym;
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
        if ([] !== $this->synonym) {
            $this->_trackValuesRemoved(count($this->synonym));
            $this->synonym = [];
        }
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
        if (null !== $min && !($min instanceof FHIRInteger)) {
            $min = new FHIRInteger($min);
        }
        $this->_trackValueSet($this->min, $min);
        $this->min = $min;
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
        if (null !== $max && !($max instanceof FHIRString)) {
            $max = new FHIRString($max);
        }
        $this->_trackValueSet($this->max, $max);
        $this->max = $max;
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
        $this->_trackValueAdded();
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
        if ([] !== $this->type) {
            $this->_trackValuesRemoved(count($this->type));
            $this->type = [];
        }
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
        if (null !== $nameReference && !($nameReference instanceof FHIRString)) {
            $nameReference = new FHIRString($nameReference);
        }
        $this->_trackValueSet($this->nameReference, $nameReference);
        $this->nameReference = $nameReference;
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
        if (null !== $valueBoolean && !($valueBoolean instanceof FHIRBoolean)) {
            $valueBoolean = new FHIRBoolean($valueBoolean);
        }
        $this->_trackValueSet($this->valueBoolean, $valueBoolean);
        $this->valueBoolean = $valueBoolean;
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
        if (null !== $valueInteger && !($valueInteger instanceof FHIRInteger)) {
            $valueInteger = new FHIRInteger($valueInteger);
        }
        $this->_trackValueSet($this->valueInteger, $valueInteger);
        $this->valueInteger = $valueInteger;
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
        if (null !== $valueDecimal && !($valueDecimal instanceof FHIRDecimal)) {
            $valueDecimal = new FHIRDecimal($valueDecimal);
        }
        $this->_trackValueSet($this->valueDecimal, $valueDecimal);
        $this->valueDecimal = $valueDecimal;
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
        if (null !== $valueBase64Binary && !($valueBase64Binary instanceof FHIRBase64Binary)) {
            $valueBase64Binary = new FHIRBase64Binary($valueBase64Binary);
        }
        $this->_trackValueSet($this->valueBase64Binary, $valueBase64Binary);
        $this->valueBase64Binary = $valueBase64Binary;
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
        if (null !== $valueInstant && !($valueInstant instanceof FHIRInstant)) {
            $valueInstant = new FHIRInstant($valueInstant);
        }
        $this->_trackValueSet($this->valueInstant, $valueInstant);
        $this->valueInstant = $valueInstant;
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
        if (null !== $valueString && !($valueString instanceof FHIRString)) {
            $valueString = new FHIRString($valueString);
        }
        $this->_trackValueSet($this->valueString, $valueString);
        $this->valueString = $valueString;
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
        if (null !== $valueUri && !($valueUri instanceof FHIRUri)) {
            $valueUri = new FHIRUri($valueUri);
        }
        $this->_trackValueSet($this->valueUri, $valueUri);
        $this->valueUri = $valueUri;
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
        if (null !== $valueDate && !($valueDate instanceof FHIRDate)) {
            $valueDate = new FHIRDate($valueDate);
        }
        $this->_trackValueSet($this->valueDate, $valueDate);
        $this->valueDate = $valueDate;
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
        if (null !== $valueDateTime && !($valueDateTime instanceof FHIRDateTime)) {
            $valueDateTime = new FHIRDateTime($valueDateTime);
        }
        $this->_trackValueSet($this->valueDateTime, $valueDateTime);
        $this->valueDateTime = $valueDateTime;
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
        if (null !== $valueCode && !($valueCode instanceof FHIRCode)) {
            $valueCode = new FHIRCode($valueCode);
        }
        $this->_trackValueSet($this->valueCode, $valueCode);
        $this->valueCode = $valueCode;
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
        if (null !== $valueOid && !($valueOid instanceof FHIROid)) {
            $valueOid = new FHIROid($valueOid);
        }
        $this->_trackValueSet($this->valueOid, $valueOid);
        $this->valueOid = $valueOid;
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
        if (null !== $valueUuid && !($valueUuid instanceof FHIRUuid)) {
            $valueUuid = new FHIRUuid($valueUuid);
        }
        $this->_trackValueSet($this->valueUuid, $valueUuid);
        $this->valueUuid = $valueUuid;
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
        if (null !== $valueId && !($valueId instanceof FHIRId)) {
            $valueId = new FHIRId($valueId);
        }
        $this->_trackValueSet($this->valueId, $valueId);
        $this->valueId = $valueId;
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
        $this->_trackValueSet($this->valueAttachment, $valueAttachment);
        $this->valueAttachment = $valueAttachment;
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
        $this->_trackValueSet($this->valueIdentifier, $valueIdentifier);
        $this->valueIdentifier = $valueIdentifier;
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
        $this->_trackValueSet($this->valueCodeableConcept, $valueCodeableConcept);
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
        $this->_trackValueSet($this->valueCoding, $valueCoding);
        $this->valueCoding = $valueCoding;
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
        $this->_trackValueSet($this->valueQuantity, $valueQuantity);
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
        $this->_trackValueSet($this->valueRange, $valueRange);
        $this->valueRange = $valueRange;
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
        $this->_trackValueSet($this->valuePeriod, $valuePeriod);
        $this->valuePeriod = $valuePeriod;
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
        $this->_trackValueSet($this->valueRatio, $valueRatio);
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
        $this->_trackValueSet($this->valueResource, $valueResource);
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
        $this->_trackValueSet($this->valueSampledData, $valueSampledData);
        $this->valueSampledData = $valueSampledData;
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
        $this->_trackValueSet($this->valueHumanName, $valueHumanName);
        $this->valueHumanName = $valueHumanName;
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
        $this->_trackValueSet($this->valueAddress, $valueAddress);
        $this->valueAddress = $valueAddress;
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
        $this->_trackValueSet($this->valueContact, $valueContact);
        $this->valueContact = $valueContact;
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
        $this->_trackValueSet($this->valueSchedule, $valueSchedule);
        $this->valueSchedule = $valueSchedule;
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
        if (null !== $exampleBoolean && !($exampleBoolean instanceof FHIRBoolean)) {
            $exampleBoolean = new FHIRBoolean($exampleBoolean);
        }
        $this->_trackValueSet($this->exampleBoolean, $exampleBoolean);
        $this->exampleBoolean = $exampleBoolean;
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
        if (null !== $exampleInteger && !($exampleInteger instanceof FHIRInteger)) {
            $exampleInteger = new FHIRInteger($exampleInteger);
        }
        $this->_trackValueSet($this->exampleInteger, $exampleInteger);
        $this->exampleInteger = $exampleInteger;
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
        if (null !== $exampleDecimal && !($exampleDecimal instanceof FHIRDecimal)) {
            $exampleDecimal = new FHIRDecimal($exampleDecimal);
        }
        $this->_trackValueSet($this->exampleDecimal, $exampleDecimal);
        $this->exampleDecimal = $exampleDecimal;
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
        if (null !== $exampleBase64Binary && !($exampleBase64Binary instanceof FHIRBase64Binary)) {
            $exampleBase64Binary = new FHIRBase64Binary($exampleBase64Binary);
        }
        $this->_trackValueSet($this->exampleBase64Binary, $exampleBase64Binary);
        $this->exampleBase64Binary = $exampleBase64Binary;
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
        if (null !== $exampleInstant && !($exampleInstant instanceof FHIRInstant)) {
            $exampleInstant = new FHIRInstant($exampleInstant);
        }
        $this->_trackValueSet($this->exampleInstant, $exampleInstant);
        $this->exampleInstant = $exampleInstant;
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
        if (null !== $exampleString && !($exampleString instanceof FHIRString)) {
            $exampleString = new FHIRString($exampleString);
        }
        $this->_trackValueSet($this->exampleString, $exampleString);
        $this->exampleString = $exampleString;
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
        if (null !== $exampleUri && !($exampleUri instanceof FHIRUri)) {
            $exampleUri = new FHIRUri($exampleUri);
        }
        $this->_trackValueSet($this->exampleUri, $exampleUri);
        $this->exampleUri = $exampleUri;
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
        if (null !== $exampleDate && !($exampleDate instanceof FHIRDate)) {
            $exampleDate = new FHIRDate($exampleDate);
        }
        $this->_trackValueSet($this->exampleDate, $exampleDate);
        $this->exampleDate = $exampleDate;
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
        if (null !== $exampleDateTime && !($exampleDateTime instanceof FHIRDateTime)) {
            $exampleDateTime = new FHIRDateTime($exampleDateTime);
        }
        $this->_trackValueSet($this->exampleDateTime, $exampleDateTime);
        $this->exampleDateTime = $exampleDateTime;
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
        if (null !== $exampleCode && !($exampleCode instanceof FHIRCode)) {
            $exampleCode = new FHIRCode($exampleCode);
        }
        $this->_trackValueSet($this->exampleCode, $exampleCode);
        $this->exampleCode = $exampleCode;
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
        if (null !== $exampleOid && !($exampleOid instanceof FHIROid)) {
            $exampleOid = new FHIROid($exampleOid);
        }
        $this->_trackValueSet($this->exampleOid, $exampleOid);
        $this->exampleOid = $exampleOid;
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
        if (null !== $exampleUuid && !($exampleUuid instanceof FHIRUuid)) {
            $exampleUuid = new FHIRUuid($exampleUuid);
        }
        $this->_trackValueSet($this->exampleUuid, $exampleUuid);
        $this->exampleUuid = $exampleUuid;
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
        if (null !== $exampleId && !($exampleId instanceof FHIRId)) {
            $exampleId = new FHIRId($exampleId);
        }
        $this->_trackValueSet($this->exampleId, $exampleId);
        $this->exampleId = $exampleId;
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
        $this->_trackValueSet($this->exampleAttachment, $exampleAttachment);
        $this->exampleAttachment = $exampleAttachment;
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
        $this->_trackValueSet($this->exampleIdentifier, $exampleIdentifier);
        $this->exampleIdentifier = $exampleIdentifier;
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
        $this->_trackValueSet($this->exampleCodeableConcept, $exampleCodeableConcept);
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
        $this->_trackValueSet($this->exampleCoding, $exampleCoding);
        $this->exampleCoding = $exampleCoding;
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
        $this->_trackValueSet($this->exampleQuantity, $exampleQuantity);
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
        $this->_trackValueSet($this->exampleRange, $exampleRange);
        $this->exampleRange = $exampleRange;
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
        $this->_trackValueSet($this->examplePeriod, $examplePeriod);
        $this->examplePeriod = $examplePeriod;
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
        $this->_trackValueSet($this->exampleRatio, $exampleRatio);
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
        $this->_trackValueSet($this->exampleResource, $exampleResource);
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
        $this->_trackValueSet($this->exampleSampledData, $exampleSampledData);
        $this->exampleSampledData = $exampleSampledData;
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
        $this->_trackValueSet($this->exampleHumanName, $exampleHumanName);
        $this->exampleHumanName = $exampleHumanName;
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
        $this->_trackValueSet($this->exampleAddress, $exampleAddress);
        $this->exampleAddress = $exampleAddress;
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
        $this->_trackValueSet($this->exampleContact, $exampleContact);
        $this->exampleContact = $exampleContact;
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
        $this->_trackValueSet($this->exampleSchedule, $exampleSchedule);
        $this->exampleSchedule = $exampleSchedule;
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
        if (null !== $maxLength && !($maxLength instanceof FHIRInteger)) {
            $maxLength = new FHIRInteger($maxLength);
        }
        $this->_trackValueSet($this->maxLength, $maxLength);
        $this->maxLength = $maxLength;
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
        if (null !== $condition && !($condition instanceof FHIRId)) {
            $condition = new FHIRId($condition);
        }
        $this->_trackValueAdded();
        $this->condition[] = $condition;
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
        if ([] !== $this->condition) {
            $this->_trackValuesRemoved(count($this->condition));
            $this->condition = [];
        }
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
        $this->_trackValueAdded();
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
        if ([] !== $this->constraint) {
            $this->_trackValuesRemoved(count($this->constraint));
            $this->constraint = [];
        }
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
        if (null !== $mustSupport && !($mustSupport instanceof FHIRBoolean)) {
            $mustSupport = new FHIRBoolean($mustSupport);
        }
        $this->_trackValueSet($this->mustSupport, $mustSupport);
        $this->mustSupport = $mustSupport;
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
        if (null !== $isModifier && !($isModifier instanceof FHIRBoolean)) {
            $isModifier = new FHIRBoolean($isModifier);
        }
        $this->_trackValueSet($this->isModifier, $isModifier);
        $this->isModifier = $isModifier;
        return $this;
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
        $this->_trackValueSet($this->binding, $binding);
        $this->binding = $binding;
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
        $this->_trackValueAdded();
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
        if ([] !== $this->mapping) {
            $this->_trackValuesRemoved(count($this->mapping));
            $this->mapping = [];
        }
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
        if (null !== ($v = $this->getShort())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SHORT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFormal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FORMAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getComments())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMMENTS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequirements())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUIREMENTS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSynonym())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SYNONYM, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getMin())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MIN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMax())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getNameReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_BOOLEAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueInteger())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_INTEGER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueDecimal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_DECIMAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueBase64Binary())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_BASE_64BINARY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueInstant())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_INSTANT] = $fieldErrs;
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
        if (null !== ($v = $this->getValueCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueOid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_OID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueUuid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_UUID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueAttachment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_ATTACHMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_IDENTIFIER] = $fieldErrs;
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
        if (null !== ($v = $this->getValuePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_PERIOD] = $fieldErrs;
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
        if (null !== ($v = $this->getValueHumanName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_HUMAN_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueAddress())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_ADDRESS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueContact())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_CONTACT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueSchedule())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_SCHEDULE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_BOOLEAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleInteger())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_INTEGER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleDecimal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_DECIMAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleBase64Binary())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_BASE_64BINARY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleInstant())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_INSTANT] = $fieldErrs;
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
        if (null !== ($v = $this->getExampleCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleOid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_OID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleUuid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_UUID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleAttachment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_ATTACHMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_IDENTIFIER] = $fieldErrs;
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
        if (null !== ($v = $this->getExamplePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_PERIOD] = $fieldErrs;
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
        if (null !== ($v = $this->getExampleHumanName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_HUMAN_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleAddress())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_ADDRESS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleContact())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_CONTACT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleSchedule())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_SCHEDULE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxLength())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_LENGTH] = $fieldErrs;
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
        if (null !== ($v = $this->getMustSupport())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MUST_SUPPORT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIsModifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IS_MODIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBinding())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BINDING] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getMapping())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MAPPING, $i)] = $fieldErrs;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
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
                throw new \DomainException(sprintf('FHIRProfileDefinition::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRProfileDefinition::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRProfileDefinition(null);
        } elseif (!is_object($type) || !($type instanceof FHIRProfileDefinition)) {
            throw new \RuntimeException(sprintf(
                'FHIRProfileDefinition::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition or null, %s seen.',
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
            if (self::FIELD_SHORT === $n->nodeName) {
                $type->setShort(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_FORMAL === $n->nodeName) {
                $type->setFormal(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_COMMENTS === $n->nodeName) {
                $type->setComments(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_REQUIREMENTS === $n->nodeName) {
                $type->setRequirements(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_SYNONYM === $n->nodeName) {
                $type->addSynonym(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_MIN === $n->nodeName) {
                $type->setMin(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_MAX === $n->nodeName) {
                $type->setMax(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_TYPE === $n->nodeName) {
                $type->addType(FHIRProfileType::xmlUnserialize($n));
            } elseif (self::FIELD_NAME_REFERENCE === $n->nodeName) {
                $type->setNameReference(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_BOOLEAN === $n->nodeName) {
                $type->setValueBoolean(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_INTEGER === $n->nodeName) {
                $type->setValueInteger(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_DECIMAL === $n->nodeName) {
                $type->setValueDecimal(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_BASE_64BINARY === $n->nodeName) {
                $type->setValueBase64Binary(FHIRBase64Binary::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_INSTANT === $n->nodeName) {
                $type->setValueInstant(FHIRInstant::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_STRING === $n->nodeName) {
                $type->setValueString(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_URI === $n->nodeName) {
                $type->setValueUri(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_DATE === $n->nodeName) {
                $type->setValueDate(FHIRDate::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_DATE_TIME === $n->nodeName) {
                $type->setValueDateTime(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_CODE === $n->nodeName) {
                $type->setValueCode(FHIRCode::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_OID === $n->nodeName) {
                $type->setValueOid(FHIROid::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_UUID === $n->nodeName) {
                $type->setValueUuid(FHIRUuid::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_ID === $n->nodeName) {
                $type->setValueId(FHIRId::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_ATTACHMENT === $n->nodeName) {
                $type->setValueAttachment(FHIRAttachment::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_IDENTIFIER === $n->nodeName) {
                $type->setValueIdentifier(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_CODEABLE_CONCEPT === $n->nodeName) {
                $type->setValueCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_CODING === $n->nodeName) {
                $type->setValueCoding(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_QUANTITY === $n->nodeName) {
                $type->setValueQuantity(FHIRQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_RANGE === $n->nodeName) {
                $type->setValueRange(FHIRRange::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_PERIOD === $n->nodeName) {
                $type->setValuePeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_RATIO === $n->nodeName) {
                $type->setValueRatio(FHIRRatio::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_RESOURCE === $n->nodeName) {
                $type->setValueResource(FHIRResourceReference::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_SAMPLED_DATA === $n->nodeName) {
                $type->setValueSampledData(FHIRSampledData::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_HUMAN_NAME === $n->nodeName) {
                $type->setValueHumanName(FHIRHumanName::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_ADDRESS === $n->nodeName) {
                $type->setValueAddress(FHIRAddress::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_CONTACT === $n->nodeName) {
                $type->setValueContact(FHIRContact::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_SCHEDULE === $n->nodeName) {
                $type->setValueSchedule(FHIRSchedule::xmlUnserialize($n));
            } elseif (self::FIELD_EXAMPLE_BOOLEAN === $n->nodeName) {
                $type->setExampleBoolean(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_EXAMPLE_INTEGER === $n->nodeName) {
                $type->setExampleInteger(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_EXAMPLE_DECIMAL === $n->nodeName) {
                $type->setExampleDecimal(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_EXAMPLE_BASE_64BINARY === $n->nodeName) {
                $type->setExampleBase64Binary(FHIRBase64Binary::xmlUnserialize($n));
            } elseif (self::FIELD_EXAMPLE_INSTANT === $n->nodeName) {
                $type->setExampleInstant(FHIRInstant::xmlUnserialize($n));
            } elseif (self::FIELD_EXAMPLE_STRING === $n->nodeName) {
                $type->setExampleString(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_EXAMPLE_URI === $n->nodeName) {
                $type->setExampleUri(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_EXAMPLE_DATE === $n->nodeName) {
                $type->setExampleDate(FHIRDate::xmlUnserialize($n));
            } elseif (self::FIELD_EXAMPLE_DATE_TIME === $n->nodeName) {
                $type->setExampleDateTime(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_EXAMPLE_CODE === $n->nodeName) {
                $type->setExampleCode(FHIRCode::xmlUnserialize($n));
            } elseif (self::FIELD_EXAMPLE_OID === $n->nodeName) {
                $type->setExampleOid(FHIROid::xmlUnserialize($n));
            } elseif (self::FIELD_EXAMPLE_UUID === $n->nodeName) {
                $type->setExampleUuid(FHIRUuid::xmlUnserialize($n));
            } elseif (self::FIELD_EXAMPLE_ID === $n->nodeName) {
                $type->setExampleId(FHIRId::xmlUnserialize($n));
            } elseif (self::FIELD_EXAMPLE_ATTACHMENT === $n->nodeName) {
                $type->setExampleAttachment(FHIRAttachment::xmlUnserialize($n));
            } elseif (self::FIELD_EXAMPLE_IDENTIFIER === $n->nodeName) {
                $type->setExampleIdentifier(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_EXAMPLE_CODEABLE_CONCEPT === $n->nodeName) {
                $type->setExampleCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_EXAMPLE_CODING === $n->nodeName) {
                $type->setExampleCoding(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_EXAMPLE_QUANTITY === $n->nodeName) {
                $type->setExampleQuantity(FHIRQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_EXAMPLE_RANGE === $n->nodeName) {
                $type->setExampleRange(FHIRRange::xmlUnserialize($n));
            } elseif (self::FIELD_EXAMPLE_PERIOD === $n->nodeName) {
                $type->setExamplePeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_EXAMPLE_RATIO === $n->nodeName) {
                $type->setExampleRatio(FHIRRatio::xmlUnserialize($n));
            } elseif (self::FIELD_EXAMPLE_RESOURCE === $n->nodeName) {
                $type->setExampleResource(FHIRResourceReference::xmlUnserialize($n));
            } elseif (self::FIELD_EXAMPLE_SAMPLED_DATA === $n->nodeName) {
                $type->setExampleSampledData(FHIRSampledData::xmlUnserialize($n));
            } elseif (self::FIELD_EXAMPLE_HUMAN_NAME === $n->nodeName) {
                $type->setExampleHumanName(FHIRHumanName::xmlUnserialize($n));
            } elseif (self::FIELD_EXAMPLE_ADDRESS === $n->nodeName) {
                $type->setExampleAddress(FHIRAddress::xmlUnserialize($n));
            } elseif (self::FIELD_EXAMPLE_CONTACT === $n->nodeName) {
                $type->setExampleContact(FHIRContact::xmlUnserialize($n));
            } elseif (self::FIELD_EXAMPLE_SCHEDULE === $n->nodeName) {
                $type->setExampleSchedule(FHIRSchedule::xmlUnserialize($n));
            } elseif (self::FIELD_MAX_LENGTH === $n->nodeName) {
                $type->setMaxLength(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_CONDITION === $n->nodeName) {
                $type->addCondition(FHIRId::xmlUnserialize($n));
            } elseif (self::FIELD_CONSTRAINT === $n->nodeName) {
                $type->addConstraint(FHIRProfileConstraint::xmlUnserialize($n));
            } elseif (self::FIELD_MUST_SUPPORT === $n->nodeName) {
                $type->setMustSupport(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_IS_MODIFIER === $n->nodeName) {
                $type->setIsModifier(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_BINDING === $n->nodeName) {
                $type->setBinding(FHIRProfileBinding::xmlUnserialize($n));
            } elseif (self::FIELD_MAPPING === $n->nodeName) {
                $type->addMapping(FHIRProfileMapping1::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SHORT);
        if (null !== $n) {
            $pt = $type->getShort();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setShort($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_FORMAL);
        if (null !== $n) {
            $pt = $type->getFormal();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setFormal($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_COMMENTS);
        if (null !== $n) {
            $pt = $type->getComments();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setComments($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_REQUIREMENTS);
        if (null !== $n) {
            $pt = $type->getRequirements();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setRequirements($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SYNONYM);
        if (null !== $n) {
            $pt = $type->getSynonym();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->addSynonym($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_MIN);
        if (null !== $n) {
            $pt = $type->getMin();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setMin($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_MAX);
        if (null !== $n) {
            $pt = $type->getMax();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setMax($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_NAME_REFERENCE);
        if (null !== $n) {
            $pt = $type->getNameReference();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setNameReference($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_VALUE_BOOLEAN);
        if (null !== $n) {
            $pt = $type->getValueBoolean();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setValueBoolean($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_VALUE_INTEGER);
        if (null !== $n) {
            $pt = $type->getValueInteger();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setValueInteger($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_VALUE_DECIMAL);
        if (null !== $n) {
            $pt = $type->getValueDecimal();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setValueDecimal($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_VALUE_BASE_64BINARY);
        if (null !== $n) {
            $pt = $type->getValueBase64Binary();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setValueBase64Binary($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_VALUE_INSTANT);
        if (null !== $n) {
            $pt = $type->getValueInstant();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setValueInstant($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_VALUE_STRING);
        if (null !== $n) {
            $pt = $type->getValueString();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setValueString($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_VALUE_URI);
        if (null !== $n) {
            $pt = $type->getValueUri();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setValueUri($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_VALUE_DATE);
        if (null !== $n) {
            $pt = $type->getValueDate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setValueDate($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_VALUE_DATE_TIME);
        if (null !== $n) {
            $pt = $type->getValueDateTime();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setValueDateTime($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_VALUE_CODE);
        if (null !== $n) {
            $pt = $type->getValueCode();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setValueCode($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_VALUE_OID);
        if (null !== $n) {
            $pt = $type->getValueOid();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setValueOid($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_VALUE_UUID);
        if (null !== $n) {
            $pt = $type->getValueUuid();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setValueUuid($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_VALUE_ID);
        if (null !== $n) {
            $pt = $type->getValueId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setValueId($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_BOOLEAN);
        if (null !== $n) {
            $pt = $type->getExampleBoolean();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setExampleBoolean($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_INTEGER);
        if (null !== $n) {
            $pt = $type->getExampleInteger();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setExampleInteger($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_DECIMAL);
        if (null !== $n) {
            $pt = $type->getExampleDecimal();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setExampleDecimal($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_BASE_64BINARY);
        if (null !== $n) {
            $pt = $type->getExampleBase64Binary();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setExampleBase64Binary($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_INSTANT);
        if (null !== $n) {
            $pt = $type->getExampleInstant();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setExampleInstant($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_STRING);
        if (null !== $n) {
            $pt = $type->getExampleString();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setExampleString($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_URI);
        if (null !== $n) {
            $pt = $type->getExampleUri();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setExampleUri($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_DATE);
        if (null !== $n) {
            $pt = $type->getExampleDate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setExampleDate($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_DATE_TIME);
        if (null !== $n) {
            $pt = $type->getExampleDateTime();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setExampleDateTime($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_CODE);
        if (null !== $n) {
            $pt = $type->getExampleCode();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setExampleCode($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_OID);
        if (null !== $n) {
            $pt = $type->getExampleOid();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setExampleOid($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_UUID);
        if (null !== $n) {
            $pt = $type->getExampleUuid();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setExampleUuid($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_ID);
        if (null !== $n) {
            $pt = $type->getExampleId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setExampleId($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_MAX_LENGTH);
        if (null !== $n) {
            $pt = $type->getMaxLength();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setMaxLength($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_CONDITION);
        if (null !== $n) {
            $pt = $type->getCondition();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->addCondition($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_MUST_SUPPORT);
        if (null !== $n) {
            $pt = $type->getMustSupport();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setMustSupport($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_IS_MODIFIER);
        if (null !== $n) {
            $pt = $type->getIsModifier();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setIsModifier($n->nodeValue);
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
        if (null !== ($v = $this->getShort())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SHORT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getFormal())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FORMAL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getComments())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_COMMENTS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRequirements())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REQUIREMENTS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getSynonym())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SYNONYM);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getMin())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MIN);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getMax())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MAX);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getNameReference())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NAME_REFERENCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueBoolean())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_BOOLEAN);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueInteger())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_INTEGER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueDecimal())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_DECIMAL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueBase64Binary())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_BASE_64BINARY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueInstant())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_INSTANT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueString())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_STRING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueUri())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_URI);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueDateTime())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_DATE_TIME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueCode())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_CODE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueOid())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_OID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueUuid())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_UUID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueId())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_ID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueAttachment())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_ATTACHMENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueIdentifier())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_IDENTIFIER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueCodeableConcept())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_CODEABLE_CONCEPT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueCoding())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_CODING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueQuantity())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_QUANTITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueRange())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_RANGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValuePeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueRatio())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_RATIO);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueResource())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_RESOURCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueSampledData())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_SAMPLED_DATA);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueHumanName())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_HUMAN_NAME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueAddress())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_ADDRESS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueContact())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_CONTACT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueSchedule())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_SCHEDULE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExampleBoolean())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_BOOLEAN);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExampleInteger())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_INTEGER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExampleDecimal())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_DECIMAL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExampleBase64Binary())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_BASE_64BINARY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExampleInstant())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_INSTANT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExampleString())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_STRING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExampleUri())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_URI);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExampleDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExampleDateTime())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_DATE_TIME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExampleCode())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_CODE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExampleOid())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_OID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExampleUuid())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_UUID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExampleId())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_ID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExampleAttachment())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_ATTACHMENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExampleIdentifier())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_IDENTIFIER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExampleCodeableConcept())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_CODEABLE_CONCEPT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExampleCoding())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_CODING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExampleQuantity())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_QUANTITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExampleRange())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_RANGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExamplePeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExampleRatio())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_RATIO);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExampleResource())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_RESOURCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExampleSampledData())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_SAMPLED_DATA);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExampleHumanName())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_HUMAN_NAME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExampleAddress())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_ADDRESS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExampleContact())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_CONTACT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExampleSchedule())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_SCHEDULE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getMaxLength())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MAX_LENGTH);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getCondition())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CONDITION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getConstraint())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CONSTRAINT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getMustSupport())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MUST_SUPPORT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getIsModifier())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_IS_MODIFIER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getBinding())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_BINDING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getMapping())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_MAPPING);
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
        if (null !== ($v = $this->getShort())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_SHORT] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_SHORT_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getFormal())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_FORMAL] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_FORMAL_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getComments())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_COMMENTS] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_COMMENTS_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getRequirements())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_REQUIREMENTS] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_REQUIREMENTS_EXT] = $ext;
            }
        }
        if ([] !== ($vs = $this->getSynonym())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext[FHIRString::FIELD_VALUE]);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $a[self::FIELD_SYNONYM] = $vals;
            }
            if ([] !== $exts) {
                $a[self::FIELD_SYNONYM_EXT] = $exts;
            }
        }
        if (null !== ($v = $this->getMin())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MIN] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRInteger::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_MIN_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getMax())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MAX] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_MAX_EXT] = $ext;
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
        if (null !== ($v = $this->getNameReference())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_NAME_REFERENCE] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_NAME_REFERENCE_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getValueBoolean())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_BOOLEAN] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRBoolean::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_VALUE_BOOLEAN_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getValueInteger())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_INTEGER] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRInteger::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_VALUE_INTEGER_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getValueDecimal())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_DECIMAL] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRDecimal::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_VALUE_DECIMAL_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getValueBase64Binary())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_BASE_64BINARY] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRBase64Binary::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_VALUE_BASE_64BINARY_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getValueInstant())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_INSTANT] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRInstant::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_VALUE_INSTANT_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getValueString())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_STRING] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_VALUE_STRING_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getValueUri())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_URI] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRUri::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_VALUE_URI_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getValueDate())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_DATE] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRDate::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_VALUE_DATE_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getValueDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_DATE_TIME] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRDateTime::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_VALUE_DATE_TIME_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getValueCode())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_CODE] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRCode::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_VALUE_CODE_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getValueOid())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_OID] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIROid::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_VALUE_OID_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getValueUuid())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_UUID] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRUuid::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_VALUE_UUID_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getValueId())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_ID] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRId::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_VALUE_ID_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getValueAttachment())) {
            $a[self::FIELD_VALUE_ATTACHMENT] = $v;
        }
        if (null !== ($v = $this->getValueIdentifier())) {
            $a[self::FIELD_VALUE_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getValueCodeableConcept())) {
            $a[self::FIELD_VALUE_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getValueCoding())) {
            $a[self::FIELD_VALUE_CODING] = $v;
        }
        if (null !== ($v = $this->getValueQuantity())) {
            $a[self::FIELD_VALUE_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getValueRange())) {
            $a[self::FIELD_VALUE_RANGE] = $v;
        }
        if (null !== ($v = $this->getValuePeriod())) {
            $a[self::FIELD_VALUE_PERIOD] = $v;
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
        if (null !== ($v = $this->getValueHumanName())) {
            $a[self::FIELD_VALUE_HUMAN_NAME] = $v;
        }
        if (null !== ($v = $this->getValueAddress())) {
            $a[self::FIELD_VALUE_ADDRESS] = $v;
        }
        if (null !== ($v = $this->getValueContact())) {
            $a[self::FIELD_VALUE_CONTACT] = $v;
        }
        if (null !== ($v = $this->getValueSchedule())) {
            $a[self::FIELD_VALUE_SCHEDULE] = $v;
        }
        if (null !== ($v = $this->getExampleBoolean())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_EXAMPLE_BOOLEAN] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRBoolean::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_EXAMPLE_BOOLEAN_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getExampleInteger())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_EXAMPLE_INTEGER] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRInteger::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_EXAMPLE_INTEGER_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getExampleDecimal())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_EXAMPLE_DECIMAL] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRDecimal::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_EXAMPLE_DECIMAL_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getExampleBase64Binary())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_EXAMPLE_BASE_64BINARY] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRBase64Binary::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_EXAMPLE_BASE_64BINARY_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getExampleInstant())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_EXAMPLE_INSTANT] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRInstant::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_EXAMPLE_INSTANT_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getExampleString())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_EXAMPLE_STRING] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_EXAMPLE_STRING_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getExampleUri())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_EXAMPLE_URI] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRUri::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_EXAMPLE_URI_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getExampleDate())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_EXAMPLE_DATE] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRDate::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_EXAMPLE_DATE_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getExampleDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_EXAMPLE_DATE_TIME] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRDateTime::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_EXAMPLE_DATE_TIME_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getExampleCode())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_EXAMPLE_CODE] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRCode::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_EXAMPLE_CODE_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getExampleOid())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_EXAMPLE_OID] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIROid::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_EXAMPLE_OID_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getExampleUuid())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_EXAMPLE_UUID] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRUuid::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_EXAMPLE_UUID_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getExampleId())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_EXAMPLE_ID] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRId::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_EXAMPLE_ID_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getExampleAttachment())) {
            $a[self::FIELD_EXAMPLE_ATTACHMENT] = $v;
        }
        if (null !== ($v = $this->getExampleIdentifier())) {
            $a[self::FIELD_EXAMPLE_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getExampleCodeableConcept())) {
            $a[self::FIELD_EXAMPLE_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getExampleCoding())) {
            $a[self::FIELD_EXAMPLE_CODING] = $v;
        }
        if (null !== ($v = $this->getExampleQuantity())) {
            $a[self::FIELD_EXAMPLE_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getExampleRange())) {
            $a[self::FIELD_EXAMPLE_RANGE] = $v;
        }
        if (null !== ($v = $this->getExamplePeriod())) {
            $a[self::FIELD_EXAMPLE_PERIOD] = $v;
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
        if (null !== ($v = $this->getExampleHumanName())) {
            $a[self::FIELD_EXAMPLE_HUMAN_NAME] = $v;
        }
        if (null !== ($v = $this->getExampleAddress())) {
            $a[self::FIELD_EXAMPLE_ADDRESS] = $v;
        }
        if (null !== ($v = $this->getExampleContact())) {
            $a[self::FIELD_EXAMPLE_CONTACT] = $v;
        }
        if (null !== ($v = $this->getExampleSchedule())) {
            $a[self::FIELD_EXAMPLE_SCHEDULE] = $v;
        }
        if (null !== ($v = $this->getMaxLength())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MAX_LENGTH] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRInteger::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_MAX_LENGTH_EXT] = $ext;
            }
        }
        if ([] !== ($vs = $this->getCondition())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext[FHIRId::FIELD_VALUE]);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $a[self::FIELD_CONDITION] = $vals;
            }
            if ([] !== $exts) {
                $a[self::FIELD_CONDITION_EXT] = $exts;
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
        if (null !== ($v = $this->getMustSupport())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MUST_SUPPORT] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRBoolean::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_MUST_SUPPORT_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getIsModifier())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_IS_MODIFIER] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRBoolean::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_IS_MODIFIER_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getBinding())) {
            $a[self::FIELD_BINDING] = $v;
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