<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 22nd, 2025 19:32+0000
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
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
 * A Resource Profile - a statement of use of one or more FHIR Resources. It may
 * include constraints on Resources and Data Types, Terminology Binding Statements
 * and Extension Definitions.
 */
class FHIRProfileDefinition extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_PROFILE_DOT_DEFINITION;


    public const FIELD_SHORT = 'short';
    public const FIELD_SHORT_EXT = '_short';
    public const FIELD_FORMAL = 'formal';
    public const FIELD_FORMAL_EXT = '_formal';
    public const FIELD_COMMENTS = 'comments';
    public const FIELD_COMMENTS_EXT = '_comments';
    public const FIELD_REQUIREMENTS = 'requirements';
    public const FIELD_REQUIREMENTS_EXT = '_requirements';
    public const FIELD_SYNONYM = 'synonym';
    public const FIELD_SYNONYM_EXT = '_synonym';
    public const FIELD_MIN = 'min';
    public const FIELD_MIN_EXT = '_min';
    public const FIELD_MAX = 'max';
    public const FIELD_MAX_EXT = '_max';
    public const FIELD_TYPE = 'type';
    public const FIELD_NAME_REFERENCE = 'nameReference';
    public const FIELD_NAME_REFERENCE_EXT = '_nameReference';
    public const FIELD_VALUE_BOOLEAN = 'valueBoolean';
    public const FIELD_VALUE_BOOLEAN_EXT = '_valueBoolean';
    public const FIELD_VALUE_INTEGER = 'valueInteger';
    public const FIELD_VALUE_INTEGER_EXT = '_valueInteger';
    public const FIELD_VALUE_DECIMAL = 'valueDecimal';
    public const FIELD_VALUE_DECIMAL_EXT = '_valueDecimal';
    public const FIELD_VALUE_BASE_64BINARY = 'valueBase64Binary';
    public const FIELD_VALUE_BASE_64BINARY_EXT = '_valueBase64Binary';
    public const FIELD_VALUE_INSTANT = 'valueInstant';
    public const FIELD_VALUE_INSTANT_EXT = '_valueInstant';
    public const FIELD_VALUE_STRING = 'valueString';
    public const FIELD_VALUE_STRING_EXT = '_valueString';
    public const FIELD_VALUE_URI = 'valueUri';
    public const FIELD_VALUE_URI_EXT = '_valueUri';
    public const FIELD_VALUE_DATE = 'valueDate';
    public const FIELD_VALUE_DATE_EXT = '_valueDate';
    public const FIELD_VALUE_DATE_TIME = 'valueDateTime';
    public const FIELD_VALUE_DATE_TIME_EXT = '_valueDateTime';
    public const FIELD_VALUE_CODE = 'valueCode';
    public const FIELD_VALUE_CODE_EXT = '_valueCode';
    public const FIELD_VALUE_OID = 'valueOid';
    public const FIELD_VALUE_OID_EXT = '_valueOid';
    public const FIELD_VALUE_UUID = 'valueUuid';
    public const FIELD_VALUE_UUID_EXT = '_valueUuid';
    public const FIELD_VALUE_ID = 'valueId';
    public const FIELD_VALUE_ID_EXT = '_valueId';
    public const FIELD_VALUE_ATTACHMENT = 'valueAttachment';
    public const FIELD_VALUE_IDENTIFIER = 'valueIdentifier';
    public const FIELD_VALUE_CODEABLE_CONCEPT = 'valueCodeableConcept';
    public const FIELD_VALUE_CODING = 'valueCoding';
    public const FIELD_VALUE_QUANTITY = 'valueQuantity';
    public const FIELD_VALUE_RANGE = 'valueRange';
    public const FIELD_VALUE_PERIOD = 'valuePeriod';
    public const FIELD_VALUE_RATIO = 'valueRatio';
    public const FIELD_VALUE_RESOURCE = 'valueResource';
    public const FIELD_VALUE_SAMPLED_DATA = 'valueSampledData';
    public const FIELD_VALUE_HUMAN_NAME = 'valueHumanName';
    public const FIELD_VALUE_ADDRESS = 'valueAddress';
    public const FIELD_VALUE_CONTACT = 'valueContact';
    public const FIELD_VALUE_SCHEDULE = 'valueSchedule';
    public const FIELD_EXAMPLE_BOOLEAN = 'exampleBoolean';
    public const FIELD_EXAMPLE_BOOLEAN_EXT = '_exampleBoolean';
    public const FIELD_EXAMPLE_INTEGER = 'exampleInteger';
    public const FIELD_EXAMPLE_INTEGER_EXT = '_exampleInteger';
    public const FIELD_EXAMPLE_DECIMAL = 'exampleDecimal';
    public const FIELD_EXAMPLE_DECIMAL_EXT = '_exampleDecimal';
    public const FIELD_EXAMPLE_BASE_64BINARY = 'exampleBase64Binary';
    public const FIELD_EXAMPLE_BASE_64BINARY_EXT = '_exampleBase64Binary';
    public const FIELD_EXAMPLE_INSTANT = 'exampleInstant';
    public const FIELD_EXAMPLE_INSTANT_EXT = '_exampleInstant';
    public const FIELD_EXAMPLE_STRING = 'exampleString';
    public const FIELD_EXAMPLE_STRING_EXT = '_exampleString';
    public const FIELD_EXAMPLE_URI = 'exampleUri';
    public const FIELD_EXAMPLE_URI_EXT = '_exampleUri';
    public const FIELD_EXAMPLE_DATE = 'exampleDate';
    public const FIELD_EXAMPLE_DATE_EXT = '_exampleDate';
    public const FIELD_EXAMPLE_DATE_TIME = 'exampleDateTime';
    public const FIELD_EXAMPLE_DATE_TIME_EXT = '_exampleDateTime';
    public const FIELD_EXAMPLE_CODE = 'exampleCode';
    public const FIELD_EXAMPLE_CODE_EXT = '_exampleCode';
    public const FIELD_EXAMPLE_OID = 'exampleOid';
    public const FIELD_EXAMPLE_OID_EXT = '_exampleOid';
    public const FIELD_EXAMPLE_UUID = 'exampleUuid';
    public const FIELD_EXAMPLE_UUID_EXT = '_exampleUuid';
    public const FIELD_EXAMPLE_ID = 'exampleId';
    public const FIELD_EXAMPLE_ID_EXT = '_exampleId';
    public const FIELD_EXAMPLE_ATTACHMENT = 'exampleAttachment';
    public const FIELD_EXAMPLE_IDENTIFIER = 'exampleIdentifier';
    public const FIELD_EXAMPLE_CODEABLE_CONCEPT = 'exampleCodeableConcept';
    public const FIELD_EXAMPLE_CODING = 'exampleCoding';
    public const FIELD_EXAMPLE_QUANTITY = 'exampleQuantity';
    public const FIELD_EXAMPLE_RANGE = 'exampleRange';
    public const FIELD_EXAMPLE_PERIOD = 'examplePeriod';
    public const FIELD_EXAMPLE_RATIO = 'exampleRatio';
    public const FIELD_EXAMPLE_RESOURCE = 'exampleResource';
    public const FIELD_EXAMPLE_SAMPLED_DATA = 'exampleSampledData';
    public const FIELD_EXAMPLE_HUMAN_NAME = 'exampleHumanName';
    public const FIELD_EXAMPLE_ADDRESS = 'exampleAddress';
    public const FIELD_EXAMPLE_CONTACT = 'exampleContact';
    public const FIELD_EXAMPLE_SCHEDULE = 'exampleSchedule';
    public const FIELD_MAX_LENGTH = 'maxLength';
    public const FIELD_MAX_LENGTH_EXT = '_maxLength';
    public const FIELD_CONDITION = 'condition';
    public const FIELD_CONDITION_EXT = '_condition';
    public const FIELD_CONSTRAINT = 'constraint';
    public const FIELD_MUST_SUPPORT = 'mustSupport';
    public const FIELD_MUST_SUPPORT_EXT = '_mustSupport';
    public const FIELD_IS_MODIFIER = 'isModifier';
    public const FIELD_IS_MODIFIER_EXT = '_isModifier';
    public const FIELD_BINDING = 'binding';
    public const FIELD_MAPPING = 'mapping';

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A concise definition that is shown in the generated XML format that summarizes
     * profiles (used throughout the specification).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $short;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The definition SHALL be consistent with the base definition, but convey the
     * meaning of the element in the particular context of use of the resource.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $formal;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Comments about the use of the element, including notes about how to use the data
     * properly, exceptions to proper use, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $comments;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Explains why this element is needed and why it's been constrained as it has.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $requirements;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies additional names by which this element might also be known.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString[] 
     */
    protected array $synonym;
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum number of times this element SHALL appear in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $min;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $max;
    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * The data type or resource that the value of this element is permitted to be.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileType[] 
     */
    protected array $type;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the name of a slice defined elsewhere in the profile whose
     * constraints should be applied to the current element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $nameReference;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $valueBoolean;
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $valueInteger;
    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $valueDecimal;
    /**
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBase64Binary 
     */
    protected FHIRBase64Binary $valueBase64Binary;
    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant 
     */
    protected FHIRInstant $valueInstant;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $valueString;
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $valueUri;
    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $valueDate;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $valueDateTime;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode 
     */
    protected FHIRCode $valueCode;
    /**
     * An oid represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIROid 
     */
    protected FHIROid $valueOid;
    /**
     * A UUID, represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUuid 
     */
    protected FHIRUuid $valueUuid;
    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId 
     */
    protected FHIRId $valueId;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment 
     */
    protected FHIRAttachment $valueAttachment;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier 
     */
    protected FHIRIdentifier $valueIdentifier;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $valueCodeableConcept;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding 
     */
    protected FHIRCoding $valueCoding;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $valueQuantity;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $valueRange;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $valuePeriod;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRatio 
     */
    protected FHIRRatio $valueRatio;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $valueResource;
    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSampledData 
     */
    protected FHIRSampledData $valueSampledData;
    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRHumanName 
     */
    protected FHIRHumanName $valueHumanName;
    /**
     * There is a variety of postal address formats defined around the world. This
     * format defines a superset that is the basis for all addresses around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAddress 
     */
    protected FHIRAddress $valueAddress;
    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact 
     */
    protected FHIRContact $valueContact;
    /**
     * Specifies an event that may occur multiple times. Schedules are used for to
     * reord when things are expected or requested to occur.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule 
     */
    protected FHIRSchedule $valueSchedule;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $exampleBoolean;
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $exampleInteger;
    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $exampleDecimal;
    /**
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBase64Binary 
     */
    protected FHIRBase64Binary $exampleBase64Binary;
    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant 
     */
    protected FHIRInstant $exampleInstant;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $exampleString;
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $exampleUri;
    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $exampleDate;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $exampleDateTime;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode 
     */
    protected FHIRCode $exampleCode;
    /**
     * An oid represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIROid 
     */
    protected FHIROid $exampleOid;
    /**
     * A UUID, represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUuid 
     */
    protected FHIRUuid $exampleUuid;
    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId 
     */
    protected FHIRId $exampleId;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment 
     */
    protected FHIRAttachment $exampleAttachment;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier 
     */
    protected FHIRIdentifier $exampleIdentifier;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $exampleCodeableConcept;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding 
     */
    protected FHIRCoding $exampleCoding;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $exampleQuantity;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $exampleRange;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $examplePeriod;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRatio 
     */
    protected FHIRRatio $exampleRatio;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $exampleResource;
    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSampledData 
     */
    protected FHIRSampledData $exampleSampledData;
    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRHumanName 
     */
    protected FHIRHumanName $exampleHumanName;
    /**
     * There is a variety of postal address formats defined around the world. This
     * format defines a superset that is the basis for all addresses around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAddress 
     */
    protected FHIRAddress $exampleAddress;
    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact 
     */
    protected FHIRContact $exampleContact;
    /**
     * Specifies an event that may occur multiple times. Schedules are used for to
     * reord when things are expected or requested to occur.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule 
     */
    protected FHIRSchedule $exampleSchedule;
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the shortest length that SHALL be supported by conformant instances
     * without truncation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $maxLength;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId[] 
     */
    protected array $condition;
    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * Formal constraints such as co-occurrence and other constraints that can be
     * computationally evaluated within the context of the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileConstraint[] 
     */
    protected array $constraint;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, conformant resource authors SHALL be capable of providing a value for
     * the element and resource consumers SHALL be capable of extracting and doing
     * something useful with the data element. If false, the element may be ignored and
     * not supported.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $mustSupport;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $isModifier;
    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileBinding 
     */
    protected FHIRProfileBinding $binding;
    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * Identifies a concept from an external specification that roughly corresponds to
     * this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileMapping1[] 
     */
    protected array $mapping;

    /** Default validation map for fields in type Profile.Definition */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_ID => [
            Constants::VALIDATE_PATTERN => '/^[a-z0-9\\-\\.]{1,36}$/',
        ],
        self::FIELD_SHORT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_FORMAL => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_MIN => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_MAX => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_IS_MODIFIER => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRProfileDefinition Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $short
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $formal
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $comments
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $requirements
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString[] $synonym
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $min
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $max
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileType[] $type
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $nameReference
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $valueBoolean
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $valueInteger
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal $valueDecimal
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBase64Binary $valueBase64Binary
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant $valueInstant
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $valueString
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri $valueUri
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate $valueDate
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $valueDateTime
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $valueCode
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIROid $valueOid
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUuidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUuid $valueUuid
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId $valueId
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment $valueAttachment
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier $valueIdentifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $valueCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding $valueCoding
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity $valueQuantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRange $valueRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod $valuePeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRatio $valueRatio
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $valueResource
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSampledData $valueSampledData
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRHumanName $valueHumanName
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAddress $valueAddress
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact $valueContact
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule $valueSchedule
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $exampleBoolean
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $exampleInteger
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal $exampleDecimal
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBase64Binary $exampleBase64Binary
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant $exampleInstant
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $exampleString
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri $exampleUri
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate $exampleDate
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $exampleDateTime
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $exampleCode
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIROid $exampleOid
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUuidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUuid $exampleUuid
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId $exampleId
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment $exampleAttachment
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier $exampleIdentifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $exampleCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding $exampleCoding
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity $exampleQuantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRange $exampleRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod $examplePeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRatio $exampleRatio
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $exampleResource
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSampledData $exampleSampledData
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRHumanName $exampleHumanName
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAddress $exampleAddress
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact $exampleContact
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule $exampleSchedule
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $maxLength
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId[] $condition
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileConstraint[] $constraint
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $mustSupport
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $isModifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileBinding $binding
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileMapping1[] $mapping
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRStringPrimitive|FHIRString $short = null,
                                null|string|FHIRStringPrimitive|FHIRString $formal = null,
                                null|string|FHIRStringPrimitive|FHIRString $comments = null,
                                null|string|FHIRStringPrimitive|FHIRString $requirements = null,
                                null|iterable $synonym = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $min = null,
                                null|string|FHIRStringPrimitive|FHIRString $max = null,
                                null|iterable $type = null,
                                null|string|FHIRStringPrimitive|FHIRString $nameReference = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $valueBoolean = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $valueInteger = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $valueDecimal = null,
                                null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $valueBase64Binary = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $valueInstant = null,
                                null|string|FHIRStringPrimitive|FHIRString $valueString = null,
                                null|string|FHIRUriPrimitive|FHIRUri $valueUri = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $valueDate = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $valueDateTime = null,
                                null|string|FHIRCodePrimitive|FHIRCode $valueCode = null,
                                null|string|FHIROidPrimitive|FHIROid $valueOid = null,
                                null|string|FHIRUuidPrimitive|FHIRUuid $valueUuid = null,
                                null|string|FHIRIdPrimitive|FHIRId $valueId = null,
                                null|FHIRAttachment $valueAttachment = null,
                                null|FHIRIdentifier $valueIdentifier = null,
                                null|FHIRCodeableConcept $valueCodeableConcept = null,
                                null|FHIRCoding $valueCoding = null,
                                null|FHIRQuantity $valueQuantity = null,
                                null|FHIRRange $valueRange = null,
                                null|FHIRPeriod $valuePeriod = null,
                                null|FHIRRatio $valueRatio = null,
                                null|FHIRResourceReference $valueResource = null,
                                null|FHIRSampledData $valueSampledData = null,
                                null|FHIRHumanName $valueHumanName = null,
                                null|FHIRAddress $valueAddress = null,
                                null|FHIRContact $valueContact = null,
                                null|FHIRSchedule $valueSchedule = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $exampleBoolean = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $exampleInteger = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $exampleDecimal = null,
                                null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $exampleBase64Binary = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $exampleInstant = null,
                                null|string|FHIRStringPrimitive|FHIRString $exampleString = null,
                                null|string|FHIRUriPrimitive|FHIRUri $exampleUri = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $exampleDate = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $exampleDateTime = null,
                                null|string|FHIRCodePrimitive|FHIRCode $exampleCode = null,
                                null|string|FHIROidPrimitive|FHIROid $exampleOid = null,
                                null|string|FHIRUuidPrimitive|FHIRUuid $exampleUuid = null,
                                null|string|FHIRIdPrimitive|FHIRId $exampleId = null,
                                null|FHIRAttachment $exampleAttachment = null,
                                null|FHIRIdentifier $exampleIdentifier = null,
                                null|FHIRCodeableConcept $exampleCodeableConcept = null,
                                null|FHIRCoding $exampleCoding = null,
                                null|FHIRQuantity $exampleQuantity = null,
                                null|FHIRRange $exampleRange = null,
                                null|FHIRPeriod $examplePeriod = null,
                                null|FHIRRatio $exampleRatio = null,
                                null|FHIRResourceReference $exampleResource = null,
                                null|FHIRSampledData $exampleSampledData = null,
                                null|FHIRHumanName $exampleHumanName = null,
                                null|FHIRAddress $exampleAddress = null,
                                null|FHIRContact $exampleContact = null,
                                null|FHIRSchedule $exampleSchedule = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $maxLength = null,
                                null|iterable $condition = null,
                                null|iterable $constraint = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $mustSupport = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $isModifier = null,
                                null|FHIRProfileBinding $binding = null,
                                null|iterable $mapping = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $short) {
            $this->setShort($short);
        }
        if (null !== $formal) {
            $this->setFormal($formal);
        }
        if (null !== $comments) {
            $this->setComments($comments);
        }
        if (null !== $requirements) {
            $this->setRequirements($requirements);
        }
        if (null !== $synonym) {
            $this->setSynonym(...$synonym);
        }
        if (null !== $min) {
            $this->setMin($min);
        }
        if (null !== $max) {
            $this->setMax($max);
        }
        if (null !== $type) {
            $this->setType(...$type);
        }
        if (null !== $nameReference) {
            $this->setNameReference($nameReference);
        }
        if (null !== $valueBoolean) {
            $this->setValueBoolean($valueBoolean);
        }
        if (null !== $valueInteger) {
            $this->setValueInteger($valueInteger);
        }
        if (null !== $valueDecimal) {
            $this->setValueDecimal($valueDecimal);
        }
        if (null !== $valueBase64Binary) {
            $this->setValueBase64Binary($valueBase64Binary);
        }
        if (null !== $valueInstant) {
            $this->setValueInstant($valueInstant);
        }
        if (null !== $valueString) {
            $this->setValueString($valueString);
        }
        if (null !== $valueUri) {
            $this->setValueUri($valueUri);
        }
        if (null !== $valueDate) {
            $this->setValueDate($valueDate);
        }
        if (null !== $valueDateTime) {
            $this->setValueDateTime($valueDateTime);
        }
        if (null !== $valueCode) {
            $this->setValueCode($valueCode);
        }
        if (null !== $valueOid) {
            $this->setValueOid($valueOid);
        }
        if (null !== $valueUuid) {
            $this->setValueUuid($valueUuid);
        }
        if (null !== $valueId) {
            $this->setValueId($valueId);
        }
        if (null !== $valueAttachment) {
            $this->setValueAttachment($valueAttachment);
        }
        if (null !== $valueIdentifier) {
            $this->setValueIdentifier($valueIdentifier);
        }
        if (null !== $valueCodeableConcept) {
            $this->setValueCodeableConcept($valueCodeableConcept);
        }
        if (null !== $valueCoding) {
            $this->setValueCoding($valueCoding);
        }
        if (null !== $valueQuantity) {
            $this->setValueQuantity($valueQuantity);
        }
        if (null !== $valueRange) {
            $this->setValueRange($valueRange);
        }
        if (null !== $valuePeriod) {
            $this->setValuePeriod($valuePeriod);
        }
        if (null !== $valueRatio) {
            $this->setValueRatio($valueRatio);
        }
        if (null !== $valueResource) {
            $this->setValueResource($valueResource);
        }
        if (null !== $valueSampledData) {
            $this->setValueSampledData($valueSampledData);
        }
        if (null !== $valueHumanName) {
            $this->setValueHumanName($valueHumanName);
        }
        if (null !== $valueAddress) {
            $this->setValueAddress($valueAddress);
        }
        if (null !== $valueContact) {
            $this->setValueContact($valueContact);
        }
        if (null !== $valueSchedule) {
            $this->setValueSchedule($valueSchedule);
        }
        if (null !== $exampleBoolean) {
            $this->setExampleBoolean($exampleBoolean);
        }
        if (null !== $exampleInteger) {
            $this->setExampleInteger($exampleInteger);
        }
        if (null !== $exampleDecimal) {
            $this->setExampleDecimal($exampleDecimal);
        }
        if (null !== $exampleBase64Binary) {
            $this->setExampleBase64Binary($exampleBase64Binary);
        }
        if (null !== $exampleInstant) {
            $this->setExampleInstant($exampleInstant);
        }
        if (null !== $exampleString) {
            $this->setExampleString($exampleString);
        }
        if (null !== $exampleUri) {
            $this->setExampleUri($exampleUri);
        }
        if (null !== $exampleDate) {
            $this->setExampleDate($exampleDate);
        }
        if (null !== $exampleDateTime) {
            $this->setExampleDateTime($exampleDateTime);
        }
        if (null !== $exampleCode) {
            $this->setExampleCode($exampleCode);
        }
        if (null !== $exampleOid) {
            $this->setExampleOid($exampleOid);
        }
        if (null !== $exampleUuid) {
            $this->setExampleUuid($exampleUuid);
        }
        if (null !== $exampleId) {
            $this->setExampleId($exampleId);
        }
        if (null !== $exampleAttachment) {
            $this->setExampleAttachment($exampleAttachment);
        }
        if (null !== $exampleIdentifier) {
            $this->setExampleIdentifier($exampleIdentifier);
        }
        if (null !== $exampleCodeableConcept) {
            $this->setExampleCodeableConcept($exampleCodeableConcept);
        }
        if (null !== $exampleCoding) {
            $this->setExampleCoding($exampleCoding);
        }
        if (null !== $exampleQuantity) {
            $this->setExampleQuantity($exampleQuantity);
        }
        if (null !== $exampleRange) {
            $this->setExampleRange($exampleRange);
        }
        if (null !== $examplePeriod) {
            $this->setExamplePeriod($examplePeriod);
        }
        if (null !== $exampleRatio) {
            $this->setExampleRatio($exampleRatio);
        }
        if (null !== $exampleResource) {
            $this->setExampleResource($exampleResource);
        }
        if (null !== $exampleSampledData) {
            $this->setExampleSampledData($exampleSampledData);
        }
        if (null !== $exampleHumanName) {
            $this->setExampleHumanName($exampleHumanName);
        }
        if (null !== $exampleAddress) {
            $this->setExampleAddress($exampleAddress);
        }
        if (null !== $exampleContact) {
            $this->setExampleContact($exampleContact);
        }
        if (null !== $exampleSchedule) {
            $this->setExampleSchedule($exampleSchedule);
        }
        if (null !== $maxLength) {
            $this->setMaxLength($maxLength);
        }
        if (null !== $condition) {
            $this->setCondition(...$condition);
        }
        if (null !== $constraint) {
            $this->setConstraint(...$constraint);
        }
        if (null !== $mustSupport) {
            $this->setMustSupport($mustSupport);
        }
        if (null !== $isModifier) {
            $this->setIsModifier($isModifier);
        }
        if (null !== $binding) {
            $this->setBinding($binding);
        }
        if (null !== $mapping) {
            $this->setMapping(...$mapping);
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
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A concise definition that is shown in the generated XML format that summarizes
     * profiles (used throughout the specification).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getShort(): null|FHIRString
    {
        return $this->short ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A concise definition that is shown in the generated XML format that summarizes
     * profiles (used throughout the specification).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $short
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setShort(null|string|FHIRStringPrimitive|FHIRString $short,
                             null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $short) {
            unset($this->short);
            return $this;
        }
        if (!($short instanceof FHIRString)) {
            $short = new FHIRString(value: $short);
        }
        if (null !== $valueXMLLocation) {
            $short->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $short->_getValueXMLLocation()) {
            $short->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getFormal(): null|FHIRString
    {
        return $this->formal ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The definition SHALL be consistent with the base definition, but convey the
     * meaning of the element in the particular context of use of the resource.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $formal
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setFormal(null|string|FHIRStringPrimitive|FHIRString $formal,
                              null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $formal) {
            unset($this->formal);
            return $this;
        }
        if (!($formal instanceof FHIRString)) {
            $formal = new FHIRString(value: $formal);
        }
        if (null !== $valueXMLLocation) {
            $formal->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $formal->_getValueXMLLocation()) {
            $formal->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getComments(): null|FHIRString
    {
        return $this->comments ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Comments about the use of the element, including notes about how to use the data
     * properly, exceptions to proper use, etc.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $comments
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setComments(null|string|FHIRStringPrimitive|FHIRString $comments,
                                null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $comments) {
            unset($this->comments);
            return $this;
        }
        if (!($comments instanceof FHIRString)) {
            $comments = new FHIRString(value: $comments);
        }
        if (null !== $valueXMLLocation) {
            $comments->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $comments->_getValueXMLLocation()) {
            $comments->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->comments = $comments;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Explains why this element is needed and why it's been constrained as it has.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getRequirements(): null|FHIRString
    {
        return $this->requirements ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Explains why this element is needed and why it's been constrained as it has.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $requirements
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setRequirements(null|string|FHIRStringPrimitive|FHIRString $requirements,
                                    null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $requirements) {
            unset($this->requirements);
            return $this;
        }
        if (!($requirements instanceof FHIRString)) {
            $requirements = new FHIRString(value: $requirements);
        }
        if (null !== $valueXMLLocation) {
            $requirements->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $requirements->_getValueXMLLocation()) {
            $requirements->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->requirements = $requirements;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies additional names by which this element might also be known.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString[]
     */
    public function getSynonym(): array
    {
        return $this->synonym ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString>
     */
    public function getSynonymIterator(): iterable
    {
        if (!isset($this->synonym) || [] === $this->synonym) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->synonym);
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies additional names by which this element might also be known.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $synonym
     * @return static
     */
    public function addSynonym(string|FHIRStringPrimitive|FHIRString $synonym): self
    {
        if (!($synonym instanceof FHIRString)) {
            $synonym = new FHIRString(value: $synonym);
        }
        if (!isset($this->synonym)) {
            $this->synonym = [];
        }
        $this->synonym[] = $synonym;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies additional names by which this element might also be known.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString ...$synonym
     * @return static
     */
    public function setSynonym(string|FHIRStringPrimitive|FHIRString ...$synonym): self
    {
        $this->synonym = [];
        foreach($synonym as $v) {
            if ($v instanceof FHIRString) {
                $this->synonym[] = $v;
            } else {
                $this->synonym[] = new FHIRString(value: $v);
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger
     */
    public function getMin(): null|FHIRInteger
    {
        return $this->min ?? null;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum number of times this element SHALL appear in the instance.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $min
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setMin(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $min,
                           null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $min) {
            unset($this->min);
            return $this;
        }
        if (!($min instanceof FHIRInteger)) {
            $min = new FHIRInteger(value: $min);
        }
        if (null !== $valueXMLLocation) {
            $min->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $min->_getValueXMLLocation()) {
            $min->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->min = $min;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getMax(): null|FHIRString
    {
        return $this->max ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the instance.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $max
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setMax(null|string|FHIRStringPrimitive|FHIRString $max,
                           null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $max) {
            unset($this->max);
            return $this;
        }
        if (!($max instanceof FHIRString)) {
            $max = new FHIRString(value: $max);
        }
        if (null !== $valueXMLLocation) {
            $max->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $max->_getValueXMLLocation()) {
            $max->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileType[]
     */
    public function getType(): array
    {
        return $this->type ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileType>
     */
    public function getTypeIterator(): iterable
    {
        if (!isset($this->type) || [] === $this->type) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->type);
    }

    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * The data type or resource that the value of this element is permitted to be.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileType $type
     * @return static
     */
    public function addType(FHIRProfileType $type): self
    {
        if (!isset($this->type)) {
            $this->type = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileType ...$type
     * @return static
     */
    public function setType(FHIRProfileType ...$type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the name of a slice defined elsewhere in the profile whose
     * constraints should be applied to the current element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getNameReference(): null|FHIRString
    {
        return $this->nameReference ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the name of a slice defined elsewhere in the profile whose
     * constraints should be applied to the current element.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $nameReference
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setNameReference(null|string|FHIRStringPrimitive|FHIRString $nameReference,
                                     null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $nameReference) {
            unset($this->nameReference);
            return $this;
        }
        if (!($nameReference instanceof FHIRString)) {
            $nameReference = new FHIRString(value: $nameReference);
        }
        if (null !== $valueXMLLocation) {
            $nameReference->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $nameReference->_getValueXMLLocation()) {
            $nameReference->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->nameReference = $nameReference;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean(): null|FHIRBoolean
    {
        return $this->valueBoolean ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $valueBoolean
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $valueBoolean,
                                    null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $valueBoolean) {
            unset($this->valueBoolean);
            return $this;
        }
        if (!($valueBoolean instanceof FHIRBoolean)) {
            $valueBoolean = new FHIRBoolean(value: $valueBoolean);
        }
        if (null !== $valueXMLLocation) {
            $valueBoolean->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $valueBoolean->_getValueXMLLocation()) {
            $valueBoolean->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger
     */
    public function getValueInteger(): null|FHIRInteger
    {
        return $this->valueInteger ?? null;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $valueInteger
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueInteger(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $valueInteger,
                                    null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $valueInteger) {
            unset($this->valueInteger);
            return $this;
        }
        if (!($valueInteger instanceof FHIRInteger)) {
            $valueInteger = new FHIRInteger(value: $valueInteger);
        }
        if (null !== $valueXMLLocation) {
            $valueInteger->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $valueInteger->_getValueXMLLocation()) {
            $valueInteger->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->valueInteger = $valueInteger;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal
     */
    public function getValueDecimal(): null|FHIRDecimal
    {
        return $this->valueDecimal ?? null;
    }

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal $valueDecimal
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueDecimal(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $valueDecimal,
                                    null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $valueDecimal) {
            unset($this->valueDecimal);
            return $this;
        }
        if (!($valueDecimal instanceof FHIRDecimal)) {
            $valueDecimal = new FHIRDecimal(value: $valueDecimal);
        }
        if (null !== $valueXMLLocation) {
            $valueDecimal->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $valueDecimal->_getValueXMLLocation()) {
            $valueDecimal->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->valueDecimal = $valueDecimal;
        return $this;
    }

    /**
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBase64Binary
     */
    public function getValueBase64Binary(): null|FHIRBase64Binary
    {
        return $this->valueBase64Binary ?? null;
    }

    /**
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBase64Binary $valueBase64Binary
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueBase64Binary(null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $valueBase64Binary,
                                         null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $valueBase64Binary) {
            unset($this->valueBase64Binary);
            return $this;
        }
        if (!($valueBase64Binary instanceof FHIRBase64Binary)) {
            $valueBase64Binary = new FHIRBase64Binary(value: $valueBase64Binary);
        }
        if (null !== $valueXMLLocation) {
            $valueBase64Binary->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $valueBase64Binary->_getValueXMLLocation()) {
            $valueBase64Binary->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->valueBase64Binary = $valueBase64Binary;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant
     */
    public function getValueInstant(): null|FHIRInstant
    {
        return $this->valueInstant ?? null;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant $valueInstant
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueInstant(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $valueInstant,
                                    null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $valueInstant) {
            unset($this->valueInstant);
            return $this;
        }
        if (!($valueInstant instanceof FHIRInstant)) {
            $valueInstant = new FHIRInstant(value: $valueInstant);
        }
        if (null !== $valueXMLLocation) {
            $valueInstant->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $valueInstant->_getValueXMLLocation()) {
            $valueInstant->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->valueInstant = $valueInstant;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getValueString(): null|FHIRString
    {
        return $this->valueString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $valueString
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueString(null|string|FHIRStringPrimitive|FHIRString $valueString,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $valueString) {
            unset($this->valueString);
            return $this;
        }
        if (!($valueString instanceof FHIRString)) {
            $valueString = new FHIRString(value: $valueString);
        }
        if (null !== $valueXMLLocation) {
            $valueString->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $valueString->_getValueXMLLocation()) {
            $valueString->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri
     */
    public function getValueUri(): null|FHIRUri
    {
        return $this->valueUri ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri $valueUri
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueUri(null|string|FHIRUriPrimitive|FHIRUri $valueUri,
                                null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $valueUri) {
            unset($this->valueUri);
            return $this;
        }
        if (!($valueUri instanceof FHIRUri)) {
            $valueUri = new FHIRUri(value: $valueUri);
        }
        if (null !== $valueXMLLocation) {
            $valueUri->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $valueUri->_getValueXMLLocation()) {
            $valueUri->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate
     */
    public function getValueDate(): null|FHIRDate
    {
        return $this->valueDate ?? null;
    }

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate $valueDate
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $valueDate,
                                 null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $valueDate) {
            unset($this->valueDate);
            return $this;
        }
        if (!($valueDate instanceof FHIRDate)) {
            $valueDate = new FHIRDate(value: $valueDate);
        }
        if (null !== $valueXMLLocation) {
            $valueDate->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $valueDate->_getValueXMLLocation()) {
            $valueDate->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime(): null|FHIRDateTime
    {
        return $this->valueDateTime ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $valueDateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $valueDateTime,
                                     null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $valueDateTime) {
            unset($this->valueDateTime);
            return $this;
        }
        if (!($valueDateTime instanceof FHIRDateTime)) {
            $valueDateTime = new FHIRDateTime(value: $valueDateTime);
        }
        if (null !== $valueXMLLocation) {
            $valueDateTime->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $valueDateTime->_getValueXMLLocation()) {
            $valueDateTime->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode
     */
    public function getValueCode(): null|FHIRCode
    {
        return $this->valueCode ?? null;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $valueCode
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueCode(null|string|FHIRCodePrimitive|FHIRCode $valueCode,
                                 null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $valueCode) {
            unset($this->valueCode);
            return $this;
        }
        if (!($valueCode instanceof FHIRCode)) {
            $valueCode = new FHIRCode(value: $valueCode);
        }
        if (null !== $valueXMLLocation) {
            $valueCode->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $valueCode->_getValueXMLLocation()) {
            $valueCode->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIROid
     */
    public function getValueOid(): null|FHIROid
    {
        return $this->valueOid ?? null;
    }

    /**
     * An oid represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIROid $valueOid
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueOid(null|string|FHIROidPrimitive|FHIROid $valueOid,
                                null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $valueOid) {
            unset($this->valueOid);
            return $this;
        }
        if (!($valueOid instanceof FHIROid)) {
            $valueOid = new FHIROid(value: $valueOid);
        }
        if (null !== $valueXMLLocation) {
            $valueOid->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $valueOid->_getValueXMLLocation()) {
            $valueOid->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUuid
     */
    public function getValueUuid(): null|FHIRUuid
    {
        return $this->valueUuid ?? null;
    }

    /**
     * A UUID, represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUuidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUuid $valueUuid
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueUuid(null|string|FHIRUuidPrimitive|FHIRUuid $valueUuid,
                                 null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $valueUuid) {
            unset($this->valueUuid);
            return $this;
        }
        if (!($valueUuid instanceof FHIRUuid)) {
            $valueUuid = new FHIRUuid(value: $valueUuid);
        }
        if (null !== $valueXMLLocation) {
            $valueUuid->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $valueUuid->_getValueXMLLocation()) {
            $valueUuid->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId
     */
    public function getValueId(): null|FHIRId
    {
        return $this->valueId ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId $valueId
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueId(null|string|FHIRIdPrimitive|FHIRId $valueId,
                               null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $valueId) {
            unset($this->valueId);
            return $this;
        }
        if (!($valueId instanceof FHIRId)) {
            $valueId = new FHIRId(value: $valueId);
        }
        if (null !== $valueXMLLocation) {
            $valueId->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $valueId->_getValueXMLLocation()) {
            $valueId->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment
     */
    public function getValueAttachment(): null|FHIRAttachment
    {
        return $this->valueAttachment ?? null;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment $valueAttachment
     * @return static
     */
    public function setValueAttachment(null|FHIRAttachment $valueAttachment): self
    {
        if (null === $valueAttachment) {
            unset($this->valueAttachment);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier
     */
    public function getValueIdentifier(): null|FHIRIdentifier
    {
        return $this->valueIdentifier ?? null;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier $valueIdentifier
     * @return static
     */
    public function setValueIdentifier(null|FHIRIdentifier $valueIdentifier): self
    {
        if (null === $valueIdentifier) {
            unset($this->valueIdentifier);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getValueCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->valueCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $valueCodeableConcept
     * @return static
     */
    public function setValueCodeableConcept(null|FHIRCodeableConcept $valueCodeableConcept): self
    {
        if (null === $valueCodeableConcept) {
            unset($this->valueCodeableConcept);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding
     */
    public function getValueCoding(): null|FHIRCoding
    {
        return $this->valueCoding ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding $valueCoding
     * @return static
     */
    public function setValueCoding(null|FHIRCoding $valueCoding): self
    {
        if (null === $valueCoding) {
            unset($this->valueCoding);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity(): null|FHIRQuantity
    {
        return $this->valueQuantity ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity $valueQuantity
     * @return static
     */
    public function setValueQuantity(null|FHIRQuantity $valueQuantity): self
    {
        if (null === $valueQuantity) {
            unset($this->valueQuantity);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRange
     */
    public function getValueRange(): null|FHIRRange
    {
        return $this->valueRange ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRange $valueRange
     * @return static
     */
    public function setValueRange(null|FHIRRange $valueRange): self
    {
        if (null === $valueRange) {
            unset($this->valueRange);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod
     */
    public function getValuePeriod(): null|FHIRPeriod
    {
        return $this->valuePeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod $valuePeriod
     * @return static
     */
    public function setValuePeriod(null|FHIRPeriod $valuePeriod): self
    {
        if (null === $valuePeriod) {
            unset($this->valuePeriod);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRatio
     */
    public function getValueRatio(): null|FHIRRatio
    {
        return $this->valueRatio ?? null;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRatio $valueRatio
     * @return static
     */
    public function setValueRatio(null|FHIRRatio $valueRatio): self
    {
        if (null === $valueRatio) {
            unset($this->valueRatio);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getValueResource(): null|FHIRResourceReference
    {
        return $this->valueResource ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $valueResource
     * @return static
     */
    public function setValueResource(null|FHIRResourceReference $valueResource): self
    {
        if (null === $valueResource) {
            unset($this->valueResource);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSampledData
     */
    public function getValueSampledData(): null|FHIRSampledData
    {
        return $this->valueSampledData ?? null;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSampledData $valueSampledData
     * @return static
     */
    public function setValueSampledData(null|FHIRSampledData $valueSampledData): self
    {
        if (null === $valueSampledData) {
            unset($this->valueSampledData);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRHumanName
     */
    public function getValueHumanName(): null|FHIRHumanName
    {
        return $this->valueHumanName ?? null;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRHumanName $valueHumanName
     * @return static
     */
    public function setValueHumanName(null|FHIRHumanName $valueHumanName): self
    {
        if (null === $valueHumanName) {
            unset($this->valueHumanName);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAddress
     */
    public function getValueAddress(): null|FHIRAddress
    {
        return $this->valueAddress ?? null;
    }

    /**
     * There is a variety of postal address formats defined around the world. This
     * format defines a superset that is the basis for all addresses around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAddress $valueAddress
     * @return static
     */
    public function setValueAddress(null|FHIRAddress $valueAddress): self
    {
        if (null === $valueAddress) {
            unset($this->valueAddress);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact
     */
    public function getValueContact(): null|FHIRContact
    {
        return $this->valueContact ?? null;
    }

    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact $valueContact
     * @return static
     */
    public function setValueContact(null|FHIRContact $valueContact): self
    {
        if (null === $valueContact) {
            unset($this->valueContact);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule
     */
    public function getValueSchedule(): null|FHIRSchedule
    {
        return $this->valueSchedule ?? null;
    }

    /**
     * Specifies an event that may occur multiple times. Schedules are used for to
     * reord when things are expected or requested to occur.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule $valueSchedule
     * @return static
     */
    public function setValueSchedule(null|FHIRSchedule $valueSchedule): self
    {
        if (null === $valueSchedule) {
            unset($this->valueSchedule);
            return $this;
        }
        $this->valueSchedule = $valueSchedule;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean
     */
    public function getExampleBoolean(): null|FHIRBoolean
    {
        return $this->exampleBoolean ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $exampleBoolean
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $exampleBoolean,
                                      null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $exampleBoolean) {
            unset($this->exampleBoolean);
            return $this;
        }
        if (!($exampleBoolean instanceof FHIRBoolean)) {
            $exampleBoolean = new FHIRBoolean(value: $exampleBoolean);
        }
        if (null !== $valueXMLLocation) {
            $exampleBoolean->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $exampleBoolean->_getValueXMLLocation()) {
            $exampleBoolean->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->exampleBoolean = $exampleBoolean;
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger
     */
    public function getExampleInteger(): null|FHIRInteger
    {
        return $this->exampleInteger ?? null;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $exampleInteger
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleInteger(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $exampleInteger,
                                      null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $exampleInteger) {
            unset($this->exampleInteger);
            return $this;
        }
        if (!($exampleInteger instanceof FHIRInteger)) {
            $exampleInteger = new FHIRInteger(value: $exampleInteger);
        }
        if (null !== $valueXMLLocation) {
            $exampleInteger->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $exampleInteger->_getValueXMLLocation()) {
            $exampleInteger->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->exampleInteger = $exampleInteger;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal
     */
    public function getExampleDecimal(): null|FHIRDecimal
    {
        return $this->exampleDecimal ?? null;
    }

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal $exampleDecimal
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleDecimal(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $exampleDecimal,
                                      null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $exampleDecimal) {
            unset($this->exampleDecimal);
            return $this;
        }
        if (!($exampleDecimal instanceof FHIRDecimal)) {
            $exampleDecimal = new FHIRDecimal(value: $exampleDecimal);
        }
        if (null !== $valueXMLLocation) {
            $exampleDecimal->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $exampleDecimal->_getValueXMLLocation()) {
            $exampleDecimal->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->exampleDecimal = $exampleDecimal;
        return $this;
    }

    /**
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBase64Binary
     */
    public function getExampleBase64Binary(): null|FHIRBase64Binary
    {
        return $this->exampleBase64Binary ?? null;
    }

    /**
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBase64Binary $exampleBase64Binary
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleBase64Binary(null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $exampleBase64Binary,
                                           null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $exampleBase64Binary) {
            unset($this->exampleBase64Binary);
            return $this;
        }
        if (!($exampleBase64Binary instanceof FHIRBase64Binary)) {
            $exampleBase64Binary = new FHIRBase64Binary(value: $exampleBase64Binary);
        }
        if (null !== $valueXMLLocation) {
            $exampleBase64Binary->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $exampleBase64Binary->_getValueXMLLocation()) {
            $exampleBase64Binary->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->exampleBase64Binary = $exampleBase64Binary;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant
     */
    public function getExampleInstant(): null|FHIRInstant
    {
        return $this->exampleInstant ?? null;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant $exampleInstant
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleInstant(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $exampleInstant,
                                      null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $exampleInstant) {
            unset($this->exampleInstant);
            return $this;
        }
        if (!($exampleInstant instanceof FHIRInstant)) {
            $exampleInstant = new FHIRInstant(value: $exampleInstant);
        }
        if (null !== $valueXMLLocation) {
            $exampleInstant->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $exampleInstant->_getValueXMLLocation()) {
            $exampleInstant->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->exampleInstant = $exampleInstant;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getExampleString(): null|FHIRString
    {
        return $this->exampleString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $exampleString
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleString(null|string|FHIRStringPrimitive|FHIRString $exampleString,
                                     null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $exampleString) {
            unset($this->exampleString);
            return $this;
        }
        if (!($exampleString instanceof FHIRString)) {
            $exampleString = new FHIRString(value: $exampleString);
        }
        if (null !== $valueXMLLocation) {
            $exampleString->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $exampleString->_getValueXMLLocation()) {
            $exampleString->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->exampleString = $exampleString;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri
     */
    public function getExampleUri(): null|FHIRUri
    {
        return $this->exampleUri ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri $exampleUri
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleUri(null|string|FHIRUriPrimitive|FHIRUri $exampleUri,
                                  null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $exampleUri) {
            unset($this->exampleUri);
            return $this;
        }
        if (!($exampleUri instanceof FHIRUri)) {
            $exampleUri = new FHIRUri(value: $exampleUri);
        }
        if (null !== $valueXMLLocation) {
            $exampleUri->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $exampleUri->_getValueXMLLocation()) {
            $exampleUri->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate
     */
    public function getExampleDate(): null|FHIRDate
    {
        return $this->exampleDate ?? null;
    }

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate $exampleDate
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $exampleDate,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $exampleDate) {
            unset($this->exampleDate);
            return $this;
        }
        if (!($exampleDate instanceof FHIRDate)) {
            $exampleDate = new FHIRDate(value: $exampleDate);
        }
        if (null !== $valueXMLLocation) {
            $exampleDate->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $exampleDate->_getValueXMLLocation()) {
            $exampleDate->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime
     */
    public function getExampleDateTime(): null|FHIRDateTime
    {
        return $this->exampleDateTime ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $exampleDateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $exampleDateTime,
                                       null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $exampleDateTime) {
            unset($this->exampleDateTime);
            return $this;
        }
        if (!($exampleDateTime instanceof FHIRDateTime)) {
            $exampleDateTime = new FHIRDateTime(value: $exampleDateTime);
        }
        if (null !== $valueXMLLocation) {
            $exampleDateTime->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $exampleDateTime->_getValueXMLLocation()) {
            $exampleDateTime->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode
     */
    public function getExampleCode(): null|FHIRCode
    {
        return $this->exampleCode ?? null;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $exampleCode
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleCode(null|string|FHIRCodePrimitive|FHIRCode $exampleCode,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $exampleCode) {
            unset($this->exampleCode);
            return $this;
        }
        if (!($exampleCode instanceof FHIRCode)) {
            $exampleCode = new FHIRCode(value: $exampleCode);
        }
        if (null !== $valueXMLLocation) {
            $exampleCode->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $exampleCode->_getValueXMLLocation()) {
            $exampleCode->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIROid
     */
    public function getExampleOid(): null|FHIROid
    {
        return $this->exampleOid ?? null;
    }

    /**
     * An oid represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIROid $exampleOid
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleOid(null|string|FHIROidPrimitive|FHIROid $exampleOid,
                                  null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $exampleOid) {
            unset($this->exampleOid);
            return $this;
        }
        if (!($exampleOid instanceof FHIROid)) {
            $exampleOid = new FHIROid(value: $exampleOid);
        }
        if (null !== $valueXMLLocation) {
            $exampleOid->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $exampleOid->_getValueXMLLocation()) {
            $exampleOid->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUuid
     */
    public function getExampleUuid(): null|FHIRUuid
    {
        return $this->exampleUuid ?? null;
    }

    /**
     * A UUID, represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUuidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUuid $exampleUuid
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleUuid(null|string|FHIRUuidPrimitive|FHIRUuid $exampleUuid,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $exampleUuid) {
            unset($this->exampleUuid);
            return $this;
        }
        if (!($exampleUuid instanceof FHIRUuid)) {
            $exampleUuid = new FHIRUuid(value: $exampleUuid);
        }
        if (null !== $valueXMLLocation) {
            $exampleUuid->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $exampleUuid->_getValueXMLLocation()) {
            $exampleUuid->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId
     */
    public function getExampleId(): null|FHIRId
    {
        return $this->exampleId ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId $exampleId
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleId(null|string|FHIRIdPrimitive|FHIRId $exampleId,
                                 null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $exampleId) {
            unset($this->exampleId);
            return $this;
        }
        if (!($exampleId instanceof FHIRId)) {
            $exampleId = new FHIRId(value: $exampleId);
        }
        if (null !== $valueXMLLocation) {
            $exampleId->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $exampleId->_getValueXMLLocation()) {
            $exampleId->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment
     */
    public function getExampleAttachment(): null|FHIRAttachment
    {
        return $this->exampleAttachment ?? null;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment $exampleAttachment
     * @return static
     */
    public function setExampleAttachment(null|FHIRAttachment $exampleAttachment): self
    {
        if (null === $exampleAttachment) {
            unset($this->exampleAttachment);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier
     */
    public function getExampleIdentifier(): null|FHIRIdentifier
    {
        return $this->exampleIdentifier ?? null;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier $exampleIdentifier
     * @return static
     */
    public function setExampleIdentifier(null|FHIRIdentifier $exampleIdentifier): self
    {
        if (null === $exampleIdentifier) {
            unset($this->exampleIdentifier);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getExampleCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->exampleCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $exampleCodeableConcept
     * @return static
     */
    public function setExampleCodeableConcept(null|FHIRCodeableConcept $exampleCodeableConcept): self
    {
        if (null === $exampleCodeableConcept) {
            unset($this->exampleCodeableConcept);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding
     */
    public function getExampleCoding(): null|FHIRCoding
    {
        return $this->exampleCoding ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding $exampleCoding
     * @return static
     */
    public function setExampleCoding(null|FHIRCoding $exampleCoding): self
    {
        if (null === $exampleCoding) {
            unset($this->exampleCoding);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity
     */
    public function getExampleQuantity(): null|FHIRQuantity
    {
        return $this->exampleQuantity ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity $exampleQuantity
     * @return static
     */
    public function setExampleQuantity(null|FHIRQuantity $exampleQuantity): self
    {
        if (null === $exampleQuantity) {
            unset($this->exampleQuantity);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRange
     */
    public function getExampleRange(): null|FHIRRange
    {
        return $this->exampleRange ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRange $exampleRange
     * @return static
     */
    public function setExampleRange(null|FHIRRange $exampleRange): self
    {
        if (null === $exampleRange) {
            unset($this->exampleRange);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod
     */
    public function getExamplePeriod(): null|FHIRPeriod
    {
        return $this->examplePeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod $examplePeriod
     * @return static
     */
    public function setExamplePeriod(null|FHIRPeriod $examplePeriod): self
    {
        if (null === $examplePeriod) {
            unset($this->examplePeriod);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRatio
     */
    public function getExampleRatio(): null|FHIRRatio
    {
        return $this->exampleRatio ?? null;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRatio $exampleRatio
     * @return static
     */
    public function setExampleRatio(null|FHIRRatio $exampleRatio): self
    {
        if (null === $exampleRatio) {
            unset($this->exampleRatio);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getExampleResource(): null|FHIRResourceReference
    {
        return $this->exampleResource ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $exampleResource
     * @return static
     */
    public function setExampleResource(null|FHIRResourceReference $exampleResource): self
    {
        if (null === $exampleResource) {
            unset($this->exampleResource);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSampledData
     */
    public function getExampleSampledData(): null|FHIRSampledData
    {
        return $this->exampleSampledData ?? null;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSampledData $exampleSampledData
     * @return static
     */
    public function setExampleSampledData(null|FHIRSampledData $exampleSampledData): self
    {
        if (null === $exampleSampledData) {
            unset($this->exampleSampledData);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRHumanName
     */
    public function getExampleHumanName(): null|FHIRHumanName
    {
        return $this->exampleHumanName ?? null;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRHumanName $exampleHumanName
     * @return static
     */
    public function setExampleHumanName(null|FHIRHumanName $exampleHumanName): self
    {
        if (null === $exampleHumanName) {
            unset($this->exampleHumanName);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAddress
     */
    public function getExampleAddress(): null|FHIRAddress
    {
        return $this->exampleAddress ?? null;
    }

    /**
     * There is a variety of postal address formats defined around the world. This
     * format defines a superset that is the basis for all addresses around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAddress $exampleAddress
     * @return static
     */
    public function setExampleAddress(null|FHIRAddress $exampleAddress): self
    {
        if (null === $exampleAddress) {
            unset($this->exampleAddress);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact
     */
    public function getExampleContact(): null|FHIRContact
    {
        return $this->exampleContact ?? null;
    }

    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact $exampleContact
     * @return static
     */
    public function setExampleContact(null|FHIRContact $exampleContact): self
    {
        if (null === $exampleContact) {
            unset($this->exampleContact);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule
     */
    public function getExampleSchedule(): null|FHIRSchedule
    {
        return $this->exampleSchedule ?? null;
    }

    /**
     * Specifies an event that may occur multiple times. Schedules are used for to
     * reord when things are expected or requested to occur.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An example value for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule $exampleSchedule
     * @return static
     */
    public function setExampleSchedule(null|FHIRSchedule $exampleSchedule): self
    {
        if (null === $exampleSchedule) {
            unset($this->exampleSchedule);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger
     */
    public function getMaxLength(): null|FHIRInteger
    {
        return $this->maxLength ?? null;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the shortest length that SHALL be supported by conformant instances
     * without truncation.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $maxLength
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setMaxLength(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $maxLength,
                                 null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $maxLength) {
            unset($this->maxLength);
            return $this;
        }
        if (!($maxLength instanceof FHIRInteger)) {
            $maxLength = new FHIRInteger(value: $maxLength);
        }
        if (null !== $valueXMLLocation) {
            $maxLength->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $maxLength->_getValueXMLLocation()) {
            $maxLength->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId[]
     */
    public function getCondition(): array
    {
        return $this->condition ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId>
     */
    public function getConditionIterator(): iterable
    {
        if (!isset($this->condition) || [] === $this->condition) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->condition);
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId $condition
     * @return static
     */
    public function addCondition(string|FHIRIdPrimitive|FHIRId $condition): self
    {
        if (!($condition instanceof FHIRId)) {
            $condition = new FHIRId(value: $condition);
        }
        if (!isset($this->condition)) {
            $this->condition = [];
        }
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId ...$condition
     * @return static
     */
    public function setCondition(string|FHIRIdPrimitive|FHIRId ...$condition): self
    {
        $this->condition = [];
        foreach($condition as $v) {
            if ($v instanceof FHIRId) {
                $this->condition[] = $v;
            } else {
                $this->condition[] = new FHIRId(value: $v);
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileConstraint[]
     */
    public function getConstraint(): array
    {
        return $this->constraint ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileConstraint>
     */
    public function getConstraintIterator(): iterable
    {
        if (!isset($this->constraint) || [] === $this->constraint) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->constraint);
    }

    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * Formal constraints such as co-occurrence and other constraints that can be
     * computationally evaluated within the context of the instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileConstraint $constraint
     * @return static
     */
    public function addConstraint(FHIRProfileConstraint $constraint): self
    {
        if (!isset($this->constraint)) {
            $this->constraint = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileConstraint ...$constraint
     * @return static
     */
    public function setConstraint(FHIRProfileConstraint ...$constraint): self
    {
        $this->constraint = $constraint;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean
     */
    public function getMustSupport(): null|FHIRBoolean
    {
        return $this->mustSupport ?? null;
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
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $mustSupport
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setMustSupport(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $mustSupport,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $mustSupport) {
            unset($this->mustSupport);
            return $this;
        }
        if (!($mustSupport instanceof FHIRBoolean)) {
            $mustSupport = new FHIRBoolean(value: $mustSupport);
        }
        if (null !== $valueXMLLocation) {
            $mustSupport->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $mustSupport->_getValueXMLLocation()) {
            $mustSupport->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean
     */
    public function getIsModifier(): null|FHIRBoolean
    {
        return $this->isModifier ?? null;
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
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $isModifier
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setIsModifier(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $isModifier,
                                  null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $isModifier) {
            unset($this->isModifier);
            return $this;
        }
        if (!($isModifier instanceof FHIRBoolean)) {
            $isModifier = new FHIRBoolean(value: $isModifier);
        }
        if (null !== $valueXMLLocation) {
            $isModifier->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $isModifier->_getValueXMLLocation()) {
            $isModifier->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileBinding
     */
    public function getBinding(): null|FHIRProfileBinding
    {
        return $this->binding ?? null;
    }

    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileBinding $binding
     * @return static
     */
    public function setBinding(null|FHIRProfileBinding $binding): self
    {
        if (null === $binding) {
            unset($this->binding);
            return $this;
        }
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileMapping1[]
     */
    public function getMapping(): array
    {
        return $this->mapping ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileMapping1>
     */
    public function getMappingIterator(): iterable
    {
        if (!isset($this->mapping) || [] === $this->mapping) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->mapping);
    }

    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * Identifies a concept from an external specification that roughly corresponds to
     * this element.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileMapping1 $mapping
     * @return static
     */
    public function addMapping(FHIRProfileMapping1 $mapping): self
    {
        if (!isset($this->mapping)) {
            $this->mapping = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileMapping1 ...$mapping
     * @return static
     */
    public function setMapping(FHIRProfileMapping1 ...$mapping): self
    {
        $this->mapping = $mapping;
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
        if (null !== ($v = $this->getIsModifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IS_MODIFIER] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_SHORT])) {
            $v = $this->getShort();
            foreach($validationRules[self::FIELD_SHORT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SHORT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FORMAL, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COMMENTS, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REQUIREMENTS, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SYNONYM, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MIN, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MAX, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TYPE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NAME_REFERENCE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_BOOLEAN, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_INTEGER, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_DECIMAL, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_BASE_64BINARY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_INSTANT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_STRING, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_URI, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_DATE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_DATE_TIME, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_CODE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_OID, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_UUID, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_ID, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_ATTACHMENT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_IDENTIFIER, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_CODEABLE_CONCEPT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_CODING, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_QUANTITY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_RANGE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_PERIOD, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_RATIO, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_RESOURCE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_SAMPLED_DATA, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_HUMAN_NAME, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_ADDRESS, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_CONTACT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_SCHEDULE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_BOOLEAN, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_INTEGER, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_DECIMAL, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_BASE_64BINARY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_INSTANT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_STRING, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_URI, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_DATE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_DATE_TIME, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_CODE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_OID, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_UUID, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_ID, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_ATTACHMENT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_IDENTIFIER, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_CODEABLE_CONCEPT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_CODING, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_QUANTITY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_RANGE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_PERIOD, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_RATIO, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_RESOURCE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_SAMPLED_DATA, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_HUMAN_NAME, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_ADDRESS, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_CONTACT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_SCHEDULE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MAX_LENGTH, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONDITION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONSTRAINT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MUST_SUPPORT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IS_MODIFIER, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BINDING, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MAPPING, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRProfileDefinition)) {
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
                $valueAttr = $n->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SHORT === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setShort(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FORMAL === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setFormal(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COMMENTS === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setComments(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REQUIREMENTS === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setRequirements(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SYNONYM === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->addSynonym(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MIN === $childName) {
                $v = new FHIRInteger(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setMin(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MAX === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setMax(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TYPE === $childName) {
                $v = new FHIRProfileType();
                $type->addType(FHIRProfileType::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NAME_REFERENCE === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setNameReference(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_BOOLEAN === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setValueBoolean(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_INTEGER === $childName) {
                $v = new FHIRInteger(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setValueInteger(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_DECIMAL === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setValueDecimal(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_BASE_64BINARY === $childName) {
                $v = new FHIRBase64Binary(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setValueBase64Binary(FHIRBase64Binary::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_INSTANT === $childName) {
                $v = new FHIRInstant(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setValueInstant(FHIRInstant::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_STRING === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setValueString(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_URI === $childName) {
                $v = new FHIRUri(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setValueUri(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_DATE === $childName) {
                $v = new FHIRDate(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setValueDate(FHIRDate::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_DATE_TIME === $childName) {
                $v = new FHIRDateTime(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setValueDateTime(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_CODE === $childName) {
                $v = new FHIRCode(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setValueCode(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_OID === $childName) {
                $v = new FHIROid(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setValueOid(FHIROid::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_UUID === $childName) {
                $v = new FHIRUuid(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setValueUuid(FHIRUuid::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_ID === $childName) {
                $v = new FHIRId(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setValueId(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_ATTACHMENT === $childName) {
                $v = new FHIRAttachment();
                $type->setValueAttachment(FHIRAttachment::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_IDENTIFIER === $childName) {
                $v = new FHIRIdentifier();
                $type->setValueIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_CODEABLE_CONCEPT === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setValueCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_CODING === $childName) {
                $v = new FHIRCoding();
                $type->setValueCoding(FHIRCoding::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_QUANTITY === $childName) {
                $v = new FHIRQuantity();
                $type->setValueQuantity(FHIRQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_RANGE === $childName) {
                $v = new FHIRRange();
                $type->setValueRange(FHIRRange::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_PERIOD === $childName) {
                $v = new FHIRPeriod();
                $type->setValuePeriod(FHIRPeriod::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_RATIO === $childName) {
                $v = new FHIRRatio();
                $type->setValueRatio(FHIRRatio::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_RESOURCE === $childName) {
                $v = new FHIRResourceReference();
                $type->setValueResource(FHIRResourceReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_SAMPLED_DATA === $childName) {
                $v = new FHIRSampledData();
                $type->setValueSampledData(FHIRSampledData::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_HUMAN_NAME === $childName) {
                $v = new FHIRHumanName();
                $type->setValueHumanName(FHIRHumanName::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_ADDRESS === $childName) {
                $v = new FHIRAddress();
                $type->setValueAddress(FHIRAddress::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_CONTACT === $childName) {
                $v = new FHIRContact();
                $type->setValueContact(FHIRContact::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_SCHEDULE === $childName) {
                $v = new FHIRSchedule();
                $type->setValueSchedule(FHIRSchedule::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE_BOOLEAN === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setExampleBoolean(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE_INTEGER === $childName) {
                $v = new FHIRInteger(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setExampleInteger(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE_DECIMAL === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setExampleDecimal(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE_BASE_64BINARY === $childName) {
                $v = new FHIRBase64Binary(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setExampleBase64Binary(FHIRBase64Binary::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE_INSTANT === $childName) {
                $v = new FHIRInstant(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setExampleInstant(FHIRInstant::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE_STRING === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setExampleString(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE_URI === $childName) {
                $v = new FHIRUri(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setExampleUri(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE_DATE === $childName) {
                $v = new FHIRDate(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setExampleDate(FHIRDate::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE_DATE_TIME === $childName) {
                $v = new FHIRDateTime(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setExampleDateTime(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE_CODE === $childName) {
                $v = new FHIRCode(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setExampleCode(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE_OID === $childName) {
                $v = new FHIROid(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setExampleOid(FHIROid::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE_UUID === $childName) {
                $v = new FHIRUuid(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setExampleUuid(FHIRUuid::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE_ID === $childName) {
                $v = new FHIRId(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setExampleId(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE_ATTACHMENT === $childName) {
                $v = new FHIRAttachment();
                $type->setExampleAttachment(FHIRAttachment::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE_IDENTIFIER === $childName) {
                $v = new FHIRIdentifier();
                $type->setExampleIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE_CODEABLE_CONCEPT === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setExampleCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE_CODING === $childName) {
                $v = new FHIRCoding();
                $type->setExampleCoding(FHIRCoding::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE_QUANTITY === $childName) {
                $v = new FHIRQuantity();
                $type->setExampleQuantity(FHIRQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE_RANGE === $childName) {
                $v = new FHIRRange();
                $type->setExampleRange(FHIRRange::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE_PERIOD === $childName) {
                $v = new FHIRPeriod();
                $type->setExamplePeriod(FHIRPeriod::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE_RATIO === $childName) {
                $v = new FHIRRatio();
                $type->setExampleRatio(FHIRRatio::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE_RESOURCE === $childName) {
                $v = new FHIRResourceReference();
                $type->setExampleResource(FHIRResourceReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE_SAMPLED_DATA === $childName) {
                $v = new FHIRSampledData();
                $type->setExampleSampledData(FHIRSampledData::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE_HUMAN_NAME === $childName) {
                $v = new FHIRHumanName();
                $type->setExampleHumanName(FHIRHumanName::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE_ADDRESS === $childName) {
                $v = new FHIRAddress();
                $type->setExampleAddress(FHIRAddress::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE_CONTACT === $childName) {
                $v = new FHIRContact();
                $type->setExampleContact(FHIRContact::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE_SCHEDULE === $childName) {
                $v = new FHIRSchedule();
                $type->setExampleSchedule(FHIRSchedule::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MAX_LENGTH === $childName) {
                $v = new FHIRInteger(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setMaxLength(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONDITION === $childName) {
                $v = new FHIRId(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->addCondition(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONSTRAINT === $childName) {
                $v = new FHIRProfileConstraint();
                $type->addConstraint(FHIRProfileConstraint::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MUST_SUPPORT === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setMustSupport(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IS_MODIFIER === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setIsModifier(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_BINDING === $childName) {
                $v = new FHIRProfileBinding();
                $type->setBinding(FHIRProfileBinding::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MAPPING === $childName) {
                $v = new FHIRProfileMapping1();
                $type->addMapping(FHIRProfileMapping1::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRIdPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SHORT])) {
            $pt = $type->getShort();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_SHORT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setShort(new FHIRString(
                    value: (string)$attributes[self::FIELD_SHORT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_FORMAL])) {
            $pt = $type->getFormal();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_FORMAL]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setFormal(new FHIRString(
                    value: (string)$attributes[self::FIELD_FORMAL],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_COMMENTS])) {
            $pt = $type->getComments();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_COMMENTS]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setComments(new FHIRString(
                    value: (string)$attributes[self::FIELD_COMMENTS],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_REQUIREMENTS])) {
            $pt = $type->getRequirements();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_REQUIREMENTS]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setRequirements(new FHIRString(
                    value: (string)$attributes[self::FIELD_REQUIREMENTS],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SYNONYM])) {
            $v = new FHIRString(value: (string)$attributes[self::FIELD_SYNONYM],
                                                       valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE);
            $type->addSynonym($v);
        }
        if (isset($attributes[self::FIELD_MIN])) {
            $pt = $type->getMin();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_MIN]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMin(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_MIN],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MAX])) {
            $pt = $type->getMax();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_MAX]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMax(new FHIRString(
                    value: (string)$attributes[self::FIELD_MAX],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_NAME_REFERENCE])) {
            $pt = $type->getNameReference();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_NAME_REFERENCE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setNameReference(new FHIRString(
                    value: (string)$attributes[self::FIELD_NAME_REFERENCE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VALUE_BOOLEAN])) {
            $pt = $type->getValueBoolean();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_VALUE_BOOLEAN]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueBoolean(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_VALUE_BOOLEAN],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VALUE_INTEGER])) {
            $pt = $type->getValueInteger();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_VALUE_INTEGER]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueInteger(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_VALUE_INTEGER],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VALUE_DECIMAL])) {
            $pt = $type->getValueDecimal();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_VALUE_DECIMAL]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueDecimal(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_VALUE_DECIMAL],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VALUE_BASE_64BINARY])) {
            $pt = $type->getValueBase64Binary();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_VALUE_BASE_64BINARY]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueBase64Binary(new FHIRBase64Binary(
                    value: (string)$attributes[self::FIELD_VALUE_BASE_64BINARY],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VALUE_INSTANT])) {
            $pt = $type->getValueInstant();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_VALUE_INSTANT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueInstant(new FHIRInstant(
                    value: (string)$attributes[self::FIELD_VALUE_INSTANT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VALUE_STRING])) {
            $pt = $type->getValueString();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_VALUE_STRING]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueString(new FHIRString(
                    value: (string)$attributes[self::FIELD_VALUE_STRING],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VALUE_URI])) {
            $pt = $type->getValueUri();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_VALUE_URI]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueUri(new FHIRUri(
                    value: (string)$attributes[self::FIELD_VALUE_URI],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VALUE_DATE])) {
            $pt = $type->getValueDate();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_VALUE_DATE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueDate(new FHIRDate(
                    value: (string)$attributes[self::FIELD_VALUE_DATE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VALUE_DATE_TIME])) {
            $pt = $type->getValueDateTime();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_VALUE_DATE_TIME]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueDateTime(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_VALUE_DATE_TIME],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VALUE_CODE])) {
            $pt = $type->getValueCode();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_VALUE_CODE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueCode(new FHIRCode(
                    value: (string)$attributes[self::FIELD_VALUE_CODE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VALUE_OID])) {
            $pt = $type->getValueOid();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_VALUE_OID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueOid(new FHIROid(
                    value: (string)$attributes[self::FIELD_VALUE_OID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VALUE_UUID])) {
            $pt = $type->getValueUuid();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_VALUE_UUID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueUuid(new FHIRUuid(
                    value: (string)$attributes[self::FIELD_VALUE_UUID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VALUE_ID])) {
            $pt = $type->getValueId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_VALUE_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueId(new FHIRId(
                    value: (string)$attributes[self::FIELD_VALUE_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_BOOLEAN])) {
            $pt = $type->getExampleBoolean();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_EXAMPLE_BOOLEAN]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setExampleBoolean(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_EXAMPLE_BOOLEAN],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_INTEGER])) {
            $pt = $type->getExampleInteger();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_EXAMPLE_INTEGER]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setExampleInteger(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_EXAMPLE_INTEGER],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_DECIMAL])) {
            $pt = $type->getExampleDecimal();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_EXAMPLE_DECIMAL]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setExampleDecimal(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_EXAMPLE_DECIMAL],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_BASE_64BINARY])) {
            $pt = $type->getExampleBase64Binary();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_EXAMPLE_BASE_64BINARY]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setExampleBase64Binary(new FHIRBase64Binary(
                    value: (string)$attributes[self::FIELD_EXAMPLE_BASE_64BINARY],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_INSTANT])) {
            $pt = $type->getExampleInstant();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_EXAMPLE_INSTANT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setExampleInstant(new FHIRInstant(
                    value: (string)$attributes[self::FIELD_EXAMPLE_INSTANT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_STRING])) {
            $pt = $type->getExampleString();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_EXAMPLE_STRING]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setExampleString(new FHIRString(
                    value: (string)$attributes[self::FIELD_EXAMPLE_STRING],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_URI])) {
            $pt = $type->getExampleUri();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_EXAMPLE_URI]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setExampleUri(new FHIRUri(
                    value: (string)$attributes[self::FIELD_EXAMPLE_URI],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_DATE])) {
            $pt = $type->getExampleDate();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_EXAMPLE_DATE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setExampleDate(new FHIRDate(
                    value: (string)$attributes[self::FIELD_EXAMPLE_DATE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_DATE_TIME])) {
            $pt = $type->getExampleDateTime();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_EXAMPLE_DATE_TIME]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setExampleDateTime(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_EXAMPLE_DATE_TIME],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_CODE])) {
            $pt = $type->getExampleCode();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_EXAMPLE_CODE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setExampleCode(new FHIRCode(
                    value: (string)$attributes[self::FIELD_EXAMPLE_CODE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_OID])) {
            $pt = $type->getExampleOid();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_EXAMPLE_OID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setExampleOid(new FHIROid(
                    value: (string)$attributes[self::FIELD_EXAMPLE_OID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_UUID])) {
            $pt = $type->getExampleUuid();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_EXAMPLE_UUID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setExampleUuid(new FHIRUuid(
                    value: (string)$attributes[self::FIELD_EXAMPLE_UUID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_ID])) {
            $pt = $type->getExampleId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_EXAMPLE_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setExampleId(new FHIRId(
                    value: (string)$attributes[self::FIELD_EXAMPLE_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MAX_LENGTH])) {
            $pt = $type->getMaxLength();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_MAX_LENGTH]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMaxLength(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_MAX_LENGTH],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_CONDITION])) {
            $v = new FHIRId(value: (string)$attributes[self::FIELD_CONDITION],
                                                       valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE);
            $type->addCondition($v);
        }
        if (isset($attributes[self::FIELD_MUST_SUPPORT])) {
            $pt = $type->getMustSupport();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_MUST_SUPPORT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMustSupport(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_MUST_SUPPORT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IS_MODIFIER])) {
            $pt = $type->getIsModifier();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_IS_MODIFIER]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setIsModifier(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_IS_MODIFIER],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
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
            $xw->openRootNode('ProfileDefinition', $this->_getSourceXMLNS());
        }
        if (isset($this->short) && $this->short->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SHORT, $this->short->getValue()?->_getFormattedValue());
        }
        if (isset($this->formal) && $this->formal->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_FORMAL, $this->formal->getValue()?->_getFormattedValue());
        }
        if (isset($this->comments) && $this->comments->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_COMMENTS, $this->comments->getValue()?->_getFormattedValue());
        }
        if (isset($this->requirements) && $this->requirements->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_REQUIREMENTS, $this->requirements->getValue()?->_getFormattedValue());
        }
        if (isset($this->synonym)) {
           foreach($this->synonym as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_SYNONYM, $v->getValue()?->_getFormattedValue());
                    break;
                }
            }
        }
        if (isset($this->min) && $this->min->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MIN, $this->min->getValue()?->_getFormattedValue());
        }
        if (isset($this->max) && $this->max->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MAX, $this->max->getValue()?->_getFormattedValue());
        }
        if (isset($this->nameReference) && $this->nameReference->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_NAME_REFERENCE, $this->nameReference->getValue()?->_getFormattedValue());
        }
        if (isset($this->valueBoolean) && $this->valueBoolean->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VALUE_BOOLEAN, $this->valueBoolean->getValue()?->_getFormattedValue());
        }
        if (isset($this->valueInteger) && $this->valueInteger->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VALUE_INTEGER, $this->valueInteger->getValue()?->_getFormattedValue());
        }
        if (isset($this->valueDecimal) && $this->valueDecimal->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VALUE_DECIMAL, $this->valueDecimal->getValue()?->_getFormattedValue());
        }
        if (isset($this->valueBase64Binary) && $this->valueBase64Binary->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VALUE_BASE_64BINARY, $this->valueBase64Binary->getValue()?->_getFormattedValue());
        }
        if (isset($this->valueInstant) && $this->valueInstant->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VALUE_INSTANT, $this->valueInstant->getValue()?->_getFormattedValue());
        }
        if (isset($this->valueString) && $this->valueString->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VALUE_STRING, $this->valueString->getValue()?->_getFormattedValue());
        }
        if (isset($this->valueUri) && $this->valueUri->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VALUE_URI, $this->valueUri->getValue()?->_getFormattedValue());
        }
        if (isset($this->valueDate) && $this->valueDate->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VALUE_DATE, $this->valueDate->getValue()?->_getFormattedValue());
        }
        if (isset($this->valueDateTime) && $this->valueDateTime->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VALUE_DATE_TIME, $this->valueDateTime->getValue()?->_getFormattedValue());
        }
        if (isset($this->valueCode) && $this->valueCode->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VALUE_CODE, $this->valueCode->getValue()?->_getFormattedValue());
        }
        if (isset($this->valueOid) && $this->valueOid->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VALUE_OID, $this->valueOid->getValue()?->_getFormattedValue());
        }
        if (isset($this->valueUuid) && $this->valueUuid->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VALUE_UUID, $this->valueUuid->getValue()?->_getFormattedValue());
        }
        if (isset($this->valueId) && $this->valueId->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VALUE_ID, $this->valueId->getValue()?->_getFormattedValue());
        }
        if (isset($this->exampleBoolean) && $this->exampleBoolean->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_BOOLEAN, $this->exampleBoolean->getValue()?->_getFormattedValue());
        }
        if (isset($this->exampleInteger) && $this->exampleInteger->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_INTEGER, $this->exampleInteger->getValue()?->_getFormattedValue());
        }
        if (isset($this->exampleDecimal) && $this->exampleDecimal->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_DECIMAL, $this->exampleDecimal->getValue()?->_getFormattedValue());
        }
        if (isset($this->exampleBase64Binary) && $this->exampleBase64Binary->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_BASE_64BINARY, $this->exampleBase64Binary->getValue()?->_getFormattedValue());
        }
        if (isset($this->exampleInstant) && $this->exampleInstant->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_INSTANT, $this->exampleInstant->getValue()?->_getFormattedValue());
        }
        if (isset($this->exampleString) && $this->exampleString->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_STRING, $this->exampleString->getValue()?->_getFormattedValue());
        }
        if (isset($this->exampleUri) && $this->exampleUri->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_URI, $this->exampleUri->getValue()?->_getFormattedValue());
        }
        if (isset($this->exampleDate) && $this->exampleDate->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_DATE, $this->exampleDate->getValue()?->_getFormattedValue());
        }
        if (isset($this->exampleDateTime) && $this->exampleDateTime->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_DATE_TIME, $this->exampleDateTime->getValue()?->_getFormattedValue());
        }
        if (isset($this->exampleCode) && $this->exampleCode->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_CODE, $this->exampleCode->getValue()?->_getFormattedValue());
        }
        if (isset($this->exampleOid) && $this->exampleOid->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_OID, $this->exampleOid->getValue()?->_getFormattedValue());
        }
        if (isset($this->exampleUuid) && $this->exampleUuid->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_UUID, $this->exampleUuid->getValue()?->_getFormattedValue());
        }
        if (isset($this->exampleId) && $this->exampleId->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_ID, $this->exampleId->getValue()?->_getFormattedValue());
        }
        if (isset($this->maxLength) && $this->maxLength->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MAX_LENGTH, $this->maxLength->getValue()?->_getFormattedValue());
        }
        if (isset($this->condition)) {
           foreach($this->condition as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_CONDITION, $v->getValue()?->_getFormattedValue());
                    break;
                }
            }
        }
        if (isset($this->mustSupport) && $this->mustSupport->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MUST_SUPPORT, $this->mustSupport->getValue()?->_getFormattedValue());
        }
        if (isset($this->isModifier) && $this->isModifier->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_IS_MODIFIER, $this->isModifier->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->short) && $this->short->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SHORT);
            $this->short->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->formal) && $this->formal->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_FORMAL);
            $this->formal->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->comments) && $this->comments->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_COMMENTS);
            $this->comments->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->requirements) && $this->requirements->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_REQUIREMENTS);
            $this->requirements->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->synonym)) {
            foreach($this->synonym as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_SYNONYM);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->min) && $this->min->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MIN);
            $this->min->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->max) && $this->max->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MAX);
            $this->max->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->type)) {
            foreach ($this->type as $v) {
                $xw->startElement(self::FIELD_TYPE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->nameReference) && $this->nameReference->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_NAME_REFERENCE);
            $this->nameReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueBoolean) && $this->valueBoolean->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VALUE_BOOLEAN);
            $this->valueBoolean->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueInteger) && $this->valueInteger->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VALUE_INTEGER);
            $this->valueInteger->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueDecimal) && $this->valueDecimal->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VALUE_DECIMAL);
            $this->valueDecimal->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueBase64Binary) && $this->valueBase64Binary->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VALUE_BASE_64BINARY);
            $this->valueBase64Binary->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueInstant) && $this->valueInstant->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VALUE_INSTANT);
            $this->valueInstant->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueString) && $this->valueString->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VALUE_STRING);
            $this->valueString->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueUri) && $this->valueUri->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VALUE_URI);
            $this->valueUri->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueDate) && $this->valueDate->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VALUE_DATE);
            $this->valueDate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueDateTime) && $this->valueDateTime->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VALUE_DATE_TIME);
            $this->valueDateTime->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueCode) && $this->valueCode->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VALUE_CODE);
            $this->valueCode->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueOid) && $this->valueOid->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VALUE_OID);
            $this->valueOid->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueUuid) && $this->valueUuid->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VALUE_UUID);
            $this->valueUuid->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueId) && $this->valueId->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VALUE_ID);
            $this->valueId->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueAttachment)) {
            $xw->startElement(self::FIELD_VALUE_ATTACHMENT);
            $this->valueAttachment->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueIdentifier)) {
            $xw->startElement(self::FIELD_VALUE_IDENTIFIER);
            $this->valueIdentifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueCodeableConcept)) {
            $xw->startElement(self::FIELD_VALUE_CODEABLE_CONCEPT);
            $this->valueCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueCoding)) {
            $xw->startElement(self::FIELD_VALUE_CODING);
            $this->valueCoding->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueQuantity)) {
            $xw->startElement(self::FIELD_VALUE_QUANTITY);
            $this->valueQuantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueRange)) {
            $xw->startElement(self::FIELD_VALUE_RANGE);
            $this->valueRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valuePeriod)) {
            $xw->startElement(self::FIELD_VALUE_PERIOD);
            $this->valuePeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueRatio)) {
            $xw->startElement(self::FIELD_VALUE_RATIO);
            $this->valueRatio->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueResource)) {
            $xw->startElement(self::FIELD_VALUE_RESOURCE);
            $this->valueResource->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueSampledData)) {
            $xw->startElement(self::FIELD_VALUE_SAMPLED_DATA);
            $this->valueSampledData->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueHumanName)) {
            $xw->startElement(self::FIELD_VALUE_HUMAN_NAME);
            $this->valueHumanName->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueAddress)) {
            $xw->startElement(self::FIELD_VALUE_ADDRESS);
            $this->valueAddress->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueContact)) {
            $xw->startElement(self::FIELD_VALUE_CONTACT);
            $this->valueContact->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueSchedule)) {
            $xw->startElement(self::FIELD_VALUE_SCHEDULE);
            $this->valueSchedule->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleBoolean) && $this->exampleBoolean->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_EXAMPLE_BOOLEAN);
            $this->exampleBoolean->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleInteger) && $this->exampleInteger->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_EXAMPLE_INTEGER);
            $this->exampleInteger->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleDecimal) && $this->exampleDecimal->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_EXAMPLE_DECIMAL);
            $this->exampleDecimal->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleBase64Binary) && $this->exampleBase64Binary->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_EXAMPLE_BASE_64BINARY);
            $this->exampleBase64Binary->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleInstant) && $this->exampleInstant->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_EXAMPLE_INSTANT);
            $this->exampleInstant->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleString) && $this->exampleString->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_EXAMPLE_STRING);
            $this->exampleString->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleUri) && $this->exampleUri->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_EXAMPLE_URI);
            $this->exampleUri->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleDate) && $this->exampleDate->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_EXAMPLE_DATE);
            $this->exampleDate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleDateTime) && $this->exampleDateTime->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_EXAMPLE_DATE_TIME);
            $this->exampleDateTime->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleCode) && $this->exampleCode->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_EXAMPLE_CODE);
            $this->exampleCode->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleOid) && $this->exampleOid->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_EXAMPLE_OID);
            $this->exampleOid->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleUuid) && $this->exampleUuid->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_EXAMPLE_UUID);
            $this->exampleUuid->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleId) && $this->exampleId->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_EXAMPLE_ID);
            $this->exampleId->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleAttachment)) {
            $xw->startElement(self::FIELD_EXAMPLE_ATTACHMENT);
            $this->exampleAttachment->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleIdentifier)) {
            $xw->startElement(self::FIELD_EXAMPLE_IDENTIFIER);
            $this->exampleIdentifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleCodeableConcept)) {
            $xw->startElement(self::FIELD_EXAMPLE_CODEABLE_CONCEPT);
            $this->exampleCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleCoding)) {
            $xw->startElement(self::FIELD_EXAMPLE_CODING);
            $this->exampleCoding->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleQuantity)) {
            $xw->startElement(self::FIELD_EXAMPLE_QUANTITY);
            $this->exampleQuantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleRange)) {
            $xw->startElement(self::FIELD_EXAMPLE_RANGE);
            $this->exampleRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->examplePeriod)) {
            $xw->startElement(self::FIELD_EXAMPLE_PERIOD);
            $this->examplePeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleRatio)) {
            $xw->startElement(self::FIELD_EXAMPLE_RATIO);
            $this->exampleRatio->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleResource)) {
            $xw->startElement(self::FIELD_EXAMPLE_RESOURCE);
            $this->exampleResource->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleSampledData)) {
            $xw->startElement(self::FIELD_EXAMPLE_SAMPLED_DATA);
            $this->exampleSampledData->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleHumanName)) {
            $xw->startElement(self::FIELD_EXAMPLE_HUMAN_NAME);
            $this->exampleHumanName->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleAddress)) {
            $xw->startElement(self::FIELD_EXAMPLE_ADDRESS);
            $this->exampleAddress->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleContact)) {
            $xw->startElement(self::FIELD_EXAMPLE_CONTACT);
            $this->exampleContact->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleSchedule)) {
            $xw->startElement(self::FIELD_EXAMPLE_SCHEDULE);
            $this->exampleSchedule->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->maxLength) && $this->maxLength->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MAX_LENGTH);
            $this->maxLength->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->condition)) {
            foreach($this->condition as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_CONDITION);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->constraint)) {
            foreach ($this->constraint as $v) {
                $xw->startElement(self::FIELD_CONSTRAINT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->mustSupport) && $this->mustSupport->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MUST_SUPPORT);
            $this->mustSupport->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->isModifier) && $this->isModifier->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_IS_MODIFIER);
            $this->isModifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->binding)) {
            $xw->startElement(self::FIELD_BINDING);
            $this->binding->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->mapping)) {
            foreach ($this->mapping as $v) {
                $xw->startElement(self::FIELD_MAPPING);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRProfileDefinition)) {
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
        if (isset($json[self::FIELD_SHORT]) || isset($json[self::FIELD_SHORT_EXT]) || array_key_exists(self::FIELD_SHORT, $json) || array_key_exists(self::FIELD_SHORT_EXT, $json)) {
            $value = $json[self::FIELD_SHORT] ?? null;
            $ext = (array)($json[self::FIELD_SHORT_EXT] ?? []);
            $type->setShort(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_FORMAL]) || isset($json[self::FIELD_FORMAL_EXT]) || array_key_exists(self::FIELD_FORMAL, $json) || array_key_exists(self::FIELD_FORMAL_EXT, $json)) {
            $value = $json[self::FIELD_FORMAL] ?? null;
            $ext = (array)($json[self::FIELD_FORMAL_EXT] ?? []);
            $type->setFormal(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_COMMENTS]) || isset($json[self::FIELD_COMMENTS_EXT]) || array_key_exists(self::FIELD_COMMENTS, $json) || array_key_exists(self::FIELD_COMMENTS_EXT, $json)) {
            $value = $json[self::FIELD_COMMENTS] ?? null;
            $ext = (array)($json[self::FIELD_COMMENTS_EXT] ?? []);
            $type->setComments(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_REQUIREMENTS]) || isset($json[self::FIELD_REQUIREMENTS_EXT]) || array_key_exists(self::FIELD_REQUIREMENTS, $json) || array_key_exists(self::FIELD_REQUIREMENTS_EXT, $json)) {
            $value = $json[self::FIELD_REQUIREMENTS] ?? null;
            $ext = (array)($json[self::FIELD_REQUIREMENTS_EXT] ?? []);
            $type->setRequirements(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_SYNONYM]) || isset($json[self::FIELD_SYNONYM_EXT]) || array_key_exists(self::FIELD_SYNONYM, $json) || array_key_exists(self::FIELD_SYNONYM_EXT, $json)) {
            $value = $json[self::FIELD_SYNONYM] ?? null;
            $ext = (array)($json[self::FIELD_SYNONYM_EXT] ?? []);
            if (!is_array($value)) {
                $value = [$value];
            }
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addSynonym(FHIRString::jsonUnserialize(
                    json: [FHIRString::FIELD_VALUE => $value[$i] ?? null] + (array)($ext[$i] ?? []),
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_MIN]) || isset($json[self::FIELD_MIN_EXT]) || array_key_exists(self::FIELD_MIN, $json) || array_key_exists(self::FIELD_MIN_EXT, $json)) {
            $value = $json[self::FIELD_MIN] ?? null;
            $ext = (array)($json[self::FIELD_MIN_EXT] ?? []);
            $type->setMin(FHIRInteger::jsonUnserialize(
                json: [FHIRInteger::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_MAX]) || isset($json[self::FIELD_MAX_EXT]) || array_key_exists(self::FIELD_MAX, $json) || array_key_exists(self::FIELD_MAX_EXT, $json)) {
            $value = $json[self::FIELD_MAX] ?? null;
            $ext = (array)($json[self::FIELD_MAX_EXT] ?? []);
            $type->setMax(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_TYPE]) || array_key_exists(self::FIELD_TYPE, $json)) {
            $vs = $json[self::FIELD_TYPE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addType(FHIRProfileType::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_NAME_REFERENCE]) || isset($json[self::FIELD_NAME_REFERENCE_EXT]) || array_key_exists(self::FIELD_NAME_REFERENCE, $json) || array_key_exists(self::FIELD_NAME_REFERENCE_EXT, $json)) {
            $value = $json[self::FIELD_NAME_REFERENCE] ?? null;
            $ext = (array)($json[self::FIELD_NAME_REFERENCE_EXT] ?? []);
            $type->setNameReference(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_BOOLEAN]) || isset($json[self::FIELD_VALUE_BOOLEAN_EXT]) || array_key_exists(self::FIELD_VALUE_BOOLEAN, $json) || array_key_exists(self::FIELD_VALUE_BOOLEAN_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_BOOLEAN] ?? null;
            $ext = (array)($json[self::FIELD_VALUE_BOOLEAN_EXT] ?? []);
            $type->setValueBoolean(FHIRBoolean::jsonUnserialize(
                json: [FHIRBoolean::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_INTEGER]) || isset($json[self::FIELD_VALUE_INTEGER_EXT]) || array_key_exists(self::FIELD_VALUE_INTEGER, $json) || array_key_exists(self::FIELD_VALUE_INTEGER_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_INTEGER] ?? null;
            $ext = (array)($json[self::FIELD_VALUE_INTEGER_EXT] ?? []);
            $type->setValueInteger(FHIRInteger::jsonUnserialize(
                json: [FHIRInteger::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_DECIMAL]) || isset($json[self::FIELD_VALUE_DECIMAL_EXT]) || array_key_exists(self::FIELD_VALUE_DECIMAL, $json) || array_key_exists(self::FIELD_VALUE_DECIMAL_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_DECIMAL] ?? null;
            $ext = (array)($json[self::FIELD_VALUE_DECIMAL_EXT] ?? []);
            $type->setValueDecimal(FHIRDecimal::jsonUnserialize(
                json: [FHIRDecimal::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_BASE_64BINARY]) || isset($json[self::FIELD_VALUE_BASE_64BINARY_EXT]) || array_key_exists(self::FIELD_VALUE_BASE_64BINARY, $json) || array_key_exists(self::FIELD_VALUE_BASE_64BINARY_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_BASE_64BINARY] ?? null;
            $ext = (array)($json[self::FIELD_VALUE_BASE_64BINARY_EXT] ?? []);
            $type->setValueBase64Binary(FHIRBase64Binary::jsonUnserialize(
                json: [FHIRBase64Binary::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_INSTANT]) || isset($json[self::FIELD_VALUE_INSTANT_EXT]) || array_key_exists(self::FIELD_VALUE_INSTANT, $json) || array_key_exists(self::FIELD_VALUE_INSTANT_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_INSTANT] ?? null;
            $ext = (array)($json[self::FIELD_VALUE_INSTANT_EXT] ?? []);
            $type->setValueInstant(FHIRInstant::jsonUnserialize(
                json: [FHIRInstant::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_STRING]) || isset($json[self::FIELD_VALUE_STRING_EXT]) || array_key_exists(self::FIELD_VALUE_STRING, $json) || array_key_exists(self::FIELD_VALUE_STRING_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_STRING] ?? null;
            $ext = (array)($json[self::FIELD_VALUE_STRING_EXT] ?? []);
            $type->setValueString(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_URI]) || isset($json[self::FIELD_VALUE_URI_EXT]) || array_key_exists(self::FIELD_VALUE_URI, $json) || array_key_exists(self::FIELD_VALUE_URI_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_URI] ?? null;
            $ext = (array)($json[self::FIELD_VALUE_URI_EXT] ?? []);
            $type->setValueUri(FHIRUri::jsonUnserialize(
                json: [FHIRUri::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_DATE]) || isset($json[self::FIELD_VALUE_DATE_EXT]) || array_key_exists(self::FIELD_VALUE_DATE, $json) || array_key_exists(self::FIELD_VALUE_DATE_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_DATE] ?? null;
            $ext = (array)($json[self::FIELD_VALUE_DATE_EXT] ?? []);
            $type->setValueDate(FHIRDate::jsonUnserialize(
                json: [FHIRDate::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_DATE_TIME]) || isset($json[self::FIELD_VALUE_DATE_TIME_EXT]) || array_key_exists(self::FIELD_VALUE_DATE_TIME, $json) || array_key_exists(self::FIELD_VALUE_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_DATE_TIME] ?? null;
            $ext = (array)($json[self::FIELD_VALUE_DATE_TIME_EXT] ?? []);
            $type->setValueDateTime(FHIRDateTime::jsonUnserialize(
                json: [FHIRDateTime::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_CODE]) || isset($json[self::FIELD_VALUE_CODE_EXT]) || array_key_exists(self::FIELD_VALUE_CODE, $json) || array_key_exists(self::FIELD_VALUE_CODE_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_CODE] ?? null;
            $ext = (array)($json[self::FIELD_VALUE_CODE_EXT] ?? []);
            $type->setValueCode(FHIRCode::jsonUnserialize(
                json: [FHIRCode::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_OID]) || isset($json[self::FIELD_VALUE_OID_EXT]) || array_key_exists(self::FIELD_VALUE_OID, $json) || array_key_exists(self::FIELD_VALUE_OID_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_OID] ?? null;
            $ext = (array)($json[self::FIELD_VALUE_OID_EXT] ?? []);
            $type->setValueOid(FHIROid::jsonUnserialize(
                json: [FHIROid::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_UUID]) || isset($json[self::FIELD_VALUE_UUID_EXT]) || array_key_exists(self::FIELD_VALUE_UUID, $json) || array_key_exists(self::FIELD_VALUE_UUID_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_UUID] ?? null;
            $ext = (array)($json[self::FIELD_VALUE_UUID_EXT] ?? []);
            $type->setValueUuid(FHIRUuid::jsonUnserialize(
                json: [FHIRUuid::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_ID]) || isset($json[self::FIELD_VALUE_ID_EXT]) || array_key_exists(self::FIELD_VALUE_ID, $json) || array_key_exists(self::FIELD_VALUE_ID_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_ID] ?? null;
            $ext = (array)($json[self::FIELD_VALUE_ID_EXT] ?? []);
            $type->setValueId(FHIRId::jsonUnserialize(
                json: [FHIRId::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_ATTACHMENT]) || array_key_exists(self::FIELD_VALUE_ATTACHMENT, $json)) {
            $type->setValueAttachment(FHIRAttachment::jsonUnserialize(
                json: $json[self::FIELD_VALUE_ATTACHMENT],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_IDENTIFIER]) || array_key_exists(self::FIELD_VALUE_IDENTIFIER, $json)) {
            $type->setValueIdentifier(FHIRIdentifier::jsonUnserialize(
                json: $json[self::FIELD_VALUE_IDENTIFIER],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_VALUE_CODEABLE_CONCEPT, $json)) {
            $type->setValueCodeableConcept(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_VALUE_CODEABLE_CONCEPT],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_CODING]) || array_key_exists(self::FIELD_VALUE_CODING, $json)) {
            $type->setValueCoding(FHIRCoding::jsonUnserialize(
                json: $json[self::FIELD_VALUE_CODING],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_QUANTITY]) || array_key_exists(self::FIELD_VALUE_QUANTITY, $json)) {
            $type->setValueQuantity(FHIRQuantity::jsonUnserialize(
                json: $json[self::FIELD_VALUE_QUANTITY],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_RANGE]) || array_key_exists(self::FIELD_VALUE_RANGE, $json)) {
            $type->setValueRange(FHIRRange::jsonUnserialize(
                json: $json[self::FIELD_VALUE_RANGE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_PERIOD]) || array_key_exists(self::FIELD_VALUE_PERIOD, $json)) {
            $type->setValuePeriod(FHIRPeriod::jsonUnserialize(
                json: $json[self::FIELD_VALUE_PERIOD],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_RATIO]) || array_key_exists(self::FIELD_VALUE_RATIO, $json)) {
            $type->setValueRatio(FHIRRatio::jsonUnserialize(
                json: $json[self::FIELD_VALUE_RATIO],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_RESOURCE]) || array_key_exists(self::FIELD_VALUE_RESOURCE, $json)) {
            $type->setValueResource(FHIRResourceReference::jsonUnserialize(
                json: $json[self::FIELD_VALUE_RESOURCE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_SAMPLED_DATA]) || array_key_exists(self::FIELD_VALUE_SAMPLED_DATA, $json)) {
            $type->setValueSampledData(FHIRSampledData::jsonUnserialize(
                json: $json[self::FIELD_VALUE_SAMPLED_DATA],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_HUMAN_NAME]) || array_key_exists(self::FIELD_VALUE_HUMAN_NAME, $json)) {
            $type->setValueHumanName(FHIRHumanName::jsonUnserialize(
                json: $json[self::FIELD_VALUE_HUMAN_NAME],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_ADDRESS]) || array_key_exists(self::FIELD_VALUE_ADDRESS, $json)) {
            $type->setValueAddress(FHIRAddress::jsonUnserialize(
                json: $json[self::FIELD_VALUE_ADDRESS],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_CONTACT]) || array_key_exists(self::FIELD_VALUE_CONTACT, $json)) {
            $type->setValueContact(FHIRContact::jsonUnserialize(
                json: $json[self::FIELD_VALUE_CONTACT],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_SCHEDULE]) || array_key_exists(self::FIELD_VALUE_SCHEDULE, $json)) {
            $type->setValueSchedule(FHIRSchedule::jsonUnserialize(
                json: $json[self::FIELD_VALUE_SCHEDULE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_BOOLEAN]) || isset($json[self::FIELD_EXAMPLE_BOOLEAN_EXT]) || array_key_exists(self::FIELD_EXAMPLE_BOOLEAN, $json) || array_key_exists(self::FIELD_EXAMPLE_BOOLEAN_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_BOOLEAN] ?? null;
            $ext = (array)($json[self::FIELD_EXAMPLE_BOOLEAN_EXT] ?? []);
            $type->setExampleBoolean(FHIRBoolean::jsonUnserialize(
                json: [FHIRBoolean::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_INTEGER]) || isset($json[self::FIELD_EXAMPLE_INTEGER_EXT]) || array_key_exists(self::FIELD_EXAMPLE_INTEGER, $json) || array_key_exists(self::FIELD_EXAMPLE_INTEGER_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_INTEGER] ?? null;
            $ext = (array)($json[self::FIELD_EXAMPLE_INTEGER_EXT] ?? []);
            $type->setExampleInteger(FHIRInteger::jsonUnserialize(
                json: [FHIRInteger::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_DECIMAL]) || isset($json[self::FIELD_EXAMPLE_DECIMAL_EXT]) || array_key_exists(self::FIELD_EXAMPLE_DECIMAL, $json) || array_key_exists(self::FIELD_EXAMPLE_DECIMAL_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_DECIMAL] ?? null;
            $ext = (array)($json[self::FIELD_EXAMPLE_DECIMAL_EXT] ?? []);
            $type->setExampleDecimal(FHIRDecimal::jsonUnserialize(
                json: [FHIRDecimal::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_BASE_64BINARY]) || isset($json[self::FIELD_EXAMPLE_BASE_64BINARY_EXT]) || array_key_exists(self::FIELD_EXAMPLE_BASE_64BINARY, $json) || array_key_exists(self::FIELD_EXAMPLE_BASE_64BINARY_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_BASE_64BINARY] ?? null;
            $ext = (array)($json[self::FIELD_EXAMPLE_BASE_64BINARY_EXT] ?? []);
            $type->setExampleBase64Binary(FHIRBase64Binary::jsonUnserialize(
                json: [FHIRBase64Binary::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_INSTANT]) || isset($json[self::FIELD_EXAMPLE_INSTANT_EXT]) || array_key_exists(self::FIELD_EXAMPLE_INSTANT, $json) || array_key_exists(self::FIELD_EXAMPLE_INSTANT_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_INSTANT] ?? null;
            $ext = (array)($json[self::FIELD_EXAMPLE_INSTANT_EXT] ?? []);
            $type->setExampleInstant(FHIRInstant::jsonUnserialize(
                json: [FHIRInstant::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_STRING]) || isset($json[self::FIELD_EXAMPLE_STRING_EXT]) || array_key_exists(self::FIELD_EXAMPLE_STRING, $json) || array_key_exists(self::FIELD_EXAMPLE_STRING_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_STRING] ?? null;
            $ext = (array)($json[self::FIELD_EXAMPLE_STRING_EXT] ?? []);
            $type->setExampleString(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_URI]) || isset($json[self::FIELD_EXAMPLE_URI_EXT]) || array_key_exists(self::FIELD_EXAMPLE_URI, $json) || array_key_exists(self::FIELD_EXAMPLE_URI_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_URI] ?? null;
            $ext = (array)($json[self::FIELD_EXAMPLE_URI_EXT] ?? []);
            $type->setExampleUri(FHIRUri::jsonUnserialize(
                json: [FHIRUri::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_DATE]) || isset($json[self::FIELD_EXAMPLE_DATE_EXT]) || array_key_exists(self::FIELD_EXAMPLE_DATE, $json) || array_key_exists(self::FIELD_EXAMPLE_DATE_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_DATE] ?? null;
            $ext = (array)($json[self::FIELD_EXAMPLE_DATE_EXT] ?? []);
            $type->setExampleDate(FHIRDate::jsonUnserialize(
                json: [FHIRDate::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_DATE_TIME]) || isset($json[self::FIELD_EXAMPLE_DATE_TIME_EXT]) || array_key_exists(self::FIELD_EXAMPLE_DATE_TIME, $json) || array_key_exists(self::FIELD_EXAMPLE_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_DATE_TIME] ?? null;
            $ext = (array)($json[self::FIELD_EXAMPLE_DATE_TIME_EXT] ?? []);
            $type->setExampleDateTime(FHIRDateTime::jsonUnserialize(
                json: [FHIRDateTime::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_CODE]) || isset($json[self::FIELD_EXAMPLE_CODE_EXT]) || array_key_exists(self::FIELD_EXAMPLE_CODE, $json) || array_key_exists(self::FIELD_EXAMPLE_CODE_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_CODE] ?? null;
            $ext = (array)($json[self::FIELD_EXAMPLE_CODE_EXT] ?? []);
            $type->setExampleCode(FHIRCode::jsonUnserialize(
                json: [FHIRCode::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_OID]) || isset($json[self::FIELD_EXAMPLE_OID_EXT]) || array_key_exists(self::FIELD_EXAMPLE_OID, $json) || array_key_exists(self::FIELD_EXAMPLE_OID_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_OID] ?? null;
            $ext = (array)($json[self::FIELD_EXAMPLE_OID_EXT] ?? []);
            $type->setExampleOid(FHIROid::jsonUnserialize(
                json: [FHIROid::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_UUID]) || isset($json[self::FIELD_EXAMPLE_UUID_EXT]) || array_key_exists(self::FIELD_EXAMPLE_UUID, $json) || array_key_exists(self::FIELD_EXAMPLE_UUID_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_UUID] ?? null;
            $ext = (array)($json[self::FIELD_EXAMPLE_UUID_EXT] ?? []);
            $type->setExampleUuid(FHIRUuid::jsonUnserialize(
                json: [FHIRUuid::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_ID]) || isset($json[self::FIELD_EXAMPLE_ID_EXT]) || array_key_exists(self::FIELD_EXAMPLE_ID, $json) || array_key_exists(self::FIELD_EXAMPLE_ID_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_ID] ?? null;
            $ext = (array)($json[self::FIELD_EXAMPLE_ID_EXT] ?? []);
            $type->setExampleId(FHIRId::jsonUnserialize(
                json: [FHIRId::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_ATTACHMENT]) || array_key_exists(self::FIELD_EXAMPLE_ATTACHMENT, $json)) {
            $type->setExampleAttachment(FHIRAttachment::jsonUnserialize(
                json: $json[self::FIELD_EXAMPLE_ATTACHMENT],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_IDENTIFIER]) || array_key_exists(self::FIELD_EXAMPLE_IDENTIFIER, $json)) {
            $type->setExampleIdentifier(FHIRIdentifier::jsonUnserialize(
                json: $json[self::FIELD_EXAMPLE_IDENTIFIER],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_EXAMPLE_CODEABLE_CONCEPT, $json)) {
            $type->setExampleCodeableConcept(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_EXAMPLE_CODEABLE_CONCEPT],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_CODING]) || array_key_exists(self::FIELD_EXAMPLE_CODING, $json)) {
            $type->setExampleCoding(FHIRCoding::jsonUnserialize(
                json: $json[self::FIELD_EXAMPLE_CODING],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_QUANTITY]) || array_key_exists(self::FIELD_EXAMPLE_QUANTITY, $json)) {
            $type->setExampleQuantity(FHIRQuantity::jsonUnserialize(
                json: $json[self::FIELD_EXAMPLE_QUANTITY],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_RANGE]) || array_key_exists(self::FIELD_EXAMPLE_RANGE, $json)) {
            $type->setExampleRange(FHIRRange::jsonUnserialize(
                json: $json[self::FIELD_EXAMPLE_RANGE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_PERIOD]) || array_key_exists(self::FIELD_EXAMPLE_PERIOD, $json)) {
            $type->setExamplePeriod(FHIRPeriod::jsonUnserialize(
                json: $json[self::FIELD_EXAMPLE_PERIOD],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_RATIO]) || array_key_exists(self::FIELD_EXAMPLE_RATIO, $json)) {
            $type->setExampleRatio(FHIRRatio::jsonUnserialize(
                json: $json[self::FIELD_EXAMPLE_RATIO],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_RESOURCE]) || array_key_exists(self::FIELD_EXAMPLE_RESOURCE, $json)) {
            $type->setExampleResource(FHIRResourceReference::jsonUnserialize(
                json: $json[self::FIELD_EXAMPLE_RESOURCE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_SAMPLED_DATA]) || array_key_exists(self::FIELD_EXAMPLE_SAMPLED_DATA, $json)) {
            $type->setExampleSampledData(FHIRSampledData::jsonUnserialize(
                json: $json[self::FIELD_EXAMPLE_SAMPLED_DATA],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_HUMAN_NAME]) || array_key_exists(self::FIELD_EXAMPLE_HUMAN_NAME, $json)) {
            $type->setExampleHumanName(FHIRHumanName::jsonUnserialize(
                json: $json[self::FIELD_EXAMPLE_HUMAN_NAME],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_ADDRESS]) || array_key_exists(self::FIELD_EXAMPLE_ADDRESS, $json)) {
            $type->setExampleAddress(FHIRAddress::jsonUnserialize(
                json: $json[self::FIELD_EXAMPLE_ADDRESS],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_CONTACT]) || array_key_exists(self::FIELD_EXAMPLE_CONTACT, $json)) {
            $type->setExampleContact(FHIRContact::jsonUnserialize(
                json: $json[self::FIELD_EXAMPLE_CONTACT],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_SCHEDULE]) || array_key_exists(self::FIELD_EXAMPLE_SCHEDULE, $json)) {
            $type->setExampleSchedule(FHIRSchedule::jsonUnserialize(
                json: $json[self::FIELD_EXAMPLE_SCHEDULE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_MAX_LENGTH]) || isset($json[self::FIELD_MAX_LENGTH_EXT]) || array_key_exists(self::FIELD_MAX_LENGTH, $json) || array_key_exists(self::FIELD_MAX_LENGTH_EXT, $json)) {
            $value = $json[self::FIELD_MAX_LENGTH] ?? null;
            $ext = (array)($json[self::FIELD_MAX_LENGTH_EXT] ?? []);
            $type->setMaxLength(FHIRInteger::jsonUnserialize(
                json: [FHIRInteger::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_CONDITION]) || isset($json[self::FIELD_CONDITION_EXT]) || array_key_exists(self::FIELD_CONDITION, $json) || array_key_exists(self::FIELD_CONDITION_EXT, $json)) {
            $value = $json[self::FIELD_CONDITION] ?? null;
            $ext = (array)($json[self::FIELD_CONDITION_EXT] ?? []);
            if (!is_array($value)) {
                $value = [$value];
            }
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addCondition(FHIRId::jsonUnserialize(
                    json: [FHIRId::FIELD_VALUE => $value[$i] ?? null] + (array)($ext[$i] ?? []),
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_CONSTRAINT]) || array_key_exists(self::FIELD_CONSTRAINT, $json)) {
            $vs = $json[self::FIELD_CONSTRAINT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addConstraint(FHIRProfileConstraint::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_MUST_SUPPORT]) || isset($json[self::FIELD_MUST_SUPPORT_EXT]) || array_key_exists(self::FIELD_MUST_SUPPORT, $json) || array_key_exists(self::FIELD_MUST_SUPPORT_EXT, $json)) {
            $value = $json[self::FIELD_MUST_SUPPORT] ?? null;
            $ext = (array)($json[self::FIELD_MUST_SUPPORT_EXT] ?? []);
            $type->setMustSupport(FHIRBoolean::jsonUnserialize(
                json: [FHIRBoolean::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_IS_MODIFIER]) || isset($json[self::FIELD_IS_MODIFIER_EXT]) || array_key_exists(self::FIELD_IS_MODIFIER, $json) || array_key_exists(self::FIELD_IS_MODIFIER_EXT, $json)) {
            $value = $json[self::FIELD_IS_MODIFIER] ?? null;
            $ext = (array)($json[self::FIELD_IS_MODIFIER_EXT] ?? []);
            $type->setIsModifier(FHIRBoolean::jsonUnserialize(
                json: [FHIRBoolean::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_BINDING]) || array_key_exists(self::FIELD_BINDING, $json)) {
            $type->setBinding(FHIRProfileBinding::jsonUnserialize(
                json: $json[self::FIELD_BINDING],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_MAPPING]) || array_key_exists(self::FIELD_MAPPING, $json)) {
            $vs = $json[self::FIELD_MAPPING];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addMapping(FHIRProfileMapping1::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
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
        if (isset($this->short)) {
            if (null !== ($val = $this->short->getValue())) {
                $out->short = $val;
            }
            $ext = $this->short->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_short = $ext;
            }
        }
        if (isset($this->formal)) {
            if (null !== ($val = $this->formal->getValue())) {
                $out->formal = $val;
            }
            $ext = $this->formal->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_formal = $ext;
            }
        }
        if (isset($this->comments)) {
            if (null !== ($val = $this->comments->getValue())) {
                $out->comments = $val;
            }
            $ext = $this->comments->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_comments = $ext;
            }
        }
        if (isset($this->requirements)) {
            if (null !== ($val = $this->requirements->getValue())) {
                $out->requirements = $val;
            }
            $ext = $this->requirements->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_requirements = $ext;
            }
        }
        if (isset($this->synonym) && [] !== $this->synonym) {
            $vals = [];
            $exts = [];
            foreach ($this->synonym as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->synonym = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_synonym = $exts;
            }
        }
        if (isset($this->min)) {
            if (null !== ($val = $this->min->getValue())) {
                $out->min = $val;
            }
            $ext = $this->min->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_min = $ext;
            }
        }
        if (isset($this->max)) {
            if (null !== ($val = $this->max->getValue())) {
                $out->max = $val;
            }
            $ext = $this->max->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_max = $ext;
            }
        }
        if (isset($this->type) && [] !== $this->type) {
            $out->type = $this->type;
        }
        if (isset($this->nameReference)) {
            if (null !== ($val = $this->nameReference->getValue())) {
                $out->nameReference = $val;
            }
            $ext = $this->nameReference->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_nameReference = $ext;
            }
        }
        if (isset($this->valueBoolean)) {
            if (null !== ($val = $this->valueBoolean->getValue())) {
                $out->valueBoolean = $val;
            }
            $ext = $this->valueBoolean->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_valueBoolean = $ext;
            }
        }
        if (isset($this->valueInteger)) {
            if (null !== ($val = $this->valueInteger->getValue())) {
                $out->valueInteger = $val;
            }
            $ext = $this->valueInteger->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_valueInteger = $ext;
            }
        }
        if (isset($this->valueDecimal)) {
            if (null !== ($val = $this->valueDecimal->getValue())) {
                $out->valueDecimal = $val;
            }
            $ext = $this->valueDecimal->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_valueDecimal = $ext;
            }
        }
        if (isset($this->valueBase64Binary)) {
            if (null !== ($val = $this->valueBase64Binary->getValue())) {
                $out->valueBase64Binary = $val;
            }
            $ext = $this->valueBase64Binary->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_valueBase64Binary = $ext;
            }
        }
        if (isset($this->valueInstant)) {
            if (null !== ($val = $this->valueInstant->getValue())) {
                $out->valueInstant = $val;
            }
            $ext = $this->valueInstant->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_valueInstant = $ext;
            }
        }
        if (isset($this->valueString)) {
            if (null !== ($val = $this->valueString->getValue())) {
                $out->valueString = $val;
            }
            $ext = $this->valueString->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_valueString = $ext;
            }
        }
        if (isset($this->valueUri)) {
            if (null !== ($val = $this->valueUri->getValue())) {
                $out->valueUri = $val;
            }
            $ext = $this->valueUri->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_valueUri = $ext;
            }
        }
        if (isset($this->valueDate)) {
            if (null !== ($val = $this->valueDate->getValue())) {
                $out->valueDate = $val;
            }
            $ext = $this->valueDate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_valueDate = $ext;
            }
        }
        if (isset($this->valueDateTime)) {
            if (null !== ($val = $this->valueDateTime->getValue())) {
                $out->valueDateTime = $val;
            }
            $ext = $this->valueDateTime->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_valueDateTime = $ext;
            }
        }
        if (isset($this->valueCode)) {
            if (null !== ($val = $this->valueCode->getValue())) {
                $out->valueCode = $val;
            }
            $ext = $this->valueCode->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_valueCode = $ext;
            }
        }
        if (isset($this->valueOid)) {
            if (null !== ($val = $this->valueOid->getValue())) {
                $out->valueOid = $val;
            }
            $ext = $this->valueOid->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_valueOid = $ext;
            }
        }
        if (isset($this->valueUuid)) {
            if (null !== ($val = $this->valueUuid->getValue())) {
                $out->valueUuid = $val;
            }
            $ext = $this->valueUuid->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_valueUuid = $ext;
            }
        }
        if (isset($this->valueId)) {
            if (null !== ($val = $this->valueId->getValue())) {
                $out->valueId = $val;
            }
            $ext = $this->valueId->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_valueId = $ext;
            }
        }
        if (isset($this->valueAttachment)) {
            $out->valueAttachment = $this->valueAttachment;
        }
        if (isset($this->valueIdentifier)) {
            $out->valueIdentifier = $this->valueIdentifier;
        }
        if (isset($this->valueCodeableConcept)) {
            $out->valueCodeableConcept = $this->valueCodeableConcept;
        }
        if (isset($this->valueCoding)) {
            $out->valueCoding = $this->valueCoding;
        }
        if (isset($this->valueQuantity)) {
            $out->valueQuantity = $this->valueQuantity;
        }
        if (isset($this->valueRange)) {
            $out->valueRange = $this->valueRange;
        }
        if (isset($this->valuePeriod)) {
            $out->valuePeriod = $this->valuePeriod;
        }
        if (isset($this->valueRatio)) {
            $out->valueRatio = $this->valueRatio;
        }
        if (isset($this->valueResource)) {
            $out->valueResource = $this->valueResource;
        }
        if (isset($this->valueSampledData)) {
            $out->valueSampledData = $this->valueSampledData;
        }
        if (isset($this->valueHumanName)) {
            $out->valueHumanName = $this->valueHumanName;
        }
        if (isset($this->valueAddress)) {
            $out->valueAddress = $this->valueAddress;
        }
        if (isset($this->valueContact)) {
            $out->valueContact = $this->valueContact;
        }
        if (isset($this->valueSchedule)) {
            $out->valueSchedule = $this->valueSchedule;
        }
        if (isset($this->exampleBoolean)) {
            if (null !== ($val = $this->exampleBoolean->getValue())) {
                $out->exampleBoolean = $val;
            }
            $ext = $this->exampleBoolean->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_exampleBoolean = $ext;
            }
        }
        if (isset($this->exampleInteger)) {
            if (null !== ($val = $this->exampleInteger->getValue())) {
                $out->exampleInteger = $val;
            }
            $ext = $this->exampleInteger->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_exampleInteger = $ext;
            }
        }
        if (isset($this->exampleDecimal)) {
            if (null !== ($val = $this->exampleDecimal->getValue())) {
                $out->exampleDecimal = $val;
            }
            $ext = $this->exampleDecimal->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_exampleDecimal = $ext;
            }
        }
        if (isset($this->exampleBase64Binary)) {
            if (null !== ($val = $this->exampleBase64Binary->getValue())) {
                $out->exampleBase64Binary = $val;
            }
            $ext = $this->exampleBase64Binary->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_exampleBase64Binary = $ext;
            }
        }
        if (isset($this->exampleInstant)) {
            if (null !== ($val = $this->exampleInstant->getValue())) {
                $out->exampleInstant = $val;
            }
            $ext = $this->exampleInstant->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_exampleInstant = $ext;
            }
        }
        if (isset($this->exampleString)) {
            if (null !== ($val = $this->exampleString->getValue())) {
                $out->exampleString = $val;
            }
            $ext = $this->exampleString->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_exampleString = $ext;
            }
        }
        if (isset($this->exampleUri)) {
            if (null !== ($val = $this->exampleUri->getValue())) {
                $out->exampleUri = $val;
            }
            $ext = $this->exampleUri->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_exampleUri = $ext;
            }
        }
        if (isset($this->exampleDate)) {
            if (null !== ($val = $this->exampleDate->getValue())) {
                $out->exampleDate = $val;
            }
            $ext = $this->exampleDate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_exampleDate = $ext;
            }
        }
        if (isset($this->exampleDateTime)) {
            if (null !== ($val = $this->exampleDateTime->getValue())) {
                $out->exampleDateTime = $val;
            }
            $ext = $this->exampleDateTime->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_exampleDateTime = $ext;
            }
        }
        if (isset($this->exampleCode)) {
            if (null !== ($val = $this->exampleCode->getValue())) {
                $out->exampleCode = $val;
            }
            $ext = $this->exampleCode->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_exampleCode = $ext;
            }
        }
        if (isset($this->exampleOid)) {
            if (null !== ($val = $this->exampleOid->getValue())) {
                $out->exampleOid = $val;
            }
            $ext = $this->exampleOid->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_exampleOid = $ext;
            }
        }
        if (isset($this->exampleUuid)) {
            if (null !== ($val = $this->exampleUuid->getValue())) {
                $out->exampleUuid = $val;
            }
            $ext = $this->exampleUuid->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_exampleUuid = $ext;
            }
        }
        if (isset($this->exampleId)) {
            if (null !== ($val = $this->exampleId->getValue())) {
                $out->exampleId = $val;
            }
            $ext = $this->exampleId->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_exampleId = $ext;
            }
        }
        if (isset($this->exampleAttachment)) {
            $out->exampleAttachment = $this->exampleAttachment;
        }
        if (isset($this->exampleIdentifier)) {
            $out->exampleIdentifier = $this->exampleIdentifier;
        }
        if (isset($this->exampleCodeableConcept)) {
            $out->exampleCodeableConcept = $this->exampleCodeableConcept;
        }
        if (isset($this->exampleCoding)) {
            $out->exampleCoding = $this->exampleCoding;
        }
        if (isset($this->exampleQuantity)) {
            $out->exampleQuantity = $this->exampleQuantity;
        }
        if (isset($this->exampleRange)) {
            $out->exampleRange = $this->exampleRange;
        }
        if (isset($this->examplePeriod)) {
            $out->examplePeriod = $this->examplePeriod;
        }
        if (isset($this->exampleRatio)) {
            $out->exampleRatio = $this->exampleRatio;
        }
        if (isset($this->exampleResource)) {
            $out->exampleResource = $this->exampleResource;
        }
        if (isset($this->exampleSampledData)) {
            $out->exampleSampledData = $this->exampleSampledData;
        }
        if (isset($this->exampleHumanName)) {
            $out->exampleHumanName = $this->exampleHumanName;
        }
        if (isset($this->exampleAddress)) {
            $out->exampleAddress = $this->exampleAddress;
        }
        if (isset($this->exampleContact)) {
            $out->exampleContact = $this->exampleContact;
        }
        if (isset($this->exampleSchedule)) {
            $out->exampleSchedule = $this->exampleSchedule;
        }
        if (isset($this->maxLength)) {
            if (null !== ($val = $this->maxLength->getValue())) {
                $out->maxLength = $val;
            }
            $ext = $this->maxLength->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_maxLength = $ext;
            }
        }
        if (isset($this->condition) && [] !== $this->condition) {
            $vals = [];
            $exts = [];
            foreach ($this->condition as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->condition = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_condition = $exts;
            }
        }
        if (isset($this->constraint) && [] !== $this->constraint) {
            $out->constraint = $this->constraint;
        }
        if (isset($this->mustSupport)) {
            if (null !== ($val = $this->mustSupport->getValue())) {
                $out->mustSupport = $val;
            }
            $ext = $this->mustSupport->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_mustSupport = $ext;
            }
        }
        if (isset($this->isModifier)) {
            if (null !== ($val = $this->isModifier->getValue())) {
                $out->isModifier = $val;
            }
            $ext = $this->isModifier->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_isModifier = $ext;
            }
        }
        if (isset($this->binding)) {
            $out->binding = $this->binding;
        }
        if (isset($this->mapping) && [] !== $this->mapping) {
            $out->mapping = $this->mapping;
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