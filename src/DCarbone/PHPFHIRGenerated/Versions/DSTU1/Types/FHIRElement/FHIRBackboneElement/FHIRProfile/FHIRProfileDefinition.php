<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 02:55+0000
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
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
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

    /* class_default.php:48 */
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
    public const FIELD_VALUE_IDENTIFIER_EXT = '_valueIdentifier';
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
    public const FIELD_VALUE_CONTACT_EXT = '_valueContact';
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
    public const FIELD_EXAMPLE_IDENTIFIER_EXT = '_exampleIdentifier';
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
    public const FIELD_EXAMPLE_CONTACT_EXT = '_exampleContact';
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

    /* class_default.php:67 */
    private static array $_validationRules = [
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

    /* class_default.php:92 */
    private array $_valueXMLLocations = [
        self::FIELD_SHORT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FORMAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_COMMENTS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_REQUIREMENTS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MIN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MAX => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_NAME_REFERENCE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_BOOLEAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_INTEGER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_DECIMAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_BASE_64BINARY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_INSTANT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_URI => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_CODE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_OID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_UUID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_ID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_IDENTIFIER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_CONTACT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXAMPLE_BOOLEAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXAMPLE_INTEGER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXAMPLE_DECIMAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXAMPLE_BASE_64BINARY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXAMPLE_INSTANT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXAMPLE_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXAMPLE_URI => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXAMPLE_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXAMPLE_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXAMPLE_CODE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXAMPLE_OID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXAMPLE_UUID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXAMPLE_ID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXAMPLE_IDENTIFIER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXAMPLE_CONTACT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MAX_LENGTH => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MUST_SUPPORT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_IS_MODIFIER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:108 */
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

    /* constructor.php:63 */
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier $valueIdentifier
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact $valueContact
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier $exampleIdentifier
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact $exampleContact
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
                                null|FHIRString|FHIRIdentifier $valueIdentifier = null,
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
                                null|FHIRString|FHIRContact $valueContact = null,
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
                                null|FHIRString|FHIRIdentifier $exampleIdentifier = null,
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
                                null|FHIRString|FHIRContact $exampleContact = null,
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

    /* class_default.php:137 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:163 */
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setShort(null|string|FHIRStringPrimitive|FHIRString $short,
                             ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $short) {
            unset($this->short);
            return $this;
        }
        if (!($short instanceof FHIRString)) {
            $short = new FHIRString(value: $short);
        }
        $this->short = $short;
        if ($this->_valueXMLLocations[self::FIELD_SHORT] !== $valueXMLLocation) {
            $this->_setShortValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the short element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getShortValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_SHORT];
    }

    /**
     * Set the location the "value" field of the short element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setShortValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_SHORT] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setFormal(null|string|FHIRStringPrimitive|FHIRString $formal,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $formal) {
            unset($this->formal);
            return $this;
        }
        if (!($formal instanceof FHIRString)) {
            $formal = new FHIRString(value: $formal);
        }
        $this->formal = $formal;
        if ($this->_valueXMLLocations[self::FIELD_FORMAL] !== $valueXMLLocation) {
            $this->_setFormalValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the formal element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getFormalValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_FORMAL];
    }

    /**
     * Set the location the "value" field of the formal element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setFormalValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_FORMAL] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setComments(null|string|FHIRStringPrimitive|FHIRString $comments,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $comments) {
            unset($this->comments);
            return $this;
        }
        if (!($comments instanceof FHIRString)) {
            $comments = new FHIRString(value: $comments);
        }
        $this->comments = $comments;
        if ($this->_valueXMLLocations[self::FIELD_COMMENTS] !== $valueXMLLocation) {
            $this->_setCommentsValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the comments element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getCommentsValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_COMMENTS];
    }

    /**
     * Set the location the "value" field of the comments element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setCommentsValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_COMMENTS] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setRequirements(null|string|FHIRStringPrimitive|FHIRString $requirements,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $requirements) {
            unset($this->requirements);
            return $this;
        }
        if (!($requirements instanceof FHIRString)) {
            $requirements = new FHIRString(value: $requirements);
        }
        $this->requirements = $requirements;
        if ($this->_valueXMLLocations[self::FIELD_REQUIREMENTS] !== $valueXMLLocation) {
            $this->_setRequirementsValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the requirements element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getRequirementsValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_REQUIREMENTS];
    }

    /**
     * Set the location the "value" field of the requirements element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setRequirementsValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_REQUIREMENTS] = $valueXMLLocation;
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
        if (!isset($this->synonym)) {
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
        if ([] === $synonym) {
            unset($this->synonym);
            return $this;
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setMin(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $min,
                           ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $min) {
            unset($this->min);
            return $this;
        }
        if (!($min instanceof FHIRInteger)) {
            $min = new FHIRInteger(value: $min);
        }
        $this->min = $min;
        if ($this->_valueXMLLocations[self::FIELD_MIN] !== $valueXMLLocation) {
            $this->_setMinValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the min element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getMinValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_MIN];
    }

    /**
     * Set the location the "value" field of the min element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setMinValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_MIN] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setMax(null|string|FHIRStringPrimitive|FHIRString $max,
                           ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $max) {
            unset($this->max);
            return $this;
        }
        if (!($max instanceof FHIRString)) {
            $max = new FHIRString(value: $max);
        }
        $this->max = $max;
        if ($this->_valueXMLLocations[self::FIELD_MAX] !== $valueXMLLocation) {
            $this->_setMaxValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the max element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getMaxValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_MAX];
    }

    /**
     * Set the location the "value" field of the max element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setMaxValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_MAX] = $valueXMLLocation;
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
        if (!isset($this->type)) {
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
        if ([] === $type) {
            unset($this->type);
            return $this;
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setNameReference(null|string|FHIRStringPrimitive|FHIRString $nameReference,
                                     ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $nameReference) {
            unset($this->nameReference);
            return $this;
        }
        if (!($nameReference instanceof FHIRString)) {
            $nameReference = new FHIRString(value: $nameReference);
        }
        $this->nameReference = $nameReference;
        if ($this->_valueXMLLocations[self::FIELD_NAME_REFERENCE] !== $valueXMLLocation) {
            $this->_setNameReferenceValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the nameReference element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getNameReferenceValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_NAME_REFERENCE];
    }

    /**
     * Set the location the "value" field of the nameReference element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setNameReferenceValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_NAME_REFERENCE] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $valueBoolean,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $valueBoolean) {
            unset($this->valueBoolean);
            return $this;
        }
        if (!($valueBoolean instanceof FHIRBoolean)) {
            $valueBoolean = new FHIRBoolean(value: $valueBoolean);
        }
        $this->valueBoolean = $valueBoolean;
        if ($this->_valueXMLLocations[self::FIELD_VALUE_BOOLEAN] !== $valueXMLLocation) {
            $this->_setValueBooleanValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the valueBoolean element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getValueBooleanValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VALUE_BOOLEAN];
    }

    /**
     * Set the location the "value" field of the valueBoolean element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setValueBooleanValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VALUE_BOOLEAN] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueInteger(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $valueInteger,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $valueInteger) {
            unset($this->valueInteger);
            return $this;
        }
        if (!($valueInteger instanceof FHIRInteger)) {
            $valueInteger = new FHIRInteger(value: $valueInteger);
        }
        $this->valueInteger = $valueInteger;
        if ($this->_valueXMLLocations[self::FIELD_VALUE_INTEGER] !== $valueXMLLocation) {
            $this->_setValueIntegerValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the valueInteger element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getValueIntegerValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VALUE_INTEGER];
    }

    /**
     * Set the location the "value" field of the valueInteger element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setValueIntegerValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VALUE_INTEGER] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueDecimal(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $valueDecimal,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $valueDecimal) {
            unset($this->valueDecimal);
            return $this;
        }
        if (!($valueDecimal instanceof FHIRDecimal)) {
            $valueDecimal = new FHIRDecimal(value: $valueDecimal);
        }
        $this->valueDecimal = $valueDecimal;
        if ($this->_valueXMLLocations[self::FIELD_VALUE_DECIMAL] !== $valueXMLLocation) {
            $this->_setValueDecimalValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the valueDecimal element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getValueDecimalValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VALUE_DECIMAL];
    }

    /**
     * Set the location the "value" field of the valueDecimal element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setValueDecimalValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VALUE_DECIMAL] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueBase64Binary(null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $valueBase64Binary,
                                         ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $valueBase64Binary) {
            unset($this->valueBase64Binary);
            return $this;
        }
        if (!($valueBase64Binary instanceof FHIRBase64Binary)) {
            $valueBase64Binary = new FHIRBase64Binary(value: $valueBase64Binary);
        }
        $this->valueBase64Binary = $valueBase64Binary;
        if ($this->_valueXMLLocations[self::FIELD_VALUE_BASE_64BINARY] !== $valueXMLLocation) {
            $this->_setValueBase64BinaryValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the valueBase64Binary element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getValueBase64BinaryValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VALUE_BASE_64BINARY];
    }

    /**
     * Set the location the "value" field of the valueBase64Binary element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setValueBase64BinaryValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VALUE_BASE_64BINARY] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueInstant(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $valueInstant,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $valueInstant) {
            unset($this->valueInstant);
            return $this;
        }
        if (!($valueInstant instanceof FHIRInstant)) {
            $valueInstant = new FHIRInstant(value: $valueInstant);
        }
        $this->valueInstant = $valueInstant;
        if ($this->_valueXMLLocations[self::FIELD_VALUE_INSTANT] !== $valueXMLLocation) {
            $this->_setValueInstantValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the valueInstant element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getValueInstantValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VALUE_INSTANT];
    }

    /**
     * Set the location the "value" field of the valueInstant element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setValueInstantValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VALUE_INSTANT] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueString(null|string|FHIRStringPrimitive|FHIRString $valueString,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $valueString) {
            unset($this->valueString);
            return $this;
        }
        if (!($valueString instanceof FHIRString)) {
            $valueString = new FHIRString(value: $valueString);
        }
        $this->valueString = $valueString;
        if ($this->_valueXMLLocations[self::FIELD_VALUE_STRING] !== $valueXMLLocation) {
            $this->_setValueStringValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the valueString element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getValueStringValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VALUE_STRING];
    }

    /**
     * Set the location the "value" field of the valueString element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setValueStringValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VALUE_STRING] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueUri(null|string|FHIRUriPrimitive|FHIRUri $valueUri,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $valueUri) {
            unset($this->valueUri);
            return $this;
        }
        if (!($valueUri instanceof FHIRUri)) {
            $valueUri = new FHIRUri(value: $valueUri);
        }
        $this->valueUri = $valueUri;
        if ($this->_valueXMLLocations[self::FIELD_VALUE_URI] !== $valueXMLLocation) {
            $this->_setValueUriValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the valueUri element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getValueUriValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VALUE_URI];
    }

    /**
     * Set the location the "value" field of the valueUri element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setValueUriValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VALUE_URI] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $valueDate,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $valueDate) {
            unset($this->valueDate);
            return $this;
        }
        if (!($valueDate instanceof FHIRDate)) {
            $valueDate = new FHIRDate(value: $valueDate);
        }
        $this->valueDate = $valueDate;
        if ($this->_valueXMLLocations[self::FIELD_VALUE_DATE] !== $valueXMLLocation) {
            $this->_setValueDateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the valueDate element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getValueDateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VALUE_DATE];
    }

    /**
     * Set the location the "value" field of the valueDate element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setValueDateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VALUE_DATE] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $valueDateTime,
                                     ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $valueDateTime) {
            unset($this->valueDateTime);
            return $this;
        }
        if (!($valueDateTime instanceof FHIRDateTime)) {
            $valueDateTime = new FHIRDateTime(value: $valueDateTime);
        }
        $this->valueDateTime = $valueDateTime;
        if ($this->_valueXMLLocations[self::FIELD_VALUE_DATE_TIME] !== $valueXMLLocation) {
            $this->_setValueDateTimeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the valueDateTime element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getValueDateTimeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VALUE_DATE_TIME];
    }

    /**
     * Set the location the "value" field of the valueDateTime element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setValueDateTimeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VALUE_DATE_TIME] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueCode(null|string|FHIRCodePrimitive|FHIRCode $valueCode,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $valueCode) {
            unset($this->valueCode);
            return $this;
        }
        if (!($valueCode instanceof FHIRCode)) {
            $valueCode = new FHIRCode(value: $valueCode);
        }
        $this->valueCode = $valueCode;
        if ($this->_valueXMLLocations[self::FIELD_VALUE_CODE] !== $valueXMLLocation) {
            $this->_setValueCodeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the valueCode element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getValueCodeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VALUE_CODE];
    }

    /**
     * Set the location the "value" field of the valueCode element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setValueCodeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VALUE_CODE] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueOid(null|string|FHIROidPrimitive|FHIROid $valueOid,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $valueOid) {
            unset($this->valueOid);
            return $this;
        }
        if (!($valueOid instanceof FHIROid)) {
            $valueOid = new FHIROid(value: $valueOid);
        }
        $this->valueOid = $valueOid;
        if ($this->_valueXMLLocations[self::FIELD_VALUE_OID] !== $valueXMLLocation) {
            $this->_setValueOidValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the valueOid element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getValueOidValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VALUE_OID];
    }

    /**
     * Set the location the "value" field of the valueOid element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setValueOidValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VALUE_OID] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueUuid(null|string|FHIRUuidPrimitive|FHIRUuid $valueUuid,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $valueUuid) {
            unset($this->valueUuid);
            return $this;
        }
        if (!($valueUuid instanceof FHIRUuid)) {
            $valueUuid = new FHIRUuid(value: $valueUuid);
        }
        $this->valueUuid = $valueUuid;
        if ($this->_valueXMLLocations[self::FIELD_VALUE_UUID] !== $valueXMLLocation) {
            $this->_setValueUuidValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the valueUuid element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getValueUuidValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VALUE_UUID];
    }

    /**
     * Set the location the "value" field of the valueUuid element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setValueUuidValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VALUE_UUID] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueId(null|string|FHIRIdPrimitive|FHIRId $valueId,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $valueId) {
            unset($this->valueId);
            return $this;
        }
        if (!($valueId instanceof FHIRId)) {
            $valueId = new FHIRId(value: $valueId);
        }
        $this->valueId = $valueId;
        if ($this->_valueXMLLocations[self::FIELD_VALUE_ID] !== $valueXMLLocation) {
            $this->_setValueIdValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the valueId element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getValueIdValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VALUE_ID];
    }

    /**
     * Set the location the "value" field of the valueId element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setValueIdValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VALUE_ID] = $valueXMLLocation;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier $valueIdentifier
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueIdentifier(null|FHIRString|FHIRIdentifier $valueIdentifier,
                                       ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $valueIdentifier) {
            unset($this->valueIdentifier);
            return $this;
        }
        if (!($valueIdentifier instanceof FHIRIdentifier)) {
            $valueIdentifier = new FHIRIdentifier(value: $valueIdentifier);
        }
        $this->valueIdentifier = $valueIdentifier;
        if ($this->_valueXMLLocations[self::FIELD_VALUE_IDENTIFIER] !== $valueXMLLocation) {
            $this->_setValueIdentifierValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the valueIdentifier element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getValueIdentifierValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VALUE_IDENTIFIER];
    }

    /**
     * Set the location the "value" field of the valueIdentifier element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setValueIdentifierValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VALUE_IDENTIFIER] = $valueXMLLocation;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact $valueContact
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueContact(null|FHIRString|FHIRContact $valueContact,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $valueContact) {
            unset($this->valueContact);
            return $this;
        }
        if (!($valueContact instanceof FHIRContact)) {
            $valueContact = new FHIRContact(value: $valueContact);
        }
        $this->valueContact = $valueContact;
        if ($this->_valueXMLLocations[self::FIELD_VALUE_CONTACT] !== $valueXMLLocation) {
            $this->_setValueContactValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the valueContact element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getValueContactValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VALUE_CONTACT];
    }

    /**
     * Set the location the "value" field of the valueContact element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setValueContactValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VALUE_CONTACT] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $exampleBoolean,
                                      ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $exampleBoolean) {
            unset($this->exampleBoolean);
            return $this;
        }
        if (!($exampleBoolean instanceof FHIRBoolean)) {
            $exampleBoolean = new FHIRBoolean(value: $exampleBoolean);
        }
        $this->exampleBoolean = $exampleBoolean;
        if ($this->_valueXMLLocations[self::FIELD_EXAMPLE_BOOLEAN] !== $valueXMLLocation) {
            $this->_setExampleBooleanValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the exampleBoolean element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getExampleBooleanValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_EXAMPLE_BOOLEAN];
    }

    /**
     * Set the location the "value" field of the exampleBoolean element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setExampleBooleanValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_EXAMPLE_BOOLEAN] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleInteger(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $exampleInteger,
                                      ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $exampleInteger) {
            unset($this->exampleInteger);
            return $this;
        }
        if (!($exampleInteger instanceof FHIRInteger)) {
            $exampleInteger = new FHIRInteger(value: $exampleInteger);
        }
        $this->exampleInteger = $exampleInteger;
        if ($this->_valueXMLLocations[self::FIELD_EXAMPLE_INTEGER] !== $valueXMLLocation) {
            $this->_setExampleIntegerValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the exampleInteger element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getExampleIntegerValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_EXAMPLE_INTEGER];
    }

    /**
     * Set the location the "value" field of the exampleInteger element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setExampleIntegerValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_EXAMPLE_INTEGER] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleDecimal(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $exampleDecimal,
                                      ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $exampleDecimal) {
            unset($this->exampleDecimal);
            return $this;
        }
        if (!($exampleDecimal instanceof FHIRDecimal)) {
            $exampleDecimal = new FHIRDecimal(value: $exampleDecimal);
        }
        $this->exampleDecimal = $exampleDecimal;
        if ($this->_valueXMLLocations[self::FIELD_EXAMPLE_DECIMAL] !== $valueXMLLocation) {
            $this->_setExampleDecimalValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the exampleDecimal element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getExampleDecimalValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_EXAMPLE_DECIMAL];
    }

    /**
     * Set the location the "value" field of the exampleDecimal element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setExampleDecimalValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_EXAMPLE_DECIMAL] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleBase64Binary(null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $exampleBase64Binary,
                                           ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $exampleBase64Binary) {
            unset($this->exampleBase64Binary);
            return $this;
        }
        if (!($exampleBase64Binary instanceof FHIRBase64Binary)) {
            $exampleBase64Binary = new FHIRBase64Binary(value: $exampleBase64Binary);
        }
        $this->exampleBase64Binary = $exampleBase64Binary;
        if ($this->_valueXMLLocations[self::FIELD_EXAMPLE_BASE_64BINARY] !== $valueXMLLocation) {
            $this->_setExampleBase64BinaryValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the exampleBase64Binary element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getExampleBase64BinaryValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_EXAMPLE_BASE_64BINARY];
    }

    /**
     * Set the location the "value" field of the exampleBase64Binary element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setExampleBase64BinaryValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_EXAMPLE_BASE_64BINARY] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleInstant(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $exampleInstant,
                                      ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $exampleInstant) {
            unset($this->exampleInstant);
            return $this;
        }
        if (!($exampleInstant instanceof FHIRInstant)) {
            $exampleInstant = new FHIRInstant(value: $exampleInstant);
        }
        $this->exampleInstant = $exampleInstant;
        if ($this->_valueXMLLocations[self::FIELD_EXAMPLE_INSTANT] !== $valueXMLLocation) {
            $this->_setExampleInstantValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the exampleInstant element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getExampleInstantValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_EXAMPLE_INSTANT];
    }

    /**
     * Set the location the "value" field of the exampleInstant element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setExampleInstantValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_EXAMPLE_INSTANT] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleString(null|string|FHIRStringPrimitive|FHIRString $exampleString,
                                     ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $exampleString) {
            unset($this->exampleString);
            return $this;
        }
        if (!($exampleString instanceof FHIRString)) {
            $exampleString = new FHIRString(value: $exampleString);
        }
        $this->exampleString = $exampleString;
        if ($this->_valueXMLLocations[self::FIELD_EXAMPLE_STRING] !== $valueXMLLocation) {
            $this->_setExampleStringValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the exampleString element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getExampleStringValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_EXAMPLE_STRING];
    }

    /**
     * Set the location the "value" field of the exampleString element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setExampleStringValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_EXAMPLE_STRING] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleUri(null|string|FHIRUriPrimitive|FHIRUri $exampleUri,
                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $exampleUri) {
            unset($this->exampleUri);
            return $this;
        }
        if (!($exampleUri instanceof FHIRUri)) {
            $exampleUri = new FHIRUri(value: $exampleUri);
        }
        $this->exampleUri = $exampleUri;
        if ($this->_valueXMLLocations[self::FIELD_EXAMPLE_URI] !== $valueXMLLocation) {
            $this->_setExampleUriValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the exampleUri element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getExampleUriValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_EXAMPLE_URI];
    }

    /**
     * Set the location the "value" field of the exampleUri element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setExampleUriValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_EXAMPLE_URI] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $exampleDate,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $exampleDate) {
            unset($this->exampleDate);
            return $this;
        }
        if (!($exampleDate instanceof FHIRDate)) {
            $exampleDate = new FHIRDate(value: $exampleDate);
        }
        $this->exampleDate = $exampleDate;
        if ($this->_valueXMLLocations[self::FIELD_EXAMPLE_DATE] !== $valueXMLLocation) {
            $this->_setExampleDateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the exampleDate element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getExampleDateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_EXAMPLE_DATE];
    }

    /**
     * Set the location the "value" field of the exampleDate element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setExampleDateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_EXAMPLE_DATE] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $exampleDateTime,
                                       ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $exampleDateTime) {
            unset($this->exampleDateTime);
            return $this;
        }
        if (!($exampleDateTime instanceof FHIRDateTime)) {
            $exampleDateTime = new FHIRDateTime(value: $exampleDateTime);
        }
        $this->exampleDateTime = $exampleDateTime;
        if ($this->_valueXMLLocations[self::FIELD_EXAMPLE_DATE_TIME] !== $valueXMLLocation) {
            $this->_setExampleDateTimeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the exampleDateTime element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getExampleDateTimeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_EXAMPLE_DATE_TIME];
    }

    /**
     * Set the location the "value" field of the exampleDateTime element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setExampleDateTimeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_EXAMPLE_DATE_TIME] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleCode(null|string|FHIRCodePrimitive|FHIRCode $exampleCode,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $exampleCode) {
            unset($this->exampleCode);
            return $this;
        }
        if (!($exampleCode instanceof FHIRCode)) {
            $exampleCode = new FHIRCode(value: $exampleCode);
        }
        $this->exampleCode = $exampleCode;
        if ($this->_valueXMLLocations[self::FIELD_EXAMPLE_CODE] !== $valueXMLLocation) {
            $this->_setExampleCodeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the exampleCode element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getExampleCodeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_EXAMPLE_CODE];
    }

    /**
     * Set the location the "value" field of the exampleCode element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setExampleCodeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_EXAMPLE_CODE] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleOid(null|string|FHIROidPrimitive|FHIROid $exampleOid,
                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $exampleOid) {
            unset($this->exampleOid);
            return $this;
        }
        if (!($exampleOid instanceof FHIROid)) {
            $exampleOid = new FHIROid(value: $exampleOid);
        }
        $this->exampleOid = $exampleOid;
        if ($this->_valueXMLLocations[self::FIELD_EXAMPLE_OID] !== $valueXMLLocation) {
            $this->_setExampleOidValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the exampleOid element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getExampleOidValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_EXAMPLE_OID];
    }

    /**
     * Set the location the "value" field of the exampleOid element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setExampleOidValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_EXAMPLE_OID] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleUuid(null|string|FHIRUuidPrimitive|FHIRUuid $exampleUuid,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $exampleUuid) {
            unset($this->exampleUuid);
            return $this;
        }
        if (!($exampleUuid instanceof FHIRUuid)) {
            $exampleUuid = new FHIRUuid(value: $exampleUuid);
        }
        $this->exampleUuid = $exampleUuid;
        if ($this->_valueXMLLocations[self::FIELD_EXAMPLE_UUID] !== $valueXMLLocation) {
            $this->_setExampleUuidValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the exampleUuid element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getExampleUuidValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_EXAMPLE_UUID];
    }

    /**
     * Set the location the "value" field of the exampleUuid element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setExampleUuidValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_EXAMPLE_UUID] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleId(null|string|FHIRIdPrimitive|FHIRId $exampleId,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $exampleId) {
            unset($this->exampleId);
            return $this;
        }
        if (!($exampleId instanceof FHIRId)) {
            $exampleId = new FHIRId(value: $exampleId);
        }
        $this->exampleId = $exampleId;
        if ($this->_valueXMLLocations[self::FIELD_EXAMPLE_ID] !== $valueXMLLocation) {
            $this->_setExampleIdValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the exampleId element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getExampleIdValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_EXAMPLE_ID];
    }

    /**
     * Set the location the "value" field of the exampleId element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setExampleIdValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_EXAMPLE_ID] = $valueXMLLocation;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier $exampleIdentifier
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleIdentifier(null|FHIRString|FHIRIdentifier $exampleIdentifier,
                                         ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $exampleIdentifier) {
            unset($this->exampleIdentifier);
            return $this;
        }
        if (!($exampleIdentifier instanceof FHIRIdentifier)) {
            $exampleIdentifier = new FHIRIdentifier(value: $exampleIdentifier);
        }
        $this->exampleIdentifier = $exampleIdentifier;
        if ($this->_valueXMLLocations[self::FIELD_EXAMPLE_IDENTIFIER] !== $valueXMLLocation) {
            $this->_setExampleIdentifierValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the exampleIdentifier element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getExampleIdentifierValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_EXAMPLE_IDENTIFIER];
    }

    /**
     * Set the location the "value" field of the exampleIdentifier element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setExampleIdentifierValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_EXAMPLE_IDENTIFIER] = $valueXMLLocation;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact $exampleContact
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleContact(null|FHIRString|FHIRContact $exampleContact,
                                      ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $exampleContact) {
            unset($this->exampleContact);
            return $this;
        }
        if (!($exampleContact instanceof FHIRContact)) {
            $exampleContact = new FHIRContact(value: $exampleContact);
        }
        $this->exampleContact = $exampleContact;
        if ($this->_valueXMLLocations[self::FIELD_EXAMPLE_CONTACT] !== $valueXMLLocation) {
            $this->_setExampleContactValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the exampleContact element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getExampleContactValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_EXAMPLE_CONTACT];
    }

    /**
     * Set the location the "value" field of the exampleContact element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setExampleContactValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_EXAMPLE_CONTACT] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setMaxLength(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $maxLength,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $maxLength) {
            unset($this->maxLength);
            return $this;
        }
        if (!($maxLength instanceof FHIRInteger)) {
            $maxLength = new FHIRInteger(value: $maxLength);
        }
        $this->maxLength = $maxLength;
        if ($this->_valueXMLLocations[self::FIELD_MAX_LENGTH] !== $valueXMLLocation) {
            $this->_setMaxLengthValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the maxLength element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getMaxLengthValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_MAX_LENGTH];
    }

    /**
     * Set the location the "value" field of the maxLength element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setMaxLengthValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_MAX_LENGTH] = $valueXMLLocation;
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
        if (!isset($this->condition)) {
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
        if ([] === $condition) {
            unset($this->condition);
            return $this;
        }
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
        if (!isset($this->constraint)) {
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
        if ([] === $constraint) {
            unset($this->constraint);
            return $this;
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setMustSupport(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $mustSupport,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $mustSupport) {
            unset($this->mustSupport);
            return $this;
        }
        if (!($mustSupport instanceof FHIRBoolean)) {
            $mustSupport = new FHIRBoolean(value: $mustSupport);
        }
        $this->mustSupport = $mustSupport;
        if ($this->_valueXMLLocations[self::FIELD_MUST_SUPPORT] !== $valueXMLLocation) {
            $this->_setMustSupportValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the mustSupport element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getMustSupportValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_MUST_SUPPORT];
    }

    /**
     * Set the location the "value" field of the mustSupport element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setMustSupportValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_MUST_SUPPORT] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setIsModifier(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $isModifier,
                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $isModifier) {
            unset($this->isModifier);
            return $this;
        }
        if (!($isModifier instanceof FHIRBoolean)) {
            $isModifier = new FHIRBoolean(value: $isModifier);
        }
        $this->isModifier = $isModifier;
        if ($this->_valueXMLLocations[self::FIELD_IS_MODIFIER] !== $valueXMLLocation) {
            $this->_setIsModifierValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the isModifier element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getIsModifierValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_IS_MODIFIER];
    }

    /**
     * Set the location the "value" field of the isModifier element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setIsModifierValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_IS_MODIFIER] = $valueXMLLocation;
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
        if (!isset($this->mapping)) {
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
        if ([] === $mapping) {
            unset($this->mapping);
            return $this;
        }
        $this->mapping = $mapping;
        return $this;
    }

    /* class_default.php:189 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
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

    /* class_default.php:213 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SHORT === $cen) {
                $type->setShort(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FORMAL === $cen) {
                $type->setFormal(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COMMENTS === $cen) {
                $type->setComments(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REQUIREMENTS === $cen) {
                $type->setRequirements(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SYNONYM === $cen) {
                $type->addSynonym(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MIN === $cen) {
                $type->setMin(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAX === $cen) {
                $type->setMax(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->addType(FHIRProfileType::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NAME_REFERENCE === $cen) {
                $type->setNameReference(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_BOOLEAN === $cen) {
                $type->setValueBoolean(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_INTEGER === $cen) {
                $type->setValueInteger(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_DECIMAL === $cen) {
                $type->setValueDecimal(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_BASE_64BINARY === $cen) {
                $type->setValueBase64Binary(FHIRBase64Binary::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_INSTANT === $cen) {
                $type->setValueInstant(FHIRInstant::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_STRING === $cen) {
                $type->setValueString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_URI === $cen) {
                $type->setValueUri(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_DATE === $cen) {
                $type->setValueDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_DATE_TIME === $cen) {
                $type->setValueDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_CODE === $cen) {
                $type->setValueCode(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_OID === $cen) {
                $type->setValueOid(FHIROid::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_UUID === $cen) {
                $type->setValueUuid(FHIRUuid::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_ID === $cen) {
                $type->setValueId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_ATTACHMENT === $cen) {
                $type->setValueAttachment(FHIRAttachment::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_IDENTIFIER === $cen) {
                $type->setValueIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_CODEABLE_CONCEPT === $cen) {
                $type->setValueCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_CODING === $cen) {
                $type->setValueCoding(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_QUANTITY === $cen) {
                $type->setValueQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_RANGE === $cen) {
                $type->setValueRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_PERIOD === $cen) {
                $type->setValuePeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_RATIO === $cen) {
                $type->setValueRatio(FHIRRatio::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_RESOURCE === $cen) {
                $type->setValueResource(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_SAMPLED_DATA === $cen) {
                $type->setValueSampledData(FHIRSampledData::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_HUMAN_NAME === $cen) {
                $type->setValueHumanName(FHIRHumanName::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_ADDRESS === $cen) {
                $type->setValueAddress(FHIRAddress::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_CONTACT === $cen) {
                $type->setValueContact(FHIRContact::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_SCHEDULE === $cen) {
                $type->setValueSchedule(FHIRSchedule::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE_BOOLEAN === $cen) {
                $type->setExampleBoolean(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE_INTEGER === $cen) {
                $type->setExampleInteger(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE_DECIMAL === $cen) {
                $type->setExampleDecimal(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE_BASE_64BINARY === $cen) {
                $type->setExampleBase64Binary(FHIRBase64Binary::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE_INSTANT === $cen) {
                $type->setExampleInstant(FHIRInstant::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE_STRING === $cen) {
                $type->setExampleString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE_URI === $cen) {
                $type->setExampleUri(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE_DATE === $cen) {
                $type->setExampleDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE_DATE_TIME === $cen) {
                $type->setExampleDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE_CODE === $cen) {
                $type->setExampleCode(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE_OID === $cen) {
                $type->setExampleOid(FHIROid::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE_UUID === $cen) {
                $type->setExampleUuid(FHIRUuid::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE_ID === $cen) {
                $type->setExampleId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE_ATTACHMENT === $cen) {
                $type->setExampleAttachment(FHIRAttachment::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE_IDENTIFIER === $cen) {
                $type->setExampleIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE_CODEABLE_CONCEPT === $cen) {
                $type->setExampleCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE_CODING === $cen) {
                $type->setExampleCoding(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE_QUANTITY === $cen) {
                $type->setExampleQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE_RANGE === $cen) {
                $type->setExampleRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE_PERIOD === $cen) {
                $type->setExamplePeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE_RATIO === $cen) {
                $type->setExampleRatio(FHIRRatio::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE_RESOURCE === $cen) {
                $type->setExampleResource(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE_SAMPLED_DATA === $cen) {
                $type->setExampleSampledData(FHIRSampledData::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE_HUMAN_NAME === $cen) {
                $type->setExampleHumanName(FHIRHumanName::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE_ADDRESS === $cen) {
                $type->setExampleAddress(FHIRAddress::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE_CONTACT === $cen) {
                $type->setExampleContact(FHIRContact::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE_SCHEDULE === $cen) {
                $type->setExampleSchedule(FHIRSchedule::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAX_LENGTH === $cen) {
                $type->setMaxLength(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONDITION === $cen) {
                $type->addCondition(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONSTRAINT === $cen) {
                $type->addConstraint(FHIRProfileConstraint::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MUST_SUPPORT === $cen) {
                $type->setMustSupport(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IS_MODIFIER === $cen) {
                $type->setIsModifier(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BINDING === $cen) {
                $type->setBinding(FHIRProfileBinding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAPPING === $cen) {
                $type->addMapping(FHIRProfileMapping1::xmlUnserialize($ce, $config));
            }        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SHORT])) {
            if (isset($type->short)) {
                $type->short->setValue((string)$attributes[self::FIELD_SHORT]);
                $type->_setShortValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setShort((string)$attributes[self::FIELD_SHORT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FORMAL])) {
            if (isset($type->formal)) {
                $type->formal->setValue((string)$attributes[self::FIELD_FORMAL]);
                $type->_setFormalValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setFormal((string)$attributes[self::FIELD_FORMAL], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_COMMENTS])) {
            if (isset($type->comments)) {
                $type->comments->setValue((string)$attributes[self::FIELD_COMMENTS]);
                $type->_setCommentsValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setComments((string)$attributes[self::FIELD_COMMENTS], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_REQUIREMENTS])) {
            if (isset($type->requirements)) {
                $type->requirements->setValue((string)$attributes[self::FIELD_REQUIREMENTS]);
                $type->_setRequirementsValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setRequirements((string)$attributes[self::FIELD_REQUIREMENTS], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MIN])) {
            if (isset($type->min)) {
                $type->min->setValue((string)$attributes[self::FIELD_MIN]);
                $type->_setMinValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setMin((string)$attributes[self::FIELD_MIN], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MAX])) {
            if (isset($type->max)) {
                $type->max->setValue((string)$attributes[self::FIELD_MAX]);
                $type->_setMaxValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setMax((string)$attributes[self::FIELD_MAX], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_NAME_REFERENCE])) {
            if (isset($type->nameReference)) {
                $type->nameReference->setValue((string)$attributes[self::FIELD_NAME_REFERENCE]);
                $type->_setNameReferenceValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setNameReference((string)$attributes[self::FIELD_NAME_REFERENCE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_BOOLEAN])) {
            if (isset($type->valueBoolean)) {
                $type->valueBoolean->setValue((string)$attributes[self::FIELD_VALUE_BOOLEAN]);
                $type->_setValueBooleanValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValueBoolean((string)$attributes[self::FIELD_VALUE_BOOLEAN], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_INTEGER])) {
            if (isset($type->valueInteger)) {
                $type->valueInteger->setValue((string)$attributes[self::FIELD_VALUE_INTEGER]);
                $type->_setValueIntegerValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValueInteger((string)$attributes[self::FIELD_VALUE_INTEGER], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_DECIMAL])) {
            if (isset($type->valueDecimal)) {
                $type->valueDecimal->setValue((string)$attributes[self::FIELD_VALUE_DECIMAL]);
                $type->_setValueDecimalValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValueDecimal((string)$attributes[self::FIELD_VALUE_DECIMAL], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_BASE_64BINARY])) {
            if (isset($type->valueBase64Binary)) {
                $type->valueBase64Binary->setValue((string)$attributes[self::FIELD_VALUE_BASE_64BINARY]);
                $type->_setValueBase64BinaryValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValueBase64Binary((string)$attributes[self::FIELD_VALUE_BASE_64BINARY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_INSTANT])) {
            if (isset($type->valueInstant)) {
                $type->valueInstant->setValue((string)$attributes[self::FIELD_VALUE_INSTANT]);
                $type->_setValueInstantValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValueInstant((string)$attributes[self::FIELD_VALUE_INSTANT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_STRING])) {
            if (isset($type->valueString)) {
                $type->valueString->setValue((string)$attributes[self::FIELD_VALUE_STRING]);
                $type->_setValueStringValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValueString((string)$attributes[self::FIELD_VALUE_STRING], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_URI])) {
            if (isset($type->valueUri)) {
                $type->valueUri->setValue((string)$attributes[self::FIELD_VALUE_URI]);
                $type->_setValueUriValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValueUri((string)$attributes[self::FIELD_VALUE_URI], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_DATE])) {
            if (isset($type->valueDate)) {
                $type->valueDate->setValue((string)$attributes[self::FIELD_VALUE_DATE]);
                $type->_setValueDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValueDate((string)$attributes[self::FIELD_VALUE_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_DATE_TIME])) {
            if (isset($type->valueDateTime)) {
                $type->valueDateTime->setValue((string)$attributes[self::FIELD_VALUE_DATE_TIME]);
                $type->_setValueDateTimeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValueDateTime((string)$attributes[self::FIELD_VALUE_DATE_TIME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_CODE])) {
            if (isset($type->valueCode)) {
                $type->valueCode->setValue((string)$attributes[self::FIELD_VALUE_CODE]);
                $type->_setValueCodeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValueCode((string)$attributes[self::FIELD_VALUE_CODE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_OID])) {
            if (isset($type->valueOid)) {
                $type->valueOid->setValue((string)$attributes[self::FIELD_VALUE_OID]);
                $type->_setValueOidValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValueOid((string)$attributes[self::FIELD_VALUE_OID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_UUID])) {
            if (isset($type->valueUuid)) {
                $type->valueUuid->setValue((string)$attributes[self::FIELD_VALUE_UUID]);
                $type->_setValueUuidValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValueUuid((string)$attributes[self::FIELD_VALUE_UUID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_ID])) {
            if (isset($type->valueId)) {
                $type->valueId->setValue((string)$attributes[self::FIELD_VALUE_ID]);
                $type->_setValueIdValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValueId((string)$attributes[self::FIELD_VALUE_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_IDENTIFIER])) {
            if (isset($type->valueIdentifier)) {
                $type->valueIdentifier->setValue((string)$attributes[self::FIELD_VALUE_IDENTIFIER]);
                $type->_setValueIdentifierValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValueIdentifier((string)$attributes[self::FIELD_VALUE_IDENTIFIER], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_CONTACT])) {
            if (isset($type->valueContact)) {
                $type->valueContact->setValue((string)$attributes[self::FIELD_VALUE_CONTACT]);
                $type->_setValueContactValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValueContact((string)$attributes[self::FIELD_VALUE_CONTACT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_BOOLEAN])) {
            if (isset($type->exampleBoolean)) {
                $type->exampleBoolean->setValue((string)$attributes[self::FIELD_EXAMPLE_BOOLEAN]);
                $type->_setExampleBooleanValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setExampleBoolean((string)$attributes[self::FIELD_EXAMPLE_BOOLEAN], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_INTEGER])) {
            if (isset($type->exampleInteger)) {
                $type->exampleInteger->setValue((string)$attributes[self::FIELD_EXAMPLE_INTEGER]);
                $type->_setExampleIntegerValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setExampleInteger((string)$attributes[self::FIELD_EXAMPLE_INTEGER], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_DECIMAL])) {
            if (isset($type->exampleDecimal)) {
                $type->exampleDecimal->setValue((string)$attributes[self::FIELD_EXAMPLE_DECIMAL]);
                $type->_setExampleDecimalValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setExampleDecimal((string)$attributes[self::FIELD_EXAMPLE_DECIMAL], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_BASE_64BINARY])) {
            if (isset($type->exampleBase64Binary)) {
                $type->exampleBase64Binary->setValue((string)$attributes[self::FIELD_EXAMPLE_BASE_64BINARY]);
                $type->_setExampleBase64BinaryValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setExampleBase64Binary((string)$attributes[self::FIELD_EXAMPLE_BASE_64BINARY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_INSTANT])) {
            if (isset($type->exampleInstant)) {
                $type->exampleInstant->setValue((string)$attributes[self::FIELD_EXAMPLE_INSTANT]);
                $type->_setExampleInstantValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setExampleInstant((string)$attributes[self::FIELD_EXAMPLE_INSTANT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_STRING])) {
            if (isset($type->exampleString)) {
                $type->exampleString->setValue((string)$attributes[self::FIELD_EXAMPLE_STRING]);
                $type->_setExampleStringValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setExampleString((string)$attributes[self::FIELD_EXAMPLE_STRING], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_URI])) {
            if (isset($type->exampleUri)) {
                $type->exampleUri->setValue((string)$attributes[self::FIELD_EXAMPLE_URI]);
                $type->_setExampleUriValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setExampleUri((string)$attributes[self::FIELD_EXAMPLE_URI], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_DATE])) {
            if (isset($type->exampleDate)) {
                $type->exampleDate->setValue((string)$attributes[self::FIELD_EXAMPLE_DATE]);
                $type->_setExampleDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setExampleDate((string)$attributes[self::FIELD_EXAMPLE_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_DATE_TIME])) {
            if (isset($type->exampleDateTime)) {
                $type->exampleDateTime->setValue((string)$attributes[self::FIELD_EXAMPLE_DATE_TIME]);
                $type->_setExampleDateTimeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setExampleDateTime((string)$attributes[self::FIELD_EXAMPLE_DATE_TIME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_CODE])) {
            if (isset($type->exampleCode)) {
                $type->exampleCode->setValue((string)$attributes[self::FIELD_EXAMPLE_CODE]);
                $type->_setExampleCodeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setExampleCode((string)$attributes[self::FIELD_EXAMPLE_CODE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_OID])) {
            if (isset($type->exampleOid)) {
                $type->exampleOid->setValue((string)$attributes[self::FIELD_EXAMPLE_OID]);
                $type->_setExampleOidValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setExampleOid((string)$attributes[self::FIELD_EXAMPLE_OID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_UUID])) {
            if (isset($type->exampleUuid)) {
                $type->exampleUuid->setValue((string)$attributes[self::FIELD_EXAMPLE_UUID]);
                $type->_setExampleUuidValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setExampleUuid((string)$attributes[self::FIELD_EXAMPLE_UUID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_ID])) {
            if (isset($type->exampleId)) {
                $type->exampleId->setValue((string)$attributes[self::FIELD_EXAMPLE_ID]);
                $type->_setExampleIdValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setExampleId((string)$attributes[self::FIELD_EXAMPLE_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_IDENTIFIER])) {
            if (isset($type->exampleIdentifier)) {
                $type->exampleIdentifier->setValue((string)$attributes[self::FIELD_EXAMPLE_IDENTIFIER]);
                $type->_setExampleIdentifierValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setExampleIdentifier((string)$attributes[self::FIELD_EXAMPLE_IDENTIFIER], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_CONTACT])) {
            if (isset($type->exampleContact)) {
                $type->exampleContact->setValue((string)$attributes[self::FIELD_EXAMPLE_CONTACT]);
                $type->_setExampleContactValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setExampleContact((string)$attributes[self::FIELD_EXAMPLE_CONTACT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MAX_LENGTH])) {
            if (isset($type->maxLength)) {
                $type->maxLength->setValue((string)$attributes[self::FIELD_MAX_LENGTH]);
                $type->_setMaxLengthValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setMaxLength((string)$attributes[self::FIELD_MAX_LENGTH], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MUST_SUPPORT])) {
            if (isset($type->mustSupport)) {
                $type->mustSupport->setValue((string)$attributes[self::FIELD_MUST_SUPPORT]);
                $type->_setMustSupportValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setMustSupport((string)$attributes[self::FIELD_MUST_SUPPORT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IS_MODIFIER])) {
            if (isset($type->isModifier)) {
                $type->isModifier->setValue((string)$attributes[self::FIELD_IS_MODIFIER]);
                $type->_setIsModifierValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setIsModifier((string)$attributes[self::FIELD_IS_MODIFIER], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
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
        if (isset($this->short) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SHORT]) {
            $xw->writeAttribute(self::FIELD_SHORT, $this->short->_getFormattedValue());
        }
        if (isset($this->formal) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FORMAL]) {
            $xw->writeAttribute(self::FIELD_FORMAL, $this->formal->_getFormattedValue());
        }
        if (isset($this->comments) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_COMMENTS]) {
            $xw->writeAttribute(self::FIELD_COMMENTS, $this->comments->_getFormattedValue());
        }
        if (isset($this->requirements) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_REQUIREMENTS]) {
            $xw->writeAttribute(self::FIELD_REQUIREMENTS, $this->requirements->_getFormattedValue());
        }
        if (isset($this->min) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MIN]) {
            $xw->writeAttribute(self::FIELD_MIN, $this->min->_getFormattedValue());
        }
        if (isset($this->max) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MAX]) {
            $xw->writeAttribute(self::FIELD_MAX, $this->max->_getFormattedValue());
        }
        if (isset($this->nameReference) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NAME_REFERENCE]) {
            $xw->writeAttribute(self::FIELD_NAME_REFERENCE, $this->nameReference->_getFormattedValue());
        }
        if (isset($this->valueBoolean) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_BOOLEAN]) {
            $xw->writeAttribute(self::FIELD_VALUE_BOOLEAN, $this->valueBoolean->_getFormattedValue());
        }
        if (isset($this->valueInteger) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_INTEGER]) {
            $xw->writeAttribute(self::FIELD_VALUE_INTEGER, $this->valueInteger->_getFormattedValue());
        }
        if (isset($this->valueDecimal) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_DECIMAL]) {
            $xw->writeAttribute(self::FIELD_VALUE_DECIMAL, $this->valueDecimal->_getFormattedValue());
        }
        if (isset($this->valueBase64Binary) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_BASE_64BINARY]) {
            $xw->writeAttribute(self::FIELD_VALUE_BASE_64BINARY, $this->valueBase64Binary->_getFormattedValue());
        }
        if (isset($this->valueInstant) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_INSTANT]) {
            $xw->writeAttribute(self::FIELD_VALUE_INSTANT, $this->valueInstant->_getFormattedValue());
        }
        if (isset($this->valueString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_STRING]) {
            $xw->writeAttribute(self::FIELD_VALUE_STRING, $this->valueString->_getFormattedValue());
        }
        if (isset($this->valueUri) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_URI]) {
            $xw->writeAttribute(self::FIELD_VALUE_URI, $this->valueUri->_getFormattedValue());
        }
        if (isset($this->valueDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_DATE]) {
            $xw->writeAttribute(self::FIELD_VALUE_DATE, $this->valueDate->_getFormattedValue());
        }
        if (isset($this->valueDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_VALUE_DATE_TIME, $this->valueDateTime->_getFormattedValue());
        }
        if (isset($this->valueCode) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_CODE]) {
            $xw->writeAttribute(self::FIELD_VALUE_CODE, $this->valueCode->_getFormattedValue());
        }
        if (isset($this->valueOid) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_OID]) {
            $xw->writeAttribute(self::FIELD_VALUE_OID, $this->valueOid->_getFormattedValue());
        }
        if (isset($this->valueUuid) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_UUID]) {
            $xw->writeAttribute(self::FIELD_VALUE_UUID, $this->valueUuid->_getFormattedValue());
        }
        if (isset($this->valueId) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_ID]) {
            $xw->writeAttribute(self::FIELD_VALUE_ID, $this->valueId->_getFormattedValue());
        }
        if (isset($this->valueIdentifier) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_IDENTIFIER]) {
            $xw->writeAttribute(self::FIELD_VALUE_IDENTIFIER, $this->valueIdentifier->_getFormattedValue());
        }
        if (isset($this->valueContact) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_CONTACT]) {
            $xw->writeAttribute(self::FIELD_VALUE_CONTACT, $this->valueContact->_getFormattedValue());
        }
        if (isset($this->exampleBoolean) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_BOOLEAN]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_BOOLEAN, $this->exampleBoolean->_getFormattedValue());
        }
        if (isset($this->exampleInteger) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_INTEGER]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_INTEGER, $this->exampleInteger->_getFormattedValue());
        }
        if (isset($this->exampleDecimal) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_DECIMAL]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_DECIMAL, $this->exampleDecimal->_getFormattedValue());
        }
        if (isset($this->exampleBase64Binary) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_BASE_64BINARY]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_BASE_64BINARY, $this->exampleBase64Binary->_getFormattedValue());
        }
        if (isset($this->exampleInstant) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_INSTANT]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_INSTANT, $this->exampleInstant->_getFormattedValue());
        }
        if (isset($this->exampleString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_STRING]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_STRING, $this->exampleString->_getFormattedValue());
        }
        if (isset($this->exampleUri) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_URI]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_URI, $this->exampleUri->_getFormattedValue());
        }
        if (isset($this->exampleDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_DATE]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_DATE, $this->exampleDate->_getFormattedValue());
        }
        if (isset($this->exampleDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_DATE_TIME, $this->exampleDateTime->_getFormattedValue());
        }
        if (isset($this->exampleCode) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_CODE]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_CODE, $this->exampleCode->_getFormattedValue());
        }
        if (isset($this->exampleOid) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_OID]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_OID, $this->exampleOid->_getFormattedValue());
        }
        if (isset($this->exampleUuid) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_UUID]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_UUID, $this->exampleUuid->_getFormattedValue());
        }
        if (isset($this->exampleId) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_ID]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_ID, $this->exampleId->_getFormattedValue());
        }
        if (isset($this->exampleIdentifier) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_IDENTIFIER]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_IDENTIFIER, $this->exampleIdentifier->_getFormattedValue());
        }
        if (isset($this->exampleContact) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_CONTACT]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_CONTACT, $this->exampleContact->_getFormattedValue());
        }
        if (isset($this->maxLength) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MAX_LENGTH]) {
            $xw->writeAttribute(self::FIELD_MAX_LENGTH, $this->maxLength->_getFormattedValue());
        }
        if (isset($this->mustSupport) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MUST_SUPPORT]) {
            $xw->writeAttribute(self::FIELD_MUST_SUPPORT, $this->mustSupport->_getFormattedValue());
        }
        if (isset($this->isModifier) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_IS_MODIFIER]) {
            $xw->writeAttribute(self::FIELD_IS_MODIFIER, $this->isModifier->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->short)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SHORT]
                || $this->short->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SHORT);
            $this->short->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SHORT]);
            $xw->endElement();
        }
        if (isset($this->formal)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FORMAL]
                || $this->formal->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FORMAL);
            $this->formal->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FORMAL]);
            $xw->endElement();
        }
        if (isset($this->comments)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_COMMENTS]
                || $this->comments->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_COMMENTS);
            $this->comments->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_COMMENTS]);
            $xw->endElement();
        }
        if (isset($this->requirements)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_REQUIREMENTS]
                || $this->requirements->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_REQUIREMENTS);
            $this->requirements->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_REQUIREMENTS]);
            $xw->endElement();
        }
        if (isset($this->synonym) && [] !== $this->synonym) {
            foreach($this->synonym as $v) {
                $xw->startElement(self::FIELD_SYNONYM);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->min)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MIN]
                || $this->min->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MIN);
            $this->min->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MIN]);
            $xw->endElement();
        }
        if (isset($this->max)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MAX]
                || $this->max->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MAX);
            $this->max->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MAX]);
            $xw->endElement();
        }
        if (isset($this->type)) {
            foreach ($this->type as $v) {
                $xw->startElement(self::FIELD_TYPE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->nameReference)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NAME_REFERENCE]
                || $this->nameReference->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NAME_REFERENCE);
            $this->nameReference->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NAME_REFERENCE]);
            $xw->endElement();
        }
        if (isset($this->valueBoolean)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_BOOLEAN]
                || $this->valueBoolean->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_BOOLEAN);
            $this->valueBoolean->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_BOOLEAN]);
            $xw->endElement();
        }
        if (isset($this->valueInteger)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_INTEGER]
                || $this->valueInteger->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_INTEGER);
            $this->valueInteger->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_INTEGER]);
            $xw->endElement();
        }
        if (isset($this->valueDecimal)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_DECIMAL]
                || $this->valueDecimal->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_DECIMAL);
            $this->valueDecimal->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_DECIMAL]);
            $xw->endElement();
        }
        if (isset($this->valueBase64Binary)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_BASE_64BINARY]
                || $this->valueBase64Binary->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_BASE_64BINARY);
            $this->valueBase64Binary->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_BASE_64BINARY]);
            $xw->endElement();
        }
        if (isset($this->valueInstant)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_INSTANT]
                || $this->valueInstant->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_INSTANT);
            $this->valueInstant->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_INSTANT]);
            $xw->endElement();
        }
        if (isset($this->valueString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_STRING]
                || $this->valueString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_STRING);
            $this->valueString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_STRING]);
            $xw->endElement();
        }
        if (isset($this->valueUri)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_URI]
                || $this->valueUri->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_URI);
            $this->valueUri->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_URI]);
            $xw->endElement();
        }
        if (isset($this->valueDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_DATE]
                || $this->valueDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_DATE);
            $this->valueDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_DATE]);
            $xw->endElement();
        }
        if (isset($this->valueDateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_DATE_TIME]
                || $this->valueDateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_DATE_TIME);
            $this->valueDateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->valueCode)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_CODE]
                || $this->valueCode->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_CODE);
            $this->valueCode->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_CODE]);
            $xw->endElement();
        }
        if (isset($this->valueOid)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_OID]
                || $this->valueOid->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_OID);
            $this->valueOid->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_OID]);
            $xw->endElement();
        }
        if (isset($this->valueUuid)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_UUID]
                || $this->valueUuid->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_UUID);
            $this->valueUuid->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_UUID]);
            $xw->endElement();
        }
        if (isset($this->valueId)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_ID]
                || $this->valueId->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_ID);
            $this->valueId->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_ID]);
            $xw->endElement();
        }
        if (isset($this->valueAttachment)) {
            $xw->startElement(self::FIELD_VALUE_ATTACHMENT);
            $this->valueAttachment->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueIdentifier)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_IDENTIFIER]
                || $this->valueIdentifier->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_IDENTIFIER);
            $this->valueIdentifier->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_IDENTIFIER]);
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
        if (isset($this->valueContact)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_CONTACT]
                || $this->valueContact->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_CONTACT);
            $this->valueContact->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_CONTACT]);
            $xw->endElement();
        }
        if (isset($this->valueSchedule)) {
            $xw->startElement(self::FIELD_VALUE_SCHEDULE);
            $this->valueSchedule->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleBoolean)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXAMPLE_BOOLEAN]
                || $this->exampleBoolean->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXAMPLE_BOOLEAN);
            $this->exampleBoolean->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXAMPLE_BOOLEAN]);
            $xw->endElement();
        }
        if (isset($this->exampleInteger)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXAMPLE_INTEGER]
                || $this->exampleInteger->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXAMPLE_INTEGER);
            $this->exampleInteger->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXAMPLE_INTEGER]);
            $xw->endElement();
        }
        if (isset($this->exampleDecimal)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXAMPLE_DECIMAL]
                || $this->exampleDecimal->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXAMPLE_DECIMAL);
            $this->exampleDecimal->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXAMPLE_DECIMAL]);
            $xw->endElement();
        }
        if (isset($this->exampleBase64Binary)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXAMPLE_BASE_64BINARY]
                || $this->exampleBase64Binary->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXAMPLE_BASE_64BINARY);
            $this->exampleBase64Binary->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXAMPLE_BASE_64BINARY]);
            $xw->endElement();
        }
        if (isset($this->exampleInstant)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXAMPLE_INSTANT]
                || $this->exampleInstant->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXAMPLE_INSTANT);
            $this->exampleInstant->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXAMPLE_INSTANT]);
            $xw->endElement();
        }
        if (isset($this->exampleString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXAMPLE_STRING]
                || $this->exampleString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXAMPLE_STRING);
            $this->exampleString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXAMPLE_STRING]);
            $xw->endElement();
        }
        if (isset($this->exampleUri)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXAMPLE_URI]
                || $this->exampleUri->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXAMPLE_URI);
            $this->exampleUri->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXAMPLE_URI]);
            $xw->endElement();
        }
        if (isset($this->exampleDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXAMPLE_DATE]
                || $this->exampleDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXAMPLE_DATE);
            $this->exampleDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXAMPLE_DATE]);
            $xw->endElement();
        }
        if (isset($this->exampleDateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXAMPLE_DATE_TIME]
                || $this->exampleDateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXAMPLE_DATE_TIME);
            $this->exampleDateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXAMPLE_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->exampleCode)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXAMPLE_CODE]
                || $this->exampleCode->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXAMPLE_CODE);
            $this->exampleCode->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXAMPLE_CODE]);
            $xw->endElement();
        }
        if (isset($this->exampleOid)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXAMPLE_OID]
                || $this->exampleOid->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXAMPLE_OID);
            $this->exampleOid->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXAMPLE_OID]);
            $xw->endElement();
        }
        if (isset($this->exampleUuid)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXAMPLE_UUID]
                || $this->exampleUuid->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXAMPLE_UUID);
            $this->exampleUuid->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXAMPLE_UUID]);
            $xw->endElement();
        }
        if (isset($this->exampleId)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXAMPLE_ID]
                || $this->exampleId->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXAMPLE_ID);
            $this->exampleId->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXAMPLE_ID]);
            $xw->endElement();
        }
        if (isset($this->exampleAttachment)) {
            $xw->startElement(self::FIELD_EXAMPLE_ATTACHMENT);
            $this->exampleAttachment->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleIdentifier)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXAMPLE_IDENTIFIER]
                || $this->exampleIdentifier->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXAMPLE_IDENTIFIER);
            $this->exampleIdentifier->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXAMPLE_IDENTIFIER]);
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
        if (isset($this->exampleContact)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXAMPLE_CONTACT]
                || $this->exampleContact->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXAMPLE_CONTACT);
            $this->exampleContact->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXAMPLE_CONTACT]);
            $xw->endElement();
        }
        if (isset($this->exampleSchedule)) {
            $xw->startElement(self::FIELD_EXAMPLE_SCHEDULE);
            $this->exampleSchedule->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->maxLength)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MAX_LENGTH]
                || $this->maxLength->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MAX_LENGTH);
            $this->maxLength->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MAX_LENGTH]);
            $xw->endElement();
        }
        if (isset($this->condition) && [] !== $this->condition) {
            foreach($this->condition as $v) {
                $xw->startElement(self::FIELD_CONDITION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->constraint)) {
            foreach ($this->constraint as $v) {
                $xw->startElement(self::FIELD_CONSTRAINT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->mustSupport)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MUST_SUPPORT]
                || $this->mustSupport->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MUST_SUPPORT);
            $this->mustSupport->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MUST_SUPPORT]);
            $xw->endElement();
        }
        if (isset($this->isModifier)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_IS_MODIFIER]
                || $this->isModifier->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_IS_MODIFIER);
            $this->isModifier->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_IS_MODIFIER]);
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
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
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
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_SHORT])
            || isset($json[self::FIELD_SHORT_EXT])
            || array_key_exists(self::FIELD_SHORT, $json)
            || array_key_exists(self::FIELD_SHORT_EXT, $json)) {
            $value = $json[self::FIELD_SHORT] ?? null;
            $type->setShort(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_SHORT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_FORMAL])
            || isset($json[self::FIELD_FORMAL_EXT])
            || array_key_exists(self::FIELD_FORMAL, $json)
            || array_key_exists(self::FIELD_FORMAL_EXT, $json)) {
            $value = $json[self::FIELD_FORMAL] ?? null;
            $type->setFormal(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_FORMAL_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_COMMENTS])
            || isset($json[self::FIELD_COMMENTS_EXT])
            || array_key_exists(self::FIELD_COMMENTS, $json)
            || array_key_exists(self::FIELD_COMMENTS_EXT, $json)) {
            $value = $json[self::FIELD_COMMENTS] ?? null;
            $type->setComments(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_COMMENTS_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_REQUIREMENTS])
            || isset($json[self::FIELD_REQUIREMENTS_EXT])
            || array_key_exists(self::FIELD_REQUIREMENTS, $json)
            || array_key_exists(self::FIELD_REQUIREMENTS_EXT, $json)) {
            $value = $json[self::FIELD_REQUIREMENTS] ?? null;
            $type->setRequirements(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_REQUIREMENTS_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_SYNONYM])
            || isset($json[self::FIELD_SYNONYM_EXT])
            || array_key_exists(self::FIELD_SYNONYM, $json)
            || array_key_exists(self::FIELD_SYNONYM_EXT, $json)) {
            $value = (array)($json[self::FIELD_SYNONYM] ?? []);
            $ext = (array)($json[self::FIELD_SYNONYM_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addSynonym(FHIRString::jsonUnserialize(
                    [FHIRString::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_MIN])
            || isset($json[self::FIELD_MIN_EXT])
            || array_key_exists(self::FIELD_MIN, $json)
            || array_key_exists(self::FIELD_MIN_EXT, $json)) {
            $value = $json[self::FIELD_MIN] ?? null;
            $type->setMin(FHIRInteger::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInteger::FIELD_VALUE => $value]) + ($json[self::FIELD_MIN_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_MAX])
            || isset($json[self::FIELD_MAX_EXT])
            || array_key_exists(self::FIELD_MAX, $json)
            || array_key_exists(self::FIELD_MAX_EXT, $json)) {
            $value = $json[self::FIELD_MAX] ?? null;
            $type->setMax(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_MAX_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_TYPE]) || array_key_exists(self::FIELD_TYPE, $json)) {
            $vs = $json[self::FIELD_TYPE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addType(FHIRProfileType::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_NAME_REFERENCE])
            || isset($json[self::FIELD_NAME_REFERENCE_EXT])
            || array_key_exists(self::FIELD_NAME_REFERENCE, $json)
            || array_key_exists(self::FIELD_NAME_REFERENCE_EXT, $json)) {
            $value = $json[self::FIELD_NAME_REFERENCE] ?? null;
            $type->setNameReference(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_NAME_REFERENCE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_BOOLEAN])
            || isset($json[self::FIELD_VALUE_BOOLEAN_EXT])
            || array_key_exists(self::FIELD_VALUE_BOOLEAN, $json)
            || array_key_exists(self::FIELD_VALUE_BOOLEAN_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_BOOLEAN] ?? null;
            $type->setValueBoolean(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_VALUE_BOOLEAN_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_INTEGER])
            || isset($json[self::FIELD_VALUE_INTEGER_EXT])
            || array_key_exists(self::FIELD_VALUE_INTEGER, $json)
            || array_key_exists(self::FIELD_VALUE_INTEGER_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_INTEGER] ?? null;
            $type->setValueInteger(FHIRInteger::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInteger::FIELD_VALUE => $value]) + ($json[self::FIELD_VALUE_INTEGER_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_DECIMAL])
            || isset($json[self::FIELD_VALUE_DECIMAL_EXT])
            || array_key_exists(self::FIELD_VALUE_DECIMAL, $json)
            || array_key_exists(self::FIELD_VALUE_DECIMAL_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_DECIMAL] ?? null;
            $type->setValueDecimal(FHIRDecimal::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDecimal::FIELD_VALUE => $value]) + ($json[self::FIELD_VALUE_DECIMAL_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_BASE_64BINARY])
            || isset($json[self::FIELD_VALUE_BASE_64BINARY_EXT])
            || array_key_exists(self::FIELD_VALUE_BASE_64BINARY, $json)
            || array_key_exists(self::FIELD_VALUE_BASE_64BINARY_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_BASE_64BINARY] ?? null;
            $type->setValueBase64Binary(FHIRBase64Binary::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBase64Binary::FIELD_VALUE => $value]) + ($json[self::FIELD_VALUE_BASE_64BINARY_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_INSTANT])
            || isset($json[self::FIELD_VALUE_INSTANT_EXT])
            || array_key_exists(self::FIELD_VALUE_INSTANT, $json)
            || array_key_exists(self::FIELD_VALUE_INSTANT_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_INSTANT] ?? null;
            $type->setValueInstant(FHIRInstant::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInstant::FIELD_VALUE => $value]) + ($json[self::FIELD_VALUE_INSTANT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_STRING])
            || isset($json[self::FIELD_VALUE_STRING_EXT])
            || array_key_exists(self::FIELD_VALUE_STRING, $json)
            || array_key_exists(self::FIELD_VALUE_STRING_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_STRING] ?? null;
            $type->setValueString(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_VALUE_STRING_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_URI])
            || isset($json[self::FIELD_VALUE_URI_EXT])
            || array_key_exists(self::FIELD_VALUE_URI, $json)
            || array_key_exists(self::FIELD_VALUE_URI_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_URI] ?? null;
            $type->setValueUri(FHIRUri::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUri::FIELD_VALUE => $value]) + ($json[self::FIELD_VALUE_URI_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_DATE])
            || isset($json[self::FIELD_VALUE_DATE_EXT])
            || array_key_exists(self::FIELD_VALUE_DATE, $json)
            || array_key_exists(self::FIELD_VALUE_DATE_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_DATE] ?? null;
            $type->setValueDate(FHIRDate::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDate::FIELD_VALUE => $value]) + ($json[self::FIELD_VALUE_DATE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_DATE_TIME])
            || isset($json[self::FIELD_VALUE_DATE_TIME_EXT])
            || array_key_exists(self::FIELD_VALUE_DATE_TIME, $json)
            || array_key_exists(self::FIELD_VALUE_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_DATE_TIME] ?? null;
            $type->setValueDateTime(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_VALUE_DATE_TIME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_CODE])
            || isset($json[self::FIELD_VALUE_CODE_EXT])
            || array_key_exists(self::FIELD_VALUE_CODE, $json)
            || array_key_exists(self::FIELD_VALUE_CODE_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_CODE] ?? null;
            $type->setValueCode(FHIRCode::jsonUnserialize(
                (is_array($value) ? $value : [FHIRCode::FIELD_VALUE => $value]) + ($json[self::FIELD_VALUE_CODE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_OID])
            || isset($json[self::FIELD_VALUE_OID_EXT])
            || array_key_exists(self::FIELD_VALUE_OID, $json)
            || array_key_exists(self::FIELD_VALUE_OID_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_OID] ?? null;
            $type->setValueOid(FHIROid::jsonUnserialize(
                (is_array($value) ? $value : [FHIROid::FIELD_VALUE => $value]) + ($json[self::FIELD_VALUE_OID_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_UUID])
            || isset($json[self::FIELD_VALUE_UUID_EXT])
            || array_key_exists(self::FIELD_VALUE_UUID, $json)
            || array_key_exists(self::FIELD_VALUE_UUID_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_UUID] ?? null;
            $type->setValueUuid(FHIRUuid::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUuid::FIELD_VALUE => $value]) + ($json[self::FIELD_VALUE_UUID_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_ID])
            || isset($json[self::FIELD_VALUE_ID_EXT])
            || array_key_exists(self::FIELD_VALUE_ID, $json)
            || array_key_exists(self::FIELD_VALUE_ID_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_ID] ?? null;
            $type->setValueId(FHIRId::jsonUnserialize(
                (is_array($value) ? $value : [FHIRId::FIELD_VALUE => $value]) + ($json[self::FIELD_VALUE_ID_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_ATTACHMENT]) || array_key_exists(self::FIELD_VALUE_ATTACHMENT, $json)) {
            $type->setValueAttachment(FHIRAttachment::jsonUnserialize($json[self::FIELD_VALUE_ATTACHMENT], $config));
        }
        if (isset($json[self::FIELD_VALUE_IDENTIFIER])
            || isset($json[self::FIELD_VALUE_IDENTIFIER_EXT])
            || array_key_exists(self::FIELD_VALUE_IDENTIFIER, $json)
            || array_key_exists(self::FIELD_VALUE_IDENTIFIER_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_IDENTIFIER] ?? null;
            $type->setValueIdentifier(FHIRIdentifier::jsonUnserialize(
                (is_array($value) ? $value : [FHIRIdentifier::FIELD_VALUE => $value]) + ($json[self::FIELD_VALUE_IDENTIFIER_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_VALUE_CODEABLE_CONCEPT, $json)) {
            $type->setValueCodeableConcept(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_VALUE_CODEABLE_CONCEPT], $config));
        }
        if (isset($json[self::FIELD_VALUE_CODING]) || array_key_exists(self::FIELD_VALUE_CODING, $json)) {
            $type->setValueCoding(FHIRCoding::jsonUnserialize($json[self::FIELD_VALUE_CODING], $config));
        }
        if (isset($json[self::FIELD_VALUE_QUANTITY]) || array_key_exists(self::FIELD_VALUE_QUANTITY, $json)) {
            $type->setValueQuantity(FHIRQuantity::jsonUnserialize($json[self::FIELD_VALUE_QUANTITY], $config));
        }
        if (isset($json[self::FIELD_VALUE_RANGE]) || array_key_exists(self::FIELD_VALUE_RANGE, $json)) {
            $type->setValueRange(FHIRRange::jsonUnserialize($json[self::FIELD_VALUE_RANGE], $config));
        }
        if (isset($json[self::FIELD_VALUE_PERIOD]) || array_key_exists(self::FIELD_VALUE_PERIOD, $json)) {
            $type->setValuePeriod(FHIRPeriod::jsonUnserialize($json[self::FIELD_VALUE_PERIOD], $config));
        }
        if (isset($json[self::FIELD_VALUE_RATIO]) || array_key_exists(self::FIELD_VALUE_RATIO, $json)) {
            $type->setValueRatio(FHIRRatio::jsonUnserialize($json[self::FIELD_VALUE_RATIO], $config));
        }
        if (isset($json[self::FIELD_VALUE_RESOURCE]) || array_key_exists(self::FIELD_VALUE_RESOURCE, $json)) {
            $type->setValueResource(FHIRResourceReference::jsonUnserialize($json[self::FIELD_VALUE_RESOURCE], $config));
        }
        if (isset($json[self::FIELD_VALUE_SAMPLED_DATA]) || array_key_exists(self::FIELD_VALUE_SAMPLED_DATA, $json)) {
            $type->setValueSampledData(FHIRSampledData::jsonUnserialize($json[self::FIELD_VALUE_SAMPLED_DATA], $config));
        }
        if (isset($json[self::FIELD_VALUE_HUMAN_NAME]) || array_key_exists(self::FIELD_VALUE_HUMAN_NAME, $json)) {
            $type->setValueHumanName(FHIRHumanName::jsonUnserialize($json[self::FIELD_VALUE_HUMAN_NAME], $config));
        }
        if (isset($json[self::FIELD_VALUE_ADDRESS]) || array_key_exists(self::FIELD_VALUE_ADDRESS, $json)) {
            $type->setValueAddress(FHIRAddress::jsonUnserialize($json[self::FIELD_VALUE_ADDRESS], $config));
        }
        if (isset($json[self::FIELD_VALUE_CONTACT])
            || isset($json[self::FIELD_VALUE_CONTACT_EXT])
            || array_key_exists(self::FIELD_VALUE_CONTACT, $json)
            || array_key_exists(self::FIELD_VALUE_CONTACT_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_CONTACT] ?? null;
            $type->setValueContact(FHIRContact::jsonUnserialize(
                (is_array($value) ? $value : [FHIRContact::FIELD_VALUE => $value]) + ($json[self::FIELD_VALUE_CONTACT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_SCHEDULE]) || array_key_exists(self::FIELD_VALUE_SCHEDULE, $json)) {
            $type->setValueSchedule(FHIRSchedule::jsonUnserialize($json[self::FIELD_VALUE_SCHEDULE], $config));
        }
        if (isset($json[self::FIELD_EXAMPLE_BOOLEAN])
            || isset($json[self::FIELD_EXAMPLE_BOOLEAN_EXT])
            || array_key_exists(self::FIELD_EXAMPLE_BOOLEAN, $json)
            || array_key_exists(self::FIELD_EXAMPLE_BOOLEAN_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_BOOLEAN] ?? null;
            $type->setExampleBoolean(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_EXAMPLE_BOOLEAN_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_INTEGER])
            || isset($json[self::FIELD_EXAMPLE_INTEGER_EXT])
            || array_key_exists(self::FIELD_EXAMPLE_INTEGER, $json)
            || array_key_exists(self::FIELD_EXAMPLE_INTEGER_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_INTEGER] ?? null;
            $type->setExampleInteger(FHIRInteger::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInteger::FIELD_VALUE => $value]) + ($json[self::FIELD_EXAMPLE_INTEGER_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_DECIMAL])
            || isset($json[self::FIELD_EXAMPLE_DECIMAL_EXT])
            || array_key_exists(self::FIELD_EXAMPLE_DECIMAL, $json)
            || array_key_exists(self::FIELD_EXAMPLE_DECIMAL_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_DECIMAL] ?? null;
            $type->setExampleDecimal(FHIRDecimal::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDecimal::FIELD_VALUE => $value]) + ($json[self::FIELD_EXAMPLE_DECIMAL_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_BASE_64BINARY])
            || isset($json[self::FIELD_EXAMPLE_BASE_64BINARY_EXT])
            || array_key_exists(self::FIELD_EXAMPLE_BASE_64BINARY, $json)
            || array_key_exists(self::FIELD_EXAMPLE_BASE_64BINARY_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_BASE_64BINARY] ?? null;
            $type->setExampleBase64Binary(FHIRBase64Binary::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBase64Binary::FIELD_VALUE => $value]) + ($json[self::FIELD_EXAMPLE_BASE_64BINARY_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_INSTANT])
            || isset($json[self::FIELD_EXAMPLE_INSTANT_EXT])
            || array_key_exists(self::FIELD_EXAMPLE_INSTANT, $json)
            || array_key_exists(self::FIELD_EXAMPLE_INSTANT_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_INSTANT] ?? null;
            $type->setExampleInstant(FHIRInstant::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInstant::FIELD_VALUE => $value]) + ($json[self::FIELD_EXAMPLE_INSTANT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_STRING])
            || isset($json[self::FIELD_EXAMPLE_STRING_EXT])
            || array_key_exists(self::FIELD_EXAMPLE_STRING, $json)
            || array_key_exists(self::FIELD_EXAMPLE_STRING_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_STRING] ?? null;
            $type->setExampleString(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_EXAMPLE_STRING_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_URI])
            || isset($json[self::FIELD_EXAMPLE_URI_EXT])
            || array_key_exists(self::FIELD_EXAMPLE_URI, $json)
            || array_key_exists(self::FIELD_EXAMPLE_URI_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_URI] ?? null;
            $type->setExampleUri(FHIRUri::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUri::FIELD_VALUE => $value]) + ($json[self::FIELD_EXAMPLE_URI_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_DATE])
            || isset($json[self::FIELD_EXAMPLE_DATE_EXT])
            || array_key_exists(self::FIELD_EXAMPLE_DATE, $json)
            || array_key_exists(self::FIELD_EXAMPLE_DATE_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_DATE] ?? null;
            $type->setExampleDate(FHIRDate::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDate::FIELD_VALUE => $value]) + ($json[self::FIELD_EXAMPLE_DATE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_DATE_TIME])
            || isset($json[self::FIELD_EXAMPLE_DATE_TIME_EXT])
            || array_key_exists(self::FIELD_EXAMPLE_DATE_TIME, $json)
            || array_key_exists(self::FIELD_EXAMPLE_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_DATE_TIME] ?? null;
            $type->setExampleDateTime(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_EXAMPLE_DATE_TIME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_CODE])
            || isset($json[self::FIELD_EXAMPLE_CODE_EXT])
            || array_key_exists(self::FIELD_EXAMPLE_CODE, $json)
            || array_key_exists(self::FIELD_EXAMPLE_CODE_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_CODE] ?? null;
            $type->setExampleCode(FHIRCode::jsonUnserialize(
                (is_array($value) ? $value : [FHIRCode::FIELD_VALUE => $value]) + ($json[self::FIELD_EXAMPLE_CODE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_OID])
            || isset($json[self::FIELD_EXAMPLE_OID_EXT])
            || array_key_exists(self::FIELD_EXAMPLE_OID, $json)
            || array_key_exists(self::FIELD_EXAMPLE_OID_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_OID] ?? null;
            $type->setExampleOid(FHIROid::jsonUnserialize(
                (is_array($value) ? $value : [FHIROid::FIELD_VALUE => $value]) + ($json[self::FIELD_EXAMPLE_OID_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_UUID])
            || isset($json[self::FIELD_EXAMPLE_UUID_EXT])
            || array_key_exists(self::FIELD_EXAMPLE_UUID, $json)
            || array_key_exists(self::FIELD_EXAMPLE_UUID_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_UUID] ?? null;
            $type->setExampleUuid(FHIRUuid::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUuid::FIELD_VALUE => $value]) + ($json[self::FIELD_EXAMPLE_UUID_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_ID])
            || isset($json[self::FIELD_EXAMPLE_ID_EXT])
            || array_key_exists(self::FIELD_EXAMPLE_ID, $json)
            || array_key_exists(self::FIELD_EXAMPLE_ID_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_ID] ?? null;
            $type->setExampleId(FHIRId::jsonUnserialize(
                (is_array($value) ? $value : [FHIRId::FIELD_VALUE => $value]) + ($json[self::FIELD_EXAMPLE_ID_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_ATTACHMENT]) || array_key_exists(self::FIELD_EXAMPLE_ATTACHMENT, $json)) {
            $type->setExampleAttachment(FHIRAttachment::jsonUnserialize($json[self::FIELD_EXAMPLE_ATTACHMENT], $config));
        }
        if (isset($json[self::FIELD_EXAMPLE_IDENTIFIER])
            || isset($json[self::FIELD_EXAMPLE_IDENTIFIER_EXT])
            || array_key_exists(self::FIELD_EXAMPLE_IDENTIFIER, $json)
            || array_key_exists(self::FIELD_EXAMPLE_IDENTIFIER_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_IDENTIFIER] ?? null;
            $type->setExampleIdentifier(FHIRIdentifier::jsonUnserialize(
                (is_array($value) ? $value : [FHIRIdentifier::FIELD_VALUE => $value]) + ($json[self::FIELD_EXAMPLE_IDENTIFIER_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_EXAMPLE_CODEABLE_CONCEPT, $json)) {
            $type->setExampleCodeableConcept(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_EXAMPLE_CODEABLE_CONCEPT], $config));
        }
        if (isset($json[self::FIELD_EXAMPLE_CODING]) || array_key_exists(self::FIELD_EXAMPLE_CODING, $json)) {
            $type->setExampleCoding(FHIRCoding::jsonUnserialize($json[self::FIELD_EXAMPLE_CODING], $config));
        }
        if (isset($json[self::FIELD_EXAMPLE_QUANTITY]) || array_key_exists(self::FIELD_EXAMPLE_QUANTITY, $json)) {
            $type->setExampleQuantity(FHIRQuantity::jsonUnserialize($json[self::FIELD_EXAMPLE_QUANTITY], $config));
        }
        if (isset($json[self::FIELD_EXAMPLE_RANGE]) || array_key_exists(self::FIELD_EXAMPLE_RANGE, $json)) {
            $type->setExampleRange(FHIRRange::jsonUnserialize($json[self::FIELD_EXAMPLE_RANGE], $config));
        }
        if (isset($json[self::FIELD_EXAMPLE_PERIOD]) || array_key_exists(self::FIELD_EXAMPLE_PERIOD, $json)) {
            $type->setExamplePeriod(FHIRPeriod::jsonUnserialize($json[self::FIELD_EXAMPLE_PERIOD], $config));
        }
        if (isset($json[self::FIELD_EXAMPLE_RATIO]) || array_key_exists(self::FIELD_EXAMPLE_RATIO, $json)) {
            $type->setExampleRatio(FHIRRatio::jsonUnserialize($json[self::FIELD_EXAMPLE_RATIO], $config));
        }
        if (isset($json[self::FIELD_EXAMPLE_RESOURCE]) || array_key_exists(self::FIELD_EXAMPLE_RESOURCE, $json)) {
            $type->setExampleResource(FHIRResourceReference::jsonUnserialize($json[self::FIELD_EXAMPLE_RESOURCE], $config));
        }
        if (isset($json[self::FIELD_EXAMPLE_SAMPLED_DATA]) || array_key_exists(self::FIELD_EXAMPLE_SAMPLED_DATA, $json)) {
            $type->setExampleSampledData(FHIRSampledData::jsonUnserialize($json[self::FIELD_EXAMPLE_SAMPLED_DATA], $config));
        }
        if (isset($json[self::FIELD_EXAMPLE_HUMAN_NAME]) || array_key_exists(self::FIELD_EXAMPLE_HUMAN_NAME, $json)) {
            $type->setExampleHumanName(FHIRHumanName::jsonUnserialize($json[self::FIELD_EXAMPLE_HUMAN_NAME], $config));
        }
        if (isset($json[self::FIELD_EXAMPLE_ADDRESS]) || array_key_exists(self::FIELD_EXAMPLE_ADDRESS, $json)) {
            $type->setExampleAddress(FHIRAddress::jsonUnserialize($json[self::FIELD_EXAMPLE_ADDRESS], $config));
        }
        if (isset($json[self::FIELD_EXAMPLE_CONTACT])
            || isset($json[self::FIELD_EXAMPLE_CONTACT_EXT])
            || array_key_exists(self::FIELD_EXAMPLE_CONTACT, $json)
            || array_key_exists(self::FIELD_EXAMPLE_CONTACT_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_CONTACT] ?? null;
            $type->setExampleContact(FHIRContact::jsonUnserialize(
                (is_array($value) ? $value : [FHIRContact::FIELD_VALUE => $value]) + ($json[self::FIELD_EXAMPLE_CONTACT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_SCHEDULE]) || array_key_exists(self::FIELD_EXAMPLE_SCHEDULE, $json)) {
            $type->setExampleSchedule(FHIRSchedule::jsonUnserialize($json[self::FIELD_EXAMPLE_SCHEDULE], $config));
        }
        if (isset($json[self::FIELD_MAX_LENGTH])
            || isset($json[self::FIELD_MAX_LENGTH_EXT])
            || array_key_exists(self::FIELD_MAX_LENGTH, $json)
            || array_key_exists(self::FIELD_MAX_LENGTH_EXT, $json)) {
            $value = $json[self::FIELD_MAX_LENGTH] ?? null;
            $type->setMaxLength(FHIRInteger::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInteger::FIELD_VALUE => $value]) + ($json[self::FIELD_MAX_LENGTH_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_CONDITION])
            || isset($json[self::FIELD_CONDITION_EXT])
            || array_key_exists(self::FIELD_CONDITION, $json)
            || array_key_exists(self::FIELD_CONDITION_EXT, $json)) {
            $value = (array)($json[self::FIELD_CONDITION] ?? []);
            $ext = (array)($json[self::FIELD_CONDITION_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addCondition(FHIRId::jsonUnserialize(
                    [FHIRId::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_CONSTRAINT]) || array_key_exists(self::FIELD_CONSTRAINT, $json)) {
            $vs = $json[self::FIELD_CONSTRAINT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addConstraint(FHIRProfileConstraint::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_MUST_SUPPORT])
            || isset($json[self::FIELD_MUST_SUPPORT_EXT])
            || array_key_exists(self::FIELD_MUST_SUPPORT, $json)
            || array_key_exists(self::FIELD_MUST_SUPPORT_EXT, $json)) {
            $value = $json[self::FIELD_MUST_SUPPORT] ?? null;
            $type->setMustSupport(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_MUST_SUPPORT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_IS_MODIFIER])
            || isset($json[self::FIELD_IS_MODIFIER_EXT])
            || array_key_exists(self::FIELD_IS_MODIFIER, $json)
            || array_key_exists(self::FIELD_IS_MODIFIER_EXT, $json)) {
            $value = $json[self::FIELD_IS_MODIFIER] ?? null;
            $type->setIsModifier(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_IS_MODIFIER_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_BINDING]) || array_key_exists(self::FIELD_BINDING, $json)) {
            $type->setBinding(FHIRProfileBinding::jsonUnserialize($json[self::FIELD_BINDING], $config));
        }
        if (isset($json[self::FIELD_MAPPING]) || array_key_exists(self::FIELD_MAPPING, $json)) {
            $vs = $json[self::FIELD_MAPPING];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addMapping(FHIRProfileMapping1::jsonUnserialize($v, $config));
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
            if (null !== ($val = $this->valueIdentifier->getValue())) {
                $out->valueIdentifier = $val;
            }
            $ext = $this->valueIdentifier->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_valueIdentifier = $ext;
            }
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
            if (null !== ($val = $this->valueContact->getValue())) {
                $out->valueContact = $val;
            }
            $ext = $this->valueContact->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_valueContact = $ext;
            }
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
            if (null !== ($val = $this->exampleIdentifier->getValue())) {
                $out->exampleIdentifier = $val;
            }
            $ext = $this->exampleIdentifier->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_exampleIdentifier = $ext;
            }
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
            if (null !== ($val = $this->exampleContact->getValue())) {
                $out->exampleContact = $val;
            }
            $ext = $this->exampleContact->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_exampleContact = $ext;
            }
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
    /* class_default.php:238 */
    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}