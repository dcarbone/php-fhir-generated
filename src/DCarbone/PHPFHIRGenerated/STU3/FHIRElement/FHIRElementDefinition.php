<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 17th, 2019 04:38+0000
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
    const FIELD_DEFAULT_VALUE_AGE_EXT = '_defaultValueAge';
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
    const FIELD_DEFAULT_VALUE_CONTACT_POINT_EXT = '_defaultValueContactPoint';
    const FIELD_DEFAULT_VALUE_COUNT = 'defaultValueCount';
    const FIELD_DEFAULT_VALUE_COUNT_EXT = '_defaultValueCount';
    const FIELD_DEFAULT_VALUE_DATE = 'defaultValueDate';
    const FIELD_DEFAULT_VALUE_DATE_EXT = '_defaultValueDate';
    const FIELD_DEFAULT_VALUE_DATE_TIME = 'defaultValueDateTime';
    const FIELD_DEFAULT_VALUE_DATE_TIME_EXT = '_defaultValueDateTime';
    const FIELD_DEFAULT_VALUE_DECIMAL = 'defaultValueDecimal';
    const FIELD_DEFAULT_VALUE_DECIMAL_EXT = '_defaultValueDecimal';
    const FIELD_DEFAULT_VALUE_DISTANCE = 'defaultValueDistance';
    const FIELD_DEFAULT_VALUE_DISTANCE_EXT = '_defaultValueDistance';
    const FIELD_DEFAULT_VALUE_DURATION = 'defaultValueDuration';
    const FIELD_DEFAULT_VALUE_DURATION_EXT = '_defaultValueDuration';
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
    const FIELD_DEFAULT_VALUE_META = 'defaultValueMeta';
    const FIELD_DEFAULT_VALUE_MONEY = 'defaultValueMoney';
    const FIELD_DEFAULT_VALUE_MONEY_EXT = '_defaultValueMoney';
    const FIELD_DEFAULT_VALUE_OID = 'defaultValueOid';
    const FIELD_DEFAULT_VALUE_OID_EXT = '_defaultValueOid';
    const FIELD_DEFAULT_VALUE_PERIOD = 'defaultValuePeriod';
    const FIELD_DEFAULT_VALUE_POSITIVE_INT = 'defaultValuePositiveInt';
    const FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT = '_defaultValuePositiveInt';
    const FIELD_DEFAULT_VALUE_QUANTITY = 'defaultValueQuantity';
    const FIELD_DEFAULT_VALUE_QUANTITY_EXT = '_defaultValueQuantity';
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
    const FIELD_FIXED_AGE_EXT = '_fixedAge';
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
    const FIELD_FIXED_CONTACT_POINT_EXT = '_fixedContactPoint';
    const FIELD_FIXED_COUNT = 'fixedCount';
    const FIELD_FIXED_COUNT_EXT = '_fixedCount';
    const FIELD_FIXED_DATE = 'fixedDate';
    const FIELD_FIXED_DATE_EXT = '_fixedDate';
    const FIELD_FIXED_DATE_TIME = 'fixedDateTime';
    const FIELD_FIXED_DATE_TIME_EXT = '_fixedDateTime';
    const FIELD_FIXED_DECIMAL = 'fixedDecimal';
    const FIELD_FIXED_DECIMAL_EXT = '_fixedDecimal';
    const FIELD_FIXED_DISTANCE = 'fixedDistance';
    const FIELD_FIXED_DISTANCE_EXT = '_fixedDistance';
    const FIELD_FIXED_DURATION = 'fixedDuration';
    const FIELD_FIXED_DURATION_EXT = '_fixedDuration';
    const FIELD_FIXED_HUMAN_NAME = 'fixedHumanName';
    const FIELD_FIXED_ID = 'fixedId';
    const FIELD_FIXED_ID_EXT = '_fixedId';
    const FIELD_FIXED_IDENTIFIER = 'fixedIdentifier';
    const FIELD_FIXED_IDENTIFIER_EXT = '_fixedIdentifier';
    const FIELD_FIXED_INSTANT = 'fixedInstant';
    const FIELD_FIXED_INSTANT_EXT = '_fixedInstant';
    const FIELD_FIXED_INTEGER = 'fixedInteger';
    const FIELD_FIXED_INTEGER_EXT = '_fixedInteger';
    const FIELD_FIXED_MARKDOWN = 'fixedMarkdown';
    const FIELD_FIXED_MARKDOWN_EXT = '_fixedMarkdown';
    const FIELD_FIXED_META = 'fixedMeta';
    const FIELD_FIXED_MONEY = 'fixedMoney';
    const FIELD_FIXED_MONEY_EXT = '_fixedMoney';
    const FIELD_FIXED_OID = 'fixedOid';
    const FIELD_FIXED_OID_EXT = '_fixedOid';
    const FIELD_FIXED_PERIOD = 'fixedPeriod';
    const FIELD_FIXED_POSITIVE_INT = 'fixedPositiveInt';
    const FIELD_FIXED_POSITIVE_INT_EXT = '_fixedPositiveInt';
    const FIELD_FIXED_QUANTITY = 'fixedQuantity';
    const FIELD_FIXED_QUANTITY_EXT = '_fixedQuantity';
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
    const FIELD_MAX_VALUE_QUANTITY_EXT = '_maxValueQuantity';
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
    const FIELD_MIN_VALUE_QUANTITY_EXT = '_minValueQuantity';
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
    const FIELD_PATTERN_AGE_EXT = '_patternAge';
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
    const FIELD_PATTERN_CONTACT_POINT_EXT = '_patternContactPoint';
    const FIELD_PATTERN_COUNT = 'patternCount';
    const FIELD_PATTERN_COUNT_EXT = '_patternCount';
    const FIELD_PATTERN_DATE = 'patternDate';
    const FIELD_PATTERN_DATE_EXT = '_patternDate';
    const FIELD_PATTERN_DATE_TIME = 'patternDateTime';
    const FIELD_PATTERN_DATE_TIME_EXT = '_patternDateTime';
    const FIELD_PATTERN_DECIMAL = 'patternDecimal';
    const FIELD_PATTERN_DECIMAL_EXT = '_patternDecimal';
    const FIELD_PATTERN_DISTANCE = 'patternDistance';
    const FIELD_PATTERN_DISTANCE_EXT = '_patternDistance';
    const FIELD_PATTERN_DURATION = 'patternDuration';
    const FIELD_PATTERN_DURATION_EXT = '_patternDuration';
    const FIELD_PATTERN_HUMAN_NAME = 'patternHumanName';
    const FIELD_PATTERN_ID = 'patternId';
    const FIELD_PATTERN_ID_EXT = '_patternId';
    const FIELD_PATTERN_IDENTIFIER = 'patternIdentifier';
    const FIELD_PATTERN_IDENTIFIER_EXT = '_patternIdentifier';
    const FIELD_PATTERN_INSTANT = 'patternInstant';
    const FIELD_PATTERN_INSTANT_EXT = '_patternInstant';
    const FIELD_PATTERN_INTEGER = 'patternInteger';
    const FIELD_PATTERN_INTEGER_EXT = '_patternInteger';
    const FIELD_PATTERN_MARKDOWN = 'patternMarkdown';
    const FIELD_PATTERN_MARKDOWN_EXT = '_patternMarkdown';
    const FIELD_PATTERN_META = 'patternMeta';
    const FIELD_PATTERN_MONEY = 'patternMoney';
    const FIELD_PATTERN_MONEY_EXT = '_patternMoney';
    const FIELD_PATTERN_OID = 'patternOid';
    const FIELD_PATTERN_OID_EXT = '_patternOid';
    const FIELD_PATTERN_PERIOD = 'patternPeriod';
    const FIELD_PATTERN_POSITIVE_INT = 'patternPositiveInt';
    const FIELD_PATTERN_POSITIVE_INT_EXT = '_patternPositiveInt';
    const FIELD_PATTERN_QUANTITY = 'patternQuantity';
    const FIELD_PATTERN_QUANTITY_EXT = '_patternQuantity';
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

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

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
        if (isset($data[self::FIELD_ALIAS])) {
            $ext = (isset($data[self::FIELD_ALIAS_EXT]) && is_array($data[self::FIELD_ALIAS_EXT]))
                ? $data[self::FIELD_ALIAS_EXT]
                : null;
            if (is_array($data[self::FIELD_ALIAS])) {
                foreach($data[self::FIELD_ALIAS] as $i => $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRString) {
                        $this->addAlias($v);
                    } elseif (null !== $ext && isset($ext[$i]) && is_array($ext[$i])) {
                        if (is_scalar($v)) {
                            $this->addAlias(new FHIRString([FHIRString::FIELD_VALUE => $v] + $ext[$i]));
                        } elseif (is_array($v)) {
                            $this->addAlias(new FHIRString(array_merge($v, $ext[$i])));
                        }
                    } else {
                        $this->addAlias(new FHIRString($v));
                    }
                }
            } elseif ($data[self::FIELD_ALIAS] instanceof FHIRString) {
                $this->addAlias($data[self::FIELD_ALIAS]);
            } elseif (null !== $ext && is_scalar($data[self::FIELD_ALIAS])) {
                $this->addAlias(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_ALIAS]] + $ext));
            } else {
                $this->addAlias(new FHIRString($data[self::FIELD_ALIAS]));
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
        if (isset($data[self::FIELD_COMMENT])) {
            $ext = (isset($data[self::FIELD_COMMENT_EXT]) && is_array($data[self::FIELD_COMMENT_EXT]))
                ? $data[self::FIELD_COMMENT_EXT]
                : null;
            if ($data[self::FIELD_COMMENT] instanceof FHIRMarkdown) {
                $this->setComment($data[self::FIELD_COMMENT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_COMMENT])) {
                    $this->setComment(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_COMMENT]] + $ext));
                } else if (is_array($data[self::FIELD_COMMENT])) {
                    $this->setComment(new FHIRMarkdown(array_merge($ext, $data[self::FIELD_COMMENT])));
                }
            } else {
                $this->setComment(new FHIRMarkdown($data[self::FIELD_COMMENT]));
            }
        }
        if (isset($data[self::FIELD_CONDITION])) {
            $ext = (isset($data[self::FIELD_CONDITION_EXT]) && is_array($data[self::FIELD_CONDITION_EXT]))
                ? $data[self::FIELD_CONDITION_EXT]
                : null;
            if (is_array($data[self::FIELD_CONDITION])) {
                foreach($data[self::FIELD_CONDITION] as $i => $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRId) {
                        $this->addCondition($v);
                    } elseif (null !== $ext && isset($ext[$i]) && is_array($ext[$i])) {
                        if (is_scalar($v)) {
                            $this->addCondition(new FHIRId([FHIRId::FIELD_VALUE => $v] + $ext[$i]));
                        } elseif (is_array($v)) {
                            $this->addCondition(new FHIRId(array_merge($v, $ext[$i])));
                        }
                    } else {
                        $this->addCondition(new FHIRId($v));
                    }
                }
            } elseif ($data[self::FIELD_CONDITION] instanceof FHIRId) {
                $this->addCondition($data[self::FIELD_CONDITION]);
            } elseif (null !== $ext && is_scalar($data[self::FIELD_CONDITION])) {
                $this->addCondition(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_CONDITION]] + $ext));
            } else {
                $this->addCondition(new FHIRId($data[self::FIELD_CONDITION]));
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
        if (isset($data[self::FIELD_CONTENT_REFERENCE])) {
            $ext = (isset($data[self::FIELD_CONTENT_REFERENCE_EXT]) && is_array($data[self::FIELD_CONTENT_REFERENCE_EXT]))
                ? $data[self::FIELD_CONTENT_REFERENCE_EXT]
                : null;
            if ($data[self::FIELD_CONTENT_REFERENCE] instanceof FHIRUri) {
                $this->setContentReference($data[self::FIELD_CONTENT_REFERENCE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_CONTENT_REFERENCE])) {
                    $this->setContentReference(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_CONTENT_REFERENCE]] + $ext));
                } else if (is_array($data[self::FIELD_CONTENT_REFERENCE])) {
                    $this->setContentReference(new FHIRUri(array_merge($ext, $data[self::FIELD_CONTENT_REFERENCE])));
                }
            } else {
                $this->setContentReference(new FHIRUri($data[self::FIELD_CONTENT_REFERENCE]));
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
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_AGE_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_AGE_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_AGE_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_AGE] instanceof FHIRAge) {
                $this->setDefaultValueAge($data[self::FIELD_DEFAULT_VALUE_AGE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DEFAULT_VALUE_AGE])) {
                    $this->setDefaultValueAge(new FHIRAge([FHIRAge::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_AGE]] + $ext));
                } else if (is_array($data[self::FIELD_DEFAULT_VALUE_AGE])) {
                    $this->setDefaultValueAge(new FHIRAge(array_merge($ext, $data[self::FIELD_DEFAULT_VALUE_AGE])));
                }
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
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY])) {
                    $this->setDefaultValueBase64Binary(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY]] + $ext));
                } else if (is_array($data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY])) {
                    $this->setDefaultValueBase64Binary(new FHIRBase64Binary(array_merge($ext, $data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY])));
                }
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
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DEFAULT_VALUE_BOOLEAN])) {
                    $this->setDefaultValueBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_BOOLEAN]] + $ext));
                } else if (is_array($data[self::FIELD_DEFAULT_VALUE_BOOLEAN])) {
                    $this->setDefaultValueBoolean(new FHIRBoolean(array_merge($ext, $data[self::FIELD_DEFAULT_VALUE_BOOLEAN])));
                }
            } else {
                $this->setDefaultValueBoolean(new FHIRBoolean($data[self::FIELD_DEFAULT_VALUE_BOOLEAN]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_CODE])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_CODE_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_CODE_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_CODE_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_CODE] instanceof FHIRCode) {
                $this->setDefaultValueCode($data[self::FIELD_DEFAULT_VALUE_CODE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DEFAULT_VALUE_CODE])) {
                    $this->setDefaultValueCode(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_CODE]] + $ext));
                } else if (is_array($data[self::FIELD_DEFAULT_VALUE_CODE])) {
                    $this->setDefaultValueCode(new FHIRCode(array_merge($ext, $data[self::FIELD_DEFAULT_VALUE_CODE])));
                }
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
        if (isset($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT] instanceof FHIRContactPoint) {
                $this->setDefaultValueContactPoint($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT])) {
                    $this->setDefaultValueContactPoint(new FHIRContactPoint([FHIRContactPoint::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT]] + $ext));
                } else if (is_array($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT])) {
                    $this->setDefaultValueContactPoint(new FHIRContactPoint(array_merge($ext, $data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT])));
                }
            } else {
                $this->setDefaultValueContactPoint(new FHIRContactPoint($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_COUNT])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_COUNT_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_COUNT_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_COUNT_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_COUNT] instanceof FHIRCount) {
                $this->setDefaultValueCount($data[self::FIELD_DEFAULT_VALUE_COUNT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DEFAULT_VALUE_COUNT])) {
                    $this->setDefaultValueCount(new FHIRCount([FHIRCount::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_COUNT]] + $ext));
                } else if (is_array($data[self::FIELD_DEFAULT_VALUE_COUNT])) {
                    $this->setDefaultValueCount(new FHIRCount(array_merge($ext, $data[self::FIELD_DEFAULT_VALUE_COUNT])));
                }
            } else {
                $this->setDefaultValueCount(new FHIRCount($data[self::FIELD_DEFAULT_VALUE_COUNT]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_DATE])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_DATE_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_DATE_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_DATE_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_DATE] instanceof FHIRDate) {
                $this->setDefaultValueDate($data[self::FIELD_DEFAULT_VALUE_DATE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DEFAULT_VALUE_DATE])) {
                    $this->setDefaultValueDate(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_DATE]] + $ext));
                } else if (is_array($data[self::FIELD_DEFAULT_VALUE_DATE])) {
                    $this->setDefaultValueDate(new FHIRDate(array_merge($ext, $data[self::FIELD_DEFAULT_VALUE_DATE])));
                }
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
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DEFAULT_VALUE_DATE_TIME])) {
                    $this->setDefaultValueDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_DATE_TIME]] + $ext));
                } else if (is_array($data[self::FIELD_DEFAULT_VALUE_DATE_TIME])) {
                    $this->setDefaultValueDateTime(new FHIRDateTime(array_merge($ext, $data[self::FIELD_DEFAULT_VALUE_DATE_TIME])));
                }
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
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DEFAULT_VALUE_DECIMAL])) {
                    $this->setDefaultValueDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_DECIMAL]] + $ext));
                } else if (is_array($data[self::FIELD_DEFAULT_VALUE_DECIMAL])) {
                    $this->setDefaultValueDecimal(new FHIRDecimal(array_merge($ext, $data[self::FIELD_DEFAULT_VALUE_DECIMAL])));
                }
            } else {
                $this->setDefaultValueDecimal(new FHIRDecimal($data[self::FIELD_DEFAULT_VALUE_DECIMAL]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_DISTANCE])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_DISTANCE_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_DISTANCE_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_DISTANCE_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_DISTANCE] instanceof FHIRDistance) {
                $this->setDefaultValueDistance($data[self::FIELD_DEFAULT_VALUE_DISTANCE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DEFAULT_VALUE_DISTANCE])) {
                    $this->setDefaultValueDistance(new FHIRDistance([FHIRDistance::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_DISTANCE]] + $ext));
                } else if (is_array($data[self::FIELD_DEFAULT_VALUE_DISTANCE])) {
                    $this->setDefaultValueDistance(new FHIRDistance(array_merge($ext, $data[self::FIELD_DEFAULT_VALUE_DISTANCE])));
                }
            } else {
                $this->setDefaultValueDistance(new FHIRDistance($data[self::FIELD_DEFAULT_VALUE_DISTANCE]));
            }
        }
        if (isset($data[self::FIELD_DEFAULT_VALUE_DURATION])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_DURATION_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_DURATION_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_DURATION_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_DURATION] instanceof FHIRDuration) {
                $this->setDefaultValueDuration($data[self::FIELD_DEFAULT_VALUE_DURATION]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DEFAULT_VALUE_DURATION])) {
                    $this->setDefaultValueDuration(new FHIRDuration([FHIRDuration::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_DURATION]] + $ext));
                } else if (is_array($data[self::FIELD_DEFAULT_VALUE_DURATION])) {
                    $this->setDefaultValueDuration(new FHIRDuration(array_merge($ext, $data[self::FIELD_DEFAULT_VALUE_DURATION])));
                }
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
        if (isset($data[self::FIELD_DEFAULT_VALUE_ID])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_ID_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_ID_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_ID_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_ID] instanceof FHIRId) {
                $this->setDefaultValueId($data[self::FIELD_DEFAULT_VALUE_ID]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DEFAULT_VALUE_ID])) {
                    $this->setDefaultValueId(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_ID]] + $ext));
                } else if (is_array($data[self::FIELD_DEFAULT_VALUE_ID])) {
                    $this->setDefaultValueId(new FHIRId(array_merge($ext, $data[self::FIELD_DEFAULT_VALUE_ID])));
                }
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
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DEFAULT_VALUE_IDENTIFIER])) {
                    $this->setDefaultValueIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_IDENTIFIER]] + $ext));
                } else if (is_array($data[self::FIELD_DEFAULT_VALUE_IDENTIFIER])) {
                    $this->setDefaultValueIdentifier(new FHIRIdentifier(array_merge($ext, $data[self::FIELD_DEFAULT_VALUE_IDENTIFIER])));
                }
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
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DEFAULT_VALUE_INSTANT])) {
                    $this->setDefaultValueInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_INSTANT]] + $ext));
                } else if (is_array($data[self::FIELD_DEFAULT_VALUE_INSTANT])) {
                    $this->setDefaultValueInstant(new FHIRInstant(array_merge($ext, $data[self::FIELD_DEFAULT_VALUE_INSTANT])));
                }
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
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DEFAULT_VALUE_INTEGER])) {
                    $this->setDefaultValueInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_INTEGER]] + $ext));
                } else if (is_array($data[self::FIELD_DEFAULT_VALUE_INTEGER])) {
                    $this->setDefaultValueInteger(new FHIRInteger(array_merge($ext, $data[self::FIELD_DEFAULT_VALUE_INTEGER])));
                }
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
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DEFAULT_VALUE_MARKDOWN])) {
                    $this->setDefaultValueMarkdown(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_MARKDOWN]] + $ext));
                } else if (is_array($data[self::FIELD_DEFAULT_VALUE_MARKDOWN])) {
                    $this->setDefaultValueMarkdown(new FHIRMarkdown(array_merge($ext, $data[self::FIELD_DEFAULT_VALUE_MARKDOWN])));
                }
            } else {
                $this->setDefaultValueMarkdown(new FHIRMarkdown($data[self::FIELD_DEFAULT_VALUE_MARKDOWN]));
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
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_MONEY_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_MONEY_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_MONEY_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_MONEY] instanceof FHIRMoney) {
                $this->setDefaultValueMoney($data[self::FIELD_DEFAULT_VALUE_MONEY]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DEFAULT_VALUE_MONEY])) {
                    $this->setDefaultValueMoney(new FHIRMoney([FHIRMoney::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_MONEY]] + $ext));
                } else if (is_array($data[self::FIELD_DEFAULT_VALUE_MONEY])) {
                    $this->setDefaultValueMoney(new FHIRMoney(array_merge($ext, $data[self::FIELD_DEFAULT_VALUE_MONEY])));
                }
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
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DEFAULT_VALUE_OID])) {
                    $this->setDefaultValueOid(new FHIROid([FHIROid::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_OID]] + $ext));
                } else if (is_array($data[self::FIELD_DEFAULT_VALUE_OID])) {
                    $this->setDefaultValueOid(new FHIROid(array_merge($ext, $data[self::FIELD_DEFAULT_VALUE_OID])));
                }
            } else {
                $this->setDefaultValueOid(new FHIROid($data[self::FIELD_DEFAULT_VALUE_OID]));
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
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT])) {
                    $this->setDefaultValuePositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT]] + $ext));
                } else if (is_array($data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT])) {
                    $this->setDefaultValuePositiveInt(new FHIRPositiveInt(array_merge($ext, $data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT])));
                }
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
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DEFAULT_VALUE_QUANTITY])) {
                    $this->setDefaultValueQuantity(new FHIRQuantity([FHIRQuantity::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_QUANTITY]] + $ext));
                } else if (is_array($data[self::FIELD_DEFAULT_VALUE_QUANTITY])) {
                    $this->setDefaultValueQuantity(new FHIRQuantity(array_merge($ext, $data[self::FIELD_DEFAULT_VALUE_QUANTITY])));
                }
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
        if (isset($data[self::FIELD_DEFAULT_VALUE_STRING])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_STRING_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_STRING_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_STRING_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_STRING] instanceof FHIRString) {
                $this->setDefaultValueString($data[self::FIELD_DEFAULT_VALUE_STRING]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DEFAULT_VALUE_STRING])) {
                    $this->setDefaultValueString(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_STRING]] + $ext));
                } else if (is_array($data[self::FIELD_DEFAULT_VALUE_STRING])) {
                    $this->setDefaultValueString(new FHIRString(array_merge($ext, $data[self::FIELD_DEFAULT_VALUE_STRING])));
                }
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
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DEFAULT_VALUE_TIME])) {
                    $this->setDefaultValueTime(new FHIRTime([FHIRTime::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_TIME]] + $ext));
                } else if (is_array($data[self::FIELD_DEFAULT_VALUE_TIME])) {
                    $this->setDefaultValueTime(new FHIRTime(array_merge($ext, $data[self::FIELD_DEFAULT_VALUE_TIME])));
                }
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
        if (isset($data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT])) {
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT]))
                ? $data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT]
                : null;
            if ($data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] instanceof FHIRUnsignedInt) {
                $this->setDefaultValueUnsignedInt($data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT])) {
                    $this->setDefaultValueUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT]] + $ext));
                } else if (is_array($data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT])) {
                    $this->setDefaultValueUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT])));
                }
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
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DEFAULT_VALUE_URI])) {
                    $this->setDefaultValueUri(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_DEFAULT_VALUE_URI]] + $ext));
                } else if (is_array($data[self::FIELD_DEFAULT_VALUE_URI])) {
                    $this->setDefaultValueUri(new FHIRUri(array_merge($ext, $data[self::FIELD_DEFAULT_VALUE_URI])));
                }
            } else {
                $this->setDefaultValueUri(new FHIRUri($data[self::FIELD_DEFAULT_VALUE_URI]));
            }
        }
        if (isset($data[self::FIELD_DEFINITION])) {
            $ext = (isset($data[self::FIELD_DEFINITION_EXT]) && is_array($data[self::FIELD_DEFINITION_EXT]))
                ? $data[self::FIELD_DEFINITION_EXT]
                : null;
            if ($data[self::FIELD_DEFINITION] instanceof FHIRMarkdown) {
                $this->setDefinition($data[self::FIELD_DEFINITION]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DEFINITION])) {
                    $this->setDefinition(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_DEFINITION]] + $ext));
                } else if (is_array($data[self::FIELD_DEFINITION])) {
                    $this->setDefinition(new FHIRMarkdown(array_merge($ext, $data[self::FIELD_DEFINITION])));
                }
            } else {
                $this->setDefinition(new FHIRMarkdown($data[self::FIELD_DEFINITION]));
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
            $ext = (isset($data[self::FIELD_FIXED_AGE_EXT]) && is_array($data[self::FIELD_FIXED_AGE_EXT]))
                ? $data[self::FIELD_FIXED_AGE_EXT]
                : null;
            if ($data[self::FIELD_FIXED_AGE] instanceof FHIRAge) {
                $this->setFixedAge($data[self::FIELD_FIXED_AGE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_FIXED_AGE])) {
                    $this->setFixedAge(new FHIRAge([FHIRAge::FIELD_VALUE => $data[self::FIELD_FIXED_AGE]] + $ext));
                } else if (is_array($data[self::FIELD_FIXED_AGE])) {
                    $this->setFixedAge(new FHIRAge(array_merge($ext, $data[self::FIELD_FIXED_AGE])));
                }
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
        if (isset($data[self::FIELD_FIXED_BASE_64BINARY])) {
            $ext = (isset($data[self::FIELD_FIXED_BASE_64BINARY_EXT]) && is_array($data[self::FIELD_FIXED_BASE_64BINARY_EXT]))
                ? $data[self::FIELD_FIXED_BASE_64BINARY_EXT]
                : null;
            if ($data[self::FIELD_FIXED_BASE_64BINARY] instanceof FHIRBase64Binary) {
                $this->setFixedBase64Binary($data[self::FIELD_FIXED_BASE_64BINARY]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_FIXED_BASE_64BINARY])) {
                    $this->setFixedBase64Binary(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $data[self::FIELD_FIXED_BASE_64BINARY]] + $ext));
                } else if (is_array($data[self::FIELD_FIXED_BASE_64BINARY])) {
                    $this->setFixedBase64Binary(new FHIRBase64Binary(array_merge($ext, $data[self::FIELD_FIXED_BASE_64BINARY])));
                }
            } else {
                $this->setFixedBase64Binary(new FHIRBase64Binary($data[self::FIELD_FIXED_BASE_64BINARY]));
            }
        }
        if (isset($data[self::FIELD_FIXED_BOOLEAN])) {
            $ext = (isset($data[self::FIELD_FIXED_BOOLEAN_EXT]) && is_array($data[self::FIELD_FIXED_BOOLEAN_EXT]))
                ? $data[self::FIELD_FIXED_BOOLEAN_EXT]
                : null;
            if ($data[self::FIELD_FIXED_BOOLEAN] instanceof FHIRBoolean) {
                $this->setFixedBoolean($data[self::FIELD_FIXED_BOOLEAN]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_FIXED_BOOLEAN])) {
                    $this->setFixedBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_FIXED_BOOLEAN]] + $ext));
                } else if (is_array($data[self::FIELD_FIXED_BOOLEAN])) {
                    $this->setFixedBoolean(new FHIRBoolean(array_merge($ext, $data[self::FIELD_FIXED_BOOLEAN])));
                }
            } else {
                $this->setFixedBoolean(new FHIRBoolean($data[self::FIELD_FIXED_BOOLEAN]));
            }
        }
        if (isset($data[self::FIELD_FIXED_CODE])) {
            $ext = (isset($data[self::FIELD_FIXED_CODE_EXT]) && is_array($data[self::FIELD_FIXED_CODE_EXT]))
                ? $data[self::FIELD_FIXED_CODE_EXT]
                : null;
            if ($data[self::FIELD_FIXED_CODE] instanceof FHIRCode) {
                $this->setFixedCode($data[self::FIELD_FIXED_CODE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_FIXED_CODE])) {
                    $this->setFixedCode(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_FIXED_CODE]] + $ext));
                } else if (is_array($data[self::FIELD_FIXED_CODE])) {
                    $this->setFixedCode(new FHIRCode(array_merge($ext, $data[self::FIELD_FIXED_CODE])));
                }
            } else {
                $this->setFixedCode(new FHIRCode($data[self::FIELD_FIXED_CODE]));
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
            $ext = (isset($data[self::FIELD_FIXED_CONTACT_POINT_EXT]) && is_array($data[self::FIELD_FIXED_CONTACT_POINT_EXT]))
                ? $data[self::FIELD_FIXED_CONTACT_POINT_EXT]
                : null;
            if ($data[self::FIELD_FIXED_CONTACT_POINT] instanceof FHIRContactPoint) {
                $this->setFixedContactPoint($data[self::FIELD_FIXED_CONTACT_POINT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_FIXED_CONTACT_POINT])) {
                    $this->setFixedContactPoint(new FHIRContactPoint([FHIRContactPoint::FIELD_VALUE => $data[self::FIELD_FIXED_CONTACT_POINT]] + $ext));
                } else if (is_array($data[self::FIELD_FIXED_CONTACT_POINT])) {
                    $this->setFixedContactPoint(new FHIRContactPoint(array_merge($ext, $data[self::FIELD_FIXED_CONTACT_POINT])));
                }
            } else {
                $this->setFixedContactPoint(new FHIRContactPoint($data[self::FIELD_FIXED_CONTACT_POINT]));
            }
        }
        if (isset($data[self::FIELD_FIXED_COUNT])) {
            $ext = (isset($data[self::FIELD_FIXED_COUNT_EXT]) && is_array($data[self::FIELD_FIXED_COUNT_EXT]))
                ? $data[self::FIELD_FIXED_COUNT_EXT]
                : null;
            if ($data[self::FIELD_FIXED_COUNT] instanceof FHIRCount) {
                $this->setFixedCount($data[self::FIELD_FIXED_COUNT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_FIXED_COUNT])) {
                    $this->setFixedCount(new FHIRCount([FHIRCount::FIELD_VALUE => $data[self::FIELD_FIXED_COUNT]] + $ext));
                } else if (is_array($data[self::FIELD_FIXED_COUNT])) {
                    $this->setFixedCount(new FHIRCount(array_merge($ext, $data[self::FIELD_FIXED_COUNT])));
                }
            } else {
                $this->setFixedCount(new FHIRCount($data[self::FIELD_FIXED_COUNT]));
            }
        }
        if (isset($data[self::FIELD_FIXED_DATE])) {
            $ext = (isset($data[self::FIELD_FIXED_DATE_EXT]) && is_array($data[self::FIELD_FIXED_DATE_EXT]))
                ? $data[self::FIELD_FIXED_DATE_EXT]
                : null;
            if ($data[self::FIELD_FIXED_DATE] instanceof FHIRDate) {
                $this->setFixedDate($data[self::FIELD_FIXED_DATE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_FIXED_DATE])) {
                    $this->setFixedDate(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_FIXED_DATE]] + $ext));
                } else if (is_array($data[self::FIELD_FIXED_DATE])) {
                    $this->setFixedDate(new FHIRDate(array_merge($ext, $data[self::FIELD_FIXED_DATE])));
                }
            } else {
                $this->setFixedDate(new FHIRDate($data[self::FIELD_FIXED_DATE]));
            }
        }
        if (isset($data[self::FIELD_FIXED_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_FIXED_DATE_TIME_EXT]) && is_array($data[self::FIELD_FIXED_DATE_TIME_EXT]))
                ? $data[self::FIELD_FIXED_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_FIXED_DATE_TIME] instanceof FHIRDateTime) {
                $this->setFixedDateTime($data[self::FIELD_FIXED_DATE_TIME]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_FIXED_DATE_TIME])) {
                    $this->setFixedDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_FIXED_DATE_TIME]] + $ext));
                } else if (is_array($data[self::FIELD_FIXED_DATE_TIME])) {
                    $this->setFixedDateTime(new FHIRDateTime(array_merge($ext, $data[self::FIELD_FIXED_DATE_TIME])));
                }
            } else {
                $this->setFixedDateTime(new FHIRDateTime($data[self::FIELD_FIXED_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_FIXED_DECIMAL])) {
            $ext = (isset($data[self::FIELD_FIXED_DECIMAL_EXT]) && is_array($data[self::FIELD_FIXED_DECIMAL_EXT]))
                ? $data[self::FIELD_FIXED_DECIMAL_EXT]
                : null;
            if ($data[self::FIELD_FIXED_DECIMAL] instanceof FHIRDecimal) {
                $this->setFixedDecimal($data[self::FIELD_FIXED_DECIMAL]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_FIXED_DECIMAL])) {
                    $this->setFixedDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_FIXED_DECIMAL]] + $ext));
                } else if (is_array($data[self::FIELD_FIXED_DECIMAL])) {
                    $this->setFixedDecimal(new FHIRDecimal(array_merge($ext, $data[self::FIELD_FIXED_DECIMAL])));
                }
            } else {
                $this->setFixedDecimal(new FHIRDecimal($data[self::FIELD_FIXED_DECIMAL]));
            }
        }
        if (isset($data[self::FIELD_FIXED_DISTANCE])) {
            $ext = (isset($data[self::FIELD_FIXED_DISTANCE_EXT]) && is_array($data[self::FIELD_FIXED_DISTANCE_EXT]))
                ? $data[self::FIELD_FIXED_DISTANCE_EXT]
                : null;
            if ($data[self::FIELD_FIXED_DISTANCE] instanceof FHIRDistance) {
                $this->setFixedDistance($data[self::FIELD_FIXED_DISTANCE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_FIXED_DISTANCE])) {
                    $this->setFixedDistance(new FHIRDistance([FHIRDistance::FIELD_VALUE => $data[self::FIELD_FIXED_DISTANCE]] + $ext));
                } else if (is_array($data[self::FIELD_FIXED_DISTANCE])) {
                    $this->setFixedDistance(new FHIRDistance(array_merge($ext, $data[self::FIELD_FIXED_DISTANCE])));
                }
            } else {
                $this->setFixedDistance(new FHIRDistance($data[self::FIELD_FIXED_DISTANCE]));
            }
        }
        if (isset($data[self::FIELD_FIXED_DURATION])) {
            $ext = (isset($data[self::FIELD_FIXED_DURATION_EXT]) && is_array($data[self::FIELD_FIXED_DURATION_EXT]))
                ? $data[self::FIELD_FIXED_DURATION_EXT]
                : null;
            if ($data[self::FIELD_FIXED_DURATION] instanceof FHIRDuration) {
                $this->setFixedDuration($data[self::FIELD_FIXED_DURATION]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_FIXED_DURATION])) {
                    $this->setFixedDuration(new FHIRDuration([FHIRDuration::FIELD_VALUE => $data[self::FIELD_FIXED_DURATION]] + $ext));
                } else if (is_array($data[self::FIELD_FIXED_DURATION])) {
                    $this->setFixedDuration(new FHIRDuration(array_merge($ext, $data[self::FIELD_FIXED_DURATION])));
                }
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
        if (isset($data[self::FIELD_FIXED_ID])) {
            $ext = (isset($data[self::FIELD_FIXED_ID_EXT]) && is_array($data[self::FIELD_FIXED_ID_EXT]))
                ? $data[self::FIELD_FIXED_ID_EXT]
                : null;
            if ($data[self::FIELD_FIXED_ID] instanceof FHIRId) {
                $this->setFixedId($data[self::FIELD_FIXED_ID]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_FIXED_ID])) {
                    $this->setFixedId(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_FIXED_ID]] + $ext));
                } else if (is_array($data[self::FIELD_FIXED_ID])) {
                    $this->setFixedId(new FHIRId(array_merge($ext, $data[self::FIELD_FIXED_ID])));
                }
            } else {
                $this->setFixedId(new FHIRId($data[self::FIELD_FIXED_ID]));
            }
        }
        if (isset($data[self::FIELD_FIXED_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_FIXED_IDENTIFIER_EXT]) && is_array($data[self::FIELD_FIXED_IDENTIFIER_EXT]))
                ? $data[self::FIELD_FIXED_IDENTIFIER_EXT]
                : null;
            if ($data[self::FIELD_FIXED_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setFixedIdentifier($data[self::FIELD_FIXED_IDENTIFIER]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_FIXED_IDENTIFIER])) {
                    $this->setFixedIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_FIXED_IDENTIFIER]] + $ext));
                } else if (is_array($data[self::FIELD_FIXED_IDENTIFIER])) {
                    $this->setFixedIdentifier(new FHIRIdentifier(array_merge($ext, $data[self::FIELD_FIXED_IDENTIFIER])));
                }
            } else {
                $this->setFixedIdentifier(new FHIRIdentifier($data[self::FIELD_FIXED_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_FIXED_INSTANT])) {
            $ext = (isset($data[self::FIELD_FIXED_INSTANT_EXT]) && is_array($data[self::FIELD_FIXED_INSTANT_EXT]))
                ? $data[self::FIELD_FIXED_INSTANT_EXT]
                : null;
            if ($data[self::FIELD_FIXED_INSTANT] instanceof FHIRInstant) {
                $this->setFixedInstant($data[self::FIELD_FIXED_INSTANT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_FIXED_INSTANT])) {
                    $this->setFixedInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $data[self::FIELD_FIXED_INSTANT]] + $ext));
                } else if (is_array($data[self::FIELD_FIXED_INSTANT])) {
                    $this->setFixedInstant(new FHIRInstant(array_merge($ext, $data[self::FIELD_FIXED_INSTANT])));
                }
            } else {
                $this->setFixedInstant(new FHIRInstant($data[self::FIELD_FIXED_INSTANT]));
            }
        }
        if (isset($data[self::FIELD_FIXED_INTEGER])) {
            $ext = (isset($data[self::FIELD_FIXED_INTEGER_EXT]) && is_array($data[self::FIELD_FIXED_INTEGER_EXT]))
                ? $data[self::FIELD_FIXED_INTEGER_EXT]
                : null;
            if ($data[self::FIELD_FIXED_INTEGER] instanceof FHIRInteger) {
                $this->setFixedInteger($data[self::FIELD_FIXED_INTEGER]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_FIXED_INTEGER])) {
                    $this->setFixedInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_FIXED_INTEGER]] + $ext));
                } else if (is_array($data[self::FIELD_FIXED_INTEGER])) {
                    $this->setFixedInteger(new FHIRInteger(array_merge($ext, $data[self::FIELD_FIXED_INTEGER])));
                }
            } else {
                $this->setFixedInteger(new FHIRInteger($data[self::FIELD_FIXED_INTEGER]));
            }
        }
        if (isset($data[self::FIELD_FIXED_MARKDOWN])) {
            $ext = (isset($data[self::FIELD_FIXED_MARKDOWN_EXT]) && is_array($data[self::FIELD_FIXED_MARKDOWN_EXT]))
                ? $data[self::FIELD_FIXED_MARKDOWN_EXT]
                : null;
            if ($data[self::FIELD_FIXED_MARKDOWN] instanceof FHIRMarkdown) {
                $this->setFixedMarkdown($data[self::FIELD_FIXED_MARKDOWN]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_FIXED_MARKDOWN])) {
                    $this->setFixedMarkdown(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_FIXED_MARKDOWN]] + $ext));
                } else if (is_array($data[self::FIELD_FIXED_MARKDOWN])) {
                    $this->setFixedMarkdown(new FHIRMarkdown(array_merge($ext, $data[self::FIELD_FIXED_MARKDOWN])));
                }
            } else {
                $this->setFixedMarkdown(new FHIRMarkdown($data[self::FIELD_FIXED_MARKDOWN]));
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
            $ext = (isset($data[self::FIELD_FIXED_MONEY_EXT]) && is_array($data[self::FIELD_FIXED_MONEY_EXT]))
                ? $data[self::FIELD_FIXED_MONEY_EXT]
                : null;
            if ($data[self::FIELD_FIXED_MONEY] instanceof FHIRMoney) {
                $this->setFixedMoney($data[self::FIELD_FIXED_MONEY]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_FIXED_MONEY])) {
                    $this->setFixedMoney(new FHIRMoney([FHIRMoney::FIELD_VALUE => $data[self::FIELD_FIXED_MONEY]] + $ext));
                } else if (is_array($data[self::FIELD_FIXED_MONEY])) {
                    $this->setFixedMoney(new FHIRMoney(array_merge($ext, $data[self::FIELD_FIXED_MONEY])));
                }
            } else {
                $this->setFixedMoney(new FHIRMoney($data[self::FIELD_FIXED_MONEY]));
            }
        }
        if (isset($data[self::FIELD_FIXED_OID])) {
            $ext = (isset($data[self::FIELD_FIXED_OID_EXT]) && is_array($data[self::FIELD_FIXED_OID_EXT]))
                ? $data[self::FIELD_FIXED_OID_EXT]
                : null;
            if ($data[self::FIELD_FIXED_OID] instanceof FHIROid) {
                $this->setFixedOid($data[self::FIELD_FIXED_OID]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_FIXED_OID])) {
                    $this->setFixedOid(new FHIROid([FHIROid::FIELD_VALUE => $data[self::FIELD_FIXED_OID]] + $ext));
                } else if (is_array($data[self::FIELD_FIXED_OID])) {
                    $this->setFixedOid(new FHIROid(array_merge($ext, $data[self::FIELD_FIXED_OID])));
                }
            } else {
                $this->setFixedOid(new FHIROid($data[self::FIELD_FIXED_OID]));
            }
        }
        if (isset($data[self::FIELD_FIXED_PERIOD])) {
            if ($data[self::FIELD_FIXED_PERIOD] instanceof FHIRPeriod) {
                $this->setFixedPeriod($data[self::FIELD_FIXED_PERIOD]);
            } else {
                $this->setFixedPeriod(new FHIRPeriod($data[self::FIELD_FIXED_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_FIXED_POSITIVE_INT])) {
            $ext = (isset($data[self::FIELD_FIXED_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_FIXED_POSITIVE_INT_EXT]))
                ? $data[self::FIELD_FIXED_POSITIVE_INT_EXT]
                : null;
            if ($data[self::FIELD_FIXED_POSITIVE_INT] instanceof FHIRPositiveInt) {
                $this->setFixedPositiveInt($data[self::FIELD_FIXED_POSITIVE_INT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_FIXED_POSITIVE_INT])) {
                    $this->setFixedPositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_FIXED_POSITIVE_INT]] + $ext));
                } else if (is_array($data[self::FIELD_FIXED_POSITIVE_INT])) {
                    $this->setFixedPositiveInt(new FHIRPositiveInt(array_merge($ext, $data[self::FIELD_FIXED_POSITIVE_INT])));
                }
            } else {
                $this->setFixedPositiveInt(new FHIRPositiveInt($data[self::FIELD_FIXED_POSITIVE_INT]));
            }
        }
        if (isset($data[self::FIELD_FIXED_QUANTITY])) {
            $ext = (isset($data[self::FIELD_FIXED_QUANTITY_EXT]) && is_array($data[self::FIELD_FIXED_QUANTITY_EXT]))
                ? $data[self::FIELD_FIXED_QUANTITY_EXT]
                : null;
            if ($data[self::FIELD_FIXED_QUANTITY] instanceof FHIRQuantity) {
                $this->setFixedQuantity($data[self::FIELD_FIXED_QUANTITY]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_FIXED_QUANTITY])) {
                    $this->setFixedQuantity(new FHIRQuantity([FHIRQuantity::FIELD_VALUE => $data[self::FIELD_FIXED_QUANTITY]] + $ext));
                } else if (is_array($data[self::FIELD_FIXED_QUANTITY])) {
                    $this->setFixedQuantity(new FHIRQuantity(array_merge($ext, $data[self::FIELD_FIXED_QUANTITY])));
                }
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
        if (isset($data[self::FIELD_FIXED_STRING])) {
            $ext = (isset($data[self::FIELD_FIXED_STRING_EXT]) && is_array($data[self::FIELD_FIXED_STRING_EXT]))
                ? $data[self::FIELD_FIXED_STRING_EXT]
                : null;
            if ($data[self::FIELD_FIXED_STRING] instanceof FHIRString) {
                $this->setFixedString($data[self::FIELD_FIXED_STRING]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_FIXED_STRING])) {
                    $this->setFixedString(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_FIXED_STRING]] + $ext));
                } else if (is_array($data[self::FIELD_FIXED_STRING])) {
                    $this->setFixedString(new FHIRString(array_merge($ext, $data[self::FIELD_FIXED_STRING])));
                }
            } else {
                $this->setFixedString(new FHIRString($data[self::FIELD_FIXED_STRING]));
            }
        }
        if (isset($data[self::FIELD_FIXED_TIME])) {
            $ext = (isset($data[self::FIELD_FIXED_TIME_EXT]) && is_array($data[self::FIELD_FIXED_TIME_EXT]))
                ? $data[self::FIELD_FIXED_TIME_EXT]
                : null;
            if ($data[self::FIELD_FIXED_TIME] instanceof FHIRTime) {
                $this->setFixedTime($data[self::FIELD_FIXED_TIME]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_FIXED_TIME])) {
                    $this->setFixedTime(new FHIRTime([FHIRTime::FIELD_VALUE => $data[self::FIELD_FIXED_TIME]] + $ext));
                } else if (is_array($data[self::FIELD_FIXED_TIME])) {
                    $this->setFixedTime(new FHIRTime(array_merge($ext, $data[self::FIELD_FIXED_TIME])));
                }
            } else {
                $this->setFixedTime(new FHIRTime($data[self::FIELD_FIXED_TIME]));
            }
        }
        if (isset($data[self::FIELD_FIXED_TIMING])) {
            if ($data[self::FIELD_FIXED_TIMING] instanceof FHIRTiming) {
                $this->setFixedTiming($data[self::FIELD_FIXED_TIMING]);
            } else {
                $this->setFixedTiming(new FHIRTiming($data[self::FIELD_FIXED_TIMING]));
            }
        }
        if (isset($data[self::FIELD_FIXED_UNSIGNED_INT])) {
            $ext = (isset($data[self::FIELD_FIXED_UNSIGNED_INT_EXT]) && is_array($data[self::FIELD_FIXED_UNSIGNED_INT_EXT]))
                ? $data[self::FIELD_FIXED_UNSIGNED_INT_EXT]
                : null;
            if ($data[self::FIELD_FIXED_UNSIGNED_INT] instanceof FHIRUnsignedInt) {
                $this->setFixedUnsignedInt($data[self::FIELD_FIXED_UNSIGNED_INT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_FIXED_UNSIGNED_INT])) {
                    $this->setFixedUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $data[self::FIELD_FIXED_UNSIGNED_INT]] + $ext));
                } else if (is_array($data[self::FIELD_FIXED_UNSIGNED_INT])) {
                    $this->setFixedUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $data[self::FIELD_FIXED_UNSIGNED_INT])));
                }
            } else {
                $this->setFixedUnsignedInt(new FHIRUnsignedInt($data[self::FIELD_FIXED_UNSIGNED_INT]));
            }
        }
        if (isset($data[self::FIELD_FIXED_URI])) {
            $ext = (isset($data[self::FIELD_FIXED_URI_EXT]) && is_array($data[self::FIELD_FIXED_URI_EXT]))
                ? $data[self::FIELD_FIXED_URI_EXT]
                : null;
            if ($data[self::FIELD_FIXED_URI] instanceof FHIRUri) {
                $this->setFixedUri($data[self::FIELD_FIXED_URI]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_FIXED_URI])) {
                    $this->setFixedUri(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_FIXED_URI]] + $ext));
                } else if (is_array($data[self::FIELD_FIXED_URI])) {
                    $this->setFixedUri(new FHIRUri(array_merge($ext, $data[self::FIELD_FIXED_URI])));
                }
            } else {
                $this->setFixedUri(new FHIRUri($data[self::FIELD_FIXED_URI]));
            }
        }
        if (isset($data[self::FIELD_IS_MODIFIER])) {
            $ext = (isset($data[self::FIELD_IS_MODIFIER_EXT]) && is_array($data[self::FIELD_IS_MODIFIER_EXT]))
                ? $data[self::FIELD_IS_MODIFIER_EXT]
                : null;
            if ($data[self::FIELD_IS_MODIFIER] instanceof FHIRBoolean) {
                $this->setIsModifier($data[self::FIELD_IS_MODIFIER]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_IS_MODIFIER])) {
                    $this->setIsModifier(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_IS_MODIFIER]] + $ext));
                } else if (is_array($data[self::FIELD_IS_MODIFIER])) {
                    $this->setIsModifier(new FHIRBoolean(array_merge($ext, $data[self::FIELD_IS_MODIFIER])));
                }
            } else {
                $this->setIsModifier(new FHIRBoolean($data[self::FIELD_IS_MODIFIER]));
            }
        }
        if (isset($data[self::FIELD_IS_SUMMARY])) {
            $ext = (isset($data[self::FIELD_IS_SUMMARY_EXT]) && is_array($data[self::FIELD_IS_SUMMARY_EXT]))
                ? $data[self::FIELD_IS_SUMMARY_EXT]
                : null;
            if ($data[self::FIELD_IS_SUMMARY] instanceof FHIRBoolean) {
                $this->setIsSummary($data[self::FIELD_IS_SUMMARY]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_IS_SUMMARY])) {
                    $this->setIsSummary(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_IS_SUMMARY]] + $ext));
                } else if (is_array($data[self::FIELD_IS_SUMMARY])) {
                    $this->setIsSummary(new FHIRBoolean(array_merge($ext, $data[self::FIELD_IS_SUMMARY])));
                }
            } else {
                $this->setIsSummary(new FHIRBoolean($data[self::FIELD_IS_SUMMARY]));
            }
        }
        if (isset($data[self::FIELD_LABEL])) {
            $ext = (isset($data[self::FIELD_LABEL_EXT]) && is_array($data[self::FIELD_LABEL_EXT]))
                ? $data[self::FIELD_LABEL_EXT]
                : null;
            if ($data[self::FIELD_LABEL] instanceof FHIRString) {
                $this->setLabel($data[self::FIELD_LABEL]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_LABEL])) {
                    $this->setLabel(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_LABEL]] + $ext));
                } else if (is_array($data[self::FIELD_LABEL])) {
                    $this->setLabel(new FHIRString(array_merge($ext, $data[self::FIELD_LABEL])));
                }
            } else {
                $this->setLabel(new FHIRString($data[self::FIELD_LABEL]));
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
        if (isset($data[self::FIELD_MAX])) {
            $ext = (isset($data[self::FIELD_MAX_EXT]) && is_array($data[self::FIELD_MAX_EXT]))
                ? $data[self::FIELD_MAX_EXT]
                : null;
            if ($data[self::FIELD_MAX] instanceof FHIRString) {
                $this->setMax($data[self::FIELD_MAX]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_MAX])) {
                    $this->setMax(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_MAX]] + $ext));
                } else if (is_array($data[self::FIELD_MAX])) {
                    $this->setMax(new FHIRString(array_merge($ext, $data[self::FIELD_MAX])));
                }
            } else {
                $this->setMax(new FHIRString($data[self::FIELD_MAX]));
            }
        }
        if (isset($data[self::FIELD_MAX_LENGTH])) {
            $ext = (isset($data[self::FIELD_MAX_LENGTH_EXT]) && is_array($data[self::FIELD_MAX_LENGTH_EXT]))
                ? $data[self::FIELD_MAX_LENGTH_EXT]
                : null;
            if ($data[self::FIELD_MAX_LENGTH] instanceof FHIRInteger) {
                $this->setMaxLength($data[self::FIELD_MAX_LENGTH]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_MAX_LENGTH])) {
                    $this->setMaxLength(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_MAX_LENGTH]] + $ext));
                } else if (is_array($data[self::FIELD_MAX_LENGTH])) {
                    $this->setMaxLength(new FHIRInteger(array_merge($ext, $data[self::FIELD_MAX_LENGTH])));
                }
            } else {
                $this->setMaxLength(new FHIRInteger($data[self::FIELD_MAX_LENGTH]));
            }
        }
        if (isset($data[self::FIELD_MAX_VALUE_DATE])) {
            $ext = (isset($data[self::FIELD_MAX_VALUE_DATE_EXT]) && is_array($data[self::FIELD_MAX_VALUE_DATE_EXT]))
                ? $data[self::FIELD_MAX_VALUE_DATE_EXT]
                : null;
            if ($data[self::FIELD_MAX_VALUE_DATE] instanceof FHIRDate) {
                $this->setMaxValueDate($data[self::FIELD_MAX_VALUE_DATE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_MAX_VALUE_DATE])) {
                    $this->setMaxValueDate(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_MAX_VALUE_DATE]] + $ext));
                } else if (is_array($data[self::FIELD_MAX_VALUE_DATE])) {
                    $this->setMaxValueDate(new FHIRDate(array_merge($ext, $data[self::FIELD_MAX_VALUE_DATE])));
                }
            } else {
                $this->setMaxValueDate(new FHIRDate($data[self::FIELD_MAX_VALUE_DATE]));
            }
        }
        if (isset($data[self::FIELD_MAX_VALUE_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_MAX_VALUE_DATE_TIME_EXT]) && is_array($data[self::FIELD_MAX_VALUE_DATE_TIME_EXT]))
                ? $data[self::FIELD_MAX_VALUE_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_MAX_VALUE_DATE_TIME] instanceof FHIRDateTime) {
                $this->setMaxValueDateTime($data[self::FIELD_MAX_VALUE_DATE_TIME]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_MAX_VALUE_DATE_TIME])) {
                    $this->setMaxValueDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_MAX_VALUE_DATE_TIME]] + $ext));
                } else if (is_array($data[self::FIELD_MAX_VALUE_DATE_TIME])) {
                    $this->setMaxValueDateTime(new FHIRDateTime(array_merge($ext, $data[self::FIELD_MAX_VALUE_DATE_TIME])));
                }
            } else {
                $this->setMaxValueDateTime(new FHIRDateTime($data[self::FIELD_MAX_VALUE_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_MAX_VALUE_DECIMAL])) {
            $ext = (isset($data[self::FIELD_MAX_VALUE_DECIMAL_EXT]) && is_array($data[self::FIELD_MAX_VALUE_DECIMAL_EXT]))
                ? $data[self::FIELD_MAX_VALUE_DECIMAL_EXT]
                : null;
            if ($data[self::FIELD_MAX_VALUE_DECIMAL] instanceof FHIRDecimal) {
                $this->setMaxValueDecimal($data[self::FIELD_MAX_VALUE_DECIMAL]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_MAX_VALUE_DECIMAL])) {
                    $this->setMaxValueDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_MAX_VALUE_DECIMAL]] + $ext));
                } else if (is_array($data[self::FIELD_MAX_VALUE_DECIMAL])) {
                    $this->setMaxValueDecimal(new FHIRDecimal(array_merge($ext, $data[self::FIELD_MAX_VALUE_DECIMAL])));
                }
            } else {
                $this->setMaxValueDecimal(new FHIRDecimal($data[self::FIELD_MAX_VALUE_DECIMAL]));
            }
        }
        if (isset($data[self::FIELD_MAX_VALUE_INSTANT])) {
            $ext = (isset($data[self::FIELD_MAX_VALUE_INSTANT_EXT]) && is_array($data[self::FIELD_MAX_VALUE_INSTANT_EXT]))
                ? $data[self::FIELD_MAX_VALUE_INSTANT_EXT]
                : null;
            if ($data[self::FIELD_MAX_VALUE_INSTANT] instanceof FHIRInstant) {
                $this->setMaxValueInstant($data[self::FIELD_MAX_VALUE_INSTANT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_MAX_VALUE_INSTANT])) {
                    $this->setMaxValueInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $data[self::FIELD_MAX_VALUE_INSTANT]] + $ext));
                } else if (is_array($data[self::FIELD_MAX_VALUE_INSTANT])) {
                    $this->setMaxValueInstant(new FHIRInstant(array_merge($ext, $data[self::FIELD_MAX_VALUE_INSTANT])));
                }
            } else {
                $this->setMaxValueInstant(new FHIRInstant($data[self::FIELD_MAX_VALUE_INSTANT]));
            }
        }
        if (isset($data[self::FIELD_MAX_VALUE_INTEGER])) {
            $ext = (isset($data[self::FIELD_MAX_VALUE_INTEGER_EXT]) && is_array($data[self::FIELD_MAX_VALUE_INTEGER_EXT]))
                ? $data[self::FIELD_MAX_VALUE_INTEGER_EXT]
                : null;
            if ($data[self::FIELD_MAX_VALUE_INTEGER] instanceof FHIRInteger) {
                $this->setMaxValueInteger($data[self::FIELD_MAX_VALUE_INTEGER]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_MAX_VALUE_INTEGER])) {
                    $this->setMaxValueInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_MAX_VALUE_INTEGER]] + $ext));
                } else if (is_array($data[self::FIELD_MAX_VALUE_INTEGER])) {
                    $this->setMaxValueInteger(new FHIRInteger(array_merge($ext, $data[self::FIELD_MAX_VALUE_INTEGER])));
                }
            } else {
                $this->setMaxValueInteger(new FHIRInteger($data[self::FIELD_MAX_VALUE_INTEGER]));
            }
        }
        if (isset($data[self::FIELD_MAX_VALUE_POSITIVE_INT])) {
            $ext = (isset($data[self::FIELD_MAX_VALUE_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_MAX_VALUE_POSITIVE_INT_EXT]))
                ? $data[self::FIELD_MAX_VALUE_POSITIVE_INT_EXT]
                : null;
            if ($data[self::FIELD_MAX_VALUE_POSITIVE_INT] instanceof FHIRPositiveInt) {
                $this->setMaxValuePositiveInt($data[self::FIELD_MAX_VALUE_POSITIVE_INT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_MAX_VALUE_POSITIVE_INT])) {
                    $this->setMaxValuePositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_MAX_VALUE_POSITIVE_INT]] + $ext));
                } else if (is_array($data[self::FIELD_MAX_VALUE_POSITIVE_INT])) {
                    $this->setMaxValuePositiveInt(new FHIRPositiveInt(array_merge($ext, $data[self::FIELD_MAX_VALUE_POSITIVE_INT])));
                }
            } else {
                $this->setMaxValuePositiveInt(new FHIRPositiveInt($data[self::FIELD_MAX_VALUE_POSITIVE_INT]));
            }
        }
        if (isset($data[self::FIELD_MAX_VALUE_QUANTITY])) {
            $ext = (isset($data[self::FIELD_MAX_VALUE_QUANTITY_EXT]) && is_array($data[self::FIELD_MAX_VALUE_QUANTITY_EXT]))
                ? $data[self::FIELD_MAX_VALUE_QUANTITY_EXT]
                : null;
            if ($data[self::FIELD_MAX_VALUE_QUANTITY] instanceof FHIRQuantity) {
                $this->setMaxValueQuantity($data[self::FIELD_MAX_VALUE_QUANTITY]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_MAX_VALUE_QUANTITY])) {
                    $this->setMaxValueQuantity(new FHIRQuantity([FHIRQuantity::FIELD_VALUE => $data[self::FIELD_MAX_VALUE_QUANTITY]] + $ext));
                } else if (is_array($data[self::FIELD_MAX_VALUE_QUANTITY])) {
                    $this->setMaxValueQuantity(new FHIRQuantity(array_merge($ext, $data[self::FIELD_MAX_VALUE_QUANTITY])));
                }
            } else {
                $this->setMaxValueQuantity(new FHIRQuantity($data[self::FIELD_MAX_VALUE_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_MAX_VALUE_TIME])) {
            $ext = (isset($data[self::FIELD_MAX_VALUE_TIME_EXT]) && is_array($data[self::FIELD_MAX_VALUE_TIME_EXT]))
                ? $data[self::FIELD_MAX_VALUE_TIME_EXT]
                : null;
            if ($data[self::FIELD_MAX_VALUE_TIME] instanceof FHIRTime) {
                $this->setMaxValueTime($data[self::FIELD_MAX_VALUE_TIME]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_MAX_VALUE_TIME])) {
                    $this->setMaxValueTime(new FHIRTime([FHIRTime::FIELD_VALUE => $data[self::FIELD_MAX_VALUE_TIME]] + $ext));
                } else if (is_array($data[self::FIELD_MAX_VALUE_TIME])) {
                    $this->setMaxValueTime(new FHIRTime(array_merge($ext, $data[self::FIELD_MAX_VALUE_TIME])));
                }
            } else {
                $this->setMaxValueTime(new FHIRTime($data[self::FIELD_MAX_VALUE_TIME]));
            }
        }
        if (isset($data[self::FIELD_MAX_VALUE_UNSIGNED_INT])) {
            $ext = (isset($data[self::FIELD_MAX_VALUE_UNSIGNED_INT_EXT]) && is_array($data[self::FIELD_MAX_VALUE_UNSIGNED_INT_EXT]))
                ? $data[self::FIELD_MAX_VALUE_UNSIGNED_INT_EXT]
                : null;
            if ($data[self::FIELD_MAX_VALUE_UNSIGNED_INT] instanceof FHIRUnsignedInt) {
                $this->setMaxValueUnsignedInt($data[self::FIELD_MAX_VALUE_UNSIGNED_INT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_MAX_VALUE_UNSIGNED_INT])) {
                    $this->setMaxValueUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $data[self::FIELD_MAX_VALUE_UNSIGNED_INT]] + $ext));
                } else if (is_array($data[self::FIELD_MAX_VALUE_UNSIGNED_INT])) {
                    $this->setMaxValueUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $data[self::FIELD_MAX_VALUE_UNSIGNED_INT])));
                }
            } else {
                $this->setMaxValueUnsignedInt(new FHIRUnsignedInt($data[self::FIELD_MAX_VALUE_UNSIGNED_INT]));
            }
        }
        if (isset($data[self::FIELD_MEANING_WHEN_MISSING])) {
            $ext = (isset($data[self::FIELD_MEANING_WHEN_MISSING_EXT]) && is_array($data[self::FIELD_MEANING_WHEN_MISSING_EXT]))
                ? $data[self::FIELD_MEANING_WHEN_MISSING_EXT]
                : null;
            if ($data[self::FIELD_MEANING_WHEN_MISSING] instanceof FHIRMarkdown) {
                $this->setMeaningWhenMissing($data[self::FIELD_MEANING_WHEN_MISSING]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_MEANING_WHEN_MISSING])) {
                    $this->setMeaningWhenMissing(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_MEANING_WHEN_MISSING]] + $ext));
                } else if (is_array($data[self::FIELD_MEANING_WHEN_MISSING])) {
                    $this->setMeaningWhenMissing(new FHIRMarkdown(array_merge($ext, $data[self::FIELD_MEANING_WHEN_MISSING])));
                }
            } else {
                $this->setMeaningWhenMissing(new FHIRMarkdown($data[self::FIELD_MEANING_WHEN_MISSING]));
            }
        }
        if (isset($data[self::FIELD_MIN])) {
            $ext = (isset($data[self::FIELD_MIN_EXT]) && is_array($data[self::FIELD_MIN_EXT]))
                ? $data[self::FIELD_MIN_EXT]
                : null;
            if ($data[self::FIELD_MIN] instanceof FHIRUnsignedInt) {
                $this->setMin($data[self::FIELD_MIN]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_MIN])) {
                    $this->setMin(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $data[self::FIELD_MIN]] + $ext));
                } else if (is_array($data[self::FIELD_MIN])) {
                    $this->setMin(new FHIRUnsignedInt(array_merge($ext, $data[self::FIELD_MIN])));
                }
            } else {
                $this->setMin(new FHIRUnsignedInt($data[self::FIELD_MIN]));
            }
        }
        if (isset($data[self::FIELD_MIN_VALUE_DATE])) {
            $ext = (isset($data[self::FIELD_MIN_VALUE_DATE_EXT]) && is_array($data[self::FIELD_MIN_VALUE_DATE_EXT]))
                ? $data[self::FIELD_MIN_VALUE_DATE_EXT]
                : null;
            if ($data[self::FIELD_MIN_VALUE_DATE] instanceof FHIRDate) {
                $this->setMinValueDate($data[self::FIELD_MIN_VALUE_DATE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_MIN_VALUE_DATE])) {
                    $this->setMinValueDate(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_MIN_VALUE_DATE]] + $ext));
                } else if (is_array($data[self::FIELD_MIN_VALUE_DATE])) {
                    $this->setMinValueDate(new FHIRDate(array_merge($ext, $data[self::FIELD_MIN_VALUE_DATE])));
                }
            } else {
                $this->setMinValueDate(new FHIRDate($data[self::FIELD_MIN_VALUE_DATE]));
            }
        }
        if (isset($data[self::FIELD_MIN_VALUE_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_MIN_VALUE_DATE_TIME_EXT]) && is_array($data[self::FIELD_MIN_VALUE_DATE_TIME_EXT]))
                ? $data[self::FIELD_MIN_VALUE_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_MIN_VALUE_DATE_TIME] instanceof FHIRDateTime) {
                $this->setMinValueDateTime($data[self::FIELD_MIN_VALUE_DATE_TIME]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_MIN_VALUE_DATE_TIME])) {
                    $this->setMinValueDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_MIN_VALUE_DATE_TIME]] + $ext));
                } else if (is_array($data[self::FIELD_MIN_VALUE_DATE_TIME])) {
                    $this->setMinValueDateTime(new FHIRDateTime(array_merge($ext, $data[self::FIELD_MIN_VALUE_DATE_TIME])));
                }
            } else {
                $this->setMinValueDateTime(new FHIRDateTime($data[self::FIELD_MIN_VALUE_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_MIN_VALUE_DECIMAL])) {
            $ext = (isset($data[self::FIELD_MIN_VALUE_DECIMAL_EXT]) && is_array($data[self::FIELD_MIN_VALUE_DECIMAL_EXT]))
                ? $data[self::FIELD_MIN_VALUE_DECIMAL_EXT]
                : null;
            if ($data[self::FIELD_MIN_VALUE_DECIMAL] instanceof FHIRDecimal) {
                $this->setMinValueDecimal($data[self::FIELD_MIN_VALUE_DECIMAL]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_MIN_VALUE_DECIMAL])) {
                    $this->setMinValueDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_MIN_VALUE_DECIMAL]] + $ext));
                } else if (is_array($data[self::FIELD_MIN_VALUE_DECIMAL])) {
                    $this->setMinValueDecimal(new FHIRDecimal(array_merge($ext, $data[self::FIELD_MIN_VALUE_DECIMAL])));
                }
            } else {
                $this->setMinValueDecimal(new FHIRDecimal($data[self::FIELD_MIN_VALUE_DECIMAL]));
            }
        }
        if (isset($data[self::FIELD_MIN_VALUE_INSTANT])) {
            $ext = (isset($data[self::FIELD_MIN_VALUE_INSTANT_EXT]) && is_array($data[self::FIELD_MIN_VALUE_INSTANT_EXT]))
                ? $data[self::FIELD_MIN_VALUE_INSTANT_EXT]
                : null;
            if ($data[self::FIELD_MIN_VALUE_INSTANT] instanceof FHIRInstant) {
                $this->setMinValueInstant($data[self::FIELD_MIN_VALUE_INSTANT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_MIN_VALUE_INSTANT])) {
                    $this->setMinValueInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $data[self::FIELD_MIN_VALUE_INSTANT]] + $ext));
                } else if (is_array($data[self::FIELD_MIN_VALUE_INSTANT])) {
                    $this->setMinValueInstant(new FHIRInstant(array_merge($ext, $data[self::FIELD_MIN_VALUE_INSTANT])));
                }
            } else {
                $this->setMinValueInstant(new FHIRInstant($data[self::FIELD_MIN_VALUE_INSTANT]));
            }
        }
        if (isset($data[self::FIELD_MIN_VALUE_INTEGER])) {
            $ext = (isset($data[self::FIELD_MIN_VALUE_INTEGER_EXT]) && is_array($data[self::FIELD_MIN_VALUE_INTEGER_EXT]))
                ? $data[self::FIELD_MIN_VALUE_INTEGER_EXT]
                : null;
            if ($data[self::FIELD_MIN_VALUE_INTEGER] instanceof FHIRInteger) {
                $this->setMinValueInteger($data[self::FIELD_MIN_VALUE_INTEGER]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_MIN_VALUE_INTEGER])) {
                    $this->setMinValueInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_MIN_VALUE_INTEGER]] + $ext));
                } else if (is_array($data[self::FIELD_MIN_VALUE_INTEGER])) {
                    $this->setMinValueInteger(new FHIRInteger(array_merge($ext, $data[self::FIELD_MIN_VALUE_INTEGER])));
                }
            } else {
                $this->setMinValueInteger(new FHIRInteger($data[self::FIELD_MIN_VALUE_INTEGER]));
            }
        }
        if (isset($data[self::FIELD_MIN_VALUE_POSITIVE_INT])) {
            $ext = (isset($data[self::FIELD_MIN_VALUE_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_MIN_VALUE_POSITIVE_INT_EXT]))
                ? $data[self::FIELD_MIN_VALUE_POSITIVE_INT_EXT]
                : null;
            if ($data[self::FIELD_MIN_VALUE_POSITIVE_INT] instanceof FHIRPositiveInt) {
                $this->setMinValuePositiveInt($data[self::FIELD_MIN_VALUE_POSITIVE_INT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_MIN_VALUE_POSITIVE_INT])) {
                    $this->setMinValuePositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_MIN_VALUE_POSITIVE_INT]] + $ext));
                } else if (is_array($data[self::FIELD_MIN_VALUE_POSITIVE_INT])) {
                    $this->setMinValuePositiveInt(new FHIRPositiveInt(array_merge($ext, $data[self::FIELD_MIN_VALUE_POSITIVE_INT])));
                }
            } else {
                $this->setMinValuePositiveInt(new FHIRPositiveInt($data[self::FIELD_MIN_VALUE_POSITIVE_INT]));
            }
        }
        if (isset($data[self::FIELD_MIN_VALUE_QUANTITY])) {
            $ext = (isset($data[self::FIELD_MIN_VALUE_QUANTITY_EXT]) && is_array($data[self::FIELD_MIN_VALUE_QUANTITY_EXT]))
                ? $data[self::FIELD_MIN_VALUE_QUANTITY_EXT]
                : null;
            if ($data[self::FIELD_MIN_VALUE_QUANTITY] instanceof FHIRQuantity) {
                $this->setMinValueQuantity($data[self::FIELD_MIN_VALUE_QUANTITY]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_MIN_VALUE_QUANTITY])) {
                    $this->setMinValueQuantity(new FHIRQuantity([FHIRQuantity::FIELD_VALUE => $data[self::FIELD_MIN_VALUE_QUANTITY]] + $ext));
                } else if (is_array($data[self::FIELD_MIN_VALUE_QUANTITY])) {
                    $this->setMinValueQuantity(new FHIRQuantity(array_merge($ext, $data[self::FIELD_MIN_VALUE_QUANTITY])));
                }
            } else {
                $this->setMinValueQuantity(new FHIRQuantity($data[self::FIELD_MIN_VALUE_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_MIN_VALUE_TIME])) {
            $ext = (isset($data[self::FIELD_MIN_VALUE_TIME_EXT]) && is_array($data[self::FIELD_MIN_VALUE_TIME_EXT]))
                ? $data[self::FIELD_MIN_VALUE_TIME_EXT]
                : null;
            if ($data[self::FIELD_MIN_VALUE_TIME] instanceof FHIRTime) {
                $this->setMinValueTime($data[self::FIELD_MIN_VALUE_TIME]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_MIN_VALUE_TIME])) {
                    $this->setMinValueTime(new FHIRTime([FHIRTime::FIELD_VALUE => $data[self::FIELD_MIN_VALUE_TIME]] + $ext));
                } else if (is_array($data[self::FIELD_MIN_VALUE_TIME])) {
                    $this->setMinValueTime(new FHIRTime(array_merge($ext, $data[self::FIELD_MIN_VALUE_TIME])));
                }
            } else {
                $this->setMinValueTime(new FHIRTime($data[self::FIELD_MIN_VALUE_TIME]));
            }
        }
        if (isset($data[self::FIELD_MIN_VALUE_UNSIGNED_INT])) {
            $ext = (isset($data[self::FIELD_MIN_VALUE_UNSIGNED_INT_EXT]) && is_array($data[self::FIELD_MIN_VALUE_UNSIGNED_INT_EXT]))
                ? $data[self::FIELD_MIN_VALUE_UNSIGNED_INT_EXT]
                : null;
            if ($data[self::FIELD_MIN_VALUE_UNSIGNED_INT] instanceof FHIRUnsignedInt) {
                $this->setMinValueUnsignedInt($data[self::FIELD_MIN_VALUE_UNSIGNED_INT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_MIN_VALUE_UNSIGNED_INT])) {
                    $this->setMinValueUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $data[self::FIELD_MIN_VALUE_UNSIGNED_INT]] + $ext));
                } else if (is_array($data[self::FIELD_MIN_VALUE_UNSIGNED_INT])) {
                    $this->setMinValueUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $data[self::FIELD_MIN_VALUE_UNSIGNED_INT])));
                }
            } else {
                $this->setMinValueUnsignedInt(new FHIRUnsignedInt($data[self::FIELD_MIN_VALUE_UNSIGNED_INT]));
            }
        }
        if (isset($data[self::FIELD_MUST_SUPPORT])) {
            $ext = (isset($data[self::FIELD_MUST_SUPPORT_EXT]) && is_array($data[self::FIELD_MUST_SUPPORT_EXT]))
                ? $data[self::FIELD_MUST_SUPPORT_EXT]
                : null;
            if ($data[self::FIELD_MUST_SUPPORT] instanceof FHIRBoolean) {
                $this->setMustSupport($data[self::FIELD_MUST_SUPPORT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_MUST_SUPPORT])) {
                    $this->setMustSupport(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_MUST_SUPPORT]] + $ext));
                } else if (is_array($data[self::FIELD_MUST_SUPPORT])) {
                    $this->setMustSupport(new FHIRBoolean(array_merge($ext, $data[self::FIELD_MUST_SUPPORT])));
                }
            } else {
                $this->setMustSupport(new FHIRBoolean($data[self::FIELD_MUST_SUPPORT]));
            }
        }
        if (isset($data[self::FIELD_ORDER_MEANING])) {
            $ext = (isset($data[self::FIELD_ORDER_MEANING_EXT]) && is_array($data[self::FIELD_ORDER_MEANING_EXT]))
                ? $data[self::FIELD_ORDER_MEANING_EXT]
                : null;
            if ($data[self::FIELD_ORDER_MEANING] instanceof FHIRString) {
                $this->setOrderMeaning($data[self::FIELD_ORDER_MEANING]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_ORDER_MEANING])) {
                    $this->setOrderMeaning(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_ORDER_MEANING]] + $ext));
                } else if (is_array($data[self::FIELD_ORDER_MEANING])) {
                    $this->setOrderMeaning(new FHIRString(array_merge($ext, $data[self::FIELD_ORDER_MEANING])));
                }
            } else {
                $this->setOrderMeaning(new FHIRString($data[self::FIELD_ORDER_MEANING]));
            }
        }
        if (isset($data[self::FIELD_PATH])) {
            $ext = (isset($data[self::FIELD_PATH_EXT]) && is_array($data[self::FIELD_PATH_EXT]))
                ? $data[self::FIELD_PATH_EXT]
                : null;
            if ($data[self::FIELD_PATH] instanceof FHIRString) {
                $this->setPath($data[self::FIELD_PATH]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PATH])) {
                    $this->setPath(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PATH]] + $ext));
                } else if (is_array($data[self::FIELD_PATH])) {
                    $this->setPath(new FHIRString(array_merge($ext, $data[self::FIELD_PATH])));
                }
            } else {
                $this->setPath(new FHIRString($data[self::FIELD_PATH]));
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
            $ext = (isset($data[self::FIELD_PATTERN_AGE_EXT]) && is_array($data[self::FIELD_PATTERN_AGE_EXT]))
                ? $data[self::FIELD_PATTERN_AGE_EXT]
                : null;
            if ($data[self::FIELD_PATTERN_AGE] instanceof FHIRAge) {
                $this->setPatternAge($data[self::FIELD_PATTERN_AGE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PATTERN_AGE])) {
                    $this->setPatternAge(new FHIRAge([FHIRAge::FIELD_VALUE => $data[self::FIELD_PATTERN_AGE]] + $ext));
                } else if (is_array($data[self::FIELD_PATTERN_AGE])) {
                    $this->setPatternAge(new FHIRAge(array_merge($ext, $data[self::FIELD_PATTERN_AGE])));
                }
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
        if (isset($data[self::FIELD_PATTERN_BASE_64BINARY])) {
            $ext = (isset($data[self::FIELD_PATTERN_BASE_64BINARY_EXT]) && is_array($data[self::FIELD_PATTERN_BASE_64BINARY_EXT]))
                ? $data[self::FIELD_PATTERN_BASE_64BINARY_EXT]
                : null;
            if ($data[self::FIELD_PATTERN_BASE_64BINARY] instanceof FHIRBase64Binary) {
                $this->setPatternBase64Binary($data[self::FIELD_PATTERN_BASE_64BINARY]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PATTERN_BASE_64BINARY])) {
                    $this->setPatternBase64Binary(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $data[self::FIELD_PATTERN_BASE_64BINARY]] + $ext));
                } else if (is_array($data[self::FIELD_PATTERN_BASE_64BINARY])) {
                    $this->setPatternBase64Binary(new FHIRBase64Binary(array_merge($ext, $data[self::FIELD_PATTERN_BASE_64BINARY])));
                }
            } else {
                $this->setPatternBase64Binary(new FHIRBase64Binary($data[self::FIELD_PATTERN_BASE_64BINARY]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_BOOLEAN])) {
            $ext = (isset($data[self::FIELD_PATTERN_BOOLEAN_EXT]) && is_array($data[self::FIELD_PATTERN_BOOLEAN_EXT]))
                ? $data[self::FIELD_PATTERN_BOOLEAN_EXT]
                : null;
            if ($data[self::FIELD_PATTERN_BOOLEAN] instanceof FHIRBoolean) {
                $this->setPatternBoolean($data[self::FIELD_PATTERN_BOOLEAN]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PATTERN_BOOLEAN])) {
                    $this->setPatternBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_PATTERN_BOOLEAN]] + $ext));
                } else if (is_array($data[self::FIELD_PATTERN_BOOLEAN])) {
                    $this->setPatternBoolean(new FHIRBoolean(array_merge($ext, $data[self::FIELD_PATTERN_BOOLEAN])));
                }
            } else {
                $this->setPatternBoolean(new FHIRBoolean($data[self::FIELD_PATTERN_BOOLEAN]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_CODE])) {
            $ext = (isset($data[self::FIELD_PATTERN_CODE_EXT]) && is_array($data[self::FIELD_PATTERN_CODE_EXT]))
                ? $data[self::FIELD_PATTERN_CODE_EXT]
                : null;
            if ($data[self::FIELD_PATTERN_CODE] instanceof FHIRCode) {
                $this->setPatternCode($data[self::FIELD_PATTERN_CODE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PATTERN_CODE])) {
                    $this->setPatternCode(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_PATTERN_CODE]] + $ext));
                } else if (is_array($data[self::FIELD_PATTERN_CODE])) {
                    $this->setPatternCode(new FHIRCode(array_merge($ext, $data[self::FIELD_PATTERN_CODE])));
                }
            } else {
                $this->setPatternCode(new FHIRCode($data[self::FIELD_PATTERN_CODE]));
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
            $ext = (isset($data[self::FIELD_PATTERN_CONTACT_POINT_EXT]) && is_array($data[self::FIELD_PATTERN_CONTACT_POINT_EXT]))
                ? $data[self::FIELD_PATTERN_CONTACT_POINT_EXT]
                : null;
            if ($data[self::FIELD_PATTERN_CONTACT_POINT] instanceof FHIRContactPoint) {
                $this->setPatternContactPoint($data[self::FIELD_PATTERN_CONTACT_POINT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PATTERN_CONTACT_POINT])) {
                    $this->setPatternContactPoint(new FHIRContactPoint([FHIRContactPoint::FIELD_VALUE => $data[self::FIELD_PATTERN_CONTACT_POINT]] + $ext));
                } else if (is_array($data[self::FIELD_PATTERN_CONTACT_POINT])) {
                    $this->setPatternContactPoint(new FHIRContactPoint(array_merge($ext, $data[self::FIELD_PATTERN_CONTACT_POINT])));
                }
            } else {
                $this->setPatternContactPoint(new FHIRContactPoint($data[self::FIELD_PATTERN_CONTACT_POINT]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_COUNT])) {
            $ext = (isset($data[self::FIELD_PATTERN_COUNT_EXT]) && is_array($data[self::FIELD_PATTERN_COUNT_EXT]))
                ? $data[self::FIELD_PATTERN_COUNT_EXT]
                : null;
            if ($data[self::FIELD_PATTERN_COUNT] instanceof FHIRCount) {
                $this->setPatternCount($data[self::FIELD_PATTERN_COUNT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PATTERN_COUNT])) {
                    $this->setPatternCount(new FHIRCount([FHIRCount::FIELD_VALUE => $data[self::FIELD_PATTERN_COUNT]] + $ext));
                } else if (is_array($data[self::FIELD_PATTERN_COUNT])) {
                    $this->setPatternCount(new FHIRCount(array_merge($ext, $data[self::FIELD_PATTERN_COUNT])));
                }
            } else {
                $this->setPatternCount(new FHIRCount($data[self::FIELD_PATTERN_COUNT]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_DATE])) {
            $ext = (isset($data[self::FIELD_PATTERN_DATE_EXT]) && is_array($data[self::FIELD_PATTERN_DATE_EXT]))
                ? $data[self::FIELD_PATTERN_DATE_EXT]
                : null;
            if ($data[self::FIELD_PATTERN_DATE] instanceof FHIRDate) {
                $this->setPatternDate($data[self::FIELD_PATTERN_DATE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PATTERN_DATE])) {
                    $this->setPatternDate(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_PATTERN_DATE]] + $ext));
                } else if (is_array($data[self::FIELD_PATTERN_DATE])) {
                    $this->setPatternDate(new FHIRDate(array_merge($ext, $data[self::FIELD_PATTERN_DATE])));
                }
            } else {
                $this->setPatternDate(new FHIRDate($data[self::FIELD_PATTERN_DATE]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_PATTERN_DATE_TIME_EXT]) && is_array($data[self::FIELD_PATTERN_DATE_TIME_EXT]))
                ? $data[self::FIELD_PATTERN_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_PATTERN_DATE_TIME] instanceof FHIRDateTime) {
                $this->setPatternDateTime($data[self::FIELD_PATTERN_DATE_TIME]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PATTERN_DATE_TIME])) {
                    $this->setPatternDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_PATTERN_DATE_TIME]] + $ext));
                } else if (is_array($data[self::FIELD_PATTERN_DATE_TIME])) {
                    $this->setPatternDateTime(new FHIRDateTime(array_merge($ext, $data[self::FIELD_PATTERN_DATE_TIME])));
                }
            } else {
                $this->setPatternDateTime(new FHIRDateTime($data[self::FIELD_PATTERN_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_DECIMAL])) {
            $ext = (isset($data[self::FIELD_PATTERN_DECIMAL_EXT]) && is_array($data[self::FIELD_PATTERN_DECIMAL_EXT]))
                ? $data[self::FIELD_PATTERN_DECIMAL_EXT]
                : null;
            if ($data[self::FIELD_PATTERN_DECIMAL] instanceof FHIRDecimal) {
                $this->setPatternDecimal($data[self::FIELD_PATTERN_DECIMAL]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PATTERN_DECIMAL])) {
                    $this->setPatternDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_PATTERN_DECIMAL]] + $ext));
                } else if (is_array($data[self::FIELD_PATTERN_DECIMAL])) {
                    $this->setPatternDecimal(new FHIRDecimal(array_merge($ext, $data[self::FIELD_PATTERN_DECIMAL])));
                }
            } else {
                $this->setPatternDecimal(new FHIRDecimal($data[self::FIELD_PATTERN_DECIMAL]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_DISTANCE])) {
            $ext = (isset($data[self::FIELD_PATTERN_DISTANCE_EXT]) && is_array($data[self::FIELD_PATTERN_DISTANCE_EXT]))
                ? $data[self::FIELD_PATTERN_DISTANCE_EXT]
                : null;
            if ($data[self::FIELD_PATTERN_DISTANCE] instanceof FHIRDistance) {
                $this->setPatternDistance($data[self::FIELD_PATTERN_DISTANCE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PATTERN_DISTANCE])) {
                    $this->setPatternDistance(new FHIRDistance([FHIRDistance::FIELD_VALUE => $data[self::FIELD_PATTERN_DISTANCE]] + $ext));
                } else if (is_array($data[self::FIELD_PATTERN_DISTANCE])) {
                    $this->setPatternDistance(new FHIRDistance(array_merge($ext, $data[self::FIELD_PATTERN_DISTANCE])));
                }
            } else {
                $this->setPatternDistance(new FHIRDistance($data[self::FIELD_PATTERN_DISTANCE]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_DURATION])) {
            $ext = (isset($data[self::FIELD_PATTERN_DURATION_EXT]) && is_array($data[self::FIELD_PATTERN_DURATION_EXT]))
                ? $data[self::FIELD_PATTERN_DURATION_EXT]
                : null;
            if ($data[self::FIELD_PATTERN_DURATION] instanceof FHIRDuration) {
                $this->setPatternDuration($data[self::FIELD_PATTERN_DURATION]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PATTERN_DURATION])) {
                    $this->setPatternDuration(new FHIRDuration([FHIRDuration::FIELD_VALUE => $data[self::FIELD_PATTERN_DURATION]] + $ext));
                } else if (is_array($data[self::FIELD_PATTERN_DURATION])) {
                    $this->setPatternDuration(new FHIRDuration(array_merge($ext, $data[self::FIELD_PATTERN_DURATION])));
                }
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
        if (isset($data[self::FIELD_PATTERN_ID])) {
            $ext = (isset($data[self::FIELD_PATTERN_ID_EXT]) && is_array($data[self::FIELD_PATTERN_ID_EXT]))
                ? $data[self::FIELD_PATTERN_ID_EXT]
                : null;
            if ($data[self::FIELD_PATTERN_ID] instanceof FHIRId) {
                $this->setPatternId($data[self::FIELD_PATTERN_ID]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PATTERN_ID])) {
                    $this->setPatternId(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_PATTERN_ID]] + $ext));
                } else if (is_array($data[self::FIELD_PATTERN_ID])) {
                    $this->setPatternId(new FHIRId(array_merge($ext, $data[self::FIELD_PATTERN_ID])));
                }
            } else {
                $this->setPatternId(new FHIRId($data[self::FIELD_PATTERN_ID]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_PATTERN_IDENTIFIER_EXT]) && is_array($data[self::FIELD_PATTERN_IDENTIFIER_EXT]))
                ? $data[self::FIELD_PATTERN_IDENTIFIER_EXT]
                : null;
            if ($data[self::FIELD_PATTERN_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setPatternIdentifier($data[self::FIELD_PATTERN_IDENTIFIER]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PATTERN_IDENTIFIER])) {
                    $this->setPatternIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_PATTERN_IDENTIFIER]] + $ext));
                } else if (is_array($data[self::FIELD_PATTERN_IDENTIFIER])) {
                    $this->setPatternIdentifier(new FHIRIdentifier(array_merge($ext, $data[self::FIELD_PATTERN_IDENTIFIER])));
                }
            } else {
                $this->setPatternIdentifier(new FHIRIdentifier($data[self::FIELD_PATTERN_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_INSTANT])) {
            $ext = (isset($data[self::FIELD_PATTERN_INSTANT_EXT]) && is_array($data[self::FIELD_PATTERN_INSTANT_EXT]))
                ? $data[self::FIELD_PATTERN_INSTANT_EXT]
                : null;
            if ($data[self::FIELD_PATTERN_INSTANT] instanceof FHIRInstant) {
                $this->setPatternInstant($data[self::FIELD_PATTERN_INSTANT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PATTERN_INSTANT])) {
                    $this->setPatternInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $data[self::FIELD_PATTERN_INSTANT]] + $ext));
                } else if (is_array($data[self::FIELD_PATTERN_INSTANT])) {
                    $this->setPatternInstant(new FHIRInstant(array_merge($ext, $data[self::FIELD_PATTERN_INSTANT])));
                }
            } else {
                $this->setPatternInstant(new FHIRInstant($data[self::FIELD_PATTERN_INSTANT]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_INTEGER])) {
            $ext = (isset($data[self::FIELD_PATTERN_INTEGER_EXT]) && is_array($data[self::FIELD_PATTERN_INTEGER_EXT]))
                ? $data[self::FIELD_PATTERN_INTEGER_EXT]
                : null;
            if ($data[self::FIELD_PATTERN_INTEGER] instanceof FHIRInteger) {
                $this->setPatternInteger($data[self::FIELD_PATTERN_INTEGER]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PATTERN_INTEGER])) {
                    $this->setPatternInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_PATTERN_INTEGER]] + $ext));
                } else if (is_array($data[self::FIELD_PATTERN_INTEGER])) {
                    $this->setPatternInteger(new FHIRInteger(array_merge($ext, $data[self::FIELD_PATTERN_INTEGER])));
                }
            } else {
                $this->setPatternInteger(new FHIRInteger($data[self::FIELD_PATTERN_INTEGER]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_MARKDOWN])) {
            $ext = (isset($data[self::FIELD_PATTERN_MARKDOWN_EXT]) && is_array($data[self::FIELD_PATTERN_MARKDOWN_EXT]))
                ? $data[self::FIELD_PATTERN_MARKDOWN_EXT]
                : null;
            if ($data[self::FIELD_PATTERN_MARKDOWN] instanceof FHIRMarkdown) {
                $this->setPatternMarkdown($data[self::FIELD_PATTERN_MARKDOWN]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PATTERN_MARKDOWN])) {
                    $this->setPatternMarkdown(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_PATTERN_MARKDOWN]] + $ext));
                } else if (is_array($data[self::FIELD_PATTERN_MARKDOWN])) {
                    $this->setPatternMarkdown(new FHIRMarkdown(array_merge($ext, $data[self::FIELD_PATTERN_MARKDOWN])));
                }
            } else {
                $this->setPatternMarkdown(new FHIRMarkdown($data[self::FIELD_PATTERN_MARKDOWN]));
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
            $ext = (isset($data[self::FIELD_PATTERN_MONEY_EXT]) && is_array($data[self::FIELD_PATTERN_MONEY_EXT]))
                ? $data[self::FIELD_PATTERN_MONEY_EXT]
                : null;
            if ($data[self::FIELD_PATTERN_MONEY] instanceof FHIRMoney) {
                $this->setPatternMoney($data[self::FIELD_PATTERN_MONEY]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PATTERN_MONEY])) {
                    $this->setPatternMoney(new FHIRMoney([FHIRMoney::FIELD_VALUE => $data[self::FIELD_PATTERN_MONEY]] + $ext));
                } else if (is_array($data[self::FIELD_PATTERN_MONEY])) {
                    $this->setPatternMoney(new FHIRMoney(array_merge($ext, $data[self::FIELD_PATTERN_MONEY])));
                }
            } else {
                $this->setPatternMoney(new FHIRMoney($data[self::FIELD_PATTERN_MONEY]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_OID])) {
            $ext = (isset($data[self::FIELD_PATTERN_OID_EXT]) && is_array($data[self::FIELD_PATTERN_OID_EXT]))
                ? $data[self::FIELD_PATTERN_OID_EXT]
                : null;
            if ($data[self::FIELD_PATTERN_OID] instanceof FHIROid) {
                $this->setPatternOid($data[self::FIELD_PATTERN_OID]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PATTERN_OID])) {
                    $this->setPatternOid(new FHIROid([FHIROid::FIELD_VALUE => $data[self::FIELD_PATTERN_OID]] + $ext));
                } else if (is_array($data[self::FIELD_PATTERN_OID])) {
                    $this->setPatternOid(new FHIROid(array_merge($ext, $data[self::FIELD_PATTERN_OID])));
                }
            } else {
                $this->setPatternOid(new FHIROid($data[self::FIELD_PATTERN_OID]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_PERIOD])) {
            if ($data[self::FIELD_PATTERN_PERIOD] instanceof FHIRPeriod) {
                $this->setPatternPeriod($data[self::FIELD_PATTERN_PERIOD]);
            } else {
                $this->setPatternPeriod(new FHIRPeriod($data[self::FIELD_PATTERN_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_POSITIVE_INT])) {
            $ext = (isset($data[self::FIELD_PATTERN_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_PATTERN_POSITIVE_INT_EXT]))
                ? $data[self::FIELD_PATTERN_POSITIVE_INT_EXT]
                : null;
            if ($data[self::FIELD_PATTERN_POSITIVE_INT] instanceof FHIRPositiveInt) {
                $this->setPatternPositiveInt($data[self::FIELD_PATTERN_POSITIVE_INT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PATTERN_POSITIVE_INT])) {
                    $this->setPatternPositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_PATTERN_POSITIVE_INT]] + $ext));
                } else if (is_array($data[self::FIELD_PATTERN_POSITIVE_INT])) {
                    $this->setPatternPositiveInt(new FHIRPositiveInt(array_merge($ext, $data[self::FIELD_PATTERN_POSITIVE_INT])));
                }
            } else {
                $this->setPatternPositiveInt(new FHIRPositiveInt($data[self::FIELD_PATTERN_POSITIVE_INT]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_QUANTITY])) {
            $ext = (isset($data[self::FIELD_PATTERN_QUANTITY_EXT]) && is_array($data[self::FIELD_PATTERN_QUANTITY_EXT]))
                ? $data[self::FIELD_PATTERN_QUANTITY_EXT]
                : null;
            if ($data[self::FIELD_PATTERN_QUANTITY] instanceof FHIRQuantity) {
                $this->setPatternQuantity($data[self::FIELD_PATTERN_QUANTITY]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PATTERN_QUANTITY])) {
                    $this->setPatternQuantity(new FHIRQuantity([FHIRQuantity::FIELD_VALUE => $data[self::FIELD_PATTERN_QUANTITY]] + $ext));
                } else if (is_array($data[self::FIELD_PATTERN_QUANTITY])) {
                    $this->setPatternQuantity(new FHIRQuantity(array_merge($ext, $data[self::FIELD_PATTERN_QUANTITY])));
                }
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
        if (isset($data[self::FIELD_PATTERN_STRING])) {
            $ext = (isset($data[self::FIELD_PATTERN_STRING_EXT]) && is_array($data[self::FIELD_PATTERN_STRING_EXT]))
                ? $data[self::FIELD_PATTERN_STRING_EXT]
                : null;
            if ($data[self::FIELD_PATTERN_STRING] instanceof FHIRString) {
                $this->setPatternString($data[self::FIELD_PATTERN_STRING]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PATTERN_STRING])) {
                    $this->setPatternString(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PATTERN_STRING]] + $ext));
                } else if (is_array($data[self::FIELD_PATTERN_STRING])) {
                    $this->setPatternString(new FHIRString(array_merge($ext, $data[self::FIELD_PATTERN_STRING])));
                }
            } else {
                $this->setPatternString(new FHIRString($data[self::FIELD_PATTERN_STRING]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_TIME])) {
            $ext = (isset($data[self::FIELD_PATTERN_TIME_EXT]) && is_array($data[self::FIELD_PATTERN_TIME_EXT]))
                ? $data[self::FIELD_PATTERN_TIME_EXT]
                : null;
            if ($data[self::FIELD_PATTERN_TIME] instanceof FHIRTime) {
                $this->setPatternTime($data[self::FIELD_PATTERN_TIME]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PATTERN_TIME])) {
                    $this->setPatternTime(new FHIRTime([FHIRTime::FIELD_VALUE => $data[self::FIELD_PATTERN_TIME]] + $ext));
                } else if (is_array($data[self::FIELD_PATTERN_TIME])) {
                    $this->setPatternTime(new FHIRTime(array_merge($ext, $data[self::FIELD_PATTERN_TIME])));
                }
            } else {
                $this->setPatternTime(new FHIRTime($data[self::FIELD_PATTERN_TIME]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_TIMING])) {
            if ($data[self::FIELD_PATTERN_TIMING] instanceof FHIRTiming) {
                $this->setPatternTiming($data[self::FIELD_PATTERN_TIMING]);
            } else {
                $this->setPatternTiming(new FHIRTiming($data[self::FIELD_PATTERN_TIMING]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_UNSIGNED_INT])) {
            $ext = (isset($data[self::FIELD_PATTERN_UNSIGNED_INT_EXT]) && is_array($data[self::FIELD_PATTERN_UNSIGNED_INT_EXT]))
                ? $data[self::FIELD_PATTERN_UNSIGNED_INT_EXT]
                : null;
            if ($data[self::FIELD_PATTERN_UNSIGNED_INT] instanceof FHIRUnsignedInt) {
                $this->setPatternUnsignedInt($data[self::FIELD_PATTERN_UNSIGNED_INT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PATTERN_UNSIGNED_INT])) {
                    $this->setPatternUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $data[self::FIELD_PATTERN_UNSIGNED_INT]] + $ext));
                } else if (is_array($data[self::FIELD_PATTERN_UNSIGNED_INT])) {
                    $this->setPatternUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $data[self::FIELD_PATTERN_UNSIGNED_INT])));
                }
            } else {
                $this->setPatternUnsignedInt(new FHIRUnsignedInt($data[self::FIELD_PATTERN_UNSIGNED_INT]));
            }
        }
        if (isset($data[self::FIELD_PATTERN_URI])) {
            $ext = (isset($data[self::FIELD_PATTERN_URI_EXT]) && is_array($data[self::FIELD_PATTERN_URI_EXT]))
                ? $data[self::FIELD_PATTERN_URI_EXT]
                : null;
            if ($data[self::FIELD_PATTERN_URI] instanceof FHIRUri) {
                $this->setPatternUri($data[self::FIELD_PATTERN_URI]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PATTERN_URI])) {
                    $this->setPatternUri(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_PATTERN_URI]] + $ext));
                } else if (is_array($data[self::FIELD_PATTERN_URI])) {
                    $this->setPatternUri(new FHIRUri(array_merge($ext, $data[self::FIELD_PATTERN_URI])));
                }
            } else {
                $this->setPatternUri(new FHIRUri($data[self::FIELD_PATTERN_URI]));
            }
        }
        if (isset($data[self::FIELD_REPRESENTATION])) {
            $ext = (isset($data[self::FIELD_REPRESENTATION_EXT]) && is_array($data[self::FIELD_REPRESENTATION_EXT]))
                ? $data[self::FIELD_REPRESENTATION_EXT]
                : null;
            if (is_array($data[self::FIELD_REPRESENTATION])) {
                foreach($data[self::FIELD_REPRESENTATION] as $i => $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRPropertyRepresentation) {
                        $this->addRepresentation($v);
                    } elseif (null !== $ext && isset($ext[$i]) && is_array($ext[$i])) {
                        if (is_scalar($v)) {
                            $this->addRepresentation(new FHIRPropertyRepresentation([FHIRPropertyRepresentation::FIELD_VALUE => $v] + $ext[$i]));
                        } elseif (is_array($v)) {
                            $this->addRepresentation(new FHIRPropertyRepresentation(array_merge($v, $ext[$i])));
                        }
                    } else {
                        $this->addRepresentation(new FHIRPropertyRepresentation($v));
                    }
                }
            } elseif ($data[self::FIELD_REPRESENTATION] instanceof FHIRPropertyRepresentation) {
                $this->addRepresentation($data[self::FIELD_REPRESENTATION]);
            } elseif (null !== $ext && is_scalar($data[self::FIELD_REPRESENTATION])) {
                $this->addRepresentation(new FHIRPropertyRepresentation([FHIRPropertyRepresentation::FIELD_VALUE => $data[self::FIELD_REPRESENTATION]] + $ext));
            } else {
                $this->addRepresentation(new FHIRPropertyRepresentation($data[self::FIELD_REPRESENTATION]));
            }
        }
        if (isset($data[self::FIELD_REQUIREMENTS])) {
            $ext = (isset($data[self::FIELD_REQUIREMENTS_EXT]) && is_array($data[self::FIELD_REQUIREMENTS_EXT]))
                ? $data[self::FIELD_REQUIREMENTS_EXT]
                : null;
            if ($data[self::FIELD_REQUIREMENTS] instanceof FHIRMarkdown) {
                $this->setRequirements($data[self::FIELD_REQUIREMENTS]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_REQUIREMENTS])) {
                    $this->setRequirements(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_REQUIREMENTS]] + $ext));
                } else if (is_array($data[self::FIELD_REQUIREMENTS])) {
                    $this->setRequirements(new FHIRMarkdown(array_merge($ext, $data[self::FIELD_REQUIREMENTS])));
                }
            } else {
                $this->setRequirements(new FHIRMarkdown($data[self::FIELD_REQUIREMENTS]));
            }
        }
        if (isset($data[self::FIELD_SHORT])) {
            $ext = (isset($data[self::FIELD_SHORT_EXT]) && is_array($data[self::FIELD_SHORT_EXT]))
                ? $data[self::FIELD_SHORT_EXT]
                : null;
            if ($data[self::FIELD_SHORT] instanceof FHIRString) {
                $this->setShort($data[self::FIELD_SHORT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_SHORT])) {
                    $this->setShort(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SHORT]] + $ext));
                } else if (is_array($data[self::FIELD_SHORT])) {
                    $this->setShort(new FHIRString(array_merge($ext, $data[self::FIELD_SHORT])));
                }
            } else {
                $this->setShort(new FHIRString($data[self::FIELD_SHORT]));
            }
        }
        if (isset($data[self::FIELD_SLICE_NAME])) {
            $ext = (isset($data[self::FIELD_SLICE_NAME_EXT]) && is_array($data[self::FIELD_SLICE_NAME_EXT]))
                ? $data[self::FIELD_SLICE_NAME_EXT]
                : null;
            if ($data[self::FIELD_SLICE_NAME] instanceof FHIRString) {
                $this->setSliceName($data[self::FIELD_SLICE_NAME]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_SLICE_NAME])) {
                    $this->setSliceName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SLICE_NAME]] + $ext));
                } else if (is_array($data[self::FIELD_SLICE_NAME])) {
                    $this->setSliceName(new FHIRString(array_merge($ext, $data[self::FIELD_SLICE_NAME])));
                }
            } else {
                $this->setSliceName(new FHIRString($data[self::FIELD_SLICE_NAME]));
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return static
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
        if (isset($attributes->alias)) {
            $type->addAlias((string)$attributes->alias);
        }
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
        if (isset($attributes->comment)) {
            $type->setComment((string)$attributes->comment);
        }
        if (isset($children->comment)) {
            $type->setComment(FHIRMarkdown::xmlUnserialize($children->comment));
        }
        if (isset($attributes->condition)) {
            $type->addCondition((string)$attributes->condition);
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
        if (isset($attributes->contentReference)) {
            $type->setContentReference((string)$attributes->contentReference);
        }
        if (isset($children->contentReference)) {
            $type->setContentReference(FHIRUri::xmlUnserialize($children->contentReference));
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
        if (isset($children->defaultValueContactPoint)) {
            $type->setDefaultValueContactPoint(FHIRContactPoint::xmlUnserialize($children->defaultValueContactPoint));
        }
        if (isset($children->defaultValueCount)) {
            $type->setDefaultValueCount(FHIRCount::xmlUnserialize($children->defaultValueCount));
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
        if (isset($children->defaultValueDuration)) {
            $type->setDefaultValueDuration(FHIRDuration::xmlUnserialize($children->defaultValueDuration));
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
        if (isset($children->defaultValueMeta)) {
            $type->setDefaultValueMeta(FHIRMeta::xmlUnserialize($children->defaultValueMeta));
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
        if (isset($attributes->definition)) {
            $type->setDefinition((string)$attributes->definition);
        }
        if (isset($children->definition)) {
            $type->setDefinition(FHIRMarkdown::xmlUnserialize($children->definition));
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
        if (isset($attributes->fixedBase64Binary)) {
            $type->setFixedBase64Binary((string)$attributes->fixedBase64Binary);
        }
        if (isset($children->fixedBase64Binary)) {
            $type->setFixedBase64Binary(FHIRBase64Binary::xmlUnserialize($children->fixedBase64Binary));
        }
        if (isset($attributes->fixedBoolean)) {
            $type->setFixedBoolean((string)$attributes->fixedBoolean);
        }
        if (isset($children->fixedBoolean)) {
            $type->setFixedBoolean(FHIRBoolean::xmlUnserialize($children->fixedBoolean));
        }
        if (isset($attributes->fixedCode)) {
            $type->setFixedCode((string)$attributes->fixedCode);
        }
        if (isset($children->fixedCode)) {
            $type->setFixedCode(FHIRCode::xmlUnserialize($children->fixedCode));
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
        if (isset($attributes->fixedDate)) {
            $type->setFixedDate((string)$attributes->fixedDate);
        }
        if (isset($children->fixedDate)) {
            $type->setFixedDate(FHIRDate::xmlUnserialize($children->fixedDate));
        }
        if (isset($attributes->fixedDateTime)) {
            $type->setFixedDateTime((string)$attributes->fixedDateTime);
        }
        if (isset($children->fixedDateTime)) {
            $type->setFixedDateTime(FHIRDateTime::xmlUnserialize($children->fixedDateTime));
        }
        if (isset($attributes->fixedDecimal)) {
            $type->setFixedDecimal((string)$attributes->fixedDecimal);
        }
        if (isset($children->fixedDecimal)) {
            $type->setFixedDecimal(FHIRDecimal::xmlUnserialize($children->fixedDecimal));
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
        if (isset($attributes->fixedId)) {
            $type->setFixedId((string)$attributes->fixedId);
        }
        if (isset($children->fixedId)) {
            $type->setFixedId(FHIRId::xmlUnserialize($children->fixedId));
        }
        if (isset($children->fixedIdentifier)) {
            $type->setFixedIdentifier(FHIRIdentifier::xmlUnserialize($children->fixedIdentifier));
        }
        if (isset($attributes->fixedInstant)) {
            $type->setFixedInstant((string)$attributes->fixedInstant);
        }
        if (isset($children->fixedInstant)) {
            $type->setFixedInstant(FHIRInstant::xmlUnserialize($children->fixedInstant));
        }
        if (isset($attributes->fixedInteger)) {
            $type->setFixedInteger((string)$attributes->fixedInteger);
        }
        if (isset($children->fixedInteger)) {
            $type->setFixedInteger(FHIRInteger::xmlUnserialize($children->fixedInteger));
        }
        if (isset($attributes->fixedMarkdown)) {
            $type->setFixedMarkdown((string)$attributes->fixedMarkdown);
        }
        if (isset($children->fixedMarkdown)) {
            $type->setFixedMarkdown(FHIRMarkdown::xmlUnserialize($children->fixedMarkdown));
        }
        if (isset($children->fixedMeta)) {
            $type->setFixedMeta(FHIRMeta::xmlUnserialize($children->fixedMeta));
        }
        if (isset($children->fixedMoney)) {
            $type->setFixedMoney(FHIRMoney::xmlUnserialize($children->fixedMoney));
        }
        if (isset($attributes->fixedOid)) {
            $type->setFixedOid((string)$attributes->fixedOid);
        }
        if (isset($children->fixedOid)) {
            $type->setFixedOid(FHIROid::xmlUnserialize($children->fixedOid));
        }
        if (isset($children->fixedPeriod)) {
            $type->setFixedPeriod(FHIRPeriod::xmlUnserialize($children->fixedPeriod));
        }
        if (isset($attributes->fixedPositiveInt)) {
            $type->setFixedPositiveInt((string)$attributes->fixedPositiveInt);
        }
        if (isset($children->fixedPositiveInt)) {
            $type->setFixedPositiveInt(FHIRPositiveInt::xmlUnserialize($children->fixedPositiveInt));
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
        if (isset($attributes->fixedString)) {
            $type->setFixedString((string)$attributes->fixedString);
        }
        if (isset($children->fixedString)) {
            $type->setFixedString(FHIRString::xmlUnserialize($children->fixedString));
        }
        if (isset($attributes->fixedTime)) {
            $type->setFixedTime((string)$attributes->fixedTime);
        }
        if (isset($children->fixedTime)) {
            $type->setFixedTime(FHIRTime::xmlUnserialize($children->fixedTime));
        }
        if (isset($children->fixedTiming)) {
            $type->setFixedTiming(FHIRTiming::xmlUnserialize($children->fixedTiming));
        }
        if (isset($attributes->fixedUnsignedInt)) {
            $type->setFixedUnsignedInt((string)$attributes->fixedUnsignedInt);
        }
        if (isset($children->fixedUnsignedInt)) {
            $type->setFixedUnsignedInt(FHIRUnsignedInt::xmlUnserialize($children->fixedUnsignedInt));
        }
        if (isset($attributes->fixedUri)) {
            $type->setFixedUri((string)$attributes->fixedUri);
        }
        if (isset($children->fixedUri)) {
            $type->setFixedUri(FHIRUri::xmlUnserialize($children->fixedUri));
        }
        if (isset($attributes->isModifier)) {
            $type->setIsModifier((string)$attributes->isModifier);
        }
        if (isset($children->isModifier)) {
            $type->setIsModifier(FHIRBoolean::xmlUnserialize($children->isModifier));
        }
        if (isset($attributes->isSummary)) {
            $type->setIsSummary((string)$attributes->isSummary);
        }
        if (isset($children->isSummary)) {
            $type->setIsSummary(FHIRBoolean::xmlUnserialize($children->isSummary));
        }
        if (isset($attributes->label)) {
            $type->setLabel((string)$attributes->label);
        }
        if (isset($children->label)) {
            $type->setLabel(FHIRString::xmlUnserialize($children->label));
        }
        if (isset($children->mapping)) {
            foreach($children->mapping as $child) {
                $type->addMapping(FHIRElementDefinitionMapping::xmlUnserialize($child));
            }
        }
        if (isset($attributes->max)) {
            $type->setMax((string)$attributes->max);
        }
        if (isset($children->max)) {
            $type->setMax(FHIRString::xmlUnserialize($children->max));
        }
        if (isset($attributes->maxLength)) {
            $type->setMaxLength((string)$attributes->maxLength);
        }
        if (isset($children->maxLength)) {
            $type->setMaxLength(FHIRInteger::xmlUnserialize($children->maxLength));
        }
        if (isset($attributes->maxValueDate)) {
            $type->setMaxValueDate((string)$attributes->maxValueDate);
        }
        if (isset($children->maxValueDate)) {
            $type->setMaxValueDate(FHIRDate::xmlUnserialize($children->maxValueDate));
        }
        if (isset($attributes->maxValueDateTime)) {
            $type->setMaxValueDateTime((string)$attributes->maxValueDateTime);
        }
        if (isset($children->maxValueDateTime)) {
            $type->setMaxValueDateTime(FHIRDateTime::xmlUnserialize($children->maxValueDateTime));
        }
        if (isset($attributes->maxValueDecimal)) {
            $type->setMaxValueDecimal((string)$attributes->maxValueDecimal);
        }
        if (isset($children->maxValueDecimal)) {
            $type->setMaxValueDecimal(FHIRDecimal::xmlUnserialize($children->maxValueDecimal));
        }
        if (isset($attributes->maxValueInstant)) {
            $type->setMaxValueInstant((string)$attributes->maxValueInstant);
        }
        if (isset($children->maxValueInstant)) {
            $type->setMaxValueInstant(FHIRInstant::xmlUnserialize($children->maxValueInstant));
        }
        if (isset($attributes->maxValueInteger)) {
            $type->setMaxValueInteger((string)$attributes->maxValueInteger);
        }
        if (isset($children->maxValueInteger)) {
            $type->setMaxValueInteger(FHIRInteger::xmlUnserialize($children->maxValueInteger));
        }
        if (isset($attributes->maxValuePositiveInt)) {
            $type->setMaxValuePositiveInt((string)$attributes->maxValuePositiveInt);
        }
        if (isset($children->maxValuePositiveInt)) {
            $type->setMaxValuePositiveInt(FHIRPositiveInt::xmlUnserialize($children->maxValuePositiveInt));
        }
        if (isset($children->maxValueQuantity)) {
            $type->setMaxValueQuantity(FHIRQuantity::xmlUnserialize($children->maxValueQuantity));
        }
        if (isset($attributes->maxValueTime)) {
            $type->setMaxValueTime((string)$attributes->maxValueTime);
        }
        if (isset($children->maxValueTime)) {
            $type->setMaxValueTime(FHIRTime::xmlUnserialize($children->maxValueTime));
        }
        if (isset($attributes->maxValueUnsignedInt)) {
            $type->setMaxValueUnsignedInt((string)$attributes->maxValueUnsignedInt);
        }
        if (isset($children->maxValueUnsignedInt)) {
            $type->setMaxValueUnsignedInt(FHIRUnsignedInt::xmlUnserialize($children->maxValueUnsignedInt));
        }
        if (isset($attributes->meaningWhenMissing)) {
            $type->setMeaningWhenMissing((string)$attributes->meaningWhenMissing);
        }
        if (isset($children->meaningWhenMissing)) {
            $type->setMeaningWhenMissing(FHIRMarkdown::xmlUnserialize($children->meaningWhenMissing));
        }
        if (isset($attributes->min)) {
            $type->setMin((string)$attributes->min);
        }
        if (isset($children->min)) {
            $type->setMin(FHIRUnsignedInt::xmlUnserialize($children->min));
        }
        if (isset($attributes->minValueDate)) {
            $type->setMinValueDate((string)$attributes->minValueDate);
        }
        if (isset($children->minValueDate)) {
            $type->setMinValueDate(FHIRDate::xmlUnserialize($children->minValueDate));
        }
        if (isset($attributes->minValueDateTime)) {
            $type->setMinValueDateTime((string)$attributes->minValueDateTime);
        }
        if (isset($children->minValueDateTime)) {
            $type->setMinValueDateTime(FHIRDateTime::xmlUnserialize($children->minValueDateTime));
        }
        if (isset($attributes->minValueDecimal)) {
            $type->setMinValueDecimal((string)$attributes->minValueDecimal);
        }
        if (isset($children->minValueDecimal)) {
            $type->setMinValueDecimal(FHIRDecimal::xmlUnserialize($children->minValueDecimal));
        }
        if (isset($attributes->minValueInstant)) {
            $type->setMinValueInstant((string)$attributes->minValueInstant);
        }
        if (isset($children->minValueInstant)) {
            $type->setMinValueInstant(FHIRInstant::xmlUnserialize($children->minValueInstant));
        }
        if (isset($attributes->minValueInteger)) {
            $type->setMinValueInteger((string)$attributes->minValueInteger);
        }
        if (isset($children->minValueInteger)) {
            $type->setMinValueInteger(FHIRInteger::xmlUnserialize($children->minValueInteger));
        }
        if (isset($attributes->minValuePositiveInt)) {
            $type->setMinValuePositiveInt((string)$attributes->minValuePositiveInt);
        }
        if (isset($children->minValuePositiveInt)) {
            $type->setMinValuePositiveInt(FHIRPositiveInt::xmlUnserialize($children->minValuePositiveInt));
        }
        if (isset($children->minValueQuantity)) {
            $type->setMinValueQuantity(FHIRQuantity::xmlUnserialize($children->minValueQuantity));
        }
        if (isset($attributes->minValueTime)) {
            $type->setMinValueTime((string)$attributes->minValueTime);
        }
        if (isset($children->minValueTime)) {
            $type->setMinValueTime(FHIRTime::xmlUnserialize($children->minValueTime));
        }
        if (isset($attributes->minValueUnsignedInt)) {
            $type->setMinValueUnsignedInt((string)$attributes->minValueUnsignedInt);
        }
        if (isset($children->minValueUnsignedInt)) {
            $type->setMinValueUnsignedInt(FHIRUnsignedInt::xmlUnserialize($children->minValueUnsignedInt));
        }
        if (isset($attributes->mustSupport)) {
            $type->setMustSupport((string)$attributes->mustSupport);
        }
        if (isset($children->mustSupport)) {
            $type->setMustSupport(FHIRBoolean::xmlUnserialize($children->mustSupport));
        }
        if (isset($attributes->orderMeaning)) {
            $type->setOrderMeaning((string)$attributes->orderMeaning);
        }
        if (isset($children->orderMeaning)) {
            $type->setOrderMeaning(FHIRString::xmlUnserialize($children->orderMeaning));
        }
        if (isset($attributes->path)) {
            $type->setPath((string)$attributes->path);
        }
        if (isset($children->path)) {
            $type->setPath(FHIRString::xmlUnserialize($children->path));
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
        if (isset($attributes->patternBase64Binary)) {
            $type->setPatternBase64Binary((string)$attributes->patternBase64Binary);
        }
        if (isset($children->patternBase64Binary)) {
            $type->setPatternBase64Binary(FHIRBase64Binary::xmlUnserialize($children->patternBase64Binary));
        }
        if (isset($attributes->patternBoolean)) {
            $type->setPatternBoolean((string)$attributes->patternBoolean);
        }
        if (isset($children->patternBoolean)) {
            $type->setPatternBoolean(FHIRBoolean::xmlUnserialize($children->patternBoolean));
        }
        if (isset($attributes->patternCode)) {
            $type->setPatternCode((string)$attributes->patternCode);
        }
        if (isset($children->patternCode)) {
            $type->setPatternCode(FHIRCode::xmlUnserialize($children->patternCode));
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
        if (isset($attributes->patternDate)) {
            $type->setPatternDate((string)$attributes->patternDate);
        }
        if (isset($children->patternDate)) {
            $type->setPatternDate(FHIRDate::xmlUnserialize($children->patternDate));
        }
        if (isset($attributes->patternDateTime)) {
            $type->setPatternDateTime((string)$attributes->patternDateTime);
        }
        if (isset($children->patternDateTime)) {
            $type->setPatternDateTime(FHIRDateTime::xmlUnserialize($children->patternDateTime));
        }
        if (isset($attributes->patternDecimal)) {
            $type->setPatternDecimal((string)$attributes->patternDecimal);
        }
        if (isset($children->patternDecimal)) {
            $type->setPatternDecimal(FHIRDecimal::xmlUnserialize($children->patternDecimal));
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
        if (isset($attributes->patternId)) {
            $type->setPatternId((string)$attributes->patternId);
        }
        if (isset($children->patternId)) {
            $type->setPatternId(FHIRId::xmlUnserialize($children->patternId));
        }
        if (isset($children->patternIdentifier)) {
            $type->setPatternIdentifier(FHIRIdentifier::xmlUnserialize($children->patternIdentifier));
        }
        if (isset($attributes->patternInstant)) {
            $type->setPatternInstant((string)$attributes->patternInstant);
        }
        if (isset($children->patternInstant)) {
            $type->setPatternInstant(FHIRInstant::xmlUnserialize($children->patternInstant));
        }
        if (isset($attributes->patternInteger)) {
            $type->setPatternInteger((string)$attributes->patternInteger);
        }
        if (isset($children->patternInteger)) {
            $type->setPatternInteger(FHIRInteger::xmlUnserialize($children->patternInteger));
        }
        if (isset($attributes->patternMarkdown)) {
            $type->setPatternMarkdown((string)$attributes->patternMarkdown);
        }
        if (isset($children->patternMarkdown)) {
            $type->setPatternMarkdown(FHIRMarkdown::xmlUnserialize($children->patternMarkdown));
        }
        if (isset($children->patternMeta)) {
            $type->setPatternMeta(FHIRMeta::xmlUnserialize($children->patternMeta));
        }
        if (isset($children->patternMoney)) {
            $type->setPatternMoney(FHIRMoney::xmlUnserialize($children->patternMoney));
        }
        if (isset($attributes->patternOid)) {
            $type->setPatternOid((string)$attributes->patternOid);
        }
        if (isset($children->patternOid)) {
            $type->setPatternOid(FHIROid::xmlUnserialize($children->patternOid));
        }
        if (isset($children->patternPeriod)) {
            $type->setPatternPeriod(FHIRPeriod::xmlUnserialize($children->patternPeriod));
        }
        if (isset($attributes->patternPositiveInt)) {
            $type->setPatternPositiveInt((string)$attributes->patternPositiveInt);
        }
        if (isset($children->patternPositiveInt)) {
            $type->setPatternPositiveInt(FHIRPositiveInt::xmlUnserialize($children->patternPositiveInt));
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
        if (isset($attributes->patternString)) {
            $type->setPatternString((string)$attributes->patternString);
        }
        if (isset($children->patternString)) {
            $type->setPatternString(FHIRString::xmlUnserialize($children->patternString));
        }
        if (isset($attributes->patternTime)) {
            $type->setPatternTime((string)$attributes->patternTime);
        }
        if (isset($children->patternTime)) {
            $type->setPatternTime(FHIRTime::xmlUnserialize($children->patternTime));
        }
        if (isset($children->patternTiming)) {
            $type->setPatternTiming(FHIRTiming::xmlUnserialize($children->patternTiming));
        }
        if (isset($attributes->patternUnsignedInt)) {
            $type->setPatternUnsignedInt((string)$attributes->patternUnsignedInt);
        }
        if (isset($children->patternUnsignedInt)) {
            $type->setPatternUnsignedInt(FHIRUnsignedInt::xmlUnserialize($children->patternUnsignedInt));
        }
        if (isset($attributes->patternUri)) {
            $type->setPatternUri((string)$attributes->patternUri);
        }
        if (isset($children->patternUri)) {
            $type->setPatternUri(FHIRUri::xmlUnserialize($children->patternUri));
        }
        if (isset($children->representation)) {
            foreach($children->representation as $child) {
                $type->addRepresentation(FHIRPropertyRepresentation::xmlUnserialize($child));
            }
        }
        if (isset($attributes->requirements)) {
            $type->setRequirements((string)$attributes->requirements);
        }
        if (isset($children->requirements)) {
            $type->setRequirements(FHIRMarkdown::xmlUnserialize($children->requirements));
        }
        if (isset($attributes->short)) {
            $type->setShort((string)$attributes->short);
        }
        if (isset($children->short)) {
            $type->setShort(FHIRString::xmlUnserialize($children->short));
        }
        if (isset($attributes->sliceName)) {
            $type->setSliceName((string)$attributes->sliceName);
        }
        if (isset($children->sliceName)) {
            $type->setSliceName(FHIRString::xmlUnserialize($children->sliceName));
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
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if (null !== ($val = $v->getValue())) {
                    $a[self::FIELD_ALIAS][] = $val;
                    if (1 < count($enc = $v->jsonSerialize())) {
                        unset($enc[$v::FIELD_VALUE]);
                        $a[self::FIELD_ALIAS_EXT][] = $enc;
                    } else {
                        $a[self::FIELD_ALIAS_EXT][] = null;
                    }
                } else {
                    $a[self::FIELD_ALIAS][] = $v;
                }
            }
        }
        if (null !== ($v = $this->getBase())) {
            $a[self::FIELD_BASE] = $v;
        }
        if (null !== ($v = $this->getBinding())) {
            $a[self::FIELD_BINDING] = $v;
        }
        if ([] !== ($vs = $this->getCode())) {
            $a[self::FIELD_CODE] = $vs;
        }
        if (null !== ($v = $this->getComment())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_COMMENT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_COMMENT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_COMMENT] = $v;
            }
        }
        if ([] !== ($vs = $this->getCondition())) {
            $a[self::FIELD_CONDITION] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if (null !== ($val = $v->getValue())) {
                    $a[self::FIELD_CONDITION][] = $val;
                    if (1 < count($enc = $v->jsonSerialize())) {
                        unset($enc[$v::FIELD_VALUE]);
                        $a[self::FIELD_CONDITION_EXT][] = $enc;
                    } else {
                        $a[self::FIELD_CONDITION_EXT][] = null;
                    }
                } else {
                    $a[self::FIELD_CONDITION][] = $v;
                }
            }
        }
        if ([] !== ($vs = $this->getConstraint())) {
            $a[self::FIELD_CONSTRAINT] = $vs;
        }
        if (null !== ($v = $this->getContentReference())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_CONTENT_REFERENCE] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_CONTENT_REFERENCE_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_CONTENT_REFERENCE] = $v;
            }
        }
        if (null !== ($v = $this->getDefaultValueAddress())) {
            $a[self::FIELD_DEFAULT_VALUE_ADDRESS] = $v;
        }
        if (null !== ($v = $this->getDefaultValueAge())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DEFAULT_VALUE_AGE] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DEFAULT_VALUE_AGE_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DEFAULT_VALUE_AGE] = $v;
            }
        }
        if (null !== ($v = $this->getDefaultValueAnnotation())) {
            $a[self::FIELD_DEFAULT_VALUE_ANNOTATION] = $v;
        }
        if (null !== ($v = $this->getDefaultValueAttachment())) {
            $a[self::FIELD_DEFAULT_VALUE_ATTACHMENT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueBase64Binary())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] = $v;
            }
        }
        if (null !== ($v = $this->getDefaultValueBoolean())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DEFAULT_VALUE_BOOLEAN] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DEFAULT_VALUE_BOOLEAN] = $v;
            }
        }
        if (null !== ($v = $this->getDefaultValueCode())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DEFAULT_VALUE_CODE] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DEFAULT_VALUE_CODE_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DEFAULT_VALUE_CODE] = $v;
            }
        }
        if (null !== ($v = $this->getDefaultValueCodeableConcept())) {
            $a[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getDefaultValueCoding())) {
            $a[self::FIELD_DEFAULT_VALUE_CODING] = $v;
        }
        if (null !== ($v = $this->getDefaultValueContactPoint())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DEFAULT_VALUE_CONTACT_POINT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DEFAULT_VALUE_CONTACT_POINT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DEFAULT_VALUE_CONTACT_POINT] = $v;
            }
        }
        if (null !== ($v = $this->getDefaultValueCount())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DEFAULT_VALUE_COUNT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DEFAULT_VALUE_COUNT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DEFAULT_VALUE_COUNT] = $v;
            }
        }
        if (null !== ($v = $this->getDefaultValueDate())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DEFAULT_VALUE_DATE] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DEFAULT_VALUE_DATE_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DEFAULT_VALUE_DATE] = $v;
            }
        }
        if (null !== ($v = $this->getDefaultValueDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DEFAULT_VALUE_DATE_TIME] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DEFAULT_VALUE_DATE_TIME] = $v;
            }
        }
        if (null !== ($v = $this->getDefaultValueDecimal())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DEFAULT_VALUE_DECIMAL] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DEFAULT_VALUE_DECIMAL_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DEFAULT_VALUE_DECIMAL] = $v;
            }
        }
        if (null !== ($v = $this->getDefaultValueDistance())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DEFAULT_VALUE_DISTANCE] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DEFAULT_VALUE_DISTANCE_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DEFAULT_VALUE_DISTANCE] = $v;
            }
        }
        if (null !== ($v = $this->getDefaultValueDuration())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DEFAULT_VALUE_DURATION] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DEFAULT_VALUE_DURATION_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DEFAULT_VALUE_DURATION] = $v;
            }
        }
        if (null !== ($v = $this->getDefaultValueHumanName())) {
            $a[self::FIELD_DEFAULT_VALUE_HUMAN_NAME] = $v;
        }
        if (null !== ($v = $this->getDefaultValueId())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DEFAULT_VALUE_ID] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DEFAULT_VALUE_ID_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DEFAULT_VALUE_ID] = $v;
            }
        }
        if (null !== ($v = $this->getDefaultValueIdentifier())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DEFAULT_VALUE_IDENTIFIER] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DEFAULT_VALUE_IDENTIFIER_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DEFAULT_VALUE_IDENTIFIER] = $v;
            }
        }
        if (null !== ($v = $this->getDefaultValueInstant())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DEFAULT_VALUE_INSTANT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DEFAULT_VALUE_INSTANT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DEFAULT_VALUE_INSTANT] = $v;
            }
        }
        if (null !== ($v = $this->getDefaultValueInteger())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DEFAULT_VALUE_INTEGER] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DEFAULT_VALUE_INTEGER_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DEFAULT_VALUE_INTEGER] = $v;
            }
        }
        if (null !== ($v = $this->getDefaultValueMarkdown())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DEFAULT_VALUE_MARKDOWN] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DEFAULT_VALUE_MARKDOWN] = $v;
            }
        }
        if (null !== ($v = $this->getDefaultValueMeta())) {
            $a[self::FIELD_DEFAULT_VALUE_META] = $v;
        }
        if (null !== ($v = $this->getDefaultValueMoney())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DEFAULT_VALUE_MONEY] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DEFAULT_VALUE_MONEY_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DEFAULT_VALUE_MONEY] = $v;
            }
        }
        if (null !== ($v = $this->getDefaultValueOid())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DEFAULT_VALUE_OID] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DEFAULT_VALUE_OID_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DEFAULT_VALUE_OID] = $v;
            }
        }
        if (null !== ($v = $this->getDefaultValuePeriod())) {
            $a[self::FIELD_DEFAULT_VALUE_PERIOD] = $v;
        }
        if (null !== ($v = $this->getDefaultValuePositiveInt())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] = $v;
            }
        }
        if (null !== ($v = $this->getDefaultValueQuantity())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DEFAULT_VALUE_QUANTITY] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DEFAULT_VALUE_QUANTITY_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DEFAULT_VALUE_QUANTITY] = $v;
            }
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
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DEFAULT_VALUE_STRING] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DEFAULT_VALUE_STRING_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DEFAULT_VALUE_STRING] = $v;
            }
        }
        if (null !== ($v = $this->getDefaultValueTime())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DEFAULT_VALUE_TIME] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DEFAULT_VALUE_TIME_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DEFAULT_VALUE_TIME] = $v;
            }
        }
        if (null !== ($v = $this->getDefaultValueTiming())) {
            $a[self::FIELD_DEFAULT_VALUE_TIMING] = $v;
        }
        if (null !== ($v = $this->getDefaultValueUnsignedInt())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] = $v;
            }
        }
        if (null !== ($v = $this->getDefaultValueUri())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DEFAULT_VALUE_URI] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DEFAULT_VALUE_URI_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DEFAULT_VALUE_URI] = $v;
            }
        }
        if (null !== ($v = $this->getDefinition())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DEFINITION] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DEFINITION_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DEFINITION] = $v;
            }
        }
        if ([] !== ($vs = $this->getExample())) {
            $a[self::FIELD_EXAMPLE] = $vs;
        }
        if (null !== ($v = $this->getFixedAddress())) {
            $a[self::FIELD_FIXED_ADDRESS] = $v;
        }
        if (null !== ($v = $this->getFixedAge())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_FIXED_AGE] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_FIXED_AGE_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_FIXED_AGE] = $v;
            }
        }
        if (null !== ($v = $this->getFixedAnnotation())) {
            $a[self::FIELD_FIXED_ANNOTATION] = $v;
        }
        if (null !== ($v = $this->getFixedAttachment())) {
            $a[self::FIELD_FIXED_ATTACHMENT] = $v;
        }
        if (null !== ($v = $this->getFixedBase64Binary())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_FIXED_BASE_64BINARY] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_FIXED_BASE_64BINARY_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_FIXED_BASE_64BINARY] = $v;
            }
        }
        if (null !== ($v = $this->getFixedBoolean())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_FIXED_BOOLEAN] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_FIXED_BOOLEAN_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_FIXED_BOOLEAN] = $v;
            }
        }
        if (null !== ($v = $this->getFixedCode())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_FIXED_CODE] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_FIXED_CODE_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_FIXED_CODE] = $v;
            }
        }
        if (null !== ($v = $this->getFixedCodeableConcept())) {
            $a[self::FIELD_FIXED_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getFixedCoding())) {
            $a[self::FIELD_FIXED_CODING] = $v;
        }
        if (null !== ($v = $this->getFixedContactPoint())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_FIXED_CONTACT_POINT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_FIXED_CONTACT_POINT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_FIXED_CONTACT_POINT] = $v;
            }
        }
        if (null !== ($v = $this->getFixedCount())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_FIXED_COUNT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_FIXED_COUNT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_FIXED_COUNT] = $v;
            }
        }
        if (null !== ($v = $this->getFixedDate())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_FIXED_DATE] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_FIXED_DATE_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_FIXED_DATE] = $v;
            }
        }
        if (null !== ($v = $this->getFixedDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_FIXED_DATE_TIME] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_FIXED_DATE_TIME_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_FIXED_DATE_TIME] = $v;
            }
        }
        if (null !== ($v = $this->getFixedDecimal())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_FIXED_DECIMAL] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_FIXED_DECIMAL_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_FIXED_DECIMAL] = $v;
            }
        }
        if (null !== ($v = $this->getFixedDistance())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_FIXED_DISTANCE] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_FIXED_DISTANCE_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_FIXED_DISTANCE] = $v;
            }
        }
        if (null !== ($v = $this->getFixedDuration())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_FIXED_DURATION] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_FIXED_DURATION_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_FIXED_DURATION] = $v;
            }
        }
        if (null !== ($v = $this->getFixedHumanName())) {
            $a[self::FIELD_FIXED_HUMAN_NAME] = $v;
        }
        if (null !== ($v = $this->getFixedId())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_FIXED_ID] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_FIXED_ID_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_FIXED_ID] = $v;
            }
        }
        if (null !== ($v = $this->getFixedIdentifier())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_FIXED_IDENTIFIER] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_FIXED_IDENTIFIER_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_FIXED_IDENTIFIER] = $v;
            }
        }
        if (null !== ($v = $this->getFixedInstant())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_FIXED_INSTANT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_FIXED_INSTANT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_FIXED_INSTANT] = $v;
            }
        }
        if (null !== ($v = $this->getFixedInteger())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_FIXED_INTEGER] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_FIXED_INTEGER_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_FIXED_INTEGER] = $v;
            }
        }
        if (null !== ($v = $this->getFixedMarkdown())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_FIXED_MARKDOWN] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_FIXED_MARKDOWN_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_FIXED_MARKDOWN] = $v;
            }
        }
        if (null !== ($v = $this->getFixedMeta())) {
            $a[self::FIELD_FIXED_META] = $v;
        }
        if (null !== ($v = $this->getFixedMoney())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_FIXED_MONEY] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_FIXED_MONEY_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_FIXED_MONEY] = $v;
            }
        }
        if (null !== ($v = $this->getFixedOid())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_FIXED_OID] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_FIXED_OID_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_FIXED_OID] = $v;
            }
        }
        if (null !== ($v = $this->getFixedPeriod())) {
            $a[self::FIELD_FIXED_PERIOD] = $v;
        }
        if (null !== ($v = $this->getFixedPositiveInt())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_FIXED_POSITIVE_INT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_FIXED_POSITIVE_INT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_FIXED_POSITIVE_INT] = $v;
            }
        }
        if (null !== ($v = $this->getFixedQuantity())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_FIXED_QUANTITY] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_FIXED_QUANTITY_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_FIXED_QUANTITY] = $v;
            }
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
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_FIXED_STRING] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_FIXED_STRING_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_FIXED_STRING] = $v;
            }
        }
        if (null !== ($v = $this->getFixedTime())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_FIXED_TIME] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_FIXED_TIME_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_FIXED_TIME] = $v;
            }
        }
        if (null !== ($v = $this->getFixedTiming())) {
            $a[self::FIELD_FIXED_TIMING] = $v;
        }
        if (null !== ($v = $this->getFixedUnsignedInt())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_FIXED_UNSIGNED_INT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_FIXED_UNSIGNED_INT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_FIXED_UNSIGNED_INT] = $v;
            }
        }
        if (null !== ($v = $this->getFixedUri())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_FIXED_URI] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_FIXED_URI_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_FIXED_URI] = $v;
            }
        }
        if (null !== ($v = $this->getIsModifier())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_IS_MODIFIER] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_IS_MODIFIER_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_IS_MODIFIER] = $v;
            }
        }
        if (null !== ($v = $this->getIsSummary())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_IS_SUMMARY] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_IS_SUMMARY_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_IS_SUMMARY] = $v;
            }
        }
        if (null !== ($v = $this->getLabel())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_LABEL] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_LABEL_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_LABEL] = $v;
            }
        }
        if ([] !== ($vs = $this->getMapping())) {
            $a[self::FIELD_MAPPING] = $vs;
        }
        if (null !== ($v = $this->getMax())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MAX] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_MAX_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_MAX] = $v;
            }
        }
        if (null !== ($v = $this->getMaxLength())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MAX_LENGTH] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_MAX_LENGTH_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_MAX_LENGTH] = $v;
            }
        }
        if (null !== ($v = $this->getMaxValueDate())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MAX_VALUE_DATE] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_MAX_VALUE_DATE_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_MAX_VALUE_DATE] = $v;
            }
        }
        if (null !== ($v = $this->getMaxValueDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MAX_VALUE_DATE_TIME] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_MAX_VALUE_DATE_TIME_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_MAX_VALUE_DATE_TIME] = $v;
            }
        }
        if (null !== ($v = $this->getMaxValueDecimal())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MAX_VALUE_DECIMAL] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_MAX_VALUE_DECIMAL_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_MAX_VALUE_DECIMAL] = $v;
            }
        }
        if (null !== ($v = $this->getMaxValueInstant())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MAX_VALUE_INSTANT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_MAX_VALUE_INSTANT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_MAX_VALUE_INSTANT] = $v;
            }
        }
        if (null !== ($v = $this->getMaxValueInteger())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MAX_VALUE_INTEGER] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_MAX_VALUE_INTEGER_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_MAX_VALUE_INTEGER] = $v;
            }
        }
        if (null !== ($v = $this->getMaxValuePositiveInt())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MAX_VALUE_POSITIVE_INT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_MAX_VALUE_POSITIVE_INT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_MAX_VALUE_POSITIVE_INT] = $v;
            }
        }
        if (null !== ($v = $this->getMaxValueQuantity())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MAX_VALUE_QUANTITY] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_MAX_VALUE_QUANTITY_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_MAX_VALUE_QUANTITY] = $v;
            }
        }
        if (null !== ($v = $this->getMaxValueTime())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MAX_VALUE_TIME] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_MAX_VALUE_TIME_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_MAX_VALUE_TIME] = $v;
            }
        }
        if (null !== ($v = $this->getMaxValueUnsignedInt())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MAX_VALUE_UNSIGNED_INT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_MAX_VALUE_UNSIGNED_INT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_MAX_VALUE_UNSIGNED_INT] = $v;
            }
        }
        if (null !== ($v = $this->getMeaningWhenMissing())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MEANING_WHEN_MISSING] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_MEANING_WHEN_MISSING_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_MEANING_WHEN_MISSING] = $v;
            }
        }
        if (null !== ($v = $this->getMin())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MIN] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_MIN_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_MIN] = $v;
            }
        }
        if (null !== ($v = $this->getMinValueDate())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MIN_VALUE_DATE] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_MIN_VALUE_DATE_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_MIN_VALUE_DATE] = $v;
            }
        }
        if (null !== ($v = $this->getMinValueDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MIN_VALUE_DATE_TIME] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_MIN_VALUE_DATE_TIME_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_MIN_VALUE_DATE_TIME] = $v;
            }
        }
        if (null !== ($v = $this->getMinValueDecimal())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MIN_VALUE_DECIMAL] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_MIN_VALUE_DECIMAL_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_MIN_VALUE_DECIMAL] = $v;
            }
        }
        if (null !== ($v = $this->getMinValueInstant())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MIN_VALUE_INSTANT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_MIN_VALUE_INSTANT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_MIN_VALUE_INSTANT] = $v;
            }
        }
        if (null !== ($v = $this->getMinValueInteger())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MIN_VALUE_INTEGER] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_MIN_VALUE_INTEGER_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_MIN_VALUE_INTEGER] = $v;
            }
        }
        if (null !== ($v = $this->getMinValuePositiveInt())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MIN_VALUE_POSITIVE_INT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_MIN_VALUE_POSITIVE_INT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_MIN_VALUE_POSITIVE_INT] = $v;
            }
        }
        if (null !== ($v = $this->getMinValueQuantity())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MIN_VALUE_QUANTITY] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_MIN_VALUE_QUANTITY_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_MIN_VALUE_QUANTITY] = $v;
            }
        }
        if (null !== ($v = $this->getMinValueTime())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MIN_VALUE_TIME] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_MIN_VALUE_TIME_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_MIN_VALUE_TIME] = $v;
            }
        }
        if (null !== ($v = $this->getMinValueUnsignedInt())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MIN_VALUE_UNSIGNED_INT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_MIN_VALUE_UNSIGNED_INT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_MIN_VALUE_UNSIGNED_INT] = $v;
            }
        }
        if (null !== ($v = $this->getMustSupport())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MUST_SUPPORT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_MUST_SUPPORT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_MUST_SUPPORT] = $v;
            }
        }
        if (null !== ($v = $this->getOrderMeaning())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_ORDER_MEANING] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_ORDER_MEANING_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_ORDER_MEANING] = $v;
            }
        }
        if (null !== ($v = $this->getPath())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PATH] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_PATH_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_PATH] = $v;
            }
        }
        if (null !== ($v = $this->getPatternAddress())) {
            $a[self::FIELD_PATTERN_ADDRESS] = $v;
        }
        if (null !== ($v = $this->getPatternAge())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PATTERN_AGE] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_PATTERN_AGE_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_PATTERN_AGE] = $v;
            }
        }
        if (null !== ($v = $this->getPatternAnnotation())) {
            $a[self::FIELD_PATTERN_ANNOTATION] = $v;
        }
        if (null !== ($v = $this->getPatternAttachment())) {
            $a[self::FIELD_PATTERN_ATTACHMENT] = $v;
        }
        if (null !== ($v = $this->getPatternBase64Binary())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PATTERN_BASE_64BINARY] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_PATTERN_BASE_64BINARY_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_PATTERN_BASE_64BINARY] = $v;
            }
        }
        if (null !== ($v = $this->getPatternBoolean())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PATTERN_BOOLEAN] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_PATTERN_BOOLEAN_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_PATTERN_BOOLEAN] = $v;
            }
        }
        if (null !== ($v = $this->getPatternCode())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PATTERN_CODE] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_PATTERN_CODE_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_PATTERN_CODE] = $v;
            }
        }
        if (null !== ($v = $this->getPatternCodeableConcept())) {
            $a[self::FIELD_PATTERN_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getPatternCoding())) {
            $a[self::FIELD_PATTERN_CODING] = $v;
        }
        if (null !== ($v = $this->getPatternContactPoint())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PATTERN_CONTACT_POINT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_PATTERN_CONTACT_POINT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_PATTERN_CONTACT_POINT] = $v;
            }
        }
        if (null !== ($v = $this->getPatternCount())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PATTERN_COUNT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_PATTERN_COUNT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_PATTERN_COUNT] = $v;
            }
        }
        if (null !== ($v = $this->getPatternDate())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PATTERN_DATE] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_PATTERN_DATE_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_PATTERN_DATE] = $v;
            }
        }
        if (null !== ($v = $this->getPatternDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PATTERN_DATE_TIME] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_PATTERN_DATE_TIME_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_PATTERN_DATE_TIME] = $v;
            }
        }
        if (null !== ($v = $this->getPatternDecimal())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PATTERN_DECIMAL] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_PATTERN_DECIMAL_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_PATTERN_DECIMAL] = $v;
            }
        }
        if (null !== ($v = $this->getPatternDistance())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PATTERN_DISTANCE] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_PATTERN_DISTANCE_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_PATTERN_DISTANCE] = $v;
            }
        }
        if (null !== ($v = $this->getPatternDuration())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PATTERN_DURATION] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_PATTERN_DURATION_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_PATTERN_DURATION] = $v;
            }
        }
        if (null !== ($v = $this->getPatternHumanName())) {
            $a[self::FIELD_PATTERN_HUMAN_NAME] = $v;
        }
        if (null !== ($v = $this->getPatternId())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PATTERN_ID] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_PATTERN_ID_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_PATTERN_ID] = $v;
            }
        }
        if (null !== ($v = $this->getPatternIdentifier())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PATTERN_IDENTIFIER] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_PATTERN_IDENTIFIER_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_PATTERN_IDENTIFIER] = $v;
            }
        }
        if (null !== ($v = $this->getPatternInstant())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PATTERN_INSTANT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_PATTERN_INSTANT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_PATTERN_INSTANT] = $v;
            }
        }
        if (null !== ($v = $this->getPatternInteger())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PATTERN_INTEGER] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_PATTERN_INTEGER_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_PATTERN_INTEGER] = $v;
            }
        }
        if (null !== ($v = $this->getPatternMarkdown())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PATTERN_MARKDOWN] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_PATTERN_MARKDOWN_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_PATTERN_MARKDOWN] = $v;
            }
        }
        if (null !== ($v = $this->getPatternMeta())) {
            $a[self::FIELD_PATTERN_META] = $v;
        }
        if (null !== ($v = $this->getPatternMoney())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PATTERN_MONEY] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_PATTERN_MONEY_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_PATTERN_MONEY] = $v;
            }
        }
        if (null !== ($v = $this->getPatternOid())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PATTERN_OID] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_PATTERN_OID_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_PATTERN_OID] = $v;
            }
        }
        if (null !== ($v = $this->getPatternPeriod())) {
            $a[self::FIELD_PATTERN_PERIOD] = $v;
        }
        if (null !== ($v = $this->getPatternPositiveInt())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PATTERN_POSITIVE_INT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_PATTERN_POSITIVE_INT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_PATTERN_POSITIVE_INT] = $v;
            }
        }
        if (null !== ($v = $this->getPatternQuantity())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PATTERN_QUANTITY] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_PATTERN_QUANTITY_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_PATTERN_QUANTITY] = $v;
            }
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
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PATTERN_STRING] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_PATTERN_STRING_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_PATTERN_STRING] = $v;
            }
        }
        if (null !== ($v = $this->getPatternTime())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PATTERN_TIME] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_PATTERN_TIME_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_PATTERN_TIME] = $v;
            }
        }
        if (null !== ($v = $this->getPatternTiming())) {
            $a[self::FIELD_PATTERN_TIMING] = $v;
        }
        if (null !== ($v = $this->getPatternUnsignedInt())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PATTERN_UNSIGNED_INT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_PATTERN_UNSIGNED_INT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_PATTERN_UNSIGNED_INT] = $v;
            }
        }
        if (null !== ($v = $this->getPatternUri())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PATTERN_URI] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_PATTERN_URI_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_PATTERN_URI] = $v;
            }
        }
        if ([] !== ($vs = $this->getRepresentation())) {
            $a[self::FIELD_REPRESENTATION] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if (null !== ($val = $v->getValue())) {
                    $a[self::FIELD_REPRESENTATION][] = $val;
                    if (1 < count($enc = $v->jsonSerialize())) {
                        unset($enc[$v::FIELD_VALUE]);
                        $a[self::FIELD_REPRESENTATION_EXT][] = $enc;
                    } else {
                        $a[self::FIELD_REPRESENTATION_EXT][] = null;
                    }
                } else {
                    $a[self::FIELD_REPRESENTATION][] = $v;
                }
            }
        }
        if (null !== ($v = $this->getRequirements())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_REQUIREMENTS] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_REQUIREMENTS_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_REQUIREMENTS] = $v;
            }
        }
        if (null !== ($v = $this->getShort())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_SHORT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_SHORT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_SHORT] = $v;
            }
        }
        if (null !== ($v = $this->getSliceName())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_SLICE_NAME] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_SLICE_NAME_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_SLICE_NAME] = $v;
            }
        }
        if (null !== ($v = $this->getSlicing())) {
            $a[self::FIELD_SLICING] = $v;
        }
        if ([] !== ($vs = $this->getType())) {
            $a[self::FIELD_TYPE] = $vs;
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