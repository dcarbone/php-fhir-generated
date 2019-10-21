<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 23:43+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRAge;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRCount;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDistance;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\R4\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Optional Extension Element - found in all resources.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRExtension
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement
 */
class FHIRExtension extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_EXTENSION;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_URL = 'url';
    const FIELD_VALUE_ADDRESS = 'valueAddress';
    const FIELD_VALUE_AGE = 'valueAge';
    const FIELD_VALUE_ANNOTATION = 'valueAnnotation';
    const FIELD_VALUE_ATTACHMENT = 'valueAttachment';
    const FIELD_VALUE_BASE_64BINARY = 'valueBase64Binary';
    const FIELD_VALUE_BASE_64BINARY_EXT = '_valueBase64Binary';
    const FIELD_VALUE_BOOLEAN = 'valueBoolean';
    const FIELD_VALUE_BOOLEAN_EXT = '_valueBoolean';
    const FIELD_VALUE_CANONICAL = 'valueCanonical';
    const FIELD_VALUE_CANONICAL_EXT = '_valueCanonical';
    const FIELD_VALUE_CODE = 'valueCode';
    const FIELD_VALUE_CODE_EXT = '_valueCode';
    const FIELD_VALUE_CODEABLE_CONCEPT = 'valueCodeableConcept';
    const FIELD_VALUE_CODING = 'valueCoding';
    const FIELD_VALUE_CONTACT_DETAIL = 'valueContactDetail';
    const FIELD_VALUE_CONTACT_POINT = 'valueContactPoint';
    const FIELD_VALUE_CONTACT_POINT_EXT = '_valueContactPoint';
    const FIELD_VALUE_CONTRIBUTOR = 'valueContributor';
    const FIELD_VALUE_COUNT = 'valueCount';
    const FIELD_VALUE_DATA_REQUIREMENT = 'valueDataRequirement';
    const FIELD_VALUE_DATE = 'valueDate';
    const FIELD_VALUE_DATE_EXT = '_valueDate';
    const FIELD_VALUE_DATE_TIME = 'valueDateTime';
    const FIELD_VALUE_DATE_TIME_EXT = '_valueDateTime';
    const FIELD_VALUE_DECIMAL = 'valueDecimal';
    const FIELD_VALUE_DECIMAL_EXT = '_valueDecimal';
    const FIELD_VALUE_DISTANCE = 'valueDistance';
    const FIELD_VALUE_DOSAGE = 'valueDosage';
    const FIELD_VALUE_DURATION = 'valueDuration';
    const FIELD_VALUE_EXPRESSION = 'valueExpression';
    const FIELD_VALUE_HUMAN_NAME = 'valueHumanName';
    const FIELD_VALUE_ID = 'valueId';
    const FIELD_VALUE_ID_EXT = '_valueId';
    const FIELD_VALUE_IDENTIFIER = 'valueIdentifier';
    const FIELD_VALUE_IDENTIFIER_EXT = '_valueIdentifier';
    const FIELD_VALUE_INSTANT = 'valueInstant';
    const FIELD_VALUE_INSTANT_EXT = '_valueInstant';
    const FIELD_VALUE_INTEGER = 'valueInteger';
    const FIELD_VALUE_INTEGER_EXT = '_valueInteger';
    const FIELD_VALUE_MARKDOWN = 'valueMarkdown';
    const FIELD_VALUE_MARKDOWN_EXT = '_valueMarkdown';
    const FIELD_VALUE_MONEY = 'valueMoney';
    const FIELD_VALUE_MONEY_EXT = '_valueMoney';
    const FIELD_VALUE_OID = 'valueOid';
    const FIELD_VALUE_OID_EXT = '_valueOid';
    const FIELD_VALUE_PARAMETER_DEFINITION = 'valueParameterDefinition';
    const FIELD_VALUE_PERIOD = 'valuePeriod';
    const FIELD_VALUE_POSITIVE_INT = 'valuePositiveInt';
    const FIELD_VALUE_POSITIVE_INT_EXT = '_valuePositiveInt';
    const FIELD_VALUE_QUANTITY = 'valueQuantity';
    const FIELD_VALUE_QUANTITY_EXT = '_valueQuantity';
    const FIELD_VALUE_RANGE = 'valueRange';
    const FIELD_VALUE_RATIO = 'valueRatio';
    const FIELD_VALUE_REFERENCE = 'valueReference';
    const FIELD_VALUE_RELATED_ARTIFACT = 'valueRelatedArtifact';
    const FIELD_VALUE_SAMPLED_DATA = 'valueSampledData';
    const FIELD_VALUE_SIGNATURE = 'valueSignature';
    const FIELD_VALUE_STRING = 'valueString';
    const FIELD_VALUE_STRING_EXT = '_valueString';
    const FIELD_VALUE_TIME = 'valueTime';
    const FIELD_VALUE_TIME_EXT = '_valueTime';
    const FIELD_VALUE_TIMING = 'valueTiming';
    const FIELD_VALUE_TRIGGER_DEFINITION = 'valueTriggerDefinition';
    const FIELD_VALUE_UNSIGNED_INT = 'valueUnsignedInt';
    const FIELD_VALUE_UNSIGNED_INT_EXT = '_valueUnsignedInt';
    const FIELD_VALUE_URI = 'valueUri';
    const FIELD_VALUE_URI_EXT = '_valueUri';
    const FIELD_VALUE_URL = 'valueUrl';
    const FIELD_VALUE_URL_EXT = '_valueUrl';
    const FIELD_VALUE_USAGE_CONTEXT = 'valueUsageContext';
    const FIELD_VALUE_UUID = 'valueUuid';
    const FIELD_VALUE_UUID_EXT = '_valueUuid';

    /**
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRUriPrimitive
     */
    private $url = null;
    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAddress
     */
    private $valueAddress = null;
    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRAge
     */
    private $valueAge = null;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation
     */
    private $valueAnnotation = null;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment
     */
    private $valueAttachment = null;
    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBase64Binary
     */
    private $valueBase64Binary = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    private $valueBoolean = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
     */
    private $valueCanonical = null;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    private $valueCode = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $valueCodeableConcept = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding
     */
    private $valueCoding = null;
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail
     */
    private $valueContactDetail = null;
    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint
     */
    private $valueContactPoint = null;
    /**
     * A contributor to the content of a knowledge asset, including authors, editors,
     * reviewers, and endorsers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContributor
     */
    private $valueContributor = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRCount
     */
    private $valueCount = null;
    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement
     */
    private $valueDataRequirement = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    private $valueDate = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    private $valueDateTime = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    private $valueDecimal = null;
    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDistance
     */
    private $valueDistance = null;
    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage
     */
    private $valueDosage = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    private $valueDuration = null;
    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExpression
     */
    private $valueExpression = null;
    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRHumanName
     */
    private $valueHumanName = null;
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId
     */
    private $valueId = null;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    private $valueIdentifier = null;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant
     */
    private $valueInstant = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    private $valueInteger = null;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    private $valueMarkdown = null;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney
     */
    private $valueMoney = null;
    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIROid
     */
    private $valueOid = null;
    /**
     * The parameters to the module. This collection specifies both the input and
     * output parameters. Input parameters are provided by the caller as part of the
     * $evaluate operation. Output parameters are included in the GuidanceResponse.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRParameterDefinition
     */
    private $valueParameterDefinition = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    private $valuePeriod = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    private $valuePositiveInt = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    private $valueQuantity = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    private $valueRange = null;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio
     */
    private $valueRatio = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $valueReference = null;
    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRelatedArtifact
     */
    private $valueRelatedArtifact = null;
    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSampledData
     */
    private $valueSampledData = null;
    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature
     */
    private $valueSignature = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $valueString = null;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime
     */
    private $valueTime = null;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    private $valueTiming = null;
    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTriggerDefinition
     */
    private $valueTriggerDefinition = null;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt
     */
    private $valueUnsignedInt = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    private $valueUri = null;
    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUrl
     */
    private $valueUrl = null;
    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext
     */
    private $valueUsageContext = null;
    /**
     * A UUID, represented as a URI
     * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUuid
     */
    private $valueUuid = null;

    /**
     * FHIRExtension Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExtension::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_URL])) {
            $this->setUrl($data[self::FIELD_URL]);
        }
        if (isset($data[self::FIELD_VALUE_ADDRESS])) {
            if ($data[self::FIELD_VALUE_ADDRESS] instanceof FHIRAddress) {
                $this->setValueAddress($data[self::FIELD_VALUE_ADDRESS]);
            } else {
                $this->setValueAddress(new FHIRAddress($data[self::FIELD_VALUE_ADDRESS]));
            }
        }
        if (isset($data[self::FIELD_VALUE_AGE])) {
            if ($data[self::FIELD_VALUE_AGE] instanceof FHIRAge) {
                $this->setValueAge($data[self::FIELD_VALUE_AGE]);
            } else {
                $this->setValueAge(new FHIRAge($data[self::FIELD_VALUE_AGE]));
            }
        }
        if (isset($data[self::FIELD_VALUE_ANNOTATION])) {
            if ($data[self::FIELD_VALUE_ANNOTATION] instanceof FHIRAnnotation) {
                $this->setValueAnnotation($data[self::FIELD_VALUE_ANNOTATION]);
            } else {
                $this->setValueAnnotation(new FHIRAnnotation($data[self::FIELD_VALUE_ANNOTATION]));
            }
        }
        if (isset($data[self::FIELD_VALUE_ATTACHMENT])) {
            if ($data[self::FIELD_VALUE_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setValueAttachment($data[self::FIELD_VALUE_ATTACHMENT]);
            } else {
                $this->setValueAttachment(new FHIRAttachment($data[self::FIELD_VALUE_ATTACHMENT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_BASE_64BINARY])) {
            $ext = (isset($data[self::FIELD_VALUE_BASE_64BINARY_EXT]) && is_array($data[self::FIELD_VALUE_BASE_64BINARY_EXT]))
                ? $data[self::FIELD_VALUE_BASE_64BINARY_EXT]
                : null;
            if ($data[self::FIELD_VALUE_BASE_64BINARY] instanceof FHIRBase64Binary) {
                $this->setValueBase64Binary($data[self::FIELD_VALUE_BASE_64BINARY]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_BASE_64BINARY])) {
                $this->setValueBase64Binary(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $data[self::FIELD_VALUE_BASE_64BINARY]] + $ext));
            } else {
                $this->setValueBase64Binary(new FHIRBase64Binary($data[self::FIELD_VALUE_BASE_64BINARY]));
            }
        }
        if (isset($data[self::FIELD_VALUE_BOOLEAN])) {
            $ext = (isset($data[self::FIELD_VALUE_BOOLEAN_EXT]) && is_array($data[self::FIELD_VALUE_BOOLEAN_EXT]))
                ? $data[self::FIELD_VALUE_BOOLEAN_EXT]
                : null;
            if ($data[self::FIELD_VALUE_BOOLEAN] instanceof FHIRBoolean) {
                $this->setValueBoolean($data[self::FIELD_VALUE_BOOLEAN]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_BOOLEAN])) {
                $this->setValueBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_VALUE_BOOLEAN]] + $ext));
            } else {
                $this->setValueBoolean(new FHIRBoolean($data[self::FIELD_VALUE_BOOLEAN]));
            }
        }
        if (isset($data[self::FIELD_VALUE_CANONICAL])) {
            $ext = (isset($data[self::FIELD_VALUE_CANONICAL_EXT]) && is_array($data[self::FIELD_VALUE_CANONICAL_EXT]))
                ? $data[self::FIELD_VALUE_CANONICAL_EXT]
                : null;
            if ($data[self::FIELD_VALUE_CANONICAL] instanceof FHIRCanonical) {
                $this->setValueCanonical($data[self::FIELD_VALUE_CANONICAL]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_CANONICAL])) {
                $this->setValueCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $data[self::FIELD_VALUE_CANONICAL]] + $ext));
            } else {
                $this->setValueCanonical(new FHIRCanonical($data[self::FIELD_VALUE_CANONICAL]));
            }
        }
        if (isset($data[self::FIELD_VALUE_CODE])) {
            $ext = (isset($data[self::FIELD_VALUE_CODE_EXT]) && is_array($data[self::FIELD_VALUE_CODE_EXT]))
                ? $data[self::FIELD_VALUE_CODE_EXT]
                : null;
            if ($data[self::FIELD_VALUE_CODE] instanceof FHIRCode) {
                $this->setValueCode($data[self::FIELD_VALUE_CODE]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_CODE])) {
                $this->setValueCode(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_VALUE_CODE]] + $ext));
            } else {
                $this->setValueCode(new FHIRCode($data[self::FIELD_VALUE_CODE]));
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
        if (isset($data[self::FIELD_VALUE_CONTACT_DETAIL])) {
            if ($data[self::FIELD_VALUE_CONTACT_DETAIL] instanceof FHIRContactDetail) {
                $this->setValueContactDetail($data[self::FIELD_VALUE_CONTACT_DETAIL]);
            } else {
                $this->setValueContactDetail(new FHIRContactDetail($data[self::FIELD_VALUE_CONTACT_DETAIL]));
            }
        }
        if (isset($data[self::FIELD_VALUE_CONTACT_POINT])) {
            $ext = (isset($data[self::FIELD_VALUE_CONTACT_POINT_EXT]) && is_array($data[self::FIELD_VALUE_CONTACT_POINT_EXT]))
                ? $data[self::FIELD_VALUE_CONTACT_POINT_EXT]
                : null;
            if ($data[self::FIELD_VALUE_CONTACT_POINT] instanceof FHIRContactPoint) {
                $this->setValueContactPoint($data[self::FIELD_VALUE_CONTACT_POINT]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_CONTACT_POINT])) {
                $this->setValueContactPoint(new FHIRContactPoint([FHIRContactPoint::FIELD_VALUE => $data[self::FIELD_VALUE_CONTACT_POINT]] + $ext));
            } else {
                $this->setValueContactPoint(new FHIRContactPoint($data[self::FIELD_VALUE_CONTACT_POINT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_CONTRIBUTOR])) {
            if ($data[self::FIELD_VALUE_CONTRIBUTOR] instanceof FHIRContributor) {
                $this->setValueContributor($data[self::FIELD_VALUE_CONTRIBUTOR]);
            } else {
                $this->setValueContributor(new FHIRContributor($data[self::FIELD_VALUE_CONTRIBUTOR]));
            }
        }
        if (isset($data[self::FIELD_VALUE_COUNT])) {
            if ($data[self::FIELD_VALUE_COUNT] instanceof FHIRCount) {
                $this->setValueCount($data[self::FIELD_VALUE_COUNT]);
            } else {
                $this->setValueCount(new FHIRCount($data[self::FIELD_VALUE_COUNT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_DATA_REQUIREMENT])) {
            if ($data[self::FIELD_VALUE_DATA_REQUIREMENT] instanceof FHIRDataRequirement) {
                $this->setValueDataRequirement($data[self::FIELD_VALUE_DATA_REQUIREMENT]);
            } else {
                $this->setValueDataRequirement(new FHIRDataRequirement($data[self::FIELD_VALUE_DATA_REQUIREMENT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_DATE])) {
            $ext = (isset($data[self::FIELD_VALUE_DATE_EXT]) && is_array($data[self::FIELD_VALUE_DATE_EXT]))
                ? $data[self::FIELD_VALUE_DATE_EXT]
                : null;
            if ($data[self::FIELD_VALUE_DATE] instanceof FHIRDate) {
                $this->setValueDate($data[self::FIELD_VALUE_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_DATE])) {
                $this->setValueDate(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_VALUE_DATE]] + $ext));
            } else {
                $this->setValueDate(new FHIRDate($data[self::FIELD_VALUE_DATE]));
            }
        }
        if (isset($data[self::FIELD_VALUE_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_VALUE_DATE_TIME_EXT]) && is_array($data[self::FIELD_VALUE_DATE_TIME_EXT]))
                ? $data[self::FIELD_VALUE_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_VALUE_DATE_TIME] instanceof FHIRDateTime) {
                $this->setValueDateTime($data[self::FIELD_VALUE_DATE_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_DATE_TIME])) {
                $this->setValueDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_VALUE_DATE_TIME]] + $ext));
            } else {
                $this->setValueDateTime(new FHIRDateTime($data[self::FIELD_VALUE_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_VALUE_DECIMAL])) {
            $ext = (isset($data[self::FIELD_VALUE_DECIMAL_EXT]) && is_array($data[self::FIELD_VALUE_DECIMAL_EXT]))
                ? $data[self::FIELD_VALUE_DECIMAL_EXT]
                : null;
            if ($data[self::FIELD_VALUE_DECIMAL] instanceof FHIRDecimal) {
                $this->setValueDecimal($data[self::FIELD_VALUE_DECIMAL]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_DECIMAL])) {
                $this->setValueDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_VALUE_DECIMAL]] + $ext));
            } else {
                $this->setValueDecimal(new FHIRDecimal($data[self::FIELD_VALUE_DECIMAL]));
            }
        }
        if (isset($data[self::FIELD_VALUE_DISTANCE])) {
            if ($data[self::FIELD_VALUE_DISTANCE] instanceof FHIRDistance) {
                $this->setValueDistance($data[self::FIELD_VALUE_DISTANCE]);
            } else {
                $this->setValueDistance(new FHIRDistance($data[self::FIELD_VALUE_DISTANCE]));
            }
        }
        if (isset($data[self::FIELD_VALUE_DOSAGE])) {
            if ($data[self::FIELD_VALUE_DOSAGE] instanceof FHIRDosage) {
                $this->setValueDosage($data[self::FIELD_VALUE_DOSAGE]);
            } else {
                $this->setValueDosage(new FHIRDosage($data[self::FIELD_VALUE_DOSAGE]));
            }
        }
        if (isset($data[self::FIELD_VALUE_DURATION])) {
            if ($data[self::FIELD_VALUE_DURATION] instanceof FHIRDuration) {
                $this->setValueDuration($data[self::FIELD_VALUE_DURATION]);
            } else {
                $this->setValueDuration(new FHIRDuration($data[self::FIELD_VALUE_DURATION]));
            }
        }
        if (isset($data[self::FIELD_VALUE_EXPRESSION])) {
            if ($data[self::FIELD_VALUE_EXPRESSION] instanceof FHIRExpression) {
                $this->setValueExpression($data[self::FIELD_VALUE_EXPRESSION]);
            } else {
                $this->setValueExpression(new FHIRExpression($data[self::FIELD_VALUE_EXPRESSION]));
            }
        }
        if (isset($data[self::FIELD_VALUE_HUMAN_NAME])) {
            if ($data[self::FIELD_VALUE_HUMAN_NAME] instanceof FHIRHumanName) {
                $this->setValueHumanName($data[self::FIELD_VALUE_HUMAN_NAME]);
            } else {
                $this->setValueHumanName(new FHIRHumanName($data[self::FIELD_VALUE_HUMAN_NAME]));
            }
        }
        if (isset($data[self::FIELD_VALUE_ID])) {
            $ext = (isset($data[self::FIELD_VALUE_ID_EXT]) && is_array($data[self::FIELD_VALUE_ID_EXT]))
                ? $data[self::FIELD_VALUE_ID_EXT]
                : null;
            if ($data[self::FIELD_VALUE_ID] instanceof FHIRId) {
                $this->setValueId($data[self::FIELD_VALUE_ID]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_ID])) {
                $this->setValueId(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_VALUE_ID]] + $ext));
            } else {
                $this->setValueId(new FHIRId($data[self::FIELD_VALUE_ID]));
            }
        }
        if (isset($data[self::FIELD_VALUE_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_VALUE_IDENTIFIER_EXT]) && is_array($data[self::FIELD_VALUE_IDENTIFIER_EXT]))
                ? $data[self::FIELD_VALUE_IDENTIFIER_EXT]
                : null;
            if ($data[self::FIELD_VALUE_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setValueIdentifier($data[self::FIELD_VALUE_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_IDENTIFIER])) {
                $this->setValueIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_VALUE_IDENTIFIER]] + $ext));
            } else {
                $this->setValueIdentifier(new FHIRIdentifier($data[self::FIELD_VALUE_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_VALUE_INSTANT])) {
            $ext = (isset($data[self::FIELD_VALUE_INSTANT_EXT]) && is_array($data[self::FIELD_VALUE_INSTANT_EXT]))
                ? $data[self::FIELD_VALUE_INSTANT_EXT]
                : null;
            if ($data[self::FIELD_VALUE_INSTANT] instanceof FHIRInstant) {
                $this->setValueInstant($data[self::FIELD_VALUE_INSTANT]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_INSTANT])) {
                $this->setValueInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $data[self::FIELD_VALUE_INSTANT]] + $ext));
            } else {
                $this->setValueInstant(new FHIRInstant($data[self::FIELD_VALUE_INSTANT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_INTEGER])) {
            $ext = (isset($data[self::FIELD_VALUE_INTEGER_EXT]) && is_array($data[self::FIELD_VALUE_INTEGER_EXT]))
                ? $data[self::FIELD_VALUE_INTEGER_EXT]
                : null;
            if ($data[self::FIELD_VALUE_INTEGER] instanceof FHIRInteger) {
                $this->setValueInteger($data[self::FIELD_VALUE_INTEGER]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_INTEGER])) {
                $this->setValueInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_VALUE_INTEGER]] + $ext));
            } else {
                $this->setValueInteger(new FHIRInteger($data[self::FIELD_VALUE_INTEGER]));
            }
        }
        if (isset($data[self::FIELD_VALUE_MARKDOWN])) {
            $ext = (isset($data[self::FIELD_VALUE_MARKDOWN_EXT]) && is_array($data[self::FIELD_VALUE_MARKDOWN_EXT]))
                ? $data[self::FIELD_VALUE_MARKDOWN_EXT]
                : null;
            if ($data[self::FIELD_VALUE_MARKDOWN] instanceof FHIRMarkdown) {
                $this->setValueMarkdown($data[self::FIELD_VALUE_MARKDOWN]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_MARKDOWN])) {
                $this->setValueMarkdown(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_VALUE_MARKDOWN]] + $ext));
            } else {
                $this->setValueMarkdown(new FHIRMarkdown($data[self::FIELD_VALUE_MARKDOWN]));
            }
        }
        if (isset($data[self::FIELD_VALUE_MONEY])) {
            $ext = (isset($data[self::FIELD_VALUE_MONEY_EXT]) && is_array($data[self::FIELD_VALUE_MONEY_EXT]))
                ? $data[self::FIELD_VALUE_MONEY_EXT]
                : null;
            if ($data[self::FIELD_VALUE_MONEY] instanceof FHIRMoney) {
                $this->setValueMoney($data[self::FIELD_VALUE_MONEY]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_MONEY])) {
                $this->setValueMoney(new FHIRMoney([FHIRMoney::FIELD_VALUE => $data[self::FIELD_VALUE_MONEY]] + $ext));
            } else {
                $this->setValueMoney(new FHIRMoney($data[self::FIELD_VALUE_MONEY]));
            }
        }
        if (isset($data[self::FIELD_VALUE_OID])) {
            $ext = (isset($data[self::FIELD_VALUE_OID_EXT]) && is_array($data[self::FIELD_VALUE_OID_EXT]))
                ? $data[self::FIELD_VALUE_OID_EXT]
                : null;
            if ($data[self::FIELD_VALUE_OID] instanceof FHIROid) {
                $this->setValueOid($data[self::FIELD_VALUE_OID]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_OID])) {
                $this->setValueOid(new FHIROid([FHIROid::FIELD_VALUE => $data[self::FIELD_VALUE_OID]] + $ext));
            } else {
                $this->setValueOid(new FHIROid($data[self::FIELD_VALUE_OID]));
            }
        }
        if (isset($data[self::FIELD_VALUE_PARAMETER_DEFINITION])) {
            if ($data[self::FIELD_VALUE_PARAMETER_DEFINITION] instanceof FHIRParameterDefinition) {
                $this->setValueParameterDefinition($data[self::FIELD_VALUE_PARAMETER_DEFINITION]);
            } else {
                $this->setValueParameterDefinition(new FHIRParameterDefinition($data[self::FIELD_VALUE_PARAMETER_DEFINITION]));
            }
        }
        if (isset($data[self::FIELD_VALUE_PERIOD])) {
            if ($data[self::FIELD_VALUE_PERIOD] instanceof FHIRPeriod) {
                $this->setValuePeriod($data[self::FIELD_VALUE_PERIOD]);
            } else {
                $this->setValuePeriod(new FHIRPeriod($data[self::FIELD_VALUE_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_VALUE_POSITIVE_INT])) {
            $ext = (isset($data[self::FIELD_VALUE_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_VALUE_POSITIVE_INT_EXT]))
                ? $data[self::FIELD_VALUE_POSITIVE_INT_EXT]
                : null;
            if ($data[self::FIELD_VALUE_POSITIVE_INT] instanceof FHIRPositiveInt) {
                $this->setValuePositiveInt($data[self::FIELD_VALUE_POSITIVE_INT]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_POSITIVE_INT])) {
                $this->setValuePositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_VALUE_POSITIVE_INT]] + $ext));
            } else {
                $this->setValuePositiveInt(new FHIRPositiveInt($data[self::FIELD_VALUE_POSITIVE_INT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_QUANTITY])) {
            $ext = (isset($data[self::FIELD_VALUE_QUANTITY_EXT]) && is_array($data[self::FIELD_VALUE_QUANTITY_EXT]))
                ? $data[self::FIELD_VALUE_QUANTITY_EXT]
                : null;
            if ($data[self::FIELD_VALUE_QUANTITY] instanceof FHIRQuantity) {
                $this->setValueQuantity($data[self::FIELD_VALUE_QUANTITY]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_QUANTITY])) {
                $this->setValueQuantity(new FHIRQuantity([FHIRQuantity::FIELD_VALUE => $data[self::FIELD_VALUE_QUANTITY]] + $ext));
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
        if (isset($data[self::FIELD_VALUE_RATIO])) {
            if ($data[self::FIELD_VALUE_RATIO] instanceof FHIRRatio) {
                $this->setValueRatio($data[self::FIELD_VALUE_RATIO]);
            } else {
                $this->setValueRatio(new FHIRRatio($data[self::FIELD_VALUE_RATIO]));
            }
        }
        if (isset($data[self::FIELD_VALUE_REFERENCE])) {
            if ($data[self::FIELD_VALUE_REFERENCE] instanceof FHIRReference) {
                $this->setValueReference($data[self::FIELD_VALUE_REFERENCE]);
            } else {
                $this->setValueReference(new FHIRReference($data[self::FIELD_VALUE_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_VALUE_RELATED_ARTIFACT])) {
            if ($data[self::FIELD_VALUE_RELATED_ARTIFACT] instanceof FHIRRelatedArtifact) {
                $this->setValueRelatedArtifact($data[self::FIELD_VALUE_RELATED_ARTIFACT]);
            } else {
                $this->setValueRelatedArtifact(new FHIRRelatedArtifact($data[self::FIELD_VALUE_RELATED_ARTIFACT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_SAMPLED_DATA])) {
            if ($data[self::FIELD_VALUE_SAMPLED_DATA] instanceof FHIRSampledData) {
                $this->setValueSampledData($data[self::FIELD_VALUE_SAMPLED_DATA]);
            } else {
                $this->setValueSampledData(new FHIRSampledData($data[self::FIELD_VALUE_SAMPLED_DATA]));
            }
        }
        if (isset($data[self::FIELD_VALUE_SIGNATURE])) {
            if ($data[self::FIELD_VALUE_SIGNATURE] instanceof FHIRSignature) {
                $this->setValueSignature($data[self::FIELD_VALUE_SIGNATURE]);
            } else {
                $this->setValueSignature(new FHIRSignature($data[self::FIELD_VALUE_SIGNATURE]));
            }
        }
        if (isset($data[self::FIELD_VALUE_STRING])) {
            $ext = (isset($data[self::FIELD_VALUE_STRING_EXT]) && is_array($data[self::FIELD_VALUE_STRING_EXT]))
                ? $data[self::FIELD_VALUE_STRING_EXT]
                : null;
            if ($data[self::FIELD_VALUE_STRING] instanceof FHIRString) {
                $this->setValueString($data[self::FIELD_VALUE_STRING]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_STRING])) {
                $this->setValueString(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_VALUE_STRING]] + $ext));
            } else {
                $this->setValueString(new FHIRString($data[self::FIELD_VALUE_STRING]));
            }
        }
        if (isset($data[self::FIELD_VALUE_TIME])) {
            $ext = (isset($data[self::FIELD_VALUE_TIME_EXT]) && is_array($data[self::FIELD_VALUE_TIME_EXT]))
                ? $data[self::FIELD_VALUE_TIME_EXT]
                : null;
            if ($data[self::FIELD_VALUE_TIME] instanceof FHIRTime) {
                $this->setValueTime($data[self::FIELD_VALUE_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_TIME])) {
                $this->setValueTime(new FHIRTime([FHIRTime::FIELD_VALUE => $data[self::FIELD_VALUE_TIME]] + $ext));
            } else {
                $this->setValueTime(new FHIRTime($data[self::FIELD_VALUE_TIME]));
            }
        }
        if (isset($data[self::FIELD_VALUE_TIMING])) {
            if ($data[self::FIELD_VALUE_TIMING] instanceof FHIRTiming) {
                $this->setValueTiming($data[self::FIELD_VALUE_TIMING]);
            } else {
                $this->setValueTiming(new FHIRTiming($data[self::FIELD_VALUE_TIMING]));
            }
        }
        if (isset($data[self::FIELD_VALUE_TRIGGER_DEFINITION])) {
            if ($data[self::FIELD_VALUE_TRIGGER_DEFINITION] instanceof FHIRTriggerDefinition) {
                $this->setValueTriggerDefinition($data[self::FIELD_VALUE_TRIGGER_DEFINITION]);
            } else {
                $this->setValueTriggerDefinition(new FHIRTriggerDefinition($data[self::FIELD_VALUE_TRIGGER_DEFINITION]));
            }
        }
        if (isset($data[self::FIELD_VALUE_UNSIGNED_INT])) {
            $ext = (isset($data[self::FIELD_VALUE_UNSIGNED_INT_EXT]) && is_array($data[self::FIELD_VALUE_UNSIGNED_INT_EXT]))
                ? $data[self::FIELD_VALUE_UNSIGNED_INT_EXT]
                : null;
            if ($data[self::FIELD_VALUE_UNSIGNED_INT] instanceof FHIRUnsignedInt) {
                $this->setValueUnsignedInt($data[self::FIELD_VALUE_UNSIGNED_INT]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_UNSIGNED_INT])) {
                $this->setValueUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $data[self::FIELD_VALUE_UNSIGNED_INT]] + $ext));
            } else {
                $this->setValueUnsignedInt(new FHIRUnsignedInt($data[self::FIELD_VALUE_UNSIGNED_INT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_URI])) {
            $ext = (isset($data[self::FIELD_VALUE_URI_EXT]) && is_array($data[self::FIELD_VALUE_URI_EXT]))
                ? $data[self::FIELD_VALUE_URI_EXT]
                : null;
            if ($data[self::FIELD_VALUE_URI] instanceof FHIRUri) {
                $this->setValueUri($data[self::FIELD_VALUE_URI]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_URI])) {
                $this->setValueUri(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_VALUE_URI]] + $ext));
            } else {
                $this->setValueUri(new FHIRUri($data[self::FIELD_VALUE_URI]));
            }
        }
        if (isset($data[self::FIELD_VALUE_URL])) {
            $ext = (isset($data[self::FIELD_VALUE_URL_EXT]) && is_array($data[self::FIELD_VALUE_URL_EXT]))
                ? $data[self::FIELD_VALUE_URL_EXT]
                : null;
            if ($data[self::FIELD_VALUE_URL] instanceof FHIRUrl) {
                $this->setValueUrl($data[self::FIELD_VALUE_URL]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_URL])) {
                $this->setValueUrl(new FHIRUrl([FHIRUrl::FIELD_VALUE => $data[self::FIELD_VALUE_URL]] + $ext));
            } else {
                $this->setValueUrl(new FHIRUrl($data[self::FIELD_VALUE_URL]));
            }
        }
        if (isset($data[self::FIELD_VALUE_USAGE_CONTEXT])) {
            if ($data[self::FIELD_VALUE_USAGE_CONTEXT] instanceof FHIRUsageContext) {
                $this->setValueUsageContext($data[self::FIELD_VALUE_USAGE_CONTEXT]);
            } else {
                $this->setValueUsageContext(new FHIRUsageContext($data[self::FIELD_VALUE_USAGE_CONTEXT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_UUID])) {
            $ext = (isset($data[self::FIELD_VALUE_UUID_EXT]) && is_array($data[self::FIELD_VALUE_UUID_EXT]))
                ? $data[self::FIELD_VALUE_UUID_EXT]
                : null;
            if ($data[self::FIELD_VALUE_UUID] instanceof FHIRUuid) {
                $this->setValueUuid($data[self::FIELD_VALUE_UUID]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_UUID])) {
                $this->setValueUuid(new FHIRUuid([FHIRUuid::FIELD_VALUE => $data[self::FIELD_VALUE_UUID]] + $ext));
            } else {
                $this->setValueUuid(new FHIRUuid($data[self::FIELD_VALUE_UUID]));
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<Extension{$xmlns}></Extension>";
    }


    /**
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRUriPrimitive
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRUriPrimitive $url
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setUrl($url = null)
    {
        if (null === $url) {
            $this->url = null;
            return $this;
        }
        if ($url instanceof FHIRUriPrimitive) {
            $this->url = $url;
            return $this;
        }
        $this->url = new FHIRUriPrimitive($url);
        return $this;
    }

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAddress
     */
    public function getValueAddress()
    {
        return $this->valueAddress;
    }

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAddress $valueAddress
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueAddress(FHIRAddress $valueAddress = null)
    {
        $this->valueAddress = $valueAddress;
        return $this;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getValueAge()
    {
        return $this->valueAge;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRAge $valueAge
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueAge(FHIRAge $valueAge = null)
    {
        $this->valueAge = $valueAge;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation
     */
    public function getValueAnnotation()
    {
        return $this->valueAnnotation;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation $valueAnnotation
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueAnnotation(FHIRAnnotation $valueAnnotation = null)
    {
        $this->valueAnnotation = $valueAnnotation;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment $valueAttachment
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueAttachment(FHIRAttachment $valueAttachment = null)
    {
        $this->valueAttachment = $valueAttachment;
        return $this;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBase64Binary
     */
    public function getValueBase64Binary()
    {
        return $this->valueBase64Binary;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBase64Binary $valueBase64Binary
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueBase64Binary($valueBase64Binary = null)
    {
        if (null === $valueBase64Binary) {
            $this->valueBase64Binary = null;
            return $this;
        }
        if ($valueBase64Binary instanceof FHIRBase64Binary) {
            $this->valueBase64Binary = $valueBase64Binary;
            return $this;
        }
        $this->valueBase64Binary = new FHIRBase64Binary($valueBase64Binary);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $valueBoolean
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueBoolean($valueBoolean = null)
    {
        if (null === $valueBoolean) {
            $this->valueBoolean = null;
            return $this;
        }
        if ($valueBoolean instanceof FHIRBoolean) {
            $this->valueBoolean = $valueBoolean;
            return $this;
        }
        $this->valueBoolean = new FHIRBoolean($valueBoolean);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
     */
    public function getValueCanonical()
    {
        return $this->valueCanonical;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $valueCanonical
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueCanonical($valueCanonical = null)
    {
        if (null === $valueCanonical) {
            $this->valueCanonical = null;
            return $this;
        }
        if ($valueCanonical instanceof FHIRCanonical) {
            $this->valueCanonical = $valueCanonical;
            return $this;
        }
        $this->valueCanonical = new FHIRCanonical($valueCanonical);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    public function getValueCode()
    {
        return $this->valueCode;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode $valueCode
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueCode($valueCode = null)
    {
        if (null === $valueCode) {
            $this->valueCode = null;
            return $this;
        }
        if ($valueCode instanceof FHIRCode) {
            $this->valueCode = $valueCode;
            return $this;
        }
        $this->valueCode = new FHIRCode($valueCode);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $valueCodeableConcept
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueCodeableConcept(FHIRCodeableConcept $valueCodeableConcept = null)
    {
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding
     */
    public function getValueCoding()
    {
        return $this->valueCoding;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding $valueCoding
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueCoding(FHIRCoding $valueCoding = null)
    {
        $this->valueCoding = $valueCoding;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail
     */
    public function getValueContactDetail()
    {
        return $this->valueContactDetail;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail $valueContactDetail
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueContactDetail(FHIRContactDetail $valueContactDetail = null)
    {
        $this->valueContactDetail = $valueContactDetail;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint
     */
    public function getValueContactPoint()
    {
        return $this->valueContactPoint;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint $valueContactPoint
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueContactPoint(FHIRContactPoint $valueContactPoint = null)
    {
        $this->valueContactPoint = $valueContactPoint;
        return $this;
    }

    /**
     * A contributor to the content of a knowledge asset, including authors, editors,
     * reviewers, and endorsers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContributor
     */
    public function getValueContributor()
    {
        return $this->valueContributor;
    }

    /**
     * A contributor to the content of a knowledge asset, including authors, editors,
     * reviewers, and endorsers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContributor $valueContributor
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueContributor(FHIRContributor $valueContributor = null)
    {
        $this->valueContributor = $valueContributor;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRCount
     */
    public function getValueCount()
    {
        return $this->valueCount;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRCount $valueCount
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueCount(FHIRCount $valueCount = null)
    {
        $this->valueCount = $valueCount;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement
     */
    public function getValueDataRequirement()
    {
        return $this->valueDataRequirement;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement $valueDataRequirement
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueDataRequirement(FHIRDataRequirement $valueDataRequirement = null)
    {
        $this->valueDataRequirement = $valueDataRequirement;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    public function getValueDate()
    {
        return $this->valueDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate $valueDate
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueDate($valueDate = null)
    {
        if (null === $valueDate) {
            $this->valueDate = null;
            return $this;
        }
        if ($valueDate instanceof FHIRDate) {
            $this->valueDate = $valueDate;
            return $this;
        }
        $this->valueDate = new FHIRDate($valueDate);
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $valueDateTime
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueDateTime($valueDateTime = null)
    {
        if (null === $valueDateTime) {
            $this->valueDateTime = null;
            return $this;
        }
        if ($valueDateTime instanceof FHIRDateTime) {
            $this->valueDateTime = $valueDateTime;
            return $this;
        }
        $this->valueDateTime = new FHIRDateTime($valueDateTime);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getValueDecimal()
    {
        return $this->valueDecimal;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $valueDecimal
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueDecimal($valueDecimal = null)
    {
        if (null === $valueDecimal) {
            $this->valueDecimal = null;
            return $this;
        }
        if ($valueDecimal instanceof FHIRDecimal) {
            $this->valueDecimal = $valueDecimal;
            return $this;
        }
        $this->valueDecimal = new FHIRDecimal($valueDecimal);
        return $this;
    }

    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getValueDistance()
    {
        return $this->valueDistance;
    }

    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDistance $valueDistance
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueDistance(FHIRDistance $valueDistance = null)
    {
        $this->valueDistance = $valueDistance;
        return $this;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage
     */
    public function getValueDosage()
    {
        return $this->valueDosage;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage $valueDosage
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueDosage(FHIRDosage $valueDosage = null)
    {
        $this->valueDosage = $valueDosage;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getValueDuration()
    {
        return $this->valueDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration $valueDuration
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueDuration(FHIRDuration $valueDuration = null)
    {
        $this->valueDuration = $valueDuration;
        return $this;
    }

    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExpression
     */
    public function getValueExpression()
    {
        return $this->valueExpression;
    }

    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExpression $valueExpression
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueExpression(FHIRExpression $valueExpression = null)
    {
        $this->valueExpression = $valueExpression;
        return $this;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRHumanName
     */
    public function getValueHumanName()
    {
        return $this->valueHumanName;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRHumanName $valueHumanName
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueHumanName(FHIRHumanName $valueHumanName = null)
    {
        $this->valueHumanName = $valueHumanName;
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId
     */
    public function getValueId()
    {
        return $this->valueId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId $valueId
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueId($valueId = null)
    {
        if (null === $valueId) {
            $this->valueId = null;
            return $this;
        }
        if ($valueId instanceof FHIRId) {
            $this->valueId = $valueId;
            return $this;
        }
        $this->valueId = new FHIRId($valueId);
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    public function getValueIdentifier()
    {
        return $this->valueIdentifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $valueIdentifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueIdentifier(FHIRIdentifier $valueIdentifier = null)
    {
        $this->valueIdentifier = $valueIdentifier;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant
     */
    public function getValueInstant()
    {
        return $this->valueInstant;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant $valueInstant
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueInstant($valueInstant = null)
    {
        if (null === $valueInstant) {
            $this->valueInstant = null;
            return $this;
        }
        if ($valueInstant instanceof FHIRInstant) {
            $this->valueInstant = $valueInstant;
            return $this;
        }
        $this->valueInstant = new FHIRInstant($valueInstant);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $valueInteger
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueInteger($valueInteger = null)
    {
        if (null === $valueInteger) {
            $this->valueInteger = null;
            return $this;
        }
        if ($valueInteger instanceof FHIRInteger) {
            $this->valueInteger = $valueInteger;
            return $this;
        }
        $this->valueInteger = new FHIRInteger($valueInteger);
        return $this;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    public function getValueMarkdown()
    {
        return $this->valueMarkdown;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown $valueMarkdown
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueMarkdown($valueMarkdown = null)
    {
        if (null === $valueMarkdown) {
            $this->valueMarkdown = null;
            return $this;
        }
        if ($valueMarkdown instanceof FHIRMarkdown) {
            $this->valueMarkdown = $valueMarkdown;
            return $this;
        }
        $this->valueMarkdown = new FHIRMarkdown($valueMarkdown);
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney
     */
    public function getValueMoney()
    {
        return $this->valueMoney;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney $valueMoney
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueMoney(FHIRMoney $valueMoney = null)
    {
        $this->valueMoney = $valueMoney;
        return $this;
    }

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIROid
     */
    public function getValueOid()
    {
        return $this->valueOid;
    }

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIROid $valueOid
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueOid($valueOid = null)
    {
        if (null === $valueOid) {
            $this->valueOid = null;
            return $this;
        }
        if ($valueOid instanceof FHIROid) {
            $this->valueOid = $valueOid;
            return $this;
        }
        $this->valueOid = new FHIROid($valueOid);
        return $this;
    }

    /**
     * The parameters to the module. This collection specifies both the input and
     * output parameters. Input parameters are provided by the caller as part of the
     * $evaluate operation. Output parameters are included in the GuidanceResponse.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRParameterDefinition
     */
    public function getValueParameterDefinition()
    {
        return $this->valueParameterDefinition;
    }

    /**
     * The parameters to the module. This collection specifies both the input and
     * output parameters. Input parameters are provided by the caller as part of the
     * $evaluate operation. Output parameters are included in the GuidanceResponse.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRParameterDefinition $valueParameterDefinition
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueParameterDefinition(FHIRParameterDefinition $valueParameterDefinition = null)
    {
        $this->valueParameterDefinition = $valueParameterDefinition;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    public function getValuePeriod()
    {
        return $this->valuePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $valuePeriod
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValuePeriod(FHIRPeriod $valuePeriod = null)
    {
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    public function getValuePositiveInt()
    {
        return $this->valuePositiveInt;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt $valuePositiveInt
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValuePositiveInt($valuePositiveInt = null)
    {
        if (null === $valuePositiveInt) {
            $this->valuePositiveInt = null;
            return $this;
        }
        if ($valuePositiveInt instanceof FHIRPositiveInt) {
            $this->valuePositiveInt = $valuePositiveInt;
            return $this;
        }
        $this->valuePositiveInt = new FHIRPositiveInt($valuePositiveInt);
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $valueQuantity
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueQuantity(FHIRQuantity $valueQuantity = null)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    public function getValueRange()
    {
        return $this->valueRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange $valueRange
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueRange(FHIRRange $valueRange = null)
    {
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio
     */
    public function getValueRatio()
    {
        return $this->valueRatio;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio $valueRatio
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueRatio(FHIRRatio $valueRatio = null)
    {
        $this->valueRatio = $valueRatio;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $valueReference
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueReference(FHIRReference $valueReference = null)
    {
        $this->valueReference = $valueReference;
        return $this;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRelatedArtifact
     */
    public function getValueRelatedArtifact()
    {
        return $this->valueRelatedArtifact;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRelatedArtifact $valueRelatedArtifact
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueRelatedArtifact(FHIRRelatedArtifact $valueRelatedArtifact = null)
    {
        $this->valueRelatedArtifact = $valueRelatedArtifact;
        return $this;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSampledData
     */
    public function getValueSampledData()
    {
        return $this->valueSampledData;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSampledData $valueSampledData
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueSampledData(FHIRSampledData $valueSampledData = null)
    {
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature
     */
    public function getValueSignature()
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature $valueSignature
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueSignature(FHIRSignature $valueSignature = null)
    {
        $this->valueSignature = $valueSignature;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $valueString
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueString($valueString = null)
    {
        if (null === $valueString) {
            $this->valueString = null;
            return $this;
        }
        if ($valueString instanceof FHIRString) {
            $this->valueString = $valueString;
            return $this;
        }
        $this->valueString = new FHIRString($valueString);
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime
     */
    public function getValueTime()
    {
        return $this->valueTime;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime $valueTime
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueTime($valueTime = null)
    {
        if (null === $valueTime) {
            $this->valueTime = null;
            return $this;
        }
        if ($valueTime instanceof FHIRTime) {
            $this->valueTime = $valueTime;
            return $this;
        }
        $this->valueTime = new FHIRTime($valueTime);
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getValueTiming()
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming $valueTiming
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueTiming(FHIRTiming $valueTiming = null)
    {
        $this->valueTiming = $valueTiming;
        return $this;
    }

    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTriggerDefinition
     */
    public function getValueTriggerDefinition()
    {
        return $this->valueTriggerDefinition;
    }

    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTriggerDefinition $valueTriggerDefinition
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueTriggerDefinition(FHIRTriggerDefinition $valueTriggerDefinition = null)
    {
        $this->valueTriggerDefinition = $valueTriggerDefinition;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt
     */
    public function getValueUnsignedInt()
    {
        return $this->valueUnsignedInt;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt $valueUnsignedInt
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueUnsignedInt($valueUnsignedInt = null)
    {
        if (null === $valueUnsignedInt) {
            $this->valueUnsignedInt = null;
            return $this;
        }
        if ($valueUnsignedInt instanceof FHIRUnsignedInt) {
            $this->valueUnsignedInt = $valueUnsignedInt;
            return $this;
        }
        $this->valueUnsignedInt = new FHIRUnsignedInt($valueUnsignedInt);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    public function getValueUri()
    {
        return $this->valueUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $valueUri
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueUri($valueUri = null)
    {
        if (null === $valueUri) {
            $this->valueUri = null;
            return $this;
        }
        if ($valueUri instanceof FHIRUri) {
            $this->valueUri = $valueUri;
            return $this;
        }
        $this->valueUri = new FHIRUri($valueUri);
        return $this;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUrl
     */
    public function getValueUrl()
    {
        return $this->valueUrl;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUrl $valueUrl
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueUrl($valueUrl = null)
    {
        if (null === $valueUrl) {
            $this->valueUrl = null;
            return $this;
        }
        if ($valueUrl instanceof FHIRUrl) {
            $this->valueUrl = $valueUrl;
            return $this;
        }
        $this->valueUrl = new FHIRUrl($valueUrl);
        return $this;
    }

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext
     */
    public function getValueUsageContext()
    {
        return $this->valueUsageContext;
    }

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext $valueUsageContext
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueUsageContext(FHIRUsageContext $valueUsageContext = null)
    {
        $this->valueUsageContext = $valueUsageContext;
        return $this;
    }

    /**
     * A UUID, represented as a URI
     * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUuid
     */
    public function getValueUuid()
    {
        return $this->valueUuid;
    }

    /**
     * A UUID, represented as a URI
     * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - must be one of a constrained set of the data types (see
     * [Extensibility](extensibility.html) for a list). (choose any one of the
     * elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUuid $valueUuid
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public function setValueUuid($valueUuid = null)
    {
        if (null === $valueUuid) {
            $this->valueUuid = null;
            return $this;
        }
        if ($valueUuid instanceof FHIRUuid) {
            $this->valueUuid = $valueUuid;
            return $this;
        }
        $this->valueUuid = new FHIRUuid($valueUuid);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRExtension::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRExtension::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRExtension;
        } elseif (!is_object($type) || !($type instanceof FHIRExtension)) {
            throw new \RuntimeException(sprintf(
                'FHIRExtension::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->url)) {
            $type->setUrl((string)$attributes->url);
        }
        if (isset($children->url)) {
            $type->setUrl(FHIRUriPrimitive::xmlUnserialize($children->url));
        }
        if (isset($children->valueAddress)) {
            $type->setValueAddress(FHIRAddress::xmlUnserialize($children->valueAddress));
        }
        if (isset($children->valueAge)) {
            $type->setValueAge(FHIRAge::xmlUnserialize($children->valueAge));
        }
        if (isset($children->valueAnnotation)) {
            $type->setValueAnnotation(FHIRAnnotation::xmlUnserialize($children->valueAnnotation));
        }
        if (isset($children->valueAttachment)) {
            $type->setValueAttachment(FHIRAttachment::xmlUnserialize($children->valueAttachment));
        }
        if (isset($attributes->valueBase64Binary)) {
            $type->setValueBase64Binary((string)$attributes->valueBase64Binary);
        }
        if (isset($children->valueBase64Binary)) {
            $type->setValueBase64Binary(FHIRBase64Binary::xmlUnserialize($children->valueBase64Binary));
        }
        if (isset($attributes->valueBoolean)) {
            $type->setValueBoolean((string)$attributes->valueBoolean);
        }
        if (isset($children->valueBoolean)) {
            $type->setValueBoolean(FHIRBoolean::xmlUnserialize($children->valueBoolean));
        }
        if (isset($attributes->valueCanonical)) {
            $type->setValueCanonical((string)$attributes->valueCanonical);
        }
        if (isset($children->valueCanonical)) {
            $type->setValueCanonical(FHIRCanonical::xmlUnserialize($children->valueCanonical));
        }
        if (isset($attributes->valueCode)) {
            $type->setValueCode((string)$attributes->valueCode);
        }
        if (isset($children->valueCode)) {
            $type->setValueCode(FHIRCode::xmlUnserialize($children->valueCode));
        }
        if (isset($children->valueCodeableConcept)) {
            $type->setValueCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->valueCodeableConcept));
        }
        if (isset($children->valueCoding)) {
            $type->setValueCoding(FHIRCoding::xmlUnserialize($children->valueCoding));
        }
        if (isset($children->valueContactDetail)) {
            $type->setValueContactDetail(FHIRContactDetail::xmlUnserialize($children->valueContactDetail));
        }
        if (isset($children->valueContactPoint)) {
            $type->setValueContactPoint(FHIRContactPoint::xmlUnserialize($children->valueContactPoint));
        }
        if (isset($children->valueContributor)) {
            $type->setValueContributor(FHIRContributor::xmlUnserialize($children->valueContributor));
        }
        if (isset($children->valueCount)) {
            $type->setValueCount(FHIRCount::xmlUnserialize($children->valueCount));
        }
        if (isset($children->valueDataRequirement)) {
            $type->setValueDataRequirement(FHIRDataRequirement::xmlUnserialize($children->valueDataRequirement));
        }
        if (isset($attributes->valueDate)) {
            $type->setValueDate((string)$attributes->valueDate);
        }
        if (isset($children->valueDate)) {
            $type->setValueDate(FHIRDate::xmlUnserialize($children->valueDate));
        }
        if (isset($attributes->valueDateTime)) {
            $type->setValueDateTime((string)$attributes->valueDateTime);
        }
        if (isset($children->valueDateTime)) {
            $type->setValueDateTime(FHIRDateTime::xmlUnserialize($children->valueDateTime));
        }
        if (isset($attributes->valueDecimal)) {
            $type->setValueDecimal((string)$attributes->valueDecimal);
        }
        if (isset($children->valueDecimal)) {
            $type->setValueDecimal(FHIRDecimal::xmlUnserialize($children->valueDecimal));
        }
        if (isset($children->valueDistance)) {
            $type->setValueDistance(FHIRDistance::xmlUnserialize($children->valueDistance));
        }
        if (isset($children->valueDosage)) {
            $type->setValueDosage(FHIRDosage::xmlUnserialize($children->valueDosage));
        }
        if (isset($children->valueDuration)) {
            $type->setValueDuration(FHIRDuration::xmlUnserialize($children->valueDuration));
        }
        if (isset($children->valueExpression)) {
            $type->setValueExpression(FHIRExpression::xmlUnserialize($children->valueExpression));
        }
        if (isset($children->valueHumanName)) {
            $type->setValueHumanName(FHIRHumanName::xmlUnserialize($children->valueHumanName));
        }
        if (isset($attributes->valueId)) {
            $type->setValueId((string)$attributes->valueId);
        }
        if (isset($children->valueId)) {
            $type->setValueId(FHIRId::xmlUnserialize($children->valueId));
        }
        if (isset($children->valueIdentifier)) {
            $type->setValueIdentifier(FHIRIdentifier::xmlUnserialize($children->valueIdentifier));
        }
        if (isset($attributes->valueInstant)) {
            $type->setValueInstant((string)$attributes->valueInstant);
        }
        if (isset($children->valueInstant)) {
            $type->setValueInstant(FHIRInstant::xmlUnserialize($children->valueInstant));
        }
        if (isset($attributes->valueInteger)) {
            $type->setValueInteger((string)$attributes->valueInteger);
        }
        if (isset($children->valueInteger)) {
            $type->setValueInteger(FHIRInteger::xmlUnserialize($children->valueInteger));
        }
        if (isset($attributes->valueMarkdown)) {
            $type->setValueMarkdown((string)$attributes->valueMarkdown);
        }
        if (isset($children->valueMarkdown)) {
            $type->setValueMarkdown(FHIRMarkdown::xmlUnserialize($children->valueMarkdown));
        }
        if (isset($children->valueMoney)) {
            $type->setValueMoney(FHIRMoney::xmlUnserialize($children->valueMoney));
        }
        if (isset($attributes->valueOid)) {
            $type->setValueOid((string)$attributes->valueOid);
        }
        if (isset($children->valueOid)) {
            $type->setValueOid(FHIROid::xmlUnserialize($children->valueOid));
        }
        if (isset($children->valueParameterDefinition)) {
            $type->setValueParameterDefinition(FHIRParameterDefinition::xmlUnserialize($children->valueParameterDefinition));
        }
        if (isset($children->valuePeriod)) {
            $type->setValuePeriod(FHIRPeriod::xmlUnserialize($children->valuePeriod));
        }
        if (isset($attributes->valuePositiveInt)) {
            $type->setValuePositiveInt((string)$attributes->valuePositiveInt);
        }
        if (isset($children->valuePositiveInt)) {
            $type->setValuePositiveInt(FHIRPositiveInt::xmlUnserialize($children->valuePositiveInt));
        }
        if (isset($children->valueQuantity)) {
            $type->setValueQuantity(FHIRQuantity::xmlUnserialize($children->valueQuantity));
        }
        if (isset($children->valueRange)) {
            $type->setValueRange(FHIRRange::xmlUnserialize($children->valueRange));
        }
        if (isset($children->valueRatio)) {
            $type->setValueRatio(FHIRRatio::xmlUnserialize($children->valueRatio));
        }
        if (isset($children->valueReference)) {
            $type->setValueReference(FHIRReference::xmlUnserialize($children->valueReference));
        }
        if (isset($children->valueRelatedArtifact)) {
            $type->setValueRelatedArtifact(FHIRRelatedArtifact::xmlUnserialize($children->valueRelatedArtifact));
        }
        if (isset($children->valueSampledData)) {
            $type->setValueSampledData(FHIRSampledData::xmlUnserialize($children->valueSampledData));
        }
        if (isset($children->valueSignature)) {
            $type->setValueSignature(FHIRSignature::xmlUnserialize($children->valueSignature));
        }
        if (isset($attributes->valueString)) {
            $type->setValueString((string)$attributes->valueString);
        }
        if (isset($children->valueString)) {
            $type->setValueString(FHIRString::xmlUnserialize($children->valueString));
        }
        if (isset($attributes->valueTime)) {
            $type->setValueTime((string)$attributes->valueTime);
        }
        if (isset($children->valueTime)) {
            $type->setValueTime(FHIRTime::xmlUnserialize($children->valueTime));
        }
        if (isset($children->valueTiming)) {
            $type->setValueTiming(FHIRTiming::xmlUnserialize($children->valueTiming));
        }
        if (isset($children->valueTriggerDefinition)) {
            $type->setValueTriggerDefinition(FHIRTriggerDefinition::xmlUnserialize($children->valueTriggerDefinition));
        }
        if (isset($attributes->valueUnsignedInt)) {
            $type->setValueUnsignedInt((string)$attributes->valueUnsignedInt);
        }
        if (isset($children->valueUnsignedInt)) {
            $type->setValueUnsignedInt(FHIRUnsignedInt::xmlUnserialize($children->valueUnsignedInt));
        }
        if (isset($attributes->valueUri)) {
            $type->setValueUri((string)$attributes->valueUri);
        }
        if (isset($children->valueUri)) {
            $type->setValueUri(FHIRUri::xmlUnserialize($children->valueUri));
        }
        if (isset($attributes->valueUrl)) {
            $type->setValueUrl((string)$attributes->valueUrl);
        }
        if (isset($children->valueUrl)) {
            $type->setValueUrl(FHIRUrl::xmlUnserialize($children->valueUrl));
        }
        if (isset($children->valueUsageContext)) {
            $type->setValueUsageContext(FHIRUsageContext::xmlUnserialize($children->valueUsageContext));
        }
        if (isset($attributes->valueUuid)) {
            $type->setValueUuid((string)$attributes->valueUuid);
        }
        if (isset($children->valueUuid)) {
            $type->setValueUuid(FHIRUuid::xmlUnserialize($children->valueUuid));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getUrl())) {
            $sxe->addAttribute(self::FIELD_URL, (string)$v);
        }

        if (null !== ($v = $this->getValueAddress())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_ADDRESS, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueAge())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_AGE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueAnnotation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_ANNOTATION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueAttachment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_ATTACHMENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueBase64Binary())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_BASE_64BINARY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueBoolean())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_BOOLEAN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueCanonical())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_CANONICAL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_CODE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueCoding())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_CODING, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueContactDetail())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_CONTACT_DETAIL, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueContactPoint())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_CONTACT_POINT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueContributor())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_CONTRIBUTOR, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueCount())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_COUNT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueDataRequirement())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_DATA_REQUIREMENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueDecimal())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_DECIMAL, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueDistance())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_DISTANCE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueDosage())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_DOSAGE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueDuration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_DURATION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueExpression())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_EXPRESSION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueHumanName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_HUMAN_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_ID, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueInstant())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_INSTANT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueInteger())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_INTEGER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueMarkdown())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_MARKDOWN, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueMoney())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_MONEY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueOid())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_OID, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueParameterDefinition())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_PARAMETER_DEFINITION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValuePeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValuePositiveInt())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_POSITIVE_INT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_RANGE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueRatio())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_RATIO, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueRelatedArtifact())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_RELATED_ARTIFACT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueSampledData())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_SAMPLED_DATA, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueSignature())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_SIGNATURE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_STRING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_TIME, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueTiming())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_TIMING, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueTriggerDefinition())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_TRIGGER_DEFINITION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueUnsignedInt())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_UNSIGNED_INT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueUri())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_URI, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueUrl())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_URL, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueUsageContext())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_USAGE_CONTEXT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueUuid())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_UUID, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getUrl())) {
            $a[self::FIELD_URL] = $v;
        }
        if (null !== ($v = $this->getValueAddress())) {
            $a[self::FIELD_VALUE_ADDRESS] = $v;
        }
        if (null !== ($v = $this->getValueAge())) {
            $a[self::FIELD_VALUE_AGE] = $v;
        }
        if (null !== ($v = $this->getValueAnnotation())) {
            $a[self::FIELD_VALUE_ANNOTATION] = $v;
        }
        if (null !== ($v = $this->getValueAttachment())) {
            $a[self::FIELD_VALUE_ATTACHMENT] = $v;
        }
        if (null !== ($v = $this->getValueBase64Binary())) {
            $a[self::FIELD_VALUE_BASE_64BINARY] = $v->getValue();
            $a[self::FIELD_VALUE_BASE_64BINARY_EXT] = $v;
        }
        if (null !== ($v = $this->getValueBoolean())) {
            $a[self::FIELD_VALUE_BOOLEAN] = $v->getValue();
            $a[self::FIELD_VALUE_BOOLEAN_EXT] = $v;
        }
        if (null !== ($v = $this->getValueCanonical())) {
            $a[self::FIELD_VALUE_CANONICAL] = $v->getValue();
            $a[self::FIELD_VALUE_CANONICAL_EXT] = $v;
        }
        if (null !== ($v = $this->getValueCode())) {
            $a[self::FIELD_VALUE_CODE] = $v->getValue();
            $a[self::FIELD_VALUE_CODE_EXT] = $v;
        }
        if (null !== ($v = $this->getValueCodeableConcept())) {
            $a[self::FIELD_VALUE_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getValueCoding())) {
            $a[self::FIELD_VALUE_CODING] = $v;
        }
        if (null !== ($v = $this->getValueContactDetail())) {
            $a[self::FIELD_VALUE_CONTACT_DETAIL] = $v;
        }
        if (null !== ($v = $this->getValueContactPoint())) {
            $a[self::FIELD_VALUE_CONTACT_POINT] = $v;
        }
        if (null !== ($v = $this->getValueContributor())) {
            $a[self::FIELD_VALUE_CONTRIBUTOR] = $v;
        }
        if (null !== ($v = $this->getValueCount())) {
            $a[self::FIELD_VALUE_COUNT] = $v;
        }
        if (null !== ($v = $this->getValueDataRequirement())) {
            $a[self::FIELD_VALUE_DATA_REQUIREMENT] = $v;
        }
        if (null !== ($v = $this->getValueDate())) {
            $a[self::FIELD_VALUE_DATE] = $v->getValue();
            $a[self::FIELD_VALUE_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getValueDateTime())) {
            $a[self::FIELD_VALUE_DATE_TIME] = $v->getValue();
            $a[self::FIELD_VALUE_DATE_TIME_EXT] = $v;
        }
        if (null !== ($v = $this->getValueDecimal())) {
            $a[self::FIELD_VALUE_DECIMAL] = $v->getValue();
            $a[self::FIELD_VALUE_DECIMAL_EXT] = $v;
        }
        if (null !== ($v = $this->getValueDistance())) {
            $a[self::FIELD_VALUE_DISTANCE] = $v;
        }
        if (null !== ($v = $this->getValueDosage())) {
            $a[self::FIELD_VALUE_DOSAGE] = $v;
        }
        if (null !== ($v = $this->getValueDuration())) {
            $a[self::FIELD_VALUE_DURATION] = $v;
        }
        if (null !== ($v = $this->getValueExpression())) {
            $a[self::FIELD_VALUE_EXPRESSION] = $v;
        }
        if (null !== ($v = $this->getValueHumanName())) {
            $a[self::FIELD_VALUE_HUMAN_NAME] = $v;
        }
        if (null !== ($v = $this->getValueId())) {
            $a[self::FIELD_VALUE_ID] = $v->getValue();
            $a[self::FIELD_VALUE_ID_EXT] = $v;
        }
        if (null !== ($v = $this->getValueIdentifier())) {
            $a[self::FIELD_VALUE_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getValueInstant())) {
            $a[self::FIELD_VALUE_INSTANT] = $v->getValue();
            $a[self::FIELD_VALUE_INSTANT_EXT] = $v;
        }
        if (null !== ($v = $this->getValueInteger())) {
            $a[self::FIELD_VALUE_INTEGER] = $v->getValue();
            $a[self::FIELD_VALUE_INTEGER_EXT] = $v;
        }
        if (null !== ($v = $this->getValueMarkdown())) {
            $a[self::FIELD_VALUE_MARKDOWN] = $v->getValue();
            $a[self::FIELD_VALUE_MARKDOWN_EXT] = $v;
        }
        if (null !== ($v = $this->getValueMoney())) {
            $a[self::FIELD_VALUE_MONEY] = $v;
        }
        if (null !== ($v = $this->getValueOid())) {
            $a[self::FIELD_VALUE_OID] = $v->getValue();
            $a[self::FIELD_VALUE_OID_EXT] = $v;
        }
        if (null !== ($v = $this->getValueParameterDefinition())) {
            $a[self::FIELD_VALUE_PARAMETER_DEFINITION] = $v;
        }
        if (null !== ($v = $this->getValuePeriod())) {
            $a[self::FIELD_VALUE_PERIOD] = $v;
        }
        if (null !== ($v = $this->getValuePositiveInt())) {
            $a[self::FIELD_VALUE_POSITIVE_INT] = $v->getValue();
            $a[self::FIELD_VALUE_POSITIVE_INT_EXT] = $v;
        }
        if (null !== ($v = $this->getValueQuantity())) {
            $a[self::FIELD_VALUE_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getValueRange())) {
            $a[self::FIELD_VALUE_RANGE] = $v;
        }
        if (null !== ($v = $this->getValueRatio())) {
            $a[self::FIELD_VALUE_RATIO] = $v;
        }
        if (null !== ($v = $this->getValueReference())) {
            $a[self::FIELD_VALUE_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getValueRelatedArtifact())) {
            $a[self::FIELD_VALUE_RELATED_ARTIFACT] = $v;
        }
        if (null !== ($v = $this->getValueSampledData())) {
            $a[self::FIELD_VALUE_SAMPLED_DATA] = $v;
        }
        if (null !== ($v = $this->getValueSignature())) {
            $a[self::FIELD_VALUE_SIGNATURE] = $v;
        }
        if (null !== ($v = $this->getValueString())) {
            $a[self::FIELD_VALUE_STRING] = $v->getValue();
            $a[self::FIELD_VALUE_STRING_EXT] = $v;
        }
        if (null !== ($v = $this->getValueTime())) {
            $a[self::FIELD_VALUE_TIME] = $v->getValue();
            $a[self::FIELD_VALUE_TIME_EXT] = $v;
        }
        if (null !== ($v = $this->getValueTiming())) {
            $a[self::FIELD_VALUE_TIMING] = $v;
        }
        if (null !== ($v = $this->getValueTriggerDefinition())) {
            $a[self::FIELD_VALUE_TRIGGER_DEFINITION] = $v;
        }
        if (null !== ($v = $this->getValueUnsignedInt())) {
            $a[self::FIELD_VALUE_UNSIGNED_INT] = $v->getValue();
            $a[self::FIELD_VALUE_UNSIGNED_INT_EXT] = $v;
        }
        if (null !== ($v = $this->getValueUri())) {
            $a[self::FIELD_VALUE_URI] = $v->getValue();
            $a[self::FIELD_VALUE_URI_EXT] = $v;
        }
        if (null !== ($v = $this->getValueUrl())) {
            $a[self::FIELD_VALUE_URL] = $v->getValue();
            $a[self::FIELD_VALUE_URL_EXT] = $v;
        }
        if (null !== ($v = $this->getValueUsageContext())) {
            $a[self::FIELD_VALUE_USAGE_CONTEXT] = $v;
        }
        if (null !== ($v = $this->getValueUuid())) {
            $a[self::FIELD_VALUE_UUID] = $v->getValue();
            $a[self::FIELD_VALUE_UUID_EXT] = $v;
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