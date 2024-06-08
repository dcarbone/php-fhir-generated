<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRElementDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 8th, 2024 03:16+0000
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R5\FHIRBase64BinaryPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBase64Binary;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAddress;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAvailability;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRDataRequirement;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtendedContactDetail;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRHumanName;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRParameterDefinition;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRCount;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDistance;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRSampledData;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRSignature;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRTriggerDefinition;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRUsageContext;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger64;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIROid;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRTime;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUrl;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUuid;
use DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRInteger64Primitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIROidPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRTimePrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRUnsignedIntPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRUrlPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRUuidPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRElementDefinitionExample
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRElementDefinition
 */
class FHIRElementDefinitionExample extends FHIRBackboneType
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE;

    const FIELD_LABEL = 'label';
    const FIELD_LABEL_EXT = '_label';
    const FIELD_VALUE_BASE_64BINARY = 'valueBase64Binary';
    const FIELD_VALUE_BASE_64BINARY_EXT = '_valueBase64Binary';
    const FIELD_VALUE_BOOLEAN = 'valueBoolean';
    const FIELD_VALUE_BOOLEAN_EXT = '_valueBoolean';
    const FIELD_VALUE_CANONICAL = 'valueCanonical';
    const FIELD_VALUE_CANONICAL_EXT = '_valueCanonical';
    const FIELD_VALUE_CODE = 'valueCode';
    const FIELD_VALUE_CODE_EXT = '_valueCode';
    const FIELD_VALUE_DATE = 'valueDate';
    const FIELD_VALUE_DATE_EXT = '_valueDate';
    const FIELD_VALUE_DATE_TIME = 'valueDateTime';
    const FIELD_VALUE_DATE_TIME_EXT = '_valueDateTime';
    const FIELD_VALUE_DECIMAL = 'valueDecimal';
    const FIELD_VALUE_DECIMAL_EXT = '_valueDecimal';
    const FIELD_VALUE_ID = 'valueId';
    const FIELD_VALUE_ID_EXT = '_valueId';
    const FIELD_VALUE_INSTANT = 'valueInstant';
    const FIELD_VALUE_INSTANT_EXT = '_valueInstant';
    const FIELD_VALUE_INTEGER = 'valueInteger';
    const FIELD_VALUE_INTEGER_EXT = '_valueInteger';
    const FIELD_VALUE_INTEGER_64 = 'valueInteger64';
    const FIELD_VALUE_INTEGER_64_EXT = '_valueInteger64';
    const FIELD_VALUE_MARKDOWN = 'valueMarkdown';
    const FIELD_VALUE_MARKDOWN_EXT = '_valueMarkdown';
    const FIELD_VALUE_OID = 'valueOid';
    const FIELD_VALUE_OID_EXT = '_valueOid';
    const FIELD_VALUE_POSITIVE_INT = 'valuePositiveInt';
    const FIELD_VALUE_POSITIVE_INT_EXT = '_valuePositiveInt';
    const FIELD_VALUE_STRING = 'valueString';
    const FIELD_VALUE_STRING_EXT = '_valueString';
    const FIELD_VALUE_TIME = 'valueTime';
    const FIELD_VALUE_TIME_EXT = '_valueTime';
    const FIELD_VALUE_UNSIGNED_INT = 'valueUnsignedInt';
    const FIELD_VALUE_UNSIGNED_INT_EXT = '_valueUnsignedInt';
    const FIELD_VALUE_URI = 'valueUri';
    const FIELD_VALUE_URI_EXT = '_valueUri';
    const FIELD_VALUE_URL = 'valueUrl';
    const FIELD_VALUE_URL_EXT = '_valueUrl';
    const FIELD_VALUE_UUID = 'valueUuid';
    const FIELD_VALUE_UUID_EXT = '_valueUuid';
    const FIELD_VALUE_ADDRESS = 'valueAddress';
    const FIELD_VALUE_AGE = 'valueAge';
    const FIELD_VALUE_ANNOTATION = 'valueAnnotation';
    const FIELD_VALUE_ATTACHMENT = 'valueAttachment';
    const FIELD_VALUE_CODEABLE_CONCEPT = 'valueCodeableConcept';
    const FIELD_VALUE_CODEABLE_REFERENCE = 'valueCodeableReference';
    const FIELD_VALUE_CODING = 'valueCoding';
    const FIELD_VALUE_CONTACT_POINT = 'valueContactPoint';
    const FIELD_VALUE_COUNT = 'valueCount';
    const FIELD_VALUE_DISTANCE = 'valueDistance';
    const FIELD_VALUE_DURATION = 'valueDuration';
    const FIELD_VALUE_HUMAN_NAME = 'valueHumanName';
    const FIELD_VALUE_IDENTIFIER = 'valueIdentifier';
    const FIELD_VALUE_MONEY = 'valueMoney';
    const FIELD_VALUE_PERIOD = 'valuePeriod';
    const FIELD_VALUE_QUANTITY = 'valueQuantity';
    const FIELD_VALUE_RANGE = 'valueRange';
    const FIELD_VALUE_RATIO = 'valueRatio';
    const FIELD_VALUE_RATIO_RANGE = 'valueRatioRange';
    const FIELD_VALUE_REFERENCE = 'valueReference';
    const FIELD_VALUE_SAMPLED_DATA = 'valueSampledData';
    const FIELD_VALUE_SIGNATURE = 'valueSignature';
    const FIELD_VALUE_TIMING = 'valueTiming';
    const FIELD_VALUE_CONTACT_DETAIL = 'valueContactDetail';
    const FIELD_VALUE_DATA_REQUIREMENT = 'valueDataRequirement';
    const FIELD_VALUE_EXPRESSION = 'valueExpression';
    const FIELD_VALUE_PARAMETER_DEFINITION = 'valueParameterDefinition';
    const FIELD_VALUE_RELATED_ARTIFACT = 'valueRelatedArtifact';
    const FIELD_VALUE_TRIGGER_DEFINITION = 'valueTriggerDefinition';
    const FIELD_VALUE_USAGE_CONTEXT = 'valueUsageContext';
    const FIELD_VALUE_AVAILABILITY = 'valueAvailability';
    const FIELD_VALUE_EXTENDED_CONTACT_DETAIL = 'valueExtendedContactDetail';
    const FIELD_VALUE_DOSAGE = 'valueDosage';
    const FIELD_VALUE_META = 'valueMeta';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the purpose of this example among the set of examples.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $label = null;
    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBase64Binary
     */
    protected null|FHIRBase64Binary $valueBase64Binary = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $valueBoolean = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    protected null|FHIRCanonical $valueCanonical = null;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCode
     */
    protected null|FHIRCode $valueCode = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDate
     */
    protected null|FHIRDate $valueDate = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $valueDateTime = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $valueDecimal = null;
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRId
     */
    protected null|FHIRId $valueId = null;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInstant
     */
    protected null|FHIRInstant $valueInstant = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $valueInteger = null;
    /**
     * A very large whole number
     * Typically this is used for record counters (e.g. database keys)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger64
     */
    protected null|FHIRInteger64 $valueInteger64 = null;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $valueMarkdown = null;
    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIROid
     */
    protected null|FHIROid $valueOid = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $valuePositiveInt = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $valueString = null;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRTime
     */
    protected null|FHIRTime $valueTime = null;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    protected null|FHIRUnsignedInt $valueUnsignedInt = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $valueUri = null;
    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUrl
     */
    protected null|FHIRUrl $valueUrl = null;
    /**
     * A UUID, represented as a URI
     * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUuid
     */
    protected null|FHIRUuid $valueUuid = null;
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
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAddress
     */
    protected null|FHIRAddress $valueAddress = null;
    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge
     */
    protected null|FHIRAge $valueAge = null;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation
     */
    protected null|FHIRAnnotation $valueAnnotation = null;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment
     */
    protected null|FHIRAttachment $valueAttachment = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $valueCodeableConcept = null;
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference
     */
    protected null|FHIRCodeableReference $valueCodeableReference = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    protected null|FHIRCoding $valueCoding = null;
    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint
     */
    protected null|FHIRContactPoint $valueContactPoint = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRCount
     */
    protected null|FHIRCount $valueCount = null;
    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDistance
     */
    protected null|FHIRDistance $valueDistance = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration
     */
    protected null|FHIRDuration $valueDuration = null;
    /**
     * A name, normally of a human, that can be used for other living entities (e.g.
     * animals but not organizations) that have been assigned names by a human and may
     * need the use of name parts or the need for usage information.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRHumanName
     */
    protected null|FHIRHumanName $valueHumanName = null;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier
     */
    protected null|FHIRIdentifier $valueIdentifier = null;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney
     */
    protected null|FHIRMoney $valueMoney = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    protected null|FHIRPeriod $valuePeriod = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    protected null|FHIRQuantity $valueQuantity = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    protected null|FHIRRange $valueRange = null;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio
     */
    protected null|FHIRRatio $valueRatio = null;
    /**
     * A range of ratios expressed as a low and high numerator and a denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange
     */
    protected null|FHIRRatioRange $valueRatioRange = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $valueReference = null;
    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRSampledData
     */
    protected null|FHIRSampledData $valueSampledData = null;
    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRSignature
     */
    protected null|FHIRSignature $valueSignature = null;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming
     */
    protected null|FHIRTiming $valueTiming = null;
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail
     */
    protected null|FHIRContactDetail $valueContactDetail = null;
    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRDataRequirement
     */
    protected null|FHIRDataRequirement $valueDataRequirement = null;
    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression
     */
    protected null|FHIRExpression $valueExpression = null;
    /**
     * The parameters to the module. This collection specifies both the input and
     * output parameters. Input parameters are provided by the caller as part of the
     * $evaluate operation. Output parameters are included in the GuidanceResponse.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRParameterDefinition
     */
    protected null|FHIRParameterDefinition $valueParameterDefinition = null;
    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact
     */
    protected null|FHIRRelatedArtifact $valueRelatedArtifact = null;
    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRTriggerDefinition
     */
    protected null|FHIRTriggerDefinition $valueTriggerDefinition = null;
    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRUsageContext
     */
    protected null|FHIRUsageContext $valueUsageContext = null;
    /**
     * Availability data for an {item}.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAvailability
     */
    protected null|FHIRAvailability $valueAvailability = null;
    /**
     * Specifies contact information for a specific purpose over a period of time,
     * might be handled/monitored by a specific named person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtendedContactDetail
     */
    protected null|FHIRExtendedContactDetail $valueExtendedContactDetail = null;
    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage
     */
    protected null|FHIRDosage $valueDosage = null;
    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content might not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta
     */
    protected null|FHIRMeta $valueMeta = null;

    /**
     * Validation map for fields in type ElementDefinition.Example
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRElementDefinitionExample Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_LABEL, $data) || array_key_exists(self::FIELD_LABEL_EXT, $data)) {
            $value = $data[self::FIELD_LABEL] ?? null;
            $ext = (isset($data[self::FIELD_LABEL_EXT]) && is_array($data[self::FIELD_LABEL_EXT])) ? $data[self::FIELD_LABEL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setLabel($value);
                } else if (is_array($value)) {
                    $this->setLabel(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setLabel(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLabel(new FHIRString($ext));
            } else {
                $this->setLabel(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_BASE_64BINARY, $data) || array_key_exists(self::FIELD_VALUE_BASE_64BINARY_EXT, $data)) {
            $value = $data[self::FIELD_VALUE_BASE_64BINARY] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_BASE_64BINARY_EXT]) && is_array($data[self::FIELD_VALUE_BASE_64BINARY_EXT])) ? $data[self::FIELD_VALUE_BASE_64BINARY_EXT] : [];
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
            } else {
                $this->setValueBase64Binary(new FHIRBase64Binary(null));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_BOOLEAN, $data) || array_key_exists(self::FIELD_VALUE_BOOLEAN_EXT, $data)) {
            $value = $data[self::FIELD_VALUE_BOOLEAN] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_BOOLEAN_EXT]) && is_array($data[self::FIELD_VALUE_BOOLEAN_EXT])) ? $data[self::FIELD_VALUE_BOOLEAN_EXT] : [];
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
            } else {
                $this->setValueBoolean(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_CANONICAL, $data) || array_key_exists(self::FIELD_VALUE_CANONICAL_EXT, $data)) {
            $value = $data[self::FIELD_VALUE_CANONICAL] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_CANONICAL_EXT]) && is_array($data[self::FIELD_VALUE_CANONICAL_EXT])) ? $data[self::FIELD_VALUE_CANONICAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setValueCanonical($value);
                } else if (is_array($value)) {
                    $this->setValueCanonical(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setValueCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueCanonical(new FHIRCanonical($ext));
            } else {
                $this->setValueCanonical(new FHIRCanonical(null));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_CODE, $data) || array_key_exists(self::FIELD_VALUE_CODE_EXT, $data)) {
            $value = $data[self::FIELD_VALUE_CODE] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_CODE_EXT]) && is_array($data[self::FIELD_VALUE_CODE_EXT])) ? $data[self::FIELD_VALUE_CODE_EXT] : [];
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
            } else {
                $this->setValueCode(new FHIRCode(null));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_DATE, $data) || array_key_exists(self::FIELD_VALUE_DATE_EXT, $data)) {
            $value = $data[self::FIELD_VALUE_DATE] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_DATE_EXT]) && is_array($data[self::FIELD_VALUE_DATE_EXT])) ? $data[self::FIELD_VALUE_DATE_EXT] : [];
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
            } else {
                $this->setValueDate(new FHIRDate(null));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_DATE_TIME, $data) || array_key_exists(self::FIELD_VALUE_DATE_TIME_EXT, $data)) {
            $value = $data[self::FIELD_VALUE_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_DATE_TIME_EXT]) && is_array($data[self::FIELD_VALUE_DATE_TIME_EXT])) ? $data[self::FIELD_VALUE_DATE_TIME_EXT] : [];
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
            } else {
                $this->setValueDateTime(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_DECIMAL, $data) || array_key_exists(self::FIELD_VALUE_DECIMAL_EXT, $data)) {
            $value = $data[self::FIELD_VALUE_DECIMAL] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_DECIMAL_EXT]) && is_array($data[self::FIELD_VALUE_DECIMAL_EXT])) ? $data[self::FIELD_VALUE_DECIMAL_EXT] : [];
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
            } else {
                $this->setValueDecimal(new FHIRDecimal(null));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_ID, $data) || array_key_exists(self::FIELD_VALUE_ID_EXT, $data)) {
            $value = $data[self::FIELD_VALUE_ID] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_ID_EXT]) && is_array($data[self::FIELD_VALUE_ID_EXT])) ? $data[self::FIELD_VALUE_ID_EXT] : [];
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
            } else {
                $this->setValueId(new FHIRId(null));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_INSTANT, $data) || array_key_exists(self::FIELD_VALUE_INSTANT_EXT, $data)) {
            $value = $data[self::FIELD_VALUE_INSTANT] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_INSTANT_EXT]) && is_array($data[self::FIELD_VALUE_INSTANT_EXT])) ? $data[self::FIELD_VALUE_INSTANT_EXT] : [];
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
            } else {
                $this->setValueInstant(new FHIRInstant(null));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_INTEGER, $data) || array_key_exists(self::FIELD_VALUE_INTEGER_EXT, $data)) {
            $value = $data[self::FIELD_VALUE_INTEGER] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_INTEGER_EXT]) && is_array($data[self::FIELD_VALUE_INTEGER_EXT])) ? $data[self::FIELD_VALUE_INTEGER_EXT] : [];
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
            } else {
                $this->setValueInteger(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_INTEGER_64, $data) || array_key_exists(self::FIELD_VALUE_INTEGER_64_EXT, $data)) {
            $value = $data[self::FIELD_VALUE_INTEGER_64] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_INTEGER_64_EXT]) && is_array($data[self::FIELD_VALUE_INTEGER_64_EXT])) ? $data[self::FIELD_VALUE_INTEGER_64_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger64) {
                    $this->setValueInteger64($value);
                } else if (is_array($value)) {
                    $this->setValueInteger64(new FHIRInteger64(array_merge($ext, $value)));
                } else {
                    $this->setValueInteger64(new FHIRInteger64([FHIRInteger64::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueInteger64(new FHIRInteger64($ext));
            } else {
                $this->setValueInteger64(new FHIRInteger64(null));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_MARKDOWN, $data) || array_key_exists(self::FIELD_VALUE_MARKDOWN_EXT, $data)) {
            $value = $data[self::FIELD_VALUE_MARKDOWN] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_MARKDOWN_EXT]) && is_array($data[self::FIELD_VALUE_MARKDOWN_EXT])) ? $data[self::FIELD_VALUE_MARKDOWN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setValueMarkdown($value);
                } else if (is_array($value)) {
                    $this->setValueMarkdown(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setValueMarkdown(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueMarkdown(new FHIRMarkdown($ext));
            } else {
                $this->setValueMarkdown(new FHIRMarkdown(null));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_OID, $data) || array_key_exists(self::FIELD_VALUE_OID_EXT, $data)) {
            $value = $data[self::FIELD_VALUE_OID] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_OID_EXT]) && is_array($data[self::FIELD_VALUE_OID_EXT])) ? $data[self::FIELD_VALUE_OID_EXT] : [];
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
            } else {
                $this->setValueOid(new FHIROid(null));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_POSITIVE_INT, $data) || array_key_exists(self::FIELD_VALUE_POSITIVE_INT_EXT, $data)) {
            $value = $data[self::FIELD_VALUE_POSITIVE_INT] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_VALUE_POSITIVE_INT_EXT])) ? $data[self::FIELD_VALUE_POSITIVE_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setValuePositiveInt($value);
                } else if (is_array($value)) {
                    $this->setValuePositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setValuePositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValuePositiveInt(new FHIRPositiveInt($ext));
            } else {
                $this->setValuePositiveInt(new FHIRPositiveInt(null));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_STRING, $data) || array_key_exists(self::FIELD_VALUE_STRING_EXT, $data)) {
            $value = $data[self::FIELD_VALUE_STRING] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_STRING_EXT]) && is_array($data[self::FIELD_VALUE_STRING_EXT])) ? $data[self::FIELD_VALUE_STRING_EXT] : [];
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
            } else {
                $this->setValueString(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_TIME, $data) || array_key_exists(self::FIELD_VALUE_TIME_EXT, $data)) {
            $value = $data[self::FIELD_VALUE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_TIME_EXT]) && is_array($data[self::FIELD_VALUE_TIME_EXT])) ? $data[self::FIELD_VALUE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $this->setValueTime($value);
                } else if (is_array($value)) {
                    $this->setValueTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $this->setValueTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueTime(new FHIRTime($ext));
            } else {
                $this->setValueTime(new FHIRTime(null));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_UNSIGNED_INT, $data) || array_key_exists(self::FIELD_VALUE_UNSIGNED_INT_EXT, $data)) {
            $value = $data[self::FIELD_VALUE_UNSIGNED_INT] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_UNSIGNED_INT_EXT]) && is_array($data[self::FIELD_VALUE_UNSIGNED_INT_EXT])) ? $data[self::FIELD_VALUE_UNSIGNED_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setValueUnsignedInt($value);
                } else if (is_array($value)) {
                    $this->setValueUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setValueUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueUnsignedInt(new FHIRUnsignedInt($ext));
            } else {
                $this->setValueUnsignedInt(new FHIRUnsignedInt(null));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_URI, $data) || array_key_exists(self::FIELD_VALUE_URI_EXT, $data)) {
            $value = $data[self::FIELD_VALUE_URI] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_URI_EXT]) && is_array($data[self::FIELD_VALUE_URI_EXT])) ? $data[self::FIELD_VALUE_URI_EXT] : [];
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
            } else {
                $this->setValueUri(new FHIRUri(null));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_URL, $data) || array_key_exists(self::FIELD_VALUE_URL_EXT, $data)) {
            $value = $data[self::FIELD_VALUE_URL] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_URL_EXT]) && is_array($data[self::FIELD_VALUE_URL_EXT])) ? $data[self::FIELD_VALUE_URL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUrl) {
                    $this->setValueUrl($value);
                } else if (is_array($value)) {
                    $this->setValueUrl(new FHIRUrl(array_merge($ext, $value)));
                } else {
                    $this->setValueUrl(new FHIRUrl([FHIRUrl::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueUrl(new FHIRUrl($ext));
            } else {
                $this->setValueUrl(new FHIRUrl(null));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_UUID, $data) || array_key_exists(self::FIELD_VALUE_UUID_EXT, $data)) {
            $value = $data[self::FIELD_VALUE_UUID] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_UUID_EXT]) && is_array($data[self::FIELD_VALUE_UUID_EXT])) ? $data[self::FIELD_VALUE_UUID_EXT] : [];
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
            } else {
                $this->setValueUuid(new FHIRUuid(null));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_ADDRESS, $data)) {
            if ($data[self::FIELD_VALUE_ADDRESS] instanceof FHIRAddress) {
                $this->setValueAddress($data[self::FIELD_VALUE_ADDRESS]);
            } else {
                $this->setValueAddress(new FHIRAddress($data[self::FIELD_VALUE_ADDRESS]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_AGE, $data)) {
            if ($data[self::FIELD_VALUE_AGE] instanceof FHIRAge) {
                $this->setValueAge($data[self::FIELD_VALUE_AGE]);
            } else {
                $this->setValueAge(new FHIRAge($data[self::FIELD_VALUE_AGE]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_ANNOTATION, $data)) {
            if ($data[self::FIELD_VALUE_ANNOTATION] instanceof FHIRAnnotation) {
                $this->setValueAnnotation($data[self::FIELD_VALUE_ANNOTATION]);
            } else {
                $this->setValueAnnotation(new FHIRAnnotation($data[self::FIELD_VALUE_ANNOTATION]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_ATTACHMENT, $data)) {
            if ($data[self::FIELD_VALUE_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setValueAttachment($data[self::FIELD_VALUE_ATTACHMENT]);
            } else {
                $this->setValueAttachment(new FHIRAttachment($data[self::FIELD_VALUE_ATTACHMENT]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_CODEABLE_CONCEPT, $data)) {
            if ($data[self::FIELD_VALUE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setValueCodeableConcept($data[self::FIELD_VALUE_CODEABLE_CONCEPT]);
            } else {
                $this->setValueCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_VALUE_CODEABLE_CONCEPT]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_CODEABLE_REFERENCE, $data)) {
            if ($data[self::FIELD_VALUE_CODEABLE_REFERENCE] instanceof FHIRCodeableReference) {
                $this->setValueCodeableReference($data[self::FIELD_VALUE_CODEABLE_REFERENCE]);
            } else {
                $this->setValueCodeableReference(new FHIRCodeableReference($data[self::FIELD_VALUE_CODEABLE_REFERENCE]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_CODING, $data)) {
            if ($data[self::FIELD_VALUE_CODING] instanceof FHIRCoding) {
                $this->setValueCoding($data[self::FIELD_VALUE_CODING]);
            } else {
                $this->setValueCoding(new FHIRCoding($data[self::FIELD_VALUE_CODING]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_CONTACT_POINT, $data)) {
            if ($data[self::FIELD_VALUE_CONTACT_POINT] instanceof FHIRContactPoint) {
                $this->setValueContactPoint($data[self::FIELD_VALUE_CONTACT_POINT]);
            } else {
                $this->setValueContactPoint(new FHIRContactPoint($data[self::FIELD_VALUE_CONTACT_POINT]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_COUNT, $data)) {
            if ($data[self::FIELD_VALUE_COUNT] instanceof FHIRCount) {
                $this->setValueCount($data[self::FIELD_VALUE_COUNT]);
            } else {
                $this->setValueCount(new FHIRCount($data[self::FIELD_VALUE_COUNT]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_DISTANCE, $data)) {
            if ($data[self::FIELD_VALUE_DISTANCE] instanceof FHIRDistance) {
                $this->setValueDistance($data[self::FIELD_VALUE_DISTANCE]);
            } else {
                $this->setValueDistance(new FHIRDistance($data[self::FIELD_VALUE_DISTANCE]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_DURATION, $data)) {
            if ($data[self::FIELD_VALUE_DURATION] instanceof FHIRDuration) {
                $this->setValueDuration($data[self::FIELD_VALUE_DURATION]);
            } else {
                $this->setValueDuration(new FHIRDuration($data[self::FIELD_VALUE_DURATION]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_HUMAN_NAME, $data)) {
            if ($data[self::FIELD_VALUE_HUMAN_NAME] instanceof FHIRHumanName) {
                $this->setValueHumanName($data[self::FIELD_VALUE_HUMAN_NAME]);
            } else {
                $this->setValueHumanName(new FHIRHumanName($data[self::FIELD_VALUE_HUMAN_NAME]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_IDENTIFIER, $data)) {
            if ($data[self::FIELD_VALUE_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setValueIdentifier($data[self::FIELD_VALUE_IDENTIFIER]);
            } else {
                $this->setValueIdentifier(new FHIRIdentifier($data[self::FIELD_VALUE_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_MONEY, $data)) {
            if ($data[self::FIELD_VALUE_MONEY] instanceof FHIRMoney) {
                $this->setValueMoney($data[self::FIELD_VALUE_MONEY]);
            } else {
                $this->setValueMoney(new FHIRMoney($data[self::FIELD_VALUE_MONEY]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_PERIOD, $data)) {
            if ($data[self::FIELD_VALUE_PERIOD] instanceof FHIRPeriod) {
                $this->setValuePeriod($data[self::FIELD_VALUE_PERIOD]);
            } else {
                $this->setValuePeriod(new FHIRPeriod($data[self::FIELD_VALUE_PERIOD]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_QUANTITY, $data)) {
            if ($data[self::FIELD_VALUE_QUANTITY] instanceof FHIRQuantity) {
                $this->setValueQuantity($data[self::FIELD_VALUE_QUANTITY]);
            } else {
                $this->setValueQuantity(new FHIRQuantity($data[self::FIELD_VALUE_QUANTITY]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_RANGE, $data)) {
            if ($data[self::FIELD_VALUE_RANGE] instanceof FHIRRange) {
                $this->setValueRange($data[self::FIELD_VALUE_RANGE]);
            } else {
                $this->setValueRange(new FHIRRange($data[self::FIELD_VALUE_RANGE]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_RATIO, $data)) {
            if ($data[self::FIELD_VALUE_RATIO] instanceof FHIRRatio) {
                $this->setValueRatio($data[self::FIELD_VALUE_RATIO]);
            } else {
                $this->setValueRatio(new FHIRRatio($data[self::FIELD_VALUE_RATIO]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_RATIO_RANGE, $data)) {
            if ($data[self::FIELD_VALUE_RATIO_RANGE] instanceof FHIRRatioRange) {
                $this->setValueRatioRange($data[self::FIELD_VALUE_RATIO_RANGE]);
            } else {
                $this->setValueRatioRange(new FHIRRatioRange($data[self::FIELD_VALUE_RATIO_RANGE]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_REFERENCE, $data)) {
            if ($data[self::FIELD_VALUE_REFERENCE] instanceof FHIRReference) {
                $this->setValueReference($data[self::FIELD_VALUE_REFERENCE]);
            } else {
                $this->setValueReference(new FHIRReference($data[self::FIELD_VALUE_REFERENCE]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_SAMPLED_DATA, $data)) {
            if ($data[self::FIELD_VALUE_SAMPLED_DATA] instanceof FHIRSampledData) {
                $this->setValueSampledData($data[self::FIELD_VALUE_SAMPLED_DATA]);
            } else {
                $this->setValueSampledData(new FHIRSampledData($data[self::FIELD_VALUE_SAMPLED_DATA]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_SIGNATURE, $data)) {
            if ($data[self::FIELD_VALUE_SIGNATURE] instanceof FHIRSignature) {
                $this->setValueSignature($data[self::FIELD_VALUE_SIGNATURE]);
            } else {
                $this->setValueSignature(new FHIRSignature($data[self::FIELD_VALUE_SIGNATURE]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_TIMING, $data)) {
            if ($data[self::FIELD_VALUE_TIMING] instanceof FHIRTiming) {
                $this->setValueTiming($data[self::FIELD_VALUE_TIMING]);
            } else {
                $this->setValueTiming(new FHIRTiming($data[self::FIELD_VALUE_TIMING]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_CONTACT_DETAIL, $data)) {
            if ($data[self::FIELD_VALUE_CONTACT_DETAIL] instanceof FHIRContactDetail) {
                $this->setValueContactDetail($data[self::FIELD_VALUE_CONTACT_DETAIL]);
            } else {
                $this->setValueContactDetail(new FHIRContactDetail($data[self::FIELD_VALUE_CONTACT_DETAIL]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_DATA_REQUIREMENT, $data)) {
            if ($data[self::FIELD_VALUE_DATA_REQUIREMENT] instanceof FHIRDataRequirement) {
                $this->setValueDataRequirement($data[self::FIELD_VALUE_DATA_REQUIREMENT]);
            } else {
                $this->setValueDataRequirement(new FHIRDataRequirement($data[self::FIELD_VALUE_DATA_REQUIREMENT]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_EXPRESSION, $data)) {
            if ($data[self::FIELD_VALUE_EXPRESSION] instanceof FHIRExpression) {
                $this->setValueExpression($data[self::FIELD_VALUE_EXPRESSION]);
            } else {
                $this->setValueExpression(new FHIRExpression($data[self::FIELD_VALUE_EXPRESSION]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_PARAMETER_DEFINITION, $data)) {
            if ($data[self::FIELD_VALUE_PARAMETER_DEFINITION] instanceof FHIRParameterDefinition) {
                $this->setValueParameterDefinition($data[self::FIELD_VALUE_PARAMETER_DEFINITION]);
            } else {
                $this->setValueParameterDefinition(new FHIRParameterDefinition($data[self::FIELD_VALUE_PARAMETER_DEFINITION]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_RELATED_ARTIFACT, $data)) {
            if ($data[self::FIELD_VALUE_RELATED_ARTIFACT] instanceof FHIRRelatedArtifact) {
                $this->setValueRelatedArtifact($data[self::FIELD_VALUE_RELATED_ARTIFACT]);
            } else {
                $this->setValueRelatedArtifact(new FHIRRelatedArtifact($data[self::FIELD_VALUE_RELATED_ARTIFACT]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_TRIGGER_DEFINITION, $data)) {
            if ($data[self::FIELD_VALUE_TRIGGER_DEFINITION] instanceof FHIRTriggerDefinition) {
                $this->setValueTriggerDefinition($data[self::FIELD_VALUE_TRIGGER_DEFINITION]);
            } else {
                $this->setValueTriggerDefinition(new FHIRTriggerDefinition($data[self::FIELD_VALUE_TRIGGER_DEFINITION]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_USAGE_CONTEXT, $data)) {
            if ($data[self::FIELD_VALUE_USAGE_CONTEXT] instanceof FHIRUsageContext) {
                $this->setValueUsageContext($data[self::FIELD_VALUE_USAGE_CONTEXT]);
            } else {
                $this->setValueUsageContext(new FHIRUsageContext($data[self::FIELD_VALUE_USAGE_CONTEXT]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_AVAILABILITY, $data)) {
            if ($data[self::FIELD_VALUE_AVAILABILITY] instanceof FHIRAvailability) {
                $this->setValueAvailability($data[self::FIELD_VALUE_AVAILABILITY]);
            } else {
                $this->setValueAvailability(new FHIRAvailability($data[self::FIELD_VALUE_AVAILABILITY]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_EXTENDED_CONTACT_DETAIL, $data)) {
            if ($data[self::FIELD_VALUE_EXTENDED_CONTACT_DETAIL] instanceof FHIRExtendedContactDetail) {
                $this->setValueExtendedContactDetail($data[self::FIELD_VALUE_EXTENDED_CONTACT_DETAIL]);
            } else {
                $this->setValueExtendedContactDetail(new FHIRExtendedContactDetail($data[self::FIELD_VALUE_EXTENDED_CONTACT_DETAIL]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_DOSAGE, $data)) {
            if ($data[self::FIELD_VALUE_DOSAGE] instanceof FHIRDosage) {
                $this->setValueDosage($data[self::FIELD_VALUE_DOSAGE]);
            } else {
                $this->setValueDosage(new FHIRDosage($data[self::FIELD_VALUE_DOSAGE]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_META, $data)) {
            if ($data[self::FIELD_VALUE_META] instanceof FHIRMeta) {
                $this->setValueMeta($data[self::FIELD_VALUE_META]);
            } else {
                $this->setValueMeta(new FHIRMeta($data[self::FIELD_VALUE_META]));
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the purpose of this example among the set of examples.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getLabel(): null|FHIRString
    {
        return $this->label;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the purpose of this example among the set of examples.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $label
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setLabel(null|string|FHIRStringPrimitive|FHIRString $label = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $label && !($label instanceof FHIRString)) {
            $label = new FHIRString($label);
        }
        $this->_trackValueSet($this->label, $label);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_LABEL])) {
            $this->_primitiveXmlLocations[self::FIELD_LABEL] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_LABEL][0] = $xmlLocation;
        $this->label = $label;
        return $this;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBase64Binary
     */
    public function getValueBase64Binary(): null|FHIRBase64Binary
    {
        return $this->valueBase64Binary;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBase64Binary $valueBase64Binary
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValueBase64Binary(null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $valueBase64Binary = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $valueBase64Binary && !($valueBase64Binary instanceof FHIRBase64Binary)) {
            $valueBase64Binary = new FHIRBase64Binary($valueBase64Binary);
        }
        $this->_trackValueSet($this->valueBase64Binary, $valueBase64Binary);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VALUE_BASE_64BINARY])) {
            $this->_primitiveXmlLocations[self::FIELD_VALUE_BASE_64BINARY] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VALUE_BASE_64BINARY][0] = $xmlLocation;
        $this->valueBase64Binary = $valueBase64Binary;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean(): null|FHIRBoolean
    {
        return $this->valueBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean $valueBoolean
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValueBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $valueBoolean = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $valueBoolean && !($valueBoolean instanceof FHIRBoolean)) {
            $valueBoolean = new FHIRBoolean($valueBoolean);
        }
        $this->_trackValueSet($this->valueBoolean, $valueBoolean);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VALUE_BOOLEAN])) {
            $this->_primitiveXmlLocations[self::FIELD_VALUE_BOOLEAN] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VALUE_BOOLEAN][0] = $xmlLocation;
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getValueCanonical(): null|FHIRCanonical
    {
        return $this->valueCanonical;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical $valueCanonical
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValueCanonical(null|string|FHIRCanonicalPrimitive|FHIRCanonical $valueCanonical = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $valueCanonical && !($valueCanonical instanceof FHIRCanonical)) {
            $valueCanonical = new FHIRCanonical($valueCanonical);
        }
        $this->_trackValueSet($this->valueCanonical, $valueCanonical);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VALUE_CANONICAL])) {
            $this->_primitiveXmlLocations[self::FIELD_VALUE_CANONICAL] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VALUE_CANONICAL][0] = $xmlLocation;
        $this->valueCanonical = $valueCanonical;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCode
     */
    public function getValueCode(): null|FHIRCode
    {
        return $this->valueCode;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCode $valueCode
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValueCode(null|string|FHIRCodePrimitive|FHIRCode $valueCode = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $valueCode && !($valueCode instanceof FHIRCode)) {
            $valueCode = new FHIRCode($valueCode);
        }
        $this->_trackValueSet($this->valueCode, $valueCode);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VALUE_CODE])) {
            $this->_primitiveXmlLocations[self::FIELD_VALUE_CODE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VALUE_CODE][0] = $xmlLocation;
        $this->valueCode = $valueCode;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDate
     */
    public function getValueDate(): null|FHIRDate
    {
        return $this->valueDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R5\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDate $valueDate
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValueDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $valueDate = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $valueDate && !($valueDate instanceof FHIRDate)) {
            $valueDate = new FHIRDate($valueDate);
        }
        $this->_trackValueSet($this->valueDate, $valueDate);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VALUE_DATE])) {
            $this->_primitiveXmlLocations[self::FIELD_VALUE_DATE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VALUE_DATE][0] = $xmlLocation;
        $this->valueDate = $valueDate;
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
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime(): null|FHIRDateTime
    {
        return $this->valueDateTime;
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
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R5\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime $valueDateTime
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValueDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $valueDateTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $valueDateTime && !($valueDateTime instanceof FHIRDateTime)) {
            $valueDateTime = new FHIRDateTime($valueDateTime);
        }
        $this->_trackValueSet($this->valueDateTime, $valueDateTime);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VALUE_DATE_TIME])) {
            $this->_primitiveXmlLocations[self::FIELD_VALUE_DATE_TIME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VALUE_DATE_TIME][0] = $xmlLocation;
        $this->valueDateTime = $valueDateTime;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    public function getValueDecimal(): null|FHIRDecimal
    {
        return $this->valueDecimal;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\R5\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDecimal $valueDecimal
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValueDecimal(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $valueDecimal = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $valueDecimal && !($valueDecimal instanceof FHIRDecimal)) {
            $valueDecimal = new FHIRDecimal($valueDecimal);
        }
        $this->_trackValueSet($this->valueDecimal, $valueDecimal);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VALUE_DECIMAL])) {
            $this->_primitiveXmlLocations[self::FIELD_VALUE_DECIMAL] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VALUE_DECIMAL][0] = $xmlLocation;
        $this->valueDecimal = $valueDecimal;
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
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRId
     */
    public function getValueId(): null|FHIRId
    {
        return $this->valueId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRId $valueId
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValueId(null|string|FHIRIdPrimitive|FHIRId $valueId = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $valueId && !($valueId instanceof FHIRId)) {
            $valueId = new FHIRId($valueId);
        }
        $this->_trackValueSet($this->valueId, $valueId);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VALUE_ID])) {
            $this->_primitiveXmlLocations[self::FIELD_VALUE_ID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VALUE_ID][0] = $xmlLocation;
        $this->valueId = $valueId;
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
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInstant
     */
    public function getValueInstant(): null|FHIRInstant
    {
        return $this->valueInstant;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R5\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInstant $valueInstant
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValueInstant(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $valueInstant = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $valueInstant && !($valueInstant instanceof FHIRInstant)) {
            $valueInstant = new FHIRInstant($valueInstant);
        }
        $this->_trackValueSet($this->valueInstant, $valueInstant);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VALUE_INSTANT])) {
            $this->_primitiveXmlLocations[self::FIELD_VALUE_INSTANT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VALUE_INSTANT][0] = $xmlLocation;
        $this->valueInstant = $valueInstant;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger
     */
    public function getValueInteger(): null|FHIRInteger
    {
        return $this->valueInteger;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R5\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger $valueInteger
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValueInteger(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $valueInteger = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $valueInteger && !($valueInteger instanceof FHIRInteger)) {
            $valueInteger = new FHIRInteger($valueInteger);
        }
        $this->_trackValueSet($this->valueInteger, $valueInteger);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VALUE_INTEGER])) {
            $this->_primitiveXmlLocations[self::FIELD_VALUE_INTEGER] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VALUE_INTEGER][0] = $xmlLocation;
        $this->valueInteger = $valueInteger;
        return $this;
    }

    /**
     * A very large whole number
     * Typically this is used for record counters (e.g. database keys)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger64
     */
    public function getValueInteger64(): null|FHIRInteger64
    {
        return $this->valueInteger64;
    }

    /**
     * A very large whole number
     * Typically this is used for record counters (e.g. database keys)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R5\FHIRInteger64Primitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger64 $valueInteger64
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValueInteger64(null|string|int|float|FHIRInteger64Primitive|FHIRInteger64 $valueInteger64 = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $valueInteger64 && !($valueInteger64 instanceof FHIRInteger64)) {
            $valueInteger64 = new FHIRInteger64($valueInteger64);
        }
        $this->_trackValueSet($this->valueInteger64, $valueInteger64);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VALUE_INTEGER_64])) {
            $this->_primitiveXmlLocations[self::FIELD_VALUE_INTEGER_64] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VALUE_INTEGER_64][0] = $xmlLocation;
        $this->valueInteger64 = $valueInteger64;
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
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getValueMarkdown(): null|FHIRMarkdown
    {
        return $this->valueMarkdown;
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
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown $valueMarkdown
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValueMarkdown(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $valueMarkdown = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $valueMarkdown && !($valueMarkdown instanceof FHIRMarkdown)) {
            $valueMarkdown = new FHIRMarkdown($valueMarkdown);
        }
        $this->_trackValueSet($this->valueMarkdown, $valueMarkdown);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VALUE_MARKDOWN])) {
            $this->_primitiveXmlLocations[self::FIELD_VALUE_MARKDOWN] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VALUE_MARKDOWN][0] = $xmlLocation;
        $this->valueMarkdown = $valueMarkdown;
        return $this;
    }

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIROid
     */
    public function getValueOid(): null|FHIROid
    {
        return $this->valueOid;
    }

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIROid $valueOid
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValueOid(null|string|FHIROidPrimitive|FHIROid $valueOid = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $valueOid && !($valueOid instanceof FHIROid)) {
            $valueOid = new FHIROid($valueOid);
        }
        $this->_trackValueSet($this->valueOid, $valueOid);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VALUE_OID])) {
            $this->_primitiveXmlLocations[self::FIELD_VALUE_OID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VALUE_OID][0] = $xmlLocation;
        $this->valueOid = $valueOid;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getValuePositiveInt(): null|FHIRPositiveInt
    {
        return $this->valuePositiveInt;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R5\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt $valuePositiveInt
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValuePositiveInt(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $valuePositiveInt = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $valuePositiveInt && !($valuePositiveInt instanceof FHIRPositiveInt)) {
            $valuePositiveInt = new FHIRPositiveInt($valuePositiveInt);
        }
        $this->_trackValueSet($this->valuePositiveInt, $valuePositiveInt);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VALUE_POSITIVE_INT])) {
            $this->_primitiveXmlLocations[self::FIELD_VALUE_POSITIVE_INT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VALUE_POSITIVE_INT][0] = $xmlLocation;
        $this->valuePositiveInt = $valuePositiveInt;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getValueString(): null|FHIRString
    {
        return $this->valueString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $valueString
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValueString(null|string|FHIRStringPrimitive|FHIRString $valueString = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $valueString && !($valueString instanceof FHIRString)) {
            $valueString = new FHIRString($valueString);
        }
        $this->_trackValueSet($this->valueString, $valueString);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VALUE_STRING])) {
            $this->_primitiveXmlLocations[self::FIELD_VALUE_STRING] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VALUE_STRING][0] = $xmlLocation;
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRTime
     */
    public function getValueTime(): null|FHIRTime
    {
        return $this->valueTime;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R5\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRTime $valueTime
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValueTime(null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $valueTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $valueTime && !($valueTime instanceof FHIRTime)) {
            $valueTime = new FHIRTime($valueTime);
        }
        $this->_trackValueSet($this->valueTime, $valueTime);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VALUE_TIME])) {
            $this->_primitiveXmlLocations[self::FIELD_VALUE_TIME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VALUE_TIME][0] = $xmlLocation;
        $this->valueTime = $valueTime;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    public function getValueUnsignedInt(): null|FHIRUnsignedInt
    {
        return $this->valueUnsignedInt;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R5\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUnsignedInt $valueUnsignedInt
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValueUnsignedInt(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $valueUnsignedInt = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $valueUnsignedInt && !($valueUnsignedInt instanceof FHIRUnsignedInt)) {
            $valueUnsignedInt = new FHIRUnsignedInt($valueUnsignedInt);
        }
        $this->_trackValueSet($this->valueUnsignedInt, $valueUnsignedInt);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VALUE_UNSIGNED_INT])) {
            $this->_primitiveXmlLocations[self::FIELD_VALUE_UNSIGNED_INT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VALUE_UNSIGNED_INT][0] = $xmlLocation;
        $this->valueUnsignedInt = $valueUnsignedInt;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUri
     */
    public function getValueUri(): null|FHIRUri
    {
        return $this->valueUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUri $valueUri
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValueUri(null|string|FHIRUriPrimitive|FHIRUri $valueUri = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $valueUri && !($valueUri instanceof FHIRUri)) {
            $valueUri = new FHIRUri($valueUri);
        }
        $this->_trackValueSet($this->valueUri, $valueUri);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VALUE_URI])) {
            $this->_primitiveXmlLocations[self::FIELD_VALUE_URI] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VALUE_URI][0] = $xmlLocation;
        $this->valueUri = $valueUri;
        return $this;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUrl
     */
    public function getValueUrl(): null|FHIRUrl
    {
        return $this->valueUrl;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRUrlPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUrl $valueUrl
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValueUrl(null|string|FHIRUrlPrimitive|FHIRUrl $valueUrl = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $valueUrl && !($valueUrl instanceof FHIRUrl)) {
            $valueUrl = new FHIRUrl($valueUrl);
        }
        $this->_trackValueSet($this->valueUrl, $valueUrl);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VALUE_URL])) {
            $this->_primitiveXmlLocations[self::FIELD_VALUE_URL] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VALUE_URL][0] = $xmlLocation;
        $this->valueUrl = $valueUrl;
        return $this;
    }

    /**
     * A UUID, represented as a URI
     * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUuid
     */
    public function getValueUuid(): null|FHIRUuid
    {
        return $this->valueUuid;
    }

    /**
     * A UUID, represented as a URI
     * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRUuidPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUuid $valueUuid
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValueUuid(null|string|FHIRUuidPrimitive|FHIRUuid $valueUuid = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $valueUuid && !($valueUuid instanceof FHIRUuid)) {
            $valueUuid = new FHIRUuid($valueUuid);
        }
        $this->_trackValueSet($this->valueUuid, $valueUuid);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VALUE_UUID])) {
            $this->_primitiveXmlLocations[self::FIELD_VALUE_UUID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VALUE_UUID][0] = $xmlLocation;
        $this->valueUuid = $valueUuid;
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
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAddress
     */
    public function getValueAddress(): null|FHIRAddress
    {
        return $this->valueAddress;
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
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAddress $valueAddress
     * @return static
     */
    public function setValueAddress(null|FHIRAddress $valueAddress = null): self
    {
        if (null === $valueAddress) {
            $valueAddress = new FHIRAddress();
        }
        $this->_trackValueSet($this->valueAddress, $valueAddress);
        $this->valueAddress = $valueAddress;
        return $this;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge
     */
    public function getValueAge(): null|FHIRAge
    {
        return $this->valueAge;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge $valueAge
     * @return static
     */
    public function setValueAge(null|FHIRAge $valueAge = null): self
    {
        if (null === $valueAge) {
            $valueAge = new FHIRAge();
        }
        $this->_trackValueSet($this->valueAge, $valueAge);
        $this->valueAge = $valueAge;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation
     */
    public function getValueAnnotation(): null|FHIRAnnotation
    {
        return $this->valueAnnotation;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation $valueAnnotation
     * @return static
     */
    public function setValueAnnotation(null|FHIRAnnotation $valueAnnotation = null): self
    {
        if (null === $valueAnnotation) {
            $valueAnnotation = new FHIRAnnotation();
        }
        $this->_trackValueSet($this->valueAnnotation, $valueAnnotation);
        $this->valueAnnotation = $valueAnnotation;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment
     */
    public function getValueAttachment(): null|FHIRAttachment
    {
        return $this->valueAttachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment $valueAttachment
     * @return static
     */
    public function setValueAttachment(null|FHIRAttachment $valueAttachment = null): self
    {
        if (null === $valueAttachment) {
            $valueAttachment = new FHIRAttachment();
        }
        $this->_trackValueSet($this->valueAttachment, $valueAttachment);
        $this->valueAttachment = $valueAttachment;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getValueCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->valueCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $valueCodeableConcept
     * @return static
     */
    public function setValueCodeableConcept(null|FHIRCodeableConcept $valueCodeableConcept = null): self
    {
        if (null === $valueCodeableConcept) {
            $valueCodeableConcept = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->valueCodeableConcept, $valueCodeableConcept);
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference
     */
    public function getValueCodeableReference(): null|FHIRCodeableReference
    {
        return $this->valueCodeableReference;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $valueCodeableReference
     * @return static
     */
    public function setValueCodeableReference(null|FHIRCodeableReference $valueCodeableReference = null): self
    {
        if (null === $valueCodeableReference) {
            $valueCodeableReference = new FHIRCodeableReference();
        }
        $this->_trackValueSet($this->valueCodeableReference, $valueCodeableReference);
        $this->valueCodeableReference = $valueCodeableReference;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    public function getValueCoding(): null|FHIRCoding
    {
        return $this->valueCoding;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $valueCoding
     * @return static
     */
    public function setValueCoding(null|FHIRCoding $valueCoding = null): self
    {
        if (null === $valueCoding) {
            $valueCoding = new FHIRCoding();
        }
        $this->_trackValueSet($this->valueCoding, $valueCoding);
        $this->valueCoding = $valueCoding;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint
     */
    public function getValueContactPoint(): null|FHIRContactPoint
    {
        return $this->valueContactPoint;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint $valueContactPoint
     * @return static
     */
    public function setValueContactPoint(null|FHIRContactPoint $valueContactPoint = null): self
    {
        if (null === $valueContactPoint) {
            $valueContactPoint = new FHIRContactPoint();
        }
        $this->_trackValueSet($this->valueContactPoint, $valueContactPoint);
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
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRCount
     */
    public function getValueCount(): null|FHIRCount
    {
        return $this->valueCount;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRCount $valueCount
     * @return static
     */
    public function setValueCount(null|FHIRCount $valueCount = null): self
    {
        if (null === $valueCount) {
            $valueCount = new FHIRCount();
        }
        $this->_trackValueSet($this->valueCount, $valueCount);
        $this->valueCount = $valueCount;
        return $this;
    }

    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDistance
     */
    public function getValueDistance(): null|FHIRDistance
    {
        return $this->valueDistance;
    }

    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDistance $valueDistance
     * @return static
     */
    public function setValueDistance(null|FHIRDistance $valueDistance = null): self
    {
        if (null === $valueDistance) {
            $valueDistance = new FHIRDistance();
        }
        $this->_trackValueSet($this->valueDistance, $valueDistance);
        $this->valueDistance = $valueDistance;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration
     */
    public function getValueDuration(): null|FHIRDuration
    {
        return $this->valueDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration $valueDuration
     * @return static
     */
    public function setValueDuration(null|FHIRDuration $valueDuration = null): self
    {
        if (null === $valueDuration) {
            $valueDuration = new FHIRDuration();
        }
        $this->_trackValueSet($this->valueDuration, $valueDuration);
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
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRHumanName
     */
    public function getValueHumanName(): null|FHIRHumanName
    {
        return $this->valueHumanName;
    }

    /**
     * A name, normally of a human, that can be used for other living entities (e.g.
     * animals but not organizations) that have been assigned names by a human and may
     * need the use of name parts or the need for usage information.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRHumanName $valueHumanName
     * @return static
     */
    public function setValueHumanName(null|FHIRHumanName $valueHumanName = null): self
    {
        if (null === $valueHumanName) {
            $valueHumanName = new FHIRHumanName();
        }
        $this->_trackValueSet($this->valueHumanName, $valueHumanName);
        $this->valueHumanName = $valueHumanName;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier
     */
    public function getValueIdentifier(): null|FHIRIdentifier
    {
        return $this->valueIdentifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $valueIdentifier
     * @return static
     */
    public function setValueIdentifier(null|FHIRIdentifier $valueIdentifier = null): self
    {
        if (null === $valueIdentifier) {
            $valueIdentifier = new FHIRIdentifier();
        }
        $this->_trackValueSet($this->valueIdentifier, $valueIdentifier);
        $this->valueIdentifier = $valueIdentifier;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney
     */
    public function getValueMoney(): null|FHIRMoney
    {
        return $this->valueMoney;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $valueMoney
     * @return static
     */
    public function setValueMoney(null|FHIRMoney $valueMoney = null): self
    {
        if (null === $valueMoney) {
            $valueMoney = new FHIRMoney();
        }
        $this->_trackValueSet($this->valueMoney, $valueMoney);
        $this->valueMoney = $valueMoney;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    public function getValuePeriod(): null|FHIRPeriod
    {
        return $this->valuePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $valuePeriod
     * @return static
     */
    public function setValuePeriod(null|FHIRPeriod $valuePeriod = null): self
    {
        if (null === $valuePeriod) {
            $valuePeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->valuePeriod, $valuePeriod);
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
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getValueQuantity(): null|FHIRQuantity
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
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $valueQuantity
     * @return static
     */
    public function setValueQuantity(null|FHIRQuantity $valueQuantity = null): self
    {
        if (null === $valueQuantity) {
            $valueQuantity = new FHIRQuantity();
        }
        $this->_trackValueSet($this->valueQuantity, $valueQuantity);
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    public function getValueRange(): null|FHIRRange
    {
        return $this->valueRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $valueRange
     * @return static
     */
    public function setValueRange(null|FHIRRange $valueRange = null): self
    {
        if (null === $valueRange) {
            $valueRange = new FHIRRange();
        }
        $this->_trackValueSet($this->valueRange, $valueRange);
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio
     */
    public function getValueRatio(): null|FHIRRatio
    {
        return $this->valueRatio;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio $valueRatio
     * @return static
     */
    public function setValueRatio(null|FHIRRatio $valueRatio = null): self
    {
        if (null === $valueRatio) {
            $valueRatio = new FHIRRatio();
        }
        $this->_trackValueSet($this->valueRatio, $valueRatio);
        $this->valueRatio = $valueRatio;
        return $this;
    }

    /**
     * A range of ratios expressed as a low and high numerator and a denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange
     */
    public function getValueRatioRange(): null|FHIRRatioRange
    {
        return $this->valueRatioRange;
    }

    /**
     * A range of ratios expressed as a low and high numerator and a denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange $valueRatioRange
     * @return static
     */
    public function setValueRatioRange(null|FHIRRatioRange $valueRatioRange = null): self
    {
        if (null === $valueRatioRange) {
            $valueRatioRange = new FHIRRatioRange();
        }
        $this->_trackValueSet($this->valueRatioRange, $valueRatioRange);
        $this->valueRatioRange = $valueRatioRange;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getValueReference(): null|FHIRReference
    {
        return $this->valueReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $valueReference
     * @return static
     */
    public function setValueReference(null|FHIRReference $valueReference = null): self
    {
        if (null === $valueReference) {
            $valueReference = new FHIRReference();
        }
        $this->_trackValueSet($this->valueReference, $valueReference);
        $this->valueReference = $valueReference;
        return $this;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRSampledData
     */
    public function getValueSampledData(): null|FHIRSampledData
    {
        return $this->valueSampledData;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRSampledData $valueSampledData
     * @return static
     */
    public function setValueSampledData(null|FHIRSampledData $valueSampledData = null): self
    {
        if (null === $valueSampledData) {
            $valueSampledData = new FHIRSampledData();
        }
        $this->_trackValueSet($this->valueSampledData, $valueSampledData);
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
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRSignature
     */
    public function getValueSignature(): null|FHIRSignature
    {
        return $this->valueSignature;
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
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRSignature $valueSignature
     * @return static
     */
    public function setValueSignature(null|FHIRSignature $valueSignature = null): self
    {
        if (null === $valueSignature) {
            $valueSignature = new FHIRSignature();
        }
        $this->_trackValueSet($this->valueSignature, $valueSignature);
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
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming
     */
    public function getValueTiming(): null|FHIRTiming
    {
        return $this->valueTiming;
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
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming $valueTiming
     * @return static
     */
    public function setValueTiming(null|FHIRTiming $valueTiming = null): self
    {
        if (null === $valueTiming) {
            $valueTiming = new FHIRTiming();
        }
        $this->_trackValueSet($this->valueTiming, $valueTiming);
        $this->valueTiming = $valueTiming;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail
     */
    public function getValueContactDetail(): null|FHIRContactDetail
    {
        return $this->valueContactDetail;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail $valueContactDetail
     * @return static
     */
    public function setValueContactDetail(null|FHIRContactDetail $valueContactDetail = null): self
    {
        if (null === $valueContactDetail) {
            $valueContactDetail = new FHIRContactDetail();
        }
        $this->_trackValueSet($this->valueContactDetail, $valueContactDetail);
        $this->valueContactDetail = $valueContactDetail;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRDataRequirement
     */
    public function getValueDataRequirement(): null|FHIRDataRequirement
    {
        return $this->valueDataRequirement;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRDataRequirement $valueDataRequirement
     * @return static
     */
    public function setValueDataRequirement(null|FHIRDataRequirement $valueDataRequirement = null): self
    {
        if (null === $valueDataRequirement) {
            $valueDataRequirement = new FHIRDataRequirement();
        }
        $this->_trackValueSet($this->valueDataRequirement, $valueDataRequirement);
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
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression
     */
    public function getValueExpression(): null|FHIRExpression
    {
        return $this->valueExpression;
    }

    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression $valueExpression
     * @return static
     */
    public function setValueExpression(null|FHIRExpression $valueExpression = null): self
    {
        if (null === $valueExpression) {
            $valueExpression = new FHIRExpression();
        }
        $this->_trackValueSet($this->valueExpression, $valueExpression);
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
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRParameterDefinition
     */
    public function getValueParameterDefinition(): null|FHIRParameterDefinition
    {
        return $this->valueParameterDefinition;
    }

    /**
     * The parameters to the module. This collection specifies both the input and
     * output parameters. Input parameters are provided by the caller as part of the
     * $evaluate operation. Output parameters are included in the GuidanceResponse.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRParameterDefinition $valueParameterDefinition
     * @return static
     */
    public function setValueParameterDefinition(null|FHIRParameterDefinition $valueParameterDefinition = null): self
    {
        if (null === $valueParameterDefinition) {
            $valueParameterDefinition = new FHIRParameterDefinition();
        }
        $this->_trackValueSet($this->valueParameterDefinition, $valueParameterDefinition);
        $this->valueParameterDefinition = $valueParameterDefinition;
        return $this;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact
     */
    public function getValueRelatedArtifact(): null|FHIRRelatedArtifact
    {
        return $this->valueRelatedArtifact;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact $valueRelatedArtifact
     * @return static
     */
    public function setValueRelatedArtifact(null|FHIRRelatedArtifact $valueRelatedArtifact = null): self
    {
        if (null === $valueRelatedArtifact) {
            $valueRelatedArtifact = new FHIRRelatedArtifact();
        }
        $this->_trackValueSet($this->valueRelatedArtifact, $valueRelatedArtifact);
        $this->valueRelatedArtifact = $valueRelatedArtifact;
        return $this;
    }

    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRTriggerDefinition
     */
    public function getValueTriggerDefinition(): null|FHIRTriggerDefinition
    {
        return $this->valueTriggerDefinition;
    }

    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRTriggerDefinition $valueTriggerDefinition
     * @return static
     */
    public function setValueTriggerDefinition(null|FHIRTriggerDefinition $valueTriggerDefinition = null): self
    {
        if (null === $valueTriggerDefinition) {
            $valueTriggerDefinition = new FHIRTriggerDefinition();
        }
        $this->_trackValueSet($this->valueTriggerDefinition, $valueTriggerDefinition);
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
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRUsageContext
     */
    public function getValueUsageContext(): null|FHIRUsageContext
    {
        return $this->valueUsageContext;
    }

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRUsageContext $valueUsageContext
     * @return static
     */
    public function setValueUsageContext(null|FHIRUsageContext $valueUsageContext = null): self
    {
        if (null === $valueUsageContext) {
            $valueUsageContext = new FHIRUsageContext();
        }
        $this->_trackValueSet($this->valueUsageContext, $valueUsageContext);
        $this->valueUsageContext = $valueUsageContext;
        return $this;
    }

    /**
     * Availability data for an {item}.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAvailability
     */
    public function getValueAvailability(): null|FHIRAvailability
    {
        return $this->valueAvailability;
    }

    /**
     * Availability data for an {item}.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAvailability $valueAvailability
     * @return static
     */
    public function setValueAvailability(null|FHIRAvailability $valueAvailability = null): self
    {
        if (null === $valueAvailability) {
            $valueAvailability = new FHIRAvailability();
        }
        $this->_trackValueSet($this->valueAvailability, $valueAvailability);
        $this->valueAvailability = $valueAvailability;
        return $this;
    }

    /**
     * Specifies contact information for a specific purpose over a period of time,
     * might be handled/monitored by a specific named person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtendedContactDetail
     */
    public function getValueExtendedContactDetail(): null|FHIRExtendedContactDetail
    {
        return $this->valueExtendedContactDetail;
    }

    /**
     * Specifies contact information for a specific purpose over a period of time,
     * might be handled/monitored by a specific named person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtendedContactDetail $valueExtendedContactDetail
     * @return static
     */
    public function setValueExtendedContactDetail(null|FHIRExtendedContactDetail $valueExtendedContactDetail = null): self
    {
        if (null === $valueExtendedContactDetail) {
            $valueExtendedContactDetail = new FHIRExtendedContactDetail();
        }
        $this->_trackValueSet($this->valueExtendedContactDetail, $valueExtendedContactDetail);
        $this->valueExtendedContactDetail = $valueExtendedContactDetail;
        return $this;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage
     */
    public function getValueDosage(): null|FHIRDosage
    {
        return $this->valueDosage;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage $valueDosage
     * @return static
     */
    public function setValueDosage(null|FHIRDosage $valueDosage = null): self
    {
        if (null === $valueDosage) {
            $valueDosage = new FHIRDosage();
        }
        $this->_trackValueSet($this->valueDosage, $valueDosage);
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
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta
     */
    public function getValueMeta(): null|FHIRMeta
    {
        return $this->valueMeta;
    }

    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content might not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta $valueMeta
     * @return static
     */
    public function setValueMeta(null|FHIRMeta $valueMeta = null): self
    {
        if (null === $valueMeta) {
            $valueMeta = new FHIRMeta();
        }
        $this->_trackValueSet($this->valueMeta, $valueMeta);
        $this->valueMeta = $valueMeta;
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
        if (null !== ($v = $this->getLabel())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LABEL] = $fieldErrs;
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
        if (null !== ($v = $this->getValueCanonical())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_CANONICAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_CODE] = $fieldErrs;
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
        if (null !== ($v = $this->getValueId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_ID] = $fieldErrs;
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
        if (null !== ($v = $this->getValueInteger64())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_INTEGER_64] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueMarkdown())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_MARKDOWN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueOid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_OID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValuePositiveInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_POSITIVE_INT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueUnsignedInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_UNSIGNED_INT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueUri())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_URI] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueUrl())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_URL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueUuid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_UUID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueAddress())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_ADDRESS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueAge())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_AGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueAnnotation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_ANNOTATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueAttachment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_ATTACHMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueCodeableReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_CODEABLE_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueCoding())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_CODING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueContactPoint())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_CONTACT_POINT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueCount())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_COUNT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueDistance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_DISTANCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueHumanName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_HUMAN_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueMoney())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_MONEY] = $fieldErrs;
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
        if (null !== ($v = $this->getValueRatioRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_RATIO_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueSampledData())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_SAMPLED_DATA] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueSignature())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_SIGNATURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueTiming())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_TIMING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueContactDetail())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_CONTACT_DETAIL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueDataRequirement())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_DATA_REQUIREMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueExpression())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_EXPRESSION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueParameterDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_PARAMETER_DEFINITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueRelatedArtifact())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_RELATED_ARTIFACT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueTriggerDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_TRIGGER_DEFINITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueUsageContext())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_USAGE_CONTEXT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueAvailability())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_AVAILABILITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueExtendedContactDetail())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_EXTENDED_CONTACT_DETAIL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueDosage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_DOSAGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueMeta())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_META] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_LABEL])) {
            $v = $this->getLabel();
            foreach($validationRules[self::FIELD_LABEL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_LABEL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LABEL])) {
                        $errs[self::FIELD_LABEL] = [];
                    }
                    $errs[self::FIELD_LABEL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_BASE_64BINARY])) {
            $v = $this->getValueBase64Binary();
            foreach($validationRules[self::FIELD_VALUE_BASE_64BINARY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_BASE_64BINARY, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_BOOLEAN])) {
                        $errs[self::FIELD_VALUE_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_VALUE_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_CANONICAL])) {
            $v = $this->getValueCanonical();
            foreach($validationRules[self::FIELD_VALUE_CANONICAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_CANONICAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_CANONICAL])) {
                        $errs[self::FIELD_VALUE_CANONICAL] = [];
                    }
                    $errs[self::FIELD_VALUE_CANONICAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_CODE])) {
            $v = $this->getValueCode();
            foreach($validationRules[self::FIELD_VALUE_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_CODE])) {
                        $errs[self::FIELD_VALUE_CODE] = [];
                    }
                    $errs[self::FIELD_VALUE_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_DATE])) {
            $v = $this->getValueDate();
            foreach($validationRules[self::FIELD_VALUE_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_DATE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_DATE_TIME, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_DECIMAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_DECIMAL])) {
                        $errs[self::FIELD_VALUE_DECIMAL] = [];
                    }
                    $errs[self::FIELD_VALUE_DECIMAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_ID])) {
            $v = $this->getValueId();
            foreach($validationRules[self::FIELD_VALUE_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_ID])) {
                        $errs[self::FIELD_VALUE_ID] = [];
                    }
                    $errs[self::FIELD_VALUE_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_INSTANT])) {
            $v = $this->getValueInstant();
            foreach($validationRules[self::FIELD_VALUE_INSTANT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_INSTANT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_INTEGER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_INTEGER])) {
                        $errs[self::FIELD_VALUE_INTEGER] = [];
                    }
                    $errs[self::FIELD_VALUE_INTEGER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_INTEGER_64])) {
            $v = $this->getValueInteger64();
            foreach($validationRules[self::FIELD_VALUE_INTEGER_64] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_INTEGER_64, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_INTEGER_64])) {
                        $errs[self::FIELD_VALUE_INTEGER_64] = [];
                    }
                    $errs[self::FIELD_VALUE_INTEGER_64][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_MARKDOWN])) {
            $v = $this->getValueMarkdown();
            foreach($validationRules[self::FIELD_VALUE_MARKDOWN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_MARKDOWN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_MARKDOWN])) {
                        $errs[self::FIELD_VALUE_MARKDOWN] = [];
                    }
                    $errs[self::FIELD_VALUE_MARKDOWN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_OID])) {
            $v = $this->getValueOid();
            foreach($validationRules[self::FIELD_VALUE_OID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_OID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_OID])) {
                        $errs[self::FIELD_VALUE_OID] = [];
                    }
                    $errs[self::FIELD_VALUE_OID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_POSITIVE_INT])) {
            $v = $this->getValuePositiveInt();
            foreach($validationRules[self::FIELD_VALUE_POSITIVE_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_POSITIVE_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_POSITIVE_INT])) {
                        $errs[self::FIELD_VALUE_POSITIVE_INT] = [];
                    }
                    $errs[self::FIELD_VALUE_POSITIVE_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_STRING])) {
            $v = $this->getValueString();
            foreach($validationRules[self::FIELD_VALUE_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_STRING])) {
                        $errs[self::FIELD_VALUE_STRING] = [];
                    }
                    $errs[self::FIELD_VALUE_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_TIME])) {
            $v = $this->getValueTime();
            foreach($validationRules[self::FIELD_VALUE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_TIME])) {
                        $errs[self::FIELD_VALUE_TIME] = [];
                    }
                    $errs[self::FIELD_VALUE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_UNSIGNED_INT])) {
            $v = $this->getValueUnsignedInt();
            foreach($validationRules[self::FIELD_VALUE_UNSIGNED_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_UNSIGNED_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_UNSIGNED_INT])) {
                        $errs[self::FIELD_VALUE_UNSIGNED_INT] = [];
                    }
                    $errs[self::FIELD_VALUE_UNSIGNED_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_URI])) {
            $v = $this->getValueUri();
            foreach($validationRules[self::FIELD_VALUE_URI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_URI])) {
                        $errs[self::FIELD_VALUE_URI] = [];
                    }
                    $errs[self::FIELD_VALUE_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_URL])) {
            $v = $this->getValueUrl();
            foreach($validationRules[self::FIELD_VALUE_URL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_URL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_URL])) {
                        $errs[self::FIELD_VALUE_URL] = [];
                    }
                    $errs[self::FIELD_VALUE_URL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_UUID])) {
            $v = $this->getValueUuid();
            foreach($validationRules[self::FIELD_VALUE_UUID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_UUID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_UUID])) {
                        $errs[self::FIELD_VALUE_UUID] = [];
                    }
                    $errs[self::FIELD_VALUE_UUID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_ADDRESS])) {
            $v = $this->getValueAddress();
            foreach($validationRules[self::FIELD_VALUE_ADDRESS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_ADDRESS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_ADDRESS])) {
                        $errs[self::FIELD_VALUE_ADDRESS] = [];
                    }
                    $errs[self::FIELD_VALUE_ADDRESS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_AGE])) {
            $v = $this->getValueAge();
            foreach($validationRules[self::FIELD_VALUE_AGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_AGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_AGE])) {
                        $errs[self::FIELD_VALUE_AGE] = [];
                    }
                    $errs[self::FIELD_VALUE_AGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_ANNOTATION])) {
            $v = $this->getValueAnnotation();
            foreach($validationRules[self::FIELD_VALUE_ANNOTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_ANNOTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_ANNOTATION])) {
                        $errs[self::FIELD_VALUE_ANNOTATION] = [];
                    }
                    $errs[self::FIELD_VALUE_ANNOTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_ATTACHMENT])) {
            $v = $this->getValueAttachment();
            foreach($validationRules[self::FIELD_VALUE_ATTACHMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_ATTACHMENT])) {
                        $errs[self::FIELD_VALUE_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_VALUE_ATTACHMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_CODEABLE_CONCEPT])) {
            $v = $this->getValueCodeableConcept();
            foreach($validationRules[self::FIELD_VALUE_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_VALUE_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_VALUE_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_CODEABLE_REFERENCE])) {
            $v = $this->getValueCodeableReference();
            foreach($validationRules[self::FIELD_VALUE_CODEABLE_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_CODEABLE_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_CODEABLE_REFERENCE])) {
                        $errs[self::FIELD_VALUE_CODEABLE_REFERENCE] = [];
                    }
                    $errs[self::FIELD_VALUE_CODEABLE_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_CODING])) {
            $v = $this->getValueCoding();
            foreach($validationRules[self::FIELD_VALUE_CODING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_CODING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_CODING])) {
                        $errs[self::FIELD_VALUE_CODING] = [];
                    }
                    $errs[self::FIELD_VALUE_CODING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_CONTACT_POINT])) {
            $v = $this->getValueContactPoint();
            foreach($validationRules[self::FIELD_VALUE_CONTACT_POINT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_CONTACT_POINT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_CONTACT_POINT])) {
                        $errs[self::FIELD_VALUE_CONTACT_POINT] = [];
                    }
                    $errs[self::FIELD_VALUE_CONTACT_POINT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_COUNT])) {
            $v = $this->getValueCount();
            foreach($validationRules[self::FIELD_VALUE_COUNT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_COUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_COUNT])) {
                        $errs[self::FIELD_VALUE_COUNT] = [];
                    }
                    $errs[self::FIELD_VALUE_COUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_DISTANCE])) {
            $v = $this->getValueDistance();
            foreach($validationRules[self::FIELD_VALUE_DISTANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_DISTANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_DISTANCE])) {
                        $errs[self::FIELD_VALUE_DISTANCE] = [];
                    }
                    $errs[self::FIELD_VALUE_DISTANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_DURATION])) {
            $v = $this->getValueDuration();
            foreach($validationRules[self::FIELD_VALUE_DURATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_DURATION])) {
                        $errs[self::FIELD_VALUE_DURATION] = [];
                    }
                    $errs[self::FIELD_VALUE_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_HUMAN_NAME])) {
            $v = $this->getValueHumanName();
            foreach($validationRules[self::FIELD_VALUE_HUMAN_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_HUMAN_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_HUMAN_NAME])) {
                        $errs[self::FIELD_VALUE_HUMAN_NAME] = [];
                    }
                    $errs[self::FIELD_VALUE_HUMAN_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_IDENTIFIER])) {
            $v = $this->getValueIdentifier();
            foreach($validationRules[self::FIELD_VALUE_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_IDENTIFIER])) {
                        $errs[self::FIELD_VALUE_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_VALUE_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_MONEY])) {
            $v = $this->getValueMoney();
            foreach($validationRules[self::FIELD_VALUE_MONEY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_MONEY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_MONEY])) {
                        $errs[self::FIELD_VALUE_MONEY] = [];
                    }
                    $errs[self::FIELD_VALUE_MONEY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_PERIOD])) {
            $v = $this->getValuePeriod();
            foreach($validationRules[self::FIELD_VALUE_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_PERIOD, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_QUANTITY, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_RANGE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_RATIO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_RATIO])) {
                        $errs[self::FIELD_VALUE_RATIO] = [];
                    }
                    $errs[self::FIELD_VALUE_RATIO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_RATIO_RANGE])) {
            $v = $this->getValueRatioRange();
            foreach($validationRules[self::FIELD_VALUE_RATIO_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_RATIO_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_RATIO_RANGE])) {
                        $errs[self::FIELD_VALUE_RATIO_RANGE] = [];
                    }
                    $errs[self::FIELD_VALUE_RATIO_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_REFERENCE])) {
            $v = $this->getValueReference();
            foreach($validationRules[self::FIELD_VALUE_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_REFERENCE])) {
                        $errs[self::FIELD_VALUE_REFERENCE] = [];
                    }
                    $errs[self::FIELD_VALUE_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_SAMPLED_DATA])) {
            $v = $this->getValueSampledData();
            foreach($validationRules[self::FIELD_VALUE_SAMPLED_DATA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_SAMPLED_DATA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_SAMPLED_DATA])) {
                        $errs[self::FIELD_VALUE_SAMPLED_DATA] = [];
                    }
                    $errs[self::FIELD_VALUE_SAMPLED_DATA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_SIGNATURE])) {
            $v = $this->getValueSignature();
            foreach($validationRules[self::FIELD_VALUE_SIGNATURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_SIGNATURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_SIGNATURE])) {
                        $errs[self::FIELD_VALUE_SIGNATURE] = [];
                    }
                    $errs[self::FIELD_VALUE_SIGNATURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_TIMING])) {
            $v = $this->getValueTiming();
            foreach($validationRules[self::FIELD_VALUE_TIMING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_TIMING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_TIMING])) {
                        $errs[self::FIELD_VALUE_TIMING] = [];
                    }
                    $errs[self::FIELD_VALUE_TIMING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_CONTACT_DETAIL])) {
            $v = $this->getValueContactDetail();
            foreach($validationRules[self::FIELD_VALUE_CONTACT_DETAIL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_CONTACT_DETAIL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_CONTACT_DETAIL])) {
                        $errs[self::FIELD_VALUE_CONTACT_DETAIL] = [];
                    }
                    $errs[self::FIELD_VALUE_CONTACT_DETAIL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_DATA_REQUIREMENT])) {
            $v = $this->getValueDataRequirement();
            foreach($validationRules[self::FIELD_VALUE_DATA_REQUIREMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_DATA_REQUIREMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_DATA_REQUIREMENT])) {
                        $errs[self::FIELD_VALUE_DATA_REQUIREMENT] = [];
                    }
                    $errs[self::FIELD_VALUE_DATA_REQUIREMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_EXPRESSION])) {
            $v = $this->getValueExpression();
            foreach($validationRules[self::FIELD_VALUE_EXPRESSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_EXPRESSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_EXPRESSION])) {
                        $errs[self::FIELD_VALUE_EXPRESSION] = [];
                    }
                    $errs[self::FIELD_VALUE_EXPRESSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_PARAMETER_DEFINITION])) {
            $v = $this->getValueParameterDefinition();
            foreach($validationRules[self::FIELD_VALUE_PARAMETER_DEFINITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_PARAMETER_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_PARAMETER_DEFINITION])) {
                        $errs[self::FIELD_VALUE_PARAMETER_DEFINITION] = [];
                    }
                    $errs[self::FIELD_VALUE_PARAMETER_DEFINITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_RELATED_ARTIFACT])) {
            $v = $this->getValueRelatedArtifact();
            foreach($validationRules[self::FIELD_VALUE_RELATED_ARTIFACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_RELATED_ARTIFACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_RELATED_ARTIFACT])) {
                        $errs[self::FIELD_VALUE_RELATED_ARTIFACT] = [];
                    }
                    $errs[self::FIELD_VALUE_RELATED_ARTIFACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_TRIGGER_DEFINITION])) {
            $v = $this->getValueTriggerDefinition();
            foreach($validationRules[self::FIELD_VALUE_TRIGGER_DEFINITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_TRIGGER_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_TRIGGER_DEFINITION])) {
                        $errs[self::FIELD_VALUE_TRIGGER_DEFINITION] = [];
                    }
                    $errs[self::FIELD_VALUE_TRIGGER_DEFINITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_USAGE_CONTEXT])) {
            $v = $this->getValueUsageContext();
            foreach($validationRules[self::FIELD_VALUE_USAGE_CONTEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_USAGE_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_USAGE_CONTEXT])) {
                        $errs[self::FIELD_VALUE_USAGE_CONTEXT] = [];
                    }
                    $errs[self::FIELD_VALUE_USAGE_CONTEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_AVAILABILITY])) {
            $v = $this->getValueAvailability();
            foreach($validationRules[self::FIELD_VALUE_AVAILABILITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_AVAILABILITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_AVAILABILITY])) {
                        $errs[self::FIELD_VALUE_AVAILABILITY] = [];
                    }
                    $errs[self::FIELD_VALUE_AVAILABILITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_EXTENDED_CONTACT_DETAIL])) {
            $v = $this->getValueExtendedContactDetail();
            foreach($validationRules[self::FIELD_VALUE_EXTENDED_CONTACT_DETAIL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_EXTENDED_CONTACT_DETAIL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_EXTENDED_CONTACT_DETAIL])) {
                        $errs[self::FIELD_VALUE_EXTENDED_CONTACT_DETAIL] = [];
                    }
                    $errs[self::FIELD_VALUE_EXTENDED_CONTACT_DETAIL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_DOSAGE])) {
            $v = $this->getValueDosage();
            foreach($validationRules[self::FIELD_VALUE_DOSAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_DOSAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_DOSAGE])) {
                        $errs[self::FIELD_VALUE_DOSAGE] = [];
                    }
                    $errs[self::FIELD_VALUE_DOSAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_META])) {
            $v = $this->getValueMeta();
            foreach($validationRules[self::FIELD_VALUE_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_META])) {
                        $errs[self::FIELD_VALUE_META] = [];
                    }
                    $errs[self::FIELD_VALUE_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_TYPE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRElementDefinition\FHIRElementDefinitionExample $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRElementDefinition\FHIRElementDefinitionExample
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
        } else if (!($type instanceof FHIRElementDefinitionExample)) {
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
            if (self::FIELD_LABEL === $childName) {
                $type->setLabel(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALUE_BASE_64BINARY === $childName) {
                $type->setValueBase64Binary(FHIRBase64Binary::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALUE_BOOLEAN === $childName) {
                $type->setValueBoolean(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALUE_CANONICAL === $childName) {
                $type->setValueCanonical(FHIRCanonical::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALUE_CODE === $childName) {
                $type->setValueCode(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALUE_DATE === $childName) {
                $type->setValueDate(FHIRDate::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALUE_DATE_TIME === $childName) {
                $type->setValueDateTime(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALUE_DECIMAL === $childName) {
                $type->setValueDecimal(FHIRDecimal::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALUE_ID === $childName) {
                $type->setValueId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALUE_INSTANT === $childName) {
                $type->setValueInstant(FHIRInstant::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALUE_INTEGER === $childName) {
                $type->setValueInteger(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALUE_INTEGER_64 === $childName) {
                $type->setValueInteger64(FHIRInteger64::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALUE_MARKDOWN === $childName) {
                $type->setValueMarkdown(FHIRMarkdown::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALUE_OID === $childName) {
                $type->setValueOid(FHIROid::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALUE_POSITIVE_INT === $childName) {
                $type->setValuePositiveInt(FHIRPositiveInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALUE_STRING === $childName) {
                $type->setValueString(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALUE_TIME === $childName) {
                $type->setValueTime(FHIRTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALUE_UNSIGNED_INT === $childName) {
                $type->setValueUnsignedInt(FHIRUnsignedInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALUE_URI === $childName) {
                $type->setValueUri(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALUE_URL === $childName) {
                $type->setValueUrl(FHIRUrl::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALUE_UUID === $childName) {
                $type->setValueUuid(FHIRUuid::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALUE_ADDRESS === $childName) {
                $type->setValueAddress(FHIRAddress::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_AGE === $childName) {
                $type->setValueAge(FHIRAge::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_ANNOTATION === $childName) {
                $type->setValueAnnotation(FHIRAnnotation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_ATTACHMENT === $childName) {
                $type->setValueAttachment(FHIRAttachment::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_CODEABLE_CONCEPT === $childName) {
                $type->setValueCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_CODEABLE_REFERENCE === $childName) {
                $type->setValueCodeableReference(FHIRCodeableReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_CODING === $childName) {
                $type->setValueCoding(FHIRCoding::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_CONTACT_POINT === $childName) {
                $type->setValueContactPoint(FHIRContactPoint::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_COUNT === $childName) {
                $type->setValueCount(FHIRCount::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_DISTANCE === $childName) {
                $type->setValueDistance(FHIRDistance::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_DURATION === $childName) {
                $type->setValueDuration(FHIRDuration::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_HUMAN_NAME === $childName) {
                $type->setValueHumanName(FHIRHumanName::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_IDENTIFIER === $childName) {
                $type->setValueIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_MONEY === $childName) {
                $type->setValueMoney(FHIRMoney::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_PERIOD === $childName) {
                $type->setValuePeriod(FHIRPeriod::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_QUANTITY === $childName) {
                $type->setValueQuantity(FHIRQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_RANGE === $childName) {
                $type->setValueRange(FHIRRange::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_RATIO === $childName) {
                $type->setValueRatio(FHIRRatio::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_RATIO_RANGE === $childName) {
                $type->setValueRatioRange(FHIRRatioRange::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_REFERENCE === $childName) {
                $type->setValueReference(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_SAMPLED_DATA === $childName) {
                $type->setValueSampledData(FHIRSampledData::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_SIGNATURE === $childName) {
                $type->setValueSignature(FHIRSignature::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_TIMING === $childName) {
                $type->setValueTiming(FHIRTiming::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_CONTACT_DETAIL === $childName) {
                $type->setValueContactDetail(FHIRContactDetail::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_DATA_REQUIREMENT === $childName) {
                $type->setValueDataRequirement(FHIRDataRequirement::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_EXPRESSION === $childName) {
                $type->setValueExpression(FHIRExpression::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_PARAMETER_DEFINITION === $childName) {
                $type->setValueParameterDefinition(FHIRParameterDefinition::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_RELATED_ARTIFACT === $childName) {
                $type->setValueRelatedArtifact(FHIRRelatedArtifact::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_TRIGGER_DEFINITION === $childName) {
                $type->setValueTriggerDefinition(FHIRTriggerDefinition::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_USAGE_CONTEXT === $childName) {
                $type->setValueUsageContext(FHIRUsageContext::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_AVAILABILITY === $childName) {
                $type->setValueAvailability(FHIRAvailability::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_EXTENDED_CONTACT_DETAIL === $childName) {
                $type->setValueExtendedContactDetail(FHIRExtendedContactDetail::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_DOSAGE === $childName) {
                $type->setValueDosage(FHIRDosage::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_META === $childName) {
                $type->setValueMeta(FHIRMeta::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_LABEL])) {
            $pt = $type->getLabel();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LABEL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLabel((string)$attributes[self::FIELD_LABEL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_BASE_64BINARY])) {
            $pt = $type->getValueBase64Binary();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALUE_BASE_64BINARY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueBase64Binary((string)$attributes[self::FIELD_VALUE_BASE_64BINARY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_BOOLEAN])) {
            $pt = $type->getValueBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALUE_BOOLEAN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueBoolean((string)$attributes[self::FIELD_VALUE_BOOLEAN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_CANONICAL])) {
            $pt = $type->getValueCanonical();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALUE_CANONICAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueCanonical((string)$attributes[self::FIELD_VALUE_CANONICAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_CODE])) {
            $pt = $type->getValueCode();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALUE_CODE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueCode((string)$attributes[self::FIELD_VALUE_CODE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_DATE])) {
            $pt = $type->getValueDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALUE_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueDate((string)$attributes[self::FIELD_VALUE_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_DATE_TIME])) {
            $pt = $type->getValueDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALUE_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueDateTime((string)$attributes[self::FIELD_VALUE_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_DECIMAL])) {
            $pt = $type->getValueDecimal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALUE_DECIMAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueDecimal((string)$attributes[self::FIELD_VALUE_DECIMAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_ID])) {
            $pt = $type->getValueId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALUE_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueId((string)$attributes[self::FIELD_VALUE_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_INSTANT])) {
            $pt = $type->getValueInstant();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALUE_INSTANT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueInstant((string)$attributes[self::FIELD_VALUE_INSTANT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_INTEGER])) {
            $pt = $type->getValueInteger();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALUE_INTEGER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueInteger((string)$attributes[self::FIELD_VALUE_INTEGER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_INTEGER_64])) {
            $pt = $type->getValueInteger64();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALUE_INTEGER_64], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueInteger64((string)$attributes[self::FIELD_VALUE_INTEGER_64], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_MARKDOWN])) {
            $pt = $type->getValueMarkdown();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALUE_MARKDOWN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueMarkdown((string)$attributes[self::FIELD_VALUE_MARKDOWN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_OID])) {
            $pt = $type->getValueOid();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALUE_OID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueOid((string)$attributes[self::FIELD_VALUE_OID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_POSITIVE_INT])) {
            $pt = $type->getValuePositiveInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALUE_POSITIVE_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValuePositiveInt((string)$attributes[self::FIELD_VALUE_POSITIVE_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_STRING])) {
            $pt = $type->getValueString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALUE_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueString((string)$attributes[self::FIELD_VALUE_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_TIME])) {
            $pt = $type->getValueTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALUE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueTime((string)$attributes[self::FIELD_VALUE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_UNSIGNED_INT])) {
            $pt = $type->getValueUnsignedInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALUE_UNSIGNED_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueUnsignedInt((string)$attributes[self::FIELD_VALUE_UNSIGNED_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_URI])) {
            $pt = $type->getValueUri();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALUE_URI], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueUri((string)$attributes[self::FIELD_VALUE_URI], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_URL])) {
            $pt = $type->getValueUrl();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALUE_URL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueUrl((string)$attributes[self::FIELD_VALUE_URL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALUE_UUID])) {
            $pt = $type->getValueUuid();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALUE_UUID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueUuid((string)$attributes[self::FIELD_VALUE_UUID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'ElementDefinitionExample', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_LABEL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getLabel())) {
            $xw->writeAttribute(self::FIELD_LABEL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_BASE_64BINARY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValueBase64Binary())) {
            $xw->writeAttribute(self::FIELD_VALUE_BASE_64BINARY, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_BOOLEAN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValueBoolean())) {
            $xw->writeAttribute(self::FIELD_VALUE_BOOLEAN, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_CANONICAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValueCanonical())) {
            $xw->writeAttribute(self::FIELD_VALUE_CANONICAL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_CODE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValueCode())) {
            $xw->writeAttribute(self::FIELD_VALUE_CODE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValueDate())) {
            $xw->writeAttribute(self::FIELD_VALUE_DATE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValueDateTime())) {
            $xw->writeAttribute(self::FIELD_VALUE_DATE_TIME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_DECIMAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValueDecimal())) {
            $xw->writeAttribute(self::FIELD_VALUE_DECIMAL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValueId())) {
            $xw->writeAttribute(self::FIELD_VALUE_ID, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_INSTANT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValueInstant())) {
            $xw->writeAttribute(self::FIELD_VALUE_INSTANT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_INTEGER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValueInteger())) {
            $xw->writeAttribute(self::FIELD_VALUE_INTEGER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_INTEGER_64] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValueInteger64())) {
            $xw->writeAttribute(self::FIELD_VALUE_INTEGER_64, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_MARKDOWN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValueMarkdown())) {
            $xw->writeAttribute(self::FIELD_VALUE_MARKDOWN, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_OID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValueOid())) {
            $xw->writeAttribute(self::FIELD_VALUE_OID, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_POSITIVE_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValuePositiveInt())) {
            $xw->writeAttribute(self::FIELD_VALUE_POSITIVE_INT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValueString())) {
            $xw->writeAttribute(self::FIELD_VALUE_STRING, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValueTime())) {
            $xw->writeAttribute(self::FIELD_VALUE_TIME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_UNSIGNED_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValueUnsignedInt())) {
            $xw->writeAttribute(self::FIELD_VALUE_UNSIGNED_INT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_URI] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValueUri())) {
            $xw->writeAttribute(self::FIELD_VALUE_URI, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_URL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValueUrl())) {
            $xw->writeAttribute(self::FIELD_VALUE_URL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_UUID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValueUuid())) {
            $xw->writeAttribute(self::FIELD_VALUE_UUID, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_primitiveXmlLocations[self::FIELD_LABEL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getLabel())) {
            $xw->startElement(self::FIELD_LABEL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_BASE_64BINARY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValueBase64Binary())) {
            $xw->startElement(self::FIELD_VALUE_BASE_64BINARY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_BOOLEAN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValueBoolean())) {
            $xw->startElement(self::FIELD_VALUE_BOOLEAN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_CANONICAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValueCanonical())) {
            $xw->startElement(self::FIELD_VALUE_CANONICAL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_CODE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValueCode())) {
            $xw->startElement(self::FIELD_VALUE_CODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValueDate())) {
            $xw->startElement(self::FIELD_VALUE_DATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValueDateTime())) {
            $xw->startElement(self::FIELD_VALUE_DATE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_DECIMAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValueDecimal())) {
            $xw->startElement(self::FIELD_VALUE_DECIMAL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValueId())) {
            $xw->startElement(self::FIELD_VALUE_ID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_INSTANT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValueInstant())) {
            $xw->startElement(self::FIELD_VALUE_INSTANT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_INTEGER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValueInteger())) {
            $xw->startElement(self::FIELD_VALUE_INTEGER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_INTEGER_64] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValueInteger64())) {
            $xw->startElement(self::FIELD_VALUE_INTEGER_64);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_MARKDOWN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValueMarkdown())) {
            $xw->startElement(self::FIELD_VALUE_MARKDOWN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_OID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValueOid())) {
            $xw->startElement(self::FIELD_VALUE_OID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_POSITIVE_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValuePositiveInt())) {
            $xw->startElement(self::FIELD_VALUE_POSITIVE_INT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValueString())) {
            $xw->startElement(self::FIELD_VALUE_STRING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValueTime())) {
            $xw->startElement(self::FIELD_VALUE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_UNSIGNED_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValueUnsignedInt())) {
            $xw->startElement(self::FIELD_VALUE_UNSIGNED_INT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_URI] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValueUri())) {
            $xw->startElement(self::FIELD_VALUE_URI);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_URL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValueUrl())) {
            $xw->startElement(self::FIELD_VALUE_URL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VALUE_UUID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValueUuid())) {
            $xw->startElement(self::FIELD_VALUE_UUID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueAddress())) {
            $xw->startElement(self::FIELD_VALUE_ADDRESS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueAge())) {
            $xw->startElement(self::FIELD_VALUE_AGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueAnnotation())) {
            $xw->startElement(self::FIELD_VALUE_ANNOTATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueAttachment())) {
            $xw->startElement(self::FIELD_VALUE_ATTACHMENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueCodeableConcept())) {
            $xw->startElement(self::FIELD_VALUE_CODEABLE_CONCEPT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueCodeableReference())) {
            $xw->startElement(self::FIELD_VALUE_CODEABLE_REFERENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueCoding())) {
            $xw->startElement(self::FIELD_VALUE_CODING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueContactPoint())) {
            $xw->startElement(self::FIELD_VALUE_CONTACT_POINT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueCount())) {
            $xw->startElement(self::FIELD_VALUE_COUNT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueDistance())) {
            $xw->startElement(self::FIELD_VALUE_DISTANCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueDuration())) {
            $xw->startElement(self::FIELD_VALUE_DURATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueHumanName())) {
            $xw->startElement(self::FIELD_VALUE_HUMAN_NAME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueIdentifier())) {
            $xw->startElement(self::FIELD_VALUE_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueMoney())) {
            $xw->startElement(self::FIELD_VALUE_MONEY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValuePeriod())) {
            $xw->startElement(self::FIELD_VALUE_PERIOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueQuantity())) {
            $xw->startElement(self::FIELD_VALUE_QUANTITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueRange())) {
            $xw->startElement(self::FIELD_VALUE_RANGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueRatio())) {
            $xw->startElement(self::FIELD_VALUE_RATIO);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueRatioRange())) {
            $xw->startElement(self::FIELD_VALUE_RATIO_RANGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueReference())) {
            $xw->startElement(self::FIELD_VALUE_REFERENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueSampledData())) {
            $xw->startElement(self::FIELD_VALUE_SAMPLED_DATA);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueSignature())) {
            $xw->startElement(self::FIELD_VALUE_SIGNATURE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueTiming())) {
            $xw->startElement(self::FIELD_VALUE_TIMING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueContactDetail())) {
            $xw->startElement(self::FIELD_VALUE_CONTACT_DETAIL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueDataRequirement())) {
            $xw->startElement(self::FIELD_VALUE_DATA_REQUIREMENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueExpression())) {
            $xw->startElement(self::FIELD_VALUE_EXPRESSION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueParameterDefinition())) {
            $xw->startElement(self::FIELD_VALUE_PARAMETER_DEFINITION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueRelatedArtifact())) {
            $xw->startElement(self::FIELD_VALUE_RELATED_ARTIFACT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueTriggerDefinition())) {
            $xw->startElement(self::FIELD_VALUE_TRIGGER_DEFINITION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueUsageContext())) {
            $xw->startElement(self::FIELD_VALUE_USAGE_CONTEXT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueAvailability())) {
            $xw->startElement(self::FIELD_VALUE_AVAILABILITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueExtendedContactDetail())) {
            $xw->startElement(self::FIELD_VALUE_EXTENDED_CONTACT_DETAIL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueDosage())) {
            $xw->startElement(self::FIELD_VALUE_DOSAGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValueMeta())) {
            $xw->startElement(self::FIELD_VALUE_META);
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
        if (null !== ($v = $this->getLabel())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LABEL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LABEL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValueBase64Binary())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE_BASE_64BINARY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBase64Binary::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_BASE_64BINARY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValueBoolean())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE_BOOLEAN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_BOOLEAN_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValueCanonical())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE_CANONICAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCanonical::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_CANONICAL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValueCode())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE_CODE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_CODE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValueDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDate::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValueDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValueDecimal())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE_DECIMAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_DECIMAL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValueId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRId::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_ID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValueInstant())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE_INSTANT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInstant::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_INSTANT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValueInteger())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE_INTEGER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_INTEGER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValueInteger64())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE_INTEGER_64} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger64::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_INTEGER_64_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValueMarkdown())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE_MARKDOWN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_MARKDOWN_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValueOid())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE_OID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIROid::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_OID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValuePositiveInt())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE_POSITIVE_INT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_POSITIVE_INT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValueString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_STRING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValueTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValueUnsignedInt())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE_UNSIGNED_INT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_UNSIGNED_INT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValueUri())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE_URI} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_URI_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValueUrl())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE_URL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUrl::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_URL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValueUuid())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE_UUID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUuid::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_UUID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValueAddress())) {
            $out->{self::FIELD_VALUE_ADDRESS} = $v;
        }
        if (null !== ($v = $this->getValueAge())) {
            $out->{self::FIELD_VALUE_AGE} = $v;
        }
        if (null !== ($v = $this->getValueAnnotation())) {
            $out->{self::FIELD_VALUE_ANNOTATION} = $v;
        }
        if (null !== ($v = $this->getValueAttachment())) {
            $out->{self::FIELD_VALUE_ATTACHMENT} = $v;
        }
        if (null !== ($v = $this->getValueCodeableConcept())) {
            $out->{self::FIELD_VALUE_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getValueCodeableReference())) {
            $out->{self::FIELD_VALUE_CODEABLE_REFERENCE} = $v;
        }
        if (null !== ($v = $this->getValueCoding())) {
            $out->{self::FIELD_VALUE_CODING} = $v;
        }
        if (null !== ($v = $this->getValueContactPoint())) {
            $out->{self::FIELD_VALUE_CONTACT_POINT} = $v;
        }
        if (null !== ($v = $this->getValueCount())) {
            $out->{self::FIELD_VALUE_COUNT} = $v;
        }
        if (null !== ($v = $this->getValueDistance())) {
            $out->{self::FIELD_VALUE_DISTANCE} = $v;
        }
        if (null !== ($v = $this->getValueDuration())) {
            $out->{self::FIELD_VALUE_DURATION} = $v;
        }
        if (null !== ($v = $this->getValueHumanName())) {
            $out->{self::FIELD_VALUE_HUMAN_NAME} = $v;
        }
        if (null !== ($v = $this->getValueIdentifier())) {
            $out->{self::FIELD_VALUE_IDENTIFIER} = $v;
        }
        if (null !== ($v = $this->getValueMoney())) {
            $out->{self::FIELD_VALUE_MONEY} = $v;
        }
        if (null !== ($v = $this->getValuePeriod())) {
            $out->{self::FIELD_VALUE_PERIOD} = $v;
        }
        if (null !== ($v = $this->getValueQuantity())) {
            $out->{self::FIELD_VALUE_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getValueRange())) {
            $out->{self::FIELD_VALUE_RANGE} = $v;
        }
        if (null !== ($v = $this->getValueRatio())) {
            $out->{self::FIELD_VALUE_RATIO} = $v;
        }
        if (null !== ($v = $this->getValueRatioRange())) {
            $out->{self::FIELD_VALUE_RATIO_RANGE} = $v;
        }
        if (null !== ($v = $this->getValueReference())) {
            $out->{self::FIELD_VALUE_REFERENCE} = $v;
        }
        if (null !== ($v = $this->getValueSampledData())) {
            $out->{self::FIELD_VALUE_SAMPLED_DATA} = $v;
        }
        if (null !== ($v = $this->getValueSignature())) {
            $out->{self::FIELD_VALUE_SIGNATURE} = $v;
        }
        if (null !== ($v = $this->getValueTiming())) {
            $out->{self::FIELD_VALUE_TIMING} = $v;
        }
        if (null !== ($v = $this->getValueContactDetail())) {
            $out->{self::FIELD_VALUE_CONTACT_DETAIL} = $v;
        }
        if (null !== ($v = $this->getValueDataRequirement())) {
            $out->{self::FIELD_VALUE_DATA_REQUIREMENT} = $v;
        }
        if (null !== ($v = $this->getValueExpression())) {
            $out->{self::FIELD_VALUE_EXPRESSION} = $v;
        }
        if (null !== ($v = $this->getValueParameterDefinition())) {
            $out->{self::FIELD_VALUE_PARAMETER_DEFINITION} = $v;
        }
        if (null !== ($v = $this->getValueRelatedArtifact())) {
            $out->{self::FIELD_VALUE_RELATED_ARTIFACT} = $v;
        }
        if (null !== ($v = $this->getValueTriggerDefinition())) {
            $out->{self::FIELD_VALUE_TRIGGER_DEFINITION} = $v;
        }
        if (null !== ($v = $this->getValueUsageContext())) {
            $out->{self::FIELD_VALUE_USAGE_CONTEXT} = $v;
        }
        if (null !== ($v = $this->getValueAvailability())) {
            $out->{self::FIELD_VALUE_AVAILABILITY} = $v;
        }
        if (null !== ($v = $this->getValueExtendedContactDetail())) {
            $out->{self::FIELD_VALUE_EXTENDED_CONTACT_DETAIL} = $v;
        }
        if (null !== ($v = $this->getValueDosage())) {
            $out->{self::FIELD_VALUE_DOSAGE} = $v;
        }
        if (null !== ($v = $this->getValueMeta())) {
            $out->{self::FIELD_VALUE_META} = $v;
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