<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBase;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionConstraint;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionExample;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRAge;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRCount;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDistance;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRElementDefinition
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement
 */
class FHIRElementDefinition extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION;
    const FIELD_ALIAS = 'alias';
    const FIELD_ALIAS_EXT = '_alias';
    const FIELD_BASE = 'base';
    const FIELD_BINDING = 'binding';
    const FIELD_CODE = 'code';
    const FIELD_COMMENT = 'comment';
    const FIELD_COMMENT_EXT = '_comment';
    const FIELD_CONDITION = 'condition';
    const FIELD_CONDITION_EXT = '_condition';
    const FIELD_CONSTRAINT = 'constraint';
    const FIELD_CONTENT_REFERENCE = 'contentReference';
    const FIELD_CONTENT_REFERENCE_EXT = '_contentReference';
    const FIELD_DEFAULT_VALUE_ADDRESS = 'defaultValueAddress';
    const FIELD_DEFAULT_VALUE_AGE = 'defaultValueAge';
    const FIELD_DEFAULT_VALUE_ANNOTATION = 'defaultValueAnnotation';
    const FIELD_DEFAULT_VALUE_ATTACHMENT = 'defaultValueAttachment';
    const FIELD_DEFAULT_VALUE_BASE_64BINARY = 'defaultValueBase64Binary';
    const FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT = '_defaultValueBase64Binary';
    const FIELD_DEFAULT_VALUE_BOOLEAN = 'defaultValueBoolean';
    const FIELD_DEFAULT_VALUE_BOOLEAN_EXT = '_defaultValueBoolean';
    const FIELD_DEFAULT_VALUE_CODE = 'defaultValueCode';
    const FIELD_DEFAULT_VALUE_CODE_EXT = '_defaultValueCode';
    const FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT = 'defaultValueCodeableConcept';
    const FIELD_DEFAULT_VALUE_CODING = 'defaultValueCoding';
    const FIELD_DEFAULT_VALUE_CONTACT_POINT = 'defaultValueContactPoint';
    const FIELD_DEFAULT_VALUE_COUNT = 'defaultValueCount';
    const FIELD_DEFAULT_VALUE_DATE = 'defaultValueDate';
    const FIELD_DEFAULT_VALUE_DATE_EXT = '_defaultValueDate';
    const FIELD_DEFAULT_VALUE_DATE_TIME = 'defaultValueDateTime';
    const FIELD_DEFAULT_VALUE_DATE_TIME_EXT = '_defaultValueDateTime';
    const FIELD_DEFAULT_VALUE_DECIMAL = 'defaultValueDecimal';
    const FIELD_DEFAULT_VALUE_DECIMAL_EXT = '_defaultValueDecimal';
    const FIELD_DEFAULT_VALUE_DISTANCE = 'defaultValueDistance';
    const FIELD_DEFAULT_VALUE_DURATION = 'defaultValueDuration';
    const FIELD_DEFAULT_VALUE_HUMAN_NAME = 'defaultValueHumanName';
    const FIELD_DEFAULT_VALUE_ID = 'defaultValueId';
    const FIELD_DEFAULT_VALUE_ID_EXT = '_defaultValueId';
    const FIELD_DEFAULT_VALUE_IDENTIFIER = 'defaultValueIdentifier';
    const FIELD_DEFAULT_VALUE_INSTANT = 'defaultValueInstant';
    const FIELD_DEFAULT_VALUE_INSTANT_EXT = '_defaultValueInstant';
    const FIELD_DEFAULT_VALUE_INTEGER = 'defaultValueInteger';
    const FIELD_DEFAULT_VALUE_INTEGER_EXT = '_defaultValueInteger';
    const FIELD_DEFAULT_VALUE_MARKDOWN = 'defaultValueMarkdown';
    const FIELD_DEFAULT_VALUE_MARKDOWN_EXT = '_defaultValueMarkdown';
    const FIELD_DEFAULT_VALUE_META = 'defaultValueMeta';
    const FIELD_DEFAULT_VALUE_MONEY = 'defaultValueMoney';
    const FIELD_DEFAULT_VALUE_OID = 'defaultValueOid';
    const FIELD_DEFAULT_VALUE_OID_EXT = '_defaultValueOid';
    const FIELD_DEFAULT_VALUE_PERIOD = 'defaultValuePeriod';
    const FIELD_DEFAULT_VALUE_POSITIVE_INT = 'defaultValuePositiveInt';
    const FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT = '_defaultValuePositiveInt';
    const FIELD_DEFAULT_VALUE_QUANTITY = 'defaultValueQuantity';
    const FIELD_DEFAULT_VALUE_RANGE = 'defaultValueRange';
    const FIELD_DEFAULT_VALUE_RATIO = 'defaultValueRatio';
    const FIELD_DEFAULT_VALUE_REFERENCE = 'defaultValueReference';
    const FIELD_DEFAULT_VALUE_SAMPLED_DATA = 'defaultValueSampledData';
    const FIELD_DEFAULT_VALUE_SIGNATURE = 'defaultValueSignature';
    const FIELD_DEFAULT_VALUE_STRING = 'defaultValueString';
    const FIELD_DEFAULT_VALUE_STRING_EXT = '_defaultValueString';
    const FIELD_DEFAULT_VALUE_TIME = 'defaultValueTime';
    const FIELD_DEFAULT_VALUE_TIME_EXT = '_defaultValueTime';
    const FIELD_DEFAULT_VALUE_TIMING = 'defaultValueTiming';
    const FIELD_DEFAULT_VALUE_UNSIGNED_INT = 'defaultValueUnsignedInt';
    const FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT = '_defaultValueUnsignedInt';
    const FIELD_DEFAULT_VALUE_URI = 'defaultValueUri';
    const FIELD_DEFAULT_VALUE_URI_EXT = '_defaultValueUri';
    const FIELD_DEFINITION = 'definition';
    const FIELD_DEFINITION_EXT = '_definition';
    const FIELD_EXAMPLE = 'example';
    const FIELD_FIXED_ADDRESS = 'fixedAddress';
    const FIELD_FIXED_AGE = 'fixedAge';
    const FIELD_FIXED_ANNOTATION = 'fixedAnnotation';
    const FIELD_FIXED_ATTACHMENT = 'fixedAttachment';
    const FIELD_FIXED_BASE_64BINARY = 'fixedBase64Binary';
    const FIELD_FIXED_BASE_64BINARY_EXT = '_fixedBase64Binary';
    const FIELD_FIXED_BOOLEAN = 'fixedBoolean';
    const FIELD_FIXED_BOOLEAN_EXT = '_fixedBoolean';
    const FIELD_FIXED_CODE = 'fixedCode';
    const FIELD_FIXED_CODE_EXT = '_fixedCode';
    const FIELD_FIXED_CODEABLE_CONCEPT = 'fixedCodeableConcept';
    const FIELD_FIXED_CODING = 'fixedCoding';
    const FIELD_FIXED_CONTACT_POINT = 'fixedContactPoint';
    const FIELD_FIXED_COUNT = 'fixedCount';
    const FIELD_FIXED_DATE = 'fixedDate';
    const FIELD_FIXED_DATE_EXT = '_fixedDate';
    const FIELD_FIXED_DATE_TIME = 'fixedDateTime';
    const FIELD_FIXED_DATE_TIME_EXT = '_fixedDateTime';
    const FIELD_FIXED_DECIMAL = 'fixedDecimal';
    const FIELD_FIXED_DECIMAL_EXT = '_fixedDecimal';
    const FIELD_FIXED_DISTANCE = 'fixedDistance';
    const FIELD_FIXED_DURATION = 'fixedDuration';
    const FIELD_FIXED_HUMAN_NAME = 'fixedHumanName';
    const FIELD_FIXED_ID = 'fixedId';
    const FIELD_FIXED_ID_EXT = '_fixedId';
    const FIELD_FIXED_IDENTIFIER = 'fixedIdentifier';
    const FIELD_FIXED_INSTANT = 'fixedInstant';
    const FIELD_FIXED_INSTANT_EXT = '_fixedInstant';
    const FIELD_FIXED_INTEGER = 'fixedInteger';
    const FIELD_FIXED_INTEGER_EXT = '_fixedInteger';
    const FIELD_FIXED_MARKDOWN = 'fixedMarkdown';
    const FIELD_FIXED_MARKDOWN_EXT = '_fixedMarkdown';
    const FIELD_FIXED_META = 'fixedMeta';
    const FIELD_FIXED_MONEY = 'fixedMoney';
    const FIELD_FIXED_OID = 'fixedOid';
    const FIELD_FIXED_OID_EXT = '_fixedOid';
    const FIELD_FIXED_PERIOD = 'fixedPeriod';
    const FIELD_FIXED_POSITIVE_INT = 'fixedPositiveInt';
    const FIELD_FIXED_POSITIVE_INT_EXT = '_fixedPositiveInt';
    const FIELD_FIXED_QUANTITY = 'fixedQuantity';
    const FIELD_FIXED_RANGE = 'fixedRange';
    const FIELD_FIXED_RATIO = 'fixedRatio';
    const FIELD_FIXED_REFERENCE = 'fixedReference';
    const FIELD_FIXED_SAMPLED_DATA = 'fixedSampledData';
    const FIELD_FIXED_SIGNATURE = 'fixedSignature';
    const FIELD_FIXED_STRING = 'fixedString';
    const FIELD_FIXED_STRING_EXT = '_fixedString';
    const FIELD_FIXED_TIME = 'fixedTime';
    const FIELD_FIXED_TIME_EXT = '_fixedTime';
    const FIELD_FIXED_TIMING = 'fixedTiming';
    const FIELD_FIXED_UNSIGNED_INT = 'fixedUnsignedInt';
    const FIELD_FIXED_UNSIGNED_INT_EXT = '_fixedUnsignedInt';
    const FIELD_FIXED_URI = 'fixedUri';
    const FIELD_FIXED_URI_EXT = '_fixedUri';
    const FIELD_IS_MODIFIER = 'isModifier';
    const FIELD_IS_MODIFIER_EXT = '_isModifier';
    const FIELD_IS_SUMMARY = 'isSummary';
    const FIELD_IS_SUMMARY_EXT = '_isSummary';
    const FIELD_LABEL = 'label';
    const FIELD_LABEL_EXT = '_label';
    const FIELD_MAPPING = 'mapping';
    const FIELD_MAX = 'max';
    const FIELD_MAX_EXT = '_max';
    const FIELD_MAX_LENGTH = 'maxLength';
    const FIELD_MAX_LENGTH_EXT = '_maxLength';
    const FIELD_MAX_VALUE_DATE = 'maxValueDate';
    const FIELD_MAX_VALUE_DATE_EXT = '_maxValueDate';
    const FIELD_MAX_VALUE_DATE_TIME = 'maxValueDateTime';
    const FIELD_MAX_VALUE_DATE_TIME_EXT = '_maxValueDateTime';
    const FIELD_MAX_VALUE_DECIMAL = 'maxValueDecimal';
    const FIELD_MAX_VALUE_DECIMAL_EXT = '_maxValueDecimal';
    const FIELD_MAX_VALUE_INSTANT = 'maxValueInstant';
    const FIELD_MAX_VALUE_INSTANT_EXT = '_maxValueInstant';
    const FIELD_MAX_VALUE_INTEGER = 'maxValueInteger';
    const FIELD_MAX_VALUE_INTEGER_EXT = '_maxValueInteger';
    const FIELD_MAX_VALUE_POSITIVE_INT = 'maxValuePositiveInt';
    const FIELD_MAX_VALUE_POSITIVE_INT_EXT = '_maxValuePositiveInt';
    const FIELD_MAX_VALUE_QUANTITY = 'maxValueQuantity';
    const FIELD_MAX_VALUE_TIME = 'maxValueTime';
    const FIELD_MAX_VALUE_TIME_EXT = '_maxValueTime';
    const FIELD_MAX_VALUE_UNSIGNED_INT = 'maxValueUnsignedInt';
    const FIELD_MAX_VALUE_UNSIGNED_INT_EXT = '_maxValueUnsignedInt';
    const FIELD_MEANING_WHEN_MISSING = 'meaningWhenMissing';
    const FIELD_MEANING_WHEN_MISSING_EXT = '_meaningWhenMissing';
    const FIELD_MIN = 'min';
    const FIELD_MIN_EXT = '_min';
    const FIELD_MIN_VALUE_DATE = 'minValueDate';
    const FIELD_MIN_VALUE_DATE_EXT = '_minValueDate';
    const FIELD_MIN_VALUE_DATE_TIME = 'minValueDateTime';
    const FIELD_MIN_VALUE_DATE_TIME_EXT = '_minValueDateTime';
    const FIELD_MIN_VALUE_DECIMAL = 'minValueDecimal';
    const FIELD_MIN_VALUE_DECIMAL_EXT = '_minValueDecimal';
    const FIELD_MIN_VALUE_INSTANT = 'minValueInstant';
    const FIELD_MIN_VALUE_INSTANT_EXT = '_minValueInstant';
    const FIELD_MIN_VALUE_INTEGER = 'minValueInteger';
    const FIELD_MIN_VALUE_INTEGER_EXT = '_minValueInteger';
    const FIELD_MIN_VALUE_POSITIVE_INT = 'minValuePositiveInt';
    const FIELD_MIN_VALUE_POSITIVE_INT_EXT = '_minValuePositiveInt';
    const FIELD_MIN_VALUE_QUANTITY = 'minValueQuantity';
    const FIELD_MIN_VALUE_TIME = 'minValueTime';
    const FIELD_MIN_VALUE_TIME_EXT = '_minValueTime';
    const FIELD_MIN_VALUE_UNSIGNED_INT = 'minValueUnsignedInt';
    const FIELD_MIN_VALUE_UNSIGNED_INT_EXT = '_minValueUnsignedInt';
    const FIELD_MUST_SUPPORT = 'mustSupport';
    const FIELD_MUST_SUPPORT_EXT = '_mustSupport';
    const FIELD_ORDER_MEANING = 'orderMeaning';
    const FIELD_ORDER_MEANING_EXT = '_orderMeaning';
    const FIELD_PATH = 'path';
    const FIELD_PATH_EXT = '_path';
    const FIELD_PATTERN_ADDRESS = 'patternAddress';
    const FIELD_PATTERN_AGE = 'patternAge';
    const FIELD_PATTERN_ANNOTATION = 'patternAnnotation';
    const FIELD_PATTERN_ATTACHMENT = 'patternAttachment';
    const FIELD_PATTERN_BASE_64BINARY = 'patternBase64Binary';
    const FIELD_PATTERN_BASE_64BINARY_EXT = '_patternBase64Binary';
    const FIELD_PATTERN_BOOLEAN = 'patternBoolean';
    const FIELD_PATTERN_BOOLEAN_EXT = '_patternBoolean';
    const FIELD_PATTERN_CODE = 'patternCode';
    const FIELD_PATTERN_CODE_EXT = '_patternCode';
    const FIELD_PATTERN_CODEABLE_CONCEPT = 'patternCodeableConcept';
    const FIELD_PATTERN_CODING = 'patternCoding';
    const FIELD_PATTERN_CONTACT_POINT = 'patternContactPoint';
    const FIELD_PATTERN_COUNT = 'patternCount';
    const FIELD_PATTERN_DATE = 'patternDate';
    const FIELD_PATTERN_DATE_EXT = '_patternDate';
    const FIELD_PATTERN_DATE_TIME = 'patternDateTime';
    const FIELD_PATTERN_DATE_TIME_EXT = '_patternDateTime';
    const FIELD_PATTERN_DECIMAL = 'patternDecimal';
    const FIELD_PATTERN_DECIMAL_EXT = '_patternDecimal';
    const FIELD_PATTERN_DISTANCE = 'patternDistance';
    const FIELD_PATTERN_DURATION = 'patternDuration';
    const FIELD_PATTERN_HUMAN_NAME = 'patternHumanName';
    const FIELD_PATTERN_ID = 'patternId';
    const FIELD_PATTERN_ID_EXT = '_patternId';
    const FIELD_PATTERN_IDENTIFIER = 'patternIdentifier';
    const FIELD_PATTERN_INSTANT = 'patternInstant';
    const FIELD_PATTERN_INSTANT_EXT = '_patternInstant';
    const FIELD_PATTERN_INTEGER = 'patternInteger';
    const FIELD_PATTERN_INTEGER_EXT = '_patternInteger';
    const FIELD_PATTERN_MARKDOWN = 'patternMarkdown';
    const FIELD_PATTERN_MARKDOWN_EXT = '_patternMarkdown';
    const FIELD_PATTERN_META = 'patternMeta';
    const FIELD_PATTERN_MONEY = 'patternMoney';
    const FIELD_PATTERN_OID = 'patternOid';
    const FIELD_PATTERN_OID_EXT = '_patternOid';
    const FIELD_PATTERN_PERIOD = 'patternPeriod';
    const FIELD_PATTERN_POSITIVE_INT = 'patternPositiveInt';
    const FIELD_PATTERN_POSITIVE_INT_EXT = '_patternPositiveInt';
    const FIELD_PATTERN_QUANTITY = 'patternQuantity';
    const FIELD_PATTERN_RANGE = 'patternRange';
    const FIELD_PATTERN_RATIO = 'patternRatio';
    const FIELD_PATTERN_REFERENCE = 'patternReference';
    const FIELD_PATTERN_SAMPLED_DATA = 'patternSampledData';
    const FIELD_PATTERN_SIGNATURE = 'patternSignature';
    const FIELD_PATTERN_STRING = 'patternString';
    const FIELD_PATTERN_STRING_EXT = '_patternString';
    const FIELD_PATTERN_TIME = 'patternTime';
    const FIELD_PATTERN_TIME_EXT = '_patternTime';
    const FIELD_PATTERN_TIMING = 'patternTiming';
    const FIELD_PATTERN_UNSIGNED_INT = 'patternUnsignedInt';
    const FIELD_PATTERN_UNSIGNED_INT_EXT = '_patternUnsignedInt';
    const FIELD_PATTERN_URI = 'patternUri';
    const FIELD_PATTERN_URI_EXT = '_patternUri';
    const FIELD_REPRESENTATION = 'representation';
    const FIELD_REPRESENTATION_EXT = '_representation';
    const FIELD_REQUIREMENTS = 'requirements';
    const FIELD_REQUIREMENTS_EXT = '_requirements';
    const FIELD_SHORT = 'short';
    const FIELD_SHORT_EXT = '_short';
    const FIELD_SLICE_NAME = 'sliceName';
    const FIELD_SLICE_NAME_EXT = '_sliceName';
    const FIELD_SLICING = 'slicing';
    const FIELD_TYPE = 'type';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies additional names by which this element might also be known.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[]
     */
    protected $alias = [];

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information about the base definition of the element, provided to make it
     * unnecessary for tools to trace the deviation of the element through the derived
     * and related profiles. This information is provided when the element definition
     * is not the original definition of an element - i.g. either in a constraint on
     * another type, or for elements from a super type in a snap shot.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBase
     */
    protected $base = null;

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept,
     * Quantity), or the data types (string, uri).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding
     */
    protected $binding = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that has the same meaning as the element in a particular terminology.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[]
     */
    protected $code = [];

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Explanatory notes and implementation guidance about the data element, including
     * notes about how to use the data properly, exceptions to proper use, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    protected $comment = null;

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to an invariant that may make additional statements about the
     * cardinality or value in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId[]
     */
    protected $condition = [];

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Formal constraints such as co-occurrence and other constraints that can be
     * computationally evaluated within the context of the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionConstraint[]
     */
    protected $constraint = [];

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the identity of an element defined elsewhere in the profile whose
     * content rules should be applied to the current element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected $contentReference = null;

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddress
     */
    protected $defaultValueAddress = null;

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRAge
     */
    protected $defaultValueAge = null;

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation
     */
    protected $defaultValueAnnotation = null;

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment
     */
    protected $defaultValueAttachment = null;

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary
     */
    protected $defaultValueBase64Binary = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $defaultValueBoolean = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    protected $defaultValueCode = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $defaultValueCodeableConcept = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding
     */
    protected $defaultValueCoding = null;

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint
     */
    protected $defaultValueContactPoint = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRCount
     */
    protected $defaultValueCount = null;

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    protected $defaultValueDate = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected $defaultValueDateTime = null;

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    protected $defaultValueDecimal = null;

    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDistance
     */
    protected $defaultValueDistance = null;

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected $defaultValueDuration = null;

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRHumanName
     */
    protected $defaultValueHumanName = null;

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    protected $defaultValueId = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    protected $defaultValueIdentifier = null;

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    protected $defaultValueInstant = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected $defaultValueInteger = null;

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    protected $defaultValueMarkdown = null;

    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content may not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta
     */
    protected $defaultValueMeta = null;

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney
     */
    protected $defaultValueMoney = null;

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid
     */
    protected $defaultValueOid = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    protected $defaultValuePeriod = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    protected $defaultValuePositiveInt = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    protected $defaultValueQuantity = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange
     */
    protected $defaultValueRange = null;

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio
     */
    protected $defaultValueRatio = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $defaultValueReference = null;

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSampledData
     */
    protected $defaultValueSampledData = null;

    /**
     * A digital signature along with supporting context. The signature may be
     * electronic/cryptographic in nature, or a graphical image representing a
     * hand-written signature, or a signature process. Different signature approaches
     * have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSignature
     */
    protected $defaultValueSignature = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $defaultValueString = null;

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    protected $defaultValueTime = null;

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming
     */
    protected $defaultValueTiming = null;

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    protected $defaultValueUnsignedInt = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected $defaultValueUri = null;

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Provides a complete explanation of the meaning of the data element for human
     * readability. For the case of elements derived from existing elements (e.g.
     * constraints), the definition SHALL be consistent with the base definition, but
     * convey the meaning of the element in the particular context of use of the
     * resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    protected $definition = null;

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A sample value for this element demonstrating the type of information that would
     * typically be found in the element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionExample[]
     */
    protected $example = [];

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddress
     */
    protected $fixedAddress = null;

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRAge
     */
    protected $fixedAge = null;

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation
     */
    protected $fixedAnnotation = null;

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment
     */
    protected $fixedAttachment = null;

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary
     */
    protected $fixedBase64Binary = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $fixedBoolean = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    protected $fixedCode = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $fixedCodeableConcept = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding
     */
    protected $fixedCoding = null;

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint
     */
    protected $fixedContactPoint = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRCount
     */
    protected $fixedCount = null;

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    protected $fixedDate = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected $fixedDateTime = null;

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    protected $fixedDecimal = null;

    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDistance
     */
    protected $fixedDistance = null;

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected $fixedDuration = null;

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRHumanName
     */
    protected $fixedHumanName = null;

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    protected $fixedId = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    protected $fixedIdentifier = null;

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    protected $fixedInstant = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected $fixedInteger = null;

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    protected $fixedMarkdown = null;

    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content may not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta
     */
    protected $fixedMeta = null;

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney
     */
    protected $fixedMoney = null;

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid
     */
    protected $fixedOid = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    protected $fixedPeriod = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    protected $fixedPositiveInt = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    protected $fixedQuantity = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange
     */
    protected $fixedRange = null;

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio
     */
    protected $fixedRatio = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $fixedReference = null;

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSampledData
     */
    protected $fixedSampledData = null;

    /**
     * A digital signature along with supporting context. The signature may be
     * electronic/cryptographic in nature, or a graphical image representing a
     * hand-written signature, or a signature process. Different signature approaches
     * have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSignature
     */
    protected $fixedSignature = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $fixedString = null;

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    protected $fixedTime = null;

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming
     */
    protected $fixedTiming = null;

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    protected $fixedUnsignedInt = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected $fixedUri = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $isModifier = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the element should be included if a client requests a search with the
     * parameter _summary=true.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $isSummary = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A single preferred label which is the text to display beside the element
     * indicating its meaning or to use to prompt for the element in a user display or
     * form.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $label = null;

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies a concept from an external specification that roughly corresponds to
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping[]
     */
    protected $mapping = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $max = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the maximum length in characters that is permitted to be present in
     * conformant instances and which is expected to be supported by conformant
     * consumers that support the element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected $maxLength = null;

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    protected $maxValueDate = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected $maxValueDateTime = null;

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    protected $maxValueDecimal = null;

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    protected $maxValueInstant = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected $maxValueInteger = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    protected $maxValuePositiveInt = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    protected $maxValueQuantity = null;

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    protected $maxValueTime = null;

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    protected $maxValueUnsignedInt = null;

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The Implicit meaning that is to be understood when this element is missing (e.g.
     * 'when this element is missing, the period is ongoing'.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    protected $meaningWhenMissing = null;

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The minimum number of times this element SHALL appear in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    protected $min = null;

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    protected $minValueDate = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected $minValueDateTime = null;

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    protected $minValueDecimal = null;

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    protected $minValueInstant = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected $minValueInteger = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    protected $minValuePositiveInt = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    protected $minValueQuantity = null;

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    protected $minValueTime = null;

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    protected $minValueUnsignedInt = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, implementations that produce or consume resources SHALL provide
     * "support" for the element in some meaningful way. If false, the element may be
     * ignored and not supported.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $mustSupport = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the order of the repeating element has meaning and
     * describes what that meaning is. If absent, it means that the order of the
     * element has no meaning.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $orderMeaning = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The path identifies the element and is expressed as a "."-separated list of
     * ancestor elements, beginning with the name of the resource or extension.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $path = null;

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddress
     */
    protected $patternAddress = null;

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRAge
     */
    protected $patternAge = null;

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation
     */
    protected $patternAnnotation = null;

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment
     */
    protected $patternAttachment = null;

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary
     */
    protected $patternBase64Binary = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $patternBoolean = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    protected $patternCode = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $patternCodeableConcept = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding
     */
    protected $patternCoding = null;

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint
     */
    protected $patternContactPoint = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRCount
     */
    protected $patternCount = null;

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    protected $patternDate = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected $patternDateTime = null;

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    protected $patternDecimal = null;

    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDistance
     */
    protected $patternDistance = null;

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected $patternDuration = null;

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRHumanName
     */
    protected $patternHumanName = null;

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    protected $patternId = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    protected $patternIdentifier = null;

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    protected $patternInstant = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected $patternInteger = null;

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    protected $patternMarkdown = null;

    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content may not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta
     */
    protected $patternMeta = null;

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney
     */
    protected $patternMoney = null;

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid
     */
    protected $patternOid = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    protected $patternPeriod = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    protected $patternPositiveInt = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    protected $patternQuantity = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange
     */
    protected $patternRange = null;

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio
     */
    protected $patternRatio = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $patternReference = null;

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSampledData
     */
    protected $patternSampledData = null;

    /**
     * A digital signature along with supporting context. The signature may be
     * electronic/cryptographic in nature, or a graphical image representing a
     * hand-written signature, or a signature process. Different signature approaches
     * have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSignature
     */
    protected $patternSignature = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $patternString = null;

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    protected $patternTime = null;

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming
     */
    protected $patternTiming = null;

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    protected $patternUnsignedInt = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected $patternUri = null;

    /**
     * How a property is represented when serialized.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Codes that define how this element is represented in instances, when the
     * deviation varies from the normal case.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPropertyRepresentation[]
     */
    protected $representation = [];

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * This element is for traceability of why the element was created and why the
     * constraints exist as they do. This may be used to point to source materials or
     * specifications that drove the structure of this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    protected $requirements = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A concise description of what this element means (e.g. for use in autogenerated
     * summaries).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $short = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of this element definition slice, when slicing is working. The name
     * must be a token with no dots or spaces. This is a unique name referring to a
     * specific set of constraints applied to this element, used to provide a name to
     * different slices of the same element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $sliceName = null;

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates that the element is sliced into a set of alternative definitions (i.e.
     * in a structure definition, there are multiple different constraints on a single
     * element in the base resource). Slicing can be used in any resource that has
     * cardinality ..* on the base resource, or any resource with a choice of types.
     * The set of slices is any elements that come after this in the element sequence
     * that have the same path, until a shorter path occurs (the shorter path
     * terminates the set).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing
     */
    protected $slicing = null;

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The data type or resource that the value of this element is permitted to be.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType[]
     */
    protected $type = [];

    /**
     * Validation map for fields in type ElementDefinition
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRElementDefinition Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ALIAS]) || isset($data[self::FIELD_ALIAS_EXT])) {
            if (isset($data[self::FIELD_ALIAS])) {
                $value = $data[self::FIELD_ALIAS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ALIAS_EXT]) && is_array($data[self::FIELD_ALIAS_EXT])) {
                $ext = $data[self::FIELD_ALIAS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addAlias($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addAlias($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addAlias(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addAlias(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addAlias(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addAlias(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addAlias(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_BASE])) {
            if ($data[self::FIELD_BASE] instanceof FHIRElementDefinitionBase) {
                $this->setBase($data[self::FIELD_BASE]);
            } else {
                $this->setBase(new FHIRElementDefinitionBase($data[self::FIELD_BASE]));
            }
        }
        if (isset($data[self::FIELD_BINDING])) {
            if ($data[self::FIELD_BINDING] instanceof FHIRElementDefinitionBinding) {
                $this->setBinding($data[self::FIELD_BINDING]);
            } else {
                $this->setBinding(new FHIRElementDefinitionBinding($data[self::FIELD_BINDING]));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if (is_array($data[self::FIELD_CODE])) {
                foreach($data[self::FIELD_CODE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCoding) {
                        $this->addCode($v);
                    } else {
                        $this->addCode(new FHIRCoding($v));
                    }
                }
            } else if ($data[self::FIELD_CODE] instanceof FHIRCoding) {
                $this->addCode($data[self::FIELD_CODE]);
            } else {
                $this->addCode(new FHIRCoding($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_COMMENT]) || isset($data[self::FIELD_COMMENT_EXT])) {
            if (isset($data[self::FIELD_COMMENT])) {
                $value = $data[self::FIELD_COMMENT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_COMMENT_EXT]) && is_array($data[self::FIELD_COMMENT_EXT])) {
                $ext = $data[self::FIELD_COMMENT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setComment($value);
                } else if (is_array($value)) {
                    $this->setComment(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setComment(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setComment(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_CONDITION]) || isset($data[self::FIELD_CONDITION_EXT])) {
            if (isset($data[self::FIELD_CONDITION])) {
                $value = $data[self::FIELD_CONDITION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CONDITION_EXT]) && is_array($data[self::FIELD_CONDITION_EXT])) {
                $ext = $data[self::FIELD_CONDITION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->addCondition($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRId) {
                            $this->addCondition($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addCondition(new FHIRId(array_merge($v, $iext)));
                            } else {
                                $this->addCondition(new FHIRId([FHIRId::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addCondition(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->addCondition(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addCondition(new FHIRId($iext));
                }
            }
        }
        if (isset($data[self::FIELD_CONSTRAINT])) {
            if (is_array($data[self::FIELD_CONSTRAINT])) {
                foreach($data[self::FIELD_CONSTRAINT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRElementDefinitionConstraint) {
                        $this->addConstraint($v);
                    } else {
                        $this->addConstraint(new FHIRElementDefinitionConstraint($v));
                    }
                }
            } else if ($data[self::FIELD_CONSTRAINT] instanceof FHIRElementDefinitionConstraint) {
                $this->addConstraint($data[self::FIELD_CONSTRAINT]);
            } else {
                $this->addConstraint(new FHIRElementDefinitionConstraint($data[self::FIELD_CONSTRAINT]));
            }
        }
        if (isset($data[self::FIELD_CONTENT_REFERENCE]) || isset($data[self::FIELD_CONTENT_REFERENCE_EXT])) {
            if (isset($data[self::FIELD_CONTENT_REFERENCE])) {
                $value = $data[self::FIELD_CONTENT_REFERENCE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CONTENT_REFERENCE_EXT]) && is_array($data[self::FIELD_CONTENT_REFERENCE_EXT])) {
                $ext = $data[self::FIELD_CONTENT_REFERENCE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setContentReference($value);
                } else if (is_array($value)) {
                    $this->setContentReference(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setContentReference(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setContentReference(new FHIRUri($ext));
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
        if (isset($data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY]) || isset($data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT])) {
            if (isset($data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY])) {
                $value = $data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT])) {
                $ext = $data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBase64Binary) {
                    $this->setDefaultValueBase64Binary($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueBase64Binary(new FHIRBase64Binary(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueBase64Binary(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDefaultValueBase64Binary(new FHIRBase64Binary($ext));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_BOOLEAN]) || isset($data[self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT])) {
            if (isset($data[self::FIELD_DEFAULT_VALUE_BOOLEAN])) {
                $value = $data[self::FIELD_DEFAULT_VALUE_BOOLEAN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT])) {
                $ext = $data[self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setDefaultValueBoolean($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDefaultValueBoolean(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_CODE]) || isset($data[self::FIELD_DEFAULT_VALUE_CODE_EXT])) {
            if (isset($data[self::FIELD_DEFAULT_VALUE_CODE])) {
                $value = $data[self::FIELD_DEFAULT_VALUE_CODE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DEFAULT_VALUE_CODE_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_CODE_EXT])) {
                $ext = $data[self::FIELD_DEFAULT_VALUE_CODE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setDefaultValueCode($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueCode(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDefaultValueCode(new FHIRCode($ext));
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
        if (isset($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT])) {
            if ($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT] instanceof FHIRContactPoint) {
                $this->setDefaultValueContactPoint($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT]);
            } else {
                $this->setDefaultValueContactPoint(new FHIRContactPoint($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_COUNT])) {
            if ($data[self::FIELD_DEFAULT_VALUE_COUNT] instanceof FHIRCount) {
                $this->setDefaultValueCount($data[self::FIELD_DEFAULT_VALUE_COUNT]);
            } else {
                $this->setDefaultValueCount(new FHIRCount($data[self::FIELD_DEFAULT_VALUE_COUNT]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_DATE]) || isset($data[self::FIELD_DEFAULT_VALUE_DATE_EXT])) {
            if (isset($data[self::FIELD_DEFAULT_VALUE_DATE])) {
                $value = $data[self::FIELD_DEFAULT_VALUE_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DEFAULT_VALUE_DATE_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_DATE_EXT])) {
                $ext = $data[self::FIELD_DEFAULT_VALUE_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setDefaultValueDate($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDefaultValueDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_DATE_TIME]) || isset($data[self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT])) {
            if (isset($data[self::FIELD_DEFAULT_VALUE_DATE_TIME])) {
                $value = $data[self::FIELD_DEFAULT_VALUE_DATE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT])) {
                $ext = $data[self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDefaultValueDateTime($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDefaultValueDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_DECIMAL]) || isset($data[self::FIELD_DEFAULT_VALUE_DECIMAL_EXT])) {
            if (isset($data[self::FIELD_DEFAULT_VALUE_DECIMAL])) {
                $value = $data[self::FIELD_DEFAULT_VALUE_DECIMAL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DEFAULT_VALUE_DECIMAL_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_DECIMAL_EXT])) {
                $ext = $data[self::FIELD_DEFAULT_VALUE_DECIMAL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setDefaultValueDecimal($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDefaultValueDecimal(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_DISTANCE])) {
            if ($data[self::FIELD_DEFAULT_VALUE_DISTANCE] instanceof FHIRDistance) {
                $this->setDefaultValueDistance($data[self::FIELD_DEFAULT_VALUE_DISTANCE]);
            } else {
                $this->setDefaultValueDistance(new FHIRDistance($data[self::FIELD_DEFAULT_VALUE_DISTANCE]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_DURATION])) {
            if ($data[self::FIELD_DEFAULT_VALUE_DURATION] instanceof FHIRDuration) {
                $this->setDefaultValueDuration($data[self::FIELD_DEFAULT_VALUE_DURATION]);
            } else {
                $this->setDefaultValueDuration(new FHIRDuration($data[self::FIELD_DEFAULT_VALUE_DURATION]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_HUMAN_NAME])) {
            if ($data[self::FIELD_DEFAULT_VALUE_HUMAN_NAME] instanceof FHIRHumanName) {
                $this->setDefaultValueHumanName($data[self::FIELD_DEFAULT_VALUE_HUMAN_NAME]);
            } else {
                $this->setDefaultValueHumanName(new FHIRHumanName($data[self::FIELD_DEFAULT_VALUE_HUMAN_NAME]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_ID]) || isset($data[self::FIELD_DEFAULT_VALUE_ID_EXT])) {
            if (isset($data[self::FIELD_DEFAULT_VALUE_ID])) {
                $value = $data[self::FIELD_DEFAULT_VALUE_ID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DEFAULT_VALUE_ID_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_ID_EXT])) {
                $ext = $data[self::FIELD_DEFAULT_VALUE_ID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setDefaultValueId($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDefaultValueId(new FHIRId($ext));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_IDENTIFIER])) {
            if ($data[self::FIELD_DEFAULT_VALUE_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setDefaultValueIdentifier($data[self::FIELD_DEFAULT_VALUE_IDENTIFIER]);
            } else {
                $this->setDefaultValueIdentifier(new FHIRIdentifier($data[self::FIELD_DEFAULT_VALUE_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_INSTANT]) || isset($data[self::FIELD_DEFAULT_VALUE_INSTANT_EXT])) {
            if (isset($data[self::FIELD_DEFAULT_VALUE_INSTANT])) {
                $value = $data[self::FIELD_DEFAULT_VALUE_INSTANT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DEFAULT_VALUE_INSTANT_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_INSTANT_EXT])) {
                $ext = $data[self::FIELD_DEFAULT_VALUE_INSTANT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setDefaultValueInstant($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueInstant(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDefaultValueInstant(new FHIRInstant($ext));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_INTEGER]) || isset($data[self::FIELD_DEFAULT_VALUE_INTEGER_EXT])) {
            if (isset($data[self::FIELD_DEFAULT_VALUE_INTEGER])) {
                $value = $data[self::FIELD_DEFAULT_VALUE_INTEGER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DEFAULT_VALUE_INTEGER_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_INTEGER_EXT])) {
                $ext = $data[self::FIELD_DEFAULT_VALUE_INTEGER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setDefaultValueInteger($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDefaultValueInteger(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_MARKDOWN]) || isset($data[self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT])) {
            if (isset($data[self::FIELD_DEFAULT_VALUE_MARKDOWN])) {
                $value = $data[self::FIELD_DEFAULT_VALUE_MARKDOWN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT])) {
                $ext = $data[self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setDefaultValueMarkdown($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueMarkdown(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueMarkdown(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDefaultValueMarkdown(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_META])) {
            if ($data[self::FIELD_DEFAULT_VALUE_META] instanceof FHIRMeta) {
                $this->setDefaultValueMeta($data[self::FIELD_DEFAULT_VALUE_META]);
            } else {
                $this->setDefaultValueMeta(new FHIRMeta($data[self::FIELD_DEFAULT_VALUE_META]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_MONEY])) {
            if ($data[self::FIELD_DEFAULT_VALUE_MONEY] instanceof FHIRMoney) {
                $this->setDefaultValueMoney($data[self::FIELD_DEFAULT_VALUE_MONEY]);
            } else {
                $this->setDefaultValueMoney(new FHIRMoney($data[self::FIELD_DEFAULT_VALUE_MONEY]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_OID]) || isset($data[self::FIELD_DEFAULT_VALUE_OID_EXT])) {
            if (isset($data[self::FIELD_DEFAULT_VALUE_OID])) {
                $value = $data[self::FIELD_DEFAULT_VALUE_OID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DEFAULT_VALUE_OID_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_OID_EXT])) {
                $ext = $data[self::FIELD_DEFAULT_VALUE_OID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIROid) {
                    $this->setDefaultValueOid($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueOid(new FHIROid(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueOid(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDefaultValueOid(new FHIROid($ext));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_PERIOD])) {
            if ($data[self::FIELD_DEFAULT_VALUE_PERIOD] instanceof FHIRPeriod) {
                $this->setDefaultValuePeriod($data[self::FIELD_DEFAULT_VALUE_PERIOD]);
            } else {
                $this->setDefaultValuePeriod(new FHIRPeriod($data[self::FIELD_DEFAULT_VALUE_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT]) || isset($data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT])) {
            if (isset($data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT])) {
                $value = $data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT])) {
                $ext = $data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setDefaultValuePositiveInt($value);
                } else if (is_array($value)) {
                    $this->setDefaultValuePositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValuePositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDefaultValuePositiveInt(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_QUANTITY])) {
            if ($data[self::FIELD_DEFAULT_VALUE_QUANTITY] instanceof FHIRQuantity) {
                $this->setDefaultValueQuantity($data[self::FIELD_DEFAULT_VALUE_QUANTITY]);
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
        if (isset($data[self::FIELD_DEFAULT_VALUE_STRING]) || isset($data[self::FIELD_DEFAULT_VALUE_STRING_EXT])) {
            if (isset($data[self::FIELD_DEFAULT_VALUE_STRING])) {
                $value = $data[self::FIELD_DEFAULT_VALUE_STRING];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DEFAULT_VALUE_STRING_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_STRING_EXT])) {
                $ext = $data[self::FIELD_DEFAULT_VALUE_STRING_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDefaultValueString($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDefaultValueString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_TIME]) || isset($data[self::FIELD_DEFAULT_VALUE_TIME_EXT])) {
            if (isset($data[self::FIELD_DEFAULT_VALUE_TIME])) {
                $value = $data[self::FIELD_DEFAULT_VALUE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DEFAULT_VALUE_TIME_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_TIME_EXT])) {
                $ext = $data[self::FIELD_DEFAULT_VALUE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $this->setDefaultValueTime($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDefaultValueTime(new FHIRTime($ext));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_TIMING])) {
            if ($data[self::FIELD_DEFAULT_VALUE_TIMING] instanceof FHIRTiming) {
                $this->setDefaultValueTiming($data[self::FIELD_DEFAULT_VALUE_TIMING]);
            } else {
                $this->setDefaultValueTiming(new FHIRTiming($data[self::FIELD_DEFAULT_VALUE_TIMING]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT]) || isset($data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT])) {
            if (isset($data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT])) {
                $value = $data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT])) {
                $ext = $data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setDefaultValueUnsignedInt($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDefaultValueUnsignedInt(new FHIRUnsignedInt($ext));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_URI]) || isset($data[self::FIELD_DEFAULT_VALUE_URI_EXT])) {
            if (isset($data[self::FIELD_DEFAULT_VALUE_URI])) {
                $value = $data[self::FIELD_DEFAULT_VALUE_URI];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DEFAULT_VALUE_URI_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_URI_EXT])) {
                $ext = $data[self::FIELD_DEFAULT_VALUE_URI_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setDefaultValueUri($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDefaultValueUri(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_DEFINITION]) || isset($data[self::FIELD_DEFINITION_EXT])) {
            if (isset($data[self::FIELD_DEFINITION])) {
                $value = $data[self::FIELD_DEFINITION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DEFINITION_EXT]) && is_array($data[self::FIELD_DEFINITION_EXT])) {
                $ext = $data[self::FIELD_DEFINITION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setDefinition($value);
                } else if (is_array($value)) {
                    $this->setDefinition(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setDefinition(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDefinition(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE])) {
            if (is_array($data[self::FIELD_EXAMPLE])) {
                foreach($data[self::FIELD_EXAMPLE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRElementDefinitionExample) {
                        $this->addExample($v);
                    } else {
                        $this->addExample(new FHIRElementDefinitionExample($v));
                    }
                }
            } else if ($data[self::FIELD_EXAMPLE] instanceof FHIRElementDefinitionExample) {
                $this->addExample($data[self::FIELD_EXAMPLE]);
            } else {
                $this->addExample(new FHIRElementDefinitionExample($data[self::FIELD_EXAMPLE]));
            }
        }
        if (isset($data[self::FIELD_FIXED_ADDRESS])) {
            if ($data[self::FIELD_FIXED_ADDRESS] instanceof FHIRAddress) {
                $this->setFixedAddress($data[self::FIELD_FIXED_ADDRESS]);
            } else {
                $this->setFixedAddress(new FHIRAddress($data[self::FIELD_FIXED_ADDRESS]));
            }
        }
        if (isset($data[self::FIELD_FIXED_AGE])) {
            if ($data[self::FIELD_FIXED_AGE] instanceof FHIRAge) {
                $this->setFixedAge($data[self::FIELD_FIXED_AGE]);
            } else {
                $this->setFixedAge(new FHIRAge($data[self::FIELD_FIXED_AGE]));
            }
        }
        if (isset($data[self::FIELD_FIXED_ANNOTATION])) {
            if ($data[self::FIELD_FIXED_ANNOTATION] instanceof FHIRAnnotation) {
                $this->setFixedAnnotation($data[self::FIELD_FIXED_ANNOTATION]);
            } else {
                $this->setFixedAnnotation(new FHIRAnnotation($data[self::FIELD_FIXED_ANNOTATION]));
            }
        }
        if (isset($data[self::FIELD_FIXED_ATTACHMENT])) {
            if ($data[self::FIELD_FIXED_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setFixedAttachment($data[self::FIELD_FIXED_ATTACHMENT]);
            } else {
                $this->setFixedAttachment(new FHIRAttachment($data[self::FIELD_FIXED_ATTACHMENT]));
            }
        }
        if (isset($data[self::FIELD_FIXED_BASE_64BINARY]) || isset($data[self::FIELD_FIXED_BASE_64BINARY_EXT])) {
            if (isset($data[self::FIELD_FIXED_BASE_64BINARY])) {
                $value = $data[self::FIELD_FIXED_BASE_64BINARY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FIXED_BASE_64BINARY_EXT]) && is_array($data[self::FIELD_FIXED_BASE_64BINARY_EXT])) {
                $ext = $data[self::FIELD_FIXED_BASE_64BINARY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBase64Binary) {
                    $this->setFixedBase64Binary($value);
                } else if (is_array($value)) {
                    $this->setFixedBase64Binary(new FHIRBase64Binary(array_merge($ext, $value)));
                } else {
                    $this->setFixedBase64Binary(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFixedBase64Binary(new FHIRBase64Binary($ext));
            }
        }
        if (isset($data[self::FIELD_FIXED_BOOLEAN]) || isset($data[self::FIELD_FIXED_BOOLEAN_EXT])) {
            if (isset($data[self::FIELD_FIXED_BOOLEAN])) {
                $value = $data[self::FIELD_FIXED_BOOLEAN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FIXED_BOOLEAN_EXT]) && is_array($data[self::FIELD_FIXED_BOOLEAN_EXT])) {
                $ext = $data[self::FIELD_FIXED_BOOLEAN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setFixedBoolean($value);
                } else if (is_array($value)) {
                    $this->setFixedBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setFixedBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFixedBoolean(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_FIXED_CODE]) || isset($data[self::FIELD_FIXED_CODE_EXT])) {
            if (isset($data[self::FIELD_FIXED_CODE])) {
                $value = $data[self::FIELD_FIXED_CODE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FIXED_CODE_EXT]) && is_array($data[self::FIELD_FIXED_CODE_EXT])) {
                $ext = $data[self::FIELD_FIXED_CODE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setFixedCode($value);
                } else if (is_array($value)) {
                    $this->setFixedCode(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setFixedCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFixedCode(new FHIRCode($ext));
            }
        }
        if (isset($data[self::FIELD_FIXED_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_FIXED_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setFixedCodeableConcept($data[self::FIELD_FIXED_CODEABLE_CONCEPT]);
            } else {
                $this->setFixedCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_FIXED_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_FIXED_CODING])) {
            if ($data[self::FIELD_FIXED_CODING] instanceof FHIRCoding) {
                $this->setFixedCoding($data[self::FIELD_FIXED_CODING]);
            } else {
                $this->setFixedCoding(new FHIRCoding($data[self::FIELD_FIXED_CODING]));
            }
        }
        if (isset($data[self::FIELD_FIXED_CONTACT_POINT])) {
            if ($data[self::FIELD_FIXED_CONTACT_POINT] instanceof FHIRContactPoint) {
                $this->setFixedContactPoint($data[self::FIELD_FIXED_CONTACT_POINT]);
            } else {
                $this->setFixedContactPoint(new FHIRContactPoint($data[self::FIELD_FIXED_CONTACT_POINT]));
            }
        }
        if (isset($data[self::FIELD_FIXED_COUNT])) {
            if ($data[self::FIELD_FIXED_COUNT] instanceof FHIRCount) {
                $this->setFixedCount($data[self::FIELD_FIXED_COUNT]);
            } else {
                $this->setFixedCount(new FHIRCount($data[self::FIELD_FIXED_COUNT]));
            }
        }
        if (isset($data[self::FIELD_FIXED_DATE]) || isset($data[self::FIELD_FIXED_DATE_EXT])) {
            if (isset($data[self::FIELD_FIXED_DATE])) {
                $value = $data[self::FIELD_FIXED_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FIXED_DATE_EXT]) && is_array($data[self::FIELD_FIXED_DATE_EXT])) {
                $ext = $data[self::FIELD_FIXED_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setFixedDate($value);
                } else if (is_array($value)) {
                    $this->setFixedDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setFixedDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFixedDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_FIXED_DATE_TIME]) || isset($data[self::FIELD_FIXED_DATE_TIME_EXT])) {
            if (isset($data[self::FIELD_FIXED_DATE_TIME])) {
                $value = $data[self::FIELD_FIXED_DATE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FIXED_DATE_TIME_EXT]) && is_array($data[self::FIELD_FIXED_DATE_TIME_EXT])) {
                $ext = $data[self::FIELD_FIXED_DATE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setFixedDateTime($value);
                } else if (is_array($value)) {
                    $this->setFixedDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setFixedDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFixedDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_FIXED_DECIMAL]) || isset($data[self::FIELD_FIXED_DECIMAL_EXT])) {
            if (isset($data[self::FIELD_FIXED_DECIMAL])) {
                $value = $data[self::FIELD_FIXED_DECIMAL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FIXED_DECIMAL_EXT]) && is_array($data[self::FIELD_FIXED_DECIMAL_EXT])) {
                $ext = $data[self::FIELD_FIXED_DECIMAL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setFixedDecimal($value);
                } else if (is_array($value)) {
                    $this->setFixedDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setFixedDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFixedDecimal(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_FIXED_DISTANCE])) {
            if ($data[self::FIELD_FIXED_DISTANCE] instanceof FHIRDistance) {
                $this->setFixedDistance($data[self::FIELD_FIXED_DISTANCE]);
            } else {
                $this->setFixedDistance(new FHIRDistance($data[self::FIELD_FIXED_DISTANCE]));
            }
        }
        if (isset($data[self::FIELD_FIXED_DURATION])) {
            if ($data[self::FIELD_FIXED_DURATION] instanceof FHIRDuration) {
                $this->setFixedDuration($data[self::FIELD_FIXED_DURATION]);
            } else {
                $this->setFixedDuration(new FHIRDuration($data[self::FIELD_FIXED_DURATION]));
            }
        }
        if (isset($data[self::FIELD_FIXED_HUMAN_NAME])) {
            if ($data[self::FIELD_FIXED_HUMAN_NAME] instanceof FHIRHumanName) {
                $this->setFixedHumanName($data[self::FIELD_FIXED_HUMAN_NAME]);
            } else {
                $this->setFixedHumanName(new FHIRHumanName($data[self::FIELD_FIXED_HUMAN_NAME]));
            }
        }
        if (isset($data[self::FIELD_FIXED_ID]) || isset($data[self::FIELD_FIXED_ID_EXT])) {
            if (isset($data[self::FIELD_FIXED_ID])) {
                $value = $data[self::FIELD_FIXED_ID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FIXED_ID_EXT]) && is_array($data[self::FIELD_FIXED_ID_EXT])) {
                $ext = $data[self::FIELD_FIXED_ID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setFixedId($value);
                } else if (is_array($value)) {
                    $this->setFixedId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setFixedId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFixedId(new FHIRId($ext));
            }
        }
        if (isset($data[self::FIELD_FIXED_IDENTIFIER])) {
            if ($data[self::FIELD_FIXED_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setFixedIdentifier($data[self::FIELD_FIXED_IDENTIFIER]);
            } else {
                $this->setFixedIdentifier(new FHIRIdentifier($data[self::FIELD_FIXED_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_FIXED_INSTANT]) || isset($data[self::FIELD_FIXED_INSTANT_EXT])) {
            if (isset($data[self::FIELD_FIXED_INSTANT])) {
                $value = $data[self::FIELD_FIXED_INSTANT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FIXED_INSTANT_EXT]) && is_array($data[self::FIELD_FIXED_INSTANT_EXT])) {
                $ext = $data[self::FIELD_FIXED_INSTANT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setFixedInstant($value);
                } else if (is_array($value)) {
                    $this->setFixedInstant(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setFixedInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFixedInstant(new FHIRInstant($ext));
            }
        }
        if (isset($data[self::FIELD_FIXED_INTEGER]) || isset($data[self::FIELD_FIXED_INTEGER_EXT])) {
            if (isset($data[self::FIELD_FIXED_INTEGER])) {
                $value = $data[self::FIELD_FIXED_INTEGER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FIXED_INTEGER_EXT]) && is_array($data[self::FIELD_FIXED_INTEGER_EXT])) {
                $ext = $data[self::FIELD_FIXED_INTEGER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setFixedInteger($value);
                } else if (is_array($value)) {
                    $this->setFixedInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setFixedInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFixedInteger(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_FIXED_MARKDOWN]) || isset($data[self::FIELD_FIXED_MARKDOWN_EXT])) {
            if (isset($data[self::FIELD_FIXED_MARKDOWN])) {
                $value = $data[self::FIELD_FIXED_MARKDOWN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FIXED_MARKDOWN_EXT]) && is_array($data[self::FIELD_FIXED_MARKDOWN_EXT])) {
                $ext = $data[self::FIELD_FIXED_MARKDOWN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setFixedMarkdown($value);
                } else if (is_array($value)) {
                    $this->setFixedMarkdown(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setFixedMarkdown(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFixedMarkdown(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_FIXED_META])) {
            if ($data[self::FIELD_FIXED_META] instanceof FHIRMeta) {
                $this->setFixedMeta($data[self::FIELD_FIXED_META]);
            } else {
                $this->setFixedMeta(new FHIRMeta($data[self::FIELD_FIXED_META]));
            }
        }
        if (isset($data[self::FIELD_FIXED_MONEY])) {
            if ($data[self::FIELD_FIXED_MONEY] instanceof FHIRMoney) {
                $this->setFixedMoney($data[self::FIELD_FIXED_MONEY]);
            } else {
                $this->setFixedMoney(new FHIRMoney($data[self::FIELD_FIXED_MONEY]));
            }
        }
        if (isset($data[self::FIELD_FIXED_OID]) || isset($data[self::FIELD_FIXED_OID_EXT])) {
            if (isset($data[self::FIELD_FIXED_OID])) {
                $value = $data[self::FIELD_FIXED_OID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FIXED_OID_EXT]) && is_array($data[self::FIELD_FIXED_OID_EXT])) {
                $ext = $data[self::FIELD_FIXED_OID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIROid) {
                    $this->setFixedOid($value);
                } else if (is_array($value)) {
                    $this->setFixedOid(new FHIROid(array_merge($ext, $value)));
                } else {
                    $this->setFixedOid(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFixedOid(new FHIROid($ext));
            }
        }
        if (isset($data[self::FIELD_FIXED_PERIOD])) {
            if ($data[self::FIELD_FIXED_PERIOD] instanceof FHIRPeriod) {
                $this->setFixedPeriod($data[self::FIELD_FIXED_PERIOD]);
            } else {
                $this->setFixedPeriod(new FHIRPeriod($data[self::FIELD_FIXED_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_FIXED_POSITIVE_INT]) || isset($data[self::FIELD_FIXED_POSITIVE_INT_EXT])) {
            if (isset($data[self::FIELD_FIXED_POSITIVE_INT])) {
                $value = $data[self::FIELD_FIXED_POSITIVE_INT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FIXED_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_FIXED_POSITIVE_INT_EXT])) {
                $ext = $data[self::FIELD_FIXED_POSITIVE_INT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setFixedPositiveInt($value);
                } else if (is_array($value)) {
                    $this->setFixedPositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setFixedPositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFixedPositiveInt(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_FIXED_QUANTITY])) {
            if ($data[self::FIELD_FIXED_QUANTITY] instanceof FHIRQuantity) {
                $this->setFixedQuantity($data[self::FIELD_FIXED_QUANTITY]);
            } else {
                $this->setFixedQuantity(new FHIRQuantity($data[self::FIELD_FIXED_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_FIXED_RANGE])) {
            if ($data[self::FIELD_FIXED_RANGE] instanceof FHIRRange) {
                $this->setFixedRange($data[self::FIELD_FIXED_RANGE]);
            } else {
                $this->setFixedRange(new FHIRRange($data[self::FIELD_FIXED_RANGE]));
            }
        }
        if (isset($data[self::FIELD_FIXED_RATIO])) {
            if ($data[self::FIELD_FIXED_RATIO] instanceof FHIRRatio) {
                $this->setFixedRatio($data[self::FIELD_FIXED_RATIO]);
            } else {
                $this->setFixedRatio(new FHIRRatio($data[self::FIELD_FIXED_RATIO]));
            }
        }
        if (isset($data[self::FIELD_FIXED_REFERENCE])) {
            if ($data[self::FIELD_FIXED_REFERENCE] instanceof FHIRReference) {
                $this->setFixedReference($data[self::FIELD_FIXED_REFERENCE]);
            } else {
                $this->setFixedReference(new FHIRReference($data[self::FIELD_FIXED_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_FIXED_SAMPLED_DATA])) {
            if ($data[self::FIELD_FIXED_SAMPLED_DATA] instanceof FHIRSampledData) {
                $this->setFixedSampledData($data[self::FIELD_FIXED_SAMPLED_DATA]);
            } else {
                $this->setFixedSampledData(new FHIRSampledData($data[self::FIELD_FIXED_SAMPLED_DATA]));
            }
        }
        if (isset($data[self::FIELD_FIXED_SIGNATURE])) {
            if ($data[self::FIELD_FIXED_SIGNATURE] instanceof FHIRSignature) {
                $this->setFixedSignature($data[self::FIELD_FIXED_SIGNATURE]);
            } else {
                $this->setFixedSignature(new FHIRSignature($data[self::FIELD_FIXED_SIGNATURE]));
            }
        }
        if (isset($data[self::FIELD_FIXED_STRING]) || isset($data[self::FIELD_FIXED_STRING_EXT])) {
            if (isset($data[self::FIELD_FIXED_STRING])) {
                $value = $data[self::FIELD_FIXED_STRING];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FIXED_STRING_EXT]) && is_array($data[self::FIELD_FIXED_STRING_EXT])) {
                $ext = $data[self::FIELD_FIXED_STRING_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setFixedString($value);
                } else if (is_array($value)) {
                    $this->setFixedString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setFixedString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFixedString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_FIXED_TIME]) || isset($data[self::FIELD_FIXED_TIME_EXT])) {
            if (isset($data[self::FIELD_FIXED_TIME])) {
                $value = $data[self::FIELD_FIXED_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FIXED_TIME_EXT]) && is_array($data[self::FIELD_FIXED_TIME_EXT])) {
                $ext = $data[self::FIELD_FIXED_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $this->setFixedTime($value);
                } else if (is_array($value)) {
                    $this->setFixedTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $this->setFixedTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFixedTime(new FHIRTime($ext));
            }
        }
        if (isset($data[self::FIELD_FIXED_TIMING])) {
            if ($data[self::FIELD_FIXED_TIMING] instanceof FHIRTiming) {
                $this->setFixedTiming($data[self::FIELD_FIXED_TIMING]);
            } else {
                $this->setFixedTiming(new FHIRTiming($data[self::FIELD_FIXED_TIMING]));
            }
        }
        if (isset($data[self::FIELD_FIXED_UNSIGNED_INT]) || isset($data[self::FIELD_FIXED_UNSIGNED_INT_EXT])) {
            if (isset($data[self::FIELD_FIXED_UNSIGNED_INT])) {
                $value = $data[self::FIELD_FIXED_UNSIGNED_INT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FIXED_UNSIGNED_INT_EXT]) && is_array($data[self::FIELD_FIXED_UNSIGNED_INT_EXT])) {
                $ext = $data[self::FIELD_FIXED_UNSIGNED_INT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setFixedUnsignedInt($value);
                } else if (is_array($value)) {
                    $this->setFixedUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setFixedUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFixedUnsignedInt(new FHIRUnsignedInt($ext));
            }
        }
        if (isset($data[self::FIELD_FIXED_URI]) || isset($data[self::FIELD_FIXED_URI_EXT])) {
            if (isset($data[self::FIELD_FIXED_URI])) {
                $value = $data[self::FIELD_FIXED_URI];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FIXED_URI_EXT]) && is_array($data[self::FIELD_FIXED_URI_EXT])) {
                $ext = $data[self::FIELD_FIXED_URI_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setFixedUri($value);
                } else if (is_array($value)) {
                    $this->setFixedUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setFixedUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFixedUri(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_IS_MODIFIER]) || isset($data[self::FIELD_IS_MODIFIER_EXT])) {
            if (isset($data[self::FIELD_IS_MODIFIER])) {
                $value = $data[self::FIELD_IS_MODIFIER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_IS_MODIFIER_EXT]) && is_array($data[self::FIELD_IS_MODIFIER_EXT])) {
                $ext = $data[self::FIELD_IS_MODIFIER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setIsModifier($value);
                } else if (is_array($value)) {
                    $this->setIsModifier(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setIsModifier(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setIsModifier(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_IS_SUMMARY]) || isset($data[self::FIELD_IS_SUMMARY_EXT])) {
            if (isset($data[self::FIELD_IS_SUMMARY])) {
                $value = $data[self::FIELD_IS_SUMMARY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_IS_SUMMARY_EXT]) && is_array($data[self::FIELD_IS_SUMMARY_EXT])) {
                $ext = $data[self::FIELD_IS_SUMMARY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setIsSummary($value);
                } else if (is_array($value)) {
                    $this->setIsSummary(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setIsSummary(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setIsSummary(new FHIRBoolean($ext));
            }
        }
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
        if (isset($data[self::FIELD_MAPPING])) {
            if (is_array($data[self::FIELD_MAPPING])) {
                foreach($data[self::FIELD_MAPPING] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRElementDefinitionMapping) {
                        $this->addMapping($v);
                    } else {
                        $this->addMapping(new FHIRElementDefinitionMapping($v));
                    }
                }
            } else if ($data[self::FIELD_MAPPING] instanceof FHIRElementDefinitionMapping) {
                $this->addMapping($data[self::FIELD_MAPPING]);
            } else {
                $this->addMapping(new FHIRElementDefinitionMapping($data[self::FIELD_MAPPING]));
            }
        }
        if (isset($data[self::FIELD_MAX]) || isset($data[self::FIELD_MAX_EXT])) {
            if (isset($data[self::FIELD_MAX])) {
                $value = $data[self::FIELD_MAX];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MAX_EXT]) && is_array($data[self::FIELD_MAX_EXT])) {
                $ext = $data[self::FIELD_MAX_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setMax($value);
                } else if (is_array($value)) {
                    $this->setMax(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setMax(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMax(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_MAX_LENGTH]) || isset($data[self::FIELD_MAX_LENGTH_EXT])) {
            if (isset($data[self::FIELD_MAX_LENGTH])) {
                $value = $data[self::FIELD_MAX_LENGTH];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MAX_LENGTH_EXT]) && is_array($data[self::FIELD_MAX_LENGTH_EXT])) {
                $ext = $data[self::FIELD_MAX_LENGTH_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setMaxLength($value);
                } else if (is_array($value)) {
                    $this->setMaxLength(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setMaxLength(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMaxLength(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_MAX_VALUE_DATE]) || isset($data[self::FIELD_MAX_VALUE_DATE_EXT])) {
            if (isset($data[self::FIELD_MAX_VALUE_DATE])) {
                $value = $data[self::FIELD_MAX_VALUE_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MAX_VALUE_DATE_EXT]) && is_array($data[self::FIELD_MAX_VALUE_DATE_EXT])) {
                $ext = $data[self::FIELD_MAX_VALUE_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setMaxValueDate($value);
                } else if (is_array($value)) {
                    $this->setMaxValueDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setMaxValueDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMaxValueDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_MAX_VALUE_DATE_TIME]) || isset($data[self::FIELD_MAX_VALUE_DATE_TIME_EXT])) {
            if (isset($data[self::FIELD_MAX_VALUE_DATE_TIME])) {
                $value = $data[self::FIELD_MAX_VALUE_DATE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MAX_VALUE_DATE_TIME_EXT]) && is_array($data[self::FIELD_MAX_VALUE_DATE_TIME_EXT])) {
                $ext = $data[self::FIELD_MAX_VALUE_DATE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setMaxValueDateTime($value);
                } else if (is_array($value)) {
                    $this->setMaxValueDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setMaxValueDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMaxValueDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_MAX_VALUE_DECIMAL]) || isset($data[self::FIELD_MAX_VALUE_DECIMAL_EXT])) {
            if (isset($data[self::FIELD_MAX_VALUE_DECIMAL])) {
                $value = $data[self::FIELD_MAX_VALUE_DECIMAL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MAX_VALUE_DECIMAL_EXT]) && is_array($data[self::FIELD_MAX_VALUE_DECIMAL_EXT])) {
                $ext = $data[self::FIELD_MAX_VALUE_DECIMAL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setMaxValueDecimal($value);
                } else if (is_array($value)) {
                    $this->setMaxValueDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setMaxValueDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMaxValueDecimal(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_MAX_VALUE_INSTANT]) || isset($data[self::FIELD_MAX_VALUE_INSTANT_EXT])) {
            if (isset($data[self::FIELD_MAX_VALUE_INSTANT])) {
                $value = $data[self::FIELD_MAX_VALUE_INSTANT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MAX_VALUE_INSTANT_EXT]) && is_array($data[self::FIELD_MAX_VALUE_INSTANT_EXT])) {
                $ext = $data[self::FIELD_MAX_VALUE_INSTANT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setMaxValueInstant($value);
                } else if (is_array($value)) {
                    $this->setMaxValueInstant(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setMaxValueInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMaxValueInstant(new FHIRInstant($ext));
            }
        }
        if (isset($data[self::FIELD_MAX_VALUE_INTEGER]) || isset($data[self::FIELD_MAX_VALUE_INTEGER_EXT])) {
            if (isset($data[self::FIELD_MAX_VALUE_INTEGER])) {
                $value = $data[self::FIELD_MAX_VALUE_INTEGER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MAX_VALUE_INTEGER_EXT]) && is_array($data[self::FIELD_MAX_VALUE_INTEGER_EXT])) {
                $ext = $data[self::FIELD_MAX_VALUE_INTEGER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setMaxValueInteger($value);
                } else if (is_array($value)) {
                    $this->setMaxValueInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setMaxValueInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMaxValueInteger(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_MAX_VALUE_POSITIVE_INT]) || isset($data[self::FIELD_MAX_VALUE_POSITIVE_INT_EXT])) {
            if (isset($data[self::FIELD_MAX_VALUE_POSITIVE_INT])) {
                $value = $data[self::FIELD_MAX_VALUE_POSITIVE_INT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MAX_VALUE_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_MAX_VALUE_POSITIVE_INT_EXT])) {
                $ext = $data[self::FIELD_MAX_VALUE_POSITIVE_INT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setMaxValuePositiveInt($value);
                } else if (is_array($value)) {
                    $this->setMaxValuePositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setMaxValuePositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMaxValuePositiveInt(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_MAX_VALUE_QUANTITY])) {
            if ($data[self::FIELD_MAX_VALUE_QUANTITY] instanceof FHIRQuantity) {
                $this->setMaxValueQuantity($data[self::FIELD_MAX_VALUE_QUANTITY]);
            } else {
                $this->setMaxValueQuantity(new FHIRQuantity($data[self::FIELD_MAX_VALUE_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_MAX_VALUE_TIME]) || isset($data[self::FIELD_MAX_VALUE_TIME_EXT])) {
            if (isset($data[self::FIELD_MAX_VALUE_TIME])) {
                $value = $data[self::FIELD_MAX_VALUE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MAX_VALUE_TIME_EXT]) && is_array($data[self::FIELD_MAX_VALUE_TIME_EXT])) {
                $ext = $data[self::FIELD_MAX_VALUE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $this->setMaxValueTime($value);
                } else if (is_array($value)) {
                    $this->setMaxValueTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $this->setMaxValueTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMaxValueTime(new FHIRTime($ext));
            }
        }
        if (isset($data[self::FIELD_MAX_VALUE_UNSIGNED_INT]) || isset($data[self::FIELD_MAX_VALUE_UNSIGNED_INT_EXT])) {
            if (isset($data[self::FIELD_MAX_VALUE_UNSIGNED_INT])) {
                $value = $data[self::FIELD_MAX_VALUE_UNSIGNED_INT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MAX_VALUE_UNSIGNED_INT_EXT]) && is_array($data[self::FIELD_MAX_VALUE_UNSIGNED_INT_EXT])) {
                $ext = $data[self::FIELD_MAX_VALUE_UNSIGNED_INT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setMaxValueUnsignedInt($value);
                } else if (is_array($value)) {
                    $this->setMaxValueUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setMaxValueUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMaxValueUnsignedInt(new FHIRUnsignedInt($ext));
            }
        }
        if (isset($data[self::FIELD_MEANING_WHEN_MISSING]) || isset($data[self::FIELD_MEANING_WHEN_MISSING_EXT])) {
            if (isset($data[self::FIELD_MEANING_WHEN_MISSING])) {
                $value = $data[self::FIELD_MEANING_WHEN_MISSING];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MEANING_WHEN_MISSING_EXT]) && is_array($data[self::FIELD_MEANING_WHEN_MISSING_EXT])) {
                $ext = $data[self::FIELD_MEANING_WHEN_MISSING_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setMeaningWhenMissing($value);
                } else if (is_array($value)) {
                    $this->setMeaningWhenMissing(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setMeaningWhenMissing(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMeaningWhenMissing(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_MIN]) || isset($data[self::FIELD_MIN_EXT])) {
            if (isset($data[self::FIELD_MIN])) {
                $value = $data[self::FIELD_MIN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MIN_EXT]) && is_array($data[self::FIELD_MIN_EXT])) {
                $ext = $data[self::FIELD_MIN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setMin($value);
                } else if (is_array($value)) {
                    $this->setMin(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setMin(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMin(new FHIRUnsignedInt($ext));
            }
        }
        if (isset($data[self::FIELD_MIN_VALUE_DATE]) || isset($data[self::FIELD_MIN_VALUE_DATE_EXT])) {
            if (isset($data[self::FIELD_MIN_VALUE_DATE])) {
                $value = $data[self::FIELD_MIN_VALUE_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MIN_VALUE_DATE_EXT]) && is_array($data[self::FIELD_MIN_VALUE_DATE_EXT])) {
                $ext = $data[self::FIELD_MIN_VALUE_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setMinValueDate($value);
                } else if (is_array($value)) {
                    $this->setMinValueDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setMinValueDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMinValueDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_MIN_VALUE_DATE_TIME]) || isset($data[self::FIELD_MIN_VALUE_DATE_TIME_EXT])) {
            if (isset($data[self::FIELD_MIN_VALUE_DATE_TIME])) {
                $value = $data[self::FIELD_MIN_VALUE_DATE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MIN_VALUE_DATE_TIME_EXT]) && is_array($data[self::FIELD_MIN_VALUE_DATE_TIME_EXT])) {
                $ext = $data[self::FIELD_MIN_VALUE_DATE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setMinValueDateTime($value);
                } else if (is_array($value)) {
                    $this->setMinValueDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setMinValueDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMinValueDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_MIN_VALUE_DECIMAL]) || isset($data[self::FIELD_MIN_VALUE_DECIMAL_EXT])) {
            if (isset($data[self::FIELD_MIN_VALUE_DECIMAL])) {
                $value = $data[self::FIELD_MIN_VALUE_DECIMAL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MIN_VALUE_DECIMAL_EXT]) && is_array($data[self::FIELD_MIN_VALUE_DECIMAL_EXT])) {
                $ext = $data[self::FIELD_MIN_VALUE_DECIMAL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setMinValueDecimal($value);
                } else if (is_array($value)) {
                    $this->setMinValueDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setMinValueDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMinValueDecimal(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_MIN_VALUE_INSTANT]) || isset($data[self::FIELD_MIN_VALUE_INSTANT_EXT])) {
            if (isset($data[self::FIELD_MIN_VALUE_INSTANT])) {
                $value = $data[self::FIELD_MIN_VALUE_INSTANT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MIN_VALUE_INSTANT_EXT]) && is_array($data[self::FIELD_MIN_VALUE_INSTANT_EXT])) {
                $ext = $data[self::FIELD_MIN_VALUE_INSTANT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setMinValueInstant($value);
                } else if (is_array($value)) {
                    $this->setMinValueInstant(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setMinValueInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMinValueInstant(new FHIRInstant($ext));
            }
        }
        if (isset($data[self::FIELD_MIN_VALUE_INTEGER]) || isset($data[self::FIELD_MIN_VALUE_INTEGER_EXT])) {
            if (isset($data[self::FIELD_MIN_VALUE_INTEGER])) {
                $value = $data[self::FIELD_MIN_VALUE_INTEGER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MIN_VALUE_INTEGER_EXT]) && is_array($data[self::FIELD_MIN_VALUE_INTEGER_EXT])) {
                $ext = $data[self::FIELD_MIN_VALUE_INTEGER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setMinValueInteger($value);
                } else if (is_array($value)) {
                    $this->setMinValueInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setMinValueInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMinValueInteger(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_MIN_VALUE_POSITIVE_INT]) || isset($data[self::FIELD_MIN_VALUE_POSITIVE_INT_EXT])) {
            if (isset($data[self::FIELD_MIN_VALUE_POSITIVE_INT])) {
                $value = $data[self::FIELD_MIN_VALUE_POSITIVE_INT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MIN_VALUE_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_MIN_VALUE_POSITIVE_INT_EXT])) {
                $ext = $data[self::FIELD_MIN_VALUE_POSITIVE_INT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setMinValuePositiveInt($value);
                } else if (is_array($value)) {
                    $this->setMinValuePositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setMinValuePositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMinValuePositiveInt(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_MIN_VALUE_QUANTITY])) {
            if ($data[self::FIELD_MIN_VALUE_QUANTITY] instanceof FHIRQuantity) {
                $this->setMinValueQuantity($data[self::FIELD_MIN_VALUE_QUANTITY]);
            } else {
                $this->setMinValueQuantity(new FHIRQuantity($data[self::FIELD_MIN_VALUE_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_MIN_VALUE_TIME]) || isset($data[self::FIELD_MIN_VALUE_TIME_EXT])) {
            if (isset($data[self::FIELD_MIN_VALUE_TIME])) {
                $value = $data[self::FIELD_MIN_VALUE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MIN_VALUE_TIME_EXT]) && is_array($data[self::FIELD_MIN_VALUE_TIME_EXT])) {
                $ext = $data[self::FIELD_MIN_VALUE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $this->setMinValueTime($value);
                } else if (is_array($value)) {
                    $this->setMinValueTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $this->setMinValueTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMinValueTime(new FHIRTime($ext));
            }
        }
        if (isset($data[self::FIELD_MIN_VALUE_UNSIGNED_INT]) || isset($data[self::FIELD_MIN_VALUE_UNSIGNED_INT_EXT])) {
            if (isset($data[self::FIELD_MIN_VALUE_UNSIGNED_INT])) {
                $value = $data[self::FIELD_MIN_VALUE_UNSIGNED_INT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MIN_VALUE_UNSIGNED_INT_EXT]) && is_array($data[self::FIELD_MIN_VALUE_UNSIGNED_INT_EXT])) {
                $ext = $data[self::FIELD_MIN_VALUE_UNSIGNED_INT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setMinValueUnsignedInt($value);
                } else if (is_array($value)) {
                    $this->setMinValueUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setMinValueUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMinValueUnsignedInt(new FHIRUnsignedInt($ext));
            }
        }
        if (isset($data[self::FIELD_MUST_SUPPORT]) || isset($data[self::FIELD_MUST_SUPPORT_EXT])) {
            if (isset($data[self::FIELD_MUST_SUPPORT])) {
                $value = $data[self::FIELD_MUST_SUPPORT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MUST_SUPPORT_EXT]) && is_array($data[self::FIELD_MUST_SUPPORT_EXT])) {
                $ext = $data[self::FIELD_MUST_SUPPORT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setMustSupport($value);
                } else if (is_array($value)) {
                    $this->setMustSupport(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setMustSupport(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMustSupport(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_ORDER_MEANING]) || isset($data[self::FIELD_ORDER_MEANING_EXT])) {
            if (isset($data[self::FIELD_ORDER_MEANING])) {
                $value = $data[self::FIELD_ORDER_MEANING];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ORDER_MEANING_EXT]) && is_array($data[self::FIELD_ORDER_MEANING_EXT])) {
                $ext = $data[self::FIELD_ORDER_MEANING_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setOrderMeaning($value);
                } else if (is_array($value)) {
                    $this->setOrderMeaning(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setOrderMeaning(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setOrderMeaning(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PATH]) || isset($data[self::FIELD_PATH_EXT])) {
            if (isset($data[self::FIELD_PATH])) {
                $value = $data[self::FIELD_PATH];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PATH_EXT]) && is_array($data[self::FIELD_PATH_EXT])) {
                $ext = $data[self::FIELD_PATH_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPath($value);
                } else if (is_array($value)) {
                    $this->setPath(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPath(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPath(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PATTERN_ADDRESS])) {
            if ($data[self::FIELD_PATTERN_ADDRESS] instanceof FHIRAddress) {
                $this->setPatternAddress($data[self::FIELD_PATTERN_ADDRESS]);
            } else {
                $this->setPatternAddress(new FHIRAddress($data[self::FIELD_PATTERN_ADDRESS]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_AGE])) {
            if ($data[self::FIELD_PATTERN_AGE] instanceof FHIRAge) {
                $this->setPatternAge($data[self::FIELD_PATTERN_AGE]);
            } else {
                $this->setPatternAge(new FHIRAge($data[self::FIELD_PATTERN_AGE]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_ANNOTATION])) {
            if ($data[self::FIELD_PATTERN_ANNOTATION] instanceof FHIRAnnotation) {
                $this->setPatternAnnotation($data[self::FIELD_PATTERN_ANNOTATION]);
            } else {
                $this->setPatternAnnotation(new FHIRAnnotation($data[self::FIELD_PATTERN_ANNOTATION]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_ATTACHMENT])) {
            if ($data[self::FIELD_PATTERN_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setPatternAttachment($data[self::FIELD_PATTERN_ATTACHMENT]);
            } else {
                $this->setPatternAttachment(new FHIRAttachment($data[self::FIELD_PATTERN_ATTACHMENT]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_BASE_64BINARY]) || isset($data[self::FIELD_PATTERN_BASE_64BINARY_EXT])) {
            if (isset($data[self::FIELD_PATTERN_BASE_64BINARY])) {
                $value = $data[self::FIELD_PATTERN_BASE_64BINARY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PATTERN_BASE_64BINARY_EXT]) && is_array($data[self::FIELD_PATTERN_BASE_64BINARY_EXT])) {
                $ext = $data[self::FIELD_PATTERN_BASE_64BINARY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBase64Binary) {
                    $this->setPatternBase64Binary($value);
                } else if (is_array($value)) {
                    $this->setPatternBase64Binary(new FHIRBase64Binary(array_merge($ext, $value)));
                } else {
                    $this->setPatternBase64Binary(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPatternBase64Binary(new FHIRBase64Binary($ext));
            }
        }
        if (isset($data[self::FIELD_PATTERN_BOOLEAN]) || isset($data[self::FIELD_PATTERN_BOOLEAN_EXT])) {
            if (isset($data[self::FIELD_PATTERN_BOOLEAN])) {
                $value = $data[self::FIELD_PATTERN_BOOLEAN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PATTERN_BOOLEAN_EXT]) && is_array($data[self::FIELD_PATTERN_BOOLEAN_EXT])) {
                $ext = $data[self::FIELD_PATTERN_BOOLEAN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setPatternBoolean($value);
                } else if (is_array($value)) {
                    $this->setPatternBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setPatternBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPatternBoolean(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_PATTERN_CODE]) || isset($data[self::FIELD_PATTERN_CODE_EXT])) {
            if (isset($data[self::FIELD_PATTERN_CODE])) {
                $value = $data[self::FIELD_PATTERN_CODE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PATTERN_CODE_EXT]) && is_array($data[self::FIELD_PATTERN_CODE_EXT])) {
                $ext = $data[self::FIELD_PATTERN_CODE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setPatternCode($value);
                } else if (is_array($value)) {
                    $this->setPatternCode(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setPatternCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPatternCode(new FHIRCode($ext));
            }
        }
        if (isset($data[self::FIELD_PATTERN_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_PATTERN_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setPatternCodeableConcept($data[self::FIELD_PATTERN_CODEABLE_CONCEPT]);
            } else {
                $this->setPatternCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_PATTERN_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_CODING])) {
            if ($data[self::FIELD_PATTERN_CODING] instanceof FHIRCoding) {
                $this->setPatternCoding($data[self::FIELD_PATTERN_CODING]);
            } else {
                $this->setPatternCoding(new FHIRCoding($data[self::FIELD_PATTERN_CODING]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_CONTACT_POINT])) {
            if ($data[self::FIELD_PATTERN_CONTACT_POINT] instanceof FHIRContactPoint) {
                $this->setPatternContactPoint($data[self::FIELD_PATTERN_CONTACT_POINT]);
            } else {
                $this->setPatternContactPoint(new FHIRContactPoint($data[self::FIELD_PATTERN_CONTACT_POINT]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_COUNT])) {
            if ($data[self::FIELD_PATTERN_COUNT] instanceof FHIRCount) {
                $this->setPatternCount($data[self::FIELD_PATTERN_COUNT]);
            } else {
                $this->setPatternCount(new FHIRCount($data[self::FIELD_PATTERN_COUNT]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_DATE]) || isset($data[self::FIELD_PATTERN_DATE_EXT])) {
            if (isset($data[self::FIELD_PATTERN_DATE])) {
                $value = $data[self::FIELD_PATTERN_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PATTERN_DATE_EXT]) && is_array($data[self::FIELD_PATTERN_DATE_EXT])) {
                $ext = $data[self::FIELD_PATTERN_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setPatternDate($value);
                } else if (is_array($value)) {
                    $this->setPatternDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setPatternDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPatternDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_PATTERN_DATE_TIME]) || isset($data[self::FIELD_PATTERN_DATE_TIME_EXT])) {
            if (isset($data[self::FIELD_PATTERN_DATE_TIME])) {
                $value = $data[self::FIELD_PATTERN_DATE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PATTERN_DATE_TIME_EXT]) && is_array($data[self::FIELD_PATTERN_DATE_TIME_EXT])) {
                $ext = $data[self::FIELD_PATTERN_DATE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setPatternDateTime($value);
                } else if (is_array($value)) {
                    $this->setPatternDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setPatternDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPatternDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_PATTERN_DECIMAL]) || isset($data[self::FIELD_PATTERN_DECIMAL_EXT])) {
            if (isset($data[self::FIELD_PATTERN_DECIMAL])) {
                $value = $data[self::FIELD_PATTERN_DECIMAL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PATTERN_DECIMAL_EXT]) && is_array($data[self::FIELD_PATTERN_DECIMAL_EXT])) {
                $ext = $data[self::FIELD_PATTERN_DECIMAL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setPatternDecimal($value);
                } else if (is_array($value)) {
                    $this->setPatternDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setPatternDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPatternDecimal(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_PATTERN_DISTANCE])) {
            if ($data[self::FIELD_PATTERN_DISTANCE] instanceof FHIRDistance) {
                $this->setPatternDistance($data[self::FIELD_PATTERN_DISTANCE]);
            } else {
                $this->setPatternDistance(new FHIRDistance($data[self::FIELD_PATTERN_DISTANCE]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_DURATION])) {
            if ($data[self::FIELD_PATTERN_DURATION] instanceof FHIRDuration) {
                $this->setPatternDuration($data[self::FIELD_PATTERN_DURATION]);
            } else {
                $this->setPatternDuration(new FHIRDuration($data[self::FIELD_PATTERN_DURATION]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_HUMAN_NAME])) {
            if ($data[self::FIELD_PATTERN_HUMAN_NAME] instanceof FHIRHumanName) {
                $this->setPatternHumanName($data[self::FIELD_PATTERN_HUMAN_NAME]);
            } else {
                $this->setPatternHumanName(new FHIRHumanName($data[self::FIELD_PATTERN_HUMAN_NAME]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_ID]) || isset($data[self::FIELD_PATTERN_ID_EXT])) {
            if (isset($data[self::FIELD_PATTERN_ID])) {
                $value = $data[self::FIELD_PATTERN_ID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PATTERN_ID_EXT]) && is_array($data[self::FIELD_PATTERN_ID_EXT])) {
                $ext = $data[self::FIELD_PATTERN_ID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setPatternId($value);
                } else if (is_array($value)) {
                    $this->setPatternId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setPatternId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPatternId(new FHIRId($ext));
            }
        }
        if (isset($data[self::FIELD_PATTERN_IDENTIFIER])) {
            if ($data[self::FIELD_PATTERN_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setPatternIdentifier($data[self::FIELD_PATTERN_IDENTIFIER]);
            } else {
                $this->setPatternIdentifier(new FHIRIdentifier($data[self::FIELD_PATTERN_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_INSTANT]) || isset($data[self::FIELD_PATTERN_INSTANT_EXT])) {
            if (isset($data[self::FIELD_PATTERN_INSTANT])) {
                $value = $data[self::FIELD_PATTERN_INSTANT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PATTERN_INSTANT_EXT]) && is_array($data[self::FIELD_PATTERN_INSTANT_EXT])) {
                $ext = $data[self::FIELD_PATTERN_INSTANT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setPatternInstant($value);
                } else if (is_array($value)) {
                    $this->setPatternInstant(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setPatternInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPatternInstant(new FHIRInstant($ext));
            }
        }
        if (isset($data[self::FIELD_PATTERN_INTEGER]) || isset($data[self::FIELD_PATTERN_INTEGER_EXT])) {
            if (isset($data[self::FIELD_PATTERN_INTEGER])) {
                $value = $data[self::FIELD_PATTERN_INTEGER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PATTERN_INTEGER_EXT]) && is_array($data[self::FIELD_PATTERN_INTEGER_EXT])) {
                $ext = $data[self::FIELD_PATTERN_INTEGER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setPatternInteger($value);
                } else if (is_array($value)) {
                    $this->setPatternInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setPatternInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPatternInteger(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_PATTERN_MARKDOWN]) || isset($data[self::FIELD_PATTERN_MARKDOWN_EXT])) {
            if (isset($data[self::FIELD_PATTERN_MARKDOWN])) {
                $value = $data[self::FIELD_PATTERN_MARKDOWN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PATTERN_MARKDOWN_EXT]) && is_array($data[self::FIELD_PATTERN_MARKDOWN_EXT])) {
                $ext = $data[self::FIELD_PATTERN_MARKDOWN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setPatternMarkdown($value);
                } else if (is_array($value)) {
                    $this->setPatternMarkdown(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setPatternMarkdown(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPatternMarkdown(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_PATTERN_META])) {
            if ($data[self::FIELD_PATTERN_META] instanceof FHIRMeta) {
                $this->setPatternMeta($data[self::FIELD_PATTERN_META]);
            } else {
                $this->setPatternMeta(new FHIRMeta($data[self::FIELD_PATTERN_META]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_MONEY])) {
            if ($data[self::FIELD_PATTERN_MONEY] instanceof FHIRMoney) {
                $this->setPatternMoney($data[self::FIELD_PATTERN_MONEY]);
            } else {
                $this->setPatternMoney(new FHIRMoney($data[self::FIELD_PATTERN_MONEY]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_OID]) || isset($data[self::FIELD_PATTERN_OID_EXT])) {
            if (isset($data[self::FIELD_PATTERN_OID])) {
                $value = $data[self::FIELD_PATTERN_OID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PATTERN_OID_EXT]) && is_array($data[self::FIELD_PATTERN_OID_EXT])) {
                $ext = $data[self::FIELD_PATTERN_OID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIROid) {
                    $this->setPatternOid($value);
                } else if (is_array($value)) {
                    $this->setPatternOid(new FHIROid(array_merge($ext, $value)));
                } else {
                    $this->setPatternOid(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPatternOid(new FHIROid($ext));
            }
        }
        if (isset($data[self::FIELD_PATTERN_PERIOD])) {
            if ($data[self::FIELD_PATTERN_PERIOD] instanceof FHIRPeriod) {
                $this->setPatternPeriod($data[self::FIELD_PATTERN_PERIOD]);
            } else {
                $this->setPatternPeriod(new FHIRPeriod($data[self::FIELD_PATTERN_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_POSITIVE_INT]) || isset($data[self::FIELD_PATTERN_POSITIVE_INT_EXT])) {
            if (isset($data[self::FIELD_PATTERN_POSITIVE_INT])) {
                $value = $data[self::FIELD_PATTERN_POSITIVE_INT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PATTERN_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_PATTERN_POSITIVE_INT_EXT])) {
                $ext = $data[self::FIELD_PATTERN_POSITIVE_INT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setPatternPositiveInt($value);
                } else if (is_array($value)) {
                    $this->setPatternPositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setPatternPositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPatternPositiveInt(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_PATTERN_QUANTITY])) {
            if ($data[self::FIELD_PATTERN_QUANTITY] instanceof FHIRQuantity) {
                $this->setPatternQuantity($data[self::FIELD_PATTERN_QUANTITY]);
            } else {
                $this->setPatternQuantity(new FHIRQuantity($data[self::FIELD_PATTERN_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_RANGE])) {
            if ($data[self::FIELD_PATTERN_RANGE] instanceof FHIRRange) {
                $this->setPatternRange($data[self::FIELD_PATTERN_RANGE]);
            } else {
                $this->setPatternRange(new FHIRRange($data[self::FIELD_PATTERN_RANGE]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_RATIO])) {
            if ($data[self::FIELD_PATTERN_RATIO] instanceof FHIRRatio) {
                $this->setPatternRatio($data[self::FIELD_PATTERN_RATIO]);
            } else {
                $this->setPatternRatio(new FHIRRatio($data[self::FIELD_PATTERN_RATIO]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_REFERENCE])) {
            if ($data[self::FIELD_PATTERN_REFERENCE] instanceof FHIRReference) {
                $this->setPatternReference($data[self::FIELD_PATTERN_REFERENCE]);
            } else {
                $this->setPatternReference(new FHIRReference($data[self::FIELD_PATTERN_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_SAMPLED_DATA])) {
            if ($data[self::FIELD_PATTERN_SAMPLED_DATA] instanceof FHIRSampledData) {
                $this->setPatternSampledData($data[self::FIELD_PATTERN_SAMPLED_DATA]);
            } else {
                $this->setPatternSampledData(new FHIRSampledData($data[self::FIELD_PATTERN_SAMPLED_DATA]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_SIGNATURE])) {
            if ($data[self::FIELD_PATTERN_SIGNATURE] instanceof FHIRSignature) {
                $this->setPatternSignature($data[self::FIELD_PATTERN_SIGNATURE]);
            } else {
                $this->setPatternSignature(new FHIRSignature($data[self::FIELD_PATTERN_SIGNATURE]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_STRING]) || isset($data[self::FIELD_PATTERN_STRING_EXT])) {
            if (isset($data[self::FIELD_PATTERN_STRING])) {
                $value = $data[self::FIELD_PATTERN_STRING];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PATTERN_STRING_EXT]) && is_array($data[self::FIELD_PATTERN_STRING_EXT])) {
                $ext = $data[self::FIELD_PATTERN_STRING_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPatternString($value);
                } else if (is_array($value)) {
                    $this->setPatternString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPatternString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPatternString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PATTERN_TIME]) || isset($data[self::FIELD_PATTERN_TIME_EXT])) {
            if (isset($data[self::FIELD_PATTERN_TIME])) {
                $value = $data[self::FIELD_PATTERN_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PATTERN_TIME_EXT]) && is_array($data[self::FIELD_PATTERN_TIME_EXT])) {
                $ext = $data[self::FIELD_PATTERN_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $this->setPatternTime($value);
                } else if (is_array($value)) {
                    $this->setPatternTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $this->setPatternTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPatternTime(new FHIRTime($ext));
            }
        }
        if (isset($data[self::FIELD_PATTERN_TIMING])) {
            if ($data[self::FIELD_PATTERN_TIMING] instanceof FHIRTiming) {
                $this->setPatternTiming($data[self::FIELD_PATTERN_TIMING]);
            } else {
                $this->setPatternTiming(new FHIRTiming($data[self::FIELD_PATTERN_TIMING]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_UNSIGNED_INT]) || isset($data[self::FIELD_PATTERN_UNSIGNED_INT_EXT])) {
            if (isset($data[self::FIELD_PATTERN_UNSIGNED_INT])) {
                $value = $data[self::FIELD_PATTERN_UNSIGNED_INT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PATTERN_UNSIGNED_INT_EXT]) && is_array($data[self::FIELD_PATTERN_UNSIGNED_INT_EXT])) {
                $ext = $data[self::FIELD_PATTERN_UNSIGNED_INT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setPatternUnsignedInt($value);
                } else if (is_array($value)) {
                    $this->setPatternUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setPatternUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPatternUnsignedInt(new FHIRUnsignedInt($ext));
            }
        }
        if (isset($data[self::FIELD_PATTERN_URI]) || isset($data[self::FIELD_PATTERN_URI_EXT])) {
            if (isset($data[self::FIELD_PATTERN_URI])) {
                $value = $data[self::FIELD_PATTERN_URI];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PATTERN_URI_EXT]) && is_array($data[self::FIELD_PATTERN_URI_EXT])) {
                $ext = $data[self::FIELD_PATTERN_URI_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setPatternUri($value);
                } else if (is_array($value)) {
                    $this->setPatternUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setPatternUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPatternUri(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_REPRESENTATION]) || isset($data[self::FIELD_REPRESENTATION_EXT])) {
            if (isset($data[self::FIELD_REPRESENTATION])) {
                $value = $data[self::FIELD_REPRESENTATION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_REPRESENTATION_EXT]) && is_array($data[self::FIELD_REPRESENTATION_EXT])) {
                $ext = $data[self::FIELD_REPRESENTATION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRPropertyRepresentation) {
                    $this->addRepresentation($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRPropertyRepresentation) {
                            $this->addRepresentation($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addRepresentation(new FHIRPropertyRepresentation(array_merge($v, $iext)));
                            } else {
                                $this->addRepresentation(new FHIRPropertyRepresentation([FHIRPropertyRepresentation::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addRepresentation(new FHIRPropertyRepresentation(array_merge($ext, $value)));
                } else {
                    $this->addRepresentation(new FHIRPropertyRepresentation([FHIRPropertyRepresentation::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addRepresentation(new FHIRPropertyRepresentation($iext));
                }
            }
        }
        if (isset($data[self::FIELD_REQUIREMENTS]) || isset($data[self::FIELD_REQUIREMENTS_EXT])) {
            if (isset($data[self::FIELD_REQUIREMENTS])) {
                $value = $data[self::FIELD_REQUIREMENTS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_REQUIREMENTS_EXT]) && is_array($data[self::FIELD_REQUIREMENTS_EXT])) {
                $ext = $data[self::FIELD_REQUIREMENTS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setRequirements($value);
                } else if (is_array($value)) {
                    $this->setRequirements(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setRequirements(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setRequirements(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_SHORT]) || isset($data[self::FIELD_SHORT_EXT])) {
            if (isset($data[self::FIELD_SHORT])) {
                $value = $data[self::FIELD_SHORT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SHORT_EXT]) && is_array($data[self::FIELD_SHORT_EXT])) {
                $ext = $data[self::FIELD_SHORT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setShort($value);
                } else if (is_array($value)) {
                    $this->setShort(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setShort(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setShort(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SLICE_NAME]) || isset($data[self::FIELD_SLICE_NAME_EXT])) {
            if (isset($data[self::FIELD_SLICE_NAME])) {
                $value = $data[self::FIELD_SLICE_NAME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SLICE_NAME_EXT]) && is_array($data[self::FIELD_SLICE_NAME_EXT])) {
                $ext = $data[self::FIELD_SLICE_NAME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSliceName($value);
                } else if (is_array($value)) {
                    $this->setSliceName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSliceName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSliceName(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SLICING])) {
            if ($data[self::FIELD_SLICING] instanceof FHIRElementDefinitionSlicing) {
                $this->setSlicing($data[self::FIELD_SLICING]);
            } else {
                $this->setSlicing(new FHIRElementDefinitionSlicing($data[self::FIELD_SLICING]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if (is_array($data[self::FIELD_TYPE])) {
                foreach($data[self::FIELD_TYPE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRElementDefinitionType) {
                        $this->addType($v);
                    } else {
                        $this->addType(new FHIRElementDefinitionType($v));
                    }
                }
            } else if ($data[self::FIELD_TYPE] instanceof FHIRElementDefinitionType) {
                $this->addType($data[self::FIELD_TYPE]);
            } else {
                $this->addType(new FHIRElementDefinitionType($data[self::FIELD_TYPE]));
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
        return "<ElementDefinition{$xmlns}></ElementDefinition>";
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies additional names by which this element might also be known.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[]
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies additional names by which this element might also be known.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $alias
     * @return static
     */
    public function addAlias($alias = null)
    {
        if (null === $alias) {
            $this->alias = [];
            return $this;
        }
        if ($alias instanceof FHIRString) {
            $this->alias[] = $alias;
            return $this;
        }
        $this->alias[] = new FHIRString($alias);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies additional names by which this element might also be known.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[] $alias
     * @return static
     */
    public function setAlias(array $alias = [])
    {
        $this->alias = [];
        if ([] === $alias) {
            return $this;
        }
        foreach($alias as $v) {
            if ($v instanceof FHIRString) {
                $this->addAlias($v);
            } else {
                $this->addAlias(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information about the base definition of the element, provided to make it
     * unnecessary for tools to trace the deviation of the element through the derived
     * and related profiles. This information is provided when the element definition
     * is not the original definition of an element - i.g. either in a constraint on
     * another type, or for elements from a super type in a snap shot.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBase
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information about the base definition of the element, provided to make it
     * unnecessary for tools to trace the deviation of the element through the derived
     * and related profiles. This information is provided when the element definition
     * is not the original definition of an element - i.g. either in a constraint on
     * another type, or for elements from a super type in a snap shot.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBase $base
     * @return static
     */
    public function setBase(FHIRElementDefinitionBase $base = null)
    {
        $this->base = $base;
        return $this;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept,
     * Quantity), or the data types (string, uri).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding
     */
    public function getBinding()
    {
        return $this->binding;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept,
     * Quantity), or the data types (string, uri).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding $binding
     * @return static
     */
    public function setBinding(FHIRElementDefinitionBinding $binding = null)
    {
        $this->binding = $binding;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that has the same meaning as the element in a particular terminology.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that has the same meaning as the element in a particular terminology.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding $code
     * @return static
     */
    public function addCode(FHIRCoding $code = null)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that has the same meaning as the element in a particular terminology.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[] $code
     * @return static
     */
    public function setCode(array $code = [])
    {
        $this->code = [];
        if ([] === $code) {
            return $this;
        }
        foreach($code as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addCode($v);
            } else {
                $this->addCode(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Explanatory notes and implementation guidance about the data element, including
     * notes about how to use the data properly, exceptions to proper use, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Explanatory notes and implementation guidance about the data element, including
     * notes about how to use the data properly, exceptions to proper use, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $comment
     * @return static
     */
    public function setComment($comment = null)
    {
        if (null === $comment) {
            $this->comment = null;
            return $this;
        }
        if ($comment instanceof FHIRMarkdown) {
            $this->comment = $comment;
            return $this;
        }
        $this->comment = new FHIRMarkdown($comment);
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
     * A reference to an invariant that may make additional statements about the
     * cardinality or value in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to an invariant that may make additional statements about the
     * cardinality or value in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $condition
     * @return static
     */
    public function addCondition($condition = null)
    {
        if (null === $condition) {
            $this->condition = [];
            return $this;
        }
        if ($condition instanceof FHIRId) {
            $this->condition[] = $condition;
            return $this;
        }
        $this->condition[] = new FHIRId($condition);
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
     * A reference to an invariant that may make additional statements about the
     * cardinality or value in the instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId[] $condition
     * @return static
     */
    public function setCondition(array $condition = [])
    {
        $this->condition = [];
        if ([] === $condition) {
            return $this;
        }
        foreach($condition as $v) {
            if ($v instanceof FHIRId) {
                $this->addCondition($v);
            } else {
                $this->addCondition(new FHIRId($v));
            }
        }
        return $this;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Formal constraints such as co-occurrence and other constraints that can be
     * computationally evaluated within the context of the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionConstraint[]
     */
    public function getConstraint()
    {
        return $this->constraint;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Formal constraints such as co-occurrence and other constraints that can be
     * computationally evaluated within the context of the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionConstraint $constraint
     * @return static
     */
    public function addConstraint(FHIRElementDefinitionConstraint $constraint = null)
    {
        $this->constraint[] = $constraint;
        return $this;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Formal constraints such as co-occurrence and other constraints that can be
     * computationally evaluated within the context of the instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionConstraint[] $constraint
     * @return static
     */
    public function setConstraint(array $constraint = [])
    {
        $this->constraint = [];
        if ([] === $constraint) {
            return $this;
        }
        foreach($constraint as $v) {
            if ($v instanceof FHIRElementDefinitionConstraint) {
                $this->addConstraint($v);
            } else {
                $this->addConstraint(new FHIRElementDefinitionConstraint($v));
            }
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the identity of an element defined elsewhere in the profile whose
     * content rules should be applied to the current element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getContentReference()
    {
        return $this->contentReference;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the identity of an element defined elsewhere in the profile whose
     * content rules should be applied to the current element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $contentReference
     * @return static
     */
    public function setContentReference($contentReference = null)
    {
        if (null === $contentReference) {
            $this->contentReference = null;
            return $this;
        }
        if ($contentReference instanceof FHIRUri) {
            $this->contentReference = $contentReference;
            return $this;
        }
        $this->contentReference = new FHIRUri($contentReference);
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddress
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddress $defaultValueAddress
     * @return static
     */
    public function setDefaultValueAddress(FHIRAddress $defaultValueAddress = null)
    {
        $this->defaultValueAddress = $defaultValueAddress;
        return $this;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getDefaultValueAge()
    {
        return $this->defaultValueAge;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRAge $defaultValueAge
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation
     */
    public function getDefaultValueAnnotation()
    {
        return $this->defaultValueAnnotation;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation $defaultValueAnnotation
     * @return static
     */
    public function setDefaultValueAnnotation(FHIRAnnotation $defaultValueAnnotation = null)
    {
        $this->defaultValueAnnotation = $defaultValueAnnotation;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment
     */
    public function getDefaultValueAttachment()
    {
        return $this->defaultValueAttachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment $defaultValueAttachment
     * @return static
     */
    public function setDefaultValueAttachment(FHIRAttachment $defaultValueAttachment = null)
    {
        $this->defaultValueAttachment = $defaultValueAttachment;
        return $this;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary
     */
    public function getDefaultValueBase64Binary()
    {
        return $this->defaultValueBase64Binary;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary $defaultValueBase64Binary
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getDefaultValueBoolean()
    {
        return $this->defaultValueBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $defaultValueBoolean
     * @return static
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
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    public function getDefaultValueCode()
    {
        return $this->defaultValueCode;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode $defaultValueCode
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getDefaultValueCodeableConcept()
    {
        return $this->defaultValueCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $defaultValueCodeableConcept
     * @return static
     */
    public function setDefaultValueCodeableConcept(FHIRCodeableConcept $defaultValueCodeableConcept = null)
    {
        $this->defaultValueCodeableConcept = $defaultValueCodeableConcept;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding
     */
    public function getDefaultValueCoding()
    {
        return $this->defaultValueCoding;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding $defaultValueCoding
     * @return static
     */
    public function setDefaultValueCoding(FHIRCoding $defaultValueCoding = null)
    {
        $this->defaultValueCoding = $defaultValueCoding;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint
     */
    public function getDefaultValueContactPoint()
    {
        return $this->defaultValueContactPoint;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint $defaultValueContactPoint
     * @return static
     */
    public function setDefaultValueContactPoint(FHIRContactPoint $defaultValueContactPoint = null)
    {
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
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRCount
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRCount $defaultValueCount
     * @return static
     */
    public function setDefaultValueCount(FHIRCount $defaultValueCount = null)
    {
        $this->defaultValueCount = $defaultValueCount;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    public function getDefaultValueDate()
    {
        return $this->defaultValueDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate $defaultValueDate
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $defaultValueDateTime
     * @return static
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
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    public function getDefaultValueDecimal()
    {
        return $this->defaultValueDecimal;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal $defaultValueDecimal
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getDefaultValueDistance()
    {
        return $this->defaultValueDistance;
    }

    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDistance $defaultValueDistance
     * @return static
     */
    public function setDefaultValueDistance(FHIRDistance $defaultValueDistance = null)
    {
        $this->defaultValueDistance = $defaultValueDistance;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getDefaultValueDuration()
    {
        return $this->defaultValueDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration $defaultValueDuration
     * @return static
     */
    public function setDefaultValueDuration(FHIRDuration $defaultValueDuration = null)
    {
        $this->defaultValueDuration = $defaultValueDuration;
        return $this;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRHumanName
     */
    public function getDefaultValueHumanName()
    {
        return $this->defaultValueHumanName;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRHumanName $defaultValueHumanName
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $defaultValueId
     * @return static
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
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    public function getDefaultValueIdentifier()
    {
        return $this->defaultValueIdentifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $defaultValueIdentifier
     * @return static
     */
    public function setDefaultValueIdentifier(FHIRIdentifier $defaultValueIdentifier = null)
    {
        $this->defaultValueIdentifier = $defaultValueIdentifier;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    public function getDefaultValueInstant()
    {
        return $this->defaultValueInstant;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant $defaultValueInstant
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getDefaultValueInteger()
    {
        return $this->defaultValueInteger;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $defaultValueInteger
     * @return static
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
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getDefaultValueMarkdown()
    {
        return $this->defaultValueMarkdown;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $defaultValueMarkdown
     * @return static
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
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content may not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta
     */
    public function getDefaultValueMeta()
    {
        return $this->defaultValueMeta;
    }

    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content may not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta $defaultValueMeta
     * @return static
     */
    public function setDefaultValueMeta(FHIRMeta $defaultValueMeta = null)
    {
        $this->defaultValueMeta = $defaultValueMeta;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getDefaultValueMoney()
    {
        return $this->defaultValueMoney;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney $defaultValueMoney
     * @return static
     */
    public function setDefaultValueMoney(FHIRMoney $defaultValueMoney = null)
    {
        $this->defaultValueMoney = $defaultValueMoney;
        return $this;
    }

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid
     */
    public function getDefaultValueOid()
    {
        return $this->defaultValueOid;
    }

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid $defaultValueOid
     * @return static
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
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    public function getDefaultValuePeriod()
    {
        return $this->defaultValuePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $defaultValuePeriod
     * @return static
     */
    public function setDefaultValuePeriod(FHIRPeriod $defaultValuePeriod = null)
    {
        $this->defaultValuePeriod = $defaultValuePeriod;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    public function getDefaultValuePositiveInt()
    {
        return $this->defaultValuePositiveInt;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt $defaultValuePositiveInt
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity $defaultValueQuantity
     * @return static
     */
    public function setDefaultValueQuantity(FHIRQuantity $defaultValueQuantity = null)
    {
        $this->defaultValueQuantity = $defaultValueQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange
     */
    public function getDefaultValueRange()
    {
        return $this->defaultValueRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange $defaultValueRange
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio
     */
    public function getDefaultValueRatio()
    {
        return $this->defaultValueRatio;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio $defaultValueRatio
     * @return static
     */
    public function setDefaultValueRatio(FHIRRatio $defaultValueRatio = null)
    {
        $this->defaultValueRatio = $defaultValueRatio;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getDefaultValueReference()
    {
        return $this->defaultValueReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $defaultValueReference
     * @return static
     */
    public function setDefaultValueReference(FHIRReference $defaultValueReference = null)
    {
        $this->defaultValueReference = $defaultValueReference;
        return $this;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSampledData
     */
    public function getDefaultValueSampledData()
    {
        return $this->defaultValueSampledData;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSampledData $defaultValueSampledData
     * @return static
     */
    public function setDefaultValueSampledData(FHIRSampledData $defaultValueSampledData = null)
    {
        $this->defaultValueSampledData = $defaultValueSampledData;
        return $this;
    }

    /**
     * A digital signature along with supporting context. The signature may be
     * electronic/cryptographic in nature, or a graphical image representing a
     * hand-written signature, or a signature process. Different signature approaches
     * have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSignature
     */
    public function getDefaultValueSignature()
    {
        return $this->defaultValueSignature;
    }

    /**
     * A digital signature along with supporting context. The signature may be
     * electronic/cryptographic in nature, or a graphical image representing a
     * hand-written signature, or a signature process. Different signature approaches
     * have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSignature $defaultValueSignature
     * @return static
     */
    public function setDefaultValueSignature(FHIRSignature $defaultValueSignature = null)
    {
        $this->defaultValueSignature = $defaultValueSignature;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getDefaultValueString()
    {
        return $this->defaultValueString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $defaultValueString
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    public function getDefaultValueTime()
    {
        return $this->defaultValueTime;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime $defaultValueTime
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming $defaultValueTiming
     * @return static
     */
    public function setDefaultValueTiming(FHIRTiming $defaultValueTiming = null)
    {
        $this->defaultValueTiming = $defaultValueTiming;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    public function getDefaultValueUnsignedInt()
    {
        return $this->defaultValueUnsignedInt;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt $defaultValueUnsignedInt
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getDefaultValueUri()
    {
        return $this->defaultValueUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $defaultValueUri
     * @return static
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
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Provides a complete explanation of the meaning of the data element for human
     * readability. For the case of elements derived from existing elements (e.g.
     * constraints), the definition SHALL be consistent with the base definition, but
     * convey the meaning of the element in the particular context of use of the
     * resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Provides a complete explanation of the meaning of the data element for human
     * readability. For the case of elements derived from existing elements (e.g.
     * constraints), the definition SHALL be consistent with the base definition, but
     * convey the meaning of the element in the particular context of use of the
     * resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $definition
     * @return static
     */
    public function setDefinition($definition = null)
    {
        if (null === $definition) {
            $this->definition = null;
            return $this;
        }
        if ($definition instanceof FHIRMarkdown) {
            $this->definition = $definition;
            return $this;
        }
        $this->definition = new FHIRMarkdown($definition);
        return $this;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A sample value for this element demonstrating the type of information that would
     * typically be found in the element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionExample[]
     */
    public function getExample()
    {
        return $this->example;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A sample value for this element demonstrating the type of information that would
     * typically be found in the element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionExample $example
     * @return static
     */
    public function addExample(FHIRElementDefinitionExample $example = null)
    {
        $this->example[] = $example;
        return $this;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A sample value for this element demonstrating the type of information that would
     * typically be found in the element.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionExample[] $example
     * @return static
     */
    public function setExample(array $example = [])
    {
        $this->example = [];
        if ([] === $example) {
            return $this;
        }
        foreach($example as $v) {
            if ($v instanceof FHIRElementDefinitionExample) {
                $this->addExample($v);
            } else {
                $this->addExample(new FHIRElementDefinitionExample($v));
            }
        }
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
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddress
     */
    public function getFixedAddress()
    {
        return $this->fixedAddress;
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
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddress $fixedAddress
     * @return static
     */
    public function setFixedAddress(FHIRAddress $fixedAddress = null)
    {
        $this->fixedAddress = $fixedAddress;
        return $this;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getFixedAge()
    {
        return $this->fixedAge;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRAge $fixedAge
     * @return static
     */
    public function setFixedAge(FHIRAge $fixedAge = null)
    {
        $this->fixedAge = $fixedAge;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation
     */
    public function getFixedAnnotation()
    {
        return $this->fixedAnnotation;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation $fixedAnnotation
     * @return static
     */
    public function setFixedAnnotation(FHIRAnnotation $fixedAnnotation = null)
    {
        $this->fixedAnnotation = $fixedAnnotation;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment
     */
    public function getFixedAttachment()
    {
        return $this->fixedAttachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment $fixedAttachment
     * @return static
     */
    public function setFixedAttachment(FHIRAttachment $fixedAttachment = null)
    {
        $this->fixedAttachment = $fixedAttachment;
        return $this;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary
     */
    public function getFixedBase64Binary()
    {
        return $this->fixedBase64Binary;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary $fixedBase64Binary
     * @return static
     */
    public function setFixedBase64Binary($fixedBase64Binary = null)
    {
        if (null === $fixedBase64Binary) {
            $this->fixedBase64Binary = null;
            return $this;
        }
        if ($fixedBase64Binary instanceof FHIRBase64Binary) {
            $this->fixedBase64Binary = $fixedBase64Binary;
            return $this;
        }
        $this->fixedBase64Binary = new FHIRBase64Binary($fixedBase64Binary);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getFixedBoolean()
    {
        return $this->fixedBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $fixedBoolean
     * @return static
     */
    public function setFixedBoolean($fixedBoolean = null)
    {
        if (null === $fixedBoolean) {
            $this->fixedBoolean = null;
            return $this;
        }
        if ($fixedBoolean instanceof FHIRBoolean) {
            $this->fixedBoolean = $fixedBoolean;
            return $this;
        }
        $this->fixedBoolean = new FHIRBoolean($fixedBoolean);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    public function getFixedCode()
    {
        return $this->fixedCode;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode $fixedCode
     * @return static
     */
    public function setFixedCode($fixedCode = null)
    {
        if (null === $fixedCode) {
            $this->fixedCode = null;
            return $this;
        }
        if ($fixedCode instanceof FHIRCode) {
            $this->fixedCode = $fixedCode;
            return $this;
        }
        $this->fixedCode = new FHIRCode($fixedCode);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getFixedCodeableConcept()
    {
        return $this->fixedCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $fixedCodeableConcept
     * @return static
     */
    public function setFixedCodeableConcept(FHIRCodeableConcept $fixedCodeableConcept = null)
    {
        $this->fixedCodeableConcept = $fixedCodeableConcept;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding
     */
    public function getFixedCoding()
    {
        return $this->fixedCoding;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding $fixedCoding
     * @return static
     */
    public function setFixedCoding(FHIRCoding $fixedCoding = null)
    {
        $this->fixedCoding = $fixedCoding;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint
     */
    public function getFixedContactPoint()
    {
        return $this->fixedContactPoint;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint $fixedContactPoint
     * @return static
     */
    public function setFixedContactPoint(FHIRContactPoint $fixedContactPoint = null)
    {
        $this->fixedContactPoint = $fixedContactPoint;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRCount
     */
    public function getFixedCount()
    {
        return $this->fixedCount;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRCount $fixedCount
     * @return static
     */
    public function setFixedCount(FHIRCount $fixedCount = null)
    {
        $this->fixedCount = $fixedCount;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    public function getFixedDate()
    {
        return $this->fixedDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate $fixedDate
     * @return static
     */
    public function setFixedDate($fixedDate = null)
    {
        if (null === $fixedDate) {
            $this->fixedDate = null;
            return $this;
        }
        if ($fixedDate instanceof FHIRDate) {
            $this->fixedDate = $fixedDate;
            return $this;
        }
        $this->fixedDate = new FHIRDate($fixedDate);
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
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    public function getFixedDateTime()
    {
        return $this->fixedDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $fixedDateTime
     * @return static
     */
    public function setFixedDateTime($fixedDateTime = null)
    {
        if (null === $fixedDateTime) {
            $this->fixedDateTime = null;
            return $this;
        }
        if ($fixedDateTime instanceof FHIRDateTime) {
            $this->fixedDateTime = $fixedDateTime;
            return $this;
        }
        $this->fixedDateTime = new FHIRDateTime($fixedDateTime);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    public function getFixedDecimal()
    {
        return $this->fixedDecimal;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal $fixedDecimal
     * @return static
     */
    public function setFixedDecimal($fixedDecimal = null)
    {
        if (null === $fixedDecimal) {
            $this->fixedDecimal = null;
            return $this;
        }
        if ($fixedDecimal instanceof FHIRDecimal) {
            $this->fixedDecimal = $fixedDecimal;
            return $this;
        }
        $this->fixedDecimal = new FHIRDecimal($fixedDecimal);
        return $this;
    }

    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getFixedDistance()
    {
        return $this->fixedDistance;
    }

    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDistance $fixedDistance
     * @return static
     */
    public function setFixedDistance(FHIRDistance $fixedDistance = null)
    {
        $this->fixedDistance = $fixedDistance;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getFixedDuration()
    {
        return $this->fixedDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration $fixedDuration
     * @return static
     */
    public function setFixedDuration(FHIRDuration $fixedDuration = null)
    {
        $this->fixedDuration = $fixedDuration;
        return $this;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRHumanName
     */
    public function getFixedHumanName()
    {
        return $this->fixedHumanName;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRHumanName $fixedHumanName
     * @return static
     */
    public function setFixedHumanName(FHIRHumanName $fixedHumanName = null)
    {
        $this->fixedHumanName = $fixedHumanName;
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
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    public function getFixedId()
    {
        return $this->fixedId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $fixedId
     * @return static
     */
    public function setFixedId($fixedId = null)
    {
        if (null === $fixedId) {
            $this->fixedId = null;
            return $this;
        }
        if ($fixedId instanceof FHIRId) {
            $this->fixedId = $fixedId;
            return $this;
        }
        $this->fixedId = new FHIRId($fixedId);
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    public function getFixedIdentifier()
    {
        return $this->fixedIdentifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $fixedIdentifier
     * @return static
     */
    public function setFixedIdentifier(FHIRIdentifier $fixedIdentifier = null)
    {
        $this->fixedIdentifier = $fixedIdentifier;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    public function getFixedInstant()
    {
        return $this->fixedInstant;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant $fixedInstant
     * @return static
     */
    public function setFixedInstant($fixedInstant = null)
    {
        if (null === $fixedInstant) {
            $this->fixedInstant = null;
            return $this;
        }
        if ($fixedInstant instanceof FHIRInstant) {
            $this->fixedInstant = $fixedInstant;
            return $this;
        }
        $this->fixedInstant = new FHIRInstant($fixedInstant);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getFixedInteger()
    {
        return $this->fixedInteger;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $fixedInteger
     * @return static
     */
    public function setFixedInteger($fixedInteger = null)
    {
        if (null === $fixedInteger) {
            $this->fixedInteger = null;
            return $this;
        }
        if ($fixedInteger instanceof FHIRInteger) {
            $this->fixedInteger = $fixedInteger;
            return $this;
        }
        $this->fixedInteger = new FHIRInteger($fixedInteger);
        return $this;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getFixedMarkdown()
    {
        return $this->fixedMarkdown;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $fixedMarkdown
     * @return static
     */
    public function setFixedMarkdown($fixedMarkdown = null)
    {
        if (null === $fixedMarkdown) {
            $this->fixedMarkdown = null;
            return $this;
        }
        if ($fixedMarkdown instanceof FHIRMarkdown) {
            $this->fixedMarkdown = $fixedMarkdown;
            return $this;
        }
        $this->fixedMarkdown = new FHIRMarkdown($fixedMarkdown);
        return $this;
    }

    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content may not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta
     */
    public function getFixedMeta()
    {
        return $this->fixedMeta;
    }

    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content may not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta $fixedMeta
     * @return static
     */
    public function setFixedMeta(FHIRMeta $fixedMeta = null)
    {
        $this->fixedMeta = $fixedMeta;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getFixedMoney()
    {
        return $this->fixedMoney;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney $fixedMoney
     * @return static
     */
    public function setFixedMoney(FHIRMoney $fixedMoney = null)
    {
        $this->fixedMoney = $fixedMoney;
        return $this;
    }

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid
     */
    public function getFixedOid()
    {
        return $this->fixedOid;
    }

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid $fixedOid
     * @return static
     */
    public function setFixedOid($fixedOid = null)
    {
        if (null === $fixedOid) {
            $this->fixedOid = null;
            return $this;
        }
        if ($fixedOid instanceof FHIROid) {
            $this->fixedOid = $fixedOid;
            return $this;
        }
        $this->fixedOid = new FHIROid($fixedOid);
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    public function getFixedPeriod()
    {
        return $this->fixedPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $fixedPeriod
     * @return static
     */
    public function setFixedPeriod(FHIRPeriod $fixedPeriod = null)
    {
        $this->fixedPeriod = $fixedPeriod;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    public function getFixedPositiveInt()
    {
        return $this->fixedPositiveInt;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt $fixedPositiveInt
     * @return static
     */
    public function setFixedPositiveInt($fixedPositiveInt = null)
    {
        if (null === $fixedPositiveInt) {
            $this->fixedPositiveInt = null;
            return $this;
        }
        if ($fixedPositiveInt instanceof FHIRPositiveInt) {
            $this->fixedPositiveInt = $fixedPositiveInt;
            return $this;
        }
        $this->fixedPositiveInt = new FHIRPositiveInt($fixedPositiveInt);
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    public function getFixedQuantity()
    {
        return $this->fixedQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity $fixedQuantity
     * @return static
     */
    public function setFixedQuantity(FHIRQuantity $fixedQuantity = null)
    {
        $this->fixedQuantity = $fixedQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange
     */
    public function getFixedRange()
    {
        return $this->fixedRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange $fixedRange
     * @return static
     */
    public function setFixedRange(FHIRRange $fixedRange = null)
    {
        $this->fixedRange = $fixedRange;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio
     */
    public function getFixedRatio()
    {
        return $this->fixedRatio;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio $fixedRatio
     * @return static
     */
    public function setFixedRatio(FHIRRatio $fixedRatio = null)
    {
        $this->fixedRatio = $fixedRatio;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getFixedReference()
    {
        return $this->fixedReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $fixedReference
     * @return static
     */
    public function setFixedReference(FHIRReference $fixedReference = null)
    {
        $this->fixedReference = $fixedReference;
        return $this;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSampledData
     */
    public function getFixedSampledData()
    {
        return $this->fixedSampledData;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSampledData $fixedSampledData
     * @return static
     */
    public function setFixedSampledData(FHIRSampledData $fixedSampledData = null)
    {
        $this->fixedSampledData = $fixedSampledData;
        return $this;
    }

    /**
     * A digital signature along with supporting context. The signature may be
     * electronic/cryptographic in nature, or a graphical image representing a
     * hand-written signature, or a signature process. Different signature approaches
     * have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSignature
     */
    public function getFixedSignature()
    {
        return $this->fixedSignature;
    }

    /**
     * A digital signature along with supporting context. The signature may be
     * electronic/cryptographic in nature, or a graphical image representing a
     * hand-written signature, or a signature process. Different signature approaches
     * have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSignature $fixedSignature
     * @return static
     */
    public function setFixedSignature(FHIRSignature $fixedSignature = null)
    {
        $this->fixedSignature = $fixedSignature;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getFixedString()
    {
        return $this->fixedString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $fixedString
     * @return static
     */
    public function setFixedString($fixedString = null)
    {
        if (null === $fixedString) {
            $this->fixedString = null;
            return $this;
        }
        if ($fixedString instanceof FHIRString) {
            $this->fixedString = $fixedString;
            return $this;
        }
        $this->fixedString = new FHIRString($fixedString);
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    public function getFixedTime()
    {
        return $this->fixedTime;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime $fixedTime
     * @return static
     */
    public function setFixedTime($fixedTime = null)
    {
        if (null === $fixedTime) {
            $this->fixedTime = null;
            return $this;
        }
        if ($fixedTime instanceof FHIRTime) {
            $this->fixedTime = $fixedTime;
            return $this;
        }
        $this->fixedTime = new FHIRTime($fixedTime);
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
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming
     */
    public function getFixedTiming()
    {
        return $this->fixedTiming;
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
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming $fixedTiming
     * @return static
     */
    public function setFixedTiming(FHIRTiming $fixedTiming = null)
    {
        $this->fixedTiming = $fixedTiming;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    public function getFixedUnsignedInt()
    {
        return $this->fixedUnsignedInt;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt $fixedUnsignedInt
     * @return static
     */
    public function setFixedUnsignedInt($fixedUnsignedInt = null)
    {
        if (null === $fixedUnsignedInt) {
            $this->fixedUnsignedInt = null;
            return $this;
        }
        if ($fixedUnsignedInt instanceof FHIRUnsignedInt) {
            $this->fixedUnsignedInt = $fixedUnsignedInt;
            return $this;
        }
        $this->fixedUnsignedInt = new FHIRUnsignedInt($fixedUnsignedInt);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getFixedUri()
    {
        return $this->fixedUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $fixedUri
     * @return static
     */
    public function setFixedUri($fixedUri = null)
    {
        if (null === $fixedUri) {
            $this->fixedUri = null;
            return $this;
        }
        if ($fixedUri instanceof FHIRUri) {
            $this->fixedUri = $fixedUri;
            return $this;
        }
        $this->fixedUri = new FHIRUri($fixedUri);
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getIsModifier()
    {
        return $this->isModifier;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $isModifier
     * @return static
     */
    public function setIsModifier($isModifier = null)
    {
        if (null === $isModifier) {
            $this->isModifier = null;
            return $this;
        }
        if ($isModifier instanceof FHIRBoolean) {
            $this->isModifier = $isModifier;
            return $this;
        }
        $this->isModifier = new FHIRBoolean($isModifier);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the element should be included if a client requests a search with the
     * parameter _summary=true.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getIsSummary()
    {
        return $this->isSummary;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the element should be included if a client requests a search with the
     * parameter _summary=true.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $isSummary
     * @return static
     */
    public function setIsSummary($isSummary = null)
    {
        if (null === $isSummary) {
            $this->isSummary = null;
            return $this;
        }
        if ($isSummary instanceof FHIRBoolean) {
            $this->isSummary = $isSummary;
            return $this;
        }
        $this->isSummary = new FHIRBoolean($isSummary);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A single preferred label which is the text to display beside the element
     * indicating its meaning or to use to prompt for the element in a user display or
     * form.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A single preferred label which is the text to display beside the element
     * indicating its meaning or to use to prompt for the element in a user display or
     * form.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $label
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
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies a concept from an external specification that roughly corresponds to
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping[]
     */
    public function getMapping()
    {
        return $this->mapping;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies a concept from an external specification that roughly corresponds to
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping $mapping
     * @return static
     */
    public function addMapping(FHIRElementDefinitionMapping $mapping = null)
    {
        $this->mapping[] = $mapping;
        return $this;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies a concept from an external specification that roughly corresponds to
     * this element.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping[] $mapping
     * @return static
     */
    public function setMapping(array $mapping = [])
    {
        $this->mapping = [];
        if ([] === $mapping) {
            return $this;
        }
        foreach($mapping as $v) {
            if ($v instanceof FHIRElementDefinitionMapping) {
                $this->addMapping($v);
            } else {
                $this->addMapping(new FHIRElementDefinitionMapping($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $max
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the maximum length in characters that is permitted to be present in
     * conformant instances and which is expected to be supported by conformant
     * consumers that support the element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getMaxLength()
    {
        return $this->maxLength;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the maximum length in characters that is permitted to be present in
     * conformant instances and which is expected to be supported by conformant
     * consumers that support the element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $maxLength
     * @return static
     */
    public function setMaxLength($maxLength = null)
    {
        if (null === $maxLength) {
            $this->maxLength = null;
            return $this;
        }
        if ($maxLength instanceof FHIRInteger) {
            $this->maxLength = $maxLength;
            return $this;
        }
        $this->maxLength = new FHIRInteger($maxLength);
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    public function getMaxValueDate()
    {
        return $this->maxValueDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate $maxValueDate
     * @return static
     */
    public function setMaxValueDate($maxValueDate = null)
    {
        if (null === $maxValueDate) {
            $this->maxValueDate = null;
            return $this;
        }
        if ($maxValueDate instanceof FHIRDate) {
            $this->maxValueDate = $maxValueDate;
            return $this;
        }
        $this->maxValueDate = new FHIRDate($maxValueDate);
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
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    public function getMaxValueDateTime()
    {
        return $this->maxValueDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $maxValueDateTime
     * @return static
     */
    public function setMaxValueDateTime($maxValueDateTime = null)
    {
        if (null === $maxValueDateTime) {
            $this->maxValueDateTime = null;
            return $this;
        }
        if ($maxValueDateTime instanceof FHIRDateTime) {
            $this->maxValueDateTime = $maxValueDateTime;
            return $this;
        }
        $this->maxValueDateTime = new FHIRDateTime($maxValueDateTime);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    public function getMaxValueDecimal()
    {
        return $this->maxValueDecimal;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal $maxValueDecimal
     * @return static
     */
    public function setMaxValueDecimal($maxValueDecimal = null)
    {
        if (null === $maxValueDecimal) {
            $this->maxValueDecimal = null;
            return $this;
        }
        if ($maxValueDecimal instanceof FHIRDecimal) {
            $this->maxValueDecimal = $maxValueDecimal;
            return $this;
        }
        $this->maxValueDecimal = new FHIRDecimal($maxValueDecimal);
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    public function getMaxValueInstant()
    {
        return $this->maxValueInstant;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant $maxValueInstant
     * @return static
     */
    public function setMaxValueInstant($maxValueInstant = null)
    {
        if (null === $maxValueInstant) {
            $this->maxValueInstant = null;
            return $this;
        }
        if ($maxValueInstant instanceof FHIRInstant) {
            $this->maxValueInstant = $maxValueInstant;
            return $this;
        }
        $this->maxValueInstant = new FHIRInstant($maxValueInstant);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getMaxValueInteger()
    {
        return $this->maxValueInteger;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $maxValueInteger
     * @return static
     */
    public function setMaxValueInteger($maxValueInteger = null)
    {
        if (null === $maxValueInteger) {
            $this->maxValueInteger = null;
            return $this;
        }
        if ($maxValueInteger instanceof FHIRInteger) {
            $this->maxValueInteger = $maxValueInteger;
            return $this;
        }
        $this->maxValueInteger = new FHIRInteger($maxValueInteger);
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    public function getMaxValuePositiveInt()
    {
        return $this->maxValuePositiveInt;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt $maxValuePositiveInt
     * @return static
     */
    public function setMaxValuePositiveInt($maxValuePositiveInt = null)
    {
        if (null === $maxValuePositiveInt) {
            $this->maxValuePositiveInt = null;
            return $this;
        }
        if ($maxValuePositiveInt instanceof FHIRPositiveInt) {
            $this->maxValuePositiveInt = $maxValuePositiveInt;
            return $this;
        }
        $this->maxValuePositiveInt = new FHIRPositiveInt($maxValuePositiveInt);
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    public function getMaxValueQuantity()
    {
        return $this->maxValueQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity $maxValueQuantity
     * @return static
     */
    public function setMaxValueQuantity(FHIRQuantity $maxValueQuantity = null)
    {
        $this->maxValueQuantity = $maxValueQuantity;
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    public function getMaxValueTime()
    {
        return $this->maxValueTime;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime $maxValueTime
     * @return static
     */
    public function setMaxValueTime($maxValueTime = null)
    {
        if (null === $maxValueTime) {
            $this->maxValueTime = null;
            return $this;
        }
        if ($maxValueTime instanceof FHIRTime) {
            $this->maxValueTime = $maxValueTime;
            return $this;
        }
        $this->maxValueTime = new FHIRTime($maxValueTime);
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    public function getMaxValueUnsignedInt()
    {
        return $this->maxValueUnsignedInt;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt $maxValueUnsignedInt
     * @return static
     */
    public function setMaxValueUnsignedInt($maxValueUnsignedInt = null)
    {
        if (null === $maxValueUnsignedInt) {
            $this->maxValueUnsignedInt = null;
            return $this;
        }
        if ($maxValueUnsignedInt instanceof FHIRUnsignedInt) {
            $this->maxValueUnsignedInt = $maxValueUnsignedInt;
            return $this;
        }
        $this->maxValueUnsignedInt = new FHIRUnsignedInt($maxValueUnsignedInt);
        return $this;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The Implicit meaning that is to be understood when this element is missing (e.g.
     * 'when this element is missing, the period is ongoing'.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getMeaningWhenMissing()
    {
        return $this->meaningWhenMissing;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The Implicit meaning that is to be understood when this element is missing (e.g.
     * 'when this element is missing, the period is ongoing'.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $meaningWhenMissing
     * @return static
     */
    public function setMeaningWhenMissing($meaningWhenMissing = null)
    {
        if (null === $meaningWhenMissing) {
            $this->meaningWhenMissing = null;
            return $this;
        }
        if ($meaningWhenMissing instanceof FHIRMarkdown) {
            $this->meaningWhenMissing = $meaningWhenMissing;
            return $this;
        }
        $this->meaningWhenMissing = new FHIRMarkdown($meaningWhenMissing);
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The minimum number of times this element SHALL appear in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The minimum number of times this element SHALL appear in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt $min
     * @return static
     */
    public function setMin($min = null)
    {
        if (null === $min) {
            $this->min = null;
            return $this;
        }
        if ($min instanceof FHIRUnsignedInt) {
            $this->min = $min;
            return $this;
        }
        $this->min = new FHIRUnsignedInt($min);
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    public function getMinValueDate()
    {
        return $this->minValueDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate $minValueDate
     * @return static
     */
    public function setMinValueDate($minValueDate = null)
    {
        if (null === $minValueDate) {
            $this->minValueDate = null;
            return $this;
        }
        if ($minValueDate instanceof FHIRDate) {
            $this->minValueDate = $minValueDate;
            return $this;
        }
        $this->minValueDate = new FHIRDate($minValueDate);
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
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    public function getMinValueDateTime()
    {
        return $this->minValueDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $minValueDateTime
     * @return static
     */
    public function setMinValueDateTime($minValueDateTime = null)
    {
        if (null === $minValueDateTime) {
            $this->minValueDateTime = null;
            return $this;
        }
        if ($minValueDateTime instanceof FHIRDateTime) {
            $this->minValueDateTime = $minValueDateTime;
            return $this;
        }
        $this->minValueDateTime = new FHIRDateTime($minValueDateTime);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    public function getMinValueDecimal()
    {
        return $this->minValueDecimal;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal $minValueDecimal
     * @return static
     */
    public function setMinValueDecimal($minValueDecimal = null)
    {
        if (null === $minValueDecimal) {
            $this->minValueDecimal = null;
            return $this;
        }
        if ($minValueDecimal instanceof FHIRDecimal) {
            $this->minValueDecimal = $minValueDecimal;
            return $this;
        }
        $this->minValueDecimal = new FHIRDecimal($minValueDecimal);
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    public function getMinValueInstant()
    {
        return $this->minValueInstant;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant $minValueInstant
     * @return static
     */
    public function setMinValueInstant($minValueInstant = null)
    {
        if (null === $minValueInstant) {
            $this->minValueInstant = null;
            return $this;
        }
        if ($minValueInstant instanceof FHIRInstant) {
            $this->minValueInstant = $minValueInstant;
            return $this;
        }
        $this->minValueInstant = new FHIRInstant($minValueInstant);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getMinValueInteger()
    {
        return $this->minValueInteger;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $minValueInteger
     * @return static
     */
    public function setMinValueInteger($minValueInteger = null)
    {
        if (null === $minValueInteger) {
            $this->minValueInteger = null;
            return $this;
        }
        if ($minValueInteger instanceof FHIRInteger) {
            $this->minValueInteger = $minValueInteger;
            return $this;
        }
        $this->minValueInteger = new FHIRInteger($minValueInteger);
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    public function getMinValuePositiveInt()
    {
        return $this->minValuePositiveInt;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt $minValuePositiveInt
     * @return static
     */
    public function setMinValuePositiveInt($minValuePositiveInt = null)
    {
        if (null === $minValuePositiveInt) {
            $this->minValuePositiveInt = null;
            return $this;
        }
        if ($minValuePositiveInt instanceof FHIRPositiveInt) {
            $this->minValuePositiveInt = $minValuePositiveInt;
            return $this;
        }
        $this->minValuePositiveInt = new FHIRPositiveInt($minValuePositiveInt);
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    public function getMinValueQuantity()
    {
        return $this->minValueQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity $minValueQuantity
     * @return static
     */
    public function setMinValueQuantity(FHIRQuantity $minValueQuantity = null)
    {
        $this->minValueQuantity = $minValueQuantity;
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    public function getMinValueTime()
    {
        return $this->minValueTime;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime $minValueTime
     * @return static
     */
    public function setMinValueTime($minValueTime = null)
    {
        if (null === $minValueTime) {
            $this->minValueTime = null;
            return $this;
        }
        if ($minValueTime instanceof FHIRTime) {
            $this->minValueTime = $minValueTime;
            return $this;
        }
        $this->minValueTime = new FHIRTime($minValueTime);
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    public function getMinValueUnsignedInt()
    {
        return $this->minValueUnsignedInt;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt $minValueUnsignedInt
     * @return static
     */
    public function setMinValueUnsignedInt($minValueUnsignedInt = null)
    {
        if (null === $minValueUnsignedInt) {
            $this->minValueUnsignedInt = null;
            return $this;
        }
        if ($minValueUnsignedInt instanceof FHIRUnsignedInt) {
            $this->minValueUnsignedInt = $minValueUnsignedInt;
            return $this;
        }
        $this->minValueUnsignedInt = new FHIRUnsignedInt($minValueUnsignedInt);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, implementations that produce or consume resources SHALL provide
     * "support" for the element in some meaningful way. If false, the element may be
     * ignored and not supported.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getMustSupport()
    {
        return $this->mustSupport;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, implementations that produce or consume resources SHALL provide
     * "support" for the element in some meaningful way. If false, the element may be
     * ignored and not supported.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $mustSupport
     * @return static
     */
    public function setMustSupport($mustSupport = null)
    {
        if (null === $mustSupport) {
            $this->mustSupport = null;
            return $this;
        }
        if ($mustSupport instanceof FHIRBoolean) {
            $this->mustSupport = $mustSupport;
            return $this;
        }
        $this->mustSupport = new FHIRBoolean($mustSupport);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the order of the repeating element has meaning and
     * describes what that meaning is. If absent, it means that the order of the
     * element has no meaning.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getOrderMeaning()
    {
        return $this->orderMeaning;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the order of the repeating element has meaning and
     * describes what that meaning is. If absent, it means that the order of the
     * element has no meaning.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $orderMeaning
     * @return static
     */
    public function setOrderMeaning($orderMeaning = null)
    {
        if (null === $orderMeaning) {
            $this->orderMeaning = null;
            return $this;
        }
        if ($orderMeaning instanceof FHIRString) {
            $this->orderMeaning = $orderMeaning;
            return $this;
        }
        $this->orderMeaning = new FHIRString($orderMeaning);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The path identifies the element and is expressed as a "."-separated list of
     * ancestor elements, beginning with the name of the resource or extension.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The path identifies the element and is expressed as a "."-separated list of
     * ancestor elements, beginning with the name of the resource or extension.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $path
     * @return static
     */
    public function setPath($path = null)
    {
        if (null === $path) {
            $this->path = null;
            return $this;
        }
        if ($path instanceof FHIRString) {
            $this->path = $path;
            return $this;
        }
        $this->path = new FHIRString($path);
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
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddress
     */
    public function getPatternAddress()
    {
        return $this->patternAddress;
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
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddress $patternAddress
     * @return static
     */
    public function setPatternAddress(FHIRAddress $patternAddress = null)
    {
        $this->patternAddress = $patternAddress;
        return $this;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getPatternAge()
    {
        return $this->patternAge;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRAge $patternAge
     * @return static
     */
    public function setPatternAge(FHIRAge $patternAge = null)
    {
        $this->patternAge = $patternAge;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation
     */
    public function getPatternAnnotation()
    {
        return $this->patternAnnotation;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation $patternAnnotation
     * @return static
     */
    public function setPatternAnnotation(FHIRAnnotation $patternAnnotation = null)
    {
        $this->patternAnnotation = $patternAnnotation;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment
     */
    public function getPatternAttachment()
    {
        return $this->patternAttachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment $patternAttachment
     * @return static
     */
    public function setPatternAttachment(FHIRAttachment $patternAttachment = null)
    {
        $this->patternAttachment = $patternAttachment;
        return $this;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary
     */
    public function getPatternBase64Binary()
    {
        return $this->patternBase64Binary;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary $patternBase64Binary
     * @return static
     */
    public function setPatternBase64Binary($patternBase64Binary = null)
    {
        if (null === $patternBase64Binary) {
            $this->patternBase64Binary = null;
            return $this;
        }
        if ($patternBase64Binary instanceof FHIRBase64Binary) {
            $this->patternBase64Binary = $patternBase64Binary;
            return $this;
        }
        $this->patternBase64Binary = new FHIRBase64Binary($patternBase64Binary);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getPatternBoolean()
    {
        return $this->patternBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $patternBoolean
     * @return static
     */
    public function setPatternBoolean($patternBoolean = null)
    {
        if (null === $patternBoolean) {
            $this->patternBoolean = null;
            return $this;
        }
        if ($patternBoolean instanceof FHIRBoolean) {
            $this->patternBoolean = $patternBoolean;
            return $this;
        }
        $this->patternBoolean = new FHIRBoolean($patternBoolean);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    public function getPatternCode()
    {
        return $this->patternCode;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode $patternCode
     * @return static
     */
    public function setPatternCode($patternCode = null)
    {
        if (null === $patternCode) {
            $this->patternCode = null;
            return $this;
        }
        if ($patternCode instanceof FHIRCode) {
            $this->patternCode = $patternCode;
            return $this;
        }
        $this->patternCode = new FHIRCode($patternCode);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getPatternCodeableConcept()
    {
        return $this->patternCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $patternCodeableConcept
     * @return static
     */
    public function setPatternCodeableConcept(FHIRCodeableConcept $patternCodeableConcept = null)
    {
        $this->patternCodeableConcept = $patternCodeableConcept;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding
     */
    public function getPatternCoding()
    {
        return $this->patternCoding;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding $patternCoding
     * @return static
     */
    public function setPatternCoding(FHIRCoding $patternCoding = null)
    {
        $this->patternCoding = $patternCoding;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint
     */
    public function getPatternContactPoint()
    {
        return $this->patternContactPoint;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint $patternContactPoint
     * @return static
     */
    public function setPatternContactPoint(FHIRContactPoint $patternContactPoint = null)
    {
        $this->patternContactPoint = $patternContactPoint;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRCount
     */
    public function getPatternCount()
    {
        return $this->patternCount;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRCount $patternCount
     * @return static
     */
    public function setPatternCount(FHIRCount $patternCount = null)
    {
        $this->patternCount = $patternCount;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    public function getPatternDate()
    {
        return $this->patternDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate $patternDate
     * @return static
     */
    public function setPatternDate($patternDate = null)
    {
        if (null === $patternDate) {
            $this->patternDate = null;
            return $this;
        }
        if ($patternDate instanceof FHIRDate) {
            $this->patternDate = $patternDate;
            return $this;
        }
        $this->patternDate = new FHIRDate($patternDate);
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
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    public function getPatternDateTime()
    {
        return $this->patternDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $patternDateTime
     * @return static
     */
    public function setPatternDateTime($patternDateTime = null)
    {
        if (null === $patternDateTime) {
            $this->patternDateTime = null;
            return $this;
        }
        if ($patternDateTime instanceof FHIRDateTime) {
            $this->patternDateTime = $patternDateTime;
            return $this;
        }
        $this->patternDateTime = new FHIRDateTime($patternDateTime);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    public function getPatternDecimal()
    {
        return $this->patternDecimal;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal $patternDecimal
     * @return static
     */
    public function setPatternDecimal($patternDecimal = null)
    {
        if (null === $patternDecimal) {
            $this->patternDecimal = null;
            return $this;
        }
        if ($patternDecimal instanceof FHIRDecimal) {
            $this->patternDecimal = $patternDecimal;
            return $this;
        }
        $this->patternDecimal = new FHIRDecimal($patternDecimal);
        return $this;
    }

    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getPatternDistance()
    {
        return $this->patternDistance;
    }

    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDistance $patternDistance
     * @return static
     */
    public function setPatternDistance(FHIRDistance $patternDistance = null)
    {
        $this->patternDistance = $patternDistance;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getPatternDuration()
    {
        return $this->patternDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration $patternDuration
     * @return static
     */
    public function setPatternDuration(FHIRDuration $patternDuration = null)
    {
        $this->patternDuration = $patternDuration;
        return $this;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRHumanName
     */
    public function getPatternHumanName()
    {
        return $this->patternHumanName;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRHumanName $patternHumanName
     * @return static
     */
    public function setPatternHumanName(FHIRHumanName $patternHumanName = null)
    {
        $this->patternHumanName = $patternHumanName;
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
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    public function getPatternId()
    {
        return $this->patternId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $patternId
     * @return static
     */
    public function setPatternId($patternId = null)
    {
        if (null === $patternId) {
            $this->patternId = null;
            return $this;
        }
        if ($patternId instanceof FHIRId) {
            $this->patternId = $patternId;
            return $this;
        }
        $this->patternId = new FHIRId($patternId);
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    public function getPatternIdentifier()
    {
        return $this->patternIdentifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $patternIdentifier
     * @return static
     */
    public function setPatternIdentifier(FHIRIdentifier $patternIdentifier = null)
    {
        $this->patternIdentifier = $patternIdentifier;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    public function getPatternInstant()
    {
        return $this->patternInstant;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant $patternInstant
     * @return static
     */
    public function setPatternInstant($patternInstant = null)
    {
        if (null === $patternInstant) {
            $this->patternInstant = null;
            return $this;
        }
        if ($patternInstant instanceof FHIRInstant) {
            $this->patternInstant = $patternInstant;
            return $this;
        }
        $this->patternInstant = new FHIRInstant($patternInstant);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getPatternInteger()
    {
        return $this->patternInteger;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $patternInteger
     * @return static
     */
    public function setPatternInteger($patternInteger = null)
    {
        if (null === $patternInteger) {
            $this->patternInteger = null;
            return $this;
        }
        if ($patternInteger instanceof FHIRInteger) {
            $this->patternInteger = $patternInteger;
            return $this;
        }
        $this->patternInteger = new FHIRInteger($patternInteger);
        return $this;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getPatternMarkdown()
    {
        return $this->patternMarkdown;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $patternMarkdown
     * @return static
     */
    public function setPatternMarkdown($patternMarkdown = null)
    {
        if (null === $patternMarkdown) {
            $this->patternMarkdown = null;
            return $this;
        }
        if ($patternMarkdown instanceof FHIRMarkdown) {
            $this->patternMarkdown = $patternMarkdown;
            return $this;
        }
        $this->patternMarkdown = new FHIRMarkdown($patternMarkdown);
        return $this;
    }

    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content may not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta
     */
    public function getPatternMeta()
    {
        return $this->patternMeta;
    }

    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content may not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta $patternMeta
     * @return static
     */
    public function setPatternMeta(FHIRMeta $patternMeta = null)
    {
        $this->patternMeta = $patternMeta;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getPatternMoney()
    {
        return $this->patternMoney;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney $patternMoney
     * @return static
     */
    public function setPatternMoney(FHIRMoney $patternMoney = null)
    {
        $this->patternMoney = $patternMoney;
        return $this;
    }

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid
     */
    public function getPatternOid()
    {
        return $this->patternOid;
    }

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid $patternOid
     * @return static
     */
    public function setPatternOid($patternOid = null)
    {
        if (null === $patternOid) {
            $this->patternOid = null;
            return $this;
        }
        if ($patternOid instanceof FHIROid) {
            $this->patternOid = $patternOid;
            return $this;
        }
        $this->patternOid = new FHIROid($patternOid);
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    public function getPatternPeriod()
    {
        return $this->patternPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $patternPeriod
     * @return static
     */
    public function setPatternPeriod(FHIRPeriod $patternPeriod = null)
    {
        $this->patternPeriod = $patternPeriod;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    public function getPatternPositiveInt()
    {
        return $this->patternPositiveInt;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt $patternPositiveInt
     * @return static
     */
    public function setPatternPositiveInt($patternPositiveInt = null)
    {
        if (null === $patternPositiveInt) {
            $this->patternPositiveInt = null;
            return $this;
        }
        if ($patternPositiveInt instanceof FHIRPositiveInt) {
            $this->patternPositiveInt = $patternPositiveInt;
            return $this;
        }
        $this->patternPositiveInt = new FHIRPositiveInt($patternPositiveInt);
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    public function getPatternQuantity()
    {
        return $this->patternQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity $patternQuantity
     * @return static
     */
    public function setPatternQuantity(FHIRQuantity $patternQuantity = null)
    {
        $this->patternQuantity = $patternQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange
     */
    public function getPatternRange()
    {
        return $this->patternRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange $patternRange
     * @return static
     */
    public function setPatternRange(FHIRRange $patternRange = null)
    {
        $this->patternRange = $patternRange;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio
     */
    public function getPatternRatio()
    {
        return $this->patternRatio;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio $patternRatio
     * @return static
     */
    public function setPatternRatio(FHIRRatio $patternRatio = null)
    {
        $this->patternRatio = $patternRatio;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getPatternReference()
    {
        return $this->patternReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $patternReference
     * @return static
     */
    public function setPatternReference(FHIRReference $patternReference = null)
    {
        $this->patternReference = $patternReference;
        return $this;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSampledData
     */
    public function getPatternSampledData()
    {
        return $this->patternSampledData;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSampledData $patternSampledData
     * @return static
     */
    public function setPatternSampledData(FHIRSampledData $patternSampledData = null)
    {
        $this->patternSampledData = $patternSampledData;
        return $this;
    }

    /**
     * A digital signature along with supporting context. The signature may be
     * electronic/cryptographic in nature, or a graphical image representing a
     * hand-written signature, or a signature process. Different signature approaches
     * have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSignature
     */
    public function getPatternSignature()
    {
        return $this->patternSignature;
    }

    /**
     * A digital signature along with supporting context. The signature may be
     * electronic/cryptographic in nature, or a graphical image representing a
     * hand-written signature, or a signature process. Different signature approaches
     * have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSignature $patternSignature
     * @return static
     */
    public function setPatternSignature(FHIRSignature $patternSignature = null)
    {
        $this->patternSignature = $patternSignature;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getPatternString()
    {
        return $this->patternString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $patternString
     * @return static
     */
    public function setPatternString($patternString = null)
    {
        if (null === $patternString) {
            $this->patternString = null;
            return $this;
        }
        if ($patternString instanceof FHIRString) {
            $this->patternString = $patternString;
            return $this;
        }
        $this->patternString = new FHIRString($patternString);
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    public function getPatternTime()
    {
        return $this->patternTime;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime $patternTime
     * @return static
     */
    public function setPatternTime($patternTime = null)
    {
        if (null === $patternTime) {
            $this->patternTime = null;
            return $this;
        }
        if ($patternTime instanceof FHIRTime) {
            $this->patternTime = $patternTime;
            return $this;
        }
        $this->patternTime = new FHIRTime($patternTime);
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
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming
     */
    public function getPatternTiming()
    {
        return $this->patternTiming;
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
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming $patternTiming
     * @return static
     */
    public function setPatternTiming(FHIRTiming $patternTiming = null)
    {
        $this->patternTiming = $patternTiming;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    public function getPatternUnsignedInt()
    {
        return $this->patternUnsignedInt;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt $patternUnsignedInt
     * @return static
     */
    public function setPatternUnsignedInt($patternUnsignedInt = null)
    {
        if (null === $patternUnsignedInt) {
            $this->patternUnsignedInt = null;
            return $this;
        }
        if ($patternUnsignedInt instanceof FHIRUnsignedInt) {
            $this->patternUnsignedInt = $patternUnsignedInt;
            return $this;
        }
        $this->patternUnsignedInt = new FHIRUnsignedInt($patternUnsignedInt);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getPatternUri()
    {
        return $this->patternUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $patternUri
     * @return static
     */
    public function setPatternUri($patternUri = null)
    {
        if (null === $patternUri) {
            $this->patternUri = null;
            return $this;
        }
        if ($patternUri instanceof FHIRUri) {
            $this->patternUri = $patternUri;
            return $this;
        }
        $this->patternUri = new FHIRUri($patternUri);
        return $this;
    }

    /**
     * How a property is represented when serialized.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Codes that define how this element is represented in instances, when the
     * deviation varies from the normal case.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPropertyRepresentation[]
     */
    public function getRepresentation()
    {
        return $this->representation;
    }

    /**
     * How a property is represented when serialized.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Codes that define how this element is represented in instances, when the
     * deviation varies from the normal case.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPropertyRepresentation $representation
     * @return static
     */
    public function addRepresentation(FHIRPropertyRepresentation $representation = null)
    {
        $this->representation[] = $representation;
        return $this;
    }

    /**
     * How a property is represented when serialized.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Codes that define how this element is represented in instances, when the
     * deviation varies from the normal case.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPropertyRepresentation[] $representation
     * @return static
     */
    public function setRepresentation(array $representation = [])
    {
        $this->representation = [];
        if ([] === $representation) {
            return $this;
        }
        foreach($representation as $v) {
            if ($v instanceof FHIRPropertyRepresentation) {
                $this->addRepresentation($v);
            } else {
                $this->addRepresentation(new FHIRPropertyRepresentation($v));
            }
        }
        return $this;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * This element is for traceability of why the element was created and why the
     * constraints exist as they do. This may be used to point to source materials or
     * specifications that drove the structure of this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * This element is for traceability of why the element was created and why the
     * constraints exist as they do. This may be used to point to source materials or
     * specifications that drove the structure of this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $requirements
     * @return static
     */
    public function setRequirements($requirements = null)
    {
        if (null === $requirements) {
            $this->requirements = null;
            return $this;
        }
        if ($requirements instanceof FHIRMarkdown) {
            $this->requirements = $requirements;
            return $this;
        }
        $this->requirements = new FHIRMarkdown($requirements);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A concise description of what this element means (e.g. for use in autogenerated
     * summaries).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getShort()
    {
        return $this->short;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A concise description of what this element means (e.g. for use in autogenerated
     * summaries).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $short
     * @return static
     */
    public function setShort($short = null)
    {
        if (null === $short) {
            $this->short = null;
            return $this;
        }
        if ($short instanceof FHIRString) {
            $this->short = $short;
            return $this;
        }
        $this->short = new FHIRString($short);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of this element definition slice, when slicing is working. The name
     * must be a token with no dots or spaces. This is a unique name referring to a
     * specific set of constraints applied to this element, used to provide a name to
     * different slices of the same element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getSliceName()
    {
        return $this->sliceName;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of this element definition slice, when slicing is working. The name
     * must be a token with no dots or spaces. This is a unique name referring to a
     * specific set of constraints applied to this element, used to provide a name to
     * different slices of the same element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $sliceName
     * @return static
     */
    public function setSliceName($sliceName = null)
    {
        if (null === $sliceName) {
            $this->sliceName = null;
            return $this;
        }
        if ($sliceName instanceof FHIRString) {
            $this->sliceName = $sliceName;
            return $this;
        }
        $this->sliceName = new FHIRString($sliceName);
        return $this;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates that the element is sliced into a set of alternative definitions (i.e.
     * in a structure definition, there are multiple different constraints on a single
     * element in the base resource). Slicing can be used in any resource that has
     * cardinality ..* on the base resource, or any resource with a choice of types.
     * The set of slices is any elements that come after this in the element sequence
     * that have the same path, until a shorter path occurs (the shorter path
     * terminates the set).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing
     */
    public function getSlicing()
    {
        return $this->slicing;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates that the element is sliced into a set of alternative definitions (i.e.
     * in a structure definition, there are multiple different constraints on a single
     * element in the base resource). Slicing can be used in any resource that has
     * cardinality ..* on the base resource, or any resource with a choice of types.
     * The set of slices is any elements that come after this in the element sequence
     * that have the same path, until a shorter path occurs (the shorter path
     * terminates the set).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing $slicing
     * @return static
     */
    public function setSlicing(FHIRElementDefinitionSlicing $slicing = null)
    {
        $this->slicing = $slicing;
        return $this;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The data type or resource that the value of this element is permitted to be.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The data type or resource that the value of this element is permitted to be.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType $type
     * @return static
     */
    public function addType(FHIRElementDefinitionType $type = null)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The data type or resource that the value of this element is permitted to be.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType[] $type
     * @return static
     */
    public function setType(array $type = [])
    {
        $this->type = [];
        if ([] === $type) {
            return $this;
        }
        foreach($type as $v) {
            if ($v instanceof FHIRElementDefinitionType) {
                $this->addType($v);
            } else {
                $this->addType(new FHIRElementDefinitionType($v));
            }
        }
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
        if ([] !== ($vs = $this->getAlias())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ALIAS, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getBase())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BASE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBinding())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BINDING] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getComment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMMENT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCondition())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONDITION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getConstraint())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONSTRAINT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getContentReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTENT_REFERENCE] = $fieldErrs;
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
        if (null !== ($v = $this->getDefaultValueCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_CODE] = $fieldErrs;
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
        if (null !== ($v = $this->getDefaultValueId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_IDENTIFIER] = $fieldErrs;
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
        if (null !== ($v = $this->getDefaultValueMeta())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_META] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueMoney())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_MONEY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueOid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_OID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValuePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValuePositiveInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] = $fieldErrs;
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
        if (null !== ($v = $this->getDefaultValueTiming())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_TIMING] = $fieldErrs;
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
        if (null !== ($v = $this->getDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getExample())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_EXAMPLE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getFixedAddress())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_ADDRESS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedAge())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_AGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedAnnotation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_ANNOTATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedAttachment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_ATTACHMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedBase64Binary())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_BASE_64BINARY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_BOOLEAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedCoding())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_CODING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedContactPoint())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_CONTACT_POINT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedCount())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_COUNT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedDecimal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_DECIMAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedDistance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_DISTANCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedHumanName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_HUMAN_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedInstant())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_INSTANT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedInteger())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_INTEGER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedMarkdown())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_MARKDOWN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedMeta())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_META] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedMoney())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_MONEY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedOid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_OID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedPositiveInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_POSITIVE_INT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedRatio())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_RATIO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedSampledData())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_SAMPLED_DATA] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedSignature())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_SIGNATURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedTiming())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_TIMING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedUnsignedInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_UNSIGNED_INT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedUri())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_URI] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIsModifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IS_MODIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIsSummary())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IS_SUMMARY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLabel())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LABEL] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getMapping())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MAPPING, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getMax())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxLength())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_LENGTH] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxValueDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_VALUE_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxValueDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_VALUE_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxValueDecimal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_VALUE_DECIMAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxValueInstant())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_VALUE_INSTANT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxValueInteger())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_VALUE_INTEGER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxValuePositiveInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_VALUE_POSITIVE_INT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxValueQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_VALUE_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxValueTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_VALUE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxValueUnsignedInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_VALUE_UNSIGNED_INT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMeaningWhenMissing())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEANING_WHEN_MISSING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMin())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MIN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMinValueDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MIN_VALUE_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMinValueDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MIN_VALUE_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMinValueDecimal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MIN_VALUE_DECIMAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMinValueInstant())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MIN_VALUE_INSTANT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMinValueInteger())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MIN_VALUE_INTEGER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMinValuePositiveInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MIN_VALUE_POSITIVE_INT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMinValueQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MIN_VALUE_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMinValueTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MIN_VALUE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMinValueUnsignedInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MIN_VALUE_UNSIGNED_INT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMustSupport())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MUST_SUPPORT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrderMeaning())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORDER_MEANING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPath())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATH] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternAddress())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_ADDRESS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternAge())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_AGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternAnnotation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_ANNOTATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternAttachment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_ATTACHMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternBase64Binary())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_BASE_64BINARY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_BOOLEAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternCoding())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_CODING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternContactPoint())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_CONTACT_POINT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternCount())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_COUNT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternDecimal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_DECIMAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternDistance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_DISTANCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternHumanName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_HUMAN_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternInstant())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_INSTANT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternInteger())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_INTEGER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternMarkdown())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_MARKDOWN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternMeta())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_META] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternMoney())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_MONEY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternOid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_OID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternPositiveInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_POSITIVE_INT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternRatio())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_RATIO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternSampledData())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_SAMPLED_DATA] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternSignature())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_SIGNATURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternTiming())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_TIMING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternUnsignedInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_UNSIGNED_INT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternUri())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_URI] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRepresentation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REPRESENTATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getRequirements())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUIREMENTS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getShort())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SHORT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSliceName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SLICE_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSlicing())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SLICING] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ALIAS])) {
            $v = $this->getAlias();
            foreach($validationRules[self::FIELD_ALIAS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_ALIAS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALIAS])) {
                        $errs[self::FIELD_ALIAS] = [];
                    }
                    $errs[self::FIELD_ALIAS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BASE])) {
            $v = $this->getBase();
            foreach($validationRules[self::FIELD_BASE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_BASE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASE])) {
                        $errs[self::FIELD_BASE] = [];
                    }
                    $errs[self::FIELD_BASE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BINDING])) {
            $v = $this->getBinding();
            foreach($validationRules[self::FIELD_BINDING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_BINDING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BINDING])) {
                        $errs[self::FIELD_BINDING] = [];
                    }
                    $errs[self::FIELD_BINDING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMMENT])) {
            $v = $this->getComment();
            foreach($validationRules[self::FIELD_COMMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_COMMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMMENT])) {
                        $errs[self::FIELD_COMMENT] = [];
                    }
                    $errs[self::FIELD_COMMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONDITION])) {
            $v = $this->getCondition();
            foreach($validationRules[self::FIELD_CONDITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_CONDITION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_CONSTRAINT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONSTRAINT])) {
                        $errs[self::FIELD_CONSTRAINT] = [];
                    }
                    $errs[self::FIELD_CONSTRAINT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTENT_REFERENCE])) {
            $v = $this->getContentReference();
            foreach($validationRules[self::FIELD_CONTENT_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_CONTENT_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTENT_REFERENCE])) {
                        $errs[self::FIELD_CONTENT_REFERENCE] = [];
                    }
                    $errs[self::FIELD_CONTENT_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_ADDRESS])) {
            $v = $this->getDefaultValueAddress();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_ADDRESS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_ADDRESS, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_AGE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_ANNOTATION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_ATTACHMENT])) {
                        $errs[self::FIELD_DEFAULT_VALUE_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_ATTACHMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_BASE_64BINARY])) {
            $v = $this->getDefaultValueBase64Binary();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_BASE_64BINARY, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_BOOLEAN])) {
                        $errs[self::FIELD_DEFAULT_VALUE_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_CODE])) {
            $v = $this->getDefaultValueCode();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_CODE])) {
                        $errs[self::FIELD_DEFAULT_VALUE_CODE] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT])) {
            $v = $this->getDefaultValueCodeableConcept();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_CODING, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_CONTACT_POINT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_COUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_COUNT])) {
                        $errs[self::FIELD_DEFAULT_VALUE_COUNT] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_COUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_DATE])) {
            $v = $this->getDefaultValueDate();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_DATE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_DATE_TIME, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_DECIMAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_DECIMAL])) {
                        $errs[self::FIELD_DEFAULT_VALUE_DECIMAL] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_DECIMAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_DISTANCE])) {
            $v = $this->getDefaultValueDistance();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_DISTANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_DISTANCE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_DURATION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_HUMAN_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_HUMAN_NAME])) {
                        $errs[self::FIELD_DEFAULT_VALUE_HUMAN_NAME] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_HUMAN_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_ID])) {
            $v = $this->getDefaultValueId();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_ID])) {
                        $errs[self::FIELD_DEFAULT_VALUE_ID] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_IDENTIFIER])) {
            $v = $this->getDefaultValueIdentifier();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_IDENTIFIER])) {
                        $errs[self::FIELD_DEFAULT_VALUE_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_INSTANT])) {
            $v = $this->getDefaultValueInstant();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_INSTANT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_INSTANT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_INTEGER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_MARKDOWN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_MARKDOWN])) {
                        $errs[self::FIELD_DEFAULT_VALUE_MARKDOWN] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_MARKDOWN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_META])) {
            $v = $this->getDefaultValueMeta();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_META])) {
                        $errs[self::FIELD_DEFAULT_VALUE_META] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_MONEY])) {
            $v = $this->getDefaultValueMoney();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_MONEY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_MONEY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_MONEY])) {
                        $errs[self::FIELD_DEFAULT_VALUE_MONEY] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_MONEY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_OID])) {
            $v = $this->getDefaultValueOid();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_OID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_OID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_OID])) {
                        $errs[self::FIELD_DEFAULT_VALUE_OID] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_OID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_PERIOD])) {
            $v = $this->getDefaultValuePeriod();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_PERIOD])) {
                        $errs[self::FIELD_DEFAULT_VALUE_PERIOD] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_POSITIVE_INT])) {
            $v = $this->getDefaultValuePositiveInt();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_POSITIVE_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_POSITIVE_INT])) {
                        $errs[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_POSITIVE_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_QUANTITY])) {
            $v = $this->getDefaultValueQuantity();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_QUANTITY, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_RANGE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_RATIO, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_REFERENCE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_SAMPLED_DATA, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_SIGNATURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_SIGNATURE])) {
                        $errs[self::FIELD_DEFAULT_VALUE_SIGNATURE] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_SIGNATURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_STRING])) {
            $v = $this->getDefaultValueString();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_STRING, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_TIME])) {
                        $errs[self::FIELD_DEFAULT_VALUE_TIME] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_TIMING])) {
            $v = $this->getDefaultValueTiming();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_TIMING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_TIMING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_TIMING])) {
                        $errs[self::FIELD_DEFAULT_VALUE_TIMING] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_TIMING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT])) {
            $v = $this->getDefaultValueUnsignedInt();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_UNSIGNED_INT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_URI])) {
                        $errs[self::FIELD_DEFAULT_VALUE_URI] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION])) {
            $v = $this->getDefinition();
            foreach($validationRules[self::FIELD_DEFINITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION])) {
                        $errs[self::FIELD_DEFINITION] = [];
                    }
                    $errs[self::FIELD_DEFINITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE])) {
            $v = $this->getExample();
            foreach($validationRules[self::FIELD_EXAMPLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_EXAMPLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE])) {
                        $errs[self::FIELD_EXAMPLE] = [];
                    }
                    $errs[self::FIELD_EXAMPLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_ADDRESS])) {
            $v = $this->getFixedAddress();
            foreach($validationRules[self::FIELD_FIXED_ADDRESS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_ADDRESS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_ADDRESS])) {
                        $errs[self::FIELD_FIXED_ADDRESS] = [];
                    }
                    $errs[self::FIELD_FIXED_ADDRESS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_AGE])) {
            $v = $this->getFixedAge();
            foreach($validationRules[self::FIELD_FIXED_AGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_AGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_AGE])) {
                        $errs[self::FIELD_FIXED_AGE] = [];
                    }
                    $errs[self::FIELD_FIXED_AGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_ANNOTATION])) {
            $v = $this->getFixedAnnotation();
            foreach($validationRules[self::FIELD_FIXED_ANNOTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_ANNOTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_ANNOTATION])) {
                        $errs[self::FIELD_FIXED_ANNOTATION] = [];
                    }
                    $errs[self::FIELD_FIXED_ANNOTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_ATTACHMENT])) {
            $v = $this->getFixedAttachment();
            foreach($validationRules[self::FIELD_FIXED_ATTACHMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_ATTACHMENT])) {
                        $errs[self::FIELD_FIXED_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_FIXED_ATTACHMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_BASE_64BINARY])) {
            $v = $this->getFixedBase64Binary();
            foreach($validationRules[self::FIELD_FIXED_BASE_64BINARY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_BASE_64BINARY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_BASE_64BINARY])) {
                        $errs[self::FIELD_FIXED_BASE_64BINARY] = [];
                    }
                    $errs[self::FIELD_FIXED_BASE_64BINARY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_BOOLEAN])) {
            $v = $this->getFixedBoolean();
            foreach($validationRules[self::FIELD_FIXED_BOOLEAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_BOOLEAN])) {
                        $errs[self::FIELD_FIXED_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_FIXED_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_CODE])) {
            $v = $this->getFixedCode();
            foreach($validationRules[self::FIELD_FIXED_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_CODE])) {
                        $errs[self::FIELD_FIXED_CODE] = [];
                    }
                    $errs[self::FIELD_FIXED_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_CODEABLE_CONCEPT])) {
            $v = $this->getFixedCodeableConcept();
            foreach($validationRules[self::FIELD_FIXED_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_FIXED_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_FIXED_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_CODING])) {
            $v = $this->getFixedCoding();
            foreach($validationRules[self::FIELD_FIXED_CODING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_CODING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_CODING])) {
                        $errs[self::FIELD_FIXED_CODING] = [];
                    }
                    $errs[self::FIELD_FIXED_CODING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_CONTACT_POINT])) {
            $v = $this->getFixedContactPoint();
            foreach($validationRules[self::FIELD_FIXED_CONTACT_POINT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_CONTACT_POINT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_CONTACT_POINT])) {
                        $errs[self::FIELD_FIXED_CONTACT_POINT] = [];
                    }
                    $errs[self::FIELD_FIXED_CONTACT_POINT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_COUNT])) {
            $v = $this->getFixedCount();
            foreach($validationRules[self::FIELD_FIXED_COUNT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_COUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_COUNT])) {
                        $errs[self::FIELD_FIXED_COUNT] = [];
                    }
                    $errs[self::FIELD_FIXED_COUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_DATE])) {
            $v = $this->getFixedDate();
            foreach($validationRules[self::FIELD_FIXED_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_DATE])) {
                        $errs[self::FIELD_FIXED_DATE] = [];
                    }
                    $errs[self::FIELD_FIXED_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_DATE_TIME])) {
            $v = $this->getFixedDateTime();
            foreach($validationRules[self::FIELD_FIXED_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_DATE_TIME])) {
                        $errs[self::FIELD_FIXED_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_FIXED_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_DECIMAL])) {
            $v = $this->getFixedDecimal();
            foreach($validationRules[self::FIELD_FIXED_DECIMAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_DECIMAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_DECIMAL])) {
                        $errs[self::FIELD_FIXED_DECIMAL] = [];
                    }
                    $errs[self::FIELD_FIXED_DECIMAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_DISTANCE])) {
            $v = $this->getFixedDistance();
            foreach($validationRules[self::FIELD_FIXED_DISTANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_DISTANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_DISTANCE])) {
                        $errs[self::FIELD_FIXED_DISTANCE] = [];
                    }
                    $errs[self::FIELD_FIXED_DISTANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_DURATION])) {
            $v = $this->getFixedDuration();
            foreach($validationRules[self::FIELD_FIXED_DURATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_DURATION])) {
                        $errs[self::FIELD_FIXED_DURATION] = [];
                    }
                    $errs[self::FIELD_FIXED_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_HUMAN_NAME])) {
            $v = $this->getFixedHumanName();
            foreach($validationRules[self::FIELD_FIXED_HUMAN_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_HUMAN_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_HUMAN_NAME])) {
                        $errs[self::FIELD_FIXED_HUMAN_NAME] = [];
                    }
                    $errs[self::FIELD_FIXED_HUMAN_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_ID])) {
            $v = $this->getFixedId();
            foreach($validationRules[self::FIELD_FIXED_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_ID])) {
                        $errs[self::FIELD_FIXED_ID] = [];
                    }
                    $errs[self::FIELD_FIXED_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_IDENTIFIER])) {
            $v = $this->getFixedIdentifier();
            foreach($validationRules[self::FIELD_FIXED_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_IDENTIFIER])) {
                        $errs[self::FIELD_FIXED_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_FIXED_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_INSTANT])) {
            $v = $this->getFixedInstant();
            foreach($validationRules[self::FIELD_FIXED_INSTANT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_INSTANT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_INSTANT])) {
                        $errs[self::FIELD_FIXED_INSTANT] = [];
                    }
                    $errs[self::FIELD_FIXED_INSTANT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_INTEGER])) {
            $v = $this->getFixedInteger();
            foreach($validationRules[self::FIELD_FIXED_INTEGER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_INTEGER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_INTEGER])) {
                        $errs[self::FIELD_FIXED_INTEGER] = [];
                    }
                    $errs[self::FIELD_FIXED_INTEGER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_MARKDOWN])) {
            $v = $this->getFixedMarkdown();
            foreach($validationRules[self::FIELD_FIXED_MARKDOWN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_MARKDOWN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_MARKDOWN])) {
                        $errs[self::FIELD_FIXED_MARKDOWN] = [];
                    }
                    $errs[self::FIELD_FIXED_MARKDOWN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_META])) {
            $v = $this->getFixedMeta();
            foreach($validationRules[self::FIELD_FIXED_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_META])) {
                        $errs[self::FIELD_FIXED_META] = [];
                    }
                    $errs[self::FIELD_FIXED_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_MONEY])) {
            $v = $this->getFixedMoney();
            foreach($validationRules[self::FIELD_FIXED_MONEY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_MONEY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_MONEY])) {
                        $errs[self::FIELD_FIXED_MONEY] = [];
                    }
                    $errs[self::FIELD_FIXED_MONEY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_OID])) {
            $v = $this->getFixedOid();
            foreach($validationRules[self::FIELD_FIXED_OID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_OID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_OID])) {
                        $errs[self::FIELD_FIXED_OID] = [];
                    }
                    $errs[self::FIELD_FIXED_OID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_PERIOD])) {
            $v = $this->getFixedPeriod();
            foreach($validationRules[self::FIELD_FIXED_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_PERIOD])) {
                        $errs[self::FIELD_FIXED_PERIOD] = [];
                    }
                    $errs[self::FIELD_FIXED_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_POSITIVE_INT])) {
            $v = $this->getFixedPositiveInt();
            foreach($validationRules[self::FIELD_FIXED_POSITIVE_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_POSITIVE_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_POSITIVE_INT])) {
                        $errs[self::FIELD_FIXED_POSITIVE_INT] = [];
                    }
                    $errs[self::FIELD_FIXED_POSITIVE_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_QUANTITY])) {
            $v = $this->getFixedQuantity();
            foreach($validationRules[self::FIELD_FIXED_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_QUANTITY])) {
                        $errs[self::FIELD_FIXED_QUANTITY] = [];
                    }
                    $errs[self::FIELD_FIXED_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_RANGE])) {
            $v = $this->getFixedRange();
            foreach($validationRules[self::FIELD_FIXED_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_RANGE])) {
                        $errs[self::FIELD_FIXED_RANGE] = [];
                    }
                    $errs[self::FIELD_FIXED_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_RATIO])) {
            $v = $this->getFixedRatio();
            foreach($validationRules[self::FIELD_FIXED_RATIO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_RATIO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_RATIO])) {
                        $errs[self::FIELD_FIXED_RATIO] = [];
                    }
                    $errs[self::FIELD_FIXED_RATIO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_REFERENCE])) {
            $v = $this->getFixedReference();
            foreach($validationRules[self::FIELD_FIXED_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_REFERENCE])) {
                        $errs[self::FIELD_FIXED_REFERENCE] = [];
                    }
                    $errs[self::FIELD_FIXED_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_SAMPLED_DATA])) {
            $v = $this->getFixedSampledData();
            foreach($validationRules[self::FIELD_FIXED_SAMPLED_DATA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_SAMPLED_DATA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_SAMPLED_DATA])) {
                        $errs[self::FIELD_FIXED_SAMPLED_DATA] = [];
                    }
                    $errs[self::FIELD_FIXED_SAMPLED_DATA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_SIGNATURE])) {
            $v = $this->getFixedSignature();
            foreach($validationRules[self::FIELD_FIXED_SIGNATURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_SIGNATURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_SIGNATURE])) {
                        $errs[self::FIELD_FIXED_SIGNATURE] = [];
                    }
                    $errs[self::FIELD_FIXED_SIGNATURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_STRING])) {
            $v = $this->getFixedString();
            foreach($validationRules[self::FIELD_FIXED_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_STRING])) {
                        $errs[self::FIELD_FIXED_STRING] = [];
                    }
                    $errs[self::FIELD_FIXED_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_TIME])) {
            $v = $this->getFixedTime();
            foreach($validationRules[self::FIELD_FIXED_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_TIME])) {
                        $errs[self::FIELD_FIXED_TIME] = [];
                    }
                    $errs[self::FIELD_FIXED_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_TIMING])) {
            $v = $this->getFixedTiming();
            foreach($validationRules[self::FIELD_FIXED_TIMING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_TIMING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_TIMING])) {
                        $errs[self::FIELD_FIXED_TIMING] = [];
                    }
                    $errs[self::FIELD_FIXED_TIMING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_UNSIGNED_INT])) {
            $v = $this->getFixedUnsignedInt();
            foreach($validationRules[self::FIELD_FIXED_UNSIGNED_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_UNSIGNED_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_UNSIGNED_INT])) {
                        $errs[self::FIELD_FIXED_UNSIGNED_INT] = [];
                    }
                    $errs[self::FIELD_FIXED_UNSIGNED_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_URI])) {
            $v = $this->getFixedUri();
            foreach($validationRules[self::FIELD_FIXED_URI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_URI])) {
                        $errs[self::FIELD_FIXED_URI] = [];
                    }
                    $errs[self::FIELD_FIXED_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IS_MODIFIER])) {
            $v = $this->getIsModifier();
            foreach($validationRules[self::FIELD_IS_MODIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_IS_MODIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IS_MODIFIER])) {
                        $errs[self::FIELD_IS_MODIFIER] = [];
                    }
                    $errs[self::FIELD_IS_MODIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IS_SUMMARY])) {
            $v = $this->getIsSummary();
            foreach($validationRules[self::FIELD_IS_SUMMARY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_IS_SUMMARY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IS_SUMMARY])) {
                        $errs[self::FIELD_IS_SUMMARY] = [];
                    }
                    $errs[self::FIELD_IS_SUMMARY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LABEL])) {
            $v = $this->getLabel();
            foreach($validationRules[self::FIELD_LABEL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_LABEL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LABEL])) {
                        $errs[self::FIELD_LABEL] = [];
                    }
                    $errs[self::FIELD_LABEL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAPPING])) {
            $v = $this->getMapping();
            foreach($validationRules[self::FIELD_MAPPING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MAPPING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAPPING])) {
                        $errs[self::FIELD_MAPPING] = [];
                    }
                    $errs[self::FIELD_MAPPING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX])) {
            $v = $this->getMax();
            foreach($validationRules[self::FIELD_MAX] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MAX, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX])) {
                        $errs[self::FIELD_MAX] = [];
                    }
                    $errs[self::FIELD_MAX][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_LENGTH])) {
            $v = $this->getMaxLength();
            foreach($validationRules[self::FIELD_MAX_LENGTH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MAX_LENGTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_LENGTH])) {
                        $errs[self::FIELD_MAX_LENGTH] = [];
                    }
                    $errs[self::FIELD_MAX_LENGTH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_VALUE_DATE])) {
            $v = $this->getMaxValueDate();
            foreach($validationRules[self::FIELD_MAX_VALUE_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MAX_VALUE_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_VALUE_DATE])) {
                        $errs[self::FIELD_MAX_VALUE_DATE] = [];
                    }
                    $errs[self::FIELD_MAX_VALUE_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_VALUE_DATE_TIME])) {
            $v = $this->getMaxValueDateTime();
            foreach($validationRules[self::FIELD_MAX_VALUE_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MAX_VALUE_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_VALUE_DATE_TIME])) {
                        $errs[self::FIELD_MAX_VALUE_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_MAX_VALUE_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_VALUE_DECIMAL])) {
            $v = $this->getMaxValueDecimal();
            foreach($validationRules[self::FIELD_MAX_VALUE_DECIMAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MAX_VALUE_DECIMAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_VALUE_DECIMAL])) {
                        $errs[self::FIELD_MAX_VALUE_DECIMAL] = [];
                    }
                    $errs[self::FIELD_MAX_VALUE_DECIMAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_VALUE_INSTANT])) {
            $v = $this->getMaxValueInstant();
            foreach($validationRules[self::FIELD_MAX_VALUE_INSTANT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MAX_VALUE_INSTANT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_VALUE_INSTANT])) {
                        $errs[self::FIELD_MAX_VALUE_INSTANT] = [];
                    }
                    $errs[self::FIELD_MAX_VALUE_INSTANT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_VALUE_INTEGER])) {
            $v = $this->getMaxValueInteger();
            foreach($validationRules[self::FIELD_MAX_VALUE_INTEGER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MAX_VALUE_INTEGER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_VALUE_INTEGER])) {
                        $errs[self::FIELD_MAX_VALUE_INTEGER] = [];
                    }
                    $errs[self::FIELD_MAX_VALUE_INTEGER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_VALUE_POSITIVE_INT])) {
            $v = $this->getMaxValuePositiveInt();
            foreach($validationRules[self::FIELD_MAX_VALUE_POSITIVE_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MAX_VALUE_POSITIVE_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_VALUE_POSITIVE_INT])) {
                        $errs[self::FIELD_MAX_VALUE_POSITIVE_INT] = [];
                    }
                    $errs[self::FIELD_MAX_VALUE_POSITIVE_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_VALUE_QUANTITY])) {
            $v = $this->getMaxValueQuantity();
            foreach($validationRules[self::FIELD_MAX_VALUE_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MAX_VALUE_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_VALUE_QUANTITY])) {
                        $errs[self::FIELD_MAX_VALUE_QUANTITY] = [];
                    }
                    $errs[self::FIELD_MAX_VALUE_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_VALUE_TIME])) {
            $v = $this->getMaxValueTime();
            foreach($validationRules[self::FIELD_MAX_VALUE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MAX_VALUE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_VALUE_TIME])) {
                        $errs[self::FIELD_MAX_VALUE_TIME] = [];
                    }
                    $errs[self::FIELD_MAX_VALUE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_VALUE_UNSIGNED_INT])) {
            $v = $this->getMaxValueUnsignedInt();
            foreach($validationRules[self::FIELD_MAX_VALUE_UNSIGNED_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MAX_VALUE_UNSIGNED_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_VALUE_UNSIGNED_INT])) {
                        $errs[self::FIELD_MAX_VALUE_UNSIGNED_INT] = [];
                    }
                    $errs[self::FIELD_MAX_VALUE_UNSIGNED_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEANING_WHEN_MISSING])) {
            $v = $this->getMeaningWhenMissing();
            foreach($validationRules[self::FIELD_MEANING_WHEN_MISSING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MEANING_WHEN_MISSING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEANING_WHEN_MISSING])) {
                        $errs[self::FIELD_MEANING_WHEN_MISSING] = [];
                    }
                    $errs[self::FIELD_MEANING_WHEN_MISSING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN])) {
            $v = $this->getMin();
            foreach($validationRules[self::FIELD_MIN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MIN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN])) {
                        $errs[self::FIELD_MIN] = [];
                    }
                    $errs[self::FIELD_MIN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN_VALUE_DATE])) {
            $v = $this->getMinValueDate();
            foreach($validationRules[self::FIELD_MIN_VALUE_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MIN_VALUE_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN_VALUE_DATE])) {
                        $errs[self::FIELD_MIN_VALUE_DATE] = [];
                    }
                    $errs[self::FIELD_MIN_VALUE_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN_VALUE_DATE_TIME])) {
            $v = $this->getMinValueDateTime();
            foreach($validationRules[self::FIELD_MIN_VALUE_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MIN_VALUE_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN_VALUE_DATE_TIME])) {
                        $errs[self::FIELD_MIN_VALUE_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_MIN_VALUE_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN_VALUE_DECIMAL])) {
            $v = $this->getMinValueDecimal();
            foreach($validationRules[self::FIELD_MIN_VALUE_DECIMAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MIN_VALUE_DECIMAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN_VALUE_DECIMAL])) {
                        $errs[self::FIELD_MIN_VALUE_DECIMAL] = [];
                    }
                    $errs[self::FIELD_MIN_VALUE_DECIMAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN_VALUE_INSTANT])) {
            $v = $this->getMinValueInstant();
            foreach($validationRules[self::FIELD_MIN_VALUE_INSTANT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MIN_VALUE_INSTANT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN_VALUE_INSTANT])) {
                        $errs[self::FIELD_MIN_VALUE_INSTANT] = [];
                    }
                    $errs[self::FIELD_MIN_VALUE_INSTANT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN_VALUE_INTEGER])) {
            $v = $this->getMinValueInteger();
            foreach($validationRules[self::FIELD_MIN_VALUE_INTEGER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MIN_VALUE_INTEGER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN_VALUE_INTEGER])) {
                        $errs[self::FIELD_MIN_VALUE_INTEGER] = [];
                    }
                    $errs[self::FIELD_MIN_VALUE_INTEGER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN_VALUE_POSITIVE_INT])) {
            $v = $this->getMinValuePositiveInt();
            foreach($validationRules[self::FIELD_MIN_VALUE_POSITIVE_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MIN_VALUE_POSITIVE_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN_VALUE_POSITIVE_INT])) {
                        $errs[self::FIELD_MIN_VALUE_POSITIVE_INT] = [];
                    }
                    $errs[self::FIELD_MIN_VALUE_POSITIVE_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN_VALUE_QUANTITY])) {
            $v = $this->getMinValueQuantity();
            foreach($validationRules[self::FIELD_MIN_VALUE_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MIN_VALUE_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN_VALUE_QUANTITY])) {
                        $errs[self::FIELD_MIN_VALUE_QUANTITY] = [];
                    }
                    $errs[self::FIELD_MIN_VALUE_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN_VALUE_TIME])) {
            $v = $this->getMinValueTime();
            foreach($validationRules[self::FIELD_MIN_VALUE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MIN_VALUE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN_VALUE_TIME])) {
                        $errs[self::FIELD_MIN_VALUE_TIME] = [];
                    }
                    $errs[self::FIELD_MIN_VALUE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN_VALUE_UNSIGNED_INT])) {
            $v = $this->getMinValueUnsignedInt();
            foreach($validationRules[self::FIELD_MIN_VALUE_UNSIGNED_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MIN_VALUE_UNSIGNED_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN_VALUE_UNSIGNED_INT])) {
                        $errs[self::FIELD_MIN_VALUE_UNSIGNED_INT] = [];
                    }
                    $errs[self::FIELD_MIN_VALUE_UNSIGNED_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MUST_SUPPORT])) {
            $v = $this->getMustSupport();
            foreach($validationRules[self::FIELD_MUST_SUPPORT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MUST_SUPPORT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MUST_SUPPORT])) {
                        $errs[self::FIELD_MUST_SUPPORT] = [];
                    }
                    $errs[self::FIELD_MUST_SUPPORT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORDER_MEANING])) {
            $v = $this->getOrderMeaning();
            foreach($validationRules[self::FIELD_ORDER_MEANING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_ORDER_MEANING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORDER_MEANING])) {
                        $errs[self::FIELD_ORDER_MEANING] = [];
                    }
                    $errs[self::FIELD_ORDER_MEANING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATH])) {
            $v = $this->getPath();
            foreach($validationRules[self::FIELD_PATH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATH])) {
                        $errs[self::FIELD_PATH] = [];
                    }
                    $errs[self::FIELD_PATH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_ADDRESS])) {
            $v = $this->getPatternAddress();
            foreach($validationRules[self::FIELD_PATTERN_ADDRESS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_ADDRESS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_ADDRESS])) {
                        $errs[self::FIELD_PATTERN_ADDRESS] = [];
                    }
                    $errs[self::FIELD_PATTERN_ADDRESS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_AGE])) {
            $v = $this->getPatternAge();
            foreach($validationRules[self::FIELD_PATTERN_AGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_AGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_AGE])) {
                        $errs[self::FIELD_PATTERN_AGE] = [];
                    }
                    $errs[self::FIELD_PATTERN_AGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_ANNOTATION])) {
            $v = $this->getPatternAnnotation();
            foreach($validationRules[self::FIELD_PATTERN_ANNOTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_ANNOTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_ANNOTATION])) {
                        $errs[self::FIELD_PATTERN_ANNOTATION] = [];
                    }
                    $errs[self::FIELD_PATTERN_ANNOTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_ATTACHMENT])) {
            $v = $this->getPatternAttachment();
            foreach($validationRules[self::FIELD_PATTERN_ATTACHMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_ATTACHMENT])) {
                        $errs[self::FIELD_PATTERN_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_PATTERN_ATTACHMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_BASE_64BINARY])) {
            $v = $this->getPatternBase64Binary();
            foreach($validationRules[self::FIELD_PATTERN_BASE_64BINARY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_BASE_64BINARY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_BASE_64BINARY])) {
                        $errs[self::FIELD_PATTERN_BASE_64BINARY] = [];
                    }
                    $errs[self::FIELD_PATTERN_BASE_64BINARY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_BOOLEAN])) {
            $v = $this->getPatternBoolean();
            foreach($validationRules[self::FIELD_PATTERN_BOOLEAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_BOOLEAN])) {
                        $errs[self::FIELD_PATTERN_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_PATTERN_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_CODE])) {
            $v = $this->getPatternCode();
            foreach($validationRules[self::FIELD_PATTERN_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_CODE])) {
                        $errs[self::FIELD_PATTERN_CODE] = [];
                    }
                    $errs[self::FIELD_PATTERN_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_CODEABLE_CONCEPT])) {
            $v = $this->getPatternCodeableConcept();
            foreach($validationRules[self::FIELD_PATTERN_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_PATTERN_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_PATTERN_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_CODING])) {
            $v = $this->getPatternCoding();
            foreach($validationRules[self::FIELD_PATTERN_CODING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_CODING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_CODING])) {
                        $errs[self::FIELD_PATTERN_CODING] = [];
                    }
                    $errs[self::FIELD_PATTERN_CODING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_CONTACT_POINT])) {
            $v = $this->getPatternContactPoint();
            foreach($validationRules[self::FIELD_PATTERN_CONTACT_POINT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_CONTACT_POINT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_CONTACT_POINT])) {
                        $errs[self::FIELD_PATTERN_CONTACT_POINT] = [];
                    }
                    $errs[self::FIELD_PATTERN_CONTACT_POINT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_COUNT])) {
            $v = $this->getPatternCount();
            foreach($validationRules[self::FIELD_PATTERN_COUNT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_COUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_COUNT])) {
                        $errs[self::FIELD_PATTERN_COUNT] = [];
                    }
                    $errs[self::FIELD_PATTERN_COUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_DATE])) {
            $v = $this->getPatternDate();
            foreach($validationRules[self::FIELD_PATTERN_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_DATE])) {
                        $errs[self::FIELD_PATTERN_DATE] = [];
                    }
                    $errs[self::FIELD_PATTERN_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_DATE_TIME])) {
            $v = $this->getPatternDateTime();
            foreach($validationRules[self::FIELD_PATTERN_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_DATE_TIME])) {
                        $errs[self::FIELD_PATTERN_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_PATTERN_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_DECIMAL])) {
            $v = $this->getPatternDecimal();
            foreach($validationRules[self::FIELD_PATTERN_DECIMAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_DECIMAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_DECIMAL])) {
                        $errs[self::FIELD_PATTERN_DECIMAL] = [];
                    }
                    $errs[self::FIELD_PATTERN_DECIMAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_DISTANCE])) {
            $v = $this->getPatternDistance();
            foreach($validationRules[self::FIELD_PATTERN_DISTANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_DISTANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_DISTANCE])) {
                        $errs[self::FIELD_PATTERN_DISTANCE] = [];
                    }
                    $errs[self::FIELD_PATTERN_DISTANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_DURATION])) {
            $v = $this->getPatternDuration();
            foreach($validationRules[self::FIELD_PATTERN_DURATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_DURATION])) {
                        $errs[self::FIELD_PATTERN_DURATION] = [];
                    }
                    $errs[self::FIELD_PATTERN_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_HUMAN_NAME])) {
            $v = $this->getPatternHumanName();
            foreach($validationRules[self::FIELD_PATTERN_HUMAN_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_HUMAN_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_HUMAN_NAME])) {
                        $errs[self::FIELD_PATTERN_HUMAN_NAME] = [];
                    }
                    $errs[self::FIELD_PATTERN_HUMAN_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_ID])) {
            $v = $this->getPatternId();
            foreach($validationRules[self::FIELD_PATTERN_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_ID])) {
                        $errs[self::FIELD_PATTERN_ID] = [];
                    }
                    $errs[self::FIELD_PATTERN_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_IDENTIFIER])) {
            $v = $this->getPatternIdentifier();
            foreach($validationRules[self::FIELD_PATTERN_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_IDENTIFIER])) {
                        $errs[self::FIELD_PATTERN_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_PATTERN_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_INSTANT])) {
            $v = $this->getPatternInstant();
            foreach($validationRules[self::FIELD_PATTERN_INSTANT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_INSTANT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_INSTANT])) {
                        $errs[self::FIELD_PATTERN_INSTANT] = [];
                    }
                    $errs[self::FIELD_PATTERN_INSTANT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_INTEGER])) {
            $v = $this->getPatternInteger();
            foreach($validationRules[self::FIELD_PATTERN_INTEGER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_INTEGER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_INTEGER])) {
                        $errs[self::FIELD_PATTERN_INTEGER] = [];
                    }
                    $errs[self::FIELD_PATTERN_INTEGER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_MARKDOWN])) {
            $v = $this->getPatternMarkdown();
            foreach($validationRules[self::FIELD_PATTERN_MARKDOWN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_MARKDOWN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_MARKDOWN])) {
                        $errs[self::FIELD_PATTERN_MARKDOWN] = [];
                    }
                    $errs[self::FIELD_PATTERN_MARKDOWN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_META])) {
            $v = $this->getPatternMeta();
            foreach($validationRules[self::FIELD_PATTERN_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_META])) {
                        $errs[self::FIELD_PATTERN_META] = [];
                    }
                    $errs[self::FIELD_PATTERN_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_MONEY])) {
            $v = $this->getPatternMoney();
            foreach($validationRules[self::FIELD_PATTERN_MONEY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_MONEY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_MONEY])) {
                        $errs[self::FIELD_PATTERN_MONEY] = [];
                    }
                    $errs[self::FIELD_PATTERN_MONEY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_OID])) {
            $v = $this->getPatternOid();
            foreach($validationRules[self::FIELD_PATTERN_OID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_OID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_OID])) {
                        $errs[self::FIELD_PATTERN_OID] = [];
                    }
                    $errs[self::FIELD_PATTERN_OID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_PERIOD])) {
            $v = $this->getPatternPeriod();
            foreach($validationRules[self::FIELD_PATTERN_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_PERIOD])) {
                        $errs[self::FIELD_PATTERN_PERIOD] = [];
                    }
                    $errs[self::FIELD_PATTERN_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_POSITIVE_INT])) {
            $v = $this->getPatternPositiveInt();
            foreach($validationRules[self::FIELD_PATTERN_POSITIVE_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_POSITIVE_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_POSITIVE_INT])) {
                        $errs[self::FIELD_PATTERN_POSITIVE_INT] = [];
                    }
                    $errs[self::FIELD_PATTERN_POSITIVE_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_QUANTITY])) {
            $v = $this->getPatternQuantity();
            foreach($validationRules[self::FIELD_PATTERN_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_QUANTITY])) {
                        $errs[self::FIELD_PATTERN_QUANTITY] = [];
                    }
                    $errs[self::FIELD_PATTERN_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_RANGE])) {
            $v = $this->getPatternRange();
            foreach($validationRules[self::FIELD_PATTERN_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_RANGE])) {
                        $errs[self::FIELD_PATTERN_RANGE] = [];
                    }
                    $errs[self::FIELD_PATTERN_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_RATIO])) {
            $v = $this->getPatternRatio();
            foreach($validationRules[self::FIELD_PATTERN_RATIO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_RATIO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_RATIO])) {
                        $errs[self::FIELD_PATTERN_RATIO] = [];
                    }
                    $errs[self::FIELD_PATTERN_RATIO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_REFERENCE])) {
            $v = $this->getPatternReference();
            foreach($validationRules[self::FIELD_PATTERN_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_REFERENCE])) {
                        $errs[self::FIELD_PATTERN_REFERENCE] = [];
                    }
                    $errs[self::FIELD_PATTERN_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_SAMPLED_DATA])) {
            $v = $this->getPatternSampledData();
            foreach($validationRules[self::FIELD_PATTERN_SAMPLED_DATA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_SAMPLED_DATA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_SAMPLED_DATA])) {
                        $errs[self::FIELD_PATTERN_SAMPLED_DATA] = [];
                    }
                    $errs[self::FIELD_PATTERN_SAMPLED_DATA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_SIGNATURE])) {
            $v = $this->getPatternSignature();
            foreach($validationRules[self::FIELD_PATTERN_SIGNATURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_SIGNATURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_SIGNATURE])) {
                        $errs[self::FIELD_PATTERN_SIGNATURE] = [];
                    }
                    $errs[self::FIELD_PATTERN_SIGNATURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_STRING])) {
            $v = $this->getPatternString();
            foreach($validationRules[self::FIELD_PATTERN_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_STRING])) {
                        $errs[self::FIELD_PATTERN_STRING] = [];
                    }
                    $errs[self::FIELD_PATTERN_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_TIME])) {
            $v = $this->getPatternTime();
            foreach($validationRules[self::FIELD_PATTERN_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_TIME])) {
                        $errs[self::FIELD_PATTERN_TIME] = [];
                    }
                    $errs[self::FIELD_PATTERN_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_TIMING])) {
            $v = $this->getPatternTiming();
            foreach($validationRules[self::FIELD_PATTERN_TIMING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_TIMING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_TIMING])) {
                        $errs[self::FIELD_PATTERN_TIMING] = [];
                    }
                    $errs[self::FIELD_PATTERN_TIMING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_UNSIGNED_INT])) {
            $v = $this->getPatternUnsignedInt();
            foreach($validationRules[self::FIELD_PATTERN_UNSIGNED_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_UNSIGNED_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_UNSIGNED_INT])) {
                        $errs[self::FIELD_PATTERN_UNSIGNED_INT] = [];
                    }
                    $errs[self::FIELD_PATTERN_UNSIGNED_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_URI])) {
            $v = $this->getPatternUri();
            foreach($validationRules[self::FIELD_PATTERN_URI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_URI])) {
                        $errs[self::FIELD_PATTERN_URI] = [];
                    }
                    $errs[self::FIELD_PATTERN_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPRESENTATION])) {
            $v = $this->getRepresentation();
            foreach($validationRules[self::FIELD_REPRESENTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_REPRESENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPRESENTATION])) {
                        $errs[self::FIELD_REPRESENTATION] = [];
                    }
                    $errs[self::FIELD_REPRESENTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUIREMENTS])) {
            $v = $this->getRequirements();
            foreach($validationRules[self::FIELD_REQUIREMENTS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_REQUIREMENTS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUIREMENTS])) {
                        $errs[self::FIELD_REQUIREMENTS] = [];
                    }
                    $errs[self::FIELD_REQUIREMENTS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SHORT])) {
            $v = $this->getShort();
            foreach($validationRules[self::FIELD_SHORT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_SHORT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SHORT])) {
                        $errs[self::FIELD_SHORT] = [];
                    }
                    $errs[self::FIELD_SHORT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SLICE_NAME])) {
            $v = $this->getSliceName();
            foreach($validationRules[self::FIELD_SLICE_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_SLICE_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SLICE_NAME])) {
                        $errs[self::FIELD_SLICE_NAME] = [];
                    }
                    $errs[self::FIELD_SLICE_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SLICING])) {
            $v = $this->getSlicing();
            foreach($validationRules[self::FIELD_SLICING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_SLICING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SLICING])) {
                        $errs[self::FIELD_SLICING] = [];
                    }
                    $errs[self::FIELD_SLICING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition
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
                throw new \DomainException(sprintf('FHIRElementDefinition::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRElementDefinition::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRElementDefinition;
        } elseif (!is_object($type) || !($type instanceof FHIRElementDefinition)) {
            throw new \RuntimeException(sprintf(
                'FHIRElementDefinition::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition or null, %s seen.',
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
        if (isset($children->alias)) {
            foreach($children->alias as $child) {
                $type->addAlias(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->base)) {
            $type->setBase(FHIRElementDefinitionBase::xmlUnserialize($children->base));
        }
        if (isset($children->binding)) {
            $type->setBinding(FHIRElementDefinitionBinding::xmlUnserialize($children->binding));
        }
        if (isset($children->code)) {
            foreach($children->code as $child) {
                $type->addCode(FHIRCoding::xmlUnserialize($child));
            }
        }
        if (isset($children->comment)) {
            $type->setComment(FHIRMarkdown::xmlUnserialize($children->comment));
        }
        if (isset($attributes->comment)) {
            $pt = $type->getComment();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->comment);
            } else {
                $type->setComment((string)$attributes->comment);
            }
        }
        if (isset($children->condition)) {
            foreach($children->condition as $child) {
                $type->addCondition(FHIRId::xmlUnserialize($child));
            }
        }
        if (isset($children->constraint)) {
            foreach($children->constraint as $child) {
                $type->addConstraint(FHIRElementDefinitionConstraint::xmlUnserialize($child));
            }
        }
        if (isset($children->contentReference)) {
            $type->setContentReference(FHIRUri::xmlUnserialize($children->contentReference));
        }
        if (isset($attributes->contentReference)) {
            $pt = $type->getContentReference();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->contentReference);
            } else {
                $type->setContentReference((string)$attributes->contentReference);
            }
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
        if (isset($children->defaultValueBase64Binary)) {
            $type->setDefaultValueBase64Binary(FHIRBase64Binary::xmlUnserialize($children->defaultValueBase64Binary));
        }
        if (isset($attributes->defaultValueBase64Binary)) {
            $pt = $type->getDefaultValueBase64Binary();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->defaultValueBase64Binary);
            } else {
                $type->setDefaultValueBase64Binary((string)$attributes->defaultValueBase64Binary);
            }
        }
        if (isset($children->defaultValueBoolean)) {
            $type->setDefaultValueBoolean(FHIRBoolean::xmlUnserialize($children->defaultValueBoolean));
        }
        if (isset($attributes->defaultValueBoolean)) {
            $pt = $type->getDefaultValueBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->defaultValueBoolean);
            } else {
                $type->setDefaultValueBoolean((string)$attributes->defaultValueBoolean);
            }
        }
        if (isset($children->defaultValueCode)) {
            $type->setDefaultValueCode(FHIRCode::xmlUnserialize($children->defaultValueCode));
        }
        if (isset($attributes->defaultValueCode)) {
            $pt = $type->getDefaultValueCode();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->defaultValueCode);
            } else {
                $type->setDefaultValueCode((string)$attributes->defaultValueCode);
            }
        }
        if (isset($children->defaultValueCodeableConcept)) {
            $type->setDefaultValueCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->defaultValueCodeableConcept));
        }
        if (isset($children->defaultValueCoding)) {
            $type->setDefaultValueCoding(FHIRCoding::xmlUnserialize($children->defaultValueCoding));
        }
        if (isset($children->defaultValueContactPoint)) {
            $type->setDefaultValueContactPoint(FHIRContactPoint::xmlUnserialize($children->defaultValueContactPoint));
        }
        if (isset($children->defaultValueCount)) {
            $type->setDefaultValueCount(FHIRCount::xmlUnserialize($children->defaultValueCount));
        }
        if (isset($children->defaultValueDate)) {
            $type->setDefaultValueDate(FHIRDate::xmlUnserialize($children->defaultValueDate));
        }
        if (isset($attributes->defaultValueDate)) {
            $pt = $type->getDefaultValueDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->defaultValueDate);
            } else {
                $type->setDefaultValueDate((string)$attributes->defaultValueDate);
            }
        }
        if (isset($children->defaultValueDateTime)) {
            $type->setDefaultValueDateTime(FHIRDateTime::xmlUnserialize($children->defaultValueDateTime));
        }
        if (isset($attributes->defaultValueDateTime)) {
            $pt = $type->getDefaultValueDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->defaultValueDateTime);
            } else {
                $type->setDefaultValueDateTime((string)$attributes->defaultValueDateTime);
            }
        }
        if (isset($children->defaultValueDecimal)) {
            $type->setDefaultValueDecimal(FHIRDecimal::xmlUnserialize($children->defaultValueDecimal));
        }
        if (isset($attributes->defaultValueDecimal)) {
            $pt = $type->getDefaultValueDecimal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->defaultValueDecimal);
            } else {
                $type->setDefaultValueDecimal((string)$attributes->defaultValueDecimal);
            }
        }
        if (isset($children->defaultValueDistance)) {
            $type->setDefaultValueDistance(FHIRDistance::xmlUnserialize($children->defaultValueDistance));
        }
        if (isset($children->defaultValueDuration)) {
            $type->setDefaultValueDuration(FHIRDuration::xmlUnserialize($children->defaultValueDuration));
        }
        if (isset($children->defaultValueHumanName)) {
            $type->setDefaultValueHumanName(FHIRHumanName::xmlUnserialize($children->defaultValueHumanName));
        }
        if (isset($children->defaultValueId)) {
            $type->setDefaultValueId(FHIRId::xmlUnserialize($children->defaultValueId));
        }
        if (isset($attributes->defaultValueId)) {
            $pt = $type->getDefaultValueId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->defaultValueId);
            } else {
                $type->setDefaultValueId((string)$attributes->defaultValueId);
            }
        }
        if (isset($children->defaultValueIdentifier)) {
            $type->setDefaultValueIdentifier(FHIRIdentifier::xmlUnserialize($children->defaultValueIdentifier));
        }
        if (isset($children->defaultValueInstant)) {
            $type->setDefaultValueInstant(FHIRInstant::xmlUnserialize($children->defaultValueInstant));
        }
        if (isset($attributes->defaultValueInstant)) {
            $pt = $type->getDefaultValueInstant();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->defaultValueInstant);
            } else {
                $type->setDefaultValueInstant((string)$attributes->defaultValueInstant);
            }
        }
        if (isset($children->defaultValueInteger)) {
            $type->setDefaultValueInteger(FHIRInteger::xmlUnserialize($children->defaultValueInteger));
        }
        if (isset($attributes->defaultValueInteger)) {
            $pt = $type->getDefaultValueInteger();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->defaultValueInteger);
            } else {
                $type->setDefaultValueInteger((string)$attributes->defaultValueInteger);
            }
        }
        if (isset($children->defaultValueMarkdown)) {
            $type->setDefaultValueMarkdown(FHIRMarkdown::xmlUnserialize($children->defaultValueMarkdown));
        }
        if (isset($attributes->defaultValueMarkdown)) {
            $pt = $type->getDefaultValueMarkdown();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->defaultValueMarkdown);
            } else {
                $type->setDefaultValueMarkdown((string)$attributes->defaultValueMarkdown);
            }
        }
        if (isset($children->defaultValueMeta)) {
            $type->setDefaultValueMeta(FHIRMeta::xmlUnserialize($children->defaultValueMeta));
        }
        if (isset($children->defaultValueMoney)) {
            $type->setDefaultValueMoney(FHIRMoney::xmlUnserialize($children->defaultValueMoney));
        }
        if (isset($children->defaultValueOid)) {
            $type->setDefaultValueOid(FHIROid::xmlUnserialize($children->defaultValueOid));
        }
        if (isset($attributes->defaultValueOid)) {
            $pt = $type->getDefaultValueOid();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->defaultValueOid);
            } else {
                $type->setDefaultValueOid((string)$attributes->defaultValueOid);
            }
        }
        if (isset($children->defaultValuePeriod)) {
            $type->setDefaultValuePeriod(FHIRPeriod::xmlUnserialize($children->defaultValuePeriod));
        }
        if (isset($children->defaultValuePositiveInt)) {
            $type->setDefaultValuePositiveInt(FHIRPositiveInt::xmlUnserialize($children->defaultValuePositiveInt));
        }
        if (isset($attributes->defaultValuePositiveInt)) {
            $pt = $type->getDefaultValuePositiveInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->defaultValuePositiveInt);
            } else {
                $type->setDefaultValuePositiveInt((string)$attributes->defaultValuePositiveInt);
            }
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
        if (isset($children->defaultValueSampledData)) {
            $type->setDefaultValueSampledData(FHIRSampledData::xmlUnserialize($children->defaultValueSampledData));
        }
        if (isset($children->defaultValueSignature)) {
            $type->setDefaultValueSignature(FHIRSignature::xmlUnserialize($children->defaultValueSignature));
        }
        if (isset($children->defaultValueString)) {
            $type->setDefaultValueString(FHIRString::xmlUnserialize($children->defaultValueString));
        }
        if (isset($attributes->defaultValueString)) {
            $pt = $type->getDefaultValueString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->defaultValueString);
            } else {
                $type->setDefaultValueString((string)$attributes->defaultValueString);
            }
        }
        if (isset($children->defaultValueTime)) {
            $type->setDefaultValueTime(FHIRTime::xmlUnserialize($children->defaultValueTime));
        }
        if (isset($attributes->defaultValueTime)) {
            $pt = $type->getDefaultValueTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->defaultValueTime);
            } else {
                $type->setDefaultValueTime((string)$attributes->defaultValueTime);
            }
        }
        if (isset($children->defaultValueTiming)) {
            $type->setDefaultValueTiming(FHIRTiming::xmlUnserialize($children->defaultValueTiming));
        }
        if (isset($children->defaultValueUnsignedInt)) {
            $type->setDefaultValueUnsignedInt(FHIRUnsignedInt::xmlUnserialize($children->defaultValueUnsignedInt));
        }
        if (isset($attributes->defaultValueUnsignedInt)) {
            $pt = $type->getDefaultValueUnsignedInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->defaultValueUnsignedInt);
            } else {
                $type->setDefaultValueUnsignedInt((string)$attributes->defaultValueUnsignedInt);
            }
        }
        if (isset($children->defaultValueUri)) {
            $type->setDefaultValueUri(FHIRUri::xmlUnserialize($children->defaultValueUri));
        }
        if (isset($attributes->defaultValueUri)) {
            $pt = $type->getDefaultValueUri();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->defaultValueUri);
            } else {
                $type->setDefaultValueUri((string)$attributes->defaultValueUri);
            }
        }
        if (isset($children->definition)) {
            $type->setDefinition(FHIRMarkdown::xmlUnserialize($children->definition));
        }
        if (isset($attributes->definition)) {
            $pt = $type->getDefinition();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->definition);
            } else {
                $type->setDefinition((string)$attributes->definition);
            }
        }
        if (isset($children->example)) {
            foreach($children->example as $child) {
                $type->addExample(FHIRElementDefinitionExample::xmlUnserialize($child));
            }
        }
        if (isset($children->fixedAddress)) {
            $type->setFixedAddress(FHIRAddress::xmlUnserialize($children->fixedAddress));
        }
        if (isset($children->fixedAge)) {
            $type->setFixedAge(FHIRAge::xmlUnserialize($children->fixedAge));
        }
        if (isset($children->fixedAnnotation)) {
            $type->setFixedAnnotation(FHIRAnnotation::xmlUnserialize($children->fixedAnnotation));
        }
        if (isset($children->fixedAttachment)) {
            $type->setFixedAttachment(FHIRAttachment::xmlUnserialize($children->fixedAttachment));
        }
        if (isset($children->fixedBase64Binary)) {
            $type->setFixedBase64Binary(FHIRBase64Binary::xmlUnserialize($children->fixedBase64Binary));
        }
        if (isset($attributes->fixedBase64Binary)) {
            $pt = $type->getFixedBase64Binary();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->fixedBase64Binary);
            } else {
                $type->setFixedBase64Binary((string)$attributes->fixedBase64Binary);
            }
        }
        if (isset($children->fixedBoolean)) {
            $type->setFixedBoolean(FHIRBoolean::xmlUnserialize($children->fixedBoolean));
        }
        if (isset($attributes->fixedBoolean)) {
            $pt = $type->getFixedBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->fixedBoolean);
            } else {
                $type->setFixedBoolean((string)$attributes->fixedBoolean);
            }
        }
        if (isset($children->fixedCode)) {
            $type->setFixedCode(FHIRCode::xmlUnserialize($children->fixedCode));
        }
        if (isset($attributes->fixedCode)) {
            $pt = $type->getFixedCode();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->fixedCode);
            } else {
                $type->setFixedCode((string)$attributes->fixedCode);
            }
        }
        if (isset($children->fixedCodeableConcept)) {
            $type->setFixedCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->fixedCodeableConcept));
        }
        if (isset($children->fixedCoding)) {
            $type->setFixedCoding(FHIRCoding::xmlUnserialize($children->fixedCoding));
        }
        if (isset($children->fixedContactPoint)) {
            $type->setFixedContactPoint(FHIRContactPoint::xmlUnserialize($children->fixedContactPoint));
        }
        if (isset($children->fixedCount)) {
            $type->setFixedCount(FHIRCount::xmlUnserialize($children->fixedCount));
        }
        if (isset($children->fixedDate)) {
            $type->setFixedDate(FHIRDate::xmlUnserialize($children->fixedDate));
        }
        if (isset($attributes->fixedDate)) {
            $pt = $type->getFixedDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->fixedDate);
            } else {
                $type->setFixedDate((string)$attributes->fixedDate);
            }
        }
        if (isset($children->fixedDateTime)) {
            $type->setFixedDateTime(FHIRDateTime::xmlUnserialize($children->fixedDateTime));
        }
        if (isset($attributes->fixedDateTime)) {
            $pt = $type->getFixedDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->fixedDateTime);
            } else {
                $type->setFixedDateTime((string)$attributes->fixedDateTime);
            }
        }
        if (isset($children->fixedDecimal)) {
            $type->setFixedDecimal(FHIRDecimal::xmlUnserialize($children->fixedDecimal));
        }
        if (isset($attributes->fixedDecimal)) {
            $pt = $type->getFixedDecimal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->fixedDecimal);
            } else {
                $type->setFixedDecimal((string)$attributes->fixedDecimal);
            }
        }
        if (isset($children->fixedDistance)) {
            $type->setFixedDistance(FHIRDistance::xmlUnserialize($children->fixedDistance));
        }
        if (isset($children->fixedDuration)) {
            $type->setFixedDuration(FHIRDuration::xmlUnserialize($children->fixedDuration));
        }
        if (isset($children->fixedHumanName)) {
            $type->setFixedHumanName(FHIRHumanName::xmlUnserialize($children->fixedHumanName));
        }
        if (isset($children->fixedId)) {
            $type->setFixedId(FHIRId::xmlUnserialize($children->fixedId));
        }
        if (isset($attributes->fixedId)) {
            $pt = $type->getFixedId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->fixedId);
            } else {
                $type->setFixedId((string)$attributes->fixedId);
            }
        }
        if (isset($children->fixedIdentifier)) {
            $type->setFixedIdentifier(FHIRIdentifier::xmlUnserialize($children->fixedIdentifier));
        }
        if (isset($children->fixedInstant)) {
            $type->setFixedInstant(FHIRInstant::xmlUnserialize($children->fixedInstant));
        }
        if (isset($attributes->fixedInstant)) {
            $pt = $type->getFixedInstant();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->fixedInstant);
            } else {
                $type->setFixedInstant((string)$attributes->fixedInstant);
            }
        }
        if (isset($children->fixedInteger)) {
            $type->setFixedInteger(FHIRInteger::xmlUnserialize($children->fixedInteger));
        }
        if (isset($attributes->fixedInteger)) {
            $pt = $type->getFixedInteger();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->fixedInteger);
            } else {
                $type->setFixedInteger((string)$attributes->fixedInteger);
            }
        }
        if (isset($children->fixedMarkdown)) {
            $type->setFixedMarkdown(FHIRMarkdown::xmlUnserialize($children->fixedMarkdown));
        }
        if (isset($attributes->fixedMarkdown)) {
            $pt = $type->getFixedMarkdown();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->fixedMarkdown);
            } else {
                $type->setFixedMarkdown((string)$attributes->fixedMarkdown);
            }
        }
        if (isset($children->fixedMeta)) {
            $type->setFixedMeta(FHIRMeta::xmlUnserialize($children->fixedMeta));
        }
        if (isset($children->fixedMoney)) {
            $type->setFixedMoney(FHIRMoney::xmlUnserialize($children->fixedMoney));
        }
        if (isset($children->fixedOid)) {
            $type->setFixedOid(FHIROid::xmlUnserialize($children->fixedOid));
        }
        if (isset($attributes->fixedOid)) {
            $pt = $type->getFixedOid();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->fixedOid);
            } else {
                $type->setFixedOid((string)$attributes->fixedOid);
            }
        }
        if (isset($children->fixedPeriod)) {
            $type->setFixedPeriod(FHIRPeriod::xmlUnserialize($children->fixedPeriod));
        }
        if (isset($children->fixedPositiveInt)) {
            $type->setFixedPositiveInt(FHIRPositiveInt::xmlUnserialize($children->fixedPositiveInt));
        }
        if (isset($attributes->fixedPositiveInt)) {
            $pt = $type->getFixedPositiveInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->fixedPositiveInt);
            } else {
                $type->setFixedPositiveInt((string)$attributes->fixedPositiveInt);
            }
        }
        if (isset($children->fixedQuantity)) {
            $type->setFixedQuantity(FHIRQuantity::xmlUnserialize($children->fixedQuantity));
        }
        if (isset($children->fixedRange)) {
            $type->setFixedRange(FHIRRange::xmlUnserialize($children->fixedRange));
        }
        if (isset($children->fixedRatio)) {
            $type->setFixedRatio(FHIRRatio::xmlUnserialize($children->fixedRatio));
        }
        if (isset($children->fixedReference)) {
            $type->setFixedReference(FHIRReference::xmlUnserialize($children->fixedReference));
        }
        if (isset($children->fixedSampledData)) {
            $type->setFixedSampledData(FHIRSampledData::xmlUnserialize($children->fixedSampledData));
        }
        if (isset($children->fixedSignature)) {
            $type->setFixedSignature(FHIRSignature::xmlUnserialize($children->fixedSignature));
        }
        if (isset($children->fixedString)) {
            $type->setFixedString(FHIRString::xmlUnserialize($children->fixedString));
        }
        if (isset($attributes->fixedString)) {
            $pt = $type->getFixedString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->fixedString);
            } else {
                $type->setFixedString((string)$attributes->fixedString);
            }
        }
        if (isset($children->fixedTime)) {
            $type->setFixedTime(FHIRTime::xmlUnserialize($children->fixedTime));
        }
        if (isset($attributes->fixedTime)) {
            $pt = $type->getFixedTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->fixedTime);
            } else {
                $type->setFixedTime((string)$attributes->fixedTime);
            }
        }
        if (isset($children->fixedTiming)) {
            $type->setFixedTiming(FHIRTiming::xmlUnserialize($children->fixedTiming));
        }
        if (isset($children->fixedUnsignedInt)) {
            $type->setFixedUnsignedInt(FHIRUnsignedInt::xmlUnserialize($children->fixedUnsignedInt));
        }
        if (isset($attributes->fixedUnsignedInt)) {
            $pt = $type->getFixedUnsignedInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->fixedUnsignedInt);
            } else {
                $type->setFixedUnsignedInt((string)$attributes->fixedUnsignedInt);
            }
        }
        if (isset($children->fixedUri)) {
            $type->setFixedUri(FHIRUri::xmlUnserialize($children->fixedUri));
        }
        if (isset($attributes->fixedUri)) {
            $pt = $type->getFixedUri();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->fixedUri);
            } else {
                $type->setFixedUri((string)$attributes->fixedUri);
            }
        }
        if (isset($children->isModifier)) {
            $type->setIsModifier(FHIRBoolean::xmlUnserialize($children->isModifier));
        }
        if (isset($attributes->isModifier)) {
            $pt = $type->getIsModifier();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->isModifier);
            } else {
                $type->setIsModifier((string)$attributes->isModifier);
            }
        }
        if (isset($children->isSummary)) {
            $type->setIsSummary(FHIRBoolean::xmlUnserialize($children->isSummary));
        }
        if (isset($attributes->isSummary)) {
            $pt = $type->getIsSummary();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->isSummary);
            } else {
                $type->setIsSummary((string)$attributes->isSummary);
            }
        }
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
        if (isset($children->mapping)) {
            foreach($children->mapping as $child) {
                $type->addMapping(FHIRElementDefinitionMapping::xmlUnserialize($child));
            }
        }
        if (isset($children->max)) {
            $type->setMax(FHIRString::xmlUnserialize($children->max));
        }
        if (isset($attributes->max)) {
            $pt = $type->getMax();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->max);
            } else {
                $type->setMax((string)$attributes->max);
            }
        }
        if (isset($children->maxLength)) {
            $type->setMaxLength(FHIRInteger::xmlUnserialize($children->maxLength));
        }
        if (isset($attributes->maxLength)) {
            $pt = $type->getMaxLength();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->maxLength);
            } else {
                $type->setMaxLength((string)$attributes->maxLength);
            }
        }
        if (isset($children->maxValueDate)) {
            $type->setMaxValueDate(FHIRDate::xmlUnserialize($children->maxValueDate));
        }
        if (isset($attributes->maxValueDate)) {
            $pt = $type->getMaxValueDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->maxValueDate);
            } else {
                $type->setMaxValueDate((string)$attributes->maxValueDate);
            }
        }
        if (isset($children->maxValueDateTime)) {
            $type->setMaxValueDateTime(FHIRDateTime::xmlUnserialize($children->maxValueDateTime));
        }
        if (isset($attributes->maxValueDateTime)) {
            $pt = $type->getMaxValueDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->maxValueDateTime);
            } else {
                $type->setMaxValueDateTime((string)$attributes->maxValueDateTime);
            }
        }
        if (isset($children->maxValueDecimal)) {
            $type->setMaxValueDecimal(FHIRDecimal::xmlUnserialize($children->maxValueDecimal));
        }
        if (isset($attributes->maxValueDecimal)) {
            $pt = $type->getMaxValueDecimal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->maxValueDecimal);
            } else {
                $type->setMaxValueDecimal((string)$attributes->maxValueDecimal);
            }
        }
        if (isset($children->maxValueInstant)) {
            $type->setMaxValueInstant(FHIRInstant::xmlUnserialize($children->maxValueInstant));
        }
        if (isset($attributes->maxValueInstant)) {
            $pt = $type->getMaxValueInstant();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->maxValueInstant);
            } else {
                $type->setMaxValueInstant((string)$attributes->maxValueInstant);
            }
        }
        if (isset($children->maxValueInteger)) {
            $type->setMaxValueInteger(FHIRInteger::xmlUnserialize($children->maxValueInteger));
        }
        if (isset($attributes->maxValueInteger)) {
            $pt = $type->getMaxValueInteger();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->maxValueInteger);
            } else {
                $type->setMaxValueInteger((string)$attributes->maxValueInteger);
            }
        }
        if (isset($children->maxValuePositiveInt)) {
            $type->setMaxValuePositiveInt(FHIRPositiveInt::xmlUnserialize($children->maxValuePositiveInt));
        }
        if (isset($attributes->maxValuePositiveInt)) {
            $pt = $type->getMaxValuePositiveInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->maxValuePositiveInt);
            } else {
                $type->setMaxValuePositiveInt((string)$attributes->maxValuePositiveInt);
            }
        }
        if (isset($children->maxValueQuantity)) {
            $type->setMaxValueQuantity(FHIRQuantity::xmlUnserialize($children->maxValueQuantity));
        }
        if (isset($children->maxValueTime)) {
            $type->setMaxValueTime(FHIRTime::xmlUnserialize($children->maxValueTime));
        }
        if (isset($attributes->maxValueTime)) {
            $pt = $type->getMaxValueTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->maxValueTime);
            } else {
                $type->setMaxValueTime((string)$attributes->maxValueTime);
            }
        }
        if (isset($children->maxValueUnsignedInt)) {
            $type->setMaxValueUnsignedInt(FHIRUnsignedInt::xmlUnserialize($children->maxValueUnsignedInt));
        }
        if (isset($attributes->maxValueUnsignedInt)) {
            $pt = $type->getMaxValueUnsignedInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->maxValueUnsignedInt);
            } else {
                $type->setMaxValueUnsignedInt((string)$attributes->maxValueUnsignedInt);
            }
        }
        if (isset($children->meaningWhenMissing)) {
            $type->setMeaningWhenMissing(FHIRMarkdown::xmlUnserialize($children->meaningWhenMissing));
        }
        if (isset($attributes->meaningWhenMissing)) {
            $pt = $type->getMeaningWhenMissing();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->meaningWhenMissing);
            } else {
                $type->setMeaningWhenMissing((string)$attributes->meaningWhenMissing);
            }
        }
        if (isset($children->min)) {
            $type->setMin(FHIRUnsignedInt::xmlUnserialize($children->min));
        }
        if (isset($attributes->min)) {
            $pt = $type->getMin();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->min);
            } else {
                $type->setMin((string)$attributes->min);
            }
        }
        if (isset($children->minValueDate)) {
            $type->setMinValueDate(FHIRDate::xmlUnserialize($children->minValueDate));
        }
        if (isset($attributes->minValueDate)) {
            $pt = $type->getMinValueDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->minValueDate);
            } else {
                $type->setMinValueDate((string)$attributes->minValueDate);
            }
        }
        if (isset($children->minValueDateTime)) {
            $type->setMinValueDateTime(FHIRDateTime::xmlUnserialize($children->minValueDateTime));
        }
        if (isset($attributes->minValueDateTime)) {
            $pt = $type->getMinValueDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->minValueDateTime);
            } else {
                $type->setMinValueDateTime((string)$attributes->minValueDateTime);
            }
        }
        if (isset($children->minValueDecimal)) {
            $type->setMinValueDecimal(FHIRDecimal::xmlUnserialize($children->minValueDecimal));
        }
        if (isset($attributes->minValueDecimal)) {
            $pt = $type->getMinValueDecimal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->minValueDecimal);
            } else {
                $type->setMinValueDecimal((string)$attributes->minValueDecimal);
            }
        }
        if (isset($children->minValueInstant)) {
            $type->setMinValueInstant(FHIRInstant::xmlUnserialize($children->minValueInstant));
        }
        if (isset($attributes->minValueInstant)) {
            $pt = $type->getMinValueInstant();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->minValueInstant);
            } else {
                $type->setMinValueInstant((string)$attributes->minValueInstant);
            }
        }
        if (isset($children->minValueInteger)) {
            $type->setMinValueInteger(FHIRInteger::xmlUnserialize($children->minValueInteger));
        }
        if (isset($attributes->minValueInteger)) {
            $pt = $type->getMinValueInteger();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->minValueInteger);
            } else {
                $type->setMinValueInteger((string)$attributes->minValueInteger);
            }
        }
        if (isset($children->minValuePositiveInt)) {
            $type->setMinValuePositiveInt(FHIRPositiveInt::xmlUnserialize($children->minValuePositiveInt));
        }
        if (isset($attributes->minValuePositiveInt)) {
            $pt = $type->getMinValuePositiveInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->minValuePositiveInt);
            } else {
                $type->setMinValuePositiveInt((string)$attributes->minValuePositiveInt);
            }
        }
        if (isset($children->minValueQuantity)) {
            $type->setMinValueQuantity(FHIRQuantity::xmlUnserialize($children->minValueQuantity));
        }
        if (isset($children->minValueTime)) {
            $type->setMinValueTime(FHIRTime::xmlUnserialize($children->minValueTime));
        }
        if (isset($attributes->minValueTime)) {
            $pt = $type->getMinValueTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->minValueTime);
            } else {
                $type->setMinValueTime((string)$attributes->minValueTime);
            }
        }
        if (isset($children->minValueUnsignedInt)) {
            $type->setMinValueUnsignedInt(FHIRUnsignedInt::xmlUnserialize($children->minValueUnsignedInt));
        }
        if (isset($attributes->minValueUnsignedInt)) {
            $pt = $type->getMinValueUnsignedInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->minValueUnsignedInt);
            } else {
                $type->setMinValueUnsignedInt((string)$attributes->minValueUnsignedInt);
            }
        }
        if (isset($children->mustSupport)) {
            $type->setMustSupport(FHIRBoolean::xmlUnserialize($children->mustSupport));
        }
        if (isset($attributes->mustSupport)) {
            $pt = $type->getMustSupport();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->mustSupport);
            } else {
                $type->setMustSupport((string)$attributes->mustSupport);
            }
        }
        if (isset($children->orderMeaning)) {
            $type->setOrderMeaning(FHIRString::xmlUnserialize($children->orderMeaning));
        }
        if (isset($attributes->orderMeaning)) {
            $pt = $type->getOrderMeaning();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->orderMeaning);
            } else {
                $type->setOrderMeaning((string)$attributes->orderMeaning);
            }
        }
        if (isset($children->path)) {
            $type->setPath(FHIRString::xmlUnserialize($children->path));
        }
        if (isset($attributes->path)) {
            $pt = $type->getPath();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->path);
            } else {
                $type->setPath((string)$attributes->path);
            }
        }
        if (isset($children->patternAddress)) {
            $type->setPatternAddress(FHIRAddress::xmlUnserialize($children->patternAddress));
        }
        if (isset($children->patternAge)) {
            $type->setPatternAge(FHIRAge::xmlUnserialize($children->patternAge));
        }
        if (isset($children->patternAnnotation)) {
            $type->setPatternAnnotation(FHIRAnnotation::xmlUnserialize($children->patternAnnotation));
        }
        if (isset($children->patternAttachment)) {
            $type->setPatternAttachment(FHIRAttachment::xmlUnserialize($children->patternAttachment));
        }
        if (isset($children->patternBase64Binary)) {
            $type->setPatternBase64Binary(FHIRBase64Binary::xmlUnserialize($children->patternBase64Binary));
        }
        if (isset($attributes->patternBase64Binary)) {
            $pt = $type->getPatternBase64Binary();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->patternBase64Binary);
            } else {
                $type->setPatternBase64Binary((string)$attributes->patternBase64Binary);
            }
        }
        if (isset($children->patternBoolean)) {
            $type->setPatternBoolean(FHIRBoolean::xmlUnserialize($children->patternBoolean));
        }
        if (isset($attributes->patternBoolean)) {
            $pt = $type->getPatternBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->patternBoolean);
            } else {
                $type->setPatternBoolean((string)$attributes->patternBoolean);
            }
        }
        if (isset($children->patternCode)) {
            $type->setPatternCode(FHIRCode::xmlUnserialize($children->patternCode));
        }
        if (isset($attributes->patternCode)) {
            $pt = $type->getPatternCode();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->patternCode);
            } else {
                $type->setPatternCode((string)$attributes->patternCode);
            }
        }
        if (isset($children->patternCodeableConcept)) {
            $type->setPatternCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->patternCodeableConcept));
        }
        if (isset($children->patternCoding)) {
            $type->setPatternCoding(FHIRCoding::xmlUnserialize($children->patternCoding));
        }
        if (isset($children->patternContactPoint)) {
            $type->setPatternContactPoint(FHIRContactPoint::xmlUnserialize($children->patternContactPoint));
        }
        if (isset($children->patternCount)) {
            $type->setPatternCount(FHIRCount::xmlUnserialize($children->patternCount));
        }
        if (isset($children->patternDate)) {
            $type->setPatternDate(FHIRDate::xmlUnserialize($children->patternDate));
        }
        if (isset($attributes->patternDate)) {
            $pt = $type->getPatternDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->patternDate);
            } else {
                $type->setPatternDate((string)$attributes->patternDate);
            }
        }
        if (isset($children->patternDateTime)) {
            $type->setPatternDateTime(FHIRDateTime::xmlUnserialize($children->patternDateTime));
        }
        if (isset($attributes->patternDateTime)) {
            $pt = $type->getPatternDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->patternDateTime);
            } else {
                $type->setPatternDateTime((string)$attributes->patternDateTime);
            }
        }
        if (isset($children->patternDecimal)) {
            $type->setPatternDecimal(FHIRDecimal::xmlUnserialize($children->patternDecimal));
        }
        if (isset($attributes->patternDecimal)) {
            $pt = $type->getPatternDecimal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->patternDecimal);
            } else {
                $type->setPatternDecimal((string)$attributes->patternDecimal);
            }
        }
        if (isset($children->patternDistance)) {
            $type->setPatternDistance(FHIRDistance::xmlUnserialize($children->patternDistance));
        }
        if (isset($children->patternDuration)) {
            $type->setPatternDuration(FHIRDuration::xmlUnserialize($children->patternDuration));
        }
        if (isset($children->patternHumanName)) {
            $type->setPatternHumanName(FHIRHumanName::xmlUnserialize($children->patternHumanName));
        }
        if (isset($children->patternId)) {
            $type->setPatternId(FHIRId::xmlUnserialize($children->patternId));
        }
        if (isset($attributes->patternId)) {
            $pt = $type->getPatternId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->patternId);
            } else {
                $type->setPatternId((string)$attributes->patternId);
            }
        }
        if (isset($children->patternIdentifier)) {
            $type->setPatternIdentifier(FHIRIdentifier::xmlUnserialize($children->patternIdentifier));
        }
        if (isset($children->patternInstant)) {
            $type->setPatternInstant(FHIRInstant::xmlUnserialize($children->patternInstant));
        }
        if (isset($attributes->patternInstant)) {
            $pt = $type->getPatternInstant();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->patternInstant);
            } else {
                $type->setPatternInstant((string)$attributes->patternInstant);
            }
        }
        if (isset($children->patternInteger)) {
            $type->setPatternInteger(FHIRInteger::xmlUnserialize($children->patternInteger));
        }
        if (isset($attributes->patternInteger)) {
            $pt = $type->getPatternInteger();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->patternInteger);
            } else {
                $type->setPatternInteger((string)$attributes->patternInteger);
            }
        }
        if (isset($children->patternMarkdown)) {
            $type->setPatternMarkdown(FHIRMarkdown::xmlUnserialize($children->patternMarkdown));
        }
        if (isset($attributes->patternMarkdown)) {
            $pt = $type->getPatternMarkdown();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->patternMarkdown);
            } else {
                $type->setPatternMarkdown((string)$attributes->patternMarkdown);
            }
        }
        if (isset($children->patternMeta)) {
            $type->setPatternMeta(FHIRMeta::xmlUnserialize($children->patternMeta));
        }
        if (isset($children->patternMoney)) {
            $type->setPatternMoney(FHIRMoney::xmlUnserialize($children->patternMoney));
        }
        if (isset($children->patternOid)) {
            $type->setPatternOid(FHIROid::xmlUnserialize($children->patternOid));
        }
        if (isset($attributes->patternOid)) {
            $pt = $type->getPatternOid();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->patternOid);
            } else {
                $type->setPatternOid((string)$attributes->patternOid);
            }
        }
        if (isset($children->patternPeriod)) {
            $type->setPatternPeriod(FHIRPeriod::xmlUnserialize($children->patternPeriod));
        }
        if (isset($children->patternPositiveInt)) {
            $type->setPatternPositiveInt(FHIRPositiveInt::xmlUnserialize($children->patternPositiveInt));
        }
        if (isset($attributes->patternPositiveInt)) {
            $pt = $type->getPatternPositiveInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->patternPositiveInt);
            } else {
                $type->setPatternPositiveInt((string)$attributes->patternPositiveInt);
            }
        }
        if (isset($children->patternQuantity)) {
            $type->setPatternQuantity(FHIRQuantity::xmlUnserialize($children->patternQuantity));
        }
        if (isset($children->patternRange)) {
            $type->setPatternRange(FHIRRange::xmlUnserialize($children->patternRange));
        }
        if (isset($children->patternRatio)) {
            $type->setPatternRatio(FHIRRatio::xmlUnserialize($children->patternRatio));
        }
        if (isset($children->patternReference)) {
            $type->setPatternReference(FHIRReference::xmlUnserialize($children->patternReference));
        }
        if (isset($children->patternSampledData)) {
            $type->setPatternSampledData(FHIRSampledData::xmlUnserialize($children->patternSampledData));
        }
        if (isset($children->patternSignature)) {
            $type->setPatternSignature(FHIRSignature::xmlUnserialize($children->patternSignature));
        }
        if (isset($children->patternString)) {
            $type->setPatternString(FHIRString::xmlUnserialize($children->patternString));
        }
        if (isset($attributes->patternString)) {
            $pt = $type->getPatternString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->patternString);
            } else {
                $type->setPatternString((string)$attributes->patternString);
            }
        }
        if (isset($children->patternTime)) {
            $type->setPatternTime(FHIRTime::xmlUnserialize($children->patternTime));
        }
        if (isset($attributes->patternTime)) {
            $pt = $type->getPatternTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->patternTime);
            } else {
                $type->setPatternTime((string)$attributes->patternTime);
            }
        }
        if (isset($children->patternTiming)) {
            $type->setPatternTiming(FHIRTiming::xmlUnserialize($children->patternTiming));
        }
        if (isset($children->patternUnsignedInt)) {
            $type->setPatternUnsignedInt(FHIRUnsignedInt::xmlUnserialize($children->patternUnsignedInt));
        }
        if (isset($attributes->patternUnsignedInt)) {
            $pt = $type->getPatternUnsignedInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->patternUnsignedInt);
            } else {
                $type->setPatternUnsignedInt((string)$attributes->patternUnsignedInt);
            }
        }
        if (isset($children->patternUri)) {
            $type->setPatternUri(FHIRUri::xmlUnserialize($children->patternUri));
        }
        if (isset($attributes->patternUri)) {
            $pt = $type->getPatternUri();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->patternUri);
            } else {
                $type->setPatternUri((string)$attributes->patternUri);
            }
        }
        if (isset($children->representation)) {
            foreach($children->representation as $child) {
                $type->addRepresentation(FHIRPropertyRepresentation::xmlUnserialize($child));
            }
        }
        if (isset($children->requirements)) {
            $type->setRequirements(FHIRMarkdown::xmlUnserialize($children->requirements));
        }
        if (isset($attributes->requirements)) {
            $pt = $type->getRequirements();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->requirements);
            } else {
                $type->setRequirements((string)$attributes->requirements);
            }
        }
        if (isset($children->short)) {
            $type->setShort(FHIRString::xmlUnserialize($children->short));
        }
        if (isset($attributes->short)) {
            $pt = $type->getShort();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->short);
            } else {
                $type->setShort((string)$attributes->short);
            }
        }
        if (isset($children->sliceName)) {
            $type->setSliceName(FHIRString::xmlUnserialize($children->sliceName));
        }
        if (isset($attributes->sliceName)) {
            $pt = $type->getSliceName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->sliceName);
            } else {
                $type->setSliceName((string)$attributes->sliceName);
            }
        }
        if (isset($children->slicing)) {
            $type->setSlicing(FHIRElementDefinitionSlicing::xmlUnserialize($children->slicing));
        }
        if (isset($children->type)) {
            foreach($children->type as $child) {
                $type->addType(FHIRElementDefinitionType::xmlUnserialize($child));
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
        if ([] !== ($vs = $this->getAlias())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ALIAS, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getBase())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BASE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getBinding())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BINDING, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CODE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getComment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COMMENT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getCondition())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONDITION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getConstraint())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONSTRAINT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getContentReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTENT_REFERENCE, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getDefaultValueCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_CODE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefaultValueCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefaultValueCoding())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_CODING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefaultValueContactPoint())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_CONTACT_POINT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefaultValueCount())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_COUNT, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getDefaultValueDuration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_DURATION, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getDefaultValueMeta())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_META, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefaultValueMoney())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_MONEY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefaultValueOid())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_OID, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getDefaultValueUnsignedInt())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_UNSIGNED_INT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefaultValueUri())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFAULT_VALUE_URI, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefinition())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFINITION, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getExample())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getFixedAddress())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_ADDRESS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedAge())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_AGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedAnnotation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_ANNOTATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedAttachment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_ATTACHMENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedBase64Binary())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_BASE_64BINARY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedBoolean())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_BOOLEAN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_CODE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedCoding())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_CODING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedContactPoint())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_CONTACT_POINT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedCount())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_COUNT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedDecimal())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_DECIMAL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedDistance())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_DISTANCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedDuration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_DURATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedHumanName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_HUMAN_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedInstant())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_INSTANT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedInteger())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_INTEGER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedMarkdown())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_MARKDOWN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedMeta())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_META, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedMoney())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_MONEY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedOid())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_OID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedPositiveInt())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_POSITIVE_INT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_RANGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedRatio())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_RATIO, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedSampledData())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_SAMPLED_DATA, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedSignature())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_SIGNATURE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_STRING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedTiming())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_TIMING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedUnsignedInt())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_UNSIGNED_INT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFixedUri())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIXED_URI, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIsModifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IS_MODIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIsSummary())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IS_SUMMARY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getLabel())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LABEL, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getMapping())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MAPPING, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getMax())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MAX, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMaxLength())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MAX_LENGTH, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMaxValueDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MAX_VALUE_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMaxValueDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MAX_VALUE_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMaxValueDecimal())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MAX_VALUE_DECIMAL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMaxValueInstant())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MAX_VALUE_INSTANT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMaxValueInteger())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MAX_VALUE_INTEGER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMaxValuePositiveInt())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MAX_VALUE_POSITIVE_INT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMaxValueQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MAX_VALUE_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMaxValueTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MAX_VALUE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMaxValueUnsignedInt())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MAX_VALUE_UNSIGNED_INT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMeaningWhenMissing())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MEANING_WHEN_MISSING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMin())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MIN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMinValueDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MIN_VALUE_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMinValueDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MIN_VALUE_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMinValueDecimal())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MIN_VALUE_DECIMAL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMinValueInstant())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MIN_VALUE_INSTANT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMinValueInteger())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MIN_VALUE_INTEGER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMinValuePositiveInt())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MIN_VALUE_POSITIVE_INT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMinValueQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MIN_VALUE_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMinValueTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MIN_VALUE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMinValueUnsignedInt())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MIN_VALUE_UNSIGNED_INT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMustSupport())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MUST_SUPPORT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOrderMeaning())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORDER_MEANING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPath())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATH, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternAddress())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_ADDRESS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternAge())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_AGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternAnnotation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_ANNOTATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternAttachment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_ATTACHMENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternBase64Binary())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_BASE_64BINARY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternBoolean())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_BOOLEAN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_CODE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternCoding())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_CODING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternContactPoint())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_CONTACT_POINT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternCount())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_COUNT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternDecimal())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_DECIMAL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternDistance())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_DISTANCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternDuration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_DURATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternHumanName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_HUMAN_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternInstant())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_INSTANT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternInteger())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_INTEGER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternMarkdown())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_MARKDOWN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternMeta())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_META, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternMoney())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_MONEY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternOid())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_OID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternPositiveInt())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_POSITIVE_INT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_RANGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternRatio())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_RATIO, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternSampledData())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_SAMPLED_DATA, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternSignature())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_SIGNATURE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_STRING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternTiming())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_TIMING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternUnsignedInt())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_UNSIGNED_INT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatternUri())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATTERN_URI, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getRepresentation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REPRESENTATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getRequirements())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUIREMENTS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getShort())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SHORT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSliceName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SLICE_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSlicing())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SLICING, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getAlias())) {
            $a[self::FIELD_ALIAS] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ALIAS][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRString::FIELD_VALUE]) || array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRString::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_ALIAS_EXT] = $encs;
            }
        }
        if (null !== ($v = $this->getBase())) {
            $a[self::FIELD_BASE] = $v;
        }
        if (null !== ($v = $this->getBinding())) {
            $a[self::FIELD_BINDING] = $v;
        }
        if ([] !== ($vs = $this->getCode())) {
            $a[self::FIELD_CODE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CODE][] = $v;
            }
        }
        if (null !== ($v = $this->getComment())) {
            $a[self::FIELD_COMMENT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRMarkdown::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRMarkdown::FIELD_VALUE]);
                $a[self::FIELD_COMMENT_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getCondition())) {
            $a[self::FIELD_CONDITION] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CONDITION][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRId::FIELD_VALUE]) || array_key_exists(FHIRId::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRId::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_CONDITION_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getConstraint())) {
            $a[self::FIELD_CONSTRAINT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CONSTRAINT][] = $v;
            }
        }
        if (null !== ($v = $this->getContentReference())) {
            $a[self::FIELD_CONTENT_REFERENCE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_CONTENT_REFERENCE_EXT] = $enc;
            }
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
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBase64Binary::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBase64Binary::FIELD_VALUE]);
                $a[self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDefaultValueBoolean())) {
            $a[self::FIELD_DEFAULT_VALUE_BOOLEAN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDefaultValueCode())) {
            $a[self::FIELD_DEFAULT_VALUE_CODE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCode::FIELD_VALUE]);
                $a[self::FIELD_DEFAULT_VALUE_CODE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDefaultValueCodeableConcept())) {
            $a[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueCoding())) {
            $a[self::FIELD_DEFAULT_VALUE_CODING] = $v;
        }
        if (null !== ($v = $this->getDefaultValueContactPoint())) {
            $a[self::FIELD_DEFAULT_VALUE_CONTACT_POINT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueCount())) {
            $a[self::FIELD_DEFAULT_VALUE_COUNT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueDate())) {
            $a[self::FIELD_DEFAULT_VALUE_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDate::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDate::FIELD_VALUE]);
                $a[self::FIELD_DEFAULT_VALUE_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDefaultValueDateTime())) {
            $a[self::FIELD_DEFAULT_VALUE_DATE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDefaultValueDecimal())) {
            $a[self::FIELD_DEFAULT_VALUE_DECIMAL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_DEFAULT_VALUE_DECIMAL_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDefaultValueDistance())) {
            $a[self::FIELD_DEFAULT_VALUE_DISTANCE] = $v;
        }
        if (null !== ($v = $this->getDefaultValueDuration())) {
            $a[self::FIELD_DEFAULT_VALUE_DURATION] = $v;
        }
        if (null !== ($v = $this->getDefaultValueHumanName())) {
            $a[self::FIELD_DEFAULT_VALUE_HUMAN_NAME] = $v;
        }
        if (null !== ($v = $this->getDefaultValueId())) {
            $a[self::FIELD_DEFAULT_VALUE_ID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRId::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRId::FIELD_VALUE]);
                $a[self::FIELD_DEFAULT_VALUE_ID_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDefaultValueIdentifier())) {
            $a[self::FIELD_DEFAULT_VALUE_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getDefaultValueInstant())) {
            $a[self::FIELD_DEFAULT_VALUE_INSTANT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInstant::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInstant::FIELD_VALUE]);
                $a[self::FIELD_DEFAULT_VALUE_INSTANT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDefaultValueInteger())) {
            $a[self::FIELD_DEFAULT_VALUE_INTEGER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_DEFAULT_VALUE_INTEGER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDefaultValueMarkdown())) {
            $a[self::FIELD_DEFAULT_VALUE_MARKDOWN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRMarkdown::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRMarkdown::FIELD_VALUE]);
                $a[self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDefaultValueMeta())) {
            $a[self::FIELD_DEFAULT_VALUE_META] = $v;
        }
        if (null !== ($v = $this->getDefaultValueMoney())) {
            $a[self::FIELD_DEFAULT_VALUE_MONEY] = $v;
        }
        if (null !== ($v = $this->getDefaultValueOid())) {
            $a[self::FIELD_DEFAULT_VALUE_OID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIROid::FIELD_VALUE, $enc)))) {
                unset($enc[FHIROid::FIELD_VALUE]);
                $a[self::FIELD_DEFAULT_VALUE_OID_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDefaultValuePeriod())) {
            $a[self::FIELD_DEFAULT_VALUE_PERIOD] = $v;
        }
        if (null !== ($v = $this->getDefaultValuePositiveInt())) {
            $a[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRPositiveInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRPositiveInt::FIELD_VALUE]);
                $a[self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT] = $enc;
            }
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
        if (null !== ($v = $this->getDefaultValueSampledData())) {
            $a[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA] = $v;
        }
        if (null !== ($v = $this->getDefaultValueSignature())) {
            $a[self::FIELD_DEFAULT_VALUE_SIGNATURE] = $v;
        }
        if (null !== ($v = $this->getDefaultValueString())) {
            $a[self::FIELD_DEFAULT_VALUE_STRING] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_DEFAULT_VALUE_STRING_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDefaultValueTime())) {
            $a[self::FIELD_DEFAULT_VALUE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRTime::FIELD_VALUE]);
                $a[self::FIELD_DEFAULT_VALUE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDefaultValueTiming())) {
            $a[self::FIELD_DEFAULT_VALUE_TIMING] = $v;
        }
        if (null !== ($v = $this->getDefaultValueUnsignedInt())) {
            $a[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUnsignedInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUnsignedInt::FIELD_VALUE]);
                $a[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDefaultValueUri())) {
            $a[self::FIELD_DEFAULT_VALUE_URI] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_DEFAULT_VALUE_URI_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDefinition())) {
            $a[self::FIELD_DEFINITION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRMarkdown::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRMarkdown::FIELD_VALUE]);
                $a[self::FIELD_DEFINITION_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getExample())) {
            $a[self::FIELD_EXAMPLE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_EXAMPLE][] = $v;
            }
        }
        if (null !== ($v = $this->getFixedAddress())) {
            $a[self::FIELD_FIXED_ADDRESS] = $v;
        }
        if (null !== ($v = $this->getFixedAge())) {
            $a[self::FIELD_FIXED_AGE] = $v;
        }
        if (null !== ($v = $this->getFixedAnnotation())) {
            $a[self::FIELD_FIXED_ANNOTATION] = $v;
        }
        if (null !== ($v = $this->getFixedAttachment())) {
            $a[self::FIELD_FIXED_ATTACHMENT] = $v;
        }
        if (null !== ($v = $this->getFixedBase64Binary())) {
            $a[self::FIELD_FIXED_BASE_64BINARY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBase64Binary::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBase64Binary::FIELD_VALUE]);
                $a[self::FIELD_FIXED_BASE_64BINARY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getFixedBoolean())) {
            $a[self::FIELD_FIXED_BOOLEAN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_FIXED_BOOLEAN_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getFixedCode())) {
            $a[self::FIELD_FIXED_CODE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCode::FIELD_VALUE]);
                $a[self::FIELD_FIXED_CODE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getFixedCodeableConcept())) {
            $a[self::FIELD_FIXED_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getFixedCoding())) {
            $a[self::FIELD_FIXED_CODING] = $v;
        }
        if (null !== ($v = $this->getFixedContactPoint())) {
            $a[self::FIELD_FIXED_CONTACT_POINT] = $v;
        }
        if (null !== ($v = $this->getFixedCount())) {
            $a[self::FIELD_FIXED_COUNT] = $v;
        }
        if (null !== ($v = $this->getFixedDate())) {
            $a[self::FIELD_FIXED_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDate::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDate::FIELD_VALUE]);
                $a[self::FIELD_FIXED_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getFixedDateTime())) {
            $a[self::FIELD_FIXED_DATE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_FIXED_DATE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getFixedDecimal())) {
            $a[self::FIELD_FIXED_DECIMAL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_FIXED_DECIMAL_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getFixedDistance())) {
            $a[self::FIELD_FIXED_DISTANCE] = $v;
        }
        if (null !== ($v = $this->getFixedDuration())) {
            $a[self::FIELD_FIXED_DURATION] = $v;
        }
        if (null !== ($v = $this->getFixedHumanName())) {
            $a[self::FIELD_FIXED_HUMAN_NAME] = $v;
        }
        if (null !== ($v = $this->getFixedId())) {
            $a[self::FIELD_FIXED_ID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRId::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRId::FIELD_VALUE]);
                $a[self::FIELD_FIXED_ID_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getFixedIdentifier())) {
            $a[self::FIELD_FIXED_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getFixedInstant())) {
            $a[self::FIELD_FIXED_INSTANT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInstant::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInstant::FIELD_VALUE]);
                $a[self::FIELD_FIXED_INSTANT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getFixedInteger())) {
            $a[self::FIELD_FIXED_INTEGER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_FIXED_INTEGER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getFixedMarkdown())) {
            $a[self::FIELD_FIXED_MARKDOWN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRMarkdown::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRMarkdown::FIELD_VALUE]);
                $a[self::FIELD_FIXED_MARKDOWN_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getFixedMeta())) {
            $a[self::FIELD_FIXED_META] = $v;
        }
        if (null !== ($v = $this->getFixedMoney())) {
            $a[self::FIELD_FIXED_MONEY] = $v;
        }
        if (null !== ($v = $this->getFixedOid())) {
            $a[self::FIELD_FIXED_OID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIROid::FIELD_VALUE, $enc)))) {
                unset($enc[FHIROid::FIELD_VALUE]);
                $a[self::FIELD_FIXED_OID_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getFixedPeriod())) {
            $a[self::FIELD_FIXED_PERIOD] = $v;
        }
        if (null !== ($v = $this->getFixedPositiveInt())) {
            $a[self::FIELD_FIXED_POSITIVE_INT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRPositiveInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRPositiveInt::FIELD_VALUE]);
                $a[self::FIELD_FIXED_POSITIVE_INT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getFixedQuantity())) {
            $a[self::FIELD_FIXED_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getFixedRange())) {
            $a[self::FIELD_FIXED_RANGE] = $v;
        }
        if (null !== ($v = $this->getFixedRatio())) {
            $a[self::FIELD_FIXED_RATIO] = $v;
        }
        if (null !== ($v = $this->getFixedReference())) {
            $a[self::FIELD_FIXED_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getFixedSampledData())) {
            $a[self::FIELD_FIXED_SAMPLED_DATA] = $v;
        }
        if (null !== ($v = $this->getFixedSignature())) {
            $a[self::FIELD_FIXED_SIGNATURE] = $v;
        }
        if (null !== ($v = $this->getFixedString())) {
            $a[self::FIELD_FIXED_STRING] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_FIXED_STRING_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getFixedTime())) {
            $a[self::FIELD_FIXED_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRTime::FIELD_VALUE]);
                $a[self::FIELD_FIXED_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getFixedTiming())) {
            $a[self::FIELD_FIXED_TIMING] = $v;
        }
        if (null !== ($v = $this->getFixedUnsignedInt())) {
            $a[self::FIELD_FIXED_UNSIGNED_INT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUnsignedInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUnsignedInt::FIELD_VALUE]);
                $a[self::FIELD_FIXED_UNSIGNED_INT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getFixedUri())) {
            $a[self::FIELD_FIXED_URI] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_FIXED_URI_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getIsModifier())) {
            $a[self::FIELD_IS_MODIFIER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_IS_MODIFIER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getIsSummary())) {
            $a[self::FIELD_IS_SUMMARY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_IS_SUMMARY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getLabel())) {
            $a[self::FIELD_LABEL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_LABEL_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getMapping())) {
            $a[self::FIELD_MAPPING] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_MAPPING][] = $v;
            }
        }
        if (null !== ($v = $this->getMax())) {
            $a[self::FIELD_MAX] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_MAX_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMaxLength())) {
            $a[self::FIELD_MAX_LENGTH] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_MAX_LENGTH_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMaxValueDate())) {
            $a[self::FIELD_MAX_VALUE_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDate::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDate::FIELD_VALUE]);
                $a[self::FIELD_MAX_VALUE_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMaxValueDateTime())) {
            $a[self::FIELD_MAX_VALUE_DATE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_MAX_VALUE_DATE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMaxValueDecimal())) {
            $a[self::FIELD_MAX_VALUE_DECIMAL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_MAX_VALUE_DECIMAL_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMaxValueInstant())) {
            $a[self::FIELD_MAX_VALUE_INSTANT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInstant::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInstant::FIELD_VALUE]);
                $a[self::FIELD_MAX_VALUE_INSTANT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMaxValueInteger())) {
            $a[self::FIELD_MAX_VALUE_INTEGER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_MAX_VALUE_INTEGER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMaxValuePositiveInt())) {
            $a[self::FIELD_MAX_VALUE_POSITIVE_INT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRPositiveInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRPositiveInt::FIELD_VALUE]);
                $a[self::FIELD_MAX_VALUE_POSITIVE_INT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMaxValueQuantity())) {
            $a[self::FIELD_MAX_VALUE_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getMaxValueTime())) {
            $a[self::FIELD_MAX_VALUE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRTime::FIELD_VALUE]);
                $a[self::FIELD_MAX_VALUE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMaxValueUnsignedInt())) {
            $a[self::FIELD_MAX_VALUE_UNSIGNED_INT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUnsignedInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUnsignedInt::FIELD_VALUE]);
                $a[self::FIELD_MAX_VALUE_UNSIGNED_INT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMeaningWhenMissing())) {
            $a[self::FIELD_MEANING_WHEN_MISSING] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRMarkdown::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRMarkdown::FIELD_VALUE]);
                $a[self::FIELD_MEANING_WHEN_MISSING_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMin())) {
            $a[self::FIELD_MIN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUnsignedInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUnsignedInt::FIELD_VALUE]);
                $a[self::FIELD_MIN_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMinValueDate())) {
            $a[self::FIELD_MIN_VALUE_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDate::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDate::FIELD_VALUE]);
                $a[self::FIELD_MIN_VALUE_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMinValueDateTime())) {
            $a[self::FIELD_MIN_VALUE_DATE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_MIN_VALUE_DATE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMinValueDecimal())) {
            $a[self::FIELD_MIN_VALUE_DECIMAL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_MIN_VALUE_DECIMAL_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMinValueInstant())) {
            $a[self::FIELD_MIN_VALUE_INSTANT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInstant::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInstant::FIELD_VALUE]);
                $a[self::FIELD_MIN_VALUE_INSTANT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMinValueInteger())) {
            $a[self::FIELD_MIN_VALUE_INTEGER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_MIN_VALUE_INTEGER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMinValuePositiveInt())) {
            $a[self::FIELD_MIN_VALUE_POSITIVE_INT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRPositiveInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRPositiveInt::FIELD_VALUE]);
                $a[self::FIELD_MIN_VALUE_POSITIVE_INT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMinValueQuantity())) {
            $a[self::FIELD_MIN_VALUE_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getMinValueTime())) {
            $a[self::FIELD_MIN_VALUE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRTime::FIELD_VALUE]);
                $a[self::FIELD_MIN_VALUE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMinValueUnsignedInt())) {
            $a[self::FIELD_MIN_VALUE_UNSIGNED_INT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUnsignedInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUnsignedInt::FIELD_VALUE]);
                $a[self::FIELD_MIN_VALUE_UNSIGNED_INT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMustSupport())) {
            $a[self::FIELD_MUST_SUPPORT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_MUST_SUPPORT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getOrderMeaning())) {
            $a[self::FIELD_ORDER_MEANING] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_ORDER_MEANING_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPath())) {
            $a[self::FIELD_PATH] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_PATH_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPatternAddress())) {
            $a[self::FIELD_PATTERN_ADDRESS] = $v;
        }
        if (null !== ($v = $this->getPatternAge())) {
            $a[self::FIELD_PATTERN_AGE] = $v;
        }
        if (null !== ($v = $this->getPatternAnnotation())) {
            $a[self::FIELD_PATTERN_ANNOTATION] = $v;
        }
        if (null !== ($v = $this->getPatternAttachment())) {
            $a[self::FIELD_PATTERN_ATTACHMENT] = $v;
        }
        if (null !== ($v = $this->getPatternBase64Binary())) {
            $a[self::FIELD_PATTERN_BASE_64BINARY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBase64Binary::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBase64Binary::FIELD_VALUE]);
                $a[self::FIELD_PATTERN_BASE_64BINARY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPatternBoolean())) {
            $a[self::FIELD_PATTERN_BOOLEAN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_PATTERN_BOOLEAN_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPatternCode())) {
            $a[self::FIELD_PATTERN_CODE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCode::FIELD_VALUE]);
                $a[self::FIELD_PATTERN_CODE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPatternCodeableConcept())) {
            $a[self::FIELD_PATTERN_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getPatternCoding())) {
            $a[self::FIELD_PATTERN_CODING] = $v;
        }
        if (null !== ($v = $this->getPatternContactPoint())) {
            $a[self::FIELD_PATTERN_CONTACT_POINT] = $v;
        }
        if (null !== ($v = $this->getPatternCount())) {
            $a[self::FIELD_PATTERN_COUNT] = $v;
        }
        if (null !== ($v = $this->getPatternDate())) {
            $a[self::FIELD_PATTERN_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDate::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDate::FIELD_VALUE]);
                $a[self::FIELD_PATTERN_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPatternDateTime())) {
            $a[self::FIELD_PATTERN_DATE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_PATTERN_DATE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPatternDecimal())) {
            $a[self::FIELD_PATTERN_DECIMAL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_PATTERN_DECIMAL_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPatternDistance())) {
            $a[self::FIELD_PATTERN_DISTANCE] = $v;
        }
        if (null !== ($v = $this->getPatternDuration())) {
            $a[self::FIELD_PATTERN_DURATION] = $v;
        }
        if (null !== ($v = $this->getPatternHumanName())) {
            $a[self::FIELD_PATTERN_HUMAN_NAME] = $v;
        }
        if (null !== ($v = $this->getPatternId())) {
            $a[self::FIELD_PATTERN_ID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRId::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRId::FIELD_VALUE]);
                $a[self::FIELD_PATTERN_ID_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPatternIdentifier())) {
            $a[self::FIELD_PATTERN_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getPatternInstant())) {
            $a[self::FIELD_PATTERN_INSTANT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInstant::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInstant::FIELD_VALUE]);
                $a[self::FIELD_PATTERN_INSTANT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPatternInteger())) {
            $a[self::FIELD_PATTERN_INTEGER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_PATTERN_INTEGER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPatternMarkdown())) {
            $a[self::FIELD_PATTERN_MARKDOWN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRMarkdown::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRMarkdown::FIELD_VALUE]);
                $a[self::FIELD_PATTERN_MARKDOWN_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPatternMeta())) {
            $a[self::FIELD_PATTERN_META] = $v;
        }
        if (null !== ($v = $this->getPatternMoney())) {
            $a[self::FIELD_PATTERN_MONEY] = $v;
        }
        if (null !== ($v = $this->getPatternOid())) {
            $a[self::FIELD_PATTERN_OID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIROid::FIELD_VALUE, $enc)))) {
                unset($enc[FHIROid::FIELD_VALUE]);
                $a[self::FIELD_PATTERN_OID_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPatternPeriod())) {
            $a[self::FIELD_PATTERN_PERIOD] = $v;
        }
        if (null !== ($v = $this->getPatternPositiveInt())) {
            $a[self::FIELD_PATTERN_POSITIVE_INT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRPositiveInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRPositiveInt::FIELD_VALUE]);
                $a[self::FIELD_PATTERN_POSITIVE_INT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPatternQuantity())) {
            $a[self::FIELD_PATTERN_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getPatternRange())) {
            $a[self::FIELD_PATTERN_RANGE] = $v;
        }
        if (null !== ($v = $this->getPatternRatio())) {
            $a[self::FIELD_PATTERN_RATIO] = $v;
        }
        if (null !== ($v = $this->getPatternReference())) {
            $a[self::FIELD_PATTERN_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getPatternSampledData())) {
            $a[self::FIELD_PATTERN_SAMPLED_DATA] = $v;
        }
        if (null !== ($v = $this->getPatternSignature())) {
            $a[self::FIELD_PATTERN_SIGNATURE] = $v;
        }
        if (null !== ($v = $this->getPatternString())) {
            $a[self::FIELD_PATTERN_STRING] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_PATTERN_STRING_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPatternTime())) {
            $a[self::FIELD_PATTERN_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRTime::FIELD_VALUE]);
                $a[self::FIELD_PATTERN_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPatternTiming())) {
            $a[self::FIELD_PATTERN_TIMING] = $v;
        }
        if (null !== ($v = $this->getPatternUnsignedInt())) {
            $a[self::FIELD_PATTERN_UNSIGNED_INT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUnsignedInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUnsignedInt::FIELD_VALUE]);
                $a[self::FIELD_PATTERN_UNSIGNED_INT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPatternUri())) {
            $a[self::FIELD_PATTERN_URI] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_PATTERN_URI_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getRepresentation())) {
            $a[self::FIELD_REPRESENTATION] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REPRESENTATION][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRPropertyRepresentation::FIELD_VALUE]) || array_key_exists(FHIRPropertyRepresentation::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRPropertyRepresentation::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_REPRESENTATION_EXT] = $encs;
            }
        }
        if (null !== ($v = $this->getRequirements())) {
            $a[self::FIELD_REQUIREMENTS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRMarkdown::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRMarkdown::FIELD_VALUE]);
                $a[self::FIELD_REQUIREMENTS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getShort())) {
            $a[self::FIELD_SHORT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_SHORT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSliceName())) {
            $a[self::FIELD_SLICE_NAME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_SLICE_NAME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSlicing())) {
            $a[self::FIELD_SLICING] = $v;
        }
        if ([] !== ($vs = $this->getType())) {
            $a[self::FIELD_TYPE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TYPE][] = $v;
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