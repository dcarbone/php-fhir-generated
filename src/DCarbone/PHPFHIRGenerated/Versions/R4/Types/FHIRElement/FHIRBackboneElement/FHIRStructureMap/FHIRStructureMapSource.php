<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 00:27+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBase64BinaryPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive;
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
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * A Map of relationships between 2 structures that can be used to transform data.
 */
class FHIRStructureMapSource extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE;


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

    /** Default validation map for fields in type StructureMap.Source */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_CONTEXT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRStructureMapSourceListMode $listMode
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
                                null|FHIRStructureMapSourceListMode $listMode = null,
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

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
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
     * @return static
     */
    public function setContext(null|string|FHIRIdPrimitive|FHIRId $context): self
    {
        if (null === $context) {
            unset($this->context);
            return $this;
        }
        if (!($context instanceof FHIRId)) {
            $context = new FHIRId(value: $context);
        }
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
     * @return static
     */
    public function setMin(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $min): self
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
     * @return static
     */
    public function setType(null|string|FHIRStringPrimitive|FHIRString $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        if (!($type instanceof FHIRString)) {
            $type = new FHIRString(value: $type);
        }
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
     * @return static
     */
    public function setDefaultValueBase64Binary(null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $defaultValueBase64Binary): self
    {
        if (null === $defaultValueBase64Binary) {
            unset($this->defaultValueBase64Binary);
            return $this;
        }
        if (!($defaultValueBase64Binary instanceof FHIRBase64Binary)) {
            $defaultValueBase64Binary = new FHIRBase64Binary(value: $defaultValueBase64Binary);
        }
        $this->defaultValueBase64Binary = $defaultValueBase64Binary;
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
     * @return static
     */
    public function setDefaultValueBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $defaultValueBoolean): self
    {
        if (null === $defaultValueBoolean) {
            unset($this->defaultValueBoolean);
            return $this;
        }
        if (!($defaultValueBoolean instanceof FHIRBoolean)) {
            $defaultValueBoolean = new FHIRBoolean(value: $defaultValueBoolean);
        }
        $this->defaultValueBoolean = $defaultValueBoolean;
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
     * @return static
     */
    public function setDefaultValueCanonical(null|string|FHIRCanonicalPrimitive|FHIRCanonical $defaultValueCanonical): self
    {
        if (null === $defaultValueCanonical) {
            unset($this->defaultValueCanonical);
            return $this;
        }
        if (!($defaultValueCanonical instanceof FHIRCanonical)) {
            $defaultValueCanonical = new FHIRCanonical(value: $defaultValueCanonical);
        }
        $this->defaultValueCanonical = $defaultValueCanonical;
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
     * @return static
     */
    public function setDefaultValueCode(null|string|FHIRCodePrimitive|FHIRCode $defaultValueCode): self
    {
        if (null === $defaultValueCode) {
            unset($this->defaultValueCode);
            return $this;
        }
        if (!($defaultValueCode instanceof FHIRCode)) {
            $defaultValueCode = new FHIRCode(value: $defaultValueCode);
        }
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
     * @return static
     */
    public function setDefaultValueDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $defaultValueDate): self
    {
        if (null === $defaultValueDate) {
            unset($this->defaultValueDate);
            return $this;
        }
        if (!($defaultValueDate instanceof FHIRDate)) {
            $defaultValueDate = new FHIRDate(value: $defaultValueDate);
        }
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
     * @return static
     */
    public function setDefaultValueDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $defaultValueDateTime): self
    {
        if (null === $defaultValueDateTime) {
            unset($this->defaultValueDateTime);
            return $this;
        }
        if (!($defaultValueDateTime instanceof FHIRDateTime)) {
            $defaultValueDateTime = new FHIRDateTime(value: $defaultValueDateTime);
        }
        $this->defaultValueDateTime = $defaultValueDateTime;
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
     * @return static
     */
    public function setDefaultValueDecimal(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $defaultValueDecimal): self
    {
        if (null === $defaultValueDecimal) {
            unset($this->defaultValueDecimal);
            return $this;
        }
        if (!($defaultValueDecimal instanceof FHIRDecimal)) {
            $defaultValueDecimal = new FHIRDecimal(value: $defaultValueDecimal);
        }
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
     * @return static
     */
    public function setDefaultValueId(null|string|FHIRIdPrimitive|FHIRId $defaultValueId): self
    {
        if (null === $defaultValueId) {
            unset($this->defaultValueId);
            return $this;
        }
        if (!($defaultValueId instanceof FHIRId)) {
            $defaultValueId = new FHIRId(value: $defaultValueId);
        }
        $this->defaultValueId = $defaultValueId;
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
     * @return static
     */
    public function setDefaultValueInstant(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $defaultValueInstant): self
    {
        if (null === $defaultValueInstant) {
            unset($this->defaultValueInstant);
            return $this;
        }
        if (!($defaultValueInstant instanceof FHIRInstant)) {
            $defaultValueInstant = new FHIRInstant(value: $defaultValueInstant);
        }
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
     * @return static
     */
    public function setDefaultValueInteger(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $defaultValueInteger): self
    {
        if (null === $defaultValueInteger) {
            unset($this->defaultValueInteger);
            return $this;
        }
        if (!($defaultValueInteger instanceof FHIRInteger)) {
            $defaultValueInteger = new FHIRInteger(value: $defaultValueInteger);
        }
        $this->defaultValueInteger = $defaultValueInteger;
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
     * @return static
     */
    public function setDefaultValueMarkdown(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $defaultValueMarkdown): self
    {
        if (null === $defaultValueMarkdown) {
            unset($this->defaultValueMarkdown);
            return $this;
        }
        if (!($defaultValueMarkdown instanceof FHIRMarkdown)) {
            $defaultValueMarkdown = new FHIRMarkdown(value: $defaultValueMarkdown);
        }
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
     * @return static
     */
    public function setDefaultValueOid(null|string|FHIROidPrimitive|FHIROid $defaultValueOid): self
    {
        if (null === $defaultValueOid) {
            unset($this->defaultValueOid);
            return $this;
        }
        if (!($defaultValueOid instanceof FHIROid)) {
            $defaultValueOid = new FHIROid(value: $defaultValueOid);
        }
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
     * @return static
     */
    public function setDefaultValuePositiveInt(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $defaultValuePositiveInt): self
    {
        if (null === $defaultValuePositiveInt) {
            unset($this->defaultValuePositiveInt);
            return $this;
        }
        if (!($defaultValuePositiveInt instanceof FHIRPositiveInt)) {
            $defaultValuePositiveInt = new FHIRPositiveInt(value: $defaultValuePositiveInt);
        }
        $this->defaultValuePositiveInt = $defaultValuePositiveInt;
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
     * @return static
     */
    public function setDefaultValueString(null|string|FHIRStringPrimitive|FHIRString $defaultValueString): self
    {
        if (null === $defaultValueString) {
            unset($this->defaultValueString);
            return $this;
        }
        if (!($defaultValueString instanceof FHIRString)) {
            $defaultValueString = new FHIRString(value: $defaultValueString);
        }
        $this->defaultValueString = $defaultValueString;
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
     * @return static
     */
    public function setDefaultValueTime(null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $defaultValueTime): self
    {
        if (null === $defaultValueTime) {
            unset($this->defaultValueTime);
            return $this;
        }
        if (!($defaultValueTime instanceof FHIRTime)) {
            $defaultValueTime = new FHIRTime(value: $defaultValueTime);
        }
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
     * @return static
     */
    public function setDefaultValueUnsignedInt(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $defaultValueUnsignedInt): self
    {
        if (null === $defaultValueUnsignedInt) {
            unset($this->defaultValueUnsignedInt);
            return $this;
        }
        if (!($defaultValueUnsignedInt instanceof FHIRUnsignedInt)) {
            $defaultValueUnsignedInt = new FHIRUnsignedInt(value: $defaultValueUnsignedInt);
        }
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
     * @return static
     */
    public function setDefaultValueUri(null|string|FHIRUriPrimitive|FHIRUri $defaultValueUri): self
    {
        if (null === $defaultValueUri) {
            unset($this->defaultValueUri);
            return $this;
        }
        if (!($defaultValueUri instanceof FHIRUri)) {
            $defaultValueUri = new FHIRUri(value: $defaultValueUri);
        }
        $this->defaultValueUri = $defaultValueUri;
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
     * @return static
     */
    public function setDefaultValueUrl(null|string|FHIRUrlPrimitive|FHIRUrl $defaultValueUrl): self
    {
        if (null === $defaultValueUrl) {
            unset($this->defaultValueUrl);
            return $this;
        }
        if (!($defaultValueUrl instanceof FHIRUrl)) {
            $defaultValueUrl = new FHIRUrl(value: $defaultValueUrl);
        }
        $this->defaultValueUrl = $defaultValueUrl;
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
     * @return static
     */
    public function setDefaultValueUuid(null|string|FHIRUuidPrimitive|FHIRUuid $defaultValueUuid): self
    {
        if (null === $defaultValueUuid) {
            unset($this->defaultValueUuid);
            return $this;
        }
        if (!($defaultValueUuid instanceof FHIRUuid)) {
            $defaultValueUuid = new FHIRUuid(value: $defaultValueUuid);
        }
        $this->defaultValueUuid = $defaultValueUuid;
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
     * @return static
     */
    public function setElement(null|string|FHIRStringPrimitive|FHIRString $element): self
    {
        if (null === $element) {
            unset($this->element);
            return $this;
        }
        if (!($element instanceof FHIRString)) {
            $element = new FHIRString(value: $element);
        }
        $this->element = $element;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRStructureMapSourceListMode $listMode
     * @return static
     */
    public function setListMode(null|FHIRStructureMapSourceListMode $listMode): self
    {
        if (null === $listMode) {
            unset($this->listMode);
            return $this;
        }
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
     * @return static
     */
    public function setVariable(null|string|FHIRIdPrimitive|FHIRId $variable): self
    {
        if (null === $variable) {
            unset($this->variable);
            return $this;
        }
        if (!($variable instanceof FHIRId)) {
            $variable = new FHIRId(value: $variable);
        }
        $this->variable = $variable;
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
     * @return static
     */
    public function setCondition(null|string|FHIRStringPrimitive|FHIRString $condition): self
    {
        if (null === $condition) {
            unset($this->condition);
            return $this;
        }
        if (!($condition instanceof FHIRString)) {
            $condition = new FHIRString(value: $condition);
        }
        $this->condition = $condition;
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
     * @return static
     */
    public function setCheck(null|string|FHIRStringPrimitive|FHIRString $check): self
    {
        if (null === $check) {
            unset($this->check);
            return $this;
        }
        if (!($check instanceof FHIRString)) {
            $check = new FHIRString(value: $check);
        }
        $this->check = $check;
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
     * @return static
     */
    public function setLogMessage(null|string|FHIRStringPrimitive|FHIRString $logMessage): self
    {
        if (null === $logMessage) {
            unset($this->logMessage);
            return $this;
        }
        if (!($logMessage instanceof FHIRString)) {
            $logMessage = new FHIRString(value: $logMessage);
        }
        $this->logMessage = $logMessage;
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
        if (null !== ($v = $this->getContext())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTEXT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CONTEXT])) {
            $v = $this->getContext();
            foreach($validationRules[self::FIELD_CONTEXT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTEXT, $rule, $constraint, $v);
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
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_BASE_64BINARY])) {
            $v = $this->getDefaultValueBase64Binary();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_BASE_64BINARY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_BOOLEAN])) {
                        $errs[self::FIELD_DEFAULT_VALUE_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_CANONICAL])) {
            $v = $this->getDefaultValueCanonical();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_CANONICAL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_CANONICAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_CANONICAL])) {
                        $errs[self::FIELD_DEFAULT_VALUE_CANONICAL] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_CANONICAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_CODE])) {
            $v = $this->getDefaultValueCode();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_CODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_CODE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_DATE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_DATE_TIME, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_DECIMAL, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_ID, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_INSTANT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_INTEGER, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_MARKDOWN, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_OID, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_POSITIVE_INT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_STRING, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_TIME, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_UNSIGNED_INT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_URI])) {
                        $errs[self::FIELD_DEFAULT_VALUE_URI] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_URL])) {
            $v = $this->getDefaultValueUrl();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_URL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_URL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_URL])) {
                        $errs[self::FIELD_DEFAULT_VALUE_URL] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_URL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_UUID])) {
            $v = $this->getDefaultValueUuid();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_UUID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_UUID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_UUID])) {
                        $errs[self::FIELD_DEFAULT_VALUE_UUID] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_UUID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_ADDRESS])) {
            $v = $this->getDefaultValueAddress();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_ADDRESS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_ADDRESS, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_AGE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_ANNOTATION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_ATTACHMENT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_CODING, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_CONTACT_POINT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_COUNT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_DISTANCE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_DURATION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_HUMAN_NAME, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_IDENTIFIER, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_MONEY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_PERIOD, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_QUANTITY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_RANGE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_RATIO, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_REFERENCE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_SAMPLED_DATA, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_SIGNATURE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_TIMING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_TIMING])) {
                        $errs[self::FIELD_DEFAULT_VALUE_TIMING] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_TIMING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL])) {
            $v = $this->getDefaultValueContactDetail();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL])) {
                        $errs[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR])) {
            $v = $this->getDefaultValueContributor();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_CONTRIBUTOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR])) {
                        $errs[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT])) {
            $v = $this->getDefaultValueDataRequirement();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT])) {
                        $errs[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_EXPRESSION])) {
            $v = $this->getDefaultValueExpression();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_EXPRESSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_EXPRESSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_EXPRESSION])) {
                        $errs[self::FIELD_DEFAULT_VALUE_EXPRESSION] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_EXPRESSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION])) {
            $v = $this->getDefaultValueParameterDefinition();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION])) {
                        $errs[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT])) {
            $v = $this->getDefaultValueRelatedArtifact();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT])) {
                        $errs[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION])) {
            $v = $this->getDefaultValueTriggerDefinition();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION])) {
                        $errs[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT])) {
            $v = $this->getDefaultValueUsageContext();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT])) {
                        $errs[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_DOSAGE])) {
            $v = $this->getDefaultValueDosage();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_DOSAGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_DOSAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_DOSAGE])) {
                        $errs[self::FIELD_DEFAULT_VALUE_DOSAGE] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_DOSAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_META])) {
            $v = $this->getDefaultValueMeta();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_META] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFAULT_VALUE_META, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ELEMENT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LIST_MODE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VARIABLE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONDITION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CHECK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CHECK])) {
                        $errs[self::FIELD_CHECK] = [];
                    }
                    $errs[self::FIELD_CHECK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOG_MESSAGE])) {
            $v = $this->getLogMessage();
            foreach($validationRules[self::FIELD_LOG_MESSAGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LOG_MESSAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOG_MESSAGE])) {
                        $errs[self::FIELD_LOG_MESSAGE] = [];
                    }
                    $errs[self::FIELD_LOG_MESSAGE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
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
                $v = new FHIRStringPrimitive(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTEXT === $childName) {
                $v = new FHIRId(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setContext(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MIN === $childName) {
                $v = new FHIRInteger(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMin(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MAX === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMax(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TYPE === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setType(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_BASE_64BINARY === $childName) {
                $v = new FHIRBase64Binary(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDefaultValueBase64Binary(FHIRBase64Binary::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_BOOLEAN === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDefaultValueBoolean(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_CANONICAL === $childName) {
                $v = new FHIRCanonical(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDefaultValueCanonical(FHIRCanonical::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_CODE === $childName) {
                $v = new FHIRCode(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDefaultValueCode(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_DATE === $childName) {
                $v = new FHIRDate(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDefaultValueDate(FHIRDate::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_DATE_TIME === $childName) {
                $v = new FHIRDateTime(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDefaultValueDateTime(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_DECIMAL === $childName) {
                $v = new FHIRDecimal(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDefaultValueDecimal(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_ID === $childName) {
                $v = new FHIRId(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDefaultValueId(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_INSTANT === $childName) {
                $v = new FHIRInstant(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDefaultValueInstant(FHIRInstant::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_INTEGER === $childName) {
                $v = new FHIRInteger(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDefaultValueInteger(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_MARKDOWN === $childName) {
                $v = new FHIRMarkdown(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDefaultValueMarkdown(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_OID === $childName) {
                $v = new FHIROid(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDefaultValueOid(FHIROid::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_POSITIVE_INT === $childName) {
                $v = new FHIRPositiveInt(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDefaultValuePositiveInt(FHIRPositiveInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_STRING === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDefaultValueString(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_TIME === $childName) {
                $v = new FHIRTime(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDefaultValueTime(FHIRTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_UNSIGNED_INT === $childName) {
                $v = new FHIRUnsignedInt(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDefaultValueUnsignedInt(FHIRUnsignedInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_URI === $childName) {
                $v = new FHIRUri(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDefaultValueUri(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_URL === $childName) {
                $v = new FHIRUrl(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDefaultValueUrl(FHIRUrl::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_UUID === $childName) {
                $v = new FHIRUuid(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDefaultValueUuid(FHIRUuid::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_ADDRESS === $childName) {
                $v = new FHIRAddress();
                $type->setDefaultValueAddress(FHIRAddress::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_AGE === $childName) {
                $v = new FHIRAge();
                $type->setDefaultValueAge(FHIRAge::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_ANNOTATION === $childName) {
                $v = new FHIRAnnotation();
                $type->setDefaultValueAnnotation(FHIRAnnotation::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_ATTACHMENT === $childName) {
                $v = new FHIRAttachment();
                $type->setDefaultValueAttachment(FHIRAttachment::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setDefaultValueCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_CODING === $childName) {
                $v = new FHIRCoding();
                $type->setDefaultValueCoding(FHIRCoding::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_CONTACT_POINT === $childName) {
                $v = new FHIRContactPoint();
                $type->setDefaultValueContactPoint(FHIRContactPoint::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_COUNT === $childName) {
                $v = new FHIRCount();
                $type->setDefaultValueCount(FHIRCount::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_DISTANCE === $childName) {
                $v = new FHIRDistance();
                $type->setDefaultValueDistance(FHIRDistance::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_DURATION === $childName) {
                $v = new FHIRDuration();
                $type->setDefaultValueDuration(FHIRDuration::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_HUMAN_NAME === $childName) {
                $v = new FHIRHumanName();
                $type->setDefaultValueHumanName(FHIRHumanName::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_IDENTIFIER === $childName) {
                $v = new FHIRIdentifier();
                $type->setDefaultValueIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_MONEY === $childName) {
                $v = new FHIRMoney();
                $type->setDefaultValueMoney(FHIRMoney::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_PERIOD === $childName) {
                $v = new FHIRPeriod();
                $type->setDefaultValuePeriod(FHIRPeriod::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_QUANTITY === $childName) {
                $v = new FHIRQuantity();
                $type->setDefaultValueQuantity(FHIRQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_RANGE === $childName) {
                $v = new FHIRRange();
                $type->setDefaultValueRange(FHIRRange::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_RATIO === $childName) {
                $v = new FHIRRatio();
                $type->setDefaultValueRatio(FHIRRatio::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_REFERENCE === $childName) {
                $v = new FHIRReference();
                $type->setDefaultValueReference(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_SAMPLED_DATA === $childName) {
                $v = new FHIRSampledData();
                $type->setDefaultValueSampledData(FHIRSampledData::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_SIGNATURE === $childName) {
                $v = new FHIRSignature();
                $type->setDefaultValueSignature(FHIRSignature::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_TIMING === $childName) {
                $v = new FHIRTiming();
                $type->setDefaultValueTiming(FHIRTiming::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL === $childName) {
                $v = new FHIRContactDetail();
                $type->setDefaultValueContactDetail(FHIRContactDetail::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_CONTRIBUTOR === $childName) {
                $v = new FHIRContributor();
                $type->setDefaultValueContributor(FHIRContributor::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT === $childName) {
                $v = new FHIRDataRequirement();
                $type->setDefaultValueDataRequirement(FHIRDataRequirement::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_EXPRESSION === $childName) {
                $v = new FHIRExpression();
                $type->setDefaultValueExpression(FHIRExpression::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION === $childName) {
                $v = new FHIRParameterDefinition();
                $type->setDefaultValueParameterDefinition(FHIRParameterDefinition::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT === $childName) {
                $v = new FHIRRelatedArtifact();
                $type->setDefaultValueRelatedArtifact(FHIRRelatedArtifact::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION === $childName) {
                $v = new FHIRTriggerDefinition();
                $type->setDefaultValueTriggerDefinition(FHIRTriggerDefinition::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT === $childName) {
                $v = new FHIRUsageContext();
                $type->setDefaultValueUsageContext(FHIRUsageContext::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_DOSAGE === $childName) {
                $v = new FHIRDosage();
                $type->setDefaultValueDosage(FHIRDosage::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFAULT_VALUE_META === $childName) {
                $v = new FHIRMeta();
                $type->setDefaultValueMeta(FHIRMeta::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ELEMENT === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setElement(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LIST_MODE === $childName) {
                $v = new FHIRStructureMapSourceListMode(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setListMode(FHIRStructureMapSourceListMode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VARIABLE === $childName) {
                $v = new FHIRId(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setVariable(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONDITION === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setCondition(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CHECK === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setCheck(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LOG_MESSAGE === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setLogMessage(FHIRString::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_CONTEXT])) {
            $pt = $type->getContext();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CONTEXT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setContext(new FHIRId(
                    value: (string)$attributes[self::FIELD_CONTEXT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MIN])) {
            $pt = $type->getMin();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MIN]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMin(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_MIN],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MAX])) {
            $pt = $type->getMax();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MAX]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMax(new FHIRString(
                    value: (string)$attributes[self::FIELD_MAX],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_TYPE])) {
            $pt = $type->getType();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TYPE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setType(new FHIRString(
                    value: (string)$attributes[self::FIELD_TYPE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_BASE_64BINARY])) {
            $pt = $type->getDefaultValueBase64Binary();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_BASE_64BINARY]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueBase64Binary(new FHIRBase64Binary(
                    value: (string)$attributes[self::FIELD_DEFAULT_VALUE_BASE_64BINARY],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_BOOLEAN])) {
            $pt = $type->getDefaultValueBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_BOOLEAN]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueBoolean(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_DEFAULT_VALUE_BOOLEAN],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_CANONICAL])) {
            $pt = $type->getDefaultValueCanonical();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_CANONICAL]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueCanonical(new FHIRCanonical(
                    value: (string)$attributes[self::FIELD_DEFAULT_VALUE_CANONICAL],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_CODE])) {
            $pt = $type->getDefaultValueCode();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_CODE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueCode(new FHIRCode(
                    value: (string)$attributes[self::FIELD_DEFAULT_VALUE_CODE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_DATE])) {
            $pt = $type->getDefaultValueDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_DATE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueDate(new FHIRDate(
                    value: (string)$attributes[self::FIELD_DEFAULT_VALUE_DATE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_DATE_TIME])) {
            $pt = $type->getDefaultValueDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_DATE_TIME]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueDateTime(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_DEFAULT_VALUE_DATE_TIME],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_DECIMAL])) {
            $pt = $type->getDefaultValueDecimal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_DECIMAL]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueDecimal(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_DEFAULT_VALUE_DECIMAL],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_ID])) {
            $pt = $type->getDefaultValueId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueId(new FHIRId(
                    value: (string)$attributes[self::FIELD_DEFAULT_VALUE_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_INSTANT])) {
            $pt = $type->getDefaultValueInstant();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_INSTANT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueInstant(new FHIRInstant(
                    value: (string)$attributes[self::FIELD_DEFAULT_VALUE_INSTANT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_INTEGER])) {
            $pt = $type->getDefaultValueInteger();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_INTEGER]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueInteger(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_DEFAULT_VALUE_INTEGER],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_MARKDOWN])) {
            $pt = $type->getDefaultValueMarkdown();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_MARKDOWN]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueMarkdown(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_DEFAULT_VALUE_MARKDOWN],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_OID])) {
            $pt = $type->getDefaultValueOid();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_OID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueOid(new FHIROid(
                    value: (string)$attributes[self::FIELD_DEFAULT_VALUE_OID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_POSITIVE_INT])) {
            $pt = $type->getDefaultValuePositiveInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_POSITIVE_INT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValuePositiveInt(new FHIRPositiveInt(
                    value: (string)$attributes[self::FIELD_DEFAULT_VALUE_POSITIVE_INT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_STRING])) {
            $pt = $type->getDefaultValueString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_STRING]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueString(new FHIRString(
                    value: (string)$attributes[self::FIELD_DEFAULT_VALUE_STRING],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_TIME])) {
            $pt = $type->getDefaultValueTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_TIME]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueTime(new FHIRTime(
                    value: (string)$attributes[self::FIELD_DEFAULT_VALUE_TIME],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT])) {
            $pt = $type->getDefaultValueUnsignedInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueUnsignedInt(new FHIRUnsignedInt(
                    value: (string)$attributes[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_URI])) {
            $pt = $type->getDefaultValueUri();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_URI]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueUri(new FHIRUri(
                    value: (string)$attributes[self::FIELD_DEFAULT_VALUE_URI],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_URL])) {
            $pt = $type->getDefaultValueUrl();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_URL]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueUrl(new FHIRUrl(
                    value: (string)$attributes[self::FIELD_DEFAULT_VALUE_URL],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_UUID])) {
            $pt = $type->getDefaultValueUuid();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_UUID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueUuid(new FHIRUuid(
                    value: (string)$attributes[self::FIELD_DEFAULT_VALUE_UUID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ELEMENT])) {
            $pt = $type->getElement();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ELEMENT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setElement(new FHIRString(
                    value: (string)$attributes[self::FIELD_ELEMENT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VARIABLE])) {
            $pt = $type->getVariable();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VARIABLE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setVariable(new FHIRId(
                    value: (string)$attributes[self::FIELD_VARIABLE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_CONDITION])) {
            $pt = $type->getCondition();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CONDITION]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCondition(new FHIRString(
                    value: (string)$attributes[self::FIELD_CONDITION],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_CHECK])) {
            $pt = $type->getCheck();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CHECK]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCheck(new FHIRString(
                    value: (string)$attributes[self::FIELD_CHECK],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LOG_MESSAGE])) {
            $pt = $type->getLogMessage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LOG_MESSAGE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLogMessage(new FHIRString(
                    value: (string)$attributes[self::FIELD_LOG_MESSAGE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
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
            $xw->openRootNode('StructureMapSource', $this->_getSourceXMLNS());
        }
        if (isset($this->context) && $this->context->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CONTEXT, $this->context->getValue()?->getFormattedValue());
        }
        if (isset($this->min) && $this->min->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MIN, $this->min->getValue()?->getFormattedValue());
        }
        if (isset($this->max) && $this->max->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MAX, $this->max->getValue()?->getFormattedValue());
        }
        if (isset($this->type) && $this->type->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_TYPE, $this->type->getValue()?->getFormattedValue());
        }
        if (isset($this->defaultValueBase64Binary) && $this->defaultValueBase64Binary->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_BASE_64BINARY, $this->defaultValueBase64Binary->getValue()?->getFormattedValue());
        }
        if (isset($this->defaultValueBoolean) && $this->defaultValueBoolean->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_BOOLEAN, $this->defaultValueBoolean->getValue()?->getFormattedValue());
        }
        if (isset($this->defaultValueCanonical) && $this->defaultValueCanonical->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_CANONICAL, $this->defaultValueCanonical->getValue()?->getFormattedValue());
        }
        if (isset($this->defaultValueCode) && $this->defaultValueCode->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_CODE, $this->defaultValueCode->getValue()?->getFormattedValue());
        }
        if (isset($this->defaultValueDate) && $this->defaultValueDate->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_DATE, $this->defaultValueDate->getValue()?->getFormattedValue());
        }
        if (isset($this->defaultValueDateTime) && $this->defaultValueDateTime->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_DATE_TIME, $this->defaultValueDateTime->getValue()?->getFormattedValue());
        }
        if (isset($this->defaultValueDecimal) && $this->defaultValueDecimal->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_DECIMAL, $this->defaultValueDecimal->getValue()?->getFormattedValue());
        }
        if (isset($this->defaultValueId) && $this->defaultValueId->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_ID, $this->defaultValueId->getValue()?->getFormattedValue());
        }
        if (isset($this->defaultValueInstant) && $this->defaultValueInstant->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_INSTANT, $this->defaultValueInstant->getValue()?->getFormattedValue());
        }
        if (isset($this->defaultValueInteger) && $this->defaultValueInteger->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_INTEGER, $this->defaultValueInteger->getValue()?->getFormattedValue());
        }
        if (isset($this->defaultValueMarkdown) && $this->defaultValueMarkdown->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_MARKDOWN, $this->defaultValueMarkdown->getValue()?->getFormattedValue());
        }
        if (isset($this->defaultValueOid) && $this->defaultValueOid->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_OID, $this->defaultValueOid->getValue()?->getFormattedValue());
        }
        if (isset($this->defaultValuePositiveInt) && $this->defaultValuePositiveInt->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_POSITIVE_INT, $this->defaultValuePositiveInt->getValue()?->getFormattedValue());
        }
        if (isset($this->defaultValueString) && $this->defaultValueString->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_STRING, $this->defaultValueString->getValue()?->getFormattedValue());
        }
        if (isset($this->defaultValueTime) && $this->defaultValueTime->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_TIME, $this->defaultValueTime->getValue()?->getFormattedValue());
        }
        if (isset($this->defaultValueUnsignedInt) && $this->defaultValueUnsignedInt->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_UNSIGNED_INT, $this->defaultValueUnsignedInt->getValue()?->getFormattedValue());
        }
        if (isset($this->defaultValueUri) && $this->defaultValueUri->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_URI, $this->defaultValueUri->getValue()?->getFormattedValue());
        }
        if (isset($this->defaultValueUrl) && $this->defaultValueUrl->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_URL, $this->defaultValueUrl->getValue()?->getFormattedValue());
        }
        if (isset($this->defaultValueUuid) && $this->defaultValueUuid->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_UUID, $this->defaultValueUuid->getValue()?->getFormattedValue());
        }
        if (isset($this->element) && $this->element->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ELEMENT, $this->element->getValue()?->getFormattedValue());
        }
        if (isset($this->variable) && $this->variable->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VARIABLE, $this->variable->getValue()?->getFormattedValue());
        }
        if (isset($this->condition) && $this->condition->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CONDITION, $this->condition->getValue()?->getFormattedValue());
        }
        if (isset($this->check) && $this->check->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CHECK, $this->check->getValue()?->getFormattedValue());
        }
        if (isset($this->logMessage) && $this->logMessage->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_LOG_MESSAGE, $this->logMessage->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->context) && $this->context->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CONTEXT);
            $this->context->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->min) && $this->min->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MIN);
            $this->min->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->max) && $this->max->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MAX);
            $this->max->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->type) && $this->type->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueBase64Binary) && $this->defaultValueBase64Binary->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_BASE_64BINARY);
            $this->defaultValueBase64Binary->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueBoolean) && $this->defaultValueBoolean->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_BOOLEAN);
            $this->defaultValueBoolean->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueCanonical) && $this->defaultValueCanonical->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_CANONICAL);
            $this->defaultValueCanonical->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueCode) && $this->defaultValueCode->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_CODE);
            $this->defaultValueCode->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueDate) && $this->defaultValueDate->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_DATE);
            $this->defaultValueDate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueDateTime) && $this->defaultValueDateTime->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_DATE_TIME);
            $this->defaultValueDateTime->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueDecimal) && $this->defaultValueDecimal->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_DECIMAL);
            $this->defaultValueDecimal->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueId) && $this->defaultValueId->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_ID);
            $this->defaultValueId->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueInstant) && $this->defaultValueInstant->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_INSTANT);
            $this->defaultValueInstant->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueInteger) && $this->defaultValueInteger->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_INTEGER);
            $this->defaultValueInteger->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueMarkdown) && $this->defaultValueMarkdown->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_MARKDOWN);
            $this->defaultValueMarkdown->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueOid) && $this->defaultValueOid->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_OID);
            $this->defaultValueOid->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValuePositiveInt) && $this->defaultValuePositiveInt->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_POSITIVE_INT);
            $this->defaultValuePositiveInt->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueString) && $this->defaultValueString->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_STRING);
            $this->defaultValueString->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueTime) && $this->defaultValueTime->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_TIME);
            $this->defaultValueTime->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueUnsignedInt) && $this->defaultValueUnsignedInt->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_UNSIGNED_INT);
            $this->defaultValueUnsignedInt->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueUri) && $this->defaultValueUri->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_URI);
            $this->defaultValueUri->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueUrl) && $this->defaultValueUrl->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_URL);
            $this->defaultValueUrl->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->defaultValueUuid) && $this->defaultValueUuid->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_UUID);
            $this->defaultValueUuid->xmlSerialize($xw, $config);
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
        if (isset($this->element) && $this->element->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ELEMENT);
            $this->element->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->listMode)) {
            $xw->startElement(self::FIELD_LIST_MODE);
            $this->listMode->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->variable) && $this->variable->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VARIABLE);
            $this->variable->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->condition) && $this->condition->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CONDITION);
            $this->condition->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->check) && $this->check->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CHECK);
            $this->check->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->logMessage) && $this->logMessage->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_LOG_MESSAGE);
            $this->logMessage->xmlSerialize($xw, $config);
            $xw->endElement();
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
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
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_CONTEXT]) || isset($json[self::FIELD_CONTEXT_EXT]) || array_key_exists(self::FIELD_CONTEXT, $json) || array_key_exists(self::FIELD_CONTEXT_EXT, $json)) {
            $value = $json[self::FIELD_CONTEXT] ?? null;
            $ext = (isset($json[self::FIELD_CONTEXT_EXT]) && is_array($json[self::FIELD_CONTEXT_EXT])) ? $json[self::FIELD_CONTEXT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $type->setContext($value);
                } else if (is_array($value)) {
                    $type->setContext(new FHIRId(array_merge($ext, $value)));
                } else {
                    $type->setContext(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setContext(new FHIRId($ext));
            } else {
                $type->setContext(new FHIRId(null));
            }
        }
        if (isset($json[self::FIELD_MIN]) || isset($json[self::FIELD_MIN_EXT]) || array_key_exists(self::FIELD_MIN, $json) || array_key_exists(self::FIELD_MIN_EXT, $json)) {
            $value = $json[self::FIELD_MIN] ?? null;
            $ext = (isset($json[self::FIELD_MIN_EXT]) && is_array($json[self::FIELD_MIN_EXT])) ? $json[self::FIELD_MIN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $type->setMin($value);
                } else if (is_array($value)) {
                    $type->setMin(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $type->setMin(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMin(new FHIRInteger($ext));
            } else {
                $type->setMin(new FHIRInteger(null));
            }
        }
        if (isset($json[self::FIELD_MAX]) || isset($json[self::FIELD_MAX_EXT]) || array_key_exists(self::FIELD_MAX, $json) || array_key_exists(self::FIELD_MAX_EXT, $json)) {
            $value = $json[self::FIELD_MAX] ?? null;
            $ext = (isset($json[self::FIELD_MAX_EXT]) && is_array($json[self::FIELD_MAX_EXT])) ? $json[self::FIELD_MAX_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setMax($value);
                } else if (is_array($value)) {
                    $type->setMax(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setMax(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMax(new FHIRString($ext));
            } else {
                $type->setMax(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_TYPE]) || isset($json[self::FIELD_TYPE_EXT]) || array_key_exists(self::FIELD_TYPE, $json) || array_key_exists(self::FIELD_TYPE_EXT, $json)) {
            $value = $json[self::FIELD_TYPE] ?? null;
            $ext = (isset($json[self::FIELD_TYPE_EXT]) && is_array($json[self::FIELD_TYPE_EXT])) ? $json[self::FIELD_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setType($value);
                } else if (is_array($value)) {
                    $type->setType(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setType(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setType(new FHIRString($ext));
            } else {
                $type->setType(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_BASE_64BINARY]) || isset($json[self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_BASE_64BINARY, $json) || array_key_exists(self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] ?? null;
            $ext = (isset($json[self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT]) && is_array($json[self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT])) ? $json[self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBase64Binary) {
                    $type->setDefaultValueBase64Binary($value);
                } else if (is_array($value)) {
                    $type->setDefaultValueBase64Binary(new FHIRBase64Binary(array_merge($ext, $value)));
                } else {
                    $type->setDefaultValueBase64Binary(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDefaultValueBase64Binary(new FHIRBase64Binary($ext));
            } else {
                $type->setDefaultValueBase64Binary(new FHIRBase64Binary(null));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_BOOLEAN]) || isset($json[self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_BOOLEAN, $json) || array_key_exists(self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_BOOLEAN] ?? null;
            $ext = (isset($json[self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT]) && is_array($json[self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT])) ? $json[self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setDefaultValueBoolean($value);
                } else if (is_array($value)) {
                    $type->setDefaultValueBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setDefaultValueBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDefaultValueBoolean(new FHIRBoolean($ext));
            } else {
                $type->setDefaultValueBoolean(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_CANONICAL]) || isset($json[self::FIELD_DEFAULT_VALUE_CANONICAL_EXT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_CANONICAL, $json) || array_key_exists(self::FIELD_DEFAULT_VALUE_CANONICAL_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_CANONICAL] ?? null;
            $ext = (isset($json[self::FIELD_DEFAULT_VALUE_CANONICAL_EXT]) && is_array($json[self::FIELD_DEFAULT_VALUE_CANONICAL_EXT])) ? $json[self::FIELD_DEFAULT_VALUE_CANONICAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $type->setDefaultValueCanonical($value);
                } else if (is_array($value)) {
                    $type->setDefaultValueCanonical(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $type->setDefaultValueCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDefaultValueCanonical(new FHIRCanonical($ext));
            } else {
                $type->setDefaultValueCanonical(new FHIRCanonical(null));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_CODE]) || isset($json[self::FIELD_DEFAULT_VALUE_CODE_EXT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_CODE, $json) || array_key_exists(self::FIELD_DEFAULT_VALUE_CODE_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_CODE] ?? null;
            $ext = (isset($json[self::FIELD_DEFAULT_VALUE_CODE_EXT]) && is_array($json[self::FIELD_DEFAULT_VALUE_CODE_EXT])) ? $json[self::FIELD_DEFAULT_VALUE_CODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $type->setDefaultValueCode($value);
                } else if (is_array($value)) {
                    $type->setDefaultValueCode(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $type->setDefaultValueCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDefaultValueCode(new FHIRCode($ext));
            } else {
                $type->setDefaultValueCode(new FHIRCode(null));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_DATE]) || isset($json[self::FIELD_DEFAULT_VALUE_DATE_EXT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_DATE, $json) || array_key_exists(self::FIELD_DEFAULT_VALUE_DATE_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_DATE] ?? null;
            $ext = (isset($json[self::FIELD_DEFAULT_VALUE_DATE_EXT]) && is_array($json[self::FIELD_DEFAULT_VALUE_DATE_EXT])) ? $json[self::FIELD_DEFAULT_VALUE_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $type->setDefaultValueDate($value);
                } else if (is_array($value)) {
                    $type->setDefaultValueDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $type->setDefaultValueDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDefaultValueDate(new FHIRDate($ext));
            } else {
                $type->setDefaultValueDate(new FHIRDate(null));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_DATE_TIME]) || isset($json[self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_DATE_TIME, $json) || array_key_exists(self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_DATE_TIME] ?? null;
            $ext = (isset($json[self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT]) && is_array($json[self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT])) ? $json[self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $type->setDefaultValueDateTime($value);
                } else if (is_array($value)) {
                    $type->setDefaultValueDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $type->setDefaultValueDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDefaultValueDateTime(new FHIRDateTime($ext));
            } else {
                $type->setDefaultValueDateTime(new FHIRDateTime(null));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_DECIMAL]) || isset($json[self::FIELD_DEFAULT_VALUE_DECIMAL_EXT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_DECIMAL, $json) || array_key_exists(self::FIELD_DEFAULT_VALUE_DECIMAL_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_DECIMAL] ?? null;
            $ext = (isset($json[self::FIELD_DEFAULT_VALUE_DECIMAL_EXT]) && is_array($json[self::FIELD_DEFAULT_VALUE_DECIMAL_EXT])) ? $json[self::FIELD_DEFAULT_VALUE_DECIMAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $type->setDefaultValueDecimal($value);
                } else if (is_array($value)) {
                    $type->setDefaultValueDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $type->setDefaultValueDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDefaultValueDecimal(new FHIRDecimal($ext));
            } else {
                $type->setDefaultValueDecimal(new FHIRDecimal(null));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_ID]) || isset($json[self::FIELD_DEFAULT_VALUE_ID_EXT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_ID, $json) || array_key_exists(self::FIELD_DEFAULT_VALUE_ID_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_ID] ?? null;
            $ext = (isset($json[self::FIELD_DEFAULT_VALUE_ID_EXT]) && is_array($json[self::FIELD_DEFAULT_VALUE_ID_EXT])) ? $json[self::FIELD_DEFAULT_VALUE_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $type->setDefaultValueId($value);
                } else if (is_array($value)) {
                    $type->setDefaultValueId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $type->setDefaultValueId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDefaultValueId(new FHIRId($ext));
            } else {
                $type->setDefaultValueId(new FHIRId(null));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_INSTANT]) || isset($json[self::FIELD_DEFAULT_VALUE_INSTANT_EXT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_INSTANT, $json) || array_key_exists(self::FIELD_DEFAULT_VALUE_INSTANT_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_INSTANT] ?? null;
            $ext = (isset($json[self::FIELD_DEFAULT_VALUE_INSTANT_EXT]) && is_array($json[self::FIELD_DEFAULT_VALUE_INSTANT_EXT])) ? $json[self::FIELD_DEFAULT_VALUE_INSTANT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $type->setDefaultValueInstant($value);
                } else if (is_array($value)) {
                    $type->setDefaultValueInstant(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $type->setDefaultValueInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDefaultValueInstant(new FHIRInstant($ext));
            } else {
                $type->setDefaultValueInstant(new FHIRInstant(null));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_INTEGER]) || isset($json[self::FIELD_DEFAULT_VALUE_INTEGER_EXT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_INTEGER, $json) || array_key_exists(self::FIELD_DEFAULT_VALUE_INTEGER_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_INTEGER] ?? null;
            $ext = (isset($json[self::FIELD_DEFAULT_VALUE_INTEGER_EXT]) && is_array($json[self::FIELD_DEFAULT_VALUE_INTEGER_EXT])) ? $json[self::FIELD_DEFAULT_VALUE_INTEGER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $type->setDefaultValueInteger($value);
                } else if (is_array($value)) {
                    $type->setDefaultValueInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $type->setDefaultValueInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDefaultValueInteger(new FHIRInteger($ext));
            } else {
                $type->setDefaultValueInteger(new FHIRInteger(null));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_MARKDOWN]) || isset($json[self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_MARKDOWN, $json) || array_key_exists(self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_MARKDOWN] ?? null;
            $ext = (isset($json[self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT]) && is_array($json[self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT])) ? $json[self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $type->setDefaultValueMarkdown($value);
                } else if (is_array($value)) {
                    $type->setDefaultValueMarkdown(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $type->setDefaultValueMarkdown(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDefaultValueMarkdown(new FHIRMarkdown($ext));
            } else {
                $type->setDefaultValueMarkdown(new FHIRMarkdown(null));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_OID]) || isset($json[self::FIELD_DEFAULT_VALUE_OID_EXT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_OID, $json) || array_key_exists(self::FIELD_DEFAULT_VALUE_OID_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_OID] ?? null;
            $ext = (isset($json[self::FIELD_DEFAULT_VALUE_OID_EXT]) && is_array($json[self::FIELD_DEFAULT_VALUE_OID_EXT])) ? $json[self::FIELD_DEFAULT_VALUE_OID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIROid) {
                    $type->setDefaultValueOid($value);
                } else if (is_array($value)) {
                    $type->setDefaultValueOid(new FHIROid(array_merge($ext, $value)));
                } else {
                    $type->setDefaultValueOid(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDefaultValueOid(new FHIROid($ext));
            } else {
                $type->setDefaultValueOid(new FHIROid(null));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_POSITIVE_INT]) || isset($json[self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_POSITIVE_INT, $json) || array_key_exists(self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] ?? null;
            $ext = (isset($json[self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT]) && is_array($json[self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT])) ? $json[self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $type->setDefaultValuePositiveInt($value);
                } else if (is_array($value)) {
                    $type->setDefaultValuePositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $type->setDefaultValuePositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDefaultValuePositiveInt(new FHIRPositiveInt($ext));
            } else {
                $type->setDefaultValuePositiveInt(new FHIRPositiveInt(null));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_STRING]) || isset($json[self::FIELD_DEFAULT_VALUE_STRING_EXT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_STRING, $json) || array_key_exists(self::FIELD_DEFAULT_VALUE_STRING_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_STRING] ?? null;
            $ext = (isset($json[self::FIELD_DEFAULT_VALUE_STRING_EXT]) && is_array($json[self::FIELD_DEFAULT_VALUE_STRING_EXT])) ? $json[self::FIELD_DEFAULT_VALUE_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setDefaultValueString($value);
                } else if (is_array($value)) {
                    $type->setDefaultValueString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setDefaultValueString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDefaultValueString(new FHIRString($ext));
            } else {
                $type->setDefaultValueString(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_TIME]) || isset($json[self::FIELD_DEFAULT_VALUE_TIME_EXT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_TIME, $json) || array_key_exists(self::FIELD_DEFAULT_VALUE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_TIME] ?? null;
            $ext = (isset($json[self::FIELD_DEFAULT_VALUE_TIME_EXT]) && is_array($json[self::FIELD_DEFAULT_VALUE_TIME_EXT])) ? $json[self::FIELD_DEFAULT_VALUE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $type->setDefaultValueTime($value);
                } else if (is_array($value)) {
                    $type->setDefaultValueTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $type->setDefaultValueTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDefaultValueTime(new FHIRTime($ext));
            } else {
                $type->setDefaultValueTime(new FHIRTime(null));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT]) || isset($json[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_UNSIGNED_INT, $json) || array_key_exists(self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] ?? null;
            $ext = (isset($json[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT]) && is_array($json[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT])) ? $json[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $type->setDefaultValueUnsignedInt($value);
                } else if (is_array($value)) {
                    $type->setDefaultValueUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $type->setDefaultValueUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDefaultValueUnsignedInt(new FHIRUnsignedInt($ext));
            } else {
                $type->setDefaultValueUnsignedInt(new FHIRUnsignedInt(null));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_URI]) || isset($json[self::FIELD_DEFAULT_VALUE_URI_EXT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_URI, $json) || array_key_exists(self::FIELD_DEFAULT_VALUE_URI_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_URI] ?? null;
            $ext = (isset($json[self::FIELD_DEFAULT_VALUE_URI_EXT]) && is_array($json[self::FIELD_DEFAULT_VALUE_URI_EXT])) ? $json[self::FIELD_DEFAULT_VALUE_URI_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $type->setDefaultValueUri($value);
                } else if (is_array($value)) {
                    $type->setDefaultValueUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $type->setDefaultValueUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDefaultValueUri(new FHIRUri($ext));
            } else {
                $type->setDefaultValueUri(new FHIRUri(null));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_URL]) || isset($json[self::FIELD_DEFAULT_VALUE_URL_EXT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_URL, $json) || array_key_exists(self::FIELD_DEFAULT_VALUE_URL_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_URL] ?? null;
            $ext = (isset($json[self::FIELD_DEFAULT_VALUE_URL_EXT]) && is_array($json[self::FIELD_DEFAULT_VALUE_URL_EXT])) ? $json[self::FIELD_DEFAULT_VALUE_URL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUrl) {
                    $type->setDefaultValueUrl($value);
                } else if (is_array($value)) {
                    $type->setDefaultValueUrl(new FHIRUrl(array_merge($ext, $value)));
                } else {
                    $type->setDefaultValueUrl(new FHIRUrl([FHIRUrl::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDefaultValueUrl(new FHIRUrl($ext));
            } else {
                $type->setDefaultValueUrl(new FHIRUrl(null));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_UUID]) || isset($json[self::FIELD_DEFAULT_VALUE_UUID_EXT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_UUID, $json) || array_key_exists(self::FIELD_DEFAULT_VALUE_UUID_EXT, $json)) {
            $value = $json[self::FIELD_DEFAULT_VALUE_UUID] ?? null;
            $ext = (isset($json[self::FIELD_DEFAULT_VALUE_UUID_EXT]) && is_array($json[self::FIELD_DEFAULT_VALUE_UUID_EXT])) ? $json[self::FIELD_DEFAULT_VALUE_UUID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUuid) {
                    $type->setDefaultValueUuid($value);
                } else if (is_array($value)) {
                    $type->setDefaultValueUuid(new FHIRUuid(array_merge($ext, $value)));
                } else {
                    $type->setDefaultValueUuid(new FHIRUuid([FHIRUuid::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDefaultValueUuid(new FHIRUuid($ext));
            } else {
                $type->setDefaultValueUuid(new FHIRUuid(null));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_ADDRESS]) || array_key_exists(self::FIELD_DEFAULT_VALUE_ADDRESS, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_ADDRESS] instanceof FHIRAddress) {
                $type->setDefaultValueAddress($json[self::FIELD_DEFAULT_VALUE_ADDRESS]);
            } else {
                $type->setDefaultValueAddress(new FHIRAddress($json[self::FIELD_DEFAULT_VALUE_ADDRESS]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_AGE]) || array_key_exists(self::FIELD_DEFAULT_VALUE_AGE, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_AGE] instanceof FHIRAge) {
                $type->setDefaultValueAge($json[self::FIELD_DEFAULT_VALUE_AGE]);
            } else {
                $type->setDefaultValueAge(new FHIRAge($json[self::FIELD_DEFAULT_VALUE_AGE]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_ANNOTATION]) || array_key_exists(self::FIELD_DEFAULT_VALUE_ANNOTATION, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_ANNOTATION] instanceof FHIRAnnotation) {
                $type->setDefaultValueAnnotation($json[self::FIELD_DEFAULT_VALUE_ANNOTATION]);
            } else {
                $type->setDefaultValueAnnotation(new FHIRAnnotation($json[self::FIELD_DEFAULT_VALUE_ANNOTATION]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_ATTACHMENT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_ATTACHMENT, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_ATTACHMENT] instanceof FHIRAttachment) {
                $type->setDefaultValueAttachment($json[self::FIELD_DEFAULT_VALUE_ATTACHMENT]);
            } else {
                $type->setDefaultValueAttachment(new FHIRAttachment($json[self::FIELD_DEFAULT_VALUE_ATTACHMENT]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $type->setDefaultValueCodeableConcept($json[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT]);
            } else {
                $type->setDefaultValueCodeableConcept(new FHIRCodeableConcept($json[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_CODING]) || array_key_exists(self::FIELD_DEFAULT_VALUE_CODING, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_CODING] instanceof FHIRCoding) {
                $type->setDefaultValueCoding($json[self::FIELD_DEFAULT_VALUE_CODING]);
            } else {
                $type->setDefaultValueCoding(new FHIRCoding($json[self::FIELD_DEFAULT_VALUE_CODING]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_CONTACT_POINT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_CONTACT_POINT, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_CONTACT_POINT] instanceof FHIRContactPoint) {
                $type->setDefaultValueContactPoint($json[self::FIELD_DEFAULT_VALUE_CONTACT_POINT]);
            } else {
                $type->setDefaultValueContactPoint(new FHIRContactPoint($json[self::FIELD_DEFAULT_VALUE_CONTACT_POINT]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_COUNT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_COUNT, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_COUNT] instanceof FHIRCount) {
                $type->setDefaultValueCount($json[self::FIELD_DEFAULT_VALUE_COUNT]);
            } else {
                $type->setDefaultValueCount(new FHIRCount($json[self::FIELD_DEFAULT_VALUE_COUNT]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_DISTANCE]) || array_key_exists(self::FIELD_DEFAULT_VALUE_DISTANCE, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_DISTANCE] instanceof FHIRDistance) {
                $type->setDefaultValueDistance($json[self::FIELD_DEFAULT_VALUE_DISTANCE]);
            } else {
                $type->setDefaultValueDistance(new FHIRDistance($json[self::FIELD_DEFAULT_VALUE_DISTANCE]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_DURATION]) || array_key_exists(self::FIELD_DEFAULT_VALUE_DURATION, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_DURATION] instanceof FHIRDuration) {
                $type->setDefaultValueDuration($json[self::FIELD_DEFAULT_VALUE_DURATION]);
            } else {
                $type->setDefaultValueDuration(new FHIRDuration($json[self::FIELD_DEFAULT_VALUE_DURATION]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_HUMAN_NAME]) || array_key_exists(self::FIELD_DEFAULT_VALUE_HUMAN_NAME, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_HUMAN_NAME] instanceof FHIRHumanName) {
                $type->setDefaultValueHumanName($json[self::FIELD_DEFAULT_VALUE_HUMAN_NAME]);
            } else {
                $type->setDefaultValueHumanName(new FHIRHumanName($json[self::FIELD_DEFAULT_VALUE_HUMAN_NAME]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_IDENTIFIER]) || array_key_exists(self::FIELD_DEFAULT_VALUE_IDENTIFIER, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_IDENTIFIER] instanceof FHIRIdentifier) {
                $type->setDefaultValueIdentifier($json[self::FIELD_DEFAULT_VALUE_IDENTIFIER]);
            } else {
                $type->setDefaultValueIdentifier(new FHIRIdentifier($json[self::FIELD_DEFAULT_VALUE_IDENTIFIER]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_MONEY]) || array_key_exists(self::FIELD_DEFAULT_VALUE_MONEY, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_MONEY] instanceof FHIRMoney) {
                $type->setDefaultValueMoney($json[self::FIELD_DEFAULT_VALUE_MONEY]);
            } else {
                $type->setDefaultValueMoney(new FHIRMoney($json[self::FIELD_DEFAULT_VALUE_MONEY]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_PERIOD]) || array_key_exists(self::FIELD_DEFAULT_VALUE_PERIOD, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_PERIOD] instanceof FHIRPeriod) {
                $type->setDefaultValuePeriod($json[self::FIELD_DEFAULT_VALUE_PERIOD]);
            } else {
                $type->setDefaultValuePeriod(new FHIRPeriod($json[self::FIELD_DEFAULT_VALUE_PERIOD]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_QUANTITY]) || array_key_exists(self::FIELD_DEFAULT_VALUE_QUANTITY, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_QUANTITY] instanceof FHIRQuantity) {
                $type->setDefaultValueQuantity($json[self::FIELD_DEFAULT_VALUE_QUANTITY]);
            } else {
                $type->setDefaultValueQuantity(new FHIRQuantity($json[self::FIELD_DEFAULT_VALUE_QUANTITY]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_RANGE]) || array_key_exists(self::FIELD_DEFAULT_VALUE_RANGE, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_RANGE] instanceof FHIRRange) {
                $type->setDefaultValueRange($json[self::FIELD_DEFAULT_VALUE_RANGE]);
            } else {
                $type->setDefaultValueRange(new FHIRRange($json[self::FIELD_DEFAULT_VALUE_RANGE]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_RATIO]) || array_key_exists(self::FIELD_DEFAULT_VALUE_RATIO, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_RATIO] instanceof FHIRRatio) {
                $type->setDefaultValueRatio($json[self::FIELD_DEFAULT_VALUE_RATIO]);
            } else {
                $type->setDefaultValueRatio(new FHIRRatio($json[self::FIELD_DEFAULT_VALUE_RATIO]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_REFERENCE]) || array_key_exists(self::FIELD_DEFAULT_VALUE_REFERENCE, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_REFERENCE] instanceof FHIRReference) {
                $type->setDefaultValueReference($json[self::FIELD_DEFAULT_VALUE_REFERENCE]);
            } else {
                $type->setDefaultValueReference(new FHIRReference($json[self::FIELD_DEFAULT_VALUE_REFERENCE]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA]) || array_key_exists(self::FIELD_DEFAULT_VALUE_SAMPLED_DATA, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA] instanceof FHIRSampledData) {
                $type->setDefaultValueSampledData($json[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA]);
            } else {
                $type->setDefaultValueSampledData(new FHIRSampledData($json[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_SIGNATURE]) || array_key_exists(self::FIELD_DEFAULT_VALUE_SIGNATURE, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_SIGNATURE] instanceof FHIRSignature) {
                $type->setDefaultValueSignature($json[self::FIELD_DEFAULT_VALUE_SIGNATURE]);
            } else {
                $type->setDefaultValueSignature(new FHIRSignature($json[self::FIELD_DEFAULT_VALUE_SIGNATURE]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_TIMING]) || array_key_exists(self::FIELD_DEFAULT_VALUE_TIMING, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_TIMING] instanceof FHIRTiming) {
                $type->setDefaultValueTiming($json[self::FIELD_DEFAULT_VALUE_TIMING]);
            } else {
                $type->setDefaultValueTiming(new FHIRTiming($json[self::FIELD_DEFAULT_VALUE_TIMING]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL]) || array_key_exists(self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL] instanceof FHIRContactDetail) {
                $type->setDefaultValueContactDetail($json[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL]);
            } else {
                $type->setDefaultValueContactDetail(new FHIRContactDetail($json[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR]) || array_key_exists(self::FIELD_DEFAULT_VALUE_CONTRIBUTOR, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR] instanceof FHIRContributor) {
                $type->setDefaultValueContributor($json[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR]);
            } else {
                $type->setDefaultValueContributor(new FHIRContributor($json[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT] instanceof FHIRDataRequirement) {
                $type->setDefaultValueDataRequirement($json[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT]);
            } else {
                $type->setDefaultValueDataRequirement(new FHIRDataRequirement($json[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_EXPRESSION]) || array_key_exists(self::FIELD_DEFAULT_VALUE_EXPRESSION, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_EXPRESSION] instanceof FHIRExpression) {
                $type->setDefaultValueExpression($json[self::FIELD_DEFAULT_VALUE_EXPRESSION]);
            } else {
                $type->setDefaultValueExpression(new FHIRExpression($json[self::FIELD_DEFAULT_VALUE_EXPRESSION]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION]) || array_key_exists(self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION] instanceof FHIRParameterDefinition) {
                $type->setDefaultValueParameterDefinition($json[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION]);
            } else {
                $type->setDefaultValueParameterDefinition(new FHIRParameterDefinition($json[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT] instanceof FHIRRelatedArtifact) {
                $type->setDefaultValueRelatedArtifact($json[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT]);
            } else {
                $type->setDefaultValueRelatedArtifact(new FHIRRelatedArtifact($json[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION]) || array_key_exists(self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION] instanceof FHIRTriggerDefinition) {
                $type->setDefaultValueTriggerDefinition($json[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION]);
            } else {
                $type->setDefaultValueTriggerDefinition(new FHIRTriggerDefinition($json[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT]) || array_key_exists(self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT] instanceof FHIRUsageContext) {
                $type->setDefaultValueUsageContext($json[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT]);
            } else {
                $type->setDefaultValueUsageContext(new FHIRUsageContext($json[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_DOSAGE]) || array_key_exists(self::FIELD_DEFAULT_VALUE_DOSAGE, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_DOSAGE] instanceof FHIRDosage) {
                $type->setDefaultValueDosage($json[self::FIELD_DEFAULT_VALUE_DOSAGE]);
            } else {
                $type->setDefaultValueDosage(new FHIRDosage($json[self::FIELD_DEFAULT_VALUE_DOSAGE]));
            }
        }
        if (isset($json[self::FIELD_DEFAULT_VALUE_META]) || array_key_exists(self::FIELD_DEFAULT_VALUE_META, $json)) {
            if ($json[self::FIELD_DEFAULT_VALUE_META] instanceof FHIRMeta) {
                $type->setDefaultValueMeta($json[self::FIELD_DEFAULT_VALUE_META]);
            } else {
                $type->setDefaultValueMeta(new FHIRMeta($json[self::FIELD_DEFAULT_VALUE_META]));
            }
        }
        if (isset($json[self::FIELD_ELEMENT]) || isset($json[self::FIELD_ELEMENT_EXT]) || array_key_exists(self::FIELD_ELEMENT, $json) || array_key_exists(self::FIELD_ELEMENT_EXT, $json)) {
            $value = $json[self::FIELD_ELEMENT] ?? null;
            $ext = (isset($json[self::FIELD_ELEMENT_EXT]) && is_array($json[self::FIELD_ELEMENT_EXT])) ? $json[self::FIELD_ELEMENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setElement($value);
                } else if (is_array($value)) {
                    $type->setElement(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setElement(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setElement(new FHIRString($ext));
            } else {
                $type->setElement(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_LIST_MODE]) || isset($json[self::FIELD_LIST_MODE_EXT]) || array_key_exists(self::FIELD_LIST_MODE, $json) || array_key_exists(self::FIELD_LIST_MODE_EXT, $json)) {
            $value = $json[self::FIELD_LIST_MODE] ?? null;
            $ext = (isset($json[self::FIELD_LIST_MODE_EXT]) && is_array($json[self::FIELD_LIST_MODE_EXT])) ? $json[self::FIELD_LIST_MODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRStructureMapSourceListMode) {
                    $type->setListMode($value);
                } else if (is_array($value)) {
                    $type->setListMode(new FHIRStructureMapSourceListMode(array_merge($ext, $value)));
                } else {
                    $type->setListMode(new FHIRStructureMapSourceListMode([FHIRStructureMapSourceListMode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setListMode(new FHIRStructureMapSourceListMode($ext));
            } else {
                $type->setListMode(new FHIRStructureMapSourceListMode(null));
            }
        }
        if (isset($json[self::FIELD_VARIABLE]) || isset($json[self::FIELD_VARIABLE_EXT]) || array_key_exists(self::FIELD_VARIABLE, $json) || array_key_exists(self::FIELD_VARIABLE_EXT, $json)) {
            $value = $json[self::FIELD_VARIABLE] ?? null;
            $ext = (isset($json[self::FIELD_VARIABLE_EXT]) && is_array($json[self::FIELD_VARIABLE_EXT])) ? $json[self::FIELD_VARIABLE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $type->setVariable($value);
                } else if (is_array($value)) {
                    $type->setVariable(new FHIRId(array_merge($ext, $value)));
                } else {
                    $type->setVariable(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setVariable(new FHIRId($ext));
            } else {
                $type->setVariable(new FHIRId(null));
            }
        }
        if (isset($json[self::FIELD_CONDITION]) || isset($json[self::FIELD_CONDITION_EXT]) || array_key_exists(self::FIELD_CONDITION, $json) || array_key_exists(self::FIELD_CONDITION_EXT, $json)) {
            $value = $json[self::FIELD_CONDITION] ?? null;
            $ext = (isset($json[self::FIELD_CONDITION_EXT]) && is_array($json[self::FIELD_CONDITION_EXT])) ? $json[self::FIELD_CONDITION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setCondition($value);
                } else if (is_array($value)) {
                    $type->setCondition(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setCondition(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setCondition(new FHIRString($ext));
            } else {
                $type->setCondition(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_CHECK]) || isset($json[self::FIELD_CHECK_EXT]) || array_key_exists(self::FIELD_CHECK, $json) || array_key_exists(self::FIELD_CHECK_EXT, $json)) {
            $value = $json[self::FIELD_CHECK] ?? null;
            $ext = (isset($json[self::FIELD_CHECK_EXT]) && is_array($json[self::FIELD_CHECK_EXT])) ? $json[self::FIELD_CHECK_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setCheck($value);
                } else if (is_array($value)) {
                    $type->setCheck(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setCheck(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setCheck(new FHIRString($ext));
            } else {
                $type->setCheck(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_LOG_MESSAGE]) || isset($json[self::FIELD_LOG_MESSAGE_EXT]) || array_key_exists(self::FIELD_LOG_MESSAGE, $json) || array_key_exists(self::FIELD_LOG_MESSAGE_EXT, $json)) {
            $value = $json[self::FIELD_LOG_MESSAGE] ?? null;
            $ext = (isset($json[self::FIELD_LOG_MESSAGE_EXT]) && is_array($json[self::FIELD_LOG_MESSAGE_EXT])) ? $json[self::FIELD_LOG_MESSAGE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setLogMessage($value);
                } else if (is_array($value)) {
                    $type->setLogMessage(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setLogMessage(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setLogMessage(new FHIRString($ext));
            } else {
                $type->setLogMessage(new FHIRString(null));
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
        if (isset($this->context)) {
            if (null !== ($val = $this->context->getValue())) {
                $out->context = $val;
            }
            $ext = $this->context->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_context = $ext;
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
        if (isset($this->type)) {
            if (null !== ($val = $this->type->getValue())) {
                $out->type = $val;
            }
            $ext = $this->type->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_type = $ext;
            }
        }
        if (isset($this->defaultValueBase64Binary)) {
            if (null !== ($val = $this->defaultValueBase64Binary->getValue())) {
                $out->defaultValueBase64Binary = $val;
            }
            $ext = $this->defaultValueBase64Binary->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_defaultValueBase64Binary = $ext;
            }
        }
        if (isset($this->defaultValueBoolean)) {
            if (null !== ($val = $this->defaultValueBoolean->getValue())) {
                $out->defaultValueBoolean = $val;
            }
            $ext = $this->defaultValueBoolean->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_defaultValueBoolean = $ext;
            }
        }
        if (isset($this->defaultValueCanonical)) {
            if (null !== ($val = $this->defaultValueCanonical->getValue())) {
                $out->defaultValueCanonical = $val;
            }
            $ext = $this->defaultValueCanonical->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_defaultValueCanonical = $ext;
            }
        }
        if (isset($this->defaultValueCode)) {
            if (null !== ($val = $this->defaultValueCode->getValue())) {
                $out->defaultValueCode = $val;
            }
            $ext = $this->defaultValueCode->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_defaultValueCode = $ext;
            }
        }
        if (isset($this->defaultValueDate)) {
            if (null !== ($val = $this->defaultValueDate->getValue())) {
                $out->defaultValueDate = $val;
            }
            $ext = $this->defaultValueDate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_defaultValueDate = $ext;
            }
        }
        if (isset($this->defaultValueDateTime)) {
            if (null !== ($val = $this->defaultValueDateTime->getValue())) {
                $out->defaultValueDateTime = $val;
            }
            $ext = $this->defaultValueDateTime->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_defaultValueDateTime = $ext;
            }
        }
        if (isset($this->defaultValueDecimal)) {
            if (null !== ($val = $this->defaultValueDecimal->getValue())) {
                $out->defaultValueDecimal = $val;
            }
            $ext = $this->defaultValueDecimal->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_defaultValueDecimal = $ext;
            }
        }
        if (isset($this->defaultValueId)) {
            if (null !== ($val = $this->defaultValueId->getValue())) {
                $out->defaultValueId = $val;
            }
            $ext = $this->defaultValueId->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_defaultValueId = $ext;
            }
        }
        if (isset($this->defaultValueInstant)) {
            if (null !== ($val = $this->defaultValueInstant->getValue())) {
                $out->defaultValueInstant = $val;
            }
            $ext = $this->defaultValueInstant->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_defaultValueInstant = $ext;
            }
        }
        if (isset($this->defaultValueInteger)) {
            if (null !== ($val = $this->defaultValueInteger->getValue())) {
                $out->defaultValueInteger = $val;
            }
            $ext = $this->defaultValueInteger->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_defaultValueInteger = $ext;
            }
        }
        if (isset($this->defaultValueMarkdown)) {
            if (null !== ($val = $this->defaultValueMarkdown->getValue())) {
                $out->defaultValueMarkdown = $val;
            }
            $ext = $this->defaultValueMarkdown->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_defaultValueMarkdown = $ext;
            }
        }
        if (isset($this->defaultValueOid)) {
            if (null !== ($val = $this->defaultValueOid->getValue())) {
                $out->defaultValueOid = $val;
            }
            $ext = $this->defaultValueOid->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_defaultValueOid = $ext;
            }
        }
        if (isset($this->defaultValuePositiveInt)) {
            if (null !== ($val = $this->defaultValuePositiveInt->getValue())) {
                $out->defaultValuePositiveInt = $val;
            }
            $ext = $this->defaultValuePositiveInt->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_defaultValuePositiveInt = $ext;
            }
        }
        if (isset($this->defaultValueString)) {
            if (null !== ($val = $this->defaultValueString->getValue())) {
                $out->defaultValueString = $val;
            }
            $ext = $this->defaultValueString->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_defaultValueString = $ext;
            }
        }
        if (isset($this->defaultValueTime)) {
            if (null !== ($val = $this->defaultValueTime->getValue())) {
                $out->defaultValueTime = $val;
            }
            $ext = $this->defaultValueTime->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_defaultValueTime = $ext;
            }
        }
        if (isset($this->defaultValueUnsignedInt)) {
            if (null !== ($val = $this->defaultValueUnsignedInt->getValue())) {
                $out->defaultValueUnsignedInt = $val;
            }
            $ext = $this->defaultValueUnsignedInt->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_defaultValueUnsignedInt = $ext;
            }
        }
        if (isset($this->defaultValueUri)) {
            if (null !== ($val = $this->defaultValueUri->getValue())) {
                $out->defaultValueUri = $val;
            }
            $ext = $this->defaultValueUri->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_defaultValueUri = $ext;
            }
        }
        if (isset($this->defaultValueUrl)) {
            if (null !== ($val = $this->defaultValueUrl->getValue())) {
                $out->defaultValueUrl = $val;
            }
            $ext = $this->defaultValueUrl->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_defaultValueUrl = $ext;
            }
        }
        if (isset($this->defaultValueUuid)) {
            if (null !== ($val = $this->defaultValueUuid->getValue())) {
                $out->defaultValueUuid = $val;
            }
            $ext = $this->defaultValueUuid->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
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
            $ext = $this->element->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_element = $ext;
            }
        }
        if (isset($this->listMode)) {
            if (null !== ($val = $this->listMode->getValue())) {
                $out->listMode = $val;
            }
            $ext = $this->listMode->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_listMode = $ext;
            }
        }
        if (isset($this->variable)) {
            if (null !== ($val = $this->variable->getValue())) {
                $out->variable = $val;
            }
            $ext = $this->variable->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_variable = $ext;
            }
        }
        if (isset($this->condition)) {
            if (null !== ($val = $this->condition->getValue())) {
                $out->condition = $val;
            }
            $ext = $this->condition->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_condition = $ext;
            }
        }
        if (isset($this->check)) {
            if (null !== ($val = $this->check->getValue())) {
                $out->check = $val;
            }
            $ext = $this->check->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_check = $ext;
            }
        }
        if (isset($this->logMessage)) {
            if (null !== ($val = $this->logMessage->getValue())) {
                $out->logMessage = $val;
            }
            $ext = $this->logMessage->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_logMessage = $ext;
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