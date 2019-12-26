<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAddress;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBase64Binary;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContributor;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExpression;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRHumanName;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIROid;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRParameterDefinition;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRAge;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRCount;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDistance;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRelatedArtifact;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSampledData;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTriggerDefinition;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUrl;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUuid;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRElementDefinitionExample
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition
 */
class FHIRElementDefinitionExample extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE;
    const FIELD_LABEL = 'label';
    const FIELD_LABEL_EXT = '_label';
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
    const FIELD_VALUE_INSTANT = 'valueInstant';
    const FIELD_VALUE_INSTANT_EXT = '_valueInstant';
    const FIELD_VALUE_INTEGER = 'valueInteger';
    const FIELD_VALUE_INTEGER_EXT = '_valueInteger';
    const FIELD_VALUE_MARKDOWN = 'valueMarkdown';
    const FIELD_VALUE_MARKDOWN_EXT = '_valueMarkdown';
    const FIELD_VALUE_META = 'valueMeta';
    const FIELD_VALUE_MONEY = 'valueMoney';
    const FIELD_VALUE_OID = 'valueOid';
    const FIELD_VALUE_OID_EXT = '_valueOid';
    const FIELD_VALUE_PARAMETER_DEFINITION = 'valueParameterDefinition';
    const FIELD_VALUE_PERIOD = 'valuePeriod';
    const FIELD_VALUE_POSITIVE_INT = 'valuePositiveInt';
    const FIELD_VALUE_POSITIVE_INT_EXT = '_valuePositiveInt';
    const FIELD_VALUE_QUANTITY = 'valueQuantity';
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

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the purpose of this example amoung the set of examples.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $label = null;

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAddress
     */
    protected $valueAddress = null;

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRAge
     */
    protected $valueAge = null;

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation
     */
    protected $valueAnnotation = null;

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment
     */
    protected $valueAttachment = null;

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBase64Binary
     */
    protected $valueBase64Binary = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $valueBoolean = null;

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
     */
    protected $valueCanonical = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    protected $valueCode = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $valueCodeableConcept = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding
     */
    protected $valueCoding = null;

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail
     */
    protected $valueContactDetail = null;

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint
     */
    protected $valueContactPoint = null;

    /**
     * A contributor to the content of a knowledge asset, including authors, editors,
     * reviewers, and endorsers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContributor
     */
    protected $valueContributor = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRCount
     */
    protected $valueCount = null;

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement
     */
    protected $valueDataRequirement = null;

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    protected $valueDate = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $valueDateTime = null;

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    protected $valueDecimal = null;

    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDistance
     */
    protected $valueDistance = null;

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage
     */
    protected $valueDosage = null;

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected $valueDuration = null;

    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExpression
     */
    protected $valueExpression = null;

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRHumanName
     */
    protected $valueHumanName = null;

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId
     */
    protected $valueId = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    protected $valueIdentifier = null;

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant
     */
    protected $valueInstant = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    protected $valueInteger = null;

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
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    protected $valueMarkdown = null;

    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content might not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMeta
     */
    protected $valueMeta = null;

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney
     */
    protected $valueMoney = null;

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIROid
     */
    protected $valueOid = null;

    /**
     * The parameters to the module. This collection specifies both the input and
     * output parameters. Input parameters are provided by the caller as part of the
     * $evaluate operation. Output parameters are included in the GuidanceResponse.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRParameterDefinition
     */
    protected $valueParameterDefinition = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    protected $valuePeriod = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    protected $valuePositiveInt = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    protected $valueQuantity = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    protected $valueRange = null;

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio
     */
    protected $valueRatio = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $valueReference = null;

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRelatedArtifact
     */
    protected $valueRelatedArtifact = null;

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSampledData
     */
    protected $valueSampledData = null;

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
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature
     */
    protected $valueSignature = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $valueString = null;

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime
     */
    protected $valueTime = null;

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
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    protected $valueTiming = null;

    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTriggerDefinition
     */
    protected $valueTriggerDefinition = null;

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt
     */
    protected $valueUnsignedInt = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    protected $valueUri = null;

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUrl
     */
    protected $valueUrl = null;

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext
     */
    protected $valueUsageContext = null;

    /**
     * A UUID, represented as a URI
     * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUuid
     */
    protected $valueUuid = null;

    /**
     * Validation map for fields in type ElementDefinition.Example
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRElementDefinitionExample Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinitionExample::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_LABEL]) || isset($data[self::FIELD_LABEL_EXT])) {
            if (isset($data[self::FIELD_LABEL])) {
                $value = $data[self::FIELD_LABEL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LABEL_EXT]) && is_array($data[self::FIELD_LABEL_EXT])) {
                $ext = $data[self::FIELD_LABEL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setLabel($value);
                } else if (is_array($value)) {
                    $this->setLabel(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setLabel(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setLabel(new FHIRString($ext));
            }
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
        if (isset($data[self::FIELD_VALUE_BASE_64BINARY]) || isset($data[self::FIELD_VALUE_BASE_64BINARY_EXT])) {
            if (isset($data[self::FIELD_VALUE_BASE_64BINARY])) {
                $value = $data[self::FIELD_VALUE_BASE_64BINARY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_BASE_64BINARY_EXT]) && is_array($data[self::FIELD_VALUE_BASE_64BINARY_EXT])) {
                $ext = $data[self::FIELD_VALUE_BASE_64BINARY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBase64Binary) {
                    $this->setValueBase64Binary($value);
                } else if (is_array($value)) {
                    $this->setValueBase64Binary(new FHIRBase64Binary(array_merge($ext, $value)));
                } else {
                    $this->setValueBase64Binary(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueBase64Binary(new FHIRBase64Binary($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_BOOLEAN]) || isset($data[self::FIELD_VALUE_BOOLEAN_EXT])) {
            if (isset($data[self::FIELD_VALUE_BOOLEAN])) {
                $value = $data[self::FIELD_VALUE_BOOLEAN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_BOOLEAN_EXT]) && is_array($data[self::FIELD_VALUE_BOOLEAN_EXT])) {
                $ext = $data[self::FIELD_VALUE_BOOLEAN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setValueBoolean($value);
                } else if (is_array($value)) {
                    $this->setValueBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setValueBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueBoolean(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_CANONICAL]) || isset($data[self::FIELD_VALUE_CANONICAL_EXT])) {
            if (isset($data[self::FIELD_VALUE_CANONICAL])) {
                $value = $data[self::FIELD_VALUE_CANONICAL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_CANONICAL_EXT]) && is_array($data[self::FIELD_VALUE_CANONICAL_EXT])) {
                $ext = $data[self::FIELD_VALUE_CANONICAL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setValueCanonical($value);
                } else if (is_array($value)) {
                    $this->setValueCanonical(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setValueCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueCanonical(new FHIRCanonical($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_CODE]) || isset($data[self::FIELD_VALUE_CODE_EXT])) {
            if (isset($data[self::FIELD_VALUE_CODE])) {
                $value = $data[self::FIELD_VALUE_CODE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_CODE_EXT]) && is_array($data[self::FIELD_VALUE_CODE_EXT])) {
                $ext = $data[self::FIELD_VALUE_CODE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setValueCode($value);
                } else if (is_array($value)) {
                    $this->setValueCode(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setValueCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueCode(new FHIRCode($ext));
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
            if ($data[self::FIELD_VALUE_CONTACT_POINT] instanceof FHIRContactPoint) {
                $this->setValueContactPoint($data[self::FIELD_VALUE_CONTACT_POINT]);
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
        if (isset($data[self::FIELD_VALUE_DATE]) || isset($data[self::FIELD_VALUE_DATE_EXT])) {
            if (isset($data[self::FIELD_VALUE_DATE])) {
                $value = $data[self::FIELD_VALUE_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_DATE_EXT]) && is_array($data[self::FIELD_VALUE_DATE_EXT])) {
                $ext = $data[self::FIELD_VALUE_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setValueDate($value);
                } else if (is_array($value)) {
                    $this->setValueDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setValueDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_DATE_TIME]) || isset($data[self::FIELD_VALUE_DATE_TIME_EXT])) {
            if (isset($data[self::FIELD_VALUE_DATE_TIME])) {
                $value = $data[self::FIELD_VALUE_DATE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_DATE_TIME_EXT]) && is_array($data[self::FIELD_VALUE_DATE_TIME_EXT])) {
                $ext = $data[self::FIELD_VALUE_DATE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setValueDateTime($value);
                } else if (is_array($value)) {
                    $this->setValueDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setValueDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_DECIMAL]) || isset($data[self::FIELD_VALUE_DECIMAL_EXT])) {
            if (isset($data[self::FIELD_VALUE_DECIMAL])) {
                $value = $data[self::FIELD_VALUE_DECIMAL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_DECIMAL_EXT]) && is_array($data[self::FIELD_VALUE_DECIMAL_EXT])) {
                $ext = $data[self::FIELD_VALUE_DECIMAL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setValueDecimal($value);
                } else if (is_array($value)) {
                    $this->setValueDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setValueDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueDecimal(new FHIRDecimal($ext));
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
        if (isset($data[self::FIELD_VALUE_ID]) || isset($data[self::FIELD_VALUE_ID_EXT])) {
            if (isset($data[self::FIELD_VALUE_ID])) {
                $value = $data[self::FIELD_VALUE_ID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_ID_EXT]) && is_array($data[self::FIELD_VALUE_ID_EXT])) {
                $ext = $data[self::FIELD_VALUE_ID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setValueId($value);
                } else if (is_array($value)) {
                    $this->setValueId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setValueId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueId(new FHIRId($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_IDENTIFIER])) {
            if ($data[self::FIELD_VALUE_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setValueIdentifier($data[self::FIELD_VALUE_IDENTIFIER]);
            } else {
                $this->setValueIdentifier(new FHIRIdentifier($data[self::FIELD_VALUE_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_VALUE_INSTANT]) || isset($data[self::FIELD_VALUE_INSTANT_EXT])) {
            if (isset($data[self::FIELD_VALUE_INSTANT])) {
                $value = $data[self::FIELD_VALUE_INSTANT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_INSTANT_EXT]) && is_array($data[self::FIELD_VALUE_INSTANT_EXT])) {
                $ext = $data[self::FIELD_VALUE_INSTANT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setValueInstant($value);
                } else if (is_array($value)) {
                    $this->setValueInstant(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setValueInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueInstant(new FHIRInstant($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_INTEGER]) || isset($data[self::FIELD_VALUE_INTEGER_EXT])) {
            if (isset($data[self::FIELD_VALUE_INTEGER])) {
                $value = $data[self::FIELD_VALUE_INTEGER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_INTEGER_EXT]) && is_array($data[self::FIELD_VALUE_INTEGER_EXT])) {
                $ext = $data[self::FIELD_VALUE_INTEGER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setValueInteger($value);
                } else if (is_array($value)) {
                    $this->setValueInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setValueInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueInteger(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_MARKDOWN]) || isset($data[self::FIELD_VALUE_MARKDOWN_EXT])) {
            if (isset($data[self::FIELD_VALUE_MARKDOWN])) {
                $value = $data[self::FIELD_VALUE_MARKDOWN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_MARKDOWN_EXT]) && is_array($data[self::FIELD_VALUE_MARKDOWN_EXT])) {
                $ext = $data[self::FIELD_VALUE_MARKDOWN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setValueMarkdown($value);
                } else if (is_array($value)) {
                    $this->setValueMarkdown(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setValueMarkdown(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueMarkdown(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_META])) {
            if ($data[self::FIELD_VALUE_META] instanceof FHIRMeta) {
                $this->setValueMeta($data[self::FIELD_VALUE_META]);
            } else {
                $this->setValueMeta(new FHIRMeta($data[self::FIELD_VALUE_META]));
            }
        }
        if (isset($data[self::FIELD_VALUE_MONEY])) {
            if ($data[self::FIELD_VALUE_MONEY] instanceof FHIRMoney) {
                $this->setValueMoney($data[self::FIELD_VALUE_MONEY]);
            } else {
                $this->setValueMoney(new FHIRMoney($data[self::FIELD_VALUE_MONEY]));
            }
        }
        if (isset($data[self::FIELD_VALUE_OID]) || isset($data[self::FIELD_VALUE_OID_EXT])) {
            if (isset($data[self::FIELD_VALUE_OID])) {
                $value = $data[self::FIELD_VALUE_OID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_OID_EXT]) && is_array($data[self::FIELD_VALUE_OID_EXT])) {
                $ext = $data[self::FIELD_VALUE_OID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIROid) {
                    $this->setValueOid($value);
                } else if (is_array($value)) {
                    $this->setValueOid(new FHIROid(array_merge($ext, $value)));
                } else {
                    $this->setValueOid(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueOid(new FHIROid($ext));
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
        if (isset($data[self::FIELD_VALUE_POSITIVE_INT]) || isset($data[self::FIELD_VALUE_POSITIVE_INT_EXT])) {
            if (isset($data[self::FIELD_VALUE_POSITIVE_INT])) {
                $value = $data[self::FIELD_VALUE_POSITIVE_INT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_VALUE_POSITIVE_INT_EXT])) {
                $ext = $data[self::FIELD_VALUE_POSITIVE_INT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setValuePositiveInt($value);
                } else if (is_array($value)) {
                    $this->setValuePositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setValuePositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValuePositiveInt(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_QUANTITY])) {
            if ($data[self::FIELD_VALUE_QUANTITY] instanceof FHIRQuantity) {
                $this->setValueQuantity($data[self::FIELD_VALUE_QUANTITY]);
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
        if (isset($data[self::FIELD_VALUE_STRING]) || isset($data[self::FIELD_VALUE_STRING_EXT])) {
            if (isset($data[self::FIELD_VALUE_STRING])) {
                $value = $data[self::FIELD_VALUE_STRING];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_STRING_EXT]) && is_array($data[self::FIELD_VALUE_STRING_EXT])) {
                $ext = $data[self::FIELD_VALUE_STRING_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setValueString($value);
                } else if (is_array($value)) {
                    $this->setValueString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setValueString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_TIME]) || isset($data[self::FIELD_VALUE_TIME_EXT])) {
            if (isset($data[self::FIELD_VALUE_TIME])) {
                $value = $data[self::FIELD_VALUE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_TIME_EXT]) && is_array($data[self::FIELD_VALUE_TIME_EXT])) {
                $ext = $data[self::FIELD_VALUE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $this->setValueTime($value);
                } else if (is_array($value)) {
                    $this->setValueTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $this->setValueTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueTime(new FHIRTime($ext));
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
        if (isset($data[self::FIELD_VALUE_UNSIGNED_INT]) || isset($data[self::FIELD_VALUE_UNSIGNED_INT_EXT])) {
            if (isset($data[self::FIELD_VALUE_UNSIGNED_INT])) {
                $value = $data[self::FIELD_VALUE_UNSIGNED_INT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_UNSIGNED_INT_EXT]) && is_array($data[self::FIELD_VALUE_UNSIGNED_INT_EXT])) {
                $ext = $data[self::FIELD_VALUE_UNSIGNED_INT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setValueUnsignedInt($value);
                } else if (is_array($value)) {
                    $this->setValueUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setValueUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueUnsignedInt(new FHIRUnsignedInt($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_URI]) || isset($data[self::FIELD_VALUE_URI_EXT])) {
            if (isset($data[self::FIELD_VALUE_URI])) {
                $value = $data[self::FIELD_VALUE_URI];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_URI_EXT]) && is_array($data[self::FIELD_VALUE_URI_EXT])) {
                $ext = $data[self::FIELD_VALUE_URI_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setValueUri($value);
                } else if (is_array($value)) {
                    $this->setValueUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setValueUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueUri(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_URL]) || isset($data[self::FIELD_VALUE_URL_EXT])) {
            if (isset($data[self::FIELD_VALUE_URL])) {
                $value = $data[self::FIELD_VALUE_URL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_URL_EXT]) && is_array($data[self::FIELD_VALUE_URL_EXT])) {
                $ext = $data[self::FIELD_VALUE_URL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUrl) {
                    $this->setValueUrl($value);
                } else if (is_array($value)) {
                    $this->setValueUrl(new FHIRUrl(array_merge($ext, $value)));
                } else {
                    $this->setValueUrl(new FHIRUrl([FHIRUrl::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueUrl(new FHIRUrl($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_USAGE_CONTEXT])) {
            if ($data[self::FIELD_VALUE_USAGE_CONTEXT] instanceof FHIRUsageContext) {
                $this->setValueUsageContext($data[self::FIELD_VALUE_USAGE_CONTEXT]);
            } else {
                $this->setValueUsageContext(new FHIRUsageContext($data[self::FIELD_VALUE_USAGE_CONTEXT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_UUID]) || isset($data[self::FIELD_VALUE_UUID_EXT])) {
            if (isset($data[self::FIELD_VALUE_UUID])) {
                $value = $data[self::FIELD_VALUE_UUID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_UUID_EXT]) && is_array($data[self::FIELD_VALUE_UUID_EXT])) {
                $ext = $data[self::FIELD_VALUE_UUID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUuid) {
                    $this->setValueUuid($value);
                } else if (is_array($value)) {
                    $this->setValueUuid(new FHIRUuid(array_merge($ext, $value)));
                } else {
                    $this->setValueUuid(new FHIRUuid([FHIRUuid::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueUuid(new FHIRUuid($ext));
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
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<ElementDefinitionExample{$xmlns}></ElementDefinitionExample>";
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the purpose of this example amoung the set of examples.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the purpose of this example amoung the set of examples.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $label
     * @return static
     */
    public function setLabel($label = null)
    {
        if (null === $label) {
            $this->label = null;
            return $this;
        }
        if ($label instanceof FHIRString) {
            $this->label = $label;
            return $this;
        }
        $this->label = new FHIRString($label);
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
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAddress $valueAddress
     * @return static
     */
    public function setValueAddress(FHIRAddress $valueAddress = null)
    {
        $this->valueAddress = $valueAddress;
        return $this;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRAge $valueAge
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation $valueAnnotation
     * @return static
     */
    public function setValueAnnotation(FHIRAnnotation $valueAnnotation = null)
    {
        $this->valueAnnotation = $valueAnnotation;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment $valueAttachment
     * @return static
     */
    public function setValueAttachment(FHIRAttachment $valueAttachment = null)
    {
        $this->valueAttachment = $valueAttachment;
        return $this;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBase64Binary $valueBase64Binary
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $valueBoolean
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $valueCanonical
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode $valueCode
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $valueCodeableConcept
     * @return static
     */
    public function setValueCodeableConcept(FHIRCodeableConcept $valueCodeableConcept = null)
    {
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding $valueCoding
     * @return static
     */
    public function setValueCoding(FHIRCoding $valueCoding = null)
    {
        $this->valueCoding = $valueCoding;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail $valueContactDetail
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint $valueContactPoint
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContributor $valueContributor
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRCount $valueCount
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement $valueDataRequirement
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate $valueDate
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $valueDateTime
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $valueDecimal
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDistance $valueDistance
     * @return static
     */
    public function setValueDistance(FHIRDistance $valueDistance = null)
    {
        $this->valueDistance = $valueDistance;
        return $this;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage $valueDosage
     * @return static
     */
    public function setValueDosage(FHIRDosage $valueDosage = null)
    {
        $this->valueDosage = $valueDosage;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration $valueDuration
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExpression $valueExpression
     * @return static
     */
    public function setValueExpression(FHIRExpression $valueExpression = null)
    {
        $this->valueExpression = $valueExpression;
        return $this;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRHumanName $valueHumanName
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId $valueId
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $valueIdentifier
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant $valueInstant
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $valueInteger
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown $valueMarkdown
     * @return static
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
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content might not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMeta
     */
    public function getValueMeta()
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
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMeta $valueMeta
     * @return static
     */
    public function setValueMeta(FHIRMeta $valueMeta = null)
    {
        $this->valueMeta = $valueMeta;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney $valueMoney
     * @return static
     */
    public function setValueMoney(FHIRMoney $valueMoney = null)
    {
        $this->valueMoney = $valueMoney;
        return $this;
    }

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIROid $valueOid
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRParameterDefinition $valueParameterDefinition
     * @return static
     */
    public function setValueParameterDefinition(FHIRParameterDefinition $valueParameterDefinition = null)
    {
        $this->valueParameterDefinition = $valueParameterDefinition;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $valuePeriod
     * @return static
     */
    public function setValuePeriod(FHIRPeriod $valuePeriod = null)
    {
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    public function getValuePositiveInt()
    {
        return $this->valuePositiveInt;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt $valuePositiveInt
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $valueQuantity
     * @return static
     */
    public function setValueQuantity(FHIRQuantity $valueQuantity = null)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange $valueRange
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio $valueRatio
     * @return static
     */
    public function setValueRatio(FHIRRatio $valueRatio = null)
    {
        $this->valueRatio = $valueRatio;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $valueReference
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRelatedArtifact $valueRelatedArtifact
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSampledData $valueSampledData
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature $valueSignature
     * @return static
     */
    public function setValueSignature(FHIRSignature $valueSignature = null)
    {
        $this->valueSignature = $valueSignature;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $valueString
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime
     */
    public function getValueTime()
    {
        return $this->valueTime;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime $valueTime
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming $valueTiming
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTriggerDefinition $valueTriggerDefinition
     * @return static
     */
    public function setValueTriggerDefinition(FHIRTriggerDefinition $valueTriggerDefinition = null)
    {
        $this->valueTriggerDefinition = $valueTriggerDefinition;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt
     */
    public function getValueUnsignedInt()
    {
        return $this->valueUnsignedInt;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt $valueUnsignedInt
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $valueUri
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUrl
     */
    public function getValueUrl()
    {
        return $this->valueUrl;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUrl $valueUrl
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext $valueUsageContext
     * @return static
     */
    public function setValueUsageContext(FHIRUsageContext $valueUsageContext = null)
    {
        $this->valueUsageContext = $valueUsageContext;
        return $this;
    }

    /**
     * A UUID, represented as a URI
     * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual value for the element, which must be one of the types allowed for
     * this element. (choose any one of the elements, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUuid $valueUuid
     * @return static
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
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getLabel())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LABEL] = $fieldErrs;
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
        if (null !== ($v = $this->getValueCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueCoding())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_CODING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueContactDetail())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_CONTACT_DETAIL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueContactPoint())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_CONTACT_POINT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueContributor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_CONTRIBUTOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueCount())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_COUNT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueDataRequirement())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_DATA_REQUIREMENT] = $fieldErrs;
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
        if (null !== ($v = $this->getValueDistance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_DISTANCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueDosage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_DOSAGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueExpression())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_EXPRESSION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueHumanName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_HUMAN_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_IDENTIFIER] = $fieldErrs;
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
        if (null !== ($v = $this->getValueMarkdown())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_MARKDOWN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueMeta())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_META] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueMoney())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_MONEY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueOid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_OID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueParameterDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_PARAMETER_DEFINITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValuePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValuePositiveInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_POSITIVE_INT] = $fieldErrs;
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
        if (null !== ($v = $this->getValueReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueRelatedArtifact())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_RELATED_ARTIFACT] = $fieldErrs;
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
        if (null !== ($v = $this->getValueTiming())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_TIMING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueTriggerDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_TRIGGER_DEFINITION] = $fieldErrs;
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
        if (null !== ($v = $this->getValueUsageContext())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_USAGE_CONTEXT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueUuid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_UUID] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_VALUE_CONTRIBUTOR])) {
            $v = $this->getValueContributor();
            foreach($validationRules[self::FIELD_VALUE_CONTRIBUTOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE, self::FIELD_VALUE_CONTRIBUTOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_CONTRIBUTOR])) {
                        $errs[self::FIELD_VALUE_CONTRIBUTOR] = [];
                    }
                    $errs[self::FIELD_VALUE_CONTRIBUTOR][$rule] = $err;
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionExample $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionExample
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
                throw new \DomainException(sprintf('FHIRElementDefinitionExample::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRElementDefinitionExample::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRElementDefinitionExample;
        } elseif (!is_object($type) || !($type instanceof FHIRElementDefinitionExample)) {
            throw new \RuntimeException(sprintf(
                'FHIRElementDefinitionExample::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionExample or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->label)) {
            $type->setLabel(FHIRString::xmlUnserialize($children->label));
        }
        if (isset($attributes->label)) {
            $pt = $type->getLabel();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->label);
            } else {
                $type->setLabel((string)$attributes->label);
            }
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
        if (isset($children->valueBase64Binary)) {
            $type->setValueBase64Binary(FHIRBase64Binary::xmlUnserialize($children->valueBase64Binary));
        }
        if (isset($attributes->valueBase64Binary)) {
            $pt = $type->getValueBase64Binary();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueBase64Binary);
            } else {
                $type->setValueBase64Binary((string)$attributes->valueBase64Binary);
            }
        }
        if (isset($children->valueBoolean)) {
            $type->setValueBoolean(FHIRBoolean::xmlUnserialize($children->valueBoolean));
        }
        if (isset($attributes->valueBoolean)) {
            $pt = $type->getValueBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueBoolean);
            } else {
                $type->setValueBoolean((string)$attributes->valueBoolean);
            }
        }
        if (isset($children->valueCanonical)) {
            $type->setValueCanonical(FHIRCanonical::xmlUnserialize($children->valueCanonical));
        }
        if (isset($attributes->valueCanonical)) {
            $pt = $type->getValueCanonical();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueCanonical);
            } else {
                $type->setValueCanonical((string)$attributes->valueCanonical);
            }
        }
        if (isset($children->valueCode)) {
            $type->setValueCode(FHIRCode::xmlUnserialize($children->valueCode));
        }
        if (isset($attributes->valueCode)) {
            $pt = $type->getValueCode();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueCode);
            } else {
                $type->setValueCode((string)$attributes->valueCode);
            }
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
        if (isset($children->valueDate)) {
            $type->setValueDate(FHIRDate::xmlUnserialize($children->valueDate));
        }
        if (isset($attributes->valueDate)) {
            $pt = $type->getValueDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueDate);
            } else {
                $type->setValueDate((string)$attributes->valueDate);
            }
        }
        if (isset($children->valueDateTime)) {
            $type->setValueDateTime(FHIRDateTime::xmlUnserialize($children->valueDateTime));
        }
        if (isset($attributes->valueDateTime)) {
            $pt = $type->getValueDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueDateTime);
            } else {
                $type->setValueDateTime((string)$attributes->valueDateTime);
            }
        }
        if (isset($children->valueDecimal)) {
            $type->setValueDecimal(FHIRDecimal::xmlUnserialize($children->valueDecimal));
        }
        if (isset($attributes->valueDecimal)) {
            $pt = $type->getValueDecimal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueDecimal);
            } else {
                $type->setValueDecimal((string)$attributes->valueDecimal);
            }
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
        if (isset($children->valueId)) {
            $type->setValueId(FHIRId::xmlUnserialize($children->valueId));
        }
        if (isset($attributes->valueId)) {
            $pt = $type->getValueId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueId);
            } else {
                $type->setValueId((string)$attributes->valueId);
            }
        }
        if (isset($children->valueIdentifier)) {
            $type->setValueIdentifier(FHIRIdentifier::xmlUnserialize($children->valueIdentifier));
        }
        if (isset($children->valueInstant)) {
            $type->setValueInstant(FHIRInstant::xmlUnserialize($children->valueInstant));
        }
        if (isset($attributes->valueInstant)) {
            $pt = $type->getValueInstant();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueInstant);
            } else {
                $type->setValueInstant((string)$attributes->valueInstant);
            }
        }
        if (isset($children->valueInteger)) {
            $type->setValueInteger(FHIRInteger::xmlUnserialize($children->valueInteger));
        }
        if (isset($attributes->valueInteger)) {
            $pt = $type->getValueInteger();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueInteger);
            } else {
                $type->setValueInteger((string)$attributes->valueInteger);
            }
        }
        if (isset($children->valueMarkdown)) {
            $type->setValueMarkdown(FHIRMarkdown::xmlUnserialize($children->valueMarkdown));
        }
        if (isset($attributes->valueMarkdown)) {
            $pt = $type->getValueMarkdown();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueMarkdown);
            } else {
                $type->setValueMarkdown((string)$attributes->valueMarkdown);
            }
        }
        if (isset($children->valueMeta)) {
            $type->setValueMeta(FHIRMeta::xmlUnserialize($children->valueMeta));
        }
        if (isset($children->valueMoney)) {
            $type->setValueMoney(FHIRMoney::xmlUnserialize($children->valueMoney));
        }
        if (isset($children->valueOid)) {
            $type->setValueOid(FHIROid::xmlUnserialize($children->valueOid));
        }
        if (isset($attributes->valueOid)) {
            $pt = $type->getValueOid();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueOid);
            } else {
                $type->setValueOid((string)$attributes->valueOid);
            }
        }
        if (isset($children->valueParameterDefinition)) {
            $type->setValueParameterDefinition(FHIRParameterDefinition::xmlUnserialize($children->valueParameterDefinition));
        }
        if (isset($children->valuePeriod)) {
            $type->setValuePeriod(FHIRPeriod::xmlUnserialize($children->valuePeriod));
        }
        if (isset($children->valuePositiveInt)) {
            $type->setValuePositiveInt(FHIRPositiveInt::xmlUnserialize($children->valuePositiveInt));
        }
        if (isset($attributes->valuePositiveInt)) {
            $pt = $type->getValuePositiveInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valuePositiveInt);
            } else {
                $type->setValuePositiveInt((string)$attributes->valuePositiveInt);
            }
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
        if (isset($children->valueString)) {
            $type->setValueString(FHIRString::xmlUnserialize($children->valueString));
        }
        if (isset($attributes->valueString)) {
            $pt = $type->getValueString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueString);
            } else {
                $type->setValueString((string)$attributes->valueString);
            }
        }
        if (isset($children->valueTime)) {
            $type->setValueTime(FHIRTime::xmlUnserialize($children->valueTime));
        }
        if (isset($attributes->valueTime)) {
            $pt = $type->getValueTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueTime);
            } else {
                $type->setValueTime((string)$attributes->valueTime);
            }
        }
        if (isset($children->valueTiming)) {
            $type->setValueTiming(FHIRTiming::xmlUnserialize($children->valueTiming));
        }
        if (isset($children->valueTriggerDefinition)) {
            $type->setValueTriggerDefinition(FHIRTriggerDefinition::xmlUnserialize($children->valueTriggerDefinition));
        }
        if (isset($children->valueUnsignedInt)) {
            $type->setValueUnsignedInt(FHIRUnsignedInt::xmlUnserialize($children->valueUnsignedInt));
        }
        if (isset($attributes->valueUnsignedInt)) {
            $pt = $type->getValueUnsignedInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueUnsignedInt);
            } else {
                $type->setValueUnsignedInt((string)$attributes->valueUnsignedInt);
            }
        }
        if (isset($children->valueUri)) {
            $type->setValueUri(FHIRUri::xmlUnserialize($children->valueUri));
        }
        if (isset($attributes->valueUri)) {
            $pt = $type->getValueUri();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueUri);
            } else {
                $type->setValueUri((string)$attributes->valueUri);
            }
        }
        if (isset($children->valueUrl)) {
            $type->setValueUrl(FHIRUrl::xmlUnserialize($children->valueUrl));
        }
        if (isset($attributes->valueUrl)) {
            $pt = $type->getValueUrl();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueUrl);
            } else {
                $type->setValueUrl((string)$attributes->valueUrl);
            }
        }
        if (isset($children->valueUsageContext)) {
            $type->setValueUsageContext(FHIRUsageContext::xmlUnserialize($children->valueUsageContext));
        }
        if (isset($children->valueUuid)) {
            $type->setValueUuid(FHIRUuid::xmlUnserialize($children->valueUuid));
        }
        if (isset($attributes->valueUuid)) {
            $pt = $type->getValueUuid();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueUuid);
            } else {
                $type->setValueUuid((string)$attributes->valueUuid);
            }
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
        if (null !== ($v = $this->getLabel())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LABEL, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getValueMeta())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_META, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getLabel())) {
            $a[self::FIELD_LABEL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_LABEL_EXT] = $enc;
            }
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
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBase64Binary::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBase64Binary::FIELD_VALUE]);
                $a[self::FIELD_VALUE_BASE_64BINARY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValueBoolean())) {
            $a[self::FIELD_VALUE_BOOLEAN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_VALUE_BOOLEAN_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValueCanonical())) {
            $a[self::FIELD_VALUE_CANONICAL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCanonical::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCanonical::FIELD_VALUE]);
                $a[self::FIELD_VALUE_CANONICAL_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValueCode())) {
            $a[self::FIELD_VALUE_CODE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCode::FIELD_VALUE]);
                $a[self::FIELD_VALUE_CODE_EXT] = $enc;
            }
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
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDate::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDate::FIELD_VALUE]);
                $a[self::FIELD_VALUE_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValueDateTime())) {
            $a[self::FIELD_VALUE_DATE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_VALUE_DATE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValueDecimal())) {
            $a[self::FIELD_VALUE_DECIMAL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_VALUE_DECIMAL_EXT] = $enc;
            }
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
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRId::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRId::FIELD_VALUE]);
                $a[self::FIELD_VALUE_ID_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValueIdentifier())) {
            $a[self::FIELD_VALUE_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getValueInstant())) {
            $a[self::FIELD_VALUE_INSTANT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInstant::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInstant::FIELD_VALUE]);
                $a[self::FIELD_VALUE_INSTANT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValueInteger())) {
            $a[self::FIELD_VALUE_INTEGER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_VALUE_INTEGER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValueMarkdown())) {
            $a[self::FIELD_VALUE_MARKDOWN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRMarkdown::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRMarkdown::FIELD_VALUE]);
                $a[self::FIELD_VALUE_MARKDOWN_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValueMeta())) {
            $a[self::FIELD_VALUE_META] = $v;
        }
        if (null !== ($v = $this->getValueMoney())) {
            $a[self::FIELD_VALUE_MONEY] = $v;
        }
        if (null !== ($v = $this->getValueOid())) {
            $a[self::FIELD_VALUE_OID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIROid::FIELD_VALUE, $enc)))) {
                unset($enc[FHIROid::FIELD_VALUE]);
                $a[self::FIELD_VALUE_OID_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValueParameterDefinition())) {
            $a[self::FIELD_VALUE_PARAMETER_DEFINITION] = $v;
        }
        if (null !== ($v = $this->getValuePeriod())) {
            $a[self::FIELD_VALUE_PERIOD] = $v;
        }
        if (null !== ($v = $this->getValuePositiveInt())) {
            $a[self::FIELD_VALUE_POSITIVE_INT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRPositiveInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRPositiveInt::FIELD_VALUE]);
                $a[self::FIELD_VALUE_POSITIVE_INT_EXT] = $enc;
            }
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
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_VALUE_STRING_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValueTime())) {
            $a[self::FIELD_VALUE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRTime::FIELD_VALUE]);
                $a[self::FIELD_VALUE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValueTiming())) {
            $a[self::FIELD_VALUE_TIMING] = $v;
        }
        if (null !== ($v = $this->getValueTriggerDefinition())) {
            $a[self::FIELD_VALUE_TRIGGER_DEFINITION] = $v;
        }
        if (null !== ($v = $this->getValueUnsignedInt())) {
            $a[self::FIELD_VALUE_UNSIGNED_INT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUnsignedInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUnsignedInt::FIELD_VALUE]);
                $a[self::FIELD_VALUE_UNSIGNED_INT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValueUri())) {
            $a[self::FIELD_VALUE_URI] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_VALUE_URI_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValueUrl())) {
            $a[self::FIELD_VALUE_URL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUrl::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUrl::FIELD_VALUE]);
                $a[self::FIELD_VALUE_URL_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValueUsageContext())) {
            $a[self::FIELD_VALUE_USAGE_CONTEXT] = $v;
        }
        if (null !== ($v = $this->getValueUuid())) {
            $a[self::FIELD_VALUE_UUID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUuid::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUuid::FIELD_VALUE]);
                $a[self::FIELD_VALUE_UUID_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
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