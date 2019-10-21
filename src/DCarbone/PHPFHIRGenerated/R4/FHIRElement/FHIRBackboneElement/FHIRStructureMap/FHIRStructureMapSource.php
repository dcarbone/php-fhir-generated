<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap;

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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRStructureMapSourceListMode;
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
 * A Map of relationships between 2 structures that can be used to transform data.
 *
 * Class FHIRStructureMapSource
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap
 */
class FHIRStructureMapSource extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_CHECK = 'check';
    const FIELD_CHECK_EXT = '_check';
    const FIELD_CONDITION = 'condition';
    const FIELD_CONDITION_EXT = '_condition';
    const FIELD_CONTEXT = 'context';
    const FIELD_CONTEXT_EXT = '_context';
    const FIELD_DEFAULT_VALUE_ADDRESS = 'defaultValueAddress';
    const FIELD_DEFAULT_VALUE_AGE = 'defaultValueAge';
    const FIELD_DEFAULT_VALUE_ANNOTATION = 'defaultValueAnnotation';
    const FIELD_DEFAULT_VALUE_ATTACHMENT = 'defaultValueAttachment';
    const FIELD_DEFAULT_VALUE_BASE_64BINARY = 'defaultValueBase64Binary';
    const FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT = '_defaultValueBase64Binary';
    const FIELD_DEFAULT_VALUE_BOOLEAN = 'defaultValueBoolean';
    const FIELD_DEFAULT_VALUE_BOOLEAN_EXT = '_defaultValueBoolean';
    const FIELD_DEFAULT_VALUE_CANONICAL = 'defaultValueCanonical';
    const FIELD_DEFAULT_VALUE_CANONICAL_EXT = '_defaultValueCanonical';
    const FIELD_DEFAULT_VALUE_CODE = 'defaultValueCode';
    const FIELD_DEFAULT_VALUE_CODE_EXT = '_defaultValueCode';
    const FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT = 'defaultValueCodeableConcept';
    const FIELD_DEFAULT_VALUE_CODING = 'defaultValueCoding';
    const FIELD_DEFAULT_VALUE_CONTACT_DETAIL = 'defaultValueContactDetail';
    const FIELD_DEFAULT_VALUE_CONTACT_POINT = 'defaultValueContactPoint';
    const FIELD_DEFAULT_VALUE_CONTACT_POINT_EXT = '_defaultValueContactPoint';
    const FIELD_DEFAULT_VALUE_CONTRIBUTOR = 'defaultValueContributor';
    const FIELD_DEFAULT_VALUE_COUNT = 'defaultValueCount';
    const FIELD_DEFAULT_VALUE_DATA_REQUIREMENT = 'defaultValueDataRequirement';
    const FIELD_DEFAULT_VALUE_DATE = 'defaultValueDate';
    const FIELD_DEFAULT_VALUE_DATE_EXT = '_defaultValueDate';
    const FIELD_DEFAULT_VALUE_DATE_TIME = 'defaultValueDateTime';
    const FIELD_DEFAULT_VALUE_DATE_TIME_EXT = '_defaultValueDateTime';
    const FIELD_DEFAULT_VALUE_DECIMAL = 'defaultValueDecimal';
    const FIELD_DEFAULT_VALUE_DECIMAL_EXT = '_defaultValueDecimal';
    const FIELD_DEFAULT_VALUE_DISTANCE = 'defaultValueDistance';
    const FIELD_DEFAULT_VALUE_DOSAGE = 'defaultValueDosage';
    const FIELD_DEFAULT_VALUE_DURATION = 'defaultValueDuration';
    const FIELD_DEFAULT_VALUE_EXPRESSION = 'defaultValueExpression';
    const FIELD_DEFAULT_VALUE_HUMAN_NAME = 'defaultValueHumanName';
    const FIELD_DEFAULT_VALUE_ID = 'defaultValueId';
    const FIELD_DEFAULT_VALUE_ID_EXT = '_defaultValueId';
    const FIELD_DEFAULT_VALUE_IDENTIFIER = 'defaultValueIdentifier';
    const FIELD_DEFAULT_VALUE_IDENTIFIER_EXT = '_defaultValueIdentifier';
    const FIELD_DEFAULT_VALUE_INSTANT = 'defaultValueInstant';
    const FIELD_DEFAULT_VALUE_INSTANT_EXT = '_defaultValueInstant';
    const FIELD_DEFAULT_VALUE_INTEGER = 'defaultValueInteger';
    const FIELD_DEFAULT_VALUE_INTEGER_EXT = '_defaultValueInteger';
    const FIELD_DEFAULT_VALUE_MARKDOWN = 'defaultValueMarkdown';
    const FIELD_DEFAULT_VALUE_MARKDOWN_EXT = '_defaultValueMarkdown';
    const FIELD_DEFAULT_VALUE_MONEY = 'defaultValueMoney';
    const FIELD_DEFAULT_VALUE_MONEY_EXT = '_defaultValueMoney';
    const FIELD_DEFAULT_VALUE_OID = 'defaultValueOid';
    const FIELD_DEFAULT_VALUE_OID_EXT = '_defaultValueOid';
    const FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION = 'defaultValueParameterDefinition';
    const FIELD_DEFAULT_VALUE_PERIOD = 'defaultValuePeriod';
    const FIELD_DEFAULT_VALUE_POSITIVE_INT = 'defaultValuePositiveInt';
    const FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT = '_defaultValuePositiveInt';
    const FIELD_DEFAULT_VALUE_QUANTITY = 'defaultValueQuantity';
    const FIELD_DEFAULT_VALUE_QUANTITY_EXT = '_defaultValueQuantity';
    const FIELD_DEFAULT_VALUE_RANGE = 'defaultValueRange';
    const FIELD_DEFAULT_VALUE_RATIO = 'defaultValueRatio';
    const FIELD_DEFAULT_VALUE_REFERENCE = 'defaultValueReference';
    const FIELD_DEFAULT_VALUE_RELATED_ARTIFACT = 'defaultValueRelatedArtifact';
    const FIELD_DEFAULT_VALUE_SAMPLED_DATA = 'defaultValueSampledData';
    const FIELD_DEFAULT_VALUE_SIGNATURE = 'defaultValueSignature';
    const FIELD_DEFAULT_VALUE_STRING = 'defaultValueString';
    const FIELD_DEFAULT_VALUE_STRING_EXT = '_defaultValueString';
    const FIELD_DEFAULT_VALUE_TIME = 'defaultValueTime';
    const FIELD_DEFAULT_VALUE_TIME_EXT = '_defaultValueTime';
    const FIELD_DEFAULT_VALUE_TIMING = 'defaultValueTiming';
    const FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION = 'defaultValueTriggerDefinition';
    const FIELD_DEFAULT_VALUE_UNSIGNED_INT = 'defaultValueUnsignedInt';
    const FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT = '_defaultValueUnsignedInt';
    const FIELD_DEFAULT_VALUE_URI = 'defaultValueUri';
    const FIELD_DEFAULT_VALUE_URI_EXT = '_defaultValueUri';
    const FIELD_DEFAULT_VALUE_URL = 'defaultValueUrl';
    const FIELD_DEFAULT_VALUE_URL_EXT = '_defaultValueUrl';
    const FIELD_DEFAULT_VALUE_USAGE_CONTEXT = 'defaultValueUsageContext';
    const FIELD_DEFAULT_VALUE_UUID = 'defaultValueUuid';
    const FIELD_DEFAULT_VALUE_UUID_EXT = '_defaultValueUuid';
    const FIELD_ELEMENT = 'element';
    const FIELD_ELEMENT_EXT = '_element';
    const FIELD_LIST_MODE = 'listMode';
    const FIELD_LIST_MODE_EXT = '_listMode';
    const FIELD_LOG_MESSAGE = 'logMessage';
    const FIELD_LOG_MESSAGE_EXT = '_logMessage';
    const FIELD_MAX = 'max';
    const FIELD_MAX_EXT = '_max';
    const FIELD_MIN = 'min';
    const FIELD_MIN_EXT = '_min';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_VARIABLE = 'variable';
    const FIELD_VARIABLE_EXT = '_variable';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * FHIRPath expression - must be true or the mapping engine throws an error instead
     * of completing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $check = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * FHIRPath expression - must be true or the rule does not apply.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $condition = null;
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Type or variable this rule applies to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId
     */
    private $context = null;
    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAddress
     */
    private $defaultValueAddress = null;
    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRAge
     */
    private $defaultValueAge = null;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation
     */
    private $defaultValueAnnotation = null;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment
     */
    private $defaultValueAttachment = null;
    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBase64Binary
     */
    private $defaultValueBase64Binary = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    private $defaultValueBoolean = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
     */
    private $defaultValueCanonical = null;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    private $defaultValueCode = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $defaultValueCodeableConcept = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding
     */
    private $defaultValueCoding = null;
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail
     */
    private $defaultValueContactDetail = null;
    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint
     */
    private $defaultValueContactPoint = null;
    /**
     * A contributor to the content of a knowledge asset, including authors, editors,
     * reviewers, and endorsers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContributor
     */
    private $defaultValueContributor = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRCount
     */
    private $defaultValueCount = null;
    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement
     */
    private $defaultValueDataRequirement = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    private $defaultValueDate = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    private $defaultValueDateTime = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    private $defaultValueDecimal = null;
    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDistance
     */
    private $defaultValueDistance = null;
    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage
     */
    private $defaultValueDosage = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    private $defaultValueDuration = null;
    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExpression
     */
    private $defaultValueExpression = null;
    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRHumanName
     */
    private $defaultValueHumanName = null;
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId
     */
    private $defaultValueId = null;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    private $defaultValueIdentifier = null;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant
     */
    private $defaultValueInstant = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    private $defaultValueInteger = null;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    private $defaultValueMarkdown = null;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney
     */
    private $defaultValueMoney = null;
    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIROid
     */
    private $defaultValueOid = null;
    /**
     * The parameters to the module. This collection specifies both the input and
     * output parameters. Input parameters are provided by the caller as part of the
     * $evaluate operation. Output parameters are included in the GuidanceResponse.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRParameterDefinition
     */
    private $defaultValueParameterDefinition = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    private $defaultValuePeriod = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    private $defaultValuePositiveInt = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    private $defaultValueQuantity = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    private $defaultValueRange = null;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio
     */
    private $defaultValueRatio = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $defaultValueReference = null;
    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRelatedArtifact
     */
    private $defaultValueRelatedArtifact = null;
    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSampledData
     */
    private $defaultValueSampledData = null;
    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature
     */
    private $defaultValueSignature = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $defaultValueString = null;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime
     */
    private $defaultValueTime = null;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    private $defaultValueTiming = null;
    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTriggerDefinition
     */
    private $defaultValueTriggerDefinition = null;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt
     */
    private $defaultValueUnsignedInt = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    private $defaultValueUri = null;
    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUrl
     */
    private $defaultValueUrl = null;
    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext
     */
    private $defaultValueUsageContext = null;
    /**
     * A UUID, represented as a URI
     * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUuid
     */
    private $defaultValueUuid = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Optional field for this source.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $element = null;
    /**
     * If field is a list, how to manage the source.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * How to handle the list mode for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRStructureMapSourceListMode
     */
    private $listMode = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A FHIRPath expression which specifies a message to put in the transform log when
     * content matching the source rule is found.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $logMessage = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specified maximum cardinality for the element - a number or a "*". This is
     * optional; if present, it acts an implicit check on the input content (* just
     * serves as documentation; it's the default value).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $max = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specified minimum cardinality for the element. This is optional; if present, it
     * acts an implicit check on the input content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    private $min = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specified type for the element. This works as a condition on the mapping - use
     * for polymorphic elements.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $type = null;
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Named context for field, if a field is specified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId
     */
    private $variable = null;

    /**
     * FHIRStructureMapSource Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CHECK])) {
            $ext = (isset($data[self::FIELD_CHECK_EXT]) && is_array($data[self::FIELD_CHECK_EXT]))
                ? $data[self::FIELD_CHECK_EXT]
                : null;
            if ($data[self::FIELD_CHECK] instanceof FHIRString) {
                $this->setCheck($data[self::FIELD_CHECK]);
            } elseif ($ext && is_scalar($data[self::FIELD_CHECK])) {
                $this->setCheck(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_CHECK]] + $ext));
            } else {
                $this->setCheck(new FHIRString($data[self::FIELD_CHECK]));
            }
        }
        if (isset($data[self::FIELD_CONDITION])) {
            $ext = (isset($data[self::FIELD_CONDITION_EXT]) && is_array($data[self::FIELD_CONDITION_EXT]))
                ? $data[self::FIELD_CONDITION_EXT]
                : null;
            if ($data[self::FIELD_CONDITION] instanceof FHIRString) {
                $this->setCondition($data[self::FIELD_CONDITION]);
            } elseif ($ext && is_scalar($data[self::FIELD_CONDITION])) {
                $this->setCondition(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_CONDITION]] + $ext));
            } else {
                $this->setCondition(new FHIRString($data[self::FIELD_CONDITION]));
            }
        }
        if (isset($data[self::FIELD_CONTEXT])) {
            $ext = (isset($data[self::FIELD_CONTEXT_EXT]) && is_array($data[self::FIELD_CONTEXT_EXT]))
                ? $data[self::FIELD_CONTEXT_EXT]
                : null;
            if ($data[self::FIELD_CONTEXT] instanceof FHIRId) {
                $this->setContext($data[self::FIELD_CONTEXT]);
            } elseif ($ext && is_scalar($data[self::FIELD_CONTEXT])) {
                $this->setContext(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_CONTEXT]] + $ext));
            } else {
                $this->setContext(new FHIRId($data[self::FIELD_CONTEXT]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_ADDRESS])) {
            if ($data[self::FIELD_DEFAULT_VALUE_ADDRESS] instanceof FHIRAddress) {
                $this->setDefaultValueAddress($data[self::FIELD_DEFAULT_VALUE_ADDRESS]);
            } else {
                $this->setDefaultValueAddress(new FHIRAddress($data[self::FIELD_DEFAULT_VALUE_ADDRESS]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_AGE])) {
            if ($data[self::FIELD_DEFAULT_VALUE_AGE] instanceof FHIRAge) {
                $this->setDefaultValueAge($data[self::FIELD_DEFAULT_VALUE_AGE]);
            } else {
                $this->setDefaultValueAge(new FHIRAge($data[self::FIELD_DEFAULT_VALUE_AGE]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_ANNOTATION])) {
            if ($data[self::FIELD_DEFAULT_VALUE_ANNOTATION] instanceof FHIRAnnotation) {
                $this->setDefaultValueAnnotation($data[self::FIELD_DEFAULT_VALUE_ANNOTATION]);
            } else {
                $this->setDefaultValueAnnotation(new FHIRAnnotation($data[self::FIELD_DEFAULT_VALUE_ANNOTATION]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_ATTACHMENT])) {
            if ($data[self::FIELD_DEFAULT_VALUE_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setDefaultValueAttachment($data[self::FIELD_DEFAULT_VALUE_ATTACHMENT]);
            } else {
                $this->setDefaultValueAttachment(new FHIRAttachment($data[self::FIELD_DEFAULT_VALUE_ATTACHMENT]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] instanceof FHIRBase64Binary) {
                $this->setDefaultValueBase64Binary($data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY])) {
                $this->setDefaultValueBase64Binary(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY]] + $ext));
            } else {
                $this->setDefaultValueBase64Binary(new FHIRBase64Binary($data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_BOOLEAN])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_BOOLEAN] instanceof FHIRBoolean) {
                $this->setDefaultValueBoolean($data[self::FIELD_DEFAULT_VALUE_BOOLEAN]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFAULT_VALUE_BOOLEAN])) {
                $this->setDefaultValueBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_BOOLEAN]] + $ext));
            } else {
                $this->setDefaultValueBoolean(new FHIRBoolean($data[self::FIELD_DEFAULT_VALUE_BOOLEAN]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_CANONICAL])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_CANONICAL_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_CANONICAL_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_CANONICAL_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_CANONICAL] instanceof FHIRCanonical) {
                $this->setDefaultValueCanonical($data[self::FIELD_DEFAULT_VALUE_CANONICAL]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFAULT_VALUE_CANONICAL])) {
                $this->setDefaultValueCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_CANONICAL]] + $ext));
            } else {
                $this->setDefaultValueCanonical(new FHIRCanonical($data[self::FIELD_DEFAULT_VALUE_CANONICAL]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_CODE])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_CODE_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_CODE_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_CODE_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_CODE] instanceof FHIRCode) {
                $this->setDefaultValueCode($data[self::FIELD_DEFAULT_VALUE_CODE]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFAULT_VALUE_CODE])) {
                $this->setDefaultValueCode(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_CODE]] + $ext));
            } else {
                $this->setDefaultValueCode(new FHIRCode($data[self::FIELD_DEFAULT_VALUE_CODE]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setDefaultValueCodeableConcept($data[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT]);
            } else {
                $this->setDefaultValueCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_CODING])) {
            if ($data[self::FIELD_DEFAULT_VALUE_CODING] instanceof FHIRCoding) {
                $this->setDefaultValueCoding($data[self::FIELD_DEFAULT_VALUE_CODING]);
            } else {
                $this->setDefaultValueCoding(new FHIRCoding($data[self::FIELD_DEFAULT_VALUE_CODING]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL])) {
            if ($data[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL] instanceof FHIRContactDetail) {
                $this->setDefaultValueContactDetail($data[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL]);
            } else {
                $this->setDefaultValueContactDetail(new FHIRContactDetail($data[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT] instanceof FHIRContactPoint) {
                $this->setDefaultValueContactPoint($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT])) {
                $this->setDefaultValueContactPoint(new FHIRContactPoint([FHIRContactPoint::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT]] + $ext));
            } else {
                $this->setDefaultValueContactPoint(new FHIRContactPoint($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR])) {
            if ($data[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR] instanceof FHIRContributor) {
                $this->setDefaultValueContributor($data[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR]);
            } else {
                $this->setDefaultValueContributor(new FHIRContributor($data[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_COUNT])) {
            if ($data[self::FIELD_DEFAULT_VALUE_COUNT] instanceof FHIRCount) {
                $this->setDefaultValueCount($data[self::FIELD_DEFAULT_VALUE_COUNT]);
            } else {
                $this->setDefaultValueCount(new FHIRCount($data[self::FIELD_DEFAULT_VALUE_COUNT]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT])) {
            if ($data[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT] instanceof FHIRDataRequirement) {
                $this->setDefaultValueDataRequirement($data[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT]);
            } else {
                $this->setDefaultValueDataRequirement(new FHIRDataRequirement($data[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_DATE])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_DATE_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_DATE_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_DATE_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_DATE] instanceof FHIRDate) {
                $this->setDefaultValueDate($data[self::FIELD_DEFAULT_VALUE_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFAULT_VALUE_DATE])) {
                $this->setDefaultValueDate(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_DATE]] + $ext));
            } else {
                $this->setDefaultValueDate(new FHIRDate($data[self::FIELD_DEFAULT_VALUE_DATE]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_DATE_TIME] instanceof FHIRDateTime) {
                $this->setDefaultValueDateTime($data[self::FIELD_DEFAULT_VALUE_DATE_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFAULT_VALUE_DATE_TIME])) {
                $this->setDefaultValueDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_DATE_TIME]] + $ext));
            } else {
                $this->setDefaultValueDateTime(new FHIRDateTime($data[self::FIELD_DEFAULT_VALUE_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_DECIMAL])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_DECIMAL_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_DECIMAL_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_DECIMAL_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_DECIMAL] instanceof FHIRDecimal) {
                $this->setDefaultValueDecimal($data[self::FIELD_DEFAULT_VALUE_DECIMAL]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFAULT_VALUE_DECIMAL])) {
                $this->setDefaultValueDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_DECIMAL]] + $ext));
            } else {
                $this->setDefaultValueDecimal(new FHIRDecimal($data[self::FIELD_DEFAULT_VALUE_DECIMAL]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_DISTANCE])) {
            if ($data[self::FIELD_DEFAULT_VALUE_DISTANCE] instanceof FHIRDistance) {
                $this->setDefaultValueDistance($data[self::FIELD_DEFAULT_VALUE_DISTANCE]);
            } else {
                $this->setDefaultValueDistance(new FHIRDistance($data[self::FIELD_DEFAULT_VALUE_DISTANCE]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_DOSAGE])) {
            if ($data[self::FIELD_DEFAULT_VALUE_DOSAGE] instanceof FHIRDosage) {
                $this->setDefaultValueDosage($data[self::FIELD_DEFAULT_VALUE_DOSAGE]);
            } else {
                $this->setDefaultValueDosage(new FHIRDosage($data[self::FIELD_DEFAULT_VALUE_DOSAGE]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_DURATION])) {
            if ($data[self::FIELD_DEFAULT_VALUE_DURATION] instanceof FHIRDuration) {
                $this->setDefaultValueDuration($data[self::FIELD_DEFAULT_VALUE_DURATION]);
            } else {
                $this->setDefaultValueDuration(new FHIRDuration($data[self::FIELD_DEFAULT_VALUE_DURATION]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_EXPRESSION])) {
            if ($data[self::FIELD_DEFAULT_VALUE_EXPRESSION] instanceof FHIRExpression) {
                $this->setDefaultValueExpression($data[self::FIELD_DEFAULT_VALUE_EXPRESSION]);
            } else {
                $this->setDefaultValueExpression(new FHIRExpression($data[self::FIELD_DEFAULT_VALUE_EXPRESSION]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_HUMAN_NAME])) {
            if ($data[self::FIELD_DEFAULT_VALUE_HUMAN_NAME] instanceof FHIRHumanName) {
                $this->setDefaultValueHumanName($data[self::FIELD_DEFAULT_VALUE_HUMAN_NAME]);
            } else {
                $this->setDefaultValueHumanName(new FHIRHumanName($data[self::FIELD_DEFAULT_VALUE_HUMAN_NAME]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_ID])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_ID_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_ID_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_ID_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_ID] instanceof FHIRId) {
                $this->setDefaultValueId($data[self::FIELD_DEFAULT_VALUE_ID]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFAULT_VALUE_ID])) {
                $this->setDefaultValueId(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_ID]] + $ext));
            } else {
                $this->setDefaultValueId(new FHIRId($data[self::FIELD_DEFAULT_VALUE_ID]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_IDENTIFIER_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_IDENTIFIER_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_IDENTIFIER_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setDefaultValueIdentifier($data[self::FIELD_DEFAULT_VALUE_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFAULT_VALUE_IDENTIFIER])) {
                $this->setDefaultValueIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_IDENTIFIER]] + $ext));
            } else {
                $this->setDefaultValueIdentifier(new FHIRIdentifier($data[self::FIELD_DEFAULT_VALUE_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_INSTANT])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_INSTANT_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_INSTANT_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_INSTANT_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_INSTANT] instanceof FHIRInstant) {
                $this->setDefaultValueInstant($data[self::FIELD_DEFAULT_VALUE_INSTANT]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFAULT_VALUE_INSTANT])) {
                $this->setDefaultValueInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_INSTANT]] + $ext));
            } else {
                $this->setDefaultValueInstant(new FHIRInstant($data[self::FIELD_DEFAULT_VALUE_INSTANT]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_INTEGER])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_INTEGER_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_INTEGER_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_INTEGER_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_INTEGER] instanceof FHIRInteger) {
                $this->setDefaultValueInteger($data[self::FIELD_DEFAULT_VALUE_INTEGER]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFAULT_VALUE_INTEGER])) {
                $this->setDefaultValueInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_INTEGER]] + $ext));
            } else {
                $this->setDefaultValueInteger(new FHIRInteger($data[self::FIELD_DEFAULT_VALUE_INTEGER]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_MARKDOWN])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_MARKDOWN] instanceof FHIRMarkdown) {
                $this->setDefaultValueMarkdown($data[self::FIELD_DEFAULT_VALUE_MARKDOWN]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFAULT_VALUE_MARKDOWN])) {
                $this->setDefaultValueMarkdown(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_MARKDOWN]] + $ext));
            } else {
                $this->setDefaultValueMarkdown(new FHIRMarkdown($data[self::FIELD_DEFAULT_VALUE_MARKDOWN]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_MONEY])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_MONEY_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_MONEY_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_MONEY_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_MONEY] instanceof FHIRMoney) {
                $this->setDefaultValueMoney($data[self::FIELD_DEFAULT_VALUE_MONEY]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFAULT_VALUE_MONEY])) {
                $this->setDefaultValueMoney(new FHIRMoney([FHIRMoney::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_MONEY]] + $ext));
            } else {
                $this->setDefaultValueMoney(new FHIRMoney($data[self::FIELD_DEFAULT_VALUE_MONEY]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_OID])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_OID_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_OID_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_OID_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_OID] instanceof FHIROid) {
                $this->setDefaultValueOid($data[self::FIELD_DEFAULT_VALUE_OID]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFAULT_VALUE_OID])) {
                $this->setDefaultValueOid(new FHIROid([FHIROid::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_OID]] + $ext));
            } else {
                $this->setDefaultValueOid(new FHIROid($data[self::FIELD_DEFAULT_VALUE_OID]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION])) {
            if ($data[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION] instanceof FHIRParameterDefinition) {
                $this->setDefaultValueParameterDefinition($data[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION]);
            } else {
                $this->setDefaultValueParameterDefinition(new FHIRParameterDefinition($data[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_PERIOD])) {
            if ($data[self::FIELD_DEFAULT_VALUE_PERIOD] instanceof FHIRPeriod) {
                $this->setDefaultValuePeriod($data[self::FIELD_DEFAULT_VALUE_PERIOD]);
            } else {
                $this->setDefaultValuePeriod(new FHIRPeriod($data[self::FIELD_DEFAULT_VALUE_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] instanceof FHIRPositiveInt) {
                $this->setDefaultValuePositiveInt($data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT])) {
                $this->setDefaultValuePositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT]] + $ext));
            } else {
                $this->setDefaultValuePositiveInt(new FHIRPositiveInt($data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_QUANTITY])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_QUANTITY_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_QUANTITY_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_QUANTITY_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_QUANTITY] instanceof FHIRQuantity) {
                $this->setDefaultValueQuantity($data[self::FIELD_DEFAULT_VALUE_QUANTITY]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFAULT_VALUE_QUANTITY])) {
                $this->setDefaultValueQuantity(new FHIRQuantity([FHIRQuantity::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_QUANTITY]] + $ext));
            } else {
                $this->setDefaultValueQuantity(new FHIRQuantity($data[self::FIELD_DEFAULT_VALUE_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_RANGE])) {
            if ($data[self::FIELD_DEFAULT_VALUE_RANGE] instanceof FHIRRange) {
                $this->setDefaultValueRange($data[self::FIELD_DEFAULT_VALUE_RANGE]);
            } else {
                $this->setDefaultValueRange(new FHIRRange($data[self::FIELD_DEFAULT_VALUE_RANGE]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_RATIO])) {
            if ($data[self::FIELD_DEFAULT_VALUE_RATIO] instanceof FHIRRatio) {
                $this->setDefaultValueRatio($data[self::FIELD_DEFAULT_VALUE_RATIO]);
            } else {
                $this->setDefaultValueRatio(new FHIRRatio($data[self::FIELD_DEFAULT_VALUE_RATIO]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_REFERENCE])) {
            if ($data[self::FIELD_DEFAULT_VALUE_REFERENCE] instanceof FHIRReference) {
                $this->setDefaultValueReference($data[self::FIELD_DEFAULT_VALUE_REFERENCE]);
            } else {
                $this->setDefaultValueReference(new FHIRReference($data[self::FIELD_DEFAULT_VALUE_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT])) {
            if ($data[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT] instanceof FHIRRelatedArtifact) {
                $this->setDefaultValueRelatedArtifact($data[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT]);
            } else {
                $this->setDefaultValueRelatedArtifact(new FHIRRelatedArtifact($data[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA])) {
            if ($data[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA] instanceof FHIRSampledData) {
                $this->setDefaultValueSampledData($data[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA]);
            } else {
                $this->setDefaultValueSampledData(new FHIRSampledData($data[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_SIGNATURE])) {
            if ($data[self::FIELD_DEFAULT_VALUE_SIGNATURE] instanceof FHIRSignature) {
                $this->setDefaultValueSignature($data[self::FIELD_DEFAULT_VALUE_SIGNATURE]);
            } else {
                $this->setDefaultValueSignature(new FHIRSignature($data[self::FIELD_DEFAULT_VALUE_SIGNATURE]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_STRING])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_STRING_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_STRING_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_STRING_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_STRING] instanceof FHIRString) {
                $this->setDefaultValueString($data[self::FIELD_DEFAULT_VALUE_STRING]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFAULT_VALUE_STRING])) {
                $this->setDefaultValueString(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_STRING]] + $ext));
            } else {
                $this->setDefaultValueString(new FHIRString($data[self::FIELD_DEFAULT_VALUE_STRING]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_TIME])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_TIME_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_TIME_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_TIME_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_TIME] instanceof FHIRTime) {
                $this->setDefaultValueTime($data[self::FIELD_DEFAULT_VALUE_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFAULT_VALUE_TIME])) {
                $this->setDefaultValueTime(new FHIRTime([FHIRTime::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_TIME]] + $ext));
            } else {
                $this->setDefaultValueTime(new FHIRTime($data[self::FIELD_DEFAULT_VALUE_TIME]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_TIMING])) {
            if ($data[self::FIELD_DEFAULT_VALUE_TIMING] instanceof FHIRTiming) {
                $this->setDefaultValueTiming($data[self::FIELD_DEFAULT_VALUE_TIMING]);
            } else {
                $this->setDefaultValueTiming(new FHIRTiming($data[self::FIELD_DEFAULT_VALUE_TIMING]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION])) {
            if ($data[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION] instanceof FHIRTriggerDefinition) {
                $this->setDefaultValueTriggerDefinition($data[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION]);
            } else {
                $this->setDefaultValueTriggerDefinition(new FHIRTriggerDefinition($data[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] instanceof FHIRUnsignedInt) {
                $this->setDefaultValueUnsignedInt($data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT])) {
                $this->setDefaultValueUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT]] + $ext));
            } else {
                $this->setDefaultValueUnsignedInt(new FHIRUnsignedInt($data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_URI])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_URI_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_URI_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_URI_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_URI] instanceof FHIRUri) {
                $this->setDefaultValueUri($data[self::FIELD_DEFAULT_VALUE_URI]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFAULT_VALUE_URI])) {
                $this->setDefaultValueUri(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_URI]] + $ext));
            } else {
                $this->setDefaultValueUri(new FHIRUri($data[self::FIELD_DEFAULT_VALUE_URI]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_URL])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_URL_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_URL_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_URL_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_URL] instanceof FHIRUrl) {
                $this->setDefaultValueUrl($data[self::FIELD_DEFAULT_VALUE_URL]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFAULT_VALUE_URL])) {
                $this->setDefaultValueUrl(new FHIRUrl([FHIRUrl::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_URL]] + $ext));
            } else {
                $this->setDefaultValueUrl(new FHIRUrl($data[self::FIELD_DEFAULT_VALUE_URL]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT])) {
            if ($data[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT] instanceof FHIRUsageContext) {
                $this->setDefaultValueUsageContext($data[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT]);
            } else {
                $this->setDefaultValueUsageContext(new FHIRUsageContext($data[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_UUID])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_UUID_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_UUID_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_UUID_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_UUID] instanceof FHIRUuid) {
                $this->setDefaultValueUuid($data[self::FIELD_DEFAULT_VALUE_UUID]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFAULT_VALUE_UUID])) {
                $this->setDefaultValueUuid(new FHIRUuid([FHIRUuid::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_UUID]] + $ext));
            } else {
                $this->setDefaultValueUuid(new FHIRUuid($data[self::FIELD_DEFAULT_VALUE_UUID]));
            }
        }
        if (isset($data[self::FIELD_ELEMENT])) {
            $ext = (isset($data[self::FIELD_ELEMENT_EXT]) && is_array($data[self::FIELD_ELEMENT_EXT]))
                ? $data[self::FIELD_ELEMENT_EXT]
                : null;
            if ($data[self::FIELD_ELEMENT] instanceof FHIRString) {
                $this->setElement($data[self::FIELD_ELEMENT]);
            } elseif ($ext && is_scalar($data[self::FIELD_ELEMENT])) {
                $this->setElement(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_ELEMENT]] + $ext));
            } else {
                $this->setElement(new FHIRString($data[self::FIELD_ELEMENT]));
            }
        }
        if (isset($data[self::FIELD_LIST_MODE])) {
            $ext = (isset($data[self::FIELD_LIST_MODE_EXT]) && is_array($data[self::FIELD_LIST_MODE_EXT]))
                ? $data[self::FIELD_LIST_MODE_EXT]
                : null;
            if ($data[self::FIELD_LIST_MODE] instanceof FHIRStructureMapSourceListMode) {
                $this->setListMode($data[self::FIELD_LIST_MODE]);
            } elseif ($ext && is_scalar($data[self::FIELD_LIST_MODE])) {
                $this->setListMode(new FHIRStructureMapSourceListMode([FHIRStructureMapSourceListMode::FIELD_VALUE => $data[self::FIELD_LIST_MODE]] + $ext));
            } else {
                $this->setListMode(new FHIRStructureMapSourceListMode($data[self::FIELD_LIST_MODE]));
            }
        }
        if (isset($data[self::FIELD_LOG_MESSAGE])) {
            $ext = (isset($data[self::FIELD_LOG_MESSAGE_EXT]) && is_array($data[self::FIELD_LOG_MESSAGE_EXT]))
                ? $data[self::FIELD_LOG_MESSAGE_EXT]
                : null;
            if ($data[self::FIELD_LOG_MESSAGE] instanceof FHIRString) {
                $this->setLogMessage($data[self::FIELD_LOG_MESSAGE]);
            } elseif ($ext && is_scalar($data[self::FIELD_LOG_MESSAGE])) {
                $this->setLogMessage(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_LOG_MESSAGE]] + $ext));
            } else {
                $this->setLogMessage(new FHIRString($data[self::FIELD_LOG_MESSAGE]));
            }
        }
        if (isset($data[self::FIELD_MAX])) {
            $ext = (isset($data[self::FIELD_MAX_EXT]) && is_array($data[self::FIELD_MAX_EXT]))
                ? $data[self::FIELD_MAX_EXT]
                : null;
            if ($data[self::FIELD_MAX] instanceof FHIRString) {
                $this->setMax($data[self::FIELD_MAX]);
            } elseif ($ext && is_scalar($data[self::FIELD_MAX])) {
                $this->setMax(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_MAX]] + $ext));
            } else {
                $this->setMax(new FHIRString($data[self::FIELD_MAX]));
            }
        }
        if (isset($data[self::FIELD_MIN])) {
            $ext = (isset($data[self::FIELD_MIN_EXT]) && is_array($data[self::FIELD_MIN_EXT]))
                ? $data[self::FIELD_MIN_EXT]
                : null;
            if ($data[self::FIELD_MIN] instanceof FHIRInteger) {
                $this->setMin($data[self::FIELD_MIN]);
            } elseif ($ext && is_scalar($data[self::FIELD_MIN])) {
                $this->setMin(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_MIN]] + $ext));
            } else {
                $this->setMin(new FHIRInteger($data[self::FIELD_MIN]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT]))
                ? $data[self::FIELD_TYPE_EXT]
                : null;
            if ($data[self::FIELD_TYPE] instanceof FHIRString) {
                $this->setType($data[self::FIELD_TYPE]);
            } elseif ($ext && is_scalar($data[self::FIELD_TYPE])) {
                $this->setType(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_TYPE]] + $ext));
            } else {
                $this->setType(new FHIRString($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_VARIABLE])) {
            $ext = (isset($data[self::FIELD_VARIABLE_EXT]) && is_array($data[self::FIELD_VARIABLE_EXT]))
                ? $data[self::FIELD_VARIABLE_EXT]
                : null;
            if ($data[self::FIELD_VARIABLE] instanceof FHIRId) {
                $this->setVariable($data[self::FIELD_VARIABLE]);
            } elseif ($ext && is_scalar($data[self::FIELD_VARIABLE])) {
                $this->setVariable(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_VARIABLE]] + $ext));
            } else {
                $this->setVariable(new FHIRId($data[self::FIELD_VARIABLE]));
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
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
        return "<StructureMapSource{$xmlns}></StructureMapSource>";
    }


    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * FHIRPath expression - must be true or the mapping engine throws an error instead
     * of completing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getCheck()
    {
        return $this->check;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * FHIRPath expression - must be true or the mapping engine throws an error instead
     * of completing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $check
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setCheck($check = null)
    {
        if (null === $check) {
            $this->check = null;
            return $this;
        }
        if ($check instanceof FHIRString) {
            $this->check = $check;
            return $this;
        }
        $this->check = new FHIRString($check);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * FHIRPath expression - must be true or the rule does not apply.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * FHIRPath expression - must be true or the rule does not apply.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $condition
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setCondition($condition = null)
    {
        if (null === $condition) {
            $this->condition = null;
            return $this;
        }
        if ($condition instanceof FHIRString) {
            $this->condition = $condition;
            return $this;
        }
        $this->condition = new FHIRString($condition);
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
     * Type or variable this rule applies to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Type or variable this rule applies to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId $context
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setContext($context = null)
    {
        if (null === $context) {
            $this->context = null;
            return $this;
        }
        if ($context instanceof FHIRId) {
            $this->context = $context;
            return $this;
        }
        $this->context = new FHIRId($context);
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
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAddress
     */
    public function getDefaultValueAddress()
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAddress $defaultValueAddress
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueAddress(FHIRAddress $defaultValueAddress = null)
    {
        $this->defaultValueAddress = $defaultValueAddress;
        return $this;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getDefaultValueAge()
    {
        return $this->defaultValueAge;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRAge $defaultValueAge
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueAge(FHIRAge $defaultValueAge = null)
    {
        $this->defaultValueAge = $defaultValueAge;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation
     */
    public function getDefaultValueAnnotation()
    {
        return $this->defaultValueAnnotation;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation $defaultValueAnnotation
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueAnnotation(FHIRAnnotation $defaultValueAnnotation = null)
    {
        $this->defaultValueAnnotation = $defaultValueAnnotation;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment
     */
    public function getDefaultValueAttachment()
    {
        return $this->defaultValueAttachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment $defaultValueAttachment
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueAttachment(FHIRAttachment $defaultValueAttachment = null)
    {
        $this->defaultValueAttachment = $defaultValueAttachment;
        return $this;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBase64Binary
     */
    public function getDefaultValueBase64Binary()
    {
        return $this->defaultValueBase64Binary;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBase64Binary $defaultValueBase64Binary
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueBase64Binary($defaultValueBase64Binary = null)
    {
        if (null === $defaultValueBase64Binary) {
            $this->defaultValueBase64Binary = null;
            return $this;
        }
        if ($defaultValueBase64Binary instanceof FHIRBase64Binary) {
            $this->defaultValueBase64Binary = $defaultValueBase64Binary;
            return $this;
        }
        $this->defaultValueBase64Binary = new FHIRBase64Binary($defaultValueBase64Binary);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getDefaultValueBoolean()
    {
        return $this->defaultValueBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $defaultValueBoolean
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueBoolean($defaultValueBoolean = null)
    {
        if (null === $defaultValueBoolean) {
            $this->defaultValueBoolean = null;
            return $this;
        }
        if ($defaultValueBoolean instanceof FHIRBoolean) {
            $this->defaultValueBoolean = $defaultValueBoolean;
            return $this;
        }
        $this->defaultValueBoolean = new FHIRBoolean($defaultValueBoolean);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
     */
    public function getDefaultValueCanonical()
    {
        return $this->defaultValueCanonical;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $defaultValueCanonical
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueCanonical($defaultValueCanonical = null)
    {
        if (null === $defaultValueCanonical) {
            $this->defaultValueCanonical = null;
            return $this;
        }
        if ($defaultValueCanonical instanceof FHIRCanonical) {
            $this->defaultValueCanonical = $defaultValueCanonical;
            return $this;
        }
        $this->defaultValueCanonical = new FHIRCanonical($defaultValueCanonical);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    public function getDefaultValueCode()
    {
        return $this->defaultValueCode;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode $defaultValueCode
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueCode($defaultValueCode = null)
    {
        if (null === $defaultValueCode) {
            $this->defaultValueCode = null;
            return $this;
        }
        if ($defaultValueCode instanceof FHIRCode) {
            $this->defaultValueCode = $defaultValueCode;
            return $this;
        }
        $this->defaultValueCode = new FHIRCode($defaultValueCode);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getDefaultValueCodeableConcept()
    {
        return $this->defaultValueCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $defaultValueCodeableConcept
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueCodeableConcept(FHIRCodeableConcept $defaultValueCodeableConcept = null)
    {
        $this->defaultValueCodeableConcept = $defaultValueCodeableConcept;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding
     */
    public function getDefaultValueCoding()
    {
        return $this->defaultValueCoding;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding $defaultValueCoding
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueCoding(FHIRCoding $defaultValueCoding = null)
    {
        $this->defaultValueCoding = $defaultValueCoding;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail
     */
    public function getDefaultValueContactDetail()
    {
        return $this->defaultValueContactDetail;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail $defaultValueContactDetail
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueContactDetail(FHIRContactDetail $defaultValueContactDetail = null)
    {
        $this->defaultValueContactDetail = $defaultValueContactDetail;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint
     */
    public function getDefaultValueContactPoint()
    {
        return $this->defaultValueContactPoint;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint $defaultValueContactPoint
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueContactPoint(FHIRContactPoint $defaultValueContactPoint = null)
    {
        $this->defaultValueContactPoint = $defaultValueContactPoint;
        return $this;
    }

    /**
     * A contributor to the content of a knowledge asset, including authors, editors,
     * reviewers, and endorsers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContributor
     */
    public function getDefaultValueContributor()
    {
        return $this->defaultValueContributor;
    }

    /**
     * A contributor to the content of a knowledge asset, including authors, editors,
     * reviewers, and endorsers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContributor $defaultValueContributor
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueContributor(FHIRContributor $defaultValueContributor = null)
    {
        $this->defaultValueContributor = $defaultValueContributor;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRCount
     */
    public function getDefaultValueCount()
    {
        return $this->defaultValueCount;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRCount $defaultValueCount
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueCount(FHIRCount $defaultValueCount = null)
    {
        $this->defaultValueCount = $defaultValueCount;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement
     */
    public function getDefaultValueDataRequirement()
    {
        return $this->defaultValueDataRequirement;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement $defaultValueDataRequirement
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueDataRequirement(FHIRDataRequirement $defaultValueDataRequirement = null)
    {
        $this->defaultValueDataRequirement = $defaultValueDataRequirement;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    public function getDefaultValueDate()
    {
        return $this->defaultValueDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate $defaultValueDate
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueDate($defaultValueDate = null)
    {
        if (null === $defaultValueDate) {
            $this->defaultValueDate = null;
            return $this;
        }
        if ($defaultValueDate instanceof FHIRDate) {
            $this->defaultValueDate = $defaultValueDate;
            return $this;
        }
        $this->defaultValueDate = new FHIRDate($defaultValueDate);
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
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getDefaultValueDateTime()
    {
        return $this->defaultValueDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $defaultValueDateTime
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueDateTime($defaultValueDateTime = null)
    {
        if (null === $defaultValueDateTime) {
            $this->defaultValueDateTime = null;
            return $this;
        }
        if ($defaultValueDateTime instanceof FHIRDateTime) {
            $this->defaultValueDateTime = $defaultValueDateTime;
            return $this;
        }
        $this->defaultValueDateTime = new FHIRDateTime($defaultValueDateTime);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getDefaultValueDecimal()
    {
        return $this->defaultValueDecimal;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $defaultValueDecimal
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueDecimal($defaultValueDecimal = null)
    {
        if (null === $defaultValueDecimal) {
            $this->defaultValueDecimal = null;
            return $this;
        }
        if ($defaultValueDecimal instanceof FHIRDecimal) {
            $this->defaultValueDecimal = $defaultValueDecimal;
            return $this;
        }
        $this->defaultValueDecimal = new FHIRDecimal($defaultValueDecimal);
        return $this;
    }

    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getDefaultValueDistance()
    {
        return $this->defaultValueDistance;
    }

    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDistance $defaultValueDistance
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueDistance(FHIRDistance $defaultValueDistance = null)
    {
        $this->defaultValueDistance = $defaultValueDistance;
        return $this;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage
     */
    public function getDefaultValueDosage()
    {
        return $this->defaultValueDosage;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage $defaultValueDosage
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueDosage(FHIRDosage $defaultValueDosage = null)
    {
        $this->defaultValueDosage = $defaultValueDosage;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getDefaultValueDuration()
    {
        return $this->defaultValueDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration $defaultValueDuration
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueDuration(FHIRDuration $defaultValueDuration = null)
    {
        $this->defaultValueDuration = $defaultValueDuration;
        return $this;
    }

    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExpression
     */
    public function getDefaultValueExpression()
    {
        return $this->defaultValueExpression;
    }

    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExpression $defaultValueExpression
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueExpression(FHIRExpression $defaultValueExpression = null)
    {
        $this->defaultValueExpression = $defaultValueExpression;
        return $this;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRHumanName
     */
    public function getDefaultValueHumanName()
    {
        return $this->defaultValueHumanName;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRHumanName $defaultValueHumanName
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueHumanName(FHIRHumanName $defaultValueHumanName = null)
    {
        $this->defaultValueHumanName = $defaultValueHumanName;
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
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId
     */
    public function getDefaultValueId()
    {
        return $this->defaultValueId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId $defaultValueId
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueId($defaultValueId = null)
    {
        if (null === $defaultValueId) {
            $this->defaultValueId = null;
            return $this;
        }
        if ($defaultValueId instanceof FHIRId) {
            $this->defaultValueId = $defaultValueId;
            return $this;
        }
        $this->defaultValueId = new FHIRId($defaultValueId);
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    public function getDefaultValueIdentifier()
    {
        return $this->defaultValueIdentifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $defaultValueIdentifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueIdentifier(FHIRIdentifier $defaultValueIdentifier = null)
    {
        $this->defaultValueIdentifier = $defaultValueIdentifier;
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
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant
     */
    public function getDefaultValueInstant()
    {
        return $this->defaultValueInstant;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant $defaultValueInstant
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueInstant($defaultValueInstant = null)
    {
        if (null === $defaultValueInstant) {
            $this->defaultValueInstant = null;
            return $this;
        }
        if ($defaultValueInstant instanceof FHIRInstant) {
            $this->defaultValueInstant = $defaultValueInstant;
            return $this;
        }
        $this->defaultValueInstant = new FHIRInstant($defaultValueInstant);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getDefaultValueInteger()
    {
        return $this->defaultValueInteger;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $defaultValueInteger
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueInteger($defaultValueInteger = null)
    {
        if (null === $defaultValueInteger) {
            $this->defaultValueInteger = null;
            return $this;
        }
        if ($defaultValueInteger instanceof FHIRInteger) {
            $this->defaultValueInteger = $defaultValueInteger;
            return $this;
        }
        $this->defaultValueInteger = new FHIRInteger($defaultValueInteger);
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
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    public function getDefaultValueMarkdown()
    {
        return $this->defaultValueMarkdown;
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
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown $defaultValueMarkdown
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueMarkdown($defaultValueMarkdown = null)
    {
        if (null === $defaultValueMarkdown) {
            $this->defaultValueMarkdown = null;
            return $this;
        }
        if ($defaultValueMarkdown instanceof FHIRMarkdown) {
            $this->defaultValueMarkdown = $defaultValueMarkdown;
            return $this;
        }
        $this->defaultValueMarkdown = new FHIRMarkdown($defaultValueMarkdown);
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney
     */
    public function getDefaultValueMoney()
    {
        return $this->defaultValueMoney;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney $defaultValueMoney
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueMoney(FHIRMoney $defaultValueMoney = null)
    {
        $this->defaultValueMoney = $defaultValueMoney;
        return $this;
    }

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIROid
     */
    public function getDefaultValueOid()
    {
        return $this->defaultValueOid;
    }

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIROid $defaultValueOid
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueOid($defaultValueOid = null)
    {
        if (null === $defaultValueOid) {
            $this->defaultValueOid = null;
            return $this;
        }
        if ($defaultValueOid instanceof FHIROid) {
            $this->defaultValueOid = $defaultValueOid;
            return $this;
        }
        $this->defaultValueOid = new FHIROid($defaultValueOid);
        return $this;
    }

    /**
     * The parameters to the module. This collection specifies both the input and
     * output parameters. Input parameters are provided by the caller as part of the
     * $evaluate operation. Output parameters are included in the GuidanceResponse.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRParameterDefinition
     */
    public function getDefaultValueParameterDefinition()
    {
        return $this->defaultValueParameterDefinition;
    }

    /**
     * The parameters to the module. This collection specifies both the input and
     * output parameters. Input parameters are provided by the caller as part of the
     * $evaluate operation. Output parameters are included in the GuidanceResponse.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRParameterDefinition $defaultValueParameterDefinition
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueParameterDefinition(FHIRParameterDefinition $defaultValueParameterDefinition = null)
    {
        $this->defaultValueParameterDefinition = $defaultValueParameterDefinition;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    public function getDefaultValuePeriod()
    {
        return $this->defaultValuePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $defaultValuePeriod
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValuePeriod(FHIRPeriod $defaultValuePeriod = null)
    {
        $this->defaultValuePeriod = $defaultValuePeriod;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    public function getDefaultValuePositiveInt()
    {
        return $this->defaultValuePositiveInt;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt $defaultValuePositiveInt
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValuePositiveInt($defaultValuePositiveInt = null)
    {
        if (null === $defaultValuePositiveInt) {
            $this->defaultValuePositiveInt = null;
            return $this;
        }
        if ($defaultValuePositiveInt instanceof FHIRPositiveInt) {
            $this->defaultValuePositiveInt = $defaultValuePositiveInt;
            return $this;
        }
        $this->defaultValuePositiveInt = new FHIRPositiveInt($defaultValuePositiveInt);
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getDefaultValueQuantity()
    {
        return $this->defaultValueQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $defaultValueQuantity
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueQuantity(FHIRQuantity $defaultValueQuantity = null)
    {
        $this->defaultValueQuantity = $defaultValueQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    public function getDefaultValueRange()
    {
        return $this->defaultValueRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange $defaultValueRange
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueRange(FHIRRange $defaultValueRange = null)
    {
        $this->defaultValueRange = $defaultValueRange;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio
     */
    public function getDefaultValueRatio()
    {
        return $this->defaultValueRatio;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio $defaultValueRatio
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueRatio(FHIRRatio $defaultValueRatio = null)
    {
        $this->defaultValueRatio = $defaultValueRatio;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getDefaultValueReference()
    {
        return $this->defaultValueReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $defaultValueReference
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueReference(FHIRReference $defaultValueReference = null)
    {
        $this->defaultValueReference = $defaultValueReference;
        return $this;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRelatedArtifact
     */
    public function getDefaultValueRelatedArtifact()
    {
        return $this->defaultValueRelatedArtifact;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRelatedArtifact $defaultValueRelatedArtifact
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueRelatedArtifact(FHIRRelatedArtifact $defaultValueRelatedArtifact = null)
    {
        $this->defaultValueRelatedArtifact = $defaultValueRelatedArtifact;
        return $this;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSampledData
     */
    public function getDefaultValueSampledData()
    {
        return $this->defaultValueSampledData;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSampledData $defaultValueSampledData
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueSampledData(FHIRSampledData $defaultValueSampledData = null)
    {
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature
     */
    public function getDefaultValueSignature()
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature $defaultValueSignature
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueSignature(FHIRSignature $defaultValueSignature = null)
    {
        $this->defaultValueSignature = $defaultValueSignature;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDefaultValueString()
    {
        return $this->defaultValueString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $defaultValueString
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueString($defaultValueString = null)
    {
        if (null === $defaultValueString) {
            $this->defaultValueString = null;
            return $this;
        }
        if ($defaultValueString instanceof FHIRString) {
            $this->defaultValueString = $defaultValueString;
            return $this;
        }
        $this->defaultValueString = new FHIRString($defaultValueString);
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime
     */
    public function getDefaultValueTime()
    {
        return $this->defaultValueTime;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime $defaultValueTime
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueTime($defaultValueTime = null)
    {
        if (null === $defaultValueTime) {
            $this->defaultValueTime = null;
            return $this;
        }
        if ($defaultValueTime instanceof FHIRTime) {
            $this->defaultValueTime = $defaultValueTime;
            return $this;
        }
        $this->defaultValueTime = new FHIRTime($defaultValueTime);
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
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getDefaultValueTiming()
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming $defaultValueTiming
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueTiming(FHIRTiming $defaultValueTiming = null)
    {
        $this->defaultValueTiming = $defaultValueTiming;
        return $this;
    }

    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTriggerDefinition
     */
    public function getDefaultValueTriggerDefinition()
    {
        return $this->defaultValueTriggerDefinition;
    }

    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTriggerDefinition $defaultValueTriggerDefinition
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueTriggerDefinition(FHIRTriggerDefinition $defaultValueTriggerDefinition = null)
    {
        $this->defaultValueTriggerDefinition = $defaultValueTriggerDefinition;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt
     */
    public function getDefaultValueUnsignedInt()
    {
        return $this->defaultValueUnsignedInt;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt $defaultValueUnsignedInt
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueUnsignedInt($defaultValueUnsignedInt = null)
    {
        if (null === $defaultValueUnsignedInt) {
            $this->defaultValueUnsignedInt = null;
            return $this;
        }
        if ($defaultValueUnsignedInt instanceof FHIRUnsignedInt) {
            $this->defaultValueUnsignedInt = $defaultValueUnsignedInt;
            return $this;
        }
        $this->defaultValueUnsignedInt = new FHIRUnsignedInt($defaultValueUnsignedInt);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    public function getDefaultValueUri()
    {
        return $this->defaultValueUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $defaultValueUri
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueUri($defaultValueUri = null)
    {
        if (null === $defaultValueUri) {
            $this->defaultValueUri = null;
            return $this;
        }
        if ($defaultValueUri instanceof FHIRUri) {
            $this->defaultValueUri = $defaultValueUri;
            return $this;
        }
        $this->defaultValueUri = new FHIRUri($defaultValueUri);
        return $this;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUrl
     */
    public function getDefaultValueUrl()
    {
        return $this->defaultValueUrl;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUrl $defaultValueUrl
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueUrl($defaultValueUrl = null)
    {
        if (null === $defaultValueUrl) {
            $this->defaultValueUrl = null;
            return $this;
        }
        if ($defaultValueUrl instanceof FHIRUrl) {
            $this->defaultValueUrl = $defaultValueUrl;
            return $this;
        }
        $this->defaultValueUrl = new FHIRUrl($defaultValueUrl);
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
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext
     */
    public function getDefaultValueUsageContext()
    {
        return $this->defaultValueUsageContext;
    }

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext $defaultValueUsageContext
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueUsageContext(FHIRUsageContext $defaultValueUsageContext = null)
    {
        $this->defaultValueUsageContext = $defaultValueUsageContext;
        return $this;
    }

    /**
     * A UUID, represented as a URI
     * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUuid
     */
    public function getDefaultValueUuid()
    {
        return $this->defaultValueUuid;
    }

    /**
     * A UUID, represented as a URI
     * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A value to use if there is no existing value in the source object. (choose any
     * one of defaultValue*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUuid $defaultValueUuid
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setDefaultValueUuid($defaultValueUuid = null)
    {
        if (null === $defaultValueUuid) {
            $this->defaultValueUuid = null;
            return $this;
        }
        if ($defaultValueUuid instanceof FHIRUuid) {
            $this->defaultValueUuid = $defaultValueUuid;
            return $this;
        }
        $this->defaultValueUuid = new FHIRUuid($defaultValueUuid);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Optional field for this source.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Optional field for this source.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $element
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setElement($element = null)
    {
        if (null === $element) {
            $this->element = null;
            return $this;
        }
        if ($element instanceof FHIRString) {
            $this->element = $element;
            return $this;
        }
        $this->element = new FHIRString($element);
        return $this;
    }

    /**
     * If field is a list, how to manage the source.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * How to handle the list mode for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRStructureMapSourceListMode
     */
    public function getListMode()
    {
        return $this->listMode;
    }

    /**
     * If field is a list, how to manage the source.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * How to handle the list mode for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRStructureMapSourceListMode $listMode
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setListMode(FHIRStructureMapSourceListMode $listMode = null)
    {
        $this->listMode = $listMode;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A FHIRPath expression which specifies a message to put in the transform log when
     * content matching the source rule is found.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getLogMessage()
    {
        return $this->logMessage;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A FHIRPath expression which specifies a message to put in the transform log when
     * content matching the source rule is found.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $logMessage
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setLogMessage($logMessage = null)
    {
        if (null === $logMessage) {
            $this->logMessage = null;
            return $this;
        }
        if ($logMessage instanceof FHIRString) {
            $this->logMessage = $logMessage;
            return $this;
        }
        $this->logMessage = new FHIRString($logMessage);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specified maximum cardinality for the element - a number or a "*". This is
     * optional; if present, it acts an implicit check on the input content (* just
     * serves as documentation; it's the default value).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specified maximum cardinality for the element - a number or a "*". This is
     * optional; if present, it acts an implicit check on the input content (* just
     * serves as documentation; it's the default value).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $max
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setMax($max = null)
    {
        if (null === $max) {
            $this->max = null;
            return $this;
        }
        if ($max instanceof FHIRString) {
            $this->max = $max;
            return $this;
        }
        $this->max = new FHIRString($max);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specified minimum cardinality for the element. This is optional; if present, it
     * acts an implicit check on the input content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specified minimum cardinality for the element. This is optional; if present, it
     * acts an implicit check on the input content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $min
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setMin($min = null)
    {
        if (null === $min) {
            $this->min = null;
            return $this;
        }
        if ($min instanceof FHIRInteger) {
            $this->min = $min;
            return $this;
        }
        $this->min = new FHIRInteger($min);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specified type for the element. This works as a condition on the mapping - use
     * for polymorphic elements.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Specified type for the element. This works as a condition on the mapping - use
     * for polymorphic elements.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $type
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setType($type = null)
    {
        if (null === $type) {
            $this->type = null;
            return $this;
        }
        if ($type instanceof FHIRString) {
            $this->type = $type;
            return $this;
        }
        $this->type = new FHIRString($type);
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
     * Named context for field, if a field is specified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId
     */
    public function getVariable()
    {
        return $this->variable;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Named context for field, if a field is specified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId $variable
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function setVariable($variable = null)
    {
        if (null === $variable) {
            $this->variable = null;
            return $this;
        }
        if ($variable instanceof FHIRId) {
            $this->variable = $variable;
            return $this;
        }
        $this->variable = new FHIRId($variable);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
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
                throw new \DomainException(sprintf('FHIRStructureMapSource::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRStructureMapSource::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRStructureMapSource;
        } elseif (!is_object($type) || !($type instanceof FHIRStructureMapSource)) {
            throw new \RuntimeException(sprintf(
                'FHIRStructureMapSource::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource or null, %s seen.',
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
        if (isset($attributes->check)) {
            $type->setCheck((string)$attributes->check);
        }
        if (isset($children->check)) {
            $type->setCheck(FHIRString::xmlUnserialize($children->check));
        }
        if (isset($attributes->condition)) {
            $type->setCondition((string)$attributes->condition);
        }
        if (isset($children->condition)) {
            $type->setCondition(FHIRString::xmlUnserialize($children->condition));
        }
        if (isset($attributes->context)) {
            $type->setContext((string)$attributes->context);
        }
        if (isset($children->context)) {
            $type->setContext(FHIRId::xmlUnserialize($children->context));
        }
        if (isset($children->defaultValueAddress)) {
            $type->setDefaultValueAddress(FHIRAddress::xmlUnserialize($children->defaultValueAddress));
        }
        if (isset($children->defaultValueAge)) {
            $type->setDefaultValueAge(FHIRAge::xmlUnserialize($children->defaultValueAge));
        }
        if (isset($children->defaultValueAnnotation)) {
            $type->setDefaultValueAnnotation(FHIRAnnotation::xmlUnserialize($children->defaultValueAnnotation));
        }
        if (isset($children->defaultValueAttachment)) {
            $type->setDefaultValueAttachment(FHIRAttachment::xmlUnserialize($children->defaultValueAttachment));
        }
        if (isset($attributes->defaultValueBase64Binary)) {
            $type->setDefaultValueBase64Binary((string)$attributes->defaultValueBase64Binary);
        }
        if (isset($children->defaultValueBase64Binary)) {
            $type->setDefaultValueBase64Binary(FHIRBase64Binary::xmlUnserialize($children->defaultValueBase64Binary));
        }
        if (isset($attributes->defaultValueBoolean)) {
            $type->setDefaultValueBoolean((string)$attributes->defaultValueBoolean);
        }
        if (isset($children->defaultValueBoolean)) {
            $type->setDefaultValueBoolean(FHIRBoolean::xmlUnserialize($children->defaultValueBoolean));
        }
        if (isset($attributes->defaultValueCanonical)) {
            $type->setDefaultValueCanonical((string)$attributes->defaultValueCanonical);
        }
        if (isset($children->defaultValueCanonical)) {
            $type->setDefaultValueCanonical(FHIRCanonical::xmlUnserialize($children->defaultValueCanonical));
        }
        if (isset($attributes->defaultValueCode)) {
            $type->setDefaultValueCode((string)$attributes->defaultValueCode);
        }
        if (isset($children->defaultValueCode)) {
            $type->setDefaultValueCode(FHIRCode::xmlUnserialize($children->defaultValueCode));
        }
        if (isset($children->defaultValueCodeableConcept)) {
            $type->setDefaultValueCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->defaultValueCodeableConcept));
        }
        if (isset($children->defaultValueCoding)) {
            $type->setDefaultValueCoding(FHIRCoding::xmlUnserialize($children->defaultValueCoding));
        }
        if (isset($children->defaultValueContactDetail)) {
            $type->setDefaultValueContactDetail(FHIRContactDetail::xmlUnserialize($children->defaultValueContactDetail));
        }
        if (isset($children->defaultValueContactPoint)) {
            $type->setDefaultValueContactPoint(FHIRContactPoint::xmlUnserialize($children->defaultValueContactPoint));
        }
        if (isset($children->defaultValueContributor)) {
            $type->setDefaultValueContributor(FHIRContributor::xmlUnserialize($children->defaultValueContributor));
        }
        if (isset($children->defaultValueCount)) {
            $type->setDefaultValueCount(FHIRCount::xmlUnserialize($children->defaultValueCount));
        }
        if (isset($children->defaultValueDataRequirement)) {
            $type->setDefaultValueDataRequirement(FHIRDataRequirement::xmlUnserialize($children->defaultValueDataRequirement));
        }
        if (isset($attributes->defaultValueDate)) {
            $type->setDefaultValueDate((string)$attributes->defaultValueDate);
        }
        if (isset($children->defaultValueDate)) {
            $type->setDefaultValueDate(FHIRDate::xmlUnserialize($children->defaultValueDate));
        }
        if (isset($attributes->defaultValueDateTime)) {
            $type->setDefaultValueDateTime((string)$attributes->defaultValueDateTime);
        }
        if (isset($children->defaultValueDateTime)) {
            $type->setDefaultValueDateTime(FHIRDateTime::xmlUnserialize($children->defaultValueDateTime));
        }
        if (isset($attributes->defaultValueDecimal)) {
            $type->setDefaultValueDecimal((string)$attributes->defaultValueDecimal);
        }
        if (isset($children->defaultValueDecimal)) {
            $type->setDefaultValueDecimal(FHIRDecimal::xmlUnserialize($children->defaultValueDecimal));
        }
        if (isset($children->defaultValueDistance)) {
            $type->setDefaultValueDistance(FHIRDistance::xmlUnserialize($children->defaultValueDistance));
        }
        if (isset($children->defaultValueDosage)) {
            $type->setDefaultValueDosage(FHIRDosage::xmlUnserialize($children->defaultValueDosage));
        }
        if (isset($children->defaultValueDuration)) {
            $type->setDefaultValueDuration(FHIRDuration::xmlUnserialize($children->defaultValueDuration));
        }
        if (isset($children->defaultValueExpression)) {
            $type->setDefaultValueExpression(FHIRExpression::xmlUnserialize($children->defaultValueExpression));
        }
        if (isset($children->defaultValueHumanName)) {
            $type->setDefaultValueHumanName(FHIRHumanName::xmlUnserialize($children->defaultValueHumanName));
        }
        if (isset($attributes->defaultValueId)) {
            $type->setDefaultValueId((string)$attributes->defaultValueId);
        }
        if (isset($children->defaultValueId)) {
            $type->setDefaultValueId(FHIRId::xmlUnserialize($children->defaultValueId));
        }
        if (isset($children->defaultValueIdentifier)) {
            $type->setDefaultValueIdentifier(FHIRIdentifier::xmlUnserialize($children->defaultValueIdentifier));
        }
        if (isset($attributes->defaultValueInstant)) {
            $type->setDefaultValueInstant((string)$attributes->defaultValueInstant);
        }
        if (isset($children->defaultValueInstant)) {
            $type->setDefaultValueInstant(FHIRInstant::xmlUnserialize($children->defaultValueInstant));
        }
        if (isset($attributes->defaultValueInteger)) {
            $type->setDefaultValueInteger((string)$attributes->defaultValueInteger);
        }
        if (isset($children->defaultValueInteger)) {
            $type->setDefaultValueInteger(FHIRInteger::xmlUnserialize($children->defaultValueInteger));
        }
        if (isset($attributes->defaultValueMarkdown)) {
            $type->setDefaultValueMarkdown((string)$attributes->defaultValueMarkdown);
        }
        if (isset($children->defaultValueMarkdown)) {
            $type->setDefaultValueMarkdown(FHIRMarkdown::xmlUnserialize($children->defaultValueMarkdown));
        }
        if (isset($children->defaultValueMoney)) {
            $type->setDefaultValueMoney(FHIRMoney::xmlUnserialize($children->defaultValueMoney));
        }
        if (isset($attributes->defaultValueOid)) {
            $type->setDefaultValueOid((string)$attributes->defaultValueOid);
        }
        if (isset($children->defaultValueOid)) {
            $type->setDefaultValueOid(FHIROid::xmlUnserialize($children->defaultValueOid));
        }
        if (isset($children->defaultValueParameterDefinition)) {
            $type->setDefaultValueParameterDefinition(FHIRParameterDefinition::xmlUnserialize($children->defaultValueParameterDefinition));
        }
        if (isset($children->defaultValuePeriod)) {
            $type->setDefaultValuePeriod(FHIRPeriod::xmlUnserialize($children->defaultValuePeriod));
        }
        if (isset($attributes->defaultValuePositiveInt)) {
            $type->setDefaultValuePositiveInt((string)$attributes->defaultValuePositiveInt);
        }
        if (isset($children->defaultValuePositiveInt)) {
            $type->setDefaultValuePositiveInt(FHIRPositiveInt::xmlUnserialize($children->defaultValuePositiveInt));
        }
        if (isset($children->defaultValueQuantity)) {
            $type->setDefaultValueQuantity(FHIRQuantity::xmlUnserialize($children->defaultValueQuantity));
        }
        if (isset($children->defaultValueRange)) {
            $type->setDefaultValueRange(FHIRRange::xmlUnserialize($children->defaultValueRange));
        }
        if (isset($children->defaultValueRatio)) {
            $type->setDefaultValueRatio(FHIRRatio::xmlUnserialize($children->defaultValueRatio));
        }
        if (isset($children->defaultValueReference)) {
            $type->setDefaultValueReference(FHIRReference::xmlUnserialize($children->defaultValueReference));
        }
        if (isset($children->defaultValueRelatedArtifact)) {
            $type->setDefaultValueRelatedArtifact(FHIRRelatedArtifact::xmlUnserialize($children->defaultValueRelatedArtifact));
        }
        if (isset($children->defaultValueSampledData)) {
            $type->setDefaultValueSampledData(FHIRSampledData::xmlUnserialize($children->defaultValueSampledData));
        }
        if (isset($children->defaultValueSignature)) {
            $type->setDefaultValueSignature(FHIRSignature::xmlUnserialize($children->defaultValueSignature));
        }
        if (isset($attributes->defaultValueString)) {
            $type->setDefaultValueString((string)$attributes->defaultValueString);
        }
        if (isset($children->defaultValueString)) {
            $type->setDefaultValueString(FHIRString::xmlUnserialize($children->defaultValueString));
        }
        if (isset($attributes->defaultValueTime)) {
            $type->setDefaultValueTime((string)$attributes->defaultValueTime);
        }
        if (isset($children->defaultValueTime)) {
            $type->setDefaultValueTime(FHIRTime::xmlUnserialize($children->defaultValueTime));
        }
        if (isset($children->defaultValueTiming)) {
            $type->setDefaultValueTiming(FHIRTiming::xmlUnserialize($children->defaultValueTiming));
        }
        if (isset($children->defaultValueTriggerDefinition)) {
            $type->setDefaultValueTriggerDefinition(FHIRTriggerDefinition::xmlUnserialize($children->defaultValueTriggerDefinition));
        }
        if (isset($attributes->defaultValueUnsignedInt)) {
            $type->setDefaultValueUnsignedInt((string)$attributes->defaultValueUnsignedInt);
        }
        if (isset($children->defaultValueUnsignedInt)) {
            $type->setDefaultValueUnsignedInt(FHIRUnsignedInt::xmlUnserialize($children->defaultValueUnsignedInt));
        }
        if (isset($attributes->defaultValueUri)) {
            $type->setDefaultValueUri((string)$attributes->defaultValueUri);
        }
        if (isset($children->defaultValueUri)) {
            $type->setDefaultValueUri(FHIRUri::xmlUnserialize($children->defaultValueUri));
        }
        if (isset($attributes->defaultValueUrl)) {
            $type->setDefaultValueUrl((string)$attributes->defaultValueUrl);
        }
        if (isset($children->defaultValueUrl)) {
            $type->setDefaultValueUrl(FHIRUrl::xmlUnserialize($children->defaultValueUrl));
        }
        if (isset($children->defaultValueUsageContext)) {
            $type->setDefaultValueUsageContext(FHIRUsageContext::xmlUnserialize($children->defaultValueUsageContext));
        }
        if (isset($attributes->defaultValueUuid)) {
            $type->setDefaultValueUuid((string)$attributes->defaultValueUuid);
        }
        if (isset($children->defaultValueUuid)) {
            $type->setDefaultValueUuid(FHIRUuid::xmlUnserialize($children->defaultValueUuid));
        }
        if (isset($attributes->element)) {
            $type->setElement((string)$attributes->element);
        }
        if (isset($children->element)) {
            $type->setElement(FHIRString::xmlUnserialize($children->element));
        }
        if (isset($children->listMode)) {
            $type->setListMode(FHIRStructureMapSourceListMode::xmlUnserialize($children->listMode));
        }
        if (isset($attributes->logMessage)) {
            $type->setLogMessage((string)$attributes->logMessage);
        }
        if (isset($children->logMessage)) {
            $type->setLogMessage(FHIRString::xmlUnserialize($children->logMessage));
        }
        if (isset($attributes->max)) {
            $type->setMax((string)$attributes->max);
        }
        if (isset($children->max)) {
            $type->setMax(FHIRString::xmlUnserialize($children->max));
        }
        if (isset($attributes->min)) {
            $type->setMin((string)$attributes->min);
        }
        if (isset($children->min)) {
            $type->setMin(FHIRInteger::xmlUnserialize($children->min));
        }
        if (isset($attributes->type)) {
            $type->setType((string)$attributes->type);
        }
        if (isset($children->type)) {
            $type->setType(FHIRString::xmlUnserialize($children->type));
        }
        if (isset($attributes->variable)) {
            $type->setVariable((string)$attributes->variable);
        }
        if (isset($children->variable)) {
            $type->setVariable(FHIRId::xmlUnserialize($children->variable));
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
        if (null !== ($v = $this->getCheck())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CHECK, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCondition())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONDITION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getContext())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTEXT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValueAddress())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_ADDRESS, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValueAge())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_AGE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValueAnnotation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_ANNOTATION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValueAttachment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_ATTACHMENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefaultValueBase64Binary())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_BASE_64BINARY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefaultValueBoolean())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_BOOLEAN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefaultValueCanonical())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_CANONICAL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefaultValueCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_CODE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValueCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValueCoding())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_CODING, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValueContactDetail())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValueContactPoint())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_CONTACT_POINT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValueContributor())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_CONTRIBUTOR, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValueCount())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_COUNT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValueDataRequirement())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefaultValueDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefaultValueDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefaultValueDecimal())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_DECIMAL, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValueDistance())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_DISTANCE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValueDosage())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_DOSAGE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValueDuration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_DURATION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValueExpression())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_EXPRESSION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValueHumanName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_HUMAN_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefaultValueId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_ID, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValueIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefaultValueInstant())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_INSTANT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefaultValueInteger())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_INTEGER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefaultValueMarkdown())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_MARKDOWN, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValueMoney())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_MONEY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefaultValueOid())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_OID, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValueParameterDefinition())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValuePeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefaultValuePositiveInt())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_POSITIVE_INT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValueQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValueRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_RANGE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValueRatio())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_RATIO, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValueReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValueRelatedArtifact())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValueSampledData())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_SAMPLED_DATA, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValueSignature())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_SIGNATURE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefaultValueString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_STRING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefaultValueTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_TIME, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValueTiming())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_TIMING, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValueTriggerDefinition())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefaultValueUnsignedInt())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_UNSIGNED_INT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefaultValueUri())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_URI, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefaultValueUrl())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_URL, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefaultValueUsageContext())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefaultValueUuid())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_UUID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getElement())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ELEMENT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getListMode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LIST_MODE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getLogMessage())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LOG_MESSAGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMax())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MAX, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMin())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MIN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getVariable())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VARIABLE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCheck())) {
            $a[self::FIELD_CHECK] = $v->getValue();
            $a[self::FIELD_CHECK_EXT] = $v;
        }
        if (null !== ($v = $this->getCondition())) {
            $a[self::FIELD_CONDITION] = $v->getValue();
            $a[self::FIELD_CONDITION_EXT] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a[self::FIELD_CONTEXT] = $v->getValue();
            $a[self::FIELD_CONTEXT_EXT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueAddress())) {
            $a[self::FIELD_DEFAULT_VALUE_ADDRESS] = $v;
        }
        if (null !== ($v = $this->getDefaultValueAge())) {
            $a[self::FIELD_DEFAULT_VALUE_AGE] = $v;
        }
        if (null !== ($v = $this->getDefaultValueAnnotation())) {
            $a[self::FIELD_DEFAULT_VALUE_ANNOTATION] = $v;
        }
        if (null !== ($v = $this->getDefaultValueAttachment())) {
            $a[self::FIELD_DEFAULT_VALUE_ATTACHMENT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueBase64Binary())) {
            $a[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] = $v->getValue();
            $a[self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueBoolean())) {
            $a[self::FIELD_DEFAULT_VALUE_BOOLEAN] = $v->getValue();
            $a[self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueCanonical())) {
            $a[self::FIELD_DEFAULT_VALUE_CANONICAL] = $v->getValue();
            $a[self::FIELD_DEFAULT_VALUE_CANONICAL_EXT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueCode())) {
            $a[self::FIELD_DEFAULT_VALUE_CODE] = $v->getValue();
            $a[self::FIELD_DEFAULT_VALUE_CODE_EXT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueCodeableConcept())) {
            $a[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueCoding())) {
            $a[self::FIELD_DEFAULT_VALUE_CODING] = $v;
        }
        if (null !== ($v = $this->getDefaultValueContactDetail())) {
            $a[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL] = $v;
        }
        if (null !== ($v = $this->getDefaultValueContactPoint())) {
            $a[self::FIELD_DEFAULT_VALUE_CONTACT_POINT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueContributor())) {
            $a[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR] = $v;
        }
        if (null !== ($v = $this->getDefaultValueCount())) {
            $a[self::FIELD_DEFAULT_VALUE_COUNT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueDataRequirement())) {
            $a[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueDate())) {
            $a[self::FIELD_DEFAULT_VALUE_DATE] = $v->getValue();
            $a[self::FIELD_DEFAULT_VALUE_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueDateTime())) {
            $a[self::FIELD_DEFAULT_VALUE_DATE_TIME] = $v->getValue();
            $a[self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueDecimal())) {
            $a[self::FIELD_DEFAULT_VALUE_DECIMAL] = $v->getValue();
            $a[self::FIELD_DEFAULT_VALUE_DECIMAL_EXT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueDistance())) {
            $a[self::FIELD_DEFAULT_VALUE_DISTANCE] = $v;
        }
        if (null !== ($v = $this->getDefaultValueDosage())) {
            $a[self::FIELD_DEFAULT_VALUE_DOSAGE] = $v;
        }
        if (null !== ($v = $this->getDefaultValueDuration())) {
            $a[self::FIELD_DEFAULT_VALUE_DURATION] = $v;
        }
        if (null !== ($v = $this->getDefaultValueExpression())) {
            $a[self::FIELD_DEFAULT_VALUE_EXPRESSION] = $v;
        }
        if (null !== ($v = $this->getDefaultValueHumanName())) {
            $a[self::FIELD_DEFAULT_VALUE_HUMAN_NAME] = $v;
        }
        if (null !== ($v = $this->getDefaultValueId())) {
            $a[self::FIELD_DEFAULT_VALUE_ID] = $v->getValue();
            $a[self::FIELD_DEFAULT_VALUE_ID_EXT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueIdentifier())) {
            $a[self::FIELD_DEFAULT_VALUE_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getDefaultValueInstant())) {
            $a[self::FIELD_DEFAULT_VALUE_INSTANT] = $v->getValue();
            $a[self::FIELD_DEFAULT_VALUE_INSTANT_EXT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueInteger())) {
            $a[self::FIELD_DEFAULT_VALUE_INTEGER] = $v->getValue();
            $a[self::FIELD_DEFAULT_VALUE_INTEGER_EXT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueMarkdown())) {
            $a[self::FIELD_DEFAULT_VALUE_MARKDOWN] = $v->getValue();
            $a[self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueMoney())) {
            $a[self::FIELD_DEFAULT_VALUE_MONEY] = $v;
        }
        if (null !== ($v = $this->getDefaultValueOid())) {
            $a[self::FIELD_DEFAULT_VALUE_OID] = $v->getValue();
            $a[self::FIELD_DEFAULT_VALUE_OID_EXT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueParameterDefinition())) {
            $a[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION] = $v;
        }
        if (null !== ($v = $this->getDefaultValuePeriod())) {
            $a[self::FIELD_DEFAULT_VALUE_PERIOD] = $v;
        }
        if (null !== ($v = $this->getDefaultValuePositiveInt())) {
            $a[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] = $v->getValue();
            $a[self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueQuantity())) {
            $a[self::FIELD_DEFAULT_VALUE_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getDefaultValueRange())) {
            $a[self::FIELD_DEFAULT_VALUE_RANGE] = $v;
        }
        if (null !== ($v = $this->getDefaultValueRatio())) {
            $a[self::FIELD_DEFAULT_VALUE_RATIO] = $v;
        }
        if (null !== ($v = $this->getDefaultValueReference())) {
            $a[self::FIELD_DEFAULT_VALUE_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getDefaultValueRelatedArtifact())) {
            $a[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueSampledData())) {
            $a[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA] = $v;
        }
        if (null !== ($v = $this->getDefaultValueSignature())) {
            $a[self::FIELD_DEFAULT_VALUE_SIGNATURE] = $v;
        }
        if (null !== ($v = $this->getDefaultValueString())) {
            $a[self::FIELD_DEFAULT_VALUE_STRING] = $v->getValue();
            $a[self::FIELD_DEFAULT_VALUE_STRING_EXT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueTime())) {
            $a[self::FIELD_DEFAULT_VALUE_TIME] = $v->getValue();
            $a[self::FIELD_DEFAULT_VALUE_TIME_EXT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueTiming())) {
            $a[self::FIELD_DEFAULT_VALUE_TIMING] = $v;
        }
        if (null !== ($v = $this->getDefaultValueTriggerDefinition())) {
            $a[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION] = $v;
        }
        if (null !== ($v = $this->getDefaultValueUnsignedInt())) {
            $a[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] = $v->getValue();
            $a[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueUri())) {
            $a[self::FIELD_DEFAULT_VALUE_URI] = $v->getValue();
            $a[self::FIELD_DEFAULT_VALUE_URI_EXT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueUrl())) {
            $a[self::FIELD_DEFAULT_VALUE_URL] = $v->getValue();
            $a[self::FIELD_DEFAULT_VALUE_URL_EXT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueUsageContext())) {
            $a[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueUuid())) {
            $a[self::FIELD_DEFAULT_VALUE_UUID] = $v->getValue();
            $a[self::FIELD_DEFAULT_VALUE_UUID_EXT] = $v;
        }
        if (null !== ($v = $this->getElement())) {
            $a[self::FIELD_ELEMENT] = $v->getValue();
            $a[self::FIELD_ELEMENT_EXT] = $v;
        }
        if (null !== ($v = $this->getListMode())) {
            $a[self::FIELD_LIST_MODE] = $v;
        }
        if (null !== ($v = $this->getLogMessage())) {
            $a[self::FIELD_LOG_MESSAGE] = $v->getValue();
            $a[self::FIELD_LOG_MESSAGE_EXT] = $v;
        }
        if (null !== ($v = $this->getMax())) {
            $a[self::FIELD_MAX] = $v->getValue();
            $a[self::FIELD_MAX_EXT] = $v;
        }
        if (null !== ($v = $this->getMin())) {
            $a[self::FIELD_MIN] = $v->getValue();
            $a[self::FIELD_MIN_EXT] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v->getValue();
            $a[self::FIELD_TYPE_EXT] = $v;
        }
        if (null !== ($v = $this->getVariable())) {
            $a[self::FIELD_VARIABLE] = $v->getValue();
            $a[self::FIELD_VARIABLE_EXT] = $v;
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