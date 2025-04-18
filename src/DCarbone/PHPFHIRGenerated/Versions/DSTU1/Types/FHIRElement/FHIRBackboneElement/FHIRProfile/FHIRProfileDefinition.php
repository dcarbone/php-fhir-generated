<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 18th, 2025 00:31+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValuePatternMatchRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
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
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;

/**
 * A Resource Profile - a statement of use of one or more FHIR Resources. It may
 * include constraints on Resources and Data Types, Terminology Binding Statements
 * and Extension Definitions.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRProfileDefinition extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_PROFILE_DOT_DEFINITION;

    /* class_default.php:56 */
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

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_ID => [
            ValuePatternMatchRule::NAME => '/^[a-z0-9\\-\\.]{1,36}$/',
        ],
        self::FIELD_SHORT => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_FORMAL => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_MIN => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_MAX => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_IS_MODIFIER => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
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
        self::FIELD_MAX_LENGTH => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MUST_SUPPORT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_IS_MODIFIER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A concise definition that is shown in the generated XML format that summarizes
     * profiles (used throughout the specification).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
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
    #[FHIRString]
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
    #[FHIRString]
    protected FHIRString $comments;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Explains why this element is needed and why it's been constrained as it has.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $requirements;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies additional names by which this element might also be known.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString> 
     */
    #[FHIRString]
    protected array $synonym;
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum number of times this element SHALL appear in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger 
     */
    #[FHIRInteger]
    protected FHIRInteger $min;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $max;
    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * The data type or resource that the value of this element is permitted to be.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileType> 
     */
    #[FHIRProfileType]
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
    #[FHIRString]
    protected FHIRString $nameReference;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean 
     */
    #[FHIRBoolean]
    protected FHIRBoolean $valueBoolean;
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger 
     */
    #[FHIRInteger]
    protected FHIRInteger $valueInteger;
    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal 
     */
    #[FHIRDecimal]
    protected FHIRDecimal $valueDecimal;
    /**
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBase64Binary 
     */
    #[FHIRBase64Binary]
    protected FHIRBase64Binary $valueBase64Binary;
    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant 
     */
    #[FHIRInstant]
    protected FHIRInstant $valueInstant;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $valueString;
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a primitive value that SHALL hold for this element in the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri 
     */
    #[FHIRUri]
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
    #[FHIRDate]
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
    #[FHIRDateTime]
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
    #[FHIRCode]
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
    #[FHIROid]
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
    #[FHIRUuid]
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
    #[FHIRId]
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
    #[FHIRAttachment]
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
    #[FHIRIdentifier]
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
    #[FHIRCodeableConcept]
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
    #[FHIRCoding]
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
    #[FHIRQuantity]
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
    #[FHIRRange]
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
    #[FHIRPeriod]
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
    #[FHIRRatio]
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
    #[FHIRResourceReference]
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
    #[FHIRSampledData]
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
    #[FHIRHumanName]
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
    #[FHIRAddress]
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
    #[FHIRContact]
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
    #[FHIRSchedule]
    protected FHIRSchedule $valueSchedule;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean 
     */
    #[FHIRBoolean]
    protected FHIRBoolean $exampleBoolean;
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger 
     */
    #[FHIRInteger]
    protected FHIRInteger $exampleInteger;
    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal 
     */
    #[FHIRDecimal]
    protected FHIRDecimal $exampleDecimal;
    /**
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBase64Binary 
     */
    #[FHIRBase64Binary]
    protected FHIRBase64Binary $exampleBase64Binary;
    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant 
     */
    #[FHIRInstant]
    protected FHIRInstant $exampleInstant;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $exampleString;
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An example value for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri 
     */
    #[FHIRUri]
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
    #[FHIRDate]
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
    #[FHIRDateTime]
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
    #[FHIRCode]
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
    #[FHIROid]
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
    #[FHIRUuid]
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
    #[FHIRId]
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
    #[FHIRAttachment]
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
    #[FHIRIdentifier]
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
    #[FHIRCodeableConcept]
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
    #[FHIRCoding]
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
    #[FHIRQuantity]
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
    #[FHIRRange]
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
    #[FHIRPeriod]
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
    #[FHIRRatio]
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
    #[FHIRResourceReference]
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
    #[FHIRSampledData]
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
    #[FHIRHumanName]
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
    #[FHIRAddress]
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
    #[FHIRContact]
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
    #[FHIRSchedule]
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
    #[FHIRInteger]
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
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId> 
     */
    #[FHIRId]
    protected array $condition;
    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * Formal constraints such as co-occurrence and other constraints that can be
     * computationally evaluated within the context of the instance.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileConstraint> 
     */
    #[FHIRProfileConstraint]
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
    #[FHIRBoolean]
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
    #[FHIRBoolean]
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
    #[FHIRProfileBinding]
    protected FHIRProfileBinding $binding;
    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * Identifies a concept from an external specification that roughly corresponds to
     * this element.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileMapping1> 
     */
    #[FHIRProfileMapping1]
    protected array $mapping;

    /* constructor.php:61 */
    /**
     * FHIRProfileDefinition Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension> $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $short
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $formal
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $comments
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $requirements
     * @param null|iterable<string>|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive>|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString> $synonym
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $min
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $max
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileType> $type
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $nameReference
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $valueBoolean
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $valueInteger
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal $valueDecimal
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $exampleInteger
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal $exampleDecimal
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $maxLength
     * @param null|iterable<string>|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive>|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId> $condition
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileConstraint> $constraint
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $mustSupport
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $isModifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileBinding $binding
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileMapping1> $mapping
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
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $min = null,
                                null|string|FHIRStringPrimitive|FHIRString $max = null,
                                null|iterable $type = null,
                                null|string|FHIRStringPrimitive|FHIRString $nameReference = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $valueBoolean = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $valueInteger = null,
                                null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $valueDecimal = null,
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
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $exampleInteger = null,
                                null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $exampleDecimal = null,
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
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $maxLength = null,
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

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
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
     * @return static
     */
    public function setShort(null|string|FHIRStringPrimitive|FHIRString $short): self
    {
        if (null === $short) {
            unset($this->short);
            return $this;
        }
        if (!($short instanceof FHIRString)) {
            $short = new FHIRString(value: $short);
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
     * @return static
     */
    public function setFormal(null|string|FHIRStringPrimitive|FHIRString $formal): self
    {
        if (null === $formal) {
            unset($this->formal);
            return $this;
        }
        if (!($formal instanceof FHIRString)) {
            $formal = new FHIRString(value: $formal);
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
     * @return static
     */
    public function setComments(null|string|FHIRStringPrimitive|FHIRString $comments): self
    {
        if (null === $comments) {
            unset($this->comments);
            return $this;
        }
        if (!($comments instanceof FHIRString)) {
            $comments = new FHIRString(value: $comments);
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
     * @return static
     */
    public function setRequirements(null|string|FHIRStringPrimitive|FHIRString $requirements): self
    {
        if (null === $requirements) {
            unset($this->requirements);
            return $this;
        }
        if (!($requirements instanceof FHIRString)) {
            $requirements = new FHIRString(value: $requirements);
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString>
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $min
     * @return static
     */
    public function setMin(null|string|float|FHIRIntegerPrimitive|FHIRInteger $min): self
    {
        if (null === $min) {
            unset($this->min);
            return $this;
        }
        if (!($min instanceof FHIRInteger)) {
            $min = new FHIRInteger(value: $min);
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
     * @return static
     */
    public function setMax(null|string|FHIRStringPrimitive|FHIRString $max): self
    {
        if (null === $max) {
            unset($this->max);
            return $this;
        }
        if (!($max instanceof FHIRString)) {
            $max = new FHIRString(value: $max);
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileType>
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
     * @return static
     */
    public function setNameReference(null|string|FHIRStringPrimitive|FHIRString $nameReference): self
    {
        if (null === $nameReference) {
            unset($this->nameReference);
            return $this;
        }
        if (!($nameReference instanceof FHIRString)) {
            $nameReference = new FHIRString(value: $nameReference);
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
     * @return static
     */
    public function setValueBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $valueBoolean): self
    {
        if (null === $valueBoolean) {
            unset($this->valueBoolean);
            return $this;
        }
        if (!($valueBoolean instanceof FHIRBoolean)) {
            $valueBoolean = new FHIRBoolean(value: $valueBoolean);
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $valueInteger
     * @return static
     */
    public function setValueInteger(null|string|float|FHIRIntegerPrimitive|FHIRInteger $valueInteger): self
    {
        if (null === $valueInteger) {
            unset($this->valueInteger);
            return $this;
        }
        if (!($valueInteger instanceof FHIRInteger)) {
            $valueInteger = new FHIRInteger(value: $valueInteger);
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal $valueDecimal
     * @return static
     */
    public function setValueDecimal(null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $valueDecimal): self
    {
        if (null === $valueDecimal) {
            unset($this->valueDecimal);
            return $this;
        }
        if (!($valueDecimal instanceof FHIRDecimal)) {
            $valueDecimal = new FHIRDecimal(value: $valueDecimal);
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
     * @return static
     */
    public function setValueBase64Binary(null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $valueBase64Binary): self
    {
        if (null === $valueBase64Binary) {
            unset($this->valueBase64Binary);
            return $this;
        }
        if (!($valueBase64Binary instanceof FHIRBase64Binary)) {
            $valueBase64Binary = new FHIRBase64Binary(value: $valueBase64Binary);
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
     * @return static
     */
    public function setValueInstant(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $valueInstant): self
    {
        if (null === $valueInstant) {
            unset($this->valueInstant);
            return $this;
        }
        if (!($valueInstant instanceof FHIRInstant)) {
            $valueInstant = new FHIRInstant(value: $valueInstant);
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
     * @return static
     */
    public function setValueString(null|string|FHIRStringPrimitive|FHIRString $valueString): self
    {
        if (null === $valueString) {
            unset($this->valueString);
            return $this;
        }
        if (!($valueString instanceof FHIRString)) {
            $valueString = new FHIRString(value: $valueString);
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
     * @return static
     */
    public function setValueUri(null|string|FHIRUriPrimitive|FHIRUri $valueUri): self
    {
        if (null === $valueUri) {
            unset($this->valueUri);
            return $this;
        }
        if (!($valueUri instanceof FHIRUri)) {
            $valueUri = new FHIRUri(value: $valueUri);
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
     * @return static
     */
    public function setValueDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $valueDate): self
    {
        if (null === $valueDate) {
            unset($this->valueDate);
            return $this;
        }
        if (!($valueDate instanceof FHIRDate)) {
            $valueDate = new FHIRDate(value: $valueDate);
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
     * @return static
     */
    public function setValueDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $valueDateTime): self
    {
        if (null === $valueDateTime) {
            unset($this->valueDateTime);
            return $this;
        }
        if (!($valueDateTime instanceof FHIRDateTime)) {
            $valueDateTime = new FHIRDateTime(value: $valueDateTime);
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
     * @return static
     */
    public function setValueCode(null|string|FHIRCodePrimitive|FHIRCode $valueCode): self
    {
        if (null === $valueCode) {
            unset($this->valueCode);
            return $this;
        }
        if (!($valueCode instanceof FHIRCode)) {
            $valueCode = new FHIRCode(value: $valueCode);
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
     * @return static
     */
    public function setValueOid(null|string|FHIROidPrimitive|FHIROid $valueOid): self
    {
        if (null === $valueOid) {
            unset($this->valueOid);
            return $this;
        }
        if (!($valueOid instanceof FHIROid)) {
            $valueOid = new FHIROid(value: $valueOid);
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
     * @return static
     */
    public function setValueUuid(null|string|FHIRUuidPrimitive|FHIRUuid $valueUuid): self
    {
        if (null === $valueUuid) {
            unset($this->valueUuid);
            return $this;
        }
        if (!($valueUuid instanceof FHIRUuid)) {
            $valueUuid = new FHIRUuid(value: $valueUuid);
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
     * @return static
     */
    public function setValueId(null|string|FHIRIdPrimitive|FHIRId $valueId): self
    {
        if (null === $valueId) {
            unset($this->valueId);
            return $this;
        }
        if (!($valueId instanceof FHIRId)) {
            $valueId = new FHIRId(value: $valueId);
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
     * @return static
     */
    public function setExampleBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $exampleBoolean): self
    {
        if (null === $exampleBoolean) {
            unset($this->exampleBoolean);
            return $this;
        }
        if (!($exampleBoolean instanceof FHIRBoolean)) {
            $exampleBoolean = new FHIRBoolean(value: $exampleBoolean);
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $exampleInteger
     * @return static
     */
    public function setExampleInteger(null|string|float|FHIRIntegerPrimitive|FHIRInteger $exampleInteger): self
    {
        if (null === $exampleInteger) {
            unset($this->exampleInteger);
            return $this;
        }
        if (!($exampleInteger instanceof FHIRInteger)) {
            $exampleInteger = new FHIRInteger(value: $exampleInteger);
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal $exampleDecimal
     * @return static
     */
    public function setExampleDecimal(null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $exampleDecimal): self
    {
        if (null === $exampleDecimal) {
            unset($this->exampleDecimal);
            return $this;
        }
        if (!($exampleDecimal instanceof FHIRDecimal)) {
            $exampleDecimal = new FHIRDecimal(value: $exampleDecimal);
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
     * @return static
     */
    public function setExampleBase64Binary(null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $exampleBase64Binary): self
    {
        if (null === $exampleBase64Binary) {
            unset($this->exampleBase64Binary);
            return $this;
        }
        if (!($exampleBase64Binary instanceof FHIRBase64Binary)) {
            $exampleBase64Binary = new FHIRBase64Binary(value: $exampleBase64Binary);
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
     * @return static
     */
    public function setExampleInstant(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $exampleInstant): self
    {
        if (null === $exampleInstant) {
            unset($this->exampleInstant);
            return $this;
        }
        if (!($exampleInstant instanceof FHIRInstant)) {
            $exampleInstant = new FHIRInstant(value: $exampleInstant);
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
     * @return static
     */
    public function setExampleString(null|string|FHIRStringPrimitive|FHIRString $exampleString): self
    {
        if (null === $exampleString) {
            unset($this->exampleString);
            return $this;
        }
        if (!($exampleString instanceof FHIRString)) {
            $exampleString = new FHIRString(value: $exampleString);
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
     * @return static
     */
    public function setExampleUri(null|string|FHIRUriPrimitive|FHIRUri $exampleUri): self
    {
        if (null === $exampleUri) {
            unset($this->exampleUri);
            return $this;
        }
        if (!($exampleUri instanceof FHIRUri)) {
            $exampleUri = new FHIRUri(value: $exampleUri);
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
     * @return static
     */
    public function setExampleDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $exampleDate): self
    {
        if (null === $exampleDate) {
            unset($this->exampleDate);
            return $this;
        }
        if (!($exampleDate instanceof FHIRDate)) {
            $exampleDate = new FHIRDate(value: $exampleDate);
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
     * @return static
     */
    public function setExampleDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $exampleDateTime): self
    {
        if (null === $exampleDateTime) {
            unset($this->exampleDateTime);
            return $this;
        }
        if (!($exampleDateTime instanceof FHIRDateTime)) {
            $exampleDateTime = new FHIRDateTime(value: $exampleDateTime);
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
     * @return static
     */
    public function setExampleCode(null|string|FHIRCodePrimitive|FHIRCode $exampleCode): self
    {
        if (null === $exampleCode) {
            unset($this->exampleCode);
            return $this;
        }
        if (!($exampleCode instanceof FHIRCode)) {
            $exampleCode = new FHIRCode(value: $exampleCode);
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
     * @return static
     */
    public function setExampleOid(null|string|FHIROidPrimitive|FHIROid $exampleOid): self
    {
        if (null === $exampleOid) {
            unset($this->exampleOid);
            return $this;
        }
        if (!($exampleOid instanceof FHIROid)) {
            $exampleOid = new FHIROid(value: $exampleOid);
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
     * @return static
     */
    public function setExampleUuid(null|string|FHIRUuidPrimitive|FHIRUuid $exampleUuid): self
    {
        if (null === $exampleUuid) {
            unset($this->exampleUuid);
            return $this;
        }
        if (!($exampleUuid instanceof FHIRUuid)) {
            $exampleUuid = new FHIRUuid(value: $exampleUuid);
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
     * @return static
     */
    public function setExampleId(null|string|FHIRIdPrimitive|FHIRId $exampleId): self
    {
        if (null === $exampleId) {
            unset($this->exampleId);
            return $this;
        }
        if (!($exampleId instanceof FHIRId)) {
            $exampleId = new FHIRId(value: $exampleId);
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $maxLength
     * @return static
     */
    public function setMaxLength(null|string|float|FHIRIntegerPrimitive|FHIRInteger $maxLength): self
    {
        if (null === $maxLength) {
            unset($this->maxLength);
            return $this;
        }
        if (!($maxLength instanceof FHIRInteger)) {
            $maxLength = new FHIRInteger(value: $maxLength);
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId>
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileConstraint>
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
     * @return static
     */
    public function setMustSupport(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $mustSupport): self
    {
        if (null === $mustSupport) {
            unset($this->mustSupport);
            return $this;
        }
        if (!($mustSupport instanceof FHIRBoolean)) {
            $mustSupport = new FHIRBoolean(value: $mustSupport);
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
     * @return static
     */
    public function setIsModifier(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $isModifier): self
    {
        if (null === $isModifier) {
            unset($this->isModifier);
            return $this;
        }
        if (!($isModifier instanceof FHIRBoolean)) {
            $isModifier = new FHIRBoolean(value: $isModifier);
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileMapping1>
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

    /* class_default.php:201 */
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
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
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
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SHORT])) {
            if (isset($type->short)) {
                $type->short->setValue((string)$attributes[self::FIELD_SHORT]);
            } else {
                $type->setShort((string)$attributes[self::FIELD_SHORT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SHORT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FORMAL])) {
            if (isset($type->formal)) {
                $type->formal->setValue((string)$attributes[self::FIELD_FORMAL]);
            } else {
                $type->setFormal((string)$attributes[self::FIELD_FORMAL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FORMAL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_COMMENTS])) {
            if (isset($type->comments)) {
                $type->comments->setValue((string)$attributes[self::FIELD_COMMENTS]);
            } else {
                $type->setComments((string)$attributes[self::FIELD_COMMENTS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_COMMENTS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_REQUIREMENTS])) {
            if (isset($type->requirements)) {
                $type->requirements->setValue((string)$attributes[self::FIELD_REQUIREMENTS]);
            } else {
                $type->setRequirements((string)$attributes[self::FIELD_REQUIREMENTS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_REQUIREMENTS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MIN])) {
            if (isset($type->min)) {
                $type->min->setValue((string)$attributes[self::FIELD_MIN]);
            } else {
                $type->setMin((string)$attributes[self::FIELD_MIN]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MIN, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MAX])) {
            if (isset($type->max)) {
                $type->max->setValue((string)$attributes[self::FIELD_MAX]);
            } else {
                $type->setMax((string)$attributes[self::FIELD_MAX]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MAX, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_NAME_REFERENCE])) {
            if (isset($type->nameReference)) {
                $type->nameReference->setValue((string)$attributes[self::FIELD_NAME_REFERENCE]);
            } else {
                $type->setNameReference((string)$attributes[self::FIELD_NAME_REFERENCE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_NAME_REFERENCE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VALUE_BOOLEAN])) {
            if (isset($type->valueBoolean)) {
                $type->valueBoolean->setValue((string)$attributes[self::FIELD_VALUE_BOOLEAN]);
            } else {
                $type->setValueBoolean((string)$attributes[self::FIELD_VALUE_BOOLEAN]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_VALUE_BOOLEAN, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VALUE_INTEGER])) {
            if (isset($type->valueInteger)) {
                $type->valueInteger->setValue((string)$attributes[self::FIELD_VALUE_INTEGER]);
            } else {
                $type->setValueInteger((string)$attributes[self::FIELD_VALUE_INTEGER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_VALUE_INTEGER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VALUE_DECIMAL])) {
            if (isset($type->valueDecimal)) {
                $type->valueDecimal->setValue((string)$attributes[self::FIELD_VALUE_DECIMAL]);
            } else {
                $type->setValueDecimal((string)$attributes[self::FIELD_VALUE_DECIMAL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_VALUE_DECIMAL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VALUE_BASE_64BINARY])) {
            if (isset($type->valueBase64Binary)) {
                $type->valueBase64Binary->setValue((string)$attributes[self::FIELD_VALUE_BASE_64BINARY]);
            } else {
                $type->setValueBase64Binary((string)$attributes[self::FIELD_VALUE_BASE_64BINARY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_VALUE_BASE_64BINARY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VALUE_INSTANT])) {
            if (isset($type->valueInstant)) {
                $type->valueInstant->setValue((string)$attributes[self::FIELD_VALUE_INSTANT]);
            } else {
                $type->setValueInstant((string)$attributes[self::FIELD_VALUE_INSTANT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_VALUE_INSTANT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VALUE_STRING])) {
            if (isset($type->valueString)) {
                $type->valueString->setValue((string)$attributes[self::FIELD_VALUE_STRING]);
            } else {
                $type->setValueString((string)$attributes[self::FIELD_VALUE_STRING]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_VALUE_STRING, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VALUE_URI])) {
            if (isset($type->valueUri)) {
                $type->valueUri->setValue((string)$attributes[self::FIELD_VALUE_URI]);
            } else {
                $type->setValueUri((string)$attributes[self::FIELD_VALUE_URI]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_VALUE_URI, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VALUE_DATE])) {
            if (isset($type->valueDate)) {
                $type->valueDate->setValue((string)$attributes[self::FIELD_VALUE_DATE]);
            } else {
                $type->setValueDate((string)$attributes[self::FIELD_VALUE_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_VALUE_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VALUE_DATE_TIME])) {
            if (isset($type->valueDateTime)) {
                $type->valueDateTime->setValue((string)$attributes[self::FIELD_VALUE_DATE_TIME]);
            } else {
                $type->setValueDateTime((string)$attributes[self::FIELD_VALUE_DATE_TIME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_VALUE_DATE_TIME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VALUE_CODE])) {
            if (isset($type->valueCode)) {
                $type->valueCode->setValue((string)$attributes[self::FIELD_VALUE_CODE]);
            } else {
                $type->setValueCode((string)$attributes[self::FIELD_VALUE_CODE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_VALUE_CODE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VALUE_OID])) {
            if (isset($type->valueOid)) {
                $type->valueOid->setValue((string)$attributes[self::FIELD_VALUE_OID]);
            } else {
                $type->setValueOid((string)$attributes[self::FIELD_VALUE_OID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_VALUE_OID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VALUE_UUID])) {
            if (isset($type->valueUuid)) {
                $type->valueUuid->setValue((string)$attributes[self::FIELD_VALUE_UUID]);
            } else {
                $type->setValueUuid((string)$attributes[self::FIELD_VALUE_UUID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_VALUE_UUID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VALUE_ID])) {
            if (isset($type->valueId)) {
                $type->valueId->setValue((string)$attributes[self::FIELD_VALUE_ID]);
            } else {
                $type->setValueId((string)$attributes[self::FIELD_VALUE_ID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_VALUE_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EXAMPLE_BOOLEAN])) {
            if (isset($type->exampleBoolean)) {
                $type->exampleBoolean->setValue((string)$attributes[self::FIELD_EXAMPLE_BOOLEAN]);
            } else {
                $type->setExampleBoolean((string)$attributes[self::FIELD_EXAMPLE_BOOLEAN]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_EXAMPLE_BOOLEAN, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EXAMPLE_INTEGER])) {
            if (isset($type->exampleInteger)) {
                $type->exampleInteger->setValue((string)$attributes[self::FIELD_EXAMPLE_INTEGER]);
            } else {
                $type->setExampleInteger((string)$attributes[self::FIELD_EXAMPLE_INTEGER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_EXAMPLE_INTEGER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EXAMPLE_DECIMAL])) {
            if (isset($type->exampleDecimal)) {
                $type->exampleDecimal->setValue((string)$attributes[self::FIELD_EXAMPLE_DECIMAL]);
            } else {
                $type->setExampleDecimal((string)$attributes[self::FIELD_EXAMPLE_DECIMAL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_EXAMPLE_DECIMAL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EXAMPLE_BASE_64BINARY])) {
            if (isset($type->exampleBase64Binary)) {
                $type->exampleBase64Binary->setValue((string)$attributes[self::FIELD_EXAMPLE_BASE_64BINARY]);
            } else {
                $type->setExampleBase64Binary((string)$attributes[self::FIELD_EXAMPLE_BASE_64BINARY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_EXAMPLE_BASE_64BINARY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EXAMPLE_INSTANT])) {
            if (isset($type->exampleInstant)) {
                $type->exampleInstant->setValue((string)$attributes[self::FIELD_EXAMPLE_INSTANT]);
            } else {
                $type->setExampleInstant((string)$attributes[self::FIELD_EXAMPLE_INSTANT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_EXAMPLE_INSTANT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EXAMPLE_STRING])) {
            if (isset($type->exampleString)) {
                $type->exampleString->setValue((string)$attributes[self::FIELD_EXAMPLE_STRING]);
            } else {
                $type->setExampleString((string)$attributes[self::FIELD_EXAMPLE_STRING]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_EXAMPLE_STRING, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EXAMPLE_URI])) {
            if (isset($type->exampleUri)) {
                $type->exampleUri->setValue((string)$attributes[self::FIELD_EXAMPLE_URI]);
            } else {
                $type->setExampleUri((string)$attributes[self::FIELD_EXAMPLE_URI]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_EXAMPLE_URI, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EXAMPLE_DATE])) {
            if (isset($type->exampleDate)) {
                $type->exampleDate->setValue((string)$attributes[self::FIELD_EXAMPLE_DATE]);
            } else {
                $type->setExampleDate((string)$attributes[self::FIELD_EXAMPLE_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_EXAMPLE_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EXAMPLE_DATE_TIME])) {
            if (isset($type->exampleDateTime)) {
                $type->exampleDateTime->setValue((string)$attributes[self::FIELD_EXAMPLE_DATE_TIME]);
            } else {
                $type->setExampleDateTime((string)$attributes[self::FIELD_EXAMPLE_DATE_TIME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_EXAMPLE_DATE_TIME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EXAMPLE_CODE])) {
            if (isset($type->exampleCode)) {
                $type->exampleCode->setValue((string)$attributes[self::FIELD_EXAMPLE_CODE]);
            } else {
                $type->setExampleCode((string)$attributes[self::FIELD_EXAMPLE_CODE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_EXAMPLE_CODE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EXAMPLE_OID])) {
            if (isset($type->exampleOid)) {
                $type->exampleOid->setValue((string)$attributes[self::FIELD_EXAMPLE_OID]);
            } else {
                $type->setExampleOid((string)$attributes[self::FIELD_EXAMPLE_OID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_EXAMPLE_OID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EXAMPLE_UUID])) {
            if (isset($type->exampleUuid)) {
                $type->exampleUuid->setValue((string)$attributes[self::FIELD_EXAMPLE_UUID]);
            } else {
                $type->setExampleUuid((string)$attributes[self::FIELD_EXAMPLE_UUID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_EXAMPLE_UUID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EXAMPLE_ID])) {
            if (isset($type->exampleId)) {
                $type->exampleId->setValue((string)$attributes[self::FIELD_EXAMPLE_ID]);
            } else {
                $type->setExampleId((string)$attributes[self::FIELD_EXAMPLE_ID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_EXAMPLE_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MAX_LENGTH])) {
            if (isset($type->maxLength)) {
                $type->maxLength->setValue((string)$attributes[self::FIELD_MAX_LENGTH]);
            } else {
                $type->setMaxLength((string)$attributes[self::FIELD_MAX_LENGTH]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MAX_LENGTH, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MUST_SUPPORT])) {
            if (isset($type->mustSupport)) {
                $type->mustSupport->setValue((string)$attributes[self::FIELD_MUST_SUPPORT]);
            } else {
                $type->setMustSupport((string)$attributes[self::FIELD_MUST_SUPPORT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MUST_SUPPORT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_IS_MODIFIER])) {
            if (isset($type->isModifier)) {
                $type->isModifier->setValue((string)$attributes[self::FIELD_IS_MODIFIER]);
            } else {
                $type->setIsModifier((string)$attributes[self::FIELD_IS_MODIFIER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_IS_MODIFIER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->writeAttribute(self::FIELD_SHORT, $this->short->_getValueAsString());
        }
        if (isset($this->formal) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FORMAL]) {
            $xw->writeAttribute(self::FIELD_FORMAL, $this->formal->_getValueAsString());
        }
        if (isset($this->comments) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_COMMENTS]) {
            $xw->writeAttribute(self::FIELD_COMMENTS, $this->comments->_getValueAsString());
        }
        if (isset($this->requirements) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_REQUIREMENTS]) {
            $xw->writeAttribute(self::FIELD_REQUIREMENTS, $this->requirements->_getValueAsString());
        }
        if (isset($this->min) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MIN]) {
            $xw->writeAttribute(self::FIELD_MIN, $this->min->_getValueAsString());
        }
        if (isset($this->max) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MAX]) {
            $xw->writeAttribute(self::FIELD_MAX, $this->max->_getValueAsString());
        }
        if (isset($this->nameReference) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NAME_REFERENCE]) {
            $xw->writeAttribute(self::FIELD_NAME_REFERENCE, $this->nameReference->_getValueAsString());
        }
        if (isset($this->valueBoolean) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_BOOLEAN]) {
            $xw->writeAttribute(self::FIELD_VALUE_BOOLEAN, $this->valueBoolean->_getValueAsString());
        }
        if (isset($this->valueInteger) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_INTEGER]) {
            $xw->writeAttribute(self::FIELD_VALUE_INTEGER, $this->valueInteger->_getValueAsString());
        }
        if (isset($this->valueDecimal) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_DECIMAL]) {
            $xw->writeAttribute(self::FIELD_VALUE_DECIMAL, $this->valueDecimal->_getValueAsString());
        }
        if (isset($this->valueBase64Binary) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_BASE_64BINARY]) {
            $xw->writeAttribute(self::FIELD_VALUE_BASE_64BINARY, $this->valueBase64Binary->_getValueAsString());
        }
        if (isset($this->valueInstant) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_INSTANT]) {
            $xw->writeAttribute(self::FIELD_VALUE_INSTANT, $this->valueInstant->_getValueAsString());
        }
        if (isset($this->valueString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_STRING]) {
            $xw->writeAttribute(self::FIELD_VALUE_STRING, $this->valueString->_getValueAsString());
        }
        if (isset($this->valueUri) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_URI]) {
            $xw->writeAttribute(self::FIELD_VALUE_URI, $this->valueUri->_getValueAsString());
        }
        if (isset($this->valueDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_DATE]) {
            $xw->writeAttribute(self::FIELD_VALUE_DATE, $this->valueDate->_getValueAsString());
        }
        if (isset($this->valueDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_VALUE_DATE_TIME, $this->valueDateTime->_getValueAsString());
        }
        if (isset($this->valueCode) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_CODE]) {
            $xw->writeAttribute(self::FIELD_VALUE_CODE, $this->valueCode->_getValueAsString());
        }
        if (isset($this->valueOid) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_OID]) {
            $xw->writeAttribute(self::FIELD_VALUE_OID, $this->valueOid->_getValueAsString());
        }
        if (isset($this->valueUuid) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_UUID]) {
            $xw->writeAttribute(self::FIELD_VALUE_UUID, $this->valueUuid->_getValueAsString());
        }
        if (isset($this->valueId) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_ID]) {
            $xw->writeAttribute(self::FIELD_VALUE_ID, $this->valueId->_getValueAsString());
        }
        if (isset($this->exampleBoolean) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_BOOLEAN]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_BOOLEAN, $this->exampleBoolean->_getValueAsString());
        }
        if (isset($this->exampleInteger) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_INTEGER]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_INTEGER, $this->exampleInteger->_getValueAsString());
        }
        if (isset($this->exampleDecimal) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_DECIMAL]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_DECIMAL, $this->exampleDecimal->_getValueAsString());
        }
        if (isset($this->exampleBase64Binary) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_BASE_64BINARY]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_BASE_64BINARY, $this->exampleBase64Binary->_getValueAsString());
        }
        if (isset($this->exampleInstant) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_INSTANT]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_INSTANT, $this->exampleInstant->_getValueAsString());
        }
        if (isset($this->exampleString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_STRING]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_STRING, $this->exampleString->_getValueAsString());
        }
        if (isset($this->exampleUri) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_URI]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_URI, $this->exampleUri->_getValueAsString());
        }
        if (isset($this->exampleDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_DATE]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_DATE, $this->exampleDate->_getValueAsString());
        }
        if (isset($this->exampleDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_DATE_TIME, $this->exampleDateTime->_getValueAsString());
        }
        if (isset($this->exampleCode) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_CODE]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_CODE, $this->exampleCode->_getValueAsString());
        }
        if (isset($this->exampleOid) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_OID]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_OID, $this->exampleOid->_getValueAsString());
        }
        if (isset($this->exampleUuid) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_UUID]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_UUID, $this->exampleUuid->_getValueAsString());
        }
        if (isset($this->exampleId) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_ID]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_ID, $this->exampleId->_getValueAsString());
        }
        if (isset($this->maxLength) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MAX_LENGTH]) {
            $xw->writeAttribute(self::FIELD_MAX_LENGTH, $this->maxLength->_getValueAsString());
        }
        if (isset($this->mustSupport) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MUST_SUPPORT]) {
            $xw->writeAttribute(self::FIELD_MUST_SUPPORT, $this->mustSupport->_getValueAsString());
        }
        if (isset($this->isModifier) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_IS_MODIFIER]) {
            $xw->writeAttribute(self::FIELD_IS_MODIFIER, $this->isModifier->_getValueAsString());
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
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
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
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->short)
            || isset($decoded->_short)
            || property_exists($decoded, self::FIELD_SHORT)
            || property_exists($decoded, self::FIELD_SHORT_EXT)) {
            $v = $decoded->_short ?? new \stdClass();
            $v->value = $decoded->short ?? null;
            $type->setShort(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->formal)
            || isset($decoded->_formal)
            || property_exists($decoded, self::FIELD_FORMAL)
            || property_exists($decoded, self::FIELD_FORMAL_EXT)) {
            $v = $decoded->_formal ?? new \stdClass();
            $v->value = $decoded->formal ?? null;
            $type->setFormal(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->comments)
            || isset($decoded->_comments)
            || property_exists($decoded, self::FIELD_COMMENTS)
            || property_exists($decoded, self::FIELD_COMMENTS_EXT)) {
            $v = $decoded->_comments ?? new \stdClass();
            $v->value = $decoded->comments ?? null;
            $type->setComments(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->requirements)
            || isset($decoded->_requirements)
            || property_exists($decoded, self::FIELD_REQUIREMENTS)
            || property_exists($decoded, self::FIELD_REQUIREMENTS_EXT)) {
            $v = $decoded->_requirements ?? new \stdClass();
            $v->value = $decoded->requirements ?? null;
            $type->setRequirements(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->synonym)
            || isset($decoded->_synonym)
            || property_exists($decoded, self::FIELD_SYNONYM)
            || property_exists($decoded, self::FIELD_SYNONYM_EXT)) {
            $vals = (array)($decoded->synonym ?? []);
            $exts = (array)($decoded->FIELD_SYNONYM_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addSynonym(FHIRString::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->min)
            || isset($decoded->_min)
            || property_exists($decoded, self::FIELD_MIN)
            || property_exists($decoded, self::FIELD_MIN_EXT)) {
            $v = $decoded->_min ?? new \stdClass();
            $v->value = $decoded->min ?? null;
            $type->setMin(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($decoded->max)
            || isset($decoded->_max)
            || property_exists($decoded, self::FIELD_MAX)
            || property_exists($decoded, self::FIELD_MAX_EXT)) {
            $v = $decoded->_max ?? new \stdClass();
            $v->value = $decoded->max ?? null;
            $type->setMax(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->type) || property_exists($decoded, self::FIELD_TYPE)) {
            if (is_object($decoded->type)) {
                $vals = [$decoded->type];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_TYPE, true);
            } else {
                $vals = $decoded->type;
            }
            foreach($vals as $v) {
                $type->addType(FHIRProfileType::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->nameReference)
            || isset($decoded->_nameReference)
            || property_exists($decoded, self::FIELD_NAME_REFERENCE)
            || property_exists($decoded, self::FIELD_NAME_REFERENCE_EXT)) {
            $v = $decoded->_nameReference ?? new \stdClass();
            $v->value = $decoded->nameReference ?? null;
            $type->setNameReference(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->valueBoolean)
            || isset($decoded->_valueBoolean)
            || property_exists($decoded, self::FIELD_VALUE_BOOLEAN)
            || property_exists($decoded, self::FIELD_VALUE_BOOLEAN_EXT)) {
            $v = $decoded->_valueBoolean ?? new \stdClass();
            $v->value = $decoded->valueBoolean ?? null;
            $type->setValueBoolean(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->valueInteger)
            || isset($decoded->_valueInteger)
            || property_exists($decoded, self::FIELD_VALUE_INTEGER)
            || property_exists($decoded, self::FIELD_VALUE_INTEGER_EXT)) {
            $v = $decoded->_valueInteger ?? new \stdClass();
            $v->value = $decoded->valueInteger ?? null;
            $type->setValueInteger(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($decoded->valueDecimal)
            || isset($decoded->_valueDecimal)
            || property_exists($decoded, self::FIELD_VALUE_DECIMAL)
            || property_exists($decoded, self::FIELD_VALUE_DECIMAL_EXT)) {
            $v = $decoded->_valueDecimal ?? new \stdClass();
            $v->value = $decoded->valueDecimal ?? null;
            $type->setValueDecimal(FHIRDecimal::jsonUnserialize($v, $config));
        }
        if (isset($decoded->valueBase64Binary)
            || isset($decoded->_valueBase64Binary)
            || property_exists($decoded, self::FIELD_VALUE_BASE_64BINARY)
            || property_exists($decoded, self::FIELD_VALUE_BASE_64BINARY_EXT)) {
            $v = $decoded->_valueBase64Binary ?? new \stdClass();
            $v->value = $decoded->valueBase64Binary ?? null;
            $type->setValueBase64Binary(FHIRBase64Binary::jsonUnserialize($v, $config));
        }
        if (isset($decoded->valueInstant)
            || isset($decoded->_valueInstant)
            || property_exists($decoded, self::FIELD_VALUE_INSTANT)
            || property_exists($decoded, self::FIELD_VALUE_INSTANT_EXT)) {
            $v = $decoded->_valueInstant ?? new \stdClass();
            $v->value = $decoded->valueInstant ?? null;
            $type->setValueInstant(FHIRInstant::jsonUnserialize($v, $config));
        }
        if (isset($decoded->valueString)
            || isset($decoded->_valueString)
            || property_exists($decoded, self::FIELD_VALUE_STRING)
            || property_exists($decoded, self::FIELD_VALUE_STRING_EXT)) {
            $v = $decoded->_valueString ?? new \stdClass();
            $v->value = $decoded->valueString ?? null;
            $type->setValueString(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->valueUri)
            || isset($decoded->_valueUri)
            || property_exists($decoded, self::FIELD_VALUE_URI)
            || property_exists($decoded, self::FIELD_VALUE_URI_EXT)) {
            $v = $decoded->_valueUri ?? new \stdClass();
            $v->value = $decoded->valueUri ?? null;
            $type->setValueUri(FHIRUri::jsonUnserialize($v, $config));
        }
        if (isset($decoded->valueDate)
            || isset($decoded->_valueDate)
            || property_exists($decoded, self::FIELD_VALUE_DATE)
            || property_exists($decoded, self::FIELD_VALUE_DATE_EXT)) {
            $v = $decoded->_valueDate ?? new \stdClass();
            $v->value = $decoded->valueDate ?? null;
            $type->setValueDate(FHIRDate::jsonUnserialize($v, $config));
        }
        if (isset($decoded->valueDateTime)
            || isset($decoded->_valueDateTime)
            || property_exists($decoded, self::FIELD_VALUE_DATE_TIME)
            || property_exists($decoded, self::FIELD_VALUE_DATE_TIME_EXT)) {
            $v = $decoded->_valueDateTime ?? new \stdClass();
            $v->value = $decoded->valueDateTime ?? null;
            $type->setValueDateTime(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->valueCode)
            || isset($decoded->_valueCode)
            || property_exists($decoded, self::FIELD_VALUE_CODE)
            || property_exists($decoded, self::FIELD_VALUE_CODE_EXT)) {
            $v = $decoded->_valueCode ?? new \stdClass();
            $v->value = $decoded->valueCode ?? null;
            $type->setValueCode(FHIRCode::jsonUnserialize($v, $config));
        }
        if (isset($decoded->valueOid)
            || isset($decoded->_valueOid)
            || property_exists($decoded, self::FIELD_VALUE_OID)
            || property_exists($decoded, self::FIELD_VALUE_OID_EXT)) {
            $v = $decoded->_valueOid ?? new \stdClass();
            $v->value = $decoded->valueOid ?? null;
            $type->setValueOid(FHIROid::jsonUnserialize($v, $config));
        }
        if (isset($decoded->valueUuid)
            || isset($decoded->_valueUuid)
            || property_exists($decoded, self::FIELD_VALUE_UUID)
            || property_exists($decoded, self::FIELD_VALUE_UUID_EXT)) {
            $v = $decoded->_valueUuid ?? new \stdClass();
            $v->value = $decoded->valueUuid ?? null;
            $type->setValueUuid(FHIRUuid::jsonUnserialize($v, $config));
        }
        if (isset($decoded->valueId)
            || isset($decoded->_valueId)
            || property_exists($decoded, self::FIELD_VALUE_ID)
            || property_exists($decoded, self::FIELD_VALUE_ID_EXT)) {
            $v = $decoded->_valueId ?? new \stdClass();
            $v->value = $decoded->valueId ?? null;
            $type->setValueId(FHIRId::jsonUnserialize($v, $config));
        }
        if (isset($decoded->valueAttachment) || property_exists($decoded, self::FIELD_VALUE_ATTACHMENT)) {
            if (is_array($decoded->valueAttachment)) {
                $type->setValueAttachment(FHIRAttachment::jsonUnserialize(reset($decoded->valueAttachment), $config));
            } else {
                $type->setValueAttachment(FHIRAttachment::jsonUnserialize($decoded->valueAttachment, $config));
            }
        }
        if (isset($decoded->valueIdentifier) || property_exists($decoded, self::FIELD_VALUE_IDENTIFIER)) {
            if (is_array($decoded->valueIdentifier)) {
                $type->setValueIdentifier(FHIRIdentifier::jsonUnserialize(reset($decoded->valueIdentifier), $config));
            } else {
                $type->setValueIdentifier(FHIRIdentifier::jsonUnserialize($decoded->valueIdentifier, $config));
            }
        }
        if (isset($decoded->valueCodeableConcept) || property_exists($decoded, self::FIELD_VALUE_CODEABLE_CONCEPT)) {
            if (is_array($decoded->valueCodeableConcept)) {
                $type->setValueCodeableConcept(FHIRCodeableConcept::jsonUnserialize(reset($decoded->valueCodeableConcept), $config));
            } else {
                $type->setValueCodeableConcept(FHIRCodeableConcept::jsonUnserialize($decoded->valueCodeableConcept, $config));
            }
        }
        if (isset($decoded->valueCoding) || property_exists($decoded, self::FIELD_VALUE_CODING)) {
            if (is_array($decoded->valueCoding)) {
                $type->setValueCoding(FHIRCoding::jsonUnserialize(reset($decoded->valueCoding), $config));
            } else {
                $type->setValueCoding(FHIRCoding::jsonUnserialize($decoded->valueCoding, $config));
            }
        }
        if (isset($decoded->valueQuantity) || property_exists($decoded, self::FIELD_VALUE_QUANTITY)) {
            if (is_array($decoded->valueQuantity)) {
                $type->setValueQuantity(FHIRQuantity::jsonUnserialize(reset($decoded->valueQuantity), $config));
            } else {
                $type->setValueQuantity(FHIRQuantity::jsonUnserialize($decoded->valueQuantity, $config));
            }
        }
        if (isset($decoded->valueRange) || property_exists($decoded, self::FIELD_VALUE_RANGE)) {
            if (is_array($decoded->valueRange)) {
                $type->setValueRange(FHIRRange::jsonUnserialize(reset($decoded->valueRange), $config));
            } else {
                $type->setValueRange(FHIRRange::jsonUnserialize($decoded->valueRange, $config));
            }
        }
        if (isset($decoded->valuePeriod) || property_exists($decoded, self::FIELD_VALUE_PERIOD)) {
            if (is_array($decoded->valuePeriod)) {
                $type->setValuePeriod(FHIRPeriod::jsonUnserialize(reset($decoded->valuePeriod), $config));
            } else {
                $type->setValuePeriod(FHIRPeriod::jsonUnserialize($decoded->valuePeriod, $config));
            }
        }
        if (isset($decoded->valueRatio) || property_exists($decoded, self::FIELD_VALUE_RATIO)) {
            if (is_array($decoded->valueRatio)) {
                $type->setValueRatio(FHIRRatio::jsonUnserialize(reset($decoded->valueRatio), $config));
            } else {
                $type->setValueRatio(FHIRRatio::jsonUnserialize($decoded->valueRatio, $config));
            }
        }
        if (isset($decoded->valueResource) || property_exists($decoded, self::FIELD_VALUE_RESOURCE)) {
            if (is_array($decoded->valueResource)) {
                $type->setValueResource(FHIRResourceReference::jsonUnserialize(reset($decoded->valueResource), $config));
            } else {
                $type->setValueResource(FHIRResourceReference::jsonUnserialize($decoded->valueResource, $config));
            }
        }
        if (isset($decoded->valueSampledData) || property_exists($decoded, self::FIELD_VALUE_SAMPLED_DATA)) {
            if (is_array($decoded->valueSampledData)) {
                $type->setValueSampledData(FHIRSampledData::jsonUnserialize(reset($decoded->valueSampledData), $config));
            } else {
                $type->setValueSampledData(FHIRSampledData::jsonUnserialize($decoded->valueSampledData, $config));
            }
        }
        if (isset($decoded->valueHumanName) || property_exists($decoded, self::FIELD_VALUE_HUMAN_NAME)) {
            if (is_array($decoded->valueHumanName)) {
                $type->setValueHumanName(FHIRHumanName::jsonUnserialize(reset($decoded->valueHumanName), $config));
            } else {
                $type->setValueHumanName(FHIRHumanName::jsonUnserialize($decoded->valueHumanName, $config));
            }
        }
        if (isset($decoded->valueAddress) || property_exists($decoded, self::FIELD_VALUE_ADDRESS)) {
            if (is_array($decoded->valueAddress)) {
                $type->setValueAddress(FHIRAddress::jsonUnserialize(reset($decoded->valueAddress), $config));
            } else {
                $type->setValueAddress(FHIRAddress::jsonUnserialize($decoded->valueAddress, $config));
            }
        }
        if (isset($decoded->valueContact) || property_exists($decoded, self::FIELD_VALUE_CONTACT)) {
            if (is_array($decoded->valueContact)) {
                $type->setValueContact(FHIRContact::jsonUnserialize(reset($decoded->valueContact), $config));
            } else {
                $type->setValueContact(FHIRContact::jsonUnserialize($decoded->valueContact, $config));
            }
        }
        if (isset($decoded->valueSchedule) || property_exists($decoded, self::FIELD_VALUE_SCHEDULE)) {
            if (is_array($decoded->valueSchedule)) {
                $type->setValueSchedule(FHIRSchedule::jsonUnserialize(reset($decoded->valueSchedule), $config));
            } else {
                $type->setValueSchedule(FHIRSchedule::jsonUnserialize($decoded->valueSchedule, $config));
            }
        }
        if (isset($decoded->exampleBoolean)
            || isset($decoded->_exampleBoolean)
            || property_exists($decoded, self::FIELD_EXAMPLE_BOOLEAN)
            || property_exists($decoded, self::FIELD_EXAMPLE_BOOLEAN_EXT)) {
            $v = $decoded->_exampleBoolean ?? new \stdClass();
            $v->value = $decoded->exampleBoolean ?? null;
            $type->setExampleBoolean(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->exampleInteger)
            || isset($decoded->_exampleInteger)
            || property_exists($decoded, self::FIELD_EXAMPLE_INTEGER)
            || property_exists($decoded, self::FIELD_EXAMPLE_INTEGER_EXT)) {
            $v = $decoded->_exampleInteger ?? new \stdClass();
            $v->value = $decoded->exampleInteger ?? null;
            $type->setExampleInteger(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($decoded->exampleDecimal)
            || isset($decoded->_exampleDecimal)
            || property_exists($decoded, self::FIELD_EXAMPLE_DECIMAL)
            || property_exists($decoded, self::FIELD_EXAMPLE_DECIMAL_EXT)) {
            $v = $decoded->_exampleDecimal ?? new \stdClass();
            $v->value = $decoded->exampleDecimal ?? null;
            $type->setExampleDecimal(FHIRDecimal::jsonUnserialize($v, $config));
        }
        if (isset($decoded->exampleBase64Binary)
            || isset($decoded->_exampleBase64Binary)
            || property_exists($decoded, self::FIELD_EXAMPLE_BASE_64BINARY)
            || property_exists($decoded, self::FIELD_EXAMPLE_BASE_64BINARY_EXT)) {
            $v = $decoded->_exampleBase64Binary ?? new \stdClass();
            $v->value = $decoded->exampleBase64Binary ?? null;
            $type->setExampleBase64Binary(FHIRBase64Binary::jsonUnserialize($v, $config));
        }
        if (isset($decoded->exampleInstant)
            || isset($decoded->_exampleInstant)
            || property_exists($decoded, self::FIELD_EXAMPLE_INSTANT)
            || property_exists($decoded, self::FIELD_EXAMPLE_INSTANT_EXT)) {
            $v = $decoded->_exampleInstant ?? new \stdClass();
            $v->value = $decoded->exampleInstant ?? null;
            $type->setExampleInstant(FHIRInstant::jsonUnserialize($v, $config));
        }
        if (isset($decoded->exampleString)
            || isset($decoded->_exampleString)
            || property_exists($decoded, self::FIELD_EXAMPLE_STRING)
            || property_exists($decoded, self::FIELD_EXAMPLE_STRING_EXT)) {
            $v = $decoded->_exampleString ?? new \stdClass();
            $v->value = $decoded->exampleString ?? null;
            $type->setExampleString(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->exampleUri)
            || isset($decoded->_exampleUri)
            || property_exists($decoded, self::FIELD_EXAMPLE_URI)
            || property_exists($decoded, self::FIELD_EXAMPLE_URI_EXT)) {
            $v = $decoded->_exampleUri ?? new \stdClass();
            $v->value = $decoded->exampleUri ?? null;
            $type->setExampleUri(FHIRUri::jsonUnserialize($v, $config));
        }
        if (isset($decoded->exampleDate)
            || isset($decoded->_exampleDate)
            || property_exists($decoded, self::FIELD_EXAMPLE_DATE)
            || property_exists($decoded, self::FIELD_EXAMPLE_DATE_EXT)) {
            $v = $decoded->_exampleDate ?? new \stdClass();
            $v->value = $decoded->exampleDate ?? null;
            $type->setExampleDate(FHIRDate::jsonUnserialize($v, $config));
        }
        if (isset($decoded->exampleDateTime)
            || isset($decoded->_exampleDateTime)
            || property_exists($decoded, self::FIELD_EXAMPLE_DATE_TIME)
            || property_exists($decoded, self::FIELD_EXAMPLE_DATE_TIME_EXT)) {
            $v = $decoded->_exampleDateTime ?? new \stdClass();
            $v->value = $decoded->exampleDateTime ?? null;
            $type->setExampleDateTime(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->exampleCode)
            || isset($decoded->_exampleCode)
            || property_exists($decoded, self::FIELD_EXAMPLE_CODE)
            || property_exists($decoded, self::FIELD_EXAMPLE_CODE_EXT)) {
            $v = $decoded->_exampleCode ?? new \stdClass();
            $v->value = $decoded->exampleCode ?? null;
            $type->setExampleCode(FHIRCode::jsonUnserialize($v, $config));
        }
        if (isset($decoded->exampleOid)
            || isset($decoded->_exampleOid)
            || property_exists($decoded, self::FIELD_EXAMPLE_OID)
            || property_exists($decoded, self::FIELD_EXAMPLE_OID_EXT)) {
            $v = $decoded->_exampleOid ?? new \stdClass();
            $v->value = $decoded->exampleOid ?? null;
            $type->setExampleOid(FHIROid::jsonUnserialize($v, $config));
        }
        if (isset($decoded->exampleUuid)
            || isset($decoded->_exampleUuid)
            || property_exists($decoded, self::FIELD_EXAMPLE_UUID)
            || property_exists($decoded, self::FIELD_EXAMPLE_UUID_EXT)) {
            $v = $decoded->_exampleUuid ?? new \stdClass();
            $v->value = $decoded->exampleUuid ?? null;
            $type->setExampleUuid(FHIRUuid::jsonUnserialize($v, $config));
        }
        if (isset($decoded->exampleId)
            || isset($decoded->_exampleId)
            || property_exists($decoded, self::FIELD_EXAMPLE_ID)
            || property_exists($decoded, self::FIELD_EXAMPLE_ID_EXT)) {
            $v = $decoded->_exampleId ?? new \stdClass();
            $v->value = $decoded->exampleId ?? null;
            $type->setExampleId(FHIRId::jsonUnserialize($v, $config));
        }
        if (isset($decoded->exampleAttachment) || property_exists($decoded, self::FIELD_EXAMPLE_ATTACHMENT)) {
            if (is_array($decoded->exampleAttachment)) {
                $type->setExampleAttachment(FHIRAttachment::jsonUnserialize(reset($decoded->exampleAttachment), $config));
            } else {
                $type->setExampleAttachment(FHIRAttachment::jsonUnserialize($decoded->exampleAttachment, $config));
            }
        }
        if (isset($decoded->exampleIdentifier) || property_exists($decoded, self::FIELD_EXAMPLE_IDENTIFIER)) {
            if (is_array($decoded->exampleIdentifier)) {
                $type->setExampleIdentifier(FHIRIdentifier::jsonUnserialize(reset($decoded->exampleIdentifier), $config));
            } else {
                $type->setExampleIdentifier(FHIRIdentifier::jsonUnserialize($decoded->exampleIdentifier, $config));
            }
        }
        if (isset($decoded->exampleCodeableConcept) || property_exists($decoded, self::FIELD_EXAMPLE_CODEABLE_CONCEPT)) {
            if (is_array($decoded->exampleCodeableConcept)) {
                $type->setExampleCodeableConcept(FHIRCodeableConcept::jsonUnserialize(reset($decoded->exampleCodeableConcept), $config));
            } else {
                $type->setExampleCodeableConcept(FHIRCodeableConcept::jsonUnserialize($decoded->exampleCodeableConcept, $config));
            }
        }
        if (isset($decoded->exampleCoding) || property_exists($decoded, self::FIELD_EXAMPLE_CODING)) {
            if (is_array($decoded->exampleCoding)) {
                $type->setExampleCoding(FHIRCoding::jsonUnserialize(reset($decoded->exampleCoding), $config));
            } else {
                $type->setExampleCoding(FHIRCoding::jsonUnserialize($decoded->exampleCoding, $config));
            }
        }
        if (isset($decoded->exampleQuantity) || property_exists($decoded, self::FIELD_EXAMPLE_QUANTITY)) {
            if (is_array($decoded->exampleQuantity)) {
                $type->setExampleQuantity(FHIRQuantity::jsonUnserialize(reset($decoded->exampleQuantity), $config));
            } else {
                $type->setExampleQuantity(FHIRQuantity::jsonUnserialize($decoded->exampleQuantity, $config));
            }
        }
        if (isset($decoded->exampleRange) || property_exists($decoded, self::FIELD_EXAMPLE_RANGE)) {
            if (is_array($decoded->exampleRange)) {
                $type->setExampleRange(FHIRRange::jsonUnserialize(reset($decoded->exampleRange), $config));
            } else {
                $type->setExampleRange(FHIRRange::jsonUnserialize($decoded->exampleRange, $config));
            }
        }
        if (isset($decoded->examplePeriod) || property_exists($decoded, self::FIELD_EXAMPLE_PERIOD)) {
            if (is_array($decoded->examplePeriod)) {
                $type->setExamplePeriod(FHIRPeriod::jsonUnserialize(reset($decoded->examplePeriod), $config));
            } else {
                $type->setExamplePeriod(FHIRPeriod::jsonUnserialize($decoded->examplePeriod, $config));
            }
        }
        if (isset($decoded->exampleRatio) || property_exists($decoded, self::FIELD_EXAMPLE_RATIO)) {
            if (is_array($decoded->exampleRatio)) {
                $type->setExampleRatio(FHIRRatio::jsonUnserialize(reset($decoded->exampleRatio), $config));
            } else {
                $type->setExampleRatio(FHIRRatio::jsonUnserialize($decoded->exampleRatio, $config));
            }
        }
        if (isset($decoded->exampleResource) || property_exists($decoded, self::FIELD_EXAMPLE_RESOURCE)) {
            if (is_array($decoded->exampleResource)) {
                $type->setExampleResource(FHIRResourceReference::jsonUnserialize(reset($decoded->exampleResource), $config));
            } else {
                $type->setExampleResource(FHIRResourceReference::jsonUnserialize($decoded->exampleResource, $config));
            }
        }
        if (isset($decoded->exampleSampledData) || property_exists($decoded, self::FIELD_EXAMPLE_SAMPLED_DATA)) {
            if (is_array($decoded->exampleSampledData)) {
                $type->setExampleSampledData(FHIRSampledData::jsonUnserialize(reset($decoded->exampleSampledData), $config));
            } else {
                $type->setExampleSampledData(FHIRSampledData::jsonUnserialize($decoded->exampleSampledData, $config));
            }
        }
        if (isset($decoded->exampleHumanName) || property_exists($decoded, self::FIELD_EXAMPLE_HUMAN_NAME)) {
            if (is_array($decoded->exampleHumanName)) {
                $type->setExampleHumanName(FHIRHumanName::jsonUnserialize(reset($decoded->exampleHumanName), $config));
            } else {
                $type->setExampleHumanName(FHIRHumanName::jsonUnserialize($decoded->exampleHumanName, $config));
            }
        }
        if (isset($decoded->exampleAddress) || property_exists($decoded, self::FIELD_EXAMPLE_ADDRESS)) {
            if (is_array($decoded->exampleAddress)) {
                $type->setExampleAddress(FHIRAddress::jsonUnserialize(reset($decoded->exampleAddress), $config));
            } else {
                $type->setExampleAddress(FHIRAddress::jsonUnserialize($decoded->exampleAddress, $config));
            }
        }
        if (isset($decoded->exampleContact) || property_exists($decoded, self::FIELD_EXAMPLE_CONTACT)) {
            if (is_array($decoded->exampleContact)) {
                $type->setExampleContact(FHIRContact::jsonUnserialize(reset($decoded->exampleContact), $config));
            } else {
                $type->setExampleContact(FHIRContact::jsonUnserialize($decoded->exampleContact, $config));
            }
        }
        if (isset($decoded->exampleSchedule) || property_exists($decoded, self::FIELD_EXAMPLE_SCHEDULE)) {
            if (is_array($decoded->exampleSchedule)) {
                $type->setExampleSchedule(FHIRSchedule::jsonUnserialize(reset($decoded->exampleSchedule), $config));
            } else {
                $type->setExampleSchedule(FHIRSchedule::jsonUnserialize($decoded->exampleSchedule, $config));
            }
        }
        if (isset($decoded->maxLength)
            || isset($decoded->_maxLength)
            || property_exists($decoded, self::FIELD_MAX_LENGTH)
            || property_exists($decoded, self::FIELD_MAX_LENGTH_EXT)) {
            $v = $decoded->_maxLength ?? new \stdClass();
            $v->value = $decoded->maxLength ?? null;
            $type->setMaxLength(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($decoded->condition)
            || isset($decoded->_condition)
            || property_exists($decoded, self::FIELD_CONDITION)
            || property_exists($decoded, self::FIELD_CONDITION_EXT)) {
            $vals = (array)($decoded->condition ?? []);
            $exts = (array)($decoded->FIELD_CONDITION_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addCondition(FHIRId::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->constraint) || property_exists($decoded, self::FIELD_CONSTRAINT)) {
            if (is_object($decoded->constraint)) {
                $vals = [$decoded->constraint];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CONSTRAINT, true);
            } else {
                $vals = $decoded->constraint;
            }
            foreach($vals as $v) {
                $type->addConstraint(FHIRProfileConstraint::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->mustSupport)
            || isset($decoded->_mustSupport)
            || property_exists($decoded, self::FIELD_MUST_SUPPORT)
            || property_exists($decoded, self::FIELD_MUST_SUPPORT_EXT)) {
            $v = $decoded->_mustSupport ?? new \stdClass();
            $v->value = $decoded->mustSupport ?? null;
            $type->setMustSupport(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->isModifier)
            || isset($decoded->_isModifier)
            || property_exists($decoded, self::FIELD_IS_MODIFIER)
            || property_exists($decoded, self::FIELD_IS_MODIFIER_EXT)) {
            $v = $decoded->_isModifier ?? new \stdClass();
            $v->value = $decoded->isModifier ?? null;
            $type->setIsModifier(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->binding) || property_exists($decoded, self::FIELD_BINDING)) {
            if (is_array($decoded->binding)) {
                $type->setBinding(FHIRProfileBinding::jsonUnserialize(reset($decoded->binding), $config));
            } else {
                $type->setBinding(FHIRProfileBinding::jsonUnserialize($decoded->binding, $config));
            }
        }
        if (isset($decoded->mapping) || property_exists($decoded, self::FIELD_MAPPING)) {
            if (is_object($decoded->mapping)) {
                $vals = [$decoded->mapping];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_MAPPING, true);
            } else {
                $vals = $decoded->mapping;
            }
            foreach($vals as $v) {
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
            if ($this->short->_nonValueFieldDefined()) {
                $ext = $this->short->jsonSerialize();
                unset($ext->value);
                $out->_short = $ext;
            }
        }
        if (isset($this->formal)) {
            if (null !== ($val = $this->formal->getValue())) {
                $out->formal = $val;
            }
            if ($this->formal->_nonValueFieldDefined()) {
                $ext = $this->formal->jsonSerialize();
                unset($ext->value);
                $out->_formal = $ext;
            }
        }
        if (isset($this->comments)) {
            if (null !== ($val = $this->comments->getValue())) {
                $out->comments = $val;
            }
            if ($this->comments->_nonValueFieldDefined()) {
                $ext = $this->comments->jsonSerialize();
                unset($ext->value);
                $out->_comments = $ext;
            }
        }
        if (isset($this->requirements)) {
            if (null !== ($val = $this->requirements->getValue())) {
                $out->requirements = $val;
            }
            if ($this->requirements->_nonValueFieldDefined()) {
                $ext = $this->requirements->jsonSerialize();
                unset($ext->value);
                $out->_requirements = $ext;
            }
        }
        if (isset($this->synonym) && [] !== $this->synonym) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->synonym as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->synonym = $vals;
            }
            if ($hasExts) {
                $out->_synonym = $exts;
            }
        }
        if (isset($this->min)) {
            if (null !== ($val = $this->min->getValue())) {
                $out->min = $val;
            }
            if ($this->min->_nonValueFieldDefined()) {
                $ext = $this->min->jsonSerialize();
                unset($ext->value);
                $out->_min = $ext;
            }
        }
        if (isset($this->max)) {
            if (null !== ($val = $this->max->getValue())) {
                $out->max = $val;
            }
            if ($this->max->_nonValueFieldDefined()) {
                $ext = $this->max->jsonSerialize();
                unset($ext->value);
                $out->_max = $ext;
            }
        }
        if (isset($this->type) && [] !== $this->type) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_TYPE) && 1 === count($this->type)) {
                $out->type = $this->type[0];
            } else {
                $out->type = $this->type;
            }
        }
        if (isset($this->nameReference)) {
            if (null !== ($val = $this->nameReference->getValue())) {
                $out->nameReference = $val;
            }
            if ($this->nameReference->_nonValueFieldDefined()) {
                $ext = $this->nameReference->jsonSerialize();
                unset($ext->value);
                $out->_nameReference = $ext;
            }
        }
        if (isset($this->valueBoolean)) {
            if (null !== ($val = $this->valueBoolean->getValue())) {
                $out->valueBoolean = $val;
            }
            if ($this->valueBoolean->_nonValueFieldDefined()) {
                $ext = $this->valueBoolean->jsonSerialize();
                unset($ext->value);
                $out->_valueBoolean = $ext;
            }
        }
        if (isset($this->valueInteger)) {
            if (null !== ($val = $this->valueInteger->getValue())) {
                $out->valueInteger = $val;
            }
            if ($this->valueInteger->_nonValueFieldDefined()) {
                $ext = $this->valueInteger->jsonSerialize();
                unset($ext->value);
                $out->_valueInteger = $ext;
            }
        }
        if (isset($this->valueDecimal)) {
            if (null !== ($val = $this->valueDecimal->getValue())) {
                $out->valueDecimal = $val;
            }
            if ($this->valueDecimal->_nonValueFieldDefined()) {
                $ext = $this->valueDecimal->jsonSerialize();
                unset($ext->value);
                $out->_valueDecimal = $ext;
            }
        }
        if (isset($this->valueBase64Binary)) {
            if (null !== ($val = $this->valueBase64Binary->getValue())) {
                $out->valueBase64Binary = $val;
            }
            if ($this->valueBase64Binary->_nonValueFieldDefined()) {
                $ext = $this->valueBase64Binary->jsonSerialize();
                unset($ext->value);
                $out->_valueBase64Binary = $ext;
            }
        }
        if (isset($this->valueInstant)) {
            if (null !== ($val = $this->valueInstant->getValue())) {
                $out->valueInstant = $val;
            }
            if ($this->valueInstant->_nonValueFieldDefined()) {
                $ext = $this->valueInstant->jsonSerialize();
                unset($ext->value);
                $out->_valueInstant = $ext;
            }
        }
        if (isset($this->valueString)) {
            if (null !== ($val = $this->valueString->getValue())) {
                $out->valueString = $val;
            }
            if ($this->valueString->_nonValueFieldDefined()) {
                $ext = $this->valueString->jsonSerialize();
                unset($ext->value);
                $out->_valueString = $ext;
            }
        }
        if (isset($this->valueUri)) {
            if (null !== ($val = $this->valueUri->getValue())) {
                $out->valueUri = $val;
            }
            if ($this->valueUri->_nonValueFieldDefined()) {
                $ext = $this->valueUri->jsonSerialize();
                unset($ext->value);
                $out->_valueUri = $ext;
            }
        }
        if (isset($this->valueDate)) {
            if (null !== ($val = $this->valueDate->getValue())) {
                $out->valueDate = $val;
            }
            if ($this->valueDate->_nonValueFieldDefined()) {
                $ext = $this->valueDate->jsonSerialize();
                unset($ext->value);
                $out->_valueDate = $ext;
            }
        }
        if (isset($this->valueDateTime)) {
            if (null !== ($val = $this->valueDateTime->getValue())) {
                $out->valueDateTime = $val;
            }
            if ($this->valueDateTime->_nonValueFieldDefined()) {
                $ext = $this->valueDateTime->jsonSerialize();
                unset($ext->value);
                $out->_valueDateTime = $ext;
            }
        }
        if (isset($this->valueCode)) {
            if (null !== ($val = $this->valueCode->getValue())) {
                $out->valueCode = $val;
            }
            if ($this->valueCode->_nonValueFieldDefined()) {
                $ext = $this->valueCode->jsonSerialize();
                unset($ext->value);
                $out->_valueCode = $ext;
            }
        }
        if (isset($this->valueOid)) {
            if (null !== ($val = $this->valueOid->getValue())) {
                $out->valueOid = $val;
            }
            if ($this->valueOid->_nonValueFieldDefined()) {
                $ext = $this->valueOid->jsonSerialize();
                unset($ext->value);
                $out->_valueOid = $ext;
            }
        }
        if (isset($this->valueUuid)) {
            if (null !== ($val = $this->valueUuid->getValue())) {
                $out->valueUuid = $val;
            }
            if ($this->valueUuid->_nonValueFieldDefined()) {
                $ext = $this->valueUuid->jsonSerialize();
                unset($ext->value);
                $out->_valueUuid = $ext;
            }
        }
        if (isset($this->valueId)) {
            if (null !== ($val = $this->valueId->getValue())) {
                $out->valueId = $val;
            }
            if ($this->valueId->_nonValueFieldDefined()) {
                $ext = $this->valueId->jsonSerialize();
                unset($ext->value);
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
            if ($this->exampleBoolean->_nonValueFieldDefined()) {
                $ext = $this->exampleBoolean->jsonSerialize();
                unset($ext->value);
                $out->_exampleBoolean = $ext;
            }
        }
        if (isset($this->exampleInteger)) {
            if (null !== ($val = $this->exampleInteger->getValue())) {
                $out->exampleInteger = $val;
            }
            if ($this->exampleInteger->_nonValueFieldDefined()) {
                $ext = $this->exampleInteger->jsonSerialize();
                unset($ext->value);
                $out->_exampleInteger = $ext;
            }
        }
        if (isset($this->exampleDecimal)) {
            if (null !== ($val = $this->exampleDecimal->getValue())) {
                $out->exampleDecimal = $val;
            }
            if ($this->exampleDecimal->_nonValueFieldDefined()) {
                $ext = $this->exampleDecimal->jsonSerialize();
                unset($ext->value);
                $out->_exampleDecimal = $ext;
            }
        }
        if (isset($this->exampleBase64Binary)) {
            if (null !== ($val = $this->exampleBase64Binary->getValue())) {
                $out->exampleBase64Binary = $val;
            }
            if ($this->exampleBase64Binary->_nonValueFieldDefined()) {
                $ext = $this->exampleBase64Binary->jsonSerialize();
                unset($ext->value);
                $out->_exampleBase64Binary = $ext;
            }
        }
        if (isset($this->exampleInstant)) {
            if (null !== ($val = $this->exampleInstant->getValue())) {
                $out->exampleInstant = $val;
            }
            if ($this->exampleInstant->_nonValueFieldDefined()) {
                $ext = $this->exampleInstant->jsonSerialize();
                unset($ext->value);
                $out->_exampleInstant = $ext;
            }
        }
        if (isset($this->exampleString)) {
            if (null !== ($val = $this->exampleString->getValue())) {
                $out->exampleString = $val;
            }
            if ($this->exampleString->_nonValueFieldDefined()) {
                $ext = $this->exampleString->jsonSerialize();
                unset($ext->value);
                $out->_exampleString = $ext;
            }
        }
        if (isset($this->exampleUri)) {
            if (null !== ($val = $this->exampleUri->getValue())) {
                $out->exampleUri = $val;
            }
            if ($this->exampleUri->_nonValueFieldDefined()) {
                $ext = $this->exampleUri->jsonSerialize();
                unset($ext->value);
                $out->_exampleUri = $ext;
            }
        }
        if (isset($this->exampleDate)) {
            if (null !== ($val = $this->exampleDate->getValue())) {
                $out->exampleDate = $val;
            }
            if ($this->exampleDate->_nonValueFieldDefined()) {
                $ext = $this->exampleDate->jsonSerialize();
                unset($ext->value);
                $out->_exampleDate = $ext;
            }
        }
        if (isset($this->exampleDateTime)) {
            if (null !== ($val = $this->exampleDateTime->getValue())) {
                $out->exampleDateTime = $val;
            }
            if ($this->exampleDateTime->_nonValueFieldDefined()) {
                $ext = $this->exampleDateTime->jsonSerialize();
                unset($ext->value);
                $out->_exampleDateTime = $ext;
            }
        }
        if (isset($this->exampleCode)) {
            if (null !== ($val = $this->exampleCode->getValue())) {
                $out->exampleCode = $val;
            }
            if ($this->exampleCode->_nonValueFieldDefined()) {
                $ext = $this->exampleCode->jsonSerialize();
                unset($ext->value);
                $out->_exampleCode = $ext;
            }
        }
        if (isset($this->exampleOid)) {
            if (null !== ($val = $this->exampleOid->getValue())) {
                $out->exampleOid = $val;
            }
            if ($this->exampleOid->_nonValueFieldDefined()) {
                $ext = $this->exampleOid->jsonSerialize();
                unset($ext->value);
                $out->_exampleOid = $ext;
            }
        }
        if (isset($this->exampleUuid)) {
            if (null !== ($val = $this->exampleUuid->getValue())) {
                $out->exampleUuid = $val;
            }
            if ($this->exampleUuid->_nonValueFieldDefined()) {
                $ext = $this->exampleUuid->jsonSerialize();
                unset($ext->value);
                $out->_exampleUuid = $ext;
            }
        }
        if (isset($this->exampleId)) {
            if (null !== ($val = $this->exampleId->getValue())) {
                $out->exampleId = $val;
            }
            if ($this->exampleId->_nonValueFieldDefined()) {
                $ext = $this->exampleId->jsonSerialize();
                unset($ext->value);
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
            if ($this->maxLength->_nonValueFieldDefined()) {
                $ext = $this->maxLength->jsonSerialize();
                unset($ext->value);
                $out->_maxLength = $ext;
            }
        }
        if (isset($this->condition) && [] !== $this->condition) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->condition as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->condition = $vals;
            }
            if ($hasExts) {
                $out->_condition = $exts;
            }
        }
        if (isset($this->constraint) && [] !== $this->constraint) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CONSTRAINT) && 1 === count($this->constraint)) {
                $out->constraint = $this->constraint[0];
            } else {
                $out->constraint = $this->constraint;
            }
        }
        if (isset($this->mustSupport)) {
            if (null !== ($val = $this->mustSupport->getValue())) {
                $out->mustSupport = $val;
            }
            if ($this->mustSupport->_nonValueFieldDefined()) {
                $ext = $this->mustSupport->jsonSerialize();
                unset($ext->value);
                $out->_mustSupport = $ext;
            }
        }
        if (isset($this->isModifier)) {
            if (null !== ($val = $this->isModifier->getValue())) {
                $out->isModifier = $val;
            }
            if ($this->isModifier->_nonValueFieldDefined()) {
                $ext = $this->isModifier->jsonSerialize();
                unset($ext->value);
                $out->_isModifier = $ext;
            }
        }
        if (isset($this->binding)) {
            $out->binding = $this->binding;
        }
        if (isset($this->mapping) && [] !== $this->mapping) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_MAPPING) && 1 === count($this->mapping)) {
                $out->mapping = $this->mapping[0];
            } else {
                $out->mapping = $this->mapping;
            }
        }
        return $out;
    }
}