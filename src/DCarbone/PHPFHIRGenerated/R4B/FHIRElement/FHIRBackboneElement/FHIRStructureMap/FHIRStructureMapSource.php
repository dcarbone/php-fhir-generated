<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRStructureMap;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:25+0000
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4B\FHIRBase64BinaryPrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRAddress;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRDosage;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBase64Binary;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRContactDetail;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRContactPoint;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRContributor;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDataRequirement;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRExpression;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRHumanName;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRMoney;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIROid;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRParameterDefinition;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity\FHIRAge;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity\FHIRCount;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity\FHIRDistance;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRRatio;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRRelatedArtifact;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRSampledData;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRSignature;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRStructureMapSourceListMode;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRTime;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRTriggerDefinition;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUrl;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUsageContext;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUuid;
use DCarbone\PHPFHIRGenerated\R4B\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIROidPrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIRTimePrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIRUnsignedIntPrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIRUrlPrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIRUuidPrimitive;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlWriter;

/**
 * A Map of relationships between 2 structures that can be used to transform data.
 *
 * Class FHIRStructureMapSource
 * @package \DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRStructureMap
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
    const FIELD_DEFAULT_VALUE_CANONICAL = 'defaultValueCanonical';
    const FIELD_DEFAULT_VALUE_CANONICAL_EXT = '_defaultValueCanonical';
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
    const FIELD_DEFAULT_VALUE_URL = 'defaultValueUrl';
    const FIELD_DEFAULT_VALUE_URL_EXT = '_defaultValueUrl';
    const FIELD_DEFAULT_VALUE_UUID = 'defaultValueUuid';
    const FIELD_DEFAULT_VALUE_UUID_EXT = '_defaultValueUuid';
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
    const FIELD_DEFAULT_VALUE_CONTACT_DETAIL = 'defaultValueContactDetail';
    const FIELD_DEFAULT_VALUE_CONTRIBUTOR = 'defaultValueContributor';
    const FIELD_DEFAULT_VALUE_DATA_REQUIREMENT = 'defaultValueDataRequirement';
    const FIELD_DEFAULT_VALUE_EXPRESSION = 'defaultValueExpression';
    const FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION = 'defaultValueParameterDefinition';
    const FIELD_DEFAULT_VALUE_RELATED_ARTIFACT = 'defaultValueRelatedArtifact';
    const FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION = 'defaultValueTriggerDefinition';
    const FIELD_DEFAULT_VALUE_USAGE_CONTEXT = 'defaultValueUsageContext';
    const FIELD_DEFAULT_VALUE_DOSAGE = 'defaultValueDosage';
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
    const FIELD_LOG_MESSAGE = 'logMessage';
    const FIELD_LOG_MESSAGE_EXT = '_logMessage';

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Type or variable this rule applies to.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRId
     */
    protected null|FHIRId $context = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified minimum cardinality for the element. This is optional; if present, it
     * acts an implicit check on the input content.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $min = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified maximum cardinality for the element - a number or a "*". This is
     * optional; if present, it acts an implicit check on the input content (* just
     * serves as documentation; it's the default value).
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString
     */
    protected null|FHIRString $max = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified type for the element. This works as a condition on the mapping - use
     * for polymorphic elements.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString
     */
    protected null|FHIRString $type = null;
    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBase64Binary
     */
    protected null|FHIRBase64Binary $defaultValueBase64Binary = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $defaultValueBoolean = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCanonical
     */
    protected null|FHIRCanonical $defaultValueCanonical = null;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCode
     */
    protected null|FHIRCode $defaultValueCode = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDate
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $defaultValueDateTime = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDecimal
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRId
     */
    protected null|FHIRId $defaultValueId = null;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRInstant
     */
    protected null|FHIRInstant $defaultValueInstant = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $defaultValueInteger = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $defaultValueMarkdown = null;
    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIROid
     */
    protected null|FHIROid $defaultValueOid = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $defaultValuePositiveInt = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString
     */
    protected null|FHIRString $defaultValueString = null;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRTime
     */
    protected null|FHIRTime $defaultValueTime = null;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUnsignedInt
     */
    protected null|FHIRUnsignedInt $defaultValueUnsignedInt = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $defaultValueUri = null;
    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUrl
     */
    protected null|FHIRUrl $defaultValueUrl = null;
    /**
     * A UUID, represented as a URI
     * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUuid
     */
    protected null|FHIRUuid $defaultValueUuid = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRAddress
     */
    protected null|FHIRAddress $defaultValueAddress = null;
    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity\FHIRAge
     */
    protected null|FHIRAge $defaultValueAge = null;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRAnnotation
     */
    protected null|FHIRAnnotation $defaultValueAnnotation = null;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRAttachment
     */
    protected null|FHIRAttachment $defaultValueAttachment = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $defaultValueCodeableConcept = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCoding
     */
    protected null|FHIRCoding $defaultValueCoding = null;
    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRContactPoint
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity\FHIRCount
     */
    protected null|FHIRCount $defaultValueCount = null;
    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity\FHIRDistance
     */
    protected null|FHIRDistance $defaultValueDistance = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected null|FHIRDuration $defaultValueDuration = null;
    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRHumanName
     */
    protected null|FHIRHumanName $defaultValueHumanName = null;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRIdentifier
     */
    protected null|FHIRIdentifier $defaultValueIdentifier = null;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRMoney
     */
    protected null|FHIRMoney $defaultValueMoney = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRPeriod
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity
     */
    protected null|FHIRQuantity $defaultValueQuantity = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRRange
     */
    protected null|FHIRRange $defaultValueRange = null;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRRatio
     */
    protected null|FHIRRatio $defaultValueRatio = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $defaultValueReference = null;
    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRSampledData
     */
    protected null|FHIRSampledData $defaultValueSampledData = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRSignature
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    protected null|FHIRTiming $defaultValueTiming = null;
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRContactDetail
     */
    protected null|FHIRContactDetail $defaultValueContactDetail = null;
    /**
     * A contributor to the content of a knowledge asset, including authors, editors,
     * reviewers, and endorsers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRContributor
     */
    protected null|FHIRContributor $defaultValueContributor = null;
    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDataRequirement
     */
    protected null|FHIRDataRequirement $defaultValueDataRequirement = null;
    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRExpression
     */
    protected null|FHIRExpression $defaultValueExpression = null;
    /**
     * The parameters to the module. This collection specifies both the input and
     * output parameters. Input parameters are provided by the caller as part of the
     * $evaluate operation. Output parameters are included in the GuidanceResponse.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRParameterDefinition
     */
    protected null|FHIRParameterDefinition $defaultValueParameterDefinition = null;
    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRRelatedArtifact
     */
    protected null|FHIRRelatedArtifact $defaultValueRelatedArtifact = null;
    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRTriggerDefinition
     */
    protected null|FHIRTriggerDefinition $defaultValueTriggerDefinition = null;
    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUsageContext
     */
    protected null|FHIRUsageContext $defaultValueUsageContext = null;
    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRDosage
     */
    protected null|FHIRDosage $defaultValueDosage = null;
    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content might not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRMeta
     */
    protected null|FHIRMeta $defaultValueMeta = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Optional field for this source.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString
     */
    protected null|FHIRString $element = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How to handle the list mode for this element.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRStructureMapSourceListMode
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRId
     */
    protected null|FHIRId $variable = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * FHIRPath expression - must be true or the rule does not apply.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString
     */
    protected null|FHIRString $condition = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * FHIRPath expression - must be true or the mapping engine throws an error instead
     * of completing.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString
     */
    protected null|FHIRString $check = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A FHIRPath expression which specifies a message to put in the transform log when
     * content matching the source rule is found.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString
     */
    protected null|FHIRString $logMessage = null;

    /**
     * Validation map for fields in type StructureMap.Source
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_CONTEXT => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

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
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_CANONICAL, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_CANONICAL_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_CANONICAL] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_CANONICAL_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_CANONICAL_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_CANONICAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setDefaultValueCanonical($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueCanonical(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueCanonical(new FHIRCanonical($ext));
            } else {
                $this->setDefaultValueCanonical(new FHIRCanonical(null));
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
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_URL, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_URL_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_URL] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_URL_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_URL_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_URL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUrl) {
                    $this->setDefaultValueUrl($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueUrl(new FHIRUrl(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueUrl(new FHIRUrl([FHIRUrl::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueUrl(new FHIRUrl($ext));
            } else {
                $this->setDefaultValueUrl(new FHIRUrl(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_UUID, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_UUID_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_UUID] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_UUID_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_UUID_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_UUID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUuid) {
                    $this->setDefaultValueUuid($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueUuid(new FHIRUuid(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueUuid(new FHIRUuid([FHIRUuid::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueUuid(new FHIRUuid($ext));
            } else {
                $this->setDefaultValueUuid(new FHIRUuid(null));
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
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL] instanceof FHIRContactDetail) {
                $this->setDefaultValueContactDetail($data[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL]);
            } else {
                $this->setDefaultValueContactDetail(new FHIRContactDetail($data[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_CONTRIBUTOR, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR] instanceof FHIRContributor) {
                $this->setDefaultValueContributor($data[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR]);
            } else {
                $this->setDefaultValueContributor(new FHIRContributor($data[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT] instanceof FHIRDataRequirement) {
                $this->setDefaultValueDataRequirement($data[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT]);
            } else {
                $this->setDefaultValueDataRequirement(new FHIRDataRequirement($data[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_EXPRESSION, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_EXPRESSION] instanceof FHIRExpression) {
                $this->setDefaultValueExpression($data[self::FIELD_DEFAULT_VALUE_EXPRESSION]);
            } else {
                $this->setDefaultValueExpression(new FHIRExpression($data[self::FIELD_DEFAULT_VALUE_EXPRESSION]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION] instanceof FHIRParameterDefinition) {
                $this->setDefaultValueParameterDefinition($data[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION]);
            } else {
                $this->setDefaultValueParameterDefinition(new FHIRParameterDefinition($data[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT] instanceof FHIRRelatedArtifact) {
                $this->setDefaultValueRelatedArtifact($data[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT]);
            } else {
                $this->setDefaultValueRelatedArtifact(new FHIRRelatedArtifact($data[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION] instanceof FHIRTriggerDefinition) {
                $this->setDefaultValueTriggerDefinition($data[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION]);
            } else {
                $this->setDefaultValueTriggerDefinition(new FHIRTriggerDefinition($data[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT] instanceof FHIRUsageContext) {
                $this->setDefaultValueUsageContext($data[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT]);
            } else {
                $this->setDefaultValueUsageContext(new FHIRUsageContext($data[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_DOSAGE, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_DOSAGE] instanceof FHIRDosage) {
                $this->setDefaultValueDosage($data[self::FIELD_DEFAULT_VALUE_DOSAGE]);
            } else {
                $this->setDefaultValueDosage(new FHIRDosage($data[self::FIELD_DEFAULT_VALUE_DOSAGE]));
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
        if (array_key_exists(self::FIELD_LOG_MESSAGE, $data) || array_key_exists(self::FIELD_LOG_MESSAGE_EXT, $data)) {
            $value = $data[self::FIELD_LOG_MESSAGE] ?? null;
            $ext = (isset($data[self::FIELD_LOG_MESSAGE_EXT]) && is_array($data[self::FIELD_LOG_MESSAGE_EXT])) ? $data[self::FIELD_LOG_MESSAGE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setLogMessage($value);
                } else if (is_array($value)) {
                    $this->setLogMessage(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setLogMessage(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLogMessage(new FHIRString($ext));
            } else {
                $this->setLogMessage(new FHIRString(null));
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRId
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4B\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRId $context
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setContext(null|string|FHIRIdPrimitive|FHIRId $context = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $context && !($context instanceof FHIRId)) {
            $context = new FHIRId($context);
        }
        $this->_trackValueSet($this->context, $context);
        if (!isset($this->_xmlLocations[self::FIELD_CONTEXT])) {
            $this->_xmlLocations[self::FIELD_CONTEXT] = [];
        }
        $this->_xmlLocations[self::FIELD_CONTEXT][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRInteger
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R4B\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRInteger $min
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMin(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $min = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $min && !($min instanceof FHIRInteger)) {
            $min = new FHIRInteger($min);
        }
        $this->_trackValueSet($this->min, $min);
        if (!isset($this->_xmlLocations[self::FIELD_MIN])) {
            $this->_xmlLocations[self::FIELD_MIN] = [];
        }
        $this->_xmlLocations[self::FIELD_MIN][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString
     */
    public function getMax(): null|FHIRString
    {
        return $this->max;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4B\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString $max
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMax(null|string|FHIRStringPrimitive|FHIRString $max = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $max && !($max instanceof FHIRString)) {
            $max = new FHIRString($max);
        }
        $this->_trackValueSet($this->max, $max);
        if (!isset($this->_xmlLocations[self::FIELD_MAX])) {
            $this->_xmlLocations[self::FIELD_MAX] = [];
        }
        $this->_xmlLocations[self::FIELD_MAX][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString
     */
    public function getType(): null|FHIRString
    {
        return $this->type;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified type for the element. This works as a condition on the mapping - use
     * for polymorphic elements.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4B\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString $type
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setType(null|string|FHIRStringPrimitive|FHIRString $type = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $type && !($type instanceof FHIRString)) {
            $type = new FHIRString($type);
        }
        $this->_trackValueSet($this->type, $type);
        if (!isset($this->_xmlLocations[self::FIELD_TYPE])) {
            $this->_xmlLocations[self::FIELD_TYPE] = [];
        }
        $this->_xmlLocations[self::FIELD_TYPE][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBase64Binary
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4B\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBase64Binary $defaultValueBase64Binary
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueBase64Binary(null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $defaultValueBase64Binary = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $defaultValueBase64Binary && !($defaultValueBase64Binary instanceof FHIRBase64Binary)) {
            $defaultValueBase64Binary = new FHIRBase64Binary($defaultValueBase64Binary);
        }
        $this->_trackValueSet($this->defaultValueBase64Binary, $defaultValueBase64Binary);
        if (!isset($this->_xmlLocations[self::FIELD_DEFAULT_VALUE_BASE_64BINARY])) {
            $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] = [];
        }
        $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_BASE_64BINARY][0] = $xmlLocation;
        $this->defaultValueBase64Binary = $defaultValueBase64Binary;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBoolean
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
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R4B\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBoolean $defaultValueBoolean
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $defaultValueBoolean = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $defaultValueBoolean && !($defaultValueBoolean instanceof FHIRBoolean)) {
            $defaultValueBoolean = new FHIRBoolean($defaultValueBoolean);
        }
        $this->_trackValueSet($this->defaultValueBoolean, $defaultValueBoolean);
        if (!isset($this->_xmlLocations[self::FIELD_DEFAULT_VALUE_BOOLEAN])) {
            $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_BOOLEAN] = [];
        }
        $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_BOOLEAN][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCanonical
     */
    public function getDefaultValueCanonical(): null|FHIRCanonical
    {
        return $this->defaultValueCanonical;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4B\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCanonical $defaultValueCanonical
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueCanonical(null|string|FHIRCanonicalPrimitive|FHIRCanonical $defaultValueCanonical = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $defaultValueCanonical && !($defaultValueCanonical instanceof FHIRCanonical)) {
            $defaultValueCanonical = new FHIRCanonical($defaultValueCanonical);
        }
        $this->_trackValueSet($this->defaultValueCanonical, $defaultValueCanonical);
        if (!isset($this->_xmlLocations[self::FIELD_DEFAULT_VALUE_CANONICAL])) {
            $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_CANONICAL] = [];
        }
        $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_CANONICAL][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCode
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4B\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCode $defaultValueCode
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueCode(null|string|FHIRCodePrimitive|FHIRCode $defaultValueCode = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $defaultValueCode && !($defaultValueCode instanceof FHIRCode)) {
            $defaultValueCode = new FHIRCode($defaultValueCode);
        }
        $this->_trackValueSet($this->defaultValueCode, $defaultValueCode);
        if (!isset($this->_xmlLocations[self::FIELD_DEFAULT_VALUE_CODE])) {
            $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_CODE] = [];
        }
        $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_CODE][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDate
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R4B\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDate $defaultValueDate
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $defaultValueDate = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $defaultValueDate && !($defaultValueDate instanceof FHIRDate)) {
            $defaultValueDate = new FHIRDate($defaultValueDate);
        }
        $this->_trackValueSet($this->defaultValueDate, $defaultValueDate);
        if (!isset($this->_xmlLocations[self::FIELD_DEFAULT_VALUE_DATE])) {
            $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_DATE] = [];
        }
        $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_DATE][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDateTime
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R4B\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDateTime $defaultValueDateTime
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $defaultValueDateTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $defaultValueDateTime && !($defaultValueDateTime instanceof FHIRDateTime)) {
            $defaultValueDateTime = new FHIRDateTime($defaultValueDateTime);
        }
        $this->_trackValueSet($this->defaultValueDateTime, $defaultValueDateTime);
        if (!isset($this->_xmlLocations[self::FIELD_DEFAULT_VALUE_DATE_TIME])) {
            $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_DATE_TIME] = [];
        }
        $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_DATE_TIME][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDecimal
     */
    public function getDefaultValueDecimal(): null|FHIRDecimal
    {
        return $this->defaultValueDecimal;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\R4B\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDecimal $defaultValueDecimal
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueDecimal(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $defaultValueDecimal = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $defaultValueDecimal && !($defaultValueDecimal instanceof FHIRDecimal)) {
            $defaultValueDecimal = new FHIRDecimal($defaultValueDecimal);
        }
        $this->_trackValueSet($this->defaultValueDecimal, $defaultValueDecimal);
        if (!isset($this->_xmlLocations[self::FIELD_DEFAULT_VALUE_DECIMAL])) {
            $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_DECIMAL] = [];
        }
        $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_DECIMAL][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRId
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4B\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRId $defaultValueId
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueId(null|string|FHIRIdPrimitive|FHIRId $defaultValueId = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $defaultValueId && !($defaultValueId instanceof FHIRId)) {
            $defaultValueId = new FHIRId($defaultValueId);
        }
        $this->_trackValueSet($this->defaultValueId, $defaultValueId);
        if (!isset($this->_xmlLocations[self::FIELD_DEFAULT_VALUE_ID])) {
            $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_ID] = [];
        }
        $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_ID][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRInstant
     */
    public function getDefaultValueInstant(): null|FHIRInstant
    {
        return $this->defaultValueInstant;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R4B\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRInstant $defaultValueInstant
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueInstant(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $defaultValueInstant = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $defaultValueInstant && !($defaultValueInstant instanceof FHIRInstant)) {
            $defaultValueInstant = new FHIRInstant($defaultValueInstant);
        }
        $this->_trackValueSet($this->defaultValueInstant, $defaultValueInstant);
        if (!isset($this->_xmlLocations[self::FIELD_DEFAULT_VALUE_INSTANT])) {
            $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_INSTANT] = [];
        }
        $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_INSTANT][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRInteger
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R4B\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRInteger $defaultValueInteger
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueInteger(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $defaultValueInteger = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $defaultValueInteger && !($defaultValueInteger instanceof FHIRInteger)) {
            $defaultValueInteger = new FHIRInteger($defaultValueInteger);
        }
        $this->_trackValueSet($this->defaultValueInteger, $defaultValueInteger);
        if (!isset($this->_xmlLocations[self::FIELD_DEFAULT_VALUE_INTEGER])) {
            $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_INTEGER] = [];
        }
        $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_INTEGER][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRMarkdown
     */
    public function getDefaultValueMarkdown(): null|FHIRMarkdown
    {
        return $this->defaultValueMarkdown;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4B\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRMarkdown $defaultValueMarkdown
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueMarkdown(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $defaultValueMarkdown = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $defaultValueMarkdown && !($defaultValueMarkdown instanceof FHIRMarkdown)) {
            $defaultValueMarkdown = new FHIRMarkdown($defaultValueMarkdown);
        }
        $this->_trackValueSet($this->defaultValueMarkdown, $defaultValueMarkdown);
        if (!isset($this->_xmlLocations[self::FIELD_DEFAULT_VALUE_MARKDOWN])) {
            $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_MARKDOWN] = [];
        }
        $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_MARKDOWN][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIROid
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4B\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIROid $defaultValueOid
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueOid(null|string|FHIROidPrimitive|FHIROid $defaultValueOid = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $defaultValueOid && !($defaultValueOid instanceof FHIROid)) {
            $defaultValueOid = new FHIROid($defaultValueOid);
        }
        $this->_trackValueSet($this->defaultValueOid, $defaultValueOid);
        if (!isset($this->_xmlLocations[self::FIELD_DEFAULT_VALUE_OID])) {
            $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_OID] = [];
        }
        $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_OID][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRPositiveInt
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R4B\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRPositiveInt $defaultValuePositiveInt
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValuePositiveInt(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $defaultValuePositiveInt = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $defaultValuePositiveInt && !($defaultValuePositiveInt instanceof FHIRPositiveInt)) {
            $defaultValuePositiveInt = new FHIRPositiveInt($defaultValuePositiveInt);
        }
        $this->_trackValueSet($this->defaultValuePositiveInt, $defaultValuePositiveInt);
        if (!isset($this->_xmlLocations[self::FIELD_DEFAULT_VALUE_POSITIVE_INT])) {
            $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] = [];
        }
        $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_POSITIVE_INT][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString
     */
    public function getDefaultValueString(): null|FHIRString
    {
        return $this->defaultValueString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4B\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString $defaultValueString
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueString(null|string|FHIRStringPrimitive|FHIRString $defaultValueString = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $defaultValueString && !($defaultValueString instanceof FHIRString)) {
            $defaultValueString = new FHIRString($defaultValueString);
        }
        $this->_trackValueSet($this->defaultValueString, $defaultValueString);
        if (!isset($this->_xmlLocations[self::FIELD_DEFAULT_VALUE_STRING])) {
            $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_STRING] = [];
        }
        $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_STRING][0] = $xmlLocation;
        $this->defaultValueString = $defaultValueString;
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRTime
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R4B\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRTime $defaultValueTime
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueTime(null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $defaultValueTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $defaultValueTime && !($defaultValueTime instanceof FHIRTime)) {
            $defaultValueTime = new FHIRTime($defaultValueTime);
        }
        $this->_trackValueSet($this->defaultValueTime, $defaultValueTime);
        if (!isset($this->_xmlLocations[self::FIELD_DEFAULT_VALUE_TIME])) {
            $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_TIME] = [];
        }
        $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_TIME][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUnsignedInt
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R4B\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUnsignedInt $defaultValueUnsignedInt
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueUnsignedInt(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $defaultValueUnsignedInt = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $defaultValueUnsignedInt && !($defaultValueUnsignedInt instanceof FHIRUnsignedInt)) {
            $defaultValueUnsignedInt = new FHIRUnsignedInt($defaultValueUnsignedInt);
        }
        $this->_trackValueSet($this->defaultValueUnsignedInt, $defaultValueUnsignedInt);
        if (!isset($this->_xmlLocations[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT])) {
            $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] = [];
        }
        $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUri
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4B\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUri $defaultValueUri
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueUri(null|string|FHIRUriPrimitive|FHIRUri $defaultValueUri = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $defaultValueUri && !($defaultValueUri instanceof FHIRUri)) {
            $defaultValueUri = new FHIRUri($defaultValueUri);
        }
        $this->_trackValueSet($this->defaultValueUri, $defaultValueUri);
        if (!isset($this->_xmlLocations[self::FIELD_DEFAULT_VALUE_URI])) {
            $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_URI] = [];
        }
        $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_URI][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUrl
     */
    public function getDefaultValueUrl(): null|FHIRUrl
    {
        return $this->defaultValueUrl;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4B\FHIRUrlPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUrl $defaultValueUrl
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueUrl(null|string|FHIRUrlPrimitive|FHIRUrl $defaultValueUrl = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $defaultValueUrl && !($defaultValueUrl instanceof FHIRUrl)) {
            $defaultValueUrl = new FHIRUrl($defaultValueUrl);
        }
        $this->_trackValueSet($this->defaultValueUrl, $defaultValueUrl);
        if (!isset($this->_xmlLocations[self::FIELD_DEFAULT_VALUE_URL])) {
            $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_URL] = [];
        }
        $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_URL][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUuid
     */
    public function getDefaultValueUuid(): null|FHIRUuid
    {
        return $this->defaultValueUuid;
    }

    /**
     * A UUID, represented as a URI
     * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4B\FHIRUuidPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUuid $defaultValueUuid
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueUuid(null|string|FHIRUuidPrimitive|FHIRUuid $defaultValueUuid = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $defaultValueUuid && !($defaultValueUuid instanceof FHIRUuid)) {
            $defaultValueUuid = new FHIRUuid($defaultValueUuid);
        }
        $this->_trackValueSet($this->defaultValueUuid, $defaultValueUuid);
        if (!isset($this->_xmlLocations[self::FIELD_DEFAULT_VALUE_UUID])) {
            $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_UUID] = [];
        }
        $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_UUID][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRAddress
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRAddress $defaultValueAddress
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity\FHIRAge
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity\FHIRAge $defaultValueAge
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRAnnotation
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRAnnotation $defaultValueAnnotation
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRAttachment
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRAttachment $defaultValueAttachment
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept $defaultValueCodeableConcept
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCoding
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCoding $defaultValueCoding
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRContactPoint
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRContactPoint $defaultValueContactPoint
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity\FHIRCount
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity\FHIRCount $defaultValueCount
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity\FHIRDistance
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity\FHIRDistance $defaultValueDistance
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity\FHIRDuration
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity\FHIRDuration $defaultValueDuration
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRHumanName
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRHumanName $defaultValueHumanName
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRIdentifier
     */
    public function getDefaultValueIdentifier(): null|FHIRIdentifier
    {
        return $this->defaultValueIdentifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRIdentifier $defaultValueIdentifier
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRMoney
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRMoney $defaultValueMoney
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRPeriod
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRPeriod $defaultValuePeriod
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity $defaultValueQuantity
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRRange
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRRange $defaultValueRange
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRRatio
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRRatio $defaultValueRatio
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRReference $defaultValueReference
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRSampledData
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRSampledData $defaultValueSampledData
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRSignature
     */
    public function getDefaultValueSignature(): null|FHIRSignature
    {
        return $this->defaultValueSignature;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRSignature $defaultValueSignature
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRTiming
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRTiming $defaultValueTiming
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
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRContactDetail
     */
    public function getDefaultValueContactDetail(): null|FHIRContactDetail
    {
        return $this->defaultValueContactDetail;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRContactDetail $defaultValueContactDetail
     * @return static
     */
    public function setDefaultValueContactDetail(null|FHIRContactDetail $defaultValueContactDetail = null): self
    {
        if (null === $defaultValueContactDetail) {
            $defaultValueContactDetail = new FHIRContactDetail();
        }
        $this->_trackValueSet($this->defaultValueContactDetail, $defaultValueContactDetail);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRContributor
     */
    public function getDefaultValueContributor(): null|FHIRContributor
    {
        return $this->defaultValueContributor;
    }

    /**
     * A contributor to the content of a knowledge asset, including authors, editors,
     * reviewers, and endorsers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRContributor $defaultValueContributor
     * @return static
     */
    public function setDefaultValueContributor(null|FHIRContributor $defaultValueContributor = null): self
    {
        if (null === $defaultValueContributor) {
            $defaultValueContributor = new FHIRContributor();
        }
        $this->_trackValueSet($this->defaultValueContributor, $defaultValueContributor);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDataRequirement
     */
    public function getDefaultValueDataRequirement(): null|FHIRDataRequirement
    {
        return $this->defaultValueDataRequirement;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDataRequirement $defaultValueDataRequirement
     * @return static
     */
    public function setDefaultValueDataRequirement(null|FHIRDataRequirement $defaultValueDataRequirement = null): self
    {
        if (null === $defaultValueDataRequirement) {
            $defaultValueDataRequirement = new FHIRDataRequirement();
        }
        $this->_trackValueSet($this->defaultValueDataRequirement, $defaultValueDataRequirement);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRExpression
     */
    public function getDefaultValueExpression(): null|FHIRExpression
    {
        return $this->defaultValueExpression;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRExpression $defaultValueExpression
     * @return static
     */
    public function setDefaultValueExpression(null|FHIRExpression $defaultValueExpression = null): self
    {
        if (null === $defaultValueExpression) {
            $defaultValueExpression = new FHIRExpression();
        }
        $this->_trackValueSet($this->defaultValueExpression, $defaultValueExpression);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRParameterDefinition
     */
    public function getDefaultValueParameterDefinition(): null|FHIRParameterDefinition
    {
        return $this->defaultValueParameterDefinition;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRParameterDefinition $defaultValueParameterDefinition
     * @return static
     */
    public function setDefaultValueParameterDefinition(null|FHIRParameterDefinition $defaultValueParameterDefinition = null): self
    {
        if (null === $defaultValueParameterDefinition) {
            $defaultValueParameterDefinition = new FHIRParameterDefinition();
        }
        $this->_trackValueSet($this->defaultValueParameterDefinition, $defaultValueParameterDefinition);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRRelatedArtifact
     */
    public function getDefaultValueRelatedArtifact(): null|FHIRRelatedArtifact
    {
        return $this->defaultValueRelatedArtifact;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRRelatedArtifact $defaultValueRelatedArtifact
     * @return static
     */
    public function setDefaultValueRelatedArtifact(null|FHIRRelatedArtifact $defaultValueRelatedArtifact = null): self
    {
        if (null === $defaultValueRelatedArtifact) {
            $defaultValueRelatedArtifact = new FHIRRelatedArtifact();
        }
        $this->_trackValueSet($this->defaultValueRelatedArtifact, $defaultValueRelatedArtifact);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRTriggerDefinition
     */
    public function getDefaultValueTriggerDefinition(): null|FHIRTriggerDefinition
    {
        return $this->defaultValueTriggerDefinition;
    }

    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRTriggerDefinition $defaultValueTriggerDefinition
     * @return static
     */
    public function setDefaultValueTriggerDefinition(null|FHIRTriggerDefinition $defaultValueTriggerDefinition = null): self
    {
        if (null === $defaultValueTriggerDefinition) {
            $defaultValueTriggerDefinition = new FHIRTriggerDefinition();
        }
        $this->_trackValueSet($this->defaultValueTriggerDefinition, $defaultValueTriggerDefinition);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUsageContext
     */
    public function getDefaultValueUsageContext(): null|FHIRUsageContext
    {
        return $this->defaultValueUsageContext;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUsageContext $defaultValueUsageContext
     * @return static
     */
    public function setDefaultValueUsageContext(null|FHIRUsageContext $defaultValueUsageContext = null): self
    {
        if (null === $defaultValueUsageContext) {
            $defaultValueUsageContext = new FHIRUsageContext();
        }
        $this->_trackValueSet($this->defaultValueUsageContext, $defaultValueUsageContext);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRDosage
     */
    public function getDefaultValueDosage(): null|FHIRDosage
    {
        return $this->defaultValueDosage;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRDosage $defaultValueDosage
     * @return static
     */
    public function setDefaultValueDosage(null|FHIRDosage $defaultValueDosage = null): self
    {
        if (null === $defaultValueDosage) {
            $defaultValueDosage = new FHIRDosage();
        }
        $this->_trackValueSet($this->defaultValueDosage, $defaultValueDosage);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRMeta
     */
    public function getDefaultValueMeta(): null|FHIRMeta
    {
        return $this->defaultValueMeta;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRMeta $defaultValueMeta
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
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Optional field for this source.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString
     */
    public function getElement(): null|FHIRString
    {
        return $this->element;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Optional field for this source.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4B\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString $element
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setElement(null|string|FHIRStringPrimitive|FHIRString $element = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $element && !($element instanceof FHIRString)) {
            $element = new FHIRString($element);
        }
        $this->_trackValueSet($this->element, $element);
        if (!isset($this->_xmlLocations[self::FIELD_ELEMENT])) {
            $this->_xmlLocations[self::FIELD_ELEMENT] = [];
        }
        $this->_xmlLocations[self::FIELD_ELEMENT][0] = $xmlLocation;
        $this->element = $element;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How to handle the list mode for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRStructureMapSourceListMode
     */
    public function getListMode(): null|FHIRStructureMapSourceListMode
    {
        return $this->listMode;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How to handle the list mode for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRStructureMapSourceListMode $listMode
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRId
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4B\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRId $variable
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setVariable(null|string|FHIRIdPrimitive|FHIRId $variable = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $variable && !($variable instanceof FHIRId)) {
            $variable = new FHIRId($variable);
        }
        $this->_trackValueSet($this->variable, $variable);
        if (!isset($this->_xmlLocations[self::FIELD_VARIABLE])) {
            $this->_xmlLocations[self::FIELD_VARIABLE] = [];
        }
        $this->_xmlLocations[self::FIELD_VARIABLE][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString
     */
    public function getCondition(): null|FHIRString
    {
        return $this->condition;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * FHIRPath expression - must be true or the rule does not apply.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4B\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString $condition
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setCondition(null|string|FHIRStringPrimitive|FHIRString $condition = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $condition && !($condition instanceof FHIRString)) {
            $condition = new FHIRString($condition);
        }
        $this->_trackValueSet($this->condition, $condition);
        if (!isset($this->_xmlLocations[self::FIELD_CONDITION])) {
            $this->_xmlLocations[self::FIELD_CONDITION] = [];
        }
        $this->_xmlLocations[self::FIELD_CONDITION][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString
     */
    public function getCheck(): null|FHIRString
    {
        return $this->check;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * FHIRPath expression - must be true or the mapping engine throws an error instead
     * of completing.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4B\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString $check
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setCheck(null|string|FHIRStringPrimitive|FHIRString $check = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $check && !($check instanceof FHIRString)) {
            $check = new FHIRString($check);
        }
        $this->_trackValueSet($this->check, $check);
        if (!isset($this->_xmlLocations[self::FIELD_CHECK])) {
            $this->_xmlLocations[self::FIELD_CHECK] = [];
        }
        $this->_xmlLocations[self::FIELD_CHECK][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString
     */
    public function getLogMessage(): null|FHIRString
    {
        return $this->logMessage;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A FHIRPath expression which specifies a message to put in the transform log when
     * content matching the source rule is found.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4B\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString $logMessage
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setLogMessage(null|string|FHIRStringPrimitive|FHIRString $logMessage = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $logMessage && !($logMessage instanceof FHIRString)) {
            $logMessage = new FHIRString($logMessage);
        }
        $this->_trackValueSet($this->logMessage, $logMessage);
        if (!isset($this->_xmlLocations[self::FIELD_LOG_MESSAGE])) {
            $this->_xmlLocations[self::FIELD_LOG_MESSAGE] = [];
        }
        $this->_xmlLocations[self::FIELD_LOG_MESSAGE][0] = $xmlLocation;
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
        if (null !== ($v = $this->getDefaultValueCanonical())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_CANONICAL] = $fieldErrs;
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
        if (null !== ($v = $this->getDefaultValueUrl())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_URL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueUuid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_UUID] = $fieldErrs;
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
        if (null !== ($v = $this->getDefaultValueContactDetail())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueContributor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueDataRequirement())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueExpression())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_EXPRESSION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueParameterDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueRelatedArtifact())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueTriggerDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueUsageContext())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueDosage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_DOSAGE] = $fieldErrs;
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
        if (null !== ($v = $this->getLogMessage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOG_MESSAGE] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_CANONICAL])) {
            $v = $this->getDefaultValueCanonical();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_CANONICAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_CANONICAL, $rule, $constraint, $v);
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
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_URL])) {
            $v = $this->getDefaultValueUrl();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_URL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_URL, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_UUID, $rule, $constraint, $v);
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
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL])) {
            $v = $this->getDefaultValueContactDetail();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_CONTRIBUTOR, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_EXPRESSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_DEFAULT_VALUE_DOSAGE, $rule, $constraint, $v);
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
        if (isset($validationRules[self::FIELD_LOG_MESSAGE])) {
            $v = $this->getLogMessage();
            foreach($validationRules[self::FIELD_LOG_MESSAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE, self::FIELD_LOG_MESSAGE, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
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
            } elseif (self::FIELD_DEFAULT_VALUE_CANONICAL === $childName) {
                $type->setDefaultValueCanonical(FHIRCanonical::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
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
            } elseif (self::FIELD_DEFAULT_VALUE_URL === $childName) {
                $type->setDefaultValueUrl(FHIRUrl::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_UUID === $childName) {
                $type->setDefaultValueUuid(FHIRUuid::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
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
            } elseif (self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL === $childName) {
                $type->setDefaultValueContactDetail(FHIRContactDetail::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_CONTRIBUTOR === $childName) {
                $type->setDefaultValueContributor(FHIRContributor::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT === $childName) {
                $type->setDefaultValueDataRequirement(FHIRDataRequirement::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_EXPRESSION === $childName) {
                $type->setDefaultValueExpression(FHIRExpression::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION === $childName) {
                $type->setDefaultValueParameterDefinition(FHIRParameterDefinition::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT === $childName) {
                $type->setDefaultValueRelatedArtifact(FHIRRelatedArtifact::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION === $childName) {
                $type->setDefaultValueTriggerDefinition(FHIRTriggerDefinition::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT === $childName) {
                $type->setDefaultValueUsageContext(FHIRUsageContext::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_DOSAGE === $childName) {
                $type->setDefaultValueDosage(FHIRDosage::xmlUnserialize($n, null, $config));
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
            } elseif (self::FIELD_LOG_MESSAGE === $childName) {
                $type->setLogMessage(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
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
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_CANONICAL])) {
            $pt = $type->getDefaultValueCanonical();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_CANONICAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueCanonical((string)$attributes[self::FIELD_DEFAULT_VALUE_CANONICAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_URL])) {
            $pt = $type->getDefaultValueUrl();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_URL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueUrl((string)$attributes[self::FIELD_DEFAULT_VALUE_URL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_UUID])) {
            $pt = $type->getDefaultValueUuid();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_UUID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueUuid((string)$attributes[self::FIELD_DEFAULT_VALUE_UUID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_LOG_MESSAGE])) {
            $pt = $type->getLogMessage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LOG_MESSAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLogMessage((string)$attributes[self::FIELD_LOG_MESSAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlWriter
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
        $locs = $this->_xmlLocations[self::FIELD_CONTEXT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getContext())) {
            $xw->writeAttribute(self::FIELD_CONTEXT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_MIN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMin())) {
            $xw->writeAttribute(self::FIELD_MIN, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_MAX] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMax())) {
            $xw->writeAttribute(self::FIELD_MAX, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_TYPE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getType())) {
            $xw->writeAttribute(self::FIELD_TYPE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueBase64Binary())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_BASE_64BINARY, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_BOOLEAN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueBoolean())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_BOOLEAN, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_CANONICAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueCanonical())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_CANONICAL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_CODE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueCode())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_CODE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueDate())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_DATE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueDateTime())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_DATE_TIME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_DECIMAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueDecimal())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_DECIMAL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueId())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_ID, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_INSTANT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueInstant())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_INSTANT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_INTEGER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueInteger())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_INTEGER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_MARKDOWN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueMarkdown())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_MARKDOWN, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_OID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueOid())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_OID, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValuePositiveInt())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_POSITIVE_INT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueString())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_STRING, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueTime())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_TIME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueUnsignedInt())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_UNSIGNED_INT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_URI] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueUri())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_URI, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_URL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueUrl())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_URL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_UUID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueUuid())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_UUID, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_ELEMENT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getElement())) {
            $xw->writeAttribute(self::FIELD_ELEMENT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_VARIABLE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getVariable())) {
            $xw->writeAttribute(self::FIELD_VARIABLE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_CONDITION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getCondition())) {
            $xw->writeAttribute(self::FIELD_CONDITION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_CHECK] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getCheck())) {
            $xw->writeAttribute(self::FIELD_CHECK, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_LOG_MESSAGE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getLogMessage())) {
            $xw->writeAttribute(self::FIELD_LOG_MESSAGE, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_xmlLocations[self::FIELD_CONTEXT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getContext())) {
            $xw->startElement(self::FIELD_CONTEXT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_MIN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMin())) {
            $xw->startElement(self::FIELD_MIN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_MAX] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMax())) {
            $xw->startElement(self::FIELD_MAX);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_TYPE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueBase64Binary())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_BASE_64BINARY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_BOOLEAN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueBoolean())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_BOOLEAN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_CANONICAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueCanonical())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_CANONICAL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_CODE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueCode())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_CODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueDate())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_DATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueDateTime())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_DATE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_DECIMAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueDecimal())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_DECIMAL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueId())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_ID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_INSTANT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueInstant())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_INSTANT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_INTEGER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueInteger())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_INTEGER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_MARKDOWN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueMarkdown())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_MARKDOWN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_OID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueOid())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_OID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValuePositiveInt())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_POSITIVE_INT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueString())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_STRING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueTime())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueUnsignedInt())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_UNSIGNED_INT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_URI] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueUri())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_URI);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_URL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueUrl())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_URL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFAULT_VALUE_UUID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueUuid())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_UUID);
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
        if (null !== ($v = $this->getDefaultValueContactDetail())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueContributor())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_CONTRIBUTOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueDataRequirement())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueExpression())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_EXPRESSION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueParameterDefinition())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueRelatedArtifact())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueTriggerDefinition())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueUsageContext())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueDosage())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_DOSAGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueMeta())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_META);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_ELEMENT] ?? [];
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
        $locs = $this->_xmlLocations[self::FIELD_VARIABLE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getVariable())) {
            $xw->startElement(self::FIELD_VARIABLE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_CONDITION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getCondition())) {
            $xw->startElement(self::FIELD_CONDITION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_CHECK] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getCheck())) {
            $xw->startElement(self::FIELD_CHECK);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_LOG_MESSAGE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getLogMessage())) {
            $xw->startElement(self::FIELD_LOG_MESSAGE);
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
        if (null !== ($v = $this->getDefaultValueCanonical())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_CANONICAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCanonical::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_CANONICAL_EXT} = $ext;
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
        if (null !== ($v = $this->getDefaultValueUrl())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_URL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUrl::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_URL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueUuid())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_UUID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUuid::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_UUID_EXT} = $ext;
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
        if (null !== ($v = $this->getDefaultValueContactDetail())) {
            $out->{self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL} = $v;
        }
        if (null !== ($v = $this->getDefaultValueContributor())) {
            $out->{self::FIELD_DEFAULT_VALUE_CONTRIBUTOR} = $v;
        }
        if (null !== ($v = $this->getDefaultValueDataRequirement())) {
            $out->{self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT} = $v;
        }
        if (null !== ($v = $this->getDefaultValueExpression())) {
            $out->{self::FIELD_DEFAULT_VALUE_EXPRESSION} = $v;
        }
        if (null !== ($v = $this->getDefaultValueParameterDefinition())) {
            $out->{self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION} = $v;
        }
        if (null !== ($v = $this->getDefaultValueRelatedArtifact())) {
            $out->{self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT} = $v;
        }
        if (null !== ($v = $this->getDefaultValueTriggerDefinition())) {
            $out->{self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION} = $v;
        }
        if (null !== ($v = $this->getDefaultValueUsageContext())) {
            $out->{self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT} = $v;
        }
        if (null !== ($v = $this->getDefaultValueDosage())) {
            $out->{self::FIELD_DEFAULT_VALUE_DOSAGE} = $v;
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
        if (null !== ($v = $this->getLogMessage())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LOG_MESSAGE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LOG_MESSAGE_EXT} = $ext;
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