<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 3rd, 2025 23:46+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
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
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBase64BinaryPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRStructureMapSourceListModeList;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAddress;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDosage;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBase64Binary;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRContactDetail;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRContactPoint;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRContributor;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExpression;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRHumanName;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMoney;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIROid;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRParameterDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRAge;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRCount;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDistance;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRelatedArtifact;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRSampledData;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRSignature;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRStructureMapSourceListMode;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTime;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTriggerDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUrl;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUsageContext;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUuid;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIROidPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUnsignedIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUrlPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUuidPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * A Map of relationships between 2 structures that can be used to transform data.
 */
class FHIRStructureMapSource extends FHIRBackboneElement
{
    use TypeValidationsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE;

    /* class_default.php:47 */
    public const FIELD_CONTEXT = 'context';
    public const FIELD_CONTEXT_EXT = '_context';
    public const FIELD_MIN = 'min';
    public const FIELD_MIN_EXT = '_min';
    public const FIELD_MAX = 'max';
    public const FIELD_MAX_EXT = '_max';
    public const FIELD_TYPE = 'type';
    public const FIELD_TYPE_EXT = '_type';
    public const FIELD_DEFAULT_VALUE_BASE_64BINARY = 'defaultValueBase64Binary';
    public const FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT = '_defaultValueBase64Binary';
    public const FIELD_DEFAULT_VALUE_BOOLEAN = 'defaultValueBoolean';
    public const FIELD_DEFAULT_VALUE_BOOLEAN_EXT = '_defaultValueBoolean';
    public const FIELD_DEFAULT_VALUE_CANONICAL = 'defaultValueCanonical';
    public const FIELD_DEFAULT_VALUE_CANONICAL_EXT = '_defaultValueCanonical';
    public const FIELD_DEFAULT_VALUE_CODE = 'defaultValueCode';
    public const FIELD_DEFAULT_VALUE_CODE_EXT = '_defaultValueCode';
    public const FIELD_DEFAULT_VALUE_DATE = 'defaultValueDate';
    public const FIELD_DEFAULT_VALUE_DATE_EXT = '_defaultValueDate';
    public const FIELD_DEFAULT_VALUE_DATE_TIME = 'defaultValueDateTime';
    public const FIELD_DEFAULT_VALUE_DATE_TIME_EXT = '_defaultValueDateTime';
    public const FIELD_DEFAULT_VALUE_DECIMAL = 'defaultValueDecimal';
    public const FIELD_DEFAULT_VALUE_DECIMAL_EXT = '_defaultValueDecimal';
    public const FIELD_DEFAULT_VALUE_ID = 'defaultValueId';
    public const FIELD_DEFAULT_VALUE_ID_EXT = '_defaultValueId';
    public const FIELD_DEFAULT_VALUE_INSTANT = 'defaultValueInstant';
    public const FIELD_DEFAULT_VALUE_INSTANT_EXT = '_defaultValueInstant';
    public const FIELD_DEFAULT_VALUE_INTEGER = 'defaultValueInteger';
    public const FIELD_DEFAULT_VALUE_INTEGER_EXT = '_defaultValueInteger';
    public const FIELD_DEFAULT_VALUE_MARKDOWN = 'defaultValueMarkdown';
    public const FIELD_DEFAULT_VALUE_MARKDOWN_EXT = '_defaultValueMarkdown';
    public const FIELD_DEFAULT_VALUE_OID = 'defaultValueOid';
    public const FIELD_DEFAULT_VALUE_OID_EXT = '_defaultValueOid';
    public const FIELD_DEFAULT_VALUE_POSITIVE_INT = 'defaultValuePositiveInt';
    public const FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT = '_defaultValuePositiveInt';
    public const FIELD_DEFAULT_VALUE_STRING = 'defaultValueString';
    public const FIELD_DEFAULT_VALUE_STRING_EXT = '_defaultValueString';
    public const FIELD_DEFAULT_VALUE_TIME = 'defaultValueTime';
    public const FIELD_DEFAULT_VALUE_TIME_EXT = '_defaultValueTime';
    public const FIELD_DEFAULT_VALUE_UNSIGNED_INT = 'defaultValueUnsignedInt';
    public const FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT = '_defaultValueUnsignedInt';
    public const FIELD_DEFAULT_VALUE_URI = 'defaultValueUri';
    public const FIELD_DEFAULT_VALUE_URI_EXT = '_defaultValueUri';
    public const FIELD_DEFAULT_VALUE_URL = 'defaultValueUrl';
    public const FIELD_DEFAULT_VALUE_URL_EXT = '_defaultValueUrl';
    public const FIELD_DEFAULT_VALUE_UUID = 'defaultValueUuid';
    public const FIELD_DEFAULT_VALUE_UUID_EXT = '_defaultValueUuid';
    public const FIELD_DEFAULT_VALUE_ADDRESS = 'defaultValueAddress';
    public const FIELD_DEFAULT_VALUE_AGE = 'defaultValueAge';
    public const FIELD_DEFAULT_VALUE_ANNOTATION = 'defaultValueAnnotation';
    public const FIELD_DEFAULT_VALUE_ATTACHMENT = 'defaultValueAttachment';
    public const FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT = 'defaultValueCodeableConcept';
    public const FIELD_DEFAULT_VALUE_CODING = 'defaultValueCoding';
    public const FIELD_DEFAULT_VALUE_CONTACT_POINT = 'defaultValueContactPoint';
    public const FIELD_DEFAULT_VALUE_COUNT = 'defaultValueCount';
    public const FIELD_DEFAULT_VALUE_DISTANCE = 'defaultValueDistance';
    public const FIELD_DEFAULT_VALUE_DURATION = 'defaultValueDuration';
    public const FIELD_DEFAULT_VALUE_HUMAN_NAME = 'defaultValueHumanName';
    public const FIELD_DEFAULT_VALUE_IDENTIFIER = 'defaultValueIdentifier';
    public const FIELD_DEFAULT_VALUE_MONEY = 'defaultValueMoney';
    public const FIELD_DEFAULT_VALUE_PERIOD = 'defaultValuePeriod';
    public const FIELD_DEFAULT_VALUE_QUANTITY = 'defaultValueQuantity';
    public const FIELD_DEFAULT_VALUE_RANGE = 'defaultValueRange';
    public const FIELD_DEFAULT_VALUE_RATIO = 'defaultValueRatio';
    public const FIELD_DEFAULT_VALUE_REFERENCE = 'defaultValueReference';
    public const FIELD_DEFAULT_VALUE_SAMPLED_DATA = 'defaultValueSampledData';
    public const FIELD_DEFAULT_VALUE_SIGNATURE = 'defaultValueSignature';
    public const FIELD_DEFAULT_VALUE_TIMING = 'defaultValueTiming';
    public const FIELD_DEFAULT_VALUE_CONTACT_DETAIL = 'defaultValueContactDetail';
    public const FIELD_DEFAULT_VALUE_CONTRIBUTOR = 'defaultValueContributor';
    public const FIELD_DEFAULT_VALUE_DATA_REQUIREMENT = 'defaultValueDataRequirement';
    public const FIELD_DEFAULT_VALUE_EXPRESSION = 'defaultValueExpression';
    public const FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION = 'defaultValueParameterDefinition';
    public const FIELD_DEFAULT_VALUE_RELATED_ARTIFACT = 'defaultValueRelatedArtifact';
    public const FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION = 'defaultValueTriggerDefinition';
    public const FIELD_DEFAULT_VALUE_USAGE_CONTEXT = 'defaultValueUsageContext';
    public const FIELD_DEFAULT_VALUE_DOSAGE = 'defaultValueDosage';
    public const FIELD_DEFAULT_VALUE_META = 'defaultValueMeta';
    public const FIELD_ELEMENT = 'element';
    public const FIELD_ELEMENT_EXT = '_element';
    public const FIELD_LIST_MODE = 'listMode';
    public const FIELD_LIST_MODE_EXT = '_listMode';
    public const FIELD_VARIABLE = 'variable';
    public const FIELD_VARIABLE_EXT = '_variable';
    public const FIELD_CONDITION = 'condition';
    public const FIELD_CONDITION_EXT = '_condition';
    public const FIELD_CHECK = 'check';
    public const FIELD_CHECK_EXT = '_check';
    public const FIELD_LOG_MESSAGE = 'logMessage';
    public const FIELD_LOG_MESSAGE_EXT = '_logMessage';

    /* class_default.php:66 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_CONTEXT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:95 */
    private array $_valueXMLLocations = [
        self::FIELD_CONTEXT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MIN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MAX => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TYPE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEFAULT_VALUE_BASE_64BINARY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEFAULT_VALUE_BOOLEAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEFAULT_VALUE_CANONICAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEFAULT_VALUE_CODE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEFAULT_VALUE_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEFAULT_VALUE_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEFAULT_VALUE_DECIMAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEFAULT_VALUE_ID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEFAULT_VALUE_INSTANT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEFAULT_VALUE_INTEGER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEFAULT_VALUE_MARKDOWN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEFAULT_VALUE_OID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEFAULT_VALUE_POSITIVE_INT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEFAULT_VALUE_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEFAULT_VALUE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEFAULT_VALUE_UNSIGNED_INT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEFAULT_VALUE_URI => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEFAULT_VALUE_URL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEFAULT_VALUE_UUID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ELEMENT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_LIST_MODE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VARIABLE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CONDITION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CHECK => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_LOG_MESSAGE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:111 */
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId 
     */
    protected FHIRId $context;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified minimum cardinality for the element. This is optional; if present, it
     * acts an implicit check on the input content.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $min;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified maximum cardinality for the element - a number or a "*". This is
     * optional; if present, it acts an implicit check on the input content (* just
     * serves as documentation; it's the default value).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $max;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified type for the element. This works as a condition on the mapping - use
     * for polymorphic elements.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $type;
    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBase64Binary 
     */
    protected FHIRBase64Binary $defaultValueBase64Binary;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $defaultValueBoolean;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical 
     */
    protected FHIRCanonical $defaultValueCanonical;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode 
     */
    protected FHIRCode $defaultValueCode;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $defaultValueDate;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $defaultValueDateTime;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $defaultValueDecimal;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId 
     */
    protected FHIRId $defaultValueId;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInstant 
     */
    protected FHIRInstant $defaultValueInstant;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $defaultValueInteger;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $defaultValueMarkdown;
    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIROid 
     */
    protected FHIROid $defaultValueOid;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $defaultValuePositiveInt;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $defaultValueString;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTime 
     */
    protected FHIRTime $defaultValueTime;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUnsignedInt 
     */
    protected FHIRUnsignedInt $defaultValueUnsignedInt;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $defaultValueUri;
    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUrl 
     */
    protected FHIRUrl $defaultValueUrl;
    /**
     * A UUID, represented as a URI
     * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUuid 
     */
    protected FHIRUuid $defaultValueUuid;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAddress 
     */
    protected FHIRAddress $defaultValueAddress;
    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRAge 
     */
    protected FHIRAge $defaultValueAge;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAnnotation 
     */
    protected FHIRAnnotation $defaultValueAnnotation;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAttachment 
     */
    protected FHIRAttachment $defaultValueAttachment;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $defaultValueCodeableConcept;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCoding 
     */
    protected FHIRCoding $defaultValueCoding;
    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRContactPoint 
     */
    protected FHIRContactPoint $defaultValueContactPoint;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRCount 
     */
    protected FHIRCount $defaultValueCount;
    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDistance 
     */
    protected FHIRDistance $defaultValueDistance;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDuration 
     */
    protected FHIRDuration $defaultValueDuration;
    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRHumanName 
     */
    protected FHIRHumanName $defaultValueHumanName;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier 
     */
    protected FHIRIdentifier $defaultValueIdentifier;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMoney 
     */
    protected FHIRMoney $defaultValueMoney;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $defaultValuePeriod;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $defaultValueQuantity;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $defaultValueRange;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio 
     */
    protected FHIRRatio $defaultValueRatio;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $defaultValueReference;
    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRSampledData 
     */
    protected FHIRSampledData $defaultValueSampledData;
    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRSignature 
     */
    protected FHIRSignature $defaultValueSignature;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTiming 
     */
    protected FHIRTiming $defaultValueTiming;
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRContactDetail 
     */
    protected FHIRContactDetail $defaultValueContactDetail;
    /**
     * A contributor to the content of a knowledge asset, including authors, editors,
     * reviewers, and endorsers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRContributor 
     */
    protected FHIRContributor $defaultValueContributor;
    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement 
     */
    protected FHIRDataRequirement $defaultValueDataRequirement;
    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExpression 
     */
    protected FHIRExpression $defaultValueExpression;
    /**
     * The parameters to the module. This collection specifies both the input and
     * output parameters. Input parameters are provided by the caller as part of the
     * $evaluate operation. Output parameters are included in the GuidanceResponse.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRParameterDefinition 
     */
    protected FHIRParameterDefinition $defaultValueParameterDefinition;
    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRelatedArtifact 
     */
    protected FHIRRelatedArtifact $defaultValueRelatedArtifact;
    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTriggerDefinition 
     */
    protected FHIRTriggerDefinition $defaultValueTriggerDefinition;
    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUsageContext 
     */
    protected FHIRUsageContext $defaultValueUsageContext;
    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDosage 
     */
    protected FHIRDosage $defaultValueDosage;
    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content might not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta 
     */
    protected FHIRMeta $defaultValueMeta;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Optional field for this source.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $element;
    /**
     * If field is a list, how to manage the source.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How to handle the list mode for this element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRStructureMapSourceListMode 
     */
    protected FHIRStructureMapSourceListMode $listMode;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId 
     */
    protected FHIRId $variable;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * FHIRPath expression - must be true or the rule does not apply.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $condition;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * FHIRPath expression - must be true or the mapping engine throws an error instead
     * of completing.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $check;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A FHIRPath expression which specifies a message to put in the transform log when
     * content matching the source rule is found.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $logMessage;

    /* constructor.php:62 */
    /**
     * FHIRStructureMapSource Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $context
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger $min
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $max
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $type
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBase64Binary $defaultValueBase64Binary
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean $defaultValueBoolean
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical $defaultValueCanonical
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode $defaultValueCode
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDate $defaultValueDate
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime $defaultValueDateTime
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDecimal $defaultValueDecimal
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $defaultValueId
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInstant $defaultValueInstant
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger $defaultValueInteger
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMarkdown $defaultValueMarkdown
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIROid $defaultValueOid
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt $defaultValuePositiveInt
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $defaultValueString
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTime $defaultValueTime
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUnsignedInt $defaultValueUnsignedInt
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri $defaultValueUri
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUrlPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUrl $defaultValueUrl
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUuidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUuid $defaultValueUuid
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAddress $defaultValueAddress
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRAge $defaultValueAge
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAnnotation $defaultValueAnnotation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAttachment $defaultValueAttachment
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $defaultValueCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCoding $defaultValueCoding
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRContactPoint $defaultValueContactPoint
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRCount $defaultValueCount
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDistance $defaultValueDistance
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDuration $defaultValueDuration
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRHumanName $defaultValueHumanName
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier $defaultValueIdentifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMoney $defaultValueMoney
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod $defaultValuePeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $defaultValueQuantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRange $defaultValueRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio $defaultValueRatio
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $defaultValueReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRSampledData $defaultValueSampledData
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRSignature $defaultValueSignature
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTiming $defaultValueTiming
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRContactDetail $defaultValueContactDetail
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRContributor $defaultValueContributor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement $defaultValueDataRequirement
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExpression $defaultValueExpression
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRParameterDefinition $defaultValueParameterDefinition
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRelatedArtifact $defaultValueRelatedArtifact
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTriggerDefinition $defaultValueTriggerDefinition
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUsageContext $defaultValueUsageContext
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDosage $defaultValueDosage
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta $defaultValueMeta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $element
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRStructureMapSourceListModeList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRStructureMapSourceListMode $listMode
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $variable
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $condition
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $check
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $logMessage
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRIdPrimitive|FHIRId $context = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $min = null,
                                null|string|FHIRStringPrimitive|FHIRString $max = null,
                                null|string|FHIRStringPrimitive|FHIRString $type = null,
                                null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $defaultValueBase64Binary = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $defaultValueBoolean = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $defaultValueCanonical = null,
                                null|string|FHIRCodePrimitive|FHIRCode $defaultValueCode = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $defaultValueDate = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $defaultValueDateTime = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $defaultValueDecimal = null,
                                null|string|FHIRIdPrimitive|FHIRId $defaultValueId = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $defaultValueInstant = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $defaultValueInteger = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $defaultValueMarkdown = null,
                                null|string|FHIROidPrimitive|FHIROid $defaultValueOid = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $defaultValuePositiveInt = null,
                                null|string|FHIRStringPrimitive|FHIRString $defaultValueString = null,
                                null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $defaultValueTime = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $defaultValueUnsignedInt = null,
                                null|string|FHIRUriPrimitive|FHIRUri $defaultValueUri = null,
                                null|string|FHIRUrlPrimitive|FHIRUrl $defaultValueUrl = null,
                                null|string|FHIRUuidPrimitive|FHIRUuid $defaultValueUuid = null,
                                null|FHIRAddress $defaultValueAddress = null,
                                null|FHIRAge $defaultValueAge = null,
                                null|FHIRAnnotation $defaultValueAnnotation = null,
                                null|FHIRAttachment $defaultValueAttachment = null,
                                null|FHIRCodeableConcept $defaultValueCodeableConcept = null,
                                null|FHIRCoding $defaultValueCoding = null,
                                null|FHIRContactPoint $defaultValueContactPoint = null,
                                null|FHIRCount $defaultValueCount = null,
                                null|FHIRDistance $defaultValueDistance = null,
                                null|FHIRDuration $defaultValueDuration = null,
                                null|FHIRHumanName $defaultValueHumanName = null,
                                null|FHIRIdentifier $defaultValueIdentifier = null,
                                null|FHIRMoney $defaultValueMoney = null,
                                null|FHIRPeriod $defaultValuePeriod = null,
                                null|FHIRQuantity $defaultValueQuantity = null,
                                null|FHIRRange $defaultValueRange = null,
                                null|FHIRRatio $defaultValueRatio = null,
                                null|FHIRReference $defaultValueReference = null,
                                null|FHIRSampledData $defaultValueSampledData = null,
                                null|FHIRSignature $defaultValueSignature = null,
                                null|FHIRTiming $defaultValueTiming = null,
                                null|FHIRContactDetail $defaultValueContactDetail = null,
                                null|FHIRContributor $defaultValueContributor = null,
                                null|FHIRDataRequirement $defaultValueDataRequirement = null,
                                null|FHIRExpression $defaultValueExpression = null,
                                null|FHIRParameterDefinition $defaultValueParameterDefinition = null,
                                null|FHIRRelatedArtifact $defaultValueRelatedArtifact = null,
                                null|FHIRTriggerDefinition $defaultValueTriggerDefinition = null,
                                null|FHIRUsageContext $defaultValueUsageContext = null,
                                null|FHIRDosage $defaultValueDosage = null,
                                null|FHIRMeta $defaultValueMeta = null,
                                null|string|FHIRStringPrimitive|FHIRString $element = null,
                                null|string|FHIRStructureMapSourceListModeList|FHIRStructureMapSourceListMode $listMode = null,
                                null|string|FHIRIdPrimitive|FHIRId $variable = null,
                                null|string|FHIRStringPrimitive|FHIRString $condition = null,
                                null|string|FHIRStringPrimitive|FHIRString $check = null,
                                null|string|FHIRStringPrimitive|FHIRString $logMessage = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $context) {
            $this->setContext($context);
        }
        if (null !== $min) {
            $this->setMin($min);
        }
        if (null !== $max) {
            $this->setMax($max);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $defaultValueBase64Binary) {
            $this->setDefaultValueBase64Binary($defaultValueBase64Binary);
        }
        if (null !== $defaultValueBoolean) {
            $this->setDefaultValueBoolean($defaultValueBoolean);
        }
        if (null !== $defaultValueCanonical) {
            $this->setDefaultValueCanonical($defaultValueCanonical);
        }
        if (null !== $defaultValueCode) {
            $this->setDefaultValueCode($defaultValueCode);
        }
        if (null !== $defaultValueDate) {
            $this->setDefaultValueDate($defaultValueDate);
        }
        if (null !== $defaultValueDateTime) {
            $this->setDefaultValueDateTime($defaultValueDateTime);
        }
        if (null !== $defaultValueDecimal) {
            $this->setDefaultValueDecimal($defaultValueDecimal);
        }
        if (null !== $defaultValueId) {
            $this->setDefaultValueId($defaultValueId);
        }
        if (null !== $defaultValueInstant) {
            $this->setDefaultValueInstant($defaultValueInstant);
        }
        if (null !== $defaultValueInteger) {
            $this->setDefaultValueInteger($defaultValueInteger);
        }
        if (null !== $defaultValueMarkdown) {
            $this->setDefaultValueMarkdown($defaultValueMarkdown);
        }
        if (null !== $defaultValueOid) {
            $this->setDefaultValueOid($defaultValueOid);
        }
        if (null !== $defaultValuePositiveInt) {
            $this->setDefaultValuePositiveInt($defaultValuePositiveInt);
        }
        if (null !== $defaultValueString) {
            $this->setDefaultValueString($defaultValueString);
        }
        if (null !== $defaultValueTime) {
            $this->setDefaultValueTime($defaultValueTime);
        }
        if (null !== $defaultValueUnsignedInt) {
            $this->setDefaultValueUnsignedInt($defaultValueUnsignedInt);
        }
        if (null !== $defaultValueUri) {
            $this->setDefaultValueUri($defaultValueUri);
        }
        if (null !== $defaultValueUrl) {
            $this->setDefaultValueUrl($defaultValueUrl);
        }
        if (null !== $defaultValueUuid) {
            $this->setDefaultValueUuid($defaultValueUuid);
        }
        if (null !== $defaultValueAddress) {
            $this->setDefaultValueAddress($defaultValueAddress);
        }
        if (null !== $defaultValueAge) {
            $this->setDefaultValueAge($defaultValueAge);
        }
        if (null !== $defaultValueAnnotation) {
            $this->setDefaultValueAnnotation($defaultValueAnnotation);
        }
        if (null !== $defaultValueAttachment) {
            $this->setDefaultValueAttachment($defaultValueAttachment);
        }
        if (null !== $defaultValueCodeableConcept) {
            $this->setDefaultValueCodeableConcept($defaultValueCodeableConcept);
        }
        if (null !== $defaultValueCoding) {
            $this->setDefaultValueCoding($defaultValueCoding);
        }
        if (null !== $defaultValueContactPoint) {
            $this->setDefaultValueContactPoint($defaultValueContactPoint);
        }
        if (null !== $defaultValueCount) {
            $this->setDefaultValueCount($defaultValueCount);
        }
        if (null !== $defaultValueDistance) {
            $this->setDefaultValueDistance($defaultValueDistance);
        }
        if (null !== $defaultValueDuration) {
            $this->setDefaultValueDuration($defaultValueDuration);
        }
        if (null !== $defaultValueHumanName) {
            $this->setDefaultValueHumanName($defaultValueHumanName);
        }
        if (null !== $defaultValueIdentifier) {
            $this->setDefaultValueIdentifier($defaultValueIdentifier);
        }
        if (null !== $defaultValueMoney) {
            $this->setDefaultValueMoney($defaultValueMoney);
        }
        if (null !== $defaultValuePeriod) {
            $this->setDefaultValuePeriod($defaultValuePeriod);
        }
        if (null !== $defaultValueQuantity) {
            $this->setDefaultValueQuantity($defaultValueQuantity);
        }
        if (null !== $defaultValueRange) {
            $this->setDefaultValueRange($defaultValueRange);
        }
        if (null !== $defaultValueRatio) {
            $this->setDefaultValueRatio($defaultValueRatio);
        }
        if (null !== $defaultValueReference) {
            $this->setDefaultValueReference($defaultValueReference);
        }
        if (null !== $defaultValueSampledData) {
            $this->setDefaultValueSampledData($defaultValueSampledData);
        }
        if (null !== $defaultValueSignature) {
            $this->setDefaultValueSignature($defaultValueSignature);
        }
        if (null !== $defaultValueTiming) {
            $this->setDefaultValueTiming($defaultValueTiming);
        }
        if (null !== $defaultValueContactDetail) {
            $this->setDefaultValueContactDetail($defaultValueContactDetail);
        }
        if (null !== $defaultValueContributor) {
            $this->setDefaultValueContributor($defaultValueContributor);
        }
        if (null !== $defaultValueDataRequirement) {
            $this->setDefaultValueDataRequirement($defaultValueDataRequirement);
        }
        if (null !== $defaultValueExpression) {
            $this->setDefaultValueExpression($defaultValueExpression);
        }
        if (null !== $defaultValueParameterDefinition) {
            $this->setDefaultValueParameterDefinition($defaultValueParameterDefinition);
        }
        if (null !== $defaultValueRelatedArtifact) {
            $this->setDefaultValueRelatedArtifact($defaultValueRelatedArtifact);
        }
        if (null !== $defaultValueTriggerDefinition) {
            $this->setDefaultValueTriggerDefinition($defaultValueTriggerDefinition);
        }
        if (null !== $defaultValueUsageContext) {
            $this->setDefaultValueUsageContext($defaultValueUsageContext);
        }
        if (null !== $defaultValueDosage) {
            $this->setDefaultValueDosage($defaultValueDosage);
        }
        if (null !== $defaultValueMeta) {
            $this->setDefaultValueMeta($defaultValueMeta);
        }
        if (null !== $element) {
            $this->setElement($element);
        }
        if (null !== $listMode) {
            $this->setListMode($listMode);
        }
        if (null !== $variable) {
            $this->setVariable($variable);
        }
        if (null !== $condition) {
            $this->setCondition($condition);
        }
        if (null !== $check) {
            $this->setCheck($check);
        }
        if (null !== $logMessage) {
            $this->setLogMessage($logMessage);
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
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Type or variable this rule applies to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId
     */
    public function getContext(): null|FHIRId
    {
        return $this->context ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $context
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setContext(null|string|FHIRIdPrimitive|FHIRId $context,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $context) {
            unset($this->context);
            return $this;
        }
        if (!($context instanceof FHIRId)) {
            $context = new FHIRId(value: $context);
        }
        $this->context = $context;
        if ($this->_valueXMLLocations[self::FIELD_CONTEXT] !== $valueXMLLocation) {
            $this->_setContextValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the context element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getContextValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CONTEXT];
    }

    /**
     * Set the location the "value" field of the context element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setContextValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CONTEXT] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger
     */
    public function getMin(): null|FHIRInteger
    {
        return $this->min ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified minimum cardinality for the element. This is optional; if present, it
     * acts an implicit check on the input content.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger $min
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
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified maximum cardinality for the element - a number or a "*". This is
     * optional; if present, it acts an implicit check on the input content (* just
     * serves as documentation; it's the default value).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getMax(): null|FHIRString
    {
        return $this->max ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified maximum cardinality for the element - a number or a "*". This is
     * optional; if present, it acts an implicit check on the input content (* just
     * serves as documentation; it's the default value).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $max
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified type for the element. This works as a condition on the mapping - use
     * for polymorphic elements.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getType(): null|FHIRString
    {
        return $this->type ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified type for the element. This works as a condition on the mapping - use
     * for polymorphic elements.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $type
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setType(null|string|FHIRStringPrimitive|FHIRString $type,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        if (!($type instanceof FHIRString)) {
            $type = new FHIRString(value: $type);
        }
        $this->type = $type;
        if ($this->_valueXMLLocations[self::FIELD_TYPE] !== $valueXMLLocation) {
            $this->_setTypeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the type element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getTypeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_TYPE];
    }

    /**
     * Set the location the "value" field of the type element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setTypeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_TYPE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBase64Binary
     */
    public function getDefaultValueBase64Binary(): null|FHIRBase64Binary
    {
        return $this->defaultValueBase64Binary ?? null;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBase64Binary $defaultValueBase64Binary
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDefaultValueBase64Binary(null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $defaultValueBase64Binary,
                                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $defaultValueBase64Binary) {
            unset($this->defaultValueBase64Binary);
            return $this;
        }
        if (!($defaultValueBase64Binary instanceof FHIRBase64Binary)) {
            $defaultValueBase64Binary = new FHIRBase64Binary(value: $defaultValueBase64Binary);
        }
        $this->defaultValueBase64Binary = $defaultValueBase64Binary;
        if ($this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] !== $valueXMLLocation) {
            $this->_setDefaultValueBase64BinaryValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the defaultValueBase64Binary element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDefaultValueBase64BinaryValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_BASE_64BINARY];
    }

    /**
     * Set the location the "value" field of the defaultValueBase64Binary element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDefaultValueBase64BinaryValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] = $valueXMLLocation;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean
     */
    public function getDefaultValueBoolean(): null|FHIRBoolean
    {
        return $this->defaultValueBoolean ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean $defaultValueBoolean
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDefaultValueBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $defaultValueBoolean,
                                           ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $defaultValueBoolean) {
            unset($this->defaultValueBoolean);
            return $this;
        }
        if (!($defaultValueBoolean instanceof FHIRBoolean)) {
            $defaultValueBoolean = new FHIRBoolean(value: $defaultValueBoolean);
        }
        $this->defaultValueBoolean = $defaultValueBoolean;
        if ($this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_BOOLEAN] !== $valueXMLLocation) {
            $this->_setDefaultValueBooleanValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the defaultValueBoolean element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDefaultValueBooleanValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_BOOLEAN];
    }

    /**
     * Set the location the "value" field of the defaultValueBoolean element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDefaultValueBooleanValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_BOOLEAN] = $valueXMLLocation;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical
     */
    public function getDefaultValueCanonical(): null|FHIRCanonical
    {
        return $this->defaultValueCanonical ?? null;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical $defaultValueCanonical
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDefaultValueCanonical(null|string|FHIRCanonicalPrimitive|FHIRCanonical $defaultValueCanonical,
                                             ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $defaultValueCanonical) {
            unset($this->defaultValueCanonical);
            return $this;
        }
        if (!($defaultValueCanonical instanceof FHIRCanonical)) {
            $defaultValueCanonical = new FHIRCanonical(value: $defaultValueCanonical);
        }
        $this->defaultValueCanonical = $defaultValueCanonical;
        if ($this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_CANONICAL] !== $valueXMLLocation) {
            $this->_setDefaultValueCanonicalValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the defaultValueCanonical element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDefaultValueCanonicalValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_CANONICAL];
    }

    /**
     * Set the location the "value" field of the defaultValueCanonical element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDefaultValueCanonicalValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_CANONICAL] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode
     */
    public function getDefaultValueCode(): null|FHIRCode
    {
        return $this->defaultValueCode ?? null;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode $defaultValueCode
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDefaultValueCode(null|string|FHIRCodePrimitive|FHIRCode $defaultValueCode,
                                        ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $defaultValueCode) {
            unset($this->defaultValueCode);
            return $this;
        }
        if (!($defaultValueCode instanceof FHIRCode)) {
            $defaultValueCode = new FHIRCode(value: $defaultValueCode);
        }
        $this->defaultValueCode = $defaultValueCode;
        if ($this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_CODE] !== $valueXMLLocation) {
            $this->_setDefaultValueCodeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the defaultValueCode element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDefaultValueCodeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_CODE];
    }

    /**
     * Set the location the "value" field of the defaultValueCode element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDefaultValueCodeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_CODE] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDate
     */
    public function getDefaultValueDate(): null|FHIRDate
    {
        return $this->defaultValueDate ?? null;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDate $defaultValueDate
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDefaultValueDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $defaultValueDate,
                                        ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $defaultValueDate) {
            unset($this->defaultValueDate);
            return $this;
        }
        if (!($defaultValueDate instanceof FHIRDate)) {
            $defaultValueDate = new FHIRDate(value: $defaultValueDate);
        }
        $this->defaultValueDate = $defaultValueDate;
        if ($this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_DATE] !== $valueXMLLocation) {
            $this->_setDefaultValueDateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the defaultValueDate element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDefaultValueDateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_DATE];
    }

    /**
     * Set the location the "value" field of the defaultValueDate element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDefaultValueDateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_DATE] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime
     */
    public function getDefaultValueDateTime(): null|FHIRDateTime
    {
        return $this->defaultValueDateTime ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime $defaultValueDateTime
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDefaultValueDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $defaultValueDateTime,
                                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $defaultValueDateTime) {
            unset($this->defaultValueDateTime);
            return $this;
        }
        if (!($defaultValueDateTime instanceof FHIRDateTime)) {
            $defaultValueDateTime = new FHIRDateTime(value: $defaultValueDateTime);
        }
        $this->defaultValueDateTime = $defaultValueDateTime;
        if ($this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_DATE_TIME] !== $valueXMLLocation) {
            $this->_setDefaultValueDateTimeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the defaultValueDateTime element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDefaultValueDateTimeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_DATE_TIME];
    }

    /**
     * Set the location the "value" field of the defaultValueDateTime element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDefaultValueDateTimeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_DATE_TIME] = $valueXMLLocation;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDecimal
     */
    public function getDefaultValueDecimal(): null|FHIRDecimal
    {
        return $this->defaultValueDecimal ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDecimal $defaultValueDecimal
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDefaultValueDecimal(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $defaultValueDecimal,
                                           ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $defaultValueDecimal) {
            unset($this->defaultValueDecimal);
            return $this;
        }
        if (!($defaultValueDecimal instanceof FHIRDecimal)) {
            $defaultValueDecimal = new FHIRDecimal(value: $defaultValueDecimal);
        }
        $this->defaultValueDecimal = $defaultValueDecimal;
        if ($this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_DECIMAL] !== $valueXMLLocation) {
            $this->_setDefaultValueDecimalValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the defaultValueDecimal element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDefaultValueDecimalValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_DECIMAL];
    }

    /**
     * Set the location the "value" field of the defaultValueDecimal element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDefaultValueDecimalValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_DECIMAL] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId
     */
    public function getDefaultValueId(): null|FHIRId
    {
        return $this->defaultValueId ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $defaultValueId
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDefaultValueId(null|string|FHIRIdPrimitive|FHIRId $defaultValueId,
                                      ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $defaultValueId) {
            unset($this->defaultValueId);
            return $this;
        }
        if (!($defaultValueId instanceof FHIRId)) {
            $defaultValueId = new FHIRId(value: $defaultValueId);
        }
        $this->defaultValueId = $defaultValueId;
        if ($this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_ID] !== $valueXMLLocation) {
            $this->_setDefaultValueIdValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the defaultValueId element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDefaultValueIdValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_ID];
    }

    /**
     * Set the location the "value" field of the defaultValueId element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDefaultValueIdValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_ID] = $valueXMLLocation;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInstant
     */
    public function getDefaultValueInstant(): null|FHIRInstant
    {
        return $this->defaultValueInstant ?? null;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInstant $defaultValueInstant
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDefaultValueInstant(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $defaultValueInstant,
                                           ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $defaultValueInstant) {
            unset($this->defaultValueInstant);
            return $this;
        }
        if (!($defaultValueInstant instanceof FHIRInstant)) {
            $defaultValueInstant = new FHIRInstant(value: $defaultValueInstant);
        }
        $this->defaultValueInstant = $defaultValueInstant;
        if ($this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_INSTANT] !== $valueXMLLocation) {
            $this->_setDefaultValueInstantValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the defaultValueInstant element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDefaultValueInstantValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_INSTANT];
    }

    /**
     * Set the location the "value" field of the defaultValueInstant element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDefaultValueInstantValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_INSTANT] = $valueXMLLocation;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger
     */
    public function getDefaultValueInteger(): null|FHIRInteger
    {
        return $this->defaultValueInteger ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger $defaultValueInteger
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDefaultValueInteger(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $defaultValueInteger,
                                           ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $defaultValueInteger) {
            unset($this->defaultValueInteger);
            return $this;
        }
        if (!($defaultValueInteger instanceof FHIRInteger)) {
            $defaultValueInteger = new FHIRInteger(value: $defaultValueInteger);
        }
        $this->defaultValueInteger = $defaultValueInteger;
        if ($this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_INTEGER] !== $valueXMLLocation) {
            $this->_setDefaultValueIntegerValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the defaultValueInteger element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDefaultValueIntegerValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_INTEGER];
    }

    /**
     * Set the location the "value" field of the defaultValueInteger element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDefaultValueIntegerValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_INTEGER] = $valueXMLLocation;
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
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMarkdown
     */
    public function getDefaultValueMarkdown(): null|FHIRMarkdown
    {
        return $this->defaultValueMarkdown ?? null;
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
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMarkdown $defaultValueMarkdown
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDefaultValueMarkdown(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $defaultValueMarkdown,
                                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $defaultValueMarkdown) {
            unset($this->defaultValueMarkdown);
            return $this;
        }
        if (!($defaultValueMarkdown instanceof FHIRMarkdown)) {
            $defaultValueMarkdown = new FHIRMarkdown(value: $defaultValueMarkdown);
        }
        $this->defaultValueMarkdown = $defaultValueMarkdown;
        if ($this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_MARKDOWN] !== $valueXMLLocation) {
            $this->_setDefaultValueMarkdownValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the defaultValueMarkdown element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDefaultValueMarkdownValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_MARKDOWN];
    }

    /**
     * Set the location the "value" field of the defaultValueMarkdown element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDefaultValueMarkdownValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_MARKDOWN] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIROid
     */
    public function getDefaultValueOid(): null|FHIROid
    {
        return $this->defaultValueOid ?? null;
    }

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIROid $defaultValueOid
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDefaultValueOid(null|string|FHIROidPrimitive|FHIROid $defaultValueOid,
                                       ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $defaultValueOid) {
            unset($this->defaultValueOid);
            return $this;
        }
        if (!($defaultValueOid instanceof FHIROid)) {
            $defaultValueOid = new FHIROid(value: $defaultValueOid);
        }
        $this->defaultValueOid = $defaultValueOid;
        if ($this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_OID] !== $valueXMLLocation) {
            $this->_setDefaultValueOidValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the defaultValueOid element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDefaultValueOidValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_OID];
    }

    /**
     * Set the location the "value" field of the defaultValueOid element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDefaultValueOidValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_OID] = $valueXMLLocation;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt
     */
    public function getDefaultValuePositiveInt(): null|FHIRPositiveInt
    {
        return $this->defaultValuePositiveInt ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt $defaultValuePositiveInt
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDefaultValuePositiveInt(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $defaultValuePositiveInt,
                                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $defaultValuePositiveInt) {
            unset($this->defaultValuePositiveInt);
            return $this;
        }
        if (!($defaultValuePositiveInt instanceof FHIRPositiveInt)) {
            $defaultValuePositiveInt = new FHIRPositiveInt(value: $defaultValuePositiveInt);
        }
        $this->defaultValuePositiveInt = $defaultValuePositiveInt;
        if ($this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] !== $valueXMLLocation) {
            $this->_setDefaultValuePositiveIntValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the defaultValuePositiveInt element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDefaultValuePositiveIntValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_POSITIVE_INT];
    }

    /**
     * Set the location the "value" field of the defaultValuePositiveInt element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDefaultValuePositiveIntValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getDefaultValueString(): null|FHIRString
    {
        return $this->defaultValueString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $defaultValueString
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDefaultValueString(null|string|FHIRStringPrimitive|FHIRString $defaultValueString,
                                          ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $defaultValueString) {
            unset($this->defaultValueString);
            return $this;
        }
        if (!($defaultValueString instanceof FHIRString)) {
            $defaultValueString = new FHIRString(value: $defaultValueString);
        }
        $this->defaultValueString = $defaultValueString;
        if ($this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_STRING] !== $valueXMLLocation) {
            $this->_setDefaultValueStringValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the defaultValueString element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDefaultValueStringValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_STRING];
    }

    /**
     * Set the location the "value" field of the defaultValueString element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDefaultValueStringValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_STRING] = $valueXMLLocation;
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTime
     */
    public function getDefaultValueTime(): null|FHIRTime
    {
        return $this->defaultValueTime ?? null;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTime $defaultValueTime
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDefaultValueTime(null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $defaultValueTime,
                                        ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $defaultValueTime) {
            unset($this->defaultValueTime);
            return $this;
        }
        if (!($defaultValueTime instanceof FHIRTime)) {
            $defaultValueTime = new FHIRTime(value: $defaultValueTime);
        }
        $this->defaultValueTime = $defaultValueTime;
        if ($this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_TIME] !== $valueXMLLocation) {
            $this->_setDefaultValueTimeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the defaultValueTime element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDefaultValueTimeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_TIME];
    }

    /**
     * Set the location the "value" field of the defaultValueTime element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDefaultValueTimeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_TIME] = $valueXMLLocation;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUnsignedInt
     */
    public function getDefaultValueUnsignedInt(): null|FHIRUnsignedInt
    {
        return $this->defaultValueUnsignedInt ?? null;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUnsignedInt $defaultValueUnsignedInt
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDefaultValueUnsignedInt(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $defaultValueUnsignedInt,
                                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $defaultValueUnsignedInt) {
            unset($this->defaultValueUnsignedInt);
            return $this;
        }
        if (!($defaultValueUnsignedInt instanceof FHIRUnsignedInt)) {
            $defaultValueUnsignedInt = new FHIRUnsignedInt(value: $defaultValueUnsignedInt);
        }
        $this->defaultValueUnsignedInt = $defaultValueUnsignedInt;
        if ($this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] !== $valueXMLLocation) {
            $this->_setDefaultValueUnsignedIntValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the defaultValueUnsignedInt element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDefaultValueUnsignedIntValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT];
    }

    /**
     * Set the location the "value" field of the defaultValueUnsignedInt element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDefaultValueUnsignedIntValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] = $valueXMLLocation;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri
     */
    public function getDefaultValueUri(): null|FHIRUri
    {
        return $this->defaultValueUri ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri $defaultValueUri
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDefaultValueUri(null|string|FHIRUriPrimitive|FHIRUri $defaultValueUri,
                                       ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $defaultValueUri) {
            unset($this->defaultValueUri);
            return $this;
        }
        if (!($defaultValueUri instanceof FHIRUri)) {
            $defaultValueUri = new FHIRUri(value: $defaultValueUri);
        }
        $this->defaultValueUri = $defaultValueUri;
        if ($this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_URI] !== $valueXMLLocation) {
            $this->_setDefaultValueUriValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the defaultValueUri element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDefaultValueUriValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_URI];
    }

    /**
     * Set the location the "value" field of the defaultValueUri element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDefaultValueUriValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_URI] = $valueXMLLocation;
        return $this;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUrl
     */
    public function getDefaultValueUrl(): null|FHIRUrl
    {
        return $this->defaultValueUrl ?? null;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUrlPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUrl $defaultValueUrl
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDefaultValueUrl(null|string|FHIRUrlPrimitive|FHIRUrl $defaultValueUrl,
                                       ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $defaultValueUrl) {
            unset($this->defaultValueUrl);
            return $this;
        }
        if (!($defaultValueUrl instanceof FHIRUrl)) {
            $defaultValueUrl = new FHIRUrl(value: $defaultValueUrl);
        }
        $this->defaultValueUrl = $defaultValueUrl;
        if ($this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_URL] !== $valueXMLLocation) {
            $this->_setDefaultValueUrlValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the defaultValueUrl element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDefaultValueUrlValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_URL];
    }

    /**
     * Set the location the "value" field of the defaultValueUrl element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDefaultValueUrlValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_URL] = $valueXMLLocation;
        return $this;
    }

    /**
     * A UUID, represented as a URI
     * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUuid
     */
    public function getDefaultValueUuid(): null|FHIRUuid
    {
        return $this->defaultValueUuid ?? null;
    }

    /**
     * A UUID, represented as a URI
     * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUuidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUuid $defaultValueUuid
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDefaultValueUuid(null|string|FHIRUuidPrimitive|FHIRUuid $defaultValueUuid,
                                        ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $defaultValueUuid) {
            unset($this->defaultValueUuid);
            return $this;
        }
        if (!($defaultValueUuid instanceof FHIRUuid)) {
            $defaultValueUuid = new FHIRUuid(value: $defaultValueUuid);
        }
        $this->defaultValueUuid = $defaultValueUuid;
        if ($this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_UUID] !== $valueXMLLocation) {
            $this->_setDefaultValueUuidValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the defaultValueUuid element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDefaultValueUuidValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_UUID];
    }

    /**
     * Set the location the "value" field of the defaultValueUuid element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDefaultValueUuidValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_UUID] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAddress
     */
    public function getDefaultValueAddress(): null|FHIRAddress
    {
        return $this->defaultValueAddress ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAddress $defaultValueAddress
     * @return static
     */
    public function setDefaultValueAddress(null|FHIRAddress $defaultValueAddress): self
    {
        if (null === $defaultValueAddress) {
            unset($this->defaultValueAddress);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getDefaultValueAge(): null|FHIRAge
    {
        return $this->defaultValueAge ?? null;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRAge $defaultValueAge
     * @return static
     */
    public function setDefaultValueAge(null|FHIRAge $defaultValueAge): self
    {
        if (null === $defaultValueAge) {
            unset($this->defaultValueAge);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAnnotation
     */
    public function getDefaultValueAnnotation(): null|FHIRAnnotation
    {
        return $this->defaultValueAnnotation ?? null;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAnnotation $defaultValueAnnotation
     * @return static
     */
    public function setDefaultValueAnnotation(null|FHIRAnnotation $defaultValueAnnotation): self
    {
        if (null === $defaultValueAnnotation) {
            unset($this->defaultValueAnnotation);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAttachment
     */
    public function getDefaultValueAttachment(): null|FHIRAttachment
    {
        return $this->defaultValueAttachment ?? null;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAttachment $defaultValueAttachment
     * @return static
     */
    public function setDefaultValueAttachment(null|FHIRAttachment $defaultValueAttachment): self
    {
        if (null === $defaultValueAttachment) {
            unset($this->defaultValueAttachment);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getDefaultValueCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->defaultValueCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $defaultValueCodeableConcept
     * @return static
     */
    public function setDefaultValueCodeableConcept(null|FHIRCodeableConcept $defaultValueCodeableConcept): self
    {
        if (null === $defaultValueCodeableConcept) {
            unset($this->defaultValueCodeableConcept);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCoding
     */
    public function getDefaultValueCoding(): null|FHIRCoding
    {
        return $this->defaultValueCoding ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCoding $defaultValueCoding
     * @return static
     */
    public function setDefaultValueCoding(null|FHIRCoding $defaultValueCoding): self
    {
        if (null === $defaultValueCoding) {
            unset($this->defaultValueCoding);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRContactPoint
     */
    public function getDefaultValueContactPoint(): null|FHIRContactPoint
    {
        return $this->defaultValueContactPoint ?? null;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRContactPoint $defaultValueContactPoint
     * @return static
     */
    public function setDefaultValueContactPoint(null|FHIRContactPoint $defaultValueContactPoint): self
    {
        if (null === $defaultValueContactPoint) {
            unset($this->defaultValueContactPoint);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRCount
     */
    public function getDefaultValueCount(): null|FHIRCount
    {
        return $this->defaultValueCount ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRCount $defaultValueCount
     * @return static
     */
    public function setDefaultValueCount(null|FHIRCount $defaultValueCount): self
    {
        if (null === $defaultValueCount) {
            unset($this->defaultValueCount);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getDefaultValueDistance(): null|FHIRDistance
    {
        return $this->defaultValueDistance ?? null;
    }

    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDistance $defaultValueDistance
     * @return static
     */
    public function setDefaultValueDistance(null|FHIRDistance $defaultValueDistance): self
    {
        if (null === $defaultValueDistance) {
            unset($this->defaultValueDistance);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getDefaultValueDuration(): null|FHIRDuration
    {
        return $this->defaultValueDuration ?? null;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDuration $defaultValueDuration
     * @return static
     */
    public function setDefaultValueDuration(null|FHIRDuration $defaultValueDuration): self
    {
        if (null === $defaultValueDuration) {
            unset($this->defaultValueDuration);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRHumanName
     */
    public function getDefaultValueHumanName(): null|FHIRHumanName
    {
        return $this->defaultValueHumanName ?? null;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRHumanName $defaultValueHumanName
     * @return static
     */
    public function setDefaultValueHumanName(null|FHIRHumanName $defaultValueHumanName): self
    {
        if (null === $defaultValueHumanName) {
            unset($this->defaultValueHumanName);
            return $this;
        }
        $this->defaultValueHumanName = $defaultValueHumanName;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier
     */
    public function getDefaultValueIdentifier(): null|FHIRIdentifier
    {
        return $this->defaultValueIdentifier ?? null;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier $defaultValueIdentifier
     * @return static
     */
    public function setDefaultValueIdentifier(null|FHIRIdentifier $defaultValueIdentifier): self
    {
        if (null === $defaultValueIdentifier) {
            unset($this->defaultValueIdentifier);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMoney
     */
    public function getDefaultValueMoney(): null|FHIRMoney
    {
        return $this->defaultValueMoney ?? null;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMoney $defaultValueMoney
     * @return static
     */
    public function setDefaultValueMoney(null|FHIRMoney $defaultValueMoney): self
    {
        if (null === $defaultValueMoney) {
            unset($this->defaultValueMoney);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod
     */
    public function getDefaultValuePeriod(): null|FHIRPeriod
    {
        return $this->defaultValuePeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod $defaultValuePeriod
     * @return static
     */
    public function setDefaultValuePeriod(null|FHIRPeriod $defaultValuePeriod): self
    {
        if (null === $defaultValuePeriod) {
            unset($this->defaultValuePeriod);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity
     */
    public function getDefaultValueQuantity(): null|FHIRQuantity
    {
        return $this->defaultValueQuantity ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $defaultValueQuantity
     * @return static
     */
    public function setDefaultValueQuantity(null|FHIRQuantity $defaultValueQuantity): self
    {
        if (null === $defaultValueQuantity) {
            unset($this->defaultValueQuantity);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRange
     */
    public function getDefaultValueRange(): null|FHIRRange
    {
        return $this->defaultValueRange ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRange $defaultValueRange
     * @return static
     */
    public function setDefaultValueRange(null|FHIRRange $defaultValueRange): self
    {
        if (null === $defaultValueRange) {
            unset($this->defaultValueRange);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio
     */
    public function getDefaultValueRatio(): null|FHIRRatio
    {
        return $this->defaultValueRatio ?? null;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio $defaultValueRatio
     * @return static
     */
    public function setDefaultValueRatio(null|FHIRRatio $defaultValueRatio): self
    {
        if (null === $defaultValueRatio) {
            unset($this->defaultValueRatio);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getDefaultValueReference(): null|FHIRReference
    {
        return $this->defaultValueReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $defaultValueReference
     * @return static
     */
    public function setDefaultValueReference(null|FHIRReference $defaultValueReference): self
    {
        if (null === $defaultValueReference) {
            unset($this->defaultValueReference);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRSampledData
     */
    public function getDefaultValueSampledData(): null|FHIRSampledData
    {
        return $this->defaultValueSampledData ?? null;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRSampledData $defaultValueSampledData
     * @return static
     */
    public function setDefaultValueSampledData(null|FHIRSampledData $defaultValueSampledData): self
    {
        if (null === $defaultValueSampledData) {
            unset($this->defaultValueSampledData);
            return $this;
        }
        $this->defaultValueSampledData = $defaultValueSampledData;
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
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRSignature
     */
    public function getDefaultValueSignature(): null|FHIRSignature
    {
        return $this->defaultValueSignature ?? null;
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
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRSignature $defaultValueSignature
     * @return static
     */
    public function setDefaultValueSignature(null|FHIRSignature $defaultValueSignature): self
    {
        if (null === $defaultValueSignature) {
            unset($this->defaultValueSignature);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getDefaultValueTiming(): null|FHIRTiming
    {
        return $this->defaultValueTiming ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTiming $defaultValueTiming
     * @return static
     */
    public function setDefaultValueTiming(null|FHIRTiming $defaultValueTiming): self
    {
        if (null === $defaultValueTiming) {
            unset($this->defaultValueTiming);
            return $this;
        }
        $this->defaultValueTiming = $defaultValueTiming;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRContactDetail
     */
    public function getDefaultValueContactDetail(): null|FHIRContactDetail
    {
        return $this->defaultValueContactDetail ?? null;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRContactDetail $defaultValueContactDetail
     * @return static
     */
    public function setDefaultValueContactDetail(null|FHIRContactDetail $defaultValueContactDetail): self
    {
        if (null === $defaultValueContactDetail) {
            unset($this->defaultValueContactDetail);
            return $this;
        }
        $this->defaultValueContactDetail = $defaultValueContactDetail;
        return $this;
    }

    /**
     * A contributor to the content of a knowledge asset, including authors, editors,
     * reviewers, and endorsers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRContributor
     */
    public function getDefaultValueContributor(): null|FHIRContributor
    {
        return $this->defaultValueContributor ?? null;
    }

    /**
     * A contributor to the content of a knowledge asset, including authors, editors,
     * reviewers, and endorsers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRContributor $defaultValueContributor
     * @return static
     */
    public function setDefaultValueContributor(null|FHIRContributor $defaultValueContributor): self
    {
        if (null === $defaultValueContributor) {
            unset($this->defaultValueContributor);
            return $this;
        }
        $this->defaultValueContributor = $defaultValueContributor;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement
     */
    public function getDefaultValueDataRequirement(): null|FHIRDataRequirement
    {
        return $this->defaultValueDataRequirement ?? null;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement $defaultValueDataRequirement
     * @return static
     */
    public function setDefaultValueDataRequirement(null|FHIRDataRequirement $defaultValueDataRequirement): self
    {
        if (null === $defaultValueDataRequirement) {
            unset($this->defaultValueDataRequirement);
            return $this;
        }
        $this->defaultValueDataRequirement = $defaultValueDataRequirement;
        return $this;
    }

    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExpression
     */
    public function getDefaultValueExpression(): null|FHIRExpression
    {
        return $this->defaultValueExpression ?? null;
    }

    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExpression $defaultValueExpression
     * @return static
     */
    public function setDefaultValueExpression(null|FHIRExpression $defaultValueExpression): self
    {
        if (null === $defaultValueExpression) {
            unset($this->defaultValueExpression);
            return $this;
        }
        $this->defaultValueExpression = $defaultValueExpression;
        return $this;
    }

    /**
     * The parameters to the module. This collection specifies both the input and
     * output parameters. Input parameters are provided by the caller as part of the
     * $evaluate operation. Output parameters are included in the GuidanceResponse.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRParameterDefinition
     */
    public function getDefaultValueParameterDefinition(): null|FHIRParameterDefinition
    {
        return $this->defaultValueParameterDefinition ?? null;
    }

    /**
     * The parameters to the module. This collection specifies both the input and
     * output parameters. Input parameters are provided by the caller as part of the
     * $evaluate operation. Output parameters are included in the GuidanceResponse.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRParameterDefinition $defaultValueParameterDefinition
     * @return static
     */
    public function setDefaultValueParameterDefinition(null|FHIRParameterDefinition $defaultValueParameterDefinition): self
    {
        if (null === $defaultValueParameterDefinition) {
            unset($this->defaultValueParameterDefinition);
            return $this;
        }
        $this->defaultValueParameterDefinition = $defaultValueParameterDefinition;
        return $this;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRelatedArtifact
     */
    public function getDefaultValueRelatedArtifact(): null|FHIRRelatedArtifact
    {
        return $this->defaultValueRelatedArtifact ?? null;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRelatedArtifact $defaultValueRelatedArtifact
     * @return static
     */
    public function setDefaultValueRelatedArtifact(null|FHIRRelatedArtifact $defaultValueRelatedArtifact): self
    {
        if (null === $defaultValueRelatedArtifact) {
            unset($this->defaultValueRelatedArtifact);
            return $this;
        }
        $this->defaultValueRelatedArtifact = $defaultValueRelatedArtifact;
        return $this;
    }

    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTriggerDefinition
     */
    public function getDefaultValueTriggerDefinition(): null|FHIRTriggerDefinition
    {
        return $this->defaultValueTriggerDefinition ?? null;
    }

    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTriggerDefinition $defaultValueTriggerDefinition
     * @return static
     */
    public function setDefaultValueTriggerDefinition(null|FHIRTriggerDefinition $defaultValueTriggerDefinition): self
    {
        if (null === $defaultValueTriggerDefinition) {
            unset($this->defaultValueTriggerDefinition);
            return $this;
        }
        $this->defaultValueTriggerDefinition = $defaultValueTriggerDefinition;
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
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUsageContext
     */
    public function getDefaultValueUsageContext(): null|FHIRUsageContext
    {
        return $this->defaultValueUsageContext ?? null;
    }

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUsageContext $defaultValueUsageContext
     * @return static
     */
    public function setDefaultValueUsageContext(null|FHIRUsageContext $defaultValueUsageContext): self
    {
        if (null === $defaultValueUsageContext) {
            unset($this->defaultValueUsageContext);
            return $this;
        }
        $this->defaultValueUsageContext = $defaultValueUsageContext;
        return $this;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDosage
     */
    public function getDefaultValueDosage(): null|FHIRDosage
    {
        return $this->defaultValueDosage ?? null;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRDosage $defaultValueDosage
     * @return static
     */
    public function setDefaultValueDosage(null|FHIRDosage $defaultValueDosage): self
    {
        if (null === $defaultValueDosage) {
            unset($this->defaultValueDosage);
            return $this;
        }
        $this->defaultValueDosage = $defaultValueDosage;
        return $this;
    }

    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content might not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta
     */
    public function getDefaultValueMeta(): null|FHIRMeta
    {
        return $this->defaultValueMeta ?? null;
    }

    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content might not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta $defaultValueMeta
     * @return static
     */
    public function setDefaultValueMeta(null|FHIRMeta $defaultValueMeta): self
    {
        if (null === $defaultValueMeta) {
            unset($this->defaultValueMeta);
            return $this;
        }
        $this->defaultValueMeta = $defaultValueMeta;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Optional field for this source.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getElement(): null|FHIRString
    {
        return $this->element ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Optional field for this source.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setElement(null|string|FHIRStringPrimitive|FHIRString $element,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $element) {
            unset($this->element);
            return $this;
        }
        if (!($element instanceof FHIRString)) {
            $element = new FHIRString(value: $element);
        }
        $this->element = $element;
        if ($this->_valueXMLLocations[self::FIELD_ELEMENT] !== $valueXMLLocation) {
            $this->_setElementValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the element element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getElementValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ELEMENT];
    }

    /**
     * Set the location the "value" field of the element element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setElementValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ELEMENT] = $valueXMLLocation;
        return $this;
    }

    /**
     * If field is a list, how to manage the source.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How to handle the list mode for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRStructureMapSourceListMode
     */
    public function getListMode(): null|FHIRStructureMapSourceListMode
    {
        return $this->listMode ?? null;
    }

    /**
     * If field is a list, how to manage the source.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How to handle the list mode for this element.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRStructureMapSourceListModeList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRStructureMapSourceListMode $listMode
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setListMode(null|string|FHIRStructureMapSourceListModeList|FHIRStructureMapSourceListMode $listMode,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $listMode) {
            unset($this->listMode);
            return $this;
        }
        if (!($listMode instanceof FHIRStructureMapSourceListMode)) {
            $listMode = new FHIRStructureMapSourceListMode(value: $listMode);
        }
        $this->listMode = $listMode;
        if ($this->_valueXMLLocations[self::FIELD_LIST_MODE] !== $valueXMLLocation) {
            $this->_setListModeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the listMode element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getListModeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_LIST_MODE];
    }

    /**
     * Set the location the "value" field of the listMode element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setListModeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_LIST_MODE] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId
     */
    public function getVariable(): null|FHIRId
    {
        return $this->variable ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $variable
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setVariable(null|string|FHIRIdPrimitive|FHIRId $variable,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $variable) {
            unset($this->variable);
            return $this;
        }
        if (!($variable instanceof FHIRId)) {
            $variable = new FHIRId(value: $variable);
        }
        $this->variable = $variable;
        if ($this->_valueXMLLocations[self::FIELD_VARIABLE] !== $valueXMLLocation) {
            $this->_setVariableValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the variable element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getVariableValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VARIABLE];
    }

    /**
     * Set the location the "value" field of the variable element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setVariableValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VARIABLE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * FHIRPath expression - must be true or the rule does not apply.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getCondition(): null|FHIRString
    {
        return $this->condition ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * FHIRPath expression - must be true or the rule does not apply.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $condition
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCondition(null|string|FHIRStringPrimitive|FHIRString $condition,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $condition) {
            unset($this->condition);
            return $this;
        }
        if (!($condition instanceof FHIRString)) {
            $condition = new FHIRString(value: $condition);
        }
        $this->condition = $condition;
        if ($this->_valueXMLLocations[self::FIELD_CONDITION] !== $valueXMLLocation) {
            $this->_setConditionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the condition element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getConditionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CONDITION];
    }

    /**
     * Set the location the "value" field of the condition element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setConditionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CONDITION] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * FHIRPath expression - must be true or the mapping engine throws an error instead
     * of completing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getCheck(): null|FHIRString
    {
        return $this->check ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * FHIRPath expression - must be true or the mapping engine throws an error instead
     * of completing.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $check
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCheck(null|string|FHIRStringPrimitive|FHIRString $check,
                             ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $check) {
            unset($this->check);
            return $this;
        }
        if (!($check instanceof FHIRString)) {
            $check = new FHIRString(value: $check);
        }
        $this->check = $check;
        if ($this->_valueXMLLocations[self::FIELD_CHECK] !== $valueXMLLocation) {
            $this->_setCheckValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the check element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getCheckValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CHECK];
    }

    /**
     * Set the location the "value" field of the check element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setCheckValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CHECK] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A FHIRPath expression which specifies a message to put in the transform log when
     * content matching the source rule is found.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getLogMessage(): null|FHIRString
    {
        return $this->logMessage ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A FHIRPath expression which specifies a message to put in the transform log when
     * content matching the source rule is found.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $logMessage
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setLogMessage(null|string|FHIRStringPrimitive|FHIRString $logMessage,
                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $logMessage) {
            unset($this->logMessage);
            return $this;
        }
        if (!($logMessage instanceof FHIRString)) {
            $logMessage = new FHIRString(value: $logMessage);
        }
        $this->logMessage = $logMessage;
        if ($this->_valueXMLLocations[self::FIELD_LOG_MESSAGE] !== $valueXMLLocation) {
            $this->_setLogMessageValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the logMessage element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getLogMessageValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_LOG_MESSAGE];
    }

    /**
     * Set the location the "value" field of the logMessage element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setLogMessageValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_LOG_MESSAGE] = $valueXMLLocation;
        return $this;
    }

    /* class_default.php:208 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRStructureMapSource)) {
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
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTEXT === $cen) {
                $type->setContext(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MIN === $cen) {
                $type->setMin(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAX === $cen) {
                $type->setMax(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_BASE_64BINARY === $cen) {
                $type->setDefaultValueBase64Binary(FHIRBase64Binary::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_BOOLEAN === $cen) {
                $type->setDefaultValueBoolean(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_CANONICAL === $cen) {
                $type->setDefaultValueCanonical(FHIRCanonical::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_CODE === $cen) {
                $type->setDefaultValueCode(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_DATE === $cen) {
                $type->setDefaultValueDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_DATE_TIME === $cen) {
                $type->setDefaultValueDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_DECIMAL === $cen) {
                $type->setDefaultValueDecimal(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_ID === $cen) {
                $type->setDefaultValueId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_INSTANT === $cen) {
                $type->setDefaultValueInstant(FHIRInstant::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_INTEGER === $cen) {
                $type->setDefaultValueInteger(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_MARKDOWN === $cen) {
                $type->setDefaultValueMarkdown(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_OID === $cen) {
                $type->setDefaultValueOid(FHIROid::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_POSITIVE_INT === $cen) {
                $type->setDefaultValuePositiveInt(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_STRING === $cen) {
                $type->setDefaultValueString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_TIME === $cen) {
                $type->setDefaultValueTime(FHIRTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_UNSIGNED_INT === $cen) {
                $type->setDefaultValueUnsignedInt(FHIRUnsignedInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_URI === $cen) {
                $type->setDefaultValueUri(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_URL === $cen) {
                $type->setDefaultValueUrl(FHIRUrl::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_UUID === $cen) {
                $type->setDefaultValueUuid(FHIRUuid::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_ADDRESS === $cen) {
                $type->setDefaultValueAddress(FHIRAddress::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_AGE === $cen) {
                $type->setDefaultValueAge(FHIRAge::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_ANNOTATION === $cen) {
                $type->setDefaultValueAnnotation(FHIRAnnotation::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_ATTACHMENT === $cen) {
                $type->setDefaultValueAttachment(FHIRAttachment::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT === $cen) {
                $type->setDefaultValueCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_CODING === $cen) {
                $type->setDefaultValueCoding(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_CONTACT_POINT === $cen) {
                $type->setDefaultValueContactPoint(FHIRContactPoint::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_COUNT === $cen) {
                $type->setDefaultValueCount(FHIRCount::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_DISTANCE === $cen) {
                $type->setDefaultValueDistance(FHIRDistance::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_DURATION === $cen) {
                $type->setDefaultValueDuration(FHIRDuration::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_HUMAN_NAME === $cen) {
                $type->setDefaultValueHumanName(FHIRHumanName::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_IDENTIFIER === $cen) {
                $type->setDefaultValueIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_MONEY === $cen) {
                $type->setDefaultValueMoney(FHIRMoney::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_PERIOD === $cen) {
                $type->setDefaultValuePeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_QUANTITY === $cen) {
                $type->setDefaultValueQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_RANGE === $cen) {
                $type->setDefaultValueRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_RATIO === $cen) {
                $type->setDefaultValueRatio(FHIRRatio::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_REFERENCE === $cen) {
                $type->setDefaultValueReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_SAMPLED_DATA === $cen) {
                $type->setDefaultValueSampledData(FHIRSampledData::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_SIGNATURE === $cen) {
                $type->setDefaultValueSignature(FHIRSignature::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_TIMING === $cen) {
                $type->setDefaultValueTiming(FHIRTiming::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL === $cen) {
                $type->setDefaultValueContactDetail(FHIRContactDetail::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_CONTRIBUTOR === $cen) {
                $type->setDefaultValueContributor(FHIRContributor::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT === $cen) {
                $type->setDefaultValueDataRequirement(FHIRDataRequirement::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_EXPRESSION === $cen) {
                $type->setDefaultValueExpression(FHIRExpression::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION === $cen) {
                $type->setDefaultValueParameterDefinition(FHIRParameterDefinition::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT === $cen) {
                $type->setDefaultValueRelatedArtifact(FHIRRelatedArtifact::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION === $cen) {
                $type->setDefaultValueTriggerDefinition(FHIRTriggerDefinition::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT === $cen) {
                $type->setDefaultValueUsageContext(FHIRUsageContext::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_DOSAGE === $cen) {
                $type->setDefaultValueDosage(FHIRDosage::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFAULT_VALUE_META === $cen) {
                $type->setDefaultValueMeta(FHIRMeta::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ELEMENT === $cen) {
                $type->setElement(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LIST_MODE === $cen) {
                $type->setListMode(FHIRStructureMapSourceListMode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VARIABLE === $cen) {
                $type->setVariable(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONDITION === $cen) {
                $type->setCondition(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CHECK === $cen) {
                $type->setCheck(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LOG_MESSAGE === $cen) {
                $type->setLogMessage(FHIRString::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CONTEXT])) {
            if (isset($type->context)) {
                $type->context->setValue((string)$attributes[self::FIELD_CONTEXT]);
                $type->_setContextValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setContext((string)$attributes[self::FIELD_CONTEXT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_TYPE])) {
            if (isset($type->type)) {
                $type->type->setValue((string)$attributes[self::FIELD_TYPE]);
                $type->_setTypeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setType((string)$attributes[self::FIELD_TYPE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_BASE_64BINARY])) {
            if (isset($type->defaultValueBase64Binary)) {
                $type->defaultValueBase64Binary->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_BASE_64BINARY]);
                $type->_setDefaultValueBase64BinaryValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDefaultValueBase64Binary((string)$attributes[self::FIELD_DEFAULT_VALUE_BASE_64BINARY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_BOOLEAN])) {
            if (isset($type->defaultValueBoolean)) {
                $type->defaultValueBoolean->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_BOOLEAN]);
                $type->_setDefaultValueBooleanValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDefaultValueBoolean((string)$attributes[self::FIELD_DEFAULT_VALUE_BOOLEAN], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_CANONICAL])) {
            if (isset($type->defaultValueCanonical)) {
                $type->defaultValueCanonical->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_CANONICAL]);
                $type->_setDefaultValueCanonicalValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDefaultValueCanonical((string)$attributes[self::FIELD_DEFAULT_VALUE_CANONICAL], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_CODE])) {
            if (isset($type->defaultValueCode)) {
                $type->defaultValueCode->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_CODE]);
                $type->_setDefaultValueCodeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDefaultValueCode((string)$attributes[self::FIELD_DEFAULT_VALUE_CODE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_DATE])) {
            if (isset($type->defaultValueDate)) {
                $type->defaultValueDate->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_DATE]);
                $type->_setDefaultValueDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDefaultValueDate((string)$attributes[self::FIELD_DEFAULT_VALUE_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_DATE_TIME])) {
            if (isset($type->defaultValueDateTime)) {
                $type->defaultValueDateTime->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_DATE_TIME]);
                $type->_setDefaultValueDateTimeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDefaultValueDateTime((string)$attributes[self::FIELD_DEFAULT_VALUE_DATE_TIME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_DECIMAL])) {
            if (isset($type->defaultValueDecimal)) {
                $type->defaultValueDecimal->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_DECIMAL]);
                $type->_setDefaultValueDecimalValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDefaultValueDecimal((string)$attributes[self::FIELD_DEFAULT_VALUE_DECIMAL], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_ID])) {
            if (isset($type->defaultValueId)) {
                $type->defaultValueId->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_ID]);
                $type->_setDefaultValueIdValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDefaultValueId((string)$attributes[self::FIELD_DEFAULT_VALUE_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_INSTANT])) {
            if (isset($type->defaultValueInstant)) {
                $type->defaultValueInstant->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_INSTANT]);
                $type->_setDefaultValueInstantValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDefaultValueInstant((string)$attributes[self::FIELD_DEFAULT_VALUE_INSTANT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_INTEGER])) {
            if (isset($type->defaultValueInteger)) {
                $type->defaultValueInteger->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_INTEGER]);
                $type->_setDefaultValueIntegerValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDefaultValueInteger((string)$attributes[self::FIELD_DEFAULT_VALUE_INTEGER], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_MARKDOWN])) {
            if (isset($type->defaultValueMarkdown)) {
                $type->defaultValueMarkdown->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_MARKDOWN]);
                $type->_setDefaultValueMarkdownValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDefaultValueMarkdown((string)$attributes[self::FIELD_DEFAULT_VALUE_MARKDOWN], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_OID])) {
            if (isset($type->defaultValueOid)) {
                $type->defaultValueOid->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_OID]);
                $type->_setDefaultValueOidValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDefaultValueOid((string)$attributes[self::FIELD_DEFAULT_VALUE_OID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_POSITIVE_INT])) {
            if (isset($type->defaultValuePositiveInt)) {
                $type->defaultValuePositiveInt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_POSITIVE_INT]);
                $type->_setDefaultValuePositiveIntValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDefaultValuePositiveInt((string)$attributes[self::FIELD_DEFAULT_VALUE_POSITIVE_INT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_STRING])) {
            if (isset($type->defaultValueString)) {
                $type->defaultValueString->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_STRING]);
                $type->_setDefaultValueStringValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDefaultValueString((string)$attributes[self::FIELD_DEFAULT_VALUE_STRING], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_TIME])) {
            if (isset($type->defaultValueTime)) {
                $type->defaultValueTime->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_TIME]);
                $type->_setDefaultValueTimeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDefaultValueTime((string)$attributes[self::FIELD_DEFAULT_VALUE_TIME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT])) {
            if (isset($type->defaultValueUnsignedInt)) {
                $type->defaultValueUnsignedInt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT]);
                $type->_setDefaultValueUnsignedIntValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDefaultValueUnsignedInt((string)$attributes[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_URI])) {
            if (isset($type->defaultValueUri)) {
                $type->defaultValueUri->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_URI]);
                $type->_setDefaultValueUriValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDefaultValueUri((string)$attributes[self::FIELD_DEFAULT_VALUE_URI], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_URL])) {
            if (isset($type->defaultValueUrl)) {
                $type->defaultValueUrl->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_URL]);
                $type->_setDefaultValueUrlValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDefaultValueUrl((string)$attributes[self::FIELD_DEFAULT_VALUE_URL], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_UUID])) {
            if (isset($type->defaultValueUuid)) {
                $type->defaultValueUuid->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_UUID]);
                $type->_setDefaultValueUuidValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDefaultValueUuid((string)$attributes[self::FIELD_DEFAULT_VALUE_UUID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ELEMENT])) {
            if (isset($type->element)) {
                $type->element->setValue((string)$attributes[self::FIELD_ELEMENT]);
                $type->_setElementValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setElement((string)$attributes[self::FIELD_ELEMENT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LIST_MODE])) {
            if (isset($type->listMode)) {
                $type->listMode->setValue((string)$attributes[self::FIELD_LIST_MODE]);
                $type->_setListModeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setListMode((string)$attributes[self::FIELD_LIST_MODE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VARIABLE])) {
            if (isset($type->variable)) {
                $type->variable->setValue((string)$attributes[self::FIELD_VARIABLE]);
                $type->_setVariableValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setVariable((string)$attributes[self::FIELD_VARIABLE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CONDITION])) {
            if (isset($type->condition)) {
                $type->condition->setValue((string)$attributes[self::FIELD_CONDITION]);
                $type->_setConditionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setCondition((string)$attributes[self::FIELD_CONDITION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CHECK])) {
            if (isset($type->check)) {
                $type->check->setValue((string)$attributes[self::FIELD_CHECK]);
                $type->_setCheckValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setCheck((string)$attributes[self::FIELD_CHECK], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LOG_MESSAGE])) {
            if (isset($type->logMessage)) {
                $type->logMessage->setValue((string)$attributes[self::FIELD_LOG_MESSAGE]);
                $type->_setLogMessageValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setLogMessage((string)$attributes[self::FIELD_LOG_MESSAGE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->context) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CONTEXT]) {
            $xw->writeAttribute(self::FIELD_CONTEXT, $this->context->_getFormattedValue());
        }
        if (isset($this->min) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MIN]) {
            $xw->writeAttribute(self::FIELD_MIN, $this->min->_getFormattedValue());
        }
        if (isset($this->max) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MAX]) {
            $xw->writeAttribute(self::FIELD_MAX, $this->max->_getFormattedValue());
        }
        if (isset($this->type) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TYPE]) {
            $xw->writeAttribute(self::FIELD_TYPE, $this->type->_getFormattedValue());
        }
        if (isset($this->defaultValueBase64Binary) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_BASE_64BINARY]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_BASE_64BINARY, $this->defaultValueBase64Binary->_getFormattedValue());
        }
        if (isset($this->defaultValueBoolean) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_BOOLEAN]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_BOOLEAN, $this->defaultValueBoolean->_getFormattedValue());
        }
        if (isset($this->defaultValueCanonical) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_CANONICAL]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_CANONICAL, $this->defaultValueCanonical->_getFormattedValue());
        }
        if (isset($this->defaultValueCode) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_CODE]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_CODE, $this->defaultValueCode->_getFormattedValue());
        }
        if (isset($this->defaultValueDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_DATE]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_DATE, $this->defaultValueDate->_getFormattedValue());
        }
        if (isset($this->defaultValueDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_DATE_TIME, $this->defaultValueDateTime->_getFormattedValue());
        }
        if (isset($this->defaultValueDecimal) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_DECIMAL]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_DECIMAL, $this->defaultValueDecimal->_getFormattedValue());
        }
        if (isset($this->defaultValueId) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_ID]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_ID, $this->defaultValueId->_getFormattedValue());
        }
        if (isset($this->defaultValueInstant) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_INSTANT]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_INSTANT, $this->defaultValueInstant->_getFormattedValue());
        }
        if (isset($this->defaultValueInteger) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_INTEGER]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_INTEGER, $this->defaultValueInteger->_getFormattedValue());
        }
        if (isset($this->defaultValueMarkdown) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_MARKDOWN]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_MARKDOWN, $this->defaultValueMarkdown->_getFormattedValue());
        }
        if (isset($this->defaultValueOid) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_OID]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_OID, $this->defaultValueOid->_getFormattedValue());
        }
        if (isset($this->defaultValuePositiveInt) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_POSITIVE_INT]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_POSITIVE_INT, $this->defaultValuePositiveInt->_getFormattedValue());
        }
        if (isset($this->defaultValueString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_STRING]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_STRING, $this->defaultValueString->_getFormattedValue());
        }
        if (isset($this->defaultValueTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_TIME]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_TIME, $this->defaultValueTime->_getFormattedValue());
        }
        if (isset($this->defaultValueUnsignedInt) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_UNSIGNED_INT, $this->defaultValueUnsignedInt->_getFormattedValue());
        }
        if (isset($this->defaultValueUri) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_URI]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_URI, $this->defaultValueUri->_getFormattedValue());
        }
        if (isset($this->defaultValueUrl) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_URL]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_URL, $this->defaultValueUrl->_getFormattedValue());
        }
        if (isset($this->defaultValueUuid) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_UUID]) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_UUID, $this->defaultValueUuid->_getFormattedValue());
        }
        if (isset($this->element) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ELEMENT]) {
            $xw->writeAttribute(self::FIELD_ELEMENT, $this->element->_getFormattedValue());
        }
        if (isset($this->listMode) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LIST_MODE]) {
            $xw->writeAttribute(self::FIELD_LIST_MODE, $this->listMode->_getFormattedValue());
        }
        if (isset($this->variable) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VARIABLE]) {
            $xw->writeAttribute(self::FIELD_VARIABLE, $this->variable->_getFormattedValue());
        }
        if (isset($this->condition) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CONDITION]) {
            $xw->writeAttribute(self::FIELD_CONDITION, $this->condition->_getFormattedValue());
        }
        if (isset($this->check) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CHECK]) {
            $xw->writeAttribute(self::FIELD_CHECK, $this->check->_getFormattedValue());
        }
        if (isset($this->logMessage) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LOG_MESSAGE]) {
            $xw->writeAttribute(self::FIELD_LOG_MESSAGE, $this->logMessage->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->context)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CONTEXT]
                || $this->context->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CONTEXT);
            $this->context->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CONTEXT]);
            $xw->endElement();
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
        if (isset($this->type)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TYPE]
                || $this->type->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TYPE]);
            $xw->endElement();
        }
        if (isset($this->defaultValueBase64Binary)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_BASE_64BINARY]
                || $this->defaultValueBase64Binary->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_BASE_64BINARY);
            $this->defaultValueBase64Binary->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_BASE_64BINARY]);
            $xw->endElement();
        }
        if (isset($this->defaultValueBoolean)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_BOOLEAN]
                || $this->defaultValueBoolean->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_BOOLEAN);
            $this->defaultValueBoolean->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_BOOLEAN]);
            $xw->endElement();
        }
        if (isset($this->defaultValueCanonical)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_CANONICAL]
                || $this->defaultValueCanonical->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_CANONICAL);
            $this->defaultValueCanonical->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_CANONICAL]);
            $xw->endElement();
        }
        if (isset($this->defaultValueCode)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_CODE]
                || $this->defaultValueCode->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_CODE);
            $this->defaultValueCode->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_CODE]);
            $xw->endElement();
        }
        if (isset($this->defaultValueDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_DATE]
                || $this->defaultValueDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_DATE);
            $this->defaultValueDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_DATE]);
            $xw->endElement();
        }
        if (isset($this->defaultValueDateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_DATE_TIME]
                || $this->defaultValueDateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_DATE_TIME);
            $this->defaultValueDateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->defaultValueDecimal)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_DECIMAL]
                || $this->defaultValueDecimal->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_DECIMAL);
            $this->defaultValueDecimal->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_DECIMAL]);
            $xw->endElement();
        }
        if (isset($this->defaultValueId)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_ID]
                || $this->defaultValueId->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_ID);
            $this->defaultValueId->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_ID]);
            $xw->endElement();
        }
        if (isset($this->defaultValueInstant)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_INSTANT]
                || $this->defaultValueInstant->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_INSTANT);
            $this->defaultValueInstant->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_INSTANT]);
            $xw->endElement();
        }
        if (isset($this->defaultValueInteger)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_INTEGER]
                || $this->defaultValueInteger->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_INTEGER);
            $this->defaultValueInteger->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_INTEGER]);
            $xw->endElement();
        }
        if (isset($this->defaultValueMarkdown)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_MARKDOWN]
                || $this->defaultValueMarkdown->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_MARKDOWN);
            $this->defaultValueMarkdown->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_MARKDOWN]);
            $xw->endElement();
        }
        if (isset($this->defaultValueOid)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_OID]
                || $this->defaultValueOid->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_OID);
            $this->defaultValueOid->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_OID]);
            $xw->endElement();
        }
        if (isset($this->defaultValuePositiveInt)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_POSITIVE_INT]
                || $this->defaultValuePositiveInt->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_POSITIVE_INT);
            $this->defaultValuePositiveInt->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_POSITIVE_INT]);
            $xw->endElement();
        }
        if (isset($this->defaultValueString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_STRING]
                || $this->defaultValueString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_STRING);
            $this->defaultValueString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_STRING]);
            $xw->endElement();
        }
        if (isset($this->defaultValueTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_TIME]
                || $this->defaultValueTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_TIME);
            $this->defaultValueTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_TIME]);
            $xw->endElement();
        }
        if (isset($this->defaultValueUnsignedInt)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT]
                || $this->defaultValueUnsignedInt->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_UNSIGNED_INT);
            $this->defaultValueUnsignedInt->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT]);
            $xw->endElement();
        }
        if (isset($this->defaultValueUri)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_URI]
                || $this->defaultValueUri->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_URI);
            $this->defaultValueUri->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_URI]);
            $xw->endElement();
        }
        if (isset($this->defaultValueUrl)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_URL]
                || $this->defaultValueUrl->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_URL);
            $this->defaultValueUrl->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_URL]);
            $xw->endElement();
        }
        if (isset($this->defaultValueUuid)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_UUID]
                || $this->defaultValueUuid->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_UUID);
            $this->defaultValueUuid->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEFAULT_VALUE_UUID]);
            $xw->endElement();
        }
        if (isset($this->defaultValueAddress)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_ADDRESS);
            $this->defaultValueAddress->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueAge)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_AGE);
            $this->defaultValueAge->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueAnnotation)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_ANNOTATION);
            $this->defaultValueAnnotation->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueAttachment)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_ATTACHMENT);
            $this->defaultValueAttachment->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueCodeableConcept)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT);
            $this->defaultValueCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueCoding)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_CODING);
            $this->defaultValueCoding->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueContactPoint)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_CONTACT_POINT);
            $this->defaultValueContactPoint->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueCount)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_COUNT);
            $this->defaultValueCount->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueDistance)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_DISTANCE);
            $this->defaultValueDistance->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueDuration)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_DURATION);
            $this->defaultValueDuration->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueHumanName)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_HUMAN_NAME);
            $this->defaultValueHumanName->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueIdentifier)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_IDENTIFIER);
            $this->defaultValueIdentifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueMoney)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_MONEY);
            $this->defaultValueMoney->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValuePeriod)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_PERIOD);
            $this->defaultValuePeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueQuantity)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_QUANTITY);
            $this->defaultValueQuantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueRange)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_RANGE);
            $this->defaultValueRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueRatio)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_RATIO);
            $this->defaultValueRatio->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueReference)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_REFERENCE);
            $this->defaultValueReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueSampledData)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_SAMPLED_DATA);
            $this->defaultValueSampledData->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueSignature)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_SIGNATURE);
            $this->defaultValueSignature->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueTiming)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_TIMING);
            $this->defaultValueTiming->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueContactDetail)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL);
            $this->defaultValueContactDetail->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueContributor)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_CONTRIBUTOR);
            $this->defaultValueContributor->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueDataRequirement)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT);
            $this->defaultValueDataRequirement->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueExpression)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_EXPRESSION);
            $this->defaultValueExpression->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueParameterDefinition)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION);
            $this->defaultValueParameterDefinition->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueRelatedArtifact)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT);
            $this->defaultValueRelatedArtifact->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueTriggerDefinition)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION);
            $this->defaultValueTriggerDefinition->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueUsageContext)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT);
            $this->defaultValueUsageContext->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueDosage)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_DOSAGE);
            $this->defaultValueDosage->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueMeta)) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_META);
            $this->defaultValueMeta->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->element)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ELEMENT]
                || $this->element->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ELEMENT);
            $this->element->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ELEMENT]);
            $xw->endElement();
        }
        if (isset($this->listMode)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LIST_MODE]
                || $this->listMode->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LIST_MODE);
            $this->listMode->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LIST_MODE]);
            $xw->endElement();
        }
        if (isset($this->variable)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VARIABLE]
                || $this->variable->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VARIABLE);
            $this->variable->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VARIABLE]);
            $xw->endElement();
        }
        if (isset($this->condition)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CONDITION]
                || $this->condition->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CONDITION);
            $this->condition->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CONDITION]);
            $xw->endElement();
        }
        if (isset($this->check)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CHECK]
                || $this->check->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CHECK);
            $this->check->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CHECK]);
            $xw->endElement();
        }
        if (isset($this->logMessage)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LOG_MESSAGE]
                || $this->logMessage->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LOG_MESSAGE);
            $this->logMessage->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LOG_MESSAGE]);
            $xw->endElement();
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRStructureMapSource)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_CONTEXT])
            || isset($json[self::FIELD_CONTEXT_EXT])
            || array_key_exists(self::FIELD_CONTEXT, $json)
            || array_key_exists(self::FIELD_CONTEXT_EXT, $json)) {
            $value = $json[self::FIELD_CONTEXT] ?? null;
            $type->setContext(FHIRId::jsonUnserialize(
                (is_array($value) ? $value : [FHIRId::FIELD_VALUE => $value]) + ($json[self::FIELD_CONTEXT_EXT] ?? []),
                $config,
            ));
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
        if (isset($json[self::FIELD_TYPE])
            || isset($json[self::FIELD_TYPE_EXT])
            || array_key_exists(self::FIELD_TYPE, $json)
            || array_key_exists(self::FIELD_TYPE_EXT, $json)) {
            $value = $json[self::FIELD_TYPE] ?? null;
            $type->setType(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_TYPE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_BASE_64BINARY])
            || isset($json[self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT])
            || array_key_exists(self::FIELD_DEFAULT_VALUE_BASE_64BINARY, $json)
            || array_key_exists(self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] ?? null;
            $type->setDefaultValueBase64Binary(FHIRBase64Binary::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBase64Binary::FIELD_VALUE => $value]) + ($json[self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_BOOLEAN])
            || isset($json[self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT])
            || array_key_exists(self::FIELD_DEFAULT_VALUE_BOOLEAN, $json)
            || array_key_exists(self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_BOOLEAN] ?? null;
            $type->setDefaultValueBoolean(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_CANONICAL])
            || isset($json[self::FIELD_DEFAULT_VALUE_CANONICAL_EXT])
            || array_key_exists(self::FIELD_DEFAULT_VALUE_CANONICAL, $json)
            || array_key_exists(self::FIELD_DEFAULT_VALUE_CANONICAL_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_CANONICAL] ?? null;
            $type->setDefaultValueCanonical(FHIRCanonical::jsonUnserialize(
                (is_array($value) ? $value : [FHIRCanonical::FIELD_VALUE => $value]) + ($json[self::FIELD_DEFAULT_VALUE_CANONICAL_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_CODE])
            || isset($json[self::FIELD_DEFAULT_VALUE_CODE_EXT])
            || array_key_exists(self::FIELD_DEFAULT_VALUE_CODE, $json)
            || array_key_exists(self::FIELD_DEFAULT_VALUE_CODE_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_CODE] ?? null;
            $type->setDefaultValueCode(FHIRCode::jsonUnserialize(
                (is_array($value) ? $value : [FHIRCode::FIELD_VALUE => $value]) + ($json[self::FIELD_DEFAULT_VALUE_CODE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_DATE])
            || isset($json[self::FIELD_DEFAULT_VALUE_DATE_EXT])
            || array_key_exists(self::FIELD_DEFAULT_VALUE_DATE, $json)
            || array_key_exists(self::FIELD_DEFAULT_VALUE_DATE_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_DATE] ?? null;
            $type->setDefaultValueDate(FHIRDate::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDate::FIELD_VALUE => $value]) + ($json[self::FIELD_DEFAULT_VALUE_DATE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_DATE_TIME])
            || isset($json[self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT])
            || array_key_exists(self::FIELD_DEFAULT_VALUE_DATE_TIME, $json)
            || array_key_exists(self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_DATE_TIME] ?? null;
            $type->setDefaultValueDateTime(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_DECIMAL])
            || isset($json[self::FIELD_DEFAULT_VALUE_DECIMAL_EXT])
            || array_key_exists(self::FIELD_DEFAULT_VALUE_DECIMAL, $json)
            || array_key_exists(self::FIELD_DEFAULT_VALUE_DECIMAL_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_DECIMAL] ?? null;
            $type->setDefaultValueDecimal(FHIRDecimal::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDecimal::FIELD_VALUE => $value]) + ($json[self::FIELD_DEFAULT_VALUE_DECIMAL_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_ID])
            || isset($json[self::FIELD_DEFAULT_VALUE_ID_EXT])
            || array_key_exists(self::FIELD_DEFAULT_VALUE_ID, $json)
            || array_key_exists(self::FIELD_DEFAULT_VALUE_ID_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_ID] ?? null;
            $type->setDefaultValueId(FHIRId::jsonUnserialize(
                (is_array($value) ? $value : [FHIRId::FIELD_VALUE => $value]) + ($json[self::FIELD_DEFAULT_VALUE_ID_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_INSTANT])
            || isset($json[self::FIELD_DEFAULT_VALUE_INSTANT_EXT])
            || array_key_exists(self::FIELD_DEFAULT_VALUE_INSTANT, $json)
            || array_key_exists(self::FIELD_DEFAULT_VALUE_INSTANT_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_INSTANT] ?? null;
            $type->setDefaultValueInstant(FHIRInstant::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInstant::FIELD_VALUE => $value]) + ($json[self::FIELD_DEFAULT_VALUE_INSTANT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_INTEGER])
            || isset($json[self::FIELD_DEFAULT_VALUE_INTEGER_EXT])
            || array_key_exists(self::FIELD_DEFAULT_VALUE_INTEGER, $json)
            || array_key_exists(self::FIELD_DEFAULT_VALUE_INTEGER_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_INTEGER] ?? null;
            $type->setDefaultValueInteger(FHIRInteger::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInteger::FIELD_VALUE => $value]) + ($json[self::FIELD_DEFAULT_VALUE_INTEGER_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_MARKDOWN])
            || isset($json[self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT])
            || array_key_exists(self::FIELD_DEFAULT_VALUE_MARKDOWN, $json)
            || array_key_exists(self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_MARKDOWN] ?? null;
            $type->setDefaultValueMarkdown(FHIRMarkdown::jsonUnserialize(
                (is_array($value) ? $value : [FHIRMarkdown::FIELD_VALUE => $value]) + ($json[self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_OID])
            || isset($json[self::FIELD_DEFAULT_VALUE_OID_EXT])
            || array_key_exists(self::FIELD_DEFAULT_VALUE_OID, $json)
            || array_key_exists(self::FIELD_DEFAULT_VALUE_OID_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_OID] ?? null;
            $type->setDefaultValueOid(FHIROid::jsonUnserialize(
                (is_array($value) ? $value : [FHIROid::FIELD_VALUE => $value]) + ($json[self::FIELD_DEFAULT_VALUE_OID_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_POSITIVE_INT])
            || isset($json[self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT])
            || array_key_exists(self::FIELD_DEFAULT_VALUE_POSITIVE_INT, $json)
            || array_key_exists(self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] ?? null;
            $type->setDefaultValuePositiveInt(FHIRPositiveInt::jsonUnserialize(
                (is_array($value) ? $value : [FHIRPositiveInt::FIELD_VALUE => $value]) + ($json[self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_STRING])
            || isset($json[self::FIELD_DEFAULT_VALUE_STRING_EXT])
            || array_key_exists(self::FIELD_DEFAULT_VALUE_STRING, $json)
            || array_key_exists(self::FIELD_DEFAULT_VALUE_STRING_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_STRING] ?? null;
            $type->setDefaultValueString(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_DEFAULT_VALUE_STRING_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_TIME])
            || isset($json[self::FIELD_DEFAULT_VALUE_TIME_EXT])
            || array_key_exists(self::FIELD_DEFAULT_VALUE_TIME, $json)
            || array_key_exists(self::FIELD_DEFAULT_VALUE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_TIME] ?? null;
            $type->setDefaultValueTime(FHIRTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRTime::FIELD_VALUE => $value]) + ($json[self::FIELD_DEFAULT_VALUE_TIME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT])
            || isset($json[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT])
            || array_key_exists(self::FIELD_DEFAULT_VALUE_UNSIGNED_INT, $json)
            || array_key_exists(self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] ?? null;
            $type->setDefaultValueUnsignedInt(FHIRUnsignedInt::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUnsignedInt::FIELD_VALUE => $value]) + ($json[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_URI])
            || isset($json[self::FIELD_DEFAULT_VALUE_URI_EXT])
            || array_key_exists(self::FIELD_DEFAULT_VALUE_URI, $json)
            || array_key_exists(self::FIELD_DEFAULT_VALUE_URI_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_URI] ?? null;
            $type->setDefaultValueUri(FHIRUri::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUri::FIELD_VALUE => $value]) + ($json[self::FIELD_DEFAULT_VALUE_URI_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_URL])
            || isset($json[self::FIELD_DEFAULT_VALUE_URL_EXT])
            || array_key_exists(self::FIELD_DEFAULT_VALUE_URL, $json)
            || array_key_exists(self::FIELD_DEFAULT_VALUE_URL_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_URL] ?? null;
            $type->setDefaultValueUrl(FHIRUrl::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUrl::FIELD_VALUE => $value]) + ($json[self::FIELD_DEFAULT_VALUE_URL_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_UUID])
            || isset($json[self::FIELD_DEFAULT_VALUE_UUID_EXT])
            || array_key_exists(self::FIELD_DEFAULT_VALUE_UUID, $json)
            || array_key_exists(self::FIELD_DEFAULT_VALUE_UUID_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_UUID] ?? null;
            $type->setDefaultValueUuid(FHIRUuid::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUuid::FIELD_VALUE => $value]) + ($json[self::FIELD_DEFAULT_VALUE_UUID_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_ADDRESS]) || array_key_exists(self::FIELD_DEFAULT_VALUE_ADDRESS, $json)) {
            $type->setDefaultValueAddress(FHIRAddress::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_ADDRESS], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_AGE]) || array_key_exists(self::FIELD_DEFAULT_VALUE_AGE, $json)) {
            $type->setDefaultValueAge(FHIRAge::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_AGE], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_ANNOTATION]) || array_key_exists(self::FIELD_DEFAULT_VALUE_ANNOTATION, $json)) {
            $type->setDefaultValueAnnotation(FHIRAnnotation::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_ANNOTATION], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_ATTACHMENT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_ATTACHMENT, $json)) {
            $type->setDefaultValueAttachment(FHIRAttachment::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_ATTACHMENT], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT, $json)) {
            $type->setDefaultValueCodeableConcept(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_CODING]) || array_key_exists(self::FIELD_DEFAULT_VALUE_CODING, $json)) {
            $type->setDefaultValueCoding(FHIRCoding::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_CODING], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_CONTACT_POINT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_CONTACT_POINT, $json)) {
            $type->setDefaultValueContactPoint(FHIRContactPoint::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_CONTACT_POINT], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_COUNT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_COUNT, $json)) {
            $type->setDefaultValueCount(FHIRCount::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_COUNT], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_DISTANCE]) || array_key_exists(self::FIELD_DEFAULT_VALUE_DISTANCE, $json)) {
            $type->setDefaultValueDistance(FHIRDistance::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_DISTANCE], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_DURATION]) || array_key_exists(self::FIELD_DEFAULT_VALUE_DURATION, $json)) {
            $type->setDefaultValueDuration(FHIRDuration::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_DURATION], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_HUMAN_NAME]) || array_key_exists(self::FIELD_DEFAULT_VALUE_HUMAN_NAME, $json)) {
            $type->setDefaultValueHumanName(FHIRHumanName::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_HUMAN_NAME], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_IDENTIFIER]) || array_key_exists(self::FIELD_DEFAULT_VALUE_IDENTIFIER, $json)) {
            $type->setDefaultValueIdentifier(FHIRIdentifier::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_IDENTIFIER], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_MONEY]) || array_key_exists(self::FIELD_DEFAULT_VALUE_MONEY, $json)) {
            $type->setDefaultValueMoney(FHIRMoney::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_MONEY], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_PERIOD]) || array_key_exists(self::FIELD_DEFAULT_VALUE_PERIOD, $json)) {
            $type->setDefaultValuePeriod(FHIRPeriod::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_PERIOD], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_QUANTITY]) || array_key_exists(self::FIELD_DEFAULT_VALUE_QUANTITY, $json)) {
            $type->setDefaultValueQuantity(FHIRQuantity::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_QUANTITY], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_RANGE]) || array_key_exists(self::FIELD_DEFAULT_VALUE_RANGE, $json)) {
            $type->setDefaultValueRange(FHIRRange::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_RANGE], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_RATIO]) || array_key_exists(self::FIELD_DEFAULT_VALUE_RATIO, $json)) {
            $type->setDefaultValueRatio(FHIRRatio::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_RATIO], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_REFERENCE]) || array_key_exists(self::FIELD_DEFAULT_VALUE_REFERENCE, $json)) {
            $type->setDefaultValueReference(FHIRReference::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_REFERENCE], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA]) || array_key_exists(self::FIELD_DEFAULT_VALUE_SAMPLED_DATA, $json)) {
            $type->setDefaultValueSampledData(FHIRSampledData::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_SIGNATURE]) || array_key_exists(self::FIELD_DEFAULT_VALUE_SIGNATURE, $json)) {
            $type->setDefaultValueSignature(FHIRSignature::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_SIGNATURE], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_TIMING]) || array_key_exists(self::FIELD_DEFAULT_VALUE_TIMING, $json)) {
            $type->setDefaultValueTiming(FHIRTiming::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_TIMING], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL]) || array_key_exists(self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL, $json)) {
            $type->setDefaultValueContactDetail(FHIRContactDetail::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR]) || array_key_exists(self::FIELD_DEFAULT_VALUE_CONTRIBUTOR, $json)) {
            $type->setDefaultValueContributor(FHIRContributor::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT, $json)) {
            $type->setDefaultValueDataRequirement(FHIRDataRequirement::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_EXPRESSION]) || array_key_exists(self::FIELD_DEFAULT_VALUE_EXPRESSION, $json)) {
            $type->setDefaultValueExpression(FHIRExpression::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_EXPRESSION], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION]) || array_key_exists(self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION, $json)) {
            $type->setDefaultValueParameterDefinition(FHIRParameterDefinition::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT, $json)) {
            $type->setDefaultValueRelatedArtifact(FHIRRelatedArtifact::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION]) || array_key_exists(self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION, $json)) {
            $type->setDefaultValueTriggerDefinition(FHIRTriggerDefinition::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT, $json)) {
            $type->setDefaultValueUsageContext(FHIRUsageContext::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_DOSAGE]) || array_key_exists(self::FIELD_DEFAULT_VALUE_DOSAGE, $json)) {
            $type->setDefaultValueDosage(FHIRDosage::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_DOSAGE], $config));
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_META]) || array_key_exists(self::FIELD_DEFAULT_VALUE_META, $json)) {
            $type->setDefaultValueMeta(FHIRMeta::jsonUnserialize($json[self::FIELD_DEFAULT_VALUE_META], $config));
        }
        if (isset($json[self::FIELD_ELEMENT])
            || isset($json[self::FIELD_ELEMENT_EXT])
            || array_key_exists(self::FIELD_ELEMENT, $json)
            || array_key_exists(self::FIELD_ELEMENT_EXT, $json)) {
            $value = $json[self::FIELD_ELEMENT] ?? null;
            $type->setElement(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_ELEMENT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_LIST_MODE])
            || isset($json[self::FIELD_LIST_MODE_EXT])
            || array_key_exists(self::FIELD_LIST_MODE, $json)
            || array_key_exists(self::FIELD_LIST_MODE_EXT, $json)) {
            $value = $json[self::FIELD_LIST_MODE] ?? null;
            $type->setListMode(FHIRStructureMapSourceListMode::jsonUnserialize(
                (is_array($value) ? $value : [FHIRStructureMapSourceListMode::FIELD_VALUE => $value]) + ($json[self::FIELD_LIST_MODE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VARIABLE])
            || isset($json[self::FIELD_VARIABLE_EXT])
            || array_key_exists(self::FIELD_VARIABLE, $json)
            || array_key_exists(self::FIELD_VARIABLE_EXT, $json)) {
            $value = $json[self::FIELD_VARIABLE] ?? null;
            $type->setVariable(FHIRId::jsonUnserialize(
                (is_array($value) ? $value : [FHIRId::FIELD_VALUE => $value]) + ($json[self::FIELD_VARIABLE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_CONDITION])
            || isset($json[self::FIELD_CONDITION_EXT])
            || array_key_exists(self::FIELD_CONDITION, $json)
            || array_key_exists(self::FIELD_CONDITION_EXT, $json)) {
            $value = $json[self::FIELD_CONDITION] ?? null;
            $type->setCondition(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_CONDITION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_CHECK])
            || isset($json[self::FIELD_CHECK_EXT])
            || array_key_exists(self::FIELD_CHECK, $json)
            || array_key_exists(self::FIELD_CHECK_EXT, $json)) {
            $value = $json[self::FIELD_CHECK] ?? null;
            $type->setCheck(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_CHECK_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_LOG_MESSAGE])
            || isset($json[self::FIELD_LOG_MESSAGE_EXT])
            || array_key_exists(self::FIELD_LOG_MESSAGE, $json)
            || array_key_exists(self::FIELD_LOG_MESSAGE_EXT, $json)) {
            $value = $json[self::FIELD_LOG_MESSAGE] ?? null;
            $type->setLogMessage(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_LOG_MESSAGE_EXT] ?? []),
                $config,
            ));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->context)) {
            if (null !== ($val = $this->context->getValue())) {
                $out->context = $val;
            }
            if ($this->context->_nonValueFieldDefined()) {
                $ext = $this->context->jsonSerialize();
                unset($ext->value);
                $out->_context = $ext;
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
        if (isset($this->type)) {
            if (null !== ($val = $this->type->getValue())) {
                $out->type = $val;
            }
            if ($this->type->_nonValueFieldDefined()) {
                $ext = $this->type->jsonSerialize();
                unset($ext->value);
                $out->_type = $ext;
            }
        }
        if (isset($this->defaultValueBase64Binary)) {
            if (null !== ($val = $this->defaultValueBase64Binary->getValue())) {
                $out->defaultValueBase64Binary = $val;
            }
            if ($this->defaultValueBase64Binary->_nonValueFieldDefined()) {
                $ext = $this->defaultValueBase64Binary->jsonSerialize();
                unset($ext->value);
                $out->_defaultValueBase64Binary = $ext;
            }
        }
        if (isset($this->defaultValueBoolean)) {
            if (null !== ($val = $this->defaultValueBoolean->getValue())) {
                $out->defaultValueBoolean = $val;
            }
            if ($this->defaultValueBoolean->_nonValueFieldDefined()) {
                $ext = $this->defaultValueBoolean->jsonSerialize();
                unset($ext->value);
                $out->_defaultValueBoolean = $ext;
            }
        }
        if (isset($this->defaultValueCanonical)) {
            if (null !== ($val = $this->defaultValueCanonical->getValue())) {
                $out->defaultValueCanonical = $val;
            }
            if ($this->defaultValueCanonical->_nonValueFieldDefined()) {
                $ext = $this->defaultValueCanonical->jsonSerialize();
                unset($ext->value);
                $out->_defaultValueCanonical = $ext;
            }
        }
        if (isset($this->defaultValueCode)) {
            if (null !== ($val = $this->defaultValueCode->getValue())) {
                $out->defaultValueCode = $val;
            }
            if ($this->defaultValueCode->_nonValueFieldDefined()) {
                $ext = $this->defaultValueCode->jsonSerialize();
                unset($ext->value);
                $out->_defaultValueCode = $ext;
            }
        }
        if (isset($this->defaultValueDate)) {
            if (null !== ($val = $this->defaultValueDate->getValue())) {
                $out->defaultValueDate = $val;
            }
            if ($this->defaultValueDate->_nonValueFieldDefined()) {
                $ext = $this->defaultValueDate->jsonSerialize();
                unset($ext->value);
                $out->_defaultValueDate = $ext;
            }
        }
        if (isset($this->defaultValueDateTime)) {
            if (null !== ($val = $this->defaultValueDateTime->getValue())) {
                $out->defaultValueDateTime = $val;
            }
            if ($this->defaultValueDateTime->_nonValueFieldDefined()) {
                $ext = $this->defaultValueDateTime->jsonSerialize();
                unset($ext->value);
                $out->_defaultValueDateTime = $ext;
            }
        }
        if (isset($this->defaultValueDecimal)) {
            if (null !== ($val = $this->defaultValueDecimal->getValue())) {
                $out->defaultValueDecimal = $val;
            }
            if ($this->defaultValueDecimal->_nonValueFieldDefined()) {
                $ext = $this->defaultValueDecimal->jsonSerialize();
                unset($ext->value);
                $out->_defaultValueDecimal = $ext;
            }
        }
        if (isset($this->defaultValueId)) {
            if (null !== ($val = $this->defaultValueId->getValue())) {
                $out->defaultValueId = $val;
            }
            if ($this->defaultValueId->_nonValueFieldDefined()) {
                $ext = $this->defaultValueId->jsonSerialize();
                unset($ext->value);
                $out->_defaultValueId = $ext;
            }
        }
        if (isset($this->defaultValueInstant)) {
            if (null !== ($val = $this->defaultValueInstant->getValue())) {
                $out->defaultValueInstant = $val;
            }
            if ($this->defaultValueInstant->_nonValueFieldDefined()) {
                $ext = $this->defaultValueInstant->jsonSerialize();
                unset($ext->value);
                $out->_defaultValueInstant = $ext;
            }
        }
        if (isset($this->defaultValueInteger)) {
            if (null !== ($val = $this->defaultValueInteger->getValue())) {
                $out->defaultValueInteger = $val;
            }
            if ($this->defaultValueInteger->_nonValueFieldDefined()) {
                $ext = $this->defaultValueInteger->jsonSerialize();
                unset($ext->value);
                $out->_defaultValueInteger = $ext;
            }
        }
        if (isset($this->defaultValueMarkdown)) {
            if (null !== ($val = $this->defaultValueMarkdown->getValue())) {
                $out->defaultValueMarkdown = $val;
            }
            if ($this->defaultValueMarkdown->_nonValueFieldDefined()) {
                $ext = $this->defaultValueMarkdown->jsonSerialize();
                unset($ext->value);
                $out->_defaultValueMarkdown = $ext;
            }
        }
        if (isset($this->defaultValueOid)) {
            if (null !== ($val = $this->defaultValueOid->getValue())) {
                $out->defaultValueOid = $val;
            }
            if ($this->defaultValueOid->_nonValueFieldDefined()) {
                $ext = $this->defaultValueOid->jsonSerialize();
                unset($ext->value);
                $out->_defaultValueOid = $ext;
            }
        }
        if (isset($this->defaultValuePositiveInt)) {
            if (null !== ($val = $this->defaultValuePositiveInt->getValue())) {
                $out->defaultValuePositiveInt = $val;
            }
            if ($this->defaultValuePositiveInt->_nonValueFieldDefined()) {
                $ext = $this->defaultValuePositiveInt->jsonSerialize();
                unset($ext->value);
                $out->_defaultValuePositiveInt = $ext;
            }
        }
        if (isset($this->defaultValueString)) {
            if (null !== ($val = $this->defaultValueString->getValue())) {
                $out->defaultValueString = $val;
            }
            if ($this->defaultValueString->_nonValueFieldDefined()) {
                $ext = $this->defaultValueString->jsonSerialize();
                unset($ext->value);
                $out->_defaultValueString = $ext;
            }
        }
        if (isset($this->defaultValueTime)) {
            if (null !== ($val = $this->defaultValueTime->getValue())) {
                $out->defaultValueTime = $val;
            }
            if ($this->defaultValueTime->_nonValueFieldDefined()) {
                $ext = $this->defaultValueTime->jsonSerialize();
                unset($ext->value);
                $out->_defaultValueTime = $ext;
            }
        }
        if (isset($this->defaultValueUnsignedInt)) {
            if (null !== ($val = $this->defaultValueUnsignedInt->getValue())) {
                $out->defaultValueUnsignedInt = $val;
            }
            if ($this->defaultValueUnsignedInt->_nonValueFieldDefined()) {
                $ext = $this->defaultValueUnsignedInt->jsonSerialize();
                unset($ext->value);
                $out->_defaultValueUnsignedInt = $ext;
            }
        }
        if (isset($this->defaultValueUri)) {
            if (null !== ($val = $this->defaultValueUri->getValue())) {
                $out->defaultValueUri = $val;
            }
            if ($this->defaultValueUri->_nonValueFieldDefined()) {
                $ext = $this->defaultValueUri->jsonSerialize();
                unset($ext->value);
                $out->_defaultValueUri = $ext;
            }
        }
        if (isset($this->defaultValueUrl)) {
            if (null !== ($val = $this->defaultValueUrl->getValue())) {
                $out->defaultValueUrl = $val;
            }
            if ($this->defaultValueUrl->_nonValueFieldDefined()) {
                $ext = $this->defaultValueUrl->jsonSerialize();
                unset($ext->value);
                $out->_defaultValueUrl = $ext;
            }
        }
        if (isset($this->defaultValueUuid)) {
            if (null !== ($val = $this->defaultValueUuid->getValue())) {
                $out->defaultValueUuid = $val;
            }
            if ($this->defaultValueUuid->_nonValueFieldDefined()) {
                $ext = $this->defaultValueUuid->jsonSerialize();
                unset($ext->value);
                $out->_defaultValueUuid = $ext;
            }
        }
        if (isset($this->defaultValueAddress)) {
            $out->defaultValueAddress = $this->defaultValueAddress;
        }
        if (isset($this->defaultValueAge)) {
            $out->defaultValueAge = $this->defaultValueAge;
        }
        if (isset($this->defaultValueAnnotation)) {
            $out->defaultValueAnnotation = $this->defaultValueAnnotation;
        }
        if (isset($this->defaultValueAttachment)) {
            $out->defaultValueAttachment = $this->defaultValueAttachment;
        }
        if (isset($this->defaultValueCodeableConcept)) {
            $out->defaultValueCodeableConcept = $this->defaultValueCodeableConcept;
        }
        if (isset($this->defaultValueCoding)) {
            $out->defaultValueCoding = $this->defaultValueCoding;
        }
        if (isset($this->defaultValueContactPoint)) {
            $out->defaultValueContactPoint = $this->defaultValueContactPoint;
        }
        if (isset($this->defaultValueCount)) {
            $out->defaultValueCount = $this->defaultValueCount;
        }
        if (isset($this->defaultValueDistance)) {
            $out->defaultValueDistance = $this->defaultValueDistance;
        }
        if (isset($this->defaultValueDuration)) {
            $out->defaultValueDuration = $this->defaultValueDuration;
        }
        if (isset($this->defaultValueHumanName)) {
            $out->defaultValueHumanName = $this->defaultValueHumanName;
        }
        if (isset($this->defaultValueIdentifier)) {
            $out->defaultValueIdentifier = $this->defaultValueIdentifier;
        }
        if (isset($this->defaultValueMoney)) {
            $out->defaultValueMoney = $this->defaultValueMoney;
        }
        if (isset($this->defaultValuePeriod)) {
            $out->defaultValuePeriod = $this->defaultValuePeriod;
        }
        if (isset($this->defaultValueQuantity)) {
            $out->defaultValueQuantity = $this->defaultValueQuantity;
        }
        if (isset($this->defaultValueRange)) {
            $out->defaultValueRange = $this->defaultValueRange;
        }
        if (isset($this->defaultValueRatio)) {
            $out->defaultValueRatio = $this->defaultValueRatio;
        }
        if (isset($this->defaultValueReference)) {
            $out->defaultValueReference = $this->defaultValueReference;
        }
        if (isset($this->defaultValueSampledData)) {
            $out->defaultValueSampledData = $this->defaultValueSampledData;
        }
        if (isset($this->defaultValueSignature)) {
            $out->defaultValueSignature = $this->defaultValueSignature;
        }
        if (isset($this->defaultValueTiming)) {
            $out->defaultValueTiming = $this->defaultValueTiming;
        }
        if (isset($this->defaultValueContactDetail)) {
            $out->defaultValueContactDetail = $this->defaultValueContactDetail;
        }
        if (isset($this->defaultValueContributor)) {
            $out->defaultValueContributor = $this->defaultValueContributor;
        }
        if (isset($this->defaultValueDataRequirement)) {
            $out->defaultValueDataRequirement = $this->defaultValueDataRequirement;
        }
        if (isset($this->defaultValueExpression)) {
            $out->defaultValueExpression = $this->defaultValueExpression;
        }
        if (isset($this->defaultValueParameterDefinition)) {
            $out->defaultValueParameterDefinition = $this->defaultValueParameterDefinition;
        }
        if (isset($this->defaultValueRelatedArtifact)) {
            $out->defaultValueRelatedArtifact = $this->defaultValueRelatedArtifact;
        }
        if (isset($this->defaultValueTriggerDefinition)) {
            $out->defaultValueTriggerDefinition = $this->defaultValueTriggerDefinition;
        }
        if (isset($this->defaultValueUsageContext)) {
            $out->defaultValueUsageContext = $this->defaultValueUsageContext;
        }
        if (isset($this->defaultValueDosage)) {
            $out->defaultValueDosage = $this->defaultValueDosage;
        }
        if (isset($this->defaultValueMeta)) {
            $out->defaultValueMeta = $this->defaultValueMeta;
        }
        if (isset($this->element)) {
            if (null !== ($val = $this->element->getValue())) {
                $out->element = $val;
            }
            if ($this->element->_nonValueFieldDefined()) {
                $ext = $this->element->jsonSerialize();
                unset($ext->value);
                $out->_element = $ext;
            }
        }
        if (isset($this->listMode)) {
            if (null !== ($val = $this->listMode->getValue())) {
                $out->listMode = $val;
            }
            if ($this->listMode->_nonValueFieldDefined()) {
                $ext = $this->listMode->jsonSerialize();
                unset($ext->value);
                $out->_listMode = $ext;
            }
        }
        if (isset($this->variable)) {
            if (null !== ($val = $this->variable->getValue())) {
                $out->variable = $val;
            }
            if ($this->variable->_nonValueFieldDefined()) {
                $ext = $this->variable->jsonSerialize();
                unset($ext->value);
                $out->_variable = $ext;
            }
        }
        if (isset($this->condition)) {
            if (null !== ($val = $this->condition->getValue())) {
                $out->condition = $val;
            }
            if ($this->condition->_nonValueFieldDefined()) {
                $ext = $this->condition->jsonSerialize();
                unset($ext->value);
                $out->_condition = $ext;
            }
        }
        if (isset($this->check)) {
            if (null !== ($val = $this->check->getValue())) {
                $out->check = $val;
            }
            if ($this->check->_nonValueFieldDefined()) {
                $ext = $this->check->jsonSerialize();
                unset($ext->value);
                $out->_check = $ext;
            }
        }
        if (isset($this->logMessage)) {
            if (null !== ($val = $this->logMessage->getValue())) {
                $out->logMessage = $val;
            }
            if ($this->logMessage->_nonValueFieldDefined()) {
                $ext = $this->logMessage->jsonSerialize();
                unset($ext->value);
                $out->_logMessage = $ext;
            }
        }
        return $out;
    }
}