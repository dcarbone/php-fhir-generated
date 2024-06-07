<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 7th, 2024 20:38+0000
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

use DCarbone\PHPFHIRGenerated\STU3\FHIRBase64BinaryPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddress;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRHumanName;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRAge;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRCount;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDistance;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSampledData;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSignature;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapSourceListMode;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIROidPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRTimePrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRUnsignedIntPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter;

/**
 * A Map of relationships between 2 structures that can be used to transform data.
 *
 * Class FHIRStructureMapSource
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap
 */
class FHIRStructureMapSource extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE;

    const FIELD_CONTEXT = 'context';
    const FIELD_CONTEXT_EXT = '_context';
    const FIELD_MIN = 'min';
    const FIELD_MIN_EXT = '_min';
    const FIELD_MAX = 'max';
    const FIELD_MAX_EXT = '_max';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_DEFAULT_VALUE_BASE_64BINARY = 'defaultValueBase64Binary';
    const FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT = '_defaultValueBase64Binary';
    const FIELD_DEFAULT_VALUE_BOOLEAN = 'defaultValueBoolean';
    const FIELD_DEFAULT_VALUE_BOOLEAN_EXT = '_defaultValueBoolean';
    const FIELD_DEFAULT_VALUE_CODE = 'defaultValueCode';
    const FIELD_DEFAULT_VALUE_CODE_EXT = '_defaultValueCode';
    const FIELD_DEFAULT_VALUE_DATE = 'defaultValueDate';
    const FIELD_DEFAULT_VALUE_DATE_EXT = '_defaultValueDate';
    const FIELD_DEFAULT_VALUE_DATE_TIME = 'defaultValueDateTime';
    const FIELD_DEFAULT_VALUE_DATE_TIME_EXT = '_defaultValueDateTime';
    const FIELD_DEFAULT_VALUE_DECIMAL = 'defaultValueDecimal';
    const FIELD_DEFAULT_VALUE_DECIMAL_EXT = '_defaultValueDecimal';
    const FIELD_DEFAULT_VALUE_ID = 'defaultValueId';
    const FIELD_DEFAULT_VALUE_ID_EXT = '_defaultValueId';
    const FIELD_DEFAULT_VALUE_INSTANT = 'defaultValueInstant';
    const FIELD_DEFAULT_VALUE_INSTANT_EXT = '_defaultValueInstant';
    const FIELD_DEFAULT_VALUE_INTEGER = 'defaultValueInteger';
    const FIELD_DEFAULT_VALUE_INTEGER_EXT = '_defaultValueInteger';
    const FIELD_DEFAULT_VALUE_MARKDOWN = 'defaultValueMarkdown';
    const FIELD_DEFAULT_VALUE_MARKDOWN_EXT = '_defaultValueMarkdown';
    const FIELD_DEFAULT_VALUE_OID = 'defaultValueOid';
    const FIELD_DEFAULT_VALUE_OID_EXT = '_defaultValueOid';
    const FIELD_DEFAULT_VALUE_POSITIVE_INT = 'defaultValuePositiveInt';
    const FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT = '_defaultValuePositiveInt';
    const FIELD_DEFAULT_VALUE_STRING = 'defaultValueString';
    const FIELD_DEFAULT_VALUE_STRING_EXT = '_defaultValueString';
    const FIELD_DEFAULT_VALUE_TIME = 'defaultValueTime';
    const FIELD_DEFAULT_VALUE_TIME_EXT = '_defaultValueTime';
    const FIELD_DEFAULT_VALUE_UNSIGNED_INT = 'defaultValueUnsignedInt';
    const FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT = '_defaultValueUnsignedInt';
    const FIELD_DEFAULT_VALUE_URI = 'defaultValueUri';
    const FIELD_DEFAULT_VALUE_URI_EXT = '_defaultValueUri';
    const FIELD_DEFAULT_VALUE_ADDRESS = 'defaultValueAddress';
    const FIELD_DEFAULT_VALUE_AGE = 'defaultValueAge';
    const FIELD_DEFAULT_VALUE_ANNOTATION = 'defaultValueAnnotation';
    const FIELD_DEFAULT_VALUE_ATTACHMENT = 'defaultValueAttachment';
    const FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT = 'defaultValueCodeableConcept';
    const FIELD_DEFAULT_VALUE_CODING = 'defaultValueCoding';
    const FIELD_DEFAULT_VALUE_CONTACT_POINT = 'defaultValueContactPoint';
    const FIELD_DEFAULT_VALUE_COUNT = 'defaultValueCount';
    const FIELD_DEFAULT_VALUE_DISTANCE = 'defaultValueDistance';
    const FIELD_DEFAULT_VALUE_DURATION = 'defaultValueDuration';
    const FIELD_DEFAULT_VALUE_HUMAN_NAME = 'defaultValueHumanName';
    const FIELD_DEFAULT_VALUE_IDENTIFIER = 'defaultValueIdentifier';
    const FIELD_DEFAULT_VALUE_MONEY = 'defaultValueMoney';
    const FIELD_DEFAULT_VALUE_PERIOD = 'defaultValuePeriod';
    const FIELD_DEFAULT_VALUE_QUANTITY = 'defaultValueQuantity';
    const FIELD_DEFAULT_VALUE_RANGE = 'defaultValueRange';
    const FIELD_DEFAULT_VALUE_RATIO = 'defaultValueRatio';
    const FIELD_DEFAULT_VALUE_REFERENCE = 'defaultValueReference';
    const FIELD_DEFAULT_VALUE_SAMPLED_DATA = 'defaultValueSampledData';
    const FIELD_DEFAULT_VALUE_SIGNATURE = 'defaultValueSignature';
    const FIELD_DEFAULT_VALUE_TIMING = 'defaultValueTiming';
    const FIELD_DEFAULT_VALUE_META = 'defaultValueMeta';
    const FIELD_ELEMENT = 'element';
    const FIELD_ELEMENT_EXT = '_element';
    const FIELD_LIST_MODE = 'listMode';
    const FIELD_LIST_MODE_EXT = '_listMode';
    const FIELD_VARIABLE = 'variable';
    const FIELD_VARIABLE_EXT = '_variable';
    const FIELD_CONDITION = 'condition';
    const FIELD_CONDITION_EXT = '_condition';
    const FIELD_CHECK = 'check';
    const FIELD_CHECK_EXT = '_check';

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Type or variable this rule applies to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    protected null|FHIRId $context = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified minimum cardinality for the element. This is optional; if present, it
     * acts an implicit check on the input content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $min = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified maximum cardinality for the element - a number or a "*". This is
     * optional; if present, it acts an implicit check on the input content (* just
     * serves as documentation; it's the default value).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $max = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified type for the element. This works as a condition on the mapping - use
     * for polymorphic elements.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $type = null;
    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary
     */
    protected null|FHIRBase64Binary $defaultValueBase64Binary = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $defaultValueBoolean = null;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    protected null|FHIRCode $defaultValueCode = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    protected null|FHIRDate $defaultValueDate = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $defaultValueDateTime = null;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $defaultValueDecimal = null;
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    protected null|FHIRId $defaultValueId = null;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    protected null|FHIRInstant $defaultValueInstant = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $defaultValueInteger = null;
    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $defaultValueMarkdown = null;
    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid
     */
    protected null|FHIROid $defaultValueOid = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $defaultValuePositiveInt = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $defaultValueString = null;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    protected null|FHIRTime $defaultValueTime = null;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    protected null|FHIRUnsignedInt $defaultValueUnsignedInt = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $defaultValueUri = null;
    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddress
     */
    protected null|FHIRAddress $defaultValueAddress = null;
    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRAge
     */
    protected null|FHIRAge $defaultValueAge = null;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation
     */
    protected null|FHIRAnnotation $defaultValueAnnotation = null;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment
     */
    protected null|FHIRAttachment $defaultValueAttachment = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $defaultValueCodeableConcept = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding
     */
    protected null|FHIRCoding $defaultValueCoding = null;
    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint
     */
    protected null|FHIRContactPoint $defaultValueContactPoint = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRCount
     */
    protected null|FHIRCount $defaultValueCount = null;
    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDistance
     */
    protected null|FHIRDistance $defaultValueDistance = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected null|FHIRDuration $defaultValueDuration = null;
    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRHumanName
     */
    protected null|FHIRHumanName $defaultValueHumanName = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    protected null|FHIRIdentifier $defaultValueIdentifier = null;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney
     */
    protected null|FHIRMoney $defaultValueMoney = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $defaultValuePeriod = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    protected null|FHIRQuantity $defaultValueQuantity = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange
     */
    protected null|FHIRRange $defaultValueRange = null;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio
     */
    protected null|FHIRRatio $defaultValueRatio = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $defaultValueReference = null;
    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSampledData
     */
    protected null|FHIRSampledData $defaultValueSampledData = null;
    /**
     * A digital signature along with supporting context. The signature may be
     * electronic/cryptographic in nature, or a graphical image representing a
     * hand-written signature, or a signature process. Different signature approaches
     * have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSignature
     */
    protected null|FHIRSignature $defaultValueSignature = null;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming
     */
    protected null|FHIRTiming $defaultValueTiming = null;
    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content may not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta
     */
    protected null|FHIRMeta $defaultValueMeta = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Optional field for this source.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $element = null;
    /**
     * If field is a list, how to manage the source
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How to handle the list mode for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapSourceListMode
     */
    protected null|FHIRStructureMapSourceListMode $listMode = null;
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Named context for field, if a field is specified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    protected null|FHIRId $variable = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * FHIRPath expression - must be true or the rule does not apply.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $condition = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * FHIRPath expression - must be true or the mapping engine throws an error instead
     * of completing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $check = null;

    /**
     * Validation map for fields in type StructureMap.Source
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRStructureMapSource Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_CONTEXT, $data) || array_key_exists(self::FIELD_CONTEXT_EXT, $data)) {
            $value = $data[self::FIELD_CONTEXT] ?? null;
            $ext = (isset($data[self::FIELD_CONTEXT_EXT]) && is_array($data[self::FIELD_CONTEXT_EXT])) ? $data[self::FIELD_CONTEXT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setContext($value);
                } else if (is_array($value)) {
                    $this->setContext(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setContext(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setContext(new FHIRId($ext));
            } else {
                $this->setContext(new FHIRId(null));
            }
        }
        if (array_key_exists(self::FIELD_MIN, $data) || array_key_exists(self::FIELD_MIN_EXT, $data)) {
            $value = $data[self::FIELD_MIN] ?? null;
            $ext = (isset($data[self::FIELD_MIN_EXT]) && is_array($data[self::FIELD_MIN_EXT])) ? $data[self::FIELD_MIN_EXT] : [];
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
            } else {
                $this->setMin(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_MAX, $data) || array_key_exists(self::FIELD_MAX_EXT, $data)) {
            $value = $data[self::FIELD_MAX] ?? null;
            $ext = (isset($data[self::FIELD_MAX_EXT]) && is_array($data[self::FIELD_MAX_EXT])) ? $data[self::FIELD_MAX_EXT] : [];
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
            } else {
                $this->setMax(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_TYPE, $data) || array_key_exists(self::FIELD_TYPE_EXT, $data)) {
            $value = $data[self::FIELD_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) ? $data[self::FIELD_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setType(new FHIRString($ext));
            } else {
                $this->setType(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_BASE_64BINARY, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBase64Binary) {
                    $this->setDefaultValueBase64Binary($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueBase64Binary(new FHIRBase64Binary(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueBase64Binary(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueBase64Binary(new FHIRBase64Binary($ext));
            } else {
                $this->setDefaultValueBase64Binary(new FHIRBase64Binary(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_BOOLEAN, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_BOOLEAN] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setDefaultValueBoolean($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueBoolean(new FHIRBoolean($ext));
            } else {
                $this->setDefaultValueBoolean(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_CODE, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_CODE_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_CODE] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_CODE_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_CODE_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_CODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setDefaultValueCode($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueCode(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueCode(new FHIRCode($ext));
            } else {
                $this->setDefaultValueCode(new FHIRCode(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_DATE, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_DATE_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_DATE] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_DATE_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_DATE_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setDefaultValueDate($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueDate(new FHIRDate($ext));
            } else {
                $this->setDefaultValueDate(new FHIRDate(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_DATE_TIME, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDefaultValueDateTime($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueDateTime(new FHIRDateTime($ext));
            } else {
                $this->setDefaultValueDateTime(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_DECIMAL, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_DECIMAL_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_DECIMAL] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_DECIMAL_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_DECIMAL_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_DECIMAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setDefaultValueDecimal($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueDecimal(new FHIRDecimal($ext));
            } else {
                $this->setDefaultValueDecimal(new FHIRDecimal(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_ID, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_ID_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_ID] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_ID_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_ID_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setDefaultValueId($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueId(new FHIRId($ext));
            } else {
                $this->setDefaultValueId(new FHIRId(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_INSTANT, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_INSTANT_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_INSTANT] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_INSTANT_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_INSTANT_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_INSTANT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setDefaultValueInstant($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueInstant(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueInstant(new FHIRInstant($ext));
            } else {
                $this->setDefaultValueInstant(new FHIRInstant(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_INTEGER, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_INTEGER_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_INTEGER] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_INTEGER_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_INTEGER_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_INTEGER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setDefaultValueInteger($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueInteger(new FHIRInteger($ext));
            } else {
                $this->setDefaultValueInteger(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_MARKDOWN, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_MARKDOWN] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setDefaultValueMarkdown($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueMarkdown(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueMarkdown(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueMarkdown(new FHIRMarkdown($ext));
            } else {
                $this->setDefaultValueMarkdown(new FHIRMarkdown(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_OID, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_OID_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_OID] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_OID_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_OID_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_OID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIROid) {
                    $this->setDefaultValueOid($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueOid(new FHIROid(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueOid(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueOid(new FHIROid($ext));
            } else {
                $this->setDefaultValueOid(new FHIROid(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_POSITIVE_INT, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setDefaultValuePositiveInt($value);
                } else if (is_array($value)) {
                    $this->setDefaultValuePositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValuePositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValuePositiveInt(new FHIRPositiveInt($ext));
            } else {
                $this->setDefaultValuePositiveInt(new FHIRPositiveInt(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_STRING, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_STRING_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_STRING] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_STRING_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_STRING_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDefaultValueString($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueString(new FHIRString($ext));
            } else {
                $this->setDefaultValueString(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_TIME, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_TIME_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_TIME_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_TIME_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $this->setDefaultValueTime($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueTime(new FHIRTime($ext));
            } else {
                $this->setDefaultValueTime(new FHIRTime(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_UNSIGNED_INT, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setDefaultValueUnsignedInt($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueUnsignedInt(new FHIRUnsignedInt($ext));
            } else {
                $this->setDefaultValueUnsignedInt(new FHIRUnsignedInt(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_URI, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_URI_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_URI] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_URI_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_URI_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_URI_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setDefaultValueUri($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueUri(new FHIRUri($ext));
            } else {
                $this->setDefaultValueUri(new FHIRUri(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_ADDRESS, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_ADDRESS] instanceof FHIRAddress) {
                $this->setDefaultValueAddress($data[self::FIELD_DEFAULT_VALUE_ADDRESS]);
            } else {
                $this->setDefaultValueAddress(new FHIRAddress($data[self::FIELD_DEFAULT_VALUE_ADDRESS]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_AGE, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_AGE] instanceof FHIRAge) {
                $this->setDefaultValueAge($data[self::FIELD_DEFAULT_VALUE_AGE]);
            } else {
                $this->setDefaultValueAge(new FHIRAge($data[self::FIELD_DEFAULT_VALUE_AGE]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_ANNOTATION, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_ANNOTATION] instanceof FHIRAnnotation) {
                $this->setDefaultValueAnnotation($data[self::FIELD_DEFAULT_VALUE_ANNOTATION]);
            } else {
                $this->setDefaultValueAnnotation(new FHIRAnnotation($data[self::FIELD_DEFAULT_VALUE_ANNOTATION]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_ATTACHMENT, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setDefaultValueAttachment($data[self::FIELD_DEFAULT_VALUE_ATTACHMENT]);
            } else {
                $this->setDefaultValueAttachment(new FHIRAttachment($data[self::FIELD_DEFAULT_VALUE_ATTACHMENT]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setDefaultValueCodeableConcept($data[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT]);
            } else {
                $this->setDefaultValueCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_CODING, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_CODING] instanceof FHIRCoding) {
                $this->setDefaultValueCoding($data[self::FIELD_DEFAULT_VALUE_CODING]);
            } else {
                $this->setDefaultValueCoding(new FHIRCoding($data[self::FIELD_DEFAULT_VALUE_CODING]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_CONTACT_POINT, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT] instanceof FHIRContactPoint) {
                $this->setDefaultValueContactPoint($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT]);
            } else {
                $this->setDefaultValueContactPoint(new FHIRContactPoint($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_COUNT, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_COUNT] instanceof FHIRCount) {
                $this->setDefaultValueCount($data[self::FIELD_DEFAULT_VALUE_COUNT]);
            } else {
                $this->setDefaultValueCount(new FHIRCount($data[self::FIELD_DEFAULT_VALUE_COUNT]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_DISTANCE, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_DISTANCE] instanceof FHIRDistance) {
                $this->setDefaultValueDistance($data[self::FIELD_DEFAULT_VALUE_DISTANCE]);
            } else {
                $this->setDefaultValueDistance(new FHIRDistance($data[self::FIELD_DEFAULT_VALUE_DISTANCE]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_DURATION, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_DURATION] instanceof FHIRDuration) {
                $this->setDefaultValueDuration($data[self::FIELD_DEFAULT_VALUE_DURATION]);
            } else {
                $this->setDefaultValueDuration(new FHIRDuration($data[self::FIELD_DEFAULT_VALUE_DURATION]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_HUMAN_NAME, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_HUMAN_NAME] instanceof FHIRHumanName) {
                $this->setDefaultValueHumanName($data[self::FIELD_DEFAULT_VALUE_HUMAN_NAME]);
            } else {
                $this->setDefaultValueHumanName(new FHIRHumanName($data[self::FIELD_DEFAULT_VALUE_HUMAN_NAME]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_IDENTIFIER, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setDefaultValueIdentifier($data[self::FIELD_DEFAULT_VALUE_IDENTIFIER]);
            } else {
                $this->setDefaultValueIdentifier(new FHIRIdentifier($data[self::FIELD_DEFAULT_VALUE_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_MONEY, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_MONEY] instanceof FHIRMoney) {
                $this->setDefaultValueMoney($data[self::FIELD_DEFAULT_VALUE_MONEY]);
            } else {
                $this->setDefaultValueMoney(new FHIRMoney($data[self::FIELD_DEFAULT_VALUE_MONEY]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_PERIOD, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_PERIOD] instanceof FHIRPeriod) {
                $this->setDefaultValuePeriod($data[self::FIELD_DEFAULT_VALUE_PERIOD]);
            } else {
                $this->setDefaultValuePeriod(new FHIRPeriod($data[self::FIELD_DEFAULT_VALUE_PERIOD]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_QUANTITY, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_QUANTITY] instanceof FHIRQuantity) {
                $this->setDefaultValueQuantity($data[self::FIELD_DEFAULT_VALUE_QUANTITY]);
            } else {
                $this->setDefaultValueQuantity(new FHIRQuantity($data[self::FIELD_DEFAULT_VALUE_QUANTITY]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_RANGE, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_RANGE] instanceof FHIRRange) {
                $this->setDefaultValueRange($data[self::FIELD_DEFAULT_VALUE_RANGE]);
            } else {
                $this->setDefaultValueRange(new FHIRRange($data[self::FIELD_DEFAULT_VALUE_RANGE]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_RATIO, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_RATIO] instanceof FHIRRatio) {
                $this->setDefaultValueRatio($data[self::FIELD_DEFAULT_VALUE_RATIO]);
            } else {
                $this->setDefaultValueRatio(new FHIRRatio($data[self::FIELD_DEFAULT_VALUE_RATIO]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_REFERENCE, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_REFERENCE] instanceof FHIRReference) {
                $this->setDefaultValueReference($data[self::FIELD_DEFAULT_VALUE_REFERENCE]);
            } else {
                $this->setDefaultValueReference(new FHIRReference($data[self::FIELD_DEFAULT_VALUE_REFERENCE]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_SAMPLED_DATA, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA] instanceof FHIRSampledData) {
                $this->setDefaultValueSampledData($data[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA]);
            } else {
                $this->setDefaultValueSampledData(new FHIRSampledData($data[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_SIGNATURE, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_SIGNATURE] instanceof FHIRSignature) {
                $this->setDefaultValueSignature($data[self::FIELD_DEFAULT_VALUE_SIGNATURE]);
            } else {
                $this->setDefaultValueSignature(new FHIRSignature($data[self::FIELD_DEFAULT_VALUE_SIGNATURE]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_TIMING, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_TIMING] instanceof FHIRTiming) {
                $this->setDefaultValueTiming($data[self::FIELD_DEFAULT_VALUE_TIMING]);
            } else {
                $this->setDefaultValueTiming(new FHIRTiming($data[self::FIELD_DEFAULT_VALUE_TIMING]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_META, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_META] instanceof FHIRMeta) {
                $this->setDefaultValueMeta($data[self::FIELD_DEFAULT_VALUE_META]);
            } else {
                $this->setDefaultValueMeta(new FHIRMeta($data[self::FIELD_DEFAULT_VALUE_META]));
            }
        }
        if (array_key_exists(self::FIELD_ELEMENT, $data) || array_key_exists(self::FIELD_ELEMENT_EXT, $data)) {
            $value = $data[self::FIELD_ELEMENT] ?? null;
            $ext = (isset($data[self::FIELD_ELEMENT_EXT]) && is_array($data[self::FIELD_ELEMENT_EXT])) ? $data[self::FIELD_ELEMENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setElement($value);
                } else if (is_array($value)) {
                    $this->setElement(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setElement(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setElement(new FHIRString($ext));
            } else {
                $this->setElement(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_LIST_MODE, $data) || array_key_exists(self::FIELD_LIST_MODE_EXT, $data)) {
            $value = $data[self::FIELD_LIST_MODE] ?? null;
            $ext = (isset($data[self::FIELD_LIST_MODE_EXT]) && is_array($data[self::FIELD_LIST_MODE_EXT])) ? $data[self::FIELD_LIST_MODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRStructureMapSourceListMode) {
                    $this->setListMode($value);
                } else if (is_array($value)) {
                    $this->setListMode(new FHIRStructureMapSourceListMode(array_merge($ext, $value)));
                } else {
                    $this->setListMode(new FHIRStructureMapSourceListMode([FHIRStructureMapSourceListMode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setListMode(new FHIRStructureMapSourceListMode($ext));
            } else {
                $this->setListMode(new FHIRStructureMapSourceListMode(null));
            }
        }
        if (array_key_exists(self::FIELD_VARIABLE, $data) || array_key_exists(self::FIELD_VARIABLE_EXT, $data)) {
            $value = $data[self::FIELD_VARIABLE] ?? null;
            $ext = (isset($data[self::FIELD_VARIABLE_EXT]) && is_array($data[self::FIELD_VARIABLE_EXT])) ? $data[self::FIELD_VARIABLE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setVariable($value);
                } else if (is_array($value)) {
                    $this->setVariable(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setVariable(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setVariable(new FHIRId($ext));
            } else {
                $this->setVariable(new FHIRId(null));
            }
        }
        if (array_key_exists(self::FIELD_CONDITION, $data) || array_key_exists(self::FIELD_CONDITION_EXT, $data)) {
            $value = $data[self::FIELD_CONDITION] ?? null;
            $ext = (isset($data[self::FIELD_CONDITION_EXT]) && is_array($data[self::FIELD_CONDITION_EXT])) ? $data[self::FIELD_CONDITION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setCondition($value);
                } else if (is_array($value)) {
                    $this->setCondition(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCondition(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCondition(new FHIRString($ext));
            } else {
                $this->setCondition(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_CHECK, $data) || array_key_exists(self::FIELD_CHECK_EXT, $data)) {
            $value = $data[self::FIELD_CHECK] ?? null;
            $ext = (isset($data[self::FIELD_CHECK_EXT]) && is_array($data[self::FIELD_CHECK_EXT])) ? $data[self::FIELD_CHECK_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setCheck($value);
                } else if (is_array($value)) {
                    $this->setCheck(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCheck(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCheck(new FHIRString($ext));
            } else {
                $this->setCheck(new FHIRString(null));
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
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Type or variable this rule applies to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    public function getContext(): null|FHIRId
    {
        return $this->context;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Type or variable this rule applies to.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $context
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setContext(null|string|FHIRIdPrimitive|FHIRId $context = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $context && !($context instanceof FHIRId)) {
            $context = new FHIRId($context);
        }
        $this->_trackValueSet($this->context, $context);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_CONTEXT])) {
            $this->_primitiveXmlLocations[self::FIELD_CONTEXT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_CONTEXT][0] = $xmlLocation;
        $this->context = $context;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified minimum cardinality for the element. This is optional; if present, it
     * acts an implicit check on the input content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getMin(): null|FHIRInteger
    {
        return $this->min;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified minimum cardinality for the element. This is optional; if present, it
     * acts an implicit check on the input content.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\STU3\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $min
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMin(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $min = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $min && !($min instanceof FHIRInteger)) {
            $min = new FHIRInteger($min);
        }
        $this->_trackValueSet($this->min, $min);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MIN])) {
            $this->_primitiveXmlLocations[self::FIELD_MIN] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MIN][0] = $xmlLocation;
        $this->min = $min;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified maximum cardinality for the element - a number or a "*". This is
     * optional; if present, it acts an implicit check on the input content (* just
     * serves as documentation; it's the default value).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getMax(): null|FHIRString
    {
        return $this->max;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified maximum cardinality for the element - a number or a "*". This is
     * optional; if present, it acts an implicit check on the input content (* just
     * serves as documentation; it's the default value).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $max
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMax(null|string|FHIRStringPrimitive|FHIRString $max = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $max && !($max instanceof FHIRString)) {
            $max = new FHIRString($max);
        }
        $this->_trackValueSet($this->max, $max);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MAX])) {
            $this->_primitiveXmlLocations[self::FIELD_MAX] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MAX][0] = $xmlLocation;
        $this->max = $max;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified type for the element. This works as a condition on the mapping - use
     * for polymorphic elements.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getType(): null|FHIRString
    {
        return $this->type;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified type for the element. This works as a condition on the mapping - use
     * for polymorphic elements.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $type
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setType(null|string|FHIRStringPrimitive|FHIRString $type = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $type && !($type instanceof FHIRString)) {
            $type = new FHIRString($type);
        }
        $this->_trackValueSet($this->type, $type);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_TYPE])) {
            $this->_primitiveXmlLocations[self::FIELD_TYPE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_TYPE][0] = $xmlLocation;
        $this->type = $type;
        return $this;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary
     */
    public function getDefaultValueBase64Binary(): null|FHIRBase64Binary
    {
        return $this->defaultValueBase64Binary;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary $defaultValueBase64Binary
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueBase64Binary(null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $defaultValueBase64Binary = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueBase64Binary && !($defaultValueBase64Binary instanceof FHIRBase64Binary)) {
            $defaultValueBase64Binary = new FHIRBase64Binary($defaultValueBase64Binary);
        }
        $this->_trackValueSet($this->defaultValueBase64Binary, $defaultValueBase64Binary);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_BASE_64BINARY])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_BASE_64BINARY][0] = $xmlLocation;
        $this->defaultValueBase64Binary = $defaultValueBase64Binary;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getDefaultValueBoolean(): null|FHIRBoolean
    {
        return $this->defaultValueBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\STU3\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $defaultValueBoolean
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $defaultValueBoolean = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueBoolean && !($defaultValueBoolean instanceof FHIRBoolean)) {
            $defaultValueBoolean = new FHIRBoolean($defaultValueBoolean);
        }
        $this->_trackValueSet($this->defaultValueBoolean, $defaultValueBoolean);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_BOOLEAN])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_BOOLEAN] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_BOOLEAN][0] = $xmlLocation;
        $this->defaultValueBoolean = $defaultValueBoolean;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    public function getDefaultValueCode(): null|FHIRCode
    {
        return $this->defaultValueCode;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode $defaultValueCode
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueCode(null|string|FHIRCodePrimitive|FHIRCode $defaultValueCode = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueCode && !($defaultValueCode instanceof FHIRCode)) {
            $defaultValueCode = new FHIRCode($defaultValueCode);
        }
        $this->_trackValueSet($this->defaultValueCode, $defaultValueCode);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_CODE])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_CODE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_CODE][0] = $xmlLocation;
        $this->defaultValueCode = $defaultValueCode;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    public function getDefaultValueDate(): null|FHIRDate
    {
        return $this->defaultValueDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate $defaultValueDate
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $defaultValueDate = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueDate && !($defaultValueDate instanceof FHIRDate)) {
            $defaultValueDate = new FHIRDate($defaultValueDate);
        }
        $this->_trackValueSet($this->defaultValueDate, $defaultValueDate);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DATE])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DATE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DATE][0] = $xmlLocation;
        $this->defaultValueDate = $defaultValueDate;
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
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    public function getDefaultValueDateTime(): null|FHIRDateTime
    {
        return $this->defaultValueDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $defaultValueDateTime
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $defaultValueDateTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueDateTime && !($defaultValueDateTime instanceof FHIRDateTime)) {
            $defaultValueDateTime = new FHIRDateTime($defaultValueDateTime);
        }
        $this->_trackValueSet($this->defaultValueDateTime, $defaultValueDateTime);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DATE_TIME])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DATE_TIME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DATE_TIME][0] = $xmlLocation;
        $this->defaultValueDateTime = $defaultValueDateTime;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    public function getDefaultValueDecimal(): null|FHIRDecimal
    {
        return $this->defaultValueDecimal;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\STU3\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal $defaultValueDecimal
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueDecimal(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $defaultValueDecimal = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueDecimal && !($defaultValueDecimal instanceof FHIRDecimal)) {
            $defaultValueDecimal = new FHIRDecimal($defaultValueDecimal);
        }
        $this->_trackValueSet($this->defaultValueDecimal, $defaultValueDecimal);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DECIMAL])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DECIMAL] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DECIMAL][0] = $xmlLocation;
        $this->defaultValueDecimal = $defaultValueDecimal;
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    public function getDefaultValueId(): null|FHIRId
    {
        return $this->defaultValueId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $defaultValueId
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueId(null|string|FHIRIdPrimitive|FHIRId $defaultValueId = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueId && !($defaultValueId instanceof FHIRId)) {
            $defaultValueId = new FHIRId($defaultValueId);
        }
        $this->_trackValueSet($this->defaultValueId, $defaultValueId);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_ID])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_ID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_ID][0] = $xmlLocation;
        $this->defaultValueId = $defaultValueId;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    public function getDefaultValueInstant(): null|FHIRInstant
    {
        return $this->defaultValueInstant;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant $defaultValueInstant
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueInstant(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $defaultValueInstant = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueInstant && !($defaultValueInstant instanceof FHIRInstant)) {
            $defaultValueInstant = new FHIRInstant($defaultValueInstant);
        }
        $this->_trackValueSet($this->defaultValueInstant, $defaultValueInstant);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_INSTANT])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_INSTANT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_INSTANT][0] = $xmlLocation;
        $this->defaultValueInstant = $defaultValueInstant;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getDefaultValueInteger(): null|FHIRInteger
    {
        return $this->defaultValueInteger;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\STU3\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $defaultValueInteger
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueInteger(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $defaultValueInteger = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueInteger && !($defaultValueInteger instanceof FHIRInteger)) {
            $defaultValueInteger = new FHIRInteger($defaultValueInteger);
        }
        $this->_trackValueSet($this->defaultValueInteger, $defaultValueInteger);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_INTEGER])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_INTEGER] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_INTEGER][0] = $xmlLocation;
        $this->defaultValueInteger = $defaultValueInteger;
        return $this;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getDefaultValueMarkdown(): null|FHIRMarkdown
    {
        return $this->defaultValueMarkdown;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $defaultValueMarkdown
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueMarkdown(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $defaultValueMarkdown = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueMarkdown && !($defaultValueMarkdown instanceof FHIRMarkdown)) {
            $defaultValueMarkdown = new FHIRMarkdown($defaultValueMarkdown);
        }
        $this->_trackValueSet($this->defaultValueMarkdown, $defaultValueMarkdown);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_MARKDOWN])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_MARKDOWN] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_MARKDOWN][0] = $xmlLocation;
        $this->defaultValueMarkdown = $defaultValueMarkdown;
        return $this;
    }

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid
     */
    public function getDefaultValueOid(): null|FHIROid
    {
        return $this->defaultValueOid;
    }

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid $defaultValueOid
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueOid(null|string|FHIROidPrimitive|FHIROid $defaultValueOid = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueOid && !($defaultValueOid instanceof FHIROid)) {
            $defaultValueOid = new FHIROid($defaultValueOid);
        }
        $this->_trackValueSet($this->defaultValueOid, $defaultValueOid);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_OID])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_OID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_OID][0] = $xmlLocation;
        $this->defaultValueOid = $defaultValueOid;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    public function getDefaultValuePositiveInt(): null|FHIRPositiveInt
    {
        return $this->defaultValuePositiveInt;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\STU3\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt $defaultValuePositiveInt
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValuePositiveInt(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $defaultValuePositiveInt = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValuePositiveInt && !($defaultValuePositiveInt instanceof FHIRPositiveInt)) {
            $defaultValuePositiveInt = new FHIRPositiveInt($defaultValuePositiveInt);
        }
        $this->_trackValueSet($this->defaultValuePositiveInt, $defaultValuePositiveInt);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_POSITIVE_INT])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_POSITIVE_INT][0] = $xmlLocation;
        $this->defaultValuePositiveInt = $defaultValuePositiveInt;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getDefaultValueString(): null|FHIRString
    {
        return $this->defaultValueString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $defaultValueString
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueString(null|string|FHIRStringPrimitive|FHIRString $defaultValueString = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueString && !($defaultValueString instanceof FHIRString)) {
            $defaultValueString = new FHIRString($defaultValueString);
        }
        $this->_trackValueSet($this->defaultValueString, $defaultValueString);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_STRING])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_STRING] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_STRING][0] = $xmlLocation;
        $this->defaultValueString = $defaultValueString;
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    public function getDefaultValueTime(): null|FHIRTime
    {
        return $this->defaultValueTime;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime $defaultValueTime
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueTime(null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $defaultValueTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueTime && !($defaultValueTime instanceof FHIRTime)) {
            $defaultValueTime = new FHIRTime($defaultValueTime);
        }
        $this->_trackValueSet($this->defaultValueTime, $defaultValueTime);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_TIME])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_TIME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_TIME][0] = $xmlLocation;
        $this->defaultValueTime = $defaultValueTime;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    public function getDefaultValueUnsignedInt(): null|FHIRUnsignedInt
    {
        return $this->defaultValueUnsignedInt;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\STU3\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt $defaultValueUnsignedInt
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueUnsignedInt(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $defaultValueUnsignedInt = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueUnsignedInt && !($defaultValueUnsignedInt instanceof FHIRUnsignedInt)) {
            $defaultValueUnsignedInt = new FHIRUnsignedInt($defaultValueUnsignedInt);
        }
        $this->_trackValueSet($this->defaultValueUnsignedInt, $defaultValueUnsignedInt);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT][0] = $xmlLocation;
        $this->defaultValueUnsignedInt = $defaultValueUnsignedInt;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getDefaultValueUri(): null|FHIRUri
    {
        return $this->defaultValueUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $defaultValueUri
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueUri(null|string|FHIRUriPrimitive|FHIRUri $defaultValueUri = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueUri && !($defaultValueUri instanceof FHIRUri)) {
            $defaultValueUri = new FHIRUri($defaultValueUri);
        }
        $this->_trackValueSet($this->defaultValueUri, $defaultValueUri);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_URI])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_URI] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_URI][0] = $xmlLocation;
        $this->defaultValueUri = $defaultValueUri;
        return $this;
    }

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddress
     */
    public function getDefaultValueAddress(): null|FHIRAddress
    {
        return $this->defaultValueAddress;
    }

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddress $defaultValueAddress
     * @return static
     */
    public function setDefaultValueAddress(null|FHIRAddress $defaultValueAddress = null): self
    {
        if (null === $defaultValueAddress) {
            $defaultValueAddress = new FHIRAddress();
        }
        $this->_trackValueSet($this->defaultValueAddress, $defaultValueAddress);
        $this->defaultValueAddress = $defaultValueAddress;
        return $this;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getDefaultValueAge(): null|FHIRAge
    {
        return $this->defaultValueAge;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRAge $defaultValueAge
     * @return static
     */
    public function setDefaultValueAge(null|FHIRAge $defaultValueAge = null): self
    {
        if (null === $defaultValueAge) {
            $defaultValueAge = new FHIRAge();
        }
        $this->_trackValueSet($this->defaultValueAge, $defaultValueAge);
        $this->defaultValueAge = $defaultValueAge;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation
     */
    public function getDefaultValueAnnotation(): null|FHIRAnnotation
    {
        return $this->defaultValueAnnotation;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation $defaultValueAnnotation
     * @return static
     */
    public function setDefaultValueAnnotation(null|FHIRAnnotation $defaultValueAnnotation = null): self
    {
        if (null === $defaultValueAnnotation) {
            $defaultValueAnnotation = new FHIRAnnotation();
        }
        $this->_trackValueSet($this->defaultValueAnnotation, $defaultValueAnnotation);
        $this->defaultValueAnnotation = $defaultValueAnnotation;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment
     */
    public function getDefaultValueAttachment(): null|FHIRAttachment
    {
        return $this->defaultValueAttachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment $defaultValueAttachment
     * @return static
     */
    public function setDefaultValueAttachment(null|FHIRAttachment $defaultValueAttachment = null): self
    {
        if (null === $defaultValueAttachment) {
            $defaultValueAttachment = new FHIRAttachment();
        }
        $this->_trackValueSet($this->defaultValueAttachment, $defaultValueAttachment);
        $this->defaultValueAttachment = $defaultValueAttachment;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getDefaultValueCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->defaultValueCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $defaultValueCodeableConcept
     * @return static
     */
    public function setDefaultValueCodeableConcept(null|FHIRCodeableConcept $defaultValueCodeableConcept = null): self
    {
        if (null === $defaultValueCodeableConcept) {
            $defaultValueCodeableConcept = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->defaultValueCodeableConcept, $defaultValueCodeableConcept);
        $this->defaultValueCodeableConcept = $defaultValueCodeableConcept;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding
     */
    public function getDefaultValueCoding(): null|FHIRCoding
    {
        return $this->defaultValueCoding;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding $defaultValueCoding
     * @return static
     */
    public function setDefaultValueCoding(null|FHIRCoding $defaultValueCoding = null): self
    {
        if (null === $defaultValueCoding) {
            $defaultValueCoding = new FHIRCoding();
        }
        $this->_trackValueSet($this->defaultValueCoding, $defaultValueCoding);
        $this->defaultValueCoding = $defaultValueCoding;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint
     */
    public function getDefaultValueContactPoint(): null|FHIRContactPoint
    {
        return $this->defaultValueContactPoint;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint $defaultValueContactPoint
     * @return static
     */
    public function setDefaultValueContactPoint(null|FHIRContactPoint $defaultValueContactPoint = null): self
    {
        if (null === $defaultValueContactPoint) {
            $defaultValueContactPoint = new FHIRContactPoint();
        }
        $this->_trackValueSet($this->defaultValueContactPoint, $defaultValueContactPoint);
        $this->defaultValueContactPoint = $defaultValueContactPoint;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRCount
     */
    public function getDefaultValueCount(): null|FHIRCount
    {
        return $this->defaultValueCount;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRCount $defaultValueCount
     * @return static
     */
    public function setDefaultValueCount(null|FHIRCount $defaultValueCount = null): self
    {
        if (null === $defaultValueCount) {
            $defaultValueCount = new FHIRCount();
        }
        $this->_trackValueSet($this->defaultValueCount, $defaultValueCount);
        $this->defaultValueCount = $defaultValueCount;
        return $this;
    }

    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getDefaultValueDistance(): null|FHIRDistance
    {
        return $this->defaultValueDistance;
    }

    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDistance $defaultValueDistance
     * @return static
     */
    public function setDefaultValueDistance(null|FHIRDistance $defaultValueDistance = null): self
    {
        if (null === $defaultValueDistance) {
            $defaultValueDistance = new FHIRDistance();
        }
        $this->_trackValueSet($this->defaultValueDistance, $defaultValueDistance);
        $this->defaultValueDistance = $defaultValueDistance;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getDefaultValueDuration(): null|FHIRDuration
    {
        return $this->defaultValueDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration $defaultValueDuration
     * @return static
     */
    public function setDefaultValueDuration(null|FHIRDuration $defaultValueDuration = null): self
    {
        if (null === $defaultValueDuration) {
            $defaultValueDuration = new FHIRDuration();
        }
        $this->_trackValueSet($this->defaultValueDuration, $defaultValueDuration);
        $this->defaultValueDuration = $defaultValueDuration;
        return $this;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRHumanName
     */
    public function getDefaultValueHumanName(): null|FHIRHumanName
    {
        return $this->defaultValueHumanName;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRHumanName $defaultValueHumanName
     * @return static
     */
    public function setDefaultValueHumanName(null|FHIRHumanName $defaultValueHumanName = null): self
    {
        if (null === $defaultValueHumanName) {
            $defaultValueHumanName = new FHIRHumanName();
        }
        $this->_trackValueSet($this->defaultValueHumanName, $defaultValueHumanName);
        $this->defaultValueHumanName = $defaultValueHumanName;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    public function getDefaultValueIdentifier(): null|FHIRIdentifier
    {
        return $this->defaultValueIdentifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $defaultValueIdentifier
     * @return static
     */
    public function setDefaultValueIdentifier(null|FHIRIdentifier $defaultValueIdentifier = null): self
    {
        if (null === $defaultValueIdentifier) {
            $defaultValueIdentifier = new FHIRIdentifier();
        }
        $this->_trackValueSet($this->defaultValueIdentifier, $defaultValueIdentifier);
        $this->defaultValueIdentifier = $defaultValueIdentifier;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getDefaultValueMoney(): null|FHIRMoney
    {
        return $this->defaultValueMoney;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney $defaultValueMoney
     * @return static
     */
    public function setDefaultValueMoney(null|FHIRMoney $defaultValueMoney = null): self
    {
        if (null === $defaultValueMoney) {
            $defaultValueMoney = new FHIRMoney();
        }
        $this->_trackValueSet($this->defaultValueMoney, $defaultValueMoney);
        $this->defaultValueMoney = $defaultValueMoney;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    public function getDefaultValuePeriod(): null|FHIRPeriod
    {
        return $this->defaultValuePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $defaultValuePeriod
     * @return static
     */
    public function setDefaultValuePeriod(null|FHIRPeriod $defaultValuePeriod = null): self
    {
        if (null === $defaultValuePeriod) {
            $defaultValuePeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->defaultValuePeriod, $defaultValuePeriod);
        $this->defaultValuePeriod = $defaultValuePeriod;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    public function getDefaultValueQuantity(): null|FHIRQuantity
    {
        return $this->defaultValueQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity $defaultValueQuantity
     * @return static
     */
    public function setDefaultValueQuantity(null|FHIRQuantity $defaultValueQuantity = null): self
    {
        if (null === $defaultValueQuantity) {
            $defaultValueQuantity = new FHIRQuantity();
        }
        $this->_trackValueSet($this->defaultValueQuantity, $defaultValueQuantity);
        $this->defaultValueQuantity = $defaultValueQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange
     */
    public function getDefaultValueRange(): null|FHIRRange
    {
        return $this->defaultValueRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange $defaultValueRange
     * @return static
     */
    public function setDefaultValueRange(null|FHIRRange $defaultValueRange = null): self
    {
        if (null === $defaultValueRange) {
            $defaultValueRange = new FHIRRange();
        }
        $this->_trackValueSet($this->defaultValueRange, $defaultValueRange);
        $this->defaultValueRange = $defaultValueRange;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio
     */
    public function getDefaultValueRatio(): null|FHIRRatio
    {
        return $this->defaultValueRatio;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio $defaultValueRatio
     * @return static
     */
    public function setDefaultValueRatio(null|FHIRRatio $defaultValueRatio = null): self
    {
        if (null === $defaultValueRatio) {
            $defaultValueRatio = new FHIRRatio();
        }
        $this->_trackValueSet($this->defaultValueRatio, $defaultValueRatio);
        $this->defaultValueRatio = $defaultValueRatio;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getDefaultValueReference(): null|FHIRReference
    {
        return $this->defaultValueReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $defaultValueReference
     * @return static
     */
    public function setDefaultValueReference(null|FHIRReference $defaultValueReference = null): self
    {
        if (null === $defaultValueReference) {
            $defaultValueReference = new FHIRReference();
        }
        $this->_trackValueSet($this->defaultValueReference, $defaultValueReference);
        $this->defaultValueReference = $defaultValueReference;
        return $this;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSampledData
     */
    public function getDefaultValueSampledData(): null|FHIRSampledData
    {
        return $this->defaultValueSampledData;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSampledData $defaultValueSampledData
     * @return static
     */
    public function setDefaultValueSampledData(null|FHIRSampledData $defaultValueSampledData = null): self
    {
        if (null === $defaultValueSampledData) {
            $defaultValueSampledData = new FHIRSampledData();
        }
        $this->_trackValueSet($this->defaultValueSampledData, $defaultValueSampledData);
        $this->defaultValueSampledData = $defaultValueSampledData;
        return $this;
    }

    /**
     * A digital signature along with supporting context. The signature may be
     * electronic/cryptographic in nature, or a graphical image representing a
     * hand-written signature, or a signature process. Different signature approaches
     * have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSignature
     */
    public function getDefaultValueSignature(): null|FHIRSignature
    {
        return $this->defaultValueSignature;
    }

    /**
     * A digital signature along with supporting context. The signature may be
     * electronic/cryptographic in nature, or a graphical image representing a
     * hand-written signature, or a signature process. Different signature approaches
     * have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSignature $defaultValueSignature
     * @return static
     */
    public function setDefaultValueSignature(null|FHIRSignature $defaultValueSignature = null): self
    {
        if (null === $defaultValueSignature) {
            $defaultValueSignature = new FHIRSignature();
        }
        $this->_trackValueSet($this->defaultValueSignature, $defaultValueSignature);
        $this->defaultValueSignature = $defaultValueSignature;
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming
     */
    public function getDefaultValueTiming(): null|FHIRTiming
    {
        return $this->defaultValueTiming;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming $defaultValueTiming
     * @return static
     */
    public function setDefaultValueTiming(null|FHIRTiming $defaultValueTiming = null): self
    {
        if (null === $defaultValueTiming) {
            $defaultValueTiming = new FHIRTiming();
        }
        $this->_trackValueSet($this->defaultValueTiming, $defaultValueTiming);
        $this->defaultValueTiming = $defaultValueTiming;
        return $this;
    }

    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content may not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta
     */
    public function getDefaultValueMeta(): null|FHIRMeta
    {
        return $this->defaultValueMeta;
    }

    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content may not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta $defaultValueMeta
     * @return static
     */
    public function setDefaultValueMeta(null|FHIRMeta $defaultValueMeta = null): self
    {
        if (null === $defaultValueMeta) {
            $defaultValueMeta = new FHIRMeta();
        }
        $this->_trackValueSet($this->defaultValueMeta, $defaultValueMeta);
        $this->defaultValueMeta = $defaultValueMeta;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Optional field for this source.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getElement(): null|FHIRString
    {
        return $this->element;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Optional field for this source.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $element
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setElement(null|string|FHIRStringPrimitive|FHIRString $element = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $element && !($element instanceof FHIRString)) {
            $element = new FHIRString($element);
        }
        $this->_trackValueSet($this->element, $element);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_ELEMENT])) {
            $this->_primitiveXmlLocations[self::FIELD_ELEMENT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_ELEMENT][0] = $xmlLocation;
        $this->element = $element;
        return $this;
    }

    /**
     * If field is a list, how to manage the source
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How to handle the list mode for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapSourceListMode
     */
    public function getListMode(): null|FHIRStructureMapSourceListMode
    {
        return $this->listMode;
    }

    /**
     * If field is a list, how to manage the source
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How to handle the list mode for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapSourceListMode $listMode
     * @return static
     */
    public function setListMode(null|FHIRStructureMapSourceListMode $listMode = null): self
    {
        if (null === $listMode) {
            $listMode = new FHIRStructureMapSourceListMode();
        }
        $this->_trackValueSet($this->listMode, $listMode);
        $this->listMode = $listMode;
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Named context for field, if a field is specified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    public function getVariable(): null|FHIRId
    {
        return $this->variable;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Named context for field, if a field is specified.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $variable
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setVariable(null|string|FHIRIdPrimitive|FHIRId $variable = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $variable && !($variable instanceof FHIRId)) {
            $variable = new FHIRId($variable);
        }
        $this->_trackValueSet($this->variable, $variable);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VARIABLE])) {
            $this->_primitiveXmlLocations[self::FIELD_VARIABLE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VARIABLE][0] = $xmlLocation;
        $this->variable = $variable;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * FHIRPath expression - must be true or the rule does not apply.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getCondition(): null|FHIRString
    {
        return $this->condition;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * FHIRPath expression - must be true or the rule does not apply.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $condition
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setCondition(null|string|FHIRStringPrimitive|FHIRString $condition = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $condition && !($condition instanceof FHIRString)) {
            $condition = new FHIRString($condition);
        }
        $this->_trackValueSet($this->condition, $condition);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_CONDITION])) {
            $this->_primitiveXmlLocations[self::FIELD_CONDITION] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_CONDITION][0] = $xmlLocation;
        $this->condition = $condition;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * FHIRPath expression - must be true or the mapping engine throws an error instead
     * of completing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getCheck(): null|FHIRString
    {
        return $this->check;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * FHIRPath expression - must be true or the mapping engine throws an error instead
     * of completing.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $check
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setCheck(null|string|FHIRStringPrimitive|FHIRString $check = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $check && !($check instanceof FHIRString)) {
            $check = new FHIRString($check);
        }
        $this->_trackValueSet($this->check, $check);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_CHECK])) {
            $this->_primitiveXmlLocations[self::FIELD_CHECK] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_CHECK][0] = $xmlLocation;
        $this->check = $check;
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
        if (null !== ($v = $this->getContext())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTEXT] = $fieldErrs;
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
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueBase64Binary())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_BOOLEAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueDecimal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_DECIMAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueInstant())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_INSTANT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueInteger())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_INTEGER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueMarkdown())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_MARKDOWN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueOid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_OID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValuePositiveInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueUnsignedInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueUri())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_URI] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueAddress())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_ADDRESS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueAge())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_AGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueAnnotation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_ANNOTATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueAttachment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_ATTACHMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueCoding())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_CODING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueContactPoint())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_CONTACT_POINT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueCount())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_COUNT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueDistance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_DISTANCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueHumanName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_HUMAN_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueMoney())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_MONEY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValuePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueRatio())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_RATIO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueSampledData())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueSignature())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_SIGNATURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueTiming())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_TIMING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueMeta())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_META] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getElement())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ELEMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getListMode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LIST_MODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVariable())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VARIABLE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCondition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONDITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCheck())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CHECK] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CONTEXT])) {
            $v = $this->getContext();
            foreach($validationRules[self::FIELD_CONTEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTEXT])) {
                        $errs[self::FIELD_CONTEXT] = [];
                    }
                    $errs[self::FIELD_CONTEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN])) {
            $v = $this->getMin();
            foreach($validationRules[self::FIELD_MIN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_MIN, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_MAX, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_BASE_64BINARY])) {
            $v = $this->getDefaultValueBase64Binary();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_BASE_64BINARY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_BASE_64BINARY])) {
                        $errs[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_BASE_64BINARY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_BOOLEAN])) {
            $v = $this->getDefaultValueBoolean();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_BOOLEAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_BOOLEAN])) {
                        $errs[self::FIELD_DEFAULT_VALUE_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_CODE])) {
            $v = $this->getDefaultValueCode();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_CODE])) {
                        $errs[self::FIELD_DEFAULT_VALUE_CODE] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_DATE])) {
            $v = $this->getDefaultValueDate();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_DATE])) {
                        $errs[self::FIELD_DEFAULT_VALUE_DATE] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_DATE_TIME])) {
            $v = $this->getDefaultValueDateTime();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_DATE_TIME])) {
                        $errs[self::FIELD_DEFAULT_VALUE_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_DECIMAL])) {
            $v = $this->getDefaultValueDecimal();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_DECIMAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_DECIMAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_DECIMAL])) {
                        $errs[self::FIELD_DEFAULT_VALUE_DECIMAL] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_DECIMAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_ID])) {
            $v = $this->getDefaultValueId();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_ID])) {
                        $errs[self::FIELD_DEFAULT_VALUE_ID] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_INSTANT])) {
            $v = $this->getDefaultValueInstant();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_INSTANT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_INSTANT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_INSTANT])) {
                        $errs[self::FIELD_DEFAULT_VALUE_INSTANT] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_INSTANT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_INTEGER])) {
            $v = $this->getDefaultValueInteger();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_INTEGER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_INTEGER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_INTEGER])) {
                        $errs[self::FIELD_DEFAULT_VALUE_INTEGER] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_INTEGER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_MARKDOWN])) {
            $v = $this->getDefaultValueMarkdown();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_MARKDOWN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_MARKDOWN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_MARKDOWN])) {
                        $errs[self::FIELD_DEFAULT_VALUE_MARKDOWN] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_MARKDOWN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_OID])) {
            $v = $this->getDefaultValueOid();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_OID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_OID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_OID])) {
                        $errs[self::FIELD_DEFAULT_VALUE_OID] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_OID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_POSITIVE_INT])) {
            $v = $this->getDefaultValuePositiveInt();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_POSITIVE_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_POSITIVE_INT])) {
                        $errs[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_POSITIVE_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_STRING])) {
            $v = $this->getDefaultValueString();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_STRING])) {
                        $errs[self::FIELD_DEFAULT_VALUE_STRING] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_TIME])) {
            $v = $this->getDefaultValueTime();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_TIME])) {
                        $errs[self::FIELD_DEFAULT_VALUE_TIME] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT])) {
            $v = $this->getDefaultValueUnsignedInt();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_UNSIGNED_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT])) {
                        $errs[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_URI])) {
            $v = $this->getDefaultValueUri();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_URI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_URI])) {
                        $errs[self::FIELD_DEFAULT_VALUE_URI] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_ADDRESS])) {
            $v = $this->getDefaultValueAddress();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_ADDRESS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_ADDRESS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_ADDRESS])) {
                        $errs[self::FIELD_DEFAULT_VALUE_ADDRESS] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_ADDRESS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_AGE])) {
            $v = $this->getDefaultValueAge();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_AGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_AGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_AGE])) {
                        $errs[self::FIELD_DEFAULT_VALUE_AGE] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_AGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_ANNOTATION])) {
            $v = $this->getDefaultValueAnnotation();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_ANNOTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_ANNOTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_ANNOTATION])) {
                        $errs[self::FIELD_DEFAULT_VALUE_ANNOTATION] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_ANNOTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_ATTACHMENT])) {
            $v = $this->getDefaultValueAttachment();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_ATTACHMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_ATTACHMENT])) {
                        $errs[self::FIELD_DEFAULT_VALUE_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_ATTACHMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT])) {
            $v = $this->getDefaultValueCodeableConcept();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_CODING])) {
            $v = $this->getDefaultValueCoding();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_CODING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_CODING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_CODING])) {
                        $errs[self::FIELD_DEFAULT_VALUE_CODING] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_CODING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_CONTACT_POINT])) {
            $v = $this->getDefaultValueContactPoint();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_CONTACT_POINT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_CONTACT_POINT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_CONTACT_POINT])) {
                        $errs[self::FIELD_DEFAULT_VALUE_CONTACT_POINT] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_CONTACT_POINT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_COUNT])) {
            $v = $this->getDefaultValueCount();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_COUNT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_COUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_COUNT])) {
                        $errs[self::FIELD_DEFAULT_VALUE_COUNT] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_COUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_DISTANCE])) {
            $v = $this->getDefaultValueDistance();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_DISTANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_DISTANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_DISTANCE])) {
                        $errs[self::FIELD_DEFAULT_VALUE_DISTANCE] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_DISTANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_DURATION])) {
            $v = $this->getDefaultValueDuration();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_DURATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_DURATION])) {
                        $errs[self::FIELD_DEFAULT_VALUE_DURATION] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_HUMAN_NAME])) {
            $v = $this->getDefaultValueHumanName();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_HUMAN_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_HUMAN_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_HUMAN_NAME])) {
                        $errs[self::FIELD_DEFAULT_VALUE_HUMAN_NAME] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_HUMAN_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_IDENTIFIER])) {
            $v = $this->getDefaultValueIdentifier();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_IDENTIFIER])) {
                        $errs[self::FIELD_DEFAULT_VALUE_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_MONEY])) {
            $v = $this->getDefaultValueMoney();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_MONEY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_MONEY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_MONEY])) {
                        $errs[self::FIELD_DEFAULT_VALUE_MONEY] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_MONEY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_PERIOD])) {
            $v = $this->getDefaultValuePeriod();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_PERIOD])) {
                        $errs[self::FIELD_DEFAULT_VALUE_PERIOD] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_QUANTITY])) {
            $v = $this->getDefaultValueQuantity();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_QUANTITY])) {
                        $errs[self::FIELD_DEFAULT_VALUE_QUANTITY] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_RANGE])) {
            $v = $this->getDefaultValueRange();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_RANGE])) {
                        $errs[self::FIELD_DEFAULT_VALUE_RANGE] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_RATIO])) {
            $v = $this->getDefaultValueRatio();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_RATIO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_RATIO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_RATIO])) {
                        $errs[self::FIELD_DEFAULT_VALUE_RATIO] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_RATIO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_REFERENCE])) {
            $v = $this->getDefaultValueReference();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_REFERENCE])) {
                        $errs[self::FIELD_DEFAULT_VALUE_REFERENCE] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA])) {
            $v = $this->getDefaultValueSampledData();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_SAMPLED_DATA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA])) {
                        $errs[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_SIGNATURE])) {
            $v = $this->getDefaultValueSignature();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_SIGNATURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_SIGNATURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_SIGNATURE])) {
                        $errs[self::FIELD_DEFAULT_VALUE_SIGNATURE] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_SIGNATURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_TIMING])) {
            $v = $this->getDefaultValueTiming();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_TIMING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_TIMING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_TIMING])) {
                        $errs[self::FIELD_DEFAULT_VALUE_TIMING] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_TIMING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_META])) {
            $v = $this->getDefaultValueMeta();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_META])) {
                        $errs[self::FIELD_DEFAULT_VALUE_META] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ELEMENT])) {
            $v = $this->getElement();
            foreach($validationRules[self::FIELD_ELEMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_ELEMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ELEMENT])) {
                        $errs[self::FIELD_ELEMENT] = [];
                    }
                    $errs[self::FIELD_ELEMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LIST_MODE])) {
            $v = $this->getListMode();
            foreach($validationRules[self::FIELD_LIST_MODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_LIST_MODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LIST_MODE])) {
                        $errs[self::FIELD_LIST_MODE] = [];
                    }
                    $errs[self::FIELD_LIST_MODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VARIABLE])) {
            $v = $this->getVariable();
            foreach($validationRules[self::FIELD_VARIABLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_VARIABLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VARIABLE])) {
                        $errs[self::FIELD_VARIABLE] = [];
                    }
                    $errs[self::FIELD_VARIABLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONDITION])) {
            $v = $this->getCondition();
            foreach($validationRules[self::FIELD_CONDITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_CONDITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONDITION])) {
                        $errs[self::FIELD_CONDITION] = [];
                    }
                    $errs[self::FIELD_CONDITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CHECK])) {
            $v = $this->getCheck();
            foreach($validationRules[self::FIELD_CHECK] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_CHECK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CHECK])) {
                        $errs[self::FIELD_CHECK] = [];
                    }
                    $errs[self::FIELD_CHECK][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
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
        } else if (!($type instanceof FHIRStructureMapSource)) {
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
            if (self::FIELD_CONTEXT === $childName) {
                $type->setContext(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MIN === $childName) {
                $type->setMin(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MAX === $childName) {
                $type->setMax(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TYPE === $childName) {
                $type->setType(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_BASE_64BINARY === $childName) {
                $type->setDefaultValueBase64Binary(FHIRBase64Binary::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_BOOLEAN === $childName) {
                $type->setDefaultValueBoolean(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_CODE === $childName) {
                $type->setDefaultValueCode(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_DATE === $childName) {
                $type->setDefaultValueDate(FHIRDate::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_DATE_TIME === $childName) {
                $type->setDefaultValueDateTime(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_DECIMAL === $childName) {
                $type->setDefaultValueDecimal(FHIRDecimal::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_ID === $childName) {
                $type->setDefaultValueId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_INSTANT === $childName) {
                $type->setDefaultValueInstant(FHIRInstant::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_INTEGER === $childName) {
                $type->setDefaultValueInteger(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_MARKDOWN === $childName) {
                $type->setDefaultValueMarkdown(FHIRMarkdown::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_OID === $childName) {
                $type->setDefaultValueOid(FHIROid::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_POSITIVE_INT === $childName) {
                $type->setDefaultValuePositiveInt(FHIRPositiveInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_STRING === $childName) {
                $type->setDefaultValueString(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_TIME === $childName) {
                $type->setDefaultValueTime(FHIRTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_UNSIGNED_INT === $childName) {
                $type->setDefaultValueUnsignedInt(FHIRUnsignedInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_URI === $childName) {
                $type->setDefaultValueUri(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_ADDRESS === $childName) {
                $type->setDefaultValueAddress(FHIRAddress::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_AGE === $childName) {
                $type->setDefaultValueAge(FHIRAge::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_ANNOTATION === $childName) {
                $type->setDefaultValueAnnotation(FHIRAnnotation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_ATTACHMENT === $childName) {
                $type->setDefaultValueAttachment(FHIRAttachment::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT === $childName) {
                $type->setDefaultValueCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_CODING === $childName) {
                $type->setDefaultValueCoding(FHIRCoding::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_CONTACT_POINT === $childName) {
                $type->setDefaultValueContactPoint(FHIRContactPoint::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_COUNT === $childName) {
                $type->setDefaultValueCount(FHIRCount::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_DISTANCE === $childName) {
                $type->setDefaultValueDistance(FHIRDistance::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_DURATION === $childName) {
                $type->setDefaultValueDuration(FHIRDuration::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_HUMAN_NAME === $childName) {
                $type->setDefaultValueHumanName(FHIRHumanName::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_IDENTIFIER === $childName) {
                $type->setDefaultValueIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_MONEY === $childName) {
                $type->setDefaultValueMoney(FHIRMoney::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_PERIOD === $childName) {
                $type->setDefaultValuePeriod(FHIRPeriod::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_QUANTITY === $childName) {
                $type->setDefaultValueQuantity(FHIRQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_RANGE === $childName) {
                $type->setDefaultValueRange(FHIRRange::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_RATIO === $childName) {
                $type->setDefaultValueRatio(FHIRRatio::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_REFERENCE === $childName) {
                $type->setDefaultValueReference(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_SAMPLED_DATA === $childName) {
                $type->setDefaultValueSampledData(FHIRSampledData::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_SIGNATURE === $childName) {
                $type->setDefaultValueSignature(FHIRSignature::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_TIMING === $childName) {
                $type->setDefaultValueTiming(FHIRTiming::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_META === $childName) {
                $type->setDefaultValueMeta(FHIRMeta::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ELEMENT === $childName) {
                $type->setElement(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LIST_MODE === $childName) {
                $type->setListMode(FHIRStructureMapSourceListMode::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VARIABLE === $childName) {
                $type->setVariable(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CONDITION === $childName) {
                $type->setCondition(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CHECK === $childName) {
                $type->setCheck(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_CONTEXT])) {
            $pt = $type->getContext();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CONTEXT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setContext((string)$attributes[self::FIELD_CONTEXT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MIN])) {
            $pt = $type->getMin();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MIN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMin((string)$attributes[self::FIELD_MIN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MAX])) {
            $pt = $type->getMax();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MAX], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMax((string)$attributes[self::FIELD_MAX], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TYPE])) {
            $pt = $type->getType();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TYPE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setType((string)$attributes[self::FIELD_TYPE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_BASE_64BINARY])) {
            $pt = $type->getDefaultValueBase64Binary();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_BASE_64BINARY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueBase64Binary((string)$attributes[self::FIELD_DEFAULT_VALUE_BASE_64BINARY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_BOOLEAN])) {
            $pt = $type->getDefaultValueBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_BOOLEAN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueBoolean((string)$attributes[self::FIELD_DEFAULT_VALUE_BOOLEAN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_CODE])) {
            $pt = $type->getDefaultValueCode();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_CODE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueCode((string)$attributes[self::FIELD_DEFAULT_VALUE_CODE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_DATE])) {
            $pt = $type->getDefaultValueDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueDate((string)$attributes[self::FIELD_DEFAULT_VALUE_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_DATE_TIME])) {
            $pt = $type->getDefaultValueDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueDateTime((string)$attributes[self::FIELD_DEFAULT_VALUE_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_DECIMAL])) {
            $pt = $type->getDefaultValueDecimal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_DECIMAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueDecimal((string)$attributes[self::FIELD_DEFAULT_VALUE_DECIMAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_ID])) {
            $pt = $type->getDefaultValueId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueId((string)$attributes[self::FIELD_DEFAULT_VALUE_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_INSTANT])) {
            $pt = $type->getDefaultValueInstant();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_INSTANT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueInstant((string)$attributes[self::FIELD_DEFAULT_VALUE_INSTANT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_INTEGER])) {
            $pt = $type->getDefaultValueInteger();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_INTEGER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueInteger((string)$attributes[self::FIELD_DEFAULT_VALUE_INTEGER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_MARKDOWN])) {
            $pt = $type->getDefaultValueMarkdown();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_MARKDOWN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueMarkdown((string)$attributes[self::FIELD_DEFAULT_VALUE_MARKDOWN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_OID])) {
            $pt = $type->getDefaultValueOid();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_OID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueOid((string)$attributes[self::FIELD_DEFAULT_VALUE_OID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_POSITIVE_INT])) {
            $pt = $type->getDefaultValuePositiveInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_POSITIVE_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValuePositiveInt((string)$attributes[self::FIELD_DEFAULT_VALUE_POSITIVE_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_STRING])) {
            $pt = $type->getDefaultValueString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueString((string)$attributes[self::FIELD_DEFAULT_VALUE_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_TIME])) {
            $pt = $type->getDefaultValueTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueTime((string)$attributes[self::FIELD_DEFAULT_VALUE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT])) {
            $pt = $type->getDefaultValueUnsignedInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueUnsignedInt((string)$attributes[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_URI])) {
            $pt = $type->getDefaultValueUri();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_URI], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueUri((string)$attributes[self::FIELD_DEFAULT_VALUE_URI], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ELEMENT])) {
            $pt = $type->getElement();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ELEMENT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setElement((string)$attributes[self::FIELD_ELEMENT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VARIABLE])) {
            $pt = $type->getVariable();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VARIABLE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setVariable((string)$attributes[self::FIELD_VARIABLE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CONDITION])) {
            $pt = $type->getCondition();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CONDITION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setCondition((string)$attributes[self::FIELD_CONDITION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CHECK])) {
            $pt = $type->getCheck();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CHECK], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setCheck((string)$attributes[self::FIELD_CHECK], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'StructureMapSource', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_CONTEXT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getContext())) {
            $xw->writeAttribute(self::FIELD_CONTEXT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MIN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMin())) {
            $xw->writeAttribute(self::FIELD_MIN, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MAX] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMax())) {
            $xw->writeAttribute(self::FIELD_MAX, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_TYPE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getType())) {
            $xw->writeAttribute(self::FIELD_TYPE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueBase64Binary())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_BASE_64BINARY, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_BOOLEAN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueBoolean())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_BOOLEAN, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_CODE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueCode())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_CODE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueDate())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_DATE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueDateTime())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_DATE_TIME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DECIMAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueDecimal())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_DECIMAL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueId())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_ID, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_INSTANT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueInstant())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_INSTANT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_INTEGER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueInteger())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_INTEGER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_MARKDOWN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueMarkdown())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_MARKDOWN, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_OID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueOid())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_OID, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValuePositiveInt())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_POSITIVE_INT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueString())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_STRING, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueTime())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_TIME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueUnsignedInt())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_UNSIGNED_INT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_URI] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueUri())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_URI, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ELEMENT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getElement())) {
            $xw->writeAttribute(self::FIELD_ELEMENT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VARIABLE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getVariable())) {
            $xw->writeAttribute(self::FIELD_VARIABLE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_CONDITION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getCondition())) {
            $xw->writeAttribute(self::FIELD_CONDITION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_CHECK] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getCheck())) {
            $xw->writeAttribute(self::FIELD_CHECK, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_primitiveXmlLocations[self::FIELD_CONTEXT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getContext())) {
            $xw->startElement(self::FIELD_CONTEXT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MIN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMin())) {
            $xw->startElement(self::FIELD_MIN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MAX] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMax())) {
            $xw->startElement(self::FIELD_MAX);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_TYPE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueBase64Binary())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_BASE_64BINARY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_BOOLEAN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueBoolean())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_BOOLEAN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_CODE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueCode())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_CODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueDate())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_DATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueDateTime())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_DATE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DECIMAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueDecimal())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_DECIMAL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueId())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_ID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_INSTANT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueInstant())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_INSTANT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_INTEGER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueInteger())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_INTEGER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_MARKDOWN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueMarkdown())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_MARKDOWN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_OID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueOid())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_OID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValuePositiveInt())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_POSITIVE_INT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueString())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_STRING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueTime())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueUnsignedInt())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_UNSIGNED_INT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_URI] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueUri())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_URI);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueAddress())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_ADDRESS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueAge())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_AGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueAnnotation())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_ANNOTATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueAttachment())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_ATTACHMENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueCodeableConcept())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueCoding())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_CODING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueContactPoint())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_CONTACT_POINT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueCount())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_COUNT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueDistance())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_DISTANCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueDuration())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_DURATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueHumanName())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_HUMAN_NAME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueIdentifier())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueMoney())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_MONEY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValuePeriod())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_PERIOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueQuantity())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_QUANTITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueRange())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_RANGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueRatio())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_RATIO);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueReference())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_REFERENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueSampledData())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_SAMPLED_DATA);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueSignature())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_SIGNATURE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueTiming())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_TIMING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueMeta())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_META);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ELEMENT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getElement())) {
            $xw->startElement(self::FIELD_ELEMENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getListMode())) {
            $xw->startElement(self::FIELD_LIST_MODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VARIABLE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getVariable())) {
            $xw->startElement(self::FIELD_VARIABLE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_CONDITION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getCondition())) {
            $xw->startElement(self::FIELD_CONDITION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_CHECK] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getCheck())) {
            $xw->startElement(self::FIELD_CHECK);
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
        if (null !== ($v = $this->getContext())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CONTEXT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRId::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONTEXT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMin())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MIN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MIN_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMax())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MAX} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MAX_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TYPE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueBase64Binary())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_BASE_64BINARY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBase64Binary::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueBoolean())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_BOOLEAN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueCode())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_CODE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_CODE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDate::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueDecimal())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_DECIMAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_DECIMAL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRId::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_ID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueInstant())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_INSTANT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInstant::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_INSTANT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueInteger())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_INTEGER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_INTEGER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueMarkdown())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_MARKDOWN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueOid())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_OID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIROid::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_OID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValuePositiveInt())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_POSITIVE_INT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_STRING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueUnsignedInt())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_UNSIGNED_INT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueUri())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_URI} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_URI_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueAddress())) {
            $out->{self::FIELD_DEFAULT_VALUE_ADDRESS} = $v;
        }
        if (null !== ($v = $this->getDefaultValueAge())) {
            $out->{self::FIELD_DEFAULT_VALUE_AGE} = $v;
        }
        if (null !== ($v = $this->getDefaultValueAnnotation())) {
            $out->{self::FIELD_DEFAULT_VALUE_ANNOTATION} = $v;
        }
        if (null !== ($v = $this->getDefaultValueAttachment())) {
            $out->{self::FIELD_DEFAULT_VALUE_ATTACHMENT} = $v;
        }
        if (null !== ($v = $this->getDefaultValueCodeableConcept())) {
            $out->{self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getDefaultValueCoding())) {
            $out->{self::FIELD_DEFAULT_VALUE_CODING} = $v;
        }
        if (null !== ($v = $this->getDefaultValueContactPoint())) {
            $out->{self::FIELD_DEFAULT_VALUE_CONTACT_POINT} = $v;
        }
        if (null !== ($v = $this->getDefaultValueCount())) {
            $out->{self::FIELD_DEFAULT_VALUE_COUNT} = $v;
        }
        if (null !== ($v = $this->getDefaultValueDistance())) {
            $out->{self::FIELD_DEFAULT_VALUE_DISTANCE} = $v;
        }
        if (null !== ($v = $this->getDefaultValueDuration())) {
            $out->{self::FIELD_DEFAULT_VALUE_DURATION} = $v;
        }
        if (null !== ($v = $this->getDefaultValueHumanName())) {
            $out->{self::FIELD_DEFAULT_VALUE_HUMAN_NAME} = $v;
        }
        if (null !== ($v = $this->getDefaultValueIdentifier())) {
            $out->{self::FIELD_DEFAULT_VALUE_IDENTIFIER} = $v;
        }
        if (null !== ($v = $this->getDefaultValueMoney())) {
            $out->{self::FIELD_DEFAULT_VALUE_MONEY} = $v;
        }
        if (null !== ($v = $this->getDefaultValuePeriod())) {
            $out->{self::FIELD_DEFAULT_VALUE_PERIOD} = $v;
        }
        if (null !== ($v = $this->getDefaultValueQuantity())) {
            $out->{self::FIELD_DEFAULT_VALUE_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getDefaultValueRange())) {
            $out->{self::FIELD_DEFAULT_VALUE_RANGE} = $v;
        }
        if (null !== ($v = $this->getDefaultValueRatio())) {
            $out->{self::FIELD_DEFAULT_VALUE_RATIO} = $v;
        }
        if (null !== ($v = $this->getDefaultValueReference())) {
            $out->{self::FIELD_DEFAULT_VALUE_REFERENCE} = $v;
        }
        if (null !== ($v = $this->getDefaultValueSampledData())) {
            $out->{self::FIELD_DEFAULT_VALUE_SAMPLED_DATA} = $v;
        }
        if (null !== ($v = $this->getDefaultValueSignature())) {
            $out->{self::FIELD_DEFAULT_VALUE_SIGNATURE} = $v;
        }
        if (null !== ($v = $this->getDefaultValueTiming())) {
            $out->{self::FIELD_DEFAULT_VALUE_TIMING} = $v;
        }
        if (null !== ($v = $this->getDefaultValueMeta())) {
            $out->{self::FIELD_DEFAULT_VALUE_META} = $v;
        }
        if (null !== ($v = $this->getElement())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ELEMENT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ELEMENT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getListMode())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LIST_MODE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRStructureMapSourceListMode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LIST_MODE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getVariable())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VARIABLE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRId::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VARIABLE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCondition())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CONDITION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONDITION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCheck())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CHECK} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CHECK_EXT} = $ext;
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