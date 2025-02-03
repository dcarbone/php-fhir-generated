<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 3rd, 2025 17:37+0000
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase64BinaryPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBase64Binary;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRCount;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDistance;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger64;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIROid;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRTime;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUuid;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRInteger64Primitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIROidPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUrlPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUuidPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Optional Extension Element - found in all resources.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
class FHIRExtension extends FHIRDataType
{
    use TypeValidationsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_EXTENSION;

    /* class_default.php:47 */
    public const FIELD_VALUE_BASE_64BINARY = 'valueBase64Binary';
    public const FIELD_VALUE_BASE_64BINARY_EXT = '_valueBase64Binary';
    public const FIELD_VALUE_BOOLEAN = 'valueBoolean';
    public const FIELD_VALUE_BOOLEAN_EXT = '_valueBoolean';
    public const FIELD_VALUE_CANONICAL = 'valueCanonical';
    public const FIELD_VALUE_CANONICAL_EXT = '_valueCanonical';
    public const FIELD_VALUE_CODE = 'valueCode';
    public const FIELD_VALUE_CODE_EXT = '_valueCode';
    public const FIELD_VALUE_DATE = 'valueDate';
    public const FIELD_VALUE_DATE_EXT = '_valueDate';
    public const FIELD_VALUE_DATE_TIME = 'valueDateTime';
    public const FIELD_VALUE_DATE_TIME_EXT = '_valueDateTime';
    public const FIELD_VALUE_DECIMAL = 'valueDecimal';
    public const FIELD_VALUE_DECIMAL_EXT = '_valueDecimal';
    public const FIELD_VALUE_ID = 'valueId';
    public const FIELD_VALUE_ID_EXT = '_valueId';
    public const FIELD_VALUE_INSTANT = 'valueInstant';
    public const FIELD_VALUE_INSTANT_EXT = '_valueInstant';
    public const FIELD_VALUE_INTEGER = 'valueInteger';
    public const FIELD_VALUE_INTEGER_EXT = '_valueInteger';
    public const FIELD_VALUE_INTEGER_64 = 'valueInteger64';
    public const FIELD_VALUE_INTEGER_64_EXT = '_valueInteger64';
    public const FIELD_VALUE_MARKDOWN = 'valueMarkdown';
    public const FIELD_VALUE_MARKDOWN_EXT = '_valueMarkdown';
    public const FIELD_VALUE_OID = 'valueOid';
    public const FIELD_VALUE_OID_EXT = '_valueOid';
    public const FIELD_VALUE_POSITIVE_INT = 'valuePositiveInt';
    public const FIELD_VALUE_POSITIVE_INT_EXT = '_valuePositiveInt';
    public const FIELD_VALUE_STRING = 'valueString';
    public const FIELD_VALUE_STRING_EXT = '_valueString';
    public const FIELD_VALUE_TIME = 'valueTime';
    public const FIELD_VALUE_TIME_EXT = '_valueTime';
    public const FIELD_VALUE_UNSIGNED_INT = 'valueUnsignedInt';
    public const FIELD_VALUE_UNSIGNED_INT_EXT = '_valueUnsignedInt';
    public const FIELD_VALUE_URI = 'valueUri';
    public const FIELD_VALUE_URI_EXT = '_valueUri';
    public const FIELD_VALUE_URL = 'valueUrl';
    public const FIELD_VALUE_URL_EXT = '_valueUrl';
    public const FIELD_VALUE_UUID = 'valueUuid';
    public const FIELD_VALUE_UUID_EXT = '_valueUuid';
    public const FIELD_VALUE_ADDRESS = 'valueAddress';
    public const FIELD_VALUE_AGE = 'valueAge';
    public const FIELD_VALUE_ANNOTATION = 'valueAnnotation';
    public const FIELD_VALUE_ATTACHMENT = 'valueAttachment';
    public const FIELD_VALUE_CODEABLE_CONCEPT = 'valueCodeableConcept';
    public const FIELD_VALUE_CODEABLE_REFERENCE = 'valueCodeableReference';
    public const FIELD_VALUE_CODING = 'valueCoding';
    public const FIELD_VALUE_CONTACT_POINT = 'valueContactPoint';
    public const FIELD_VALUE_COUNT = 'valueCount';
    public const FIELD_VALUE_DISTANCE = 'valueDistance';
    public const FIELD_VALUE_DURATION = 'valueDuration';
    public const FIELD_VALUE_HUMAN_NAME = 'valueHumanName';
    public const FIELD_VALUE_IDENTIFIER = 'valueIdentifier';
    public const FIELD_VALUE_MONEY = 'valueMoney';
    public const FIELD_VALUE_PERIOD = 'valuePeriod';
    public const FIELD_VALUE_QUANTITY = 'valueQuantity';
    public const FIELD_VALUE_RANGE = 'valueRange';
    public const FIELD_VALUE_RATIO = 'valueRatio';
    public const FIELD_VALUE_RATIO_RANGE = 'valueRatioRange';
    public const FIELD_VALUE_REFERENCE = 'valueReference';
    public const FIELD_VALUE_SAMPLED_DATA = 'valueSampledData';
    public const FIELD_VALUE_SIGNATURE = 'valueSignature';
    public const FIELD_VALUE_TIMING = 'valueTiming';
    public const FIELD_VALUE_CONTACT_DETAIL = 'valueContactDetail';
    public const FIELD_VALUE_DATA_REQUIREMENT = 'valueDataRequirement';
    public const FIELD_VALUE_EXPRESSION = 'valueExpression';
    public const FIELD_VALUE_PARAMETER_DEFINITION = 'valueParameterDefinition';
    public const FIELD_VALUE_RELATED_ARTIFACT = 'valueRelatedArtifact';
    public const FIELD_VALUE_TRIGGER_DEFINITION = 'valueTriggerDefinition';
    public const FIELD_VALUE_USAGE_CONTEXT = 'valueUsageContext';
    public const FIELD_VALUE_AVAILABILITY = 'valueAvailability';
    public const FIELD_VALUE_EXTENDED_CONTACT_DETAIL = 'valueExtendedContactDetail';
    public const FIELD_VALUE_DOSAGE = 'valueDosage';
    public const FIELD_VALUE_META = 'valueMeta';
    public const FIELD_URL = 'url';

    /* class_default.php:66 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_URL => [
            Constants::VALIDATE_PATTERN => '/^\\S*$/',
        ],
    ];

    /* class_default.php:95 */
    private array $_valueXMLLocations = [
        self::FIELD_VALUE_BASE_64BINARY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_BOOLEAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_CANONICAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_CODE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_DECIMAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_ID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_INSTANT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_INTEGER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_INTEGER_64 => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_MARKDOWN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_OID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_POSITIVE_INT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_UNSIGNED_INT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_URI => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_URL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_UUID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_URL => ValueXMLLocationEnum::PARENT_ATTRIBUTE,
    ];

    /* class_default.php:111 */
    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBase64Binary 
     */
    protected FHIRBase64Binary $valueBase64Binary;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $valueBoolean;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical 
     */
    protected FHIRCanonical $valueCanonical;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode 
     */
    protected FHIRCode $valueCode;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate 
     */
    protected FHIRDate $valueDate;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $valueDateTime;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $valueDecimal;
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId 
     */
    protected FHIRId $valueId;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant 
     */
    protected FHIRInstant $valueInstant;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $valueInteger;
    /**
     * A very large whole number
     * Typically this is used for record counters (e.g. database keys)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger64 
     */
    protected FHIRInteger64 $valueInteger64;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $valueMarkdown;
    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIROid 
     */
    protected FHIROid $valueOid;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $valuePositiveInt;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $valueString;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRTime 
     */
    protected FHIRTime $valueTime;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt 
     */
    protected FHIRUnsignedInt $valueUnsignedInt;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri 
     */
    protected FHIRUri $valueUri;
    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl 
     */
    protected FHIRUrl $valueUrl;
    /**
     * A UUID, represented as a URI
     * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUuid 
     */
    protected FHIRUuid $valueUuid;
    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world. The ISO21090-codedString may be used to provide a coded
     * representation of the contents of strings in an Address.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAddress 
     */
    protected FHIRAddress $valueAddress;
    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge 
     */
    protected FHIRAge $valueAge;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation 
     */
    protected FHIRAnnotation $valueAnnotation;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment 
     */
    protected FHIRAttachment $valueAttachment;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $valueCodeableConcept;
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference 
     */
    protected FHIRCodeableReference $valueCodeableReference;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding 
     */
    protected FHIRCoding $valueCoding;
    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint 
     */
    protected FHIRContactPoint $valueContactPoint;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRCount 
     */
    protected FHIRCount $valueCount;
    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDistance 
     */
    protected FHIRDistance $valueDistance;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration 
     */
    protected FHIRDuration $valueDuration;
    /**
     * A name, normally of a human, that can be used for other living entities (e.g.
     * animals but not organizations) that have been assigned names by a human and may
     * need the use of name parts or the need for usage information.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRHumanName 
     */
    protected FHIRHumanName $valueHumanName;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier 
     */
    protected FHIRIdentifier $valueIdentifier;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney 
     */
    protected FHIRMoney $valueMoney;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod 
     */
    protected FHIRPeriod $valuePeriod;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity 
     */
    protected FHIRQuantity $valueQuantity;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange 
     */
    protected FHIRRange $valueRange;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio 
     */
    protected FHIRRatio $valueRatio;
    /**
     * A range of ratios expressed as a low and high numerator and a denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange 
     */
    protected FHIRRatioRange $valueRatioRange;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $valueReference;
    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRSampledData 
     */
    protected FHIRSampledData $valueSampledData;
    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRSignature 
     */
    protected FHIRSignature $valueSignature;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming 
     */
    protected FHIRTiming $valueTiming;
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail 
     */
    protected FHIRContactDetail $valueContactDetail;
    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRDataRequirement 
     */
    protected FHIRDataRequirement $valueDataRequirement;
    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression 
     */
    protected FHIRExpression $valueExpression;
    /**
     * The parameters to the module. This collection specifies both the input and
     * output parameters. Input parameters are provided by the caller as part of the
     * $evaluate operation. Output parameters are included in the GuidanceResponse.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRParameterDefinition 
     */
    protected FHIRParameterDefinition $valueParameterDefinition;
    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact 
     */
    protected FHIRRelatedArtifact $valueRelatedArtifact;
    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRTriggerDefinition 
     */
    protected FHIRTriggerDefinition $valueTriggerDefinition;
    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRUsageContext 
     */
    protected FHIRUsageContext $valueUsageContext;
    /**
     * Availability data for an {item}.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAvailability 
     */
    protected FHIRAvailability $valueAvailability;
    /**
     * Specifies contact information for a specific purpose over a period of time,
     * might be handled/monitored by a specific named person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtendedContactDetail 
     */
    protected FHIRExtendedContactDetail $valueExtendedContactDetail;
    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage 
     */
    protected FHIRDosage $valueDosage;
    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content might not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta 
     */
    protected FHIRMeta $valueMeta;
    /** @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive */
    protected FHIRUriPrimitive $url;

    /* constructor.php:62 */
    /**
     * FHIRExtension Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBase64Binary $valueBase64Binary
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $valueBoolean
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $valueCanonical
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $valueCode
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate $valueDate
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $valueDateTime
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal $valueDecimal
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $valueId
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant $valueInstant
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $valueInteger
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRInteger64Primitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger64 $valueInteger64
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $valueMarkdown
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIROid $valueOid
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $valuePositiveInt
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $valueString
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRTime $valueTime
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $valueUnsignedInt
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $valueUri
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUrlPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl $valueUrl
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUuidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUuid $valueUuid
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAddress $valueAddress
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge $valueAge
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation $valueAnnotation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment $valueAttachment
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $valueCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $valueCodeableReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $valueCoding
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint $valueContactPoint
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRCount $valueCount
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDistance $valueDistance
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration $valueDuration
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRHumanName $valueHumanName
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $valueIdentifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $valueMoney
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $valuePeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $valueQuantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $valueRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio $valueRatio
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange $valueRatioRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $valueReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRSampledData $valueSampledData
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRSignature $valueSignature
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming $valueTiming
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail $valueContactDetail
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRDataRequirement $valueDataRequirement
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression $valueExpression
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRParameterDefinition $valueParameterDefinition
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact $valueRelatedArtifact
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRTriggerDefinition $valueTriggerDefinition
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRUsageContext $valueUsageContext
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAvailability $valueAvailability
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtendedContactDetail $valueExtendedContactDetail
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage $valueDosage
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta $valueMeta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive $url
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $valueBase64Binary = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $valueBoolean = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $valueCanonical = null,
                                null|string|FHIRCodePrimitive|FHIRCode $valueCode = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $valueDate = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $valueDateTime = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $valueDecimal = null,
                                null|string|FHIRIdPrimitive|FHIRId $valueId = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $valueInstant = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $valueInteger = null,
                                null|string|int|float|FHIRInteger64Primitive|FHIRInteger64 $valueInteger64 = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $valueMarkdown = null,
                                null|string|FHIROidPrimitive|FHIROid $valueOid = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $valuePositiveInt = null,
                                null|string|FHIRStringPrimitive|FHIRString $valueString = null,
                                null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $valueTime = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $valueUnsignedInt = null,
                                null|string|FHIRUriPrimitive|FHIRUri $valueUri = null,
                                null|string|FHIRUrlPrimitive|FHIRUrl $valueUrl = null,
                                null|string|FHIRUuidPrimitive|FHIRUuid $valueUuid = null,
                                null|FHIRAddress $valueAddress = null,
                                null|FHIRAge $valueAge = null,
                                null|FHIRAnnotation $valueAnnotation = null,
                                null|FHIRAttachment $valueAttachment = null,
                                null|FHIRCodeableConcept $valueCodeableConcept = null,
                                null|FHIRCodeableReference $valueCodeableReference = null,
                                null|FHIRCoding $valueCoding = null,
                                null|FHIRContactPoint $valueContactPoint = null,
                                null|FHIRCount $valueCount = null,
                                null|FHIRDistance $valueDistance = null,
                                null|FHIRDuration $valueDuration = null,
                                null|FHIRHumanName $valueHumanName = null,
                                null|FHIRIdentifier $valueIdentifier = null,
                                null|FHIRMoney $valueMoney = null,
                                null|FHIRPeriod $valuePeriod = null,
                                null|FHIRQuantity $valueQuantity = null,
                                null|FHIRRange $valueRange = null,
                                null|FHIRRatio $valueRatio = null,
                                null|FHIRRatioRange $valueRatioRange = null,
                                null|FHIRReference $valueReference = null,
                                null|FHIRSampledData $valueSampledData = null,
                                null|FHIRSignature $valueSignature = null,
                                null|FHIRTiming $valueTiming = null,
                                null|FHIRContactDetail $valueContactDetail = null,
                                null|FHIRDataRequirement $valueDataRequirement = null,
                                null|FHIRExpression $valueExpression = null,
                                null|FHIRParameterDefinition $valueParameterDefinition = null,
                                null|FHIRRelatedArtifact $valueRelatedArtifact = null,
                                null|FHIRTriggerDefinition $valueTriggerDefinition = null,
                                null|FHIRUsageContext $valueUsageContext = null,
                                null|FHIRAvailability $valueAvailability = null,
                                null|FHIRExtendedContactDetail $valueExtendedContactDetail = null,
                                null|FHIRDosage $valueDosage = null,
                                null|FHIRMeta $valueMeta = null,
                                null|string|FHIRUriPrimitive $url = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            fhirComments: $fhirComments);
        if (null !== $valueBase64Binary) {
            $this->setValueBase64Binary($valueBase64Binary);
        }
        if (null !== $valueBoolean) {
            $this->setValueBoolean($valueBoolean);
        }
        if (null !== $valueCanonical) {
            $this->setValueCanonical($valueCanonical);
        }
        if (null !== $valueCode) {
            $this->setValueCode($valueCode);
        }
        if (null !== $valueDate) {
            $this->setValueDate($valueDate);
        }
        if (null !== $valueDateTime) {
            $this->setValueDateTime($valueDateTime);
        }
        if (null !== $valueDecimal) {
            $this->setValueDecimal($valueDecimal);
        }
        if (null !== $valueId) {
            $this->setValueId($valueId);
        }
        if (null !== $valueInstant) {
            $this->setValueInstant($valueInstant);
        }
        if (null !== $valueInteger) {
            $this->setValueInteger($valueInteger);
        }
        if (null !== $valueInteger64) {
            $this->setValueInteger64($valueInteger64);
        }
        if (null !== $valueMarkdown) {
            $this->setValueMarkdown($valueMarkdown);
        }
        if (null !== $valueOid) {
            $this->setValueOid($valueOid);
        }
        if (null !== $valuePositiveInt) {
            $this->setValuePositiveInt($valuePositiveInt);
        }
        if (null !== $valueString) {
            $this->setValueString($valueString);
        }
        if (null !== $valueTime) {
            $this->setValueTime($valueTime);
        }
        if (null !== $valueUnsignedInt) {
            $this->setValueUnsignedInt($valueUnsignedInt);
        }
        if (null !== $valueUri) {
            $this->setValueUri($valueUri);
        }
        if (null !== $valueUrl) {
            $this->setValueUrl($valueUrl);
        }
        if (null !== $valueUuid) {
            $this->setValueUuid($valueUuid);
        }
        if (null !== $valueAddress) {
            $this->setValueAddress($valueAddress);
        }
        if (null !== $valueAge) {
            $this->setValueAge($valueAge);
        }
        if (null !== $valueAnnotation) {
            $this->setValueAnnotation($valueAnnotation);
        }
        if (null !== $valueAttachment) {
            $this->setValueAttachment($valueAttachment);
        }
        if (null !== $valueCodeableConcept) {
            $this->setValueCodeableConcept($valueCodeableConcept);
        }
        if (null !== $valueCodeableReference) {
            $this->setValueCodeableReference($valueCodeableReference);
        }
        if (null !== $valueCoding) {
            $this->setValueCoding($valueCoding);
        }
        if (null !== $valueContactPoint) {
            $this->setValueContactPoint($valueContactPoint);
        }
        if (null !== $valueCount) {
            $this->setValueCount($valueCount);
        }
        if (null !== $valueDistance) {
            $this->setValueDistance($valueDistance);
        }
        if (null !== $valueDuration) {
            $this->setValueDuration($valueDuration);
        }
        if (null !== $valueHumanName) {
            $this->setValueHumanName($valueHumanName);
        }
        if (null !== $valueIdentifier) {
            $this->setValueIdentifier($valueIdentifier);
        }
        if (null !== $valueMoney) {
            $this->setValueMoney($valueMoney);
        }
        if (null !== $valuePeriod) {
            $this->setValuePeriod($valuePeriod);
        }
        if (null !== $valueQuantity) {
            $this->setValueQuantity($valueQuantity);
        }
        if (null !== $valueRange) {
            $this->setValueRange($valueRange);
        }
        if (null !== $valueRatio) {
            $this->setValueRatio($valueRatio);
        }
        if (null !== $valueRatioRange) {
            $this->setValueRatioRange($valueRatioRange);
        }
        if (null !== $valueReference) {
            $this->setValueReference($valueReference);
        }
        if (null !== $valueSampledData) {
            $this->setValueSampledData($valueSampledData);
        }
        if (null !== $valueSignature) {
            $this->setValueSignature($valueSignature);
        }
        if (null !== $valueTiming) {
            $this->setValueTiming($valueTiming);
        }
        if (null !== $valueContactDetail) {
            $this->setValueContactDetail($valueContactDetail);
        }
        if (null !== $valueDataRequirement) {
            $this->setValueDataRequirement($valueDataRequirement);
        }
        if (null !== $valueExpression) {
            $this->setValueExpression($valueExpression);
        }
        if (null !== $valueParameterDefinition) {
            $this->setValueParameterDefinition($valueParameterDefinition);
        }
        if (null !== $valueRelatedArtifact) {
            $this->setValueRelatedArtifact($valueRelatedArtifact);
        }
        if (null !== $valueTriggerDefinition) {
            $this->setValueTriggerDefinition($valueTriggerDefinition);
        }
        if (null !== $valueUsageContext) {
            $this->setValueUsageContext($valueUsageContext);
        }
        if (null !== $valueAvailability) {
            $this->setValueAvailability($valueAvailability);
        }
        if (null !== $valueExtendedContactDetail) {
            $this->setValueExtendedContactDetail($valueExtendedContactDetail);
        }
        if (null !== $valueDosage) {
            $this->setValueDosage($valueDosage);
        }
        if (null !== $valueMeta) {
            $this->setValueMeta($valueMeta);
        }
        if (null !== $url) {
            $this->setUrl($url);
        }
    }

    /* class_default.php:143 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:169 */
    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBase64Binary
     */
    public function getValueBase64Binary(): null|FHIRBase64Binary
    {
        return $this->valueBase64Binary ?? null;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBase64Binary $valueBase64Binary
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean(): null|FHIRBoolean
    {
        return $this->valueBoolean ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $valueBoolean
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
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getValueCanonical(): null|FHIRCanonical
    {
        return $this->valueCanonical ?? null;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $valueCanonical
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueCanonical(null|string|FHIRCanonicalPrimitive|FHIRCanonical $valueCanonical,
                                      ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $valueCanonical) {
            unset($this->valueCanonical);
            return $this;
        }
        if (!($valueCanonical instanceof FHIRCanonical)) {
            $valueCanonical = new FHIRCanonical(value: $valueCanonical);
        }
        $this->valueCanonical = $valueCanonical;
        if ($this->_valueXMLLocations[self::FIELD_VALUE_CANONICAL] !== $valueXMLLocation) {
            $this->_setValueCanonicalValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the valueCanonical element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getValueCanonicalValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VALUE_CANONICAL];
    }

    /**
     * Set the location the "value" field of the valueCanonical element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setValueCanonicalValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VALUE_CANONICAL] = $valueXMLLocation;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode
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
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $valueCode
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
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate
     */
    public function getValueDate(): null|FHIRDate
    {
        return $this->valueDate ?? null;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate $valueDate
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
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime(): null|FHIRDateTime
    {
        return $this->valueDateTime ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $valueDateTime
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
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal
     */
    public function getValueDecimal(): null|FHIRDecimal
    {
        return $this->valueDecimal ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal $valueDecimal
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
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId
     */
    public function getValueId(): null|FHIRId
    {
        return $this->valueId ?? null;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $valueId
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
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant
     */
    public function getValueInstant(): null|FHIRInstant
    {
        return $this->valueInstant ?? null;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant $valueInstant
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
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger
     */
    public function getValueInteger(): null|FHIRInteger
    {
        return $this->valueInteger ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $valueInteger
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
     * A very large whole number
     * Typically this is used for record counters (e.g. database keys)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger64
     */
    public function getValueInteger64(): null|FHIRInteger64
    {
        return $this->valueInteger64 ?? null;
    }

    /**
     * A very large whole number
     * Typically this is used for record counters (e.g. database keys)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRInteger64Primitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger64 $valueInteger64
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueInteger64(null|string|int|float|FHIRInteger64Primitive|FHIRInteger64 $valueInteger64,
                                      ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $valueInteger64) {
            unset($this->valueInteger64);
            return $this;
        }
        if (!($valueInteger64 instanceof FHIRInteger64)) {
            $valueInteger64 = new FHIRInteger64(value: $valueInteger64);
        }
        $this->valueInteger64 = $valueInteger64;
        if ($this->_valueXMLLocations[self::FIELD_VALUE_INTEGER_64] !== $valueXMLLocation) {
            $this->_setValueInteger64ValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the valueInteger64 element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getValueInteger64ValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VALUE_INTEGER_64];
    }

    /**
     * Set the location the "value" field of the valueInteger64 element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setValueInteger64ValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VALUE_INTEGER_64] = $valueXMLLocation;
        return $this;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getValueMarkdown(): null|FHIRMarkdown
    {
        return $this->valueMarkdown ?? null;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $valueMarkdown
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueMarkdown(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $valueMarkdown,
                                     ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $valueMarkdown) {
            unset($this->valueMarkdown);
            return $this;
        }
        if (!($valueMarkdown instanceof FHIRMarkdown)) {
            $valueMarkdown = new FHIRMarkdown(value: $valueMarkdown);
        }
        $this->valueMarkdown = $valueMarkdown;
        if ($this->_valueXMLLocations[self::FIELD_VALUE_MARKDOWN] !== $valueXMLLocation) {
            $this->_setValueMarkdownValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the valueMarkdown element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getValueMarkdownValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VALUE_MARKDOWN];
    }

    /**
     * Set the location the "value" field of the valueMarkdown element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setValueMarkdownValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VALUE_MARKDOWN] = $valueXMLLocation;
        return $this;
    }

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIROid
     */
    public function getValueOid(): null|FHIROid
    {
        return $this->valueOid ?? null;
    }

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIROid $valueOid
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
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getValuePositiveInt(): null|FHIRPositiveInt
    {
        return $this->valuePositiveInt ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $valuePositiveInt
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValuePositiveInt(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $valuePositiveInt,
                                        ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $valuePositiveInt) {
            unset($this->valuePositiveInt);
            return $this;
        }
        if (!($valuePositiveInt instanceof FHIRPositiveInt)) {
            $valuePositiveInt = new FHIRPositiveInt(value: $valuePositiveInt);
        }
        $this->valuePositiveInt = $valuePositiveInt;
        if ($this->_valueXMLLocations[self::FIELD_VALUE_POSITIVE_INT] !== $valueXMLLocation) {
            $this->_setValuePositiveIntValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the valuePositiveInt element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getValuePositiveIntValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VALUE_POSITIVE_INT];
    }

    /**
     * Set the location the "value" field of the valuePositiveInt element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setValuePositiveIntValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VALUE_POSITIVE_INT] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getValueString(): null|FHIRString
    {
        return $this->valueString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $valueString
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
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRTime
     */
    public function getValueTime(): null|FHIRTime
    {
        return $this->valueTime ?? null;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRTime $valueTime
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueTime(null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $valueTime,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $valueTime) {
            unset($this->valueTime);
            return $this;
        }
        if (!($valueTime instanceof FHIRTime)) {
            $valueTime = new FHIRTime(value: $valueTime);
        }
        $this->valueTime = $valueTime;
        if ($this->_valueXMLLocations[self::FIELD_VALUE_TIME] !== $valueXMLLocation) {
            $this->_setValueTimeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the valueTime element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getValueTimeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VALUE_TIME];
    }

    /**
     * Set the location the "value" field of the valueTime element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setValueTimeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VALUE_TIME] = $valueXMLLocation;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    public function getValueUnsignedInt(): null|FHIRUnsignedInt
    {
        return $this->valueUnsignedInt ?? null;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $valueUnsignedInt
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueUnsignedInt(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $valueUnsignedInt,
                                        ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $valueUnsignedInt) {
            unset($this->valueUnsignedInt);
            return $this;
        }
        if (!($valueUnsignedInt instanceof FHIRUnsignedInt)) {
            $valueUnsignedInt = new FHIRUnsignedInt(value: $valueUnsignedInt);
        }
        $this->valueUnsignedInt = $valueUnsignedInt;
        if ($this->_valueXMLLocations[self::FIELD_VALUE_UNSIGNED_INT] !== $valueXMLLocation) {
            $this->_setValueUnsignedIntValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the valueUnsignedInt element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getValueUnsignedIntValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VALUE_UNSIGNED_INT];
    }

    /**
     * Set the location the "value" field of the valueUnsignedInt element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setValueUnsignedIntValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VALUE_UNSIGNED_INT] = $valueXMLLocation;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri
     */
    public function getValueUri(): null|FHIRUri
    {
        return $this->valueUri ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $valueUri
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
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl
     */
    public function getValueUrl(): null|FHIRUrl
    {
        return $this->valueUrl ?? null;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUrlPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl $valueUrl
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueUrl(null|string|FHIRUrlPrimitive|FHIRUrl $valueUrl,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $valueUrl) {
            unset($this->valueUrl);
            return $this;
        }
        if (!($valueUrl instanceof FHIRUrl)) {
            $valueUrl = new FHIRUrl(value: $valueUrl);
        }
        $this->valueUrl = $valueUrl;
        if ($this->_valueXMLLocations[self::FIELD_VALUE_URL] !== $valueXMLLocation) {
            $this->_setValueUrlValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the valueUrl element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getValueUrlValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VALUE_URL];
    }

    /**
     * Set the location the "value" field of the valueUrl element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setValueUrlValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VALUE_URL] = $valueXMLLocation;
        return $this;
    }

    /**
     * A UUID, represented as a URI
     * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUuid
     */
    public function getValueUuid(): null|FHIRUuid
    {
        return $this->valueUuid ?? null;
    }

    /**
     * A UUID, represented as a URI
     * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUuidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUuid $valueUuid
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
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world. The ISO21090-codedString may be used to provide a coded
     * representation of the contents of strings in an Address.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAddress
     */
    public function getValueAddress(): null|FHIRAddress
    {
        return $this->valueAddress ?? null;
    }

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world. The ISO21090-codedString may be used to provide a coded
     * representation of the contents of strings in an Address.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAddress $valueAddress
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
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge
     */
    public function getValueAge(): null|FHIRAge
    {
        return $this->valueAge ?? null;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge $valueAge
     * @return static
     */
    public function setValueAge(null|FHIRAge $valueAge): self
    {
        if (null === $valueAge) {
            unset($this->valueAge);
            return $this;
        }
        $this->valueAge = $valueAge;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation
     */
    public function getValueAnnotation(): null|FHIRAnnotation
    {
        return $this->valueAnnotation ?? null;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation $valueAnnotation
     * @return static
     */
    public function setValueAnnotation(null|FHIRAnnotation $valueAnnotation): self
    {
        if (null === $valueAnnotation) {
            unset($this->valueAnnotation);
            return $this;
        }
        $this->valueAnnotation = $valueAnnotation;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment
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
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment $valueAttachment
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
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
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $valueCodeableConcept
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
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference
     */
    public function getValueCodeableReference(): null|FHIRCodeableReference
    {
        return $this->valueCodeableReference ?? null;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $valueCodeableReference
     * @return static
     */
    public function setValueCodeableReference(null|FHIRCodeableReference $valueCodeableReference): self
    {
        if (null === $valueCodeableReference) {
            unset($this->valueCodeableReference);
            return $this;
        }
        $this->valueCodeableReference = $valueCodeableReference;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
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
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $valueCoding
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
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint
     */
    public function getValueContactPoint(): null|FHIRContactPoint
    {
        return $this->valueContactPoint ?? null;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint $valueContactPoint
     * @return static
     */
    public function setValueContactPoint(null|FHIRContactPoint $valueContactPoint): self
    {
        if (null === $valueContactPoint) {
            unset($this->valueContactPoint);
            return $this;
        }
        $this->valueContactPoint = $valueContactPoint;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRCount
     */
    public function getValueCount(): null|FHIRCount
    {
        return $this->valueCount ?? null;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRCount $valueCount
     * @return static
     */
    public function setValueCount(null|FHIRCount $valueCount): self
    {
        if (null === $valueCount) {
            unset($this->valueCount);
            return $this;
        }
        $this->valueCount = $valueCount;
        return $this;
    }

    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDistance
     */
    public function getValueDistance(): null|FHIRDistance
    {
        return $this->valueDistance ?? null;
    }

    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDistance $valueDistance
     * @return static
     */
    public function setValueDistance(null|FHIRDistance $valueDistance): self
    {
        if (null === $valueDistance) {
            unset($this->valueDistance);
            return $this;
        }
        $this->valueDistance = $valueDistance;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration
     */
    public function getValueDuration(): null|FHIRDuration
    {
        return $this->valueDuration ?? null;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration $valueDuration
     * @return static
     */
    public function setValueDuration(null|FHIRDuration $valueDuration): self
    {
        if (null === $valueDuration) {
            unset($this->valueDuration);
            return $this;
        }
        $this->valueDuration = $valueDuration;
        return $this;
    }

    /**
     * A name, normally of a human, that can be used for other living entities (e.g.
     * animals but not organizations) that have been assigned names by a human and may
     * need the use of name parts or the need for usage information.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRHumanName
     */
    public function getValueHumanName(): null|FHIRHumanName
    {
        return $this->valueHumanName ?? null;
    }

    /**
     * A name, normally of a human, that can be used for other living entities (e.g.
     * animals but not organizations) that have been assigned names by a human and may
     * need the use of name parts or the need for usage information.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRHumanName $valueHumanName
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier
     */
    public function getValueIdentifier(): null|FHIRIdentifier
    {
        return $this->valueIdentifier ?? null;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $valueIdentifier
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
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney
     */
    public function getValueMoney(): null|FHIRMoney
    {
        return $this->valueMoney ?? null;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $valueMoney
     * @return static
     */
    public function setValueMoney(null|FHIRMoney $valueMoney): self
    {
        if (null === $valueMoney) {
            unset($this->valueMoney);
            return $this;
        }
        $this->valueMoney = $valueMoney;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
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
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $valuePeriod
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
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
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
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $valueQuantity
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
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
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
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $valueRange
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
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio
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
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio $valueRatio
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
     * A range of ratios expressed as a low and high numerator and a denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange
     */
    public function getValueRatioRange(): null|FHIRRatioRange
    {
        return $this->valueRatioRange ?? null;
    }

    /**
     * A range of ratios expressed as a low and high numerator and a denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange $valueRatioRange
     * @return static
     */
    public function setValueRatioRange(null|FHIRRatioRange $valueRatioRange): self
    {
        if (null === $valueRatioRange) {
            unset($this->valueRatioRange);
            return $this;
        }
        $this->valueRatioRange = $valueRatioRange;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getValueReference(): null|FHIRReference
    {
        return $this->valueReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $valueReference
     * @return static
     */
    public function setValueReference(null|FHIRReference $valueReference): self
    {
        if (null === $valueReference) {
            unset($this->valueReference);
            return $this;
        }
        $this->valueReference = $valueReference;
        return $this;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRSampledData
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
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRSampledData $valueSampledData
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
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRSignature
     */
    public function getValueSignature(): null|FHIRSignature
    {
        return $this->valueSignature ?? null;
    }

    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRSignature $valueSignature
     * @return static
     */
    public function setValueSignature(null|FHIRSignature $valueSignature): self
    {
        if (null === $valueSignature) {
            unset($this->valueSignature);
            return $this;
        }
        $this->valueSignature = $valueSignature;
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
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming
     */
    public function getValueTiming(): null|FHIRTiming
    {
        return $this->valueTiming ?? null;
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
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming $valueTiming
     * @return static
     */
    public function setValueTiming(null|FHIRTiming $valueTiming): self
    {
        if (null === $valueTiming) {
            unset($this->valueTiming);
            return $this;
        }
        $this->valueTiming = $valueTiming;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail
     */
    public function getValueContactDetail(): null|FHIRContactDetail
    {
        return $this->valueContactDetail ?? null;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail $valueContactDetail
     * @return static
     */
    public function setValueContactDetail(null|FHIRContactDetail $valueContactDetail): self
    {
        if (null === $valueContactDetail) {
            unset($this->valueContactDetail);
            return $this;
        }
        $this->valueContactDetail = $valueContactDetail;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRDataRequirement
     */
    public function getValueDataRequirement(): null|FHIRDataRequirement
    {
        return $this->valueDataRequirement ?? null;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRDataRequirement $valueDataRequirement
     * @return static
     */
    public function setValueDataRequirement(null|FHIRDataRequirement $valueDataRequirement): self
    {
        if (null === $valueDataRequirement) {
            unset($this->valueDataRequirement);
            return $this;
        }
        $this->valueDataRequirement = $valueDataRequirement;
        return $this;
    }

    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression
     */
    public function getValueExpression(): null|FHIRExpression
    {
        return $this->valueExpression ?? null;
    }

    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression $valueExpression
     * @return static
     */
    public function setValueExpression(null|FHIRExpression $valueExpression): self
    {
        if (null === $valueExpression) {
            unset($this->valueExpression);
            return $this;
        }
        $this->valueExpression = $valueExpression;
        return $this;
    }

    /**
     * The parameters to the module. This collection specifies both the input and
     * output parameters. Input parameters are provided by the caller as part of the
     * $evaluate operation. Output parameters are included in the GuidanceResponse.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRParameterDefinition
     */
    public function getValueParameterDefinition(): null|FHIRParameterDefinition
    {
        return $this->valueParameterDefinition ?? null;
    }

    /**
     * The parameters to the module. This collection specifies both the input and
     * output parameters. Input parameters are provided by the caller as part of the
     * $evaluate operation. Output parameters are included in the GuidanceResponse.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRParameterDefinition $valueParameterDefinition
     * @return static
     */
    public function setValueParameterDefinition(null|FHIRParameterDefinition $valueParameterDefinition): self
    {
        if (null === $valueParameterDefinition) {
            unset($this->valueParameterDefinition);
            return $this;
        }
        $this->valueParameterDefinition = $valueParameterDefinition;
        return $this;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact
     */
    public function getValueRelatedArtifact(): null|FHIRRelatedArtifact
    {
        return $this->valueRelatedArtifact ?? null;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact $valueRelatedArtifact
     * @return static
     */
    public function setValueRelatedArtifact(null|FHIRRelatedArtifact $valueRelatedArtifact): self
    {
        if (null === $valueRelatedArtifact) {
            unset($this->valueRelatedArtifact);
            return $this;
        }
        $this->valueRelatedArtifact = $valueRelatedArtifact;
        return $this;
    }

    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRTriggerDefinition
     */
    public function getValueTriggerDefinition(): null|FHIRTriggerDefinition
    {
        return $this->valueTriggerDefinition ?? null;
    }

    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRTriggerDefinition $valueTriggerDefinition
     * @return static
     */
    public function setValueTriggerDefinition(null|FHIRTriggerDefinition $valueTriggerDefinition): self
    {
        if (null === $valueTriggerDefinition) {
            unset($this->valueTriggerDefinition);
            return $this;
        }
        $this->valueTriggerDefinition = $valueTriggerDefinition;
        return $this;
    }

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRUsageContext
     */
    public function getValueUsageContext(): null|FHIRUsageContext
    {
        return $this->valueUsageContext ?? null;
    }

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRUsageContext $valueUsageContext
     * @return static
     */
    public function setValueUsageContext(null|FHIRUsageContext $valueUsageContext): self
    {
        if (null === $valueUsageContext) {
            unset($this->valueUsageContext);
            return $this;
        }
        $this->valueUsageContext = $valueUsageContext;
        return $this;
    }

    /**
     * Availability data for an {item}.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAvailability
     */
    public function getValueAvailability(): null|FHIRAvailability
    {
        return $this->valueAvailability ?? null;
    }

    /**
     * Availability data for an {item}.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAvailability $valueAvailability
     * @return static
     */
    public function setValueAvailability(null|FHIRAvailability $valueAvailability): self
    {
        if (null === $valueAvailability) {
            unset($this->valueAvailability);
            return $this;
        }
        $this->valueAvailability = $valueAvailability;
        return $this;
    }

    /**
     * Specifies contact information for a specific purpose over a period of time,
     * might be handled/monitored by a specific named person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtendedContactDetail
     */
    public function getValueExtendedContactDetail(): null|FHIRExtendedContactDetail
    {
        return $this->valueExtendedContactDetail ?? null;
    }

    /**
     * Specifies contact information for a specific purpose over a period of time,
     * might be handled/monitored by a specific named person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtendedContactDetail $valueExtendedContactDetail
     * @return static
     */
    public function setValueExtendedContactDetail(null|FHIRExtendedContactDetail $valueExtendedContactDetail): self
    {
        if (null === $valueExtendedContactDetail) {
            unset($this->valueExtendedContactDetail);
            return $this;
        }
        $this->valueExtendedContactDetail = $valueExtendedContactDetail;
        return $this;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage
     */
    public function getValueDosage(): null|FHIRDosage
    {
        return $this->valueDosage ?? null;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage $valueDosage
     * @return static
     */
    public function setValueDosage(null|FHIRDosage $valueDosage): self
    {
        if (null === $valueDosage) {
            unset($this->valueDosage);
            return $this;
        }
        $this->valueDosage = $valueDosage;
        return $this;
    }

    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content might not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta
     */
    public function getValueMeta(): null|FHIRMeta
    {
        return $this->valueMeta ?? null;
    }

    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content might not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta $valueMeta
     * @return static
     */
    public function setValueMeta(null|FHIRMeta $valueMeta): self
    {
        if (null === $valueMeta) {
            unset($this->valueMeta);
            return $this;
        }
        $this->valueMeta = $valueMeta;
        return $this;
    }

    /**
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive
     */
    public function getUrl(): null|FHIRUriPrimitive
    {
        return $this->url ?? null;
    }

    /**
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive $url
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setUrl(null|string|FHIRUriPrimitive $url,
                           ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::PARENT_ATTRIBUTE): self
    {
        if (null === $url) {
            unset($this->url);
            return $this;
        }
        if (!($url instanceof FHIRUriPrimitive)) {
            $url = new FHIRUriPrimitive(value: $url);
        }
        $this->url = $url;
        if ($this->_valueXMLLocations[self::FIELD_URL] !== $valueXMLLocation) {
            $this->_setUrlValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the url element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getUrlValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_URL];
    }

    /**
     * Set the location the "value" field of the url element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setUrlValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        if (ValueXMLLocationEnum::CONTAINER_ATTRIBUTE === $valueXMLLocation) {
            throw new \InvalidArgumentException(sprintf(
                'Cannot set "%s" as value XML serialize location for primitive property "url" on type "Extension"',
                $valueXMLLocation->name,
            ));
        }
        $this->_valueXMLLocations[self::FIELD_URL] = $valueXMLLocation;
        return $this;
    }

    /* class_default.php:208 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRExtension)) {
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
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_VALUE_BASE_64BINARY === $cen) {
                $type->setValueBase64Binary(FHIRBase64Binary::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_BOOLEAN === $cen) {
                $type->setValueBoolean(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_CANONICAL === $cen) {
                $type->setValueCanonical(FHIRCanonical::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_CODE === $cen) {
                $type->setValueCode(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_DATE === $cen) {
                $type->setValueDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_DATE_TIME === $cen) {
                $type->setValueDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_DECIMAL === $cen) {
                $type->setValueDecimal(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_ID === $cen) {
                $type->setValueId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_INSTANT === $cen) {
                $type->setValueInstant(FHIRInstant::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_INTEGER === $cen) {
                $type->setValueInteger(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_INTEGER_64 === $cen) {
                $type->setValueInteger64(FHIRInteger64::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_MARKDOWN === $cen) {
                $type->setValueMarkdown(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_OID === $cen) {
                $type->setValueOid(FHIROid::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_POSITIVE_INT === $cen) {
                $type->setValuePositiveInt(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_STRING === $cen) {
                $type->setValueString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_TIME === $cen) {
                $type->setValueTime(FHIRTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_UNSIGNED_INT === $cen) {
                $type->setValueUnsignedInt(FHIRUnsignedInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_URI === $cen) {
                $type->setValueUri(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_URL === $cen) {
                $type->setValueUrl(FHIRUrl::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_UUID === $cen) {
                $type->setValueUuid(FHIRUuid::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_ADDRESS === $cen) {
                $type->setValueAddress(FHIRAddress::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_AGE === $cen) {
                $type->setValueAge(FHIRAge::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_ANNOTATION === $cen) {
                $type->setValueAnnotation(FHIRAnnotation::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_ATTACHMENT === $cen) {
                $type->setValueAttachment(FHIRAttachment::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_CODEABLE_CONCEPT === $cen) {
                $type->setValueCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_CODEABLE_REFERENCE === $cen) {
                $type->setValueCodeableReference(FHIRCodeableReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_CODING === $cen) {
                $type->setValueCoding(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_CONTACT_POINT === $cen) {
                $type->setValueContactPoint(FHIRContactPoint::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_COUNT === $cen) {
                $type->setValueCount(FHIRCount::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_DISTANCE === $cen) {
                $type->setValueDistance(FHIRDistance::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_DURATION === $cen) {
                $type->setValueDuration(FHIRDuration::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_HUMAN_NAME === $cen) {
                $type->setValueHumanName(FHIRHumanName::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_IDENTIFIER === $cen) {
                $type->setValueIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_MONEY === $cen) {
                $type->setValueMoney(FHIRMoney::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_PERIOD === $cen) {
                $type->setValuePeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_QUANTITY === $cen) {
                $type->setValueQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_RANGE === $cen) {
                $type->setValueRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_RATIO === $cen) {
                $type->setValueRatio(FHIRRatio::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_RATIO_RANGE === $cen) {
                $type->setValueRatioRange(FHIRRatioRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_REFERENCE === $cen) {
                $type->setValueReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_SAMPLED_DATA === $cen) {
                $type->setValueSampledData(FHIRSampledData::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_SIGNATURE === $cen) {
                $type->setValueSignature(FHIRSignature::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_TIMING === $cen) {
                $type->setValueTiming(FHIRTiming::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_CONTACT_DETAIL === $cen) {
                $type->setValueContactDetail(FHIRContactDetail::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_DATA_REQUIREMENT === $cen) {
                $type->setValueDataRequirement(FHIRDataRequirement::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_EXPRESSION === $cen) {
                $type->setValueExpression(FHIRExpression::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_PARAMETER_DEFINITION === $cen) {
                $type->setValueParameterDefinition(FHIRParameterDefinition::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_RELATED_ARTIFACT === $cen) {
                $type->setValueRelatedArtifact(FHIRRelatedArtifact::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_TRIGGER_DEFINITION === $cen) {
                $type->setValueTriggerDefinition(FHIRTriggerDefinition::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_USAGE_CONTEXT === $cen) {
                $type->setValueUsageContext(FHIRUsageContext::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_AVAILABILITY === $cen) {
                $type->setValueAvailability(FHIRAvailability::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_EXTENDED_CONTACT_DETAIL === $cen) {
                $type->setValueExtendedContactDetail(FHIRExtendedContactDetail::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_DOSAGE === $cen) {
                $type->setValueDosage(FHIRDosage::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_META === $cen) {
                $type->setValueMeta(FHIRMeta::xmlUnserialize($ce, $config));
            } else if (self::FIELD_URL === $cen) {
                $va = $ce->attributes()[FHIRUriPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setUrl((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setUrl((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VALUE_BASE_64BINARY])) {
            if (isset($type->valueBase64Binary)) {
                $type->valueBase64Binary->setValue((string)$attributes[self::FIELD_VALUE_BASE_64BINARY]);
                $type->_setValueBase64BinaryValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValueBase64Binary((string)$attributes[self::FIELD_VALUE_BASE_64BINARY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_VALUE_CANONICAL])) {
            if (isset($type->valueCanonical)) {
                $type->valueCanonical->setValue((string)$attributes[self::FIELD_VALUE_CANONICAL]);
                $type->_setValueCanonicalValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValueCanonical((string)$attributes[self::FIELD_VALUE_CANONICAL], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_VALUE_DECIMAL])) {
            if (isset($type->valueDecimal)) {
                $type->valueDecimal->setValue((string)$attributes[self::FIELD_VALUE_DECIMAL]);
                $type->_setValueDecimalValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValueDecimal((string)$attributes[self::FIELD_VALUE_DECIMAL], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_VALUE_INSTANT])) {
            if (isset($type->valueInstant)) {
                $type->valueInstant->setValue((string)$attributes[self::FIELD_VALUE_INSTANT]);
                $type->_setValueInstantValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValueInstant((string)$attributes[self::FIELD_VALUE_INSTANT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_VALUE_INTEGER_64])) {
            if (isset($type->valueInteger64)) {
                $type->valueInteger64->setValue((string)$attributes[self::FIELD_VALUE_INTEGER_64]);
                $type->_setValueInteger64ValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValueInteger64((string)$attributes[self::FIELD_VALUE_INTEGER_64], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_MARKDOWN])) {
            if (isset($type->valueMarkdown)) {
                $type->valueMarkdown->setValue((string)$attributes[self::FIELD_VALUE_MARKDOWN]);
                $type->_setValueMarkdownValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValueMarkdown((string)$attributes[self::FIELD_VALUE_MARKDOWN], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_VALUE_POSITIVE_INT])) {
            if (isset($type->valuePositiveInt)) {
                $type->valuePositiveInt->setValue((string)$attributes[self::FIELD_VALUE_POSITIVE_INT]);
                $type->_setValuePositiveIntValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValuePositiveInt((string)$attributes[self::FIELD_VALUE_POSITIVE_INT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_VALUE_TIME])) {
            if (isset($type->valueTime)) {
                $type->valueTime->setValue((string)$attributes[self::FIELD_VALUE_TIME]);
                $type->_setValueTimeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValueTime((string)$attributes[self::FIELD_VALUE_TIME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_UNSIGNED_INT])) {
            if (isset($type->valueUnsignedInt)) {
                $type->valueUnsignedInt->setValue((string)$attributes[self::FIELD_VALUE_UNSIGNED_INT]);
                $type->_setValueUnsignedIntValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValueUnsignedInt((string)$attributes[self::FIELD_VALUE_UNSIGNED_INT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_VALUE_URL])) {
            if (isset($type->valueUrl)) {
                $type->valueUrl->setValue((string)$attributes[self::FIELD_VALUE_URL]);
                $type->_setValueUrlValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValueUrl((string)$attributes[self::FIELD_VALUE_URL], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_URL])) {
            $type->setUrl((string)$attributes[self::FIELD_URL], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->valueBase64Binary) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_BASE_64BINARY]) {
            $xw->writeAttribute(self::FIELD_VALUE_BASE_64BINARY, $this->valueBase64Binary->_getFormattedValue());
        }
        if (isset($this->valueBoolean) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_BOOLEAN]) {
            $xw->writeAttribute(self::FIELD_VALUE_BOOLEAN, $this->valueBoolean->_getFormattedValue());
        }
        if (isset($this->valueCanonical) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_CANONICAL]) {
            $xw->writeAttribute(self::FIELD_VALUE_CANONICAL, $this->valueCanonical->_getFormattedValue());
        }
        if (isset($this->valueCode) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_CODE]) {
            $xw->writeAttribute(self::FIELD_VALUE_CODE, $this->valueCode->_getFormattedValue());
        }
        if (isset($this->valueDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_DATE]) {
            $xw->writeAttribute(self::FIELD_VALUE_DATE, $this->valueDate->_getFormattedValue());
        }
        if (isset($this->valueDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_VALUE_DATE_TIME, $this->valueDateTime->_getFormattedValue());
        }
        if (isset($this->valueDecimal) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_DECIMAL]) {
            $xw->writeAttribute(self::FIELD_VALUE_DECIMAL, $this->valueDecimal->_getFormattedValue());
        }
        if (isset($this->valueId) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_ID]) {
            $xw->writeAttribute(self::FIELD_VALUE_ID, $this->valueId->_getFormattedValue());
        }
        if (isset($this->valueInstant) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_INSTANT]) {
            $xw->writeAttribute(self::FIELD_VALUE_INSTANT, $this->valueInstant->_getFormattedValue());
        }
        if (isset($this->valueInteger) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_INTEGER]) {
            $xw->writeAttribute(self::FIELD_VALUE_INTEGER, $this->valueInteger->_getFormattedValue());
        }
        if (isset($this->valueInteger64) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_INTEGER_64]) {
            $xw->writeAttribute(self::FIELD_VALUE_INTEGER_64, $this->valueInteger64->_getFormattedValue());
        }
        if (isset($this->valueMarkdown) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_MARKDOWN]) {
            $xw->writeAttribute(self::FIELD_VALUE_MARKDOWN, $this->valueMarkdown->_getFormattedValue());
        }
        if (isset($this->valueOid) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_OID]) {
            $xw->writeAttribute(self::FIELD_VALUE_OID, $this->valueOid->_getFormattedValue());
        }
        if (isset($this->valuePositiveInt) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_POSITIVE_INT]) {
            $xw->writeAttribute(self::FIELD_VALUE_POSITIVE_INT, $this->valuePositiveInt->_getFormattedValue());
        }
        if (isset($this->valueString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_STRING]) {
            $xw->writeAttribute(self::FIELD_VALUE_STRING, $this->valueString->_getFormattedValue());
        }
        if (isset($this->valueTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_TIME]) {
            $xw->writeAttribute(self::FIELD_VALUE_TIME, $this->valueTime->_getFormattedValue());
        }
        if (isset($this->valueUnsignedInt) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_UNSIGNED_INT]) {
            $xw->writeAttribute(self::FIELD_VALUE_UNSIGNED_INT, $this->valueUnsignedInt->_getFormattedValue());
        }
        if (isset($this->valueUri) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_URI]) {
            $xw->writeAttribute(self::FIELD_VALUE_URI, $this->valueUri->_getFormattedValue());
        }
        if (isset($this->valueUrl) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_URL]) {
            $xw->writeAttribute(self::FIELD_VALUE_URL, $this->valueUrl->_getFormattedValue());
        }
        if (isset($this->valueUuid) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_UUID]) {
            $xw->writeAttribute(self::FIELD_VALUE_UUID, $this->valueUuid->_getFormattedValue());
        }
        if (isset($this->url) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_URL]) {
            $xw->writeAttribute(self::FIELD_URL, $this->url->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->valueBase64Binary)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_BASE_64BINARY]
                || $this->valueBase64Binary->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_BASE_64BINARY);
            $this->valueBase64Binary->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_BASE_64BINARY]);
            $xw->endElement();
        }
        if (isset($this->valueBoolean)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_BOOLEAN]
                || $this->valueBoolean->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_BOOLEAN);
            $this->valueBoolean->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_BOOLEAN]);
            $xw->endElement();
        }
        if (isset($this->valueCanonical)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_CANONICAL]
                || $this->valueCanonical->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_CANONICAL);
            $this->valueCanonical->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_CANONICAL]);
            $xw->endElement();
        }
        if (isset($this->valueCode)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_CODE]
                || $this->valueCode->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_CODE);
            $this->valueCode->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_CODE]);
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
        if (isset($this->valueDecimal)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_DECIMAL]
                || $this->valueDecimal->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_DECIMAL);
            $this->valueDecimal->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_DECIMAL]);
            $xw->endElement();
        }
        if (isset($this->valueId)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_ID]
                || $this->valueId->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_ID);
            $this->valueId->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_ID]);
            $xw->endElement();
        }
        if (isset($this->valueInstant)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_INSTANT]
                || $this->valueInstant->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_INSTANT);
            $this->valueInstant->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_INSTANT]);
            $xw->endElement();
        }
        if (isset($this->valueInteger)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_INTEGER]
                || $this->valueInteger->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_INTEGER);
            $this->valueInteger->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_INTEGER]);
            $xw->endElement();
        }
        if (isset($this->valueInteger64)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_INTEGER_64]
                || $this->valueInteger64->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_INTEGER_64);
            $this->valueInteger64->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_INTEGER_64]);
            $xw->endElement();
        }
        if (isset($this->valueMarkdown)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_MARKDOWN]
                || $this->valueMarkdown->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_MARKDOWN);
            $this->valueMarkdown->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_MARKDOWN]);
            $xw->endElement();
        }
        if (isset($this->valueOid)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_OID]
                || $this->valueOid->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_OID);
            $this->valueOid->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_OID]);
            $xw->endElement();
        }
        if (isset($this->valuePositiveInt)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_POSITIVE_INT]
                || $this->valuePositiveInt->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_POSITIVE_INT);
            $this->valuePositiveInt->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_POSITIVE_INT]);
            $xw->endElement();
        }
        if (isset($this->valueString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_STRING]
                || $this->valueString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_STRING);
            $this->valueString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_STRING]);
            $xw->endElement();
        }
        if (isset($this->valueTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_TIME]
                || $this->valueTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_TIME);
            $this->valueTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_TIME]);
            $xw->endElement();
        }
        if (isset($this->valueUnsignedInt)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_UNSIGNED_INT]
                || $this->valueUnsignedInt->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_UNSIGNED_INT);
            $this->valueUnsignedInt->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_UNSIGNED_INT]);
            $xw->endElement();
        }
        if (isset($this->valueUri)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_URI]
                || $this->valueUri->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_URI);
            $this->valueUri->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_URI]);
            $xw->endElement();
        }
        if (isset($this->valueUrl)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_URL]
                || $this->valueUrl->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_URL);
            $this->valueUrl->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_URL]);
            $xw->endElement();
        }
        if (isset($this->valueUuid)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_UUID]
                || $this->valueUuid->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_UUID);
            $this->valueUuid->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_UUID]);
            $xw->endElement();
        }
        if (isset($this->valueAddress)) {
            $xw->startElement(self::FIELD_VALUE_ADDRESS);
            $this->valueAddress->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueAge)) {
            $xw->startElement(self::FIELD_VALUE_AGE);
            $this->valueAge->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueAnnotation)) {
            $xw->startElement(self::FIELD_VALUE_ANNOTATION);
            $this->valueAnnotation->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueAttachment)) {
            $xw->startElement(self::FIELD_VALUE_ATTACHMENT);
            $this->valueAttachment->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueCodeableConcept)) {
            $xw->startElement(self::FIELD_VALUE_CODEABLE_CONCEPT);
            $this->valueCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueCodeableReference)) {
            $xw->startElement(self::FIELD_VALUE_CODEABLE_REFERENCE);
            $this->valueCodeableReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueCoding)) {
            $xw->startElement(self::FIELD_VALUE_CODING);
            $this->valueCoding->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueContactPoint)) {
            $xw->startElement(self::FIELD_VALUE_CONTACT_POINT);
            $this->valueContactPoint->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueCount)) {
            $xw->startElement(self::FIELD_VALUE_COUNT);
            $this->valueCount->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueDistance)) {
            $xw->startElement(self::FIELD_VALUE_DISTANCE);
            $this->valueDistance->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueDuration)) {
            $xw->startElement(self::FIELD_VALUE_DURATION);
            $this->valueDuration->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueHumanName)) {
            $xw->startElement(self::FIELD_VALUE_HUMAN_NAME);
            $this->valueHumanName->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueIdentifier)) {
            $xw->startElement(self::FIELD_VALUE_IDENTIFIER);
            $this->valueIdentifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueMoney)) {
            $xw->startElement(self::FIELD_VALUE_MONEY);
            $this->valueMoney->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valuePeriod)) {
            $xw->startElement(self::FIELD_VALUE_PERIOD);
            $this->valuePeriod->xmlSerialize($xw, $config);
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
        if (isset($this->valueRatio)) {
            $xw->startElement(self::FIELD_VALUE_RATIO);
            $this->valueRatio->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueRatioRange)) {
            $xw->startElement(self::FIELD_VALUE_RATIO_RANGE);
            $this->valueRatioRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueReference)) {
            $xw->startElement(self::FIELD_VALUE_REFERENCE);
            $this->valueReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueSampledData)) {
            $xw->startElement(self::FIELD_VALUE_SAMPLED_DATA);
            $this->valueSampledData->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueSignature)) {
            $xw->startElement(self::FIELD_VALUE_SIGNATURE);
            $this->valueSignature->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueTiming)) {
            $xw->startElement(self::FIELD_VALUE_TIMING);
            $this->valueTiming->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueContactDetail)) {
            $xw->startElement(self::FIELD_VALUE_CONTACT_DETAIL);
            $this->valueContactDetail->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueDataRequirement)) {
            $xw->startElement(self::FIELD_VALUE_DATA_REQUIREMENT);
            $this->valueDataRequirement->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueExpression)) {
            $xw->startElement(self::FIELD_VALUE_EXPRESSION);
            $this->valueExpression->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueParameterDefinition)) {
            $xw->startElement(self::FIELD_VALUE_PARAMETER_DEFINITION);
            $this->valueParameterDefinition->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueRelatedArtifact)) {
            $xw->startElement(self::FIELD_VALUE_RELATED_ARTIFACT);
            $this->valueRelatedArtifact->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueTriggerDefinition)) {
            $xw->startElement(self::FIELD_VALUE_TRIGGER_DEFINITION);
            $this->valueTriggerDefinition->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueUsageContext)) {
            $xw->startElement(self::FIELD_VALUE_USAGE_CONTEXT);
            $this->valueUsageContext->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueAvailability)) {
            $xw->startElement(self::FIELD_VALUE_AVAILABILITY);
            $this->valueAvailability->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueExtendedContactDetail)) {
            $xw->startElement(self::FIELD_VALUE_EXTENDED_CONTACT_DETAIL);
            $this->valueExtendedContactDetail->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueDosage)) {
            $xw->startElement(self::FIELD_VALUE_DOSAGE);
            $this->valueDosage->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueMeta)) {
            $xw->startElement(self::FIELD_VALUE_META);
            $this->valueMeta->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->url)) {
            if (ValueXMLLocationEnum::ELEMENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_URL]) {
                $xw->startElement(self::FIELD_URL);
                $xw->writeAttribute(FHIRUriPrimitive::FIELD_VALUE, $this->url->_getFormattedValue());
                $xw->endElement();
            } else if (ValueXMLLocationEnum::ELEMENT_VALUE === $this->_valueXMLLocations[self::FIELD_URL]) {
                $xw->writeElement(self::FIELD_URL, $this->url->_getFormattedValue());
            }
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRExtension)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
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
        if (isset($json[self::FIELD_VALUE_CANONICAL])
            || isset($json[self::FIELD_VALUE_CANONICAL_EXT])
            || array_key_exists(self::FIELD_VALUE_CANONICAL, $json)
            || array_key_exists(self::FIELD_VALUE_CANONICAL_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_CANONICAL] ?? null;
            $type->setValueCanonical(FHIRCanonical::jsonUnserialize(
                (is_array($value) ? $value : [FHIRCanonical::FIELD_VALUE => $value]) + ($json[self::FIELD_VALUE_CANONICAL_EXT] ?? []),
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
        if (isset($json[self::FIELD_VALUE_INTEGER_64])
            || isset($json[self::FIELD_VALUE_INTEGER_64_EXT])
            || array_key_exists(self::FIELD_VALUE_INTEGER_64, $json)
            || array_key_exists(self::FIELD_VALUE_INTEGER_64_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_INTEGER_64] ?? null;
            $type->setValueInteger64(FHIRInteger64::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInteger64::FIELD_VALUE => $value]) + ($json[self::FIELD_VALUE_INTEGER_64_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_MARKDOWN])
            || isset($json[self::FIELD_VALUE_MARKDOWN_EXT])
            || array_key_exists(self::FIELD_VALUE_MARKDOWN, $json)
            || array_key_exists(self::FIELD_VALUE_MARKDOWN_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_MARKDOWN] ?? null;
            $type->setValueMarkdown(FHIRMarkdown::jsonUnserialize(
                (is_array($value) ? $value : [FHIRMarkdown::FIELD_VALUE => $value]) + ($json[self::FIELD_VALUE_MARKDOWN_EXT] ?? []),
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
        if (isset($json[self::FIELD_VALUE_POSITIVE_INT])
            || isset($json[self::FIELD_VALUE_POSITIVE_INT_EXT])
            || array_key_exists(self::FIELD_VALUE_POSITIVE_INT, $json)
            || array_key_exists(self::FIELD_VALUE_POSITIVE_INT_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_POSITIVE_INT] ?? null;
            $type->setValuePositiveInt(FHIRPositiveInt::jsonUnserialize(
                (is_array($value) ? $value : [FHIRPositiveInt::FIELD_VALUE => $value]) + ($json[self::FIELD_VALUE_POSITIVE_INT_EXT] ?? []),
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
        if (isset($json[self::FIELD_VALUE_TIME])
            || isset($json[self::FIELD_VALUE_TIME_EXT])
            || array_key_exists(self::FIELD_VALUE_TIME, $json)
            || array_key_exists(self::FIELD_VALUE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_TIME] ?? null;
            $type->setValueTime(FHIRTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRTime::FIELD_VALUE => $value]) + ($json[self::FIELD_VALUE_TIME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_UNSIGNED_INT])
            || isset($json[self::FIELD_VALUE_UNSIGNED_INT_EXT])
            || array_key_exists(self::FIELD_VALUE_UNSIGNED_INT, $json)
            || array_key_exists(self::FIELD_VALUE_UNSIGNED_INT_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_UNSIGNED_INT] ?? null;
            $type->setValueUnsignedInt(FHIRUnsignedInt::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUnsignedInt::FIELD_VALUE => $value]) + ($json[self::FIELD_VALUE_UNSIGNED_INT_EXT] ?? []),
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
        if (isset($json[self::FIELD_VALUE_URL])
            || isset($json[self::FIELD_VALUE_URL_EXT])
            || array_key_exists(self::FIELD_VALUE_URL, $json)
            || array_key_exists(self::FIELD_VALUE_URL_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_URL] ?? null;
            $type->setValueUrl(FHIRUrl::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUrl::FIELD_VALUE => $value]) + ($json[self::FIELD_VALUE_URL_EXT] ?? []),
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
        if (isset($json[self::FIELD_VALUE_ADDRESS]) || array_key_exists(self::FIELD_VALUE_ADDRESS, $json)) {
            $type->setValueAddress(FHIRAddress::jsonUnserialize($json[self::FIELD_VALUE_ADDRESS], $config));
        }
        if (isset($json[self::FIELD_VALUE_AGE]) || array_key_exists(self::FIELD_VALUE_AGE, $json)) {
            $type->setValueAge(FHIRAge::jsonUnserialize($json[self::FIELD_VALUE_AGE], $config));
        }
        if (isset($json[self::FIELD_VALUE_ANNOTATION]) || array_key_exists(self::FIELD_VALUE_ANNOTATION, $json)) {
            $type->setValueAnnotation(FHIRAnnotation::jsonUnserialize($json[self::FIELD_VALUE_ANNOTATION], $config));
        }
        if (isset($json[self::FIELD_VALUE_ATTACHMENT]) || array_key_exists(self::FIELD_VALUE_ATTACHMENT, $json)) {
            $type->setValueAttachment(FHIRAttachment::jsonUnserialize($json[self::FIELD_VALUE_ATTACHMENT], $config));
        }
        if (isset($json[self::FIELD_VALUE_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_VALUE_CODEABLE_CONCEPT, $json)) {
            $type->setValueCodeableConcept(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_VALUE_CODEABLE_CONCEPT], $config));
        }
        if (isset($json[self::FIELD_VALUE_CODEABLE_REFERENCE]) || array_key_exists(self::FIELD_VALUE_CODEABLE_REFERENCE, $json)) {
            $type->setValueCodeableReference(FHIRCodeableReference::jsonUnserialize($json[self::FIELD_VALUE_CODEABLE_REFERENCE], $config));
        }
        if (isset($json[self::FIELD_VALUE_CODING]) || array_key_exists(self::FIELD_VALUE_CODING, $json)) {
            $type->setValueCoding(FHIRCoding::jsonUnserialize($json[self::FIELD_VALUE_CODING], $config));
        }
        if (isset($json[self::FIELD_VALUE_CONTACT_POINT]) || array_key_exists(self::FIELD_VALUE_CONTACT_POINT, $json)) {
            $type->setValueContactPoint(FHIRContactPoint::jsonUnserialize($json[self::FIELD_VALUE_CONTACT_POINT], $config));
        }
        if (isset($json[self::FIELD_VALUE_COUNT]) || array_key_exists(self::FIELD_VALUE_COUNT, $json)) {
            $type->setValueCount(FHIRCount::jsonUnserialize($json[self::FIELD_VALUE_COUNT], $config));
        }
        if (isset($json[self::FIELD_VALUE_DISTANCE]) || array_key_exists(self::FIELD_VALUE_DISTANCE, $json)) {
            $type->setValueDistance(FHIRDistance::jsonUnserialize($json[self::FIELD_VALUE_DISTANCE], $config));
        }
        if (isset($json[self::FIELD_VALUE_DURATION]) || array_key_exists(self::FIELD_VALUE_DURATION, $json)) {
            $type->setValueDuration(FHIRDuration::jsonUnserialize($json[self::FIELD_VALUE_DURATION], $config));
        }
        if (isset($json[self::FIELD_VALUE_HUMAN_NAME]) || array_key_exists(self::FIELD_VALUE_HUMAN_NAME, $json)) {
            $type->setValueHumanName(FHIRHumanName::jsonUnserialize($json[self::FIELD_VALUE_HUMAN_NAME], $config));
        }
        if (isset($json[self::FIELD_VALUE_IDENTIFIER]) || array_key_exists(self::FIELD_VALUE_IDENTIFIER, $json)) {
            $type->setValueIdentifier(FHIRIdentifier::jsonUnserialize($json[self::FIELD_VALUE_IDENTIFIER], $config));
        }
        if (isset($json[self::FIELD_VALUE_MONEY]) || array_key_exists(self::FIELD_VALUE_MONEY, $json)) {
            $type->setValueMoney(FHIRMoney::jsonUnserialize($json[self::FIELD_VALUE_MONEY], $config));
        }
        if (isset($json[self::FIELD_VALUE_PERIOD]) || array_key_exists(self::FIELD_VALUE_PERIOD, $json)) {
            $type->setValuePeriod(FHIRPeriod::jsonUnserialize($json[self::FIELD_VALUE_PERIOD], $config));
        }
        if (isset($json[self::FIELD_VALUE_QUANTITY]) || array_key_exists(self::FIELD_VALUE_QUANTITY, $json)) {
            $type->setValueQuantity(FHIRQuantity::jsonUnserialize($json[self::FIELD_VALUE_QUANTITY], $config));
        }
        if (isset($json[self::FIELD_VALUE_RANGE]) || array_key_exists(self::FIELD_VALUE_RANGE, $json)) {
            $type->setValueRange(FHIRRange::jsonUnserialize($json[self::FIELD_VALUE_RANGE], $config));
        }
        if (isset($json[self::FIELD_VALUE_RATIO]) || array_key_exists(self::FIELD_VALUE_RATIO, $json)) {
            $type->setValueRatio(FHIRRatio::jsonUnserialize($json[self::FIELD_VALUE_RATIO], $config));
        }
        if (isset($json[self::FIELD_VALUE_RATIO_RANGE]) || array_key_exists(self::FIELD_VALUE_RATIO_RANGE, $json)) {
            $type->setValueRatioRange(FHIRRatioRange::jsonUnserialize($json[self::FIELD_VALUE_RATIO_RANGE], $config));
        }
        if (isset($json[self::FIELD_VALUE_REFERENCE]) || array_key_exists(self::FIELD_VALUE_REFERENCE, $json)) {
            $type->setValueReference(FHIRReference::jsonUnserialize($json[self::FIELD_VALUE_REFERENCE], $config));
        }
        if (isset($json[self::FIELD_VALUE_SAMPLED_DATA]) || array_key_exists(self::FIELD_VALUE_SAMPLED_DATA, $json)) {
            $type->setValueSampledData(FHIRSampledData::jsonUnserialize($json[self::FIELD_VALUE_SAMPLED_DATA], $config));
        }
        if (isset($json[self::FIELD_VALUE_SIGNATURE]) || array_key_exists(self::FIELD_VALUE_SIGNATURE, $json)) {
            $type->setValueSignature(FHIRSignature::jsonUnserialize($json[self::FIELD_VALUE_SIGNATURE], $config));
        }
        if (isset($json[self::FIELD_VALUE_TIMING]) || array_key_exists(self::FIELD_VALUE_TIMING, $json)) {
            $type->setValueTiming(FHIRTiming::jsonUnserialize($json[self::FIELD_VALUE_TIMING], $config));
        }
        if (isset($json[self::FIELD_VALUE_CONTACT_DETAIL]) || array_key_exists(self::FIELD_VALUE_CONTACT_DETAIL, $json)) {
            $type->setValueContactDetail(FHIRContactDetail::jsonUnserialize($json[self::FIELD_VALUE_CONTACT_DETAIL], $config));
        }
        if (isset($json[self::FIELD_VALUE_DATA_REQUIREMENT]) || array_key_exists(self::FIELD_VALUE_DATA_REQUIREMENT, $json)) {
            $type->setValueDataRequirement(FHIRDataRequirement::jsonUnserialize($json[self::FIELD_VALUE_DATA_REQUIREMENT], $config));
        }
        if (isset($json[self::FIELD_VALUE_EXPRESSION]) || array_key_exists(self::FIELD_VALUE_EXPRESSION, $json)) {
            $type->setValueExpression(FHIRExpression::jsonUnserialize($json[self::FIELD_VALUE_EXPRESSION], $config));
        }
        if (isset($json[self::FIELD_VALUE_PARAMETER_DEFINITION]) || array_key_exists(self::FIELD_VALUE_PARAMETER_DEFINITION, $json)) {
            $type->setValueParameterDefinition(FHIRParameterDefinition::jsonUnserialize($json[self::FIELD_VALUE_PARAMETER_DEFINITION], $config));
        }
        if (isset($json[self::FIELD_VALUE_RELATED_ARTIFACT]) || array_key_exists(self::FIELD_VALUE_RELATED_ARTIFACT, $json)) {
            $type->setValueRelatedArtifact(FHIRRelatedArtifact::jsonUnserialize($json[self::FIELD_VALUE_RELATED_ARTIFACT], $config));
        }
        if (isset($json[self::FIELD_VALUE_TRIGGER_DEFINITION]) || array_key_exists(self::FIELD_VALUE_TRIGGER_DEFINITION, $json)) {
            $type->setValueTriggerDefinition(FHIRTriggerDefinition::jsonUnserialize($json[self::FIELD_VALUE_TRIGGER_DEFINITION], $config));
        }
        if (isset($json[self::FIELD_VALUE_USAGE_CONTEXT]) || array_key_exists(self::FIELD_VALUE_USAGE_CONTEXT, $json)) {
            $type->setValueUsageContext(FHIRUsageContext::jsonUnserialize($json[self::FIELD_VALUE_USAGE_CONTEXT], $config));
        }
        if (isset($json[self::FIELD_VALUE_AVAILABILITY]) || array_key_exists(self::FIELD_VALUE_AVAILABILITY, $json)) {
            $type->setValueAvailability(FHIRAvailability::jsonUnserialize($json[self::FIELD_VALUE_AVAILABILITY], $config));
        }
        if (isset($json[self::FIELD_VALUE_EXTENDED_CONTACT_DETAIL]) || array_key_exists(self::FIELD_VALUE_EXTENDED_CONTACT_DETAIL, $json)) {
            $type->setValueExtendedContactDetail(FHIRExtendedContactDetail::jsonUnserialize($json[self::FIELD_VALUE_EXTENDED_CONTACT_DETAIL], $config));
        }
        if (isset($json[self::FIELD_VALUE_DOSAGE]) || array_key_exists(self::FIELD_VALUE_DOSAGE, $json)) {
            $type->setValueDosage(FHIRDosage::jsonUnserialize($json[self::FIELD_VALUE_DOSAGE], $config));
        }
        if (isset($json[self::FIELD_VALUE_META]) || array_key_exists(self::FIELD_VALUE_META, $json)) {
            $type->setValueMeta(FHIRMeta::jsonUnserialize($json[self::FIELD_VALUE_META], $config));
        }
        if ([] === $json) {
            return $type;
        }
        if (isset($json[self::FIELD_URL]) || array_key_exists(self::FIELD_URL, $json)) {
            $type->setUrl($json[self::FIELD_URL]);
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
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
        if (isset($this->valueCanonical)) {
            if (null !== ($val = $this->valueCanonical->getValue())) {
                $out->valueCanonical = $val;
            }
            if ($this->valueCanonical->_nonValueFieldDefined()) {
                $ext = $this->valueCanonical->jsonSerialize();
                unset($ext->value);
                $out->_valueCanonical = $ext;
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
        if (isset($this->valueInteger64)) {
            if (null !== ($val = $this->valueInteger64->getValue())) {
                $out->valueInteger64 = $val;
            }
            if ($this->valueInteger64->_nonValueFieldDefined()) {
                $ext = $this->valueInteger64->jsonSerialize();
                unset($ext->value);
                $out->_valueInteger64 = $ext;
            }
        }
        if (isset($this->valueMarkdown)) {
            if (null !== ($val = $this->valueMarkdown->getValue())) {
                $out->valueMarkdown = $val;
            }
            if ($this->valueMarkdown->_nonValueFieldDefined()) {
                $ext = $this->valueMarkdown->jsonSerialize();
                unset($ext->value);
                $out->_valueMarkdown = $ext;
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
        if (isset($this->valuePositiveInt)) {
            if (null !== ($val = $this->valuePositiveInt->getValue())) {
                $out->valuePositiveInt = $val;
            }
            if ($this->valuePositiveInt->_nonValueFieldDefined()) {
                $ext = $this->valuePositiveInt->jsonSerialize();
                unset($ext->value);
                $out->_valuePositiveInt = $ext;
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
        if (isset($this->valueTime)) {
            if (null !== ($val = $this->valueTime->getValue())) {
                $out->valueTime = $val;
            }
            if ($this->valueTime->_nonValueFieldDefined()) {
                $ext = $this->valueTime->jsonSerialize();
                unset($ext->value);
                $out->_valueTime = $ext;
            }
        }
        if (isset($this->valueUnsignedInt)) {
            if (null !== ($val = $this->valueUnsignedInt->getValue())) {
                $out->valueUnsignedInt = $val;
            }
            if ($this->valueUnsignedInt->_nonValueFieldDefined()) {
                $ext = $this->valueUnsignedInt->jsonSerialize();
                unset($ext->value);
                $out->_valueUnsignedInt = $ext;
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
        if (isset($this->valueUrl)) {
            if (null !== ($val = $this->valueUrl->getValue())) {
                $out->valueUrl = $val;
            }
            if ($this->valueUrl->_nonValueFieldDefined()) {
                $ext = $this->valueUrl->jsonSerialize();
                unset($ext->value);
                $out->_valueUrl = $ext;
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
        if (isset($this->valueAddress)) {
            $out->valueAddress = $this->valueAddress;
        }
        if (isset($this->valueAge)) {
            $out->valueAge = $this->valueAge;
        }
        if (isset($this->valueAnnotation)) {
            $out->valueAnnotation = $this->valueAnnotation;
        }
        if (isset($this->valueAttachment)) {
            $out->valueAttachment = $this->valueAttachment;
        }
        if (isset($this->valueCodeableConcept)) {
            $out->valueCodeableConcept = $this->valueCodeableConcept;
        }
        if (isset($this->valueCodeableReference)) {
            $out->valueCodeableReference = $this->valueCodeableReference;
        }
        if (isset($this->valueCoding)) {
            $out->valueCoding = $this->valueCoding;
        }
        if (isset($this->valueContactPoint)) {
            $out->valueContactPoint = $this->valueContactPoint;
        }
        if (isset($this->valueCount)) {
            $out->valueCount = $this->valueCount;
        }
        if (isset($this->valueDistance)) {
            $out->valueDistance = $this->valueDistance;
        }
        if (isset($this->valueDuration)) {
            $out->valueDuration = $this->valueDuration;
        }
        if (isset($this->valueHumanName)) {
            $out->valueHumanName = $this->valueHumanName;
        }
        if (isset($this->valueIdentifier)) {
            $out->valueIdentifier = $this->valueIdentifier;
        }
        if (isset($this->valueMoney)) {
            $out->valueMoney = $this->valueMoney;
        }
        if (isset($this->valuePeriod)) {
            $out->valuePeriod = $this->valuePeriod;
        }
        if (isset($this->valueQuantity)) {
            $out->valueQuantity = $this->valueQuantity;
        }
        if (isset($this->valueRange)) {
            $out->valueRange = $this->valueRange;
        }
        if (isset($this->valueRatio)) {
            $out->valueRatio = $this->valueRatio;
        }
        if (isset($this->valueRatioRange)) {
            $out->valueRatioRange = $this->valueRatioRange;
        }
        if (isset($this->valueReference)) {
            $out->valueReference = $this->valueReference;
        }
        if (isset($this->valueSampledData)) {
            $out->valueSampledData = $this->valueSampledData;
        }
        if (isset($this->valueSignature)) {
            $out->valueSignature = $this->valueSignature;
        }
        if (isset($this->valueTiming)) {
            $out->valueTiming = $this->valueTiming;
        }
        if (isset($this->valueContactDetail)) {
            $out->valueContactDetail = $this->valueContactDetail;
        }
        if (isset($this->valueDataRequirement)) {
            $out->valueDataRequirement = $this->valueDataRequirement;
        }
        if (isset($this->valueExpression)) {
            $out->valueExpression = $this->valueExpression;
        }
        if (isset($this->valueParameterDefinition)) {
            $out->valueParameterDefinition = $this->valueParameterDefinition;
        }
        if (isset($this->valueRelatedArtifact)) {
            $out->valueRelatedArtifact = $this->valueRelatedArtifact;
        }
        if (isset($this->valueTriggerDefinition)) {
            $out->valueTriggerDefinition = $this->valueTriggerDefinition;
        }
        if (isset($this->valueUsageContext)) {
            $out->valueUsageContext = $this->valueUsageContext;
        }
        if (isset($this->valueAvailability)) {
            $out->valueAvailability = $this->valueAvailability;
        }
        if (isset($this->valueExtendedContactDetail)) {
            $out->valueExtendedContactDetail = $this->valueExtendedContactDetail;
        }
        if (isset($this->valueDosage)) {
            $out->valueDosage = $this->valueDosage;
        }
        if (isset($this->valueMeta)) {
            $out->valueMeta = $this->valueMeta;
        }
        if (isset($this->url)) {
            $out->url = $this->url;
        }
        return $out;
    }
}